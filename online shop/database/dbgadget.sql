-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2015 at 07:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbgadget`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Product` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`) VALUES
(1, 'Laptops'),
(2, 'Computer Set'),
(3, 'Hard Disk'),
(4, 'CCTV'),
(5, 'Mouse'),
(6, 'Keyboard'),
(11, 'Memory');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `item` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `dateOrdered` varchar(100) NOT NULL,
  `dateDelivered` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `contact`, `address`, `email`, `item`, `amount`, `status`, `dateOrdered`, `dateDelivered`) VALUES
(1, 'Jimmy Lomocso', '09465795229', '049, Maracas, Lahug, Cebu City', 'jimmy.lomocso@gmail.com', '(2) Product 101, (1) Product 101, ', '600', 'confirmed', '09/23/14', '10/04/14'),
(2, 'a a', '09465795229', '049, Maracas, Lahug, Cebu City', 'jimmy.lomocso@gmail.com', '(1) Product 202, ', '100', 'confirmed', '10/03/14', '10/04/14'),
(3, 'Jimmy Lomocso', '09465795229', '049, Maracas, Lahug, Cebu City', 'jimmy.lomocso@gmail.com', '(10) wer, (10) Product 101, ', '300', 'confirmed', '10/03/14', '10/04/14 08:04:28 AM'),
(4, 'John Doe', '09465795229', '049, Maracas, Lahug, Cebu City', 'rjcantos_16@yahoo.com', '(5) Product 202, ', '100', 'confirmed', '10/04/14 12:02:57 AM', '10/04/14 09:31:08 PM'),
(5, 'Peter Paul Segura', '256-2842 / 233-6066', '049, Maracas, Lahug, Cebu City', 'deewylperez_03@yahoo.com', '(3) Product 202, (1) Product 202, ', '200', 'confirmed', '10/04/14 08:05:35 AM', '10/04/14 08:15:25 AM'),
(6, 'sdf sdf', '33', 'sdfsdf', 'a@yahoo.com', '(1) Product 101, ', '300', 'confirmed', '10/04/14 09:23:34 PM', '10/04/14 09:31:04 PM'),
(7, 'sdf sdf', 'sd33', 'sdf', 'sdf@yahoo.com', '(1) Product 101, ', '0', 'confirmed', '10/06/14 11:15:59 AM', '06/14/15 09:52:56 AM'),
(8, 'sdf dsf', '33', 'dsfsdfsdf', 'a@yahoo.com', '(1) wer, ', '0', 'confirmed', '10/18/14 11:34:45 AM', '06/14/15 09:52:38 AM'),
(9, 'john hohn', '234', 'dsdfdg', 'a@yahoo.com', '(1) Product 202, ', '100', 'confirmed', '06/14/15 09:53:36 AM', '06/14/15 09:53:56 AM'),
(10, 'a a', 'e424', 'dsdfdg', 'a@yahoo.com', '(1) Product 202, (2) Product 101, ', '400.5', 'delivered', '06/14/15 10:02:11 AM', '06/14/15 10:02:52 AM');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `imgUrl` text NOT NULL,
  `Product` text NOT NULL,
  `Description` text NOT NULL,
  `Price` double NOT NULL,
  `Category` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `imgUrl`, `Product`, `Description`, `Price`, `Category`) VALUES
(80, 'Hydrangeas.jpg', 'Product 101', 'This is a sample description', 300.5, 'Hard Disk'),
(81, 'Penguins.jpg', 'wer', 'dsf', 3400, 'Keyboard'),
(82, 'C360_2014-07-23-12-19-43-367.jpg', 'Product 202', 'Quick description', 100, 'Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'administrator', 'bobby'),
(2, 'admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
