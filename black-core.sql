-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 17, 2023 at 10:04 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `black-core`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(2, 'foster', 'makono', 'foster@gmail.com', 'FOSTER12'),
(9, 'MANZY', 'MBEWE', 'manzy@gmail.com', '89'),
(13, 'DAN', 'BABA', 'dan@gmail.com', 'DAN12345');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `gid` int NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mnumber` int NOT NULL,
  `city` varchar(50) NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `cid` (`cid`),
  KEY `cid_2` (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `gid`, `fname`, `lname`, `mnumber`, `city`) VALUES
(8, 21, 'foster', 'makono', 98765423, 'Blantyre'),
(9, 30, 'MANZY', 'MBEWE', 2147483647, 'zomba,CHAKANDA'),
(10, 30, 'foster', 'mateyu', 998675434, 'zomba'),
(11, 34, 'edina', 'MBEWE', 9999, 'Blantyre');

-- --------------------------------------------------------

--
-- Table structure for table `gadget`
--

DROP TABLE IF EXISTS `gadget`;
CREATE TABLE IF NOT EXISTS `gadget` (
  `id` int NOT NULL AUTO_INCREMENT,
  `g_picture` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `g_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `g_price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gadget`
--

INSERT INTO `gadget` (`id`, `g_picture`, `g_name`, `g_price`) VALUES
(18, 'IMG-648ca5547b0f53.67203690.jpg', 'phone', 100),
(21, 'IMG-64a59b824cdc08.66339401.jpg', 'laptop hp', 70000),
(30, 'IMG-64a94aa48a6fe7.28995394.jpg', 'LENOVO', 10000),
(32, 'IMG-64abba539b8b41.18005579.jpg', 'LENOVO THINKPAD\r\n4gb ram,500gb harddrive\r\n5 hours ', 150000),
(33, 'IMG-64abbc4e202a86.22612651.jpg', 'HP LAPTOP\r\n8gb ram,1TB harddrive\r\n6 hrs battery', 200000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
