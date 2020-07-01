<?php

if (!isset($_SESSION)) {
    session_start();
}
$forgot = new userForgot();
require 'autoload.php';
/* Call for registration class */
$registration = new UserClass();

include ("views/registrationForm.php");
?>