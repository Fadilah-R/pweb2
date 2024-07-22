<?php
include_once '../../models/Soal.php';

class SoalController {
    private $model;
    private $db;  // Tambahkan properti $db untuk menyimpan objek database

    public function __construct($db) {
        $this->db = $db;  // Simpan objek database saat instansiasi
        $this->model = new Soal($db);  // Berikan objek database ke model
    }
    public function getAllSoal(){
        return $this->model->getAllSoal();
    }
//     public function getAllSoal() {
//     $query = "SELECT * FROM soal ORDER BY id_soal ASC";
//     $stmt = $this->db->prepare($query);
//     $stmt->execute();
//     $result = $stmt->get_result();
//     $soal = array();
//     while ($row = $result->fetch_assoc()) {
//         $soal[] = $row;
//     }
//     return $soal;
// }

    public function createSoal($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat){
        return $this->model->createPeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat);
    }
    public function getSoalById($id_soal){
        return $this->model->getPesertaById($id_peserta);
    }
    public function updatePeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat){
        return $this->model->updatePeserta($id_peserta,$nama_peserta,$email_peserta,$no_hp,$alamat);
    }
    public function deletePeserta($id_peserta){
        return $this->model->deletePeserta($id_peserta);
    }
}