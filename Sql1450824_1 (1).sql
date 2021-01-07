-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: 89.46.111.211
-- Generato il: Dic 31, 2020 alle 09:27
-- Versione del server: 5.7.32-35-log
-- Versione PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Sql1450824_1`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `gmaps_geocache`
--

CREATE TABLE IF NOT EXISTS `gmaps_geocache` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=42 ;

--
-- Dump dei dati per la tabella `gmaps_geocache`
--

INSERT INTO `gmaps_geocache` (`id`, `address`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'italy', '41.87194', '12.56738', NULL, NULL),
(2, 'karachi, pakistan', '24.8607343', '67.0011364', NULL, NULL),
(3, 'islamabad, pakistan', '33.6844202', '73.04788479999999', NULL, NULL),
(4, 'lahore, pakistan', '31.5203696', '74.35874729999999', NULL, NULL),
(5, 'balochistan, pakistan', '28.4907332', '65.0957792', NULL, NULL),
(6, 'quetta, pakistan', '30.1798398', '66.9749731', NULL, NULL),
(7, 'peshawar, pakistan', '34.0151366', '71.5249154', NULL, NULL),
(8, 'faisalabad, pakistan', '31.45036619999999', '73.13496049999999', NULL, NULL),
(9, 'multan, pakistan', '30.157458', '71.5249154', NULL, NULL),
(10, 'layyah, pakistan', '30.9693492', '70.94279139999999', NULL, NULL),
(11, 'karor lal esan, pakistan', '31.2272419', '70.9517078', NULL, NULL),
(12, 'chowk azam, pakistan', '30.96470249999999', '71.20426189999999', NULL, NULL),
(13, 'khairpur, pakistan', '27.5255625', '68.75507329999999', NULL, NULL),
(14, 'pwc italy, largo angelo fochetti, rome, metropolitan      city    of rome,   italy', '41.8672981', '12.4954771', NULL, NULL),
(15, 'mirpur azad kashmir', '33.1479849', '73.7536695', NULL, NULL),
(16, 'haripur, pakistan', '33.9946466', '72.9106202', NULL, NULL),
(17, 'bhakkar, pakistan', '31.6082059', '71.0854325', NULL, NULL),
(18, 'sahiwal, pakistan', '30.6681998', '73.111356', NULL, NULL),
(19, 'mirpur sakro, pakistan', '24.5433858', '67.6274785', NULL, NULL),
(20, 'badin, pakistan', '24.6458593', '68.84665439999999', NULL, NULL),
(21, 'naran, pakistan', '34.9092505', '73.6506776', NULL, NULL),
(22, 'murree, pakistan', '33.9069576', '73.3943017', NULL, NULL),
(23, 'paharpur, pakistan', '32.1039651', '70.9754842', NULL, NULL),
(24, 'banu, pakistan', '32.9909945', '70.645473', NULL, NULL),
(25, 'kalam, pakistan', '35.4902022', '72.5796331', NULL, NULL),
(26, 'malam jabba, pakistan', '34.7999189', '72.57224', NULL, NULL),
(27, 'e35 expressway, pakistan', '33.9659312', '72.970548', NULL, NULL),
(28, 'lake view park, islamabad, pakistan', '33.7154975', '73.1305349', NULL, NULL),
(29, 'muzaffar khan road, bani gala, pakistan', '33.7153916', '73.1640512', NULL, NULL),
(30, 'hangu, pakistan', '33.5223287', '71.0616623', NULL, NULL),
(31, 'sargodha, pakistan', '32.0739787', '72.6860696', NULL, NULL),
(32, 'khushab tehsil, pakistan', '32.4273986', '72.236379', NULL, NULL),
(33, 'shakar garh, pakistan', '32.25723900000001', '75.16037519999999', NULL, NULL),
(34, 'khanna pul, islamabad, pakistan', '33.6291327', '73.11355549999999', NULL, NULL),
(35, 'lohi bhair, pakistan', '33.5814951', '73.16298780000001', NULL, NULL),
(36, 'dhoke kala khan, rawalpindi, pakistan', '33.6503907', '73.0921755', NULL, NULL),
(37, 'faizabad stop, islamabad, pakistan', '33.6631592', '73.08527389999999', NULL, NULL),
(38, 'thokar niaz baig flyover, lahore, pakistan', '31.4710169', '74.2415515', NULL, NULL),
(39, 'kotha pind pakistan', '31.47737649999999', '74.3070546', NULL, NULL),
(40, 'ali rajanpur pakistan', '29.1044299', '70.3301173', NULL, NULL),
(41, 'wara seharaan pakistan', '31.5735797', '74.5042132', NULL, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2020_07_20_114348_subscriptions', 1),
(35, '2014_10_12_000000_create_users_table', 2),
(36, '2014_10_12_100000_create_password_resets_table', 2),
(37, '2020_07_10_055710_create_gmaps_geocache_table', 2),
(38, '2020_07_22_062034_user_packages', 2),
(39, '2020_07_22_062051_packages', 2),
(40, '2020_07_23_062102_profile', 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `limit` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `days`, `price`, `limit`) VALUES
(1, 'Weekly', 'none', 7, 10, 1000),
(2, 'Montly', 'none', 30, 25, 1000);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('faisalsehar786@gmail.com', '$2y$10$T.Szf6j4OukGYdCKiG2fR.HAI3dooJUxpcNzCrZElNC97.vWCJOla', '2020-08-25 08:09:37');

-- --------------------------------------------------------

--
-- Struttura della tabella `subscriptions`
--

CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_plan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `userpackages`
--

CREATE TABLE IF NOT EXISTS `userpackages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `charge_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dump dei dati per la tabella `userpackages`
--

INSERT INTO `userpackages` (`id`, `user_id`, `package_id`, `charge_id`, `created_at`, `updated_at`) VALUES
(3, 1, 2, 'PAYID-L5ZSY4Q40B64679MK417174X', '2020-09-29 10:46:13', '2020-09-29 10:48:48');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactotp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term_con` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `company`, `contact`, `contactotp`, `city`, `country`, `address`, `password`, `term_con`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'faisal abbas', 'faisalsehar786@gmail.com', 'faisalsehar786@gmail.com', 'property', NULL, NULL, NULL, NULL, NULL, '$2y$10$EzAk/ocVdRP2wLqhplvrFuO.h0kwnLc.efiJevJHnFKBSNEOh54d.', 'yes', 'lmPkB0tDeRX3AgRm5cFqcwmxgYyrzixcNmplA72wXvpmWDaCGTTUbJjKSzpM', '2020-07-23 10:18:01', '2020-08-29 09:29:48'),
(5, 'tanzeel', 'tanzeel@ngmail.com', 'tanzeel@', 'pakistan14@22', NULL, NULL, NULL, NULL, NULL, '$2y$10$7CT2eJqMvIiU7p3eTOGH7.E7fapml1Ni88LHT89NqM6UZFhteC4Dy', 'yes', NULL, '2020-08-29 09:43:41', '2020-08-29 09:49:36'),
(6, 'SANDROLB', 'sandro.la.barbera86@gmail.com', 'SANDROLB', 'Sandro srl', NULL, NULL, NULL, NULL, NULL, '$2y$10$ReSiuuWgm13BGYvlty28VO8pHzNFWkVLsan2lcfEyII0Sq4gMPOiK', 'yes', NULL, '2020-08-31 06:55:25', '2020-08-31 06:55:25'),
(7, 'Giuseppe', 'calogero-distefano@virgilio.it', 'PeppeLav', 'Lavanderia Di Stefano', NULL, NULL, NULL, NULL, NULL, '$2y$10$.6UGLZJ5l2wALURM8nIqSuA/dJ1C4aPmxMJZUhvl5VrhUgoEnpJNi', 'yes', 'jtU58chKxEotsIxPJ4tGCKLRQZLUInyrNj6Geh0b8g7TYZSBC52bNw3V7RKS', '2020-09-14 07:08:16', '2020-09-14 07:08:16'),
(8, 'Mar', 'marcello.palazzolo@mas-system.it', 'masgogo', 'MAS System srl', NULL, NULL, NULL, NULL, NULL, '$2y$10$XSRybCGwkZ9y5KyPspfFdO/i2RgfB1dHEAlCIkISKhIGFRKWnaTJm', 'yes', NULL, '2020-09-25 06:23:27', '2020-09-25 06:23:27'),
(9, 'prova', 'marcello.palazzolo@gmail.com', 'marcello', 'marce mas', NULL, NULL, NULL, NULL, NULL, '$2y$10$/dS8OTjLtgz41ni9nCgGOuQxHrINWVPGkqvIF287M08gX.SwVIG76', 'yes', NULL, '2020-11-04 14:31:25', '2020-11-04 14:31:25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
