<?php
include_once '../../models/Mulai.php';

class MulaiController{
    private $model;

    public function __construct($db){
        $this->model = new Mulai($db);
    }

    public function getAllMulai(){
        return $this->model->getAllMulai();
    }
    public function createMulai($id_biaya,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode){
        return $this->model->createBiaya($id_biaya,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode);
    }
    public function getMulaiById($no){
        return $this->model->getMulaiById($no);
    }
    public function updateBiaya($npm,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode){
        return $this->model->updateBiaya($npm,$nama_tes,$nama_peserta,$kategori,$biaya_tes,$tgl_byr,$metode);
    }
    public function deleteBiaya($id_biaya){
        return $this->model->deleteBiaya($id_biaya);
    }
}