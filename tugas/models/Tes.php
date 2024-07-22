<?php
class Tes{
    private $koneksi;

    public function __construct($db){
        $this->koneksi=$db;
    }

    public function getAllTes(){
        $query="SELECT *from tes";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createTes($id,$nama,$soal,$waktu,$token){
        $query="INSERT INTO tes (id,nama,soal,waktu,token)
        VALUES ('$id','$nama','$soal','$waktu','$token')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function getTesById($id){
        $query="SELECT * FROM tes where id=$id";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updateTes($id,$nama,$soal,$waktu,$token){
        $query="UPDATE tes set 
        id='$id',
        nama='$nama',
        soal='$soal',
        waktu='$soal',
        token='$token',
        where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function deleteTes($id){
        $query="DELETE FROM tes WHERE id=$id";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>
