-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2020 at 09:55 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `import export exel`
--

-- --------------------------------------------------------

--
-- Table structure for table `exel_data`
--

CREATE TABLE `exel_data` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exel_data`
--

INSERT INTO `exel_data` (`id`, `first_name`, `last_name`, `email`) VALUES
(93, 'ID', 'First name', 'Last name'),
(94, '81', 'Sneha', 'Gursale'),
(95, '82', 'Sohel', 'Inamdar'),
(96, '83', 'Snehal', 'Kulkarni'),
(97, '84', 'Pravin', 'Thite'),
(98, '85', 'Sneha', 'Gursale'),
(99, '86', 'Sohel', 'Inamdar'),
(100, '87', 'Snehal', 'Kulkarni'),
(101, '88', 'Pravin', 'Thite'),
(102, '89', 'Sneha', 'Gursale'),
(103, '90', 'Sohel', 'Inamdar'),
(104, '91', 'Snehal', 'Kulkarni'),
(105, '92', 'Pravin', 'Thite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exel_data`
--
ALTER TABLE `exel_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exel_data`
--
ALTER TABLE `exel_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
