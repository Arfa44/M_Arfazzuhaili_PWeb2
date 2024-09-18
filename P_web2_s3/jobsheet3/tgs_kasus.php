<?php

// Membuat kelas abstrak Jurnal
abstract class Jurnal {
    abstract public function ajukanJurnal(); // Metode abstrak untuk pengajuan jurnal
}

// Membuat kelas Person dengan atribut name
class Person {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

// Membuat kelas Dosen yang mewarisi dari Person
class Dosen extends Person {
    private $nidn; //Encapsulation untuk melindungi atribut nidn di kelas Dosen

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    // Metode untuk mendapatkan NIDN
    public function getNidn() {
        return $this->nidn;
    }

    // Implementasi metode ajukanJurnal
    public function ajukanJurnal() {
        return "Dosen {$this->name} (NIDN: {$this->getNidn()}) mengajukan jurnal.";
    }
}

// Membuat kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; //Encapsulation untuk melindungi atribut nim di kelas mahasiswa

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Metode untuk mendapatkan NIM
    public function getNim() {
        return $this->nim;
    }

    // Implementasi metode ajukanJurnal
    public function ajukanJurnal() {
        return "Mahasiswa {$this->name} (NIM: {$this->getNim()}) mengajukan jurnal.";
    }
}

// Menguji kelas-kelas yang telah dibuat
$dosen = new Dosen("Dr. Noa", "123456789");
echo $dosen->ajukanJurnal() . "<br>";

$mahasiswa = new Mahasiswa("Ray Von Arcadia", "999");
echo $mahasiswa->ajukanJurnal() . "<br>";

?>