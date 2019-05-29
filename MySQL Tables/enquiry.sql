-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 08:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enquiry`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `userID` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenumber` varchar(11) NOT NULL,
  `stradd` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `post` int(5) NOT NULL,
  `shoemodel` varchar(50) NOT NULL,
  `shoecolour` varchar(10) NOT NULL,
  `size` int(1) NOT NULL,
  `duration` int(1) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `comment` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`userID`, `firstname`, `lastname`, `email`, `phonenumber`, `stradd`, `city`, `state`, `post`, `shoemodel`, `shoecolour`, `size`, `duration`, `subject`, `comment`) VALUES
(16, 'Alvin', 'Sim', 'alvinsim74@gmail.com', '0109606565', 'No.66 Taman Kuching, Jalan Foochow No.1', 'Kuching', 'Johor', 93300, 'Yeezy Wave Runner', 'beluga 2.0', 9, 3, 'RE:Enquiry on Yeezy Wave Runner', 'asldknaskdnsad'),
(18, 'Alvin', 'Sim', 'alvinsim74@gmail.com', '0109606565', 'No.66 Taman Kuching, Jalan Foochow No.1', 'Kuching', 'Sabah', 93300, 'Yeezy True Form', 'beluga 2.0', 9, 3, 'RE:Enquiry on Yeezy True Form', 'sadasld'),
(20, 'hans', 'louis', 'hanslouisj777@gmail.com', '0134458897', 'No.66 Taman Api, Jalan Foochow No.1', 'kuching', 'Sarawak', 93300, 'Levi\'s Air Jordan 4', 'beluga 2.0', 9, 3, 'RE:Enquiry on Levi\'s Air Jordan 4', 'akjsdksajd'),
(21, 'joey', 'tan', 'joeytan@gmail.com', '0124567892', 'No.66 Taman Kuching, Jalan Foochow No.1', 'Kuching', 'Sabah', 93300, 'CDG X Chuck Taylor 1970 Low \'play\'', 'beluga 2.0', 9, 3, 'RE:Enquiry on CDG X Chuck Taylor 1970 Low \'play\'', 'adasdasdasdasczxczxc'),
(22, 'Alvin', 'Sim', 'alvinsim74@gmail.com', '0109606565', 'No.66 Taman Kuching, Jalan Foochow No.1', 'Kuching', 'Sabah', 93300, 'Levi\'s Air Jordan 4', 'beluga 2.0', 9, 3, 'RE:Enquiry on Levi\'s Air Jordan 4', 'dasdasda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
