<?php
session_start();

include("sample databases\login\connection.php");
include("sample databases\login\\functions.php");

$user_data = check_login($con);

?>


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My-MoOjaw</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="sapi2.php" class="nav-link">Home</a>
      </li>

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="sapi2.php" class="brand-link">
      <img src="moojaw color 1.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">My-MoOjaw</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a class="d-block"><?php echo $user_data['user_name']; ?></a>
          <a href="sample databases\login\logout.php">logout</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Nomor Seri Sapi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="starter.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sapi 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="sapi2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sapi 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="kontakmantri.php" class="nav-link active">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <p>
                Kontak Mantri 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="Info.php" class="nav-link">
              <!-- <i class="nav-icon fas fa-th"></i> -->
              <p>
                Informasi My-MoOjaw
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Kontak Mantri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Nomor Seri Sapi</a></li>
              <li class="breadcrumb-item active">Sapi 1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4">
          <div class="card card-info">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <!-- nama mantri -->
                <h3 class="card-title">Mantri</h3>
                <a href="https://wa.me/085229453082" >Hubungi</a>
              </div>
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-circle" src="bambang.jpg" alt="'User Prof Pic">
              </div>
              <h3 class="profile-username text-center">Bambang</h3>
              <p class="text-muted text-center">mantri</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Pasien terobati</b>
                  <a class="float-right">236</a>
                </li>
              </ul>
              <a href="https://wa.me/085229453082" class="btn btn-info btn-block">
                <b>Hubungi</b>
              </a>
              <!-- /.d-flex -->
            </div>
          </div>
          
        </div>
        <div class="col-lg-4">
          <div class="card card-info">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <!-- nama mantri -->
                <h3 class="card-title">Mantri</h3>
                <a href="https://wa.me/085229453082" >Hubungi</a>
              </div>
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-circle" src="bambang.jpg" alt="'User Prof Pic">
              </div>
              <h3 class="profile-username text-center">Bambang</h3>
              <p class="text-muted text-center">mantri</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Pasien terobati</b>
                  <a class="float-right">236</a>
                </li>
              </ul>
              <a href="https://wa.me/085229453082" class="btn btn-info btn-block">
                <b>Hubungi</b>
              </a>
              <!-- /.d-flex -->
            </div>
          </div>
          
        </div>
        <div class="col-lg-4">
          <div class="card card-info">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <!-- nama mantri -->
                <h3 class="card-title">Mantri</h3>
                <a href="https://wa.me/085229453082" >Hubungi</a>
              </div>
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-circle" src="bambang.jpg" alt="'User Prof Pic">
              </div>
              <h3 class="profile-username text-center">Bambang</h3>
              <p class="text-muted text-center">mantri</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Pasien terobati</b>
                  <a class="float-right">236</a>
                </li>
              </ul>
              <a href="https://wa.me/085229453082" class="btn btn-info btn-block">
                <b>Hubungi</b>
              </a>
              <!-- /.d-flex -->
            </div>
          </div>
          
        </div>
        <div class="col-lg-4">
          <div class="card card-info">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <!-- nama mantri -->
                <h3 class="card-title">Mantri</h3>
                <a href="https://wa.me/085229453082" >Hubungi</a>
              </div>
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-circle" src="bambang.jpg" alt="'User Prof Pic">
              </div>
              <h3 class="profile-username text-center">Bambang</h3>
              <p class="text-muted text-center">mantri</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Pasien terobati</b>
                  <a class="float-right">236</a>
                </li>
              </ul>
              <a href="https://wa.me/085229453082" class="btn btn-info btn-block">
                <b>Hubungi</b>
              </a>
              <!-- /.d-flex -->
            </div>
          </div>
          
        </div>
        <div class="col-lg-4">
          <div class="card card-info">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <!-- nama mantri -->
                <h3 class="card-title">Mantri</h3>
                <a href="https://wa.me/085229453082" >Hubungi</a>
              </div>
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-circle" src="bambang.jpg" alt="'User Prof Pic">
              </div>
              <h3 class="profile-username text-center">Bambang</h3>
              <p class="text-muted text-center">mantri</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Pasien terobati</b>
                  <a class="float-right">236</a>
                </li>
              </ul>
              <a href="https://wa.me/085229453082" class="btn btn-info btn-block">
                <b>Hubungi</b>
              </a>
              <!-- /.d-flex -->
            </div>
          </div>
          
        </div>
        <div class="col-lg-4">
          <div class="card card-info">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <!-- nama mantri -->
                <h3 class="card-title">Mantri</h3>
                <a href="https://wa.me/085229453082" >Hubungi</a>
              </div>
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-circle" src="bambang.jpg" alt="'User Prof Pic">
              </div>
              <h3 class="profile-username text-center">Bambang</h3>
              <p class="text-muted text-center">mantri</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Pasien terobati</b>
                  <a class="float-right">236</a>
                </li>
              </ul>
              <a href="https://wa.me/085229453082" class="btn btn-info btn-block">
                <b>Hubungi</b>
              </a>
              <!-- /.d-flex -->
            </div>
          </div>
          
        </div>
        <div class="col-lg-4">
          <div class="card card-info">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <!-- nama mantri -->
                <h3 class="card-title">Mantri</h3>
                <a href="https://wa.me/085229453082" >Hubungi</a>
              </div>
            </div>
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-circle" src="bambang.jpg" alt="'User Prof Pic">
              </div>
              <h3 class="profile-username text-center">Bambang</h3>
              <p class="text-muted text-center">mantri</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Pasien terobati</b>
                  <a class="float-right">236</a>
                </li>
              </ul>
              <a href="https://wa.me/085229453082" class="btn btn-info btn-block">
                <b>Hubungi</b>
              </a>
              <!-- /.d-flex -->
            </div>
          </div>
          
        </div>
        <!-- /.col-md-6 -->
      </div>
      
      
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="chart.js"></script>
<script src="gerak.js"></script>
</body>
</html>
