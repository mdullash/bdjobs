-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 06:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appliedjobs`
--

CREATE TABLE `appliedjobs` (
  `uID` text NOT NULL,
  `Full Name` text NOT NULL,
  `Email` text NOT NULL,
  `sscInstitute` text NOT NULL,
  `sscDepartment` text NOT NULL,
  `sscGPA` double NOT NULL,
  `underInstitute` text NOT NULL,
  `underDegree` text NOT NULL,
  `underCGPA` double NOT NULL,
  `postInstitute` text NOT NULL,
  `postDegree` text NOT NULL,
  `postCGPA` float NOT NULL,
  `computerExpertise` text NOT NULL,
  `companyID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appliedjobs`
--

INSERT INTO `appliedjobs` (`uID`, `Full Name`, `Email`, `sscInstitute`, `sscDepartment`, `sscGPA`, `underInstitute`, `underDegree`, `underCGPA`, `postInstitute`, `postDegree`, `postCGPA`, `computerExpertise`, `companyID`) VALUES
('ullash', 'ullash', 'mdullash@gmail.com', 'kkkkk', 'se', 6666, 'gbfgbfg', 'se', 4, 'fdvdf', 'vfdfvb', 4, 'php', 'sihab'),
('ullash', 'ullash', 'mdullash@gmail.com', 'kkkkk', 'se', 6666, 'gbfgbfg', 'se', 4, 'fdvdf', 'vfdfvb', 4, 'php', 'maruf');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogID` int(11) NOT NULL,
  `uID` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `blog` text NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blogID`, `uID`, `title`, `blog`, `date`) VALUES
(1, 'ullash', 'jj', 'hgg', '2018-11-16 06:44:19'),
(2, 'ullash', 'jj', 'hgg', '2018-11-16 06:45:10'),
(5, 'ullash', 'jjdf', 'fffff', '2018-11-16 07:28:17'),
(6, 'ullash', 'dbtd', 'fnbfn', '2018-12-09 15:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `uID` text NOT NULL,
  `Name` text NOT NULL,
  `type` text NOT NULL,
  `Location` text NOT NULL,
  `ContactPersonName` text NOT NULL,
  `Designation` text NOT NULL,
  `ContactPersonDetails` text NOT NULL,
  `Status` text NOT NULL,
  `UIDD` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`uID`, `Name`, `type`, `Location`, `ContactPersonName`, `Designation`, `ContactPersonDetails`, `Status`, `UIDD`) VALUES
('rizvi', 'rizvi', 'it', 'Dhaka', 'shohan', 'ceo', 'mdullash1@gmail.com', '1', 'rizvi'),
('maruf', 'maruf IT', 'it', 'Dhaka', 'shohan', 'ceo', 'mdullash1@gmail.com', '0', 'maruf'),
('Pratik', 'Pratik IT', 'it', 'Dhaka', 'pratik', 'owner', 'pratik@gmail.com', '1', 'Pratik'),
('Pratik', 'IT world', 'it', 'Dhaka', 'pratik', 'ceo', 'pratik@gmail.com', '0', 'Pratik');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `uID` text NOT NULL,
  `Full Name` varchar(20) NOT NULL,
  `Location` text NOT NULL,
  `Phone` text NOT NULL,
  `Email` text NOT NULL,
  `sscInstitute` text NOT NULL,
  `sscDepartment` text NOT NULL,
  `sscGPA` text NOT NULL,
  `hscInstitute` text NOT NULL,
  `hscDepartment` text NOT NULL,
  `hscGPA` text NOT NULL,
  `underInstitute` text NOT NULL,
  `underDegree` text NOT NULL,
  `underCGPA` text NOT NULL,
  `postInstitute` text NOT NULL,
  `postDegree` text NOT NULL,
  `postCGPA` text NOT NULL,
  `postYear` text NOT NULL,
  `computerExpertise` text NOT NULL,
  `cvID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`uID`, `Full Name`, `Location`, `Phone`, `Email`, `sscInstitute`, `sscDepartment`, `sscGPA`, `hscInstitute`, `hscDepartment`, `hscGPA`, `underInstitute`, `underDegree`, `underCGPA`, `postInstitute`, `postDegree`, `postCGPA`, `postYear`, `computerExpertise`, `cvID`) VALUES
('galib', 'galib', 'bd', '4422', 'mdullash@gmail.com', 'kkkkk', 'kkkk', '6666', 'fbgb', 'gbgf', 'gbgfbbfg', 'gbfgbfg', 'se', '4.00', 'fdvdf', 'vfdfvb', '4.00', '222', 'php', 3),
('akib', 'akib', 'comilla', '4422', 'mdullash@gmail.com', 'kkkkk', 'kkkk', '6666', 'fbgb', 'gbgf', '5', 'gbfgbfg', 'se', '4.00', 'fdvdf', 'vfdfvb', '4.00', '222', 'html', 4),
('ullash', 'ullash', 'ctg', '44224', 'mdullash@gmail.com', 'kkkkk', 'se', '6666', 'fbgb', 'gbgf', '5', 'gbfgbfg', 'se', '4.00', 'fdvdf', 'vfdfvb', '4.00', '222', 'php', 5),
('pratik', 'pratik', 'gulshan', '4422', 'pratik@gmail.com', 'aiub', 'se', '2.5', 'fbgb', 'gbgf', '5', 'aiub', 'se', '4.00', 'fdvdf', 'bsc', '4.00', '222', 'java', 6);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(20) NOT NULL,
  `companyID` text NOT NULL,
  `Name` text NOT NULL,
  `Education` text NOT NULL,
  `Description` text NOT NULL,
  `keywords` text NOT NULL,
  `Applicants` text NOT NULL,
  `jobtype` text NOT NULL,
  `salary` text NOT NULL,
  `AllDescription` text NOT NULL,
  `uID` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `companyID`, `Name`, `Education`, `Description`, `keywords`, `Applicants`, `jobtype`, `salary`, `AllDescription`, `uID`) VALUES
(18, 'sihab', 'se', 'msc', 'manager', 'php,javascript', '', 'it', '12000999', 'ehjfrshgfsrj jkeksfhksjehgkj jskekfhkehfal jlsjheflwhesjfwj', 'sihab'),
(19, 'maruf', 'manger', 'bsc', 'manager', 'managing', '', 'it', '44444', 'This a job for managing.This job is suitable.This job has salary 2000.', 'maruf'),
(23, 'Pratik', 'se', 'bsc', 'developer', 'php,javascript', '', 'it', '50000', 'we are looking for a professional java developer with highly experience.', 'maruf'),
(24, 'Pratik', 'se', 'bsc', 'developer', 'php,javascript', '', 'it', '50000', 'we are looking for a professional java developer with highly experience.', 'maruf'),
(25, 'Pratik', 'se', 'bsc', 'developer', 'php,javascript', '', 'it', '44444', 'we are looking for a professional java developer with highly experience.', 'maruf'),
(26, 'Pratik', 'se', 'bsc', 'developer', 'php,javascript', '', 'it', '50000', 'This a job for managing.This job is suitable.This job has salary 2000.', 'Pratik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uID` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uID`, `email`, `password`, `type`) VALUES
('admin', 'mdullash@gmail.com', '1234', 'Admin'),
('', '', '', ''),
('ullash', 'mdullash@gmail.com', '1234', 'JobSeeker'),
('rizvi', 'mdullash@gmail.com', '1234', 'Company'),
('asif', 'mdullash@gmail.com', '1234', 'JobSeeker'),
('maruf', 'maruf@gmail.com', '1234', 'Company'),
('kibria', 'kibria@gmail.com', '12345', 'JobSeeker'),
('Pratik', 'pratik@gmail.com', '123', 'Company');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blogID`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cvID`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blogID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cvID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
