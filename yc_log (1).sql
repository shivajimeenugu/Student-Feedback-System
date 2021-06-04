-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 04:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yc_log`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_log`
--

CREATE TABLE `class_log` (
  `class_log_id` int(255) NOT NULL,
  `record_id` varchar(50) NOT NULL,
  `class_log_subject` text NOT NULL,
  `class_log_subject_code` varchar(50) NOT NULL,
  `letc_emp_id` varchar(50) NOT NULL,
  `class_log_date` date NOT NULL,
  `class_log_period_of_the_day` int(5) NOT NULL,
  `class_log_topic` text NOT NULL,
  `class_log_absentees` int(10) NOT NULL,
  `class_log_cumulative_periodes` float NOT NULL,
  `class_log_remarks` text NOT NULL,
  `class_log_type` varchar(50) NOT NULL,
  `class_log_leave_type` varchar(50) NOT NULL,
  `class_log_p_approve` varchar(50) NOT NULL DEFAULT '0',
  `class_log_h_approve` varchar(50) NOT NULL DEFAULT '0',
  `class_log_self_approve` tinyint(1) NOT NULL DEFAULT '0',
  `class_log_edit_flag` tinyint(1) NOT NULL DEFAULT '1',
  `class_log_todayornot` tinyint(1) NOT NULL DEFAULT '0',
  `letc_time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_log`
--

INSERT INTO `class_log` (`class_log_id`, `record_id`, `class_log_subject`, `class_log_subject_code`, `letc_emp_id`, `class_log_date`, `class_log_period_of_the_day`, `class_log_topic`, `class_log_absentees`, `class_log_cumulative_periodes`, `class_log_remarks`, `class_log_type`, `class_log_leave_type`, `class_log_p_approve`, `class_log_h_approve`, `class_log_self_approve`, `class_log_edit_flag`, `class_log_todayornot`, `letc_time_stamp`) VALUES
(25, '', 'Engineering Physics', 'CM-103', '521235', '2020-01-19', 4, '4', 4, 4, 'NONE', '', '', '0', '0', 0, 1, 1, '2020-01-19 04:45:34'),
(26, '', 'Engineering Physics', 'CM-103', '521235', '2020-01-19', 5, 'SHIVAJI', 5, 20, 'NONE', '', '', '0', '0', 0, 1, 1, '2020-01-19 05:00:57'),
(27, '', 'C  ProgrammingLaboratory', 'CM-108', '521235', '2020-01-19', 5, '5', 5, 5, '5NONE', '', '', '0', '0', 0, 1, 1, '2020-01-19 05:01:30'),
(28, '', 'Engineering Mathematics ?II', 'CM-301', '521235', '2020-01-19', 5, '4', 8, 4, 'NONE', '', '', '0', '0', 1, 1, 1, '2020-01-19 05:01:55');

-- --------------------------------------------------------

--
-- Table structure for table `h_users`
--

CREATE TABLE `h_users` (
  `id` int(255) NOT NULL,
  `h_user_name` text NOT NULL,
  `h_password` text NOT NULL,
  `h_mail` text NOT NULL,
  `h_status` tinyint(1) NOT NULL DEFAULT '1',
  `h_branch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `h_users`
--

INSERT INTO `h_users` (`id`, `h_user_name`, `h_password`, `h_mail`, `h_status`, `h_branch`) VALUES
(1, 'DCME', 'de112e3bbcbbab31208a863b41880d5f', 'test@mail.com', 1, 'DCME'),
(2, 'DME', 'de112e3bbcbbab31208a863b41880d5f', 'test@mail.com', 1, 'DME');

-- --------------------------------------------------------

--
-- Table structure for table `letc`
--

CREATE TABLE `letc` (
  `id` int(255) NOT NULL,
  `emp_name` text NOT NULL,
  `emp_code` varchar(50) NOT NULL,
  `emp_branch` varchar(25) NOT NULL,
  `emp_dg` text NOT NULL,
  `letc_password` varchar(255) NOT NULL DEFAULT 'de112e3bbcbbab31208a863b41880d5f',
  `emp_mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letc`
--

INSERT INTO `letc` (`id`, `emp_name`, `emp_code`, `emp_branch`, `emp_dg`, `letc_password`, `emp_mail`) VALUES
(3, 'SHIVAJI', '521235', 'DCME', 'LETC', 'de112e3bbcbbab31208a863b41880d5f', 'shivajimeenugu@gmail.com'),
(5, 'SHIVAJI2', '50006', 'DCME', 'LETC', 'de112e3bbcbbab31208a863b41880d5f', 'shivaji1223@gmail.com'),
(8, 'NAVEEN', '5174250', 'DCME', 'LETC', 'de112e3bbcbbab31208a863b41880d5f', 'no@gmail@com'),
(9, 'GANESH', '52123500', 'DME', 'LETC', 'de112e3bbcbbab31208a863b41880d5f', 'SHIVAJO@GMAIL.COM');

-- --------------------------------------------------------

--
-- Table structure for table `letc_users`
--

CREATE TABLE `letc_users` (
  `id` int(255) NOT NULL,
  `letc_username` text NOT NULL,
  `letc_emp_code` varchar(50) NOT NULL,
  `letc_password` text NOT NULL,
  `letc_mail` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `branch` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `letc_users`
--

INSERT INTO `letc_users` (`id`, `letc_username`, `letc_emp_code`, `letc_password`, `letc_mail`, `status`, `branch`) VALUES
(1, 'test', 'test', 'de112e3bbcbbab31208a863b41880d5f', 'test@admin.com', 1, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `p_users`
--

CREATE TABLE `p_users` (
  `id` int(255) NOT NULL,
  `p_user_name` text NOT NULL,
  `p_password` text NOT NULL,
  `p_mail` text NOT NULL,
  `p_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sub_db`
--

CREATE TABLE `sub_db` (
  `sub_code` varchar(50) NOT NULL,
  `sub_name` text NOT NULL,
  `sub_periods_per_week` int(10) NOT NULL,
  `sub_total_periods_per_year` int(10) NOT NULL,
  `sub_duration` int(10) NOT NULL,
  `sub_sessional` int(10) NOT NULL,
  `sub_end_marks` int(10) NOT NULL,
  `sub_branch` varchar(10) NOT NULL,
  `sub_type` varchar(10) NOT NULL,
  `sub_scheme` varchar(10) NOT NULL,
  `id` int(255) NOT NULL,
  `sub_allotted` int(150) NOT NULL,
  `a_flag` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_db`
--

INSERT INTO `sub_db` (`sub_code`, `sub_name`, `sub_periods_per_week`, `sub_total_periods_per_year`, `sub_duration`, `sub_sessional`, `sub_end_marks`, `sub_branch`, `sub_type`, `sub_scheme`, `id`, `sub_allotted`, `a_flag`) VALUES
('CM-101', 'English', 3, 90, 3, 20, 80, 'DCME', 'GENL', 'C16', 2, 521235, 1),
('CM-102', 'Engineering\nMathematics - I', 5, 150, 3, 20, 80, 'DCME', 'GENL', 'C16', 3, 50006, 1),
('CM-103', 'Engineering Physics', 4, 120, 3, 20, 80, 'DCME', 'GENL', 'C16', 4, 0, 0),
('CM-104', 'Engineering Chemistry and Environmental\nstudies', 4, 120, 3, 20, 80, 'DCME', 'GENL', 'C16', 5, 0, 0),
('CM-105', 'Basics of Computer\nEngineering', 4, 120, 3, 20, 80, 'DCME', 'TECH', 'C16', 6, 0, 0),
('CM-106', 'Programming in C', 4, 120, 3, 20, 80, 'DCME', 'TECH', 'C16', 7, 5174250, 1),
('CM-107', 'Engineering Drawing', 6, 180, 3, 40, 60, 'DCME', 'TECH', 'C16', 8, 0, 0),
('CM-108', 'C  Programming\nLaboratory', 6, 180, 3, 40, 60, 'DCME', 'LAB', 'C16', 9, 0, 0),
('CM-109', 'Physics Laboratory', 3, 90, 3, 20, 30, 'DCME', 'LAB', 'C16', 10, 0, 0),
('CM-110', 'Chemistry Laboratory', 0, 0, 3, 20, 30, 'DCME', 'LAB', 'C16', 11, 521235, 1),
('CM-111', 'Computer Fundamentals\nLaboratory', 3, 90, 3, 40, 60, 'DCME', 'LAB', 'C16', 12, 521235, 1),
('CM-301', 'Engineering Mathematics ?II', 5, 75, 3, 20, 80, 'DCME', 'GENL', 'C16', 13, 521235, 1),
('CM-302', 'Digital Electronics & Computer Architecture', 6, 90, 3, 20, 80, 'DCME', 'TECH', 'C16', 14, 0, 0),
('CM-303', 'Operating Systems', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 15, 5174250, 1),
('CM-304', 'Data Structures through C', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 16, 0, 0),
('CM-305', 'DBMS', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 17, 0, 0),
('CM-306', 'Data Structures Through C Lab', 6, 90, 3, 40, 60, 'DCME', 'LAB', 'C16', 18, 0, 0),
('CM-307', 'DBMS Lab', 4, 60, 3, 40, 60, 'DCME', 'LAB', 'C16', 19, 0, 0),
('CM-308', 'Communications Skills', 3, 45, 3, 40, 60, 'DCME', 'LAB', 'C16', 20, 0, 0),
('CM-309', 'Digital Electronics Lab', 3, 45, 3, 40, 60, 'DCME', 'LAB', 'C16', 21, 0, 0),
('CM-401', 'Computer Hardware & Networking', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 22, 0, 0),
('CM-402', 'OOP  through Java', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 23, 0, 0),
('CM-403', 'Software Engineering', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 24, 0, 0),
('CM-404', 'Microprocessors', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 25, 0, 0),
('CM-405', 'Web Designing', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 26, 0, 0),
('CM-406', 'Web Designing Lab', 6, 90, 3, 40, 60, 'DCME', 'LAB', 'C16', 27, 0, 0),
('CM-407', 'Java Programming Lab', 4, 60, 3, 40, 60, 'DCME', 'LAB', 'C16', 28, 0, 0),
('CM-408', 'Computer Hardware &Networking  Lab', 4, 60, 3, 40, 60, 'DCME', 'LAB', 'C16', 29, 0, 0),
('CM-409', 'Microprocessors Lab', 3, 45, 3, 40, 60, 'DCME', 'LAB', 'C16', 30, 0, 0),
('CM-501', 'Industrial Management & Smart Technologies', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 31, 0, 0),
('CM-502', '.NET Programming with C#', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 32, 0, 0),
('CM-503', 'System Administration', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 33, 0, 0),
('CM-504', 'Mobile Application Development', 5, 75, 3, 20, 80, 'DCME', 'TECH', 'C16', 34, 0, 0),
('CM-505', 'Advances in Computer Technology', 6, 90, 3, 20, 80, 'DCME', 'TECH', 'C16', 35, 0, 0),
('CM-506', 'System Administration & Software Testing Lab', 6, 90, 3, 40, 60, 'DCME', 'LAB', 'C16', 36, 0, 0),
('CM-507', '.NET Programming with C# Lab', 3, 45, 3, 40, 60, 'DCME', 'LAB', 'C16', 37, 0, 0),
('CM-508', 'Life Skills', 3, 45, 3, 40, 60, 'DCME', 'LAB', 'C16', 38, 0, 0),
('CM-509', 'Mobile Application\nDevelopment Lab', 4, 60, 3, 40, 60, 'DCME', 'LAB', 'C16', 39, 0, 0),
('EE-101', 'English', 3, 90, 3, 20, 80, 'DEEE', 'GENL', 'C16', 40, 0, 0),
('EE-102', 'Engineering Mathematics - I', 5, 150, 3, 20, 80, 'DEEE', 'GENL', 'C16', 41, 0, 0),
('EE-103', 'Engineering Physics', 4, 120, 3, 20, 80, 'DEEE', 'GENL', 'C16', 42, 0, 0),
('EE-104', 'Engineering Chemistry and Environmental Studies', 4, 120, 3, 20, 80, 'DEEE', 'GENL', 'C16', 43, 0, 0),
('EE-105', 'Electrical Engineering Materials', 3, 90, 3, 20, 80, 'DEEE', 'TECH', 'C16', 44, 0, 0),
('EE-106', 'Basic Electrical Engineering', 5, 150, 3, 20, 80, 'DEEE', 'TECH', 'C16', 45, 0, 0),
('EE-107', 'Engineering Drawing', 6, 180, 3, 40, 60, 'DEEE', 'TECH', 'C16', 46, 0, 0),
('EE-108', 'Basic Electrical and Electronics Laboratory', 6, 180, 3, 40, 60, 'DEEE', 'LAB', 'C16', 47, 0, 0),
('EE-109', 'Physics Laboratory', 3, 90, 3, 20, 30, 'DEEE', 'LAB', 'C16', 48, 0, 0),
('EE-110', 'Chemistry Laboratory', 0, 0, 3, 20, 30, 'DEEE', 'LAB', 'C16', 49, 0, 0),
('EE-111', 'Computer Fundamentals Laboratory', 3, 90, 3, 40, 60, 'DEEE', 'LAB', 'C16', 50, 0, 0),
('EE-301', 'Engg mathematics ?II', 5, 75, 3, 20, 80, 'DEEE', 'GENL', 'C16', 51, 0, 0),
('EE-302', 'D.C. machines & measuring instruments', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 52, 0, 0),
('EE-303', 'Electrical circuits', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 53, 0, 0),
('EE-304', 'General mechanical engg', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 54, 0, 0),
('EE-305', 'Electronics engg - I', 4, 60, 3, 20, 80, 'DEEE', 'TECH', 'C16', 55, 0, 0),
('EE-306', 'Dc machines & Measurements lab', 6, 90, 3, 40, 60, 'DEEE', 'LAB', 'C16', 56, 0, 0),
('EE-307', 'Electrical wiring & Maintenance lab', 6, 90, 3, 40, 60, 'DEEE', 'LAB', 'C16', 57, 0, 0),
('EE-308', 'C-language lab', 3, 45, 3, 40, 60, 'DEEE', 'LAB', 'C16', 58, 0, 0),
('EE-309', 'Electronics Engg lab ? i', 3, 45, 3, 40, 60, 'DEEE', 'LAB', 'C16', 59, 0, 0),
('EE-401', 'A.C. machines -I', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 60, 0, 0),
('EE-402', 'Power systems -I( G& P)', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 61, 0, 0),
('EE-403', 'Electrical utilization & traction', 5, 90, 3, 20, 80, 'DEEE', 'TECH', 'C16', 62, 0, 0),
('EE-404', 'Electrical installation & estimation', 4, 60, 3, 20, 80, 'DEEE', 'TECH', 'C16', 63, 0, 0),
('EE-405', 'Electronics Engg - II', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 64, 0, 0),
('EE-406', 'Electrical engg drawing', 7, 90, 3, 40, 60, 'DEEE', 'TECH', 'C16', 65, 0, 0),
('EE-407', 'A.C. machines -I laboratory', 4, 60, 3, 40, 60, 'DEEE', 'LAB', 'C16', 66, 0, 0),
('EE-408', 'Communication skills lab', 3, 45, 3, 40, 60, 'DEEE', 'LAB', 'C16', 67, 0, 0),
('EE-409', 'Electronics lab - ii', 4, 60, 3, 40, 60, 'DEEE', 'LAB', 'C16', 68, 0, 0),
('EE-501', 'Industrial management & smart technologies', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 69, 0, 0),
('EE-502', 'A.C. machines-II', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 70, 0, 0),
('EE-503', 'Power systems -II (T,D & P)', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 71, 0, 0),
('EE-504', 'Power electronics & PLC', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 72, 0, 0),
('EE-505', 'Digital electronics & Micro controllers', 5, 75, 3, 20, 80, 'DEEE', 'TECH', 'C16', 73, 0, 0),
('EE-506', 'A.C. machines laboratory-II', 4, 60, 3, 40, 60, 'DEEE', 'LAB', 'C16', 74, 0, 0),
('EE-507', 'Power electronics & PLC lab', 6, 90, 3, 40, 60, 'DEEE', 'LAB', 'C16', 75, 0, 0),
('EE-508', 'Life skills', 3, 45, 3, 40, 60, 'DEEE', 'LAB', 'C16', 76, 0, 0),
('EE-509', 'Digital electronics & Micro controllers Lab', 4, 60, 3, 40, 60, 'DEEE', 'LAB', 'C16', 77, 0, 0),
('EC-101', 'English', 3, 90, 3, 20, 80, 'DECE', 'GENL', 'C16', 78, 0, 0),
('EC-102', 'Engineering Mathematics - I', 5, 150, 3, 20, 80, 'DECE', 'GENL', 'C16', 79, 0, 0),
('EC-103', 'Engineering Physics', 4, 120, 3, 20, 80, 'DECE', 'GENL', 'C16', 80, 0, 0),
('EC-104', 'Engineering Chemistry & Environmental Studies', 4, 120, 3, 20, 80, 'DECE', 'GENL', 'C16', 81, 0, 0),
('EC-105', 'Electronic Devices & Power Supplies', 5, 150, 3, 20, 80, 'DECE', 'TECH', 'C16', 82, 0, 0),
('EC-106', 'Elements of Electrical Engineering', 4, 120, 3, 20, 80, 'DECE', 'TECH', 'C16', 83, 0, 0),
('EC-107', 'Engineering Drawing', 6, 180, 3, 40, 60, 'DECE', 'TECH', 'C16', 84, 0, 0),
('EC-108', 'Basic Electronics Laboratory& wiring fundamentals', 5, 150, 3, 40, 60, 'DECE', 'LAB', 'C16', 85, 0, 0),
('EC-109', 'Physics Laboratory', 3, 90, 3, 20, 30, 'DECE', 'LAB', 'C16', 86, 0, 0),
('EC-110', 'Chemistry Laboratory', 0, 0, 3, 20, 30, 'DECE', 'LAB', 'C16', 87, 0, 0),
('EC-111', 'Computer Fundamentals Laboratory', 3, 90, 3, 40, 60, 'DECE', 'LAB', 'C16', 88, 0, 0),
('EC- 301', 'Engineering Mathematics - II', 5, 75, 3, 20, 80, 'DECE', 'GENL', 'C16', 89, 0, 0),
('EC -302', 'Electronic Circuits', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 90, 0, 0),
('EC -303', 'Digital Electronics', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 91, 0, 0),
('EC-304', 'Analog and Digital Communication Systems', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 92, 0, 0),
('EC-305', 'Network Analysis', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 93, 0, 0),
('EC-306', 'Electronic Circuits lab', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 94, 0, 0),
('EC-307', 'Digital Electronics lab', 4, 60, 3, 40, 60, 'DECE', 'LAB', 'C16', 95, 0, 0),
('EC-308', 'Analog and Digital Communication systems Lab', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 96, 0, 0),
('EC-309', 'Communication Skills Practice', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 97, 0, 0),
('EC - 401', 'Linear ICs and Applications', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 98, 0, 0),
('EC - 402', 'Programming in C and MATLAB', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 99, 0, 0),
('EC - 403', 'Microprocessors', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 100, 0, 0),
('EC - 404', 'Electronic Measurements & consumer gadgets', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 101, 0, 0),
('EC-405', 'Microwave & Satellite Communication systems', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 102, 0, 0),
('EC - 406', 'Linear ICs Lab', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 103, 0, 0),
('EC - 407', 'Microprocessors lab', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 104, 0, 0),
('EC - 408', 'C & MATLAB practice laboratory', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 105, 0, 0),
('EC - 409', 'Consumer Electronics & Measurements Lab', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 106, 0, 0),
('EC -501', 'Industrial Management & Smart Technologies', 5, 75, 3, 20, 80, 'DECE', 'TECH', 'C16', 107, 0, 0),
('EC-502', 'Microcontrollers', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 108, 0, 0),
('EC-503', 'Computer Hardware & Networking', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 109, 0, 0),
('EC-504', 'Optical & Mobile Communications', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 110, 0, 0),
('EC-505', 'Industrial Electronics', 6, 90, 3, 20, 80, 'DECE', 'TECH', 'C16', 111, 0, 0),
('EC-506', 'Advanced Communications & Networking Lab', 4, 60, 3, 40, 60, 'DECE', 'LAB', 'C16', 112, 0, 0),
('EC-507', 'Microcontrollers lab', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 113, 0, 0),
('EC-508', 'Life Skills', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 114, 0, 0),
('EC-509', 'Industrial Electronics Lab', 3, 45, 3, 40, 60, 'DECE', 'LAB', 'C16', 115, 0, 0),
('M-101', 'English', 3, 90, 3, 20, 80, 'DME', 'GENL', 'C16', 116, 0, 0),
('M-102', 'Engineering Mathematics-I', 5, 150, 3, 20, 80, 'DME', 'GENL', 'C16', 117, 0, 0),
('M-103', 'Engineering Physics', 4, 120, 3, 20, 80, 'DME', 'GENL', 'C16', 118, 0, 0),
('M-104', 'Engineering Chemistry & Environmental Studies', 4, 120, 3, 20, 80, 'DME', 'GENL', 'C16', 119, 0, 0),
('M-105', 'Engineering Mechanics', 4, 120, 3, 20, 80, 'DME', 'TECH', 'C16', 120, 0, 0),
('M-106', 'Workshop Technology', 4, 120, 3, 20, 80, 'DME', 'TECH', 'C16', 121, 0, 0),
('M-107', 'Engineering Drawing', 6, 180, 3, 40, 60, 'DME', 'TECH', 'C16', 122, 0, 0),
('M-108', 'Basic Workshop Practice', 6, 180, 3, 40, 60, 'DME', 'LAB', 'C16', 123, 0, 0),
('M-109', 'Physics laboratory', 1, 45, 1, 20, 30, 'DME', 'LAB', 'C16', 124, 0, 0),
('M-110', 'Chemistry Laboratory', 1, 45, 1, 20, 30, 'DME', 'LAB', 'C16', 125, 0, 0),
('M-111', 'Computer  Fundamentals Laboratory', 3, 90, 3, 40, 60, 'DME', 'LAB', 'C16', 126, 0, 0),
('M-301', 'Engineering Mathematics-II', 5, 75, 3, 20, 80, 'DME', 'GENL', 'C16', 127, 0, 0),
('M-302', 'Strength of Materials', 6, 90, 3, 20, 80, 'DME', 'TECH', 'C16', 128, 0, 0),
('M-303', 'Thermal Engineering-I', 6, 90, 3, 20, 80, 'DME', 'TECH', 'C16', 129, 0, 0),
('M-304', 'Production Technology-I', 5, 75, 3, 20, 80, 'DME', 'TECH', 'C16', 130, 0, 0),
('M-305', 'Basic Electrical Engineering & Electronics', 5, 75, 3, 20, 80, 'DME', 'TECH', 'C16', 131, 0, 0),
('M-306', 'Machine Drawing', 6, 90, 3, 40, 60, 'DME', 'TECH', 'C16', 132, 0, 0),
('M-307', 'Fuels lab and Electrical Engineering Lab', 3, 45, 3, 20, 30, 'DME', 'LAB', 'C16', 133, 0, 0),
('M-308', 'Materials  testing lab', 3, 45, 3, 40, 60, 'DME', 'LAB', 'C16', 134, 0, 0),
('M-309', 'Workshop Practice-II', 3, 45, 3, 40, 60, 'DME', 'LAB', 'C16', 135, 0, 0),
('M-401', 'Engineering Materials', 6, 90, 3, 20, 80, 'DME', 'TECH', 'C16', 136, 0, 0),
('M-402', 'Hydraulics and Fluid Power Control Systems', 6, 90, 3, 20, 80, 'DME', 'TECH', 'C16', 137, 0, 0),
('M-403', 'Thermal Engineering II', 6, 90, 3, 20, 80, 'DME', 'TECH', 'C16', 138, 0, 0),
('M-404', 'Production technology-II', 6, 90, 3, 20, 80, 'DME', 'TECH', 'C16', 139, 0, 0),
('M-405', 'Design of Machine Elements', 6, 90, 3, 20, 80, 'DME', 'TECH', 'C16', 140, 0, 0),
('M-406', 'Production Drawing', 3, 45, 3, 40, 60, 'DME', 'TECH', 'C16', 141, 0, 0),
('M-407', 'Hydraulics & Fluid Power Control Systems Lab', 3, 45, 3, 40, 60, 'DME', 'LAB', 'C16', 142, 0, 0),
('M-408', 'Communication Skills', 3, 45, 3, 40, 60, 'DME', 'LAB', 'C16', 143, 0, 0),
('M-409', 'Thermal Engineering Lab', 3, 45, 3, 40, 60, 'DME', 'LAB', 'C16', 144, 0, 0),
('M-501', 'Industrial  Management & Smart Technologies', 5, 75, 3, 20, 80, 'DME', 'TECH', 'C16', 145, 0, 0),
('M-502', 'Industrial Engineering - Estimating and Costing', 6, 90, 3, 20, 80, 'DME', 'TECH', 'C16', 146, 0, 0),
('M-503', 'Refrigeration & Air-conditioning', 5, 75, 3, 20, 80, 'DME', 'TECH', 'C16', 147, 0, 0),
('M-504', 'Energy sources & Power Plant Engineering', 5, 75, 3, 20, 80, 'DME', 'TECH', 'C16', 148, 0, 0),
('M-505', 'Computer Aided Manufacturing systems', 5, 75, 3, 20, 80, 'DME', 'TECH', 'C16', 149, 0, 0),
('M-506', 'Computer Aided Drafting & CNC lab', 6, 90, 3, 40, 60, 'DME', 'LAB', 'C16', 150, 0, 0),
('M-507', 'Non-Conventional Energy sources and  R&AC lab', 3, 45, 3, 40, 60, 'DME', 'LAB', 'C16', 151, 0, 0),
('M-508', 'Life Skills', 3, 45, 3, 40, 60, 'DME', 'LAB', 'C16', 152, 0, 0),
('M-509', 'Workshop Practice - III', 4, 60, 3, 40, 60, 'DME', 'LAB', 'C16', 153, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_log`
--
ALTER TABLE `class_log`
  ADD PRIMARY KEY (`class_log_id`);

--
-- Indexes for table `h_users`
--
ALTER TABLE `h_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letc`
--
ALTER TABLE `letc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `letc_users`
--
ALTER TABLE `letc_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_users`
--
ALTER TABLE `p_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_db`
--
ALTER TABLE `sub_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_log`
--
ALTER TABLE `class_log`
  MODIFY `class_log_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `h_users`
--
ALTER TABLE `h_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `letc`
--
ALTER TABLE `letc`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `letc_users`
--
ALTER TABLE `letc_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_users`
--
ALTER TABLE `p_users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_db`
--
ALTER TABLE `sub_db`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
