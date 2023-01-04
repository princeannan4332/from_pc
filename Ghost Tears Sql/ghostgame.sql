-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 05:07 PM
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
-- Table structure for table `ghostgame`
--

CREATE TABLE `ghostgame` (
  `id` int(11) NOT NULL,
  `uname` varchar(225) DEFAULT NULL,
  `fname` varchar(225) DEFAULT NULL,
  `outcome` varchar(225) DEFAULT NULL,
  `gameNum` varchar(225) DEFAULT NULL,
  `noty` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ghostgame`
--

INSERT INTO `ghostgame` (`id`, `uname`, `fname`, `outcome`, `gameNum`, `noty`) VALUES
(1, 'martin', 'mike', 'Rock', '1', NULL),
(2, 'martin', 'charles', 'Rock', '1', NULL),
(3, 'mike', 'martin', 'Rock', '1', NULL),
(4, 'mike', 'martin', 'Rock', '2', NULL),
(5, 'martin', 'mike', 'Rock', '2', NULL),
(6, 'mike', 'martin', 'Rock', '3', NULL),
(7, 'martin', 'mike', 'Rock', '3', NULL),
(8, 'martin', 'mike', 'Rock', '4', NULL),
(9, 'mike', 'martin', 'Rock', '4', NULL),
(10, 'mike', 'martin', 'Rock', '5', NULL),
(11, 'martin', 'mike', 'Rock', '5', NULL),
(12, 'mike', 'martin', 'Rock', '6', NULL),
(13, 'martin', 'mike', 'Rock', '6', NULL),
(14, 'martin', 'mike', 'Rock', '7', NULL),
(15, 'mike', 'martin', 'Rock', '7', NULL),
(16, 'martin', 'mike', 'Rock', '8', NULL),
(17, 'mike', 'martin', 'Rock', '8', NULL),
(18, 'mike', 'martin', 'Rock', '9', NULL),
(19, 'martin', 'mike', 'Rock', '9', NULL),
(20, 'mike', 'martin', 'Rock', '10', NULL),
(21, 'martin', 'mike', 'Paper', '10', NULL),
(22, 'mike', 'martin', 'Rock', '11', NULL),
(23, 'martin', 'mike', 'Rock', '11', NULL),
(24, 'martin', 'mike', 'Paper', '12', NULL),
(25, 'mike', 'martin', 'Rock', '12', NULL),
(26, 'mike', 'martin', 'Rock', '13', NULL),
(27, 'martin', 'mike', 'Rock', '13', NULL),
(28, 'mike', 'martin', 'Rock', '14', NULL),
(29, 'martin', 'mike', 'Paper', '14', NULL),
(30, 'martin', 'mike', 'Rock', '15', NULL),
(31, 'mike', 'martin', 'Paper', '15', NULL),
(32, 'mike', 'martin', 'Rock', '16', NULL),
(33, 'martin', 'mike', 'Scissors', '16', NULL),
(34, 'mike', 'martin', 'Rock', '17', NULL),
(35, 'martin', 'mike', 'Paper', '17', NULL),
(36, 'mike', 'martin', 'Rock', '18', NULL),
(37, 'martin', 'mike', 'Paper', '18', NULL),
(38, 'mike', 'martin', 'Rock', '19', NULL),
(39, 'martin', 'mike', 'Paper', '19', NULL),
(40, 'mike', 'martin', 'Rock', '20', NULL),
(41, 'martin', 'mike', 'Paper', '20', NULL),
(42, 'mike', 'martin', 'Rock', '21', NULL),
(43, 'martin', 'mike', 'Paper', '21', NULL),
(44, 'mike', 'martin', 'Paper', '22', NULL),
(45, 'martin', 'mike', 'Paper', '22', NULL),
(46, 'mike', 'martin', 'Paper', '23', NULL),
(47, 'martin', 'mike', 'Rock', '23', NULL),
(48, 'martin', 'mike', 'Paper', '24', NULL),
(49, 'mike', 'martin', 'Paper', '24', NULL),
(50, 'martin', 'mike', 'Paper', '25', NULL),
(51, 'mike', 'martin', 'Paper', '25', NULL),
(52, 'mike', 'martin', 'Rock', '26', NULL),
(53, 'martin', 'mike', 'Paper', '26', NULL),
(54, 'mike', 'martin', 'Paper', '27', NULL),
(55, 'martin', 'mike', 'Rock', '27', NULL),
(56, 'martin', 'mike', 'Rock', '28', NULL),
(57, 'mike', 'martin', 'Paper', '28', NULL),
(58, 'martin', 'mike', 'Rock', '29', NULL),
(59, 'mike', 'martin', 'Scissors', '29', NULL),
(60, 'mike', 'martin', 'Paper', '30', NULL),
(61, 'martin', 'mike', 'Rock', '30', NULL),
(62, 'martin', 'aba', 'Paper', '1', NULL),
(63, 'aba', 'martin', 'Paper', '1', NULL),
(64, 'aba', 'martin', 'Rock', '2', NULL),
(65, 'martin', 'aba', 'Scissors', '2', NULL),
(66, 'aba', 'martin', 'Scissors', '3', NULL),
(67, 'martin', 'aba', 'Rock', '3', NULL),
(68, 'aba', 'martin', 'Scissors', '4', NULL),
(69, 'martin', 'aba', 'Rock', '4', NULL),
(70, 'aba', 'martin', 'Rock', '5', NULL),
(71, 'martin', 'aba', 'Scissors', '5', NULL),
(72, 'james', 'aba', 'Rock', '1', NULL),
(73, 'aba', 'james', 'Paper', '1', NULL),
(74, 'aba', 'james', 'Scissors', '2', NULL),
(75, 'james', 'aba', 'Rock', '2', NULL),
(76, 'james', 'aba', 'Rock', '3', NULL),
(77, 'aba', 'james', 'Paper', '3', NULL),
(78, 'james', 'aba', 'Paper', '4', NULL),
(79, 'aba', 'james', 'Scissors', '4', NULL),
(80, 'aba', 'martin', 'Rock', '6', NULL),
(81, 'aba', 'james', 'Paper', '5', NULL),
(82, 'james', 'aba', 'Paper', '5', NULL),
(83, 'aba', 'james', 'Rock', '6', NULL),
(84, 'james', 'aba', 'Rock', '6', NULL),
(85, 'aba', 'james', 'Paper', '7', NULL),
(86, 'james', 'aba', 'Scissors', '7', NULL),
(87, 'aba', 'james', 'Rock', '8', NULL),
(88, 'james', 'aba', 'Paper', '8', NULL),
(89, 'aba', 'james', 'Paper', '9', NULL),
(90, 'james', 'aba', 'Paper', '9', NULL),
(91, 'aba', 'james', 'Rock', '10', NULL),
(92, 'james', 'aba', 'Paper', '10', NULL),
(93, 'aba', 'james', 'Scissors', '11', NULL),
(94, 'james', 'aba', 'Paper', '11', NULL),
(95, 'aba', 'james', 'Paper', '12', NULL),
(96, 'james', 'aba', 'Rock', '12', NULL),
(97, 'aba', 'james', 'Rock', '13', NULL),
(98, 'james', 'aba', 'Rock', '13', NULL),
(99, 'aba', 'james', 'Rock', '14', NULL),
(100, 'james', 'aba', 'Paper', '14', NULL),
(101, 'aba', 'james', 'Paper', '15', NULL),
(102, 'james', 'aba', 'Rock', '15', NULL),
(103, 'mike', 'aba', 'Rock', '1', NULL),
(104, 'aba', 'mike', 'Paper', '1', NULL),
(105, 'aba', 'mike', 'Rock', '2', NULL),
(106, 'mike', 'aba', 'Scissors', '2', NULL),
(107, 'aba', 'mike', 'Paper', '3', NULL),
(108, 'mike', 'aba', 'Scissors', '3', NULL),
(109, 'mike', 'aba', 'Paper', '4', NULL),
(110, 'aba', 'mike', 'Scissors', '4', NULL),
(111, 'aba', 'mike', 'Paper', '5', NULL),
(112, 'mike', 'aba', 'Paper', '5', NULL),
(113, 'aba', 'mike', 'Paper', '6', NULL),
(114, 'mike', 'aba', 'Rock', '6', NULL),
(115, 'aba', 'mike', 'Paper', '7', NULL),
(116, 'mike', 'aba', 'Rock', '7', NULL),
(117, 'mike', 'aba', 'Rock', '8', NULL),
(118, 'aba', 'mike', 'Scissors', '8', NULL),
(119, 'aba', 'mike', 'Paper', '9', NULL),
(120, 'mike', 'aba', 'Paper', '9', NULL),
(121, 'aba', 'mike', 'Paper', '10', NULL),
(122, 'mike', 'aba', 'Paper', '10', NULL),
(123, 'aba', 'mike', 'Rock', '11', NULL),
(124, 'mike', 'aba', 'Scissors', '11', NULL),
(125, 'aba', 'mike', 'Paper', '12', NULL),
(126, 'mike', 'aba', 'Rock', '12', NULL),
(127, 'mike', 'aba', 'Paper', '13', NULL),
(128, 'aba', 'mike', 'Paper', '13', NULL),
(129, 'mike', 'aba', 'Scissors', '14', NULL),
(130, 'aba', 'mike', 'Rock', '14', NULL),
(131, 'mike', 'aba', 'Rock', '15', 'read'),
(132, 'aba', 'mike', 'Paper', '15', 'read'),
(133, 'aba', 'mike', 'Rock', '16', 'read'),
(134, 'mike', 'aba', 'Paper', '16', 'read'),
(135, 'aba', 'mike', 'Paper', '17', 'read'),
(136, 'mike', 'aba', 'Rock', '17', 'read'),
(137, 'mike', 'aba', 'Rock', '18', 'read'),
(138, 'james', 'aba', 'Rock', '16', 'read'),
(139, 'aba', 'mike', 'Rock', '18', 'read'),
(140, 'aba', 'james', 'Scissors', '16', 'read'),
(141, 'james', 'aba', 'Paper', '17', 'read'),
(142, 'aba', 'james', 'Paper', '17', 'read');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ghostgame`
--
ALTER TABLE `ghostgame`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ghostgame`
--
ALTER TABLE `ghostgame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
