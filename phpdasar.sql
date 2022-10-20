-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2022 at 02:59 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nis` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nis`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Eed', '20,5400', 'eed@gmail.com', 'Rekayasa Perangkat Lunak', 'eed.jpg'),
(2, 'Andi', '20,5500', 'andi@gmail.com', 'Teknik Kendaraan Ringan', 'andi.jpg'),
(3, 'Budi', '20,5510', 'budi@gmail.com', 'Teknik Sepeda Motor', 'budi.jpg'),
(4, 'Rose', '20,5520', 'rose@gmail.com', 'Tata Busana', 'rose.jpg'),
(5, 'Siti', '20,5530', 'jennie@gmail.com', 'Teknik Komputer dan Jaringan', 'jennie.jpg'),
(6, 'Sumanto', '20,5540', 'sumanto@gmail.com', 'Rekayasa Perangkat Lunak', 'harry.jpg'),
(21, 'Lemon', '20,5990', 'lemon@gmail.com', 'Teknik Wibu', '63169e8e5bae4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'eed', '$2y$10$.a1LPk0RmH9czVQkS80LtO4MrnPk/QXfgMivzTiHC3MTo2rNCBK6e'),
(2, 'suaidi', '$2y$10$VVDd1jMorlda.FfBs71y6uXTisRQq96SBiE.sWodc8ehlb3UAifvW'),
(3, 'jono', '$2y$10$Z8A.xsws60eVi0tCyj5EtuNru01PBooU7.qxqcoz5skwz3CbajQbu'),
(4, 'jennie', '$2y$10$5YFVQF11jtgOVPl8whHGf.LG8m48gx92vYytz/Vh05Jj2yMJWXDl6'),
(5, 'hifal', '$2y$10$Um2MqmShskv/EHmcyNrr6ePvGiiadJ./7/DSFgdko/hJ9zlL81U7.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
