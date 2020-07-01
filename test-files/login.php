<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'config/constants.php';
require 'autoload.php';
$connection = new AccessConnect();
$login = new UserClass();

include 'top.php';
?>
</head>
<body>
    <?php
    include 'header.php';
    /* Call for login function */
    if ($login->isLoggedIn() === true) {
        include ("views/loginTrue.php"); // If user is already logged in redirect back to index.php
    } else {
        include ("views/login.php"); // Else prompt login form
    }
    ?>
</body>
</html>