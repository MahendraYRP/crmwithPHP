-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2023 at 11:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `currency` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `company`, `email`, `phone`, `address`, `city`, `state`, `zipcode`, `country`, `currency`) VALUES
(3, 'mike', 'test', 'mike@gmail.com', '5879465897', 'bglore', 'bglore', 'Dehli', '562107', 'Japan', 'INR'),
(5, 'priya', 'amazon', 'priya@gmail.com', '9900965389', 'bglore', 'Chikkaballapur', 'karnataka', '562103', 'India', 'USD'),
(8, 'seetha', 'infotech', 'seetha@gmail.com', '676635478', 'manglore', 'manglore', 'karnataka', '562456', 'India', 'INR');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `email_method` varchar(50) NOT NULL,
  `system_email` varchar(50) NOT NULL,
  `smtp_host` varchar(50) NOT NULL,
  `smpt_user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `smtp_port` varchar(50) NOT NULL,
  `smtp_secure` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `email_method`, `system_email`, `smtp_host`, `smpt_user`, `password`, `smtp_port`, `smtp_secure`) VALUES
(2, 'smtp', 'projectyrpitsolution.com', '6788', 'geetha@gmail.com', '1234', '6678', 'tls'),
(3, 'smtp', 'seetha@gmail.com', '3543', 'ram', '6543', '1234', 'tls');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `gross` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `email`, `fname`, `lname`, `contact`, `gender`, `position`, `gross`) VALUES
(2, '345', 'ram', 'das', '9047658769', 'Male', 'HR', '10000'),
(4, '002', 'pavan', 'b', '9047658769', 'Male', 'Trainee', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `customer_id` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `quote_prefix` varchar(255) DEFAULT NULL,
  `gst_number` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `stage` varchar(255) DEFAULT NULL,
  `sales_tax_id` int(11) DEFAULT NULL,
  `ckeditor2` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `input1` varchar(255) DEFAULT NULL,
  `input2` int(11) DEFAULT NULL,
  `option` varchar(50) DEFAULT NULL,
  `totalamount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`id`, `subject`, `customer_id`, `address`, `quote_prefix`, `gst_number`, `date_created`, `expiry_date`, `stage`, `sales_tax_id`, `ckeditor2`, `message`, `input1`, `input2`, `option`, `totalamount`) VALUES
(278, 'website', 'Adrienne Zamora ', ' 21312', '1235', '46546579876549', '0000-00-00', '0000-00-00', 'Delivered', 9, '<p>acbd</p>', '00001', '1', 1200, 'NO', 1200),
(280, 'website', 'Conor Nolan', ' bangalore', '123', '12', '2023-03-07', '2023-04-07', 'Accepted', 18, '', '21312', '1', 120000, 'YES', 12500),
(281, 'RT24', 'John', ' chikkabalapura', '1235', '1241654651324', '2023-03-09', '2023-04-06', 'Accepted', 17, '<p>sadasdasd</p>', 'aaaaaaa', '2', 12222, 'YES', 125000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `cpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `type`, `password`, `cpassword`) VALUES
(17, 'ram@gmail.com', 'Ramdas', 'Full Administrator', 'ram', 'ram'),
(19, 'seetha', 'seetha@gmail.com', 'abc', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`username`, `password`) VALUES
('tharu@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=289;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
