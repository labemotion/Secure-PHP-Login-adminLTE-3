<?php
if (!isset($_SESSION)) {
    session_start();
}
require '../config/constants.php';
require 'Autoload.php';
$definitions = new SiteDefinitions();
$login = new UserClass();
$forgotpass = new userForgot();
?>
<?php include '../elements/header.php'; ?>
</head>
<body class="hold-transition login-page">
    
    <?php include '../../elements/footer.php'; ?>
</body>
</html>
