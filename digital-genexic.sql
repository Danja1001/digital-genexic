-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 03 2019 г., 00:04
-- Версия сервера: 5.7.20
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `digital-genexic`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about_us_pages`
--

CREATE TABLE `about_us_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `blog_pages`
--

CREATE TABLE `blog_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `search_btn_placeholder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `blog_page_details`
--

CREATE TABLE `blog_page_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `blog_to_images`
--

CREATE TABLE `blog_to_images` (
  `blog_page_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `contact_pages`
--

CREATE TABLE `contact_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `form_btn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `home_pages`
--

CREATE TABLE `home_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `header_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `footer_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_text` text COLLATE utf8mb4_unicode_ci,
  `footer_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `home_pages`
--

INSERT INTO `home_pages` (`id`, `lang_id`, `title`, `subtitle`, `header_btn_title`, `created_at`, `updated_at`, `footer_title`, `footer_text`, `footer_btn_title`) VALUES
(1, 2, 'WE ARE DIGITAL AGENCY', 'We Create Your Imagination Into Reality', 'Get in touch', NULL, NULL, 'LET’S START', 'Our web studio is a reliable partner in the Internet environment. We are working on projects not for the sake of portfolio renewal, but, on the contrary, all our efforts are aimed at the best result, which will bring profit to our clients. Your business is in good hands.', 'Start'),
(2, 1, 'Мы цифровая студия', 'Мы создаем ваше воображение в реальность', 'Получить в одно касание ', NULL, NULL, 'Летс старт', 'Наша студия ......', 'Старт');

-- --------------------------------------------------------

--
-- Структура таблицы `home_to_images`
--

CREATE TABLE `home_to_images` (
  `home_page_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `home_to_images`
--

INSERT INTO `home_to_images` (`home_page_id`, `image_id`) VALUES
(1, 1),
(2, 1),
(1, 2),
(2, 2),
(1, 3),
(2, 3),
(1, 4),
(2, 4),
(1, 5),
(2, 5),
(1, 6),
(2, 6);

-- --------------------------------------------------------

--
-- Структура таблицы `home_to_paragraphs`
--

CREATE TABLE `home_to_paragraphs` (
  `home_page_id` int(10) UNSIGNED NOT NULL,
  `paragraph_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `home_to_paragraphs`
--

INSERT INTO `home_to_paragraphs` (`home_page_id`, `paragraph_id`) VALUES
(1, 1),
(2, 2),
(1, 3),
(2, 4),
(1, 5),
(2, 6),
(1, 7),
(2, 8);

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'home/3d.png', 1, NULL, NULL),
(2, 'home/portfolio.png', 1, NULL, NULL),
(3, 'home/smartphone.png', 1, NULL, NULL),
(4, 'home/color-circle.png', 1, NULL, NULL),
(5, 'home/laptop.png', 1, NULL, NULL),
(6, 'home/layers.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `image_texts`
--

CREATE TABLE `image_texts` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `image_texts`
--

INSERT INTO `image_texts` (`id`, `image_id`, `lang_id`, `title`, `text`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '3D- GRAPHICS', NULL, NULL, NULL),
(2, 1, 1, '3D графика', NULL, NULL, NULL),
(3, 4, 2, 'CORPORATE STYLE\r\n\r\n', NULL, NULL, NULL),
(4, 4, 1, 'Корпоративный стиль', NULL, NULL, NULL),
(5, 5, 2, 'Laptop', NULL, NULL, NULL),
(6, 5, 1, 'лпатоп', NULL, NULL, NULL),
(7, 6, 2, 'asaddassda', NULL, NULL, NULL),
(8, 6, 1, 'фвыыв', NULL, NULL, NULL),
(9, 2, 2, 'asdasdsaddasad', NULL, NULL, NULL),
(10, 2, 1, 'фыаыфвфыв', NULL, NULL, NULL),
(11, 3, 2, 'adsasdadssadaszxc', NULL, NULL, NULL),
(12, 3, 1, 'фывяяяывфывф', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `langs`
--

CREATE TABLE `langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `langs`
--

INSERT INTO `langs` (`id`, `code`, `created_at`, `updated_at`) VALUES
(1, 'ru', NULL, NULL),
(2, 'en', NULL, NULL),
(3, 'uk', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_29_200856_create_langs_table', 1),
(4, '2019_11_29_200860_create_home_pages_table', 1),
(5, '2019_11_30_122417_create_portfolio_pages_table', 1),
(6, '2019_11_30_122443_create_blog_pages_table', 1),
(7, '2019_11_30_122458_create_contact_pages_table', 1),
(8, '2019_11_30_122518_create_service_pages_table', 1),
(9, '2019_11_30_122539_create_about_us_pages_table', 1),
(10, '2019_11_30_123549_create_images_table', 1),
(11, '2019_11_30_123610_create_portfolio_to_images_table', 1),
(12, '2019_11_30_123645_create_blog_to_images_table', 1),
(13, '2019_11_30_123904_create_home_to_images_table', 1),
(14, '2019_11_30_131151_create_service_categories_table', 1),
(15, '2019_11_30_131240_create_services_table', 1),
(16, '2019_11_30_144341_create_paragraphs_table', 1),
(17, '2019_11_30_145426_create_portfolio_to_paragraphs_table', 1),
(18, '2019_11_30_145631_create_service_to_paragraphs_table', 1),
(19, '2019_11_30_151842_create_image_texts_table', 1),
(20, '2019_11_30_163102_create_blog_page_details_table', 1),
(21, '2019_11_30_163135_create_portfolio_page_details_table', 1),
(22, '2019_12_01_095926_create_home_to_paragraphs_table', 2),
(25, '2019_12_01_111949_update_home_page_add_footer_columns', 3),
(26, '2019_12_01_112014_create_working_proccesses_table', 3),
(27, '2019_12_01_112329_create_working_proccess_services_table', 3),
(28, '2019_12_01_112711_update_working_processes_table_add_lang_foreign', 4),
(29, '2019_12_01_113047_update_working_processes_services_table_add_lang_foreign', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `paragraphs`
--

CREATE TABLE `paragraphs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `paragraphs`
--

INSERT INTO `paragraphs` (`id`, `lang_id`, `title`, `text`, `location`) VALUES
(1, 2, 'OUR MISSION', 'We Create Your Imagination Iis the conscientious observance of all conditions at the stage of cooperation since each client is very important for us.You set goals and we embody them in life into Reality', 'our_mission'),
(2, 1, 'Наша миссия', 'We Create Your Imagination Iis the conscientious observance of all conditions at the stage of cooperation since each client is very important for us.You set goals and we embody them in life into Reality', 'our_mission'),
(3, 2, 'OUR STUDIO\r\nOFFER', NULL, 'offer'),
(4, 1, 'НАША СТУДИЯ ПРЕДОСТАВЛЯЕТ', NULL, 'offer'),
(5, 2, 'WORKING PROCESS', 'We realize what has to be done, and offer information about the project at every single stage. We are ready to answer any questions you may have at any time.', 'working_process'),
(6, 1, 'Рабочий процесс', 'We realize what has to be done, and offer information about the project at every single stage. We are ready to answer any questions you may have at any time.', 'working_process'),
(7, 2, 'YOUR MOST AUDACIOUS VISION', 'Let us at it', 'vision'),
(8, 1, 'ВАШЕ САМОЕ АУДИОЗВУЧНОЕ ВИДЕНИЕ', 'Давайте на это', 'vision');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio_pages`
--

CREATE TABLE `portfolio_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtitle_text` text COLLATE utf8mb4_unicode_ci,
  `footer_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_btn_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio_page_details`
--

CREATE TABLE `portfolio_page_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio_to_images`
--

CREATE TABLE `portfolio_to_images` (
  `portfolio_page_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio_to_paragraphs`
--

CREATE TABLE `portfolio_to_paragraphs` (
  `portfolio_page_id` int(10) UNSIGNED NOT NULL,
  `paragraph_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `service_category_id` int(10) UNSIGNED NOT NULL,
  `head_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `service_categories`
--

CREATE TABLE `service_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `service_pages`
--

CREATE TABLE `service_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `footer_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `service_to_paragraphs`
--

CREATE TABLE `service_to_paragraphs` (
  `service_id` int(10) UNSIGNED NOT NULL,
  `paragraph_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Genexic', 'genexic.admin@genexic.com', '$2y$10$hedjPvnZqJp4PvbDn7q5VuFM/suWI/69TLF/IGixhK6zDppX2Ffk2', NULL, '2019-12-01 08:09:57', '2019-12-01 08:09:57');

-- --------------------------------------------------------

--
-- Структура таблицы `working_proccesses`
--

CREATE TABLE `working_proccesses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `working_proccesses`
--

INSERT INTO `working_proccesses` (`id`, `title`, `created_at`, `updated_at`, `lang_id`) VALUES
(1, 'INTERVIEW, ESTIMATES\r\n& PROJECT CONTRACT', NULL, NULL, 2),
(2, 'ИНТЕРВЬЮ ОЦЕКИ ПРОЕКТЫ КОНТРАКТЫ', NULL, NULL, 1),
(3, 'PROTOTYPING\r\n& DESIGN', NULL, NULL, 2),
(4, 'Прототипизация и дизайн', NULL, NULL, 1),
(5, 'TECHNICAL\r\nIMPLEMENTATION', NULL, NULL, 2),
(6, 'Техническая реализация', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `working_proccess_services`
--

CREATE TABLE `working_proccess_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `working_process_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `working_proccess_services`
--

INSERT INTO `working_proccess_services` (`id`, `working_process_id`, `name`, `text`, `created_at`, `updated_at`, `lang_id`) VALUES
(1, 1, 'Interview', 'Lorem Ipsum', NULL, NULL, 2),
(2, 2, 'Интерьвю', 'Лорем', NULL, NULL, 1),
(3, 3, 'Project analytics and research', 'Lorem EN', NULL, NULL, 2),
(4, 4, 'Проектная аналитика', 'ЛОРЕМ РУ', NULL, NULL, 1),
(5, 5, 'Coding and programming', 'LOREM E N', NULL, NULL, 2),
(6, 6, 'Кодинг и программирование', 'ЛОРЕМ РУ', NULL, NULL, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `about_us_pages`
--
ALTER TABLE `about_us_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `about_us_pages_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_pages_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `blog_page_details`
--
ALTER TABLE `blog_page_details`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `blog_to_images`
--
ALTER TABLE `blog_to_images`
  ADD PRIMARY KEY (`blog_page_id`,`image_id`),
  ADD KEY `blog_to_images_image_id_foreign` (`image_id`);

--
-- Индексы таблицы `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `contact_pages_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `home_pages`
--
ALTER TABLE `home_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_pages_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `home_to_images`
--
ALTER TABLE `home_to_images`
  ADD PRIMARY KEY (`home_page_id`,`image_id`),
  ADD KEY `home_to_images_image_id_foreign` (`image_id`);

--
-- Индексы таблицы `home_to_paragraphs`
--
ALTER TABLE `home_to_paragraphs`
  ADD PRIMARY KEY (`home_page_id`,`paragraph_id`),
  ADD KEY `home_to_paragraphs_paragraph_id_foreign` (`paragraph_id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `image_texts`
--
ALTER TABLE `image_texts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_texts_image_id_foreign` (`image_id`),
  ADD KEY `image_texts_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `langs_code_unique` (`code`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paragraphs_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `portfolio_pages`
--
ALTER TABLE `portfolio_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `portfolio_pages_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `portfolio_page_details`
--
ALTER TABLE `portfolio_page_details`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `portfolio_to_images`
--
ALTER TABLE `portfolio_to_images`
  ADD PRIMARY KEY (`portfolio_page_id`,`image_id`),
  ADD KEY `portfolio_to_images_image_id_foreign` (`image_id`);

--
-- Индексы таблицы `portfolio_to_paragraphs`
--
ALTER TABLE `portfolio_to_paragraphs`
  ADD PRIMARY KEY (`portfolio_page_id`,`paragraph_id`),
  ADD KEY `portfolio_to_paragraphs_paragraph_id_foreign` (`paragraph_id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_lang_id_foreign` (`lang_id`),
  ADD KEY `services_service_category_id_foreign` (`service_category_id`);

--
-- Индексы таблицы `service_categories`
--
ALTER TABLE `service_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_categories_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `service_pages`
--
ALTER TABLE `service_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_pages_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `service_to_paragraphs`
--
ALTER TABLE `service_to_paragraphs`
  ADD PRIMARY KEY (`service_id`,`paragraph_id`),
  ADD KEY `service_to_paragraphs_paragraph_id_foreign` (`paragraph_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Индексы таблицы `working_proccesses`
--
ALTER TABLE `working_proccesses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `working_proccesses_lang_id_foreign` (`lang_id`);

--
-- Индексы таблицы `working_proccess_services`
--
ALTER TABLE `working_proccess_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `working_proccess_services_working_process_id_foreign` (`working_process_id`),
  ADD KEY `working_proccess_services_lang_id_foreign` (`lang_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `about_us_pages`
--
ALTER TABLE `about_us_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `blog_pages`
--
ALTER TABLE `blog_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `blog_page_details`
--
ALTER TABLE `blog_page_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `contact_pages`
--
ALTER TABLE `contact_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `home_pages`
--
ALTER TABLE `home_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `image_texts`
--
ALTER TABLE `image_texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `paragraphs`
--
ALTER TABLE `paragraphs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `portfolio_pages`
--
ALTER TABLE `portfolio_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `portfolio_page_details`
--
ALTER TABLE `portfolio_page_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `service_categories`
--
ALTER TABLE `service_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `service_pages`
--
ALTER TABLE `service_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `working_proccesses`
--
ALTER TABLE `working_proccesses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `working_proccess_services`
--
ALTER TABLE `working_proccess_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `about_us_pages`
--
ALTER TABLE `about_us_pages`
  ADD CONSTRAINT `about_us_pages_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `blog_pages`
--
ALTER TABLE `blog_pages`
  ADD CONSTRAINT `blog_pages_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `blog_to_images`
--
ALTER TABLE `blog_to_images`
  ADD CONSTRAINT `blog_to_images_blog_page_id_foreign` FOREIGN KEY (`blog_page_id`) REFERENCES `blog_pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blog_to_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `contact_pages`
--
ALTER TABLE `contact_pages`
  ADD CONSTRAINT `contact_pages_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `home_pages`
--
ALTER TABLE `home_pages`
  ADD CONSTRAINT `home_pages_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `home_to_images`
--
ALTER TABLE `home_to_images`
  ADD CONSTRAINT `home_to_images_home_page_id_foreign` FOREIGN KEY (`home_page_id`) REFERENCES `home_pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `home_to_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `home_to_paragraphs`
--
ALTER TABLE `home_to_paragraphs`
  ADD CONSTRAINT `home_to_paragraphs_home_page_id_foreign` FOREIGN KEY (`home_page_id`) REFERENCES `home_pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `home_to_paragraphs_paragraph_id_foreign` FOREIGN KEY (`paragraph_id`) REFERENCES `paragraphs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `image_texts`
--
ALTER TABLE `image_texts`
  ADD CONSTRAINT `image_texts_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `image_texts_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `paragraphs`
--
ALTER TABLE `paragraphs`
  ADD CONSTRAINT `paragraphs_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `portfolio_pages`
--
ALTER TABLE `portfolio_pages`
  ADD CONSTRAINT `portfolio_pages_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `portfolio_to_images`
--
ALTER TABLE `portfolio_to_images`
  ADD CONSTRAINT `portfolio_to_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `portfolio_to_images_portfolio_page_id_foreign` FOREIGN KEY (`portfolio_page_id`) REFERENCES `portfolio_pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `portfolio_to_paragraphs`
--
ALTER TABLE `portfolio_to_paragraphs`
  ADD CONSTRAINT `portfolio_to_paragraphs_paragraph_id_foreign` FOREIGN KEY (`paragraph_id`) REFERENCES `paragraphs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `portfolio_to_paragraphs_portfolio_page_id_foreign` FOREIGN KEY (`portfolio_page_id`) REFERENCES `portfolio_pages` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `services_service_category_id_foreign` FOREIGN KEY (`service_category_id`) REFERENCES `service_categories` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `service_categories`
--
ALTER TABLE `service_categories`
  ADD CONSTRAINT `service_categories_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `service_pages`
--
ALTER TABLE `service_pages`
  ADD CONSTRAINT `service_pages_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `service_to_paragraphs`
--
ALTER TABLE `service_to_paragraphs`
  ADD CONSTRAINT `service_to_paragraphs_paragraph_id_foreign` FOREIGN KEY (`paragraph_id`) REFERENCES `paragraphs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `service_to_paragraphs_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `working_proccesses`
--
ALTER TABLE `working_proccesses`
  ADD CONSTRAINT `working_proccesses_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `working_proccess_services`
--
ALTER TABLE `working_proccess_services`
  ADD CONSTRAINT `working_proccess_services_lang_id_foreign` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `working_proccess_services_working_process_id_foreign` FOREIGN KEY (`working_process_id`) REFERENCES `working_proccesses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
