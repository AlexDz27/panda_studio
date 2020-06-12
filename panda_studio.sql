-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2020 at 08:04 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panda_studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `beautified_date` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `phone` text NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `date`, `beautified_date`, `time`, `phone`, `name`) VALUES
(23, '2020-06-12', '12 июня 2020', '13:30:00', '375 33 382 98 68', 'Ольга'),
(24, '2020-06-12', '12 июня 2020', '15:00:00', '375 33 382 65 30', 'Алина'),
(25, '2020-06-12', '12 июня 2020', '17:30:00', '375 29 582 65 25', 'Светлана'),
(26, '2020-06-13', '13 июня 2020', '14:00:00', '375 29 582 35 80', 'Марья'),
(28, '2020-06-14', '14 июня 2020', '13:00:00', '375 29 582 35 00', 'Мария'),
(30, '2020-06-12', '12 июня 2020', '17:00:00', '375 29 682 15 25', 'Ангелина'),
(31, '2020-06-12', '12 июня 2020', '17:00:00', '375 29 682 15 90', 'Елена');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
