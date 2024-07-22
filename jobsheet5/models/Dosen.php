<?php
class Dosen{
    private $koneksi;

    public function __construct($db){
        $this->koneksi=$db;
    }

    public function getAllDosen(){
        $query="SELECT *from dosen";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createDosen($nidn,$nama,$prodi,$alamat){
        $query="INSERT INTO dosen (nidn,nama,prodi,alamat)
        VALUES ('$nidn','$nama','$prodi','$alamat')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        } 
    }
    public function getDosenByNIDN($nidn){
        $query="SELECT * FROM dosen where nidn=$nidn";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updateDosen($nidn,$nama,$prodi,$alamat){
        $query="UPDATE dosen set 
        nidn='$nidn',
        nama='$nama',
        prodi='$prodi',
        alamat='$alamat'
        where nidn='$nidn'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function deleteDosen($nidn){
        $query="DELETE FROM dosen WHERE nidn=$nidn";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>
