-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: May 02, 2023 at 03:30 AM
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
-- Database: `subscribe`
--

-- --------------------------------------------------------

--
-- Table structure for table `carddetails`
--

CREATE TABLE `carddetails` (
  `cardnumber_id` int(11) NOT NULL,
  `cardnumber` varchar(35) NOT NULL,
  `cardtype` varchar(30) NOT NULL,
  `accounttype` varchar(20) NOT NULL,
  `expiry` varchar(10) NOT NULL,
  `cvv` varchar(10) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `timecreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carddetails`
--

INSERT INTO `carddetails` (`cardnumber_id`, `cardnumber`, `cardtype`, `accounttype`, `expiry`, `cvv`, `pin`, `timecreated`) VALUES
(26, '1111-1111-1111-1111', 'Visa Card', 'Current', '11/11', '111', '1111', '2023-05-02 01:27:28'),
(27, '1111-2222-1111-1111', 'Mastercard', 'Current', '11/11', '121', '22321', '2023-05-02 01:28:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carddetails`
--
ALTER TABLE `carddetails`
  ADD PRIMARY KEY (`cardnumber_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carddetails`
--
ALTER TABLE `carddetails`
  MODIFY `cardnumber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
