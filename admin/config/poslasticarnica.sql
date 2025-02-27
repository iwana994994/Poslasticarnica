-- --------------------------------------------------------
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

-- Dumping structure for table poslasticarnica.kontakt
CREATE TABLE IF NOT EXISTS `kontakt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adresa` varchar(50) NOT NULL DEFAULT '0',
  `telefon` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `working_hours` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.kontakt: ~10 rows (approximately)
INSERT INTO `kontakt` (`id`, `adresa`, `telefon`, `email`, `working_hours`) VALUES
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

-- Dumping structure for table poslasticarnica.poruka
CREATE TABLE IF NOT EXISTS `poruka` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT 0,
  `poruka` text NOT NULL,
  `ime` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_message_user_id` (`user_id`) USING BTREE,
  CONSTRAINT `FK_message_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.poruka: ~0 rows (approximately)

-- Dumping structure for table poslasticarnica.proizvod
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL DEFAULT '0',
  `opis` text NOT NULL,
  `cena` double NOT NULL DEFAULT 0,
  `zalihe` int(11) NOT NULL DEFAULT 0,
  `slika` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.proizvod: ~9 rows (approximately)
INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cena`, `zalihe`, `slika`) VALUES
	(1, 'Čokoladna torta', 'Bogata torta sa crnom i mlečnom čokoladom.', 1500, 10, 'cokoladna.jpg'),
	(2, 'Voćna torta', 'Lagani krem sa svežim voćem i vanilom.', 1300, 8, 'vocna.jpg'),
	(3, 'Cheesecake', 'Kremasti cheesecake sa prelivom od jagoda.', 1200, 15, 'cheesecake.jpg'),
	(4, 'Medena pita', 'Tradicionalna pita sa medom i orasima.', 1000, 12, 'medena.jpg'),
	(5, 'Tiramisu', 'Italijanski klasik sa kafom i mascarpone sirom.', 1400, 9, 'tiramisu.jpg'),
	(6, 'Čokoladna torta', 'Torta sa bogatom čokoladnom kremom i čokoladnim preljevom.', 15.99, 30, 'cokoladna_torta.jpg'),
	(7, 'Voćna torta', 'Osvežavajuća torta sa sezonskim voćem i laganom kremom.', 12.5, 20, 'vocna_torta.jpg'),
	(8, 'Torta sa kestenom', 'Torta sa kremom od kestena i prahom od kestenovog brašna.', 18, 15, 'torta_sa_kestenom.jpg'),
	(9, 'Tiramisu', 'Italijanska torta sa slojevima kafe, mascapone kreme i kakao praha.', 20, 25, 'tiramisu.jpg');

-- Dumping structure for table poslasticarnica.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.user: ~1 rows (approximately)
INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
	(1, 'iwana', 'iwana994994', 'admin');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
