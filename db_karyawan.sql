-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 04:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karyawan`
--

CREATE DATABASE IF NOT EXISTS `db_karyawan`;
USE `db_karyawan`;

-- --------------------------------------------------------

--
-- Table structure for table `data_golongan`
--

CREATE TABLE `data_golongan` (
  `golongan` varchar(25) NOT NULL,
  `gajipokok` int(30) NOT NULL,
  `tunjangan` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_golongan`
--

INSERT INTO `data_golongan` (`golongan`, `gajipokok`, `tunjangan`) VALUES
('HRD', 4000000, 1800000),
('Karyawan', 2000000, 1000000),
('Manajer', 6000000, 3000000),
('SPV', 5000000, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `idkaryawan` int(5) NOT NULL,
  `namakaryawan` varchar(70) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `alamat` varchar(80) NOT NULL,
  `tempatlahir` varchar(70) NOT NULL,
  `tgllahir` date NOT NULL,
  `golongan` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`idkaryawan`, `namakaryawan`, `jeniskelamin`, `alamat`, `tempatlahir`, `tgllahir`, `golongan`, `status`) VALUES
(2, 'Putra A', 'Pria', 'Surakarta', 'Surakarta', '2014-11-05', 'Karyawan', 'Aktif'),
(3, 'Putra B', 'Pria', 'Karanganyar', 'Karanganyar', '2015-11-12', 'Manajer', 'Nonaktif'),
(4, 'Putri C', 'Wanita', 'Sragen', 'Sragen', '2018-11-09', 'SPV', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE `data_transaksi` (
  `idtransaksi` int(8) NOT NULL,
  `bulan` varchar(2) NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `idkaryawan` int(5) NOT NULL,
  `transport` int(20) NOT NULL,
  `lembur` int(20) NOT NULL,
  `gajitotal` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_transaksi`
--

INSERT INTO `data_transaksi` (`idtransaksi`, `bulan`, `tahun`, `idkaryawan`, `transport`, `lembur`, `gajitotal`) VALUES
(11, '4', '2019', 5, 2000000, 300000, 8100000),
(12, '10', '2021', 2, 3000000, 600000, 6600000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_golongan`
--
ALTER TABLE `data_golongan`
  ADD PRIMARY KEY (`golongan`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`idkaryawan`);

--
-- Indexes for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `idkaryawan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `data_transaksi`
--
ALTER TABLE `data_transaksi`
  MODIFY `idtransaksi` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
