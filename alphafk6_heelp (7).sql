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
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*Data for the table `card_details` */

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
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `chatting_member` */

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `litigations` */

insert  into `litigations`(`id`,`project_id`,`user_email`,`title`,`description`,`comment`,`date_created`,`date_modified`) values 
(1,309,'test@test.com','test','test here','ok ,  non ok , in work  dd','2020-05-07 00:00:00','2020-05-14 08:15:13');

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
) ENGINE=MyISAM AUTO_INCREMENT=583 DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

insert  into `notification`(`notification_id`,`user_type`,`user_id`,`demand_id`,`notification`,`read_status`,`created`,`type_id`) values 
(1,2,147,1,'payment request',1,'2020-06-27 09:55:23',1),
(2,2,147,1,'Demand  added successfully',1,'2020-06-27 09:55:40',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=273 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=190 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=latin1;

/*Data for the table `publishdemand` */

insert  into `publishdemand`(`id`,`title`,`description`,`currency`,`budget`,`project_category`,`client_id`,`file`,`image`,`created`,`status`) values 
(10,'freelancer','i can work on this project','$','45000',0,2,'salary3.pdf','a38.png','2020-02-21',0),
(11,'freelancer','i can work on this project','$','45000',32,2,'salary4.pdf','4e3d8c9ea986e76ebe5d42d6fa10a195.jpeg','2020-02-19',0),
(12,'freelancer1','i can work on this project','$','45000',3,2,'salary5.pdf','34464b3d917345591411edde0b15c913.png','2020-02-18',0),
(13,'freelancer','i can work on this project','$','45000',2,1,'salary6.pdf','a311.png','2020-02-17',0),
(14,'auth module','i need a project for manage my all auth type project ','$','12,000',4,2,'salary7.pdf','Screenshot_from_2019-12-05_15-03-17.png','2020-02-21',1),
(15,'auth module','i need a project for manage my all auth type project ','$','12,000',4,1,'salary8.pdf','Screenshot_from_2019-12-05_15-03-171.png','2020-02-21',1),
(16,'codegniter project','i need a admin panel for manage all my project of company','$','1,20000',10,12,'','Screenshot_from_2019-11-29_14-14-36.png','2020-02-16',1),
(20,'codegniter project','i need a admin panel for manage all my project of company','$','1,20000',5,12,'latter.pdf','Screenshot_from_2019-11-29_14-14-3623.png','2020-02-15',2),
(21,'codegniter project','i need a admin panel for manage all my project of company','$','1,20000',5,12,'latter1.pdf','Screenshot_from_2019-11-29_14-14-3624.png','2020-02-24',2),
(22,'codegniter project','i need a admin panel for manage all my project of company','$','1,20000',5,12,'latter2.pdf','Screenshot_from_2019-11-29_14-14-3625.png','2020-02-16',2),
(23,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,12,'latter3.pdf','Screenshot_from_2019-11-29_14-14-3626.png','2020-02-10',3),
(24,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,12,'latter4.pdf','Screenshot_from_2019-11-29_14-14-3627.png','2020-02-05',3),
(25,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,12,'','','2020-02-02',3),
(26,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,12,'','','2020-02-02',3),
(27,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,12,'','','2020-02-11',4),
(28,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,12,'','aboutus.png','2020-02-05',4),
(29,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,12,'latter5.pdf','Screenshot_from_2019-11-29_14-14-3628.png','2020-02-05',4),
(40,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,6,'AP_sheet.ods','','0000-00-00',4),
(41,'codegniter project','i need a admin panel for manage all my project of company','$','5',5,6,'AP_sheet1.ods','','0000-00-00',4),
(42,'Test task','Test task description','','200',1,1,'','','0000-00-00',0),
(43,'Test task','Test task description','','200',1,1,'logo34.png','','0000-00-00',0),
(44,'Test task','Test task description','','200',1,1,'header-banner.jpg','','0000-00-00',0),
(45,'Test task','Test task description','','100',1,1,'close.png','','0000-00-00',0),
(46,'Test task','Test task description','','100',1,1,'close1.png','','0000-00-00',0),
(47,'Test task','Test task description','','100',1,1,'','','0000-00-00',0),
(48,'Test task','Test task description','','100',1,1,'','','0000-00-00',0),
(49,'Test task','Test task description','','100',1,1,'','','0000-00-00',0),
(50,'Test task','Test task description','','100',1,1,'','','0000-00-00',0),
(51,'Test task','Test task description','','100',1,1,'','','0000-00-00',0),
(52,'Test task','Test taskhfghfg\nfghfghfgh description','','100',1,1,'','','0000-00-00',0),
(53,'Test task','Test taskhfghfg\nfghfghfgh description','','100',1,1,'','','0000-00-00',0),
(54,'','','','',0,0,'','','0000-00-00',0),
(55,'','','','',0,0,'','','0000-00-00',0),
(56,'','','','',0,0,'','','0000-00-00',0),
(57,'','','','',0,0,'','','0000-00-00',0),
(58,'','','','',0,0,'','','0000-00-00',0),
(59,'','','','',0,0,'','','0000-00-00',0),
(60,'','','','',0,0,'','','0000-00-00',0),
(61,'','','','',0,0,'','','0000-00-00',0),
(62,'','','','',0,0,'','','0000-00-00',0),
(63,'','','','',0,0,'','','0000-00-00',0),
(64,'','','','',0,0,'','','0000-00-00',0),
(65,'','','','',0,0,'','','0000-00-00',0),
(66,'','','','',0,0,'','','0000-00-00',0),
(67,'','','','',0,0,'','','0000-00-00',0),
(68,'','','','',0,0,'','','0000-00-00',0),
(69,'','','','',0,0,'','','0000-00-00',0),
(70,'','','','',0,0,'','','0000-00-00',0),
(71,'','','','',0,0,'','','0000-00-00',0),
(72,'Physique','','','500',1,1,'','','0000-00-00',0),
(73,'Physique','','','500',1,1,'','','0000-00-00',0),
(74,'Physique','','','500',1,1,'','','0000-00-00',0),
(75,' Chimie','xyz......\n','','500',2,1,'','','0000-00-00',0),
(76,' Chimie','asdfghbcdh\nhfdz\n','','50',2,1,'','','0000-00-00',0),
(77,'Physique','dgndgjgjdgjgsj','','500',1,1,'','','0000-00-00',0),
(78,'Physique','hffdd','','12',0,1,'','','0000-00-00',0),
(79,' Chimie','qwert\nfghjk\nnbcs\nligcfhj\njh','','500',2,1,'','','0000-00-00',0),
(80,'Physique','dfsdfsdfsdfsdfsdfsdfsdfsdfsgfdgfdgfdgfdgdfgdfgdfgdfgdfg','','100',1,1,'','','0000-00-00',0),
(81,' Chimie','fuucng\njcyfguog\nnchgu\nfuydfu\njffudu\n','','500',2,1,'','','0000-00-00',0),
(82,' Chimie','hey\nloginpage if we enter wrong mail I\'d with correct password then popup should incorrect mail I\'d but it\'s show popup incorrect password\n\n\nin profile page\nname tab is supposed to do edit name but it is unable to update the name \n\nbirth tab it\'s showing clander after 2020 \n\nin promotion page\nin sentence € sign is missing','','500',2,1,'','','0000-00-00',0),
(83,'Test task','Test task description','','200',1,1,'','Untitlxed1.png,Untitledg1.png','0000-00-00',0),
(84,'','','','',0,0,'','','0000-00-00',0),
(85,'','','','',0,0,'','','0000-00-00',0),
(86,'','','','',0,0,'','','0000-00-00',0),
(87,'','','','',0,0,'','','0000-00-00',0),
(88,'','','','',0,0,'','','0000-00-00',0),
(89,'','','','',0,0,'','','0000-00-00',0),
(90,'','','','',0,0,'','','0000-00-00',0),
(91,'','','','',0,0,'','','0000-00-00',0),
(92,'','','','',0,0,'','','0000-00-00',0),
(93,'','','','',0,0,'','','0000-00-00',0),
(94,'','','','',0,0,'','','0000-00-00',0),
(95,'','','','',0,0,'','','0000-00-00',0),
(96,'fsdfsd','sfsdfsds','','12',2,1,'','','0000-00-00',0),
(97,'fsdfsd','sfsdfsds','','12',2,1,'','','0000-00-00',0),
(98,'fsdfsd','sfsdfsds','','12',2,1,'','','0000-00-00',0),
(99,'','','','',0,0,'','','0000-00-00',0),
(100,'','','','',0,0,'','','0000-00-00',0),
(101,'','','','',0,0,'','','0000-00-00',0),
(102,'','','','',0,0,'','','0000-00-00',0),
(103,'','','','',0,0,'','','0000-00-00',0),
(104,'','','','',0,0,'','','0000-00-00',0),
(105,'','','','',0,0,'','','0000-00-00',0),
(106,'','','','',0,0,'','','0000-00-00',0),
(107,'','','','',0,0,'','','0000-00-00',0),
(108,'','','','',0,0,'','','0000-00-00',0),
(109,'','','','',0,0,'','','0000-00-00',0),
(110,'','','','',0,0,'','','0000-00-00',0),
(111,'','','','',0,0,'','','0000-00-00',0),
(112,'','','','',0,0,'','','0000-00-00',0),
(113,'','','','',0,0,'','','0000-00-00',0),
(114,'','','','',0,0,'','','0000-00-00',0),
(115,'','','','',0,0,'','','0000-00-00',0),
(116,'','','','',0,0,'','','0000-00-00',0),
(117,'Test task','Test task description','','200',1,1,'Untitledsdd2.png,Untitlessdd4.png,Untitlded4.','Screenshot_from_2020-03-02_18-35-154.png,test','0000-00-00',0),
(118,'fsdfsd','sfsdfsds','','12',2,1,'debug.log','','0000-00-00',0),
(119,'fsdfsd','sfsdfsds','','12',2,1,'debug.log','','0000-00-00',0),
(120,'','','','',0,0,'','','0000-00-00',0),
(121,'','','','',0,0,'','','0000-00-00',0),
(122,'','','','',0,0,'','','0000-00-00',0),
(123,'','','','',0,0,'','','0000-00-00',0),
(124,'','','','',0,0,'','','0000-00-00',0),
(125,'','','','',0,0,'','','0000-00-00',0),
(126,'','','','',0,0,'','','0000-00-00',0),
(127,'','','','',0,0,'','','0000-00-00',0),
(128,'','','','',0,0,'','','0000-00-00',0),
(129,'','','','',0,0,'','','0000-00-00',0),
(130,'','','','',0,0,'','','0000-00-00',0),
(131,'','','','',0,0,'','','0000-00-00',0),
(132,'','','','',0,0,'','','0000-00-00',0),
(133,'','','','',0,0,'','','0000-00-00',0),
(134,'','','','',0,0,'','','0000-00-00',0),
(135,'','','','',0,0,'','','0000-00-00',0),
(136,'','','','',0,0,'','','0000-00-00',0),
(137,'','','','',0,0,'','','0000-00-00',0),
(138,'','','','',0,0,'','','0000-00-00',0),
(139,'','','','',0,0,'','','0000-00-00',0),
(140,'','','','',0,0,'','','0000-00-00',0),
(141,'','','','',0,0,'','','0000-00-00',0),
(142,'','','','',0,0,'','','0000-00-00',0),
(143,'','','','',0,0,'','','0000-00-00',0),
(144,'','','','',0,0,'','','0000-00-00',0),
(145,'','','','',0,0,'','','0000-00-00',0),
(146,'','','','',0,0,'','','0000-00-00',0),
(147,'','','','',0,0,'','','0000-00-00',0),
(148,'','','','',0,0,'','','0000-00-00',0),
(149,'','','','',0,0,'','','0000-00-00',0),
(150,'','','','',0,0,'','','0000-00-00',0),
(151,'','','','',0,0,'','','0000-00-00',0),
(152,'','','','',0,0,'','','0000-00-00',0),
(153,'','','','',0,0,'','','0000-00-00',0),
(154,'','','','',0,0,'','','0000-00-00',0),
(155,'','','','',0,0,'','','0000-00-00',0),
(156,'','','','',0,0,'','','0000-00-00',0),
(157,'','','','',0,0,'','','0000-00-00',0),
(158,'','','','',0,0,'','','0000-00-00',0),
(159,'','','','',0,0,'','','0000-00-00',0),
(160,'','','','',0,0,'','','0000-00-00',0),
(161,'','','','',0,0,'','','0000-00-00',0),
(162,'','','','',0,0,'','','0000-00-00',0),
(163,'','','','',0,0,'','','0000-00-00',0),
(164,'','','','',0,0,'','','0000-00-00',0),
(165,'','','','',0,0,'','','0000-00-00',0),
(166,'','','','',0,0,'','','0000-00-00',0),
(167,'','','','',0,0,'','','0000-00-00',0),
(168,'Physique','sdfsdfsdf','','0',1,1,'','','0000-00-00',0),
(169,'Physique','sdfsdfsdf','','0',1,1,'','','0000-00-00',0),
(170,'fsdfsd','sfsdfsds','','12',0,1,'debug.log','','0000-00-00',0),
(171,'fsdfsd','sfsdfsds','','12',0,0,'debug.log','','0000-00-00',0),
(172,'fsdfsd','sfsdfsds','','12',0,0,'','','0000-00-00',0),
(173,'Physique','rwerwerwer','','033',1,1,'','','0000-00-00',0),
(174,'Physique','fsdfsd','','10',1,1,'','','0000-00-00',0),
(175,'Physique','fsdfsd','','10',1,1,'','','0000-00-00',0),
(176,'Physique','erwerew','','10',1,1,'','','0000-00-00',0),
(177,'Physique','erwerew','','10',1,1,'','','0000-00-00',0),
(178,'Physique','rerwer','','10',1,1,'','','0000-00-00',0),
(179,'Physique','rerwer','','10',1,1,'','','0000-00-00',0),
(180,'Physique','rerwer','','10',1,1,'','','0000-00-00',0),
(181,'Physique','hkjhkjh1','','10',1,1,'','','0000-00-00',0),
(182,'fsdfsd','sfsdfsds','','12',12,1,'','','0000-00-00',0),
(183,'fsdfsd','sfsdfsds','','12',12,1,'debug.log','','0000-00-00',0),
(184,'Test task','Test task description','','200',1,1,'Untitledsdd3.png,Untitlessdd5.png,Untitlded5.','Screenshot_from_2020-03-02_18-35-155.png,test','0000-00-00',0),
(185,'Physique','hkjhkjh1','','10',1,1,'','','0000-00-00',0),
(186,'Physique','hkjhkjh1','','10',1,1,'','','0000-00-00',0),
(187,'fsdfsd','sfsdfsds','','12',2,1,'Untitledsdd4.png,Untitlessdd6.png','cleaning.txt','0000-00-00',0),
(188,'fsdfsd','sfsdfsds','','12',12,1,'debug.log','','0000-00-00',0),
(189,'fsdfsd','sfsdfsds','','12',12,1,'demo.txt','','0000-00-00',0),
(190,'fsdfsd','sfsdfsds','','12',12,1,'demo.txt,Screenshot_1585640086.png,Screenshot','Screenshot_1585640085.png,Screenshot_15856400','0000-00-00',0),
(191,'fsdfsd','sfsdfsds','','12',12,1,'','Screenshot_15856400851.png,Screenshot_1585640','0000-00-00',0),
(192,'fsdfsd','sfsdfsds','','12',12,1,'','Screenshot_15856400852.png,Screenshot_1585640','0000-00-00',0),
(193,'fsdfsd','sfsdfsds','','12',12,1,'demo.txt,Screenshot_15856401123.png','Screenshot_15856401093.png,Screenshot_1585640','0000-00-00',0),
(194,'fsdfsd','sfsdfsds','','12',12,1,'','Screenshot_15856401094.png,Screenshot_1585640','0000-00-00',0),
(195,'Physique','ggv\n','','10',1,1,'','image-39032306-5a7b-4800-a461-0a74a29376a4.jp','0000-00-00',0),
(196,'Physique','ggv\n','','10',1,1,'','image-39032306-5a7b-4800-a461-0a74a29376a41.j','0000-00-00',0),
(197,'Physique','ggv\n','','10',1,1,'','image-39032306-5a7b-4800-a461-0a74a29376a42.j','0000-00-00',0),
(198,'Physique','ggv\n','','10',1,1,'','image-39032306-5a7b-4800-a461-0a74a29376a43.j','0000-00-00',0),
(199,'Physique','ggv\n','','10',1,1,'','image-39032306-5a7b-4800-a461-0a74a29376a44.j','0000-00-00',0),
(200,'Physique','ggv\n','','10',1,1,'','image-39032306-5a7b-4800-a461-0a74a29376a45.j','0000-00-00',0),
(201,'Physique','ghhjj','','100',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a52.jp','0000-00-00',0),
(202,'Physique','ghhjj','','100',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a521.j','0000-00-00',0),
(203,'Physique','ghhjj','','100',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a522.j','0000-00-00',0),
(204,'Physique','ghhjj','','100',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a523.j','0000-00-00',0),
(205,'fsdfsd','sfsdfsds','','12',12,1,'demo.txt,Screenshot_15856401125.png','Screenshot_15856401095.png,Screenshot_1585640','0000-00-00',0),
(206,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(207,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(208,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(209,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(210,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(211,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(212,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(213,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(214,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(215,'Physique','thh','','0',1,1,'','','0000-00-00',0),
(216,'Physique','ggg\n','','110',1,1,'','','0000-00-00',0),
(217,'Physique','ggg\n','','110',1,1,'','','0000-00-00',0),
(218,'Physique','ggg\n','','110',1,1,'','','0000-00-00',0),
(219,'Physique','ggg\nghb','','0',1,1,'','20200305_165254.jpg,image-b82d17b3-2c40-4140-','0000-00-00',0),
(220,'Physique','ggg\nghb','','0',1,1,'','20200305_1652541.jpg,image-b82d17b3-2c40-4140','0000-00-00',0),
(221,'Physique','ggg\nghb','','0',1,1,'','20200305_1652542.jpg,image-b82d17b3-2c40-4140','0000-00-00',0),
(222,'Physique','ggg\nghb','','0',1,1,'','20200305_1652543.jpg,image-b82d17b3-2c40-4140','0000-00-00',0),
(223,'fsdfsd','sfsdfsds','','12',12,1,'','Screenshot_15856401096.png,Screenshot_1585640','0000-00-00',0),
(224,'Physique','fhdd','','0',1,1,'','20200305_1652544.jpg,image-b82d17b3-2c40-4140','0000-00-00',0),
(225,'Physique','hi I am ','','110',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a529.j','0000-00-00',0),
(226,'fsdfsd','sfsdfsds','','12',12,1,'demo.txt,Screenshot_15856401127.png','Screenshot_15856401097.png,Screenshot_15856401127.png','0000-00-00',0),
(227,'Physique','ffv\n','','0',1,1,'','20200305_1652545.jpg,','0000-00-00',0),
(228,'Physique','ffv\n','','0',1,1,'','20200305_1652546.jpg,','0000-00-00',0),
(229,'Physique','ffv\n','','0',1,1,'','20200305_1652547.jpg,','0000-00-00',0),
(230,'Physique','ffv\n','','0',1,1,'','20200305_1652548.jpg,','0000-00-00',0),
(231,'Physique','ffv\n','','0',1,1,'','20200305_1652549.jpg,','0000-00-00',0),
(232,'Physique','ffv\n','','0',1,1,'','20200305_16525410.jpg,','0000-00-00',0),
(233,'Physique','ffv\n','','0',1,1,'','20200305_16525411.jpg,','0000-00-00',0),
(234,'Physique','ffv\n','','0',1,1,'','20200305_16525412.jpg,','0000-00-00',0),
(235,'Physique','ffv\n','','0',1,1,'','20200305_16525413.jpg,','0000-00-00',0),
(236,'Physique','ffv\n','','0',1,1,'','20200305_16525414.jpg,','0000-00-00',0),
(237,'Physique','ffv\n','','0',1,1,'','20200305_16525415.jpg,','0000-00-00',0),
(238,'Physique','ffv\n','','0',1,1,'','20200305_16525416.jpg,','0000-00-00',0),
(239,'Physique','ffv\n','','0',1,1,'','20200305_16525417.jpg,','0000-00-00',0),
(240,'Physique','ffv\n','','0',1,1,'','20200305_16525418.jpg,','0000-00-00',0),
(241,'Physique','ffv\n','','0',1,1,'','20200305_16525419.jpg,','0000-00-00',0),
(242,'Physique','ffv\n','','0',1,1,'','20200305_16525420.jpg,','0000-00-00',0),
(243,'Physique','ffv\n','','0',1,1,'','20200305_16525421.jpg,','0000-00-00',0),
(244,'Physique','ffv\n','','0',1,1,'','20200305_16525422.jpg,','0000-00-00',0),
(245,'Physique','ffv\n','','0',1,1,'','20200305_16525423.jpg,','0000-00-00',0),
(246,'Physique','ffv\n','','0',1,1,'','20200305_16525424.jpg,','0000-00-00',0),
(247,'Physique','ffv\n','','0',1,1,'','20200305_16525425.jpg,','0000-00-00',0),
(248,'Physique','ffv\n','','0',1,1,'','20200305_16525426.jpg,','0000-00-00',0),
(249,'Physique','ffv\n','','0',1,1,'','20200305_16525427.jpg,','0000-00-00',0),
(250,'Physique','ffv\n','','0',1,1,'','20200305_16525428.jpg,','0000-00-00',0),
(251,'Physique','ffv\n','','0',1,1,'','20200305_16525429.jpg,','0000-00-00',0),
(252,'Physique','ffv\n','','0',1,1,'','20200305_16525430.jpg,','0000-00-00',0),
(253,'Physique','ffv\n','','0',1,1,'','20200305_16525431.jpg,','0000-00-00',0),
(254,'Physique','ffv\n','','0',1,1,'','20200305_16525432.jpg,','0000-00-00',0),
(255,'Physique','ffv\n','','0',1,1,'','20200305_16525433.jpg,','0000-00-00',0),
(256,'Physique','ffv\n','','0',1,1,'','20200305_16525434.jpg,','0000-00-00',0),
(257,'Physique','ffv\n','','0',1,1,'','20200305_16525435.jpg,','0000-00-00',0),
(258,'Physique','ffv\n','','0',1,1,'','20200305_16525436.jpg,','0000-00-00',0),
(259,'Physique','ffv\n','','0',1,1,'','20200305_16525437.jpg,','0000-00-00',0),
(260,'Physique','ffv\n','','0',1,1,'','20200305_16525438.jpg,','0000-00-00',0),
(261,'Physique','ffv\n','','0',1,1,'','20200305_16525439.jpg,','0000-00-00',0),
(262,'Physique','ffv\n','','0',1,1,'','20200305_16525440.jpg,','0000-00-00',0),
(263,'Physique','ffv\n','','0',1,1,'','20200305_16525441.jpg,','0000-00-00',0),
(264,'Physique','ffv\n','','0',1,1,'','20200305_16525442.jpg,','0000-00-00',0),
(265,'Physique','ffv\n','','0',1,1,'','20200305_16525443.jpg,','0000-00-00',0),
(266,'Physique','ffv\n','','0',1,1,'','20200305_16525444.jpg,','0000-00-00',0),
(267,'Physique','ffv\n','','0',1,1,'','20200305_16525445.jpg,','0000-00-00',0),
(268,'Physique','ffv\n','','0',1,1,'','20200305_16525446.jpg,','0000-00-00',0),
(269,'Physique','ffv\n','','0',1,1,'','20200305_16525447.jpg,','0000-00-00',0),
(270,'Physique','ffv\n','','0',1,1,'','20200305_16525448.jpg,','0000-00-00',0),
(271,'Physique','ffv\n','','0',1,1,'','20200305_16525449.jpg,','0000-00-00',0),
(272,'Physique','ffv\n','','0',1,1,'','20200305_16525450.jpg,','0000-00-00',0),
(273,'Physique','ffv\n','','0',1,1,'','20200305_16525451.jpg,','0000-00-00',0),
(274,'Physique','ffv\n','','0',1,1,'','20200305_16525452.jpg,','0000-00-00',0),
(275,'Physique','ffv\n','','0',1,1,'','20200305_16525453.jpg,','0000-00-00',0),
(276,'Physique','ffv\n','','0',1,1,'','20200305_16525454.jpg,','0000-00-00',0),
(277,'Physique','ffv\n','','0',1,1,'','20200305_16525455.jpg,','0000-00-00',0),
(278,'Physique','ffv\n','','0',1,1,'','20200305_16525456.jpg,','0000-00-00',0),
(279,'Physique','ffv\n','','0',1,1,'','20200305_16525457.jpg,','0000-00-00',0),
(280,'Physique','ffv\n','','0',1,1,'','20200305_16525458.jpg,','0000-00-00',0),
(281,'Physique','ffv\n','','0',1,1,'','20200305_16525459.jpg,','0000-00-00',0),
(282,'Physique','ffv\n','','0',1,1,'','20200305_16525460.jpg,','0000-00-00',0),
(283,'Physique','ffv\n','','0',1,1,'','20200305_16525461.jpg,','0000-00-00',0),
(284,'Physique','ffv\n','','0',1,1,'','20200305_16525462.jpg,','0000-00-00',0),
(285,'Physique','ffv\n','','0',1,1,'','20200305_16525463.jpg,','0000-00-00',0),
(286,'Physique','ffv\n','','0',1,1,'','20200305_16525464.jpg,','0000-00-00',0),
(287,'Physique','ffv\n','','0',1,1,'','20200305_16525465.jpg,','0000-00-00',0),
(288,'Physique','ffv\n','','0',1,1,'','20200305_16525466.jpg,','0000-00-00',0),
(289,'Physique','ffv\n','','0',1,1,'','20200305_16525467.jpg,','0000-00-00',0),
(290,'Physique','ffv\n','','0',1,1,'','','0000-00-00',0),
(291,'Physique','ffv\n','','0',1,1,'','20200305_16525468.jpg,','0000-00-00',0),
(292,'Physique','ffv\n','','0',1,1,'','20200305_16525469.jpg,','0000-00-00',0),
(293,'Physique','ffv\n','','0',1,1,'','20200305_16525470.jpg,','0000-00-00',0),
(294,'Physique','vvv','','0',1,1,'','','0000-00-00',0),
(295,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5210.jpg,','0000-00-00',0),
(296,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5211.jpg,','0000-00-00',0),
(297,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5212.jpg,','0000-00-00',0),
(298,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5213.jpg,','0000-00-00',0),
(299,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5214.jpg,','0000-00-00',0),
(300,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5215.jpg,','0000-00-00',0),
(301,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5216.jpg,','0000-00-00',0),
(302,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5217.jpg,','0000-00-00',0),
(303,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5218.jpg,','0000-00-00',0),
(304,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5219.jpg,','0000-00-00',0),
(305,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5220.jpg,','0000-00-00',0),
(306,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5221.jpg,','0000-00-00',0),
(307,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5222.jpg,','0000-00-00',0),
(308,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5223.jpg,','0000-00-00',0),
(309,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5224.jpg,','0000-00-00',0),
(310,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5225.jpg,','0000-00-00',0),
(311,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5226.jpg,','0000-00-00',0),
(312,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5227.jpg,','0000-00-00',0),
(313,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5228.jpg,','0000-00-00',0),
(314,'Physique','ggyy','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5229.jpg,','0000-00-00',0),
(315,'Physique','yyy\n','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5230.jpg,','0000-00-00',0),
(316,'Physique','yyy\n','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5231.jpg,','0000-00-00',0),
(317,'Physique','yyy\n','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5232.jpg,','0000-00-00',0),
(318,'Physique','yyy\n','','0',1,1,'','image-b82d17b3-2c40-4140-bada-df6bf92d8a5233.jpg,','0000-00-00',0),
(319,'fsdfsd','sfsdfsds','','12',2,1,'Untitledsdd5.png,Untitlessdd7.png','test2.png','0000-00-00',0),
(320,'physique',' lorem ipsum lorem ipsum lorem ipsum','','50$',0,0,'Sumans_Kitchen_Pictures.pdf','','0000-00-00',0),
(321,'math','lorem lorem ','','50$',3,0,'user.png','','0000-00-00',0),
(322,'Physique','QWERCTFUYH','','650$',1,0,'user2.png','','0000-00-00',0);

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
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=167 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`role`,`source`,`status`,`is_email_verify`,`name`,`first_name`,`last_name`,`email`,`alternateEmail`,`mobile_no`,`website`,`picture_url`,`profile_url`,`vendor_file`,`dob`,`gender`,`about`,`type`,`address`,`address_2`,`country`,`school_address`,`language`,`state`,`city`,`Total_earned_amount`,`Current_Balance`,`Wallet_withdraw_status`,`pincode`,`level_of_study`,`Field_of_study`,`university`,`intrested_category`,`skills`,`Profile_Rate`,`ip_address`,`created`,`lastlogged`,`modified`,`facebook_status`,`google_status`,`auth_token`,`presentation`,`Firebase_token`,`date_updated`,`password_show`,`stripe_customer_id`,`stripe_card_id`,`name_on_card`,`walet_balance`,`block`,`highlight`,`account_number`,`ifsc_code`,`chated_on`,`oauth_provider`,`oauth_uid`,`link`) values 
(4,'admin','e10adc3949ba59abbe56e057f20f883e','admin',0,0,0,'admin','rahul','sharma','admin@gmail.com','','8989898888','klj','user32.png','','','','','','','','','','','','','',0,0,0,'','fuygviu','','','','math',0,'','','','',0,0,'','','','2020-10-22 18:10:33','','','','','980',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(12,'roshani demo','e10adc3949ba59abbe56e057f20f883e','client',0,0,0,'roshani dangi','roshani dangi','rangari','roshni@gmail.com','','7812345634','','d.png','','','2020-03-27','','','','','','India','asdasdsd,,,','','','',0,0,0,'','sddsf','asdxx ','','fdgf','work',0,'','','','',0,0,'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn','asdsdsad','','2020-06-29 09:21:18','123456','cus_H8I2LTxDlAxMQB','card_1Ga1SnJPZuhal6eZ6cmdkcIC','','20',0,1,'22222222222222','rrrr','2020-06-03 12:47:00','facebook','',''),
(14,'gopal','00267ce0bff0bb5e7f169530a1d7c2e6','client',0,0,0,'','gopal','sharma','gopal@alphawizz.awsapps.com','','7440467565','','default.png','','','','','','','','','','','','','',0,0,0,'','','','','0','biology',0,'','','','',0,0,'','','','2020-10-22 18:10:38','','','','','0',1,0,'','','0000-00-00 00:00:00','facebook','',''),
(16,'Vasim','e10adc3949ba59abbe56e057f20f883e','client',0,2147483647,0,'','vasim','ahmed','vasim@gmail.com','','7677341234','','Rectangle_162.png','','','','','','','','','test Country','','','','',0,0,0,'','testing','testing','testing','testing','testing',0,'','','','2020-04-29 13:29:21',0,0,'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn','testing','','2020-06-25 09:34:38','','cus_H8bPQNUJBLVJR1','card_1GcqRSJPZuhal6eZoU7CL8eY','test dss','30',0,0,'','','2020-06-03 12:47:00','facebook','',''),
(36,'you','f1887d3f9e6ee7a32fe5e76f4ab80d63','admin',0,0,0,'me ','me ','store','Firststore.service@gmail.com','','9009856453','','16.jpg','','','2020-04-02','','','','','','France ','Vfbfbfh','','','',0,0,0,'','Jdjdjdkk','Bdbfbfb','','Bdbdj','Jfjdjdkfkdk',0,'','','','',0,0,'eofwSbFLQ5aiNmLO7vow7B:APA91bG9QR7K9nhfn-nMvp7c2ZwnzQAfoo03so2UIxLFclmwhjFNok-nAK0y8FF0157XlO9Yl02yh4WbmnoDWgwZa_aimWAeesiltW99WMuaxiZ9eby_JSc78XpUC5gPpyw8Evzy1OaZ','Jfjfjdk','','2020-07-05 07:40:15','','','','','0',0,0,'','','2020-07-05 04:40:15','facebook','',''),
(37,'gopal123','b57e63ce8b73e370cd2a4c6865fc611b','admin',0,0,0,'','gopal','sharma','gopalsh02221@gmail.com','','3456455345','','default.png','','','','','','','','','','','','','',0,0,0,'','','','','0','English',0,'','','','',0,0,'','','','2020-10-22 18:10:46','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(39,'Gopal123','12345','admin',0,0,0,'','gopal','sharma','gopalsh021@gmail.com','','7440498598','','default.png','','','','male','','','indore','','india','school','','','indore',0,0,0,'','','','','0','physics',0,'','','','',0,0,'','','','2020-10-22 18:10:52','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(162,'hello','25f9e794323b453885f5181f1b624d0b','client',0,1,0,'','hello','123','hello@sample.com','','','','medical-insuarnce.png','','','','','','','','','Canada','','','','',0,0,0,'','2','Math','asdfasdf','ererer','ee',0,'','','','',0,0,'','ljaslkdjfklajsdflkjasdfasdf','','2020-10-28 00:40:18','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(163,'hi','25f9e794323b453885f5181f1b624d0b','client',0,0,0,'','elie','kassis','hi@sample.com','','','','me1.png','','','','','','','','','Canada','','','','',0,0,0,'','234','asdfasdf','asdfasdf','asdfasf','aa',0,'','','','',0,0,'','hello','','2020-10-28 00:40:11','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(164,'first','25f9e794323b453885f5181f1b624d0b','client',0,0,0,'','','','first@sample.com','','','','default.png','','','','','','','','','','','','','',0,0,0,'','','','','','dd',0,'','','','',0,0,'','','','2020-10-22 18:10:59','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(165,'seconds@sample.com','25f9e794323b453885f5181f1b624d0b','client',0,0,0,'','','','seconds','','','','default.png','','','','','','','','','','','','','',0,0,0,'','','','','','gg ddd',0,'','','','',0,0,'','','','2020-10-22 18:11:13','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(166,'Resiger','25f9e794323b453885f5181f1b624d0b','client',0,0,0,'','','','Register@sample.com','','','','default.png','','','','','','','','','','','','','',0,0,0,'','','','','','rr tt',0,'','','','',0,0,'','','','2020-10-22 18:11:05','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','','');

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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `withdrawpayment` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
