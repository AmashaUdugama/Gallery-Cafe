-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2025 at 06:40 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','operation staff') COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `role`) VALUES
(3, 'admin', '111', 'admin'),
(4, 'operation', '123', 'operation staff');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `pid` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `C_ID` int NOT NULL AUTO_INCREMENT,
  `category` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`C_ID`, `category`) VALUES
(1, 'Italian Food'),
(2, 'Sri Lankan Food'),
(3, 'Indian Food'),
(4, 'Japanese Food'),
(5, 'Drinks'),
(6, 'Desserts');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `message` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(1, 3, 'ama', 'ama@gmail.com', '0778834566', 'I enjoyed your  meals');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `method` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `total_products` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `total_price` int NOT NULL,
  `placed_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(1, 3, 'Ama', '0778899345', 'ama@gmail.com', 'cash on delivery', '0, 7, colombo, nugegoda, nugegoda, nugegoda, Sri lanka - 10230', 'Pizza Margherita (3800 x 1) - Sushi (200 x 1) - ', 4000, '2024-08-11 00:00:00', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `C_ID` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `C_ID`, `category`, `price`, `image`) VALUES
(5, 'Pizza Margherita', '1', 'Italian Food\r\n ', 3800, 'pizzamargherita.jpg'),
(6, 'Pasta Carbonara', '1', 'Italian Food', 1400, 'Pasta Carbonara.jpg'),
(7, 'Lasagna', '1', 'Italian Food', 2300, 'Lasagna.jpg'),
(8, 'Risotto', '1', 'Italian Food', 3700, 'Risotto.jfif'),
(9, 'Rice and Curry', '2', 'Sri Lankan food', 500, 'Rice.jfif'),
(10, 'Hoppers (Appa)', '2', 'Sri Lankan food', 40, 'Hoppers.jpg'),
(11, 'Kottu Roti', '2', 'Sri Lankan food', 800, 'Kottu Roti.jfif'),
(12, 'Sushi', '4', 'Japanese Food', 200, 'Sushi.jpg'),
(13, 'Ramen', '4', 'Japanese Food', 900, 'Ramen.jpg'),
(14, 'Tempura', '4', 'Japanese Food', 540, 'Tempura.jpg'),
(15, 'Biryani', '3', 'Indian Food', 1089, 'Biryani.jpg'),
(16, 'Masala Dosa', '3', 'Indian Food', 900, 'Masala Dosa.png'),
(17, 'Tandoori Chicken', '3', 'Indian Food', 1200, 'Tandoori Chicken.jfif'),
(18, 'Butter Chicken', '3', 'Indian Food', 2100, 'Butter Chicken.jpg'),
(19, 'String hoppers', '2', 'Sri lankan food', 670, 'String Hoppers.jpeg'),
(20, 'Coffee', '5', 'Drinks', 600, 'drink-2.png'),
(21, 'Watalappan', '6', 'Desserts', 400, 'wata.jpg'),
(22, 'Cup Cake', '6', 'Desserts', 80, 'dessert-4.png'),
(23, 'Milk Sheak', '5', 'Drinks', 700, 'dessert-1.png'),
(24, 'Ice cream', '6', 'Desserts', 300, 'dessert-5.png'),
(25, 'Cake Piece', '6', 'Desserts', 200, 'dessert-6.png'),
(26, 'Mojito', '5', 'Drinks', 400, 'drink-3.png'),
(27, 'Chocolate Moose', '6', 'Desserts', 450, 'dessert-2.png'),
(28, 'Fruit Juice', '5', 'Drinks', 200, 'drink-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `reservation_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `table_id` int NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci DEFAULT 'pending',
  PRIMARY KEY (`reservation_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`reservation_id`, `user_id`, `username`, `table_id`, `date`, `time`, `status`) VALUES
(1, 5, 'emi', 2, '2024-08-22', '13:00:00', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
CREATE TABLE IF NOT EXISTS `tables` (
  `table_id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`table_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `address`) VALUES
(2, 'admin', 'admin', '0777777821', 'admin', 'admin'),
(3, 'Ama', 'ama@gmail.com', '0778899345', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '0, 7, colombo, nugegoda, nugegoda, nugegoda, Sri lanka - 10230'),
(4, 'Sayu', 'sayu@gmail.com', '0707788990', '1fd664f37d1c2100bc6ea3cdd5e7bbe20f83a0c3', ''),
(5, 'emi', 'emi@gmail.com', '0771234567', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
