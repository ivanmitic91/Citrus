-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2019 at 03:54 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus`
--
CREATE DATABASE IF NOT EXISTS `citrus` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `citrus`;

-- --------------------------------------------------------

--
-- Table structure for table `citrus_info`
--

DROP TABLE IF EXISTS `citrus_info`;
CREATE TABLE IF NOT EXISTS `citrus_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `citrus_info`
--

INSERT INTO `citrus_info` (`id`, `title`, `image`, `description`) VALUES
(1, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.'),
(2, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.'),
(3, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.'),
(4, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.'),
(5, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.'),
(6, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.'),
(7, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.'),
(8, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.'),
(9, 'Lorem Ipsum', 'Citrus.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vitae mollis odio. Maecenas faucibus diam at enim congue pharetra. Pellentesque a dui mollis, pellentesque tortor quis, porttitor eros. Vivamus euismod dolor sit amet lacinia pharetra. Curabitur sit amet sagittis tortor. Aenean consectetur, dui eu laoreet feugiat, nunc magna suscipit turpis, at elementum orci velit ut nisl. Integer imperdiet metus metus, sit amet dignissim nisi interdum id.');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `role` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `email`, `text`, `status`, `created`, `role`) VALUES
(91, 'admin', 'admin@gmail.com', '', 1, '2019-11-07 15:17:52', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
