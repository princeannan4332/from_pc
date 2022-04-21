-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2003 at 09:34 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `name`, `email`, `uname`, `pwd`) VALUES
(1, 'prince', 'princeannan4332@gmail.com', 'prince123', '$2y$10$A2Mrh2fl.p.zCwZc746DlekZK.BHtwWolL02onRHDTE/M.K5R.14K'),
(2, 'prince', 'princeannan4332@gmail.com', 'prince123', '$2y$10$2dXHNSYVkdX5LDMgqSh9mOfu/0s1h9P2EgrGvAXlx8fLtBWyCsMU2'),
(3, 'prince', 'danielannan0198@gmail.com', 'www', '$2y$10$rCCpJWbQnmOF7Tzv5uyR5u5DMuVt4di5eLe4pvNiyIVHdgvxq4ylO'),
(4, 'martinelli', 'martinelli@gmail.com', 'martinelli123', '$2y$10$Tdtn9SkYpBAZm6NCtSoyBuhfZh4bEcVVka3vahDlYyuekeAe90yle'),
(5, 'mason', 'mason@gmail.com', 'manson233', '$2y$10$0bUDBbEnWE4DuEhtxTA5TOwZLw/WWPY/fMhbpBpDZf38ZiDG2ywWu'),
(6, 'prince', 'danielannan0198@gmail.com', 'www', '$2y$10$BqQKbXOdNL9VGw70CXR2GORvQdalYlcu2uqC528QknOHSoC4GYX1e'),
(7, 'prinkle', 'ss@g.c', 'prinkle', '$2y$10$UMys54RTfXLA/zK0K.c2BeY3uygEavI21WOYnY5c2193lckZmgjDy'),
(8, 'as', 'asas@gmail.com', 'asas', 'a'),
(9, 'james', 'james@gmail.com', 'james', 'a'),
(10, 'jason', 'jason@gmail.com', 'jason', '1'),
(11, 'mount', 'mount@gmail.com', 'mount', '$2y$10$.qVBK1xoELffsb4.ln7wKOhwk4VTs6y4xnLWEEBpfHkt.FA/.4ngu'),
(12, 'jacklin', 'jacklin@gmail.com', 'jacklin', '$2y$10$7cVJBJFCyUM3x/coTHFxyeft73H65nnB9Io6DAXwbHbKQ72vSjk2i'),
(13, 'prince', 'pranc@gmail.com', 'pranc', 'pranc'),
(14, 'pop', 'pop@gmail.com', 'pop', '$2y$10$Y.8IB0zJwWlJaGmWnPHo2eTHiyZnveRGCxFBVo4sgfrSPBFjwPuB2'),
(15, 'barns', 'barns@gmail.cx', 'barns', '$2y$10$2r8xnydm0rhLaJ.G93YsZef3lzvTUQTkilz1M22X1D2KK7Bvx1N.e'),
(16, 'eddy', 'eddy@gmail.com', 'eddy', '$2y$10$KcXduf60OXJx0D8RWxp9HOXuSN7tBaHe.3f68Apzvn18y8pK/8LUS'),
(17, '', 'mango@gmail.com', 'mango', ''),
(18, '', 'kick@gmail.com', 'kick', 'a'),
(19, '', 'kicks@gmail.com', 'kicks', 'a'),
(20, '', 'a@gmail.com', 'a', 'a'),
(21, '', 'wwwp@gmail.com', 'wwwp', '$2y$10$6K/323VgaXdz2vEHLgtqT./1TH3oBKZM8vnbSFmoGQwuFLdnZac8C'),
(22, '', 'game@gmail.com', 'game', '$2y$10$Gx9H8DQsJnN1ww54GkBk6eAg708T4V7gTe1vk/qoEuKVtTxDCegT2');

-- --------------------------------------------------------

--
-- Table structure for table `realtest`
--

CREATE TABLE IF NOT EXISTS `realtest` (
`id` int(11) NOT NULL,
  `name` varchar(233) NOT NULL,
  `email` varchar(233) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `realtest`
--

INSERT INTO `realtest` (`id`, `name`, `email`) VALUES
(22, 'mansa', 'sas@gmail.com'),
(24, 'Aku', 'aku@gmail.com'),
(25, 'Jack', 'jack@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbupload`
--

CREATE TABLE IF NOT EXISTS `tbupload` (
`id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbupload`
--

INSERT INTO `tbupload` (`id`, `image`) VALUES
(1, '3e12731219bfc.jpg'),
(2, '3e12748f08d24.jpg'),
(3, '3e1274a3b8893.jpg'),
(4, '3e1274c7551d8.txt'),
(5, '3e12756d53724.jpg'),
(6, '3e12759190013.cdr');

-- --------------------------------------------------------

--
-- Table structure for table `updates`
--

CREATE TABLE IF NOT EXISTS `updates` (
`id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `updates`
--

INSERT INTO `updates` (`id`, `name`, `message`) VALUES
(1, 'www', 'hello friends and family,I love you all.'),
(2, 'Max', 'You look so cute in that hilarious hat of dads'),
(5, 'James', 'Hey there'),
(6, 'Jason', 'I am an assasin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `realtest`
--
ALTER TABLE `realtest`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbupload`
--
ALTER TABLE `tbupload`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `updates`
--
ALTER TABLE `updates`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `realtest`
--
ALTER TABLE `realtest`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbupload`
--
ALTER TABLE `tbupload`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `updates`
--
ALTER TABLE `updates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
