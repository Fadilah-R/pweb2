<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php
include_once '../../koneksi.php';
include_once '../../controllers/PesertaController.php';
//inisiasi class database
$database = new database();
$db = $database->getKoneksi();

if(isset($_GET['id_peserta'])){
    $id_peserta=$_GET['id_peserta'];

    $pesertaController=new PesertaController($db);
    $result=$pesertaController->deletePeserta($id_peserta);

    if($result){
        header("location:/tugas/peserta");
    }else{
        echo "Gagal menghapus data";
    }
    
}