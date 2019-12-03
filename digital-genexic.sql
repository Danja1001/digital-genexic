-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 04 2019 г., 00:15
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
-- Структура таблицы `about_to_images`
--

CREATE TABLE `about_to_images` (
  `about_us_page_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about_to_images`
--

INSERT INTO `about_to_images` (`about_us_page_id`, `image_id`) VALUES
(1, 7),
(2, 7),
(1, 8),
(2, 8),
(1, 9),
(2, 9),
(1, 10),
(2, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `about_to_paragraphs`
--

CREATE TABLE `about_to_paragraphs` (
  `about_us_page_id` int(10) UNSIGNED NOT NULL,
  `paragraph_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about_to_paragraphs`
--

INSERT INTO `about_to_paragraphs` (`about_us_page_id`, `paragraph_id`) VALUES
(1, 9),
(2, 10),
(1, 11),
(2, 12),
(1, 13),
(2, 14),
(1, 15),
(2, 16),
(1, 17),
(2, 18),
(1, 19),
(2, 20),
(1, 21),
(2, 22),
(1, 23),
(2, 24),
(1, 25),
(2, 26),
(1, 27),
(2, 28),
(1, 29),
(2, 30),
(1, 31),
(2, 32),
(1, 33),
(2, 34),
(1, 35),
(2, 36),
(1, 37),
(2, 38);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `read_more_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `about_us_pages`
--

INSERT INTO `about_us_pages` (`id`, `lang_id`, `title`, `footer_title`, `footer_btn_title`, `created_at`, `updated_at`, `read_more_btn_title`) VALUES
(1, 2, 'ABOUT US', 'LET’S START A NEW PROJECT TOGETHER!', 'GET IN TOUCH', NULL, NULL, 'READ MORE'),
(2, 1, 'О НАС', 'Летс старт а нью проджет тугезер', 'ГЕТ ИН ТАЧ', NULL, NULL, 'ЧИТАТЬ БОЛЬШЕ');

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
(1, 'home/yvOHEpZ4Aasao2jzU9HY2mDIJxc33zudqXv1IxNw.png', 1, NULL, '2019-12-03 18:01:01'),
(2, 'home/PHTrRSiVZ1To3HDNqsvYVR1he0vjhu3rZaYe4iLh.png', 1, NULL, '2019-12-03 18:02:33'),
(3, 'home/reOgScp7leDNFHDtO5zCxZS2LizFX9upbCWUV2r4.png', 1, NULL, '2019-12-03 18:02:21'),
(4, 'home/qmd4jMOTl3ZYG5Y9wXNzUy0o7YWXkRyvIeSqMm24.png', 1, NULL, '2019-12-03 18:02:06'),
(5, 'home/thdPU8vgxnkuA6xZPZqPP4qr9v29rW0L38RdCO5A.png', 1, NULL, '2019-12-03 18:01:41'),
(6, 'home/cVbHp4KDgoN8K8GDfKj1pPIjplgvLhekJe9jxWlH.png', 1, NULL, '2019-12-03 18:01:54'),
(7, 'home/q41lALXmWjaPpJ9hLgrzMgwis3HJ38WT17F0QnNh.png', 0, NULL, '2019-12-03 19:04:05'),
(8, 'home/rXIVrrl4jmqKMF5JYkOhdXKvzHIRTqKWASu5xwPw.png', 1, NULL, '2019-12-03 19:05:09'),
(9, 'home/UYMUpYU9uxYmEGzSW17b6j7RZHQKcBJeqG0NaKjo.png', 1, NULL, '2019-12-03 19:05:20'),
(10, 'home/wZGUq48tviBsPjQWCJCSqisqEVY31WkhrEvvoXV6.png', 1, NULL, '2019-12-03 19:05:30');

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
(3, 4, 2, 'CORPORATE STYLE', NULL, NULL, '2019-12-03 18:02:06'),
(4, 4, 1, 'Корпоративный стиль', NULL, NULL, NULL),
(5, 5, 2, 'Laptop', NULL, NULL, NULL),
(6, 5, 1, 'лпатоп', NULL, NULL, NULL),
(7, 6, 2, 'asaddassda', NULL, NULL, NULL),
(8, 6, 1, 'фвыыв', NULL, NULL, NULL),
(9, 2, 2, 'asdasdsaddasad', NULL, NULL, NULL),
(10, 2, 1, 'фыаыфвфыв', NULL, NULL, NULL),
(11, 3, 2, 'adsasdadssadaszxc', NULL, NULL, NULL),
(12, 3, 1, 'фывяяяывфывф', NULL, NULL, NULL),
(13, 8, 2, '18 +', 'PROFESSIONALS', NULL, NULL),
(14, 8, 1, '18 +', 'ПРОФИ', NULL, NULL),
(15, 9, 2, '55 +', 'HAPPY CLIENTS', NULL, NULL),
(16, 9, 1, '55 +', 'СЧАСТЛИВЫЕ КЛИЕНТЫ', NULL, NULL),
(17, 10, 2, '63 +', 'DELIVERED PROJECTS', NULL, NULL),
(18, 10, 1, '63 +', 'ЗАВЕРШЕННЫЕ ПРОЕТКЫ', NULL, NULL);

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
(29, '2019_12_01_113047_update_working_processes_services_table_add_lang_foreign', 5),
(30, '2019_12_01_132651_create_project_types_table', 6),
(31, '2019_12_01_132652_create_projects_table', 6),
(32, '2019_12_02_100159_create_about_to_paragraphs_table', 6),
(33, '2019_12_02_100741_create_about_to_images_table', 6),
(34, '2019_12_02_101336_update_about_us_page_add_read_more_title', 6),
(35, '2019_12_02_102147_update_services_page_add_read_more_title', 6);

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
(8, 1, 'ВАШЕ САМОЕ АУДИОЗВУЧНОЕ ВИДЕНИЕ', 'Давайте на это1', 'vision'),
(9, 2, NULL, 'Genexic is a US Company with an R&D in Ukraine that has been helping inventors turn their thoughts into code since 2013. We use the latest tools to realize your ideas via computers and other devices.', 'main'),
(10, 1, NULL, 'Genexic is a РУ Company with an R&D in Ukraine that has been helping inventors turn their thoughts into code since 2013. We use the latest tools to realize your ideas via computers and other devices.', 'main'),
(11, 2, NULL, 'Developing new products for Gaming & Leisure, FinTech, Ecommerce & Retail, Media & Entertainment, Software & Hi-Tech; together we drive our society to be more innovative. Creating fascinating designs for websites and applications, we make the world more beautiful and enjoyable. Establishing good communication and management in each project, we make our relationships stronger and more trustworthy.', 'main'),
(12, 1, NULL, 'РУDeveloping new products for Gaming & Leisure, FinTech, Ecommerce & Retail, Media & Entertainment, Software & Hi-Tech; together we drive our society to be more innovative. Creating fascinating designs for websites and applications, we make the world more beautiful and enjoyable. Establishing good communication and management in each project, we make our relationships stronger and more trustworthy.', 'main'),
(13, 2, NULL, 'We truly care about bringing your business quick growth and great success. Focusing on results, openness, responsibility, our team always counts on these values while cooperating with you. Computools is not just a business partner, we are the true friends for those who depend on us in their creative process.', 'main'),
(14, 1, NULL, 'РУWe truly care about bringing your business quick growth and great success. Focusing on results, openness, responsibility, our team always counts on these values while cooperating with you. Computools is not just a business partner, we are the true friends for those who depend on us in their creative process.', 'main'),
(15, 2, NULL, 'You can contact our company from any part of the world, 24/7. Get personally acquainted with us in LosAngeles, Boston, Tel Aviv, Kiev, Khmelnitskii.', 'main'),
(16, 1, NULL, 'РУYou can contact our company from any part of the world, 24/7. Get personally acquainted with us in LosAngeles, Boston, Tel Aviv, Kiev, Khmelnitskii.', 'main'),
(17, 2, 'OUR MISSION', 'Promote prosperity for customers’ businesses through full cycle servicing of innovative software development, enabling customers to concentrate on their core tasks.', 'sub_main'),
(18, 1, 'НАША МИССИЯ', 'РУ Promote prosperity for customers’ businesses through full cycle servicing of innovative software development, enabling customers to concentrate on their core tasks.', 'sub_main'),
(19, 2, 'OUR VISION', 'To be a global service provider that helps develop innovative software products within our customers’ industries.', 'sub_main'),
(20, 1, 'НАШ ВИЗИОН', 'РУTo be a global service provider that helps develop innovative software products within our customers’ industries.', 'sub_main'),
(21, 2, 'WHY GENEXIC?', NULL, 'genexic'),
(22, 1, 'ПОчему Genexic?', NULL, 'genexic'),
(23, 2, 'SOLVING HARD TASKS', 'We are always on the client’s side providing best services in all aspects of our cooperation. We use all our experience and market’s best practices to solve your issues, and we do it very well.', 'genexic_desc'),
(24, 1, 'СОЛВИНГ ХАРД ТАСКС', 'РУWe are always on the client’s side providing best services in all aspects of our cooperation. We use all our experience and market’s best practices to solve your issues, and we do it very well.', 'genexic_desc'),
(25, 2, 'BEST STAFF FOR YOU', 'We always hire the most skilled staff, provide them ongoing learning in order to give you the best service.', 'genexic_desc'),
(26, 1, 'Лучшие сотрудники для тебя', 'РУWe always hire the most skilled staff, provide them ongoing learning in order to give you the best service.', 'genexic_desc'),
(27, 2, 'NO CONCERNS WITH THE STAFF', 'We take care of all the legal concerns with the staff hiring and management, provide them office premises and give you all the required information (CV).', 'genexic_desc'),
(28, 1, 'НОУ КОНСЕРНС ВИЗ СТАФФ', 'We take care of all the legal concerns with the staff hiring and management, provide them office premises and give you all the required information (CV).', 'genexic_desc'),
(29, 2, 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(30, 1, 'ЛОРЕМ ИПСУМ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(31, 2, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(32, 1, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(33, 2, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(34, 1, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(35, 2, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(36, 1, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(37, 2, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more'),
(38, 1, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'read_more');

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
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `project_types`
--

CREATE TABLE `project_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `updated_at` timestamp NULL DEFAULT NULL,
  `read_more_btn_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
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
-- Индексы таблицы `about_to_images`
--
ALTER TABLE `about_to_images`
  ADD PRIMARY KEY (`about_us_page_id`,`image_id`),
  ADD KEY `about_to_images_image_id_foreign` (`image_id`);

--
-- Индексы таблицы `about_to_paragraphs`
--
ALTER TABLE `about_to_paragraphs`
  ADD PRIMARY KEY (`about_us_page_id`,`paragraph_id`),
  ADD KEY `about_to_paragraphs_paragraph_id_foreign` (`paragraph_id`);

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
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `image_texts`
--
ALTER TABLE `image_texts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `paragraphs`
--
ALTER TABLE `paragraphs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

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
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `project_types`
--
ALTER TABLE `project_types`
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
-- Ограничения внешнего ключа таблицы `about_to_images`
--
ALTER TABLE `about_to_images`
  ADD CONSTRAINT `about_to_images_about_us_page_id_foreign` FOREIGN KEY (`about_us_page_id`) REFERENCES `about_us_pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `about_to_images_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `about_to_paragraphs`
--
ALTER TABLE `about_to_paragraphs`
  ADD CONSTRAINT `about_to_paragraphs_about_us_page_id_foreign` FOREIGN KEY (`about_us_page_id`) REFERENCES `about_us_pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `about_to_paragraphs_paragraph_id_foreign` FOREIGN KEY (`paragraph_id`) REFERENCES `paragraphs` (`id`) ON DELETE CASCADE;

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
