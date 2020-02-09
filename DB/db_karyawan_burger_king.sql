-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2020 at 07:51 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karyawan_burger_king`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id` int(5) NOT NULL,
  `absensi` float(4,2) NOT NULL,
  `attitude` float(4,2) NOT NULL,
  `skill` float(4,2) NOT NULL,
  `performa` float(4,2) NOT NULL,
  `leadership` float(4,2) NOT NULL,
  `knowledge` float(4,2) NOT NULL,
  `speak` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id`, `absensi`, `attitude`, `skill`, `performa`, `leadership`, `knowledge`, `speak`) VALUES
(1, 0.10, 0.15, 0.25, 0.15, 0.10, 0.15, 0.10);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(11) NOT NULL,
  `idKaryawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `tempatLahir` varchar(255) NOT NULL,
  `tanggalLahir` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `absensi` int(5) NOT NULL DEFAULT 0,
  `attitude` int(5) NOT NULL DEFAULT 0,
  `skill` int(5) NOT NULL DEFAULT 0,
  `performa` int(5) NOT NULL DEFAULT 0,
  `leadership` int(5) NOT NULL DEFAULT 0,
  `knowledge` int(5) NOT NULL DEFAULT 0,
  `speak` int(5) NOT NULL DEFAULT 0,
  `nAbsensi` int(5) NOT NULL DEFAULT 0,
  `nAttitude` int(5) NOT NULL DEFAULT 0,
  `nSkill` int(5) NOT NULL DEFAULT 0,
  `nPerforma` int(5) NOT NULL DEFAULT 0,
  `nLeadership` int(5) NOT NULL DEFAULT 0,
  `nKnowledge` int(5) NOT NULL DEFAULT 0,
  `nSpeak` int(5) NOT NULL DEFAULT 0,
  `nilai` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `idKaryawan`, `nama`, `gender`, `tempatLahir`, `tanggalLahir`, `jabatan`, `alamat`, `kontak`, `foto`, `absensi`, `attitude`, `skill`, `performa`, `leadership`, `knowledge`, `speak`, `nAbsensi`, `nAttitude`, `nSkill`, `nPerforma`, `nLeadership`, `nKnowledge`, `nSpeak`, `nilai`) VALUES
(2, 'ID001', 'Andani Ade', 'Pria', 'Lombok', '2020-01-09', 'Crew Full Time', 'Geger Kalong Jaya', 'Geger Kalong Jaya', '', 89, 89, 90, 88, 78, 78, 46, 9, 13, 23, 13, 8, 12, 5, 82),
(3, 'ID002', 'Gilang', 'Pria', 'Bontang', '1999-11-10', 'Crew Part Time', 'Kopo Atas no 2 Bawah, Bandung', 'Kopo Atas no 2 Bawah, Bandung', '', 67, 78, 90, 89, 65, 87, 99, 7, 12, 23, 13, 7, 13, 10, 84),
(4, 'ID003', 'Rahmat', 'Pria', 'Kuningan', '1996-12-08', 'Crew Part Time', 'Komplek Taruna Jaya Mekar Makmur Sentosa no 10 Bandung', 'Komplek Taruna Jaya Mekar Makmur Sentosa no 10 Bandung', '', 56, 90, 75, 87, 87, 67, 89, 6, 14, 19, 13, 9, 10, 9, 79),
(5, 'ID004', 'Kimi Hime', 'Pria', 'Jakarta', '1994-12-01', 'Crew Part Time', 'Apartemen Gateway Rooftop, Bandung', 'Apartemen Gateway Rooftop, Bandung', '', 89, 89, 87, 67, 78, 89, 79, 9, 13, 22, 10, 8, 13, 8, 83),
(6, 'AM001', 'Jarman', 'Pria', 'Kroya', '1990-12-28', 'Area Manager', 'Babakan Sari III', '0987676757656', '', 90, 89, 87, 78, 90, 87, 67, 9, 13, 22, 12, 9, 13, 7, 85),
(9, 'ID005', 'Jhonson', 'Pria', 'Sydney', '1990-12-23', 'Area Manager', 'Kebon Gedang', 'Kebon Gedang', '15826c9dd3e2a0cea1fbf7b79a54a53a.jpg', 100, 100, 100, 90, 90, 99, 90, 10, 15, 25, 14, 9, 15, 9, 96),
(10, 'ID005', 'Andani', 'Pria', 'Bandung', '1999-12-22', 'Crew Leader', 'Gerlong', '0989747347384', '203f201e77a81134df9704d99a0bb7c5.jpg', 90, 90, 90, 89, 78, 78, 80, 9, 14, 23, 13, 8, 12, 8, 86);

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id` int(11) NOT NULL,
  `juara1` longtext DEFAULT NULL,
  `juara2` longtext DEFAULT NULL,
  `juara3` longtext DEFAULT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id`, `juara1`, `juara2`, `juara3`, `jabatan`) VALUES
(1, 'Tunjangan Tambahan Rp 500.000', 'Tunjangan Tambahan Rp 300.000', 'Tunjangan Tambahan Rp 100.000', 'Area Manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `jabatan`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'OM', '123123', 'Operational Manager'),
(3, 'AM', '123123', 'Area Manager'),
(4, 'GM', '123123', 'General Manager'),
(5, 'ASM', '123123', 'Assistant Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
