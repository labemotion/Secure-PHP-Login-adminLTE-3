<?php
if (!isset($_SESSION)) {
    session_start();
}
require '../config/constants.php';
require 'Autoload.php';
$definitions = new SiteDefinitions();
$verify = new UserClass();
?>
<?php include '../elements/header.php'; ?>
</head>
<body class="hold-transition login-page">
    <div class="container">
        <div class="col-md-12 p-3">
            <?php if ($verify->Verify() === TRUE) { ?>
                <h3 class="text-center">La cuenta ha sido activada.</h3>
                <p class="text-center">
                    Para iniciar sesión, haga clic en <a href="login.php" class="btn btn-primary btn-sm">Iniciar sesión</a>
                </p>
            <?php } elseif ($verify->Verify() === FALSE) { ?>
                <h3 class="text-center">Ha habido un error al activar su cuenta.</h3>
                <p class="text-center">
                    Por favor, póngase en contacto con soporte en <a
                        href="mailto:<?php echo MAIL_SUPPORT; ?>?Subject=<?php echo SUBJECT_SUPPORT; ?>"
                        class="link-blue"><?php echo MAIL_SUPPORT; ?></a>.
                </p>    
            <?php } ?>  
        </div>
    </div>
    <?php
    include '../elements/footer.php';
    ?>
</body>
</html>