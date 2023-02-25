-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 06:04 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--
use `my_web`
drop table if exists `member`;

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` char(1) NOT NULL,
  `graduate` char(1) NOT NULL,
  `sport` char(1) NOT NULL,
  `music` char(1) NOT NULL,
  `computer` char(1) NOT NULL,
  `upload` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `password`, `name`, `gender`, `graduate`, `sport`, `music`, `computer`, `upload`) VALUES
(4, 'Patthapong', 'Niamkerd', 'Patthapong Niamkerd', '1', '1', '1', '1', '3', 'document/29984/Screenshot (1).png'),
(5, 'Patthapong', '', 'Patthapong Niamkerd', '1', '1', '1', '1', '3', 'document/7794/Screenshot (2).png'),
(6, 'Test', 'test', 'Testman', '1', '1', '', '1', '', 'document/30803/Screenshot (2).png'),
(7, 'girl', 'girl', 'girl', '2', '2', '1', '1', '3', 'document/21570/Screenshot (1).png'),
(8, 'Women', '55', 'Women', '2', '2', '1', '1', '3', 'document/31471/'),
(9, 'Women', 'yy', 'Women', '2', '1', '', '1', '', 'document/7889/Screenshot (1).png'),
(10, 'Women', '123', '123', '2', '2', '', '1', '', 'document/32054/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
