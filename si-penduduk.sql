-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 04 Jan 2022 pada 15.40
-- Versi server: 5.7.33
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si-penduduk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bansos`
--

CREATE TABLE `tbl_bansos` (
  `id_bansos` int(11) NOT NULL,
  `kode_bansos` varchar(20) NOT NULL,
  `item_bansos` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bansos`
--

INSERT INTO `tbl_bansos` (`id_bansos`, `kode_bansos`, `item_bansos`) VALUES
(1, 'A01', 'Beras Banyak'),
(2, 'A02', 'Uang Tunai 2jt'),
(3, 'B01', 'Mie Instan 1 Kerdus'),
(4, 'B02', 'Minyak Goreng'),
(5, 'B03', 'Susu Kaleng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nama_penduduk` varchar(50) NOT NULL,
  `nik` varchar(25) NOT NULL,
  `no_kk` varchar(25) NOT NULL,
  `status_kk` varchar(25) NOT NULL,
  `id_bansos` varchar(25) NOT NULL,
  `vaksin_satu` varchar(20) NOT NULL,
  `vaksin_dua` varchar(20) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id_penduduk`, `nama_penduduk`, `nik`, `no_kk`, `status_kk`, `id_bansos`, `vaksin_satu`, `vaksin_dua`, `no_telp`, `alamat`) VALUES
(1, 'Fandy ', '0272442100843', '002189345753', 'Ayah', '1', '1', '6', '091726453918', 'Surabaya, Indonesia'),
(2, 'Diaz Cakasana', '0921357123479', '29038572903', 'Anak', '3', '3', '3', '081358965041', 'Surabaya, Indonesia'),
(3, 'Alvin', '681346718243', '012998236581', 'Ayah', '4', '4', '6', '085271892364', 'Surabaya, Indonesia'),
(6, 'Fathan A.K', '681346718243', '29038572903', 'Ibu', '5', '2', '2', '081358965041', 'Surabaya, Indonesia'),
(7, 'Yanuar', '81329057029293', '2903857219284', 'Ibu', '1', '6', '6', '085271892364', 'Surabaya, Indonesia'),
(9, 'test', '0921357123479', '29038572903', 'Kakek', '1', '6', '6', '081358965041', 'Surabaya, Indonesia'),
(10, 'test2', '0921357123479', '29038572903', 'Paman', '3', '4', '6', '081358965041', 'Surabaya, Indonesia'),
(11, 'test333', '0921357123479', '29038572903', 'Nenek', '2', '2', '2', '081358965041', 'Surabaya, Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nomor_telepon` varchar(25) NOT NULL,
  `foto_user` varchar(255) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `nomor_telepon`, `foto_user`, `hak_akses`) VALUES
(1, 'Bintang Ramadhan', 'bintang4974', '12345678', '081358965041', 'profile.png', 1),
(2, 'Syanu', 'syanu', '12345678', '081746354872', 'profile1.png', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_vaksin`
--

CREATE TABLE `tbl_vaksin` (
  `id_vaksin` int(11) NOT NULL,
  `kode_vaksin` varchar(20) NOT NULL,
  `jenis_vaksin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_vaksin`
--

INSERT INTO `tbl_vaksin` (`id_vaksin`, `kode_vaksin`, `jenis_vaksin`) VALUES
(1, 'A01', 'Sinovac'),
(2, 'A02', 'AstraZeneca'),
(3, 'A03', 'Pfizer'),
(4, 'A04', 'Moderna'),
(5, 'A05', 'Sinopharm'),
(6, 'B01', 'Belum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bansos`
--
ALTER TABLE `tbl_bansos`
  ADD PRIMARY KEY (`id_bansos`);

--
-- Indeks untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tbl_vaksin`
--
ALTER TABLE `tbl_vaksin`
  ADD PRIMARY KEY (`id_vaksin`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bansos`
--
ALTER TABLE `tbl_bansos`
  MODIFY `id_bansos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_vaksin`
--
ALTER TABLE `tbl_vaksin`
  MODIFY `id_vaksin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
