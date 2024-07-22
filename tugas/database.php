<?php
class Database{
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "toefl";
    var $koneksi;
    //method membuat koneksi
    function __construct(){
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampil_peserta(){
        $data = mysqli_query($this->koneksi, "select * from peserta");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tambah_peserta($id_peserta, $nama_peserta, $email_peserta, $no_hp, $alamat){
        mysqli_query($this->koneksi, "insert into peserta (id_peserta, nama_peserta, email_peserta, no_hp, alamat) values('$id_peserta', '$nama_peserta', '$email_peserta', '$no_hp', '$alamat')"); 
    }
    function edit($id_peserta){
        $data = mysqli_query($this->koneksi, "select * from peserta where id_peserta='$id_peserta'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update($id, $id_peserta, $nama_peserta, $email_peserta, $no_hp, $alamat){
        mysqli_query($this->koneksi, "update peserta set id_peserta='$id_peserta', nama_peserta='$nama_peserta', email_peserta='$email_peserta', no_hp='$no_hp', alamat ='$alamat' where id_peserta='$id_peserta'");
    }
    function hapus($id_peserta){
        mysqli_query($this->koneksi, "delete from peserta where id_peserta='$id_peserta'");
    }
    function tampil_tes(){
        $data = mysqli_query($this->koneksi, "select * from tes");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tampil_skor(){
        $data = mysqli_query($this->koneksi, "select * from skor");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
}


?>