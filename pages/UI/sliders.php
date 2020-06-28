<?php include '../elements/header.php' ?>
<!-- Ion Slider -->
<link rel="stylesheet" href="<?php echo $serv; ?>plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
<!-- bootstrap slider -->
<link rel="stylesheet" href="<?php echo $serv; ?>plugins/bootstrap-slider/css/bootstrap-slider.min.css">

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
                            <h1>Sliders</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Sliders</li>
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
                                    <h3 class="card-title">Ion Slider</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row margin">
                                        <div class="col-sm-6">
                                            <input id="range_1" type="text" name="range_1" value="">
                                        </div>

                                        <div class="col-sm-6">
                                            <input id="range_2" type="text" name="range_2" value="1000;100000" data-type="double"
                                                   data-step="500" data-postfix=" &euro;" data-from="30000" data-to="90000" data-hasgrid="true">
                                        </div>
                                    </div>
                                    <div class="row margin">
                                        <div class="col-sm-6">
                                            <input id="range_5" type="text" name="range_5" value="">
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="range_6" type="text" name="range_6" value="">
                                        </div>
                                    </div>
                                    <div class="row margin">
                                        <div class="col-sm-12">
                                            <input id="range_4" type="text" name="range_4" value="10000;100000">
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

                    <div class="row">
                        <div class="col-12">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Bootstrap Slider</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <div class="row margin">
                                        <div class="col-sm-6">
                                            <div class="slider-red">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>

                                            <p>.slider-red input.slider</p>
                                            <div class="slider-blue">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>

                                            <p>.slider-blue input.slider</p>
                                            <div class="slider-green">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>

                                            <p>.slider-green input.slider</p>
                                            <div class="slider-yellow">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>

                                            <p>.slider-yellow input.slider</p>
                                            <div class="slider-teal">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>

                                            <p>.slider-teal input.slider</p>
                                            <div class="slider-purple">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>

                                            <p>.slider-purple input.slider</p>
                                        </div>
                                        <div class="col-sm-6 d-flex justify-content-center">
                                            <div class="slider-red mx-3">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>
                                            <div class="slider-blue mx-3">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>
                                            <div class="slider-green mx-3">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>
                                            <div class="slider-yellow mx-3">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>
                                            <div class="slider-teal mx-3">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                                                       data-slider-selection="before" data-slider-tooltip="show">
                                            </div>
                                            <div class="slider-purple mx-3">
                                                <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200"
                                                       data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical"
                                                       data-slider-selection="before" data-slider-tooltip="show">
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
