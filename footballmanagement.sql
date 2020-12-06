-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2020 at 05:47 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `footballmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `housename` text NOT NULL,
  `street` text NOT NULL,
  `state` text NOT NULL,
  `pincode` int(15) NOT NULL,
  `password` text NOT NULL,
  `cpassword` text NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cardpayment`
--

DROP TABLE IF EXISTS `tbl_cardpayment`;
CREATE TABLE IF NOT EXISTS `tbl_cardpayment` (
  `cardpay_id` int(11) NOT NULL AUTO_INCREMENT,
  `Card_no` varchar(299) CHARACTER SET utf8 NOT NULL,
  `Card_name` text CHARACTER SET utf8 NOT NULL,
  `Card_type` text CHARACTER SET utf8 NOT NULL,
  `expdate` text CHARACTER SET utf8 NOT NULL,
  `cvv` int(11) NOT NULL,
  PRIMARY KEY (`cardpay_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cardpayment`
--

INSERT INTO `tbl_cardpayment` (`cardpay_id`, `Card_no`, `Card_name`, `Card_type`, `expdate`, `cvv`) VALUES
(24, '2230 2382 8392 3822', 'Juan', 'debit', '05/2023', 132),
(25, '3434 2324 2112 1133', 'Kibu Vicuna', 'debit', '08/2024', 125),
(26, '4454 5234 3434 4331', 'Kibu Vicuna', 'debit', '10/2023', 123),
(27, '6656 5342 4534 5342', 'Juan Ferado', 'debit', '10/2023', 534),
(30, '4342 1321 3343 2323', 'Juan Ferado', 'debit', '11/2024', 142),
(31, '2232 3230 2320 3221', 'Antonio Lopez', 'debit', '09/2022', 132),
(32, '4534 2232 3242 4232', 'Kibu Vicuna', 'debit', '11/2023', 123),
(33, '3432 4324 2423 3333', 'Kibu Vicuna', 'debit', '11/2023', 123),
(34, '4756 5656 8658 5658', 'Kibu Vicuna', 'debit', '11/2023', 111),
(35, '3435 3524 5245 4352', 'Sergio', 'debit', '11/2023', 121),
(36, '4224 2424 2242 4222', 'Sergio', 'debit', '11/2023', 321),
(37, '5435 2442 4234 3432', 'Juan Ferado', 'debit', '10/2023', 132),
(38, '6565 5558 5232 3242', 'Sergio', 'debit', '10/2023', 121);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_club`
--

DROP TABLE IF EXISTS `tbl_club`;
CREATE TABLE IF NOT EXISTS `tbl_club` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_id` int(11) NOT NULL,
  `c_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `city` varchar(20) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`c_id`),
  UNIQUE KEY `m_id` (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_club`
--

INSERT INTO `tbl_club` (`c_id`, `m_id`, `c_name`, `city`) VALUES
(11, 21, 'Kerala Blasters', 'Kerala'),
(12, 24, 'FC Goa', 'Goa'),
(13, 22, 'ATK', 'Kolkata'),
(14, 23, 'Mumbai City', 'Mumbai'),
(15, 25, 'BengaluruFC', 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fixturemaster`
--

DROP TABLE IF EXISTS `tbl_fixturemaster`;
CREATE TABLE IF NOT EXISTS `tbl_fixturemaster` (
  `fix_id` int(11) NOT NULL AUTO_INCREMENT,
  `hometeam` text CHARACTER SET utf8 NOT NULL,
  `awayteam` text CHARACTER SET utf8 NOT NULL,
  `st_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`fix_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_fixturemaster`
--

INSERT INTO `tbl_fixturemaster` (`fix_id`, `hometeam`, `awayteam`, `st_name`, `time`, `date`) VALUES
(19, 'ATK', 'Kerala', 'Fatorda', '19:30:00', '2020-11-24'),
(23, 'FC', 'Mumbai', 'Mumbai', '12:55:00', '2020-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

DROP TABLE IF EXISTS `tbl_login`;
CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `type` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=107 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `email`, `firstname`, `lastname`, `type`, `password`) VALUES
(1, 'admin@gmail.com', 'admin', 'admin', 'admin', 'admin'),
(70, 'kibuvicuna@gmail.com', 'Kibu', 'Vicuna', 'user', 'aaaa'),
(78, 'antonio@gmail.com', 'Antonio', 'Lopez', 'user', 'aaaa'),
(79, 'sergio@gmail.com', 'Sergio', 'Lobera', 'user', 'aaaa'),
(80, 'juan@gmail.com', 'Juan', 'Ferando', 'user', 'aaaa'),
(89, 'bilalkhan@gmail.com', 'Bilal', 'Khan', 'player', 'aaa'),
(90, 'sandeepsingh@gmail.com', 'Sandeep', 'Singh', 'player', 'AAA'),
(91, 'rohit@gmail.com', 'Rohit', 'Kumar', 'player', 'AAA'),
(92, 'jessel@gmail.com', 'Jessel', 'Carneiro', 'player', 'aaa'),
(93, 'dheeraj@gmai.com', 'Dheeraj', 'Singh', 'player', 'aaa'),
(94, 'sandesh@gmail.com', 'Sandeep', 'Jhinghan', 'player', 'aaa'),
(95, 'manvir@gmail.com', 'Manvir', 'Singh', 'player', 'aaa'),
(96, 'pritam@gmail.com', 'Pritam', 'Kotal', 'player', 'aaa'),
(97, 'len@gmail.com', 'Len', 'Doungel', 'player', 'aaa'),
(98, 'brandon@gmail.com', 'Brandon', 'Fernandes', 'player', 'aaa'),
(99, 'mohammed@gmail.com', 'Mohammad', 'Nawaz', 'player', 'aaa'),
(100, 'amrinder@gmail.com', 'Amrinder', 'Singh', 'player', 'aaaa'),
(101, 'muhammed@gmail.com', 'Muhammed', 'Rakip', 'player', 'aaaa'),
(102, 'bipin@gmail.com', 'Bipin', 'Singh', 'player', 'aaa'),
(104, 'aswin@gmail.com', 'Aswin', 'PS', 'player', 'aswinps'),
(105, 'gavin@gmail.com', 'Gavin', 'Cherian', 'user', 'aaaa'),
(106, 'arjunrajesh11@gmail.com', 'Arjun', 'Rajesh', 'player', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_manager`
--

DROP TABLE IF EXISTS `tbl_manager`;
CREATE TABLE IF NOT EXISTS `tbl_manager` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` text CHARACTER SET utf8 NOT NULL,
  `lastname` text CHARACTER SET utf8 NOT NULL,
  `email` text CHARACTER SET utf8 NOT NULL,
  `contact` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `housename` text CHARACTER SET utf8 NOT NULL,
  `street` text CHARACTER SET utf8 NOT NULL,
  `state` text CHARACTER SET utf8 NOT NULL,
  `pincode` int(15) NOT NULL,
  `password` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_manager`
--

INSERT INTO `tbl_manager` (`m_id`, `firstname`, `lastname`, `email`, `contact`, `dob`, `housename`, `street`, `state`, `pincode`, `password`) VALUES
(21, 'Kibu', 'Vicuna', 'kibuvicuna@gmail.com', 8098392928, '1972-11-20', 'Kibu', 'st12', 'Kerala', 686000, 'aaaa'),
(22, 'Antonio', 'Lopez', 'antonio@gmail.com', 9865408234, '1966-05-10', 'antonio', 'st99', 'Kolkata', 500111, 'aaaa'),
(23, 'Sergio', 'Lobera', 'sergio@gmail.com', 9012345611, '1978-01-01', 'sergio', 'st10', 'Mumbai', 500112, 'aaaa'),
(24, 'Juan', 'Ferando', 'juan@gmail.com', 9562431099, '1981-06-09', 'juan', 'st18', 'Goa', 500121, 'aaaa'),
(25, 'Gavin', 'Cherian', 'gavin@gmail.com', 9023242221, '1984-12-31', 'aa', 'aa', 'Kerala', 686001, 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_player`
--

DROP TABLE IF EXISTS `tbl_player`;
CREATE TABLE IF NOT EXISTS `tbl_player` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_id` int(11) NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `firstname` text CHARACTER SET utf8 NOT NULL,
  `lastname` text CHARACTER SET utf8 NOT NULL,
  `dob` date NOT NULL,
  `contact` bigint(20) NOT NULL,
  `housename` text CHARACTER SET utf8 NOT NULL,
  `street` text CHARACTER SET utf8 NOT NULL,
  `state` text CHARACTER SET utf8 NOT NULL,
  `pincode` int(11) NOT NULL,
  `position` text CHARACTER SET utf8 NOT NULL,
  `matches` int(15) NOT NULL,
  `goals` int(15) NOT NULL,
  `fee` int(15) NOT NULL,
  PRIMARY KEY (`p_id`),
  KEY `c_id` (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_player`
--

INSERT INTO `tbl_player` (`p_id`, `c_id`, `email`, `firstname`, `lastname`, `dob`, `contact`, `housename`, `street`, `state`, `pincode`, `position`, `matches`, `goals`, `fee`) VALUES
(32, 12, 'bilalkhan@gmail.com', 'Bilal', 'Khan', '1996-10-23', 9012345689, 'bville', 'khurji', 'Uttar Pradesh', 709881, 'Goalkeeper', 31, 0, 145000),
(33, 12, 'sandeepsingh@gmail.com', 'Sandeep', 'Singh', '1995-09-26', 7041258639, 'AAA', 'AAA', 'Meghalaya', 519866, 'Defender', 15, 2, 150000),
(34, 13, 'rohit@gmail.com', 'Rohit', 'Kumar', '1995-09-27', 7109865431, 'aaa', 'kochi', 'Kerala', 600601, 'Midfielder', 30, 3, 175000),
(35, 11, 'jessel@gmail.com', 'Jessel', 'Carneiro', '1993-04-28', 7123456815, 'aaa', 'aaa', 'Goa', 500123, 'Defender', 36, 1, 200000),
(36, 13, 'dheeraj@gmai.com', 'Dheeraj', 'Singh', '2000-10-04', 8011803202, 'aaa', 'aaa', 'Manipur', 500111, 'Goalkeeper', 19, 0, 125000),
(37, 14, 'sandesh@gmail.com', 'Sandeep', 'Jhinghan', '1993-05-24', 8011803888, 'aaa', 'aaa', 'Chandigarh', 444444, 'Defender', 103, 3, 500000),
(38, 13, 'manvir@gmail.com', 'Manvir', 'Singh', '1995-09-12', 8098392952, 'aaa', 'aaa', 'Punjab', 500121, 'Forward', 28, 9, 300000),
(39, 11, 'pritam@gmail.com', 'Pritam', 'Kotal', '1995-03-28', 8099809988, 'aaa', 'kolkata', 'West Bengal', 566643, 'Defender', 121, 6, 450000),
(40, 11, 'len@gmail.com', 'Len', 'Doungel', '1995-02-27', 6012341232, 'aaa', 'aaa', 'Manipur', 500121, 'Forward', 55, 19, 350000),
(41, 12, 'brandon@gmail.com', 'Brandon', 'Fernandes', '1995-06-09', 6012341212, 'aaa', 'aaa', 'Goa', 500112, 'Midfielder', 68, 11, 450000),
(42, 12, 'mohammed@gmail.com', 'Mohammad', 'Nawaz', '2000-09-05', 6012341214, 'aaa', 'aaa', 'Manipur', 500121, 'Goalkeeper', 21, 0, 150000),
(43, 14, 'amrinder@gmail.com', 'Amrinder', 'Singh', '1993-11-11', 9012345688, 'aaa', 'aaa', 'Punjab', 500121, 'Goalkeeper', 124, 0, 475000),
(44, 14, 'muhammed@gmail.com', 'Muhammed', 'Rakip', '2000-06-06', 9012188301, 'aaa', 'aaa', 'Manipur', 500112, 'Defender', 29, 2, 250000),
(45, 12, 'bipin@gmail.com', 'Bipin', 'Singh', '1995-10-18', 9865408611, 'aaaa', 'aaa', 'Manipur', 519866, 'Forward', 31, 5, 325000),
(46, 11, 'aswin@gmail.com', 'Aswin', 'PS', '2003-12-03', 9562431522, 'aaa', 'Kochi', 'Kerala', 686655, 'Midfielder', 10, 2, 200000),
(47, 14, 'arjunrajesh11@gmail.com', 'Arjun', 'Rajesh', '2003-12-31', 9562431522, 'aaa', 'Pala', 'Kerala', 686575, 'Forward', 11, 10, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stadium`
--

DROP TABLE IF EXISTS `tbl_stadium`;
CREATE TABLE IF NOT EXISTS `tbl_stadium` (
  `st_id` int(6) NOT NULL AUTO_INCREMENT,
  `st_name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `city` varchar(30) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_stadium`
--

INSERT INTO `tbl_stadium` (`st_id`, `st_name`, `city`) VALUES
(18, 'Kaloor ', 'Kochi'),
(19, 'Salt Lake', 'Kolkata'),
(20, 'Mumbai Arena', 'Mumbai'),
(21, 'Fatorda', 'Goa'),
(22, 'Chennai', 'TamilNadu');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfer`
--

DROP TABLE IF EXISTS `tbl_transfer`;
CREATE TABLE IF NOT EXISTS `tbl_transfer` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `requestid` int(11) NOT NULL,
  `acceptid` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_transfer`
--

INSERT INTO `tbl_transfer` (`t_id`, `requestid`, `acceptid`, `p_id`, `c_id`) VALUES
(1, 23, 22, 36, 13),
(2, 21, 23, 43, 14);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transferchild`
--

DROP TABLE IF EXISTS `tbl_transferchild`;
CREATE TABLE IF NOT EXISTS `tbl_transferchild` (
  `tr_id` int(11) NOT NULL AUTO_INCREMENT,
  `ma_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transfermaster`
--

DROP TABLE IF EXISTS `tbl_transfermaster`;
CREATE TABLE IF NOT EXISTS `tbl_transfermaster` (
  `ta_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_id` int(11) NOT NULL,
  `fromid` int(11) NOT NULL,
  `toid` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`ta_id`),
  UNIQUE KEY `p_id` (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_transfermaster`
--

INSERT INTO `tbl_transfermaster` (`ta_id`, `p_id`, `fromid`, `toid`, `m_id`, `date`) VALUES
(67, 39, 13, 11, 21, '2020-11-22'),
(68, 40, 12, 11, 21, '2020-11-23'),
(74, 32, 11, 12, 24, '2020-11-23'),
(75, 45, 14, 12, 24, '2020-11-23'),
(77, 34, 11, 13, 22, '2020-11-24'),
(80, 46, 14, 11, 21, '2020-11-25'),
(82, 37, 13, 14, 23, '2020-11-25'),
(83, 33, 11, 12, 24, '2020-11-26'),
(84, 36, 13, 14, 23, '2020-11-26'),
(85, 43, 14, 11, 21, '2020-11-27'),
(86, 47, 11, 14, 23, '2020-11-27');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_club`
--
ALTER TABLE `tbl_club`
  ADD CONSTRAINT `tbl_club_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `tbl_manager` (`m_id`);

--
-- Constraints for table `tbl_player`
--
ALTER TABLE `tbl_player`
  ADD CONSTRAINT `tbl_player_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_club` (`c_id`);

--
-- Constraints for table `tbl_transfermaster`
--
ALTER TABLE `tbl_transfermaster`
  ADD CONSTRAINT `tbl_transfermaster_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_player` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
