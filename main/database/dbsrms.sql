-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 09:31 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accesscode`
--

CREATE TABLE `tbl_accesscode` (
  `code_id` int(11) NOT NULL,
  `code` int(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_accesscode`
--

INSERT INTO `tbl_accesscode` (`code_id`, `code`, `department`, `quantity`) VALUES
(2, 54256845, 'DTP- Department of Technical Program', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_anno`
--

CREATE TABLE `tbl_anno` (
  `anno_id` int(11) NOT NULL,
  `anno_from` varchar(50) NOT NULL,
  `anno_to` varchar(50) NOT NULL,
  `anno_what` varchar(500) NOT NULL,
  `anno_when` varchar(500) NOT NULL,
  `anno_where` varchar(500) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_anno`
--

INSERT INTO `tbl_anno` (`anno_id`, `anno_from`, `anno_to`, `anno_what`, `anno_when`, `anno_where`, `Date`, `time`) VALUES
(1, 'RPC', 'DTP', 'We will have consultation this afternoon!', 'July 15,2021', 'Online gmeet code - 2df5es54', 'July 15, 2021', ''),
(2, 'RPC', 'Department of Technical Program', 'Orientation for Capstone 1', 'July 22, 2021', 'Virtual Meet using Gmeet code q23gddg3f4', 'July 15, 2021', ''),
(3, 'RPC', 'Department of Social Studies', 'Orientation for Thesis', 'August 20, 2021', 'Vitual Meet using Zoom code 245dse56w4e', 'July 15, 2021', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dep`
--

CREATE TABLE `tbl_dep` (
  `dep_id` int(11) NOT NULL,
  `dep_name` varchar(50) NOT NULL,
  `dep_head` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dep`
--

INSERT INTO `tbl_dep` (`dep_id`, `dep_name`, `dep_head`) VALUES
(1, 'Department of Arts and Sciences', 'IDK'),
(2, 'Department of Criminal Justice Education', 'IDK'),
(3, 'Department of Teachers Education', 'IDK'),
(4, 'Department of Technical Program', 'Cyvil Dasargo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `stud_id` int(11) NOT NULL,
  `group_name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `yearlevel` varchar(100) NOT NULL,
  `name1` varchar(100) NOT NULL,
  `cn1` varchar(15) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `cn2` varchar(15) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `name3` varchar(100) NOT NULL,
  `cn3` varchar(15) NOT NULL,
  `email3` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`stud_id`, `group_name`, `department`, `yearlevel`, `name1`, `cn1`, `email1`, `name2`, `cn2`, `email2`, `name3`, `cn3`, `email3`, `pass`) VALUES
(1, 'SRMS Team', 'Department of Technical Program', 'fiat', 'Darlene Tumulak', '', 'naomiroa.143@gmail.com', 'Dan Michael Ladeza', '', 'efchi.borinaga@gmail.com', 'Dan Michael Ladeza', '', 'thefrigginnerd@gmail.com', '723485420d8292614799281ed6a595f2'),
(2, 'SRMS Team', '', 'volvo', 'Darlene Tumulak', '', '143@gmail.com', 'dssssssss', '', 'dsdsd', 'dssssssss', '', 'sdsdsd', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `teach_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `usertype` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`teach_id`, `name`, `address`, `contact`, `email`, `dept`, `usertype`, `username`, `password`) VALUES
(1, 'Darlene Tumulak', 'Sambas Mc Arthur Highway', '09457912305', 'naomiroa.143@gmail.com', 'DTP- Department of Technical Program', 0, 'BabyLovesRice', '202cb962ac59075b964b'),
(2, 'Research and Publication Center', 'Digos City', '084-546254', 'rpc@gmail.com', 'Office of RPC', 1, 'rpcdigos12', 'd2530935be290ff2b3fad8181e4badc9');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlog`
--

CREATE TABLE `tbl_userlog` (
  `ul_log` int(11) NOT NULL,
  `em_uname` varchar(50) NOT NULL,
  `em_pass` varchar(50) NOT NULL,
  `date_time` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userlog`
--

INSERT INTO `tbl_userlog` (`ul_log`, `em_uname`, `em_pass`, `date_time`, `type`) VALUES
(1, 'rpcdigos12', 'yes', '2021-07-21 19:18:32', 'Admin'),
(2, 'rpcdigos12', 'd2530935be290ff2b3fad8181e4badc9', '2021-07-21 19:19:30', 'Admin'),
(3, '', '723485420d8292614799281ed6a595f2', '2021-07-23 16:31:02', 'Student'),
(4, '', '33e78d60bc1f9dcc7291c891e6f069e4', '2021-07-23 16:31:18', 'Student'),
(5, '', '723485420d8292614799281ed6a595f2', '2021-07-23 16:33:30', 'Student'),
(6, '', 'b52c96bea30646abf8170f333bbd42b9', '2021-07-23 16:33:39', 'Student'),
(7, '', 'b52c96bea30646abf8170f333bbd42b9', '2021-07-23 16:39:21', 'Student'),
(8, '', 'd29aaa0b9cd402b4bfe2395a805f9ada', '2021-07-23 16:39:29', 'Student'),
(9, '', '202cb962ac59075b964b07152d234b70', '2021-07-23 16:41:43', 'Student'),
(10, '', '8d509c28896865f8640f328f30f15721', '2021-07-23 16:41:54', 'Student'),
(11, 'rpcdigos12', '33e78d60bc1f9dcc7291c891e6f069e4', '2021-07-23 16:43:19', 'Admin'),
(12, '', '723485420d8292614799281ed6a595f2', '2021-07-23 16:49:57', 'Student'),
(13, '', 'd58e3582afa99040e27b92b13c8f2280', '2021-07-23 16:50:04', 'Student'),
(14, '', '89defae676abd3e3a42b41df17c40096', '2021-07-23 16:50:37', 'Student'),
(15, '', 'f2126adacf65201d392fc53ef3100b22', '2021-07-23 16:55:45', 'Student'),
(16, '', '8d509c28896865f8640f328f30f15721', '2021-07-23 16:55:55', 'Student'),
(17, '', '29c37d6f631beeadb5fd63b63e7c4acd', '2021-07-23 16:56:09', 'Student'),
(18, '', '723485420d8292614799281ed6a595f2', '2021-07-23 17:25:03', 'Student'),
(19, '', 'dc3291fbf48814017b187f0ac5b0a2fc', '2021-07-23 17:26:58', 'Student'),
(20, 'naomiroa.143@gmail.com', '11ddbaf3386aea1f2974eee984542152', '2021-07-23 18:37:03', 'Student'),
(21, 'naomiroa.143@gmail.com', '11ddbaf3386aea1f2974eee984542152', '2021-07-23 18:37:31', 'Student'),
(22, 'naomiroa.143@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2021-07-23 18:38:47', 'Student'),
(23, 'naomiroa.143@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2021-07-23 18:39:40', 'Student'),
(24, 'naomiroa.143@gmail.com', 'ec37aa25501f5aea74d5eb3d19b08333', '2021-07-23 18:40:33', 'Student'),
(25, 'naomiroa.143@gmail.com', '12075f8459499dd19b4bc0eed7ccbf39', '2021-07-23 18:41:36', 'Student'),
(26, 'naomiroa.143@gmail.com', '3b4d2ef5c662708ac29036dcbc5d02e6', '2021-07-23 19:23:35', 'Student'),
(27, 'naomiroa.143@gmail.com', '3b4d2ef5c662708ac29036dcbc5d02e6', '2021-07-23 19:24:57', 'Student'),
(28, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 19:25:53', 'Student'),
(29, 'rpcdigos12', 'd2530935be290ff2b3fad8181e4badc9', '2021-07-23 19:31:09', 'Admin'),
(30, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 19:34:16', 'Student'),
(31, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 19:34:46', 'Student'),
(32, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 20:43:42', 'Student'),
(33, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 20:56:58', 'Student'),
(34, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 20:59:45', 'Student'),
(35, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 21:00:10', 'Student'),
(36, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 21:00:24', 'Student'),
(37, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 21:02:15', 'Student'),
(38, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 21:03:03', 'Student'),
(39, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 21:03:17', 'Student'),
(40, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 21:03:37', 'Student'),
(41, 'naomiroa.143@gmail.com', '723485420d8292614799281ed6a595f2', '2021-07-23 21:03:45', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accesscode`
--
ALTER TABLE `tbl_accesscode`
  ADD PRIMARY KEY (`code_id`);

--
-- Indexes for table `tbl_anno`
--
ALTER TABLE `tbl_anno`
  ADD PRIMARY KEY (`anno_id`);

--
-- Indexes for table `tbl_dep`
--
ALTER TABLE `tbl_dep`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`teach_id`);

--
-- Indexes for table `tbl_userlog`
--
ALTER TABLE `tbl_userlog`
  ADD PRIMARY KEY (`ul_log`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accesscode`
--
ALTER TABLE `tbl_accesscode`
  MODIFY `code_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_anno`
--
ALTER TABLE `tbl_anno`
  MODIFY `anno_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_dep`
--
ALTER TABLE `tbl_dep`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `teach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_userlog`
--
ALTER TABLE `tbl_userlog`
  MODIFY `ul_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
