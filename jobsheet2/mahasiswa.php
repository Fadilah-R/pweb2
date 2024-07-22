<?php
// menulis kelas : class diikuti nama kelasnya
class mahasiswa{
// menuliskan properti
var $nim;
var $nama;
var $alamat;
// method untuk menampilkan nama
function tampil_nama(){
    return "Nama : Fadilah Romdona";
}
// method untuk menampilkan nim
function tampil_nim(){
    return "NIM : 220102057";
}
// method untuk menampilkan alamat
function tampil_alamat(){
    return "Alamat : Kalijeruk RT 5 RW 1, Kawunganten";
}
}
// membuat kelas dosen
class dosen{
//menuliskan properti
var $nidn;
var $nama;
var $prodi;
// method untuk menampilkan nama
function tampilkan_nama(){
    return "Nama Dosen : ". $this->nama. "<br>";
}
// method untuk menampilkan nidn
function tampilkan_nidn(){
    return "NIDN : ". $this->nidn. "<br>";
}
// method untuk menampilkan prodi
function tampilkan_prodi(){
    return "Program Studi : ". $this->prodi. "<br>";
}
}
// objek baru nama_mahasiswa
$mhs = new mahasiswa();

// objek dari kelas dosen
$dosen = new dosen();
$dosen->nama = "Prih Diantoro Abda`u";
$dosen->nidn = "199902110001";
$dosen->prodi = "D3-Teknik Informatika";
// menampilkan objek mahasiswa ke layar
echo "Data Mahasiswa :<br>";
echo $mhs->tampil_nama();
echo "<br>";
echo $mhs->tampil_nim();
echo "<br>";
echo $mhs->tampil_alamat();

// menampilkan objek dosen ke layar
echo "<br><br>Data Dosen :<br>";
echo $dosen->tampilkan_nama();
echo $dosen->tampilkan_nidn();
echo $dosen->tampilkan_prodi();
// task :
// class : dosen
// property : nidn, nama (tampilkan nama saya), prodi
?>