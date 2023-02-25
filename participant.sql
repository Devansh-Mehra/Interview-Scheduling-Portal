-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2023 at 06:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interview`
--

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `participants` text NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`participants`, `start_time`, `end_time`, `id`) VALUES
('Preetraj', '2023-02-23 22:35:00', '2023-02-23 23:35:00', 1),
('Devansh', '2023-02-23 22:35:00', '2023-02-23 23:35:00', 2),
('Preetraj', '2023-03-05 10:40:00', '2023-03-05 11:40:00', 3),
('Amar', '2023-03-05 10:40:00', '2023-03-05 11:40:00', 4),
('Yash', '2023-03-01 00:00:00', '2023-03-01 01:00:00', 5),
('Adarsh', '2023-03-12 01:35:00', '2023-03-12 02:35:00', 12),
('Saketh', '2023-02-28 00:00:00', '2023-02-28 05:00:00', 20),
('Shantanu', '2023-03-12 01:35:00', '2023-03-12 02:35:00', 98),
('Monsij', '2023-02-24 02:10:00', '2023-02-24 05:10:00', 123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
