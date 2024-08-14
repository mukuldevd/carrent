-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 02:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalcar`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwordagain` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`id`, `username`, `email`, `passwordagain`, `password`) VALUES
(1, 'ab', 'abcd@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'jaya', 'jaya@gmail.com', '', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'keya', 'keyam777@gmail.com', '', '74378b19b736af202de0a80ec489697e');

-- --------------------------------------------------------

--
-- Table structure for table `carprice`
--

CREATE TABLE `carprice` (
  `carid` int(11) NOT NULL,
  `carname` varchar(200) NOT NULL,
  `cartype` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `services` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carprice`
--

INSERT INTO `carprice` (`carid`, `carname`, `cartype`, `price`, `services`, `created_at`, `updated_at`, `status`) VALUES
(8, 'Chauffeur driven small cars', 'small cars', 1200.00, 'test3', '2024-08-13 08:33:02', '2024-08-13 08:33:02', NULL),
(9, 'Chauffeur driven small cars', 'small cars', 1200.00, 'test3', '2024-08-13 10:19:29', '2024-08-13 10:19:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercarstatus`
--

CREATE TABLE `usercarstatus` (
  `id` int(11) NOT NULL,
  `datebooking` date NOT NULL,
  `timebooking` time NOT NULL,
  `username` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `carname` varchar(200) NOT NULL,
  `cartype` varchar(200) NOT NULL,
  `price` double(10,2) NOT NULL,
  `services` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usercarstatus`
--

INSERT INTO `usercarstatus` (`id`, `datebooking`, `timebooking`, `username`, `userid`, `carid`, `created_at`, `updated_at`, `carname`, `cartype`, `price`, `services`) VALUES
(6, '2024-08-22', '02:30:00', 'test1', 1, 8, '2024-08-13 13:01:04', '2024-08-13 13:01:04', 'test2', '1200', 0.00, 'test4'),
(22, '2024-08-31', '16:53:00', 'keya', 3, 9, '2024-08-14 05:26:24', '2024-08-14 05:26:24', 'test1', 'test2', 0.00, 'test1');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `passwordagain` varchar(200) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`userid`, `username`, `email`, `password`, `passwordagain`, `reg_date`) VALUES
(1, 'Keya', 'keyam777@gmail.com', '25f9e794323b453885f5181f1b624d0b', '', '2024-08-13 05:48:14'),
(2, 'k1', 'keyam777999@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '2024-08-13 05:58:29'),
(3, 'keya', 'admin@qwiktest.com', '81dc9bdb52d04dc20036dbd8313ed055', '', '2024-08-13 08:36:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carprice`
--
ALTER TABLE `carprice`
  ADD PRIMARY KEY (`carid`);

--
-- Indexes for table `usercarstatus`
--
ALTER TABLE `usercarstatus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`),
  ADD KEY `carid` (`carid`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregister`
--
ALTER TABLE `adminregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carprice`
--
ALTER TABLE `carprice`
  MODIFY `carid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usercarstatus`
--
ALTER TABLE `usercarstatus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `usercarstatus`
--
ALTER TABLE `usercarstatus`
  ADD CONSTRAINT `carid` FOREIGN KEY (`carid`) REFERENCES `carprice` (`carid`),
  ADD CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `userregister` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
