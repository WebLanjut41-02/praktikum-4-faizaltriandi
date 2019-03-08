-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2019 at 05:25 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangkeluar`
--

CREATE TABLE `barangkeluar` (
  `barcode` varchar(50) NOT NULL,
  `namaproduk` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `namasuplier` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangkeluar`
--

INSERT INTO `barangkeluar` (`barcode`, `namaproduk`, `kategori`, `jumlah`, `namasuplier`, `tanggal`) VALUES
('3434', '', '', 0, '', '0000-00-00'),
('3434', 'salaq', 'benih', 20, 'Khodir', '2019-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `barangmasuk`
--

CREATE TABLE `barangmasuk` (
  `barcode` varchar(50) NOT NULL,
  `namaproduk` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `namasuplier` varchar(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barangmasuk`
--

INSERT INTO `barangmasuk` (`barcode`, `namaproduk`, `kategori`, `jumlah`, `namasuplier`, `tanggal`) VALUES
('02', 'susu', 'benih', 11, 'tantan', '2019-02-02'),
('102', 'cabai rawit', 'peralatantani', 10, 'Karno', '2019-02-14'),
('103', 'organik pangalengan', 'pupuk', 20, 'PT. katalan', '2019-02-14'),
('1230', 'kelapa', 'benih', 10, 'mulya', '2019-02-16'),
('321', 'Pupuk Urea', 'pupuk', 30, 'Bintan', '2023-04-00'),
('3434', 'salaq', 'benih', 20, 'Khodir', '2019-02-23'),
('543', 'busa', 'benih', 23, 'lingling', '2321-11-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD KEY `barcode` (`barcode`);

--
-- Indexes for table `barangmasuk`
--
ALTER TABLE `barangmasuk`
  ADD PRIMARY KEY (`barcode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangkeluar`
--
ALTER TABLE `barangkeluar`
  ADD CONSTRAINT `barangkeluar_ibfk_1` FOREIGN KEY (`barcode`) REFERENCES `barangmasuk` (`barcode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
