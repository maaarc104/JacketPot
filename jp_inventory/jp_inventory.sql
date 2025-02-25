-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2025 at 04:58 PM
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
-- Database: `jp_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `category` varchar(25) NOT NULL,
  `name` varchar(25) NOT NULL,
  `quantity` int(11) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `product_id`, `category`, `name`, `quantity`, `supplier`, `order_date`) VALUES
(1, '2', 'Core Ingredients', 'Oil  ', 5, 'Palm-Oil', '2025-02-20'),
(3, '1', 'Core Ingredients', 'Potatoes', 1, 'PotatoPro', '2025-02-20'),
(4, '3', 'Core Ingredients', 'Salt and Pepper', 3, '4 Seasons', '2025-02-20'),
(7, '5', 'Dairy', 'Cheese', 7, 'Dairy King', '2025-02-20'),
(8, '1', 'Core Ingredients', 'Potatoes', 65, 'PotatoPro', '2025-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `supplier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category`, `name`, `price`, `quantity`, `supplier`) VALUES
(1, 'Core Ingredients', 'Potatoes', 89, 7, 'PotatoPro'),
(2, 'Core Ingredients', 'Oil  ', 199, 3, 'Palm-Oil'),
(3, 'Core Ingredients', 'Salt and Pepper', 50, 2, '4 Seasons'),
(4, 'Dairy', 'Butter', 79, 3, 'Dairy King'),
(5, 'Dairy', 'Cheese', 79, 3, 'Dairy King'),
(6, 'Dairy', 'Sour cream', 79, 3, 'Dairy King'),
(7, 'Protein', 'Bacon', 149, 5, 'Nice To Meat You'),
(8, 'Protein', 'Pulled Pork', 329, 3, 'Nice To Meat You'),
(9, 'Protein', 'Pulled Chicken', 269, 4, 'Nice To Meat You'),
(10, 'Vegetables', 'Chives', 79, 3, 'Veggielicious'),
(11, 'Vegetables', 'Broccoli', 79, 3, 'Veggielicious'),
(12, 'Vegetables', 'Corn', 79, 4, 'Veggielicious'),
(13, 'Vegetables', 'Salsa', 79, 5, 'Veggielicious'),
(14, 'Vegetables', 'Beans', 59, 4, 'Veggielicious'),
(15, 'Condiments', 'Gravy', 149, 5, 'CondimentLover'),
(16, 'Condiments', 'Hot Sauce', 149, 5, 'CondimentLover');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`) VALUES
(1, 'Test', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
