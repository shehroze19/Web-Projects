-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2018 at 08:23 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezhealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` tinyint(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `date`) VALUES
(1, 'admin', 'admin', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `doctorSpecialization` varchar(255) NOT NULL,
  `doctor_uname` varchar(255) NOT NULL,
  `patient_uname` varchar(255) NOT NULL,
  `Fees` varchar(255) NOT NULL,
  `appointmentDate` varchar(255) DEFAULT NULL,
  `appointmentTime` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `approved` varchar(255) DEFAULT NULL,
  `finished` varchar(255) DEFAULT NULL,
  `conversation` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `doctorSpecialization`, `doctor_uname`, `patient_uname`, `Fees`, `appointmentDate`, `appointmentTime`, `postingDate`, `approved`, `finished`, `conversation`) VALUES
(17, 'Dermatology', 'aamer', 'plis', '1000', '2018-03-31', '07:31', '2018-03-20 02:32:03', NULL, NULL, NULL),
(18, 'General practice', 'rubab', 'plis', '1000', '2018-03-30', '09:07', '2018-03-20 04:07:25', NULL, NULL, NULL),
(19, 'Dermatology', 'aamer', 'plis', '1000', '2018-03-30', '14:10', '2018-03-20 05:24:21', 'Approved By: Aamer Ikram', 'Finished By: Aamer Ikram', NULL),
(21, 'Dermatology', 'aamer', 'plis', '1000', '2018-03-30', '21:58', '2018-03-20 16:58:55', 'Approved By: Aamer Ikram', 'Finished By: Aamer Ikram', NULL),
(22, 'Ophthalmology', 'khalid1', 'plis', '', '2018-05-23', '15:40', '2018-05-08 06:41:15', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` tinyint(5) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `postal_address` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `first_name`, `last_name`, `staff_id`, `postal_address`, `phone`, `email`, `username`, `password`, `date`) VALUES
(5, 'Sam', 'Osoro', 'Pharmacy/C', '76 nairobi', '09865468', 'samwel@pharmacy.com', 'sam', '1234', '2013-11-25 20:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(255) NOT NULL,
  `city_name` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city_name`) VALUES
(1, 'Karachi'),
(2, 'Karachi'),
(3, 'Lahore'),
(4, 'Faisalabad'),
(5, 'Rawalpindi'),
(6, 'Multan'),
(7, 'Hyderabad'),
(8, 'Gujranwala'),
(9, 'Peshawar'),
(10, 'Quetta'),
(11, 'Islamabad'),
(12, 'Sargodha'),
(13, 'Sialkot'),
(14, 'Bahawalpur'),
(15, 'Sukkur'),
(16, 'Jhang'),
(17, 'Sheikhupura'),
(18, 'Larkana'),
(19, 'Gujrat'),
(20, 'Mardan'),
(21, 'Kasur'),
(22, 'Rahim Yar Khan'),
(23, 'Sahiwal'),
(24, 'Okara'),
(25, 'Wah'),
(26, 'Dera Ghazi Khan'),
(27, 'Mirpur Khas'),
(28, 'Nawabshah'),
(29, 'Mingora'),
(30, 'Chiniot'),
(31, 'Kamoke'),
(32, 'Mandi Burewala'),
(33, 'Jhelum'),
(34, 'Sadiqabad'),
(35, 'Jacobabad'),
(36, 'Shikarpur'),
(37, 'Khanewal'),
(38, 'Hafizabad'),
(39, 'Kohat'),
(40, 'Muzaffargarh'),
(41, 'Khanpur'),
(42, 'Gojra'),
(43, 'Bahawalnagar'),
(44, 'Muridke'),
(45, 'Pak Pattan'),
(46, 'Abottabad'),
(47, 'Tando Adam'),
(48, 'Jaranwala'),
(49, 'Khairpur'),
(50, 'Chishtian Mandi'),
(51, 'Daska'),
(52, 'Dadu'),
(53, 'Mandi Bahauddin'),
(54, 'Ahmadpur East'),
(55, 'Kamalia'),
(56, 'Khuzdar'),
(57, 'Vihari'),
(58, 'Dera Ismail Khan'),
(59, 'Wazirabad'),
(60, 'Nowshera');

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
(4, 'sad', 'dasda@hotmail.com', '324234`', 'sadasd'),
(5, 'sadklnl', 'knkln@yaa', 'lkn', 'kln'),
(6, 'sadnkl', 'nlnl@a', 'nn', 'klnl'),
(7, 'abbas', 'a@yahoo.com', '3215170713', ''),
(8, 'abbas', 'a@yahoo.com', '3215170713', 'Qk©¼ø›¶o‚ …NNÓmëP¦l~ Œ3ábVƒ'),
(9, 'shehroze', 'h@gai.com', '7188191999', 'noohh\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(10, 'sad', 'dD@YA', 'D', 'D\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0'),
(11, 'sad', 'dD@YA', 'D', 'D\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `pmdcNo` varchar(255) NOT NULL,
  `issueDate` varchar(255) DEFAULT NULL,
  `validityDate` varchar(255) DEFAULT NULL,
  `specilization` varchar(255) NOT NULL,
  `doctorName` varchar(255) NOT NULL,
  `fatherName` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `address` longtext,
  `docFees` varchar(255) DEFAULT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `docEmail` varchar(255) NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(255) DEFAULT NULL,
  `timeFrom` time DEFAULT NULL,
  `timeTo` time DEFAULT NULL,
  `workingDays` varchar(255) DEFAULT NULL,
  `updatedInfo` varchar(10) DEFAULT NULL,
  `ocrStatus` varchar(10) DEFAULT NULL,
  `clinic` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `pmdcNo`, `issueDate`, `validityDate`, `specilization`, `doctorName`, `fatherName`, `gender`, `username`, `address`, `docFees`, `contactno`, `docEmail`, `area`, `password`, `creationDate`, `picture`, `timeFrom`, `timeTo`, `workingDays`, `updatedInfo`, `ocrStatus`, `clinic`) VALUES
(31, '14243-P', '28-01-1987\r\n				', '  31-12-2017\r\n				', 'Dermatology', 'Aamer Ikram', 'MUHAMMAD IKRAM\r\n				', 'Male				', 'aamer', '26 Harley Street', '1000', 923325104896, 'shehroze19@gmail.com', 'Rawalpindi', '202cb962ac59075b964b07152d234b70', '2018-03-17 17:01:33', '26992684_10213687493595746_4968138160257839836_n.jpg', '01:48:00', '01:48:00', ' Monday Tuesday Wednesday', 'yes', 'Verified', 'Rural Health Center Tarlai'),
(33, '14241-P', '28-01-1987\r\n				', '  31-12-2011\r\n				', 'Child psychiatry', 'SAJID YUSUF SARAF', 'KH.MUHAMMAD YUSUF SARAF\r\n				', 'Male\r\n				', 'sajid', 'Afip ', '600', 923312329713, 'sajid@gmail.com', 'Islamabad', '202cb962ac59075b964b07152d234b70', '2018-03-19 05:34:21', NULL, '12:00:00', '03:00:00', ' Monday Tuesday', 'yes', 'Verified', 'AFIP'),
(35, '14239-P', '28-01-1987\r\n				', '  31-12-2021\r\n				', 'Homeopathy', 'IMRAN BASIT', 'ABDUL BASIT\r\n				', 'Male\r\n				', 'imran', NULL, NULL, NULL, 'imran@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', '2018-03-19 13:22:55', NULL, '00:00:00', '00:00:00', '', '', '', 'test'),
(36, '13238-P', '21-08-1986\r\n				', '  31-12-2020\r\n				', 'Oral surgery', 'SYED SALEEM ABBAS JAFRI', 'SYED SHAMIM ABBAS JAFRI\r\n				', 'Male\r\n				', 'saleem', NULL, NULL, NULL, 'saleem@gmail.co', NULL, '202cb962ac59075b964b07152d234b70', '2018-03-19 13:24:27', NULL, '00:00:00', '00:00:00', '', '', '', 'testing'),
(37, '13235-P', '21-08-1986\r\n				', '  31-12-1990\r\n				', 'Gynecology', 'BILAL AMIN', 'SAFDAR AMIN\r\n				', 'Male\r\n				', 'bilal', NULL, NULL, NULL, 'bilal@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', '2018-03-19 13:25:29', NULL, '00:00:00', '00:00:00', '', '', '', 'none'),
(38, '13335-P', '31-08-1986\r\n				', '  31-12-2015\r\n				', 'Cardiology', 'IRSHAD AHMAD', 'ABDUL GHANI\r\n				', 'Male\r\n				', 'irshad', NULL, NULL, NULL, 'irshad@gmail.com', 'Karachi', '202cb962ac59075b964b07152d234b70', '2018-03-19 13:26:26', NULL, '00:00:00', '00:00:00', '', '', '', NULL),
(39, '13335-D', '18-04-2013\r\n				', '  31-12-2022\r\n				', 'Occupational medicine', 'MUHAMMAD SAQIB RABBANI', 'GHULAM RABBANI\r\n				', 'Male\r\n				', 'saqib', NULL, NULL, NULL, 'saqib@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', '2018-03-19 13:27:42', NULL, '00:00:00', '00:00:00', '', '', '', NULL),
(41, '13235-D', '27-03-2013\r\n				', '  31-12-2022\r\n				', 'Ophthalmology', 'KHALID HUSSAIN', 'IMAM BAKHSH GHANGHRO\r\n				', 'Male\r\n				', 'khalid1', 'tarlai', '300', 925768798012, 'khalid1@gmail.com', 'Islamabad', '202cb962ac59075b964b07152d234b70', '2018-03-19 13:38:03', NULL, '04:09:00', '07:31:00', ' Monday Friday', 'yes', 'Verified', 'BHU Tarlai'),
(49, '12242-P', '25-09-1972\r\n				', '  31-12-2015\r\n				', 'Child psychiatry', 'Nusrat Khan', 'MUHAMMAD YAMIN KHAN\r\n				', 'Female\r\n				', 'nusrat', NULL, NULL, NULL, 'nusrat@gmail.com', NULL, '202cb962ac59075b964b07152d234b70', '2018-04-27 12:03:58', NULL, NULL, NULL, NULL, NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorslogstats`
--

CREATE TABLE `doctorslogstats` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorslogstats`
--

INSERT INTO `doctorslogstats` (`id`, `username`, `userip`, `loginTime`) VALUES
(1, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-17 16:04:05'),
(2, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-18 06:36:14'),
(3, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-18 10:48:12'),
(4, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-18 11:25:35'),
(5, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 15:24:07'),
(6, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 15:28:13'),
(7, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 15:41:07'),
(8, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 16:38:28'),
(9, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 17:02:54'),
(10, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 17:21:32'),
(11, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 19:22:40'),
(12, 'khalid', 0x3a3a3100000000000000000000000000, '2018-03-19 19:42:41'),
(13, 'khalid', 0x3a3a3100000000000000000000000000, '2018-03-19 19:44:05'),
(14, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 19:45:38'),
(15, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 20:32:17'),
(16, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 21:19:41'),
(17, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 21:45:08'),
(18, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-19 21:48:54'),
(19, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 01:20:16'),
(20, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 02:33:37'),
(21, 'rubab', 0x3a3a3100000000000000000000000000, '2018-03-20 04:05:33'),
(22, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 04:10:28'),
(23, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 04:29:22'),
(24, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 05:02:48'),
(25, 'ali', 0x3a3a3100000000000000000000000000, '2018-03-20 05:21:15'),
(26, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 05:21:38'),
(27, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 05:25:05'),
(28, 'khalid', 0x3a3a3100000000000000000000000000, '2018-03-20 15:35:58'),
(29, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 15:37:28'),
(30, 'khalid', 0x3a3a3100000000000000000000000000, '2018-03-20 16:56:57'),
(31, 'aamer', 0x3a3a3100000000000000000000000000, '2018-03-20 16:59:16'),
(32, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-11 06:19:06'),
(33, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-26 14:50:31'),
(34, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-26 21:25:28'),
(35, 'nusrat', 0x3a3a3100000000000000000000000000, '2018-04-27 12:05:00'),
(36, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-27 12:14:40'),
(37, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-27 13:02:43'),
(38, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-27 13:19:50'),
(39, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-27 16:14:33'),
(40, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-27 20:49:04'),
(41, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-27 21:12:59'),
(42, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-29 02:32:53'),
(43, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-29 02:33:48'),
(44, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-29 02:55:26'),
(45, 'aamer', 0x3a3a3100000000000000000000000000, '2018-04-29 22:46:55'),
(46, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 04:09:59'),
(47, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 11:31:09'),
(48, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 11:37:23'),
(49, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 11:38:34'),
(50, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 11:40:40'),
(51, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 11:46:41'),
(52, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 11:46:53'),
(53, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 11:47:15'),
(54, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 11:49:02'),
(55, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 14:17:34'),
(56, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 14:17:43'),
(57, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:05:22'),
(58, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:10:08'),
(59, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:51:03'),
(60, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:55:44'),
(61, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:58:33'),
(62, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:59:03'),
(63, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:59:13'),
(64, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:59:19'),
(65, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 15:59:38'),
(66, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:00:27'),
(67, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:02:12'),
(68, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:03:11'),
(69, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:03:50'),
(70, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:09:29'),
(71, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:14:31'),
(72, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:19:53'),
(73, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:20:48'),
(74, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:21:58'),
(75, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:24:31'),
(76, 'nusrat', 0x3a3a3100000000000000000000000000, '2018-05-01 16:25:31'),
(77, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:28:18'),
(78, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:29:05'),
(79, 'nusrat', 0x3a3a3100000000000000000000000000, '2018-05-01 16:31:24'),
(80, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:31:30'),
(81, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 16:32:17'),
(82, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 17:09:02'),
(83, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-01 17:55:44'),
(84, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-02 08:19:15'),
(85, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-02 21:20:19'),
(86, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-06 12:52:51'),
(87, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-06 13:19:56'),
(88, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-07 08:28:03'),
(89, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-07 09:00:06'),
(90, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-07 13:03:25'),
(91, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-08 06:43:51'),
(92, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-08 13:10:10'),
(93, 'aamer', 0x3a3a3100000000000000000000000000, '2018-05-11 06:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecilization`
--

CREATE TABLE `doctorspecilization` (
  `id` int(11) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecilization`
--

INSERT INTO `doctorspecilization` (`id`, `specilization`, `creationDate`, `updationDate`) VALUES
(4, 'Homeopath', '2016-12-28 06:39:26', ''),
(6, 'Dentist', '2016-12-28 06:40:08', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_qualification`
--

CREATE TABLE `doctors_qualification` (
  `id` int(11) NOT NULL,
  `doctor_uname` varchar(255) NOT NULL,
  `qualificaiton` text NOT NULL,
  `date_attained` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors_qualification`
--

INSERT INTO `doctors_qualification` (`id`, `doctor_uname`, `qualificaiton`, `date_attained`) VALUES
(12, 'aamer', '\r\n				F.C.P.S. [MICROBIOLOGY ]COLL.OF PHYSICIANS & SURGEONS PAKISTAN\r\n				M.B.,B.S. [BASIC MEDICAL QUALIFICATION ]QUAID-E-AZAM UNI.ISLAMABAD\r\n				M.C.P.S. [PATHOLOGY ]COLL.OF PHYSICIANS & SURGEONS PAKISTAN\r\n				', '28-01-1987\r\n				'),
(13, 'rubab', '\r\n				DIPLOMA IN DERMATOLOGY [DERMATOLOGY ]INSTITUTE OF DERMATOLOGY THAILAND\r\n				M.B.,B.S. [BASIC MEDICAL QUALIFICATION ]QUAID-E-AZAM UNI.ISLAMABAD\r\n				', '28-01-1987\r\n				'),
(14, 'sajid', '\n				F.C.P.S. [OTO-RHINO-LARYNGOLOGY ]COLL.OF PHYSICIANS & SURGEONS PAKISTAN\n				M.B.,B.S. [BASIC MEDICAL QUALIFICATION ]QUAID-E-AZAM UNI.ISLAMABAD\n				', '28-01-1987\r\n				'),
(16, 'imran', '\r\n				F.C.P.S. [OPHTHALMOLOGY ]COLL.OF PHYSICIANS & SURGEONS PAKISTAN\r\n				M.B.,B.S. [BASIC MEDICAL QUALIFICATION ]QUAID-E-AZAM UNI.ISLAMABAD\r\n				M.C.P.S. [OPHTHALMOLOGY ]COLL.OF PHYSICIANS & SURGEONS PAKISTAN\r\n				', '28-01-1987\r\n				'),
(17, 'saleem', '\r\n				M.B.,B.S. [BASIC MEDICAL QUALIFICATION ]PUNJAB UNIVERSITY LAHORE\r\n				MASTER OF SURGERY [UROLOGY ]PUNJAB UNIVERSITY LAHORE\r\n				', '21-08-1986\r\n				'),
(18, 'bilal', '\r\n				M.B.,B.S. [BASIC MEDICAL QUALIFICATION ]PUNJAB UNIVERSITY LAHORE\r\n				', '21-08-1986\r\n				'),
(19, 'irshad', '\r\n				M.B.,B.S. [BASIC MEDICAL QUALIFICATION ]B.Z.UNIVERSITY MULTAN\r\n				', '31-08-1986\r\n				'),
(20, 'saqib', '\r\n				B.D.S. [BASIC DENTAL QUALIFICATION ]UNI.OF HEALTH SCIENCES LHR\r\n				', '18-04-2013\r\n				'),
(22, 'khalid1', '\r\n				B.D.S. [BASIC DENTAL QUALIFICATION ]LIAQUAT UNIV. JAMSHORO\r\n				', '27-03-2013\r\n				'),
(31, 'nusrat', '\r\n				M.B.,B.S. [BASIC MEDICAL QUALIFICATION ]PUNJAB UNIVERSITY LAHORE\r\n				M.C.P.S. [OBSTETRICS & GYNAECOLOGY ]COLL.OF PHYSICIANS & SURGEONS PAKISTAN\r\n				', '25-09-1972\r\n				');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `doc_uname` varchar(255) NOT NULL,
  `patient_uname` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `doc_uname`, `patient_uname`, `rating`, `review`) VALUES
(1, 'aamer', 'plis', 4, 'AMaging'),
(8, 'aamer', 'plis', 2, 'best'),
(9, 'aamer', 'plis', 3, 'ncice'),
(10, 'aamer', 'plis', 3, 'hhhh'),
(11, 'khalid1', 'plis', 4, 'best'),
(12, 'khalid1', 'plis', 5, 'besttt');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` tinyint(5) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `staff_id` varchar(10) NOT NULL,
  `postal_address` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `first_name`, `last_name`, `staff_id`, `postal_address`, `phone`, `email`, `username`, `password`, `date`) VALUES
(2, 'abbas', 'asd', 'dasd', 'asd', 'dasd', 'asd@yahoo.com', 'test', 'test', '2018-02-16 11:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(11) NOT NULL,
  `radius` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `radius`) VALUES
(1, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL,
  `address` longtext,
  `city` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contactno` bigint(12) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `fullName`, `age`, `address`, `city`, `gender`, `email`, `username`, `password`, `contactno`, `regDate`, `picture`) VALUES
(9, 'shozi', 25, 'Harley', 'Islamabad', 'male', 'plis@ya', 'plis', 'ccbc9033e407502d997f3b5a7b3e087f', 923360093061, '2017-11-05 18:37:32', 'shozi1.jpg'),
(10, 'yass', 0, NULL, NULL, NULL, 'yass@gmail.com', 'yass', '202cb962ac59075b964b07152d234b70', 0, '2017-11-05 23:36:14', ''),
(11, '33', 33, '33', '33', '33', '11@yahoo.com', '11', '6512bd43d9caa6e02c990b0a82652dca', 0, '2017-12-10 19:56:38', 'all3.png'),
(12, 'hasaan', 3, '2', '2', '2', 'hasaan@yahoo.com', 'hasaan', '42c38e25987c276f450da8b2a428cabe', 0, '2017-12-11 08:02:08', '2part.png'),
(13, 'booz', NULL, NULL, NULL, NULL, 'booz@ya', 'booz', 'ef473ec284d7517c984df46a8b15e2bb', 0, '2018-03-19 14:54:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `patientslogstats`
--

CREATE TABLE `patientslogstats` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientslogstats`
--

INSERT INTO `patientslogstats` (`id`, `username`, `userip`, `loginTime`) VALUES
(1, '11', 0x3a3a3100000000000000000000000000, '2017-12-10 21:17:53'),
(2, '11', 0x3a3a3100000000000000000000000000, '2017-12-10 21:22:10'),
(3, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 03:17:47'),
(4, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 03:20:46'),
(5, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 05:22:05'),
(6, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 05:32:30'),
(7, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 06:01:28'),
(8, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 06:25:40'),
(9, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 06:50:51'),
(10, 'hasaan', 0x3a3a3100000000000000000000000000, '2017-12-11 08:02:15'),
(11, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 08:28:30'),
(12, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 08:40:29'),
(13, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 09:15:32'),
(14, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 09:22:37'),
(15, '11', 0x3a3a3100000000000000000000000000, '2017-12-11 11:29:59'),
(16, '11', 0x3a3a3100000000000000000000000000, '2017-12-12 00:29:50'),
(17, 'yass', 0x3a3a3100000000000000000000000000, '2018-03-18 06:39:09'),
(18, 'yass', 0x3a3a3100000000000000000000000000, '2018-03-18 11:16:47'),
(19, 'yass', 0x3a3a3100000000000000000000000000, '2018-03-18 11:51:42'),
(20, 'admin', 0x3a3a3100000000000000000000000000, '2018-03-18 13:02:12'),
(21, 'yass', 0x3a3a3100000000000000000000000000, '2018-03-19 04:35:05'),
(22, 'yass', 0x3a3a3100000000000000000000000000, '2018-03-19 04:44:40'),
(23, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 14:41:13'),
(24, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 14:48:08'),
(25, 'booz', 0x3a3a3100000000000000000000000000, '2018-03-19 14:54:11'),
(26, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 15:41:45'),
(27, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 17:02:07'),
(28, 'admin', 0x3a3a3100000000000000000000000000, '2018-03-19 19:45:12'),
(29, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 20:09:13'),
(30, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 20:10:14'),
(31, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 20:23:33'),
(32, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 20:30:56'),
(33, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 20:57:13'),
(34, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 21:44:18'),
(35, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-19 21:48:46'),
(36, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 01:20:58'),
(37, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 01:48:11'),
(38, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 01:55:20'),
(39, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 02:28:28'),
(40, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 02:35:12'),
(41, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 03:14:47'),
(42, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 03:21:34'),
(43, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 04:07:02'),
(44, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 04:24:16'),
(45, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 04:29:40'),
(46, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 04:32:39'),
(47, 'admin', 0x3a3a3100000000000000000000000000, '2018-03-20 04:55:33'),
(48, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 05:00:38'),
(49, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 05:03:48'),
(50, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 05:04:34'),
(51, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 05:22:37'),
(52, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 05:29:08'),
(53, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 15:36:37'),
(54, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 15:38:29'),
(55, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 16:58:35'),
(56, 'plis', 0x3a3a3100000000000000000000000000, '2018-03-20 17:00:03'),
(57, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-08 22:13:21'),
(58, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-11 06:19:58'),
(59, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-24 11:41:17'),
(60, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-27 12:50:37'),
(61, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-27 16:05:50'),
(62, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-27 20:44:51'),
(63, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-27 21:07:31'),
(64, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-29 02:18:39'),
(65, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-29 02:25:27'),
(66, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-29 02:33:11'),
(67, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-29 02:34:11'),
(68, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-29 22:46:23'),
(69, 'plis', 0x3a3a3100000000000000000000000000, '2018-04-29 22:51:05'),
(70, 'admin', 0x3a3a3100000000000000000000000000, '2018-05-01 04:48:41'),
(71, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 05:20:48'),
(72, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 09:39:22'),
(73, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 11:37:07'),
(74, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 11:40:26'),
(75, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 11:47:36'),
(76, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 11:57:56'),
(77, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 12:40:46'),
(78, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 13:46:45'),
(79, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 13:47:05'),
(80, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 14:27:19'),
(81, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 15:14:07'),
(82, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 17:09:38'),
(83, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 17:52:11'),
(84, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-01 17:55:29'),
(85, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-02 08:14:46'),
(86, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-02 20:57:42'),
(87, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-02 22:47:24'),
(88, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-05 12:48:39'),
(89, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-06 05:03:53'),
(90, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-06 05:27:34'),
(91, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-06 06:11:22'),
(92, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-06 13:11:51'),
(93, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-07 12:01:03'),
(94, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-07 13:03:42'),
(95, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-07 15:34:44'),
(96, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-07 18:53:06'),
(97, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-08 03:19:26'),
(98, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-08 03:36:36'),
(99, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-08 06:02:57'),
(100, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-08 06:40:08'),
(101, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-08 13:10:21'),
(102, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-10 15:26:31'),
(103, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-10 19:44:42'),
(104, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-10 19:46:56'),
(105, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-10 19:48:04'),
(106, 'plis', 0x3a3a3100000000000000000000000000, '2018-05-10 20:09:28');

-- --------------------------------------------------------

--
-- Table structure for table `patient_medical_record`
--

CREATE TABLE `patient_medical_record` (
  `id` int(11) NOT NULL,
  `patient_uname` varchar(255) NOT NULL,
  `medical_name` varchar(255) NOT NULL,
  `medical_description` varchar(255) NOT NULL,
  `other_details` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_medical_record`
--

INSERT INTO `patient_medical_record` (`id`, `patient_uname`, `medical_name`, `medical_description`, `other_details`, `postingDate`) VALUES
(13, 'plis', 'Blood type', 'æÏ}ÔUV;L´ ƒô.ahH›Bl_q¸Òu4Cë›e¬', '‰«R¯‹ŠWLdæc}ÌÞ¿E[¾™€V‘É\räN\Zh\rÎ', '2018-04-27 16:09:09'),
(14, 'plis', 'allergy', 'ú‹\0ˆ“£îàw?ãrcûÒ`Â¢Ó‡FÄ›ê}‰1', '¯®Ëœ«ã«\nšáÊÚ$lñÕcj$÷\n#Èµòùˆæ', '2018-04-27 16:09:09'),
(15, 'plis', 'alergies', 'ú‹\0ˆ“£îàw?ãrcûÒ`Â¢Ó‡FÄ›ê}‰1', '‰«R¯‹ŠWLdæc}ÌÞ¿E[¾™€V‘É\räN\Zh\rÎ', '2018-04-27 16:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacist`
--

CREATE TABLE `pharmacist` (
  `pharmacist_id` tinyint(5) NOT NULL,
  `liscense` varchar(255) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `pharmacy_name` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacist`
--

INSERT INTO `pharmacist` (`pharmacist_id`, `liscense`, `first_name`, `last_name`, `pharmacy_name`, `city`, `address`, `phone`, `email`, `username`, `password`, `date`) VALUES
(1, '234234', 'shoz', 'plis', 'LEO Pharmacy', 'Islamabad', 'asdasd', '23499', 'sadasd@ya', 'test', 'test', '2018-04-30 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_admin`
--

CREATE TABLE `pharmacy_admin` (
  `admin_id` tinyint(5) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `date` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_admin`
--

INSERT INTO `pharmacy_admin` (`admin_id`, `username`, `password`, `date`) VALUES
(1, 'admin', 'admin', '2018-04-30 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_invoice`
--

CREATE TABLE `pharmacy_invoice` (
  `invoice_id` int(5) NOT NULL,
  `patient_uname` varchar(255) NOT NULL,
  `pharmacy_name` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Unpaid',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Triggers `pharmacy_invoice`
--
DELIMITER $$
CREATE TRIGGER `tarehe` AFTER INSERT ON `pharmacy_invoice` FOR EACH ROW BEGIN
     SET @date=NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_prescription`
--

CREATE TABLE `pharmacy_prescription` (
  `id` tinyint(5) NOT NULL,
  `prescription_id` int(5) NOT NULL,
  `patient_uname` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `docname` varchar(255) NOT NULL,
  `medicine` varchar(255) NOT NULL,
  `dosage` varchar(255) NOT NULL,
  `timing` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_prescription`
--

INSERT INTO `pharmacy_prescription` (`id`, `prescription_id`, `patient_uname`, `time`, `docname`, `medicine`, `dosage`, `timing`, `date`, `cost`) VALUES
(3, 216, 'plis', ' 2018-04-27 20:57:58', ' aamer', '  band on ', '  20 milligrams ', '  3 days a week', '2018-05-08 05:03:38', 23),
(4, 217, 'plis', ' 2018-04-27 20:57:58', ' aamer', '  panadol ', '  20 milligrams ', '  3 days a week', '2018-05-08 05:03:38', 23),
(5, 210, 'plis', ' 2018-04-27 20:57:58', ' aamer', '  band on ', '  20 milligrams ', '  3 days a week', '2018-05-08 06:03:46', 56),
(6, 211, 'plis', ' 2018-04-27 20:57:58', ' aamer', '  panadol ', '  20 milligrams ', '  3 days a week', '2018-05-08 06:03:46', 56),
(7, 215, 'plis', ' 2018-04-27 20:57:58', ' aamer', '  band on ', '  20 milligrams ', '  3 days a week', '2018-05-10 15:38:13', 56),
(8, 216, 'plis', ' 2018-04-27 20:57:58', ' aamer', '  panadol ', '  20 milligrams ', '  3 days a week', '2018-05-10 15:38:13', 56);

--
-- Triggers `pharmacy_prescription`
--
DELIMITER $$
CREATE TRIGGER `taree` AFTER INSERT ON `pharmacy_prescription` FOR EACH ROW BEGIN
SET@date=NOW();
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_stock`
--

CREATE TABLE `pharmacy_stock` (
  `stock_id` tinyint(5) NOT NULL,
  `pharmacy_name` varchar(255) NOT NULL,
  `drug_name` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL,
  `company` varchar(20) NOT NULL,
  `supplier` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `date_supplied` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pharmacy_stock`
--

INSERT INTO `pharmacy_stock` (`stock_id`, `pharmacy_name`, `drug_name`, `category`, `description`, `company`, `supplier`, `quantity`, `cost`, `date_supplied`) VALUES
(1, 'Chaudhary Pharmacy', 'brufin', 'tablet', 'Painkiller', 'bla', 'blu', 253, 400, '2018-05-22 19:00:00'),
(2, 'LEO Pharmacy', 'panadol', 'health', 'bla', 'shizz', 'shizzal', 100, 10, '2018-05-10 20:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `doctor_uname` varchar(255) NOT NULL,
  `patient_uname` varchar(255) NOT NULL,
  `medicine_name` varchar(255) NOT NULL,
  `dosage` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`id`, `doctor_uname`, `patient_uname`, `medicine_name`, `dosage`, `time`, `duration`, `postingDate`) VALUES
(209, 'aamer', 'plis', ' band on ', ' 20 milligrams ', ' 3 days a week', '', '2018-04-27 15:57:58'),
(210, 'aamer', 'plis', ' panadol ', ' 20 milligrams ', ' 3 days a week', '', '2018-04-27 15:57:58'),
(211, 'aamer', 'plis', ' amoxil ', ' 2 milligrams ', ' 2 days a week', '', '2018-04-27 15:57:58'),
(212, 'aamer', 'plis', ' the Nadal ', ' 2 milligrams ', ' 1 day', '', '2018-04-27 15:57:58'),
(213, 'aamer', 'plis', ' panadol ', ' 2 milligrams ', ' 3 days a week', '', '2018-04-27 15:57:58'),
(214, 'aamer', 'plis', ' a bus ', ' Feroz ', ' 6 class', '', '2018-04-27 15:57:58'),
(215, 'aamer', 'plis', 'Yervoy', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(216, 'aamer', 'plis', 'Ramipril', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(217, 'aamer', 'plis', 'Macugen', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(218, 'aamer', 'plis', 'Ultrase', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(219, 'aamer', 'plis', 'Kadcyla', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(220, 'aamer', 'plis', 'Sabril', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(221, 'aamer', 'plis', 'Ultrase', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(222, 'aamer', 'plis', 'Ocrevus', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(223, 'aamer', 'plis', 'Ocufen', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(224, 'aamer', 'plis', 'Dispirin', '2mg', '5 days', '', '2018-04-27 15:57:58'),
(225, 'aamer', 'plis', 'Ibuprofen', '2mg', '2 days', '', '2018-04-27 15:57:58'),
(226, 'aamer', 'plis', 'Sabril', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(227, 'aamer', 'plis', 'Yervoy', '2mg', '5 days', '', '2018-04-27 15:57:58'),
(228, 'aamer', 'plis', 'Kadcyla', '10mg', '6 days', '', '2018-04-27 15:57:58'),
(229, 'aamer', 'plis', 'Macugen', '10mg', '2 days', '', '2018-04-27 15:57:58'),
(230, 'aamer', 'plis', 'Ultrase', '11mg', '1 day', '', '2018-04-27 15:57:58'),
(232, 'aamer', 'plis', 'Augmenten', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(233, 'aamer', 'plis', 'Ocrevus', '3mg', '2 days', '', '2018-04-27 15:57:58'),
(234, 'aamer', 'plis', 'Ultrase', '3mg', '2 days', '', '2018-04-27 16:04:17'),
(235, 'aamer', 'plis', 'Ocufen', '3mg', '3', '', '2018-04-27 20:28:02'),
(236, 'aamer', 'plis', 'Baclofen', '3mg', '2 days', '', '2018-04-27 20:31:26'),
(237, 'aamer', 'plis', 'Aspirin', '3mg', '2 days', '', '2018-04-27 20:33:32'),
(238, 'aamer', 'plis', 'Dispirin', '3mg', '2 days', '', '2018-04-27 20:41:33'),
(239, 'aamer', 'plis', 'Regix', '3mg', '3', '', '2018-04-27 20:53:23'),
(240, 'aamer', 'plis', 'Augmenten', '3mg', '2 days', '', '2018-04-27 21:02:30'),
(242, 'aamer', 'plis', 'Ultrase', '33', '3', '', '2018-04-29 22:49:24'),
(243, 'aamer', 'plis', ' panadol ', ' 2 milligrams ', ' 3 days a week ', ' 3 days', '2018-05-11 07:21:13'),
(244, 'aamer', 'plis', ' projects ', ' 2 milligrams ', ' 3 days a week ', ' 7 days', '2018-05-11 11:06:05'),
(245, 'aamer', 'plis', ' panadol ', ' 2 milligrams ', ' 3 days a week ', ' 14 days', '2018-05-11 11:06:06'),
(246, 'aamer', 'plis', ' panadol ', ' 2 milligrams ', ' 3 days a week ', ' 7 days', '2018-05-11 11:07:35'),
(247, 'aamer', 'plis', ' amoxil ', ' 3 milligrams ', ' 3 days a week ', ' 7 days', '2018-05-11 11:07:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pmdcNo` (`pmdcNo`),
  ADD UNIQUE KEY `docEmail` (`docEmail`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `doctorslogstats`
--
ALTER TABLE `doctorslogstats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors_qualification`
--
ALTER TABLE `doctors_qualification`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctor_uname` (`doctor_uname`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `patientslogstats`
--
ALTER TABLE `patientslogstats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_medical_record`
--
ALTER TABLE `patient_medical_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pharmacist`
--
ALTER TABLE `pharmacist`
  ADD PRIMARY KEY (`pharmacist_id`);

--
-- Indexes for table `pharmacy_admin`
--
ALTER TABLE `pharmacy_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `pharmacy_invoice`
--
ALTER TABLE `pharmacy_invoice`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `pharmacy_prescription`
--
ALTER TABLE `pharmacy_prescription`
  ADD PRIMARY KEY (`id`,`prescription_id`);

--
-- Indexes for table `pharmacy_stock`
--
ALTER TABLE `pharmacy_stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `cashier`
--
ALTER TABLE `cashier`
  MODIFY `cashier_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `doctorslogstats`
--
ALTER TABLE `doctorslogstats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
--
-- AUTO_INCREMENT for table `doctorspecilization`
--
ALTER TABLE `doctorspecilization`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctors_qualification`
--
ALTER TABLE `doctors_qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `patientslogstats`
--
ALTER TABLE `patientslogstats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT for table `patient_medical_record`
--
ALTER TABLE `patient_medical_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `pharmacist`
--
ALTER TABLE `pharmacist`
  MODIFY `pharmacist_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pharmacy_admin`
--
ALTER TABLE `pharmacy_admin`
  MODIFY `admin_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pharmacy_prescription`
--
ALTER TABLE `pharmacy_prescription`
  MODIFY `id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pharmacy_stock`
--
ALTER TABLE `pharmacy_stock`
  MODIFY `stock_id` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
