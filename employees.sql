-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 01:44 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_laravel_ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `phone`, `image`, `created_at`, `updated_at`) VALUES
(10, 'Kobe Bryant', '9090909090', 'pxfuel.jpg', '2023-10-20 03:06:01', '2023-10-20 06:04:18'),
(11, 'bryant', '9090909090', 'kobe-bryant-and-screensavers-wallpaper-preview.jpg', '2023-10-20 03:58:41', '2023-10-20 06:04:29'),
(12, '24', '9090909080', 'wallpaperflare.com_wallpaper.jpg', '2023-10-20 03:58:42', '2023-10-20 05:50:04'),
(13, '24', '9090909090', 'wallpaperflare.com_wallpaper.jpg', '2023-10-20 03:58:42', '2023-10-20 03:58:42'),
(14, '24', '9090909090', 'wallpaperflare.com_wallpaper.jpg', '2023-10-20 03:58:42', '2023-10-20 03:58:42'),
(15, '24', '9090909090', 'wallpaperflare.com_wallpaper.jpg', '2023-10-20 03:58:43', '2023-10-20 03:58:43'),
(16, 'afdfa', '909009', 'francesco-bianco-TVsgRyKJDc0-unsplash.jpg', '2023-10-20 04:00:40', '2023-10-20 04:00:40'),
(17, 'hello', '909090', 'biscuit.jfif', '2023-10-20 04:42:03', '2023-10-20 04:42:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
