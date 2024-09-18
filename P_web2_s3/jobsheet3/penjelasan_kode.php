Penjelasan Kode

penjelasan file jobsheet3.php
1. Kelas Person
Tujuan: Sebagai kelas induk dari Dosen dan Mahasiswa.
Atribut:
protected $name: Atribut ini dapat diakses oleh kelas anak (subclass), tetapi tidak dapat diakses langsung dari luar kelas.
Metode:
getName(): Mengembalikan nama.
setName($name): Mengatur nilai nama.
getRole(): Mengembalikan string "Person". Metode ini akan dioverride di kelas turunan.
2. Kelas Mahasiswa
Tujuan: Mewarisi dari Person dan merepresentasikan mahasiswa.
Atribut:
private $nim: Atribut ini hanya dapat diakses melalui metode getter dan setter.
Metode:
getNim(): Mengembalikan nilai NIM.
setNim($nim): Mengatur nilai NIM.
getName(): Override dari metode getName() di kelas induk untuk menambahkan awalan "Mahasiswa: ".
getRole(): Override untuk mengembalikan "Mahasiswa".
3. Kelas Dosen
Tujuan: Mewarisi dari Person dan merepresentasikan dosen.
Atribut:
private $nidn: Atribut ini juga hanya dapat diakses melalui metode getter dan setter.
Metode:
getNidn(): Mengembalikan nilai NIDN.
setNidn($nidn): Mengatur nilai NIDN.
getName(): Override untuk menambahkan awalan "Dosen: ".
getRole(): Override untuk mengembalikan "Dosen".
4. Kelas Abstrak Jurnal
Tujuan: Menyediakan kerangka untuk kelas-kelas yang mengelola pengajuan jurnal.
Metode:
pengajuanJurnal(): Metode abstrak yang harus diimplementasikan di kelas turunan.
5. Kelas JurnalDosen
Tujuan: Mengimplementasikan kelas Jurnal untuk dosen.
Metode:
pengajuanJurnal(): Mengembalikan string yang menjelaskan proses pengajuan jurnal untuk dosen.
6. Kelas JurnalMahasiswa
Tujuan: Mengimplementasikan kelas Jurnal untuk mahasiswa.
Metode:
pengajuanJurnal(): Mengembalikan string yang menjelaskan proses pengajuan jurnal untuk mahasiswa.
7. Kelas Abstrak Course
Tujuan: Menyediakan kerangka untuk kelas-kelas yang mengelola kursus.
Metode:
getCourseDetails(): Metode abstrak yang harus diimplementasikan di kelas turunan.
8. Kelas OnlineCourse
Tujuan: Mengimplementasikan kelas Course untuk kursus online.
Metode:
getCourseDetails(): Mengembalikan detail tentang kursus online.
9. Kelas OfflineCourse
Tujuan: Mengimplementasikan kelas Course untuk kursus offline.
Metode:
getCourseDetails(): Mengembalikan detail tentang kursus offline.


penjelasan kode file tgs_kasus.php
1. Kelas Abstrak Jurnal:
Kelas ini memiliki metode abstrak ajukanJurnal(), yang harus diimplementasikan oleh kelas turunan.
2. Kelas Person:
Kelas dasar ini memiliki atribut name dan konstruktor untuk menginisialisasi nama.
3. Kelas Dosen:
Mewarisi dari Person.
Memiliki atribut privat nidn dan metode getNidn() untuk mendapatkan nilai NIDN.
Mengimplementasikan metode ajukanJurnal() untuk memberikan cara pengajuan jurnal khusus untuk dosen.
4. Kelas Mahasiswa:
Juga mewarisi dari Person.
Memiliki atribut privat nim dan metode getNim() untuk mendapatkan nilai NIM.
Mengimplementasikan metode ajukanJurnal() untuk memberikan cara pengajuan jurnal khusus untuk mahasiswa