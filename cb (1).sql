-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 09:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cb`
--

-- --------------------------------------------------------

--
-- Table structure for table `donateamt`
--

CREATE TABLE `donateamt` (
  `user` varchar(250) NOT NULL,
  `DName` varchar(250) NOT NULL,
  `Amt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donateamt`
--

INSERT INTO `donateamt` (`user`, `DName`, `Amt`) VALUES
('Nikhil', 'Pure Food & Water', 5000),
('Nikhil', 'Pure Food & Water', 800),
('Nikhil', 'Medical', 2000),
('Nikhil', 'Medical', 2000),
('Nikhil', 'Pure Food & Water', 1000),
('Nikhil', 'Pure Food & Water', 1000),
('Nikhil', 'Pure Food & Water', 1000),
('Nikhil', 'education', 1000),
('Nikhil', 'education', 1000),
('jayesh', 'Pure Food & Water', 1000),
('Nikhil', 'orphange', 2000),
('Nikhil', 'test', 8500),
('sarthak', 'demo2', 100),
('Nikhil', 'indian army', 200),
('PR', 'laxmichitfund', 1000),
('RN', 'demo2', 1800);

-- --------------------------------------------------------

--
-- Table structure for table `donationreg`
--

CREATE TABLE `donationreg` (
  `DName` varchar(250) NOT NULL,
  `EID` varchar(250) NOT NULL,
  `AMT` int(11) NOT NULL,
  `SID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donationreg`
--

INSERT INTO `donationreg` (`DName`, `EID`, `AMT`, `SID`) VALUES
('Pure Food & Water', 'food@gmail.com', 48000, 1),
('Medical', 'Medical@gmail.com', 19000, 2),
('education', 'education@gmail.com', 12000, 3),
('orphange', 'o@gmail', 15000, 4),
('test', 'test@gmail.com', 8500, 5),
('demo2', 'demo@gmail.com', 1900, 6),
('indian army', 'army@gmail.comm', 200, 7),
('laxmichitfund', 'LAX@GMAIL.COM', 1000, 8);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `AT` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user`, `password`, `AT`) VALUES
('Nikhil', '123', 'Admin'),
('Joshi', '123', 'user'),
('Vashnavi', '123', 'user'),
('Aru', '123', 'Admin'),
('jayesh', '123', 'user'),
('Pratik', '123', 'User'),
('Rohit', '123', 'User'),
('Demo', '123', 'User'),
('sarthak', '123', 'User'),
('pranav', '', 'User'),
('PR', '123', 'User'),
('RN', '123', 'User');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
