CREATE DATABASE IF NOT EXISTS db_ets;
USE db_ets;

CREATE TABLE `communities` (
  `community_id` int(11) NOT NULL,
  `community_name` varchar(45) NOT NULL,
  `village_id` int(11) NOT NULL,
  `contact_name` varchar(45) NOT NULL,
  `community_desc` text NOT NULL,
  `community_logo` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `communities` (`community_id`, `community_name`, `village_id`, `contact_name`, `community_desc`, `community_logo`, `created_at`, `updated_at`) VALUES
(6, 'Kecak Fire Dance', 0, '', '', '', '2023-10-14 17:37:00', '2023-10-14 17:37:00'),
(7, 'Bali Dance Club', 0, '', '', '', '2023-10-14 19:50:44', '2023-10-14 19:50:44'),
(8, 'Ubud Kecak', 0, '', '', '', '2023-10-14 19:50:59', '2023-10-14 19:50:59');

CREATE TABLE `disc` (
  `disc_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `date_from` date DEFAULT NULL,
  `date_end` date DEFAULT NULL,
  `refferal_code` varchar(45) NOT NULL,
  `disc_percent` decimal(10,0) NOT NULL,
  `disc_nominal` decimal(10,0) NOT NULL,
  `min_transaction` decimal(10,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_14_220821_add_permalink_to_packages', 2);


CREATE TABLE `packages` (
  `package_id` int(11) NOT NULL,
  `package_code` varchar(10) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `permalink` varchar(100) DEFAULT NULL,
  `package_desc` text DEFAULT NULL,
  `feature_img` varchar(300) DEFAULT NULL,
  `location_id` int(11) DEFAULT NULL,
  `community_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `packages` (`package_id`, `package_code`, `package_name`, `permalink`, `package_desc`, `feature_img`, `location_id`, `community_id`, `created_at`, `updated_at`) VALUES
(6, 'p001', 'Barong Dance', '0', 'Barong Dance Description', '', 0, 6, '2023-10-14 19:53:06', '2023-10-14 19:53:06'),
(7, 'p002', 'Kecak', '0', 'Kecak Description', '', 0, 7, '2023-10-14 19:51:47', '2023-10-14 19:51:47');

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `rates` (
  `rate_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `rate_name` varchar(45) NOT NULL,
  `date_from` date DEFAULT NULL,
  `date_end` date NOT NULL,
  `qty_per_day` int(11) NOT NULL,
  `adult_rate` decimal(10,0) NOT NULL,
  `child_rate` decimal(10,0) NOT NULL,
  `infant_rate` decimal(10,0) NOT NULL,
  `foreign_adult_rate` decimal(10,0) NOT NULL,
  `foreign_child_rate` decimal(10,0) NOT NULL,
  `foreign_infant_rate` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mashita Dewi', 'boonoft@gmail.com', NULL, '$2y$10$DXlYjMTa3r0jENsYz7jmL.iHc1QpTMLr0C65y2S8/qP7RGP7wU/hq', NULL, '2023-10-11 17:24:03', '2023-10-11 17:24:03'),
(2, 'Wan Sabrina Mayzura', 'wansabrina.ws@gmail.com', NULL, '$2y$10$tsXas3tKELk7sTjtDc5A5.KijJVYZPQmdIFGUpl8SH6xWEN7LnZG.', NULL, '2023-10-14 12:09:18', '2023-10-14 12:09:18');
(3, 'Tsabita Putri Ramadhany', 'bitharamadhany@gmail.com', NULL, '$2y$10$6/BwQ8bNRZUOGXsk7xiFw.4w1hUCEVi5DliqzTEOB5Gu9Uh91q2cO', 'gbhLyBeOcd8ObolaIg9lQ9tcPNkdL19Ck82GhOANNTEcn6twEMgI1cXDxCGT', '2023-10-25 18:40:30', '2023-10-25 18:40:30');

ALTER TABLE `communities`
  ADD PRIMARY KEY (`community_id`);

ALTER TABLE `disc`
  ADD PRIMARY KEY (`disc_id`);

ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `packages`
  ADD PRIMARY KEY (`package_id`),
  ADD FOREIGN KEY (`community_id`) REFERENCES `communities`(`community_id`);

ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

ALTER TABLE `rates`
  ADD PRIMARY KEY (`rate_id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

ALTER TABLE `disc`
  MODIFY `disc_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `packages`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

ALTER TABLE `rates`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `disc`
  ADD CONSTRAINT `disc_ibfk_1` FOREIGN KEY (`disc_id`) REFERENCES `packages` (`package_id`);

ALTER TABLE `rates`
  ADD CONSTRAINT `rates_ibfk_1` FOREIGN KEY (`rate_id`) REFERENCES `packages` (`package_id`);
COMMIT;


