-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Des 2018 pada 03.28
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_3saudara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_produksi`
--

CREATE TABLE `tb_data_produksi` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `ketebalan` varchar(10) NOT NULL,
  `total` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id`, `nama`, `bagian`) VALUES
(1, 'Maman', 'Produksi'),
(2, 'Koko', 'Produksi'),
(3, 'Dadan', 'Produksi'),
(4, 'Irfan', 'Produksi'),
(5, 'Firman', 'Produksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ketebalan`
--

CREATE TABLE `tb_ketebalan` (
  `id` int(11) NOT NULL,
  `ketebalan` varchar(10) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ketebalan`
--

INSERT INTO `tb_ketebalan` (`id`, `ketebalan`, `harga`) VALUES
(1, 'STD', 7000),
(2, '1,7', 8000),
(3, '2', 9000),
(4, '3', 12000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ukuran`
--

CREATE TABLE `tb_ukuran` (
  `id` int(11) NOT NULL,
  `ukuran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ukuran`
--

INSERT INTO `tb_ukuran` (`id`, `ukuran`) VALUES
(1, '40x40'),
(2, '30x60'),
(3, '30x30'),
(4, '20x40'),
(5, '20x20'),
(6, '15x30'),
(7, '10x40'),
(8, '10x30'),
(9, '10x20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_data_produksi`
--
ALTER TABLE `tb_data_produksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ketebalan`
--
ALTER TABLE `tb_ketebalan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_ukuran`
--
ALTER TABLE `tb_ukuran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_data_produksi`
--
ALTER TABLE `tb_data_produksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_ketebalan`
--
ALTER TABLE `tb_ketebalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_ukuran`
--
ALTER TABLE `tb_ukuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
