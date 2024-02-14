-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 06:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twms`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_code` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `received_date` date NOT NULL,
  `due_date` date NOT NULL,
  `days_left` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `developer1`
--

CREATE TABLE `developer1` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `customer_code` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `received_date` date NOT NULL,
  `given_date` datetime DEFAULT current_timestamp(),
  `due_date` date NOT NULL,
  `days_left` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Triggers `developer1`
--
DELIMITER $$
CREATE TRIGGER `update_remaining_days_dev1` BEFORE INSERT ON `developer1` FOR EACH ROW BEGIN
    SET NEW.days_left = CONCAT(DATEDIFF(NEW.due_date, NEW.received_date), ' days left');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_12_27_075635_tables', 2),
(20, '2023_12_27_103336_create_customer_table', 2),
(21, '2023_12_28_111345_create_developer1_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$77l6k8lGHjKSsuA6hLCeiuuuso0cEfkOqwU1v3lSvOpeEIMmugh1W', '2023-12-28 16:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_code` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `received_date` date NOT NULL,
  `due_date` date NOT NULL,
  `days_left` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `customer_code`, `customer_name`, `received_date`, `due_date`, `days_left`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, '1802345', 'Waleed', '2024-01-04', '2024-03-14', '70', NULL, NULL, NULL),
(10, '21423', 'Ahmad', '2023-11-30', '2023-12-29', '29', NULL, '2023-12-28 18:25:42', '2023-12-28 18:25:42'),
(11, '3453', 'wafwfa', '2023-12-14', '2024-01-04', '21', NULL, '2023-12-28 18:25:52', '2023-12-28 18:25:52'),
(12, '123456', 'Younis', '2023-12-05', '2023-12-08', '3', NULL, '2023-12-28 18:26:16', '2023-12-28 18:26:16'),
(13, '789745', 'Farhan', '2023-12-18', '2023-12-30', '12', NULL, '2023-12-28 18:27:02', '2023-12-28 18:27:02'),
(14, '65745', 'Naeem', '2023-12-12', '2023-12-13', '1', NULL, '2023-12-30 16:50:03', '2023-12-30 16:50:03'),
(15, '3252', 'Taimorr', '2024-01-06', '2024-01-15', '9', NULL, '2024-01-03 23:21:35', '2024-01-03 23:21:35'),
(16, '5643', 'Ali', '2024-01-06', '2024-01-23', '17', NULL, '2024-01-03 23:21:59', '2024-01-03 23:21:59');

--
-- Triggers `tables`
--
DELIMITER $$
CREATE TRIGGER `concat_remaining_days` BEFORE INSERT ON `tables` FOR EACH ROW BEGIN
    SET NEW.days_left = CONCAT(DATEDIFF(NEW.due_date, NEW.received_date), ' days left');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_remaining_days` BEFORE INSERT ON `tables` FOR EACH ROW BEGIN
    SET NEW.days_left = DATEDIFF(NEW.due_date, NEW.received_date);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` enum('user','admin') DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$DucrJ.AqU/49Z2TzO2.UNegKVXuf5CXqUgpZ18IpCcQlto7/U1wq2', NULL, '2023-12-27 18:55:20', '2023-12-27 18:55:20', 'admin'),
(2, 'waleed', 'waleedbinather@gmail.com', NULL, '$2y$10$z8Uy1AK3hmhBgM51b2rwf.HY8mKyPrfAV1FKthqRsELfNDDd.WUni', NULL, '2024-01-05 12:39:27', '2024-01-05 12:39:27', 'user'),
(4, 'furwan', 'rizwan@gmail.com', NULL, '$2y$10$Bfkgzj88QbW9z0IFnA0PKe5bbSPkigBeOYxRhck9VWA2a211AeCvy', NULL, '2024-01-05 15:10:02', '2024-01-05 15:10:02', 'user'),
(9, 'Farhan', 'farhan@gmail.com', NULL, '$2y$10$SE.keHEVeYFLfNI9euscWO/4EUb95THw4NHKXZtuQMP7g7qaHOJCa', NULL, '2024-01-06 15:41:04', '2024-01-06 15:41:04', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customer_customer_code_unique` (`customer_code`);

--
-- Indexes for table `developer1`
--
ALTER TABLE `developer1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `developer1_customer_code_unique` (`customer_code`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tables_customer_code_unique` (`customer_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `developer1`
--
ALTER TABLE `developer1`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
