-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2019 at 12:11 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libone`
--

-- --------------------------------------------------------

--
-- Table structure for table `lib`
--

CREATE TABLE `lib` (
  `id` bigint(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `pass` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL DEFAULT 'avater.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib`
--

INSERT INTO `lib` (`id`, `fname`, `lname`, `email`, `role`, `pass`, `profile`) VALUES
(25, 'dipjol', 'debfdfs', 'liton@gmail.com', 1, 'caf1a3dfb505ffed0d024130f58c5cfa', '5cc755703df16.jpg'),
(28, 'hkr', 'roy', 'kk@gmail.com', 2, 'caf1a3dfb505ffed0d024130f58c5cfa', '5cc5f8b69e028.jpg'),
(30, 'asraful', 'ahmed', 'as@gmail.com', 2, '202cb962ac59075b964b07152d234b70', '5cc749e9ecbf2.jpg'),
(31, 'sakib', 'khan', 'sa@gmail.com', 2, 'd41d8cd98f00b204e9800998ecf8427e', 'avater.jpg'),
(32, 'noyan', 'roy', 'no@gmail.com', 2, 'e10adc3949ba59abbe56e057f20f883e', 'avater.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lib_book`
--

CREATE TABLE `lib_book` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `creator_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lib_book`
--

INSERT INTO `lib_book` (`id`, `title`, `sub_title`, `image`, `author`, `creator_id`) VALUES
(11, 'englishgsfgsdffdf', 'eng-bang jj', '5cc62760a43fb.jpg', 'adminfsdfsd', 28),
(13, 'english-bangla', 'eng-bang jj', '5cc626beed0fa.jpg', 'admin', 28),
(14, 'bangla', 'bangla and english', '5cc6a0f0b9d44.jpg', 'hemanta', 25),
(15, 'math', 'mathmethics', '5cc6d60564383.jpg', 'litton', 25),
(16, 'stoy life', 'new ', '5cc6d623671e3.jpg', 'hkr', 25),
(17, 'english-bangla', 'life style', '5cc754820fed5.jpg', 'asraful', 30),
(18, 'three ', 'bangla and hinde', '5cc7551af3c08.jpg', 'joydeb', 30),
(19, 'english', 'eng-bang', '5cc76a1e8e0c1.jpg', 'joyyyy', 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lib`
--
ALTER TABLE `lib`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lib_book`
--
ALTER TABLE `lib_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lib`
--
ALTER TABLE `lib`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `lib_book`
--
ALTER TABLE `lib_book`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
