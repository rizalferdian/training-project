-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.5117
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cendana
CREATE DATABASE IF NOT EXISTS `cendana` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `cendana`;

-- Dumping structure for table cendana.kelamin
CREATE TABLE IF NOT EXISTS `kelamin` (
  `id` varchar(50) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.kelamin: ~2 rows (approximately)
DELETE FROM `kelamin`;
/*!40000 ALTER TABLE `kelamin` DISABLE KEYS */;
INSERT INTO `kelamin` (`id`, `nama`) VALUES
	('1', 'Laki - laki'),
	('2', 'Perempuan');
/*!40000 ALTER TABLE `kelamin` ENABLE KEYS */;

-- Dumping structure for table cendana.kota
CREATE TABLE IF NOT EXISTS `kota` (
  `id` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.kota: ~4 rows (approximately)
DELETE FROM `kota`;
/*!40000 ALTER TABLE `kota` DISABLE KEYS */;
INSERT INTO `kota` (`id`, `nama`) VALUES
	('1', 'Malang'),
	('2', 'Nganjuk'),
	('3', 'Blitar'),
	('4', 'Tulungagung');
/*!40000 ALTER TABLE `kota` ENABLE KEYS */;

-- Dumping structure for table cendana.login
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.login: ~0 rows (approximately)
DELETE FROM `login`;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` (`id`, `username`, `password`) VALUES
	(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;

-- Dumping structure for table cendana.pegawai
CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `id_kota` varchar(255) DEFAULT NULL,
  `id_kelamin` int(1) DEFAULT NULL,
  `id_posisi` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.pegawai: ~12 rows (approximately)
DELETE FROM `pegawai`;
/*!40000 ALTER TABLE `pegawai` DISABLE KEYS */;
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
/*!40000 ALTER TABLE `pegawai` ENABLE KEYS */;

-- Dumping structure for table cendana.posisi
CREATE TABLE IF NOT EXISTS `posisi` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table cendana.posisi: ~4 rows (approximately)
DELETE FROM `posisi`;
/*!40000 ALTER TABLE `posisi` DISABLE KEYS */;
INSERT INTO `posisi` (`id`, `nama`) VALUES
	('1', 'IT'),
	('2', 'HRD'),
	('3', 'Keuangan'),
	('4', 'Product');
/*!40000 ALTER TABLE `posisi` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
