-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2024 pada 17.45
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `dosen_id` int(11) NOT NULL,
  `nidn` varchar(20) NOT NULL,
  `nip_dsn` varchar(20) NOT NULL,
  `nama_dsn` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`dosen_id`, `nidn`, `nip_dsn`, `nama_dsn`, `alamat`, `user_id`) VALUES
(1001, '2001', '3001', 'Anos Von Ataraxia', 'Delsgade', 40001),
(1002, '2002', '3002', 'Albert Von Silford', 'Ingracia', 40002),
(1003, '2003', '3003', 'Ray Arcadia', 'Human Realm', 40003),
(1004, '2004', '3004', 'Noah Osmont', 'Infinite Reality', 40004),
(1005, '2005', '3005', 'ZhongLi', 'Liyue', 40005),
(1006, '2006', '3006', 'Raiden Shogun', 'Inazuma', 40006),
(1007, '2007', '3007', 'Nahida', 'Sumeru', 40007),
(1008, '2008', '3008', 'Furina', 'Fontaine', 40008),
(1009, '2009', '3009', 'Kaedehara Kazuha', 'Inazuma', 40009),
(1010, '2010', '3010', 'Yae Miko', 'Inazuma', 40010),
(1011, '2011', '3011', 'Hutao', 'Liyue', 40011),
(1012, '2012', '3012', 'Nauvillate', 'Fontaine', 40012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `permohonan_izin`
--

CREATE TABLE `permohonan_izin` (
  `izin_id` int(11) NOT NULL,
  `nama_dsn` varchar(255) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `pangkat_jabatan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `dosen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `permohonan_izin`
--

INSERT INTO `permohonan_izin` (`izin_id`, `nama_dsn`, `nip`, `pangkat_jabatan`, `jabatan`, `unit_kerja`, `dosen_id`) VALUES
(8001, 'Kaedehara Kazuha', '3009', 'I', 'Dosen Junior', 'Kelompok', 1009),
(8002, 'Noah Osmont', '3004', 'I', 'Dosen Junior', 'Kelompok', 1004),
(8003, 'Albert Von Silford', '3002', 'II', 'Dosen Senior', 'Mandiri', 1002),
(8004, 'ZhongLi', '3005', 'III', 'Dosen Master', 'Ketua Tim Peneliti', 1005),
(8005, 'Ray Arcadia', '3003', 'IV', 'Ketua Tertinggi', 'Penanggung Jawab Tim Peneliti', 1003),
(8006, 'Hutao', '3011', 'III', 'Dosen Master', 'Ketua Tim Peneliti', 1011),
(8007, 'Raiden Shogun', '3006', 'IV', 'Wakil Ketua Tertinggi', 'Wakil Penanggung Jawab Tim Peneliti', 1006),
(8008, 'Anos Von Ataraxia', '3001', 'III', 'Dosen Master', 'Ketua Tim Peneliti', 1001),
(8009, 'Nahida', '3007', 'II', 'Dosen Senior', 'Mandiri', 1007),
(8010, 'Furina', '3008', 'I', 'Dosen Junior', 'Kelompok', 1008),
(8011, 'Nauvillate', '3012', 'III', 'Dosen Master', 'Ketua Tim Peneliti', 1012),
(8012, 'Yae Miko', '3010', 'II', 'Dosen Senior', 'Mandiri', 1010);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_tugas`
--

CREATE TABLE `surat_tugas` (
  `surat_tugas_id` int(11) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `nama_dsn` varchar(255) NOT NULL,
  `tgl_surat_tugas` date NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `transportasi` varchar(50) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `dosen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_tugas`
--

INSERT INTO `surat_tugas` (`surat_tugas_id`, `nomor`, `nama_dsn`, `tgl_surat_tugas`, `tujuan`, `transportasi`, `keperluan`, `dosen_id`) VALUES
(6001, '7001', 'Furina', '2025-09-12', 'Inazuma', 'Pesawat', 'Pernikahan', 1008),
(6002, '7002', 'Nauvillate', '2025-09-12', 'Inazuma', 'Pesawat', 'Pernikahan', 1012),
(6003, '7003', 'Nahida', '2025-12-25', 'Fontaine', 'Kereta', 'Liburan', 1007),
(6004, '7004', 'Raiden Shogun', '2025-12-30', 'Fontaine', 'Pesawat', 'Liburan', 1006),
(6005, '7005', 'Anos Von Ataraxia', '2026-01-01', 'Fontaine', 'Kereta', 'Pernikahan', 1001),
(6006, '7006', 'Yae Miko', '2026-01-03', 'Liyue', 'Kereta', 'Menjenguk Saudara Sakit', 1010),
(6007, '7007', 'Raiden Shogun', '2026-01-13', 'Liyue', 'Kereta', 'Rapat', 1006),
(6009, '7009', 'Ray Arcadia', '2026-01-17', 'Inazuma', 'Pesawat', 'Rapat', 1003),
(6010, '7010', 'Furina', '2026-02-02', 'Sumeru', 'Kereta', 'Lembur', 1008),
(6011, '7011', 'Hutao', '2026-02-10', 'Inazuma', 'Pesawat', 'Rapat', 1011);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`dosen_id`);

--
-- Indeks untuk tabel `permohonan_izin`
--
ALTER TABLE `permohonan_izin`
  ADD PRIMARY KEY (`izin_id`),
  ADD KEY `dosen_id` (`dosen_id`);

--
-- Indeks untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD PRIMARY KEY (`surat_tugas_id`),
  ADD KEY `dosen_id` (`dosen_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `dosen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1014;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `permohonan_izin`
--
ALTER TABLE `permohonan_izin`
  ADD CONSTRAINT `permohonan_izin_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`dosen_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `surat_tugas`
--
ALTER TABLE `surat_tugas`
  ADD CONSTRAINT `surat_tugas_ibfk_1` FOREIGN KEY (`dosen_id`) REFERENCES `dosen` (`dosen_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
