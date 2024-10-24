-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Okt 2024 um 14:48
-- Server-Version: 10.4.32-MariaDB
-- PHP-Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `hazinaproject.com`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `failed_jobs`
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
-- Tabellenstruktur für Tabelle `kanuni`
--

CREATE TABLE `kanuni` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `mwaka` date NOT NULL,
  `vistion` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `kanuni`
--

INSERT INTO `kanuni` (`id`, `name`, `discription`, `mwaka`, `vistion`, `document`, `is_delete`, `create_at`, `update_at`) VALUES
(1, 'KANUNI', 'M', '2024-10-19', 'English', 'FT20241019020215.pdf', 1, '2024-10-19 14:02:15', '2024-10-19 14:02:15');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `miongozo`
--

CREATE TABLE `miongozo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `mwaka` date DEFAULT NULL,
  `vistion` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `is_delete` int(11) DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `miongozo`
--

INSERT INTO `miongozo` (`id`, `name`, `discription`, `mwaka`, `vistion`, `document`, `is_delete`, `create_at`, `update_at`) VALUES
(1, 'MIONGOZO', 'MIONGOZO', '2024-10-19', 'UMMA', 'FT20241019021932.pdf', 1, '2024-10-19 14:19:32', '2024-10-19 14:19:32'),
(2, 'Muongozo wa Mkataba wa Utendaji', 'Muongozo unaotoa maelekezo ya Mchakato mzima wa kufunga Mkataba wa Utendaji.', '2024-07-05', 'MITAJI YA UMMA NA UWEKEZAJI', 'FT20241024101900.pdf', 0, '2024-10-24 10:19:00', '2024-10-24 10:19:00');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personal_access_tokens`
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
-- Tabellenstruktur für Tabelle `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `mwaka` date DEFAULT NULL,
  `vistion` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `report`
--

INSERT INTO `report` (`id`, `name`, `discription`, `mwaka`, `vistion`, `document`, `is_delete`, `create_at`, `update_at`) VALUES
(1, 'REPORT', 'REPORT', '2024-10-19', 'MALI', 'FT20241019030752.pdf', 0, '2024-10-19 15:07:52', '2024-10-19 15:07:52');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sera`
--

CREATE TABLE `sera` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `mwaka` date DEFAULT NULL,
  `vistion` varchar(255) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `sera`
--

INSERT INTO `sera` (`id`, `name`, `discription`, `mwaka`, `vistion`, `document`, `is_delete`, `create_at`, `update_at`) VALUES
(1, 'MAADILI', 'JJ', '2024-10-18', 'English', 'FT20241018042716.pdf', 1, '2024-10-24 10:10:23', '2024-10-18 16:56:08'),
(2, 'c', 'c', '2024-10-22', 'English', 'FT20241022105349.pdf', 1, '2024-10-24 10:10:26', '2024-10-22 10:53:49'),
(3, 'Sneyuu Sera ya Kulala', 'Msajili wa Hazina', '2024-10-31', 'Kiswahili', 'FT20241022112226.pdf', 1, '2024-10-24 10:10:28', '2024-10-22 11:22:26'),
(4, 'Hujumu uchumi', 'Vvhh', '2024-10-22', 'Kiswahili', 'FT20241022112512.pdf', 1, '2024-10-24 10:10:31', '2024-10-22 11:25:12');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `sheria`
--

CREATE TABLE `sheria` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `discription` varchar(1000) DEFAULT NULL,
  `mwaka` date DEFAULT NULL,
  `vistion` enum('English','Kiswahili') DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `sheria`
--

INSERT INTO `sheria` (`id`, `name`, `discription`, `mwaka`, `vistion`, `document`, `is_delete`, `create_at`, `update_at`) VALUES
(1, 'SHERIA YA MSAJILI WA HAZINA', 'HIIIIII', '2024-10-18', 'English', 'FT20241018040217.pdf', 1, NULL, NULL),
(2, 'cc', 'cc', '2024-10-21', 'Kiswahili', 'FT20241021104815.pdf', 1, NULL, NULL),
(3, 'Uhujumu uchumi', 'Jdjdjx', '2024-10-22', 'Kiswahili', 'FT20241022112214.pdf', 1, NULL, NULL),
(4, 'Sheria ya Msajili wa Hazina na Usimamizi wa Mali za Umma', 'Sheria hii imekuja kuipa mamlaka Ofisi ya Msajili wa Hazina katika kusimamia Uwekezaji wa Umma na Mali za Umma.', '2021-08-12', 'Kiswahili', 'FT20241024100928.pdf', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `taasisi_za_umma`
--

CREATE TABLE `taasisi_za_umma` (
  `id` int(11) NOT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `hati_ya_uwanzishaji` varchar(255) DEFAULT NULL,
  `mwaka` varchar(225) DEFAULT NULL,
  `lengo` varchar(255) DEFAULT NULL,
  `aina_ya_tasisi` varchar(255) DEFAULT NULL,
  `makao_makuu` varchar(255) DEFAULT NULL,
  `jina_la_mkurugenzi` varchar(255) DEFAULT NULL,
  `mtaji` varchar(255) DEFAULT NULL,
  `jina_la_wizara` varchar(255) DEFAULT NULL,
  `jina_la_mwenyekiti` varchar(255) DEFAULT NULL,
  `is_delete` int(11) NOT NULL DEFAULT 0,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Daten für Tabelle `taasisi_za_umma`
--

INSERT INTO `taasisi_za_umma` (`id`, `profile_pic`, `name`, `hati_ya_uwanzishaji`, `mwaka`, `lengo`, `aina_ya_tasisi`, `makao_makuu`, `jina_la_mkurugenzi`, `mtaji`, `jina_la_wizara`, `jina_la_mwenyekiti`, `is_delete`, `create_at`, `update_at`) VALUES
(1, '202410241235428spqff9scflcwlzq3pqi.png', 'CORPORATION OF GOVERNMENT NEWSPAPERS (CGN)', 'Sheria Na. 11 ya 2008', '2008', '', 'MASHIRIKA', 'Maisara Zanzibar, SLP 1893', 'Nd. Ali Haji Mwadini', '', NULL, NULL, 0, '2024-10-24 12:05:47', '2024-10-24 12:05:47');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `user_type` int(11) NOT NULL DEFAULT 2,
  `is_delete` int(11) NOT NULL DEFAULT 0 COMMENT '0:not deleted , 1:deleted',
  `status` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `phone`, `age`, `address`, `profile_pic`, `user_type`, `is_delete`, `status`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, 0, 0, NULL, '$2y$12$xczoBO.zDp2Gy3l0Lkj64.4NG4LF8zQcMJxaT79PpLOTaxGRjtMDS', NULL, '2024-10-16 08:22:17', '2024-10-16 08:22:17'),
(4, 'Abdulwahid Ali Issa', 'abdullwahidaliy9@gmail.com', 'Male', '0772645905', '20', '', '20241023064818jf7qzkwfmhvakckvgfbj.jpg', 1, 0, 0, NULL, '$2y$12$3a3hmJAAxGGDP/8Xcz1jLOfmYJDqk9itfZ82YQ9vmqpY1Ps6b/lRq', '9pIJslfqU9aICMnQRwwLpZ99FhZFGV', '2024-10-23 13:48:19', '2024-10-24 16:09:55'),
(5, 'Abdalla N', 'kamalabdalla267@gmail.com', 'Male', '+255620347767', '20', 'Zanzibar', '202410240915382qnktysgb1lxvcfqiwu8.png', 1, 0, 0, NULL, '$2y$12$f44Q50fAZ/WfvthaSsfPE.o9PFdKQjgmMWNRjCMOWRtIp51HOpCky', 'w2JUcH1z201FRPJ3H4uVJNHs8cNDw2', '2024-10-24 16:15:38', '2024-10-24 16:21:35');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indizes für die Tabelle `kanuni`
--
ALTER TABLE `kanuni`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `miongozo`
--
ALTER TABLE `miongozo`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indizes für die Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indizes für die Tabelle `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `sera`
--
ALTER TABLE `sera`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `sheria`
--
ALTER TABLE `sheria`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `taasisi_za_umma`
--
ALTER TABLE `taasisi_za_umma`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `kanuni`
--
ALTER TABLE `kanuni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `miongozo`
--
ALTER TABLE `miongozo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `sera`
--
ALTER TABLE `sera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `sheria`
--
ALTER TABLE `sheria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT für Tabelle `taasisi_za_umma`
--
ALTER TABLE `taasisi_za_umma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
