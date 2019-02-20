-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2018 at 08:57 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `safar`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `email` varchar(30) NOT NULL,
  `from` varchar(30) NOT NULL,
  `to` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `busid` varchar(30) NOT NULL,
  `seat` varchar(30) NOT NULL,
  `ticket` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`email`, `from`, `to`, `date`, `busid`, `seat`, `ticket`) VALUES
('rishukr06@outlook.com', 'delhi', 'punjab', '2018-06-23', '2', '1', '1'),
('rishukr06@gmail.com', 'Punjab', 'Delhi', '2018-06-22', '1', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `bus_info`
--

CREATE TABLE IF NOT EXISTS `bus_info` (
  `ID` varchar(5) NOT NULL,
  `img` varchar(30) NOT NULL DEFAULT 'bus_default.jpg',
  `cname` varchar(30) NOT NULL,
  `seats` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus_info`
--

INSERT INTO `bus_info` (`ID`, `img`, `cname`, `seats`, `price`, `time`, `duration`) VALUES
(' Bus ', '', 'Raj Travels', '30', '500', '16:00', '8'),
('0', 'bus_default.jpg', '', '', '', '', ''),
('1', 'bus_default.jpg', 'BSRTC', '40', '1200', '14:00', '6'),
('2', 'bus_default.jpg', 'PUNBUS', '45', '1800', '23:00', '6'),
('3', 'NULL', 'prince travels', '40', '400', '12:00', '8'),
('4', 'NULL', 'prince travels', '40', '400', '12:00', '8');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `s_question` varchar(50) NOT NULL,
  `s_answer` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL DEFAULT 'default-profile.png',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`email`, `name`, `password`, `dob`, `gender`, `s_question`, `s_answer`, `profile`) VALUES
('dk1@gmail.com', 'dk', '123', '2018-12-31', 'male', 'What is your lucky number?', '1', 'IMG_20161107_081051501.jpg'),
('helllo@gmail.com', 'hellllo', '123', '2018-12-31', 'male', 'What is your lucky number?', '7', 'crop.jpg'),
('hgchg@jhv.ku', 'fdxs', '123', '2018-12-31', 'female', 'What is your favourite color?', 'JYUF', 'default-profile.png'),
('hgchttg@jhv.ku', 'fdxs', '123', '2018-12-31', 'female', 'What is your favourite color?', 'JYUF', 'default-profile.png'),
('hgfhg@kujg.kjh', 'ytdfy', '123', '2018-12-31', 'male', 'What is the name of your pet?', 'hgf', 'default-profile.png'),
('hgjhvh@hkgj.b', 'gtrfdg', '123', '2018-12-31', 'male', 'What is the name of your pet?', 'hello', 'default-profile.png'),
('himashu@gmail.com', 'himanshu', '123', '2018-12-31', 'male', 'What is your favourite color?', 'blue', 'wall_gokull.jpg'),
('kartik96goenka@gmail.com', 'Kartik', '99', '2012-12-31', 'male', 'What is your favourite color?', 'red', 'default-profile.png'),
('mmhjvjh@mj.com', 'hbh', '11', '2018-12-31', 'male', 'What is the name of your pet?', 'hj', 'default-profile.png'),
('pl@456.bj', 'plm', '123', '2018-12-31', 'female', 'What is your childhood name?', 'jhg', 'default-profile.png'),
('q@gmail.com', 'Q', '123', '2018-12-31', 'male', 'What is your favourite color?', 'red', 'default-profile.png'),
('QQQ@QQ.QQ', 'QQQ', 'QQQ', '2018-12-31', 'male', 'What is the name of your pet?', 'QQQ', '1546_panchmukhi-hanuman-wallpa'),
('qwer@gfdf.hgf', 'qwe', '123', '2018-12-31', 'male', 'What is your favourite color?', 'ggh', '6a00e5505cf8e088340120a5dc3f42'),
('rd@erfg.uhg', 'es', '123', '2018-12-31', 'male', 'What is the name of your pet?', 'ojiugg', 'default-profile.png'),
('rdx1@gmail.com', 'rdx', '123', '2017-12-31', 'female', 'What is the name of your pet?', 'rdx', 'default-profile.png'),
('rdx@gmail.com', 'rdx', '123', '2017-12-31', 'female', 'What is the name of your pet?', 'rdx', 'default-profile.png'),
('rishukr06@gmail.com', 'Rishu kumar', '12345', '1999-01-23', 'male', 'What is the name of your pet?', 'Tiger', '6a00e5505cf8e088340120a5dc3f42970c.jpg'),
('rishukr06@outlook.com', 'kumar Rishu ', 'rdx', '2018-12-31', 'male', 'What is your lucky number?', '7', 'unnamed.png'),
('sda@jkhk.m', '11', '11', '2018-12-31', 'male', 'What is the name of your pet?', '11', 'default-profile.png'),
('test@gmail.com', 'test', '123', '1989-05-12', 'male', 'What is your childhood name?', 'test', 'm03SOI1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
