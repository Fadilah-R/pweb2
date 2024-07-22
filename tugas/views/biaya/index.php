<?php
//memanggil class model database
include_once '../../koneksi.php';
include_once '../../controllers/BiayaController.php';
require '../../header.php';

//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

$biayaController = new BiayaController($db);
$biaya = $biayaController->getAllBiaya();
?>
<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h4>Biaya</h4>
    <a href="tambahbiaya"><button type="button" 
    class="btn btn-success mb-1 mt-1"><span data-feather="user-plus"></span>Tambah Data</button></a>
    <tr>
        <th>Id Biaya</th>
        <th>Nama Tes</th>
        <th>Nama Peserta</th>
        <th>Level</th>
        <th>Biaya</th>
        <th>Tgl Bayar</th>
        <th>Metode Bayar</th>
        <th>Status Bayar</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($biaya as $x){
    ?>
    <tr>
        <td><?php echo $x['id_biaya'] ?></td>
        <td><?php echo $x['nama_tes'] ?></td>
        <td><?php echo $x['nama_peserta'] ?></td>
        <td><?php echo $x['kategori'] ?></td>
        <td><?php echo $x['biaya_tes'] ?></td>
        <td><?php echo $x['tgl_byr'] ?></td>
        <td><?php echo $x['metode'] ?></td>
        <td>
        <a href="skor_detail.php"><button type="button" 
        class="btn btn-secondary mb-1 mt-1"><span data-feather="eye"></span>Lunas</button></a>
        </td>
        <td>
            <a href="editbiaya/<?php echo $x['id_biaya']; ?>"><button type="button" 
            class="btn btn-primary"><span data-feather="edit"></span>Edit</button></a>
            <a href="hapusbiaya/<?php echo $x['id_biaya']; ?>"><button type="button" 
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