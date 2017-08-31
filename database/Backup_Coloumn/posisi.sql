-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 12:24 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `jmjreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE IF NOT EXISTS `posisi` (
`id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `kode`, `nama`, `deskripsi`) VALUES
(1, 'PRTMJ', 'Petugas Rescue Truck Multiguna Jago', 'Petugas Rescue Truck Multiguna Jago');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `kode` (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
