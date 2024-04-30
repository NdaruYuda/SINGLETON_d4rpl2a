-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2024 pada 18.23
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
-- Database: `seni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `music`
--

CREATE TABLE `music` (
  `penyanyi` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `diputar` tinyint(1) NOT NULL,
  `platform` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `music`
--

INSERT INTO `music` (`penyanyi`, `genre`, `diputar`, `platform`) VALUES
('John Doe', 'Rock', 1, 'Spotify');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`penyanyi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
