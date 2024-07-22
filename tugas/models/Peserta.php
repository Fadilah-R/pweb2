<?php
class Peserta{
    private $koneksi;

    public function __construct($db){
        $this->koneksi=$db;
    }

    public function getAllPeserta(){
        $query="SELECT *from peserta";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createPeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat){
        $query="INSERT INTO peserta (id_peserta,nama_peserta,email_peserta,no_hp,alamat)
        VALUES ('$id_peserta','$nama_peserta','$email_peserta','$no_hp','$alamat')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function getPesertaById($id_peserta){
        $query="SELECT * FROM peserta where id_peserta=$id_peserta";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updatePeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat){
        $query="UPDATE peserta set 
        id_peserta='$id_peserta',
        nama_peserta='$nama_peserta',
        email_peserta='$email_peserta',
        no_hp='$no_hp',
        alamat='$alamat'
        where id_peserta='$id_peserta'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function deletePeserta($id_peserta){
        $query="DELETE FROM peserta WHERE id_peserta=$id_peserta";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>
