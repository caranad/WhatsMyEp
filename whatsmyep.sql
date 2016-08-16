-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2016 at 01:42 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `whatsmyep`
--

-- --------------------------------------------------------

--
-- Table structure for table `episodes`
--

CREATE TABLE IF NOT EXISTS `episodes` (
  `show_id` int(11) NOT NULL,
  `episode_number` int(11) DEFAULT NULL,
  `episode_name` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `episodes`
--

INSERT INTO `episodes` (`show_id`, `episode_number`, `episode_name`) VALUES
(1, 1, 'Episode One'),
(1, 2, 'Episode Two'),
(1, 3, 'Episode Three'),
(1, 4, 'Episode Four'),
(1, 5, 'Episode Five'),
(1, 6, 'Episode 6'),
(1, 7, 'Episode 7'),
(1, 8, 'Episode 8'),
(1, 9, 'Episode 9'),
(1, 10, 'Episode 10'),
(1, 11, 'Episode 11'),
(1, 12, 'Episode 12'),
(1, 13, 'Episode 13'),
(1, 14, 'Episode 14'),
(1, 15, 'Episode 15'),
(1, 16, 'Episode 16'),
(1, 17, 'Episode 17'),
(1, 18, 'Episode 18'),
(1, 19, 'Episode 19'),
(1, 20, 'Episode 20'),
(1, 21, 'Episode 21'),
(1, 22, 'Episode 22'),
(1, 23, 'Episode 23'),
(1, 24, 'Episode 24'),
(1, 25, 'Episode 25'),
(1, 26, 'Episode 26'),
(1, 27, 'Episode 27'),
(1, 28, 'Episode 28'),
(1, 29, 'Episode 29'),
(1, 30, 'Episode 30'),
(1, 31, 'Episode 31'),
(1, 32, 'Episode 32'),
(1, 33, 'Episode 33'),
(1, 34, 'Episode 34'),
(1, 35, 'Episode 35'),
(1, 36, 'Episode 36'),
(1, 37, 'Episode 37'),
(1, 38, 'Episode 38'),
(1, 39, 'Episode 39'),
(1, 40, 'Episode 40'),
(1, 41, 'Episode 41'),
(1, 42, 'Episode 42'),
(1, 43, 'Episode 43'),
(1, 44, 'Episode 44'),
(1, 45, 'Episode 45'),
(1, 46, 'Episode 46'),
(1, 47, 'Episode 47'),
(1, 48, 'Episode 48'),
(1, 49, 'Episode 49'),
(1, 50, 'Episode 50'),
(1, 51, 'Episode 51'),
(1, 52, 'Episode 52'),
(1, 53, 'Episode 53'),
(1, 54, 'Episode 54'),
(2, 1, 'Episode One, 02'),
(2, 2, 'Episode Two, 02'),
(2, 3, 'Episode Three, 02'),
(2, 4, 'Episode 4, 02'),
(2, 5, 'Episode 5, 02'),
(2, 6, 'Episode 6, 02'),
(2, 7, 'Episode 7, 02'),
(2, 8, 'Episode 8, 02'),
(2, 9, 'Episode 9, 02'),
(2, 10, 'Episode 10, 02'),
(2, 11, 'Episode 11, 02'),
(2, 12, 'Episode 12, 02'),
(2, 13, 'Episode 13, 02'),
(2, 14, 'Episode 14, 02'),
(2, 15, 'Episode 15, 02'),
(2, 16, 'Episode 16, 02'),
(2, 17, 'Episode 17, 02'),
(2, 18, 'Episode 18, 02'),
(2, 19, 'Episode 19, 02'),
(2, 20, 'Episode 20, 02'),
(2, 21, 'Episode 21, 02'),
(2, 22, 'Episode 22, 02'),
(2, 23, 'Episode 23, 02'),
(2, 24, 'Episode 24, 02'),
(2, 25, 'Episode 25, 02'),
(2, 26, 'Episode 26, 02'),
(2, 27, 'Episode 27, 02'),
(2, 28, 'Episode 28, 02'),
(2, 29, 'Episode 29, 02'),
(2, 30, 'Episode 30, 02'),
(2, 31, 'Episode 31, 02'),
(2, 32, 'Episode 32, 02'),
(2, 33, 'Episode 33, 02'),
(2, 34, 'Episode 34, 02'),
(2, 35, 'Episode 35, 02'),
(2, 36, 'Episode 36, 02'),
(2, 37, 'Episode 37, 02'),
(2, 38, 'Episode 38, 02'),
(2, 39, 'Episode 39, 02'),
(2, 40, 'Episode 40, 02'),
(2, 41, 'Episode 41, 02'),
(2, 42, 'Episode 42, 02'),
(2, 43, 'Episode 43, 02'),
(2, 44, 'Episode 44, 02'),
(2, 45, 'Episode 45, 02'),
(2, 46, 'Episode 46, 02'),
(2, 47, 'Episode 47, 02'),
(2, 48, 'Episode 48, 02'),
(2, 49, 'Episode 49, 02'),
(2, 50, 'Episode 50, 02'),
(5, 1, 'Indian Picnics Are Mental'),
(5, 2, 'Insanity At The Mela'),
(5, 3, 'Desi Parents And School'),
(5, 4, 'Desi Parents And Technology'),
(5, 5, 'Desi Parents And Halloween'),
(5, 6, 'Punjabi Television Breakdown');



-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `airdate` int(11) DEFAULT NULL,
  `genre` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`id`, `name`, `airdate`, `genre`) VALUES
(1, 'Digimon Adventure', 1999, 'Animated'),
(2, 'Digimon Adventure 02', 2000, 'Animated'),
(3, 'Game Of Thrones', 2014, 'Drama'),
(4, 'Spongebob Squarepants', 1999, 'Animated'),
(5, 'The JusReign Show', 2011, 'Comedy'),
(6, 'Russell Peters', 2013, 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) DEFAULT NULL,
  `username` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Christopher Aranadi', 'christo1996', 'billjames123'),
(2, 'Ross Lingham', 'rlingham69', 'reallister'),
(3, 'Bikram Saini', 'Bikram1965', 'jusreign1990'),
(4, 'Jasmeet Singh', 'jusreign', 'beatsbydre');

-- --------------------------------------------------------

--
-- Table structure for table `user_shows`
--

CREATE TABLE IF NOT EXISTS `user_shows` (
  `user_id` int(11) NOT NULL DEFAULT '0',
  `show_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_show_episodes`
--

CREATE TABLE IF NOT EXISTS `user_show_episodes` (
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `episode_id` int(11) NOT NULL,
  `watched` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `user_shows`
--
ALTER TABLE `user_shows`
  ADD PRIMARY KEY (`user_id`,`show_id`), ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
