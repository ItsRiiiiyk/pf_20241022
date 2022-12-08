-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Des 2022 pada 02.34
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_20241022.sql`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiwa`
--

CREATE TABLE `mahasiwa` (
  `id` int(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiwa`
--

INSERT INTO `mahasiwa` (`id`, `nama`, `nim`, `email`, `jurusan`, `gambar`) VALUES
(1, 'oriyk', '20241022', 'oriyk@gmail.com', 'teknologi informasi', 'oryk.jpg'),
(2, 'fahme', '20241005', 'fahme@gmail.com', 'teknologi informasi', 'pahme.jpg'),
(3, 'ocit', '20241025', 'citcit@gmail.com', 'teknologi informasi', 'ocit.jpg'),
(4, 'rahmad', '20241111', 'madmad@gmail.com', 'teknologi informasi', 'mad.jpg'),
(5, 'fikri', '20241027', 'fikfik@gmail.com', 'teknologi informasi', 'fikri.jpg'),
(6, 'gilang', '20241030', 'langgilang@gmail.com', 'teknologi informasi', 'gilang.jpg'),
(7, 'angan', '20241045', 'angan@gmail.com', 'teknologi informasi', 'angan.jpg'),
(8, 'sriindri', '20242020', 'indri@gmail.com', 'teknologi informasi', 'sri.jpg'),
(9, 'saidutt', '20241024', 'saidut@gmail.com', 'teknologi informasi', 'idut.jpg'),
(10, 'wedok', '2024054', 'wedok@gmail.com', 'teknologi informasi', 'wedok.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiwa`
--
ALTER TABLE `mahasiwa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
