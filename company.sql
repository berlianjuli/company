-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for company
CREATE DATABASE IF NOT EXISTS `company` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `company`;

-- Dumping structure for table company.customer
CREATE TABLE IF NOT EXISTS `customer` (
  `kode_customer` int(11) NOT NULL AUTO_INCREMENT,
  `nama_customer` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `kota` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hp` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`kode_customer`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table company.customer: ~1 rows (approximately)
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` (`kode_customer`, `nama_customer`, `alamat`, `kota`, `email`, `hp`) VALUES
	(1, 'Berlian J.M.P.', 'Jalan Walanda Maramis', 'Pacitan', 'berlian@aknpacitan.ac.id', '085646631103'),
	(3, 'z', 'z', 'z', 'z@email.com', '0'),
	(4, 'x', 'z', 'z', 'z@gmail.com', '1'),
	(5, 's', 's', 's', 's@f', '1'),
	(6, 'nn', 'nn', 'nm', 'mm@gmail.com', '09'),
	(7, 'a', 'aa', 'a', 'berlian@gmail.com', '00');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
