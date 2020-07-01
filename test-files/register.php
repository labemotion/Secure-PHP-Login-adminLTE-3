<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'config/constants.php';
require 'autoload.php';
$connection = new AccessConnect();
$login = new UserClass();
$level = new AccessLevel();
$newuser = new newUser();

include 'functions/functions.php';
include 'top.php';
?>
</head>
<body>
    <?php
    include 'header.php';
    if ($login->isLoggedIn() === true) {
        header('Location: index.php'); // If user is already logged in redirect back to index.php
    } else {
        echo
        include 'views/register.php';
    }
    ?>
</body>
</html>