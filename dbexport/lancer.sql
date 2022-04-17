-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 03:44 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `2bconcept`
--

CREATE TABLE IF NOT EXISTS `2bconcept` (
`id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `clientName` varchar(255) NOT NULL,
  `clientNumber` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `addDescription` varchar(255) NOT NULL,
  `currentTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `attachment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `2bconcept`
--

INSERT INTO `2bconcept` (`id`, `title`, `clientName`, `clientNumber`, `description`, `addDescription`, `currentTime`, `attachment`) VALUES
(9, 'Education', 'Benjamin', '0267105599', 'Education is the key to success', '3e12b0781443f.jpg', '2003-01-01 09:10:16', '3e12b07815382.cdr'),
(11, 'Freedom', 'Prince', '0267105599', 'Freedom', '3e12b30a99c7a.jpg', '2003-01-01 09:21:14', '3e12b30a9a7ec.cdr');

-- --------------------------------------------------------

--
-- Table structure for table `lancer`
--

CREATE TABLE IF NOT EXISTS `lancer` (
`id` int(11) NOT NULL,
  `name` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL,
  `age` int(233) NOT NULL,
  `contact` int(10) NOT NULL,
  `job` varchar(233) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `lancer`
--

INSERT INTO `lancer` (`id`, `name`, `email`, `age`, `contact`, `job`, `date`) VALUES
(1, 'Nii Yartey', 'princeannan4332@gmail.com', 18, 267105599, 'Programmer', '2021-08-09 09:41:27'),
(2, 'Joseph Annan', 'jah123@gmail.com', 60, 277651959, 'Graphic Design', '2021-08-09 10:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `messagedetails`
--

CREATE TABLE IF NOT EXISTS `messagedetails` (
  `id` varchar(255) DEFAULT NULL,
  `commentMessages` varchar(255) DEFAULT NULL,
  `userid` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
`id` int(11) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `userid` int(255) DEFAULT NULL,
  `number` int(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message`, `userid`, `number`) VALUES
(12, 'hey', 11, NULL),
(15, 'Good job', 9, NULL),
(16, 'good job', 12, NULL),
(17, 'man', 11, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2bconcept`
--
ALTER TABLE `2bconcept`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lancer`
--
ALTER TABLE `lancer`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2bconcept`
--
ALTER TABLE `2bconcept`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `lancer`
--
ALTER TABLE `lancer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
