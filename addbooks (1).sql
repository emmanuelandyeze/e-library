-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2019 at 02:08 PM
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
-- Table structure for table `addbooks`
--

CREATE TABLE IF NOT EXISTS `addbooks` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `books_name` varchar(50) NOT NULL,
  `books_image` varchar(500) NOT NULL,
  `books_author_name` varchar(50) NOT NULL,
  `books_publication_name` varchar(50) NOT NULL,
  `books_purchase_date` varchar(50) NOT NULL,
  `books_price` varchar(50) NOT NULL,
  `books_qty` varchar(50) NOT NULL,
  `available_qty` varchar(50) NOT NULL,
  `librarian_username` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `addbooks`
--

INSERT INTO `addbooks` (`id`, `books_name`, `books_image`, `books_author_name`, `books_publication_name`, `books_purchase_date`, `books_price`, `books_qty`, `available_qty`, `librarian_username`) VALUES
(15, 'maths', 'books_image/b31d8ee731165597a33b25747f75d0c5Screenshot (9).png', 'olalekan', 'olalekan', '1992-10-10', '5000', '50', '49', ' daniel'),
(14, 'dan', 'books_image/efa6ec4d4d81ebc64dd42870f253283aScreenshot (11).png', 'nn', '  jjj', 'jj', '5000', '50', '50', ' daniel'),
(12, 'maths', 'books_image/303d5e14fb4f8c75ab17b38a980913c8IMG-20180326-WA0003_1.jpg', 'daniel', 'daniel', '1997-10-10', '5000', '50', '49', ' daniel'),
(13, 'nn', 'books_image/7d6c2261c434c7ec40c991cde11b054eScreenshot (9).png', 'daniel', 'daniel', '1997-10-10', '5000', '50', '50', ' daniel'),
(8, 'chemistry', 'books_image/8fd50ea62de95db52f9aaff532ff721bScreenshot (5).png', 'dhannisconiel', 'isbn2019', '20-05-1997', '#5 000', '50', '40', ' dhannisconiel'),
(17, '', 'books_image/3368e98ffd43edd30c9ff458918e480fScreenshot (10).png', '', '', '', '', '', '1', ' '),
(18, 'maths', 'books_image/ccd5cf0745256d133bba6aa32d9f2e00IMG_20180403_113510.jpg', 'nn', 'daniel', '1997-10-10', '5000', '50', '49', ' daniel'),
(19, 'maths', 'books_image/4417f9a9c6b1f6a451e2a53cb85a9e91IMG_20180403_113510.jpg', 'nn', 'daniel', '1997-10-10', '5000', '50', '49', ' daniel');
