-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2018 at 09:55 AM
-- Server version: 10.0.34-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 5.6.34-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `odos`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_native`
--

CREATE TABLE `crud_native` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `uname` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crud_native`
--

INSERT INTO `crud_native` (`id`, `nama`, `uname`, `password`) VALUES
(1, 'sodaqohsc lagi', 'sodaqohsc_lagi', 'd09532b9be7398b2a571252fe3f6f536'),
(2, 'sodaqohsc', 'sodaqohsc', 'd09532b9be7398b2a571252fe3f6f536');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud_native`
--
ALTER TABLE `crud_native`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud_native`
--
ALTER TABLE `crud_native`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
