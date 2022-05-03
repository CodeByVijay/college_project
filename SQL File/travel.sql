-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 03:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'shahrukh', 'travel@gmail.com', 'balaghat'),
(2, 'shahrukh', 'shahrukh13040022@gmail.com', 'balaghat'),
(3, 'shahrukh', 'shahrukh13040022@gmail.com', 'balaghat'),
(4, 'baluu', 'chate@gmail.com', 'hi hello'),
(5, 'KUNAL ', 'kunal@gmail.com', 'mai bhi '),
(6, 'shahrukh', 'shahrukh13040022@gmail.com', '           jjj'),
(7, 'shahrukh', 'shah@gmail.com', 'hello'),
(8, 'test1234', 'kfiykhc@kjawgi', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `travelstock`
--

CREATE TABLE `travelstock` (
  `id` int(11) NOT NULL,
  `FULLNAME` varchar(30) DEFAULT NULL,
  `MONO` varchar(30) DEFAULT NULL,
  `EMAIL` varchar(55) DEFAULT NULL,
  `aadhar` varchar(255) DEFAULT NULL,
  `aadhar_back` varchar(255) DEFAULT NULL,
  `place` varchar(255) DEFAULT NULL,
  `address` mediumtext DEFAULT NULL,
  `PASSWD` varchar(30) DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=Guide , 2=Tourist'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelstock`
--

INSERT INTO `travelstock` (`id`, `FULLNAME`, `MONO`, `EMAIL`, `aadhar`, `aadhar_back`, `place`, `address`, `PASSWD`, `type`) VALUES
(1, 'Test', '9696969696', 'test@gmail.com', '1200-refer-banner.png', '2987-aadhar-back-winner-img.png', 'Balaghat', 'Balaghat ', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travelstock`
--
ALTER TABLE `travelstock`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `travelstock`
--
ALTER TABLE `travelstock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
