-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2016 at 08:38 AM
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
-- Table structure for table `create_profile`
--

CREATE TABLE IF NOT EXISTS `create_profile` (
  `pid` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
  `matrialstatus` varchar(20) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `create_profile`
--

INSERT INTO `create_profile` (`pid`, `email`, `firstname`, `lastname`, `postedby`, `edob`, `religion`, `caste`, `mothertongue`, `residing`, `mobileno`, `matrialstatus`, `complexion`, `phisicallychallenged`, `height`, `borncitizenship`, `educationcategory`, `specialization`, `employedin`, `professiongroup`, `profession`, `companyname`, `monthlysalary`, `state`, `district`, `city`, `fathername`, `fathereducation`, `fatherprofession`, `mothername`, `mothereducation`, `motherprofession`, `fathernative`, `mothernative`, `brothers`, `sisters`) VALUES
(1, 'sathish1993@gmail.com', 'sathish', 'kumar', 'self', '2016-07-07', 'hindu', 'devar', 'tamil', 'india', 2147483647, 'single', 'fair', 'no', '5ft 3in', 'india', 'master of science', 'computer science', 'Central Government', 'IT and technology', 'software engineer', 'infokites', 10000, 'tamilnadu', 'chennai', 'pallavaram', 'malairaj', '10th', 'driver', 'selvi', '12th', 'house wife', 'karaikudi', 'vetriyur', 0, 0),
(2, 'kumar@gmail.com', 'kumar', 'raj', 'father', '2016-07-06', 'hindu', 'konar', 'kannada', 'india', 2147483647, 'Divorced', 'whitish', 'no', '4ft 3in', 'india', 'master of arts', 'history', 'private sector', 'teching', 'trainer', 'kekran macran', 20000, 'kartanataka', 'kadappa', 'nellur', 'raj', 'master of science', 'lecture', 'priya', '10th', 'house wife', 'sellur', 'nellur', 2, 0),
(3, 'vijayfan@gmail.com', 'vijay', 'joseph', 'mother', '2016-07-12', 'christian', 'roman catholic', 'andra ', 'america', 2147483647, 'married', 'fair', 'no', '5ft 4in', 'india', 'master of science', 'physics', 'business sector', 'cinema', 'actor', 'vijaytrust', 1000000, 'tamilnadu', 'chennai', 'chennai', 'sandrasekar', 'master of atrs', 'producer', 'divya', '10th', 'house wife', 'chennai', 'pallavaram', 0, 0),
(4, 'vijayfan@gmail.com', 'vijaya kumar', 'jos', 'mother', '2016-07-12', 'muslim', 'muslim ali', 'andra ', 'america', 2147483647, 'married', 'fair', 'no', '5ft 4in', 'india', 'master of science', 'physics', 'business sector', 'cinema', 'actor', 'vijaytrust', 1000000, 'tamilnadu', 'chennai', 'chennai', 'sandrasekar', 'master of atrs', 'producer', 'divya', '10th', 'house wife', 'chennai', 'pallavaram', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
