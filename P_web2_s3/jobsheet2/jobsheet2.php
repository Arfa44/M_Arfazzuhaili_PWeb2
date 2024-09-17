<?php
// 1. Membuat Class dan Object
class Mahasiswa {
    // Atribut atau Properties
//2. Encapsulation
    private $nama;
    private $nim;
    private $jurusan;

    // Metode untuk mengatur nilai
    public function setData($nama, $nim, $jurusan) {
        $this->setNama($nama);
        $this->setNim($nim);
        $this->setJurusan($jurusan);
    }

    // Getter dan Setter untuk Nama
    public function getNama() {
        return $this->nama;
    }
    public function setNama($newNama) {
        $this->nama = $newNama;
    }

    // Getter dan Setter untuk NIM
    public function getNim() {
        return $this->nim;
    }
    public function setNim($newNim) {
        $this->nim = $newNim;
    }

    // Getter dan Setter untuk Jurusan
    public function getJurusan() {
        return $this->jurusan;
    }
    public function setJurusan($newJurusan) {
        $this->jurusan = $newJurusan;
    }
    
    // Metode untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama Mahasiswa = $this->nama, NIM = $this->nim dari Jurusan $this->jurusan.<br>";
    }
} 

// 3. Inheritance
class Pengguna {
    protected $nama;

    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna {
    private $mataKuliah;

    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// 4. Polymorphism
class Pengguna_P {
    public function aksesFitur() {
        return "Akses Fitur";
    }
}

class Mahasiswa_P extends Pengguna_P {
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur perkuliahan dan pengumpulan tugas.<br>";
    }
}

class Dosen_P extends Pengguna_P {
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur kampus.<br>";
    }
}

// 5. Abstraction
abstract class Pengguna_Abs {
    abstract public function aksesFitur();
}

class Mahasiswa_Abs extends Pengguna_Abs {
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur perkuliahan dan pengumpulan tugas.<br>";
    }
}

class Dosen_Abs extends Pengguna_Abs {
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur kampus.<br>";
    }
}

// Instansiasi Objek
// 1. Membuat Class dan Object
$mahasiswa1 = new Mahasiswa();
$mahasiswa1->setData("Ray Arca", "999", "JKB");
echo $mahasiswa1->tampilkanData();

$mahasiswa2 = new Mahasiswa();
$mahasiswa2->setData("Sasuke", "1234", "JKB");
echo $mahasiswa2->tampilkanData();

// Inheritance
$dosen1 = new Dosen();
$dosen1->setNama("Noa");
$dosen1->setMataKuliah("Web Designer");
echo "Nama Dosen: " . $dosen1->getNama() . ", Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>";

// Polymorphism
$mahasiswa_p = new Mahasiswa_P();
$dosen_p = new Dosen_P();

function aksesFitur(Pengguna_P $pengguna) {
    echo $pengguna->aksesFitur();
}

aksesFitur($mahasiswa_p); // Output: Mahasiswa mengakses fitur perkuliahan dan pengumpulan tugas.
aksesFitur($dosen_p); // Output: Dosen dapat mengakses fitur kampus.

// Demonstrasi Abstraction
$mahasiswa_abs = new Mahasiswa_Abs();
$dosen_abs = new Dosen_Abs();

echo $mahasiswa_abs->aksesFitur(); // Output: Mahasiswa mengakses fitur perkuliahan dan pengumpulan tugas.
echo $dosen_abs->aksesFitur(); // Output: Dosen dapat mengakses fitur kampus.
?>