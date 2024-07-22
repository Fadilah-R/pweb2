<?php
include 'header.php';
?>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="dash_admin">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="peserta">
              <span data-feather="users"></span>
              Pembayaran
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="data_test.php">
              <span data-feather="tag"></span>
              List Test
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link " href="biaya">
              <span data-feather="tag"></span>
              Biaya
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="#">
              <span data-feather="file"></span>
              Data Soal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="skor.php">
              <span data-feather="bar-chart-2"></span>
              Data Score Test
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <span data-feather="settings"></span>
              Users Setting
            </a>
          </li> -->
        </ul>

      </div>
    </nav>

  <body>
    
  </div>
</div>
    <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <div class="container">
            <h3 class="display-6">Dashboard Admin</h3>      
      </div>
      <!-- <div class="container">
            <h3 class="display-6">Hello, <?=$_SESSION['nama_lengkap']?></h3>
            <p>Selamat Datang, Anda berhasil login sebagai <?=$_SESSION['level']?></p>
      
      </div> -->
      
      <!-- </div>
      <div class="card-deck mb- text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Total Peserta</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">4</h1>
        <ul class="list-unstyled mt-3 mb-4">
        <button type="button" class="btn btn-lg btn-block btn-primary">Lihat Detail</button>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Total Sertifikat</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title pricing-card-title">4</h1>
        <button type="button" class="btn btn-lg btn-block btn-primary">Lihat Detail</button>
      </div> -->
    </div> -->

  </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="dashboard.js"></script>
  </body>
</html>
