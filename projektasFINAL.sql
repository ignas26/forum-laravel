-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 01:41 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projektas`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `conversation_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `conversation_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'ko tu dabar nori atsakymo kai čia subjektyviai kiekvienam. Žėk pagal galimybes, kaip compas išveža. Brackets \"lengviausia\" kas liečia našumą, VisualStudio jau daugiau galios reikalauja, o phpstorm išvis mišios jeigu compas senolis', '2018-04-02 19:39:06', '2018-04-02 19:39:06'),
(2, 1, 2, 'tai tiesiog xamppas pagrinde, cmd terminalas dar ir smegenine gera ;)', '2018-04-02 19:39:06', '2018-04-02 19:39:06'),
(3, 2, 3, 'šitą iššigooglink jau gal pats kaipnors, rankos nenukris', '2018-04-02 19:39:06', '2018-04-02 19:39:06'),
(4, 4, 4, 'Hardcore. Čia jau profų reik klaust. Kur forumo protai? Nes man irgi tas json tikras peilis...', '2018-04-02 19:39:06', '2018-04-02 19:39:06'),
(5, 3, 1, 'yzi gi. Brackets isirasyk ir viskas. Xamppa dar gali, nes veliau tikrai reikes. Bet pirmai pradziai brackets. Uz savaites gal isvis jau mesi ta codinima, tai kam cia prisirasyt softo kai dar neaisku nieko.', '2018-04-02 19:39:06', '2018-04-02 19:39:06');

-- --------------------------------------------------------

--
-- Table structure for table `attachments`
--

CREATE TABLE `attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `conversation_id` int(10) UNSIGNED NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `channels`
--

CREATE TABLE `channels` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rowcount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `channels`
--

INSERT INTO `channels` (`id`, `title`, `rowcount`, `created_at`, `updated_at`) VALUES
(1, 'FrontEnd įvadas', 'frontend-ivadas', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(2, 'BackEnd įvadas', 'backend-ivadas', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(3, 'HTML/CSS', 'htmlcss', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(4, 'PHP', 'php', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(5, 'PHP frameworks', 'php-frameworks', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(6, 'Javascript', 'javascript', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(7, 'JS Frameworks', 'js-frameworks', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(8, 'Python', 'python', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(9, 'Kitos kalbos', 'kitos-kalbos', '2018-04-02 19:39:05', '2018-04-02 19:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `channel_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`id`, `user_id`, `channel_id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Codinimo toolsai', 'kokios yra geriausios FrontEnd codinimo priemonės, gal kas pasakytų? ar reikės spėlioti? Nes googlinantis matau dauuug variantų ir neaišku, kuris geriausias būtų. Atomas?', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(2, 1, 2, 'BackEnd codinimo toolsai', 'Kaip su BackEnd codinimo priemonėmis? xamppo reikės vėl? kaip ten su serveriais išvis situacija? Ar toolsai tokie patys kaip ir Frontendo atveju ar reikia atsisiųsti naujus kažkokius?', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(3, 1, 3, 'Flexbox pūliuoja help pls', 'zmones as naujokas codinime tik 2 savaites, ko tai uzlinko flexbox ir iskraipe vaizda visa, visi elementai susoko vienas ant kito, nzn kaip debuginti, vienzo padekit kas galit!!! tik greiciau nes tuoj nd tikrins', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(4, 1, 4, 'Restful API + Json encodinimo error', 'suluzo visas backendas kai paleidau kad encodintu i json formata, nzn ka daryti padekit. Aciu', '2018-04-02 19:39:05', '2018-04-02 19:39:05'),
(5, 1, 4, 'PDO login info', 'tai pdo info visa is serverio ateina ar kaip cia yra? nesujungia manes ir neatvaizduoja nieko blemba.', '2018-04-02 19:39:05', '2018-04-02 19:39:05');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `answer_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(125, '2014_10_12_000000_create_users_table', 1),
(126, '2014_10_12_100000_create_password_resets_table', 1),
(127, '2018_03_23_231940_create_channels_table', 1),
(128, '2018_03_24_001025_create_conversations_table', 1),
(129, '2018_03_24_001050_create_answers_table', 1),
(130, '2018_03_26_185837_add_foreign_to_conversations_table', 1),
(131, '2018_03_26_201853_add_foreign_to_answers_table', 1),
(132, '2018_03_28_112501_create_likes_table', 1),
(133, '2018_03_28_115218_add_foreign_to_likes_table', 1),
(134, '2018_04_01_131755_create_attachments_table', 1),
(135, '2018_04_01_132700_foreing_for_attachments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `karma` bigint(20) NOT NULL DEFAULT '10',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `karma`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 10, 'admin@admin.lt', '$2y$10$a2X26aJwDCv1f3Sk6fV.5OsAzh7gUswbG4tCT.t9XfWrOzUsEUuQG', '2uWXhssN9SVz89m0KNGpLwLiuVdlmydP5JXtM8PYH1FvXYlNpor6KNTV98hm', NULL, NULL),
(2, 'Vardenis', 10, 'vardenis@pavardenis.lt', '$2y$10$sbF5Z/i6ODnVxX6U7IsZe.2NHXHfVabXu3FDJfXxgybu030DySUuO', NULL, NULL, NULL),
(3, 'Antanas', 10, 'vardenis@pavardeniss.lt', '$2y$10$wQQDvXt3s2.BjtiXctI7W..GAXmcI59dF8rPRmjCSHgXMnjPFHSWS', NULL, NULL, NULL),
(4, 'Alvydas', 10, 'vardeniss@pavardenis.lt', '$2y$10$fWdPiI8.Gp3kIq0OGAwhwOyFscAd9MaDe5jQ1hO5Y7mPBz0RFPZve', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_conversation_id_foreign` (`conversation_id`),
  ADD KEY `answers_user_id_foreign` (`user_id`);

--
-- Indexes for table `attachments`
--
ALTER TABLE `attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `conversations_channel_id_foreign` (`channel_id`),
  ADD KEY `conversations_user_id_foreign` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_answer_id_foreign` (`answer_id`),
  ADD KEY `likes_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attachments`
--
ALTER TABLE `attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `channels`
--
ALTER TABLE `channels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_conversation_id_foreign` FOREIGN KEY (`conversation_id`) REFERENCES `conversations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `conversations`
--
ALTER TABLE `conversations`
  ADD CONSTRAINT `conversations_channel_id_foreign` FOREIGN KEY (`channel_id`) REFERENCES `channels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `conversations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_answer_id_foreign` FOREIGN KEY (`answer_id`) REFERENCES `answers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
