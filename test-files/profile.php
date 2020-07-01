<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'config/constants.php';
require 'autoload.php';

$login = new UserClass();
$level = new AccessLevel();
$phrase = new RecoveryPhrase();
include 'functions/functions.php';
include 'top.php';
?>
</head>
<body>
    <?php
    include 'header.php';
    if ($login->isLoggedIn() === true) {
        include ("views/accountSettings.php"); // Else prompt login form
    } else {
        header('Location: index.php'); // If user is not logged in redirect back to index.php
    }
    ?>
</body>
</html>