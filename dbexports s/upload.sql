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
-- Database: `upload`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_upload`
--

CREATE TABLE IF NOT EXISTS `tb_upload` (
`id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `tb_upload`
--

INSERT INTO `tb_upload` (`id`, `name`, `image`) VALUES
(1, 'man', '61c86b3c9db32.jpg'),
(2, 'man', '61c86cadc1e4a.jpg'),
(3, 'mango', '61c86d5a219af.jpg'),
(4, 'dsx', '61c8e4c7e51ec.jpg'),
(5, 'ww', '3e127f1651c70.jpg'),
(6, ' v', '3e1283519becf.jpg'),
(7, 'j', '3e1284c955d4a.jpg'),
(17, '', '61d051aa10235.jpg'),
(18, '', '61d05463b05af.jpg'),
(19, '', '61d054a1afa3d.jpg'),
(20, '', '61d054d3e0470.jpg'),
(21, '', '61d44c301940c.jpg'),
(22, '', '61d44c4ebd4e1.jpg'),
(23, '', '61d44d8154feb.jpg'),
(24, '', '3e1287da5c81a.jpg'),
(25, '', '3e1288fc420ab.jpg'),
(26, '', '3e12844f2c1b8.jpg'),
(27, '', '3e12846452041.jpg'),
(28, '', '61f948b9da3f5.jpg'),
(29, '', '3e1284387f8dc.jpeg'),
(30, '', '3e12d732c24fa.jpg'),
(31, '', '3e12d74ee7fb3.jpg'),
(34, '', '6206ca8b7270e.jpg'),
(35, '', '6206cbab6c00e.jpg'),
(36, '', '3e1287ec4190a.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_upload`
--
ALTER TABLE `tb_upload`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_upload`
--
ALTER TABLE `tb_upload`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
