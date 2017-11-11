-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2017 at 12:29 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartshelf`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'smartshelf@gmail.com', 'smartshelf');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `school` text NOT NULL,
  `course_type` text NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `course_title` text NOT NULL,
  `course_code` text NOT NULL,
  `cover_picture` text NOT NULL,
  `preview` text NOT NULL,
  `course_pdf` text NOT NULL,
  `level` text NOT NULL,
  `semester` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_work`
--

CREATE TABLE `course_work` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `course_type` text NOT NULL,
  `faculty_name` text NOT NULL,
  `department_name` text NOT NULL,
  `course_title` text NOT NULL,
  `course_code` text NOT NULL,
  `semester` text NOT NULL,
  `level` text NOT NULL,
  `Cover_Pics` text NOT NULL,
  `Preview` text NOT NULL,
  `Course_Work` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_work`
--

INSERT INTO `course_work` (`id`, `school_name`, `course_type`, `faculty_name`, `department_name`, `course_title`, `course_code`, `semester`, `level`, `Cover_Pics`, `Preview`, `Course_Work`) VALUES
(2, 'Select School', 'Select Course Type', 'Select Faculty', 'Select Department', '', '', ' Semester 1', '100 Level', 'uploads/courses-work_cover_pics/', 'uploads/courses-work_cover_Preview/', 'uploads/courses-work/'),
(3, 'UST', 'Departmental', 'Engineering', 'Gas Engineering', 'CVB,.', 'CVB,.', ' Semester 1', '100 Level', 'uploads/courses-work_cover_pics/1967_pontiac_gto-wallpaper-2880x1620.jpg', 'uploads/courses-work_cover_Preview/Application.pdf', 'uploads/courses-work/Application.pdf'),
(4, 'UST', 'Departmental', 'Engineering', 'Gas Engineering', 'sdfgk', 'vb', ' Semester 1', '100 Level', 'uploads/courses-work_cover_pics/3d_abstract_polygon_wallpaper___e2___cs9_fx_design-wallpaper-1920x1080.jpg', 'uploads/courses-work_cover_Preview/Application.pdf', 'uploads/courses-work/awsgsg-swh.pdf'),
(5, 'UST', 'Faculty', 'Humanities', 'Select Department', 'qqqqqqqq', 'sxs', ' Semester 1', '100 Level', 'uploads/courses-work_cover_pics/css.png', 'uploads/courses-work_cover_Preview/Application.pdf', 'uploads/courses-work/awsgsg-swh.pdf'),
(6, 'UST', 'Departmental', 'Engineering', 'Select Department', 'xcvb', 'cvb', ' Semester 1', '100 Level', 'uploads/courses-work_cover_pics/html.png', 'uploads/courses-work_cover_Preview/awsgsg-swh.pdf', 'uploads/courses-work/Application.pdf'),
(7, 'University of Port Harcourt', 'General', 'Engineering', 'Select Department', 'Computer', 'GES102', ' Semester 1', '100 Level', 'uploads/courses-work_cover_pics/drift_transformers_5_the_last_knight-2560x1440.jpg', 'uploads/courses-work_cover_Preview/Application.pdf', 'uploads/courses-work/awsgsg-swh.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `faculty` text NOT NULL,
  `school` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `faculty`, `school`) VALUES
(1, 'Gas Engineering', 'Engineering', 'University of Port Harcourt'),
(2, 'Civil Engineering', 'Engineering', 'University of Port Harcourt'),
(3, 'Electrical Engineering', 'Engineering', 'University of Port Harcourt'),
(4, 'Mechanical Engineering', 'Engineering', 'University of Port Harcourt'),
(5, 'Petroleum Engineering', 'Engineering', 'University of Port Harcourt'),
(6, 'Petroleum Engineering', 'Engineering', 'University of Port Harcourt'),
(7, 'Gas Engineering', 'Engineering', 'UST'),
(8, 'azsxdcfgk', 'Information Technology', 'UST');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `school` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `school`) VALUES
(1, 'Engineering', 'University of Port Harcourt'),
(2, 'Pure and Applied Science', 'University of Port Harcourt'),
(3, 'Medical Science', 'University of Port Harcourt'),
(5, 'Humanities', 'University of Port Harcourt'),
(6, 'Social Science', 'University of Port Harcourt'),
(8, 'Information Technology', 'University of Port Harcourt'),
(10, 'Information Technology', 'UST'),
(11, 'Humanities', 'UST'),
(12, '', ''),
(13, 'sdfgk', 'UNI LAG'),
(14, 'Engineering', 'UST');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `school` text NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `level` text NOT NULL,
  `semester` text NOT NULL,
  `price` text NOT NULL,
  `upload` text NOT NULL,
  `description` text NOT NULL,
  `course_work1` text NOT NULL,
  `course_work2` text NOT NULL,
  `course_work3` text NOT NULL,
  `course_work4` text NOT NULL,
  `course_work5` text NOT NULL,
  `course_work6` text NOT NULL,
  `course_work7` text NOT NULL,
  `course_work8` text NOT NULL,
  `course_work9` text NOT NULL,
  `course_work10` text NOT NULL,
  `course_work11` text NOT NULL,
  `course_work12` text NOT NULL,
  `course_work13` text NOT NULL,
  `course_work14` text NOT NULL,
  `course_work15` text NOT NULL,
  `course_work16` text NOT NULL,
  `course_work17` text NOT NULL,
  `course_work18` text NOT NULL,
  `course_work19` text NOT NULL,
  `course_work20` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `school`, `faculty`, `department`, `level`, `semester`, `price`, `upload`, `description`, `course_work1`, `course_work2`, `course_work3`, `course_work4`, `course_work5`, `course_work6`, `course_work7`, `course_work8`, `course_work9`, `course_work10`, `course_work11`, `course_work12`, `course_work13`, `course_work14`, `course_work15`, `course_work16`, `course_work17`, `course_work18`, `course_work19`, `course_work20`) VALUES
(8, 'UST', 'Information Technology', 'Select Department', '100 Level', 'Semester 1', '1000', ' uploads/package_cover_pics/2013_mclaren_p1_rear-wallpaper-2560x1440.jpg', 'dfgk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `name`, `location`) VALUES
(2, 'UST', 'Port Harcourt'),
(3, 'UNI LAG', 'Lagos'),
(4, 'calabar', 'calabar'),
(5, 'UNI BEN', 'BENIN'),
(7, 'xcvb', 'cvb,'),
(8, 'UNIPORT', 'Port Harcourt'),
(9, 'University of Port Harcourt', 'Port Harcourt');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `institution` text NOT NULL,
  `school` text NOT NULL,
  `programme` text NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `phone`, `password`, `institution`, `school`, `programme`, `faculty`, `department`) VALUES
(1, 'olaoluwa', 'olaoluwa@gmail.com', '09097145418', '11111', 'University', 'Uniport', 'Under Graduate', 'Engineering', 'Gas'),
(2, 'OluwaTosin', 'OluwaTosinojedapo@gmail.com', '08081832573', '81832573', 'Item 2', 'Item 2', 'Item 3', 'Item 4', 'Item 5'),
(3, 'Olaoluwa', 'olaoluwaojedapo@gmail.com', '09097145412', '0000', 'INSTITUTION', 'University of Port Harcourt', ' PROGRAMMES', 'FACULTY/COLLAGE', 'DEPARTMENT'),
(4, 'Babawale Ojedapo', 'Babawale@gmail.com', '08081832573', '0000', 'INSTITUTION', 'SCHOOL', ' PROGRAMMES', 'FACULTY/COLLAGE', 'DEPARTMENT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_work`
--
ALTER TABLE `course_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_work`
--
ALTER TABLE `course_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
