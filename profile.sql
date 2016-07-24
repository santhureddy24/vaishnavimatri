-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2016 at 08:20 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gender` varchar(10) NOT NULL,
  `email` varchar(35) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `postedby` varchar(20) NOT NULL,
  `edob` date NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `mothertongue` varchar(30) NOT NULL,
  `residing` varchar(25) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `maritalstatus` varchar(20) NOT NULL,
  `complexion` varchar(10) NOT NULL,
  `phisicallychallenged` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `borncitizenship` varchar(50) NOT NULL,
  `educationcategory` varchar(25) NOT NULL,
  `specialization` varchar(25) NOT NULL,
  `employedin` varchar(30) NOT NULL,
  `professiongroup` varchar(30) NOT NULL,
  `profession` varchar(25) NOT NULL,
  `companyname` varchar(50) NOT NULL,
  `monthlysalary` int(10) NOT NULL,
  `state` varchar(30) NOT NULL,
  `district` varchar(35) NOT NULL,
  `city` varchar(35) NOT NULL,
  `fathername` varchar(35) NOT NULL,
  `fathereducation` varchar(40) NOT NULL,
  `fatherprofession` varchar(40) NOT NULL,
  `mothername` varchar(30) NOT NULL,
  `mothereducation` varchar(40) NOT NULL,
  `motherprofession` varchar(30) NOT NULL,
  `fathernative` varchar(30) NOT NULL,
  `mothernative` varchar(30) NOT NULL,
  `brothers` int(2) NOT NULL,
  `sisters` int(2) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`pid`, `gender`, `email`, `firstname`, `lastname`, `postedby`, `edob`, `religion`, `caste`, `mothertongue`, `residing`, `mobileno`, `phoneno`, `maritalstatus`, `complexion`, `phisicallychallenged`, `height`, `borncitizenship`, `educationcategory`, `specialization`, `employedin`, `professiongroup`, `profession`, `companyname`, `monthlysalary`, `state`, `district`, `city`, `fathername`, `fathereducation`, `fatherprofession`, `mothername`, `mothereducation`, `motherprofession`, `fathernative`, `mothernative`, `brothers`, `sisters`) VALUES
(1, '', 'sathish1993@gmail.com', 'sathish', 'kumar', 'self', '2016-07-07', 'hindu', 'devar', 'tamil', 'india', 2147483647, 0, 'single', 'fair', 'no', '5ft 3in', 'india', 'master of science', 'computer science', 'Central Government', 'IT and technology', 'software engineer', 'infokites', 10000, 'tamilnadu', 'chennai', 'pallavaram', 'malairaj', '10th', 'driver', 'selvi', '12th', 'house wife', 'karaikudi', 'vetriyur', 0, 0),
(2, '', 'kumar@gmail.com', 'kumar', 'raj', 'father', '2016-07-06', 'hindu', 'konar', 'kannada', 'india', 2147483647, 0, 'Divorced', 'whitish', 'no', '4ft 3in', 'india', 'master of arts', 'history', 'private sector', 'teching', 'trainer', 'kekran macran', 20000, 'kartanataka', 'kadappa', 'nellur', 'raj', 'master of science', 'lecture', 'priya', '10th', 'house wife', 'sellur', 'nellur', 2, 0),
(5, 'male', 'hggv-', '', '', 'Select', '0000-00-00', '', 'Select', 'Select', '', 0, 0, 'Select', 'VERY_FAIR', 'NONE', 'Select', 'SLIM', 'SLIM', '', 'Select', 'Select your Occupation', 'SLIM', 'SLIM', 0, 'Select', 'SLIM', 'SLIM', '', 'SLIM', 'SLIM', '', 'SLIM', 'SLIM', 'SLIM', 'SLIM', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
