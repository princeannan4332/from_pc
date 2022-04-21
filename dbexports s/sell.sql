-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2003 at 09:33 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sell`
--

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE IF NOT EXISTS `sell` (
`id` int(11) NOT NULL,
  `name` varchar(233) NOT NULL,
  `author` varchar(233) NOT NULL,
  `info` varchar(233) NOT NULL,
  `price` varchar(233) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(233) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `name`, `author`, `info`, `price`, `date`, `link`) VALUES
(1, 'timo rush', 'prince hen', 'lazy marmaid', '23', '2021-08-10 03:36:12', 'www.google.com'),
(2, 'Jungle Book', 'Nathaniel Wales', 'A boy in a jungle', '12.99', '2021-08-10 04:20:10', 'http://www.bing.com'),
(3, 'Fish Tune', 'Prince Annan', 'He is a programmer', '2334.66', '2021-08-10 05:32:21', 'http://catch.com'),
(4, 'King', 'Jack', 'I am a boy', '233.44449', '2021-08-11 01:34:04', 'www.ghana.com'),
(5, 'mark', 'was', 'asdddddddddddddcxzdsdcd', '1', '2021-08-11 04:12:36', 'www.google.com'),
(6, 'man', 'man3', '433443', '1', '2021-08-11 04:14:13', 'www.google.com'),
(7, 'prince', 'Prince', 'He is a good Boy', '200', '2021-08-11 04:35:17', 'https://www.google.com'),
(8, 'boye', 'nii yartey', 'he is a good boy', '2.999', '2003-01-01 08:35:49', 'www.google.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
