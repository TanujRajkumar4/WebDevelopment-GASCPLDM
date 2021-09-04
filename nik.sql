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
-- Database: `nik`
--

-- --------------------------------------------------------

--
-- Table structure for table `eve`
--

CREATE TABLE `eve` (
  `news_id` int(11) NOT NULL,
  `news_date` date DEFAULT NULL,
  `news_title` varchar(250) DEFAULT NULL,
  `news_desc` longtext DEFAULT NULL,
  `news_photo` varchar(1000) DEFAULT NULL,
  `place` varchar(250) DEFAULT NULL,
  `eve_date` date DEFAULT NULL,
  `map` varchar(1000) NOT NULL,
  `progm` longtext NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eve`
--

INSERT INTO `eve` (`news_id`, `news_date`, `news_title`, `news_desc`, `news_photo`, `place`, `eve_date`, `map`, `progm`, `type`) VALUES
(3, '2015-08-08', 'sample eve', 'fgds dsg dfg dsfg dsfg fdsg dsgf dsf xzcvwe vx vb wer vzxcxv er g xv gsfg cvxcvzxbgdsh dsfg sdw rgdd bvxbxvbcvbfghdc xds       sdfgsdfg ', 'events/autumn.jpg', 'Coimbatore', '2015-08-08', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15667.025801874863!2d76.99768845!3d10.981747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859f09794996f%3A0x5a507db39d228b85!2sNanjundapuram%2C+Coimbatore%2C+Tamil+Nadu!5e0!3m2!1sen!2sin!4v1439553460140\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'fgds dsg dfg dsfg dsfg fdsg dsgf dsf xzcvwe vx vb wer vzxcxv er g xv gsfg cvxcvzxbgdsh dsfg sdw rgdd bvxbxvbcvbfghdc xds       sdfgsdfg ', 'E'),
(4, '0000-00-00', 'Commerce Department', '', ',../excursion/1439536183sc.jpg,../excursion/1439536183sc.jpg', '', NULL, '', '', ''),
(7, '0000-00-00', '100% Result', '100% result result result', ',../news/1439549964sc.jpg,../news/14395499641sc.jpg,../news/14395499642sc.jpg', '', NULL, 'https://www.google.co.in/maps/place/Nanjundapuram,+Coimbatore,+Tamil+Nadu/@10.981747,76.9976884,15z/data=!3m1!4b1!4m2!3m1!1s0x3ba859f09794996f:0x5a507db39d228b85?hl=en', '', 'N'),
(6, '2015-07-28', 'Sample Event111', 'asg ag afg asgasfgasfgafgfag ag ', ',../Excursion/1439541998sc.jpg,../Excursion/14395419981sc.jpg,../Excursion/14395419982sc.jpg', 'Palladam', NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15667.025801874863!2d76.99768845!3d10.981747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba859f09794996f%3A0x5a507db39d228b85!2sNanjundapuram%2C+Coimbatore%2C+Tamil+Nadu!5e0!3m2!1sen!2sin!4v1439553460140\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'dfga afg asfg asg adf gfa gag as gasgasg afg', 'Ex'),
(8, '0000-00-00', 'Test', '<u>dfgdfg</u>', '', '', NULL, '', '', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photo_id` int(11) NOT NULL,
  `photo_title` varchar(100) DEFAULT NULL,
  `gallery` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photo_id`, `photo_title`, `gallery`) VALUES
(2, 'Sample Gallery', ',../imges/1439548221sc.jpg,../imges/14395482211sc.jpg,../imges/14395482212sc.jpg'),
(6, 'Sample Gallery2', ',../imges/1439548682sc.jpg,../imges/14395486821sc.jpg,../imges/14395486822sc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(50) DEFAULT NULL,
  `page_content` longtext DEFAULT NULL,
  `seo_friendly_url` varchar(50) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `post_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_content`, `seo_friendly_url`, `parent_id`, `post_date`) VALUES
(1, 'About', '<p>?????<span style=\"line-height: 1.42857143;\">1986</span>??&nbsp;????? Nanjundapuram<span style=\"line-height: 1.42857143;\">&nbsp;&nbsp;</span><span style=\"line-height: 1.42857143;\">????&nbsp;</span>?????? ??????????&nbsp;???&nbsp;<span style=\"line-height: 1.42857143;\">???????????</span><span style=\"line-height: 1.42857143;\">?</span><span style=\"line-height: 1.42857143;\">??</span><span style=\"line-height: 1.42857143;\">?</span><span style=\"line-height: 1.42857143;\">?</span><span style=\"line-height: 1.42857143;\">??</span><span style=\"line-height: 1.42857143;\">&nbsp;</span><span style=\"line-height: 1.42857143;\">??????&nbsp;????,&nbsp;</span>?????</p>', 'about', 1, '2014-12-13');

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
-- Indexes for table `eve`
--
ALTER TABLE `eve`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `test_admin`
--
ALTER TABLE `test_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eve`
--
ALTER TABLE `eve`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `test_admin`
--
ALTER TABLE `test_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
