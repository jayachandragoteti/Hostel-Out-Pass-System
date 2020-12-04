-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2020 at 05:33 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id11808344_e_outpass`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `sno` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `logintype` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sno`, `username`, `password`, `logintype`) VALUES
(2, 'admin', 'admin', 'admin'),
(3, 'security', 'security', 'security'),
(8, '18A51A0515', '18A51A0515', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `perpermissions_details`
--

CREATE TABLE `perpermissions_details` (
  `sno` int(11) NOT NULL,
  `rollnumber` varchar(225) NOT NULL,
  `prmissiontype` varchar(225) NOT NULL,
  `leavingdatetime` varchar(225) NOT NULL,
  `returndatetime` varchar(225) NOT NULL,
  `place` varchar(225) NOT NULL,
  `reason` varchar(225) NOT NULL,
  `contacnumber` varchar(220) NOT NULL,
  `status` varchar(225) NOT NULL,
  `outtime` varchar(225) NOT NULL,
  `intime` varchar(225) NOT NULL,
  `datm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perpermissions_details`
--

INSERT INTO `perpermissions_details` (`sno`, `rollnumber`, `prmissiontype`, `leavingdatetime`, `returndatetime`, `place`, `reason`, `contacnumber`, `status`, `outtime`, `intime`, `datm`) VALUES
(1, '18A51A0515', 'onehourpermission', '2020-03-19T13:00', '2020-03-20T01:00', 'vzm', 'Movie Time', '2147483647', 'not responded', '', '', '2020-03-05 15:17:11'),
(2, '18A51A0515', 'homepermission', '2020-03-20T12:00', '2020-12-01T12:59', 'Srikakulam', 'Movie Time', '2147483647', 'ACCEPTED', '', '', '2020-03-05 14:26:56'),
(8, '18A51A0515', 'onehourpermission', '2020-03-28T00:59', '2020-03-28T13:59', 'Srikakulam', 'Movie Time', '9491694195', 'not responded', '', '', '2020-03-05 17:07:21'),
(9, '18A51A0515', 'onehourpermission', '2020-03-21T00:59', '2020-12-31T12:59', 'vzm', 'Rajee lazy', '9491694195', 'ACCEPTED', '', '', '2020-03-05 17:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `sno` int(11) NOT NULL,
  `studentname` varchar(225) NOT NULL,
  `rollnumber` varchar(225) NOT NULL,
  `dateofbirth` varchar(225) NOT NULL,
  `stream` varchar(225) NOT NULL,
  `branch` varchar(225) NOT NULL,
  `father/guardianname` varchar(225) NOT NULL,
  `father/guardiannumber` int(11) NOT NULL,
  `address` varchar(225) NOT NULL,
  `datm` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`sno`, `studentname`, `rollnumber`, `dateofbirth`, `stream`, `branch`, `father/guardianname`, `father/guardiannumber`, `address`, `datm`) VALUES
(1, 'GOTETI JAYACHANDRA MOHAN LAKSHMI NARASIMHA MURTHY', '18A51A0515', '2001-05-16', 'b-tech', 'cse', 'G V Naga raju', 2147483647, 'medacharla', '2020-03-05 08:27:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `perpermissions_details`
--
ALTER TABLE `perpermissions_details`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `rollnumber` (`rollnumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `perpermissions_details`
--
ALTER TABLE `perpermissions_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
