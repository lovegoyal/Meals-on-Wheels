-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2018 at 04:35 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `meals`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartitem`
--

CREATE TABLE IF NOT EXISTS `cartitem` (
  `productname` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cartitem`
--

INSERT INTO `cartitem` (`productname`, `price`, `quantity`) VALUES
('arhar-dal', '70', 1),
('kadhi-chawal', '70', 1),
('moong-dal', '80', 1),
('rajma', '80', 1),
('burger', '40', 1),
('pani-puri', '20', 1),
('pizza', '150', 3),
('manchurian', '80', 1),
('chowmene', '90', 1),
('bread', '20', 1),
('moong-dal', '80', 1),
('ice-cream', '70', 1),
('bread', '20', 1),
('bread', '20', 7),
('burger', '40', 1),
('rajma', '80', 1),
('burger', '40', 1),
('ice-cream', '70', 1),
('burger', '40', 1),
('ice-cream', '70', 1),
('arhar-dal', '70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `grocery`
--

CREATE TABLE IF NOT EXISTS `grocery` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `productname` varchar(30) NOT NULL,
  `price` int(3) NOT NULL,
  `quantity` int(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `grocery`
--

INSERT INTO `grocery` (`id`, `productname`, `price`, `quantity`) VALUES
(1, 'arhar-dal', 70, 42),
(2, 'moong-dal', 80, 42),
(3, 'rajma', 80, 15),
(4, 'bread', 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `quantity` int(12) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `quantity`) VALUES
(1, 'manchurian', 80, 10),
(2, 'kadhi-chawal', 70, 10),
(3, 'chole-bhature', 80, 10),
(4, 'pizza', 150, 10),
(5, 'chowmene', 90, 10),
(6, 'pani-puri', 20, 10),
(7, 'burger', 40, 10),
(8, 'ice-cream', 70, 13);

-- --------------------------------------------------------

--
-- Table structure for table `websiteusers`
--

CREATE TABLE IF NOT EXISTS `websiteusers` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phonenumber` int(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

--
-- Dumping data for table `websiteusers`
--

INSERT INTO `websiteusers` (`userid`, `username`, `email`, `password`, `phonenumber`, `address`) VALUES
(131, 'ramyata', '', '12345', 0, ''),
(133, 'love', '', '12345', 0, ''),
(134, 'harkirat', '', '1', 0, ''),
(135, 'tnya', '', '1', 0, ''),
(136, 'love', '', '1', 0, '');
