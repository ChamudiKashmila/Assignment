-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2018 at 04:04 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `max_studio`
--

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(10) UNSIGNED NOT NULL,
  `bill_no` varchar(20) NOT NULL,
  `emp_id` varchar(200) NOT NULL,
  `booking_date` date NOT NULL,
  `is_booked` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availability`
--

INSERT INTO `availability` (`id`, `bill_no`, `emp_id`, `booking_date`, `is_booked`) VALUES
(279, '20180401_2', 'ms_1', '2018-04-02', 1),
(280, '20180401_2', 'ms_3', '2018-04-02', 1),
(281, '20180401_2', 'ms_4', '2018-04-02', 1),
(282, '20180401_3', 'ms_1', '2018-04-10', 1),
(283, '20180401_3', 'ms_3', '2018-04-10', 1),
(284, '20180401_3', 'ms_5', '2018-04-10', 1),
(287, '20180401_4', 'ms_1', '2018-04-15', 0),
(288, '20180401_4', 'ms_2', '2018-04-15', 0),
(289, '20180401_4', 'ms_4', '2018-04-15', 0),
(290, '20180401_5', 'ms_1', '2018-04-01', 0),
(291, '20180401_5', 'ms_2', '2018-04-01', 0),
(292, '20180401_5', 'ms_3', '2018-04-01', 0),
(293, '20180401_5', 'ms_5', '2018-04-01', 0),
(294, '20180401_6', 'ms_1', '2018-04-20', 0),
(295, '20180401_6', 'ms_2', '2018-04-20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employer_details`
--

CREATE TABLE `employer_details` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(20) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_position` varchar(20) NOT NULL,
  `emp_contact_no` varchar(20) NOT NULL,
  `emp_is_deleted` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employer_details`
--

INSERT INTO `employer_details` (`id`, `emp_id`, `emp_name`, `emp_position`, `emp_contact_no`, `emp_is_deleted`) VALUES
(1, 'ms_1', 'Kusal Kalhara', 'Videographer', '', 0),
(2, 'ms_2', 'Dilki Sonali', 'Photographer', '', 0),
(3, 'ms_3', 'Dahami Dewmini', 'Photographer', '', 0),
(4, 'ms_4', 'Kasun Chamara', 'Other_crew', '0712131212', 0),
(5, 'ms_5', 'Sujith Krishantha', 'Photographer', '0715770535', 0),
(6, 'ms_6', 'Sandun', 'Photographer', '12364', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `client_contact_no` varchar(12) NOT NULL,
  `function_date` date NOT NULL,
  `function_time` time NOT NULL,
  `location` varchar(100) NOT NULL,
  `others` varchar(300) NOT NULL,
  `crew` varchar(200) NOT NULL,
  `billing_date` date NOT NULL,
  `deleted_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`id`, `bill_no`, `category`, `client_name`, `client_contact_no`, `function_date`, `function_time`, `location`, `others`, `crew`, `billing_date`, `deleted_event`) VALUES
(2, '20180401_2', 'Wedding', 'Dilki Sonali', '0710322500', '2018-04-02', '20:30:00', 'Panadura', 'Bring Canon 80D and Wide angle lense', '* Kusal Kalhara<br>* Dahami Dewmini<br>* Kasun Chamara<br>', '2018-04-01', 0),
(3, '20180401_3', 'Homecomming', 'Dilki Sonali', '0710322500', '2018-04-10', '21:30:00', 'Matara', 'Bring Go Pro and Drone', '* Kusal Kalhara<br>* Dahami Dewmini<br>* Sujith Krishantha<br>', '2018-04-01', 0),
(4, '20180401_4', 'Outdoor_Event', 'Sachindu Theminda', '0712255667', '2018-04-15', '23:03:00', 'Galle', 'Go pro and stabilizer', '* Kusal Kalhara<br>* Dilki Sonali<br>* Kasun Chamara<br>', '2018-04-01', 1),
(5, '20180401_5', 'Homecomming', 'SADSADASDSD', '1231231232', '2018-04-01', '14:32:00', 'wqeeeeeeeeeeeeeeeeeeeeeeeeeee', 'qweeeeeeeeeeeqweqweqweqweqwewqeqw', '* Kusal Kalhara<br>* Dilki Sonali<br>* Dahami Dewmini<br>* Sujith Krishantha<br>', '2018-04-01', 1),
(6, '20180401_6', 'Wedding', 'sadsf', '4646', '2018-04-20', '18:00:00', 'sdfsdf', 'sadsa', '* Kusal Kalhara<br>* Dilki Sonali<br>', '2018-04-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `billing_date` date NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_contact_no` varchar(20) NOT NULL,
  `total` varchar(100) NOT NULL,
  `advance` varchar(100) NOT NULL,
  `balance` varchar(100) NOT NULL,
  `billing_month` int(11) NOT NULL,
  `billing_year` int(11) NOT NULL,
  `deleted_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `bill_no`, `category`, `billing_date`, `client_name`, `client_contact_no`, `total`, `advance`, `balance`, `billing_month`, `billing_year`, `deleted_event`) VALUES
(39, '20180401_2', 'Wedding', '2018-04-01', 'Dilki Sonali', '0710322500', '120000', '40000', '80000', 4, 2018, 0),
(40, '20180401_3', 'Homecomming', '2018-04-01', 'Dilki Sonali', '0710322500', '', '', '', 4, 2018, 0),
(41, '20180401_4', 'Outdoor_Event', '2018-04-01', 'Sachindu Theminda', '0712255667', '6000', '5000', '1000', 4, 2018, 1),
(42, '20180401_5', 'Homecomming', '2018-04-01', 'SADSADASDSD', '1231231232', '', '', '', 4, 2018, 1),
(43, '20180401_6', 'Wedding', '2018-04-01', 'sadsf', '4646', '6000', '1000', '5000', 4, 2018, 1);

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

CREATE TABLE `system_user` (
  `id` int(11) NOT NULL,
  `user_id` varchar(20) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL,
  `user_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_user`
--

INSERT INTO `system_user` (`id`, `user_id`, `first_name`, `last_name`, `password`, `last_login`, `user_deleted`) VALUES
(2, 'dilki', 'Dilki', 'Sonali', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', '2018-03-12 16:03:55', 0),
(1, 'kkalhara2', 'Kusal', 'Kalhara', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', '2018-04-06 19:32:48', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_details`
--
ALTER TABLE `employer_details`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`bill_no`),
  ADD UNIQUE KEY `bill_no` (`bill_no`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_user`
--
ALTER TABLE `system_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=296;
--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
