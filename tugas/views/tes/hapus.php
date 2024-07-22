<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include_once '../../koneksi.php';
include_once '../../controllers/BiayaController.php';
//inisiasi class database
$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_biaya'])){
    $id_biaya=$_GET['id_biaya'];

    $biayaController=new BiayaController($db);
    $result=$biayaController->deleteBiaya($id_biaya);

    if($result){
        header("location:/tugas/biaya");
    }else{
        echo "Gagal menghapus data";
    }
    
}