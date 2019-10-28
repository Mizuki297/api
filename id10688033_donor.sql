-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2019 at 03:18 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.10

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
  `cat_name` text COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `data_cat` (`cat_id`, `cat_name`, `url_cat`, `user_id`, `blood_type`, `cat_type`, `cat_weight`, `cat_bd`, `health_check_date`, `latest_donation`, `status_cat`, `HPT_id`) VALUES
(1, 'การ์ตูน', 'https://ucarecdn.com/f0a00d19-014b-4857-8def-4d8c96694afd/1.jpg', 1, 'O', 'Unknown', 3, 1998, '2019-08-01', '2019-06-01', '1', 1),
(2, 'เจ้าแมว', 'https://ucarecdn.com/2f4afb64-9aff-40e9-b61a-83cc86d60240/Scottishfold.png', 1, 'A', 'thai', 4, 2005, '2019-08-01', '2019-05-01', '1', 1),
(3, 'The jamemy', 'https://ucarecdn.com/27304e02-5fe1-4130-afe3-86319e5931c2/ShoutsCatDissertation.jpg', 1, 'B', 'Persia', 3, 1998, '2019-09-07', '2019-06-01', '1', 1),
(4, 'Tiger', 'https://ucarecdn.com/80271261-ed07-4b25-b02d-52a3627da5ec/whatdoesitmeanwhencatwagstail.jpg', 1, 'A', 'thai', 5, 2012, '2019-09-07', '2019-06-01', '1', 1),
(6, 'Nuch', 'https://ucarecdn.com/b9214c5a-29f3-4220-9620-d6b09b0f7b4b/img_1317.jpg', 2, 'AB', '', 5, 1998, '2019-09-01', '2019-06-01', '0', 3),
(7, 'manee', 'https://ucarecdn.com/269289ce-3684-46af-a95f-d44156fab987/garlicthechineseclonecat.jpg', 2, 'A', 'thai', 5, 2006, '2019-07-25', '2019-03-10', '1', 1),
(9, 'nana', 'https://ucarecdn.com/cbe5fbae-5ca1-4b10-898b-c954633520d9/152964589welcomehomenewcat632x475.jpg', 2, 'A', 'thai', 4, 2003, '2019-07-21', '2019-04-12', '0', 1),
(12, 'yama', 'https://ucarecdn.com/de47af41-f915-48ae-9e97-70e9c6de5262/cat.jpg', 2, 'B', 'thai', 2, 2002, '2019-04-23', '2019-05-27', '1', 1),
(15, 'mew', 'https://ucarecdn.com/9c0ece30-0db0-4428-b392-624e69a3af1c/67586673.jpg', 2, 'AB', 'thai', 5, 2003, '2019-07-28', '2019-07-28', '0', 1),
(17, 'Dem', 'https://ucarecdn.com/c28ef7b9-3fb9-4cd5-8d03-4f2bbb4263ec/An_upclose_picture_of_a_curious_male_domestic_shorthair_tabby_cat.jpg', 2, 'B', 'Thai', 5, 2003, '2019-07-13', '2019-07-13', '0', 1);

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
(2, 'โรงพยาบาลสัตว์บ้านฟ้า', 'ปทุมธานี'),
(3, 'โรงพยาบาลสัตว์ทองหล่อ', 'ปทุมธานี');

-- --------------------------------------------------------

--
-- Table structure for table `login_histories`
--

CREATE TABLE `login_histories` (
  `his_id` int(11) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `token` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_histories`
--

INSERT INTO `login_histories` (`his_id`, `user_name`, `token`, `created_at`) VALUES
(1, 'admin', 'QWERT5db09c2cd3f132.77804611', '2019-10-23 18:30:04'),
(2, 'admin', 'QWERT5db09d3d563bd4.05331978', '2019-10-23 18:34:37'),
(3, 'admin', 'QWERT5db09dfca99912.01604594', '2019-10-23 18:37:48'),
(4, 'admin', 'QWERT5db09ed022b0d0.69089242', '2019-10-23 18:41:20'),
(5, 'admin', 'QWERT5db09f411e7c16.77465736', '2019-10-23 18:43:13'),
(6, 'admin', 'QWERT5db09fade7b015.50545093', '2019-10-23 18:45:01'),
(7, 'admin', 'QWERT5db0a04d9230c3.01480116', '2019-10-23 18:47:41'),
(8, 'admin', 'QWERT5db0a1f0382d49.02181985', '2019-10-23 18:54:40'),
(9, 'admin', 'QWERT5db0a28cbdbb83.63785361', '2019-10-23 18:57:16'),
(10, 'admin', 'QWERT5db0a2f625a733.56541226', '2019-10-23 18:59:02'),
(11, 'admin', 'QWERT5db0a3e534a1f3.38897902', '2019-10-23 19:03:01'),
(12, 'admin', 'QWERT5db0a7ee58cf57.13073085', '2019-10-23 19:20:14'),
(13, 'admin', 'QWERT5db0aac6813792.19320890', '2019-10-23 19:32:22'),
(14, 'admin', 'QWERT5db0ab247f0654.06978275', '2019-10-23 19:33:56'),
(15, 'admin', 'QWERT5db0ae95959646.45751523', '2019-10-23 19:48:37'),
(16, 'admin', 'QWERT5db0af310cbc12.23712289', '2019-10-23 19:51:13'),
(17, 'admin', 'QWERT5db0afac585eb6.00477446', '2019-10-23 19:53:16'),
(18, 'admin', 'QWERT5db17f2370eac5.29304717', '2019-10-24 10:38:27'),
(19, 'admin', 'QWERT5db1a80180ac96.27434240', '2019-10-24 13:32:49'),
(20, 'admin', 'QWERT5db1ad6e5192b4.84332848', '2019-10-24 13:55:58'),
(21, 'admin', 'QWERT5db1b7e7d10338.80053949', '2019-10-24 14:40:39'),
(22, 'admin', 'QWERT5db1b864a53915.45595833', '2019-10-24 14:42:44'),
(23, 'admin', 'QWERT5db2150709a030.50653376', '2019-10-24 21:17:59'),
(24, 'admin', 'QWERT5db2166be5e222.66762751', '2019-10-24 21:23:55'),
(25, 'admin', 'QWERT5db217a71ef759.06229287', '2019-10-24 21:29:11'),
(26, 'admin', 'QWERT5db218ddd77418.64014900', '2019-10-24 21:34:21'),
(27, 'admin', 'QWERT5db26fd57bea51.13180697', '2019-10-25 03:45:25'),
(28, 'admin', 'QWERT5db27039d6a796.46512614', '2019-10-25 03:47:05'),
(29, '', 'QWERT5db2761ee36a96.74824242', '2019-10-25 04:12:14'),
(30, 'admin', 'QWERT5db3168371b721.18534625', '2019-10-25 15:36:35'),
(31, 'admin', 'QWERT5db31687a6a1a9.04109478', '2019-10-25 15:36:39'),
(32, 'admin', 'QWERT5db318a2ba99f1.11852409', '2019-10-25 15:45:38'),
(33, 'admin', 'QWERT5db3e2f156eef1.53727771', '2019-10-26 06:08:49'),
(34, 'yamza', 'QWERT5db3ee6ddb5497.80627780', '2019-10-26 06:57:49'),
(35, 'admin', 'QWERT5db3ef8dc98ae2.25079483', '2019-10-26 07:02:37'),
(36, 'admin', 'QWERT5db3f0225f6f00.51143856', '2019-10-26 07:05:06'),
(37, 'admin', 'QWERT5db3f5b349a8f5.40010193', '2019-10-26 07:28:51'),
(38, 'admin', 'QWERT5db3f5f9d01129.93617102', '2019-10-26 07:30:01'),
(39, 'admin', 'QWERT5db3f65a07f219.95747632', '2019-10-26 07:31:38'),
(40, 'admin', 'QWERT5db3f700839d34.71039052', '2019-10-26 07:34:24'),
(41, 'admin', 'QWERT5db3f801486984.92229831', '2019-10-26 07:38:41'),
(42, 'admin', 'QWERT5db3fae26aa185.72447975', '2019-10-26 07:50:58'),
(43, 'admin', 'QWERT5db3fcb36278a4.82863686', '2019-10-26 07:58:43'),
(44, 'admin', 'QWERT5db3fdfe6636a8.92854034', '2019-10-26 08:04:14'),
(45, 'admin', 'QWERT5db4019148ecb4.85270359', '2019-10-26 08:19:29'),
(46, 'admin', 'QWERT5db402039e9208.60689578', '2019-10-26 08:21:23'),
(47, 'admin', 'QWERT5db4028ebc2103.71756331', '2019-10-26 08:23:42'),
(48, 'admin', 'QWERT5db402e1627e71.54700959', '2019-10-26 08:25:05'),
(49, 'admin', 'QWERT5db40424360073.31743465', '2019-10-26 08:30:28'),
(50, 'admin', 'QWERT5db40449a21e09.68562424', '2019-10-26 08:31:05'),
(51, 'yamza', 'QWERT5db404ec0d1d58.89380752', '2019-10-26 08:33:48'),
(52, 'admin', 'QWERT5db405806636f6.61845630', '2019-10-26 08:36:16'),
(53, 'admin', 'QWERT5db406f22b1955.95513351', '2019-10-26 08:42:26'),
(54, 'admin', 'QWERT5db40849e45c33.51078104', '2019-10-26 08:48:09'),
(55, 'admin', 'QWERT5db408dc3f0e48.38166321', '2019-10-26 08:50:36'),
(56, 'admin', 'QWERT5db4092fe5cce1.23232829', '2019-10-26 08:51:59'),
(57, 'admin', 'QWERT5db409449aefb2.60870429', '2019-10-26 08:52:20'),
(58, 'admin', 'QWERT5db40d10527da6.30079687', '2019-10-26 09:08:32'),
(59, 'admin', 'QWERT5db40d188c06c2.41058053', '2019-10-26 09:08:40'),
(60, 'admin', 'QWERT5db40d9a966cd6.65996966', '2019-10-26 09:10:50'),
(61, 'admin', 'QWERT5db40f02994b41.17848595', '2019-10-26 09:16:50'),
(62, 'admin', 'QWERT5db40f1b5a5488.74930478', '2019-10-26 09:17:15'),
(63, 'admin', 'QWERT5db40f653b2d21.36664526', '2019-10-26 09:18:29'),
(64, 'admin', 'QWERT5db40f6cf384c8.71780849', '2019-10-26 09:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(4) NOT NULL,
  `blood_type` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `date_request` date NOT NULL DEFAULT current_timestamp(),
  `HPT_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `blood_type`, `date_request`, `HPT_id`, `user_id`) VALUES
(1, 'O', '2019-08-31', 1, 1),
(28, 'B', '2019-09-05', 2, 1),
(29, 'AB', '2019-09-05', 3, 1),
(30, 'AB', '2019-09-05', 1, 1),
(31, 'A', '2019-09-06', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `user_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_s_name` text COLLATE utf8_unicode_ci NOT NULL,
  `user_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` text COLLATE utf8_unicode_ci NOT NULL,
  `user_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `salt` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `user_line_id` text COLLATE utf8_unicode_ci NOT NULL,
  `HPT_id` int(4) NOT NULL,
  `money_coin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_s_name`, `user_tel`, `user_email`, `user_username`, `user_password`, `salt`, `user_line_id`, `HPT_id`, `money_coin`) VALUES
(1, 'boy', 'kung', '0877460568', '', 'admin', '$2y$10$iCz0Osj9mV3szRD8KJAU6OmVfaKTSEjSMiXjWfUlux9LaLp78kIEi', 'febee396fe', 'boylnwza', 1, 9960),
(2, 'yam', 'deropa', '1234567890', 'yam@gmail.com', 'yamza', '$2y$10$QrVnzIujdhLfctkve4GuVOOdKmflYaHXlhd7AkK.e//8QEvoI68e.', 'bc1db874a1', '@yam', 1, 100),
(3, 'Nuch', 'lnwZa', '0987654321', 'Nuch@gmail.com', 'nuchlnwza', '$2y$10$016/WKIBY59YLZqBixHBROz0h4occBn/4vLgC89mhMfVisqISDvv6', '0f69376c19', 'Nuch', 1, 50);

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
-- Indexes for table `login_histories`
--
ALTER TABLE `login_histories`
  ADD PRIMARY KEY (`his_id`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_cat`
--
ALTER TABLE `data_cat`
  MODIFY `cat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hpt_pet`
--
ALTER TABLE `hpt_pet`
  MODIFY `HPT_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_histories`
--
ALTER TABLE `login_histories`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
