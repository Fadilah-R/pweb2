<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
//inisiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['nidn'])){
    $nidn=$_GET['nidn'];

    $dosenController=new DosenController($db);
    $dosenData = $dosenController->getDosenByNIDN($nidn);

    if($dosenData){
        if(isset ($_POST['submit'])){
            $nidn=$_POST['nidn'];
            $nama=$_POST['nama'];
            $prodi=$_POST['prodi'];
            $alamat=$_POST['alamat'];

            $result=$dosenController->updateDosen($nidn,$nama,$prodi,$alamat);
            if($result){
                header('location:/jobsheet5/dosen');
            }else{
                header('location:editdosen');
            }
        }
    }else{
        echo "Dosen tidak ditemukan";
    }
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h3>Edit Data Dosen</h3>
<?php
if($dosenData){
?>
    <form action="" method="post">
    <?php
    foreach($dosenData as $d => $value){
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
