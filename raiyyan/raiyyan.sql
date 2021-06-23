-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2021 at 12:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raiyyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `raiyyan`
--

CREATE TABLE `raiyyan` (
  `id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `mobile` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raiyyan`
--

INSERT INTO `raiyyan` (`id`, `name`, `email`, `mobile`) VALUES
(1, 'Mark Stevens', 'test@gmail.com', '44444444'),
(2, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(3, 'John', 'test@gmail.com', '3333333333'),
(4, 'HHH Stevens', 'test@gmail.com', '3333333333'),
(5, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(6, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(7, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(8, 'Mark Stevens', 'test@gmail.com', '3333333333111'),
(9, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(10, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(11, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(12, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(13, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(14, 'VVMark Stevens', 'test@gmail.com', '444444444'),
(15, 'GGMark StevensGG', 'test@gmail.com', '3333333333'),
(16, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(17, 'Come', 'test@gmail.com', '3333333333'),
(18, 'CC', 'test@gmail.com', '3333333333'),
(19, 'FF', 'test@gmail.com', '3333333333'),
(20, 'xxMark Stevens', 'test@gmail.com', '3333333333'),
(21, 'xxMark Stevens', 'test@gmail.com', '3333333333'),
(22, 'HHMark Stevens', 'test@gmail.com', '3333333333'),
(23, 'GGGGMark Stevens', 'test@gmail.com', '3333333333'),
(24, 'VVVVVMark Stevens', 'test@gmail.com', '3333333333'),
(25, 'BBBMark Stevens', 'test@gmail.com', '3333333333'),
(26, 'Mark Stevens', 'test@gmail.com', '3333333333'),
(27, 'FF Stevens', 'test@gmail.com', '3333333333'),
(28, 'Checkx', 'test@gmail.com', '9999'),
(29, 'Saud', 'test@gmail.com', '4444444'),
(30, 'Saud', 'test@gmail.com', '4444444'),
(31, 'HH', 'test@gmail.com', '7777777');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `raiyyan`
--
ALTER TABLE `raiyyan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `raiyyan`
--
ALTER TABLE `raiyyan`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
