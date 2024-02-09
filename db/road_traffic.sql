-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2023 at 07:57 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `road_traffic`
--

-- --------------------------------------------------------

--
-- Table structure for table `accident`
--

CREATE TABLE `accident` (
  `accident_id` int(11) NOT NULL,
  `vehicle_name` text NOT NULL,
  `color` text NOT NULL,
  `vins` varchar(30) NOT NULL,
  `license` varchar(40) NOT NULL,
  `party_name` text NOT NULL,
  `contact_info` varchar(50) NOT NULL,
  `injuries` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL,
  `location` varchar(100) NOT NULL,
  `accident_date` varchar(50) NOT NULL,
  `accident_time` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `case_id` varchar(12) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accident`
--

INSERT INTO `accident` (`accident_id`, `vehicle_name`, `color`, `vins`, `license`, `party_name`, `contact_info`, `injuries`, `image`, `location`, `accident_date`, `accident_time`, `description`, `case_id`, `dates`, `status`) VALUES
(1, 'Sharon', 'Red', '348734', '473-220-ED', 'Kamal Yahaya, Usman Yusuf', '0908155633', 'euisdjzx', '20230424_152347.jpg', 'Malali Bus stop', '2022-02-02', '01:39', 'uweieuewuiwe', 'FRSC/23/1507', '2023-07-13 05:57:03', 'approve'),
(2, 'Vectra Opel', 'Red', '348734', '211-782-HG', 'Abdulsalam Abdullateef', '0908155633', 'euisdjzx', '20230424_152347.jpg', 'Tudun wada by Shima ', '2022-02-02', '11:59', 'uweieuewuiwe', 'FRSC/23/2739', '2023-07-13 05:56:54', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `username` varchar(22) NOT NULL,
  `password` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'Kamal', 'Yahaya', 'admin', 'admin'),
(3, 'Hannatu', 'Ahmad', 'hanna', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `issue_date` varchar(30) NOT NULL,
  `expire_date` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gender` text NOT NULL,
  `state` text NOT NULL,
  `blood` text NOT NULL,
  `dob` varchar(20) NOT NULL,
  `m_status` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `reg_no` varchar(12) NOT NULL,
  `status` text NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `full_name`, `phone`, `issue_date`, `expire_date`, `email`, `gender`, `state`, `blood`, `dob`, `m_status`, `address`, `image`, `reg_no`, `status`, `dates`) VALUES
(1, 'Kamal yahaya', '08127494994', '26-07-2022', '26-07-2023', 'kamal@gmail.com', 'Male', 'GOMBE STATE', 'B-', '1999-02-02', 'Single', 'S24 KUNAI SREET NASSARAWA KADUNA, KADUNA STATE', 'ceo.png', 'FRSC/20/3127', 'approve', '2022-07-26 03:39:16'),
(4, 'Abdulsalam Abdullateef', '', '26-07-2022', '26-07-2023', 'abdul@gmail.com', 'Male', 'KADUNA STATE', 'A+', '1997-02-02', 'Single', 'Kano road No.21 Kaduna state', 'agent.jpeg', 'FRSC/20/2110', 'approve', '2022-07-26 05:25:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accident`
--
ALTER TABLE `accident`
  ADD PRIMARY KEY (`accident_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accident`
--
ALTER TABLE `accident`
  MODIFY `accident_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
