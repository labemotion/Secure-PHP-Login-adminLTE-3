<?php

/* Credentials for login system */

define('DBHOST', 'localhost'); // Add your host
define('DBUSER', 'root'); // Add your username
define('DBPASS', 'truelove'); // Add your password
define('DBNAME', 'projectloginsystem'); // Add your database name

/* Credentials for app use another database */

define('LNKHOST', 'localhost'); // Add your host
define('LNKUSER', 'root'); // Add your username
define('LNKDBPASS', 'truelove'); // Add your password
define('LNKDBNAME', 'projectloginsystem'); // Add your database name

$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

/* If connection fails for some reason */
if ($conn->connect_error) {
    die('Error, Database connection failed: (' . $conn->connect_errno . ') ' . $conn->connect_error);
}
$conn->set_charset("utf8mb4");


$serv = "http://" . $_SERVER['HTTP_HOST'] . "/Secure-PHP-Login-adminLTE-3/";

$path = "http://" . $_SERVER['SCRIPT_FILENAME'];
$fname = basename($path, ".php");

define('PATH_SYS', $serv);
?>
