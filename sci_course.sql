-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 06:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sci_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `sci_register`
--

CREATE TABLE `sci_register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `IDnumber` char(13) DEFAULT NULL,
  `Phonenumber` char(10) DEFAULT NULL,
  `educational` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `RegisCID` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sci_register`
--

INSERT INTO `sci_register` (`id`, `name`, `IDnumber`, `Phonenumber`, `educational`, `Email`, `RegisCID`) VALUES
(10, 'Minzu', '1742342457890', '0623434521', 'ปริญญาตรี', 'Minzu.minmin@gmail.com', '3'),
(11, 'QQ', '1742562458972', '0871453163', 'ปริญญาตรี', 'Q4.php555@gmail.com', '5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sci_register`
--
ALTER TABLE `sci_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sci_register`
--
ALTER TABLE `sci_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
