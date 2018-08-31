-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 31 2018 г., 16:43
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
-- Структура таблицы `adms`
--

CREATE TABLE `adms` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `breakfasts`
--

CREATE TABLE `breakfasts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reserve_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `breakfasts`
--

INSERT INTO `breakfasts` (`id`, `name`, `price`, `amount`, `created_at`, `updated_at`, `alias`, `reserve_id`) VALUES
(1, 'завтрак 1', 30.00, 130, '2018-08-12 15:16:28', '2018-08-12 15:16:29', 'zavtrak_1', NULL),
(2, 'завтрак 2', 30.00, 130, '2018-08-12 15:16:28', '2018-08-12 15:16:29', 'zavtrak_2', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `desserts`
--

CREATE TABLE `desserts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `desserts`
--

INSERT INTO `desserts` (`id`, `name`, `price`, `amount`, `created_at`, `updated_at`, `alias`) VALUES
(1, 'Дессерт_1', 100.00, 200, NULL, NULL, 'dessert_1'),
(2, 'Дессерт_2', 150.00, 180, NULL, NULL, 'dessert_2');

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
-- Структура таблицы `drinks`
--

CREATE TABLE `drinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `price`, `amount`, `created_at`, `updated_at`, `alias`) VALUES
(1, 'напиток_1', 40.00, 500, '2018-08-12 15:13:02', '2018-08-12 15:13:04', 'napitok_1'),
(2, 'напиток_2', 40.00, 500, '2018-08-12 15:13:02', '2018-08-12 15:13:04', 'napitok_2');

-- --------------------------------------------------------

--
-- Структура таблицы `first_dishes`
--

CREATE TABLE `first_dishes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `first_dishes`
--

INSERT INTO `first_dishes` (`id`, `name`, `price`, `amount`, `created_at`, `updated_at`, `alias`) VALUES
(1, 'первое блюдо 1', 400.00, 230, '2018-08-12 15:14:18', '2018-08-12 15:14:19', 'pervoye_bludo_1'),
(2, 'первое блюдо 2', 350.00, 230, '2018-08-12 15:14:18', '2018-08-12 15:14:23', 'pervoye_bludo_2');

-- --------------------------------------------------------

--
-- Структура таблицы `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
('2018_08_31_082903_Change_Table_Dishes', 10);

-- --------------------------------------------------------

--
-- Структура таблицы `mngs`
--

CREATE TABLE `mngs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `breakfast_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `reserves`
--

INSERT INTO `reserves` (`id`, `title`, `alias`, `price`, `qty`, `breakfast_id`, `created_at`, `updated_at`) VALUES
(2, '', 'zavtrak_2', 120.00, 4, NULL, '2018-08-30 14:25:03', '2018-08-30 14:25:03'),
(3, '', 'zavtrak_1', 90.00, 3, NULL, '2018-08-30 14:37:51', '2018-08-30 14:37:51');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `login`) VALUES
(1, 'ADMIN1', 'admin1@admin.com', '$2y$10$U17GB2aYL5qgh/gYt7G57.j9hccaOQkyrzWYmvofbEtXnc3eLI32G', 'lrvclguK9RE4Mqugl1pjiIkhiHJpndtKLrhFH3vYZVSdP44A64zBEwYCoZhe', '2018-08-04 10:06:08', '2018-08-25 08:58:38', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `adms`
--
ALTER TABLE `adms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `breakfasts`
--
ALTER TABLE `breakfasts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `breakfasts_reserve_id_foreign` (`reserve_id`);

--
-- Индексы таблицы `desserts`
--
ALTER TABLE `desserts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dishes_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `first_dishes`
--
ALTER TABLE `first_dishes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `mngs`
--
ALTER TABLE `mngs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `reserves_alias_unique` (`alias`),
  ADD KEY `reserves_breakfast_id_foreign` (`breakfast_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_login_unique` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `adms`
--
ALTER TABLE `adms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `breakfasts`
--
ALTER TABLE `breakfasts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `desserts`
--
ALTER TABLE `desserts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `first_dishes`
--
ALTER TABLE `first_dishes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `mngs`
--
ALTER TABLE `mngs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `breakfasts`
--
ALTER TABLE `breakfasts`
  ADD CONSTRAINT `breakfasts_reserve_id_foreign` FOREIGN KEY (`reserve_id`) REFERENCES `reserves` (`id`);

--
-- Ограничения внешнего ключа таблицы `dishes`
--
ALTER TABLE `dishes`
  ADD CONSTRAINT `dishes_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Ограничения внешнего ключа таблицы `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_breakfast_id_foreign` FOREIGN KEY (`breakfast_id`) REFERENCES `breakfasts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
