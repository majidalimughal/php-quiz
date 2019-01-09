-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2018 at 12:40 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'quiz'
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(4) NOT NULL,
  `cat_name` varchar(40) COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'php'),
(2, 'html'),
(3, 'css'),
(4, 'javascript'),
(5, 'jquery'),
(6, 'bootstrap');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(4) NOT NULL,
  `question` varchar(120) COLLATE latin1_general_ci NOT NULL,
  `option1` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `option2` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `option3` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `option4` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `answer` int(4) NOT NULL,
  `cat_id` int(4) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option1`, `option2`, `option3`, `option4`, `answer`, `cat_id`) VALUES
(2, 'PHP is?', 'server side language', 'client side language', 'front end ', 'database designing ', 0, 1),
(3, 'How do you write \"Hello World\" in PHP', '\"Hello World\";', 'Document.Write(\"Hello World\");', 'echo \"Hello World\";', 'Document.print(\"Hello World\");', 2, 1),
(4, 'All variables in PHP start with which symbol?', '$', '#', '&', '!', 0, 1),
(5, 'The PHP syntax is most similar to:', 'JavaScript', 'Jquery', 'VBScript', 'option4', 0, 1),
(16, '', '', '', '', 'option4', 0, 0),
(17, 'What is the correct way to create a function in PHP?', 'new_function myFunction()', 'function myFunction()', 'create myFunction()', 'option4', 1, 1),
(18, 'What is the correct way to open the file &quot;time.txt&quot; as readable?', 'open(&quot;time.txt&quot;,&quot;read&quot;);', 'open(&quot;time.txt&quot;);', 'fopen(&quot;time.txt&quot;,&quot;r+&quot;);', 'option4', 0, 1),
(19, 'What is the correct way to add 1 to the $count variable?', '$count++;', 'count++;', '++count', 'option4', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(16) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, '', '', '', ''),
(2, 'Majid', 'admin', 'mughalmajidali101@gmail.com', 'daba1234'),
(3, 'Ibrahim', 'ibra', 'asd@gmai.com', 'adafhdafjk'),
(4, 'Zahid', 'zahid@gmail.com', 'asdsd@gmail.com', 'sgagf4twef'),
(5, 'Zahid', 'zahidwre@gmail.com', 'asdsddsgf@gmail.com', 'ahfiuduf'),
(6, 'Zahid', 'zahidwreddg@gmail.com', 'asdsddsgfaf@gmail.com', 'asfddgf'),
(7, 'Talal', 'talalala', 'talalrafi@kuifh.com', 'nfdsjkfjsdf'),
(8, 'Saiban', 'saiban', 'mughalmajidali101@gmail.com', 'daba7828');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`) USING BTREE;

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
