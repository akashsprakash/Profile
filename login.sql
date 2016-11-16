-- phpMyAdmin SQL Dump
-- version 4.4.13.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2016 at 10:49 AM
-- Server version: 5.6.31-0ubuntu0.15.10.1
-- PHP Version: 5.6.11-1ubuntu3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminprofile`
--

CREATE TABLE IF NOT EXISTS `adminprofile` (
  `id` int(12) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminprofile`
--

INSERT INTO `adminprofile` (`id`, `email`, `password`) VALUES
(1, 'akashsprakashnew@gmail.com', '0d64987caeb47b8b1ca4593863dbc972');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE IF NOT EXISTS `userprofile` (
  `id` int(12) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `facebook_id` varchar(25) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT '1',
  `activation` varchar(33) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `signup` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`id`, `user_name`, `email`, `password`, `facebook_id`, `user_type`, `activation`, `status`, `signup`) VALUES
(63, NULL, 'jrjayakrishnan6@gmail.com', '85707cb02d66c98fdfdf03b3fc020e99', NULL, 1, NULL, 1, ''),
(64, NULL, 'meakashsprakashhere@gmail.com', '594f803b380a41396ed63dca39503542', NULL, 1, NULL, 1, ''),
(65, NULL, 'akashsprakashnew@gmail.com', '94754d0abb89e4cf0a7f1c494dbb9d2c', NULL, 1, '6707f213cdb7700ae7707716c9ea9311', 2, ''),
(69, 'Kuttan Thamburan', NULL, '', '129554827522108', 2, NULL, 1, '2016-11-15 17:17:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminprofile`
--
ALTER TABLE `adminprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminprofile`
--
ALTER TABLE `adminprofile`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=70;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
