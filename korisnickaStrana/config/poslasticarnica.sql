-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2025 at 07:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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

-- --------------------------------------------------------

--
-- Table structure for table `akcije`
--

CREATE TABLE `akcije` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `cena` double NOT NULL,
  `zalihe` int(11) NOT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(8, 'Čokoladni dan – 25% popusta', 'Svake srede, čokoladna torta samo 600 dinara uz 25% popusta! Naruči preko sajta i zasladi dan.', 600, 20, 'korisnickaStrana/public/slike/chocoslice.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontakt`
--

CREATE TABLE `kontakt` (
  `id` int(10) UNSIGNED NOT NULL,
  `adresa` varchar(50) NOT NULL DEFAULT '0',
  `telefon` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `working_hours` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontakt`
--

INSERT INTO `kontakt` (`id`, `adresa`, `telefon`, `email`, `working_hours`) VALUES
(3, 'Nikole Pasica 28, Nis', '+381 11 1234 567', 'kontakt@example.com', '0');

-- --------------------------------------------------------

--
-- Table structure for table `poruka`
--

CREATE TABLE `poruka` (
  `id` int(10) UNSIGNED NOT NULL,
  `poruka` text NOT NULL,
  `ime` text NOT NULL,
  `email` text NOT NULL,
  `datum` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poruka`
--

INSERT INTO `poruka` (`id`, `poruka`, `ime`, `email`, `datum`) VALUES
(9, 'FFFFFFFFFFF', 'FFFF', 'FFFF', '2025-02-28 09:46:23'),
(10, '1111111111', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:11:46'),
(11, '22222222222\r\n\r\n', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:12:01'),
(12, '33333333333', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 08:13:27'),
(14, '45445', 'Ivana ', 'iwana994994@hotmail.com', '2025-03-06 08:17:59'),
(17, '2323333333', 'RRRRRR', 'iwana994994@hotmail.comg', '2025-03-10 15:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(50) NOT NULL DEFAULT '0',
  `opis` varchar(255) NOT NULL,
  `cena` double NOT NULL DEFAULT 0,
  `zalihe` int(11) NOT NULL DEFAULT 0,
  `slika` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cena`, `zalihe`, `slika`) VALUES
(3, 'Cheesecake parče', 'Kremasti užitak sa hrskavom podlogom – savršeno pa', 299, 15, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(4, 'Medena pita', 'Tradicija u svakom zalogaju – medena pita sa sloje', 1000, 12, 'korisnickaStrana/public/slike/med i orasi.jpg'),
(5, 'Tiramisu', 'Klasik u našem stilu – nežni slojevi mascarponea, ', 1400, 9, 'korisnickaStrana/public/slike/tiramisu.jpg'),
(6, 'Čokoladna torta', 'Za prave čokoholičare!', 2000.99, 30, 'korisnickaStrana/public/slike/19.jpg'),
(7, 'Voćna torta parče', 'Sočna kombinacija svežeg voća i lagane kreme', 250.5, 20, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(78, 'Velvetcake set mini tortica', 'Baršunaste mini tortice u živim bojama!', 1500, 0, 'korisnickaStrana/public/slike/redvelvet.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(50) NOT NULL DEFAULT '0',
  `prezime` varchar(50) NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ime`, `prezime`, `email`, `username`, `password`, `role`, `created_at`) VALUES
(1, '0', '0', '0', 'iwana', 'iwana994994', 'admin', '2025-03-06 08:56:10'),
(7, 'Ivana ', 'ffff', 'iwana994994@h2il.com', '11123', '123123123', 'user', '2025-03-06 09:03:20'),
(22, '0', '0', 'anastasija@anastasija', 'abastasija', 'anastasija', 'admin', '2025-03-09 10:40:14'),
(24, 'Marko', 'Marković', 'marko.markovic@example.com', 'marko123', 'sifra123', 'user', '2025-03-10 15:00:52'),
(25, 'Ana', 'Anić', 'ana.anic@example.com', 'ana_1990', 'lozinka456', 'user', '2025-03-10 15:00:52'),
(26, 'Petar', 'Petrović', 'petar.petrovic@example.com', 'petar_p', 'lozinka789', 'user', '2025-03-10 15:00:52'),
(27, 'Jelena', 'Jovanović', 'jelena.jovanovic@example.com', 'jelena01', 'sifra987', 'user', '2025-03-10 15:00:52'),
(28, 'Ivan', 'Ivić', 'ivan.ivic@example.com', 'ivan_123', 'lozinka654', 'user', '2025-03-10 15:00:52'),
(29, 'Marija', 'Marić', 'marija.maric@example.com', 'marija2025', 'lozinka1234', 'user', '2025-03-10 15:00:52'),
(30, 'Nikola', 'Nikolić', 'nikola.nikolic@example.com', 'nikola_88', 'lozinka5678', 'user', '2025-03-10 15:00:52'),
(31, 'Tanja', 'Tanović', 'tanja.tanovic@example.com', 'tanja1985', 'tajna123', 'user', '2025-03-10 15:00:52'),
(33, 'Maja', 'Majkić', 'maja.majkic@example.com', 'maja_maja', 'sifra1122', 'user', '2025-03-10 15:00:52'),
(37, 'Sara', 'Sarić', 'sara.saric@example.com', 'sara1234', 'mypassword999', 'user', '2025-03-10 15:00:52');

-- --------------------------------------------------------

--
-- Table structure for table `usluge`
--

CREATE TABLE `usluge` (
  `id` int(11) NOT NULL,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usluge`
--

INSERT INTO `usluge` (`id`, `naziv`, `opis`, `slika`, `created_at`) VALUES
(1, 'Besplatna dostava iznad 2.000 dinara', 'Uživaj u slatkišima bez brige o troškovima dostave! Za sve porudžbine preko 2.000 dinara, dostava je na nas. Naruči omiljene poslastice i mi ćemo ih doneti pravo na tvoja vrata.', '/Poslasticarnica/korisnickaStrana/public/slike/freeshipping.jpg', '2025-03-06 19:56:23'),
(2, 'Personalizacija torti po tvom ukusu', 'Pretvori svoju viziju u slatkiš! Nudimo uslugu personalizacije torti – odaberi ukus, oblik i dekoraciju, a mi ćemo kreirati remek-delo za tvoj poseban dan.', '/Poslasticarnica/korisnickaStrana/public/slike/personalized.jpg', '2025-03-06 19:57:01'),
(3, 'Brza narudžba za hitne proslave', 'Slavi bez stresa! Uz našu uslugu brze narudžbe, tvoja torta ili kolači biće spremni za preuzimanje ili dostavu u roku od 24 sata. Idealno za iznenadne slatke trenutke.', '/Poslasticarnica/korisnickaStrana/public/slike/fastshipping.jpg', '2025-03-06 19:57:01'),
(4, 'Poklon paketi za svaku priliku', 'Iznenadi svoje najmilije! Pripremamo elegantne poklon pakete sa tortama, kolačima ili kombinacijom slatkiša po tvom izboru – savršeno za rođendane, godišnjice ili jednostavno lepe geste.', '/Poslasticarnica/korisnickaStrana/public/slike/cakegift.jpg', '2025-03-06 19:57:01'),
(5, 'Pretplata na slatkiše meseca', 'Zasladimo ti svaki mesec! Uz našu uslugu pretplate, svakog meseca dobijaš novu selekciju sezonskih torti ili kolača po specijalnoj ceni, direktno na tvoj prag.', '/Poslasticarnica/korisnickaStrana/public/slike/specialcake.jpg', '2025-03-06 19:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `vesti`
--

CREATE TABLE `vesti` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(255) NOT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vesti`
--

INSERT INTO `vesti` (`id`, `naziv`, `opis`, `slika`) VALUES
(1, 'Sezonska čarolija: Prolećne torte stižu na sajt!', 'Uživajte u svežim ukusima proleća uz naše nove torte inspirisane sezonom – jagode, limun i cvetne note samo su početak! Od danas su dostupne za porudžbinu na sajtu. Naručite svoj komad prolećne radosti i slatkoće već sada!', 'korisnickaStrana/public/slike/springcakes.jpg'),
(2, 'Brza dostava torti sada uključena u ponudu!', 'Dobra vest za sve sladokusce: uvodimo ekspresnu dostavu za sve narudžbine torti preko sajta! Poručite do podneva, a mi ćemo vašu slatku poslasticu isporučiti na vašu adresu isti dan. Isprobajte već danas!', 'korisnickaStrana/public/slike/dostava.jpg'),
(3, 'Poklon uz svaku tortu ovog meseca!', 'Slavimo ljubav prema slatkišima – uz svaku tortu naručenu preko sajta do kraja meseca dobijate mini set naših domaćih kolačića na poklon! Iskoristite priliku i zasladite dan sebi ili dragim osobama.', 'korisnickaStrana/public/slike/minitorte.jpg'),
(4, 'Novost u ponudi: Personalizovane torte sada dostupne online!', 'Dragi ljubitelji slatkiša, imamo sjajne vesti za vas! Od sada možete naručiti svoje omiljene torte direktno preko našeg sajta i dodatno ih personalizovati po želji – od ukusa do dekoracije. Proslavite posebne trenutke uz naše jedinstvene torte!', 'korisnickaStrana/public/slike/custom-cake.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akcije`
--
ALTER TABLE `akcije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontakt`
--
ALTER TABLE `kontakt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poruka`
--
ALTER TABLE `poruka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `usluge`
--
ALTER TABLE `usluge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vesti`
--
ALTER TABLE `vesti`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akcije`
--
ALTER TABLE `akcije`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `poruka`
--
ALTER TABLE `poruka`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `usluge`
--
ALTER TABLE `usluge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
