-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 16, 2022 at 03:06 PM
-- Server version: 10.3.37-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayaantec_porto`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `count` bigint(20) NOT NULL,
  `icon` varchar(255) NOT NULL DEFAULT 'fa fa-home',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`id`, `name`, `count`, `icon`, `created_at`, `updated_at`) VALUES
(3, 'Follower In Social Media', 46000, 'fa fa-check-double', '2022-10-02 04:40:16', '2022-10-11 12:57:09'),
(4, 'Project Completed', 500, 'fa fa-dna', '2022-10-02 04:41:15', '2022-10-11 12:56:21'),
(5, 'Business Start-up', 3, 'fa fa-crown', '2022-10-02 04:43:57', '2022-10-11 12:55:44'),
(7, 'Social Activist', 500, 'fa fa-users', '2022-10-06 00:40:41', '2022-10-11 12:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `banner_sliders`
--

CREATE TABLE `banner_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_sliders`
--

INSERT INTO `banner_sliders` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(18, 'uploads/banner/slider/1668587396.webp', '2022-10-20 04:25:50', '2022-11-16 02:29:56'),
(19, 'uploads/banner/slider/1668587358.jpg', '2022-10-20 04:26:50', '2022-11-16 02:29:18'),
(20, 'uploads/banner/slider/1668587429.jpg', '2022-11-16 02:30:29', '2022-11-16 02:30:29'),
(21, 'uploads/banner/slider/1668587481.webp', '2022-11-16 02:31:22', '2022-11-16 02:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `banner_titles`
--

CREATE TABLE `banner_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_titles`
--

INSERT INTO `banner_titles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(4, 'entrepreneur', '2022-10-05 05:28:46', '2022-10-19 07:15:29'),
(5, 'Engineer', '2022-10-05 05:57:41', '2022-10-19 07:14:48'),
(6, 'Lawyer', '2022-10-06 00:37:56', '2022-10-19 07:14:40'),
(7, 'Doctor', '2022-10-19 06:38:05', '2022-10-19 07:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tage` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tage`)),
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `photo` longtext DEFAULT NULL,
  `link` longtext DEFAULT NULL,
  `type` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `user_id`, `tage`, `name`, `description`, `photo`, `link`, `type`, `created_at`, `updated_at`) VALUES
(15, 4, '[\"Music,Cheers\"]', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', 'Lorem Ipsum is simply dummied text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'uploads/blog/1666255720.jpg', NULL, 1, '2022-10-20 02:48:40', '2022-10-20 02:48:40'),
(16, 4, '[\"Lorem Ipsum is simply\"]', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'uploads/blog/1666866646.jpg', NULL, 1, '2022-10-27 04:30:46', '2022-10-27 04:30:46'),
(19, 4, '[\"Lorem Ipsum is simply\"]', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'uploads/blog/1666868929.jpg', NULL, 1, '2022-10-27 05:08:49', '2022-10-27 05:08:49'),
(20, 4, '[\"Lorem Ipsum is simply\"]', 'Lorem Ipsum is simply', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'uploads/blog/1666869475.jpg', NULL, 1, '2022-10-27 05:17:55', '2022-10-27 05:17:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Doctor', 'doctor', 1, '2022-10-02 23:53:35', '2022-11-16 01:53:57'),
(4, 'Engineer', 'engineer', 1, '2022-10-02 23:54:04', '2022-11-16 01:54:09'),
(5, 'Lawyer', 'lawyer', 1, '2022-10-06 00:55:46', '2022-11-16 01:54:23'),
(6, 'Business Man', 'business-man', 1, '2022-10-19 06:42:24', '2022-10-19 06:42:24'),
(7, 'Social Influencer', 'social-influencer', 1, '2022-10-19 06:45:43', '2022-11-16 01:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact__messages`
--

CREATE TABLE `contact__messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `view_status` varchar(255) NOT NULL DEFAULT 'unread',
  `status` varchar(255) NOT NULL DEFAULT 'normal',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact__messages`
--

INSERT INTO `contact__messages` (`id`, `name`, `email`, `number`, `subject`, `message`, `view_status`, `status`, `created_at`, `updated_at`) VALUES
(12, 'Lorem Ipsum is simply dummy text', 'lorem@lorem.com', '+8801973198574', 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,', 'read', 'star', '2022-10-09 06:23:58', '2022-10-09 06:27:45'),
(13, 'JP Corsi', 'hi@jpcorsi.com', '+1 754-802-7455', 'Free SEO report', 'Hey its JP, I´d be willing to do a free SEO report on your site. Where do I send it?\r\n\r\nJP Corsi\r\nGoogle Partner\r\njpcorsi.com\r\nclientesilimitados.cl\r\n+1 754-802-7455', 'read', 'normal', '2022-10-10 19:03:54', '2022-10-11 13:28:13'),
(14, 'Marcus Anthony', 'brower.charmain59@gmail.com', '707-765-1266', 'The most advanced AI copywriting tool in the world.', 'Hello,\r\n\r\n I came across this AI Ad tool that\r\ngenerates unique AI ad powered creatives that can generate \r\n14x better conversion rates and give your business an unfair\r\nadvantage with advertising. Over 95% of users improve CTR in \r\ntheir first month using these creatives. Check it out and see what \r\nyou think at: aiAdCreatives.com \r\n\r\nTo Your Success,\r\nMarcus Anthony', 'unread', 'normal', '2022-10-12 12:43:38', NULL),
(15, 'Joanna Edmiston', 'joanna.edmiston22@gmail.com', '925-866-6691', 'I\'ve just discovered the best, most trusted wholesale supplier list on the internet!', 'Are you tired of spending hours researching new product suppliers?\r\n\r\nTrying to figure out whether they are trustworthy?\r\n\r\nAnd worrying about using suppliers that would supply me products which wouldn’t sell well on your website or business?\r\n\r\nWe have pre-vetted 8,000+ suppliers and over 2.5 million products for you already....\r\n\r\n==> https://bit.ly/3Em1ZJY', 'unread', 'normal', '2022-10-12 23:30:07', NULL),
(16, 'Felicitas Humble', 'felicitas.humble@gmail.com', '477 1112', 'Hi, I have a quick question?', 'Hi, I just wanted to find out if you need more prospective clients, I can help you with that, follow the link- https://c2a260xkleq7p3foucu8ay6pem.hop.clickbank.net/?tid=auto', 'unread', 'normal', '2022-10-13 09:22:01', NULL),
(17, 'Isobel Alleyne', 'isobel.alleyne91@gmail.com', '077 3199 4920', 'Hi, I have a question.', 'Hi, Iwant to know if you need more customers to your page? If so follow the link- https://turnkeybuzzz.kartra.com/page/EYP266', 'unread', 'normal', '2022-10-13 11:36:39', NULL),
(18, 'Markus Bavister', 'bavister.markus@msn.com', '(85) 8687-7915', 'PPP loan alternatives for business owners', 'PPP Alternative Funding Options for Business owners is now available\r\n \r\n\r\n\r\n \r\n\r\n\r\nProgram Highlights:\r\n\r\n1. Minimal paperwork for approval\r\n2. Max approval per business $2 Million\r\n\r\nQualification requirement:\r\n1. Minimum Credit Score of 500\r\n2. In business before August 2021\r\n3. 5k Minimum monthly revenue\r\n4. No Open BK\'s\r\n\r\n\r\n \r\nClick Link to Learn More https://ultimatebizhub.com\r\n\r\n\r\n\r\n\r\n\r\nFinancing available as quick as 2 days (Emergency financing available sooner upon request)!\r\nClick https://ultimatebizhub.com to learn more about this program', 'read', 'normal', '2022-10-13 13:32:34', '2022-10-16 05:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE `event_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` char(50) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `home_banners`
--

CREATE TABLE `home_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `added_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_infos`
--

CREATE TABLE `home_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about__top_text` varchar(255) NOT NULL,
  `about__title` varchar(255) NOT NULL,
  `about_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `img` longtext NOT NULL,
  `about_name2` varchar(255) NOT NULL,
  `description2` longtext NOT NULL,
  `img2` longtext NOT NULL,
  `about_name3` varchar(255) NOT NULL,
  `description3` longtext NOT NULL,
  `img3` longtext NOT NULL,
  `over_view_title` varchar(255) NOT NULL,
  `over_view_description` varchar(255) NOT NULL,
  `over_view_pdf` varchar(255) NOT NULL,
  `over_view_Link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metatages`
--

CREATE TABLE `metatages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) NOT NULL,
  `keywords` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`keywords`)),
  `description` longtext NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_09_07_094350_create_social_media_table', 1),
(8, '2022_09_13_075716_create_teams_table', 1),
(9, '2022_09_28_054518_create_services_table', 1),
(10, '2022_09_28_060238_create_resumes_table', 1),
(11, '2022_09_08_043818_create_partners_table', 2),
(12, '2022_09_08_072656_create_home_banners_table', 2),
(13, '2022_09_08_092447_create_we_serves_table', 2),
(14, '2022_09_08_093549_create_testimonials_table', 2),
(15, '2022_09_08_094508_create_home_infos_table', 2),
(16, '2022_09_12_192313_create_sliders_table', 2),
(17, '2022_09_13_092329_create_event_categories_table', 2),
(18, '2022_09_28_072350_create_skills_table', 2),
(19, '2022_09_28_114125_create_categories_table', 2),
(21, '2022_09_29_054912_create_my_portfolios_table', 4),
(22, '2022_09_29_063156_create_blogs_table', 5),
(23, '2022_09_05_060355_create_contact__messages_table', 6),
(24, '2022_09_29_093856_create_achievements_table', 7),
(26, '2022_09_28_124614_create_reviews_table', 8),
(27, '2022_09_06_102924_create_settings_table', 9),
(28, '2022_10_04_041724_create_metatages_table', 9),
(29, '2022_10_05_083119_create_banner_sliders_table', 10),
(30, '2022_10_05_083600_create_banner_titles_table', 10),
(33, '2022_10_06_092941_create_section_settings_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `my_portfolios`
--

CREATE TABLE `my_portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` varchar(255) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `my_portfolios`
--

INSERT INTO `my_portfolios` (`id`, `category_id`, `title`, `description`, `link`, `status`, `image`, `created_at`, `updated_at`) VALUES
(63, 7, 'Motivational  Speaker', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', '/speaker', 1, '1666183768.jpg', '2022-10-19 06:49:28', '2022-10-19 06:49:28'),
(64, 6, 'Business man', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', '/business', 1, '1666183911.jpg', '2022-10-19 06:51:51', '2022-10-19 06:51:51'),
(65, 5, 'Professional', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever', '/professional', 1, '1666183994.jpg', '2022-10-19 06:53:14', '2022-10-19 06:53:14'),
(66, 4, 'Social Activities', 'Social Activities', '/Social  Activities', 1, '1666865841.jpg', '2022-10-27 04:17:21', '2022-10-27 04:17:21'),
(67, 2, 'Doctor', 'Doctor', '/Doctor', 1, 'default.png', '2022-10-27 04:18:37', '2022-11-16 01:53:38');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `added_by` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Off',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `orgamization` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `start_date`, `end_date`, `orgamization`, `experience`, `type`, `created_at`, `updated_at`) VALUES
(9, '2016-10-01', '2021-01-15', 'ATL Hospital', 'Achieving Medical experience', 1, NULL, NULL),
(10, '2022-11-18', '2025-11-14', 'Engineering farm', 'Field experience', 2, NULL, NULL),
(11, '2019-11-16', '2022-11-19', 'Law farm', 'Law related experience', 2, NULL, NULL),
(12, '2021-11-11', '2022-11-30', 'Social influencer', 'Social work', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `review_text` longtext DEFAULT NULL,
  `review_photo` longtext DEFAULT NULL,
  `photo` longtext NOT NULL,
  `type` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `title`, `review_text`, `review_photo`, `photo`, `type`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text', 'adfsasdfasdf', 'uploads/review/scheetshot/1665317958.png', 'uploads/review/1665317958.png', '1', '2022-10-03 06:18:13', '2022-10-09 06:19:18'),
(6, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text', NULL, 'uploads/review/scheetshot/1665317941.png', 'uploads/review/1665317941.png', '1', '2022-10-03 07:03:21', '2022-10-09 06:19:01'),
(7, 'Lorem Ipsum is simply dummy text', 'Lorem Ipsum is simply dummy text', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore.', 'uploads/review/scheetshot/1664802298.png', 'uploads/review/1665317914.png', '2', '2022-10-03 07:04:58', '2022-10-09 06:18:34'),
(8, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore.', NULL, 'uploads/review/1665317896.png', '2', '2022-10-06 06:54:48', '2022-10-09 06:18:16'),
(9, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text', 'Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor incididunt ut labore.', 'uploads/review/scheetshot/1665317864.png', 'uploads/review/1665317864.png', '1', '2022-10-06 06:55:43', '2022-10-09 06:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `section_settings`
--

CREATE TABLE `section_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section_settings`
--

INSERT INTO `section_settings` (`id`, `status`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Banner', NULL, '2022-10-12 04:25:47'),
(2, 1, 'About', NULL, NULL),
(3, 1, 'Skill', NULL, NULL),
(4, 1, 'Achievement', NULL, NULL),
(5, 1, 'Service', NULL, '2022-10-09 06:53:02'),
(6, 2, 'Resume', NULL, '2022-10-12 05:04:15'),
(7, 1, 'Portfolio', NULL, NULL),
(8, 2, 'Review', NULL, '2022-10-13 00:46:08'),
(9, 1, 'Blog', NULL, NULL),
(10, 1, 'Contact', NULL, NULL),
(11, 1, 'Footer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `name`, `description`, `created_at`, `updated_at`) VALUES
(8, 'fa fa-user-cog', 'Software as Service', 'Love to innovate and design software for Marketplace fulfil local needs.', NULL, '2022-10-11 13:01:32'),
(9, 'fa fa-user-tie', 'Inspiring', 'Love and passion to promote positive thoughts through social media.', NULL, '2022-10-11 13:03:27'),
(10, 'fa fa-hands-helping', 'Social Service', 'As people of action Service Above Self for society.', NULL, '2022-10-11 13:06:03');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL DEFAULT 'logo.png',
  `fav_icon` varchar(255) NOT NULL DEFAULT 'fav_icon',
  `cv` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `banner_name` varchar(255) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `banner_description` longtext NOT NULL,
  `banner_photo` longtext NOT NULL,
  `calendly_button_name` varchar(50) NOT NULL DEFAULT 'Connect Me',
  `calendly_code` longtext NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_description` longtext NOT NULL,
  `about_image` varchar(255) NOT NULL,
  `meta_author` varchar(255) NOT NULL,
  `meta_keywords` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`meta_keywords`)),
  `meta_description` longtext NOT NULL,
  `meta_photo` varchar(255) NOT NULL,
  `contact_info` varchar(255) NOT NULL,
  `copyright` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `logo`, `fav_icon`, `cv`, `number`, `email`, `address`, `name`, `banner_name`, `banner_title`, `banner_description`, `banner_photo`, `calendly_button_name`, `calendly_code`, `about_title`, `about_description`, `about_image`, `meta_author`, `meta_keywords`, `meta_description`, `meta_photo`, `contact_info`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '/uploads/setting/logo/1666261073.png', '/uploads/setting/logo/1666266941.png', 'uploads/cv/porto-cv.pdf', 'demo@demo.com', 'connect@ayaantech.com', 'NIketon, Gulshan-1, Dhaka', 'ATL Porto', 'Ayaan Ayaan', 'web Developer', 'Entrepreneur I Doctor | Engineer', 'uploads/banner/20221004104127.png', 'Connect Me', '<script>You can add Your Calendly credentials</script>', 'Entrepreneur I Inspirer', 'An innovator for innovation in the digital industry. Taking up the organization as scalable business process. Experienced Country Director with a demonstrated history of working in the Global marketing and the Design communication industry. Skilled in Negotiation, skilled in Logistics management, Corporate Social Responsibility, Operations Management. Strong community and social services professional with a Master of Business Administration (M.B.A.)\r\n\r\nAn innovator for innovation in the digital industry. Taking up the organization as scalable business process. Experienced Country Director with a demonstrated history of working in the Global marketing and the Design communication industry. Skilled in Negotiation, skilled in Logistics management, Corporate Social Responsibility, Operations Management. Strong community and social services professional with a Master of Business Administration (M.B.A.)', 'uploads/about/1666185137.jpg', 'Ayaan Tech Limited', '[\"Portfolio\",\"website\",\"ATL-Porto\",\"Porto\",\"CodeCanyon.net\"]', 'This is a personal portfolio website.', 'uploads/meta/1666266075.png', 'Don\'t Hesitate To Contact me', 'Copyright, All Rights Reserved', NULL, '2022-11-14 04:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `percentage` varchar(255) NOT NULL,
  `color_dark` varchar(255) NOT NULL DEFAULT '#00c4ff',
  `color_light` varchar(255) NOT NULL DEFAULT 'black',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `percentage`, `color_dark`, `color_light`, `created_at`, `updated_at`) VALUES
(2, 'Software proficiency', '80', '#00c4ff', 'black', '2022-10-02 04:25:17', '2022-10-11 12:54:58'),
(3, 'Stress Management', '80', '#00c4ff', 'black', '2022-10-02 04:25:45', '2022-10-11 12:54:16'),
(4, 'Leadership', '90', '#00c4ff', 'black', '2022-10-02 04:26:10', '2022-10-11 12:53:13'),
(5, 'Visionary', '90', '#00c4ff', 'black', '2022-10-02 04:26:50', '2022-10-11 12:51:43'),
(6, 'Communication', '95', '#006d8f', '#bd0000', '2022-10-02 04:27:49', '2022-10-11 12:50:45'),
(7, 'Motivational Speaker', '90', '#bee0ab', 'linear-gradient(to top, #192c0e 0%, #4ac900 100%)', '2022-10-06 05:25:21', '2022-10-11 12:49:54'),
(9, 'Ability to Inspire Others', '90', '#0d1cf8', '#89b073', '2022-10-06 06:10:58', '2022-10-11 12:51:08'),
(10, 'Positive Thinker', '99', '#00c4ff', 'black', '2022-10-09 06:09:05', '2022-10-16 05:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(255) NOT NULL,
  `social_name` varchar(255) NOT NULL,
  `link` longtext DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `icon`, `social_name`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fab fa-facebook-f', 'Facebook', 'https://www.facebook.com/MasudHossenInspirer', 'On', NULL, '2022-10-11 12:41:48'),
(2, 'fab fa-twitter', 'Twitter', '#', 'Off', NULL, '2022-10-11 12:41:52'),
(3, 'fab fa-linkedin', 'LinkedIn', 'https://bd.linkedin.com/in/masud-hossen', 'On', NULL, '2022-10-11 12:43:12'),
(4, 'fab fa-instagram', 'Instagram', '#', 'On', NULL, '2022-10-09 06:54:51'),
(5, 'fab fa-youtube', 'YouTube', '#', 'On', NULL, '2022-10-09 06:54:32'),
(6, 'fab fa-pinterest', 'Pinterest', '#', 'Off', NULL, '2022-10-11 12:43:21');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `added_by` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Off',
  `img` varchar(255) NOT NULL DEFAULT 'upload/about/default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `ttile` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'avata.png',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin@gmail.com', NULL, '$2y$10$xcGrz2bBXsTFalqz4qTGVO0X53hYZZW7fIEizOLmxW4lfAnVMEJ/u', 'admin20221013051604.png', NULL, NULL, '2022-10-19 05:40:18');

-- --------------------------------------------------------

--
-- Table structure for table `we_serves`
--

CREATE TABLE `we_serves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cateogry` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `offer` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`offer`)),
  `img` varchar(255) NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_sliders`
--
ALTER TABLE `banner_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_titles`
--
ALTER TABLE `banner_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contact__messages`
--
ALTER TABLE `contact__messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_categories`
--
ALTER TABLE `event_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_banners`
--
ALTER TABLE `home_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_infos`
--
ALTER TABLE `home_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metatages`
--
ALTER TABLE `metatages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_portfolios`
--
ALTER TABLE `my_portfolios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `my_portfolios_category_id_foreign` (`category_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_settings`
--
ALTER TABLE `section_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `we_serves`
--
ALTER TABLE `we_serves`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banner_sliders`
--
ALTER TABLE `banner_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `banner_titles`
--
ALTER TABLE `banner_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact__messages`
--
ALTER TABLE `contact__messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `event_categories`
--
ALTER TABLE `event_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_banners`
--
ALTER TABLE `home_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_infos`
--
ALTER TABLE `home_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metatages`
--
ALTER TABLE `metatages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `my_portfolios`
--
ALTER TABLE `my_portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `section_settings`
--
ALTER TABLE `section_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `we_serves`
--
ALTER TABLE `we_serves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `my_portfolios`
--
ALTER TABLE `my_portfolios`
  ADD CONSTRAINT `my_portfolios_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
