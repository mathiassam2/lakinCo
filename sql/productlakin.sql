-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 03:14 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `productlakin`
--

-- --------------------------------------------------------

--
-- Table structure for table `productlakin`
--

CREATE TABLE `productlakin` (
  `product_ID` int(11) NOT NULL,
  `name` varchar(64) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `image` text DEFAULT NULL,
  `code` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `productlakin`
--

INSERT INTO `productlakin` (`product_ID`, `name`, `price`, `image`, `code`) VALUES
(1, 'Supreme Oreo', 1400, 'cartimages/oreo1.jpg', 'oreo'),
(2, 'Louis Vuitton Bread', 6250, 'cartimages/lv1.png', 'bread'),
(3, 'Gold Coated Beef Burger', 5500, 'cartimages/goldburger1.png', 'burger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `productlakin`
--
ALTER TABLE `productlakin`
  ADD PRIMARY KEY (`product_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
