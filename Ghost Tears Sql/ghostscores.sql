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
-- Table structure for table `ghostscores`
--

CREATE TABLE `ghostscores` (
  `id` int(11) NOT NULL,
  `score` int(11) DEFAULT NULL,
  `loose` varchar(225) DEFAULT NULL,
  `win` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ghostscores`
--

INSERT INTO `ghostscores` (`id`, `score`, `loose`, `win`) VALUES
(132, 1, 'martin', 'aba'),
(133, 1, 'aba', 'martin'),
(134, 1, 'aba', 'martin'),
(135, 1, 'martin', 'aba'),
(136, 1, 'aba', 'james'),
(137, 1, 'james', 'aba'),
(138, 1, 'james', 'aba'),
(139, 1, 'aba', 'james'),
(140, 1, 'aba', 'james'),
(141, 1, 'aba', 'james'),
(142, 1, 'james', 'aba'),
(143, 1, 'james', 'aba'),
(144, 1, 'aba', 'james'),
(145, 1, 'james', 'aba'),
(146, 1, 'mike', 'aba'),
(147, 1, 'aba', 'mike'),
(148, 1, 'mike', 'aba'),
(149, 1, 'mike', 'aba'),
(150, 1, 'mike', 'aba'),
(151, 1, 'aba', 'mike'),
(152, 1, 'mike', 'aba'),
(153, 1, 'mike', 'aba'),
(154, 1, 'mike', 'aba'),
(155, 1, 'mike', 'aba'),
(156, 1, 'aba', 'mike'),
(157, 1, 'mike', 'aba'),
(158, 1, 'aba', 'james');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ghostscores`
--
ALTER TABLE `ghostscores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ghostscores`
--
ALTER TABLE `ghostscores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
