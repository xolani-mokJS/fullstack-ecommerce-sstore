-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 14, 2022 at 05:16 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_email`, `admin_pass`) VALUES
('xolanimokhoebane@gmail.com', '123456abc'),
('xolanimokhoebane@gmail.com', '123456abc'),
('admin@admin.com', 'Admin123'),
('admin@admin.com', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `customer_registered`
--

CREATE TABLE `customer_registered` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `base_price` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  `subcat_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `base_price`, `cat_id`, `subcat_id`) VALUES
('2', 'Casio G-SHOCK', 'Waterproof watch made by Casio', '13100.00', '1', '3'),
('3', 'Nitro Car', 'Remote controlled car made by Nerf', '2495.00', '2', '3'),
('4', 'Asus Vivobook', 'Intel core i3 3.4Ghz', '123100.00', '1', '5'),
('5', 'Dell Optiplex', 'Intel core i3 2.7Ghz', '163572.00', '1', '6');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcat_id` varchar(100) NOT NULL,
  `cat_id` varchar(100) NOT NULL,
  `subcat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcat_id`, `cat_id`, `subcat_name`) VALUES
('5', '1', 'Laptops'),
('6', '1', 'Desktops'),
('7', '1', 'Audio devices'),
('8', '2', 'Blocks and Buiilding Toys'),
('9', '2', 'Bath Toys'),
('10', '2', 'Board Games'),
('5', '1', 'Laptops'),
('6', '1', 'Desktops'),
('7', '1', 'Audio devices'),
('8', '2', 'Blocks and Buiilding Toys'),
('9', '2', 'Bath Toys'),
('10', '2', 'Board Games');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
