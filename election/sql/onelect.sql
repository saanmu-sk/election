-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2019 at 11:30 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4058845_onelect`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `name`, `sex`, `password`) VALUES
(1, 'Saanmu Sk', 'Male', '90e4d500527969de4b9374b0258e1e3e'),
(2, 'Aravindh', 'Male', 'bd2a3c962b2090774104863d6875a918'),
(5, 'Jey', 'Male', '10a8e3a6b2a64a2720e345f9769a0e67');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_details`
--

CREATE TABLE `candidate_details` (
  `sno` int(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `timespan` int(255) NOT NULL,
  `times` int(255) NOT NULL,
  `region` varchar(255) NOT NULL,
  `achivement` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_details`
--

INSERT INTO `candidate_details` (`sno`, `party`, `position`, `symbol`, `timespan`, `times`, `region`, `achivement`) VALUES
(1, 'ADMK', 'COUNSILER', 'Two leaf', 2, 0, 'Aruppukottai', 'onnum panala'),
(2, 'DMK', 'COUNSILER', 'Rising sun', 3, 1, 'Madurai', 'Nothing'),
(10, 'dmk', 'COUNSILER', 'rising sun', 8, 1, 'vnr', 'thermocoal'),
(11, 'kkkk', 'COUNSILER', 'aaa', 45, 3, 'madurai', '-----'),
(12, 'lkjhg', '', '0987', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_reg`
--

CREATE TABLE `candidate_reg` (
  `sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `dob` date NOT NULL,
  `sex` varchar(255) NOT NULL,
  `party` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate_reg`
--

INSERT INTO `candidate_reg` (`sno`, `name`, `age`, `dob`, `sex`, `party`, `symbol`, `address`) VALUES
(1, 'Saanmu', 20, '1997-11-01', 'Male', 'ADMK', 'Two leaf', '39,kaka st, Chennai'),
(2, 'Jey', 22, '1995-08-12', 'Male', 'DMK', 'Rising sun', '34,apk,st ,Madurai'),
(10, 'santha', 20, '0000-00-00', 'Male', 'dmk', 'rising sun', '6/630/e thiru vika street,vnr'),
(11, 'Abcd', 40, '2018-01-10', 'Male', 'kkkk', 'aaa', '5fghjjh'),
(12, 'karkuvel', 12, '0000-00-00', 'Male', 'lkjhg', '0987', 'sivakasi');

-- --------------------------------------------------------

--
-- Table structure for table `candipass`
--

CREATE TABLE `candipass` (
  `sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `symbol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candipass`
--

INSERT INTO `candipass` (`sno`, `name`, `password`, `symbol`) VALUES
(1, 'Saanmu', 'p3o4Ilf7', 'Two leaf'),
(2, 'Jey', 'hiH30ES1', 'Rising sun'),
(10, 'santha', 'wTLZj7XJ', 'rising sun'),
(11, 'Abcd', 'kwcbKDIW', 'aaa'),
(12, 'karkuvel', 'MFceUPbQ', '0987');

-- --------------------------------------------------------

--
-- Table structure for table `original`
--

CREATE TABLE `original` (
  `sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `relation_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `eid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `original`
--

INSERT INTO `original` (`sno`, `name`, `age`, `dob`, `relation_name`, `address`, `sex`, `eid`) VALUES
(1, 'Rohit', '32', '1985-12-01', 'Sharma', '1,north street,madurai', 'male', 'AJS101'),
(2, 'Shikar', '32', '1985-12-02', 'Dhawan', '2,north street,madurai', 'male', 'AJS102'),
(3, 'Ragini', '32', '1985-12-03', 'Sampath', '3,noth street,madurai', 'female', 'AJS103'),
(4, 'Akila', '32', '1985-12-04', 'Dhananjaya', '4,noth street,madurai', 'male', 'AJS104'),
(5, 'Anjelo', '32', '1985-12-05', 'Mathews', '5,north street,madurai', 'male', 'AJS105'),
(6, 'Preethi', '32', '1985-12-06', 'Sharma', '6,north street,madurai', 'female', 'AJS106'),
(7, 'Ragini', '32', '1985-12-07', 'Manohar', '7,north street,madurai', 'female', 'AJS107'),
(8, 'Virat', '32', '1985-12-08', 'Kholi', '8,north street,madurai', 'male', 'AJS108'),
(9, 'Anushka', '32', '1985-12-09', 'Sharma', '9,north street,madurai', 'female', 'AJS109'),
(10, 'Mahendra_singh', '32', '1985-12-10', 'Dhoni', '10,north street,madurai', 'male', 'AJS110'),
(11, 'Yuva', '32', '1985-12-11', 'Singh', '11,north street,madurai', 'male', 'AJS111'),
(12, 'Rakhul', '32', '1985-12-12', 'Preet', '12,north street,madurai', 'female', 'AJS112'),
(13, 'Yuzvendra', '32', '1985-12-13', 'Chahal', '13,north street,madurai', 'male', 'AJS113'),
(14, 'Kuldeep', '32', '1985-12-14', 'Yadhav', '14,north street,madurai', 'male', 'AJS114'),
(15, 'Ravichandran', '32', '1985-12-15', 'Ashwin', '15,north street,madurai', 'male', 'AJS115'),
(16, 'Ravindra', '32', '1985-12-16', 'Jadeja', '16,north street,madurai', 'male', 'AJS116');

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `eid` varchar(255) NOT NULL,
  `voter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `people`
--

INSERT INTO `people` (`eid`, `voter`) VALUES
('AJS116', '3'),
('AJS115', '2'),
('AJS114', '1'),
('AJS113', '3'),
('AJS112', '3'),
('AJS111', '2'),
('AJS110', '3'),
('AJS109', '2');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `dob` date NOT NULL,
  `relation_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `eid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`sno`, `name`, `age`, `dob`, `relation_name`, `address`, `sex`, `eid`) VALUES
(2, 'Shikar', 32, '1985-12-02', 'Dhawan', '2,north street,madurai', 'male', 'AJS102'),
(3, 'Ragini', 32, '1985-12-03', 'Sampath', '3,noth street,madurai', 'female', 'AJS103'),
(4, 'Akila', 32, '1985-12-04', 'Dhananjaya', '4,noth street,madurai', 'male', 'AJS104'),
(5, 'Anjelo', 32, '1985-12-05', 'Mathews', '5,north street,madurai', 'male', 'AJS105'),
(6, 'Preethi', 32, '1985-12-06', 'Sharma', '6,north street,madurai', 'female', 'AJS106'),
(7, 'Ragini', 32, '1985-12-07', 'Manohar', '7,north street,madurai', 'female', 'AJS107'),
(8, 'Virat', 32, '1985-12-08', 'Kholi', '8,north street,madurai', 'male', 'AJS108');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `candidate_details`
--
ALTER TABLE `candidate_details`
  ADD PRIMARY KEY (`sno`,`symbol`,`party`);

--
-- Indexes for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  ADD PRIMARY KEY (`sno`,`party`,`symbol`);

--
-- Indexes for table `candipass`
--
ALTER TABLE `candipass`
  ADD PRIMARY KEY (`sno`,`symbol`);

--
-- Indexes for table `original`
--
ALTER TABLE `original`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`sno`,`eid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `candidate_details`
--
ALTER TABLE `candidate_details`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `candidate_reg`
--
ALTER TABLE `candidate_reg`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `candipass`
--
ALTER TABLE `candipass`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `original`
--
ALTER TABLE `original`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `voter`
--
ALTER TABLE `voter`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
