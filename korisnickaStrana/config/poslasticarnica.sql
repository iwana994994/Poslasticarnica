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

-- Dumping structure for table poslasticarnica.akcije
CREATE TABLE IF NOT EXISTS `akcije` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `proizvod_id` int(10) unsigned DEFAULT NULL,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `cena` double NOT NULL,
  `zalihe` int(11) NOT NULL,
  `slika` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.akcije: ~14 rows (approximately)
INSERT INTO `akcije` (`id`, `proizvod_id`, `naziv`, `opis`, `cena`, `zalihe`, `slika`) VALUES
	(1, 1, 'Popust na voćnu pitu – 20% jeftinije', 'Uživaj u sveže pečenoj voćnoj piti po specijalnoj akcijskoj ceni! Samo ovog meseca – 20% popusta na online narudžbine.', 200, 50, 'korisnickaStrana/public/slike/FruityPie.jpg'),
	(2, 2, 'Čokoladna torta + besplatna dostava', 'Poruči čokoladnu tortu za 800 dinara i uživaj uz besplatnu dostavu! Akcija traje do kraja nedelje.', 800, 30, 'korisnickaStrana/public/slike/9.jpg'),
	(3, 3, 'Kupi dva tiramisu, treći gratis', 'Naruči dva tiramisua po 350 dinara, treći dobiješ besplatno! Ponuda važi preko sajta.', 350, 40, 'korisnickaStrana/public/slike/tiramisu.jpg'),
	(4, 4, 'Srećni sati – Red Velvet popust 15%', 'Od 17h do 19h uživaj u našem Red Velvet parčetu uz posebnih 15% popusta! Samo tokom srećnih sati.', 300, 60, 'korisnickaStrana/public/slike/RedVelvet2.jpg'),
	(5, 5, 'Vikend akcija – krempita 300 dinara', 'Tokom vikenda, tradicionalna domaća krempita po specijalnoj ceni od 300 dinara! Savršena za slatki predah.', 300, 25, 'korisnickaStrana/public/slike/Creampie.jpg'),
	(6, 6, 'Prva narudžbina + Čoko mousse popust', 'Prva online narudžbina? Probaj našu čoko mousse tortu po sniženoj ceni uz dodatni popust samo za nove kupce!', 450, 35, 'korisnickaStrana/public/slike/chocomousse.jpg'),
	(7, 7, 'Pistać torta specijal – 250 dinara', 'Ekskluzivna ponuda: parče pistać torte po specijalnoj ceni od 250 dinara! Samo za online porudžbine radnim danima.', 250, 45, 'korisnickaStrana/public/slike/PistachioCake.jpg'),
	(8, 8, 'Švarcvald dan – 25% popusta', 'Svake srede, uživaj u švarcvald torti uz 25% popusta! Savršena kombinacija čokolade, višanja i šlaga.', 600, 20, 'korisnickaStrana/public/slike/Schvartzvald.jpg'),
	(9, 9, 'Cheesecake 2+1 gratis', 'Kupi dva parčeta cheesecake-a, treći dobijaš gratis! Ponuda važi tokom vikenda samo online.', 600, 30, 'korisnickaStrana/public/slike/Cheesecake2.jpg'),
	(10, 10, 'Medena pita — 20% popusta', 'Naša domaća medena pita po sniženoj ceni tokom radnih dana!', 800, 25, 'korisnickaStrana/public/slike/HoneyCake.jpg'),
	(11, 11, 'Limuntart specijal – kolač + popust', 'Osveži dan limunastim Limuntartom! Samo danas po specijalnoj ceni — idealno za ljubitelje laganih, osvežavajućih kolača.', 400, 40, 'korisnickaStrana/public/slike/LemonTart.jpg'),
	(12, 12, 'Vikend čoko specijal – Torta 3 čokolade', 'Dva parčeta torte 3 čokolade po specijalnoj ceni! Savršeno za sve ljubitelje bogatih čoko kombinacija.', 1000, 35, 'korisnickaStrana/public/slike/TripleChoco.jpg'),
	(13, 13, 'Torta sa kestenom — specijalna cena', 'Sezonska torta sa kestenom po sniženoj ceni — količine ograničene!', 700, 20, 'korisnickaStrana/public/slike/ChesnutCake111.jpg'),
	(14, 14, 'Medenjaci – akcijska cena', 'Domaći medenjaci po specijalnoj ponudi ovog meseca! Savršeni uz kafu ili čaj, hrskavi i puni ukusa.', 250, 50, 'korisnickaStrana/public/slike/GingerBread.jpg');

-- Dumping structure for table poslasticarnica.kontakt
CREATE TABLE IF NOT EXISTS `kontakt` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adresa` varchar(50) NOT NULL DEFAULT '0',
  `telefon` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `working_hours` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.kontakt: ~0 rows (approximately)
INSERT INTO `kontakt` (`id`, `adresa`, `telefon`, `email`, `working_hours`) VALUES
	(3, 'Nikole Pasica 28, Nis', '+381 11 1234 567', 'kontakt@example.com', '0');

-- Dumping structure for table poslasticarnica.porudzbina
CREATE TABLE IF NOT EXISTS `porudzbina` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT '',
  `adresa` varchar(100) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `nacin_placanja` varchar(30) NOT NULL DEFAULT 'gotovina',
  `datum_porudzbine` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=147 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.porudzbina: ~125 rows (approximately)
INSERT INTO `porudzbina` (`id`, `ime`, `prezime`, `email`, `adresa`, `telefon`, `nacin_placanja`, `datum_porudzbine`) VALUES
	(19, 'Ana', 'Jovic', '', 'Bozidarceva 15', '06133344422', 'gotovina', '2025-11-14 22:35:15'),
	(20, 'Strahinja', 'Stanković', '', 'Veljka Vlahovića 17', '06133344422', 'gotovina', '2025-11-14 22:35:41'),
	(21, 'Ivana', 'Markovic', '', 'Narodnog Heroja 25', '06133344422', 'gotovina', '2025-11-14 22:36:35'),
	(22, 'Ivan', 'Ivanovic', '', 'Sarajevska 5', '06133344422', 'gotovina', '2025-11-14 22:50:35'),
	(23, 'Milica', 'Mihajlovic', '', 'Baba Zlatina 33', '06133344422', 'gotovina', '2025-11-14 23:56:51'),
	(24, 'Jovana', 'Jovanovic', '', 'Cestelinska 43', '06133344422', 'gotovina', '2025-11-15 00:05:46'),
	(25, 'Dejan', 'Dekic', '', 'Partizanski Put 52', '06133344422', 'gotovina', '2025-11-15 00:16:44'),
	(26, 'Milos', 'Milinkovic', '', 'Zmaj Jove 16', '06133344422', 'gotovina', '2025-11-15 00:17:43'),
	(27, 'Nikola', 'Nikolic', '', 'Neznanog Junaka 3', '061224451', 'gotovina', '2025-11-16 00:17:35'),
	(28, 'Nemanja', 'Jovanovic', '', 'Kosovska 71', '065442231', 'gotovina', '2025-11-16 12:34:00'),
	(29, 'Andrijana', 'MIlosevic', '', 'Baba Zlatina 2', '065443213', 'gotovina', '2025-11-16 20:32:05'),
	(30, 'Jelena', 'Markovic', '', 'Kostanina 20', '06822745', 'gotovina', '2025-11-16 22:48:12'),
	(31, 'Jovan', 'Tasic', '', 'Przarska 14', '06388654', 'gotovina', '2025-11-17 00:45:03'),
	(32, 'o', 'o', '', 'o', '0', 'gotovina', '2025-11-17 13:55:00'),
	(33, 'o', 'o', '', 'o', '0', 'gotovina', '2025-11-17 13:55:23'),
	(34, 't', 't', '', 't', '8', 'gotovina', '2025-11-17 13:57:21'),
	(35, 'g', 'h', '', 'h', '6', 'gotovina', '2025-11-17 13:58:03'),
	(36, 'fff', 'fff', '', 'fff', '6', 'gotovina', '2025-11-17 14:05:46'),
	(37, 'kll', 'lll', '', 'jjj', '000', 'gotovina', '2025-11-17 14:07:53'),
	(38, 'nnn', 'nnn', '', 'nnn', '999', 'gotovina', '2025-11-17 14:13:45'),
	(39, 'hfghfg', 'hgfhf', '', 'hgfhgf', '777', 'gotovina', '2025-11-17 14:14:04'),
	(40, 'piopio', 'poipio', '', 'piopipi', '87578578', 'gotovina', '2025-11-17 14:15:36'),
	(41, 'ooooooooooooo', 'oooooo', '', 'oo', '999', 'gotovina', '2025-11-17 14:17:38'),
	(42, 'ivana', 'Markovic', '', 'z', '063', 'gotovina', '2025-11-17 17:04:38'),
	(43, 'Ana', 'Jovic', '', 'Bozidarceva 15', '06133344422', 'gotovina', '2020-01-05 12:35:15'),
	(44, 'Marko', 'Petrovic', '', 'Kralja Petra 10', '0611112233', 'kartica', '2020-02-14 15:22:10'),
	(45, 'Ivana', 'Markovic', '', 'Narodnog Heroja 25', '06133344422', 'gotovina', '2020-03-20 09:45:30'),
	(46, 'Nikola', 'Nikolic', '', 'Neznanog Junaka 3', '061224451', 'kartica', '2020-04-12 11:12:05'),
	(47, 'Milica', 'Mihajlovic', '', 'Baba Zlatina 33', '06133344422', 'gotovina', '2020-05-18 14:30:45'),
	(48, 'Jelena', 'Jovanovic', '', 'Kostanina 20', '06822745', 'kartica', '2020-06-25 18:50:12'),
	(49, 'Jovan', 'Tasic', '', 'Przarska 14', '06388654', 'gotovina', '2020-07-10 10:05:33'),
	(50, 'Dejan', 'Dekic', '', 'Partizanski Put 52', '06133344422', 'kartica', '2020-08-21 12:16:44'),
	(51, 'Milos', 'Milinkovic', '', 'Zmaj Jove 16', '06133344422', 'gotovina', '2020-09-30 16:17:43'),
	(52, 'Strahinja', 'Stanković', '', 'Veljka Vlahovića 17', '06133344422', 'kartica', '2020-10-05 20:35:41'),
	(53, 'Marko', 'Popovic', '', 'Bulevar Kralja Aleksandra 10', '0611234567', 'gotovina', '2020-01-15 10:00:00'),
	(54, 'Marija', 'Petrovic', '', 'Terazije 5', '0612345678', 'kartica', '2020-02-20 11:15:00'),
	(55, 'Petar', 'Simic', '', 'Knez Mihailova 12', '0613456789', 'gotovina', '2020-03-10 12:30:00'),
	(56, 'Ljubica', 'Djordjevic', '', 'Vojvode Stepe 25', '0614567890', 'gotovina', '2020-04-05 13:45:00'),
	(57, 'Srdjan', 'Stojanovic', '', 'Nemanjina 8', '0615678901', 'gotovina', '2020-05-18 14:00:00'),
	(58, 'Vesna', 'Ilic', '', 'Cara Dusana 30', '0616789012', 'kartica', '2020-06-22 15:20:00'),
	(59, 'Goran', 'Pavlovic', '', 'Zmaj Jove Jovanovica 15', '0617890123', 'gotovina', '2020-07-14 16:35:00'),
	(60, 'Dragana', 'Nikolic', '', 'Baba Zlatina 40', '0618901234', 'gotovina', '2020-08-09 17:50:00'),
	(61, 'Zoran', 'Kovacevic', '', 'Sarajevska 22', '0619012345', 'gotovina', '2020-09-03 18:05:00'),
	(62, 'Biljana', 'Jankovic', '', 'Veljka Vlahovica 50', '0610123456', 'kartica', '2020-10-27 19:10:00'),
	(63, 'Aleksandar', 'Dimitrijevic', '', 'Partizanski Put 35', '0611234567', 'gotovina', '2020-11-11 20:25:00'),
	(64, 'Tamara', 'Ristic', '', 'Cestelinska 18', '0612345678', 'gotovina', '2020-12-01 21:40:00'),
	(65, 'Dusan', 'Petrovic', '', 'Kosovska 60', '0613456789', 'gotovina', '2021-01-07 09:55:00'),
	(66, 'Olivera', 'Milic', '', 'Neznanog Junaka 12', '0614567890', 'kartica', '2021-02-14 10:10:00'),
	(67, 'Milan', 'Lazic', '', 'Przarska 28', '0615678901', 'gotovina', '2021-03-21 11:25:00'),
	(68, 'Svetlana', 'Stevanovic', '', 'Kostanina 45', '0616789012', 'gotovina', '2021-04-16 12:40:00'),
	(69, 'Branislav', 'Vukovic', '', 'Bozidarceva 55', '0617890123', 'gotovina', '2021-05-09 13:55:00'),
	(70, 'Jasmina', 'Savic', '', 'Narodnog Heroja 33', '0618901234', 'kartica', '2021-06-30 14:10:00'),
	(71, 'Vladimir', 'Mitic', '', 'Zmaj Jove 8', '0619012345', 'gotovina', '2021-07-25 15:25:00'),
	(72, 'Tatjana', 'Antic', '', 'Baba Zlatina 67', '0610123456', 'gotovina', '2021-08-19 16:40:00'),
	(73, 'Nikola', 'Radic', '', 'Sarajevska 14', '0611234567', 'gotovina', '2021-09-13 17:55:00'),
	(74, 'Kristina', 'Maric', '', 'Veljka Vlahovica 22', '0612345678', 'kartica', '2021-10-08 18:10:00'),
	(75, 'Bojan', 'Tomovic', '', 'Partizanski Put 47', '0613456789', 'gotovina', '2021-11-02 19:25:00'),
	(76, 'Sanja', 'Peric', '', 'Cestelinska 9', '0614567890', 'gotovina', '2021-12-26 20:40:00'),
	(77, 'Predrag', 'Boskovic', '', 'Kosovska 38', '0615678901', 'gotovina', '2022-01-20 09:55:00'),
	(78, 'Mira', 'Djuric', '', 'Neznanog Junaka 25', '0616789012', 'kartica', '2022-02-15 10:10:00'),
	(79, 'Slobodan', 'Karic', '', 'Przarska 16', '0617890123', 'gotovina', '2022-03-12 11:25:00'),
	(80, 'Ljiljana', 'Vasic', '', 'Kostanina 32', '0618901234', 'gotovina', '2022-04-07 12:40:00'),
	(81, 'Radomir', 'Zivkovic', '', 'Bozidarceva 41', '0619012345', 'gotovina', '2022-05-31 13:55:00'),
	(82, 'Nada', 'Nikolic', '', 'Narodnog Heroja 19', '0610123456', 'kartica', '2022-06-25 14:10:00'),
	(83, 'Vojislav', 'Milosevic', '', 'Zmaj Jove 29', '0611234567', 'gotovina', '2022-07-20 15:25:00'),
	(84, 'Gordana', 'Tasic', '', 'Baba Zlatina 53', '0612345678', 'gotovina', '2022-08-14 16:40:00'),
	(85, 'Miroslav', 'Popovic', '', 'Sarajevska 7', '0613456789', 'gotovina', '2022-09-08 17:55:00'),
	(86, 'Vera', 'Petrovic', '', 'Veljka Vlahovica 13', '0614567890', 'kartica', '2022-10-03 18:10:00'),
	(87, 'Dragan', 'Simic', '', 'Partizanski Put 61', '0615678901', 'gotovina', '2022-11-27 19:25:00'),
	(88, 'Anica', 'Djordjevic', '', 'Cestelinska 34', '0616789012', 'gotovina', '2022-12-21 20:40:00'),
	(89, 'Stevan', 'Stojanovic', '', 'Kosovska 49', '0617890123', 'gotovina', '2023-01-16 09:55:00'),
	(90, 'Ljubomir', 'Ilic', '', 'Neznanog Junaka 38', '0618901234', 'kartica', '2023-02-11 10:10:00'),
	(91, 'Rada', 'Pavlovic', '', 'Przarska 22', '0619012345', 'gotovina', '2023-03-08 11:25:00'),
	(92, 'Tomislav', 'Nikolic', '', 'Kostanina 27', '0610123456', 'gotovina', '2023-04-02 12:40:00'),
	(93, 'Danica', 'Kovacevic', '', 'Bozidarceva 36', '0611234567', 'gotovina', '2023-05-26 13:55:00'),
	(94, 'Lazar', 'Jankovic', '', 'Narodnog Heroja 44', '0612345678', 'kartica', '2023-06-20 14:10:00'),
	(95, 'Sofija', 'Dimitrijevic', '', 'Zmaj Jove 41', '0613456789', 'gotovina', '2023-07-15 15:25:00'),
	(96, 'Pavle', 'Ristic', '', 'Baba Zlatina 48', '0614567890', 'gotovina', '2023-08-09 16:40:00'),
	(97, 'Angelina', 'Petrovic', '', 'Sarajevska 31', '0615678901', 'gotovina', '2023-09-03 17:55:00'),
	(98, 'Uros', 'Milic', '', 'Veljka Vlahovica 58', '0616789012', 'kartica', '2023-10-28 18:10:00'),
	(99, 'Katarina', 'Lazic', '', 'Partizanski Put 73', '0617890123', 'gotovina', '2023-11-22 19:25:00'),
	(100, 'Filip', 'Stevanovic', '', 'Cestelinska 26', '0618901234', 'gotovina', '2023-12-16 20:40:00'),
	(101, 'Marina', 'Vukovic', '', 'Kosovska 55', '0619012345', 'gotovina', '2024-01-10 09:55:00'),
	(102, 'Stefan', 'Savic', '', 'Neznanog Junaka 47', '0610123456', 'kartica', '2024-02-05 10:10:00'),
	(103, 'Ivana', 'Mitic', '', 'Przarska 39', '0611234567', 'gotovina', '2024-03-01 11:25:00'),
	(104, 'Aleksandra', 'Antic', '', 'Kostanina 14', '0612345678', 'gotovina', '2024-04-25 12:40:00'),
	(105, 'Nikola', 'Radic', '', 'Bozidarceva 62', '0613456789', 'gotovina', '2024-05-19 13:55:00'),
	(106, 'Milena', 'Maric', '', 'Narodnog Heroja 51', '0614567890', 'kartica', '2024-06-13 14:10:00'),
	(107, 'Djordje', 'Tomovic', '', 'Zmaj Jove 53', '0615678901', 'gotovina', '2024-07-08 15:25:00'),
	(108, 'Teodora', 'Peric', '', 'Baba Zlatina 59', '0616789012', 'gotovina', '2024-08-02 16:40:00'),
	(109, 'Luka', 'Boskovic', '', 'Sarajevska 43', '0617890123', 'gotovina', '2024-09-26 17:55:00'),
	(110, 'Sara', 'Djuric', '', 'Veljka Vlahovica 64', '0618901234', 'kartica', '2024-10-21 18:10:00'),
	(111, 'Matija', 'Karic', '', 'Partizanski Put 85', '0619012345', 'gotovina', '2024-11-15 19:25:00'),
	(112, 'Jana', 'Vasic', '', 'Cestelinska 51', '0610123456', 'gotovina', '2024-12-09 20:40:00'),
	(113, 'Ognjen', 'Zivkovic', '', 'Kosovska 67', '0611234567', 'gotovina', '2025-01-03 09:55:00'),
	(114, 'Tijana', 'Nikolic', '', 'Neznanog Junaka 56', '0612345678', 'kartica', '2025-02-27 10:10:00'),
	(115, 'Viktor', 'Milosevic', '', 'Przarska 48', '0613456789', 'gotovina', '2025-03-24 11:25:00'),
	(116, 'Helena', 'Tasic', '', 'Kostanina 69', '0614567890', 'gotovina', '2025-04-18 12:40:00'),
	(117, 'Andrej', 'Popovic', '', 'Bozidarceva 74', '0615678901', 'gotovina', '2025-05-12 13:55:00'),
	(118, 'Mia', 'Petrovic', '', 'Narodnog Heroja 63', '0616789012', 'kartica', '2025-06-06 14:10:00'),
	(119, 'Lazar', 'Simic', '', 'Zmaj Jove 65', '0617890123', 'gotovina', '2025-07-31 15:25:00'),
	(120, 'Dunja', 'Djordjevic', '', 'Baba Zlatina 71', '0618901234', 'gotovina', '2025-08-25 16:40:00'),
	(121, 'Nemanja', 'Stojanovic', '', 'Sarajevska 55', '0619012345', 'gotovina', '2025-09-19 17:55:00'),
	(122, 'Anja', 'Ilic', '', 'Veljka Vlahovica 76', '0610123456', 'kartica', '2025-10-14 18:10:00'),
	(123, 'Relja', 'Pavlovic', '', 'Partizanski Put 97', '0611234567', 'gotovina', '2025-11-08 19:25:00'),
	(124, 'Lena', 'Nikolic', '', 'Cestelinska 63', '0612345678', 'gotovina', '2025-12-02 20:40:00'),
	(125, 'David', 'Kovacevic', '', 'Kosovska 79', '0613456789', 'gotovina', '2020-01-22 10:05:00'),
	(126, 'Eva', 'Jankovic', '', 'Neznanog Junaka 68', '0614567890', 'kartica', '2020-02-17 11:20:00'),
	(127, 'Igor', 'Dimitrijevic', '', 'Przarska 57', '0615678901', 'gotovina', '2020-03-14 12:35:00'),
	(128, 'Lara', 'Ristic', '', 'Kostanina 81', '0616789012', 'gotovina', '2020-04-09 13:50:00'),
	(129, 'Jovan', 'Petrovic', '', 'Bozidarceva 86', '0617890123', 'gotovina', '2020-05-04 14:05:00'),
	(130, 'Mina', 'Milic', '', 'Narodnog Heroja 75', '0618901234', 'kartica', '2020-06-29 15:20:00'),
	(131, 'Petar', 'Lazic', '', 'Zmaj Jove 77', '0619012345', 'gotovina', '2020-07-24 16:35:00'),
	(132, 'Lea', 'Stevanovic', '', 'Baba Zlatina 83', '0610123456', 'gotovina', '2020-08-18 17:50:00'),
	(133, 'Strahinja', 'Vukovic', '', 'Sarajevska 67', '0611234567', 'gotovina', '2020-09-12 18:05:00'),
	(134, 'Tara', 'Savic', '', 'Veljka Vlahovica 88', '0612345678', 'kartica', '2020-10-07 19:20:00'),
	(135, 'Aleksandar', 'Mitic', '', 'Partizanski Put 109', '0613456789', 'gotovina', '2020-11-01 20:35:00'),
	(136, 'Hana', 'Antic', '', 'Cestelinska 75', '0614567890', 'gotovina', '2020-12-26 21:50:00'),
	(137, 'Vuk', 'Radic', '', 'Kosovska 91', '0615678901', 'gotovina', '2021-01-20 09:05:00'),
	(138, 'Lana', 'Maric', '', 'Neznanog Junaka 80', '0616789012', 'kartica', '2021-02-15 10:20:00'),
	(139, 'Bogdan', 'Tomovic', '', 'Przarska 69', '0617890123', 'gotovina', '2021-03-12 11:35:00'),
	(140, 'Una', 'Peric', '', 'Kostanina 93', '0618901234', 'gotovina', '2021-04-07 12:50:00'),
	(141, 'Danilo', 'Boskovic', '', 'Bozidarceva 98', '0619012345', 'gotovina', '2021-05-02 13:05:00'),
	(144, 'Anastasija', 'S', '', 's', '063', 'gotovina', '2025-11-17 17:50:00'),
	(145, 'Anastasija', 'sss', '', 'ss', '063', 'gotovina', '2025-11-17 18:18:52'),
	(146, 'Anastasija', 'S', '', 's', '063', 'gotovina', '2025-11-22 13:41:02');

-- Dumping structure for table poslasticarnica.poruka
CREATE TABLE IF NOT EXISTS `poruka` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poruka` text NOT NULL,
  `ime` text NOT NULL,
  `email` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.poruka: ~8 rows (approximately)
INSERT INTO `poruka` (`id`, `poruka`, `ime`, `email`, `datum`) VALUES
	(9, 'FFFFFFFFFFF', 'FFFF', 'FFFF', '2025-02-28 09:46:23'),
	(10, '1111111111', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:11:46'),
	(11, '22222222222\r\n\r\n', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:12:01'),
	(12, '33333333333', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:13:27'),
	(14, '45445', 'Ivana ', 'iwana994994@hotmail.com', '2025-03-06 08:17:59'),
	(17, '2323333333', 'RRRRRR', 'iwana994994@hotmail.comg', '2025-03-10 15:17:52'),
	(18, 'dsdsa', 'RRRR', 'iwana994994@gmail.com', '2025-03-18 08:52:13'),
	(19, 'Test_test', 'Jovana', 'jovana@jovana.com', '2025-11-14 18:02:18');

-- Dumping structure for table poslasticarnica.proizvod
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL DEFAULT '0',
  `opis` varchar(255) NOT NULL,
  `kategorija` varchar(30) NOT NULL DEFAULT 'ostalo',
  `cena` double NOT NULL DEFAULT 0,
  `zalihe` int(11) NOT NULL DEFAULT 0,
  `slika` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.proizvod: ~30 rows (approximately)
INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `kategorija`, `cena`, `zalihe`, `slika`) VALUES
	(1, 'Voćna pita', 'Hrskava pita sa sezonskim voćem i laganim kremom.', 'vocna', 850, 18, 'korisnickaStrana/public/slike/FruityPie.jpg'),
	(2, 'Čokoladna torta', 'Bogata torta od najfinije čokolade sa kremastim slojevima i glazurom od tamne čokolade. Neodoljivo iskustvo za prave čokoljupce.', 'cokoladna', 350, 30, 'korisnickaStrana/public/slike/ChocoCake1.jpg'),
	(3, 'Tiramisu', 'Italijanski klasik — lagani slojevi piškota natopljenih kafom, krem od mascarpone sira i fini kakao. Savršeno izbalansiran ukus.', 'cokoladna', 1400, 9, 'korisnickaStrana/public/slike/tiramisu.jpg'),
	(4, 'Red Velvet', 'Nežna “crvena baršun” torta sa krem sirom — popularna za sve prilike.', 'cokoladna', 1350, 12, 'korisnickaStrana/public/slike/RedVelvet2.jpg'),
	(5, 'Mille-Feuille (Krempita)', 'Lisnato testo u više slojeva sa vanila kremom — lagano i kremasto.', 'krempita', 420, 28, 'korisnickaStrana/public/slike/Creampie.jpg'),
	(6, 'Čoko mus torta', 'Pufnasta mus torta od fine čokolade, topi se u ustima.', 'cokoladna', 1100, 16, 'korisnickaStrana/public/slike/ChocoMousse.jpg'),
	(7, 'Pistać torta', 'Aromatična krema od pistaća i blagi biskvit — specijalitet kuće.', 'pistac', 1600, 10, 'korisnickaStrana/public/slike/PistachioCake.jpg'),
	(8, 'Švarcvald torta', 'Klasična čokoladna torta sa višnjama i šlagom — idealna za ljubitelje bogatih ukusa.', 'visnja', 1200, 14, 'korisnickaStrana/public/slike/Schvartzvald.jpg'),
	(9, 'Cheesecake parče', 'Kremasti užitak sa hrskavom podlogom i blagim ukusom vanile, preliven svežim voćnim prelivom — savršeno osveženje za svaku priliku.', 'cizkejk', 299, 15, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
	(10, 'Medena pita', 'Tradicionalna domaća poslastica sa slojevima medenog testa i nežnim filom od oraha i vanile. Idealna uz topli čaj ili kafu.', 'med', 1000, 12, 'korisnickaStrana/public/slike/HoneyCake.jpg'),
	(11, 'Tart od limuna', 'Osvežavajući limun tart sa prhkim testom i mirisnom kremom.', 'tart', 590, 20, 'korisnickaStrana/public/slike/LemonTart.jpg'),
	(12, 'Torta “Tri čokolade”', 'Bela, mlečna i crna čokolada u tri sloja — čokoladni maksimum.', 'cokoladna', 1500, 12, 'korisnickaStrana/public/slike/TripleChoco.jpg'),
	(13, 'Torta sa kestenom', 'Fina kombinacija kreme od kestena i čokolade, prelivene kakao glazurom. Posebno omiljena u jesenjim mesecima.', 'kesten', 700, 15, 'korisnickaStrana/public/slike/ChesnutCake.jpg'),
	(14, 'Medenjaci pakovanje (200g)', 'Domaći medenjaci sa začinima — idealni uz čaj ili kafu.', 'medenjaci', 450, 35, 'korisnickaStrana/public/slike/GingerBread.jpg'),
	(15, 'Voćna torta', 'Osvežavajuća torta sa slojevima laganog biskvita i kremom od sezonskog voća. Lagana, sočna i savršena za tople dane.', 'vocna', 220, 20, 'korisnickaStrana/public/slike/FruitCake.jpg'),
	(16, 'Čizkejk sa borovnicama', 'Cheesecake sa prelivom od borovnica — osvežavajuća kiselo-slatka kombinacija.', 'cizkejk', 650, 22, 'korisnickaStrana/public/slike/BlueCheesecake.jpg'),
	(17, 'Mafini sa višnjom', 'Sočni mafini sa komadićima višnje i blagom aromom vanile – savršeni uz jutarnju kafu.', 'mafini', 180, 30, 'korisnickaStrana/public/slike/CherryMuffin.jpg'),
	(18, 'Mafini sa čokoladom', 'Pufnasti mafini prepuni komadića crne čokolade koja se topi pri svakom zalogaju.', 'mafini', 190, 32, 'korisnickaStrana/public/slike/ChocoMuffin.jpg'),
	(19, 'Mafini sa lešnikom', 'Mafini od prhkog testa sa pečenim lešnicima i blagom čokoladnom notom.', 'mafini', 200, 28, 'korisnickaStrana/public/slike/HazelnutMuffin.jpg'),
	(20, 'Kokos torta', 'Lagani biskvit u kombinaciji sa bogatim kokos kremom i posipom od kokosovih mrvica.', 'kokos', 1300, 10, 'korisnickaStrana/public/slike/CoconutCake.jpg'),
	(21, 'Rafaello kuglice', 'Sitni kolačići od kokosa i bele čokolade sa bademom u sredini – idealni za posluženje uz kafu.', 'kokos', 480, 25, 'korisnickaStrana/public/slike/Raffaelo.jpg'),
	(22, 'Kolač sa cimetom', 'Mekan biskvit sa cimetom i punjenjem od krem sira – topao i mirisan desert za hladne dane.', 'cimet', 550, 18, 'korisnickaStrana/public/slike/CinnaCookie.jpg'),
	(23, 'Cimet rolnice', 'Klasične cinnamon rolls – mekano testo sa filom od cimeta i šećera, preliveno blagim vanila prelivom.', 'cimet', 620, 20, 'korisnickaStrana/public/slike/CinnaRolls.jpg'),
	(24, 'Krofna sa šećerom', 'Klasična pržena krofna posuta kristal šećerom – jednostavno, ali neodoljivo.', 'krofne', 120, 40, 'korisnickaStrana/public/slike/DonutSugar.jpg'),
	(25, 'Krofna sa kremom', 'Pufnasta krofna punjena bogatim kremom od vanile i prelivena čokoladom.', 'krofne', 150, 36, 'korisnickaStrana/public/slike/DonutChoco.jpg'),
	(26, 'Princes krofna', 'Lagana princes krofna sa vanila filom i šlagom – idealna za svečanije prilike.', 'krofne', 180, 30, 'korisnickaStrana/public/slike/PrincessDonut.jpg'),
	(27, 'Tart od borovnice', 'Hrskavo prhko testo punjeno kremom i bogatim prelivom od svežih borovnica.', 'tart', 650, 16, 'korisnickaStrana/public/slike/BlueTart.jpg'),
	(28, 'Medovnik', 'Slojevita torta sa korama od meda i filom od kiselog mleka i oraha – tradicionalni desert pun ukusa.', 'med', 1250, 9, 'korisnickaStrana/public/slike/Medovnik.jpg'),
	(29, 'Baklava sa pistaćem', 'Bogata orijentalna baklava sa pistaćima, natopljena mirisnim sirupom od meda i limuna.', 'pistac', 750, 20, 'korisnickaStrana/public/slike/PIstaccioBaklava.jpg'),
	(30, 'Kolač od pistaća', 'Sočan kolač sa mlevenim pistaćima i laganim sirupom – intenzivan, ali nežan ukus.', 'pistac', 680, 18, 'korisnickaStrana/public/slike/PistaccioSmallCake.jpg');

-- Dumping structure for table poslasticarnica.stavke_porudzbine
CREATE TABLE IF NOT EXISTS `stavke_porudzbine` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `porudzbina_id` int(10) unsigned NOT NULL,
  `proizvod_id` int(10) unsigned NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `porudzbina_id` (`porudzbina_id`),
  KEY `proizvod_id` (`proizvod_id`),
  CONSTRAINT `stavke_porudzbine_ibfk_1` FOREIGN KEY (`porudzbina_id`) REFERENCES `porudzbina` (`id`) ON DELETE CASCADE,
  CONSTRAINT `stavke_porudzbine_ibfk_2` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvod` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.stavke_porudzbine: ~100 rows (approximately)
INSERT INTO `stavke_porudzbine` (`id`, `porudzbina_id`, `proizvod_id`, `kolicina`, `cena`) VALUES
	(1, 19, 15, 2, 220),
	(2, 19, 11, 1, 590),
	(3, 20, 14, 5, 450),
	(4, 21, 4, 1, 1350),
	(5, 21, 5, 1, 420),
	(6, 22, 14, 1, 450),
	(7, 23, 12, 1, 1000),
	(8, 24, 12, 1, 1000),
	(9, 24, 11, 2, 400),
	(10, 25, 10, 1, 800),
	(11, 26, 7, 9, 1600),
	(12, 27, 15, 2, 220),
	(13, 28, 6, 2, 1100),
	(14, 28, 16, 1, 650),
	(15, 29, 8, 4, 1200),
	(16, 30, 16, 1, 650),
	(17, 30, 9, 2, 299),
	(18, 30, 8, 3, 1200),
	(19, 31, 30, 2, 680),
	(20, 31, 17, 4, 180),
	(21, 31, 26, 4, 180),
	(22, 32, 9, 1, 299),
	(23, 33, 9, 1, 299),
	(24, 34, 23, 4, 620),
	(25, 34, 29, 1, 750),
	(26, 34, 9, 1, 299),
	(27, 35, 23, 1, 620),
	(28, 36, 9, 1, 299),
	(29, 37, 22, 1, 550),
	(30, 38, 20, 1, 1300),
	(31, 39, 17, 1, 180),
	(32, 40, 18, 1, 190),
	(33, 41, 2, 6, 350),
	(34, 42, 29, 8, 750),
	(44, 64, 23, 2, 620),
	(45, 65, 24, 5, 120),
	(46, 66, 25, 1, 150),
	(47, 67, 26, 3, 180),
	(48, 68, 27, 2, 650),
	(54, 74, 3, 2, 1400),
	(55, 75, 4, 4, 1350),
	(56, 76, 5, 1, 420),
	(57, 77, 6, 3, 1100),
	(58, 78, 7, 2, 1600),
	(59, 79, 8, 1, 1200),
	(60, 80, 9, 5, 299),
	(61, 81, 10, 2, 1000),
	(62, 82, 11, 1, 590),
	(63, 83, 12, 3, 1500),
	(65, 85, 14, 4, 450),
	(66, 86, 15, 1, 220),
	(67, 87, 16, 2, 650),
	(68, 88, 17, 3, 180),
	(69, 41, 10, 1, 1000),
	(70, 42, 11, 5, 590),
	(71, 43, 12, 1, 1500),
	(72, 44, 13, 2, 700),
	(73, 45, 14, 3, 450),
	(74, 46, 15, 1, 220),
	(75, 47, 16, 4, 650),
	(76, 48, 17, 2, 180),
	(83, 103, 22, 4, 550),
	(84, 104, 23, 3, 620),
	(85, 105, 24, 2, 120),
	(86, 106, 25, 1, 150),
	(87, 107, 26, 4, 180),
	(88, 108, 27, 2, 650),
	(89, 109, 28, 3, 1250),
	(90, 110, 29, 1, 750),
	(91, 111, 30, 2, 680),
	(92, 112, 1, 3, 850),
	(93, 113, 2, 1, 350),
	(94, 114, 3, 2, 1400),
	(95, 115, 4, 4, 1350),
	(96, 116, 5, 1, 420),
	(97, 117, 6, 5, 1100),
	(98, 118, 7, 2, 1600),
	(99, 119, 8, 1, 1200),
	(100, 120, 9, 4, 299),
	(101, 121, 10, 2, 1000),
	(102, 122, 11, 3, 590),
	(103, 123, 12, 1, 1500),
	(104, 124, 13, 2, 700),
	(105, 125, 14, 4, 450),
	(106, 126, 15, 1, 220),
	(107, 127, 16, 3, 650),
	(108, 128, 17, 2, 180),
	(109, 129, 18, 1, 190),
	(110, 130, 19, 5, 200),
	(111, 131, 20, 2, 1300),
	(112, 132, 21, 1, 480),
	(113, 133, 22, 4, 550),
	(114, 134, 23, 2, 620),
	(115, 135, 24, 3, 120),
	(116, 136, 25, 1, 150),
	(117, 137, 26, 4, 180),
	(118, 138, 27, 2, 650),
	(119, 139, 28, 3, 1250),
	(120, 140, 29, 1, 750),
	(121, 141, 30, 2, 680),
	(122, 144, 8, 7, 1200),
	(123, 145, 29, 6, 750),
	(124, 145, 9, 6, 299),
	(125, 146, 25, 5, 150);

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
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.user: ~14 rows (approximately)
INSERT INTO `user` (`id`, `ime`, `prezime`, `email`, `username`, `password`, `role`, `created_at`) VALUES
	(1, '0', '0', '0', 'iwana', '123123123', 'admin', '2025-11-03 15:32:56'),
	(7, 'Ivana ', 'ffff', 'iwana994994@h2il.com', '11123', '123123123', 'user', '2025-03-06 08:03:20'),
	(22, '0', '0', 'anastasija@anastasija', 'anastasija', 'anastasija', 'admin', '2025-11-03 15:35:10'),
	(24, 'Marko', 'Marković', 'marko.markovic@example.com', 'marko123', 'sifra123', 'user', '2025-03-10 14:00:52'),
	(25, 'Ana', 'Anić', 'ana.anic@example.com', 'ana_1990', 'lozinka456', 'user', '2025-03-10 14:00:52'),
	(26, 'Petar', 'Petrović', 'petar.petrovic@example.com', 'petar_p', 'lozinka789', 'user', '2025-03-10 14:00:52'),
	(27, 'Jelena', 'Jovanović', 'jelena.jovanovic@example.com', 'jelena01', 'sifra987', 'user', '2025-03-10 14:00:52'),
	(28, 'Ivan', 'Ivić', 'ivan.ivic@example.com', 'ivan_123', 'lozinka654', 'user', '2025-03-10 14:00:52'),
	(29, 'Marija', 'Marić', 'marija.maric@example.com', 'marija2025', 'lozinka1234', 'user', '2025-03-10 14:00:52'),
	(30, 'Nikola', 'Nikolić', 'nikola.nikolic@example.com', 'nikola_88', 'lozinka5678', 'user', '2025-03-10 14:00:52'),
	(31, 'Tanja', 'Tanović', 'tanja.tanovic@example.com', 'tanja1985', 'tajna123', 'user', '2025-03-10 14:00:52'),
	(33, 'Maja', 'Majkić', 'maja.majkic@example.com', 'maja_maja', 'sifra1122', 'user', '2025-03-10 14:00:52'),
	(37, 'Sara', 'Sarić', 'sara.saric@example.com', 'sara1234', 'mypassword999', 'user', '2025-03-10 14:00:52'),
	(39, 'anastasija', 'anastasija', 'iwana994994@hotmail.com', 'anastasija1233', '123456789', 'user', '2025-03-18 07:18:54');

-- Dumping structure for table poslasticarnica.usluge
CREATE TABLE IF NOT EXISTS `usluge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.usluge: ~8 rows (approximately)
INSERT INTO `usluge` (`id`, `naziv`, `opis`, `slika`, `created_at`) VALUES
	(1, 'Besplatna dostava iznad 2.000 dinara', 'Uživaj u slatkišima bez brige o troškovima dostave! Za sve porudžbine preko 2.000 dinara, dostava je na nas. Naruči omiljene poslastice i mi ćemo ih doneti pravo na tvoja vrata.', 'korisnickaStrana/public/slike/freeshipping.jpg', '2025-11-11 19:04:30'),
	(2, 'Personalizacija torti po tvom ukusu', 'Pretvori svoju viziju u slatkiš! Nudimo uslugu personalizacije torti – odaberi ukus, oblik i dekoraciju, a mi ćemo kreirati remek-delo za tvoj poseban dan.', 'korisnickaStrana/public/slike/personalized.jpg', '2025-11-11 19:04:30'),
	(3, 'Brza narudžba za hitne proslave', 'Slavi bez stresa! Uz našu uslugu brze narudžbe, tvoja torta ili kolači biće spremni za preuzimanje ili dostavu u roku od 24 sata. Idealno za iznenadne slatke trenutke.', 'admin/model/upload/Sale1.jpg', '2025-11-11 19:04:30'),
	(4, 'Poklon paketi za svaku priliku', 'Iznenadi svoje najmilije! Pripremamo elegantne poklon pakete sa tortama, kolačima ili kombinacijom slatkiša po tvom izboru – savršeno za rođendane, godišnjice ili jednostavno lepe geste.', 'korisnickaStrana/public/slike/cakegift.jpg', '2025-11-11 19:04:30'),
	(5, 'Pretplata na slatkiše meseca', 'Zasladimo ti svaki mesec! Uz našu uslugu pretplate, svakog meseca dobijaš novu selekciju sezonskih torti ili kolača po specijalnoj ceni, direktno na tvoj prag.', 'admin/model/upload/fastshipping.jpg', '2025-11-11 19:04:30'),
	(6, 'Dekoracija torti po želji', 'Odaberite način dekoracije vaše torte — od svečanih natpisa do ručno pravljenih figura od fondana. Učinite svaku tortu jedinstvenom!', 'korisnickaStrana/public/slike/CakeDecorating.jpg', '2025-11-12 18:08:11'),
	(7, 'Korporativne narudžbine i brendiranje', 'Pripremamo torte i kolače sa logotipom vaše firme, idealne za korporativne proslave, jubileje ili poklone klijentima. Spoj ukusa i profesionalnog izgleda.', 'korisnickaStrana/public/slike/CorporateCake.jpg', '2025-11-12 18:08:11'),
	(8, 'Catering za proslave i događaje', 'Obezbedite slatki sto za svaku priliku! Nudimo kompletne poslastičarske aranžmane za rođendane, venčanja, konferencije i druge događaje.', 'korisnickaStrana/public/slike/EventCatering.jpg', '2025-11-12 18:08:11');

-- Dumping structure for table poslasticarnica.vesti
CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.vesti: ~8 rows (approximately)
INSERT INTO `vesti` (`id`, `naziv`, `opis`, `slika`) VALUES
	(1, 'Sezonska čarolija: Prolećne torte stižu na sajt!', 'Uživajte u svežim ukusima proleća uz naše nove torte inspirisane sezonom – jagode, limun i cvetne note samo su početak! Od danas su dostupne za porudžbinu na sajtu. Naručite svoj komad prolećne radosti i slatkoće već sada!', 'korisnickaStrana/public/slike/springcakes.jpg'),
	(2, 'Brza dostava torti sada uključena u ponudu!', 'Dobra vest za sve sladokusce: uvodimo ekspresnu dostavu za sve narudžbine torti preko sajta! Poručite do podneva, a mi ćemo vašu slatku poslasticu isporučiti na vašu adresu isti dan. Isprobajte već danas!', 'korisnickaStrana/public/slike/dostava.jpg'),
	(3, 'Poklon uz svaku tortu ovog meseca!', 'Slavimo ljubav prema slatkišima – uz svaku tortu naručenu preko sajta do kraja meseca dobijate mini set naših domaćih kolačića na poklon! Iskoristite priliku i zasladite dan sebi ili dragim osobama.', 'korisnickaStrana/public/slike/minitorte.jpg'),
	(4, 'Novost u ponudi: Personalizovane torte sada dostupne online!', 'Dragi ljubitelji slatkiša, imamo sjajne vesti za vas! Od sada možete naručiti svoje omiljene torte direktno preko našeg sajta i dodatno ih personalizovati po želji – od ukusa do dekoracije. Proslavite posebne trenutke uz naše jedinstvene torte!', 'admin/model/upload/custom-cake.jpg'),
	(13, 'Letnje osveženje: Novi sladoledni kolači!', 'Stigla je letnja ponuda! Uživajte u kremastoj sladolednoj torti sa ukusom vanile, čokolade, jagode ili pistaća. Idealno za vruće dane i lagano uživanje.', 'korisnickaStrana/public/slike/IceCreamCake.jpg'),
	(14, 'Nova radionica ukrašavanja torti!', 'Pridružite se našoj radionici ukrašavanja torti i naučite tajne profesionalaca! Broj mesta je ograničen, a svi učesnici dobijaju sertifikat i poklon torticu.', 'korisnickaStrana/public/slike/CakeDecor.jpg'),
	(15, 'Jeseni u znaku kestena i čokolade!', 'Sezona toplih ukusa je stigla! Probajte naše nove torte sa kestenom, čokoladom i karamelom — idealne za jesenje dane uz topli napitak.', 'korisnickaStrana/public/slike/Limited.jpg'),
	(16, 'Specijalna ponuda za praznike!', 'Spremite se za praznične dane uz naše ekskluzivne torte i kolače! Poručite ranije i ostvarite 15% popusta na porudžbine do 20. decembra.', 'korisnickaStrana/public/slike/Sale1.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
