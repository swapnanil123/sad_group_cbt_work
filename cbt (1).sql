-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 03:46 PM
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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(50) NOT NULL,
  `questionName` varchar(255) NOT NULL,
  `optionOne` varchar(255) NOT NULL,
  `optionTwo` varchar(255) NOT NULL,
  `optionThree` varchar(255) NOT NULL,
  `optionFour` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `questionName`, `optionOne`, `optionTwo`, `optionThree`, `optionFour`, `answer`) VALUES
(2, 'how old are you?', '20', '21', '22', '23', '21'),
(3, 'What does AVPU mean? ', 'alert verbalization pain unconscious', 'awake voice pain unconscious', 'alert voice pain unresponsive', 'awake verbalization pain unconscious', 'awake verbalization pain unconscious'),
(4, 'How soon after surgery is the patient expected to pass urine?', '1-2 hours', '2-4 hours', '4-6 hours', '6-8 hours', '2-4 hours'),
(5, 'When would it be beneficial to use a wound care plan?', 'On all chronic wounds', 'On all infected wounds.', 'On all complex wounds.', 'On every wound', 'On all infected wounds.'),
(6, 'what is the answer of 20-(5+5) = ?', '12', '20', '10', '5', '10');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogininfo`
--

CREATE TABLE `studentlogininfo` (
  `id` int(50) NOT NULL,
  `roll_number` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogininfo`
--

INSERT INTO `studentlogininfo` (`id`, `roll_number`, `username`, `password`) VALUES
(1, '21', 'swapnanil', '123456'),
(2, '23', 'debajyoti', '123456'),
(3, '22', 'akash', '123456');

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
(1, 'swapnanil paul', '21', 'computer science', 'honours', '6', '2019-2020'),
(2, 'akash biswas', '22', 'computer science', 'honours', '6', '2019-2020'),
(3, 'debajyoti pramanick', '23', 'mathematics', 'honours', '6', '2019-2020');

-- --------------------------------------------------------

--
-- Table structure for table `submittedqtnans`
--

CREATE TABLE `submittedqtnans` (
  `id` int(50) NOT NULL,
  `stdRoll` varchar(255) NOT NULL,
  `stdName` varchar(255) NOT NULL,
  `stdDept` varchar(255) NOT NULL,
  `questionName` varchar(255) NOT NULL,
  `stdGivenAns` varchar(255) NOT NULL,
  `currectAns` varchar(255) NOT NULL,
  `submitTime` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submittedqtnans`
--

INSERT INTO `submittedqtnans` (`id`, `stdRoll`, `stdName`, `stdDept`, `questionName`, `stdGivenAns`, `currectAns`, `submitTime`) VALUES
(118, '21', 'Swapnanil Paul', 'Computer Science', ' What is the answer of 20-(5+5) = ? ', '12', '10', '17-05-2021 02:32:29 PM'),
(119, '21', 'Swapnanil Paul', 'Computer Science', ' How old are you? ', '20', '21', '17-05-2021 02:32:29 PM'),
(120, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all chronic wounds', 'On all infected wounds.', '17-05-2021 02:32:29 PM'),
(121, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '1-2 hours', '2-4 hours', '17-05-2021 02:32:29 PM'),
(122, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '17-05-2021 02:32:29 PM'),
(123, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '28-05-2021 08:19:00 PM'),
(124, '21', 'Swapnanil Paul', 'Computer Science', ' How old are you? ', '21', '21', '28-05-2021 08:19:00 PM'),
(125, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '28-05-2021 08:20:13 PM'),
(126, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '28-05-2021 08:21:06 PM'),
(127, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '28-05-2021 08:21:15 PM'),
(128, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '28-05-2021 08:22:35 PM'),
(129, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '28-05-2021 08:22:43 PM'),
(130, '21', 'Swapnanil Paul', 'Computer Science', ' How old are you? ', '20', '21', '28-05-2021 08:23:01 PM'),
(131, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '28-05-2021 08:23:13 PM'),
(132, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '28-05-2021 08:23:59 PM'),
(133, '21', 'Swapnanil Paul', 'Computer Science', ' How old are you? ', '20', '21', '28-05-2021 08:24:20 PM'),
(134, '21', 'Swapnanil Paul', 'Computer Science', ' How old are you? ', '20', '21', '28-05-2021 08:24:36 PM'),
(135, '21', 'Swapnanil Paul', 'Computer Science', ' How old are you? ', '22', '21', '28-05-2021 08:26:04 PM'),
(136, '21', 'Swapnanil Paul', 'Computer Science', ' How old are you? ', '20', '21', '28-05-2021 08:26:17 PM'),
(137, '21', 'Swapnanil Paul', 'Computer Science', ' How old are you? ', '20', '21', '28-05-2021 08:29:58 PM'),
(138, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '2-4 hours', '2-4 hours', '03-06-2021 07:37:12 PM'),
(139, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '03-06-2021 07:37:12 PM');

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
(1, 'admin', 'admin', 'admin', 'admin@admin.com'),
(9, 'swap', 'swapnanil', '123456', 'adm@las.com'),
(10, 'asdf', 'asd', 'asd', 'asd@asdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentlogininfo`
--
ALTER TABLE `studentlogininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentpersonalinfo`
--
ALTER TABLE `studentpersonalinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submittedqtnans`
--
ALTER TABLE `submittedqtnans`
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
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studentlogininfo`
--
ALTER TABLE `studentlogininfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentpersonalinfo`
--
ALTER TABLE `studentpersonalinfo`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `submittedqtnans`
--
ALTER TABLE `submittedqtnans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
