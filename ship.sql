-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2023 at 05:01 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ship`
--

-- --------------------------------------------------------

--
-- Table structure for table `shipdetails`
--

CREATE TABLE IF NOT EXISTS `shipdetails` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `Shipnum` varchar(100) NOT NULL,
  `Shipname` varchar(100) NOT NULL,
  `latitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL,
  `Sdate` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shipdetails`
--

INSERT INTO `shipdetails` (`id`, `Shipnum`, `Shipname`, `latitude`, `longitude`, `Sdate`) VALUES
(2, '1212', 'indian dolpin', '11.422005000000002', '76.08409499999999', '22/2/2022'),
(3, '1213', 'USA', '11.545434342', '76.45283434374', '22/2/2022'),
(4, '1214', 'ss', '11.147887', '75.001276', '22/2/23');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(100) NOT NULL,
  `Uid` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `Uid`, `Pwd`, `email_id`, `address`, `mobile`) VALUES
('ss', 'ss', 'ss', 'ss@gmil.com', 'cbe', '900');
