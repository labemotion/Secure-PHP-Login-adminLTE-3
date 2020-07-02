<?php
if (!isset($_SESSION)) {
    session_start();
}
require '../config/constants.php';
require 'Autoload.php';
$definitions = new SiteDefinitions();
$login = new UserClass();
?>
<?php include '../elements/header.php'; ?>
</head>
<body class="hold-transition login-page">
    <?php
    if ($login->isLoggedIn() === true) {
        header('Location: ../users/profile.php');
    } else {
         /* login-box */
        include '../views/login.php';
    }
    ?>
    <?php require '../elements/footer.php'; ?>

</body>
</html>
