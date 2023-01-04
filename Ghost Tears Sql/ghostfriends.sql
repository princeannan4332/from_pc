-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 05:08 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `just testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `ghostfriends`
--

CREATE TABLE `ghostfriends` (
  `id` int(11) NOT NULL,
  `uname` varchar(225) DEFAULT NULL,
  `friend` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ghostfriends`
--

INSERT INTO `ghostfriends` (`id`, `uname`, `friend`) VALUES
(7, 'martin', 'mike'),
(8, 'james', 'charles'),
(9, 'martin', 'charles'),
(10, 'martin', 'james'),
(11, 'james', 'mike'),
(12, 'aba', 'martin'),
(13, 'aba', 'james'),
(14, 'aba', 'mike');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ghostfriends`
--
ALTER TABLE `ghostfriends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ghostfriends`
--
ALTER TABLE `ghostfriends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
