-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 07:15 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

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
(1, 'ALEX ', 'Layered Necklace', 24),
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
(17, 'ZARA CT', 180, 2, 360, 'april', 'april', 'looc', 'april@gmail.com', 'Gcash', 'pink, small'),
(18, 'ZARA CT', 180, 5, 900, 'jnjk', 'maBHJDADB', 'jknjkn', 'gh@gmail.com', 'Gcash', 'white'),
(19, 'ZARA CT', 180, 2, 360, 'deo', 'a', 'a', 'april@gmail.com', 'Gcash', 'aaa'),
(20, 'ZARA CT', 150, 2, 300, 'mia', 'mia', 'mia', 'mia@gmail.com', 'Cash on Delivery', 'mia');

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
  `type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`, `type`) VALUES
(67, 'admin', 'admin@gmail.com', 'admin', '$2y$10$6mis9/bofYqRSD1zb2PSS.5Tiz0pW/CfMqqLrzDL6Jcg1W8sWIK8O', 'admin'),
(68, 'april', 'april@gmail.com', 'april', '$2y$10$fv2ngVS5L8kVXApFhrro7eRD8ysNNXIbjgVvZRTQ0eJ95FD3RrtDy', 'admin'),
(69, 'deo', 'krukruinamerks@gmail.com', 'deo', '$2y$10$QNYWkHCvsIdp3ndoM08UOOJub8Jo6.V2ETeSOze98Q1f61dto3l6u', 'supervisor'),
(70, 'mia', 'mia@gmail.com', 'miaa', '$2y$10$kfp8YuroLt0P4j5ASEIvUuuSITxGOLc5bYgxcREfwHB.I3c2sQOEC', 'admin'),
(71, 'camile', 'camile@gmail.com', 'camile', '$2y$10$GM/0BH7HNo2wefjlCxXy8eqZFaGSmzes6o6G5F3H10zX2TNQPp8Ci', 'supervisor'),
(72, 'suzy', 'suzy@gmail.com', 'suzy', '$2y$10$GvH3MpoDLV3zsMcqgj72oO2y/cvhV4aZPKN0OuJctY1Wx5XFuvfoK', 'user');

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
  MODIFY `prod_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sale_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
