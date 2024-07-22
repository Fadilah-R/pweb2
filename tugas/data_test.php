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
            <a class="nav-link active" href="data_test.php">
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
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Verifikasi Pembayaran
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
          </li>
        </ul>

      </div>
    </nav>

  <body>
    
  </div>
</div>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="px-6">
<h4>Data Test</h4>
<a href="tambah"><button type="button" 
    class="btn btn-success mb-1 mt-1"><span data-feather="user-plus"></span>Tambah Data</button></a>
<div class="card shadow mb-4">
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Test</th>
        <th>Jumlah Soal</th>
        <th>Waktu</th>
        <th>Token</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($db->tampil_tes() as $x){
    ?>
    <tr>
        <td><?php echo $x['id'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['soal'] ?></td>
        <td><?php echo $x['waktu'] ?></td>
        <td>
          <?php echo $x['token'] ?>
          <button type="button" 
            class="btn btn-secondary"></span>ABCDE</button>
            <button type="button" 
            class="btn btn-outline-success"></span>Update Token</button>
        </td>
        <td>
            <a href="edit/<?php echo $x['id']; ?>"><button type="button" 
            class="btn btn-primary"><span data-feather="edit"></span>Edit</button></a>
            <a href="hapus/<?php echo $x['id']; ?>"><button type="button" 
            class="btn btn-danger" onclick = "return confirm('Apakah yakin akan menghapus..?')"><span data-feather="trash-2"></span>Hapus</button></a>
        </td>
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