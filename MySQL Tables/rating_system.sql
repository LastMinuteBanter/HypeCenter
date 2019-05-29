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
-- Database: `rating_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_ratings`
--

CREATE TABLE `user_ratings` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Comment` varchar(100) NOT NULL,
  `shoe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_ratings`
--

INSERT INTO `user_ratings` (`id`, `rating`, `username`, `Comment`, `shoe`) VALUES
(17, 2, 'james milner', 'get dem shoes', 'Levi AJ 4'),
(24, 4, 'tony fernandes', 'i like this shoe', 'vans cut and paste'),
(26, 5, 'Sadio Mane', 'Really comfortable!', 'AJ1 Off White Chicago'),
(27, 4, 'john smith', 'Very comfortable shoe', 'NMD CNY GOLD'),
(28, 3, 'Jack Dorsey', 'Really stylish ', 'NMD CNY GOLD'),
(29, 2, 'Mary', 'Too flashy for me', 'AJ1 Off White Chicago'),
(30, 3, 'joey tan', 'nice shoe', 'Yeezy Wave Runner'),
(31, 5, 'James Milner', 'Very Stylish!', 'Bape Ultraboost');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_ratings`
--
ALTER TABLE `user_ratings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_ratings`
--
ALTER TABLE `user_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
