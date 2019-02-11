-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2017 at 10:22 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mnnit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(5) NOT NULL,
  `aname` varchar(100) NOT NULL,
  `mailid` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `squs` varchar(50) NOT NULL,
  `sans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `aname`, `mailid`, `contact`, `pass`, `squs`, `sans`) VALUES
('aryan', 'Man Singh Arya', 'mansinghmnnit@gmail.com', '9997375550', 'aryan', 'What is your lucky number?', '8');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cname` varchar(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `totalsem` int(11) NOT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cname`, `bname`, `totalsem`, `date`) VALUES
('B. Tech', 'CS', 8, '20-07-2017'),
('B. Tech', 'IT', 8, '20-07-2017'),
('MCA', 'NA', 6, '16-07-2017');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fid` varchar(5) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mailid` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `squs` varchar(50) NOT NULL,
  `sans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fid`, `fname`, `mailid`, `contact`, `pass`, `squs`, `sans`) VALUES
('AJK', 'Dr. Anoj Kumar', 'anojk@mnnit.ac.in', '+91-532-22', 'ajk', 'Name of your best friend', 'ajk'),
('AKS', 'Dr. A. K. Singh', 'ak@mnnit.ac.in', '+91-532-22', 'aks', 'Name of your best friend', 'aks'),
('DIN', 'Dr. Dinesh Singh', 'dinesh_singh@mnnit.ac.in', '0532-22713', 'din', 'Name of your best friend', 'din'),
('DKY', 'Dr. D.K.Yadav', 'dky@mnnit.ac.in', '+91-0532- ', 'dky', 'Name of your best friend', 'dky'),
('GF_1', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_10', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_11', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_12', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_13', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_14', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_15', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_16', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_17', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_18', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_19', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_20', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_21', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_22', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_23', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_24', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_4', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_5', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_6', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_7', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_8', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('GF_9', 'Guest Faculty', 'gf@mnnit.ac.in', '0532-22713', 'gf', 'Name of your best friend', 'gf'),
('MMG', 'Prof. M.M.Gore', 'gore@mnnit.ac.in', '+91-532-22', 'mmg', 'Name of your best friend', 'mmg'),
('MP', 'Dr. Mayank Pandey', 'mayankpandey@mnnit.ac.in', '+91-053222', 'mp', 'Name of your best friend', 'mp'),
('PD', 'Dr. Pragya Dwivedi', 'pragyadwi86@mnnit.ac.in', '0532-22713', 'pd', 'Name of your best friend', 'pd'),
('RJT', 'Dr. Rajitha B', 'rajitha@mnnit.ac.in', '0532-22713', 'rjt', 'Name of your best friend', 'rjt'),
('RSY', 'Prof. R.S.Yadav', 'rsy@mnnit.ac.in', '+91-532-22', 'rsy', 'Name of your best friend', 'rsy'),
('RT', 'Mr. Rajesh Tripathi', 'rajeshtcsed@mnnit.ac.in', '+91-532-22', 'rt', 'Name of your best friend', 'rt'),
('RUP', 'Dr. Rupesh Kumar Dewang', 'rupeshdewang@mnnit.ac.in', '0532-22713', 'rup', 'Name of your best friend', 'rup'),
('SA', 'Prof. Suneeta Agarwal', 'suneeta@mnnit.ac.in', '+91-532-22', 'sa', 'Name of your best friend', 'sa'),
('SB', 'Dr. Shashwati Banerjea', 'shashwati@mnnit.ac.in', '0532-22713', 'sb', 'Name of your best friend', 'sb');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` varchar(5) NOT NULL,
  `pass` varchar(512) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pass`, `role`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
('AJK', 'fc361d3bba85e9ffed9c8f476f95846b', 'Faculty'),
('AKS', 'a25d2a4d3f57a81cf51d5ce4b8f9c62a', 'Faculty'),
('aryan', 'e2071528cf1aa685779d9898ccd9b308', 'Admin'),
('DIN', 'f88639f78d5d6da6dfb8498fd5e763b1', 'Faculty'),
('DKY', '8da66aaddbc095d924640c0a659cc5f0', 'Faculty'),
('GF_1', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_10', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_11', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_12', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_13', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_14', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_15', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_16', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_17', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_18', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_19', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_20', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_21', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_22', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_23', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_24', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_4', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_5', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_6', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_7', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_8', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('GF_9', 'e5bb23797bfea314a3db43d07dbd6a74', 'Faculty'),
('MMG', '7ff5a5bf82d506fe29331e55e652d55e', 'Faculty'),
('MP', '1f2dfa567dcf95833eddf7aec167fec7', 'Faculty'),
('PD', 'b69466b536f8ce43b6356ec1332e05a4', 'Faculty'),
('RJT', '9b791347070f793ec17c8dcda2b26ec8', 'Faculty'),
('RSY', '2800b88b1218c9a1410a2aade361306c', 'Faculty'),
('RT', '822050d9ae3c47f54bee71b85fce1487', 'Faculty'),
('RUP', 'cf49de8dce0882063532bfe93fe34a29', 'Faculty'),
('SA', 'c12e01f2a13ff5587e1e9e4aedb8242d', 'Faculty'),
('SB', '26148d621ef74844918af182d63976b6', 'Faculty');

-- --------------------------------------------------------

--
-- Table structure for table `mastertable`
--

CREATE TABLE `mastertable` (
  `cname` varchar(100) NOT NULL,
  `bname` varchar(100) NOT NULL,
  `sem` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `stime` int(11) NOT NULL,
  `etime` int(11) NOT NULL,
  `scode` varchar(50) NOT NULL,
  `stype` varchar(10) NOT NULL,
  `gname` varchar(10) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `fid1` varchar(5) NOT NULL,
  `fid2` varchar(5) DEFAULT NULL,
  `fid3` varchar(6) DEFAULT NULL,
  `fid4` varchar(6) DEFAULT NULL,
  `fid5` varchar(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertable`
--

INSERT INTO `mastertable` (`cname`, `bname`, `sem`, `day`, `stime`, `etime`, `scode`, `stype`, `gname`, `vname`, `fid1`, `fid2`, `fid3`, `fid4`, `fid5`) VALUES
('MCA', 'NA', 5, 'Friday', 8, 11, 'CA3551', 'Practical', '', 'CCTF', 'PD', 'GF_10', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Friday', 8, 11, 'CA3353', 'Practical', '', 'PG Lab', 'RUP', 'CF_22', 'GF_23', 'GF_24', ''),
('MCA', 'NA', 3, 'Friday', 11, 13, 'CA3303', 'Lecture', '', 'NLHC-1', 'GF_19', '', '', '', ''),
('MCA', 'NA', 5, 'Friday', 11, 13, 'CA3502', 'Lecture', '', 'FC-5', 'RUP', '', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Friday', 14, 17, 'CA3352', 'Practical', '', 'NET Lab', 'GF_8', 'GF_9', 'GF_10', '', ''),
('MCA', 'NA', 3, 'Monday', 8, 10, 'CA3305', 'Lecture', '', 'SMS LH-3', 'GF_15', '', '', '', ''),
('MCA', 'NA', 3, 'Monday', 10, 12, 'CA3304', 'Lecture', '', 'SMS LH-3', 'RUP', '', '', '', ''),
('MCA', 'NA', 5, 'Monday', 16, 17, 'CA3501', 'Lecture', '', 'FEW-1', 'GF_20', '', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Monday', 16, 18, 'CA3301', 'Lecture', '', 'LH-2', 'DIN', '', '', '', ''),
('MCA', 'NA', 5, 'Thursday', 8, 9, 'CA3503', 'Lecture', '', 'NB-2', 'GF_18', '', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Thursday', 10, 13, 'CA3351', 'Practical', '', 'UG Lab', 'DIN', 'CF_7', 'GF_22', 'GF_23', ''),
('MCA', 'NA', 5, 'Thursday', 14, 15, 'CA3541', 'Lecture', '', 'LH-2', 'AJK', '', NULL, NULL, NULL),
('MCA', 'NA', 5, 'Thursday', 15, 17, 'CA3501', 'Lecture', '', 'FEW-1', 'GF_20', '', NULL, NULL, NULL),
('MCA', 'NA', 5, 'Tuesday', 8, 9, 'CA3503', 'Lecture', '', 'NB-2', 'GF_18', '', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Tuesday', 9, 10, 'CA3305', 'Lecture', '', 'SMS LH-3', 'GF_15', '', '', '', ''),
('MCA', 'NA', 5, 'Tuesday', 10, 11, 'CA3504', 'Lecture', '', 'NLHC-1', 'RJT', '', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Tuesday', 10, 13, 'CA3354', 'Practical', '', 'PG Lab', 'GF_15', 'GF_19', 'GF_21', '', ''),
('MCA', 'NA', 5, 'Tuesday', 11, 13, 'CA3541', 'Lecture', '', 'LH-2', 'AJK', '', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Tuesday', 14, 16, 'CA3302', 'Lecture', '', 'LH-2', 'RSY', '', '', '', ''),
('MCA', 'NA', 5, 'Tuesday', 14, 17, 'CA3591', 'Practical', '', 'PG Lab', 'AJK', 'GF_1', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Tuesday', 16, 18, 'CA3301', 'Lecture', '', 'LH-2', 'DIN', '', '', '', ''),
('MCA', 'NA', 5, 'Wednesday', 8, 11, 'CA3552', 'Practical', '', 'CCTF', 'RUP', 'GF_20', NULL, NULL, NULL),
('MCA', 'NA', 5, 'Wednesday', 11, 13, 'CA3502', 'Lecture', '', 'FC-5', 'RUP', '', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Wednesday', 14, 15, 'CA3303', 'Lecture', '', 'LH-2', 'GF_19', '', '', '', ''),
('MCA', 'NA', 5, 'Wednesday', 14, 16, 'CA3504', 'Lecture', '', 'NB-1', 'RJT', '', NULL, NULL, NULL),
('MCA', 'NA', 3, 'Wednesday', 15, 16, 'CA3304', 'Lecture', '', 'LH-2', 'RUP', '', '', '', ''),
('MCA', 'NA', 3, 'Wednesday', 16, 18, 'CA3302', 'Lecture', '', 'LH-2', 'RSY', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `showsubject`
--

CREATE TABLE `showsubject` (
  `scode` varchar(50) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `lcount` int(11) NOT NULL DEFAULT '0',
  `tcount` int(11) NOT NULL DEFAULT '0',
  `pcount` int(11) NOT NULL DEFAULT '0',
  `fload` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showsubject`
--

INSERT INTO `showsubject` (`scode`, `sname`, `lcount`, `tcount`, `pcount`, `fload`) VALUES
('CA3551', 'Multimedia Technology (Lab)', 0, 0, 3, 0),
('CA3552', 'E-Commerce (Lab)', 0, 0, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `scode` varchar(50) NOT NULL,
  `sname` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`scode`, `sname`) VALUES
('CA3301', 'Operating System'),
('CA3302', 'Computer Networks'),
('CA3303', 'Soft Computing'),
('CA3304', 'Analysis of Algorithms'),
('CA3305', 'Object based modeling'),
('CA3351', 'Operating System (Lab)'),
('CA3352', 'Computer Networks (Lab)'),
('CA3353', 'Analysis of Algorithms (Lab)'),
('CA3354', 'Web Programming (Lab)'),
('CA3501', 'Multimedia Technology'),
('CA3502', 'E-Commerce'),
('CA3503', 'Professional Ethics'),
('CA3504', 'Data Warehousing and Mining'),
('CA3541', 'Software Testing (Elective)'),
('CA3551', 'Multimedia Technology (Lab)'),
('CA3552', 'E-Commerce (Lab)'),
('CA3591', 'Mini Project II (Implementation and Testing) (Lab)');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `vname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`vname`) VALUES
('CCTF'),
('FC-5'),
('FEW-1'),
('LH-2'),
('NB-1'),
('NB-2'),
('NET Lab'),
('NLHC-1'),
('NLHC-2'),
('PG Lab'),
('SMS LH-3'),
('UG Lab');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `yname` varchar(15) NOT NULL,
  `stype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`yname`, `stype`) VALUES
('2017-18', 'Odd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cname`,`bname`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`,`role`);

--
-- Indexes for table `mastertable`
--
ALTER TABLE `mastertable`
  ADD PRIMARY KEY (`day`,`stime`,`etime`,`fid1`);

--
-- Indexes for table `showsubject`
--
ALTER TABLE `showsubject`
  ADD PRIMARY KEY (`scode`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`scode`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`vname`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`yname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
