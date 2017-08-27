-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2017 at 10:33 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studentmgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `status`) VALUES
('admin', 'admin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `usn` varchar(25) NOT NULL,
  `sem` int(11) NOT NULL,
  `scode` varchar(25) NOT NULL,
  `date` date NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  UNIQUE KEY `usn` (`usn`,`date`),
  UNIQUE KEY `indexatt` (`usn`,`date`),
  KEY `scode` (`scode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`usn`, `sem`, `scode`, `date`, `status`) VALUES
('01fe15mcs001', 1, '1', '2017-02-23', 2),
('2bv09cs123', 1, '1', '2017-02-23', 1),
('BVVS001', 1, '1', '2017-02-23', 1),
('kle', 1, '1', '2017-02-23', 1),
('VDRIT001', 1, '1', '2017-02-23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE IF NOT EXISTS `faculty` (
  `fid` int(25) NOT NULL AUTO_INCREMENT,
  `fname` varchar(25) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(25) NOT NULL,
  `desgn` varchar(50) NOT NULL,
  PRIMARY KEY (`fid`),
  KEY `fname` (`fname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `email`, `pass`, `desgn`) VALUES
(1, 'vinod', 'vinod@gmail.com', 'vinod', 'Professor'),
(2, 'VInay', 'vinay@bvb.edu', 'vinay', 'Asst Professor');

-- --------------------------------------------------------

--
-- Table structure for table `iamarks`
--

CREATE TABLE IF NOT EXISTS `iamarks` (
  `usn` varchar(25) NOT NULL,
  `scode` varchar(25) NOT NULL,
  `testno` varchar(25) NOT NULL,
  `marks` varchar(25) NOT NULL,
  UNIQUE KEY `indexiamarks` (`usn`,`scode`,`testno`),
  KEY `scode` (`scode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `n_id` int(25) NOT NULL AUTO_INCREMENT,
  `date` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`n_id`, `date`, `description`) VALUES
(1, '2017/02/23', 'Today College Remains Holiday');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `usn` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  PRIMARY KEY (`usn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `sem`, `branch`, `sname`, `pass`, `mobile`) VALUES
('01fe15mcs001', 1, 'cs', 'John', 'john', 9986072821),
('2bv09cs123', 1, 'cs', 'prakash', 'prakash', 9731021279),
('BVVS001', 1, 'cs', 'Suresh', '123', 9731021279),
('kle', 1, 'cs', 'Mohan', 'mohan', 1234),
('VDRIT001', 1, 'cs', 'Vinay', '12345', 9986072821);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `scode` varchar(25) NOT NULL,
  `fid` int(25) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `sem` int(11) NOT NULL,
  `max_ia` int(11) NOT NULL,
  `min_ia` int(11) NOT NULL,
  PRIMARY KEY (`scode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`scode`, `fid`, `sname`, `branch`, `sem`, `max_ia`, `min_ia`) VALUES
('1CSE', 1, 'Data', 'cs', 1, 100, 50),
('1RNS', 1, 'Computer Networks2', 'cs', 1, 100, 20),
('2BVCS', 2, 'Algorithms', 'cs', 1, 100, 20),
('3KLET', 2, 'Computer Networks', 'cs', 1, 100, 35);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
