-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 02:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leave_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `asignatory_list`
--

CREATE TABLE `asignatory_list` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asignatory_list`
--

INSERT INTO `asignatory_list` (`id`, `name`, `description`, `date_created`, `date_updated`) VALUES
(1, 'DIOSDADO I. CAYABYAB', 'Assistant Schools Division Superintendent', '2023-04-19 09:24:13', NULL),
(6, 'CRISELDA G. OCANG', 'Assistant Schools Division Superintendent', '2023-04-20 13:19:24', NULL),
(7, 'FATIMA R. BOADO', 'Officer-in-Charge, Schools Division Superintendent', '2023-04-20 13:20:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_list`
--

CREATE TABLE `department_list` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department_list`
--

INSERT INTO `department_list` (`id`, `name`, `description`, `date_created`, `date_updated`) VALUES
(1, 'HR Department', 'Human Resource Department', '2021-08-21 10:13:45', NULL),
(2, 'IT Department', 'Information Technology Department', '2021-08-21 10:16:06', NULL),
(4, 'Asset Management Unit', 'Asset Management Unit Supply', '2023-04-11 11:31:10', NULL),
(9, 'sample department', 'sample description', '2023-05-09 13:58:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designation_list`
--

CREATE TABLE `designation_list` (
  `id` int(30) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation_list`
--

INSERT INTO `designation_list` (`id`, `name`, `description`, `date_created`, `date_updated`) VALUES
(1, 'Staff', 'Office Clerk', '2021-08-21 10:22:03', NULL),
(2, 'Programmer', 'Programmer', '2021-08-21 10:22:35', NULL),
(5, 'Administrative Officer IV', 'Supply Officer in charge', '2023-04-11 11:32:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_meta`
--

CREATE TABLE `employee_meta` (
  `user_id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_meta`
--

INSERT INTO `employee_meta` (`user_id`, `meta_field`, `meta_value`, `date_created`) VALUES
(16, 'type', '3', '2023-04-11 15:10:26'),
(16, 'employee_id', '0000155', '2023-04-11 15:10:26'),
(16, 'firstname', 'NICOLE BRANDON', '2023-04-11 15:10:26'),
(16, 'middlename', 'VIRAY', '2023-04-11 15:10:26'),
(16, 'lastname', 'DECENA', '2023-04-11 15:10:26'),
(16, 'dob', '1996-09-03', '2023-04-11 15:10:26'),
(16, 'contact', '09685013431', '2023-04-11 15:10:26'),
(16, 'address', '378 Pangapisan North Lingayen, Pangasinan', '2023-04-11 15:10:26'),
(16, 'department_id', '2', '2023-04-11 15:10:26'),
(16, 'designation_id', '2', '2023-04-11 15:10:26'),
(16, 'username', 'nicole.decena', '2023-04-11 15:10:26'),
(16, 'approver', 'off', '2023-04-11 15:10:26'),
(17, 'type', '3', '2023-04-12 10:56:35'),
(17, 'employee_id', '100023', '2023-04-12 10:56:35'),
(17, 'firstname', 'Kenneth Rey', '2023-04-12 10:56:35'),
(17, 'middlename', 'Rallustian', '2023-04-12 10:56:35'),
(17, 'lastname', 'Tablang', '2023-04-12 10:56:35'),
(17, 'dob', '2001-06-12', '2023-04-12 10:56:35'),
(17, 'contact', '09958123933', '2023-04-12 10:56:35'),
(17, 'address', 'Brgy. Bolaney alaminos city pangasinan', '2023-04-12 10:56:35'),
(17, 'department_id', '2', '2023-04-12 10:56:35'),
(17, 'designation_id', '2', '2023-04-12 10:56:35'),
(17, 'username', '100023', '2023-04-12 10:56:35'),
(17, 'approver', 'off', '2023-04-12 10:56:35'),
(17, 'leave_type_ids', '12,16,6,8,17,13,15,7,14,10,9,11,18,5', '2023-04-12 10:56:41'),
(17, 'leave_type_credits', '{\"12\":\"20\",\"16\":\"20\",\"6\":\"20\",\"8\":\"120\",\"17\":\"30\",\"13\":\"50\",\"15\":\"30\",\"7\":\"20\",\"14\":\"20\",\"10\":\"20\",\"9\":\"20\",\"11\":\"300\",\"18\":\"30\",\"5\":\"20\"}', '2023-04-12 10:56:41'),
(19, 'type', '3', '2023-04-24 10:39:15'),
(19, 'employee_id', '100024', '2023-04-24 10:39:15'),
(19, 'firstname', 'Rey', '2023-04-24 10:39:15'),
(19, 'middlename', 'Rallustian', '2023-04-24 10:39:15'),
(19, 'lastname', 'Tablang', '2023-04-24 10:39:15'),
(19, 'dob', '2002-08-30', '2023-04-24 10:39:15'),
(19, 'contact', '09998762222', '2023-04-24 10:39:15'),
(19, 'address', 'Brgy Baay Lingayen, Pangasinan', '2023-04-24 10:39:15'),
(19, 'department_id', '4', '2023-04-24 10:39:15'),
(19, 'designation_id', '5', '2023-04-24 10:39:15'),
(19, 'username', 'rey', '2023-04-24 10:39:15'),
(19, 'approver', 'off', '2023-04-24 10:39:15'),
(19, 'leave_type_ids', '12,16,6,8,17,13,15,7,14,10,9,11,18,5', '2023-04-24 10:39:21'),
(19, 'leave_type_credits', '{\"12\":\"20\",\"16\":\"20\",\"6\":\"20\",\"8\":\"120\",\"17\":\"30\",\"13\":\"50\",\"15\":\"30\",\"7\":\"20\",\"14\":\"20\",\"10\":\"20\",\"9\":\"20\",\"11\":\"300\",\"18\":\"30\",\"5\":\"20\"}', '2023-04-24 10:39:21'),
(16, 'leave_type_ids', '12,16,6,8,17,13,15,7,14,10,9,11,18,5', '2023-04-25 15:30:31'),
(16, 'leave_type_credits', '{\"12\":\"20\",\"16\":\"28\",\"6\":\"20\",\"8\":\"120\",\"17\":\"30\",\"13\":\"50\",\"15\":\"30\",\"7\":\"20\",\"14\":\"20\",\"10\":\"20\",\"9\":\"20\",\"11\":\"300\",\"18\":\"30\",\"5\":\"20\"}', '2023-04-25 15:30:31'),
(21, 'type', '3', '2023-05-08 09:38:58'),
(21, 'employee_id', '100025', '2023-05-08 09:38:58'),
(21, 'firstname', 'Sample First', '2023-05-08 09:38:58'),
(21, 'middlename', 'SampleMiddle', '2023-05-08 09:38:58'),
(21, 'lastname', 'SampleLast', '2023-05-08 09:38:58'),
(21, 'dob', '2001-06-12', '2023-05-08 09:38:58'),
(21, 'contact', '09958123933', '2023-05-08 09:38:58'),
(21, 'address', 'Sample Address', '2023-05-08 09:38:58'),
(21, 'department_id', '2', '2023-05-08 09:38:58'),
(21, 'designation_id', '1', '2023-05-08 09:38:58'),
(21, 'username', 'sampleusername', '2023-05-08 09:38:58'),
(21, 'approver', 'off', '2023-05-08 09:38:58'),
(21, 'leave_type_ids', '12,16,6,8,17,13,15,7,14,10,9,11,18,5', '2023-05-08 09:39:03'),
(21, 'leave_type_credits', '{\"12\":\"20\",\"16\":\"20\",\"6\":\"20\",\"8\":\"120\",\"17\":\"30\",\"13\":\"50\",\"15\":\"30\",\"7\":\"20\",\"14\":\"20\",\"10\":\"20\",\"9\":\"20\",\"11\":\"300\",\"18\":\"30\",\"5\":\"20\"}', '2023-05-08 09:39:03'),
(22, 'type', '3', '2023-05-10 09:01:43'),
(22, 'employee_id', '100026', '2023-05-10 09:01:43'),
(22, 'firstname', 'Cardo', '2023-05-10 09:01:43'),
(22, 'middlename', 'D', '2023-05-10 09:01:43'),
(22, 'lastname', 'Dalisay', '2023-05-10 09:01:43'),
(22, 'dob', '1998-02-12', '2023-05-10 09:01:43'),
(22, 'contact', '09958123933', '2023-05-10 09:01:43'),
(22, 'address', 'Baay', '2023-05-10 09:01:43'),
(22, 'department_id', '4', '2023-05-10 09:01:43'),
(22, 'designation_id', '5', '2023-05-10 09:01:43'),
(22, 'username', '100026', '2023-05-10 09:01:43'),
(22, 'approver', 'off', '2023-05-10 09:01:43'),
(22, 'leave_type_ids', '12,16,6,8,17,13,15,7,14,10,9,11,18,5', '2023-05-10 09:02:53'),
(22, 'leave_type_credits', '{\"12\":\"20\",\"16\":\"20\",\"6\":\"20\",\"8\":\"120\",\"17\":\"30\",\"13\":\"50\",\"15\":\"30\",\"7\":\"20\",\"14\":\"20\",\"10\":\"20\",\"9\":\"20\",\"11\":\"300\",\"18\":\"30\",\"5\":\"20\"}', '2023-05-10 09:02:53'),
(23, 'type', '3', '2023-05-10 09:22:26'),
(23, 'employee_id', '0000195', '2023-05-10 09:22:26'),
(23, 'firstname', 'Cardo ', '2023-05-10 09:22:26'),
(23, 'middlename', 'h', '2023-05-10 09:22:26'),
(23, 'lastname', 'Vrassr', '2023-05-10 09:22:26'),
(23, 'dob', '1995-02-17', '2023-05-10 09:22:26'),
(23, 'contact', '032323265656', '2023-05-10 09:22:26'),
(23, 'address', 'afasfaddafafad', '2023-05-10 09:22:26'),
(23, 'department_id', '2', '2023-05-10 09:22:26'),
(23, 'designation_id', '1', '2023-05-10 09:22:26'),
(23, 'username', '0000195', '2023-05-10 09:22:26'),
(23, 'approver', 'off', '2023-05-10 09:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `id` int(30) NOT NULL,
  `user_id` int(30) NOT NULL,
  `leave_type_id` int(30) DEFAULT NULL,
  `reason` text NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `type` tinyint(1) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=pending,1=approved, 2=denied,3=cancelled',
  `approved_by` int(30) DEFAULT NULL,
  `leave_days` float NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`id`, `user_id`, `leave_type_id`, `reason`, `date_start`, `date_end`, `type`, `status`, `approved_by`, `leave_days`, `date_created`, `date_updated`) VALUES
(12, 17, 16, 'no reason', '2023-04-13 00:00:00', '2023-04-14 00:00:00', 1, 1, 1, 2, '2023-04-12 11:04:56', '2023-04-12 11:06:00'),
(14, 17, 16, 'eqewdw', '2023-04-21 00:00:00', '2023-04-25 00:00:00', 1, 1, 1, 5, '2023-04-20 15:20:29', '2023-04-20 15:20:40'),
(18, 17, 15, 'no reasonhh', '2023-04-20 00:00:00', '2023-04-20 00:00:00', 1, 1, 1, 1, '2023-04-24 13:14:31', '2023-05-05 16:24:57'),
(19, 17, 6, 'asdas', '2023-05-16 00:00:00', '2023-05-26 00:00:00', 1, 0, NULL, 11, '2023-05-05 16:28:07', NULL),
(20, 22, 5, 'dfghjkl', '2023-05-16 00:00:00', '2023-05-17 00:00:00', 1, 1, 1, 2, '2023-05-10 09:04:55', '2023-05-10 09:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` int(30) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `default_credit` float NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `iterate_year` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `code`, `name`, `description`, `default_credit`, `status`, `date_created`, `date_updated`, `iterate_year`) VALUES
(5, 'VL', 'Vacation Leave', 'Sec. 51, Rule XVI, Omnibus Rules Implementing E.O. No. 292', 20, 1, '2023-04-12 08:33:17', '2023-05-10 10:47:43', 1),
(6, 'M/FL', 'Mandatory/Forced Leave', 'Sec. 25, Rule XVI, Omnibus Rules Implementing E.O. 292', 5, 1, '2023-04-12 08:36:45', '2023-05-10 10:19:02', 0),
(7, 'SL', 'Sick Leave', 'Sec. 43, Rule XVI, Omnibus Rules Implementing E.O. No. 292', 20, 1, '2023-04-12 08:37:57', '2023-05-10 10:49:51', 1),
(8, 'ML', 'Maternity Leave', 'R.A. No. 11210 / IRR issued by CSC, DOLE and SSS', 105, 1, '2023-04-12 09:05:27', '2023-05-10 10:19:42', 0),
(9, 'Spec. Priv. ', 'Special Privilege Leave', 'Sec. 21, Rule XVI, Omnibus Rules Implementing E.O. No. 292', 3, 1, '2023-04-12 09:07:29', '2023-05-10 10:21:56', 0),
(10, 'Solo Par.', 'Solo Parent Leave ', 'R.A. No 8972 / CSC MC No. 8, s. 2004', 7, 1, '2023-04-12 09:13:06', '2023-05-10 10:22:24', 0),
(11, 'Stud. L.', 'Study Leave', 'Sec. 68, Rule XVI, Omnibus Rules Implementing E.O. No. 292', 60, 1, '2023-04-12 09:14:35', '2023-05-10 10:22:48', 0),
(12, '10-D VAWC L', '10-Day VAWC Leave', 'R,A. No. 9262 / CSC MC No. 15, s 2005', 10, 1, '2023-04-12 09:15:57', '2023-05-10 10:23:07', 0),
(13, 'Rehab. Priv.', 'Rehabilitation Privilege', 'Sec. 55, Rule XVI, Omnibus Rules Implementing E.O. No. 292', 180, 1, '2023-04-12 09:17:09', '2023-05-10 10:24:25', 0),
(14, 'SLBW', 'Special Leave Benefit for Women', 'R.A. No. 9710 / CSC MC No. 25, s. 2010 ', 60, 1, '2023-04-12 09:19:08', '2023-05-10 10:26:47', 0),
(15, 'SECL', 'Special Emergency/Calamity Leave', 'CSC MC No. 2, 2012, as amended', 5, 1, '2023-04-12 09:20:10', '2023-05-10 10:27:11', 0),
(16, 'Adoption Leave', 'Adoption Leave', 'R.A. No. 8552', 60, 1, '2023-04-12 09:20:51', '2023-05-10 10:27:23', 0),
(17, 'Monetization of Leave Credits', 'Monetization of Leave Credits', 'Monetization of Leave Credits', 30, 1, '2023-04-12 09:22:33', '2023-04-12 10:30:58', 0),
(18, 'Terminal Leave', 'Terminal Leave', 'Terminal Leave', 30, 1, '2023-04-12 09:23:00', '2023-04-12 10:30:10', 0),
(19, 'PL', 'Paternity Leave', '(R.A. No. 8187 / CSC MC)', 7, 1, '2023-05-10 10:21:16', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', 'DEPED SDO1 Leave Management System'),
(6, 'short_name', 'SDO1 Pangasinan - LMS'),
(11, 'logo', 'uploads/1681178700_sdo1 logo.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/1681178700_sdo1building.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `date_added`, `date_updated`) VALUES
(1, 'Administrator', NULL, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/1681196880_243444773_228417245998590_5133413802818623704_n-removebg-preview.png', NULL, 1, '2021-01-20 14:02:37', '2023-04-11 15:08:26'),
(16, 'NICOLE BRANDON', 'VIRAY', 'DECENA', 'nicole.decena', '42603334c3a9e504e99a2330c6783ca0', 'uploads/16_user.jpg', NULL, 3, '2023-04-11 15:10:26', '2023-04-11 15:13:03'),
(17, 'Kenneth Rey', 'Rallustian', 'Tablang', '100023', '65feb6b8c9726133b18ac2f2ac26e8bc', 'uploads/17_user.jpg', NULL, 3, '2023-04-12 10:56:35', '2023-04-12 10:56:35'),
(18, 'NICOLE BRANDON', NULL, 'Decena', 'brandon.staff', '42603334c3a9e504e99a2330c6783ca0', 'uploads/1681969260_341715703_619743222969525_4810211825539176523_n.jpg', NULL, 2, '2023-04-20 13:41:32', NULL),
(19, 'Rey', 'Rallustian', 'Tablang', 'rey', 'a6b83cd033881e4b7e0ade6add26a17b', NULL, NULL, 3, '2023-04-24 10:39:15', NULL),
(21, 'Sample First', 'SampleMiddle', 'SampleLast', 'sampleusername', 'e55a28b1bf2a323456ea0b7e759d6108', NULL, NULL, 3, '2023-05-08 09:38:58', NULL),
(22, 'Cardo', 'D', 'Dalisay', '100026', '808d45ab3ba50fe7576f6974f18244d3', NULL, NULL, 3, '2023-05-10 09:01:43', NULL),
(23, 'Cardo ', 'h', 'Vrassr', '0000195', 'e173fe717c9549d42f00ee147c863bde', NULL, NULL, 3, '2023-05-10 09:22:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asignatory_list`
--
ALTER TABLE `asignatory_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_list`
--
ALTER TABLE `department_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_list`
--
ALTER TABLE `designation_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_meta`
--
ALTER TABLE `employee_meta`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `leave_type_id` (`leave_type_id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
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
-- AUTO_INCREMENT for table `asignatory_list`
--
ALTER TABLE `asignatory_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department_list`
--
ALTER TABLE `department_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `designation_list`
--
ALTER TABLE `designation_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_meta`
--
ALTER TABLE `employee_meta`
  ADD CONSTRAINT `employee_meta_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD CONSTRAINT `leave_applications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `leave_applications_ibfk_2` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_types` (`id`) ON DELETE SET NULL ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
