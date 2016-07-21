-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 20, 2016 at 03:36 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimony`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderfood`
--

CREATE TABLE IF NOT EXISTS `orderfood` (
  `Pid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `edob` date NOT NULL,
  `Caste` varchar(30) NOT NULL,
  `SubCaste` varchar(20) NOT NULL,
  `Height` varchar(50) NOT NULL,
  `Specialcase` varchar(50) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `Mothertongue` varchar(50) NOT NULL,
  `Maritalstatus` varchar(100) NOT NULL,
  `Smoking` varchar(20) NOT NULL,
  `Drinking` varchar(25) NOT NULL,
  `habits` varchar(50) NOT NULL,
  `Complexion` varchar(50) NOT NULL,
  `Bodytype` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `Employedin` varchar(50) NOT NULL,
  `Occupation` varchar(50) NOT NULL,
  `AnnualIncome` varchar(50) NOT NULL,
  `CountryPresidence` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `Aboutme` varchar(100) NOT NULL,
  PRIMARY KEY (`Pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `orderfood`
--

INSERT INTO `orderfood` (`Pid`, `name`, `sex`, `edob`, `Caste`, `SubCaste`, `Height`, `Specialcase`, `Religion`, `Mothertongue`, `Maritalstatus`, `Smoking`, `Drinking`, `habits`, `Complexion`, `Bodytype`, `qualification`, `Employedin`, `Occupation`, `AnnualIncome`, `CountryPresidence`, `state`, `Aboutme`) VALUES
(8, 'thomas', 'male', '0000-00-00', 'BC', 'MARATHI', 'FT4_IN10', 'NONE', 'MUSL', 'TELUGU', 'ANNULED', 'YES', 'YES', 'NON_VEGETARIAN', 'VERY_FAIR', 'SLIM', 'PHDD', 'MNC', 'DEFE', '', 'INDI', 'DELH', 'i am good'),
(9, 'sathish', 'male', '0000-00-00', 'TAMIL', 'PUNJABI', 'FT5_IN0', 'NONE', 'JAIN', 'ORIYA', 'ANNULED', 'YES', 'Occasionally', 'NON_VEGETARIAN', 'VERY_FAIR', 'SLIM', 'INTE', 'CENTRAL_GOVERNMENT', 'BEAU', 'INR_UNDER_500000', 'INDI', 'CHAN', 'sathish');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
