<?php
include_once '../../koneksi.php';
include_once '../../controllers/PesertaController.php';
//inisiasi class database
$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id_peserta'])){
    $id_peserta=$_GET['id_peserta'];

    $pesertaController=new PesertaController($db);
    $pesertaData = $pesertaController->getPesertaById($id_peserta);
  
    if($pesertaData){
        if(isset ($_POST['submit'])){
            $id_peserta=$_POST['id_peserta'];
            $nama_peserta=$_POST['nama_peserta'];
            $email_peserta=$_POST['email_peserta'];
            $no_hp=$_POST['no_hp'];
            $alamat=$_POST['alamat'];

            $result=$pesertaController->updatePeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat);
            if($result){
                header("location:/tugas/peserta");
            }else{
                header("location:edit");
            }
        }
    }else{
        echo "Peserta tidak ditemukan";
    }
}
?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h3>Edit Data Peserta</h3>
<?php
if($pesertaData){
?>
    <form action="" method="post">
    <?php
    foreach($pesertaData as $d => $value){
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
