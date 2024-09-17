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
Kelas abstrak Jurnal memiliki metode abstrak manageSubmission(), yang diimplementasikan di kelas JurnalDosen dan JurnalMahasiswa dengan cara masing-masing.
Kelas Course:
Kelas abstrak ini memiliki metode abstrak getCourseDetails(), yang diimplementasikan oleh kelas OnlineCourse dan OfflineCourse untuk memberikan detail yang sesuai.