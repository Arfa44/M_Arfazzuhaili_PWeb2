# M_Arfazzuhaili_PWeb2
Tugas Pemrograman Web 2


##penjelasan jobsheet 1
Penjelasan Kode
1. Class Mahasiswa:
Atribut: Memiliki nama, nim, dan jurusan, yang bersifat private untuk menjaga encapsulation.
Constructor: Menginisialisasi atribut saat objek dibuat.
Metode updateJurusan(): Mengubah jurusan mahasiswa.
Setter setNim(): Memvalidasi dan mengatur nilai NIM.
Getter getNim(): Mengambil nilai NIM.
Metode tampilkanData(): Menampilkan informasi mahasiswa.
2. Class Dosen:
Atribut: Memiliki nama, nip, dan mataKuliah, yang juga bersifat private.
Constructor: Menginisialisasi atribut saat objek dibuat.
Metode tampilkanDosen(): Menampilkan informasi dosen.



##Penjelasan jobsheet 2
Penjelasan Kode :
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

##Penjelasan jobsheet 3
Penjelasan Kode
1. Inheritance:
Kelas Person adalah induk dari Dosen dan Mahasiswa. yang memiliki atribut name dan metode getName().
Kelas Mahasiswa dan Dosen mewarisi dari Person, sehingga keduanya dapat menggunakan metode getName() dan setName().
2. Polymorphism:
Metode getRole() didefinisikan dalam kelas Person dan dioverride di kelas Mahasiswa dan Dosen untuk menampilkan peran yang berbeda.
3. Encapsulation:
Encapsulation untuk melindungi atribut nidn di kelas Dosen dan nim dikelas Mahasiswa.
Atribut nim di kelas Mahasiswa dan nidn di kelas Dosen dilindungi dengan modifier akses private.
Getter dan setter disediakan untuk mengakses dan mengubah nilai atribut ini.
4. Abstraction:
kelas abstrak Jurnal dan implementasikan konsep Abstraction dengan membuat kelas turunan JurnalDosen dan JurnalMahasiswa yang masing-masing memiliki cara tersendiri untuk mengelola pengajuan jurnal.
Kelas abstrak Jurnal memiliki metode abstrak pengajuanJurnal(), yang diimplementasikan di kelas JurnalDosen dan JurnalMahasiswa dengan cara masing-masing.
Kelas Course:
Kelas abstrak ini memiliki metode abstrak getCourseDetails(), yang diimplementasikan oleh kelas OnlineCourse dan OfflineCourse untuk memberikan detail yang sesuai.



Cara Menjalankan:
1. Simpan kode di atas dalam file dengan ekstensi .php, misalnya jobsheet1.php.
2. Hidupkan server lokal dulu, bisa menggunakan Xampp,Laragon atau sejenisnya.
3. Buka terminal atau command prompt.
4. Arahkan ke direktori tempat file disimpan.
5. Jalankan perintah: php jobsheet1.php.
