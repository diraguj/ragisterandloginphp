-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 02, 2021 at 10:11 AM
-- Server version: 8.0.18
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(121) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `dob`, `password`, `image`) VALUES
(1, 'John', 'Doe', 'john@example.com', '', '', ''),
(2, 'Autumn', 'Hebert', 'admin@gmail.com', '2021-01-25', 'admin587', 'android-chrome-512x512.png'),
(3, 'Autumn', 'Hebert', 'mojugokuz@mailinator.com', '2021-01-25', 'Pa$$w0rd!', 'android-chrome-512x512.png'),
(4, 'Amity', 'Reese', 'zipocohu@mailinator.com', '2002-11-26', 'Pa$$w0rd!', '1.jpg'),
(5, 'Bo', 'Gibson', 'mazaji@mailinator.com', '2016-04-24', 'Pa$$w0rd!', '1.jpg'),
(6, 'Audra', 'Irwin', 'cybezyfy@mailinator.com', '1973-05-09', 'Pa$$w0rd!', '1.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
