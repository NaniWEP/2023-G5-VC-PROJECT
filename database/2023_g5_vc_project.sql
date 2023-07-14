-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 03:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2023_g5_vc_project`
--

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
-- Table structure for table `favorite_univeristy_post`
--

CREATE TABLE `favorite_univeristy_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `university_post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorite_univeristy_post`
--

INSERT INTO `favorite_univeristy_post` (`id`, `user_id`, `university_post_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, NULL),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorite_workshop_post`
--

CREATE TABLE `favorite_workshop_post` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `workshop_post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorite_workshop_post`
--

INSERT INTO `favorite_workshop_post` (`id`, `user_id`, `workshop_post_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, NULL),
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `majors`
--

CREATE TABLE `majors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year_duration` int(11) NOT NULL,
  `month_duration` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `start_date` date NOT NULL,
  `price` int(11) NOT NULL,
  `university_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `majors`
--

INSERT INTO `majors` (`id`, `name`, `description`, `year_duration`, `month_duration`, `apply_date`, `start_date`, `price`, `university_id`, `created_at`, `updated_at`) VALUES
(1, 'Information technology (IT)', 'Information technology is the use of computers to create, process, store, retrieve and exchange all kinds of data and information. IT forms part of information and communications technology.', 4, 0, '2023-09-30', '2023-10-25', 700, 1, NULL, NULL),
(2, 'Engineering ', 'Engineering is the practice of using natural science, mathematics, and the scientific method to solve problems, increase efficiency and productivity, and improve systems', 4, 0, '2023-11-15', '2024-01-01', 0, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg', NULL, NULL),
(2, 'https://i.pinimg.com/474x/69/44/39/694439b3031503a7564eda9e24f673eb.jpg', NULL, NULL),
(3, 'https://img.freepik.com/premium-photo/mystical-tree-with-view-moon-bight-starry-sky-glowing-clouds_124507-119616.jpg', NULL, NULL),
(4, 'https://img.freepik.com/premium-photo/mysterious-mystical-forest-night-light-moon-generative-ai_372999-14910.jpg', NULL, NULL);

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
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_07_06_083702_create_media_table', 1),
(5, '2023_07_11_013115_create_roles_table', 1),
(6, '2023_07_11_013544_create_users_table', 1),
(7, '2023_07_11_013741_create_workshop_posts_table', 1),
(8, '2023_07_11_014000_create_universities_table', 1),
(9, '2023_07_11_014143_create_majors_table', 1),
(10, '2023_07_11_014213_create_university_posts_table', 1),
(11, '2023_07_11_021703_create_workshop_post_media_table', 1),
(12, '2023_07_11_021717_create_university_post_media_table', 1),
(13, '2023_07_11_023949_create_favorite_univeristy_post_table', 1),
(14, '2023_07_11_023959_create_favorite_workshop_post_table', 1);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_type`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'school-manager', NULL, NULL),
(3, 'student', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `name`, `description`, `website`, `email`, `phone`, `location`, `province`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'PNC', 'Passerelles numériques Cambodia was the first project to be launched in 2005, in Phnom Penh. PNC offers two IT training programs in System and Network Administration (SNA) and Web Programming (WEP), based on a holistic educative approach including technic', 'https://www.passerellesnumeriques.org/en/our-actions/cambodia/', 'pnc@passerellesnumeriques.org', '+855 23 99 55 00', 'Passerelles numériques Cambodia (PNC), BP 511, Phum Tropeang Chhuk (Borey Sorla) Sangtak, Street 371, Phnom Penh', 'Phnom Penh', 4, NULL, NULL),
(2, 'ROYAL UNIVERSITY OF PHNOM PENH', 'The Royal University of Phnom Penh is a national research university of Cambodia, located in the Phnom Penh capital. Established in 1960, it is the country\'s largest university. It hosts around 20,000 students in undergraduate and postgraduate programmes', 'http://www.rupp.edu.kh/', 'gss@rupp.edu.kh', '+855-89-966-234', 'RUPP (Royal University of Phnom Penh), សាលប្រជុំសាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ, Russian Federation Blvd (110), Phnom Penh', 'Phnom Penh', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `university_posts`
--

CREATE TABLE `university_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `major_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `university_posts`
--

INSERT INTO `university_posts` (`id`, `title`, `description`, `date`, `status`, `major_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Information technology (IT)', 'Information technology is the use of computers to create, process, store, retrieve and exchange all kinds of data and information. IT forms part of information and communications technology.', '2023-10-15', 1, 1, 4, NULL, NULL),
(2, 'Engineering ', 'Engineering is the practice of using natural science, mathematics, and the scientific method to solve problems, increase efficiency and productivity, and improve systems', '2023-12-15', 1, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `university_post_media`
--

CREATE TABLE `university_post_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `university_post_id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `university_post_media`
--

INSERT INTO `university_post_media` (`id`, `university_post_id`, `media_id`, `created_at`, `updated_at`) VALUES
(3, 2, 1, NULL, NULL),
(4, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `profile_id` bigint(20) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `date_of_birth`, `province`, `role_id`, `profile_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Socheat', 'Lun', 'lunsocheat@gmail.com', '11112222', '2003-08-07', 'Kampong Thom', 2, NULL, '329UR9U329R39IEWR', NULL, NULL),
(3, 'Bet', 'Chamnan', 'betchamnan22@gmail.com', 'chamnancute', '2003-07-07', 'Banteay Meanchey', 1, NULL, NULL, NULL, NULL),
(4, 'Doeur', 'Diet', 'dietdoeur222@gmail.com', 'showmeyourskill', '2002-01-17', 'Siem Reap', 2, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workshop_posts`
--

CREATE TABLE `workshop_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshop_posts`
--

INSERT INTO `workshop_posts` (`id`, `name`, `description`, `date`, `time`, `location`, `organizer`, `contact`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Soft Skill', 'We will show you what is soft skill and how to use it and make yourself stronger.', '2023-07-13', '09:00:00', 'PNC school', 'PNC', '0969293520', 1, 2, NULL, NULL),
(2, 'What is IT?', 'Welcome to our workshop and we will lead get into IT skill.', '2023-07-19', '09:00:00', 'PNC school', 'PNC', 'lunsocheat@gmail.com', 0, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `workshop_post_media`
--

CREATE TABLE `workshop_post_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `workshop_post_id` bigint(20) UNSIGNED NOT NULL,
  `media_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `workshop_post_media`
--

INSERT INTO `workshop_post_media` (`id`, `workshop_post_id`, `media_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, NULL, NULL),
(2, 2, 4, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorite_univeristy_post`
--
ALTER TABLE `favorite_univeristy_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorite_univeristy_post_user_id_foreign` (`user_id`),
  ADD KEY `favorite_univeristy_post_university_post_id_foreign` (`university_post_id`);

--
-- Indexes for table `favorite_workshop_post`
--
ALTER TABLE `favorite_workshop_post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorite_workshop_post_user_id_foreign` (`user_id`),
  ADD KEY `favorite_workshop_post_workshop_post_id_foreign` (`workshop_post_id`);

--
-- Indexes for table `majors`
--
ALTER TABLE `majors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `majors_university_id_foreign` (`university_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `universities_user_id_foreign` (`user_id`);

--
-- Indexes for table `university_posts`
--
ALTER TABLE `university_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `university_posts_major_id_foreign` (`major_id`),
  ADD KEY `university_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `university_post_media`
--
ALTER TABLE `university_post_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `university_post_media_university_post_id_foreign` (`university_post_id`),
  ADD KEY `university_post_media_media_id_foreign` (`media_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`),
  ADD KEY `users_profile_id_foreign` (`profile_id`);

--
-- Indexes for table `workshop_posts`
--
ALTER TABLE `workshop_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshop_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `workshop_post_media`
--
ALTER TABLE `workshop_post_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `workshop_post_media_workshop_post_id_foreign` (`workshop_post_id`),
  ADD KEY `workshop_post_media_media_id_foreign` (`media_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_univeristy_post`
--
ALTER TABLE `favorite_univeristy_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorite_workshop_post`
--
ALTER TABLE `favorite_workshop_post`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `majors`
--
ALTER TABLE `majors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `university_posts`
--
ALTER TABLE `university_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `university_post_media`
--
ALTER TABLE `university_post_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workshop_posts`
--
ALTER TABLE `workshop_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `workshop_post_media`
--
ALTER TABLE `workshop_post_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorite_univeristy_post`
--
ALTER TABLE `favorite_univeristy_post`
  ADD CONSTRAINT `favorite_univeristy_post_university_post_id_foreign` FOREIGN KEY (`university_post_id`) REFERENCES `university_posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorite_univeristy_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorite_workshop_post`
--
ALTER TABLE `favorite_workshop_post`
  ADD CONSTRAINT `favorite_workshop_post_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favorite_workshop_post_workshop_post_id_foreign` FOREIGN KEY (`workshop_post_id`) REFERENCES `workshop_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `majors`
--
ALTER TABLE `majors`
  ADD CONSTRAINT `majors_university_id_foreign` FOREIGN KEY (`university_id`) REFERENCES `universities` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `universities`
--
ALTER TABLE `universities`
  ADD CONSTRAINT `universities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `university_posts`
--
ALTER TABLE `university_posts`
  ADD CONSTRAINT `university_posts_major_id_foreign` FOREIGN KEY (`major_id`) REFERENCES `majors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `university_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `university_post_media`
--
ALTER TABLE `university_post_media`
  ADD CONSTRAINT `university_post_media_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `university_post_media_university_post_id_foreign` FOREIGN KEY (`university_post_id`) REFERENCES `university_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_profile_id_foreign` FOREIGN KEY (`profile_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workshop_posts`
--
ALTER TABLE `workshop_posts`
  ADD CONSTRAINT `workshop_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `workshop_post_media`
--
ALTER TABLE `workshop_post_media`
  ADD CONSTRAINT `workshop_post_media_media_id_foreign` FOREIGN KEY (`media_id`) REFERENCES `media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `workshop_post_media_workshop_post_id_foreign` FOREIGN KEY (`workshop_post_id`) REFERENCES `workshop_posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
