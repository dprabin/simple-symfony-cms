-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Feb 25, 2015 at 01:18 AM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `symfonycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
`id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`id`, `name`) VALUES
(1, 'Fundamentals of Public Administration'),
(2, 'Development Administration'),
(3, 'Public Policy'),
(4, 'Research Methodology');

-- --------------------------------------------------------

--
-- Table structure for table `Page`
--

CREATE TABLE `Page` (
`id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Page`
--

INSERT INTO `Page` (`id`, `category_id`, `title`, `content`) VALUES
(1, 1, 'New Public Management', 'New Public Management theory is the modern theory of Public Administration. It presents new idea rather than the old one.'),
(2, 4, 'Mean Median and Mode', 'Mean, Median and Mode are the basic elements of descriptive statistics, very useful in research. All other analysis builds upon these concepts. \r\n\r\nTo calculate mean, add all the values and divide by total number of responses. This represents the central value of the data.');

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
`id` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `username`, `password`) VALUES
(1, 'amritms', '$2y$10$adir60MygBPCf4KBdMEdk.vJvkVTknOim1whL7u5FJ3M2WKZ2GGd6'),
(2, 'ramkaji', '$2y$10$ySvf1i8OPG/O2ggD/GjllutHav9sdL0oIK8mEbmysDFCRiUbDPHiO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Page`
--
ALTER TABLE `Page`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_B438191E12469DE2` (`category_id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Page`
--
ALTER TABLE `Page`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Page`
--
ALTER TABLE `Page`
ADD CONSTRAINT `FK_B438191E12469DE2` FOREIGN KEY (`category_id`) REFERENCES `Category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
