/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.1.13-MariaDB : Database - alphafk6_heelp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`alphafk6_heelp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `alphafk6_heelp`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `about` */

insert  into `about`(`id`,`title`,`description`,`date_created`,`date_updated`) values 
(1,'gfdf','fgfgdgfgfdgfdgfd','2020-03-19 00:00:00','2020-03-19 17:12:45');

/*Table structure for table `about_content` */

DROP TABLE IF EXISTS `about_content`;

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_title` varchar(150) NOT NULL,
  `about_image` varchar(300) NOT NULL,
  `about_content` varchar(800) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `about_content` */

insert  into `about_content`(`id`,`about_title`,`about_image`,`about_content`) values 
(1,'Our Approach','concept12.png','<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #f9f9f9;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span><span style=\"vertical-align: inherit;\">Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. </span><span style=\"vertical-align: inherit;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>&lt;s');

/*Table structure for table `about_team` */

DROP TABLE IF EXISTS `about_team`;

CREATE TABLE `about_team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `team_title` varchar(30) NOT NULL,
  `team_image` varchar(100) NOT NULL,
  `team_content` varchar(500) NOT NULL,
  `team_fb` varchar(50) NOT NULL,
  `team_insta` varchar(50) NOT NULL,
  `team_whatsp` varchar(50) NOT NULL,
  `team_twitter` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `about_team` */

insert  into `about_team`(`id`,`team_title`,`team_image`,`team_content`,`team_fb`,`team_insta`,`team_whatsp`,`team_twitter`) values 
(1,'title1','user.png','Lorem Ipsum is simply dummy text of the printing a...','alphawizz.com','alphawizz.com','alphawizz.com','alphawizz.com'),
(2,'title2','user3.png','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever sinc.','alphawizz.com','alphawizz.com','alphawizz.com','alphawizz.com'),
(3,'title3','user.png','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever sinc.','alphawizz.com','alphawizz.com','alphawizz.com','alphawizz.com'),
(4,'title4','user.png','Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever sinc.','alphawizz.com','alphawizz.com','alphawizz.com','alphawizz.com');

/*Table structure for table `add_discuss` */

DROP TABLE IF EXISTS `add_discuss`;

CREATE TABLE `add_discuss` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `reciver_id` int(25) NOT NULL,
  `sender_id` int(25) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `add_discuss` */

/*Table structure for table `addons` */

DROP TABLE IF EXISTS `addons`;

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `unique_identifier` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `version` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `activated` int(1) NOT NULL DEFAULT '1',
  `image` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

/*Data for the table `addons` */

insert  into `addons`(`id`,`name`,`unique_identifier`,`version`,`activated`,`image`,`created_at`,`updated_at`) values 
(10,'Offline Payment','offline_payment','1.1',1,'offline_banner.jpg','2020-06-17 22:36:29','2020-06-17 22:36:29'),
(11,'refund','refund_request','1.0',1,'refund_request.png','2020-06-17 22:36:46','2020-06-17 22:36:46');

/*Table structure for table `addresses` */

DROP TABLE IF EXISTS `addresses`;

CREATE TABLE `addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `set_default` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `addresses` */

insert  into `addresses`(`id`,`user_id`,`address`,`country`,`city`,`postal_code`,`phone`,`set_default`,`created_at`,`updated_at`) values 
(1,77,'Santasi','Ghana','kumasi','Digital address - AG -0754-0698','+23355855774',0,'2020-09-17 13:24:29','2020-09-17 13:24:29');

/*Table structure for table `app_settings` */

DROP TABLE IF EXISTS `app_settings`;

CREATE TABLE `app_settings` (
  `id` int(11) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency_id` int(11) DEFAULT NULL,
  `currency_format` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_plus` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `app_settings` */

insert  into `app_settings`(`id`,`name`,`logo`,`currency_id`,`currency_format`,`facebook`,`twitter`,`instagram`,`youtube`,`google_plus`,`created_at`,`updated_at`) values 
(1,'Fashions GH','uploads/logo/matggar.png',1,'symbol','https://facebook.com','https://twitter.com','https://instagram.com','https://youtube.com','https://google.com','2019-08-04 19:39:15','2019-08-04 19:39:18');

/*Table structure for table `attributes` */

DROP TABLE IF EXISTS `attributes`;

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

/*Data for the table `attributes` */

insert  into `attributes`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Size','2020-02-24 08:55:07','2020-02-24 08:55:07'),
(2,'Fabric','2020-02-24 08:55:13','2020-02-24 08:55:13');

/*Table structure for table `banners` */

DROP TABLE IF EXISTS `banners`;

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '1',
  `published` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `banners` */

/*Table structure for table `brands` */

DROP TABLE IF EXISTS `brands`;

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top` int(1) NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `brands` */

/*Table structure for table `business_settings` */

DROP TABLE IF EXISTS `business_settings`;

CREATE TABLE `business_settings` (
  `id` int(11) NOT NULL,
  `type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `business_settings` */

insert  into `business_settings`(`id`,`type`,`value`,`created_at`,`updated_at`) values 
(1,'home_default_currency','1','2018-10-16 04:35:52','2019-01-28 04:26:53'),
(2,'system_default_currency','29','2018-10-16 04:36:58','2020-06-28 18:05:53'),
(3,'currency_format','1','2018-10-17 06:01:59','2018-10-17 06:01:59'),
(4,'symbol_format','1','2018-10-17 06:01:59','2019-01-20 05:10:55'),
(5,'no_of_decimals','3','2018-10-17 06:01:59','2020-03-04 03:57:16'),
(6,'product_activation','1','2018-10-28 04:38:37','2019-02-04 04:11:41'),
(7,'vendor_system_activation','1','2018-10-28 10:44:16','2020-08-28 13:08:18'),
(8,'show_vendors','1','2018-10-28 10:44:47','2019-02-04 04:11:13'),
(9,'paypal_payment','0','2018-10-28 10:45:16','2019-01-31 08:09:10'),
(10,'stripe_payment','0','2018-10-28 10:45:47','2018-11-14 04:51:51'),
(11,'cash_payment','1','2018-10-28 10:46:05','2019-01-24 06:40:18'),
(12,'payumoney_payment','0','2018-10-28 10:46:27','2019-03-05 08:41:36'),
(13,'best_selling','1','2018-12-24 11:13:44','2019-02-14 08:29:13'),
(14,'paypal_sandbox','0','2019-01-16 15:44:18','2019-01-16 15:44:18'),
(15,'sslcommerz_sandbox','1','2019-01-16 15:44:18','2019-03-14 03:07:26'),
(16,'sslcommerz_payment','0','2019-01-24 12:39:07','2019-01-29 09:13:46'),
(17,'vendor_commission','20','2019-01-31 09:18:04','2019-04-13 09:49:26'),
(18,'verification_form','[{\"type\":\"text\",\"label\":\"Collins\"},{\"type\":\"text\",\"label\":\"Emaleck\"}]','2019-02-03 14:36:58','2020-08-31 22:52:24'),
(19,'google_analytics','0','2019-02-06 15:22:35','2020-08-24 17:44:07'),
(20,'facebook_login','0','2019-02-07 15:51:59','2019-02-08 22:41:15'),
(21,'google_login','0','2019-02-07 15:52:10','2019-02-08 22:41:14'),
(22,'twitter_login','0','2019-02-07 15:52:20','2019-02-08 05:32:56'),
(23,'payumoney_payment','1','2019-03-05 14:38:17','2019-03-05 14:38:17'),
(24,'payumoney_sandbox','1','2019-03-05 14:38:17','2019-03-05 08:39:18'),
(36,'facebook_chat','0','2019-04-15 14:45:04','2019-04-15 14:45:04'),
(37,'email_verification','0','2019-04-30 10:30:07','2020-09-16 13:12:28'),
(38,'wallet_system','1','2019-05-19 11:05:44','2020-06-17 23:18:53'),
(39,'coupon_system','0','2019-06-11 12:46:18','2019-06-11 12:46:18'),
(40,'current_version','3.3','2019-06-11 12:46:18','2019-06-11 12:46:18'),
(41,'instamojo_payment','0','2019-07-06 12:58:03','2019-07-06 12:58:03'),
(42,'instamojo_sandbox','1','2019-07-06 12:58:43','2019-07-06 12:58:43'),
(43,'razorpay','0','2019-07-06 12:58:43','2019-07-06 12:58:43'),
(44,'paystack','0','2019-07-21 16:00:38','2019-07-21 16:00:38'),
(45,'pickup_point','1','2019-10-17 14:50:39','2020-06-17 23:18:59'),
(46,'maintenance_mode','0','2019-10-17 14:51:04','2020-08-24 18:02:29'),
(47,'voguepay','0','2019-10-17 14:51:24','2019-10-17 14:51:24'),
(48,'voguepay_sandbox','0','2019-10-17 14:51:38','2019-10-17 14:51:38'),
(50,'category_wise_commission','0','2020-01-21 10:22:47','2020-01-21 10:22:47'),
(51,'conversation_system','1','2020-01-21 10:23:21','2020-01-21 10:23:21'),
(52,'guest_checkout_active','1','2020-01-22 10:36:38','2020-01-22 10:36:38'),
(53,'facebook_pixel','0','2020-01-22 14:43:58','2020-01-22 14:43:58'),
(55,'classified_product','0','2020-05-13 16:01:05','2020-05-13 16:01:05'),
(56,'pos_activation_for_seller','1','2020-06-11 12:45:02','2020-06-11 12:45:02'),
(57,'refund_request_time','3','2019-03-12 08:58:23','2019-03-12 08:58:23'),
(58,'shipping_type','product_wise_shipping','2020-09-11 14:27:55','2020-09-11 14:27:55'),
(59,'flat_rate_shipping_cost','0','2020-09-11 14:27:55','2020-09-11 14:27:55'),
(60,'shipping_cost_admin','0','2020-09-11 14:27:55','2020-09-11 14:27:55'),
(61,'payhere_sandbox','0','2020-09-11 14:27:55','2020-09-11 14:27:55'),
(62,'payhere','0','2020-09-11 14:27:55','2020-09-11 14:27:55'),
(63,'google_recaptcha','0','2020-09-11 14:27:55','2020-09-11 14:27:55');

/*Table structure for table `card_details` */

DROP TABLE IF EXISTS `card_details`;

CREATE TABLE `card_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card_no` bigint(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL,
  `cvv` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `card_details` */

insert  into `card_details`(`id`,`card_no`,`date_created`,`date_updated`,`user_id`,`name`,`expiry`,`cvv`) values 
(2,4111111111111111,'2020-11-05 01:25:09','2020-11-05 03:25:09',163,'mycard','12/2021',123),
(3,4111111111111111,'2020-11-07 02:48:17','2020-11-07 04:48:17',162,'asdfasdf','7/2021',123);

/*Table structure for table `carts` */

DROP TABLE IF EXISTS `carts`;

CREATE TABLE `carts` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `variation` text COLLATE utf8_unicode_ci,
  `price` double(8,2) DEFAULT NULL,
  `tax` double(8,2) DEFAULT NULL,
  `shipping_cost` double(8,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `carts` */

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `commision_rate` double(8,2) NOT NULL DEFAULT '0.00',
  `banner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `featured` int(1) NOT NULL DEFAULT '0',
  `top` int(1) NOT NULL DEFAULT '0',
  `digital` int(1) NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `categories` */

/*Table structure for table `chat` */

DROP TABLE IF EXISTS `chat`;

CREATE TABLE `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `attachment_name` text NOT NULL,
  `file_ext` text NOT NULL,
  `mime_type` text NOT NULL,
  `message_date_time` text NOT NULL,
  `ip_address` text NOT NULL,
  `project_id` int(255) NOT NULL,
  `read_status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

/*Data for the table `chat` */

/*Table structure for table `chat_files` */

DROP TABLE IF EXISTS `chat_files`;

CREATE TABLE `chat_files` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `voicefile_name` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

/*Data for the table `chat_files` */

/*Table structure for table `chat_image` */

DROP TABLE IF EXISTS `chat_image`;

CREATE TABLE `chat_image` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `image_name` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `chat_image` */

/*Table structure for table `colors` */

DROP TABLE IF EXISTS `colors`;

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `colors` */

insert  into `colors`(`id`,`name`,`code`,`created_at`,`updated_at`) values 
(1,'IndianRed','#CD5C5C','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(2,'LightCoral','#F08080','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(3,'Salmon','#FA8072','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(4,'DarkSalmon','#E9967A','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(5,'LightSalmon','#FFA07A','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(6,'Crimson','#DC143C','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(7,'Red','#FF0000','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(8,'FireBrick','#B22222','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(9,'DarkRed','#8B0000','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(10,'Pink','#FFC0CB','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(11,'LightPink','#FFB6C1','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(12,'HotPink','#FF69B4','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(13,'DeepPink','#FF1493','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(14,'MediumVioletRed','#C71585','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(15,'PaleVioletRed','#DB7093','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(16,'LightSalmon','#FFA07A','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(17,'Coral','#FF7F50','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(18,'Tomato','#FF6347','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(19,'OrangeRed','#FF4500','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(20,'DarkOrange','#FF8C00','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(21,'Orange','#FFA500','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(22,'Gold','#FFD700','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(23,'Yellow','#FFFF00','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(24,'LightYellow','#FFFFE0','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(25,'LemonChiffon','#FFFACD','2018-11-05 05:12:26','2018-11-05 05:12:26'),
(26,'LightGoldenrodYellow','#FAFAD2','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(27,'PapayaWhip','#FFEFD5','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(28,'Moccasin','#FFE4B5','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(29,'PeachPuff','#FFDAB9','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(30,'PaleGoldenrod','#EEE8AA','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(31,'Khaki','#F0E68C','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(32,'DarkKhaki','#BDB76B','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(33,'Lavender','#E6E6FA','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(34,'Thistle','#D8BFD8','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(35,'Plum','#DDA0DD','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(36,'Violet','#EE82EE','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(37,'Orchid','#DA70D6','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(38,'Fuchsia','#FF00FF','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(39,'Magenta','#FF00FF','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(40,'MediumOrchid','#BA55D3','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(41,'MediumPurple','#9370DB','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(42,'Amethyst','#9966CC','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(43,'BlueViolet','#8A2BE2','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(44,'DarkViolet','#9400D3','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(45,'DarkOrchid','#9932CC','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(46,'DarkMagenta','#8B008B','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(47,'Purple','#800080','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(48,'Indigo','#4B0082','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(49,'SlateBlue','#6A5ACD','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(50,'DarkSlateBlue','#483D8B','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(51,'MediumSlateBlue','#7B68EE','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(52,'GreenYellow','#ADFF2F','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(53,'Chartreuse','#7FFF00','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(54,'LawnGreen','#7CFC00','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(55,'Lime','#00FF00','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(56,'LimeGreen','#32CD32','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(57,'PaleGreen','#98FB98','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(58,'LightGreen','#90EE90','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(59,'MediumSpringGreen','#00FA9A','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(60,'SpringGreen','#00FF7F','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(61,'MediumSeaGreen','#3CB371','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(62,'SeaGreen','#2E8B57','2018-11-05 05:12:27','2018-11-05 05:12:27'),
(63,'ForestGreen','#228B22','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(64,'Green','#008000','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(65,'DarkGreen','#006400','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(66,'YellowGreen','#9ACD32','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(67,'OliveDrab','#6B8E23','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(68,'Olive','#808000','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(69,'DarkOliveGreen','#556B2F','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(70,'MediumAquamarine','#66CDAA','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(71,'DarkSeaGreen','#8FBC8F','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(72,'LightSeaGreen','#20B2AA','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(73,'DarkCyan','#008B8B','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(74,'Teal','#008080','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(75,'Aqua','#00FFFF','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(76,'Cyan','#00FFFF','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(77,'LightCyan','#E0FFFF','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(78,'PaleTurquoise','#AFEEEE','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(79,'Aquamarine','#7FFFD4','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(80,'Turquoise','#40E0D0','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(81,'MediumTurquoise','#48D1CC','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(82,'DarkTurquoise','#00CED1','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(83,'CadetBlue','#5F9EA0','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(84,'SteelBlue','#4682B4','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(85,'LightSteelBlue','#B0C4DE','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(86,'PowderBlue','#B0E0E6','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(87,'LightBlue','#ADD8E6','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(88,'SkyBlue','#87CEEB','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(89,'LightSkyBlue','#87CEFA','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(90,'DeepSkyBlue','#00BFFF','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(91,'DodgerBlue','#1E90FF','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(92,'CornflowerBlue','#6495ED','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(93,'MediumSlateBlue','#7B68EE','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(94,'RoyalBlue','#4169E1','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(95,'Blue','#0000FF','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(96,'MediumBlue','#0000CD','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(97,'DarkBlue','#00008B','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(98,'Navy','#000080','2018-11-05 05:12:28','2018-11-05 05:12:28'),
(99,'MidnightBlue','#191970','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(100,'Cornsilk','#FFF8DC','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(101,'BlanchedAlmond','#FFEBCD','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(102,'Bisque','#FFE4C4','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(103,'NavajoWhite','#FFDEAD','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(104,'Wheat','#F5DEB3','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(105,'BurlyWood','#DEB887','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(106,'Tan','#D2B48C','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(107,'RosyBrown','#BC8F8F','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(108,'SandyBrown','#F4A460','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(109,'Goldenrod','#DAA520','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(110,'DarkGoldenrod','#B8860B','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(111,'Peru','#CD853F','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(112,'Chocolate','#D2691E','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(113,'SaddleBrown','#8B4513','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(114,'Sienna','#A0522D','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(115,'Brown','#A52A2A','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(116,'Maroon','#800000','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(117,'White','#FFFFFF','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(118,'Snow','#FFFAFA','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(119,'Honeydew','#F0FFF0','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(120,'MintCream','#F5FFFA','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(121,'Azure','#F0FFFF','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(122,'AliceBlue','#F0F8FF','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(123,'GhostWhite','#F8F8FF','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(124,'WhiteSmoke','#F5F5F5','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(125,'Seashell','#FFF5EE','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(126,'Beige','#F5F5DC','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(127,'OldLace','#FDF5E6','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(128,'FloralWhite','#FFFAF0','2018-11-05 05:12:29','2018-11-05 05:12:29'),
(129,'Ivory','#FFFFF0','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(130,'AntiqueWhite','#FAEBD7','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(131,'Linen','#FAF0E6','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(132,'LavenderBlush','#FFF0F5','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(133,'MistyRose','#FFE4E1','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(134,'Gainsboro','#DCDCDC','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(135,'LightGrey','#D3D3D3','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(136,'Silver','#C0C0C0','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(137,'DarkGray','#A9A9A9','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(138,'Gray','#808080','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(139,'DimGray','#696969','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(140,'LightSlateGray','#778899','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(141,'SlateGray','#708090','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(142,'DarkSlateGray','#2F4F4F','2018-11-05 05:12:30','2018-11-05 05:12:30'),
(143,'Black','#000000','2018-11-05 05:12:30','2018-11-05 05:12:30');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`id`,`title`,`description`,`email`) values 
(1,'abcd','this is contact form','sonali@gmail.com');

/*Table structure for table `contact_content` */

DROP TABLE IF EXISTS `contact_content`;

CREATE TABLE `contact_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_section_title1` varchar(50) NOT NULL,
  `contact_section_image1` varchar(100) NOT NULL,
  `contact_section_content1` varchar(500) NOT NULL,
  `contact_map` varchar(300) NOT NULL,
  `address_title` varchar(100) NOT NULL,
  `address_content` varchar(300) NOT NULL,
  `call_us_title` varchar(100) NOT NULL,
  `call_us_content` varchar(300) NOT NULL,
  `email_title` varchar(100) NOT NULL,
  `email_content` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contact_content` */

insert  into `contact_content`(`id`,`contact_section_title1`,`contact_section_image1`,`contact_section_content1`,`contact_map`,`address_title`,`address_content`,`call_us_title`,`call_us_content`,`email_title`,`email_content`) values 
(1,'Contact us','Contact_img1.png','<p><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">We are a design studio partnering with brands of multiple industries scattered all across the globe. </span></span></span><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Our work is to build.</span></span></span></span></p>','','Address','<p>Freinville 93270 Sevran-France</p>','Call Us','<p>(+33)09 75 61 33 38</p>\r\n','E-Mail','<p>Contact@heelp.fr</p>');

/*Table structure for table `conversations` */

DROP TABLE IF EXISTS `conversations`;

CREATE TABLE `conversations` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `title` varchar(1000) COLLATE utf32_unicode_ci DEFAULT NULL,
  `sender_viewed` int(1) NOT NULL DEFAULT '1',
  `receiver_viewed` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

/*Data for the table `conversations` */

insert  into `conversations`(`id`,`sender_id`,`receiver_id`,`title`,`sender_viewed`,`receiver_viewed`,`created_at`,`updated_at`) values 
(1,64,63,'product Name',1,0,'2020-08-25 16:10:22','2020-08-25 16:10:22'),
(2,64,63,'product Name',1,0,'2020-08-25 16:13:02','2020-08-25 16:13:02'),
(3,64,63,'product Name',1,0,'2020-08-25 18:07:31','2020-08-25 18:07:31');

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `countries` */

insert  into `countries`(`id`,`code`,`name`,`status`,`created_at`,`updated_at`) values 
(1,'AF','Afghanistan',1,NULL,NULL),
(2,'AL','Albania',1,NULL,NULL),
(3,'DZ','Algeria',1,NULL,NULL),
(4,'DS','American Samoa',1,NULL,NULL),
(5,'AD','Andorra',1,NULL,NULL),
(6,'AO','Angola',1,NULL,NULL),
(7,'AI','Anguilla',1,NULL,NULL),
(8,'AQ','Antarctica',1,NULL,NULL),
(9,'AG','Antigua and Barbuda',1,NULL,NULL),
(10,'AR','Argentina',1,NULL,NULL),
(11,'AM','Armenia',1,NULL,NULL),
(12,'AW','Aruba',1,NULL,NULL),
(13,'AU','Australia',1,NULL,NULL),
(14,'AT','Austria',1,NULL,NULL),
(15,'AZ','Azerbaijan',1,NULL,NULL),
(16,'BS','Bahamas',1,NULL,NULL),
(17,'BH','Bahrain',1,NULL,NULL),
(18,'BD','Bangladesh',1,NULL,NULL),
(19,'BB','Barbados',1,NULL,NULL),
(20,'BY','Belarus',1,NULL,NULL),
(21,'BE','Belgium',1,NULL,NULL),
(22,'BZ','Belize',1,NULL,NULL),
(23,'BJ','Benin',1,NULL,NULL),
(24,'BM','Bermuda',1,NULL,NULL),
(25,'BT','Bhutan',1,NULL,NULL),
(26,'BO','Bolivia',1,NULL,NULL),
(27,'BA','Bosnia and Herzegovina',1,NULL,NULL),
(28,'BW','Botswana',1,NULL,NULL),
(29,'BV','Bouvet Island',1,NULL,NULL),
(30,'BR','Brazil',1,NULL,NULL),
(31,'IO','British Indian Ocean Territory',1,NULL,NULL),
(32,'BN','Brunei Darussalam',1,NULL,NULL),
(33,'BG','Bulgaria',1,NULL,NULL),
(34,'BF','Burkina Faso',1,NULL,NULL),
(35,'BI','Burundi',1,NULL,NULL),
(36,'KH','Cambodia',1,NULL,NULL),
(37,'CM','Cameroon',1,NULL,NULL),
(38,'CA','Canada',1,NULL,NULL),
(39,'CV','Cape Verde',1,NULL,NULL),
(40,'KY','Cayman Islands',1,NULL,NULL),
(41,'CF','Central African Republic',1,NULL,NULL),
(42,'TD','Chad',1,NULL,NULL),
(43,'CL','Chile',1,NULL,NULL),
(44,'CN','China',1,NULL,NULL),
(45,'CX','Christmas Island',1,NULL,NULL),
(46,'CC','Cocos (Keeling) Islands',1,NULL,NULL),
(47,'CO','Colombia',1,NULL,NULL),
(48,'KM','Comoros',1,NULL,NULL),
(49,'CG','Congo',1,NULL,NULL),
(50,'CK','Cook Islands',1,NULL,NULL),
(51,'CR','Costa Rica',1,NULL,NULL),
(52,'HR','Croatia (Hrvatska)',1,NULL,NULL),
(53,'CU','Cuba',1,NULL,NULL),
(54,'CY','Cyprus',1,NULL,NULL),
(55,'CZ','Czech Republic',1,NULL,NULL),
(56,'DK','Denmark',1,NULL,NULL),
(57,'DJ','Djibouti',1,NULL,NULL),
(58,'DM','Dominica',1,NULL,NULL),
(59,'DO','Dominican Republic',1,NULL,NULL),
(60,'TP','East Timor',1,NULL,NULL),
(61,'EC','Ecuador',1,NULL,NULL),
(62,'EG','Egypt',1,NULL,NULL),
(63,'SV','El Salvador',1,NULL,NULL),
(64,'GQ','Equatorial Guinea',1,NULL,NULL),
(65,'ER','Eritrea',1,NULL,NULL),
(66,'EE','Estonia',1,NULL,NULL),
(67,'ET','Ethiopia',1,NULL,NULL),
(68,'FK','Falkland Islands (Malvinas)',1,NULL,NULL),
(69,'FO','Faroe Islands',1,NULL,NULL),
(70,'FJ','Fiji',1,NULL,NULL),
(71,'FI','Finland',1,NULL,NULL),
(72,'FR','France',1,NULL,NULL),
(73,'FX','France, Metropolitan',1,NULL,NULL),
(74,'GF','French Guiana',1,NULL,NULL),
(75,'PF','French Polynesia',1,NULL,NULL),
(76,'TF','French Southern Territories',1,NULL,NULL),
(77,'GA','Gabon',1,NULL,NULL),
(78,'GM','Gambia',1,NULL,NULL),
(79,'GE','Georgia',1,NULL,NULL),
(80,'DE','Germany',1,NULL,NULL),
(81,'GH','Ghana',1,NULL,NULL),
(82,'GI','Gibraltar',1,NULL,NULL),
(83,'GK','Guernsey',1,NULL,NULL),
(84,'GR','Greece',1,NULL,NULL),
(85,'GL','Greenland',1,NULL,NULL),
(86,'GD','Grenada',1,NULL,NULL),
(87,'GP','Guadeloupe',1,NULL,NULL),
(88,'GU','Guam',1,NULL,NULL),
(89,'GT','Guatemala',1,NULL,NULL),
(90,'GN','Guinea',1,NULL,NULL),
(91,'GW','Guinea-Bissau',1,NULL,NULL),
(92,'GY','Guyana',1,NULL,NULL),
(93,'HT','Haiti',1,NULL,NULL),
(94,'HM','Heard and Mc Donald Islands',1,NULL,NULL),
(95,'HN','Honduras',1,NULL,NULL),
(96,'HK','Hong Kong',1,NULL,NULL),
(97,'HU','Hungary',1,NULL,NULL),
(98,'IS','Iceland',1,NULL,NULL),
(99,'IN','India',1,NULL,NULL),
(100,'IM','Isle of Man',1,NULL,NULL),
(101,'ID','Indonesia',1,NULL,NULL),
(102,'IR','Iran (Islamic Republic of)',1,NULL,NULL),
(103,'IQ','Iraq',1,NULL,NULL),
(104,'IE','Ireland',1,NULL,NULL),
(105,'IL','Israel',1,NULL,NULL),
(106,'IT','Italy',1,NULL,NULL),
(107,'CI','Ivory Coast',1,NULL,NULL),
(108,'JE','Jersey',1,NULL,NULL),
(109,'JM','Jamaica',1,NULL,NULL),
(110,'JP','Japan',1,NULL,NULL),
(111,'JO','Jordan',1,NULL,NULL),
(112,'KZ','Kazakhstan',1,NULL,NULL),
(113,'KE','Kenya',1,NULL,NULL),
(114,'KI','Kiribati',1,NULL,NULL),
(115,'KP','Korea, Democratic People\'s Republic of',1,NULL,NULL),
(116,'KR','Korea, Republic of',1,NULL,NULL),
(117,'XK','Kosovo',1,NULL,NULL),
(118,'KW','Kuwait',1,NULL,NULL),
(119,'KG','Kyrgyzstan',1,NULL,NULL),
(120,'LA','Lao People\'s Democratic Republic',1,NULL,NULL),
(121,'LV','Latvia',1,NULL,NULL),
(122,'LB','Lebanon',1,NULL,NULL),
(123,'LS','Lesotho',1,NULL,NULL),
(124,'LR','Liberia',1,NULL,NULL),
(125,'LY','Libyan Arab Jamahiriya',1,NULL,NULL),
(126,'LI','Liechtenstein',1,NULL,NULL),
(127,'LT','Lithuania',1,NULL,NULL),
(128,'LU','Luxembourg',1,NULL,NULL),
(129,'MO','Macau',1,NULL,NULL),
(130,'MK','Macedonia',1,NULL,NULL),
(131,'MG','Madagascar',1,NULL,NULL),
(132,'MW','Malawi',1,NULL,NULL),
(133,'MY','Malaysia',1,NULL,NULL),
(134,'MV','Maldives',1,NULL,NULL),
(135,'ML','Mali',1,NULL,NULL),
(136,'MT','Malta',1,NULL,NULL),
(137,'MH','Marshall Islands',1,NULL,NULL),
(138,'MQ','Martinique',1,NULL,NULL),
(139,'MR','Mauritania',1,NULL,NULL),
(140,'MU','Mauritius',1,NULL,NULL),
(141,'TY','Mayotte',1,NULL,NULL),
(142,'MX','Mexico',1,NULL,NULL),
(143,'FM','Micronesia, Federated States of',1,NULL,NULL),
(144,'MD','Moldova, Republic of',1,NULL,NULL),
(145,'MC','Monaco',1,NULL,NULL),
(146,'MN','Mongolia',1,NULL,NULL),
(147,'ME','Montenegro',1,NULL,NULL),
(148,'MS','Montserrat',1,NULL,NULL),
(149,'MA','Morocco',1,NULL,NULL),
(150,'MZ','Mozambique',1,NULL,NULL),
(151,'MM','Myanmar',1,NULL,NULL),
(152,'NA','Namibia',1,NULL,NULL),
(153,'NR','Nauru',1,NULL,NULL),
(154,'NP','Nepal',1,NULL,NULL),
(155,'NL','Netherlands',1,NULL,NULL),
(156,'AN','Netherlands Antilles',1,NULL,NULL),
(157,'NC','New Caledonia',1,NULL,NULL),
(158,'NZ','New Zealand',1,NULL,NULL),
(159,'NI','Nicaragua',1,NULL,NULL),
(160,'NE','Niger',1,NULL,NULL),
(161,'NG','Nigeria',1,NULL,NULL),
(162,'NU','Niue',1,NULL,NULL),
(163,'NF','Norfolk Island',1,NULL,NULL),
(164,'MP','Northern Mariana Islands',1,NULL,NULL),
(165,'NO','Norway',1,NULL,NULL),
(166,'OM','Oman',1,NULL,NULL),
(167,'PK','Pakistan',1,NULL,NULL),
(168,'PW','Palau',1,NULL,NULL),
(169,'PS','Palestine',1,NULL,NULL),
(170,'PA','Panama',1,NULL,NULL),
(171,'PG','Papua New Guinea',1,NULL,NULL),
(172,'PY','Paraguay',1,NULL,NULL),
(173,'PE','Peru',1,NULL,NULL),
(174,'PH','Philippines',1,NULL,NULL),
(175,'PN','Pitcairn',1,NULL,NULL),
(176,'PL','Poland',1,NULL,NULL),
(177,'PT','Portugal',1,NULL,NULL),
(178,'PR','Puerto Rico',1,NULL,NULL),
(179,'QA','Qatar',1,NULL,NULL),
(180,'RE','Reunion',1,NULL,NULL),
(181,'RO','Romania',1,NULL,NULL),
(182,'RU','Russian Federation',1,NULL,NULL),
(183,'RW','Rwanda',1,NULL,NULL),
(184,'KN','Saint Kitts and Nevis',1,NULL,NULL),
(185,'LC','Saint Lucia',1,NULL,NULL),
(186,'VC','Saint Vincent and the Grenadines',1,NULL,NULL),
(187,'WS','Samoa',1,NULL,NULL),
(188,'SM','San Marino',1,NULL,NULL),
(189,'ST','Sao Tome and Principe',1,NULL,NULL),
(190,'SA','Saudi Arabia',1,NULL,NULL),
(191,'SN','Senegal',1,NULL,NULL),
(192,'RS','Serbia',1,NULL,NULL),
(193,'SC','Seychelles',1,NULL,NULL),
(194,'SL','Sierra Leone',1,NULL,NULL),
(195,'SG','Singapore',1,NULL,NULL),
(196,'SK','Slovakia',1,NULL,NULL),
(197,'SI','Slovenia',1,NULL,NULL),
(198,'SB','Solomon Islands',1,NULL,NULL),
(199,'SO','Somalia',1,NULL,NULL),
(200,'ZA','South Africa',1,NULL,NULL),
(201,'GS','South Georgia South Sandwich Islands',1,NULL,NULL),
(202,'SS','South Sudan',1,NULL,NULL),
(203,'ES','Spain',1,NULL,NULL),
(204,'LK','Sri Lanka',1,NULL,NULL),
(205,'SH','St. Helena',1,NULL,NULL),
(206,'PM','St. Pierre and Miquelon',1,NULL,NULL),
(207,'SD','Sudan',1,NULL,NULL),
(208,'SR','Suriname',1,NULL,NULL),
(209,'SJ','Svalbard and Jan Mayen Islands',1,NULL,NULL),
(210,'SZ','Swaziland',1,NULL,NULL),
(211,'SE','Sweden',1,NULL,NULL),
(212,'CH','Switzerland',1,NULL,NULL),
(213,'SY','Syrian Arab Republic',1,NULL,NULL),
(214,'TW','Taiwan',1,NULL,NULL),
(215,'TJ','Tajikistan',1,NULL,NULL),
(216,'TZ','Tanzania, United Republic of',1,NULL,NULL),
(217,'TH','Thailand',1,NULL,NULL),
(218,'TG','Togo',1,NULL,NULL),
(219,'TK','Tokelau',1,NULL,NULL),
(220,'TO','Tonga',1,NULL,NULL),
(221,'TT','Trinidad and Tobago',1,NULL,NULL),
(222,'TN','Tunisia',1,NULL,NULL),
(223,'TR','Turkey',1,NULL,NULL),
(224,'TM','Turkmenistan',1,NULL,NULL),
(225,'TC','Turks and Caicos Islands',1,NULL,NULL),
(226,'TV','Tuvalu',1,NULL,NULL),
(227,'UG','Uganda',1,NULL,NULL),
(228,'UA','Ukraine',1,NULL,NULL),
(229,'AE','United Arab Emirates',1,NULL,NULL),
(230,'GB','United Kingdom',1,NULL,NULL),
(231,'US','United States',1,NULL,NULL),
(232,'UM','United States minor outlying islands',1,NULL,NULL),
(233,'UY','Uruguay',1,NULL,NULL),
(234,'UZ','Uzbekistan',1,NULL,NULL),
(235,'VU','Vanuatu',1,NULL,NULL),
(236,'VA','Vatican City State',1,NULL,NULL),
(237,'VE','Venezuela',1,NULL,NULL),
(238,'VN','Vietnam',1,NULL,NULL),
(239,'VG','Virgin Islands (British)',1,NULL,NULL),
(240,'VI','Virgin Islands (U.S.)',1,NULL,NULL),
(241,'WF','Wallis and Futuna Islands',1,NULL,NULL),
(242,'EH','Western Sahara',1,NULL,NULL),
(243,'YE','Yemen',1,NULL,NULL),
(244,'ZR','Zaire',1,NULL,NULL),
(245,'ZM','Zambia',1,NULL,NULL),
(246,'ZW','Zimbabwe',1,NULL,NULL),
(247,'AF','Afghanistan',1,NULL,NULL),
(248,'AL','Albania',1,NULL,NULL),
(249,'DZ','Algeria',1,NULL,NULL),
(250,'DS','American Samoa',1,NULL,NULL),
(251,'AD','Andorra',1,NULL,NULL),
(252,'AO','Angola',1,NULL,NULL),
(253,'AI','Anguilla',1,NULL,NULL),
(254,'AQ','Antarctica',1,NULL,NULL),
(255,'AG','Antigua and Barbuda',1,NULL,NULL),
(256,'AR','Argentina',1,NULL,NULL),
(257,'AM','Armenia',1,NULL,NULL),
(258,'AW','Aruba',1,NULL,NULL),
(259,'AU','Australia',1,NULL,NULL),
(260,'AT','Austria',1,NULL,NULL),
(261,'AZ','Azerbaijan',1,NULL,NULL),
(262,'BS','Bahamas',1,NULL,NULL),
(263,'BH','Bahrain',1,NULL,NULL),
(264,'BD','Bangladesh',1,NULL,NULL),
(265,'BB','Barbados',1,NULL,NULL),
(266,'BY','Belarus',1,NULL,NULL),
(267,'BE','Belgium',1,NULL,NULL),
(268,'BZ','Belize',1,NULL,NULL),
(269,'BJ','Benin',1,NULL,NULL),
(270,'BM','Bermuda',1,NULL,NULL),
(271,'BT','Bhutan',1,NULL,NULL),
(272,'BO','Bolivia',1,NULL,NULL),
(273,'BA','Bosnia and Herzegovina',1,NULL,NULL),
(274,'BW','Botswana',1,NULL,NULL),
(275,'BV','Bouvet Island',1,NULL,NULL),
(276,'BR','Brazil',1,NULL,NULL),
(277,'IO','British Indian Ocean Territory',1,NULL,NULL),
(278,'BN','Brunei Darussalam',1,NULL,NULL),
(279,'BG','Bulgaria',1,NULL,NULL),
(280,'BF','Burkina Faso',1,NULL,NULL),
(281,'BI','Burundi',1,NULL,NULL),
(282,'KH','Cambodia',1,NULL,NULL),
(283,'CM','Cameroon',1,NULL,NULL),
(284,'CA','Canada',1,NULL,NULL),
(285,'CV','Cape Verde',1,NULL,NULL),
(286,'KY','Cayman Islands',1,NULL,NULL),
(287,'CF','Central African Republic',1,NULL,NULL),
(288,'TD','Chad',1,NULL,NULL),
(289,'CL','Chile',1,NULL,NULL),
(290,'CN','China',1,NULL,NULL),
(291,'CX','Christmas Island',1,NULL,NULL),
(292,'CC','Cocos (Keeling) Islands',1,NULL,NULL),
(293,'CO','Colombia',1,NULL,NULL),
(294,'KM','Comoros',1,NULL,NULL),
(295,'CG','Congo',1,NULL,NULL),
(296,'CK','Cook Islands',1,NULL,NULL);

/*Table structure for table `coupon_usages` */

DROP TABLE IF EXISTS `coupon_usages`;

CREATE TABLE `coupon_usages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `coupon_usages` */

/*Table structure for table `coupons` */

DROP TABLE IF EXISTS `coupons`;

CREATE TABLE `coupons` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `discount` double(8,2) NOT NULL,
  `discount_type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` int(15) NOT NULL,
  `end_date` int(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `coupons` */

/*Table structure for table `currencies` */

DROP TABLE IF EXISTS `currencies`;

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exchange_rate` double(10,5) NOT NULL,
  `status` int(10) NOT NULL DEFAULT '0',
  `code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `currencies` */

insert  into `currencies`(`id`,`name`,`symbol`,`exchange_rate`,`status`,`code`,`created_at`,`updated_at`) values 
(1,'U.S. Dollar','$',1.00000,0,'USD','2018-10-09 14:35:08','2020-06-28 18:04:22'),
(2,'Australian Dollar','$',1.28000,0,'AUD','2018-10-09 14:35:08','2020-06-17 23:18:06'),
(5,'Brazilian Real','R$',3.25000,0,'BRL','2018-10-09 14:35:08','2020-06-17 23:18:01'),
(6,'Canadian Dollar','$',1.27000,0,'CAD','2018-10-09 14:35:08','2020-06-17 23:17:57'),
(7,'Czech Koruna','Kč',20.65000,0,'CZK','2018-10-09 14:35:08','2020-06-17 23:17:55'),
(8,'Danish Krone','kr',6.05000,0,'DKK','2018-10-09 14:35:08','2020-06-17 23:17:52'),
(9,'Euro','€',0.85000,0,'EUR','2018-10-09 14:35:08','2020-06-17 23:17:51'),
(10,'Hong Kong Dollar','$',7.83000,0,'HKD','2018-10-09 14:35:08','2020-06-17 23:17:50'),
(11,'Hungarian Forint','Ft',255.24000,0,'HUF','2018-10-09 14:35:08','2020-06-17 23:17:49'),
(12,'Israeli New Sheqel','₪',3.48000,0,'ILS','2018-10-09 14:35:08','2020-06-17 23:17:49'),
(13,'Japanese Yen','¥',107.12000,0,'JPY','2018-10-09 14:35:08','2020-08-24 17:18:16'),
(14,'Malaysian Ringgit','RM',3.91000,0,'MYR','2018-10-09 14:35:08','2020-06-17 23:18:24'),
(15,'Mexican Peso','$',18.72000,0,'MXN','2018-10-09 14:35:08','2020-06-17 23:18:13'),
(16,'Norwegian Krone','kr',7.83000,0,'NOK','2018-10-09 14:35:08','2020-06-17 23:18:14'),
(17,'New Zealand Dollar','$',1.38000,0,'NZD','2018-10-09 14:35:08','2020-06-17 23:18:15'),
(18,'Philippine Peso','₱',52.26000,0,'PHP','2018-10-09 14:35:08','2020-06-17 23:18:16'),
(19,'Polish Zloty','zł',3.39000,0,'PLN','2018-10-09 14:35:08','2020-06-17 23:18:17'),
(20,'Pound Sterling','£',0.72000,0,'GBP','2018-10-09 14:35:08','2020-06-17 23:18:18'),
(21,'Russian Ruble','руб',55.93000,0,'RUB','2018-10-09 14:35:08','2020-06-17 23:18:11'),
(22,'Singapore Dollar','$',1.32000,0,'SGD','2018-10-09 14:35:08','2020-06-17 23:18:20'),
(23,'Swedish Krona','kr',8.19000,0,'SEK','2018-10-09 14:35:08','2020-06-17 23:18:29'),
(24,'Swiss Franc','CHF',0.94000,0,'CHF','2018-10-09 14:35:08','2020-06-17 23:18:30'),
(26,'Thai Baht','฿',31.39000,0,'THB','2018-10-09 14:35:08','2020-06-17 23:18:31'),
(27,'Taka','৳',84.00000,0,'BDT','2018-10-09 14:35:08','2020-06-17 23:18:32'),
(28,'Indian Rupee','Rs',68.45000,0,'Rupee','2019-07-07 13:33:46','2020-06-28 18:04:49'),
(29,'GHS','₵',6.00000,1,'GH','2020-06-17 23:17:37','2020-06-17 23:18:35');

/*Table structure for table `customer_package_payments` */

DROP TABLE IF EXISTS `customer_package_payments`;

CREATE TABLE `customer_package_payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_package_id` int(11) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_details` longtext COLLATE utf8_unicode_ci NOT NULL,
  `approval` int(1) NOT NULL,
  `offline_payment` int(1) NOT NULL COMMENT '1=offline payment\r\n2=online paymnet',
  `reciept` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customer_package_payments` */

/*Table structure for table `customer_packages` */

DROP TABLE IF EXISTS `customer_packages`;

CREATE TABLE `customer_packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double(28,2) DEFAULT NULL,
  `product_upload` int(11) DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customer_packages` */

/*Table structure for table `customer_products` */

DROP TABLE IF EXISTS `customer_products`;

CREATE TABLE `customer_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `published` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `added_by` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `subsubcategory_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `photos` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `thumbnail_img` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conditon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8_unicode_ci,
  `video_provider` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video_link` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `unit` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci,
  `unit_price` double(28,2) DEFAULT '0.00',
  `meta_title` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_img` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pdf` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customer_products` */

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `customers` */

insert  into `customers`(`id`,`user_id`,`created_at`,`updated_at`) values 
(52,63,'2020-08-24 17:20:31','2020-08-24 17:20:31');

/*Table structure for table `demand_reviews` */

DROP TABLE IF EXISTS `demand_reviews`;

CREATE TABLE `demand_reviews` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `demand_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` longtext NOT NULL,
  `attachment` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `demand_reviews` */

/*Table structure for table `dispute_message` */

DROP TABLE IF EXISTS `dispute_message`;

CREATE TABLE `dispute_message` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `project_id` int(25) NOT NULL,
  `message` text NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `dispute_message` */

/*Table structure for table `flash_deal_products` */

DROP TABLE IF EXISTS `flash_deal_products`;

CREATE TABLE `flash_deal_products` (
  `id` int(11) NOT NULL,
  `flash_deal_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `discount` double(8,2) DEFAULT '0.00',
  `discount_type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `flash_deal_products` */

/*Table structure for table `flash_deals` */

DROP TABLE IF EXISTS `flash_deals`;

CREATE TABLE `flash_deals` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` int(20) DEFAULT NULL,
  `end_date` int(20) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `featured` int(1) NOT NULL DEFAULT '0',
  `background_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `text_color` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `flash_deals` */

/*Table structure for table `general_settings` */

DROP TABLE IF EXISTS `general_settings`;

CREATE TABLE `general_settings` (
  `id` int(11) NOT NULL,
  `frontend_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default',
  `logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_login_background` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `admin_login_sidebar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `instagram` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `google_plus` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `general_settings` */

insert  into `general_settings`(`id`,`frontend_color`,`logo`,`footer_logo`,`admin_logo`,`admin_login_background`,`admin_login_sidebar`,`favicon`,`site_name`,`address`,`description`,`phone`,`email`,`facebook`,`instagram`,`twitter`,`youtube`,`google_plus`,`created_at`,`updated_at`) values 
(1,'default','uploads/logo/yOO2JwfR5gltAZFqBT1RiLmqVJJSXjtZUaqKPZjH.png','uploads/logo/qYxWKpBcz0UPMRYQUloDEYsKb2H3RttUbeHMFONA.png','uploads/admin_logo/FpKBgL3AOEnOKYagSyu0McoIUgzlLg6RID8ywucM.png','uploads/admin_login_background/HRZc0GtsGpqy01bYHmxfwr6IIOmuni4JqcFFHkFZ.png','uploads/admin_login_sidebar/MDmx5P0o2G1UwpgqjMhLy3zjumUhxW3BKd5IRXhz.png','uploads/favicon/0zGffuwREwKQvg0lSeaG5Nne6MINcWiSCZmHvKiU.png','Fashions GH','Hapaspace, Adum Kumasi','We are because you are. Let\'s make it the best by patronizing fashions GH.','0208857481,0206391307','info@fashionsgh.com','https://www.facebook.com','https://www.instagram.com','https://www.twitter.com','https://www.youtube.com','https://www.googleplus.com','2020-09-16 13:14:29','2020-09-16 13:14:29');

/*Table structure for table `home_categories` */

DROP TABLE IF EXISTS `home_categories`;

CREATE TABLE `home_categories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subsubcategories` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `home_categories` */

/*Table structure for table `home_content` */

DROP TABLE IF EXISTS `home_content`;

CREATE TABLE `home_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `section_1_image` varchar(100) NOT NULL,
  `section_2_image` varchar(100) NOT NULL,
  `section_3_image` varchar(100) NOT NULL,
  `section_4_image` varchar(100) NOT NULL,
  `section_1_title` varchar(100) NOT NULL,
  `section_2_title` varchar(30) NOT NULL,
  `section_3_title` varchar(100) NOT NULL,
  `section_4_title` varchar(100) NOT NULL,
  `section_1_content` varchar(500) NOT NULL,
  `section_2_content` varchar(500) NOT NULL,
  `section_3_content` varchar(500) NOT NULL,
  `section_4_content` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `home_content` */

insert  into `home_content`(`id`,`section_1_image`,`section_2_image`,`section_3_image`,`section_4_image`,`section_1_title`,`section_2_title`,`section_3_title`,`section_4_title`,`section_1_content`,`section_2_content`,`section_3_content`,`section_4_content`) values 
(1,'banner231.png','concept1.png','','','Lorem ipsum','About us','0','0','Lorem ipsum, or lipsum as it is known sometimes known is dummy.\r\nLorem ipsum, or lipsum as it is known sometimes known is dummy.\r\n\r\nLorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have.','<p>Lorem ipsum, or lipsum as it is known sometimes known is dummy. Lorem ipsum, or lipsum as it is known sometimes known is dummy.</p>\r\n\r\n<h2>Lorem ipsum, or lipsum as it is known sometimes known is dummy. Lorem ipsum, or lipsum as it is known sometimes known is dummy.</h2>\r\n\r\n<p>&nbsp;</p>\r\n','0','0');

/*Table structure for table `home_ourteam` */

DROP TABLE IF EXISTS `home_ourteam`;

CREATE TABLE `home_ourteam` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(50) NOT NULL,
  `member_skills` varchar(255) NOT NULL,
  `member_bio` varchar(500) NOT NULL,
  `member_profile` varchar(255) NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `home_ourteam` */

insert  into `home_ourteam`(`team_id`,`member_name`,`member_skills`,`member_bio`,`member_profile`) values 
(2,'roshni','<p>php, wordpress </p>','<p>Developer</p>','user-test.png'),
(3,'Name Here','php,wordpress','','user-test1.png'),
(4,'Name Here','php ,html,js,wordpress,','Name here','user-test2.png'),
(5,'Demo ','html,angular,node.js','demo\r\n demo','user-test3.png');

/*Table structure for table `languages` */

DROP TABLE IF EXISTS `languages`;

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rtl` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `languages` */

insert  into `languages`(`id`,`name`,`code`,`rtl`,`created_at`,`updated_at`) values 
(1,'English','en',0,'2019-01-20 15:13:20','2019-01-20 15:13:20'),
(3,'Bangla','bd',0,'2019-02-17 09:35:37','2019-02-18 09:49:51'),
(4,'Arabic','sa',1,'2019-04-28 21:34:12','2019-04-28 21:34:12');

/*Table structure for table `links` */

DROP TABLE IF EXISTS `links`;

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `links` */

/*Table structure for table `litigation_permission` */

DROP TABLE IF EXISTS `litigation_permission`;

CREATE TABLE `litigation_permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mission_id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `litigation_permission` */

/*Table structure for table `litigations` */

DROP TABLE IF EXISTS `litigations`;

CREATE TABLE `litigations` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `project_id` int(25) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `comment` text NOT NULL,
  `admin_comment` text,
  `opener_id` int(25) DEFAULT NULL,
  `opponent_id` int(25) DEFAULT NULL,
  `before_status` int(25) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `open_close_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `litigations` */

/*Table structure for table `manual_payment_methods` */

DROP TABLE IF EXISTS `manual_payment_methods`;

CREATE TABLE `manual_payment_methods` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `bank_info` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `manual_payment_methods` */

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `message` text COLLATE utf32_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

/*Data for the table `messages` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1);

/*Table structure for table `mission` */

DROP TABLE IF EXISTS `mission`;

CREATE TABLE `mission` (
  `mission_id` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `mission_title` varchar(100) NOT NULL,
  `mission_budget` int(100) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `mission_category` int(10) NOT NULL,
  `project_category` int(255) NOT NULL,
  `mission_budget_currency` varchar(6) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `mission_image` longtext NOT NULL,
  `image` longtext NOT NULL,
  `mission_doc` longtext NOT NULL,
  `file` longtext NOT NULL,
  `user_id` int(100) NOT NULL,
  `client_id` int(255) NOT NULL,
  `mission_description` longtext NOT NULL,
  `description` text NOT NULL,
  `mission_status` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `accepted_by` int(255) NOT NULL,
  `created_date` date NOT NULL,
  `bank_fee` varchar(255) NOT NULL,
  `satisfy` tinyint(4) NOT NULL,
  PRIMARY KEY (`mission_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `mission` */

/*Table structure for table `notification` */

DROP TABLE IF EXISTS `notification`;

CREATE TABLE `notification` (
  `notification_id` int(100) NOT NULL AUTO_INCREMENT,
  `user_type` int(10) NOT NULL,
  `user_id` int(100) NOT NULL,
  `demand_id` int(100) NOT NULL,
  `notification` longtext NOT NULL,
  `read_status` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type_id` int(25) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=MyISAM AUTO_INCREMENT=239 DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

/*Table structure for table `oauth_access_tokens` */

DROP TABLE IF EXISTS `oauth_access_tokens`;

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oauth_access_tokens` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `profile_image` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `posts` */

/*Table structure for table `project_bidding` */

DROP TABLE IF EXISTS `project_bidding`;

CREATE TABLE `project_bidding` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `demand_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `bid_description` longtext NOT NULL,
  `status` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `project_bidding` */

/*Table structure for table `project_category` */

DROP TABLE IF EXISTS `project_category`;

CREATE TABLE `project_category` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `Task Id` int(100) NOT NULL,
  `description` longtext NOT NULL,
  `budget` varchar(45) NOT NULL,
  `picture_url` varchar(45) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `project_category` */

insert  into `project_category`(`project_id`,`title`,`Task Id`,`description`,`budget`,`picture_url`,`creation_date`) values 
(1,'Physique',0,'Physique','200','2defc40b33e2c4fe9e60c6a803101ac4.png','0000-00-00 00:00:00'),
(2,'Chimie',0,'Chimie','480','9b40f925555331a7b2d4b3a2dfc57ac9.png','2020-11-05 14:51:06'),
(3,'Mathématiques',0,'Mathématiques','200','e615baa3f6bffe82d2a91c3b463aa3ba.png','0000-00-00 00:00:00'),
(4,'Ingénierie',0,'Ingénierie','200','bbd285119303f39ecfb938dab2135beb.png','0000-00-00 00:00:00'),
(5,'Informatique & Programmation',0,'Informatique & Programmation','200','66842db5e83c4f6fa41b2a7034284b82.png','0000-00-00 00:00:00'),
(6,'Science Médicale',0,'Science Médicale','200','e7ffa559b14af04d48ee593cff6eab93.png','0000-00-00 00:00:00'),
(7,'Electricite & Electronique',0,'Electricite & Electronique','200','12dada298d3b4b0c17f6d34f3700ea84.png','0000-00-00 00:00:00'),
(8,'Mécanique',0,'Mécanique','200','ea00495b91054326b9753a6bd1fb6664.png','0000-00-00 00:00:00'),
(9,'Outlis de calcul & Simulation',0,'Mecanique','200','d0996213567a495057d983d42e713a49.png','0000-00-00 00:00:00'),
(10,'Inforgraphie & Outlis CAO',0,'Inforgraphie & Outlis CAO','200','0164bdf773d5b1a20f61fe0a046703cd.png','0000-00-00 00:00:00'),
(11,'Droits/Sciences po',0,'Droits/Sciences po','200','e0ca2bdb5581ab69a9204c5eb006243e.png','0000-00-00 00:00:00'),
(12,'Littératures & Philo',0,'Littératures & Philo','200','a20701df824727ab0080d9d0573940d9.png','0000-00-00 00:00:00'),
(13,'Economie/Finance Marketing',0,'Economie/Finance Marketing','200','7cf93ea71d1306d6e7fd6f1e22e5948f.png','0000-00-00 00:00:00'),
(45,'Sciences naturelles',0,'Sciences naturelles','1200','a80c25c93f1dd3b89aee01dc8cdbd1a5.png','0000-00-00 00:00:00'),
(46,'Bureautique & macro',0,'Bureautique & macro','12,000','53b6d98776b4d078e419229d5567549e.png','0000-00-00 00:00:00'),
(47,'Langues & communication',0,'Langues & communication','1200','4ed31fd6f99034aaeb860398daea5d69.png','0000-00-00 00:00:00'),
(48,'Soutenance & présentation',0,'Soutenance & présentation','12,000','e57d44baecf74eab724d25554706951f.png','0000-00-00 00:00:00'),
(49,'CV/Lettre/Rapport',0,'CV/Lettre/Rapport','1200','5175cf38c7a1391408fa5c18f33d316d.png','0000-00-00 00:00:00'),
(50,'Arts',0,'Arts','12,000','e7e9c4b98926461523fb949590b15e99.png','0000-00-00 00:00:00'),
(51,'Autre',0,'Autre','12,000','7990cea5d52c51ca123852dc063741e3.png','0000-00-00 00:00:00');

/*Table structure for table `project_offer` */

DROP TABLE IF EXISTS `project_offer`;

CREATE TABLE `project_offer` (
  `offer_id` int(100) NOT NULL AUTO_INCREMENT,
  `message` longtext NOT NULL,
  `project_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `valid_from` date NOT NULL,
  `valid_to` date NOT NULL,
  `status` int(100) NOT NULL,
  `accept_budget` tinyint(4) NOT NULL,
  `offer_budget` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `accept_status` int(25) NOT NULL,
  `client_id` int(255) NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `project_offer` */

/*Table structure for table `project_status` */

DROP TABLE IF EXISTS `project_status`;

CREATE TABLE `project_status` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `your_comments` varchar(255) NOT NULL,
  `project_files` text NOT NULL,
  `project_status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_image` text NOT NULL,
  `client_id` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*Data for the table `project_status` */

/*Table structure for table `publishdemand` */

DROP TABLE IF EXISTS `publishdemand`;

CREATE TABLE `publishdemand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  `currency` varchar(100) NOT NULL,
  `budget` varchar(45) NOT NULL,
  `project_category` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `file` varchar(45) NOT NULL,
  `image` longtext NOT NULL,
  `created` date NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `publishdemand` */

/*Table structure for table `stripe_card_details` */

DROP TABLE IF EXISTS `stripe_card_details`;

CREATE TABLE `stripe_card_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stripe_customer_id` varchar(255) NOT NULL,
  `stripe_card_id` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `user_id` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `stripe_card_details` */

insert  into `stripe_card_details`(`id`,`stripe_customer_id`,`stripe_card_id`,`date_created`,`user_id`) values 
(1,'cus_HZxiNRjIfSf8OX','card_1H0nnCJPZuhal6eZ5gDTWiM6','2020-07-03 14:14:58',16);

/*Table structure for table `terms` */

DROP TABLE IF EXISTS `terms`;

CREATE TABLE `terms` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `terms` */

insert  into `terms`(`id`,`title`,`description`,`date_created`,`date_updated`) values 
(1,'test','ddfdf dfdsf dsfds fdsf dsfdfdffddf','2020-03-19 00:00:00','2020-03-19 17:08:05');

/*Table structure for table `transaction` */

DROP TABLE IF EXISTS `transaction`;

CREATE TABLE `transaction` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `sent_from` int(255) NOT NULL,
  `sent_to` int(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tra_id` text NOT NULL,
  `created_date` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `mission_id` int(25) NOT NULL,
  `status` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `transaction` */

/*Table structure for table `user_review` */

DROP TABLE IF EXISTS `user_review`;

CREATE TABLE `user_review` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `by_user_id` int(100) NOT NULL,
  `to_user_id` int(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `comment` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `user_review` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `second_password` text,
  `role` text NOT NULL,
  `source` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `is_email_verify` int(11) NOT NULL,
  `name` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `alternateEmail` text NOT NULL,
  `mobile_no` text NOT NULL,
  `website` text NOT NULL,
  `picture_url` text NOT NULL,
  `profile_url` text NOT NULL,
  `vendor_file` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `about` text NOT NULL,
  `type` text NOT NULL,
  `address` text NOT NULL,
  `address_2` text NOT NULL,
  `country` text NOT NULL,
  `school_address` varchar(1000) NOT NULL,
  `language` text NOT NULL,
  `state` text NOT NULL,
  `city` text NOT NULL,
  `spent` float NOT NULL,
  `Total_earned_amount` float NOT NULL,
  `Current_Balance` float unsigned NOT NULL,
  `Wallet_withdraw_status` float NOT NULL,
  `pincode` text NOT NULL,
  `level_of_study` varchar(100) NOT NULL,
  `Field_of_study` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `intrested_category` varchar(255) NOT NULL,
  `skills` varchar(100) NOT NULL,
  `Profile_Rate` int(100) NOT NULL,
  `ip_address` text NOT NULL,
  `created` text NOT NULL,
  `lastlogged` text NOT NULL,
  `modified` text NOT NULL,
  `facebook_status` int(11) NOT NULL,
  `google_status` int(11) NOT NULL,
  `auth_token` longtext NOT NULL,
  `presentation` varchar(255) NOT NULL,
  `Firebase_token` longtext NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password_show` text NOT NULL,
  `stripe_customer_id` text NOT NULL,
  `stripe_card_id` text NOT NULL,
  `name_on_card` varchar(255) NOT NULL,
  `walet_balance` varchar(255) NOT NULL DEFAULT '0',
  `block` tinyint(4) NOT NULL,
  `highlight` tinyint(4) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc_code` varchar(255) NOT NULL,
  `chated_on` datetime NOT NULL,
  `oauth_provider` enum('facebook','google') NOT NULL,
  `oauth_uid` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`second_password`,`role`,`source`,`status`,`is_email_verify`,`name`,`first_name`,`last_name`,`email`,`alternateEmail`,`mobile_no`,`website`,`picture_url`,`profile_url`,`vendor_file`,`dob`,`gender`,`about`,`type`,`address`,`address_2`,`country`,`school_address`,`language`,`state`,`city`,`spent`,`Total_earned_amount`,`Current_Balance`,`Wallet_withdraw_status`,`pincode`,`level_of_study`,`Field_of_study`,`university`,`intrested_category`,`skills`,`Profile_Rate`,`ip_address`,`created`,`lastlogged`,`modified`,`facebook_status`,`google_status`,`auth_token`,`presentation`,`Firebase_token`,`date_updated`,`password_show`,`stripe_customer_id`,`stripe_card_id`,`name_on_card`,`walet_balance`,`block`,`highlight`,`account_number`,`ifsc_code`,`chated_on`,`oauth_provider`,`oauth_uid`,`link`) values 
(4,'admin','25f9e794323b453885f5181f1b624d0b','123456','admin',0,0,0,'rahul sharma','rahul','sharma','admin@gmail.com','','8989898888','klj','user32.png','','','','','','','','','','','','','',0,0,0,0,'','fuygviu','','','','math',0,'127.0.0.1','','','2020-11-05 22:30:56',0,0,'','','','2020-11-06 16:16:29','','','','','980',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(12,'roshani demo','e10adc3949ba59abbe56e057f20f883e',NULL,'client',0,0,0,'roshani dangi','roshani dangi','rangari','roshni@gmail.com','','7812345634','','d.png','','','2020-03-27','','','','','','India','asdasdsd,,,','','','',0,0,0,0,'','sddsf','asdxx ','','fdgf','work',0,'','','','',0,0,'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn','asdsdsad','','2020-10-30 22:53:26','123456','cus_H8I2LTxDlAxMQB','card_1Ga1SnJPZuhal6eZ6cmdkcIC','','20',0,0,'22222222222222','rrrr','2020-06-03 12:47:00','facebook','',''),
(14,'gopal','00267ce0bff0bb5e7f169530a1d7c2e6',NULL,'client',0,0,0,'','gopal','sharma','gopal@alphawizz.awsapps.com','','7440467565','','default.png','','','','','','','','','','','','','',0,0,0,0,'','','','','0','biology',0,'','','','',0,0,'','','','2020-11-05 18:02:15','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(16,'Vasim','e10adc3949ba59abbe56e057f20f883e',NULL,'client',0,0,0,'','vasim','ahmed','vasim@gmail.com','','7677341234','','Rectangle_162.png','','','','','','','','','test Country','','','','',0,0,0,0,'','testing','testing','testing','testing','testing',0,'','','','2020-04-29 13:29:21',0,0,'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn','testing','','2020-11-10 12:38:30','','cus_H8bPQNUJBLVJR1','card_1GcqRSJPZuhal6eZoU7CL8eY','test dss','30',0,0,'','','2020-06-03 12:47:00','facebook','',''),
(162,'hello','25f9e794323b453885f5181f1b624d0b',NULL,'client',0,0,0,'','hello','123','hello@sample.com','','','','medical-insuarnce.png','','','','','','','','','Canada','','','','',0,622,547.36,0,'','2','Math','asdfasdf','ererer','ee',3,'','','','',0,0,'','ljaslkdjfklajsdflkjasdfasdf','','2020-11-10 15:50:11','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(163,'hi','25f9e794323b453885f5181f1b624d0b',NULL,'client',0,0,0,'','elie','kassis','hi@sample.com','','','','me1.png','','','hi','','','','','','Canada','','','','',622,0,0,0,'','234','asdfasdf','asdfasdf','asdfasf','aa',0,'','','','',0,0,'','hello','','2020-11-10 15:45:54','','23423','666','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(179,'234','25f9e794323b453885f5181f1b624d0b',NULL,'client',0,0,0,'','asdf','asdf','speare88@gmail.com','','456465484','','7.png','','','2020-11-09','male','','','asdfasdf','','asdfasdf','sdfasdf','','','asdfasdf',0,0,0,0,'','','','','','',0,'','','','',0,0,'','','','2020-11-09 06:11:47','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(180,'asf','25f9e794323b453885f5181f1b624d0b',NULL,'client',0,0,0,'','','','Mydev@gmail.com','','','','default.png','','','','','','','','','','','','','',0,0,0,0,'','','','','','',0,'','','','',0,0,'','','','2020-11-09 16:10:18','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','','');

/*Table structure for table `walletwithdrawask` */

DROP TABLE IF EXISTS `walletwithdrawask`;

CREATE TABLE `walletwithdrawask` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `date_of_ask` datetime NOT NULL,
  `wallet_amount` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `walletwithdrawask` */

insert  into `walletwithdrawask`(`id`,`date_of_ask`,`wallet_amount`,`user_email`,`comment`,`date_updated`) values 
(1,'2020-05-07 00:00:00','200','test@test.com','tesss','2020-05-12 19:27:33');

/*Table structure for table `withdrawpayment` */

DROP TABLE IF EXISTS `withdrawpayment`;

CREATE TABLE `withdrawpayment` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `mission_id` int(255) NOT NULL,
  `mission_amount` varchar(255) NOT NULL,
  `offer_amount` varchar(255) NOT NULL,
  `amount_to_pay` varchar(255) NOT NULL,
  `pay_status` int(25) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_of_pay` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mission_status` int(11) NOT NULL,
  `employer_id` int(25) NOT NULL,
  `emplyee_id` int(25) NOT NULL,
  `transection_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `withdrawpayment` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
