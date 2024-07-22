<?php
// enkapsulasi : metode untuk mengatur struktur dari class
// tujuan untuk menentukan hak akses pd properti/method
 
class mahasiswa{
    // properti public & private
    public $nama;//tanpa ditulis public akan jdi public, bisa dipanggil di luar
    // protected $nim;//tidak bisa dipanggil di luar class, bisanya dipanggil di turunannya
    private $nim = "220102057";//hanya bisa dipanggil di dlm kelas ini
    // public method
    public function tampilkan_nama(){
        return "Nama saya Fadilah Romdona <br>";
    }

    // membuat method
    function tampilkan_nim(){
        return "NIM saya ".$this->nim;
    }
} 
// instansiasi objek mahasiswa ke dlm class mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

// memanggil method tampilkan nama
echo $mahasiswa->tampilkan_nama();
echo $nim->tampilkan_nim();
?>