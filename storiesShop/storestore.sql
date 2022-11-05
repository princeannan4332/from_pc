-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 01:15 PM
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
-- Database: `storestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `ids` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `uname`, `comments`, `author`, `title`, `ids`) VALUES
(10, 'Bones123', 'Good Job I Love It', 'Mafia009', 'Jack and Mason', 26),
(11, 'Mafia009', 'Sweet', 'Bones123', 'Beans Garden', 27),
(11, 'Mafia009', 'I Love It Keep It Up', 'Bones123', 'Beans Garden', 28),
(10, 'Mafia009', 'What the fuck', 'Mafia009', 'Jack and Mason', 29),
(13, 'Bones4331', 'fuck off', 'Bones4331', 'Beans Boom', 30),
(14, 'Mafia009', 'sweet story', 'Mafia009', 'Mad Gang', 31),
(15, 'Mafia009', 'good job 9999999999999999/10', 'Benjie123', 'the fat buffalo mon', 32),
(15, 'Bones4331', 'it sucks go to writing jail ;((((((', 'Benjie123', 'the fat buffalo mon', 33),
(13, 'Benjie123', '@Bones4331 \r\nYou suck my baby bro who is 8 minutes old can write better stories :)))\r\n', 'Bones4331', 'Beans Boom', 34);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message` varchar(10000) DEFAULT NULL,
  `author` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message`, `author`, `uname`, `id`) VALUES
('How are you doing', '10', 'Bones123', NULL),
('wossup', '10', 'Bones123', NULL),
('I have missed u oo', '10', 'Bones123', NULL),
('hg', '', 'Benjie123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `postspj`
--

CREATE TABLE `postspj` (
  `id` int(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `project` varchar(10000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postspj`
--

INSERT INTO `postspj` (`id`, `title`, `uname`, `image`, `project`) VALUES
(1, 'Ninjas ', 'Mafia009', '635e9a8188c00.jpg', 'Make money online with bittly'),
(3, 'Spider', 'Mafia009', '635e9f47141e3.jpg', 'Many are thosse named after spide'),
(4, 'BaseBall', 'Mafia009', '635ea04d81d68.jpg', 'Mike Hango Was a base ball player in 1995 '),
(6, 'Beans', 'Mafia009', '635ea1928e858.jpg', 'You say sup'),
(7, 'Banku Chase', 'Mafia009', '635ea4dbe0cd2.png', 'banku games are real'),
(8, 'Jack and Jeal', 'Mafia009', '635ea5172ae16.png', 'Mango Count was the great fairy tail accros all the globe but...'),
(9, 'The Story Of The Bee', 'Mafia009', '635ecd10d06c9.png', 'Mr Janes woke up the next morning in the jungle having lost the trails of his family he has been the for about three days.Poor Mr.Jones he has no food and water.He has been chasing rats everyday but never gets one.I think he will die bcs he looks weak.\r\n     Morning madam Abena I heard that Mr.Jones is dead is it true...\r\n\r\nthanks for reading.'),
(10, 'Jack and Mason', 'Mafia009', '635fe1c21c543.png', 'Once upon a time...'),
(11, 'Beans Garden', 'Bones123', '63615063db52c.png', 'Mr.Bones sold beans for me...'),
(13, 'Beans Boom', 'Bones4331', '6362618cab933.png', 'Baking a beans clone was a very good idea but yh...'),
(14, 'Banga', 'Mafia009', '63651ee3ae06a.png', 'Make money online'),
(15, 'the fat buffalo mon', 'Benjie123', '63653b01da268.png', 'once upon a time.\r\nthe buffalo died\r\nthe end :)');

-- --------------------------------------------------------

--
-- Table structure for table `signuplogin`
--

CREATE TABLE `signuplogin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `uname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signuplogin`
--

INSERT INTO `signuplogin` (`id`, `name`, `uname`, `email`, `pwd`) VALUES
(1, 'mike', 'mike236', 'mike236@gmail.com', '$2y$10$9s80cdADmbQx.3w2DBx5QO7eoUXIkUjhxctqNXg8qd8Ut4nmjXwNm'),
(2, 'mason Wood', 'mason123', 'mason123@gmail.com', '$2y$10$0xHIg5wv6d4a5K42uay50e2xmuxkzkWPJWtjH6W0bcTILnSjvaKWC'),
(3, 'Jason Bones', 'Bones', 'bones123@gmail.com', '$2y$10$b779BAhEM76ehmvBzfWgeulQ0iEnyfgIM5rOjHIjFU06OXYCi8MvW'),
(4, 'dwarf Mingles', 'Dwarf', 'dwarfsika@gmail.com', '$2y$10$PP2XMDppjOJSz0hr4RVE5OFf/I19jygO9DBR/E13oNlyMdLseFCGy'),
(5, 'Mafia Gang', 'Mafia009', 'mafia009@gmail.com', '$2y$10$zr7hMcQK4Xwg84f.TP/rFOd5vbzc9BW2ldZU/RqESUNC5bL6i/WCq'),
(6, 'Jack Bones', 'Bones4331', 'Sexy_Wu@gmail.com', '$2y$10$zHGCjPx94OR12nZ2OoDL.OfqkrqpFz7vXzdOAQUo8jeKRbeIUNR5S'),
(7, 'Benjie', 'Benjie123', 'bhefly123@gmail.com', '$2y$10$niwLLtip2vHIk3cTalUBW.yKYiI7.BHsxJWGaZ0lPacsiTVLbYSO2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `postspj`
--
ALTER TABLE `postspj`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signuplogin`
--
ALTER TABLE `signuplogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `ids` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `postspj`
--
ALTER TABLE `postspj`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `signuplogin`
--
ALTER TABLE `signuplogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
