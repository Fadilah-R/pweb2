<?php
class Manusia {
    public $nama = "nama",   // Properti nama dengan akses public
           $kelas = "TI",
           $alamat = "alamat";
    protected $umur = 0;
    private $id = "id";
    // Public method untuk mengisi properti nama
    public function __construct($nama, $kelas, $alamat, $id) {
        $this->nama = $nama;
        $this->kelas = $kelas;
        $this->alamat = $alamat;
        $this->id = $id;
    }
    public function getID(){
        return $this->id;
    }
    public function getInfo(){
        return "$this->kelas, $this->alamat";
    }
    public function getInfoLengkap(){
        $str = "{$this->nama} | {$this->getInfo()} | ID. {$this->id}";

        return $str;
    }
}

// Kelas turunan Mahasiswa dari Manusia
class Mahasiswa extends Manusia {   
    public $semester;

    // Public method untuk mengisi properti kelas mahasiswa sesuai induk kelas
    public function __construct($nama, $kelas, $alamat, $id, $semester){
        parent::__construct($nama, $kelas, $alamat, $id);
        $this->semester = $semester;
    }
    public function getInfoLengkap(){
        $str = "Mahasiswa : ". parent::getInfoLengkap(). " - Semester {$this->semester}";
        return $str;
    }
    public function setUmur($umur){
        $this->umur = $umur;
    }
}
class CetakInfoLengkap{
    public function cetak(Manusia $manusia){
        echo "<br>";
        $str = "{$this->nama} | {$this->getInfoLengkap} - {$manusia->id}";
        return $str;
    }
}
// Kelas turunan Dosen dari Manusia
class Dosen extends Manusia{
    public $lama_ngajar;

    // Public method untuk mengisi properti kelas mahasiswa sesuai induk kelas
    public function __construct($nama, $kelas, $alamat, $id, $lama_ngajar){
        parent::__construct($nama, $kelas, $alamat, $id);
        $this->lama_ngajar = $lama_ngajar;
    }
    public function getInfoLengkap(){
        $str = "Dosen : ". parent::getInfoLengkap(). " - {$this->lama_ngajar} Tahun Mengajar";
        return $str;
    }
    public function setUmur($umur){
        $this->umur = $umur;
    }
}

$informatika = new Mahasiswa("Fadilah Romdona", "TI-2C", "Kawunganten", 220102057, 3);
$informatika2 = new Dosen("Prih Diantoro ABda`u", "TI-2C", "Kebumen", 1989091201, 3);

// $informatika->panggil_nama("Fadilah");
// $informatika->panggil_mahasiswa("Romdona");

// Tampilkan isi dari properti
//echo "Nama depan saya: " . $informatika->nama . "<br>";
//echo "Nama belakang saya: " . $informatika->nama_mahasiswa . "<br>";
//echo "<hr>";
//echo $informatika->getUmur();
echo $informatika->getInfoLengkap();
echo "<br>";
echo $informatika2->getInfoLengkap();
echo "<hr>";

echo "Umur Saya : ".$informatika->setUmur = 19;
echo "<br>";
echo "Umur Dosen : ".$informatika2->setUmur = 34;
?>
