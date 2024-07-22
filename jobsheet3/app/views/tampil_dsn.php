<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include 'head.php';
include 'side.php';
//memanggil kelas
include '../classes/database.php';
//instansiasi class database
$db = new Database;
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h3>Data Dosen</h3>
<a href="input_dsn.php"><button type="button" 
class="btn btn-success">Tambah Data</button></a>
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($db->tampil_dosen() as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['nidn'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['prodi'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit_dsn.php?nidn=<?php echo $x['nidn']; ?>&aksi=edit_dsn"><button type="button" 
            class="btn btn-primary">Edit</button></a>
            <a href="proses_dsn.php?nidn=<?php echo $x['nidn']; ?>&aksi=hapus_dsn"><button type="button" 
            class="btn btn-danger">Hapus</button></a>
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
</body>
</html>
