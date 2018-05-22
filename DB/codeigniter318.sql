-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2018 at 02:52 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter318`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `userid` varchar(60) NOT NULL,
  `password` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `joineddate` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `empcode` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `userid`, `password`, `username`, `dept`, `joineddate`, `gender`, `empcode`, `created_at`, `modified_at`) VALUES
(1, 'mdv@gmail.com', 'mdviky', 'vignesh', 'IT', '2018-05-01', 'male', 1234, '2018-05-20 09:53:04', '0000-00-00 00:00:00'),
(2, 'krishna@gmail.com', 'krishna', 'krishna', 'EEE', '2018-05-02', 'female', 12346, '2018-05-21 08:53:07', '0000-00-00 00:00:00'),
(3, 'ravi@gmail.com', 'ravi', 'ravi', 'IT', '2018-05-01', 'male', 1235, '2018-05-21 08:43:50', '0000-00-00 00:00:00'),
(4, 'kishor@gmail.com', 'kishor', 'kishor', 'EEE', '2018-05-02', 'male', 111, '2018-05-21 08:37:51', '0000-00-00 00:00:00'),
(5, 'dines@gmail.com', 'dines', 'dines', 'IT', '2018-05-01', 'male', 123456, '2018-05-21 08:40:02', '0000-00-00 00:00:00'),
(6, 'sankar@gmail.com', 'sankar', 'sankar', 'EEE', '2018-05-02', 'male', 12345, '2018-05-21 08:41:30', '0000-00-00 00:00:00'),
(7, 'visnu@gmail.com', 'visnu', 'visnu', 'IT', '2018-05-01', 'male', 12, '2018-05-21 08:38:38', '0000-00-00 00:00:00'),
(8, 'ram@gmail.com', 'ram', 'ram', 'CIVIL', '2018-05-02', 'male', 12347, '2018-05-21 08:41:56', '0000-00-00 00:00:00'),
(9, 'kannan@gmail.com', 'kannan', 'Kannan', 'IT', '2018-05-01', 'male', 123411, '2018-05-21 08:52:53', '0000-00-00 00:00:00'),
(10, 'anitha@gmail.com', 'anitha', 'Anitha', 'CSE', '2018-05-02', 'female', 11, '2018-05-21 08:33:44', '0000-00-00 00:00:00'),
(11, 'bala@gmail.com', 'bala', 'Bala', 'IT', '2018-05-01', 'male', 234, '2018-05-21 08:38:30', '0000-00-00 00:00:00'),
(12, 'kk@gmail.com', 'kk', 'kk', 'EEE', '2018-05-02', 'female', 12348, '2018-05-21 08:39:14', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
