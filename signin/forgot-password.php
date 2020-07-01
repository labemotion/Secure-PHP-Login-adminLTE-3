<?php
if (!isset($_SESSION)) {
    session_start();
}
require '../config/constants.php';
require 'autoload.php';
$definitions = new SiteDefinitions();
$login = new UserClass();
$forgotpass = new userForgot();
?>
<?php include '../elements/header.php'; ?>
</head>
<body class="hold-transition login-page">
    <div class="container">
        <div class="row">
            <!-- If there is an error it will be shown. --> 
            <?php if (!empty($_SESSION['ErrorMessage'])): ?>
                <div class="alert alert-danger alert-container"
                     id="alert">
                    <strong><?php echo htmlentities($_SESSION['ErrorMessage']) ?></strong>
                    <?php unset($_SESSION['ErrorMessage']); ?>
                </div>
            <?php endif; ?>
            <!-- If e-mail has been sent. -->
            <?php if (!empty($_SESSION['SuccessMessage'])): ?>
                <div class="alert alert-success alert-container"
                     id="alert">
                    <strong><?php echo htmlentities($_SESSION['SuccessMessage']) ?></strong>
                    <?php unset($_SESSION['SuccessMessage']); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo PATH_SYS; ?>index2.php"><b><?php echo SITE_NAME; ?></b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

                <form action="recover-password.php" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" name="forgotPassword" id="forgotPassword" class="btn btn-primary btn-block">Request new password</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <p class="mt-3 mb-1">
                    <a href="login.php">Login</a>
                </p>
                <p class="mb-0">
                    <a href="register.php" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo PATH_SYS; ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo PATH_SYS; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo PATH_SYS; ?>dist/js/adminlte.min.js"></script>

</body>
</html>
