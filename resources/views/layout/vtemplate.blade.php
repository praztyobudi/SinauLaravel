<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Projek</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('tmp_laravel')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('tmp_laravel')}}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('layout.vnavbar.vnav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layout.vsidebar_l.vside_l')

  <!-- Content Wrapper. Contains page content -->
  @include('layout.vcontent.vcontent')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('layout.vsidebar_r.vside_r')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->
@include('layout.vfooter.vfooter')
<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('tmp_laravel')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('tmp_laravel')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('tmp_laravel')}}/dist/js/adminlte.min.js"></script>
</body>
</html>

