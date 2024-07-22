<?php
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
//inisiasi class database
$database = new database;
$db = $database->getKoneksi();

if(isset($_POST['submit'])){
    $npm=$_POST['npm'];
    $program_studi=$_POST['program_studi'];
    $nama=$_POST['nama'];
    $tempat_lahir=$_POST['tempat_lahir'];
    $tanggal_lahir=$_POST['tanggal_lahir'];
    $jenis_kelamin=$_POST['jenis_kelamin'];
    $agama=$_POST['agama'];
    $alamat=$_POST['alamat'];

    $mahasiswaController = new MahasiswaController($db);
    $result=$mahasiswaController->createMahasiswa($npm,$program_studi,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat);
    
    if($result){
        header("location:/jobsheet5/mahasiswa");
    }else{
        header("location:tambah");
    }
}


?>