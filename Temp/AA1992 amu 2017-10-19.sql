-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2017 at 09:39 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amu`
--

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
(18, 'text_cards_1', '2017-10-16 14:56:40', '2017-10-17 15:57:38', NULL);

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
(38, 18, 2, 'بطاقات النصوص #1', '2017-10-16 14:56:40', '2017-10-17 15:57:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `block_details`
--

INSERT INTO `block_details` (`id`, `block_id`, `icon_id`, `page_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, '2017-09-10 12:58:35', '2017-09-20 15:01:32', NULL),
(2, 1, 2, 1, '2017-09-10 12:59:38', '2017-09-10 12:59:38', NULL),
(3, 1, 3, 2, '2017-09-10 13:00:19', '2017-09-10 13:00:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `block_detail_btn_langs`
--

CREATE TABLE `block_detail_btn_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `block_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `text` varchar(350) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `text` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `text` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `page_id` int(10) UNSIGNED NOT NULL,
  `custom_module_id` int(11) NOT NULL,
  `position` varchar(1) NOT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `builder_pages`
--

INSERT INTO `builder_pages` (`id`, `page_id`, `custom_module_id`, `position`, `order`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'T', 1, '2017-10-16 14:26:52', '2017-10-16 14:31:53', '2017-10-16 14:31:53'),
(2, 1, 2, 'T', 3, '2017-10-16 14:26:52', '2017-10-16 14:31:53', '2017-10-16 14:31:53'),
(3, 1, 4, 'T', 4, '2017-10-16 14:26:52', '2017-10-16 14:30:16', NULL),
(4, 1, 5, 'T', 6, '2017-10-16 14:26:52', '2017-10-16 14:30:16', NULL),
(5, 1, 6, 'T', 2, '2017-10-16 14:30:16', '2017-10-16 14:30:16', NULL),
(6, 1, 7, 'T', 5, '2017-10-16 14:30:16', '2017-10-16 14:30:16', NULL),
(7, 17, 1, 'T', 1, '2017-10-16 15:23:29', '2017-10-16 15:23:29', NULL),
(10, 17, 8, 'R', 3, '2017-10-16 15:23:29', '2017-10-17 16:24:50', NULL),
(11, 17, 2, 'T', 4, '2017-10-16 15:23:29', '2017-10-17 16:24:50', NULL),
(12, 17, 11, 'T', 2, '2017-10-17 16:24:50', '2017-10-17 16:24:50', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `email`, `phone`, `mobile`, `fax`, `gelocation`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'abdo@gmail.com', '(565) 6565656', '(225) 665-6585', NULL, NULL, '2017-10-04 14:48:58', '2017-10-04 14:48:58', NULL),
(2, 'abdo@gmail.com', '(565) 6565656', '(225) 665-6585', NULL, NULL, '2017-10-04 14:49:20', '2017-10-04 14:49:20', NULL),
(3, 'abdo@gmail.com', '(565) 6565656', '(225) 665-6585', NULL, NULL, '2017-10-04 14:50:46', '2017-10-04 14:50:46', NULL),
(4, 't@t.com', '(555) 5555555', '(555) 555-5555', NULL, NULL, '2017-10-04 15:16:12', '2017-10-04 15:16:12', NULL),
(5, 't@t.com', '(555) 5555555', '(555) 555-5555', NULL, NULL, '2017-10-04 15:19:40', '2017-10-04 15:19:40', NULL),
(6, 'a@a.com', '(888) 8888888', '(888) 888-8888', '+963 (88) 888-8888', '121212,132', '2017-10-04 15:26:51', '2017-10-04 15:26:51', NULL),
(7, 'a@a.com', '(888) 8888888', '(888) 888-8888', '+963 (88) 888-8888', '121212,132', '2017-10-04 15:27:10', '2017-10-04 15:27:10', NULL),
(8, 'a@a.com', '(444) 4444444', '(444) 444-4444', NULL, NULL, '2017-10-06 02:23:48', '2017-10-06 02:23:48', NULL),
(9, 'a@a.com', '(444) 4444444', '(444) 444-4444', '+963 (44) 444-4444', '123,123', '2017-10-06 02:44:59', '2017-10-06 02:44:59', NULL),
(10, 'a@a.com', '(444) 4444444', '(444) 444-4444', '+963 (44) 444-4444', '123,123', '2017-10-06 02:45:57', '2017-10-06 02:45:57', NULL);

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

--
-- Dumping data for table `contact_address_langs`
--

INSERT INTO `contact_address_langs` (`id`, `contact_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 9, 1, 'a', '2017-10-06 02:44:59', '2017-10-06 02:44:59', NULL),
(2, 9, 2, 'a', '2017-10-06 02:44:59', '2017-10-06 02:44:59', NULL);

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
(18, 'univercity', '2017-07-22 05:00:35', '2017-07-26 17:06:08', NULL),
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
(35, 'job-title', '2017-07-31 17:58:52', '2017-07-31 17:58:52', NULL);

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
  `degree_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `credit`, `faculty_id`, `department_id`, `degree_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'MTH-200', 3, 1, 3, 1, '2017-09-18 14:12:13', '2017-09-18 14:12:13', NULL),
(2, 'MTH-201', 3, 1, 3, 2, '2017-09-18 14:12:58', '2017-09-18 14:12:58', NULL);

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
(1, 1, 1, 'Math', '2017-09-18 14:12:13', '2017-09-18 14:12:13', NULL),
(2, 1, 2, 'رياضيات', '2017-09-18 14:12:13', '2017-09-18 14:12:13', NULL),
(3, 2, 1, 'Math 2', '2017-09-18 14:12:58', '2017-09-18 14:12:58', NULL),
(4, 2, 2, 'رياضيات 2', '2017-09-18 14:12:58', '2017-09-18 14:12:58', NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(11, 16, '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_module_attribute_values`
--

CREATE TABLE `custom_module_attribute_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `custom_module_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `value` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(25, 11, 2, '6', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL),
(26, 11, 18, '["1","2","3","4"]', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL),
(27, 11, 8, '1', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_module_attribute_value_multi_langs`
--

CREATE TABLE `custom_module_attribute_value_multi_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `custom_module_attribute_value_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom_module_attribute_value_multi_langs`
--

INSERT INTO `custom_module_attribute_value_multi_langs` (`id`, `custom_module_attribute_value_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 12, 1, 'Interested in discussing?', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(2, 12, 2, 'Interested in discussing?', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(3, 13, 1, '<p><span style="color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</span></p>', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(4, 13, 2, '<p><span style="color: rgb(102, 102, 102); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error optio in quia ipsum quae neque alias eligendi, nulla nisi. Veniam ut quis similique culpa natus dolor aliquam officiis ratione libero. Expedita asperiores aliquam provident amet dolores.</span></p>', '2017-10-16 15:11:05', '2017-10-16 15:11:05', NULL),
(5, 18, 1, 'OUR OFFICE LOCATION', '2017-10-16 15:17:49', '2017-10-16 15:17:49', NULL),
(6, 18, 2, 'OUR OFFICE LOCATION', '2017-10-16 15:17:49', '2017-10-16 15:17:49', NULL),
(7, 23, 1, 'OUR CONTACT NUMBER', '2017-10-16 15:19:15', '2017-10-16 15:19:15', NULL),
(8, 23, 2, 'OUR CONTACT NUMBER', '2017-10-16 15:19:15', '2017-10-16 15:19:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `custom_module_name_langs`
--

CREATE TABLE `custom_module_name_langs` (
  `id` int(11) NOT NULL,
  `custom_module_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(22, 11, 2, 'Contact Form Text Cards', '2017-10-17 16:22:01', '2017-10-17 16:22:01', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, '2017-08-28 17:07:53', '2017-08-28 17:07:53', NULL),
(7, '2017-08-28 17:08:24', '2017-08-28 17:08:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_course`
--

CREATE TABLE `faculty_course` (
  `id` int(10) UNSIGNED NOT NULL,
  `fauclty_id` int(10) UNSIGNED NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `degree_id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `faculty_id` int(10) UNSIGNED NOT NULL,
  `study_year_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_study_year`
--

INSERT INTO `faculty_study_year` (`faculty_id`, `study_year_id`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, NULL),
(2, 3, NULL, NULL),
(2, 1, NULL, NULL),
(2, 4, NULL, NULL),
(3, 4, NULL, NULL),
(3, 5, NULL, NULL),
(3, 3, NULL, NULL),
(4, 4, NULL, NULL),
(4, 5, NULL, NULL),
(4, 3, NULL, NULL);

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
(1, '2017-06-16 14:16:42', '2017-06-16 14:16:42', NULL);

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
(1, 1, 1, '15', '2017-06-16 14:16:42', '2017-06-16 14:16:42', NULL),
(2, 1, 2, '15', '2017-06-16 14:16:42', '2017-06-16 14:16:42', NULL);

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
  `code` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `name` varchar(100) NOT NULL,
  `hash_name` varchar(300) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `width` varchar(4) NOT NULL,
  `height` varchar(4) NOT NULL,
  `size` float UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `name`, `hash_name`, `ext`, `width`, `height`, `size`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1920x1280.png', 'hwznhuvrhhmt_original_1920x1280.png', 'png', '1920', '1280', 7683, '2017-09-28 11:48:22', '2017-09-28 11:48:22', NULL),
(2, '1920x1280.png', 'kdlnxyg4qdmu_original_1920x1280.png', 'png', '1920', '1280', 7683, '2017-09-28 11:56:39', '2017-09-28 11:56:39', NULL),
(3, '1920x1280.png', '5m4ppy3tuwyt_original_1920x1280.png', 'png', '1920', '1280', 7683, '2017-09-28 11:59:37', '2017-09-28 11:59:37', NULL),
(4, '1920x1280.png', 'uiay7rbkbkg8_original_1920x1280.png', 'png', '1920', '1280', 7683, '2017-09-28 17:04:07', '2017-09-28 17:04:07', NULL),
(5, '1920x1280.png', 'mcm3ng7yhlds_original_1920x1280.png', 'png', '1920', '1280', 7683, '2017-09-29 00:44:40', '2017-09-29 00:44:40', NULL),
(6, '1920x1280.png', 'c8v6s1nwljvw_original_1920x1280.png', 'png', '1920', '1280', 7683, '2017-09-29 00:59:44', '2017-09-29 00:59:44', NULL),
(7, '100x100.png', 'qrdz5jtzbsok_original_100x100.png', 'png', '100', '100', 255, '2017-09-29 01:26:44', '2017-09-29 01:26:44', NULL),
(8, '100x100.png', 'd0nmnzrdrnco_original_100x100.png', 'png', '100', '100', 255, '2017-10-01 15:38:40', '2017-10-01 15:38:40', NULL),
(9, '100x100.png', 'eweurwi3pjum_original_100x100.png', 'png', '100', '100', 255, '2017-10-01 15:43:17', '2017-10-01 15:43:17', NULL),
(10, '100x100.png', 'ppdj6xkijrlo_original_100x100.png', 'png', '100', '100', 255, '2017-10-02 13:07:59', '2017-10-02 13:07:59', NULL),
(11, '100x100.png', 'eqpsi7oabflq_original_100x100.png', 'png', '100', '100', 255, '2017-10-02 13:08:23', '2017-10-02 13:08:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_alt_langs`
--

CREATE TABLE `image_alt_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `image_lab`
--

CREATE TABLE `image_lab` (
  `id` int(10) UNSIGNED NOT NULL,
  `lab_id` int(11) NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL
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

--
-- Dumping data for table `job_titles`
--

INSERT INTO `job_titles` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-08-20 02:19:18', '2017-08-20 02:19:18', NULL),
(2, '2017-08-20 02:19:26', '2017-08-20 02:19:26', NULL),
(3, '2017-08-20 02:19:32', '2017-08-20 02:19:32', NULL),
(4, '2017-08-20 02:19:40', '2017-08-20 02:19:40', NULL),
(5, '2017-08-20 02:19:53', '2017-08-20 02:19:53', NULL),
(6, '2017-08-20 02:20:20', '2017-08-20 02:20:20', NULL),
(7, '2017-08-20 02:20:28', '2017-08-20 02:20:28', NULL),
(8, '2017-08-20 02:20:36', '2017-08-20 02:20:36', NULL),
(9, '2017-08-20 02:20:42', '2017-08-20 02:20:42', NULL),
(10, '2017-08-20 02:20:48', '2017-08-20 02:20:48', NULL),
(11, '2017-08-20 02:21:01', '2017-08-20 02:21:01', NULL),
(12, '2017-08-20 02:21:13', '2017-08-20 02:21:13', NULL);

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

--
-- Dumping data for table `job_title_name_langs`
--

INSERT INTO `job_title_name_langs` (`id`, `job_title_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'test', '2017-08-20 02:19:19', '2017-08-20 02:19:19', NULL),
(2, 1, 2, 'test', '2017-08-20 02:19:19', '2017-08-20 02:19:19', NULL),
(3, 2, 1, 'test1', '2017-08-20 02:19:26', '2017-08-20 02:19:26', NULL),
(4, 2, 2, 'test1', '2017-08-20 02:19:26', '2017-08-20 02:19:26', NULL),
(5, 3, 1, 'test2', '2017-08-20 02:19:32', '2017-08-20 02:19:32', NULL),
(6, 3, 2, 'test2', '2017-08-20 02:19:32', '2017-08-20 02:19:32', NULL),
(7, 4, 1, 'test45', '2017-08-20 02:19:40', '2017-08-20 02:19:40', NULL),
(8, 4, 2, 'test45', '2017-08-20 02:19:40', '2017-08-20 02:19:40', NULL),
(9, 5, 1, 'test5', '2017-08-20 02:19:53', '2017-08-20 02:19:53', NULL),
(10, 5, 2, 'test4', '2017-08-20 02:19:53', '2017-08-20 02:19:53', NULL),
(11, 6, 1, 'asd', '2017-08-20 02:20:20', '2017-08-20 02:20:20', NULL),
(12, 6, 2, 'as', '2017-08-20 02:20:20', '2017-08-20 02:20:20', NULL),
(13, 7, 1, 'qewr', '2017-08-20 02:20:28', '2017-08-20 02:20:28', NULL),
(14, 7, 2, 'qwer', '2017-08-20 02:20:28', '2017-08-20 02:20:28', NULL),
(15, 8, 1, 'f', '2017-08-20 02:20:36', '2017-08-20 02:20:36', NULL),
(16, 8, 2, 'fg', '2017-08-20 02:20:36', '2017-08-20 02:20:36', NULL),
(17, 9, 1, 'gfds', '2017-08-20 02:20:42', '2017-08-20 02:20:42', NULL),
(18, 9, 2, 'gs', '2017-08-20 02:20:42', '2017-08-20 02:20:42', NULL),
(19, 10, 1, 'ry', '2017-08-20 02:20:49', '2017-08-20 02:20:49', NULL),
(20, 10, 2, 'ty', '2017-08-20 02:20:49', '2017-08-20 02:20:49', NULL),
(21, 11, 1, 'hhh', '2017-08-20 02:21:01', '2017-08-20 02:21:01', NULL),
(22, 11, 2, 'hhh', '2017-08-20 02:21:01', '2017-08-20 02:21:01', NULL),
(23, 12, 1, 'kjh', '2017-08-20 02:21:13', '2017-08-20 02:21:13', NULL),
(24, 12, 2, 'khj', '2017-08-20 02:21:13', '2017-08-20 02:21:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labs`
--

CREATE TABLE `labs` (
  `id` int(10) UNSIGNED NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
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
  `text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `is_default` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `langs`
--

INSERT INTO `langs` (`id`, `lang_code`, `name`, `native`, `is_default`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'en', 'en', 'en', 1, NULL, '2017-06-15 19:35:40', '2017-06-15 19:35:40'),
(2, 'ar', 'ar', 'ar', 0, NULL, '2017-06-15 19:35:51', '2017-06-15 19:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `menu_tables`
--

CREATE TABLE `menu_tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_tables`
--

INSERT INTO `menu_tables` (`id`, `code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'page', '2017-09-29 18:22:05', '2017-09-29 18:22:05', NULL),
(2, 'faculty', '2017-09-29 18:22:52', '2017-09-29 18:22:52', NULL),
(3, 'degree', '2017-09-29 18:23:19', '2017-09-29 18:23:19', NULL),
(4, 'department', '2017-09-29 18:23:49', '2017-09-29 18:23:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_table_name_langs`
--

CREATE TABLE `menu_table_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_table_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_table_name_langs`
--

INSERT INTO `menu_table_name_langs` (`id`, `menu_table_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Page', '2017-09-29 18:22:05', '2017-09-29 18:22:05', NULL),
(2, 1, 2, 'صفحة', '2017-09-29 18:22:05', '2017-09-29 18:22:05', NULL),
(3, 2, 1, 'Faculty', '2017-09-29 18:22:53', '2017-09-29 18:22:53', NULL),
(4, 2, 2, 'كلية', '2017-09-29 18:22:53', '2017-09-29 18:22:53', NULL),
(5, 3, 1, 'Degree', '2017-09-29 18:23:20', '2017-09-29 18:23:20', NULL),
(6, 3, 2, 'اختصاص', '2017-09-29 18:23:20', '2017-09-29 18:23:20', NULL),
(7, 4, 1, 'Department', '2017-09-29 18:23:49', '2017-09-29 18:23:49', NULL),
(8, 4, 2, 'قسم', '2017-09-29 18:23:49', '2017-09-29 18:23:49', NULL);

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
(1, '2017_05_03_161328_create_gender_table', 1),
(2, '2017_05_03_161514_create_position_table', 1),
(3, '2017_05_03_161526_create_job_title_table', 1),
(4, '2017_05_03_161652_create_job_title_name_langs_table', 1),
(5, '2017_05_03_161704_create_position_name_langs_table', 1),
(6, '2017_05_03_161803_create_gender_name_langs_table', 1),
(7, '2017_05_03_191458_create_course_table', 1),
(8, '2017_05_03_191520_create_course_name_lang_table', 1),
(9, '2017_05_03_223323_create_prerequisite_groups_table', 1),
(10, '2017_05_04_221342_create_faculty_table', 1),
(11, '2017_05_04_221515_create_faculty_name_langs_table', 1),
(12, '2017_05_04_221555_create_degree_table', 1),
(13, '2017_05_04_221622_create_degree_name_langs_table', 1),
(14, '2017_05_04_222051_create_department_name_langs_table', 1),
(15, '2017_05_04_222114_create_department_table', 1),
(16, '2017_05_04_223319_create_course_prerequisite_group_table', 1),
(17, '2017_05_07_182652_create_person_table', 1),
(18, '2017_05_07_182923_create_person_name_langs_table', 1),
(19, '2017_05_07_183002_create_person_summary_langs_table', 1),
(20, '2017_05_13_170752_create_contact_table', 1),
(21, '2017_05_13_182059_create_contact_social_network_table', 1),
(22, '2017_05_17_183322_create_lab_description_lang_table', 1),
(23, '2017_05_17_183322_create_lab_name_lang_table', 1),
(24, '2017_06_15_220018_create_semester_name_lang_table', 1),
(25, '2017_06_15_220018_create_semester_table', 1),
(26, '2017_06_15_222849_create_lab_table', 1),
(27, '2014_10_12_000000_create_users_table', 2),
(28, '2014_10_12_100000_create_password_resets_table', 2),
(29, '2017_04_14_075400_create_langs_table', 2),
(30, '2017_04_27_192945_social_network_create_table', 2),
(31, '2017_04_29_172543_create_attributes_table', 2),
(32, '2017_04_29_172543_create_modules_table', 2),
(33, '2017_04_29_172543_create_user_name_langs_table', 2),
(34, '2017_04_29_172543_create_user_summary_langs_table', 2),
(35, '2017_05_01_194241_create_social_network_name_lang', 2),
(36, '2017_05_19_164350_create_control_page_table', 2),
(37, '2017_05_19_164515_create_control_menu_table', 2),
(38, '2017_06_03_201725_create_module_attribute_table', 2),
(39, '2017_06_03_203515_create_module_name_langs_table', 2),
(40, '2017_06_03_203633_create_attribute_name_langs_table', 2),
(45, '2017_06_15_234238_create_study_year_name_lang_table', 3),
(46, '2017_06_15_234238_create_study_year_table', 3),
(47, '2017_06_16_003741_create_faculty_study_year_table', 4),
(48, '2017_06_16_201919_create_setting_name_lang_table', 5),
(49, '2017_06_16_201919_create_setting_table', 5),
(50, '2017_07_05_112707_create_prerequisite_table', 6),
(51, '2017_07_05_113626_create_faculty_course_table', 7),
(52, '2017_08_06_182435_create_custom_modules_table', 0),
(53, '2017_08_06_182435_create_custom_module_name_langs_table', 0),
(54, '2017_08_06_182435_create_modules_table', 0),
(55, '2017_08_06_182435_create_module_attribute_table', 0),
(56, '2017_08_06_182435_create_module_name_langs_table', 0),
(57, '2017_08_03_222304_create_hierarchies_table', 8),
(58, '2017_08_03_222559_create_hierarchy_name_langs_table', 8),
(59, '2017_08_04_162744_create_hierarchy_types_table', 8),
(60, '2017_08_04_162936_create_hierarchy_type_name_langs_table', 8),
(61, '2017_08_04_205049_create_univercity_offices_langs_table', 8),
(62, '2017_08_04_205334_create_office_numbers_langs_table', 8),
(63, '2017_09_14_200043_create_images_lab_table', 9),
(64, '2017_10_03_152710_create_univercity_office_table', 10),
(65, '2017_10_03_152908_create_univercity_office_name_langs_table', 10),
(66, '2017_10_03_190446_create_contact_address_langs_table', 11),
(67, '2017_08_24_185136_create_control_menus_table', 12),
(68, '2017_09_19_201735_create_menu_tables', 12),
(69, '2017_09_19_202141_create_menu_tables_name_langs', 12),
(70, '2017_09_25_180207_create_site_menu_table', 12),
(71, '2017_09_25_180710_create_site_menu_name_langs_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customized` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `code`, `customized`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'text_editor', '1', '2017-07-22 05:56:29', '2017-07-22 05:56:29', NULL),
(2, 'short_info', '1', '2017-09-30 13:48:36', '2017-09-30 13:48:36', NULL),
(3, 'section_start', '0', '2017-09-06 13:31:23', '2017-10-16 14:14:07', NULL),
(4, 'section_end', '0', '2017-09-06 13:31:56', '2017-10-16 14:14:20', NULL),
(5, 'sliders', '1', '2017-09-09 13:10:32', '2017-09-09 13:10:32', NULL),
(6, 'blocks', '1', '2017-09-10 13:22:43', '2017-09-10 13:22:43', NULL),
(7, 'courses_1', '1', '2017-09-13 15:31:27', '2017-09-13 15:32:15', NULL),
(8, 'persons_1', '1', '2017-09-20 15:10:49', '2017-09-20 15:10:49', NULL),
(9, 'vertical_sliders', '1', '2017-09-24 15:39:16', '2017-09-24 15:39:16', NULL),
(10, 'gallery', '1', '2017-09-29 02:12:27', '2017-09-29 02:12:27', NULL),
(11, 'section_fluid_start', '0', '2017-10-16 13:43:48', '2017-10-16 14:17:32', NULL),
(12, 'small_gallery', '1', '2017-10-16 13:49:39', '2017-10-16 13:49:39', NULL),
(13, 'steps', '1', '2017-10-16 13:50:13', '2017-10-16 13:50:13', NULL),
(14, 'section_intersect_top', '0', '2017-10-16 13:51:31', '2017-10-16 14:17:44', NULL),
(15, 'section_intersect_end', '0', '2017-10-16 13:51:54', '2017-10-16 14:17:55', NULL),
(16, 'text_card_1', '1', '2017-10-16 13:52:28', '2017-10-16 13:52:28', NULL),
(17, 'contact_form', '1', NULL, '2017-10-16 15:09:35', NULL),
(18, 'text_card_2', '1', '2017-10-19 14:15:32', '2017-10-19 14:15:32', NULL),
(19, 'person_page', '0', '2017-10-19 14:31:43', '2017-10-19 14:31:43', NULL),
(20, 'office_page', '0', '2017-10-19 14:44:25', '2017-10-19 14:44:25', NULL),
(21, 'breadcrumb', '0', '2017-10-19 15:08:24', '2017-10-19 15:08:24', NULL);

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
(40, 13, 1, NULL, NULL, NULL),
(41, 13, 2, NULL, NULL, NULL),
(42, 13, 10, NULL, NULL, NULL),
(43, 13, 4, NULL, NULL, NULL),
(44, 13, 13, NULL, NULL, NULL),
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
(66, 21, 1, NULL, NULL, NULL);

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
(62, 21, 2, 'Breadcrumb', '2017-10-19 15:08:25', '2017-10-19 15:08:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `office_numbers_langs`
--

CREATE TABLE `office_numbers_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_code` varchar(190) DEFAULT NULL,
  `route` varchar(190) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_code`, `route`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'home', 'home-page', '2017-08-23 15:20:56', '2017-08-31 04:02:55', NULL),
(2, 'about_us', 'about-us', '2017-08-31 15:34:17', '2017-08-31 15:34:17', NULL),
(3, 'university_message', 'university_message', '2017-10-14 14:58:05', '2017-10-14 14:58:05', NULL),
(4, 'university_in_glance', 'university_in_glance', '2017-10-14 14:59:01', '2017-10-14 14:59:01', NULL),
(5, 'university_council', 'university_council', '2017-10-14 15:03:13', '2017-10-14 15:03:13', NULL),
(6, 'trusted_council', 'trusted_council', '2017-10-14 15:04:01', '2017-10-14 15:04:01', NULL),
(7, 'university_partner', 'university_partner', '2017-10-14 15:05:24', '2017-10-14 15:05:24', NULL),
(8, 'location', 'location', '2017-10-14 15:06:10', '2017-10-14 15:06:10', NULL),
(9, 'location', 'location', '2017-10-14 15:06:12', '2017-10-14 15:08:34', '2017-10-14 15:08:34'),
(10, 'university_offices', 'university_offices', '2017-10-14 15:06:46', '2017-10-14 15:06:46', NULL),
(11, 'degrees', 'degrees', '2017-10-14 15:16:05', '2017-10-14 15:16:05', NULL),
(12, 'courses', 'courses', '2017-10-14 15:16:26', '2017-10-14 15:16:26', NULL),
(13, 'study_plan', 'study_plan', '2017-10-14 15:17:00', '2017-10-14 15:17:00', NULL),
(14, 'message_and_goals', 'message_and_goals', '2017-10-14 15:20:17', '2017-10-14 15:20:17', NULL),
(15, 'instructors', 'instructors', '2017-10-14 15:20:40', '2017-10-14 15:20:40', NULL),
(16, 'labs', 'labs', '2017-10-14 15:21:01', '2017-10-14 15:21:01', NULL),
(17, 'contact_us', 'contact_us', '2017-10-14 15:25:07', '2017-10-14 15:25:07', NULL),
(18, 'news', 'news', '2017-10-14 15:25:21', '2017-10-14 15:25:21', NULL),
(19, 'gallery', 'gallery', '2017-10-14 15:25:39', '2017-10-14 15:25:39', NULL),
(20, 'admission_rules', 'admission_rules', '2017-10-14 15:47:09', '2017-10-14 15:47:09', NULL),
(21, 'admission_process', 'admission_process', '2017-10-14 15:47:59', '2017-10-14 15:47:59', NULL),
(22, 'fees', 'fees', '2017-10-14 15:48:22', '2017-10-14 15:48:22', NULL),
(23, 'scholarship', 'scholarship', '2017-10-14 15:48:43', '2017-10-14 15:48:43', NULL),
(24, 'university_calendar', 'university_calendar', '2017-10-14 15:49:43', '2017-10-14 15:49:43', NULL),
(25, 'courses_list', 'courses_list', '2017-10-14 15:50:13', '2017-10-14 15:50:13', NULL),
(26, 'exams', 'exams', '2017-10-14 15:50:34', '2017-10-14 15:50:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_name_langs`
--

CREATE TABLE `page_name_langs` (
  `id` int(11) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(13, 7, 1, 'university partner', '2017-10-14 15:05:24', '2017-10-14 15:05:24', NULL),
(14, 7, 2, 'الشركاء', '2017-10-14 15:05:24', '2017-10-14 15:05:24', NULL),
(15, 8, 1, 'Location', '2017-10-14 15:06:10', '2017-10-14 15:06:10', NULL),
(16, 8, 2, 'موقع الجامعة', '2017-10-14 15:06:10', '2017-10-14 15:06:10', NULL),
(17, 9, 1, 'Location', '2017-10-14 15:06:12', '2017-10-14 15:08:34', '2017-10-14 15:08:34'),
(18, 9, 2, 'موقع الجامعة', '2017-10-14 15:06:12', '2017-10-14 15:08:34', '2017-10-14 15:08:34'),
(19, 10, 1, 'university offices', '2017-10-14 15:06:46', '2017-10-14 15:06:46', NULL),
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
(39, 20, 1, 'admission rules', '2017-10-14 15:47:09', '2017-10-14 15:47:09', NULL),
(40, 20, 2, 'شروط القبول', '2017-10-14 15:47:09', '2017-10-14 15:47:09', NULL),
(41, 21, 1, 'admission way', '2017-10-14 15:47:59', '2017-10-14 15:47:59', NULL),
(42, 21, 2, 'طريقة القبول', '2017-10-14 15:47:59', '2017-10-14 15:47:59', NULL),
(43, 22, 1, 'Fees', '2017-10-14 15:48:22', '2017-10-14 15:48:22', NULL),
(44, 22, 2, 'الرسوم', '2017-10-14 15:48:22', '2017-10-14 15:48:22', NULL),
(45, 23, 1, 'scholarship', '2017-10-14 15:48:43', '2017-10-14 15:48:43', NULL),
(46, 23, 2, 'المنح', '2017-10-14 15:48:43', '2017-10-14 15:48:43', NULL),
(47, 24, 1, 'university calendar', '2017-10-14 15:49:43', '2017-10-14 15:49:43', NULL),
(48, 24, 2, 'التقويم الجامعي', '2017-10-14 15:49:43', '2017-10-14 15:49:43', NULL),
(49, 25, 1, 'Courses List', '2017-10-14 15:50:13', '2017-10-14 15:50:13', NULL),
(50, 25, 2, 'قائمة المقررات', '2017-10-14 15:50:13', '2017-10-14 15:50:13', NULL),
(51, 26, 1, 'Exams', '2017-10-14 15:50:34', '2017-10-14 15:50:34', NULL),
(52, 26, 2, 'الامتحانات', '2017-10-14 15:50:34', '2017-10-14 15:50:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `gender_id` int(10) UNSIGNED NOT NULL,
  `position_id` int(10) UNSIGNED NOT NULL,
  `job_title_id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`id`, `type`, `image_id`, `gender_id`, `position_id`, `job_title_id`, `contact_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'c', 1, 1, 1, 1, 0, NULL, NULL, NULL),
(2, '1', 1, 1, 1, 1, 1, NULL, NULL, NULL);

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

--
-- Dumping data for table `person_name_langs`
--

INSERT INTO `person_name_langs` (`id`, `person_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'test', NULL, NULL, NULL),
(2, 1, 2, 'test', NULL, NULL, NULL);

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
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-10-04 14:48:18', '2017-10-04 14:48:18', NULL);

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

--
-- Dumping data for table `position_name_langs`
--

INSERT INTO `position_name_langs` (`id`, `position_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Web Developer', '2017-10-04 14:48:18', '2017-10-04 14:48:18', NULL),
(2, 1, 2, 'مطور ويب', '2017-10-04 14:48:19', '2017-10-04 14:48:19', NULL);

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
(1, '2017-06-15 16:37:22', '2017-06-15 16:37:22', NULL),
(2, '2017-06-15 17:17:04', '2017-06-15 17:17:04', NULL),
(3, '2017-06-15 17:17:25', '2017-06-15 17:17:25', NULL);

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
(1, 1, 1, 'First Semester', '2017-06-15 16:37:22', '2017-06-15 16:37:22', NULL),
(2, 1, 2, 'الفصل الأول', '2017-06-15 16:37:22', '2017-06-15 16:37:22', NULL),
(3, 2, 1, 'Second Semester', '2017-06-15 17:17:05', '2017-06-15 17:17:05', NULL),
(4, 2, 2, 'الفصل الثاني', '2017-06-15 17:17:05', '2017-06-15 17:17:05', NULL),
(5, 3, 1, 'Third Semester', '2017-06-15 17:17:25', '2017-06-15 17:17:25', NULL),
(6, 3, 2, 'الفصل الثالث', '2017-06-15 17:17:25', '2017-06-15 17:17:25', NULL);

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
(5, 'UGL', '35.0985546,36.1864543', '2017-08-17 11:31:35', '2017-08-17 13:56:06', NULL);

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
(9, 5, 1, 'Univercity GeoLocation', '2017-08-17 11:31:35', '2017-08-17 11:31:35', NULL),
(10, 5, 2, 'موقع الجامعة الجغرافي', '2017-08-17 11:31:36', '2017-08-17 11:31:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_menus`
--

CREATE TABLE `site_menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL,
  `is_link` tinyint(1) NOT NULL DEFAULT '0',
  `menuable_id` int(10) UNSIGNED DEFAULT NULL,
  `menuable_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_menus`
--

INSERT INTO `site_menus` (`id`, `_lft`, `_rgt`, `parent_id`, `order`, `is_link`, `menuable_id`, `menuable_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 2, NULL, 1, 1, 1, 'page', '2017-10-14 14:49:52', '2017-10-14 15:28:29', NULL),
(2, 3, 8, NULL, 2, 0, NULL, NULL, '2017-10-14 14:56:06', '2017-10-14 15:28:29', NULL),
(3, 4, 5, 2, 1, 1, 3, 'page', '2017-10-14 14:59:47', '2017-10-14 15:09:54', NULL),
(4, 6, 7, 2, 2, 1, 4, 'page', '2017-10-14 14:59:57', '2017-10-14 15:09:54', NULL),
(5, 9, 12, 2, 3, 0, NULL, NULL, '2017-10-14 15:01:05', '2017-10-14 15:09:54', NULL),
(6, 10, 11, 5, 2, 1, 6, 'faculty', '2017-10-14 15:01:56', '2017-10-14 15:02:16', '2017-10-14 15:02:16'),
(7, 13, 14, 2, 4, 1, 5, 'page', '2017-10-14 15:07:52', '2017-10-14 15:09:54', NULL),
(8, 15, 16, 2, 5, 1, 6, 'page', '2017-10-14 15:07:59', '2017-10-14 15:09:54', NULL),
(9, 17, 18, 2, 6, 1, 7, 'page', '2017-10-14 15:08:11', '2017-10-14 15:09:54', NULL),
(10, 19, 20, NULL, 8, 1, 8, 'page', '2017-10-14 15:08:14', '2017-10-14 15:08:51', '2017-10-14 15:08:51'),
(11, 21, 22, 2, 8, 1, 10, 'page', '2017-10-14 15:08:21', '2017-10-14 15:09:54', NULL),
(12, 23, 24, 2, 7, 1, 8, 'page', '2017-10-14 15:09:00', '2017-10-14 15:09:54', NULL),
(13, 25, 38, 14, 1, 0, NULL, NULL, '2017-10-14 15:11:23', '2017-10-14 15:14:29', NULL),
(14, 39, 40, NULL, 3, 0, NULL, NULL, '2017-10-14 15:12:30', '2017-10-14 15:28:29', NULL),
(15, 41, 56, 14, 2, 0, NULL, NULL, '2017-10-14 15:13:31', '2017-10-14 15:14:29', NULL),
(16, 26, 27, 13, 2, 1, 11, 'page', '2017-10-14 15:21:35', '2017-10-14 15:21:35', NULL),
(17, 28, 29, 13, 3, 1, 12, 'page', '2017-10-14 15:21:45', '2017-10-14 15:21:45', NULL),
(18, 30, 31, 13, 4, 1, 13, 'page', '2017-10-14 15:21:58', '2017-10-14 15:21:58', NULL),
(19, 32, 33, 13, 5, 1, 14, 'page', '2017-10-14 15:22:03', '2017-10-14 15:22:03', NULL),
(20, 34, 35, 13, 6, 1, 15, 'page', '2017-10-14 15:22:10', '2017-10-14 15:22:10', NULL),
(21, 36, 37, 13, 7, 1, 16, 'page', '2017-10-14 15:22:22', '2017-10-14 15:22:22', NULL),
(22, 42, 43, 15, 1, 1, 11, 'page', '2017-10-14 15:22:44', '2017-10-14 15:23:51', NULL),
(23, 44, 45, 15, 2, 1, 12, 'page', '2017-10-14 15:22:47', '2017-10-14 15:23:51', NULL),
(24, 46, 47, 15, 3, 1, 13, 'page', '2017-10-14 15:22:53', '2017-10-14 15:23:51', NULL),
(25, 48, 49, 15, 4, 1, 14, 'page', '2017-10-14 15:22:58', '2017-10-14 15:23:51', NULL),
(26, 50, 51, 15, 5, 1, 15, 'page', '2017-10-14 15:23:07', '2017-10-14 15:23:51', NULL),
(27, 52, 53, 15, 6, 1, 16, 'page', '2017-10-14 15:23:17', '2017-10-14 15:23:52', NULL),
(28, 54, 55, 15, 7, 1, 16, 'page', '2017-10-14 15:23:22', '2017-10-14 15:23:40', '2017-10-14 15:23:40'),
(29, 57, 58, NULL, 6, 1, 17, 'page', '2017-10-14 15:26:14', '2017-10-14 15:28:29', NULL),
(30, 59, 60, NULL, 7, 1, 18, 'page', '2017-10-14 15:26:23', '2017-10-14 15:28:29', NULL),
(31, 61, 62, NULL, 6, 1, 18, 'page', '2017-10-14 15:26:28', '2017-10-14 15:26:39', '2017-10-14 15:26:39'),
(32, 63, 64, NULL, 8, 1, 19, 'page', '2017-10-14 15:26:55', '2017-10-14 15:28:29', NULL),
(33, 65, 72, NULL, 4, 0, NULL, NULL, '2017-10-14 15:27:33', '2017-10-14 15:28:29', NULL),
(34, 73, 78, NULL, 5, 0, NULL, NULL, '2017-10-14 15:28:04', '2017-10-14 15:28:29', NULL),
(35, 79, 80, 33, 1, 1, 20, 'page', '2017-10-14 15:52:22', '2017-10-14 15:54:18', NULL),
(36, 81, 82, 33, 2, 1, 21, 'page', '2017-10-14 15:52:27', '2017-10-14 15:54:18', NULL),
(37, 66, 67, 33, 3, 1, 22, 'page', '2017-10-14 15:52:40', '2017-10-14 15:54:18', NULL),
(38, 68, 69, 33, 4, 1, 23, 'page', '2017-10-14 15:52:58', '2017-10-14 15:54:18', NULL),
(39, 74, 75, 34, 1, 1, 24, 'page', '2017-10-14 15:53:14', '2017-10-14 15:54:18', NULL),
(40, 76, 77, 34, 2, 1, 25, 'page', '2017-10-14 15:53:18', '2017-10-14 15:54:18', NULL),
(41, 70, 71, 34, 3, 1, 26, 'page', '2017-10-14 15:53:48', '2017-10-14 15:54:18', NULL),
(42, 83, 84, NULL, 10, 1, 2, 'page', '2017-10-15 09:20:57', '2017-10-15 09:21:34', '2017-10-15 09:21:34'),
(43, 85, 86, NULL, 10, 1, 2, 'page', '2017-10-15 09:21:00', '2017-10-15 09:21:24', '2017-10-15 09:21:24');

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
(3, 5, 1, 'Hierarchy', '2017-10-14 15:01:05', '2017-10-14 15:01:05', NULL),
(4, 5, 2, 'الهيكلية', '2017-10-14 15:01:05', '2017-10-14 15:01:05', NULL),
(5, 13, 1, 'Medical', '2017-10-14 15:11:23', '2017-10-14 15:11:23', NULL),
(6, 13, 2, 'طبي', '2017-10-14 15:11:23', '2017-10-14 15:11:23', NULL),
(7, 14, 1, 'Faculties', '2017-10-14 15:12:30', '2017-10-14 15:12:30', NULL),
(8, 14, 2, 'الكليات', '2017-10-14 15:12:30', '2017-10-14 15:12:30', NULL),
(9, 15, 1, 'Engineering', '2017-10-14 15:13:31', '2017-10-14 15:13:31', NULL),
(10, 15, 2, 'الهندسة', '2017-10-14 15:13:31', '2017-10-14 15:13:31', NULL),
(11, 33, 1, 'Registration And Admission', '2017-10-14 15:27:33', '2017-10-14 15:27:33', NULL),
(12, 33, 2, 'القبول والتسجيل', '2017-10-14 15:27:33', '2017-10-14 15:27:33', NULL),
(13, 34, 1, 'Study and Exams', '2017-10-14 15:28:04', '2017-10-14 15:28:04', NULL),
(14, 34, 2, 'الدراسات والامتحانات', '2017-10-14 15:28:04', '2017-10-14 15:28:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2017-09-08 04:52:17', '2017-09-08 04:52:17', NULL),
(2, '2017-09-08 08:51:20', '2017-09-08 08:51:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_details`
--

CREATE TABLE `slider_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_id` int(11) NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `page_id` int(11) NOT NULL,
  `position` varchar(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_details`
--

INSERT INTO `slider_details` (`id`, `slider_id`, `image_id`, `page_id`, `position`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 1, 'R', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(2, 1, 6, 2, 'C', '2017-09-28 11:55:45', '2017-09-29 00:59:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_detail_btn_langs`
--

CREATE TABLE `slider_detail_btn_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_detail_btn_langs`
--

INSERT INTO `slider_detail_btn_langs` (`id`, `slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'View Details', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(2, 1, 2, 'View Details', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(3, 2, 1, 'test', '2017-09-28 11:55:47', '2017-09-28 11:55:47', NULL),
(4, 2, 2, 'test', '2017-09-28 11:55:47', '2017-09-28 11:55:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_detail_head_langs`
--

CREATE TABLE `slider_detail_head_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_detail_head_langs`
--

INSERT INTO `slider_detail_head_langs` (`id`, `slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Education', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(2, 1, 2, 'التعليم', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(3, 2, 1, 'test1', '2017-09-28 11:55:46', '2017-09-28 11:55:46', NULL),
(4, 2, 2, 'test', '2017-09-28 11:55:46', '2017-09-28 11:55:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_detail_text_langs`
--

CREATE TABLE `slider_detail_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_detail_text_langs`
--

INSERT INTO `slider_detail_text_langs` (`id`, `slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'We provides always our best services for our clients and  always', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(2, 1, 2, 'We provides always our best services for our clients and  always', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(3, 2, 1, 'test', '2017-09-28 11:55:46', '2017-09-28 11:55:46', NULL),
(4, 2, 2, 'test', '2017-09-28 11:55:47', '2017-09-28 11:55:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_detail_title_langs`
--

CREATE TABLE `slider_detail_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_detail_title_langs`
--

INSERT INTO `slider_detail_title_langs` (`id`, `slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Education for ever', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(2, 1, 2, 'التعليم للابد', '2017-09-08 08:49:08', '2017-09-08 08:49:08', NULL),
(3, 2, 1, 'test', '2017-09-28 11:55:46', '2017-09-28 11:55:46', NULL),
(4, 2, 2, 'test', '2017-09-28 11:55:46', '2017-09-28 11:55:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_name_langs`
--

CREATE TABLE `slider_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_name_langs`
--

INSERT INTO `slider_name_langs` (`id`, `slider_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Home Slider', '2017-09-08 04:52:17', '2017-09-08 04:52:17', NULL),
(2, 1, 2, 'شرائح صفحة الرئيسية', '2017-09-08 04:52:17', '2017-09-08 04:52:17', NULL),
(3, 2, 1, 'University Slider', '2017-09-08 08:51:20', '2017-09-08 08:51:20', NULL),
(4, 2, 2, 'مقر الجامعة', '2017-09-08 08:51:21', '2017-09-08 08:51:21', NULL);

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
(1, 'facebook', '2017-06-16 14:45:24', '2017-06-16 14:45:24', NULL);

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
(2, 1, 2, 'فيسبوك', '2017-06-16 14:45:24', '2017-06-16 14:45:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `steps`
--

CREATE TABLE `steps` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `text` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `text` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, '2017-06-15 17:51:34', '2017-06-15 17:51:34', NULL),
(2, '2017-06-15 17:51:54', '2017-06-15 17:51:54', NULL),
(3, '2017-06-15 17:52:14', '2017-06-15 17:52:14', NULL),
(4, '2017-06-15 17:52:33', '2017-06-15 17:52:33', NULL),
(5, '2017-06-15 17:52:48', '2017-06-15 17:52:48', NULL);

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
(1, 1, 1, 'First Semester', '2017-06-15 17:51:34', '2017-06-15 17:51:34', NULL),
(2, 1, 2, 'السنة الاولى', '2017-06-15 17:51:34', '2017-06-15 17:51:34', NULL),
(3, 2, 1, 'Second Semester', '2017-06-15 17:51:54', '2017-06-15 17:51:54', NULL),
(4, 2, 2, 'السنة  الثانية', '2017-06-15 17:51:54', '2017-06-15 17:51:54', NULL),
(5, 3, 1, 'Third Semester', '2017-06-15 17:52:14', '2017-06-15 17:52:14', NULL),
(6, 3, 2, 'الفصل الثالث', '2017-06-15 17:52:14', '2017-06-15 17:52:14', NULL),
(7, 4, 1, 'Fourth Semester', '2017-06-15 17:52:33', '2017-06-15 17:52:33', NULL),
(8, 4, 2, 'السنة الرابعة', '2017-06-15 17:52:33', '2017-06-15 17:52:33', NULL),
(9, 5, 1, 'Five Semester', '2017-06-15 17:52:48', '2017-06-15 17:52:48', NULL),
(10, 5, 2, 'السنة الخامسة', '2017-06-15 17:52:48', '2017-06-15 17:52:48', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `text_cards`
--

CREATE TABLE `text_cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `text_cards`
--

INSERT INTO `text_cards` (`id`, `icon_id`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 361, 'location:#405, Lan Streen, Los Vegas, USA', '2017-10-17 15:48:57', '2017-10-17 15:48:57', NULL),
(2, 10, 'tel:+325 12345 65478', '2017-10-17 15:49:54', '2017-10-17 15:49:54', NULL),
(3, 334, 'mailto:supporte@yourdomin.com', '2017-10-17 15:51:38', '2017-10-17 15:51:38', NULL),
(4, 496, 'www.youtube.com', '2017-10-17 15:52:21', '2017-10-17 15:52:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `text_card_title_langs`
--

CREATE TABLE `text_card_title_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `text_card_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(600) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `univercity_offices`
--

CREATE TABLE `univercity_offices` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `univercity_offices_langs`
--

CREATE TABLE `univercity_offices_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `univercity_office_name_langs`
--

CREATE TABLE `univercity_office_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `univercity_office_id` int(11) NOT NULL,
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmedsbbdjsa', 'ahmed@aa.com', '31412', NULL, NULL, NULL, '2017-07-16 07:22:05'),
(2, 'AA1992', 'AA1992@automata4.com', '$2y$10$mjfa30Eh64bF7Wo8r7Hoz.vFWc/eS9pZyEgIzJU7zaapvxChu5tQu', NULL, NULL, '2017-10-06 02:49:08', '2017-10-06 02:49:08');

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
(1, 1, 1, 'ahmedaa', NULL, '2017-07-16 07:17:08', NULL),
(2, 1, 2, 'أحمد بشير', NULL, '2017-07-16 07:25:16', NULL),
(3, 2, 1, 'Abdulbasset', '2017-10-06 02:49:09', '2017-10-06 02:49:09', NULL),
(4, 2, 2, 'عبدالباسط', '2017-10-06 02:49:09', '2017-10-06 02:49:09', NULL);

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
(1, 1, 'dsa', '2017-07-16 07:16:57', '2017-07-16 07:16:57', NULL, 1),
(2, 1, 'dsa', '2017-07-16 07:16:57', '2017-07-16 07:16:57', NULL, 2),
(3, 2, 'Web Technology', '2017-10-06 02:49:09', '2017-10-06 02:49:09', NULL, 1),
(4, 2, 'مطور ويب', '2017-10-06 02:49:09', '2017-10-06 02:49:09', NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_sliders`
--

CREATE TABLE `vertical_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vertical_slider_details`
--

INSERT INTO `vertical_slider_details` (`id`, `vertical_slider_id`, `image_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, '2017-09-24 15:23:45', '2017-09-24 15:25:41', '2017-09-24 15:25:41'),
(2, 1, 7, '2017-09-24 15:25:24', '2017-09-29 01:26:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_detail_small_text_langs`
--

CREATE TABLE `vertical_slider_detail_small_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vertical_slider_detail_small_text_langs`
--

INSERT INTO `vertical_slider_detail_small_text_langs` (`id`, `vertical_slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, 'CEO apple.inc', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(2, 2, 2, 'CEO apple.inc', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_detail_sub_text_langs`
--

CREATE TABLE `vertical_slider_detail_sub_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vertical_slider_detail_sub_text_langs`
--

INSERT INTO `vertical_slider_detail_sub_text_langs` (`id`, `vertical_slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 1, '- Catherine Grace,', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(2, 2, 2, '- Catherine Grace,', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_detail_text_langs`
--

CREATE TABLE `vertical_slider_detail_text_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_detail_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vertical_slider_detail_text_langs`
--

INSERT INTO `vertical_slider_detail_text_langs` (`id`, `vertical_slider_detail_id`, `lang_id`, `text`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-09-24 15:23:45', '2017-09-24 15:25:41', '2017-09-24 15:25:41'),
(2, 1, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-09-24 15:23:46', '2017-09-24 15:25:41', '2017-09-24 15:25:41'),
(3, 2, 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL),
(4, 2, 2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas vel sint, ut. Quisquam doloremque minus possimus eligendi dolore ad.', '2017-09-24 15:25:25', '2017-09-24 15:25:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vertical_slider_name_langs`
--

CREATE TABLE `vertical_slider_name_langs` (
  `id` int(10) UNSIGNED NOT NULL,
  `vertical_slider_id` int(10) UNSIGNED NOT NULL,
  `lang_id` int(10) UNSIGNED NOT NULL,
  `text` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD KEY `page_id` (`page_id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `degree_id` (`degree_id`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_course`
--
ALTER TABLE `faculty_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_name_langs`
--
ALTER TABLE `faculty_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_id` (`faculty_id`),
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
-- Indexes for table `menu_tables`
--
ALTER TABLE `menu_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_table_name_langs`
--
ALTER TABLE `menu_table_name_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_attribute`
--
ALTER TABLE `module_attribute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_name_langs`
--
ALTER TABLE `module_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender_id` (`module_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `office_numbers_langs`
--
ALTER TABLE `office_numbers_langs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person_name_langs`
--
ALTER TABLE `person_name_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`person_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `person_summary_langs`
--
ALTER TABLE `person_summary_langs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`person_id`),
  ADD KEY `lang_id` (`lang_id`);

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
  ADD KEY `site_menus_menuable_id_menuable_type_index` (`menuable_id`,`menuable_type`),
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
-- Indexes for table `univercity_offices`
--
ALTER TABLE `univercity_offices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `univercity_offices_langs`
--
ALTER TABLE `univercity_offices_langs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `univercity_office_name_langs`
--
ALTER TABLE `univercity_office_name_langs`
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
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `attribute_name_langs`
--
ALTER TABLE `attribute_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact_address_langs`
--
ALTER TABLE `contact_address_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `control_menus`
--
ALTER TABLE `control_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `control_pages`
--
ALTER TABLE `control_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `course_name_langs`
--
ALTER TABLE `course_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `custom_modules`
--
ALTER TABLE `custom_modules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `custom_module_attribute_values`
--
ALTER TABLE `custom_module_attribute_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `custom_module_attribute_value_multi_langs`
--
ALTER TABLE `custom_module_attribute_value_multi_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `custom_module_name_langs`
--
ALTER TABLE `custom_module_name_langs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
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
-- AUTO_INCREMENT for table `faculty_course`
--
ALTER TABLE `faculty_course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faculty_name_langs`
--
ALTER TABLE `faculty_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gender_name_langs`
--
ALTER TABLE `gender_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
-- AUTO_INCREMENT for table `job_titles`
--
ALTER TABLE `job_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `job_title_name_langs`
--
ALTER TABLE `job_title_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
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
-- AUTO_INCREMENT for table `menu_tables`
--
ALTER TABLE `menu_tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menu_table_name_langs`
--
ALTER TABLE `menu_table_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `module_attribute`
--
ALTER TABLE `module_attribute`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `module_name_langs`
--
ALTER TABLE `module_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `office_numbers_langs`
--
ALTER TABLE `office_numbers_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `page_name_langs`
--
ALTER TABLE `page_name_langs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `person_name_langs`
--
ALTER TABLE `person_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `person_summary_langs`
--
ALTER TABLE `person_summary_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `position_name_langs`
--
ALTER TABLE `position_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prerequisite`
--
ALTER TABLE `prerequisite`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prerequisite_groups`
--
ALTER TABLE `prerequisite_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `semester_name_langs`
--
ALTER TABLE `semester_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `setting_name_langs`
--
ALTER TABLE `setting_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `site_menus`
--
ALTER TABLE `site_menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `site_menu_name_langs`
--
ALTER TABLE `site_menu_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider_details`
--
ALTER TABLE `slider_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider_detail_btn_langs`
--
ALTER TABLE `slider_detail_btn_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider_detail_head_langs`
--
ALTER TABLE `slider_detail_head_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider_detail_text_langs`
--
ALTER TABLE `slider_detail_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider_detail_title_langs`
--
ALTER TABLE `slider_detail_title_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `slider_name_langs`
--
ALTER TABLE `slider_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `social_network_name_langs`
--
ALTER TABLE `social_network_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `study_year_name_langs`
--
ALTER TABLE `study_year_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
-- AUTO_INCREMENT for table `univercity_offices`
--
ALTER TABLE `univercity_offices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `univercity_offices_langs`
--
ALTER TABLE `univercity_offices_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `univercity_office_name_langs`
--
ALTER TABLE `univercity_office_name_langs`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vertical_slider_detail_small_text_langs`
--
ALTER TABLE `vertical_slider_detail_small_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vertical_slider_detail_sub_text_langs`
--
ALTER TABLE `vertical_slider_detail_sub_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vertical_slider_detail_text_langs`
--
ALTER TABLE `vertical_slider_detail_text_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vertical_slider_name_langs`
--
ALTER TABLE `vertical_slider_name_langs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
