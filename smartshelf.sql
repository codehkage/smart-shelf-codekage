-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2017 at 11:27 AM
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
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `school` text NOT NULL,
  `Author` text NOT NULL,
  `Description` text NOT NULL,
  `Cover_pics` text NOT NULL,
  `Books` text NOT NULL,
  `Price` text NOT NULL,
  `Author_contact` text NOT NULL,
  `Account_no` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_rooms`
--

CREATE TABLE `chat_rooms` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `numofuser` int(10) NOT NULL,
  `file` varchar(30) NOT NULL,
  `school` text NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_rooms`
--

INSERT INTO `chat_rooms` (`id`, `name`, `numofuser`, `file`, `school`, `faculty`, `department`) VALUES
(5, 'Gas Engineering UST', 0, 'Gas Engineering UST', 'UST', 'Engineering', '');

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE `chat_users` (
  `id` tinyint(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `time_mod` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chat_users_rooms`
--

CREATE TABLE `chat_users_rooms` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `room_id` int(100) NOT NULL,
  `mod_time` int(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_users_rooms`
--

INSERT INTO `chat_users_rooms` (`id`, `username`, `room_id`, `mod_time`) VALUES
(1473, 'Opeyemi@gmail.com', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_note`
--

CREATE TABLE `class_note` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `faculty_name` text NOT NULL,
  `department_name` text NOT NULL,
  `classnote_title` text NOT NULL,
  `classnote_code` text NOT NULL,
  `semester` text NOT NULL,
  `level` text NOT NULL,
  `Cover_Pics` text NOT NULL,
  `Class_Note` text NOT NULL,
  `price` text NOT NULL,
  `Preview` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_no` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_note`
--

INSERT INTO `class_note` (`id`, `school_name`, `faculty_name`, `department_name`, `classnote_title`, `classnote_code`, `semester`, `level`, `Cover_Pics`, `Class_Note`, `price`, `Preview`, `bank_name`, `Account_no`, `Account_name`) VALUES
(5, 'UST', 'Engineering', 'Gas Engineering', 'Good', 'Good', ' Semester 1', '100 Level', 'uploads/lecture_note_cover_pics/842820228501-funny-sayings-wallpapers-quotes.jpg', 'uploads/lecture_note/Application.pdf', 'Free', '', '', '', ''),
(6, 'UST', 'Engineering', 'Gas Engineering', 'dev', 'dev', ' Semester 1', '100 Level', 'uploads/lecture_note_cover_pics/gigabyte_blue_eye-wallpaper-1920x1080.jpg', 'uploads/lecture_note/Application.pdf', 'Free', '', '', '', '');

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
-- Table structure for table `course_material`
--

CREATE TABLE `course_material` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `faculty_name` text NOT NULL,
  `department_name` text NOT NULL,
  `course_title` text NOT NULL,
  `course_code` text NOT NULL,
  `cover_pics` text NOT NULL,
  `course_material` text NOT NULL,
  `Program` text NOT NULL,
  `price` text NOT NULL,
  `Preview` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_no` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_material`
--

INSERT INTO `course_material` (`id`, `school_name`, `faculty_name`, `department_name`, `course_title`, `course_code`, `cover_pics`, `course_material`, `Program`, `price`, `Preview`, `bank_name`, `Account_no`, `Account_name`) VALUES
(3, 'UST', 'Engineering', 'Gas Engineering', 'Pop', 'GES102', 'uploads/courses-material_cover_pics/3d_abstract_polygon_wallpaper___e1-wallpaper-1920x1080.jpg', 'uploads/courses-material/awsgsg-swh.pdf', 'UnderGraduate', 'Free', 'uploads/courses-material_preview/Home Lesson.pdf', '', '', ''),
(4, 'UST', 'Engineering', 'Gas Engineering', 'Computer', 'GES102', 'uploads/courses-material_cover_pics/3_lions_football-wallpaper-1920x1080.jpg', 'uploads/courses-material/Olubunmi Ojedapo  Resume.pdf', 'PostGraduate', 'Free', 'uploads/courses-material_preview/Home Lesson.pdf', '', '', ''),
(5, 'UST', 'Engineering', 'Gas Engineering', 'Computer', 'GES105', 'uploads/courses-material_cover_pics/3d_digital_face-2880x1800.jpg', 'uploads/courses-material/awsgsg-swh.pdf', 'UnderGraduate', '1000', 'uploads/courses-material_preview/Home Lesson.pdf', '', '', '');

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
(3, 'UST', 'Departmental', 'Engineering', 'Gas Engineering', 'CVB,.', 'GES 101', ' Semester 1', '100 Level', 'uploads/courses-work_cover_pics/1967_pontiac_gto-wallpaper-2880x1620.jpg', 'uploads/courses-work_cover_Preview/Application.pdf', 'uploads/courses-work/Application.pdf'),
(4, 'UST', 'Departmental', 'Engineering', 'Gas Engineering', 'sdfgk', 'ENG 202', ' Semester 1', '100 Level', 'uploads/courses-work_cover_pics/3d_abstract_polygon_wallpaper___e2___cs9_fx_design-wallpaper-1920x1080.jpg', 'uploads/courses-work_cover_Preview/Application.pdf', 'uploads/courses-work/awsgsg-swh.pdf'),
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
(11, 'Gas Engineering', 'Engineering', 'UST');

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
-- Table structure for table `faith`
--

CREATE TABLE `faith` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `school` text NOT NULL,
  `Author` text NOT NULL,
  `Description` text NOT NULL,
  `Cover_pics` text NOT NULL,
  `Books` text NOT NULL,
  `Price` text NOT NULL,
  `Author_contact` text NOT NULL,
  `Account_no` text NOT NULL,
  `bank_name` text NOT NULL,
  `Preview` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faith`
--

INSERT INTO `faith` (`id`, `Title`, `school`, `Author`, `Description`, `Cover_pics`, `Books`, `Price`, `Author_contact`, `Account_no`, `bank_name`, `Preview`, `Account_name`) VALUES
(1, 'Powerful', 'UST', 'Olaoluwa Ojedapo', '12345', 'uploads/non-educational_coverpics/140857322359-ezekiel-fiction-gun-drawing-quote-bible-wallpaper-humor-enjoy-share.jpg', 'uploads/non_educational_books/Home Lesson.pdf', '', 'olaoluwaojedapo@gmail.com', '09823458i', 'Sky Bank', '', '12345678i9o'),
(2, 'Powerful', 'UST', 'Ola', 'www', 'uploads/non-educational_coverpics/css.png', 'uploads/non_educational_books/signature.pdf', '', 'olaoluwaojedapo@gmail.com', '09823458i', 'Zenith Bank', '', 'wertio');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `school` text NOT NULL,
  `Author` text NOT NULL,
  `Description` text NOT NULL,
  `Cover_pics` text NOT NULL,
  `Books` text NOT NULL,
  `Price` text NOT NULL,
  `Author_contact` text NOT NULL,
  `Account_no` text NOT NULL,
  `bank_name` text NOT NULL,
  `Preview` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `Title`, `school`, `Author`, `Description`, `Cover_pics`, `Books`, `Price`, `Author_contact`, `Account_no`, `bank_name`, `Preview`, `Account_name`) VALUES
(1, 'Power', 'UST', 'Ola', 'wertiop', 'uploads/non-educational_coverpics/3d_chelsea_logo-wallpaper-1920x1080.jpg', 'uploads/non_educational_books/Application.pdf', '1000', 'olaoluwaojedapo@gmail.com', '09823458i', 'Zenith Bank', '', 'wertio');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `school` text NOT NULL,
  `Author` text NOT NULL,
  `Description` text NOT NULL,
  `Cover_pics` text NOT NULL,
  `Books` text NOT NULL,
  `Price` text NOT NULL,
  `Author_contact` text NOT NULL,
  `Account_no` text NOT NULL,
  `bank_name` text NOT NULL,
  `Preview` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `Title`, `school`, `Author`, `Description`, `Cover_pics`, `Books`, `Price`, `Author_contact`, `Account_no`, `bank_name`, `Preview`, `Account_name`) VALUES
(2, 'Men''s Health', 'UST', 'Olaoluwa Ojedapo', 'wertigf', 'uploads/non-educational_coverpics/3d_abstract_polygon_wallpaper___e2___cs9_fx_design-wallpaper-1920x1080.jpg', 'uploads/non_educational_books/awsgsg-swh.pdf', '1000', 'olaoluwaojedapo@gmail.com', '09823458i', 'Zenith Bank', '', 'wertio'),
(4, 'Powerful', 'UST', 'Ola', 'dfghjkl', 'uploads/non-educational_coverpics/2016_summer_olympics-wallpaper-1920x1080.jpg', 'uploads/non_educational_books/Home Lesson.pdf', '1000', 'olaoluwaojedapo@gmail.com', '09823458i', 'First Bank', '', 'wertio'),
(5, 'Power', 'UST', 'Ola', 'ertgkl', 'uploads/non-educational_coverpics/45458159178-387310-quotes.jpg', 'uploads/non_educational_books/Home Lesson.pdf', '1000', 'olaoluwaojedapo@gmail.com', '09823458i', 'First Bank', '', '12345678i9o');

-- --------------------------------------------------------

--
-- Table structure for table `it_report`
--

CREATE TABLE `it_report` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `faculty_name` text NOT NULL,
  `department_name` text NOT NULL,
  `course_title` text NOT NULL,
  `course_code` text NOT NULL,
  `cover_pics` text NOT NULL,
  `course_material` text NOT NULL,
  `Preview` text NOT NULL,
  `price` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_no` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `it_report`
--

INSERT INTO `it_report` (`id`, `school_name`, `faculty_name`, `department_name`, `course_title`, `course_code`, `cover_pics`, `course_material`, `Preview`, `price`, `bank_name`, `Account_no`, `Account_name`) VALUES
(1, 'UST', 'Engineering', 'Gas Engineering', 'Computer', 'GES102', 'uploads/it_report_cover_pics/2016_happy_new_year___party__-wallpaper-3840x2160.jpg', 'uploads/it_report/Application.pdf', '0', 'Free', '', '', ''),
(4, 'UST', 'Engineering', 'Gas Engineering', 'Pop', 'GES105', 'uploads/it_report_cover_pics/01_numbers-wallpaper-1600x900.jpg', 'uploads/it_report/awsgsg-swh.pdf', 'uploads/it_report_preview/awsgsg-swh.pdf', '1000', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `note` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `email`, `note`) VALUES
(1, 'BlessingEgba@gmail.com', 'dfgkl;lkb vb');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `school` text NOT NULL,
  `faculty` text NOT NULL,
  `Program` text NOT NULL,
  `department` text NOT NULL,
  `level` text NOT NULL,
  `semester` text NOT NULL,
  `price` text NOT NULL,
  `upload` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `school`, `faculty`, `Program`, `department`, `level`, `semester`, `price`, `upload`, `description`) VALUES
(8, 'UST', 'Information Technology', 'UnderGraduate', 'Select Department', '100 Level', 'Semester 1', '1000', 'uploads/package_cover_pics/2013_mclaren_p1_rear-wallpaper-2560x1440.jpg', 'dfgk'),
(9, 'UST', 'Engineering', 'UnderGraduate', 'Gas Engineering', '100 Level', 'Semester2', '1000', 'uploads/package_cover_pics/128533346064-code-programming.jpg', 'Good Things'),
(10, 'UST', 'Engineering', 'PostGraduate', 'Gas Engineering', '100 Level', 'Semester 1', '1000', 'uploads/package_cover_pics/alvin_and_the_chipmunks-1920x1080.jpg', 'Great Work'),
(11, 'UST', 'Engineering', 'UnderGraduate', 'Gas Engineering', '200 Level', 'Semester 1', '1000', 'uploads/package_cover_pics/almond_cherry_cupcakes-wallpaper-2880x1620.jpg', 'Wonderful');

-- --------------------------------------------------------

--
-- Table structure for table `profesional_users`
--

CREATE TABLE `profesional_users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `school` text NOT NULL,
  `faculty` text NOT NULL,
  `department` text NOT NULL,
  `Field` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profesional_users`
--

INSERT INTO `profesional_users` (`id`, `username`, `email`, `phone`, `password`, `school`, `faculty`, `department`, `Field`) VALUES
(5, 'Olaoluwa', 'olaoluwas@gmail.com', '08081832573', '9999', 'UST', 'Engineering', 'Gas Engineering', 'business');

-- --------------------------------------------------------

--
-- Table structure for table `profile_pics`
--

CREATE TABLE `profile_pics` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `image_path` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile_pics`
--

INSERT INTO `profile_pics` (`id`, `username`, `email`, `image_path`) VALUES
(1, 'OluwaTosin', 'postsmartarmy@gmail.com', 'include/page/profile/3d_low_poly_abstract-2560x1600.jpg'),
(2, 'Blessing', 'BlessingEgba@gmail.com', 'include/page/profile/pp.jpg'),
(3, 'wale', 'walebunmi@gmail.com', 'include/page/profile/default/boy-5.png'),
(4, 'OluwaTosin', 'OluwaTosinojedapo@gmail.com', 'include/page/profile/default/boy-5.png'),
(5, 'OluwaTosin', 'OluwaTosinojedapo@gmail.com', 'include/page/profile/default/boy-5.png'),
(6, 'OluwaTosin', 'OluwaTosinojedapo@gmail.com', 'include/page/profile/default/boy-5.png'),
(7, 'OluwaTosins', 'OluwaTosinojedapos@gmail.com', 'include/page/profile/default/boy-5.png'),
(8, 'olaoluwas', 'olaoluwas@gmail.com', 'include/page/profile/3_lions_football-wallpaper-1920x1080.jpg'),
(9, 'Wale', 'Wale@gmail.com', 'include/page/profile/default/boy-5.png'),
(10, 'Opeyemi', 'Opeyemi@gmail.com', 'include/page/profile/default/boy-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `project_work`
--

CREATE TABLE `project_work` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `faculty_name` text NOT NULL,
  `department_name` text NOT NULL,
  `course_title` text NOT NULL,
  `course_code` text NOT NULL,
  `cover_pics` text NOT NULL,
  `course_material` text NOT NULL,
  `Program` text NOT NULL,
  `price` text NOT NULL,
  `Preview` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_no` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_work`
--

INSERT INTO `project_work` (`id`, `school_name`, `faculty_name`, `department_name`, `course_title`, `course_code`, `cover_pics`, `course_material`, `Program`, `price`, `Preview`, `bank_name`, `Account_no`, `Account_name`) VALUES
(1, 'UST', 'Engineering', 'Gas Engineering', 'Computer', 'GES102', 'uploads/project_work_cover_pics/842820228501-funny-sayings-wallpapers-quotes.jpg', 'uploads/project_work/awsgsg-swh.pdf', 'UnderGraduate', 'Free', '', '', '', ''),
(2, 'UST', 'Engineering', 'Gas Engineering', 'Pop', 'GES102', 'uploads/project_work_cover_pics/128533346064-code-programming.jpg', 'uploads/project_work/Olubunmi Ojedapo  Resume.pdf', 'PostGraduate', 'Free', '', '', '', ''),
(3, 'UST', 'Engineering', 'Gas Engineering', 'Computer', 'GES102', 'uploads/project_work_cover_pics/3d_abstract_polygon_wallpaper___e2___cs9_fx_design-wallpaper-1920x1080.jpg', 'uploads/project_work/signature.pdf', 'UnderGraduate', 'Free', '', '', '', ''),
(5, 'UST', 'Engineering', 'Gas Engineering', 'qqqqqqqq', 'GES105', 'uploads/project_work_cover_pics/47254671023-black-background-graycycle-minimalistic-mckellen-mithrandir-rings-gandalf-actors-wallpaper-actor-wallpapers.jpg', 'uploads/project_work/Application.docx', 'UnderGraduate', '1000', 'uploads/project_work_preview/Application.pdf', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `INSTITUTION` text NOT NULL,
  `school_name` text NOT NULL,
  `Publication_Type` text NOT NULL,
  `Department` text NOT NULL,
  `books_title` text NOT NULL,
  `author` text NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL,
  `Cover_Pics` text NOT NULL,
  `Publication` text NOT NULL,
  `Preview` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_no` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `INSTITUTION`, `school_name`, `Publication_Type`, `Department`, `books_title`, `author`, `price`, `description`, `Cover_Pics`, `Publication`, `Preview`, `bank_name`, `Account_no`, `Account_name`) VALUES
(1, 'UNIVERSITY', 'UST', 'TECHNICAL PAPER', 'Gas Engineering', 'Genesis', 'Olubunmi', 'Free', 'sxdcfvgb,', 'uploads/Publication_cover_pics/3d_sun_system_2-wallpaper-3840x2160.jpg', 'uploads/Publication/awsgsg-swh.pdf', '', '', '', ''),
(2, 'UNIVERSITY', 'UNI LAG', 'JOURNALS', 'Gas Engineering', 'Genesis', 'Olaoluwa', '1000', 'ola', 'uploads/Publication_cover_pics/abandoned_2-wallpaper-1920x1080.jpg', 'uploads/Publication/awsgsg-swh.pdf', 'uploads/Publication_preview/Application.pdf', '', '', ''),
(3, 'INSTITUTION', 'Select School', 'JOURNALS', 'Gas Engineering', 'Fire of Fire', 'Olaoluwa', '1000', 'ola', 'uploads/Publication_cover_pics/3d_chelsea_logo-wallpaper-1920x1080.jpg', 'uploads/Publication/Application.pdf', 'uploads/Publication_preview/Home Lesson.pdf', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `relationship`
--

CREATE TABLE `relationship` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `school` text NOT NULL,
  `Author` text NOT NULL,
  `Description` text NOT NULL,
  `Cover_pics` text NOT NULL,
  `Books` text NOT NULL,
  `Price` text NOT NULL,
  `Author_contact` text NOT NULL,
  `Account_no` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(9, 'University of Port Harcourt', 'Port Harcourt');

-- --------------------------------------------------------

--
-- Table structure for table `technology`
--

CREATE TABLE `technology` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `school` text NOT NULL,
  `Author` text NOT NULL,
  `Description` text NOT NULL,
  `Cover_pics` text NOT NULL,
  `Books` text NOT NULL,
  `Price` text NOT NULL,
  `Author_contact` text NOT NULL,
  `Account_no` text NOT NULL,
  `bank_name` text NOT NULL,
  `Preview` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technology`
--

INSERT INTO `technology` (`id`, `Title`, `school`, `Author`, `Description`, `Cover_pics`, `Books`, `Price`, `Author_contact`, `Account_no`, `bank_name`, `Preview`, `Account_name`) VALUES
(1, 'Power', 'UST', 'Ola', 'dfgkl;''\\', 'uploads/non-educational_coverpics/aston_martin_db9_2006_black_front_view_style_cars_sports_speed_nature_trees_asphalt_24089_1920x1200.jpg', 'uploads/non_educational_books/Application.pdf', 'Free', 'olaoluwaojedapo@gmail.com', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `text_book`
--

CREATE TABLE `text_book` (
  `id` int(11) NOT NULL,
  `school_name` text NOT NULL,
  `books_title` text NOT NULL,
  `author` text NOT NULL,
  `price` text NOT NULL,
  `description` text NOT NULL,
  `Cover_Pics` text NOT NULL,
  `Preview` text NOT NULL,
  `text_book` text NOT NULL,
  `bank_name` text NOT NULL,
  `Account_no` text NOT NULL,
  `Account_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text_book`
--

INSERT INTO `text_book` (`id`, `school_name`, `books_title`, `author`, `price`, `description`, `Cover_Pics`, `Preview`, `text_book`, `bank_name`, `Account_no`, `Account_name`) VALUES
(5, 'UST', 'Genesis', 'Olubunmi', '1000', 'Xo good', 'uploads/text_book_cover_pics/2013_lamborghini_veneno_rear-wallpaper-2560x1440.jpg', 'uploads/text_book_preview/Application.docx', 'uploads/text_book/awsgsg-swh.pdf', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `school` text NOT NULL,
  `phone` text NOT NULL,
  `department` text NOT NULL,
  `course_codes` text NOT NULL,
  `days` text NOT NULL,
  `time` text NOT NULL,
  `hour` text NOT NULL,
  `venue` text NOT NULL,
  `Comment` text NOT NULL,
  `cost` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`id`, `email`, `username`, `school`, `phone`, `department`, `course_codes`, `days`, `time`, `hour`, `venue`, `Comment`, `cost`) VALUES
(1, 'BlessingEgba@gmail.com', 'BlessingEgba', 'UST', '09097145412', 'Gas Engineering', 'GES 101,ENG 202', '2017-10-05,2017-10-09', '15:01', '3', 'MY PLACE', 'lllll', '4000');

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
(4, 'Babawale Ojedapo', 'Babawale@gmail.com', '08081832573', '0000', 'INSTITUTION', 'SCHOOL', ' PROGRAMMES', 'FACULTY/COLLAGE', 'DEPARTMENT'),
(5, 'Olubunmi Ojedapo', 'OlubunmiOjedapo@gmail.com', '0909714412', '0000', 'Remedial', 'UST', ' Under Graduate', 'Engineering', 'Gas Engineering'),
(7, 'OluwaTosin', 'postsmartarmy@gmail.com', '08081832573', '9999', 'UNIVERSITY', 'UST', ' Under Graduate', 'Engineering', 'Gas Engineering'),
(8, 'Wale', 'Wale@gmail.com', '09097145412', '9999', 'UNIVERSITY', 'UST', ' Under Graduate', 'Engineering', 'Gas Engineering'),
(10, 'BlessingEgba', 'BlessingEgba@gmail.com', '09097145412', '9999', 'UNIVERSITY', 'UST', ' Under Graduate', 'Engineering', 'Gas Engineering'),
(16, 'Opeyemi', 'Opeyemi@gmail.com', '09097145412', '9999', 'UNIVERSITY', 'UST', ' Under Graduate', 'Engineering', 'Gas Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_rooms`
--
ALTER TABLE `chat_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `chat_users_rooms`
--
ALTER TABLE `chat_users_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_note`
--
ALTER TABLE `class_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_material`
--
ALTER TABLE `course_material`
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
-- Indexes for table `faith`
--
ALTER TABLE `faith`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_report`
--
ALTER TABLE `it_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profesional_users`
--
ALTER TABLE `profesional_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_pics`
--
ALTER TABLE `profile_pics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_work`
--
ALTER TABLE `project_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `relationship`
--
ALTER TABLE `relationship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technology`
--
ALTER TABLE `technology`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text_book`
--
ALTER TABLE `text_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
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
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chat_rooms`
--
ALTER TABLE `chat_rooms`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `chat_users`
--
ALTER TABLE `chat_users`
  MODIFY `id` tinyint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `chat_users_rooms`
--
ALTER TABLE `chat_users_rooms`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1474;
--
-- AUTO_INCREMENT for table `class_note`
--
ALTER TABLE `class_note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_material`
--
ALTER TABLE `course_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `course_work`
--
ALTER TABLE `course_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `faith`
--
ALTER TABLE `faith`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `it_report`
--
ALTER TABLE `it_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `profesional_users`
--
ALTER TABLE `profesional_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `profile_pics`
--
ALTER TABLE `profile_pics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `project_work`
--
ALTER TABLE `project_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `relationship`
--
ALTER TABLE `relationship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `technology`
--
ALTER TABLE `technology`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `text_book`
--
ALTER TABLE `text_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
