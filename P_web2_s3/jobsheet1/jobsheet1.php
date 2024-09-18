<?php
// membuat kelas mahasiswa
class Mahasiswa {
    // Atribut atau Properties yang dimiliki kelas mahasiswa, yaitu : nama,nim,jurusan
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
        return "Nama Mahasiswa = $this->nama, NIM = $this->nim dari Jurusan $this->jurusan.<br>";
    }
}

// Kelas Dosen
class Dosen {
    // properties/atribut untuk kelas dosen nama,nip, matakuliah
    public $nama;
    public $nip;
    public $mataKuliah;

    // Constructor
    public function __construct($nama, $nip, $mataKuliah) {
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }

    // Metode untuk menampilkan informasi dosen
    public function tampilkanDosen() {
        return "Nama Dosen: $this->nama, NIP = $this->nip, Mata Kuliah = $this->mataKuliah.<br>";
    }
}

// Instansiasi Objek untuk  kelas mahasiswa dan menampilkkan output
$mahasiswa1 = new Mahasiswa("Ray Arcadia", "999", "JKB");
echo $mahasiswa1->tampilkanData();
$mahasiswa2 = new Mahasiswa("Ray", "1234", "JKB");
echo $mahasiswa2->tampilkanData();

// Update jurusan
$mahasiswa1->updateJurusan("TI");
echo $mahasiswa1->tampilkanData();

// Buat objek dari kelas Dosen 
$dosen = new Dosen("Noa", "56789", "Web Development");
echo $dosen->tampilkanDosen(); //menampilkan output
?>