-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 11:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cst499`
--

-- --------------------------------------------------------

--
-- Table structure for table `courseinformation`
--

CREATE TABLE `courseinformation` (
  `courseID` int(6) NOT NULL,
  `courseName` varchar(20) NOT NULL,
  `courseSchedule` varchar(25) NOT NULL,
  `courseInstructor` varchar(25) NOT NULL,
  `courseBuilding` varchar(25) NOT NULL,
  `courseOnline` tinyint(1) NOT NULL,
  `studentCount` int(1) NOT NULL,
  `studentMax` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courseinformation`
--

INSERT INTO `courseinformation` (`courseID`, `courseName`, `courseSchedule`, `courseInstructor`, `courseBuilding`, `courseOnline`, `studentCount`, `studentMax`) VALUES
(100001, 'Intro Comp Sci', '01/01 - 06/01', 'Prof. Smith', 'Comp Sci', 0, 0, 9),
(100002, 'Intermed. Comp Sci', '06/01 - 12/01', 'Prof. Brown', 'Comp Sci', 0, 0, 9),
(100003, 'Adv Comp Sci', '01/01 - 06/01', 'Prof. Green', 'Comp Sci', 0, 0, 9),
(100004, 'Intro Poli Sci', '01/01 - 06/01', 'Prof. Blue', 'Lib Arts', 1, 0, 9),
(100006, 'Intermed. Poli Sci', '06/01 - 12/01', 'Prof. Smith', 'Lib Arts', 1, 0, 9),
(100008, 'Adv Poli Sci', '01/01 - 06/01', 'Prof. Brown', 'Lib Arts', 0, 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(8) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `firstName`, `lastName`, `email`, `password`, `phone`) VALUES
(40, 'Brandyn', 'Tweedly', 'tweedly92@yahoo.com', '1234', '5868591156');

-- --------------------------------------------------------

--
-- Table structure for table `studentstocourses`
--

CREATE TABLE `studentstocourses` (
  `id` int(8) NOT NULL,
  `studentID` int(11) NOT NULL,
  `courseID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentstocourses`
--

INSERT INTO `studentstocourses` (`id`, `studentID`, `courseID`) VALUES
(58, 40, 100008);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courseinformation`
--
ALTER TABLE `courseinformation`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentstocourses`
--
ALTER TABLE `studentstocourses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courseinformation`
--
ALTER TABLE `courseinformation`
  MODIFY `courseID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100009;

--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `studentstocourses`
--
ALTER TABLE `studentstocourses`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
