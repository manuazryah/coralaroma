-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2019 at 11:09 AM
-- Server version: 5.6.37
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coralaroma`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `about_content` longtext,
  `year_of_experience` int(11) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  `image_title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `why_coral_aroma` mediumtext,
  `director_name` varchar(100) DEFAULT NULL,
  `director_image` varchar(15) DEFAULT NULL,
  `director_message` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_content`, `year_of_experience`, `image`, `image_title`, `description`, `why_coral_aroma`, `director_name`, `director_image`, `director_message`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Uniquely refreshing scents produced by Coral Aroma have initiated scent lovers into an endless ocean of distinct natural fragrances. Within a short span of time, Coral Aroma with its unmistakably distinctive scents has enlivened the environment of innumerable places including homes, offices and corporate establishments. In addition to introducing remote controlled fragrance system, Coral Aroma carries the distinction of using essential oil. Our IFRA certified Standalone Diffusers and HVAC Machines which produce powerful fragrance from essential oil are credited with scenting places as diverse as Lobby, Elevators, Spas, suites and luxurious hotels.', 10, 'png', 'Coral Aroma', 'Coral Aroma', 'Uniquely refreshing scents produced by Coral Aroma have initiated scent lovers into an endless ocean of distinct natural fragrances. Within a short span of time, Coral Aroma with its unmistakably distinctive scents has enlivened the environment of innumerable places including homes, offices and corporate establishments. In addition to introducing remote controlled fragrance system, Coral Aroma carries the distinction of using essential oil. Our IFRA certified Standalone', 'Coral Aroma', 'jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived', 1, 1, 1, '2019-01-14', '2019-04-09 10:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `admin_posts`
--

CREATE TABLE IF NOT EXISTS `admin_posts` (
  `id` int(11) NOT NULL,
  `post_name` varchar(280) DEFAULT NULL,
  `admin` int(11) DEFAULT NULL,
  `cms_contents` int(11) DEFAULT '0',
  `status` int(11) DEFAULT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` datetime DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_posts`
--

INSERT INTO `admin_posts` (`id`, `post_name`, `admin`, `cms_contents`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Super Admin', 1, 1, 1, 1, 1, '2017-03-09 00:00:00', '2018-06-08 08:50:43');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `employee_code` varchar(280) DEFAULT NULL,
  `user_name` varchar(280) DEFAULT NULL,
  `password` varchar(280) DEFAULT NULL,
  `name` varchar(280) DEFAULT NULL,
  `email` varchar(280) DEFAULT NULL,
  `phone_number` varchar(280) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` datetime DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `post_id`, `employee_code`, `user_name`, `password`, `name`, `email`, `phone_number`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 1, '005', 'testing', '$2y$13$PGnWl5oyvJnWiUt6d41Byu8ZWSOh0VmyYshHpD.vVRsfP1lOD9kJO', ' CDA Admin', 'manu@azryah.com', '9876543210', 1, 10, 1, '2017-03-16 00:00:00', '2019-01-15 09:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `baner_images`
--

CREATE TABLE IF NOT EXISTS `baner_images` (
  `id` int(11) NOT NULL,
  `about` varchar(100) DEFAULT NULL,
  `scent_marketing` varchar(15) DEFAULT NULL,
  `products` varchar(15) DEFAULT NULL,
  `blog` varchar(100) DEFAULT NULL,
  `contact_us` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baner_images`
--

INSERT INTO `baner_images` (`id`, `about`, `scent_marketing`, `products`, `blog`, `contact_us`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'jpg', 'jpg', 'jpg', 'jpg', 'jpg', 1, 1, 1, '2019-01-14', '2019-04-10 05:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `small_description` text,
  `detailed_description` longtext,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_keyword` text,
  `meta_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `author`, `date`, `title`, `canonical_name`, `small_description`, `detailed_description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'jpg', 'admin', '2019-01-17', 'Incredible scents.', 'incredible-scents', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n', 'Incredible scents.', 'Incredible scents.', 'Incredible scents.', 1, 1, 1, '2019-01-14', '2019-04-09 04:29:57'),
(2, 'jpg', 'admin', '2019-01-17', 'Fragrances That Best Suit for Office Ambiance', 'fragrances-that-best-suit-for-office-ambiance', 'Irrespective of the industry, almost every business enjoys the benefits of utilizing the ambient scents throughout their marketing.', '<p>Irrespective of the industry, almost every business enjoys the benefits of utilizing the ambient scents throughout their marketing. It enhances not only their customer satisfaction but also denotes their brand identity. It also plays a pivotal role in increasing the revenue. Scent manufactures are also aware of the importance on pleasing ambiance caused by the usage of elegant fragrance.</p>\r\n\r\n<p>Most of the employees spend much of their lives in their offices otherwise can be referred to as a second home for them. During their hectic hours, there are chances to get frustrated or annoyed with their job. Hence there are several benefits through the introduction of essential oils and scents which includes, increase in performance, productivity and health of the employees. It also stands as a sophistication symbol of each industry. The owner of the West Coast Institute of Aromatherapy, Mr. Beverly Hawkins says that &ldquo;Essential oils have anti-viral, anti-fungal and anti-bacterial properties, and using them in an environment where there are a lot of people can help keep germs at bay.&rdquo; Also, they can boost up the mood of the employees as well as the customer in molding an ideal expectation about the company.</p>\r\n\r\n<p>The Coral Aroma is one of the kind scents according to their freshness and distinctiveness. Coral Aroma contributes a number of natural fragrances which makes them one among the best air aromas in Dubai. The aromas are divides into 5 spectacular notes which please one&rsquo;s aesthetics. The Floral notes include the distinct scents like floral, soft floral, floral oriental and fruity. The Oriental notes include soft oriental, spicy oriental, sweet oriental and floral oriental as well. The Woody notes include woods and mosses, woody oriental. The Signature notes include signature scent, Arabic oil, and water. The Fresh notes include fruity, citrus, green and herbs and water. Another distinction carried by Coral Aroma is the contribution of Diffuser system. Coral Aroma produces eco-friendly scent diffuser system which is capable of connecting to the advanced HVAC system with an assistance of intelligent remote technology. The device is equipped with the cold air diffusion technology that ensures the proliferation of fragrance in the atmosphere. And then the advanced technology of the device converts the scent droplets into microscopic units without ravaging the naturalness of the fragrance and hence spraying the best&nbsp;<a href="http://www.coralaroma.com/">aroma oil in Dubai</a>&nbsp;into your office rooms. The use of essential oil uplifts Coral Aroma to be an eminent natural aroma in Dubai.</p>\r\n\r\n<p style="text-align:justify">&nbsp;</p>\r\n', 'Fragrances That Best Suit for Office Ambiance', 'Fragrances That Best Suit for Office Ambiance', 'Fragrances That Best Suit for Office Ambiance', 1, 1, 1, '2019-01-14', '2019-04-09 04:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `contacts_info`
--

CREATE TABLE IF NOT EXISTS `contacts_info` (
  `id` int(11) NOT NULL,
  `address` text,
  `phone` varchar(25) DEFAULT NULL,
  `whatsapp` varchar(25) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `map` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts_info`
--

INSERT INTO `contacts_info` (`id`, `address`, `phone`, `whatsapp`, `fax`, `email`, `map`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Coral Perfume Industry LLC, P O Box 186887, Dubai, United Arab Emirates', '+971 50 334 6966', '+971558704575', '+97143217127', 'info@coralaroma.com', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3607.65948924868!2d55.35169191067386!3d25.282037634466906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5c8b79c776d5%3A0x4356ebc2db4417d2!2sDar+Al+Wuheida+Building+-+Al+Doha+St+-+Dubai+-+United+Arab+Emirates!5e0!3m2!1sen!2sin!4v1549979157614', 1, 1, 1, '2019-01-14', '2019-04-10 04:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `contact_enquiry`
--

CREATE TABLE IF NOT EXISTS `contact_enquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `message` text,
  `date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_enquiry`
--

INSERT INTO `contact_enquiry` (`id`, `name`, `email`, `phone`, `company`, `message`, `date`) VALUES
(1, 'Charles ', 'charles@cdaaudit.com', '971 557188763', 'cd', 'dddddddddddd', '2019-02-11'),
(2, 'Charles ', 'charles@cdaaudit.com', '971 557188763', 'cd', 'dddddddddddd', '2019-02-11'),
(3, 'Meenu', 'aaaa@com', '945558447', 'ghjjek', 'Hhdjjd', '2019-02-13'),
(4, 'Manu', 'test@test.com', '9744787548', 'CDA', 'test', '2019-02-14'),
(5, 'Azryah', 'test@test.com', '9744787548', 'CDA', 'test', '2019-02-14'),
(6, 'Azryah', 'test@test.com', '9744787548', 'CDA', 'test', '2019-02-14'),
(7, 'Meenu', 'meenujoze@gmail.com', '0522322363', 'uae', 'Test', '2019-02-14'),
(8, 'Meenu', 'meenujoze@gmail.com', '0522322363', 'uae', 'Test', '2019-02-14'),
(9, 'Charles ', 'charles@cdaaudit.com', '971 557188763', 'cd', 'aaaa', '2019-02-14'),
(10, 'Meenu', 'meenujoze@gmail.com', '0522322363', 'cda', 'Test', '2019-02-14'),
(11, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(12, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(13, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(14, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(15, 'Meenu Jose', 'info@cdaaudit.com', '0522322363', 'CDA', 'test', '2019-02-16'),
(16, 'Charles', 'charles@cdaaudit.com', '0557188763', '555', 'Hhhh', '2019-04-03'),
(17, 'Charles', 'charles@cdaaudit.com', '0557188763', '555', 'Hhhh', '2019-04-03'),
(18, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'test', '2019-04-10'),
(19, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'test', '2019-04-10'),
(20, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'test', '2019-04-10'),
(21, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'test', '2019-04-10'),
(22, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'test', '2019-04-10'),
(23, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'tsdggh', '2019-04-10'),
(24, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'tedrt', '2019-04-10'),
(25, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'tesr', '2019-04-10'),
(26, 'Azryah', 'test@test.com', '9744787548', 'Azryah', 'test', '2019-04-10'),
(27, 'Azryah', 'info@cdaaudit.com', '9744787548', 'Azryah', 'hfgjhk', '2019-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password_tokens`
--

CREATE TABLE IF NOT EXISTS `forgot_password_tokens` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `token` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forgot_password_tokens`
--

INSERT INTO `forgot_password_tokens` (`id`, `user_id`, `token`, `date`) VALUES
(1, 1, '9783501462', '0000-00-00'),
(2, 1, '1685209347', '0000-00-00'),
(3, 1, '0317654298', '0000-00-00'),
(4, 1, '9278631405', '0000-00-00'),
(5, 1, '8264570139', '0000-00-00'),
(6, 1, '3902467518', '0000-00-00'),
(7, 1, '8392065741', '0000-00-00'),
(8, 1, '9603825174', '0000-00-00'),
(9, 1, '0923457861', '0000-00-00'),
(10, 1, '4150239687', '0000-00-00'),
(11, 1, '1456827093', '0000-00-00'),
(12, 1, '3450928761', '0000-00-00'),
(13, 1, '2731086459', '0000-00-00'),
(14, 1, '8906142573', '0000-00-00'),
(15, 1, '1234685970', '0000-00-00'),
(16, 1, '3976152048', '0000-00-00'),
(17, 1, '5048369271', '0000-00-00'),
(18, 1, '4705328169', '0000-00-00'),
(19, 1, '0981375462', '0000-00-00'),
(20, 1, '7245038691', '0000-00-00'),
(21, 1, '0125693487', '0000-00-00'),
(23, 1, '4051238967', '0000-00-00'),
(24, 1, '5879164032', '0000-00-00'),
(25, 1, '9246530817', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

CREATE TABLE IF NOT EXISTS `home_contents` (
  `id` int(11) NOT NULL,
  `top_title` varchar(100) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `youtube_link` varchar(255) DEFAULT NULL,
  `google_plus` varchar(100) DEFAULT NULL,
  `pinterest` varchar(100) DEFAULT NULL,
  `welcome_content` mediumtext,
  `year_of_experience` int(11) DEFAULT NULL,
  `welcome_image` varchar(15) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `title1` varchar(100) DEFAULT NULL,
  `description1` varchar(255) DEFAULT NULL,
  `image1` varchar(15) DEFAULT NULL,
  `title2` varchar(100) DEFAULT NULL,
  `description2` varchar(255) DEFAULT NULL,
  `image2` varchar(15) DEFAULT NULL,
  `footer_address` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_contents`
--

INSERT INTO `home_contents` (`id`, `top_title`, `phone`, `email`, `facebook_link`, `twitter_link`, `linkedin_link`, `youtube_link`, `google_plus`, `pinterest`, `welcome_content`, `year_of_experience`, `welcome_image`, `title`, `description`, `title1`, `description1`, `image1`, `title2`, `description2`, `image2`, `footer_address`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Uniquely refreshing scents produced by', '+971 432 171 12', 'info@coralaroma.com', 'https://www.facebook.com/CoralAroma', 'https://twitter.com/CoralAroma', 'https://www.linkedin.com/company/coral-aroma', 'https://www.youtube.com/channel/UCEaDZHafKy4U4Ez4tGO7Krw', NULL, 'https://in.pinterest.com/coralaroma/', '<p>Uniquely refreshing scents produced by Coral Aroma have initiated scent lovers into an endless ocean of distinct natural fragrances. Within a short span of time, Coral Aroma with its unmistakably distinctive scents has enlivened the environment of innumerable places including homes, offices and corporate establishments. In addition to introducing remote controlled fragrance system, Coral Aroma carries the distinction of using essential oil. Our IFRA certified Standalone Diffusers and HVAC Machines which produce powerful fragrance from essential oil are credited with scenting places as diverse as Lobby, Elevators, Spas, suites and luxurious hotels.</p>\r\n', 7, 'png', 'Coral Aroma', 'Fantastic aroma oil hacks that''ll blow ur mind', 'Scent Marketing', 'Uniquely refreshing scents produced by Coral Aroma have initiated scent lovers into an endless ocean of distinct natural fragrances. Within a short span of time, Coral Aroma with its unmistakably distinctive scents has enlivened the environment', 'jpg', 'Diffuser Systems', 'Uniquely refreshing scents produced by Coral Aroma have initiated scent lovers into an endless ocean of distinct natural fragrances. Within a short span of time, Coral Aroma with its unmistakably distinctive scents has enlivened the environment', 'jpg', 'Coral Perfume Industry LLC  P O Box 186887,Dubai  United arab emirates', 1, NULL, 1, NULL, '2019-04-08 08:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `meta_tags`
--

CREATE TABLE IF NOT EXISTS `meta_tags` (
  `id` int(11) NOT NULL,
  `page_name` varchar(100) DEFAULT NULL,
  `meta_title` varchar(100) DEFAULT NULL,
  `meta_description` longtext,
  `meta_keyword` longtext,
  `page_url` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_tags`
--

INSERT INTO `meta_tags` (`id`, `page_name`, `meta_title`, `meta_description`, `meta_keyword`, `page_url`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Home', 'Coral Aroma', 'Coral Aroma', 'Coral Aroma', '', 1, 1, 1, '2018-06-13', '2019-04-10 04:49:31'),
(2, 'About', 'About Coral Aroma', 'About Coral Aroma', 'About Coral Aroma', '', 1, 1, 1, '2018-12-28', '2019-04-10 04:49:50'),
(3, 'Scent Marketing', 'Scent Marketing', 'Scent Marketing', 'Scent Marketing', '', 1, 1, 1, '2018-12-28', '2019-04-10 04:50:25'),
(4, 'Products', 'Coral Aroma Products', 'Coral Aroma Products', 'Coral Aroma Products', '', 1, 1, 1, '2018-12-28', '2019-04-10 04:50:53'),
(5, 'Signature Scent', 'Signature Scent', 'Signature Scent', 'Signature Scent', '', 1, 1, 1, '2018-12-28', '2019-04-10 04:51:18'),
(6, 'Blog', 'Blog', 'Blog', 'Blog', '', 1, 1, 1, '2018-12-28', '2019-04-10 04:51:39'),
(7, 'Contact Us', 'Contact Us', 'Contact Us', 'Contact Us', '', 1, 1, 1, '2018-12-28', '2019-04-10 04:52:15');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1531202974),
('m130524_201442_init', 1531202978);

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE IF NOT EXISTS `news_letter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `email`, `date`) VALUES
(1, 'charles@cdaaudit.com', '2019-02-12'),
(4, 'test@test.com', '2019-02-14'),
(5, 'capandiyaraj@gmail.com', '2019-02-20'),
(6, 'demo@demo.com', '2019-04-10');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `profile_image` varchar(15) DEFAULT NULL,
  `gallery_images` varchar(15) DEFAULT NULL,
  `colours` varchar(255) DEFAULT NULL,
  `dimenssions` longtext,
  `features` longtext,
  `coverage` mediumtext,
  `power` mediumtext,
  `scent` mediumtext,
  `other` mediumtext,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `canonical_name`, `description`, `profile_image`, `gallery_images`, `colours`, `dimenssions`, `features`, `coverage`, `power`, `scent`, `other`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'A5000', 'a5000', '<p>A5000 can be used to perfume places as diverse as hotel lobby, large exhibition hall, supermarket, wedding dress shop, Art and Photography gallery, Automobile sales service shop, office rooms, cinema and theaters.</p>\r\n', 'jpg', '', '', '<h2>Size</h2>\r\n\r\n<ul>\r\n	<li>Length &nbsp;: 12.85 inch (33cm)</li>\r\n	<li>Breadth: 11.88 inch (30cm)</li>\r\n	<li>Height &nbsp;: &nbsp;4.72 inch &nbsp;(12cm)</li>\r\n</ul>\r\n\r\n<h2>Weight</h2>\r\n\r\n<ul>\r\n	<li>19.11 lbs (8.7kg)</li>\r\n</ul>\r\n', '<p><strong>Area of Usage:-Compatibility</strong></p>\r\n\r\n<ul>\r\n	<li>Hotel Lobby &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1.Stand alone</li>\r\n	<li>Large Exhibition Hall &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 2.HVAC connected system</li>\r\n	<li>Supermarket</li>\r\n	<li>Wedding Dress Shop</li>\r\n	<li>Photography Gallery</li>\r\n	<li>Hotel</li>\r\n	<li>Automobile Sales Service Shop,</li>\r\n	<li>Office Building</li>\r\n</ul>\r\n', '<h2>Coverage</h2>\r\n\r\n<ul>\r\n	<li>6000 &ndash; 10000&nbsp;m<sup>3</sup></li>\r\n</ul>\r\n', '<h2>Power Supply</h2>\r\n\r\n<ul>\r\n	<li>100 &ndash; 220V 50/60 Hz</li>\r\n</ul>\r\n\r\n<h2>Power Consumption</h2>\r\n\r\n<ul>\r\n	<li>6V</li>\r\n</ul>\r\n', '<h2>Scent point connection</h2>\r\n\r\n<ul>\r\n	<li>one</li>\r\n</ul>\r\n\r\n<h2>Fragrance Capacity</h2>\r\n\r\n<ul>\r\n	<li>1 litre</li>\r\n</ul>\r\n', NULL, 1, 1, 1, '2019-04-10', '2019-04-10 10:47:33');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category`, `canonical_name`, `description`, `image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Small Area', 'small-area', 'CORAL WALL, S300 & K401,S200', 'jpg', 1, 1, 1, '2019-04-10', '2019-04-10 07:18:14'),
(2, 'Medium Area', 'medium-area', 'CORAL TRUNK, S1000,S15000', 'jpg', 1, 1, 1, '2019-04-10', '2019-04-10 07:19:06'),
(3, 'Large Area', 'large-area', 'B2000 & B5000,S3000,A2000,D5000,S4500', 'jpg', 1, 1, 1, '2019-04-10', '2019-04-10 07:19:26');

-- --------------------------------------------------------

--
-- Table structure for table `recipients`
--

CREATE TABLE IF NOT EXISTS `recipients` (
  `id` int(11) NOT NULL,
  `recipient_name` varchar(100) DEFAULT NULL,
  `canonical_name` varchar(200) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  `content` longtext,
  `meta_title` varchar(200) DEFAULT NULL,
  `meta_keyword` varchar(200) DEFAULT NULL,
  `meta_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipients`
--

INSERT INTO `recipients` (`id`, `recipient_name`, `canonical_name`, `image`, `content`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Malls', 'malls', 'jpg', '<p>Customized fragrances from Coral Aroma are perfectly designed arouse the imagination of discerning visitors at mall. Every day people with varying tastes visit mall. It is very difficult task of authorities to find a fragrance that will satiate the taste of every visitor. Coral Aroma&rsquo;s personalized and detailed scent has the capacity to appeal to everyone&rsquo;s tastes. The fragrance injects a refreshing pleasantness in the minds of each visitor at mall.</p>\r\n', 'Malls', 'Malls', 'Malls', 1, NULL, 1, NULL, '2019-04-09 08:19:17'),
(2, 'Offices', 'offices', 'jpg', '<p>Perfuming your office space with sublime scents comes with many benefits. Refreshing fragrances released by diffusers are known to incentivize the employees and hence improve the productivity. Customized scents have the unique distinction of creating instant impression on the minds of guests. The stand alone devices can be ideally placed in the lobby area or low noise area to produce optimum results. The sleek and stylish designs are perfectly built to suit office interiors any size.</p>\r\n', 'Offices', 'Offices', 'Offices', 1, NULL, 1, NULL, '2019-04-09 08:21:57'),
(3, 'Airports', 'airports', 'jpg', '<p>Air transport industry has become regular subscriber of beautiful scents. While plying music has traditionally been an integral part of Airport aesthetics, signature scents have gained widespread popularity in airports.&nbsp; Whether you simply trying to freshen up an otherwise mundane airport environment or you want to refresh the minds of jet-lagged travelers, Coral Aroma offers a variety of options. Extensive coverage of fragrances guarantees that every nook and cranny of Airports receives optimal scenting.</p>\r\n', 'Airports', 'Airports', 'Airports', 1, NULL, 1, NULL, '2019-04-09 08:22:52'),
(4, 'Restaurant', 'restaurant', 'jpg', '<p>A unique variety of scents are used in a large number of restaurants to only enhance the internal vibes but also to build distinctive identities. A customized and personalized scent strikes an immediate impression up on customers. Signature scents helps you creates a unique environment characterized by elegance.</p>\r\n', 'Restaurant', 'Restaurant', 'Restaurant', 1, NULL, 1, NULL, '2019-04-09 08:24:08'),
(5, 'Hotels', 'hotels', 'jpg', '<p>The flawless application of fragrance into the environment of your hotel will create unique the ambience. The more luring the scent is, the bigger the chance of it leaving a good impression on your customers. Intricately designed machines perfectly suit the interior set up found in hotels. Our customized signature scent has the distinction of stimulating the appetite of customers at dining at hotels.</p>\r\n', 'Hotels', 'Hotels', 'Hotels', 1, NULL, 1, NULL, '2019-04-09 08:24:56'),
(6, 'Events', 'events', 'jpg', '<p>Fragrances possess a unique ability to transform the atmosphere in any occasion into unforgettable experience. Coral Aroma offer powerful scents to a diverse range of places from corporate programs, art galleries to trade exhibition and wedding events. The customized scents are perfectly suitable to complement different types of events.</p>\r\n', 'Events', 'Events', 'Events', 1, NULL, 1, NULL, '2019-04-09 08:25:39'),
(7, 'Bars', 'bars', 'jpg', '<p>Today bars deploy a wide range of strategies to entice more visitors into the spot, be it with lively parties, loud music or special discounts. A large number of bars and clubs have realized the type of role that powerful fragrances play in stimulating the minds of visitors. A perfectly customized fragrance will enhance the liveliness of the bar and make visitors grow more cheerful and sociable to one another. Stimulatingly refreshing fragrances are capable of rejuvenating the moods of people hanging out at bars.</p>\r\n', 'Bars', 'Bars', 'Bars', 1, NULL, 1, NULL, '2019-04-09 08:26:26'),
(8, 'Spa', 'spa', 'jpg', '<p>People view treatment at SPA as a type of getaway from the stress and pressure of daily life. The highly invigorating scents are certain to enliven your SPA experience. In addition to infusing a pervasive pleasantness into the atmosphere of SPA, the fragrances will also stimulate the minds of those who undergo treatment.</p>\r\n', 'Spa', 'Spa', 'Spa', 1, NULL, 1, NULL, '2019-04-09 08:27:36'),
(9, 'Casino', 'casino', 'jpg', '<p>It is absolutely essential to optimize the experience of guests in Casino. Nearly every visitor to Casino shares one thing in common with each other, a desire for excitement and competitive spirit. Scenting your Casino with distinctive fragrances will ensure that customers return to experience the uniquely exhilarating fragrances. &nbsp;Markedly distinct fragrances leave long-lasting impressions in the minds of visitors at Casinos.</p>\r\n', 'Casino', 'Casino', 'Casino', 1, NULL, 1, NULL, '2019-04-09 08:28:23'),
(10, 'Fitness', 'fitness', 'jpg', '<p>The distinctive fragrance that merges into the atmosphere distinguishes your gym from its counterparts. The stimulating scent always serves as a source of energy for those who come for a rigorous work out sessions. Fragrance will perfume the place in its entirety and will inspire the fitness enthusiasts to go that extra mile. The varieties of fragrances diffused by the machine fill up the fitness centers with remarkably lively vibes.</p>\r\n', 'Fitness', 'Fitness', 'Fitness', 1, NULL, 1, NULL, '2019-04-09 08:29:12'),
(11, 'Showrooms', 'showrooms', 'jpg', '<p>Distinct fragrance released from diffuser machine is capable of redefining the true values of your brand. Whether you are retailer or manufacturer, your major goal would be to make your brand popular among the customers. Ingeniously created fragrances embody the true identity of the brand that you intend to promote. Diffusion machines are also elegantly designed and available in various colors to complement interior of your showrooms.</p>\r\n', 'Showrooms', 'Showrooms', 'Showrooms', 1, NULL, 1, NULL, '2019-04-09 08:29:56');

-- --------------------------------------------------------

--
-- Table structure for table `scent_category`
--

CREATE TABLE IF NOT EXISTS `scent_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scent_category`
--

INSERT INTO `scent_category` (`id`, `category`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Floral Notes', 1, 1, 1, '2019-04-09', '2019-04-09 05:09:57'),
(2, 'Oriental Notes', 1, 1, 1, '2019-04-09', '2019-04-09 05:09:57'),
(3, 'Woody Notes', 1, 1, 1, '2019-04-09', '2019-04-09 05:09:57'),
(4, 'Signature Notes', 1, 1, 1, '2019-04-09', '2019-04-09 05:09:57'),
(5, 'Fresh Notes', 1, 1, 1, '2019-04-09', '2019-04-09 05:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `scent_marketing`
--

CREATE TABLE IF NOT EXISTS `scent_marketing` (
  `id` int(11) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `canonical_name` varchar(255) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  `content` longtext,
  `banner_image` varchar(15) DEFAULT NULL,
  `mata_title` text,
  `meta_keyword` text,
  `meta_description` text,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scent_marketing`
--

INSERT INTO `scent_marketing` (`id`, `category`, `title`, `canonical_name`, `image`, `content`, `banner_image`, `mata_title`, `meta_keyword`, `meta_description`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, NULL, 'Floral', 'floral', 'png', '<p>Floral notes have the unique capacity to capture the true essence of a variety of flowers. Coral have managed to extract the substance of real flowers while seamlessly combining the synthetic and natural elements. Floral scents contain distinctive aroma of a variety of natural flowers. When diffused in the air, floral fragrance enlivens the atmosphere with sublime pleasantness. Coral Aroma has developed a diverse range of floral scents that have created a noticeable presence in the market. Floral fragrances appeal to the aromatic imagination of both men and women.</p>\r\n', 'jpg', 'Floral', 'Floral', 'Floral', 1, NULL, 1, NULL, '2019-04-09 06:56:52'),
(2, NULL, 'Soft Floral', 'soft-floral', 'png', '<p>Floral notes have the unique capacity to capture the true essence of a variety of flowers. Coral have managed to extract the substance of real flowers while seamlessly combining the synthetic and natural elements. Floral scents contain distinctive aroma of a variety of natural flowers. When diffused in the air, floral fragrance enlivens the atmosphere with sublime pleasantness. Coral Aroma has developed a diverse range of floral scents that have created a noticeable presence in the market. Floral fragrances appeal to the aromatic imagination of both men and women.</p>\r\n', 'jpg', 'Soft Floral', 'Soft Floral', 'Soft Floral', 1, NULL, 1, NULL, '2019-04-09 06:58:51'),
(3, NULL, 'Floral Oriental', 'floral-oriental', 'png', '<p>Floral oriental fragrances are known for producing scents that closely resemble smell of flowers. Characterized by its sweetness and warmth, floral Oriental perfumes places with a subtle trace of spiciness. Floral scents contain distinctive aroma of a variety of natural flowers. When diffused in the air, floral fragrance enlivens the atmosphere with sublime pleasantness. Coral Aroma has developed a diverse range of floral scents that have created a noticeable presence in the market.</p>\r\n', 'jpg', 'Floral Oriental', 'Floral Oriental', 'Floral Oriental', 1, NULL, 1, NULL, '2019-04-09 06:59:57'),
(4, NULL, 'Soft Oriental', 'soft-oriental', 'png', '<p>Contents will update soon</p>\r\n', 'jpg', 'Soft Oriental', 'Soft Oriental', 'Soft Oriental', 1, NULL, 1, NULL, '2019-04-09 07:04:19'),
(5, NULL, 'Spicy Oriental', 'spicy-oriental', 'png', '<p>Sensually appealing spicy oriental fragrances is extracted from spices such as nutmegs and cloves. The rich fragrances of spicy oriental are heavily inspired by oriental properties such as woods and resins. The sensually warm aroma of spicy fragrance has found special place in the hearts of scent lovers. Crafted with a delicate combination of the sandalwood, musk and other exotic flavors, the scent of spices fragrance is characterized by its warmth and durability. Each spice fragrance is imbued with distinct scents that naturally blend into the environment.</p>\r\n', 'jpg', 'Spicy Oriental', 'Spicy Oriental', 'Spicy Oriental', 1, NULL, 1, NULL, '2019-04-09 07:07:53'),
(6, NULL, 'Sweet Oriental', 'sweet-oriental', 'png', '<p>Contents will update soon</p>\r\n', 'jpg', 'Sweet Oriental', 'Sweet Oriental', 'Sweet Oriental', 1, NULL, 1, NULL, '2019-04-09 07:09:34'),
(7, NULL, 'Woody Oriental', 'woody-oriental', 'png', '<p>Contents will update soon</p>\r\n', 'jpg', 'Woody Oriental', 'Woody Oriental', 'Woody Oriental', 1, NULL, 1, NULL, '2019-04-09 07:11:44'),
(8, NULL, 'Woods & Mosses', 'woods-mosses', 'png', '<p>Contents will update soon</p>\r\n', 'jpg', 'Woods & Mosses', 'Woods & Mosses', 'Woods & Mosses', 1, NULL, 1, NULL, '2019-04-09 07:13:33'),
(9, NULL, 'Arabic Oil', 'arabic-oil', 'png', '<p>As one of the globally renowned scents available in the market today, Arabic fragrances embody the most distinctive fragrance produced by Coral Aroma. Widely known for its richness, Arabic fragrances are marked by their dark and sweet woody scents. Coral Aroma has successfully interlaced the richness and irresistible appeal of Arabic fragrances to produce the magical aroma that rejuvenates all types of environments including restaurant, airport, malls and residents.</p>\r\n', 'jpg', 'Arabic Oil', 'Arabic Oil', 'Arabic Oil', 1, NULL, 1, NULL, '2019-04-09 07:19:11'),
(10, NULL, 'Signature Scent', 'signature-scent', 'png', '<p>Working in collaboration with customers enables Coral Aroma to produce nearly inimitable scents from essential oils that are markedly identifiable with the environment. By using nuanced information derived from extensive researches, the signature scent produced by Coral Aroma seamlessly express the detailed subtleties of aromatic scents. Our expert perfumers work closely alongside clients in developing sublime fragrances that can truly represent brand identity. Our highly complex creative production involves conceiving of ideas, development and implementation. We help our clients to not only have distinctive fragrances but acquire jaw-dropping scents that will tell a special story.</p>\r\n', 'jpg', 'Signature Scent', 'Signature Scent', 'Signature Scent', 1, NULL, 1, NULL, '2019-04-09 07:19:06'),
(11, NULL, 'Water', 'water', 'png', '<p>Contents will update soon</p>\r\n', 'jpg', 'Water', 'Water', 'Water', 1, NULL, 1, NULL, '2019-04-09 07:21:15'),
(12, NULL, 'Green & Herbs', 'green-herbs', 'png', '<p>Green represents the lush imagery of freshly-cut grasses that brim with a piquant quality. Green has been traditionally credited with producing some of the most pungent essences. Herbs on the other hand are known as the aromatic one among perfumers. Herbs such as mint, rosemary and basil carry strikingly herbaceous quality that will blend into the environment with ease.</p>\r\n', 'jpg', 'Green & Herbs', 'Green & Herbs', 'Green & Herbs', 1, NULL, 1, NULL, '2019-04-09 07:22:38'),
(13, NULL, 'Citrus', 'citrus', 'png', '<p>Citruses carry the unique distinction of offering refreshing scents to the world of fragrances. Renowned for producing fragrances that can rejuvenate and cleanse your mind, Citruses adds that extra bit of elegance to the environment. The fragrance extracted from citrus releases a sense of optimism and clarity. Citrus also serves as the perfect accompaniment to other fresh notes.</p>\r\n', 'jpg', 'Citrus', 'Citrus', 'Citrus', 1, NULL, 1, NULL, '2019-04-09 07:23:47'),
(14, NULL, 'Fruity', 'fruity', 'png', '<p>Fruity fragrances have occupied a prominent position in the wheel of fragrances. Fruity fragrances produce sublimely nuanced and refreshing vibes through distinctive scents. Fruity fragrances are known for The hugely popular fragrance is known for its resistance to distillation largely due to the presence of high volume of water in its natural make up. The fragrances extracted from Peach,Strawberry and Apple are marked by their textural subtlety and have been among the popular scents in the market.</p>\r\n', 'jpg', 'Fruity', 'Fruity', 'Fruity', 1, NULL, 1, NULL, '2019-04-09 07:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `signature_scent`
--

CREATE TABLE IF NOT EXISTS `signature_scent` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` mediumtext,
  `image` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signature_scent`
--

INSERT INTO `signature_scent` (`id`, `title`, `description`, `image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Signature Scent', '<p>Working in collaboration with customers enables Coral Aroma to produce nearly inimitable scents from essential oils that are markedly identifiable with the environment. By using nuanced information derived from extensive researches, the signature scent produced by Coral Aroma seamlessly express the detailed subtleties of aromatic scents. Our expert perfumers work closely alongside clients in developing sublime fragrances that can truly represent brand identity. Our highly complex creative production involves conceiving of ideas, development and implementation. We help our clients to not only have distinctive fragrances but acquire jaw-dropping scents that will tell a special story.</p>\r\n', 'jpg', 1, 1, 1, '2019-04-09', '2019-04-09 04:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `sub_title`, `link`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Let our Essential oils to', 'jpg', 'Define your identity', '', 1, 1, 1, '2018-12-20', '2018-12-20 10:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int(11) NOT NULL,
  `message` text,
  `author` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `image` varchar(15) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `CB` int(11) DEFAULT NULL,
  `UB` int(11) DEFAULT NULL,
  `DOC` date DEFAULT NULL,
  `DOU` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `message`, `author`, `designation`, `image`, `status`, `CB`, `UB`, `DOC`, `DOU`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', 'Jithin Jacob', 'Assistant Manager - KPMG', 'jpg', 1, 1, 1, '2019-01-14', '2019-04-08 09:14:40'),
(2, 'When it comes to financial and accounting matters nobody can compete with him. I am sure that Charles & his team can satisfy all the clients as well. In my opinion he is very good in controlling cost & advising for better decision making. Such a hardworking and dedicated individual is just a reason why we love the whole experience from CDA.', 'Nabil Yasin', 'Managing Partner - Al Nahdah National Insurance Brokers Co. LLC', 'jpg', 1, 1, 1, '2019-01-14', '2019-04-09 09:56:20'),
(3, 'CDA is really great at completing works before deadline. At the same time, CDA gave us exceptional accuracy, highly responsive, highly professional and experts in IFRS & UAE VAT Laws. It’s also great to have reports and schedules that meet our requirements. Altogether, the services from CDA is worth having at any cost.', 'Thomas Esow', 'Finace Director - Al Andalous Electromechanical Works Co. LLC', 'jpg', 1, 1, 1, '2019-01-24', '2019-04-09 09:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_posts`
--
ALTER TABLE `admin_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `fk-admin_users-post_id` (`post_id`);

--
-- Indexes for table `baner_images`
--
ALTER TABLE `baner_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts_info`
--
ALTER TABLE `contacts_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_contents`
--
ALTER TABLE `home_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_tags`
--
ALTER TABLE `meta_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipients`
--
ALTER TABLE `recipients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scent_category`
--
ALTER TABLE `scent_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scent_marketing`
--
ALTER TABLE `scent_marketing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signature_scent`
--
ALTER TABLE `signature_scent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_posts`
--
ALTER TABLE `admin_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `baner_images`
--
ALTER TABLE `baner_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contacts_info`
--
ALTER TABLE `contacts_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_enquiry`
--
ALTER TABLE `contact_enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `forgot_password_tokens`
--
ALTER TABLE `forgot_password_tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `home_contents`
--
ALTER TABLE `home_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `meta_tags`
--
ALTER TABLE `meta_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `recipients`
--
ALTER TABLE `recipients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `scent_category`
--
ALTER TABLE `scent_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `scent_marketing`
--
ALTER TABLE `scent_marketing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `signature_scent`
--
ALTER TABLE `signature_scent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
