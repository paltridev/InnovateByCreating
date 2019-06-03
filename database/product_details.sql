-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 02:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `price`, `description`) VALUES
(1, 'AMD RYZEN 3 2200G', 6000, 'processor'),
(2, 'AMD RYZEN 5 2600X', 8000, 'processor'),
(3, 'INTEL CORE I3-8100', 8000, 'processor'),
(4, 'INTEL CORE I5-8600K', 10000, 'processor'),
(5, 'INTEL CORE I7-8700K', 12000, 'processor'),
(6, 'MSI B350 Tomahawk', 15000, 'Motherboard'),
(7, 'ASUS Prime Z370-A', 12000, 'Motherboard'),
(8, 'MSI H270 Gaming M3', 12000, 'Motherboard'),
(9, 'Gigabyte x299 Aorus', 18000, 'Motherboard'),
(10, 'ASUS Rog Zenith Extreme', 25000, 'Motherboard'),
(11, 'G.Skill Trident Z RBG', 12000, '16gb x 2 Ram'),
(12, 'Kingston Hyper X Fury', 10000, '8gb x 2 Ram'),
(13, 'Hyper X Predator', 16000, '16gb x 2 Ram'),
(14, 'Corsair Vengeance', 15000, '16gb x 2 Ram'),
(15, 'Corsair Dominant', 17000, '8gb x 2 Ram'),
(16, 'Sapphire Radeon NITRO+ RX 570', 25000, '4gb GPU'),
(17, 'ZOTAC GeForce GTX 1060 Ti AMP Extreme Core Edition', 25000, '6gb GPU'),
(18, 'MSI Radeon RX 560 AERO', 22000, '4gb GPU'),
(19, 'GeForce GTX 1050 Mini', 19000, '2gb GPU'),
(20, 'ZOTAC GeForce GTX 1080 Ti AMP Extreme Core Edition', 30000, '11gb GPU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
