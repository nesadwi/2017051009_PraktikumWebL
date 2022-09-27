<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mahasiswa</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/asset/adminlte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/asset/adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/asset/adminlte/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="asset/adminlte/index3.html" class="navbar-brand">
                    <span class="brand-text font-weight-light">AdminLTE</span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="/home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/about" class="nav-link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="/mahasiswa" class="nav-link">Mahasiswa</a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <?= $this->renderSection('content'); ?>


        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/asset/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/asset/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/asset/adminlte/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/asset/adminlte/dist/js/demo.js"></script>
</body>
<script src="/asset/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    $(function() {
        $('#deskripsi').summernote()
    })
</script>

</html>