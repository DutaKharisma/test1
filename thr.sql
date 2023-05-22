-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 05.24
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `thr_karyawan`
--

CREATE TABLE `thr_karyawan` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gapok` int(10) NOT NULL,
  `tunjangan` int(10) NOT NULL,
  `bonus` int(10) NOT NULL,
  `iuran` int(10) NOT NULL,
  `thr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `thr_karyawan`
--

INSERT INTO `thr_karyawan` (`nik`, `nama`, `gapok`, `tunjangan`, `bonus`, `iuran`, `thr`) VALUES
('K01489', 'Ziqran', 3000000, 5000000, 2500000, 525000, 9975000),
('K03489', 'rian', 3000000, 1000000, 0, 200000, 3800000),
('K04489', 'danu', 3000000, 0, 1000000, 200000, 3800000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
