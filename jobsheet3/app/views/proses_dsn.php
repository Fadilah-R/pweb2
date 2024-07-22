<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah_dsn"){
    $db->tambah_dosen($_POST['nidn'], $_POST['nama'], $_POST['prodi'], $_POST['alamat']);
    header("location:tampil_dsn.php");
}else if($aksi == "update_dsn"){
    $db->update_dosen($_POST['id'], $_POST['nidn'], $_POST['nama'], $_POST['prodi'], $_POST['alamat']);
    header("location:tampil_dsn.php");
}else if($aksi == "hapus_dsn"){
    $db->hapus_dosen($_GET['nidn']);
    header("location:tampil_dsn.php");
}

?>