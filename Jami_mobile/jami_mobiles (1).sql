-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2017 at 03:04 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jami_mobiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `Name`, `image`, `description`) VALUES
(3, 'checker', 'Apple-iPhone-6.jpg', ''),
(7, 'laskdklasd', '', 'askldjklasdljaskldjklasjdklasjldjaklaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaj');

-- --------------------------------------------------------

--
-- Table structure for table `admin_control_panel`
--

CREATE TABLE `admin_control_panel` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_control_panel`
--

INSERT INTO `admin_control_panel` (`id`, `Name`, `Username`, `Password`) VALUES
(4, 'jami', 'jami', '558a998c822537ba10ebb4e2a3f62311');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `brand_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `Name`, `brand_image`) VALUES
(20, 'Apple', 'Apple-logo-qw.png'),
(22, 'Nokia', 'Nokia-Logo-Front.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `Name`, `Email`, `Mobile`, `Message`) VALUES
(1, 'shehroze', 'a@email.com', '123123', 'plis'),
(2, 'shehroze', 'a@email.com', '123123', 'plis'),
(3, 'zamir', 'z@hotmail.com', '233242', 'adsadasdjkasndasndn,nd,n'),
(4, 'sad', 'dasda@hotmail.com', '324234`', 'sadasd');

-- --------------------------------------------------------

--
-- Table structure for table `main_ad`
--

CREATE TABLE `main_ad` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_ad`
--

INSERT INTO `main_ad` (`id`, `Name`, `image`, `description`) VALUES
(1, 'z', 'nokia-logo.jpg', ''),
(2, 'aa', '', 'new offer');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `Price` int(30) NOT NULL,
  `Technology` varchar(100) NOT NULL,
  `Announced` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Month` varchar(100) NOT NULL,
  `OS` varchar(100) NOT NULL,
  `Protection` varchar(100) NOT NULL,
  `CPU` varchar(100) NOT NULL,
  `GPU` varchar(100) NOT NULL,
  `Chipset` varchar(100) NOT NULL,
  `Dimensions` varchar(100) NOT NULL,
  `Weight` varchar(100) NOT NULL,
  `SIM` varchar(100) NOT NULL,
  `Display` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Size` varchar(100) NOT NULL,
  `Multitouch` varchar(100) NOT NULL,
  `Resolution` varchar(100) NOT NULL,
  `Speed` varchar(100) NOT NULL,
  `GPRS` varchar(100) NOT NULL,
  `EDGE` varchar(100) NOT NULL,
  `2G_bands` varchar(100) NOT NULL,
  `3G_bands` varchar(100) NOT NULL,
  `4G_bands` varchar(100) NOT NULL,
  `Video` varchar(100) NOT NULL,
  `Primary_` varchar(100) NOT NULL,
  `Secondary_` varchar(100) NOT NULL,
  `Card_slot` varchar(100) NOT NULL,
  `Internal` varchar(100) NOT NULL,
  `Alert_types` varchar(100) NOT NULL,
  `Audio_quality` varchar(100) NOT NULL,
  `Loudspeaker` varchar(100) NOT NULL,
  `Battery_life` varchar(100) NOT NULL,
  `Bluetooth` varchar(100) NOT NULL,
  `GPS` varchar(100) NOT NULL,
  `NFC` varchar(100) NOT NULL,
  `WLAN` varchar(100) NOT NULL,
  `Radio` varchar(100) NOT NULL,
  `USB` varchar(100) NOT NULL,
  `Performance` varchar(100) NOT NULL,
  `Keyboard` varchar(100) NOT NULL,
  `Browser` varchar(100) NOT NULL,
  `Messaging` varchar(100) NOT NULL,
  `Sensors` varchar(100) NOT NULL,
  `Java` varchar(100) NOT NULL,
  `Colors` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `Name`, `brand`, `image`, `Price`, `Technology`, `Announced`, `Status`, `Year`, `Month`, `OS`, `Protection`, `CPU`, `GPU`, `Chipset`, `Dimensions`, `Weight`, `SIM`, `Display`, `Type`, `Size`, `Multitouch`, `Resolution`, `Speed`, `GPRS`, `EDGE`, `2G_bands`, `3G_bands`, `4G_bands`, `Video`, `Primary_`, `Secondary_`, `Card_slot`, `Internal`, `Alert_types`, `Audio_quality`, `Loudspeaker`, `Battery_life`, `Bluetooth`, `GPS`, `NFC`, `WLAN`, `Radio`, `USB`, `Performance`, `Keyboard`, `Browser`, `Messaging`, `Sensors`, `Java`, `Colors`) VALUES
(4, 'Nokia 6', 'Nokia', '6b.gif', 65000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'iphone 6', 'Apple', 'Apple-iPhone-6.jpg', 40000, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'testing', 'Nokia', '6b.gif', 343423, 'best', '78', '', '97', '97', '89', '7', 'hk', 'h', 'hk', 'h', 'kh', 'khk', 'jhjk', 'hk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hjk', 'hkl', 'jl', 'khl', 'jl', 'hkl', 'jkl', 'jkl', 'jlk', 'jkl', 'jkl');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_control_panel`
--
ALTER TABLE `admin_control_panel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_ad`
--
ALTER TABLE `main_ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `admin_control_panel`
--
ALTER TABLE `admin_control_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `main_ad`
--
ALTER TABLE `main_ad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
