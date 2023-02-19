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
-- Table structure for table `library`
--

CREATE TABLE IF NOT EXISTS `library` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `surname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `matricnumber` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `homeaddress` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `surname`, `firstname`, `lastname`, `matricnumber`, `phonenumber`, `sex`, `course`, `level`, `homeaddress`, `email`, `status`) VALUES
(1, 'FOLAJI', 'RICHARD', 'nddndn', 'ibe', '08089011345', 'male', 'Computer sci', 'ND 2', 'jggh', 'andiedaniel444@gamil.com', 'yes'),
(2, 'FOLAJI', 'RICHARD', 'mnbgf', 'kjhgfd', '765432', 'male', 'Hospitality mangement', 'ND 1', '[;lkjhgfd', 'g2@yahoo.com', 'yes'),
(3, 'FOLAJI', 'RICHARD', 'mnbgf', 'kjhgfd', '765432', 'male', 'Hospitality mangement', 'ND 1', '[;lkjhgfd', 'g2@yahoo.com', 'yes'),
(4, 'ibezim', 'shdh', 'jdd', 'nncnn', '777', 'female', 'Hospitality mangement', 'ND 2', 'nnnn', 'andiedaniel444@gamil.com', 'yes'),
(5, '', '', '', '', '', '', '', '', '', '', 'yes'),
(6, 'ibezim', 'issue', 'jdd', 'ibe', '08089011345', 'female', 'Hospitality mangement', 'ND 2', 'mmdm', 'gz2@yahoo.com', 'no'),
(7, 'ibezim', 'shdh', 'nddndn', 'ibe', '765432', 'female', 'Hospitality mangement', 'ND 2', 'sd', 'andiedaniel444@gamil.com', 'no'),
(10, 'ibezim', 'daniel', 'emeka', 'p/nd/15/3210057', '080900909090', 'male', 'Computer sci', 'ND 2', '6, oyegoke strt..', 'dhannisconiel1@yahoo.com', 'no'),
(9, 'ibezim', 'daniel', 'emeka', 'p/nd/15/3210057', '080890138', 'male', 'Computer sci', 'HND 1', '6,oyegoke strt osodi', 'andiedaniel444@gamil.com', 'no'),
(11, 'ibe', 'Andie', 'daniel', 'f/nd', '080900909090', 'male', 'Food tech', 'HND 1', 'skskskk', 'lindseydaniel444@gmail.com', 'no'),
(12, 'Ibezim ', 'Daniel ', 'Sconiel', 'P/nd/15/3210057 ', '08089089138 ', 'male', 'Food tech', 'ND 2', '6,747 dhdhdh', 'andiedaniel444@gmail.com', 'yes');
