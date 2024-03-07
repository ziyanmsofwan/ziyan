-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Mar 2024 pada 12.16
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-login 1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `tanggal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu_ziyan`
--

CREATE TABLE `bukutamu_ziyan` (
  `no` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jk` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(50) NOT NULL,
  `keperluan` varchar(150) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `bukutamu_ziyan`
--

INSERT INTO `bukutamu_ziyan` (`no`, `tanggal`, `nama`, `jk`, `alamat`, `umur`, `keperluan`, `waktu`) VALUES
(45, '2024-03-03', 'ziyan m sofwan ', 'Laki Laki', 'kp. cisitu', 18, 'mabar', '2024-03-03 19:35:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`no`, `username`, `password`) VALUES
(0, 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bukutamu_ziyan`
--
ALTER TABLE `bukutamu_ziyan`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bukutamu_ziyan`
--
ALTER TABLE `bukutamu_ziyan`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
