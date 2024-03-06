-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 01:23 AM
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
-- Database: `bothoclinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(10) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `first_name`, `last_name`) VALUES
('1234567890', 'kuzenentoi@gmail.com', '0987654321', 'Kuzene', 'Ntoi');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `student_id` int(11) NOT NULL,
  `timeslot` time NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`student_id`, `timeslot`, `email`, `date`, `first_name`, `last_name`) VALUES
(1923803, '16:00:00', 'korotsoane.ntoi@gmail.com', '2021-05-06', 'Korotosane', 'Ntoi');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `student_id` int(11) NOT NULL,
  `timeslot` time NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clinic`
--

CREATE TABLE `clinic` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `student_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clinic`
--

INSERT INTO `clinic` (`first_name`, `last_name`, `student_id`, `email`, `password`) VALUES
('Korotosane', 'Ntoii', 1923803, 'korotsoanentoi@gmail.com', '5852ntoi'),
('Katleho', 'Makoetje', 1923805, 'katlehomakoetje@gmail.com', '192323812z'),
('Paballo', 'Kele', 1923808, 'paballokele@gmail.com', 'paballo'),
('Thabo', 'Malitsane', 1923809, 'thabomalitsane@gmail.com', 'malitsane'),
('Justice', 'Ntoiiii', 1923810, 'justicentoi@gmail', 'justice'),
('Tata', 'papa', 2019803, 'tatapapa@gmail.com', '5050'),
('Faku', 'Masupha', 2021803, 'fakumasupha@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `nurseclinic`
--

CREATE TABLE `nurseclinic` (
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `nurse_id` varchar(10) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurseclinic`
--

INSERT INTO `nurseclinic` (`first_name`, `last_name`, `nurse_id`, `email`, `password`) VALUES
('Thabo', 'Katse', '1923801', 'thabokatse@gmail.com', 'thabokatse'),
('Boiketlo', 'Ntoi', '1923803', 'boiketlontoi@gmail.com', 'boiketlo'),
('Korotosane', 'Ntoi', '20002000', 'korotsoane.ntoi@gmail.com', '1234567890'),
('Katleho', 'Makoetje', '99809098', 'katlehomakoetje@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `clinic`
--
ALTER TABLE `clinic`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `nurseclinic`
--
ALTER TABLE `nurseclinic`
  ADD PRIMARY KEY (`nurse_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
