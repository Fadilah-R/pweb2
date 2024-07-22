<!DOCTYPE html>
<html>
<body>
<?php
include '../../index.php';
?>
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
	<h3>TAMBAH DATA MAHASISWA</h3>
	<form method="post" action="proses_tambah">
		<table>
			<tr>
				<td>NPM</td>
				<td><input type="text" name="npm"></td>
			</tr>
			<tr>
            <tr>			
				<td>Program Studi</td>
				<td>
					<select name="program_studi">
						<option value="D3-Teknik Informatika">D3-Teknik Informatika</option>
						<option value="D3-Teknik Mesin">D3-Teknik Mesin</option>
						<option value="D3-Teknik Elektronika">D3-Teknik Elektronika</option>
						<option value="D3-Teknik Listrik">D3-Teknik Listrik</option>
						<option value="D4-TPPL">D4-TPPL</option>
						<option value="D4-PPA">D4-PPA</option>
						<option value="D4-RKS">D4-RKS</option>
						<option value="D4-ALKS">D4-ALKS</option>
					</select>
				</td>
			</tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>			
				<td>Tempat Lahir</td>
				<td><input type="text" name="tempat_lahir"></td>
			</tr>
			<tr>			
				<td>Tanggal Lahir</td>
				<td><input type="date" name="tanggal_lahir"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki
					<input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
				</td>
			</tr>
			<tr>
				<td>Agama</td>
				<td>
					<select name="agama">
					<option value="Islam">Islam</option>
					<option value="Kristen">Kristen</option>
					<option value="Katholik">Katholik</option>
					<option value="Hindu">Hindu</option>
					<option value="Budha">Budha</option>
					<option value="Konghucu">Konghuchu</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
            	<td>
                	<textarea name="alamat" id="" cols="30" rows="5"></textarea>
            	</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="SIMPAN"></td>
			</tr>	
		</table>
	</form>
	</main>
	<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</body>
</html>