-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2019 at 02:11 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `android`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `read1` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `title`, `msg`, `read1`) VALUES
(1, 'hello', 'Welcome to Yabatech..', 'n'),
(2, 'hello', 'Welcome to Yabatech..', 'n'),
(3, 'hello', 'Welcome to Yabatech..', 'n'),
(4, 'hello', '1.Welcome to Yabatech..', 'n'),
(5, 'hello', 'welcome to Yabatech Hostel', 'n'),
(6, 'hello', 'welcome to Yabatech Hostel', 'n'),
(7, 'hello', 'welcome to Yabatech Hostel', 'n'),
(8, 'hello', 'welcome to Yabatech Hostel', 'n'),
(9, 'hello', 'welcome to Yabatech Hostel', 'n');
