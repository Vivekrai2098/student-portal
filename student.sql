-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2022 at 05:43 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `email` varchar(255) NOT NULL,
  `text1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`email`, `text1`) VALUES
('', ''),
('rahul@gmail.com', 'asd'),
('rahul@gmail.com', 'hello world'),
('rahul@gmail.com', 'hello sir how are you'),
('shivam123@gmail.com', 'sir water is not in this college');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email`, `name`, `password`) VALUES
('jai', 'shri', '123'),
('jai', 'shri', '234'),
('jai', 'shri', '345'),
('hello ', 'kumar', '890'),
('ram', 'asd', '123'),
('jai', 'as', '123'),
('swd', 'asd', ''),
('jai@gmail.com', 'asdad', '123'),
('jai123@gmail.com', 'we', 'asd'),
('jai123@gmail.com', 'jaishree', '123'),
('jai123@gmail.com', 'shri', '123'),
('jai123@gmail.com', 'shri', '123'),
('jai123@gmail.com', 'sdf', '123'),
('jai123@gmail.com', 'shri', '234'),
('jai123@gmail.com', 'shri', '455'),
('jai123@gmail.com', 'dsf', '123'),
('jai123@gmail.com', 'shri', '45'),
('jai123@gmail.com', 'shri', '567'),
('jai123@gmail.com', 'shri', 'asd'),
('jai123@gmail.com', 'shri', '456'),
('rahul@gmail.com', 'rahul', '678a'),
('ram@gmail.com', 'ram', '123'),
('admin@gmail.com', 'admin', '100'),
('shivam123@gmail.com', 'shivam', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
