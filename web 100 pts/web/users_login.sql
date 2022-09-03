-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2021 at 11:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `prod_id` int(50) NOT NULL,
  `prod_code` varchar(50) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `num_of_stocks` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`prod_id`, `prod_code`, `prod_name`, `num_of_stocks`) VALUES
(1, 'ALEX N', 'ALEX Layered Necklace', 100),
(2, 'Niall Bangle', 'Niall Bangle', 100),
(3, 'Marbella G', 'Marbella in Gold', 100),
(4, 'Couple Ring', 'Couple Ring', 100),
(5, 'ZARA OS', 'Zara One-Sided Top', 300),
(6, 'BERSHKA LT', 'Bershka Lettuce Top', 500),
(7, 'ZARA CT', 'ZARA Racerback Top', 400),
(8, 'MANGO BD', 'MANGO Buttondown', 500);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sale_id` int(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `price` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pay_method` varchar(100) NOT NULL,
  `product_specs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sale_id`, `code`, `price`, `qty`, `total`, `fname`, `lname`, `address`, `email`, `pay_method`, `product_specs`) VALUES
(10, 'ZARA CT', 180, 5, 900, 'mia', 'Mulingbayan', 'lawa', 'mia@gmail.com', 'Gcash', 'dhasuhfuhuif'),
(11, 'ZARA CT', 180, 3, 540, 'akrfff', 'vvr', 'lawa', 'mlngbynmia', 'Gcash', 'ferfgerg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL,
  `types` varchar(50) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `types`) VALUES
(26, 'April Moog', 'april@gmail.com', 'april', '$2y$10$f81ZPO9TRCP0sl8BEiEsx.J6.svRgkDD8fyLkHgMDmjIsQ6Z8Wgj.', 'admin'),
(27, 'Mia Mulingbayan', 'mia@gmail.com', 'mia', '$2y$10$QH0bWsfP3SlPgBI9doK/bOSgIAIaDxWIzyEBfGzHcM9HRp1fAYkmC', 'supervisor'),
(31, 'Kristel', 'tel@gmail.com', 'tel', '$2y$10$Nj22UCGAIYaM2yHqWqq.1.hVwTTvAMClqCDegfo5KJPHxN6TVg7qW', 'user'),
(32, 'cyia jewelry', 'cyia.ph12@gmail.com', 'cyia', '$2y$10$AreQ3J29K0OC9mJMuGYHjOBjLKDBQ68if9RW9p5NWCqwb2wqi8vSa', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sale_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `prod_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
