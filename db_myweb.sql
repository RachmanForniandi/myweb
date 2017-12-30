-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 06:58 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_myweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mobil`
--

CREATE TABLE `tbl_mobil` (
  `kode_mobil` varchar(20) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `type` varchar(25) NOT NULL,
  `warna` varchar(30) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `gambar` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mobil`
--

INSERT INTO `tbl_mobil` (`kode_mobil`, `merk`, `type`, `warna`, `harga`, `gambar`) VALUES
('M00000', 'Honda', 'HR-V', 'Blue', '115000000', 'HRV-SPORT-Morpho-Blue.png'),
('M00001', 'Neo Honda', 'Jazz', 'orange', '65000000', 'c3.jpg'),
('M00002', 'Subaru', 'WRX STI L', 'Blue', '67000000', 'Subaru_WRX_STI_L_1.jpg'),
('M00003', 'Mitsubishi', 'Pajero Sport', 'Dark Metallic', '73000000', 'mitsubishi-pajero-sport.jpg'),
('M00004', 'Toyota', 'Avanza', 'Red', '55000000', 'colors_avanza_red.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `kode_user` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`kode_user`, `username`, `password`, `nama_lengkap`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Rachman Forniandi', 'admin'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Rachman Ridwan', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_mobil`
--
ALTER TABLE `tbl_mobil`
  ADD PRIMARY KEY (`kode_mobil`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `kode_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;