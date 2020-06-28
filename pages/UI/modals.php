<?php include '../../elements/header.php' ?>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <?php include '../../elements/navbar.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?php echo $serv; ?>index3.php" class="brand-link">
                <img src="<?php echo $serv; ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AdminLTE 3</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?php echo $serv; ?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                            <h1>
                                Modals & Alerts
                                <small>new</small>
                            </h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Modals & Alerts</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        Modal Examples
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                                        Launch Default Modal
                                    </button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                                        Launch Primary Modal
                                    </button>
                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-secondary">
                                        Launch Secondary Modal
                                    </button>
                                    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                                        Launch Info Modal
                                    </button>
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                                        Launch Danger Modal
                                    </button>
                                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                                        Launch Warning Modal
                                    </button>
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                                        Launch Success Modal
                                    </button>
                                    <br />
                                    <br />
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                                        Launch Small Modal
                                    </button>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                                        Launch Large Modal
                                    </button>
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                                        Launch Extra Large Modal
                                    </button>
                                    <br />
                                    <br />
                                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-overlay">
                                        Launch Modal with Overlay
                                    </button>
                                    <div class="text-muted mt-3">
                                        Instructions for how to use modals are available on the
                                        <a href="https://getbootstrap.com/docs/4.4/components/modal/">Bootstrap documentation</a>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="card card-info card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        Toasts Examples <small>built in AdminLTE</small>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-default toastsDefaultDefault">
                                        Launch Default Toast
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultFull">
                                        Launch Full Toast (with icon)
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultFullImage">
                                        Launch Full Toast (with image)
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultAutohide">
                                        Launch Default Toasts with autohide
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultNotFixed">
                                        Launch Default Toasts with not fixed
                                    </button>
                                    <br />
                                    <br />
                                    <button type="button" class="btn btn-default toastsDefaultTopLeft">
                                        Launch Default Toast (topLeft)
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultBottomRight">
                                        Launch Default Toast (bottomRight)
                                    </button>
                                    <button type="button" class="btn btn-default toastsDefaultBottomLeft">
                                        Launch Default Toast (bottomLeft)
                                    </button>
                                    <br />
                                    <br />
                                    <button type="button" class="btn btn-success toastsDefaultSuccess">
                                        Launch Success Toast
                                    </button>
                                    <button type="button" class="btn btn-info toastsDefaultInfo">
                                        Launch Info Toast
                                    </button>
                                    <button type="button" class="btn btn-warning toastsDefaultWarning">
                                        Launch Warning Toast
                                    </button>
                                    <button type="button" class="btn btn-danger toastsDefaultDanger">
                                        Launch Danger Toast
                                    </button>
                                    <button type="button" class="btn btn-default bg-maroon toastsDefaultMaroon">
                                        Launch Maroon Toast
                                    </button>
                                    <div class="text-muted mt-3">

                                    </div>
                                </div>
                            </div>

                            <div class="card card-success card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        SweetAlert2 Examples
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-success swalDefaultSuccess">
                                        Launch Success Toast
                                    </button>
                                    <button type="button" class="btn btn-info swalDefaultInfo">
                                        Launch Info Toast
                                    </button>
                                    <button type="button" class="btn btn-danger swalDefaultError">
                                        Launch Error Toast
                                    </button>
                                    <button type="button" class="btn btn-warning swalDefaultWarning">
                                        Launch Warning Toast
                                    </button>
                                    <button type="button" class="btn btn-default swalDefaultQuestion">
                                        Launch Question Toast
                                    </button>
                                    <div class="text-muted mt-3">
                                        For more examples look at <a href="https://sweetalert2.github.io/">https://sweetalert2.github.io/</a>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>

                            <div class="card card-warning card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="fas fa-edit"></i>
                                        Toastr Examples
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <button type="button" class="btn btn-success toastrDefaultSuccess">
                                        Launch Success Toast
                                    </button>
                                    <button type="button" class="btn btn-info toastrDefaultInfo">
                                        Launch Info Toast
                                    </button>
                                    <button type="button" class="btn btn-danger toastrDefaultError">
                                        Launch Error Toast
                                    </button>
                                    <button type="button" class="btn btn-warning toastrDefaultWarning">
                                        Launch Warning Toast
                                    </button>
                                    <div class="text-muted mt-3">
                                        For more examples look at <a href="https://codeseven.github.io/toastr/">https://codeseven.github.io/toastr/</a>
                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- ./row -->
                </div><!-- /.container-fluid -->

                <div class="modal fade" id="modal-default">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Default Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-overlay">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="overlay d-flex justify-content-center align-items-center">
                                <i class="fas fa-2x fa-sync fa-spin"></i>
                            </div>
                            <div class="modal-header">
                                <h4 class="modal-title">Default Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-primary">
                    <div class="modal-dialog">
                        <div class="modal-content bg-primary">
                            <div class="modal-header">
                                <h4 class="modal-title">Primary Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-secondary">
                    <div class="modal-dialog">
                        <div class="modal-content bg-secondary">
                            <div class="modal-header">
                                <h4 class="modal-title">Secondary Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-info">
                    <div class="modal-dialog">
                        <div class="modal-content bg-info">
                            <div class="modal-header">
                                <h4 class="modal-title">Info Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-warning">
                    <div class="modal-dialog">
                        <div class="modal-content bg-warning">
                            <div class="modal-header">
                                <h4 class="modal-title">Warning Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-dark">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-success">
                    <div class="modal-dialog">
                        <div class="modal-content bg-success">
                            <div class="modal-header">
                                <h4 class="modal-title">Success Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-danger">
                    <div class="modal-dialog">
                        <div class="modal-content bg-danger">
                            <div class="modal-header">
                                <h4 class="modal-title">Danger Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-outline-light">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-sm">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Small Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

                <div class="modal fade" id="modal-xl">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Extra Large Modal</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>One fine body&hellip;</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->

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
