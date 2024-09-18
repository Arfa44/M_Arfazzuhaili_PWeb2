<?php
//Inheritance: Kelas dapat mewarisi properti dan metode dari kelas lain.
class Produk {
    protected $nama;
    // Metode atau Function
    public function __construct($nama) {
        $this->nama = $nama;
    }
    public function getNama() {
        return $this->nama;
    }
}
class Buku extends Produk {
    private $penulis;
    // Metode atau Function
    public function __construct($nama, $penulis) {
        parent::__construct($nama);
        $this->penulis = $penulis;
    }
    public function getPenulis() {
        return $this->penulis;
    }
}
$buku1 = new Buku("Pemrograman PHP", "Andi Prasetyo");
echo $buku1->getNama(); // Output: Pemrograman PHP

//Polymorphism: Metode yang sama dapat memiliki implementasi berbeda dalam class yang berbeda.
//Abstraction: Menyembunyikan detail implementasi dan hanya menampilkan fungsi penting.
?>