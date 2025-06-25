-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 12:39 PM
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
-- Database: `hotel_diablo`
--

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
(22, 'Single', 1, 100.00, 2, 200.00),
(23, 'Double', 2, 150.00, 2, 300.00),
(24, 'Single', 1, 100.00, 1, 100.00),
(25, 'Double', 2, 150.00, 1, 150.00),
(26, 'Single', 1, 100.00, 1, 100.00),
(27, 'Single', 1, 100.00, 1, 100.00),
(32, 'Single', 1, 100.00, 2, 200.00),
(39, 'Single', 1, 100.00, 3, 300.00),
(41, 'Single', 1, 100.00, 2, 200.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
