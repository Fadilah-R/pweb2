<?php

class HomeController{
    public function dash_admin(){
        header("location:http://localhost/pweb2/tugas/index.php");
    }
    public function peserta(){
        header("location:http://localhost/pweb2/tugas/views/peserta/index.php");
    }
    public function dash_mhs(){
        header("location:http://localhost/pweb2/tugas/dash_mhs.php");
    }
    public function mulai(){
        header("location:http://localhost/pweb2/tugas/views/mulai/index.php");
    }
    public function tambah(){
        header("location:http://localhost/pweb2/tugas/views/peserta/tambah.php");
    }
    public function proses_tambah(){
        header("location:http://localhost/pweb2/tugas/views/peserta/proses_tambah.php");
    }
    public function edit(){
        header("location:http://localhost/pweb2/tugas/views/peserta/edit.php");
    }
    public function hapus(){
        header("location:http://localhost/pweb2/tugas/views/peserta/hapus.php");
    }
    public function tes(){
        header("location:http://localhost/pweb2/tugas/views/tes/index.php");
    }
    public function tambahtes(){
        header("location:http://localhost/pweb2/tugas/views/tes/tambah.php");
    }
    public function proses_tambahtes(){
        header("location:http://localhost/pweb2/tugas/views/tes/proses_tambah.php");
    }
    public function edittes(){
        header("location:http://localhost/pweb2/tugas/views/tes/edit.php");
    }
    public function hapustes(){
        header("location:http://localhost/pweb2/tugas/views/tes/hapus.php");
    }
    public function biaya(){
        header("location:http://localhost/pweb2/tugas/views/biaya/index.php");
    }
    public function tambahbiaya(){
        header("location:http://localhost/pweb2/tugas/views/biaya/tambahbiaya.php");
    }
    public function proses_tambahbiaya(){
        header("location:http://localhost/pweb2/tugas/views/biaya/proses_tambahbiaya.php");
    }
    public function editbiaya(){
        header("location:http://localhost/pweb2/tugas/views/biaya/editbiaya.php");
    }
    public function hapusbiaya(){
        header("location:http://localhost/pweb2/tugas/views/biaya/hapusbiaya.php");
    }
}