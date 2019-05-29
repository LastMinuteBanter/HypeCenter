-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2019 at 07:56 AM
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
-- Database: `search_field`
--

-- --------------------------------------------------------

--
-- Table structure for table `search_engine`
--

CREATE TABLE `search_engine` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `url` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `keywords` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_engine`
--

INSERT INTO `search_engine` (`id`, `title`, `url`, `description`, `keywords`) VALUES
(3, 'Enquiry', 'enquiry.php', 'enquiry page', 'enquiry Hypecenter hypecenter hypecentre Hypecentre'),
(4, 'about alvin', 'aboutalvin.php', 'Alvin\'s profile', 'alvin about hypecenter Hypecentre hypcentre'),
(5, 'About Desmond', 'aboutdesmond.php', 'Desmond\'s profile page', 'Desmond about profile hypecentre Hypecentre'),
(6, 'About Hans', 'abouthans.php', 'Hans\' Profile Page', 'Hans about profile Hypecentre hypecentre'),
(7, 'About Hypecentre', 'abouthypecenter.php', 'About Hypecenter Page', ' about profile Hypecentre hypecentre'),
(8, 'About Joey', 'aboutjoey.php', 'Joey\'s profile page', 'Joey about profile Hypecentre hypecentre'),
(9, 'Adidas Page', 'adidas.php', 'Adidas Brand Page', 'adidas brand hypecentre Hypecentre'),
(10, 'Nike Airmax', 'airmax.php', 'Nike Air Max product page', 'nike airmax air max product hypecentre'),
(11, 'Nike Air Yeezy 2', 'airyeezy2.php', 'Nike Air Yeezy 2 Product Page', 'nike air yeezy 2 product page hypecentre'),
(12, 'Nike Air Jordan 1 Off White Chicago', 'aj1offchicago.php', 'Nike Air Jordan 1 Off White Chicago Product Page', 'nike air jordan 1 off white chicago hypecentre product page hypecentre'),
(13, 'Nike AJ4 Travis Scott', 'aj4travis.php', 'Nike AJ4 Travis Scott product page', 'nike aj4 travis product page hypecentre '),
(14, 'Nike AJ13', 'aj13.php', 'Nike AJ13 Terracotta Warrior', 'nike AJ14 product page Air jordan hypecentre'),
(15, 'Adidas Bape Ultraboost', 'bapeultraboost.php', 'Adidas Bape Ultraboost product page', 'adidas bape ultraboost product page hypecentre'),
(16, 'Converse Brand Page', 'converse.php', 'Converse Brand Page', 'converse brand page hypecentre '),
(17, 'Converse Chuck All Star', 'converseallstart.php', 'Converse Chuck All Star Product page', 'converse chuck all star hypecentre product page'),
(18, 'CDG x Chuck Taylor 1970 Low \'play\'', 'conversecdg.php', 'CDG x Chuck Taylor 1970 Low \'play\' product page', 'CDG x Chuck Taylor 1970 Low \'play\' product page hypecentre converse'),
(19, 'Converse CDG x Chuck Taylor HI', 'converseCDGHigh.php', 'Converse CDG x Chuck Taylor HI product page', 'Converse CDG x Chuck Taylor HI product page hypecentre'),
(20, 'Dr Woo x Chuck Taylor Converse “White”', 'conversedrwoo.php', 'Dr Woo x Chuck Taylor Converse “White” product page', 'Dr Woo x Chuck Taylor Converse “White” product page hypecentre'),
(21, 'Converse Star Player Low “Intangibles”', 'converseintangible.php', 'Converse Star Player Low “Intangibles” product page', 'Converse Star Player Low “Intangibles” product page hypecentre'),
(22, 'OffWhite x Chuck Taylor', 'converseoffwhite.php', 'OffWhite x Chuck Taylor product page', 'OffWhite x Chuck Taylor product page hypecentre converse'),
(23, 'Disclaimer', 'disclaimer.php', 'Disclaimer Page', 'disclaimer page hypecentre'),
(24, 'Adidas Futurecraft', 'futurecraft.php', 'Adidas Futurecraft product page', 'adidas futurecraft hypecentre product page'),
(25, 'Homepage', 'index.php', 'Hypecentre Homepage', 'hypecentre home page'),
(26, 'Levi\'s Air Jordan 4', 'leviaj4.php', 'Levi\'s Air Jordan 4 product page', 'Levi\'s Air Jordan 4 product page hypecentre nike'),
(27, 'Nike ', 'nike.php', 'Nike Brand Page', 'Nike Brand Page hypecentre'),
(28, 'Adidas Pharell NMD CNY GOLD', 'nmdcnygold.php', 'Adidas Pharell NMD CNY GOLD product page', 'Adidas Pharell NMD CNY GOLD product page hypecentre'),
(29, 'Adidas NMD Solar HU', 'nmdsolarhu.php', 'Adidas NMD Solar HU product page', 'Adidas NMD Solar HU product page hypecentre'),
(30, 'Vans ', 'vans.php', 'Vans Brand Page', 'Vans Brand Page hypecentre'),
(31, 'Vans Sk8 Hi Pro Supreme Checkboard', 'vanscheckboard.php', 'Vans Sk8 Hi Pro Supreme Checkboard product page', 'Vans Sk8 Hi Pro Supreme Checkboard product page hypecentre'),
(32, 'Vans Sk8 Hi \"Cut and Paste\"', 'vanscutandpaste.php', 'Vans Sk8 Hi \"Cut and Paste\" product page', 'Vans Sk8 Hi \"Cut and Paste\" product page hypecentre'),
(33, 'Vans Sk8 Hi Pro Supreme Green Skull Pile', 'vansgreen.php', 'Vans Sk8 Hi Pro Supreme Green Skull Pile product page', 'Vans Sk8 Hi Pro Supreme Green Skull Pile product page hypecentre'),
(34, 'Vans x Mastermind x KITH', 'vansmastermind.php', 'Vans x Mastermind x KITH product page', 'Vans x Mastermind x KITH product page hypecentre'),
(35, 'Fear of God Vans Mountain Edition 35 DX', 'vansmountain.php', 'Fear of God Vans Mountain Edition 35 DX product page', 'Fear of God Vans Mountain Edition 35 DX product page hypecentre '),
(36, 'Vans Sk8 Hi 46 MTE DX Nasa Space Voyager', 'vansnasa.php', 'Vans Sk8 Hi 46 MTE DX Nasa Space Voyager product page', 'Vans Sk8 Hi 46 MTE DX Nasa Space Voyager product page hypecentre'),
(37, 'Adidas Yeezy Wave Runner', 'yeezywaverunner.php', 'Adidas Yeezy Wave Runner product page', 'Adidas Yeezy Wave Runner product page hypecentre'),
(38, 'Adidas Yeezy True Form', 'yeezytrueform.php', 'Adidas Yeezy True Form product page', 'Adidas Yeezy True Form product page hypecentre');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `search_engine`
--
ALTER TABLE `search_engine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `search_engine`
--
ALTER TABLE `search_engine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
