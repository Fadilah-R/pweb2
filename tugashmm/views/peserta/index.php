<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController->getAllMahasiswa();
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h3>Data Mahasiswa</h3>
<a href="tambah"><button type="button" 
class="btn btn-success mb-3 mt-2">Tambah Data</button></a>
    <tr>
        <th>No</th>
        <th>NPM</th>
        <th>Program Studi</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($mahasiswa as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['npm'] ?></td>
        <td><?php echo $x['program_studi'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['tempat_lahir'] ?></td>
        <td><?php echo $x['tanggal_lahir'] ?></td>
        <td><?php echo $x['jenis_kelamin'] ?></td>
        <td><?php echo $x['agama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit/<?php echo $x['npm']; ?>"><button type="button" 
            class="btn btn-primary">Edit</button></a>
            <a href="hapus/<?php echo $x['npm']; ?>"><button type="button" 
            class="btn btn-danger" onclick = "return confirm('Apakah yakin akan menghapus..?')">Hapus</button></a>
        </td>
    </tr>
<?php
}
?>
</div>
</main>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</table>