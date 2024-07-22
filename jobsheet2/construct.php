<?php
// menulis kelas : class diikuti nama kelasnya
class mahasiswa{
// menuliskan properti
var $nim;
var $nama;
var $alamat;
// construct akan dibaca pertama kali meskipun posisinya bukan pertama
function __construct(){
    echo "Saya Mahasiswa Teknik Informatika";
    echo "<br>";
}
// destruct
function __destruct(){
    echo "<br>Politeknik Negeri Cilacap";
}
// method untuk menampilkan nama
function tampil_nama(){
    return "Nama saya Fadilah";
}
// method untuk menampilkan mahassiswa
function tampil_mahasiswa(){
    return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
}
// method untuk menampilkan alamat
function tampil_alamat(){
    return "Alamat : Kalijeruk RT 5 RW 1, Kawunganten";
}
}
// objek baru nama_mahasiswa
$mhs = new mahasiswa();
// menampilkan objek mahasiswa ke layar
echo $mhs->tampil_nama();
echo "<br>";
echo $mhs->tampil_alamat();
echo "<br>";
echo $mhs->tampil_mahasiswa();
?>