-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2016 at 04:17 AM
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
(1, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 1, '2016-07-13 21:09:04');

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
(5, 'Figure of Figure', 'Swimsuit segment', 30, 1, '2016-07-13 13:43:04'),
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
-- Table structure for table `media`
--

CREATE TABLE IF NOT EXISTS `media` (
`entity_id` int(6) NOT NULL,
  `attrib_id` int(6) NOT NULL,
  `filepath` varchar(255) NOT NULL,
  `set_default` tinyint(4) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`entity_id`, `attrib_id`, `filepath`, `set_default`, `date_created`) VALUES
(22, 19, '/media/participants/IMG338163629.jpg', 1, '2016-07-14 02:15:52'),
(23, 19, '/media/participants/IMG1099439472.jpg', 0, '2016-07-13 13:16:56'),
(24, 19, '/media/participants/IMG620944168.jpg', 0, '2016-07-13 13:17:14'),
(27, 20, '/media/participants/IMG1237719425.jpg', 1, '2016-07-14 02:15:58'),
(28, 20, '/media/participants/IMG1622364463.jpg', 0, '2016-07-13 13:28:34'),
(29, 20, '/media/participants/IMG446747993.jpg', 0, '2016-07-13 13:28:40'),
(30, 20, '/media/participants/IMG2028228140.jpg', 0, '2016-07-13 13:28:46'),
(31, 21, '/media/participants/IMG204657703.jpg', 1, '2016-07-14 02:16:02'),
(32, 21, '/media/participants/IMG1756067537.jpg', 0, '2016-07-13 13:30:42'),
(33, 21, '/media/participants/IMG164790562.jpg', 0, '2016-07-13 13:30:48'),
(34, 21, '/media/participants/IMG1709118027.jpg', 0, '2016-07-13 13:30:54'),
(35, 22, '/media/participants/IMG808721363.jpg', 1, '2016-07-14 02:16:11'),
(36, 22, '/media/participants/IMG692215961.jpg', 0, '2016-07-13 13:33:22'),
(37, 22, '/media/participants/IMG2100942126.jpg', 0, '2016-07-13 13:33:27'),
(38, 22, '/media/participants/IMG483764393.jpg', 0, '2016-07-13 13:33:33'),
(39, 23, '/media/participants/IMG353726019.jpg', 1, '2016-07-14 02:16:16'),
(40, 23, '/media/participants/IMG932873675.jpg', 0, '2016-07-13 13:35:51'),
(41, 23, '/media/participants/IMG1703131908.jpg', 0, '2016-07-13 13:35:58'),
(42, 23, '/media/participants/IMG852923343.jpg', 0, '2016-07-13 13:36:04'),
(43, 24, '/media/participants/IMG744242889.jpg', 1, '2016-07-14 02:16:20'),
(44, 24, '/media/participants/IMG69602273.jpg', 0, '2016-07-13 13:39:59'),
(45, 24, '/media/participants/IMG1899294012.jpg', 0, '2016-07-13 13:40:05'),
(46, 24, '/media/participants/IMG797119073.jpg', 0, '2016-07-13 13:40:11');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE IF NOT EXISTS `participants` (
`entity_id` tinyint(4) NOT NULL,
  `participant_id` int(9) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `height` varchar(5) NOT NULL,
  `about` varchar(500) NOT NULL,
  `birth_date` date NOT NULL,
  `address` mediumtext NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`entity_id`, `participant_id`, `first_name`, `last_name`, `age`, `height`, `about`, `birth_date`, `address`, `created_date`, `status`) VALUES
(19, 1, 'Gail', 'Ventic', 20, '5.5', 'GAIL studied BS Medical Technology from Angeles University Foundation. She is a registered medical laboratory scientist with a liking for literature. She enjoys writing poems and book reviews, and considers singing her strong suit. ', '0000-00-00', 'Angeles City, Pampanga', '2016-07-13 13:18:16', 1),
(20, 2, 'Alexandra Faith', 'Garcia', 22, '5.5 1', 'Alexandra Faith hails from Olongapo City. She finished Bachelor of Science in Tourism in 2013. She was part of a swimming team in college, which helped her earn a scholarship and finish her studies. She is a certified scuba diver and a triathlete. She placed second in Iron man last year.', '0000-00-00', 'Zambales', '2016-07-13 13:28:14', 1),
(21, 3, 'Angela Lauren', 'Fernando', 24, '5.5 1', 'Angela Lauren came from a family of doctors and graduated Doctor of Medicine at the University of Santo Tomas. She is currently a medical intern at Makati Medical Center and aspires to be a pediatrician or a surgeon someday. In her free time, she loves watching movies and hiking. Her recent hike was in Mt. Pinatubo. ', '0000-00-00', 'Lubao, Pampanga', '2016-07-13 13:29:50', 1),
(22, 4, 'Kimberle Mae Licao', 'Penchon', 23, '5.5 1', 'Kimberle Mae is a member of a non-governmental organization called WCARP where she got to joyfully participate in feeding programs, orphanage visitations, and medical missions in Baguio city. ', '0000-00-00', 'Cordillera', '2016-07-13 13:32:03', 1),
(23, 5, 'Riana Agatha', 'Pangindian', 19, '5.6', 'Riana Agatha is a food and dog lover. She is a 2nd year student in University of Santo Tomas taking up Secondary Education Major in Biological Science. She loves baking and wants to teach Biology to High School students in the future. ', '0000-00-00', 'Pasig City', '2016-07-13 13:35:00', 1),
(24, 6, 'Candy', 'Del Castillo', 21, '5.6 1', 'Candy teaches Filipino language to elementary students from grades 1 to 3 in Integrated School of Montessori in Bulacan. She loves to dance and is a proud breadwinner of the family. ', '0000-00-00', 'Bocaue, Bulacan', '2016-07-13 13:39:22', 1);

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
-- Indexes for table `media`
--
ALTER TABLE `media`
 ADD PRIMARY KEY (`entity_id`);

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
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
MODIFY `entity_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
MODIFY `entity_id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
