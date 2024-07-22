<?php
include_once '../../models/Mahasiswa.php';

class MahasiswaController{
    private $model;

    public function __construct($db){
        $this->model = new Mahasiswa($db);
    }

    public function getAllMahasiswa(){
        return $this->model->getAllMahasiswa();
    }
    public function createMahasiswa($npm,$program_studi,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat){
        return $this->model->createMahasiswa($npm,$program_studi,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat);
    }
    public function getMahasiswaByNPM($npm){
        return $this->model->getMahasiswaByNPM($npm);
    }
    public function updateMahasiswa($npm,$program_studi,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat){
        return $this->model->updateMahasiswa($npm,$program_studi,$nama,$tempat_lahir,$tanggal_lahir,$jenis_kelamin,$agama,$alamat);
    }
    public function deleteMahasiswa($npm){
        return $this->model->deleteMahasiswa($npm);
    }
}