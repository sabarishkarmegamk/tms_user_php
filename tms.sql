-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 05:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `id` int(23) NOT NULL,
  `cost` varchar(23) NOT NULL,
  `advance` varchar(23) NOT NULL,
  `pending` varchar(20) NOT NULL,
  `notify` varchar(20) NOT NULL,
  `description` varchar(10) NOT NULL,
  `uid` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `amount`
--

INSERT INTO `amount` (`id`, `cost`, `advance`, `pending`, `notify`, `description`, `uid`) VALUES
(6, '334', '9', '1', 'fdfddf', 'test', 'sabari'),
(7, '77', '9', '1', 'b', 'j', 'userss'),
(8, '9090', '900', '8010', 'sure', 'yes', 'AAAAAAAAAA');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(3, 'Books', 'Tes', '2017-01-24 19:17:37', '14-04-2023 01:29:14 PM'),
(4, 'Electronicss', 'Electronic Productss', '2017-01-24 19:19:32', '14-04-2023 01:28:21 PM'),
(5, 'Furniture', 'test', '2017-01-24 19:19:54', '14-04-2023 01:29:56 PM'),
(6, 'Fashion', 'Fashion', '2017-02-20 19:18:52', '14-04-2023 01:05:21 PM');

-- --------------------------------------------------------

--
-- Table structure for table `reason`
--

CREATE TABLE `reason` (
  `id` int(23) NOT NULL,
  `reasonType` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reason`
--

INSERT INTO `reason` (`id`, `reasonType`) VALUES
(1, 'Appointment'),
(2, 'Follow Up'),
(3, 'Call Backs'),
(4, 'Not Picked'),
(5, 'Not Interest'),
(6, 'Blocked');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(2, 4, 'Led Television', '2017-01-26 16:24:52', '26-01-2017 11:03:40 PM'),
(3, 4, 'Television', '2017-01-26 16:29:09', '14-04-2023 01:44:09 PM'),
(4, 4, 'Mobilesd', '2017-01-30 16:55:48', '14-04-2023 01:42:42 PM'),
(5, 4, 'Mobile Accessories', '2017-02-04 04:12:40', ''),
(6, 4, 'Laptops', '2017-02-04 04:13:00', ''),
(7, 4, 'Computers', '2017-02-04 04:13:27', ''),
(8, 3, 'Comics', '2017-02-04 04:13:54', '14-04-2023 01:43:36 PM'),
(9, 5, 'Beds', '2017-02-04 04:36:45', ''),
(10, 5, 'Sofas', '2017-02-04 04:37:02', ''),
(11, 5, 'Dining Tabless', '2017-02-04 04:37:51', '14-04-2023 06:05:07 PM'),
(12, 6, 'Men Footwears', '2017-03-10 20:12:59', ''),
(13, 3, 'user', '2023-04-14 07:18:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subreason`
--

CREATE TABLE `subreason` (
  `id` int(23) NOT NULL,
  `reasonid` int(23) NOT NULL,
  `subreason` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subreason`
--

INSERT INTO `subreason` (`id`, `reasonid`, `subreason`) VALUES
(1, 1, 'Appoinment Today'),
(2, 1, 'others'),
(3, 2, 'Follow Up'),
(4, 2, 'others'),
(5, 3, 'Customer Will Later'),
(6, 3, 'Call Back'),
(7, 3, 'Tommorow Call Back'),
(8, 3, 'others'),
(9, 4, 'others'),
(10, 4, 'Not Picked'),
(11, 5, 'Not Interest'),
(12, 5, 'others'),
(13, 6, 'Blocked'),
(14, 6, 'others');

-- --------------------------------------------------------

--
-- Table structure for table `useradd`
--

CREATE TABLE `useradd` (
  `id` int(10) NOT NULL,
  `category` varchar(23) NOT NULL,
  `subcategory` varchar(23) NOT NULL,
  `mobileno` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `alterno` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `reason` varchar(20) NOT NULL,
  `subreason` int(23) NOT NULL,
  `description` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useradd`
--

INSERT INTO `useradd` (`id`, `category`, `subcategory`, `mobileno`, `name`, `alterno`, `email`, `reason`, `subreason`, `description`) VALUES
(15, 'Books', '3', 1234567890, 'users enable', '0987654321', 'employee@example.com', 'Appointment', 1, 'ddata'),
(16, 'Electronicss', '3', 1234567890, 'sabarish', '0987654321', 'admin@example.com', 'Appointment', 2, 'tamil c'),
(17, 'Books', '4', 1234567890, 'Louis C. Charmi', '0987654320', 'akash@gmail.com', 'Blocked', 3, 'tal code'),
(18, 'Fashion', '3', 1234567890, 'amer', '0987654321', 'admin@example.com', 'Not Interest', 4, ' code');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `contactno` varchar(11) DEFAULT NULL,
  `posting_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(1, 'sabari', 'ks', 'sa@gmail.com', '123', '1234567890', '2023-03-22 13:13:48'),
(2, 'aegan', 'user', 'ae@gmail.com', '123', '1234567890', '2023-03-23 13:26:21'),
(3, 'samy', 'nathan', 'samy@gmail.com', '123', '1234567890', '2023-03-23 16:32:17'),
(4, 'yogi', 'usr', 'yogi@gmail.com', 'Sa123@', '1234567890', '2023-04-17 05:59:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reason`
--
ALTER TABLE `reason`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subreason`
--
ALTER TABLE `subreason`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useradd`
--
ALTER TABLE `useradd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amount`
--
ALTER TABLE `amount`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reason`
--
ALTER TABLE `reason`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `subreason`
--
ALTER TABLE `subreason`
  MODIFY `id` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `useradd`
--
ALTER TABLE `useradd`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
