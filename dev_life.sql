-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 28 2018 г., 10:04
-- Версия сервера: 5.5.58
-- Версия PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dev_life`
--

-- --------------------------------------------------------

--
-- Структура таблицы `dishes`
--

CREATE TABLE `dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `dishes`
--

INSERT INTO `dishes` (`id`, `title`, `alias`, `price`, `amount`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 'завтрак_1', 'zavtrak_1', 30.00, 130, 1, '2018-09-26 18:33:38', '2018-09-26 18:33:42'),
(2, 'завтрак_2', 'zavtrak_2', 45.00, 160, 1, '2018-09-26 18:33:39', '2018-09-26 18:33:44'),
(3, 'дессерт_1', 'dessert_1', 70.00, 200, 2, '2018-09-27 08:12:15', '2018-09-27 08:12:18'),
(4, 'дессерт_2', 'dessert_2', 85.00, 210, 2, '2018-09-27 08:12:54', '2018-09-27 08:12:57'),
(5, 'напиток_1', 'napitok_1', 55.00, 200, 3, '2018-09-27 08:13:49', '2018-09-27 08:13:55'),
(7, 'напиток_2', 'napitok_2', 65.00, 200, 3, '2018-09-27 08:14:26', '2018-09-27 08:14:29'),
(8, 'гарнир_1', 'garnir_1', 110.00, 250, 4, '2018-09-27 08:15:18', '2018-09-27 08:15:21'),
(9, 'гарнир_2', 'garnir_2', 120.00, 230, 4, '2018-09-27 08:15:54', '2018-09-27 08:15:57');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `menus`
--

INSERT INTO `menus` (`id`, `name`, `alias`, `created_at`, `updated_at`) VALUES
(1, 'Завтраки', 'breakfasts', '2018-09-26 18:33:25', '2018-09-26 18:33:26'),
(2, 'Дессерты', 'desserts', '2018-09-27 08:06:35', '2018-09-27 08:06:37'),
(3, 'Напитки', 'drinks', '2018-09-27 08:07:09', '2018-09-27 08:07:11'),
(4, 'Гарниры', 'sidedishes', '2018-09-27 08:09:17', '2018-09-27 08:09:19');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2018_09_26_161552_CreateDishesTable', 2),
('2018_07_31_155920_CreateMenusTable', 3),
('2018_08_18_075616_CreateReservesTable', 4),
('2018_09_06_163313_CreateRolesTable', 5),
('2018_09_21_154540_CreatePermissionsTable', 6),
('2018_09_14_085817_CreateReservesDishesTable', 7),
('2018_09_06_163447_CreateRoleUserTable', 8),
('2018_09_21_154632_CreatePermissionRoleTable', 9),
('2018_09_26_182125_ChangeDishesTable', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'VIEW_ADMIN', '2018-09-27 07:43:54', '2018-09-27 07:43:56'),
(2, 'CREATE_GROUP', '2018-09-27 07:44:41', '2018-09-27 07:44:43');

-- --------------------------------------------------------

--
-- Структура таблицы `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `permission_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-09-27 07:46:48', '2018-09-27 07:46:50'),
(2, 1, 2, '2018-09-27 07:47:05', '2018-09-27 07:47:06');

-- --------------------------------------------------------

--
-- Структура таблицы `reserves`
--

CREATE TABLE `reserves` (
  `id` int(10) UNSIGNED NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `reserves`
--

INSERT INTO `reserves` (`id`, `note`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'nochwas', 1, '2018-09-27 05:00:36', '2018-09-27 05:00:36'),
(4, 'viel user', 2, '2018-09-27 05:25:08', '2018-09-27 05:25:08'),
(5, 'ждем много еды', 3, '2018-09-28 03:44:19', '2018-09-28 03:44:19'),
(6, 'for admin', 1, '2018-09-28 05:54:00', '2018-09-28 05:54:00');

-- --------------------------------------------------------

--
-- Структура таблицы `reserves_dishes`
--

CREATE TABLE `reserves_dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `reserves_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `dishes_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `amount` int(10) UNSIGNED NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `reserves_dishes`
--

INSERT INTO `reserves_dishes` (`id`, `reserves_id`, `dishes_id`, `title`, `alias`, `qty`, `amount`, `price`) VALUES
(5, 3, 2, 'завтрак_2', 'zavtrak_2', 5, 160, 225.00),
(6, 3, 1, 'завтрак_1', 'zavtrak_1', 2, 130, 60.00),
(7, 4, 7, 'напиток_2', 'napitok_2', 3, 200, 195.00),
(8, 4, 8, 'гарнир_1', 'garnir_1', 3, 250, 330.00),
(9, 4, 9, 'гарнир_2', 'garnir_2', 2, 230, 240.00),
(10, 5, 1, 'завтрак_1', 'zavtrak_1', 3, 130, 90.00),
(11, 5, 2, 'завтрак_2', 'zavtrak_2', 4, 160, 180.00),
(12, 5, 8, 'гарнир_1', 'garnir_1', 2, 250, 220.00),
(13, 5, 5, 'напиток_1', 'napitok_1', 5, 200, 275.00),
(14, 5, 7, 'напиток_2', 'napitok_2', 7, 200, 455.00),
(15, 6, 4, 'дессерт_2', 'dessert_2', 4, 210, 340.00),
(16, 6, 8, 'гарнир_1', 'garnir_1', 3, 250, 330.00),
(17, 6, 9, 'гарнир_2', 'garnir_2', 2, 230, 240.00),
(18, 6, 1, 'завтрак_1', 'zavtrak_1', 3, 130, 90.00),
(19, 6, 2, 'завтрак_2', 'zavtrak_2', 2, 160, 90.00);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2018-09-27 07:46:13', '2018-09-27 07:46:14'),
(2, 'Client', '2018-09-27 07:46:24', '2018-09-27 07:46:26');

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-09-27 07:48:37', '2018-09-27 07:48:38'),
(2, 2, 2, '2018-09-28 05:52:40', '2018-09-28 05:52:41'),
(3, 3, 2, '2018-09-28 06:16:23', '2018-09-28 06:16:24');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin1', 'admin1@admin.com', '$2y$10$jRM84Uy27Oe6ZPneCjEMM.4TRjMoeU2tEouCuJHYvxjn49Kh86Ta2', 'i3SuI6ZkImfB3xhL6jJ7A0qnOAiH8RQdmSLOyA34MpqugS75ZBxWPOywdLa0', '2018-09-26 15:35:51', '2018-09-28 06:01:27'),
(2, 'user1', 'user1@user.com', '$2y$10$fj3mY5S3n2zt7bquLsbYue/qJBcvwLxaYIC6FEUJAg.Kar7EseOpy', 'zeBqqu7IZkkLxhAUHIIFJPAGu5cKI6x6TRFlr34IQCWJ5ReVSgZVMQTnIxK4', '2018-09-27 05:03:32', '2018-09-27 09:34:54'),
(3, 'user2', 'user2@user.com', '$2y$10$Gbkq8G9j/72WS120a7gxQe4iu2sDR1vB0WNAvy0udKIFirkcd62jO', 'S1xcI0GmvEfY0gJ2o3ZfJYJm3o8nLZki8MTWxAlCxPRMk4h7ob9tHDjmQ3Zk', '2018-09-28 03:15:34', '2018-09-28 05:52:37');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dishes_alias_unique` (`alias`),
  ADD KEY `dishes_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_alias_unique` (`alias`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Индексы таблицы `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `reserves_dishes`
--
ALTER TABLE `reserves_dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserves_dishes_reserves_id_foreign` (`reserves_id`),
  ADD KEY `reserves_dishes_dishes_id_foreign` (`dishes_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT для таблицы `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `reserves_dishes`
--
ALTER TABLE `reserves_dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `reserves_dishes`
--
ALTER TABLE `reserves_dishes`
  ADD CONSTRAINT `reserves_dishes_dishes_id_foreign` FOREIGN KEY (`dishes_id`) REFERENCES `dishes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserves_dishes_reserves_id_foreign` FOREIGN KEY (`reserves_id`) REFERENCES `reserves` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
