<?php

class CheckValidUser {

    public function __construct() {
        global $conn;
        $id = $_SESSION['user_id'];
        $hash = $_SESSION['hash'];

        $stmt = $conn->prepare("SELECT * FROM profiles WHERE idp = ? AND mkhash = ?");
        $stmt->bind_param("ss", $id, $hash);
        $stmt->execute();
        $result = $stmt->get_result();
        $urw = $result->fetch_assoc();

        /*
         * $stmt->store_result();
         */
        if ($result->num_rows === 1) {
            define('USERS_NAMES', $urw['nombre']);
            define('USERS_lASTNAMES', $urw['apellido']);
            define('USERS_FULLNAMES', $urw['nombre'].' '.$urw['apellido']);
            define('USERS_AVATARS', $urw['avatar']);
            define('USERS_SKILLS', $urw['profesion']);
            define('USERS_CURRENTS_OCCUPATION', $urw['ocupacion']);
        } else {            
            unset($_SESSION['user_id']);
            unset($_SESSION['level']);
            unset($_SESSION['hash']);
            session_destroy(); // Destroy all session data.
        }

        $stmt->close();
    }

}