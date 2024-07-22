<?php

class HomeController{
    public function home(){
        header("location:http://localhost/pweb2/jobsheet5/index.php");
    }
    public function mahasiswa(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/index.php");
    }
    public function tambah(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/tambah.php");
    }
    public function proses_tambah(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/proses_tambah.php");
    }
    public function edit(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/edit.php");
    }
    public function hapus(){
        header("location:http://localhost/pweb2/jobsheet5/views/mahasiswa/hapus.php");
    }
    public function dosen(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/index.php");
    }
    public function tambahdosen(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/tambahdosen.php");
    }
    public function proses_tambahdosen(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/proses_tambahdosen.php");
    }
    public function editdosen(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/editdosen.php");
    }
    public function hapusdosen(){
        header("location:http://localhost/pweb2/jobsheet5/views/dosen/hapusdosen.php");
    }
}