<?php
include 'Buku.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->tambah_buku($_POST['id'], $_POST['judul'], $_POST['pengarang'], $_POST['tahun_terbit'], $_POST['harga']);
    header("location:tampil_buku.php");
}else if($aksi == "update_buku"){
    $db->update_buku($_POST['id'], $_POST['judul'], $_POST['pengarang'], $_POST['tahun_terbit'], $_POST['harga']);
    header("location:tampil_buku.php");
}else if($aksi == "hapus_buku"){
    $db->hapus_buku($_GET['id']);
    header("location:tampil_buku.php");
}
?>