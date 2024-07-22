<?php
//memanggil class model database
include_once '../../koneksi.php';
include_once '../../controllers/TesController.php';
require '../../header.php';

//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

$tesController = new TesController($db);
$tes = $tesController->getAllTes();
?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h4>Data Test</h4>
    <a href="tambahtes"><button type="button" 
    class="btn btn-success mb-1 mt-1"><span data-feather="user-plus"></span>Tambah Data</button></a>
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
foreach($tes as $x){
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