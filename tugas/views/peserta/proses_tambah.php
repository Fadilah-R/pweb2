<?php
include_once '../../koneksi.php';
include_once '../../controllers/PesertaController.php';
//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $id_peserta=$_POST['id_peserta'];
    $nama_peserta=$_POST['nama_peserta'];
    $email_peserta=$_POST['email_peserta'];
    $no_hp=$_POST['no_hp'];
    $alamat=$_POST['alamat'];

    $pesertaController = new PesertaController($db);
    $result=$pesertaController->createPeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat);
    
    if($result){
        header("location:/tugas/peserta");
    }else{
        header("location:tambah");
    }
}
?>