-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 29, 2021 at 03:45 AM
-- Server version: 5.7.32
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `subtotal` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `delivery_id` int(11) NOT NULL,
  `delivery_time` int(10) NOT NULL DEFAULT '40',
  `open_time` varchar(11) NOT NULL,
  `close_time` varchar(11) NOT NULL,
  `delivery_status` varchar(1) NOT NULL DEFAULT 'A',
  `delivery_fee` int(11) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`delivery_id`, `delivery_time`, `open_time`, `close_time`, `delivery_status`, `delivery_fee`) VALUES
(1, 30, '10:00', '22:00', 'A', 5);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `ingredient` varchar(100) DEFAULT NULL,
  `menu_price` float NOT NULL,
  `menu_pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `category`, `ingredient`, `menu_price`, `menu_pic`) VALUES
(3, 'GIGA MEAT', 'Main', 'Pepperoni, Italian Sausage, Pork Sausage, Bacon, Tomato Sauce', 20, 'gigameat.WEBP'),
(6, 'GENOVESE', 'Main', 'Ham, Potato Slices, Garlic, Parmesan Mix, Cheese, Basil Sause', 23, 'GENOVESE.WEBP'),
(7, 'MARGHERITA', 'Main', 'Italian Bocconcini, Basil, Cherry Tomatoes, Tomato Sause', 19, 'MARGHERITA.WEBP'),
(8, 'PEPPERONI', 'Main', 'Pepperoni,                         Tomato Sause                     ', 19, 'PEPPERONI.WEBP'),
(10, 'French Fries', 'Side', 'Potatoes', 5, 'fries.WEBP'),
(11, 'Chicken Nuggets', 'Side', 'Chicken', 7, 'nuggets.WEBP'),
(12, 'Hot Wing', 'Side', 'Chicken', 8, 'wing.WEBP'),
(13, 'Popcorn Shrimp', 'Side', 'Shrimp', 7, 'shrimp.WEBP'),
(14, 'Apple Pie', 'Desert', 'apple, egg, milk, weat', 4, 'applepie.WEBP'),
(15, 'Chocolate Cake', 'Desert', 'chocolate', 4, 'chocolatecake.WEBP'),
(16, 'Egg Pie', 'Desert', 'egg, wheat, milk', 3, 'eggpie.WEBP'),
(17, 'Mini Pancake', 'Desert', 'wheat, egg, milk', 4, 'minipancake.WEBP'),
(18, 'Coke', 'Drink', '', 1, 'coke.WEBP'),
(19, 'Ginger Ale', 'Drink', '', 1, 'gingerale.WEBP'),
(20, 'Chocolate Shake', 'Drink', 'chocolate', 2, 'chocolateshake.WEBP'),
(21, 'Fruits Soda', 'Drink', 'Strawberry, Lemon', 3, 'fruitssoda.WEBP'),
(22, 'test', 'Side', 'test', 3, 'wing.WEBP');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `order_date` varchar(50) NOT NULL,
  `delivery_time` varchar(11) NOT NULL,
  `total_quantity` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `note` varchar(500) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `order_status` varchar(20) NOT NULL DEFAULT 'Not Delivered'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `delivery_time`, `total_quantity`, `total_price`, `note`, `user_id`, `order_status`) VALUES
(24, '2021/10/28 10:45', '10:55', 2, 45, '', 2, 'Delivered'),
(25, '2021/10/28 11:04', '11:14', 1, 25, '', 2, 'Delivered'),
(26, '2021/10/28 13:51', '14:01', 1, 25, '', 2, 'Delivered'),
(27, '2021/10/29 01:59', '12:04', 1, 25, '', 2, 'Delivered'),
(28, '2021/10/29 10:02', '10:22', 5, 55, 'note', 2, 'Delivered'),
(29, '2021/10/29 11:16', '11:36', 1, 10, '', 6, 'Delivered'),
(30, '2021/10/29 11:18', '11:38', 1, 12, '', 6, 'Delivered'),
(31, '2021/10/29 12:07', '14:10', 3, 35, '', 2, 'Not Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`item_id`, `order_id`, `product_id`, `quantity`) VALUES
(26, 24, 3, 2),
(27, 25, 3, 1),
(28, 26, 3, 1),
(29, 27, 3, 1),
(30, 28, 3, 2),
(31, 28, 10, 1),
(32, 28, 14, 1),
(33, 28, 18, 1),
(34, 29, 10, 1),
(35, 30, 11, 1),
(36, 31, 10, 2),
(37, 31, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_number` int(100) NOT NULL,
  `email` varchar(11) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `order_count` int(100) NOT NULL DEFAULT '0',
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `password`, `contact_number`, `email`, `adress`, `order_count`, `status`) VALUES
(1, 'admin', 'admin', '$2y$10$.25GcCxsGMJ0Bq9MmRzLn.stw5bLBLOqW.UPIRk0J4S80UCrj7YjK', 0, 'admin@admin', 'admin', 0, 'A'),
(2, 'user', 'user', '$2y$10$iPWczvbXU4o0o98l4BtFuulAS5WQ09x75Et/DSBAxp8klkwDPpJbm', 3, 'user@user', 'adress', 6, 'U'),
(6, 'a', 'a', '$2y$10$xKyPMXLC70WSySyC3V5.zuSNIMVEIYOg.F70atIFNRO6LOvJOTMHy', 1, 'a@a', 'a', 2, 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`delivery_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD UNIQUE KEY `menu_name` (`menu_name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `contact_number` (`contact_number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `delivery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
