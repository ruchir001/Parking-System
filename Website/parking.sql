-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2017 at 11:13 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `email` varchar(35) NOT NULL,
  `venue` varchar(5) NOT NULL,
  `day` varchar(10) NOT NULL,
  `slot` varchar(5) NOT NULL,
  `payment` int(5) NOT NULL,
  `transaction_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`email`, `venue`, `day`, `slot`, `payment`, `transaction_id`) VALUES
('chachan.aayush529@gmail.com', 'LIB', 'Friday', '27', 50, '99263'),
('chachan.aayush529@gmail.com', 'LIB', 'Thursday', '64', 25, '99644'),
('chachan.aayush529@gmail.com', 'MB', 'Friday', '38', 50, '99937'),
('chachan.aayush529@gmail.com', 'MB', 'Tuesday', '39', 50, '98863'),
('chachan.aayush529@gmail.com', 'SJT', 'Monday', '41', 25, '99458'),
('chachan.aayush529@gmail.com', 'SJT', 'Monday', '43', 25, '99083'),
('chachan.aayush529@gmail.com', 'SJT', 'Tuesday', '54', 25, '99798'),
('chachan.aayush529@gmail.com', 'TT', 'Tuesday', '16', 50, '99497');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `country` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`, `contact`, `country`) VALUES
('Aayu', 'Chac', 'aayush.aashu001@gmail.com', '1503eda8d9579434aeb8d217f5f03dcf', '9988775544', 'India'),
('aashu', 'singh', 'aayush.chachan2015@vit.ac.in', 'e3f24b175dfd2a6d81cc328008fd3708', '9982838104', 'Australia'),
('Vikram', 'Singh', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8754123698', 'India'),
('Aakash ', 'Singh', 'abcd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1234567890', 'Germany'),
('Aakash', 'Singh', 'chachan.aayush529@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9982838103', 'India');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`email`,`venue`,`day`,`slot`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
