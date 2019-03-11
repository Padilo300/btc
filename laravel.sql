-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 11 2019 г., 19:24
-- Версия сервера: 5.7.25-0ubuntu0.18.04.2
-- Версия PHP: 7.2.15-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laravel`
--

-- --------------------------------------------------------

--
-- Структура таблицы `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `startCurr` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `finishCurr` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `href` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `s_BTC` tinyint(1) DEFAULT NULL,
  `s_BTH` tinyint(1) DEFAULT NULL,
  `s_BCH` tinyint(1) DEFAULT NULL,
  `s_BSV` tinyint(1) DEFAULT NULL,
  `s_BTG` tinyint(1) DEFAULT NULL,
  `s_ETH` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `f_BTC` tinyint(1) DEFAULT NULL,
  `f_BСH` tinyint(1) DEFAULT NULL,
  `f_BSV` tinyint(1) DEFAULT NULL,
  `f_BTG` tinyint(1) DEFAULT NULL,
  `f_ETH` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `startCurr`, `finishCurr`, `href`, `s_BTC`, `s_BTH`, `s_BCH`, `s_BSV`, `s_BTG`, `s_ETH`, `created_at`, `updated_at`, `f_BTC`, `f_BСH`, `f_BSV`, `f_BTG`, `f_ETH`) VALUES
(1, '11.02.2018', '', '', '', NULL, NULL, NULL, NULL, NULL, 0, '2019-03-08 13:44:00', '2019-03-08 13:44:00', 0, 0, 0, 0, 0),
(2, '13_01_2018', NULL, NULL, 'shef', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, '13_01_2018', NULL, NULL, 'https://google.com', 1, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, 1, NULL, 1, NULL),
(4, 'test', NULL, NULL, 'https://gidonline.io/', 1, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(5, 'bch', NULL, NULL, 'https://gidonline.io/', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL),
(6, 'BTC', NULL, NULL, 'https://gidonline.io/', 0, NULL, 1, 1, 1, NULL, NULL, NULL, 1, 1, 1, 1, NULL),
(7, 'BTC@', NULL, NULL, 'https://gidonline.io/', 1, NULL, 1, 1, 1, 1, NULL, NULL, 1, 1, 1, 1, NULL),
(8, 'testBTC', NULL, NULL, 'shef', 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `list_currens`
--

CREATE TABLE `list_currens` (
  `list_start` json NOT NULL,
  `list_finish` json NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_05_143029_create_currencies_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Константин Падило', 'padilo300@gmail.com', NULL, '$2y$10$TElDkAP5rte2SUaMS/EGgOhC63T4B4ZrrAtiKCz9KEAuxDDuUeQyW', NULL, '2019-03-08 13:43:51', '2019-03-08 13:43:51');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
