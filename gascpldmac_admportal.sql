-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2021 at 01:06 PM
-- Server version: 10.3.31-MariaDB-log
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `Dept_Description` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_ID`, `Dept_Name`, `Dept_OverView`, `Dept_Description`) VALUES
(1, 'Tamil Department', 'ABOUT THE DEPARTMENT', 'As this is an autonomous college, the Board of Studies of the Department is constituted with one University Nominee, one Alumnus, one Industrialist, one Subject Expert along with the Head of the Department and the members of Staff. Recently the syllabus was revised and modified in January, 2012.\r\n The Slow-learners are identified after the results of every semester and they are given special coaching by the members of staff outside the college hours. The first year Tamil Literature students are offered orientation programmes immediately after the admission.'),
(2, 'English Department', 'ABOUT THE DEPARTMENT', '<p style=\"text-align:justify;\">\r\nThe Department of English was established in the year 2017. The department has well qualified and highly motivated faculty to cater the needs of the students. The facilities in the department are also capable to meet the requirements of the faculty for their research work. In addition to their regular teaching of undergraduate courses, the faculty members engage actively in research work in various areas like African American Literature, Indian Writing in English and English Language Teaching and published papers in national and international conferences and indexed journals. It extends an immense support to the development of effective communication skills of the students. A team of experienced faculty with proven excellence in teaching, research and publications helps the students to transform themselves into successful professionals. It offers vibrant atmosphere to scholars to nurture the spirit of scientific inquiry and to pursue research. <br></p>\r\n<b>DEPARTMENT OBJECTIVES :</b>\r\n<br>\r\n<p style=\"text-align:justify;\"> To enable our students to read, write as well as to think well and also to provide them with appropriate knowledge in the discipline of English Language and Literature.  More specifically, we aim to graduate students who have : \r\n<ul style=\"list-style: disc;padding: 0 6px 0 15px;\">\r\n<li> The ability to express themselves clearly and comprehensively, orally and in writing,\r\n<li>The reading skills to examine literature from multiple eras, cultures and genres with critical understanding\r\n<li>An appropriate knowledge of relevant fields within the discipline, including literature, literary history, criticism, and theory, and the history of English Language and Literature.\r\n</ul>\r\nThe specific strategies to achieve these goals include :\r\n<ul style=\"list-style: disc;padding: 0 6px 0 15px;\">\r\n<li> The close reading of texts in lectures, seminar presentations, and small - group discussions \r\n<li>The writing of analytical and other kinds of essays\r\n<li>Creative and professional writing\r\n</ul >\r\n</p>\r\n<p style=\"text-align:justify;\">\r\n<b>DEPARTMENT VISION:</b><br> \r\n<ul style=\"list-style: disc; padding: 0 6px 0 15px;\">\r\n<li>Developing training skills to face the current and future challenges\r\n<li>Enable students to be a lifelong learners and socially committed professionals\r\n<li>Help students see themselves as professionals, as part of a discipline with skills and abilities valuable in the teaching, publishing and research.\r\n</ul>\r\n</p>\r\n<p style=\"text-align:justify;\">\r\n<b>DEPARTMENT MISSION:</b><br> <ul style=\"list-style: disc; padding: 0 6px 0 15px;\">\r\n<li> Provide students with sophisticated writing and critical thinking skills useful not only in the academic but also in the World at large.\r\n\r\n<li> Assure that students build knowledge of the content and method of literary studies, English education, a wide variety of texts and presentation\r\n<li> Offer opportunities to explore identity, values, manners and morals.\r\n\r\n</ul>\r\n</p>'),
(3, 'Mathematics Department', 'ABOUT THE DEPARTMENT', '<p style=\"text-align:justify\">\r\nThe Department of Mathematics began its journey with an under graduate course in 2017, thereby aimingin producing successful Mathematicians. Department has well-functioning department library with 748 books and it is added every year. The main aim of the department aims in educating and elevating the individual as life long learners and a productive citizen.\r\n<br></p>\r\n\r\n<p style=\"text-align:justify\">To apply various instrumental methods to analyze the\r\nchemical compounds and to improve understanding of\r\ntheoretical concepts.</p>\r\n<b>DEPARTMENT OBJECTIVES :</b>\r\n<br><p style=\"text-align:justify\"> To strive for academic excellence and impact quality education with emphasis on Mathematics.\r\n</p>\r\n<p style=\"text-align:justify\">\r\n<b>DEPARTMENT VISION:</b><br> \r\nTo achieve high standards of excellence in generating and propagating knowledge in Mathematics.\r\n</p>\r\n<p style=\"text-align:justify\">\r\n<b>DEPARTMENT MISSION:</b><br> To inculcate the habit of executing effective implementation on Mathematical problems in the minds of all concerned, which they can apply in their Professional life in future.\r\n</p>'),
(4, 'Commerce Department', 'ABOUT THE DEPARTMENT', '<span style=\"font-size: 14px;\">Commerce Department -&nbsp;</span><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\">Description1</span><p><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\"><br></span></p>'),
(5, 'Computer Department', 'ABOUT THE DEPARTMENT', '<span style=\"font-size: 14px;\">Computer Science Department -&nbsp;</span><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\">Description1</span><p><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\"><br></span></p>'),
(6, 'Chemistry Department', 'ABOUT THE DEPARTMENT\r\n', '<p style=\"text-align:justify\">\r\nThe chemistry department serves the purpose of\r\nimparting knowledge in the core science subject,\r\nwhich is a foundational building block for most\r\nengineering disciplines.<br></p>\r\n\r\n<p style=\"text-align:justify\">To apply various instrumental methods to analyze the\r\nchemical compounds and to improve understanding of\r\ntheoretical concepts.</p>\r\n<b>DEPARTMENT OBJECTIVES :</b>\r\n<br><p style=\"text-align:justify\">Graduates from our program will possess a strong foundational\r\nknowledge of modern inorganic, organic, analytical, physical, and\r\nbiological chemistry.\r\n<ul style=\"list-style: disc;padding: 0 6px 0 15px;\">\r\n<li>Students will demonstrate scientific understandings of\r\nthe structure of matter and of its physical and chemical\r\ntransformations.\r\n<br>\r\nGraduates from our program will be proficient in applying\r\nmodern laboratory methods and technological tools to the\r\nstudies of chemical systems.\r\n<li> Students will apply standard laboratory\r\ntechniques to carry out quantitative analysis,\r\nchemical synthesis, characterization of\r\ncompounds, and measurement of chemical\r\nreactivity.</ul></p>\r\n<p style=\"text-align:justify\">\r\n<b>DEPARTMENT VISION:</b><br>\r\n\r\nThe Chemistry Department prepares students for a diverse and changing world. We strive to contribute to a chemically literate society through teaching (with classrooms, labs, and research), scholarship, and service.\r\n</p>\r\n\r\n<p style=\"text-align:justify\">\r\n<b>DEPARTMENT MISSION:</b><br>\r\n<ul style=\"list-style: disc;padding: 0 6px 0 15px;\">\r\n<li>Provide students with sophisticated writing and critical thinking skills useful not only in the academic but also in the World at large.\r\n<li>Assure that students build knowledge of the content and method of literary studies, English education, a wide variety of texts and presentation\r\n<li>Offer opportunities to explore identity, values, manners and morals.\r\n\r\n</ul>\r\n</p>\r\n'),
(7, 'Costume Design and Fashion Department', 'ABOUT THE DEPARTMENT\r\n', '<span style=\"font-size: 14px;\">Costume Design and Fashion Department-&nbsp;</span><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\">Description1</span><p><span style=\"font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" right;\"=\"\"><br></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `events_id` int(11) NOT NULL,
  `events_title` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `events_desc` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `events_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `events_photo` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `events_status` varchar(20) CHARACTER SET latin1 DEFAULT 'A'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`events_id`, `events_title`, `events_desc`, `events_date`, `events_photo`, `events_status`) VALUES
(1, '75à®µà®¤à¯ à®šà¯à®•à®¨à¯à®¤à®¿à®° à®¤à®¿à®© à®µà®¿à®´à®¾', '15.08.2021 à®…à®©à¯à®±à¯ à®¨à®Ÿà¯ˆà®ªà¯†à®±à¯à®± 75à®µà®¤à¯ à®šà¯à®•à®¨à¯à®¤à®¿à®° à®¤à®¿à®© à®µà®¿à®´à®¾à®µà®¿à®²à¯ à®¨à®®à®¤à¯ à®•à®²à¯à®²à¯‚à®°à®¿à®¯à®¿à®©à¯ à®šà®¾à®°à¯à®ªà®¾à®• à®ªà¯‡à®°à®¾à®šà®¿à®°à®¿à®¯à®°à¯à®•à®³à¯ à®®à®±à¯à®±à¯à®®à¯ à®†à®šà®¿à®°à®¿à®¯à®°à¯ à®…à®²à¯à®²à®¾à®¤ à®ªà®£à®¿à®¯à®¾à®³à®°à¯à®•à®³à¯à®®à¯ (à®‡à®•à¯à®•à®²à¯à®²à¯‚à®°à®¿ à®•à¯Šà®°à¯‹à®© à®®à¯ˆà®¯à®®à®¾à®• à®‡à®°à¯à®¨à¯à®¤ à®•à®¾à®°à®£à®¤à¯à®¤à®¿à®©à®¾à®²à¯) à®‡à®•à¯à®•à®²à¯à®²à¯‚à®°à®¿à®•à¯à®•à¯  à®…à®°à¯à®•à®¿à®²à¯ à®‰à®³à¯à®³ à®…à®°à®šà¯ à®ªà¯†à®£à¯à®•à®³à¯ à®®à¯‡à®²à¯à®¨à®¿à®²à¯ˆà®ªà¯à®ªà®³à¯à®³à®¿à®¯à®¿à®²à¯ à®…à®ªà¯à®ªà®³à¯à®³à®¿ à®†à®šà®¿à®°à®¿à®¯à®°à¯à®•à®³à¯à®Ÿà®©à¯ à®šà¯‡à®°à¯à®¨à¯à®¤à¯ à®šà¯à®¤à®¨à¯à®¤à®¿à®° à®¤à®¿à®© à®µà®¿à®´à®¾ à®•à¯Šà®£à¯à®Ÿà®¾à®Ÿà®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯.', '2021-08-15', '../img/events/16337785971sc.png', 'A'),
(3, 'à®‡à®šà¯ˆ à®•à®°à¯à®¤à¯à®¤à®°à®™à¯à®•à®®à¯ ', '13.09.2021 à®…à®©à¯à®±à¯ à®¨à®®à®¤à¯ à®•à®²à¯à®²à¯‚à®°à®¿à®¯à®¿à®²à¯ à®‡à®šà¯ˆ à®•à®°à¯à®¤à¯à®¤à®°à®™à¯à®•à®®à¯ à®¨à®Ÿà¯ˆà®ªà¯†à®±à¯à®±à®¤à¯. à®…à®¤à®¿à®²à¯ à®¤à®¿à®°à¯. N. à®ªà®¿à®°à®ªà¯ à®°à®¾à®®à¯ à®‡à®šà¯ˆ à®…à®®à¯ˆà®ªà¯à®ªà®¾à®³à®°à¯ à®…à®µà®°à¯à®•à®³à¯  à®•à¯Šà®°à¯‹à®© à®ªà¯‡à®°à®¿à®Ÿà®°à¯ à®•à®¾à®²à®¤à¯à®¤à®¿à®²à¯ à®‡à®šà¯ˆà®¯à®¿à®©à¯ à®ªà®™à¯à®•à¯ à®Žà®©à¯à®± à®¤à®²à¯ˆà®ªà¯à®ªà®¿à®²à¯ à®šà®¿à®±à®ªà¯à®ªà¯à®°à¯ˆ à®†à®±à¯à®±à®¿à®©à®¾à®°à¯. à®…à®•à¯ à®•à®°à¯à®¤à¯à®¤à®°à®™à¯à®•à®¿à®±à¯à®•à¯ à®‡à®šà¯ˆà®¯à®¿à®²à¯ à®†à®°à¯à®µà®®à¯ à®‰à®³à¯à®³ à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®•à®²à®¨à¯à®¤à¯ à®•à¯Šà®£à¯à®Ÿà®©à®°à¯.', '2021-09-13', '../img/events/1633775545sc.png', 'A'),
(2, 'à®šà®¿à®±à®ªà¯à®ªà¯ à®•à¯Šà®°à¯‹à®© à®¤à®Ÿà¯à®ªà¯à®ªà¯‚à®šà®¿ à®®à¯à®•à®¾à®®à¯', '01.09.2021 à®…à®©à¯à®±à¯ à®¨à®®à®¤à¯ à®•à®²à¯à®²à¯‚à®°à®¿à®¯à®¿à®©à¯ à®šà®¾à®°à¯à®ªà®¾à®• à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à®¾à®© à®šà®¿à®±à®ªà¯à®ªà¯ à®•à¯Šà®°à¯‹à®© à®¤à®Ÿà¯à®ªà¯à®ªà¯‚à®šà®¿ à®®à¯à®•à®¾à®®à¯ à®à®±à¯à®ªà®¾à®Ÿà¯ à®šà¯†à®¯à¯à®¯à®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯. à®…à®¤à®¿à®²à¯ 120 à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯ à®¤à®Ÿà¯à®ªà¯à®ªà¯‚à®šà®¿ à®šà¯†à®²à¯à®¤à¯à®¤à®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯.', '2021-09-01', '../img/events/16337782731sc.png', 'A'),
(5, 'à®šà®®à¯‚à®• à®¨à¯€à®¤à®¿ à®¨à®¾à®³à¯', '17.09.2021 à®…à®©à¯à®±à¯ à®¨à®®à®¤à¯ à®•à®²à¯à®²à¯‚à®°à®¿à®¯à®¿à®²à¯ à®šà®®à¯‚à®• à®¨à¯€à®¤à®¿ à®¨à®¾à®³à¯ à®•à¯Šà®£à¯à®Ÿà®¾à®Ÿà®ªà¯à®ªà®Ÿà¯à®Ÿà®¤à¯. à®…à®¤à®¿à®²à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯ à®†à®šà®¿à®°à®¿à®¯à®°à¯à®•à®³à¯ à®®à®±à¯à®±à¯à®®à¯ à®†à®šà®¿à®°à®¿à®¯à®°à¯ à®…à®²à¯à®²à®¾à®¤ à®ªà®£à®¿à®¯à®¾à®³à®°à¯à®•à®³à¯ à®šà®®à¯‚à®• à®¨à¯€à®¤à®¿ à®¨à®¾à®³à¯ à®‰à®±à¯à®¤à®¿à®®à¯Šà®´à®¿ à®Žà®Ÿà¯à®¤à¯à®¤à¯à®•à¯à®•à¯Šà®£à¯à®Ÿà®©à®°à¯.', '2021-09-17', '../img/events/16337816501sc.png', 'A'),
(6, ' à®ªà¯à®¤à®¿à®¯ à®µà®¾à®•à¯à®•à®¾à®³à®°à¯ à®ªà®Ÿà¯à®Ÿà®¿à®¯à®²à®¿à®²à¯ à®ªà¯†à®¯à®°à¯ à®šà¯‡à®°à¯à®•à¯à®•à¯à®®à¯ à®®à¯à®•à®¾à®®à¯', '07.09.2021 à®…à®©à¯à®±à¯ à®¨à®®à®¤à¯ à®•à®²à¯à®²à¯‚à®°à®¿à®¯à®¿à®²à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à®¾à®© à®ªà¯à®¤à®¿à®¯ à®µà®¾à®•à¯à®•à®¾à®³à®°à¯ à®ªà®Ÿà¯à®Ÿà®¿à®¯à®²à®¿à®²à¯ à®ªà¯†à®¯à®°à¯ à®šà¯‡à®°à¯à®•à¯à®•à¯à®®à¯ à®®à¯à®•à®¾à®®à¯ à®¨à®Ÿà¯ˆà®ªà¯†à®±à¯à®±à®¤à¯. à®…à®¤à®¿à®²à¯ à®ªà®²à¯à®²à®Ÿà®®à¯ à®¤à®¾à®²à¯à®•à¯à®•à®¾ à®µà®Ÿà¯à®Ÿà®¾à®Ÿà¯à®šà®¿à®¯à®°à¯ à®¤à®¿à®°à¯. S.à®¤à¯‡à®µà®°à®¾à®œà¯ à®…à®µà®°à¯à®•à®³à¯à®®à¯ à®ªà®²à¯à®²à®Ÿà®®à¯ à®¤à¯‡à®°à¯à®¤à®²à¯ à®¤à¯à®£à¯ˆ à®µà®Ÿà¯à®Ÿà®¾à®Ÿà¯à®šà®¿à®¯à®°à¯ à®¤à®¿à®°à¯. K.M.à®šà¯†à®¨à¯à®¤à®¿à®²à¯ à®ªà®¿à®°à®ªà¯ à®…à®µà®°à¯à®•à®³à¯à®®à¯ à®®à¯à®•à®¾à®®à¯ˆ à®¤à¯à®µà®•à¯à®•à®¿ à®µà¯ˆà®¤à¯à®¤à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯ à®ªà¯à®¤à®¿à®¯ à®µà®¾à®•à¯à®•à®¾à®³à®°à¯ à®ªà®Ÿà¯à®Ÿà®¿à®¯à®²à®¿à®²à¯ à®ªà¯†à®¯à®°à¯ à®šà¯‡à®°à¯à®ªà¯à®ªà¯ à®ªà®Ÿà®¿à®µà®¤à¯à®¤à®¿à®©à¯ˆ à®µà®´à®™à¯à®•à®¿à®©à®°à¯ à®®à®±à¯à®±à¯à®®à¯  à®µà®¾à®•à¯à®•à®¾à®³à®°à¯à®•à®³à®¿à®©à¯ à®œà®©à®¨à®¾à®¯à®• à®•à®Ÿà®®à¯ˆ à®ªà®±à¯à®±à®¿ à®šà®¿à®±à®ªà¯à®ªà¯à®°à¯ˆ à®†à®±à¯à®±à®¿à®©à®°à¯.', '2021-09-07', '../img/events/16337817751sc.png', 'A'),
(7, 'à®¤à¯Šà®´à®¿à®²à¯à®¨à¯†à®±à®¿ à®µà®´à®¿à®•à®¾à®Ÿà¯à®Ÿà¯à®®à¯ à®¨à®¿à®•à®´à¯à®šà¯à®šà®¿', '12.08.2021 à®…à®©à¯à®±à¯ à®¨à®®à®¤à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯ à®®à¯à®±à¯à®ªà®•à®²à¯ 11 à®®à®£à®¿ à®…à®³à®µà®¿à®²à¯ à®®à®¾à®µà®Ÿà¯à®Ÿ à®µà¯‡à®²à¯ˆà®µà®¾à®¯à¯à®ªà¯à®ªà¯ à®®à®±à¯à®±à¯à®®à¯ à®¤à¯Šà®´à®¿à®²à¯à®¨à¯†à®±à®¿ à®µà®´à®¿à®•à®¾à®Ÿà¯à®Ÿà¯à®®à¯ à®®à¯ˆà®¯à®®à¯, à®•à¯‹à®µà¯ˆ à®šà®¾à®°à¯à®ªà®¾à®• à®¤à¯Šà®´à®¿à®²à¯à®¨à¯†à®±à®¿ à®µà®´à®¿à®•à®¾à®Ÿà¯à®Ÿà¯à®®à¯ à®¨à®¿à®•à®´à¯à®šà¯à®šà®¿ à®‡à®£à¯ˆà®¯ à®µà®´à®¿à®¯à®¾à®• à®¨à®Ÿà¯ˆà®ªà¯†à®±à¯à®±à®¤à¯. à®…à®¤à®¿à®²à¯ à®¤à®¿à®°à¯. O.S. à®žà®¾à®©à®šà¯‡à®•à®°à®©à¯  à®‡à®£à¯ˆ à®‡à®¯à®•à¯à®•à¯à®©à®°à¯ à®…à®µà®°à¯à®•à®³à¯ à®¤à®²à¯ˆà®®à¯ˆ à®‰à®°à¯ˆà®¯à®¾à®±à¯à®±à®¿à®©à®¾à®°à¯.\r\nà®µà¯‡à®²à¯ˆà®µà®¾à®¯à¯à®ªà¯à®ªà¯à®¤à¯ à®¤à¯à®±à¯ˆà®¯à®¿à®©à¯ à®ªà®£à®¿à®•à®³à¯ˆ à®ªà®±à¯à®±à®¿ à®¤à®¿à®°à¯. M.à®•à®°à¯à®£à®¾à®•à®°à®©à¯ à®¤à¯à®£à¯ˆ à®‡à®¯à®•à¯à®•à¯à®©à®°à¯ à®®à®±à¯à®±à¯à®®à¯ à®¤à®¿à®°à¯à®®à®¤à®¿. K.M.à®µà®¿à®œà®¯à®²à®Ÿà¯à®šà¯à®®à®¿ à®‡à®³à®¨à®¿à®²à¯ˆ à®µà¯‡à®²à¯ˆà®µà®¾à®¯à¯à®ªà¯à®ªà¯ à®…à®²à¯à®µà®²à®°à¯, à®…à®µà®°à¯à®•à®³à¯ à®‰à®°à¯ˆà®¯à®¾à®±à¯à®±à®¿à®©à®°à¯.\r\n', '2021-08-12', '../img/events/16337819581sc.png', 'A'),
(8, 'à®šà®Ÿà¯à®Ÿà®®à¯ à®šà®¾à®°à¯à®¨à¯à®¤ à®µà®¿à®´à®¿à®ªà¯à®ªà¯à®£à®°à¯à®µà¯ à®¨à®¿à®•à®´à¯à®šà¯à®šà®¿', '19.08.2021 à®…à®©à¯à®±à¯ à®®à®¤à®¿à®¯à®®à¯ 2 à®®à®£à®¿ à®…à®³à®µà®¿à®²à¯ à®šà®Ÿà¯à®Ÿà®®à¯ à®šà®¾à®°à¯à®¨à¯à®¤ à®µà®¿à®´à®¿à®ªà¯à®ªà¯à®£à®°à¯à®µà¯ à®¨à®¿à®•à®´à¯à®šà¯à®šà®¿ à®‡à®£à¯ˆà®¯ à®µà®´à®¿à®¯à®¾à®• à®¨à®Ÿà¯ˆà®ªà¯†à®±à¯à®±à®¤à¯. à®…à®¤à®¿à®²à¯ à®ªà®²à¯à®²à®Ÿà®®à¯ à®¨à¯€à®¤à®¿à®®à®©à¯à®± à®¨à¯€à®¤à®¿à®ªà®¤à®¿à®•à®³à¯ à®®à®±à¯à®±à¯à®®à¯ à®µà®•à¯à®•à¯€à®²à¯à®•à®³à¯ à®•à®²à®¨à¯à®¤à¯ à®•à¯Šà®£à¯à®Ÿà¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯ à®šà®Ÿà¯à®Ÿà®¤à¯à®¤à®¿à®©à¯ à®®à¯à®•à¯à®•à®¿à®¯à®¤à¯à®¤à¯à®µà®¤à¯à®¤à¯ˆ à®ªà®±à¯à®±à®¿ à®šà®¿à®±à®ªà¯à®ªà¯à®°à¯ˆ à®µà®´à®™à¯à®•à®¿à®©à®°à¯ à®®à®±à¯à®±à¯à®®à¯ à®®à®¾à®£à®µà®°à¯à®•à®³à¯à®•à¯à®•à¯ à®šà®Ÿà¯à®Ÿà®¤à¯à®¤à®¿à®²à¯ à®‰à®³à¯à®³ à®šà®¨à¯à®¤à¯‡à®•à®™à¯à®•à®³à¯ˆ à®¤à¯†à®³à®¿à®µà¯ à®ªà®Ÿà¯à®¤à¯à®¤à®¿à®©à®°à¯.', '2021-08-19', '../img/events/16337820481sc.png', 'A');

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
(1, 'Dr. S. BALAMURUGAN', 'Asst. Prof. and HOD', 'M.A., Ph.D.,PDF.,', 'Email ID: drbalamangai@yahoo.co.in', 'img/faculty/bala-tamil.png', 1),
(2, 'Dr. B. KAMALA,', 'Assistant Professor', 'M.A., M.Phil., B.Ed., Ph.D.,', 'Email ID: Kamalavasu68@gmail.com', 'img/faculty/kamala-tamil.png', 1),
(6, 'Dr. R. KRISHNAVENI,', 'Asst. Prof. and HOD', 'M.A., M.Sc., M.Phil., Ph.D., ADCA, PGDFM, PGDTE', 'Email ID: harishma83@yahoo.co.in', 'img/faculty/krish-eng.png', 2),
(7, 'Dr. M. Jayandran', 'Asst. Prof. and HOD', 'M.Sc., M.Phil., Ph.D.,', 'Email ID: jayandranchem@gmail.com', 'img/faculty/Jayandran_chemistry.png', 6),
(8, 'DR. K. KARTHIKEYAN  ', 'Asst. Prof & HOD', 'M.Sc., M.Phil., Ph.D., SET,', 'Email ID: gackarthik73@gmail.com', 'img/faculty/karthikeyan_cs.png', 5),
(9, 'MR. A. BALASUBRAMANIAN', 'Asst. Professor', 'MCA, MPhil, NET, SET.,', 'Email ID: profabalu@gmail.com', 'img/faculty/Bala_cs.png', 5),
(11, 'Dr. C. DHARMARAJ', 'Asst. Prof & HOD', 'M.Com, M.Phil., M.A., MBA., PGDCA., PGDMM., Ph.D.,', 'Email ID: dharmarajbusiness@gmail.com', 'img/faculty/dharmaraj-commerce.png', 4),
(12, 'Dr. R. JAYACHANDRAN', 'Asst. Professor & Principal', 'M.Com., M.Phil., MBA., PGDCA., Ph.D.,', 'Email ID: jcjvjjjr@gmail.com', 'img/faculty/jc-commerce.png', 4),
(13, 'Dr. S. DAVID SOUNDARARAJAN', 'Asst. Professor', 'M.Com, M.Phil., Ph.D.,', 'Email ID: davidjagan@yahoo.com', 'img/faculty/david_commerce.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `Page_ID` int(11) NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_content` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `page_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`Page_ID`, `page_name`, `page_content`, `page_status`) VALUES
(1, 'PG Programmes', 'Master degree started during the academic year 2019-2020  \r\n<br>\r\nM.Sc., Computer Science', 'ACTIVE'),
(2, 'About The College', 'Puratchi Thalaivi Amma Government Arts and Science College - Palladam was established in 2017, by the Government of Tamil Nadu at Palladam, in Tirupur district with a view to impart quality student centred education to produce proven strive hard for continuous development and improvement in learning and developmental activities. The college is affiliated with Bharathiar University, Coimbatore. Aiming at excellence, the college offers UG programmes in Tamil, English, Mathematics, Chemistry, Commerce, Commerce (Banking and Insurance), Computer Science, Costume and Fashion Designing. The college also works towards fostering partnerships with Academic and Industrial experts to provide quality education and opportunities for entrepreneurial development by providing hands-on training. The college plays a vital role in education and empowerment of children from poor economic sections', 'ACTIVE'),
(3, 'Mission & Vision', 'Mission & Vision', 'ACTIVE'),
(4, 'Former Principal', 'FORMER PRINCIPAL', 'ACTIVE'),
(5, 'Alumni Association', 'Alumni Association', 'ACTIVE'),
(6, 'UG Programmes', 'Bachelor degree started during the academic year 2017-2018 \r\n<br>\r\n\r\nB.A., Tamil Literature\r\n<br>\r\nB.A. English Literature\r\n<br>\r\nB.Com.\r\n<br>\r\nB.Sc., Computer Science\r\n<br>\r\nB.Sc., Mathematics\r\n<br>\r\n \r\nBachelor degree started during the academic year 2018-2019  \r\n \r\n<br>\r\nB.Sc., Costume Design and Fashion\r\n<br>\r\nB.Sc., Chemistry\r\n<br>\r\nB.Com., Banking and Insurance\r\n\r\n<br>\r\nBachelor degree started during the academic year 2019-2020  \r\n\r\n<br>\r\nB.Com., Computer Applications', 'ACTIVE'),
(7, 'Principal', 'Puratchi Thalaivi Amma Government Arts And Science College â€“ Palladam was established in the year 2017 to fulfill a long felt public need and dream for an excellent arts and science College in Palladam, Tirupur District. Our institution is working hard to provide value based education to rural students and to open the door of high quality education to them. The college has well equipped labs, and libraries to help the students in attaining highest standards in academics, research and professional skills. The main focus of the institution is to empower students with knowledge, wisdom, and experience. The infrastructure facilities and equipments combined with competent, talented and dedicated faculty contribute to a resourceful learning experience. The campus has adequate sports infrastructure to take care of sports and recreational activities.\r\n<br><br>\r\n We wish all our students and faculty a successful career\r\n<br><br>\r\nDr. R. JAYACHANDRAN M.Com., M.Phil., MBA., PGDCA., Ph.D.,\r\n     <br>PRINCIPAL\r\n<br> Email Id: principalpaladam@gmail.com \r\n', 'ACTIVE'),
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
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`events_id`);

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
  MODIFY `Dept_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `events_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `FacultyID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
