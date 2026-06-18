-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2026 at 06:56 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simulasi_pbo_ti1d_muntiakinantiputri`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pendaftaran`
--

CREATE TABLE `tabel_pendaftaran` (
  `id_pendaftaran` int NOT NULL,
  `nama_calon` varchar(100) NOT NULL,
  `asal_sekolah` varchar(100) NOT NULL,
  `nilai_ujian` decimal(5,2) NOT NULL,
  `biaya_pendaftaran_dasar` decimal(10,2) NOT NULL,
  `jalur_pendaftaran` enum('Reguler','Prestasi','Kedinasan') NOT NULL,
  `pilihan_prodi` varchar(50) DEFAULT NULL,
  `lokasi_kampus` varchar(50) DEFAULT NULL,
  `jenis_prestasi` varchar(50) DEFAULT NULL,
  `tingkat_prestasi` varchar(30) DEFAULT NULL,
  `sk_ikatan_dinas` varchar(50) DEFAULT NULL,
  `instansi_sponsor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pendaftaran`
--

INSERT INTO `tabel_pendaftaran` (`id_pendaftaran`, `nama_calon`, `asal_sekolah`, `nilai_ujian`, `biaya_pendaftaran_dasar`, `jalur_pendaftaran`, `pilihan_prodi`, `lokasi_kampus`, `jenis_prestasi`, `tingkat_prestasi`, `sk_ikatan_dinas`, `instansi_sponsor`) VALUES
(1, 'Budi Santoso', 'SMAN 1 Jakarta', '85.50', '150000.00', 'Reguler', 'Teknik Informatika', 'Kampus Utama', NULL, NULL, NULL, NULL),
(2, 'Siti Aminah', 'MAN 2 Bandung', '88.00', '150000.00', 'Reguler', 'Sistem Informasi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(3, 'Rian Hidayat', 'SMKN 1 Surabaya', '82.25', '150000.00', 'Reguler', 'Teknik Elektro', 'Kampus B', NULL, NULL, NULL, NULL),
(4, 'Dewi Lestari', 'SMAN 3 Yogyakarta', '90.15', '150000.00', 'Reguler', 'Kedokteran', 'Kampus Utama', NULL, NULL, NULL, NULL),
(5, 'Eko Prasetyo', 'SMAN 5 Semarang', '79.80', '150000.00', 'Reguler', 'Manajemen', 'Kampus B', NULL, NULL, NULL, NULL),
(6, 'Fitriani', 'SMAN 1 Medan', '84.60', '150000.00', 'Reguler', 'Akuntansi', 'Kampus Utama', NULL, NULL, NULL, NULL),
(7, 'Gilang Dirga', 'SMAN 2 Makassar', '81.00', '150000.00', 'Reguler', 'Ilmu Komunikasi', 'Kampus C', NULL, NULL, NULL, NULL),
(8, 'Hendra Wijaya', 'SMAN 1 Denpasar', '92.00', '100000.00', 'Prestasi', NULL, NULL, 'Olimpiade Matematika', 'Nasional', NULL, NULL),
(9, 'Indah Permata', 'SMAN 8 Jakarta', '89.50', '100000.00', 'Prestasi', NULL, NULL, 'Futsal Putri', 'Provinsi', NULL, NULL),
(10, 'Kevin Sanjaya', 'SMAN 1 Kudus', '86.00', '100000.00', 'Prestasi', NULL, NULL, 'Bulutangkis Tunggal', 'Internasional', NULL, NULL),
(11, 'Lesti Kejora', 'SMAN 2 Bandung', '87.30', '100000.00', 'Prestasi', NULL, NULL, 'Menyanyi Solo', 'Nasional', NULL, NULL),
(12, 'Muhammad Ali', 'MAN 1 Palembang', '91.10', '100000.00', 'Prestasi', NULL, NULL, 'Karya Ilmiah Remaja', 'Nasional', NULL, NULL),
(13, 'Nadia Vega', 'SMAN 3 Malang', '88.40', '100000.00', 'Prestasi', NULL, NULL, 'Debat Bahasa Inggris', 'Provinsi', NULL, NULL),
(14, 'Oki Setiana', 'SMAN 1 Batam', '93.00', '100000.00', 'Prestasi', NULL, NULL, 'Hafidz Quran 20 Juz', 'Nasional', NULL, NULL),
(15, 'Putra Perkasa', 'SMAN 4 POSO', '84.00', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIK-2026-001', 'Kementerian Perhubungan'),
(16, 'Qori Sandika', 'SMAN 1 Padang', '86.50', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIK-2026-002', 'Badan Pusat Statistik'),
(17, 'Rizky Billar', 'SMAN 2 Medan', '83.20', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIK-2026-003', 'Kementerian Dalam Negeri'),
(18, 'Salsa Bila', 'SMAN 1 Pontianak', '87.90', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIK-2026-004', 'Badan Cyber dan Sandi Negara'),
(19, 'Taufik Hidayat', 'SMAN 1 Banjarmasin', '85.00', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIK-2026-005', 'Kementerian Keuangan'),
(20, 'Vina Panduwinata', 'SMAN 70 Jakarta', '88.10', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIK-2026-006', 'Badan Meteorologi Klimatologi Geofisika'),
(21, 'Wawan Kurniawan', 'SMAN 3 Jayapura', '82.00', '200000.00', 'Kedinasan', NULL, NULL, NULL, NULL, 'SK-DIK-2026-007', 'Kementerian Hukum dan HAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_pendaftaran`
--
ALTER TABLE `tabel_pendaftaran`
  MODIFY `id_pendaftaran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
