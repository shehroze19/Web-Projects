-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2017 at 01:44 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aId` int(11) NOT NULL,
  `aName` varchar(255) NOT NULL,
  `aUsername` varchar(255) NOT NULL,
  `aPassword` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aId`, `aName`, `aUsername`, `aPassword`, `phone`) VALUES
(1, 'Mirza Ahsan Bilal', 'ahsan', 'ahsan', 900);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `dId` int(11) NOT NULL,
  `orderStatus` varchar(255) NOT NULL,
  `assessment` varchar(255) NOT NULL,
  `date` timestamp NOT NULL,
  `truck40` int(11) DEFAULT NULL,
  `truck20` int(11) DEFAULT NULL,
  `truckMazda` int(11) DEFAULT NULL,
  `truckShezore` int(11) DEFAULT NULL,
  `truckSuzuki` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bId`, `uId`, `dId`, `orderStatus`, `assessment`, `date`, `truck40`, `truck20`, `truckMazda`, `truckShezore`, `truckSuzuki`) VALUES
(1, 7, 5, 'complete', 'yes', '2017-12-14 00:31:28', 1, 0, 0, 0, 0),
(2, 7, 5, 'complete', 'yes', '2017-12-14 00:33:01', 2, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `booking_deliverer`
--

CREATE TABLE `booking_deliverer` (
  `bdId` int(11) NOT NULL,
  `bId` int(11) NOT NULL,
  `dId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `container`
--

CREATE TABLE `container` (
  `cId` int(11) NOT NULL,
  `cType` varchar(255) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `container`
--

INSERT INTO `container` (`cId`, `cType`, `cost`) VALUES
(1, 'truck40', 40),
(2, 'truck20', 37);

-- --------------------------------------------------------

--
-- Table structure for table `deliverer`
--

CREATE TABLE `deliverer` (
  `dId` int(11) NOT NULL,
  `dName` varchar(255) NOT NULL,
  `dUsername` varchar(255) NOT NULL,
  `dPassword` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliverer`
--

INSERT INTO `deliverer` (`dId`, `dName`, `dUsername`, `dPassword`, `phone`) VALUES
(5, 'basharat', 'bushi', 'bushi', 9393);

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `fId` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `iId` int(11) NOT NULL,
  `qId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `qdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`iId`, `qId`, `uId`, `message`, `qdate`) VALUES
(16, 9, 7, 'okay', '2017-12-13 22:36:16'),
(17, 11, 7, 'ok i will halps u a', '2017-12-13 22:45:31');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `inId` int(11) NOT NULL,
  `iValue` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `nId` int(11) NOT NULL,
  `notification` varchar(255) NOT NULL,
  `nDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nId`, `notification`, `nDate`) VALUES
(1, 'update orders accross etc', '2017-12-14 01:11:16'),
(2, 'new trucks', '2017-12-14 01:25:21'),
(3, 'New truck driver kamlesh', '2017-12-14 01:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `packing_floor_rate`
--

CREATE TABLE `packing_floor_rate` (
  `pId` int(11) NOT NULL,
  `fId` int(11) NOT NULL,
  `cId` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE `queries` (
  `qId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `uName` varchar(255) NOT NULL,
  `query` varchar(255) NOT NULL,
  `replied` int(11) NOT NULL,
  `qdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`qId`, `uId`, `uName`, `query`, `replied`, `qdate`) VALUES
(9, 7, 'hello ahsan', 'help me', 1, '2017-12-13 22:33:59'),
(10, 7, 'hello ahsan', 'need halp', 0, '2017-12-13 22:34:05'),
(11, 7, 'hello ahsan', 'plis haalps me', 1, '2017-12-13 22:44:44'),
(12, 7, 'hello ahsan', 'please sir can u help me? need ', 0, '2017-12-13 23:50:05');

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `tId` int(11) NOT NULL,
  `bNo` int(11) NOT NULL,
  `longitude` float NOT NULL,
  `latitude` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int(11) NOT NULL,
  `uName` varchar(255) NOT NULL,
  `uEmail` varchar(255) NOT NULL,
  `uAddress` varchar(255) NOT NULL,
  `uUsername` varchar(255) NOT NULL,
  `uPassword` varchar(255) NOT NULL,
  `phone` int(13) NOT NULL,
  `uDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `uName`, `uEmail`, `uAddress`, `uUsername`, `uPassword`, `phone`, `uDate`) VALUES
(7, 'superman', 'hello@yahoo.com', 'bezt', 'hello', '5d41402abc4b2a76b9719d911017c592', 2424, '2017-12-13 20:39:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aId`),
  ADD UNIQUE KEY `aUsername` (`aUsername`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `booking_deliverer`
--
ALTER TABLE `booking_deliverer`
  ADD PRIMARY KEY (`bdId`);

--
-- Indexes for table `container`
--
ALTER TABLE `container`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `deliverer`
--
ALTER TABLE `deliverer`
  ADD PRIMARY KEY (`dId`),
  ADD UNIQUE KEY `dUsername` (`dUsername`);

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`fId`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`iId`);

--
-- Indexes for table `insurance`
--
ALTER TABLE `insurance`
  ADD PRIMARY KEY (`inId`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`nId`);

--
-- Indexes for table `packing_floor_rate`
--
ALTER TABLE `packing_floor_rate`
  ADD PRIMARY KEY (`pId`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`qId`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`tId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`),
  ADD UNIQUE KEY `uUsername` (`uUsername`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `booking_deliverer`
--
ALTER TABLE `booking_deliverer`
  MODIFY `bdId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `container`
--
ALTER TABLE `container`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `deliverer`
--
ALTER TABLE `deliverer`
  MODIFY `dId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `floor`
--
ALTER TABLE `floor`
  MODIFY `fId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `iId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `insurance`
--
ALTER TABLE `insurance`
  MODIFY `inId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `nId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `packing_floor_rate`
--
ALTER TABLE `packing_floor_rate`
  MODIFY `pId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `qId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tracking`
--
ALTER TABLE `tracking`
  MODIFY `tId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
