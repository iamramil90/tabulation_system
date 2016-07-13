-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2016 at 03:46 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tabsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
`user_id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `is_active` int(11) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_id`, `username`, `password`, `is_active`, `last_login`) VALUES
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2016-07-13 09:16:46');

-- --------------------------------------------------------

--
-- Table structure for table `criteria`
--

CREATE TABLE IF NOT EXISTS `criteria` (
`criteria_id` int(6) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `percentage` float NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `criteria`
--

INSERT INTO `criteria` (`criteria_id`, `title`, `description`, `percentage`, `is_active`, `date_created`) VALUES
(4, 'Beauty of Face', 'Self introduction\r\n                        ', 50, 1, '2016-07-12 04:41:28'),
(5, 'Figure', 'Swimsuit segment', 30, 1, '2016-07-12 04:42:16'),
(6, 'Poise and Personality', 'Gown competition', 10, 1, '2016-07-12 04:42:43'),
(7, 'Intelligence', 'Interview portion', 10, 1, '2016-07-12 06:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `judges`
--

CREATE TABLE IF NOT EXISTS `judges` (
`judge_id` int(6) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `is_active` int(3) NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `judges`
--

INSERT INTO `judges` (`judge_id`, `first_name`, `last_name`, `username`, `password`, `is_active`, `last_login`) VALUES
(1, 'Ramil', 'Gonzales', 'rgonzales', '45c5af0e194e9b204a8413f818f192f3ef3a43fc5063ac24c45c5fc64b4762b0e632010d1bb3afd98c4af978a0ac69c101151553d70eeda0a2b7a3323bf99100axUkC3G2rYM3bSrTYQEdeX68H+ci7qPqqBhO9XXxr4s=', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
`entity_id` tinyint(4) NOT NULL,
  `participant_id` int(9) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birth_date` date NOT NULL,
  `address` mediumtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`entity_id`, `participant_id`, `first_name`, `last_name`, `birth_date`, `address`, `created_date`, `status`) VALUES
(5, 5, 'Carla ', 'Miralles', '1990-02-13', 'Jaro, Leyte', '2016-07-12 07:16:02', 1),
(6, 2, 'Loren Mar', 'Artajos', '1990-12-30', 'LAOAG City', '2016-07-10 05:05:58', 1),
(8, 3, 'Chissan Rae', 'Balderas', '1993-07-07', 'INFANTA, Pangasinan', '2016-07-12 07:31:54', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `criteria`
--
ALTER TABLE `criteria`
 ADD PRIMARY KEY (`criteria_id`);

--
-- Indexes for table `judges`
--
ALTER TABLE `judges`
 ADD PRIMARY KEY (`judge_id`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
 ADD PRIMARY KEY (`entity_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `criteria`
--
ALTER TABLE `criteria`
MODIFY `criteria_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `judges`
--
ALTER TABLE `judges`
MODIFY `judge_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
MODIFY `entity_id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
