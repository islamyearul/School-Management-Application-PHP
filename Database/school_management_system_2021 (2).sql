-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 02:52 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_management_system_2021`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_class` (IN `cname` LONGTEXT, IN `cnamenumeric` LONGTEXT, IN `cteacherid` INT(11))  BEGIN
INSERT INTO `class`(`name`, `name_numeric`, `teacher_id`) VALUES (cname, cnamenumeric, cteacherid);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_fees_cat` (IN `fcname` VARCHAR(100))  INSERT INTO `fees_cat`(`fees_cat_name`) VALUES (fcname)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_grade` (IN `gname` LONGTEXT, IN `gpoint` LONGTEXT, IN `marksfrom` INT(11), IN `marksupto` INT(11), IN `gcomments` LONGTEXT)  BEGIN
INSERT INTO `grade`( `name`, `grade_point`, `mark_from`, `mark_upto`, `comment`) VALUES (gname, gpoint, marksfrom, marksupto, gcomments);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `add_subject` (IN `sname` LONGTEXT, IN `classid` INT(11), IN `teacherid` INT(11))  BEGIN
INSERT INTO `subject`( `name`, `class_id`, `teacher_id`) VALUES (sname, classid, teacherid);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `add_event`
--

CREATE TABLE `add_event` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descriptions` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(20) NOT NULL,
  `manage_by` varchar(20) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_event`
--

INSERT INTO `add_event` (`id`, `name`, `descriptions`, `date`, `time`, `location`, `manage_by`, `file`) VALUES
(49, 'MSS Admission', 'MSS Batch 47 admission start', '2021-08-26', '09:00:00', 'Campus', 'Asad', 'error.PNG'),
(50, 'Election', 'student election day', '2021-09-24', '11:45:00', 'Aditoriam', 'maruf', 'images.jpg'),
(53, 'Covid-19 Vaccine donate', 'Covid-19 Vaccine donate', '2021-09-09', '10:00:00', 'School aditoriam', 'Maruf', 'download.jpg'),
(54, 'Ajaira', 'Ajaira event ', '2021-09-10', '11:40:00', 'Motijheel', 'Yearul', 'Screen Shot 2021-07-18 at 13.49.36.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(1) NOT NULL,
  `ad_name` varchar(20) NOT NULL,
  `ad_email` varchar(60) NOT NULL,
  `ad_pass` varchar(255) NOT NULL,
  `action_role` varchar(20) NOT NULL,
  `user_image` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `ad_name`, `ad_email`, `ad_pass`, `action_role`, `user_image`) VALUES
(1, 'Islamyearul', 'admin@admin.com', '202cb962ac59075b964b07152d234b70', 'admin', 'Yearul-PP-2-Pic-2020-2.jpg'),
(4, 'hitvidpc', 'sdsdsd@sdg.bom', 'd76038e92ab1e1a586cbb5ef122efa9d', 'developer', 'roobon.png'),
(6, 'sfafsa', 'sdsdsd@sdg.bom', '2c49353669a4b803a493b0677f8045ca', 'viewer', 'saiful.jpg'),
(13, 'fffffffff', 'sdsdsd@sdg.bom', '06a53dff852b2da2eea823e75450c4af', 'developer', 'saiful.jpg'),
(15, 'hhhhhh', 'sdsdsd@sdg.bom', 'c34f20f0e8b1238253e6650e2015ac5e', 'viewer', 'roobon.png'),
(16, 'Islam Yearul', 'islamyearul@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 'Yearul-PP-2-Pic-2020-2.jpg'),
(17, 'user', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'viewer', 'Thomas G. Giglione.jpg'),
(18, 'abc', 'abc@abc.abc', '81dc9bdb52d04dc20036dbd8313ed055', 'Viewer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admission_request`
--

CREATE TABLE `admission_request` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `education` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_request`
--

INSERT INTO `admission_request` (`id`, `name`, `phone`, `email`, `city`, `education`, `course`) VALUES
(1, 'Nazim', '226465654', 'nazim@yahoo.com', 'Dhaka', 'BSC', 'MSC'),
(2, 'Nazim', '226465654', 'nazim@yahoo.com', 'Dhaka', 'BSC', 'MSC'),
(3, 'Nazim', '4656546', 'nazim@yahoo.com', 'Dhaka', 'BSC', 'six');

-- --------------------------------------------------------

--
-- Table structure for table `all_class_fees_table`
--

CREATE TABLE `all_class_fees_table` (
  `all_class_fees_id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `admission_fees` int(11) NOT NULL,
  `session_fees` int(11) DEFAULT NULL,
  `seminar_fee` int(11) DEFAULT NULL,
  `event_fee` int(11) DEFAULT NULL,
  `january_salary` int(11) NOT NULL,
  `february_salary` int(11) NOT NULL,
  `march_salary` int(11) NOT NULL,
  `afril_salary` int(11) NOT NULL,
  `first_terminal_exam_fees` int(11) NOT NULL,
  `may_salary` int(11) NOT NULL,
  `june_salary` int(11) NOT NULL,
  `july_salary` int(11) NOT NULL,
  `august_salary` int(11) NOT NULL,
  `mid_terminal_exam_fees` int(11) NOT NULL,
  `september_salary` int(11) NOT NULL,
  `october_salary` int(11) NOT NULL,
  `november_salary` int(11) NOT NULL,
  `december_salary` int(11) NOT NULL,
  `final_exam_fees` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_class_fees_table`
--

INSERT INTO `all_class_fees_table` (`all_class_fees_id`, `class`, `year`, `admission_fees`, `session_fees`, `seminar_fee`, `event_fee`, `january_salary`, `february_salary`, `march_salary`, `afril_salary`, `first_terminal_exam_fees`, `may_salary`, `june_salary`, `july_salary`, `august_salary`, `mid_terminal_exam_fees`, `september_salary`, `october_salary`, `november_salary`, `december_salary`, `final_exam_fees`) VALUES
(1, 'eight', 2021, 1000, 5000, 500, 200, 800, 800, 800, 800, 1200, 800, 800, 800, 800, 1200, 800, 800, 800, 800, 1200),
(2, 'seven', 2021, 800, 5000, 400, 200, 700, 700, 700, 700, 1000, 700, 700, 700, 700, 1000, 700, 700, 700, 700, 1000),
(3, 'six', 2021, 800, 4000, 300, 100, 600, 600, 600, 600, 900, 600, 600, 600, 600, 900, 600, 600, 600, 600, 900),
(4, 'KG', 2021, 800, 4000, 300, 200, 500, 500, 500, 500, 1000, 500, 500, 500, 500, 1000, 500, 500, 500, 500, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `a_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `toggle1_title` varchar(50) DEFAULT NULL,
  `toggle1_des` varchar(200) DEFAULT NULL,
  `toggle2_title` varchar(50) DEFAULT NULL,
  `toggle2_des` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`a_id`, `name`, `description`, `date`, `time`, `toggle1_title`, `toggle1_des`, `toggle2_title`, `toggle2_des`) VALUES
(1, '\r\nAcademy Leadership', 'Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.', '2021-09-22', '09:00:00', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit ', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit '),
(2, '\r\nHealth Care', 'Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa.\r\n\r\n', '2021-09-12', '12:50:19', NULL, NULL, NULL, NULL),
(3, '\r\nAcademy', 'Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.', '2021-09-22', '09:00:00', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit ', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit '),
(4, '\r\n Care', 'Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa.\r\n\r\n', '2021-09-12', '12:50:19', NULL, NULL, NULL, NULL),
(5, '\r\nAcademy Leadership', 'Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.', '2021-09-22', '09:00:00', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit ', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit '),
(6, '\r\nHealth Care', 'Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa.\r\n\r\n', '2021-09-12', '12:50:19', NULL, NULL, NULL, NULL),
(7, '\r\nAcademy', 'Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.', '2021-09-22', '09:00:00', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit ', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit '),
(8, '\r\n Care', 'Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa.\r\n\r\n', '2021-09-12', '12:50:19', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apply_course`
--

CREATE TABLE `apply_course` (
  `apply_course_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply_course`
--

INSERT INTO `apply_course` (`apply_course_id`, `name`, `email`, `phone`, `course_id`) VALUES
(1, 'boby', 'boby@gmail.vom', '554465465', 0);

-- --------------------------------------------------------

--
-- Table structure for table `at_add_attendance`
--

CREATE TABLE `at_add_attendance` (
  `ID` int(11) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Student_Name` varchar(50) NOT NULL,
  `Attendance` varchar(10) NOT NULL,
  `Teachers_Comnt` varchar(50) NOT NULL,
  `Student_Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `at_add_attendance`
--

INSERT INTO `at_add_attendance` (`ID`, `Class`, `Student_Name`, `Attendance`, `Teachers_Comnt`, `Student_Id`) VALUES
(2, '1', 'Hasan', 'Present', 'Good', 147852),
(3, '2', 'Shanto', 'Present', 'NA', 1459632),
(5, '3', 'Adnan Habib Rommel', '695847', 'haaaa', 695847);

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `a_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `toggle1_title` varchar(50) DEFAULT NULL,
  `toggle1_des` varchar(200) DEFAULT NULL,
  `toggle2_title` varchar(50) DEFAULT NULL,
  `toggle2_des` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`a_id`, `name`, `description`, `date`, `time`, `toggle1_title`, `toggle1_des`, `toggle2_title`, `toggle2_des`) VALUES
(1, '\r\nAcademy Leadership', 'Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.', '2021-09-22', '09:00:00', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit ', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit '),
(2, '\r\nHealth Care', 'Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa.\r\n\r\n', '2021-09-12', '12:50:19', NULL, NULL, NULL, NULL),
(3, '\r\nAcademy', 'Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.', '2021-09-22', '09:00:00', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit ', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit '),
(4, '\r\n Care', 'Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa.\r\n\r\n', '2021-09-12', '12:50:19', NULL, NULL, NULL, NULL),
(5, '\r\nAcademy Leadership', 'Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.', '2021-09-22', '09:00:00', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit ', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit '),
(6, '\r\nHealth Care', 'Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa.\r\n\r\n', '2021-09-12', '12:50:19', NULL, NULL, NULL, NULL),
(7, '\r\nAcademy', 'Praesent ac velit non eros maximus porta in suscipit elit. Aenean viverra lorem quis mattis accumsan. Etiam facilisis magna ut diam pulvinar condimentum.', '2021-09-22', '09:00:00', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit ', 'Leadership', 'Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa. Donec ipsum ipsum, rhoncus sit amet arcu in, hendrerit placerat libero. Morbi sit '),
(8, '\r\n Care', 'Etiam facilisis magna ut diam pulvinar condimentum. Nulla mattis, ipsum cursus scelerisque pretium, nisl nisl elementum tellus, a facilisis turpis tellus sit amet massa.\r\n\r\n', '2021-09-12', '12:50:19', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `name_numeric` longtext COLLATE utf8_unicode_ci NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `name`, `name_numeric`, `teacher_id`) VALUES
(2, 'kg one', 'k1', 2),
(3, 'Primary One', 'P 1', 2),
(4, 'primary 3', 'p 3', 4),
(7, 'eight', '8', 8),
(8, 'seven', '7', 7),
(10, 'six', 'vi', 4);

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `10:00-11:00` varchar(50) NOT NULL,
  `11:00-12:00` varchar(50) NOT NULL,
  `12:00-01:00` varchar(50) NOT NULL,
  `02:00-03:00` varchar(50) NOT NULL,
  `03:00-04:00` varchar(50) NOT NULL,
  `04:00-05:00` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`id`, `day`, `10:00-11:00`, `11:00-12:00`, `12:00-01:00`, `02:00-03:00`, `03:00-04:00`, `04:00-05:00`) VALUES
(1, 'Saturday', 'Bangla', 'English', 'Math', 'Bangladesh and global studies', 'Religion', 'Physical education and health'),
(2, 'Sunday', 'Physical education and health', 'Religion', 'Math', 'Bangla', 'Bangladesh and global studies', 'English'),
(3, 'Monday', 'Bangla', 'English', 'Bangladesh and global studies', 'Math', 'Religion', 'Physical education and health'),
(4, 'Tuesday', 'English', 'Bangla', 'Bangladesh and global studies', 'Math', 'Physical education and health', 'Religion'),
(5, 'Wednesday', 'Bangladesh and global studies', 'English', 'Bangla', 'Math', 'Religion', 'Physical education and health'),
(6, 'Thursday', 'Bangladesh and global studies', 'Bangla', 'Math', 'Religion', 'English', 'Physical education and health....');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(5) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` text NOT NULL,
  `course_status` varchar(10) NOT NULL,
  `course_cat` varchar(100) NOT NULL,
  `course_seat` int(11) NOT NULL,
  `course_start_date` date NOT NULL,
  `course_contact_person_name` varchar(50) NOT NULL,
  `course_contact_person_phone` int(15) NOT NULL,
  `course_contact_email` varchar(100) NOT NULL,
  `course_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_description`, `course_status`, `course_cat`, `course_seat`, `course_start_date`, `course_contact_person_name`, `course_contact_person_phone`, `course_contact_email`, `course_image`) VALUES
(3, 'MSC', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, a', 'Inactive', 'Science', 5, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', 'build wordpress ecommerce or business website responsive 2.png'),
(4, 'BSC', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a ', 'Active', 'Software Development', 5, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', 'build wordpress ecommerce or business website responsive 2.png'),
(6, 'MBA', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Active', '	\r\nBasic Computer', 3, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', '3cdd7db2149554995ca05e279fc78036.jpg'),
(7, 'MSC', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Inactive', 'Science', 5, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', '3cdd7db2149554995ca05e279fc78036.jpg'),
(8, 'BSC', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Active', 'Software Development', 5, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', '3cdd7db2149554995ca05e279fc78036.jpg'),
(9, 'BBA', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Inactive', 'Web Application Development', 4, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', '3cdd7db2149554995ca05e279fc78036.jpg'),
(10, 'MBA', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Active', '	\r\nBasic Computer', 3, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', '3cdd7db2149554995ca05e279fc78036.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Science', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(2, 'Commerce', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(3, 'Humanities', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(4, 'Applied Acience', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(5, 'Software Development', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(6, 'Web Application Development', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(7, 'Web Security', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(8, 'Basic Computer', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(9, 'Graphics Design', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to '),
(10, 'Visual Video Editing', 'as well, but I am coming up short. There seem to be guides on copy/pasting scripts for the share buttons, as well as guides on using each respective API, but for something so simple as using links to ');

-- --------------------------------------------------------

--
-- Table structure for table `course_process_fees`
--

CREATE TABLE `course_process_fees` (
  `course_fees_id` int(5) NOT NULL,
  `first_term_fee` decimal(10,2) NOT NULL,
  `second_term_fee` decimal(10,2) NOT NULL,
  `third_term_fee` decimal(10,2) NOT NULL,
  `forth_term_fee` decimal(10,2) NOT NULL,
  `fees_description` varchar(200) DEFAULT NULL,
  `step_1_des` varchar(200) NOT NULL,
  `step_2_des` varchar(200) NOT NULL,
  `step_3_des` varchar(200) NOT NULL,
  `step_4_des` varchar(200) NOT NULL,
  `step_5_des` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_process_fees`
--

INSERT INTO `course_process_fees` (`course_fees_id`, `first_term_fee`, `second_term_fee`, `third_term_fee`, `forth_term_fee`, `fees_description`, `step_1_des`, `step_2_des`, `step_3_des`, `step_4_des`, `step_5_des`, `course_id`) VALUES
(1, '10500.00', '7801.00', '45445.00', '7587.00', 'fsafsafsfasfs', 'fffffff', 'sdgsdgewgwe', 'sfdstwtwts', 'wqrwsafsaf', 'dfsg', 5),
(2, '12700.00', '7801.00', '45445.00', '7587.00', 'fsafsafsfasfs', 'safrwqrwqr', 'sdgsdgewgwe', 'sfdstwtwts', 'wqrwsafsaf', '', 3),
(4, '55684.00', '4565.00', '4565.00', '5678.00', 'safsafsaf', 'sfafsads', 'gfgfdh', 'fsdfsdgsd', 'yhreyre', 'gSDGsdg', 6),
(5, '55684.00', '4565.00', '4565.00', '5678.00', 'safsafsaf', 'sfafsads', 'gfgfdh', 'fsdfsdgsd', 'yhreyre', 'gSDGsdg', 0),
(6, '65465.00', '65465.00', '6454654.00', '5464564.00', 'dfgsag', 'sgagfg', 'sfsdgdsg', 'asgagasa', 'sagsagasg', 'asgsagasg', 4);

-- --------------------------------------------------------

--
-- Table structure for table `course_time_table`
--

CREATE TABLE `course_time_table` (
  `course_time_id` int(5) NOT NULL,
  `1st_sem_name` varchar(50) NOT NULL,
  `1st_sem_des` varchar(200) NOT NULL,
  `2nd_sem_name` varchar(50) NOT NULL,
  `2nd_sem_des` varchar(200) NOT NULL,
  `3rd_sem_name` varchar(50) NOT NULL,
  `3rd_sem_des` varchar(200) NOT NULL,
  `4th_sem_name` varchar(50) NOT NULL,
  `4th_sem_des` varchar(200) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_time_table`
--

INSERT INTO `course_time_table` (`course_time_id`, `1st_sem_name`, `1st_sem_des`, `2nd_sem_name`, `2nd_sem_des`, `3rd_sem_name`, `3rd_sem_des`, `4th_sem_name`, `4th_sem_des`, `course_id`) VALUES
(1, 'dgfdg', 'fdgfdgfdgfd', 'fdgfdg', 'dhrhrh', 'fdhfdh', 'fdgfd re', 'reyrey', 'hfdhfd', 0),
(2, 'dgfdg', 'fdgfdgfdgfd', 'fdgfdg', 'dhrhrh', 'fdhfdh', 'fdgfd re', 'reyrey', 'setetew', 4),
(4, 'dgfdg', 'fdgfdgfdgfd', 'fdgfdg', 'dhrhrh', 'fdhfdh', 'fdgfd re', 'reyrey', 'setetew', 6),
(5, 'dgfdg', 'fdgfdgfdgfd', 'fdgfdg', 'dhrhrh', 'fdhfdh', 'fdgfd re', 'reyrey', 'setetew', 0),
(6, 'ddf', 'dgsdgc', 'cxbxcb', 'ssgeg', 'jgfjgf', 'awsafsf', 'retyrey', 'reutrgn', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `course_view`
-- (See below for the actual view)
--
CREATE TABLE `course_view` (
`course_name` varchar(50)
,`course_contact_person_name` varchar(50)
,`1st_sem_name` varchar(50)
,`first_term_fee` decimal(10,2)
,`2nd_sem_name` varchar(50)
,`second_term_fee` decimal(10,2)
,`3rd_sem_name` varchar(50)
,`third_term_fee` decimal(10,2)
,`4th_sem_name` varchar(50)
,`forth_term_fee` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `examquestion`
--

CREATE TABLE `examquestion` (
  `examquestion_id` int(11) NOT NULL,
  `subject` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `exam` varchar(100) NOT NULL,
  `class` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `teachers` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examquestion`
--

INSERT INTO `examquestion` (`examquestion_id`, `subject`, `exam`, `class`, `teachers`, `session`, `title`, `description`, `file_name`, `file_type`, `timestamp`, `status`) VALUES
(8, 'Optimum', '', '3', '', '', 'Mathematics', 'THIS EXAM IS FOR PRIMARY ONE PUPILS, PLEASE READ AND GIVE FEEDBACK SIR. THANKS', 'FOLUSO.docx', '', 'Sat, 08 July 2017', 'Approved'),
(10, '1', '1', '2', '2', '11', 'fsaf', 'gryreya', '2021_08_22_15-40-31_pm.pdf', 'application/pdf', '2021-08-27 11:08:24', 'Inapprove'),
(11, '1', '1', '2', '2', '11', 'fsaf', 'gryreya', '2021_08_22_15-40-31_pm.pdf', 'application/pdf', '2021-08-27 11:08:31', 'Inapprove'),
(12, '1', '1', '2', '2', '11', 'fsaf', 'gryreya', '2021_08_22_15-41-58_pm.pdf', 'application/pdf', '2021-08-28 22:04:06', 'Inapprove');

-- --------------------------------------------------------

--
-- Table structure for table `exam_all`
--

CREATE TABLE `exam_all` (
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `duration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_all`
--

INSERT INTO `exam_all` (`exam_id`, `exam_name`, `start_date`, `start_time`, `duration`) VALUES
(1, '1st Terminal Exam', '2021-08-24', '10:00:00', '3 hours'),
(2, 'Middle Terminal Exam', '2021-08-09', '10:00:00', '3 h'),
(3, 'Final Terminal Exam', '2021-08-16', '03:00:00', '2 h'),
(4, 'Admission Test', '2021-08-31', '11:00:00', '1 h'),
(5, 'Monthly Assesment', '2021-08-27', '10:00:00', '30 min'),
(6, 'sdfdsfds', '2021-08-05', '10:03:00', 'f4fhh'),
(8, 'dsgdsgds', '2021-08-17', '08:22:00', 'sdgsdgsdg'),
(9, 'dsgdsgds', '2021-08-17', '08:22:00', 'ggggg');

--
-- Triggers `exam_all`
--
DELIMITER $$
CREATE TRIGGER `trash_exam` BEFORE DELETE ON `exam_all` FOR EACH ROW INSERT INTO exam_all_trash VALUES ('', OLD.exam_id, OLD.exam_name, OLD.start_date, OLD.start_time, OLD.duration)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `exam_all_trash`
--

CREATE TABLE `exam_all_trash` (
  `trash_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `duration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_all_trash`
--

INSERT INTO `exam_all_trash` (`trash_id`, `exam_id`, `exam_name`, `start_date`, `start_time`, `duration`) VALUES
(1, 10, 'dsgdsgds', '2021-08-17', '08:22:00', 'sdgsdgsdg');

-- --------------------------------------------------------

--
-- Table structure for table `exam_marks`
--

CREATE TABLE `exam_marks` (
  `mark_id` int(11) NOT NULL,
  `student_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `student_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subject_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `session_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `exam_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mark_obtained` int(11) NOT NULL DEFAULT 0,
  `mark_total` int(11) NOT NULL DEFAULT 100,
  `result` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'F',
  `point` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam_marks`
--

INSERT INTO `exam_marks` (`mark_id`, `student_id`, `student_name`, `subject_id`, `class_id`, `session_id`, `exam_id`, `mark_obtained`, `mark_total`, `result`, `point`, `comment`) VALUES
(6, '1', '', '1', '1', '1', '1', 50, 100, 'B', '', 'pass'),
(7, '2', '', '2', '2', '2', '2', 33, 100, 'D', '', 'fail'),
(8, '13', 'Yearul', 'Mathematics', 'KG', '2016-2017', '1st Terminal Exam', 60, 100, 'A-', '3.5', 'pass'),
(10, '16', 'Yearul', 'Economics', 'SIX', '2026-2027', 'Final Terminal Exam', 25, 100, 'F', '0', 'fail'),
(11, '17', 'sss', 'Social Studies', 'seven', '2026-2027', 'sdfdsfds', 33, 100, 'D', '1', 'pass'),
(12, '14', 'sss', 'Mathematics', 'KG', '2016-2017', '1st Terminal Exam', 33, 100, 'D', '1', 'pass'),
(13, '17', 'sss', 'Economics', 'eight', '2023-2024', 'Admission Test', 44, 100, 'B', '3', 'pass'),
(16, '5', 'Md Yearul Islam', 'Mathematics', 'eight', '2016-2017', '1st Terminal Exam', 75, 100, 'A+', '5', 'Good'),
(17, '5', 'Md Yearul Islam', 'Mathematics', 'eight', '2016-2017', '1st Terminal Exam', 80, 100, 'A+', '5', 'Good'),
(18, '5', 'Md Yearul Islam', 'Mathematics', 'eight', '2016-2017', '1st Terminal Exam', 33, 100, 'D', '1', 'pass'),
(19, '5', 'Md Yearul Islam', 'Physics', 'eight', '2016-2017', '1st Terminal Exam', 63, 100, 'A+', '5', 'Good'),
(20, '5', 'Md Yearul Islam', 'Biology', 'eight', '2016-2017', '1st Terminal Exam', 79, 100, 'A+', '5', 'Good'),
(21, '5', 'Md Yearul Islam', 'Bangla', 'eight', '2016-2017', '1st Terminal Exam', 53, 100, 'D', '1', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `feescollection`
--

CREATE TABLE `feescollection` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `Class` varchar(50) NOT NULL,
  `Session` varchar(50) NOT NULL,
  `fees_cat` varchar(50) NOT NULL,
  `due_fees` int(11) DEFAULT 0,
  `current_fees` int(11) DEFAULT NULL,
  `total_fees` int(11) NOT NULL,
  `PaidAmount` int(11) NOT NULL,
  `due_balance` int(10) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `receipt_no` varchar(50) NOT NULL,
  `Remarks` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feescollection`
--

INSERT INTO `feescollection` (`id`, `student_id`, `student_name`, `Class`, `Session`, `fees_cat`, `due_fees`, `current_fees`, `total_fees`, `PaidAmount`, `due_balance`, `Date`, `receipt_no`, `Remarks`) VALUES
(8, 5, 'Md Yearul Islam', 'six', '2018-2019', 'admission_fees', 7000, 1000, 8000, 5000, 3000, '2021-09-21', '565454545', 'Dueee'),
(12, 14, 'sss', 'six', '2016-2017', 'event_fee', 0, 100, 100, 100, 0, '2021-09-06', '1465465465', 'paid'),
(13, 14, 'sss', 'six', '2016-2017', 'event_fee', 0, 100, 100, 100, 0, '2021-09-06', '466465465', 'paid'),
(15, 5, 'Md Yearul Islam', 'six', '2016-2017', 'admission_fees', 0, 800, 800, 600, 200, '2021-09-06', '45454521', 'Due'),
(16, 5, 'Md Yearul Islam', 'six', '2016-2017', 'january_salary', 200, 600, 800, 700, 100, '2021-09-06', '5464654', 'Due'),
(17, 2, 'Md Yearul Islam', 'seven', '2018-2019', 'admission_fees', 900, 1000, 1900, 1000, 900, '2021-09-09', '4456524445', 'paid'),
(18, 2, 'Md Yearul Islam', 'seven', '2018-2019', 'january_salary', 900, 600, 1500, 100, 1400, '2021-09-16', '5667843512', 'paid'),
(19, 2, 'Nabil Islam', 'seven', '2016-2017', 'admission_fees', 0, 800, 800, 500, 300, '2021-09-01', '', 'Due'),
(20, 2, 'Nabil Islam', 'seven', '2016-2017', 'admission_fees', 600, 800, 1400, 500, 900, '2021-09-03', '', 'Due'),
(21, 2, 'Nabil Islam', 'seven', '2016-2017', 'admission_fees', 300, 800, 1100, 500, 600, '2021-09-02', '', 'Due'),
(22, 9, 'Md Yearul Islam', 'six', '2016-2017', 'admission_fees', 0, 800, 800, 600, 200, '2021-09-06', '45454521', 'Due'),
(23, 9, 'islam yearul', 'eight', '2017-2018', 'admission_fees', 200, 1000, 1200, 1000, 200, '2021-09-12', '4456465', 'Due'),
(24, 5, 'Md Yearul Islam', 'eight', '2016-2017', 'admission_fees', 0, 800, 800, 600, 200, '2021-09-06', '45454521', 'Due'),
(25, 5, 'Md Yearul Islam', 'eight', '2016-2017', 'january_salary', 200, 600, 800, 700, 100, '2021-09-06', '5464654', 'Due'),
(26, 5, 'Md Yearul Islam', 'eight', '2016-2017', 'admission_fees', 100, 1000, 1100, 1000, 100, '2021-09-21', '565454545', 'Dueee');

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE `get_in_touch` (
  `gt_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `topics` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get_in_touch`
--

INSERT INTO `get_in_touch` (`gt_id`, `name`, `phone`, `email`, `topics`, `address`, `message`) VALUES
(00001, 'boby', '34646424', 'acs@gsg.com', 'Php', 'wrwrwqr', 'dgdsgdsgdsgagdf'),
(00002, 'boby', '34646424', 'acs@gsg.com', 'Php', 'wrwrwqr', 'dgdsgdsgdsgagdf'),
(00003, 'boby', '34646424', 'acs@gsg.com', 'Php', 'wrwrwqr', 'dgdsgdsgdsgagdf'),
(00004, 'boby', '34646424', 'acs@gsg.com', 'Php', 'wrwrwqr', 'dgdsgdsgdsgagdf');

-- --------------------------------------------------------

--
-- Table structure for table `grade`
--

CREATE TABLE `grade` (
  `grade_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `grade_point` longtext COLLATE utf8_unicode_ci NOT NULL,
  `mark_from` int(11) NOT NULL,
  `mark_upto` int(11) NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `grade`
--

INSERT INTO `grade` (`grade_id`, `name`, `grade_point`, `mark_from`, `mark_upto`, `comment`) VALUES
(1, 'A+', '5.00', 80, 100, 'Most Best'),
(2, 'A', '4.00', 70, 79, 'Best'),
(3, 'A-', '3.50', 60, 69, 'Good'),
(4, 'B', '3.00', 50, 59, 'Middle'),
(5, 'C', '2.00', 40, 49, 'Not Bad'),
(6, 'D', '1.00', 33, 39, 'Pass'),
(7, 'F', '0.00', 0, 32, 'Fail'),
(8, 'sdf', '45', 43, 55, 'fdg');

-- --------------------------------------------------------

--
-- Table structure for table `holiday`
--

CREATE TABLE `holiday` (
  `holiday_id` int(11) NOT NULL,
  `title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `holiday` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday`
--

INSERT INTO `holiday` (`holiday_id`, `title`, `holiday`, `date`) VALUES
(2, 'JUNE 12', 'THERE IS GOING TO BE HOLIDAY SOON', 'Wed, 26 July 2017'),
(3, 'MAY 25', 'THERE IS GOING TO BE HOLIDAY SOON', 'Tue, 25 July 2017');

-- --------------------------------------------------------

--
-- Stand-in structure for view `image_gallery`
-- (See below for the actual view)
--
CREATE TABLE `image_gallery` (
`file` varchar(200)
,`user_image` varchar(200)
,`seminar_image` varchar(150)
,`Photo` varchar(40)
);

-- --------------------------------------------------------

--
-- Table structure for table `job_anounce`
--

CREATE TABLE `job_anounce` (
  `job_announce_id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `job_post_name` varchar(150) NOT NULL,
  `job_description` text NOT NULL,
  `job_empty_post` tinyint(3) NOT NULL,
  `job_start_date` date NOT NULL,
  `job_application_fee` decimal(6,2) NOT NULL,
  `job_location` tinytext NOT NULL,
  `job_application_deadline` date NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_anounce`
--

INSERT INTO `job_anounce` (`job_announce_id`, `job_post_name`, `job_description`, `job_empty_post`, `job_start_date`, `job_application_fee`, `job_location`, `job_application_deadline`, `Status`) VALUES
(00001, 'Lecturer', 'A lecturer is someone who stands up in front of a class and gives an organized talk designed to teach you something. There are lots of lecturers at colleges and universities. The lecturer may even be hired for a single semester or year.', 10, '2021-08-14', '500.00', 'Dhaka', '2021-08-31', 'up_job_sta'),
(00015, 'Assistant Teacher', 'Assistant Teacher duties and responsibilities. Assistant Teachers oversee students in non-classroom settings like lunch, recess and field trips, and they work ', 4, '2021-08-18', '250.00', 'Dhaka', '2021-09-11', 'up_job_sta'),
(00016, 'Assistant Teacher', 'Assistant Teacher duties and responsibilities. Assistant Teachers oversee students in non-classroom settings like lunch, recess and field trips, and they work ', 5, '2021-08-18', '250.00', 'Dhaka', '2021-09-11', 'Active'),
(00017, 'Assistant Teacher', 'Assistant Teacher duties and responsibilities. Assistant Teachers oversee students in non-classroom settings like lunch, recess and field trips, and they work ', 5, '2021-08-18', '250.00', 'Dhaka', '2021-09-11', 'Inactive'),
(00018, 'Assistant Teacher', 'Assistant Teacher duties and responsibilities. Assistant Teachers oversee students in non-classroom settings like lunch, recess and field trips, and they work ', 5, '2021-08-18', '250.00', 'Dhaka', '2021-09-11', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_id` int(11) NOT NULL,
  `staff_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `amount` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `purpose` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `l_duration` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mop` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `g_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `g_relationship` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `g_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `g_address` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `g_country` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `c_type` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `model` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `make` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `serial_number` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `condition` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file_name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `staff_name`, `amount`, `purpose`, `l_duration`, `mop`, `g_name`, `g_relationship`, `g_number`, `g_address`, `g_country`, `c_name`, `c_type`, `model`, `make`, `serial_number`, `value`, `condition`, `date`, `status`, `file_name`) VALUES
(3, 'teacher 2', '1000', 'I WANT TO USE TO PAY FOR MY SCHOOL CHILDREN SCHOOL FEES', 'Daily', 'MODE OF PAYMENT HERE', 'MR OPTIMUMLINKUP', 'FAMILY', 'NUMBER', 'G ADDRESS', 'G COUNTRY', 'COLLATERAL NAME', 'C TYPE', 'C MODEL', 'C MAKE', 'C SERIAL NYMEBNER', '6', 'Daily', 'Fri, 07 July 2017', 'Pending', ''),
(5, 'teacher', '1000000', 'FOR WEDDING CEREMONY', 'Eight Months', 'Yearly', 'OMOLOLU', 'FAMILY', '081789644', 'G ADDRESS', 'COUNTRY', 'c name', 'c type', 'C MOD', 'C MAKE', 'C SERIAL NYMEBNER', '700000', 'Monthly', 'Wed, 12 July 2017', 'Pending', ''),
(6, 'LIBRARIAN', '5000', 'jghhgh', 'One Month', 'Daily', 'hkuhkjh', 'hjkhj', 'hkjh', 'kjhkjhj', 'hjkhjkhjh', 'khhhj', 'hkhhj', 'hj', 'ghi890-9ookk', 'hhjhj', '35676543', 'Daily', 'Thu, 20 July 2017', 'Approved', ''),
(7, 'Mr. Segun', '50000', 'jkkj`', 'One Month', 'Daily', 'jghjgh', 'jh', 'jh', 'jhj', 'hkjh', 'jk', 'hjk', 'hjk', 'hkj', 'hjk', '6789', 'Daily', 'Mon, 17 July 2017', 'Pending', ''),
(8, 'hostel', '4000', 'purpoae', 'One Month', 'Daily', 'khkj', 'hjk', 'jkhjh', 'hjkh', 'hjkh', 'kjhj', 'hjk', 'kj', 'ljhkl', 'hjk', '67890', 'Daily', 'Tue, 18 July 2017', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `news_content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `date`, `news_content`) VALUES
(3, 'INFORMATION ABOUT OMOLOU ESTHER IS CORRECT THAT SHE LOVES SEGUN', '23:12:12 PM', 'MARO RARA SHE IS JUST PRETENDING OOOOO');

-- --------------------------------------------------------

--
-- Table structure for table `noticeboard`
--

CREATE TABLE `noticeboard` (
  `notice_id` int(11) NOT NULL,
  `notice_title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8_unicode_ci NOT NULL,
  `create_timestamp` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `noticeboard`
--

INSERT INTO `noticeboard` (`notice_id`, `notice_title`, `notice`, `create_timestamp`) VALUES
(1, 'hi', 'today', 1495065600),
(2, 'Holiday', 'We are going on holidays soon', 1498867200);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `expense_category_id` int(11) NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci NOT NULL,
  `payment_type` longtext COLLATE utf8_unicode_ci NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `method` longtext COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `amount` longtext COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `expense_category_id`, `title`, `payment_type`, `invoice_id`, `student_id`, `method`, `description`, `amount`, `timestamp`) VALUES
(1, 0, 'PAYMENT FOR SCHOOL FEES', 'income', 1, 5, '2', 'PAYMENT FOR SCHOOL FEES', '500000', '1499472000'),
(2, 5, 'PURCHASE OF SCHOOL CHALK', 'expense', 0, 0, '1', 'WE ARE HAVE JUST PURCHASE SCHOO CHALK NOW', '4000', '1499458620');

-- --------------------------------------------------------

--
-- Stand-in structure for view `popular_course_view`
-- (See below for the actual view)
--
CREATE TABLE `popular_course_view` (
`course_id` int(5)
,`course_name` varchar(50)
,`course_cat` varchar(100)
,`course_seat` int(11)
,`course_start_date` date
,`course_description` text
,`course_image` varchar(200)
,`first_term_fee` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `nick_name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `name`, `nick_name`, `class_id`, `teacher_id`) VALUES
(1, 'FIRST', 'TERM', 1, 2),
(2, 'FIRST TERM', 'FIRST TERM', 2, 2),
(3, 'FIRST TERM', 'FIRST TERM', 3, 4),
(4, 'SECOND TERM', '2ND TERM', 3, 2),
(5, '2015-2016', 'Current Session', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `seminar`
--

CREATE TABLE `seminar` (
  `seminar_id` tinyint(5) UNSIGNED ZEROFILL NOT NULL,
  `seminar_name` varchar(100) NOT NULL,
  `seminar_maintainer` varchar(50) NOT NULL,
  `seminar_description` text NOT NULL,
  `seminar_location` varchar(100) NOT NULL,
  `seminar_date` date NOT NULL,
  `seminar_time` time NOT NULL,
  `seminar_end_time` time NOT NULL,
  `seminar_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminar`
--

INSERT INTO `seminar` (`seminar_id`, `seminar_name`, `seminar_maintainer`, `seminar_description`, `seminar_location`, `seminar_date`, `seminar_time`, `seminar_end_time`, `seminar_image`) VALUES
(00001, 'Science Fair', 'Md Yearul Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a ', 'Dhaka, Science Lab', '2021-08-26', '10:00:00', '12:00:00', '3cdd7db2149554995ca05e279fc78036.jpg'),
(00002, 'Science Fair', 'Md Yearul Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of ', 'Dhaka, Science Lab', '2021-08-26', '10:00:00', '28:25:23', '3cdd7db2149554995ca05e279fc78036.jpg'),
(00004, 'Science Fair', 'Md Yearul Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries  fdsfd', 'Dhaka, Science Lab', '2021-08-26', '10:00:00', '05:00:00', 'landscape-scene-of-forest-with-river-and-many-trees-free-vector (1).jpg'),
(00005, 'Science Fair', 'Md Yearul Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a', 'Dhaka, Science Lab', '2021-08-26', '10:00:00', '00:00:00', '3cdd7db2149554995ca05e279fc78036.jpg'),
(00006, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00007, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00008, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00009, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00010, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00011, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00012, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00013, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00014, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png'),
(00015, 'Biology Fair', 'Islam', 'A science fair is a competitive event, hosted by schools worldwide. The distinguishing characteristic of a science fair is that project entries employ the scientific method to test a hypothesis. ... Students present their science project results in the form of a report, display board, and/or models that they have created.', 'Dhaka, Science Lab', '2021-08-18', '10:00:00', '13:00:00', 'SkÃ¦rmbillede 2021-07-26 kl. 18.14.38.png');

-- --------------------------------------------------------

--
-- Table structure for table `seminar_registration`
--

CREATE TABLE `seminar_registration` (
  `std_reg_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `student_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `confirm_password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seminar_registration`
--

INSERT INTO `seminar_registration` (`std_reg_id`, `fullname`, `username`, `email`, `phone`, `student_id`, `course_id`, `pass`, `confirm_password`, `image`) VALUES
(1, 'Nabil Islam', 'nislam', 'nabil@gmail.com', '151566556456', 4, 3, '123', '123', ''),
(2, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 1, '123', '123', ''),
(3, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 1, '123', '123', '11 # Ashraful Islam  PP Size Picture.jpg'),
(4, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 1, '1236', '1236', '11 # Ashraful Islam  PP Size Picture.jpg'),
(5, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 1, '123', '123', 'fhfh.png'),
(6, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 1, '123', '123', 'fhfh.png'),
(7, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 1, '123', '123', 'fhfh.png'),
(8, 'abc', 'abc', 'abc@abc.abc', '123456789', 1, 1, '1234', '1234', 'education-logo-design_1969752.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `session`
--

CREATE TABLE `session` (
  `session_id` int(11) NOT NULL,
  `name` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `session`
--

INSERT INTO `session` (`session_id`, `name`) VALUES
(3, '2016-2017'),
(4, '2017-2018'),
(5, '2018-2019'),
(6, '2019-2020'),
(7, '2020-2021'),
(8, '2021-2022'),
(9, '2022-2023'),
(10, '2023-2024'),
(11, '2024-2025'),
(12, '2025-2026'),
(13, '2026-2027'),
(14, '2027-2028'),
(15, '2028-2029'),
(16, '2029-2030');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `std_id` int(10) UNSIGNED NOT NULL,
  `FullName` varchar(40) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `DOB` date NOT NULL,
  `Photo` varchar(40) DEFAULT NULL,
  `RegNo` varchar(40) NOT NULL,
  `Class` int(10) UNSIGNED NOT NULL,
  `AcademicYear` int(10) UNSIGNED NOT NULL,
  `TotalFees` int(10) UNSIGNED NOT NULL,
  `AdvanceFees` int(11) NOT NULL,
  `Balance` int(11) DEFAULT NULL,
  `Parent` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`std_id`, `FullName`, `Gender`, `DOB`, `Photo`, `RegNo`, `Class`, `AcademicYear`, `TotalFees`, `AdvanceFees`, `Balance`, `Parent`) VALUES
(5, 'Md Yearul Islam', 'male', '2021-08-01', 'Yearul-PP-2-Pic-2020-2.jpg', '1263640', 18, 2021, 15000, 5000, 10000, 123654),
(9, 'Md Yearul Islam', 'male', '2021-08-01', 'Yearul-PP-2-Pic-2020-2.jpg', '1263640', 18, 2021, 15000, 5000, 10000, 123654),
(12, 'Md Yearul Islam', 'male', '2021-08-01', 'saiful.jpg', '1263640', 18, 2021, 15000, 5000, 10000, 123654),
(13, 'Yearul', 'male', '2021-08-19', 'Yearul-PP-2-Pic-2020-2.jpg', '1321313', 2312, 123213, 2132131, 123213, 12321321, 23213),
(14, 'sss', 'male', '2021-08-24', 'roobon.png', '5354', 252, 32535, 542, 2454, 24545, 45452),
(16, 'Yearul', 'male', '2021-08-19', 'Yearul-PP-2-Pic-2020-2.jpg', '1321313', 2312, 123213, 2132131, 123213, 12321321, 23213),
(17, 'sss', 'male', '2021-08-24', 'roobon.png', '5354', 252, 32535, 542, 2454, 24545, 45452);

-- --------------------------------------------------------

--
-- Stand-in structure for view `student_information_view`
-- (See below for the actual view)
--
CREATE TABLE `student_information_view` (
`std_id` int(10) unsigned
,`FullName` varchar(40)
,`email` varchar(100)
,`phone` varchar(15)
,`Gender` varchar(40)
,`DOB` date
,`RegNo` varchar(40)
,`Class` int(10) unsigned
,`AcademicYear` int(10) unsigned
);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `std_reg_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class` varchar(20) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `confirm_password` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`std_reg_id`, `fullname`, `username`, `email`, `phone`, `student_id`, `class`, `pass`, `confirm_password`, `image`) VALUES
(3, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 'eight', '123', '123', '11 # Ashraful Islam  PP Size Picture.jpg'),
(4, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 'seven', '1236', '1236', '11 # Ashraful Islam  PP Size Picture.jpg'),
(5, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 'seven', '123', '123', 'fhfh.png'),
(6, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 3, 'six', '123', '123', 'fhfh.png'),
(7, 'Nabil Islam', 'islam', 'islamyearul@gmail.com', '151566556456', 4, 'kg', '123', '123', 'fhfh.png'),
(8, 'abc', 'abc', 'abc@abc.abc', '123456789', 1, 'eight', '1234', '1234', '11 # Ashraful Islam  PP Size Picture.jpg'),
(9, 'islam yearul', 'islamy', 'islamyearul@gmail.com', '151566556456', 9, 'eight', '123', '123', 'Yearul-PP-2-Pic-2020-2.jpg'),
(11, 'islam yearul', 'islamy', 'islamyearul@gmail.com', '151566556456', 9, '5', '123', '123', 'Yearul-PP-2-Pic-2020-2.jpg'),
(12, 'Nabil Islam', 'nislam', 'yearul@gmail.com', '151566556456', 2, 'seven', '123', '123', 'bablu.png');

-- --------------------------------------------------------

--
-- Table structure for table `stuff`
--

CREATE TABLE `stuff` (
  `stuff_id` tinyint(5) UNSIGNED ZEROFILL NOT NULL,
  `stuff_name` varchar(50) NOT NULL,
  `stuff_father` varchar(50) NOT NULL,
  `stuff_mother` varchar(50) NOT NULL,
  `stuff_email` varchar(100) NOT NULL,
  `stuff_post` varchar(50) NOT NULL,
  `stuff_mobile` tinyint(15) NOT NULL,
  `stuff_salary` tinyint(10) NOT NULL,
  `stuff_address` text NOT NULL,
  `stuff_gender` varchar(10) NOT NULL,
  `stuff_join_date` date NOT NULL,
  `stuff_password` varchar(150) NOT NULL,
  `stuff_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuff`
--

INSERT INTO `stuff` (`stuff_id`, `stuff_name`, `stuff_father`, `stuff_mother`, `stuff_email`, `stuff_post`, `stuff_mobile`, `stuff_salary`, `stuff_address`, `stuff_gender`, `stuff_join_date`, `stuff_password`, `stuff_image`) VALUES
(00003, 'Masud', 'maissa', 'aturi begum', 'masud@gmail.com', 'Peon', 127, 127, 'dsfsdfsdfds', 'male', '2021-08-03', '1123', ''),
(00004, 'Masud', 'maissa', 'aturi begum', 'masud@gmail.com', 'Peon', 127, 127, 'dsfsdfsdfds', 'male', '2021-08-03', '1123', 'danial.png'),
(00005, 'Masud', 'maissa', 'aturi begum', 'masud@gmail.com', 'Peon', 127, 127, 'dsfsdfsdfds', 'male', '2021-08-03', '1123', 'danial.png'),
(00008, 'Masud', 'maissa', 'aturi begum', 'masud@gmail.com', 'Peon', 127, 127, 'dsfsdfsdfds', 'male', '2021-08-03', '1123', 'danial.png'),
(00009, 'Masud', 'maissa', 'aturi begum', 'masud@gmail.com', 'Peon', 127, 127, 'dsfsdfsdfds', 'male', '2021-08-03', '1123', 'danial.png'),
(00010, 'Masud', 'maissa', 'aturi begum', 'masud@gmail.com', 'Peon', 127, 127, 'dsfsdfsdfds', 'male', '2021-08-03', '1123', 'danial.png');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `name` longtext COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `name`, `class_id`, `teacher_id`) VALUES
(1, 'Mathematics', 6, 6),
(2, 'Economics', 2, 2),
(4, 'Social Studies', 2, 2),
(11, 'Social Science', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teachers_id` int(20) NOT NULL,
  `teachers_name` varchar(50) NOT NULL,
  `teachers_email` varchar(100) NOT NULL,
  `teachers_mobile` tinyint(15) NOT NULL,
  `teachers_gender` varchar(10) NOT NULL,
  `teachers_joining_date` date NOT NULL,
  `teachers_subject` varchar(50) NOT NULL,
  `teachers_password` varchar(150) NOT NULL,
  `teachers_image` varchar(150) NOT NULL,
  `teachers_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teachers_id`, `teachers_name`, `teachers_email`, `teachers_mobile`, `teachers_gender`, `teachers_joining_date`, `teachers_subject`, `teachers_password`, `teachers_image`, `teachers_status`) VALUES
(2, 'Islam Yearul', 'islamyearul@gmail.com', 127, 'male', '2020-01-02', 'Botany', '123', 'Yearul-PP-2-Pic-2020-2.jpg', 'Active'),
(3, 'Islam Yearul', 'islamyearul@gmail.com', 127, 'male', '2020-01-02', 'Botany', '123', 'Yearul-PP-2-Pic-2020-2.jpg', 'Inactive'),
(4, 'Islam Yearul', 'islamyearul@gmail.com', 127, 'male', '2020-01-02', 'Botany', '202cb962ac59075b964b07152d234b70', 'roobon.png', 'Active'),
(5, 'Islam Yearul', 'islamyearul@gmail.com', 127, 'male', '2020-01-02', 'Botany', '123', 'Yearul-PP-2-Pic-2020-2.jpg', 'Active'),
(6, 'Islam Yearul', 'islamyearul@gmail.com', 127, 'male', '2020-01-02', 'Botany', '202cb962ac59075b964b07152d234b70', 'danial.png', 'Active'),
(7, 'Islam Yearul', 'islamyearul@gmail.com', 127, 'male', '2020-01-02', 'Botany', '123', 'Yearul-PP-2-Pic-2020-2.jpg', 'Inactive'),
(8, 'Yearul', 'islamyearul@gmail.com', 127, 'male', '2021-08-02', 'PHP', '123', 'Yearul-PP-2-Pic-2020-2.jpg', 'Active');

-- --------------------------------------------------------

--
-- Structure for view `course_view`
--
DROP TABLE IF EXISTS `course_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `course_view`  AS SELECT `cr`.`course_name` AS `course_name`, `cr`.`course_contact_person_name` AS `course_contact_person_name`, `ct`.`1st_sem_name` AS `1st_sem_name`, `fe`.`first_term_fee` AS `first_term_fee`, `ct`.`2nd_sem_name` AS `2nd_sem_name`, `fe`.`second_term_fee` AS `second_term_fee`, `ct`.`3rd_sem_name` AS `3rd_sem_name`, `fe`.`third_term_fee` AS `third_term_fee`, `ct`.`4th_sem_name` AS `4th_sem_name`, `fe`.`forth_term_fee` AS `forth_term_fee` FROM ((`courses` `cr` join `course_time_table` `ct` on(`cr`.`course_id` = `ct`.`course_id`)) join `course_process_fees` `fe` on(`cr`.`course_id` = `fe`.`course_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `image_gallery`
--
DROP TABLE IF EXISTS `image_gallery`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `image_gallery`  AS SELECT `add_event`.`file` AS `file`, `admin_info`.`user_image` AS `user_image`, `seminar`.`seminar_image` AS `seminar_image`, `students`.`Photo` AS `Photo` FROM (((`add_event` join `admin_info`) join `seminar`) join `students`) ;

-- --------------------------------------------------------

--
-- Structure for view `popular_course_view`
--
DROP TABLE IF EXISTS `popular_course_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `popular_course_view`  AS SELECT `cr`.`course_id` AS `course_id`, `cr`.`course_name` AS `course_name`, `cr`.`course_cat` AS `course_cat`, `cr`.`course_seat` AS `course_seat`, `cr`.`course_start_date` AS `course_start_date`, `cr`.`course_description` AS `course_description`, `cr`.`course_image` AS `course_image`, `cf`.`first_term_fee` AS `first_term_fee` FROM (`courses` `cr` join `course_process_fees` `cf`) WHERE `cr`.`course_id` = `cf`.`course_id` ;

-- --------------------------------------------------------

--
-- Structure for view `student_information_view`
--
DROP TABLE IF EXISTS `student_information_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `student_information_view`  AS SELECT `students`.`std_id` AS `std_id`, `students`.`FullName` AS `FullName`, `student_registration`.`email` AS `email`, `student_registration`.`phone` AS `phone`, `students`.`Gender` AS `Gender`, `students`.`DOB` AS `DOB`, `students`.`RegNo` AS `RegNo`, `students`.`Class` AS `Class`, `students`.`AcademicYear` AS `AcademicYear` FROM (`students` join `student_registration`) WHERE `students`.`std_id` = `student_registration`.`student_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_event`
--
ALTER TABLE `add_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_request`
--
ALTER TABLE `admission_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_class_fees_table`
--
ALTER TABLE `all_class_fees_table`
  ADD PRIMARY KEY (`all_class_fees_id`),
  ADD UNIQUE KEY `class` (`class`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `apply_course`
--
ALTER TABLE `apply_course`
  ADD PRIMARY KEY (`apply_course_id`);

--
-- Indexes for table `at_add_attendance`
--
ALTER TABLE `at_add_attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH,
  ADD UNIQUE KEY `name_numeric` (`name_numeric`) USING HASH;

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_name` (`course_name`);
ALTER TABLE `courses` ADD FULLTEXT KEY `course_description` (`course_description`);

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `course_process_fees`
--
ALTER TABLE `course_process_fees`
  ADD PRIMARY KEY (`course_fees_id`);

--
-- Indexes for table `course_time_table`
--
ALTER TABLE `course_time_table`
  ADD PRIMARY KEY (`course_time_id`);

--
-- Indexes for table `examquestion`
--
ALTER TABLE `examquestion`
  ADD PRIMARY KEY (`examquestion_id`);

--
-- Indexes for table `exam_all`
--
ALTER TABLE `exam_all`
  ADD PRIMARY KEY (`exam_id`);

--
-- Indexes for table `exam_all_trash`
--
ALTER TABLE `exam_all_trash`
  ADD PRIMARY KEY (`trash_id`);

--
-- Indexes for table `exam_marks`
--
ALTER TABLE `exam_marks`
  ADD PRIMARY KEY (`mark_id`);

--
-- Indexes for table `feescollection`
--
ALTER TABLE `feescollection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Student` (`student_id`),
  ADD KEY `Session` (`Session`);

--
-- Indexes for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  ADD PRIMARY KEY (`gt_id`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `holiday`
--
ALTER TABLE `holiday`
  ADD PRIMARY KEY (`holiday_id`);

--
-- Indexes for table `job_anounce`
--
ALTER TABLE `job_anounce`
  ADD PRIMARY KEY (`job_announce_id`),
  ADD KEY `job_post_name` (`job_post_name`);
ALTER TABLE `job_anounce` ADD FULLTEXT KEY `job_description` (`job_description`);
ALTER TABLE `job_anounce` ADD FULLTEXT KEY `job_description_2` (`job_description`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `noticeboard`
--
ALTER TABLE `noticeboard`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`seminar_id`);

--
-- Indexes for table `seminar_registration`
--
ALTER TABLE `seminar_registration`
  ADD PRIMARY KEY (`std_reg_id`);

--
-- Indexes for table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`session_id`),
  ADD UNIQUE KEY `name` (`name`) USING HASH;

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`std_reg_id`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`stuff_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teachers_id`);
ALTER TABLE `teachers` ADD FULLTEXT KEY `teachers_name` (`teachers_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_event`
--
ALTER TABLE `add_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admission_request`
--
ALTER TABLE `admission_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `all_class_fees_table`
--
ALTER TABLE `all_class_fees_table`
  MODIFY `all_class_fees_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `apply_course`
--
ALTER TABLE `apply_course`
  MODIFY `apply_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `at_add_attendance`
--
ALTER TABLE `at_add_attendance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `class_routine`
--
ALTER TABLE `class_routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_process_fees`
--
ALTER TABLE `course_process_fees`
  MODIFY `course_fees_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_time_table`
--
ALTER TABLE `course_time_table`
  MODIFY `course_time_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `examquestion`
--
ALTER TABLE `examquestion`
  MODIFY `examquestion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `exam_all`
--
ALTER TABLE `exam_all`
  MODIFY `exam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `exam_all_trash`
--
ALTER TABLE `exam_all_trash`
  MODIFY `trash_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_marks`
--
ALTER TABLE `exam_marks`
  MODIFY `mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `feescollection`
--
ALTER TABLE `feescollection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  MODIFY `gt_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `holiday`
--
ALTER TABLE `holiday`
  MODIFY `holiday_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_anounce`
--
ALTER TABLE `job_anounce`
  MODIFY `job_announce_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticeboard`
--
ALTER TABLE `noticeboard`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `seminar`
--
ALTER TABLE `seminar`
  MODIFY `seminar_id` tinyint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `seminar_registration`
--
ALTER TABLE `seminar_registration`
  MODIFY `std_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `session`
--
ALTER TABLE `session`
  MODIFY `session_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `std_reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
  MODIFY `stuff_id` tinyint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teachers_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
