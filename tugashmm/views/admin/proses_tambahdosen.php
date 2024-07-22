<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $nidn=$_POST['nidn'];
    $nama=$_POST['nama'];
    $prodi=$_POST['prodi'];
    $alamat=$_POST['alamat'];

    $dosenController = new DosenController($db);
    $result=$dosenController->createDosen($nidn,$nama,$prodi,$alamat);
    
    if($result){
        header("location:/jobsheet5/dosen");
    }else{
        header("location:tambahdosen");
    }
}


?>