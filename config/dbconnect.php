<?php

/* Connection */
$conn = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

/* If connection fails for some reason */
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

?>