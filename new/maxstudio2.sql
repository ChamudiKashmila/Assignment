-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 05:49 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maxstudio2`
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
(295, '20180401_6', 'ms_2', '2018-04-20', 0),
(296, '20181208_7', 'ms_11', '2018-12-08', 1),
(297, '20181208_7', 'ms_13', '2018-12-08', 1),
(298, '20181208_8', 'ms_10', '2018-12-25', 1),
(299, '20181208_8', 'ms_13', '2018-12-25', 1),
(300, '20181210_9', 'ms_10', '2018-12-19', 1),
(301, '20181210_9', 'ms_11', '2018-12-19', 1),
(302, '20181210_9', 'ms_13', '2018-12-19', 1),
(303, '20181210_10', 'ms_12', '2018-12-19', 1),
(304, '20181210_10', 'ms_3', '2018-12-19', 1),
(305, '20181210_11', 'ms_14', '2018-12-19', 1),
(306, '20181210_11', 'ms_2', '2018-12-19', 1),
(307, '20181210_11', 'ms_5', '2018-12-19', 1),
(308, '20181210_11', 'ms_4', '2018-12-19', 1),
(309, '20181210_11', 'ms_7', '2018-12-19', 1),
(310, '20181211_12', 'ms_10', '0000-00-00', 1),
(311, '20181211_12', 'ms_13', '0000-00-00', 1),
(312, '20181211_13', 'ms_10', '0000-00-00', 1),
(313, '20181214_14', 'ms_11', '0000-00-00', 1),
(314, '20181214_14', 'ms_2', '0000-00-00', 1),
(315, '20181214_14', 'ms_4', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(10) NOT NULL,
  `cus_id` varchar(20) NOT NULL,
  `category` varchar(100) NOT NULL,
  `crew` varchar(200) NOT NULL,
  `billing_date` date NOT NULL,
  `deleted_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(20) NOT NULL,
  `cus_id` varchar(20) NOT NULL,
  `cus_name` varchar(50) NOT NULL,
  `cus_mobile` int(10) NOT NULL,
  `cus_land` int(10) NOT NULL,
  `cus_email` varchar(50) NOT NULL,
  `cus_address_no` varchar(50) NOT NULL,
  `cus_street` varchar(50) NOT NULL,
  `cus_city1` varchar(25) NOT NULL,
  `cus_city2` varchar(25) NOT NULL,
  `reg_date` date NOT NULL,
  `cus_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cus_id`, `cus_name`, `cus_mobile`, `cus_land`, `cus_email`, `cus_address_no`, `cus_street`, `cus_city1`, `cus_city2`, `reg_date`, `cus_delete`) VALUES
(2, '0', 'A.L.D.D.Himalia', 719507447, 114581111, 'malki11551@gmail.com', '15558', 'Galle roadss', 'Molligodass', 'ss', '2018-12-02', 0),
(1, '1', 'KGB Arachchige', 711542685, 112501610, 'gayara@gmail.com', '50', 'Sangabo Mawatha', 'Makola south', 'Makola', '2018-12-01', 0),
(3, 'cus_3', 'M.M.D.M.Wanigarathna', 717074354, 114583658, 'd@gmail.com', '344', 'ww', 'wwe', 'ww', '2018-12-02', 0),
(4, 'cus_4', 'A.S.D.Perera', 719507138, 112548693, 'dilki1@gmail.com', '1555', 'Galle roadww', 'mawala', 'wadduwa', '2018-12-11', 0),
(5, 'cus_5', 'asd', 719507138, 114589624, 'dilki1@gmail.com', '56', 'gh', 'assss', 'd', '2018-12-11', 0),
(6, 'cus_6', 'P.D.R.S.Perera', 719507198, 0, 'r@gmail.com', '17', 'college road', 'wadduwa', '', '2018-12-14', 0);

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
(10, 'ms_10', 'ABCD', 'Other_crew', '071577053545852', 0),
(11, 'ms_11', 'A.D.', 'Videographer', '071', 0),
(12, 'ms_12', 'J.K.L.Dissanayaka', 'Other_crew', '0715770535', 0),
(13, 'ms_13', 'dfddr', 'Photographer', '0703174345', 0),
(14, 'ms_14', 'xxs', 'Videographer', '4555555555', 0),
(2, 'ms_2', 'Dilki Sonali', 'Photographer', '', 0),
(3, 'ms_3', 'Dahami Dewmini', 'Photographer', '', 0),
(4, 'ms_4', 'Kasun Chamara', 'Other_crew', '0712131212', 0),
(5, 'ms_5', 'Sujith Krishantha', 'Photographer', '0715770535', 0),
(6, 'ms_6', 'Sandun', 'Photographer', '12364', 0),
(7, 'ms_7', 'K.A.N.Rasanjana', 'Videographer', '0710001125', 0),
(8, 'ms_8', 'A.L.D.D.Perera', 'Photographer', '0719507138', 0),
(9, 'ms_9', 'A.S.D.Perera', 'Videographer', '0717859641', 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(100) NOT NULL,
  `cus_id` varchar(15) NOT NULL,
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

INSERT INTO `event_details` (`id`, `bill_no`, `cus_id`, `category`, `client_name`, `client_contact_no`, `function_date`, `function_time`, `location`, `others`, `crew`, `billing_date`, `deleted_event`) VALUES
(2, '20180401_2', '', 'Wedding', 'Dilki Sonali', '0710322500', '2018-04-02', '20:30:00', 'Panadura', 'Bring Canon 80D and Wide angle lense', '* Kusal Kalhara<br>* Dahami Dewmini<br>* Kasun Chamara<br>', '2018-04-01', 0),
(3, '20180401_3', '', 'Homecomming', 'Dilki Sonali', '0710322500', '2018-04-10', '21:30:00', 'Matara', 'Bring Go Pro and Drone', '* Kusal Kalhara<br>* Dahami Dewmini<br>* Sujith Krishantha<br>', '2018-04-01', 0),
(4, '20180401_4', '', 'Outdoor_Event', 'Sachindu Theminda', '0712255667', '2018-04-15', '23:03:00', 'Galle', 'Go pro and stabilizer', '* Kusal Kalhara<br>* Dilki Sonali<br>* Kasun Chamara<br>', '2018-04-01', 1),
(5, '20180401_5', '', 'Homecomming', 'SADSADASDSD', '1231231232', '2018-04-01', '14:32:00', 'wqeeeeeeeeeeeeeeeeeeeeeeeeeee', 'qweeeeeeeeeeeqweqweqweqweqwewqeqw', '* Kusal Kalhara<br>* Dilki Sonali<br>* Dahami Dewmini<br>* Sujith Krishantha<br>', '2018-04-01', 1),
(6, '20180401_6', '', 'Wedding', 'sadsf', '4646', '2018-04-20', '18:00:00', 'sdfsdf', 'sadsa', '* Kusal Kalhara<br>* Dilki Sonali<br>', '2018-04-01', 1),
(7, '20181208_7', '', 'Outdoor_Event', 'A.L.D.D.Sonali', '0719507755', '2018-12-08', '01:00:00', 'blue water ', '', '* A.D.<br>* dfddr<br>', '2018-12-08', 0),
(8, '20181208_8', '', 'Birthday_Party', 'K.A.S.Rasanjana', '0112452698', '2018-12-25', '17:00:00', 'avana', '', '* ABCD<br>* dfddr<br>', '2018-12-08', 0),
(10, '20181210_1', 'cus_7', 'Engagement', '', '', '0000-00-00', '00:00:00', '', '', '* J.K.L.Dissanayaka<br>* Dahami Dewmini<br>', '2018-12-10', 0),
(11, '20181210_11', '', 'Homecomming', '', '', '0000-00-00', '00:00:00', '', '', '* Kasun Chamara<br>* K.A.N.Rasanjana<br>', '2018-12-10', 0),
(9, '20181210_9', '', 'Homecomming', '', '', '0000-00-00', '00:00:00', '', '', '* ABCD<br>* A.D.<br>* dfddr<br>', '2018-12-10', 0),
(12, '20181211_12', '', 'Engagement', '', '', '0000-00-00', '00:00:00', '', '', '* ABCD<br>* dfddr<br>', '2018-12-11', 0),
(13, '20181211_13', '', 'Homecomming', '', '', '0000-00-00', '00:00:00', '', '', '* ABCD<br>', '2018-12-11', 0),
(14, '20181214_14', '', 'Homecomming', '', '', '0000-00-00', '00:00:00', '', '', '* A.D.<br>* Dilki Sonali<br>* Kasun Chamara<br>', '2018-12-14', 0);

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
(43, '20180401_6', 'Wedding', '2018-04-01', 'sadsf', '4646', '6000', '1000', '5000', 4, 2018, 1),
(44, '20181208_7', 'Outdoor_Event', '2018-12-08', 'A.L.D.D.Sonali', '0719507755', '50000', '5000', '45000', 12, 2018, 0),
(45, '20181208_8', 'Birthday_Party', '2018-12-08', 'K.A.S.Rasanjana', '0112452698', '75000', '20000', '55000', 12, 2018, 0),
(46, '20181210_9', 'Homecomming', '2018-12-10', '', '', '', '', '', 12, 2018, 0),
(47, '20181210_10', 'Engagement', '2018-12-10', '', '', '', '', '', 12, 2018, 0),
(48, '20181210_11', 'Homecomming', '2018-12-10', '', '', '', '', '', 12, 2018, 0),
(49, '20181211_12', 'Engagement', '2018-12-11', '', '', '', '', '', 12, 2018, 0),
(50, '20181211_13', 'Homecomming', '2018-12-11', '', '', '', '', '', 12, 2018, 0),
(51, '20181214_14', 'Homecomming', '2018-12-14', '', '', '', '', '', 12, 2018, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pre_shoot`
--

CREATE TABLE `pre_shoot` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(100) NOT NULL,
  `cus_id` varchar(100) NOT NULL,
  `fun_date` date NOT NULL,
  `time_from` time(6) NOT NULL,
  `time_to` time(6) NOT NULL,
  `no` varchar(11) NOT NULL,
  `road` varchar(50) NOT NULL,
  `city1` varchar(50) NOT NULL,
  `city2` varchar(50) NOT NULL,
  `10x20` int(100) NOT NULL,
  `10x14` int(100) NOT NULL,
  `12x20` int(100) NOT NULL,
  `12x24` int(100) NOT NULL,
  `videography` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'kkalhara2', 'Kusal', 'Kalhara', '7288edd0fc3ffcbe93a0cf06e3568e28521687bc', '2018-11-28 13:21:39', 0),
(3, 'MaxUser_3', 'Dilki', 'Sonali', '9cf4dc82f866d5d5c33ac6396ccd38f4de8860ec', '2018-11-28 13:46:07', 0),
(4, 'MaxUser_4', 'Sisinayani', 'Tennakoon', 'b54f090ea5b037f710910a7e6f201f22419fd049', '0000-00-00 00:00:00', 0),
(5, 'MaxUser_5', 'Sachini', 'Oshadi', 'c8940453ab3fd8162efc76dfd1e09767ebf09f9c', '0000-00-00 00:00:00', 0),
(6, 'MaxUser_6', 'Malki', 'Perera', '4a3b7c3548091d5067f9959d3825ba53c393fb7c', '0000-00-00 00:00:00', 0),
(7, 'mu_7', 'Dilki', 'Sonali', '9cf4dc82f866d5d5c33ac6396ccd38f4de8860ec', '2018-12-24 10:12:26', 0),
(8, 'mu_8', 'Malki', 'Himali', '4a3b7c3548091d5067f9959d3825ba53c393fb7c', '0000-00-00 00:00:00', 0),
(9, 'mu_9', 'Gayara', 'Berugoda', '400f18b4e5dd7812b11f5ced44e2e616d14f167f', '0000-00-00 00:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`);

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
-- Indexes for table `pre_shoot`
--
ALTER TABLE `pre_shoot`
  ADD PRIMARY KEY (`bill_no`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;
--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
