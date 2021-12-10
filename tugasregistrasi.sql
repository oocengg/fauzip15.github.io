-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2021 pada 16.35
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasregistrasi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggotabaru`
--

CREATE TABLE `anggotabaru` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `alasan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggotabaru`
--

INSERT INTO `anggotabaru` (`id`, `nama`, `agama`, `umur`, `nohp`, `email`, `alamat`, `gender`, `alasan`) VALUES
(11001, 'Muh. Fauzi Ramadhan Nugraha', 'Islam', '19', '082293121268', 'fauzinugraha06@gmail.com', 'Mamuju', 'Pria', 'Ingin menambah ilmu pengetahuan tentang organisasi'),
(11002, 'Dian Safira', 'Islam', '19', '082299834213', 'diansafira@gmail.com', 'Kediri', 'Wanita', 'Melanjutkan Pendidikan Mengenai Penulisan'),
(11003, 'Maqbul Oko', 'Islam', '19', '082298907228', 'maqbul.oko@gmail.com', 'Mamuju', 'Pria', 'Ingi Menambah Pengalaman'),
(11004, 'Maqbul Oko', 'Islam', '19', '082293121268', 'fauzinugraha06@gmail.com', 'Mamuju', 'Pria', 'Halo'),
(11005, 'Maqbul Oko', 'Islam', '19', '082293121268', 'fauzinugraha06@gmail.com', 'Mamuju', 'Pria', 'Halo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '1'),
(2, 'guest', 'df6d2338b2b8fce1ec2f6dda0a630eb0', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggotabaru`
--
ALTER TABLE `anggotabaru`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
