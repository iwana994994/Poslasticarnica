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

-- Dumping data for table poslasticarnica.kontakt: ~1 rows (approximately)
INSERT INTO `kontakt` (`id`, `adresa`, `telefon`, `email`, `working_hours`) VALUES
	(3, 'Nikole Pasica 28, Nis', '+381 11 1234 567', 'kontakt@example.com', '0');

-- Dumping structure for table poslasticarnica.poruka
CREATE TABLE IF NOT EXISTS `poruka` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poruka` text NOT NULL,
  `ime` text NOT NULL,
  `email` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.poruka: ~8 rows (approximately)
INSERT INTO `poruka` (`id`, `poruka`, `ime`, `email`, `datum`) VALUES
	(9, 'FFFFFFFFFFF', 'FFFF', 'FFFF', '2025-02-28 10:46:23'),
	(10, '1111111111', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 09:11:46'),
	(11, '22222222222\r\n\r\n', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 09:12:01'),
	(12, '33333333333', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 09:13:27'),
	(14, '45445', 'Ivana ', 'iwana994994@hotmail.com', '2025-03-06 09:17:59'),
	(17, '2323333333', 'RRRRRR', 'iwana994994@hotmail.comg', '2025-03-10 16:17:52');

-- Dumping structure for table poslasticarnica.proizvod
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL DEFAULT '0',
  `opis` varchar(50) NOT NULL DEFAULT '',
  `cena` double NOT NULL DEFAULT 0,
  `zalihe` int(11) NOT NULL DEFAULT 0,
  `slika` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.proizvod: ~8 rows (approximately)
INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cena`, `zalihe`, `slika`) VALUES
	(3, 'Cheesecake', 'Kremasti cheesecake sa prelivom od jagoda.', 1000, 15, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
	(4, 'Medena pita', 'Tradicionalna pita sa medom i orasima.', 1000, 12, 'korisnickaStrana/public/slike/med i orasi.jpg'),
	(5, 'Tiramisu', 'Italijanski klasik sa kafom i mascarpone sirom.', 1400, 9, 'korisnickaStrana/public/slike/tiramisu.jpg'),
	(6, 'Čokoladna torta', 'Torta sa bogatom čokoladnom kremom i čokoladnim pr', 15.99, 30, 'korisnickaStrana/public/slike/19.jpg'),
	(7, 'Voćna torta', 'Osvežavajuća torta sa sezonskim voćem i laganom kr', 12.5, 20, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
	(8, 'Torta sa kestenom', 'Torta sa kremom od kestena i prahom od kestenovog ', 18, 15, 'korisnickaStrana/public/slike/9.jpg'),
	(9, 'Tiramisu', 'Italijanska torta sa slojevima kafe, mascapone kre', 20, 25, 'korisnickaStrana/public/slike/tiramisu.jpg');

-- Dumping structure for table poslasticarnica.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL DEFAULT '0',
  `prezime` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.user: ~18 rows (approximately)
INSERT INTO `user` (`id`, `ime`, `prezime`, `email`, `username`, `password`, `role`, `created_at`) VALUES
	(1, '0', '0', '0', 'iwana', 'iwana994994', 'admin', '2025-03-06 09:56:10'),
	(7, 'Ivana ', 'ffff', 'iwana994994@h2il.com', '11123', '123123123', 'user', '2025-03-06 10:03:20'),
	(22, '0', '0', 'anastasija@anastasija', 'abastasija', 'anastasija', 'admin', '2025-03-09 11:40:14'),
	(24, 'Marko', 'Marković', 'marko.markovic@example.com', 'marko123', 'sifra123', 'user', '2025-03-10 16:00:52'),
	(25, 'Ana', 'Anić', 'ana.anic@example.com', 'ana_1990', 'lozinka456', 'user', '2025-03-10 16:00:52'),
	(26, 'Petar', 'Petrović', 'petar.petrovic@example.com', 'petar_p', 'lozinka789', 'user', '2025-03-10 16:00:52'),
	(27, 'Jelena', 'Jovanović', 'jelena.jovanovic@example.com', 'jelena01', 'sifra987', 'user', '2025-03-10 16:00:52'),
	(28, 'Ivan', 'Ivić', 'ivan.ivic@example.com', 'ivan_123', 'lozinka654', 'user', '2025-03-10 16:00:52'),
	(29, 'Marija', 'Marić', 'marija.maric@example.com', 'marija2025', 'lozinka1234', 'user', '2025-03-10 16:00:52'),
	(30, 'Nikola', 'Nikolić', 'nikola.nikolic@example.com', 'nikola_88', 'lozinka5678', 'user', '2025-03-10 16:00:52'),
	(31, 'Tanja', 'Tanović', 'tanja.tanovic@example.com', 'tanja1985', 'tajna123', 'user', '2025-03-10 16:00:52'),
	(33, 'Maja', 'Majkić', 'maja.majkic@example.com', 'maja_maja', 'sifra1122', 'user', '2025-03-10 16:00:52'),
	(37, 'Sara', 'Sarić', 'sara.saric@example.com', 'sara1234', 'mypassword999', 'user', '2025-03-10 16:00:52');

-- Dumping structure for table poslasticarnica.usluge
CREATE TABLE IF NOT EXISTS `usluge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(128) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.usluge: ~2 rows (approximately)
INSERT INTO `usluge` (`id`, `naziv`, `opis`, `slika`, `created_at`) VALUES
	(1, 'Dostava torti', 'Brza dostava torti na vašu adresu.', '/Poslasticarnica/korisnickaStrana/public/slike/dostava.jpg', '2025-03-06 20:56:23'),
	(2, 'Prilagođene torte.', 'Izrada torti prema vašim željama.', '/Poslasticarnica/korisnickaStrana/public/slike/custom-cake.jpg', '2025-03-06 20:57:01');

-- Dumping structure for table poslasticarnica.vesti
CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.vesti: ~5 rows (approximately)
INSERT INTO `vesti` (`id`, `naziv`, `opis`, `slika`) VALUES
	(1, 'Nova kolekcija torti', 'Predstavljamo vam našu novu kolekciju torti sa jedinstvenim ukusima i dekoracijama.', 'korisnickaStrana/public/slike/Cheesecake.jpg'),
	(2, 'Sezonski popusti', 'Iskoristite sezonske popuste na sve poslastice do kraja meseca!', 'korisnickaStrana/public/slike/Cheesecake.jpg'),
	(3, 'Radno vreme za praznike', 'Obaveštavamo vas da će naše radno vreme za praznike biti produženo.', 'korisnickaStrana/public/slike/Cheesecake.jpg'),
	(4, 'Specijalna ponuda za rođendane', 'Rezervišite tortu za rođendan i ostvarite popust od 20%!', 'korisnickaStrana/public/slike/Cheesecake.jpg'),
	(5, 'Nova lokacija u centru', 'Otvorili smo novu poslastičarnicu u centru grada – svratite na degustaciju!', 'korisnickaStrana/public/slike/Cheesecake.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
