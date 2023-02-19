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
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `susername` varchar(50) NOT NULL,
  `dusername` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL,
  `read1` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `susername`, `dusername`, `title`, `msg`, `read1`) VALUES
(1, 'ibe', 'FOLAJI', 'Hello', 'Pls submit your Books', 'y'),
(2, 'ibe', 'FOLAJI', 'Hello', 'sdsfghgn', 'y'),
(3, 'ibe', 'ibezim', 'Books Update', 'new books have arrived', 'y'),
(4, 'ibe', 'ibezim', 'New Message', 'Welcome New User', 'n'),
(5, '', 'ibezim', 'New Message', 'hello', 'y'),
(23, 'p/nd/15/3210057', '', 'hello', 'hello welcome', 'y'),
(22, 'p/nd/15/3210057', '', 'YABATECH HOSTEL', 'Hello students... always care your hostel along with you any time you out of the hostel', 'y');
