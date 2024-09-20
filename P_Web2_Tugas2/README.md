
# Pemrograman Web 2 Tugas 2
## Cara Menjalankan....
1. Import Database yang sudah ada, dengan nama database "university"
2. Simpan kode di atas dalam file dengan ekstensi .php, misalnya tugas2.php.
3. Hidupkan server lokal dulu, bisa menggunakan Xampp,Laragon atau sejenisnya.
4. Buka terminal/command prompt atau  ke web localhost .
5. Arahkan ke direktori tempat file disimpan.
6. Jalankan perintah: php tugas2.php.

## Penjelasan Kode
1. Disini kita mempunyai 1 program utuh yang isinya
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

2. Setiap class mempunyai fungsi masing-masing
- class Database
-- Untuk mengatur koneksi ke Database
- class SuratTugas
  digunakan untuk mengelola data dari tabel `surat_tugas`
- class SuratTugasKereta
  turunan dari SuratTugas, menampilkan hanya data dengan transportasi 'Kereta'
- class SuratTugasPesawat (mewarisi data dari class SuratTugas)
- class SuratTugasPernikahan (mewarisi data dari class SuratTugas)
- class PermohonanIzin
- class PermohonanIzinI (mewarisi data dari class PermohonanIzin)
- class PermohonanIzinII (mewarisi data dari class PermohonanIzin)
- class PermohonanIzinIII (mewarisi data dari class PermohonanIzin)
- class PermohonanIzinIV (mewarisi data dari class PermohonanIzin)
- class Dosen
