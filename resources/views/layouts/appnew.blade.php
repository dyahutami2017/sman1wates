<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMA N 1 WATES</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-3.1.0/dist/css/adminlte.min.css')}}">
  <link rel="shortcut icon" href="{{asset('img/logosma1.png')}}" type="image/png">
  <style>
      #tbl_siswa th:first-child {
        border-top-left-radius: 10px;
      }

      #tbl_siswa th:last-child {
        border-top-right-radius: 10px;
      }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layouts/navbar')

@include('layouts/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <div>
        <a href="/profil/{{auth()->user()->id}}/edit" class="">
          <i class="far fas fa-user-cog mr-3"></i>
          <span>Edit Profil</span>
        </a>
      </div>
      <div>
        <a href="{{ url()->route('logout') }}" class="">
          <i class="fas fa-sign-out-alt mr-3 mt-3"></i>
          <span>Sign Out</span>
        </a>
      </div>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  @include('layouts/footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('AdminLTE-3.1.0/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('AdminLTE-3.1.0/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('AdminLTE-3.1.0/dist/js/adminlte.min.js')}}"></script>
<script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
</body>
</html>
