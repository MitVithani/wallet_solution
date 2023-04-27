-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 04:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet_solution_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 'name', 'admin@gmail.com', '9904914079', '2023-04-01 01:05:02', '2023-04-01 01:05:02'),
(2, 'name', 'longestvision01@gmail.com', '9904914079', '2023-04-01 01:11:39', '2023-04-01 01:11:39'),
(3, 'mit', 'mit.vithani@innovation-kite.com', '9904914079', '2023-04-04 10:30:13', '2023-04-04 10:30:13'),
(4, 'mit', 'mit.vithani@gmail.com', '9904914079', '2023-04-04 10:45:51', '2023-04-04 10:45:51'),
(5, 'mit', 'amit@gmail.com', '9904914079', '2023-04-09 11:13:05', '2023-04-09 11:13:05'),
(6, 'mit', 'test@gmail.com', '9904914079', '2023-04-23 06:13:59', '2023-04-23 06:13:59'),
(7, 'mit', 'am@gmail.com', '9904914090', '2023-04-23 08:33:49', '2023-04-23 08:33:49'),
(8, 'Mit', 'mit@gmail.com', '99049214079', '2023-04-23 10:31:27', '2023-04-23 10:31:27'),
(9, 'mit vithani', 'longestvision01@gmail.com', '09904914079', '2023-04-24 23:31:42', '2023-04-24 23:31:42'),
(10, 'mit vithani', 'longestvision01@gmail.com', '09904914079', '2023-04-27 09:03:46', '2023-04-27 09:03:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `additional_details` text NOT NULL,
  `describe_item` longtext NOT NULL,
  `discount_type` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(100) NOT NULL,
  `is_delivery` varchar(100) NOT NULL DEFAULT 'off',
  `is_visible` varchar(100) NOT NULL DEFAULT 'off',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf16 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `user_id`, `price`, `additional_details`, `describe_item`, `discount_type`, `discount`, `discount_price`, `quantity`, `is_delivery`, `is_visible`, `created_at`, `updated_at`) VALUES
(10, 'name villein', 6, '110', '21', '12', 'flat', '200', '-90', '1', 'off', 'off', '2023-03-15 06:28:01', '2023-04-23 06:03:47'),
(11, 'nacho product', 6, '25', 'Additional details', 'Describe for item', NULL, NULL, '25', '6', 'off', 'off', '2023-04-09 08:00:43', '2023-04-22 22:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf16 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `p_id`, `image`, `created_at`, `updated_at`) VALUES
(15, 10, 'public/media/images/16788814816411b2c912890file_example_PNG_500kB.png', '2023-03-15 06:28:01', '2023-03-15 06:28:01'),
(16, 10, 'public/media/images/16788814816411b2c913caffile_example_JPG_500kB.jpg', '2023-03-15 06:28:01', '2023-03-15 06:28:01'),
(17, 10, 'public/media/images/16788814816411b2c9151e0WhatsApp Image 2022-03-16 at 10.45.26 AM.jpeg', '2023-03-15 06:28:01', '2023-03-15 06:28:01'),
(18, 10, 'public/media/images/16788814816411b2c915fc8file_example_JPG_500kB.jpg', '2023-03-15 06:28:01', '2023-03-15 06:28:01'),
(19, 11, 'public/media/images/16810470436432be03f0b67Hotpot (3).png', '2023-04-09 08:00:44', '2023-04-09 08:00:44');

-- --------------------------------------------------------

--
-- Table structure for table `share_links`
--

CREATE TABLE `share_links` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rand_link` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '0-padding, 1-success',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `share_links`
--

INSERT INTO `share_links` (`id`, `user_id`, `rand_link`, `status`, `created_at`, `updated_at`) VALUES
(5, 6, 'Ni8zMTcx', 1, '2023-04-23 08:33:31', '2023-04-23 12:20:26'),
(6, 6, 'Ni8xMDQ3', 0, '2023-04-24 23:31:32', '2023-04-24 23:31:32'),
(7, 6, 'Ni83ODQ5', 0, '2023-04-25 23:48:04', '2023-04-25 23:48:04'),
(8, 6, 'Ni8xNzE=', 0, '2023-04-27 04:55:51', '2023-04-27 04:55:51'),
(9, 6, 'Ni82MzY2', 0, '2023-04-27 08:53:27', '2023-04-27 08:53:27');

-- --------------------------------------------------------

--
-- Table structure for table `share_url_datas`
--

CREATE TABLE `share_url_datas` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `link_end_point` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `share_url_products`
--

CREATE TABLE `share_url_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `share_link_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` varchar(255) NOT NULL,
  `describe_item` varchar(255) DEFAULT NULL,
  `discount_type` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `discount_price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `share_url_products`
--

INSERT INTO `share_url_products` (`id`, `user_id`, `share_link_id`, `product_id`, `price`, `describe_item`, `discount_type`, `discount`, `discount_price`, `quantity`, `created_at`, `updated_at`) VALUES
(10, 6, 5, 11, '25', 'Describe for item', NULL, NULL, '25', '6', '2023-04-23 14:03:31', '2023-04-23 14:03:31'),
(9, 6, 5, 10, '110', '12', 'flat', '200', '-90', '1', '2023-04-23 14:03:31', '2023-04-23 14:03:31'),
(11, 6, 6, 10, '110', '12', 'flat', '200', '-90', '1', '2023-04-25 05:01:32', '2023-04-25 05:01:32'),
(12, 6, 6, 11, '25', 'Describe for item', NULL, NULL, '25', '6', '2023-04-25 05:01:32', '2023-04-25 05:01:32'),
(13, 6, 7, 10, '110', '12', 'flat', '200', '-90', '1', '2023-04-26 05:18:04', '2023-04-26 05:18:04'),
(14, 6, 7, 11, '25', 'Describe for item', NULL, NULL, '25', '6', '2023-04-26 05:18:04', '2023-04-26 05:18:04'),
(15, 6, 8, 10, '110', '12', 'flat', '200', '-90', '1', '2023-04-27 10:25:51', '2023-04-27 10:25:51'),
(16, 6, 8, 11, '25', 'Describe for item', NULL, NULL, '25', '6', '2023-04-27 10:25:51', '2023-04-27 10:25:51'),
(17, 6, 9, 10, '110', '12', 'flat', '200', '-90', '1', '2023-04-27 14:23:27', '2023-04-27 14:23:27'),
(18, 6, 9, 11, '25', 'Describe for item', NULL, NULL, '25', '6', '2023-04-27 14:23:27', '2023-04-27 14:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_admin` int(11) DEFAULT 0,
  `shop_name` varchar(255) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `tax_number` varchar(255) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `address` text NOT NULL,
  `status` enum('padding','active','deactive') NOT NULL DEFAULT 'padding',
  `city_name` varchar(255) NOT NULL,
  `bank_iban` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `is_admin`, `shop_name`, `phone_number`, `email`, `password`, `logo`, `company_name`, `tax_number`, `otp`, `address`, `status`, `city_name`, `bank_iban`, `created_at`, `updated_at`) VALUES
(1, 'Mit Vithani1', 1, 'q', '09313242813', 'admin@gmail.com', '$2y$10$ti96Hl5dJNFu9oJkiaEgXe/.IdQjQ4mcdK2RhHkYX0SBrbkHiw9xS', '167758692363fdf1eb03b80.png', 'Longest Vision', 'q', NULL, '38 gopinath banglows', 'padding', 'surat', 'eqq', '2023-02-27 05:43:43', '2023-03-23 12:49:21'),
(2, 'Mit Vithani', 0, 'q', '09313242813', 'mit@gmail.com', '$2y$10$ti96Hl5dJNFu9oJkiaEgXe/.IdQjQ4mcdK2RhHkYX0SBrbkHiw9xS', '167758693363fdf1f521299.JPG', 'Longest Vision', 'q', NULL, '38 gopinath banglows', 'deactive', 'surat', 'eqq', '2023-02-27 05:43:43', '2023-03-23 07:26:31'),
(4, 'mit vithani', 0, 'aa', '9904914079', 'longestvision01@gmail.com', '$2y$10$pt6tQQsSfSEmYfhD7M/jX./w23r6dA4w4.e.045wHNwyd/hTmgn.i', '167757642563fdc8e92ad0a.png', 'longest', '1', 1034, 'surat', 'padding', 'surat', '21', '2023-02-27 22:27:05', '2023-03-23 12:57:24'),
(5, 'mit vithani', 0, 'a', '09904914079', 'longestvision02@gmail.com', '$2y$10$Fk8pTue.drz5Jpsk8MmmHOjDBNMkB52JmTOeeKuFXbv7q5ULgCeuO', '167757707963fdcb779d468.png', 'longest', '4', NULL, 'surat', 'padding', 'surat', '1', '2023-02-27 22:37:59', '2023-03-23 12:57:25'),
(6, 'Amit test', 0, 'Amit shop', '1234567890', 'amit@gmail.com', '$2y$10$O0GGR4Sn2TLxrqyt9wyacO4e76OAbD5n2se52hruFQpLQTY3Y/fMa', '167758824063fdf710a09b2.png', 'longest', '14', NULL, 'surat', 'padding', 'surat', '21', '2023-02-28 01:43:41', '2023-03-23 12:57:27'),
(8, 'name', 0, 'amit', '9904914075', 'longestvision05@gmail.com', '$2y$10$WPNExO.HRTyno6YZlY8cNuKF2UhOgnIRmVbHpF8UNvxRKvunnXiO2', '16793168066418574688159file_example_PNG_500kB.png', 'ABC', '526', NULL, 'hari', 'padding', 'surat', NULL, '2023-03-20 07:23:26', '2023-03-23 12:57:30'),
(9, 'name', 0, 'amit', '9904914071', 'longestvision10@gmail.com', '$2y$10$SD/IJeAIMvLenp.tYu.u6eMD986lTZD5YOJiwdVH3ae2n.sxDECfG', '1679321039641867cfe5680lab-g8e50c32bd_640.jpg', 'ABC', '526', NULL, 'hari', 'padding', 'surat', NULL, '2023-03-20 08:33:59', '2023-03-23 12:57:28'),
(10, 'mit', 0, 'crazzy', '9904914090', 'amit_wallet@gmail.com', '$2y$10$2ZlWXwamnustcyByACZKdOAgsvSJmjA.OBMmwCKZsqfGWWJSl0v3a', '168215267664439ce461042Hotpot (5).png', 'hari', '12', NULL, 'test', 'padding', 'surat', '45', '2023-04-22 03:07:56', '2023-04-22 03:07:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_links`
--
ALTER TABLE `share_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_url_datas`
--
ALTER TABLE `share_url_datas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `share_url_products`
--
ALTER TABLE `share_url_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `share_links`
--
ALTER TABLE `share_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `share_url_datas`
--
ALTER TABLE `share_url_datas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `share_url_products`
--
ALTER TABLE `share_url_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
