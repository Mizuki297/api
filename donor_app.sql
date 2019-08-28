-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2019 at 06:31 AM
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
-- Table structure for table `data_cat`
--

CREATE TABLE `data_cat` (
  `cat_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `url_cat` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `blood_type` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `cat_type` text COLLATE utf8_unicode_ci NOT NULL,
  `cat_weight` int(2) NOT NULL,
  `cat_bd` year(4) NOT NULL,
  `health_check_date` date NOT NULL,
  `latest_donation` date NOT NULL,
  `status_cat` varchar(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_cat`
--

INSERT INTO `data_cat` (`cat_id`, `url_cat`, `user_id`, `blood_type`, `cat_type`, `cat_weight`, `cat_bd`, `health_check_date`, `latest_donation`, `status_cat`) VALUES
('0001', '', '0001', 'O', 'thai', 3, 1998, '2019-08-01', '2019-06-01', '0');

-- --------------------------------------------------------

--
-- Table structure for table `hpt_pet`
--

CREATE TABLE `hpt_pet` (
  `HPT_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `HPT_name` text COLLATE utf8_unicode_ci NOT NULL,
  `HPT_location` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'จังหวัด'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hpt_pet`
--

INSERT INTO `hpt_pet` (`HPT_id`, `HPT_name`, `HPT_location`) VALUES
('0001', 'โรงพยาบาลสัตว์ธัญญมิตร', 'ปทุมธานี'),
('0002', 'โรงพยาบาลสัตว์บ้านฟ้า', 'ปทุมธานี');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `blood_type` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `date_request` date NOT NULL,
  `HPT_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_s_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` int(10) NOT NULL,
  `user_line_id` text COLLATE utf8_unicode_ci NOT NULL,
  `HPT_id` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `money_coin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_s_name`, `user_tel`, `user_username`, `user_password`, `user_line_id`, `HPT_id`, `money_coin`) VALUES
('0001', 'boy', 'za', '1234567890', 'admin', 1234567890, 'boyza', '0001', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_cat`
--
ALTER TABLE `data_cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `hpt_pet`
--
ALTER TABLE `hpt_pet`
  ADD PRIMARY KEY (`HPT_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
