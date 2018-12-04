-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2018 at 08:46 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addresses_location_langs`
--

CREATE TABLE `addresses_location_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'status', '2017-07-22 05:43:51', '2017-07-22 05:45:37', NULL),
(2, 'width', '2017-07-22 05:44:19', '2017-07-22 05:44:19', NULL),
(3, 'limit', '2017-07-22 05:44:43', '2017-07-22 05:44:43', NULL),
(4, 'text_editor', '2017-07-22 05:45:14', '2017-07-22 05:45:14', NULL),
(5, 'sliders', '2017-09-09 12:19:11', '2017-09-09 12:19:11', NULL),
(6, 'blocks', '2017-09-10 13:07:58', '2017-09-10 13:07:58', NULL),
(7, 'courses', '2017-09-13 14:42:04', '2017-09-13 14:42:04', NULL),
(8, 'show', '2017-09-13 15:23:39', '2017-09-13 15:23:39', NULL),
(9, 'persons', '2017-09-20 15:02:58', '2017-09-20 15:02:58', NULL),
(10, 'title', '2017-09-22 15:17:52', '2017-09-22 15:17:52', NULL),
(11, 'icon', '2017-09-22 15:19:14', '2017-09-22 15:19:14', NULL),
(12, 'vertical_sliders', '2017-09-24 15:32:27', '2017-09-24 15:32:27', NULL),
(13, 'images', '2017-09-29 01:56:23', '2017-09-29 01:56:23', NULL),
(14, 'link_text', '2017-09-29 03:11:00', '2017-09-29 03:13:59', NULL),
(15, 'url', '2017-09-29 03:14:33', '2017-09-29 03:14:33', NULL),
(16, 'page', '2017-09-30 13:39:06', '2017-09-30 13:49:09', NULL),
(17, 'steps', '2017-10-16 13:31:48', '2017-10-16 13:31:48', NULL),
(18, 'text_cards_1', '2017-10-16 14:56:40', '2017-10-17 15:57:38', NULL),
(19, 'url_text', NULL, NULL, NULL),
(20, 'rotate', '2018-03-29 16:34:36', '2018-03-29 16:34:36', NULL),
(21, 'galleries', '2018-03-31 14:37:45', '2018-03-31 14:37:45', NULL),
(22, 'geolocation', '2018-04-11 15:51:11', '2018-04-11 15:51:11', NULL),
(23, 'image', '2018-05-20 12:15:56', '2018-05-20 12:15:56', NULL),
(24, 'course', '2018-05-20 12:25:51', '2018-05-20 12:25:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attribute_name_langs`
--

CREATE TABLE `attribute_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_name_langs`
--

INSERT INTO `attribute_name_langs` (`id`, `attribute_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Status', '2017-07-22 05:43:51', '2017-07-22 05:43:51', NULL),
(2, 1, 2, 'الحالة', '2017-07-22 05:43:51', '2017-07-22 05:43:51', NULL),
(3, 2, 1, 'Width', '2017-07-22 05:44:19', '2017-07-22 05:44:19', NULL),
(4, 2, 2, 'العرض', '2017-07-22 05:44:19', '2017-07-22 05:44:19', NULL),
(5, 3, 1, 'Limit', '2017-07-22 05:44:43', '2017-07-22 05:44:43', NULL),
(6, 3, 2, 'الحدود', '2017-07-22 05:44:43', '2017-07-22 05:44:43', NULL),
(7, 4, 1, 'Text Editor', '2017-07-22 05:45:14', '2017-07-22 05:45:14', NULL),
(8, 4, 2, 'محرر نصوص', '2017-07-22 05:45:14', '2017-07-22 05:45:14', NULL),
(9, 5, 1, 'Sliders', '2017-09-09 12:19:11', '2017-09-09 12:19:11', NULL),
(10, 5, 2, 'شرائح', '2017-09-09 12:19:11', '2017-09-09 12:19:11', NULL),
(11, 6, 1, 'Blocks', '2017-09-10 13:07:58', '2017-09-10 13:07:58', NULL),
(12, 6, 2, 'كتل', '2017-09-10 13:07:58', '2017-09-10 13:07:58', NULL),
(13, 7, 1, 'Courses', '2017-09-13 14:42:04', '2017-09-13 14:42:04', NULL),
(14, 7, 2, 'المقررات', '2017-09-13 14:42:04', '2017-09-13 14:42:04', NULL),
(15, 8, 1, 'Show', '2017-09-13 15:23:39', '2017-09-13 15:23:39', NULL),
(16, 8, 2, 'اظهار', '2017-09-13 15:23:40', '2017-09-13 15:23:40', NULL),
(17, 9, 1, 'Persons', '2017-09-20 15:02:58', '2017-09-20 15:02:58', NULL),
(18, 9, 2, 'أشخاص', '2017-09-20 15:02:58', '2017-09-20 15:02:58', NULL),
(19, 10, 1, 'Title', '2017-09-22 15:17:53', '2017-09-22 15:17:53', NULL),
(20, 10, 2, 'عنوان', '2017-09-22 15:17:53', '2017-09-22 15:17:53', NULL),
(21, 11, 1, 'Icon', '2017-09-22 15:19:14', '2017-09-22 15:19:14', NULL),
(22, 11, 2, 'ايقونه', '2017-09-22 15:19:14', '2017-09-22 15:19:14', NULL),
(23, 12, 1, 'Vertical Sliders', '2017-09-24 15:32:27', '2017-09-24 15:32:27', NULL),
(24, 12, 2, 'شرائح افقيه', '2017-09-24 15:32:27', '2017-09-24 15:32:27', NULL),
(25, 13, 1, 'Images', '2017-09-29 01:56:23', '2017-09-29 01:56:23', NULL),
(26, 13, 2, 'صور', '2017-09-29 01:56:23', '2017-09-29 01:56:23', NULL),
(27, 14, 1, 'Link Text', '2017-09-29 03:11:00', '2017-09-29 03:13:59', NULL),
(28, 14, 2, 'نص الرابط', '2017-09-29 03:11:00', '2017-09-29 03:13:59', NULL),
(29, 15, 1, 'Url', '2017-09-29 03:14:33', '2017-09-29 03:14:33', NULL),
(30, 15, 2, 'رابط', '2017-09-29 03:14:33', '2017-09-29 03:14:33', NULL),
(31, 16, 1, 'Page', '2017-09-30 13:39:06', '2017-09-30 13:49:09', NULL),
(32, 16, 2, 'الصفحة', '2017-09-30 13:39:06', '2017-09-30 13:49:09', NULL),
(35, 17, 1, 'Steps', '2017-10-16 13:31:48', '2017-10-16 13:31:48', NULL),
(36, 17, 2, 'خطوات', '2017-10-16 13:31:48', '2017-10-16 13:31:48', NULL),
(37, 18, 1, 'Text Card #1', '2017-10-16 14:56:40', '2017-10-17 15:57:38', NULL),
(38, 18, 2, 'بطاقات النصوص #1', '2017-10-16 14:56:40', '2017-10-17 15:57:38', NULL),
(39, 19, 1, 'URL Text', '2017-10-31 16:39:04', '2017-10-31 16:39:04', NULL),
(40, 19, 2, 'نص الرابط', '2017-10-31 16:39:04', '2017-10-31 16:39:04', NULL),
(41, 20, 1, 'Rotate', '2018-03-29 16:34:37', '2018-03-29 16:34:37', NULL),
(42, 20, 2, 'تدوير', '2018-03-29 16:34:38', '2018-03-29 16:34:38', NULL),
(43, 21, 1, 'Galleries', '2018-03-31 14:37:45', '2018-03-31 14:37:45', NULL),
(44, 21, 2, 'معارض الصور', '2018-03-31 14:37:45', '2018-03-31 14:37:45', NULL),
(45, 22, 1, 'Geolocation', '2018-04-11 15:51:11', '2018-04-11 15:51:11', NULL),
(46, 22, 2, 'الموقع الجغرافي', '2018-04-11 15:51:11', '2018-04-11 15:51:11', NULL),
(47, 23, 1, 'Image', '2018-05-20 12:15:56', '2018-05-20 12:15:56', NULL),
(48, 23, 2, 'صورة', '2018-05-20 12:15:56', '2018-05-20 12:15:56', NULL),
(49, 24, 1, 'Course', '2018-05-20 12:25:51', '2018-05-20 12:25:51', NULL),
(50, 24, 2, 'مقرر', '2018-05-20 12:25:51', '2018-05-20 12:25:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-09-10 12:06:03', '2017-09-10 12:06:03', NULL),
(2, '2017-09-10 12:06:47', '2017-09-10 12:06:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block_details`
--

CREATE TABLE `block_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `block_id` int(10) UNSIGNED NOT NULL,
  `icon_id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `front_image_id` int(10) UNSIGNED DEFAULT NULL,
  `back_image_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_details`
--

INSERT INTO `block_details` (`id`, `block_id`, `icon_id`, `page_id`, `front_image_id`, `back_image_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 1, 2, '2017-09-10 12:58:35', '2018-10-26 06:31:55', NULL),
(2, 1, 2, 1, NULL, NULL, '2017-09-10 12:59:38', '2017-09-10 12:59:38', NULL),
(3, 1, 3, 2, NULL, NULL, '2017-09-10 13:00:19', '2017-09-10 13:00:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block_detail_btn_langs`
--

CREATE TABLE `block_detail_btn_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `block_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_detail_btn_langs`
--

INSERT INTO `block_detail_btn_langs` (`id`, `block_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Read More', '2017-09-10 12:58:35', '2017-09-10 12:58:35', NULL),
(2, 1, 2, 'Read More', '2017-09-10 12:58:35', '2017-09-10 12:58:35', NULL),
(3, 2, 1, 'Read More', '2017-09-10 12:59:38', '2017-09-10 12:59:38', NULL),
(4, 2, 2, 'Read more', '2017-09-10 12:59:38', '2017-09-10 12:59:38', NULL),
(5, 3, 1, 'Read More', '2017-09-10 13:00:19', '2017-09-10 13:00:19', NULL),
(6, 3, 2, 'Read More', '2017-09-10 13:00:19', '2017-09-10 13:00:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block_detail_text_langs`
--

CREATE TABLE `block_detail_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `block_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_detail_text_langs`
--

INSERT INTO `block_detail_text_langs` (`id`, `block_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.', '2017-09-10 12:58:35', '2017-09-10 12:58:35', NULL),
(2, 1, 2, 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.', '2017-09-10 12:58:35', '2017-09-10 12:58:35', NULL),
(3, 2, 1, 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius', '2017-09-10 12:59:38', '2017-09-10 12:59:38', NULL),
(4, 2, 2, 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius', '2017-09-10 12:59:38', '2017-09-10 12:59:38', NULL),
(5, 3, 1, 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.', '2017-09-10 13:00:19', '2017-09-10 13:00:19', NULL),
(6, 3, 2, 'Sed gravida, ligula eget aliquam elementum, justo nisl mattis neque, in molestie ipsum dolor eu justo. Duis nec aliquam nulla. Sed interdum orci non mi porttitor, a dapibus ante varius.', '2017-09-10 13:00:19', '2017-09-10 13:00:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block_detail_title_langs`
--

CREATE TABLE `block_detail_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `block_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_detail_title_langs`
--

INSERT INTO `block_detail_title_langs` (`id`, `block_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Experience Teachers', '2017-09-10 12:58:35', '2017-09-10 12:58:35', NULL),
(2, 1, 2, 'Experience Teachers', '2017-09-10 12:58:35', '2017-09-10 12:58:35', NULL),
(3, 2, 1, 'Certification Courses', '2017-09-10 12:59:38', '2017-09-10 12:59:38', NULL),
(4, 2, 2, 'Certification Courses', '2017-09-10 12:59:38', '2017-09-10 12:59:38', NULL),
(5, 3, 1, 'Online Learning', '2017-09-10 13:00:19', '2017-09-10 13:00:19', NULL),
(6, 3, 2, 'Online Learning', '2017-09-10 13:00:19', '2017-09-10 13:00:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block_name_langs`
--

CREATE TABLE `block_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `block_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_name_langs`
--

INSERT INTO `block_name_langs` (`id`, `block_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Home Block', '2017-09-10 12:06:03', '2017-09-10 12:06:03', NULL),
(2, 1, 2, 'كتل الصفحة الرئيسية', '2017-09-10 12:06:03', '2017-09-10 12:06:03', NULL),
(3, 2, 1, 'University Block', '2017-09-10 12:06:47', '2017-09-10 12:06:47', NULL),
(4, 2, 2, 'كتل الجامعة', '2017-09-10 12:06:47', '2017-09-10 12:06:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `builder_pages`
--

CREATE TABLE `builder_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `custom_module_id` int(11) NOT NULL,
  `position` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL,
  `buildable_id` int(10) UNSIGNED DEFAULT NULL,
  `buildable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `optional_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `builder_pages`
--

INSERT INTO `builder_pages` (`id`, `custom_module_id`, `position`, `order`, `buildable_id`, `buildable_type`, `optional_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'T', 1, 1, 'page', NULL, '2017-10-16 14:26:52', '2017-10-16 14:31:53', '2017-10-16 14:31:53'),
(2, 2, 'T', 3, 1, 'page', NULL, '2017-10-16 14:26:52', '2017-10-16 14:31:53', '2017-10-16 14:31:53'),
(3, 4, 'T', 2, 1, 'page', NULL, '2017-10-16 14:26:52', '2017-10-23 15:03:30', NULL),
(4, 5, 'T', 4, 1, 'page', NULL, '2017-10-16 14:26:52', '2017-10-23 15:03:30', NULL),
(5, 6, 'T', 1, 1, 'page', NULL, '2017-10-16 14:30:16', '2017-10-23 15:03:30', NULL),
(6, 7, 'T', 3, 1, 'page', NULL, '2017-10-16 14:30:16', '2017-10-23 15:03:30', NULL),
(7, 1, 'T', 1, 17, 'page', NULL, '2017-10-16 15:23:29', '2017-10-16 15:23:29', NULL),
(10, 8, 'T', 3, 17, 'page', NULL, '2017-10-16 15:23:29', '2017-10-31 16:00:32', NULL),
(11, 2, 'T', 4, 17, 'page', NULL, '2017-10-16 15:23:29', '2017-10-17 16:24:50', NULL),
(12, 11, 'T', 2, 17, 'page', NULL, '2017-10-17 16:24:50', '2017-10-17 16:24:50', NULL),
(13, 1, 'T', 5, 1, 'page', NULL, '2017-10-23 15:03:30', '2017-10-23 15:03:30', NULL),
(14, 12, 'T', 6, 1, 'page', NULL, '2017-10-23 15:03:30', '2017-10-23 15:03:30', NULL),
(15, 2, 'T', 8, 1, 'page', NULL, '2017-10-23 15:03:30', '2017-10-25 16:30:30', NULL),
(16, 1, 'T', 9, 1, 'page', NULL, '2017-10-25 13:19:40', '2017-10-25 16:30:30', NULL),
(17, 13, 'T', 10, 1, 'page', NULL, '2017-10-25 13:19:40', '2017-10-25 16:30:30', NULL),
(18, 2, 'T', 13, 1, 'page', NULL, '2017-10-25 13:19:40', '2017-10-29 15:46:24', NULL),
(19, 14, 'T', 11, 1, 'page', NULL, '2017-10-25 16:29:45', '2017-10-27 12:15:27', NULL),
(20, 15, 'T', 7, 1, 'page', NULL, '2017-10-27 12:15:26', '2017-10-27 12:15:26', NULL),
(21, 16, 'T', 12, 1, 'page', NULL, '2017-10-29 15:46:23', '2017-10-29 15:46:23', NULL),
(22, 1, 'T', 14, 1, 'page', NULL, '2017-10-29 18:01:50', '2017-10-29 18:01:50', NULL),
(23, 17, 'T', 15, 1, 'page', NULL, '2017-10-29 18:01:50', '2017-10-29 18:01:50', NULL),
(24, 2, 'T', 16, 1, 'page', NULL, '2017-10-29 18:01:50', '2017-10-29 18:01:50', NULL),
(25, 1, 'T', 1, 3, 'page', NULL, '2017-10-31 15:29:09', '2018-01-05 06:11:51', '2018-01-05 06:11:51'),
(26, 18, 'T', 2, 3, 'page', NULL, '2017-10-31 15:29:09', '2017-10-31 15:29:09', NULL),
(27, 2, 'T', 3, 3, 'page', NULL, '2017-10-31 15:29:10', '2018-01-05 06:02:15', '2018-01-05 06:02:15'),
(28, 1, 'T', 1, 5, 'page', NULL, '2017-10-31 18:07:01', '2017-10-31 18:07:01', NULL),
(29, 19, 'T', 2, 5, 'page', NULL, '2017-10-31 18:07:01', '2017-10-31 18:07:01', NULL),
(30, 2, 'T', 3, 5, 'page', NULL, '2017-10-31 18:07:01', '2017-10-31 18:07:01', NULL),
(31, 1, 'T', 4, 5, 'page', NULL, '2017-10-31 18:07:01', '2017-10-31 18:07:01', NULL),
(32, 20, 'T', 5, 5, 'page', NULL, '2017-10-31 18:07:02', '2017-10-31 18:07:02', NULL),
(33, 16, 'T', 6, 5, 'page', NULL, '2017-10-31 18:07:02', '2017-10-31 18:07:02', NULL),
(34, 2, 'T', 7, 5, 'page', NULL, '2017-10-31 18:07:02', '2017-10-31 18:07:02', NULL),
(35, 1, 'T', 1, 6, 'page', NULL, '2017-11-03 03:10:52', '2017-11-03 03:10:52', NULL),
(36, 21, 'T', 2, 6, 'page', NULL, '2017-11-03 03:10:52', '2017-11-03 03:10:52', NULL),
(37, 2, 'T', 3, 6, 'page', NULL, '2017-11-03 03:10:52', '2017-11-03 03:10:52', NULL),
(38, 1, 'T', 4, 6, 'page', NULL, '2017-11-03 03:10:52', '2017-11-03 03:10:52', NULL),
(39, 20, 'T', 5, 6, 'page', NULL, '2017-11-03 03:10:52', '2017-11-03 03:10:52', NULL),
(40, 16, 'T', 6, 6, 'page', NULL, '2017-11-03 03:10:52', '2017-11-03 03:10:52', NULL),
(41, 2, 'T', 7, 6, 'page', NULL, '2017-11-03 03:10:52', '2017-11-03 03:10:52', NULL),
(42, 22, 'T', 1, 7, 'page', NULL, '2017-11-05 17:51:38', '2017-11-05 17:51:38', NULL),
(52, 1, 'T', 1, 13, 'page', NULL, '2017-12-01 16:14:30', '2017-12-01 16:14:30', NULL),
(53, 27, 'T', 2, 13, 'page', NULL, '2017-12-01 16:14:30', '2017-12-01 16:14:30', NULL),
(54, 2, 'T', 3, 13, 'page', NULL, '2017-12-01 16:14:30', '2017-12-01 16:14:30', NULL),
(55, 1, 'T', 1, 11, 'page', NULL, '2017-12-08 16:23:40', '2017-12-08 16:23:40', NULL),
(56, 25, 'T', 2, 11, 'page', NULL, '2017-12-08 16:23:41', '2017-12-08 16:23:41', NULL),
(57, 2, 'T', 3, 11, 'page', NULL, '2017-12-08 16:23:41', '2017-12-08 16:23:41', NULL),
(58, 1, 'T', 1, 12, 'page', NULL, '2017-12-09 15:26:30', '2017-12-09 15:26:30', NULL),
(59, 26, 'T', 2, 12, 'page', NULL, '2017-12-09 15:26:30', '2017-12-09 15:26:30', NULL),
(60, 2, 'T', 3, 12, 'page', NULL, '2017-12-09 15:26:30', '2017-12-09 15:26:30', NULL),
(61, 1, 'T', 1, 15, 'page', NULL, '2017-12-09 15:59:15', '2017-12-09 15:59:15', NULL),
(62, 28, 'T', 2, 15, 'page', NULL, '2017-12-09 15:59:15', '2017-12-09 15:59:15', NULL),
(63, 2, 'T', 3, 15, 'page', NULL, '2017-12-09 15:59:15', '2017-12-09 15:59:15', NULL),
(64, 2, 'T', 3, 3, 'page', NULL, '2018-01-05 06:11:52', '2018-01-05 06:11:52', NULL),
(65, 1, 'T', 1, 3, 'page', NULL, '2018-01-05 06:12:45', '2018-01-05 06:12:45', NULL),
(66, 1, NULL, 1, 1, 'course', NULL, '2018-01-05 06:23:45', '2018-01-05 06:23:45', NULL),
(67, 34, NULL, 2, 1, 'course', NULL, '2018-01-05 06:23:45', '2018-05-20 12:42:09', NULL),
(68, 2, NULL, 3, 1, 'course', NULL, '2018-01-05 06:23:45', '2018-01-05 06:23:45', NULL),
(77, 1, NULL, 1, 19, 'page', NULL, '2018-04-18 14:28:08', '2018-04-18 14:28:08', NULL),
(78, 31, NULL, 2, 19, 'page', NULL, '2018-04-18 14:28:08', '2018-04-18 14:28:08', NULL),
(79, 2, NULL, 3, 19, 'page', NULL, '2018-04-18 14:28:08', '2018-04-18 14:28:08', NULL),
(80, 1, NULL, 1, 25, 'page', NULL, '2018-04-18 14:43:34', '2018-04-18 14:43:34', NULL),
(81, 32, NULL, 2, 25, 'page', NULL, '2018-04-18 14:43:34', '2018-04-18 14:43:34', NULL),
(82, 2, NULL, 3, 25, 'page', NULL, '2018-04-18 14:43:34', '2018-04-18 14:43:34', NULL),
(83, 3, NULL, 17, 1, 'page', NULL, '2018-05-18 02:30:32', '2018-05-23 16:57:20', '2018-05-23 16:57:20'),
(84, 33, NULL, 18, 1, 'page', NULL, '2018-05-18 02:30:33', '2018-05-18 02:30:33', NULL),
(85, 2, NULL, 19, 1, 'page', NULL, '2018-05-18 02:30:33', '2018-05-23 16:57:21', '2018-05-23 16:57:21'),
(86, 1, NULL, 1, 1, 'person', NULL, '2018-05-21 12:51:13', '2018-05-21 12:51:13', NULL),
(87, 23, NULL, 2, 1, 'person', NULL, '2018-05-21 12:51:13', '2018-05-21 12:51:13', NULL),
(88, 2, NULL, 3, 1, 'person', NULL, '2018-05-21 12:51:13', '2018-05-21 12:51:13', NULL),
(89, 3, NULL, 17, 1, 'page', NULL, '2018-05-23 17:02:11', '2018-05-23 17:02:11', NULL),
(90, 2, NULL, 19, 1, 'page', NULL, '2018-05-23 17:02:11', '2018-05-23 17:02:11', NULL),
(91, 1, NULL, 1, 16, 'page', 6, '2018-05-26 12:09:26', '2018-05-26 12:09:26', NULL),
(92, 35, NULL, 2, 16, 'page', 6, '2018-05-26 12:09:26', '2018-05-26 12:09:26', NULL),
(93, 2, NULL, 3, 16, 'page', 6, '2018-05-26 12:09:26', '2018-05-26 12:09:26', NULL),
(94, 1, NULL, 1, 1, 'lab', NULL, '2018-05-26 13:39:10', '2018-05-26 13:39:10', NULL),
(95, 36, NULL, 2, 1, 'lab', NULL, '2018-05-26 13:39:10', '2018-05-26 13:39:10', NULL),
(96, 2, NULL, 3, 1, 'lab', NULL, '2018-05-26 13:39:10', '2018-05-26 13:39:10', NULL),
(97, 1, NULL, 1, 10, 'page', NULL, '2018-05-27 12:54:43', '2018-05-27 12:54:43', NULL),
(98, 37, NULL, 2, 10, 'page', NULL, '2018-05-27 12:54:43', '2018-05-27 12:54:43', NULL),
(99, 2, NULL, 3, 10, 'page', NULL, '2018-05-27 12:54:43', '2018-05-27 12:54:43', NULL),
(100, 1, NULL, 1, 18, 'page', NULL, '2018-05-29 13:21:24', '2018-05-29 13:21:24', NULL),
(101, 38, NULL, 2, 18, 'page', NULL, '2018-05-29 13:21:24', '2018-05-29 13:21:24', NULL),
(102, 2, NULL, 3, 18, 'page', NULL, '2018-05-29 13:21:25', '2018-05-29 13:21:25', NULL),
(103, 1, NULL, 1, 1, 'news', NULL, '2018-06-01 03:56:25', '2018-06-01 03:56:25', NULL),
(104, 39, NULL, 2, 1, 'news', NULL, '2018-06-01 03:56:25', '2018-06-01 03:56:25', NULL),
(105, 2, NULL, 3, 1, 'news', NULL, '2018-06-01 03:56:25', '2018-06-01 03:56:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `campuses`
--

CREATE TABLE `campuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campus_name_langs`
--

CREATE TABLE `campus_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `campus_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gelocation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_address_langs`
--

CREATE TABLE `contact_address_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_social_network`
--

CREATE TABLE `contact_social_network` (
  `contact_id` int(10) UNSIGNED NOT NULL,
  `social_network_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `control_menus`
--

CREATE TABLE `control_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `control_page_id` int(10) UNSIGNED NOT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `url_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `control_menus`
--

INSERT INTO `control_menus` (`id`, `control_page_id`, `_lft`, `_rgt`, `parent_id`, `url_path`, `order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(40, 75, 1, 110, NULL, 'admin', 1, '2017-11-10 15:44:56', '2017-11-10 18:28:24', NULL),
(41, 76, 3, 4, 43, 'utilities/langs', 1, '2017-11-10 15:45:16', '2017-11-10 15:46:01', NULL),
(42, 77, 5, 6, 43, 'utilities/icons', 2, '2017-11-10 15:45:35', '2017-11-10 15:46:01', NULL),
(43, 78, 2, 17, 40, NULL, 1, '2017-11-10 15:45:52', '2018-10-16 14:59:50', NULL),
(44, 79, 107, 108, 89, 'utilities/users', 11, '2017-11-10 15:46:29', '2018-10-16 14:59:51', NULL),
(45, 80, 7, 8, 43, 'utilities/attributes', 4, '2017-11-10 15:47:31', '2017-11-10 15:47:31', NULL),
(46, 81, 9, 10, 43, 'utilities/modules', 5, '2017-11-10 15:47:50', '2017-11-10 15:47:50', NULL),
(47, 82, 11, 12, 43, 'utilities/pages', 6, '2017-11-10 15:48:07', '2017-11-10 15:48:07', NULL),
(48, 83, 19, 20, 49, 'utilities/list/menu', 3, '2017-11-10 15:48:38', '2018-10-16 14:38:42', NULL),
(49, 84, 18, 25, 40, NULL, 2, '2017-11-10 15:48:54', '2018-10-16 14:59:50', NULL),
(50, 85, 21, 22, 49, 'utilities/control/menu/control-menu', 3, '2017-11-10 15:49:39', '2018-10-16 14:39:24', NULL),
(51, 86, 23, 24, 49, 'utilities/menu-tables', 3, '2017-11-10 15:50:07', '2018-10-16 14:38:21', '2018-10-16 14:38:21'),
(52, 87, 26, 45, 40, NULL, 4, '2017-11-10 15:50:41', '2018-10-16 14:59:51', NULL),
(53, 88, 27, 32, 52, 'admin/faculties', 1, '2017-11-10 15:50:59', '2017-11-10 15:50:59', NULL),
(54, 89, 33, 34, 52, 'admin/departments', 2, '2017-11-10 15:51:12', '2017-11-10 15:51:12', NULL),
(55, 90, 35, 36, 52, 'admin/degrees', 3, '2017-11-10 15:51:27', '2017-11-10 15:51:27', NULL),
(56, 91, 37, 38, 52, 'admin/study-plan', 4, '2017-11-10 15:51:44', '2017-11-10 15:51:44', NULL),
(57, 92, 39, 40, 52, 'admin/hierarchy/menu', 5, '2017-11-10 15:52:12', '2017-11-10 15:52:12', NULL),
(58, 93, 41, 42, 52, 'admin/offices', 6, '2017-11-10 15:52:29', '2017-11-10 15:52:29', NULL),
(59, 94, 43, 44, 52, 'admin/partners', 7, '2017-11-10 15:52:45', '2017-11-10 15:52:45', NULL),
(60, 95, 46, 53, 40, NULL, 5, '2017-11-10 15:53:08', '2018-10-16 14:59:51', NULL),
(61, 96, 47, 48, 60, 'admin/university-council', 1, '2017-11-10 15:53:33', '2017-11-10 15:53:33', NULL),
(62, 97, 49, 50, 60, 'admin/board-of-trustees', 2, '2017-11-10 15:54:14', '2017-11-10 15:54:14', NULL),
(63, 98, 51, 52, 60, 'admin/staff', 3, '2017-11-10 15:54:29', '2017-11-10 15:54:29', NULL),
(64, 99, 54, 59, 40, NULL, 9, '2017-11-10 15:54:45', '2018-10-16 15:06:40', NULL),
(65, 100, 60, 77, 40, NULL, 8, '2017-11-10 16:32:23', '2018-10-16 14:59:51', NULL),
(66, 101, 61, 62, 65, 'utilities/general-setting', 1, '2017-11-10 16:32:56', '2017-11-10 16:32:56', NULL),
(67, 102, 63, 64, 65, 'utilities/social-network', 2, '2017-11-10 16:33:18', '2017-11-10 16:33:18', NULL),
(68, 103, 65, 66, 65, 'utilities/gender', 3, '2017-11-10 16:33:39', '2017-11-10 16:33:39', NULL),
(69, 104, 67, 68, 65, 'utilities/position', 4, '2017-11-10 16:33:58', '2017-11-10 16:33:58', NULL),
(70, 105, 69, 70, 65, 'utilities/job-title', 5, '2017-11-10 16:34:22', '2017-11-10 16:34:22', NULL),
(71, 106, 71, 72, 65, 'admin/study-year', 6, '2017-11-10 16:36:18', '2017-11-10 16:36:18', NULL),
(72, 107, 73, 74, 65, 'admin/semester', 7, '2017-11-10 16:36:43', '2017-11-10 16:36:43', NULL),
(73, 108, 75, 76, 65, 'admin/hierarchy-type', 8, '2017-11-10 16:37:06', '2017-11-10 16:37:06', NULL),
(74, 109, 28, 29, 53, 'admin/{id}/courses', 1, '2017-11-10 17:34:43', '2017-11-10 17:35:08', NULL),
(75, 110, 30, 31, 53, 'admin/{id}/labs', 2, '2017-11-10 17:36:03', '2017-11-10 18:04:34', NULL),
(76, 111, 78, 101, 40, NULL, 3, '2017-11-10 18:13:18', '2018-10-16 14:59:50', NULL),
(77, 112, 79, 82, 76, 'utilities/builder/sliders', 8, '2017-11-10 18:13:56', '2018-10-16 14:52:37', NULL),
(78, 113, 80, 81, 77, 'utilities/builder/sliders/{slider->id}', 1, '2017-11-10 18:20:51', '2017-11-10 19:45:26', NULL),
(79, 114, 83, 86, 76, 'utilities/builder/vertical-sliders', 3, '2017-11-10 18:22:51', '2017-11-10 18:22:51', NULL),
(80, 115, 84, 85, 79, 'utilities/builder/vertical-sliders/{verticalSlider->id}', 1, '2017-11-10 18:23:50', '2017-11-10 19:45:37', NULL),
(81, 116, 87, 90, 76, 'utilities/builder/blocks', 3, '2017-11-10 18:24:29', '2017-11-10 18:24:29', NULL),
(82, 117, 88, 89, 81, 'utilities/builder/blocks/{block->id}', 1, '2017-11-10 18:25:01', '2017-11-10 19:45:32', NULL),
(83, 118, 91, 92, 76, 'utilities/builder/steps', 4, '2017-11-10 18:25:20', '2017-11-10 18:25:20', NULL),
(84, 119, 93, 94, 76, 'utilities/builder/text-cards', 5, '2017-11-10 18:25:42', '2017-11-10 18:25:42', NULL),
(85, 120, 95, 96, 76, 'utilities/custom-modules', 6, '2017-11-10 18:26:48', '2017-11-10 18:26:48', NULL),
(86, 121, 97, 98, 76, 'utilities/builder/pages', 7, '2017-11-10 18:27:07', '2017-11-10 18:27:07', NULL),
(87, 122, 13, 14, 43, 'utilities/schema-tables', 8, '2018-10-16 14:43:45', '2018-10-16 14:44:10', NULL),
(88, 123, 15, 16, 43, 'utilities/tables', 8, '2018-10-16 14:46:03', '2018-10-16 14:46:03', NULL),
(89, 124, 102, 109, 40, NULL, 7, '2018-10-16 14:47:31', '2018-10-16 14:59:51', NULL),
(90, 125, 103, 104, 89, 'utilities/permissions', 9, '2018-10-16 14:48:16', '2018-10-16 14:59:51', NULL),
(91, 126, 105, 106, 89, 'utilities/roles', 10, '2018-10-16 14:49:38', '2018-10-16 14:59:51', NULL),
(92, 127, 99, 100, 76, 'utilities/builder/galleries', 8, '2018-10-16 14:57:14', '2018-10-16 14:57:14', NULL),
(93, 128, 57, 58, 64, 'admin/status', 2, '2018-10-16 15:00:43', '2018-10-16 15:04:20', NULL),
(94, 129, 55, 56, 64, 'admin/news', 1, '2018-10-16 15:01:12', '2018-10-16 15:03:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `control_pages`
--

CREATE TABLE `control_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `control_page_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `control_pages`
--

INSERT INTO `control_pages` (`id`, `control_page_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'home', '2017-07-21 19:26:26', '2017-07-22 06:14:30', NULL),
(9, 'global', '2017-07-22 04:01:21', '2017-07-22 04:01:21', NULL),
(10, 'langs', '2017-07-22 04:53:18', '2017-07-22 04:53:18', NULL),
(11, 'users', '2017-07-22 04:54:54', '2017-07-22 04:54:54', NULL),
(12, 'attributes', '2017-07-22 04:55:51', '2017-07-22 04:55:51', NULL),
(13, 'modules', '2017-07-22 04:56:17', '2017-07-22 04:56:17', NULL),
(14, 'custom_modules', '2017-07-22 04:57:51', '2017-07-22 04:57:51', NULL),
(15, 'menus', '2017-07-22 04:58:31', '2017-07-22 04:58:31', NULL),
(16, 'general', '2017-07-22 04:59:01', '2017-08-08 21:11:20', NULL),
(17, 'control', '2017-07-22 04:59:44', '2017-07-22 04:59:44', NULL),
(18, 'university', '2017-07-22 05:00:35', '2017-07-26 17:06:08', NULL),
(19, 'faculties', '2017-07-22 05:01:48', '2017-07-22 05:01:48', NULL),
(20, 'departments', '2017-07-22 05:27:04', '2017-07-26 17:11:30', NULL),
(21, 'degrees', '2017-07-22 05:27:28', '2017-07-22 05:27:28', NULL),
(22, 'labs', '2017-07-22 05:30:26', '2017-07-26 17:11:17', NULL),
(23, 'courses', '2017-07-22 05:30:54', '2017-07-22 05:30:54', NULL),
(24, 'person', '2017-07-22 05:33:33', '2017-07-26 17:09:12', NULL),
(25, 'university_council', '2017-07-22 05:34:39', '2017-07-22 05:34:39', NULL),
(26, 'board_of_trustees', '2017-07-22 05:35:20', '2017-07-22 05:35:20', NULL),
(27, 'blog', '2017-07-22 05:37:21', '2017-07-22 05:37:21', NULL),
(28, 'setting', '2017-07-22 05:48:38', '2017-07-22 05:48:38', NULL),
(29, 'general_setting', '2017-07-22 05:51:01', '2017-07-22 05:51:01', NULL),
(30, 'social_network', '2017-07-22 05:52:18', '2017-07-22 05:52:18', NULL),
(31, 'gender', '2017-07-22 05:54:53', '2017-07-31 17:59:12', NULL),
(32, 'study_year', '2017-07-22 06:01:25', '2017-07-22 06:01:25', NULL),
(33, 'semester', '2017-07-22 06:06:34', '2017-07-26 16:38:36', NULL),
(34, 'position', '2017-07-31 17:58:01', '2017-07-31 17:58:01', NULL),
(35, 'job-title', '2017-07-31 17:58:52', '2017-07-31 17:58:52', NULL),
(75, 'home', '2017-11-10 15:44:56', '2017-11-10 15:44:56', NULL),
(76, 'langs', '2017-11-10 15:45:15', '2017-11-10 15:45:15', NULL),
(77, 'icons', '2017-11-10 15:45:35', '2017-11-10 15:45:35', NULL),
(78, 'global', '2017-11-10 15:45:52', '2017-11-10 15:45:52', NULL),
(79, 'users', '2017-11-10 15:46:29', '2017-11-10 15:46:29', NULL),
(80, 'attributes', '2017-11-10 15:47:30', '2017-11-10 15:47:30', NULL),
(81, 'modules', '2017-11-10 15:47:50', '2017-11-10 15:47:50', NULL),
(82, 'pages', '2017-11-10 15:48:07', '2017-11-10 15:48:07', NULL),
(83, 'list', '2017-11-10 15:48:38', '2018-10-16 14:38:42', NULL),
(84, 'menus', '2017-11-10 15:48:54', '2017-11-10 15:48:54', NULL),
(85, 'control', '2017-11-10 15:49:39', '2017-11-10 15:49:39', NULL),
(86, 'menu_tables', '2017-11-10 15:50:06', '2018-10-16 14:38:21', '2018-10-16 14:38:21'),
(87, 'university', '2017-11-10 15:50:41', '2017-11-10 15:50:41', NULL),
(88, 'faculties', '2017-11-10 15:50:58', '2017-11-10 15:50:58', NULL),
(89, 'departments', '2017-11-10 15:51:12', '2017-11-10 15:51:12', NULL),
(90, 'degrees', '2017-11-10 15:51:26', '2017-11-10 15:51:26', NULL),
(91, 'study_plan', '2017-11-10 15:51:44', '2017-11-10 15:51:44', NULL),
(92, 'hierarchy', '2017-11-10 15:52:11', '2017-11-10 15:52:11', NULL),
(93, 'offices', '2017-11-10 15:52:29', '2017-11-10 15:52:29', NULL),
(94, 'partners', '2017-11-10 15:52:44', '2017-11-10 15:52:44', NULL),
(95, 'person', '2017-11-10 15:53:08', '2017-11-10 15:53:08', NULL),
(96, 'university_council', '2017-11-10 15:53:33', '2017-11-10 15:53:33', NULL),
(97, 'board_of_trustees', '2017-11-10 15:54:14', '2017-11-10 15:54:14', NULL),
(98, 'staff', '2017-11-10 15:54:29', '2017-11-10 15:54:29', NULL),
(99, 'blogs', '2017-11-10 15:54:44', '2018-10-16 15:06:40', NULL),
(100, 'setting', '2017-11-10 16:32:23', '2017-11-10 16:32:23', NULL),
(101, 'general_setting', '2017-11-10 16:32:55', '2017-11-10 16:32:55', NULL),
(102, 'social_network', '2017-11-10 16:33:18', '2017-11-10 16:33:18', NULL),
(103, 'gender', '2017-11-10 16:33:39', '2017-11-10 16:33:39', NULL),
(104, 'position', '2017-11-10 16:33:58', '2017-11-10 16:33:58', NULL),
(105, 'job_title', '2017-11-10 16:34:22', '2017-11-10 16:34:22', NULL),
(106, 'study_year', '2017-11-10 16:36:18', '2017-11-10 16:36:18', NULL),
(107, 'semester', '2017-11-10 16:36:42', '2017-11-10 16:36:42', NULL),
(108, 'hierarchy_type', '2017-11-10 16:37:05', '2017-11-10 16:37:05', NULL),
(109, 'courses', '2017-11-10 17:34:42', '2017-11-10 17:34:42', NULL),
(110, 'labs', '2017-11-10 17:36:03', '2017-11-10 17:36:03', NULL),
(111, 'builder', '2017-11-10 18:13:18', '2017-11-10 18:13:18', NULL),
(112, 'sliders', '2017-11-10 18:13:56', '2017-11-10 18:13:56', NULL),
(113, 'slider_detail', '2017-11-10 18:20:51', '2017-11-10 18:20:51', NULL),
(114, 'vertical_sliders', '2017-11-10 18:22:50', '2017-11-10 18:22:50', NULL),
(115, 'vertical_slider_detail', '2017-11-10 18:23:50', '2017-11-10 18:25:59', NULL),
(116, 'blocks', '2017-11-10 18:24:29', '2017-11-10 18:24:29', NULL),
(117, 'block_detail', '2017-11-10 18:25:01', '2017-11-10 18:25:50', NULL),
(118, 'steps', '2017-11-10 18:25:20', '2017-11-10 18:25:20', NULL),
(119, 'text_cards', '2017-11-10 18:25:42', '2017-11-10 18:25:42', NULL),
(120, 'custom_modules', '2017-11-10 18:26:48', '2017-11-10 18:26:48', NULL),
(121, 'pages', '2017-11-10 18:27:07', '2017-11-10 18:27:07', NULL),
(122, 'schema_tables', '2018-10-16 14:43:45', '2018-10-16 14:45:30', NULL),
(123, 'tables', '2018-10-16 14:46:03', '2018-10-16 14:46:03', NULL),
(124, 'auth', '2018-10-16 14:47:31', '2018-10-16 14:48:56', NULL),
(125, 'permissions', '2018-10-16 14:48:16', '2018-10-16 14:48:16', NULL),
(126, 'roles', '2018-10-16 14:49:38', '2018-10-16 14:49:38', NULL),
(127, 'galleries', '2018-10-16 14:57:13', '2018-10-16 14:57:13', NULL),
(128, 'status', '2018-10-16 15:00:43', '2018-10-16 15:00:43', NULL),
(129, 'news', '2018-10-16 15:01:12', '2018-10-16 15:01:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `degree_id` int(10) UNSIGNED DEFAULT NULL,
  `semester_id` int(10) UNSIGNED DEFAULT NULL,
  `faculty_study_year_id` int(10) UNSIGNED DEFAULT NULL,
  `image_265_id` int(10) UNSIGNED DEFAULT NULL,
  `image_750_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `credit`, `faculty_id`, `department_id`, `degree_id`, `semester_id`, `faculty_study_year_id`, `image_265_id`, `image_750_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'C#', 10, 6, 2, 3, NULL, NULL, NULL, NULL, '2017-11-28 18:09:07', '2017-11-28 18:09:07', NULL),
(2, 'O320', 20, 6, 2, 3, NULL, NULL, NULL, NULL, '2017-11-28 18:10:06', '2017-11-28 18:10:06', NULL),
(3, 'ORC220', 30, 6, 2, 3, NULL, NULL, NULL, NULL, '2017-11-28 18:10:42', '2017-11-28 18:10:42', NULL),
(4, 'L110', 10, 6, 2, 3, NULL, NULL, NULL, NULL, '2017-11-28 18:11:15', '2017-11-28 18:11:15', NULL),
(5, 'H100', 30, 6, 2, 3, NULL, NULL, NULL, NULL, '2017-11-28 18:12:04', '2017-11-28 18:12:04', NULL),
(6, 'J220', 10, 6, 2, 3, NULL, NULL, NULL, NULL, '2017-11-28 18:12:40', '2017-11-28 18:12:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_content_langs`
--

CREATE TABLE `course_content_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED DEFAULT NULL,
  `lang_id` int(10) UNSIGNED DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_description_langs`
--

CREATE TABLE `course_description_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_description_langs`
--

INSERT INTO `course_description_langs` (`id`, `lang_id`, `course_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'C#', '2017-11-28 18:09:07', '2017-11-28 18:09:07', NULL),
(2, 2, 1, 'C#', '2017-11-28 18:09:07', '2017-11-28 18:09:07', NULL),
(3, 1, 2, '-', '2017-11-28 18:10:06', '2017-11-28 18:10:06', NULL),
(4, 2, 2, '-', '2017-11-28 18:10:06', '2017-11-28 18:10:06', NULL),
(5, 1, 3, '-', '2017-11-28 18:10:42', '2017-11-28 18:10:42', NULL),
(6, 2, 3, '-', '2017-11-28 18:10:42', '2017-11-28 18:10:42', NULL),
(7, 1, 4, '-', '2017-11-28 18:11:16', '2017-11-28 18:11:16', NULL),
(8, 2, 4, '-', '2017-11-28 18:11:16', '2017-11-28 18:11:16', NULL),
(9, 1, 5, '-', '2017-11-28 18:12:04', '2017-11-28 18:12:04', NULL),
(10, 2, 5, '-', '2017-11-28 18:12:04', '2017-11-28 18:12:04', NULL),
(11, 1, 6, '-', '2017-11-28 18:12:40', '2017-11-28 18:12:40', NULL),
(12, 2, 6, '-', '2017-11-28 18:12:40', '2017-11-28 18:12:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_name_langs`
--

CREATE TABLE `course_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_name_langs`
--

INSERT INTO `course_name_langs` (`id`, `course_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'C#', '2017-11-28 18:09:07', '2017-11-28 18:09:07', NULL),
(2, 1, 2, 'C#', '2017-11-28 18:09:07', '2017-11-28 18:09:07', NULL),
(3, 2, 1, 'Oracle', '2017-11-28 18:10:06', '2017-11-28 18:10:06', NULL),
(4, 2, 2, 'اوراكل', '2017-11-28 18:10:06', '2017-11-28 18:10:06', NULL),
(5, 3, 1, 'Oracle2', '2017-11-28 18:10:42', '2017-11-28 18:10:42', NULL),
(6, 3, 2, 'Oracle2', '2017-11-28 18:10:42', '2017-11-28 18:10:42', NULL),
(7, 4, 1, 'Laravel', '2017-11-28 18:11:16', '2017-11-28 18:11:16', NULL),
(8, 4, 2, 'لارافل', '2017-11-28 18:11:16', '2017-11-28 18:11:16', NULL),
(9, 5, 1, 'Html', '2017-11-28 18:12:04', '2017-11-28 18:12:04', NULL),
(10, 5, 2, 'Html', '2017-11-28 18:12:04', '2017-11-28 18:12:04', NULL),
(11, 6, 1, 'Javascript', '2017-11-28 18:12:40', '2017-11-28 18:12:40', NULL),
(12, 6, 2, 'جافا سكريبت', '2017-11-28 18:12:40', '2017-11-28 18:12:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_modules`
--

CREATE TABLE `custom_modules` (
  `id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_modules`
--

INSERT INTO `custom_modules` (`id`, `module_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, '2017-10-16 14:12:49', '2017-10-16 14:12:49', NULL),
(2, 4, '2017-10-16 14:13:56', '2017-10-16 14:13:56', NULL),
(3, 11, '2017-10-16 14:15:19', '2017-10-16 14:15:19', NULL),
(4, 14, '2017-10-16 14:16:10', '2017-10-16 14:16:10', NULL),
(5, 15, '2017-10-16 14:17:12', '2017-10-16 14:17:12', NULL),
(6, 5, '2017-10-16 14:28:29', '2017-10-16 14:28:29', NULL),
(7, 6, '2017-10-16 14:29:16', '2017-10-16 14:29:16', NULL),
(8, 17, '2017-10-16 15:11:04', '2017-10-16 15:11:04', NULL),
(11, 16, '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL),
(12, 2, '2017-10-23 15:01:01', '2017-10-23 15:01:01', NULL),
(13, 7, '2017-10-25 13:18:21', '2017-10-25 13:18:21', NULL),
(14, 9, '2017-10-25 16:27:29', '2017-10-25 16:27:29', NULL),
(15, 12, '2017-10-27 05:20:04', '2017-10-27 05:20:04', NULL),
(16, 13, '2017-10-29 04:07:30', '2017-10-29 04:07:30', NULL),
(17, 8, '2017-10-29 18:00:27', '2017-10-29 18:00:27', NULL),
(18, 1, '2017-10-31 15:27:46', '2017-10-31 15:27:46', NULL),
(19, 22, '2017-10-31 17:56:17', '2017-10-31 17:56:17', NULL),
(20, 18, '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(21, 23, '2017-11-03 03:07:56', '2017-11-03 03:07:56', NULL),
(22, 24, '2017-11-05 17:49:54', '2017-11-05 17:49:54', NULL),
(23, 19, '2017-11-15 17:04:08', '2017-11-15 17:04:08', NULL),
(24, 25, '2017-11-17 16:46:36', '2017-11-17 17:03:04', '2017-11-17 17:03:04'),
(25, 25, '2017-11-17 16:52:25', '2017-11-17 16:52:25', NULL),
(26, 26, '2017-11-22 16:53:28', '2017-11-22 16:53:28', NULL),
(27, 27, '2017-12-01 15:52:01', '2017-12-01 15:52:01', NULL),
(28, 28, '2017-12-09 15:46:12', '2017-12-09 15:46:12', NULL),
(31, 30, '2018-04-18 14:26:36', '2018-04-18 14:26:36', NULL),
(32, 31, '2018-04-18 14:32:32', '2018-04-18 14:32:32', NULL),
(33, 32, '2018-05-18 02:26:30', '2018-05-18 02:26:30', NULL),
(34, 33, '2018-05-20 12:38:52', '2018-05-20 12:38:52', NULL),
(35, 34, '2018-05-26 12:07:54', '2018-05-26 12:07:54', NULL),
(36, 35, '2018-05-26 13:18:47', '2018-05-26 13:18:47', NULL),
(37, 36, '2018-05-27 12:38:30', '2018-05-27 12:38:30', NULL),
(38, 37, '2018-05-29 13:17:45', '2018-05-29 13:17:45', NULL),
(39, 38, '2018-06-01 03:54:09', '2018-06-01 03:54:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_module_attribute_values`
--

CREATE TABLE `custom_module_attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `custom_module_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_module_attribute_values`
--

INSERT INTO `custom_module_attribute_values` (`id`, `custom_module_id`, `attribute_id`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'E', '2017-10-16 14:13:23', '2017-10-16 14:13:23', NULL),
(2, 2, 1, 'E', '2017-10-16 14:13:57', '2017-10-16 14:13:57', NULL),
(3, 3, 1, 'E', '2017-10-16 14:15:19', '2017-10-16 14:15:19', NULL),
(4, 4, 1, 'E', '2017-10-16 14:16:31', '2017-10-16 14:16:31', NULL),
(5, 5, 1, 'E', '2017-10-16 14:17:13', '2017-10-16 14:17:13', NULL),
(6, 6, 1, 'E', '2017-10-16 14:28:31', '2017-10-16 14:28:31', NULL),
(7, 6, 5, '1', '2017-10-16 14:28:31', '2017-10-16 14:28:31', NULL),
(8, 7, 1, 'E', '2017-10-16 14:29:17', '2017-10-16 14:29:17', NULL),
(9, 7, 6, '1', '2017-10-16 14:29:17', '2017-10-16 14:29:17', NULL),
(10, 8, 1, 'E', '2017-10-16 15:11:04', '2017-10-16 15:11:04', NULL),
(11, 8, 2, '8', '2017-10-16 15:11:04', '2017-10-16 15:11:04', NULL),
(12, 8, 10, '', '2017-10-16 15:11:04', '2017-10-16 15:11:04', NULL),
(13, 8, 4, '', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(24, 11, 1, 'E', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL),
(25, 11, 2, '4', '2017-10-17 16:22:01', '2017-10-31 16:08:16', NULL),
(26, 11, 18, '[\"1\",\"2\",\"3\",\"4\"]', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL),
(27, 11, 8, '1', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL),
(28, 12, 2, '6', '2017-10-23 15:01:01', '2017-10-23 15:01:01', NULL),
(29, 12, 1, 'E', '2017-10-23 15:01:02', '2017-10-23 15:01:02', NULL),
(30, 12, 10, '', '2017-10-23 15:01:02', '2017-10-23 15:01:02', NULL),
(31, 12, 4, '', '2017-10-23 15:01:02', '2017-10-23 15:01:02', NULL),
(32, 12, 16, '2', '2017-10-23 15:01:02', '2017-10-23 15:01:02', NULL),
(33, 13, 1, 'D', '2017-10-25 13:18:22', '2017-10-25 13:26:38', NULL),
(34, 13, 3, '20', '2017-10-25 13:18:22', '2017-10-25 13:18:22', NULL),
(35, 13, 2, '12', '2017-10-25 13:18:22', '2017-10-25 13:18:22', NULL),
(36, 13, 8, '4', '2017-10-25 13:18:22', '2017-10-25 13:18:22', NULL),
(37, 13, 7, '[\"1\",\"2\",\"3\"]', '2017-10-25 13:18:22', '2017-10-25 13:18:22', NULL),
(38, 13, 10, '', '2017-10-25 13:26:39', '2017-10-25 13:26:39', NULL),
(39, 14, 1, 'E', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(40, 14, 12, '1', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(41, 14, 10, '', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(42, 14, 11, '222', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(43, 14, 2, '6', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(44, 14, 8, '2', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(45, 15, 1, 'E', '2017-10-27 05:20:05', '2017-10-27 05:20:05', NULL),
(46, 15, 2, '6', '2017-10-27 05:20:05', '2017-10-27 05:20:05', NULL),
(47, 15, 13, '[\"17\",\"18\",\"19\"]', '2017-10-27 05:20:05', '2017-10-27 12:05:47', NULL),
(48, 16, 1, 'E', '2017-10-29 04:07:31', '2017-10-29 04:07:31', NULL),
(49, 16, 2, '6', '2017-10-29 04:07:31', '2017-10-29 04:07:31', NULL),
(50, 16, 10, '', '2017-10-29 04:07:31', '2017-10-29 04:07:31', NULL),
(51, 16, 4, '', '2017-10-29 04:07:32', '2017-10-29 04:07:32', NULL),
(52, 16, 17, '[\"1\",\"2\"]', '2017-10-29 04:07:32', '2017-10-29 04:07:32', NULL),
(53, 17, 1, 'E', '2017-10-29 18:00:28', '2017-10-29 18:00:28', NULL),
(54, 17, 3, '12', '2017-10-29 18:00:28', '2017-10-29 18:00:28', NULL),
(55, 17, 2, '12', '2017-10-29 18:00:28', '2017-10-30 15:58:07', NULL),
(56, 17, 8, '4', '2017-10-29 18:00:28', '2017-10-29 18:00:28', NULL),
(57, 17, 9, '[\"1\",\"3\",\"4\"]', '2017-10-29 18:00:28', '2017-10-30 15:54:50', NULL),
(58, 17, 10, '', '2017-10-30 15:54:50', '2017-10-30 15:54:50', NULL),
(59, 18, 1, 'E', '2017-10-31 15:27:47', '2017-10-31 15:27:47', NULL),
(60, 18, 2, '12', '2017-10-31 15:27:47', '2017-10-31 15:27:47', NULL),
(61, 18, 4, '', '2017-10-31 15:27:47', '2017-10-31 15:27:47', NULL),
(62, 19, 1, 'E', '2017-10-31 17:56:17', '2017-10-31 17:56:17', NULL),
(63, 19, 2, '12', '2017-10-31 17:56:17', '2017-10-31 17:56:17', NULL),
(64, 20, 1, 'E', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(65, 20, 2, '6', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(66, 20, 18, '[\"1\",\"2\",\"3\",\"4\"]', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(67, 20, 8, '2', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(68, 20, 10, '', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(69, 21, 1, 'E', '2017-11-03 03:07:56', '2017-11-03 03:07:56', NULL),
(70, 21, 2, '12', '2017-11-03 03:07:56', '2017-11-03 03:07:56', NULL),
(71, 22, 1, 'E', '2017-11-05 17:49:54', '2017-11-05 17:49:54', NULL),
(72, 22, 2, '12', '2017-11-05 17:49:54', '2017-11-05 17:49:54', NULL),
(73, 23, 1, 'E', '2017-11-15 17:04:08', '2017-11-15 17:04:08', NULL),
(74, 23, 2, '12', '2017-11-15 17:04:08', '2017-11-15 17:04:08', NULL),
(75, 25, 1, 'E', '2017-11-17 16:52:26', '2017-11-17 16:52:26', NULL),
(76, 25, 2, '9', '2017-11-17 16:52:26', '2017-11-17 16:52:26', NULL),
(77, 26, 1, 'E', '2017-11-22 16:53:28', '2017-11-22 16:53:28', NULL),
(78, 26, 2, '12', '2017-11-22 16:53:28', '2017-11-22 16:53:28', NULL),
(79, 27, 1, 'E', '2017-12-01 15:52:01', '2017-12-01 15:52:01', NULL),
(80, 27, 2, '12', '2017-12-01 15:52:01', '2017-12-01 15:52:01', NULL),
(81, 28, 1, 'E', '2017-12-09 15:46:13', '2017-12-09 15:46:13', NULL),
(82, 28, 2, '12', '2017-12-09 15:46:13', '2017-12-09 15:46:13', NULL),
(90, 31, 1, 'E', '2018-04-18 14:26:36', '2018-04-18 14:26:36', NULL),
(91, 31, 3, '1', '2018-04-18 14:26:36', '2018-04-18 14:26:36', NULL),
(92, 31, 2, '12', '2018-04-18 14:26:36', '2018-04-18 14:26:36', NULL),
(93, 31, 21, '[\"1\",\"2\"]', '2018-04-18 14:26:36', '2018-04-18 14:26:36', NULL),
(94, 32, 1, 'E', '2018-04-18 14:32:32', '2018-04-18 14:32:32', NULL),
(95, 32, 2, '12', '2018-04-18 14:32:32', '2018-04-18 14:32:32', NULL),
(96, 32, 8, '8', '2018-04-18 14:32:32', '2018-04-18 14:32:32', NULL),
(97, 33, 1, 'E', '2018-05-18 02:26:30', '2018-05-18 02:26:30', NULL),
(98, 33, 2, '12', '2018-05-18 02:26:30', '2018-05-18 02:26:30', NULL),
(99, 33, 22, '35.103823,35.997245', '2018-05-18 02:26:30', '2018-05-18 02:26:30', NULL),
(100, 34, 1, 'E', '2018-05-20 12:38:53', '2018-05-20 12:38:53', NULL),
(101, 34, 2, '8', '2018-05-20 12:38:53', '2018-05-21 12:16:10', NULL),
(102, 34, 24, '1', '2018-05-20 12:38:53', '2018-05-20 12:38:53', NULL),
(103, 34, 4, '', '2018-05-20 12:38:53', '2018-05-20 12:38:53', NULL),
(104, 35, 1, 'E', '2018-05-26 12:07:55', '2018-05-26 12:07:55', NULL),
(105, 35, 2, '12', '2018-05-26 12:07:55', '2018-05-26 12:07:55', NULL),
(106, 36, 1, 'E', '2018-05-26 13:18:47', '2018-05-26 13:18:47', NULL),
(107, 36, 2, '12', '2018-05-26 13:18:47', '2018-05-26 13:18:47', NULL),
(108, 37, 1, 'E', '2018-05-27 12:38:30', '2018-05-27 12:38:30', NULL),
(109, 37, 2, '12', '2018-05-27 12:38:30', '2018-05-27 12:38:30', NULL),
(110, 38, 1, 'E', '2018-05-29 13:17:45', '2018-05-29 13:17:45', NULL),
(111, 38, 2, '12', '2018-05-29 13:17:45', '2018-05-29 13:17:45', NULL),
(112, 39, 1, 'E', '2018-06-01 03:54:10', '2018-06-01 03:54:10', NULL),
(113, 39, 2, '9', '2018-06-01 03:54:10', '2018-06-01 03:54:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_module_attribute_value_multi_langs`
--

CREATE TABLE `custom_module_attribute_value_multi_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `custom_module_attribute_value_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_module_attribute_value_multi_langs`
--

INSERT INTO `custom_module_attribute_value_multi_langs` (`id`, `custom_module_attribute_value_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 12, 1, 'Interested in discussing?', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(2, 12, 2, 'Interested in discussing?', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(3, 13, 1, '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</span></p>', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(4, 13, 2, '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</span></p>', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(5, 18, 1, 'OUR OFFICE LOCATION', '2017-10-16 15:17:49', '2017-10-16 15:17:49', NULL),
(6, 18, 2, 'OUR OFFICE LOCATION', '2017-10-16 15:17:49', '2017-10-16 15:17:49', NULL),
(7, 23, 1, 'OUR CONTACT NUMBER', '2017-10-16 15:19:15', '2017-10-16 15:19:15', NULL),
(8, 23, 2, 'OUR CONTACT NUMBER', '2017-10-16 15:19:15', '2017-10-16 15:19:15', NULL),
(9, 30, 1, 'WELCOME TO STUDYPRESS HTML5 TEMPALTE', '2017-10-23 15:01:02', '2017-10-23 15:01:02', NULL),
(10, 30, 2, 'WELCOME TO STUDYPRESS HTML5 TEMPALTE', '2017-10-23 15:01:02', '2017-10-23 15:01:02', NULL),
(11, 31, 1, '<h4 class=\"text-gray-dimgray font-weight-400\" style=\"box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 400 !important; line-height: 1.42857; color: rgb(102, 102, 102); margin-top: 10px; margin-bottom: 10px; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><em style=\"box-sizing: border-box;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</em></h4>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Sit amet consectetur adipisicing elit. Aliquid iste iusto reiciendis praesentium dolorem doloribus nisi architecto voluptatibus explicabo, possimus ullam quae illum maiores aperiam consequuntur.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Sit amet consectetur adipisicing elit. Aliquid iste iusto reiciendis praesentium dolorem doloribus nisi architecto voluptatibus explicabo, possimus ullam quae illum maiores aperiam consequuntur facere similique voluptatum.</p>', '2017-10-23 15:01:02', '2017-10-23 15:01:02', NULL),
(12, 31, 2, '<h4 class=\"text-gray-dimgray font-weight-400\" style=\"box-sizing: border-box; font-family: &quot;Open Sans&quot;, sans-serif; font-weight: 400 !important; line-height: 1.42857; color: rgb(102, 102, 102); margin-top: 10px; margin-bottom: 10px; font-size: 18px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><em style=\"box-sizing: border-box;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</em></h4>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Sit amet consectetur adipisicing elit. Aliquid iste iusto reiciendis praesentium dolorem doloribus nisi architecto voluptatibus explicabo, possimus ullam quae illum maiores aperiam consequuntur.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Sit amet consectetur adipisicing elit. Aliquid iste iusto reiciendis praesentium dolorem doloribus nisi architecto voluptatibus explicabo, possimus ullam quae illum maiores aperiam consequuntur facere similique voluptatum.</p>', '2017-10-23 15:01:02', '2017-10-23 15:01:02', NULL),
(13, 38, 1, 'Our Courses', '2017-10-25 13:26:39', '2017-10-25 13:26:39', NULL),
(14, 38, 2, 'Our Courses', '2017-10-25 13:26:39', '2017-10-25 13:26:39', NULL),
(15, 41, 1, 'CLIENT TESTIMONIALS', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(16, 41, 2, 'CLIENT TESTIMONIALS', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(17, 50, 1, 'Why Choose Us?', '2017-10-29 04:07:31', '2017-10-29 04:07:31', NULL),
(18, 50, 2, 'Why Choose Us?', '2017-10-29 04:07:31', '2017-10-29 04:07:31', NULL),
(19, 51, 1, '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</span></p>', '2017-10-29 04:07:32', '2017-10-29 04:07:32', NULL),
(20, 51, 2, '<p><span style=\"color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">The Cweren Law Firm is a recognized leader in landlord tenant representation throughout Texas.The largest professional property.</span></p>', '2017-10-29 04:07:32', '2017-10-29 04:07:32', NULL),
(21, 58, 1, 'OUR TEACHERS', '2017-10-30 15:54:51', '2017-10-30 15:54:51', NULL),
(22, 58, 2, 'OUR TEACHERS', '2017-10-30 15:54:51', '2017-10-30 15:54:51', NULL),
(23, 61, 1, '<h1 class=\"article-title\" itemprop=\"headline\" style=\"box-sizing: border-box; font-size: 36px; margin: 0px 0px 20px; font-family: DroidKufi-Regular; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><a href=\"http://au.edu.sy/en/university/univ-message\" itemprop=\"url\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(66, 139, 202); text-decoration: none !important; font-family: DroidKufi-Regular !important;\" title=\"About Al Andalus University\">About Al Andalus University</a></h1>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">University message</strong></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">The university aims at taking care of students scientifically, practically and educationally, and striving to achieve this in high quality and in accordance with international standards. It also insists on providing continuous training for the educational, technical and service staff at the university in addition to working to achieve an advanced position in the field of original and purposeful scientific research, which can be achieved only through the presence of: researchers - facilities and tools of research - funding - advanced information system , etc. This has been recognized by the University, and a clear scientific method has been devised for this purpose in order to provide educational and medical services with the highest quality over the generations.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">University Goals</strong></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">1- Raising scientific and educational level in line with the modern scientific development.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">2- Exchanging experiences and information, and attracting migrant brains and encouraging them to return home.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">3- Securing high-level local educational opportunities that allow students to pursue their specialization in international universities.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">4- Cooperating with international educational institutions, and securing the faculty with outstanding scientific competence.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">5- Encouraging scientific research, through cooperating with international research centers.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">6- Improving the level of medical services offered to patients in Syria.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">University Colleges:</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">First: Faculty of Dentistry</strong></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; This college was opened in the academic year of (2007-2008). The college grants a bachelor in dentistry after a study period of five years. The College has four clinics with (44) dental chairs for clinical training. Each clinic has a screen and a senor, as well as two panoramic cameras, two topography cameras, and two sterilization rooms. The laboratories of the college are equipped with all educational means of hammers, crutches, industrial devices, gypsum laboratories and compensation for under-clinical training.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; Four classes have been graduated with an excellent scientific level from this college. This is confirmed by the results of the national test, where the success rate in this exam was 72% for the academic year (2014-2015).</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; Scientific Research: Stem Cells and Dentistry.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">Second: Faculty of Pharmacy</strong></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; The Faculty of Pharmacy was inaugurated in 2007-2008. The college grants a degree in pharmacy. The duration of study in this college is five years. The College aims at preparing scientific cadres that contribute to raising the level of health awareness of citizens regarding medicines and the need to use them properly. The college is equipped with the latest laboratory and teaching supplies needed by the student. Four batches of college students were graduated, and the graduates are of a good scientific level. This was confirmed by the results obtained in the national test. The success rate in this exam was 70%.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; Scientific Research: Immuno-drugs and medicinal plants.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">Third: Faculty of Medicine</strong></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; The College was inaugurated in 2011-2012. The college grants a degree in medicine. The duration of study is six years.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; The college has two buildings:</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">- The college building which contains teaching halls, laboratories, offices for the teaching staff, and other service offices.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">- Al-Andalus University Hospital, which contains 133 beds, emergency rooms and 8 surgery rooms, as well as outpatient clinics in various specialties, radiology laboratories, medical analysis, etc.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; Scientific Research: developing the bio-artificial kidney.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">Fourth: Faculty of Medical Engineering</strong></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; The Faculty of Medical Engineering was inaugurated in 2011-2012. The College grants a bachelor in medical engineering after a study period of five years. The college has multiple electronic and electrical laboratories that meet the educational needs of the college. The opening of the college was motivated by the need for medical engineers to work in hospitals and medical institutions for processing, maintenance, development and manufacture, these engineers are the hope for the future.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; The first class will graduate in the current academic year.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; Scientific Research: Development of Proton Tumor Therapy.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">Fifth: Faculty of Nursing</strong></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; The Faculty of Nursing was inaugurated for the academic year (2015-2016). Duration of study is four years. The College aims at graduating nurses that are distinguished on a scientific and practical level, which complements the work of the doctor, and might even represent him/her in many cases. Therefore, the College has been equipped with the best training and study methods to achieve this goal.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; Scientific Research: Mental health and full recovery.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">Sixth: Faculty of Hospital Management</strong></p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; The Faculty of Hospital Management was inaugurated for the academic year (2015-2016). Duration of study in the college is four years.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; The college aims at graduating the scientific administrator who is confident and capable of making the decision and finding scientific solutions to the administrative issues facing his medical institution.</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&bull; Scientific Research: Affiliation and continuous development.</p>\r\n\r\n<p>&nbsp;</p>', '2017-10-31 15:27:47', '2017-10-31 15:27:47', NULL);
INSERT INTO `custom_module_attribute_value_multi_langs` (`id`, `custom_module_attribute_value_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(24, 61, 2, '<h1 class=\"article-title\" itemprop=\"headline\" style=\"direction: rtl; box-sizing: border-box; font-size: 36px; margin: 0px 0px 20px; font-family: DroidKufi-Regular; font-weight: 500; line-height: 1.1; color: rgb(51, 51, 51); font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><a href=\"http://au.edu.sy/university/univ-message\" itemprop=\"url\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(66, 139, 202); text-decoration: none !important; font-family: DroidKufi-Regular !important;\" title=\"عن الجامعة، الرسالة والأهداف\">عن الجامعة، الرسالة والأهداف</a></h1>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">رسالة الجامعة:</strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">الاهتمام بالطلاب علمياً وعملياً وتربوياً و السعي لتحقيق ذلك بجودة عالية بما يتناسب مع المعايير العالمية. وتأمين التدريب المستمر للكادر التعليمي والفني والخدمي في الجامعة, والعمل على بلوغ مركز متقدم في مجال الابحاث العلمية الأصلية والهادفة, وهذا لا يمكن تحقيقه إلا من خلال وجود : باحثين _ اماكن وأدوات بحث &ndash; تمويل &ndash; منظومة معلومات متطورة ..إلخ. وهذا الأمر ادركته الجامعة فرسمت منهجية علمية واضحة من أجل ذلك بغية تعزيز الناحية التعليمية والخدمية الطبية الصحية بأعلى جوده على مر الأجيال.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">أهداف الجامعة:</strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">1- رفع السوية العلمية والتعليمية بما يتماشى مع التطور العلمي الحديث.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">2- تبادل الخبرات والمعلومات واستقطاب العقول المهاجرة وتشجيع عودتها إلى الوطن،.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">3- تأمين فرص تعلمية محلية ذات مستوي عال تسمح للطلاب متابعة الاختصاص في الجامعات العالمية.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">4- التعاون مع مؤسسات تعليمية عالمية. وتأمين الهيئة التدريسية ذات الكفاءات العلمية المميزة.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">5- تشجيع البحث العلمي، عن طريق التعاون مع مراكز الابحاث العالمية.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">6- تحسين مستوى الخدمات الطبية، المقدمة للمرضى في سوريا.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">كليات الجامعة :</strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">أولاً: كلية طب الأسنان</strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; افتتحت الكلية عام (2007-2008) م . تمنح الكلية إجازة في طب الأسنان, مدة الدراسة خمس سنوات. تضم الكلية أربع عيادات فيها (44) كرسي اسنان للتدريب السريري . يوجد في كل عيادة شاشة عرض و جهاز اشعة(senor), بالإضافة إلى جهازي تصوير بانورامي وجهازي تصوير ذروي في قسم الأشعة, وغرفتي تعقيم . إن مخابر الكلية مجهزة بكل الوسائل التعليمية من هامات, وقبضات وأجهزة صناعية ومخابر جبس وتعويضات للتدريب ما تحت السريري .</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; تم تخريج اربع دفعات من الكلية بسوية علمية ممتازة وهذا ما أكدته نتائج الاختبار الوطني حيث بلغت نسبة النجاح في هذا الامتحان 72 % للعام الدراسي ( 2014 - 2015 ) م .</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; البحث العلمي للكلية :</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">الخلايا الجذعية وطب الأسنان</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">ثانياً: كلية الصيدلة<span>&nbsp;</span></strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; تم افتتاح كلية الصيدلة في عام (2007-2008)م . تمنح الكلية إجازة في الصيدلة. مدة الدراسة في الكلية خمس سنوات. تهدف الكلية إلى اعداد كوادر علمية تساهم في رفع مستوى الوعي الصحي للمواطنين فيما يخص الأدوية وضرورة استخدامها بشكل سليم. الكلية مجهزة بأحدث اللوازم المخبرية و التدريسية التي يحتاجها الطالب .تمَ تخريج أربع دفعات من طلاب الكلية, والخريجون من سوية علمية جيدة وهذا ما أكدته النتائج التي حصلوا عليها في الاختبار الوطني حيث بلغت نسبة النجاح في هذا الامتحان 70%.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; البحث العلمي للكلية :</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">الأدوية المناعية والنباتات الطبية</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">ثالثاً: كلية الطب البشري<span>&nbsp;</span></strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; تم افتتاح الكلية عام (2011-2012) م . تمنح الكلية إجازة في الطب البشري. مدة الدراسة ست سنوات .</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; تضم الكلية مبنيين:</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">- مبنى الكلية الذي يحتوي قاعات تدريس ومخابر ومكاتب أعضاء الهيئة التدريسية, ومكاتب خدمية أخرى .</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">- مبنى مشفى جامعة الاندلس الذي يحتوي/133/ سريراً و قسماً للإسعاف و/8/ غرف عمليات بالإضافة إلى العيادات الخارجية بمختلف الاختصاصات ومخابر للتصوير الشعاعي والتحاليل الطبية ...إلخ .</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; البحث العلمي للكلية :</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">تطوير الكلية البديلة</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">رابعاً: كلية الهندسة الطبية<span>&nbsp;</span></strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; تم افتتاح كلية الهندسة الطبية عام (2011-2012 ) م. تمنح الكلية شهادة الإجازة في الهندسة الطبية .مدة الدراسة خمس سنوات. تحتوي الكلية مخابر متعددة الكترونية وكهربائية توافق الحاجة التعليمية في الكلية. كان الدافع وراء افتتاح الكلية الحاجة إلى مهندسين طبيين للعمل في المشافي و المؤسسات الطبية من اجل التجهيز والصيانة والتطوير والتصنيع , والأمل معقود على هؤلاء المهندسين في المستقبل.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; سيتم تخريج الدفعة الأولى في العام الدراسي الحالي.</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; البحث العلمي للكلية :</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">تطوير معالجة الأورام بالبروتون</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">خامساً : كلية التمريض<span>&nbsp;</span></strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; تم افتتاح كلية التمريض للعام الدراسي (2015-2016 ) م . مدة الدراسة اربع سنوات. تهدف الكلية إلى تخريج ممرضين وممرضات من سوية علمية وعملية مميزة , مما يكمل عمل الطبيب لابل قد ينوب عنه في حالات كثيرة , ومن أجل ذلك فقد جهزت الكلية بأفضل الوسائل التدريبية والدراسية لتحقيق هذه الغاية .</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; البحث العلمي للكلية :</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">الصحة النفسية والشفاء التام</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><strong style=\"box-sizing: border-box; font-weight: bold; font-family: DroidKufi-Regular !important;\">سادساً : كلية ادارة المشافي<span>&nbsp;</span></strong></p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; تم افتتاح كلية إدارة المشافي للعام الدراسي (2015-2016 ) م. مدة الدراسة في الكلية اربع سنوات .</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; تهدف الكلية إلى تخريج الإداري العلمي المنتمي و الواثق من نفسه والقادر على اتخاذ القرار وايجاد الحلول العلمية للقضايا الإدارية التي تواجه مؤسسته الطبية</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">&middot; البحث العلمي للكلية :</p>\r\n\r\n<p dir=\"RTL\" style=\"box-sizing: border-box; margin: 0px 0px 10px; font-family: DroidKufi-Regular; color: rgb(51, 51, 51); font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">الانتماء والتطور المستمر</p>', '2017-10-31 15:27:47', '2017-10-31 15:27:47', NULL),
(25, 68, 1, 'OUR FEATURES', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(26, 68, 2, 'OUR FEATURES', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(27, 103, 1, '<h5 style=\"box-sizing: border-box; font-family: \"Open Sans\", sans-serif; font-weight: 400; line-height: 1.42857; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><em style=\"box-sizing: border-box;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo unde,<span> </span><span class=\"text-theme-color-2\" style=\"box-sizing: border-box; color: rgb(1, 163, 222);\">accounting technologies</span><span> </span>corporis dolorum blanditiis ullam officia<span> </span><span class=\"text-theme-color-2\" style=\"box-sizing: border-box; color: rgb(1, 163, 222);\">our university<span> </span></span>natus minima fugiat repellat! Corrupti voluptatibus aperiam voluptatem. Exercitationem, placeat, cupiditate.</em></h5>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem officiis quod animi possimus a, iure nam sunt quas aperiam non recusandae reprehenderit, nesciunt cumque pariatur totam repellendus delectus? Maxime quasi earum nobis, dicta, aliquam facere reiciendis, delectus voluptas, ea assumenda blanditiis placeat dignissimos quas iusto repellat cumque.</p>', '2018-05-20 12:38:53', '2018-05-21 12:16:10', NULL),
(28, 103, 2, '<h5 style=\"box-sizing: border-box; font-family: \"Open Sans\", sans-serif; font-weight: 400; line-height: 1.42857; color: rgb(51, 51, 51); margin-top: 10px; margin-bottom: 10px; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\"><em style=\"box-sizing: border-box;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo unde,<span> </span><span class=\"text-theme-color-2\" style=\"box-sizing: border-box; color: rgb(1, 163, 222);\">accounting technologies</span><span> </span>corporis dolorum blanditiis ullam officia<span> </span><span class=\"text-theme-color-2\" style=\"box-sizing: border-box; color: rgb(1, 163, 222);\">our university<span> </span></span>natus minima fugiat repellat! Corrupti voluptatibus aperiam voluptatem. Exercitationem, placeat, cupiditate.</em></h5>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore suscipit, inventore aliquid incidunt, quasi error! Natus esse rem eaque asperiores eligendi dicta quidem iure, excepturi doloremque eius neque autem sint error qui tenetur, modi provident aut, maiores laudantium reiciendis expedita. Eligendi</p>\r\n\r\n<p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(102, 102, 102); font-family: \"Open Sans\", sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatem officiis quod animi possimus a, iure nam sunt quas aperiam non recusandae reprehenderit, nesciunt cumque pariatur totam repellendus delectus? Maxime quasi earum nobis, dicta, aliquam facere reiciendis, delectus voluptas, ea assumenda blanditiis placeat dignissimos quas iusto repellat cumque.</p>', '2018-05-20 12:38:53', '2018-05-21 12:16:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_module_name_langs`
--

CREATE TABLE `custom_module_name_langs` (
  `id` int(11) NOT NULL,
  `custom_module_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_module_name_langs`
--

INSERT INTO `custom_module_name_langs` (`id`, `custom_module_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Section Open', '2017-10-16 14:12:49', '2017-10-16 14:12:49', NULL),
(2, 1, 2, 'Section Open', '2017-10-16 14:12:49', '2017-10-16 14:12:49', NULL),
(3, 2, 1, 'Section Close', '2017-10-16 14:13:57', '2017-10-16 14:13:57', NULL),
(4, 2, 2, 'Section Close', '2017-10-16 14:13:57', '2017-10-16 14:13:57', NULL),
(5, 3, 1, 'Fluid Section Open', '2017-10-16 14:15:19', '2017-10-16 14:15:19', NULL),
(6, 3, 2, 'Fluid Section Open', '2017-10-16 14:15:19', '2017-10-16 14:15:19', NULL),
(7, 4, 1, 'Section Intersect Top', '2017-10-16 14:16:10', '2017-10-16 14:16:10', NULL),
(8, 4, 2, 'Section Intersect Top', '2017-10-16 14:16:10', '2017-10-16 14:16:10', NULL),
(9, 5, 1, 'Intersect Top Close', '2017-10-16 14:17:13', '2017-10-16 14:17:13', NULL),
(10, 5, 2, 'Intersect Top Close', '2017-10-16 14:17:13', '2017-10-16 14:17:13', NULL),
(11, 6, 1, 'Home Slider', '2017-10-16 14:28:30', '2017-10-16 14:28:30', NULL),
(12, 6, 2, 'عرض شرائح الصفحة الرئيسية', '2017-10-16 14:28:30', '2017-10-16 14:28:30', NULL),
(13, 7, 1, 'Home Block', '2017-10-16 14:29:16', '2017-10-16 14:29:16', NULL),
(14, 7, 2, 'كتل الصفحة الرئيسية', '2017-10-16 14:29:16', '2017-10-16 14:29:16', NULL),
(15, 8, 1, 'Contact Form', '2017-10-16 15:11:04', '2017-10-16 15:11:04', NULL),
(16, 8, 2, 'فورم الاتصال', '2017-10-16 15:11:04', '2017-10-16 15:11:04', NULL),
(21, 11, 1, 'Contact Form Text Cards', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL),
(22, 11, 2, 'Contact Form Text Cards', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL),
(23, 12, 1, 'Home Short Info', '2017-10-23 15:01:01', '2017-10-23 15:01:01', NULL),
(24, 12, 2, 'Home Short Info', '2017-10-23 15:01:01', '2017-10-23 15:01:01', NULL),
(25, 13, 1, 'home page courses', '2017-10-25 13:18:21', '2017-10-25 13:18:21', NULL),
(26, 13, 2, 'home page courses', '2017-10-25 13:18:21', '2017-10-25 13:18:21', NULL),
(27, 14, 1, 'Home Vertical Slider', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(28, 14, 2, 'Home Vertical Slider', '2017-10-25 16:27:30', '2017-10-25 16:27:30', NULL),
(29, 15, 1, 'Small Gallery', '2017-10-27 05:20:04', '2017-10-27 05:20:04', NULL),
(30, 15, 2, 'Small Gallery', '2017-10-27 05:20:05', '2017-10-27 05:20:05', NULL),
(31, 16, 1, 'Why Choose Us?', '2017-10-29 04:07:31', '2017-10-29 04:07:31', NULL),
(32, 16, 2, 'Why Choose Us?', '2017-10-29 04:07:31', '2017-10-29 04:07:31', NULL),
(33, 17, 1, 'Instructors', '2017-10-29 18:00:28', '2017-10-29 18:00:28', NULL),
(34, 17, 2, 'المدرسون', '2017-10-29 18:00:28', '2017-10-29 18:00:28', NULL),
(35, 18, 1, 'University Message', '2017-10-31 15:27:47', '2017-10-31 15:27:47', NULL),
(36, 18, 2, 'رسالة الجامعة', '2017-10-31 15:27:47', '2017-10-31 15:27:47', NULL),
(37, 19, 1, 'University Council', '2017-10-31 17:56:17', '2017-10-31 17:56:17', NULL),
(38, 19, 2, 'مجلس الجامعة', '2017-10-31 17:56:17', '2017-10-31 17:56:17', NULL),
(39, 20, 1, 'OUR FEATURES', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(40, 20, 2, 'OUR FEATURES', '2017-10-31 18:06:14', '2017-10-31 18:06:14', NULL),
(41, 21, 1, 'Trusted Council', '2017-11-03 03:07:56', '2017-11-03 03:07:56', NULL),
(42, 21, 2, 'مجلس الامناء', '2017-11-03 03:07:56', '2017-11-03 03:07:56', NULL),
(43, 22, 1, 'university partner', '2017-11-05 17:49:54', '2017-11-05 17:49:54', NULL),
(44, 22, 2, 'شركاء الجامعة', '2017-11-05 17:49:54', '2017-11-05 17:49:54', NULL),
(45, 23, 1, 'Person', '2017-11-15 17:04:08', '2017-11-15 17:04:08', NULL),
(46, 23, 2, 'شخص', '2017-11-15 17:04:08', '2017-11-15 17:04:08', NULL),
(49, 25, 1, 'Degrees Table', '2017-11-17 16:52:26', '2017-11-17 16:52:26', NULL),
(50, 25, 2, 'جدول الاختصاصات', '2017-11-17 16:52:26', '2017-11-17 16:52:26', NULL),
(51, 26, 1, 'Courses Table', '2017-11-22 16:53:28', '2017-11-22 16:53:28', NULL),
(52, 26, 2, 'جدول المقررات', '2017-11-22 16:53:28', '2017-11-22 16:53:28', NULL),
(53, 27, 1, 'Study Plan', '2017-12-01 15:52:01', '2017-12-01 15:52:01', NULL),
(54, 27, 2, 'الخطة الدرسية', '2017-12-01 15:52:01', '2017-12-01 15:52:01', NULL),
(55, 28, 1, 'Faculty Instructors', '2017-12-09 15:46:13', '2017-12-09 15:46:13', NULL),
(56, 28, 2, 'مدرسو الكلية', '2017-12-09 15:46:13', '2017-12-09 15:46:13', NULL),
(61, 31, 1, 'Galleries', '2018-04-18 14:26:36', '2018-04-18 14:26:36', NULL),
(62, 31, 2, 'معرض', '2018-04-18 14:26:36', '2018-04-18 14:26:36', NULL),
(63, 32, 1, 'Courses list', '2018-04-18 14:32:32', '2018-04-18 14:32:32', NULL),
(64, 32, 2, 'قائمة المقررات', '2018-04-18 14:32:32', '2018-04-18 14:32:32', NULL),
(65, 33, 1, 'University Location', '2018-05-18 02:26:30', '2018-05-18 02:26:30', NULL),
(66, 33, 2, 'موقع الجامعة', '2018-05-18 02:26:30', '2018-05-18 02:26:30', NULL),
(67, 34, 1, 'C#', '2018-05-20 12:38:53', '2018-05-20 12:38:53', NULL),
(68, 34, 2, 'C#', '2018-05-20 12:38:53', '2018-05-20 12:38:53', NULL),
(69, 35, 1, 'Labs List', '2018-05-26 12:07:54', '2018-05-26 12:07:54', NULL),
(70, 35, 2, 'قائمة المخابر', '2018-05-26 12:07:55', '2018-05-26 12:07:55', NULL),
(71, 36, 1, 'Lab Page', '2018-05-26 13:18:47', '2018-05-26 13:18:47', NULL),
(72, 36, 2, 'صفحة المخبر', '2018-05-26 13:18:47', '2018-05-26 13:18:47', NULL),
(73, 37, 1, 'Offices List', '2018-05-27 12:38:30', '2018-05-27 12:55:22', NULL),
(74, 37, 2, 'قائمة المكاتب', '2018-05-27 12:38:30', '2018-05-27 12:38:30', NULL),
(75, 38, 1, 'News List', '2018-05-29 13:17:45', '2018-05-29 13:17:45', NULL),
(76, 38, 2, 'فائمة الاخبار', '2018-05-29 13:17:45', '2018-05-29 13:17:45', NULL),
(77, 39, 1, 'News Page', '2018-06-01 03:54:09', '2018-06-01 03:54:09', NULL),
(78, 39, 2, 'صفحة الخبر', '2018-06-01 03:54:10', '2018-06-01 03:54:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `degrees`
--

CREATE TABLE `degrees` (
  `id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `degrees`
--

INSERT INTO `degrees` (`id`, `faculty_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, '2017-07-05 14:05:50', '2017-08-28 17:12:21', NULL),
(2, 6, '2017-07-05 14:05:58', '2017-08-28 17:12:42', NULL),
(3, 6, '2017-08-28 17:15:02', '2017-08-28 17:15:02', NULL),
(4, 6, '2017-08-28 17:15:09', '2017-08-28 17:15:09', NULL),
(5, 7, '2017-08-28 17:26:24', '2017-08-28 17:26:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `degree_name_langs`
--

CREATE TABLE `degree_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `degree_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `degree_name_langs`
--

INSERT INTO `degree_name_langs` (`id`, `degree_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Network Degree 1', '2017-07-05 14:05:50', '2017-08-28 17:12:21', NULL),
(2, 1, 2, 'اختصاص شبكات 1', '2017-07-05 14:05:50', '2017-08-28 17:12:21', NULL),
(3, 2, 1, 'Network Degree 2', '2017-07-05 14:05:58', '2017-08-28 17:13:01', NULL),
(4, 2, 2, 'اختصاص شبكات 2', '2017-07-05 14:05:58', '2017-08-28 17:13:01', NULL),
(5, 3, 1, 'Programming Degree 1', '2017-08-28 17:15:02', '2017-08-28 17:15:02', NULL),
(6, 3, 2, 'اختصاص برمجة 1', '2017-08-28 17:15:03', '2017-08-28 17:15:03', NULL),
(7, 4, 1, 'Programming Degree 2', '2017-08-28 17:15:09', '2017-08-28 17:15:18', NULL),
(8, 4, 2, 'اختصاص برمجة 1', '2017-08-28 17:15:09', '2017-08-28 17:15:09', NULL),
(9, 5, 1, 'Degree 1', '2017-08-28 17:26:25', '2017-08-28 17:26:25', NULL),
(10, 5, 2, 'اختصاص 1', '2017-08-28 17:26:25', '2017-08-28 17:26:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `faculty_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 6, '2017-07-05 13:58:17', '2017-08-28 17:09:06', NULL),
(2, 6, '2017-07-05 13:58:18', '2017-08-28 17:09:29', NULL),
(3, 6, '2017-07-05 13:58:26', '2017-08-28 17:09:51', NULL),
(4, 7, '2017-08-28 17:25:54', '2017-08-28 17:25:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `department_name_langs`
--

CREATE TABLE `department_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department_name_langs`
--

INSERT INTO `department_name_langs` (`id`, `department_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'General', '2017-07-05 13:58:18', '2017-08-28 17:09:06', NULL),
(2, 1, 2, 'عام', '2017-07-05 13:58:18', '2017-08-28 17:09:06', NULL),
(3, 2, 1, 'Programming', '2017-07-05 13:58:18', '2017-08-28 17:09:30', NULL),
(4, 2, 2, 'برمجة', '2017-07-05 13:58:18', '2017-08-28 17:09:30', NULL),
(5, 3, 1, 'Networks', '2017-07-05 13:58:26', '2017-08-28 17:09:51', NULL),
(6, 3, 2, 'شبكات', '2017-07-05 13:58:26', '2017-08-28 17:09:51', NULL),
(7, 4, 1, 'General', '2017-08-28 17:25:54', '2017-08-28 17:25:54', NULL),
(8, 4, 2, 'عام', '2017-08-28 17:25:54', '2017-08-28 17:25:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(10) UNSIGNED NOT NULL,
  `campus_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `campus_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, NULL, '2017-08-28 17:07:53', '2017-08-28 17:07:53', NULL),
(7, NULL, '2017-08-28 17:08:24', '2017-08-28 17:08:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_name_langs`
--

CREATE TABLE `faculty_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_name_langs`
--

INSERT INTO `faculty_name_langs` (`id`, `faculty_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 6, 1, 'Faculty of Informatics', '2017-08-28 17:07:53', '2017-08-28 17:07:53', NULL),
(12, 6, 2, 'كلية المعلوماتية', '2017-08-28 17:07:53', '2017-08-28 17:07:53', NULL),
(13, 7, 1, 'Faculty of Economics', '2017-08-28 17:08:24', '2017-08-28 17:08:24', NULL),
(14, 7, 2, 'كلية الاقتصاد', '2017-08-28 17:08:24', '2017-08-28 17:08:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_study_year`
--

CREATE TABLE `faculty_study_year` (
  `id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `study_year_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_study_year`
--

INSERT INTO `faculty_study_year` (`id`, `faculty_id`, `study_year_id`, `created_at`, `updated_at`) VALUES
(2, 6, 2, NULL, NULL),
(3, 6, 3, NULL, NULL),
(4, 7, 2, NULL, NULL),
(5, 7, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_title_langs`
--

CREATE TABLE `gallery_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `gallery_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-11-03 02:18:16', '2017-11-03 02:18:16', NULL),
(2, '2017-11-03 02:18:31', '2017-11-03 02:18:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gender_name_langs`
--

CREATE TABLE `gender_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gender_name_langs`
--

INSERT INTO `gender_name_langs` (`id`, `gender_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Male', '2017-11-03 02:18:16', '2017-11-03 02:18:16', NULL),
(2, 1, 2, 'ذكر', '2017-11-03 02:18:16', '2017-11-03 02:18:16', NULL),
(3, 2, 1, 'Female', '2017-11-03 02:18:31', '2017-11-03 02:18:31', NULL),
(4, 2, 2, 'انثى', '2017-11-03 02:18:31', '2017-11-03 02:18:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hierarchies`
--

CREATE TABLE `hierarchies` (
  `id` int(10) UNSIGNED NOT NULL,
  `hierarchy_type_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hierarchy_name_langs`
--

CREATE TABLE `hierarchy_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `hierarchy_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hierarchy_types`
--

CREATE TABLE `hierarchy_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hierarchy_type_name_langs`
--

CREATE TABLE `hierarchy_type_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `hierarchy_type_id` int(10) UNSIGNED DEFAULT NULL,
  `lang_id` int(10) UNSIGNED DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'icon-user', NULL, NULL, NULL),
(2, 'icon-people', NULL, NULL, NULL),
(3, 'icon-user-female', NULL, NULL, NULL),
(4, 'icon-user-follow', NULL, NULL, NULL),
(5, 'icon-user-following', NULL, NULL, NULL),
(6, 'icon-user-unfollow', NULL, NULL, NULL),
(7, 'icon-login', NULL, NULL, NULL),
(8, 'icon-logout', NULL, NULL, NULL),
(9, 'icon-emotsmile', NULL, NULL, NULL),
(10, 'icon-phone', NULL, NULL, NULL),
(11, 'icon-call-end', NULL, NULL, NULL),
(12, 'icon-call-in', NULL, NULL, NULL),
(13, 'icon-call-out', NULL, NULL, NULL),
(14, 'icon-map', NULL, NULL, NULL),
(15, 'icon-location-pin', NULL, NULL, NULL),
(16, 'icon-direction', NULL, NULL, NULL),
(17, 'icon-directions', NULL, NULL, NULL),
(18, 'icon-compass', NULL, NULL, NULL),
(19, 'icon-layers', NULL, NULL, NULL),
(20, 'icon-menu', NULL, NULL, NULL),
(21, 'icon-list', NULL, NULL, NULL),
(22, 'icon-options-vertical', NULL, NULL, NULL),
(23, 'icon-options', NULL, NULL, NULL),
(24, 'icon-arrow-down', NULL, NULL, NULL),
(25, 'icon-arrow-left', NULL, NULL, NULL),
(26, 'icon-arrow-right', NULL, NULL, NULL),
(27, 'icon-arrow-up', NULL, NULL, NULL),
(28, 'icon-arrow-up-circle', NULL, NULL, NULL),
(29, 'icon-arrow-left-circle', NULL, NULL, NULL),
(30, 'icon-arrow-right-circle', NULL, NULL, NULL),
(31, 'icon-arrow-down-circle', NULL, NULL, NULL),
(32, 'icon-check', NULL, NULL, NULL),
(33, 'icon-clock', NULL, NULL, NULL),
(34, 'icon-plus', NULL, NULL, NULL),
(35, 'icon-close', NULL, NULL, NULL),
(36, 'icon-trophy', NULL, NULL, NULL),
(37, 'icon-screen-smartphone', NULL, NULL, NULL),
(38, 'icon-screen-desktop', NULL, NULL, NULL),
(39, 'icon-plane', NULL, NULL, NULL),
(40, 'icon-notebook', NULL, NULL, NULL),
(41, 'icon-mustache', NULL, NULL, NULL),
(42, 'icon-mouse', NULL, NULL, NULL),
(43, 'icon-magnet', NULL, NULL, NULL),
(44, 'icon-energy', NULL, NULL, NULL),
(45, 'icon-disc', NULL, NULL, NULL),
(46, 'icon-cursor', NULL, NULL, NULL),
(47, 'icon-cursor-move', NULL, NULL, NULL),
(48, 'icon-crop', NULL, NULL, NULL),
(49, 'icon-chemistry', NULL, NULL, NULL),
(50, 'icon-speedometer', NULL, NULL, NULL),
(51, 'icon-shield', NULL, NULL, NULL),
(52, 'icon-screen-tablet', NULL, NULL, NULL),
(53, 'icon-magic-wand', NULL, NULL, NULL),
(54, 'icon-hourglass', NULL, NULL, NULL),
(55, 'icon-graduation', NULL, NULL, NULL),
(56, 'icon-ghost', NULL, NULL, NULL),
(57, 'icon-game-controller', NULL, NULL, NULL),
(58, 'icon-fire', NULL, NULL, NULL),
(59, 'icon-eyeglass', NULL, NULL, NULL),
(60, 'icon-envelope-open', NULL, NULL, NULL),
(61, 'icon-envelope-letter', NULL, NULL, NULL),
(62, 'icon-bell', NULL, NULL, NULL),
(63, 'icon-badge', NULL, NULL, NULL),
(64, 'icon-anchor', NULL, NULL, NULL),
(65, 'icon-wallet', NULL, NULL, NULL),
(66, 'icon-vector', NULL, NULL, NULL),
(67, 'icon-speech', NULL, NULL, NULL),
(68, 'icon-puzzle', NULL, NULL, NULL),
(69, 'icon-printer', NULL, NULL, NULL),
(70, 'icon-present', NULL, NULL, NULL),
(71, 'icon-playlist', NULL, NULL, NULL),
(72, 'icon-pin', NULL, NULL, NULL),
(73, 'icon-picture', NULL, NULL, NULL),
(74, 'icon-handbag', NULL, NULL, NULL),
(75, 'icon-globe-alt', NULL, NULL, NULL),
(76, 'icon-globe', NULL, NULL, NULL),
(77, 'icon-folder-alt', NULL, NULL, NULL),
(78, 'icon-folder', NULL, NULL, NULL),
(79, 'icon-film', NULL, NULL, NULL),
(80, 'icon-feed', NULL, NULL, NULL),
(81, 'icon-drop', NULL, NULL, NULL),
(82, 'icon-drawar', NULL, NULL, NULL),
(83, 'icon-docs', NULL, NULL, NULL),
(84, 'icon-doc', NULL, NULL, NULL),
(85, 'icon-diamond', NULL, NULL, NULL),
(86, 'icon-cup', NULL, NULL, NULL),
(87, 'icon-calculator', NULL, NULL, NULL),
(88, 'icon-bubbles', NULL, NULL, NULL),
(89, 'icon-briefcase', NULL, NULL, NULL),
(90, 'icon-book-open', NULL, NULL, NULL),
(91, 'icon-basket-loaded', NULL, NULL, NULL),
(92, 'icon-basket', NULL, NULL, NULL),
(93, 'icon-bag', NULL, NULL, NULL),
(94, 'icon-action-undo', NULL, NULL, NULL),
(95, 'icon-action-redo', NULL, NULL, NULL),
(96, 'icon-wrench', NULL, NULL, NULL),
(97, 'icon-umbrella', NULL, NULL, NULL),
(98, 'icon-trash', NULL, NULL, NULL),
(99, 'icon-tag', NULL, NULL, NULL),
(100, 'icon-support', NULL, NULL, NULL),
(101, 'icon-frame', NULL, NULL, NULL),
(102, 'icon-size-fullscreen', NULL, NULL, NULL),
(103, 'icon-size-actual', NULL, NULL, NULL),
(104, 'icon-shuffle', NULL, NULL, NULL),
(105, 'icon-share-alt', NULL, NULL, NULL),
(106, 'icon-share', NULL, NULL, NULL),
(107, 'icon-rocket', NULL, NULL, NULL),
(108, 'icon-question', NULL, NULL, NULL),
(109, 'icon-pie-chart', NULL, NULL, NULL),
(110, 'icon-pencil', NULL, NULL, NULL),
(111, 'icon-note', NULL, NULL, NULL),
(112, 'icon-loop', NULL, NULL, NULL),
(113, 'icon-home', NULL, NULL, NULL),
(114, 'icon-grid', NULL, NULL, NULL),
(115, 'icon-graph', NULL, NULL, NULL),
(116, 'icon-microphone', NULL, NULL, NULL),
(117, 'icon-music-tone-alt', NULL, NULL, NULL),
(118, 'icon-music-tone', NULL, NULL, NULL),
(119, 'icon-earphones-alt', NULL, NULL, NULL),
(120, 'icon-earphones', NULL, NULL, NULL),
(121, 'icon-equalizer', NULL, NULL, NULL),
(122, 'icon-like', NULL, NULL, NULL),
(123, 'icon-dislike', NULL, NULL, NULL),
(124, 'icon-control-start', NULL, NULL, NULL),
(125, 'icon-control-rewind', NULL, NULL, NULL),
(126, 'icon-control-play', NULL, NULL, NULL),
(127, 'icon-control-pause', NULL, NULL, NULL),
(128, 'icon-control-forward', NULL, NULL, NULL),
(129, 'icon-control-end', NULL, NULL, NULL),
(130, 'icon-volume-1', NULL, NULL, NULL),
(131, 'icon-volume-2', NULL, NULL, NULL),
(132, 'icon-volume-off', NULL, NULL, NULL),
(133, 'icon-calendar', NULL, NULL, NULL),
(134, 'icon-bulb', NULL, NULL, NULL),
(135, 'icon-chart', NULL, NULL, NULL),
(136, 'icon-ban', NULL, NULL, NULL),
(137, 'icon-bubble', NULL, NULL, NULL),
(138, 'icon-camrecorder', NULL, NULL, NULL),
(139, 'icon-camera', NULL, NULL, NULL),
(140, 'icon-cloud-download', NULL, NULL, NULL),
(141, 'icon-cloud-upload', NULL, NULL, NULL),
(142, 'icon-envelope', NULL, NULL, NULL),
(143, 'icon-eye', NULL, NULL, NULL),
(144, 'icon-flag', NULL, NULL, NULL),
(145, 'icon-heart', NULL, NULL, NULL),
(146, 'icon-info', NULL, NULL, NULL),
(147, 'icon-key', NULL, NULL, NULL),
(148, 'icon-link', NULL, NULL, NULL),
(149, 'icon-lock', NULL, NULL, NULL),
(150, 'icon-lock-open', NULL, NULL, NULL),
(151, 'icon-magnifier', NULL, NULL, NULL),
(152, 'icon-magnifier-add', NULL, NULL, NULL),
(153, 'icon-magnifier-remove', NULL, NULL, NULL),
(154, 'icon-paper-clip', NULL, NULL, NULL),
(155, 'icon-paper-plane', NULL, NULL, NULL),
(156, 'icon-power', NULL, NULL, NULL),
(157, 'icon-refresh', NULL, NULL, NULL),
(158, 'icon-reload', NULL, NULL, NULL),
(159, 'icon-settings', NULL, NULL, NULL),
(160, 'icon-star', NULL, NULL, NULL),
(161, 'icon-symble-female', NULL, NULL, NULL),
(162, 'icon-symbol-male', NULL, NULL, NULL),
(163, 'icon-target', NULL, NULL, NULL),
(164, 'icon-credit-card', NULL, NULL, NULL),
(165, 'icon-paypal', NULL, NULL, NULL),
(166, 'icon-social-tumblr', NULL, NULL, NULL),
(167, 'icon-social-twitter', NULL, NULL, NULL),
(168, 'icon-social-facebook', NULL, NULL, NULL),
(169, 'icon-social-instagram', NULL, NULL, NULL),
(170, 'icon-social-linkedin', NULL, NULL, NULL),
(171, 'icon-social-pinterest', NULL, NULL, NULL),
(172, 'icon-social-github', NULL, NULL, NULL),
(173, 'icon-social-gplus', NULL, NULL, NULL),
(174, 'icon-social-reddit', NULL, NULL, NULL),
(175, 'icon-social-skype', NULL, NULL, NULL),
(176, 'icon-social-dribbble', NULL, NULL, NULL),
(177, 'icon-social-behance', NULL, NULL, NULL),
(178, 'icon-social-foursqare', NULL, NULL, NULL),
(179, 'icon-social-soundcloud', NULL, NULL, NULL),
(180, 'icon-social-spotify', NULL, NULL, NULL),
(181, 'icon-social-stumbleupon', NULL, NULL, NULL),
(182, 'icon-social-youtube', NULL, NULL, NULL),
(183, 'icon-social-dropbox', NULL, NULL, NULL),
(184, 'fa fa-adjust', NULL, NULL, NULL),
(185, 'fa fa-anchor', NULL, NULL, NULL),
(186, 'fa fa-archive', NULL, NULL, NULL),
(187, 'fa fa-area-chart', NULL, NULL, NULL),
(188, 'fa fa-arrows', NULL, NULL, NULL),
(189, 'fa fa-arrows-h', NULL, NULL, NULL),
(190, 'fa fa-arrows-v', NULL, NULL, NULL),
(191, 'fa fa-asterisk', NULL, NULL, NULL),
(192, 'fa fa-at', NULL, NULL, NULL),
(193, 'fa fa-automobile', NULL, NULL, NULL),
(194, 'fa fa-ban', NULL, NULL, NULL),
(195, 'fa fa-bank', NULL, NULL, NULL),
(196, 'fa fa-bar-chart', NULL, NULL, NULL),
(197, 'fa fa-bar-chart-o', NULL, NULL, NULL),
(198, 'fa fa-barcode', NULL, NULL, NULL),
(199, 'fa fa-bars', NULL, NULL, NULL),
(200, 'fa fa-beer', NULL, NULL, NULL),
(201, 'fa fa-bell', NULL, NULL, NULL),
(202, 'fa fa-bell-o', NULL, NULL, NULL),
(203, 'fa fa-bell-slash', NULL, NULL, NULL),
(204, 'fa fa-bell-slash-o', NULL, NULL, NULL),
(205, 'fa fa-bicycle', NULL, NULL, NULL),
(206, 'fa fa-binoculars', NULL, NULL, NULL),
(207, 'fa fa-birthday-cake', NULL, NULL, NULL),
(208, 'fa fa-bolt', NULL, NULL, NULL),
(209, 'fa fa-bomb', NULL, NULL, NULL),
(210, 'fa fa-book', NULL, NULL, NULL),
(211, 'fa fa-bookmark', NULL, NULL, NULL),
(212, 'fa fa-bookmark-o', NULL, NULL, NULL),
(213, 'fa fa-briefcase', NULL, NULL, NULL),
(214, 'fa fa-bug', NULL, NULL, NULL),
(215, 'fa fa-building', NULL, NULL, NULL),
(216, 'fa fa-building-o', NULL, NULL, NULL),
(217, 'fa fa-bullhorn', NULL, NULL, NULL),
(218, 'fa fa-bullseye', NULL, NULL, NULL),
(219, 'fa fa-bus', NULL, NULL, NULL),
(220, 'fa fa-cab', NULL, NULL, NULL),
(221, 'fa fa-calculator', NULL, NULL, NULL),
(222, 'fa fa-calendar', NULL, NULL, NULL),
(223, 'fa fa-calendar-o', NULL, NULL, NULL),
(224, 'fa fa-camera', NULL, NULL, NULL),
(225, 'fa fa-camera-retro', NULL, NULL, NULL),
(226, 'fa fa-car', NULL, NULL, NULL),
(227, 'fa fa-caret-square-o-down', NULL, NULL, NULL),
(228, 'fa fa-caret-square-o-left', NULL, NULL, NULL),
(229, 'fa fa-caret-square-o-right', NULL, NULL, NULL),
(230, 'fa fa-caret-square-o-up', NULL, NULL, NULL),
(231, 'fa fa-cc', NULL, NULL, NULL),
(232, 'fa fa-certificate', NULL, NULL, NULL),
(233, 'fa fa-check', NULL, NULL, NULL),
(234, 'fa fa-check-circle', NULL, NULL, NULL),
(235, 'fa fa-check-circle-o', NULL, NULL, NULL),
(236, 'fa fa-check-square', NULL, NULL, NULL),
(237, 'fa fa-check-square-o', NULL, NULL, NULL),
(238, 'fa fa-child', NULL, NULL, NULL),
(239, 'fa fa-circle', NULL, NULL, NULL),
(240, 'fa fa-circle-o', NULL, NULL, NULL),
(241, 'fa fa-circle-o-notch', NULL, NULL, NULL),
(242, 'fa fa-circle-thin', NULL, NULL, NULL),
(243, 'fa fa-clock-o', NULL, NULL, NULL),
(244, 'fa fa-close', NULL, NULL, NULL),
(245, 'fa fa-cloud', NULL, NULL, NULL),
(246, 'fa fa-cloud-download', NULL, NULL, NULL),
(247, 'fa fa-cloud-upload', NULL, NULL, NULL),
(248, 'fa fa-code', NULL, NULL, NULL),
(249, 'fa fa-code-fork', NULL, NULL, NULL),
(250, 'fa fa-coffee', NULL, NULL, NULL),
(251, 'fa fa-cog', NULL, NULL, NULL),
(252, 'fa fa-cogs', NULL, NULL, NULL),
(253, 'fa fa-comment', NULL, NULL, NULL),
(254, 'fa fa-comment-o', NULL, NULL, NULL),
(255, 'fa fa-comments', NULL, NULL, NULL),
(256, 'fa fa-comments-o', NULL, NULL, NULL),
(257, 'fa fa-compass', NULL, NULL, NULL),
(258, 'fa fa-copyright', NULL, NULL, NULL),
(259, 'fa fa-credit-card', NULL, NULL, NULL),
(260, 'fa fa-crop', NULL, NULL, NULL),
(261, 'fa fa-crosshairs', NULL, NULL, NULL),
(262, 'fa fa-cube', NULL, NULL, NULL),
(263, 'fa fa-cubes', NULL, NULL, NULL),
(264, 'fa fa-cutlery', NULL, NULL, NULL),
(265, 'fa fa-dashboard', NULL, NULL, NULL),
(266, 'fa fa-database', NULL, NULL, NULL),
(267, 'fa fa-desktop', NULL, NULL, NULL),
(268, 'fa fa-dot-circle-o', NULL, NULL, NULL),
(269, 'fa fa-download', NULL, NULL, NULL),
(270, 'fa fa-edit', NULL, NULL, NULL),
(271, 'fa fa-ellipsis-h', NULL, NULL, NULL),
(272, 'fa fa-ellipsis-v', NULL, NULL, NULL),
(273, 'fa fa-envelope', NULL, NULL, NULL),
(274, 'fa fa-envelope-o', NULL, NULL, NULL),
(275, 'fa fa-envelope-square', NULL, NULL, NULL),
(276, 'fa fa-eraser', NULL, NULL, NULL),
(277, 'fa fa-exchange', NULL, NULL, NULL),
(278, 'fa fa-exclamation', NULL, NULL, NULL),
(279, 'fa fa-exclamation-circle', NULL, NULL, NULL),
(280, 'fa fa-exclamation-triangle', NULL, NULL, NULL),
(281, 'fa fa-external-link', NULL, NULL, NULL),
(282, 'fa fa-external-link-square', NULL, NULL, NULL),
(283, 'fa fa-eye', NULL, NULL, NULL),
(284, 'fa fa-eye-slash', NULL, NULL, NULL),
(285, 'fa fa-eyedropper', NULL, NULL, NULL),
(286, 'fa fa-fax', NULL, NULL, NULL),
(287, 'fa fa-female', NULL, NULL, NULL),
(288, 'fa fa-fighter-jet', NULL, NULL, NULL),
(289, 'fa fa-file-archive-o', NULL, NULL, NULL),
(290, 'fa fa-file-audio-o', NULL, NULL, NULL),
(291, 'fa fa-file-code-o', NULL, NULL, NULL),
(292, 'fa fa-file-excel-o', NULL, NULL, NULL),
(293, 'fa fa-file-image-o', NULL, NULL, NULL),
(294, 'fa fa-file-movie-o', NULL, NULL, NULL),
(295, 'fa fa-file-pdf-o', NULL, NULL, NULL),
(296, 'fa fa-file-photo-o', NULL, NULL, NULL),
(297, 'fa fa-file-picture-o', NULL, NULL, NULL),
(298, 'fa fa-file-powerpoint-o', NULL, NULL, NULL),
(299, 'fa fa-file-sound-o', NULL, NULL, NULL),
(300, 'fa fa-file-video-o', NULL, NULL, NULL),
(301, 'fa fa-file-word-o', NULL, NULL, NULL),
(302, 'fa fa-file-zip-o', NULL, NULL, NULL),
(303, 'fa fa-film', NULL, NULL, NULL),
(304, 'fa fa-filter', NULL, NULL, NULL),
(305, 'fa fa-fire', NULL, NULL, NULL),
(306, 'fa fa-fire-extinguisher', NULL, NULL, NULL),
(307, 'fa fa-flag', NULL, NULL, NULL),
(308, 'fa fa-flag-checkered', NULL, NULL, NULL),
(309, 'fa fa-flag-o', NULL, NULL, NULL),
(310, 'fa fa-flash', NULL, NULL, NULL),
(311, 'fa fa-flask', NULL, NULL, NULL),
(312, 'fa fa-folder', NULL, NULL, NULL),
(313, 'fa fa-folder-o', NULL, NULL, NULL),
(314, 'fa fa-folder-open', NULL, NULL, NULL),
(315, 'fa fa-folder-open-o', NULL, NULL, NULL),
(316, 'fa fa-frown-o', NULL, NULL, NULL),
(317, 'fa fa-futbol-o', NULL, NULL, NULL),
(318, 'fa fa-gamepad', NULL, NULL, NULL),
(319, 'fa fa-gavel', NULL, NULL, NULL),
(320, 'fa fa-gear', NULL, NULL, NULL),
(321, 'fa fa-gears', NULL, NULL, NULL),
(322, 'fa fa-gift', NULL, NULL, NULL),
(323, 'fa fa-glass', NULL, NULL, NULL),
(324, 'fa fa-globe', NULL, NULL, NULL),
(325, 'fa fa-graduation-cap', NULL, NULL, NULL),
(326, 'fa fa-group', NULL, NULL, NULL),
(327, 'fa fa-hdd-o', NULL, NULL, NULL),
(328, 'fa fa-headphones', NULL, NULL, NULL),
(329, 'fa fa-heart', NULL, NULL, NULL),
(330, 'fa fa-heart-o', NULL, NULL, NULL),
(331, 'fa fa-history', NULL, NULL, NULL),
(332, 'fa fa-home', NULL, NULL, NULL),
(333, 'fa fa-image', NULL, NULL, NULL),
(334, 'fa fa-inbox', NULL, NULL, NULL),
(335, 'fa fa-info', NULL, NULL, NULL),
(336, 'fa fa-info-circle', NULL, NULL, NULL),
(337, 'fa fa-institution', NULL, NULL, NULL),
(338, 'fa fa-key', NULL, NULL, NULL),
(339, 'fa fa-keyboard-o', NULL, NULL, NULL),
(340, 'fa fa-language', NULL, NULL, NULL),
(341, 'fa fa-laptop', NULL, NULL, NULL),
(342, 'fa fa-leaf', NULL, NULL, NULL),
(343, 'fa fa-legal', NULL, NULL, NULL),
(344, 'fa fa-lemon-o', NULL, NULL, NULL),
(345, 'fa fa-level-down', NULL, NULL, NULL),
(346, 'fa fa-level-up', NULL, NULL, NULL),
(347, 'fa fa-life-bouy', NULL, NULL, NULL),
(348, 'fa fa-life-buoy', NULL, NULL, NULL),
(349, 'fa fa-life-ring', NULL, NULL, NULL),
(350, 'fa fa-life-saver', NULL, NULL, NULL),
(351, 'fa fa-lightbulb-o', NULL, NULL, NULL),
(352, 'fa fa-line-chart', NULL, NULL, NULL),
(353, 'fa fa-location-arrow', NULL, NULL, NULL),
(354, 'fa fa-lock', NULL, NULL, NULL),
(355, 'fa fa-magic', NULL, NULL, NULL),
(356, 'fa fa-magnet', NULL, NULL, NULL),
(357, 'fa fa-mail-forward', NULL, NULL, NULL),
(358, 'fa fa-mail-reply', NULL, NULL, NULL),
(359, 'fa fa-mail-reply-all', NULL, NULL, NULL),
(360, 'fa fa-male', NULL, NULL, NULL),
(361, 'fa fa-map-marker', NULL, NULL, NULL),
(362, 'fa fa-meh-o', NULL, NULL, NULL),
(363, 'fa fa-microphone', NULL, NULL, NULL),
(364, 'fa fa-microphone-slash', NULL, NULL, NULL),
(365, 'fa fa-minus', NULL, NULL, NULL),
(366, 'fa fa-minus-circle', NULL, NULL, NULL),
(367, 'fa fa-minus-square', NULL, NULL, NULL),
(368, 'fa fa-minus-square-o', NULL, NULL, NULL),
(369, 'fa fa-mobile', NULL, NULL, NULL),
(370, 'fa fa-mobile-phone', NULL, NULL, NULL),
(371, 'fa fa-money', NULL, NULL, NULL),
(372, 'fa fa-moon-o', NULL, NULL, NULL),
(373, 'fa fa-mortar-board', NULL, NULL, NULL),
(374, 'fa fa-music', NULL, NULL, NULL),
(375, 'fa fa-navicon', NULL, NULL, NULL),
(376, 'fa fa-newspaper-o', NULL, NULL, NULL),
(377, 'fa fa-paint-brush', NULL, NULL, NULL),
(378, 'fa fa-paper-plane', NULL, NULL, NULL),
(379, 'fa fa-paper-plane-o', NULL, NULL, NULL),
(380, 'fa fa-paw', NULL, NULL, NULL),
(381, 'fa fa-pencil', NULL, NULL, NULL),
(382, 'fa fa-pencil-square', NULL, NULL, NULL),
(383, 'fa fa-pencil-square-o', NULL, NULL, NULL),
(384, 'fa fa-phone', NULL, NULL, NULL),
(385, 'fa fa-phone-square', NULL, NULL, NULL),
(386, 'fa fa-photo', NULL, NULL, NULL),
(387, 'fa fa-picture-o', NULL, NULL, NULL),
(388, 'fa fa-pie-chart', NULL, NULL, NULL),
(389, 'fa fa-plane', NULL, NULL, NULL),
(390, 'fa fa-plug', NULL, NULL, NULL),
(391, 'fa fa-plus', NULL, NULL, NULL),
(392, 'fa fa-plus-circle', NULL, NULL, NULL),
(393, 'fa fa-plus-square', NULL, NULL, NULL),
(394, 'fa fa-plus-square-o', NULL, NULL, NULL),
(395, 'fa fa-power-off', NULL, NULL, NULL),
(396, 'fa fa-print', NULL, NULL, NULL),
(397, 'fa fa-puzzle-piece', NULL, NULL, NULL),
(398, 'fa fa-qrcode', NULL, NULL, NULL),
(399, 'fa fa-question', NULL, NULL, NULL),
(400, 'fa fa-question-circle', NULL, NULL, NULL),
(401, 'fa fa-quote-left', NULL, NULL, NULL),
(402, 'fa fa-quote-right', NULL, NULL, NULL),
(403, 'fa fa-random', NULL, NULL, NULL),
(404, 'fa fa-recycle', NULL, NULL, NULL),
(405, 'fa fa-refresh', NULL, NULL, NULL),
(406, 'fa fa-remove', NULL, NULL, NULL),
(407, 'fa fa-reorder', NULL, NULL, NULL),
(408, 'fa fa-reply', NULL, NULL, NULL),
(409, 'fa fa-reply-all', NULL, NULL, NULL),
(410, 'fa fa-retweet', NULL, NULL, NULL),
(411, 'fa fa-road', NULL, NULL, NULL),
(412, 'fa fa-rocket', NULL, NULL, NULL),
(413, 'fa fa-rss', NULL, NULL, NULL),
(414, 'fa fa-rss-square', NULL, NULL, NULL),
(415, 'fa fa-search', NULL, NULL, NULL),
(416, 'fa fa-search-minus', NULL, NULL, NULL),
(417, 'fa fa-search-plus', NULL, NULL, NULL),
(418, 'fa fa-send', NULL, NULL, NULL),
(419, 'fa fa-send-o', NULL, NULL, NULL),
(420, 'fa fa-share', NULL, NULL, NULL),
(421, 'fa fa-share-alt', NULL, NULL, NULL),
(422, 'fa fa-share-alt-square', NULL, NULL, NULL),
(423, 'fa fa-share-square', NULL, NULL, NULL),
(424, 'fa fa-share-square-o', NULL, NULL, NULL),
(425, 'fa fa-shield', NULL, NULL, NULL),
(426, 'fa fa-shopping-cart', NULL, NULL, NULL),
(427, 'fa fa-sign-in', NULL, NULL, NULL),
(428, 'fa fa-sign-out', NULL, NULL, NULL),
(429, 'fa fa-signal', NULL, NULL, NULL),
(430, 'fa fa-sitemap', NULL, NULL, NULL),
(431, 'fa fa-sliders', NULL, NULL, NULL),
(432, 'fa fa-smile-o', NULL, NULL, NULL),
(433, 'fa fa-soccer-ball-o', NULL, NULL, NULL),
(434, 'fa fa-sort', NULL, NULL, NULL),
(435, 'fa fa-sort-alpha-asc', NULL, NULL, NULL),
(436, 'fa fa-sort-alpha-desc', NULL, NULL, NULL),
(437, 'fa fa-sort-amount-asc', NULL, NULL, NULL),
(438, 'fa fa-sort-amount-desc', NULL, NULL, NULL),
(439, 'fa fa-sort-asc', NULL, NULL, NULL),
(440, 'fa fa-sort-desc', NULL, NULL, NULL),
(441, 'fa fa-sort-down', NULL, NULL, NULL),
(442, 'fa fa-sort-numeric-asc', NULL, NULL, NULL),
(443, 'fa fa-sort-numeric-desc', NULL, NULL, NULL),
(444, 'fa fa-sort-up', NULL, NULL, NULL),
(445, 'fa fa-space-shuttle', NULL, NULL, NULL),
(446, 'fa fa-spinner', NULL, NULL, NULL),
(447, 'fa fa-spoon', NULL, NULL, NULL),
(448, 'fa fa-square', NULL, NULL, NULL),
(449, 'fa fa-square-o', NULL, NULL, NULL),
(450, 'fa fa-star', NULL, NULL, NULL),
(451, 'fa fa-star-half', NULL, NULL, NULL),
(452, 'fa fa-star-half-empty', NULL, NULL, NULL),
(453, 'fa fa-star-half-full', NULL, NULL, NULL),
(454, 'fa fa-star-half-o', NULL, NULL, NULL),
(455, 'fa fa-star-o', NULL, NULL, NULL),
(456, 'fa fa-suitcase', NULL, NULL, NULL),
(457, 'fa fa-sun-o', NULL, NULL, NULL),
(458, 'fa fa-support', NULL, NULL, NULL),
(459, 'fa fa-tablet', NULL, NULL, NULL),
(460, 'fa fa-tachometer', NULL, NULL, NULL),
(461, 'fa fa-tag', NULL, NULL, NULL),
(462, 'fa fa-tags', NULL, NULL, NULL),
(463, 'fa fa-tasks', NULL, NULL, NULL),
(464, 'fa fa-taxi', NULL, NULL, NULL),
(465, 'fa fa-terminal', NULL, NULL, NULL),
(466, 'fa fa-thumb-tack', NULL, NULL, NULL),
(467, 'fa fa-thumbs-down', NULL, NULL, NULL),
(468, 'fa fa-thumbs-o-down', NULL, NULL, NULL),
(469, 'fa fa-thumbs-o-up', NULL, NULL, NULL),
(470, 'fa fa-thumbs-up', NULL, NULL, NULL),
(471, 'fa fa-ticket', NULL, NULL, NULL),
(472, 'fa fa-times', NULL, NULL, NULL),
(473, 'fa fa-times-circle', NULL, NULL, NULL),
(474, 'fa fa-times-circle-o', NULL, NULL, NULL),
(475, 'fa fa-tint', NULL, NULL, NULL),
(476, 'fa fa-toggle-down', NULL, NULL, NULL),
(477, 'fa fa-toggle-left', NULL, NULL, NULL),
(478, 'fa fa-toggle-off', NULL, NULL, NULL),
(479, 'fa fa-toggle-on', NULL, NULL, NULL),
(480, 'fa fa-toggle-right', NULL, NULL, NULL),
(481, 'fa fa-toggle-up', NULL, NULL, NULL),
(482, 'fa fa-trash', NULL, NULL, NULL),
(483, 'fa fa-trash-o', NULL, NULL, NULL),
(484, 'fa fa-tree', NULL, NULL, NULL),
(485, 'fa fa-trophy', NULL, NULL, NULL),
(486, 'fa fa-truck', NULL, NULL, NULL),
(487, 'fa fa-tty', NULL, NULL, NULL),
(488, 'fa fa-umbrella', NULL, NULL, NULL),
(489, 'fa fa-university', NULL, NULL, NULL),
(490, 'fa fa-unlock', NULL, NULL, NULL),
(491, 'fa fa-unlock-alt', NULL, NULL, NULL),
(492, 'fa fa-unsorted', NULL, NULL, NULL),
(493, 'fa fa-upload', NULL, NULL, NULL),
(494, 'fa fa-user', NULL, NULL, NULL),
(495, 'fa fa-users', NULL, NULL, NULL),
(496, 'fa fa-video-camera', NULL, NULL, NULL),
(497, 'fa fa-volume-down', NULL, NULL, NULL),
(498, 'fa fa-volume-off', NULL, NULL, NULL),
(499, 'fa fa-volume-up', NULL, NULL, NULL),
(500, 'fa fa-warning', NULL, NULL, NULL),
(501, 'fa fa-wheelchair', NULL, NULL, NULL),
(502, 'fa fa-wifi', NULL, NULL, NULL),
(503, 'fa fa-wrench', NULL, NULL, NULL),
(504, 'fa fa-file', NULL, NULL, NULL),
(505, 'fa fa-file-archive-o', NULL, NULL, NULL),
(506, 'fa fa-file-audio-o', NULL, NULL, NULL),
(507, 'fa fa-file-code-o', NULL, NULL, NULL),
(508, 'fa fa-file-excel-o', NULL, NULL, NULL),
(509, 'fa fa-file-image-o', NULL, NULL, NULL),
(510, 'fa fa-file-movie-o', NULL, NULL, NULL),
(511, 'fa fa-file-o', NULL, NULL, NULL),
(512, 'fa fa-file-pdf-o', NULL, NULL, NULL),
(513, 'fa fa-file-photo-o', NULL, NULL, NULL),
(514, 'fa fa-file-picture-o', NULL, NULL, NULL),
(515, 'fa fa-file-powerpoint-o', NULL, NULL, NULL),
(516, 'fa fa-file-sound-o', NULL, NULL, NULL),
(517, 'fa fa-file-text', NULL, NULL, NULL),
(518, 'fa fa-file-text-o', NULL, NULL, NULL),
(519, 'fa fa-file-video-o', NULL, NULL, NULL),
(520, 'fa fa-file-word-o', NULL, NULL, NULL),
(521, 'fa fa-file-zip-o', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hash_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ext` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` double(15,3) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `hash_name`, `ext`, `width`, `height`, `size`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '360x360.png', 'ojgz22awyqf3_image_360x360.png', 'png', '250', '250', 6834.000, '2018-10-26 06:31:00', '2018-10-26 06:31:00', NULL),
(2, '360x360.png', 'ept1xgjr5cof_image_360x360.png', 'png', '250', '250', 2279.000, '2018-10-26 06:31:55', '2018-10-26 06:31:55', NULL),
(3, 'Screenshot_9.png', '7fbgrdin465u_image_Screenshot_9.png', 'png', '200', '200', 71772.000, '2018-11-03 16:16:50', '2018-11-03 16:43:38', '2018-11-03 16:43:38'),
(4, 'Screenshot_10.png', 'cnkiuaukohtl_image_Screenshot_10.png', 'png', '200', '200', 35732.000, '2018-11-03 16:39:32', '2018-11-03 16:44:18', '2018-11-03 16:44:18'),
(5, 'Screenshot_11.png', 'h2rsknadgx7i_image_Screenshot_11.png', 'png', '200', '200', 68371.000, '2018-11-03 16:40:47', '2018-11-03 16:44:56', '2018-11-03 16:44:56'),
(6, 'Screenshot_9.png', 'smqywxtyramq_image_Screenshot_9.png', 'png', '1200', '800', 882643.000, '2018-11-03 16:43:42', '2018-11-03 16:59:02', '2018-11-03 16:59:02'),
(7, 'Screenshot_10.png', 'lcp2bmocv0j3_image_Screenshot_10.png', 'png', '1200', '800', 406059.000, '2018-11-03 16:44:22', '2018-11-03 17:25:02', '2018-11-03 17:25:02'),
(8, 'Screenshot_11.png', 'ga2hllxstbtq_image_Screenshot_11.png', 'png', '1200', '800', 1101675.000, '2018-11-03 16:45:01', '2018-11-03 17:25:39', '2018-11-03 17:25:39'),
(9, 'Screenshot_12.png', 'xqph9hezoupo_image_Screenshot_12.png', 'png', '1200', '800', 234513.000, '2018-11-03 16:46:04', '2018-11-03 17:26:10', '2018-11-03 17:26:10'),
(10, 'Screenshot_13.png', '87rurf7a00oi_image_Screenshot_13.png', 'png', '1200', '800', 621869.000, '2018-11-03 16:47:28', '2018-11-03 17:28:16', '2018-11-03 17:28:16'),
(11, 'Screenshot_14.png', 'yvvkvkro8h5z_image_Screenshot_14.png', 'png', '1200', '800', 635238.000, '2018-11-03 16:48:42', '2018-11-03 16:48:42', NULL),
(12, 'Screenshot_15.png', 'hvc1endug0qg_image_Screenshot_15.png', 'png', '1200', '800', 394846.000, '2018-11-03 16:49:43', '2018-11-03 16:49:43', NULL),
(13, 'Screenshot_9.png', 'o9fsejldnhzo_image_Screenshot_9.png', 'png', '974', '1189', 1193317.000, '2018-11-03 17:24:45', '2018-11-03 17:24:45', NULL),
(14, 'Screenshot_10.png', 'uq7tm4esmxwa_image_Screenshot_10.png', 'png', '569', '392', 55466.000, '2018-11-03 17:25:24', '2018-11-03 17:25:24', NULL),
(15, 'Screenshot_11.png', 'okwlpee7cvnd_image_Screenshot_11.png', 'png', '1298', '522', 881349.000, '2018-11-03 17:25:58', '2018-11-03 17:25:58', NULL),
(16, 'Screenshot_12.png', 'fzz28dtimbtf_image_Screenshot_12.png', 'png', '1283', '392', 66073.000, '2018-11-03 17:27:33', '2018-11-03 17:27:33', NULL),
(17, 'Screenshot_13.png', '1am4ve6q6hqv_image_Screenshot_13.png', 'png', '1210', '450', 232032.000, '2018-11-03 17:28:36', '2018-11-03 17:28:36', NULL),
(18, 'Screenshot_14.png', 'wqzlk5nzwnee_image_Screenshot_14.png', 'png', '880', '405', 283918.000, '2018-11-03 17:29:12', '2018-11-03 17:29:12', NULL),
(19, 'Screenshot_15.png', 'kmwgb2jcb5nh_image_Screenshot_15.png', 'png', '517', '428', 62032.000, '2018-11-03 17:29:46', '2018-11-03 17:29:46', NULL),
(20, 'Screenshot_18.png', 'vy9djrqf3k9d_image_Screenshot_18.png', 'png', '690', '434', 507006.000, '2018-11-03 17:32:24', '2018-11-03 17:32:24', NULL),
(21, 'Screenshot_19.png', 'zswenla1bbv4_image_Screenshot_19.png', 'png', '385', '351', 21401.000, '2018-11-03 17:34:23', '2018-11-03 17:34:23', NULL),
(22, 'Screenshot_20.png', 'piabma80txel_image_Screenshot_20.png', 'png', '579', '429', 433688.000, '2018-11-03 17:36:36', '2018-11-03 17:36:36', NULL),
(23, 'Screenshot_21.png', 'xxn3g2rczgv4_image_Screenshot_21.png', 'png', '647', '511', 50556.000, '2018-11-03 17:38:58', '2018-11-03 17:38:58', NULL),
(24, 'Screenshot_22.png', 'ln2omuh0ehgy_image_Screenshot_22.png', 'png', '787', '522', 31441.000, '2018-11-03 17:43:03', '2018-11-03 17:43:03', NULL),
(25, 'Screenshot_23.png', 'mzflix5y3e0z_image_Screenshot_23.png', 'png', '384', '411', 23396.000, '2018-11-03 17:46:45', '2018-11-03 17:46:45', NULL),
(26, 'Screenshot_24.png', 'rz5g2nzdu21f_image_Screenshot_24.png', 'png', '1159', '388', 243860.000, '2018-11-03 17:47:45', '2018-11-03 17:47:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_alt_langs`
--

CREATE TABLE `image_alt_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_lab`
--

CREATE TABLE `image_lab` (
  `id` int(10) UNSIGNED NOT NULL,
  `lab_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image_partner`
--

CREATE TABLE `image_partner` (
  `id` int(10) UNSIGNED NOT NULL,
  `partner_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `image_type` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_titles`
--

CREATE TABLE `job_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_title_name_langs`
--

CREATE TABLE `job_title_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_title_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `image_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_description_langs`
--

CREATE TABLE `lab_description_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lab_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_name_langs`
--

CREATE TABLE `lab_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lab_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `langs`
--

CREATE TABLE `langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `native` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `script` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `regional` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `is_default` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `lang_code`, `name`, `native`, `script`, `regional`, `image_id`, `is_default`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'en', 'English', 'English', 'Latn', 'en_GB', 263, 1, NULL, '2017-06-15 19:35:40', '2017-11-09 19:08:19'),
(2, 'ar', 'Arabic', 'العربية', 'Arab', 'ar_AE', 264, 0, NULL, '2017-06-15 19:35:51', '2017-11-10 11:57:09');

-- --------------------------------------------------------

--
-- Table structure for table `language_tables`
--

CREATE TABLE `language_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namespace` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `language_tables`
--

INSERT INTO `language_tables` (`id`, `table_id`, `table_name`, `namespace`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'attribute_name_langs', 'Modules\\Utilities\\Entities\\LangModels', '2017-12-20 02:04:01', '2017-12-20 02:04:01', NULL),
(2, 2, 'block_detail_btn_langs', 'Modules\\Utilities\\Entities\\LangModels', '2017-12-20 02:13:17', '2017-12-20 02:13:17', NULL),
(3, 2, 'block_detail_text_langs', 'Modules\\Utilities\\Entities\\LangModels', '2017-12-20 02:13:36', '2017-12-20 02:13:36', NULL),
(4, 2, 'block_detail_title_langs', 'Modules\\Utilities\\Entities\\LangModels', '2017-12-20 02:14:16', '2017-12-20 02:14:16', NULL),
(5, 3, 'block_name_langs', 'Modules\\Utilities\\Entities\\LangModels', '2017-12-20 02:14:57', '2017-12-20 02:14:57', NULL),
(6, 5, 'contact_address_langs', 'Modules\\Utilities\\Entities\\LangModels', '2017-12-21 19:38:04', '2017-12-21 19:38:04', NULL),
(7, 9, 'course_name_langs', 'Modules\\Admin\\Entities\\LangModels', '2018-01-03 15:47:29', '2018-01-03 15:47:29', NULL),
(8, 9, 'course_description_langs', 'Modules\\Admin\\Entities\\LangModels', '2018-01-03 15:47:41', '2018-01-03 15:47:41', NULL),
(9, 14, 'faculty_name_langs', 'Modules\\Admin\\Entities\\LangModels', '2018-01-03 15:48:13', '2018-01-03 15:48:13', NULL),
(10, 32, 'page_name_langs', 'Modules\\Utilities\\Entities\\LangModels', '2018-01-03 15:49:05', '2018-01-03 15:49:05', NULL),
(11, 35, 'person_name_langs', 'Modules\\Admin\\Entities\\LangModels', '2018-01-03 15:49:53', '2018-01-03 15:49:53', NULL),
(12, 35, 'person_summary_langs', 'Modules\\Admin\\Entities\\LangModels', '2018-01-03 15:50:08', '2018-01-03 15:50:08', NULL),
(13, 12, 'degree_name_langs', 'Modules\\Admin\\Entities\\LangModels', '2018-01-03 15:51:20', '2018-01-03 15:51:20', NULL),
(14, 50, 'university_office_name_langs', 'Modules\\Admin\\Entities\\LangModels', '2018-01-03 16:07:51', '2018-01-03 16:07:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ltm_translations`
--

CREATE TABLE `ltm_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_lists`
--

CREATE TABLE `menu_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_lists`
--

INSERT INTO `menu_lists` (`id`, `is_default`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2018-10-26 06:52:29', '2018-10-26 10:41:52', NULL),
(2, 0, '2018-10-26 10:43:56', '2018-10-26 10:43:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_list_name_langs`
--

CREATE TABLE `menu_list_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_list_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_list_name_langs`
--

INSERT INTO `menu_list_name_langs` (`id`, `menu_list_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Main Menu', '2018-10-26 06:52:29', '2018-10-26 06:52:29', NULL),
(2, 1, 2, 'القائمة الرئيسية', '2018-10-26 06:52:29', '2018-10-26 06:52:29', NULL),
(3, 2, 1, 'Faculty 1\'s menu', '2018-10-26 10:43:56', '2018-10-26 10:43:56', NULL),
(4, 2, 2, 'قائمة الكلية الاولى', '2018-10-26 10:43:56', '2018-10-26 10:43:56', NULL);

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
(1, '2014_04_02_193005_create_translations_table', 1),
(2, '2017_05_03_161514_create_position_table', 1),
(3, '2017_05_03_161526_create_job_title_table', 1),
(4, '2017_05_03_161652_create_job_title_name_langs_table', 1),
(5, '2017_05_03_161704_create_position_name_langs_table', 1),
(6, '2017_05_03_191458_create_course_table', 1),
(7, '2017_05_03_191520_create_course_name_lang_table', 1),
(8, '2017_05_03_223323_create_prerequisite_groups_table', 1),
(9, '2017_05_04_221342_create_faculty_table', 1),
(10, '2017_05_04_221515_create_faculty_name_langs_table', 1),
(11, '2017_05_04_221555_create_degree_table', 1),
(12, '2017_05_04_221622_create_degree_name_langs_table', 1),
(13, '2017_05_04_222051_create_department_name_langs_table', 1),
(14, '2017_05_04_222114_create_department_table', 1),
(15, '2017_05_07_182652_create_people_table', 1),
(16, '2017_05_07_182923_create_person_name_langs_table', 1),
(17, '2017_05_07_183002_create_person_summary_langs_table', 1),
(18, '2017_05_13_170752_create_contact_table', 1),
(19, '2017_05_13_182059_create_contact_social_network_table', 1),
(20, '2017_05_17_183322_create_lab_description_lang_table', 1),
(21, '2017_05_17_183322_create_lab_name_lang_table', 1),
(22, '2017_06_15_220018_create_semester_name_lang_table', 1),
(23, '2017_06_15_220018_create_semester_table', 1),
(24, '2017_06_15_234238_create_study_year_name_lang_table', 1),
(25, '2017_06_15_234238_create_study_year_table', 1),
(26, '2017_06_16_003741_create_faculty_study_year_table', 1),
(27, '2017_07_05_112707_create_prerequisite_table', 1),
(28, '2017_08_03_222304_create_hierarchies_table', 1),
(29, '2017_08_03_222559_create_hierarchy_name_langs_table', 1),
(30, '2017_08_04_162744_create_hierarchy_types_table', 1),
(31, '2017_08_04_162936_create_hierarchy_type_name_langs_table', 1),
(32, '2017_08_24_185136_create_control_menus_table', 1),
(33, '2017_08_24_185136_create_control_pages_table', 1),
(34, '2017_08_24_185136_create_gender_name_langs_table', 1),
(35, '2017_08_24_185136_create_genders_table', 1),
(36, '2017_08_24_185136_create_langs_table', 1),
(37, '2017_08_24_185136_create_page_name_langs_table', 1),
(38, '2017_08_24_185136_create_pages_table', 1),
(39, '2017_08_24_185136_create_password_resets_table', 1),
(40, '2017_08_24_185136_create_setting_name_langs_table', 1),
(41, '2017_08_24_185136_create_settings_table', 1),
(42, '2017_08_24_185136_create_social_network_name_langs_table', 1),
(43, '2017_08_24_185136_create_social_networks_table', 1),
(44, '2017_08_24_185136_create_user_name_langs_table', 1),
(45, '2017_08_24_185136_create_user_summary_langs_table', 1),
(46, '2017_08_24_185136_create_users_table', 1),
(47, '2017_09_13_195418_create_image_table', 1),
(48, '2017_09_13_200242_create_image_alt_langs_table', 1),
(49, '2017_09_14_200043_create_images_lab_table', 1),
(50, '2017_09_25_180207_create_site_menu_table', 1),
(51, '2017_09_25_180710_create_site_menu_name_langs_table', 1),
(52, '2017_09_28_190355_create_attribute_name_langs_table', 1),
(53, '2017_09_28_190355_create_attributes_table', 1),
(54, '2017_09_28_190355_create_block_detail_text_langs_table', 1),
(55, '2017_09_28_190355_create_icons_table', 1),
(56, '2017_09_28_190355_create_module_attribute_table', 1),
(57, '2017_09_28_190355_create_module_name_langs_table', 1),
(58, '2017_09_28_190355_create_modules_table', 1),
(59, '2017_09_29_101410_create_labs_table', 1),
(60, '2017_10_03_152710_create_university_office_table', 1),
(61, '2017_10_03_152908_create_university_office_name_langs_table', 1),
(62, '2017_10_03_190446_create_contact_address_langs_table', 1),
(63, '2017_10_03_190948_create_addresses_table', 1),
(64, '2017_10_03_191207_create_addresses_address_langs_table', 1),
(65, '2017_10_03_191400_create_phone_numbers_table', 1),
(66, '2017_10_25_184743_create_course_description_langs_table', 1),
(67, '2017_11_03_183226_create_partner_table', 1),
(68, '2017_11_03_183538_create_partner_name_langs_table', 1),
(69, '2017_11_03_183755_create_partner_description_langs_table', 1),
(70, '2017_11_03_213349_create_image_partner_table', 1),
(71, '2017_11_10_180549_create_block_detail_btn_langs_table', 1),
(72, '2017_11_10_180549_create_block_detail_title_langs_table', 1),
(73, '2017_11_10_180549_create_block_details_table', 1),
(74, '2017_11_10_180549_create_block_name_langs_table', 1),
(75, '2017_11_10_180549_create_blocks_table', 1),
(76, '2017_11_10_180549_create_custom_module_attribute_value_multi_langs_table', 1),
(77, '2017_11_10_180549_create_custom_module_attribute_values_table', 1),
(78, '2017_11_10_180549_create_custom_module_name_langs_table', 1),
(79, '2017_11_10_180549_create_custom_modules_table', 1),
(80, '2017_11_10_180549_create_slider_detail_btn_langs_table', 1),
(81, '2017_11_10_180549_create_slider_detail_head_langs_table', 1),
(82, '2017_11_10_180549_create_slider_detail_text_langs_table', 1),
(83, '2017_11_10_180549_create_slider_detail_title_langs_table', 1),
(84, '2017_11_10_180549_create_slider_details_table', 1),
(85, '2017_11_10_180549_create_slider_name_langs_table', 1),
(86, '2017_11_10_180549_create_sliders_table', 1),
(87, '2017_11_10_180549_create_step_text_langs_table', 1),
(88, '2017_11_10_180549_create_step_title_langs_table', 1),
(89, '2017_11_10_180549_create_steps_table', 1),
(90, '2017_11_10_180549_create_text_card_title_langs_table', 1),
(91, '2017_11_10_180549_create_text_cards_table', 1),
(92, '2017_11_10_180549_create_vertical_slider_detail_small_text_langs_table', 1),
(93, '2017_11_10_180549_create_vertical_slider_detail_sub_text_langs_table', 1),
(94, '2017_11_10_180549_create_vertical_slider_detail_text_langs_table', 1),
(95, '2017_11_10_180549_create_vertical_slider_details_table', 1),
(96, '2017_11_10_180549_create_vertical_slider_name_langs_table', 1),
(97, '2017_11_10_180549_create_vertical_sliders_table', 1),
(98, '2017_12_22_115701_create_language_tables_table', 1),
(99, '2018_03_14_103655_create_permission_tables', 1),
(100, '2018_03_14_110645_create_permission_name_langs_table', 1),
(101, '2018_03_14_110645_create_role_name_langs_table', 1),
(102, '2018_03_30_174456_create_builder_pages_table', 1),
(103, '2018_03_31_170620_create_galleries_table', 1),
(104, '2018_03_31_170620_create_gallery_images_table', 1),
(105, '2018_03_31_170620_create_gallery_title_langs_table', 1),
(106, '2018_04_10_170358_create_table_name_langs_table', 1),
(107, '2018_04_10_170358_create_tables_table', 1),
(108, '2018_05_21_200657_create_course_content_langs_table', 1),
(109, '2018_05_22_054654_create_person_experience_langs_table', 1),
(110, '2018_05_26_180718_create_news_content_langs_table', 1),
(111, '2018_05_26_180718_create_news_description_langs_table', 1),
(112, '2018_05_26_180718_create_news_table', 1),
(113, '2018_05_26_180718_create_news_title_langs_table', 1),
(114, '2018_05_26_180718_create_status_name_langs_table', 1),
(115, '2018_05_26_180718_create_statuses_table', 1),
(116, '2018_07_28_201545_create_seo_article_section_langs_table', 1),
(117, '2018_07_28_201545_create_seo_article_tag_langs_table', 1),
(118, '2018_07_28_201545_create_seo_book_tag_langs_table', 1),
(119, '2018_07_28_201545_create_seo_description_langs_table', 1),
(120, '2018_07_28_201545_create_seo_keyword_langs_table', 1),
(121, '2018_07_28_201545_create_seo_profile_first_name_langs_table', 1),
(122, '2018_07_28_201545_create_seo_profile_last_name_langs_table', 1),
(123, '2018_07_28_201545_create_seo_title_langs_table', 1),
(124, '2018_07_28_201545_create_seos_table', 1),
(125, '2018_10_16_154032_create_menu_lists_table', 1),
(126, '2018_10_16_154211_create_menu_list_name_langs', 1),
(127, '2018_10_29_100744_create_campuses_table', 2),
(128, '2018_10_29_100800_create_campus_name_langs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(1, 'Modules\\Utilities\\Entities\\User', 1),
(2, 'Modules\\Utilities\\Entities\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'Modules\\Utilities\\Entities\\User', 1),
(2, 'Modules\\Utilities\\Entities\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customized` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `image_id`, `code`, `customized`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 13, 'text_editor', '1', '2017-07-22 05:56:29', '2018-11-03 17:24:45', NULL),
(2, 14, 'short_info', '1', '2017-09-30 13:48:36', '2018-11-03 17:25:24', NULL),
(3, NULL, 'section_start', '0', '2017-09-06 13:31:23', '2017-10-16 14:14:07', NULL),
(4, NULL, 'section_end', '0', '2017-09-06 13:31:56', '2017-10-16 14:14:20', NULL),
(5, 15, 'sliders', '1', '2017-09-09 13:10:32', '2018-11-03 17:25:59', NULL),
(6, 16, 'blocks', '1', '2017-09-10 13:22:43', '2018-11-03 17:27:34', NULL),
(7, 17, 'courses_1', '1', '2017-09-13 15:31:27', '2018-11-03 17:28:36', NULL),
(8, 18, 'persons_1', '1', '2017-09-20 15:10:49', '2018-11-03 17:29:12', NULL),
(9, 19, 'vertical_sliders', '1', '2017-09-24 15:39:16', '2018-11-03 17:29:46', NULL),
(10, 20, 'gallery', '1', '2017-09-29 02:12:27', '2018-11-03 17:32:24', NULL),
(11, NULL, 'section_fluid_start', '0', '2017-10-16 13:43:48', '2017-10-16 14:17:32', NULL),
(12, 22, 'small_gallery', '1', '2017-10-16 13:49:39', '2018-11-03 17:36:36', NULL),
(13, 23, 'steps', '1', '2017-10-16 13:50:13', '2018-11-03 17:38:59', NULL),
(14, NULL, 'section_intersect_top', '0', '2017-10-16 13:51:31', '2017-10-16 14:17:44', NULL),
(15, NULL, 'section_intersect_end', '0', '2017-10-16 13:51:54', '2017-10-16 14:17:55', NULL),
(16, 21, 'text_card_1', '1', '2017-10-16 13:52:28', '2018-11-03 17:34:23', NULL),
(17, 24, 'contact_form', '1', NULL, '2018-11-03 17:43:03', NULL),
(18, 25, 'text_card_2', '1', '2017-10-19 14:15:32', '2018-11-03 17:46:45', NULL),
(19, 26, 'person_page', '0', '2017-10-19 14:31:43', '2018-11-03 17:47:46', NULL),
(20, NULL, 'office_page', '0', '2017-10-19 14:44:25', '2017-10-19 14:44:25', NULL),
(21, NULL, 'breadcrumb', '0', '2017-10-19 15:08:24', '2017-10-19 15:08:24', NULL),
(22, NULL, 'university_council', '0', NULL, '2017-10-31 17:56:44', NULL),
(23, NULL, 'trusted_council', '0', NULL, '2017-11-03 03:08:08', NULL),
(24, NULL, 'university_partner', '1', NULL, NULL, NULL),
(25, NULL, 'degrees_table', '0', NULL, '2017-11-17 16:53:27', NULL),
(26, NULL, 'courses_table', '0', NULL, '2017-11-22 16:56:24', NULL),
(27, NULL, 'study_plan', '1', NULL, NULL, NULL),
(28, NULL, 'faculty_instructors', '0', NULL, '2017-12-09 15:46:45', NULL),
(29, NULL, 'university_hierarchy', '1', '2018-03-29 16:43:43', '2018-03-29 16:43:43', NULL),
(30, NULL, 'galleries', '1', '2018-03-31 14:46:23', '2018-03-31 14:46:23', NULL),
(31, NULL, 'courses_list_1', '1', '2018-04-11 15:00:07', '2018-04-11 15:00:21', NULL),
(32, NULL, 'google_map', '1', '2018-04-11 15:58:50', '2018-04-11 15:58:50', NULL),
(33, NULL, 'course_content', '1', '2018-05-20 12:32:54', '2018-05-20 12:32:54', NULL),
(34, NULL, 'labs_list_1', '0', '2018-05-25 09:10:04', '2018-05-26 12:08:18', NULL),
(35, NULL, 'lab_page', '0', '2018-05-26 13:12:53', '2018-05-26 13:19:19', NULL),
(36, NULL, 'offices_list_1', '0', '2018-05-27 12:31:11', '2018-05-27 12:39:03', NULL),
(37, NULL, 'news_list_1', '0', '2018-05-29 12:51:53', '2018-05-29 13:18:10', NULL),
(38, NULL, 'news_page', '0', '2018-06-01 03:46:58', '2018-06-01 03:54:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_attribute`
--

CREATE TABLE `module_attribute` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `attribute_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_attribute`
--

INSERT INTO `module_attribute` (`id`, `module_id`, `attribute_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 1, 2, NULL, NULL, NULL),
(3, 1, 4, NULL, NULL, NULL),
(4, 3, 1, NULL, NULL, NULL),
(5, 4, 1, NULL, NULL, NULL),
(6, 5, 1, NULL, NULL, NULL),
(7, 5, 5, NULL, NULL, NULL),
(8, 6, 1, NULL, NULL, NULL),
(9, 6, 6, NULL, NULL, NULL),
(10, 7, 1, NULL, NULL, NULL),
(11, 7, 3, NULL, NULL, NULL),
(12, 7, 2, NULL, NULL, NULL),
(13, 7, 8, NULL, NULL, NULL),
(14, 7, 7, NULL, NULL, NULL),
(15, 8, 1, NULL, NULL, NULL),
(16, 8, 3, NULL, NULL, NULL),
(17, 8, 2, NULL, NULL, NULL),
(18, 8, 8, NULL, NULL, NULL),
(19, 8, 9, NULL, NULL, NULL),
(20, 9, 1, NULL, NULL, NULL),
(21, 9, 12, NULL, NULL, NULL),
(22, 9, 10, NULL, NULL, NULL),
(23, 9, 11, NULL, NULL, NULL),
(24, 9, 2, NULL, NULL, NULL),
(25, 9, 8, NULL, NULL, NULL),
(26, 10, 1, NULL, NULL, NULL),
(27, 10, 2, NULL, NULL, NULL),
(28, 10, 11, NULL, NULL, NULL),
(29, 10, 10, NULL, NULL, NULL),
(30, 10, 13, NULL, NULL, NULL),
(31, 2, 2, NULL, NULL, NULL),
(32, 2, 1, NULL, NULL, NULL),
(33, 2, 10, NULL, NULL, NULL),
(34, 2, 4, NULL, NULL, NULL),
(35, 2, 16, NULL, NULL, NULL),
(36, 11, 1, NULL, NULL, NULL),
(37, 12, 1, NULL, NULL, NULL),
(38, 12, 2, NULL, NULL, NULL),
(39, 12, 13, NULL, NULL, NULL),
(45, 14, 1, NULL, NULL, NULL),
(46, 15, 1, NULL, NULL, NULL),
(47, 16, 1, NULL, NULL, NULL),
(48, 16, 2, NULL, NULL, NULL),
(51, 17, 1, NULL, NULL, NULL),
(52, 17, 2, NULL, NULL, NULL),
(53, 17, 10, NULL, NULL, NULL),
(54, 17, 4, NULL, NULL, NULL),
(56, 16, 18, NULL, NULL, NULL),
(57, 16, 8, NULL, NULL, NULL),
(58, 18, 1, NULL, NULL, NULL),
(59, 18, 2, NULL, NULL, NULL),
(60, 18, 18, NULL, NULL, NULL),
(61, 18, 8, NULL, NULL, NULL),
(62, 18, 10, NULL, NULL, NULL),
(63, 19, 1, NULL, NULL, NULL),
(64, 19, 2, NULL, NULL, NULL),
(65, 20, 1, NULL, NULL, NULL),
(66, 21, 1, NULL, NULL, NULL),
(67, 7, 10, NULL, NULL, NULL),
(68, 13, 1, NULL, NULL, NULL),
(69, 13, 2, NULL, NULL, NULL),
(70, 13, 10, NULL, NULL, NULL),
(71, 13, 4, NULL, NULL, NULL),
(72, 13, 17, NULL, NULL, NULL),
(73, 8, 10, NULL, NULL, NULL),
(74, 22, 1, NULL, NULL, NULL),
(75, 22, 2, NULL, NULL, NULL),
(76, 23, 1, NULL, NULL, NULL),
(77, 23, 2, NULL, NULL, NULL),
(78, 24, 1, NULL, NULL, NULL),
(79, 24, 2, NULL, NULL, NULL),
(80, 25, 1, NULL, NULL, NULL),
(81, 25, 2, NULL, NULL, NULL),
(82, 26, 1, NULL, NULL, NULL),
(83, 26, 2, NULL, NULL, NULL),
(84, 27, 1, NULL, NULL, NULL),
(85, 27, 2, NULL, NULL, NULL),
(86, 28, 1, NULL, NULL, NULL),
(87, 28, 2, NULL, NULL, NULL),
(88, 29, 2, NULL, NULL, NULL),
(89, 29, 20, NULL, NULL, NULL),
(90, 29, 1, NULL, NULL, NULL),
(91, 30, 1, NULL, NULL, NULL),
(92, 30, 3, NULL, NULL, NULL),
(93, 30, 2, NULL, NULL, NULL),
(94, 30, 21, NULL, NULL, NULL),
(95, 31, 1, NULL, NULL, NULL),
(96, 31, 2, NULL, NULL, NULL),
(97, 31, 8, NULL, NULL, NULL),
(98, 32, 1, NULL, NULL, NULL),
(99, 32, 2, NULL, NULL, NULL),
(100, 32, 22, NULL, NULL, NULL),
(101, 33, 1, NULL, NULL, NULL),
(102, 33, 2, NULL, NULL, NULL),
(103, 33, 24, NULL, NULL, NULL),
(104, 34, 1, NULL, NULL, NULL),
(105, 34, 2, NULL, NULL, NULL),
(106, 35, 1, NULL, NULL, NULL),
(107, 35, 2, NULL, NULL, NULL),
(108, 36, 1, NULL, NULL, NULL),
(109, 36, 2, NULL, NULL, NULL),
(110, 37, 1, NULL, NULL, NULL),
(111, 37, 2, NULL, NULL, NULL),
(112, 38, 1, NULL, NULL, NULL),
(113, 38, 2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_description_langs`
--

CREATE TABLE `module_description_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(512) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_description_langs`
--

INSERT INTO `module_description_langs` (`id`, `module_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 1, 1, 'محرر نصوص عني', '2018-11-03 16:01:26', '2018-11-03 16:05:06', NULL),
(3, 1, 2, 'Rich Text Editor', '2018-11-03 16:01:26', '2018-11-03 16:05:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `module_name_langs`
--

CREATE TABLE `module_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `module_name_langs`
--

INSERT INTO `module_name_langs` (`id`, `module_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 1, 1, 'Text Editor', '2017-07-22 05:56:29', '2017-07-22 05:56:29', NULL),
(4, 1, 2, 'محرر نصوص', '2017-07-22 05:56:29', '2017-07-22 05:56:29', NULL),
(9, 3, 1, 'Section Start', '2017-09-06 14:20:58', '2017-09-06 14:20:58', NULL),
(10, 3, 2, 'Section Start', '2017-09-06 14:20:58', '2017-09-06 14:20:58', NULL),
(11, 4, 1, 'Section End', '2017-09-06 14:21:13', '2017-09-06 14:21:13', NULL),
(12, 4, 2, 'Section End', '2017-09-06 14:21:13', '2017-09-06 14:21:13', NULL),
(13, 5, 1, 'Sliders', '2017-09-09 13:10:32', '2017-09-09 13:10:32', NULL),
(14, 5, 2, 'عارض شرائح', '2017-09-09 13:10:32', '2017-09-09 13:10:32', NULL),
(15, 6, 1, 'Blocks', '2017-09-10 13:22:44', '2017-09-10 13:22:44', NULL),
(16, 6, 2, 'الكتل', '2017-09-10 13:22:44', '2017-09-10 13:22:44', NULL),
(17, 7, 1, 'Courses Card #1', '2017-09-13 15:31:27', '2017-09-13 15:31:27', NULL),
(18, 7, 2, 'طباقة مقررات #1', '2017-09-13 15:31:27', '2017-09-13 15:31:27', NULL),
(19, 8, 1, 'Persons Card #1', '2017-09-20 15:10:49', '2017-09-20 15:10:49', NULL),
(20, 8, 2, 'بطاقة اشخاص #1', '2017-09-20 15:10:49', '2017-09-20 15:10:49', NULL),
(21, 9, 1, 'Vertical Sliders', '2017-09-24 15:39:16', '2017-09-24 15:39:16', NULL),
(22, 9, 2, 'شرائح افقيه', '2017-09-24 15:39:16', '2017-09-24 15:39:16', NULL),
(23, 10, 1, 'Gallery', '2017-09-29 02:12:27', '2017-09-29 02:12:27', NULL),
(24, 10, 2, 'معرض صور', '2017-09-29 02:12:27', '2017-09-29 02:12:27', NULL),
(25, 2, 1, 'Short Info', '2017-09-30 13:48:37', '2017-09-30 13:48:37', NULL),
(26, 2, 2, 'معلومات قصير', '2017-09-30 13:48:37', '2017-09-30 13:48:37', NULL),
(41, 11, 1, 'section Fluid Start', '2017-10-16 13:43:49', '2017-10-16 13:43:49', NULL),
(42, 11, 2, 'section Fluid Start', '2017-10-16 13:43:49', '2017-10-16 13:43:49', NULL),
(43, 12, 1, 'Small Gallery', '2017-10-16 13:49:39', '2017-10-16 13:49:39', NULL),
(44, 12, 2, 'معرض صور صغير', '2017-10-16 13:49:39', '2017-10-16 13:49:39', NULL),
(45, 13, 1, 'Steps', '2017-10-16 13:50:13', '2017-10-16 13:50:13', NULL),
(46, 13, 2, 'خطوات', '2017-10-16 13:50:13', '2017-10-16 13:50:13', NULL),
(47, 14, 1, 'Section Intersect Top', '2017-10-16 13:51:31', '2017-10-16 13:51:31', NULL),
(48, 14, 2, 'Section Intersect Top', '2017-10-16 13:51:31', '2017-10-16 13:51:31', NULL),
(49, 15, 1, 'Section Intersect End', '2017-10-16 13:51:54', '2017-10-16 13:51:54', NULL),
(50, 15, 2, 'Section Intersect End', '2017-10-16 13:51:54', '2017-10-16 13:51:54', NULL),
(51, 16, 1, 'Text Card #1', '2017-10-16 13:52:28', '2017-10-16 13:52:28', NULL),
(52, 16, 2, 'Text Card #1', '2017-10-16 13:52:28', '2017-10-16 13:52:28', NULL),
(53, 17, 1, 'Contact Form', '2017-10-16 15:01:45', '2017-10-16 15:01:45', NULL),
(54, 17, 2, 'فورم الاتصال', '2017-10-16 15:01:45', '2017-10-16 15:01:45', NULL),
(55, 18, 1, 'Text Card #2', '2017-10-19 14:15:32', '2017-10-19 14:15:32', NULL),
(56, 18, 2, 'Text Card #2', '2017-10-19 14:15:33', '2017-10-19 14:15:33', NULL),
(57, 19, 1, 'Person Page', '2017-10-19 14:31:43', '2017-10-19 14:31:43', NULL),
(58, 19, 2, 'Person Page', '2017-10-19 14:31:43', '2017-10-19 14:31:43', NULL),
(59, 20, 1, 'Office Page', '2017-10-19 14:44:25', '2017-10-19 14:44:25', NULL),
(60, 20, 2, 'Office Page', '2017-10-19 14:44:25', '2017-10-19 14:44:25', NULL),
(61, 21, 1, 'Breadcrumb', '2017-10-19 15:08:25', '2017-10-19 15:08:25', NULL),
(62, 21, 2, 'Breadcrumb', '2017-10-19 15:08:25', '2017-10-19 15:08:25', NULL),
(63, 22, 1, 'University Council', '2017-10-31 17:45:45', '2017-10-31 17:45:45', NULL),
(64, 22, 2, 'مجلس الجامعة', '2017-10-31 17:45:45', '2017-10-31 17:45:45', NULL),
(65, 23, 1, 'Trusted Council', '2017-11-03 02:54:05', '2017-11-03 02:54:05', NULL),
(66, 23, 2, 'مجلس الامناء', '2017-11-03 02:54:05', '2017-11-03 02:54:05', NULL),
(67, 24, 1, 'University Partner', '2017-11-05 17:35:03', '2017-11-05 17:35:03', NULL),
(68, 24, 2, 'الشركاء', '2017-11-05 17:35:03', '2017-11-05 17:35:03', NULL),
(69, 25, 1, 'Degrees Table', '2017-11-17 16:45:14', '2017-11-17 16:45:14', NULL),
(70, 25, 2, 'جدول الاختصاصات', '2017-11-17 16:45:14', '2017-11-17 16:45:14', NULL),
(71, 26, 1, 'Courses Table', '2017-11-22 16:40:58', '2017-11-22 16:40:58', NULL),
(72, 26, 2, 'جدول الامقررات', '2017-11-22 16:40:58', '2017-11-22 16:40:58', NULL),
(73, 27, 1, 'Study Plan', '2017-12-01 15:26:56', '2017-12-01 15:26:56', NULL),
(74, 27, 2, 'الخطة الدرسية', '2017-12-01 15:26:56', '2017-12-01 15:26:56', NULL),
(75, 28, 1, 'Faculty Instructors', '2017-12-09 15:37:57', '2017-12-09 15:37:57', NULL),
(76, 28, 2, 'مدرسو الكلية', '2017-12-09 15:37:57', '2017-12-09 15:37:57', NULL),
(77, 29, 1, 'University Hierarchy', '2018-03-29 16:43:43', '2018-03-29 18:05:26', NULL),
(78, 29, 2, 'هيكلية الجامعة', '2018-03-29 16:43:43', '2018-03-29 16:43:43', NULL),
(79, 30, 1, 'Galleries', '2018-03-31 14:46:23', '2018-03-31 14:46:23', NULL),
(80, 30, 2, 'معارض الصور', '2018-03-31 14:46:23', '2018-03-31 14:46:23', NULL),
(81, 31, 1, 'Courses List #1', '2018-04-11 15:00:07', '2018-04-11 15:00:07', NULL),
(82, 31, 2, 'قائمة الكتب #1', '2018-04-11 15:00:07', '2018-04-11 15:00:07', NULL),
(83, 32, 1, 'Google Map', '2018-04-11 15:58:50', '2018-04-11 15:58:50', NULL),
(84, 32, 2, 'خريطة', '2018-04-11 15:58:50', '2018-04-11 15:58:50', NULL),
(85, 33, 1, 'Course Content', '2018-05-20 12:32:54', '2018-05-20 12:32:54', NULL),
(86, 33, 2, 'محتوى المقرر', '2018-05-20 12:32:54', '2018-05-20 12:32:54', NULL),
(87, 34, 1, 'Labs List', '2018-05-25 09:10:04', '2018-05-25 09:10:04', NULL),
(88, 34, 2, 'قائمة المخابر', '2018-05-25 09:10:04', '2018-05-25 09:10:04', NULL),
(89, 35, 1, 'Lab Page', '2018-05-26 13:12:53', '2018-05-26 13:12:53', NULL),
(90, 35, 2, 'صفحة المخبر', '2018-05-26 13:12:53', '2018-05-26 13:12:53', NULL),
(91, 36, 1, 'Office List #1', '2018-05-27 12:31:11', '2018-05-27 12:32:06', NULL),
(92, 36, 2, 'قائمة المكاتب', '2018-05-27 12:31:11', '2018-05-27 12:31:11', NULL),
(93, 37, 1, 'News List #1', '2018-05-29 12:51:54', '2018-05-29 12:51:54', NULL),
(94, 37, 2, 'قائمة الاخبار #1', '2018-05-29 12:51:54', '2018-05-29 12:51:54', NULL),
(95, 38, 1, 'News Page', '2018-06-01 03:46:58', '2018-06-01 03:46:58', NULL),
(96, 38, 2, 'محتوى الخبر', '2018-06-01 03:46:58', '2018-06-01 03:46:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED DEFAULT NULL,
  `reviewer_id` int(10) UNSIGNED DEFAULT NULL,
  `image_570_id` int(11) NOT NULL,
  `image_1920_id` int(11) NOT NULL,
  `publish_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_content_langs`
--

CREATE TABLE `news_content_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_description_langs`
--

CREATE TABLE `news_description_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_title_langs`
--

CREATE TABLE `news_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_code` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_code`, `route`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'home', 'home', '2017-08-23 15:20:56', '2017-10-29 17:24:20', NULL),
(2, 'about_us', 'about-us', '2017-08-31 15:34:17', '2017-08-31 15:34:17', NULL),
(3, 'university_message', 'university-message', '2017-10-14 14:58:05', '2017-10-29 17:19:13', NULL),
(4, 'university_in_glance', 'university-in-glance', '2017-10-14 14:59:01', '2017-10-29 17:24:53', NULL),
(5, 'university_council', 'university-council', '2017-10-14 15:03:13', '2017-10-29 17:25:07', NULL),
(6, 'trusted_council', 'trusted-council', '2017-10-14 15:04:01', '2017-10-29 17:25:20', NULL),
(7, 'university_partner', 'university-partner', '2017-10-14 15:05:24', '2017-10-29 17:25:32', NULL),
(8, 'location', 'location', '2017-10-14 15:06:10', '2017-10-14 15:06:10', NULL),
(9, 'location', 'location', '2017-10-14 15:06:12', '2017-10-14 15:08:34', '2017-10-14 15:08:34'),
(10, 'university_offices', 'university-offices', '2017-10-14 15:06:46', '2017-10-29 17:25:44', NULL),
(11, 'degrees', 'degrees', '2017-10-14 15:16:05', '2017-10-14 15:16:05', NULL),
(12, 'courses', 'courses', '2017-10-14 15:16:26', '2017-10-14 15:16:26', NULL),
(13, 'study_plan', 'study-plan', '2017-10-14 15:17:00', '2017-10-29 17:26:13', NULL),
(14, 'message_and_goals', 'message-and-goals', '2017-10-14 15:20:17', '2017-10-29 17:26:28', NULL),
(15, 'instructors', 'instructors', '2017-10-14 15:20:40', '2017-10-14 15:20:40', NULL),
(16, 'labs', 'labs', '2017-10-14 15:21:01', '2017-10-14 15:21:01', NULL),
(17, 'contact_us', 'contact-us', '2017-10-14 15:25:07', '2017-10-29 17:26:01', NULL),
(18, 'news', 'news', '2017-10-14 15:25:21', '2017-10-14 15:25:21', NULL),
(19, 'gallery', 'gallery', '2017-10-14 15:25:39', '2017-10-14 15:25:39', NULL),
(20, 'admission_rules', 'admission-rules', '2017-10-14 15:47:09', '2017-10-29 17:26:45', NULL),
(21, 'admission_process', 'admission-process', '2017-10-14 15:47:59', '2017-10-29 17:27:02', NULL),
(22, 'fees', 'fees', '2017-10-14 15:48:22', '2017-10-14 15:48:22', NULL),
(23, 'scholarship', 'scholarship', '2017-10-14 15:48:43', '2017-10-14 15:48:43', NULL),
(24, 'university_calendar', 'university-calendar', '2017-10-14 15:49:43', '2017-11-15 18:56:39', NULL),
(25, 'courses_list', 'courses', '2017-10-14 15:50:13', '2018-05-19 12:53:01', NULL),
(26, 'exams', 'exams', '2017-10-14 15:50:34', '2017-10-14 15:50:34', NULL),
(27, 'person', 'person', '2017-11-15 16:10:31', '2017-11-15 16:10:31', NULL),
(29, 'hierarchy', 'hierarchy', '2018-03-26 17:34:15', '2018-03-26 17:34:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_name_langs`
--

CREATE TABLE `page_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_name_langs`
--

INSERT INTO `page_name_langs` (`id`, `page_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Home', '2017-08-23 15:20:57', '2017-08-23 15:20:57', NULL),
(2, 1, 2, 'الرئيسية', '2017-08-23 15:20:57', '2017-08-23 15:20:57', NULL),
(3, 2, 1, 'About us', '2017-08-31 15:34:17', '2017-08-31 15:34:17', NULL),
(4, 2, 2, 'عن الجامعة', '2017-08-31 15:34:17', '2017-08-31 15:34:17', NULL),
(5, 3, 1, 'University Message', '2017-10-14 14:58:05', '2017-10-14 14:58:05', NULL),
(6, 3, 2, 'رسالة الجامعة', '2017-10-14 14:58:05', '2017-10-14 14:58:05', NULL),
(7, 4, 1, 'University in glance', '2017-10-14 14:59:01', '2017-10-14 14:59:01', NULL),
(8, 4, 2, 'لمحة عن الجامعة', '2017-10-14 14:59:01', '2017-10-14 14:59:01', NULL),
(9, 5, 1, 'University Council', '2017-10-14 15:03:13', '2017-10-14 15:03:13', NULL),
(10, 5, 2, 'مجلس الجامعة', '2017-10-14 15:03:13', '2017-10-14 15:03:13', NULL),
(11, 6, 1, 'Trusted Council', '2017-10-14 15:04:01', '2017-10-14 15:04:01', NULL),
(12, 6, 2, 'مجلس الامناء', '2017-10-14 15:04:01', '2017-10-14 15:04:01', NULL),
(13, 7, 1, 'University Partner', '2017-10-14 15:05:24', '2017-12-09 16:07:56', NULL),
(14, 7, 2, 'الشركاء', '2017-10-14 15:05:24', '2017-10-14 15:05:24', NULL),
(15, 8, 1, 'Location', '2017-10-14 15:06:10', '2017-10-14 15:06:10', NULL),
(16, 8, 2, 'موقع الجامعة', '2017-10-14 15:06:10', '2017-10-14 15:06:10', NULL),
(17, 9, 1, 'Location', '2017-10-14 15:06:12', '2017-10-14 15:08:34', '2017-10-14 15:08:34'),
(18, 9, 2, 'موقع الجامعة', '2017-10-14 15:06:12', '2017-10-14 15:08:34', '2017-10-14 15:08:34'),
(19, 10, 1, 'University Offices', '2017-10-14 15:06:46', '2017-12-09 16:08:19', NULL),
(20, 10, 2, 'مكاتب الجامعة', '2017-10-14 15:06:47', '2017-10-14 15:06:47', NULL),
(21, 11, 1, 'Degrees', '2017-10-14 15:16:05', '2017-10-14 15:16:05', NULL),
(22, 11, 2, 'الاختصاصات', '2017-10-14 15:16:05', '2017-10-14 15:16:05', NULL),
(23, 12, 1, 'Courses', '2017-10-14 15:16:26', '2017-10-14 15:16:26', NULL),
(24, 12, 2, 'المقررات', '2017-10-14 15:16:26', '2017-10-14 15:16:26', NULL),
(25, 13, 1, 'Study Plan', '2017-10-14 15:17:00', '2017-10-14 15:17:00', NULL),
(26, 13, 2, 'الخطة الدرسية', '2017-10-14 15:17:00', '2017-10-14 15:17:00', NULL),
(27, 14, 1, 'Message & Goals', '2017-10-14 15:20:17', '2017-10-14 15:20:17', NULL),
(28, 14, 2, 'رسالة الجامعة', '2017-10-14 15:20:17', '2017-10-14 15:20:17', NULL),
(29, 15, 1, 'Instructors', '2017-10-14 15:20:41', '2017-10-14 15:20:41', NULL),
(30, 15, 2, 'المدرسون', '2017-10-14 15:20:41', '2017-10-14 15:20:41', NULL),
(31, 16, 1, 'Labs', '2017-10-14 15:21:01', '2017-10-14 15:21:01', NULL),
(32, 16, 2, 'المخابر', '2017-10-14 15:21:01', '2017-10-14 15:21:01', NULL),
(33, 17, 1, 'Contact Us', '2017-10-14 15:25:08', '2017-10-14 15:25:08', NULL),
(34, 17, 2, 'تواصل معنا', '2017-10-14 15:25:08', '2017-10-14 15:25:08', NULL),
(35, 18, 1, 'News', '2017-10-14 15:25:21', '2017-10-14 15:25:21', NULL),
(36, 18, 2, 'اخبار', '2017-10-14 15:25:21', '2017-10-14 15:25:21', NULL),
(37, 19, 1, 'Gallery', '2017-10-14 15:25:39', '2017-10-14 15:25:39', NULL),
(38, 19, 2, 'معرض صور', '2017-10-14 15:25:39', '2017-10-14 15:25:39', NULL),
(39, 20, 1, 'Admission Rules', '2017-10-14 15:47:09', '2017-12-09 16:11:00', NULL),
(40, 20, 2, 'شروط القبول', '2017-10-14 15:47:09', '2017-10-14 15:47:09', NULL),
(41, 21, 1, 'Admission Way', '2017-10-14 15:47:59', '2017-12-09 16:11:18', NULL),
(42, 21, 2, 'طريقة القبول', '2017-10-14 15:47:59', '2017-10-14 15:47:59', NULL),
(43, 22, 1, 'Fees', '2017-10-14 15:48:22', '2017-10-14 15:48:22', NULL),
(44, 22, 2, 'الرسوم', '2017-10-14 15:48:22', '2017-10-14 15:48:22', NULL),
(45, 23, 1, 'Scholarship', '2017-10-14 15:48:43', '2017-12-09 16:11:41', NULL),
(46, 23, 2, 'المنح', '2017-10-14 15:48:43', '2017-10-14 15:48:43', NULL),
(47, 24, 1, 'University Calendar', '2017-10-14 15:49:43', '2017-12-09 16:11:59', NULL),
(48, 24, 2, 'التقويم الجامعي', '2017-10-14 15:49:43', '2017-10-14 15:49:43', NULL),
(49, 25, 1, 'Courses List', '2017-10-14 15:50:13', '2017-10-14 15:50:13', NULL),
(50, 25, 2, 'قائمة المقررات', '2017-10-14 15:50:13', '2017-10-14 15:50:13', NULL),
(51, 26, 1, 'Exams', '2017-10-14 15:50:34', '2017-10-14 15:50:34', NULL),
(52, 26, 2, 'الامتحانات', '2017-10-14 15:50:34', '2017-10-14 15:50:34', NULL),
(53, 27, 1, 'Person', '2017-11-15 16:10:31', '2017-11-15 16:10:31', NULL),
(54, 27, 2, 'شخص', '2017-11-15 16:10:31', '2017-11-15 16:10:31', NULL),
(57, 29, 1, 'Hierarchy', '2018-03-26 17:34:15', '2018-03-26 17:34:15', NULL),
(58, 29, 2, 'الهيكلية', '2018-03-26 17:34:15', '2018-03-26 17:34:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner_description_langs`
--

CREATE TABLE `partner_description_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `partner_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner_name_langs`
--

CREATE TABLE `partner_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `partner_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `people`
--

CREATE TABLE `people` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_260_id` int(10) UNSIGNED DEFAULT NULL,
  `image_360_id` int(10) UNSIGNED DEFAULT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `position_id` int(10) UNSIGNED NOT NULL,
  `job_title_id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `hidden`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'automata', 'web', 'Y', '2018-03-15 05:45:40', '2018-03-17 05:33:22', NULL),
(2, 'administrator', 'web', 'N', '2018-03-15 05:46:03', '2018-03-17 05:34:53', NULL),
(3, 'languages', 'web', 'N', '2018-03-15 11:26:30', '2018-03-15 11:26:30', NULL),
(4, 'schema-tables', 'web', 'Y', '2018-03-17 04:48:07', '2018-03-17 05:35:47', NULL),
(5, 'tables', 'web', 'Y', '2018-03-17 05:09:52', '2018-03-17 05:35:56', NULL),
(6, 'icons', 'web', 'N', '2018-03-17 05:18:56', '2018-03-17 05:18:56', NULL),
(7, 'attributes', 'web', 'Y', '2018-03-17 05:19:39', '2018-03-17 05:36:07', NULL),
(8, 'modules', 'web', 'N', '2018-03-17 05:19:55', '2018-03-17 05:19:55', NULL),
(9, 'pages', 'web', 'N', '2018-03-17 05:20:15', '2018-03-17 05:20:15', NULL),
(10, 'permissions', 'web', 'N', '2018-03-17 05:20:56', '2018-03-17 05:20:56', NULL),
(11, 'roles', 'web', 'N', '2018-03-17 05:21:11', '2018-03-17 05:21:11', NULL),
(12, 'users', 'web', 'N', '2018-03-17 05:21:32', '2018-03-17 05:21:32', NULL),
(13, 'sliders', 'web', 'N', '2018-03-17 05:22:14', '2018-03-17 05:22:14', NULL),
(14, 'vertical-sliders', 'web', 'N', '2018-03-17 05:22:52', '2018-03-17 05:22:52', NULL),
(15, 'blocks', 'web', 'N', '2018-03-17 05:23:16', '2018-03-17 05:23:16', NULL),
(16, 'text-cards', 'web', 'N', '2018-03-17 05:23:43', '2018-03-17 05:23:43', NULL),
(17, 'custom-modules', 'web', 'N', '2018-03-17 05:24:10', '2018-03-17 05:24:10', NULL),
(18, 'page-builder', 'web', 'N', '2018-03-17 05:24:44', '2018-03-17 05:24:44', NULL),
(19, 'steps', 'web', 'N', '2018-03-17 06:35:33', '2018-03-17 06:35:33', NULL),
(20, 'website-menu', 'web', 'N', '2018-03-20 17:09:46', '2018-03-20 17:09:46', NULL),
(21, 'control-panel-menu', 'web', 'Y', '2018-03-20 17:10:35', '2018-03-20 17:10:35', NULL),
(22, 'general-setting', 'web', 'N', '2018-03-21 14:47:36', '2018-03-21 14:47:36', NULL),
(23, 'social-network', 'web', 'N', '2018-03-21 14:48:20', '2018-03-21 14:48:20', NULL),
(24, 'gender', 'web', 'N', '2018-03-21 14:48:48', '2018-03-21 14:48:48', NULL),
(25, 'position', 'web', 'N', '2018-03-21 14:49:18', '2018-03-21 14:49:18', NULL),
(26, 'job-title', 'web', 'N', '2018-03-21 14:49:52', '2018-03-21 14:49:52', NULL),
(27, 'faculties', 'web', 'N', '2018-03-21 14:50:43', '2018-03-21 14:50:43', NULL),
(28, 'departments', 'web', 'N', '2018-03-21 14:51:04', '2018-03-21 14:51:04', NULL),
(29, 'degrees', 'web', 'N', '2018-03-21 14:51:33', '2018-03-21 14:51:33', NULL),
(30, 'study-plan', 'web', 'N', '2018-03-21 14:52:08', '2018-03-21 14:52:08', NULL),
(31, 'offices', 'web', 'N', '2018-03-21 14:52:36', '2018-03-21 14:52:36', NULL),
(32, 'partners', 'web', 'N', '2018-03-21 14:52:54', '2018-03-21 14:52:54', NULL),
(33, 'university-council', 'web', 'N', '2018-03-21 15:23:51', '2018-03-21 15:23:51', NULL),
(34, 'board-of-trustees', 'web', 'N', '2018-03-21 15:24:31', '2018-03-21 15:24:31', NULL),
(35, 'staff', 'web', 'N', '2018-03-21 15:25:10', '2018-03-21 15:25:10', NULL),
(36, 'news', 'web', 'N', '2018-03-21 15:26:11', '2018-05-12 15:28:41', NULL),
(37, 'study-year', 'web', 'N', '2018-03-21 15:27:44', '2018-03-21 15:27:44', NULL),
(38, 'semester', 'web', 'N', '2018-03-21 15:28:21', '2018-03-21 15:28:21', NULL),
(39, 'hierarchy-type', 'web', 'N', '2018-03-21 15:29:05', '2018-03-21 15:29:05', NULL),
(40, 'galleries', 'web', 'N', '2018-03-30 02:13:30', '2018-03-30 02:13:30', NULL),
(41, 'news-status', 'web', 'Y', '2018-05-13 12:53:36', '2018-05-13 12:53:36', NULL),
(42, 'translation-manager', 'web', 'N', '2018-10-26 05:15:00', '2018-10-26 05:15:00', NULL),
(43, 'hierarchy', 'web', 'N', '2018-10-26 05:33:16', '2018-10-26 05:33:16', NULL),
(44, 'campuses', 'web', 'N', '2018-11-03 13:05:04', '2018-11-03 13:05:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_name_langs`
--

CREATE TABLE `permission_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_name_langs`
--

INSERT INTO `permission_name_langs` (`id`, `permission_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Automata4', '2018-03-15 05:45:41', '2018-03-15 06:41:11', NULL),
(2, 1, 2, 'اوتوماتا4', '2018-03-15 05:45:41', '2018-03-15 06:41:11', NULL),
(3, 2, 1, 'Administrator', '2018-03-15 05:46:04', '2018-03-15 06:40:38', NULL),
(4, 2, 2, 'مدير', '2018-03-15 05:46:04', '2018-03-15 06:40:38', NULL),
(5, 3, 1, 'Languages', '2018-03-15 11:26:30', '2018-03-15 11:26:30', NULL),
(6, 3, 2, 'اللغات', '2018-03-15 11:26:30', '2018-03-15 11:26:30', NULL),
(7, 4, 1, 'Schema Tables', '2018-03-17 04:48:07', '2018-03-17 04:48:07', NULL),
(8, 4, 2, 'Schema Tables', '2018-03-17 04:48:07', '2018-03-17 04:48:07', NULL),
(9, 5, 1, 'Tables', '2018-03-17 05:09:52', '2018-03-17 05:09:52', NULL),
(10, 5, 2, 'الجداول', '2018-03-17 05:09:53', '2018-03-17 05:09:53', NULL),
(11, 6, 1, 'Icons', '2018-03-17 05:18:57', '2018-03-17 05:18:57', NULL),
(12, 6, 2, 'ايقونات', '2018-03-17 05:18:57', '2018-03-17 05:18:57', NULL),
(13, 7, 1, 'Attributes', '2018-03-17 05:19:39', '2018-03-17 05:19:39', NULL),
(14, 7, 2, 'خصائص', '2018-03-17 05:19:40', '2018-03-17 05:19:40', NULL),
(15, 8, 1, 'Modules', '2018-03-17 05:19:55', '2018-03-17 05:19:55', NULL),
(16, 8, 2, 'الكتل', '2018-03-17 05:19:55', '2018-03-17 05:19:55', NULL),
(17, 9, 1, 'Pages', '2018-03-17 05:20:15', '2018-03-17 05:20:15', NULL),
(18, 9, 2, 'الصفحات', '2018-03-17 05:20:15', '2018-03-17 05:20:15', NULL),
(19, 10, 1, 'Permissions', '2018-03-17 05:20:56', '2018-03-17 05:20:56', NULL),
(20, 10, 2, 'السماحيات', '2018-03-17 05:20:56', '2018-03-17 05:20:56', NULL),
(21, 11, 1, 'Roles', '2018-03-17 05:21:11', '2018-03-17 05:21:11', NULL),
(22, 11, 2, 'الادوار', '2018-03-17 05:21:11', '2018-03-17 05:21:11', NULL),
(23, 12, 1, 'Users', '2018-03-17 05:21:32', '2018-03-17 05:21:32', NULL),
(24, 12, 2, 'المستخدمين', '2018-03-17 05:21:33', '2018-03-17 05:21:33', NULL),
(25, 13, 1, 'Sliders', '2018-03-17 05:22:14', '2018-03-17 05:22:14', NULL),
(26, 13, 2, 'سلايدر', '2018-03-17 05:22:14', '2018-03-17 05:22:14', NULL),
(27, 14, 1, 'Vertical Sliders', '2018-03-17 05:22:52', '2018-03-17 05:22:52', NULL),
(28, 14, 2, 'سلايدر عمودي', '2018-03-17 05:22:52', '2018-03-17 05:22:52', NULL),
(29, 15, 1, 'Blocks', '2018-03-17 05:23:16', '2018-03-17 05:23:16', NULL),
(30, 15, 2, 'كتل', '2018-03-17 05:23:16', '2018-03-17 05:23:16', NULL),
(31, 16, 1, 'Text Cards', '2018-03-17 05:23:43', '2018-03-17 05:23:43', NULL),
(32, 16, 2, 'بطاقات نصية', '2018-03-17 05:23:43', '2018-03-17 05:23:43', NULL),
(33, 17, 1, 'Custom Modules', '2018-03-17 05:24:10', '2018-03-17 05:24:10', NULL),
(34, 17, 2, 'الكتلة الخاصة', '2018-03-17 05:24:10', '2018-03-17 05:24:10', NULL),
(35, 18, 1, 'Page Builder', '2018-03-17 05:24:44', '2018-03-17 05:24:44', NULL),
(36, 18, 2, 'باني الصفحات', '2018-03-17 05:24:44', '2018-03-17 05:24:44', NULL),
(37, 19, 1, 'Steps', '2018-03-17 06:35:33', '2018-03-17 06:35:33', NULL),
(38, 19, 2, 'خطوات', '2018-03-17 06:35:33', '2018-03-17 06:35:33', NULL),
(39, 20, 1, 'Website Menu', '2018-03-20 17:09:46', '2018-03-20 17:09:46', NULL),
(40, 20, 2, 'قائمة الموقع', '2018-03-20 17:09:46', '2018-03-20 17:09:46', NULL),
(41, 21, 1, 'Control Panel Menu', '2018-03-20 17:10:35', '2018-03-20 17:10:35', NULL),
(42, 21, 2, 'قائمة ادارة الموقع', '2018-03-20 17:10:35', '2018-03-20 17:10:35', NULL),
(43, 22, 1, 'General Settings', '2018-03-21 14:47:37', '2018-03-21 14:47:37', NULL),
(44, 22, 2, 'اعدادات عامة', '2018-03-21 14:47:37', '2018-03-21 14:47:37', NULL),
(45, 23, 1, 'Social Networks', '2018-03-21 14:48:20', '2018-03-21 14:48:20', NULL),
(46, 23, 2, 'مواقع التواصل الاجتماعي', '2018-03-21 14:48:21', '2018-03-21 14:48:21', NULL),
(47, 24, 1, 'Gender', '2018-03-21 14:48:48', '2018-03-21 14:48:48', NULL),
(48, 24, 2, 'الجنس', '2018-03-21 14:48:48', '2018-03-21 14:48:48', NULL),
(49, 25, 1, 'Position', '2018-03-21 14:49:18', '2018-03-21 14:49:18', NULL),
(50, 25, 2, 'مناصب', '2018-03-21 14:49:18', '2018-03-21 14:49:18', NULL),
(51, 26, 1, 'Job Title', '2018-03-21 14:49:52', '2018-03-21 14:49:52', NULL),
(52, 26, 2, 'الالقاب الوظيفية', '2018-03-21 14:49:52', '2018-03-21 14:49:52', NULL),
(53, 27, 1, 'Faculties', '2018-03-21 14:50:43', '2018-03-21 14:50:43', NULL),
(54, 27, 2, 'الكليات', '2018-03-21 14:50:43', '2018-03-21 14:50:43', NULL),
(55, 28, 1, 'Departments', '2018-03-21 14:51:05', '2018-03-21 14:51:05', NULL),
(56, 28, 2, 'الاقسام', '2018-03-21 14:51:05', '2018-03-21 14:51:05', NULL),
(57, 29, 1, 'Degrees', '2018-03-21 14:51:33', '2018-03-21 14:51:33', NULL),
(58, 29, 2, 'الشهادات', '2018-03-21 14:51:33', '2018-03-21 14:51:33', NULL),
(59, 30, 1, 'Study Plan', '2018-03-21 14:52:08', '2018-03-21 14:52:08', NULL),
(60, 30, 2, 'الخطة الدرسية', '2018-03-21 14:52:08', '2018-03-21 14:52:08', NULL),
(61, 31, 1, 'Offices', '2018-03-21 14:52:36', '2018-03-21 14:52:36', NULL),
(62, 31, 2, 'المكاتب', '2018-03-21 14:52:36', '2018-03-21 14:52:36', NULL),
(63, 32, 1, 'Partners', '2018-03-21 14:52:54', '2018-03-21 14:52:54', NULL),
(64, 32, 2, 'الشركاء', '2018-03-21 14:52:54', '2018-03-21 14:52:54', NULL),
(65, 33, 1, 'University Council', '2018-03-21 15:23:52', '2018-03-21 15:23:52', NULL),
(66, 33, 2, 'مجلس الجامعة', '2018-03-21 15:23:52', '2018-03-21 15:23:52', NULL),
(67, 34, 1, 'Board of Trustees', '2018-03-21 15:24:31', '2018-03-21 15:24:31', NULL),
(68, 34, 2, 'مجلس الامناء', '2018-03-21 15:24:31', '2018-03-21 15:24:31', NULL),
(69, 35, 1, 'Staff', '2018-03-21 15:25:10', '2018-03-21 15:25:10', NULL),
(70, 35, 2, 'الموظفون', '2018-03-21 15:25:10', '2018-03-21 15:25:10', NULL),
(71, 36, 1, 'News', '2018-03-21 15:26:11', '2018-05-12 15:28:41', NULL),
(72, 36, 2, 'الاخبار', '2018-03-21 15:26:12', '2018-05-12 15:28:41', NULL),
(73, 37, 1, 'Study Year', '2018-03-21 15:27:44', '2018-03-21 15:27:44', NULL),
(74, 37, 2, 'السنوات الدراسية', '2018-03-21 15:27:44', '2018-03-21 15:27:44', NULL),
(75, 38, 1, 'Semester', '2018-03-21 15:28:21', '2018-03-21 15:28:21', NULL),
(76, 38, 2, 'الفصول الدراسية', '2018-03-21 15:28:21', '2018-03-21 15:28:21', NULL),
(77, 39, 1, 'Hierarchy  Type', '2018-03-21 15:29:05', '2018-03-21 15:29:05', NULL),
(78, 39, 2, 'نوع الهيكلية', '2018-03-21 15:29:05', '2018-03-21 15:29:05', NULL),
(79, 40, 1, 'Galleries', '2018-03-30 02:13:30', '2018-03-30 02:13:30', NULL),
(80, 40, 2, 'معرض الصور', '2018-03-30 02:13:30', '2018-03-30 02:13:30', NULL),
(81, 41, 1, 'News Status', '2018-05-13 12:53:37', '2018-05-13 12:53:37', NULL),
(82, 41, 2, 'حالات الخبر', '2018-05-13 12:53:37', '2018-05-13 12:53:37', NULL),
(83, 42, 1, 'Translation Manager', '2018-10-26 05:20:13', '2018-10-26 05:21:27', NULL),
(84, 42, 2, 'متحولات اللغة', '2018-10-26 05:20:14', '2018-10-26 05:21:27', NULL),
(85, 43, 1, 'Hierarchy', '2018-10-26 05:33:16', '2018-10-26 05:33:33', NULL),
(86, 43, 2, 'الهيكلية', '2018-10-26 05:33:16', '2018-10-26 05:33:33', NULL),
(87, 44, 1, 'Campuses', '2018-11-03 13:05:04', '2018-11-03 13:05:04', NULL),
(88, 44, 2, 'الحرم الجامعي', '2018-11-03 13:05:04', '2018-11-03 13:05:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `person_experience_langs`
--

CREATE TABLE `person_experience_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_name_langs`
--

CREATE TABLE `person_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_summary_langs`
--

CREATE TABLE `person_summary_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `person_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone_numbers`
--

CREATE TABLE `phone_numbers` (
  `id` int(10) UNSIGNED NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `position_name_langs`
--

CREATE TABLE `position_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `position_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prerequisite`
--

CREATE TABLE `prerequisite` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `prerequisite_group_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prerequisite`
--

INSERT INTO `prerequisite` (`id`, `course_id`, `prerequisite_group_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 1, NULL, NULL, NULL),
(2, 2, 2, NULL, NULL, NULL),
(3, 3, 2, NULL, NULL, NULL),
(4, 2, 3, NULL, NULL, NULL),
(5, 3, 3, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `prerequisite_groups`
--

CREATE TABLE `prerequisite_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prerequisite_groups`
--

INSERT INTO `prerequisite_groups` (`id`, `code`, `course_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'G12', 6, '2017-11-28 18:20:00', '2017-11-28 18:20:00', NULL),
(2, 'G22', 4, '2017-11-28 18:20:24', '2017-11-28 18:20:24', NULL),
(3, 'T15', 1, '2017-11-28 18:21:09', '2017-11-28 18:21:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hidden` char(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `hidden`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'automata', 'web', 'Y', '2018-03-17 05:01:56', '2018-03-17 05:01:56', NULL),
(2, 'administrator', 'web', 'N', '2018-03-17 05:03:00', '2018-03-17 05:03:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(11, 1),
(11, 2),
(12, 1),
(12, 2),
(13, 1),
(13, 2),
(14, 1),
(14, 2),
(15, 1),
(15, 2),
(16, 1),
(16, 2),
(17, 1),
(17, 2),
(18, 1),
(18, 2),
(19, 1),
(19, 2),
(20, 1),
(20, 2),
(21, 1),
(22, 1),
(22, 2),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(25, 1),
(25, 2),
(26, 1),
(26, 2),
(27, 1),
(27, 2),
(28, 1),
(28, 2),
(29, 1),
(29, 2),
(30, 1),
(30, 2),
(31, 1),
(31, 2),
(32, 1),
(32, 2),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(37, 1),
(37, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(42, 1),
(42, 2),
(43, 1),
(43, 2),
(44, 1),
(44, 2);

-- --------------------------------------------------------

--
-- Table structure for table `role_name_langs`
--

CREATE TABLE `role_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_name_langs`
--

INSERT INTO `role_name_langs` (`id`, `role_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Automata4 Role', '2018-03-17 05:01:56', '2018-03-17 05:01:56', NULL),
(2, 1, 2, 'دور اوتوماتا4', '2018-03-17 05:01:56', '2018-03-17 05:01:56', NULL),
(3, 2, 1, 'Administrator Role', '2018-03-17 07:09:09', '2018-03-17 05:09:09', NULL),
(4, 2, 2, 'دور مدير', '2018-03-17 07:09:09', '2018-03-17 05:09:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8, '2017-11-28 17:50:24', '2017-11-28 17:50:24', NULL),
(9, '2017-11-28 17:50:45', '2017-11-28 17:50:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semester_name_langs`
--

CREATE TABLE `semester_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `semester_id` int(10) UNSIGNED DEFAULT NULL,
  `lang_id` int(10) UNSIGNED DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester_name_langs`
--

INSERT INTO `semester_name_langs` (`id`, `semester_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 8, 1, 'First Semester', '2017-11-28 17:50:25', '2017-11-28 17:50:25', NULL),
(16, 8, 2, 'الفصل الأول', '2017-11-28 17:50:25', '2017-11-28 17:50:25', NULL),
(17, 9, 1, 'Second Semester', '2017-11-28 17:50:46', '2017-11-28 17:50:46', NULL),
(18, 9, 2, 'الفصل الثاني', '2017-11-28 17:50:46', '2017-11-28 17:50:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `graph_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graph_image_id` int(10) UNSIGNED DEFAULT NULL,
  `article_published_time` datetime DEFAULT NULL,
  `article_modified_time` datetime DEFAULT NULL,
  `article_expiration_time` datetime DEFAULT NULL,
  `profile_username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_isbn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_release_date` datetime DEFAULT NULL,
  `card_image_id` int(10) UNSIGNED DEFAULT NULL,
  `buildable_id` int(10) UNSIGNED NOT NULL,
  `buildable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `optional_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_article_section_langs`
--

CREATE TABLE `seo_article_section_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_article_tag_langs`
--

CREATE TABLE `seo_article_tag_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_book_tag_langs`
--

CREATE TABLE `seo_book_tag_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_description_langs`
--

CREATE TABLE `seo_description_langs` (
  `id` int(11) NOT NULL,
  `seo_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_keyword_langs`
--

CREATE TABLE `seo_keyword_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_profile_first_name_langs`
--

CREATE TABLE `seo_profile_first_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_profile_last_name_langs`
--

CREATE TABLE `seo_profile_last_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seo_title_langs`
--

CREATE TABLE `seo_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `code`, `value`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Seo', 'Seo', '2017-06-16 17:44:25', '2017-06-16 17:44:37', '2017-06-16 17:44:37'),
(2, 'aaaa', 'aaa', '2017-07-05 09:31:40', '2017-08-17 11:30:08', '2017-08-17 11:30:08'),
(3, '213213', '32', '2017-07-05 09:32:21', '2017-08-17 11:30:12', '2017-08-17 11:30:12'),
(4, 'dsa', 'asdas', '2017-07-05 09:32:27', '2017-08-17 11:30:16', '2017-08-17 11:30:16'),
(5, 'UGL', '35.0985546,36.1864543', '2017-08-17 11:31:35', '2017-08-17 13:56:06', NULL),
(6, 'learnata', 'http://learnata.com', '2018-01-30 16:06:32', '2018-01-30 16:06:32', NULL),
(7, 'website_title', 'Al Andalus University', '2018-01-30 16:23:38', '2018-01-30 16:23:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting_name_langs`
--

CREATE TABLE `setting_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED DEFAULT NULL,
  `lang_id` int(10) UNSIGNED DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting_name_langs`
--

INSERT INTO `setting_name_langs` (`id`, `setting_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Seo', '2017-06-16 17:44:25', '2017-06-16 17:44:37', '2017-06-16 17:44:37'),
(2, 1, 2, 'Seo', '2017-06-16 17:44:25', '2017-06-16 17:44:37', '2017-06-16 17:44:37'),
(3, 2, 1, 'aaa', '2017-07-05 09:31:40', '2017-08-17 11:30:08', '2017-08-17 11:30:08'),
(4, 2, 2, 'aaaa', '2017-07-05 09:31:40', '2017-08-17 11:30:08', '2017-08-17 11:30:08'),
(5, 3, 1, '2312', '2017-07-05 09:32:21', '2017-08-17 11:30:12', '2017-08-17 11:30:12'),
(6, 3, 2, '3213', '2017-07-05 09:32:21', '2017-08-17 11:30:12', '2017-08-17 11:30:12'),
(7, 4, 1, 'dsa', '2017-07-05 09:32:27', '2017-08-17 11:30:16', '2017-08-17 11:30:16'),
(8, 4, 2, 'dsa', '2017-07-05 09:32:27', '2017-08-17 11:30:16', '2017-08-17 11:30:16'),
(9, 5, 1, 'University Geo-location', '2017-08-17 11:31:35', '2017-12-21 19:44:00', NULL),
(10, 5, 2, 'موقع الجامعة الجغرافي', '2017-08-17 11:31:36', '2017-08-17 11:31:36', NULL),
(11, 6, 1, 'Learnata', '2018-01-30 16:06:32', '2018-01-30 16:06:32', NULL),
(12, 6, 2, 'ليرناتا', '2018-01-30 16:06:32', '2018-01-30 16:06:32', NULL),
(13, 7, 1, 'Website Title', '2018-01-30 16:23:38', '2018-01-30 16:23:38', NULL),
(14, 7, 2, 'عنوان الموقع', '2018-01-30 16:23:38', '2018-01-30 16:23:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_menus`
--

CREATE TABLE `site_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_list_id` int(10) UNSIGNED DEFAULT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `prefix` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_link` tinyint(1) DEFAULT '0',
  `menuable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuable_id` bigint(20) UNSIGNED DEFAULT NULL,
  `dynamic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_menus`
--

INSERT INTO `site_menus` (`id`, `menu_list_id`, `_lft`, `_rgt`, `parent_id`, `order`, `prefix`, `url`, `is_link`, `menuable_type`, `menuable_id`, `dynamic`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 4, NULL, 1, NULL, NULL, 1, 'page', 1, NULL, '2017-10-14 14:49:52', '2017-11-14 15:56:25', NULL),
(2, 1, 5, 26, NULL, 2, NULL, NULL, 0, NULL, NULL, NULL, '2017-10-14 14:56:06', '2018-03-26 17:44:08', NULL),
(3, 1, 6, 7, 2, 1, NULL, NULL, 1, 'page', 3, NULL, '2017-10-14 14:59:47', '2018-03-26 17:44:24', NULL),
(4, 1, 8, 9, 2, 2, NULL, NULL, 1, 'page', 4, NULL, '2017-10-14 14:59:57', '2018-03-26 17:44:24', NULL),
(5, 1, 10, 13, 2, 11, NULL, NULL, 0, NULL, NULL, NULL, '2017-10-14 15:01:05', '2018-03-26 17:34:57', '2018-03-26 17:34:57'),
(6, 1, 11, 12, 5, 2, NULL, NULL, 1, 'faculty', 6, NULL, '2017-10-14 15:01:56', '2017-11-12 17:18:06', '2017-10-14 15:02:16'),
(7, 1, 14, 15, 2, 4, NULL, NULL, 1, 'page', 5, NULL, '2017-10-14 15:07:52', '2018-03-26 17:44:24', NULL),
(8, 1, 16, 17, 2, 5, NULL, NULL, 1, 'page', 6, NULL, '2017-10-14 15:07:59', '2018-03-26 17:44:24', NULL),
(9, 1, 18, 19, 2, 6, NULL, NULL, 1, 'page', 7, NULL, '2017-10-14 15:08:11', '2018-03-26 17:44:24', NULL),
(10, 1, 27, 28, NULL, 8, NULL, NULL, 1, 'page', 8, NULL, '2017-10-14 15:08:14', '2018-03-26 17:44:08', '2017-10-14 15:08:51'),
(11, 1, 20, 21, 2, 8, NULL, NULL, 1, 'page', 10, NULL, '2017-10-14 15:08:21', '2018-03-26 17:44:25', NULL),
(12, 1, 22, 23, 2, 7, NULL, NULL, 1, 'page', 8, NULL, '2017-10-14 15:09:00', '2018-03-26 17:44:24', NULL),
(13, 1, 30, 31, 14, 1, NULL, NULL, 0, NULL, NULL, NULL, '2017-10-14 15:11:23', '2018-03-26 17:44:08', '2017-11-12 17:48:19'),
(14, 1, 29, 48, NULL, 3, NULL, NULL, 0, NULL, NULL, NULL, '2017-10-14 15:12:30', '2018-03-26 17:44:09', '2017-11-12 17:50:47'),
(15, 1, 32, 47, 14, 2, NULL, NULL, 0, NULL, NULL, NULL, '2017-10-14 15:13:31', '2018-03-26 17:44:09', '2017-11-12 17:50:08'),
(16, 1, 80, 81, 44, 1, NULL, NULL, 1, 'page', 11, NULL, '2017-10-14 15:21:35', '2018-03-26 17:44:11', NULL),
(17, 1, 82, 83, 44, 2, NULL, NULL, 1, 'page', 12, NULL, '2017-10-14 15:21:45', '2018-03-26 17:44:11', NULL),
(18, 1, 84, 85, 44, 3, NULL, NULL, 1, 'page', 13, NULL, '2017-10-14 15:21:58', '2018-03-26 17:44:11', NULL),
(19, 1, 86, 87, 44, 4, NULL, NULL, 1, 'page', 14, NULL, '2017-10-14 15:22:03', '2018-03-26 17:44:11', NULL),
(20, 1, 88, 89, 44, 5, NULL, NULL, 1, 'page', 15, NULL, '2017-10-14 15:22:10', '2018-03-26 17:44:11', NULL),
(21, 1, 90, 91, 44, 6, NULL, NULL, 1, 'page', 16, NULL, '2017-10-14 15:22:22', '2018-03-26 17:44:11', NULL),
(22, 1, 33, 34, 15, 1, NULL, NULL, 1, 'page', 11, NULL, '2017-10-14 15:22:44', '2018-03-26 17:44:08', '2017-11-12 17:41:50'),
(23, 1, 35, 36, 15, 2, NULL, NULL, 1, 'page', 12, NULL, '2017-10-14 15:22:47', '2018-03-26 17:44:09', '2017-11-12 17:49:43'),
(24, 1, 37, 38, 15, 3, NULL, NULL, 1, 'page', 13, NULL, '2017-10-14 15:22:53', '2018-03-26 17:44:09', '2017-11-12 17:49:34'),
(25, 1, 39, 40, 15, 4, NULL, NULL, 1, 'page', 14, NULL, '2017-10-14 15:22:58', '2018-03-26 17:44:09', '2017-11-12 17:49:08'),
(26, 1, 41, 42, 15, 5, NULL, NULL, 1, 'page', 15, NULL, '2017-10-14 15:23:07', '2018-03-26 17:44:09', '2017-11-12 17:48:58'),
(27, 1, 43, 44, 15, 6, NULL, NULL, 1, 'page', 16, NULL, '2017-10-14 15:23:17', '2018-03-26 17:44:09', '2017-11-12 17:48:47'),
(28, 1, 45, 46, 15, 7, NULL, NULL, 1, 'page', 16, NULL, '2017-10-14 15:23:22', '2018-03-26 17:44:09', '2017-10-14 15:23:40'),
(29, 1, 49, 50, NULL, 6, NULL, NULL, 1, 'page', 17, NULL, '2017-10-14 15:26:14', '2018-03-26 17:44:09', NULL),
(30, 1, 51, 52, NULL, 7, NULL, NULL, 1, 'page', 18, NULL, '2017-10-14 15:26:23', '2018-03-26 17:44:09', NULL),
(31, 1, 53, 54, NULL, 6, NULL, NULL, 1, 'page', 18, NULL, '2017-10-14 15:26:28', '2018-03-26 17:44:09', '2017-10-14 15:26:39'),
(32, 1, 55, 56, NULL, 8, NULL, NULL, 1, 'page', 19, NULL, '2017-10-14 15:26:55', '2018-03-26 17:44:09', NULL),
(33, 1, 57, 66, NULL, 4, NULL, NULL, 0, NULL, NULL, NULL, '2017-10-14 15:27:33', '2018-03-26 17:44:10', NULL),
(34, 1, 67, 74, NULL, 5, NULL, NULL, 0, NULL, NULL, NULL, '2017-10-14 15:28:04', '2018-03-26 17:44:10', NULL),
(35, 1, 62, 63, 33, 1, NULL, NULL, 1, 'page', 20, NULL, '2017-10-14 15:52:22', '2018-03-26 17:44:10', NULL),
(36, 1, 64, 65, 33, 2, NULL, NULL, 1, 'page', 21, NULL, '2017-10-14 15:52:27', '2018-03-26 17:44:10', NULL),
(37, 1, 58, 59, 33, 3, NULL, NULL, 1, 'page', 22, NULL, '2017-10-14 15:52:40', '2018-03-26 17:44:10', NULL),
(38, 1, 60, 61, 33, 4, NULL, NULL, 1, 'page', 23, NULL, '2017-10-14 15:52:58', '2018-03-26 17:44:10', NULL),
(39, 1, 70, 71, 34, 1, NULL, NULL, 1, 'page', 24, NULL, '2017-10-14 15:53:14', '2018-03-26 17:44:10', NULL),
(40, 1, 72, 73, 34, 2, NULL, NULL, 1, 'page', 25, NULL, '2017-10-14 15:53:18', '2018-03-26 17:44:10', NULL),
(41, 1, 68, 69, 34, 3, NULL, NULL, 1, 'page', 26, NULL, '2017-10-14 15:53:48', '2018-03-26 17:44:10', NULL),
(42, 1, 75, 76, NULL, 10, NULL, NULL, 1, 'page', 2, NULL, '2017-10-15 09:20:57', '2018-03-26 17:44:10', '2017-10-15 09:21:34'),
(43, 1, 77, 78, NULL, 10, NULL, NULL, 1, 'page', 2, NULL, '2017-10-15 09:21:00', '2018-03-26 17:44:10', '2017-10-15 09:21:24'),
(44, 1, 79, 92, NULL, 3, NULL, NULL, 1, 'tables', 14, 'faculty', '2017-11-12 17:38:23', '2018-03-26 17:44:11', NULL),
(45, 1, 2, 3, 1, 2, NULL, NULL, 1, 'tables', 14, 'faculty', '2017-11-12 17:45:06', '2017-11-12 17:46:05', '2017-11-12 17:46:05'),
(46, 1, 24, 25, 2, 3, NULL, NULL, 1, 'page', 29, NULL, '2018-03-26 17:44:08', '2018-03-26 17:44:24', NULL),
(47, 1, 93, 94, NULL, 9, NULL, 'https://www.fb.com', 0, NULL, NULL, NULL, '2018-10-26 06:56:55', '2018-10-26 11:40:37', '2018-10-26 11:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `site_menu_name_langs`
--

CREATE TABLE `site_menu_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_menu_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_menu_name_langs`
--

INSERT INTO `site_menu_name_langs` (`id`, `site_menu_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'About University', '2017-10-14 14:56:06', '2017-10-14 14:56:06', NULL),
(2, 2, 2, 'حول الجامعة', '2017-10-14 14:56:06', '2017-10-14 14:56:06', NULL),
(3, 5, 1, 'Hierarchy', '2017-10-14 15:01:05', '2018-03-26 17:34:57', '2018-03-26 17:34:57'),
(4, 5, 2, 'الهيكلية', '2017-10-14 15:01:05', '2018-03-26 17:34:57', '2018-03-26 17:34:57'),
(5, 13, 1, 'Medical', '2017-10-14 15:11:23', '2017-11-12 17:48:19', '2017-11-12 17:48:19'),
(6, 13, 2, 'طبي', '2017-10-14 15:11:23', '2017-11-12 17:48:19', '2017-11-12 17:48:19'),
(7, 14, 1, 'Faculties', '2017-10-14 15:12:30', '2017-11-12 17:50:47', '2017-11-12 17:50:47'),
(8, 14, 2, 'الكليات', '2017-10-14 15:12:30', '2017-11-12 17:50:47', '2017-11-12 17:50:47'),
(9, 15, 1, 'Engineering', '2017-10-14 15:13:31', '2017-11-12 17:50:08', '2017-11-12 17:50:08'),
(10, 15, 2, 'الهندسة', '2017-10-14 15:13:31', '2017-11-12 17:50:08', '2017-11-12 17:50:08'),
(11, 33, 1, 'Registration And Admission', '2017-10-14 15:27:33', '2017-10-14 15:27:33', NULL),
(12, 33, 2, 'القبول والتسجيل', '2017-10-14 15:27:33', '2017-10-14 15:27:33', NULL),
(13, 34, 1, 'Study and Exams', '2017-10-14 15:28:04', '2017-10-14 15:28:04', NULL),
(14, 34, 2, 'الدراسات والامتحانات', '2017-10-14 15:28:04', '2017-10-14 15:28:04', NULL),
(15, 47, 1, 'Facebook', '2018-10-26 06:56:55', '2018-10-26 11:40:37', '2018-10-26 11:40:37'),
(16, 47, 2, 'فيسبوبك', '2018-10-26 06:56:55', '2018-10-26 11:40:37', '2018-10-26 11:40:37');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-09-08 04:52:17', '2017-09-08 04:52:17', NULL),
(2, '2017-09-08 08:51:20', '2017-09-08 08:51:20', NULL),
(3, '2018-11-04 06:07:19', '2018-11-04 06:09:07', '2018-11-04 06:09:07'),
(4, '2018-11-04 06:08:30', '2018-11-04 06:09:29', '2018-11-04 06:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `slider_details`
--

CREATE TABLE `slider_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `page_id` int(11) NOT NULL,
  `position` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_details`
--

INSERT INTO `slider_details` (`id`, `slider_id`, `image_id`, `page_id`, `position`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 12, 1, 'L', '2017-09-08 08:49:08', '2017-10-23 14:48:02', NULL),
(2, 1, 13, 2, 'C', '2017-09-28 11:55:45', '2017-10-21 14:53:47', NULL),
(3, 1, 14, 6, 'R', '2017-10-21 15:23:37', '2017-10-23 14:47:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_detail_btn_langs`
--

CREATE TABLE `slider_detail_btn_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_detail_btn_langs`
--

INSERT INTO `slider_detail_btn_langs` (`id`, `slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'View Details', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(2, 1, 2, 'View Details', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(3, 2, 1, 'Apply Now', '2017-09-28 11:55:47', '2017-10-23 14:45:09', NULL),
(4, 2, 2, 'Apply Now', '2017-09-28 11:55:47', '2017-10-23 14:45:09', NULL),
(5, 3, 1, 'Apply Now', '2017-10-21 15:23:38', '2017-10-23 14:46:54', NULL),
(6, 3, 2, 'Apply Now', '2017-10-21 15:23:39', '2017-10-23 14:46:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_detail_head_langs`
--

CREATE TABLE `slider_detail_head_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_detail_head_langs`
--

INSERT INTO `slider_detail_head_langs` (`id`, `slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Education', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(2, 1, 2, 'التعليم', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(3, 2, 1, 'Feed  your knowledge', '2017-09-28 11:55:46', '2017-10-23 14:44:31', NULL),
(4, 2, 2, 'Feed  your knowledge', '2017-09-28 11:55:46', '2017-10-23 14:44:31', NULL),
(5, 3, 1, 'Best Education', '2017-10-21 15:23:38', '2017-10-23 14:46:24', NULL),
(6, 3, 2, 'Best Education', '2017-10-21 15:23:38', '2017-10-23 14:46:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_detail_text_langs`
--

CREATE TABLE `slider_detail_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_detail_text_langs`
--

INSERT INTO `slider_detail_text_langs` (`id`, `slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'We provides always our best services for our clients and  always', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(2, 1, 2, 'We provides always our best services for our clients and  always', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(3, 2, 1, 'We provides always our best services for our clients and always', '2017-09-28 11:55:46', '2017-10-23 14:45:09', NULL),
(4, 2, 2, 'We provides always our best services for our clients and always', '2017-09-28 11:55:47', '2017-10-23 14:45:09', NULL),
(5, 3, 1, 'We provides always our best services for our clients and always', '2017-10-21 15:23:38', '2017-10-23 14:46:54', NULL),
(6, 3, 2, 'We provides always our best services for our clients and always', '2017-10-21 15:23:38', '2017-10-23 14:46:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_detail_title_langs`
--

CREATE TABLE `slider_detail_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_detail_title_langs`
--

INSERT INTO `slider_detail_title_langs` (`id`, `slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, NULL, '2017-09-08 08:49:08', '2018-10-26 04:40:23', NULL),
(2, 1, 2, NULL, '2017-09-08 08:49:08', '2018-10-26 04:40:23', NULL),
(3, 2, 1, 'World\'s best university', '2017-09-28 11:55:46', '2017-10-23 14:44:31', NULL),
(4, 2, 2, 'World\'s best university', '2017-09-28 11:55:46', '2017-10-23 14:44:31', NULL),
(5, 3, 1, 'For Your Better Future', '2017-10-21 15:23:38', '2017-10-23 14:46:24', NULL),
(6, 3, 2, 'For Your Better Future', '2017-10-21 15:23:38', '2017-10-23 14:46:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_name_langs`
--

CREATE TABLE `slider_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_name_langs`
--

INSERT INTO `slider_name_langs` (`id`, `slider_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Home Slider', '2017-09-08 04:52:17', '2017-09-08 04:52:17', NULL),
(2, 1, 2, 'شرائح صفحة الرئيسية', '2017-09-08 04:52:17', '2017-09-08 04:52:17', NULL),
(3, 2, 1, 'University Slider', '2017-09-08 08:51:20', '2017-09-08 08:51:20', NULL),
(4, 2, 2, 'مقر الجامعة', '2017-09-08 08:51:21', '2017-09-08 08:51:21', NULL),
(5, 4, 1, 'test', '2018-11-04 06:08:31', '2018-11-04 06:09:30', '2018-11-04 06:09:30'),
(6, 4, 2, 'اختبار', '2018-11-04 06:08:31', '2018-11-04 06:09:30', '2018-11-04 06:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `social_networks`
--

CREATE TABLE `social_networks` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_networks`
--

INSERT INTO `social_networks` (`id`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'facebook', '2017-06-16 14:45:24', '2017-06-16 14:45:24', NULL),
(2, 'twitter', '2017-11-03 02:39:05', '2017-11-03 02:39:05', NULL),
(3, 'instagram', '2017-11-03 02:40:19', '2017-11-03 02:40:19', NULL),
(4, 'skype', '2017-11-03 02:40:51', '2017-11-03 02:40:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_network_name_langs`
--

CREATE TABLE `social_network_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `social_network_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_network_name_langs`
--

INSERT INTO `social_network_name_langs` (`id`, `social_network_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Facebook', '2017-06-16 14:45:24', '2017-06-16 14:45:24', NULL),
(2, 1, 2, 'فيسبوك', '2017-06-16 14:45:24', '2017-06-16 14:45:24', NULL),
(3, 2, 1, 'Twitter', '2017-11-03 02:39:05', '2017-11-03 02:39:05', NULL),
(4, 2, 2, 'تويتر', '2017-11-03 02:39:05', '2017-11-03 02:39:05', NULL),
(5, 3, 1, 'Instagram', '2017-11-03 02:40:19', '2017-11-03 02:40:19', NULL),
(6, 3, 2, 'انستغرام', '2017-11-03 02:40:19', '2017-11-03 02:40:19', NULL),
(7, 4, 1, 'Skype', '2017-11-03 02:40:51', '2017-11-03 02:40:51', NULL),
(8, 4, 2, 'سكايب', '2017-11-03 02:40:51', '2017-11-03 02:40:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2018-05-13 12:37:15', '2018-05-13 12:37:15', NULL),
(2, '2018-05-13 12:37:58', '2018-05-13 12:37:58', NULL),
(3, '2018-05-13 12:38:23', '2018-05-13 12:38:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_name_langs`
--

CREATE TABLE `status_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_name_langs`
--

INSERT INTO `status_name_langs` (`id`, `status_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Draft', '2018-05-13 12:37:15', '2018-05-13 12:37:15', NULL),
(2, 1, 2, 'مسودة', '2018-05-13 12:37:15', '2018-05-13 12:37:15', NULL),
(3, 2, 1, 'Pending review', '2018-05-13 12:37:58', '2018-05-13 12:37:58', NULL),
(4, 2, 2, 'بانتظار تاكيد', '2018-05-13 12:37:58', '2018-05-13 12:37:58', NULL),
(5, 3, 1, 'Reviewed', '2018-05-13 12:38:24', '2018-05-13 12:38:24', NULL),
(6, 3, 2, 'تمت مراجعته', '2018-05-13 12:38:24', '2018-05-13 12:38:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `steps`
--

INSERT INTO `steps` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-10-06 01:38:28', '2017-10-06 01:38:28', NULL),
(2, '2017-10-06 02:12:30', '2017-10-06 02:12:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `step_text_langs`
--

CREATE TABLE `step_text_langs` (
  `id` int(11) NOT NULL,
  `step_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `step_text_langs`
--

INSERT INTO `step_text_langs` (`id`, `step_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam', '2017-10-06 01:38:28', '2017-10-06 01:38:28', NULL),
(2, 1, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam', '2017-10-06 01:38:28', '2017-10-06 01:38:28', NULL),
(3, 2, 1, 'test', '2017-10-06 02:12:31', '2017-10-06 02:12:31', NULL),
(4, 2, 2, 'test', '2017-10-06 02:12:31', '2017-10-06 02:12:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `step_title_langs`
--

CREATE TABLE `step_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `step_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `step_title_langs`
--

INSERT INTO `step_title_langs` (`id`, `step_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Why this Company is Best?', '2017-10-06 01:38:28', '2017-10-06 01:38:28', NULL),
(2, 1, 2, 'Why this Company is Best?', '2017-10-06 01:38:28', '2017-10-06 01:38:28', NULL),
(3, 2, 1, 'test', '2017-10-06 02:12:30', '2017-10-06 02:12:30', NULL),
(4, 2, 2, 'test', '2017-10-06 02:12:31', '2017-10-06 02:12:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `study_years`
--

CREATE TABLE `study_years` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_years`
--

INSERT INTO `study_years` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '2017-11-28 17:54:22', '2017-11-28 17:54:22', NULL),
(3, '2017-11-28 17:54:47', '2017-11-28 17:54:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `study_year_name_langs`
--

CREATE TABLE `study_year_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `study_year_id` int(10) UNSIGNED DEFAULT NULL,
  `lang_id` int(10) UNSIGNED DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `study_year_name_langs`
--

INSERT INTO `study_year_name_langs` (`id`, `study_year_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 2, 1, 'First Year', '2017-11-28 17:54:22', '2017-11-28 17:54:22', NULL),
(4, 2, 2, 'السنة الأولى', '2017-11-28 17:54:22', '2017-11-28 17:54:22', NULL),
(5, 3, 1, 'Second Year', '2017-11-28 17:54:47', '2017-11-28 17:54:47', NULL),
(6, 3, 2, 'السنة الثانية', '2017-11-28 17:54:47', '2017-11-28 17:54:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namespace` varchar(400) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pageable` tinyint(1) NOT NULL,
  `pageable_column` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menuable` tinyint(1) NOT NULL,
  `dynamic` tinyint(1) NOT NULL DEFAULT '0',
  `morph_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `table_name`, `namespace`, `pageable`, `pageable_column`, `menuable`, `dynamic`, `morph_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'attributes', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-15 17:44:05', '2018-01-05 05:02:56', NULL),
(2, 'block_details', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 15:24:39', '2018-01-05 05:06:07', NULL),
(3, 'blocks', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 15:25:08', '2018-01-05 05:06:24', NULL),
(4, 'builder_pages', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 15:25:24', '2018-01-05 05:06:40', NULL),
(5, 'contacts', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 16:18:42', '2018-01-05 07:01:23', NULL),
(6, 'control_menus', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 16:18:57', '2018-01-05 07:01:39', NULL),
(7, 'contact_social_network', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:25:37', '2018-01-05 07:01:56', NULL),
(8, 'control_pages', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:26:02', '2018-01-05 07:00:59', NULL),
(9, 'courses', '\\Modules\\Admin\\Entities\\Course', 1, 'lang:name', 1, 1, 'course', '2017-12-16 18:26:52', '2018-05-20 11:42:48', NULL),
(10, 'custom_module_attribute_values', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:27:17', '2018-01-05 07:02:16', NULL),
(11, 'custom_modules', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:27:42', '2018-01-05 07:02:35', NULL),
(12, 'degrees', '\\Modules\\Admin\\Entities\\Degree', 1, 'lang:name', 0, 0, 'degree', '2017-12-16 18:28:01', '2018-01-05 10:47:38', NULL),
(13, 'departments', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, 'department', '2017-12-16 18:28:26', '2018-01-05 07:02:51', NULL),
(14, 'faculties', '\\Modules\\Admin\\Entities\\Faculty', 1, 'lang:name', 1, 1, 'faculty', '2017-12-16 18:28:45', '2018-04-10 13:57:59', NULL),
(15, 'faculty_study_year', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:29:07', '2018-01-05 07:03:08', NULL),
(16, 'genders', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:29:25', '2018-01-05 07:03:25', NULL),
(17, 'hierarchies', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:29:46', '2018-01-05 07:03:43', NULL),
(18, 'hierarchy_types', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:30:06', '2018-01-05 07:04:26', NULL),
(19, 'icons', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:30:32', '2018-01-05 07:04:39', NULL),
(20, 'image_lab', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:30:57', '2018-01-05 07:04:54', NULL),
(21, 'image_partner', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:32:38', '2018-01-05 07:04:07', NULL),
(22, 'images', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:32:54', '2018-01-05 07:05:10', NULL),
(23, 'job_titles', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:33:23', '2018-01-05 07:05:22', NULL),
(24, 'labs', '\\Modules\\Admin\\Entities\\Lab', 1, 'lang:name', 0, 1, 'lab', '2017-12-16 18:33:41', '2018-05-26 13:24:00', NULL),
(26, 'langs', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:34:32', '2018-01-05 07:05:54', NULL),
(29, 'migrations', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:36:05', '2018-01-05 07:07:04', NULL),
(30, 'module_attribute', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:36:20', '2018-01-05 07:07:14', NULL),
(31, 'modules', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:36:48', '2018-01-05 07:07:30', NULL),
(32, 'pages', '\\Modules\\Utilities\\Entities\\Page', 1, 'lang:name', 1, 0, 'page', '2017-12-16 18:37:16', '2018-01-05 10:55:20', NULL),
(33, 'partners', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:37:33', '2018-01-05 07:06:48', NULL),
(34, 'password_resets', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:37:46', '2018-01-05 07:07:47', NULL),
(35, 'people', '\\Modules\\Admin\\Entities\\Person', 1, 'lang:name', 0, 0, 'person', '2017-12-16 18:38:10', '2018-01-05 10:55:34', NULL),
(36, 'positions', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:38:41', '2018-01-05 07:08:03', NULL),
(37, 'prerequisite', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:39:05', '2018-01-05 07:08:14', NULL),
(38, 'prerequisite_groups', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:39:23', '2018-01-05 07:08:35', NULL),
(39, 'semesters', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:39:38', '2018-01-05 07:08:49', NULL),
(40, 'settings', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:39:52', '2018-01-05 07:09:03', NULL),
(41, 'site_menus', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:40:32', '2018-01-05 07:09:34', NULL),
(42, 'slider_details', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:41:53', '2018-01-05 07:09:45', NULL),
(43, 'sliders', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:42:05', '2018-01-05 07:09:58', NULL),
(44, 'social_networks', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:42:20', '2018-01-05 07:09:23', NULL),
(45, 'steps', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:42:33', '2018-01-05 07:10:10', NULL),
(46, 'study_years', '\\Modules\\Admin\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:42:53', '2018-01-05 07:10:21', NULL),
(47, 'tables', '\\Modules\\Utilities\\Entities\\table', 0, NULL, 0, 0, 'tables', '2017-12-16 18:43:22', '2018-01-05 07:10:32', NULL),
(48, 'text_cards', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:43:35', '2018-01-05 07:10:44', NULL),
(50, 'university_offices', '\\Modules\\Admin\\Entities\\UniversityOffice', 1, 'lang:name', 0, 0, 'university-office', '2017-12-16 18:47:41', '2018-01-05 10:55:57', NULL),
(51, 'users', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, 'user', '2017-12-16 18:47:56', '2018-05-18 03:45:13', NULL),
(52, 'vertical_slider_details', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:48:18', '2018-01-05 07:11:12', NULL),
(53, 'vertical_sliders', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-16 18:48:33', '2018-01-05 07:11:27', NULL),
(54, 'language_tables', '\\Modules\\Utilities\\Entities', 0, NULL, 0, 0, NULL, '2017-12-22 09:40:41', '2018-01-05 07:11:43', NULL),
(55, 'news', '\\Modules\\Admin\\Entities\\News', 1, 'lang:title', 0, 0, 'news', '2018-05-18 02:53:04', '2018-05-18 02:53:04', NULL),
(56, 'campuses', '\\Modules\\Admin\\Entities\\Campus', 0, NULL, 0, 0, 'campus', '2018-11-03 13:08:33', '2018-11-03 13:09:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_name_langs`
--

CREATE TABLE `table_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_name_langs`
--

INSERT INTO `table_name_langs` (`id`, `table_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 14, 1, 'Faculties', '2018-04-10 14:00:35', '2018-04-10 14:00:35', NULL),
(2, 14, 2, 'الكليات', '2018-04-10 14:00:35', '2018-04-10 14:00:35', NULL),
(3, 9, 1, 'Courses', '2018-04-10 14:16:24', '2018-04-10 14:16:24', NULL),
(4, 9, 2, 'المقررات', '2018-04-10 14:16:24', '2018-04-10 14:16:24', NULL),
(5, 12, 1, 'Degrees', '2018-04-10 14:16:43', '2018-04-10 14:16:43', NULL),
(6, 12, 2, 'الشهادات', '2018-04-10 14:16:44', '2018-04-10 14:16:44', NULL),
(7, 32, 1, 'Pages', '2018-04-10 14:17:05', '2018-04-10 14:17:05', NULL),
(8, 32, 2, 'الصفحات', '2018-04-10 14:17:05', '2018-04-10 14:17:05', NULL),
(9, 35, 1, 'People', '2018-04-10 14:17:28', '2018-04-10 14:17:28', NULL),
(10, 35, 2, 'الاشخاص', '2018-04-10 14:17:28', '2018-04-10 14:17:28', NULL),
(11, 50, 1, 'University Offices', '2018-04-10 14:17:53', '2018-04-10 14:17:53', NULL),
(12, 50, 2, 'مكاتب الجامعة', '2018-04-10 14:17:53', '2018-04-10 14:17:53', NULL),
(13, 55, 1, 'News', '2018-05-18 02:55:41', '2018-05-18 02:55:41', NULL),
(14, 55, 2, 'الاخبار', '2018-05-18 02:55:41', '2018-05-18 02:55:41', NULL),
(15, 24, 1, 'Labs', '2018-05-26 13:21:04', '2018-05-26 13:21:04', NULL),
(16, 24, 2, 'المخابر', '2018-05-26 13:21:04', '2018-05-26 13:21:04', NULL),
(17, 56, 1, 'الحرم الجامعية', '2018-11-03 13:08:34', '2018-11-03 13:10:05', NULL),
(18, 56, 2, 'Campuses', '2018-11-03 13:08:34', '2018-11-03 13:10:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `text_cards`
--

CREATE TABLE `text_cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `text_cards`
--

INSERT INTO `text_cards` (`id`, `icon_id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 361, 'location:#405, Lan Streen, Los Vegas, USA', '2017-10-17 15:48:57', '2017-10-17 15:48:57', NULL),
(2, 10, 'tel:+325 12345 65478', '2017-10-17 15:49:54', '2017-10-17 15:49:54', NULL),
(3, 334, 'mailto:supporte@yourdomin.com', '2017-10-17 15:51:38', '2017-10-17 15:51:38', NULL),
(4, 496, 'http://www.youtube.com', '2017-10-17 15:52:21', '2017-10-31 16:52:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `text_card_title_langs`
--

CREATE TABLE `text_card_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `text_card_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(600) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `text_card_title_langs`
--

INSERT INTO `text_card_title_langs` (`id`, `text_card_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'OUR OFFICE LOCATION', '2017-10-17 15:48:57', '2017-10-17 15:48:57', NULL),
(2, 1, 2, 'OUR OFFICE LOCATION', '2017-10-17 15:48:57', '2017-10-17 15:48:57', NULL),
(3, 2, 1, 'OUR CONTACT NUMBER', '2017-10-17 15:49:55', '2017-10-17 15:49:55', NULL),
(4, 2, 2, 'OUR CONTACT NUMBER', '2017-10-17 15:49:55', '2017-10-17 15:49:55', NULL),
(5, 3, 1, 'OUR CONTACT E-MAIL', '2017-10-17 15:51:38', '2017-10-17 15:51:38', NULL),
(6, 3, 2, 'OUR CONTACT E-MAIL', '2017-10-17 15:51:38', '2017-10-17 15:51:38', NULL),
(7, 4, 1, 'Make a Video Call', '2017-10-17 15:52:21', '2017-10-17 15:52:21', NULL),
(8, 4, 2, 'Make a Video Call', '2017-10-17 15:52:21', '2017-10-17 15:52:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `university_offices`
--

CREATE TABLE `university_offices` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `university_office_name_langs`
--

CREATE TABLE `university_office_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_office_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'AUT405', 'AUT405@automata4.com', '$2y$10$LfiA2E6QTwPMD1s06qIMjuFQgArVYP5xojXdRnXoelbTxogdWbV8S', NULL, 'FOHYbFMuKZDAr8PvgHm6pE8C4Q6ErRPVQtklcujjzXCZoUdYSIGiGp6HBaLg', '2017-11-10 17:22:23', '2018-03-14 10:54:22', NULL),
(2, 'Andalus', 'admin@andalus.com', '$2y$10$Od4I2nPN5wK756IQZECk8OReVXDUNwGqEwAF2Bj3lHXjApQ/z3gAW', NULL, 'nFxFuy1yLQt3V1QxKooX41ewGWYl0LjzHbv48imkgP7MOZoENPTAiC3gwWHa', '2018-03-15 06:44:24', '2018-03-15 06:44:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_name_langs`
--

CREATE TABLE `user_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_name_langs`
--

INSERT INTO `user_name_langs` (`id`, `user_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Automata4 Group', '2018-03-14 10:53:45', '2018-03-14 10:53:45', NULL),
(2, 1, 2, 'مجموعة اوتوماتا4', '2018-03-14 10:53:45', '2018-03-14 10:53:45', NULL),
(3, 2, 1, 'Andalus University', '2018-03-15 06:44:25', '2018-03-15 06:44:25', NULL),
(4, 2, 2, 'جامعة الاندلس', '2018-03-15 06:44:25', '2018-03-15 06:44:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_summary_langs`
--

CREATE TABLE `user_summary_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `lang_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_summary_langs`
--

INSERT INTO `user_summary_langs` (`id`, `user_id`, `text`, `created_at`, `updated_at`, `deleted_at`, `lang_id`) VALUES
(1, 1, 'Automata4 Group Administration', '2018-03-14 10:53:45', '2018-03-14 10:53:45', NULL, 1),
(2, 1, 'إدارة مجموعة اوتوماتا4', '2018-03-14 10:53:45', '2018-03-14 10:53:45', NULL, 2),
(3, 2, 'Al Andalus Adminstrative', '2018-03-15 06:44:25', '2018-03-15 06:44:25', NULL, 1),
(4, 2, 'مديرية جامعة الاندلس', '2018-03-15 06:44:25', '2018-03-15 06:44:25', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_sliders`
--

CREATE TABLE `vertical_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vertical_sliders`
--

INSERT INTO `vertical_sliders` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-09-24 15:08:34', '2017-09-24 15:08:34', NULL),
(2, '2017-09-24 15:08:46', '2017-09-24 15:08:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_details`
--

CREATE TABLE `vertical_slider_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vertical_slider_details`
--

INSERT INTO `vertical_slider_details` (`id`, `vertical_slider_id`, `image_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, '2017-09-24 15:23:45', '2017-09-24 15:25:41', '2017-09-24 15:25:41'),
(2, 1, 20, '2017-09-24 15:25:24', '2017-10-29 16:22:16', NULL),
(3, 1, 15, '2017-10-25 16:19:26', '2017-10-25 16:20:07', NULL),
(4, 1, 16, '2017-10-25 16:20:29', '2017-10-25 16:20:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_detail_small_text_langs`
--

CREATE TABLE `vertical_slider_detail_small_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vertical_slider_detail_small_text_langs`
--

INSERT INTO `vertical_slider_detail_small_text_langs` (`id`, `vertical_slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'CEO apple.inc', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(2, 2, 2, 'CEO apple.inc', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(3, 3, 1, 'CEO apple.inc', '2017-10-25 16:19:27', '2017-10-25 16:19:27', NULL),
(4, 3, 2, 'CEO apple.inc', '2017-10-25 16:19:27', '2017-10-25 16:19:27', NULL),
(5, 4, 1, 'CEO apple.inc', '2017-10-25 16:20:30', '2017-10-25 16:20:30', NULL),
(6, 4, 2, 'CEO apple.inc', '2017-10-25 16:20:30', '2017-10-25 16:20:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_detail_sub_text_langs`
--

CREATE TABLE `vertical_slider_detail_sub_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vertical_slider_detail_sub_text_langs`
--

INSERT INTO `vertical_slider_detail_sub_text_langs` (`id`, `vertical_slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, '- Catherine Grace,', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(2, 2, 2, '- Catherine Grace,', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(3, 3, 1, '- Catherine Grace,', '2017-10-25 16:19:26', '2017-10-25 16:19:26', NULL),
(4, 3, 2, '- Catherine Grace,', '2017-10-25 16:19:26', '2017-10-25 16:19:26', NULL),
(5, 4, 1, '- Catherine Grace,', '2017-10-25 16:20:29', '2017-10-25 16:20:29', NULL),
(6, 4, 2, '- Catherine Grace,', '2017-10-25 16:20:29', '2017-10-25 16:20:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_detail_text_langs`
--

CREATE TABLE `vertical_slider_detail_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vertical_slider_detail_text_langs`
--

INSERT INTO `vertical_slider_detail_text_langs` (`id`, `vertical_slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-09-24 15:23:45', '2017-09-24 15:25:41', '2017-09-24 15:25:41'),
(2, 1, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-09-24 15:23:46', '2017-09-24 15:25:41', '2017-09-24 15:25:41'),
(3, 2, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(4, 2, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(5, 3, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-10-25 16:19:26', '2017-10-25 16:19:26', NULL),
(6, 3, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-10-25 16:19:26', '2017-10-25 16:19:26', NULL),
(7, 4, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-10-25 16:20:29', '2017-10-25 16:20:29', NULL),
(8, 4, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-10-25 16:20:29', '2017-10-25 16:20:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_name_langs`
--

CREATE TABLE `vertical_slider_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vertical_slider_name_langs`
--

INSERT INTO `vertical_slider_name_langs` (`id`, `vertical_slider_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Test Vertical Sliders 1', '2017-09-24 15:08:34', '2017-09-24 15:08:59', NULL),
(2, 1, 2, 'Test Vertical Sliders 1', '2017-09-24 15:08:34', '2017-09-24 15:08:59', NULL),
(3, 2, 1, 'Test Vertical Sliders 2', '2017-09-24 15:08:46', '2017-09-24 15:08:46', NULL),
(4, 2, 2, 'Test Vertical Sliders 2', '2017-09-24 15:08:46', '2017-09-24 15:08:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addresses_location_langs`
--
ALTER TABLE `addresses_location_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_name_langs`
--
ALTER TABLE `attribute_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`attribute_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_details`
--
ALTER TABLE `block_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_id` (`block_id`),
  ADD KEY `icon_id` (`icon_id`),
  ADD KEY `page_id` (`page_id`),
  ADD KEY `front_image_id` (`front_image_id`),
  ADD KEY `back_image_id` (`back_image_id`);

--
-- Indexes for table `block_detail_btn_langs`
--
ALTER TABLE `block_detail_btn_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_detail_id` (`block_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `block_detail_text_langs`
--
ALTER TABLE `block_detail_text_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_detail_id` (`block_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `block_detail_title_langs`
--
ALTER TABLE `block_detail_title_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_detail_id` (`block_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `block_name_langs`
--
ALTER TABLE `block_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `block_id` (`block_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `builder_pages`
--
ALTER TABLE `builder_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buildable_id` (`buildable_id`),
  ADD KEY `optional_id` (`optional_id`);

--
-- Indexes for table `campuses`
--
ALTER TABLE `campuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campus_name_langs`
--
ALTER TABLE `campus_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campus_id` (`campus_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_address_langs`
--
ALTER TABLE `contact_address_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `control_menus`
--
ALTER TABLE `control_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `control_menus__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `control_pages`
--
ALTER TABLE `control_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_content_langs`
--
ALTER TABLE `course_content_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `course_description_langs`
--
ALTER TABLE `course_description_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_name_langs`
--
ALTER TABLE `course_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `custom_modules`
--
ALTER TABLE `custom_modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`);

--
-- Indexes for table `custom_module_attribute_values`
--
ALTER TABLE `custom_module_attribute_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_module_id` (`custom_module_id`),
  ADD KEY `attribute_id` (`attribute_id`);

--
-- Indexes for table `custom_module_attribute_value_multi_langs`
--
ALTER TABLE `custom_module_attribute_value_multi_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_module_attribute_value_id` (`custom_module_attribute_value_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `custom_module_name_langs`
--
ALTER TABLE `custom_module_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_module_id` (`custom_module_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `degrees`
--
ALTER TABLE `degrees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree_name_langs`
--
ALTER TABLE `degree_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `degree_id` (`degree_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_name_langs`
--
ALTER TABLE `department_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campus_id` (`campus_id`);

--
-- Indexes for table `faculty_name_langs`
--
ALTER TABLE `faculty_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `faculty_study_year`
--
ALTER TABLE `faculty_study_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_id` (`gallery_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `gallery_title_langs`
--
ALTER TABLE `gallery_title_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_id` (`gallery_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender_name_langs`
--
ALTER TABLE `gender_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`gender_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `hierarchies`
--
ALTER TABLE `hierarchies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hierarchies__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `hierarchy_name_langs`
--
ALTER TABLE `hierarchy_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hierarchy_id` (`hierarchy_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `hierarchy_types`
--
ALTER TABLE `hierarchy_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hierarchy_type_name_langs`
--
ALTER TABLE `hierarchy_type_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hierarchy_type_id` (`hierarchy_type_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_alt_langs`
--
ALTER TABLE `image_alt_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `image_lab`
--
ALTER TABLE `image_lab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lab_id` (`lab_id`);

--
-- Indexes for table `image_partner`
--
ALTER TABLE `image_partner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lab_id` (`partner_id`);

--
-- Indexes for table `job_titles`
--
ALTER TABLE `job_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_title_name_langs`
--
ALTER TABLE `job_title_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_title_id` (`job_title_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `labs`
--
ALTER TABLE `labs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_description_langs`
--
ALTER TABLE `lab_description_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lap_id` (`lab_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `lab_name_langs`
--
ALTER TABLE `lab_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lap_id` (`lab_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `langs`
--
ALTER TABLE `langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language_tables`
--
ALTER TABLE `language_tables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indexes for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_lists`
--
ALTER TABLE `menu_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_list_name_langs`
--
ALTER TABLE `menu_list_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_list_id` (`menu_list_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `module_attribute`
--
ALTER TABLE `module_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_description_langs`
--
ALTER TABLE `module_description_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `module_id` (`module_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `module_name_langs`
--
ALTER TABLE `module_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`module_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `reviewer_id` (`reviewer_id`);

--
-- Indexes for table `news_content_langs`
--
ALTER TABLE `news_content_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `news_description_langs`
--
ALTER TABLE `news_description_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `news_title_langs`
--
ALTER TABLE `news_title_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_name_langs`
--
ALTER TABLE `page_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `page_id` (`page_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_description_langs`
--
ALTER TABLE `partner_description_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_name_langs`
--
ALTER TABLE `partner_name_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `people`
--
ALTER TABLE `people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_name_langs`
--
ALTER TABLE `permission_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_id` (`permission_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `person_experience_langs`
--
ALTER TABLE `person_experience_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `person_name_langs`
--
ALTER TABLE `person_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `person_summary_langs`
--
ALTER TABLE `person_summary_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_id` (`person_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position_name_langs`
--
ALTER TABLE `position_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position_id` (`position_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `prerequisite`
--
ALTER TABLE `prerequisite`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prerequisite_groups`
--
ALTER TABLE `prerequisite_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_name_langs`
--
ALTER TABLE `role_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester_name_langs`
--
ALTER TABLE `semester_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `semester_id` (`semester_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `graph_image` (`graph_image_id`),
  ADD KEY `card_image` (`card_image_id`),
  ADD KEY `buildable_id` (`buildable_id`),
  ADD KEY `optional_id` (`optional_id`);

--
-- Indexes for table `seo_article_section_langs`
--
ALTER TABLE `seo_article_section_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id` (`seo_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `seo_article_tag_langs`
--
ALTER TABLE `seo_article_tag_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id` (`seo_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `seo_book_tag_langs`
--
ALTER TABLE `seo_book_tag_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id` (`seo_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `seo_description_langs`
--
ALTER TABLE `seo_description_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id` (`seo_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `seo_keyword_langs`
--
ALTER TABLE `seo_keyword_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id` (`seo_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `seo_profile_first_name_langs`
--
ALTER TABLE `seo_profile_first_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id` (`seo_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `seo_profile_last_name_langs`
--
ALTER TABLE `seo_profile_last_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id` (`seo_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `seo_title_langs`
--
ALTER TABLE `seo_title_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seo_id` (`seo_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_name_langs`
--
ALTER TABLE `setting_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_id` (`setting_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `site_menus`
--
ALTER TABLE `site_menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `site_menus_menuable_type_menuable_id_index` (`menuable_type`,`menuable_id`),
  ADD KEY `site_menus__lft__rgt_parent_id_index` (`_lft`,`_rgt`,`parent_id`);

--
-- Indexes for table `site_menu_name_langs`
--
ALTER TABLE `site_menu_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `site_menu_id` (`site_menu_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_details`
--
ALTER TABLE `slider_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_id` (`slider_id`),
  ADD KEY `image_id` (`image_id`),
  ADD KEY `page_id` (`page_id`);

--
-- Indexes for table `slider_detail_btn_langs`
--
ALTER TABLE `slider_detail_btn_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_detail_id` (`slider_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `slider_detail_head_langs`
--
ALTER TABLE `slider_detail_head_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_detail_id` (`slider_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `slider_detail_text_langs`
--
ALTER TABLE `slider_detail_text_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_detail_id` (`slider_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `slider_detail_title_langs`
--
ALTER TABLE `slider_detail_title_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_detail_id` (`slider_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `slider_name_langs`
--
ALTER TABLE `slider_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slider_id` (`slider_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_network_name_langs`
--
ALTER TABLE `social_network_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_network_id` (`social_network_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_name_langs`
--
ALTER TABLE `status_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `steps`
--
ALTER TABLE `steps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `step_text_langs`
--
ALTER TABLE `step_text_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `step_id` (`step_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `step_title_langs`
--
ALTER TABLE `step_title_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `step_id` (`step_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `study_years`
--
ALTER TABLE `study_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_year_name_langs`
--
ALTER TABLE `study_year_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `study_year_id` (`study_year_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_name_langs`
--
ALTER TABLE `table_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_id` (`table_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `text_cards`
--
ALTER TABLE `text_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `icon_id` (`icon_id`);

--
-- Indexes for table `text_card_title_langs`
--
ALTER TABLE `text_card_title_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `text_card_id` (`text_card_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `university_offices`
--
ALTER TABLE `university_offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_office_name_langs`
--
ALTER TABLE `university_office_name_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_name_langs`
--
ALTER TABLE `user_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `user_summary_langs`
--
ALTER TABLE `user_summary_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `vertical_sliders`
--
ALTER TABLE `vertical_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vertical_slider_details`
--
ALTER TABLE `vertical_slider_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vertical_slider_id` (`vertical_slider_id`),
  ADD KEY `image_id` (`image_id`);

--
-- Indexes for table `vertical_slider_detail_small_text_langs`
--
ALTER TABLE `vertical_slider_detail_small_text_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vertical_slider_detail_id` (`vertical_slider_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `vertical_slider_detail_sub_text_langs`
--
ALTER TABLE `vertical_slider_detail_sub_text_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vertical_slider_detail_id` (`vertical_slider_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `vertical_slider_detail_text_langs`
--
ALTER TABLE `vertical_slider_detail_text_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vertical_detail_id` (`vertical_slider_detail_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `vertical_slider_name_langs`
--
ALTER TABLE `vertical_slider_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vertical_slider_id` (`vertical_slider_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addresses_location_langs`
--
ALTER TABLE `addresses_location_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `attribute_name_langs`
--
ALTER TABLE `attribute_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `block_details`
--
ALTER TABLE `block_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `block_detail_btn_langs`
--
ALTER TABLE `block_detail_btn_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `block_detail_text_langs`
--
ALTER TABLE `block_detail_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `block_detail_title_langs`
--
ALTER TABLE `block_detail_title_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `block_name_langs`
--
ALTER TABLE `block_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `builder_pages`
--
ALTER TABLE `builder_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `campuses`
--
ALTER TABLE `campuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campus_name_langs`
--
ALTER TABLE `campus_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_address_langs`
--
ALTER TABLE `contact_address_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `control_menus`
--
ALTER TABLE `control_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `control_pages`
--
ALTER TABLE `control_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_content_langs`
--
ALTER TABLE `course_content_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_description_langs`
--
ALTER TABLE `course_description_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_name_langs`
--
ALTER TABLE `course_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `custom_modules`
--
ALTER TABLE `custom_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `custom_module_attribute_values`
--
ALTER TABLE `custom_module_attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `custom_module_attribute_value_multi_langs`
--
ALTER TABLE `custom_module_attribute_value_multi_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `custom_module_name_langs`
--
ALTER TABLE `custom_module_name_langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `degrees`
--
ALTER TABLE `degrees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `degree_name_langs`
--
ALTER TABLE `degree_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department_name_langs`
--
ALTER TABLE `department_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculty_name_langs`
--
ALTER TABLE `faculty_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `faculty_study_year`
--
ALTER TABLE `faculty_study_year`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery_title_langs`
--
ALTER TABLE `gallery_title_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gender_name_langs`
--
ALTER TABLE `gender_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hierarchies`
--
ALTER TABLE `hierarchies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hierarchy_name_langs`
--
ALTER TABLE `hierarchy_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hierarchy_types`
--
ALTER TABLE `hierarchy_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hierarchy_type_name_langs`
--
ALTER TABLE `hierarchy_type_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=522;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `image_alt_langs`
--
ALTER TABLE `image_alt_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_lab`
--
ALTER TABLE `image_lab`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `image_partner`
--
ALTER TABLE `image_partner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_titles`
--
ALTER TABLE `job_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_title_name_langs`
--
ALTER TABLE `job_title_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `labs`
--
ALTER TABLE `labs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_description_langs`
--
ALTER TABLE `lab_description_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_name_langs`
--
ALTER TABLE `lab_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `langs`
--
ALTER TABLE `langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `language_tables`
--
ALTER TABLE `language_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ltm_translations`
--
ALTER TABLE `ltm_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_lists`
--
ALTER TABLE `menu_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_list_name_langs`
--
ALTER TABLE `menu_list_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `module_attribute`
--
ALTER TABLE `module_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `module_description_langs`
--
ALTER TABLE `module_description_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `module_name_langs`
--
ALTER TABLE `module_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_content_langs`
--
ALTER TABLE `news_content_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_description_langs`
--
ALTER TABLE `news_description_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_title_langs`
--
ALTER TABLE `news_title_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `page_name_langs`
--
ALTER TABLE `page_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner_description_langs`
--
ALTER TABLE `partner_description_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner_name_langs`
--
ALTER TABLE `partner_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `people`
--
ALTER TABLE `people`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `permission_name_langs`
--
ALTER TABLE `permission_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `person_experience_langs`
--
ALTER TABLE `person_experience_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person_name_langs`
--
ALTER TABLE `person_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person_summary_langs`
--
ALTER TABLE `person_summary_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phone_numbers`
--
ALTER TABLE `phone_numbers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position_name_langs`
--
ALTER TABLE `position_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prerequisite`
--
ALTER TABLE `prerequisite`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prerequisite_groups`
--
ALTER TABLE `prerequisite_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_name_langs`
--
ALTER TABLE `role_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `semester_name_langs`
--
ALTER TABLE `semester_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_article_section_langs`
--
ALTER TABLE `seo_article_section_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_article_tag_langs`
--
ALTER TABLE `seo_article_tag_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_book_tag_langs`
--
ALTER TABLE `seo_book_tag_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_description_langs`
--
ALTER TABLE `seo_description_langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_keyword_langs`
--
ALTER TABLE `seo_keyword_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_profile_first_name_langs`
--
ALTER TABLE `seo_profile_first_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_profile_last_name_langs`
--
ALTER TABLE `seo_profile_last_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seo_title_langs`
--
ALTER TABLE `seo_title_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `setting_name_langs`
--
ALTER TABLE `setting_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `site_menus`
--
ALTER TABLE `site_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `site_menu_name_langs`
--
ALTER TABLE `site_menu_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider_details`
--
ALTER TABLE `slider_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slider_detail_btn_langs`
--
ALTER TABLE `slider_detail_btn_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_detail_head_langs`
--
ALTER TABLE `slider_detail_head_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_detail_text_langs`
--
ALTER TABLE `slider_detail_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_detail_title_langs`
--
ALTER TABLE `slider_detail_title_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider_name_langs`
--
ALTER TABLE `slider_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social_network_name_langs`
--
ALTER TABLE `social_network_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status_name_langs`
--
ALTER TABLE `status_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `steps`
--
ALTER TABLE `steps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `step_text_langs`
--
ALTER TABLE `step_text_langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `step_title_langs`
--
ALTER TABLE `step_title_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `study_years`
--
ALTER TABLE `study_years`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `study_year_name_langs`
--
ALTER TABLE `study_year_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `table_name_langs`
--
ALTER TABLE `table_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `text_cards`
--
ALTER TABLE `text_cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `text_card_title_langs`
--
ALTER TABLE `text_card_title_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `university_offices`
--
ALTER TABLE `university_offices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university_office_name_langs`
--
ALTER TABLE `university_office_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_name_langs`
--
ALTER TABLE `user_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_summary_langs`
--
ALTER TABLE `user_summary_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vertical_sliders`
--
ALTER TABLE `vertical_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vertical_slider_details`
--
ALTER TABLE `vertical_slider_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vertical_slider_detail_small_text_langs`
--
ALTER TABLE `vertical_slider_detail_small_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vertical_slider_detail_sub_text_langs`
--
ALTER TABLE `vertical_slider_detail_sub_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vertical_slider_detail_text_langs`
--
ALTER TABLE `vertical_slider_detail_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vertical_slider_name_langs`
--
ALTER TABLE `vertical_slider_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
