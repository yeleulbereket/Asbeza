-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2020 at 08:58 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `default_food`
--

CREATE TABLE `default_food` (
  `default_food_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `default_food`
--

INSERT INTO `default_food` (`default_food_name`) VALUES
('ምንቸት'),
('እንቁላል በስጋ'),
('ዳቦ ፍርፍር'),
('ተጋቢኖ'),
('በየአይነት'),
('ፍርፍር'),
('ሽሮ ፈሰስ'),
('ጎመን ጥብስ'),
('አልጫ ፍርፍር'),
('ነጭ ፍርፍር'),
('እንቁላል ስልስ'),
('ሲንግል ሳንዱዊች'),
('ደብል ሳንዱዊች'),
('ምስር'),
('ጎረድ ጎረድ'),
('ቲማቲም በስልስ'),
('ፉል'),
('ፉል ሃጃ'),
('ስፔሻል ፉል'),
('ፈታ'),
('ፓስታ በስልስ'),
('ፓስታ በአትክልት'),
('ፓስታ በስጋ'),
('ሞኮሮኒ በስልስ'),
('ሞኮሮኒ  በአትክልት'),
('ሞኮሮኒ  በስጋ'),
('ሩዝ በስልስ'),
('ሩዝ በአትክልት'),
('ሩዝ በስጋ'),
('ደቆቆ'),
('ድንች በስጋ'),
('ድንች ወጥ'),
('አልጫ ድንች ወጥ');

-- --------------------------------------------------------

--
-- Table structure for table `error_report`
--

CREATE TABLE `error_report` (
  `report_id` int(11) NOT NULL,
  `report_mesage` text NOT NULL,
  `send_by` varchar(3) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `restaurant_id` int(11) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `report_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `error_report`
--

INSERT INTO `error_report` (`report_id`, `report_mesage`, `send_by`, `student_id`, `restaurant_id`, `status`, `report_time`) VALUES
(1, 'isas  hsdbfouasdj  hs dfhuajskd fuas  us dfuasd fu  us dfuasd fiuas  sd foiuosbd fois s adf asdf  osdf oisadfoi ios daofbasd isdo fiasdbno ioasdfnoiasbdfn osdibfisadbf basd fbadsoifu iobsdnfoiabsdfo osdbfoiusdbfoas osidbufoiasdfnaios noasidnfoaisdfn iosdbnfoiashdfoias oasidfnoasidfn iosdfniausodhfnais iuasdhfoiasdhfn sdifhasiodfhaposi oasidfnasidofl', 'STD', 1, NULL, 'notseen', '2020-01-15 23:05:51'),
(2, 'TEST NUMBER 1', 'STD', 1, NULL, 'notseen', '2020-01-15 23:05:51'),
(3, 'tttggchdv', 'STD', 1, NULL, 'notseen', '2020-01-15 23:05:51'),
(4, 'sfsdfsdfsdfasdf', 'STD', 1, NULL, '', '2020-01-15 23:06:48'),
(5, 'dfgyhujikrtyu tuyujktryuhj tryghujkl', 'STD', NULL, NULL, 'notseen', '2020-01-20 15:18:22'),
(6, 'dfgyhujikrtyu tuyujktryuhj tryghujkl', 'STD', 1, NULL, 'notseen', '2020-01-20 15:18:35'),
(7, 'gdhdhdjdj dudhdjdu djdhdhd', 'STD', 1, NULL, 'notseen', '2020-01-20 15:20:08'),
(8, 'log out error ', 'STD', 1, NULL, 'notseen', '2020-01-20 19:21:27'),
(9, 'today\'s food was contaminsted', 'STD', -1, NULL, 'notseen', '2020-01-24 06:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `sid`, `fid`, `state`) VALUES
(1, 1, 2, 1),
(2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `food_menu_table`
--

CREATE TABLE `food_menu_table` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(25) NOT NULL,
  `food_price` double NOT NULL,
  `food_type` varchar(10) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `food_state` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_menu_table`
--

INSERT INTO `food_menu_table` (`food_id`, `food_name`, `food_price`, `food_type`, `restaurant_id`, `food_state`) VALUES
(1, 'Tegabino', 25, 'Fasting', 1, 1),
(2, 'Gored Gored', 20, 'Fasting', 1, 1),
(3, 'Ferfer', 22, 'Non-Fastin', 1, 1),
(4, 'Dabo Firfer', 20, '', 1, 1),
(5, 'Alecha Firfer', 22, '', 1, 1),
(6, 'Denech Besega', 35, '', 1, 1),
(7, 'ጥብስ', 40, '', 1, 1),
(37, 'ምንቸት', 30, '', 5, 1),
(38, 'እንቁላል በስጋ', 30, '', 5, 1),
(39, 'ዳቦ ፍርፍር', 60, '', 5, 1),
(40, 'ተጋቢኖ', 60, '', 5, 1),
(41, 'በየአይነት', 50, '', 5, 1),
(42, 'ፍርፍር', 60, '', 5, 1),
(43, 'ሽሮ ፈሰስ', 80, '', 5, 1),
(44, 'ጎመን ጥብስ', 50, '', 5, 1),
(45, 'አልጫ ፍርፍር', 50, '', 5, 1),
(46, 'እንቁላል ስልስ', 59, '', 5, 1),
(47, 'ሲንግል ሳንዱዊች', 58, '', 5, 1),
(48, 'ደብል ሳንዱዊች', 58, '', 5, 1),
(49, 'ምስር', 58, '', 5, 1),
(50, 'ጎረድ ጎረድ', 59, '', 5, 1),
(51, 'ፉል', 59, '', 5, 1),
(52, 'ቲማቲም በስልስ', 69, '', 5, 1),
(53, 'ፉል ሃጃ', 59, '', 5, 1),
(54, 'ስፔሻል ፉል', 59, '', 5, 1),
(55, 'ፈታ', 589, '', 5, 1),
(56, 'ፓስታ በስልስ', 58, '', 5, 1),
(57, 'ፓስታ በአትክልት', 25, '', 5, 1),
(58, 'ፓስታ በስጋ', 55, '', 5, 1),
(59, 'ሞኮሮኒ በስልስ', 55, '', 5, 1),
(60, 'ሞኮሮኒ  በአትክልት', 89, '', 5, 1),
(61, 'ሞኮሮኒ  በስጋ', 555, '', 5, 1),
(62, 'ሩዝ በስልስ', 58, '', 5, 1),
(63, 'ሩዝ በአትክልት', 58, '', 5, 1),
(64, 'ሩዝ በስጋ', 58, '', 5, 1),
(65, 'ደቆቆ', 55, '', 5, 1),
(66, 'ድንች በስጋ', 58, '', 5, 1),
(67, 'ድንች ወጥ', 58, '', 5, 1),
(68, 'አልጫ ድንች ወጥ', 25, '', 10, 1),
(69, 'ድንች ወጥ', 25, '', 10, 1),
(70, 'ድንች በስጋ', 30, '', 10, 1),
(71, 'ደቆቆ', 25, '', 10, 1),
(72, 'ሞኮሮኒ  በስጋ', 28, '', 10, 1),
(73, 'ሞኮሮኒ  በአትክልት', 25, '', 10, 1),
(74, 'ሞኮሮኒ በስልስ', 25, '', 10, 1),
(75, 'ፓስታ በስጋ', 28, '', 10, 1),
(76, 'ፓስታ በአትክልት', 25, '', 10, 1),
(77, 'ፓስታ በስልስ', 23, '', 10, 1),
(78, 'ፈታ', 25, '', 10, 1),
(79, 'ስፔሻል ፉል', 30, '', 10, 1),
(80, 'ፉል ሃጃ', 25, '', 10, 1),
(81, 'ፉል', 25, '', 10, 1),
(82, 'ቲማቲም በስልስ', 23, '', 10, 1),
(83, 'ጎረድ ጎረድ', 23, '', 10, 1),
(84, 'ምስር', 25, '', 10, 1),
(85, 'ደብል ሳንዱዊች', 20, '', 10, 1),
(86, 'ሲንግል ሳንዱዊች', 15, '', 10, 1),
(87, 'እንቁላል ስልስ', 25, '', 10, 1),
(88, 'ነጭ ፍርፍር', 23, '', 10, 1),
(89, 'አልጫ ፍርፍር', 23, '', 10, 1),
(90, 'ጎመን ጥብስ', 25, '', 10, 1),
(91, 'ሽሮ ፈሰስ', 25, '', 10, 1),
(92, 'ፍርፍር', 23, '', 10, 1),
(93, 'በየአይነት', 25, '', 10, 1),
(94, 'ተጋቢኖ', 25, '', 10, 1),
(95, 'ዳቦ ፍርፍር', 20, '', 10, 1),
(96, 'እንቁላል በስጋ', 40, '', 10, 1),
(97, 'ምንቸት', 35, '', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_id`, `food_id`, `quantity`) VALUES
(1, 1, 2),
(1, 2, 1),
(4, 2, 2),
(4, 3, 3),
(2, 1, 2),
(5, 2, 5),
(3, 3, 2),
(3, 1, 3),
(6, 3, 9),
(7, 2, 2),
(7, 3, 1),
(8, 3, 1),
(8, 1, 2),
(11, 1, 1),
(11, 2, 1),
(11, 3, 2),
(12, 1, 1),
(12, 3, 1),
(12, 2, 4),
(13, 1, 3),
(14, 1, 2),
(15, 1, 1),
(15, 2, 1),
(16, 1, 2),
(17, 2, 2),
(18, 1, 1),
(18, 2, 1),
(19, 1, 1),
(19, 2, 1),
(20, 2, 1),
(20, 3, 2),
(21, 2, 1),
(21, 3, 3),
(21, 1, 2),
(22, 1, 1),
(22, 2, 1),
(23, 1, 1),
(23, 2, 1),
(24, 1, 1),
(24, 2, 4),
(25, 1, 1),
(25, 2, 1),
(25, 3, 1),
(26, 1, 1),
(26, 2, 1),
(27, 1, 1),
(27, 2, 1),
(28, 1, 1),
(28, 3, 1),
(28, 2, 1),
(29, 1, 1),
(29, 2, 1),
(29, 3, 1),
(30, 1, 1),
(30, 2, 1),
(30, 3, 1),
(31, 1, 1),
(31, 2, 1),
(31, 3, 1),
(32, 1, 1),
(32, 2, 1),
(32, 3, 1),
(33, 1, 1),
(33, 2, 1),
(33, 3, 1),
(34, 1, 1),
(34, 2, 1),
(34, 3, 1),
(35, 1, 1),
(35, 2, 1),
(35, 3, 1),
(36, 3, 5),
(36, 2, 6),
(36, 1, 10),
(37, 1, 3),
(37, 2, 1),
(38, 3, 1),
(38, 1, 2),
(39, 3, 1),
(39, 1, 2),
(40, 3, 1),
(40, 1, 2),
(41, 3, 1),
(41, 1, 2),
(42, 1, 6),
(42, 3, 3),
(42, 2, 5),
(43, 1, 6),
(43, 3, 3),
(43, 2, 5),
(44, 1, 6),
(45, 1, 6),
(44, 3, 3),
(45, 3, 3),
(44, 2, 5),
(45, 2, 5),
(47, 3, 6),
(48, 2, 5),
(49, 1, 1),
(49, 3, 2),
(50, 1, 1),
(50, 2, 1),
(51, 1, 1),
(51, 2, 1),
(51, 3, 6),
(52, 1, 1),
(52, 2, 3),
(53, 1, 1),
(53, 2, 1),
(53, 3, 2),
(54, 1, 1),
(54, 2, 1),
(55, 1, 1),
(55, 3, 2),
(56, 1, 1),
(56, 2, 1),
(56, 3, 1),
(56, 4, 1),
(57, 2, 2),
(57, 1, 2),
(57, 3, 3),
(58, 37, 1),
(58, 38, 1),
(59, 6, 1),
(59, 5, 1),
(59, 4, 1),
(59, 3, 1),
(60, 5, 1),
(60, 6, 1),
(61, 1, 1),
(61, 2, 1),
(61, 3, 1),
(62, 1, 1),
(62, 2, 1),
(63, 3, 1),
(63, 4, 1),
(64, 1, 1),
(64, 2, 1),
(64, 3, 1),
(64, 4, 2),
(65, 69, 1),
(66, 1, 1),
(66, 2, 1),
(66, 3, 1),
(67, 1, 1),
(67, 2, 1),
(68, 3, 1),
(68, 1, 1),
(68, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(11) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_expiration_time` timestamp NULL DEFAULT NULL,
  `activation_time` timestamp NULL DEFAULT NULL,
  `rejected_time` timestamp NULL DEFAULT NULL,
  `finished_time` timestamp NULL DEFAULT NULL,
  `order_state` varchar(10) NOT NULL,
  `student_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `total_price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `order_time`, `order_expiration_time`, `activation_time`, `rejected_time`, `finished_time`, `order_state`, `student_id`, `restaurant_id`, `total_price`) VALUES
(1, '2019-11-29 13:43:34', '2019-11-29 08:30:00', '2019-12-14 16:23:37', NULL, '2020-01-08 19:26:32', 'Finished', 1, 1, 220),
(2, '2019-11-29 13:44:56', '0000-00-00 00:00:00', NULL, NULL, '2019-12-10 18:40:58', 'Finished', 1, 1, 50),
(3, '2019-11-29 13:47:56', '2019-11-29 13:47:56', NULL, NULL, '2019-12-13 16:00:09', 'Finished', 1, 1, 658),
(4, '2019-12-08 15:45:28', '2019-12-12 13:03:21', NULL, '2019-12-12 12:52:33', NULL, 'Rejected', 1, 1, 60),
(5, '2019-12-10 10:43:15', '2019-12-12 13:03:21', NULL, '2020-01-16 03:11:37', '2019-12-10 18:54:31', 'Rejected', 2, 1, 80),
(6, '2019-12-10 18:36:42', '2019-12-11 18:18:45', NULL, NULL, '2019-12-10 18:38:32', 'Expire', 2, 1, 63),
(7, '2019-12-10 20:18:02', '2019-12-11 18:09:45', NULL, NULL, NULL, 'Expire', 1, 1, 600),
(8, '2019-12-10 20:18:02', '2019-12-11 18:48:45', '2019-12-11 19:25:10', NULL, '2020-01-08 18:59:28', 'Finished', 2, 1, 400),
(11, '2020-01-04 12:27:25', NULL, NULL, NULL, NULL, 'Expire', 1, 1, 89),
(12, '2020-01-04 12:30:19', NULL, NULL, NULL, NULL, 'Expire', 1, 1, 127),
(13, '2020-01-04 13:01:03', '2020-01-04 13:31:03', NULL, NULL, NULL, 'Expire', 1, 1, 75),
(14, '2020-01-08 16:14:15', '2020-01-08 16:44:15', NULL, NULL, NULL, 'Expire', 4, 1, 50),
(15, '2020-01-09 12:57:36', '2020-01-09 13:27:36', NULL, NULL, NULL, 'Rejected', 1, 1, 45),
(16, '2020-01-09 13:24:00', '2020-01-09 13:54:00', NULL, NULL, NULL, 'Finished', 1, 1, 50),
(17, '2020-01-09 13:24:45', '2020-01-09 13:54:45', NULL, NULL, NULL, 'Expire', 1, 1, 40),
(18, '2020-01-09 16:48:22', '2020-01-09 17:18:22', NULL, NULL, '2020-01-15 00:25:40', 'Finished', 1, 1, 45),
(19, '2020-01-10 06:08:43', '2020-01-10 06:38:43', NULL, NULL, NULL, 'Expire', 1, 1, 45),
(50, '2020-01-12 20:12:57', '2020-01-12 20:42:57', NULL, NULL, NULL, 'Active', 1, 1, 45),
(51, '2020-01-13 14:05:41', '2020-01-13 14:35:41', NULL, NULL, NULL, 'Expire', 1, 1, 177),
(52, '2020-01-14 10:10:30', '2020-01-14 10:40:30', NULL, NULL, NULL, 'Expire', 1, 1, 85),
(53, '2020-01-14 12:00:28', '2020-01-14 12:30:28', NULL, NULL, NULL, 'Expire', 1, 1, 89),
(54, '2020-01-15 01:07:51', '2020-01-15 01:07:51', NULL, NULL, NULL, 'Expire', 1, 1, 45),
(55, '2020-01-16 06:57:16', '2020-01-16 07:27:16', NULL, NULL, NULL, 'Expire', 1, 1, 69),
(56, '2020-01-17 07:59:47', '2020-01-17 08:29:47', NULL, '2020-01-17 08:13:44', NULL, 'Rejected', 1, 1, 87),
(57, '2020-01-18 10:37:40', '2020-01-18 11:07:40', NULL, NULL, NULL, 'Expire', 1, 1, 156),
(58, '2020-01-19 21:31:01', '2020-01-19 22:01:01', NULL, NULL, NULL, 'Expire', 7, 5, 60),
(59, '2020-01-20 19:18:34', '2020-01-20 19:48:34', NULL, NULL, NULL, 'Expire', 1, 1, 99),
(60, '2020-01-22 17:29:49', '2020-01-22 17:59:49', NULL, NULL, NULL, 'Expire', 1, 1, 57),
(61, '2020-01-22 18:06:09', '2020-01-22 18:36:09', NULL, NULL, NULL, 'Expire', 1, 1, 67),
(62, '2020-01-22 20:57:55', '2020-01-22 21:27:55', NULL, NULL, NULL, 'Expire', 1, 1, 45),
(63, '2020-01-22 21:34:05', '2020-01-22 22:04:05', '2020-01-22 21:34:28', NULL, NULL, 'Active', 1, 1, 42),
(64, '2020-01-23 08:54:31', '2020-01-23 09:24:31', '2020-01-23 08:59:27', NULL, NULL, 'Active', 1, 1, 107),
(65, '2020-01-23 13:41:21', '2020-01-23 14:11:21', NULL, NULL, NULL, 'Pending', 10, 10, 25),
(66, '2020-01-23 21:01:03', '2020-01-23 21:31:02', NULL, NULL, NULL, 'Expire', 1, 1, 67),
(67, '2020-01-24 05:29:15', '2020-01-24 05:59:15', NULL, NULL, NULL, 'Expire', 1, 1, 45),
(68, '2020-01-24 06:25:27', '2020-01-24 06:55:27', '2020-01-24 06:36:33', '2020-01-24 06:36:33', NULL, 'Active', 1, 1, 87);

-- --------------------------------------------------------

--
-- Table structure for table `reportcustomer`
--

CREATE TABLE `reportcustomer` (
  `report_id` int(11) NOT NULL,
  `report_type` varchar(1) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `birr_addeed` varchar(11) DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `report_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reportcustomer`
--

INSERT INTO `reportcustomer` (`report_id`, `report_type`, `order_id`, `birr_addeed`, `student_id`, `restaurant_id`, `report_date`) VALUES
(1, 'A', NULL, '200', 1, 1, '2019-12-06 15:12:19'),
(2, 'S', 2, NULL, 1, 1, '2019-12-06 15:12:19'),
(4, 'S', 18, NULL, 1, 1, '2020-01-15 00:25:40'),
(5, 'A', NULL, '4000', 1, 1, '2020-01-15 00:42:03'),
(6, 'A', NULL, '500', 1, 1, '2020-01-15 12:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_table`
--

CREATE TABLE `restaurant_table` (
  `restaurant_id` int(11) NOT NULL,
  `restaurant_name` varchar(25) NOT NULL,
  `restaurant_password` varchar(25) NOT NULL,
  `restaurant_state` varchar(10) NOT NULL,
  `restaurant_min_balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant_table`
--

INSERT INTO `restaurant_table` (`restaurant_id`, `restaurant_name`, `restaurant_password`, `restaurant_state`, `restaurant_min_balance`) VALUES
(1, 'Diana', 'abcd', 'active', 22),
(2, 'Arid Corner', 'tinsae', 'waiting', 500),
(3, 'admin', 'admin', 'active', 0),
(5, 'Aron', 'aron', 'active', 700),
(6, 'Kenean', 'kenean', 'reject', 0),
(7, 'Kenean2', 'kenean', 'pending', 200),
(8, 'Titanic', 'titanic', 'reject', 100),
(9, 'fakerst', 'fakerst', 'pending', -60),
(10, 'Kana', 'abcde', 'active', -200);

-- --------------------------------------------------------

--
-- Table structure for table `smenu_item`
--

CREATE TABLE `smenu_item` (
  `smenu_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smenu_item`
--

INSERT INTO `smenu_item` (`smenu_id`, `food_id`, `date`) VALUES
(1, 1, '2020-01-06'),
(1, 2, '2020-01-06'),
(7, 3, 'Jan 9, 2020'),
(7, 3, 'Jan 10, 2020'),
(7, 1, 'Jan 11, 2020'),
(7, 1, 'Jan 12, 2020'),
(7, 3, 'Jan 13, 2020'),
(7, 2, 'Jan 14, 2020'),
(7, 2, 'Jan 15, 2020'),
(7, 2, 'Jan 16, 2020'),
(7, 3, 'Jan 17, 2020'),
(7, 1, 'Jan 18, 2020'),
(7, 2, 'Jan 19, 2020'),
(7, 1, 'Jan 20, 2020'),
(7, 3, 'Jan 21, 2020'),
(7, 1, 'Jan 22, 2020'),
(7, 3, 'Jan 23, 2020'),
(7, 2, 'Jan 23, 2020'),
(7, 2, 'Jan 24, 2020'),
(7, 2, 'Jan 25, 2020'),
(7, 2, 'Jan 25, 2020'),
(7, 1, 'Jan 26, 2020'),
(7, 3, 'Jan 27, 2020'),
(7, 3, 'Jan 28, 2020'),
(8, 2, 'Jan 9, 2020'),
(8, 3, 'Jan 9, 2020'),
(8, 2, 'Jan 10, 2020'),
(8, 1, 'Jan 10, 2020'),
(8, 3, 'Jan 11, 2020'),
(8, 3, 'Jan 11, 2020'),
(8, 3, 'Jan 11, 2020'),
(8, 3, 'Jan 12, 2020'),
(8, 1, 'Jan 12, 2020'),
(8, 3, 'Jan 13, 2020'),
(8, 3, 'Jan 13, 2020'),
(8, 1, 'Jan 14, 2020'),
(8, 2, 'Jan 14, 2020'),
(8, 1, 'Jan 14, 2020'),
(8, 3, 'Jan 15, 2020'),
(8, 2, 'Jan 15, 2020'),
(8, 3, 'Jan 16, 2020'),
(8, 3, 'Jan 16, 2020'),
(8, 2, 'Jan 17, 2020'),
(8, 1, 'Jan 17, 2020'),
(8, 3, 'Jan 18, 2020'),
(8, 1, 'Jan 18, 2020'),
(9, 3, 'Jan 9, 2020'),
(9, 1, 'Jan 9, 2020'),
(9, 2, 'Jan 10, 2020'),
(9, 2, 'Jan 10, 2020'),
(9, 3, 'Jan 10, 2020'),
(9, 1, 'Jan 11, 2020'),
(9, 3, 'Jan 11, 2020'),
(9, 1, 'Jan 12, 2020'),
(9, 1, 'Jan 12, 2020'),
(9, 3, 'Jan 12, 2020'),
(9, 2, 'Jan 13, 2020'),
(9, 1, 'Jan 13, 2020'),
(9, 1, 'Jan 14, 2020'),
(9, 1, 'Jan 14, 2020'),
(9, 2, 'Jan 15, 2020'),
(9, 3, 'Jan 15, 2020'),
(9, 3, 'Jan 16, 2020'),
(9, 3, 'Jan 16, 2020'),
(9, 2, 'Jan 16, 2020'),
(9, 3, 'Jan 17, 2020'),
(9, 3, 'Jan 17, 2020'),
(9, 2, 'Jan 18, 2020'),
(9, 2, 'Jan 18, 2020'),
(9, 2, 'Jan 18, 2020'),
(9, 2, 'Jan 19, 2020'),
(9, 3, 'Jan 19, 2020'),
(9, 1, 'Jan 20, 2020'),
(9, 1, 'Jan 20, 2020'),
(9, 3, 'Jan 21, 2020'),
(9, 3, 'Jan 21, 2020'),
(9, 2, 'Jan 22, 2020'),
(9, 3, 'Jan 22, 2020'),
(9, 2, 'Jan 23, 2020'),
(9, 3, 'Jan 23, 2020'),
(9, 1, 'Jan 24, 2020'),
(9, 2, 'Jan 24, 2020'),
(9, 2, 'Jan 25, 2020'),
(9, 2, 'Jan 25, 2020'),
(9, 2, 'Jan 26, 2020'),
(9, 3, 'Jan 26, 2020'),
(9, 2, 'Jan 27, 2020'),
(9, 3, 'Jan 27, 2020'),
(9, 1, 'Jan 27, 2020'),
(10, 3, 'Jan 9, 2020'),
(9, 2, 'Jan 28, 2020'),
(10, 1, 'Jan 9, 2020'),
(9, 3, 'Jan 28, 2020'),
(10, 2, 'Jan 10, 2020'),
(10, 2, 'Jan 10, 2020'),
(10, 3, 'Jan 10, 2020'),
(10, 1, 'Jan 11, 2020'),
(10, 3, 'Jan 11, 2020'),
(10, 1, 'Jan 12, 2020'),
(10, 1, 'Jan 12, 2020'),
(10, 3, 'Jan 12, 2020'),
(10, 2, 'Jan 13, 2020'),
(10, 1, 'Jan 13, 2020'),
(10, 1, 'Jan 14, 2020'),
(10, 1, 'Jan 14, 2020'),
(10, 2, 'Jan 15, 2020'),
(10, 3, 'Jan 15, 2020'),
(10, 3, 'Jan 16, 2020'),
(10, 3, 'Jan 16, 2020'),
(10, 2, 'Jan 16, 2020'),
(10, 3, 'Jan 17, 2020'),
(10, 3, 'Jan 17, 2020'),
(10, 2, 'Jan 18, 2020'),
(10, 2, 'Jan 18, 2020'),
(10, 2, 'Jan 18, 2020'),
(10, 2, 'Jan 19, 2020'),
(10, 3, 'Jan 19, 2020'),
(10, 1, 'Jan 20, 2020'),
(10, 1, 'Jan 20, 2020'),
(10, 3, 'Jan 21, 2020'),
(10, 3, 'Jan 21, 2020'),
(10, 2, 'Jan 22, 2020'),
(10, 3, 'Jan 22, 2020'),
(10, 2, 'Jan 23, 2020'),
(10, 3, 'Jan 23, 2020'),
(10, 1, 'Jan 24, 2020'),
(10, 2, 'Jan 24, 2020'),
(10, 2, 'Jan 25, 2020'),
(10, 2, 'Jan 25, 2020'),
(10, 2, 'Jan 26, 2020'),
(10, 3, 'Jan 26, 2020'),
(10, 2, 'Jan 27, 2020'),
(10, 3, 'Jan 27, 2020'),
(10, 1, 'Jan 27, 2020'),
(10, 2, 'Jan 28, 2020'),
(10, 3, 'Jan 28, 2020'),
(11, 5, 'Jan 18, 2020'),
(11, 5, 'Jan 18, 2020'),
(11, 5, 'Jan 19, 2020'),
(11, 6, 'Jan 19, 2020'),
(11, 6, 'Jan 20, 2020'),
(11, 5, 'Jan 20, 2020'),
(11, 4, 'Jan 21, 2020'),
(11, 1, 'Jan 21, 2020'),
(11, 5, 'Jan 22, 2020'),
(11, 2, 'Jan 22, 2020'),
(11, 6, 'Jan 23, 2020'),
(11, 1, 'Jan 23, 2020'),
(11, 4, 'Jan 24, 2020'),
(11, 5, 'Jan 24, 2020'),
(11, 2, 'Jan 25, 2020'),
(11, 2, 'Jan 25, 2020'),
(11, 4, 'Jan 25, 2020'),
(11, 6, 'Jan 26, 2020'),
(11, 6, 'Jan 26, 2020'),
(11, 5, 'Jan 27, 2020'),
(11, 1, 'Jan 27, 2020'),
(11, 2, 'Jan 28, 2020'),
(11, 1, 'Jan 28, 2020'),
(11, 4, 'Jan 29, 2020'),
(11, 1, 'Jan 29, 2020'),
(11, 6, 'Jan 30, 2020'),
(11, 1, 'Jan 30, 2020'),
(11, 4, 'Jan 31, 2020'),
(11, 4, 'Jan 31, 2020'),
(11, 5, 'Jan 31, 2020'),
(11, 4, 'Feb 1, 2020'),
(11, 2, 'Feb 1, 2020'),
(12, 6, 'Jan 19, 2020'),
(12, 4, 'Jan 19, 2020'),
(12, 5, 'Jan 19, 2020'),
(12, 4, 'Jan 20, 2020'),
(12, 2, 'Jan 20, 2020'),
(12, 1, 'Jan 21, 2020'),
(12, 6, 'Jan 21, 2020'),
(13, 6, 'Jan 22, 2020'),
(13, 6, 'Jan 22, 2020'),
(13, 3, 'Jan 22, 2020'),
(13, 6, 'Jan 23, 2020'),
(13, 7, 'Jan 23, 2020'),
(13, 3, 'Jan 24, 2020'),
(13, 4, 'Jan 24, 2020'),
(13, 3, 'Jan 25, 2020'),
(13, 4, 'Jan 25, 2020'),
(13, 1, 'Jan 26, 2020'),
(13, 4, 'Jan 26, 2020'),
(13, 5, 'Jan 27, 2020'),
(13, 7, 'Jan 27, 2020'),
(13, 4, 'Jan 27, 2020'),
(13, 5, 'Jan 28, 2020'),
(13, 1, 'Jan 28, 2020'),
(13, 5, 'Jan 29, 2020'),
(13, 2, 'Jan 29, 2020'),
(13, 2, 'Jan 29, 2020'),
(14, 1, 'Jan 22, 2020'),
(14, 1, 'Jan 22, 2020'),
(14, 5, 'Jan 22, 2020'),
(14, 5, 'Jan 23, 2020'),
(14, 4, 'Jan 23, 2020'),
(14, 7, 'Jan 23, 2020'),
(14, 3, 'Jan 24, 2020'),
(14, 2, 'Jan 24, 2020'),
(14, 7, 'Jan 25, 2020'),
(14, 5, 'Jan 25, 2020'),
(14, 5, 'Jan 25, 2020'),
(14, 5, 'Jan 26, 2020'),
(14, 6, 'Jan 26, 2020'),
(14, 4, 'Jan 27, 2020'),
(14, 5, 'Jan 27, 2020'),
(14, 7, 'Jan 28, 2020'),
(14, 3, 'Jan 28, 2020'),
(14, 6, 'Jan 28, 2020'),
(15, 2, 'Jan 22, 2020'),
(15, 3, 'Jan 22, 2020'),
(15, 6, 'Jan 22, 2020'),
(15, 7, 'Jan 23, 2020'),
(15, 4, 'Jan 23, 2020'),
(15, 3, 'Jan 23, 2020'),
(15, 2, 'Jan 24, 2020'),
(15, 5, 'Jan 24, 2020'),
(15, 4, 'Jan 24, 2020'),
(15, 4, 'Jan 25, 2020'),
(15, 1, 'Jan 25, 2020'),
(15, 7, 'Jan 25, 2020'),
(16, 3, 'Jan 23, 2020'),
(16, 4, 'Jan 23, 2020'),
(16, 3, 'Jan 24, 2020'),
(16, 7, 'Jan 24, 2020'),
(16, 2, 'Jan 25, 2020'),
(16, 4, 'Jan 26, 2020'),
(16, 1, 'Jan 26, 2020'),
(16, 4, 'Jan 27, 2020'),
(16, 6, 'Jan 27, 2020'),
(16, 7, 'Jan 28, 2020'),
(16, 5, 'Jan 28, 2020'),
(16, 5, 'Jan 29, 2020'),
(16, 2, 'Jan 29, 2020'),
(16, 1, 'Jan 30, 2020'),
(16, 2, 'Jan 30, 2020'),
(16, 1, 'Jan 31, 2020'),
(16, 5, 'Jan 31, 2020'),
(16, 7, 'Feb 1, 2020'),
(16, 3, 'Feb 1, 2020'),
(17, 2, 'Jan 23, 2020'),
(17, 4, 'Jan 23, 2020'),
(17, 6, 'Jan 24, 2020'),
(17, 5, 'Jan 24, 2020'),
(17, 7, 'Jan 25, 2020'),
(17, 3, 'Jan 25, 2020'),
(17, 4, 'Jan 26, 2020'),
(17, 3, 'Jan 26, 2020'),
(17, 7, 'Jan 27, 2020'),
(17, 4, 'Jan 27, 2020'),
(17, 2, 'Jan 28, 2020'),
(17, 2, 'Jan 28, 2020'),
(17, 4, 'Jan 28, 2020'),
(17, 6, 'Jan 29, 2020'),
(17, 6, 'Jan 29, 2020'),
(17, 2, 'Jan 29, 2020'),
(17, 6, 'Jan 30, 2020'),
(17, 7, 'Jan 30, 2020'),
(17, 4, 'Jan 31, 2020'),
(17, 1, 'Jan 31, 2020'),
(17, 4, 'Jan 31, 2020'),
(17, 4, 'Feb 1, 2020'),
(17, 2, 'Feb 1, 2020'),
(18, 2, '24 Jan 2020'),
(18, 5, '24 Jan 2020'),
(18, 3, '24 Jan 2020'),
(18, 1, '25 Jan 2020'),
(18, 1, '25 Jan 2020'),
(18, 3, '25 Jan 2020'),
(18, 3, '26 Jan 2020'),
(18, 4, '26 Jan 2020'),
(18, 5, '26 Jan 2020'),
(18, 1, '27 Jan 2020'),
(18, 1, '27 Jan 2020'),
(18, 1, '27 Jan 2020'),
(18, 6, '28 Jan 2020'),
(18, 4, '28 Jan 2020'),
(18, 6, '28 Jan 2020'),
(18, 3, '29 Jan 2020'),
(18, 3, '29 Jan 2020'),
(18, 1, '29 Jan 2020'),
(18, 1, '30 Jan 2020'),
(18, 3, '30 Jan 2020'),
(18, 3, '30 Jan 2020'),
(18, 2, '31 Jan 2020'),
(18, 3, '31 Jan 2020'),
(18, 6, '31 Jan 2020'),
(18, 4, '1 Feb 2020'),
(18, 4, '1 Feb 2020'),
(18, 2, '1 Feb 2020'),
(18, 3, '2 Feb 2020'),
(18, 7, '2 Feb 2020'),
(18, 7, '2 Feb 2020'),
(19, 91, 'Jan 24, 2020'),
(19, 76, 'Jan 25, 2020'),
(19, 88, 'Jan 26, 2020'),
(19, 88, 'Jan 26, 2020'),
(19, 79, 'Jan 27, 2020'),
(19, 94, 'Jan 27, 2020'),
(19, 91, 'Jan 28, 2020'),
(19, 76, 'Jan 28, 2020'),
(19, 72, 'Jan 29, 2020'),
(19, 92, 'Jan 30, 2020'),
(19, 83, 'Jan 31, 2020'),
(19, 79, 'Jan 31, 2020'),
(19, 91, 'Feb 1, 2020'),
(19, 71, 'Feb 2, 2020'),
(19, 74, 'Feb 3, 2020'),
(19, 72, 'Feb 4, 2020'),
(19, 82, 'Feb 5, 2020'),
(19, 83, 'Feb 6, 2020'),
(19, 76, 'Feb 7, 2020'),
(20, 70, 'Jan 24, 2020'),
(20, 84, 'Jan 25, 2020'),
(20, 80, 'Jan 26, 2020'),
(20, 71, 'Jan 26, 2020'),
(20, 81, 'Jan 27, 2020'),
(20, 80, 'Jan 28, 2020'),
(20, 72, 'Jan 28, 2020'),
(20, 76, 'Jan 29, 2020'),
(20, 85, 'Jan 30, 2020'),
(20, 81, 'Jan 31, 2020'),
(20, 89, 'Feb 1, 2020'),
(20, 77, 'Feb 2, 2020'),
(20, 81, 'Feb 3, 2020'),
(20, 81, 'Feb 3, 2020'),
(20, 86, 'Feb 4, 2020'),
(20, 87, 'Feb 5, 2020'),
(20, 71, 'Feb 5, 2020'),
(20, 71, 'Feb 6, 2020'),
(20, 91, 'Feb 7, 2020'),
(20, 87, 'Feb 7, 2020'),
(21, 74, 'Jan 24, 2020'),
(21, 81, 'Jan 25, 2020'),
(21, 73, 'Jan 25, 2020'),
(21, 79, 'Jan 26, 2020'),
(21, 86, 'Jan 27, 2020'),
(21, 72, 'Jan 28, 2020'),
(21, 94, 'Jan 28, 2020'),
(21, 77, 'Jan 29, 2020'),
(21, 76, 'Jan 29, 2020'),
(21, 93, 'Jan 30, 2020'),
(21, 83, 'Jan 31, 2020'),
(21, 92, 'Feb 1, 2020'),
(21, 77, 'Feb 1, 2020'),
(21, 73, 'Feb 2, 2020'),
(21, 82, 'Feb 3, 2020'),
(21, 83, 'Feb 4, 2020'),
(21, 83, 'Feb 5, 2020'),
(21, 69, 'Feb 5, 2020'),
(21, 93, 'Feb 6, 2020'),
(21, 94, 'Feb 7, 2020'),
(22, 90, 'Jan 24, 2020'),
(22, 88, 'Jan 24, 2020'),
(22, 86, 'Jan 25, 2020'),
(22, 76, 'Jan 25, 2020'),
(22, 71, 'Jan 26, 2020'),
(22, 88, 'Jan 26, 2020'),
(22, 89, 'Jan 27, 2020'),
(22, 82, 'Jan 27, 2020'),
(22, 70, 'Jan 27, 2020'),
(22, 88, 'Jan 28, 2020'),
(22, 80, 'Jan 28, 2020'),
(22, 89, 'Jan 29, 2020'),
(22, 86, 'Jan 29, 2020'),
(22, 88, 'Jan 29, 2020'),
(22, 84, 'Jan 30, 2020'),
(22, 77, 'Jan 30, 2020'),
(22, 68, 'Jan 30, 2020'),
(22, 77, 'Jan 31, 2020'),
(22, 78, 'Jan 31, 2020'),
(22, 89, 'Jan 31, 2020'),
(22, 95, 'Feb 1, 2020'),
(22, 75, 'Feb 1, 2020'),
(22, 94, 'Feb 1, 2020'),
(22, 81, 'Feb 2, 2020'),
(22, 82, 'Feb 2, 2020'),
(22, 68, 'Feb 3, 2020'),
(22, 84, 'Feb 3, 2020'),
(22, 93, 'Feb 3, 2020'),
(22, 83, 'Feb 4, 2020'),
(22, 94, 'Feb 4, 2020'),
(22, 90, 'Feb 4, 2020'),
(22, 96, 'Feb 5, 2020'),
(22, 90, 'Feb 5, 2020'),
(22, 96, 'Feb 5, 2020'),
(22, 78, 'Feb 6, 2020'),
(22, 74, 'Feb 6, 2020'),
(22, 89, 'Feb 6, 2020'),
(22, 82, 'Feb 7, 2020'),
(22, 68, 'Feb 7, 2020'),
(22, 78, 'Feb 7, 2020'),
(23, 2, '25 Jan 2020'),
(23, 5, '25 Jan 2020'),
(23, 2, '26 Jan 2020'),
(23, 1, '27 Jan 2020'),
(23, 5, '27 Jan 2020'),
(23, 5, '28 Jan 2020'),
(23, 4, '28 Jan 2020'),
(23, 4, '29 Jan 2020'),
(23, 3, '30 Jan 2020'),
(23, 4, '31 Jan 2020'),
(23, 2, '1 Feb 2020'),
(23, 4, '2 Feb 2020'),
(23, 1, '2 Feb 2020'),
(23, 5, '3 Feb 2020'),
(23, 2, '3 Feb 2020'),
(23, 3, '4 Feb 2020'),
(23, 3, '5 Feb 2020'),
(23, 2, '5 Feb 2020'),
(23, 1, '6 Feb 2020'),
(23, 1, '7 Feb 2020'),
(23, 4, '7 Feb 2020'),
(23, 3, '8 Feb 2020'),
(23, 5, '9 Feb 2020'),
(23, 3, '9 Feb 2020'),
(23, 5, '10 Feb 2020'),
(23, 2, '10 Feb 2020'),
(23, 1, '11 Feb 2020'),
(23, 2, '12 Feb 2020'),
(23, 5, '13 Feb 2020'),
(23, 5, '13 Feb 2020'),
(23, 4, '14 Feb 2020'),
(23, 2, '15 Feb 2020'),
(23, 4, '15 Feb 2020'),
(23, 5, '16 Feb 2020'),
(23, 1, '17 Feb 2020'),
(23, 1, '17 Feb 2020'),
(23, 5, '30 Dec 2019'),
(23, 3, '31 Dec 2019'),
(23, 3, '1 Jan 2020'),
(23, 5, '1 Jan 2020'),
(23, 3, '2 Jan 2020'),
(23, 5, '2 Jan 2020'),
(23, 3, '3 Jan 2020'),
(23, 1, '3 Jan 2020'),
(23, 4, '4 Jan 2020'),
(24, 2, '25 Jan 2020'),
(24, 5, '25 Jan 2020'),
(24, 2, '26 Jan 2020'),
(24, 1, '27 Jan 2020'),
(24, 5, '27 Jan 2020'),
(24, 5, '28 Jan 2020'),
(24, 4, '28 Jan 2020'),
(24, 4, '29 Jan 2020'),
(24, 3, '30 Jan 2020'),
(24, 4, '31 Jan 2020'),
(24, 2, '1 Feb 2020'),
(24, 4, '2 Feb 2020'),
(24, 1, '2 Feb 2020'),
(24, 5, '3 Feb 2020'),
(24, 2, '3 Feb 2020'),
(24, 3, '4 Feb 2020'),
(24, 3, '5 Feb 2020'),
(24, 2, '5 Feb 2020'),
(24, 1, '6 Feb 2020'),
(24, 1, '7 Feb 2020'),
(24, 4, '7 Feb 2020'),
(24, 3, '8 Feb 2020'),
(24, 5, '9 Feb 2020'),
(24, 3, '9 Feb 2020'),
(24, 5, '10 Feb 2020'),
(24, 2, '10 Feb 2020'),
(24, 1, '11 Feb 2020'),
(24, 2, '12 Feb 2020'),
(24, 5, '13 Feb 2020'),
(24, 5, '13 Feb 2020'),
(24, 4, '14 Feb 2020'),
(24, 2, '15 Feb 2020'),
(24, 4, '15 Feb 2020'),
(24, 5, '16 Feb 2020'),
(24, 1, '17 Feb 2020'),
(24, 1, '17 Feb 2020'),
(24, 5, '30 Dec 2019'),
(24, 3, '31 Dec 2019'),
(24, 3, '1 Jan 2020'),
(24, 5, '1 Jan 2020'),
(24, 3, '2 Jan 2020'),
(24, 5, '2 Jan 2020'),
(24, 3, '3 Jan 2020'),
(24, 1, '3 Jan 2020'),
(24, 4, '4 Jan 2020');

-- --------------------------------------------------------

--
-- Table structure for table `smenu_table`
--

CREATE TABLE `smenu_table` (
  `smenu_id` int(11) NOT NULL,
  `smenu_price` double NOT NULL,
  `smenu_duration` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `smenu_remaining` double DEFAULT NULL,
  `status` varchar(10) DEFAULT 'active',
  `sdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `smenu_table`
--

INSERT INTO `smenu_table` (`smenu_id`, `smenu_price`, `smenu_duration`, `std_id`, `rest_id`, `smenu_remaining`, `status`, `sdate`) VALUES
(1, 500, 25, 1, 1, 50, 'active', '2020-01-17 11:20:07'),
(7, 500, 20, 1, 1, 14, 'active', '2020-01-17 11:20:07'),
(8, 500, 10, 1, 1, 8, 'active', '2020-01-17 11:20:07'),
(9, 1000, 20, 1, 1, 11, 'active', '2020-01-17 11:20:07'),
(10, 1000, 20, 1, 1, 11, 'active', '2020-01-17 11:20:07'),
(11, 800, 15, 1, 1, 24, 'active', '2020-01-17 11:20:07'),
(12, 180, 3, 1, 1, 10, 'active', '2020-01-18 19:46:58'),
(13, 500, 8, 1, 1, 26, 'active', '2020-01-21 00:23:16'),
(14, 500, 7, 1, 1, 24, 'active', '2020-01-21 00:35:06'),
(15, 500, 4, 1, 1, 209, 'active', '2020-01-21 10:19:14'),
(16, 500, 10, 1, 1, 18, 'active', '2020-01-22 17:30:24'),
(17, 600, 10, 1, 1, 22, 'active', '2020-01-22 18:08:04'),
(18, 5000, 10, 1, 1, 4258, 'active', '2020-01-23 08:56:22'),
(19, 500, 15, -1, 1, 21, 'active', '2020-01-23 09:45:06'),
(20, 500, 15, 1, 1, 11, 'active', '2020-01-23 10:26:59'),
(21, 500, 15, 10, 10, 16, 'active', '2020-01-23 10:28:22'),
(22, 1000, 15, 10, 10, 15, 'active', '2020-01-23 13:44:45'),
(23, 1000, 30, 1, 1, 18, 'active', '2020-01-24 06:21:37'),
(24, 1000, 30, 1, 1, 18, 'active', '2020-01-24 06:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `student_table`
--

CREATE TABLE `student_table` (
  `student_id` int(11) NOT NULL,
  `student_username` varchar(15) NOT NULL,
  `student_name` varchar(25) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `student_balance` double NOT NULL,
  `student_state` varchar(10) NOT NULL,
  `restaurant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_table`
--

INSERT INTO `student_table` (`student_id`, `student_username`, `student_name`, `student_password`, `student_balance`, `student_state`, `restaurant_id`) VALUES
(1, 'tm', 'Tinsae Mesfin', 'tt', 2134, 'Active', 1),
(2, 'tmsf', 'tinsu mesf', 'hjkhj', 80, '', 1),
(3, 'sdasda', 'dasdasda', 'dsaasdsd', 1000, 'Active', 1),
(4, 'cds', 'zdfg', 'cds', 550, 'Active', 1),
(5, 'aradatechh', 'Tinsae Mesfin ', 'tinsae', 0, 'Active', 1),
(7, 'aradat', 'tinsae mesfn ', 'tinsae', 0, 'Active', 1),
(8, 'bdndjdk', 'truri', '123456', 0, 'Active', 1),
(10, 'aradatech', 'tinsae mesfin', 'aradatech', -25, 'Active', 10);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `dd` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`dd`, `order_id`) VALUES
('2019-12-10 08:00:00', 0),
('2019-12-11 07:20:21', 0),
('2019-12-11 13:48:35', 0),
('2019-12-11 19:26:22', 0),
('2019-12-11 19:27:10', 0),
('2019-12-12 03:33:22', 0),
('2019-12-12 03:34:07', 0),
('2019-12-12 12:03:21', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `error_report`
--
ALTER TABLE `error_report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_menu_table`
--
ALTER TABLE `food_menu_table`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_table_ibfk_1` (`restaurant_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `reportcustomer`
--
ALTER TABLE `reportcustomer`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `restaurant_id` (`restaurant_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `restaurant_table`
--
ALTER TABLE `restaurant_table`
  ADD PRIMARY KEY (`restaurant_id`);

--
-- Indexes for table `smenu_item`
--
ALTER TABLE `smenu_item`
  ADD KEY `smenu_id` (`smenu_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `smenu_table`
--
ALTER TABLE `smenu_table`
  ADD PRIMARY KEY (`smenu_id`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `rest_id` (`rest_id`);

--
-- Indexes for table `student_table`
--
ALTER TABLE `student_table`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `student_username` (`student_username`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD KEY `order_id` (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `error_report`
--
ALTER TABLE `error_report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_menu_table`
--
ALTER TABLE `food_menu_table`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `reportcustomer`
--
ALTER TABLE `reportcustomer`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `restaurant_table`
--
ALTER TABLE `restaurant_table`
  MODIFY `restaurant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `smenu_table`
--
ALTER TABLE `smenu_table`
  MODIFY `smenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `student_table`
--
ALTER TABLE `student_table`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `smenu_item`
--
ALTER TABLE `smenu_item`
  ADD CONSTRAINT `smenu_item_ibfk_1` FOREIGN KEY (`smenu_id`) REFERENCES `smenu_table` (`smenu_id`),
  ADD CONSTRAINT `smenu_item_ibfk_2` FOREIGN KEY (`food_id`) REFERENCES `food_menu_table` (`food_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
