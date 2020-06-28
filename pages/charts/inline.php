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
                <!-- Sidebar user panel (optional) -->
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
                            <h1>Inline Charts</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Inline Charts</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- row -->
                    <div class="row">
                        <div class="col-12">
                            <!-- jQuery Knob -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        jQuery Knob
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc">

                                            <div class="knob-label">New Visitors</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="70" data-width="90" data-height="90" data-fgColor="#f56954">

                                            <div class="knob-label">Bounce Rate</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="-80" data-min="-150" data-max="150" data-width="90"
                                                   data-height="90" data-fgColor="#00a65a">

                                            <div class="knob-label">Server Load</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="40" data-width="90" data-height="90" data-fgColor="#00c0ef">

                                            <div class="knob-label">Disk Space</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->

                                    <div class="row">
                                        <div class="col-6 text-center">
                                            <input type="text" class="knob" value="90" data-width="90" data-height="90" data-fgColor="#932ab6">

                                            <div class="knob-label">Bandwidth</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 text-center">
                                            <input type="text" class="knob" value="50" data-width="90" data-height="90" data-fgColor="#39CCCC">

                                            <div class="knob-label">CPU</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        jQuery Knob Different Sizes
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="30" data-width="90" data-height="90" data-fgColor="#3c8dbc"
                                                   data-readonly="true">

                                            <div class="knob-label">data-width="90"</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="30" data-width="120" data-height="120"
                                                   data-fgColor="#f56954">

                                            <div class="knob-label">data-width="120"</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="30" data-thickness="0.1" data-width="90" data-height="90"
                                                   data-fgColor="#00a65a">

                                            <div class="knob-label">data-thickness="0.1"</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" data-thickness="0.2" data-angleArc="250" data-angleOffset="-125"
                                                   value="30" data-width="120" data-height="120" data-fgColor="#00c0ef">

                                            <div class="knob-label">data-angleArc="250"</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        <i class="far fa-chart-bar"></i>
                                        jQuery Knob Tron Style
                                    </h3>

                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                                class="fas fa-minus"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="80" data-skin="tron" data-thickness="0.2" data-width="90"
                                                   data-height="90" data-fgColor="#3c8dbc" data-readonly="true">

                                            <div class="knob-label">data-width="90"</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="60" data-skin="tron" data-thickness="0.2" data-width="120"
                                                   data-height="120" data-fgColor="#f56954">

                                            <div class="knob-label">data-width="120"</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="10" data-skin="tron" data-thickness="0.1" data-width="90"
                                                   data-height="90" data-fgColor="#00a65a">

                                            <div class="knob-label">data-thickness="0.1"</div>
                                        </div>
                                        <!-- ./col -->
                                        <div class="col-6 col-md-3 text-center">
                                            <input type="text" class="knob" value="100" data-skin="tron" data-thickness="0.2"
                                                   data-angleArc="250" data-angleOffset="-125" data-width="120" data-height="120"
                                                   data-fgColor="#00c0ef">

                                            <div class="knob-label">data-angleArc="250"</div>
                                        </div>
                                        <!-- ./col -->
                                    </div>
                                    <!-- /.row -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->

                </div><!-- /.container-fluid -->
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
