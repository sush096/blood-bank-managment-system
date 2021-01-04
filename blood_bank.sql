-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 07:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(255) NOT NULL,
  `admin_pswd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`admin_id`, `admin_user`, `admin_pswd`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `blood_type`
--

CREATE TABLE `blood_type` (
  `blood_id` int(11) NOT NULL,
  `blood_grp` varchar(30) NOT NULL,
  `blood_qty` int(11) NOT NULL,
  `blood_hos_id` int(11) NOT NULL,
  `blood_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blood_type`
--

INSERT INTO `blood_type` (`blood_id`, `blood_grp`, `blood_qty`, `blood_hos_id`, `blood_status`) VALUES
(1, 'A+', 2, 1, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `phone_num` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hosp_id` int(11) NOT NULL,
  `hosp_email` varchar(255) NOT NULL,
  `hosp_pswrd` varchar(255) NOT NULL,
  `hosp_name` varchar(255) NOT NULL,
  `hosp_phn` int(11) NOT NULL,
  `hosp_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hosp_id`, `hosp_email`, `hosp_pswrd`, `hosp_name`, `hosp_phn`, `hosp_address`) VALUES
(1, 'apollo.unic@gmail.com', ' Apollo@1', 'Apollo Hospital', 2147483647, 'Vasant Vihar, New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `pateint`
--

CREATE TABLE `pateint` (
  `ptn_id` int(11) NOT NULL,
  `ptn_email` varchar(255) NOT NULL,
  `ptn_pswr` varchar(255) NOT NULL,
  `ptn_name` varchar(255) NOT NULL,
  `ptn_phn` int(11) NOT NULL,
  `ptn_adrss` varchar(255) NOT NULL,
  `ptn_blood_grp` varchar(255) NOT NULL,
  `ptn_dob` date NOT NULL,
  `ptn_gender` varchar(255) NOT NULL,
  `ptn_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pateint`
--

INSERT INTO `pateint` (`ptn_id`, `ptn_email`, `ptn_pswr`, `ptn_name`, `ptn_phn`, `ptn_adrss`, `ptn_blood_grp`, `ptn_dob`, `ptn_gender`, `ptn_desc`) VALUES
(1, 'prashant@gmail.com', 'prashant', 'Prashant verma', 584675555, 'om vihar, uttam nagar, new delhi', 'B+', '1988-10-08', 'male', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `req_id` int(11) NOT NULL,
  `req_ptn_id` int(11) NOT NULL,
  `req_hos_id` int(11) NOT NULL,
  `req_bld_id` int(11) NOT NULL,
  `req_email` varchar(255) NOT NULL,
  `req_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `req_ptn_id`, `req_hos_id`, `req_bld_id`, `req_email`, `req_status`) VALUES
(1, 1, 1, 1, 'prashant@gmail.com', 'send');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blood_type`
--
ALTER TABLE `blood_type`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hosp_id`);

--
-- Indexes for table `pateint`
--
ALTER TABLE `pateint`
  ADD PRIMARY KEY (`ptn_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`req_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blood_type`
--
ALTER TABLE `blood_type`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hosp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pateint`
--
ALTER TABLE `pateint`
  MODIFY `ptn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `req_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
