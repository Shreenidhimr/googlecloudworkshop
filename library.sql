-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 03:55 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `usn` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sem` int(2) NOT NULL,
  `branch` text NOT NULL,
  `sec` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`usn`, `name`, `sem`, `branch`, `sec`) VALUES
('4JN16IS096', 'SHREENIDHI M R', 5, 'INFORMATION SCIENCE AND ENGINEERING', 'B'),
('4JN16IS118', 'VINEETH KOTHARI', 5, 'INFORMATION SCIENCE AND ENGINEERING', 'B'),
('4JN16IS092', 'SHAMANTH M ', 5, 'INFORMATION SCIENCE AND ENGINEERING', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `Name` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`Name`, `designation`, `username`) VALUES
('DR. JYOTHI K', 'HEAD OF DEP', 'JYOTHIK'),
('SATHYANARAYAN. K. B', 'Assistant professor', 'SATHYANARAYANAKB');

-- --------------------------------------------------------

--
-- Table structure for table `inward`
--

CREATE TABLE `inward` (
  `book name` text NOT NULL,
  `author name` text NOT NULL,
  `year of publishing` int(5) NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inward`
--

INSERT INTO `inward` (`book name`, `author name`, `year of publishing`, `count`) VALUES
('MICROPROCESSOR', 'MUHAMMED ALI', 2017, 500);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` varchar(50) NOT NULL,
  `book` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `DOI` text NOT NULL,
  `DD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `book`, `author`, `DOI`, `DD`) VALUES
('4jn16is096', 'STRENGTH OF MATERIALS', 'SHREEHARI', '2018-08-24', '2018-08-31'),
('4jn16is096', 'MICROPROCESSOR', 'MUHAMMED ALI', '2018-09-14', '2018-09-23');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `usn` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usn`, `password`) VALUES
('4JN16IS096', '644b1dd9d4ee82c7d94557d7a7546bff'),
('JYOTHIK', 'dc3ca93ca0034656b180ef0c3e40f68b'),
('4JN16IS118', '644b1dd9d4ee82c7d94557d7a7546bff'),
('SATHYANARAYANAKB', '644b1dd9d4ee82c7d94557d7a7546bff'),
('4JN16IS092', '644b1dd9d4ee82c7d94557d7a7546bff');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `username` text NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`username`, `role`) VALUES
('SATHYANARAYANAKB', 'admin'),
('JYOTHIK', 'root');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
