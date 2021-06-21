<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Monitoring Panel Surya</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="./assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./assets/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script>
        var BC = new BroadcastChannel('monitorChannel');
        BC.onmessage = function({data}){
            if(data === 'reload'){
                window.location.reload();
            }
        }
  </script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="./assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">PANEL SURYA</span>
    </a>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Monitoring Panel Surya</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-sun"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Intensitas Cahaya</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-bolt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Voltage</span>
                <span class="info-box-number">5 V</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-charging-station"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Kapasitas Baterai</span>
                <span class="info-box-number">1000 mAh</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-solar-panel"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Waktu pengisian</span>
                <span class="info-box-number">2 Jam</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row --><div class="card">
              <div class="card-header">
                <h3 class="card-title">koordinat Panel Surya</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="d-md-flex">
                  <div class="p-1 flex-fill" style="overflow: hidden">
                    <!-- Map will be created here -->
                    <div id="world-map-markers" style="height: 325px; overflow: hidden">
                      <div class=""><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1980.1494003438063!2d107.63053443133252!3d-6.974030551956112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6285c5b7da517%3A0x864485f26a388f95!2sTelkom%20University!5e0!3m2!1sid!2sid!4v1594315493473!5m2!1sid!2sid" width="3000" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                    </div>
                  </div>
                  <div class="card-pane-right bg-success pt-2 pb-2 pl-4 pr-4">
                    <div class="description-block mb-4">
                      <h5 class="description-header">Kapasitas Baterai</h5>
                       <h5 class="description-header">23%</h5>
                       <img src="./assets/img_data/low.png" alt="Italian Trulli">
                    </div>
                    <!-- /.description-block -->
                    <!-- /.description-block -->
                  </div><!-- /.card-pane-right -->
                </div><!-- /.d-md-flex -->
              </div>
              <!-- /.card-body -->
            </div>

            <!-- TABLE: LATEST ORDERS -->
            <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Tabel Panel Surya</h3>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table m-0">
                    <thead>
                    <tr>
                      <th>Waktu</th>
                      <th>Latitude/Longitude</th>
                      <th>Intesitas Cahaya</th>
                      <th>Voltage</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>2020-04-29 21:06:56</td>
                      <td>6.974002-107.633179</td>
                      <td><span class="badge badge-success">90%</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">5.0v</div>
                      </td>
                    </tr>
                    <tr>
                      <td>2020-04-29 21:06:46</td>
                      <td>6.974002-107.633179</td>
                      <td><span class="badge badge-warning">50%</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">3.0v</div>
                      </td>
                    </tr>
                    <tr>
                      <td>2020-04-29 21:06:35</td>
                      <td>6.974002-107.633179</td>
                      <td><span class="badge badge-danger">30%</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">1.6v</div>
                      </td>
                    </tr>
                    <tr>
                      <td>2020-04-29 21:06:26</td>
                      <td>6.974002-107.633179</td>
                      <td><span class="badge badge-info">74%</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00c0ef" data-height="20">4.2v</div>
                      </td>
                    </tr>
                    <tr>
                      <td>2020-04-29 21:06:16</td>
                      <td>6.974002-107.633179</td>
                      <td><span class="badge badge-warning">58%</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f39c12" data-height="20">3.6v</div>
                      </td>
                    </tr>
                    <tr>
                      <td>2020-04-29 21:06:14</td>
                      <td>6.974002-107.633179</td>
                      <td><span class="badge badge-danger">30%</span></td>
                      <td>
                        <div class="sparkbar" data-color="#f56954" data-height="20">1.6v</div>
                      </td>
                    </tr>
                    <tr>
                      <td>2020-04-29 21:06:05</td>
                      <td>6.974002-107.633179</td>
                      <td><span class="badge badge-success">85%</span></td>
                      <td>
                        <div class="sparkbar" data-color="#00a65a" data-height="20">4.5v</div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Lihat Tabel Penuh</a>
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
            <!-- /.card -->
        </div>
          <!-- /.col -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">Abdul Aziz 6702160097</a>.</strong>
    All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="./assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="./assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="./assets/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="./assets/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="./assets/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="./assets/plugins/raphael/raphael.min.js"></script>
<script src="./assets/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="./assets/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="./assets/plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->
<!-- <script src="./assets/js/pages/dashboard2.js"></script> -->
<script>
  let idData = '923b39d065929edf6dc600ec811e0f302f23f13d'; //abdulAziz
</script>
</body>
</html>
