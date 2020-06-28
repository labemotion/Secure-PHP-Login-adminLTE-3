<?php

/**
 * Description of Register
 *
 * @author PePiuoX
 */
class newUser {

    var $baseurl;

    public function __construct() {
        $this->baseurl = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
        /* If registration data is posted call createUser function. */
        if (isset($_POST["register"])) {
            $this->Register();
        }
    }

    public function procheck($string) {
        return htmlspecialchars(trim($string), ENT_QUOTES);
    }

    public function risValidUsername($str) {
        return preg_match('/^[a-zA-Z0-9-_]+$/', $str);
    }

    public function risValidEmail($str) {
        if (!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $str)) {
            $_SESSION['ErrorMessage'] = 'Por favor inserte el correo electrónico correcto.';
            exit();
        }
        return filter_var($str, FILTER_VALIDATE_EMAIL);
    }

    public function checkUsername($username) {
        global $conn;
        $num = $conn->query("SELECT username FROM users WHERE username='$username'")->num_rows;
        return $num;
    }

    public function checkEmail($email) {
        global $conn;
        $num = $conn->query("SELECT email FROM users WHERE email='$email'")->num_rows;
        return $num;
    }

    /* start Register() */

    private function Register() {
        global $conn;
        if (isset($_POST['register'])) {

            $username = $this->procheck($_POST['username']);
            $email = $this->procheck($_POST['email']);
            $password = $this->procheck($_POST['password']);
            $repassword = $this->procheck($_POST['repassword']);

            $dt = new DateTime();
            $time = $dt->format('Y-m-d H:i:s');
            $ip = $_SERVER['REMOTE_ADDR'];

// message for incomplete field or actions
            if (empty($username) || empty($email) || empty($password) || empty($repassword)) {
                $_SESSION['ErrorMessage'] = "¡Complete los campos o casillas!";
            } elseif (!$this->risValidUsername($username)) {
                $_SESSION['ErrorMessage'] = "¡Ingrese un usuario valido!";
            } elseif ($this->checkUsername($username) > 0) {
                $_SESSION['ErrorMessage'] = "¡El usuario ya existe!";
            } elseif (!$this->risValidEmail($email)) {
                $_SESSION['ErrorMessage'] = "¡Ingrese un correo electronico valido!";
            } elseif ($this->checkEmail($email) > 0) {
                $_SESSION['ErrorMessage'] = "¡El correo electronico ya existe!";
            } elseif ($password !== $repassword) {
                $_SESSION['ErrorMessage'] = "¡La contreseña no coincide!";
            } else {
// check first if the password are identical
                if ($password === $repassword) {

// randtoken maker
                    function randToken($len = 64) {
                        return substr(sha1(openssl_random_pseudo_bytes(21)), - $len);
                    }

// randkey maker
                    function randKey($len = 64) {
                        return substr(sha1(openssl_random_pseudo_bytes(13)), - $len);
                    }

// randhash maker
                    function randHash($len = 64) {
                        return substr(sha1(openssl_random_pseudo_bytes(17)), - $len);
                    }

                    $ekey = randHash();
                    $eiv = randkey();
// enckey maker
                    $enck = randToken();

                    define("ENCRYPT_METHOD", "AES-256-CBC");
                    define("SECRET_KEY", $ekey);
                    define("SECRET_IV", $eiv);

                    function ende_crypter($action, $string) {
                        $output = false;
                        $encrypt_method = ENCRYPT_METHOD;
                        $secret_key = SECRET_KEY;
                        $secret_iv = SECRET_IV;
// hash
                        $key = hash('sha256', $secret_key);

// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
                        $iv = substr(hash('sha256', $secret_iv), 0, 16);
                        if ($action == 'encrypt') {
                            $output = base64_encode(openssl_encrypt($string, $encrypt_method, $key, 0, $iv));
                        } else if ($action == 'decrypt') {
                            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
                        }
                        return $output;
                    }

                    $newid = uniqid(rand(), false);
                    $pass = ende_crypter('encrypt', $password);
                    $cml = ende_crypter('encrypt', $email);
                    $pin = rand(000000, 999999);
                    $code = randkey();
                    $status = 0;
                    $dvd = 0;
                    $mvd = 0;
                    $ban = 1;
                    $is_actd = 0;
// adding data in table users and info
                    $stmt = $conn->prepare("INSERT INTO users (idUser,username,email,password,status,ip,signup_time,email_verified,document_verified,mobile_verified) "
                            . "VALUES (?,?,?,?,?,?,?,?,?,?)");
                    $stmt->bind_param("ssssisssii", $newid, $username, $cml, $pass, $status, $ip, $time, $code, $dvd, $mvd);
                    $stmt->execute();
                    $inst1 = $stmt->affected_rows;
                    $stmt->close();
// adding data in table uverify
                    $stmt1 = $conn->prepare("INSERT INTO uverify (iduv,username,email,password,mktoken,mkkey,mkhash,mkpin,activation_code,is_activated,banned) "
                            . "VALUES (?,?,?,?,?,?,?,?,?,?,?)");
                    $stmt1->bind_param("sssssssssii", $newid, $username, $email, $pass, $ekey, $eiv, $enck, $pin, $code, $is_actd, $ban);
                    $stmt1->execute();
                    $inst2 = $stmt1->affected_rows;
                    $stmt1->close();
// adding data in table info
                    $info = $conn->prepare("INSERT INTO profiles(idp) VALUES (?)");
                    $info->bind_param("s", $newid);
                    $info->execute();
                    $inst3 = $info->affected_rows;
                    $info->close();

                    if ($inst1 === 1 && $inst2 === 1 && $inst3 === 1) {

// message for PIN save                       
                        $query = $conn->prepare("SELECT * FROM uverify WHERE username=? AND email=? AND password=?");
                        $query->bind_param("sss", $username, $email, $pass);
                        $query->execute();
                        $result = $query->get_result();
                        if ($result->num_rows === 1) {
                            $row = $result->fetch_assoc();
                            $upid = $row['iduv'];
                            $upin = $row['mkpin'];
                            $_SESSION['uid'] = $row['iduv'];

                            $this->updatePIN($upid, $upin);

                            $this->sendEmail($email, $pin, $code, $enck);
                            $_SESSION['SuccessMessage'] = '¡Recuerde! Guarde esto, su código PIN es: ' . $pin . ' Gracias por registrarse';
                        } else {
                            $_SESSION['ErrorMessage'] = 'El registro de seguridad no se pudo completar, consulte con el soporte técnico.';
                        }
                        $query->close();
                    } else {
                        $_SESSION['ErrorMessage'] = 'Error en la creación del usuario, consulte con el soporte para continuar con su registro.';
                    }
                }
            }
        }
    }

    /*
     * Function Register(){
     * Function that includes everything for new user creation.
     * Data is taken from registration form, converted to prevent SQL injection and
     * checked that values are filled, if all is correct data is entered to user database.
     */

    private function sendEmail($email, $pin, $code, $enck) {
        $to = $email;
        $subject = "Su código de activación para Membresía.";
        $from = 'contact@labemotion.net'; // This should be changed to an email that you would like to send activation e-mail from.
        $body = 'Tu codigo PIN de acceso es: <b>' . $pin . '</b>' . "\r\n" . 'Te recomendamos guardarlo, no necesitaras para acceder con tu contraseña.' . "\r\n";
        $body .= 'Para activar su cuenta, haga clic en el siguiente enlace' . "\r\n" . ' <a href="' . $this->baseurl . '/verify.php?id=' . $email . '&code=' . $code . '&hash=' . $enck . '">Verifique su correo electrónico</a>' . "\r\n"; // Input the URL of your website.
        $body .= 'Ingresa y crea tu frase de recuperación.';
        $headers = "From: " . $from . "\r\n";
        $headers .= "Reply-To: " . $from . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $success = mail($to, $subject, $body, $headers);
        if ($success === true) {
            $_SESSION['SuccessMessage'] = '¡Se le envio un mensaje a su bandeja de correo para verificar su nueva cuenta! ';
        } else {
            $_SESSION['ErrorMessage'] = '¡Error al enviar un mensaje a su bandeja de correo para verificar su nueva cuenta! ';
        }
    }

    private function updatePIN($upid, $upin) {
        global $conn;

        $update = $conn->prepare("UPDATE users SET mkpin='$upin' WHERE idUser='$upid '");
        $update->bind_param("ss", $upin, $upid);
        $update->execute();
        if ($update->affected_rows === 1) {
            $_SESSION['SuccessMessage'] = '¡El usuario ha sido creado! '
                    . '¡El usuario se a registrado con exito!'
                    . '<meta http-equiv="refresh" content="3;URL=index.php" />';
        }
        $update->close();
    }

    public function generateRandStr($length) {
        $randstr = "";
        for ($i = 0; $i < $length; $i++) {
            $randnum = mt_rand(0, 61);
            if ($randnum < 10) {
                $randstr .= chr($randnum + 53);
            } else if ($randnum < 36) {
                $randstr .= chr($randnum + 49);
            } else {
                $randstr .= chr($randnum + 61);
            }
        }
        return $randstr;
    }

}
