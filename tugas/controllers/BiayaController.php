<?php
include_once '../../models/Biaya.php';

class BiayaController{
    private $model;

    public function __construct($db){
        $this->model = new Biaya($db);
    }

    public function getAllBiaya(){
        return $this->model->getAllBiaya();
    }
    public function createBiaya($id_biaya,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode){
        return $this->model->createBiaya($id_biaya,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode);
    }
    public function getBiayaById($id_biaya){
        return $this->model->getBiayaById($id_biaya);
    }
    public function updateBiaya($npm,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode){
        return $this->model->updateBiaya($npm,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode);
    }
    public function deleteBiaya($id_biaya){
        return $this->model->deleteBiaya($id_biaya);
    }
}