-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 07:59 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooddonation`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(11) NOT NULL,
  `created_id` int(11) NOT NULL,
  `created_type` varchar(255) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `receiver_type` varchar(255) NOT NULL,
  `purpose` text NOT NULL,
  `short_message` text NOT NULL,
  `is_read` int(11) NOT NULL,
  `is_reply` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `created_id`, `created_type`, `receiver_id`, `receiver_type`, `purpose`, `short_message`, `is_read`, `is_reply`, `parent_id`, `created_at`, `created_by`, `updated_at`) VALUES
(1, 5, 'donor', 303, 'admin', 'dont know', 'Need AB+Blood 6 for Mahedi', 1, 0, 6, '2017-07-14 20:37:31', 'Asru', '2017-07-14 20:37:31'),
(2, 5, 'donor', 303, 'admin', 'dont know', 'Need A+Blood 3 for Mohin', 1, 0, 6, '2017-07-14 21:04:36', 'Asru', '2017-07-14 21:04:36'),
(3, 5, 'donor', 303, 'admin', 'dont know', 'Need A+Blood 2 for ', 1, 0, 6, '2017-07-19 19:22:15', 'Asru', '2017-07-19 19:22:15'),
(4, 5, 'donor', 303, 'admin', 'dont know', 'Need O-Blood 100 for ', 1, 0, 6, '2017-07-19 19:25:50', 'Asru', '2017-07-19 19:25:50'),
(5, 5, 'donor', 303, 'admin', 'dont know', 'Need B+Blood 6 in Rajshahi Medical', 1, 0, 6, '2017-07-19 19:32:42', 'Asru', '2017-07-19 19:32:42');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(24, 'N Sakib', 'n_sakib.cse.bd@gmail.com', '$2y$10$mYTIwlUfNEhYg46H3kUtVe80RD10cmj1BcQvKv2BfJwxPvlbyMRjC', 'dOmg6IRog4qHs0DtMBWhm8eGy2nH5UPywQfQq68D', '2017-05-18 15:40:18', '2017-05-23 09:46:40'),
(25, 'Fokhrul', 'fokhrul.cse.bd@gmail.com', '$2y$10$xh6UzrYjlv.qggixmCVPCukImfxmVDlOvfPv.IZLWJtrLjIG1Rhw.', 'DHRKILpPATYmW3yzueSAHncrx8B0ZoGl6gGSqXqk', '2017-05-19 08:47:05', '2017-05-19 08:47:05'),
(27, 'Shaju', 'shaju@gmail.com', '$2y$10$vz5AbMUwHgeQaTlg.aDSV.xhUdfYy/f.jbc/dYP9jRXNm7MavqGdK', '873DH0g1EdIjachAWom0DjvkfTviuqHS9q3ov4Je', '2017-05-23 09:11:11', '2017-05-23 09:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `apphospitals`
--

CREATE TABLE `apphospitals` (
  `id` int(11) NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `apphospitals`
--

INSERT INTO `apphospitals` (`id`, `pic_path`, `name`, `address`, `speciality`, `phone`, `latitude`, `longitude`, `division`, `district`, `thana`) VALUES
(1, 'hospitalImages/dhakasishu.jpg', 'Dhaka Shishu (children) Hospital', 'Sher-e-Bangla Nagar, Dhaka-1207,\r\nBangladesh', 'Cardiology, Nephrology, Neurology, Child Development & Child Pschycology, Neonatology, Gastroenterology, Hepatology and Nutrition', '880-2-9128308', 23.77123, 90.375225, 'Dhaka', 'Dhaka', 'Sher-e-Bangla Nagar');

-- --------------------------------------------------------

--
-- Table structure for table `apps_countries`
--

CREATE TABLE `apps_countries` (
  `id` int(11) NOT NULL,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apps_countries`
--

INSERT INTO `apps_countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People''s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People''s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'ZR', 'Zaire'),
(244, 'ZM', 'Zambia'),
(245, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_category_id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `photo` varchar(255) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `title`, `description`, `photo`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 6, 'রক্তদানের প্রয়োজনিয়তা?', 'প্রথম এবং প্রধান কারণ, আপনার দানকৃত রক্ত একজন মানুষের জীবন বাঁচাবে। রক্তদানের জন্য এর থেকে বড় কারণ আর কি হতে পারে !\r\nহয়তো একদিন আপনার নিজের প্রয়োজনে/বিপদে অন্য কেউ এগিয়ে আসবে।\r\nনিয়মিত রক্তদানে হৃদরোগ ও হার্ট অ্যাটাকের ঝুঁকি অনেক কম।\r\nনিয়মিত স্বেচ্ছায় রক্তদানের মাধ্যমে বিনা খরচে জানা যায় নিজের শরীরে বড় কোনো রোগ আছে কিনা। যেমন : হেপাটাইটিস-বি, হেপাটাইটিস-সি, সিফিলিস, এইচআইভি (এইডস) ইত্যাদি।\r\nদেহের রোগ প্রতিরোধ ক্ষমতা অনেকগুন বেড়ে যায়।', '.jpg', 0, '2017-06-22 04:43:30', 0, '2017-06-19 12:39:49'),
(2, 2, 'রক্তদাতাদের করণীয় কি ?aabb', 'রোগী কোন হাসপাতাল/ক্লিনিকে আছেন জেনে নিন। হাসপাতাল/ক্লিনিক ছাড়া অন্য কোথাও রক্তদান করতে যাবেন না। রোগীর বাসায় হলেও না।\r\nহাসপাতাল/ক্লিনিক ছাড়া অন্য কোথাও রক্ত আবেদনকারী (মোবাইল নম্বরে যে ব্যাক্তির সাথে আপনি যোগাযোগ করছেন) এর সাথে দেখা করবেন না। হাসপাতালের পাশের গলি, কিংবা কোনও দোকানে দেখা করতে বললে যাবেন না।\r\nরক্তদানের পূর্বে রোগী দেখে নিবেন। রোগীর রিপোর্ট, ডাক্তারের রিকুইজিশন লেটার দেখে নিবেন।\r\nরক্তদানের সময় দুই-একজন বন্ধু সাথে নিয়ে গেলে ভালো হয়।\r\nরক্তদানে নতুন সূচ ব্যবহার করছে কিনা নিশ্চিত হয়ে নিন।\r\nউপস্থিত বিশেষজ্ঞের দক্ষতা নিয়ে সন্দেহ থাকলে কর্তৃপক্ষকে জানান.', 'child-birth.jpg', 0, '2017-06-22 04:39:55', 0, '2017-06-19 12:41:19'),
(3, 2, 'বাংলায় নমুনা লেখা', ' বাংলা কোডেক্সসহ বিভিন্ন বাংলা অনলাইন পত্রিকা তৈরির কাজ করতে করতে বাংলার সাথে নিজেকে বেঁধে নিয়েছি আষ্টেপৃষ্ঠে। বিশেষ করে অনলাইন পত্রিকা তৈরি করতে ডিযাইন করার সময়, সেই ডিযাইনকে কোডে রূপান্তর করবার সময় বারবার অনুভব করেছি কিছু নমুনা লেখার। যে লেখাগুলো ফটোশপে বসিয়ে বাংলায় ডিযাইন করা যাবে, আবার সেই লেখাই অনলাইনে ব্যবহার করা যাবে। কিন্তু দুঃখজনক হলেও সত্য যে, ইংরেজিতে লাতিন Lorem Ipsum… সূচক নমুনা লেখা (dummy texts) থাকলেও বাংলা ভাষায় এরকম কোনো লেখা নেই। তাই নিজের তাগিদেই বাংলা ভাষার জন্য প্রথম নমুনা লেখা তৈরি করলাম, এ হলো বাংলা Lorem ipsum – কিন্তু তার অনুবাদ নয়। আমি একে নামকরণ করেছি: অর্থহীন লেখা!', 'asdf.png', 2, '2017-07-16 08:52:30', 3, '2017-07-16 08:52:30'),
(4, 2, 'অর্থহীন লেখা', 'অর্থহীন লেখা যার মাঝে আছে অনেক কিছু। হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো। যেকোনো লেখাই তোমার কাছে অর্থবোধকতা তৈরি করতে পারে, যদি তুমি সেখানে অর্থদ্যোতনা দেখতে পাও। …ছিদ্রান্বেষণ? না, তা হবে কেন?', 'icon.png', 5, '2017-07-16 08:55:26', 4, '2017-07-16 08:55:26'),
(5, 2, 'যে কথাকে কাজে লাগাতে চাও', 'যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।', 'icon2.png', 6, '2017-07-16 08:58:23', 8, '2017-07-16 08:58:23');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(3) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `category_name`, `updated_at`, `created_at`) VALUES
(1, 'Event', '2017-07-12 00:19:23', '0000-00-00 00:00:00'),
(2, 'Blood News', '2017-07-16 07:37:21', '0000-00-00 00:00:00'),
(3, 'cat_3', '2017-06-19 17:59:15', '0000-00-00 00:00:00'),
(4, 'cat_4', '2017-06-19 17:59:15', '0000-00-00 00:00:00'),
(5, 'cat_66', '2017-07-16 00:03:49', '2017-06-19 12:01:39'),
(6, 'Hospital', '2017-06-19 12:34:06', '2017-06-19 12:34:06'),
(7, 'Home', '2017-06-23 09:18:11', '2017-06-23 09:18:11'),
(8, 'Ashru', '2017-07-16 00:04:35', '2017-07-16 00:04:35');

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroups`
--

CREATE TABLE `bloodgroups` (
  `id` int(11) NOT NULL,
  `bloodgroup_name` varchar(20) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `created_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blood_requests`
--

CREATE TABLE `blood_requests` (
  `id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL,
  `request_blood_group` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `patient_hospital` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `patient_phone` varchar(255) NOT NULL,
  `patient_place` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `number_blood_bag` int(11) NOT NULL,
  `disease` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `relation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `opration_time` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_requests`
--

INSERT INTO `blood_requests` (`id`, `user_id`, `request_blood_group`, `patient_hospital`, `patient_phone`, `patient_place`, `number_blood_bag`, `disease`, `relation`, `opration_time`, `updated_at`, `created_at`, `created_by`) VALUES
(1, 0, '56778', 'jaman', '0', 'jhinaidaha', 3, 'no', 'bro', '2017-06-22 03:22:11', '2017-06-22 00:24:10', '2017-06-22 00:24:10', 2),
(2, 2, 'A+', 'jhjhk', '8787778', 'vhjhg', 9, 'Yes', 'hgvghf', '2017-06-30 00:00:00', '2017-06-21 19:19:33', '2017-06-21 19:19:33', NULL),
(3, 2, 'AB+', 'Rashed', '12345', 'Basabo', 4, 'No', 'Brother', '2017-07-20 00:00:00', '2017-07-08 15:21:53', '2017-07-08 15:21:53', NULL),
(4, 6, 'AB+', 'Mahedi', '0169856485', 'Comilla', 6, 'Thalasemia', 'Friend', '2017-07-28 00:00:00', '2017-07-14 20:30:55', '2017-07-14 20:30:55', NULL),
(5, 6, 'AB+', 'Mahedi', '0169856485', 'Comilla', 6, 'Thalasemia', 'Friend', '2017-07-28 00:00:00', '2017-07-14 20:32:35', '2017-07-14 20:32:35', NULL),
(6, 6, 'AB+', 'Mahedi', '0169856485', 'Comilla', 6, 'Thalasemia', 'Friend', '2017-07-28 00:00:00', '2017-07-14 20:32:35', '2017-07-14 20:32:35', NULL),
(7, 6, 'AB+', 'Mahedi', '0169856485', 'Comilla', 6, 'Thalasemia', 'Friend', '2017-07-28 00:00:00', '2017-07-14 20:33:32', '2017-07-14 20:33:32', NULL),
(8, 6, 'AB+', 'Mahedi', '0169856485', 'Comilla', 6, 'Thalasemia', 'Friend', '2017-07-28 00:00:00', '2017-07-14 20:36:30', '2017-07-14 20:36:30', NULL),
(9, 6, 'AB+', 'Mahedi', '0169856485', 'Comilla', 6, 'Thalasemia', 'Friend', '2017-07-28 00:00:00', '2017-07-14 20:37:11', '2017-07-14 20:37:11', NULL),
(10, 6, 'AB+', 'Mahedi', '0169856485', 'Comilla', 6, 'Thalasemia', 'Friend', '2017-07-28 00:00:00', '2017-07-14 20:37:30', '2017-07-14 20:37:30', NULL),
(11, 6, 'A+', 'Mohin', '0158965848', 'Moynamoti', 3, 'unknown', 'brother', '2017-07-21 00:00:00', '2017-07-14 21:04:36', '2017-07-14 21:04:36', NULL),
(12, 6, 'A+', 'Dhaka Medical', '019100077628', 'Dhaka', 2, 'Fever', 'Brother', '2017-07-05 00:00:00', '2017-07-19 19:22:15', '2017-07-19 19:22:15', NULL),
(13, 6, 'O-', 'Dhaka', '011111', 'DHaka', 100, 'No', 'ok', '2017-07-12 00:00:00', '2017-07-19 19:25:50', '2017-07-19 19:25:50', NULL),
(14, 6, 'B+', 'Rajshahi Medical', '01865987458', 'Rajshahi', 6, 'Thalasamia', 'Friend', '2017-07-28 00:00:00', '2017-07-19 19:32:41', '2017-07-19 19:32:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `slug`, `type`, `created_at`) VALUES
(1, 'Home', 'home', 'page', '2017-05-18 18:37:03'),
(2, 'About Us', 'about_us', 'page', '2017-05-18 18:37:19'),
(3, 'Contact Us', 'conyact_us', 'page', '2017-05-18 18:37:37');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_page` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content_photo` text NOT NULL,
  `author_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `title`, `description`, `content_type`, `content_page`, `content_photo`, `author_id`, `created_at`, `updated_at`) VALUES
(5, 'কারা রক্তদান করতে পারবেন?', '<ul>\r\n	<li>১৮ বছর থেকে ৬০ বছরের যেকোনো সুস্থদেহের মানুষ রক্ত দান করতে পারবেন।</li>\r\n	<li>শারীরিক এবং মানসিক ভাবে সুস্থ নিরোগ ব্যক্তি রক্ত দিতে পারবেন</li>\r\n	<li>আপনার ওজন অবশ্যই ৫০ কিলোগ্রাম কিংবা তার বেশি হতে হবে।</li>\r\n	<li>মহিলাদের ক্ষেত্রে ৪ মাস অন্তর-অন্তর, পুরুষদের ক্ষেত্রে ৩ মাস অন্তর অন্তর রক্ত-দান করা যায়।</li>\r\n	<li>রক্তে হিমোগ্লোবিনের পরিমাণ, রক্তচাপ ও শরীরের তাপমাত্রা স্বাভাবিক থাকতে হবে।</li>\r\n	<li>শ্বাস-প্রশ্বাসজনিত রোগ এ্যাজমা, হাপানি যাদের আছে তারা রক্ত দিতে পারবেন না।</li>\r\n</ul>', 'Notice', 'Donor', '', 3, '2017-06-01 16:36:52', '2017-06-01 16:36:52'),
(6, 'কিছু ভুল ধারনা', '<ul>\r\n	<li>প্রথম এবং প্রধান কারণ, আপনার দানকৃত রক্ত একজন মানুষের জীবন বাঁচাবে। রক্তদানের জন্য এর থেকে বড় কারণ আর কি হতে পারে !</li>\r\n	<li>হয়তো একদিন আপনার নিজের প্রয়োজনে/বিপদে অন্য কেউ এগিয়ে আসবে।</li>\r\n	<li>নিয়মিত রক্তদানে হৃদরোগ ও হার্ট অ্যাটাকের ঝুঁকি অনেক কম।</li>\r\n	<li>দেহের রোগ প্রতিরোধ ক্ষমতা অনেকগুন বেড়ে যায়।</li>\r\n</ul>', 'upcoming_events', 'Home', '', 3, '2017-07-17 20:44:01', '2017-06-01 16:39:25'),
(7, 'সাবধানতা ও সতর্কতা', '<ul>\r\n	<li>১৮ বছর থেকে ৬০ বছরের যেকোনো সুস্থদেহের মানুষ রক্ত দান করতে পারবেন।</li>\r\n	<li>শারীরিক এবং মানসিক ভাবে সুস্থ নিরোগ ব্যক্তি রক্ত দিতে পারবেন</li>\r\n	<li>আপনার ওজন অবশ্যই ৫০ কিলোগ্রাম কিংবা তার বেশি হতে হবে।</li>\r\n	<li>মহিলাদের ক্ষেত্রে ৪ মাস অন্তর-অন্তর, পুরুষদের ক্ষেত্রে ৩ মাস অন্তর অন্তর রক্ত-দান করা যায়।</li>\r\n	<li>রক্তে হিমোগ্লোবিনের পরিমাণ, রক্তচাপ ও শরীরের তাপমাত্রা স্বাভাবিক থাকতে হবে।</li>\r\n	<li>শ্বাস-প্রশ্বাসজনিত রোগ এ্যাজমা, হাপানি যাদের আছে তারা রক্ত দিতে পারবেন না।</li>\r\n</ul>', 'upcoming_events', 'About', 'EVENTS_9.png', 3, '2017-07-17 20:20:36', '2017-06-01 16:43:02'),
(8, 'Medical Camp', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit&nbsp;</p>', 'recent_events', 'doctor', 'EVENTS_8.jpg', 3, '2017-07-17 20:16:44', '2017-07-12 11:53:44'),
(9, 'title', '<p>jhtyd</p>', 'upcoming_events', 'home', 'EVENTS_9.png', 3, '2017-07-17 20:16:35', '2017-07-17 12:47:46'),
(10, 'যে কথাকে কাজে লাগাতে চাও', '<p>যে কথাকে কাজে লাগাতে চাও, তাকে কাজে লাগানোর কথা চিন্তা করার আগে ভাবো, তুমি কি সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।</p>', 'news', 'home', 'NEWS_10.jpg', 3, '2017-07-18 18:04:53', '2017-07-18 12:04:53'),
(11, 'কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে?', '<p>কোনো কথা শোনামাত্রই কি তুমি তা বিশ্বাস করবে? হয়তো বলবে, করবে, হয়তো বলবে &ldquo;আমি করবো না।&rdquo; হ্যা, &ldquo;আমি করবো না&rdquo; বললেই সবকিছু অস্বীকার করা যায় না, হয়তো তুমি মনের গহীন গভীর থেকে ঠিকই বিশ্বাস করতে শুরু করেছো সেই কথাটি, কিন্তু মুখে অস্বীকার করছো। তাই সচেতন থাকো, তুমি কী ভাবছো&mdash; তার প্রতি; সচেতন থাকো, তুমি কি আসলেই বিশ্বাস করতে চলেছো ঐ কথাটি&hellip; শুধু এতটুকু বলি, যা-ই বিশ্বাস করো না কেন, আগে যাচাই করে নাও; আর এতে চাই তোমার প্রত্যুৎপন্নমতিত্ব।</p>', 'news', 'home', 'NEWS_11.jpg', 3, '2017-07-18 18:06:16', '2017-07-18 12:06:16'),
(12, 'তাই কোন কথাটি কাজে লাগবে', '<p>তাই কোন কথাটি কাজে লাগবে, তা নির্ধারণ করবে তুমি&mdash; হ্যাঁ, তুমি। হয়তো সামান্য ক&rsquo;টা বাংলা অক্ষর: খন্ড-ত, অনুস্বার, বিঃসর্গ কিংবা চন্দ্রবিন্দু&mdash; কিন্তু যদি তুমি বিশ্বাস করো, তাহলে হয়তো তুমি তা দিয়েই তৈরি করতে পারো এক উচ্চমার্গীয় মহাকাব্য- এক চিরসবুজ অর্ঘ্য। রচিত হতে পারে পৃথিবীর ১ম বিরাম চিহ্নের ইতিকথা &ndash; এক নতুন ঊষা। &hellip;মহাকাব্য লিখতে ঋষি-মুনি হওয়া লাগে না।</p>', 'news', 'home', 'NEWS_12.jpg', 3, '2017-07-18 18:07:23', '2017-07-18 12:07:23'),
(13, 'হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু', '<p>হ্যাঁ, এই লেখার মাঝেই আছে অনেক কিছু। যদি তুমি মনে করো, এটা তোমার কাজে লাগবে, তাহলে তা লাগবে কাজে। নিজের ভাষায় লেখা দেখতে অভ্যস্ত হও। মনে রাখবে লেখা অর্থহীন হয়, যখন তুমি তাকে অর্থহীন মনে করো; আর লেখা অর্থবোধকতা তৈরি করে, যখন তুমি তাতে অর্থ ঢালো।</p>', 'news', 'home', 'NEWS_13.png', 3, '2017-07-18 18:08:40', '2017-07-18 12:08:40'),
(14, 'তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো', '<p>সেই কথার জাদুতে আচ্ছন্ন হয়ে গেছ কিনা। তুমি যদি নিশ্চিত হও যে, তুমি কোনো মোহাচ্ছাদিত আবহে আবিষ্ট হয়ে অন্যের শেখানো বুলি আত্মস্থ করছো না, তাহলে তুমি নির্ভয়ে, নিশ্চিন্তে অগ্রসর হও। তুমি সেই কথাকে জানো, বুঝো, আত্মস্থ করো; মনে রাখবে, যা অনুসরণ করতে চলেছো, তা আগে অনুধাবন করা জরুরি; এখানে কিংকর্তব্যবিমূঢ় হবার কোনো সুযোগ নেই।</p>', 'news', 'home', 'NEWS_14.png', 3, '2017-07-18 18:10:07', '2017-07-18 12:10:07'),
(15, 'Medical Camp 22', '<p>Lorem ipsum dolor sit amet, consectetuer a libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit&nbsp;</p>', 'recent_events', 'doctor', 'EVENTS_8.jpg', 3, '2017-07-17 20:16:44', '2017-07-12 11:53:44'),
(16, 'Medical Camp138', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius ', 'recent_events', 'doctor', 'EVENTS_8.jpg', 3, '2017-07-17 20:16:44', '2017-07-12 11:53:44'),
(17, 'Medical Camp224', 'tur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ', 'recent_events', 'doctor', 'EVENTS_8.jpg', 3, '2017-07-17 20:16:44', '2017-07-12 11:53:44'),
(18, 'Medical Camp350', '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit&nbsp;</p>', 'recent_events', 'doctor', 'EVENTS_8.jpg', 3, '2017-07-17 20:16:49', '2017-07-12 11:53:44'),
(19, 'Medical Camp430', 'enean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate egam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit&nbsp;</p>', 'recent_events', 'doctor', 'EVENTS_8.jpg', 3, '2017-07-17 20:16:50', '2017-07-12 11:53:44'),
(20, '৩০ বছরের পর হার্ট ভালো রাখার সাত উপায়', '<p>৩০ বছরে পা দেওয়ার পরপর জীবনের চাপগুলো হঠাৎ করেই যেন বাড়তে থাকে। জীবন অনেকটাই জটিল হয়ে পড়ে। এ সময় ক্যারিয়ারের চাপ, সাংসারিক চাপ সমান তালে বাড়তে থাকে। এই চেপে বসা পরিস্থিতি হৃদরোগের ঝুঁকি বাড়ায়। তবে কিছু বিষয় আছে যেগুলো মেনে চললে হৃদরোগের ঝুঁকি অনেকটাই এড়িয়ে জীবন চমৎকার উপভোগ করা যায়। টাইমস অব ইন্ডিয়া জানিয়েছে এই বাড়ন্ত বয়সে হার্ট ভালো রাখার কিছু পরামর্শ।</p>\r\n\r\n<p><strong>১. চাপ এড়ান</strong><br />\r\nঅফিসের কাজের চাপ, পারিবারিক চাপ এড়ানো এত সহজ নয়। তবে এগুলোকে সামলাবেন কীভাবে সেটা তো শেখা যায়। যত রিল্যাক্স থাকবেন, শরীর তত চাপ নিয়ন্ত্রণ শিখবে। গবেষকরা বলেন, যেকোনো ধরনের ব্যায়াম চাপ দূর করে আপনাকে হালকা রাখতে সাহায্য করবে। চাপমুক্ত থাকতে যেটা আপনি পছন্দ করেন, এমন কোনো ব্যায়াম বেছে নিন। এ ছাড়া মেডিটেশন করুন বা পছন্দের কিছু করুন যা চাপমুক্ত রাখতে সাহায্য করবে।</p>\r\n\r\n<p><strong>২. নিয়মিত ব্যায়াম করুন</strong><br />\r\n৩০ বছরের পর হার্ট ভালো রাখতে নিয়মিত ব্যায়াম করা জরুরি। প্রতিদিন ১৫ থেকে ৩০ মিনিট ব্যায়াম হার্টকে ভালো রাখে। এটা আপনাকে ওজন নিয়ন্ত্রণে রাখতেও সাহায্য করবে, যা হার্ট ভালো রাখার আরেকটি বিষয়।</p>\r\n\r\n<p><strong>৩. স্বাস্থ্যকর খাবার খান</strong><br />\r\nছুটির দিনগুলোতে পরিবার বা বন্ধুদের সাথে কিংবা অফিসে কাজের চাপে আমরা অনেক সময়ই অস্বাস্থ্যকর খাবার খাই।বিশেষজ্ঞরা বলেন, হার্ট ভালো রাখতে এগুলো খাওয়া বাদ দেওয়া উচিত। এই অস্বাস্থ্যকর খাবার ক্যালোরি এবং কোলেস্টেরল বাড়াবে এবং হৃদরোগের ঝুঁকি তৈরি করবে। আপনার খাদ্যতালিকায় প্রোটিন, ওমেগা-৩ ফ্যাটি এসিড সমৃদ্ধ খাবার রাখবেন। তবে লাল মাংস (খাসি, গরু) খাওয়া এড়িয়ে চলুন।</p>\r\n\r\n<p><strong>৪. ভালোভাবে ঘুমান</strong><br />\r\nভালো ঘুম শরীরের জন্য খুবই জরুরি। ভালোভাবে না ঘুমালে স্ট্রোক এবং কার্ডিওভাসকুলার রোগের ঝুঁকি বেড়ে যায়। নির্দিষ্ট সময় ঘুমাতে যান এবং ঘুম থেকে উঠুন। ঘুমের আগে মদ্যপান, ধূমপান এবং ভারি খাবার পরিহার করুন।</p>\r\n\r\n<p>৫. সকালের নাস্তা অবশ্যই<br />\r\nসকালের নাস্তা কখনোই এড়ানো যাবে না। স্বাস্থ্যকর এবং পুষ্টিগুণসম্পন্ন সকালের নাস্তা খাওয়া খুবই জরুরি। ভালোভাবে সকালের নাস্তা করলে এটি সারা দিন শরীরকে কর্মক্ষম রাখতে সাহায্য করবে।</p>', 'recent_events', 'home', 'RECENT_EVENTS_20.jpg', 3, '2017-07-19 19:02:29', '2017-07-19 13:02:29'),
(21, '10 বছরের পর হার্ট ভালো রাখার সাত উপায়', '<p>৩০ বছরে পা দেওয়ার পরপর জীবনের চাপগুলো হঠাৎ করেই যেন বাড়তে থাকে। জীবন অনেকটাই জটিল হয়ে পড়ে। এ সময় ক্যারিয়ারের চাপ, সাংসারিক চাপ সমান তালে বাড়তে থাকে। এই চেপে বসা পরিস্থিতি হৃদরোগের ঝুঁকি বাড়ায়। তবে কিছু বিষয় আছে যেগুলো মেনে চললে হৃদরোগের ঝুঁকি অনেকটাই এড়িয়ে জীবন চমৎকার উপভোগ করা যায়। টাইমস অব ইন্ডিয়া জানিয়েছে এই বাড়ন্ত বয়সে হার্ট ভালো রাখার কিছু পরামর্শ।</p>\r\n\r\n<p><strong>১. চাপ এড়ান</strong><br />\r\nঅফিসের কাজের চাপ, পারিবারিক চাপ এড়ানো এত সহজ নয়। তবে এগুলোকে সামলাবেন কীভাবে সেটা তো শেখা যায়। যত রিল্যাক্স থাকবেন, শরীর তত চাপ নিয়ন্ত্রণ শিখবে। গবেষকরা বলেন, যেকোনো ধরনের ব্যায়াম চাপ দূর করে আপনাকে হালকা রাখতে সাহায্য করবে। চাপমুক্ত থাকতে যেটা আপনি পছন্দ করেন, এমন কোনো ব্যায়াম বেছে নিন। এ ছাড়া মেডিটেশন করুন বা পছন্দের কিছু করুন যা চাপমুক্ত রাখতে সাহায্য করবে।</p>\r\n\r\n<p><strong>২. নিয়মিত ব্যায়াম করুন</strong><br />\r\n৩০ বছরের পর হার্ট ভালো রাখতে নিয়মিত ব্যায়াম করা জরুরি। প্রতিদিন ১৫ থেকে ৩০ মিনিট ব্যায়াম হার্টকে ভালো রাখে। এটা আপনাকে ওজন নিয়ন্ত্রণে রাখতেও সাহায্য করবে, যা হার্ট ভালো রাখার আরেকটি বিষয়।</p>\r\n\r\n<p><strong>৩. স্বাস্থ্যকর খাবার খান</strong><br />\r\nছুটির দিনগুলোতে পরিবার বা বন্ধুদের সাথে কিংবা অফিসে কাজের চাপে আমরা অনেক সময়ই অস্বাস্থ্যকর খাবার খাই।বিশেষজ্ঞরা বলেন, হার্ট ভালো রাখতে এগুলো খাওয়া বাদ দেওয়া উচিত। এই অস্বাস্থ্যকর খাবার ক্যালোরি এবং কোলেস্টেরল বাড়াবে এবং হৃদরোগের ঝুঁকি তৈরি করবে। আপনার খাদ্যতালিকায় প্রোটিন, ওমেগা-৩ ফ্যাটি এসিড সমৃদ্ধ খাবার রাখবেন। তবে লাল মাংস (খাসি, গরু) খাওয়া এড়িয়ে চলুন।</p>\r\n\r\n<p><strong>৪. ভালোভাবে ঘুমান</strong><br />\r\nভালো ঘুম শরীরের জন্য খুবই জরুরি। ভালোভাবে না ঘুমালে স্ট্রোক এবং কার্ডিওভাসকুলার রোগের ঝুঁকি বেড়ে যায়। নির্দিষ্ট সময় ঘুমাতে যান এবং ঘুম থেকে উঠুন। ঘুমের আগে মদ্যপান, ধূমপান এবং ভারি খাবার পরিহার করুন।</p>\r\n\r\n<p>৫. সকালের নাস্তা অবশ্যই<br />\r\nসকালের নাস্তা কখনোই এড়ানো যাবে না। স্বাস্থ্যকর এবং পুষ্টিগুণসম্পন্ন সকালের নাস্তা খাওয়া খুবই জরুরি। ভালোভাবে সকালের নাস্তা করলে এটি সারা দিন শরীরকে কর্মক্ষম রাখতে সাহায্য করবে।</p>', 'recent_events', 'home', 'RECENT_EVENTS_20.jpg', 3, '2017-07-19 19:02:29', '2017-07-19 13:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `sortname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(2) UNSIGNED NOT NULL,
  `division_row_id` int(2) UNSIGNED NOT NULL,
  `district_name` varchar(30) NOT NULL,
  `district_name_bn` varchar(50) NOT NULL,
  `lat` double NOT NULL,
  `lon` double NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_row_id`, `district_name`, `district_name_bn`, `lat`, `lon`, `website`) VALUES
(1, 3, 'Dhaka', 'ঢাকা', 23.7115253, 90.4111451, 'www.dhaka.gov.bd'),
(2, 3, 'Faridpur', 'ফরিদপুর', 23.6070822, 89.8429406, 'www.faridpur.gov.bd'),
(3, 3, 'Gazipur', 'গাজীপুর', 24.0022858, 90.4264283, 'www.gazipur.gov.bd'),
(4, 3, 'Gopalganj', 'গোপালগঞ্জ', 23.0050857, 89.8266059, 'www.gopalganj.gov.bd'),
(5, 3, 'Jamalpur', 'জামালপুর', 24.937533, 89.937775, 'www.jamalpur.gov.bd'),
(6, 3, 'Kishoreganj', 'কিশোরগঞ্জ', 24.444937, 90.776575, 'www.kishoreganj.gov.bd'),
(7, 3, 'Madaripur', 'মাদারীপুর', 23.164102, 90.1896805, 'www.madaripur.gov.bd'),
(8, 3, 'Manikganj', 'মানিকগঞ্জ', 0, 0, 'www.manikganj.gov.bd'),
(9, 3, 'Munshiganj', 'মুন্সিগঞ্জ', 0, 0, 'www.munshiganj.gov.bd'),
(10, 3, 'Mymensingh', 'ময়মনসিং', 0, 0, 'www.mymensingh.gov.bd'),
(11, 3, 'Narayanganj', 'নারায়াণগঞ্জ', 23.63366, 90.496482, 'www.narayanganj.gov.bd'),
(12, 3, 'Narsingdi', 'নরসিংদী', 23.932233, 90.71541, 'www.narsingdi.gov.bd'),
(13, 3, 'Netrokona', 'নেত্রকোনা', 24.870955, 90.727887, 'www.netrokona.gov.bd'),
(14, 3, 'Rajbari', 'রাজবাড়ি', 23.7574305, 89.6444665, 'www.rajbari.gov.bd'),
(15, 3, 'Shariatpur', 'শরীয়তপুর', 0, 0, 'www.shariatpur.gov.bd'),
(16, 3, 'Sherpur', 'শেরপুর', 25.0204933, 90.0152966, 'www.sherpur.gov.bd'),
(17, 3, 'Tangail', 'টাঙ্গাইল', 0, 0, 'www.tangail.gov.bd'),
(18, 5, 'Bogra', 'বগুড়া', 24.8465228, 89.377755, 'www.bogra.gov.bd'),
(19, 5, 'Joypurhat', 'জয়পুরহাট', 0, 0, 'www.joypurhat.gov.bd'),
(20, 5, 'Naogaon', 'নওগাঁ', 0, 0, 'www.naogaon.gov.bd'),
(21, 5, 'Natore', 'নাটোর', 24.420556, 89.000282, 'www.natore.gov.bd'),
(22, 5, 'Nawabganj', 'নবাবগঞ্জ', 24.5965034, 88.2775122, 'www.chapainawabganj.gov.bd'),
(23, 5, 'Pabna', 'পাবনা', 23.998524, 89.233645, 'www.pabna.gov.bd'),
(24, 5, 'Rajshahi', 'রাজশাহী', 0, 0, 'www.rajshahi.gov.bd'),
(25, 5, 'Sirajgonj', 'সিরাজগঞ্জ', 24.4533978, 89.7006815, 'www.sirajganj.gov.bd'),
(26, 6, 'Dinajpur', 'দিনাজপুর', 25.6217061, 88.6354504, 'www.dinajpur.gov.bd'),
(27, 6, 'Gaibandha', 'গাইবান্ধা', 25.328751, 89.528088, 'www.gaibandha.gov.bd'),
(28, 6, 'Kurigram', 'কুড়িগ্রাম', 25.805445, 89.636174, 'www.kurigram.gov.bd'),
(29, 6, 'Lalmonirhat', 'লালমনিরহাট', 0, 0, 'www.lalmonirhat.gov.bd'),
(30, 6, 'Nilphamari', 'নীলফামারী', 25.931794, 88.856006, 'www.nilphamari.gov.bd'),
(31, 6, 'Panchagarh', 'পঞ্চগড়', 26.3411, 88.5541606, 'www.panchagarh.gov.bd'),
(32, 6, 'Rangpur', 'রংপুর', 25.7558096, 89.244462, 'www.rangpur.gov.bd'),
(33, 6, 'Thakurgaon', 'ঠাকুরগাঁও', 26.0336945, 88.4616834, 'www.thakurgaon.gov.bd'),
(34, 1, 'Barguna', 'বরগুনা', 0, 0, 'www.barguna.gov.bd'),
(35, 1, 'Barisal', 'বরিশাল', 0, 0, 'www.barisal.gov.bd'),
(36, 1, 'Bhola', 'ভোলা', 22.685923, 90.648179, 'www.bhola.gov.bd'),
(37, 1, 'Jhalokati', 'ঝালকাঠি', 0, 0, 'www.jhalakathi.gov.bd'),
(38, 1, 'Patuakhali', 'পটুয়াখালী', 22.3596316, 90.3298712, 'www.patuakhali.gov.bd'),
(39, 1, 'Pirojpur', 'পিরোজপুর', 0, 0, 'www.pirojpur.gov.bd'),
(40, 2, 'Bandarban', 'বান্দরবান', 22.1953275, 92.2183773, 'www.bandarban.gov.bd'),
(41, 2, 'Brahmanbaria', 'ব্রাহ্মণবাড়িয়া', 23.9570904, 91.1119286, 'www.brahmanbaria.gov.bd'),
(42, 2, 'Chandpur', 'চাঁদপুর', 23.2332585, 90.6712912, 'www.chandpur.gov.bd'),
(43, 2, 'Chittagong', 'চট্টগ্রাম', 22.335109, 91.834073, 'www.chittagong.gov.bd'),
(44, 2, 'Comilla', 'কুমিল্লা', 23.4682747, 91.1788135, 'www.comilla.gov.bd'),
(45, 2, 'Cox''s Bazar', 'কক্স বাজার', 0, 0, 'www.coxsbazar.gov.bd'),
(46, 2, 'Feni', 'ফেনী', 23.023231, 91.3840844, 'www.feni.gov.bd'),
(47, 2, 'Khagrachari', 'খাগড়াছড়ি', 23.119285, 91.984663, 'www.khagrachhari.gov.bd'),
(48, 2, 'Lakshmipur', 'লক্ষ্মীপুর', 22.942477, 90.841184, 'www.lakshmipur.gov.bd'),
(49, 2, 'Noakhali', 'নোয়াখালী', 22.869563, 91.099398, 'www.noakhali.gov.bd'),
(50, 2, 'Rangamati', 'রাঙ্গামাটি', 0, 0, 'www.rangamati.gov.bd'),
(51, 7, 'Habiganj', 'হবিগঞ্জ', 24.374945, 91.41553, 'www.habiganj.gov.bd'),
(52, 7, 'Maulvibazar', 'মৌলভীবাজার', 24.482934, 91.777417, 'www.moulvibazar.gov.bd'),
(53, 7, 'Sunamganj', 'সুনামগঞ্জ', 25.0658042, 91.3950115, 'www.sunamganj.gov.bd'),
(54, 7, 'Sylhet', 'সিলেট', 24.8897956, 91.8697894, 'www.sylhet.gov.bd'),
(55, 4, 'Bagerhat', 'বাগেরহাট', 22.651568, 89.785938, 'www.bagerhat.gov.bd'),
(56, 4, 'Chuadanga', 'চুয়াডাঙ্গা', 23.6401961, 88.841841, 'www.chuadanga.gov.bd'),
(57, 4, 'Jessore', 'যশোর', 23.16643, 89.2081126, 'www.jessore.gov.bd'),
(58, 4, 'Jhenaidah', 'ঝিনাইদহ', 23.5448176, 89.1539213, 'www.jhenaidah.gov.bd'),
(59, 4, 'Khulna', 'খুলনা', 22.815774, 89.568679, 'www.khulna.gov.bd'),
(60, 4, 'Kushtia', 'কুষ্টিয়া', 23.901258, 89.120482, 'www.kushtia.gov.bd'),
(61, 4, 'Magura', 'মাগুরা', 23.487337, 89.419956, 'www.magura.gov.bd'),
(62, 4, 'Meherpur', 'মেহেরপুর', 23.762213, 88.631821, 'www.meherpur.gov.bd'),
(63, 4, 'Narail', 'নড়াইল', 23.172534, 89.512672, 'www.narail.gov.bd'),
(64, 4, 'Satkhira', 'সাতক্ষীরা', 0, 0, 'www.satkhira.gov.bd');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(2) UNSIGNED NOT NULL,
  `country_row_id` varchar(30) DEFAULT NULL,
  `division_name` varchar(30) NOT NULL,
  `division_name_bn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `country_row_id`, `division_name`, `division_name_bn`) VALUES
(1, '1', 'Barisal', 'বরিশাল'),
(2, '1', 'Chittagong', 'চট্টগ্রাম'),
(3, '1', 'Dhaka', 'ঢাকা'),
(4, '1', 'Khulna', 'খুলনা'),
(5, '1', 'Rajshahi', 'রাজশাহী'),
(6, '1', 'Rangpur', 'রংপুর'),
(7, '1', 'Sylhet', 'সিলেট');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `hospital` varchar(255) NOT NULL,
  `speacilist` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `profile_photo` text NOT NULL,
  `preasent_address` text NOT NULL,
  `doctor_detail` text NOT NULL,
  `chamber_address` varchar(255) NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `designation`, `hospital`, `speacilist`, `phone`, `email`, `gender`, `profile_photo`, `preasent_address`, `doctor_detail`, `chamber_address`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Dr. Jaman', 'profrssor', 'IBN SINA', 'Neuro', '018456935', 'Dhaka', '', '', '', '', 'Basabo', 0, '2017-06-21 00:01:35', 0, '2017-06-21 00:01:35'),
(2, 'Rashed Jaman', '2', '1', '1', '017689565', 'jaman@gmail.com', 'male', '.jpg', 'dhaka', 'poca doctor', 'basabo', NULL, '2017-06-22 07:09:27', NULL, '2017-06-20 19:44:51'),
(3, 'Shaheen', '3', '9', '7', '345345242', 'shaheen@gmail.com', 'male', 'C:\\xampp\\tmp\\phpAA48.tmp', 'dfksehfgshfgisfh', 'dfwefbwejkh', 'efawekfhgweukfgy', NULL, '2017-06-20 19:45:49', NULL, '2017-06-20 19:45:49'),
(4, 'Shaheen', '3', '9', '7', '345345242', 'shaheen@gmail.com', 'male', 'C:\\xampp\\tmp\\php5C25.tmp', 'dfksehfgshfgisfh', 'dfwefbwejkh', 'efawekfhgweukfgy', NULL, '2017-06-20 19:46:35', NULL, '2017-06-20 19:46:35'),
(5, 'Shaheen', '3', '9', '7', '345345242', 'shaheen@gmail.com', 'male', 'C:\\xampp\\tmp\\php8856.tmp', 'dfksehfgshfgisfh', 'dfwefbwejkh', 'efawekfhgweukfgy', NULL, '2017-06-20 19:46:46', NULL, '2017-06-20 19:46:46'),
(6, 'Shaheen', '3', '9', '7', '345345242', 'shaheen@gmail.com', 'male', 'C:\\xampp\\tmp\\php35BE.tmp', 'dfksehfgshfgisfh', 'dfwefbwejkh', 'efawekfhgweukfgy', NULL, '2017-06-20 19:47:31', NULL, '2017-06-20 19:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_degrees`
--

CREATE TABLE `doctor_degrees` (
  `id` int(11) NOT NULL,
  `abbr` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_degrees`
--

INSERT INTO `doctor_degrees` (`id`, `abbr`, `degree`, `updated_at`, `created_at`) VALUES
(1, 'M.B.B.S', 'Bachelor of Medicine/Bachelor of Surgery', '2017-06-22 07:58:52', '2017-06-21 20:27:18'),
(2, 'B.D.S', 'Bachelor of Dental Surgery', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(3, 'B.Pharma', 'Bachelor of Pharmacy', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(4, 'B.P.T ', 'Physiotherapy', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(5, 'B.O.T', 'Occupational Therapy', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(6, 'B.H.M.S', 'Homeopathy Medicine', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(7, 'B.U.M.S', 'Unani Medicine', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(8, NULL, 'Optometry', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(9, NULL, 'Ophthalmic Assistant Medical course', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(12, 'D. Pharma', 'AyurvedicSiddha Medicine', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(13, NULL, 'Lab Technicians', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(14, NULL, 'Sanitary Inspector Medical course', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(15, NULL, 'General Nursing Training Medical course', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(16, NULL, 'Orthopedist Medical course', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(17, NULL, 'Dental Mechanic Medical course', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(18, NULL, 'Dental Hygienist Medical course', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(19, NULL, 'Bachelor of Occupationaltherapy', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(20, NULL, 'Radiological Assistant', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(21, NULL, 'Radiography', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(22, NULL, 'Nuclear Medicine Technology', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(23, NULL, 'B.Sc Nursing', '2017-06-21 20:27:18', '2017-06-21 20:27:18'),
(24, 'TP', 'Tia Pakhi', '2017-06-21 14:37:44', '2017-06-21 14:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_designations`
--

CREATE TABLE `doctor_designations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_designations`
--

INSERT INTO `doctor_designations` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Professor', '2017-07-16 05:57:58', '2017-06-21 20:14:14'),
(2, 'Associate Professor', '2017-06-21 20:14:14', '2017-06-21 20:14:14'),
(3, 'Assistant Professor', '2017-06-21 20:14:14', '2017-06-21 20:14:14'),
(4, 'Lecturer', '2017-06-21 20:14:14', '2017-06-21 20:14:14'),
(5, 'Sr. Lecturer', '2017-06-21 20:14:14', '2017-06-21 20:14:14'),
(6, 'Professor & Head', '2017-06-21 20:14:14', '2017-06-21 20:14:14'),
(7, 'Meem', '2017-06-21 14:16:31', '2017-06-21 14:16:31'),
(8, 'asdf', '2017-06-21 14:19:33', '2017-06-21 14:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_specialities`
--

CREATE TABLE `doctor_specialities` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_specialities`
--

INSERT INTO `doctor_specialities` (`id`, `name`) VALUES
(1, 'Allergy and immunology'),
(2, 'Adolescent medicine'),
(3, 'Anaesthesiology'),
(4, 'Aerospace medicine'),
(5, 'Pathology'),
(6, 'Cardiothoracic surgery'),
(7, 'Clinical neurophysiology'),
(8, 'Colon and Rectal Surgery'),
(9, 'Dermatology-Venereology'),
(10, 'Emergency medicine'),
(11, 'Endocrinology'),
(12, 'Gastroenterology'),
(13, 'General practice'),
(14, 'Geriatrics'),
(15, 'Obstetrics and gynecology'),
(16, 'Health informatics'),
(17, 'Hospice and palliative medicine'),
(18, 'Infectious disease'),
(19, 'Internal medicine'),
(20, 'Interventional radiology'),
(21, 'Microbiology'),
(22, 'Nephrology'),
(23, 'Neurology'),
(24, 'Neurosurgery'),
(25, 'Nuclear medicine'),
(26, 'Occupational medicine'),
(27, 'Ophthalmology'),
(28, 'Orthodontics'),
(29, 'Orthopaedics'),
(30, 'Oral and maxillofacial surgery'),
(31, 'Otorhinolaryngology'),
(32, 'Paediatrics'),
(33, 'Paediatric allergology'),
(34, 'Paediatric cardiology'),
(35, 'Paediatric endocrinology and diabetes'),
(36, 'Paediatric gastroenterology '),
(37, 'hepatology and nutrition'),
(38, 'Paediatric haematology and oncology'),
(39, 'Paediatric infectious diseases'),
(40, 'Neonatology'),
(41, 'Paediatric nephrology'),
(42, 'Paediatric respiratory medicine'),
(43, 'Paediatric rheumatology'),
(44, 'Paediatric surgery'),
(45, 'Physical medicine and rehabilitation'),
(46, 'Plastic'),
(47, ' reconstructive and aesthetic surgery'),
(48, 'Pulmonology'),
(49, 'Psychiatry'),
(50, 'Public Health'),
(51, 'Radiation Oncology'),
(52, 'Radiology'),
(53, 'Sports medicine'),
(54, 'Neuroradiology'),
(55, 'General surgery'),
(56, 'Urology'),
(57, 'Vascular surgery');

-- --------------------------------------------------------

--
-- Table structure for table `donateblood`
--

CREATE TABLE `donateblood` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_place` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `last_donate_date` date NOT NULL,
  `disease` text NOT NULL,
  `donate_blood` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci,
  `pic_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `blood_group` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `last_donation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_donor` int(11) DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `division` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thana` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verification` int(11) DEFAULT NULL,
  `lastLat` double DEFAULT NULL,
  `lastLng` double DEFAULT NULL,
  `fcm_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fcm_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fcm_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pro_visible` int(11) DEFAULT NULL,
  `called_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `called_today` int(11) DEFAULT NULL,
  `donations_number` int(11) DEFAULT NULL,
  `user_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `already_donated` int(11) DEFAULT NULL,
  `autopro_visible` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `singup_steps` int(11) DEFAULT NULL,
  `post_code` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rank` int(11) DEFAULT NULL,
  `web_url` text COLLATE utf8_unicode_ci,
  `fb_url` text COLLATE utf8_unicode_ci,
  `profile_photo` text COLLATE utf8_unicode_ci,
  `religion` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_physically_disble` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_available` tinyint(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `phone`, `password`, `pic_path`, `fname`, `lname`, `blood_group`, `birth_date`, `age`, `last_donation`, `new_donor`, `email`, `division`, `district`, `thana`, `address`, `latitude`, `longitude`, `code`, `verification`, `lastLat`, `lastLng`, `fcm_email`, `fcm_uid`, `fcm_token`, `pro_visible`, `called_date`, `called_today`, `donations_number`, `user_type`, `gender`, `already_donated`, `autopro_visible`, `singup_steps`, `post_code`, `rank`, `web_url`, `fb_url`, `profile_photo`, `religion`, `is_physically_disble`, `nationality`, `nid`, `status`, `is_available`, `updated_at`, `created_at`, `updated_by`, `created_by`) VALUES
(1, '01910077628', '123', 'public/images/profile/rashed.jpg', 'Md', 'Rasheduzzaman', 'A+', '1992-07-14', 24, '2016-05-12', 1, 'jmrashed@gmail.com', 'Dhaka', 'Dhaka', 'Ramna', '453, Green Way Rd, DHaka', NULL, NULL, NULL, NULL, 11, NULL, NULL, NULL, NULL, 1, NULL, NULL, 5, NULL, 'Male', NULL, NULL, NULL, '1217', 5, NULL, NULL, 'b.jpg', NULL, NULL, NULL, NULL, NULL, 1, '2017-07-21 17:17:54', '0000-00-00 00:00:00', NULL, NULL),
(2, '01923589277', 'anisur', 'profileImages/anis.jpg', 'anis', 'mizi', 'A+', '1989-07-14', 28, '2017-07-14', 1, 'an@gmail.com', 'Dhaka', 'Dhaka', 'Adabor', 'Mohanagar Middle Rd 2, Dhaka 1212, Bangladesh', 23.7663383, 90.4165958, '36438', 1, 23.7663383, 90.4165958, 'test21@gmail.com', 'avIoHO42GrdjcHHFuJB11cETsQE3', 'fEZReXUJXLc:APA91bFzM-sI_CDDtdRI8OkvXli9GBvSccpMAvcBJQr-JFBLMorR0BP2YFPNh6PX9WxqRZm86cpvBUapWUbyf5P8KdiiI8Mr_D8Z34uPDb_nOKYRgPbPU2XWoJkVcz-q_ZYTNv85Reg8', 1, 'na', 0, 0, 'donor', 'Male', 0, 'na', 3, 'na', 1, 'na', 'na', 'a.jpg', 'na', 'na', 'na', 'na', 'na', 1, '2017-07-21 17:17:44', '2014-08-11 23:14:54', 1, 1),
(3, '01923589278', 'anisur', 'profileImages/salam.jpg', 'salam', 'mizi', 'A-', '1991-07-14', 26, '2017-07-14', 1, 'salam@gmail.com', 'Dhaka', 'Dhaka', 'Adabor', 'Mohanagar Middle Rd 2, Dhaka 1212, Bangladesh', 23.782062399999997, 90.4160527, '95035', 1, 23.782062399999997, 90.4160527, 'test20@gmail.com', 'UvoewKHQkXOZ1Afzzv1Q182ybCI2', 'fa1DqrAZhvY:APA91bGKG3d-AA1NeE7bZjSAkSTWSZQbxLd-Y4yHd5S6TUr0KlXUixld45knPAuwXErucpzv68vfcXh9Y1rG-yTCUn1NGRdhiL34FBOps0emDu6nhzRvLc2j5eGqTG0da2bOnx2Paq-g', 1, 'na', 0, 0, 'admin', 'Male', 0, 'na', 3, 'na', 1, 'na', 'na', 'c.jpg', 'na', 'na', 'na', 'na', 'na', 1, '2017-07-21 17:18:02', '2014-08-11 23:14:54', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `donors_details`
--

CREATE TABLE `donors_details` (
  `id` int(11) NOT NULL,
  `donors_id` int(11) NOT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `school_passing_year` int(11) DEFAULT NULL,
  `school_passing_degree` varchar(255) DEFAULT NULL,
  `school_passing_result` double DEFAULT NULL,
  `college_name` varchar(255) NOT NULL,
  `college_passing_year` int(11) DEFAULT NULL,
  `college_passing_degree` varchar(255) DEFAULT NULL,
  `college_passing_result` double DEFAULT NULL,
  `university_name` varchar(255) DEFAULT NULL,
  `university_department` varchar(255) DEFAULT NULL,
  `university_passing_degree` varchar(255) DEFAULT NULL,
  `university_passing_year` int(11) DEFAULT NULL,
  `university_passing_result` double DEFAULT NULL,
  `donor_father_name` varchar(255) DEFAULT NULL,
  `donor_mother_name` varchar(255) DEFAULT NULL,
  `donor_birth_place` varchar(255) DEFAULT NULL,
  `donor_religion` varchar(255) DEFAULT NULL,
  `donor_is_physically_disabled` varchar(255) DEFAULT NULL,
  `donor_is_physically_problem` text,
  `donor_nationality` varchar(255) DEFAULT NULL,
  `donor_birthcertificateno` varchar(255) DEFAULT NULL,
  `donor_occupation` varchar(255) DEFAULT NULL,
  `donor_nid` varchar(255) DEFAULT NULL,
  `donor_emergency_contact_name` varchar(255) DEFAULT NULL,
  `emergency_contact_phone` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL,
  `question` text NOT NULL,
  `answer` longtext NOT NULL,
  `author_id` int(11) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `category`, `question`, `answer`, `author_id`, `create_datetime`) VALUES
(1, 'faq', 'Who is blood donner?', 'A blood donation occurs when a person voluntarily has blood drawn and used for transfusions and/or made into biopharmaceutical medications by a process called fractionation (separation of whole-blood components). Donation may be of whole blood (WB), or of specific components directly (the latter called apheresis).', 1, '2017-04-14 09:16:20'),
(2, 'faq', 'What is the blood donation?', 'Blood donation is a voluntary procedure. You agree to have blood drawn so that it can be given to someone who needs a blood transfusion. Millions of people need blood transfusions each year. Some may need blood during surgery.', 1, '2017-04-14 09:16:20'),
(3, 'faq', 'Can you give blood if you have a cold?\r\n', 'Cold symptoms may be similar, but colds are less likely to cause fever or headaches. You can''t donate blood if you have a fever, a productive cough, if you do not feel well, or if you are taking antibiotics to treat a sinus, throat, or lung infection.\r\n', 1, '2017-04-14 09:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `find_solutions`
--

CREATE TABLE `find_solutions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `last_blood_pressure` varchar(255) NOT NULL,
  `any_disease` text NOT NULL,
  `problems` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `is_solved` tinyint(2) DEFAULT NULL,
  `doctor_suggestion` text,
  `doctor_detail` text,
  `sort_order` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `find_solutions`
--

INSERT INTO `find_solutions` (`id`, `name`, `age`, `last_blood_pressure`, `any_disease`, `problems`, `email`, `phone`, `is_solved`, `doctor_suggestion`, `doctor_detail`, `sort_order`, `status`, `updated_at`, `updated_by`, `created_at`, `created_by`) VALUES
(1, 'Ashru', 21, '120/80', 'Many', 'Onek problem', 'ashru@gmail.com', '7046864888', NULL, NULL, NULL, NULL, NULL, '2017-07-11 07:17:55', NULL, '2017-07-11 13:17:55', NULL),
(2, 'Meem', 21, '130/90', 'yes', 'pathay problem', 'meem@gmail.com', '123965874', NULL, NULL, NULL, NULL, NULL, '2017-07-11 07:43:36', NULL, '2017-07-11 13:43:36', NULL),
(3, 'Rashed Jaman', 26, '100/80', 'no', 'onek problem bt jana nai', 'rashed@gmail.com', '789654123', NULL, NULL, NULL, NULL, NULL, '2017-07-11 07:45:00', NULL, '2017-07-11 13:45:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `gallery_name` varchar(255) DEFAULT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `page_name`, `gallery_name`, `updated_by`, `updated_at`, `created_at`) VALUES
(1, 'health', 'Health', 1, '2017-05-31 15:05:41', '2017-05-31 15:05:41'),
(2, 'doctor', 'Doctor', 1, '2017-05-31 15:07:16', '2017-05-31 15:07:16'),
(4, 'services', 'Services', 2, '2017-06-01 18:19:34', '2017-06-01 18:19:34'),
(5, 'blog', 'Blog', 2, '2017-06-01 18:35:44', '2017-06-01 18:35:44'),
(6, 'Home_Page', 'Blood Fighter', 2, '2017-07-11 18:45:37', '2017-07-11 18:45:37'),
(7, 'slider', 'Slider', 0, '2017-07-15 00:11:58', '2017-07-15 00:11:58'),
(8, 'slider', 'Slider', 2, '2017-07-15 00:12:21', '2017-07-15 00:12:21');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_details`
--

CREATE TABLE `gallery_details` (
  `id` int(11) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `photo_name` varchar(255) NOT NULL,
  `caption` text,
  `sub_caption` text,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_details`
--

INSERT INTO `gallery_details` (`id`, `gallery_id`, `photo_name`, `caption`, `sub_caption`, `updated_by`, `updated_at`, `created_at`) VALUES
(1, 6, '2017-07-12_1499838447.jpg', 'This is caption text.', 'Sub caption 1', 2, '2017-07-12 05:47:27', '2017-07-12 05:47:27'),
(2, 6, '2017-07-12_1499838476.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 05:47:56', '2017-07-12 05:47:56'),
(3, 6, '2017-07-12_1499838485.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 05:48:05', '2017-07-12 05:48:05'),
(4, 6, '2017-07-12_1499838493.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 05:48:13', '2017-07-12 05:48:13'),
(5, 6, '2017-07-12_1499838504.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 05:48:24', '2017-07-12 05:48:24'),
(6, 6, '2017-07-12_1499838519.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 05:48:39', '2017-07-12 05:48:39'),
(7, 6, '2017-07-12_1499838526.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 05:48:46', '2017-07-12 05:48:46'),
(8, 6, '2017-07-12_1499838533.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 05:48:53', '2017-07-12 05:48:53'),
(9, 6, '2017-07-12_1499838540.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 05:49:00', '2017-07-12 05:49:00'),
(10, 2, '2017-07-12_1499839273.png', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:01:14', '2017-07-12 06:01:14'),
(11, 2, '2017-07-12_1499839324.png', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:02:04', '2017-07-12 06:02:04'),
(12, 2, '2017-07-12_1499839378.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:02:58', '2017-07-12 06:02:58'),
(13, 2, '2017-07-12_1499839385.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:03:05', '2017-07-12 06:03:05'),
(14, 2, '2017-07-12_1499839394.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:03:14', '2017-07-12 06:03:14'),
(15, 2, '2017-07-12_1499839398.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:03:18', '2017-07-12 06:03:18'),
(16, 1, '2017-07-12_1499839490.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:04:50', '2017-07-12 06:04:50'),
(17, 1, '2017-07-12_1499839499.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:04:59', '2017-07-12 06:04:59'),
(18, 1, '2017-07-12_1499839504.png', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:05:04', '2017-07-12 06:05:04'),
(19, 1, '2017-07-12_1499839511.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:05:11', '2017-07-12 06:05:11'),
(20, 1, '2017-07-12_1499839516.jpg', 'This is caption text.', 'Sub caption ', 2, '2017-07-12 06:05:16', '2017-07-12 06:05:16'),
(21, 7, '2017-07-14_1500041889.jpg', 'This is caption text. 1', 'Sub caption 1', 2, '2017-07-14 14:18:09', '2017-07-14 14:18:09'),
(22, 7, '2017-07-14_1500041899.jpg', 'This is caption text. 2', 'Sub caption 2', 2, '2017-07-14 14:18:19', '2017-07-14 14:18:19'),
(23, 7, '2017-07-14_1500041906.jpg', 'This is caption text. 3', 'Sub caption 3', 2, '2017-07-14 14:18:26', '2017-07-14 14:18:26'),
(24, 7, '2017-07-14_1500041912.jpg', 'This is caption text. 4', 'Sub caption 4', 2, '2017-07-14 14:18:32', '2017-07-14 14:18:32'),
(25, 7, '2017-07-14_1500041920.jpg', 'This is caption text. 5', 'Sub caption 5', 2, '2017-07-14 14:18:40', '2017-07-14 14:18:40'),
(26, 7, '2017-07-14_1500041927.jpg', 'This is caption text. 6', 'Sub caption 6', 2, '2017-07-14 14:18:47', '2017-07-14 14:18:47');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `upazila` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `incharge_name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `division`, `district`, `upazila`, `location`, `phone`, `incharge_name`, `details`, `remember_token`, `updated_by`, `updated_at`, `created_by`, `created_at`) VALUES
(1, 'Ad-din Women''s Medical College Hospital, Dhaka', '3', '5', '173', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:40:43', 0, '2017-06-20 23:40:43'),
(2, 'Siddiqia Eye Foundation, Mymensingh', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', 'ratul2', 'asdf2', '', 0, '2017-07-16 05:56:35', 0, '2017-06-20 23:40:43'),
(3, 'Ad-din Sakina Medical College Hospital, Jessore', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:41:36', 0, '2017-06-20 23:41:36'),
(4, 'National Institute of Neuroscience', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(5, 'Aichi Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(6, 'Al Haramain Hospital, Sylhet', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(7, 'Ambia Memorial Hospital, Barisal', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(8, 'Anwer Khan Modern Hospital Ltd, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(9, 'Apollo Hospitals Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(10, 'Asgar Ali Hospital, Gandaria, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(11, 'Aysha Memorial Specialised Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(12, 'Bangabandhu Sheikh Mujib Medical University', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(13, 'Bangabandhu Memorial Hospital (BBMH), Chittagong', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(14, 'Bangladesh Spine & Orthopaedic General Hospital Ltd, Panthapath, Dhaka.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(15, 'Bangladesh Eye Hospital Ltd., Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(16, 'Bangladesh Medical College Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(17, 'Bangladesh Specialized Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(18, 'Basundhura Hospital (Pvt.) Ltd.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(19, 'BDR (Bangladesh Rifles) Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(20, 'BRB Hospital- Panthapath Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(21, 'Bangladesh Institute of Research and Rehabilitation for Diabetes, Endocrine and Metabolic Disorders (BIRDEM)', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(22, 'Cardio Care Specialized and General Hospital Ltd, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(23, 'CARe Hospital, Dhaka5', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(24, 'Care Zone Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(25, 'Catharsis Medical Centre Limited, Gazipur', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(26, 'Central Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(27, 'Chittagong Eye Infirmary and Training Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(28, 'Chittagong Maa-O-Shishu Hospital, Chittagong', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(29, 'Chittagong Medical College Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(30, 'CMH (Combined Military Hospital)', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(31, 'Comilla Medical College Hospital, Comilla', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(32, 'Community Based Medical College Hospital, Bangladesh (CBMCH, B) Mymensingh6', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(33, 'Continental Hospital Ltd.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(34, 'Coxs Bazar Hospital for Women & Children, Chittagong7', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(35, 'Duwell Medical', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(36, 'Dhaka Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(37, 'Dhaka Central International Medical College Hospital, Adabor, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(38, 'Dhaka Dental College and Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(39, 'Dhaka Medical College & Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(40, 'Dhaka National Medical College And Hospital Institute', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(41, 'Dhaka Shishu Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(42, 'Dr. Alauddin Ahmed Clinic, Jhalakati', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(43, 'Dinajpur Medical College Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(44, 'Eastern Hospital & Medical Research Centre', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(45, 'Esperto Health Care & Research Center, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(46, 'Holy Family Red Crescent Medical College Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(47, 'Greenland Hospital Limited, Sector - 10, Uttara, Dhaka.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(48, 'Gazi Medical College Hospital, Khulna', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(49, 'Genuine Cancer Hospital Limited, Chittagong', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(50, 'Gonoshasthaya Nagar Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(51, 'Government Homeopathic Medical College Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(52, 'Ibn Sina Hospital Sylhet Ltd', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(53, 'Ibn Sina Hospitals, Dhaka8', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(54, 'Institute of Child and Mother Health, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(55, 'Institute of Laser Surgery & Hospital, Dhaka9', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(56, 'Ispahani Islamia Eye Institute and Hospital (IIEI&H)10', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(57, 'Labaid Cardiac Hospital, Dhaka11', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(58, 'Khulna Medical College Hospital, Khulna', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(59, 'Labaid Specialized Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(60, 'Maa Nursing Home & Diagnostic Centre, Tangail', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(61, 'Mikrani Dental Banasree Dhaka (Dental Hospital), Dhaka1', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(62, 'Mojibunnessa Eye Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(63, 'Moulana Bhasani Medical College Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(64, 'Mymensingh Medical College Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(65, 'National Institute of Cardiovascular Diseases (NICVD)1', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(66, 'National Institute of Ear, Nose and Throat(ENT)1', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(67, 'National Institute of Kidney Disease & Urology1', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(68, 'National Institute of Mental Health1', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(69, 'Medinova Medical Services Ltd.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(70, 'National Institute of Preventive and Social Medicine1', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(71, 'Popular Specialized Hospital Ltd.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(72, 'Rajshahi Medical College Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(73, 'Rangpur Medical College Hospital, Rangpur', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(74, 'Rashmono General Hospital,Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(75, 'Royal Hospital and research Center Ltd., Chittagong', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(76, 'Royal Hospital And Research Center Ltd., Chittagong', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(77, 'Samorita Hospital Ltd.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(78, 'Saphena Womens Dental College & Hospital16', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(79, 'Shaheed Monsur Ali Medical College Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(80, 'Shalahuddin Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(81, 'Sheikh Fazilatunnesa Mujib Memorial KPJ Specialized Hospital & Nursing College', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(82, 'Shaheed Ziaur Rahman Medical College Hospital, Bogra', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(83, 'Sher-e-Bangla Medical College Hospital, Barisal', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(84, 'Sir Salimullah Medical College & Mitford Hospital, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(85, 'Square Hospital Ltd., Dhaka17', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(86, 'Sylhet Medical College Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(87, 'Sylhet Womens Medical College', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(88, 'Sylhet Eye Hospital & Laser Centre', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(89, 'Sylhet, M.A.G Osmani Medical College and Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(90, 'Sylhet, North East Medical College and Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(91, 'National Heart Foundation, Sylhet.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(92, 'Nurjahan Hospital Ltd, Sylhet.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(93, 'Oasis Hospital (Pvt) Ltd, Sylhet', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(94, 'Mount Adora Hospital, Sylhet.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(95, 'The Medical College for Women and Hospital', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(96, 'Union Specialized Hospital Limited, Aftabnagor, Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(97, 'United Hospital Ltd., Dhaka', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(98, 'Z.H. Sikder Women’s Medical College and Hospital (Pvt.) Ltd.', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', '', '', '', 0, '2017-06-20 23:47:52', 0, '2017-06-20 23:47:52'),
(99, 'aaaaaaaaaaaaaaa', '', '', '', 'Magh Bazar, Dhaka-1217', '01711889966', 'aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', NULL, NULL, '2017-06-21 09:43:44', NULL, '2017-06-21 09:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `link_url` varchar(255) NOT NULL,
  `link_name` varchar(255) NOT NULL,
  `link_target` varchar(255) NOT NULL,
  `link_image` varchar(255) NOT NULL,
  `post_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(11) NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `division`, `district`, `thana`) VALUES
(1, 'Dhaka', 'Dhaka', 'Adabor'),
(2, 'Dhaka', 'Dhaka', 'Badda'),
(3, 'Dhaka', 'Dhaka', 'Bangsal'),
(4, 'Dhaka', 'Dhaka', 'Bimanbandar'),
(5, 'Dhaka', 'Dhaka', 'Cantonment'),
(6, 'Dhaka', 'Dhaka', 'Chak Bazar'),
(7, 'Dhaka', 'Dhaka', 'Dakshinkhan'),
(8, 'Dhaka', 'Dhaka', 'Darus Salam'),
(9, 'Dhaka', 'Dhaka', 'Demra'),
(10, 'Dhaka', 'Dhaka', 'Dhamrai'),
(11, 'Dhaka', 'Dhaka', 'Dhanmondi'),
(12, 'Dhaka', 'Dhaka', 'Dohar'),
(13, 'Dhaka', 'Dhaka', 'Gendaria'),
(14, 'Dhaka', 'Dhaka', 'Gulshan'),
(15, 'Dhaka', 'Dhaka', 'Hazaribagh'),
(16, 'Dhaka', 'Dhaka', 'Jatrabari'),
(17, 'Dhaka', 'Dhaka', 'Kadamtali'),
(18, 'Dhaka', 'Dhaka', 'Kafrul'),
(19, 'Dhaka', 'Dhaka', 'Kalabagan'),
(20, 'Dhaka', 'Dhaka', 'Kamrangirchar'),
(21, 'Dhaka', 'Dhaka', 'Keraniganj'),
(22, 'Dhaka', 'Dhaka', 'Khilgaon'),
(23, 'Dhaka', 'Dhaka', 'khilkhet'),
(24, 'Dhaka', 'Dhaka', 'Kotwali'),
(25, 'Dhaka', 'Dhaka', 'Lalbagh'),
(26, 'Dhaka', 'Dhaka', 'Mirpur'),
(27, 'Dhaka', 'Dhaka', 'Mohammadpur'),
(28, 'Dhaka', 'Dhaka', 'Motijheel'),
(29, 'Dhaka', 'Dhaka', 'Nawabganj'),
(30, 'Dhaka', 'Dhaka', 'Newmarket'),
(31, 'Dhaka', 'Dhaka', 'Pallabi'),
(32, 'Dhaka', 'Dhaka', 'Paltan'),
(33, 'Dhaka', 'Dhaka', 'Ramna'),
(34, 'Dhaka', 'Dhaka', 'Rampura'),
(35, 'Dhaka', 'Dhaka', 'Sabujbagh'),
(36, 'Dhaka', 'Dhaka', 'Savar'),
(37, 'Dhaka', 'Dhaka', 'Shah Ali'),
(38, 'Dhaka', 'Dhaka', 'Shahbag'),
(39, 'Dhaka', 'Dhaka', 'Sher-e-Bangla Nagar'),
(40, 'Dhaka', 'Dhaka', 'Shyampur'),
(41, 'Dhaka', 'Dhaka', 'Sutrapur'),
(42, 'Dhaka', 'Dhaka', 'Tejgaon'),
(43, 'Dhaka', 'Dhaka', 'Mohakhali'),
(44, 'Dhaka', 'Dhaka', 'Tejgaon Industrial Area'),
(45, 'Dhaka', 'Dhaka', 'Turag'),
(46, 'Dhaka', 'Dhaka', 'Uttara'),
(47, 'Dhaka', 'Dhaka', 'Uttar Khan'),
(48, 'Dhaka', 'Faridpur', 'Alfadanga'),
(49, 'Dhaka', 'Faridpur', 'Bhanga'),
(50, 'Dhaka', 'Faridpur', 'Boalmari'),
(51, 'Dhaka', 'Faridpur', 'Charbhadrasan'),
(52, 'Dhaka', 'Faridpur', 'Faridpur Sadar'),
(53, 'Dhaka', 'Faridpur', 'Madhukhali'),
(54, 'Dhaka', 'Faridpur', 'Nagarkanda'),
(55, 'Dhaka', 'Faridpur', 'Sadarpur'),
(56, 'Dhaka', 'Faridpur', 'Saltha');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `sender_type` varchar(255) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `receiver_type` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `sender_type`, `receiver_id`, `receiver_type`, `message`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 2, 'donor', 303, 'admin', 'Need AB+Blood 6 for Mahedi', '2017-07-14 20:32:35', 'Sakib', '2017-07-14 20:32:35', 'Rashed'),
(2, 2, 'donor', 303, 'admin', 'Need AB+Blood 6 for Mahedi', '2017-07-14 20:32:35', 'Sakib', '2017-07-14 20:32:35', 'Rashed'),
(3, 2, 'donor', 303, 'admin', 'Need AB+Blood 6 for Mahedi', '2017-07-14 20:33:32', 'Sakib', '2017-07-14 20:33:32', 'Rashed'),
(4, 2, 'donor', 303, 'admin', 'Need AB+Blood 6 for Mahedi', '2017-07-14 20:36:30', 'Sakib', '2017-07-14 20:36:30', 'Rashed'),
(5, 2, 'donor', 303, 'admin', 'Need AB+Blood 6 for Mahedi', '2017-07-14 20:37:11', 'Sakib', '2017-07-14 20:37:11', 'Rashed'),
(6, 2, 'donor', 303, 'admin', 'Need AB+Blood 6 for Mahedi', '2017-07-14 20:37:30', 'Sakib', '2017-07-14 20:37:30', 'Rashed'),
(7, 2, 'donor', 303, 'admin', 'Need A+Blood 3 for Mohin', '2017-07-14 21:04:36', 'Sakib', '2017-07-14 21:04:36', 'Rashed'),
(8, 2, 'donor', 303, 'admin', 'Need A+Blood 2 for ', '2017-07-19 19:22:15', 'Sakib', '2017-07-19 19:22:15', 'Rashed'),
(9, 2, 'donor', 303, 'admin', 'Need O-Blood 100 for ', '2017-07-19 19:25:50', 'Sakib', '2017-07-19 19:25:50', 'Rashed'),
(10, 2, 'donor', 303, 'admin', 'Need B+Blood 6 for ', '2017-07-19 19:32:41', 'Sakib', '2017-07-19 19:32:41', 'Rashed');

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
(1, '2017_05_18_203004_create_country_state_city_tables', 1),
(2, '2017_06_08_081139_entrust_setup_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `more_about_bloods`
--

CREATE TABLE `more_about_bloods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_description` text NOT NULL,
  `long_description` text NOT NULL,
  `photo` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `more_about_bloods`
--

INSERT INTO `more_about_bloods` (`id`, `title`, `short_description`, `long_description`, `photo`, `slug`, `updated_at`) VALUES
(2, 'Blood Donor 247', 'Blood Donor 247 is a team of emergency response donors who pledge to give blood within 247 hours.', 'long description247', '.png', 'donor_24', '2017-07-21 09:57:16'),
(3, 'Give Platelets', 'Patients of Scotland rely on platelets including people with cancer and leukaemia', 'long description', '.jpg', 'platelets', '2017-07-21 10:00:55'),
(4, 'Blood Types', 'How much do you know about your blood? We aim to have six days supply of each blood group at all times.', 'jdnfslj ouvhzsdo', '.png', 'blood_type', '2017-07-21 10:01:20'),
(5, 'The journey of donated blood', 'Each precious blood donation has a very short shelf life. We have to act fast to make sure it goes where it needed.', 'kjdfhihdfui lsdfbsduifh sklDJfbhsdui', 'sdfg.jpg', 'journey', '2017-07-16 22:20:50');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'create-post', 'Create Posts', 'create new blog posts', '2017-06-07 22:12:15', '2017-06-07 23:12:13'),
(2, 'edit-user', 'Edit Users', 'edit existing users', '2017-06-08 00:08:24', '2017-06-08 03:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `post_slug` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT '0',
  `menu_order` int(11) NOT NULL DEFAULT '0',
  `post_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'post'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_author`, `post_date`, `post_content`, `post_title`, `post_status`, `comment_status`, `post_slug`, `post_modified`, `post_parent`, `menu_order`, `post_type`) VALUES
(1, 1, '2017-04-12 12:24:34', 'This is a test ........', 'test', 'publish', 'open', 'test', '2017-04-19 07:20:17', 0, 0, 'post'),
(2, 1, '2017-04-12 12:24:34', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat', 'আমাদের সাথে যোগাযোগের মাধ্যম ', 'publish', 'open', 'contact', '2017-04-19 07:20:17', 0, 0, 'post'),
(3, 1, '2017-04-12 12:24:34', 'ধর্ম-বর্ণনির্বিশেষে সবার রক্তই এক— লাল রঙের। এর মধ্যে কোনো বিভেদ নেই। মানুষের শরীরে রক্তের প্রয়োজনীয়তা এত বেশি যে এটা ছাড়া কেউ বেঁচে থাকতে পারে না। মুমূর্ষু রোগীকে বাঁচাতে প্রায়ই জরুরি ভিত্তিতে রক্ত দেওয়ার প্রয়োজন পড়ে। যেমন— দুর্ঘটনায় আহত রোগী, অস্ত্রোপচারের রোগী, সন্তান প্রসবকালে, ক্যানসার বা অন্যান্য জটিল রোগে, এলিমিয়া, থ্যালাসেমিয়া, থিমোফিলিয়া ইত্যাদি কারণে রক্ত সঞ্চালনের প্রয়োজন পড়ে। বাংলাদেশের মতো গরিব দেশে বছরে পাঁচ থেকে ছয় লাখ ব্যাগ রক্তের প্রয়োজন হয়, যার মাত্র ৩০ শতাংশ পাওয়া যায় স্বেচ্ছায় রক্তদাতার মাধ্যমে। বাকি রক্ত অধিকাংশ ক্ষেত্রে পেশাদার রক্তদাতা এবং আত্মীয়স্বজন ও বন্ধুবান্ধবের মাধ্যমে সংগ্রহ করা হয়। \nরক্ত অবশ্যই মানবদেহের একটি গুরুত্বপূর্ণ উপাদান। পূর্ণমাত্রায় রক্ত থাকলে মানবদেহ থাকবে সজীব ও সক্রিয়। আর রক্তশূন্যতা বা এনিমিয়া দেখা দিলেই শরীর অকেজো হয়ে পড়ে, প্রাণশক্তিতে ভাটা পড়ে। এই অতি প্রয়োজনীয় জিনিসটি কলকারখানায় তৈরি হয় না। বিজ্ঞানীদের যথাসাধ্য চেষ্টা সত্ত্বেও এখনো রক্তের বিকল্প তৈরি করা সম্ভব হয়নি। নিকট ভবিষ্যতে পাওয়া যাবে—এমনটাও আশা করা যায় না। মানুষের রক্তের প্রয়োজনে মানুষকেই রক্ত দিতে হয়। জীবন বাঁচানোর জন্য রক্তদান এতই গুরুত্বপূর্ণ যে, বলা হয়—‘করিলে রক্তদান, বাঁচিবে একটি প্রাণ’, ‘আপনার রক্ত দিন, একটি জীবন বাঁচান’, ‘সময় তুমি হার মেনেছ রক্তদানের কাছে, দশটি মিনিট করলে খরচ একটি জীবন বাঁচে।’', 'করিলে রক্তদান, বাঁচিবে একটি প্রাণ’', 'publish', 'open', 'aboutus', '2017-04-19 07:20:17', 0, 0, 'post'),
(4, 1, '2017-04-12 12:24:34', 'কোনো সুস্থ-সবল মানুষ রক্ত দান করলে দাতার স্বাস্থ্যের কোনো ক্ষতি হয় না। এমনিতেই রক্তের লোহিত কণিকাগুলো চার মাস পর পর নষ্ট হয়ে যায় বা ভেঙে যায় বা ক্ষয়প্রাপ্ত হয়। সুতরাং এমনি এমনি নষ্ট করার চেয়ে তো স্বেচ্ছায় অন্যের জীবন বাঁচাতে দান করাই উত্তম। এই সামান্য পরিমাণ রক্তদানের মাধ্যমে একটি জীবন বাঁচানো নিঃসন্দেহে ভালো কাজ। নিয়মিত রক্ত দান করা একটি ভালো অভ্যাস। রক্ত দান করা কোনো দুঃসাহসিক কাজ নয়, বরং এর জন্য একটি সুন্দর মন থাকাই যথেষ্ট।', 'আমরা কারা ', 'publish', 'open', 'who-we-are', '2017-04-19 07:20:17', 0, 0, 'post'),
(5, 1, '2017-04-12 12:24:34', '<h3>মিশন</h3>\r\nধর্ম-বর্ণনির্বিশেষে সবার রক্তই এক— লাল রঙের। এর মধ্যে কোনো বিভেদ নেই। মানুষের শরীরে রক্তের প্রয়োজনীয়তা এত বেশি যে এটা ছাড়া কেউ বেঁচে থাকতে পারে না। মুমূর্ষু রোগীকে বাঁচাতে প্রায়ই জরুরি ভিত্তিতে রক্ত দেওয়ার প্রয়োজন পড়ে। যেমন— দুর্ঘটনায় আহত রোগী, অস্ত্রোপচারের রোগী, সন্তান প্রসবকালে, ক্যানসার বা অন্যান্য জটিল রোগে, এলিমিয়া, থ্যালাসেমিয়া, থিমোফিলিয়া ইত্যাদি কারণে রক্ত সঞ্চালনের প্রয়োজন পড়ে। বাংলাদেশের মতো গরিব দেশে বছরে পাঁচ থেকে ছয় লাখ ব্যাগ রক্তের প্রয়োজন হয়, যার মাত্র ৩০ শতাংশ পাওয়া যায় স্বেচ্ছায় রক্তদাতার মাধ্যমে। বাকি রক্ত অধিকাংশ ক্ষেত্রে পেশাদার রক্তদাতা এবং আত্মীয়স্বজন ও বন্ধুবান্ধবের মাধ্যমে সংগ্রহ করা হয়। \r\n\r\n<h3>ভিশন</h3>\r\n\r\n\r\nরক্ত অবশ্যই মানবদেহের একটি গুরুত্বপূর্ণ উপাদান। পূর্ণমাত্রায় রক্ত থাকলে মানবদেহ থাকবে সজীব ও সক্রিয়। আর রক্তশূন্যতা বা এনিমিয়া দেখা দিলেই শরীর অকেজো হয়ে পড়ে, প্রাণশক্তিতে ভাটা পড়ে। এই অতি প্রয়োজনীয় জিনিসটি কলকারখানায় তৈরি হয় না। বিজ্ঞানীদের যথাসাধ্য চেষ্টা সত্ত্বেও এখনো রক্তের বিকল্প তৈরি করা সম্ভব হয়নি। নিকট ভবিষ্যতে পাওয়া যাবে—এমনটাও আশা করা যায় না। \r\n\r\n<h3> আমাদের কাজ </h3>\r\n\r\nমানুষের রক্তের প্রয়োজনে মানুষকেই রক্ত দিতে হয়। জীবন বাঁচানোর জন্য রক্তদান এতই গুরুত্বপূর্ণ যে, বলা হয়—‘করিলে রক্তদান, বাঁচিবে একটি প্রাণ’, ‘আপনার রক্ত দিন, একটি জীবন বাঁচান’, ‘সময় তুমি হার মেনেছ রক্তদানের কাছে, দশটি মিনিট করলে খরচ একটি জীবন বাঁচে।’', 'মিশন ভিশন ও আমাদের কাজ ', 'publish', 'open', 'vision-mission-values', '2017-04-19 07:20:17', 0, 0, 'post');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'owner', 'Project Owner', 'User is the owner of a given project', '2017-06-08 05:16:34', '2017-06-08 02:21:36'),
(2, 'admin', 'User Administrator', 'User is allowed to manage and edit other users', '2017-06-08 05:16:34', '2017-06-08 02:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `speeches`
--

CREATE TABLE `speeches` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `crreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `speeches`
--

INSERT INTO `speeches` (`id`, `name`, `designation`, `description`, `updated_by`, `updated_at`, `crreated_at`) VALUES
(1, 'Abdul Kalam', 'CEO', 'This is a test. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequatLorem ipsum ', 2, '2017-06-17 01:27:12', '2017-06-17 01:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(11) NOT NULL,
  `system_name` text NOT NULL,
  `director` varchar(255) NOT NULL,
  `established_datetime` datetime NOT NULL,
  `current_office` text NOT NULL,
  `head_office` text NOT NULL,
  `year` int(11) NOT NULL,
  `phone1` varchar(20) NOT NULL,
  `phone2` varchar(20) NOT NULL,
  `email1` varchar(30) NOT NULL,
  `email2` varchar(30) NOT NULL,
  `fb_url` text NOT NULL,
  `web_url` text NOT NULL,
  `tw_url` text NOT NULL,
  `link_url` text NOT NULL,
  `copy_right` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `system_name`, `director`, `established_datetime`, `current_office`, `head_office`, `year`, `phone1`, `phone2`, `email1`, `email2`, `fb_url`, `web_url`, `tw_url`, `link_url`, `copy_right`) VALUES
(1, 'Life Cycle', 'Rashed Jaman', '2017-07-18 05:20:17', 'Maghbazar, Dhaka-1217', 'Gulshan, Dhaka-1200', 2017, '0171111111111111', '0191111111111111', 'info@lifecyclebd.org', 'support@lifecyclebd.org', 'fb.com', 'http://www.fb.com', 'http://www.fb.com', 'http://www.fb.com', '© lifecylebd.org. All rights reserved 2017 | Designed by Skybare IT\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `web_url` text,
  `fb_url` text,
  `linkdin_url` text,
  `rank` varchar(255) NOT NULL,
  `photo` text,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_by` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `email`, `designation`, `institution`, `title`, `message`, `web_url`, `fb_url`, `linkdin_url`, `rank`, `photo`, `updated_at`, `updated_by`, `created_at`, `created_by`) VALUES
(1, 'Engr. Md Rasheduzzaman', 'jmrashed@gmail.com', 'Software Engineer', 'United Group', 'This is most important part of our Life', 'A Community of Voluntary Blood Donors of Bangladesh. List of Bangladeshi blood donors profile and list of current blood request.', 'http://localhost:81/phpmyadmin/tbl_change.php?', 'http://localhost:81/phpmyadmin/tbl_change.php?', 'http://localhost:81/phpmyadmin/tbl_change.php?', '4', 'A.png', '2017-07-11 00:41:51', '', '2017-07-11 00:41:51', '2'),
(2, 'Engr. Md Nazmus Sakib', 'sakib@gmail.com', 'Software Engineer', 'United Group', 'This is most important part of our Life', 'A Community of Voluntary Blood Donors of Bangladesh. List of Bangladeshi blood donors profile and list of current blood request.', 'http://localhost:81/phpmyadmin/tbl_change.php?', 'http://localhost:81/phpmyadmin/tbl_change.php?', 'http://localhost:81/phpmyadmin/tbl_change.php?', '4', 'B.png', '2017-07-11 00:42:15', '', '2017-07-11 00:42:15', '2'),
(3, 'Meem', 'meem@gmail.com', 'sister', 'home', 'valo', 'good morning', 'asd.com', 'hfgf', 'podfjdisdjfbdj', 'sdjhfbsdjh', 'C.png', '2017-07-10 19:36:39', NULL, '2017-07-10 19:36:39', NULL),
(4, 'Asru', 'asru@gmail.com', 'sister', 'stamford', 'bon', 'This is a test', 'test.com', 'test.com/asru', 'test.com/asru', '6', '', '2017-07-10 19:40:51', NULL, '2017-07-10 19:40:51', NULL),
(5, 'Nazmus Sakib', 'sakib.cse.bd@gmail.com', 'Soft. Developer', 'stamford', 'title', 'this is a test', '1675 Snyder Avenue', 'thdt.com', 'test.com/asru', '434', '5_.png', '2017-07-10 19:47:10', NULL, '2017-07-10 19:47:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tobeproud`
--

CREATE TABLE `tobeproud` (
  `id` int(11) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `share_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tobeproud`
--

INSERT INTO `tobeproud` (`id`, `phone`, `comment`, `pic_path`, `share_date`) VALUES
(1, '01923589277', 'Hello', 'proudImages/Proud_20170714_071048.jpg', '14-7-2017'),
(2, '01923589277', 'hello', 'proudImages/Proud_20170714_071618.jpg', '14-7-2017');

-- --------------------------------------------------------

--
-- Table structure for table `upazilas`
--

CREATE TABLE `upazilas` (
  `id` int(2) UNSIGNED NOT NULL,
  `district_row_id` int(2) UNSIGNED NOT NULL,
  `upazila_name` varchar(30) NOT NULL,
  `upazila_name_bn` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upazilas`
--

INSERT INTO `upazilas` (`id`, `district_row_id`, `upazila_name`, `upazila_name_bn`) VALUES
(1, 34, 'Amtali Upazila', 'আমতলী'),
(2, 34, 'Bamna Upazila', 'বামনা'),
(3, 34, 'Barguna Sadar Upazila', 'বরগুনা সদর'),
(4, 34, 'Betagi Upazila', 'বেতাগি'),
(5, 34, 'Patharghata Upazila', 'পাথরঘাটা'),
(6, 34, 'Taltali Upazila', 'তালতলী'),
(7, 35, 'Muladi Upazila', 'মুলাদি'),
(8, 35, 'Babuganj Upazila', 'বাবুগঞ্জ'),
(9, 35, 'Agailjhara Upazila', 'আগাইলঝরা'),
(10, 35, 'Barisal Sadar Upazila', 'বরিশাল সদর'),
(11, 35, 'Bakerganj Upazila', 'বাকেরগঞ্জ'),
(12, 35, 'Banaripara Upazila', 'বানাড়িপারা'),
(13, 35, 'Gaurnadi Upazila', 'গৌরনদী'),
(14, 35, 'Hizla Upazila', 'হিজলা'),
(15, 35, 'Mehendiganj Upazila', 'মেহেদিগঞ্জ '),
(16, 35, 'Wazirpur Upazila', 'ওয়াজিরপুর'),
(17, 36, 'Bhola Sadar Upazila', 'ভোলা সদর'),
(18, 36, 'Burhanuddin Upazila', 'বুরহানউদ্দিন'),
(19, 36, 'Char Fasson Upazila', 'চর ফ্যাশন'),
(20, 36, 'Daulatkhan Upazila', 'দৌলতখান'),
(21, 36, 'Lalmohan Upazila', 'লালমোহন'),
(22, 36, 'Manpura Upazila', 'মনপুরা'),
(23, 36, 'Tazumuddin Upazila', 'তাজুমুদ্দিন'),
(24, 37, 'Jhalokati Sadar Upazila', 'ঝালকাঠি সদর'),
(25, 37, 'Kathalia Upazila', 'কাঁঠালিয়া'),
(26, 37, 'Nalchity Upazila', 'নালচিতি'),
(27, 37, 'Rajapur Upazila', 'রাজাপুর'),
(28, 38, 'Bauphal Upazila', 'বাউফল'),
(29, 38, 'Dashmina Upazila', 'দশমিনা'),
(30, 38, 'Galachipa Upazila', 'গলাচিপা'),
(31, 38, 'Kalapara Upazila', 'কালাপারা'),
(32, 38, 'Mirzaganj Upazila', 'মির্জাগঞ্জ '),
(33, 38, 'Patuakhali Sadar Upazila', 'পটুয়াখালী সদর'),
(34, 38, 'Dumki Upazila', 'ডুমকি'),
(35, 38, 'Rangabali Upazila', 'রাঙ্গাবালি'),
(36, 39, 'Bhandaria', 'ভ্যান্ডারিয়া'),
(37, 39, 'Kaukhali', 'কাউখালি'),
(38, 39, 'Mathbaria', 'মাঠবাড়িয়া'),
(39, 39, 'Nazirpur', 'নাজিরপুর'),
(40, 39, 'Nesarabad', 'নেসারাবাদ'),
(41, 39, 'Pirojpur Sadar', 'পিরোজপুর সদর'),
(42, 39, 'Zianagar', 'জিয়ানগর'),
(43, 40, 'Bandarban Sadar', 'বান্দরবন সদর'),
(44, 40, 'Thanchi', 'থানচি'),
(45, 40, 'Lama', 'লামা'),
(46, 40, 'Naikhongchhari', 'নাইখংছড়ি '),
(47, 40, 'Ali kadam', 'আলী কদম'),
(48, 40, 'Rowangchhari', 'রউয়াংছড়ি '),
(49, 40, 'Ruma', 'রুমা'),
(50, 41, 'Brahmanbaria Sadar Upazila', 'ব্রাহ্মণবাড়িয়া সদর'),
(51, 41, 'Ashuganj Upazila', 'আশুগঞ্জ'),
(52, 41, 'Nasirnagar Upazila', 'নাসির নগর'),
(53, 41, 'Nabinagar Upazila', 'নবীনগর'),
(54, 41, 'Sarail Upazila', 'সরাইল'),
(55, 41, 'Shahbazpur Town', 'শাহবাজপুর টাউন'),
(56, 41, 'Kasba Upazila', 'কসবা'),
(57, 41, 'Akhaura Upazila', 'আখাউরা'),
(58, 41, 'Bancharampur Upazila', 'বাঞ্ছারামপুর'),
(59, 41, 'Bijoynagar Upazila', 'বিজয় নগর'),
(60, 42, 'Chandpur Sadar', 'চাঁদপুর সদর'),
(61, 42, 'Faridganj', 'ফরিদগঞ্জ'),
(62, 42, 'Haimchar', 'হাইমচর'),
(63, 42, 'Haziganj', 'হাজীগঞ্জ'),
(64, 42, 'Kachua', 'কচুয়া'),
(65, 42, 'Matlab Uttar', 'মতলব উত্তর'),
(66, 42, 'Matlab Dakkhin', 'মতলব দক্ষিণ'),
(67, 42, 'Shahrasti', 'শাহরাস্তি'),
(68, 43, 'Anwara Upazila', 'আনোয়ারা'),
(69, 43, 'Banshkhali Upazila', 'বাশখালি'),
(70, 43, 'Boalkhali Upazila', 'বোয়ালখালি'),
(71, 43, 'Chandanaish Upazila', 'চন্দনাইশ'),
(72, 43, 'Fatikchhari Upazila', 'ফটিকছড়ি'),
(73, 43, 'Hathazari Upazila', 'হাঠহাজারী'),
(74, 43, 'Lohagara Upazila', 'লোহাগারা'),
(75, 43, 'Mirsharai Upazila', 'মিরসরাই'),
(76, 43, 'Patiya Upazila', 'পটিয়া'),
(77, 43, 'Rangunia Upazila', 'রাঙ্গুনিয়া'),
(78, 43, 'Raozan Upazila', 'রাউজান'),
(79, 43, 'Sandwip Upazila', 'সন্দ্বীপ'),
(80, 43, 'Satkania Upazila', 'সাতকানিয়া'),
(81, 43, 'Sitakunda Upazila', 'সীতাকুণ্ড'),
(82, 44, 'Barura Upazila', 'বড়ুরা'),
(83, 44, 'Brahmanpara Upazila', 'ব্রাহ্মণপাড়া'),
(84, 44, 'Burichong Upazila', 'বুড়িচং'),
(85, 44, 'Chandina Upazila', 'চান্দিনা'),
(86, 44, 'Chauddagram Upazila', 'চৌদ্দগ্রাম'),
(87, 44, 'Daudkandi Upazila', 'দাউদকান্দি'),
(88, 44, 'Debidwar Upazila', 'দেবীদ্বার'),
(89, 44, 'Homna Upazila', 'হোমনা'),
(90, 44, 'Comilla Sadar Upazila', 'কুমিল্লা সদর'),
(91, 44, 'Laksam Upazila', 'লাকসাম'),
(92, 44, 'Monohorgonj Upazila', 'মনোহরগঞ্জ'),
(93, 44, 'Meghna Upazila', 'মেঘনা'),
(94, 44, 'Muradnagar Upazila', 'মুরাদনগর'),
(95, 44, 'Nangalkot Upazila', 'নাঙ্গালকোট'),
(96, 44, 'Comilla Sadar South Upazila', 'কুমিল্লা সদর দক্ষিণ'),
(97, 44, 'Titas Upazila', 'তিতাস'),
(98, 45, 'Chakaria Upazila', 'চকরিয়া'),
(99, 45, 'Chakaria Upazila', 'চকরিয়া'),
(100, 45, 'Cox''s Bazar Sadar Upazila', 'কক্স বাজার সদর'),
(101, 45, 'Kutubdia Upazila', 'কুতুবদিয়া'),
(102, 45, 'Maheshkhali Upazila', 'মহেশখালী'),
(103, 45, 'Ramu Upazila', 'রামু'),
(104, 45, 'Teknaf Upazila', 'টেকনাফ'),
(105, 45, 'Ukhia Upazila', 'উখিয়া'),
(106, 45, 'Pekua Upazila', 'পেকুয়া'),
(107, 46, 'Feni Sadar', 'ফেনী সদর'),
(108, 46, 'Chagalnaiya', 'ছাগল নাইয়া'),
(109, 46, 'Daganbhyan', 'দাগানভিয়া'),
(110, 46, 'Parshuram', 'পরশুরাম'),
(111, 46, 'Fhulgazi', 'ফুলগাজি'),
(112, 46, 'Sonagazi', 'সোনাগাজি'),
(113, 47, 'Dighinala Upazila', 'দিঘিনালা '),
(114, 47, 'Khagrachhari Upazila', 'খাগড়াছড়ি'),
(115, 47, 'Lakshmichhari Upazila', 'লক্ষ্মীছড়ি'),
(116, 47, 'Mahalchhari Upazila', 'মহলছড়ি'),
(117, 47, 'Manikchhari Upazila', 'মানিকছড়ি'),
(118, 47, 'Matiranga Upazila', 'মাটিরাঙ্গা'),
(119, 47, 'Panchhari Upazila', 'পানছড়ি'),
(120, 47, 'Ramgarh Upazila', 'রামগড়'),
(121, 48, 'Lakshmipur Sadar Upazila', 'লক্ষ্মীপুর সদর'),
(122, 48, 'Raipur Upazila', 'রায়পুর'),
(123, 48, 'Ramganj Upazila', 'রামগঞ্জ'),
(124, 48, 'Ramgati Upazila', 'রামগতি'),
(125, 48, 'Komol Nagar Upazila', 'কমল নগর'),
(126, 49, 'Noakhali Sadar Upazila', 'নোয়াখালী সদর'),
(127, 49, 'Begumganj Upazila', 'বেগমগঞ্জ'),
(128, 49, 'Chatkhil Upazila', 'চাটখিল'),
(129, 49, 'Companyganj Upazila', 'কোম্পানীগঞ্জ'),
(130, 49, 'Shenbag Upazila', 'শেনবাগ'),
(131, 49, 'Hatia Upazila', 'হাতিয়া'),
(132, 49, 'Kobirhat Upazila', 'কবিরহাট '),
(133, 49, 'Sonaimuri Upazila', 'সোনাইমুরি'),
(134, 49, 'Suborno Char Upazila', 'সুবর্ণ চর '),
(135, 50, 'Rangamati Sadar Upazila', 'রাঙ্গামাটি সদর'),
(136, 50, 'Belaichhari Upazila', 'বেলাইছড়ি'),
(137, 50, 'Bagaichhari Upazila', 'বাঘাইছড়ি'),
(138, 50, 'Barkal Upazila', 'বরকল'),
(139, 50, 'Juraichhari Upazila', 'জুরাইছড়ি'),
(140, 50, 'Rajasthali Upazila', 'রাজাস্থলি'),
(141, 50, 'Kaptai Upazila', 'কাপ্তাই'),
(142, 50, 'Langadu Upazila', 'লাঙ্গাডু'),
(143, 50, 'Nannerchar Upazila', 'নান্নেরচর '),
(144, 50, 'Kaukhali Upazila', 'কাউখালি'),
(145, 1, 'Dhamrai Upazila', 'ধামরাই'),
(146, 1, 'Dohar Upazila', 'দোহার'),
(147, 1, 'Keraniganj Upazila', 'কেরানীগঞ্জ'),
(148, 1, 'Nawabganj Upazila', 'নবাবগঞ্জ'),
(149, 1, 'Savar Upazila', 'সাভার'),
(150, 2, 'Faridpur Sadar Upazila', 'ফরিদপুর সদর'),
(151, 2, 'Boalmari Upazila', 'বোয়ালমারী'),
(152, 2, 'Alfadanga Upazila', 'আলফাডাঙ্গা'),
(153, 2, 'Madhukhali Upazila', 'মধুখালি'),
(154, 2, 'Bhanga Upazila', 'ভাঙ্গা'),
(155, 2, 'Nagarkanda Upazila', 'নগরকান্ড'),
(156, 2, 'Charbhadrasan Upazila', 'চরভদ্রাসন '),
(157, 2, 'Sadarpur Upazila', 'সদরপুর'),
(158, 2, 'Shaltha Upazila', 'শালথা'),
(159, 3, 'Gazipur Sadar-Joydebpur', 'গাজীপুর সদর'),
(160, 3, 'Kaliakior', 'কালিয়াকৈর'),
(161, 3, 'Kapasia', 'কাপাসিয়া'),
(162, 3, 'Sripur', 'শ্রীপুর'),
(163, 3, 'Kaliganj', 'কালীগঞ্জ'),
(164, 3, 'Tongi', 'টঙ্গি'),
(165, 4, 'Gopalganj Sadar Upazila', 'গোপালগঞ্জ সদর'),
(166, 4, 'Kashiani Upazila', 'কাশিয়ানি'),
(167, 4, 'Kotalipara Upazila', 'কোটালিপাড়া'),
(168, 4, 'Muksudpur Upazila', 'মুকসুদপুর'),
(169, 4, 'Tungipara Upazila', 'টুঙ্গিপাড়া'),
(170, 5, 'Dewanganj Upazila', 'দেওয়ানগঞ্জ'),
(171, 5, 'Baksiganj Upazila', 'বকসিগঞ্জ'),
(172, 5, 'Islampur Upazila', 'ইসলামপুর'),
(173, 5, 'Jamalpur Sadar Upazila', 'জামালপুর সদর'),
(174, 5, 'Madarganj Upazila', 'মাদারগঞ্জ'),
(175, 5, 'Melandaha Upazila', 'মেলানদাহা'),
(176, 5, 'Sarishabari Upazila', 'সরিষাবাড়ি '),
(177, 5, 'Narundi Police I.C', 'নারুন্দি'),
(178, 6, 'Astagram Upazila', 'অষ্টগ্রাম'),
(179, 6, 'Bajitpur Upazila', 'বাজিতপুর'),
(180, 6, 'Bhairab Upazila', 'ভৈরব'),
(181, 6, 'Hossainpur Upazila', 'হোসেনপুর '),
(182, 6, 'Itna Upazila', 'ইটনা'),
(183, 6, 'Karimganj Upazila', 'করিমগঞ্জ'),
(184, 6, 'Katiadi Upazila', 'কতিয়াদি'),
(185, 6, 'Kishoreganj Sadar Upazila', 'কিশোরগঞ্জ সদর'),
(186, 6, 'Kuliarchar Upazila', 'কুলিয়ারচর'),
(187, 6, 'Mithamain Upazila', 'মিঠামাইন'),
(188, 6, 'Nikli Upazila', 'নিকলি'),
(189, 6, 'Pakundia Upazila', 'পাকুন্ডা'),
(190, 6, 'Tarail Upazila', 'তাড়াইল'),
(191, 7, 'Madaripur Sadar', 'মাদারীপুর সদর'),
(192, 7, 'Kalkini', 'কালকিনি'),
(193, 7, 'Rajoir', 'রাজইর'),
(194, 7, 'Shibchar', 'শিবচর'),
(195, 8, 'Manikganj Sadar Upazila', 'মানিকগঞ্জ সদর'),
(196, 8, 'Singair Upazila', 'সিঙ্গাইর'),
(197, 8, 'Shibalaya Upazila', 'শিবালয়'),
(198, 8, 'Saturia Upazila', 'সাঠুরিয়া'),
(199, 8, 'Harirampur Upazila', 'হরিরামপুর'),
(200, 8, 'Ghior Upazila', 'ঘিওর'),
(201, 8, 'Daulatpur Upazila', 'দৌলতপুর'),
(202, 9, 'Lohajang Upazila', 'লোহাজং'),
(203, 9, 'Sreenagar Upazila', 'শ্রীনগর'),
(204, 9, 'Munshiganj Sadar Upazila', 'মুন্সিগঞ্জ সদর'),
(205, 9, 'Sirajdikhan Upazila', 'সিরাজদিখান'),
(206, 9, 'Tongibari Upazila', 'টঙ্গিবাড়ি'),
(207, 9, 'Gazaria Upazila', 'গজারিয়া'),
(208, 10, 'Bhaluka', 'ভালুকা'),
(209, 10, 'Trishal', 'ত্রিশাল'),
(210, 10, 'Haluaghat', 'হালুয়াঘাট'),
(211, 10, 'Muktagachha', 'মুক্তাগাছা'),
(212, 10, 'Dhobaura', 'ধবারুয়া'),
(213, 10, 'Fulbaria', 'ফুলবাড়িয়া'),
(214, 10, 'Gaffargaon', 'গফরগাঁও'),
(215, 10, 'Gauripur', 'গৌরিপুর'),
(216, 10, 'Ishwarganj', 'ঈশ্বরগঞ্জ'),
(217, 10, 'Mymensingh Sadar', 'ময়মনসিং সদর'),
(218, 10, 'Nandail', 'নন্দাইল'),
(219, 10, 'Phulpur', 'ফুলপুর'),
(220, 11, 'Araihazar Upazila', 'আড়াইহাজার'),
(221, 11, 'Sonargaon Upazila', 'সোনারগাঁও'),
(222, 11, 'Bandar', 'বান্দার'),
(223, 11, 'Naryanganj Sadar Upazila', 'নারায়ানগঞ্জ সদর'),
(224, 11, 'Rupganj Upazila', 'রূপগঞ্জ'),
(225, 11, 'Siddirgonj Upazila', 'সিদ্ধিরগঞ্জ'),
(226, 12, 'Belabo Upazila', 'বেলাবো'),
(227, 12, 'Monohardi Upazila', 'মনোহরদি'),
(228, 12, 'Narsingdi Sadar Upazila', 'নরসিংদী সদর'),
(229, 12, 'Palash Upazila', 'পলাশ'),
(230, 12, 'Raipura Upazila, Narsingdi', 'রায়পুর'),
(231, 12, 'Shibpur Upazila', 'শিবপুর'),
(232, 13, 'Kendua Upazilla', 'কেন্দুয়া'),
(233, 13, 'Atpara Upazilla', 'আটপাড়া'),
(234, 13, 'Barhatta Upazilla', 'বরহাট্টা'),
(235, 13, 'Durgapur Upazilla', 'দুর্গাপুর'),
(236, 13, 'Kalmakanda Upazilla', 'কলমাকান্দা'),
(237, 13, 'Madan Upazilla', 'মদন'),
(238, 13, 'Mohanganj Upazilla', 'মোহনগঞ্জ'),
(239, 13, 'Netrakona-S Upazilla', 'নেত্রকোনা সদর'),
(240, 13, 'Purbadhala Upazilla', 'পূর্বধলা'),
(241, 13, 'Khaliajuri Upazilla', 'খালিয়াজুরি'),
(242, 14, 'Baliakandi Upazila', 'বালিয়াকান্দি'),
(243, 14, 'Goalandaghat Upazila', 'গোয়ালন্দ ঘাট'),
(244, 14, 'Pangsha Upazila', 'পাংশা'),
(245, 14, 'Kalukhali Upazila', 'কালুখালি'),
(246, 14, 'Rajbari Sadar Upazila', 'রাজবাড়ি সদর'),
(247, 15, 'Shariatpur Sadar -Palong', 'শরীয়তপুর সদর '),
(248, 15, 'Damudya Upazila', 'দামুদিয়া'),
(249, 15, 'Naria Upazila', 'নড়িয়া'),
(250, 15, 'Jajira Upazila', 'জাজিরা'),
(251, 15, 'Bhedarganj Upazila', 'ভেদারগঞ্জ'),
(252, 15, 'Gosairhat Upazila', 'গোসাইর হাট '),
(253, 16, 'Jhenaigati Upazila', 'ঝিনাইগাতি'),
(254, 16, 'Nakla Upazila', 'নাকলা'),
(255, 16, 'Nalitabari Upazila', 'নালিতাবাড়ি'),
(256, 16, 'Sherpur Sadar Upazila', 'শেরপুর সদর'),
(257, 16, 'Sreebardi Upazila', 'শ্রীবরদি'),
(258, 17, 'Tangail Sadar Upazila', 'টাঙ্গাইল সদর'),
(259, 17, 'Sakhipur Upazila', 'সখিপুর'),
(260, 17, 'Basail Upazila', 'বসাইল'),
(261, 17, 'Madhupur Upazila', 'মধুপুর'),
(262, 17, 'Ghatail Upazila', 'ঘাটাইল'),
(263, 17, 'Kalihati Upazila', 'কালিহাতি'),
(264, 17, 'Nagarpur Upazila', 'নগরপুর'),
(265, 17, 'Mirzapur Upazila', 'মির্জাপুর'),
(266, 17, 'Gopalpur Upazila', 'গোপালপুর'),
(267, 17, 'Delduar Upazila', 'দেলদুয়ার'),
(268, 17, 'Bhuapur Upazila', 'ভুয়াপুর'),
(269, 17, 'Dhanbari Upazila', 'ধানবাড়ি'),
(270, 55, 'Bagerhat Sadar Upazila', 'বাগেরহাট সদর'),
(271, 55, 'Chitalmari Upazila', 'চিতলমাড়ি'),
(272, 55, 'Fakirhat Upazila', 'ফকিরহাট'),
(273, 55, 'Kachua Upazila', 'কচুয়া'),
(274, 55, 'Mollahat Upazila', 'মোল্লাহাট '),
(275, 55, 'Mongla Upazila', 'মংলা'),
(276, 55, 'Morrelganj Upazila', 'মরেলগঞ্জ'),
(277, 55, 'Rampal Upazila', 'রামপাল'),
(278, 55, 'Sarankhola Upazila', 'স্মরণখোলা'),
(279, 56, 'Damurhuda Upazila', 'দামুরহুদা'),
(280, 56, 'Chuadanga-S Upazila', 'চুয়াডাঙ্গা সদর'),
(281, 56, 'Jibannagar Upazila', 'জীবন নগর '),
(282, 56, 'Alamdanga Upazila', 'আলমডাঙ্গা'),
(283, 57, 'Abhaynagar Upazila', 'অভয়নগর'),
(284, 57, 'Keshabpur Upazila', 'কেশবপুর'),
(285, 57, 'Bagherpara Upazila', 'বাঘের পাড়া '),
(286, 57, 'Jessore Sadar Upazila', 'যশোর সদর'),
(287, 57, 'Chaugachha Upazila', 'চৌগাছা'),
(288, 57, 'Manirampur Upazila', 'মনিরামপুর '),
(289, 57, 'Jhikargachha Upazila', 'ঝিকরগাছা'),
(290, 57, 'Sharsha Upazila', 'সারশা'),
(291, 58, 'Jhenaidah Sadar Upazila', 'ঝিনাইদহ সদর'),
(292, 58, 'Maheshpur Upazila', 'মহেশপুর'),
(293, 58, 'Kaliganj Upazila', 'কালীগঞ্জ'),
(294, 58, 'Kotchandpur Upazila', 'কোট চাঁদপুর '),
(295, 58, 'Shailkupa Upazila', 'শৈলকুপা'),
(296, 58, 'Harinakunda Upazila', 'হাড়িনাকুন্দা'),
(297, 59, 'Terokhada Upazila', 'তেরোখাদা'),
(298, 59, 'Batiaghata Upazila', 'বাটিয়াঘাটা '),
(299, 59, 'Dacope Upazila', 'ডাকপে'),
(300, 59, 'Dumuria Upazila', 'ডুমুরিয়া'),
(301, 59, 'Dighalia Upazila', 'দিঘলিয়া'),
(302, 59, 'Koyra Upazila', 'কয়ড়া'),
(303, 59, 'Paikgachha Upazila', 'পাইকগাছা'),
(304, 59, 'Phultala Upazila', 'ফুলতলা'),
(305, 59, 'Rupsa Upazila', 'রূপসা'),
(306, 60, 'Kushtia Sadar', 'কুষ্টিয়া সদর'),
(307, 60, 'Kumarkhali', 'কুমারখালি'),
(308, 60, 'Daulatpur', 'দৌলতপুর'),
(309, 60, 'Mirpur', 'মিরপুর'),
(310, 60, 'Bheramara', 'ভেরামারা'),
(311, 60, 'Khoksa', 'খোকসা'),
(312, 61, 'Magura Sadar Upazila', 'মাগুরা সদর'),
(313, 61, 'Mohammadpur Upazila', 'মোহাম্মাদপুর'),
(314, 61, 'Shalikha Upazila', 'শালিখা'),
(315, 61, 'Sreepur Upazila', 'শ্রীপুর'),
(316, 62, 'angni Upazila', 'আংনি'),
(317, 62, 'Mujib Nagar Upazila', 'মুজিব নগর'),
(318, 62, 'Meherpur-S Upazila', 'মেহেরপুর সদর'),
(319, 63, 'Narail-S Upazilla', 'নড়াইল সদর'),
(320, 63, 'Lohagara Upazilla', 'লোহাগাড়া'),
(321, 63, 'Kalia Upazilla', 'কালিয়া'),
(322, 64, 'Satkhira Sadar Upazila', 'সাতক্ষীরা সদর'),
(323, 64, 'Assasuni Upazila', 'আসসাশুনি '),
(324, 64, 'Debhata Upazila', 'দেভাটা'),
(325, 64, 'Tala Upazila', 'তালা'),
(326, 64, 'Kalaroa Upazila', 'কলরোয়া'),
(327, 64, 'Kaliganj Upazila', 'কালীগঞ্জ'),
(328, 64, 'Shyamnagar Upazila', 'শ্যামনগর'),
(329, 18, 'Adamdighi', 'আদমদিঘী'),
(330, 18, 'Bogra Sadar', 'বগুড়া সদর'),
(331, 18, 'Sherpur', 'শেরপুর'),
(332, 18, 'Dhunat', 'ধুনট'),
(333, 18, 'Dhupchanchia', 'দুপচাচিয়া'),
(334, 18, 'Gabtali', 'গাবতলি'),
(335, 18, 'Kahaloo', 'কাহালু'),
(336, 18, 'Nandigram', 'নন্দিগ্রাম'),
(337, 18, 'Sahajanpur', 'শাহজাহানপুর'),
(338, 18, 'Sariakandi', 'সারিয়াকান্দি'),
(339, 18, 'Shibganj', 'শিবগঞ্জ'),
(340, 18, 'Sonatala', 'সোনাতলা'),
(341, 19, 'Joypurhat S', 'জয়পুরহাট সদর'),
(342, 19, 'Akkelpur', 'আক্কেলপুর'),
(343, 19, 'Kalai', 'কালাই'),
(344, 19, 'Khetlal', 'খেতলাল'),
(345, 19, 'Panchbibi', 'পাঁচবিবি'),
(346, 20, 'Naogaon Sadar Upazila', 'নওগাঁ সদর'),
(347, 20, 'Mohadevpur Upazila', 'মহাদেবপুর'),
(348, 20, 'Manda Upazila', 'মান্দা'),
(349, 20, 'Niamatpur Upazila', 'নিয়ামতপুর'),
(350, 20, 'Atrai Upazila', 'আত্রাই'),
(351, 20, 'Raninagar Upazila', 'রাণীনগর'),
(352, 20, 'Patnitala Upazila', 'পত্নীতলা'),
(353, 20, 'Dhamoirhat Upazila', 'ধামইরহাট '),
(354, 20, 'Sapahar Upazila', 'সাপাহার'),
(355, 20, 'Porsha Upazila', 'পোরশা'),
(356, 20, 'Badalgachhi Upazila', 'বদলগাছি'),
(357, 21, 'Natore Sadar Upazila', 'নাটোর সদর'),
(358, 21, 'Baraigram Upazila', 'বড়াইগ্রাম'),
(359, 21, 'Bagatipara Upazila', 'বাগাতিপাড়া'),
(360, 21, 'Lalpur Upazila', 'লালপুর'),
(361, 21, 'Natore Sadar Upazila', 'নাটোর সদর'),
(362, 21, 'Baraigram Upazila', 'বড়াই গ্রাম'),
(363, 22, 'Bholahat Upazila', 'ভোলাহাট'),
(364, 22, 'Gomastapur Upazila', 'গোমস্তাপুর'),
(365, 22, 'Nachole Upazila', 'নাচোল'),
(366, 22, 'Nawabganj Sadar Upazila', 'নবাবগঞ্জ সদর'),
(367, 22, 'Shibganj Upazila', 'শিবগঞ্জ'),
(368, 23, 'Atgharia Upazila', 'আটঘরিয়া'),
(369, 23, 'Bera Upazila', 'বেড়া'),
(370, 23, 'Bhangura Upazila', 'ভাঙ্গুরা'),
(371, 23, 'Chatmohar Upazila', 'চাটমোহর'),
(372, 23, 'Faridpur Upazila', 'ফরিদপুর'),
(373, 23, 'Ishwardi Upazila', 'ঈশ্বরদী'),
(374, 23, 'Pabna Sadar Upazila', 'পাবনা সদর'),
(375, 23, 'Santhia Upazila', 'সাথিয়া'),
(376, 23, 'Sujanagar Upazila', 'সুজানগর'),
(377, 24, 'Bagha', 'বাঘা'),
(378, 24, 'Bagmara', 'বাগমারা'),
(379, 24, 'Charghat', 'চারঘাট'),
(380, 24, 'Durgapur', 'দুর্গাপুর'),
(381, 24, 'Godagari', 'গোদাগারি'),
(382, 24, 'Mohanpur', 'মোহনপুর'),
(383, 24, 'Paba', 'পবা'),
(384, 24, 'Puthia', 'পুঠিয়া'),
(385, 24, 'Tanore', 'তানোর'),
(386, 25, 'Sirajganj Sadar Upazila', 'সিরাজগঞ্জ সদর'),
(387, 25, 'Belkuchi Upazila', 'বেলকুচি'),
(388, 25, 'Chauhali Upazila', 'চৌহালি'),
(389, 25, 'Kamarkhanda Upazila', 'কামারখান্দা'),
(390, 25, 'Kazipur Upazila', 'কাজীপুর'),
(391, 25, 'Raiganj Upazila', 'রায়গঞ্জ'),
(392, 25, 'Shahjadpur Upazila', 'শাহজাদপুর'),
(393, 25, 'Tarash Upazila', 'তারাশ'),
(394, 25, 'Ullahpara Upazila', 'উল্লাপাড়া'),
(395, 26, 'Birampur Upazila', 'বিরামপুর'),
(396, 26, 'Birganj', 'বীরগঞ্জ'),
(397, 26, 'Biral Upazila', 'বিড়াল'),
(398, 26, 'Bochaganj Upazila', 'বোচাগঞ্জ'),
(399, 26, 'Chirirbandar Upazila', 'চিরিরবন্দর'),
(400, 26, 'Phulbari Upazila', 'ফুলবাড়ি'),
(401, 26, 'Ghoraghat Upazila', 'ঘোড়াঘাট'),
(402, 26, 'Hakimpur Upazila', 'হাকিমপুর'),
(403, 26, 'Kaharole Upazila', 'কাহারোল'),
(404, 26, 'Khansama Upazila', 'খানসামা'),
(405, 26, 'Dinajpur Sadar Upazila', 'দিনাজপুর সদর'),
(406, 26, 'Nawabganj', 'নবাবগঞ্জ'),
(407, 26, 'Parbatipur Upazila', 'পার্বতীপুর'),
(408, 27, 'Fulchhari', 'ফুলছড়ি'),
(409, 27, 'Gaibandha sadar', 'গাইবান্ধা সদর'),
(410, 27, 'Gobindaganj', 'গোবিন্দগঞ্জ'),
(411, 27, 'Palashbari', 'পলাশবাড়ী'),
(412, 27, 'Sadullapur', 'সাদুল্যাপুর'),
(413, 27, 'Saghata', 'সাঘাটা'),
(414, 27, 'Sundarganj', 'সুন্দরগঞ্জ'),
(415, 28, 'Kurigram Sadar', 'কুড়িগ্রাম সদর'),
(416, 28, 'Nageshwari', 'নাগেশ্বরী'),
(417, 28, 'Bhurungamari', 'ভুরুঙ্গামারি'),
(418, 28, 'Phulbari', 'ফুলবাড়ি'),
(419, 28, 'Rajarhat', 'রাজারহাট'),
(420, 28, 'Ulipur', 'উলিপুর'),
(421, 28, 'Chilmari', 'চিলমারি'),
(422, 28, 'Rowmari', 'রউমারি'),
(423, 28, 'Char Rajibpur', 'চর রাজিবপুর'),
(424, 29, 'Lalmanirhat Sadar', 'লালমনিরহাট সদর'),
(425, 29, 'Aditmari', 'আদিতমারি'),
(426, 29, 'Kaliganj', 'কালীগঞ্জ'),
(427, 29, 'Hatibandha', 'হাতিবান্ধা'),
(428, 29, 'Patgram', 'পাটগ্রাম'),
(429, 30, 'Nilphamari Sadar', 'নীলফামারী সদর'),
(430, 30, 'Saidpur', 'সৈয়দপুর'),
(431, 30, 'Jaldhaka', 'জলঢাকা'),
(432, 30, 'Kishoreganj', 'কিশোরগঞ্জ'),
(433, 30, 'Domar', 'ডোমার'),
(434, 30, 'Dimla', 'ডিমলা'),
(435, 31, 'Panchagarh Sadar', 'পঞ্চগড় সদর'),
(436, 31, 'Debiganj', 'দেবীগঞ্জ'),
(437, 31, 'Boda', 'বোদা'),
(438, 31, 'Atwari', 'আটোয়ারি'),
(439, 31, 'Tetulia', 'তেতুলিয়া'),
(440, 32, 'Badarganj', 'বদরগঞ্জ'),
(441, 32, 'Mithapukur', 'মিঠাপুকুর'),
(442, 32, 'Gangachara', 'গঙ্গাচরা'),
(443, 32, 'Kaunia', 'কাউনিয়া'),
(444, 32, 'Rangpur Sadar', 'রংপুর সদর'),
(445, 32, 'Pirgachha', 'পীরগাছা'),
(446, 32, 'Pirganj', 'পীরগঞ্জ'),
(447, 32, 'Taraganj', 'তারাগঞ্জ'),
(448, 33, 'Thakurgaon Sadar Upazila', 'ঠাকুরগাঁও সদর'),
(449, 33, 'Pirganj Upazila', 'পীরগঞ্জ'),
(450, 33, 'Baliadangi Upazila', 'বালিয়াডাঙ্গি'),
(451, 33, 'Haripur Upazila', 'হরিপুর'),
(452, 33, 'Ranisankail Upazila', 'রাণীসংকইল'),
(453, 51, 'Ajmiriganj', 'আজমিরিগঞ্জ'),
(454, 51, 'Baniachang', 'বানিয়াচং'),
(455, 51, 'Bahubal', 'বাহুবল'),
(456, 51, 'Chunarughat', 'চুনারুঘাট'),
(457, 51, 'Habiganj Sadar', 'হবিগঞ্জ সদর'),
(458, 51, 'Lakhai', 'লাক্ষাই'),
(459, 51, 'Madhabpur', 'মাধবপুর'),
(460, 51, 'Nabiganj', 'নবীগঞ্জ'),
(461, 51, 'Shaistagonj Upazila', 'শায়েস্তাগঞ্জ'),
(462, 52, 'Moulvibazar Sadar', 'মৌলভীবাজার'),
(463, 52, 'Barlekha', 'বড়লেখা'),
(464, 52, 'Juri', 'জুড়ি'),
(465, 52, 'Kamalganj', 'কামালগঞ্জ'),
(466, 52, 'Kulaura', 'কুলাউরা'),
(467, 52, 'Rajnagar', 'রাজনগর'),
(468, 52, 'Sreemangal', 'শ্রীমঙ্গল'),
(469, 53, 'Bishwamvarpur', 'বিসশম্ভারপুর'),
(470, 53, 'Chhatak', 'ছাতক'),
(471, 53, 'Derai', 'দেড়াই'),
(472, 53, 'Dharampasha', 'ধরমপাশা'),
(473, 53, 'Dowarabazar', 'দোয়ারাবাজার'),
(474, 53, 'Jagannathpur', 'জগন্নাথপুর'),
(475, 53, 'Jamalganj', 'জামালগঞ্জ'),
(476, 53, 'Sulla', 'সুল্লা'),
(477, 53, 'Sunamganj Sadar', 'সুনামগঞ্জ সদর'),
(478, 53, 'Shanthiganj', 'শান্তিগঞ্জ'),
(479, 53, 'Tahirpur', 'তাহিরপুর'),
(480, 54, 'Sylhet Sadar', 'সিলেট সদর'),
(481, 54, 'Beanibazar', 'বেয়ানিবাজার'),
(482, 54, 'Bishwanath', 'বিশ্বনাথ'),
(483, 54, 'Dakshin Surma Upazila', 'দক্ষিণ সুরমা'),
(484, 54, 'Balaganj', 'বালাগঞ্জ'),
(485, 54, 'Companiganj', 'কোম্পানিগঞ্জ'),
(486, 54, 'Fenchuganj', 'ফেঞ্চুগঞ্জ'),
(487, 54, 'Golapganj', 'গোলাপগঞ্জ'),
(488, 54, 'Gowainghat', 'গোয়াইনঘাট'),
(489, 54, 'Jaintiapur', 'জয়ন্তপুর'),
(490, 54, 'Kanaighat', 'কানাইঘাট'),
(491, 54, 'Zakiganj', 'জাকিগঞ্জ'),
(492, 54, 'Nobigonj', 'নবীগঞ্জ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Md Rasheduzzaman ll', 'jmrashed@gmail.com', '$2y$10$vjr3UOBsv/jlTpefFX7FB.Mk.EyEudeJHZSc9883YULd6JMVMhJk2', 'CbIuqlrp5Y3Yg3l66mHysPC12adAVxqQ8qOYGhuCSov91BrWQroxLubcC87k', '2017-05-01 04:56:59', '2017-07-15 23:43:37', NULL),
(2, 'masud', 'enggmasud1983@gmail.com', '$2y$10$l0vYgvUj0QPxghVXO/uTaeMmNoSpmenqTNQhGTJvJoDyYpSv10In.', 'M0v6m7xHqohVSONriFsh1ctr02i08E87syEkn0hr1kKEKZteHs6AFAnlsOYu', '2017-06-08 01:07:39', '2017-06-08 01:07:39', NULL),
(3, 'Sakib', 'sakib@gmail.com', '$2y$10$C1D/md2bzD3Zja6Wrv2U7u6mtnOb0obDbTadgJ0ELJfNw/cz06uVW', 'z9YfyKRLigNvvdL4aLFclFVhIKr3UV4bghD4UdNdW82uUNa7Gw4e2Acwje2G', '2017-06-19 10:52:12', '2017-07-20 10:44:37', NULL),
(4, 'aaacccc2', 'ccccc@gmail.com', '$2y$10$H7LRYyphLFI3MpihZG.nv.dOjkKoVj19dm93ThuEU0jEBkIH65dFy', 'UaXoPYTneNmI4L4fczulkR2law49nyURZK0MCdfD', '2017-06-21 11:19:21', '2017-07-18 11:04:38', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apphospitals`
--
ALTER TABLE `apphospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apps_countries`
--
ALTER TABLE `apps_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodgroups`
--
ALTER TABLE `bloodgroups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_requests`
--
ALTER TABLE `blood_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `division_row_id` (`division_row_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_degrees`
--
ALTER TABLE `doctor_degrees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_designations`
--
ALTER TABLE `doctor_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_specialities`
--
ALTER TABLE `doctor_specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donateblood`
--
ALTER TABLE `donateblood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `donors_details`
--
ALTER TABLE `donors_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `find_solutions`
--
ALTER TABLE `find_solutions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_details`
--
ALTER TABLE `gallery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `more_about_bloods`
--
ALTER TABLE `more_about_bloods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `speeches`
--
ALTER TABLE `speeches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tobeproud`
--
ALTER TABLE `tobeproud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `district_row_id` (`district_row_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `apphospitals`
--
ALTER TABLE `apphospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `apps_countries`
--
ALTER TABLE `apps_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bloodgroups`
--
ALTER TABLE `bloodgroups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blood_requests`
--
ALTER TABLE `blood_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `doctor_degrees`
--
ALTER TABLE `doctor_degrees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `doctor_designations`
--
ALTER TABLE `doctor_designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `doctor_specialities`
--
ALTER TABLE `doctor_specialities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `donateblood`
--
ALTER TABLE `donateblood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `donors_details`
--
ALTER TABLE `donors_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `find_solutions`
--
ALTER TABLE `find_solutions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `gallery_details`
--
ALTER TABLE `gallery_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `more_about_bloods`
--
ALTER TABLE `more_about_bloods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `speeches`
--
ALTER TABLE `speeches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tobeproud`
--
ALTER TABLE `tobeproud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `upazilas`
--
ALTER TABLE `upazilas`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=493;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_ibfk_1` FOREIGN KEY (`division_row_id`) REFERENCES `divisions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `upazilas`
--
ALTER TABLE `upazilas`
  ADD CONSTRAINT `upazilas_ibfk_1` FOREIGN KEY (`district_row_id`) REFERENCES `districts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
