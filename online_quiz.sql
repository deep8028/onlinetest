-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2025 at 06:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `option1` varchar(100) DEFAULT NULL,
  `option2` varchar(100) DEFAULT NULL,
  `option3` varchar(100) DEFAULT NULL,
  `option4` varchar(100) DEFAULT NULL,
  `correct_option` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `subject_id`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_option`) VALUES
(1, 1, '1kb equal to', '1024bits', '1012bits', '1024byte', '1012byte', 3),
(2, 1, 'Which HTML tag defines an internal stylesheet?', 'script', 'style', 'css', 'link', 2),
(3, 1, 'Which tag creates a hyperlink?', 'link', 'a', 'href', 'url', 2),
(4, 1, 'Which tag creates a hyperlink?', '<link>', '<a>', '<href>', '<url>', 2),
(5, 1, 'Which tag creates a hyperlink?', '<link>', '<a>', '<href>', '<url>', 2),
(6, 2, 'what is the use of CSS?', 'design Website', 'change look ', 'change HTML behavior', 'all of the above', 4),
(7, 2, 'how may way to include CSS?', '3', '2', '4', '5', 1),
(8, 2, 'how many way include color a font?', '6', '3', '4', '5', 4),
(9, 3, 'national sports of India?', 'football', 'cricket', 'hockey', 'vollyball', 3),
(10, 3, 'who is conducting Cricket in India? ', 'icc', 'BCCi', 'IPl', 'CPL', 2),
(11, 3, 'BCCI is a?', 'private organization', 'government organization', 'pp organization', 'none of the above ', 1),
(12, 3, 'BCCI is a?', 'private organization', 'government organization', 'pp organization', 'none of the above ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `subject_id`, `score`, `total`) VALUES
(1, 2, 1, 0, 5),
(2, 2, 1, 0, 5),
(3, 2, 1, 0, 5),
(4, 2, 1, 0, 5),
(5, 2, 1, 0, 5),
(6, 2, 2, 0, 3),
(7, 2, 2, 0, 3),
(8, 2, 2, 3, 3),
(9, 2, 2, 3, 3),
(10, 2, 2, 2, 3),
(11, 2, 2, 2, 3),
(12, 2, 2, 1, 3),
(13, 2, 2, 1, 3),
(14, 2, 2, 1, 3),
(15, 2, 2, 2, 3),
(16, 2, 2, 1, 3),
(17, 2, 1, 4, 5),
(18, 2, 1, 4, 5),
(19, 2, 1, 4, 5),
(20, 2, 1, 4, 5),
(21, 2, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`) VALUES
(1, 'computer'),
(2, 'html & css'),
(3, 'sports');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` enum('staff','student') DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `qualification`) VALUES
(1, 'selwyn', 'selwynmsc@gmail.com', 'Selwyn@msc', 'staff', NULL),
(2, 'raj', 'raj123@gmail.com', 'Raj@1234', 'student', NULL),
(3, 'sathish', 'sathis123@gmail.com', 'Sathish@123', 'staff', 'B.tech'),
(4, 'justin', 'justin@gmail.com', 'Justin@86', 'student', 'MSC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
