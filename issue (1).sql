-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2019 at 02:09 PM
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
-- Table structure for table `issue`
--

CREATE TABLE IF NOT EXISTS `issue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricnumber` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `bookname` varchar(50) NOT NULL,
  `issuedate` varchar(50) NOT NULL,
  `returndate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `matricnumber`, `surname`, `phonenumber`, `course`, `level`, `bookname`, `issuedate`, `returndate`) VALUES
(1, 'ibe', 'ibezim', '765432', 'Hospitality mangement', 'ND 2', 'booksname', 'Tue-Sep-2018', '17-04-19'),
(2, 'ibe', 'ibezim', '765432', 'Hospitality mangement', 'HND 1', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(3, 'ibe', 'ibezim', '765432', 'Computer sci', 'HND 2', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(4, 'ibe', 'ibezim', '765432', 'Computer sci', 'HND 2', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(5, 'ibe', 'ibezim', '765432', 'Food tech', 'HND 1', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(6, 'ibe', 'ibezim', '765432', 'Food tech', 'ND 2', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(7, 'ibe', 'ibezim', '765432', 'Computer sci', 'HND 2', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(8, 'kjhgfd', 'FOLAJI', '765432', 'Hospitality mangement', 'HND 1', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(9, 'kjhgfd', 'FOLAJI', '765432', 'Hospitality mangement', 'HND 2', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(10, 'kjhgfd', 'FOLAJI', '765432', 'Computer sci', 'HND 1', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(11, 'nncnn', 'ibezim', '777', 'Computer sci', 'HND 1', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(12, 'nncnn', 'ibezim', '777', 'Computer sci', 'HND 1', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(13, 'nncnn', 'ibezim', '777', 'Computer sci', 'ND 1', 'chemistry', 'Tue-Sep-2018', '17-04-19'),
(14, 'ibe', 'ibezim', '765432', 'Hospitality mangement', 'ND 2', 'computer sci', 'Wed-Sep-2018', '17-04-19'),
(15, 'p/nd/15/3210057', 'ibezim', '080890138', 'Food tech', 'HND 2', 'biology', 'Fri-Sep-2018', '17-04-19'),
(16, 'p/nd/15/3210057', 'ibezim', '080890138', 'Food tech', 'HND 1', 'chemistry', '02-Nov-2018', '17-04-19'),
(17, 'P/nd/15/3210057 ', 'Ibezim ', '08089089138 ', 'Food tech', 'HND 1', 'chemistry', '15-Nov-2018', '17-04-19'),
(18, 'P/nd/15/3210057 ', 'Ibezim ', '08089089138 ', 'Food tech', 'ND 2', 'maths', '17-Apr-2019', '17-04-19');
