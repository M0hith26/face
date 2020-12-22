-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 22, 2020 at 05:25 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;

--
-- Database: `store`
--
CREATE DATABASE IF NOT EXISTS `store` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `store`;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `pid` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`) VALUES(1, 'Cannon DSLR', 36000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(2, 'Sony DSLR', 45000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(3, 'Nikon DSLR', 40000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(4, 'Olympus DSLR', 50000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(5, 'Titan Model #301', 13000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(6, 'Titan Model #201', 3000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(7, 'HMT Milan', 8000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(8, 'Faber Luba #111', 18000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(9, 'H&W', 800);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(10, 'Luis phil', 1000);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(11, 'Jhon Zok', 1500);
INSERT INTO `items` (`pid`, `name`, `price`) VALUES(12, 'Jhalsani', 1300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `card_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `card_number`) VALUES(1, ' vishal ', ' vishal546@gmail.com ', ' 290fe3d3fcf1846a545bc570b12df4c9 ', ' 9963245643 ', ' Warangal ', ' saraswathi society ', '4356123376559854');
INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `card_number`) VALUES(2, ' rocky ', ' rocky32@gmail.com ', ' 25f37c908f42d35c9ca55204f9039ffd ', ' 9854672315 ', ' Hyderabad ', ' Uppal ', NULL);
INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`, `card_number`) VALUES(3, ' mahi ', ' mahi456@gmail.com ', ' 040fdeb1a3e397b5b2126e821726f429 ', ' 7653214533 ', ' Hyderabad ', ' Uppal ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `item_id` int NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES(1, 1, 2, 'Added to cart');
INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES(2, 1, 9, 'Confirmed');
INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES(3, 3, 1, 'Confirmed');
INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES(5, 2, 2, 'Confirmed');
INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES(6, 2, 6, 'Confirmed');
INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES(8, 2, 3, 'Confirmed');
COMMIT;
