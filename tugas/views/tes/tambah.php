<!DOCTYPE html>
<html>
<body>
<?php
include '../../header.php';
?>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
	<div class="table-responsive">
	<table class="table table-striped table-sm">
	<h4>Tambah Data Tes</h4>
	<form method="post" action="proses_tambahtes">
	<table>
		<tr>
            <td>Id</td>
            <td><input type="number" name="id_tes" id=""></td>
        </tr>
        <tr>
            <td>Nama Tes</td>
			<td>
				<select name="nama_tes">
					<option value="--Pilih Jenis Tes--">--Pilih Jenis Tes--</option>
					<option value="TOEFL IBT(Internet-Based Test)">TOEFL IBT(Internet-Based Test)</option>
					<option value="TOEFL ITP(Institutional Testing Program)">TOEFL ITP(Institutional Testing Program)</option>
				</select>
			</td>
        </tr>
        <tr>
            <td>Nama Peserta</td>
            <td><input type="text" name="nama_peserta" id=""></td>
        </tr>
        <tr>			
			<td>Level</td>
			<td>
			<input type="radio" name="kategori" value="Dosen" checked>
			<label for="dosen">Dosen</label>

			<input type="radio" name="kategori" value="Mahasiswa" >
			<label for="mahasiswa">Mahasiswa</label>
			</td>
		</tr>
		<tr>
			<td>Biaya Tes</td>
			<td>
			<input type="number" name="biaya">
			</td>
        </tr>
		<tr>
            <td>Tgl Bayar</td>
            <td><input type="date" name="tgl_byr" id=""></td>
        </tr>
		<tr>
			<td>Metode Bayar</td>
			<td>
				<select name="metode">
					<option value="--Pilih Metode--">--Pilih Metode--</option>
					<option value="Teller">Teller</option>
					<option value="Transfer Bank">Transfer Bank</option>
				</select>
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