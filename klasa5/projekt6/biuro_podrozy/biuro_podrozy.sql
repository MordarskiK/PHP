-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2024 at 03:58 PM
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
-- Database: `biuro_podrozy`
--

-- --------------------------------------------------------

--
-- Table structure for table `bilety`
--

CREATE TABLE `bilety` (
  `id_bilety` int(11) NOT NULL,
  `id_oferty` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kraje`
--

CREATE TABLE `kraje` (
  `ID_kraje` int(11) NOT NULL,
  `Nazwa` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kraje`
--

INSERT INTO `kraje` (`ID_kraje`, `Nazwa`) VALUES
(1, 'Polska'),
(2, 'Grecja'),
(3, 'Chorwacja'),
(4, 'Francja'),
(5, 'NIemcy'),
(6, 'Czechy');

-- --------------------------------------------------------

--
-- Table structure for table `oferty`
--

CREATE TABLE `oferty` (
  `id_oferty` int(11) NOT NULL,
  `id_kraj` int(11) DEFAULT NULL,
  `opis` varchar(255) DEFAULT NULL,
  `daty` date DEFAULT NULL,
  `cena` float NOT NULL,
  `miejsca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oferty`
--

INSERT INTO `oferty` (`id_oferty`, `id_kraj`, `opis`, `daty`, `cena`, `miejsca`) VALUES
(1, 1, 'wakacje w Polsce jakich jeszcze nikt nie przeżył', '2024-12-23', 100.75, 2),
(2, 2, 'wakacje w Grecji jakich jeszcze nikt nie przeżył', '2025-01-16', 250.2, 4),
(3, 3, 'wakacje w Chorwacji jakich jeszcze nikt nie przeżył', '2024-12-25', 280, 3),
(4, 1, 'test opis', '2025-01-02', 25.99, 1),
(5, 2, 'jest fajnie', '2025-01-04', 290, 5),
(6, 4, 'tekst', '2024-12-19', 22.6, 12),
(7, 2, 'tekst', '2024-12-20', 24.2, 11),
(8, 1, 'tekst', '2024-12-11', 21.11, 15),
(9, 3, 'tekst', '2024-12-29', 200, 3),
(10, 4, 'tekst', '2024-12-10', 211, 2),
(11, 5, 'tekst', '2024-12-11', 30, 9),
(12, 6, 'tekst', '2024-12-18', 39.14, 8),
(13, 2, 'tekst', '2024-12-15', 40.12, 0),
(14, 4, 'tekst', '2024-12-12', 35.55, 22);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `pass` varchar(15) DEFAULT NULL,
  `e_mail` varchar(30) NOT NULL,
  `opinie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `pass`, `e_mail`, `opinie`) VALUES
(1, 'admin', 'admin', '', NULL),
(2, 'guest', '', '', NULL),
(3, 'temp_user', 'temp_pass', 'temp@gmail.com', 'Świetna strona'),
(5, 'temp', 'temp_pass', 'temp@gmail.com', 'Strona 10/10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bilety`
--
ALTER TABLE `bilety`
  ADD PRIMARY KEY (`id_bilety`),
  ADD KEY `id_oferty` (`id_oferty`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kraje`
--
ALTER TABLE `kraje`
  ADD PRIMARY KEY (`ID_kraje`);

--
-- Indexes for table `oferty`
--
ALTER TABLE `oferty`
  ADD PRIMARY KEY (`id_oferty`),
  ADD KEY `id_kraj` (`id_kraj`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kraje`
--
ALTER TABLE `kraje`
  MODIFY `ID_kraje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `oferty`
--
ALTER TABLE `oferty`
  MODIFY `id_oferty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bilety`
--
ALTER TABLE `bilety`
  ADD CONSTRAINT `bilety_ibfk_1` FOREIGN KEY (`id_oferty`) REFERENCES `oferty` (`id_oferty`),
  ADD CONSTRAINT `bilety_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `oferty`
--
ALTER TABLE `oferty`
  ADD CONSTRAINT `oferty_ibfk_1` FOREIGN KEY (`id_kraj`) REFERENCES `kraje` (`ID_kraje`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
