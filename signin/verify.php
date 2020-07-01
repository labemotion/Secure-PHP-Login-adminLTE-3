<?php
if (!isset($_SESSION)) {
    session_start();
}
require 'config/constants.php';
require 'autoload.php';
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
                        href="mailto:contact@labemotion.net?Subject=Soporte"
                        class="link-blue">contact@labemotion.net</a>.
                </p>    
            <?php } ?>  
        </div>
    </div>
    <?php
    include '../elements/header.php';
    ?>
</body>
</html>