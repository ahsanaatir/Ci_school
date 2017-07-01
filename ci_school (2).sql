-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2017 at 03:47 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `tuition_fee` int(11) NOT NULL,
  `admission_fee` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `session_id`, `name`, `number`, `tuition_fee`, `admission_fee`, `created_on`) VALUES
(1, 1, '10th', 10, 1000, 1000, '2017-06-21 16:00:17');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `site_title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `nick_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `logo_url` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `contact_person_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `full_name`, `nick_name`, `address`, `contact_no`, `mobile_no`, `logo_url`, `slogan`, `slug`, `contact_person_name`, `user_id`, `created_on`) VALUES
(1, 'Hawks School System Mailsi', 'Hawks', 'Quaid-e-Azam Raod Maisi', '0000', '000', '', '', 'hawks', 'azhar', 1, '2017-06-21 15:58:50'),
(2, '', '', '', '', '', '', '', '', '', 0, '2017-06-21 15:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `class_id`, `name`, `description`) VALUES
(1, 1, 'Pinky', 'any');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`id`, `school_id`, `name`, `description`) VALUES
(1, 1, '2017-19', 'any');

-- --------------------------------------------------------

--
-- Table structure for table `students_attendance`
--

CREATE TABLE `students_attendance` (
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '1- present, 0-absent, 2-leave',
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students_leave`
--

CREATE TABLE `students_leave` (
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `leave_reason` varchar(255) NOT NULL,
  `leave_description` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_admission_info`
--

CREATE TABLE `student_admission_info` (
  `student_id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `registration_no` int(11) NOT NULL,
  `date_of_admission` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_admission_info`
--

INSERT INTO `student_admission_info` (`student_id`, `school_id`, `session_id`, `class_id`, `section_id`, `roll_no`, `registration_no`, `date_of_admission`) VALUES
(0, 0, 0, 0, 0, 0, 0, '2017-06-28 18:40:00');

-- --------------------------------------------------------

--
-- Table structure for table `student_family_info`
--

CREATE TABLE `student_family_info` (
  `student_id` int(11) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `father_cnic` varchar(15) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `father_profession` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `family_income` int(11) NOT NULL,
  `religion` varchar(10) NOT NULL,
  `cast` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_family_info`
--

INSERT INTO `student_family_info` (`student_id`, `father_name`, `father_cnic`, `contact_no`, `father_profession`, `address`, `mother_name`, `family_income`, `religion`, `cast`) VALUES
(0, '', '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_fee_info`
--

CREATE TABLE `student_fee_info` (
  `student_id` int(11) NOT NULL,
  `admission_fee` int(11) NOT NULL,
  `tuition_fee` int(11) NOT NULL,
  `prev_dues` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fee_info`
--

INSERT INTO `student_fee_info` (`student_id`, `admission_fee`, `tuition_fee`, `prev_dues`) VALUES
(0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_personal_info`
--

CREATE TABLE `student_personal_info` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `date_of_birth` date NOT NULL,
  `bay_form` varchar(15) NOT NULL,
  `prev_school` varchar(100) NOT NULL,
  `prev_class_name` varchar(50) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_personal_info`
--

INSERT INTO `student_personal_info` (`id`, `full_name`, `gender`, `date_of_birth`, `bay_form`, `prev_school`, `prev_class_name`, `slug`, `create_at`, `user_id`) VALUES
(1, '', '', '0000-00-00', '', '', '', '', '2017-06-28 18:34:42', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'brad@gmail.com', 'brad', 'e10adc3949ba59abbe56e057f20f883e', '2017-04-10 13:14:31'),
(2, 'jdoe@gmail.com', 'john', 'e10adc3949ba59abbe56e057f20f883e', '2017-04-10 14:12:14'),
(3, 'ahsanaatir@gmail.com', 'ahsanaatir', '81dc9bdb52d04dc20036dbd8313ed055', '2017-06-19 18:18:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_attendance`
--
ALTER TABLE `students_attendance`
  ADD PRIMARY KEY (`student_id`,`date`);

--
-- Indexes for table `students_leave`
--
ALTER TABLE `students_leave`
  ADD PRIMARY KEY (`student_id`,`date`);

--
-- Indexes for table `student_family_info`
--
ALTER TABLE `student_family_info`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `student_id_2` (`student_id`),
  ADD KEY `father_name` (`father_name`);

--
-- Indexes for table `student_personal_info`
--
ALTER TABLE `student_personal_info`
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
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student_personal_info`
--
ALTER TABLE `student_personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
