-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 01:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `name` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`name`, `RegDate`, `amount`) VALUES
('neuro', '2021-10-06 09:04:29', 800),
('surgery', '2021-10-06 09:04:42', 1500),
('physio', '2021-10-06 09:04:50', 600),
('physician', '2021-10-06 11:20:45', 500);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `name` varchar(120) DEFAULT NULL,
  `Branch` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `phoneno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`name`, `Branch`, `RegDate`, `phoneno`) VALUES
('hariom2', 'physio', '2021-10-06 09:06:50', 1237894560),
('hariom3', 'neuro', '2021-10-06 09:07:24', 2147483647),
('hariom4', 'surgery', '2021-10-06 09:07:55', 2147483647),
('hariom56', 'surgery', '2021-10-06 11:16:59', 2147483647),
('hariom78', 'surgery', '2021-10-06 11:21:20', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(120) DEFAULT NULL,
  `Branch` varchar(200) DEFAULT NULL,
  `registerdate` date DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `phoneno` int(10) DEFAULT NULL,
  `Age` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `Branch`, `registerdate`, `RegDate`, `phoneno`, `Age`) VALUES
(0, 'hariom8', 'physio', '2021-10-05', '2021-10-06 09:17:02', 1234567890, 20),
(0, 'hariom9', 'neuro', '2021-10-06', '2021-10-06 09:17:25', 2147483647, 21),
(0, 'hariom10', 'surgery', '2021-10-06', '2021-10-06 09:17:42', 2147483647, 23),
(0, 'hariom11', 'surgery', '2021-10-07', '2021-10-06 09:18:11', 2147483647, 21),
(0, 'hariom12', 'physio', '2021-10-07', '2021-10-06 09:18:27', 2147483647, 21),
(0, 'hariom13', 'surgery', '2021-10-08', '2021-10-06 09:18:42', 2147483647, 21),
(0, 'hari98', 'neuro', '2021-10-08', '2021-10-06 11:18:23', 2147483647, 21),
(0, 'hari34', 'neuro', '2021-10-08', '2021-10-06 11:22:53', 1234567890, 21);

-- --------------------------------------------------------

--
-- Table structure for table `signupid`
--

CREATE TABLE `signupid` (
  `Username` varchar(120) DEFAULT NULL,
  `Fullname` varchar(120) DEFAULT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(250) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `register` varchar(255) DEFAULT NULL,
  `phoneno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupid`
--

INSERT INTO `signupid` (`Username`, `Fullname`, `Email`, `Password`, `RegDate`, `register`, `phoneno`) VALUES
('hari1', 'hariom1', 'hari1@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 03:34:04', 'admin', 1234567890),
('hari2', 'hariom2', 'hari2@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 03:36:50', 'doctor', 1237894560),
('hari3', 'hariom3', 'hari3@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 03:37:24', 'doctor', 2147483647),
('hari4', 'hariom4', 'hari4@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 03:37:55', 'doctor', 2147483647),
('hari56', 'hariom56', 'hari56@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 11:16:59', 'doctor', 2147483647),
('hari5', 'hariom5', 'hari5@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 03:38:23', 'staff', 1237894560),
('hari6', 'hariom6', 'hari6@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 03:38:58', 'staff', 2147483647),
('hari78', 'hariom78', 'hari78@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 11:21:20', 'doctor', 2147483647),
('hari7', 'hariom7', 'hari7@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 03:39:23', 'staff', 2147483647),
('hari99', 'hariom99', 'hari99@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-10-06 11:22:02', 'staff', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `name` varchar(120) DEFAULT NULL,
  `Branch` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `phoneno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`name`, `Branch`, `RegDate`, `phoneno`) VALUES
('hariom5', 'neuro', '2021-10-06 09:08:23', 1237894560),
('hariom6', 'surgery', '2021-10-06 09:08:58', 2147483647),
('hariom7', 'physio', '2021-10-06 09:09:23', 2147483647),
('hariom99', 'neuro', '2021-10-06 11:22:02', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signupid`
--
ALTER TABLE `signupid`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
