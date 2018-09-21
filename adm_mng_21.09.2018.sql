-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 21 2018 г., 13:10
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
('2018_09_06_190620_DropRestTables', 19),
('2018_09_14_085817_Create_Reserves_Dishes_Table', 20),
('2018_09_14_114454_Change_Reserves_Table_3', 21);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `reserves`
--

INSERT INTO `reserves` (`id`, `created_at`, `updated_at`, `note`, `user_id`) VALUES
(88, '2018-09-20 14:45:57', '2018-09-20 14:45:57', 'scoool', 1),
(89, '2018-09-20 14:48:44', '2018-09-20 14:48:44', 'scoool', 1),
(90, '2018-09-20 14:50:09', '2018-09-20 14:50:09', 'жду всех блюд', 1),
(91, '2018-09-20 14:50:09', '2018-09-20 14:50:09', 'жду всех блюд', 1),
(92, '2018-09-20 14:50:10', '2018-09-20 14:50:10', 'жду всех блюд', 1),
(93, '2018-09-20 14:52:52', '2018-09-20 14:52:52', 'все блюда', 1),
(94, '2018-09-20 14:56:26', '2018-09-20 14:56:26', 'много всего', 1),
(95, '2018-09-20 15:00:42', '2018-09-20 15:00:42', 'много всего', 1);

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
(36, 88, 2, 'завтрак 2', 'zavtrak_2', 5, 130, 150.00),
(37, 89, 2, 'завтрак 2', 'zavtrak_2', 5, 130, 150.00),
(38, 90, 1, 'завтрак 1', 'zavtrak_1', 3, 130, 90.00),
(39, 91, 2, 'завтрак 2', 'zavtrak_2', 2, 130, 60.00),
(40, 92, 4, 'Дессерт_2', 'dessert_2', 8, 145, 1200.00),
(41, 93, 2, 'завтрак 2', 'zavtrak_2', 4, 130, 120.00),
(42, 93, 6, 'напиток_2', 'napitok_2', 5, 200, 275.00),
(43, 94, 2, 'завтрак 2', 'zavtrak_2', 4, 130, 120.00),
(44, 94, 5, 'напиток_1', 'napitok_1', 7, 200, 280.00),
(45, 94, 6, 'напиток_2', 'napitok_2', 8, 200, 440.00),
(46, 94, 8, 'первое блюдо 2', 'pervoye_bludo_2', 12, 230, 4200.00),
(47, 95, 2, 'завтрак 2', 'zavtrak_2', 4, 130, 120.00),
(48, 95, 5, 'напиток_1', 'napitok_1', 7, 200, 280.00),
(49, 95, 6, 'напиток_2', 'napitok_2', 8, 200, 440.00),
(50, 95, 8, 'первое блюдо 2', 'pervoye_bludo_2', 12, 230, 4200.00);

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
(1, 'ADMIN1', 'admin1@admin.com', '$2y$10$U17GB2aYL5qgh/gYt7G57.j9hccaOQkyrzWYmvofbEtXnc3eLI32G', 'T7kOcphx6z3hF804MuZ3rIkEH4f7vvyc34nFWeJYSRERIujbYrgezOMzrpQu', '2018-08-04 10:06:08', '2018-09-21 06:56:48'),
(7, 'user1', 'user1@user.com', '$2y$10$6qwYjtFb4AGAyYjxXOkOu.QLpbEUpovuuBJFoSqFOM/3IagQN3TIe', 'PpgnvqxDYJTMzpzJ6HOlUnwhGGW7YSRQKejtbJMkuXsmHrxMWSsvYyIn9190', '2018-09-05 05:55:45', '2018-09-13 14:43:37');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT для таблицы `reserves_dishes`
--
ALTER TABLE `reserves_dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

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
-- Ограничения внешнего ключа таблицы `reserves_dishes`
--
ALTER TABLE `reserves_dishes`
  ADD CONSTRAINT `FK_reserves_dishes_dishes` FOREIGN KEY (`dishes_id`) REFERENCES `dishes` (`id`),
  ADD CONSTRAINT `reserves_dishes_reserves_id_foreign` FOREIGN KEY (`reserves_id`) REFERENCES `reserves` (`id`);

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
