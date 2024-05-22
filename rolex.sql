-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 08:26 AM
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
-- Database: `rolex-watches`
--

-- --------------------------------------------------------

--
-- Table structure for table `rolex`
--

CREATE TABLE `rolex` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rolex`
--

INSERT INTO `rolex` (`id`, `name`, `phone`, `email`, `message`) VALUES
(142, 'vishnu', '446464654654', 'bhgyvuyfgv@gmail.com', 'i want to know about the submarine watches devilervy taking time and also iwant to request for a discount'),
(143, 'babu', '496464646', 'babu@gmail.com', 'i want to know about more old rolex watches'),
(144, 'sreehari', '6545654654365', 'sreehari@gmail.com', 'i want to change strap of the watch');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rolex`
--
ALTER TABLE `rolex`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rolex`
--
ALTER TABLE `rolex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
