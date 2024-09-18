<?php

//1. Kelas dan Objek dalam PHP
// Definisi Kelas
    class Mobil {
// Atribut atau Properties
    public $merk;
    public $warna;
// Constructor
    public function __construct($merk, $warna) {
    $this->merk = $merk;
    $this->warna = $warna;
}
// Metode atau Function
    public function deskripsi() {
        return "Mobil ini adalah $this->merk berwarna $this->warna.";
    }
}
// Instansiasi Objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi()."<br>";
$mobil2 = new Mobil("Ferrari", "Red Devil");
echo $mobil2->deskripsi();
?>
<br>


<?php
//2. Atribut dan Metode
// Menambah Atribut dan Metode
class Buku {
    public $judul;
    public $penulis;
    public function __construct($judul, $penulis) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    }
    public function tampilkanInfo() {
        return "Buku: $this->judul, ditulis oleh $this->penulis.";
    }
}
$buku1 = new Buku("Pemrograman PHP", "John Doe");
echo $buku1->tampilkanInfo()."<br>";
$buku2 = new Buku("Journey of Arcadia", "Dex");
echo $buku2->tampilkanInfo();
?>
