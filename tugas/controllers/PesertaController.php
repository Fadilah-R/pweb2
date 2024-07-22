<?php
include_once '../../models/Peserta.php';

class PesertaController {
    private $model;
    private $db;  // Tambahkan properti $db untuk menyimpan objek database

    public function __construct($db) {
        $this->db = $db;  // Simpan objek database saat instansiasi
        $this->model = new Peserta($db);  // Berikan objek database ke model
    }
    // public function getAllPeserta(){
    //     return $this->model->getAllPeserta();
    // }
    public function getAllPeserta() {
    $query = "SELECT * FROM peserta ORDER BY id_peserta ASC";
    $stmt = $this->db->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();
    $peserta = array();
    while ($row = $result->fetch_assoc()) {
        $peserta[] = $row;
    }
    return $peserta;
}

    public function createPeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat){
        return $this->model->createPeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat);
    }
    public function getPesertaById($id_peserta){
        return $this->model->getPesertaById($id_peserta);
    }
    public function updatePeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat){
        return $this->model->updatePeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat);
    }
    public function deletePeserta($id_peserta){
        return $this->model->deletePeserta($id_peserta);
    }
}