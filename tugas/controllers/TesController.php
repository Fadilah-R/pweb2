<?php
include_once '../../models/Tes.php';

class TesController{
    private $model;

    public function __construct($db){
        $this->model = new Tes($db);
    }

    public function getAllTes(){
        return $this->model->getAllTes();
    }
    public function createTes($id,$nama,$soal,$waktu,$token){
        return $this->model->createBiaya($id,$nama,$soal,$waktu,$token);
    }
    public function getTesById($id){
        return $this->model->getBiayaById($id);
    }
    public function updateTes($id,$nama,$soal,$waktu,$token){
        return $this->model->updateTes($id,$nama,$soal,$waktu,$token);
    }
    public function deleteTes($id){
        return $this->model->deleteTes($id);
    }
}