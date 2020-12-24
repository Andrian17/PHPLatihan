-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Des 2020 pada 14.38
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_lanjut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` int(30) NOT NULL,
  `NIM` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `NIM`, `nama`, `alamat`) VALUES
(31, 2005006474, 'Gon', 'Greed Island'),
(32, 100500900, 'Killua Zoldik', 'York City'),
(35, 1901050024, 'Andrian', 'Bima'),
(36, 2005672003, 'Nezuko', 'Greed Island'),
(37, 11223344, 'Sasuke', 'Konoha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `phplatihan`
--

CREATE TABLE `phplatihan` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `TahunRilis` varchar(255) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `phplatihan`
--

INSERT INTO `phplatihan` (`id`, `Judul`, `Genre`, `Penulis`, `TahunRilis`, `Gambar`) VALUES
(64, 'One Punch Man', 'Fighter', 'GK TAU', '2015', '5fe355bc22ad4.png'),
(65, 'Death Note', 'Fantasi', 'GK TAU', '2010', '5fe355ca0498e.png'),
(66, 'Nanatsu No Taizai ', 'Petualangan', 'GK TAU', '2015', '5fe355dd0f1df.png'),
(67, 'Naruto', 'Aksi', 'Masashi Kishimoto', '1997', '5fe355eb02dc5.png'),
(68, 'Bleach', 'Aksi', 'Mito', '2001', '5fe355f8ea033.png'),
(72, 'dadw', 'wdad', 'wdadaw', 'dawwdaw', '5fe4615b39607.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prauts`
--

CREATE TABLE `prauts` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `TahunRilis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prauts`
--

INSERT INTO `prauts` (`id`, `Judul`, `Genre`, `Penulis`, `TahunRilis`) VALUES
(1, 'Hunter x Hunter', 'Aksi', 'Yoshihiro Togashi', '1998'),
(3, 'Naruto', 'Petualangan', 'Masashi Kishimoto', '1995'),
(4, 'Bleach', 'Fighter', 'Tite Kubo', '2001'),
(6, 'One Punch Man', 'Fighter', 'GK TAU', '2001'),
(7, 'Death Note', 'Fantasi', 'GK TAU juga', '2006'),
(8, 'Attack On Titan', 'Fighter', 'GK TAU', '2012');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_b`
--

CREATE TABLE `table_b` (
  `id_024` int(11) NOT NULL,
  `merek` varchar(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_b`
--

INSERT INTO `table_b` (`id_024`, `merek`, `jenis`, `stok`) VALUES
(1, 'yamaha', 'motoer', 0),
(2, 'honda', 'motor', 2),
(3, 'suzuki', 'mobil', 4),
(4, 'honda', 'motor', 2),
(5, 'suzuki', 'mobil', 4),
(6, 'Toyota', 'Mobil', 20),
(7, 'Suzuki', 'Mobil', 16),
(8, 'Msf', 'fdsf', 24),
(9, 'fdgf', 'dsgjjh', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `NamaLengkap` varchar(255) NOT NULL,
  `HakAkses` enum('admin','operator','editor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `NamaLengkap`, `HakAkses`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 'administrator', 'admin'),
(2, 'operator', '202cb962ac59075b964b07152d234b70', 'operator', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`) VALUES
(3, 'aku', '$2y$10$5rQ7dvQrXEtIdumge34dMuSjAEgW/Xe0bMaz/ITabJQ5DSCIMq7nW'),
(4, 'andrian17', '$2y$10$FkuuVRL.9hUR5VrLA0Cgr.TxcFLgypP1O/aHhEr.SIb6iEanfzoI2'),
(5, 'cimen', '$2y$10$tyyojt8lPZtD.ZuzKu8Vu.k/mkE0nUpYpGZmKPCK8OkhN8X49zHvm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `phplatihan`
--
ALTER TABLE `phplatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prauts`
--
ALTER TABLE `prauts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_b`
--
ALTER TABLE `table_b`
  ADD PRIMARY KEY (`id_024`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `phplatihan`
--
ALTER TABLE `phplatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `prauts`
--
ALTER TABLE `prauts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `table_b`
--
ALTER TABLE `table_b`
  MODIFY `id_024` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
