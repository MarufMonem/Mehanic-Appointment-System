-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 11, 2019 at 05:49 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mechanic`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `license` int(11) NOT NULL,
  `engine` int(11) NOT NULL,
  `date` date NOT NULL,
  `mechanic_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `address`, `phone`, `license`, `engine`, `date`, `mechanic_name`) VALUES
(1, 'Maruf Monem', 'Bashundhara', 1922540460, 45467, 565656, '2019-02-21', 'karim'),
(2, 'karim', 'kakrail', 456789, 123456, 789546, '2019-02-20', 'rahim'),
(3, 'yrty', 'fgfg', 453, 566, 675, '2019-02-24', 'bob'),
(4, 'dfsf', 'dfsdf', 45324, 1245, 21345, '2019-02-24', 'rahim'),
(5, 'Toni chakma', 'Korail', 123456, 753951, 456321, '2019-02-14', 'bob'),
(6, 'mamah', 'just killed a man', 12345, 56789, 21456, '2019-03-21', 'karim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
