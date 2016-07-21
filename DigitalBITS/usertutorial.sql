-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2016 at 10:39 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `usertutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `mail_data`
--

CREATE TABLE IF NOT EXISTS `mail_data` (
  `id` int(11) NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL,
  `subject` varchar(200) NOT NULL,
  `data` varchar(600) NOT NULL,
  `date` varchar(50) NOT NULL,
  `prof` text NOT NULL,
  `status1` text NOT NULL,
  `status2` text NOT NULL,
  `bitsid` varchar(255) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_data`
--

INSERT INTO `mail_data` (`id`, `from`, `to`, `subject`, `data`, `date`, `prof`, `status1`, `status2`, `bitsid`, `name`) VALUES
(1, 'mohit@mail.com', '', 'Test Mail', 'This is a test mail.', '5 Feb 2016', '', 'n', 'n', '', ''),
(2, 'sasdads', '', 'assaa', 'asasa', 'asasas', '', 'n', 'n', '', ''),
(3, 'qasassa', '', 'asa', 'asasss', 'asasas', '', 'n', 'n', '', ''),
(4, 'eds', '', 'sds', 'd', 'sdsd', '', 'y', 'y', '', ''),
(5, 'blah1', '', 'sds', 'd', 'sdsd', '', 'y', 'y', '', ''),
(6, 'blah2', '', 'sds', 'd', 'sdsd', '', 'y', 'y', '', ''),
(7, 'blah3', '', 'sds', 'd', 'sdsd', '', 'y', 'y', '', ''),
(8, 'pc', 'Students', 'Trial', 'Test he hai', '02/09/2016', 'surojit@staff.com', 'n', 'n', '', ''),
(9, 'Poetry Club', 'Students', 'Open Reading Session', 'Test@trial', '02/23/2016', 'surojit@staff.com', 'y', 'n', '2015A3PS231P', '');

-- --------------------------------------------------------

--
-- Table structure for table `pendingreq`
--

CREATE TABLE IF NOT EXISTS `pendingreq` (
  `id` int(100) NOT NULL,
  `s_email` varchar(100) NOT NULL,
  `exit_date` varchar(100) NOT NULL,
  `exit_time` varchar(100) NOT NULL,
  `destination` text NOT NULL,
  `return_date` varchar(100) NOT NULL,
  `return_time` varchar(100) NOT NULL,
  `f_email` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `f_mobile` text NOT NULL,
  `m_mobile` text NOT NULL,
  `hostel` text NOT NULL,
  `status` text NOT NULL,
  `bitsid` varchar(12) NOT NULL,
  `room_no` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendingreq`
--

INSERT INTO `pendingreq` (`id`, `s_email`, `exit_date`, `exit_time`, `destination`, `return_date`, `return_time`, `f_email`, `m_email`, `f_mobile`, `m_mobile`, `hostel`, `status`, `bitsid`, `room_no`, `name`) VALUES
(2, 'mohit@mail.com', '15/05/2016', '5 pm', 'Mumbai', '10/08/2016', '7 pm', 'dad@mail.com', 'mom@mail.com', '1234567890', '1234567890', 'MV', 'y', '', 0, ''),
(3, 'mohit@mail.com', '16/06/2016', '5:30 pm', 'Kashmir', '25/06/2016', '6:30 pm', 'dad@mail.com', 'mom@mail.com', '1234567890', '1234567890', 'MV', 'n', '', 0, ''),
(4, 'mohit@mail.com', '', '09:30', '', '', '09:30', 'dad@mail.com', 'mom@mail.com', '1234567890', '1234567890', 'MV', 'y', '2015A3PS231P', 0, 'Mohit'),
(5, 'mohit@mail.com', '02/11/2016', '09:30', 'ddsd', '02/16/2016', '09:30', 'dad@mail.com', 'mom@mail.com', '1234567890', '1234567890', 'MV', 'y', '2015A3PS231P', 124, 'Mohit');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `Native` text NOT NULL,
  `Mobile_Number` text NOT NULL,
  `Hostel` text NOT NULL,
  `request_password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `email`, `password`, `name`, `Native`, `Mobile_Number`, `Hostel`, `request_password`) VALUES
(1, 'surojit@staff.com', '7fd9badd7b6dcf0dce0eeaf1ac3419af', 'Surojit Pande', 'West Bengal', '9022145658', 'MV', '7fd9badd7b6dcf0dce0eeaf1ac3419af');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `bitsid` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `native` text NOT NULL,
  `branch` text NOT NULL,
  `f_email` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `s_mobile` text NOT NULL,
  `f_mobile` text NOT NULL,
  `m_mobile` text NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Hostel` text NOT NULL,
  `room_no` int(5) NOT NULL,
  `f_name` text NOT NULL,
  `m_name` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `bitsid`, `email`, `password`, `name`, `native`, `branch`, `f_email`, `m_email`, `s_mobile`, `f_mobile`, `m_mobile`, `Address`, `Hostel`, `room_no`, `f_name`, `m_name`) VALUES
(1, '2015A3PS231P', 'mohit@mail.com', 'd8052f9e09a17e6907629e76bbd261cc', 'Mohit', 'Mumbai', 'EEE', 'dad@mail.com', 'mom@mail.com', '1234567890', '1234567890', '1234567890', 'Kharghar', 'MV', 124, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mail_data`
--
ALTER TABLE `mail_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pendingreq`
--
ALTER TABLE `pendingreq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mail_data`
--
ALTER TABLE `mail_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `pendingreq`
--
ALTER TABLE `pendingreq`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
