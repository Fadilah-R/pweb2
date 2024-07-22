<?php
include_once '../../models/Dosen.php';

class DosenController{
    private $model;

    public function __construct($db){
        $this->model = new Dosen($db);
    }

    public function getAllDosen(){
        return $this->model->getAllDosen();
    }
    public function createDosen($nidn,$nama,$prodi,$alamat){
        return $this->model->createDosen($nidn,$nama,$prodi,$alamat);
    }
    public function getDosenByNIDN($nidn){
        return $this->model->getDosenByNIDN($nidn);
    }
    public function updateDosen($npm,$nama,$prodi,$alamat){
        return $this->model->updateDosen($npm,$nama,$prodi,$alamat);
    }
    public function deleteDosen($nidn){
        return $this->model->deleteDosen($nidn);
    }
}