<?php include '../../elements/header.php'; ?>
</head>
<body class="hold-transition lockscreen">
    <!-- Automatic element centering -->
    <div class="lockscreen-wrapper">
        <div class="lockscreen-logo">
            <a href="<?php echo $serv; ?>index2.php"><b>Admin</b>LTE</a>
        </div>
        <!-- User name -->
        <div class="lockscreen-name">John Doe</div>

        <!-- START LOCK SCREEN ITEM -->
        <div class="lockscreen-item">
            <!-- lockscreen image -->
            <div class="lockscreen-image">
                <img src="<?php echo $serv; ?>dist/img/user1-128x128.jpg" alt="User Image">
            </div>
            <!-- /.lockscreen-image -->

            <!-- lockscreen credentials (contains the form) -->
            <form class="lockscreen-credentials">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="password">

                    <div class="input-group-append">
                        <button type="button" class="btn"><i class="fas fa-arrow-right text-muted"></i></button>
                    </div>
                </div>
            </form>
            <!-- /.lockscreen credentials -->

        </div>
        <!-- /.lockscreen-item -->
        <div class="help-block text-center">
            Enter your password to retrieve your session
        </div>
        <div class="text-center">
            <a href="login.php">Or sign in as a different user</a>
        </div>
        <div class="lockscreen-footer text-center">
            Copyright &copy; 2014-2020 <b><a href="https://adminlte.io" class="text-black">AdminLTE.io</a></b><br>
            All rights reserved
        </div>
    </div>
    <!-- /.center -->

    <!-- jQuery -->
    <script src="<?php echo $serv; ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $serv; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
