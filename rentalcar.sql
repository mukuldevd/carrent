-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 03:34 PM
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
(1, 'keya', 'keyam777@gmail.com', '', '74378b19b736af202de0a80ec489697e'),
(2, 'keya', 'keyam777@gmail.com', '', '9b05de73d43f8c4ec1110c6bcc5312bc'),
(3, 'jaya', 'keyam777@gmail.com', '', '74378b19b736af202de0a80ec489697e');

-- --------------------------------------------------------

--
-- Table structure for table `carprice`
--

CREATE TABLE `carprice` (
  `id` int(11) NOT NULL,
  `carname` varchar(200) NOT NULL,
  `cartype` varchar(200) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `services` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carprice`
--

INSERT INTO `carprice` (`id`, `carname`, `cartype`, `price`, `services`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'test2', 0.00, '', '2024-08-09 11:09:39', '2024-08-09 11:09:39'),
(2, 'abc', 'cbjsbfkjs', 0.00, 'khdkds', '2024-08-09 11:10:11', '2024-08-09 11:10:11'),
(3, 'test1', 'test2', 5646546.00, 'test3', '2024-08-09 11:54:58', '2024-08-09 11:54:58'),
(4, 'test1', 'dsgdfsh', 5646546.00, 'snakjdja', '2024-08-09 12:29:24', '2024-08-09 12:29:24'),
(5, 'abc', 'dsgdfsh', 5646546.00, 'snakjdja', '2024-08-09 12:31:04', '2024-08-09 12:31:04');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `passwordagain` varchar(200) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `username`, `email`, `password`, `passwordagain`, `reg_date`) VALUES
(1, 'keya', 'keyam777@gmail.com', '74378b19b736af202de0a80ec489697e', '', '2024-08-08 15:35:35'),
(2, 'jaya', 'keyam77700@gmail.com', 'kl', '', '2024-08-08 15:35:35'),
(3, 'k1', 'keyam7777@gmail.com', '50a2c33221d835c9a5062f6eaa44abc1', '', '2024-08-08 15:36:12');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
