-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3317
-- Generation Time: Feb 05, 2025 at 05:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpclass11_12_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `description`) VALUES
(6, '<p>\"Jongdengnews\" គឺជាអំឡុងពេលពីរ។ ដោយប្រើប្រាស់ជំនួយនូវប្រទេសកម្ពុជា និងពិភពលោកពីប្រទេសនៅប្រទេសដែលមានប្រសិទ្ធិភាព។ គេហទំព័រនេះត្រូវបានការសម្រាប់ប្រទេសកម្ពុជា និងសម្រាប់ទំព័រទាំងឡាយទៀត។ រីឯព័ត៌មានពីប្រទេសកម្ពុជា និងប្រទេសផ្សេងទៀតទៀតអាចទាញយកនៅទីនេះ។ សូមស្វាគមន៍មកកាន់ Jongdengnews ដើម្បីរកព័ត៌មានដែលបានបញ្ចូលឡើងថ្មីៗបាន។ ជាមួយ Jongdengnews អ្នកអាចរកឃើញបច្ចេកវិទ្យាចរណ៍សម្រាប់ធ្វើឱ្យសមាជិកនៅក្នុងប្រទេសរបស់យើងមានសិទ្ធិភាពល្អជាង។</p>');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `phone`, `address`, `description`, `date`) VALUES
(4, 'John', 'John@gmail.com', '0348477498', 'Street:  #, St..phoum tei 1 S/K Phum Ti Muoy Village Smach Mean Chey Khemarakphumin Cit', 'Thank you for create this website', '2024-04-20'),
(5, 'Nita', 'admin@gmail.com', '0283643921', 'Street:  S/K Kampong Thom, Stueng Saen Ci', 'Hello?', '2024-04-20'),
(6, 'borey', 'Author1122@gmail.com', '0283643921', '192pp', '123', '2024-04-21');

-- --------------------------------------------------------

--
-- Table structure for table `follow_us`
--

CREATE TABLE `follow_us` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `url` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `follow_us`
--

INSERT INTO `follow_us` (`id`, `label`, `image`, `url`, `status`) VALUES
(12, 'Instagram', '1713632836-1713545752-ig.jfif  ', 'instagram.com', 'row7'),
(16, 'Linkln', '1713548558-link.png    ', 'https://.JONGDENGNAS.kh.linkedin.com/', 'row6'),
(17, 'facebook', '1713632813-1713548491-fb.png     ', 'www.facebook.com', 'row2'),
(18, 'Telephone', '1713548683-phone.jpg   ', 'Please contact this number', 'row4'),
(19, 'Gmail', '1713548784-gmail-1.png   ', 'JONGDENGNEWS@gmail.com', 'row3'),
(21, 'Youtube', '1713550129-youtube.png    ', 'www.youtube.com/channel/JONGDENGNEWS', 'row2'),
(37, 'Tiktok', '1713565366-tiktok.png    ', 'tiktok', 'row1');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `image`, `status`) VALUES
(8, '1713634003-internet.png ', 'header'),
(10, '1713633986-internet.png ', 'footer');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `banner` text NOT NULL,
  `thumbnail` text NOT NULL,
  `news_type` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `viewer` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `user_id`, `title`, `date`, `description`, `banner`, `thumbnail`, `news_type`, `categories`, `viewer`) VALUES
(8, 16, 'កក្រើក! ក្រុមបាល់ទះកីឡាករល្បីៗចូលប្រកួតបាល់ទាត់ដ៏ធំមួយប្រមូលមូលនិធិជូនមន្ទីរពេទ្យគន្ធបុប្ផា', '19/Apr/2024', '<p>ព្រឹត្តិការណ៍ប្រកួតបាល់ទាត់មិត្តភាពដ៏ធំនិងអស្ចារ្យមួយនឹងកើតមានឡើងនាថ្ងៃទី០១ ខែឧសភា ឆ្នាំ២០២៤ ខាងមុខដែលមានការចូលរួមពីក្រុមបាល់ទាត់មិនអាជីពល្បីៗចំនួន​៤ក្រុម​ ហើយក្នុងនោះក៏មានវត្តមាន​ក្រុមកីឡាករ​បាល់ទាត់បាល់ទះដែល​ប្រមូល​ផ្ដុំ​ដោយកីឡាករ​ល្បីៗ​ផងដែរ។</p>\r\n<p>ក្រុមបាល់ទាត់បាល់ទះដែលចូលរួមប្រកួតព្រឹត្តិការណ៍ប្រកួតបាល់ទាត់មិត្តភាពសប្បុរសធម៌ដ៏​កក្រើក​ នាថ្ងៃទី០១ ខែឧសភា ឆ្នាំ២០២៤ មានឈ្មោះថា S&amp;E Volleyball All Stars។ ក្រុមដែល​ទើប​បង្កើត​ឡើង​ថ្មីថ្មោងមួយនេះ មានកីឡាករ​បាល់ទះល្បីៗជាច្រើនដូចជាឥន្ទ្រីពិឃាដឌូក សុខរ៉ាដូ ធីម៉េងហួង ប៊នណារិទ្ធ ម៉ាប់ឆ្វេង សុវណ្ណនាថ លោកគ្រូសោម ចំណាប់ អធិរាជប្រអប់​ស្មាត់​រាជ នួន វិចិត្រ និងអេដមីនបាល់ទះល្បីៗរួមមាន​លោក អ៊ឹង ឆាយ លោកឌូគូ លោកខេន លោកស្រួច លោកសី លោកចន្ថា និងលោកម៉េងលីជាដើម។</p>\r\n<div id=\"gax-inpage-async-1700714337\">\r\n<div id=\"9pBkdvSCQPj8YGAu6xM5_2t2a5i6NHlsllCgGVG5_GI4729287872\"></div>\r\n</div>\r\n<p>ក្រៅពីមានការចូលរួមពីក្រុមកីឡាករបាល់ទះហើយនោះ ក៏មានវត្តមានពីសំណាក់ក្រុមខ្លាំងនិង​សំបូរបទពិសោធន៍ Cambodia Football Super Stars ដែលមានការចូលចូលពីសិល្បៈករក្មេងចាស់ជាច្រើនដូចជាលោក ចារិទ្ធី លោក ខេម លោក គូម៉ា លោក សេង មង្គល លោកដេនសាប់ហ្វឺ លោក ប៊ុនលីម៉ា លោក ហេង នរកក្ដដា លោក ភីសេន រួមជាមួយនឹងតារាល្បីៗជាច្រើនទៀត។ មិនត្រឹមតែប៉ុណ្ណោះនៅមានក្រុមល្បីៗមិនអាច​មើល​រំលង​បាន​២​ក្រុម​ទៀត ពោលគឺ​ក្រុមបាល់ទាត់គុនខ្មែរ និងក្រុមបាល់ទាត់ Vlogger All Stars ទៀតផង។</p>', '1713636351-203-slide-banner-03.jpg', '1713636317-1711560007-sabay1.jpg', 'sport', 'national', 12),
(9, 16, 'ក្លឹប​អង់គ្លេស​ធ្លាក់​ចេញពី​ UCL ទោះ​ជា​វគ្គ Final ប្រព្រឹត្តិ​ទៅ​នៅ​រាជធានី​ឡុងដុង​ក្ដី', '19/Apr/2024', '<p>ក្លឹប​អង់គ្លេស​ទាំងអស់​បាន​ធ្លាក់​ត្រឹម​វគ្គ​ ៨ក្រុម​ចុង​ក្រោយ​នៅ​ក្នុង​ព្រឹត្តិការណ៍​ក្របខ័ណ្ឌ​កំពូល​អឺរ៉ុប UEFA Champions League នៅ​ក្នុង​រដូវកាល​ ២០២៣/២៤។</p>\r\n<p>ក្លឹប​ចុង​ក្រោយ​ចំនួន ២ ដែល​មាន​វាសនា​ត្រឹម​វគ្គ ៨ក្រុម​គឺ ក្លឹបកាំភ្លើងធំ Arsenal និង​ក្លឹប​មេឃខៀវ Manchester City។Arsenal ត្រូវ​បាន​ក្លឹប​អាល្លឺម៉ង់ Bayern Munich ទម្លាក់​ក្រោម​លទ្ធផល​សរុប​ទាំង ២ជើង​ ៣ ទល់​នឹង ២។ កាល​ពី​ជើង​ទី១ ដែល​ប្រព្រឹត្តិ​ទៅ​នៅ​ទឹកដី Aចំណែក​ឯ Manchester City វិញ តាម​ពិត​ទៅ​លេង​ស្មើ​គ្រាប់​បាល់​ ៩០នាទី​ជាមួយ​នឹង​ក្លឹប​អធិរាជ​ស​ប្រចាំ​រាជធានី​អេស្ប៉ាញ Real Madrid។ លទ្ធផល​ទាំង ២ជើង​គឺ ៤ ទល់​នឹង​ ៤។</p>\r\n<p>យ៉ាងណាមិញ ជា​អកុសល​ Manchester City បាន​ចាញ់ Real Madrid នៅ​ក្នុង​វគ្គ​កាត់​សេចក្ដី​បាល់​ទាត់ ១១ម៉ែត្រ ដោយ​ក្លឹប Real Madrid យក​ឈ្នះ​ក្នុង​លទ្ធផល ៤ ទល់​នឹង ៣។rsenal នៅ​រាជធានី​ឡុងដុង ការ​ប្រកួត​បញ្ចប់​ទៅ​ដោយ​លទ្ធផល ២-២ យ៉ាងណាមិញ ខាង Bayern Munich បាន​យក​ឈ្នះ​នៅ​ជើង​ទី២ ក្រោម​លទ្ធផល​យ៉ាង​ប្រផិតប្រផើយ​គឺ ១ ទល់​នឹង​ ០។</p>', '1713561982-132-slide-banner-01.jpg', '1713514536-ban2.jpg', 'sport', 'international', 13),
(10, 16, ' ពេជ្រ សម្បត្តិ៖​ ដឹង​តែ​កក្រើក​ និង​ល្អ​មើល​ហើយ​អ្នក​កំពង់ចាម​ថ្ងៃ​បើក​សង្វៀន​ថ្មី​ DRAGON KUN KHMER', '19/Apr/2024', '<p>អ្នក​លេង​គុន​ខ្មែរ​កំពុង​ល្បី​ឈ្មោះ​ខ្លាំង​ ពេជ្រ​ សម្បត្តិ​ ថា​ហ្វឹកហាត់​ត្រៀម​ខ្លួន​បាន​ល្អ​ និង​រួចរាល់​ហើយ​គឺ​រង់ចាំ​តែ​ការ​ប្រកួត​យប់​នេះ​មក​ដល់​ប៉ុណ្ណោះ​ ខណៈ​រូប​គេ​ប្ដេជ្ញា​ចិត្ត​នឹង​ធ្វើ​ឲ្យ​កក្រើក​កម្មវិធី​ថ្មី​ DRAGON KUN KHMER ​ពិសេស​ជូន​អ្នក​កំពង់ចាម​តែ​ម្ដង។​</p>\r\n<p>កីឡាករ​ ពេជ្រ សម្បត្តិ​ បាន​ឲ្យ​ដឹង​កាល​ពី​ថ្ងៃ​ធ្វើ​សន្និសីទ​សារព័ត៌មាន​នៅ​ទូរទស្សន៍​ម្សិលមិញ​នេះ​ថា​ ការ​ហ្វឹកហាត់​ ការ​ត្រៀម​ខ្លួន​គឺ​បាន​ពេញ​ល្អ​តែ​ម្ដង​ ពោល​រួចរាល់​រង់ចាំ​តែ​ការ​ប្រកួត​មក​ដល់​ប៉ុណ្ណោះ។​ ចំពោះ​ជំនឿ​ចិត្ត​វិញ​កូន​សិស្ស​លោក​ ពេជ្រ សុផាន់​ រូប​នេះ​ដាក់​ត្រឹម​ ៥០%​ សិន​ ព្រោះ​មិន​ទាន់​ដឹង​ពី​សមត្ថភាព​ដៃគូ​យ៉ាងណា​នោះ​ទេ​ ប៉ុន្តែ​សន្យា​ថា​នឹង​ធ្វើ​ឲ្យ​អស់​ពី​សមត្ថភាព។​</p>\r\n<p>សម្បត្តិ​ បញ្ជាក់​ច្បាស់ៗ​ថា​នឹង​វ៉ៃ​ឲ្យ​កក្រើក​ជូន​អ្នក​ទស្សនា​ពិសេស​នោះ​គឺ​អ្នក​កំពង់ចាម​ដែល​ជា​ម្ចាស់​ស្រុក​ផ្ទាល់​តែ​ម្ដង​ ដើម្បី​បាន​កម្សាន្ត​សប្បាយ​ពេល​មក​ផ្ទាល់។​ អ្នក​លេង​គុន​ខ្មែរ​រូប​នេះ​សំណូមពរ​ឲ្យ​មហាជន​ចូលរួម​គាំទ្រ​ក៏​ដូច​ជា​មក​ទស្សនា​ការ​ប្រកួត​យប់​នេះ​ឲ្យ​បាន​ច្រើន​ជា​កម្លាំង​ចិត្ត​ដល់​កីឡាករ​កម្ពុជា។​</p>', '1713514633-ban3.jpg', '1713514633-th3.jpg', 'sport', 'national', 7),
(11, 16, ' ចូលឆ្នាំថ្មី អតិថិជន ក្រុមហ៊ុន វឌ្ឍនៈ ឈ្នះរង្វាន់ជាច្រើន! ឈ្នះលុយ ឈ្នះមាស ឡាន ម៉ូតូ និងឈ្នះរង្វាន់ធំៗផ្សេងទៀត', '19/Apr/2024', '<p>សង្ក្រាន្តឆ្នាំនេះពិតជាសប្បាយប្លែក និងមានប្រជាជនចូលរួមលេងកម្សាន្តយ៉ាងច្រើនកុះករ លេងល្បែងប្រជាប្រិយ បាញ់ទឹកកម្សាន្តនិងទស្សនាការប្រគំតន្ត្រី នៅបណ្តាខេត្ត/ក្រុង នៅទូទាំងប្រទេសកម្ពុជា គួរឲ្យកត់សំគាល់។ ក្នុងនោះក្រុមហ៊ុន វឌ្ឍនៈក៏បានចូលរួមប្រារព្ធពេលវេលាដ៏អស្ចារ្យនេះជាមួយប្រជាជនខ្មែរយើងស្ទើរគ្រប់ទិសទី ជាពិសេសបន្ថែមការជួបជុំឲ្យកាន់តែរីករាយដោយផ្តល់រង្វាន់ជូនអតិថិជនយើងយ៉ាងច្រើនសន្ធឹកសន្ធាប់ដូចជា លុយសុទ្ធ រថយន្តដ៏ថ្មីស្រឡាង មាសសុទ្ធ ម៉ូតូ និងរង្វាន់ជាច្រើនទៀតពីក្រវិលកំប៉ុងស្រាបៀរ និងភេសជ្ជៈរបស់ក្រុមហ៊ុន វឌ្ឍនៈ ប្រ៊ូវើរី។</p>\r\n<p>សូមជូនពរឆ្នាំថ្មីដល់ប្រជាជនកម្ពុជាទូទាំងប្រទេសឲ្យជួបតែសេចក្តីសុខ និងសុភមង្គលគ្រប់ក្រុមគ្រួសារ៕</p>', '1713541834-banner2.png', '1713541834-th4.png', 'social', 'national', 1),
(12, 16, 'ដោយសារភ្លៀងសិប្បនិម្មិត Cloud Seeding ឬ ទើបធ្វើឱ្យឌូបៃ ជួបប្រទះគ្រោះ​ទឹកជំនន់​ធ្ងន់ធ្ងរបំផុត?', '19/Apr/2024', '<p>ក្រុងឌូបៃ ប្រទេសអារ៉ាប់រួម បាន​នឹង​កំពុងជួបប្រទះគ្រោះទឹកជំនន់​ធ្ងន់ធ្ងរ​បំផុត​ ដែល​គេកំពុងសង្ស័យថា វាបណ្តាល​មកពី​ភ្លៀងសិប្បនិម្មិត​ ឬ Cloud Seeding ដែលជាការបណ្តុះពពក​ដើម្បី​ឱ្យមានភ្លៀងធ្លាក់។</p>\r\n<p>ភ្លៀង​ធ្លាក់ផ្គររន្ទះដ៏ខ្លាំង​នេះ បានកើតឡើង​កាលពីថ្ងៃទី១៦ ខែមេសា ឆ្នាំ២០២៤ ក្នុងកម្រិតច្រើនជាង ១៤សង់ទីម៉ែត្រ​ ដែល​ជាការធ្លាក់ភ្លៀង​ច្រើនបំផុត​ចាប់តាំងពីឆ្នាំ​១៩៤៩មក</p>\r\n<div id=\"gax-inpage-async-1700714337\">\r\n<div id=\"F_E-s4gFXGg2LL1Kl_d7x50g2fMj4iMeIImxZcLXvOs1589453525\"></div>\r\n</div>\r\n<p>យ៉ាងណាមិញ មកទល់ពេលនេះ មិនទាន់​មានការបញ្ជាក់ច្បាស់លាស់នៅឡើយទេ ថា​តើវាជាគ្រោះធម្មជាតិ ឬជាភ្លៀងសិប្បនិម្មិត​របស់​ពពក​ដែលបានបណ្តុះឡើងនោះមក ហួសពីការគ្រប់គ្រង។ ប៉ុន្តែគេអាចកត់សម្គាល់បានថា ការធ្លាក់​ភ្លៀង​ គឺ​ស្របពេល​ដែល​អារ៉ាប់​រួម កំពុង​ប្រើប្រាស់​វិទ្យាសាស្រ្ត​បង្កើតភ្លៀងសិប្បនិម្មិតនេះ ដើម្បីកាត់​បន្ថយ​អាកាសធាតុដ៏ក្តៅ នៅក្នុងទីក្រុងឌូបៃ។</p>', '1713541931-ban4.jpg', '1713541931-th5.jpg', 'social', 'international', 1),
(13, 16, 'ខេត្តដែលទទួលបានភ្ញៀវទេសចរច្រើនជាងគេ និងតិចជាងគេបង្អស់ក្នុងឱកាស​ចូលឆ្នាំខ្មែរ', '19/Apr/2024', '<p>យោងតាមស្ថិតិ​អ្នកទេសចរផ្ទៃក្នុង នាឱកាស​បុណ្យចូលឆ្នាំថ្មីប្រពៃណីជាតិខ្មែររយៈពេល ៤ថ្ងៃកន្លងទៅនេះចេញផ្សាយដោយក្រសួងទេសចរណ៍ បានបង្ហាញ​ឱ្យដឹងថា ខេត្ត​ដែល​ទទួលបាន​ភ្ញៀវ​ច្រើនជាងគេ​បង្អស់គឺខេត្តកំពង់ចាម​ជាង ៥,៣លាននាក់ បន្ទាប់មក ព្រៃវែង ជាង ២,២លាននាក់ និងកំពង់ស្ពឺជាង ២,១លាននាក់។</p>\r\n<p>ចំណែកខេត្ត​ដែលទទួលបាន​ភ្ញៀវទេសចរតិចជាងគេបង្អស់ គឺខេត្តកោះកុង ជាង ២ម៉ឺននាក់ បន្ទាប់មក គឺ​មណ្ឌលគិរីជាង ២ម៉ឺន ១ពាន់នាក់ និង ស្ទឹងត្រែង ជាង ២ម៉ឺន ៧ពាន់នាក់</p>\r\n<div id=\"gax-inpage-async-1700714337\">\r\n<div id=\"jmm5HzzpAAkIQe1JF9qWu--nE5_nk6eCXX73YfGWVsE6781021771\"></div>\r\n</div>\r\n<p>សរុបចំនួនអ្នកទេសចរ រយៈពេល ៤ថ្ងៃនេះ៖</p>\r\n<div id=\"gax-inpage-async-1706848478\">\r\n<div id=\"NMwagraqk_4IbRQ50w53NoYcWiiKqGZ53u-oGv3luFY1527637923\"></div>\r\n</div>\r\n<p>-ទេសចរសរុបប្រមាណ៖ ជាង ២១,៨លាននាក់</p>\r\n<p>-ទេសចរជាតិប្រមាណ៖ ជាង ២១,៧លាននាក់</p>\r\n<p>-ទេសចរបរទេស​ប្រមាណ៖ ជាង ១១ម៉ឺននាក់៕</p>', '1713542004-ban5.jpg', '1713542004-th6.jpg', 'social', 'national', 1),
(14, 16, ' ល្អហួស បំបែកកំណត់ត្រា B2B ក្នុងការប្រកួត Miss Preteen Junior Idol World 2024 ខណៈបវរកញ្ញា ២រូបទៀតឈ្នះ 2nd Runner up', '19/Apr/2024', '<p>កម្មវិធីប្រកួត The 3rd Junior Idol World 2024 បានបញ្ចប់ទៅដោយជោគជ័យ កាលពីយប់មិញនេះ ហើយអ្វីដែលជាមោទនភាពយ៉ាងក្រៃលែងសម្រាប់កម្ពុជា នោះគឺយុវតី ជូរី ល្អហួស ហៅ ល្អហួស បានបំបែកកំណត់ត្រា B2B (Back to Back) ក្នុងការដណ្តើមមកុដ Miss Preteen Junior Idol World 2024 ពីបវរកញ្ញា ឃឿន ប៉ូលីកា ដែលជាម្ចាស់ជយលាភីឆ្នាំ២០២៣ និងជាបវរកញ្ញាកម្ពុជាដំបូងគេដែលឈ្នះមកុដ Miss Preteen Junior Idol World 2023។</p>\r\n<p>ក្រៅពីដណ្តើមបានជយលាភី Miss Preteen Junior Idol World 2024 ល្អហួស ថែមទាំងដណ្តើមបានពានពិសេស ចំនួន ៧ រួមមាន៖ Best National Costume, People&rsquo;s Choice Award (ចំនួន២រង្វាន់), Photogenic, Best Talent, JIW 2024 Ambassador (ទទួលបានមកុដ ១) និង Best Interview ពីការប្រកួតអន្តរជាតិនេះទៀតផង ធ្វើឱ្យប្រជាជនកម្ពុជាកោតស្ញប់ស្ញែងចំពោះរូបនាងជាពន់ពេក។</p>', '1713542162-ban6.jpg', '1713542162-th7.jpg', 'entertainment', 'national', 0),
(15, 16, 'ទើបបង្ហើបថាចង់ Comeback ថ្មីៗ ស្រាប់តែធ្លាយដំណឹងថា រ៉េត ស្រីនាថ ចែកផ្លូវគ្នាជាមួយគូដណ្តឹង', '19/Apr/2024', '<p>បវរកញ្ញារាងតូចច្រឡឹង រ៉េត ស្រីនាថ បានធ្វើឱ្យអ្នកគាំទ្រ និងអ្នកស្នេហាវិស័យបវរកញ្ញារំភើប ហើយរំជួលចិត្តជាខ្លាំង ពេលឃើញនាងបង្ហោះលើទំព័រហ្វេសប៊ុកផ្លូវការថា &laquo; Should I come back in beauty pageant field? គួរ comeback អត់?&raquo; ដែលនេះជាអ្វីដែលហ្វេនៗចង់ឃើញជាទីបំផុត ព្រោះថា ស្រីនាថ ជាបវរកញ្ញាលេចធ្លោមួយរូប ពិសេសគឺ ចំណេះដឹង និងការប្រើប្រាស់ភាសាអង់គ្លេសរបស់នាង។គ្រាន់តែបង្ហើបបែបនេះភ្លាម បណ្តាអ្នកគាំទ្របាននាំគ្នាចូលទៅ Comment បង្ហាញពីការគាំទ្របវរកញ្ញាពេញដោយសមត្ថភាពនេះ ថែមទាំងបានលើកយកកម្មវិធីបវរកញ្ញាមួយចំនួនដែលពួកគេគិតថា ស័ក្កសមសម្រាប់បវរកញ្ញារូបនេះមកប្រាប់នាងថែមទៀតផង។</p>', '1713542222-ban7.jpg', '1713542222-th8.jpg', 'entertainment', 'national', 0),
(16, 16, 'ត្រៀមកន្លែងថតរូបថ្មី! អាជ្ញាធរ​ខេត្តកំពត​ ចាប់ផ្តើមសាងសង់​ប្រាសាទ​លោកយាយម៉ៅលើកំពូលភ្នំទ្វារ ឡានម៉ូតូក៏អាច​បើកឡើងដល់ដែរ', '19/Apr/2024', '<p>ឯកឧត្តម​អភិបាលខេត្តបានបញ្ជាក់បន្ថែមថា ការសាងសង់ប្រាសាទលោកយាយម៉ៅនៅលើកំពូលភ្នំ ក្នុងគោលបំណងដើម្បីលើកកម្ពស់ដល់ជំនឿសាសនាផង និងដើម្បីទាក់ទាញភ្ញៀវទេសចរផង ព្រោះពីទីតាំងប្រាសាទលោកយាយម៉ៅនៅលើភ្នំទ្វារនេះ អាចឱ្យយើងមើលឃើញវាលស្រែចំការ ភូមិឋានពលរដ្ឋ និងជួរភ្នំនានានៅក្នុងខេត្តកំពត។ ដូច្នេះប្រាសាទលោកយាយម៉ៅ មិនត្រឹមតែជាទីកន្លែងសម្រាប់គោរពបូរជា និងបួងសួងសុំសេចក្តីសុខប៉ុណ្ណោះទេ គឺថែមទាំងអាចក្លាយទៅជាតំបន់ទេសចរណ៍សាសនាមួយរបស់ខេត្តផងដែរ។ សូមបញ្ជាក់ផងដែរថា ចំពោះថវិកាដែលសាងសង់ប្រាសាទលោកយាយម៉ៅនេះ គឺលោកជំទាវ ហ៊ុន ចាន់ធី ម៉ៅ ធនិន ជាអ្នកជួយឧត្ថម្ភទាំងស្រុង៕</p>', '1713562139-1711560007-sabay1.jpg', '1713542293-th9.jpg', 'entertainment', 'national', 3),
(17, 16, ' Tim Cook ទៅទស្សនកិច្ចនៅវៀតណាម ចង់ពង្រីកការវិនិយោគ! តើអាចទៅរួចទេ បើករោងចក្រ​ដំឡើង iPhone?', '20/Apr/2024', '<p>ជាមួយគ្នានោះ លោក​ក៏បាន​សង្កត់ធ្ងន់ដែរថា ក្រុមហ៊ុន​បាន​ធ្វើការ​លើបច្ចេកវិទ្យានេះ​អស់​រយៈពេល​ជាច្រើន​ឆ្នាំ​មកហើយ។ ក្នុងនោះ ផលិតផល Apple មួយចំនួន ក៏បាន​បំពាក់ AI មកដែរ ដូចជា Vision Pro និង​ Apple Watch ព្រមទាំងឈីប​ដែល​បំពាក់​លើកុំព្យូទ័រ MacBook ដែលមាន​សមត្ថភាព​ដំណើរការ AI។ សម្រាប់​ iPhone វិញ គឺ​នៅពេល​អ្នក​ប្រើប្រាស់​ជួបគ្រោះថ្នាក់ចរាចរណ៍ វានឹង​ខលស្វែងរកជំនួយ​ដោយខ្លួនវាតែម្តង។</p>\r\n<div id=\"gax-inpage-async-1706848478\">\r\n<div id=\"sM_l_1aAadykfUCQmAK71Aa0RenU0IKn4HRo2mexAPw5060288296\">\r\n<div data-demo-link=\"https://damrei.sfo3.cdn.digitaloceanspaces.com/app/2024/april/bippi/underlay/index.html?ver=2023\" data-link=\"https://clk.ambientdsp.com/track/clk?vc=gaj&amp;tagid=1700714337&amp;brs=147287669928188306&amp;uid=1r2uu50ioaub&amp;suid=1r2uu50ioaub&amp;ae=1&amp;as=640x1386&amp;ctr=KH&amp;cty=PHNOM_PENH&amp;os=WINDOWS&amp;brw=chrome&amp;dvt=2&amp;dom=news.sabay.com.kh&amp;aid&amp;abdl&amp;fid=1711951155&amp;did=gax-uebfmmmqxytj&amp;crid=1712111539&amp;ts=1713562913&amp;rnd=1swz854bte&amp;tok=1r7id93vpkgh7&amp;redir=https%3A%2F%2Fbippikh.com%2Fkm%2Fbippi-premium-md-ads3%2F%3Futm_source%3Ddamrei_digital%26utm_medium%3Dmobile_underlay_ads%26utm_campaign%3Dbippi_night_md_ads3\">&nbsp;</div>\r\n</div>\r\n</div>\r\n<p>&nbsp;</p>\r\n<p>គួរកត់សម្គាល់ដែរថា ការលើកឡើង​របស់លោក Tim Cook នេះ បន្ទាប់ពីម្ចាស់ភាគហ៊ុន Apple បាន​ច្រានចោលសំណើ​ដែល​ក្រុមហ៊ុននេះ​ចង់​ធ្វើរបាយការណ៍តម្លាភាព AI យ៉ាងលម្អិត​ ថាតើ AI នេះ​ត្រូវបាន​ប្រើប្រាស់​ដោយត្រឹមត្រូវឬអត់។</p>\r\n<p>ប្រភព​មួយចំនួន​បានអះអាងថា Apple នឹង​បន្ថែម​មុខងារ Generative AI ថ្មី​នៅលើ iOS 18 ជាមួយគម្រោង​ប្រើប្រាស់​ AI ដើម្បី​ជំរុញសមត្ថភាព​របស់ app ក្នុង iOS៕</p>', '1713563035-banner3.jpg', '1713563035-th1.jpg', 'entertainment', 'international', 2),
(21, 16, 'វគ្គ Semi Final របស់ Europa League ឆ្នាំ​នេះ សុទ្ធ​តែ​គីឡូ​ធ្ងន់', '21/Apr/2024', '<p>ក្នុង​វគ្គ Semi Final របស់ Europa League ក្លឹប Marseille ត្រូវ​ប្រកួត​ជាមួយ Atlanta ឯ ក្លឹប Bayer Leverkusen ត្រូវ​ប៉ះ​ជាមួយ​ក្លឹប AS Roma។</p>\r\n<div id=\"gax-inpage-async-1700714337\">\r\n<div id=\"gvRCSfzDx-f5osDl_25__EjCFoIBomkluyBbCA_t_R89919316511\"></div>\r\n</div>\r\n<p>ខុស​ពី​កម្មវិធី Champions League ការ​ប្រកួត​វគ្គ​ពាក់​កណ្ដាល​ផ្ដាច់​ព្រ័ត្រ​របស់​កម្មវិធី Europa League ទាំង​ពីរ​គូ​ខាង​លើ ត្រូវ​ធ្វើ​ឡើង​នៅ​ថ្ងៃ​ជា​មួយ​គ្នា។ ពោល​គឺជំនួប​​ជើង​ទី ១ ប្រព្រឹត្ត​ទៅ​នៅ​ថ្ងៃ​សុក្រ ទី​៣ ខែ​ឧសភា​ឆ្នាំ ២០២៤ វេលា​ម៉ោង ២ ព្រឹក (ម៉ោង​នៅ​កម្ពុជា)។ ចំណែក​ឯ​ប្រកួត​ជើង​ទី ២ វិញ នឹង​កើត​ឡើង​នៅ​ថ្ងៃ​សុក្រ​ ទី ១០ ខែ​ឧសភា វេលា​ម៉ោង ២ ព្រឹក (ម៉ោង​នៅ​កម្ពុជា)។</p>\r\n<p>ក្នុង​ប្រកួត​ជើង​ទី ១ Marseille នឹង​ត្រូវ​ធ្វើ​ជា​ក្រុម​ម្ចាស់​ផ្ទះ​ក្នុង​ការ​ស្វាគមន៍​ក្រុម​ភ្ញៀវ Atlanta នៅ​កីឡដ្ឋាន Orange Velodrome ប្រទេស​បារាំង។ រី​ឯ​ប្រកួត​ជើង​ទី ២ វិញ Atlanta ក្នុង​នាម​ជា​ក្រុម​ម្ចាស់​ផ្ទះ ទទួល​ស្វាគមន៍​ក្រុម​ភ្ញៀវ Marseille វិញ​ម្ដង​នៅ​កីឡដ្ឋាន Gewiss Stadium អ៊ីតាលី។</p>\r\n<p>ដោយ​ឡែក​ គូ​វគ្គ Semi Final មួយ​ទៀត គឺ​រវាង Bayer Leverkusen និង Roma។ ក្នុង​ប្រកួត​ជើង​ដំបូង Roma បើក​ទ្វារ​កីឡដ្ឋាន​ Stadio Olimpico របស់​ខ្លួន ក្នុង​ការ​ទទួល​ក្រុម​ភ្ញៀវ​ Leverkusen។ ក្នុង​ជើង​បន្ទាប់ Leverkusen ត្រូវ​ប៉ះ​ជាមួយ Roma ក្នុង​ផ្ទះ​របស់​ខ្លួន​វិញ​នៅ BayArena។</p>', '1713637611-b2.jpg', '1713637611-1713514536-th2.jpg', 'sport', 'international', 0),
(22, 16, 'សន្សំប្រាក់ក៏ឈ្នះរង្វាន់ពីធនាគារ ស្ថាបនា! អតិថិជននឹងមានឱកាសឈ្នះមាស និងរង្វាន់យ៉ាងស្រស់ស្អាតពីគណនីសន្សំឆ្លាតវៃ', '21/Apr/2024', '<p><strong>ធនាគារ ស្ថាបនា</strong>&nbsp;ដែលជាធនាគារពាណិជ្ជឈានមុខមួយនៅកម្ពុជា បានកំពុងដាក់ចេញនូវកម្មវិធីប្រូម៉ូសិនពិសេស&nbsp;<strong>&ldquo;បើកគណនីក៏ឈ្នះ ដាក់ប្រាក់ក៏ឈ្នះ&rdquo;</strong> ជូនដល់អតិថិជនចាស់ និងថ្មីទាំងអស់ដែលមានគណនីសន្សំឆ្លាតវៃនឹងទទួលបានឱកាសឈ្នះរង្វាន់បន្ថែមពីលើការប្រាក់ដែលទទួលបានពីគណនីសន្សំឆ្លាតវៃធនាគារ ស្ថាបនា។ ការផ្តល់ជូននេះមានសុពលភាព ដល់ថ្ងៃទី ៣០ ខែមិថុនា ឆ្នាំ២០២៤។</p>', '1713637896-B3.jpg', '1713637896-B3.jpg', 'social', 'national', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile` text NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile`, `date`) VALUES
(1, 'Seyha', 'seyha@gmail.com', '43cca4b3de2097b9558efefd0ecc3588', '1710947519-fa-s-sion.jpg', '20/Mar/2024'),
(2, 'admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '1710949051-cat1.jpg', '20/Mar/2024'),
(4, 'winter', 'winter@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1710949735-people3.jpg', '20/Mar/2024'),
(5, 'hello', 'hello@gmail.com', 'f30aa7a662c728b7407c54ae6bfd27d1', '1710995365-651246acb83d0_1695696540_medium.jpg', '21/Mar/2024'),
(6, 'panha', 'panha@gmail.com', '602a48f17e04cd8ea9e4d18bcf86b4e9', '1710995492-people1.jpg', '21/Mar/2024'),
(7, 'rith', 'rith@gmail.com', '23d2cab8ac9c860ea7f1762d1458d5a7', '1710997214-people2.jpg', '21/Mar/2024'),
(8, 'lika', 'lika@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1711006160-law6.jpg', '21/Mar/2024'),
(9, 'vottey', 'Vottey@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1711006228-✧༺♡︎༻✧.jpg', '21/Mar/2024'),
(10, 'justin', 'justin@gmail.com', '603a1f92715fe14a2c6c6dbff52c25fd', '1711006856-Amazaing Aesthetic wooden wall bookshelf decorations collection.jpg', '21/Mar/2024'),
(11, 'broSeyhabek', 'broSeyhabek@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1711007963-law6.jpg', '21/Mar/2024'),
(12, 'heng', 'heng@gmail.com', 'a84e75c34f85c50886ee3a57b79749f7', '1711123828-65129d9c0dca3_1695718800_medium.jpg', '22/Mar/2024'),
(13, 'chea', 'chea@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', '1711299980-651246acb83d0_1695696540_medium.jpg', '25/Mar/2024'),
(14, 'Ta', 'ta@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1711341400-139418065_1796563443839070_2611354344174791241_n.jpg', '25/Mar/2024'),
(15, 'dom', 'dom@gmal.com', '7be1c7aa830807bbddd76a839af5fcf6', '1711376990-image1710995492-people1.jpg', '25/Mar/2024'),
(16, 'jay', 'jay@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1711426598-405-p60025.png', '26/Mar/2024'),
(17, 'Vichea', 'Vichea@gmail.com', '017ecac940dc71d8f9e6ca68fd3d0896', '1713454638-image1711376990-image1710995492-people1.jpg', '18/Apr/2024'),
(18, 'Cheata', 'cheata@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1713564229-image1710949735-people3.jpg', '20/Apr/2024'),
(21, 'Admin123', 'Admin1122@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1713564536-image1710949735-people3.jpg', '20/Apr/2024'),
(22, 'Author1234', 'Author1122@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1713638048-1713454638-image1711376990-image1710995492-people1.jpg', '21/Apr/2024'),
(23, 'Author11', 'Author11@gmail.com', '202cb962ac59075b964b07152d234b70', '1713638149-220224020745-ninja_girl_by_met4lhe4d_dg9d4zd-414w-2x.jpg', '21/Apr/2024'),
(24, 'neth', 'neth@gmail.com', '54966bfc6a893758302894246475ddbb', '1736181909-id2.jpg', '06/Jan/2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_us`
--
ALTER TABLE `follow_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `follow_us`
--
ALTER TABLE `follow_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
