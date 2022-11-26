-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 11:24 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE IF NOT EXISTS `administrasi` (
`id_transaksi` int(10) NOT NULL,
  `nisn` char(10) DEFAULT NULL,
  `nama_murid` varchar(50) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `dasi` int(10) NOT NULL,
  `kerudung` int(10) NOT NULL,
  `lks_smt_1` int(10) NOT NULL,
  `uts_smt_1` int(10) NOT NULL,
  `pas_smt_1` int(10) NOT NULL,
  `lks_smt_2` int(10) NOT NULL,
  `uts_smt_2` int(10) NOT NULL,
  `pas_smt_2` int(10) NOT NULL,
  `infaq_12_bulan` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`id_transaksi`, `nisn`, `nama_murid`, `tanggal`, `dasi`, `kerudung`, `lks_smt_1`, `uts_smt_1`, `pas_smt_1`, `lks_smt_2`, `uts_smt_2`, `pas_smt_2`, `infaq_12_bulan`) VALUES
(23, NULL, 'Yasan', '0000-00-00', 25000, 0, 105000, 15000, 25000, 105000, 15000, 0, 120000),
(24, NULL, 'muhammad Imamuddin', '2022-10-13', 25000, 0, 105000, 15000, 25000, 105000, 15000, 25000, 120000),
(25, NULL, 'imam', '2022-11-17', 1000, 0, 0, 0, 0, 0, 0, 0, 0),
(26, NULL, 'imam', '2022-11-16', 0, 75000, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE IF NOT EXISTS `akun` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`username`, `password`, `level`) VALUES
('admin', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('dadang', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('duu', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('hendika', 'c4ca4238a0b923820dcc509a6f75849b', 2),
('ima', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('imam', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('Kirito', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('Naruto', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('Okky', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('roma', 'c4ca4238a0b923820dcc509a6f75849b', 1),
('test', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('udin', 'c4ca4238a0b923820dcc509a6f75849b', 3),
('uud', 'c4ca4238a0b923820dcc509a6f75849b', 3);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE IF NOT EXISTS `murid` (
  `nisn` char(10) NOT NULL,
  `nama_murid` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `kota` varchar(45) DEFAULT NULL,
  `jenkel` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `kelas` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`nisn`, `nama_murid`, `username`, `kota`, `jenkel`, `agama`, `kelas`) VALUES
('1111111111', 'Udin', 'udin', 'Jakarta', 'Laki-Laki', 'Islam', 7),
('1111111119', 'Kanna Kamui', NULL, 'Tokyo', 'Perempuan', 'Hindu', 11),
('12124124', 'imamuddin', NULL, 'jombang', 'Laki-Laki', 'Islam', 1),
('1234123215', 'Yasan', NULL, 'Banjarmasin', 'Laki-Laki', 'Islam', 10),
('1256734563', 'Jaki', NULL, 'Bekasi', 'Laki-Laki', 'islam', 12),
('15232131', 'Uzumaki Kusina', NULL, 'Konoha', 'Perempuan', 'Islam', 11),
('3432423429', 'Hendika', NULL, 'Bekasi', 'Laki-Laki', 'Islam', 10),
('3563345195', 'Jaja Tamanawa', NULL, 'Jambi', 'Laki-Laki', 'islam', 10),
('3563345199', 'Najwa', NULL, 'Medan', 'Perempuan', 'islam', 11),
('5555554323', 'Sasa', NULL, 'Maria', 'Perempuan', 'Islam', 12),
('5555555555', 'muhammad Imamuddin', 'uud', 'jombang', 'Laki-Laki', 'Islam', 10),
('6475834759', 'Culain', NULL, 'Mataram', 'Laki-Laki', 'Hindu', 12),
('6666666666', 'Hana', NULL, 'Jakarta', 'Perempuan', 'Islam', 11),
('7826917', 'testt', NULL, 'jombang', 'Laki-Laki', 'Islam', 10),
('8378449283', 'Uzumaki Naruto', NULL, 'Konoha', 'Laki-Laki', 'Islam', 11),
('8798679869', 'Okky Pras', 'Okky', 'Banten', 'Laki-Laki', 'Islam', 10),
('888888888', 'uud', NULL, 'jombang', 'Laki-Laki', 'Islam', 1),
('928392101', 'imam', 'imam', 'Jombang', 'Laki-Laki', 'Islam', 10);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `Tanggal` varchar(10) DEFAULT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `No_HP` int(50) DEFAULT NULL,
  `Isi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`Tanggal`, `Subject`, `Nama`, `Email`, `No_HP`, `Isi`) VALUES
('18-05-2018', 'Test', 'Roma Debrian', 'Roma_coll04@yahoo.com', 2147483647, 'This messege of ded'),
('18-05-2018', 'Test', 'Roma Debrian', 'Roma_coll04@yahoo.com', 2147483647, 'ini adalah pesan kematian'),
('14-10-2022', 'jhv', 'hgvj', 'uud7231@gmail.com', 8658, 'jvjvv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
 ADD PRIMARY KEY (`id_transaksi`), ADD KEY `nisn` (`nisn`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
 ADD PRIMARY KEY (`nisn`), ADD KEY `murid_ibfk_1` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrasi`
--
ALTER TABLE `administrasi`
ADD CONSTRAINT `administrasi_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `murid` (`nisn`) ON DELETE SET NULL;

--
-- Constraints for table `murid`
--
ALTER TABLE `murid`
ADD CONSTRAINT `murid_ibfk_1` FOREIGN KEY (`username`) REFERENCES `akun` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
