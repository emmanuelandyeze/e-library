-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2019 at 02:04 PM
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
(15, 'maths', 'books_image/b31d8ee731165597a33b25747f75d0c5Screenshot (9).png', 'olalekan', 'olalekan', '1992-10-10', '5000', '50', '45', ' daniel'),
(14, 'dan', 'books_image/efa6ec4d4d81ebc64dd42870f253283aScreenshot (11).png', 'nn', '  jjj', 'jj', '5000', '50', '50', ' daniel'),
(12, 'maths', 'books_image/303d5e14fb4f8c75ab17b38a980913c8IMG-20180326-WA0003_1.jpg', 'daniel', 'daniel', '1997-10-10', '5000', '50', '45', ' daniel'),
(13, 'nn', 'books_image/7d6c2261c434c7ec40c991cde11b054eScreenshot (9).png', 'daniel', 'daniel', '1997-10-10', '5000', '50', '50', ' daniel'),
(8, 'chemistry', 'books_image/8fd50ea62de95db52f9aaff532ff721bScreenshot (5).png', 'dhannisconiel', 'isbn2019', '20-05-1997', '#5 000', '50', '39', ' dhannisconiel'),
(17, '', 'books_image/3368e98ffd43edd30c9ff458918e480fScreenshot (10).png', '', '', '', '', '', '6', ' '),
(18, 'maths', 'books_image/ccd5cf0745256d133bba6aa32d9f2e00IMG_20180403_113510.jpg', 'nn', 'daniel', '1997-10-10', '5000', '50', '45', ' daniel'),
(19, 'maths', 'books_image/4417f9a9c6b1f6a451e2a53cb85a9e91IMG_20180403_113510.jpg', 'nn', 'daniel', '1997-10-10', '5000', '50', '45', ' daniel');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `msg` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=109 ;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `name`, `msg`, `date`) VALUES
(107, 'Ibezim  Daniel  Sconiel', 'Hello Sir??', '2019-10-28 14:10:10'),
(51, 'daniel', 'hello who is here??', '2018-11-21 07:40:54'),
(105, 'Admin', 'Hello', '2019-10-28 13:57:06'),
(104, 'daniel', 'djfj', '2019-10-28 13:43:52'),
(108, 'Admin', 'hello lamina?', '2019-11-19 10:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `detection`
--

CREATE TABLE IF NOT EXISTS `detection` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `card` int(20) NOT NULL,
  `expiry` date NOT NULL,
  `pin` int(20) NOT NULL,
  `ccv` int(10) NOT NULL,
  `bank` text NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `detection`
--

INSERT INTO `detection` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `card`, `expiry`, `pin`, `ccv`, `bank`, `country`) VALUES
(4, 'peace', 'Daniel', 'admin', '123', 'andiedaniel444@gmail.com', 123456789, '1997-07-13', 8421, 223, 'GT-Bank', 'GHANA'),
(3, 'peace', 'Daniel', 'admin', '123', 'andiedaniel444@gmail.com', 123456789, '1997-07-13', 8421, 223, 'GT-Bank', 'GHANA'),
(5, 'peace', 'Daniel', 'admin', '123', 'andiedaniel444@gmail.com', 123456789, '1997-07-13', 8421, 223, 'GT-Bank', 'GHANA'),
(6, 'peace', 'Daniel', 'admin', '123', 'andiedaniel444@gmail.com', 123456789, '1997-07-13', 8421, 223, 'GT-Bank', 'GHANA'),
(7, 'peace', 'Daniel', 'admin', '123', 'andiedaniel444@gmail.com', 123456789, '1997-07-13', 8421, 223, 'GT-Bank', 'GHANA'),
(8, 'peace', 'Daniel', 'admin', '123', 'andiedaniel444@gmail.com', 123456789, '1997-07-13', 8421, 223, 'GT-Bank', 'GHANA'),
(9, 'emeka', 'daniel', '75775378FJ', '123', 'andiedaniel444@gmail.com', 34, '2045-06-05', 444, 4455, 'GT-Bank', 'TOGO'),
(10, 'emma', 'femi', 'admin', '123', 'andiedaniel444@gmail.com', 123456789, '2020-07-12', 8421, 223, 'Firt Bank', 'GHANA'),
(11, 'femi', 'olumide', 'admin', '1234', 'olumide.kayode135@gmail.com', 123456787, '2019-10-13', 1234, 666, 'UBA', 'Nigeria'),
(12, 'femi', 'olumide', 'admin', '1234', 'andiedaniel444@gmail.com', 123456789, '2012-10-10', 1234, 234, 'UBA', 'Nigeria'),
(13, 'ajayi', 'deji', 'emmy', '7777', 'ajayiayodej44i@gmail.com', 2147483647, '0000-00-00', 5657, 432, 'Firt Bank', 'Nigeria'),
(14, 'komolafe ', 'sunday', 'infinityglory', 'infinity600', 'infinity20@gmail.com', 2147483647, '0000-00-00', 6666, 450, 'Zenith Bank', 'Nigeria'),
(15, 'DEJI', 'Ajayi', 'emmy', '1234', 'Adedejiajayi@rockectmail.com', 6666, '1992-07-13', 8888, 223, 'GT-Bank', 'Nigeria'),
(16, 'DEJI', 'Ajayi', 'emmy', '1234', 'Adedejiajayi@rockectmail.com', 2147483647, '0000-00-00', 2424, 540, 'UBA', 'Nigeria'),
(17, 'eben', 'john', 'infinitydo', 'infinity60', 'infinityglory1994@mail.com', 2147483647, '0000-00-00', 5555, 540, 'GT-Bank', 'Nigeria'),
(18, 'DEJI', 'Ajayi', 'emmy', '1234', 'Adedejiajayi@rockectmail.com', 2147483647, '1992-07-13', 223, 8888, 'UBA', 'Nigeria'),
(19, 'sunday', 'infinity', 'infinityglory', 'infinity', 'infinity20@gmail.com', 2147483647, '0000-00-00', 4444, 540, 'Zenith Bank', 'Russia'),
(20, 'sunday', 'joy', 'jude', '12345678', 'infinityglory1994@gmail.com', 2147483647, '0000-00-00', 5555, 440, 'GT-Bank', 'Nigeria'),
(21, 'adelaja', 'tosin', '12skip', 'skip', 'skip@gmail.com', 122478346, '2019-12-13', 2215, 21346, 'Fidelity Bank', 'Nigeria'),
(22, 'peace', 'daniel', 'admin', 'daniel', 'andiedaniel444@gmail.com', 0, '0000-00-00', 2, 2013, '8421', '');

-- --------------------------------------------------------

--
-- Table structure for table `detection2`
--

CREATE TABLE IF NOT EXISTS `detection2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `card` int(50) NOT NULL,
  `expiry` date NOT NULL,
  `pin` int(50) NOT NULL,
  `ccv` int(50) NOT NULL,
  `bank` text NOT NULL,
  `country` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `detection2`
--

INSERT INTO `detection2` (`id`, `firstname`, `lastname`, `username`, `password`, `email`, `card`, `expiry`, `pin`, `ccv`, `bank`, `country`) VALUES
(2, 'Biodun', 'Oyekan', 'BiodunOyekan', 'Oyekan', 'andiedaniel444@gmail.com', 45343, '0000-00-00', 134, 1234, '', 'Nigeria'),
(3, 'oyekan', 'Biodun', 'oyekanbiodun', '134', 'oyekan985@gmail.com', 1234, '0000-00-00', 1234, 1234, '', 'Nigeria'),
(4, 'Oyekan', 'Abideen', 'oyekan123', 'oyekan123', 'oyekan985@yahoomail.com', 2147483647, '0000-00-00', 1234, 1234, 'Firt Bank', 'Nigeria'),
(5, 'Oyekan', 'Abideen', 'oyekan123', 'oyekan123', 'oyekan985@yahoomail.com', 2147483647, '0000-00-00', 1234, 1234, 'Firt Bank', 'Nigeria'),
(6, 'oyekan', 'Biodun', 'biodun1234', '1234', 'oyekan985@yahoomail.com', 2147483647, '0000-00-00', 1234, 123, 'Firt Bank', 'Nigeria'),
(7, 'Oyekan', 'kayode', 'bkay', '1234', 'oyekan985@yahoomail.com', 2147483647, '0000-00-00', 1234, 356, 'Fidelity Bank', 'Nigeria'),
(8, 'Oyekan', 'abideen', 'oyekan123', '1234', 'oyekan985@yahoomail.com', 2147483647, '0000-00-00', 1234, 1234, 'Firt Bank', 'Nigeria'),
(9, 'biodun', 'abideen', 'admin', '1234', 'oyekan985@gmail.com', 2147483647, '0000-00-00', 1234, 1234, 'GT-Bank', 'Nigeria'),
(10, 'bayo', 'kayo', 'admin', '1234', 'oyekan985@gmail.com', 2147483647, '0000-00-00', 1234, 1234, 'GT-Bank', 'Nigeria'),
(11, 'ray', 'kay', 'raykay', '1234', 'oyekan985@gmail.com', 2147483647, '0000-00-00', 1111, 1111, 'Zenith Bank', 'Nigeria');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE IF NOT EXISTS `hostel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `books_image` varchar(500) NOT NULL,
  `surname` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `phonenumber` text NOT NULL,
  `matricnumber` varchar(500) NOT NULL,
  `email` text NOT NULL,
  `homeaddress` text NOT NULL,
  `sex` text NOT NULL,
  `parentname` text NOT NULL,
  `parentnumber` int(150) NOT NULL,
  `level` varchar(10) NOT NULL,
  `course` varchar(20) NOT NULL,
  `hostel` text NOT NULL,
  `room_number` int(200) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`id`, `books_image`, `surname`, `firstname`, `lastname`, `phonenumber`, `matricnumber`, `email`, `homeaddress`, `sex`, `parentname`, `parentnumber`, `level`, `course`, `hostel`, `room_number`, `status`) VALUES
(90, 'books_image/08ce1036e43f9b8ec6edbcf43ea065baIMG_20180403_113510.jpg', 'eke', 'peace', 'daniel', '34444', '', 'segalarry@', 'v', 'female', '0', 0, '', '', '', 0, 'no'),
(96, 'books_image/9793f205c09847b0b681ec986908a4faIMG_20181108_080559.jpg', 'eke', 'peace', 'daniel', '34444', '', 'segalarry@', 'm', 'female', '0', 4444, 'ND 1', 'Computer sci', 'Bakassi', 0, 'yes'),
(95, 'books_image/a2d2da6e966e34a980215121ae58d2b1IMG_20180403_121338.jpg', 'eke', 'peace', 'daniel', '34444', '', 'lindseydan', 'l', 'female', '0', 4444, '', '', '', 0, 'yes'),
(93, 'books_image/24d369ae21743c2809561d2588be9cc4IMG_20180403_113510.jpg', 'eke', 'peace', 'daniel', '34444', '', 'segalarry@', 'kk', 'female', '0', 0, '', '', '', 0, 'no'),
(94, 'books_image/2ec3ab23bf28722bca8b578003108538IMG_20180403_113510.jpg', 'eke', 'peace', 'daniel', '34444', '', 'segalarry@', 'kk', 'female', '0', 0, '', '', '', 0, 'no'),
(91, 'books_image/6f69cf5bce80416946431bacd321b2e1IMG_20180403_113510.jpg', 'eke', 'peace', 'daniel', '34444', '', 'segalarry@', 'v', 'female', '0', 0, '', '', '', 0, 'no'),
(92, 'books_image/079ace19c951a1eed00fe9a7282eff7fIMG_20180403_113510.jpg', 'eke', 'peace', 'daniel', '34444', '', 'segalarry@', 'kk', 'female', '0', 0, '', '', '', 0, 'no'),
(97, 'books_image/4d8cf684d0b4e7d2245936bde59a88feIMG_20181212_130735.jpg', 'eke', 'sconiel', 'sconiel', '1234', 'me', 'segalarry@', '', '', '0', 0, 'ND 1', 'Computer sci', 'Akata', 0, 'no'),
(101, 'books_image/35f7171c5273a02eee948d6b49936a92IMG_20181127_134435.jpg', 'ibezim', 'daniel', 'emeka', '080900909090', 'p/nd/15/3210057', 'andiedaniel444@gmail.com', '7,oluwakemi strt', 'male', 'mr edward and mrs mercy', 80890138, 'ND 2', 'Computer sci', 'Akata', 63, 'yes'),
(104, 'books_image/2cd0cf8919414ea39abf9cc5b55702b0lamina.JPG', 'toyin', 'esther', 'olawoyin', '080900909090', 'p/nd/15/3210056', 'dhannisconiel1@yahoo.com', '9,oyes street', 'female', 'mr and mrs olawoyin', 808908656, 'ND 2', 'Computer sci', 'Bakassi', 78, 'yes'),
(105, 'books_image/ee7b0f244a82a8410bd4b597c2a94c6eWIN_20181212_14_34_23_Pro.jpg', 'eke', 'peace', 'Daniel', '080900909090', 'bbb', 'andiedaniel444@gmail.com', '.,m', 'female', 'ddd', 4444, 'ND 1', 'Computer sci', 'HollyWood', 59, 'no'),
(106, 'books_image/f03f0b781c9df790d0fefa56e2007a67WIN_20181212_14_34_23_Pro.jpg', 'eke', 'Andie', 'Daniel', '080900909090', 'p/nd/15/3210057', 'kefdron01@gmail.com', 'kjhg', 'female', '4444', 0, 'ND 2', 'Computer sci', 'New hall', 24, 'no');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `matricnumber`, `surname`, `phonenumber`, `course`, `level`, `bookname`, `issuedate`, `returndate`) VALUES
(23, 'P/nd/15/3210057 ', 'Ibezim ', '08089089138 ', 'Food tech', 'ND 2', 'maths', '2019-11-04', '2019-11-07'),
(22, 'ibe', 'ibezim', '765432', 'Food tech', 'HND 2', 'maths', '2019-11-04', '2019-10-09'),
(21, 'P/nd/15/3210057 ', 'Ibezim ', '08089089138 ', 'Food tech', 'HND 1', 'chemistry', '2019-11-04', '2019-12-02');

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE IF NOT EXISTS `librarian` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `librarian`
--

INSERT INTO `librarian` (`id`, `username`, `password`, `contact`, `email`) VALUES
(1, 'admin', '1', '08089089138', 'andie@yahoo.com');

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

-- --------------------------------------------------------

--
-- Table structure for table `studentchats`
--

CREATE TABLE IF NOT EXISTS `studentchats` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `msg` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `studentchats`
--

INSERT INTO `studentchats` (`id`, `name`, `msg`, `date`) VALUES
(1, 'Ibezim  Daniel  Sconiel', 'vvvv', '2019-10-30 16:00:59'),
(2, 'Ibezim  Daniel  Sconiel', 'hello sir?', '2019-10-30 16:01:04'),
(3, 'FOLAJI RICHARD nddndn', 'Hello Daniel??', '2019-10-30 16:09:33'),
(4, 'Ibezim  Daniel  Sconiel', 'Folaji... Am okay you??', '2019-10-30 16:09:48'),
(5, 'Ibezim  Daniel  Sconiel', 'Hello ??\r\nwho''s here???\r\n', '2019-11-04 12:58:41'),
(6, 'FOLAJI RICHARD nddndn', 'Hello Daniel,,', '2019-11-04 12:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `password`) VALUES
(8, 'd', 'd');
