-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 08, 2025 lúc 05:47 AM
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
-- Cơ sở dữ liệu: `lw3_db`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `street_address` longtext DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `addresses`
--

INSERT INTO `addresses` (`id`, `order_id`, `first_name`, `last_name`, `phone`, `street_address`, `city`, `state`, `zip_code`, `created_at`, `updated_at`) VALUES
(24, 31, 'viet anh', 'bui nguyen', '0352123456', '1212734 pho nguyen van  cu', 'thanh hoa', NULL, NULL, '2025-05-07 18:04:14', '2025-05-07 18:04:14'),
(25, 32, 'anh', 'bui', '0352332112', '123 nguyen van cu', 'thanh hoa', NULL, NULL, '2025-05-07 18:09:03', '2025-05-07 18:09:03'),
(26, 33, 'anh', 'A', '0352888999', '123 nguyen dac bang', 'thanh hoa', NULL, NULL, '2025-05-07 18:14:06', '2025-05-07 18:14:06'),
(27, 34, 'dsa', 'dsd', '0321544623', 'sdsdsds2323', 'dsdsd', NULL, NULL, '2025-05-07 18:17:16', '2025-05-07 18:17:16'),
(28, 35, 'dsds', 'dsdsd', '2323232323', 'sdsdsdsd', 'dsdsds', NULL, NULL, '2025-05-07 18:19:21', '2025-05-07 18:19:21'),
(29, 36, 'dsds1', 'dsdsds', '2323232323s', 'sdsdsdsds', 'dsdsdss', NULL, NULL, '2025-05-07 18:20:28', '2025-05-07 18:20:28'),
(30, 37, 'dsds1sdsa', 'dsdsdssdsa', '2323232323sdsad', 'sdsdsdsdssad', 'dsdsdsss', NULL, NULL, '2025-05-07 18:23:07', '2025-05-07 18:23:07'),
(31, 38, 'anh', 'nguyen', '0352698456', '123 ngfngn', 'than hhoa', NULL, NULL, '2025-05-07 18:28:37', '2025-05-07 18:28:37'),
(32, 39, 'anh', 'bui', '3232323232', 'shdsahdsahd1212', 'thanh hoa', NULL, NULL, '2025-05-07 18:31:29', '2025-05-07 18:31:29'),
(33, 40, 'Viet Anh', 'Bui', '0352559313', '123 Nguyễn Văn Trỗi', 'Thanh Hoá', NULL, NULL, '2025-05-07 18:50:24', '2025-05-07 18:50:24'),
(34, 41, 'Việt Anh', 'Bùi', '0352559323', '123 Nguyễn Xuân, p.Tân Phú', 'Thanh Hoá', NULL, NULL, '2025-05-07 18:51:49', '2025-05-07 18:51:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Nike', 'nike', 'brands/01JTJCK97CCK401P32STPYYSYY.jpg', 1, '2025-05-06 01:50:00', '2025-05-06 01:50:00'),
(2, 'adidas', 'adidas', 'brands/01JTME5SC765D6A0VBPXXP6H2E.png', 1, '2025-05-06 20:56:04', '2025-05-06 20:56:04'),
(3, 'vans', 'vans', 'brands/01JTMEFYDP9RVJYAQWJAG0TMF5.png', 1, '2025-05-06 21:01:37', '2025-05-06 21:09:19'),
(4, 'gucci', 'gucci', 'brands/01JTMF6CQ9YT72S906QJFW2TG2.jpg', 1, '2025-05-06 21:13:52', '2025-05-06 21:13:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Mu', 'mu', 'categories/01JTJCGX41V1XHN4XCB6WCQ3QB.jpg', 1, '2025-05-06 01:48:42', '2025-05-06 01:49:25'),
(2, 'Ao', 'ao', 'categories/01JTK0XJSECEQNPD5RPNF981MW.jpg', 1, '2025-05-06 07:45:09', '2025-05-06 07:45:09'),
(3, 'quan dui', 'quan-dui', 'categories/01JTME4YDF7VQ1DVXW2Q8JZKYS.jpg', 1, '2025-05-06 20:55:36', '2025-05-06 20:55:36'),
(5, 'danh mục mới 1', 'danh-muc-moi-1', 'categories/01JTPX5JDXW8DN023GTBVJ6A8K.png', 1, '2025-05-07 19:56:34', '2025-05-07 19:56:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_09_101214_create_categories_table', 1),
(5, '2024_06_09_101324_create_brands_table', 1),
(6, '2024_06_09_101341_create_products_table', 1),
(7, '2024_06_09_101416_create_orders_table', 1),
(8, '2024_06_09_101429_create_order_items_table', 1),
(9, '2024_06_09_101447_create_addresses_table', 1),
(10, '2024_06_12_141143_add_meta_fields_to_products_table', 1),
(11, '2024_06_12_163819_add_sku_to_products_table', 1),
(12, '2025_05_06_230911_add_role_to_users_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `grand_total` decimal(10,2) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `status` enum('new','processing','shipped','delivered','cancelled') NOT NULL DEFAULT 'new',
  `currency` varchar(255) DEFAULT NULL,
  `shipping_amount` decimal(10,2) DEFAULT NULL,
  `shipping_method` varchar(255) DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `grand_total`, `payment_method`, `payment_status`, `status`, `currency`, `shipping_amount`, `shipping_method`, `notes`, `created_at`, `updated_at`) VALUES
(31, 1, 218900.00, 'bank', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:04:14', '2025-05-07 18:04:14'),
(32, 1, 218900.00, 'cod', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:09:03', '2025-05-07 18:09:03'),
(33, 4, 493900.00, 'cod', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:14:06', '2025-05-07 18:14:06'),
(34, 4, 768900.00, 'cod', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:17:16', '2025-05-07 18:17:16'),
(35, 4, 768900.00, 'bank', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:19:21', '2025-05-07 18:19:21'),
(36, 4, 768900.00, 'cod', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:20:28', '2025-05-07 18:20:28'),
(37, 4, 768900.00, 'cod', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:23:07', '2025-05-07 18:23:07'),
(38, 4, 768900.00, 'cod', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:28:37', '2025-05-07 18:28:37'),
(39, 4, 768900.00, 'cod', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:31:29', '2025-05-07 18:31:29'),
(40, 4, 768900.00, 'bank', 'pending', 'new', 'VND', NULL, NULL, NULL, '2025-05-07 18:50:24', '2025-05-07 18:50:24'),
(41, 4, 2087800.00, 'bank', 'pending', 'delivered', 'VND', NULL, NULL, NULL, '2025-05-07 18:51:49', '2025-05-07 20:05:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `unit_amount` decimal(10,2) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `unit_amount`, `total_amount`, `created_at`, `updated_at`) VALUES
(1, 31, 3, 1, 199000.00, 199000.00, '2025-05-07 18:04:14', '2025-05-07 18:04:14'),
(2, 32, 3, 1, 199000.00, 199000.00, '2025-05-07 18:09:03', '2025-05-07 18:09:03'),
(3, 33, 3, 1, 199000.00, 199000.00, '2025-05-07 18:14:06', '2025-05-07 18:14:06'),
(4, 33, 2, 1, 250000.00, 250000.00, '2025-05-07 18:14:06', '2025-05-07 18:14:06'),
(5, 34, 3, 1, 199000.00, 199000.00, '2025-05-07 18:17:16', '2025-05-07 18:17:16'),
(6, 34, 1, 1, 500000.00, 500000.00, '2025-05-07 18:17:16', '2025-05-07 18:17:16'),
(7, 35, 3, 1, 199000.00, 199000.00, '2025-05-07 18:19:21', '2025-05-07 18:19:21'),
(8, 35, 1, 1, 500000.00, 500000.00, '2025-05-07 18:19:21', '2025-05-07 18:19:21'),
(9, 36, 3, 1, 199000.00, 199000.00, '2025-05-07 18:20:28', '2025-05-07 18:20:28'),
(10, 36, 1, 1, 500000.00, 500000.00, '2025-05-07 18:20:28', '2025-05-07 18:20:28'),
(11, 37, 3, 1, 199000.00, 199000.00, '2025-05-07 18:23:07', '2025-05-07 18:23:07'),
(12, 37, 1, 1, 500000.00, 500000.00, '2025-05-07 18:23:07', '2025-05-07 18:23:07'),
(13, 38, 3, 1, 199000.00, 199000.00, '2025-05-07 18:28:37', '2025-05-07 18:28:37'),
(14, 38, 1, 1, 500000.00, 500000.00, '2025-05-07 18:28:37', '2025-05-07 18:28:37'),
(15, 39, 3, 1, 199000.00, 199000.00, '2025-05-07 18:31:29', '2025-05-07 18:31:29'),
(16, 39, 1, 1, 500000.00, 500000.00, '2025-05-07 18:31:29', '2025-05-07 18:31:29'),
(17, 40, 3, 1, 199000.00, 199000.00, '2025-05-07 18:50:24', '2025-05-07 18:50:24'),
(18, 40, 1, 1, 500000.00, 500000.00, '2025-05-07 18:50:24', '2025-05-07 18:50:24'),
(19, 41, 3, 2, 199000.00, 398000.00, '2025-05-07 18:51:49', '2025-05-07 18:51:49'),
(20, 41, 1, 3, 500000.00, 1500000.00, '2025-05-07 18:51:49', '2025-05-07 18:51:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`images`)),
  `description` longtext DEFAULT NULL,
  `short_description` longtext DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `in_stock` tinyint(1) NOT NULL DEFAULT 1,
  `on_sale` tinyint(1) NOT NULL DEFAULT 0,
  `meta_title` longtext DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `meta_keywords` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `slug`, `images`, `description`, `short_description`, `price`, `sku`, `is_active`, `is_featured`, `in_stock`, `on_sale`, `meta_title`, `meta_description`, `meta_keywords`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Mũ vàng cánh sen', 'mu-vang-canh-sen', '[\"products\\/01JTJCP4G4NDZFAAGBTQ1XVXE3.jpg\"]', 'Mũ vàng tuyệt đẹp của Tề thiên đại thánh', 'Mũ vàng TNK', 500000.00, 'mũ vàng', 1, 1, 1, 1, 'muvang', 'muvang1', 'muvangtnk', '2025-05-06 01:51:34', '2025-05-06 01:51:34'),
(2, 2, 1, 'Áo hoodie 1', 'ao-hoodie-1', '[\"products\\/01JTK12DP2G3G2EQM2G8VFBH1S.jpg\"]', 'Áo đẹp lắm', 'Áodep', 250000.00, 'AHD01', 1, 0, 1, 0, 'hoodie', 'hoodie1', 'ahd', '2025-05-06 07:47:48', '2025-05-06 07:47:48'),
(3, 1, 1, 'Giay11', 'giay11', '[\"products\\/01JTMDS7409Q09DZF62BHNT19F.jpg\"]', 'sdsd sd sds sd s', 'sds', 199000.00, 'g11', 1, 0, 1, 0, 'g11', 'g11', 'g11', '2025-05-06 20:49:12', '2025-05-06 20:49:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CZozkWMIPA6aZyN7OZp6b2vipmxGhd0VCo32mmam', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiaUt4b3l4T3NEQXJOWUNTSUZhTWQyM1lnUzZzWkZndTdzVHcyQUxzYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkRXRJSTk5UlRuWGRpVTZJQ2NTd1djdUM4a0xQZXYzRkZ1WGlNVDhZTi4zMkJTdkE4MW9JV0siO3M6NjoidGFibGVzIjthOjI6e3M6MjE6IkxhdGVzdE9yZGVyc19wZXJfcGFnZSI7czoyOiIxMCI7czozMDoiTGlzdENhdGVnb3JpZXNfdG9nZ2xlZF9jb2x1bW5zIjthOjI6e3M6MTA6ImNyZWF0ZWRfYXQiO2I6MDtzOjEwOiJ1cGRhdGVkX2F0IjtiOjA7fX1zOjg6ImZpbGFtZW50IjthOjA6e319', 1746675972),
('F9FWnpmcnwvLBaqfIwAgGahvRDH4GO6HG4KduzLw', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZklTYmF6aGNhOXJOQmh1WjdNc3hSVXhUUGNIVEptV09lNUtrelpTaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9teS1vcmRlcnMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjg6Im9yZGVyX2lkIjtpOjM4O3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7fQ==', 1746667813),
('o2BabafKma4Yg87yGjM7hsvEuSrabYRGWNtFygYA', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQmlxVFdWbU91anhnaDBqWXF5SjRpMlE2VzEyRURwOVZWTk5QVG5tSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9sb2dpbiI7fX0=', 1746672688);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Test User', 'test@example.com', 'user', '2025-05-06 01:32:20', '$2y$12$nthYOw4SpXWujNzFmzHuoOc.p6breB15eqk/jd59aYPHLCyF6Gwkq', 'PcFX1EkRoH', '2025-05-06 01:32:21', '2025-05-06 01:32:21'),
(2, 'admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$EtII99RTnXdiU6ICcSwWcuC8kLPev3FFuXiMT8YN.32BSvA81oIWK', NULL, '2025-05-06 01:42:48', '2025-05-06 01:42:48'),
(4, 'khach', 'khach@gmail.com', 'user', NULL, '$2y$12$8gcRrSOt2yxoETjfcOM.Ye5/A5f2xJXqW6VfW6tP0hI4NvdLPKKuO', NULL, '2025-05-06 20:34:19', '2025-05-06 20:34:19'),
(6, 'khach121', 'khach1212@gmail.com', 'user', '2025-04-28 20:55:38', '$2y$12$DzqND2N9Cnd4eZD3LqI6a.EW2IGZ1kV1aQHrLq.hG5JRdONK3opUK', NULL, '2025-05-07 19:55:03', '2025-05-07 19:55:03'),
(7, 'k1212', '21212@gmail.com', 'user', '2025-05-06 19:55:16', '$2y$12$6MbiLhhPt25SSiy5WY3iae60.Jc2xKloIm87nNLluuwzNqDhh2Gia', NULL, '2025-05-07 19:55:26', '2025-05-07 19:55:26'),
(8, '212121', 'dsadsad@x', 'user', '2025-05-16 19:55:25', '$2y$12$zNPy/2n.9qwCFWqpj9TTdOhF4pRtJvvA/7bjfpR1NtIvD58a/tw/u', NULL, '2025-05-07 19:55:39', '2025-05-07 19:55:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Chỉ mục cho bảng `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Chỉ mục cho bảng `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
