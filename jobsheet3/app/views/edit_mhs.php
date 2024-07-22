<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include 'head.php';
include 'side.php';
include '../classes/database.php';
$db = new database();
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h3>Edit Data Mahasiswa</h3>
<form action="proses_mhs.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['npm']) as $d){
?>
    <table>
        <tr>
            <td>NPM</td>
            <td>
                <input type="hidden" name="npm" value="<?php echo $d['npm'] ?>">
                <input type="text" name="npm" value="<?php echo $d['npm'] ?>">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $d['nama'] ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" id="" cols="30" rows="5"><?php echo $d['alamat'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" ></td>
        </tr>
    </table>
<?php
}
?>
</form>
</div>
</main>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</table>
</body>
</html>
