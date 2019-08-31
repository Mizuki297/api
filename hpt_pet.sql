-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2019 at 12:46 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donor_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `hpt_pet`
--

CREATE TABLE `hpt_pet` (
  `HPT_id` int(4) NOT NULL,
  `HPT_name` text COLLATE utf8_unicode_ci NOT NULL,
  `HPT_location` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'จังหวัด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hpt_pet`
--

INSERT INTO `hpt_pet` (`HPT_id`, `HPT_name`, `HPT_location`) VALUES
(1, 'โรงพยาบาลสัตว์ธัญญมิตร', 'ปทุมธานี'),
(2, 'โรงพยาบาลสัตว์บ้านฟ้า', 'ปทุมธานี');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hpt_pet`
--
ALTER TABLE `hpt_pet`
  ADD PRIMARY KEY (`HPT_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
