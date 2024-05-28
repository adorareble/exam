-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 03:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_main_soal`
--

CREATE TABLE `tb_main_soal` (
  `id` int NOT NULL,
  `kode_soal` varchar(100) NOT NULL,
  `nama_soal` varchar(100) NOT NULL,
  `jenis_soal` varchar(100) NOT NULL,
  `date_mulai` datetime NOT NULL,
  `date_akhir` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `password`, `role`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Mahasiswa', 'mahasiswa', '5787be38ee03a9ae5360f54d9026465f', 'mahasiswa'),
(3, 'Dosen', 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
(4, 'Dosen', 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
(5, 'Dosen', 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
(6, 'Dosen', 'dosen', 'ce28eed1511f631af6b2a7bb0a85d636', 'dosen'),
(7, 'Indra', 'indra', 'e24f6e3ce19ee0728ff1c443e4ff488d', 'admin'),
(8, 'Indra gifari', 'indraa', '49051bd9abde86821807fc768807c10f', 'dosen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_main_soal`
--
ALTER TABLE `tb_main_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_main_soal`
--
ALTER TABLE `tb_main_soal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
