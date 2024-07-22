<?php
class Mahasiswa{
    private $koneksi;

    public function __construct($db){
        $this->koneksi=$db;
    }

    public function getAllMahasiswa(){
        $query="SELECT *from mahasiswa";
        $result=mysqli_query($this->koneksi, $query);
        return $result;
    }
    public function createMahasiswa($npm,$program_studi,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat){
        $query="INSERT INTO mahasiswa (npm,program_studi,nama,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,alamat)
        VALUES ('$npm','$program_studi','$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$alamat')";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function getMahasiswaByNPM($npm){
        $query="SELECT * FROM mahasiswa where npm=$npm";
        $result=mysqli_query($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }
    public function updateMahasiswa($npm,$program_studi,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat){
        $query="UPDATE mahasiswa set 
        npm='$npm',
        program_studi='$program_studi',
        nama='$nama',
        tempat_lahir='$tempat_lahir',
        tanggal_lahir='$tanggal_lahir',
        jenis_kelamin='$jenis_kelamin',
        agama='$agama',
        alamat='$alamat'
        where npm='$npm'";
        $result = mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
    public function deleteMahasiswa($npm){
        $query="DELETE FROM mahasiswa WHERE npm=$npm";
        $result=mysqli_query($this->koneksi, $query);
        if($result){
            return true;
        }else{
            return false;
        }
    }
}
?>
