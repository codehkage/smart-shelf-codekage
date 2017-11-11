-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2017 at 02:06 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat2_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_rooms`
--

CREATE TABLE IF NOT EXISTS `chat_rooms` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `numofuser` int(10) NOT NULL,
  `file` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_rooms`
--

INSERT INTO `chat_rooms` (`id`, `name`, `numofuser`, `file`) VALUES
(6, 'Ola', 2, 're'),
(7, 'gGroup', 5, 'gGroup');

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE IF NOT EXISTS `chat_users` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `status` int(1) NOT NULL,
  `time_mod` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`id`, `username`, `password`, `status`, `time_mod`) VALUES
(1, 'mrbenson', '', 1, 1496917914),
(3, 'Joshua', '', 1, 1496917914);

-- --------------------------------------------------------

--
-- Table structure for table `chat_users_rooms`
--

CREATE TABLE IF NOT EXISTS `chat_users_rooms` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `room` varchar(100) NOT NULL,
  `mod_time` int(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_users_rooms`
--

INSERT INTO `chat_users_rooms` (`id`, `username`, `room`, `mod_time`) VALUES
(32, 'Joshua', 'gGroup', 1496917914),
(33, 'mrbenson', 'gGroup', 1496917914);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `userEmail` text NOT NULL,
  `pasword` text NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `state` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `firstname`, `lastname`, `userEmail`, `pasword`, `phonenumber`, `state`) VALUES
(1, 'Joshua', 'Olaoluwa', 'Ojedapo', 'ola@mail', '99999', 2147483647, 'ABUJA FCT'),
(2, 'mrbenson', 'Yochanan', 'Benson', 'yochanan@gmail.com', '12345', 2147483647, 'RIVERS'),
(3, 'goodnews', 'doodness', 'goodness', 'goodnews@gmail.com', 'remember', 2147483647, 'ABUJA FCT'),
(4, 'Sunday', 'Tosin', 'Ojedapo', 'oluwatosinojedapo@gmail.com', '00000', 2147483647, 'ABUJA FCT'),
(5, 'Achowba', 'Prince', 'Atuaba', 'atuaba@gmail.com', '77777', 2147483647, 'AKWA IBOM'),
(6, 'olapeter', 'james', 'paul', 'paul@gmail.com', '44444', 2147483647, 'ABUJA FCT'),
(7, 'tosin', 'ola', 'ojedapo', 'paul@gmail.com', '33333', 2147483647, 'Outside Nigeria'),
(8, 'odfghj', 'trghjk', 'fghjk', 'okjhgtr@gmail.com', '77777', 2147483647, 'Outside Nigeria'),
(9, 'shully', 'Frank', 'Glory', 'ghj@fghjk', '55555', 2147483647, 'Outside Nigeria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_rooms`
--
ALTER TABLE `chat_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `chat_users_rooms`
--
ALTER TABLE `chat_users_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_rooms`
--
ALTER TABLE `chat_rooms`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chat_users`
--
ALTER TABLE `chat_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `chat_users_rooms`
--
ALTER TABLE `chat_users_rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
