-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 09:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `auctions`
--

CREATE TABLE `auctions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `odometer` double NOT NULL,
  `damage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_type_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ger_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `engine_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stare_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min_bid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `curren_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_end_auction` datetime NOT NULL,
  `number_of_participate` int(11) NOT NULL,
  `fuel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_ready_to_sell` smallint(6) NOT NULL DEFAULT 1,
  `is_received` smallint(6) NOT NULL DEFAULT -1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auctions`
--

INSERT INTO `auctions` (`id`, `is_active`, `color`, `seller_id`, `category_id`, `odometer`, `damage`, `vehicle_type_id`, `name`, `model`, `state`, `ger_type`, `engine_type`, `notes`, `stare_price`, `min_bid`, `curren_price`, `city_id`, `date_of_end_auction`, `number_of_participate`, `fuel`, `is_ready_to_sell`, `is_received`, `created_at`, `updated_at`) VALUES
(6, -1, 'رمادي', 3, 1, 12000, 'دقة في مقدمة السيارة', 2, 'شاص', '2012', 'مستخدم', 'عادي', '6 بوستن', 'نتالناتلربانلت4ياؤفلاتؤلءبةقاؤىلابلءىيبسق', '4000', '100', '4600', 2, '2022-06-03 18:55:27', 4, 'بترول', 1, 1, '2022-06-03 14:01:44', '2022-06-03 16:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `auction_images`
--

CREATE TABLE `auction_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auction_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `auction_images`
--

INSERT INTO `auction_images` (`id`, `auction_id`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(14, 6, '6_main_1654275704_1.jpg', '-1', '2022-06-03 14:01:44', '2022-06-03 14:01:44'),
(15, 6, '6_1654275704_36899_2.jpg', '-1', '2022-06-03 14:01:44', '2022-06-03 14:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `biddings`
--

CREATE TABLE `biddings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bidding_amount` double NOT NULL,
  `auction_id` bigint(20) UNSIGNED NOT NULL,
  `payed_amount` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biddings`
--

INSERT INTO `biddings` (`id`, `user_id`, `bidding_amount`, `auction_id`, `payed_amount`, `created_at`, `updated_at`) VALUES
(13, 3, 200, 6, 440, '2022-06-03 14:03:11', '2022-06-03 14:03:11'),
(14, 3, 200, 6, 460, '2022-06-03 14:04:41', '2022-06-03 14:04:41'),
(15, 3, 100, 6, 460, '2022-06-03 14:07:26', '2022-06-03 14:07:26'),
(16, 2, 100, 6, 470, '2022-06-03 15:31:11', '2022-06-03 15:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'تويوتا', '1654191894_pngegg.png', 1, '2022-06-02 14:44:54', '2022-06-02 14:44:54'),
(2, 'لكزس', '1654191922_لكزس.png', 1, '2022-06-02 14:45:22', '2022-06-02 14:45:22'),
(3, 'هونداي', '1654191940_هونداي.png', 1, '2022-06-02 14:45:40', '2022-06-02 14:45:40'),
(4, 'كيا', '1654191958_كيا.png', 1, '2022-06-02 14:45:58', '2022-06-02 14:45:58'),
(5, 'سوزوكي', '1654191975_سوزكي.png', 1, '2022-06-02 14:46:15', '2022-06-02 14:46:15'),
(6, 'مرسيدس', '1654191993_مرسيدس.png', 1, '2022-06-02 14:46:33', '2022-06-02 14:46:33'),
(7, 'نيسان', '1654193503_nissan.png', 1, '2022-06-02 15:11:43', '2022-06-02 15:11:43'),
(8, 'لمبرجيني', '1654271345_1652211820_lamborghini.png', 1, '2022-06-03 12:49:05', '2022-06-03 12:49:05');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `state_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'حدة', 1, 1, '2022-06-02 14:43:33', '2022-06-02 14:43:33'),
(2, 'السبعين', 1, 1, '2022-06-02 14:43:51', '2022-06-02 14:43:51'),
(3, 'همدان', 1, 1, '2022-06-02 14:44:07', '2022-06-02 14:44:07'),
(4, 'أرحب', 1, 1, '2022-06-02 14:44:22', '2022-06-02 14:44:22'),
(5, 'المكلا', 2, 1, '2022-06-02 15:00:26', '2022-06-02 15:00:26'),
(6, 'الغيل', 2, 1, '2022-06-02 15:00:39', '2022-06-02 15:00:39'),
(7, 'سيؤن', 2, 1, '2022-06-02 15:00:52', '2022-06-02 15:00:52'),
(8, 'الشيخ عثمان', 3, 1, '2022-06-02 15:01:12', '2022-06-02 15:01:12'),
(9, 'التواهي', 3, 1, '2022-06-02 15:01:35', '2022-06-02 15:01:35'),
(10, 'الغيضة', 4, 1, '2022-06-02 15:01:50', '2022-06-02 15:01:50'),
(11, 'شحن', 4, 1, '2022-06-02 15:02:02', '2022-06-02 15:02:02'),
(12, 'تعز', 5, 1, '2022-06-03 12:48:24', '2022-06-03 12:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `deliveries`
--

CREATE TABLE `deliveries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `receiver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_identity_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_identity_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `auction_id` bigint(20) UNSIGNED NOT NULL,
  `payer_id` bigint(20) UNSIGNED NOT NULL,
  `paid_amout` double NOT NULL,
  `amout_delever` double NOT NULL,
  `is_active` smallint(6) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deliveries`
--

INSERT INTO `deliveries` (`id`, `receiver_name`, `receiver_identity_type`, `receiver_identity_number`, `receiver_phone`, `city_id`, `auction_id`, `payer_id`, `paid_amout`, `amout_delever`, `is_active`, `created_at`, `updated_at`) VALUES
(14, 'عبدالرحمن الصنعاني', 'بطاقة شخصية', '785465487', '7775462578', 6, 6, 2, 4046, 200, 1, '2022-06-03 16:00:43', '2022-06-03 16:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_06_222923_create_transactions_table', 1),
(4, '2018_11_07_192923_create_transfers_table', 1),
(5, '2018_11_15_124230_create_wallets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2021_11_02_202021_update_wallets_uuid_table', 1),
(9, '2022_04_25_225450_create_categories_table', 1),
(10, '2022_04_26_123010_create_user_profiles_table', 1),
(11, '2022_05_08_082716_create_policies_table', 1),
(12, '2022_05_11_203638_create_states_table', 1),
(13, '2022_05_11_204217_create_vehicle_types_table', 1),
(14, '2022_05_11_204351_create_cities_table', 1),
(15, '2022_05_12_232854_create_auctions_table', 1),
(16, '2022_05_13_111814_create_auction_images_table', 1),
(17, '2022_05_13_202837_create_biddings_table', 1),
(18, '2022_05_15_192727_create_notifications_table', 1),
(19, '2022_05_17_091904_create_deliveries_table', 1),
(20, '2022_05_19_131237_create_orders_table', 1),
(21, '2022_05_20_192228_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_user_id` bigint(20) UNSIGNED NOT NULL,
  `to_user_id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_seen` tinyint(1) NOT NULL DEFAULT -1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `from_user_id`, `to_user_id`, `content`, `route`, `is_seen`, `created_at`, `updated_at`) VALUES
(30, 9, 3, 'عزيزي العميل لقد رسي المزاد عليك   ', 'action_detail/1', 1, '2022-06-03 11:46:27', '2022-06-03 11:46:40'),
(31, 9, 9, 'لقد رسى المزاد على المستخدم ', 'edit-auction/1', -1, '2022-06-03 11:46:27', '2022-06-03 11:46:27'),
(53, 9, 10, 'تمت اضافة مزاد جديد ', 'action_detail/6', -1, '2022-06-03 14:02:25', '2022-06-03 14:02:25'),
(54, 9, 2, 'عزيزي العميل لقد رسي المزاد عليك   ', 'action_detail/6', 1, '2022-06-03 15:33:58', '2022-06-03 15:49:28'),
(55, 9, 9, 'لقد رسى المزاد على المستخدم ', 'edit-auction/6', -1, '2022-06-03 15:33:58', '2022-06-03 15:33:58'),
(56, 9, 3, 'مبروك  محمد سعيد زبير لقد رسي مزادك الخاص بالسيارة شاص بمبلغ 4600 هل انت موافق على عملية البيع اضغط على موافق للبيع أو تمديد ', 'comfirmSell/6', -1, '2022-06-03 15:33:58', '2022-06-03 15:33:58'),
(57, 9, 2, 'عزيزي العميل لقد رسي المزاد عليك   ', 'action_detail/6', 1, '2022-06-03 15:55:27', '2022-06-03 15:55:39'),
(58, 9, 9, 'لقد رسى المزاد على المستخدم ', 'edit-auction/6', -1, '2022-06-03 15:55:27', '2022-06-03 15:55:27'),
(59, 9, 3, 'مبروك  محمد سعيد زبير لقد رسي مزادك الخاص بالسيارة شاص بمبلغ 4600 هل انت موافق على عملية البيع اضغط على موافق للبيع أو تمديد ', 'comfirmSell/6', -1, '2022-06-03 15:55:27', '2022-06-03 15:55:27'),
(60, 9, 2, ' شكرا عزيزي العميل\r\n                                                                        لقد تمت عملية الدفع بنجاح يرجى تأكيد استلام السيارة\r\n                                                               لكي نرسل لكم بقية وثائق السيارة ', 'comfirmDelevery/14', 1, '2022-06-03 16:01:17', '2022-06-03 16:05:59');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `system_balance_from_seller` double NOT NULL,
  `system_balance_from_payer` double NOT NULL,
  `delivery_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `system_balance_from_seller`, `system_balance_from_payer`, `delivery_id`, `created_at`, `updated_at`) VALUES
(6, 46, 46, 14, '2022-06-03 16:09:27', '2022-06-03 16:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policies`
--

CREATE TABLE `policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `police` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `policies`
--

INSERT INTO `policies` (`id`, `police`, `description`, `user_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'كيف يمكنني الاشتراك في المزاد', 'اولا عليك  إنشاء حساب في الموقع .\r\nثانيا شحن محفظتك لدينا بمبلغ 20% من السعر الاساسي للسيارة المراد الاشتراك فيها .\r\nثالثا : انطلق وشارك في المزاد بكل حرية', 9, 1, '2022-05-23 13:29:36', '2022-06-02 14:49:33'),
(2, 'كيف يمكنني اضافة سيارة للمزاد', 'كل ماعليك فعله هو إنشاء حساب لدينا في الموقع ثم الذهاب للوحة التحكم واضافة مزاد جديد بكل سهولة ....', 9, 1, '2022-05-23 13:44:56', '2022-05-23 13:44:56'),
(3, 'هل يمكنني أن انسحب في نصف المزاد ؟', 'لايمكنك الانسحاب من المزاد بعد المشاركة فيه إلا بعد أن ينتهي المزاد ....', 9, 1, '2022-05-23 13:45:59', '2022-05-23 13:45:59'),
(4, 'مالذي يحصل إذا رسى المزاد علي', 'سيصلك اشعار على الايميل و إشعار داخلي في الموقع ينبهك أن عليك الدفع وكل ماعلك هو أكمال خطوات الدفع', 9, 1, '2022-05-23 13:47:53', '2022-06-02 14:49:11'),
(5, 'هل يمكنني الانسحاب بعد أن يرسي المسار علي', 'لايمكنك الانسحاب بعد أن يرسى المزاد عليك وإذا حاولت الانسحاب سيتم خصم مبلغ 20% من سعر السيارة الاساسي من محفظتك الخاصة', 9, 1, '2022-05-23 13:50:06', '2022-05-23 13:50:06'),
(6, 'هل هناك توصيل للسيارة بع الشراء', 'نعم بعد تيىبرخءمر', 9, 1, '2022-06-03 12:51:07', '2022-06-03 12:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'صنعاء', 1, '2022-06-02 14:42:27', '2022-06-02 14:42:27'),
(2, 'حضرموت', 1, '2022-06-02 14:42:40', '2022-06-02 14:42:40'),
(3, 'عدن', 1, '2022-06-02 14:42:55', '2022-06-02 14:42:55'),
(4, 'المهرة', 1, '2022-06-02 14:43:15', '2022-06-02 14:43:15'),
(5, 'تعز', 1, '2022-06-03 12:47:51', '2022-06-03 12:47:51');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payable_id` bigint(20) UNSIGNED NOT NULL,
  `wallet_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('deposit','withdraw') COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(64,0) NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `payable_type`, `payable_id`, `wallet_id`, `type`, `amount`, `confirmed`, `meta`, `uuid`, `created_at`, `updated_at`) VALUES
(53, 'App\\Models\\User', 2, 20, 'deposit', '800', 1, '{\"order_reference_id\":6,\"creaated_at\":[\"2022-06-03T18:30:40.000000Z\"],\"userName\":\"\\u0641\\u0624\\u0627\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u062f\\u064a\",\"auctionName\":\"\\u0634\\u0627\\u0635\",\"auctionModle\":\"2012\"}', '72474ef7-7098-41b6-b3cd-63ca0721d01a', '2022-06-03 15:31:11', '2022-06-03 15:31:11'),
(54, 'App\\Models\\User', 2, 20, 'deposit', '4046', 1, '{\"order-delever\":14,\"userName\":\"\\u0641\\u0624\\u0627\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u062f\\u064a\",\"creaated_at\":null,\"auction_id\":6,\"auctionName\":6,\"auctionModle\":\"2012\"}', '44df522c-51ec-47c3-b82e-09f5410f0228', '2022-06-03 16:01:17', '2022-06-03 16:01:17'),
(55, 'App\\Models\\User', 2, 20, 'withdraw', '-46', 1, '{\"From\":\"\\u0641\\u0624\\u0627\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u062f\\u064a\",\"to\":\"\\u0645\\u0633\\u0624\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \",\"carName\":\"\\u0634\\u0627\\u0635\",\"model\":\"2012\",\"description\":\"\\u0646\\u0633\\u0628\\u0629 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \"}', 'ae1c4960-6cc5-456c-9793-c0342486383c', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(56, 'App\\Models\\User', 9, 22, 'deposit', '46', 1, '{\"From\":\"\\u0641\\u0624\\u0627\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u062f\\u064a\",\"to\":\"\\u0645\\u0633\\u0624\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \",\"carName\":\"\\u0634\\u0627\\u0635\",\"model\":\"2012\",\"description\":\"\\u0646\\u0633\\u0628\\u0629 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \"}', '14853276-1cd5-4f38-89db-b6988a15e97e', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(57, 'App\\Models\\User', 2, 20, 'withdraw', '-200', 1, '{\"From\":\"\\u0641\\u0624\\u0627\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u062f\\u064a\",\"to\":\"\\u0645\\u0633\\u0624\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \",\"carName\":\"\\u0634\\u0627\\u0635\",\"model\":\"2012\",\"description\":\"\\u0645\\u0642\\u0627\\u0628\\u0644 \\u0627\\u0644\\u062a\\u0648\\u0635\\u064a\\u0644 \"}', '9ebc6571-424d-4827-bb5a-381d53e2f409', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(58, 'App\\Models\\User', 9, 22, 'deposit', '200', 1, '{\"From\":\"\\u0641\\u0624\\u0627\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u062f\\u064a\",\"to\":\"\\u0645\\u0633\\u0624\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \",\"carName\":\"\\u0634\\u0627\\u0635\",\"model\":\"2012\",\"description\":\"\\u0645\\u0642\\u0627\\u0628\\u0644 \\u0627\\u0644\\u062a\\u0648\\u0635\\u064a\\u0644 \"}', 'e4d65344-b86b-41b1-9966-aca44b3973fc', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(59, 'App\\Models\\User', 2, 20, 'withdraw', '-4600', 1, '{\"From\":\"\\u0641\\u0624\\u0627\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u062f\\u064a\",\"to\":\"\\u0645\\u062d\\u0645\\u062f \\u0633\\u0639\\u064a\\u062f \\u0632\\u0628\\u064a\\u0631\",\"carName\":\"\\u0634\\u0627\\u0635\",\"model\":\"2012\",\"description\":\"\\u0645\\u0642\\u0627\\u0628\\u0644 \\u0634\\u0631\\u0627\\u0621 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0631\\u0629 \"}', '7b270411-b798-4f25-b71d-40c1079eb707', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(60, 'App\\Models\\User', 3, 21, 'deposit', '4600', 1, '{\"From\":\"\\u0641\\u0624\\u0627\\u062f \\u0627\\u0644\\u0639\\u0645\\u0648\\u062f\\u064a\",\"to\":\"\\u0645\\u062d\\u0645\\u062f \\u0633\\u0639\\u064a\\u062f \\u0632\\u0628\\u064a\\u0631\",\"carName\":\"\\u0634\\u0627\\u0635\",\"model\":\"2012\",\"description\":\"\\u0645\\u0642\\u0627\\u0628\\u0644 \\u0634\\u0631\\u0627\\u0621 \\u0627\\u0644\\u0633\\u064a\\u0627\\u0631\\u0629 \"}', 'dea48b7e-aa33-46fb-98e8-7283c97d3661', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(61, 'App\\Models\\User', 3, 21, 'withdraw', '-46', 1, '{\"From\":\"\\u0645\\u062d\\u0645\\u062f \\u0633\\u0639\\u064a\\u062f \\u0632\\u0628\\u064a\\u0631\",\"to\":\"\\u0645\\u0633\\u0624\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \",\"carName\":\"\\u0634\\u0627\\u0635\",\"model\":\"2012\",\"description\":\"\\u0646\\u0633\\u0628\\u0629 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \"}', '5e0fc1e0-00b3-4ac1-8172-db3980d36e68', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(62, 'App\\Models\\User', 9, 22, 'deposit', '46', 1, '{\"From\":\"\\u0645\\u062d\\u0645\\u062f \\u0633\\u0639\\u064a\\u062f \\u0632\\u0628\\u064a\\u0631\",\"to\":\"\\u0645\\u0633\\u0624\\u0648\\u0644 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \",\"carName\":\"\\u0634\\u0627\\u0635\",\"model\":\"2012\",\"description\":\"\\u0646\\u0633\\u0628\\u0629 \\u0627\\u0644\\u0646\\u0638\\u0627\\u0645 \"}', '0f98ddf0-624c-41c4-86b5-acae0dd7fd5b', '2022-06-03 16:09:27', '2022-06-03 16:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) UNSIGNED NOT NULL,
  `to_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('exchange','transfer','paid','refund','gift') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'transfer',
  `status_last` enum('exchange','transfer','paid','refund','gift') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit_id` bigint(20) UNSIGNED NOT NULL,
  `withdraw_id` bigint(20) UNSIGNED NOT NULL,
  `discount` decimal(64,0) NOT NULL DEFAULT 0,
  `fee` decimal(64,0) NOT NULL DEFAULT 0,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `from_type`, `from_id`, `to_type`, `to_id`, `status`, `status_last`, `deposit_id`, `withdraw_id`, `discount`, `fee`, `uuid`, `created_at`, `updated_at`) VALUES
(21, 'Bavix\\Wallet\\Models\\Wallet', 20, 'Bavix\\Wallet\\Models\\Wallet', 22, 'transfer', NULL, 56, 55, '0', '0', 'f15558e0-7f42-4bcf-9080-ce5b4ce2e7f3', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(22, 'Bavix\\Wallet\\Models\\Wallet', 20, 'Bavix\\Wallet\\Models\\Wallet', 22, 'transfer', NULL, 58, 57, '0', '0', '7c5b6249-3916-4f57-ba45-4befe6bf468b', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(23, 'Bavix\\Wallet\\Models\\Wallet', 20, 'Bavix\\Wallet\\Models\\Wallet', 21, 'transfer', NULL, 60, 59, '0', '0', '524facca-1d92-4cfa-99c0-a66478a76ff0', '2022-06-03 16:09:27', '2022-06-03 16:09:27'),
(24, 'Bavix\\Wallet\\Models\\Wallet', 21, 'Bavix\\Wallet\\Models\\Wallet', 22, 'transfer', NULL, 62, 61, '0', '0', '1d499c76-25ca-46b9-b7b1-645474efb1f8', '2022-06-03 16:09:27', '2022-06-03 16:09:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL DEFAULT 2,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ناصر الغيثي', 'naser@gmail.com', 2, '2022-06-02 14:38:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, '0FtItWv0495manSR9vlOXuTKVILm80RM02lCPvbkAQe5RKnClfQyz7svOc19', '2022-06-02 14:38:04', '2022-06-02 14:38:04'),
(2, 'فؤاد العمودي', 'fuad@gmial.com', 2, '2022-06-02 14:38:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'yJBp2QQKCLNw3su8aoYvJDlfxhOt5Zu9q5q92xmJb4ukatViX12CGnGCW45B', '2022-06-02 14:38:04', '2022-06-02 15:05:46'),
(3, 'محمد سعيد زبير', 'mhmd@gmail.com', 2, '2022-06-02 14:38:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'rev1YEvoNsCgcJ4DmXGisyLYSRIEkmRp5pCoCwhoFqHrPlCiLIwZPSIld9Fo', '2022-06-02 14:38:04', '2022-06-02 14:38:04'),
(8, 'مدير', 'adriana.west@example.org', 1, '2022-06-02 14:38:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'Zeghh2cY4N', '2022-06-02 14:38:04', '2022-06-02 14:38:04'),
(9, 'مسؤول النظام ', 'amas@gmail.com', 0, '2022-06-02 14:38:04', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 1, 'AGNHWkXmQU', '2022-06-02 14:38:04', '2022-06-02 14:38:04'),
(10, 'Nasser Algaithi', 'eng.naser2022@gmail.com', 2, '2022-06-03 12:15:16', '$2y$10$otRHH5uMSqnJLFpm/GLO5ektJW9wpCPkPHcq4h.tKO0fUnTya4/3y', 1, NULL, '2022-06-03 12:12:47', '2022-06-03 12:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `phone`, `image`, `address`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 1, '7775459160', '1654192751_1652183672_avatar-3.jpg', 'اليمن اب', NULL, NULL, NULL, '2022-06-02 14:59:11', '2022-06-02 14:59:29'),
(2, 2, '773336598', '1654193146_1652183955_avatar-4.jpg', 'حضرموت - المكلا', NULL, NULL, NULL, '2022-06-02 15:05:46', '2022-06-02 15:05:46'),
(3, 3, '777555666', '1654193381_1652088136_avatar-6.jpg', 'اليمن المكلا', NULL, NULL, NULL, '2022-06-02 15:09:41', '2022-06-02 15:09:41'),
(10, 10, '77754589', '1654269329_1652088136_avatar-6.jpg', NULL, NULL, NULL, NULL, '2022-06-03 12:15:29', '2022-06-03 12:15:29');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ياص', 1, '2022-06-02 14:46:46', '2022-06-02 14:46:46'),
(2, 'سيارة', 1, '2022-06-02 14:46:57', '2022-06-02 14:46:57'),
(3, 'شاحنة', 1, '2022-06-02 14:47:08', '2022-06-02 14:47:08'),
(4, 'بابور', 1, '2022-06-03 12:49:47', '2022-06-03 12:49:47');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `holder_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holder_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta`)),
  `balance` decimal(64,0) NOT NULL DEFAULT 0,
  `decimal_places` smallint(5) UNSIGNED NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `holder_type`, `holder_id`, `name`, `slug`, `uuid`, `description`, `meta`, `balance`, `decimal_places`, `created_at`, `updated_at`) VALUES
(20, 'App\\Models\\User', 2, 'Default Wallet', 'default', '3bd6df35-ff52-4cca-95ec-7a57eee4fcb7', NULL, '[]', '0', 2, '2022-06-03 15:28:52', '2022-06-03 16:09:27'),
(21, 'App\\Models\\User', 3, 'Default Wallet', 'default', '04e54b14-f815-40ea-826f-e28bd2c9b329', NULL, '[]', '4554', 2, '2022-06-03 15:33:22', '2022-06-03 16:09:27'),
(22, 'App\\Models\\User', 9, 'Default Wallet', 'default', '7a335fcc-c0e7-421a-8ee4-876f0124dc18', NULL, '[]', '292', 2, '2022-06-03 16:09:27', '2022-06-03 16:09:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auctions`
--
ALTER TABLE `auctions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auctions_seller_id_foreign` (`seller_id`),
  ADD KEY `auctions_category_id_foreign` (`category_id`),
  ADD KEY `auctions_vehicle_type_id_foreign` (`vehicle_type_id`),
  ADD KEY `auctions_city_id_foreign` (`city_id`);

--
-- Indexes for table `auction_images`
--
ALTER TABLE `auction_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auction_images_auction_id_foreign` (`auction_id`);

--
-- Indexes for table `biddings`
--
ALTER TABLE `biddings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biddings_user_id_foreign` (`user_id`),
  ADD KEY `biddings_auction_id_foreign` (`auction_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deliveries_city_id_foreign` (`city_id`),
  ADD KEY `deliveries_auction_id_foreign` (`auction_id`),
  ADD KEY `deliveries_payer_id_foreign` (`payer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

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
  ADD KEY `notifications_from_user_id_foreign` (`from_user_id`),
  ADD KEY `notifications_to_user_id_foreign` (`to_user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_delivery_id_foreign` (`delivery_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `policies`
--
ALTER TABLE `policies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `policies_user_id_foreign` (`user_id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transactions_uuid_unique` (`uuid`),
  ADD KEY `transactions_payable_type_payable_id_index` (`payable_type`,`payable_id`),
  ADD KEY `payable_type_payable_id_ind` (`payable_type`,`payable_id`),
  ADD KEY `payable_type_ind` (`payable_type`,`payable_id`,`type`),
  ADD KEY `payable_confirmed_ind` (`payable_type`,`payable_id`,`confirmed`),
  ADD KEY `payable_type_confirmed_ind` (`payable_type`,`payable_id`,`type`,`confirmed`),
  ADD KEY `transactions_type_index` (`type`),
  ADD KEY `transactions_wallet_id_foreign` (`wallet_id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `transfers_uuid_unique` (`uuid`),
  ADD KEY `transfers_from_type_from_id_index` (`from_type`,`from_id`),
  ADD KEY `transfers_to_type_to_id_index` (`to_type`,`to_id`),
  ADD KEY `transfers_deposit_id_foreign` (`deposit_id`),
  ADD KEY `transfers_withdraw_id_foreign` (`withdraw_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wallets_holder_type_holder_id_slug_unique` (`holder_type`,`holder_id`,`slug`),
  ADD UNIQUE KEY `wallets_uuid_unique` (`uuid`),
  ADD KEY `wallets_holder_type_holder_id_index` (`holder_type`,`holder_id`),
  ADD KEY `wallets_slug_index` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auctions`
--
ALTER TABLE `auctions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `auction_images`
--
ALTER TABLE `auction_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `biddings`
--
ALTER TABLE `biddings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `deliveries`
--
ALTER TABLE `deliveries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policies`
--
ALTER TABLE `policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auctions`
--
ALTER TABLE `auctions`
  ADD CONSTRAINT `auctions_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `auctions_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `auctions_seller_id_foreign` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `auctions_vehicle_type_id_foreign` FOREIGN KEY (`vehicle_type_id`) REFERENCES `vehicle_types` (`id`);

--
-- Constraints for table `auction_images`
--
ALTER TABLE `auction_images`
  ADD CONSTRAINT `auction_images_auction_id_foreign` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `biddings`
--
ALTER TABLE `biddings`
  ADD CONSTRAINT `biddings_auction_id_foreign` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `biddings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `deliveries`
--
ALTER TABLE `deliveries`
  ADD CONSTRAINT `deliveries_auction_id_foreign` FOREIGN KEY (`auction_id`) REFERENCES `auctions` (`id`),
  ADD CONSTRAINT `deliveries_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`),
  ADD CONSTRAINT `deliveries_payer_id_foreign` FOREIGN KEY (`payer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_from_user_id_foreign` FOREIGN KEY (`from_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_to_user_id_foreign` FOREIGN KEY (`to_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_delivery_id_foreign` FOREIGN KEY (`delivery_id`) REFERENCES `deliveries` (`id`);

--
-- Constraints for table `policies`
--
ALTER TABLE `policies`
  ADD CONSTRAINT `policies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_wallet_id_foreign` FOREIGN KEY (`wallet_id`) REFERENCES `wallets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transfers`
--
ALTER TABLE `transfers`
  ADD CONSTRAINT `transfers_deposit_id_foreign` FOREIGN KEY (`deposit_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transfers_withdraw_id_foreign` FOREIGN KEY (`withdraw_id`) REFERENCES `transactions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD CONSTRAINT `user_profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
