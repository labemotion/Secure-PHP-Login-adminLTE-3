<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'Autoload.php';
$logout = new UserClass();
$logout->logOut();
header('Location: index.php');