-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 07 2018 г., 11:15
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
-- База данных: `adm_mng`
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
(1, 'завтрак 1', 'zavtrak_1', 30.00, 130, 3, NULL, NULL),
(2, 'завтрак 2', 'zavtrak_2', 30.00, 130, 3, NULL, NULL),
(3, 'Дессерт_1', 'dessert_1', 100.00, 200, 4, NULL, NULL),
(4, 'Дессерт_2', 'dessert_2', 150.00, 145, 4, NULL, NULL),
(5, 'напиток_1', 'napitok_1', 40.00, 200, 1, NULL, NULL),
(6, 'напиток_2', 'napitok_2', 55.00, 200, 1, NULL, NULL),
(7, 'первое блюдо 1', 'pervoye_bludo_1', 400.00, 230, 2, NULL, NULL),
(8, 'первое блюдо 2', 'pervoye_bludo_2', 350.00, 230, 2, NULL, NULL);

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
(1, 'Напитки', 'drinks', NULL, NULL),
(2, 'Первые блюда', 'first_dishes', NULL, NULL),
(3, 'Завтраки', 'breakfasts', NULL, NULL),
(4, 'Дессетрты', 'desserts', NULL, NULL);

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
('2018_07_25_142430_create_table_mngs', 1),
('2018_07_25_142511_create_table_adms', 1),
('2018_07_31_155920_CreateMenusTable', 1),
('2018_07_31_161005_CreateTableDrinks', 1),
('2018_07_31_161845_CreateTableDesserts', 1),
('2018_07_31_161946_CreateTableFirstDishes', 1),
('2018_07_31_162057_CreateTableBreakfasts', 1),
('2018_07_31_162757_CreateTableOrders', 2),
('2018_08_12_145323_Change_Table_Desserts', 2),
('2018_08_12_145525_Change_Table_Drinks', 2),
('2018_08_12_145726_Change_Table_Breakfasts', 2),
('2018_08_12_145821_Change_Table_FirstDishes', 2),
('2018_08_12_150955_Change_Users_Table', 3),
('2018_08_18_075616_CreateReservesTable', 4),
('2018_08_30_093658_Change_Tbale_Breakfasts', 5),
('2018_08_30_162343_Rename_Columns_Table_Reserves', 6),
('2018_08_30_165226_Change_Reserves_Table_Fk', 7),
('2018_08_30_171420_Change_Reserve_Table_Drop_Raws', 8),
('2018_08_30_172917_Change_Breakfasts_Table', 9),
('2018_08_31_082903_Change_Table_Dishes', 10),
('2018_09_04_085305_ChangeTableMenus', 11),
('2018_09_04_134858_DropUniqueAliasReserves', 12),
('2018_09_05_085243_ChangeUsersTable_2', 13),
('2018_09_05_140102_DelRawBr_Reserves', 14),
('2018_09_06_163313_CreateTableRoles', 15),
('2018_09_06_163447_CreateTableRoleUser', 15),
('2018_09_06_163814_ChangeTableRoleUser', 16),
('2018_09_06_185957_DropAdmsTable', 17),
('2018_09_06_190323_DropMngsTable', 18),
('2018_09_06_190620_DropRestTables', 19);

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
-- Структура таблицы `reserves`
--

CREATE TABLE `reserves` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `dishes_id` int(10) UNSIGNED DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `reserves`
--

INSERT INTO `reserves` (`id`, `title`, `alias`, `price`, `qty`, `created_at`, `updated_at`, `dishes_id`, `note`, `user_id`, `amount`) VALUES
(32, 'напиток_1', 'napitok_1', 40.00, 1, '2018-09-05 11:24:58', '2018-09-05 11:24:58', 5, 'сообщение', 7, 200),
(33, 'напиток_2', 'napitok_2', 165.00, 3, '2018-09-05 11:24:58', '2018-09-05 11:24:58', 6, 'сообщение', 7, 200),
(34, 'первое блюдо 1', 'pervoye_bludo_1', 400.00, 1, '2018-09-05 11:27:52', '2018-09-05 11:27:52', 7, 'некст', 7, 230),
(35, 'первое блюдо 2', 'pervoye_bludo_2', 350.00, 1, '2018-09-05 11:27:52', '2018-09-05 11:27:52', 8, 'некст', 7, 230),
(36, 'напиток_1', 'napitok_1', 160.00, 4, '2018-09-05 11:31:47', '2018-09-05 11:31:47', 5, 'нет', 1, 200),
(37, 'завтрак 1', 'zavtrak_1', 90.00, 3, '2018-09-05 11:31:47', '2018-09-05 11:31:47', 1, 'нет', 1, 130),
(38, 'первое блюдо 1', 'pervoye_bludo_1', 1200.00, 3, '2018-09-06 12:50:04', '2018-09-06 12:50:04', 7, 'msg', 7, 230),
(39, 'первое блюдо 2', 'pervoye_bludo_2', 350.00, 1, '2018-09-06 12:50:04', '2018-09-06 12:50:04', 8, 'msg', 7, 230),
(40, 'первое блюдо 1', 'pervoye_bludo_1', 1200.00, 3, '2018-09-06 12:51:49', '2018-09-06 12:51:49', 7, 'msg', 7, 230),
(41, 'первое блюдо 2', 'pervoye_bludo_2', 350.00, 1, '2018-09-06 12:51:49', '2018-09-06 12:51:49', 8, 'msg', 7, 230),
(42, 'первое блюдо 1', 'pervoye_bludo_1', 1200.00, 3, '2018-09-06 13:00:06', '2018-09-06 13:00:06', 7, 'msg', 7, 230),
(43, 'первое блюдо 2', 'pervoye_bludo_2', 350.00, 1, '2018-09-06 13:00:06', '2018-09-06 13:00:06', 8, 'msg', 7, 230);

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
(1, 'Admin', NULL, NULL),
(2, 'Client', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `role_user`
--

INSERT INTO `role_user` (`id`, `created_at`, `updated_at`, `user_id`, `role_id`) VALUES
(1, '2018-09-06 16:43:08', '2018-09-06 16:43:10', 1, 1),
(2, '2018-09-06 16:43:24', '2018-09-06 16:43:25', 7, 2);

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
(1, 'ADMIN1', 'admin1@admin.com', '$2y$10$U17GB2aYL5qgh/gYt7G57.j9hccaOQkyrzWYmvofbEtXnc3eLI32G', 'FKC3md4kiCZj29ldDsF0lUkidYsySSE2KW7jTs5yubJpXfhlnoubnCSLP2Bh', '2018-08-04 10:06:08', '2018-09-07 04:30:00'),
(7, 'user1', 'user1@user.com', '$2y$10$6qwYjtFb4AGAyYjxXOkOu.QLpbEUpovuuBJFoSqFOM/3IagQN3TIe', 'RnXaFOJgCAeClSQiQej6RPATZRY2dww2MxHqQTPoQHJ9Azhr6JLd1SjqWQ4l', '2018-09-05 05:55:45', '2018-09-07 04:59:14');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
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
-- Индексы таблицы `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserves_dishes_id_foreign` (`dishes_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Ограничения внешнего ключа таблицы `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_dishes_id_foreign` FOREIGN KEY (`dishes_id`) REFERENCES `dishes` (`id`);

--
-- Ограничения внешнего ключа таблицы `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
