-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2023 pada 14.37
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_rumahsakit4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `no_id` int(10) NOT NULL,
  `no_rekam_medis` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `penjamin` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `alamat` varchar(190) NOT NULL,
  `poli` varchar(20) NOT NULL,
  `dpjp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`no_id`, `no_rekam_medis`, `nama`, `penjamin`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `poli`, `dpjp`) VALUES
(1, 'RSHM0001', 'ALFIAN KHOIRUL SOLEH', 'UMUM', '2001-03-10', 'LAKI-LAKI', 'KENJERAN UTARA', 'MATA', 'DOKTER MATA'),
(2, 'RSHM00002', 'IMANUEL MARTIN J. HARAHAP', 'UMUM', '2011-02-11', 'LAKI-LAKI', 'KP. BERLIN', 'MATA', 'DOKTER MATA'),
(3, 'RSHM0003', 'ARDI ', 'UMUM', '2003-10-22', 'PEREMPUAN', 'KP. CERIA', 'JANTUNG', 'DOKTER JANTUNG'),
(4, 'RSHM0004', 'AKHMAD YASID', 'UMUM', '1889-03-12', 'LAKI-LAKI', 'KEC. GEGER', 'PARU', 'DOKTER PARU');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`no_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `no_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
