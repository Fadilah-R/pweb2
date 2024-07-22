<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include_once '../../koneksi.php';
include_once '../../controllers/BiayaController.php';
// include '../../header.php';
//inisiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_biaya'])){
    $id_biaya=$_GET['id_biaya'];

    $biayaController=new BiayaController($db);
    $biayaData = $biayaController->getBiayaById($id_biaya);

    if($biayaData){
        if(isset ($_POST['submit'])){
            $id_biaya=$_POST['id_biaya'];
            $nama_tes=$_POST['nama_tes'];
            $nama_peserta=$_POST['nama_peserta'];
            $kategori=$_POST['kategori'];
            $biaya_tes=$_POST['biaya_tes'];
            $tgl_byr=$_POST['tgl_byr'];
            $metode=$_POST['metode'];
            
            $result=$biayaController->updateBiaya($id_biaya,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode);
            if($result){
                header('location:/tugas/biaya');
            }else{
                header('location:editbiaya');
            }
        }
    }else{
        echo "Biaya tidak ditemukan";
    }
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h3>Edit Data Biaya</h3>
<?php
if($biayaData){
?>
    <form action="" method="post">
    <?php
    foreach($biayaData as $d => $value){
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
