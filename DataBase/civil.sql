-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2013 at 01:04 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time_table_ced_odd_17_18`
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
('B.Tech.', 'Civil Engg.', 8, '17-07-2017'),
('M. Tech.', 'Environmental Engg.', 4, '17.07.2017'),
('M. Tech.', 'Geotechnical Engg.', 4, '17.07.2017'),
('M. Tech.', 'Structural Engg.', 4, '17.07.2017'),
('M. Tech.', 'Transportation Engg.', 4, '17.07.2017');

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
('AKS', 'Dr. A. K. Singh', 'aksingh@mnnit.ac.in', '1306', 'aks', 'Name of your best friend', 'aks'),
('AKSN', 'Dr. A. K. Sachan', 'sachan@mnnit.ac.in', '1305', 'aksn', 'Name of your best friend', 'aksn'),
('AR', 'Dr. Anupam Rawat', 'anupam@mnnit.ac.in', '1327', 'ar', 'Name of your best friend', 'ar'),
('DB', 'Dr. Debolina Basu', 'basud@mnnit.ac.in', '1326', 'db', 'Name of your best friend', 'db'),
('GF-1', 'Guest Faculty -1', 'gf1@mnnit.ac.in', '9999', 'gf1', 'Name of your best friend', 'gf1'),
('GF-2', 'Guest Faculty - 2', 'gf2@mnnit.ac.in', '9999', 'gf2', 'Name of your best friend', 'gf2'),
('GF-3', 'Guest Faculty - 3', 'gf3@gmail.com', '999', 'gf3', 'Name of your best friend', 'gf3'),
('GG', 'Dr. Gautam Ghosh', 'goutam@mnnit.ac.in', '1319', 'gg', 'Name of your best friend', 'gg'),
('HKP', 'Dr H.K. Pandey', 'hkp@mnnit.ac.in', '1318', 'hkp', 'Name of your best friend', 'hkp'),
('KKS', 'Dr. K. K. Shukla', 'kk@mnnit.ac.in', '9999', 'kks', 'Name of your best friend', 'kks'),
('KP', 'Dr. Kumar Pallav', 'kpallav@mnnit.ac.in', '1325', 'kp', 'Name of your best friend', 'kp'),
('KV', 'Dr. Kumar Venkatesh', 'venkatesh@mnnit.ac.in', '1317', 'kv', 'Name of your best friend', 'kv'),
('LKM', 'Dr. L. K. Mishra', 'lkm@mnnit.ac.in', '1312', 'lkm', 'Name of your best friend', 'lkm'),
('NA', 'No Applicatble', 'na@mnnit.ac.in', '9999', 'na', 'Name of your best friend', 'na'),
('NA1', 'Not Applicable', 'na1@mnnit.ac.in', '9999', 'na1', 'Name of your best friend', 'na1'),
('NA2', 'not applicable2', 'na2@mnnit.ac.in', '9999', 'na2', 'Name of your best friend', 'na2'),
('NRR', 'Dr. Nek Ram Rawal', 'nrrawal@mnnit.ac.in', '1320', 'nrr', 'Name of your best friend', 'nrr'),
('PKM', 'Dr. P. K. Mehta', 'pradeep11@mnnit.ac.in', '1310', 'pkm', 'Name of your best friend', 'pkm'),
('PRP', 'Dr. Priya Ranjan Pal', 'prpal@mnnit.ac.in', '1321', 'prp', 'Name of your best friend', 'prp'),
('RCV', 'Dr. R. C. Vaishya', 'rcvaishya@mnnit.ac.in', '1308', 'rcv', 'Name of your best friend', 'rcv '),
('RDG', 'Dr. R.D. Gupta', 'rdg@mnnit.ac.in', '1307', 'rdg', 'Name of your best friend', 'rdg'),
('RES', 'Research Scholar', 'res@mnnit.ac.in', '9999', 'res', 'Name of your best friend', 'res'),
('RK', 'Dr. Rakesh Kumar', 'rkpat@mnnit.ac.in', '1313', 'rk', 'Name of your best friend', 'rk'),
('RMS', 'Dr. Raj Mohan Singh ', 'rajm@mnnit.ac.in', '1314', 'rms', 'Name of your best friend', 'rms'),
('RPS', 'Dr. Ram Pal Singh', 'rps@mnnit.ac.in', '1309', 'rps', 'Name of your best friend', 'rps'),
('RPT', 'Dr. R. P. Tiwari', 'rpt@mnnit.ac.in', '1304', 'rpt', 'Name of your best friend', 'rpt'),
('RS', 'Dr. Rama Shankar', 'ramashanker@mnnit.ac.in', '1323', 'rs', 'Name of your best friend', 'rs'),
('SKD', 'Dr. S. K. Duggal ', 'shashi@mnnit.ac.in', '1303', 'skd', 'Name of your best friend', 'skd'),
('SS', 'Dr. Shalinee Shukla', 'sshukla@mnnit.ac.in', '1324', 'ss', 'Name of your best friend', 'ss'),
('VK', 'Dr. Vijay Kumar', 'vkr@mnnit.ac.in', '1328', 'vk', 'Name of your best friend', 'vk'),
('VPS', 'Dr.Vishwajeet Pratap Singh', 'vps15783@mnnit.ac.in', '1329', 'vps', 'Name of your best friend', 'vps'),
('VS', 'Dr. Varun Singh', 'varun@mnnit.ac.in', '1322', 'vs', 'Name of your best friend', 'vs'),
('YKG', 'Dr. Y. K. Gupta', 'ykg@mnnit.ac.in', '1311', 'ykg', 'Name of your best friend', 'ykg');

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
('AKSN', 'c5392a0624bf1da313eadaa774200f9b', 'Faculty'),
('AR', 'c582dec943ff7b743aa0691df291cea6', 'Faculty'),
('GF-1', '401c0e8b54cc8f92f2a85c95e9aa017b', 'Faculty'),
('GF-2', 'db85316004c4107a1d8fcbed203cbb19', 'Faculty'),
('GF-3', '41e3eae4d35ce4969893e60c24d26c12', 'Faculty'),
('HKP', 'f28218de88cf064806821bcbb0f2c4e2', 'Faculty'),
('KKS', 'f7d7d192cda02d01e06a6216bba31486', 'Faculty'),
('KP', '26b568e4192a164d5b3eacdbd632bc2e', 'Faculty'),
('NA', '6ec66e124fb93c190e9207b0b82f542a', 'Faculty'),
('NA1', '3973bca21e829a4e0cbb8f9da8de1208', 'Faculty'),
('PKM', '5d85d1a9bfa74247d3c6c249e8d596d1', 'Faculty'),
('PRP', 'b01c6fd4b56d65a5a737ecdf107489c9', 'Faculty'),
('RES', '9b207167e5381c47682c6b4f58a623fb', 'Faculty'),
('RS', '3a2d7564baee79182ebc7b65084aabd1', 'Faculty'),
('VS', 'f4842dcb685d490e2a43212b8072a6fe', 'Faculty');

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
  `fid2` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mastertable`
--

INSERT INTO `mastertable` (`cname`, `bname`, `sem`, `day`, `stime`, `etime`, `scode`, `stype`, `gname`, `vname`, `fid1`, `fid2`) VALUES
('B.Tech.', 'Civil Engg.', 3, 'Friday', 8, 9, 'AM1301', 'Lecture', '', 'GS-4', 'NA', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Friday', 8, 9, 'CE2103', 'Lecture', '', 'Geotech Lab', 'VPS', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Friday', 9, 10, 'CE2105', 'Lecture', '', 'ITN Seminar', 'RPS', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Friday', 9, 10, 'CE2103', 'Tutorial', '', 'Geotech Lab', 'VPS', ''),
('B.Tech.', 'Civil Engg.', 3, 'Friday', 9, 11, 'CE1302', 'Lecture', '', 'GS-4', 'KP', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Friday', 9, 12, 'CE2155', 'Practical', '', 'Transportation Lab', 'GF-1', 'SS'),
('B.Tech.', 'Civil Engg.', 5, 'Friday', 10, 11, 'CE1502', 'Tutorial', 'CE3', 'GW-11', 'GF-1', ''),
('B.Tech.', 'Civil Engg.', 5, 'Friday', 10, 11, 'CE1505', 'Tutorial', 'CE2', 'GW-10', 'RCV', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Friday', 10, 11, 'CE2105', 'Tutorial', '', 'ITN Seminar', 'RPS', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Friday', 10, 13, 'CE2153', 'Practical', '', 'Geotech Lab', 'KV', 'RES'),
('B.Tech.', 'Civil Engg.', 7, 'Friday', 10, 13, 'CE1751', 'Practical', 'CE1', 'SEW-8', 'SKD', 'RES'),
('B.Tech.', 'Civil Engg.', 3, 'Friday', 11, 12, 'AM1304', 'Lecture', '', 'GS-4', 'NA', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Friday', 11, 13, 'CE2132 = Elective-1', 'Lecture', '', 'ITN Seminar', 'HKP', ''),
('B.Tech.', 'Civil Engg.', 5, 'Friday', 12, 13, 'CE1502', 'Lecture', '', 'GS-4', 'SS', ''),
('B.Tech.', 'Civil Engg.', 5, 'Friday', 14, 15, 'CE1505', 'Lecture', '', 'GS-8', 'DB', ''),
('B.Tech.', 'Civil Engg.', 3, 'Friday', 14, 17, 'CE1353', 'Practical', 'CE2', 'Geology Lab', 'HKP', 'GF-3'),
('B.Tech.', 'Civil Engg.', 7, 'Friday', 14, 17, 'CE1751', 'Practical', 'CE3', 'SEW-8', 'PRP', 'RES'),
('B.Tech.', 'Civil Engg.', 5, 'Friday', 16, 17, 'AM1501', 'Lecture', '', 'GS-6', 'NA1', ''),
('B.Tech.', 'Civil Engg.', 5, 'Friday', 17, 18, 'AM1501', 'Tutorial', 'CE1', 'GS-6', 'NA2', ''),
('B.Tech.', 'Civil Engg.', 7, 'Friday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'PRP', ''),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 8, 10, 'CE1503', 'Lecture', '', 'GS- 3', 'VPS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 9, 10, 'CE1702', 'Lecture', '', 'FEW-1', 'LKM', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Monday', 9, 10, 'CE2148 = Elective-2', 'Lecture', '', 'GS-5', 'SS', ''),
('M. Tech.', 'Structural Engg.', 1, 'Monday', 9, 11, 'CE2101', 'Lecture', '', 'STR. ENGG. LAB', 'AKSN', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Monday', 9, 11, 'CE2121 = Elective-1', 'Lecture', '', 'Geotech Lab', 'RPT', ''),
('B.Tech.', 'Civil Engg.', 3, 'Monday', 9, 12, 'CE1353', 'Practical', 'CE3', 'Geology Lab', 'HKP', 'RPS'),
('B.Tech.', 'Civil Engg.', 3, 'Monday', 9, 12, 'AM1351', 'Practical', 'CE1', 'NA', 'NA', ''),
('B.Tech.', 'Civil Engg.', 3, 'Monday', 9, 12, 'AM1353', 'Practical', 'CE2', 'NA1', 'NA1', ''),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 10, 11, 'CE1501', 'Lecture', '', 'GS-3', 'RDG', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 10, 11, 'CE1703', 'Lecture', '', 'FEW-1', 'SKD', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Monday', 10, 12, 'CE2130 = Elective-1', 'Lecture', '', 'SEW-9', 'VS', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Monday', 11, 12, 'CE2136 = Elective-2', 'Lecture', '', 'ITN Seminar', 'NRR', ''),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 11, 12, 'CE1502', 'Lecture', '', 'GS-3', 'SS', ''),
('M. Tech.', 'Structural Engg.', 1, 'Monday', 11, 13, 'CE2113 = Elective-1', 'Lecture', '', 'STR. ENGG. LAB', 'PRP', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Monday', 11, 13, 'CE2181 = Elective-3', 'Lecture', '', 'Geotech Lab', 'RMS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 12, 13, 'CE1735', 'Lecture', '', 'SEW-10', 'AR', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 12, 13, 'CE1734', 'Lecture', '', 'GW-9', 'GF-3', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 12, 13, 'CE1731', 'Lecture', '', 'SEW-9', 'GG', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Monday', 12, 13, 'CE2136 = Elective-2', 'Tutorial', '', 'ITN Seminar', 'NRR', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 12, 13, 'CE1733', 'Lecture', '', 'GW-10', 'PKM', ''),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 12, 13, 'CE1504', 'Lecture', '', 'GS-3', 'RK', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Monday', 12, 13, 'CE2148 = Elective-2', 'Lecture', '', 'Geology Lab', 'SS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 12, 13, 'CE1736', 'Lecture', '', 'FC-5', 'VK', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 12, 13, 'CE1732', 'Lecture', '', 'GW-8', 'YKG', ''),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 14, 17, 'CE1551', 'Practical', 'CE3', 'Transportation Lab', 'AKS', 'GF-1'),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 14, 17, 'CE1751', 'Practical', 'CE2', 'SEW-8', 'GG', 'RES'),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 14, 17, 'AM1551', 'Practical', 'CE2', 'NA', 'NA1', ''),
('B.Tech.', 'Civil Engg.', 3, 'Monday', 14, 17, 'CE1351', 'Practical', 'CE1', 'FC-5', 'PKM', 'GF-3'),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 14, 17, 'CE1552', 'Practical', 'CE1', 'Geotech Lab', 'RPT', 'GF-2'),
('B.Tech.', 'Civil Engg.', 3, 'Monday', 14, 17, 'CE1352', 'Practical', 'CE2', 'CAD Lab', 'RS', 'KP'),
('B.Tech.', 'Civil Engg.', 3, 'Monday', 15, 16, 'AM1301', 'Tutorial', 'CE3', 'GW-10', 'NA', ''),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 17, 18, 'AM1501', 'Tutorial', 'CE2', 'GW-5', 'NA1', ''),
('B.Tech.', 'Civil Engg.', 7, 'Monday', 17, 18, 'OE1781', 'Lecture', '', 'GS-6', 'NRR', ''),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 17, 18, 'CE1501', 'Tutorial', 'CE3', 'GW-7', 'RDG', ''),
('B.Tech.', 'Civil Engg.', 5, 'Monday', 17, 18, 'CE1504', 'Tutorial', 'CE1', 'GW-3', 'RK', ''),
('B.Tech.', 'Civil Engg.', 3, 'Thursday', 8, 9, 'CE1302', 'Lecture', '', 'GS-5', 'KP', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Thursday', 9, 10, 'CE-2125', 'Lecture', '', 'Geotech Lab', 'GF-2', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 9, 10, 'CE1735', 'Tutorial', '', 'GW-3', 'KP', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Thursday', 9, 10, 'CE2105', 'Lecture', '', 'ITN Seminar', 'RPS', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Thursday', 9, 10, 'CE2114 = Elective 2/3', 'Lecture', '', 'STR. ENGG.', 'RS', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 9, 10, 'CE1503', 'Lecture', '', 'GS-3', 'VPS', ''),
('B.Tech.', 'Civil Engg.', 3, 'Thursday', 9, 12, 'AM1351', 'Practical', 'CE3', 'NA', 'NA', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Thursday', 10, 11, 'CE-2125', 'Tutorial', '', 'Geotech Lab', 'GF-2', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 10, 11, 'CE1702', 'Lecture', '', 'FEW-1', 'LKM', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Thursday', 10, 11, 'CE2106', 'Lecture', '', 'ITN Seminar', 'RCV', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 10, 11, 'CE1501', 'Lecture', '', 'GS-3', 'RDG', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Thursday', 10, 11, 'CE2114 = Elective 2/3', 'Tutorial', '', 'STR. ENGG.', 'RS', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Thursday', 11, 12, 'CE2109', 'Tutorial', '', 'Geology Lab', 'GF-1', ''),
('M. Tech.', 'Structural Engg.', 1, 'Thursday', 11, 12, 'AM2181 = Elective-3', 'Lecture', '', 'AMD', 'KKS', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Thursday', 11, 12, 'CE2124 = Elective-2', 'Lecture', '', 'Geotech Lab', 'KV', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Thursday', 11, 12, 'CE2106', 'Tutorial', '', 'ITN Seminar', 'RCV', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 11, 12, 'CE1504', 'Lecture', '', 'GS-3', 'RK', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 11, 12, 'CE1701', 'Lecture', '', 'FEW-1', 'RMS', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Thursday', 12, 13, 'CE2109', 'Lecture', '', 'Geology Lab', 'AKS', ''),
('B.Tech.', 'Civil Engg.', 3, 'Thursday', 12, 13, 'CE1301', 'Lecture', '', 'FEW-1', 'AR', ''),
('M. Tech.', 'Structural Engg.', 1, 'Thursday', 12, 13, 'AM2181 = Elective-3', 'Tutorial', '', 'AMD', 'KKS', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Thursday', 12, 13, 'CE2124 = Elective-2', 'Tutorial', '', 'Geotech Lab', 'KV', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 12, 13, 'AM1501', 'Lecture', '', 'GS-3', 'NA', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Thursday', 12, 13, 'CE2136 = Elective-2', 'Lecture', '', 'ITN Seminar', 'NRR', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 14, 15, 'CE1502', 'Tutorial', 'CE3', 'SEW-10', 'GF-1', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 14, 15, 'CE1791', 'Tutorial', '', 'CED', 'LKM', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 14, 16, 'CE1791', 'Tutorial', '', 'CED', 'DB', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 14, 16, 'CE1503', 'Tutorial', 'CE3', 'GW-5', 'VK', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'AKSN', ''),
('M. Tech.', 'Structural Engg.', 1, 'Thursday', 14, 17, 'CE2151', 'Practical', '', 'CAD Lab', 'GG', 'YKG'),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'KP', 'AR'),
('M. Tech.', 'Geotechnical Engg.', 1, 'Thursday', 14, 17, 'CE2153', 'Practical', '', 'Geotech Lab', 'KV', 'GF-2'),
('B.Tech.', 'Civil Engg.', 3, 'Thursday', 14, 17, 'AM1351', 'Practical', 'CE2', 'NA', 'NA', ''),
('B.Tech.', 'Civil Engg.', 3, 'Thursday', 14, 17, 'AM1353', 'Practical', 'CE3', 'NA1', 'NA1', ''),
('B.Tech.', 'Civil Engg.', 3, 'Thursday', 14, 17, 'CE1353', 'Practical', 'CE1', 'Geology Lab', 'NRR', 'GF-3'),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'RK', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'RPS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'RS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'VS', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 15, 16, 'CE1504', 'Tutorial', 'CE2', 'GW-10', 'LKM', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'RCV', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'RMS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'VPS', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 16, 17, 'CE1505', 'Lecture', '', 'GS-4', 'DB', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 16, 17, 'CE1791', 'Tutorial', '', 'CED', 'RDG', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Thursday', 16, 17, 'CE2132 = Elective-1', 'Tutorial', '', 'ITN Seminar', 'RMS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 16, 17, 'CE1791', 'Tutorial', '', 'CED', 'VK', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'AKSN', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'AR', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 17, 18, 'CE1505', 'Tutorial', 'CE3', 'GW-11', 'DB', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 17, 18, 'CE1502', 'Tutorial', 'CE2', 'GW-10', 'GF-1', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'GG', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'KP', ''),
('B.Tech.', 'Civil Engg.', 3, 'Thursday', 17, 18, 'AM1304', 'Lecture', '', 'GS-6', 'NA', ''),
('B.Tech.', 'Civil Engg.', 5, 'Thursday', 17, 18, 'CE1501', 'Tutorial', 'CE1', 'GW-6', 'RDG', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'RK', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'NA', 'RPS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'RS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'VS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Thursday', 17, 18, 'CE1791', 'Tutorial', '', 'CED', 'YKG', ''),
('B.Tech.', 'Civil Engg.', 3, 'Tuesday', 8, 9, 'CE1301', 'Lecture', '', 'GS-5', 'AR', ''),
('B.Tech.', 'Civil Engg.', 3, 'Tuesday', 9, 10, 'CE1303', 'Lecture', '', 'GS-5', 'HKP', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 9, 10, 'CE1701', 'Lecture', '', 'FEW-1', 'RMS', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Tuesday', 9, 10, 'CE2105', 'Lecture', '', 'ITN Seminar', 'RPS', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Tuesday', 9, 10, 'CE2121 = Elective-1', 'Lecture', '', 'Geotech Lab', 'RPT', ''),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 9, 10, 'CE1502', 'Lecture', '', 'GS-3', 'SS', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Tuesday', 9, 11, 'CE2114 = Elective 2/3', 'Lecture', '', 'STR. ENGG.', 'RS', ''),
('B.Tech.', 'Civil Engg.', 3, 'Tuesday', 10, 11, 'AM1301', 'Lecture', '', 'GS-5', 'NA', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Tuesday', 10, 11, 'CE2136 = Elective-2', 'Lecture', '', 'ITN Seminar', 'NRR', ''),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 10, 11, 'CE1501', 'Lecture', '', 'GS-3', 'RDG', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Tuesday', 10, 11, 'CE2121 = Elective-1', 'Tutorial', '', 'Geotech Lab', 'RPT', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 10, 11, 'CE1703', 'Lecture', '', 'FEW-1', 'SKD', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 11, 12, 'CE1735', 'Lecture', '', 'FE-17', 'AR', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 11, 12, 'CE1734', 'Lecture', '', 'GW-11', 'GF-3', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 11, 12, 'CE1731', 'Lecture', '', 'SEW-9', 'GG', ''),
('B.Tech.', 'Civil Engg.', 3, 'Tuesday', 11, 12, 'AM1304', 'Lecture', '', 'GS-8', 'NA', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 11, 12, 'CE1733', 'Lecture', '', 'GW-8', 'PKM', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 11, 12, 'CE1736', 'Lecture', '', 'FEW-1', 'VK', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 11, 12, 'CE1732', 'Lecture', '', 'SEW-10', 'YKG', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Tuesday', 11, 13, 'CE2109', 'Lecture', '', 'Geology Lab', 'AKS', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Tuesday', 11, 13, 'CE2138 = Elective-3', 'Lecture', '', 'ITN Seminar', 'DB', ''),
('M. Tech.', 'Structural Engg.', 1, 'Tuesday', 11, 13, 'AM2181 = Elective-3', 'Lecture', '', 'AMD', 'KKS', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Tuesday', 11, 13, 'CE2124 = Elective-2', 'Lecture', '', 'Geotech Lab', 'KV', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 12, 13, 'CE1734', 'Tutorial', '', 'GW-5', 'GF-3', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 12, 13, 'CE1731', 'Tutorial', '', 'SEW-9', 'GG', ''),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 12, 13, 'AM1501', 'Lecture', '', 'GS-3', 'NA1', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 12, 13, 'CE1733', 'Tutorial', '', 'GW-4', 'PKM', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 12, 13, 'CE1736', 'Tutorial', '', 'FC-5', 'VK', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 12, 13, 'CE1732', 'Tutorial', '', 'SEW-10', 'YKG', ''),
('B.Tech.', 'Civil Engg.', 3, 'Tuesday', 14, 17, 'CE1351', 'Practical', 'CE3', 'FC-5', 'AKSN', 'DB'),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 14, 17, 'AM1551', 'Practical', 'CE1', 'NA', 'NA1', ''),
('M. Tech.', 'Structural Engg.', 1, 'Tuesday', 14, 17, 'CE2151', 'Practical', '', 'STR. ENGG. LAB', 'RK', 'LKM'),
('B.Tech.', 'Civil Engg.', 3, 'Tuesday', 14, 17, 'CE1352', 'Practical', 'CE1', 'CAD Lab', 'RS', 'PRP'),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 14, 17, 'CE1552', 'Practical', 'CE3', 'Geotech Lab', 'VK', 'GF-2'),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 14, 17, 'CE1551', 'Practical', 'CE2', 'Transportation Lab', 'VS', 'AR'),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'AKS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'HKP', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'KV', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'NRR', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'PKM', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'RPT', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'SKD', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 15, 16, 'CE1791', 'Tutorial', '', 'CED', 'SS', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Tuesday', 16, 17, 'CE2132 = Elective-1', 'Lecture', '', 'ITN Seminar', 'HKP', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 16, 17, 'CE1701', 'Lecture', '', 'GS-8', 'RMS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Tuesday', 17, 18, 'OE1781', 'Lecture', '', 'GS-6', 'NRR', ''),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 17, 18, 'CE1505', 'Tutorial', 'CE1', 'GW-3', 'RCV', ''),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 17, 18, 'CE1501', 'Tutorial', 'CE2', 'GW-4', 'RDG', ''),
('B.Tech.', 'Civil Engg.', 5, 'Tuesday', 17, 18, 'CE1504', 'Tutorial', 'CE3', 'GW-5', 'RK', ''),
('B.Tech.', 'Civil Engg.', 3, 'Wednesday', 8, 9, 'AM1301', 'Lecture', '', 'FC-5', 'NA', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Wednesday', 8, 10, 'CE2103', 'Lecture', '', 'Geotech Lab', 'VPS', ''),
('M. Tech.', 'Structural Engg.', 1, 'Wednesday', 9, 10, 'CE2101', 'Lecture', '', 'STR. ENGG. LAB', 'AKSN', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Wednesday', 9, 10, 'CE2138 = Elective-3', 'Lecture', '', 'ITN Seminar', 'DB', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Wednesday', 9, 10, 'CE2148 = Elective-2', 'Lecture', '', 'SEW-9', 'SS', ''),
('B.Tech.', 'Civil Engg.', 3, 'Wednesday', 9, 12, 'AM1353', 'Practical', 'CE1', 'NA', 'NA', ''),
('M. Tech.', 'Structural Engg.', 1, 'Wednesday', 10, 11, 'CE2101', 'Tutorial', '', 'STR. ENGG. LAB', 'AKSN', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Wednesday', 10, 11, 'CE2138 = Elective-3', 'Tutorial', '', 'ITN Seminar', 'DB', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 10, 11, 'CE1703', 'Lecture', '', 'FEW-1', 'SKD', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Wednesday', 10, 11, 'CE2148 = Elective-2', 'Tutorial', '', 'SEW-9', 'SS', ''),
('B.Tech.', 'Civil Engg.', 5, 'Wednesday', 10, 13, 'AM1551', 'Practical', 'CE3', 'NA1', 'NA1', ''),
('B.Tech.', 'Civil Engg.', 5, 'Wednesday', 10, 13, 'CE1551', 'Practical', 'CE1', 'Transportation Lab', 'RES', 'GF-1'),
('B.Tech.', 'Civil Engg.', 5, 'Wednesday', 10, 13, 'CE1552', 'Practical', 'CE2', 'Geotech Lab', 'VPS', 'GF-2'),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 11, 12, 'CE1702', 'Lecture', '', 'FEW-1', 'LKM', ''),
('M. Tech.', 'Structural Engg.', 1, 'Wednesday', 11, 12, 'CE2113 = Elective-1', 'Lecture', '', 'STR. ENGG. LAB', 'PRP', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Wednesday', 11, 12, 'CE2181 = Elective-3', 'Lecture', '', 'Geotech Lab', 'RMS', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Wednesday', 11, 12, 'CE2130 = Elective-1', 'Lecture', '', 'GS-6', 'VS', ''),
('M. Tech.', 'Environmental Engg.', 1, 'Wednesday', 11, 13, 'CE2106', 'Lecture', '', 'ITN Seminar', 'RCV', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 12, 13, 'CE1735', 'Lecture', '', 'GS-4', 'AR', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 12, 13, 'CE1734', 'Lecture', '', 'GW-5', 'GF-3', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 12, 13, 'CE1731', 'Lecture', '', 'GW-10', 'GG', ''),
('B.Tech.', 'Civil Engg.', 3, 'Wednesday', 12, 13, 'CE1303', 'Lecture', '', 'GS-8', 'HKP', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 12, 13, 'CE1733', 'Lecture', '', 'GW-4', 'PKM', ''),
('M. Tech.', 'Structural Engg.', 1, 'Wednesday', 12, 13, 'CE2113 = Elective-1', 'Tutorial', '', 'STR. ENGG. LAB', 'PRP', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Wednesday', 12, 13, 'CE2181 = Elective-3', 'Tutorial', '', 'Geotech Lab', 'RMS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 12, 13, 'CE1736', 'Lecture', '', 'FEW-1', 'VK', ''),
('M. Tech.', 'Transportation Engg.', 1, 'Wednesday', 12, 13, 'CE2130 = Elective-1', 'Tutorial', '', 'GS-6', 'VS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 12, 13, 'CE1732', 'Lecture', '', 'GW-7', 'YKG', ''),
('B.Tech.', 'Civil Engg.', 5, 'Wednesday', 14, 15, 'CE1505', 'Lecture', '', 'GS-8', 'DB', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'AKS', 'GG'),
('B.Tech.', 'Civil Engg.', 3, 'Wednesday', 14, 17, 'CE1351', 'Practical', 'CE2', 'SEW-8', 'AR', 'GF-3'),
('M. Tech.', 'Transportation Engg.', 1, 'Wednesday', 14, 17, 'CE2155', 'Practical', '', 'Transportation Lab', 'GF-1', 'RES'),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'LKM', 'KV'),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'PKM', 'NRR'),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'RCV', 'PRP'),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'RDG', 'RPT'),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'RMS', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'SS', 'SKD'),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'VK', 'HKP'),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 14, 17, 'CE1791', 'Tutorial', '', 'CED', 'VPS', 'YKG'),
('B.Tech.', 'Civil Engg.', 3, 'Wednesday', 14, 17, 'CE1352', 'Practical', 'CE3', 'CAD Lab', 'VS', 'KP'),
('B.Tech.', 'Civil Engg.', 3, 'Wednesday', 15, 16, 'AM1301', 'Tutorial', 'CE1', 'GW-9', 'NA', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 15, 17, 'CE1791', 'Tutorial', '', 'CED', 'DB', ''),
('M. Tech.', 'Geotechnical Engg.', 1, 'Wednesday', 15, 17, 'CE-2125', 'Lecture', '', 'Geotech Lab', 'GF-2', ''),
('B.Tech.', 'Civil Engg.', 3, 'Wednesday', 16, 17, 'AM1304', 'Tutorial', 'CE1', 'GW-9', 'NA', ''),
('B.Tech.', 'Civil Engg.', 5, 'Wednesday', 16, 17, 'CE1504', 'Lecture', '', 'GS-3', 'RK', ''),
('B.Tech.', 'Civil Engg.', 5, 'Wednesday', 17, 18, 'AM1501', 'Tutorial', 'CE3', 'GW-11', 'NA1', ''),
('B.Tech.', 'Civil Engg.', 7, 'Wednesday', 17, 18, 'OE1781', 'Lecture', '', 'GS-6', 'NRR', ''),
('B.Tech.', 'Civil Engg.', 5, 'Wednesday', 17, 18, 'CE1502', 'Tutorial', 'CE1', 'GW-9', 'SS', ''),
('B.Tech.', 'Civil Engg.', 5, 'Wednesday', 17, 18, 'CE1503', 'Tutorial', 'CE2', 'GW-10', 'VK', '');

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
('CE1502', 'Transportation Engineering-I', 3, 1, 0, 4),
('CE1791', 'Project', 0, 4, 0, 4),
('CE2148 = Elective-2', 'Highway Geometric Design (HGD)', 3, 1, 0, 4),
('CE2155', 'Transportation Engineering Lab-I (Traffic Engineering and Field Studies Lab) - TE LAB - I', 0, 0, 3, 3);

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
('AM1301', 'Fluid Mechanics-1'),
('AM1304', 'Strength of Materials'),
('AM1351', 'Fluid Mechanaics-1 Lab'),
('AM1353', 'Strength Of Materials Lab'),
('AM1501', 'Structural Analysis-II '),
('AM1551', 'Structural Analysis-II Lab '),
('AM2181 = Elective-3', 'Applied Elasticity (AE)'),
('CE-2125', 'Land Contamination & Remediation'),
('CE1301', 'Building Planning and Construction'),
('CE1302', 'Computer Based Numerical Techniques'),
('CE1303', 'Engineering Geology'),
('CE1351', 'Building Planning and Construction Lab'),
('CE1352', 'Computer Based Numerical Techniques Lab'),
('CE1353', 'Engineering Geology Lab'),
('CE1501', 'Survey-II '),
('CE1502', 'Transportation Engineering-I'),
('CE1503', 'Geo technical Engineering-I'),
('CE1504', 'Concrete Structures-I'),
('CE1505', 'Environmental Engineering-I'),
('CE1551', 'Transportation Engineering-I Lab'),
('CE1552', 'Geo technical Engineering-I Lab'),
('CE1701', 'Water Resource Engineering-I'),
('CE1702', 'Construction Planning & Management'),
('CE1703', 'Steel Structures-II'),
('CE1731', 'PE-Finite Element & Finite Difference Methods '),
('CE1732', 'PE-Structural Dynamics'),
('CE1733', 'PE-Bridge Engineering'),
('CE1734', 'PE-Advanced Waste water Treatment'),
('CE1735', 'PE-Construction Equipment and Techniques'),
('CE1736', 'PE-Advance Foundation Design'),
('CE1751', 'Steel Structures-II Lab'),
('CE1791', 'Project'),
('CE2101', 'Advanced Concrete Design (ACD)'),
('CE2103', 'Advanced Soil Mechanics (ASM)'),
('CE2105', 'Physico-Chemical Processes in water and wastewater Treatment (PCPWWT)'),
('CE2106', 'Air Pollution Control (APC)'),
('CE2109', 'Transportation System Planning (TSP);'),
('CE2113 = Elective-1', 'Advanced Concrete Technology (ACT)'),
('CE2114 = Elective 2/3', 'Structural Health Monitoring (SHM)'),
('CE2121 = Elective-1', 'Rock Engineering (RE)'),
('CE2124 = Elective-2', 'Geotechnical Earthquake Engineering (GEE)'),
('CE2130 = Elective-1', 'Transportation Networks (TM)'),
('CE2132 = Elective-1', 'Ground Water Hydrology (GWH)'),
('CE2136 = Elective-2', 'Environmental Engg. Chemistry and microbiology (ECM)'),
('CE2138 = Elective-3', 'Solid & Biomedical waste management (SBWM)'),
('CE2148 = Elective-2', 'Highway Geometric Design (HGD)'),
('CE2151', 'Experimental & Computational Methods (ECM)'),
('CE2153', 'Advanced Soil Mechanics Lab (ASM Lab)'),
('CE2155', 'Transportation Engineering Lab-I (Traffic Engineering and Field Studies Lab) - TE LAB - I'),
('CE2181 = Elective-3', 'Soft Computing Methods in Engineering Problem Solving (SCMEPS)'),
('OE1781', 'Open Elective-1 Environmental Impact Assessment');

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
('AMD'),
('CAD Lab'),
('CED'),
('FC-17'),
('FC-5'),
('FE-17'),
('FEW-1'),
('Geology Lab'),
('Geotech Lab'),
('GS- 3'),
('GS- 9'),
('GS-3'),
('GS-4'),
('GS-5'),
('GS-6'),
('GS-8'),
('GW-10'),
('GW-11'),
('GW-3'),
('GW-4'),
('GW-5'),
('GW-6'),
('GW-7'),
('GW-8'),
('GW-9'),
('ITN Seminar'),
('NA'),
('NA1'),
('SEW-10'),
('SEW-8'),
('SEW-9'),
('STR. ENGG. LAB'),
('Transportation Lab');

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
