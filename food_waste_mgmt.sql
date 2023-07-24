-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 10:42 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_waste_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `collect_food`
--

CREATE TABLE `collect_food` (
  `cid` int(11) NOT NULL,
  `c_name` varchar(60) NOT NULL,
  `c_contact` varchar(30) NOT NULL,
  `c_address` varchar(30) NOT NULL,
  `c_addresstype` text NOT NULL,
  `c_date` date NOT NULL,
  `c_time` varchar(30) NOT NULL,
  `pickup_done` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collect_food`
--

INSERT INTO `collect_food` (`cid`, `c_name`, `c_contact`, `c_address`, `c_addresstype`, `c_date`, `c_time`, `pickup_done`) VALUES
(21, 'ghlkjhlkjh', 'ghfjhgfjhg', 'hgfdhgfdhfg', 'HOME', '2020-02-01', '08:00 AM to 12:00 PM', 0),
(22, 'Ravi Kushwaha', '9131720001', 'Indra nagar Suhagi Adhartal', 'RESTAURANT', '2022-05-27', '07:00 PM to 12:00 AM', 0),
(23, 'Ravi Kushwaha', '9131720001', 'Indra nagar Suhagi Adhartal', 'OFFICE', '2022-05-30', '08:00 AM to 12:00 PM', 0),
(24, 'Satyam Dubey', '1234567890', 'Indra nagar Suhagi Adhartal', 'HOME', '2020-02-01', '08:00 AM to 12:00 PM', 1),
(25, 'pankaj', '9745789660', 'gokalpur ', 'RESTAURANT', '2022-06-02', '07:00 PM to 12:00 AM', 0),
(26, 'Satyam Soni', '7586812236', 'rajwadri thana gokalpur', 'HOME', '2020-02-11', '08:00 AM to 12:00 PM', 0),
(27, 'Ravi Kushwaha', '1234567890', 'gokalpur ', 'HOME', '2020-02-01', '08:00 AM to 12:00 PM', 0),
(28, 'shiv', '7586812236', 'rajwadri thana gokalpur', 'RESTAURANT', '2020-02-26', '07:00 PM to 12:00 AM', 1),
(29, 'Pankaj sissodiya', '4569758210', 'gokalpur jabalpur', 'HOME', '2022-06-07', '08:00 AM to 12:00 PM', 0),
(30, 'admin', '7586812236', 'Indra nagar Suhagi Adhartal', 'HOME', '2020-02-01', '08:00 AM to 12:00 PM', 0),
(31, 'admin', '1234567890', 'Indra nagar Suhagi Adhartal', 'OFFICE', '2020-02-01', '08:00 AM to 12:00 PM', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'superuser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collect_food`
--
ALTER TABLE `collect_food`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collect_food`
--
ALTER TABLE `collect_food`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
