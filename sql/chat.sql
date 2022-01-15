-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 12:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1361968096, 1591618315, 'ikkaa...'),
(2, 1591618315, 1361968096, 'da billeeee'),
(3, 1361968096, 1591618315, 'how are you man'),
(4, 1591618315, 1361968096, 'fine dude'),
(5, 1005159632, 1591618315, 'HBD kelavaaa'),
(6, 1361968096, 1569524469, 'hai'),
(7, 1361968096, 1569524469, 'hello'),
(8, 1569524469, 1361968096, 'hai'),
(9, 1361968096, 1569524469, 'hai bill'),
(10, 1569524469, 1361968096, 'google is stupid'),
(11, 1361968096, 1569524469, 'yeah Microsoft is dump'),
(12, 1569524469, 1361968096, 'okey lets make a deal'),
(13, 1361968096, 1569524469, 'yeah thats correct'),
(14, 1569524469, 1361968096, 'haha gotcha!!'),
(15, 1361968096, 1569524469, '😂😂');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(200) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(400) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`) VALUES
(1, 1361968096, 'bill', 'gates', 'bill@gmail.com', 'bill', '1634131371bill.jpg', 'Offline now'),
(2, 1569524469, 'larry', 'page', 'larry@gmail.com', 'larry', '1634131410larry.jpg', 'Active now'),
(3, 1005159632, 'mohan', 'lal', 'lalettan@gmail.com', 'lal', '1634131465lal.jpg', 'Offline now'),
(4, 1591618315, 'mammootty', 'actor', 'mammootty@gmail.com', 'mammootty', '1634131585mam.jpg', 'Offline now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
