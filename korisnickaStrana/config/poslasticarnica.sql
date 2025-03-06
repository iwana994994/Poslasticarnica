-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2025 at 09:57 PM
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
(9, 'FFFFFFFFFFF', 'FFFF', 'FFFF', '2025-02-28 10:46:23'),
(10, '1111111111', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 09:11:46'),
(11, '22222222222\r\n\r\n', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 09:12:01'),
(12, '33333333333', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 09:13:27'),
(13, '1111123', 'Ivana ', 'iwana994994@gmail.com', '2025-03-06 09:14:04'),
(14, '45445', 'Ivana ', 'iwana994994@hotmail.com', '2025-03-06 09:17:59'),
(15, '2222222222222', 'Ivana ', 'iwana994994@hotmail.com', '2025-03-06 09:19:39'),
(16, '123123123\r\n', 'Ivana ', 'iwana994994@hotmail.com', '2025-03-06 09:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `id` int(10) UNSIGNED NOT NULL,
  `naziv` varchar(50) NOT NULL DEFAULT '0',
  `opis` varchar(50) NOT NULL DEFAULT '',
  `cena` double NOT NULL DEFAULT 0,
  `zalihe` int(11) NOT NULL DEFAULT 0,
  `slika` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `proizvod`
--

INSERT INTO `proizvod` (`id`, `naziv`, `opis`, `cena`, `zalihe`, `slika`) VALUES
(3, 'Cheesecake', 'Kremasti cheesecake sa prelivom od jagoda.', 1000, 15, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(4, 'Medena pita', 'Tradicionalna pita sa medom i orasima.', 1000, 12, 'korisnickaStrana/public/slike/med i orasi.jpg'),
(5, 'Tiramisu', 'Italijanski klasik sa kafom i mascarpone sirom.', 1400, 9, 'korisnickaStrana/public/slike/tiramisu.jpg'),
(6, 'Čokoladna torta', 'Torta sa bogatom čokoladnom kremom i čokoladnim pr', 15.99, 30, 'korisnickaStrana/public/slike/19.jpg'),
(7, 'Voćna torta', 'Osvežavajuća torta sa sezonskim voćem i laganom kr', 12.5, 20, 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(8, 'Torta sa kestenom', 'Torta sa kremom od kestena i prahom od kestenovog ', 18, 15, 'korisnickaStrana/public/slike/9.jpg'),
(9, 'Tiramisu', 'Italijanska torta sa slojevima kafe, mascapone kre', 20, 25, 'korisnickaStrana/public/slike/tiramisu.jpg'),
(10, 'tortad', 'asssssssss', 11111, 0, '0');

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
(1, '0', '0', '0', 'iwana', 'iwana994994', 'admin', '2025-03-06 09:56:10'),
(7, 'Ivana ', 'ffff', 'iwana994994@h2il.com', '11123', '123123123', 'user', '2025-03-06 10:03:20'),
(16, 'anastasija2', 'a', '1111', 'anastasija2', '123', 'admin', '2025-03-06 11:24:52');

-- --------------------------------------------------------

--
-- Table structure for table `usluge`
--

CREATE TABLE `usluge` (
  `id` int(11) NOT NULL,
  `naziv` varchar(128) NOT NULL,
  `opis` varchar(128) NOT NULL,
  `slika` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usluge`
--

INSERT INTO `usluge` (`id`, `naziv`, `opis`, `slika`, `created_at`) VALUES
(1, 'Dostava torti', 'Brza dostava torti na vašu adresu.', '/Poslasticarnica/korisnickaStrana/public/slike/dostava.jpg', '2025-03-06 20:56:23'),
(2, 'Prilagođene torte.', 'Izrada torti prema vašim željama.', '/Poslasticarnica/korisnickaStrana/public/slike/custom-cake.jpg', '2025-03-06 20:57:01');

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
(1, 'Nova kolekcija torti', 'Predstavljamo vam našu novu kolekciju torti sa jedinstvenim ukusima i dekoracijama.', 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(2, 'Sezonski popusti', 'Iskoristite sezonske popuste na sve poslastice do kraja meseca!', 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(3, 'Radno vreme za praznike', 'Obaveštavamo vas da će naše radno vreme za praznike biti produženo.', 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(4, 'Specijalna ponuda za rođendane', 'Rezervišite tortu za rođendan i ostvarite popust od 20%!', 'korisnickaStrana/public/slike/Cheesecake.jpg'),
(5, 'Nova lokacija u centru', 'Otvorili smo novu poslastičarnicu u centru grada – svratite na degustaciju!', 'korisnickaStrana/public/slike/Cheesecake.jpg');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `kontakt`
--
ALTER TABLE `kontakt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `poruka`
--
ALTER TABLE `poruka`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usluge`
--
ALTER TABLE `usluge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vesti`
--
ALTER TABLE `vesti`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
