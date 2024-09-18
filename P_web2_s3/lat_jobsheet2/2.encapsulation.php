<?php
//Encapsulation = Menyembunyikan detail implementasi dan hanya memberikan akses melalui metode tertentu.
class Buku {
    private $judul;
    private $penulis;
// Metode atau Function
    public function __construct($judul, $penulis) {
        $this->judul = $judul;
        $this->penulis = $penulis;
}
// Metode atau Function
    public function getJudul() {
        return $this->judul;
}
    public function setJudul($judul) {
        $this->judul = $judul;
}
}
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getJudul(); // Output: Pemrograman PHP
?>