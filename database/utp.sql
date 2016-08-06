-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2016 at 07:05 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `utp`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `f_name` varchar(10) NOT NULL,
  `l_name` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(35) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `likes` bigint(20) NOT NULL DEFAULT '0',
  `writeup` bigint(20) NOT NULL DEFAULT '0',
  `others` bigint(20) NOT NULL DEFAULT '0',
  `readcount` bigint(20) NOT NULL DEFAULT '0',
  `fb_link` text,
  `googleplus_link` text,
  `twitter_link` text,
  `linkedin_link` text,
  `about_me` text
) ENGINE=InnoDB AUTO_INCREMENT=12224 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `f_name`, `l_name`, `username`, `email`, `phone`, `dob`, `password`, `doc`, `likes`, `writeup`, `others`, `readcount`, `fb_link`, `googleplus_link`, `twitter_link`, `linkedin_link`, `about_me`) VALUES
(12223, 'Ganesh', 'Sawhney', 'ganeshsawhney', 'ganeshsawhney@gmail.com', 9717694417, '1995-11-27', 'password', '2016-01-03 19:38:28', 0, 0, 0, 0, 'ganeshsawhney', 'ganeshsawhney', 'ganeshsawhney', 'ganeshsawhney', 'Designer and Developer of The Untamed Pen');

-- --------------------------------------------------------

--
-- Table structure for table `writeup`
--

CREATE TABLE IF NOT EXISTS `writeup` (
  `id` bigint(20) NOT NULL,
  `writer_id` int(11) NOT NULL,
  `type` varchar(15) NOT NULL COMMENT 'article/oneliner',
  `about` varchar(50) NOT NULL COMMENT 'Real life Experienxe/fantasy',
  `text` longtext NOT NULL,
  `mood` varchar(15) NOT NULL,
  `tags` varchar(50) NOT NULL,
  `dateofedition` datetime NOT NULL,
  `dateofcreation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11152 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `writeup`
--

INSERT INTO `writeup` (`id`, `writer_id`, `type`, `about`, `text`, `mood`, `tags`, `dateofedition`, `dateofcreation`) VALUES
(11111, 12223, 'Articles', 'Real', 'Anything', 'Happy', 'my story', '0000-00-00 00:00:00', '2016-01-14 11:07:59'),
(11151, 12223, 'Articles', 'Fantasy', 'kbfwp ewfpweid ewpdij\r\newoin\r\noewifn', 'Happy', 'my story', '2016-01-25 00:00:00', '2016-01-14 11:09:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `phone` (`phone`), ADD KEY `id` (`id`);

--
-- Indexes for table `writeup`
--
ALTER TABLE `writeup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12224;
--
-- AUTO_INCREMENT for table `writeup`
--
ALTER TABLE `writeup`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11152;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
