-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 12, 2025 at 07:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poslasticarnica`
--
CREATE DATABASE IF NOT EXISTS `poslasticarnica` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `poslasticarnica`;

-- --------------------------------------------------------

--
-- Table structure for table `akcije`
--

CREATE TABLE IF NOT EXISTS `akcije` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `cena` double NOT NULL,
  `zalihe` int(11) NOT NULL,
  `slika` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akcije`
--

INSERT INTO `akcije` (`id`, `naziv`, `opis`, `cena`, `zalihe`, `slika`) VALUES
(1, 'Popust na voćnu tortu parče – 20% jeftinije', 'Osveži se uz voćnu tortu parče po akcijskoj ceni od 200 dinara! Samo ovog meseca, 20% popusta pri narudžbini preko sajta.', 200, 50, 'korisnickaStrana/public/slike/vocnaTortaParce.jpg'),
(2, 'Čokoladna torta + besplatna dostava', 'Poruči čokoladnu tortu za 800 dinara i uživaj uz besplatnu dostavu! Akcija traje do kraja nedelje.', 800, 30, 'korisnickaStrana/public/slike/19.jpg'),
(3, 'Kupi dva tiramisu, treći gratis', 'Naruči dva tiramisua po 350 dinara, treći dobiješ besplatno! Ponuda važi preko sajta.', 350, 40, 'korisnickaStrana/public/slike/tiramisu.jpg'),
(4, 'Srećni sati – 15% popusta na sve!', 'Od 17h do 19h, sve torte i kolači sniženi uz dodatnih 15% popusta! Požurite!', 300, 60, 'korisnickaStrana/public/slike/srecni_sati.jpg'),
(5, 'Vikend akcija – svaka torta 500 dinara', 'Sve torte po ceni od samo 500 dinara, ovog vikenda! Požurite i ne propustite priliku da uživate u eksploziji ukusa!', 500, 25, 'korisnickaStrana/public/slike/Sale.jpg'),
(6, 'Prva narudžbina i jož 10% popusta!', 'Prva narudžbina? Sve po sniženoj ceni uz 10% popusta – od torti do tiramisua! Važi samo za online porudžbine.', 450, 35, 'korisnickaStrana/public/slike/10percentoff.jpg'),
(7, 'Voćna torta parče + kafa za 250 dinara', 'Uživaj u parčetu voćne torte i kafi za samo 250 dinara! Ponuda važi radnim danima preko sajta.', 250, 45, 'korisnickaStrana/public/slike/cakecoffee.jpg'),
(8, 'Čokoladni dan – 25% popusta', 'Svake srede, čokoladna torta samo 600 dinara uz 25% popusta! Naruči preko sajta i zasladi dan.', 600, 20, 'korisnickaStrana/public/slike/chocoslice.jpg'),
(15, 'Cheesecake 2+1 gratis', 'Kupi dva parčeta cheesecake-a, treći dobijaš gratis! Ponuda važi tokom vikenda samo online.', 600, 30, 'korisnickaStrana/public/slike/Cheesecake2.jpg'),
(16, 'Medena pita — 20% popusta', 'Naša domaća medena pita po sniženoj ceni tokom radnih dana!', 800, 25, 'korisnickaStrana/public/slike/HoneyCake.jpg'),
(17, 'Tiramisu + kafa paket', 'Uživaj u tiramisuu i kafi po specijalnoj ceni — savršen slatki predah.', 400, 40, 'korisnickaStrana/public/slike/TiramisuAndCoffee.jpg'),
(18, 'Čoko vikend — 2 parčeta za 1000 RSD', 'Dva parčeta torte po Vašem izboru za samo 1000 RSD!', 1000, 35, 'korisnickaStrana/public/slike/Cakes.jpg'),
(19, 'Torta sa kestenom — specijalna cena', 'Sezonska torta sa kestenom po sniženoj ceni — količine ograničene!', 700, 20, 'korisnickaStrana/public/slike/ChesnutCake111.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE IF NOT EXISTS `kontakt` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adresa` varchar(50) NOT NULL DEFAULT '0',
  `telefon` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `working_hours` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `adresa`, `telefon`, `email`, `working_hours`) VALUES
(3, 'Nikole Pasica 28, Nis', '+381 11 1234 567', 'kontakt@example.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `porudzbina`
--

CREATE TABLE IF NOT EXISTS `porudzbina` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `ime` varchar(50) NOT NULL,
  `prezime` varchar(50) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `telefon` varchar(20) NOT NULL,
  `nacin_placanja` varchar(30) NOT NULL DEFAULT 'gotovina',
  `datum_porudzbine` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `porudzbina`
--

INSERT INTO `porudzbina` (`id`, `ime`, `prezime`, `adresa`, `telefon`, `nacin_placanja`, `datum_porudzbine`) VALUES
(3, 'iwana', 'Markovic', 'zore', '063', 'gotovina', '2025-11-07 17:21:04'),
(4, 'iwana', 'Markovic', 'zore', '063', 'gotovina', '2025-11-07 17:30:01'),
(5, 'iwana', 'Markovic', 'zore', '063', 'gotovina', '2025-11-07 17:35:36'),
(16, 'ivana', 'markovic', 'adada', '06', 'gotovina', '2025-11-07 18:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `poruka`
--

CREATE TABLE IF NOT EXISTS `poruka` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `poruka` text NOT NULL,
  `ime` text NOT NULL,
  `email` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poruka`
--

INSERT INTO `poruka` (`id`, `poruka`, `ime`, `email`, `datum`) VALUES
(9, 'FFFFFFFFFFF', 'FFFF', 'FFFF', '2025-02-28 09:46:23'),
(10, '1111111111', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:11:46'),
(11, '22222222222\r\n\r\n', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:12:01'),
(12, '33333333333', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:13:27'),
(14, '45445', 'Ivana ', 'iwana994994@hotmail.com', '2025-03-06 08:17:59'),
(17, '2323333333', 'RRRRRR', 'iwana994994@hotmail.comg', '2025-03-10 15:17:52'),
(18, 'dsdsa', 'RRRR', 'iwana994994@gmail.com', '2025-03-18 08:52:13');

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE IF NOT EXISTS `proizvod` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(50) NOT NULL DEFAULT '0',
  `opis` varchar(255) NOT NULL,
  `cena` double NOT NULL DEFAULT 0,
  `zalihe` int(11) NOT NULL DEFAULT 0,
  `slika` varchar(255) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cena`, `zalihe`, `slika`) VALUES
(3, 'Cheesecake parče', 'Kremasti užitak sa hrskavom podlogom i blagim ukusom vanile, preliven svežim voćnim prelivom — savršeno osveženje za svaku priliku.', 299, 15, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(4, 'Medena pita', 'Tradicionalna domaća poslastica sa slojevima medenog testa i nežnim filom od oraha i vanile. Idealna uz topli čaj ili kafu.', 1000, 12, 'korisnickaStrana/public/slike/HoneyCake.jpg'),
(5, 'Tiramisu', 'Italijanski klasik — lagani slojevi piškota natopljenih kafom, krem od mascarpone sira i fini kakao. Savršeno izbalansiran ukus.', 1400, 9, 'korisnickaStrana/public/slike/tiramisu.jpg'),
(6, 'Čokoladna torta', 'Bogata torta od najfinije čokolade sa kremastim slojevima i glazurom od tamne čokolade. Neodoljivo iskustvo za prave čokoljupce.', 350, 30, 'korisnickaStrana/public/slike/ChocoCake1.jpg'),
(7, 'Voćna torta', 'Osvežavajuća torta sa slojevima laganog biskvita i kremom od sezonskog voća. Lagana, sočna i savršena za tople dane.', 220, 20, 'korisnickaStrana/public/slike/FruitCake.jpg'),
(8, 'Torta sa kestenom', 'Fina kombinacija kreme od kestena i čokolade, prelivene kakao glazurom. Posebno omiljena u jesenjim mesecima.', 700, 15, 'korisnickaStrana/public/slike/ChesnutCake.jpg'),
(126, 'Švarcvald torta', 'Klasična čokoladna torta sa višnjama i šlagom — idealna za ljubitelje bogatih ukusa.', 1200, 14, 'korisnickaStrana/public/slike/Schvartzvald.jpg'),
(127, 'Red Velvet', 'Nežna “crvena baršun” torta sa krem sirom — popularna za sve prilike.', 1350, 12, 'korisnickaStrana/public/slike/RedVelvet2.jpg'),
(128, 'Voćna pita', 'Hrskava pita sa sezonskim voćem i laganim kremom.', 850, 18, 'korisnickaStrana/public/slike/FruityPie.jpg'),
(129, 'Mille-Feuille (Krempita)', 'Lisnato testo u više slojeva sa vanila kremom — lagano i kremasto.', 420, 28, 'korisnickaStrana/public/slike/Creampie.jpg'),
(130, 'Čizkejk sa borovnicama', 'Cheesecake sa prelivom od borovnica — osvežavajuća kiselo-slatka kombinacija.', 650, 22, 'korisnickaStrana/public/slike/BlueCheesecake.jpg'),
(131, 'Čoko mus torta', 'Pufnasta mus torta od fine čokolade, topi se u ustima.', 1100, 16, 'korisnickaStrana/public/slike/ChocoMousse.jpg'),
(132, 'Pistać torta', 'Aromatična krema od pistaća i blagi biskvit — specijalitet kuće.', 1600, 10, 'korisnickaStrana/public/slike/PistachioCake.jpg'),
(133, 'Tart od limuna', 'Osvežavajući limun tart sa prhkim testom i mirisnom kremom.', 590, 20, 'korisnickaStrana/public/slike/LemonTart.jpg'),
(134, 'Torta “Tri čokolade”', 'Bela, mlečna i crna čokolada u tri sloja — čokoladni maksimum.', 1500, 12, 'korisnickaStrana/public/slike/TripleChoco.jpg'),
(135, 'Medenjaci pakovanje (200g)', 'Domaći medenjaci sa začinima — idealni uz čaj ili kafu.', 450, 35, 'korisnickaStrana/public/slike/GingerBread.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_porudzbine`
--

CREATE TABLE IF NOT EXISTS `stavke_porudzbine` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `porudzbina_id` int(10) UNSIGNED NOT NULL,
  `proizvod_id` int(10) UNSIGNED NOT NULL,
  `kolicina` int(11) NOT NULL,
  `cena` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `porudzbina_id` (`porudzbina_id`),
  KEY `proizvod_id` (`proizvod_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
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

--
-- Dumping data for table `user`
--

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

-- --------------------------------------------------------

--
-- Table structure for table `usluge`
--

CREATE TABLE IF NOT EXISTS `usluge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usluge`
--

INSERT INTO `usluge` (`id`, `naziv`, `opis`, `slika`, `created_at`) VALUES
(1, 'Besplatna dostava iznad 2.000 dinara', 'Uživaj u slatkišima bez brige o troškovima dostave! Za sve porudžbine preko 2.000 dinara, dostava je na nas. Naruči omiljene poslastice i mi ćemo ih doneti pravo na tvoja vrata.', 'korisnickaStrana/public/slike/freeshipping.jpg', '2025-11-11 19:04:30'),
(2, 'Personalizacija torti po tvom ukusu', 'Pretvori svoju viziju u slatkiš! Nudimo uslugu personalizacije torti – odaberi ukus, oblik i dekoraciju, a mi ćemo kreirati remek-delo za tvoj poseban dan.', 'korisnickaStrana/public/slike/personalized.jpg', '2025-11-11 19:04:30'),
(3, 'Brza narudžba za hitne proslave', 'Slavi bez stresa! Uz našu uslugu brze narudžbe, tvoja torta ili kolači biće spremni za preuzimanje ili dostavu u roku od 24 sata. Idealno za iznenadne slatke trenutke.', 'korisnickaStrana/public/slike/fastshipping.jpg', '2025-11-11 19:04:30'),
(4, 'Poklon paketi za svaku priliku', 'Iznenadi svoje najmilije! Pripremamo elegantne poklon pakete sa tortama, kolačima ili kombinacijom slatkiša po tvom izboru – savršeno za rođendane, godišnjice ili jednostavno lepe geste.', 'korisnickaStrana/public/slike/cakegift.jpg', '2025-11-11 19:04:30'),
(5, 'Pretplata na slatkiše meseca', 'Zasladimo ti svaki mesec! Uz našu uslugu pretplate, svakog meseca dobijaš novu selekciju sezonskih torti ili kolača po specijalnoj ceni, direktno na tvoj prag.', 'admin/model/upload/fastshipping.jpg', '2025-11-11 19:04:30'),
(6, 'Dekoracija torti po želji', 'Odaberite način dekoracije vaše torte — od svečanih natpisa do ručno pravljenih figura od fondana. Učinite svaku tortu jedinstvenom!', 'korisnickaStrana/public/slike/CakeDecorating.jpg', '2025-11-12 18:08:11'),
(7, 'Korporativne narudžbine i brendiranje', 'Pripremamo torte i kolače sa logotipom vaše firme, idealne za korporativne proslave, jubileje ili poklone klijentima. Spoj ukusa i profesionalnog izgleda.', 'korisnickaStrana/public/slike/CorporateCake.jpg', '2025-11-12 18:08:11'),
(8, 'Catering za proslave i događaje', 'Obezbedite slatki sto za svaku priliku! Nudimo kompletne poslastičarske aranžmane za rođendane, venčanja, konferencije i druge događaje.', 'korisnickaStrana/public/slike/EventCatering.jpg', '2025-11-12 18:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE IF NOT EXISTS `vesti` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naziv`, `opis`, `slika`) VALUES
(1, 'Sezonska čarolija: Prolećne torte stižu na sajt!', 'Uživajte u svežim ukusima proleća uz naše nove torte inspirisane sezonom – jagode, limun i cvetne note samo su početak! Od danas su dostupne za porudžbinu na sajtu. Naručite svoj komad prolećne radosti i slatkoće već sada!', 'korisnickaStrana/public/slike/springcakes.jpg'),
(2, 'Brza dostava torti sada uključena u ponudu!', 'Dobra vest za sve sladokusce: uvodimo ekspresnu dostavu za sve narudžbine torti preko sajta! Poručite do podneva, a mi ćemo vašu slatku poslasticu isporučiti na vašu adresu isti dan. Isprobajte već danas!', 'korisnickaStrana/public/slike/dostava.jpg'),
(3, 'Poklon uz svaku tortu ovog meseca!', 'Slavimo ljubav prema slatkišima – uz svaku tortu naručenu preko sajta do kraja meseca dobijate mini set naših domaćih kolačića na poklon! Iskoristite priliku i zasladite dan sebi ili dragim osobama.', 'korisnickaStrana/public/slike/minitorte.jpg'),
(4, 'Novost u ponudi: Personalizovane torte sada dostupne online!', 'Dragi ljubitelji slatkiša, imamo sjajne vesti za vas! Od sada možete naručiti svoje omiljene torte direktno preko našeg sajta i dodatno ih personalizovati po želji – od ukusa do dekoracije. Proslavite posebne trenutke uz naše jedinstvene torte!', 'admin/model/upload/custom-cake.jpg'),
(13, 'Letnje osveženje: Novi sladoledni kolači!', 'Stigla je letnja ponuda! Uživajte u kremastoj sladolednoj torti sa ukusom vanile, čokolade, jagode ili pistaća. Idealno za vruće dane i lagano uživanje.', 'korisnickaStrana/public/slike/IceCreamCake.jpg'),
(14, 'Nova radionica ukrašavanja torti!', 'Pridružite se našoj radionici ukrašavanja torti i naučite tajne profesionalaca! Broj mesta je ograničen, a svi učesnici dobijaju sertifikat i poklon torticu.', 'korisnickaStrana/public/slike/CakeDecor.jpg'),
(15, 'Jeseni u znaku kestena i čokolade!', 'Sezona toplih ukusa je stigla! Probajte naše nove torte sa kestenom, čokoladom i karamelom — idealne za jesenje dane uz topli napitak.', 'korisnickaStrana/public/slike/Limited.jpg'),
(16, 'Specijalna ponuda za praznike!', 'Spremite se za praznične dane uz naše ekskluzivne torte i kolače! Poručite ranije i ostvarite 15% popusta na porudžbine do 20. decembra.', 'korisnickaStrana/public/slike/Sale1.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stavke_porudzbine`
--
ALTER TABLE `stavke_porudzbine`
  ADD CONSTRAINT `stavke_porudzbine_ibfk_1` FOREIGN KEY (`porudzbina_id`) REFERENCES `porudzbina` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stavke_porudzbine_ibfk_2` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvod` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
