-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2021 at 06:26 PM
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
  `name` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentpersonalinfo`
--

INSERT INTO `studentpersonalinfo` (`id`, `name`, `roll`, `dept`, `course`, `semester`, `session`) VALUES
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
(41, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '10', '10', '14-05-2021 08:28:44 PM'),
(42, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert voice pain unresponsive', 'awake verbalization pain unconscious', '14-05-2021 08:28:44 PM'),
(43, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '4-6 hours', '2-4 hours', '14-05-2021 08:28:44 PM'),
(44, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On every wound', 'On all infected wounds.', '14-05-2021 08:28:44 PM'),
(45, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '21', '21', '14-05-2021 08:28:44 PM'),
(46, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '20', '21', '14-05-2021 08:29:00 PM'),
(47, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert voice pain unresponsive', 'awake verbalization pain unconscious', '14-05-2021 08:29:00 PM'),
(48, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '6-8 hours', '2-4 hours', '14-05-2021 08:29:00 PM'),
(49, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '20', '10', '14-05-2021 08:29:00 PM'),
(50, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all complex wounds.', 'On all infected wounds.', '14-05-2021 08:29:00 PM'),
(51, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '21', '21', '14-05-2021 08:29:23 PM'),
(52, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert voice pain unresponsive', 'awake verbalization pain unconscious', '14-05-2021 08:29:23 PM'),
(53, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all complex wounds.', 'On all infected wounds.', '14-05-2021 08:29:23 PM'),
(54, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '20', '10', '14-05-2021 08:29:23 PM'),
(55, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '6-8 hours', '2-4 hours', '14-05-2021 08:29:23 PM'),
(56, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '20', '21', '14-05-2021 09:33:15 PM'),
(57, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'awake verbalization pain unconscious', 'awake verbalization pain unconscious', '14-05-2021 09:33:15 PM'),
(58, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all complex wounds.', 'On all infected wounds.', '14-05-2021 09:33:15 PM'),
(59, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '20', '10', '14-05-2021 09:33:15 PM'),
(60, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '6-8 hours', '2-4 hours', '14-05-2021 09:33:15 PM'),
(61, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '14-05-2021 09:33:45 PM'),
(62, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '20', '21', '14-05-2021 09:33:45 PM'),
(63, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '6-8 hours', '2-4 hours', '14-05-2021 09:33:45 PM'),
(64, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all infected wounds.', 'On all infected wounds.', '14-05-2021 09:33:45 PM'),
(65, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '12', '10', '14-05-2021 09:33:45 PM'),
(66, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '20', '21', '14-05-2021 09:34:29 PM'),
(67, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all chronic wounds', 'On all infected wounds.', '14-05-2021 09:34:29 PM'),
(68, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '4-6 hours', '2-4 hours', '14-05-2021 09:34:29 PM'),
(69, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '14-05-2021 09:34:29 PM'),
(70, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '12', '10', '14-05-2021 09:34:29 PM'),
(71, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all infected wounds.', 'On all infected wounds.', '14-05-2021 09:38:07 PM'),
(72, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '20', '21', '14-05-2021 09:38:07 PM'),
(73, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '12', '10', '14-05-2021 09:38:07 PM'),
(74, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'awake verbalization pain unconscious', 'awake verbalization pain unconscious', '14-05-2021 09:38:07 PM'),
(75, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '2-4 hours', '2-4 hours', '14-05-2021 09:38:07 PM'),
(76, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '21', '21', '14-05-2021 09:38:21 PM'),
(77, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '20', '10', '14-05-2021 09:38:21 PM'),
(78, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert voice pain unresponsive', 'awake verbalization pain unconscious', '14-05-2021 09:38:21 PM'),
(79, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '6-8 hours', '2-4 hours', '14-05-2021 09:38:21 PM'),
(80, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On every wound', 'On all infected wounds.', '14-05-2021 09:38:21 PM'),
(81, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '20', '21', '14-05-2021 09:39:11 PM'),
(82, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '2-4 hours', '2-4 hours', '14-05-2021 09:39:11 PM'),
(83, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '12', '10', '14-05-2021 09:39:11 PM'),
(84, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all complex wounds.', 'On all infected wounds.', '14-05-2021 09:39:11 PM'),
(85, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'awake voice pain unconscious', 'awake verbalization pain unconscious', '14-05-2021 09:39:11 PM'),
(86, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '20', '21', '14-05-2021 09:39:29 PM'),
(87, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert voice pain unresponsive', 'awake verbalization pain unconscious', '14-05-2021 09:39:29 PM'),
(88, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On every wound', 'On all infected wounds.', '14-05-2021 09:39:29 PM'),
(89, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '4-6 hours', '2-4 hours', '14-05-2021 09:39:29 PM'),
(90, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '10', '10', '14-05-2021 09:39:29 PM'),
(91, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '20', '21', '14-05-2021 09:48:26 PM'),
(92, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '1-2 hours', '2-4 hours', '14-05-2021 09:48:26 PM'),
(93, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'awake voice pain unconscious', 'awake verbalization pain unconscious', '14-05-2021 09:48:26 PM'),
(94, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all chronic wounds', 'On all infected wounds.', '14-05-2021 09:48:26 PM'),
(95, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '12', '10', '14-05-2021 09:48:26 PM'),
(96, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '14-05-2021 09:50:07 PM'),
(97, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On all complex wounds.', 'On all infected wounds.', '14-05-2021 09:50:07 PM'),
(98, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '4-6 hours', '2-4 hours', '14-05-2021 09:50:07 PM'),
(99, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '12', '10', '14-05-2021 09:50:07 PM'),
(100, '21', 'Swapnanil Paul', 'Computer Science', ' How soon after surgery is the patient expected to pass urine? ', '1-2 hours', '2-4 hours', '14-05-2021 09:51:01 PM'),
(101, '21', 'Swapnanil Paul', 'Computer Science', ' What does AVPU mean?  ', 'alert verbalization pain unconscious', 'awake verbalization pain unconscious', '14-05-2021 09:51:01 PM'),
(102, '21', 'Swapnanil Paul', 'Computer Science', ' how old are you? ', '21', '21', '14-05-2021 09:51:01 PM'),
(103, '21', 'Swapnanil Paul', 'Computer Science', ' When would it be beneficial to use a wound care plan? ', 'On every wound', 'On all infected wounds.', '14-05-2021 09:51:01 PM'),
(104, '21', 'Swapnanil Paul', 'Computer Science', ' what is the answer of 20-(5+5) = ? ', '20', '10', '14-05-2021 09:51:01 PM');

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `submittedqtnans`
--
ALTER TABLE `submittedqtnans`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
