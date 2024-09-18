<?php
// 1. Membuat kelas mahasiswa
class Mahasiswa {
    // Atribut atau Properties untuk kelas mahasiswa, yaitu : nama,nim,jurusan
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
//membuat kelas pengguna 
class Pengguna {
    protected $nama;

    //metode setNama()
    public function setNama($nama) {
        $this->nama = $nama;
    }

    //metode getNama()
    public function getNama() {
        return $this->nama;
    }
}

class Dosen extends Pengguna { //class Dosen yang mewarisi class Pengguna dan tambahkan atribut mataKuliah.
    private $mataKuliah;

    //metode setter dan getter MataKuliah
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    public function getMataKuliah() {
        return $this->mataKuliah;
    }
}

// 4. Polymorphism
//Buat class Pengguna dengan metode aksesFitur(). nama kelas diubah menjadi Pengguna_P, karena kelas Pengguna sebelumnya sudah ada
class Pengguna_P {
    public function aksesFitur() {
        return "Akses Fitur";
    }
}

////class Mahasiswa_P yang mewarisi class Pengguna_P
class Mahasiswa_P extends Pengguna_P {
    public function aksesFitur() {
        return "Mahasiswa mengakses fitur perkuliahan dan pengumpulan tugas.<br>";
    }
}

////class Dosen_P yang mewarisi class Pengguna_P
class Dosen_P extends Pengguna_P {
    public function aksesFitur() {
        return "Dosen dapat mengakses fitur kampus.<br>";
    }
}

// 5. Abstraction
//Buat class abstrak Pengguna dengan metode abstrak aksesFitur(). nama kelas diubah menjadi Pengguna_Abs, karena kelas Pengguna sebelumnya sudah ada

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