<?php
include_once '../../koneksi.php';
include_once '../../controllers/BiayaController.php';
//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $id_biaya=$_POST['id_biaya'];
    $nama_tes=$_POST['nama_tes'];
    $nama_peserta=$_POST['nama_peserta'];
    $kategori=$_POST['kategori'];
    $biaya_tes=$_POST['biaya_tes'];
    $tgl_byr=$_POST['tgl_byr'];
    $metode=$_POST['metode'];

    $biayaController = new BiayaController($db);
    $result=$biayaController->createBiaya($id_biaya,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode);
    
    if($result){
        header("location:/tugas/biaya");
    }else{
        header("location:tambahbiaya");
    }
}


?>