<?php
class Database { // Class Database untuk mengatur koneksi ke database
    private $host = "localhost"; // Alamat server database
    private $username = "root";// Username database
    private $password = ""; // Password database
    private $database = "university"; // Nama database
    public $connection; // Properti yang menyimpan koneksi ke database, public karena perlu diakses dari luar kelas

    // Constructor untuk inisialisasi dan melakukan koneksi ke database
    function __construct() {
        // Membuat koneksi menggunakan mysqli
        $this->connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->connection) {
            // Mengecek apakah koneksi berhasil
            die("Koneksi database MySQL dan PHP Gagal: " . mysqli_connect_error());
        }
    }
}

// Class SuratTugas, kelas ini digunakan untuk mengelola data dari tabel `surat_tugas`
class SuratTugas {
    protected $data; // Menyimpan data dari hasil query database
    //protected memungkinkan properti atau method diakses dari dalam kelas dan kelas turunannya, tetapi tidak dapat diakses dari luar kelas.

    // Constructor untuk menginisialisasi data surat tugas
    public function __construct($data) { //public karena perlu diakses dari luar kelas
        $this->data = $data;
    }

    // Fungsi untuk menampilkan satu baris data dalam bentuk HTML tabel
    public function renderTableRow($no) { //public karena perlu diakses dari luar kelas
        return "
            <tr>
                <td>{$no}</td> 
                <td>{$this->data['surat_tugas_id']}</td> 
                <td>{$this->data['nomor']}</td>
                <td>{$this->data['nama_dsn']}</td>
                <td>{$this->data['tgl_surat_tugas']}</td>
                <td>{$this->data['tujuan']}</td>
                <td>{$this->data['transportasi']}</td>
                <td>{$this->data['keperluan']}</td>
                <td>{$this->data['dosen_id']}</td>
            </tr>";
    }
}

//Class SuratTugasKereta, turunan dari SuratTugas, menampilkan hanya data dengan transportasi 'Kereta'
class SuratTugasKereta extends SuratTugas { //Mewarisi data dari class SuratTugas
    // Override fungsi untuk menampilkan data, hanya jika transportasi adalah 'Kereta'
    public function renderTableRow($no) {
        if ($this->data['transportasi'] == 'Kereta') {
            return parent::renderTableRow($no); // Panggil method parent jika kondisinya benar
        }
        return ""; // Jika tidak sesuai, tidak ada baris yang ditampilkan
    }
}

//Class SuratTugasPesawat, turunan dari SuratTugas, menampilkan hanya data dengan transportasi 'Pesawat'
class SuratTugasPesawat extends SuratTugas { //Mewarisi data dari class SuratTugas
    // Override fungsi untuk menampilkan data, hanya jika transportasi adalah 'Pesawat'
    public function renderTableRow($no) {
        if ($this->data['transportasi'] == 'Pesawat') { 
            return parent::renderTableRow($no); // Panggil method parent jika kondisinya benar
        }
        return ""; // Jika tidak sesuai, tidak ada baris yang ditampilkan
    }
}

//Class SuratTugasPernikahan, turunan dari SuratTugas, menampilkan hanya data dengan keperluan 'Pernikahan'
class SuratTugasPernikahan extends SuratTugas { //Mewarisi data dari class SuratTugas
    // Override fungsi untuk menampilkan data, hanya jika keperluan adalah 'Pernikahan'
    public function renderTableRow($no) {
        if ($this->data['keperluan'] == 'Pernikahan') {
            return parent::renderTableRow($no); // Panggil method parent jika kondisinya benar
        }
        return ""; // Jika tidak sesuai, tidak ada baris yang ditampilkan
    }
}

// Class PermohonanIzin, kelas ini digunakan untuk mengelola data dari tabel `permohonan_izin`
class PermohonanIzin {
    protected $data; // Menyimpan data dari hasil query database
    //protected memungkinkan properti atau method diakses dari dalam kelas dan kelas turunannya, tetapi tidak dapat diakses dari luar kelas.

    // Constructor untuk menginisialisasi data permohonan izin
    public function __construct($data) { //public karena perlu diakses dari luar kelas
        $this->data = $data;
    }

    // Fungsi untuk menampilkan satu baris data dalam bentuk HTML tabel
    public function renderTableRow($no) { //public karena perlu diakses dari luar kelas
        return "
            <tr>
                <td>{$no}</td>
                <td>{$this->data['izin_id']}</td>
                <td>{$this->data['nama_dsn']}</td>
                <td>{$this->data['nip']}</td>
                <td>{$this->data['pangkat_jabatan']}</td>
                <td>{$this->data['jabatan']}</td>
                <td>{$this->data['unit_kerja']}</td>
                <td>{$this->data['dosen_id']}</td>
            </tr>";
    }
}

//Class PermohonanIzinI, turunan dari PermohonanIzin, menampilkan hanya data dengan pangkat jabatan 'I'
class PermohonanIzinI extends PermohonanIzin { //Mewarisi data dari class PermohonanIzin
    // Override fungsi untuk menampilkan data, hanya jika pangkat_jabatan adalah 'I'
    public function renderTableRow($no) {
        if ($this->data['pangkat_jabatan'] == 'I') {
            return parent::renderTableRow($no); // Panggil method parent jika kondisinya benar
        }
        return ""; // Jika tidak sesuai, tidak ada baris yang ditampilkan
    }
}

//Class PermohonanIzinII, turunan dari PermohonanIzin, menampilkan hanya data dengan pangkat jabatan 'II'
class PermohonanIzinII extends PermohonanIzin { //Mewarisi data dari class PermohonanIzin
    // Override fungsi untuk menampilkan data, hanya jika pangkat_jabatan adalah 'II'
    public function renderTableRow($no) {
        if ($this->data['pangkat_jabatan'] == 'II') { 
            return parent::renderTableRow($no); // Panggil method parent jika kondisinya benar
        }
        return ""; // Jika tidak sesuai, tidak ada baris yang ditampilkan
    }
}

//Class PermohonanIzinIII, turunan dari PermohonanIzin, menampilkan hanya data dengan pangkat jabatan 'III'
class PermohonanIzinIII extends PermohonanIzin { //Mewarisi data dari class PermohonanIzin
    // Override fungsi untuk menampilkan data, hanya jika pangkat_jabatan adalah 'III'
    public function renderTableRow($no) {
        if ($this->data['pangkat_jabatan'] == 'III') {
            return parent::renderTableRow($no); // Panggil method parent jika kondisinya benar
        }
        return ""; // Jika tidak sesuai, tidak ada baris yang ditampilkan
    }
}

//Class PermohonanIzinIV, turunan dari PermohonanIzin, menampilkan hanya data dengan pangkat jabatan 'IV'
class PermohonanIzinIV extends PermohonanIzin { //Mewarisi data dari class PermohonanIzin
    // Override fungsi untuk menampilkan data, hanya jika pangkat_jabatan adalah 'IV'
    public function renderTableRow($no) {
        if ($this->data['pangkat_jabatan'] == 'IV') {
            return parent::renderTableRow($no); // Panggil method parent jika kondisinya benar
        }
        return ""; // Jika tidak sesuai, tidak ada baris yang ditampilkan
    }
}

// Class Dosen, kelas ini digunakan untuk mengelola data dari tabel `dosen`
class Dosen {
    private $data; // Menyimpan data dari hasil query database
    //private hanya bisa diakses didalam class

    // Constructor untuk menginisialisasi data Dosen
    public function __construct($data) { //public karena perlu diakses dari luar kelas
        $this->data = $data;
    }
    // Fungsi untuk menampilkan satu baris data dalam bentuk HTML tabel
    public function renderTableRow($no) { //public karena perlu diakses dari luar kelas
        return "
            <tr>
                <td>{$no}</td>
                <td>{$this->data['dosen_id']}</td>
                <td>{$this->data['nidn']}</td>
                <td>{$this->data['nip_dsn']}</td>
                <td>{$this->data['nama_dsn']}</td>
                <td>{$this->data['alamat']}</td>
                <td>{$this->data['user_id']}</td>

            </tr>";
    }
}

// Membuat objek koneksi ke database
$db = new Database();
$connection = $db->connection; // Mengambil properti koneksi dari objek Database

// Memeriksa apakah tabel yang akan ditampilkan ada pada query string
$tableToShow = isset($_GET['table']) ? $_GET['table'] : 'surat_tugas'; // Default ke surat_tugas jika tidak ada
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Surat Tugas dan Permohonan Izin</title>
    <style>
        /* Style untuk tabel */
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
            text-align: left;
        }
        table {
            width: 100%;
            margin-bottom: 20px;
        }
        th {
            background-color: #f2f2f2;
        }

        /* Style untuk navigasi */
        nav {
            margin-bottom: 20px;
        }
        nav a {
            margin-right: 15px;
            text-decoration: none;
            color: blue;
        }
    </style>
</head>
<body>

<!-- Bagian navigasi untuk memilih tabel mana yang akan ditampilkan -->
<nav>
    <a href="?table=surat_tugas">SuratTugas</a>
    <a href="?table=permohonan_izin">PermohonanIzin</a>
    <a href="?table=dosen">DaftarDosen</a>
    <a href="?table=surat_tugas_kereta">SuratTugasTransportasiKereta</a>
    <a href="?table=surat_tugas_pesawat">SuratTugasTransportasiPesawat</a>
    <a href="?table=surat_tugas_pernikahan">SuratTugasKeperluanPernikahan</a>
    <a href="?table=permohonan_izin_I">PermohonanIzinPangkat_I</a>
    <a href="?table=permohonan_izin_II">PermohonanIzinPangkat_II</a>
    <a href="?table=permohonan_izin_III">PermohonanIzinPangkat_III</a>
    <a href="?table=permohonan_izin_IV">PermohonanIzinPangkat_IV</a>
</nav>


<!-- Memeriksa tabel mana yang akan ditampilkan -->
<?php if ($tableToShow === 'surat_tugas'): ?>
    <h2>Surat Tugas</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Surat Tugas</th>
            <th>Nomor</th>
            <th>Nama Dosen</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Transportasi</th>
            <th>Keperluan</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data dari tabel surat_tugas dan menampilkan barisnya
        $query = mysqli_query($connection, "SELECT * FROM surat_tugas");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $suratTugas = new SuratTugas($row);
            echo $suratTugas->renderTableRow($no++);
        }
        ?>
    </table>

<?php elseif ($tableToShow === 'permohonan_izin'): ?>
    <h2>Permohonan Izin</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Izin</th>
            <th>Nama Dosen</th>
            <th>NIP</th>
            <th>Pangkat Jabatan</th>
            <th>Jabatan</th>
            <th>Unit Kerja</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data dari tabel permohonan_izin dan menampilkan barisnya
        $query = mysqli_query($connection, "SELECT * FROM permohonan_izin");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $permohonanIzin = new PermohonanIzin($row);
            echo $permohonanIzin->renderTableRow($no++);
        }
        ?>
    </table>

<?php elseif ($tableToShow === 'dosen'): ?>
    <h2>Daftar Dosen</h2> 
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Dosen</th>
            <th>NIDN</th>
            <th>NIP Dosen</th>
            <th>Nama Dosen</th>
            <th>Alamat</th>
            <th>USER ID</th>

        </tr>
        <?php
        // Mengambil data dari tabel dosen dan menampilkan barisnya
        $query = mysqli_query($connection, "SELECT * FROM dosen");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $dosen = new Dosen($row);
            echo $dosen->renderTableRow($no++);
        }
        ?>
    </table>

<?php elseif ($tableToShow === 'surat_tugas_kereta'): ?>
    <h2>Surat Tugas Transportasi Kereta</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Surat Tugas</th>
            <th>Nomor</th>
            <th>Nama Dosen</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Transportasi</th>
            <th>Keperluan</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data surat_tugas dengan filter transportasi 'Kereta'
        $query = mysqli_query($connection, "SELECT * FROM surat_tugas");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $suratTugasKereta = new SuratTugasKereta($row);
            echo $suratTugasKereta->renderTableRow($no++);
        }
        ?>
    </table>

<?php elseif ($tableToShow === 'surat_tugas_pesawat'): ?>
    <h2>Surat Tugas Transportasi Pesawat</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Surat Tugas</th>
            <th>Nomor</th>
            <th>Nama Dosen</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Transportasi</th>
            <th>Keperluan</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data surat_tugas dengan filter transportasi 'Pesawat'
        $query = mysqli_query($connection, "SELECT * FROM surat_tugas");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $suratTugasPesawat = new SuratTugasPesawat($row);
            echo $suratTugasPesawat->renderTableRow($no++);
        }
        ?>
    </table>

<?php elseif ($tableToShow === 'surat_tugas_pernikahan'): ?>
    <h2>Surat Tugas Keperluan Pernikahan</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Surat Tugas</th>
            <th>Nomor</th>
            <th>Nama Dosen</th>
            <th>Tanggal</th>
            <th>Tujuan</th>
            <th>Transportasi</th>
            <th>Keperluan</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data surat_tugas dengan filter keperluan 'Pernikahan'
        $query = mysqli_query($connection, "SELECT * FROM surat_tugas");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $suratTugasPernikahan = new SuratTugasPernikahan($row);
            echo $suratTugasPernikahan->renderTableRow($no++);
        }
        ?>
    </table> 

<?php elseif ($tableToShow === 'permohonan_izin_I'): ?>
    <h2>Permohonan Izin Pangkat Jabatan I</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Izin</th>
            <th>Nama Dosen</th>
            <th>NIP</th>
            <th>Pangkat Jabatan</th>
            <th>Jabatan</th>
            <th>Unit Kerja</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data permohonan_izin dengan filter pangkat_jabatan 'I'
        $query = mysqli_query($connection, "SELECT * FROM permohonan_izin");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $permohonanIzinI = new PermohonanIzinI($row);
            echo $permohonanIzinI->renderTableRow($no++);
        }
        ?>
    </table>

<?php elseif ($tableToShow === 'permohonan_izin_II'): ?>
    <h2>Permohonan Izin Pangkat Jabatan II</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Izin</th>
            <th>Nama Dosen</th>
            <th>NIP</th>
            <th>Pangkat Jabatan</th>
            <th>Jabatan</th>
            <th>Unit Kerja</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data permohonan_izin dengan filter pangkat_jabatan 'II'
        $query = mysqli_query($connection, "SELECT * FROM permohonan_izin");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $permohonanIzinII = new PermohonanIzinII($row);
            echo $permohonanIzinII->renderTableRow($no++);
        }
        ?>
    </table>

<?php elseif ($tableToShow === 'permohonan_izin_III'): ?>
    <h2>Permohonan Izin Pangkat Jabatan III</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Izin</th>
            <th>Nama Dosen</th>
            <th>NIP</th>
            <th>Pangkat Jabatan</th>
            <th>Jabatan</th>
            <th>Unit Kerja</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data permohonan_izin dengan filter pangkat_jabatan 'III'
        $query = mysqli_query($connection, "SELECT * FROM permohonan_izin");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $permohonanIzinIII = new PermohonanIzinIII($row);
            echo $permohonanIzinIII->renderTableRow($no++);
        }
        ?>
    </table>
<?php elseif ($tableToShow === 'permohonan_izin_IV'): ?>
    <h2>Permohonan Izin Pangkat Jabatan IV</h2>
    <table>
        <tr>
            <th>Nomor</th>
            <th>ID Izin</th>
            <th>Nama Dosen</th>
            <th>NIP</th>
            <th>Pangkat Jabatan</th>
            <th>Jabatan</th>
            <th>Unit Kerja</th>
            <th>ID Dosen</th>
        </tr>
        <?php
        // Mengambil data permohonan_izin dengan filter pangkat_jabatan 'IV'
        $query = mysqli_query($connection, "SELECT * FROM permohonan_izin");
        $no = 1;
        while ($row = mysqli_fetch_array($query)) {
            $permohonanIzinIV = new PermohonanIzinIV($row);
            echo $permohonanIzinIV->renderTableRow($no++);
        }
        ?>
    </table>
<?php endif; ?>

</body>
</html>