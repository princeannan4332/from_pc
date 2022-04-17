-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 03:45 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `newyear`
--

CREATE TABLE IF NOT EXISTS `newyear` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `newyear`
--

INSERT INTO `newyear` (`id`, `name`, `message`) VALUES
(1, '', 'as'),
(2, '', 'assssssssczcxsdcdsasssssssscccccccccccccx'),
(3, '', 'may god bless you'),
(4, '', 'may god bless you i hope everything is fine see u tommorrow'),
(5, '', 'I am feeling good'),
(6, '', 'My name is prince annan'),
(7, '', 'manasas'),
(8, '', 'manasassa'),
(9, '', 'asdfd'),
(10, '', 'mango is good'),
(11, 'Mansa', 'May God Richly Bless You'),
(12, '@Mr.Bones', 'Happy New Year to my Love Ones Around May The Lord Richly Bless You'),
(13, '@hjabsd', 'hjeahjkdsac');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newyear`
--
ALTER TABLE `newyear`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newyear`
--
ALTER TABLE `newyear`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
