poslasticarnicaposlasticarnica-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for poslasticarnica
CREATE DATABASE IF NOT EXISTS `poslasticarnica` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `poslasticarnica`;

-- Dumping structure for table poslasticarnica.contact_address
CREATE TABLE IF NOT EXISTS `contact_address` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `addres` varchar(50) NOT NULL DEFAULT '0',
  `phone` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `working_hours` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.contact_address: ~10 rows (approximately)
INSERT INTO `contact_address` (`id`, `addres`, `phone`, `email`, `working_hours`) VALUES
	(2, 'fsfds', '3232', 'dfdsfs', '43242'),
	(3, 'Bulevar Kralja Aleksandra 73, Beograd', '+381 11 1234 567', 'kontakt@example.com', '0'),
	(4, 'Nemanjina 4, Novi Sad', '+381 21 5678 910', 'novisad@example.com', '0'),
	(5, 'Knez Mihailova 12, Beograd', '+381 64 321 9876', 'office@example.com', '0'),
	(6, 'Bulevar Kralja Aleksandra 73, Beograd', '+381 11 1234 567', 'kontakt@example.com', '0'),
	(7, 'Nemanjina 4, Novi Sad', '+381 21 5678 910', 'novisad@example.com', '0'),
	(8, 'Knez Mihailova 12, Beograd', '+381 64 321 9876', 'office@example.com', '0'),
	(9, 'Bulevar Kralja Aleksandra 73, Beograd', '+381 11 1234 567', 'kontakt@example.com', '0'),
	(10, 'Nemanjina 4, Novi Sad', '+381 21 5678 910', 'novisad@example.com', '0'),
	(11, 'Knez Mihailova 12, Beograd', '+381 64 321 9876', 'office@example.com', '0');

-- Dumping structure for table poslasticarnica.discounted_product
CREATE TABLE IF NOT EXISTS `discounted_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned NOT NULL DEFAULT 0,
  `discount_percentage` int(11) NOT NULL DEFAULT 0,
  `discount_price` double(5,2) NOT NULL DEFAULT 0.00,
  PRIMARY KEY (`id`),
  KEY `FK_discount_product_product_id` (`product_id`),
  CONSTRAINT `FK_discount_product_product_id` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.discounted_product: ~0 rows (approximately)

-- Dumping structure for table poslasticarnica.message
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT 0,
  `message` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_message_user_id` (`user_id`),
  CONSTRAINT `FK_message_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.message: ~0 rows (approximately)

-- Dumping structure for table poslasticarnica.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Column 2` int(10) unsigned NOT NULL DEFAULT 0,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `stock` int(11) NOT NULL DEFAULT 0,
  `image_url` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.product: ~0 rows (approximately)

-- Dumping structure for table poslasticarnica.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `pasword` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.user: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
