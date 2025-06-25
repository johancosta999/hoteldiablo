-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2024 at 06:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_diablo1`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `id` int(6) UNSIGNED NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `amount_due` decimal(10,2) NOT NULL,
  `due_date` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `description` text DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  `updated_date` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`id`, `customer_name`, `amount_due`, `due_date`, `status`, `description`, `created_date`, `updated_date`) VALUES
(3, 'nithu', 100000.00, '2024-10-06', 'unpaid', NULL, '2024-10-05 22:01:55', '2024-10-05 22:01:55'),
(5, 'shashi', 200.00, '2024-10-24', 'unpaid', NULL, '2024-10-05 22:10:49', '2024-10-05 22:10:49'),
(6, 'johan costa', 550.00, '2024-10-12', 'unpaid', NULL, '2024-10-05 23:37:20', '2024-10-05 23:37:20'),
(9, 'jonathan parker', 1000.00, '2024-10-20', 'Overdue', 'reminder', '2024-10-06 00:24:24', '2024-10-06 00:24:24'),
(10, 'jonathan parker', 1000.00, '2024-10-20', 'Overdue', 'reminder', '2024-10-06 00:31:11', '2024-10-06 00:31:11'),
(13, 'kaushini prabhasha', 200.00, '2024-10-08', 'Pending', '', '2024-10-07 10:37:40', '2024-10-07 10:37:40'),
(14, 'kaushii', 500.00, '2024-10-08', 'Paid', '', '2024-10-07 20:56:45', '2024-10-07 20:56:45');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `User_Id` int(10) NOT NULL,
  `Name` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Event_Type` varchar(100) NOT NULL,
  `Event_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`User_Id`, `Name`, `Email`, `Phone_Number`, `Event_Type`, `Event_Date`) VALUES
(1, 'Sewmini Shashikala', 'sewminishashikala781@gmail.com', '0714806554', 'wedding', '2024-11-15'),
(2, 'Shanali Isurika', 'shanali56@gmail.com', '0714806558', 'Birthday Party', '2024-10-15'),
(3, 'Kasun Indrajith', 'kasun@gmail.com', '0726864856', 'Birthday Party', '2024-10-25'),
(4, 'Dinuth Randiv', 'dinuthrandiv07@gmail.com', '0714806554', 'Birthday Party', '2024-10-20'),
(5, 'Yamina Kumari', 'yaminakumar@gmail.com', '0714806537', 'wedding', '2024-10-24'),
(6, 'Sewmini', 'sewminishashikala567@gmail.com', '0714806554', 'wedding', '2024-11-10'),
(7, 'Randika', 'randika@gmail.com', '0714804558', 'Wedding', '2024-10-20'),
(8, 'sewmini', 'shanali56@gmail.com', '0714804558', 'Wedding', '2024-11-05'),
(9, 'Madhawa', 'madhawa@gmail.com', '0714804599', 'Birthday Party', '2024-10-05'),
(10, 'shani', 'shani90@gmail.com', '0714804558', 'wedding', '2024-11-03'),
(12, 'Hemali', 'hemali@gmail.com', '0713405050', 'Anniversary party', '2024-12-12'),
(14, 'Minsitha', 'minsitha56@gmail.com', '0714804599', 'Birthday Party', '2024-10-20'),
(15, 'sewmini', 'sewmini@gmail.com', '0726864856', 'Wedding', '2025-01-04'),
(16, 'sewmini', 'sewmini@gmail.com', '0726864856', 'Wedding', '2025-01-04'),
(17, 'sewmini', 'sewmini@gmail.com', '0726864856', 'Wedding', '2025-01-04'),
(19, 'Johan Costa', 'johan124@gmail.com', '07567899000', 'Birthday Party', '2024-10-25'),
(21, 'indrajith', 'indrajith123@gmail.com', '0714806554', 'Wedding', '2024-10-27'),
(23, 'asha', 'asha34@gmail.com', '0714804558', 'Birthday Party', '2024-11-01'),
(25, 'jack', 'jack@gmail.com', '0777777778', 'wedding', '2024-10-08');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `max_head_count` int(11) NOT NULL,
  `unit_price` decimal(10,2) NOT NULL,
  `no_of_rooms` int(11) NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room_type`, `max_head_count`, `unit_price`, `no_of_rooms`, `total_price`) VALUES
(20, 'Single', 1, 100.00, 2, 200.00),
(21, 'Single', 1, 100.00, 2, 200.00),
(24, 'Single', 1, 100.00, 1, 100.00),
(25, 'Double', 2, 150.00, 1, 150.00),
(26, 'Single', 1, 100.00, 1, 100.00),
(27, 'Single', 1, 100.00, 1, 100.00),
(28, 'Double', 2, 150.00, 1, 150.00),
(29, 'Double', 2, 150.00, 3, 450.00),
(31, 'Superior', 4, 200.00, 500, 100000.00);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `comments` text NOT NULL,
  `rate` int(11) DEFAULT NULL CHECK (`rate` between 1 and 5)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback_date`, `comments`, `rate`) VALUES
(4, '2024-10-12', 'very good your service', 4),
(6, '2024-10-21', 'well done', 4),
(8, '2024-10-08', 'hi johan i love u', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$GARxCXd0aAMWXyvToLhdDOIpK305vuN333KGEcwAZqY9sAQzHpZcW', 'admin', '2024-10-03 18:14:39'),
(4, 'gayantha', 'praveen@gmail.com', '$2y$10$vqSOSLBADFcfzYScpbdc8.fmPo1Vp8pcPDd9OfUiMAEUftVyE.H8K', 'user', '2024-10-04 03:50:21'),
(5, 'johan1', 'johan@gmail.com', '$2y$10$zMv3PsZmcuKJK9nrJfrW.u79SKl/gPeAXdOTM0VSWj3ZpmNwgNE8W', 'user', '2024-10-07 13:44:51'),
(6, 'kaushi', 'kaushi@gmail.com', '$2y$10$jdazJesXAly1theUbbaQCeh7L/VN9BNNThNHQ0YDB.l15bG516VHq', 'user', '2024-10-07 13:45:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `User_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
