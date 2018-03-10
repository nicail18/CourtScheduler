-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 06:07 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_courtscheduler`
--

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `time_from` time NOT NULL,
  `time_to` time NOT NULL,
  `date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `time_from`, `time_to`, `date`, `name`, `availability`) VALUES
(1, '07:00:00', '08:00:00', '2018-03-08', 'pits', 0),
(2, '08:00:00', '09:00:00', '2018-03-08', 'pits', 0),
(3, '09:00:00', '10:00:00', '2018-03-08', '', 1),
(4, '10:00:00', '11:00:00', '2018-03-08', '', 1),
(5, '11:00:00', '12:00:00', '2018-03-08', '', 1),
(6, '12:00:00', '13:00:00', '2018-03-08', '', 1),
(7, '13:00:00', '14:00:00', '2018-03-08', '', 1),
(8, '14:00:00', '15:00:00', '0000-00-00', '', 1),
(9, '15:00:00', '16:00:00', '2018-03-08', '', 1),
(10, '16:00:00', '17:00:00', '2018-03-08', '', 1),
(11, '17:00:00', '18:00:00', '2018-03-08', '', 1),
(12, '19:00:00', '20:00:00', '2018-03-08', '', 1),
(13, '20:00:00', '21:00:00', '0000-00-00', '', 1),
(14, '21:00:00', '22:00:00', '2018-03-08', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `use_tbl`
--

CREATE TABLE `use_tbl` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `use_tbl`
--
ALTER TABLE `use_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `use_tbl`
--
ALTER TABLE `use_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
