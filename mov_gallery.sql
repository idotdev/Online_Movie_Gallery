-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2020 at 05:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

CREATE TABLE `admin_mc` (
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

CREATE TABLE `clips` (
  `cr_id` varchar(10) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `genre` varchar(50) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `year` varchar(4) DEFAULT NULL,
  `likes` varchar(20) DEFAULT NULL,
  `sold` varchar(20) DEFAULT NULL,
  `url` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clips`
--

INSERT INTO `clips` (`cr_id`, `title`, `genre`, `type`, `price`, `year`, `likes`, `sold`, `url`) VALUES
('36702', 'Crimes of Love', 'action', 'Anime', '0', '2017', '1000', '0', '‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\n\0\0f\0\0\0²é\0\0\0sRGB\0®Îé\0\0\0gAMA\0\0±üa\0\0\0	pHYs\0\0t\0\0tÞfx\0\0s‰IDATx^íœMåþÿÓ9Ý¤~R§‹äœtr*RRTˆPÊ%!Mã:%!÷$Iî$É8BŽâ…\\r(i”ÜÓ»!1˜»™13>ÿõ]{?fÍ²ÖÚkïuÙkïý}÷z^™µ×ÚÏZÏó}¾Ïg¯õ]ß§†a†at`¡À0Ã0Œ.,†a†Ñ……Ã0Ã0º°P`†aF\nÃ0ÃèÂBa†a]X(0Ã0£†a†ata¡À0Ã0Œ.,†a†Ñ……Ã0Ã0º°P`†aF\nÃ0ÃèÂBa†a]X(0Ã0£†a†ata¡À0Ã0Œ.,†a†Ñ……Ã0Ã0º°P`†aF\nÃ0ÃèÂBa†a]X(0Ã0£†a†ata¡À0Ã0Œ.,†a†Ñ……Ã0Ã0º°P`†aF\nÃ0ÃèÂBa†a]X(0Ã0£†a†ata¡À0Ã0Œ.,†a†Ñ……Ã0Ã0º°P`†aF\nÃ0ÃèÂBa†a]X(0Ã0£†a†ata¡À0Ã0Œ.,†a†Ñ……Ã0Ã0º°P`†aF\nÃ0ÃèÂBa†a]X(0Ã0£†a†ata¡À0Ã0Œ.,†a†Ñ……Ã0Ã0º°Pð\0[¶lÁ„	¸páÂ…K—ÄÄDdddøgïÀBÁ\\sÍ5¨[·..\\¸p‰ÁR­Z5y8xð fð,<\0	2†a&6Y»v-F\nÃ0±\rÆ\nÃ0±\rÆ\nŒUÔ±ûöíóÂ0L$ÀB1„…c…;wbäÈ‘²\r‰2eÊìÝ»×¿Ã0^‡…cÆ\nÍš5C=üùÐÚÆ0Œwa¡ÀÂB	…ÌÌL<ùä“˜1cŽ=êßêãÀ=z4:vìèßÂ0Œ—a¡ÀÂB	…´´4T¬X‹-’ÿNNNÆË/¿ŒÔÔTùo¶+†‰X(0†°CgBA-ÔŽ†íŠa\"\nŒ!ìÐ™PÈÊÊBëÖ­åÀEr2dGÂÑˆ\0GŽS`˜È€…cÆ\n¸XªT)¹GÃÁŒY°P`a¡ÀXûôé#…'),
('36702', 'Crimes of Love', 'action', 'Anime', '0', '2017', '1000', '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `creator`
--

CREATE TABLE `creator` (
  `cr_id` varchar(10) NOT NULL,
  `cr_name` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `donations` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `creator`
--

INSERT INTO `creator` (`cr_id`, `cr_name`, `gender`, `country`, `phone`, `donations`) VALUES
('114572', 'Gokul R', 'male', 'India', '8610137050', '0'),
('36702', 'lumi', 'Female', 'India', '8610137051', '20');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` varchar(8) NOT NULL,
  `c_name` varchar(20) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `cost` varchar(10) DEFAULT NULL
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

CREATE TABLE `purchase` (
  `title` varchar(50) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `cr_id` varchar(10) DEFAULT NULL,
  `price` varchar(10) DEFAULT NULL,
  `c_id` varchar(10) DEFAULT NULL,
  `c_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creator`
--
ALTER TABLE `creator`
  ADD PRIMARY KEY (`cr_id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
