-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2022 at 02:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

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
  `PASSWD` varchar(30) DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT '1=Guide , 2=Tourist'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travelstock`
--

INSERT INTO `travelstock` (`id`, `FULLNAME`, `MONO`, `EMAIL`, `PASSWD`, `type`) VALUES
(1, 'SHAHRUKH KHAN', '+919516098492', 'shahrukh130400@gmail.com', '', 0),
(2, 'BALAGHAT GURU', '+919516098492', 'shahrukh130400@gmail.com', '123456', 0),
(3, 'SHUBHAM KAWRE', '+919516098492', 'shahrukh130400@gmail.com', '321654', 0),
(4, 'Balaghat Official', '9516085482', 'shahrukh13040022@gmail.com', '764487', 0),
(5, 'Travel Stock', '8225808165', 'travel@gmail.com', '654321', 0),
(6, 'Balaghat Official', '9516085482', 'shahrukh13040022@gmail.com', '764487', 0),
(7, 'SOSAN RANA ', '6523565855', 'dosahn@gmail.com', '321', 0),
(8, 'TEJES BOPCHE', '9564123582', 'TEJES@GMAIL.COM', '321654', 0),
(9, 'TEJES BOPCHE', '9564123582', 'TEJES@GMAIL.COM', '', 0),
(10, 'sharad', '9589413144', 'sharad@gmail.com', '12589637', 0),
(11, 'SHAHRUKH KHAN', '+919516098492', 'shahrukh130400@gmail.com', '00000000', 0),
(12, 'NIKITA PATLE ', '956485685', 'NIKITA@GMAIL.COM', '22222', 0),
(13, 'DUSHYANT BHANDARI', '65456584', 'DDDD@GMAIL.COM', '123456', 0),
(14, 'test Official', '8225808165', 'shahrukh13040022@gmail.com', '764487', 0),
(15, 'mahendra ', '9516085482', 'shahrukh13040022@gmail.com', '123456', 0),
(16, 'nikita', '55555555', '55555555@gmail.com', '123456', 1),
(17, 'Balaghat Official', '9516085482', 'shahrukh13040022@gmail.com', '123', 2),
(18, 'Balaghat Official', '444444444444444444444', 'shahrukh13040022@gmail.com', '764487', 1),
(19, 'example', '231564875', 'example@gmail.com', '123456', 1),
(20, 'ballu', '76445487', 'bahal@gmail.com', '123456', 2),
(21, 'karan', '1234567890', 'karan@gmail.com', '654321', 1),
(22, 'aaditya ', '9546823546', 'aditya@gmail.com', '123456', 2),
(23, 'jugnuu', '15423548525', 'shah@gmail.com', '123456', 1),
(24, 'jugnuu', '15423548525', 'shah@gmail.com', '123', 1),
(25, 'ashish', '35462310587', 'ashish@gmail.com', '123456', 1),
(26, 'durgeshwari', '9564235452', 'durgeshwari@gmail.com', '321654', 1),
(27, 'DURGESHWARI', '9516098492', 'durgeshwari@gmail.com', '123456', 2),
(28, 'saurabh40', '1516098492', 'shahrukh130400@gmail.com', '123456', 1),
(29, 'nhvjhmv,', 'nmvkhc', 'kfiykhc@kjawgi', '123456', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
