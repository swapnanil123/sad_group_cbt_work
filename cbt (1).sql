-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2021 at 07:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbt`
--

-- --------------------------------------------------------

--
-- Table structure for table `examanswer`
--

CREATE TABLE `examanswer` (
  `id` int(100) NOT NULL,
  `exam_code` int(255) NOT NULL,
  `stdName` varchar(100) NOT NULL,
  `stdRoll` varchar(100) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `stdGivenAnswer` varchar(255) NOT NULL,
  `currectAnswer` varchar(255) NOT NULL,
  `submitionTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examanswer`
--

INSERT INTO `examanswer` (`id`, `exam_code`, `stdName`, `stdRoll`, `subject_name`, `question`, `stdGivenAnswer`, `currectAnswer`, `submitionTime`) VALUES
(78, 1071, 'Swapnanil', '46', 'Computer#Science', ' How old are you ? ', '43', '21', '31-07-2021 05:32:04 PM'),
(79, 1071, 'Swapnanil', '46', 'Computer#Science', ' How are you ? ', 'fine', 'fine', '31-07-2021 05:32:04 PM'),
(80, 1071, 'Ram', '18', 'Computer#Science', ' How are you ? ', 'ho', 'fine', '31-07-2021 05:32:25 PM'),
(81, 1071, 'Ram', '18', 'Computer#Science', ' How old are you ? ', '10', '21', '31-07-2021 05:32:25 PM'),
(82, 1071, 'Sam', '1548', 'Computer#Science', ' How are you ? ', 'fine', 'fine', '31-07-2021 05:33:07 PM'),
(83, 1071, 'Sam', '1548', 'Computer#Science', ' How old are you ? ', '21', '21', '31-07-2021 05:33:07 PM');

-- --------------------------------------------------------

--
-- Table structure for table `examcreatedetails`
--

CREATE TABLE `examcreatedetails` (
  `exam_serial_no` int(255) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `sem_name` varchar(255) NOT NULL,
  `paper_code` varchar(255) NOT NULL,
  `course` varchar(100) NOT NULL,
  `number_of_question` varchar(255) NOT NULL,
  `exam_duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examcreatedetails`
--

INSERT INTO `examcreatedetails` (`exam_serial_no`, `subject_name`, `sem_name`, `paper_code`, `course`, `number_of_question`, `exam_duration`) VALUES
(1071, 'computer science', 'semester 1', 'cmsh_0925', 'core course', '10', '20'),
(1072, 'computer science', 'semester 3', 'cmsh_5688', 'general elective', '20', '20'),
(1073, 'mathematics', 'semester 2', 'math_251', 'skill enhancement course', '10', '40');

-- --------------------------------------------------------

--
-- Table structure for table `ongoingexam`
--

CREATE TABLE `ongoingexam` (
  `id` int(255) NOT NULL,
  `exam_code` varchar(100) NOT NULL,
  `stdUserId` varchar(255) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `sem_name` varchar(255) NOT NULL,
  `paper_code` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `tot_no_qtn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ongoingexam`
--

INSERT INTO `ongoingexam` (`id`, `exam_code`, `stdUserId`, `subject_name`, `sem_name`, `paper_code`, `duration`, `tot_no_qtn`) VALUES
(83, '1071', '', ' computer science ', ' semester 1 ', ' cmsh_0925 ', ' 20  ', ' 10 ');

-- --------------------------------------------------------

--
-- Table structure for table `questiondetails`
--

CREATE TABLE `questiondetails` (
  `id` int(50) NOT NULL,
  `exam_code` varchar(255) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `sem_name` varchar(255) NOT NULL,
  `paper_code` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `option_1` varchar(255) NOT NULL,
  `option_2` varchar(255) NOT NULL,
  `option_3` varchar(255) NOT NULL,
  `option_4` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questiondetails`
--

INSERT INTO `questiondetails` (`id`, `exam_code`, `subject_name`, `sem_name`, `paper_code`, `question`, `option_1`, `option_2`, `option_3`, `option_4`, `answer`) VALUES
(50, '1071', 'computer science', 'semester 1', 'cmsh_0925', 'how are you ?', 'fine', 'ho', 'go', 'he', 'fine'),
(51, '1071', 'computer science', 'semester 1', 'cmsh_0925', 'how old are you ?', '43', '10', '21', '23', '21'),
(52, '1072', 'computer science', 'semester 3', 'cmsh_5688', 'color of leaves ?', 'green', 'red', 'orange', 'yellow', 'green'),
(53, '1072', 'computer science', 'semester 3', 'cmsh_5688', '4 + 9 = ?', '49', '13', '09', '90', '13'),
(54, '1073', 'mathematics', 'semester 2', 'math_251', '29 + 31 = ?', '51', '54', '60', '59', '60'),
(55, '1073', 'mathematics', 'semester 2', 'math_251', '432 + 008 = ?', '448', '468', '440', '154', '440');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogindata`
--

CREATE TABLE `studentlogindata` (
  `stdUserId` int(255) NOT NULL,
  `exam_serial_no` varchar(255) NOT NULL,
  `std_name` varchar(100) NOT NULL,
  `std_roll` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogindata`
--

INSERT INTO `studentlogindata` (`stdUserId`, `exam_serial_no`, `std_name`, `std_roll`) VALUES
(5462, '1071', 'swapnanil', '46'),
(5463, '1072', 'akash', '19'),
(5464, '1073', 'anupam', '49'),
(5465, '1071', 'ram', '18'),
(5466, '1071', 'sam', '1548');

-- --------------------------------------------------------

--
-- Table structure for table `studentpersonalinfo`
--

CREATE TABLE `studentpersonalinfo` (
  `id` int(50) NOT NULL,
  `stdName` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `sessionStd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentpersonalinfo`
--

INSERT INTO `studentpersonalinfo` (`id`, `stdName`, `roll`, `dept`, `course`, `semester`, `sessionStd`) VALUES
(45, 'swapnanil', '46', 'computer science', 'core course', 'semester 1', '49-50'),
(46, 'akash', '19', 'computer science', 'general elective', 'semester 3', '15-16'),
(47, 'anupam', '49', 'mathematics', 'skill enhancement course', 'semester 2', '15-48'),
(48, 'ram', '18', 'computer science', 'core course', 'semester 1', '168'),
(49, 'sam', '1548', 'computer science', 'core course', 'semester 1', '1548');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(50) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userPassword` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `fullName`, `username`, `userPassword`, `userEmail`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examanswer`
--
ALTER TABLE `examanswer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examcreatedetails`
--
ALTER TABLE `examcreatedetails`
  ADD PRIMARY KEY (`exam_serial_no`);

--
-- Indexes for table `ongoingexam`
--
ALTER TABLE `ongoingexam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questiondetails`
--
ALTER TABLE `questiondetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlogindata`
--
ALTER TABLE `studentlogindata`
  ADD PRIMARY KEY (`stdUserId`);

--
-- Indexes for table `studentpersonalinfo`
--
ALTER TABLE `studentpersonalinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examanswer`
--
ALTER TABLE `examanswer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `examcreatedetails`
--
ALTER TABLE `examcreatedetails`
  MODIFY `exam_serial_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1074;

--
-- AUTO_INCREMENT for table `ongoingexam`
--
ALTER TABLE `ongoingexam`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `questiondetails`
--
ALTER TABLE `questiondetails`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `studentlogindata`
--
ALTER TABLE `studentlogindata`
  MODIFY `stdUserId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5467;

--
-- AUTO_INCREMENT for table `studentpersonalinfo`
--
ALTER TABLE `studentpersonalinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
