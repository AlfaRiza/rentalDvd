-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Nov 2019 pada 15.47
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_dvd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dvd`
--

CREATE TABLE `dvd` (
  `id_film` int(6) NOT NULL,
  `judul` char(100) NOT NULL,
  `jenis` char(20) NOT NULL,
  `nama_gmb` char(200) NOT NULL,
  `sutradara` char(30) NOT NULL,
  `pemain_utama` char(30) NOT NULL,
  `harga` int(6) NOT NULL,
  `thn_terbit` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dvd`
--

INSERT INTO `dvd` (`id_film`, `judul`, `jenis`, `nama_gmb`, `sutradara`, `pemain_utama`, `harga`, `thn_terbit`) VALUES
(1, 'Calon Bini', 'romansa', 'naruto.jpg', 'umi upi', 'sasuke', 1000, 2017),
(2, 'Titanus', 'romansa', 'naruto.jpg', 'jokdri', 'naruto', 1000, 2018),
(5, 'Heni', 'comedy', 'naruto.jpg', 'heri santoso', 'Heni', 1000, 2019),
(6, 'XXX', 'Laga', 'xxx.jpg', 'Bruce', 'Cage', 10000, 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Alfa', '123'),
(2, 'Alfin', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`id_film`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dvd`
--
ALTER TABLE `dvd`
  MODIFY `id_film` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
