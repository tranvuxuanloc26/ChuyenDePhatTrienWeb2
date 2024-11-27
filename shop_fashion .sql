-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2024 lúc 10:10 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_fashion`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `pty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `product_id`, `pty`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 2, NULL, NULL),
(2, 3, 1, 7, 2, NULL, NULL),
(3, 4, 1, 1, 2, NULL, NULL),
(4, 5, 13, 6, 2, NULL, NULL),
(5, 6, 13, 6, 2, NULL, NULL),
(6, 7, 13, 6, 2, NULL, NULL),
(7, 8, 13, 6, 2, NULL, NULL),
(8, 9, 13, 6, 2, NULL, NULL),
(9, 10, 15, 1, 2, NULL, NULL),
(10, 11, 15, 8, 2, NULL, NULL),
(11, 12, 18, 4, 120, NULL, NULL),
(12, 13, 14, 6, 2, NULL, NULL),
(13, 14, 41, 4, 1950000, NULL, NULL),
(14, 15, 40, 6, 1950000, NULL, NULL),
(15, 16, 35, 4, 2750000, NULL, NULL),
(16, 17, 51, 1, 890000, NULL, NULL),
(17, 18, 55, 5, 300746, NULL, NULL),
(18, 19, 67, 1, 462301, NULL, NULL),
(19, 20, 41, 1, 1950000, NULL, NULL),
(20, 21, 60, 5, 1359219, NULL, NULL),
(21, 22, 41, 6, 1950000, NULL, NULL),
(22, 23, 67, 1, 462301, NULL, NULL),
(23, 24, 55, 5, 300746, NULL, NULL),
(24, 25, 51, 5, 890000, NULL, NULL),
(25, 26, 67, 2, 462301, NULL, NULL),
(26, 27, 64, 4, 450515, NULL, NULL),
(27, 28, 64, 5, 450515, NULL, NULL),
(28, 29, 60, 7, 1359219, NULL, NULL),
(29, 30, 64, 4, 450515, NULL, NULL),
(30, 31, 67, 4, 462301, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `email`, `content`, `created_at`, `updated_at`) VALUES
(4, 'eqwe', '0877481584', 'qwe', 'admin@mail.com', 'asd', '2024-10-05 22:25:24', '2024-10-05 22:25:24'),
(14, 'Nguyễn Mai Thảo', '0877481566', 'qwe', 'maithaotp234@gmail.com', 'weqe', '2024-10-08 09:00:52', '2024-10-08 09:00:52'),
(15, 'Nước Hoa Nam', '0877481566', 'qwe', 'maithaotp234@gmail.com', 'dasdasd', '2024-10-08 10:01:43', '2024-10-08 10:01:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `failed_jobs`
--

INSERT INTO `failed_jobs` (`id`, `uuid`, `connection`, `queue`, `payload`, `exception`, `failed_at`) VALUES
(1, '63570d3b-63b8-4030-9044-161227a4e23d', 'database', 'default', '{\"uuid\":\"63570d3b-63b8-4030-9044-161227a4e23d\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:25:\\\"vinhcodeacademy@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-10-06 06:15:40.765904\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\SendMail has been attempted too many times. in D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\MaxAttemptsExceededException.php:24\nStack trace:\n#0 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(785): Illuminate\\Queue\\MaxAttemptsExceededException::forJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(519): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#2 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#3 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#4 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#6 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#7 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#8 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#13 D:\\shop\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#15 D:\\shop\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 D:\\shop\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 D:\\shop\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 D:\\shop\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2024-10-05 23:17:10'),
(2, '4f473abd-0728-4107-9461-af8b425f00a5', 'database', 'default', '{\"uuid\":\"4f473abd-0728-4107-9461-af8b425f00a5\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:25:\\\"vinhcodeacademy@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-10-06 06:17:47.199448\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\SendMail has been attempted too many times. in D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\MaxAttemptsExceededException.php:24\nStack trace:\n#0 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(785): Illuminate\\Queue\\MaxAttemptsExceededException::forJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(519): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#2 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#3 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#4 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#6 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#7 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#8 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#13 D:\\shop\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#15 D:\\shop\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 D:\\shop\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 D:\\shop\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 D:\\shop\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2024-10-05 23:23:19'),
(3, 'ac63db54-df5b-4097-b98d-6686d9a02f3e', 'database', 'default', '{\"uuid\":\"ac63db54-df5b-4097-b98d-6686d9a02f3e\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:25:\\\"vinhcodeacademy@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2024-10-06 06:19:00.757673\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 'Illuminate\\Queue\\MaxAttemptsExceededException: App\\Jobs\\SendMail has been attempted too many times. in D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\MaxAttemptsExceededException.php:24\nStack trace:\n#0 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(785): Illuminate\\Queue\\MaxAttemptsExceededException::forJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#1 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(519): Illuminate\\Queue\\Worker->maxAttemptsExceededException(Object(Illuminate\\Queue\\Jobs\\DatabaseJob))\n#2 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(428): Illuminate\\Queue\\Worker->markJobAsFailedIfAlreadyExceedsMaxAttempts(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), 1)\n#3 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(389): Illuminate\\Queue\\Worker->process(\'database\', Object(Illuminate\\Queue\\Jobs\\DatabaseJob), Object(Illuminate\\Queue\\WorkerOptions))\n#4 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Worker.php(176): Illuminate\\Queue\\Worker->runJob(Object(Illuminate\\Queue\\Jobs\\DatabaseJob), \'database\', Object(Illuminate\\Queue\\WorkerOptions))\n#5 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(137): Illuminate\\Queue\\Worker->daemon(\'database\', \'default\', Object(Illuminate\\Queue\\WorkerOptions))\n#6 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Queue\\Console\\WorkCommand.php(120): Illuminate\\Queue\\Console\\WorkCommand->runWorker(\'database\', \'default\')\n#7 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(36): Illuminate\\Queue\\Console\\WorkCommand->handle()\n#8 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php(41): Illuminate\\Container\\BoundMethod::Illuminate\\Container\\{closure}()\n#9 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(93): Illuminate\\Container\\Util::unwrapIfClosure(Object(Closure))\n#10 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php(35): Illuminate\\Container\\BoundMethod::callBoundMethod(Object(Illuminate\\Foundation\\Application), Array, Object(Closure))\n#11 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php(662): Illuminate\\Container\\BoundMethod::call(Object(Illuminate\\Foundation\\Application), Array, Array, NULL)\n#12 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(211): Illuminate\\Container\\Container->call(Array)\n#13 D:\\shop\\vendor\\symfony\\console\\Command\\Command.php(326): Illuminate\\Console\\Command->execute(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#14 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php(180): Symfony\\Component\\Console\\Command\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Illuminate\\Console\\OutputStyle))\n#15 D:\\shop\\vendor\\symfony\\console\\Application.php(1096): Illuminate\\Console\\Command->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#16 D:\\shop\\vendor\\symfony\\console\\Application.php(324): Symfony\\Component\\Console\\Application->doRunCommand(Object(Illuminate\\Queue\\Console\\WorkCommand), Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#17 D:\\shop\\vendor\\symfony\\console\\Application.php(175): Symfony\\Component\\Console\\Application->doRun(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#18 D:\\shop\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php(201): Symfony\\Component\\Console\\Application->run(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#19 D:\\shop\\artisan(35): Illuminate\\Foundation\\Console\\Kernel->handle(Object(Symfony\\Component\\Console\\Input\\ArgvInput), Object(Symfony\\Component\\Console\\Output\\ConsoleOutput))\n#20 {main}', '2024-10-05 23:23:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `slug` varchar(250) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumb` varchar(191) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `description`, `content`, `slug`, `active`, `created_at`, `updated_at`, `thumb`) VALUES
(37, 'Thời Trang', 0, 'Thời Trang', '<p>Thời Trang</p>', 'thoi-trang', 1, '2024-10-08 09:35:40', '2024-10-08 09:35:40', '/storage/uploads/2024/10/08/banner-06.jpg'),
(35, 'Watches', 0, 'Watches', '<p>Watches</p>', 'watches', 1, '2024-10-08 09:21:04', '2024-10-08 09:21:04', '/storage/uploads/2024/10/08/product-06.jpg'),
(33, 'Men', 37, 'Men', '<p>Men</p>', 'men-2149', 1, '2024-10-08 09:18:38', '2024-10-09 09:40:22', '/storage/uploads/2024/10/08/banner-05.jpg'),
(32, 'Shoes', 0, 'Shoes', '<p>Shoes</p>', 'shoes', 0, '2024-10-08 06:34:47', '2024-11-01 05:03:19', '/storage/uploads/2024/10/08/product-09.jpg'),
(34, 'Women', 37, 'Women', '<p><span style=\"background-color:hsl(0,0%,30%);color:hsl(0,75%,60%);\">Women</span></p>', 'women-8938', 1, '2024-10-08 09:19:56', '2024-10-09 09:40:47', '/storage/uploads/2024/10/08/banner-01.jpg'),
(46, 'Nước Hoa Nam', 0, 'Nước Hoa Nam', '<p>Nước Hoa Nam</p>', 'nuoc-hoa-nam', 1, '2024-10-21 01:29:22', '2024-10-21 01:29:22', '/storage/uploads/2024/10/21/banner-02.jpg'),
(47, 'Nước Hoa Nữ', 0, 'Nước Hoa Nam', '<p>Nước Hoa Nam</p>', 'nuoc-hoa-nu', 1, '2024-10-21 01:29:55', '2024-10-21 01:29:55', '/storage/uploads/2024/10/21/banner-01.jpg'),
(51, 'Mũ Nam', 0, 'Mũ nam', '<p>Mũ lưỡi trai</p>', 'mu-nam', 1, '2024-11-25 11:51:15', '2024-11-25 11:52:06', '/storage/uploads/2024/11/25/81f0166f5a6e906b2b5813ef07d11384ca79f1919a8106ef8e6adcb38624078f777ed3_e227c34d1aa04e129d01c4b9f70759ec_grande.webp');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2024_09_01_085209_create_menus_table', 1),
(11, '2024_09_04_044950_create_products_table', 2),
(12, '2024_09_04_050217_update_table_product', 3),
(13, '2024_09_26_032830_create_sliders_table', 4),
(14, '2024_10_05_180218_update_table_menu', 5),
(15, '2024_10_06_020549_create_customers_table', 6),
(16, '2024_10_06_020617_create_carts_table', 6),
(17, '2024_10_06_060514_create_jobs_table', 7),
(18, '2024_11_01_094551_add_role_to_users_table', 8),
(19, '2024_11_03_113853_add_thumb_to_users_table', 9),
(20, '2024_11_04_141832_create_wishlists_table', 10),
(21, '2024_11_05_124534_add_is_featured_to_products_table', 11),
(22, '2024_11_06_160906_add_phone_to_users_table', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `thumb` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `thumb`, `created_at`, `updated_at`) VALUES
(5, 'Uniqlo x Kaws', '<p>Sau th&agrave;nh c&ocirc;ng của đợt ph&aacute;t h&agrave;nh năm 2019, sự hợp t&aacute;c mới n&agrave;y tạo ra sự phấn kh&iacute;ch một lần nữa. Ng&agrave;y 8/9 vừa qua, c&aacute;c t&iacute;n đồ thời trang đ&atilde; xếp h&agrave;ng nhộn nhịp ngay ng&agrave;y đầu mở b&aacute;n, thậm ch&iacute; website b&aacute;n online đ&atilde; gặp phải sự cố v&igrave; lượng người truy cập qu&aacute; đ&ocirc;ng. BST hiện vẫn đang được mở b&aacute;n tại tất cả cửa h&agrave;ng Uniqlo v&agrave; online.</p>', '/storage/uploads/2024/11/25/batchscreen-shot-2023-09-09-at-135448-2113-1694332233822-1694332233942833332158.jpg', '2024-11-23 08:55:32', '2024-11-25 10:09:38'),
(6, 'Supreme x Louis Vuitton', '<p>Tại tuần lễ thời trang Paris m&ugrave;a Thu/Đ&ocirc;ng 2017, Louis Vuitton g&acirc;y bất ngờ với lần kết duy&ecirc;n &ldquo;k&igrave; diệu&rdquo; với thương hiệu thời trang đường phố Supreme. Thời trang đường phố c&oacute; m&agrave;n ch&agrave;o s&acirc;n kh&ocirc;ng thể ấn tượng hơn với thế giới thời trang cao cấp. Bộ sưu tập gồm trang phục v&agrave; phụ kiện mang sắc đỏ, kết hợp họa tiết từ logo hai thương hiệu.</p>', '/storage/uploads/2024/11/25/1634134724-1607077846916271-ap17019555782250-cropped-1.webp', '2024-11-23 08:58:59', '2024-11-25 10:14:52'),
(7, 'Gucci x Dapper Dan', '<p>Dapper Dan c&oacute; lẽ l&agrave; nh&acirc;n vật kh&oacute; ngờ nhất để kết hợp c&ugrave;ng một h&atilde;ng thời trang danh tiếng như Gucci. Từ một người &ldquo;nổi tiếng&rdquo; v&igrave; chuy&ecirc;n thiết kế những trang phục &ldquo;nh&aacute;i&rdquo; c&aacute;c thương hiệu xa xỉ v&agrave; chịu ảnh hưởng phong c&aacute;ch thời trang hip-hop v&agrave; đường phố. Gi&aacute;m đốc s&aacute;ng tạo t&agrave;i năng v&agrave; nổi tiếng với những &yacute; tưởng s&aacute;ng tạo đến k&igrave; quặc của Gucci-Alessandro Michele đ&atilde; chứng tỏ m&igrave;nh kh&ocirc;ng lựa chọn sai lầm với bộ sưu tập nức l&ograve;ng giới mộ điệu suốt năm 2018.</p>', '/storage/uploads/2024/11/25/1634134821-1607077109747609-diaryarticledoubledapperdan-collection-01001default.webp', '2024-11-23 08:59:39', '2024-11-25 10:15:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `description` text NOT NULL,
  `content` longtext NOT NULL,
  `menu_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumb` varchar(191) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `content`, `menu_id`, `price`, `price_sale`, `active`, `is_featured`, `created_at`, `updated_at`, `thumb`) VALUES
(45, 'Set Nước Hoa Nữ Yves Saint Laurent YSL Libre (Eau De Parfum 50ml + Shower Gel 50ml)', 'Set Nước Hoa Nữ Yves Saint Laurent YSL Libre (Eau De Parfum 50ml + Shower Gel 50ml)', '<p>Set&nbsp;Nước Hoa Nữ&nbsp;Yves Saint Laurent YSL Libre (Eau De Parfum 50ml + Shower Gel 50ml)</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, 2790000, 2250000, 1, 0, '2024-10-18 04:08:05', '2024-10-21 01:37:15', '/storage/uploads/2024/10/18/set-nuoc-hoa-nu-yves-saint-laurent-ysl-libre-eau-de-parfum-50ml-shower-gel-50ml-65863cda5869d-23122023085018.webp'),
(44, 'Nước Hoa Nữ Dior Miss Dior Blooming Bouquet EDT Mini 5ml (2023)', 'Nước Hoa Nữ Dior Miss Dior Blooming Bouquet EDT Mini 5ml (2023)', '<p>Nước Hoa Nữ Dior Miss Dior Blooming Bouquet EDT Mini 5ml (2023)</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, 550000, 329999, 1, 0, '2024-10-18 04:05:47', '2024-10-21 01:37:01', '/storage/uploads/2024/10/18/nuoc-hoa-nu-dior-miss-dior-blooming-bouquet-edt-mini-5ml-2023-640588f904c08-06032023133225.webp'),
(43, 'Nước Hoa Nữ Carolina Herrera New York Good Girl Supreme Eau De Parfum 80ml', 'Nước Hoa Nữ Carolina Herrera New York Good Girl Supreme Eau De Parfum 80ml', '<p>Nước Hoa Nữ Carolina Herrera New York Good Girl Supreme Eau De Parfum 80ml</p>', 47, 3360000, 2300000, 1, 0, '2024-10-18 04:04:19', '2024-10-21 01:36:49', '/storage/uploads/2024/10/18/nuoc-hoa-nu-carolina-herrera-good-girl-supreme-eau-de-parfum-80ml-6711e379a0125-18102024112633.webp'),
(31, 'Nước Hoa Nam Armaf Club De Nuit Intense Man EDT 105ml', 'Nước Hoa Nam Armaf Club De Nuit Intense Man EDT 105ml', '<p>Nước Hoa Nam Armaf Club De Nuit Intense Man EDT 105ml</p>', 46, 1800000, 840000, 1, 0, '2024-10-08 06:41:39', '2024-10-21 01:33:05', '/storage/uploads/2024/10/08/nuoc-hoa-armaf-club-de-nuit-intense-for-man-105ml-5cecf9ac49316-28052019160444.webp'),
(32, 'Nước Hoa Nam Versace Eros Man EDT 5ml', 'Nước Hoa Nam Versace Eros Man EDT 5ml', '<p>Nước Hoa Nam Versace Eros Man EDT 5ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 46, 375000, 199000, 1, 0, '2024-10-08 06:46:36', '2024-10-21 01:33:22', '/storage/uploads/2024/10/08/nuoc-hoa-versace-eros-cho-nam-say-dam-phai-nu-minisize-5ml-5db936dcd37ed-30102019140812.webp'),
(33, 'Nước Hoa Nam Afnan 9PM EDP, 100ml', 'Nước Hoa Nam Afnan 9PM EDP, 100ml', '<p>Nước Hoa Nam Afnan 9PM EDP, 100ml</p>', 46, 1250000, 770000, 1, 0, '2024-10-08 06:47:54', '2024-10-21 01:33:43', '/storage/uploads/2024/10/08/nuoc-hoa-nam-afnan-9pm-edp-100ml-629090b444e02-27052022154956.webp'),
(34, 'Set Nước Hoa Nam Yves Saint Laurent YSL Y Eau De Parfum (100ml + 10ml)', 'Set Nước Hoa Nam Yves Saint Laurent YSL Y Eau De Parfum (100ml + 10ml)', '<p>Set Nước Hoa Nam Yves Saint Laurent YSL Y Eau De Parfum (100ml + 10ml)</p>', 46, 3280000, 2680000, 1, 0, '2024-10-08 06:49:21', '2024-10-21 01:33:54', '/storage/uploads/2024/10/08/set-nuoc-hoa-nam-yves-saint-laurent-ysl-y-eau-de-parfum-100ml-10ml-66fa71f4c7dd2-30092024164004.webp'),
(35, 'Nước Hoa Nam Giorgio Armani Acqua Di Gio Profondo Parfum 100ml', 'Nước Hoa Nam Giorgio Armani Acqua Di Gio Profondo Parfum 100ml', '<p>Nước Hoa Nam Giorgio Armani Acqua Di Gio Profondo Parfum 100ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 46, 3600000, 2750000, 1, 0, '2024-10-08 06:52:01', '2024-10-21 01:34:05', '/storage/uploads/2024/10/08/nuoc-hoa-nam-giorgio-armani-acqua-di-gio-profondo-parfum-100ml-66ecd18d638c9-20092024083613.webp'),
(36, 'Set Nước Hoa Nam Giorgio Armani Acqua Di Giò Parfum Gift Set 100ml + 15ml', 'Set Nước Hoa Nam Giorgio Armani Acqua Di Giò Parfum Gift Set 100ml + 15ml', '<p>Set Nước Hoa Nam Giorgio Armani Acqua Di Gi&ograve; Parfum Gift Set 100ml + 15ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 46, 3850000, 3250000, 1, 0, '2024-10-08 06:59:35', '2024-10-21 01:34:16', '/storage/uploads/2024/10/08/set-nuoc-hoa-nam-giorgio-armani-acqua-di-gio-parfum-gift-set-100ml-15ml-66e2acdf5a8da-12092024155703.webp'),
(37, 'Nước Hoa Nam Tommy Hilfiger Now EDT 100ml', 'Nước Hoa Nam Tommy Hilfiger Now EDT 100ml', '<p>Nước Hoa Nam Tommy Hilfiger Now EDT 100ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 46, 1700000, 1100000, 1, 0, '2024-10-08 07:05:36', '2024-10-21 01:35:12', '/storage/uploads/2024/10/08/nuoc-hoa-nam-tommy-hilfiger-now-edt-100ml-66e14afc3803e-11092024144708.webp'),
(38, 'Nước Hoa Nam Chanel Allure Homme Sport Superleggera EDP 100ml', 'Nước Hoa Nam Chanel Allure Homme Sport Superleggera EDP 100ml', '<p>Nước Hoa Nam&nbsp;Chanel Allure Homme Sport Superleggera EDP 100ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 46, NULL, NULL, 1, 0, '2024-10-08 07:06:07', '2024-10-21 01:34:50', '/storage/uploads/2024/10/08/nuoc-hoa-nam-chanel-allure-homme-sport-superleggera-edp-100ml-66da59aba91d7-06092024082355.webp'),
(39, 'Set Nước Hoa Và Sữa Tắm Nam Versace Pour Homme Dylan Blue EDT 3PCS Giftset 3 Món', 'Set Nước Hoa Và Sữa Tắm Nam Versace Pour Homme Dylan Blue EDT 3PCS Giftset 3 Món', '<p><strong>Set Nước Hoa V&agrave; Sữa Tắm Nam Versace Pour Homme Dylan Blue EDT 3PCS Giftset 3 M&oacute;n</strong></p>', 46, NULL, NULL, 1, 0, '2024-10-08 07:53:20', '2024-10-21 01:34:40', '/storage/uploads/2024/10/08/set-nuoc-hoa-va-sua-tam-nam-versace-pour-homme-dylan-blue-edt-3pcs-giftset-3-mon-66d0322579f0c-29082024153237.webp'),
(40, 'Set Nước Hoa Nam Versace Eros Flame 3 Món (EDP 100ml + EDP 10ml + Shower Gel 150ml)', 'Set Nước Hoa Nam Versace Eros Flame 3 Món (EDP 100ml + EDP 10ml + Shower Gel 150ml)', '<p><em><strong>Set Nước Hoa Nam Versace Eros Flame 3 M&oacute;n (EDP 100ml + EDP 10ml + Shower Gel 150ml)</strong></em></p>', 46, 2500000, 1950000, 1, 0, '2024-10-08 08:11:55', '2024-10-21 01:34:29', '/storage/uploads/2024/10/08/set-nuoc-hoa-nam-versace-eros-flame-3-mon-edp-100ml-edp-10ml-shower-gel-150ml-66d127d68904a-30082024090054.webp'),
(41, 'Set Nước Hoa Nam Versace Eros Eau De Parfum Set 3 Món', 'Set Nước Hoa Nam Versace Eros Eau De Parfum Set 3 Món', '<p>Set Nước Hoa Nam Versace Eros&nbsp;Eau De Parfum Set 3 M&oacute;n</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 46, 2800000, 1950000, 1, 0, '2024-10-08 08:14:52', '2024-10-21 01:35:51', '/storage/uploads/2024/10/08/set-nuoc-hoa-nam-versace-eros-eau-de-parfum-set-3-mon-66d0349d2b53c-29082024154309.webp'),
(42, 'Set Nước Hoa + Sữa Tắm Nam Versace Eros Fragrance Parfum 3 Món', 'Set Nước Hoa + Sữa Tắm Nam Versace Eros Fragrance Parfum 3 Món', '<p>Set Nước Hoa + Sữa Tắm Nam Versace Eros Fragrance Parfum 3 M&oacute;n</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 46, 2950000, 2190000, 1, 1, '2024-10-08 08:16:17', '2024-10-21 01:36:02', '/storage/uploads/2024/10/08/set-nuoc-hoa-sua-tam-nam-versace-eros-fragrance-parfum-3-mon-66d7c149327c8-04092024090913.webp'),
(46, 'Set Nước Hoa Nữ Jean Paul Gaultier Scandal EDP Gift 3 Món', 'Set Nước Hoa Nữ Jean Paul Gaultier Scandal EDP Gift 3 Món', '<p>Set Nước Hoa Nữ Jean Paul Gaultier Scandal EDP Gift 3 M&oacute;n</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, 2900000, 2280000, 1, 0, '2024-10-18 04:09:28', '2024-10-21 01:37:29', '/storage/uploads/2024/10/18/set-nuoc-hoa-nu-jean-paul-gaultier-scandal-edp-gift-3-mon-6710cfc6f07a1-17102024155014.webp'),
(47, 'Nước Hoa Nữ Carolina Herrera Good Girl Sparkling Ice EDP 80ml', 'Nước Hoa Nữ Carolina Herrera Good Girl Sparkling Ice EDP 80ml', '<p>Nước Hoa Nữ Carolina Herrera Good Girl Sparkling Ice EDP 80ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, 3300000, 2580000, 1, 0, '2024-10-18 04:11:57', '2024-10-21 01:37:40', '/storage/uploads/2024/10/18/nuoc-hoa-nu-carolina-herrera-good-girl-sparkling-ice-edp-80ml-6710bffca66aa-17102024144252.webp'),
(48, 'Set Nước Hoa Nữ Gucci Mini Discovery Kit Gift Set (4 x 5ml)', 'Set Nước Hoa Nữ Gucci Mini Discovery Kit Gift Set (4 x 5ml)', '<p>Set&nbsp;Nước Hoa Nữ Gucci Mini Discovery Kit Gift Set (4 x 5ml)</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, 2800000, 1650000, 1, 0, '2024-10-18 04:13:15', '2024-10-21 01:37:55', '/storage/uploads/2024/10/18/set-nuoc-hoa-nu-gucci-mini-discovery-kit-gift-set-in-edp-4-x-5ml-671096a4a530e-17102024114628.webp'),
(49, 'Nước Hoa Nữ Dior Miss Dior Parfum 80ml Phiên Bản 2024', 'Nước Hoa Nữ Dior Miss Dior Parfum 80ml Phiên Bản 2024', '<p>Nước Hoa Nữ Dior Miss Dior Parfum 80ml Phi&ecirc;n Bản 2024</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, 4800000, 3800000, 1, 0, '2024-10-18 04:15:42', '2024-10-21 01:38:51', '/storage/uploads/2024/10/18/nuoc-hoa-nu-dior-miss-dior-parfum-80ml-phien-ban-2024-67106e79b4c32-17102024085505.webp'),
(50, 'Set Nước Hoa Nữ + Son Môi YSL Yves Saint Laurent Libre Deluxe Lip & Perfume Set Eau De Parfum 2 Món', 'Set Nước Hoa Nữ + Son Môi YSL Yves Saint Laurent Libre Deluxe Lip & Perfume Set Eau De Parfum 2 Món', '<p><strong>Set&nbsp;Nước Hoa Nữ + Son M&ocirc;i&nbsp;YSL Yves Saint Laurent Libre Deluxe Lip &amp; Perfume Set&nbsp;Eau De Parfum&nbsp;2 M&oacute;n</strong></p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, 1020000, 889999, 1, 0, '2024-10-18 04:17:26', '2024-10-21 01:38:28', '/storage/uploads/2024/10/18/set-nuoc-hoa-nu-ysl-libre-deluxe-lip-perfume-set-eau-de-parfum-2-mon-67073afb2cf8a-10102024092459.webp'),
(51, 'Set Nước Hoa Nữ Kèm Khăn Lụa Và Thiệp Armaf Club De Nuit Woman EDP 105ml', 'Set Nước Hoa Nữ Kèm Khăn Lụa Và Thiệp Armaf Club De Nuit Woman EDP 105ml', '<p>Set Nước Hoa Nữ K&egrave;m Khăn Lụa V&agrave; Thiệp Armaf Club De Nuit Woman EDP 105ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, 1290000, 890000, 1, 0, '2024-10-18 04:19:17', '2024-10-21 01:38:18', '/storage/uploads/2024/10/18/set-nuoc-hoa-nu-kem-khan-lua-va-thiep-armaf-club-de-nuit-woman-edp-105ml-6703ae02e2f1a-07102024164642.webp'),
(52, 'Set Nước Hoa Nữ Kèm Khăn Lụa Và Thiệp Armaf Le Parfait Panache EDP 100ml', 'Set Nước Hoa Nữ Kèm Khăn Lụa Và Thiệp Armaf Le Parfait Panache EDP 100ml', '<p>Set Nước Hoa Nữ K&egrave;m Khăn Lụa V&agrave; Thiệp Armaf Le Parfait Panache EDP 100ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, NULL, NULL, 1, 0, '2024-10-18 04:20:17', '2024-10-21 01:38:06', '/storage/uploads/2024/10/18/set-nuoc-hoa-nu-kem-khan-lua-va-thiep-armaf-le-parfait-panache-edp-100ml-6703a957285ba-07102024162647.webp'),
(53, 'Set Nước Hoa Nữ Kèm Khăn Lụa Và Thiệp Armaf La Rosa Pour Femme EDP 100ml', 'Set Nước Hoa Nữ Kèm Khăn Lụa Và Thiệp Armaf La Rosa Pour Femme EDP 100ml', '<p>Set Nước Hoa Nữ K&egrave;m Khăn Lụa V&agrave; Thiệp Armaf La Rosa Pour Femme EDP 100ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, NULL, NULL, 1, 0, '2024-10-18 04:20:37', '2024-10-21 01:32:18', '/storage/uploads/2024/10/18/set-nuoc-hoa-nu-kem-khan-lua-va-thiep-armaf-la-rosa-pour-femme-edp-100ml-6703a6c2bb3f7-07102024161546.webp'),
(54, 'Set Nước Hoa Nữ Kèm Khăn Lụa Và Thiệp Armaf Le Parfait Pour Femme EDP 100ml', 'Set Nước Hoa Nữ Kèm Khăn Lụa Và Thiệp Armaf Le Parfait Pour Femme EDP 100ml', '<p>Set Nước Hoa Nữ K&egrave;m Khăn Lụa V&agrave; Thiệp Armaf Le Parfait Pour Femme EDP 100ml</p>\r\n\r\n<p><br />\r\n&nbsp;</p>', 47, NULL, NULL, 1, 0, '2024-10-18 04:20:57', '2024-10-21 01:31:58', '/storage/uploads/2024/10/18/set-nuoc-hoa-nu-kem-khan-lua-va-thiep-armaf-le-parfait-pour-femme-edp-100ml-6703a32236ad7-07102024160018.webp'),
(55, 'Esprit Ruffle Shirt', 'Esprit Ruffle Shirt', '<p>Esprit Ruffle Shirt</p>', 34, 418746, 300746, 1, 0, '2024-10-18 19:54:07', '2024-10-18 19:54:07', '/storage/uploads/2024/10/19/product-01.jpg'),
(56, 'Herschel supply', 'Herschel supply', '<p>Herschel supply</p>', 34, NULL, NULL, 1, 0, '2024-10-18 19:54:55', '2024-10-18 19:54:55', '/storage/uploads/2024/10/19/product-02.jpg'),
(57, 'Only Check Trouser', 'Only Check Trouser', '<p>Only Check Trouser</p>', 33, 614708, 612708, 1, 0, '2024-10-18 19:56:10', '2024-10-18 19:56:10', '/storage/uploads/2024/10/19/product-03.jpg'),
(58, 'Classic Trench Coat', 'Classic Trench Coat', '<p>Classic Trench Coat</p>', 34, NULL, NULL, 1, 0, '2024-10-18 19:57:20', '2024-10-18 19:57:20', '/storage/uploads/2024/10/19/product-04.jpg'),
(59, 'Front Pocket Jumper', 'Front Pocket Jumper', '<p>Front Pocket Jumper</p>', 34, 874484, 856212, 1, 0, '2024-10-18 20:03:50', '2024-10-18 20:03:50', '/storage/uploads/2024/10/19/product-05.jpg'),
(60, 'Vintage Inspired Classic', 'Vintage Inspired Classic', '<p>Vintage Inspired Classic</p>', 35, 2359219, 1359219, 1, 0, '2024-10-18 20:06:15', '2024-10-18 20:06:15', '/storage/uploads/2024/10/19/product-06.jpg'),
(61, 'Shirt in Stretch Cotton', 'Shirt in Stretch Cotton', '<p>Shirt in Stretch Cotton</p>', 34, 1325189, 1115189, 1, 0, '2024-10-18 20:07:30', '2024-10-18 20:07:30', '/storage/uploads/2024/10/19/product-07.jpg'),
(62, 'Pieces Metallic Printed', 'Pieces Metallic Printed', '<p>Pieces Metallic Printed</p>', 34, 477380, 442380, 1, 0, '2024-10-18 20:08:32', '2024-10-18 20:08:32', '/storage/uploads/2024/10/19/product-08.jpg'),
(63, 'Converse All Star Hi Plimsolls', 'Converse All Star Hi Plimsolls', '<p>Converse All Star Hi Plimsolls</p>', 32, 1887375, 1687375, 1, 0, '2024-10-18 20:10:51', '2024-10-18 20:10:51', '/storage/uploads/2024/10/19/product-09.jpg'),
(64, 'Femme T-Shirt In Stripe', 'Femme T-Shirt In Stripe', '<p>Femme T-Shirt In Stripe</p>', 34, 650515, 450515, 1, 0, '2024-10-18 20:12:15', '2024-10-18 20:12:15', '/storage/uploads/2024/10/19/product-10.jpg'),
(65, 'Herschel supply', 'Herschel supply', '<p>Herschel supply</p>', 33, 1589421, 1289421, 1, 0, '2024-10-18 20:14:06', '2024-10-18 20:14:06', '/storage/uploads/2024/10/19/product-11.jpg'),
(66, 'Thắt Lưng', 'Thắt Lưng', '<p>Thắt Lưng</p>', 33, 100000, 80000, 1, 0, '2024-10-18 20:15:31', '2024-10-18 20:15:31', '/storage/uploads/2024/10/19/product-12.jpg'),
(67, 'T-Shirt with Sleeve', 'T-Shirt with Sleeve', '<p>Chanel No. 5 lu&ocirc;n nằm trong danh s&aacute;ch h&agrave;ng đầu về nước hoa xa xỉ. Mặc d&ugrave; đ&atilde; được ra mắt từ<a href=\"https://bloganchoi.com/nuoc-hoa/?utm_campaign=https%3A%2F%2Fbloganchoi.com%2Fnuoc-hoa%2F&amp;utm_source=dmca&amp;utm_medium=copy&amp;utm_term=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi&amp;utm_content=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi.%20N%C6%B0%E1%BB%9Bc%20hoa%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20s%E1%BA%A3n%20ph%E1%BA%A9m%20t%E1%BA%A1o%20m%C3%B9i%20h%C6%B0%C6%A1ng%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20m%E1%BB%99t%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%C3%A1%20nh%C3%A2n%2C%20th%E1%BB%83%20hi%E1%BB%87n%20phong%20c%C3%A1ch%20v%C3%A0%20s%E1%BB%B1%20t%E1%BB%B1%20tin%20c%E1%BB%A7a%20b%E1%BA%A1n.%20H%C6%B0%C6%A1ng%20th%C6%A1m%20c%C3%B3%20kh%E1%BA%A3%20n%C4%83ng%20t%E1%BA%A1o%20r.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89.%20M%E1%BA%B7c%20d%C3%B9%20%C4%91%C3%A3%20%C4%91%C6%B0%E1%BB%A3c%20ra%20m%E1%BA%AFt%20t%E1%BB%AB%20n%C4%83m%201921%20v%E1%BB%9Bi%20ngu%E1%BB%93n%20c%E1%BA%A3m%20h%E1%BB%A9ng%20%C4%91%C6%B0%E1%BB%A3c%20mang%20%C4%91%E1%BA%BFn%20t%E1%BB%AB%20h%C6%B0%C6%A1ng%20th%C6%A1m%20hoa%20lan%2C%20hoa%20cam%2C%20v%C3%A0%20vani%20tinh%20t%E1%BA%BF%2C%20th%E1%BA%BF%20nh%C6%B0ng%20%C4%91%C3%A2y%20v%E1%BA%ABn%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20l%C3%A0ng%20n%C6%B0%E1%BB%9Bc%20hoa.%20%C4%90%C3%A2y%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%2C%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20s%E1%BB%B1%20thanh%20l%E1%BB%8Bch%20v%C3%A0%20th%E1%BB%9Di%20trang.%20%C4%90%C3%A3%20c%C3%B3%20nhi%E1%BB%81u%20phi%C3%AAn%20b%E1%BA%A3n%20v%C3%A0%20bi%E1%BA%BFn%20th%E1%BB%83%20c%E1%BB%A7a%20Chanel%20No.%205%2C%20nh%C6%B0ng%20v%E1%BA%BB%20qu%C3%BD%20ph%C3%A1i%20v%C3%A0%20quy%E1%BA%BFn%20r%C5%A9%20%E1%BB%9F%20trong%20t%E1%BB%ABng%20t%E1%BA%A7ng%20h%C6%B0%C6%A1ng%20lu%C3%B4n%20%C4%91%C6%B0%E1%BB%A3c%20duy%20tr%C3%AC.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89%20(Ngu%E1%BB%93n%3A%20Internet)C%C3%A1c%20t%E1%BA%A7ng%20n%C6%B0%E1%BB%9Bc%20hoa%3A%20T%E1%BA%A7ng%20%C4%90%E1%BA%A7u%3A%20Hoa%20cam%2C%20hoa%20d%E1%BA%BB%2C%20hoa%20lan%20Nam%20Phi.T%E1%BA%A7ng%20Gi%E1%BB%AFa%3A%20Hoa%20h%E1%BB%93ng%2C%20hoa%20iris%2C%20hoa%20cam.T%E1%BA%A7ng%20Cu%E1%BB%91i%3A%20H%C6%B0%C6%A1ng%20x%E1%BA%A1%20h%C6%B0%C6%A1ng%2C%20h%C6%B0%C6%A1ng%20vani%2C%20h%C6%B0%C6%A1ng%20b%C3%A1ch%20h%C6%B0%C6%A1ng.%20https%3A%2F%2Fbloganchoi.com%2Fnuoc-hoa%2F\" target=\"_blank\" title=\"Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://bloganchoi.com/nuoc-hoa/\"><img alt=\"Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://bloganchoi.com/nuoc-hoa/\" src=\"https://bloganchoi.com/px.gif?utm_campaign=https%3A%2F%2Fbloganchoi.com%2Fnuoc-hoa%2F&amp;utm_source=dmca&amp;utm_medium=copy&amp;utm_term=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi&amp;utm_content=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi.%20N%C6%B0%E1%BB%9Bc%20hoa%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20s%E1%BA%A3n%20ph%E1%BA%A9m%20t%E1%BA%A1o%20m%C3%B9i%20h%C6%B0%C6%A1ng%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20m%E1%BB%99t%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%C3%A1%20nh%C3%A2n%2C%20th%E1%BB%83%20hi%E1%BB%87n%20phong%20c%C3%A1ch%20v%C3%A0%20s%E1%BB%B1%20t%E1%BB%B1%20tin%20c%E1%BB%A7a%20b%E1%BA%A1n.%20H%C6%B0%C6%A1ng%20th%C6%A1m%20c%C3%B3%20kh%E1%BA%A3%20n%C4%83ng%20t%E1%BA%A1o%20r.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89.%20M%E1%BA%B7c%20d%C3%B9%20%C4%91%C3%A3%20%C4%91%C6%B0%E1%BB%A3c%20ra%20m%E1%BA%AFt%20t%E1%BB%AB%20n%C4%83m%201921%20v%E1%BB%9Bi%20ngu%E1%BB%93n%20c%E1%BA%A3m%20h%E1%BB%A9ng%20%C4%91%C6%B0%E1%BB%A3c%20mang%20%C4%91%E1%BA%BFn%20t%E1%BB%AB%20h%C6%B0%C6%A1ng%20th%C6%A1m%20hoa%20lan%2C%20hoa%20cam%2C%20v%C3%A0%20vani%20tinh%20t%E1%BA%BF%2C%20th%E1%BA%BF%20nh%C6%B0ng%20%C4%91%C3%A2y%20v%E1%BA%ABn%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20l%C3%A0ng%20n%C6%B0%E1%BB%9Bc%20hoa.%20%C4%90%C3%A2y%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%2C%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20s%E1%BB%B1%20thanh%20l%E1%BB%8Bch%20v%C3%A0%20th%E1%BB%9Di%20trang.%20%C4%90%C3%A3%20c%C3%B3%20nhi%E1%BB%81u%20phi%C3%AAn%20b%E1%BA%A3n%20v%C3%A0%20bi%E1%BA%BFn%20th%E1%BB%83%20c%E1%BB%A7a%20Chanel%20No.%205%2C%20nh%C6%B0ng%20v%E1%BA%BB%20qu%C3%BD%20ph%C3%A1i%20v%C3%A0%20quy%E1%BA%BFn%20r%C5%A9%20%E1%BB%9F%20trong%20t%E1%BB%ABng%20t%E1%BA%A7ng%20h%C6%B0%C6%A1ng%20lu%C3%B4n%20%C4%91%C6%B0%E1%BB%A3c%20duy%20tr%C3%AC.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89%20(Ngu%E1%BB%93n%3A%20Internet)C%C3%A1c%20t%E1%BA%A7ng%20n%C6%B0%E1%BB%9Bc%20hoa%3A%20T%E1%BA%A7ng%20%C4%90%E1%BA%A7u%3A%20Hoa%20cam%2C%20hoa%20d%E1%BA%BB%2C%20hoa%20lan%20Nam%20Phi.T%E1%BA%A7ng%20Gi%E1%BB%AFa%3A%20Hoa%20h%E1%BB%93ng%2C%20hoa%20iris%2C%20hoa%20cam.T%E1%BA%A7ng%20Cu%E1%BB%91i%3A%20H%C6%B0%C6%A1ng%20x%E1%BA%A1%20h%C6%B0%C6%A1ng%2C%20h%C6%B0%C6%A1ng%20vani%2C%20h%C6%B0%C6%A1ng%20b%C3%A1ch%20h%C6%B0%C6%A1ng.%20https%3A%2F%2Fbloganchoi.com%2Fnuoc-hoa%2F&amp;dmcacpp=1\" style=\"height:1px; width:1px\" title=\"Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://bloganchoi.com/nuoc-hoa/\" /></a><a href=\"https://bloganchoi.com/?utm_campaign=https%3A%2F%2Fbloganchoi.com%2Fnuoc-hoa%2F&amp;utm_source=dmca&amp;utm_medium=copy&amp;utm_term=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi&amp;utm_content=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi.%20N%C6%B0%E1%BB%9Bc%20hoa%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20s%E1%BA%A3n%20ph%E1%BA%A9m%20t%E1%BA%A1o%20m%C3%B9i%20h%C6%B0%C6%A1ng%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20m%E1%BB%99t%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%C3%A1%20nh%C3%A2n%2C%20th%E1%BB%83%20hi%E1%BB%87n%20phong%20c%C3%A1ch%20v%C3%A0%20s%E1%BB%B1%20t%E1%BB%B1%20tin%20c%E1%BB%A7a%20b%E1%BA%A1n.%20H%C6%B0%C6%A1ng%20th%C6%A1m%20c%C3%B3%20kh%E1%BA%A3%20n%C4%83ng%20t%E1%BA%A1o%20r.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89.%20M%E1%BA%B7c%20d%C3%B9%20%C4%91%C3%A3%20%C4%91%C6%B0%E1%BB%A3c%20ra%20m%E1%BA%AFt%20t%E1%BB%AB%20n%C4%83m%201921%20v%E1%BB%9Bi%20ngu%E1%BB%93n%20c%E1%BA%A3m%20h%E1%BB%A9ng%20%C4%91%C6%B0%E1%BB%A3c%20mang%20%C4%91%E1%BA%BFn%20t%E1%BB%AB%20h%C6%B0%C6%A1ng%20th%C6%A1m%20hoa%20lan%2C%20hoa%20cam%2C%20v%C3%A0%20vani%20tinh%20t%E1%BA%BF%2C%20th%E1%BA%BF%20nh%C6%B0ng%20%C4%91%C3%A2y%20v%E1%BA%ABn%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20l%C3%A0ng%20n%C6%B0%E1%BB%9Bc%20hoa.%20%C4%90%C3%A2y%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%2C%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20s%E1%BB%B1%20thanh%20l%E1%BB%8Bch%20v%C3%A0%20th%E1%BB%9Di%20trang.%20%C4%90%C3%A3%20c%C3%B3%20nhi%E1%BB%81u%20phi%C3%AAn%20b%E1%BA%A3n%20v%C3%A0%20bi%E1%BA%BFn%20th%E1%BB%83%20c%E1%BB%A7a%20Chanel%20No.%205%2C%20nh%C6%B0ng%20v%E1%BA%BB%20qu%C3%BD%20ph%C3%A1i%20v%C3%A0%20quy%E1%BA%BFn%20r%C5%A9%20%E1%BB%9F%20trong%20t%E1%BB%ABng%20t%E1%BA%A7ng%20h%C6%B0%C6%A1ng%20lu%C3%B4n%20%C4%91%C6%B0%E1%BB%A3c%20duy%20tr%C3%AC.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89%20(Ngu%E1%BB%93n%3A%20Internet)C%C3%A1c%20t%E1%BA%A7ng%20n%C6%B0%E1%BB%9Bc%20hoa%3A%20T%E1%BA%A7ng%20%C4%90%E1%BA%A7u%3A%20Hoa%20cam%2C%20hoa%20d%E1%BA%BB%2C%20hoa%20lan%20Nam%20Phi.T%E1%BA%A7ng%20Gi%E1%BB%AFa%3A%20Hoa%20h%E1%BB%93ng%2C%20hoa%20iris%2C%20hoa%20cam.T%E1%BA%A7ng%20Cu%E1%BB%91i%3A%20H%C6%B0%C6%A1ng%20x%E1%BA%A1%20h%C6%B0%C6%A1ng%2C%20h%C6%B0%C6%A1ng%20vani%2C%20h%C6%B0%C6%A1ng%20b%C3%A1ch%20h%C6%B0%C6%A1ng.%20https%3A%2F%2Fbloganchoi.com%2Fnuoc-hoa%2F\" target=\"_blank\" title=\"This article is referenced content from https://bloganchoi.com - Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://bloganchoi.com/nuoc-hoa/\"><img alt=\"This article is referenced content from https://bloganchoi.com - Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://bloganchoi.com/nuoc-hoa/\" src=\"https://bloganchoi.com/px.gif?utm_campaign=https%3A%2F%2Fbloganchoi.com%2Fnuoc-hoa%2F&amp;utm_source=dmca&amp;utm_medium=copy&amp;utm_term=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi&amp;utm_content=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi.%20N%C6%B0%E1%BB%9Bc%20hoa%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20s%E1%BA%A3n%20ph%E1%BA%A9m%20t%E1%BA%A1o%20m%C3%B9i%20h%C6%B0%C6%A1ng%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20m%E1%BB%99t%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%C3%A1%20nh%C3%A2n%2C%20th%E1%BB%83%20hi%E1%BB%87n%20phong%20c%C3%A1ch%20v%C3%A0%20s%E1%BB%B1%20t%E1%BB%B1%20tin%20c%E1%BB%A7a%20b%E1%BA%A1n.%20H%C6%B0%C6%A1ng%20th%C6%A1m%20c%C3%B3%20kh%E1%BA%A3%20n%C4%83ng%20t%E1%BA%A1o%20r.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89.%20M%E1%BA%B7c%20d%C3%B9%20%C4%91%C3%A3%20%C4%91%C6%B0%E1%BB%A3c%20ra%20m%E1%BA%AFt%20t%E1%BB%AB%20n%C4%83m%201921%20v%E1%BB%9Bi%20ngu%E1%BB%93n%20c%E1%BA%A3m%20h%E1%BB%A9ng%20%C4%91%C6%B0%E1%BB%A3c%20mang%20%C4%91%E1%BA%BFn%20t%E1%BB%AB%20h%C6%B0%C6%A1ng%20th%C6%A1m%20hoa%20lan%2C%20hoa%20cam%2C%20v%C3%A0%20vani%20tinh%20t%E1%BA%BF%2C%20th%E1%BA%BF%20nh%C6%B0ng%20%C4%91%C3%A2y%20v%E1%BA%ABn%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20l%C3%A0ng%20n%C6%B0%E1%BB%9Bc%20hoa.%20%C4%90%C3%A2y%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%2C%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20s%E1%BB%B1%20thanh%20l%E1%BB%8Bch%20v%C3%A0%20th%E1%BB%9Di%20trang.%20%C4%90%C3%A3%20c%C3%B3%20nhi%E1%BB%81u%20phi%C3%AAn%20b%E1%BA%A3n%20v%C3%A0%20bi%E1%BA%BFn%20th%E1%BB%83%20c%E1%BB%A7a%20Chanel%20No.%205%2C%20nh%C6%B0ng%20v%E1%BA%BB%20qu%C3%BD%20ph%C3%A1i%20v%C3%A0%20quy%E1%BA%BFn%20r%C5%A9%20%E1%BB%9F%20trong%20t%E1%BB%ABng%20t%E1%BA%A7ng%20h%C6%B0%C6%A1ng%20lu%C3%B4n%20%C4%91%C6%B0%E1%BB%A3c%20duy%20tr%C3%AC.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89%20(Ngu%E1%BB%93n%3A%20Internet)C%C3%A1c%20t%E1%BA%A7ng%20n%C6%B0%E1%BB%9Bc%20hoa%3A%20T%E1%BA%A7ng%20%C4%90%E1%BA%A7u%3A%20Hoa%20cam%2C%20hoa%20d%E1%BA%BB%2C%20hoa%20lan%20Nam%20Phi.T%E1%BA%A7ng%20Gi%E1%BB%AFa%3A%20Hoa%20h%E1%BB%93ng%2C%20hoa%20iris%2C%20hoa%20cam.T%E1%BA%A7ng%20Cu%E1%BB%91i%3A%20H%C6%B0%C6%A1ng%20x%E1%BA%A1%20h%C6%B0%C6%A1ng%2C%20h%C6%B0%C6%A1ng%20vani%2C%20h%C6%B0%C6%A1ng%20b%C3%A1ch%20h%C6%B0%C6%A1ng.%20https%3A%2F%2Fbloganchoi.com%2Fnuoc-hoa%2F&amp;dmcacpp=1&amp;origin=bloganchoi.com\" style=\"height:1px; width:1px\" title=\"This article is referenced content from https://bloganchoi.com - Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://bloganchoi.com/nuoc-hoa/\" /></a> năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, v&agrave; vani tinh tế, thế nhưng đ&acirc;y vẫn l&agrave; biểu tượng của l&agrave;ng nước hoa. Đ&acirc;y kh&ocirc;ng chỉ l&agrave; một loại nước hoa, m&agrave; c&ograve;n l&agrave; biểu tượng của sự thanh lịch v&agrave; thời trang. Đ&atilde; c&oacute; nhiều phi&ecirc;n bản v&agrave; biến thể của Chanel No. 5, nhưng vẻ qu&yacute; ph&aacute;i v&agrave; quyến rũ ở trong từng tầng hương lu&ocirc;n được duy tr&igrave;.<a href=\"https://beaudy.vn/?utm_campaign=https%3A%2F%2Fbeaudy.vn%2F&amp;utm_source=dmca&amp;utm_medium=copy&amp;utm_term=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi&amp;utm_content=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi.%20N%C6%B0%E1%BB%9Bc%20hoa%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20s%E1%BA%A3n%20ph%E1%BA%A9m%20t%E1%BA%A1o%20m%C3%B9i%20h%C6%B0%C6%A1ng%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20m%E1%BB%99t%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%C3%A1%20nh%C3%A2n%2C%20th%E1%BB%83%20hi%E1%BB%87n%20phong%20c%C3%A1ch%20v%C3%A0%20s%E1%BB%B1%20t%E1%BB%B1%20tin%20c%E1%BB%A7a%20b%E1%BA%A1n.%20H%C6%B0%C6%A1ng%20th%C6%A1m%20c%C3%B3%20kh%E1%BA%A3%20n%C4%83ng%20t%E1%BA%A1o%20r.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89.%20M%E1%BA%B7c%20d%C3%B9%20%C4%91%C3%A3%20%C4%91%C6%B0%E1%BB%A3c%20ra%20m%E1%BA%AFt%20t%E1%BB%AB%20n%C4%83m%201921%20v%E1%BB%9Bi%20ngu%E1%BB%93n%20c%E1%BA%A3m%20h%E1%BB%A9ng%20%C4%91%C6%B0%E1%BB%A3c%20mang%20%C4%91%E1%BA%BFn%20t%E1%BB%AB%20h%C6%B0%C6%A1ng%20th%C6%A1m%20hoa%20lan%2C%20hoa%20cam%2C%20v%C3%A0%20vani%20tinh%20t%E1%BA%BF%2C%20th%E1%BA%BF%20nh%C6%B0ng%20%C4%91%C3%A2y%20v%E1%BA%ABn%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20l%C3%A0ng%20n%C6%B0%E1%BB%9Bc%20hoa.%20%C4%90%C3%A2y%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%2C%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20s%E1%BB%B1%20thanh%20l%E1%BB%8Bch%20v%C3%A0%20th%E1%BB%9Di%20trang.%20%C4%90%C3%A3%20c%C3%B3%20nhi%E1%BB%81u%20phi%C3%AAn%20b%E1%BA%A3n%20v%C3%A0%20bi%E1%BA%BFn%20th%E1%BB%83%20c%E1%BB%A7a%20Chanel%20No.%205%2C%20nh%C6%B0ng%20v%E1%BA%BB%20qu%C3%BD%20ph%C3%A1i%20v%C3%A0%20quy%E1%BA%BFn%20r%C5%A9%20%E1%BB%9F%20trong%20t%E1%BB%ABng%20t%E1%BA%A7ng%20h%C6%B0%C6%A1ng%20lu%C3%B4n%20%C4%91%C6%B0%E1%BB%A3c%20duy%20tr%C3%AC.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89%20(Ngu%E1%BB%93n%3A%20Internet)C%C3%A1c%20t%E1%BA%A7ng%20n%C6%B0%E1%BB%9Bc%20hoa%3A%20T%E1%BA%A7ng%20%C4%90%E1%BA%A7u%3A%20Hoa%20cam%2C%20hoa%20d%E1%BA%BB%2C%20hoa%20lan%20Nam%20Phi.T%E1%BA%A7ng%20Gi%E1%BB%AFa%3A%20Hoa%20h%E1%BB%93ng%2C%20hoa%20iris%2C%20hoa%20cam.T%E1%BA%A7ng%20Cu%E1%BB%91i%3A%20H%C6%B0%C6%A1ng%20x%E1%BA%A1%20h%C6%B0%C6%A1ng%2C%20h%C6%B0%C6%A1ng%20vani%2C%20h%C6%B0%C6%A1ng%20b%C3%A1ch%20h%C6%B0%C6%A1ng.%20https%3A%2F%2Fbeaudy.vn%2F\" target=\"_blank\" title=\"Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://beaudy.vn/\"><img alt=\"Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://beaudy.vn/\" src=\"https://xurls.net/px.gif?utm_campaign=https%3A%2F%2Fbeaudy.vn%2F&amp;utm_source=dmca&amp;utm_medium=copy&amp;utm_term=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi&amp;utm_content=Top%2010%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%20%C4%91%E1%BB%89nh%20cao%20nh%E1%BA%A5t%20m%E1%BB%8Di%20th%E1%BB%9Di%20%C4%91%E1%BA%A1i%20m%C3%A0%20t%C3%ADn%20%C4%91%E1%BB%93%20m%C3%AA%20n%C6%B0%E1%BB%9Bc%20hoa%20n%C3%A0o%20c%C5%A9ng%20bi%E1%BA%BFt%20-%20BlogAnChoi.%20N%C6%B0%E1%BB%9Bc%20hoa%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20s%E1%BA%A3n%20ph%E1%BA%A9m%20t%E1%BA%A1o%20m%C3%B9i%20h%C6%B0%C6%A1ng%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20m%E1%BB%99t%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%C3%A1%20nh%C3%A2n%2C%20th%E1%BB%83%20hi%E1%BB%87n%20phong%20c%C3%A1ch%20v%C3%A0%20s%E1%BB%B1%20t%E1%BB%B1%20tin%20c%E1%BB%A7a%20b%E1%BA%A1n.%20H%C6%B0%C6%A1ng%20th%C6%A1m%20c%C3%B3%20kh%E1%BA%A3%20n%C4%83ng%20t%E1%BA%A1o%20r.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89.%20M%E1%BA%B7c%20d%C3%B9%20%C4%91%C3%A3%20%C4%91%C6%B0%E1%BB%A3c%20ra%20m%E1%BA%AFt%20t%E1%BB%AB%20n%C4%83m%201921%20v%E1%BB%9Bi%20ngu%E1%BB%93n%20c%E1%BA%A3m%20h%E1%BB%A9ng%20%C4%91%C6%B0%E1%BB%A3c%20mang%20%C4%91%E1%BA%BFn%20t%E1%BB%AB%20h%C6%B0%C6%A1ng%20th%C6%A1m%20hoa%20lan%2C%20hoa%20cam%2C%20v%C3%A0%20vani%20tinh%20t%E1%BA%BF%2C%20th%E1%BA%BF%20nh%C6%B0ng%20%C4%91%C3%A2y%20v%E1%BA%ABn%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20l%C3%A0ng%20n%C6%B0%E1%BB%9Bc%20hoa.%20%C4%90%C3%A2y%20kh%C3%B4ng%20ch%E1%BB%89%20l%C3%A0%20m%E1%BB%99t%20lo%E1%BA%A1i%20n%C6%B0%E1%BB%9Bc%20hoa%2C%20m%C3%A0%20c%C3%B2n%20l%C3%A0%20bi%E1%BB%83u%20t%C6%B0%E1%BB%A3ng%20c%E1%BB%A7a%20s%E1%BB%B1%20thanh%20l%E1%BB%8Bch%20v%C3%A0%20th%E1%BB%9Di%20trang.%20%C4%90%C3%A3%20c%C3%B3%20nhi%E1%BB%81u%20phi%C3%AAn%20b%E1%BA%A3n%20v%C3%A0%20bi%E1%BA%BFn%20th%E1%BB%83%20c%E1%BB%A7a%20Chanel%20No.%205%2C%20nh%C6%B0ng%20v%E1%BA%BB%20qu%C3%BD%20ph%C3%A1i%20v%C3%A0%20quy%E1%BA%BFn%20r%C5%A9%20%E1%BB%9F%20trong%20t%E1%BB%ABng%20t%E1%BA%A7ng%20h%C6%B0%C6%A1ng%20lu%C3%B4n%20%C4%91%C6%B0%E1%BB%A3c%20duy%20tr%C3%AC.%20Chanel%20No.%205%20lu%C3%B4n%20n%E1%BA%B1m%20trong%20danh%20s%C3%A1ch%20h%C3%A0ng%20%C4%91%E1%BA%A7u%20v%E1%BB%81%20n%C6%B0%E1%BB%9Bc%20hoa%20xa%20x%E1%BB%89%20(Ngu%E1%BB%93n%3A%20Internet)C%C3%A1c%20t%E1%BA%A7ng%20n%C6%B0%E1%BB%9Bc%20hoa%3A%20T%E1%BA%A7ng%20%C4%90%E1%BA%A7u%3A%20Hoa%20cam%2C%20hoa%20d%E1%BA%BB%2C%20hoa%20lan%20Nam%20Phi.T%E1%BA%A7ng%20Gi%E1%BB%AFa%3A%20Hoa%20h%E1%BB%93ng%2C%20hoa%20iris%2C%20hoa%20cam.T%E1%BA%A7ng%20Cu%E1%BB%91i%3A%20H%C6%B0%C6%A1ng%20x%E1%BA%A1%20h%C6%B0%C6%A1ng%2C%20h%C6%B0%C6%A1ng%20vani%2C%20h%C6%B0%C6%A1ng%20b%C3%A1ch%20h%C6%B0%C6%A1ng.%20https%3A%2F%2Fbeaudy.vn%2F&amp;dmcaaducpp=1\" style=\"height:1px; width:1px\" title=\"Top 10 loại nước hoa đỉnh cao nhất mọi thời đại mà tín đồ mê nước hoa nào cũng biết - BlogAnChoi. Nước hoa không chỉ là một sản phẩm tạo mùi hương mà còn là một biểu tượng cá nhân, thể hiện phong cách và sự tự tin của bạn. Hương thơm có khả năng tạo r. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ. Mặc dù đã được ra mắt từ năm 1921 với nguồn cảm hứng được mang đến từ hương thơm hoa lan, hoa cam, và vani tinh tế, thế nhưng đây vẫn là biểu tượng của làng nước hoa. Đây không chỉ là một loại nước hoa, mà còn là biểu tượng của sự thanh lịch và thời trang. Đã có nhiều phiên bản và biến thể của Chanel No. 5, nhưng vẻ quý phái và quyến rũ ở trong từng tầng hương luôn được duy trì. Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)Các tầng nước hoa: Tầng Đầu: Hoa cam, hoa dẻ, hoa lan Nam Phi.Tầng Giữa: Hoa hồng, hoa iris, hoa cam.Tầng Cuối: Hương xạ hương, hương vani, hương bách hương. https://beaudy.vn/\" /></a></p>\r\n\r\n<p><img alt=\"Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)\" src=\"https://bloganchoi.com/wp-content/uploads/2023/09/chanel-no5.jpeg\" style=\"height:577px; width:642px\" title=\"Chanel No. 5 luôn nằm trong danh sách hàng đầu về nước hoa xa xỉ (Nguồn: Internet)\" /></p>\r\n\r\n<p>Chanel No. 5 lu&ocirc;n nằm trong danh s&aacute;ch h&agrave;ng đầu về nước hoa xa xỉ (Nguồn: Internet)</p>\r\n\r\n<p><em><strong>C&aacute;c tầng nước hoa: </strong></em></p>\r\n\r\n<ul>\r\n	<li><strong>Tầng Đầu:</strong> Hoa cam, hoa dẻ, hoa lan Nam Phi.</li>\r\n	<li><strong>Tầng Giữa:</strong> Hoa hồng, hoa iris, hoa cam.</li>\r\n	<li><strong>Tầng Cuối:</strong> Hương xạ hương, hương vani, hương b&aacute;ch hương.</li>\r\n</ul>', 34, 465301, 462301, 1, 0, '2024-10-18 20:17:00', '2024-10-21 01:21:04', '/storage/uploads/2024/10/19/product-13.jpg'),
(68, 'Pretty Little Thing', 'Pretty Little Thing', '<p>Pretty Little Thing</p>', 34, NULL, NULL, 1, 1, '2024-10-18 20:17:37', '2024-11-05 06:32:44', '/storage/uploads/2024/10/19/product-14.jpg'),
(70, 'Mini Silver Mesh Watch', 'Mini Silver Mesh Watch', '<p>Mini Silver Mesh Watch</p>', 35, NULL, NULL, 0, 1, '2024-10-18 20:18:55', '2024-11-05 06:32:24', '/storage/uploads/2024/10/19/product-15.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) NOT NULL,
  `sort_by` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `url`, `thumb`, `sort_by`, `active`, `created_at`, `updated_at`) VALUES
(2, 'Nước Hoa Nam', 'https://nuochoanam', '/storage/uploads/2024/09/29/slide-01.jpg', 1, 1, '2024-09-29 00:10:52', '2024-09-29 00:16:10'),
(3, 'Nước hoa mùa đông', 'https://nuochoamuadong', '/storage/uploads/2024/09/29/slide-03.jpg', 2, 1, '2024-09-29 00:12:58', '2024-09-29 00:14:53'),
(4, 'Nước hoa nữ', 'https://nuochoanu', '/storage/uploads/2024/10/24/slide-02.jpg', 3, 1, '2024-09-29 00:13:37', '2024-10-24 02:24:32');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `thumb` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `thumb`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(32, 'admin', 'admin@gmail.com', NULL, NULL, NULL, '$2y$12$tst/0rvBkBoJALieAHGj7.0aZZ4F/hwow4SRT.zh8RRGEasWFVRBq', 'KEEy4Zao74Ao8howTR9AoC3ZxsPpDsD0sioyTNdbmBKd6J1ggv97r1Aszo3c', '2024-11-25 07:33:35', '2024-11-25 07:33:35', 2),
(19, 'Nguyễn Mai Thảo', 'anhken12345@gmail.com', NULL, '', NULL, '$2y$12$QVZ9hzBW/cvcRseGpoQc8eMuXxovR3cwnO8jPZLwaMpBZ6Z2Zb9j.', NULL, '2024-11-03 09:21:23', '2024-11-25 07:41:01', 0),
(8, 'Nguyễn Mai Thảo', 'anhken123@gmail.com', NULL, '', NULL, '$2y$12$E7p/wsT69m6SET3ZTPlDwu.a.SWTtiI3o79uB7CHiujdPJUFV8NxO', NULL, '2024-11-01 03:36:58', '2024-11-01 03:36:58', 0),
(9, 'Phạm Lê Minh Tính', 'phamleminhtinh123@gmail.com', NULL, '', NULL, '$2y$12$XUngiKtaR3C./zsEmF4QVOC6HITAXjdGxtw5AqDhJooZYbG9DFKia', NULL, '2024-11-01 03:39:22', '2024-11-01 03:39:22', 0),
(10, 'Phạm Lê Minh Tính', 'phamleminhtinh123456@gmail.com', NULL, '', NULL, '$2y$12$D.cxyhcvlkdgSxE6tA2IueZz6gjBqB8Ugb5AyD6BvPtCC738qBST.', NULL, '2024-11-01 03:40:48', '2024-11-25 07:41:11', 0),
(11, 'Thảo Nguyển', 'thao@gmail.com', NULL, '', NULL, '$2y$12$kwcFbfrpaXISKyLDDk1UJerqlpWvPM4cq6gnaau5eP29Oocu7v9UG', NULL, '2024-11-01 03:47:30', '2024-11-25 07:41:09', 0),
(12, 'Thảo Nguyển', 'thao123456@gmail.com', NULL, '', NULL, '$2y$12$.2fKPbx04Ai8bmUfeHfQ..Y5QymVBlfO2avNmFUisBYIC3WeFZnYu', NULL, '2024-11-01 03:55:24', '2024-11-25 07:41:07', 0),
(16, 'conchothao', '123@gmail.com', NULL, '', NULL, '$2y$12$6.IG3Gus5oQbiFAwcEXr5OTC3Vsuaeyduh1QeVaC4AscBVSlWHCVa', NULL, '2024-11-01 04:31:51', '2024-11-25 07:41:03', 0),
(21, 'thảo mê ngủ', 'thaonhonyc@gmail.com', NULL, '', NULL, '$2y$12$uhml/Aq.fd7Fw2VRSf8TD.RNDdJResgoQsyycs4GZt8uL8h3XskD6', NULL, '2024-11-03 19:12:02', '2024-11-03 19:12:02', 0),
(22, 'zxc leas', 'hosuzune@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocLVzDUM-c5S4I9IEaEVDo7AwzvQv91UFGUgN9qveP62HB6qRg=s96-c', NULL, '$2y$12$7PDc1uBEeC9IVig4XYXab.Xv6Uyo8DM6mza8dj6csJ3fG33te4HBO', NULL, '2024-11-03 22:06:58', '2024-11-04 19:58:24', 0),
(23, '๖ۣۜAnh ๖ۣۜKen', 'maithaotp234@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocIwAgyJ4ULn-AVXNatM-iGdSg5J0sp_ESP9f-Wcn0-4qKbcNnM9=s96-c', NULL, '$2y$12$fKzCOfJLrOn4/SOAGt16sux2dJHCKbcb22NKXZ0PSJwOcJEx1u4.2', NULL, '2024-11-03 22:31:13', '2024-11-06 04:19:57', 0),
(30, 'thảo mê ngủ', 'thaonhonyc123@gmail.com', NULL, '', NULL, '$2y$12$QaB0c94Xz1YJC6u1H8IAk.8cR9ebjCtVh7E3oT2q7b1sTEF5CJ3wC', NULL, '2024-11-06 00:29:04', '2024-11-25 07:40:58', 0),
(33, '๖ۣۜAnh ๖ۣۜKen', 'maithaotp123@gmail.com', NULL, 'https://lh3.googleusercontent.com/a/ACg8ocJIyt3yoWS2TVUNRqGE8LMwSPt2IkHvfmidKLYwAngG3zeVNQ=s96-c', NULL, '$2y$12$2v2jvz36nymhVMmgWJclEuVHgcRGeKJ9dcg9jy5BUOpxICdz9sFxC', NULL, '2024-11-25 23:26:10', '2024-11-25 23:26:10', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_customer_id_foreign` (`customer_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT cho bảng `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
