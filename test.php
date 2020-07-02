<?php

if (!isset($_SESSION)) {
    session_start();
}
require 'config/constants.php';
require 'Autoload.php';
$connection = new AccessConnect();
$login = new UserClass();

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
if ($result->num_rows === 0) {
    define('NAMES', $urw['nombre']);
} else {
    unset($_SESSION['username']);
    unset($_SESSION['user_id']);
    unset($_SESSION['level']);
    session_destroy(); // Destroy all session data.
}

$stmt->close();
