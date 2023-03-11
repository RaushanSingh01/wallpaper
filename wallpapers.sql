-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 06:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallpapers`
--

-- --------------------------------------------------------

--
-- Table structure for table `down`
--

CREATE TABLE `down` (
  `id` int(11) NOT NULL,
  `USERNAME` varchar(200) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `down`
--

INSERT INTO `down` (`id`, `USERNAME`, `name`) VALUES
(1, 'raushan12345', 'animals lover'),
(2, 'raushan12345', 'car lover'),
(3, 'raushan12345', 'android lover'),
(4, 'raushan12345', 'image'),
(5, 'raushan12345', 'image'),
(6, 'raushan12345', 'car lover'),
(7, 'raushan12345', 'roushan'),
(8, 'raushan12345', 'roushanjiraf'),
(9, 'raushan12345', 'animals lover'),
(10, 'raushan12345', 'car lover'),
(11, 'raushan12345', 'android lover'),
(12, 'raushan12345', 'image'),
(13, 'raushan12345', 'image'),
(14, 'raushan12345', 'car lover'),
(15, 'raushan12345', 'roushan'),
(16, 'raushan12345', 'roushanjiraf'),
(17, 'raushan12345', 'animals lover'),
(18, 'raushan12345', 'car lover'),
(19, 'raushan12345', 'android lover'),
(20, 'raushan12345', 'image'),
(21, 'raushan12345', 'image'),
(22, 'raushan12345', 'car lover'),
(23, 'raushan12345', 'roushan'),
(24, 'raushan12345', 'roushanjiraf'),
(25, '', 'animals lover'),
(26, '', 'car lover'),
(27, '', 'android lover'),
(28, '', 'image'),
(29, '', 'image'),
(30, '', 'car lover'),
(31, '', 'roushan'),
(32, '', 'roushanjiraf'),
(33, '', 'animals lover'),
(34, '', 'car lover'),
(35, '', 'android lover'),
(36, '', 'image'),
(37, '', 'image'),
(38, '', 'car lover'),
(39, '', 'roushan'),
(40, '', 'roushanjiraf'),
(41, 'kumar', 'animals lover'),
(42, 'kumar', 'car lover'),
(43, 'kumar', 'android lover'),
(44, 'kumar', 'image'),
(45, 'kumar', 'image'),
(46, 'kumar', 'car lover'),
(47, 'kumar', 'roushan'),
(48, 'kumar', 'roushanjiraf'),
(49, 'kumar', 'animals lover'),
(50, 'kumar', 'car lover'),
(51, 'kumar', 'android lover'),
(52, 'kumar', 'image'),
(53, 'kumar', 'image'),
(54, 'kumar', 'car lover'),
(55, 'kumar', 'roushan'),
(56, 'kumar', 'roushanjiraf'),
(57, 'kumar', 'animals lover'),
(58, 'kumar', 'car lover'),
(59, 'kumar', 'android lover'),
(60, 'kumar', 'image'),
(61, 'kumar', 'image'),
(62, 'kumar', 'car lover'),
(63, 'kumar', 'roushan'),
(64, 'kumar', 'roushanjiraf'),
(65, 'kumar', 'android lover'),
(66, 'kumar', 'animals lover'),
(67, 'kumar', 'image'),
(68, 'kumar', 'roushanjiraf');

-- --------------------------------------------------------

--
-- Table structure for table `sinup`
--

CREATE TABLE `sinup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinup`
--

INSERT INTO `sinup` (`id`, `name`, `password`, `email`, `username`) VALUES
(1, 'raushan', '12345', 'raushan@gmail.com', 'raushan12345'),
(2, 'Rahul Raj', 'rahul2123', 'rahulray.raj@gmail.com', 'rahulraj'),
(3, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `uplode`
--

CREATE TABLE `uplode` (
  `id` int(11) NOT NULL,
  `IMAGE` blob DEFAULT NULL,
  `NAME` varchar(200) DEFAULT NULL,
  `CATEGORY` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uplode`
--

INSERT INTO `uplode` (`id`, `IMAGE`, `NAME`, `CATEGORY`) VALUES
(1, 0x75706c6f6465696d6167652f616e696d616c312e6a666966, 'animals lover', 'animals'),
(2, 0x75706c6f6465696d6167652f636172312e6a666966, 'car lover', 'cars'),
(3, 0x75706c6f6465696d6167652f696d616765732e706e67, 'android lover', 'android'),
(4, 0x75706c6f6465696d6167652f322e6a7067, 'image', 'animals'),
(5, 0x75706c6f6465696d6167652f636172312e6a666966, 'image', 'cars'),
(6, 0x75706c6f6465696d6167652f636172732e6a7067, 'car lover', 'cars'),
(7, 0x75706c6f6465696d6167652f636172312e6a666966, 'roushan', 'cars'),
(8, 0x75706c6f6465696d6167652f616e696d616c732e6a7067, 'roushanjiraf', 'animals');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `down`
--
ALTER TABLE `down`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `sinup`
--
ALTER TABLE `sinup`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `uplode`
--
ALTER TABLE `uplode`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `down`
--
ALTER TABLE `down`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `sinup`
--
ALTER TABLE `sinup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uplode`
--
ALTER TABLE `uplode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
