-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2017 at 12:37 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testNewsCI`
--

-- --------------------------------------------------------

--
-- Table structure for table `Answer`
--

CREATE TABLE IF NOT EXISTS `Answer` (
  `A_Id` int(11) NOT NULL AUTO_INCREMENT,
  `A_Name` varchar(200) DEFAULT NULL,
  `Q_Id` int(11) DEFAULT NULL,
  `A_Correct` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`A_Id`),
  KEY `Q_Id` (`Q_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `Answer`
--

INSERT INTO `Answer` (`A_Id`, `A_Name`, `Q_Id`, `A_Correct`) VALUES
(1, '20', 2, NULL),
(2, 'Fine', 3, NULL),
(3, 'Rabab', 1, 'false'),
(4, 'Engy', 1, NULL),
(5, 'ans 1', 7, NULL),
(6, 'ans 1', 7, NULL),
(7, 'ans 1', 7, NULL),
(8, 'ans 1', 7, NULL),
(9, 'ans 1.2', 12, NULL),
(10, 'ans 1.2', 12, NULL),
(11, 'ans 1.2', 12, NULL),
(12, 'ans 1.2', 12, NULL),
(13, 'ans 1.3', 13, NULL),
(14, 'ans 1.3', 13, NULL),
(15, 'ans 1.3', 13, NULL),
(16, 'ans 1.3', 13, NULL),
(17, 'ans 1.4', 14, NULL),
(18, 'ans 1.4', 14, NULL),
(19, 'ans 1.4', 14, NULL),
(20, 'ans 1.4', 14, NULL),
(21, 'ans 1.5', 15, NULL),
(22, 'ans 2.5', 15, NULL),
(23, '', 15, NULL),
(24, '', 15, NULL),
(25, 'ans 1.5', 16, NULL),
(26, 'ans 2.5', 16, NULL),
(27, 'ans 1.6', 17, NULL),
(28, 'ans 2.6', 17, NULL),
(29, 'ans 1.7', 18, NULL),
(30, 'ans 2.7', 18, NULL),
(31, 'ans 1.7', 19, NULL),
(32, 'ans 2.7', 19, NULL),
(33, 'ans 1.8', 20, NULL),
(34, 'ans 2.8', 20, NULL),
(35, 'ans 1', 21, NULL),
(36, 'ans 2', 21, NULL),
(37, 'ans 1.10', 22, NULL),
(38, 'ans 2.10', 22, NULL),
(39, 'ans 1.11', 23, NULL),
(40, 'ans 2.11', 23, NULL),
(41, 'ans 1.13', 24, NULL),
(42, 'ans 2.13', 24, NULL),
(43, 'ans 1.13', 25, NULL),
(44, 'ans 2.13', 25, NULL),
(45, '1', 26, NULL),
(46, '2', 26, NULL),
(47, '3', 26, NULL),
(48, '1', 27, NULL),
(49, '2', 27, NULL),
(50, 'ans 1', 28, NULL),
(51, 'ans 2', 28, NULL),
(52, 'ans 1', 29, NULL),
(53, 'ans 2', 29, NULL),
(54, 'ans 1', 30, NULL),
(55, 'ans 2', 30, NULL),
(56, 'ans 1', 31, NULL),
(57, 'ans 2', 31, NULL),
(58, 'ans 1', 32, NULL),
(59, 'ans 2', 32, NULL),
(60, 'ans 1', 33, NULL),
(61, 'ans 2', 33, NULL),
(62, 'ans 1', 34, NULL),
(63, 'ans 2', 34, NULL),
(64, 'ans 1', 35, NULL),
(65, 'ans 2', 35, NULL),
(66, 'ans 1', 36, 'false'),
(67, 'ans 2', 36, 'false'),
(68, 'ans 1', 37, 'false'),
(69, 'ans 2', 37, 'false'),
(70, 'yarab', 40, 'false'),
(71, 'far7a', 40, 'false'),
(72, 'yarab yarab yarab', 42, NULL),
(73, 'far7a far7a far7a', 42, NULL),
(74, 'yarab yarab yarab yarab yrab', 44, 'true'),
(75, 'far7a far7a far7a far7a far7a', 44, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `Exam`
--

CREATE TABLE IF NOT EXISTS `Exam` (
  `Exam_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Exam_Name` varchar(100) NOT NULL,
  `Exam_Desc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Exam_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `Exam`
--

INSERT INTO `Exam` (`Exam_Id`, `Exam_Name`, `Exam_Desc`) VALUES
(1, 'I_P', 'Image Processing'),
(2, 'D_M', 'Data Mining'),
(3, 'D_S', 'Data Structure');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Test', 'test', 'Hello World !!'),
(2, 'D_M', 'd_m', 'Data Mining');

-- --------------------------------------------------------

--
-- Table structure for table `Question`
--

CREATE TABLE IF NOT EXISTS `Question` (
  `Q_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Q_Name` varchar(200) DEFAULT NULL,
  `Exam_Id` int(11) DEFAULT NULL,
  PRIMARY KEY (`Q_Id`),
  KEY `Exam_Id` (`Exam_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `Question`
--

INSERT INTO `Question` (`Q_Id`, `Q_Name`, `Exam_Id`) VALUES
(1, 'What''syour name?', 1),
(2, 'What''s your Age?', 1),
(3, 'How are you?', 1),
(4, 'question 4 for exam 1', 1),
(5, 'question 5 for exam 1', 1),
(6, 'question 1 for exam 1', 1),
(7, 'question 1 for exam 1', 1),
(8, 'question 1 for exam 1', 1),
(9, 'question 2 for exam 1', 1),
(10, 'question 2 for exam 1', 1),
(11, 'question 2 for exam 1', 1),
(12, 'question 2 for exam 1', 1),
(13, 'question 3 for exam 1', 1),
(14, 'question 4 for exam 1', 1),
(15, 'question 5 for exam 1', 1),
(16, 'question 5 for exam 1', 1),
(17, 'question 6 for exam 1', 1),
(18, 'question 7 for exam 1', 1),
(19, 'question 7 for exam 1', 1),
(20, 'question 8 for exam 1', 1),
(21, 'question 1 for exam 1', 1),
(22, 'question 10 for exam 1', 1),
(23, 'question 11 for exam 1', 1),
(24, 'question 13 for exam 1', 1),
(25, 'question 13 for exam 1', 1),
(26, 'h??', 1),
(27, 'a??', 1),
(28, 'question 1 for exam 1', 1),
(29, 'question 1 for exam 1', 1),
(30, 'question 1 for exam 1', 1),
(31, 'question 1 for exam 1', 1),
(32, 'question 1 for exam 1', 1),
(33, 'question 1 for exam 1', 1),
(34, 'question 1 for exam 1', 1),
(35, 'question 1 for exam 1', 1),
(36, 'question 1 for exam 1', 1),
(37, 'question 1 for exam 1', 1),
(38, 'question 1 for exam 1', 1),
(39, 'question 1 for exam 1', 1),
(40, 'question 1 for exam 1', 1),
(41, 'question 1 for exam 1', 1),
(42, 'question 1 for exam 1', 1),
(43, 'question 1 for exam 1', 1),
(44, 'question 1 for exam 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(100) DEFAULT NULL,
  `User_Password` varchar(200) DEFAULT NULL,
  `User_Mail` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`User_Id`, `User_Name`, `User_Password`, `User_Mail`) VALUES
(1, 'Rabab', NULL, 'r@y.com'),
(2, 'engy', 'MD5(123)', 'engy@y.c');

-- --------------------------------------------------------

--
-- Table structure for table `Verify`
--

CREATE TABLE IF NOT EXISTS `Verify` (
  `User_Id` int(11) NOT NULL,
  `Exam_Id` int(11) NOT NULL,
  `Code` varchar(100) NOT NULL,
  `Score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Verify`
--

INSERT INTO `Verify` (`User_Id`, `Exam_Id`, `Code`, `Score`) VALUES
(1, 1, 'abc', 100);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Answer`
--
ALTER TABLE `Answer`
  ADD CONSTRAINT `Answer_ibfk_1` FOREIGN KEY (`Q_Id`) REFERENCES `Question` (`Q_Id`);

--
-- Constraints for table `Question`
--
ALTER TABLE `Question`
  ADD CONSTRAINT `Question_ibfk_1` FOREIGN KEY (`Exam_Id`) REFERENCES `Exam` (`Exam_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
