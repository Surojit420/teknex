-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 08:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teknex_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about_us`
--

CREATE TABLE `tbl_about_us` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(30) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `status` enum('Inactive','Active') NOT NULL,
  `image` text NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `uniqcode`, `email`, `mobile_no`, `password`, `first_name`, `last_name`, `status`, `image`, `datetime`) VALUES
(1, '78545', 'admin@gmail.com', '8496333268', '7ece99e593ff5dd200e2b9233d9ba654', 'admin', 'admin', 'Active', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banner`
--

CREATE TABLE `tbl_banner` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(30) NOT NULL,
  `title_name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blogs`
--

CREATE TABLE `tbl_blogs` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clients`
--

CREATE TABLE `tbl_clients` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE `tbl_logo` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `name` text NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `uniqcode`, `image`, `name`, `status`, `create_date`, `update_date`) VALUES
(1, '4DJI2QoxcuyGds1SLbWO', 'e366add52925b66744b18bf2de000465_thumb.png', '111', 'Delete', '2021-02-24 01:08:39', '2021-02-24 23:05:19'),
(2, 'ZJFtn8gQPhd0l52GO7Vu', 'f250c62e192ad720112a2118517a93ca_thumb.png', '111', 'Delete', '2021-02-24 01:10:12', '2021-02-24 23:07:59'),
(3, 'kfGl4m8EZ1CDL53jeRJO', '0e950633c7e898dc664d01efeddcf274_thumb.png', '111', 'Delete', '2021-02-24 01:10:17', '2021-02-24 23:05:30'),
(4, 'f9HaXJAsyKSLBjvR7W6i', '3cf708f3ea3b2e1db668740517f6e39f_thumb.png', '111', 'Inactive', '2021-02-24 22:05:49', '2021-02-25 00:19:37'),
(5, '4QzIDE7YAg6oTHUa1Ndt', '848a1d7700c0e1ddb2029e4940193b0e_thumb.png', '111', 'Inactive', '2021-02-24 22:06:35', '2021-02-25 00:24:25'),
(6, 'NOT3GZgAVF2Xbo67htJx', '46fa4ec0ff2c3ce5592e85e4145ba626_thumb.png', '111', 'Active', '2021-02-24 22:06:48', '2021-02-25 00:24:35'),
(7, 'h6gvJNrE9c1eKH4aMo2k', '1bcccfc1089e1ff2dca04513007c3efe_thumb.png', '111111', 'Inactive', '2021-02-24 22:11:00', '2021-02-25 00:02:44'),
(8, 'lE2chNGSbt5epiyZOYIm', 'daf339993085e4b625d0f2429c4331f7_thumb.png', '1111111', 'Inactive', '2021-02-24 22:11:29', '2021-02-25 00:02:36');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(30) NOT NULL,
  `title_name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
