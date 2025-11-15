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
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `cena` double NOT NULL,
  `zalihe` int(11) NOT NULL,
  `slika` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.akcije: ~8 rows (approximately)
INSERT INTO `akcije` (`id`, `naziv`, `opis`, `cena`, `zalihe`, `slika`) VALUES
	(1, 'Popust na voćnu pitu – 20% jeftinije', 
 'Uživaj u sveže pečenoj voćnoj piti po specijalnoj akcijskoj ceni! Samo ovog meseca – 20% popusta na online narudžbine.',
 200, 50, 'korisnickaStrana/public/slike/FruityPie.jpg'),
	(2, 'Čokoladna torta + besplatna dostava',
 'Poruči čokoladnu tortu za 800 dinara i uživaj uz besplatnu dostavu! Akcija traje do kraja nedelje.',
 800, 30, 'korisnickaStrana/public/slike/9.jpg'),
	(3, 'Kupi dva tiramisu, treći gratis',
 'Naruči dva tiramisua po 350 dinara, treći dobiješ besplatno! Ponuda važi preko sajta.',
 350, 40, 'korisnickaStrana/public/slike/tiramisu.jpg'),
	(4, 'Srećni sati – Red Velvet popust 15%',
 'Od 17h do 19h uživaj u našem Red Velvet parčetu uz posebnih 15% popusta! Samo tokom srećnih sati.',
 300, 60, 'korisnickaStrana/public/slike/RedVelvet2.jpg'),
	(5, 'Vikend akcija – krempita 300 dinara',
 'Tokom vikenda, tradicionalna domaća krempita po specijalnoj ceni od 300 dinara! Savršena za slatki predah.',
 300, 25, 'korisnickaStrana/public/slike/Creampie.jpg'),
	(6, 'Prva narudžbina + Čoko mousse popust',
 'Prva online narudžbina? Probaj našu čoko mousse tortu po sniženoj ceni uz dodatni popust samo za nove kupce!',
 450, 35, 'korisnickaStrana/public/slike/chocomousse.jpg'),
	(7, 'Pistać torta specijal – 250 dinara',
 'Ekskluzivna ponuda: parče pistać torte po specijalnoj ceni od 250 dinara! Samo za online porudžbine radnim danima.',
 250, 45, 'korisnickaStrana/public/slike/PistachioCake.jpg'),
	(8, 'Švarcvald dan – 25% popusta',
 'Svake srede, uživaj u švarcvald torti uz 25% popusta! Savršena kombinacija čokolade, višanja i šlaga.',
 600, 20, 'korisnickaStrana/public/slike/Schvartzvald.jpg'),
	(9, 'Cheesecake 2+1 gratis',
 'Kupi dva parčeta cheesecake-a, treći dobijaš gratis! Ponuda važi tokom vikenda samo online.',
 600, 30, 'korisnickaStrana/public/slike/Cheesecake2.jpg'),
	(10, 'Medena pita — 20% popusta',
 'Naša domaća medena pita po sniženoj ceni tokom radnih dana!',
 800, 25, 'korisnickaStrana/public/slike/HoneyCake.jpg'),
	(11, 'Limuntart specijal – kolač + popust',
 'Osveži dan limunastim Limuntartom! Samo danas po specijalnoj ceni — idealno za ljubitelje laganih, osvežavajućih kolača.',
 400, 40, 'korisnickaStrana/public/slike/LemonTart.jpg'),
	(12, 'Vikend čoko specijal – Torta 3 čokolade',
 'Dva parčeta torte 3 čokolade po specijalnoj ceni! Savršeno za sve ljubitelje bogatih čoko kombinacija.',
 1000, 35, 'korisnickaStrana/public/slike/TripleChoco.jpg'),
	(13, 'Torta sa kestenom — specijalna cena',
 'Sezonska torta sa kestenom po sniženoj ceni — količine ograničene!',
 700, 20, 'korisnickaStrana/public/slike/ChesnutCake111.jpg'),
	(14, 'Medenjaci – akcijska cena',
 'Domaći medenjaci po specijalnoj ponudi ovog meseca! Savršeni uz kafu ili čaj, hrskavi i puni ukusa.',
 250, 50, 'korisnickaStrana/public/slike/GingerBread.jpg');


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

-- Dumping structure for table poslasticarnica.porudzbina
CREATE TABLE IF NOT EXISTS `porudzbina` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `nacin_placanja` varchar(30) NOT NULL DEFAULT 'gotovina',
  `datum_porudzbine` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.porudzbina: ~4 rows (approximately)
INSERT INTO `porudzbina` (`id`, `ime`, `prezime`, `adresa`, `telefon`, `nacin_placanja`, `datum_porudzbine`) VALUES
	(3, 'iwana', 'Markovic', 'zore', '063', 'gotovina', '2025-11-07 17:21:04'),
	(4, 'iwana', 'Markovic', 'zore', '063', 'gotovina', '2025-11-07 17:30:01'),
	(5, 'iwana', 'Markovic', 'zore', '063', 'gotovina', '2025-11-07 17:35:36'),
	(16, 'ivana', 'markovic', 'adada', '06', 'gotovina', '2025-11-07 18:26:08');

-- Dumping structure for table poslasticarnica.poruka
CREATE TABLE IF NOT EXISTS `poruka` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `poruka` text NOT NULL,
  `ime` text NOT NULL,
  `email` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.poruka: ~7 rows (approximately)
INSERT INTO `poruka` (`id`, `poruka`, `ime`, `email`, `datum`) VALUES
	(9, 'FFFFFFFFFFF', 'FFFF', 'FFFF', '2025-02-28 09:46:23'),
	(10, '1111111111', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:11:46'),
	(11, '22222222222\r\n\r\n', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:12:01'),
	(12, '33333333333', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:13:27'),
	(14, '45445', 'Ivana ', 'iwana994994@hotmail.com', '2025-03-06 08:17:59'),
	(17, '2323333333', 'RRRRRR', 'iwana994994@hotmail.comg', '2025-03-10 15:17:52'),
	(18, 'dsdsa', 'RRRR', 'iwana994994@gmail.com', '2025-03-18 08:52:13');

-- Dumping structure for table poslasticarnica.proizvod
CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL DEFAULT '0',
  `opis` varchar(255) NOT NULL,
  `kategorija` varchar(50) NOT NULL,
  `cena` double NOT NULL DEFAULT 0,
  `zalihe` int(11) NOT NULL DEFAULT 0,
  `slika` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `kategorija`, `cena`, `zalihe`, `slika`) VALUES
  (1, 'Voćna pita',
 'Hrskava pita sa sezonskim voćem i laganim kremom.', 'vocna',
 850, 18, 'korisnickaStrana/public/slike/FruityPie.jpg'),
  (2, 'Čokoladna torta',
 'Bogata torta od najfinije čokolade sa kremastim slojevima i glazurom od tamne čokolade. Neodoljivo iskustvo za prave čokoljupce.', 'cokoladna',
 350, 30, 'korisnickaStrana/public/slike/ChocoCake1.jpg'),
  (3, 'Tiramisu',
 'Italijanski klasik — lagani slojevi piškota natopljenih kafom, krem od mascarpone sira i fini kakao. Savršeno izbalansiran ukus.', 'tiramisu',
 1400, 9, 'korisnickaStrana/public/slike/tiramisu.jpg'),
  (4, 'Red Velvet',
 'Nežna “crvena baršun” torta sa krem sirom — popularna za sve prilike.', 'cokoladna',
 1350, 12, 'korisnickaStrana/public/slike/RedVelvet2.jpg'),
  (5, 'Mille-Feuille (Krempita)',
 'Lisnato testo u više slojeva sa vanila kremom — lagano i kremasto.',  'krempita',
 420, 28, 'korisnickaStrana/public/slike/Creampie.jpg'),
  (6, 'Čoko mus torta',
 'Pufnasta mus torta od fine čokolade, topi se u ustima.', 'cokoladna',
 1100, 16, 'korisnickaStrana/public/slike/ChocoMousse.jpg'),
  (7, 'Pistać torta',
 'Aromatična krema od pistaća i blagi biskvit — specijalitet kuće.', 'pistac',
 1600, 10, 'korisnickaStrana/public/slike/PistachioCake.jpg'),
  (8, 'Švarcvald torta',
 'Klasična čokoladna torta sa višnjama i šlagom — idealna za ljubitelje bogatih ukusa.','svarcvald',
 1200, 14, 'korisnickaStrana/public/slike/Schvartzvald.jpg'),
  (9, 'Cheesecake parče',
 'Kremasti užitak sa hrskavom podlogom i blagim ukusom vanile, preliven svežim voćnim prelivom — savršeno osveženje za svaku priliku.','cizkejk',
 299, 15, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
  (10, 'Medena pita',
 'Tradicionalna domaća poslastica sa slojevima medenog testa i nežnim filom od oraha i vanile. Idealna uz topli čaj ili kafu.', 'medena_pita',
 1000, 12, 'korisnickaStrana/public/slike/HoneyCake.jpg'),
  (11, 'Tart od limuna',
 'Osvežavajući limun tart sa prhkim testom i mirisnom kremom.', 'limun',
 590, 20, 'korisnickaStrana/public/slike/LemonTart.jpg'),
  (12, 'Torta “Tri čokolade”',
 'Bela, mlečna i crna čokolada u tri sloja — čokoladni maksimum.', 'tri_cokolade',
 1500, 12, 'korisnickaStrana/public/slike/TripleChoco.jpg'),
  (13, 'Torta sa kestenom',
 'Fina kombinacija kreme od kestena i čokolade, prelivene kakao glazurom. Posebno omiljena u jesenjim mesecima.',  'kesten',
 700, 15, 'korisnickaStrana/public/slike/ChesnutCake.jpg'),
  (14, 'Medenjaci pakovanje (200g)',
 'Domaći medenjaci sa začinima — idealni uz čaj ili kafu.', 'medenjaci',
 450, 35, 'korisnickaStrana/public/slike/GingerBread.jpg'),
  (15, 'Voćna torta',
 'Osvežavajuća torta sa slojevima laganog biskvita i kremom od sezonskog voća. Lagana, sočna i savršena za tople dane.', 'vocna',
 220, 20, 'korisnickaStrana/public/slike/FruitCake.jpg'), 
  (16, 'Čizkejk sa borovnicama',
 'Cheesecake sa prelivom od borovnica — osvežavajuća kiselo-slatka kombinacija.', 'cizkejk',
 650, 22, 'korisnickaStrana/public/slike/BlueCheesecake.jpg');

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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.stavke_porudzbine: ~25 rows (approximately)
INSERT INTO `stavke_porudzbine` (`id`, `porudzbina_id`, `proizvod_id`, `kolicina`, `cena`) VALUES
	(1, 1, 8, 1, 18),
	(2, 2, 8, 1, 18),
	(3, 3, 7, 1, 12.5),
	(4, 4, 7, 1, 12.5),
	(5, 5, 7, 1, 12.5),
	(6, 6, 7, 1, 12.5),
	(7, 7, 8, 1, 18),
	(8, 8, 8, 1, 18),
	(9, 9, 7, 1, 12.5),
	(10, 10, 8, 1, 18),
	(11, 11, 8, 1, 18),
	(12, 12, 8, 1, 18),
	(13, 13, 7, 1, 12.5),
	(14, 14, 7, 1, 12.5),
	(15, 15, 8, 1, 18),
	(16, 1, 7, 1, 12.5),
	(17, 1, 124, 1, 321),
	(18, 2, 7, 1, 12.5),
	(19, 3, 8, 7, 18),
	(20, 4, 6, 20, 15.99),
	(21, 5, 8, 20, 18),
	(22, 5, 7, 1, 12.5),
	(23, 5, 4, 20, 1000),
	(24, 16, 7, 20, 12.5),
	(25, 16, 8, 20, 18);

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
	(1, '0', '0', '0', 'iwana', '123123123', 'admin', '2025-11-03 16:32:56'),
	(7, 'Ivana ', 'ffff', 'iwana994994@h2il.com', '11123', '123123123', 'user', '2025-03-06 09:03:20'),
	(22, '0', '0', 'anastasija@anastasija', 'anastasija', 'anastasija', 'admin', '2025-11-03 16:35:10'),
	(24, 'Marko', 'Marković', 'marko.markovic@example.com', 'marko123', 'sifra123', 'user', '2025-03-10 15:00:52'),
	(25, 'Ana', 'Anić', 'ana.anic@example.com', 'ana_1990', 'lozinka456', 'user', '2025-03-10 15:00:52'),
	(26, 'Petar', 'Petrović', 'petar.petrovic@example.com', 'petar_p', 'lozinka789', 'user', '2025-03-10 15:00:52'),
	(27, 'Jelena', 'Jovanović', 'jelena.jovanovic@example.com', 'jelena01', 'sifra987', 'user', '2025-03-10 15:00:52'),
	(28, 'Ivan', 'Ivić', 'ivan.ivic@example.com', 'ivan_123', 'lozinka654', 'user', '2025-03-10 15:00:52'),
	(29, 'Marija', 'Marić', 'marija.maric@example.com', 'marija2025', 'lozinka1234', 'user', '2025-03-10 15:00:52'),
	(30, 'Nikola', 'Nikolić', 'nikola.nikolic@example.com', 'nikola_88', 'lozinka5678', 'user', '2025-03-10 15:00:52'),
	(31, 'Tanja', 'Tanović', 'tanja.tanovic@example.com', 'tanja1985', 'tajna123', 'user', '2025-03-10 15:00:52'),
	(33, 'Maja', 'Majkić', 'maja.majkic@example.com', 'maja_maja', 'sifra1122', 'user', '2025-03-10 15:00:52'),
	(37, 'Sara', 'Sarić', 'sara.saric@example.com', 'sara1234', 'mypassword999', 'user', '2025-03-10 15:00:52'),
	(39, 'anastasija', 'anastasija', 'iwana994994@hotmail.com', 'anastasija1233', '123456789', 'user', '2025-03-18 08:18:54');

-- Dumping structure for table poslasticarnica.usluge
CREATE TABLE IF NOT EXISTS `usluge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.usluge: ~5 rows (approximately)
INSERT INTO `usluge` (`id`, `naziv`, `opis`, `slika`, `created_at`) VALUES
	(1, 'Besplatna dostava iznad 2.000 dinara', 'Uživaj u slatkišima bez brige o troškovima dostave! Za sve porudžbine preko 2.000 dinara, dostava je na nas. Naruči omiljene poslastice i mi ćemo ih doneti pravo na tvoja vrata.', 'korisnickaStrana/public/slike/freeshipping.jpg', '2025-03-06 19:56:23'),
	(2, 'Personalizacija torti po tvom ukusu', 'Pretvori svoju viziju u slatkiš! Nudimo uslugu personalizacije torti – odaberi ukus, oblik i dekoraciju, a mi ćemo kreirati remek-delo za tvoj poseban dan.', 'korisnickaStrana/public/slike/personalized.jpg', '2025-03-06 19:57:01'),
	(3, 'Brza narudžba za hitne proslave', 'Slavi bez stresa! Uz našu uslugu brze narudžbe, tvoja torta ili kolači biće spremni za preuzimanje ili dostavu u roku od 24 sata. Idealno za iznenadne slatke trenutke.', 'korisnickaStrana/public/slike/fastshipping.jpg', '2025-03-06 19:57:01'),
	(4, 'Poklon paketi za svaku priliku', 'Iznenadi svoje najmilije! Pripremamo elegantne poklon pakete sa tortama, kolačima ili kombinacijom slatkiša po tvom izboru – savršeno za rođendane, godišnjice ili jednostavno lepe geste.', 'korisnickaStrana/public/slike/cakegift.jpg', '2025-03-06 19:57:01'),
	(5, 'Pretplata na slatkiše meseca', 'Zasladimo ti svaki mesec! Uz našu uslugu pretplate, svakog meseca dobijaš novu selekciju sezonskih torti ili kolača po specijalnoj ceni, direktno na tvoj prag.', 'admin/model/upload/fastshipping.jpg', '2025-03-06 19:57:01'),
	(6, 'Dekoracija torti po želji', 'Odaberite način dekoracije vaše torte — od svečanih natpisa do ručno pravljenih figura od fondana. Učinite svaku tortu jedinstvenom!', 'korisnickaStrana/public/slike/DecoratedCake.jpg', '2025-11-12 19:57:01'),
	(7, 'Korporativne narudžbine i brendiranje','Pripremamo torte i kolače sa logotipom vaše firme, idealne za korporativne proslave, jubileje ili poklone klijentima. Spoj ukusa i profesionalnog izgleda.','korisnickaStrana/public/slike/CorporateCake.jpg', '2025-11-12 19:57:01'),
	(8, 'Catering za proslave i događaje','Obezbedite slatki sto za svaku priliku! Nudimo kompletne poslastičarske aranžmane za rođendane, venčanja, konferencije i druge događaje.','korisnickaStrana/public/slike/EventCatering.jpg', '2025-11-12 19:57:01');

-- Dumping structure for table poslasticarnica.vesti
CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table poslasticarnica.vesti: ~4 rows (approximately)
INSERT INTO `vesti` (`id`, `naziv`, `opis`, `slika`) VALUES
	(1, 'Sezonska čarolija: Prolećne torte stižu na sajt!', 'Uživajte u svežim ukusima proleća uz naše nove torte inspirisane sezonom – jagode, limun i cvetne note samo su početak! Od danas su dostupne za porudžbinu na sajtu. Naručite svoj komad prolećne radosti i slatkoće već sada!', 'korisnickaStrana/public/slike/springcakes.jpg'),
	(2, 'Brza dostava torti sada uključena u ponudu!', 'Dobra vest za sve sladokusce: uvodimo ekspresnu dostavu za sve narudžbine torti preko sajta! Poručite do podneva, a mi ćemo vašu slatku poslasticu isporučiti na vašu adresu isti dan. Isprobajte već danas!', 'korisnickaStrana/public/slike/dostava.jpg'),
	(3, 'Poklon uz svaku tortu ovog meseca!', 'Slavimo ljubav prema slatkišima – uz svaku tortu naručenu preko sajta do kraja meseca dobijate mini set naših domaćih kolačića na poklon! Iskoristite priliku i zasladite dan sebi ili dragim osobama.', 'korisnickaStrana/public/slike/minitorte.jpg'),
	(4, 'Novost u ponudi: Personalizovane torte sada dostupne online!', 'Dragi ljubitelji slatkiša, imamo sjajne vesti za vas! Od sada možete naručiti svoje omiljene torte direktno preko našeg sajta i dodatno ih personalizovati po želji – od ukusa do dekoracije. Proslavite posebne trenutke uz naše jedinstvene torte!', 'admin/model/upload/custom-cake.jpg'),
	(5, 'Letnje osveženje: Novi sladoledni kolači!','Stigla je letnja ponuda! Uživajte u kremastoj sladolednoj torti sa ukusom vanile, čokolade, jagode ili pistaća. Idealno za vruće dane i lagano uživanje.',  'korisnickaStrana/public/slike/IceCreamCake.jpg'),
	(6, 'Nova radionica ukrašavanja torti!', 'Pridružite se našoj radionici ukrašavanja torti i naučite tajne profesionalaca! Broj mesta je ograničen, a svi učesnici dobijaju sertifikat i poklon torticu.', 'korisnickaStrana/public/slike/CakeDecor.jpg'),
	(7, 'Jeseni u znaku kestena i čokolade!',  'Sezona toplih ukusa je stigla! Probajte naše nove torte sa kestenom, čokoladom i karamelom — idealne za jesenje dane uz topli napitak.', 'korisnickaStrana/public/slike/Limited.jpg'),
	(8, 'Specijalna ponuda za praznike!','Spremite se za praznične dane uz naše ekskluzivne torte i kolače! Poručite ranije i ostvarite 15% popusta na porudžbine do 20. decembra.','korisnickaStrana/public/slike/Sale1.jpg');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
