-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 23, 2021 at 01:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

DROP TABLE IF EXISTS `mycart`;
CREATE TABLE IF NOT EXISTS `mycart` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contect` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpass` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `email`, `contect`, `password`, `confirmpass`) VALUES
(1, 'Sdas', 'sdas@gmail.com', '7662882270', 'Souravdas.1', 'Souravdas.1');

-- --------------------------------------------------------

--
-- Table structure for table `sellbooks`
--

DROP TABLE IF EXISTS `sellbooks`;
CREATE TABLE IF NOT EXISTS `sellbooks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bookname` varchar(255) NOT NULL,
  `authorename` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `purchasedate` varchar(255) NOT NULL,
  `bookcondition` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellbooks`
--

INSERT INTO `sellbooks` (`id`, `bookname`, `authorename`, `category`, `language`, `purchasedate`, `bookcondition`, `price`, `description`) VALUES
(1, 'Linux', 'SD', 'Technology', 'English', '19/01/2020', 'New', 675, 'GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `viewbooks`
--

DROP TABLE IF EXISTS `viewbooks`;
CREATE TABLE IF NOT EXISTS `viewbooks` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viewbooks`
--

INSERT INTO `viewbooks` (`id`, `name`, `image`, `price`) VALUES
(1, 'CPP', 'img/cpp.jpg', 300),
(2, 'JAVA', 'img/java.jpg', 657.9),
(3, 'Linux', 'img/linux.jpg', 675),
(4, 'DBMS', 'img/dbms.jpg', 450),
(5, 'WEB DEVELOPMENT', 'img/web.jpg', 579),
(6, 'C PROGRAMMING', 'img/c.jpg', 390),
(7, 'STUDY PACKAGE FOR AIMCA', 'img/mca.jpg', 850),
(8, 'OPERATING SYSTEM PRINCIPLE', 'img/os.jpg', 575),
(9, 'THE HUNGER GAMES', 'img/hunger.jpg', 710),
(10, 'FLAH 2\r\nWEB ANIMATION', 'img/animation.jfif', 550),
(11, 'MACROMEDIA FLASH\r\nMX', 'img/animation2.jpg', 340),
(12, 'DATA STRUCTURE AND \r\nALGORITHM', 'img/ds.jpg', 649),
(13, 'PYTHON INTRO TO ADVANCE', 'img/python.jpg', 610),
(14, 'THE TRAVEL BOOK', 'img/travel.jpeg', 706),
(15, 'THE STRANGER GAME', 'img/stranger.jpeg', 555),
(16, 'SECRETE THE GURDIAN TRILOGY', 'img/secrets.jpeg', 650),
(17, 'THE CITY OF BONES', 'img/bone.jpeg', 430),
(18, 'C# PROGRAMMING', 'img/chash.jpeg', 700),
(19, 'RISE ABOVE WILDERNESS', 'img/rise.jpeg', 510),
(20, 'CHANAKYA NEETI', 'img/neeti.jpeg', 340),
(21, 'KOTLIN', 'img/kotlin.jpeg', 390);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
