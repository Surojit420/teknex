-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2021 at 09:40 AM
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
  `image` varchar(255) NOT NULL,
  `social_media` longtext NOT NULL
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
(1, 'cnDyhuORxlXTfq8eYgVo', 'Surojit', '233dba0a38ef8007730356093dbd5519_thumb.jpg', 'Samoui', 'Delete', '2021-03-03 07:22:29', '2021-03-03 13:13:06'),
(2, 'skFhToxycVQOrm6b8DHC', 'sona', '53c3aecdd0f25f5c0f46155775d7dc57_thumb.jpg', 'babu\r\n', 'Active', '2021-03-03 13:12:30', '2021-03-03 13:12:58'),
(3, 'YbeAQMB0k7S9jlcI5imo', 'asdcddsafdf', '754ebbdcafe22694a53142860409a3ae_thumb.jpg', 'dsafd', 'Delete', '2021-03-03 13:15:23', '2021-03-03 13:15:28');

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
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `uniqcode`, `title`, `description`, `image`, `link`, `status`, `create_date`, `update_date`) VALUES
(1, '9VAl6oiMzcxg0Hkme1XY', '.,m', 'mbhg', 'bcc34db86a41951075fee637de6b2b87_thumb.jpg', 'hg', 'Delete', '2021-02-28 11:17:31', '2021-02-28 13:47:55'),
(2, 'OftQNCqD9MyYmuERT4pl', 'jbhvgcf', 'kkjhgcf', '', 'ojihuyvhg', 'Delete', '2021-02-28 11:17:39', '2021-03-03 13:52:38'),
(3, '8IbviJojzq1Osl03RQ2B', 'knvhgcfd', 'ijhugyftr', 'a3c580e010618a5e8c727969b11e1f42_thumb.jpg', 'nkjhgfd', 'Delete', '2021-02-28 11:17:50', '2021-02-28 13:47:28'),
(4, '2LwlGRi9aTrBQCYWjJXA', 'uy7rtedsn', 'nkjhgfchvbhgfvb', '9a74d8d7f3c13a33d50af7c2d978ed4a_thumb.jpg', 'njhxvg', 'Active', '2021-02-28 11:18:20', '2021-03-03 13:52:25'),
(5, 'YFGkw9pIyoBeiM0nr4Xm', 'ASCD', 'SDADS', 'a62a47f0dc30066c7c34150e4b3e9f0d_thumb.jpg', 'SD', 'Active', '2021-03-03 13:52:15', '2021-03-03 13:52:24');

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
(1, 'qg0B7WcaHrTJLNZOSFAu', 'ff75287155571bab4109cf184e3984cd_thumb.jpg', 'Logo', 'Delete', '2021-03-01 16:55:51', '2021-03-03 12:49:02'),
(2, '8ztTWs1NSdB70UuRCwlI', 'a9993cff4779ac6e6d9fb7f91fb0165b_thumb.jpg', 'Icons', 'Delete', '2021-03-01 17:01:58', '2021-03-03 12:46:10'),
(9, 'KrS8YZeb9yIEDvzAMCwP', '4a289c8cdd498845c10e47f1170e1460_thumb.jpg', 'Icons', 'Delete', '2021-03-03 12:48:50', '2021-03-03 12:50:07'),
(10, '9TlNRQJApGdyqb8L0vZx', 'a8b0d93d1f192ce908dd9dbd6fc60a31_thumb.jpg', 'Logo', 'Delete', '2021-03-03 12:50:02', '2021-03-03 13:14:42'),
(11, 'dFy138qAzZK9QRers6Df', '9a452b850797ac57444c5924e5e345ff_thumb.jpg', 'Icons', 'Delete', '2021-03-03 12:50:13', '2021-03-03 12:53:38'),
(12, 'fmbyUQxBj69piqGWFLvS', 'c37399d4847ae2bf73a14a2150999c99_thumb.jpg', 'Icons', 'Delete', '2021-03-03 12:53:53', '2021-03-03 13:05:34'),
(13, '5yXS8AJUrETCHv1Bz0Ru', 'df7a416779c31bdaab6fb4089b162c8c_thumb.jpg', 'Icons', 'Delete', '2021-03-03 13:06:52', '2021-03-03 13:09:19'),
(14, 'EPTreCaYIAMW1GkDlm47', '432cdd4d664627e13725882279c06945_thumb.jpg', 'Icons', 'Delete', '2021-03-03 13:09:30', '2021-03-03 13:09:36'),
(15, 'ZjV07fXMALzivtF4bWoc', '8a2ccee3a5b4969452bc5e009258ee21_thumb.jpg', 'Icons', 'Active', '2021-03-03 13:14:52', '2021-03-03 13:15:03'),
(16, 'EsxMQpcRHtTiB1rvh4fZ', 'fbb0bcd8ecfb6bcb340790abe88c8889_thumb.jpg', 'Logo', 'Inactive', '2021-03-03 13:14:58', '2021-03-03 13:15:03');

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
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `uniqcode`, `title_name`, `image`, `description`, `status`, `create_date`, `update_date`) VALUES
(1, 'pFR6VbtsYvzfT2XJUaq4', ',aJBHAV', '1ab0997503b37d229127805b4434fca1_thumb.jpg', 'MNbavsg', 'Delete', '2021-03-03 07:48:57', '2021-03-03 07:49:32'),
(2, 'ypBNaMSt4VsUO98XhKev', 'sacdf', '63cba6ae8ab627de604240ad3db4a702_thumb.jpg', 'qswdas', 'Active', '2021-03-03 07:49:26', '2021-03-03 13:23:37'),
(3, 'UwL9CqjuF8eidHT72PIm', 'MABJHSVG,MAKNJSBHV', '63bcc0be06036f7a18b8233de786ce18_thumb.jpg', 'KSjhwvgda', 'Delete', '2021-03-03 07:50:43', '2021-03-03 07:50:57'),
(4, 'VHmhzYc8WFvZrqOuwBQp', 'jvhcg', 'a6687fc896b269cf95ee0a5201cd5217_thumb.jpg', ',nkjhcg', 'Active', '2021-03-03 08:00:26', '2021-03-03 13:50:04'),
(5, 'saR8dqhuKm12XBNPZ3YG', 'BABUSDsxcd', '4a99fed4bfe2e0f9c93b808884f1f937_thumb.jpg', 'sadas', 'Active', '2021-03-03 13:20:56', '2021-03-03 14:06:56'),
(6, 's0FguwxUjSofD3iT58J9', 'aSDZASD', '52d75181c8b898728bb74818ad1faa9e_thumb.jpg', 'ASDF', 'Delete', '2021-03-03 13:21:39', '2021-03-03 13:25:38'),
(7, 'WFyfcJRApwnd6ZgLDKqx', 'ASCZ', '74361037f8339d789cf1fbd4c26281d1_thumb.jpg', 'SADF', 'Delete', '2021-03-03 13:50:44', '2021-03-03 13:50:52');

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
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
