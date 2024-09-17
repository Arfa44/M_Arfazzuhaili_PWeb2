<?php
// Definisi Kelas
//1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
    class Dosen {

// Atribut atau Properties
    public $nama;
    public $nip;
    public $mataKuliah;

// Constructor
    public function __construct($nama, $nip, $mataKuliah) {
    $this->nama = $nama;
    $this->nip = $nip;
    $this->mataKuliah = $mataKuliah;
}

//2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
// Metode atau Function tampilkan data dosen
    public function tampilkanDosen() {
    return "Nama Dosen ini adalah $this->nama dengan NIP $this->nip yang mengampu mata kuliah  $this->mataKuliah.";
}
}

//3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk menampilkan informasi tersebut.
// Instansiasi Objek
$dosen1 = new Dosen("Ray Arcadia", "999", "Basic Designer");
echo $dosen1->tampilkanDosen();

?>