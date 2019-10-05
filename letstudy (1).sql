-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2019 at 11:04 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `letstudy`
--

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `bookid` bigint(10) NOT NULL,
  `bookname` varchar(40) NOT NULL,
  `downloadlink` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` int(10) NOT NULL,
  `roomname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(50) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Contact` bigint(20) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `Branch`, `Username`, `Password`, `Contact`, `Email`) VALUES
('wgeyqw', '', 'hdg', 'ehb', 0, 'sjhdbv@gmail.com'),
('dwqf', '', 'rtd', '13225', 0, 'hjgf@gmail.com'),
('Athmika', 'Computer', 'athmi', '12345', 0, 'athmika@gmail.com'),
('Harsh', 'ETRX', 'HHH', 'abcd', 9876543210, 'hgokhry@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
