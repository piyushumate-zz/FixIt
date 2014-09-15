-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 06, 2014 at 11:14 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `Area` varchar(25) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`Area`, `latitude`, `longitude`) VALUES
('Shivajinagar', 18.532945, 73.8422995),
('Kothrud', 18.5073559, 73.8046115),
('Katraj', 18.4437404, 73.8653874),
('Hadapsar', 18.497254, 73.9337744);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `name` varchar(30) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `id` int(10) NOT NULL,
  `category` varchar(20) NOT NULL,
  `phone` int(40) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`name`, `latitude`, `longitude`, `id`, `category`, `phone`, `email`) VALUES
('Kisan Ekbote', 18.529337, 73.832046, 1, 'plumber', 0, 'vsp2293@gmail.com'),
('Homecare Service', 18.5149325, 73.8346179, 2, 'plumber', 0, 'vsp2293@gmail.com'),
('Eros Furniture', 18.5346885, 73.8737769, 3, 'carpenter', 0, 'vsp2293@gmail.com'),
('Siddeshwar Electricals', 18.5030007, 73.9246856, 4, 'electrician', 0, 'vsp2293@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `plumber`
--

CREATE TABLE IF NOT EXISTS `plumber` (
  `ID` int(11) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plumber`
--

INSERT INTO `plumber` (`ID`, `longitude`, `latitude`, `description`) VALUES
(1, 73.8422995, 18.532945, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
