-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2016 at 01:46 PM
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
  `pid` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `edob` date NOT NULL,
  `caste` varchar(30) NOT NULL,
  `height` varchar(50) NOT NULL,
  `specialcase` varchar(50) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `mothertongue` varchar(50) NOT NULL,
  `maritalstatus` varchar(100) NOT NULL,
  `smoking` varchar(20) NOT NULL,
  `drinking` varchar(25) NOT NULL,
  `habits` varchar(50) NOT NULL,
  `complexion` varchar(50) NOT NULL,
  `bodytype` varchar(50) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `employedin` varchar(50) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `annualincome` varchar(50) NOT NULL,
  `countrypresidence` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `aboutme` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
