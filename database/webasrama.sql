-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 06:41 PM
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

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `lantai`, `kapasitas`, `tarif`) VALUES
(1, '1', 4, 450000),
(2, '1', 4, 450000),
(3, '1', 4, 450000),
(4, '1', 4, 450000),
(5, '1', 4, 450000),
(6, '1', 4, 450000),
(7, '1', 4, 450000),
(8, '1', 4, 450000),
(9, '1', 4, 450000),
(10, '1', 4, 450000),
(11, '2', 4, 450000),
(12, '2', 4, 450000),
(13, '2', 4, 450000),
(14, '2', 4, 450000),
(15, '2', 4, 450000),
(16, '2', 4, 450000),
(17, '2', 4, 450000),
(18, '2', 4, 450000),
(19, '2', 4, 450000),
(20, '2', 4, 450000),
(21, '3', 4, 450000),
(22, '3', 4, 450000),
(23, '3', 4, 450000),
(24, '3', 4, 450000),
(25, '3', 4, 450000),
(26, '3', 4, 450000),
(27, '3', 4, 450000),
(28, '3', 4, 450000),
(29, '3', 4, 450000),
(30, '3', 4, 450000);

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
  `provinsi` varchar(255) NOT NULL,
  `kabupaten` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `ortu` varchar(50) NOT NULL,
  `no_hp_ortu` varchar(25) NOT NULL,
  `alamat_ortu` varchar(100) NOT NULL,
  `pendidikan` varchar(25) NOT NULL,
  `nama_sekolah` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `nim`, `nama_mhs`, `foto`, `tempat`, `tgl_lahir`, `jk`, `kewarganegaraan`, `agama`, `email`, `no_hp`, `kode_pos`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `ortu`, `no_hp_ortu`, `alamat_ortu`, `pendidikan`, `nama_sekolah`, `jurusan`, `prodi`, `semester`) VALUES
(1, '2021903430042', 'Lukmanul Hakim', 'user1.jpg', 'Batee Iliek', '2003-07-12', 'Laki-laki', 'Warga Negara Indonesia', 'Islam', 'www,lukamnhakim22@gmail.com', '082312341234', '24264', 'Batee Iliek', 'Aceh', 'Bireuen', 'Samalanga', 'sayed', '082312341234', 'Batee Iliek', 'SMK', 'SMA SAMALANGA', 'Teknologi Informasi dan Komputer', 'Teknologi Rekayasa Komputer Jaringan', 'Semester 5'),
(2, '2022573100098', 'Muhammad Kholis', '', 'Langsa', '2023-12-17', '1', 'WNI', 'Islam', 'parzivalxddd@gmail.com', '0812', '24451', 'Gp Jawa depan, Langsa Kota', 'ACEH', '', 'Langsa', 'gg', 'gg', '', 'SMA-IPA', 'STM', 'TIK', 'TIK', 'TIK'),
(3, '567567', 'kholis', '', 'Langsa', '2023-12-17', '1', 'Warga Negara Indonesia', 'Islam', 'parzivalxddd@gmail.com', '0812gr', '24451', 'Gp Jawa depan, Langsa Kota', 'ACEH', '', 'Langsa', 'hh', '345', 'ghkh', 'SMA-IPA', 'STM', 'Teknologi Informasi dan Komputer', 'D4 - Teknologi Rekayasa Komputer Jaringan', 'Semester 3'),
(4, '1234', ' Siswa 2 ', '', 'Langsa', '2023-12-17', '1', 'Warga Negara Indonesia', 'Islam', 'bogeng@gmail.com', 'hh', '24451', 'Gp Jawa depan, Langsa Kota', 'ACEH', '', 'Langsa', 'hh', 'hh', 'Jln T Fakinah Perumahan PTPN 1', 'SMA-IPA', 'hhhh', 'Teknologi Informasi dan Komputer', 'D4 - Teknologi Rekayasa Komputer Jaringan', 'Semester 1');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `id_penghuni` int(25) NOT NULL,
  `id_kamar` int(25) NOT NULL,
  `id_mhs` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penghuni`
--

INSERT INTO `penghuni` (`id_penghuni`, `id_kamar`, `id_mhs`) VALUES
(1, 1, 1);

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
  `status` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_pembayaran`
--

INSERT INTO `riwayat_pembayaran` (`id_riwayat`, `id_mhs`, `nim`, `bulan`, `tahun`, `tagihan`, `status`, `waktu`) VALUES
(1, 1, '2021903430042', '12', '2023', 450000, 'berhasil', '2023-12-18 00:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `id_tagihan` int(25) NOT NULL,
  `id_mhs` int(15) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `bulan` varchar(25) NOT NULL,
  `tahun` varchar(25) NOT NULL,
  `tagihan` int(15) NOT NULL,
  `status` varchar(25) NOT NULL,
  `konfirmasi` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tagihan`
--

INSERT INTO `tagihan` (`id_tagihan`, `id_mhs`, `nim`, `bulan`, `tahun`, `tagihan`, `status`, `konfirmasi`) VALUES
(1, 1, '1234', '12', '2023', 450000, 'sudah', 'false'),
(2, 1, '1234', '1', '2024', 200000, 'belum', 'false');

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
(6, 'Lukmanul Hakim', '123', 'admin', 'pengelola', '123'),
(7, ' Siswa 2 ', '1234', ' Siswa 2 ', 'mahasiswa', 'hh');

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
  ADD PRIMARY KEY (`id_tagihan`),
  ADD KEY `id_mhs` (`id_mhs`);

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
  MODIFY `id_kamar` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id_penghuni` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `riwayat_pembayaran`
--
ALTER TABLE `riwayat_pembayaran`
  MODIFY `id_riwayat` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `id_tagihan` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
