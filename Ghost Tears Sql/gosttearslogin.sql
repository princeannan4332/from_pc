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
-- Table structure for table `gosttearslogin`
--

CREATE TABLE `gosttearslogin` (
  `id` int(11) NOT NULL,
  `uname` varchar(225) DEFAULT NULL,
  `pass` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gosttearslogin`
--

INSERT INTO `gosttearslogin` (`id`, `uname`, `pass`) VALUES
(5, 'martin', '$2y$10$lTDqXrxCsHOHmA1dAfrOK.CA37l6KQWXsm4767sKGDkQVj4gkYdrq'),
(6, 'james', '$2y$10$QY6QLHC2HVToQQxq0.xB/.V8CFEgy6iu2erQQfmvJklWDJQD6hj5W'),
(8, 'mike', '$2y$10$ALx9vJ36V5FhtkypVQWgReWafJZMVEA3N7eneeWbIcCuOZYJPddDy'),
(9, 'charles', '$2y$10$TPGw.a5VxTgAyHfECfyFoecVPZu4y6CsYl7oE3vANZvVQ5Crg1gRu'),
(10, 'aba', '$2y$10$LlSikZitoWwgC1A7P.bYXultswocjUWTgizJjWcTTdBltI3k.0hOu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gosttearslogin`
--
ALTER TABLE `gosttearslogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gosttearslogin`
--
ALTER TABLE `gosttearslogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
