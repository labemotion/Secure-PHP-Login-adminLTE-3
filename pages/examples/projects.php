<?php include '../../elements/header.php'; ?>
</head>
<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
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
                            <h1>Projects</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Projects</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Projects</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                                <i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                                <i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">
                                        #
                                    </th>
                                    <th style="width: 20%">
                                        Project Name
                                    </th>
                                    <th style="width: 30%">
                                        Team Members
                                    </th>
                                    <th>
                                        Project Progress
                                    </th>
                                    <th style="width: 8%" class="text-center">
                                        Status
                                    </th>
                                    <th style="width: 20%">
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar2.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar4.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%">
                                            </div>
                                        </div>
                                        <small>
                                            57% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar2.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="47" aria-valuemin="0" aria-valuemax="100" style="width: 47%">
                                            </div>
                                        </div>
                                        <small>
                                            47% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar2.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar3.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                            </div>
                                        </div>
                                        <small>
                                            77% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar2.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar4.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            </div>
                                        </div>
                                        <small>
                                            60% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar4.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar5.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100" style="width: 12%">
                                            </div>
                                        </div>
                                        <small>
                                            12% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar2.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar4.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width: 35%">
                                            </div>
                                        </div>
                                        <small>
                                            35% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar4.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar5.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%">
                                            </div>
                                        </div>
                                        <small>
                                            87% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar4.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                            </div>
                                        </div>
                                        <small>
                                            77% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        #
                                    </td>
                                    <td>
                                        <a>
                                            AdminLTE v3
                                        </a>
                                        <br/>
                                        <small>
                                            Created 01.01.2019
                                        </small>
                                    </td>
                                    <td>
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar3.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar4.png">
                                            </li>
                                            <li class="list-inline-item">
                                                <img alt="Avatar" class="table-avatar" src="<?php echo $serv; ?>dist/img/avatar5.png">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="project_progress">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%">
                                            </div>
                                        </div>
                                        <small>
                                            77% Complete
                                        </small>
                                    </td>
                                    <td class="project-state">
                                        <span class="badge badge-success">Success</span>
                                    </td>
                                    <td class="project-actions text-right">
                                        <a class="btn btn-primary btn-sm" href="#">
                                            <i class="fas fa-folder">
                                            </i>
                                            View
                                        </a>
                                        <a class="btn btn-info btn-sm" href="#">
                                            <i class="fas fa-pencil-alt">
                                            </i>
                                            Edit
                                        </a>
                                        <a class="btn btn-danger btn-sm" href="#">
                                            <i class="fas fa-trash">
                                            </i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

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

    <!-- jQuery -->
    <script src="<?php echo $serv; ?>plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo $serv; ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo $serv; ?>dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo $serv; ?>dist/js/demo.js"></script>
</body>
</html>
