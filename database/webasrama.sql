-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 05:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webasrama`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(25) NOT NULL,
  `lantai` varchar(25) NOT NULL,
  `kapasitas` int(15) NOT NULL,
  `tarif` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(15) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `nama_mhs` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `kewarganegaraan` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `kode_pos` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ortu` varchar(50) NOT NULL,
  `no_hp_ortu` varchar(25) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `id_penghuni` int(25) NOT NULL,
  `id_kamar` int(25) NOT NULL,
  `id_mhs` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_pembayaran`
--

CREATE TABLE `riwayat_pembayaran` (
  `id_riwayat` int(15) NOT NULL,
  `id_mhs` int(15) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `bulan` varchar(25) NOT NULL,
  `tahun` varchar(25) NOT NULL,
  `tagihan` int(15) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(25) NOT NULL,
  `bulan` varchar(25) NOT NULL,
  `tahun` varchar(25) NOT NULL,
  `tagihan` int(15) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `nomor_identitas` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL DEFAULT 'pengeloa',
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `nomor_identitas`, `username`, `level`, `password`) VALUES
(1, 'Kholis', '123', 'kholis', 'pengelola', '123'),
(2, 'gg', '55', 'gg', 'pengelola', 'gg'),
(3, 'test', '123', 'gg', 'mahasiswa', 'gg'),
(4, 'hh', '55', 'hh', 'pengelola', 'hh'),
(5, 'jj', '77', 'jj', 'pengelola', 'jj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id_penghuni`),
  ADD UNIQUE KEY `id_mhs` (`id_mhs`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `riwayat_pembayaran`
--
ALTER TABLE `riwayat_pembayaran`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_mhs` (`id_mhs`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`id_tagihan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id_penghuni` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `riwayat_pembayaran`
--
ALTER TABLE `riwayat_pembayaran`
  MODIFY `id_riwayat` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(25) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
