-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2021 at 11:33 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database123`
--

-- --------------------------------------------------------

--
-- Table structure for table `address_det`
--

CREATE TABLE `address_det` (
  `sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pincode` int(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `landmark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address_det`
--

INSERT INTO `address_det` (`sr`, `name`, `phone`, `address`, `pincode`, `city`, `state`, `landmark`) VALUES
(1, 'Rudra Sharma', 2147483647, 'Mullana, ambala, haryana', 133207, 'mullana', '8', 'fgjgf'),
(2, 'Rudra Sharma', 2147483647, 'Mullana, ambala, haryana', 133207, 'mullana', '8', 'land'),
(3, 'Rudra Sharma', 2147483647, 'Mullana, ambala, haryana', 133207, 'mullana', '8', 'land'),
(4, '4qwg', 64684654, 'qertqterteqr', 645644, 'erterwer', 'ergerg', 'ergrthrt'),
(5, 'ewtewrt', 2147483647, 'ertwertewrt', 65456465, 'wergewrwert', 'retwer', 'ertwert'),
(6, 'Rudra Sharma', 2147483647, 'Mullana, ambala, haryana', 133207, 'mullana', '8', 'kljfd');

-- --------------------------------------------------------

--
-- Table structure for table `entry_details`
--

CREATE TABLE `entry_details` (
  `no` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry_details`
--

INSERT INTO `entry_details` (`no`, `username`, `phone`, `email`, `password`) VALUES
(1, '0', 2147483647, '0', '123'),
(2, '0', 65489778, '0', '0'),
(3, '0', 65489778, '0', '0'),
(4, '0', 65489778, '0', '0'),
(5, '0', 65489778, '0', '0'),
(6, '0', 65489778, '0', '0'),
(7, '0', 65489778, '0', '0'),
(8, '0', 123, '0', '0'),
(9, '0', 123, '0', '0'),
(10, '0', 123, '0', '0'),
(11, '0', 788979979, '0', '123'),
(12, '0', 788979979, '0', '123'),
(13, '0', 788979979, '0', '321'),
(14, '0', 788979979, '0', '321'),
(15, 'prince', 4646787, 'prijknl@gmail.com', '555'),
(16, 'azhar', 2147483647, 'xyz@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_det`
--
ALTER TABLE `address_det`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `entry_details`
--
ALTER TABLE `entry_details`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address_det`
--
ALTER TABLE `address_det`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `entry_details`
--
ALTER TABLE `entry_details`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
