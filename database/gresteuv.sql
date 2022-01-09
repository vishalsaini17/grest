-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 07:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshop-original`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` smallint(6) NOT NULL DEFAULT 0,
  `status` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `name`, `phone`, `address`, `is_default`, `status`, `created_at`, `updated_at`, `pincode`) VALUES
(3, 2, 'Bisaal Sain', '8484848484', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir gurgaon', 1, 1, '2021-05-04 07:54:39', '2021-07-11 06:00:07', 122001),
(35, 1, 'Shivansh Raghav', '9990941900', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', 1, 1, '2021-05-12 03:47:48', '2021-07-10 08:12:28', 122001),
(37, 1, 'Vishal Saini', '8484848484', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', 0, 1, '2021-06-06 07:22:19', '2021-06-13 04:47:23', 123456),
(38, 47, 'Shivansh Raghav', '9990941900', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', 1, 1, '2021-06-11 15:07:49', '2021-06-11 15:07:50', 122001),
(39, 1, 'Harsh', '8889090900', 'H.no 294 12 Biswa masani village Gururgaon village road, near Sheetla mata mandir', 0, 1, '2021-06-13 04:47:23', '2021-07-10 08:12:28', NULL),
(42, 58, 'Shivansh Raghav', '9990941900', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', 1, 1, '2021-06-21 10:12:23', '2021-06-21 10:12:23', 122001),
(43, 61, 'Shivansh Raghav', '9990941900', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', 1, 1, '2021-06-21 10:34:24', '2021-06-21 10:34:24', 122001),
(44, 63, 'Shiva Ragha', '9876543210', 'H.no hgfcvabjiuyhgdvq', 1, 1, '2021-07-01 10:27:42', '2021-07-27 11:22:02', 123456),
(45, 63, 'vish san', '9876543212', 'asd bnjekr pokjwnedm asdfghjk', 0, 1, '2021-07-01 11:06:49', '2021-07-27 11:22:02', 123456),
(47, 64, 'Shivansh Raghav', '9990941900', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', 1, 1, '2021-07-13 10:37:01', '2021-07-13 10:37:01', 122001);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Exciting deals!', 'lorem-ipsum-is', '/storage/photos/1/Banner/banner-01.jpg', '<h2><span style=\"font-weight: bold; color: rgb(99, 99, 99);\">Up to 10%</span></h2><h2><span style=\"font-weight: bold; color: rgb(99, 99, 99);\"><br></span></h2>', 'active', '2020-08-14 01:47:38', '2021-06-05 11:05:22'),
(6, 'Buy best deals on Refurbished smartphones', 'buy-best-deals-on-refurbished-smartphones', '/storage/photos/1/Products/s21-2-removebg-preview.png', '<p><br></p>', 'active', '2021-04-21 12:32:39', '2021-04-21 12:37:50'),
(7, 'Get deals now', 'get-deals-now', '/storage/photos/1/Products/op_9_pro_tilt-removebg-preview.png', '<p><br></p><p><br></p>', 'active', '2021-04-21 13:05:46', '2021-04-21 13:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Apple', 'apple', 'active', '2021-04-21 00:44:14', '2021-04-21 00:44:14'),
(9, 'Oneplus', 'oneplus', 'active', '2021-04-21 00:46:11', '2021-04-21 00:46:11'),
(10, 'Samsung', 'samsung', 'active', '2021-04-21 00:46:27', '2021-04-21 00:46:27'),
(11, 'Xaiomi', 'xaiomi', 'active', '2021-04-21 00:46:38', '2021-04-21 00:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `status` enum('new','progress','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `order_id`, `user_id`, `price`, `status`, `quantity`, `amount`, `created_at`, `updated_at`) VALUES
(36, 13, NULL, 1, 95949.05, 'new', 2, 196948.05, '2021-06-16 14:26:31', '2021-06-16 15:27:42'),
(51, 14, 50, 2, 12000.00, 'new', 1, 12000.00, '2021-06-26 11:36:43', '2021-06-29 14:22:21'),
(52, 13, 50, 2, 80799.20, 'new', 1, 80799.20, '2021-06-29 14:21:28', '2021-06-29 14:22:21'),
(53, 12, 50, 2, 101600.00, 'new', 1, 101600.00, '2021-06-29 14:21:35', '2021-06-29 14:22:21'),
(54, 14, 51, 63, 12000.00, 'new', 1, 12000.00, '2021-07-01 11:10:21', '2021-07-01 11:33:54'),
(55, 13, 52, 63, 80799.20, 'new', 1, 80799.20, '2021-07-01 11:35:07', '2021-07-01 11:35:40'),
(56, 11, 53, 2, 63699.02, 'new', 1, 63699.02, '2021-07-10 12:48:16', '2021-07-10 12:49:29'),
(57, 14, 53, 2, 12000.00, 'new', 1, 12000.00, '2021-07-10 12:48:26', '2021-07-10 12:49:29'),
(62, 14, 56, 64, 12000.00, 'new', 1, 12000.00, '2021-07-13 10:36:09', '2021-07-13 10:37:28'),
(63, 13, 56, 64, 80799.20, 'new', 1, 80799.20, '2021-07-13 10:36:09', '2021-07-13 10:37:28'),
(64, 12, 57, 64, 101600.00, 'new', 1, 101600.00, '2021-07-13 10:37:53', '2021-07-13 10:38:35'),
(65, 11, 57, 64, 63699.02, 'new', 1, 63699.02, '2021-07-13 10:38:01', '2021-07-13 10:38:35'),
(67, 11, 62, 2, 63699.02, 'new', 1, 63699.02, '2021-07-25 12:15:00', '2021-07-27 15:07:08'),
(73, 14, 58, 63, 12000.00, 'new', 1, 12000.00, '2021-07-27 12:20:11', '2021-07-27 12:20:31'),
(74, 11, 59, 63, 63699.02, 'new', 1, 63699.02, '2021-07-27 12:22:12', '2021-07-27 12:28:37'),
(75, 13, 59, 63, 80799.20, 'new', 1, 80799.20, '2021-07-27 12:22:18', '2021-07-27 12:28:37'),
(76, 13, 60, 63, 80799.20, 'new', 1, 80799.20, '2021-07-27 12:37:22', '2021-07-27 12:43:00'),
(77, 14, 60, 63, 12000.00, 'new', 1, 12000.00, '2021-07-27 12:37:30', '2021-07-27 12:43:00'),
(78, 13, 61, 63, 80799.20, 'new', 1, 80799.20, '2021-07-27 14:47:58', '2021-07-27 14:49:48'),
(79, 14, 61, 63, 12000.00, 'new', 1, 12000.00, '2021-07-27 14:48:05', '2021-07-27 14:49:48'),
(81, 14, NULL, 2, 12000.00, 'new', 2, 32000.00, '2021-07-27 15:42:16', '2021-07-27 15:44:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_parent` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `summary`, `photo`, `is_parent`, `parent_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Iphones', 'iphones', '<p>Get best deals in refurbished Iphones</p>', '/storage/photos/1/Category/ad69eab8c09f98d2a33008ff4b7c07d8.jpg', 1, NULL, NULL, 'active', '2021-04-21 00:43:20', '2021-04-21 00:43:20'),
(13, 'Androids', 'androids', '<p>get androids smartphones</p>', '/storage/photos/1/Category/e694a6db542e5bf8e326a5ca830bfac1.jpg', 1, NULL, NULL, 'active', '2021-04-21 00:43:56', '2021-04-21 00:43:56');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed',
  `value` decimal(20,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc123', 'fixed', '300.00', 'active', NULL, NULL),
(2, '111111', 'percent', '10.00', 'active', NULL, NULL),
(5, 'abcd', 'fixed', '250.00', 'active', '2020-08-17 20:54:58', '2020-08-17 20:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `subject`, `email`, `photo`, `phone`, `message`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'Prajwal Rai', 'About price', 'prajwal.iar@gmail.com', NULL, '9807009999', 'Hello sir i am from kathmandu nepal.', '2020-08-14 08:25:46', '2020-08-14 08:00:01', '2020-08-14 08:25:46'),
(2, 'Prajwal Rai', 'About Price', 'prajwal.iar@gmail.com', NULL, '9800099000', 'Hello i am Prajwal Rai', '2020-08-18 03:04:15', '2020-08-15 07:52:39', '2020-08-18 03:04:16'),
(3, 'Prajwal Rai', 'lorem ipsum', 'prajwal.iar@gmail.com', NULL, '1200990009', 'hello sir sdfdfd dfdjf ;dfjd fd ldkfd', NULL, '2020-08-17 21:15:12', '2020-08-17 21:15:12'),
(4, 'Shivansh Raghav', '9990941900', 'shivansh901@gmail.com', NULL, '9990941900', 'hi testing about email', '2021-06-09 12:38:40', '2021-04-22 12:11:53', '2021-06-09 12:38:40'),
(5, 'Shivansh Raghav', 'testing', 'shivansh901@gmail.com', NULL, '9990941900', 'hi advanced testing for email', '2021-06-09 12:38:50', '2021-04-25 07:40:35', '2021-06-09 12:38:50'),
(6, 'SHivansh Raghav', 'testing again in June', 'shiv901@live.com', NULL, '9990909990', 'HI there, its just for testing purpose', NULL, '2021-06-09 12:42:07', '2021-06-09 12:42:07'),
(7, 'shivansh', 'testing again in June', 'user@gmail.com', NULL, '9876543210', 'why i have  to write ten words each time', NULL, '2021-06-11 12:26:28', '2021-06-11 12:26:28'),
(8, 'harsh Raghav', 'inquiring', 'shivansh901@gmail.com', NULL, '9999099990', 'ky alikhu gfghfzxvcutiyrdthfxvcvbhkug', NULL, '2021-06-22 00:26:02', '2021-06-22 00:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_10_021010_create_brands_table', 1),
(5, '2020_07_10_025334_create_banners_table', 1),
(6, '2020_07_10_112147_create_categories_table', 1),
(7, '2020_07_11_063857_create_products_table', 1),
(8, '2020_07_12_073132_create_post_categories_table', 1),
(9, '2020_07_12_073701_create_post_tags_table', 1),
(10, '2020_07_12_083638_create_posts_table', 1),
(11, '2020_07_13_151329_create_messages_table', 1),
(12, '2020_07_14_023748_create_shippings_table', 1),
(13, '2020_07_15_054356_create_orders_table', 1),
(14, '2020_07_15_102626_create_carts_table', 1),
(15, '2020_07_16_041623_create_notifications_table', 1),
(16, '2020_07_16_053240_create_coupons_table', 1),
(17, '2020_07_23_143757_create_wishlists_table', 1),
(18, '2020_07_24_074930_create_product_reviews_table', 1),
(19, '2020_07_24_131727_create_post_comments_table', 1),
(20, '2020_08_01_143408_create_settings_table', 1),
(21, '2021_04_18_104323_add_ram_to_products_table', 2),
(22, '2021_05_03_073631_create_address_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('019ad13d-1454-47c4-b6dd-c555f167d3cf', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/52\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-01 11:35:15', '2021-07-01 11:35:15'),
('02750dad-d348-49dd-83c9-269c69b168b2', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/20\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:43:05', '2021-06-08 08:43:05'),
('04f5bffd-71e6-4ac1-97a0-50aee88b379a', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/49\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-21 11:08:36', '2021-06-21 11:08:36'),
('07356ed4-7935-45ca-8cee-31daff03df87', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/57\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-13 10:38:12', '2021-07-13 10:38:12'),
('0df99304-7f4d-4da8-84c5-fa5bcd9b5136', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/33\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 15:25:34', '2021-06-11 15:25:34'),
('115d7504-f975-48f5-b4b1-259f97d881de', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/13\",\"fas\":\"fa-file-alt\"}', '2021-06-09 12:34:02', '2021-06-08 08:33:48', '2021-06-09 12:34:02'),
('11e48664-3e30-409c-8abf-66593c0bda6a', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/56\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-13 10:37:09', '2021-07-13 10:37:09'),
('13aa1b99-e247-42c7-81bc-b7fa6fe99a9c', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/54\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-11 05:47:04', '2021-07-11 05:47:04'),
('142f036d-3233-4797-a2f3-79c57a020970', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/17\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:38:33', '2021-06-08 08:38:33'),
('16f8bf52-b6be-4ae2-b612-b7ccce6c8099', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/31\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 11:28:53', '2021-06-11 11:28:53'),
('2145a8e3-687d-444a-8873-b3b2fb77a342', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-15 07:31:21', '2020-08-15 07:31:21'),
('2653bfc7-305b-49e5-b865-a89ab73749af', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/19\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:42:35', '2021-06-08 08:42:35'),
('271041a3-2a60-4ce4-9085-10fb41914df4', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/42\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-20 12:48:26', '2021-06-20 12:48:26'),
('28c20c1e-fe7e-4889-a1b5-d64a244e1fca', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/48\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-21 10:34:31', '2021-06-21 10:34:31'),
('2b9dcda2-edc7-4a3a-a8af-1629062d2926', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/50\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-29 14:21:59', '2021-06-29 14:21:59'),
('2ce66a63-9f2c-402a-a02a-23c809192ac6', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/43\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-20 12:52:47', '2021-06-20 12:52:47'),
('3321c354-d176-4966-9d6b-139d0f2fa366', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/29\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 10:58:21', '2021-06-11 10:58:21'),
('337ea48f-efea-43f3-acc8-c138129954b0', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/18\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:39:06', '2021-06-08 08:39:06'),
('3478d30b-da0d-4d45-9ac0-5c5128d17e86', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/38\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-20 12:30:00', '2021-06-20 12:30:00'),
('3a2ec253-2a35-4afc-80d3-784b074c0afb', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/61\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-27 14:49:27', '2021-07-27 14:49:27'),
('3ab51175-189c-4d55-b8d5-8cb08f80caee', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/27\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 10:01:44', '2021-06-11 10:01:44'),
('3af39f84-cab4-4152-9202-d448435c67de', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/4\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-15 07:54:52', '2020-08-15 07:54:52'),
('3edc7930-1d42-49a0-a708-b6e81e6b643e', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/23\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-09 12:56:17', '2021-06-09 12:56:17'),
('4420da2d-69b2-409a-baae-be40565f47ae', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/32\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 11:32:16', '2021-06-11 11:32:16'),
('45329829-b8ef-4d19-94ba-74b2a852cdd4', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/58\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-27 12:20:31', '2021-07-27 12:20:31'),
('48557640-1e7c-4e90-aa8d-448bfa82bd0d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/41\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-20 12:43:48', '2021-06-20 12:43:48'),
('4a0afdb0-71ad-4ce6-bc70-c92ef491a525', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-17 21:13:51', '2020-08-17 21:13:51'),
('4c2da58e-467c-4d82-8d39-aa8327ae042d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/51\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-01 11:33:12', '2021-07-01 11:33:12'),
('4ca1f8b5-e8fa-4600-8a65-1284bc21c8db', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/22\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:56:13', '2021-06-08 08:56:13'),
('4f20f37c-758d-488b-bd87-bf2c6d3f0002', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/8\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 06:08:28', '2021-06-08 06:08:28'),
('540ca3e9-0ff9-4e2e-9db3-6b5abc823422', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', '2020-08-15 07:30:44', '2020-08-14 07:12:28', '2020-08-15 07:30:44'),
('546ba97f-7bb8-4430-9b14-4324608da42c', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/36\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-16 11:17:44', '2021-06-16 11:17:44'),
('55603a32-752a-4c14-bcc3-6823e3f425e3', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/24\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 09:36:06', '2021-06-11 09:36:06'),
('5da09dd1-3ffc-43b0-aba2-a4260ba4cc76', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-15 07:51:02', '2020-08-15 07:51:02'),
('5e91e603-024e-45c5-b22f-36931fef0d90', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/localhost:8000\\/product-detail\\/white-sports-casual-t\",\"fas\":\"fa-star\"}', NULL, '2020-08-15 07:44:07', '2020-08-15 07:44:07'),
('6e80e1b3-1734-457c-b198-5f6a3f49c876', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/14\",\"fas\":\"fa-file-alt\"}', '2021-06-09 12:34:27', '2021-06-08 08:36:12', '2021-06-09 12:34:27'),
('6fe39f17-7134-4b21-a1b5-80d0865b18bd', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/60\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-27 12:38:54', '2021-07-27 12:38:54'),
('73a3b51a-416a-4e7d-8ca2-53b216d9ad8e', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-14 07:11:03', '2020-08-14 07:11:03'),
('7a24bcf0-ba8c-4e91-96a4-a61c0a3e0b63', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/26\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 10:00:42', '2021-06-11 10:00:42'),
('7c398a01-1c84-4649-8bdc-1d66397a4064', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/35\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-14 16:57:52', '2021-06-14 16:57:52'),
('8222ce30-d84d-42f2-987f-8b5035d68912', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/47\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-21 10:19:53', '2021-06-21 10:19:53'),
('8605db5d-1462-496e-8b5f-8b923d88912c', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/1\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-14 07:20:44', '2020-08-14 07:20:44'),
('871a8d91-410f-4b6e-9c54-cc5fee6eef82', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/45\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-21 10:12:29', '2021-06-21 10:12:29'),
('87ad01bb-bedb-444d-888a-4c5e73a932eb', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/15\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:37:15', '2021-06-08 08:37:15'),
('92db3a23-fad4-4c29-af69-3c502fb28ece', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/7\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-28 13:10:18', '2021-05-28 13:10:18'),
('9dbeb820-e40e-420d-869b-df4f9b70da0f', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/46\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-21 10:12:53', '2021-06-21 10:12:53'),
('9f887466-2502-408d-b734-fb7b81ecc5e2', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/37\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-20 12:26:14', '2021-06-20 12:26:14'),
('a102cb81-aeb7-4444-8fca-b58d05c6accd', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/25\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 09:52:54', '2021-06-11 09:52:54'),
('a6ec5643-748c-4128-92e2-9a9f293f53b5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/5\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-17 21:17:03', '2020-08-17 21:17:03'),
('a757244c-6f7e-4430-bca6-670b9b07cef0', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/30\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 11:20:19', '2021-06-11 11:20:19'),
('ad2047bd-2144-4351-9c53-2e7616761387', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/11\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:25:58', '2021-06-08 08:25:58'),
('b186a883-42f2-4a05-8fc5-f0d3e10309ff', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/2\",\"fas\":\"fa-file-alt\"}', '2020-08-15 04:17:24', '2020-08-14 22:14:55', '2020-08-15 04:17:24'),
('b1d2e88d-5081-47c6-ab9b-acf28bb38525', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/44\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-20 12:58:46', '2021-06-20 12:58:46'),
('b65a2fb5-9bc6-4eea-a075-ee060ee2588f', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/12\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:33:07', '2021-06-08 08:33:07'),
('bf6d879d-41cd-4c11-b9ac-699bc9ea682e', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/6\",\"fas\":\"fa-file-alt\"}', NULL, '2021-04-22 15:49:16', '2021-04-22 15:49:16'),
('c1329a44-942e-4bfc-8a74-dfde652fa66d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/10\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 06:29:25', '2021-06-08 06:29:25'),
('d2fd7c33-b0fe-47d6-8bc6-f377d404080d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-14 07:08:50', '2020-08-14 07:08:50'),
('d8cd35bf-ebb8-481e-baf7-7fe7ba0b9aa3', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/9\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 06:14:41', '2021-06-08 06:14:41'),
('db862fe4-ef7a-422a-9f6f-e41686ef2771', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/55\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-11 05:47:38', '2021-07-11 05:47:38'),
('ddf2b3a9-7bf1-4bb0-9362-53d9814f6b36', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/39\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-20 12:31:57', '2021-06-20 12:31:57'),
('dff78b90-85c8-42ee-a5b1-de8ad0b21be4', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/3\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-15 06:40:54', '2020-08-15 06:40:54'),
('e129d5ed-9899-420a-8322-1427a6140745', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/21\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:51:38', '2021-06-08 08:51:38'),
('e28b0a73-4819-4016-b915-0e525d4148f5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/localhost:8000\\/product-detail\\/lorem-ipsum-is-simply\",\"fas\":\"fa-star\"}', NULL, '2020-08-17 21:08:16', '2020-08-17 21:08:16'),
('e38df34f-6d22-4e81-a777-3820b58c3590', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/53\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-10 12:49:08', '2021-07-10 12:49:08'),
('e414e3cc-e0b6-4d37-ba82-d99a2465f2d7', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/59\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-27 12:28:37', '2021-07-27 12:28:37'),
('e8d60fa9-7e1c-4fec-bf93-9cd978f9def5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/28\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 10:06:23', '2021-06-11 10:06:23'),
('e987247a-5505-4e04-a466-b2885ac4b3a5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/62\",\"fas\":\"fa-file-alt\"}', NULL, '2021-07-27 15:06:44', '2021-07-27 15:06:44'),
('edff39af-dc9e-4292-8978-bae66adc0e13', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/16\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-08 08:38:02', '2021-06-08 08:38:02'),
('fb05610c-24eb-4516-8e1e-4aec139c138a', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/34\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-11 15:36:27', '2021-06-11 15:36:27'),
('fdf265fd-a9e9-4144-8954-03684da87f17', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/40\",\"fas\":\"fa-file-alt\"}', NULL, '2021-06-20 12:36:47', '2021-06-20 12:36:47'),
('ffffa177-c54e-4dfe-ba43-27c466ff1f4b', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_total` double(8,2) NOT NULL,
  `shipping_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon` double(8,2) DEFAULT NULL,
  `total_amount` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_method` enum('cod','paypal','paytm') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cod',
  `payment_status` enum('paid','unpaid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `status` enum('new','process','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'India',
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `sub_total`, `shipping_id`, `coupon`, `total_amount`, `quantity`, `payment_method`, `payment_status`, `status`, `first_name`, `last_name`, `email`, `phone`, `country`, `post_code`, `address1`, `address2`, `created_at`, `updated_at`) VALUES
(1, 'ORD-PMIQF5MYPK', NULL, 14399.00, 1, 573.90, 13925.10, 6, 'cod', 'unpaid', 'delivered', 'Prajwal', 'Rai', 'prajwal.iar@gmail.com', '9800887778', 'NP', '44600', 'Koteshwor', 'Kathmandu', '2020-08-14 07:20:44', '2020-08-14 09:37:37'),
(2, 'ORD-YFF8BF0YBK', 2, 1939.03, 1, NULL, 2039.03, 1, 'cod', 'unpaid', 'delivered', 'Sandhya', 'Rai', 'user@gmail.com', '90000000990', 'NP', NULL, 'Lalitpur', NULL, '2020-08-14 22:14:49', '2020-08-14 22:15:19'),
(3, 'ORD-1CKWRWTTIK', NULL, 200.00, 1, NULL, 300.00, 1, 'paypal', 'paid', 'process', 'Prajwal', 'Rai', 'prajwal.iar@gmail.com', '9807009999', 'NP', '44600', 'Kathmandu', 'Kadaghari', '2020-08-15 06:40:49', '2020-08-17 20:52:40'),
(4, 'ORD-HVO0KX0YHW', NULL, 23660.00, 3, 150.00, 23910.00, 6, 'paypal', 'paid', 'new', 'Prajwal', 'Rai', 'prajwal.iar@gmail.com', '9800098878', 'NP', '44600', 'Pokhara', NULL, '2020-08-15 07:54:52', '2020-08-15 07:54:52'),
(6, 'ORD-OT1EE9CX7X', NULL, 230997.00, 1, NULL, 231097.00, 3, 'cod', 'unpaid', 'new', 'Shivansh', 'Raghav', 'shivansh901@gmail.com', '9990941900', 'IN', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-04-22 15:49:16', '2021-04-22 15:49:16'),
(7, 'ORD-RXNWGCCYIP', 2, 100999.00, NULL, NULL, 100999.00, 1, 'paypal', 'paid', 'new', 'Shivansh', 'Raghav', 'shivansh901@gmail.com', '9990941900', 'IN', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-05-28 13:10:18', '2021-05-28 13:10:18'),
(15, 'ORD-RKU0EZDFJO', 1, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'admin@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-08 08:37:15', '2021-06-08 08:37:15'),
(16, 'ORD-UIUKASIFO8', 1, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'admin@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-08 08:38:02', '2021-06-08 08:38:02'),
(17, 'ORD-9BOJOBVEWB', 1, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'admin@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-08 08:38:33', '2021-06-08 08:38:33'),
(18, 'ORD-V5L8P9VFEH', 1, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'paid', 'new', 'Vishal', 'Saini', 'admin@gmail.com', '8484848484', 'India', '123456', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-08 08:39:05', '2021-06-08 08:39:05'),
(19, 'ORD-6IR73P0F0O', 1, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'paid', 'new', 'Vishal', 'Saini', 'admin@gmail.com', '8484848484', 'India', '123456', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-08 08:42:35', '2021-06-08 08:42:35'),
(20, 'ORD-9AIOIFHE2M', 1, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'paid', 'new', 'Vishal', 'Saini', 'admin@gmail.com', '8484848484', 'India', '123456', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-08 08:43:05', '2021-06-08 08:43:05'),
(21, 'ORD-4MSZTNPYNZ', 1, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'admin@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-08 08:51:38', '2021-06-08 08:51:38'),
(22, 'ORD-JWUSZSGIGQ', 1, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'paid', 'new', 'Vishal', 'Saini', 'admin@gmail.com', '8484848484', 'India', '123456', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-08 08:56:13', '2021-06-08 08:56:13'),
(23, 'ORD-4KRNR0BE0P', 2, 12000.00, 5, 1200.00, 10800.00, 1, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'user@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-09 12:56:17', '2021-06-09 12:56:17'),
(24, 'ORD-FXZCL71R4Y', 1, 75699.02, 5, NULL, 75699.02, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'admin@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 09:36:05', '2021-06-11 09:36:05'),
(25, 'ORD-9NP6DWDUDC', 1, 75699.02, 5, NULL, 75699.02, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'admin@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 09:52:54', '2021-06-11 09:52:54'),
(26, 'ORD-QVCOSMOZVW', 1, 75699.02, 5, NULL, 75699.02, 2, 'paytm', 'paid', 'new', 'Vishal', 'Saini', 'admin@gmail.com', '8484848484', 'India', '123456', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 10:00:42', '2021-06-11 10:00:42'),
(27, 'ORD-VFXMGEKVEI', 1, 75699.02, 5, NULL, 75699.02, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'admin@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 10:01:44', '2021-06-11 10:01:44'),
(28, 'ORD-ZHGLXXT93B', 1, 75699.02, 5, NULL, 75699.02, 2, 'paytm', 'paid', 'new', 'Vishal', 'Saini', 'admin@gmail.com', '8484848484', 'India', '123456', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 10:06:23', '2021-06-11 10:06:23'),
(29, 'ORD-YEK8XSQEUE', 2, 12000.00, 5, NULL, 12000.00, 1, 'paytm', 'paid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 10:58:21', '2021-06-11 10:58:21'),
(30, 'ORD-4E6JQCV4CI', 1, 12000.00, 5, 1200.00, 10800.00, 1, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'admin@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 11:20:19', '2021-06-11 11:20:19'),
(31, 'ORD-5WWETKD7ZR', 2, 107949.05, 5, NULL, 107949.05, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'user@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 11:28:52', '2021-06-11 11:28:52'),
(32, 'ORD-0G7HPYFSF9', 1, 75699.02, 5, NULL, 75699.02, 2, 'paytm', 'paid', 'new', 'Vishal', 'Saini', 'admin@gmail.com', '8484848484', 'India', '123456', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 11:32:16', '2021-06-11 11:32:16'),
(33, 'ORD-OFW15PBOIG', 2, 197549.05, 5, NULL, 197549.05, 2, 'paytm', 'paid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 15:25:34', '2021-06-11 15:25:34'),
(34, 'ORD-5L4HTCKIXZ', NULL, 159648.07, 5, NULL, 159648.07, 2, 'paytm', 'paid', 'new', 'Shivansh', 'Raghav', 'shivansh901@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-11 15:36:27', '2021-06-11 15:36:27'),
(36, 'ORD-QHUBXA1SDK', 2, 75699.02, 5, NULL, 75699.02, 2, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-16 11:17:44', '2021-06-16 11:17:44'),
(37, 'ORD-MHZ4IWUESU', 2, 95949.05, 5, NULL, 95949.05, 1, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-20 12:26:14', '2021-06-20 12:26:14'),
(38, 'ORD-C9UFIJGDLO', 2, 95949.05, 5, NULL, 95949.05, 1, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-20 12:30:00', '2021-06-20 12:30:00'),
(39, 'ORD-80JF2PUO58', 2, 63699.02, 5, NULL, 63699.02, 1, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-20 12:31:57', '2021-06-20 12:31:57'),
(40, 'ORD-GQG7BE29I3', 2, 63699.02, 5, NULL, 63699.02, 1, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-20 12:36:47', '2021-06-20 12:36:47'),
(41, 'ORD-MS49LPBLQU', 2, 63699.02, 5, NULL, 63699.02, 1, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-20 12:43:48', '2021-06-20 12:43:48'),
(42, 'ORD-DNLZX8HFPM', 2, 101600.00, 5, NULL, 101600.00, 1, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-20 12:48:26', '2021-06-20 12:48:26'),
(43, 'ORD-CVGRLY6PZS', 2, 63699.02, 5, NULL, 63699.02, 1, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-20 12:52:47', '2021-06-20 12:52:47'),
(44, 'ORD-WQVYR5KRJL', 2, 101600.00, 5, NULL, 101600.00, 1, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-20 12:58:46', '2021-06-20 12:58:46'),
(45, 'ORD-EVCDLIXFUA', NULL, 95949.05, 5, 9594.91, 86354.15, 1, 'paytm', 'unpaid', 'new', 'Shivansh', 'Raghav', 'shiv901@live.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-21 10:12:29', '2021-06-21 10:12:29'),
(46, 'ORD-Y19XE9QTHS', NULL, 95949.05, 5, 9594.91, 86354.15, 1, 'paytm', 'unpaid', 'new', 'Shivansh', 'Raghav', 'shiv901@live.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-21 10:12:53', '2021-06-21 10:12:53'),
(47, 'ORD-CWWD8HATY5', NULL, 63699.02, 5, 6369.90, 57329.12, 1, 'paytm', 'unpaid', 'new', 'Shivansh', 'Raghav', 'shiv901@live.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-21 10:19:53', '2021-06-21 10:19:53'),
(48, 'ORD-F1YDK3YAGB', NULL, 101600.00, 5, 6369.90, 95230.10, 1, 'paytm', 'unpaid', 'new', 'Shivansh', 'Raghav', 'shivansh901@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-21 10:34:31', '2021-06-21 10:34:31'),
(49, 'ORD-SB1TBWV8HL', NULL, 113600.00, 5, NULL, 113600.00, 2, 'paytm', 'unpaid', 'new', 'Shivansh', 'Raghav', 'shivansh901@gmail.com', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-21 11:08:36', '2021-06-21 11:08:36'),
(50, 'ORD-IWNI1ITKKF', 2, 194399.20, 5, NULL, 194399.20, 3, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-06-29 14:21:59', '2021-06-29 14:21:59'),
(51, 'ORD-SEPDYQMV1R', 63, 12000.00, 5, NULL, 12000.00, 1, 'paytm', 'unpaid', 'new', 'Shiva', 'Ragha', '44', '9876543210', 'India', '123456', 'H.no hgfcvabjiuyhgdvq', NULL, '2021-07-01 11:33:12', '2021-07-01 11:33:12'),
(52, 'ORD-ZSEJWI4QUF', 63, 80799.20, 5, NULL, 80799.20, 1, 'paytm', 'unpaid', 'new', 'Shiva', 'Ragha', 'shiv901@live.com', '9876543210', 'India', '123456', 'H.no hgfcvabjiuyhgdvq', NULL, '2021-07-01 11:35:15', '2021-07-01 11:35:15'),
(53, 'ORD-BNXRQG71NT', 2, 75699.02, 5, 7569.90, 68129.12, 2, 'paytm', 'unpaid', 'new', 'Vishal', 'b', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-07-10 12:49:08', '2021-07-10 12:49:08'),
(56, 'ORD-18POOE1JH1', 64, 92799.20, 5, 9279.92, 83519.28, 2, 'paytm', 'unpaid', 'new', 'Shivansh', 'Raghav', 'shiv@g.co', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-07-13 10:37:08', '2021-07-13 10:37:08'),
(57, 'ORD-XELNJYO6BT', 64, 165299.02, 5, NULL, 165299.02, 2, 'paytm', 'unpaid', 'new', 'Shivansh', 'Raghav', 'shiv@g.co', '9990941900', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir', NULL, '2021-07-13 10:38:11', '2021-07-13 10:38:11'),
(58, 'ORD-T55QWHJIPL', 63, 12000.00, 5, 1200.00, 10800.00, 1, 'cod', 'unpaid', 'new', 'Shiva', 'Ragha', 'shiv901@live.com', '9876543210', 'India', '123456', 'H.no hgfcvabjiuyhgdvq', NULL, '2021-07-27 12:20:30', '2021-07-27 12:20:30'),
(59, 'ORD-RNRYHU7GSW', 63, 144498.22, 5, 14449.82, 130048.40, 2, 'cod', 'unpaid', 'new', 'Shiva', 'Ragha', 'shiv901@live.com', '9876543210', 'India', '123456', 'H.no hgfcvabjiuyhgdvq', NULL, '2021-07-27 12:28:37', '2021-07-27 12:28:37'),
(60, 'ORD-8QWBB8CQ4Z', 63, 92799.20, 5, 9279.92, 83519.28, 2, 'paytm', 'paid', 'new', 'Shiva', 'Ragha', 'shiv901@live.com', '9876543210', 'India', '123456', 'H.no hgfcvabjiuyhgdvq', NULL, '2021-07-27 12:38:54', '2021-07-27 14:45:13'),
(61, 'ORD-NDVUG82WBU', 63, 92799.20, 5, 9279.92, 83519.28, 2, 'paytm', 'paid', 'new', 'Shiva', 'Ragha', 'shiv901@live.com', '9876543210', 'India', '123456', 'H.no hgfcvabjiuyhgdvq', NULL, '2021-07-27 14:49:27', '2021-07-27 14:49:54'),
(62, 'ORD-CBQA1PKUBZ', 2, 63699.02, 5, 300.00, 63399.02, 1, 'paytm', 'paid', 'new', 'Bisaal', 'Sain', 'user@gmail.com', '8484848484', 'India', '122001', 'H.no 294 Ohm General Store, Chhoti Mata Mandir Road, Behind Sheetla mata Mandir gurgaon', NULL, '2021-07-27 15:06:44', '2021-07-27 15:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$wRtdHHS9z6gwcQzkIu/WrOxgnW0dKj0CrHd7d29D/q3yWdRlR33uC', '2021-04-25 06:28:07'),
('shivansh901@gmail.com', '$2y$10$oExHZ4rClSpmHAtYScnL2OQWuCe4faLcW9ogGFiuOj4GSAcCbdDQu', '2021-06-11 12:37:09');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `summary`, `description`, `quote`, `photo`, `tags`, `post_cat_id`, `post_tag_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Where does it come from?', 'where-does-it-come-from', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text.&nbsp;</span><br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</span><br></p>', '/storage/photos/1/Blog/blog1.jpg', '2020,Visit nepal 2020', 1, NULL, 2, 'active', '2020-08-14 01:55:55', '2020-08-14 04:29:56'),
(2, 'Where can I get some?', 'where-can-i-get-some', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader</span><br></h2>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 24px; font-size: 24px; padding: 0px; font-family: DauphinPlain;\">Why do we use it?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 24px; font-size: 24px; padding: 0px; font-family: DauphinPlain;\">Why do we use it?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', NULL, '/storage/photos/1/Blog/blog2.jpg', 'Enjoy', 2, NULL, 1, 'active', '2020-08-14 01:58:52', '2020-08-14 07:08:14'),
(3, 'The standard Lorem Ipsum passage, used since the 1500s', 'the-standard-lorem-ipsum-passage-used-since-the-1500s', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit,</span><br></p>', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', NULL, '/storage/photos/1/Blog/blog3.jpg', '', 3, NULL, NULL, 'active', '2020-08-14 02:59:33', '2020-08-14 04:29:44'),
(5, 'The standard Lorem Ipsum passage,', 'the-standard-lorem-ipsum-passage', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><br></p>', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard Lorem Ipsum passage, used since the 1500s</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.32 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Section 1.10.33 of \"de Finibus Bonorum et Malorum\", written by Cicero in 45 BC</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.\"</p><h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1914 translation by H. Rackham</h3><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">\"On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.\"</p>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</span><br></p>', '/storage/photos/1/Blog/blog2.jpg', ',Enjoy,2020,Visit nepal 2020', 1, NULL, 1, 'active', '2020-08-15 06:58:45', '2020-08-15 06:58:45'),
(6, 'Lorem Ipsum is simply', 'lorem-ipsum-is-simply', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry.</span><br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p><hr><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p>', NULL, '/storage/photos/1/Blog/blog3.jpg', 'Enjoy,2020', 2, NULL, 1, 'active', '2020-08-17 20:54:19', '2020-08-17 20:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 'contrary', 'active', '2020-08-14 01:51:03', '2020-08-14 01:51:39'),
(2, 'Electronics', 'richard', 'active', '2020-08-14 01:51:22', '2020-08-14 01:52:00'),
(3, 'Cloths', 'cloths', 'active', '2020-08-14 01:52:22', '2020-08-14 01:52:22'),
(4, 'enjoy', 'enjoy', 'active', '2020-08-14 03:16:10', '2020-08-14 03:16:10'),
(5, 'Post Category', 'post-category', 'active', '2020-08-15 06:59:04', '2020-08-15 06:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `replied_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `post_id`, `comment`, `status`, `replied_comment`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Testing comment edited', 'active', NULL, NULL, '2020-08-14 07:08:42', '2020-08-15 06:59:58'),
(2, NULL, 2, 'testing 2', 'active', NULL, 1, '2020-08-14 07:11:03', '2020-08-14 07:11:03'),
(3, 2, 2, 'That\'s cool', 'active', NULL, 2, '2020-08-14 07:12:27', '2020-08-14 07:12:27'),
(4, 1, 2, 'nice', 'active', NULL, NULL, '2020-08-15 07:31:19', '2020-08-15 07:31:19'),
(5, NULL, 5, 'nice blog', 'active', NULL, NULL, '2020-08-15 07:51:01', '2020-08-15 07:51:01'),
(6, 2, 3, 'nice', 'active', NULL, NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29'),
(7, 2, 3, 'really', 'active', NULL, 6, '2020-08-17 21:13:51', '2020-08-17 21:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Enjoy', 'enjoy', 'active', '2020-08-14 01:53:52', '2020-08-14 01:53:52'),
(2, '2020', '2020', 'active', '2020-08-14 01:54:09', '2020-08-14 01:54:09'),
(3, 'Visit nepal 2020', 'visit-nepal-2020', 'active', '2020-08-14 01:54:33', '2020-08-14 01:54:33'),
(4, 'Tag', 'tag', 'active', '2020-08-15 06:59:31', '2020-08-15 06:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 1,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'M',
  `ram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condition` enum('superb','better','good') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'superb',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `child_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `summary`, `description`, `photo`, `stock`, `size`, `ram`, `condition`, `status`, `price`, `discount`, `is_featured`, `cat_id`, `child_cat_id`, `brand_id`, `created_at`, `updated_at`, `color`, `amount`) VALUES
(11, 'Oneplus 9 Pro 5G', 'oneplus-9-pro-5g', '<p>oneplus 9 pro</p>', '<p>5G</p>', '/storage/photos/1/Products/OP9-pro-1.jpg,/storage/photos/1/Products/OP9-pro-2.jpg', 10, '256', '12', 'superb', 'active', 64999.00, 2.00, 1, 13, NULL, 9, '2021-04-21 08:31:22', '2021-07-27 15:07:46', NULL, 63699),
(12, 'Iphone 12 pro', 'iphone-12-pro', '<p>Iphone 12 pro</p>', '<p>latest</p>', '/storage/photos/1/Products/Iphone-12-max.jpg', 30, '128', '6', 'superb', 'active', 127000.00, 20.00, 1, 12, NULL, 7, '2021-04-22 07:13:08', '2021-06-24 09:08:18', NULL, 101600),
(13, 'Samsung S21 pro', 'samsung-s21-pro', '<div class=\"_2418kt\"><ul><li class=\"_21Ahn-\">8 GB RAM | 256 GB ROM</li><li class=\"_21Ahn-\"> 17.02 cm (6.7 inch) Full HD+ Display</li><li class=\"_21Ahn-\">64MP + 12MP + 12MP | 10MP Front Camera</li><li class=\"_21Ahn-\">4800 mAh Lithium-ion Battery</li><li class=\"_21Ahn-\">Exynos 2100 Processor</li></ul></div>', '<div class=\"_3k-BhJ\"><div class=\"flxcaE\">General</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">In The Box</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Handset, Non-removable Battery, USB Cable</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Model Number</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">SM-G996BZSGINU</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Model Name</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Galaxy S21 Plus</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Color</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Phantom Silver</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Browse Type</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Smartphones</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">SIM Type</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Dual Sim</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Hybrid Sim Slot</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">No</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Touchscreen</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">OTG Compatible</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Display Features</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Display Size</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">17.02 cm (6.7 inch)</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Resolution</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">2400 x 1080 Pixels</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Resolution Type</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Full HD+</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Display Type</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Full HD+ Display</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Os &amp; Processor Features</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Operating System</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Android 10</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Processor Type</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Exynos 2100</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Processor Core</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Octa Core</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Primary Clock Speed</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">2.9 GHz</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Memory &amp; Storage Features</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Internal Storage</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">256 GB</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">RAM</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">8 GB</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Phone Book Memory</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Call Log Memory</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">SMS Memory</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Camera Features</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Primary Camera Available</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Primary Camera</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">64MP + 12MP + 12MP</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Primary Camera Features</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">64MP + 12MP + 12MP Triple Rear Camera Setup</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Optical Zoom</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Secondary Camera Available</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Secondary Camera</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">10MP Front Camera</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Secondary Camera Features</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">10MP Front Camera</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Flash</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Rear LED Flash</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">HD Recording</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Full HD Recording</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Video Recording</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Video Recording Resolution</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">8K</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Image Editor</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Dual Camera Lens</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Primary Camera</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Call Features</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Call Wait/Hold</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Hands Free</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Video Call Support</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Call Divert</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Phone Book</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Call Timer</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Speaker Phone</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Speed Dialing</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Call Records</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Connectivity Features</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Network Type</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">5G, 4G VOLTE, 4G, 3G, 2G</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Supported Networks</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">5G, 4G VoLTE, 4G LTE, WCDMA, GSM</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Internet Connectivity</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">5G, 4G, 3G, Wi-Fi, EDGE, GPRS</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">3G</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">GPRS</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Pre-installed Browser</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Google Chrome</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Bluetooth Support</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Wi-Fi</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Wi-Fi Hotspot</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">NFC</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">USB Connectivity</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Map Support</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Google Map</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">GPS Support</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Other Details</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Smartphone</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">SIM Size</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Nano</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Social Networking Phone</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Instant Message</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Business Phone</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Removable Battery</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">No</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">MMS</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">SMS</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Keypad</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">No</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Voice Input</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Predictive Text Input</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">Yes</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Series</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">S Series</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Multimedia Features</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">FM Radio</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">No</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">FM Radio Recording</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">No</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Battery &amp; Power Features</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Battery Capacity</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">4800 mAh</li></ul></td></tr></tbody></table></div><div class=\"_3k-BhJ\"><div class=\"flxcaE\">Dimensions</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Width</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">75.6 mm</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Height</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">161.4 mm</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Depth</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">7.8 mm</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Weight</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">202 g</li></ul></td></tr></tbody></table></div><div class=\"flxcaE\">Warranty</div><table class=\"_14cfVK\"><tbody><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Warranty Summary</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">1 Year Manufacturer Warranty for Handset and 6 Months Warranty for In the Box Accessories</li></ul></td></tr><tr class=\"_1s_Smc row\"><td class=\"_1hKmbr col col-3-12\">Domestic Warranty</td><td class=\"URwL2w col col-9-12\"><ul><li class=\"_21lJbe\">1 Year</li></ul></td></tr></tbody></table>', '/storage/photos/1/Products/S21.jpg', 10, '256', '12', 'better', 'active', 100999.00, 20.00, 1, 13, NULL, 10, '2021-04-22 07:14:36', '2021-07-27 14:49:54', 'Phantom Silver', 80799),
(14, 'Xiaomi Mi A1', 'a1', '4 GB RAM | 64 GB ROM | Expandable Upto 128 GB, 13.97 cm (5.5 inch), 12MP + 12MP | 5MP, 3080mAh battery', '<p><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\">The Xiaomi Mi A1 is an Android One phone that is powered by Google itself. So not only do you get near-stock Android Nougat out of the box, but you are also guaranteed OS upgrades. Further, Android One device is also one of the first to get the upgrade.</span><br></p>', '/storage/photos/1/Products/xiaomi-mi-a1-3.jpg', 30, '32', '4', 'good', 'active', 20000.00, 40.00, 1, 13, NULL, 11, '2021-04-22 07:16:54', '2021-07-27 14:49:54', 'Golden', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rate` tinyint(4) NOT NULL DEFAULT 0,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `rate`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 5, 'nice product', 'active', '2020-08-15 07:44:05', '2020-08-15 07:44:05'),
(2, 2, NULL, 5, 'nice', 'active', '2020-08-17 21:08:14', '2020-08-17 21:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `description`, `short_des`, `logo`, `photo`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'We are Grest', 'We are Grest, the leading marketplace dedicated to refurbished devices. Our mission is to bring the refurbished goods as a main stream of new products.', '/storage/photos/1/main_logo.png', '/storage/photos/1/users/user3.jpg', '7 & 8, Hemant Complex, Opposite Mayon Hospital, South City-1 Market, South City-1, Gurgaon - 122001', '+91 96251 48025', 'info@grest.in', NULL, '2021-05-30 01:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `type`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kahtmandu', '100.00', 'active', '2020-08-14 04:22:17', '2020-08-14 04:22:17'),
(2, 'Out of valley', '300.00', 'active', '2020-08-14 04:22:41', '2020-08-14 04:22:41'),
(3, 'Pokhara', '400.00', 'active', '2020-08-15 06:54:04', '2020-08-15 06:54:04'),
(4, 'Dharan', '400.00', 'active', '2020-08-17 20:50:48', '2020-08-17 20:50:48'),
(5, 'India', '0.00', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `role`, `provider`, `provider_id`, `status`, `remember_token`, `created_at`, `updated_at`, `phone`, `last_name`, `first_name`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$GOGIJdzJydYJ5nAZ42iZNO3IL1fdvXoSPdUOH3Ajy5hRmi0xBmTzm', '/storage/photos/1/users/user3.jpg', 'admin', NULL, NULL, 'active', 'G4W3bIwVUSGLQOMrIui81nwcZoJIiBJqfxvNy23e9H85FcwquP6zFhI6datH', NULL, '2021-04-27 10:52:48', NULL, '', ''),
(2, 'User1', 'user@gmail.com', '2021-07-25 12:11:43', '$2y$10$10jB2lupSfvAUfocjguzSeN95LkwgZJUM7aQBdb2Op7XzJ.BhNoHq', '/storage/photos/1/users/user2.jpg', 'user', NULL, NULL, 'active', NULL, NULL, '2021-07-25 12:11:43', '9909909900', '', ''),
(29, 'Prajwal Rai', 'rae.prajwal@gmail.com', NULL, NULL, NULL, 'user', 'google', '110717103019405487938', 'active', NULL, '2020-08-15 07:36:29', '2020-08-15 07:36:29', NULL, '', ''),
(63, 'Shivansh Raghav', 'shiv901@live.com', '2021-07-25 02:17:21', '$2y$10$8PW3PyUj7TesulFsUHNoSu/NBtT52bHL9hhGCL3cO.Kcl/rREUNPK', '/storage/photos/63/IMG_20200821_100900 square.jpg', 'user', NULL, NULL, 'active', 'hDmngU8MFFOKYndP1uOV26PEnLZ68Wgd9EUeY6EVylpmk9mBUjVdlmtTNpI4', '2021-07-01 09:59:01', '2021-07-25 02:18:37', '9876543210', 'Raghav', 'Shivansh'),
(64, 'Shiva Ragha', 'shiv@g.co', NULL, '$2y$10$.ueG3JPk9YeKxXSXh/ok6.xW8E9u9N5d9aWsiWZPlUkcRIPpdZhGG', NULL, 'user', NULL, NULL, 'active', NULL, '2021-07-13 10:35:52', '2021-07-13 10:35:52', '9876543210', 'Ragha', 'Shiva'),
(65, 'Vish San', 'vishsan@gmail.com', '2021-07-25 02:47:44', '$2y$10$9jA.5B9KcnJmuAOraboGmeZPGhCt3eKgJvsh6BQk05YmCO5bJPb0m', NULL, 'user', NULL, NULL, 'active', NULL, '2021-07-25 02:34:51', '2021-07-25 02:47:44', '9876543210', 'San', 'Vish'),
(67, 'Asmita Dahiya', 'asmitad@gm.com', '2021-07-25 02:51:37', '$2y$10$XoZsV8fbwypGnEjKWtyQkOUg//B66Up8Hh20GrUFdK0LZ8D.iKEXi', '/storage/photos/67/screen-shot-2019-05-21-at-6.26.53-pm.png', 'user', NULL, NULL, 'active', NULL, '2021-07-25 02:51:12', '2021-07-25 03:38:18', '1234567890', 'Dahiya', 'Asmita'),
(68, 'Balbir Singh', 'balbir@gmail.com', '2021-12-28 12:01:31', '$2y$10$vOhLMQmERanY.oeMCGqrwOsNpfOtZZH.9i8nYMqBUDfY8sBB7MvQq', NULL, 'user', NULL, NULL, 'active', NULL, '2021-12-28 11:58:34', '2021-12-28 12:01:31', '9876543210', 'Singh', 'Balbir'),
(69, 'Admin admin', 'shivan@gmail.com', NULL, '$2y$10$8crmZTkoXrS/SoMluy/c2edBELSkCRJyOj/t92AL7FJPZSq4h8Qja', NULL, 'user', NULL, NULL, 'active', NULL, '2022-01-08 12:10:58', '2022-01-08 12:10:58', '9234567890', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_added_by_foreign` (`added_by`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_post_cat_id_foreign` (`post_cat_id`),
  ADD KEY `posts_post_tag_id_foreign` (`post_tag_id`),
  ADD KEY `posts_added_by_foreign` (`added_by`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_user_id_foreign` (`user_id`),
  ADD KEY `post_comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_tags_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_child_cat_id_foreign` (`child_cat_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_cart_id_foreign` (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_post_cat_id_foreign` FOREIGN KEY (`post_cat_id`) REFERENCES `post_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_post_tag_id_foreign` FOREIGN KEY (`post_tag_id`) REFERENCES `post_tags` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `post_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_child_cat_id_foreign` FOREIGN KEY (`child_cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
