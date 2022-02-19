-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2022 at 08:06 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_oop_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=78 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(75, 'Shaine Olson', 'Quinn Francis', 'pukek@mailinator.com', '+1 (804) 195-3647'),
(74, 'Malcolm Salinas', 'Steel Rollins', 'kymuwohepo@mailinator.com', '+1 (515) 257-9605'),
(73, 'Zenaida Carr', 'Abraham Harvey', 'luronuz@mailinator.com', '+1 (189) 863-3624'),
(72, 'Hashim Thomas', 'Charde Larsen', 'hasig@mailinator.com', '+1 (829) 419-9134'),
(71, 'Paula Lancaster', 'Fay Rivera', 'xigevywaty@mailinator.com', '+1 (871) 786-7666'),
(70, 'Michelle Hendricks', 'Xena Pennington', 'feqyro@mailinator.com', '+1 (589) 247-9178'),
(61, 'Nayda Sutton', 'Shaine Harrell', 'bilywofun@mailinator.com', '+1 (639) 876-6866'),
(62, 'Kelsie Barton', 'Micah Ware', 'xopevygyw@mailinator.com', '+1 (811) 897-8958'),
(63, 'Joshua Roman', 'Briar Garrett', 'pezu@mailinator.com', '+1 (471) 841-1657'),
(65, 'May Blackburn', 'Charde Hobbs', 'futifona@mailinator.com', '+1 (684) 101-9349'),
(66, 'Brianna Lane', 'Colin Leon', 'gudofepes@mailinator.com', '+1 (338) 211-3355'),
(67, 'Orli Lambert', 'Marah Gonzales', 'sigyjecu@mailinator.com', '+1 (307) 521-7275'),
(68, 'Dawn Navarro', 'Bethany Massey', 'ritowuxi@mailinator.com', '+1 (926) 981-3062'),
(69, 'Jared Ayers', 'Brendan Berger', 'ronywonug@mailinator.com', '+1 (451) 931-8266');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
