-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2024 at 04:20 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `100jobs_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `job_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`id`, `user_id`, `job_id`, `created_at`, `updated_at`) VALUES
(4, 4, 4, '2024-07-08 15:02:37', '2024-07-08 15:02:37'),
(5, 1, 2, '2024-07-08 15:04:00', '2024-07-08 15:04:00'),
(7, 1, 3, '2024-07-09 11:19:22', '2024-07-09 11:19:22'),
(8, 4, 3, '2024-07-10 15:28:13', '2024-07-10 15:28:13');

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`id`, `name`, `institution`, `grade`, `year`, `duration`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'AWS', 'Coursera', 'A+', '2024-07-04', '6 months', 1, '2024-07-01 15:34:07', '2024-07-01 15:34:07'),
(2, 'AI & ML', 'Udemy', 'A', '2024-05-02', '12 months', 1, '2024-07-01 15:34:55', '2024-07-01 15:34:55'),
(3, 'Robotics', 'DRDO', '11', '2024-07-25', '3 momths', 1, '2024-07-10 15:09:31', '2024-07-10 15:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint UNSIGNED NOT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grades` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills_learned` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `college`, `degree`, `grades`, `start`, `end`, `skills_learned`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Raiganj University', 'BCA', '8.8', '2024-07-25', '2024-07-04', 'c, c++, PHP', 1, '2024-07-01 14:28:17', '2024-07-01 14:28:17'),
(2, 'Mohanbati high school', '12', '84%', '2020-07-24', '2018-06-13', 'computer', 1, '2024-07-01 15:02:35', '2024-07-01 15:02:35'),
(3, 'Raiganj University', 'CS', '8', '2024-07-30', '2024-07-12', 'c, c++, java,python', 3, '2024-07-03 15:20:21', '2024-07-03 15:20:21'),
(4, 'Sabdahan', 'MS', '68', '2024-08-02', '2024-07-26', 'rte', 1, '2024-07-10 13:48:33', '2024-07-10 13:48:33'),
(5, 'DDD', 'ddD', '55', '2024-07-20', '2024-07-19', 'dsd', 1, '2024-07-10 14:48:58', '2024-07-10 14:48:58'),
(6, 'Hello', 'DCS', '21', '2024-07-25', '2024-07-19', 'hi hi', 1, '2024-07-10 14:58:35', '2024-07-10 14:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint UNSIGNED NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills_gained` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `company`, `role`, `start`, `end`, `skills_gained`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Appycodes', 'PHP Developer', '2024-07-03', 'Working', 'PHP, Wordpress, Laravel', 1, '2024-07-01 15:57:56', '2024-07-01 15:57:56'),
(2, 'Ciss', 'Faculty', '2021-04-11', '2023-09-11', 'Teaching', 1, '2024-07-10 14:11:30', '2024-07-10 14:11:30'),
(3, 'CodeClouds', 'Software engineer', '2024-07-02', '2024-07-26', 'Software testing', 1, '2024-07-10 15:15:45', '2024-07-10 15:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int DEFAULT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `role`, `company`, `company_website`, `location`, `job_type`, `category`, `description`, `salary`, `skills`, `qualification`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'PHP Devveloper', 'CodeClouds', 'www.codeclouds.com', 'Kolkata', 'Freelance', 'Information Technology', 'We are looking to hire a skilled WordPress developer to design and implement attractive and functional websites for our clients. You will be responsible for both back-end and front-end development including the implementation of WordPress themes and plugins as well as site integration and security updates.', 30000, 'PHP, Laravel, CSS, Javascript, AJAX', 'Bachelor’s degree in computer science or a similar field.\r\nProven work experience as a WordPress developer.\r\nKnowledge of front-end technologies including CSS3, JavaScript, HTML5, and jQuery.', 1, '2024-07-02 15:50:55', '2024-07-02 15:50:55'),
(2, 'XXXXX Dev', 'sdasd', 'www.fgdf.tv', 'Siliguri', 'Part Time', 'Information Technology', 'adasd', 23333, 'ccc', 'asdasd', 3, '2024-07-03 15:40:01', '2024-07-03 15:40:01'),
(3, 'React', 'Appycodes', 'aasdas', 'Raiganj, West Bengal', 'Part Time', 'Engineering', 'Lorem', 45444, 'Java', 'Lorem', 1, '2024-07-03 15:41:05', '2024-07-03 15:41:05'),
(4, 'PHP Devveloper xyz', 'ewrwer', 'www.codeclouds.comgg', 'Kolkata nyc', 'Remote', 'Accountant', 'abcd', 40000, 'PHP, Laravel, CSS, Javascript, AJAX', 'abcd', 1, '2024-07-08 15:01:19', '2024-07-08 15:01:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(14, '2024_06_28_182346_create_applied_jobs_table', 2),
(17, '2014_10_12_000000_create_users_table', 3),
(23, '2024_07_01_184303_create_experiences_table', 4),
(24, '2024_07_01_184414_create_educations_table', 4),
(25, '2024_07_01_184451_create_certifications_table', 4),
(28, '2024_06_13_205728_create_jobs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` bigint NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `bio`, `avatar`, `contact`, `city`, `country`, `resume`, `created_at`, `updated_at`) VALUES
(1, 'Nitya Gopal Saha', 'nityasaha39@gmail.com', NULL, '$2y$10$4.ZDjOmhRNTZFAI8ykmnGubZedQGJ5E3BjovlndcoOSyUM2C8WaU2', 'PmEL36Ok98Vzaab7R9de5F0r7pdZYZXjExjMKKDTaXSzyYCCmfDHinX1A57y', 'Full Stack Software Engineer', 'avatars/WyJ43W5tjLYUA4d0nVzfHxIrSjKRGyd4aanw6nTL.png', 815895765600, 'Siliguri', 'India', 'resumes/HYNvAFzTKYoqNKYJCrFBL2xo0pRhWu5j8qObnEIO.pdf', '2024-07-01 11:31:26', '2024-07-10 14:45:51'),
(3, 'NewziMo', 'newzimo1@gmail.com', NULL, '12345678', NULL, 'Youtuber', 'avatars/G0sRV4dAzv0u2SPgw4XTheglwwCG2X56RwN4VvBI.png', 80034234, 'Raiganj S', 'India', 'resumes/dQb7na4uicbOgKUv8trjEOlwpAaZJT8Wt0NB306q.pdf', '2024-07-03 15:11:09', '2024-07-03 15:19:31'),
(4, 'TEST', 'test@test.com', NULL, '$2y$10$.kxLbNFqXgq/jza3sTgoZOmC0fJECYLHPDAfcznORn30.0L6YvXfu', NULL, 'TEST', NULL, 1234, 'NO', 'NO', NULL, '2024-07-08 15:02:16', '2024-07-08 15:02:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certifications_user_id_foreign` (`user_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educations_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `certifications`
--
ALTER TABLE `certifications`
  ADD CONSTRAINT `certifications_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
