-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Okt 2023 pada 14.08
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `11rpl3_2_ahmadarjuna`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko_juna`
--

CREATE TABLE `toko_juna` (
  `idBarang` int(11) NOT NULL,
  `kodeBarang` int(100) NOT NULL,
  `namaBarang` varchar(100) NOT NULL,
  `satuanBarang` varchar(100) NOT NULL,
  `stokBarang` int(100) NOT NULL,
  `hargaBarang` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `toko_juna`
--

INSERT INTO `toko_juna` (`idBarang`, `kodeBarang`, `namaBarang`, `satuanBarang`, `stokBarang`, `hargaBarang`) VALUES
(5, 5, 'pizza', '1', 50, 600000),
(6, 2, 'Burger', '1', 20, 450000),
(7, 6, 'Spageti', '5', 20, 70000),
(8, 1, 'Sushi', '1', 50, 350000),
(9, 10, 'Sashimi', '1', 45, 250000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `toko_juna`
--
ALTER TABLE `toko_juna`
  ADD PRIMARY KEY (`idBarang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `toko_juna`
--
ALTER TABLE `toko_juna`
  MODIFY `idBarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
