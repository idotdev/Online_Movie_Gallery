-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2020 at 07:39 AM
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
-- Database: `mov_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_mc`
--

DROP TABLE IF EXISTS `admin_mc`;
CREATE TABLE IF NOT EXISTS `admin_mc` (
  `ad_id` varchar(10) DEFAULT NULL,
  `ad_key` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_mc`
--

INSERT INTO `admin_mc` (`ad_id`, `ad_key`) VALUES
('APTX', '4869');

-- --------------------------------------------------------

--
-- Table structure for table `clips`
--

DROP TABLE IF EXISTS `clips`;
CREATE TABLE IF NOT EXISTS `clips` (
  `vid_id` int(20) NOT NULL AUTO_INCREMENT,
  `cr_id` varchar(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `likes` varchar(20) DEFAULT NULL,
  `sold` varchar(20) DEFAULT NULL,
  `filename` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`vid_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clips`
--

INSERT INTO `clips` (`vid_id`, `cr_id`, `title`, `genre`, `type`, `price`, `year`, `likes`, `sold`, `filename`) VALUES
(3, '171870', 'Batman', 'Superhero', 'Picture', '2500', '2016', '0', '0', 'batman-dark-art_1576093361.jpg'),
(5, '171870', 'BvS', 'Superhero, Action', '4K Video', '2500', '2016', '0', '0', 'Batman Vs superman Fight Part 1 - Batman v Superman_ Dawn of Justice Movie Clip (2017) 4K ULTRA HD.webm'),
(6, '171870', 'Valorant Clip', 'Game', 'Short Clip', '0', '2020', '0', '0', 'VALORANT   2020-11-29 20-16-05.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `creator`
--

DROP TABLE IF EXISTS `creator`;
CREATE TABLE IF NOT EXISTS `creator` (
  `cr_id` varchar(10) NOT NULL,
  `cr_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `donations` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cr_id`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`cr_id`, `cr_name`, `gender`, `country`, `phone`, `donations`) VALUES
('114572', 'Gokul R', 'male', 'India', '8610137050', '500'),
('171870', 'Vinay', 'Male', 'India', '1234567890', '1026547851'),
('36702', 'lumi', 'Female', 'India', '8610137051', '20');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `c_id` varchar(8) NOT NULL,
  `c_name` varchar(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `cost` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `address`, `phone`, `cost`) VALUES
('18001', 'BORO', 'London', '+918610137061', '80'),
('55719', 'Kyu', 'Sinnoh', '8610137050', '0'),
('71514', 'G', 'A', '123456789', '0');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

DROP TABLE IF EXISTS `purchase`;
CREATE TABLE IF NOT EXISTS `purchase` (
  `title` varchar(50) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `cr_id` varchar(10) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `c_id` varchar(10) DEFAULT NULL,
  `c_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`title`, `year`, `genre`, `cr_id`, `price`, `c_id`, `c_name`) VALUES
('', '', '', '', '', '', ''),
('', '', '', '', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
