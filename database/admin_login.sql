-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2022 at 05:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_car`
--

CREATE TABLE `add_car` (
  `id` int(100) NOT NULL,
  `car_name` varchar(100) NOT NULL,
  `car_price` varchar(100) NOT NULL,
  `fe_1` varchar(100) NOT NULL,
  `fe_2` varchar(100) NOT NULL,
  `fe_3` varchar(100) NOT NULL,
  `fe_4` varchar(100) NOT NULL,
  `fe_5` varchar(100) NOT NULL,
  `car_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `car_booking`
--

CREATE TABLE `car_booking` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `appointment` datetime(6) NOT NULL,
  `car_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_booking`
--

INSERT INTO `car_booking` (`name`, `email`, `phone`, `address`, `appointment`, `car_name`) VALUES
('rushal', 'rushal@gmail.com', 1234567800, 'surat', '2022-10-03 19:52:00.000000', 'Tata Punch');

-- --------------------------------------------------------

--
-- Table structure for table `get_in_touch`
--

CREATE TABLE `get_in_touch` (
  `tname` varchar(50) NOT NULL,
  `temail` varchar(50) NOT NULL,
  `tsubject` varchar(50) NOT NULL,
  `tmessage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `get_in_touch`
--

INSERT INTO `get_in_touch` (`tname`, `temail`, `tsubject`, `tmessage`) VALUES
('hiren', 'hiren@gmail.com', 'for inquiry', 'you have a HRWheels branch in Surat ?');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `admin_Name` varchar(50) NOT NULL,
  `admin_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`admin_Name`, `admin_Password`) VALUES
('Hiren', 'Hi@123');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`fname`, `lname`, `email`, `address`, `phone`, `password`, `gender`) VALUES
('rushal', 'hirpara', 'rushal@gmail.com', 'surat', '123456789', '123', 'Male'),
('kishan', 'savaliya', 'kishan@gmail.com', 'surat', '908113252', '123', 'male'),
('rutvik', 'vasoya', 'rutvik@gmail.com', 'surat', '9081132528', '111', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `semail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`semail`) VALUES
('Hiren@gmail.com'),
('mohan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_car`
--
ALTER TABLE `add_car`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_car`
--
ALTER TABLE `add_car`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
