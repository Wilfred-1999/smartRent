-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 11:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srental`
--

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(10) NOT NULL,
  `tenantnames` varchar(100) NOT NULL,
  `occupiedhouse` varchar(100) NOT NULL,
  `timeduration` int(100) NOT NULL,
  `monthrent` int(100) NOT NULL,
  `totalrent` int(100) NOT NULL,
  `beginingdate` date NOT NULL,
  `enddate` date NOT NULL,
  `contractstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `tenantnames`, `occupiedhouse`, `timeduration`, `monthrent`, `totalrent`, `beginingdate`, `enddate`, `contractstatus`) VALUES
(20, 'Mushi wakubanza', 'Msingwa01', 6, 50000, 300000, '2021-11-22', '2022-05-22', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

CREATE TABLE `houses` (
  `id` int(250) NOT NULL,
  `housename` varchar(250) NOT NULL,
  `district` varchar(250) NOT NULL,
  `ward` varchar(250) NOT NULL,
  `street` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`id`, `housename`, `district`, `ward`, `street`) VALUES
(5, 'Msingwa01', 'Kinondoni', 'mbezi', 'msingwa'),
(6, 'Msingwa02', 'Kinondoni', 'mbezi', 'msingwa'),
(8, 'Msingwa03', 'Kinondoni', 'mbezi', 'msingwa'),
(12, 'Moja park 01', 'Ubungo', 'Wazo', 'Madale');

-- --------------------------------------------------------

--
-- Table structure for table `tenabus`
--

CREATE TABLE `tenabus` (
  `id` int(20) NOT NULL,
  `tenantnames` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenabus`
--

INSERT INTO `tenabus` (`id`, `tenantnames`, `username`, `email`, `phonenumber`, `password`, `usertype`) VALUES
(2, 'Wilfred Massawe', 'massawe2022', 'massawe@gmail.com', 'phonenumber', '1234', 'tenant'),
(5, 'Mushi wakubanza', 'mushitz', 'mushitz@gmail.com', '0629564719', '1999', 'tenant'),
(11, 'Emanuel Muhale', 'muhale@gmail.com', 'muhale@gmail.com', 'phonenumber', '123456', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tenabus`
--
ALTER TABLE `tenabus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tenabus`
--
ALTER TABLE `tenabus`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
