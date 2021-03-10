-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 06:24 PM
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
-- Database: `abhishek_web`
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
(7, 'PxpqyaWKdg95kjYuA6IR', 'about', 'We Are Increasing Business Success With Technology', 'We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying\r\n', 'Over 25 years working in IT services developing software applications and mobile apps for clients all over the world.', '5c16898bda90696a308c74dc9db63397_thumb.png', '', 'Active'),
(8, 'Qn0qFp4Lvgk7lft8aYCj', 'abouts ', 'company ', 'ver 25 years working in IT services developing software', 'We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; ', '3d1cbae48422c9163f6f08b8edd8d5cf_thumb.png', '', 'Active');

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
(2, '', 'admin@gmail.com', '', '7ece99e593ff5dd200e2b9233d9ba654', '', '', 'Active', '', '0000-00-00 00:00:00');

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
(4, 'rMePvT2VtzXRgc1ks3YS', 'sdcvfb', 'asd@gmail.com', '44444', 'knhjgcf', 'Inactive', '2021-03-10 11:16:14');

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
(11, 'U9gdrqTv3wX0JuRV1CLW', 'IT Consulting Services For Your Business', '17c7fa22f6728381c8b3949311a373a8_thumb.jpg', 'We are leading technology solutions providing company all over the world doing over 40 years.', 'Home Banner', 'Active', '2021-03-08 19:26:07', '2021-03-10 18:50:17'),
(12, 'AM6RDn815cj7Sazl4otg', 'IT Consulting Services ', '39e35aee049f29d51cb29dcf76f7b1f1_thumb.jpg', 'Image result for a software blog description\r\nA blogging platform is a software or service used to manage and publish content on the internet in the form of a blog. A blog—short for weblog—is a record of a user\'s entries online, usually in reverse chronological order. Learn more about blogging platforms and how they work.', 'Blog', 'Active', '2021-03-08 23:03:05', '2021-03-10 18:50:16'),
(13, 'trxFzugpBQW3mv5cA4JR', ' Services For Your Business', '9211c2071fc2dfdd13d787f7c43c9111_thumb.jpg', 'The software comprises the entire set of programs, procedures, and routines associated with the operation of a computer system. The term was coined to differentiate these instructions from hardware—i.e., the physical components of a computer system.', 'About', 'Active', '2021-03-08 23:11:30', '2021-03-10 18:50:13'),
(14, 'UkfXZpmghi9buH6l2B8M', 'xdcv b', '6a37eeccbe299ff11394a05c83d92bfd_thumb.jpg', 'scdvfgb', 'Home Banner', 'Delete', '2021-03-09 22:04:23', '2021-03-10 16:28:12'),
(15, 'PpxEMAjuZn67VKhQybaH', 'project', 'b7f00eccca2074028ca5297e330e4915_thumb.jpg', 'this is a project', 'Project', 'Active', '2021-03-10 15:42:01', '2021-03-10 18:50:12'),
(16, 'ScZKAvMb0N5TizkVux9r', 'testimonials', '8a8669810d7365102462141c1aac81e1_thumb.jpg', 'Google\'s dictionary definition of testimonial is \"a formal statement testifying to someone\'s character and qualifications.\" These usually come from customers, colleagues, or peers who have benefitted from or experienced success as a result of the work you did for them.', 'Testimonials', 'Active', '2021-03-10 16:36:44', '2021-03-10 18:50:10'),
(17, '865kv3OLRTlQ04f9imhB', 'product', '7683d7a46f617b849726786308ddad6a_thumb.jpg', 'this is a product', 'Product', 'Active', '2021-03-10 16:57:35', '2021-03-10 18:50:08'),
(18, 'wMXhQvsopW87PUxjnZFt', 'asdfghb', 'c82594d50fd9d3684f4dd274b2c83a4d_thumb.jpg', 'asdxfcvb ', 'Home Banner', 'Delete', '2021-03-10 17:01:10', '2021-03-10 17:01:19'),
(19, 'BFNs2GbUhJvmeZK7qHVT', 'contact', '02ec690f5c9d6dce474c7d7cb86ea45c_thumb.jpg', 'this is a contact', 'Contact', 'Active', '2021-03-10 18:51:57', '0000-00-00 00:00:00');

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
(3, 'DoU7KTQvpIBxbF89OZwj', 'Open Source Job Report Show More Openings Fewer', 'We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that...', '117da63ab4ed116ea83f64c73f4c465d_thumb.jpg', 'Active', '2021-03-08 22:58:07', '2021-03-10 19:00:55');

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
(12, '3loNLAaIBUmetvxOQcFK', 'salesfoce', 'Project descriptions provide the following details to the applicants: the problem the project will address, a set of goals for the project, the overall objectives for the project, as well as a project plan that describes the activities the members will un', '4f9544452f46b0224bc531620a69331c_thumb.png', 'https://abhishekbajaj-ca.webnode.com/', 'Active', '2021-03-08 23:31:45', '2021-03-10 19:05:55'),
(13, 'XG9oUFkTEOhePDH8gLzW', 'software', 'Nowadays, we have tremendous capabilities for creating nearly all kinds of software to fulfill the needs of customers. We can apply agile practices for reacting flexibly to changing requirements, we can use distributed development, open-source, or other m', '5b000341c1f06414e4cc79265b2909e9_thumb.png', 'https://abhishekbajaj-ca.webnode.com/', 'Active', '2021-03-09 12:37:57', '2021-03-10 19:05:53'),
(14, 'mUclXT6vPbaYDRFLZ0u4', 'P R G', 'Image result for prg project description\r\nPRG Projects is a division of the Production Resource Group, which specializes in developing and integrating proprietary solutions to the rigors of the production and entertainment industry.', 'b6392b59295dbc604a2f314250c049d5_thumb.png', 'https://abhishekbajaj-ca.webnode.com', 'Active', '2021-03-09 12:41:15', '2021-03-10 19:05:50');

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
  `social` longtext NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_footercontact`
--

INSERT INTO `tbl_footercontact` (`id`, `uniqcode`, `email`, `phone`, `image`, `footer_copyright`, `contact_address`, `about_us`, `contact_us`, `map`, `social`, `status`, `create_date`, `update_date`) VALUES
(1, 'FZ6XrOabmCePJT8oWwif', 'nitsplindia@gmail.com', '8436993268', 'de99e1c12a58f49c513988ed244ba433_thumb.jpg', 'Copyright © 2021 Niche Integrated Techno Solution Pvt. Ltd. | All Rights Reserved.', 'Dum Dum Cantonment,Near pump house,Kolkata -700065, India', '', '', '', 'a:4:{s:8:\"facebook\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:11:\"pinterest-p\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:7:\"twitter\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:9:\"instagram\";s:45:\"https://www.facebook.', 'Delete', '2021-03-10 13:14:56', '2021-03-10 15:30:32'),
(2, 'bDGKfQlj8Be5Iz36L047', 'ASDASZX@GAMIL.COM', '111541', 'df3a20857a52c30459417d2320a32d92_thumb.jpg', 'SADCVF', 'ASSDVF', '', '', '', 'a:4:{s:8:\"facebook\";s:9:\"ASADZCSDC\";s:11:\"pinterest-p\";s:5:\"asdvf\";s:7:\"twitter\";s:3:\"ASD\";s:9:\"instagram\";s:6:\"asdcfv\";}', 'Delete', '2021-03-10 15:11:25', '2021-03-10 15:32:29'),
(3, 'BqCdQlI4m9GPwMsr1JV2', 's@gamil.com', '545', '07a0454e70c0fd77b113f315dd185bb4_thumb.png', 'qswdefrdbg', 'qwdefrv', '', '', 'qwdesf', 'a:4:{s:8:\"facebook\";s:8:\"qswdaefs\";s:11:\"pinterest-p\";s:5:\"wdefr\";s:7:\"twitter\";s:5:\"qwdef\";s:9:\"instagram\";s:6:\"qwedfr\";}', 'Delete', '2021-03-10 15:33:14', '2021-03-10 15:33:22'),
(4, 'vBIOK210ZwqsiPygR6Hb', 'nitsplindia@gmail.com', '8436993268', '7c8eeb65d1eac0f34693b0fbae7bb53e_thumb.jpg', 'Copyright © 2021 Niche Integrated Techno Solution Pvt. Ltd. | All Rights Reserved.', 'Dum Dum Cantonment,Near pump house,Kolkata -700065, India', '', '', '', 'a:4:{s:8:\"facebook\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:11:\"linkedin\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:7:\"twitter\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:9:\"instagram\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";}', 'Delete', '2021-03-10 15:34:33', '2021-03-10 17:01:28'),
(5, 'g4NoV6WXZyjLAJsKv8nB', 'nitsplindia@gmail.com', '8452136970', 'a8def71c1c3332b8b00f2e45780a0cff_thumb.jpg', 'Copyright © 2021 Niche Integrated Techno Solution Pvt. Ltd. | All Rights Reserved.', 'Dum Dum Cantonment,Near pump house,Kolkata -700065, India', 'Sedut perspiciatis unde omnis iste natus error sitlutem acc usantium doloremque denounce with illo inventore veritatis', '', '', 'a:4:{s:8:\"facebook\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:8:\"linkedin\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:7:\"twitter\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";s:9:\"instagram\";s:45:\"https://www.facebook.com/nit.solution.pvt.ltd\";}', 'Active', '2021-03-10 16:10:39', '2021-03-10 19:00:05');

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
(2, 'FEuTht32SyeadnXkwz6f', 'cdded3ca0946772d519bb01ea6f1d8ba_thumb.png', 'Logo', 'Active', '2021-03-08 17:58:39', '2021-03-10 22:06:56'),
(3, 'FhV5btxvMyLjIEoiGwO2', '3726fc32daf02286a94733cc69df7be2_thumb.png', 'Icons', 'Active', '2021-03-08 17:58:56', '2021-03-10 22:07:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `uniqcode`, `title`, `description`, `image`, `link`, `status`, `create_date`, `update_date`) VALUES
(1, 'zeomsO5XWnwj9LMaGKAB', ',mknjbhvg', 'mknbjvhgcf', '350435397bf47f6d2737aaa4d0e7553e_thumb.jpg', '', 'Active', '2021-03-09 13:18:10', '2021-03-10 19:00:22'),
(2, 'oG1cUu3TmIXxDa5ybQL2', 'nkjbh', 'zAXSC', 'dbf1e9345a81ebaeac89e0f00cefdc1d_thumb.jpg', '', 'Active', '2021-03-09 13:19:58', '2021-03-10 19:00:21'),
(3, 'DhtNHE3OVasY2Lb0dZWX', ',lkjhv', 'lmqwknjbhdvge', 'b0e563885e7c9a494a1221b17b3e6ac2_thumb.png', '', 'Active', '2021-03-09 13:20:37', '2021-03-10 19:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_query`
--

CREATE TABLE `tbl_query` (
  `id` int(11) NOT NULL,
  `uniqcode` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `moblie_no` varchar(20) NOT NULL,
  `website` varchar(255) DEFAULT NULL,
  `massage` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(9, 'tEIb0p1nOQc9ND5jeYsZ', 'Healthcare Provider', 'f9d143b58619524de08896940b6a89aa_thumb.png', 'Full proficiency in EMR / EHR, Population Health Management, Care Analytics and Care Management Patient & Provider portal, Long Term and Home Health applications', 'Active', '2021-03-08 19:28:11', '2021-03-10 19:00:37'),
(10, 'hmY8E2yfu4ZkjTceBgn6', 'Banking, Finance Services & Insurance', 'fe657701bb07c890cff7dcd338eb3dc0_thumb.png', 'Core Banking, Retail and Investment Banking, Asset & Wealth management', 'Active', '2021-03-08 19:29:21', '2021-03-10 19:00:35'),
(11, 'wqjNgpLBkV76rc94MsIJ', 'Healthcare Payer', '0c75f750233d2d1844c297daf1e3ba2e_thumb.png', 'Claims life cycle, Revenue Cycle Management, Case & Disease Management, Value Based Benefit Design', 'Active', '2021-03-08 19:29:54', '2021-03-10 19:00:33'),
(12, 'J4T7KRmEQ1YkNS5odOIF', 'Smart City and Internet of Things (IoT)', 'b7ef8711d5b85efc0b4a07b59d8e74e3_thumb.jpg', 'Smart City with industry verticals like Lighting, Parking, Waste Management, Safety & Security, Mobility and Health. Understanding of Manufacturing and Industrial IoT', 'Active', '2021-03-08 19:30:18', '2021-03-10 19:00:32'),
(13, 'hrx7tTY1K3afdXDvspZN', 'Salesforce Consulting', '429d2c4f828c9595dea850ac51b9570a_thumb.png', 'End-to-end functional, technical and solutions expertise in Salesforce Sales, Marketing , Service, Health and eCommerce cloud CRMs.', 'Active', '2021-03-08 19:30:41', '2021-03-10 19:00:30'),
(14, 'Mb6NJspxfvVke8cBgYow', 'Web Development', '1deb1606cd807e58795b11f24d4c4c11_thumb.png', 'At vero eos et accusamus etiusto odio praesentium accusamus etiusto odio data center for managing database.', 'Delete', '2021-03-08 19:31:40', '2021-03-10 19:00:41');

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
  `position` varchar(255) DEFAULT NULL,
  `status` enum('Inactive','Active','Delete') NOT NULL,
  `create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_testimonials`
--

INSERT INTO `tbl_testimonials` (`id`, `uniqcode`, `name`, `email`, `moblie_no`, `image`, `description`, `position`, `status`, `create_date`) VALUES
(4, '3FvpLixVlZemMhEB9w1q', 'Soumen Mondal', 'soumen@gmail.com', '09564077104', 'testimonials.png', 'developer', 'developer', 'Active', '2021-03-09 13:57:02'),
(5, 'trJVDgG9X0f28IkNRKbL', 'surojit', 'surojitsamui007gmail.com', '5478998745', 'testimonials.png', 'sadc', 'sadc', 'Active', '2021-03-09 22:01:12'),
(6, '3uBwK4JWVkjcTsUqi7mZ', 'sad', 'asad@gmail.com', '7896541230', 'testimonials.png', 'sad', 'sad', 'Active', '2021-03-09 22:02:08');

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
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_banner`
--
ALTER TABLE `tbl_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_blogs`
--
ALTER TABLE `tbl_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_footercontact`
--
ALTER TABLE `tbl_footercontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_logo`
--
ALTER TABLE `tbl_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_query`
--
ALTER TABLE `tbl_query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_testimonials`
--
ALTER TABLE `tbl_testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
