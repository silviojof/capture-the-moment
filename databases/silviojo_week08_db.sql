-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 03, 2017 at 08:08 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `silviojo_week08_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `testimonial_tb`
--

CREATE TABLE IF NOT EXISTS `testimonial_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `company` varchar(40) NOT NULL,
  `position` varchar(40) NOT NULL,
  `testimonial` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial_tb`
--

INSERT INTO `testimonial_tb` (`id`, `name`, `gender`, `company`, `position`, `testimonial`) VALUES
(6, 'Silvio Oliveira', 0, 'HSM', 'Manager', 'Sed vitae magna pellentesque, aliquam neque ac, blandit ligula. Duis lacinia molestie sapien sit amet iaculis. Mauris eleifend, augue non bibendum sagittis, quam nisl posuere nibh, non tincidunt turp.'),
(5, 'Silvana', 1, 'Vanarts', 'Student', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed est eu lacus pulvinar ultrices eget eu massa. Nulla euismod vehicula pretium.'),
(7, 'James Finn', 0, 'Vanarts', 'Teacher', 'Ac, blandit ligula. Duis lacinia molestie sapien sit amet iaculis. Mauris eleifend, augue non bibendum sagittis, quam nisl posuere nibh, non tincidunt turpi.'),
(8, 'Mary Johnson', 1, 'Deloitte', 'Accountant', 'A pellentesque, aliquam neque ac, blandit ligula. Duis lacinia molestie sapien sit amet iaculis. Mauris eleifend, augue non bibendum sagittis, quam nisl.'),
(9, 'Tomas Bach', 0, 'FIFA', 'President', 'Magna pellentesque, aliquam neque ac, blandit ligula. Duis lacinia molestie sapien sit amet sagittis, quam nisl posuere nibh, non tincidunt turpi.'),
(10, 'James Bond', 0, 'England Government', 'Spy', 'Morbi varius euismod faucibus. Nunc rutrum ex sed ullamcorper posuere. Vivamus posuere suscipit lobortis. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `testimonial_tb`
--
ALTER TABLE `testimonial_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `testimonial_tb`
--
ALTER TABLE `testimonial_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
