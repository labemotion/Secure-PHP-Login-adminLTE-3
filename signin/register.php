<?php
if (!isset($_SESSION)) {
    session_start();
}
require '../config/constants.php';
require 'Autoload.php';
$definitions = new SiteDefinitions();
$login = new UserClass();
$level = new AccessLevel();
$newuser = new newUser();
?>
<?php include '../elements/header.php'; ?>
</head>
<body class="hold-transition register-page">
    <?php include '../views/register.php'; ?>
    <!-- /.register-box -->
    <?php include '../elements/footer.php'; ?>
</body>
</html>
