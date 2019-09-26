-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 31, 2019 at 08:04 AM
-- Server version: 10.3.16-MariaDB
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
-- Database: `id10688033_donor`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_cat`
--

CREATE TABLE `data_cat` (
  `cat_id` int(4) NOT NULL,
  `url_cat` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(4) NOT NULL,
  `blood_type` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cat_type` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_weight` int(2) NOT NULL,
  `cat_bd` year(4) NOT NULL,
  `health_check_date` date NOT NULL,
  `latest_donation` date NOT NULL,
  `status_cat` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `HPT_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_cat`
--

INSERT INTO `data_cat` (`cat_id`, `url_cat`, `user_id`, `blood_type`, `cat_type`, `cat_weight`, `cat_bd`, `health_check_date`, `latest_donation`, `status_cat`, `HPT_id`) VALUES
(1, '', 1, 'O', 'thai', 3, 1998, '2019-08-01', '2019-06-01', '0', 1),
(2, 'www.cat.com', 1, 'A', 'thai', 4, 2005, '2019-08-01', '2019-05-01', '0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_cat`
--
ALTER TABLE `data_cat`
  ADD PRIMARY KEY (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
