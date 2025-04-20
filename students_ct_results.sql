-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2025 at 12:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_ct_results`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'sdec@123');

-- --------------------------------------------------------

--
-- Table structure for table `first_ct`
--

CREATE TABLE `first_ct` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` int(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `enroll_no` int(100) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `max_mark` int(100) NOT NULL,
  `first_sub_name` varchar(255) NOT NULL,
  `first_sub_code` varchar(100) NOT NULL,
  `first_sub_mark` int(100) NOT NULL,
  `second_sub_name` varchar(255) NOT NULL,
  `second_sub_code` varchar(100) NOT NULL,
  `second_sub_mark` int(100) NOT NULL,
  `third_sub_name` varchar(255) NOT NULL,
  `third_sub_code` varchar(255) NOT NULL,
  `third_sub_mark` int(100) NOT NULL,
  `fourth_sub_name` varchar(255) NOT NULL,
  `fourth_sub_code` varchar(255) NOT NULL,
  `fourth_sub_mark` int(100) NOT NULL,
  `fifth_sub_name` varchar(255) NOT NULL,
  `fifth_sub_code` varchar(255) NOT NULL,
  `fifth_sub_mark` int(100) NOT NULL,
  `sixth_sub_name` varchar(255) NOT NULL,
  `sixth_sub_code` varchar(255) NOT NULL,
  `sixth_sub_mark` int(100) NOT NULL,
  `total_max_mark` int(100) NOT NULL,
  `total_obt_mark` int(100) NOT NULL,
  `total_sub` int(100) NOT NULL,
  `percentage` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `first_ct`
--

INSERT INTO `first_ct` (`id`, `name`, `roll_no`, `course`, `father_name`, `mother_name`, `dob`, `gender`, `enroll_no`, `college_name`, `max_mark`, `first_sub_name`, `first_sub_code`, `first_sub_mark`, `second_sub_name`, `second_sub_code`, `second_sub_mark`, `third_sub_name`, `third_sub_code`, `third_sub_mark`, `fourth_sub_name`, `fourth_sub_code`, `fourth_sub_mark`, `fifth_sub_name`, `fifth_sub_code`, `fifth_sub_mark`, `sixth_sub_name`, `sixth_sub_code`, `sixth_sub_mark`, `total_max_mark`, `total_obt_mark`, `total_sub`, `percentage`, `result`, `division`) VALUES
(1, 'Rahul Kumar', 22024001, '', 'Ram', 'Rashmi', '01/01/2001', 'Male', 402, 'Sunder Deep Engineering College', 25, 'Mathematics-II', 'BCA-201', 22, 'C-Programming', 'BCA-202', 18, 'Organization Behavior', 'BCA-203', 23, 'Digital Electronics and Computer Organisation', 'BCA-204', 15, 'Financial Accounting and Management', 'BCA-205', 21, 'Computer Laboratory and Practical Work of C', 'BCA-206', 19, 150, 123, 6, '78', 'Pass', 'First'),
(2, 'dsdsdd', 54345, '', 'dsrrr', 'rwrwrr', '', '', 0, 'wer', 0, 'dfsdf', 'sdfsf', 3332, 'cvxc', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 0, 0, 0, '', '', ''),
(3, 'fgsdgsg', 343453, '', 'sdfgdsgs', 'sdfgdgs', '2025-03-13', 'male', 345353, 'sdgfdg', 0, 'sdgsgs', 'sdg34', 43, 'sdfgdgs', 'dfgd34', 343, 'dfgdsg', '', 43, 'dgsggf', 'df34', 43, 'sdgdsfgg', 'df33', 42, 'sdgdg', 'sdfg34', 5453, 343, 352, 5, '5', 'sdgf', 'sdfg'),
(4, 'fdsfsfs', 342424, '', 'sdfsdfsf', 'sdfsfsfs', '2025-03-12', 'male', 324324, 'fsfsf', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, '', '', 0, 434, 2423, 32, '32', 'fsd', 'sdfds'),
(5, 'DSFSDF', 343, '', 'sdfsdfsf', 'adsfsadfa', '2025-03-06', 'male', 0, 'safsfasdf', 0, 'dfsdf', 'sdfsf', 34, 'cvxc', 'dfgd34', 34, 'dfgdsg', '34', 34, 'GSDG', 'df34', 434, 'DFG', 'df33', 43, 'SFGSGF', 'sdfg34', 43, 34, 322, 5, '67', 'GHJKG', 'GIGU'),
(6, 'Raj Kumar Sharma', 2147483647, '', 'Brahma Sharma', 'Sursati Devi', '2001-08-21', 'male', 2147483647, 'Sunder Deep Engineering College, Ghaziabad', 0, 'C Programming', 'BCA-201', 21, 'Organization Behaviour', 'BCA-202', 17, 'Web Technology', 'BCA-203', 23, 'DECO', 'BCA-204', 20, 'Mathematics', 'BCA-205', 16, 'Financial Accountment', 'BCA-206', 16, 150, 128, 6, '85', 'Pass', 'First');

-- --------------------------------------------------------

--
-- Table structure for table `mca_4th_sem`
--

CREATE TABLE `mca_4th_sem` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `roll_no` bigint(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `enroll_no` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `max_mark` int(100) NOT NULL,
  `first_sub_name` varchar(100) NOT NULL,
  `first_sub_code` varchar(100) NOT NULL,
  `first_sub_mark` varchar(100) NOT NULL,
  `second_sub_name` varchar(100) NOT NULL,
  `second_sub_code` varchar(100) NOT NULL,
  `second_sub_mark` varchar(100) NOT NULL,
  `third_sub_name` varchar(100) NOT NULL,
  `third_sub_code` varchar(100) NOT NULL,
  `third_sub_mark` varchar(100) NOT NULL,
  `total_max_mark` int(100) NOT NULL,
  `total_obt_mark` int(100) NOT NULL,
  `total_sub` int(100) NOT NULL,
  `percentage` varchar(100) NOT NULL,
  `result` varchar(100) NOT NULL,
  `division` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mca_4th_sem`
--

INSERT INTO `mca_4th_sem` (`id`, `name`, `roll_no`, `course`, `father_name`, `mother_name`, `dob`, `gender`, `enroll_no`, `college_name`, `max_mark`, `first_sub_name`, `first_sub_code`, `first_sub_mark`, `second_sub_name`, `second_sub_code`, `second_sub_mark`, `third_sub_name`, `third_sub_code`, `third_sub_mark`, `total_max_mark`, `total_obt_mark`, `total_sub`, `percentage`, `result`, `division`) VALUES
(1, 'Deshu Kumar', 1231312313, 'MCA 4th Sem', 'AADESH GOYEL', ' KAMINI GOYEL', '2025-04-24', 'male', '', 'Sunder Deep Engineering College, Ghaziabad', 30, 'Software Quality Engineering', 'KCA035', '5', 'Distributed Database System', 'KCA045', 'AB', 'Mobile Computing', 'KCA051', '9', 90, 14, 3, '15.555555555556', 'Fail', 'None'),
(2, 'Deshu Kumar', 1231312313, 'MCA 4th Sem', 'AADESH GOYEL', ' KAMINI GOYEL', '2025-04-24', 'male', '', 'Sunder Deep Engineering College, Ghaziabad', 30, 'Software Quality Engineering', 'KCA035', '5', 'Distributed Database System', 'KCA045', 'AB', 'Mobile Computing', 'KCA051', '9', 90, 14, 3, '15.555555555556', 'Fail', 'None');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `first_ct`
--
ALTER TABLE `first_ct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mca_4th_sem`
--
ALTER TABLE `mca_4th_sem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `first_ct`
--
ALTER TABLE `first_ct`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mca_4th_sem`
--
ALTER TABLE `mca_4th_sem`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
