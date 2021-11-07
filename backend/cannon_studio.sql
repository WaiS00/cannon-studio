-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 07, 2021 at 07:30 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cannon_studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `name`, `category`, `code`, `image`, `price`) VALUES
(1, 'Cannon Original DSLR', 'set', 'dslr', 'resources/img/dslr-1.png', 10000.00),
(2, 'EOS 850d', 'set', 'eos-850d', 'resources/img/eos_850d.png', 4000.00),
(3, 'EOS 850d (Body Only)', 'body', 'body-850', 'resources/img/eos_850d_body.png', 3000.00),
(4, 'EOS M50 Mark II', 'set', 'markiiM50', 'resources/img/eos_m50_mark2.png', 11500.00),
(5, 'EOS M50 (Body Only)', 'body', 'm50', 'resources/img/eos_m50_body.png', 5200.00),
(6, 'EOS R5', 'set', 'r5', 'resources/img/eos_r5.png', 9400.00),
(7, 'EOS R5 (Body Only)', 'body', 'eosR5', 'resources/img/eos_r5_body.png\r\n', 5500.00),
(8, 'EOS R6', 'set', 'r6', 'resources/img/eos_r6.png', 12800.00),
(9, 'EOS R6 (Body Only)', 'body', 'r6body', 'resources/img/eos_r6_body.png', 7300.00),
(10, 'RF 14 - 35mm', 'lens', 'rf14235', 'resources/img/rf14-35mm.png', 11200.00),
(11, 'RF 16mm', 'lens', 'rf16', 'resources/img/rf16mm.png', 6000.00),
(12, 'RF 85mm', 'lens', 'rf85', 'resources/img/rf85.png', 7800.00),
(13, 'RF 100mm', 'lens', 'rf100', 'resources/img/rf100.png', 15000.00),
(14, 'RF 600mm', 'lens', 'rf600', 'resources/img/rf600.png', 12000.00),
(15, 'Speedlite Flash Classic', 'accessories', 'slflashc', 'resources/img/speedlite.png', 500.00),
(16, 'Speedlite Flash EL1', 'accessories', 'slflashel1', 'resources/img/speedlite_el1.png', 1000.00),
(17, 'DSLR Battery Grip', 'accessories', 'grip', 'resources/img/battery_grip.png', 300.00);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `price`) VALUES
(1, 'Wedding Photography', 'resources/img/wedding.png', 1500.00),
(2, 'Birthday Photography', 'resources/img/birthday.png', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `userid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `telno` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type` enum('admin','customer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='user database';

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`userid`, `name`, `telno`, `address`, `email`, `login`, `pass`, `type`) VALUES
(40, 'Wai Siong zzz', '0122978732', '12,sdjkadjkc', 'waisiong144@gmail.com', 'wais100', '$2y$10$1iEfy2twjFORASTSDb0t2.WD9mtF7zU2AQf6vtf1nSYA0n7o6ey8u', 'customer'),
(43, 'admin legend', '0123456789', '12, ashdjaskhda', 'admin1@hotmail.com', 'admin', '$2y$10$DkF4iWmhtk.wSiywHTxzCusAxU09b7xnpZULjTU6jvYzRU3d1QBCi', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `name` (`name`,`email`,`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
