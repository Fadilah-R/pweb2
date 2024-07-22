<?php
include 'header.php';
include 'database.php';
$db = new Database;
?>
<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link " href="dash_admin">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="peserta">
              <span data-feather="users"></span>
              Data Peserta
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="tes">
              <span data-feather="folder"></span>
              Data Test
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="biaya">
              <span data-feather="tag"></span>
              Biaya
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="soal">
              <span data-feather="file"></span>
              Data Soal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="skor.php">
              <span data-feather="bar-chart-2"></span>
              Data Score Test
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <span data-feather="settings"></span>
              Users Setting
            </a>
          </li>
        </ul>

      </div>
    </nav>

  <body>
    
  </div>
</div>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h4>Data Score Test</h4>
    <tr>
        <th>No</th>
        <th>Nama Peserta</th>
        <th>Email</th>
        <th>Section 1</th>
        <th>Section 2</th>
        <th>Section 3</th>
        <th>Score</th>
        <th>Status</th>
    </tr>
<?php
$no = 1;
foreach($db->tampil_skor() as $x){
    ?>
    <tr>
        <td><?php echo $x['id'] ?></td>
        <td><?php echo $x['nama_peserta'] ?></td>
        <td><?php echo $x['email'] ?></td>
        <td><?php echo $x['sec1'] ?></td>
        <td><?php echo $x['sec2'] ?></td>
        <td><?php echo $x['sec3'] ?></td>
        <td><?php echo $x['score'] ?></td>
        <td></td>
    </tr>
<?php
}
?>
</table>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/id_peserta/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="dashboard.js"></script>
  </body>
</html>