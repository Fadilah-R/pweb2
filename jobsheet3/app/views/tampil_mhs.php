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
<h3>Data Mahasiswa</h3>
<a href="input_mhs.php"><button type="button" 
class="btn btn-success mb-3 mt-2">Tambah Data</button></a>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($db->tampil_mahasiswa() as $x){
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $x['npm'] ?></td>
        <td><?php echo $x['nama'] ?></td>
        <td><?php echo $x['alamat'] ?></td>
        <td>
            <a href="edit_mhs.php?npm=<?php echo $x['npm']; ?>&aksi=edit"><button type="button" 
            class="btn btn-primary">Edit</button></a>
            <a href="proses_mhs.php?npm=<?php echo $x['npm']; ?>&aksi=hapus"><button type="button" 
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
