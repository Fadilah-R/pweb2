<?php
class Mulai{
    private $koneksi;

    public function __construct($db){
        $this->koneksi=$db;
    }

    public function getAllMulai(){
        $query="SELECT *from mulai";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createBiaya($id_biaya,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode){
        $query="INSERT INTO biaya (id_biaya,nama_tes,nama_peserta,kategori,biaya_tes,tgl_byr,metode)
        VALUES ('$id_biaya','$nama_tes','$nama_peserta','$kategori','$biaya_tes','$tgl_byr','$metode')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function getBiayaById($id_biaya){
        $query="SELECT * FROM biaya where id_biaya=$id_biaya";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updateBiaya($id_biaya,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode){
        $query="UPDATE biaya set 
        id_biaya='$id_biaya',
        nama_tes='$nama_tes',
        nama_peserta='$nama_peserta',
        kategori='$nama_peserta',
        biaya_tes='$biaya_tes',
        tgl_byr='$tgl_byr',
        metode='$metode'
        where id_biaya='$id_biaya'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function deleteBiaya($id_biaya){
        $query="DELETE FROM biaya WHERE id_biaya=$id_biaya";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>
