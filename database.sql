-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Haz 2024, 07:25:11
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `valletproject`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `audits`
--

CREATE TABLE `audits` (
  `id` int(9) NOT NULL,
  `source` varchar(63) NOT NULL,
  `source_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `event` varchar(31) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `auth_access_tokens`
--

CREATE TABLE `auth_access_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `last_used_at` datetime DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `auth_password_resets`
--

CREATE TABLE `auth_password_resets` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `brands`
--

CREATE TABLE `brands` (
  `id` int(11) UNSIGNED NOT NULL,
  `ad` varchar(255) NOT NULL,
  `durum` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `brands`
--

INSERT INTO `brands` (`id`, `ad`, `durum`, `created_at`, `updated_at`) VALUES
(7, 'Marka 1', 1, '2024-06-25 23:37:50', '2024-06-25 23:37:50'),
(8, 'Orhan', 0, '2024-06-25 23:37:55', '2024-06-25 23:38:06'),
(9, 'Uyguncu', 1, '2024-06-26 04:40:52', '2024-06-26 04:40:52');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) UNSIGNED NOT NULL,
  `ad` varchar(255) NOT NULL,
  `durum` int(11) NOT NULL DEFAULT 1,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `cargo`
--

INSERT INTO `cargo` (`id`, `ad`, `durum`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 'Aras Kargo', 1, 4, '2024-06-26 00:03:02', '2024-06-26 01:22:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `ad` varchar(255) NOT NULL,
  `durum` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`id`, `ad`, `durum`, `created_at`, `updated_at`) VALUES
(2, 'dsadasdas', 0, '2024-06-25 22:29:53', '2024-06-25 22:29:53'),
(3, 'adsadsa', 1, '2024-06-25 22:34:32', '2024-06-25 22:34:32'),
(4, 'Orhan ', 0, '2024-06-25 22:44:02', '2024-06-25 22:44:02');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `exports`
--

CREATE TABLE `exports` (
  `id` int(9) NOT NULL,
  `handler` varchar(63) NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `files`
--

CREATE TABLE `files` (
  `id` int(9) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `localname` varchar(255) NOT NULL,
  `clientname` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(10) UNSIGNED NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `files_users`
--

CREATE TABLE `files_users` (
  `id` int(9) NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2024-06-24-201714', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1719260475, 1),
(2, '2020-12-28-223112', 'App\\Database\\Migrations\\CreateAuthTables', 'default', 'App', 1719265567, 2),
(3, '2024-06-25-015215', 'App\\Database\\Migrations\\CreateProductTable', 'default', 'App', 1719282495, 3),
(4, '2019-03-26-110032', 'Tatter\\Permits\\Database\\Migrations\\CreatePermitsTables', 'default', 'Tatter\\Permits', 1719283258, 4),
(5, '20190404090152', 'Tatter\\Audits\\Database\\Migrations\\Migration_create_table_audits', 'default', 'Tatter\\Audits', 1719283258, 4),
(6, '20190407221924', 'Tatter\\Settings\\Database\\Migrations\\Migration_create_table_settings', 'default', 'Tatter\\Settings', 1719283258, 4),
(7, '20190724212056', 'Tatter\\Files\\Database\\Migrations\\Migration_create_table_files', 'default', 'Tatter\\Files', 1719283258, 4),
(11, '2024-06-25-052254', 'App\\Database\\Migrations\\CreateCategoryTable', 'default', 'App', 1719350482, 5),
(12, '2024-06-25-052254', 'App\\Database\\Migrations\\CreateMarkaTable', 'default', 'App', 1719357129, 6),
(13, '2024-06-25-052254', 'App\\Database\\Migrations\\CreateCargoTable', 'default', 'App', 1719359488, 7);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock_code` text DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `cargo` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `images` text DEFAULT '',
  `durum` int(11) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `stock_code`, `qty`, `description`, `category`, `brand`, `cargo`, `user_id`, `image`, `images`, `durum`, `created_at`, `updated_at`) VALUES
(20, 'Orhan Seyran', 432, 'SK554768', 4, 'fsdfsdfwerg', 'adsadsa', 'Uyguncu', 'Aras Kargo', 4, '', '', 1, '2024-06-26 05:21:56', '2024-06-26 05:24:51');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(9) NOT NULL,
  `name` varchar(63) NOT NULL,
  `datatype` varchar(31) DEFAULT 'string',
  `scope` varchar(15) NOT NULL DEFAULT '',
  `summary` varchar(255) NOT NULL DEFAULT '',
  `content` varchar(255) NOT NULL DEFAULT '',
  `protected` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `name`, `datatype`, `scope`, `summary`, `content`, `protected`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'perPage', 'int', '', 'Number of items to show per page', '10', 1, '2024-06-25 02:41:12', '2024-06-25 02:41:12', NULL),
(2, 'filesFormat', 'string', '', 'Display format for listing files', 'cards', 0, '2024-06-25 02:41:12', '2024-06-25 02:41:12', NULL),
(3, 'filesSort', 'string', '', 'Sort field for listing files', 'filename', 0, '2024-06-25 02:41:12', '2024-06-25 02:41:12', NULL),
(4, 'filesOrder', 'string', '', 'Sort order for listing files', 'asc', 0, '2024-06-25 02:41:12', '2024-06-25 02:41:12', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings_users`
--

CREATE TABLE `settings_users` (
  `id` int(9) NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `tatil_modu` int(11) DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `tatil_modu`, `created_at`, `updated_at`) VALUES
(1, 'Oktay', 'orhanseyran35@gmail.com', '$2y$10$fugdTMbEo7BrbW0kqIghsufnqCIEKUR/V8v3fft4DjmAqZHj8nrqC', 'Satici', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Orhan Seyran', 'orhanseyran5@gmail.com', '$2y$10$Ettnhc/wZv5xzgFpbwyIBOH9FZNZ1tFryeNSIwD4Qj5nBZADLCrAe', 'Admin', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'deneme', 'orhanseyran335@gmail.com', '$2y$10$fhWzdbNnxagux8ku2QuyZe8ofVVEHbQbvaF/eGxN7FxGVr7/eRjJq', 'Admin', 1, '0000-00-00 00:00:00', '2024-06-26 05:01:51'),
(5, 'Orhan Seyran', 'orhan35@gmail.com', '$2y$10$fugdTMbEo7BrbW0kqIghsufnqCIEKUR/V8v3fft4DjmAqZHj8nrqC', 'Satıcı', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `audits`
--
ALTER TABLE `audits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `source_source_id_event` (`source`,`source_id`,`event`),
  ADD KEY `user_id_source_event` (`user_id`,`source`,`event`),
  ADD KEY `event_user_id_source_source_id` (`event`,`user_id`,`source`,`source_id`),
  ADD KEY `created_at` (`created_at`);

--
-- Tablo için indeksler `auth_access_tokens`
--
ALTER TABLE `auth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `token` (`token`);

--
-- Tablo için indeksler `auth_password_resets`
--
ALTER TABLE `auth_password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `exports`
--
ALTER TABLE `exports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `handler` (`handler`),
  ADD KEY `file_id` (`file_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Tablo için indeksler `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `filename` (`filename`),
  ADD KEY `created_at` (`created_at`);

--
-- Tablo için indeksler `files_users`
--
ALTER TABLE `files_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `file_id_user_id` (`file_id`,`user_id`),
  ADD UNIQUE KEY `user_id_file_id` (`user_id`,`file_id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `created_at` (`created_at`);

--
-- Tablo için indeksler `settings_users`
--
ALTER TABLE `settings_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_id_user_id` (`setting_id`,`user_id`),
  ADD KEY `user_id_setting_id` (`user_id`,`setting_id`),
  ADD KEY `created_at` (`created_at`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `audits`
--
ALTER TABLE `audits`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `auth_access_tokens`
--
ALTER TABLE `auth_access_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `auth_password_resets`
--
ALTER TABLE `auth_password_resets`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `exports`
--
ALTER TABLE `exports`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `files`
--
ALTER TABLE `files`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `files_users`
--
ALTER TABLE `files_users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `settings_users`
--
ALTER TABLE `settings_users`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
