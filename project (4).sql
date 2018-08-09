-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 12:54 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `ID` int(5) NOT NULL,
  `NAME` varchar(35) NOT NULL,
  `EMAIL` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`ID`, `NAME`, `EMAIL`) VALUES
(1, 'PUNAM', 'punam@gmail.com'),
(1, 'GEETHU S.', 'geethu@gmail.com'),
(3, 'abc', 'abc@gma.coj'),
(3, 'bcdb', 'bcdb@nisda.asdjia'),
(4, 'MAHESH', 'mahesh@gmail.com'),
(4, 'MUKUND', 'mukund.bankar@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `ID` int(11) NOT NULL,
  `PRESENTATION` int(11) NOT NULL,
  `EFFECTIVENESS` int(11) NOT NULL,
  `SOCIAL_USE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`ID`, `PRESENTATION`, `EFFECTIVENESS`, `SOCIAL_USE`, `TOTAL`) VALUES
(1, 20, 25, 24, 69),
(3, 21, 24, 20, 65),
(4, 20, 25, 25, 70);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `TOPIC` varchar(50) DEFAULT NULL,
  `STAFF_ID` int(50) DEFAULT NULL,
  `START_DATE` datetime DEFAULT NULL,
  `ESTIMATION_COST` int(11) DEFAULT NULL,
  `STATUS` int(1) NOT NULL DEFAULT '0',
  `ACTUAL_COST` int(11) DEFAULT NULL,
  `END_DATE` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`ID`, `TOPIC`, `STAFF_ID`, `START_DATE`, `ESTIMATION_COST`, `STATUS`, `ACTUAL_COST`, `END_DATE`) VALUES
(1, 'GAME DEVELOPMENT', 1, '2017-10-22 00:00:00', 60000, 1, 50000, '2017-10-22 00:00:00'),
(2, 'Virtual Reality', 1, '2017-10-22 21:31:54', 50000, 0, NULL, NULL),
(3, 'PUNAM', 3, '2017-10-23 09:55:01', 46135, 1, 495136, '2017-10-23 09:55:45'),
(4, 'PROJECT 1', 4, '2017-10-23 12:56:39', 9000, 1, 5000, '2017-10-23 12:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `password` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `password`, `name`, `email`) VALUES
(1, '12345', 'MUKUND', 'mukund.bankar@gmail.'),
(2, '123456', 'PUNAM', 'admin@gma.cikaos'),
(3, '12345', 'MAHESH', 'mahesh@gmail.com'),
(4, '12345', 'Geethu S.', 'geethus@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
