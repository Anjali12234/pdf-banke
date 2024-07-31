-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 07:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdf_banke`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `english_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'फार्म प्रबन्धक', 'फार्म प्रबन्धक', '2024-07-31 11:37:44', '2024-07-31 11:37:44', NULL),
(2, 'अधिकृत छैटौ', 'अधिकृत छैटौ', '2024-07-31 11:39:47', '2024-07-31 11:39:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `title`, `english_title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'फार्म प्रबन्धक', 'फार्म प्रबन्धक', '2024-07-31 11:37:56', '2024-07-31 11:37:56', NULL),
(2, 'अधिकृत छैटौ', 'अधिकृत छैटौ', '2024-07-31 11:40:05', '2024-07-31 11:40:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `document_categories`
--

CREATE TABLE `document_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `document_lists`
--

CREATE TABLE `document_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `document_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publisher` varchar(255) NOT NULL,
  `english_publisher` varchar(255) DEFAULT NULL,
  `publish_date` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download_categories`
--

CREATE TABLE `download_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `download_lists`
--

CREATE TABLE `download_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `download_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publisher` varchar(255) NOT NULL,
  `english_publisher` varchar(255) DEFAULT NULL,
  `publish_date` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `department_id` bigint(20) UNSIGNED DEFAULT NULL,
  `designation_id` bigint(20) UNSIGNED DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `image`, `department_id`, `designation_id`, `email`, `phone`, `address`, `position`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'डा. सुमन खनाल', 'employee/DMxeXMiD5Ym15RfzAICrnI4EuEr6VKKQNGAFz0PE.jpg', 1, 1, 'sumamkhanal07@gmail.com', '9858024218', 'asdfg', '1', NULL, '2024-07-31 11:39:22', '2024-07-31 11:39:22'),
(2, 'कर्मध्वज छत्याल', 'employee/jqe81hdv9fnxbR1jQmJhrJhgKIEy0xZJskwEVc5u.jpg', 2, 2, 'kdchhatyal30@gmail.com', '9858034218', 'asdf', '2', NULL, '2024-07-31 11:42:11', '2024-07-31 11:42:11');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` longtext NOT NULL,
  `answer` longtext NOT NULL,
  `english_question` longtext NOT NULL,
  `english_answer` longtext NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_categories`
--

CREATE TABLE `farmer_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `farmer_lists`
--

CREATE TABLE `farmer_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `farmer_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publisher` varchar(255) NOT NULL,
  `english_publisher` varchar(255) DEFAULT NULL,
  `publish_date` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) DEFAULT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `file_name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `extension` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `model_type`, `model_id`, `file_name`, `file`, `size`, `extension`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Photo', 1, 'Untitled.jpg', 'photo/trainings_conducted_by_poultry_development_farm/08PhguAbW24ZEvAHAsvA28VGck0y87oHcWxMT5Dd.jpg', '1720298', 'jpg', NULL, '2024-07-31 10:31:34', '2024-07-31 10:31:34'),
(2, 'App\\Models\\Photo', 2, 'BysrxeVcAFUIIhPtYEYncAavPy0zVHwdiFmMUO4S.jpg', 'photo/produced_chickens/YImcqoXTBY1qLi7ezfLyyp1d16xJ5DnYX0mEkSOA.jpg', '60487', 'jpg', NULL, '2024-07-31 11:27:54', '2024-07-31 11:27:54'),
(3, 'App\\Models\\Photo', 2, 'jHXz8abyj9O2X6ssG0t5X8RZiAxwjst2bIbjMzXU.png', 'photo/produced_chickens/RVkYZW3gA6d0SIEuhM7PbFwAKLw2iPLsh4IuWVc6.png', '796808', 'png', NULL, '2024-07-31 11:27:54', '2024-07-31 11:27:54'),
(4, 'App\\Models\\Photo', 3, 'HSQucEf7JR50VtfzvMjacNdbGZN9qGufJbSJFLfX.png', 'photo/poultry_development_farm_hatchery/15MxsoDEvXwvyiQSVFVWaTyIId16xJNIGtA9qe75.png', '506434', 'png', NULL, '2024-07-31 11:29:23', '2024-07-31 11:29:23'),
(5, 'App\\Models\\Photo', 3, 'vcegjf2arCe9tjNKSiitQ7297HxZLcRhxoHHsrnd.png', 'photo/poultry_development_farm_hatchery/maFdcIkuYMbcGjhl9QcTmXrnoeb6BnnJSwJaWyvK.png', '586283', 'png', NULL, '2024-07-31 11:29:23', '2024-07-31 11:29:23'),
(6, 'App\\Models\\Photo', 3, 'x1JaVfAxDp9h8rgbhUFVcdut0SQ0UJZAQ1xN6joQ.jpg', 'photo/poultry_development_farm_hatchery/ELnghp8Xgklf62lCt92z76gMq8GcBMYIbkd97Kw5.jpg', '52180', 'jpg', NULL, '2024-07-31 11:29:23', '2024-07-31 11:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `title`, `english_title`, `url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'कृषि, खाद्य प्रविधि तथा भूमि व्यवस्था मन्त्रालय,लुम्बिनी प्रदेश', 'कृषि, खाद्य प्रविधि तथा भूमि व्यवस्था मन्त्रालय,लुम्बिनी प्रदेश', 'https://molmac.lumbini.gov.np/', NULL, '2024-07-31 11:58:42', '2024-07-31 11:58:42');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_16_165859_create_sliders_table', 1),
(6, '2023_06_17_100014_create_faqs_table', 1),
(7, '2023_06_18_104556_create_contact_messages_table', 1),
(8, '2023_06_19_043358_create_departments_table', 1),
(9, '2023_06_19_043723_create_designations_table', 1),
(10, '2023_06_19_043942_create_employees_table', 1),
(11, '2023_06_19_101441_create_files_table', 1),
(12, '2023_06_20_063936_create_photos_table', 1),
(13, '2023_06_20_170044_create_office_settings_table', 1),
(14, '2023_06_25_050254_create_document_categories_table', 1),
(15, '2023_06_25_164228_create_document_lists_table', 1),
(16, '2023_06_27_100207_create_office_details_table', 1),
(17, '2023_06_30_043312_create_news_categories_table', 1),
(18, '2023_06_30_044628_create_news_lists_table', 1),
(19, '2023_07_02_085206_create_farmer_categories_table', 1),
(20, '2023_07_02_093806_create_farmer_lists_table', 1),
(21, '2023_07_04_072025_create_download_categories_table', 1),
(22, '2023_07_04_073016_create_download_lists_table', 1),
(23, '2023_07_08_062421_add_column_to_table', 1),
(24, '2023_07_08_070017_add_to_designations_table', 1),
(25, '2023_07_08_070417_add_to_document_lists_table', 2),
(26, '2023_07_08_070622_add_to_news_lists_table', 2),
(27, '2023_07_08_070728_add_to_farmer_lists_table', 2),
(28, '2023_07_08_071254_add_to_download_categories_table', 2),
(29, '2023_07_08_071416_add_to_download_lists_table', 2),
(30, '2023_07_16_115157_create_office_headers_table', 2),
(31, '2024_07_31_173137_create_links_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_lists`
--

CREATE TABLE `news_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `news_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `publisher` varchar(255) NOT NULL,
  `english_publisher` varchar(255) DEFAULT NULL,
  `publish_date` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office_details`
--

CREATE TABLE `office_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `english_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `position` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `english_description` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_details`
--

INSERT INTO `office_details` (`id`, `title`, `type`, `english_title`, `slug`, `position`, `description`, `english_description`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'परिचय', 'introduction', 'Introduction', 'introduction', 1, '<p><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: var(--bs-body-text-align); display: inline !important;\">नेपालको\r\n अर्थतन्त्रमा कृषि क्षेत्रको भूमिका महत्वपूर्ण रहेको छ। देशको कुल \r\nग्राहस्थ उत्पादनमा एक तिहाइ भन्दा बढी योगदान पुर्याउदै आएको र ६५ प्रतिशत\r\n भन्दा बढी जनसंख्या रोजगारी तथा जिबिकाका लागि संलग्न भएको कृषि पेशालाई \r\nव्यबसायीक,प्रतिस्पर्धी,नाफामुलक मर्यादित बनाई कृषि क्षेत्रको दिगो बिकास \r\nबिना सम्बृद्धि सम्भब छैन। बि. स. २०१७ सालमा राजा महेन्द्रले परवानीपुरमा \r\nबेलायत बाट आयात गरिएका करिब १००० New Hampshire जातका कुखुराबाट नेपालकै \r\nपहिलो ह्याचरी उदघाटन गरे पछि शुरु भएको नेपालको पोल्ट्री उद्योगकोले कुल \r\nग्राहस्थ उत्पादनमा करिब ४% योगदान पुर्याउदै आएको छ । आ.ब. २०३४/३५ सालमा \r\nकृषि अनुसन्धान केन्द्र खजुराको एक अंग को रुपमा सुरुवात भै आ.ब. २०३७/३८ \r\nसालमा स्थानीय कुखुराहरुमा उन्नत तथा सुद्ध नस्लका New Hampshire तथा Black\r\n Australop जातका कुखुराहरुको प्रयोग मार्फत नस्ल सुधार गरि स्थानीय \r\nकुखुराहरुको उत्पादन तथा उत्पादकत्व बृधि गर्ने, साबिकको मध्य तथा \r\nसुदूरपश्चिम क्षेत्रका हिमाली तथा पहाडी जिल्लाका किसानहरुलाई हुर्काइएका \r\nउन्नत जातका ग्रामिण कुखुराका चल्ला उपलब्ध गराउने तथा आम किसानहरुलाई \r\nकुखुरा पालन व्यवसायमा आवस्यक प्राबिधिक सहयोग उपलब्ध गराउने उदेश्य सहित \r\nतत्कालिन पशु सेवा बिभाग अन्तर्गत रहने गरि कुखुरा बिकास फार्म खजुरा \r\nबाँकेको स्थापना भएको हो।संघिय संरचनामा देश गै सकेपछि कुखुरा बिकास फार्म \r\nखजुरा बाँके हाल लुम्बिनी प्रदेश कृषि, खाद्य प्रविधि तथा भूमि व्यवस्था \r\nमन्त्रालय अन्तर्गत रहेको छ।</span></p>', '<p>The role of agriculture sector in Nepal\'s economy is important. Development is not possible without the sustainable development of the agricultural sector by making the agricultural profession, which contributes more than one-third to the country\'s total domestic product and employs more than 65 percent of the population for employment and livelihood, making it professional, competitive and profitable. b. S. In the year 2017, King Mahendra opened Nepal\'s first hatchery with about 1000 New Hampshire chickens imported from Britain in Parwanipur. The poultry industry of Nepal, which started after that, has been contributing about 4% to the total domestic production. A.B. In the year 2034/35, the Agricultural Research Center was started as a part of Khajura. In the year 2037/38, to increase the production and productivity of local chickens by improving the breed through the use of advanced and pure breed New Hampshire and Black Australop chickens in local chickens, to provide rural chicken chicks of advanced breed raised to farmers in the Himalayan and hilly districts of the central and far western region of Sabik and Poultry Development Farm Khajura Banke was established under the then Animal Services Department with the aim of providing necessary technical support to farmers in the poultry farming business. Poultry Development Farm Khajura Banke is currently under the Ministry of Agriculture, Food Technology and Land Management of Lumbini Province after the demerger of the country in the federal structure. is<br></p>', 1, NULL, '2024-07-31 11:26:17', '2024-07-31 11:26:17'),
(2, 'उदेश्य', 'purpose', 'Purpose', 'purpose', NULL, '<ul><li><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; display: inline !important;\">सहकारीको\r\n सिद्धान्त र मूल्यहरूको प्रवर्द्वन गर्दै सहकारीमा आधारित उत्पादन, उद्यम र\r\n सेवा व्यवसायको विकास र विस्तार गरी प्रदेशको दिगो र समतामूलक आर्थिक \r\nसामाजिक विकासमा योगदान पुर्‍याउने । </span></li><li><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; display: inline !important;\">कृषि\r\n क्षेत्रमा आधुनिक प्रविधिको प्रयोग गर्दै प्रतिष्पर्धात्मक क्षमता हासिल \r\nगरी उत्पादन र उत्पादकत्व अभिवृद्धि गर्नुका साथै कृषिजन्य उद्योगलाई \r\nप्रवर्द्वन गर्ने । </span></li><li><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; display: inline !important;\">पशुपछिं\r\n पालनमा प्रविधिको प्रयोगलाई प्रोत्साहन गर्दै व्यवसायिक, प्रतिस्पर्धी एवं\r\n स्वस्थ पशुपछिं उत्पादनको सुनिश्चितता एवं पशुपन्छीजन्य उत्पादनमा \r\nआत्मनिर्भरता हासिल गरी यस क्षेत्रलाई आय आर्जनका साथै रोजगारीको माध्यमका \r\nरुपमा विकास गर्ने ।</span></li></ul><p></p>', '<ul><li><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; display: inline !important;\">सहकारीको\r\n सिद्धान्त र मूल्यहरूको प्रवर्द्वन गर्दै सहकारीमा आधारित उत्पादन, उद्यम र\r\n सेवा व्यवसायको विकास र विस्तार गरी प्रदेशको दिगो र समतामूलक आर्थिक \r\nसामाजिक विकासमा योगदान पुर्‍याउने । </span></li><li><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; display: inline !important;\">कृषि\r\n क्षेत्रमा आधुनिक प्रविधिको प्रयोग गर्दै प्रतिष्पर्धात्मक क्षमता हासिल \r\nगरी उत्पादन र उत्पादकत्व अभिवृद्धि गर्नुका साथै कृषिजन्य उद्योगलाई \r\nप्रवर्द्वन गर्ने । </span></li><li><span style=\"color: rgb(51, 51, 51); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; display: inline !important;\">पशुपछिं\r\n पालनमा प्रविधिको प्रयोगलाई प्रोत्साहन गर्दै व्यवसायिक, प्रतिस्पर्धी एवं\r\n स्वस्थ पशुपछिं उत्पादनको सुनिश्चितता एवं पशुपन्छीजन्य उत्पादनमा \r\nआत्मनिर्भरता हासिल गरी यस क्षेत्रलाई आय आर्जनका साथै रोजगारीको माध्यमका \r\nरुपमा विकास गर्ने ।</span></li></ul><p></p>', 1, NULL, '2024-07-31 11:35:26', '2024-07-31 11:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `office_headers`
--

CREATE TABLE `office_headers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `font_color` varchar(255) NOT NULL,
  `font_size` varchar(255) NOT NULL,
  `font_family` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_headers`
--

INSERT INTO `office_headers` (`id`, `title`, `english_title`, `position`, `font_color`, `font_size`, `font_family`, `created_at`, `updated_at`) VALUES
(1, 'लुम्बिनी प्रदेश सरकार', 'Lumbini State Govt', '1', '#ff0000', '16', 'Times New Roman', '2024-07-31 10:44:01', '2024-07-31 10:45:14'),
(2, 'कृषि तथा भूमि व्यवस्था मन्त्रालय', 'Ministry of Agriculture and Land Management', '2', '#ff0000', '16', 'Times New Roman', '2024-07-31 10:46:39', '2024-07-31 10:48:20'),
(3, 'पशुपन्छी तथा मत्स्य विकास निर्देशनालय ', 'Directorate of Livestock and Fisheries Development', '3', '#ff0000', '16', 'Times New Roman', '2024-07-31 10:57:18', '2024-07-31 10:57:18'),
(4, 'कुखुरा बिकास फार्म ', 'Poultry Development Farm', '4', '#ff0000', '18', 'Times New Roman', '2024-07-31 10:58:04', '2024-07-31 10:58:04'),
(5, 'खजुरा, बाँके', 'Khajura, Banke', '5', '#ff0000', '16', 'Times New Roman', '2024-07-31 10:58:48', '2024-07-31 10:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `office_settings`
--

CREATE TABLE `office_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `office_name` varchar(255) NOT NULL,
  `office_english_name` varchar(255) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `office_english_address` varchar(255) DEFAULT NULL,
  `office_phone` varchar(255) DEFAULT NULL,
  `office_email` varchar(255) DEFAULT NULL,
  `office_cover_photo` varchar(255) DEFAULT NULL,
  `office_logo` varchar(255) DEFAULT NULL,
  `flag` varchar(255) DEFAULT NULL,
  `office_ad_photo` varchar(255) DEFAULT NULL,
  `office_chief_id` bigint(20) UNSIGNED DEFAULT NULL,
  `information_officer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `map_url` longtext DEFAULT NULL,
  `facebook_url` longtext DEFAULT NULL,
  `twitter_url` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_settings`
--

INSERT INTO `office_settings` (`id`, `office_name`, `office_english_name`, `office_address`, `office_english_address`, `office_phone`, `office_email`, `office_cover_photo`, `office_logo`, `flag`, `office_ad_photo`, `office_chief_id`, `information_officer_id`, `map_url`, `facebook_url`, `twitter_url`, `created_at`, `updated_at`) VALUES
(1, 'कुखुरा बिकास फार्म', 'Poultry Development Farm', 'खजुरा, बाँके', 'Khajura, Banke', '०८१-५६०२०१', 'pdfkhajura@gmail.com', 'cover/POfN8A5b8Jm8UqNiK8ShagmkdxjbpJO63pW5iAph.jpg', 'setting/HCwDTSw24IYJUn6QOxn8aFeY8kIJiw0z7tyNCFCN.png', 'setting/Hixt48BKTtKEFRQ0gPI1z7M43l1jfL2fZh4RlFDP.gif', 'office/1W498Lc3L17lP15iYDmCH5PS9gz9UgvI50PZJ6JV.jpg', 1, 2, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112658.59994541685!2d81.54704612857135!3d28.067807898785176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3998675a30f8e175%3A0x93c04013828c9891!2sNepalgunj!5e0!3m2!1sen!2snp!4v1722444392841!5m2!1sen!2snp', NULL, NULL, '2024-07-31 10:37:21', '2024-07-31 11:42:45');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `title`, `english_title`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'कुखुरा बिकास फार्म द्वरा संचलित तालिमहरु', 'Trainings conducted by Poultry Development Farm', 'trainings-conducted-by-poultry-development-farm', NULL, '2024-07-31 10:31:34', '2024-07-31 10:31:34'),
(2, 'उत्पादन गरेका कुखुराहरु', 'Produced chickens', 'produced-chickens', NULL, '2024-07-31 11:27:54', '2024-07-31 11:27:54'),
(3, 'कुखुरा बिकास फार्म ह्याचरी', 'Poultry Development Farm Hatchery', 'poultry-development-farm-hatchery', NULL, '2024-07-31 11:29:23', '2024-07-31 11:29:23');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `english_title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `english_title`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '७ दिने कुखुरा पालन तथा ह्याचरी व्यवस्तापन तालिम', '7 Days Poultry and Hatchery Management Training', 'slider/Ymcx1tBjbNi6dnqZKP25jKA3vGimcsBn60xJH0OF.jpg', NULL, '2024-07-31 11:00:02', '2024-07-31 11:00:02'),
(2, 'खजुरा साकिनी क्रस जातका कुखुराहरु', 'Khajura Sakini cross breed chickens', 'slider/lba4vMFm6IDAxuUO3gFtH917tm43ODPyo2C8Lyqy.jpg', NULL, '2024-07-31 11:00:38', '2024-07-31 11:00:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', NULL, '$2y$10$Jeo6Ij5g58Ot/mQXodl1iuhoeDDMgWHf5jrGQxeY9YZLCkhDRiE1K', NULL, '2024-07-31 10:22:06', '2024-07-31 10:22:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_categories`
--
ALTER TABLE `document_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_lists`
--
ALTER TABLE `document_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `document_lists_document_category_id_foreign` (`document_category_id`);

--
-- Indexes for table `download_categories`
--
ALTER TABLE `download_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_lists`
--
ALTER TABLE `download_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `download_lists_download_category_id_foreign` (`download_category_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_department_id_foreign` (`department_id`),
  ADD KEY `employees_designation_id_foreign` (`designation_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_categories`
--
ALTER TABLE `farmer_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `farmer_lists`
--
ALTER TABLE `farmer_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farmer_lists_farmer_category_id_foreign` (`farmer_category_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_lists`
--
ALTER TABLE `news_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_lists_news_category_id_foreign` (`news_category_id`);

--
-- Indexes for table `office_details`
--
ALTER TABLE `office_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_headers`
--
ALTER TABLE `office_headers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_settings`
--
ALTER TABLE `office_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_settings_office_chief_id_foreign` (`office_chief_id`),
  ADD KEY `office_settings_information_officer_id_foreign` (`information_officer_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `photos_slug_unique` (`slug`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `document_categories`
--
ALTER TABLE `document_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `document_lists`
--
ALTER TABLE `document_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download_categories`
--
ALTER TABLE `download_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `download_lists`
--
ALTER TABLE `download_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer_categories`
--
ALTER TABLE `farmer_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farmer_lists`
--
ALTER TABLE `farmer_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_lists`
--
ALTER TABLE `news_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office_details`
--
ALTER TABLE `office_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `office_headers`
--
ALTER TABLE `office_headers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `office_settings`
--
ALTER TABLE `office_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `document_lists`
--
ALTER TABLE `document_lists`
  ADD CONSTRAINT `document_lists_document_category_id_foreign` FOREIGN KEY (`document_category_id`) REFERENCES `document_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `download_lists`
--
ALTER TABLE `download_lists`
  ADD CONSTRAINT `download_lists_download_category_id_foreign` FOREIGN KEY (`download_category_id`) REFERENCES `download_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employees_designation_id_foreign` FOREIGN KEY (`designation_id`) REFERENCES `designations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `farmer_lists`
--
ALTER TABLE `farmer_lists`
  ADD CONSTRAINT `farmer_lists_farmer_category_id_foreign` FOREIGN KEY (`farmer_category_id`) REFERENCES `farmer_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `news_lists`
--
ALTER TABLE `news_lists`
  ADD CONSTRAINT `news_lists_news_category_id_foreign` FOREIGN KEY (`news_category_id`) REFERENCES `news_categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `office_settings`
--
ALTER TABLE `office_settings`
  ADD CONSTRAINT `office_settings_information_officer_id_foreign` FOREIGN KEY (`information_officer_id`) REFERENCES `employees` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `office_settings_office_chief_id_foreign` FOREIGN KEY (`office_chief_id`) REFERENCES `employees` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
