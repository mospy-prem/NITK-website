-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 03:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mospy`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_table`
--

CREATE TABLE `course_table` (
  `courseId` varchar(100) NOT NULL,
  `CourseName` varchar(100) NOT NULL,
  `Duration` varchar(100) NOT NULL,
  `Semsters` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_table`
--

INSERT INTO `course_table` (`courseId`, `CourseName`, `Duration`, `Semsters`) VALUES
('cs701', 'computing lab', '3', '4'),
('cs702', 'math', '2', '4');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Dept_id` varchar(300) NOT NULL,
  `Dept_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Dept_id`, `Dept_name`) VALUES
('CSE101', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `fee_table`
--

CREATE TABLE `fee_table` (
  `year` int(100) NOT NULL,
  `feetype` text NOT NULL,
  `pdf` varchar(300) NOT NULL,
  `com` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fee_table`
--

INSERT INTO `fee_table` (`year`, `feetype`, `pdf`, `com`) VALUES
(2021, 'HOSTEL', 'host-2021.pdf', '2021.HOSTEL'),
(2022, 'HOSTEL', '212cs019_prem_report.pdf', '2022.HOSTEL'),
(2022, 'INSTITUTE', 'Computing Lab Assignment 4 Teams - Sheet2.pdf', '2022.INSTITUTE');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`) VALUES
('mospy', '9693', 'Academic'),
('prem', '123', 'RANKING');

-- --------------------------------------------------------

--
-- Table structure for table `peppa`
--

CREATE TABLE `peppa` (
  `id` int(100) NOT NULL,
  `path` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `peppa`
--

INSERT INTO `peppa` (`id`, `path`) VALUES
(2020, 'ER-2020.pdf'),
(2021, 'ER-2021.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pg_course_table`
--

CREATE TABLE `pg_course_table` (
  `D_id` varchar(100) NOT NULL,
  `Dept_name` text NOT NULL,
  `Course_id` varchar(300) NOT NULL,
  `Course_name` text NOT NULL,
  `duration` int(100) NOT NULL,
  `sems` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg_course_table`
--

INSERT INTO `pg_course_table` (`D_id`, `Dept_name`, `Course_id`, `Course_name`, `duration`, `sems`) VALUES
('', 'Computer Science', 'cse2021', 'Computer science and engineering', 2, 4),
('', 'Computer Science', 'csis2021', 'Computer science and information security', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`username`, `password`, `file`) VALUES
('psm', '123', 'https://mospy-prem.github.io/portfolio/'),
('prsa', '147', 'https://priyasa399.github.io/resume_priyasa.github.io/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Dept_id`);

--
-- Indexes for table `pg_course_table`
--
ALTER TABLE `pg_course_table`
  ADD PRIMARY KEY (`Course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
