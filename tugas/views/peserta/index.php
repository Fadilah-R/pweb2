<?php
//memanggil class model database
include_once '../../koneksi.php';
include_once '../../controllers/PesertaController.php';
require '../../header.php';
//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

$pesertaController = new PesertaController($db);
$peserta = $pesertaController->getAllPeserta();
?>

<main class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h4>Data Peserta</h4>
    <a href="tambahtes"><button type="button" 
    class="btn btn-success mb-1 mt-1"><span data-feather="user-plus"></span>Tambah Data</button></a>
    <tr>
        <th>ID Peserta</th>
        <th>Nama Peserta</th>
        <th>Email Peserta</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($peserta as $x){
    ?>
    <tr>
        <td><?php echo $x['id_peserta'] ?></td>
        <td><?php echo $x['nama_peserta'] ?></td>
        <td><?php echo $x['email_peserta'] ?></td>
        <td><?php echo $x['no_hp'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit/<?php echo $x['id_peserta']; ?>"><button type="button" 
            class="btn btn-primary"><span data-feather="edit"></span>Edit</button></a>
            <a href="hapus/<?php echo $x['id_peserta']; ?>"><button type="button" 
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