-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 04:12 PM
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
(2, 'Nazim', '226465654', 'nazim@yahoo.com', 'Dhaka', 'BSC', 'MSC');

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
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(5) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` text NOT NULL,
  `course_status` varchar(10) NOT NULL,
  `course_cat` varchar(100) NOT NULL,
  `course_seat` int(11) NOT NULL,
  `course_start_date` date NOT NULL DEFAULT current_timestamp(),
  `course_contact_person_name` varchar(50) NOT NULL,
  `course_contact_person_phone` int(15) NOT NULL,
  `course_contact_email` varchar(100) NOT NULL,
  `course_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_description`, `course_status`, `course_cat`, `course_seat`, `course_start_date`, `course_contact_person_name`, `course_contact_person_phone`, `course_contact_email`, `course_image`) VALUES
(3, 'MSC', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Inactive', 'Science', 5, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', '3cdd7db2149554995ca05e279fc78036.jpg'),
(4, 'BSC', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Active', 'Software Development', 5, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', '3cdd7db2149554995ca05e279fc78036.jpg'),
(5, 'BBA', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n', 'Inactive', 'Web Application Development', 4, '2021-08-20', 'dsfsdf', 35325235, 'fsafsa@gmail.com', '3cdd7db2149554995ca05e279fc78036.jpg'),
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
(1, '10500.00', '7801.00', '45445.00', '7587.00', 'fsafsafsfasfs', 'safrwqrwqr', 'sdgsdgewgwe', 'sfdstwtwts', 'wqrwsafsaf', 'dfsg', 5),
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
(1, 'dgfdg', 'fdgfdgfdgfd', 'fdgfdg', 'dhrhrh', 'fdhfdh', 'fdgfd re', 'reyrey', 'setetew', 5),
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
(12, 'Md Yearul Islam', 'male', '2021-08-01', 'saiful.jpg', '1263640', 18, 2021, 15000, 5000, 10000, 123654),
(13, 'Yearul', 'male', '2021-08-19', 'Yearul-PP-2-Pic-2020-2.jpg', '1321313', 2312, 123213, 2132131, 123213, 12321321, 23213),
(14, 'sss', 'male', '2021-08-24', 'roobon.png', '5354', 252, 32535, 542, 2454, 24545, 45452);

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
-- Structure for view `popular_course_view`
--
DROP TABLE IF EXISTS `popular_course_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `popular_course_view`  AS SELECT `cr`.`course_id` AS `course_id`, `cr`.`course_name` AS `course_name`, `cr`.`course_cat` AS `course_cat`, `cr`.`course_seat` AS `course_seat`, `cr`.`course_start_date` AS `course_start_date`, `cr`.`course_description` AS `course_description`, `cr`.`course_image` AS `course_image`, `cf`.`first_term_fee` AS `first_term_fee` FROM (`courses` `cr` join `course_process_fees` `cf`) WHERE `cr`.`course_id` = `cf`.`course_id` ;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `apply_course`
--
ALTER TABLE `apply_course`
  ADD PRIMARY KEY (`apply_course_id`);

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
-- Indexes for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  ADD PRIMARY KEY (`gt_id`);

--
-- Indexes for table `job_anounce`
--
ALTER TABLE `job_anounce`
  ADD PRIMARY KEY (`job_announce_id`),
  ADD KEY `job_post_name` (`job_post_name`);
ALTER TABLE `job_anounce` ADD FULLTEXT KEY `job_description` (`job_description`);
ALTER TABLE `job_anounce` ADD FULLTEXT KEY `job_description_2` (`job_description`);

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
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `stuff`
--
ALTER TABLE `stuff`
  ADD PRIMARY KEY (`stuff_id`);

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
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admission_request`
--
ALTER TABLE `admission_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `apply_course`
--
ALTER TABLE `apply_course`
  MODIFY `apply_course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `get_in_touch`
--
ALTER TABLE `get_in_touch`
  MODIFY `gt_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_anounce`
--
ALTER TABLE `job_anounce`
  MODIFY `job_announce_id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `std_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `stuff`
--
ALTER TABLE `stuff`
  MODIFY `stuff_id` tinyint(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teachers_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
