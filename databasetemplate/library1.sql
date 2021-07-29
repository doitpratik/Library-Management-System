-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 11:43 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `pic` longtext NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first`, `last`, `username`, `password`, `email`, `contact`, `pic`, `status`) VALUES
(1, 'Aditya', 'Nair', 'aditya', '123456', 'adityanair@gmail.com', '8833559920', '', 1),
(2, 'Komal', 'Jain', 'komal', '111111', 'komailj@gmail.com', '7733927190', 'user_default.jpg', 1),
(14, ' raghav', 's', 'raghav', '123', 'gfsjdf', '34367', 'user_default.jpg', 1),
(20, ' Suresh', 'Kumar', 'suresh', '123456', 'suresh123@gmail.com', '8978909099', 'user_default.jpg', 1),
(21, ' Priya', 'Jain', 'priya', '123456', 'priya123@gmail.com', '9898989898', 'user_default.jpg', 1),
(22, ' aj', 'ah', 'dsd', '123', 'asa@gmail.com', '4646', 'user_default.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bid` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `edition` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bid`, `name`, `authors`, `edition`, `status`, `quantity`, `department`) VALUES
(1, 'Principal of electronics', 'V.K. Mehta, Rohit Mehta', '3rd', 'Available', 9, 'EEE'),
(2, 'The Complete Reference C++', 'Herbert Schildt', '4th', 'Available', 7, 'CSE'),
(3, 'Higher Engineering Mathematics ', ' Grewal B. S.', '38th', 'Available', 7, 'IT'),
(4, ' Electronic Communications Systems', 'Wayne Tomasi', '5th', 'Available', 15, 'EXTC'),
(5, 'SQL The Complete Reference', 'James R Groff, Paul N. Weinberg, Andy Oppel ,  McGraw Hill.', '3rd', 'Available', 14, 'IT'),
(6, 'Java-The Complete Reference', 'Herbert Schildt, Tata McGraw Hill Publication', '7th', 'Available', 19, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comment`) VALUES
(15106789, 'rahul', 'Require ABC book'),
(15106790, 'neha', 'hello'),
(15106791, 'rashmi', 'Hi'),
(15106792, 'neha ', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `returned` varchar(100) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` double NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `bid`, `returned`, `day`, `fine`, `status`) VALUES
('shreya', 2, '2020-10-17', 1, 0.1, 'not paid'),
('ritik', 1, '2020-10-17', 4, 0.4, 'not paid'),
('ritik', 6, '2020-10-17', 3, 0.3, 'not paid'),
('rashmi', 6, '2020-10-18', 8, 0.8, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `bid` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `bid`, `approve`, `issue`, `return`) VALUES
('ritik', 1, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-10-10', '2020-10-13'),
('shreya', 2, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-10-13', '2020-10-16'),
('jyoti', 3, 'Yes', '2020-10-15', '2020-10-20'),
('ritik', 6, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-10-9', '2020-10-14'),
('ritik', 5, 'Yes', '2020-10-10', '2020-10-20'),
('rashmi', 6, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-10-3', '2020-10-10'),
('shreya', 4, '', '', ''),
('neha', 2, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-10-10', '2020-10-16'),
('neha ', 2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roll` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(100) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`first`, `last`, `username`, `password`, `roll`, `email`, `contact`, `branch`, `pic`) VALUES
('Nehaa', 'Sharma', 'neha', '123456', 18104056, 'nehasharma@gmail.com', 2147483647, 'EXTC', 'home_bg'),
('Ritik', 'Jain', 'ritik', '45678', 19674960, 'ritik123@yahoo.com', 2147483647, 'MECH', 'user_default.jpg'),
('Rashmi', 'Shetty', 'rashmi', '000000', 19456740, 'rshetty@yahoo.com', 2147483647, 'CIVIL', 'user_default.jpg'),
('Jyoti', 'Nair', 'jyoti', '222222', 17183456, 'jyotinair@gmail.com', 987685493, 'MECH', 'user_default.jpg'),
('Rahul', 'Gupta', 'rahul', '898989', 15106789, 'rahul@gmail.com', 978564789, 'MECH', 'user_default.jpg'),
('Shreya', 'Patel', 'shreya', '909091', 14906789, 'spatil@yahoo.com', 965455789, 'COMPS', 'user_default.jpg'),
('Zeba', 'karol', 'zeba', '654321', 15678990, 'zeba@gmail.com', 2147483647, 'IT', ''),
('v', 'v', 'v', '123456', 12345, 'v@123', 86535, 'IT', 'user_default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15106793;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
