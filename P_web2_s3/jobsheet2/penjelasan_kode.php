<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Penjelasan Kode :</h1>
1. Class Mahasiswa:
Memiliki atribut nama, nim, dan jurusan yang bersifat private.
Menggunakan metode setData() untuk mengatur nilai.
Menyediakan metode getter untuk mengakses nilai dan tampilkanData() untuk menampilkan informasi mahasiswa.

2. Class Pengguna dan Dosen:
Pengguna memiliki atribut nama dan metode untuk mengatur serta mendapatkan nilai nama.
Dosen mewarisi dari Pengguna dan menambahkan atribut mataKuliah.

3. Polymorphism:
Pengguna_P adalah kelas dasar dengan metode aksesFitur().
Mahasiswa_P dan Dosen_P mewarisi dari class Pengguna_P
Mahasiswa_P dan Dosen_P mengoverride metode aksesFitur() dengan implementasi masing-masing.

4. Abstraction:
Kelas abstrak Pengguna_Abs didefinisikan dengan metode abstrak aksesFitur().
Mahasiswa_Abs dan Dosen_Abs mewarisi dari class Pengguna_Abs
Mahasiswa_Abs dan Dosen_Abs mengimplementasikan metode tersebut.
</body>
</html>