-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2021 at 01:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gascpldmac_admportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseID` int(11) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `CourseOverview` varchar(500) NOT NULL,
  `CourseDescription` varchar(2000) NOT NULL,
  `Dept_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `CourseOverview`, `CourseDescription`, `Dept_ID`) VALUES
(1, 'B.A. Tamil', '', '', 1),
(2, 'M.A. Tamil', '', '', 1),
(3, 'B.A. English', '', '', 2),
(4, 'M.A. English', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_ID` int(11) NOT NULL,
  `Dept_Name` varchar(100) NOT NULL,
  `Dept_OverView` varchar(500) NOT NULL,
  `Dept_Description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_ID`, `Dept_Name`, `Dept_OverView`, `Dept_Description`) VALUES
(1, 'Tamil Department', 'The Department of Tamil was established in 2000 with U.G. Programme and in 2004 with P.G. Programme. At Present there are 23 members of staff and all of them are Ph.D. holders. Every member of staff is guiding research scholars inside and outside the college. All the faculty members are dedicated in carrying out the research programmes. Ph.D. (Fill-Time) has been introduced from January 2012 onwards.', 'As this is an autonomous college, the Board of Studies of the Department is constituted with one University Nominee, one Alumnus, one Industrialist, one Subject Expert along with the Head of the Department and the members of Staff. Recently the syllabus was revised and modified in January, 2012.\r\n The Slow-learners are identified after the results of every semester and they are given special coaching by the members of staff outside the college hours. The first year Tamil Literature students are offered orientation programmes immediately after the admission.'),
(2, 'English Department', '', ''),
(3, 'Mathematics Department', '<span style=\"font-size: 14px;\">Mathematics Department - Over View</span>', 'Mathematics Department - Description'),
(4, 'Commerce Department', '<span style=\"font-family: &quot;Open Sans&quot;, sans-serif; background-color: rgb(249, 249, 249);\">Commerce Department - Over View</span>', '<span style=\"font-family: &quot;Open Sans&quot;, sans-serif; font-size: medium; background-color: rgb(245, 245, 245);\">Commerce Department - Description</span>');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FacultyID` int(11) NOT NULL,
  `FacultyName` varchar(50) NOT NULL,
  `FacultyDesignation` varchar(50) NOT NULL,
  `FacultyQualification` varchar(50) NOT NULL,
  `Dept_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FacultyID`, `FacultyName`, `FacultyDesignation`, `FacultyQualification`, `Dept_ID`) VALUES
(1, 'Advaith', 'Assistant Professor', 'Ph.D.', 1),
(2, 'Kevin', 'Assistant Professor', 'M.A. Tamil', 1),
(3, 'Andrew', 'Associate Professor', 'Ph.D.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_ID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`FacultyID`),
  ADD KEY `Dept_ID` (`Dept_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `FacultyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `department` (`Dept_ID`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`Dept_ID`) REFERENCES `department` (`Dept_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
