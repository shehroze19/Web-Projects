-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 09:08 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `league`
--

-- --------------------------------------------------------

--
-- Table structure for table `flex`
--

CREATE TABLE `flex` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Division` varchar(15) NOT NULL,
  `Rank` varchar(5) NOT NULL,
  `Lp` int(11) NOT NULL,
  `wins` int(11) NOT NULL,
  `loss` int(11) NOT NULL,
  `winrate` int(11) NOT NULL,
  `position` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flex`
--

INSERT INTO `flex` (`id`, `Name`, `Division`, `Rank`, `Lp`, `wins`, `loss`, `winrate`, `position`) VALUES
(1, 'Titan X', 'GOLD', 'V', 0, 27, 18, 60, 11),
(2, 'DreadLord96', 'SILVER', 'V', 51, 31, 30, 51, 6.51),
(3, 'ToxicAndUgly', 'PLATINUM', 'V', 0, 89, 88, 50, 16),
(4, 'WonderMan22', 'SILVER', 'III', 30, 25, 27, 48, 8.3);

-- --------------------------------------------------------

--
-- Table structure for table `soloq`
--

CREATE TABLE `soloq` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Division` varchar(15) NOT NULL,
  `Rank` varchar(5) NOT NULL,
  `Lp` int(5) NOT NULL,
  `wins` int(11) NOT NULL,
  `loss` int(11) NOT NULL,
  `winrate` int(11) NOT NULL,
  `position` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soloq`
--

INSERT INTO `soloq` (`id`, `Name`, `Division`, `Rank`, `Lp`, `wins`, `loss`, `winrate`, `position`) VALUES
(40, 'IntensivePostal', 'GOLD', 'IV', 51, 66, 67, 50, 12.51),
(45, 'DreadLord96', 'BRONZE', 'I', 83, 24, 29, 45, 4.83),
(46, 'WonderMan22', 'GOLD', 'V', 0, 36, 25, 59, 11),
(52, 'Ã„NUB1S', 'DIAMOND', 'V', 0, 387, 370, 51, 21),
(53, 'ToxicAndUgly', 'DIAMOND', 'III', 0, 1029, 1041, 50, 23),
(54, 'Titan X', 'SILVER', 'II', 25, 8, 7, 53, 9.25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flex`
--
ALTER TABLE `flex`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soloq`
--
ALTER TABLE `soloq`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flex`
--
ALTER TABLE `flex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `soloq`
--
ALTER TABLE `soloq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
