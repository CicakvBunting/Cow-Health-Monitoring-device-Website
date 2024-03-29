<?php
session_start();

include("sample databases\login\connection.php");
include("sample databases\login\\functions.php");

$user_data = check_login($con);
$tabel = $user_data['user_id'];
$datachart = mysqli_query($con,"select * from `$tabel` limit 100;");
while($row = mysqli_fetch_array($datachart)){
	$databpmdb[] = $row['bpm'];
	$datatempdb[] = $row['temp'];
  $waktudb[]=$row['time'];
}
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
        <a href="starter.php" class="nav-link">Home</a>
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
    <a href="starter.php" class="brand-link">
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
            <a href="#" class="nav-link active">
              <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
              <p>
                Nomor Seri Sapi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
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
            <a href="kontakmantri.php" class="nav-link">
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
            <h1 class="m-0">Data Sapi 1</h1>
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
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Detak Jantung</h3>
                <a href="javascript:void(0);">Lihat hasil keseluruhan</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span id="Lbpm" class="text-bold text-lg"></span>
                  <span>Beats per minute (bpm)</span>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="bpm-chart" height="400"></canvas>
              </div>

              
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Suhu</h3>
                <a href="">Lihat hasil keseluruhan</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span id="Ltemp" class="text-bold text-lg"></span>
                  <span>Celcius</span>
              </div>
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="temp-chart" height="200"></canvas>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col-md-6 -->
      </div>
      <div class="row">
        <div class="col-lg-10">
          <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Sensor gerak hewan</h3>
                <a href="">Lihat hasil keseluruhan</a>
              </div>
            </div>
            <div class="card-body">
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <button onclick="timer.start()">Try it</button>
              </div>
              <div class="d-flex">
                <p class="d-flex flex-column">
                  <span id="waktu terakhir bergerak" class="text-bold text-lg"></span>
                  <span>Terakhir gerak</span>

              </div>
              
              <!-- /.d-flex -->

              <div class="position-relative mb-4">
                <canvas id="temps-chart" height="200"></canvas>
              </div>
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
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
</footer>
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
<script src="chartbaru.js"></script>
<script>
var databpmtes = <?php echo json_encode($databpmdb, JSON_HEX_TAG); ?>;
waktutes= <?php echo json_encode($waktudb, JSON_HEX_TAG); ?>;
datatemptes = <?php echo json_encode($datatempdb, JSON_HEX_TAG); ?>;


new Chart(document.getElementById("bpm-chart"), {
  type: 'line',
  data: {
    labels: waktutes,
    datasets: [{ 
        data: databpmtes,
        label: "Beats per Second",
        borderColor: 'green',
        pointBorderColor: 'green',
        pointBackgroundColor: 'black',
        pointRadius:3,
        fill: false,
        pointHoverBackgroundColor: 'green',
        pointHoverBorderColor    : 'green'
      }
    ],
    
  },
  plugins: [{
    beforeRender: (x, options) => {
      const c = x.chart;
      const dataset = x.data.datasets[0];
      const yScale = x.scales['y-axis-0'];
      const yPos = yScale.getPixelForValue(20);
    
      const gradientFill = c.ctx.createLinearGradient(0, 0, 0, c.height);
      gradientFill.addColorStop(0, 'rgb(86,188,77)');
      gradientFill.addColorStop(yPos / c.height, 'rgb(86,188,77)');
      gradientFill.addColorStop(yPos / c.height, 'rgb(229,66,66)');
      gradientFill.addColorStop(1, 'rgb(229,66,66)');
    
      const model = x.data.datasets[0]._meta[Object.keys(dataset._meta)[0]].dataset._model;
      model.borderColor = gradientFill;
    },
    }],
  options: {
    maintainAspectRatio: false,
    tooltips: {
      mode: 'index',
      intersect: true
    },
    hover: {
      mode: 'index',
      intersect: true
    },
    legend: {
      display: false
    },
    scales : {
      yAxes : [{
        gridLines: {
          display: false
        },
          ticks : {
              beginAtZero : true,
              suggestedMax: 200
          }   
      }],
      xAxes: [{
        display: true,
        gridLines: {
          display: false
        },
        ticks: {
          fontColor: '#495057',
          fontStyle: 'bold'
        }
      }]
  }
  }
});
//end bpm-chart

//temp chart
new Chart(document.getElementById("temp-chart"), {
  type: 'line',
  data: {
    labels: waktutes,
    datasets: [{ 
        data: datatemptes,
        label: "Beats per Second",
        borderColor: 'green',
        pointBorderColor: 'green',
        pointBackgroundColor: 'black',
        pointRadius:3,
        fill: false,
        pointHoverBackgroundColor: 'green',
        pointHoverBorderColor    : 'green'
      }
    ],
    
  },
  plugins: [{
    beforeRender: (x, options) => {
      const c = x.chart;
      const dataset = x.data.datasets[0];
      const yScale = x.scales['y-axis-0'];
      const yPos = yScale.getPixelForValue(28);
    
      const gradientFill = c.ctx.createLinearGradient(0, 0, 0, c.height);
      gradientFill.addColorStop(0, 'rgb(86,188,77)');
      gradientFill.addColorStop(yPos / c.height, 'rgb(86,188,77)');
      gradientFill.addColorStop(yPos / c.height, 'rgb(229,66,66)');
      gradientFill.addColorStop(1, 'rgb(229,66,66)');
    
      const model = x.data.datasets[0]._meta[Object.keys(dataset._meta)[0]].dataset._model;
      model.borderColor = gradientFill;
    },
    }],
  options: {
    maintainAspectRatio: false,
    tooltips: {
      mode: 'index',
      intersect: true
    },
    hover: {
      mode: 'index',
      intersect: true
    },
    legend: {
      display: false
    },
    scales : {
      yAxes : [{
        gridLines: {
          display: false
        },
          ticks : {
              beginAtZero : true,
          }   
      }],
      xAxes: [{
        display: true,
        gridLines: {
          display: false
        },
        ticks: {
          fontColor: '#495057',
          fontStyle: 'bold'
        }
      }]
  }
  }
});
</script>
</body>
</html>
