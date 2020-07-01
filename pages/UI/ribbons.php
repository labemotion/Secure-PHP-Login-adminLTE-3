<?php include '../elements/header.php' ?>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include '../../elements/navbar.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo PATH_SYS; ?>index3.php" class="brand-link">
                <img src="<?php echo PATH_SYS; ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo PATH_SYS; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <?php include '../../elements/sidebar.php'; ?>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Ribbons</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Ribbons</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Ribbons</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                                <div class="ribbon-wrapper">
                                                    <div class="ribbon bg-primary">
                                                        Ribbon
                                                    </div>
                                                </div>
                                                Ribbon Default <br />
                                                <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                                <div class="ribbon-wrapper ribbon-lg">
                                                    <div class="ribbon bg-info">
                                                        Ribbon Large
                                                    </div>
                                                </div>
                                                Ribbon Large <br />
                                                <small>.ribbon-wrapper.ribbon-lg .ribbon</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                                <div class="ribbon-wrapper ribbon-xl">
                                                    <div class="ribbon bg-secondary">
                                                        Ribbon Extra Large
                                                    </div>
                                                </div>
                                                Ribbon Extra Large <br />
                                                <small>.ribbon-wrapper.ribbon-xl .ribbon</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-4">
                                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                                <div class="ribbon-wrapper ribbon-lg">
                                                    <div class="ribbon bg-success text-lg">
                                                        Ribbon
                                                    </div>
                                                </div>
                                                Ribbon Large <br /> with Large Text <br />
                                                <small>.ribbon-wrapper.ribbon-lg .ribbon.text-lg</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                                <div class="ribbon-wrapper ribbon-xl">
                                                    <div class="ribbon bg-warning text-lg">
                                                        Ribbon
                                                    </div>
                                                </div>
                                                Ribbon Extra Large <br /> with Large Text <br />
                                                <small>.ribbon-wrapper.ribbon-xl .ribbon.text-lg</small>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="position-relative p-3 bg-gray" style="height: 180px">
                                                <div class="ribbon-wrapper ribbon-xl">
                                                    <div class="ribbon bg-danger text-xl">
                                                        Ribbon
                                                    </div>
                                                </div>
                                                Ribbon Extra Large <br /> with Extra Large Text <br />
                                                <small>.ribbon-wrapper.ribbon-xl .ribbon.text-xl</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-sm-4">
                                            <div class="position-relative">
                                                <img src="<?php echo PATH_SYS; ?>dist/img/photo1.png" alt="Photo 1" class="img-fluid">
                                                <div class="ribbon-wrapper ribbon-lg">
                                                    <div class="ribbon bg-success text-lg">
                                                        Ribbon
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="position-relative">
                                                <img src="<?php echo PATH_SYS; ?>dist/img/photo2.png" alt="Photo 2" class="img-fluid">
                                                <div class="ribbon-wrapper ribbon-xl">
                                                    <div class="ribbon bg-warning text-lg">
                                                        Ribbon
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="position-relative" style="min-height: 180px;">
                                                <img src="<?php echo PATH_SYS; ?>dist/img/photo3.jpg" alt="Photo 3" class="img-fluid">
                                                <div class="ribbon-wrapper ribbon-xl">
                                                    <div class="ribbon bg-danger text-xl">
                                                        Ribbon
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.1.0-pre
            </div>
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include '../../elements/footer.php'; ?>
</body>
</html>
