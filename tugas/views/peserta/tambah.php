<!DOCTYPE html>
<html>
<body>
<?php
include '../../header.php';
?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<div class="table-responsive">
<table class="table table-striped table-sm">
<h4>Tambah Data Peserta</h4>
<form method="post" action="proses_tambah">
    <table>
        <tr>
            <td>ID Peserta</td>
            <td><input type="number" name="id_peserta"></td>
        </tr>
        <tr>
            <td>Nama Peserta</td>
            <td><input type="text" name="nama_peserta"></td>
        </tr>
        <tr>
            <td>Email Peserta</td>
            <td><input type="email" name="email_peserta"></td>
        </tr>
        <tr>
            <td>No.Hp</td>
            <td><input type="number" name="no_hp"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>
                <textarea name="alamat" cols="30" rows="5"></textarea>
            </td>
        </tr>
        <tr>
			<td></td>
			<td><input type="submit" name="submit" value="SIMPAN"></td>
		</tr>	
    </table>
</form>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/id_peserta/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.min.js"></script>      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
        <script src="dashboard.js"></script>
</body>
</html>