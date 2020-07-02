<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userForgot
 *
 * @author PePiuoX
 */
class userForgot {

    var $baseurl;

    public function __construct() {
        $this->baseurl = "http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
        /* If forgot password form data is posted call forgotPassword() function. */
        if (isset($_POST["forgotPassword"])) {
            $this->forgotPassword();
        }
        /* If forgot PIN form data is posted call forgotPIN() function. */
        if (isset($_POST["forgotPIN"])) {
            $this->forgotPIN();
        }
        if (isset($_POST["updatePassword"])) {
            $this->updatePassword();
        }
        if (isset($_POST["updatePIN"])) {
            $this->updatePIN();
        }
    }

    /*
     * Function forgotPassword()
     * If the email exists $forgot_password_key is created to database, after this user will be sent an reset key via e-mail.
     * This is the first step of password reset.
     */

    private function forgotPassword() {
// Require credentials for DB connection.
        global $conn;

        if (isset($_POST['forgotPassword'])) {
            $email = trim($_POST['email']);

// Require credentials for DB connection.
// Check if username or email is already taken.
            $stmt = $conn->prepare("SELECT username, email, mkhash FROM uverify WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
            $urw = $result->fetch_assoc();
            $stmt->close();
            $hash = $urw['mkhash'];
            $uname = $urw['username'];
// If e-mail exists a key for password reset is created into database, after this an e-mail will be sent to user with link and the token key.
            if ($result->num_rows === 1) {

                function enfKey($len = 64) {
                    return substr(sha1(openssl_random_pseudo_bytes(19)), - $len);
                }

                $forgot_password_key = enfKey();
                $inactive = 0;
                $stmt = $conn->prepare("UPDATE uverify SET password_key = ?, is_activated = ? WHERE email = ?");
                $stmt->bind_param("sis", $forgot_password_key, $inactive, $email);
                $stmt->execute();
                $stmt->close();

                $startT = date("Y-m-d H:i:s");
                $expireT = date('Y-m-d H:i:s', strtotime('+2 hour', strtotime($startT)));
                $stmt1 = $conn->prepare("INSERT INTO forgot_pass (username, email, password_key, expire) VALUES (?,?,?,?)");
                $stmt1->bind_param("sss", $uname, $email, $forgot_password_key, $expireT);
                $stmt1->execute();
                $stmt1->close();
               
                $to = $email;
                $subject = "Restablecer la contraseña";
                $from = 'contact@labemotion.net'; // Insert the e-mail from where you want to send the emails.
                $body = "Su clave de reinicio es: " . $forgot_password_key . "\n";
                $body .= '<a href="' . $this->baseurl . '/signin/password_reset.php?email=' . $email . '&key=' . $forgot_password_key . '&hash=' . $hash . '">Haga click para restaurar su contraseña.</a>'; // Replace YOURWEBSITEURL with your own URL for the link to work.
                $headers = "From: " . $from . "\r\n";
                $headers .= "Reply-To: " . $from . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                $success = mail($to, $subject, $body, $headers);
                if ($success === true) {
                    $_SESSION['SuccessMessage'] = 'E-mail ha sido enviado.' . '\n' .
                            '¡El correo electrónico contiene los pasos a seguir para el reinicio de su contraseña!';
                } else {
                    $_SESSION['ErrorMessage'] = '¡Error al enviar un mensaje a su correo electrónico';
                }
// Always give this message to prevent data colleting even if the e-mail doesn't exist(The password reset e-mail is only sent if the e-mail exists in database).
            } else {
                $_SESSION['ErrorMessage'] = 'E-mail no existe o es incorrecto.';
            }
        }
        $conn->close();
    }

    /* End forgotPassword() */

    private function forgotPIN() {
// Require credentials for DB connection.
        global $conn;

        if (isset($_POST['forgotPIN'])) {
            $email = trim($_POST['email']);

// Check if username or email is already taken.
            $stmt = $conn->prepare("SELECT username, email, mkhash FROM uverify WHERE email = ?");
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $inst = $stmt->affected_rows;
            $result = $stmt->get_result();
            $urw = $result->fetch_assoc();
            /* bind result variables */
            $stmt->close();
            $mkhash = $urw['mkhash'];
            $uname = $urw['username'];
// If e-mail exists a key for password reset is created into database, after this an e-mail will be sent to user with link and the token key.
            if ($inst === 1) {

                function enfKey($len = 64) {
                    return substr(sha1(openssl_random_pseudo_bytes(19)), - $len);
                }

                $forgot_pin_key = enfKey();
                $inactive = 0;
                $stmt = $conn->prepare("UPDATE uverify SET pin_key = ?, is_activated = ? WHERE email = ?");
                $stmt->bind_param("sis", $forgot_pin_key, $inactive, $email);
                $stmt->execute();
                $stmt->close();

                $startT = date("Y-m-d H:i:s");
                $expireT = date('Y-m-d H:i:s', strtotime('+2 hour', strtotime($startT)));
                $stmt1 = $conn->prepare("INSERT INTO forgot_pin (username,email,pin_key,expire) VALUES (?,?,?,?)");
                $stmt1->bind_param("ssss", $uname, $email, $forgot_pin_key, $expireT);
                $stmt1->execute();
                $stmt1->close();

                $to = $email;
                $subject = "Restablecer el PIN";
                $from = 'contact@labemotion.net'; // Insert the e-mail from where you want to send the emails.
                $body = "Su clave de reinicio es: " . $forgot_pin_key . "\n";
                $body .= '<a href="' . $this->baseurl . '/signin/pin_reset.php?email=' . $email . '&key=' . $forgot_pin_key . '&hash=' . $mkhash . '">Haga click aqui para resetear su PIN</a>'; // Replace YOURWEBSITEURL with your own URL for the link to work.
                $headers = "From: " . $from . "\r\n";
                $headers .= "Reply-To: " . $from . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                $success = mail($to, $subject, $body, $headers);
// Always give this message to prevent data colleting even if the e-mail doesn't exist(The password reset e-mail is only sent if the e-mail exists in database).
                if ($success === true) {
                    $_SESSION['SuccessMessage'] = 'E-mail ha sido enviado.' . '\n' .
                            '¡El correo electrónico contiene los pasos a seguir para el reinicio de su PIN!';
                } else {
                    $_SESSION['ErrorMessage'] = '¡Error al enviar un mensaje a su correo electrónico';
                }
            } else {
                $_SESSION['ErrorMessage'] = 'E-mail no existe o es incorrecto.';
            }
        }
        $conn->close();
    }

    /* End forgotPIN() */


    /*
     * function updatePassword()
     * Get information from Password Reset Form, if the email & token key are correct, update the passwordin database.
     * This is the third and final step of password reset.
     */

    private function updatePassword() {
        if (isset($_POST['updatePassword'])) {
            if (isset($_GET['email']) && isset($_GET['key']) && isset($_GET['hash'])) {
// Require credentials for DB connection.
                global $conn;
                $email = htmlentities($_GET['email']);
                $forgotkey = htmlentities($_GET['key']);
                $hash = htmlentities($_GET['hash']);

                $chck = $conn->prepare("SELECT * FROM forgot_pass WHERE email=? AND mkhash=? AND password_key=?");
                $chck->bind_param("sss", $email, $hash, $forgotkey);
                $chck->execute();
                $okey = $chck->get_result();
                $chck->close();

                $ct = $okey->fetch_assoc();
                $nowTime = date("Y-m-d H:i:s");
                $et = $ct['expire'];

                if ($nowTime >= $et) {
                    $_SESSION['ErrorMessage'] = 'Expiro el tiempo para resetear su contraseña.';
                    header('Location: index.php');
                }
                if (!empty($password3) && !empty($email)) {
// User input from Forgot password form(passwordResetForm.php).
                    $vemail = trim($_POST['vemail']);
                    $recoveryphrase = trim($_POST['recoveryphrase']);
                    $password2 = trim($_POST['password2']);
                    $password3 = trim($_POST['password3']);

// Check that both entered passwords match.
                    if ($password3 === $password2 && $vemail === $email) {

                        $stmt = $conn->prepare("SELECT * FROM uverify WHERE email=? AND mkhash=? AND password_key=? AND recovery_phrase=?");
                        $stmt->bind_param("sss", $email, $hash, $forgotkey, $recoveryphrase);
                        $stmt->execute();
                        $very = $stmt->get_result();

                        if ($very->num_rows === 1) {
                            $dt = $very->fetch_assoc();
                            $duv = $dt['iduv'];
                            $pin = $dt['mkpin'];

                            function randHash($len = 32) {
                                return substr(sha1(openssl_random_pseudo_bytes(21)), - $len);
                            }

                            function randKey($len = 32) {
                                return substr(sha1(openssl_random_pseudo_bytes(13)), - $len);
                            }

                            function encKey($len = 32) {
                                return substr(sha1(openssl_random_pseudo_bytes(17)), - $len);
                            }

                            $ekey = randHash();
                            $eiv = randkey();
                            $enck = enckey();

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

                            $securing = ende_crypter('encrypt', $password2);
                            $cml = ende_crypter('encrypt', $email);
                            $clenkey = '';
                            $upd = $conn->query("UPDATE uverify password=?, mktoken=?, mkkey=?, mkhash=, password_key=? WHERE email=? AND recovery_phrase=? AND password_key=?");
                            $upd->bind_param("sssss", $securing, $ekey, $eiv, $$enck, $clenkey, $email, $recoveryphrase, $forgotkey);
                            $upd->execute();
                            $upd->close();
                            if ($upd === TRUE) {
                                $stmt = $conn->prepare("UPDATE users SET email = ?, password = ?  WHERE idUser=? AND mkpin=?");
                                $stmt->bind_param("sssi", $cml, $securing, $duv, $pin);
                                $stmt->execute();
                                $stmt->close();
                                header('Location: index.php');
                            }
                        } else {
                            $_SESSION['ErrorMessage'] = 'No coinciden los datos para actualizar su contraseña.';
                        }
                    } else {
                        $_SESSION['ErrorMessage'] = '¡Las contraseñas no coinciden!';
                    }
                } else {
                    $_SESSION['ErrorMessage'] = 'Por favor llene todos los campos requeridos.';
                }
                $conn->close();
            }
        }
    }

    /* End updatePassword() */

    /*
     * function updatePassword()
     * Get information from Password Reset Form, if the email & token key are correct, update the passwordin database.
     * This is the third and final step of password reset.
     */

    private function updatePIN() {
        if (isset($_POST['updatePIN'])) {
            if (isset($_GET['email']) && isset($_GET['key']) && isset($_GET['hash'])) {
                // Require credentials for DB connection.
                global $conn;

                $email = htmlentities($_GET['email']);
                $forgotkey = htmlentities($_GET['key']);
                $hash = htmlentities($_GET['hash']);

                $chck = $conn->prepare("SELECT * FROM forgot_pin WHERE email=? AND mkhash=? AND password_key=?");
                $chck->bind_param("sss", $email, $hash, $forgotkey);
                $chck->execute();
                $okey = $chck->get_result();
                $chck->close();

                $ct = $okey->fetch_assoc();
                $nowTime = date("Y-m-d H:i:s");
                $et = $ct['expire'];

                if ($nowTime >= $et) {
                    $_SESSION['ErrorMessage'] = 'Expiro el tiempo para resetear su PIN.';
                    header('Location: index.php');
                }
// User input from Forgot password form(passwordResetForm.php).
                $vemail = trim($_POST['vemail']);
                $recoveryphrase = trim($_POST['recoveryphrase']);

// Check that both entered passwords match.
                if ($vemail === $email) {
                    if (!empty($recoveryphrase) && !empty($email)) {
                        $very = $conn->query("SELECT * FROM uverify WHERE email='$email' AND pin_key='$forgotkey' AND recovery_phrase='$recoveryphrase'");

                        if ($very->num_rows === 1) {
                            $dt = $very->fetch_assoc();
                            $duv = $dt['iduv'];

                            define("ENCRYPT_METHOD", "AES-256-CBC");
                            define("SECRET_KEY", $dt['mktoken']);
                            define("SECRET_IV", $dt['mkkey']);

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

                            $checkm = ende_crypter('encrypt', $email);

                            $fnal = $conn->query("SELECT idUser, FROM users WHERE email='$checkm'");
                            $rt = $fnal->fetch_assoc();
                            if ($fnal->num_rows === 1) {
                                if ($duv === $rt['idUser']) {
                                    $npin = rand(000000, 999999);
                                    $clenkey = '';
                                    $upd = $conn->query("UPDATE uverify mkpin='$npin', pin_key='$clenkey' WHERE email='$email' AND recovery_phrase='$recoveryphrase'");
                                    if ($upd === TRUE) {
                                        $stmt = $conn->prepare("UPDATE users SET mkpin=?  WHERE idUser=? AND mkpin=?");
                                        $stmt->bind_param("ssi", $npin, $duv, $npin);
                                        $stmt->execute();
                                        $stmt->close();
                                        header('Location: index.php');
                                    }
                                }
                            }
                        } else {
                            $_SESSION['ErrorMessage'] = 'No coinciden los datos para actualizar su contraseña.';
                        }
                    } else {
                        $_SESSION['ErrorMessage'] = 'Por favor llene todos los campos requeridos.';
                    }
                } else {
                    $_SESSION['ErrorMessage'] = '¡Las contraseñas no coinciden!';
                }
            }
            $conn->close();
        }
    }

    /* End updatePin() */
}
