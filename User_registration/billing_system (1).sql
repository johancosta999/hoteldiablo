-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 12:40 PM
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
-- Database: `billing_system`
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
(11, 'shehani', 200.00, '2024-10-13', 'Pending', '', '2024-10-06 01:29:03', '2024-10-06 01:29:03'),
(13, 'kaushini prabhasha', 200.00, '2024-10-08', 'Pending', '', '2024-10-07 10:37:40', '2024-10-07 10:37:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
