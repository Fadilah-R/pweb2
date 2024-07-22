<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
include '../../index.php';

//inisiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['npm'])){
    $npm=$_GET['npm'];

    $mahasiswaController=new MahasiswaController($db);
    $mahasiswaData = $mahasiswaController->getMahasiswaByNPM($npm);
  
    if($mahasiswaData){
        if(isset ($_POST['submit'])){
            $npm=$_POST['npm'];
            $program_studi=$_POST['program_studi'];
            $nama=$_POST['nama'];
            $tempat_lahir=$_POST['tempat_lahir'];
            $tanggal_lahir=$_POST['tanggal_lahir'];
            $jenis_kelamin=$_POST['jenis_kelamin'];
            $agama=$_POST['agama'];
            $alamat=$_POST['alamat'];

            $result=$mahasiswaController->updateMahasiswa($npm,$program_studi,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat);
            if($result){
                header("location:/jobsheet5/mahasiswa");
            }else{
                header("location:edit");
            }
        }
    }else{
        echo "Mahasiswa tidak ditemukan";
    }
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h3>Edit Data Mahasiswa</h3>
<?php
if($mahasiswaData){
?>
    <form action="" method="post">
    <?php
    foreach($mahasiswaData as $d => $value){
    ?>
    <table border="0">
                <tr>
                    <td width="100">
                        <?php 
                        echo $d ;
                        ?>
                    </td>
                    <td>
                        <input type="text" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
    <?php
    }
    ?>
				<tr>
                    <td></td>
					<td>
                        <input type="submit" name="submit" value="SIMPAN">
                    </td>
				</tr>		
	</table>
    </form>
<?php
}
?>
</main>

<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js" integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG" crossorigin="anonymous"></script><script src="dashboard.js"></script>
</html>
