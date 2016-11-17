-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 02:20 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cendana`
--
CREATE DATABASE IF NOT EXISTS `cendana` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cendana`;

-- --------------------------------------------------------

--
-- Table structure for table `kelamin`
--

CREATE TABLE IF NOT EXISTS `kelamin` (
  `id` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelamin`
--

INSERT INTO `kelamin` (`id`, `nama`) VALUES
('1', 'Laki - laki'),
('2', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama`) VALUES
(1, 'Malang'),
(2, 'Nganjuk'),
(3, 'Blitar'),
(4, 'Tulungagung');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `img`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'me.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `id_kota` varchar(255) DEFAULT NULL,
  `id_kelamin` int(1) DEFAULT NULL,
  `id_posisi` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `telp`, `id_kota`, `id_kelamin`, `id_posisi`) VALUES
(1, 'Achmad Chadil Auwfar', '08984119934', '1', 1, 1),
(2, 'Hafizh Asrofil Al Banna', '087859615271', '1', 1, 2),
(3, 'Rizal Ferdian', '087777284179', '1', 1, 3),
(4, 'Antony Febriansyah Hartono', '082199568540', '1', 1, 1),
(5, 'Redika Angga Pratama', '083834657395', '1', 1, 3),
(6, 'Dody Ahmad Kusuma Jaya', '083854520015', '1', 1, 1),
(7, 'Faiq Fajrullah', '085736333728', '1', 1, 2),
(8, 'Mokhammad Choirul Ikhsan', '085749535400', '3', 1, 2),
(9, 'Mustofa Halim', '081330493322', '1', 1, 3),
(10, 'Samsul Huda', '085234640114', '2', 1, 4),
(11, 'Tolkha Hasan', '081233072122', '1', 1, 4),
(12, 'Wawan Dwi Prasetyo', '085745966707', '4', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE IF NOT EXISTS `posisi` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `nama`) VALUES
(1, 'IT'),
(2, 'HRD'),
(3, 'Keuangan'),
(4, 'Product');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
