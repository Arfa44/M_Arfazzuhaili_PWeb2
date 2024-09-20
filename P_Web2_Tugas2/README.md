
# Pemrograman Web 2 Tugas 2

## Cara Menjalankan....
1. Import Database yang sudah ada, dengan nama database "university" .
2. Simpan kode di atas dalam file dengan ekstensi .php, misalnya tugas2.php.
3. Hidupkan server lokal dulu, bisa menggunakan Xampp,Laragon atau sejenisnya.
4. Buka terminal/command prompt atau  ke web localhost .
5. Arahkan ke direktori tempat file disimpan.
6. Jalankan perintah: php tugas2.php.

## Penjelasan Kode
### 1. Tugas
1. Pada kode program php ini, kita  menggunakan database MySQL serta menggunakan bahasa pemrograman PHP & HTML
2. Menggunakan __construct untuk menghubungkan ke Database.
3. Menggunakan Encapsulation untuk setiap properties pada setiap class.
4. Menggunakan Inheritance, untuk membuat class Turunan.
5. Menggunakan minimal 2 Polymorphism untuk case study.


### 2. Disini kita mempunyai 1 program utuh yang isinya
- class Database 
- class SuratTugas
- class SuratTugasKereta (mewarisi data dari class SuratTugas)
- class SuratTugasPesawat (mewarisi data dari class SuratTugas)
- class SuratTugasPernikahan (mewarisi data dari class SuratTugas)
- class PermohonanIzin
- class PermohonanIzinI (mewarisi data dari class PermohonanIzin)
- class PermohonanIzinII (mewarisi data dari class PermohonanIzin)
- class PermohonanIzinIII (mewarisi data dari class PermohonanIzin)
- class PermohonanIzinIV (mewarisi data dari class PermohonanIzin)
- class Dosen

### 3. Setiap class mempunyai fungsi masing-masing
- class Database -- untuk mengatur koneksi ke Database.
- class SuratTugas -- digunakan untuk mengelola data dari tabel `surat_tugas` .
- class SuratTugasKereta -- Override fungsi untuk menampilkan data, hanya jika transportasi adalah 'Kereta' 
- class SuratTugasPesawat -- Override fungsi untuk menampilkan data, hanya jika transportasi adalah 'Pesawat' 
- class SuratTugasPernikahan -- Override fungsi untuk menampilkan data, hanya jika keperluan adalah 'Pernikahan' 
- class PermohonanIzin -- digunakan untuk mengelola data dari tabel `permohonan_izin` 
- class PermohonanIzinI -- Override fungsi untuk menampilkan data, hanya jika pangkat_jabatan adalah 'I'
- class PermohonanIzinII -- Override fungsi untuk menampilkan data, hanya jika pangkat_jabatan adalah 'II'
- class PermohonanIzinIII -- Override fungsi untuk menampilkan data, hanya jika pangkat_jabatan adalah 'III'
- class PermohonanIzinIV -- Override fungsi untuk menampilkan data, hanya jika pangkat_jabatan adalah 'IV'
- class Dosen -- digunakan untuk mengelola data dari tabel `dosen`. 
- fungsi navigation bar untuk berpindah ke tabel lain. 
- polymorphism untuk menampilkan data pada class "SuratTugasKereta, SuratTugasPesawat, SuratTugasPernikahan, PermohonanIzinI, PermohonanIzinII, PermohonanIzinIII, PermohonanIzinIV"



### Database
1. Nama Database : university
2. Tabel yang dimiliki :
- surat_tugas = 'surat_tugas_id (primary key), nomor, nama_dsn, tgl_surat_tugas, tujuan, transportasi, keperluan, dosen_id(foreign key)
- permohonan_izin = 'izin_id (primary key), nama_dsn, nip, pangkat_jabatan, jabatan, unit_kerja, dosen_id (foreign key)'
- dosen = 'dosen_id (primary key), nidn, nip_dsn, nama_dsn, alamat, user_id'

  
### Untuk penjelasan yang lebih rinci, sudah  saya tambahkan komentar di kode tersebut
