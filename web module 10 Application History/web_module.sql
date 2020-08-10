-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 10:42 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_module`
--

-- --------------------------------------------------------

--
-- Table structure for table `appeal`
--

CREATE TABLE `appeal` (
  `a_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `appeal` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appeal`
--

INSERT INTO `appeal` (`a_id`, `name`, `appeal`) VALUES
(424, 'aa', 'plis halp'),
(431, 'hala', 'plis'),
(0, '', ''),
(0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `change_app_program`
--

CREATE TABLE `change_app_program` (
  `app_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `course` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `change_app_program`
--

INSERT INTO `change_app_program` (`app_id`, `name`, `course`) VALUES
(0, '', ''),
(33, '3', '3'),
(123, '2', '2'),
(424, 'sad', '2231'),
(3233, '223', '2'),
(32321, '22', '21');

-- --------------------------------------------------------

--
-- Table structure for table `course_detail`
--

CREATE TABLE `course_detail` (
  `course_id` int(11) NOT NULL,
  `institute` varchar(15) NOT NULL,
  `course_title` varchar(15) NOT NULL,
  `course_code` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `country` varchar(15) NOT NULL,
  `location` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_detail`
--

INSERT INTO `course_detail` (`course_id`, `institute`, `course_title`, `course_code`, `start_date`, `end_date`, `country`, `location`) VALUES
(424, '2232', '22', 2, '2015-02-02', '2015-02-02', 'country', 'Location'),
(3323, 'je', '2', 2, '2015-02-02', '2015-02-02', 'country', 'Location'),
(111, 'bla', '2', 3, '2016-02-02', '2016-02-02', 'country', 'Location'),
(1995, 'comsats', 'Web', 202, '2015-02-02', '2015-02-02', 'country', 'Location');

-- --------------------------------------------------------

--
-- Table structure for table `employment_history`
--

CREATE TABLE `employment_history` (
  `e_id` int(11) NOT NULL,
  `company_name` char(10) NOT NULL,
  `worked_from` date NOT NULL,
  `worked_upto` date NOT NULL,
  `postion` char(10) NOT NULL,
  `other` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment_history`
--

INSERT INTO `employment_history` (`e_id`, `company_name`, `worked_from`, `worked_upto`, `postion`, `other`) VALUES
(111, 'yes', '2016-02-01', '2016-02-02', 'yes', ' ok'),
(1995, 'good', '2015-02-02', '2015-02-02', 'op', 'thx ');

-- --------------------------------------------------------

--
-- Table structure for table `general_detail`
--

CREATE TABLE `general_detail` (
  `id` int(11) NOT NULL,
  `question` varchar(15) NOT NULL,
  `answer1` varchar(15) NOT NULL,
  `answer2` varchar(15) NOT NULL,
  `answer3` varchar(15) DEFAULT NULL,
  `answer4` varchar(15) DEFAULT NULL,
  `previous_institute` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_detail`
--

INSERT INTO `general_detail` (`id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `previous_institute`) VALUES
(29, '111', 'B Transfer', 'N Applicant', 'None', 'None', ''),
(30, '1995', 'S Transfer', 'C Enrolled', 'Prior Exp', 'Work Exp', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `personal_detail`
--

CREATE TABLE `personal_detail` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `family_name` varchar(15) NOT NULL,
  `father_name` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `Year_study` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `international_student` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_detail`
--

INSERT INTO `personal_detail` (`id`, `first_name`, `family_name`, `father_name`, `dob`, `mobile_no`, `Year_study`, `email`, `international_student`) VALUES
(111, 'blue', 'pla', 'she', '2016-02-02', '03350520532', '2016-02-02', 'shehroze19@gmail.com', 'No'),
(1995, 'shehroze', 'shozi', 'rana', '2015-02-02', '03325104896', '2015-02-02', 'shehroze19@hotmail.com', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `revert_program`
--

CREATE TABLE `revert_program` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `revert_course` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `revert_program`
--

INSERT INTO `revert_program` (`id`, `name`, `revert_course`) VALUES
(0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reward_system`
--

CREATE TABLE `reward_system` (
  `r_id` int(11) NOT NULL,
  `scholarship_reward` varchar(200) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `otherdetail` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reward_system`
--

INSERT INTO `reward_system` (`r_id`, `scholarship_reward`, `option1`, `option2`, `option3`, `otherdetail`) VALUES
(1995, 'Half Bright Scholorship', 'Silver Medal Award', 'Cricket Award Winner', 'Outstanding', '3.5'),
(111, 'Half Bright Scholorship', 'None', 'Gymnastics Award Winner', 'aa', '2.3');

-- --------------------------------------------------------

--
-- Table structure for table `supporting_evidence`
--

CREATE TABLE `supporting_evidence` (
  `id` int(11) NOT NULL,
  `details` varchar(45) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supporting_evidence`
--

INSERT INTO `supporting_evidence` (`id`, `details`, `file`) VALUES
(111, 'yes', 'ok'),
(1995, 'ook', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial_group`
--

CREATE TABLE `tutorial_group` (
  `t_id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL DEFAULT '',
  `department` varchar(15) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial_group`
--

INSERT INTO `tutorial_group` (`t_id`, `name`, `department`, `subject`, `date`, `experience`) VALUES
(1, 'Ali', 'CS', 'Calculus', '2016-02-02', 7),
(2, 'Ahmed', 'CS', 'Calculus', '2016-02-02', 7),
(3, 'Bebo', 'CS', 'OOP', '2016-02-02', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `change_app_program`
--
ALTER TABLE `change_app_program`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `course_detail`
--
ALTER TABLE `course_detail`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `employment_history`
--
ALTER TABLE `employment_history`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `general_detail`
--
ALTER TABLE `general_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_detail`
--
ALTER TABLE `personal_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revert_program`
--
ALTER TABLE `revert_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward_system`
--
ALTER TABLE `reward_system`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `supporting_evidence`
--
ALTER TABLE `supporting_evidence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorial_group`
--
ALTER TABLE `tutorial_group`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employment_history`
--
ALTER TABLE `employment_history`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3324;
--
-- AUTO_INCREMENT for table `general_detail`
--
ALTER TABLE `general_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `personal_detail`
--
ALTER TABLE `personal_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38554;
--
-- AUTO_INCREMENT for table `reward_system`
--
ALTER TABLE `reward_system`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1996;
--
-- AUTO_INCREMENT for table `supporting_evidence`
--
ALTER TABLE `supporting_evidence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3324;
--
-- AUTO_INCREMENT for table `tutorial_group`
--
ALTER TABLE `tutorial_group`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
