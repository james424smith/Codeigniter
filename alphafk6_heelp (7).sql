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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `add_discuss` */

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

/*Data for the table `card_details` */

insert  into `card_details`(`id`,`card_no`,`date_created`,`date_updated`,`user_id`,`name`,`expiry`) values 
(33,0,'2020-10-27 23:18:57','2020-10-28 01:18:57',163,'','/');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

/*Table structure for table `chatting_member` */

DROP TABLE IF EXISTS `chatting_member`;

CREATE TABLE `chatting_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `member_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `chatting_member` */

insert  into `chatting_member`(`id`,`user_id`,`member_id`) values 
(1,163,162);

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
(1,'Contact us','Contact_img1.png','<p><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">We are a design studio partnering with brands of multiple industries scattered all across the globe. </span></span></span><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Our work is to build.</span></span></span></span></p>','','Address','<p>lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, Indore, Madhya Pradesh 45201010</p>','Call Us','<p>+91 9898989898</p>\r\n<p>+91 9786454876</p>','E-Mail','<p>Dummy@gmail.com</p>\r\n<p>Dummy@ipsum.com</p>');

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

/*Table structure for table `litigations` */

DROP TABLE IF EXISTS `litigations`;

CREATE TABLE `litigations` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `project_id` int(25) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `litigations` */

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

/*Table structure for table `posts` */

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `profile_image` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=95 DEFAULT CHARSET=latin1;

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
(2,' Chimie',0,' Chimie','480','9b40f925555331a7b2d4b3a2dfc57ac9.png','0000-00-00 00:00:00'),
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

/*Data for the table `transaction` */

insert  into `transaction`(`id`,`sent_from`,`sent_to`,`amount`,`tra_id`,`created_date`,`username`,`project_title`,`mission_id`,`status`) values 
(112,162,163,'3000','txn_1HhFIqJPZuhal6eZt2x2R8gh','2020-10-28 15:10:04','5','notification',50,1),
(111,163,162,'123','txn_1Hh0bZJPZuhal6eZZU0F2BFU','2020-10-27 23:26:12','4','123123',49,0),
(110,163,162,'222','txn_1Hh0U9JPZuhal6eZhyo2CTRd','2020-10-27 23:18:27','4','asdf',48,0),
(113,163,162,'120','txn_1Hhg2GJPZuhal6eZSDlvBNUX','2020-10-29 19:40:28','6','claim chat',60,0),
(114,163,162,'201','txn_1HhgPkJPZuhal6eZToQhXzjh','2020-10-29 20:07:45','6','complete',61,1),
(115,163,162,'201','txn_1HhgzpJPZuhal6eZuy0tuWhO','2020-10-29 20:42:04','6','claim test 2',62,0),
(116,162,163,'3453450','txn_1HhhJ7JPZuhal6eZhsFvebY4','2020-10-29 21:02:01','5','wertwert',57,0),
(117,163,162,'1121','txn_1HhlB5JPZuhal6eZ3aG7dp0x','2020-10-30 01:09:54','6','sdfasdf',63,0),
(118,163,162,'123','txn_1HhpxTJPZuhal6eZQKjfOHJy','2020-10-30 06:16:13','6','asdf',66,0);

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `user_review` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
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
  `Total_earned_amount` float NOT NULL,
  `Current_Balance` float NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`role`,`source`,`status`,`is_email_verify`,`name`,`first_name`,`last_name`,`email`,`alternateEmail`,`mobile_no`,`website`,`picture_url`,`profile_url`,`vendor_file`,`dob`,`gender`,`about`,`type`,`address`,`address_2`,`country`,`school_address`,`language`,`state`,`city`,`Total_earned_amount`,`Current_Balance`,`Wallet_withdraw_status`,`pincode`,`level_of_study`,`Field_of_study`,`university`,`intrested_category`,`skills`,`Profile_Rate`,`ip_address`,`created`,`lastlogged`,`modified`,`facebook_status`,`google_status`,`auth_token`,`presentation`,`Firebase_token`,`date_updated`,`password_show`,`stripe_customer_id`,`stripe_card_id`,`name_on_card`,`walet_balance`,`block`,`highlight`,`account_number`,`ifsc_code`,`chated_on`,`oauth_provider`,`oauth_uid`,`link`) values 
(4,'admin','e10adc3949ba59abbe56e057f20f883e','admin',0,0,0,'admin','rahul','sharma','admin@gmail.com','','8989898888','klj','user32.png','','','','','','','','','','','','','',0,0,0,'','fuygviu','','','','math',0,'','','','',0,0,'','','','2020-10-22 18:10:33','','','','','980',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(12,'roshani demo','e10adc3949ba59abbe56e057f20f883e','client',0,0,0,'roshani dangi','roshani dangi','rangari','roshni@gmail.com','','7812345634','','d.png','','','2020-03-27','','','','','','India','asdasdsd,,,','','','',0,0,0,'','sddsf','asdxx ','','fdgf','work',0,'','','','',0,0,'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn','asdsdsad','','2020-06-29 09:21:18','123456','cus_H8I2LTxDlAxMQB','card_1Ga1SnJPZuhal6eZ6cmdkcIC','','20',0,1,'22222222222222','rrrr','2020-06-03 12:47:00','facebook','',''),
(14,'gopal','00267ce0bff0bb5e7f169530a1d7c2e6','client',0,0,0,'','gopal','sharma','gopal@alphawizz.awsapps.com','','7440467565','','default.png','','','','','','','','','','','','','',0,0,0,'','','','','0','biology',0,'','','','',0,0,'','','','2020-10-22 18:10:38','','','','','0',1,0,'','','0000-00-00 00:00:00','facebook','',''),
(16,'Vasim','e10adc3949ba59abbe56e057f20f883e','client',0,2147483647,0,'','vasim','ahmed','vasim@gmail.com','','7677341234','','Rectangle_162.png','','','','','','','','','test Country','','','','',0,0,0,'','testing','testing','testing','testing','testing',0,'','','','2020-04-29 13:29:21',0,0,'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn','testing','','2020-06-25 09:34:38','','cus_H8bPQNUJBLVJR1','card_1GcqRSJPZuhal6eZoU7CL8eY','test dss','30',0,0,'','','2020-06-03 12:47:00','facebook','',''),
(36,'you','f1887d3f9e6ee7a32fe5e76f4ab80d63','admin',0,0,0,'me ','me ','store','Firststore.service@gmail.com','','9009856453','','16.jpg','','','2020-04-02','','','','','','France ','Vfbfbfh','','','',0,0,0,'','Jdjdjdkk','Bdbfbfb','','Bdbdj','Jfjdjdkfkdk',0,'','','','',0,0,'eofwSbFLQ5aiNmLO7vow7B:APA91bG9QR7K9nhfn-nMvp7c2ZwnzQAfoo03so2UIxLFclmwhjFNok-nAK0y8FF0157XlO9Yl02yh4WbmnoDWgwZa_aimWAeesiltW99WMuaxiZ9eby_JSc78XpUC5gPpyw8Evzy1OaZ','Jfjfjdk','','2020-07-05 07:40:15','','','','','0',0,0,'','','2020-07-05 04:40:15','facebook','',''),
(37,'gopal123','b57e63ce8b73e370cd2a4c6865fc611b','admin',0,0,0,'','gopal','sharma','gopalsh02221@gmail.com','','3456455345','','default.png','','','','','','','','','','','','','',0,0,0,'','','','','0','English',0,'','','','',0,0,'','','','2020-10-22 18:10:46','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(39,'Gopal123','12345','admin',0,0,0,'','gopal','sharma','gopalsh021@gmail.com','','7440498598','','default.png','','','','male','','','indore','','india','school','','','indore',0,0,0,'','','','','0','physics',0,'','','','',0,0,'','','','2020-10-22 18:10:52','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(162,'hello','25f9e794323b453885f5181f1b624d0b','client',0,1,0,'','hello','123','hello@sample.com','','','','medical-insuarnce.png','','','','','','','','','Canada','','','','',0,176.88,0,'','2','Math','asdfasdf','ererer','ee',0,'','','','',0,0,'','ljaslkdjfklajsdflkjasdfasdf','','2020-10-29 22:07:46','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(163,'hi','25f9e794323b453885f5181f1b624d0b','client',0,0,0,'','elie','kassis','hi@sample.com','','','','me1.png','','','','','','','','','Canada','','','','',0,2640,0,'','234','asdfasdf','asdfasdf','asdfasf','aa',0,'','','','',0,0,'','hello','','2020-10-28 17:10:04','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(170,'Mydev','25f9e794323b453885f5181f1b624d0b','client',0,0,0,'','','','Mydev@gmail.com','','','','default.png','','','','','','','','','','','','','',0,0,0,'','','','','','',0,'','','','',0,0,'','','','2020-10-30 00:58:00','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','','');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `withdrawpayment` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
