-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 01:29 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amenities_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `amenities_name`, `created_at`, `updated_at`) VALUES
(2, 'Abraham Oliver', NULL, NULL),
(4, 'Lisandra Boyle', NULL, NULL),
(5, 'Library', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_09_124655_create_property_types_table', 2),
(6, '2023_07_10_065639_create_amenities_table', 3),
(7, '2023_07_10_184351_create_permission_tables', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 2),
(7, 'App\\Models\\User', 20),
(8, 'App\\Models\\User', 21);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(4, 'type.menu', 'web', 'type', '2023-07-11 05:58:13', '2023-07-11 07:01:24'),
(5, 'all.type', 'web', 'type', '2023-07-11 05:58:43', '2023-07-11 07:15:34'),
(6, 'add.type', 'web', 'type', '2023-07-11 05:59:02', '2023-07-11 07:15:51'),
(7, 'edit.type', 'web', 'type', '2023-07-11 05:59:16', '2023-07-11 07:16:10'),
(8, 'delete.type', 'web', 'type', '2023-07-11 05:59:38', '2023-07-12 08:07:11'),
(11, 'state.menu', 'web', 'state', '2023-07-11 07:09:39', '2023-07-11 07:09:39'),
(12, 'all.state', 'web', 'state', '2023-07-11 07:10:01', '2023-07-11 07:10:01'),
(13, 'add.state', 'web', 'state', '2023-07-11 07:10:27', '2023-07-11 07:10:27'),
(14, 'edit.state', 'web', 'state', '2023-07-11 07:10:40', '2023-07-11 07:10:40'),
(15, 'delete.state', 'web', 'state', '2023-07-11 07:10:57', '2023-07-11 07:10:57'),
(19, 'amenities.menu', 'web', 'amenities', '2023-07-12 08:05:10', '2023-07-12 08:05:10'),
(20, 'amenities.all', 'web', 'amenities', '2023-07-12 08:05:10', '2023-07-12 08:05:10'),
(21, 'amenities.add', 'web', 'amenities', '2023-07-12 08:05:10', '2023-07-12 08:05:10'),
(22, 'amenities.edit', 'web', 'amenities', '2023-07-12 08:05:11', '2023-07-12 08:05:11'),
(23, 'amenities.delete', 'web', 'amenities', '2023-07-12 08:05:11', '2023-07-12 08:05:11'),
(24, 'agent.menu', 'web', 'agent', '2023-07-29 10:43:14', '2023-07-29 10:43:14'),
(25, 'agent.add', 'web', 'agent', '2023-07-29 10:48:04', '2023-07-29 10:48:04'),
(26, 'agent.edit', 'web', 'agent', '2023-07-29 10:48:33', '2023-07-29 10:48:33'),
(27, 'agent.all', 'web', 'agent', '2023-07-29 10:48:52', '2023-07-29 10:48:52'),
(28, 'agent.delete', 'web', 'agent', '2023-07-29 10:49:13', '2023-07-29 10:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_types`
--

CREATE TABLE `property_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_types`
--

INSERT INTO `property_types` (`id`, `type_name`, `type_icon`, `created_at`, `updated_at`) VALUES
(3, 'Commercial', 'Icon-2', NULL, NULL),
(4, 'Appertment', 'Icon-3', NULL, NULL),
(5, 'Industrial', 'Icon-4', NULL, NULL),
(6, 'Building Code', 'Icon-5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', 'web', '2023-07-12 22:04:29', '2023-07-12 22:10:52'),
(3, 'Admin', 'web', '2023-07-12 22:10:44', '2023-07-12 22:10:44'),
(4, 'Sales', 'web', '2023-07-12 22:11:45', '2023-07-12 22:11:45'),
(5, 'Manager', 'web', '2023-07-12 22:38:44', '2023-07-12 22:38:44'),
(7, 'Editor', 'web', '2023-08-14 10:39:06', '2023-08-14 10:39:06'),
(8, 'Supervisor', 'web', '2023-08-14 10:39:33', '2023-08-14 10:39:33');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(11, 1),
(11, 3),
(11, 4),
(11, 5),
(12, 1),
(12, 3),
(12, 4),
(12, 5),
(13, 1),
(13, 3),
(13, 4),
(13, 5),
(14, 1),
(14, 3),
(14, 4),
(14, 5),
(15, 1),
(15, 3),
(15, 5),
(19, 1),
(19, 3),
(19, 5),
(19, 8),
(20, 1),
(20, 3),
(20, 5),
(20, 8),
(21, 1),
(21, 3),
(21, 5),
(22, 1),
(22, 3),
(22, 5),
(23, 1),
(23, 3),
(24, 3),
(24, 8),
(25, 3),
(25, 8),
(26, 3),
(27, 3),
(27, 8),
(28, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','agent','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `photo`, `phone`, `address`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$6P98.cDNpZFi9IA2JWkICuYcMrRKsFIFYVOCg9WR0GjUKRx8rEwD.', '202308141333male-avatar.jpg', '12345', 'Nigeria', 'admin', 'active', NULL, NULL, '2023-08-14 12:33:42'),
(2, 'Godwin Tombrown Edit', NULL, 'agent@gmail.com', NULL, '$2y$10$ZoxdrfyZF6Jeom6oK4hs5u/MlxG6rOUbcHFs/8Ok.bAW/w9QzJ0JO', 'image3.png', '08069071539', '47 Iwofe/UOE road Opposite OPM Church', 'admin', 'active', NULL, NULL, '2023-08-15 07:56:22'),
(3, 'User', 'user', 'user@gmail.com', NULL, '$2y$10$ukELvIO9O6Ybjix5uNC57uwPaII/0TLNXneDTBUH5areMC7VFCzvq', NULL, '33333', NULL, 'user', 'active', NULL, NULL, NULL),
(6, 'Annabel Ledner', 'milford30', 'kim.nienow@example.org', '2023-07-06 10:41:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'https://via.placeholder.com/60x60.png/006666?text=adipisci', '1-732-814-4015', '1975 Hane Extensions\nDemetrisberg, AZ 39083', 'user', 'active', '6MxhEHOdFs', '2023-07-06 10:41:11', '2023-07-06 10:41:11'),
(7, 'Bell Ortiz PhD', NULL, 'medhurst.braulio@example.net', '2023-07-06 10:41:10', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'female3.jpg', '+1-657-317-9574', '285 Ewell RidgeNew Caterina, IL 99543', 'admin', 'active', 'wQx8ZfaFKd', '2023-07-06 10:41:11', '2023-08-15 07:47:29'),
(9, 'Usertest', NULL, 'usertest@gmail.com', NULL, '$2y$10$ZVzFqsSnVdDKdk99yoG1OOFKNZHf2BtqUWKj2WJky/bj40difZMfi', NULL, NULL, NULL, 'user', 'active', NULL, '2023-07-06 10:44:40', '2023-07-06 10:44:40'),
(11, 'Kieran Mbappe', NULL, 'kieranmbappe@gmail.com', NULL, '$2y$10$EijMAyeAulfTtxwtjhUUUec.2EkZ7SWSWNFzxtsPbmnbyOZaZY3Au', '202308141338image4.png', '+1 (626) 429-3712', 'Molestiae architecto', 'agent', 'active', NULL, NULL, '2023-08-14 12:38:57'),
(13, 'Emmanuel Elvis', NULL, 'emmaelvis@gmail.com', NULL, '$2y$10$i8w1.Gm4ESKU.ik2tIGfMe4Yc1W8/SH/Wf0RqtM.kq5mUGTPJpIBu', '202329071200Tombrown (2).jpeg', '09021223439', 'Okporo Road', 'admin', 'active', NULL, NULL, NULL),
(14, 'Ebube Madu', NULL, 'ebubemadu@gmail.com', NULL, '$2y$10$wlUm34VFRPuiMYnQfrvT4ekGTnB2QMYOUiwbNTOWEd/ZcJG2JTjZG', '202314081327image3.png', '09032425655', '79 East West Road', 'agent', 'active', NULL, NULL, NULL),
(15, 'Zahir Hanson', NULL, 'hywohabur@mailinator.com', NULL, '$2y$10$4XDM8dToxS3BNnsL9MPsfuRXG0TNW66TKl0L.5dHTCKaocKlQWpwK', '202314081340female3.jpg', '+1 (703) 903-4585', 'Ipsa temporibus sin', 'agent', 'active', NULL, NULL, NULL),
(17, 'Herman Gentry', NULL, 'mavawo@mailinator.com', NULL, '$2y$10$QTaz0O42x0bRFspVQ.e9zehxkBrxHpqx.yf.H2V0NZYaJHGj70/iq', '202308141734female_avatar.jpg', '+1 (859) 656-2806', 'Est blanditiis susci', 'admin', 'active', NULL, '2023-08-14 16:34:02', '2023-08-14 16:34:02'),
(18, 'Shad Holt', NULL, 'hudov@mailinator.com', NULL, '$2y$10$UGT1p90HVw8WXSVQ2Vn9pepjSv1/uXATlO0cz2wi018TziLfgKI8K', '202315080828female_avatar.jpg', '+1 (964) 289-8192', 'Proident provident', 'agent', 'active', NULL, NULL, NULL),
(20, 'Haney', 'Agent Honorato', 'kahikux@mailinator.com', NULL, '$2y$10$BX8.sQ6H8N4RZ4n/gGfQSexhN75cyc0eInOhuSJ/BAbMQwlvKIj/e', '202308150836female2.jpg', '+1 (735) 502-8361', 'Perspiciatis eum im', 'agent', 'active', NULL, '2023-08-15 07:34:44', '2023-08-15 07:43:19'),
(21, 'Amena Levy', 'vemubu', 'lijim@mailinator.com', NULL, '$2y$10$rQTfqYqCy6Zxnxz.pG7FZexIKABNDzgpeLirhswtt9HXFInf5549y', '202308150847male1.png', '+1 (513) 681-9005', 'Nisi iusto tempor is', 'admin', 'active', NULL, '2023-08-15 07:47:08', '2023-08-15 07:47:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `property_types`
--
ALTER TABLE `property_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_types`
--
ALTER TABLE `property_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
