<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Starter</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ url('public/admin') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('public/admin') }}/dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <x-template.header />
        <x-template.sidebar :menu="$menu" />
        <div class="content-wrapper" style="background-image: url('{{ url('public/admin') }}/dist/img/bg-3.jpg');">
            <div class="content">
                <div class="container-fluid pt-5" style="padding-bottom: 100px !important;">
                    {{ $slot }}
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
            <x-template.control-sidebar />
        <x-template.footer />
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ url('public/admin') }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('public/admin') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('public/admin') }}/dist/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ url('public/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('public/admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
</body>

</html>
