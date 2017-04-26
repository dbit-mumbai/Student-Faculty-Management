-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 08:58 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studfac`
--

-- --------------------------------------------------------

--
-- Table structure for table `proj_det`
--

CREATE TABLE `proj_det` (
  `Dept Name` varchar(30) NOT NULL,
  `Fac Name` varchar(30) NOT NULL,
  `Project Name` varchar(50) NOT NULL,
  `Project Details` varchar(200) NOT NULL,
  `Assigned Date` date NOT NULL,
  `Submission Date` date NOT NULL,
  `No of Students` int(1) NOT NULL,
  `Stud Name 1` varchar(30) NOT NULL,
  `Roll No 1` int(2) NOT NULL,
  `Class Name 1` varchar(20) NOT NULL,
  `Stud Name 2` varchar(30) NOT NULL,
  `Roll No 2` int(2) NOT NULL,
  `Class Name 2` varchar(20) NOT NULL,
  `Stud Name 3` varchar(30) NOT NULL,
  `Roll No 3` int(2) NOT NULL,
  `Class Name 3` varchar(20) NOT NULL,
  `Stud Name 4` varchar(30) NOT NULL,
  `Roll No 4` int(2) NOT NULL,
  `Class Name 4` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proj_det`
--

INSERT INTO `proj_det` (`Dept Name`, `Fac Name`, `Project Name`, `Project Details`, `Assigned Date`, `Submission Date`, `No of Students`, `Stud Name 1`, `Roll No 1`, `Class Name 1`, `Stud Name 2`, `Roll No 2`, `Class Name 2`, `Stud Name 3`, `Roll No 3`, `Class Name 3`, `Stud Name 4`, `Roll No 4`, `Class Name 4`) VALUES
('it', 'Revathy Sundararajan', 'Library Management', 'Lbrary Management System with sms alerts', '2016-04-04', '2017-04-05', 4, 'Rayvonne', 70, 'SEIT', 'Christen', 74, 'SEIT', 'Pranav', 71, 'SEIT', 'Akshay ', 73, 'SEIT'),
('comp', 'XYZ', 'E Waste Management', 'WE can dispose waste in the right manner by providing solutions like e waste management which can go in a long way to save the environment', '2016-02-03', '2017-04-01', 4, 'Raj', 45, 'SECO', 'Aniket', 35, 'SECO', 'Anita', 42, 'SECO', 'Nikhil', 26, 'SECO');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
