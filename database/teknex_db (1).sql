-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 09:26 AM
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
  `social_media` longtext NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about_us`
--

INSERT INTO `tbl_about_us` (`id`, `uniqcode`, `company_name`, `about_title`, `description`, `short_description`, `image`, `social_media`, `status`) VALUES
(1, '5zJjabUy4r7fQLn3ScKI', 'babu', 'bjjhbjh', 'scdzvxvaxscz', 'xaSCZDvxfbcgv', 'e1b9ef08a5cff51d262d746411e71432_thumb.jpg', '', 'Delete'),
(2, 'wVToyMkR5JlWn4qSAdb7', 'khg', 'njhgfdx', 'gyftds', 'nkhjgyfxd', '051f1ef73d1314ef3d9cb71e3770c908_thumb.jpg', '', 'Active'),
(3, '13nRzyvQafxdcHTr0CSj', 'babu', 'sona', 'babu sona', 'sona babu', 'bfbbc632b2b72e66761e37ba935df37a_thumb.jpg', '', 'Active'),
(4, 'lRJn7wAyF3hTdt9CK2mk', 'a', 'SAD', 'ASDFG', 'SDF', '088837fa7450871124edce10ebbdf183_thumb.png', '', 'Active'),
(5, '9BjYXTCgUSLlO8cbGkm6', 'msanjdbh', 'asdfgasdfgh', 'Asdfgh', 'zasdfg', '5063377871e9a000dd0e148e629176e2_thumb.jpg', '', 'Active'),
(6, 'XqfdCwYVQ1FIeHNkPTJ3', 'ASDFGBsadf', 'ZASDFVGB', 'ASDFVGBH', 'SDFERGTHY', '652e4d1cbf548f2e1a601250b3e78f02_thumb.jpg', '', 'Active');

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
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `moblie_no` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `uniqcode`, `name`, `email`, `moblie_no`, `description`, `status`, `create_date`) VALUES
(1, 'zdfb', 'asczdxvaSZCd', 'babu@gmail.com', '45544455', 'jwhjhadk', 'Delete', '2021-02-02 19:19:06');

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
  `banner_type` varchar(255) NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_banner`
--

INSERT INTO `tbl_banner` (`id`, `uniqcode`, `title_name`, `image`, `description`, `banner_type`, `status`, `create_date`, `update_date`) VALUES
(1, 'cnDyhuORxlXTfq8eYgVo', 'Surojit', '233dba0a38ef8007730356093dbd5519_thumb.jpg', 'Samoui', '', 'Delete', '2021-03-03 07:22:29', '2021-03-03 13:13:06'),
(2, 'skFhToxycVQOrm6b8DHC', 'sona', '26c424b0b09a2f080e9f7bbad43c4e53_thumb.jpg', 'babu\r\n', '', 'Delete', '2021-03-03 13:12:30', '2021-03-04 14:40:36'),
(3, 'YbeAQMB0k7S9jlcI5imo', 'asdcddsafdf', '754ebbdcafe22694a53142860409a3ae_thumb.jpg', 'dsafd', '', 'Delete', '2021-03-03 13:15:23', '2021-03-03 13:15:28'),
(4, 'xipXOHYhJw650ofrlsd2', 'amnx,nxhh', 'b4550b2a350542d6d1fb3ab43532a801_thumb.jpg', 'vvnmjggh', '', 'Delete', '2021-03-03 22:17:09', '2021-03-03 22:17:30'),
(5, 'kfcoTBuCEHd1Zeth7aPA', 'babusd', 'f785f362eafc38cef293b6ed5df13a0a_thumb.jpg', 'asd', '', 'Inactive', '2021-03-04 14:40:58', '2021-03-05 13:32:52'),
(6, 'i4ZuBGfcL8RNIVC6PT9K', 'axsdfg', '79030b8865b9293c25df451721bbc9ca_thumb.jpg', 'aSDFG', '', 'Active', '2021-03-04 23:27:19', '0000-00-00 00:00:00'),
(7, '6mu7zYKQTUZacqpNgfnP', 'babu', '100f38480d45554e3a90263b3daaf316_thumb.png', 'SADFESDRGH', 'Blog', 'Inactive', '2021-03-05 12:08:58', '2021-03-05 13:32:49');

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

--
-- Dumping data for table `tbl_blogs`
--

INSERT INTO `tbl_blogs` (`id`, `uniqcode`, `title`, `description`, `image`, `status`, `create_date`, `update_date`) VALUES
(1, '1fZtaGkj9uRW2XVNrFvx', ',mnaskJZnbdsf', 'ZXcvb', '7234cb97126a976aefa6fbab3f91dd3f_thumb.jpg', 'Delete', '2021-03-04 12:44:04', '2021-03-04 18:27:59'),
(2, 'swg7hyLt89meEfaHPoGi', 'bjvhcgc', ' c', 'e80210d1e17910eca610972e0623e591_thumb.jpg', 'Delete', '2021-03-04 14:57:47', '2021-03-04 14:57:59'),
(3, '2L5o3EmaWyP4AIj1fiU0', 'babu sona', 'sona', 'f106d1b07b977e37f8a746bbfd59c93a_thumb.jpg', 'Delete', '2021-03-04 14:58:11', '2021-03-05 01:02:26'),
(4, 'vVpUDWhE03zPwmyOlFJd', 'asa,ND', 'mknjbhvgc', '6a796864f4cd96f939919e2ea92e6b31_thumb.jpg', 'Delete', '2021-03-05 01:02:37', '2021-03-05 02:07:46'),
(5, 'TmvqSWoHwcRyG9iVIZ6Q', 'nnkscankcj ncaocn ', 'nxnckasnc ia asn io noi oi io oisj', '82c3c897baeb6f66ab293565a282f246_thumb.jpg', 'Delete', '2021-03-05 01:06:01', '2021-03-05 02:07:42'),
(6, 'de2kw63HfOY7zu1B0TU5', 'babu', 'babu sona\r\n', '11e8fc092abc74a0c55f1928cce1b1b5_thumb.jpg', 'Active', '2021-03-05 01:06:13', '2021-03-05 13:54:23'),
(7, 'YoUX5dDnbNufRHJSP1xg', 'nmbvc', 'babu', '56e13f3d747fb422aa673f52529df73d_thumb.jpg', 'Active', '2021-03-05 02:08:15', '2021-03-05 13:54:02');

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
(4, '2LwlGRi9aTrBQCYWjJXA', 'uy7rtedsn', 'nkjhgfchvbhgfvb', '7dfabd750f36b1f29017724fe0d4e3d5_thumb.jpg', 'njhxvg', 'Delete', '2021-02-28 11:18:20', '2021-03-05 01:55:28'),
(5, 'YFGkw9pIyoBeiM0nr4Xm', 'babu ', 'sona1', 'd743b62adf723ba60b0322aea516b1c7_thumb.jpg', 'Sona', 'Delete', '2021-03-03 13:52:15', '2021-03-03 15:56:17'),
(6, 'CQHDg5FZbaN1AfqotXYU', 'axzcxz', 'nkbjvhgcf', '826a14fb806f7b2a5629c17cf4d9d020_thumb.jpg', 'mljkhgvc', 'Delete', '2021-03-04 14:55:27', '2021-03-04 17:48:04'),
(7, 'IjKoRZeCyTlGz2qJL7br', 'uy7rtedsnj', 'nkjhgfchvbhgfvb', '07c7bf9c3d78bf2506109862334cd3bc_thumb.jpg', 'njhxvg', 'Delete', '2021-03-05 01:41:38', '2021-03-05 01:55:24'),
(8, 'RvWKjdM3bth0Vys8Y1TS', 'babu', 'a,lmskcdnjf', 'b5dcdcc325ffae53b425f55102a41eb4_thumb.jpg', ' ,zxmcnv', 'Delete', '2021-03-05 01:56:57', '2021-03-05 01:57:23'),
(9, 'j9AgycNRFiMvslr4Xeu1', 'babu', 'xasdfgh', '', 'zxcvbnasdfgh', 'Active', '2021-03-05 01:57:32', '0000-00-00 00:00:00'),
(10, 'nufyQhLX2sYRDtPJB0c9', 'asadf', 'asdfg', '', '', 'Active', '2021-03-05 01:58:26', '0000-00-00 00:00:00'),
(11, 'qeIS1LQ6Ph9EzxjYwniD', 'XSCdvfgbh', 'asdfrgthyg', '', 'aszdxfgh', 'Active', '2021-03-05 01:59:35', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footercontact`
--

CREATE TABLE `tbl_footercontact` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `footer_copyright` varchar(255) NOT NULL,
  `contact_address` varchar(255) NOT NULL,
  `about_us` varchar(255) NOT NULL,
  `contact_us` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_footercontact`
--

INSERT INTO `tbl_footercontact` (`id`, `uniqcode`, `email`, `phone`, `image`, `footer_copyright`, `contact_address`, `about_us`, `contact_us`, `map`, `status`, `create_date`, `update_date`) VALUES
(1, 'oilPRH8gUDdnhyxN3csF', 'babu@gmail.com', '8436993263', '60cb58024a48719c48084dac34dd5761_thumb.jpg', 'akjszdxfchv', 'khugyftdrz', 'khugyftdrs', 'hjgyftdrs', '', 'Active', '2021-03-03 21:22:57', '2021-03-05 01:31:52'),
(2, 'ufsXQdY8KlHhr5EZiG19', 'sona@gmail.com', '8436993261', 'e002b05f93ccfd7861d204b13c0248d0_thumb.jpg', 'hkugyftdrs', 'Zsqwdefgb', 'ASDFGB', 'asdfgb', '', 'Active', '2021-03-03 21:52:27', '2021-03-05 01:40:00'),
(3, '50rkTIJvz9gfVcpFPoNe', 'sabjbdf@gmail.com', '1236547890', 'ac0e90dad6e8643758d5314b291d6d5a_thumb.jpg', 'vghcghf', 'nfgfjhv', 'vcbvxgfch', 'cgxfv', '', 'Delete', '2021-03-03 22:19:16', '2021-03-05 01:23:22'),
(4, 'XVmOqZru2UohRQL1JKfk', '', '', '', '', '', '', '', '', 'Delete', '2021-03-04 14:43:56', '2021-03-05 01:22:58'),
(5, 'Ms2VGLNrgRJ8THlq3wSe', 'swapan.kanrar143@gmail.com', '4551254111', '4c2ae0c4b0d47b9a9837e88da78d0efc_thumb.jpg', 'ZAXSCDVFBC', 'asdcx', 'asdvf', 'ASDFC', '', 'Delete', '2021-03-04 14:50:26', '2021-03-05 01:23:12'),
(6, 'ru9qdhmzEwAXkPLHfBV5', 'admin@gmail.com', '8436993264', '385fd152d4d06c6f715dfd527bd0e32a_thumb.jpg', 'adsfbg', 'asd', 'sadf', 'sdafv', '', 'Delete', '2021-03-04 14:54:33', '2021-03-05 01:21:26'),
(7, 'L3wWm1RhkbxqTZ4NIiMa', 'sabjbdf@gmail.com', '8436993263', 'd8f3cceaafde6808acb11c03c3ecac65_thumb.jpg', 'hkugyftdrs', 'ASXCSVZDXFCV', 'AszdXFCVB', 'ASDXFCGVB', 'Kjhasd', 'Active', '2021-03-05 01:33:44', '2021-03-05 01:35:15'),
(8, 'puPftdrUXQvj5OheD6Nz', 'Surojitsamui@007gmail.com', '8436993261', '2721cc1ce43f918e53ea27b823c814f1_thumb.jpg', 'hkugyftdrs', 'AXSDCV', 'AXSCDVFV', 'XSCDF', 'jhgfdx', 'Active', '2021-03-05 01:37:06', '2021-03-05 01:39:41');

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
(1, 'qg0B7WcaHrTJLNZOSFAu', 'ff75287155571bab4109cf184e3984cd_thumb.jpg', 'Logo', 'Delete', '2021-03-01 16:55:51', '2021-03-03 23:25:43'),
(2, '8ztTWs1NSdB70UuRCwlI', 'a9993cff4779ac6e6d9fb7f91fb0165b_thumb.jpg', 'Icons', 'Delete', '2021-03-01 17:01:58', '2021-03-03 23:25:40'),
(9, 'KrS8YZeb9yIEDvzAMCwP', '4a289c8cdd498845c10e47f1170e1460_thumb.jpg', 'Icons', 'Delete', '2021-03-03 12:48:50', '2021-03-03 23:24:45'),
(10, '9TlNRQJApGdyqb8L0vZx', 'a8b0d93d1f192ce908dd9dbd6fc60a31_thumb.jpg', 'Logo', 'Delete', '2021-03-03 12:50:02', '2021-03-03 13:14:42'),
(11, 'dFy138qAzZK9QRers6Df', '9a452b850797ac57444c5924e5e345ff_thumb.jpg', 'Icons', 'Delete', '2021-03-03 12:50:13', '2021-03-03 12:53:38'),
(12, 'fmbyUQxBj69piqGWFLvS', 'c37399d4847ae2bf73a14a2150999c99_thumb.jpg', 'Icons', 'Delete', '2021-03-03 12:53:53', '2021-03-03 13:05:34'),
(13, '5yXS8AJUrETCHv1Bz0Ru', 'df7a416779c31bdaab6fb4089b162c8c_thumb.jpg', 'Icons', 'Delete', '2021-03-03 13:06:52', '2021-03-03 13:09:19'),
(14, 'EPTreCaYIAMW1GkDlm47', '432cdd4d664627e13725882279c06945_thumb.jpg', 'Icons', 'Delete', '2021-03-03 13:09:30', '2021-03-03 13:09:36'),
(15, 'ZjV07fXMALzivtF4bWoc', '8a2ccee3a5b4969452bc5e009258ee21_thumb.jpg', 'Icons', 'Delete', '2021-03-03 13:14:52', '2021-03-03 22:13:15'),
(16, 'EsxMQpcRHtTiB1rvh4fZ', 'fbb0bcd8ecfb6bcb340790abe88c8889_thumb.jpg', 'Logo', 'Delete', '2021-03-03 13:14:58', '2021-03-03 22:13:50'),
(17, '2H6sbC1Toil7cFeEj0MG', '9264b97ac3cf3f5d2d3b89a3a32a238e_thumb.jpg', 'Logo', 'Delete', '2021-03-03 22:14:45', '2021-03-03 23:23:17'),
(18, 'H24uYSTjyGCn1fQkslDp', 'c585896105d1a9d66ba5ef9de4b71950_thumb.jpg', 'Icons', 'Delete', '2021-03-03 22:15:05', '2021-03-03 22:57:06'),
(19, 'wGWOqnQTsoJIMLhjpbc5', 'c5ab862c5094905744de652c88004806_thumb.jpg', 'Logo', 'Delete', '2021-03-03 23:28:20', '2021-03-05 02:18:03'),
(20, 'a7lfZbI0BSeg1NyQEcXi', 'f1042b254e79930cdf3fc1c012676bab_thumb.jpg', 'Icons', 'Delete', '2021-03-04 12:38:40', '2021-03-05 02:13:52'),
(21, 'UfLCQa6rFv5pHBi48nIK', '1953e69c6c4fb28cdd629f372834362f_thumb.jpg', 'Logo', 'Delete', '2021-03-05 02:18:15', '2021-03-05 02:29:51'),
(22, 'rsLf982AM3BapuIgPTqW', '5dd007892c8944e9d63d80d075e0f7c4_thumb.jpg', 'Icons', 'Delete', '2021-03-05 02:19:20', '2021-03-05 02:22:07'),
(23, '2R7rn5oaLdcbPj3OIHU1', '4c2ae68c4980f5bea116f89acf8e89a9_thumb.jpg', 'Icons', 'Delete', '2021-03-05 02:24:07', '2021-03-05 02:26:19'),
(24, '5ihfPTtbEpKeWYJH1kyo', '38365735f9c37c06b6ddb070b963d4ee_thumb.jpg', 'Icons', 'Delete', '2021-03-05 02:26:29', '2021-03-05 02:27:43'),
(25, 'Cvmzu9HarOdhT5pJWwFZ', 'f239d160d0a68f1bd07d52c9889a4431_thumb.jpg', 'Icons', 'Delete', '2021-03-05 02:27:50', '2021-03-05 02:27:52'),
(26, 'Z95i7YmfD63NILJ2OAkb', 'a554d6b4f76f0c0fe0cc17e4d874941d_thumb.jpg', 'Icons', 'Delete', '2021-03-05 02:29:46', '2021-03-05 02:29:55'),
(27, 'riGTKCJvdN5ofhxUHIpR', 'cbd0e5bc13f58c4cdc269b7d726bc9fd_thumb.jpg', 'Logo', 'Delete', '2021-03-05 02:36:24', '2021-03-05 03:03:07'),
(28, 'DKFvIWNoLAdkOZuYwQ97', '8e6d3651fcce250d654d5d1f9671c036_thumb.jpg', 'Icons', 'Active', '2021-03-05 02:54:54', '2021-03-05 03:03:00'),
(29, 'YAUekywNVcRfQ20MXlg6', '59c72aaa87db8f9703b697f3ffca79d6_thumb.jpg', 'Logo', 'Delete', '2021-03-05 03:03:16', '2021-03-05 11:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_query`
--

CREATE TABLE `tbl_query` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `massage` varchar(255) NOT NULL,
  `date_time` datetime NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_query`
--

INSERT INTO `tbl_query` (`id`, `uniqcode`, `name`, `email`, `massage`, `date_time`, `status`, `image`) VALUES
(1, 'ffdfdd', 'babu sona', 'surojitsamui@gmail.com', 'sahdsajhdas qij beqebqjen 2eq nqen2k', '2021-03-17 15:59:38', 'Active', '');

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
(4, 'VHmhzYc8WFvZrqOuwBQp', 'jvhcg', 'a6687fc896b269cf95ee0a5201cd5217_thumb.jpg', ',nkjhcg', 'Delete', '2021-03-03 08:00:26', '2021-03-05 02:01:03'),
(5, 'saR8dqhuKm12XBNPZ3YG', 'sacdf', '3db62224afbf7a1d920a60126986d9b3_thumb.jpg', 'sadas', 'Active', '2021-03-03 13:20:56', '2021-03-05 02:04:12'),
(6, 's0FguwxUjSofD3iT58J9', 'aSDZASD', '52d75181c8b898728bb74818ad1faa9e_thumb.jpg', 'ASDF', 'Delete', '2021-03-03 13:21:39', '2021-03-03 13:25:38'),
(7, 'WFyfcJRApwnd6ZgLDKqx', 'ASCZ', '74361037f8339d789cf1fbd4c26281d1_thumb.jpg', 'SADF', 'Delete', '2021-03-03 13:50:44', '2021-03-03 13:50:52'),
(8, 'TWXubiEsopldIDh0KQkz', 'BABU', 'c5098073f87d4a6e147a35cf89007fe0_thumb.jpg', 'fdjhfvk', 'Delete', '2021-03-03 22:20:28', '2021-03-03 22:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonials`
--

CREATE TABLE `tbl_testimonials` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `moblie_no` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `uniqcode`, `name`, `email`, `moblie_no`, `image`, `description`, `position`, `status`, `create_date`) VALUES
(1, 'sad', 'asd', 'babu@gmil.com', '8496333268', 'aas', 'sdsdcfv', 'sdacvf', 'Active', '2021-02-02 19:19:06');

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
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
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
-- Indexes for table `tbl_footercontact`
--
ALTER TABLE `tbl_footercontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_query`
--
ALTER TABLE `tbl_query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about_us`
--
ALTER TABLE `tbl_about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_footercontact`
--
ALTER TABLE `tbl_footercontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_query`
--
ALTER TABLE `tbl_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
