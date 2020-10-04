-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 09, 2015 at 05:50 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eloms`
--
CREATE DATABASE IF NOT EXISTS `eloms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eloms`;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(100) NOT NULL,
  `course` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course`) VALUES
(1, 'BSIT'),
(2, 'BSCS'),
(3, 'BSHRM'),
(4, 'BSBM'),
(5, 'BSOA'),
(6, 'CCT'),
(7, 'BSED');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id` int(100) NOT NULL,
  `instructor_id` varchar(200) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `activity1` varchar(200) NOT NULL,
  `activity2` varchar(200) NOT NULL,
  `activity3` varchar(200) NOT NULL,
  `activity4` varchar(200) NOT NULL,
  `activity5` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id`, `instructor_id`, `student_id`, `activity1`, `activity2`, `activity3`, `activity4`, `activity5`) VALUES
(1, '33', '201412651', 'ACTIVATED', 'ACTIVATED', 'INACTIVE', 'INACTIVE', 'INACTIVE'),
(2, '33', '201411157', 'ACTIVATED', 'INACTIVE', 'INACTIVE', 'INACTIVE', 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `date`, `time`) VALUES
(5, 'Adhan Timothy Younes', 'mack@yahoo.com', 'Computer-delivered electronic system that allows the user to control, combine, and manipulate different types of media, such as text, sound, video, computer graphics, and animation.', 'Wednesday, February 25,2015', '20:48:18 PM');

-- --------------------------------------------------------

--
-- Table structure for table `file_activity`
--

DROP TABLE IF EXISTS `file_activity`;
CREATE TABLE IF NOT EXISTS `file_activity` (
  `id` int(100) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `instructor_id` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `course_section` varchar(200) NOT NULL,
  `activity` varchar(500) NOT NULL,
  `time` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file_activity`
--

INSERT INTO `file_activity` (`id`, `student_id`, `instructor_id`, `name`, `course_section`, `activity`, `time`, `date`) VALUES
(7, '201411157', '33', 'Juan De la cruz', 'BSIT 1-A', 'painter.swf', '02:50:08 AM', 'Friday, March 06,2015'),
(9, '201411157', '33', 'Juan De la cruz', 'BSIT 1-A', 'colourwheel.swf', '10:37:30 AM', 'Friday, March 06,2015');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

DROP TABLE IF EXISTS `history_log`;
CREATE TABLE IF NOT EXISTS `history_log` (
  `id` int(100) NOT NULL,
  `users_id` varchar(100) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `logs` varchar(10000) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification_admin`
--

DROP TABLE IF EXISTS `notification_admin`;
CREATE TABLE IF NOT EXISTS `notification_admin` (
  `not_id` int(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_admin`
--

INSERT INTO `notification_admin` (`not_id`, `message`, `date`, `time`, `status`) VALUES
(1, 'Mark Nedes has already sign-up as instructor.', 'Monday, February 16,2015', '10:26:38 AM', 'UNVIEW');

-- --------------------------------------------------------

--
-- Table structure for table `notification_instructor`
--

DROP TABLE IF EXISTS `notification_instructor`;
CREATE TABLE IF NOT EXISTS `notification_instructor` (
  `not_id` int(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `instructor_id` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_instructor`
--

INSERT INTO `notification_instructor` (`not_id`, `message`, `instructor_id`, `date`, `time`, `status`) VALUES
(1, 'Mack Mack has already sign-up as your student.', '35', 'Monday, February 16,2015', '11:05:03 AM', 'UNVIEW'),
(2, 'Jon Lux has already sign-up as your student.', '33', 'Wednesday, February 25,2015', '12:18:04 PM', 'UNVIEW');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quiz_id` int(100) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `activity_type` varchar(200) NOT NULL,
  `answer2` varchar(200) NOT NULL,
  `answer3` varchar(200) NOT NULL,
  `answer4` varchar(200) NOT NULL,
  `answer5` varchar(200) NOT NULL,
  `answer6` varchar(200) NOT NULL,
  `answer7` varchar(200) NOT NULL,
  `answer8` varchar(200) NOT NULL,
  `answer9` varchar(200) NOT NULL,
  `answer10` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`quiz_id`, `answer`, `activity_type`, `answer2`, `answer3`, `answer4`, `answer5`, `answer6`, `answer7`, `answer8`, `answer9`, `answer10`) VALUES
(11, 'TRUE', 'QUIZ1', 'TRUE', 'FALSE', 'ANIMATION', 'IMAGES', 'ADOBE FLASH', 'TEXT', 'AUDIO', 'VIDEO', 'MULTIMEDIA'),
(12, 'STAGE', 'QUIZ2', 'LAYERS', 'TIMELINE', 'TOOLS PANEL', 'EDIT BAR', 'PANEL', 'PROPERTY INSPECTOR', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

DROP TABLE IF EXISTS `quiz_result`;
CREATE TABLE IF NOT EXISTS `quiz_result` (
  `num_id` int(11) NOT NULL,
  `student_id` varchar(200) NOT NULL,
  `instructor_id` int(100) NOT NULL,
  `type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `points` varchar(200) NOT NULL,
  `num_question` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_result`
--

INSERT INTO `quiz_result` (`num_id`, `student_id`, `instructor_id`, `type`, `status`, `points`, `num_question`, `date`, `time`) VALUES
(11, '201411157', 33, 'QUIZ1', 'PASSED', '9', '10', 'Saturday, March 07,2015', '06:46:26 AM'),
(12, '201411157', 33, 'QUIZ1', 'FAILED', '6', '10', 'Friday, March 06,2015', '23:47:43 PM'),
(13, '201412651', 35, 'QUIZ1', 'PASSED', '8', '10', 'Sunday, March 08,2015', '11:21:33 AM'),
(14, '201411157', 33, 'QUIZ2', 'PASSED', '5', '7', 'Monday, March 09,2015', '17:28:59 PM'),
(15, '201411157', 33, 'QUIZ2', 'PASSED', '7', '7', 'Monday, March 09,2015', '17:35:10 PM'),
(16, '201411157', 33, 'QUIZ2', 'PASSED', '7', '7', 'Monday, March 09,2015', '17:38:03 PM');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `section_id` int(100) NOT NULL,
  `section` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C'),
(4, 'D'),
(5, 'E'),
(6, 'F'),
(7, 'G');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `id` int(100) NOT NULL,
  `instructor_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `profilepic` varchar(250) NOT NULL,
  `verification_code` varchar(250) NOT NULL,
  `grade` varchar(250) NOT NULL,
  `lesson_taked` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `section` varchar(250) NOT NULL,
  `logging` varchar(200) NOT NULL,
  `level` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `instructor_id`, `student_id`, `username`, `password`, `fullname`, `firstname`, `lastname`, `email`, `gender`, `status`, `mobile`, `address`, `profilepic`, `verification_code`, `grade`, `lesson_taked`, `course`, `year`, `section`, `logging`, `level`) VALUES
(1, 33, 201411157, 'juan', 'b49a5780a99ea81284fc0746a78f84a30e4d5c73', 'Juan De la cruz', 'Juan', 'De la cruz', 'juan@yahoo.com', 'Male', 'UNACTIVE', '09421798791', 'Imus, Cavite', 'juan.jpg', 'ZY3G8UE', '', '', 'BSIT', '1', 'A', 'UNUSED', 'STUDENT'),
(2, 35, 201412651, 'mack', 'f52cae7d677fd8a83ac7cc4406c1d073a69a7b23', 'Mack Mack', 'Mack', 'Mack', 'mack@yahoo.com', 'Male', 'UNACTIVE', '09221245921', 'Bacoor, Cavite', 'avatar.jpg', 'ST123Gh', '', '', 'BSCS', '2', 'A', 'UNUSED', 'STUDENT');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` varchar(200) NOT NULL,
  `status` varchar(250) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `profilepic` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `verification_code` varchar(250) NOT NULL,
  `logging` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `firstname`, `lastname`, `email`, `username`, `password`, `level`, `status`, `mobile`, `profilepic`, `gender`, `address`, `verification_code`, `logging`) VALUES
(33, 'Bruce Owen Baliber', 'Bruce Owen', 'Baliber', 'bruce@yahoo.com', 'bruce', '9ae9c44b775ee9b29f4f502415e02e61a9b1a6a0', 'INSTRUCTOR', 'UNACTIVE', '09232212343', 'bruce.jpg', 'Male', 'Imus, Cavite', 'WuHjYeo', 'UNUSED'),
(34, 'Adhan Timothy Younes', 'Adhan Timothy', 'Younes', 'timothy@yahoo.com', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'ADMIN', 'UNACTIVE', '09421798791', 'admin.jpg', 'Male', 'Bacoor Cavite', 'v2W55J9', 'UNUSED'),
(35, 'Mark Nedes', 'Mark', 'Nedes', 'teacher@yahoo.com', 'teacher', '4a82cb6db537ef6c5b53d144854e146de79502e8', 'INSTRUCTOR', 'UNACTIVE', '09421798791', 'teacher.jpg', 'Male', 'Imus, Cavite', 'Vs43TD1', 'UNUSED');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `year_id` int(100) NOT NULL,
  `year` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Fourth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file_activity`
--
ALTER TABLE `file_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_admin`
--
ALTER TABLE `notification_admin`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `notification_instructor`
--
ALTER TABLE `notification_instructor`
  ADD PRIMARY KEY (`not_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `quiz_result`
--
ALTER TABLE `quiz_result`
  ADD PRIMARY KEY (`num_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`), ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `file_activity`
--
ALTER TABLE `file_activity`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `notification_admin`
--
ALTER TABLE `notification_admin`
  MODIFY `not_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notification_instructor`
--
ALTER TABLE `notification_instructor`
  MODIFY `not_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `quiz_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `quiz_result`
--
ALTER TABLE `quiz_result`
  MODIFY `num_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
