<?php
//memanggil class model database
include_once '../../koneksi.php';
include_once '../../controllers/MulaiController.php';
require '../../dash_mhs.php';

//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

$mulaiController = new MulaiController($db);
$mulai = $mulaiController->getAllMulai();
?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h4>List Test</h4>

    <tr>
        <th>No</th>
        <th>Nama Test</th>
        <th>Jumlah Soal</th>
        <th>Waktu</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($mulai as $x){
    ?>
    <tr>
        <td><?php echo $x['no'] ?></td>
        <td><?php echo $x['nama_tes'] ?></td>
        <td><?php echo $x['soal'] ?></td>
        <td><?php echo $x['waktu'] ?></td>
        <td>
        <a href="skor_detail.php"><button type="button" 
        class="btn btn-success mb-1 mt-1"><span data-feather=""></span>Mulai</button></a>
        </td>
    </tr>
<?php
}
?>
</table>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/no/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="dashboard.js"></script>
  </body>
</html>