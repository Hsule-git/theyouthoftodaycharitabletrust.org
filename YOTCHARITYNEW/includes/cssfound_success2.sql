-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2021 at 03:36 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cssfound_success2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Content` text NOT NULL,
  `Author` varchar(225) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `Image`, `Content`, `Author`, `Date`) VALUES
(9, 'Care for Bharat', 'care for bharat.jpg', '<p>Care for bharat</p>\r\n', 'Harsh', '2021-01-10 02:45:22'),
(11, 'Menstural hygene for Women', 'savewomen.jpg', '<p>Providing sanitary pads to women</p>\r\n', 'Harsh', '2021-01-10 02:47:31'),
(12, 'Education for women', 'womenschool.jpg', '<p>education for women</p>\r\n', 'Harsh', '2021-01-10 02:48:37'),
(13, 'charity for bharat', 'Screenshot (9).png', '<p>hello world</p>\r\n', 'harsh', '2021-04-08 04:59:08');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(225) NOT NULL,
  `ses_id` varchar(225) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `user_email`, `ses_id`, `content`) VALUES
(2, 'rajat_roy91@yahoo.com', '9', 'hello worled'),
(3, 'rajat_roy91@yahoo.com', '10', 'built'),
(4, 'rajat_roy91@yahoo.com', '9', 'ossm'),
(5, 'rajat_roy91@yahoo.com', '6', 'helloaama'),
(6, 'rajat_roy91@yahoo.com', '2', 'hello literacy'),
(7, 'rajat@gmail.com', '9', 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `subject`, `message`, `date`) VALUES
(44, 'Rajat Khajuria', 'rajat_roy91@yahoo.com', '0414203386', 'rajat_roy91@yahoo.com', 'hello sonali', '2021-01-22 08:42:10'),
(47, 'sonali sharma', 'amusharma610@gmail.com', '9622841416', 'hello world', '', '2021-03-31 21:01:32'),
(48, 'sonali sharma', 'amusharma610@gmail.com', '9622841416', 'hello world', 'hello', '2021-04-01 11:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `futureevents`
--

DROP TABLE IF EXISTS `futureevents`;
CREATE TABLE IF NOT EXISTS `futureevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Content` text NOT NULL,
  `Author` varchar(225) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `futureevents`
--

INSERT INTO `futureevents` (`id`, `title`, `Image`, `Content`, `Author`, `Date`) VALUES
(2, 'Digital Literacy', 'digitalliteracy.jpg', '<p>Digital Literacy for children in this world</p>\r\n', 'Harsh', '2021-01-10 04:36:42');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `blog` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logginn`
--

DROP TABLE IF EXISTS `logginn`;
CREATE TABLE IF NOT EXISTS `logginn` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logginn`
--

INSERT INTO `logginn` (`id`, `username`, `password`) VALUES
(1, 'rajat', 'khajuria');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user_name`, `password`) VALUES
(2, 'harsh', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `pastevents`
--

DROP TABLE IF EXISTS `pastevents`;
CREATE TABLE IF NOT EXISTS `pastevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `Image` varchar(225) NOT NULL,
  `Content` text NOT NULL,
  `Author` varchar(225) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pastevents`
--

INSERT INTO `pastevents` (`id`, `title`, `Image`, `Content`, `Author`, `Date`) VALUES
(6, 'Home for old', 'homeforold.jpg', '<p>home for old</p>\r\n', 'Harsh', '2021-01-10 04:08:48'),
(7, 'food for animals', 'animals2.jpg', '<p>food for animals</p>\r\n', 'Harsh', '2021-01-10 04:09:58'),
(8, 'Ammas food', 'khanakitchen.jpg', '<p>Ammas Food</p>\r\n', 'Harsh', '2021-01-10 04:10:59');

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

DROP TABLE IF EXISTS `pwdreset`;
CREATE TABLE IF NOT EXISTS `pwdreset` (
  `pwdResetID` int(11) NOT NULL,
  `pwdResetEmail` text,
  `pwdResetSelector` text,
  `pwdResetToken` longtext,
  `pwdResetExpires` text,
  PRIMARY KEY (`pwdResetID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

DROP TABLE IF EXISTS `subscriber`;
CREATE TABLE IF NOT EXISTS `subscriber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(225) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`id`, `email`) VALUES
(9, 'amusharma610@gmail.com'),
(6, 'eaju@gmail.com'),
(8, 'harshvardhansule@gmail.com'),
(2, 'khajuriasanchit5@gmail.com'),
(1, 'rajat_roy91@yahoo.com'),
(10, 'rajee@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE IF NOT EXISTS `user_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`id`, `name`, `email`, `phone`, `password`) VALUES
(50, 'devopraj420', 'rajat@gmail.com', '9622841416', '$2y$10$imakephpbettereachande0qmrLhFmdDbeMcjL7hyRuryE2lRhbiC');

-- --------------------------------------------------------

--
-- Table structure for table `write_for`
--

DROP TABLE IF EXISTS `write_for`;
CREATE TABLE IF NOT EXISTS `write_for` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `write_for`
--

INSERT INTO `write_for` (`id`, `name`, `email`, `title`, `message`) VALUES
(1, 'devopraj420', 'rajat_roy91@yahoo.com', '9622841416', 'hello world');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
