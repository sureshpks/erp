-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 11:07 AM
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
-- Database: `erp_v1`
--

-- --------------------------------------------------------

--
-- Table structure for table `erp_academic`
--

CREATE TABLE `erp_academic` (
  `academic_id` int(11) NOT NULL,
  `academic_year` varchar(100) NOT NULL,
  `academic_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_academic`
--

INSERT INTO `erp_academic` (`academic_id`, `academic_year`, `academic_status`, `user_id_fk`, `date_added`) VALUES
(1, '2022-2023', 0, 1, '2022-05-07 07:52:23'),
(2, '2023-2024', 1, 1, '2022-05-08 09:07:07'),
(3, '2024-2025', 1, 1, '2022-05-08 09:07:13'),
(4, '2025-2026', 1, 1, '2022-05-08 09:07:21'),
(5, '2026-2027', 1, 1, '2022-05-08 09:07:28');

-- --------------------------------------------------------

--
-- Table structure for table `erp_campus`
--

CREATE TABLE `erp_campus` (
  `campus_id` int(11) NOT NULL,
  `campus_name` varchar(255) NOT NULL,
  `campus_address` varchar(255) NOT NULL,
  `principal_name` varchar(255) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_campus`
--

INSERT INTO `erp_campus` (`campus_id`, `campus_name`, `campus_address`, `principal_name`, `mobile_no`, `status`, `user_id_fk`, `date_added`) VALUES
(1, 'test', 'test', 'test', '8776545678', 0, 1, '2022-05-07 07:36:29'),
(2, 'test1', 'test1', 'test1', '8787978979', 0, 1, '2022-05-07 07:30:42');

-- --------------------------------------------------------

--
-- Table structure for table `erp_class`
--

CREATE TABLE `erp_class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `campus_id_fk` int(11) NOT NULL,
  `del_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_class`
--

INSERT INTO `erp_class` (`class_id`, `class_name`, `campus_id_fk`, `del_status`, `user_id_fk`, `date_added`) VALUES
(1, 'PRE KG', 1, 0, 1, '2022-05-09 11:30:06'),
(2, 'LKG', 1, 0, 1, '2022-05-09 11:32:54'),
(3, 'UKG', 1, 0, 1, '2022-05-09 11:33:57'),
(4, 'I', 1, 0, 1, '2022-05-09 11:34:06');

-- --------------------------------------------------------

--
-- Table structure for table `erp_class_section`
--

CREATE TABLE `erp_class_section` (
  `class_section_id` int(11) NOT NULL,
  `class_section_name` varchar(100) NOT NULL,
  `campus_id_fk` int(11) NOT NULL,
  `del_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_class_section`
--

INSERT INTO `erp_class_section` (`class_section_id`, `class_section_name`, `campus_id_fk`, `del_status`, `user_id_fk`, `date_added`) VALUES
(1, 'A', 1, 0, 1, '2022-05-09 12:29:44'),
(2, 'B', 1, 0, 1, '2022-05-09 12:30:03'),
(3, 'C', 1, 0, 1, '2022-05-09 12:30:27'),
(4, 'D', 1, 0, 1, '2022-05-09 12:30:37');

-- --------------------------------------------------------

--
-- Table structure for table `erp_department`
--

CREATE TABLE `erp_department` (
  `department_id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `department_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_department`
--

INSERT INTO `erp_department` (`department_id`, `department`, `department_status`, `user_id_fk`, `date_added`) VALUES
(1, 'Admin', 0, 1, '2022-05-09 01:18:04'),
(2, 'Teacher', 0, 1, '2022-05-09 01:18:44'),
(3, 'Accounts', 0, 1, '2022-05-09 01:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `erp_designation`
--

CREATE TABLE `erp_designation` (
  `designation_id` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `designation_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_designation`
--

INSERT INTO `erp_designation` (`designation_id`, `designation`, `designation_status`, `user_id_fk`, `date_added`) VALUES
(1, 'Teacher', 0, 1, '2022-05-09 01:19:45'),
(2, 'Teaching assistant', 0, 1, '2022-05-09 01:20:00'),
(3, 'Principal', 0, 1, '2022-05-09 01:20:28'),
(4, 'Accountant', 0, 1, '2022-05-09 01:20:45'),
(5, 'Casher', 0, 1, '2022-05-09 01:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `erp_reference`
--

CREATE TABLE `erp_reference` (
  `reference_id` int(11) NOT NULL,
  `reference` varchar(100) NOT NULL,
  `reference_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_reference`
--

INSERT INTO `erp_reference` (`reference_id`, `reference`, `reference_status`, `user_id_fk`, `date_added`) VALUES
(1, 'Staff', 0, 1, '2022-05-09 12:38:52'),
(2, 'Friend', 0, 1, '2022-05-09 12:39:12'),
(3, 'Parent', 1, 1, '2022-05-09 12:40:25');

-- --------------------------------------------------------

--
-- Table structure for table `erp_role`
--

CREATE TABLE `erp_role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erp_role`
--

INSERT INTO `erp_role` (`role_id`, `role_name`, `status`, `date_added`) VALUES
(1, 'Super Admin', 0, '2022-05-07 18:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `erp_source`
--

CREATE TABLE `erp_source` (
  `source_id` int(11) NOT NULL,
  `source` varchar(100) NOT NULL,
  `source_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_source`
--

INSERT INTO `erp_source` (`source_id`, `source`, `source_status`, `user_id_fk`, `date_added`) VALUES
(1, 'Front Office', 0, 1, '2022-05-09 12:48:15'),
(2, 'Website', 0, 1, '2022-05-09 12:48:26');

-- --------------------------------------------------------

--
-- Table structure for table `erp_stream`
--

CREATE TABLE `erp_stream` (
  `stream_id` int(11) NOT NULL,
  `stream_name` varchar(100) NOT NULL,
  `campus_id_fk` int(11) NOT NULL,
  `del_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_stream`
--

INSERT INTO `erp_stream` (`stream_id`, `stream_name`, `campus_id_fk`, `del_status`, `user_id_fk`, `date_added`) VALUES
(1, 'MATRIC', 1, 1, 1, '2022-05-08 10:33:54'),
(2, 'CBSE', 1, 0, 1, '2022-05-08 09:52:29'),
(3, 'ISTREAM', 2, 0, 1, '2022-05-08 09:52:38'),
(4, 'ISTREAM', 1, 0, 1, '2022-05-08 09:55:07'),
(5, 'IGCSE', 1, 0, 1, '2022-05-08 09:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `erp_subject`
--

CREATE TABLE `erp_subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `subject_code` varchar(100) NOT NULL,
  `subject_type` varchar(100) NOT NULL,
  `campus_id_fk` int(11) NOT NULL,
  `class_id_fk` int(11) NOT NULL,
  `stream_id_fk` int(11) NOT NULL,
  `subject_status` tinyint(4) NOT NULL,
  `user_id_fk` int(11) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp_subject`
--

INSERT INTO `erp_subject` (`subject_id`, `subject_name`, `subject_code`, `subject_type`, `campus_id_fk`, `class_id_fk`, `stream_id_fk`, `subject_status`, `user_id_fk`, `date_added`) VALUES
(1, 'Tamil', 'TI001', 'Theory', 1, 4, 2, 0, 1, '2022-05-09 02:06:56'),
(2, 'ENGLIST', 'ENG001', 'Theory', 1, 4, 2, 0, 1, '2022-05-09 02:07:50');

-- --------------------------------------------------------

--
-- Table structure for table `erp_user`
--

CREATE TABLE `erp_user` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `erp_user`
--

INSERT INTO `erp_user` (`user_id`, `role_id`, `username`, `password`, `name`, `email`, `status`, `date_added`) VALUES
(1, 1, 'Admin', 'Admin@123', 'Super Admin', 'admin@gmail.com', 0, '2022-03-15 18:45:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `erp_academic`
--
ALTER TABLE `erp_academic`
  ADD PRIMARY KEY (`academic_id`);

--
-- Indexes for table `erp_campus`
--
ALTER TABLE `erp_campus`
  ADD PRIMARY KEY (`campus_id`);

--
-- Indexes for table `erp_class`
--
ALTER TABLE `erp_class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `erp_class_section`
--
ALTER TABLE `erp_class_section`
  ADD PRIMARY KEY (`class_section_id`);

--
-- Indexes for table `erp_department`
--
ALTER TABLE `erp_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `erp_designation`
--
ALTER TABLE `erp_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `erp_reference`
--
ALTER TABLE `erp_reference`
  ADD PRIMARY KEY (`reference_id`);

--
-- Indexes for table `erp_role`
--
ALTER TABLE `erp_role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `erp_source`
--
ALTER TABLE `erp_source`
  ADD PRIMARY KEY (`source_id`);

--
-- Indexes for table `erp_stream`
--
ALTER TABLE `erp_stream`
  ADD PRIMARY KEY (`stream_id`);

--
-- Indexes for table `erp_subject`
--
ALTER TABLE `erp_subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `erp_user`
--
ALTER TABLE `erp_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `erp_academic`
--
ALTER TABLE `erp_academic`
  MODIFY `academic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `erp_campus`
--
ALTER TABLE `erp_campus`
  MODIFY `campus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `erp_class`
--
ALTER TABLE `erp_class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `erp_class_section`
--
ALTER TABLE `erp_class_section`
  MODIFY `class_section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `erp_department`
--
ALTER TABLE `erp_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `erp_designation`
--
ALTER TABLE `erp_designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `erp_reference`
--
ALTER TABLE `erp_reference`
  MODIFY `reference_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `erp_role`
--
ALTER TABLE `erp_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `erp_source`
--
ALTER TABLE `erp_source`
  MODIFY `source_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `erp_stream`
--
ALTER TABLE `erp_stream`
  MODIFY `stream_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `erp_subject`
--
ALTER TABLE `erp_subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `erp_user`
--
ALTER TABLE `erp_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
