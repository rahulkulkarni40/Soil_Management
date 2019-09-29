
-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 04:51 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

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
-- Table structure for table `alog`
--

CREATE TABLE IF NOT EXISTS `alog` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alog`
--

INSERT INTO `alog` (`username`, `password`, `id`, `email`, `contact`) VALUES
('cha', 'lp', '211', 'log@gmail.com', '2147483647');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE IF NOT EXISTS `form` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(80) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `formerid` varchar(30) NOT NULL,
  PRIMARY KEY (`formerid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`firstname`, `lastname`, `address`, `contact`, `email`, `password`, `formerid`) VALUES
('kumar', 'm k', 'bangalore', '12345321', 'kumar@gmail.com', '123', 'f004');

-- --------------------------------------------------------

--
-- Table structure for table `menure`
--

CREATE TABLE IF NOT EXISTS `menure` (
  `cropname` varchar(30) NOT NULL,
  `p` varchar(30) NOT NULL,
  `menurename` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `menurename1` varchar(30) NOT NULL,
  `quantity1` varchar(30) NOT NULL,
  `m` varchar(30) NOT NULL,
  `menurename2` varchar(30) NOT NULL,
  `quantity2` varchar(30) NOT NULL,
  `menurename3` varchar(30) NOT NULL,
  `quantity3` varchar(30) NOT NULL,
  PRIMARY KEY (`cropname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menure`
--

INSERT INTO `menure` (`cropname`, `p`, `menurename`, `quantity`, `menurename1`, `quantity1`, `m`, `menurename2`, `quantity2`, `menurename3`, `quantity3`) VALUES
('paddy', 'plantation', 'compost', '2 tune', 'DAP and urea(nitrogen(46%))', '150 kg', 'After one month', 'urea', '100 kg', 'potash', '50 kg'),
('r', 'day', 'ra', '5', 'hh', '7', 'hhh', '77', '777', 'hhhjj', '7'),
('ragi', 'plantation', 'compost', '1 tune', 'complex(17 17 17) ', '100kgs', 'After one month', 'urea', '50 kg', 'complex', '50kg'),
('tomato', 'plantation', 'compost', '1 tune', 'complex(17 17 17) ', '150 kg', 'After one month', 'complex(10 26 26)nitrogen mix', '150 kg', 'complex and potash', '150kg');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE IF NOT EXISTS `response` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `farmer` varchar(20) NOT NULL,
  `shopkeep` varchar(20) NOT NULL,
  `response` text NOT NULL,
  `request` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id`, `farmer`, `shopkeep`, `response`, `request`) VALUES
(1, 'f0001', 's000', '', 'water'),
(2, 'f0001', 's001', '10 mins', 'soil'),
(3, 'f001', 's001', '2 hrs', 'water'),
(4, 'f001', 's001', 'no supply', 'water');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `shopid` varchar(10) NOT NULL,
  PRIMARY KEY (`shopid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`firstname`, `lastname`, `address`, `contact`, `email`, `password`, `shopid`) VALUES
('Rahul', 'Kulkarni', 'jjsjsjsjs', '1111111111', 'rahulknakananak@gmail.com', '1', '111'),
('chaaadad', 'doiandoiad', 'mbl', '2147483647', 'asdadad@gmail.com', '123', 's001');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
