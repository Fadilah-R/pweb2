<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
//inisiasi class database
$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['npm'])){
    $npm=$_GET['npm'];

    $mahasiswaController=new MahasiswaController($db);
    $result=$mahasiswaController->deleteMahasiswa($npm);

    if($result){
        header("location:/jobsheet5/mahasiswa");
    }else{
        echo "Gagal menghapus data";
    }
    
}