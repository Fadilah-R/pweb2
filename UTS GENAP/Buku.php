<?php
class Buku {
    public $judul;
    public $pengarang;
    public $tahun_terbit;
    public $harga;

    public function __construct($judul, $pengarang, $tahun_terbit, $harga) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahun_terbit = $tahun_terbit;
        $this->harga = $harga;
    }
}
class Database{
    //deklarasi variabel
    var $host = "localhost";
    var $username = "root";
    var $password = "";
    var $db = "akademik";
    var $koneksi;
    //method membuat koneksi
    function __construct(){
        $this->koneksi=mysqli_connect($this->host, $this->username, $this->password, $this->db);
    }

    function tampilkan_buku(){
        $data = mysqli_query($this->koneksi, "select * from buku");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function tambah_buku($id, $judul, $pengarang, $tahun_terbit, $harga){
        mysqli_query($this->koneksi, "insert into buku (id, judul, pengarang, tahun_terbit, harga) 
        values('$id', '$judul', '$pengarang', '$tahun_terbit', '$harga')"); 
    }
    function edit_buku($id){
        $data = mysqli_query($this->koneksi, "select * from buku where id='$id'");
        while ($d=mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    function update_buku($id, $judul, $pengarang, $tahun_terbit, $harga){
        mysqli_query($this->koneksi, "update buku set id='$id', judul='$judul', pengarang='$pengarang', tahun_terbit='$tahun_terbit', harga ='$harga' where id='$id'");
    }
    function hapus_buku($id){
        mysqli_query($this->koneksi, "delete from buku where id='$id'");
    }
}


?>