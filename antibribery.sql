-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2018 at 03:09 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antibribery`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `username`, `email`, `password`, `created_at`) VALUES
(3, 'Admin', 'admin@gmail.com', '7ece99e593ff5dd200e2b9233d9ba654', '2018-08-18 10:22:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `status_name`, `created_at`) VALUES
(1, 'Approved', '2018-08-24 07:09:28'),
(2, 'Completed', '2018-08-24 07:09:28'),
(3, 'In Progress', '2018-08-24 07:09:56'),
(4, 'Cancelled', '2018-08-24 07:09:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tender`
--

CREATE TABLE `tbl_tender` (
  `tender_id` int(11) NOT NULL,
  `tender_name` varchar(200) NOT NULL,
  `tender_area` varchar(200) NOT NULL,
  `street_address` varchar(200) NOT NULL,
  `length` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `approve_date` varchar(100) NOT NULL,
  `completion_date` varchar(100) NOT NULL,
  `status_id` varchar(20) NOT NULL,
  `tender_img` text NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tender`
--

INSERT INTO `tbl_tender` (`tender_id`, `tender_name`, `tender_area`, `street_address`, `length`, `description`, `approve_date`, `completion_date`, `status_id`, `tender_img`, `created_at`) VALUES
(1, 'Road', 'Satpur', 'Ashok Nagar', '100 meter', 'roaddd', '14-9-2018', '01/18/2019', '3', 'images_(2)1.jpg', '2018-09-18'),
(2, 'abs', 'abs', 'hgfgf', 'fgfgf', 'gfgf', '19-12-2018', '23-10-2018', '1', '', '2018-09-11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `firstname`, `lastname`, `email`, `password`, `street_address`, `created_at`) VALUES
(1, 'vcvc ', 'vcv', 'vcvc', 'cc', 'vvcc', '2018-09-04 17:25:46'),
(2, 'dd', 'dd', 'dd', 'dd', 'dd', '2018-09-04 17:26:00'),
(3, 'dd', 'dd', 'dd', 'dd', 'dd', '2018-09-04 17:27:39'),
(4, 'aa', 'aa', 'aa', 'aa', 'aa', '2018-09-04 17:29:40'),
(5, 'xx', 'xx', 'xx', 'xx', 'xx', '2018-09-04 17:30:24'),
(6, 'aa', 'aa', 'aa', 'aa', 'aa', '2018-09-04 17:33:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `tbl_tender`
--
ALTER TABLE `tbl_tender`
  ADD PRIMARY KEY (`tender_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_tender`
--
ALTER TABLE `tbl_tender`
  MODIFY `tender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
