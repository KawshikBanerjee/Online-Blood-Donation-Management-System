-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 03:05 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev_kawshikcse17`
--
CREATE DATABASE IF NOT EXISTS `dev_kawshikcse17` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dev_kawshikcse17`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `ok` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `pass`, `ok`) VALUES
('jonas', '1921', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bloodGroup` varchar(4) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `donateCount` int(11) NOT NULL,
  `isDelete` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `bloodGroup`, `email`, `contact`, `address`, `donateCount`, `isDelete`) VALUES
(1, 'Azad', 'B+', 'azad.h@gmail.com', '01717420420', 'Rajshahi', 3, 0),
(2, 'Niloy', 'AB-', 'niloy@gmail.com', '01515420420', 'Pabna', 3, 0),
(6, 'Saniur', 'O+', 'saniur@gmail.com', '01313420420', 'Dhaka', 6, 0),
(7, 'Avijit', 'AB+', 'avijit@gmail.com', '01616420420', 'Dhaka', 1, 0),
(8, 'Bijoy', 'A-', 'bijoy@gmail.com', '01010420420', 'Sylhet', 3, 0),
(9, 'Washiqur', 'A+', 'washiq@ieee.org', '01919420420', 'Cumilla', 2, 0),
(10, 'Shafiul', 'A-', 'shafi@ieee.org', '01212420420', 'Chittagong', 4, 0),
(11, 'Bonya', 'B-', 'bonya@yahoo.com', '01414420420', 'Borishal', 1, 0),
(12, 'Dipon', 'O-', 'faysal.dipon@gmail.com', '01313345345', 'Dhaka', 3, 0),
(13, 'Kawshik', 'AB+', 'k.banerjee2024@gmail.com', '01717629764', 'Paris', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
