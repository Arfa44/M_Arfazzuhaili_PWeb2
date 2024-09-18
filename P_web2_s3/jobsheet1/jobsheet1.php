<?php
// Definisi Kelas
class Mahasiswa {
    // Atribut atau Properties
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->setNim($nim); // Memanggil metode setter untuk NIM
        $this->jurusan = $jurusan;
    }

    // Metode untuk mengupdate jurusan
    public function updateJurusan($jurusanBaru) {
        $this->jurusan = $jurusanBaru;
    }

    // Getter dan Setter untuk NIM
    public function getNim() {
        return $this->nim;
    }
    public function setNim($newNim) {
        $this->nim = $newNim;
    }

    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama Mahasiswa = $this->nama, NIM $this->nim dari Jurusan $this->jurusan.<br>";
    }
}

// Instansiasi Objek
$mahasiswa1 = new Mahasiswa("Ray Arcadia", "999", "JKB");
echo $mahasiswa1->tampilkanData();

$mahasiswa2 = new Mahasiswa("Ray", "1234", "JKB");
echo $mahasiswa2->tampilkanData();

// Update jurusan
$mahasiswa1->updateJurusan("TI");
echo $mahasiswa1->tampilkanData();
?>
