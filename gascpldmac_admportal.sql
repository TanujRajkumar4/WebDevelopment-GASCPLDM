-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2021 at 09:44 AM
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
  `CourseCurriculumURL` varchar(500) NOT NULL,
  `Dept_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseID`, `CourseName`, `CourseOverview`, `CourseDescription`, `CourseCurriculumURL`, `Dept_ID`) VALUES
(1, 'B.A. Tamil', 'B.A. Tamil - Overview', 'B.A. Tamil - Description ', 'index.pdf', 1),
(2, 'M.A. Tamil', '', '', '', 1),
(3, 'B.A. English', '', '', '', 2),
(4, 'M.A. English', '', '', '', 2);

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
(3, 'Mathematics Department', '<span style=\"font-size: 14px;\">Mathematics Department -&nbsp;</span><span style=\"font-family: &quot;Open Sans&quot;, sans-serif; text-align: right;\">Overview&nbsp;</span>', '<span style=\"font-size: 14px;\">Mathematics Department -&nbsp;</span><span style=\"font-family: &quot;Open Sans&quot;, sans-serif; text-align: right;\">Description</span>'),
(4, 'Commerce Department', '<span style=\"font-size: 14px;\">Commerce Department -</span><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\">Overview 1</span><p><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\"><br></span></p>', '<span style=\"font-size: 14px;\">Commerce Department -&nbsp;</span><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\">Description1</span><p><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\"><br></span></p>'),
(5, 'TEST', 'TEST', 'TEST');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `FacultyID` int(11) NOT NULL,
  `FacultyName` varchar(50) NOT NULL,
  `FacultyDesignation` varchar(50) NOT NULL,
  `FacultyQualification` varchar(50) NOT NULL,
  `FacultyOverview` varchar(2000) NOT NULL,
  `FacultyPhotoURL` varchar(100) NOT NULL,
  `Dept_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`FacultyID`, `FacultyName`, `FacultyDesignation`, `FacultyQualification`, `FacultyOverview`, `FacultyPhotoURL`, `Dept_ID`) VALUES
(1, 'Advaith', 'Assistant Professor', 'Ph.D.', 'TEST', 'img/person_avatar.png', 1),
(2, 'Kevin', 'Assistant Professor', 'M.A. Tamil', '', 'img/person_avatar.png', 1),
(3, 'Andrew', 'Associate Professor', 'Ph.D.', '', 'img/person_avatar.png', 2),
(6, 'TEST', 'TEST', 'TEST', 'TEST', 'img/person_avatar.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `Page_ID` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_content` varchar(2000) NOT NULL,
  `page_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Page_ID`, `page_name`, `page_content`, `page_status`) VALUES
(1, 'About Us', 'Puratchi Thalaivi Amma Government Arts and Science College, Palladam was established in the year 2017. This College is one of the best Government Institutions in Tamilnadu.\r\n\r\nAdmissions to the college is coveted by students due to the exceptional guidance offered by highly qualified teaching faculty. The ultimate aim of education is to make a person knowledgeable and well informed and offer him / her life skills so that one can earn one’s livelihood.  ', 'ACTIVE'),
(2, 'About The College', 'About The College', 'ACTIVE'),
(3, 'Mission & Vision', 'Mission & Vision', 'ACTIVE'),
(4, 'Former Principal', 'Former Principal', 'ACTIVE'),
(5, 'Alumni Association', 'Alumni Association', 'ACTIVE'),
(6, 'Administration', 'Administration', 'ACTIVE'),
(7, 'Principal', 'Principal', 'ACTIVE'),
(8, 'Academic Council', 'Academic Council', 'ACTIVE'),
(9, 'College Committee', 'College Committee', 'ACTIVE'),
(10, 'UGC Committee', 'UGC Committee', 'ACTIVE'),
(11, 'NAAC', 'NAAC', 'ACTIVE'),
(12, 'Anti Ragging', 'Anti Ragging', 'ACTIVE'),
(13, 'Disciplinary Committee', 'Disciplinary Committee', 'ACTIVE'),
(14, 'Placement', 'Placement', 'ACTIVE'),
(15, 'Carrier Guidance', 'Carrier Guidance', 'ACTIVE'),
(16, 'Research Committee', 'Research Committee', 'ACTIVE'),
(17, 'Finance Committee', 'Finance Committee', 'ACTIVE'),
(18, 'College Office', 'College Office', 'ACTIVE'),
(19, 'Annual Report', 'Annual Report', 'ACTIVE'),
(20, 'Scholarship', 'Scholarship', 'ACTIVE'),
(21, 'Library', 'Library', 'ACTIVE'),
(22, 'Physical Education', 'Physical Education', 'ACTIVE'),
(23, 'Academic Calendar', 'Academic Calendar', 'ACTIVE'),
(24, 'Facilities', 'Facilities', 'ACTIVE'),
(25, 'Examination', 'Examination', 'ACTIVE'),
(26, 'Syllabus', 'Syllabus', 'ACTIVE'),
(27, 'Results', 'Results', 'ACTIVE'),
(28, 'Activities', 'Activities', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `test_admin`
--

CREATE TABLE `test_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_user` varchar(30) DEFAULT NULL,
  `admin_pass` varchar(30) DEFAULT NULL,
  `admin_email` varchar(50) DEFAULT NULL,
  `user_site_title` varchar(200) DEFAULT NULL,
  `admin_site_title` varchar(200) DEFAULT NULL,
  `admin_domain_url` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_admin`
--

INSERT INTO `test_admin` (`admin_id`, `admin_user`, `admin_pass`, `admin_email`, `user_site_title`, `admin_site_title`, `admin_domain_url`) VALUES
(1, 'admin', 'admin', 'test@test.com', 'Admin Panel - NIK Tuition', 'Admin Panel - NIK Tuition', NULL);

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
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`Page_ID`);

--
-- Indexes for table `test_admin`
--
ALTER TABLE `test_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `FacultyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test_admin`
--
ALTER TABLE `test_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
