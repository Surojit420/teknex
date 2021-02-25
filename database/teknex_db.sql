-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2021 at 08:14 PM
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
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `uniqcode`, `title_name`, `image`, `description`, `status`, `create_date`, `update_date`) VALUES
(2, 'NSv2ukQaCI5EcUm8JnBo', 's amnb', '931a889ceb4980f8e810a18f3f9807a1_thumb.png', 'SA mbajbxc cjhcbwkjcc c wk c', 'Active', '2021-02-25 16:28:29', '2021-02-25 23:46:11'),
(3, 'wknlIJzW4NLR3atvQo9b', 'surojit', '989882d348dd2b43dfb426e0a0447079_thumb.png', 'surojit salspmcsncnjc', 'Delete', '2021-02-25 16:29:00', '2021-02-25 18:44:44'),
(4, 'RdDjYBGqpIzJfbK6uXc1', 'nan', 'e41c52303d67306a169001e27d8b4db2_thumb.jpg', 'dskascksms  xkxskcnsk   jw jw  jw', 'Delete', '2021-02-25 18:24:37', '2021-02-25 23:46:17');

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
  `create_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clients`
--

INSERT INTO `tbl_clients` (`id`, `uniqcode`, `title`, `description`, `image`, `link`, `status`, `create_date`, `updated_date`) VALUES
(1, 'sc nmc ms cm,as', 'surojit', 'sxsncsakncksna  dqwdi diowdi di dh idd oi dh hw', 'a620f4f372363d78078499c263096698_thumb.png', 'www.google.com', 'Active', '2021-02-02 19:19:06', '2021-02-10 19:19:06'),
(2, 'WxCc0JoOPDYUh6gsTkjr', '', '', '5a23f77e27c8e93f42fb898eda1e0b5d_thumb.jpg', '', 'Active', '2021-02-25 19:55:25', '0000-00-00 00:00:00');

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
(1, '4DJI2QoxcuyGds1SLbWO', 'e366add52925b66744b18bf2de000465_thumb.png', '111', 'Delete', '2021-02-24 01:08:39', '2021-02-25 13:31:54'),
(2, 'ZJFtn8gQPhd0l52GO7Vu', 'f250c62e192ad720112a2118517a93ca_thumb.png', '111', 'Delete', '2021-02-24 01:10:12', '2021-02-25 13:17:13'),
(3, 'kfGl4m8EZ1CDL53jeRJO', '0e950633c7e898dc664d01efeddcf274_thumb.png', '111', 'Delete', '2021-02-24 01:10:17', '2021-02-25 13:31:51'),
(4, 'f9HaXJAsyKSLBjvR7W6i', '3cf708f3ea3b2e1db668740517f6e39f_thumb.png', '111', 'Delete', '2021-02-24 22:05:49', '2021-02-25 14:11:50'),
(5, '4QzIDE7YAg6oTHUa1Ndt', '848a1d7700c0e1ddb2029e4940193b0e_thumb.png', '111', 'Active', '2021-02-24 22:06:35', '2021-02-25 23:45:51'),
(6, 'NOT3GZgAVF2Xbo67htJx', '46fa4ec0ff2c3ce5592e85e4145ba626_thumb.png', '111', 'Inactive', '2021-02-24 22:06:48', '2021-02-25 15:09:40'),
(7, 'h6gvJNrE9c1eKH4aMo2k', '1bcccfc1089e1ff2dca04513007c3efe_thumb.png', '111111', 'Inactive', '2021-02-24 22:11:00', '2021-02-25 15:09:37'),
(8, 'lE2chNGSbt5epiyZOYIm', 'daf339993085e4b625d0f2429c4331f7_thumb.png', '1111111', 'Inactive', '2021-02-24 22:11:29', '2021-02-25 23:45:51'),
(9, '4kqvAmc5j6nhrzdoOf0S', '4de30f9a975013a76a11d19721fdf535_thumb.jpg', 'surojit', 'Inactive', '2021-02-25 13:03:04', '2021-02-25 15:02:23'),
(10, 'wh8IVxfPpYGLmOuEHv9R', 'b91373d70399dba397784b4137a40af8_thumb.jpg', 'xcv', 'Delete', '2021-02-25 13:09:46', '2021-02-25 13:21:04'),
(11, 'IScbRB8A3opyr1gvYj9m', '3868f1dabfed76e64950a06177b8f2c2_thumb.jpg', 'asdfg', 'Inactive', '2021-02-25 13:09:59', '2021-02-25 15:09:29'),
(12, 'OzfkjWNCYlMs8Gc9v7VA', 'a08eb3a08cd496fbe6aa9d44b356f283_thumb.jpg', 'jbhvg', 'Delete', '2021-02-25 13:12:03', '2021-02-25 23:42:21'),
(13, 'O2XjNJPQgpHMEhtdnclw', 'a620f4f372363d78078499c263096698_thumb.png', 'asdc', 'Delete', '2021-02-25 13:15:52', '2021-02-25 23:42:26'),
(14, 'o8wy3GrcYqmJR7hNBnt0', '564a0221e6ef99b1161667fe0f906212_thumb.png', 'asas', 'Delete', '2021-02-25 13:54:45', '2021-02-25 13:58:28'),
(15, 'vyVJCRYmnIxNq8aigXs3', '892e5c50f941e5876668cbee24cb9bc9_thumb.png', 'gfytr', 'Delete', '2021-02-25 14:00:45', '2021-02-25 23:41:42'),
(16, 'E5saBn4yvOp2JARWoiNg', '42a27db7b21f4bd7de1987b178984b54_thumb.png', 'kljh', 'Delete', '2021-02-25 14:00:58', '2021-02-25 14:11:07'),
(17, 'JG3kFo0RNi5Z7ESlw2P4', '43f006a460fd4d259e7982ad9fb678d1_thumb.png', 'sgsgsdg', 'Delete', '2021-02-25 14:16:44', '2021-02-25 23:42:15'),
(18, 'l0fsE2T6vQHgYnpVAKGw', '5a1c58d3eb082a18e8c13dc8dac015af_thumb.png', 'sdfgdsfg', 'Delete', '2021-02-25 14:17:02', '2021-02-25 23:41:36'),
(19, 'aFuHIMVBtUP4b31jmE9r', '0284d603cc18a3dd800322c69fed94db_thumb.png', ',aksjabhc', 'Delete', '2021-02-25 15:26:33', '2021-02-25 23:41:18'),
(20, 'yqBgEeDvxktSAlp2nmPw', 'ba13ac524366d444161976f34bf51bab_thumb.png', 'jghgf', 'Delete', '2021-02-25 15:34:17', '2021-02-25 23:41:15'),
(21, 'zE12l3rIZbCSgQJxj7BU', 'bf3a09f86b65a908c9930aa30b1e34da_thumb.png', 'n mvvhgc', 'Delete', '2021-02-25 15:34:29', '2021-02-25 16:36:01'),
(22, 'Oo3xT7qJnHAgsvN0GyEK', 'f3445885b227072b19e9dbec1450879b_thumb.png', 'mght', 'Delete', '2021-02-25 16:45:45', '2021-02-25 23:41:13'),
(23, 'Qc7h0Kbxk9pleD2JGAwV', '', 'xc', 'Delete', '2021-02-25 18:54:52', '2021-02-25 18:54:57');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_clients`
--
ALTER TABLE `tbl_clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
