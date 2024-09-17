<?php

// 1. Kelas Person sebagai superclass
class Person {
    protected $name; // Atribut protected untuk nama

    // Metode untuk mendapatkan nama
    public function getName() {
        return $this->name;
    }

    // Setter untuk name
    public function setName($name) {
        $this->name = $name;
    }

    // Metode untuk mendapatkan peran, dioverride di subclass
    public function getRole() {
        return "Person";
    }
}

// 2. Kelas Mahasiswa yang mewarisi dari Person
class Mahasiswa extends Person {
    private $nim; // Atribut private untuk nim

    // Metode untuk mendapatkan nim
    public function getNim() {
        return $this->nim;
    }

    // Setter untuk nim
    public function setNim($nim) {
        $this->nim = $nim;
    }

    // Override metode getName untuk format khusus
    public function getName() {
        return "Mahasiswa: " . $this->name; // Menggunakan atribut protected
    }

    // Override metode getRole untuk menampilkan peran
    public function getRole() {
        return "Mahasiswa";
    }
}

// 3. Kelas Dosen yang juga mewarisi dari Person
class Dosen extends Person {
    private $nidn; // Atribut private untuk nidn

    // Metode untuk mendapatkan nidn
    public function getNidn() {
        return $this->nidn;
    }

    // Setter untuk nidn
    public function setNidn($nidn) {
        $this->nidn = $nidn;
    }

    // Override metode getName untuk format khusus
    public function getName() {
        return "Dosen: " . $this->name; // Menggunakan atribut protected
    }

    // Override metode getRole untuk menampilkan peran
    public function getRole() {
        return "Dosen";
    }
}

// 4. Kelas abstrak Jurnal
abstract class Jurnal {
    abstract public function manageSubmission(); // Metode abstrak
}

// 5. Kelas JurnalDosen yang mengimplementasikan Jurnal
class JurnalDosen extends Jurnal {
    public function manageSubmission() {
        return "Proses pengajuan jurnal untuk Dosen"; // Proses pengajuan untuk dosen
    }
}

// 6. Kelas JurnalMahasiswa yang mengimplementasikan Jurnal
class JurnalMahasiswa extends Jurnal {
    public function manageSubmission() {
        return "Proses pengajuan jurnal untuk Mahasiswa"; // Proses pengajuan untuk mahasiswa
    }
}

// 7. Kelas abstrak Course
abstract class Course {
    abstract public function getCourseDetails(); // Metode abstrak
}

// 8. Kelas OnlineCourse yang mengimplementasikan Course
class OnlineCourse extends Course {
    public function getCourseDetails() {
        return "Detail Kursus Online"; // Detail untuk kursus online
    }
}

// 9. Kelas OfflineCourse yang mengimplementasikan Course
class OfflineCourse extends Course {
    public function getCourseDetails() {
        return "Detail Kursus Offline"; // Detail untuk kursus offline
    }
}

// Contoh penggunaan
$mahasiswa = new Mahasiswa(); // Membuat objek Mahasiswa
$mahasiswa->setName("Lux Arcadia"); // Mengatur nama mahasiswa
$mahasiswa->setNim("A999"); // Mengatur nim mahasiswa

$dosen = new Dosen(); // Membuat objek Dosen
$dosen->setName("Lucy"); // Mengatur nama dosen
$dosen->setNidn("D111"); // Mengatur nidn dosen

$onlineCourse = new OnlineCourse(); // Membuat objek OnlineCourse
$offlineCourse = new OfflineCourse(); // Membuat objek OfflineCourse
$jurnalDosen = new JurnalDosen(); // Membuat objek JurnalDosen
$jurnalMahasiswa = new JurnalMahasiswa(); // Membuat objek JurnalMahasiswa

// Output contoh
echo $mahasiswa->getName() ."<br>"."\n"; // Output: Mahasiswa: Ali
echo $dosen->getName() ."<br>". "\n"; // Output: Dosen: Budi
echo $mahasiswa->getNim() . "<br>"."\n"; // Output: S123
echo $dosen->getNidn() . "<br>"."\n"; // Output: T456
echo $onlineCourse->getCourseDetails() . "<br>"."\n"; // Output: Detail Kursus Online
echo $offlineCourse->getCourseDetails() . "<br>"."\n"; // Output: Detail Kursus Offline
echo $jurnalDosen->manageSubmission() . "<br>"."\n"; // Output: Proses pengajuan jurnal untuk Dosen
echo $jurnalMahasiswa->manageSubmission() . "<br>"."\n"; // Output: Proses pengajuan jurnal untuk Mahasiswa

?>