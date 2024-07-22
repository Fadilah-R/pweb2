<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
//inisiasi class database
$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['nidn'])){
    $nidn=$_GET['nidn'];

    $dosenController=new DosenController($db);
    $result=$dosenController->deleteDosen($nidn);

    if($result){
        header("location:/jobsheet5/dosen");
    }else{
        echo "Gagal menghapus data";
    }
    
}