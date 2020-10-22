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

insert  into `add_discuss`(`id`,`reciver_id`,`sender_id`,`date_created`) values 
(1,86,1,'2020-04-16 18:07:35'),
(2,105,104,'2020-04-16 18:42:19'),
(3,107,105,'2020-04-16 18:56:01'),
(4,104,106,'2020-04-16 18:58:07'),
(6,16,107,'2020-04-16 19:51:45'),
(7,104,106,'2020-04-16 20:22:31'),
(8,104,109,'2020-04-16 20:55:44'),
(9,107,104,'2020-04-16 22:10:25'),
(10,109,110,'2020-04-16 23:46:17'),
(11,112,111,'2020-04-17 01:43:18'),
(12,112,111,'2020-04-17 01:43:24'),
(13,104,110,'2020-04-17 14:46:19'),
(14,16,115,'2020-04-20 17:48:21'),
(15,16,116,'2020-04-20 22:00:58'),
(16,116,119,'2020-04-24 23:59:16'),
(17,119,116,'2020-04-25 00:02:55'),
(18,119,116,'2020-04-25 00:09:01'),
(19,12,16,'2020-04-25 16:29:45'),
(20,12,16,'2020-04-27 15:48:42'),
(21,16,121,'2020-04-28 05:31:25'),
(22,43,121,'2020-04-28 05:31:54'),
(23,16,116,'2020-04-28 14:30:51'),
(24,139,16,'2020-05-04 16:58:11'),
(25,139,16,'2020-05-04 16:58:18'),
(26,139,16,'2020-05-04 16:58:24'),
(27,139,16,'2020-05-11 12:23:31'),
(28,139,16,'2020-05-12 15:43:00'),
(29,139,16,'2020-05-12 15:43:08'),
(30,16,139,'2020-05-16 01:01:57'),
(31,16,139,'2020-05-16 01:02:09'),
(32,16,139,'2020-06-04 05:00:02'),
(33,152,151,'2020-06-30 04:49:16'),
(34,151,36,'2020-07-05 07:40:08');

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
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*Data for the table `card_details` */

insert  into `card_details`(`id`,`card_no`,`date_created`,`date_updated`,`user_id`,`name`,`expiry`) values 
(2,1234567891,'2020-04-18 18:20:28','2020-04-18 21:20:28',86,'sa asfsafs','12/22'),
(3,7979,'2020-04-18 18:29:24','2020-04-18 21:29:24',109,'mukesh keshari ','12/45'),
(4,2147483647,'2020-04-18 17:59:36','2020-04-18 20:59:36',86,'manash',''),
(5,1234567890,'2020-04-18 11:17:11','2020-04-18 14:17:11',86,'',''),
(6,1234567890,'2020-04-18 11:17:25','2020-04-18 14:17:25',86,'sa asfsafs',''),
(7,1234567890,'2020-04-18 12:32:49','2020-04-18 15:32:49',86,'sa asfsafs',''),
(8,1234567890,'2020-04-18 13:45:45','2020-04-18 16:45:45',86,'',''),
(9,1234567890,'2020-04-18 13:46:56','2020-04-18 16:46:56',86,'sa asfsafs',''),
(10,1234567890,'2020-04-18 13:49:48','2020-04-18 16:49:48',86,'','12/23'),
(11,1234567890,'2020-04-18 14:14:29','2020-04-18 17:14:29',86,'sa asfsafs','12'),
(12,1234567890,'2020-04-18 18:15:12','2020-04-18 21:15:12',86,'','12/23'),
(13,8779,'2020-04-18 18:28:53','2020-04-18 21:28:53',109,'manash','12/12'),
(14,1234567890,'2020-04-18 18:21:31','2020-04-18 21:21:31',86,'sa asfsafs','12'),
(15,1235,'2020-04-18 21:09:53','2020-04-19 00:09:53',113,'el hdhdh bdh','44/56'),
(16,8585,'2020-04-18 21:10:21','2020-04-19 00:10:21',113,'gjhbjbj','12/22'),
(17,8585,'2020-04-18 21:10:28','2020-04-19 00:10:28',113,'gjhbjbj','12/22'),
(18,8555,'2020-04-18 21:11:44','2020-04-19 00:11:44',113,'vkvhhhh','33/33'),
(19,5122,'2020-04-18 21:12:46','2020-04-19 00:12:46',113,'vkvhhhh','33/33'),
(20,8588,'2020-04-20 12:05:13','2020-04-20 15:05:13',12,'sdfsdfsdfsdfsdf','22/22'),
(21,8588,'2020-04-20 14:36:48','2020-04-20 17:36:48',12,'sdfsdfsdfsdfsdf','22/22'),
(22,4545,'2020-04-20 18:06:09','2020-04-20 21:06:09',116,'jejdudusu','55/55'),
(23,4545,'2020-04-20 18:06:20','2020-04-20 21:06:20',116,'jejdudusu','55/55'),
(24,4242,'2020-04-20 21:28:42','2020-04-21 00:28:42',116,'cus_H8HCuVZnYXFWSV','52/63'),
(25,4242,'2020-04-20 21:28:58','2020-04-21 00:28:58',116,'yjij tguj','52/63'),
(26,411111111111111111,'2020-06-24 11:34:55','2020-06-24 14:34:55',16,'','12/22'),
(27,4222222222221,'2020-06-24 11:35:55','2020-06-24 14:35:55',16,'','12/23'),
(28,16,'2020-06-24 11:38:22','2020-06-24 14:38:22',0,'','12/25'),
(29,1321323213213213,'2020-06-24 11:38:55','2020-06-24 14:38:55',16,'','12/24'),
(30,4111111111111111,'2020-06-30 02:56:45','2020-06-30 05:56:45',4,'','12/22'),
(31,0,'2020-10-18 14:24:33','2020-10-18 15:24:33',0,'','/1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `chat` */

insert  into `chat`(`id`,`sender_id`,`receiver_id`,`message`,`attachment_name`,`file_ext`,`mime_type`,`message_date_time`,`ip_address`,`project_id`,`read_status`) values 
(1,162,163,'hello?','','','','2020-10-21 00:29:58','127.0.0.1',0,0),
(2,162,163,'Can you really help me?','','','','2020-10-21 17:28:16','127.0.0.1',0,0);

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

insert  into `chatting_member`(`id`,`user_id`,`member_id`) values 
(2,162,163);

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
(1,309,'test@test.com','test','test here','ok ,  non ok , in work  dd','2020-05-07 00:00:00','2020-05-14 08:15:13'),
(2,329,'vasim@gmail.com','','hi How are you?','','2020-06-15 10:15:13','2020-06-15 13:15:13'),
(3,392,'77@gmail.com','','Ok','','2020-06-30 02:19:03','2020-06-30 05:19:03'),
(4,392,'79@gmail.com','','Hy','','2020-06-30 02:21:04','2020-06-30 05:21:04');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `mission` */

insert  into `mission`(`mission_id`,`title`,`mission_title`,`mission_budget`,`budget`,`mission_category`,`project_category`,`mission_budget_currency`,`currency`,`mission_image`,`image`,`mission_doc`,`file`,`user_id`,`client_id`,`mission_description`,`description`,`mission_status`,`status`,`accepted_by`,`created_date`,`bank_fee`,`satisfy`) values 
(18,'','sfasd',0,'234',4,0,'','','','','','',0,162,'','wsfwerwer',0,0,0,'2020-10-22','',0),
(15,'','hello',0,'200',2,0,'','','','','','',0,162,'','sdfgsdfgsdfg',0,0,0,'2020-10-22','',0),
(16,'','asdfasdf',0,'3243',3,0,'','','','','','',0,162,'','asdfasfdasfd',0,0,0,'2020-10-22','',0);

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
) ENGINE=MyISAM AUTO_INCREMENT=570 DEFAULT CHARSET=latin1;

/*Data for the table `notification` */

insert  into `notification`(`notification_id`,`user_type`,`user_id`,`demand_id`,`notification`,`read_status`,`created`,`type_id`) values 
(1,2,147,1,'payment request',1,'2020-06-27 09:55:23',1),
(2,2,147,1,'Demand  added successfully',1,'2020-06-27 09:55:40',2),
(3,2,147,1,'offer accepted',1,'2020-06-27 09:55:00',3),
(4,2,1,1,'Appointment reschedule successfully',1,'2020-05-11 14:28:53',3),
(5,2,1,1,'Appointment reschedule successfully',1,'2020-03-31 13:54:32',4),
(6,2,80,2,'Appointment addedd successfully',1,'2020-03-31 13:54:35',5),
(7,2,80,3,'Appointment addedd successfully',1,'2020-03-31 13:54:39',1),
(8,2,80,4,'Appointment addedd successfully',1,'2020-05-11 14:28:53',3),
(9,2,80,5,'Appointment addedd successfully',1,'2020-03-31 13:54:47',1),
(10,2,80,2,'Your Appointment Approved By Doctor',1,'2020-03-31 13:54:51',3),
(11,2,80,2,'Your Appointment Approved By Doctor',1,'2020-03-31 13:54:54',1),
(12,2,80,4,'Your Appointment Approved By Doctor',1,'2020-03-31 13:54:57',1),
(13,2,80,5,'Your Appointment Approved By Doctor',1,'2020-03-31 13:55:00',4),
(14,2,80,6,'Appointment addedd successfully',0,'2020-03-31 13:55:03',1),
(15,2,80,7,'Appointment addedd successfully',0,'2020-05-11 14:28:53',3),
(16,2,74,8,'Appointment addedd successfully',1,'2020-05-11 14:28:53',3),
(17,2,74,9,'Appointment addedd successfully',1,'2020-03-31 13:55:17',3),
(18,2,74,10,'Appointment addedd successfully',1,'2020-03-05 18:53:19',0),
(19,2,74,11,'Appointment addedd successfully',1,'2020-03-05 18:53:19',0),
(20,2,74,12,'Appointment addedd successfully',1,'2020-03-05 18:53:19',0),
(21,2,74,13,'Appointment addedd successfully',1,'2020-03-05 18:53:19',0),
(22,2,74,9,'Your Appointment Approved By Doctor',1,'2020-03-05 18:53:19',0),
(23,2,74,9,'Your Appointment Approved By Doctor',1,'2020-03-05 18:53:19',0),
(24,2,74,9,'Your Appointment Approved By Doctor',1,'2020-03-05 18:53:19',0),
(25,2,74,14,'Appointment addedd successfully',1,'2020-03-05 18:53:19',0),
(26,2,74,15,'Appointment addedd successfully',1,'2020-03-05 18:53:19',0),
(27,2,74,16,'Appointment addedd successfully',1,'2020-03-05 18:53:19',0),
(28,2,74,17,'Appointment addedd successfully',1,'2020-03-05 18:53:19',0),
(29,2,82,18,'Appointment addedd successfully',0,'2020-03-05 19:12:54',0),
(30,2,82,19,'Appointment addedd successfully',0,'2020-03-05 19:12:55',0),
(31,2,82,19,'Your Appointment Approved By Doctor',0,'2020-03-05 19:15:18',0),
(32,2,82,19,'Your Appointment Approved By Doctor',0,'2020-03-05 19:15:18',0),
(33,2,82,19,'Your Appointment Approved By Doctor',0,'2020-03-05 19:15:18',0),
(34,2,82,19,'Your Appointment Approved By Doctor',0,'2020-03-05 19:16:20',0),
(35,2,82,19,'Your Appointment Approved By Doctor',0,'2020-03-05 19:16:20',0),
(36,2,82,19,'Your Appointment Approved By Doctor',0,'2020-03-05 19:16:20',0),
(37,2,82,19,'Your Appointment Approved By Doctor',0,'2020-03-05 19:16:20',0),
(38,2,82,19,'Your Appointment Approved By Doctor',0,'2020-03-05 19:16:20',0),
(39,2,82,18,'Your Appointment Approved By Doctor',0,'2020-03-06 06:36:03',0),
(40,2,82,18,'Your Appointment Approved By Doctor',0,'2020-03-06 06:36:03',0),
(41,2,36,20,'Appointment addedd successfully',1,'2020-03-09 09:08:03',0),
(42,2,36,21,'Appointment addedd successfully',1,'2020-03-09 09:08:03',0),
(43,2,36,22,'Appointment addedd successfully',1,'2020-03-09 09:08:03',0),
(44,2,36,23,'Appointment addedd successfully',1,'2020-03-09 09:08:03',0),
(45,2,36,24,'Appointment addedd successfully',1,'2020-03-11 08:35:18',0),
(46,2,36,24,'Appointment reschedule successfully',1,'2020-03-11 08:35:18',0),
(47,2,83,25,'Appointment addedd successfully',1,'2020-03-11 10:31:22',0),
(48,2,83,26,'Appointment addedd successfully',1,'2020-03-11 11:49:47',0),
(49,2,83,27,'Appointment addedd successfully',1,'2020-03-11 11:49:47',0),
(50,2,83,28,'Appointment addedd successfully',1,'2020-03-11 11:49:47',0),
(51,2,83,29,'Appointment addedd successfully',1,'2020-03-11 12:05:06',0),
(52,2,83,30,'Appointment addedd successfully',0,'2020-03-11 12:08:26',0),
(434,0,12,388,'Your offer has been accepted',0,'2020-06-29 08:18:14',3),
(53,0,58,151,'Your offer has been accepted',1,'2020-04-03 18:47:14',0),
(54,0,59,171,'Your offer has been accepted',0,'2020-04-04 12:54:06',0),
(55,0,36,1,'Your offer has been accepted',0,'2020-04-05 17:40:51',0),
(56,0,1,0,'Your offer has been accepted',0,'2020-04-06 07:54:34',0),
(57,0,57,0,'Your offer has been accepted',0,'2020-04-06 08:24:00',0),
(58,0,12,15,'Your offer has been accepted',0,'2020-04-09 11:39:07',0),
(59,0,59,0,'Your offer has been accepted',0,'2020-04-09 12:08:17',0),
(60,0,16,172,'Your offer has been accepted',0,'2020-04-09 12:33:45',0),
(61,0,16,173,'Your offer has been accepted',0,'2020-04-09 13:05:51',0),
(62,0,58,174,'Your offer has been accepted',0,'2020-04-09 14:36:00',0),
(63,0,58,176,'Your offer has been accepted',0,'2020-04-09 15:40:24',0),
(64,0,0,177,'Your offer has been accepted',0,'2020-04-09 16:17:58',0),
(65,0,16,178,'Your offer has been accepted',0,'2020-04-09 16:25:01',0),
(66,0,1,181,'Your offer has been accepted',0,'2020-04-11 22:49:12',0),
(67,0,88,183,'Your offer has been accepted',0,'2020-04-13 16:30:23',0),
(68,0,88,0,'Your offer has been accepted',0,'2020-04-13 16:33:21',0),
(69,0,88,184,'Your offer has been accepted',0,'2020-04-13 21:08:38',0),
(70,0,91,186,'Your offer has been accepted',0,'2020-04-13 23:21:25',0),
(71,0,90,195,'Your offer has been accepted',0,'2020-04-14 23:30:18',0),
(72,0,100,235,'Your offer has been accepted',0,'2020-04-16 02:46:26',0),
(73,0,102,236,'Your offer has been accepted',0,'2020-04-16 03:14:04',0),
(74,0,16,260,'Your offer has been accepted',0,'2020-04-16 14:57:50',0),
(75,0,16,280,'Your offer has been accepted',0,'2020-04-17 17:59:44',0),
(76,0,113,281,'Your offer has been accepted',0,'2020-04-17 20:12:12',0),
(77,0,113,281,'Your offer has been accepted',0,'2020-04-17 20:12:38',0),
(78,0,16,287,'Your offer has been accepted',0,'2020-04-20 10:11:56',0),
(79,0,16,290,'Your offer has been accepted',0,'2020-04-21 08:05:24',0),
(80,0,117,291,'Your offer has been accepted',0,'2020-04-22 06:55:19',0),
(81,0,16,293,'Your offer has been accepted',0,'2020-04-22 13:38:48',0),
(82,0,16,0,'Your offer has been accepted',0,'2020-04-22 14:07:31',0),
(83,0,16,0,'Your offer has been accepted',0,'2020-04-22 14:09:10',0),
(84,0,16,0,'Your offer has been accepted',0,'2020-04-22 14:14:30',0),
(85,0,12,294,'Your offer has been accepted',0,'2020-04-23 09:10:17',0),
(86,0,12,294,'Your offer has been accepted',0,'2020-04-23 09:14:31',0),
(87,0,12,0,'Your offer has been accepted',0,'2020-04-23 09:24:40',0),
(88,0,16,295,'Your offer has been accepted',0,'2020-04-23 10:36:30',0),
(89,0,16,0,'Your offer has been accepted',0,'2020-04-23 16:07:18',0),
(90,0,116,308,'Your offer has been accepted',0,'2020-04-24 16:40:51',0),
(91,0,116,0,'Your offer has been accepted',0,'2020-04-24 16:45:33',0),
(92,0,119,309,'Your offer has been accepted',0,'2020-04-25 00:10:19',0),
(93,0,119,0,'Your offer has been accepted',0,'2020-04-25 00:14:02',0),
(94,0,12,310,'Your offer has been accepted',0,'2020-04-25 08:40:50',0),
(95,0,12,0,'Your offer has been accepted',0,'2020-04-25 08:43:12',0),
(96,0,16,0,'Your offer has been accepted',0,'2020-04-25 08:53:33',0),
(97,0,16,0,'Your offer has been accepted',0,'2020-04-25 08:54:47',0),
(98,0,16,311,'Your offer has been accepted',0,'2020-04-25 10:32:24',0),
(99,0,16,0,'Your offer has been accepted',0,'2020-04-25 10:41:25',0),
(100,0,16,0,'Your offer has been accepted',0,'2020-04-25 10:45:35',0),
(101,0,16,0,'Your offer has been accepted',0,'2020-04-25 10:49:10',0),
(102,0,12,0,'Your offer has been accepted',0,'2020-04-25 10:49:42',0),
(103,0,16,0,'Your offer has been accepted',0,'2020-04-25 10:52:23',0),
(104,0,16,0,'Your offer has been accepted',0,'2020-04-25 10:56:11',0),
(105,0,12,0,'Your offer has been accepted',0,'2020-04-25 10:57:47',0),
(106,0,16,0,'Your offer has been accepted',0,'2020-04-25 10:58:53',0),
(107,0,16,0,'Your offer has been accepted',0,'2020-04-25 11:14:56',0),
(108,0,12,0,'Your offer has been accepted',0,'2020-04-25 11:16:57',0),
(109,0,12,0,'Your offer has been accepted',0,'2020-04-25 11:19:06',0),
(110,0,12,0,'Your offer has been accepted',0,'2020-04-25 11:19:32',0),
(111,0,12,0,'Your offer has been accepted',0,'2020-04-25 11:19:37',0),
(112,0,12,0,'Your offer has been accepted',0,'2020-04-25 11:21:57',0),
(113,0,12,0,'Your offer has been accepted',0,'2020-04-25 12:32:42',0),
(114,0,12,0,'Your offer has been accepted',0,'2020-04-25 14:56:48',0),
(115,0,12,0,'Your offer has been accepted',0,'2020-04-25 15:37:03',0),
(116,0,12,0,'Your offer has been accepted',0,'2020-04-25 15:38:45',0),
(117,0,12,0,'Your offer has been accepted',0,'2020-04-25 15:40:40',0),
(118,0,86,0,'Your offer has been accepted',0,'2020-04-25 15:53:22',0),
(119,0,16,313,'Your offer has been accepted',0,'2020-04-25 16:21:15',0),
(120,0,12,0,'Your offer has been accepted',0,'2020-04-25 16:26:38',0),
(121,0,12,314,'Your offer has been accepted',0,'2020-04-25 16:30:49',0),
(122,0,12,314,'Your offer has been accepted',0,'2020-04-25 16:31:27',0),
(123,0,16,0,'Your offer has been accepted',0,'2020-04-25 16:33:14',0),
(124,0,16,0,'Your offer has been accepted',0,'2020-04-25 17:00:08',0),
(125,0,12,314,'Your have received an offer',0,'2020-04-25 18:02:20',0),
(126,0,12,314,'Your have received an offer',0,'2020-04-25 18:12:34',0),
(127,0,16,313,'Your offer has been accepted',0,'2020-04-25 18:45:23',0),
(128,0,16,316,'Your have received an offer',0,'2020-04-25 19:39:44',0),
(129,0,12,319,'Your have received an offer',0,'2020-04-27 08:03:59',0),
(130,0,16,320,'Your have received an offer',0,'2020-04-27 08:05:06',0),
(131,0,16,321,'Your have received an offer',0,'2020-04-27 08:08:11',0),
(132,0,12,322,'Your have received an offer',0,'2020-04-27 08:18:32',0),
(133,0,12,323,'Your have received an offer',0,'2020-04-27 08:20:53',0),
(134,0,16,324,'Your have received an offer',0,'2020-04-27 08:22:34',0),
(135,0,12,323,'Your offer has been accepted',0,'2020-04-27 08:23:23',0),
(136,0,16,324,'Your offer has been accepted',0,'2020-04-27 08:24:30',0),
(137,0,16,325,'Your have received an offer',0,'2020-04-27 09:04:28',0),
(138,0,16,325,'Your offer has been accepted',0,'2020-04-27 09:05:15',0),
(139,0,12,0,'You have received a review',0,'2020-04-27 09:08:24',0),
(140,0,16,324,'Your offer has been accepted',0,'2020-04-27 09:39:35',0),
(141,0,16,324,'Your offer has been accepted',0,'2020-04-27 09:40:15',0),
(142,0,16,324,'Your payment has been done',0,'2020-04-27 09:40:15',0),
(143,0,16,321,'Your offer has been accepted',0,'2020-04-27 09:43:52',0),
(144,0,12,321,'Your offer has been accepted',1,'2020-04-28 12:41:46',1),
(145,0,16,321,'Your payment has been done',0,'2020-04-27 09:44:48',0),
(146,0,16,326,'Your have received an offer',1,'2020-05-11 14:28:53',3),
(147,0,16,328,'Your have received an offer',1,'2020-05-11 14:28:53',3),
(148,0,16,328,'Your have received an offer',1,'2020-05-11 14:28:53',3),
(149,0,16,328,'Your have received an offer',1,'2020-05-11 14:28:53',3),
(150,0,16,328,'Your have received an offer',1,'2020-05-11 14:28:53',3),
(151,0,16,329,'Your have received an offer',1,'2020-05-11 14:28:53',3),
(152,0,16,330,'You have received an offer',1,'2020-05-11 14:28:53',3),
(153,0,12,330,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(154,0,16,330,'Your payment has been done',1,'2020-04-27 19:39:08',1),
(155,0,12,0,'You have received a review',1,'2020-04-27 16:16:40',5),
(156,0,12,329,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(157,0,16,329,'Your payment has been done',1,'2020-04-27 19:39:08',1),
(158,0,12,331,'You have received an offer',1,'2020-05-11 14:28:53',3),
(159,0,16,331,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(160,0,16,331,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(161,0,12,331,'Your payment has been done',1,'2020-04-28 12:41:46',1),
(162,0,12,331,'Your payment has been done',1,'2020-04-28 12:41:46',1),
(163,0,16,0,'Your Review: this is good',1,'2020-04-27 17:43:06',5),
(164,0,12,0,'ddsds',1,'2020-04-27 17:21:55',4),
(165,0,12,0,'dsd',1,'2020-04-27 18:17:39',4),
(166,0,16,0,'test',1,'2020-04-27 18:06:31',4),
(167,0,16,0,'hi test',1,'2020-04-27 18:08:11',4),
(168,0,16,0,'hee',1,'2020-04-27 19:39:37',4),
(169,0,16,0,'jooe',1,'2020-04-27 19:39:37',4),
(170,0,16,0,'teess',1,'2020-04-27 19:39:37',4),
(171,0,16,0,'yss',1,'2020-04-27 19:39:37',4),
(172,0,16,0,'rrss',1,'2020-04-27 19:39:37',4),
(173,0,16,0,'hey',1,'2020-04-27 19:39:37',4),
(174,0,16,0,'helloss',1,'2020-04-27 19:39:37',4),
(175,0,16,0,'huuu',1,'2020-04-27 19:39:37',4),
(176,0,16,0,'jhkhkjh',1,'2020-04-27 19:39:37',4),
(177,0,12,332,'You have received an offer',1,'2020-05-11 14:27:38',3),
(178,0,120,332,'Your offer has been accepted',0,'2020-05-11 14:27:43',3),
(179,0,12,332,'Your payment has been done',1,'2020-04-28 12:41:46',1),
(180,0,12,328,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(181,0,16,328,'Your payment has been done',1,'2020-04-27 20:59:57',1),
(182,0,12,328,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(183,0,16,328,'Your payment has been done',1,'2020-04-27 20:59:57',1),
(184,0,12,326,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(185,0,16,326,'Your payment has been done',1,'2020-04-27 22:18:53',1),
(186,0,12,320,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(187,0,16,320,'Your payment has been done',1,'2020-04-27 22:34:40',1),
(188,0,121,333,'You have received an offer',0,'2020-05-11 14:27:52',3),
(189,0,16,327,'You have received an offer',1,'2020-05-11 14:28:53',3),
(190,0,121,334,'You have received an offer',0,'2020-05-11 14:27:59',3),
(191,0,116,334,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(192,0,121,334,'Your payment has been done',0,'2020-04-28 06:07:58',1),
(193,0,121,0,'Review: ',0,'2020-04-28 06:11:07',5),
(194,0,116,0,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(195,0,121,0,'Your payment has been done',0,'2020-04-28 06:11:37',1),
(196,0,16,0,'hii',1,'2020-04-28 12:20:54',4),
(197,0,16,335,'You have received an offer',1,'2020-05-11 14:28:53',3),
(198,0,12,335,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(199,0,12,335,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(200,0,16,335,'Your payment has been done',1,'2020-04-28 18:54:16',1),
(201,0,16,335,'Your payment has been done',1,'2020-04-28 18:54:16',1),
(202,0,12,0,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(203,0,16,0,'Your payment has been done',1,'2020-04-28 18:54:16',1),
(204,0,122,336,'You have received an offer',1,'2020-05-11 14:28:53',3),
(205,0,126,338,'You have received an offer',0,'2020-05-11 14:28:53',3),
(206,0,126,339,'You have received an offer',0,'2020-05-11 14:28:53',3),
(207,0,116,327,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(208,0,16,327,'Your payment has been done',1,'2020-04-29 15:42:14',1),
(209,0,12,316,'Your offer has been accepted',1,'2020-05-11 14:28:53',3),
(210,0,16,316,'Your payment has been done',1,'2020-04-29 15:43:47',1),
(211,0,115,340,'You have received an offer',1,'2020-05-11 14:28:53',3),
(212,0,127,340,'Your offer has been accepted',0,'2020-05-11 14:28:53',3),
(213,0,115,340,'Your payment has been done',1,'2020-04-30 08:24:43',1),
(214,0,127,341,'You have received an offer',0,'2020-05-11 14:28:53',3),
(215,0,126,341,'Your offer has been accepted',0,'2020-05-11 14:28:53',3),
(216,0,127,341,'Your payment has been done',0,'2020-05-01 08:06:50',1),
(217,0,127,342,'You have received an offer',0,'2020-05-11 14:28:53',3),
(218,0,126,342,'Your offer has been accepted',0,'2020-05-11 14:27:25',3),
(219,0,127,342,'Your payment has been done',0,'2020-05-01 10:47:55',1),
(220,0,12,0,'Your offer has been accepted',1,'2020-05-13 09:21:47',3),
(221,0,16,0,'Your payment has been done',1,'2020-05-01 14:02:49',1),
(222,0,136,343,'You have received an offer',1,'2020-05-11 14:27:28',3),
(223,0,16,343,'Your offer has been accepted',1,'2020-05-11 14:27:15',3),
(224,0,136,343,'Your payment has been done',0,'2020-05-01 14:12:27',1),
(225,0,12,344,'You have received an offer',1,'2020-05-13 09:21:47',3),
(226,0,16,344,'Your offer has been accepted',1,'2020-05-11 14:27:07',3),
(227,0,12,344,'Your payment has been done',1,'2020-06-01 16:56:27',1),
(228,0,16,345,'You have received an offer',1,'2020-05-12 16:50:26',3),
(229,0,12,345,'Your offer has been accepted',1,'2020-05-13 09:21:47',3),
(230,0,16,345,'Your payment has been done',1,'2020-05-01 14:35:46',1),
(231,0,139,346,'You have received an offer',1,'2020-05-11 14:26:54',3),
(232,0,138,346,'Your offer has been accepted',0,'2020-05-11 14:26:50',3),
(233,0,139,346,'Your payment has been done',1,'2020-05-02 08:26:54',1),
(234,0,138,0,'Review: Goog work ',0,'2020-05-02 08:30:47',5),
(235,0,124,337,'You have received an offer',0,'2020-05-11 14:28:53',3),
(236,0,139,347,'You have received an offer',1,'2020-05-11 14:26:46',3),
(237,0,138,347,'Your offer has been accepted',0,'2020-05-11 14:26:42',3),
(238,0,139,347,'Your payment has been done',1,'2020-05-02 08:45:45',1),
(239,0,138,347,'Your offer has been accepted',0,'2020-05-11 14:26:37',3),
(240,0,139,347,'Your payment has been done',1,'2020-05-02 08:45:45',1),
(241,0,136,0,'Hi',0,'2020-05-06 10:11:09',4),
(242,0,136,0,'Hello',0,'2020-05-06 10:11:33',4),
(243,0,139,351,'You have received an offer',1,'2020-05-11 14:26:33',3),
(244,0,123,351,'Your offer has been accepted',1,'2020-05-11 14:26:28',3),
(245,0,139,351,'Your payment has been done',1,'2020-05-09 21:02:10',1),
(246,0,123,0,'Review: Yes good',1,'2020-05-09 21:06:40',5),
(247,0,139,352,'You have received an offer',1,'2020-05-11 14:26:24',3),
(248,0,123,352,'Your offer has been accepted',1,'2020-05-11 14:26:20',3),
(249,0,139,352,'Your payment has been done',1,'2020-05-09 21:10:58',1),
(250,0,123,0,'Review: Gogi',1,'2020-05-09 21:15:32',5),
(251,0,139,353,'You have received an offer',1,'2020-05-11 14:24:15',3),
(252,0,139,354,'You have received an offer',1,'2020-05-11 14:24:20',3),
(253,0,123,355,'You have received an offer',0,'2020-05-11 14:25:13',0),
(254,0,139,355,'Your offer has been accepted',1,'2020-05-11 14:25:16',3),
(255,0,123,355,'Your payment has been done',1,'2020-05-14 01:25:52',1),
(256,0,12,356,'You have received an offer',1,'2020-05-13 09:21:47',3),
(257,0,115,0,'hi',0,'2020-05-12 14:06:41',4),
(258,0,16,0,'hi',1,'2020-05-12 16:50:31',4),
(259,0,115,0,'ht',0,'2020-05-12 14:14:07',4),
(260,0,115,0,'ttt',0,'2020-05-12 14:15:27',4),
(261,0,16,363,'You have received an offer',1,'2020-05-12 16:50:26',3),
(262,0,16,362,'You have received an offer',1,'2020-06-03 13:00:38',3),
(263,0,133,356,'Your offer has been accepted',0,'2020-05-12 16:54:39',3),
(264,0,12,356,'Your payment has been done',1,'2020-06-01 16:56:27',1),
(265,0,16,322,'Your offer has been accepted',1,'2020-06-03 13:00:38',3),
(266,0,12,322,'Your payment has been done',1,'2020-06-01 16:56:27',1),
(267,0,12,365,'You have received an offer',1,'2020-05-13 09:21:47',3),
(268,0,139,365,'Your offer has been accepted',1,'2020-05-13 09:21:52',3),
(269,0,12,365,'Your payment has been done',1,'2020-06-01 16:56:27',1),
(270,0,12,366,'You have received an offer',1,'2020-05-13 09:21:47',3),
(271,0,139,366,'Your offer has been accepted',1,'2020-05-13 09:21:52',3),
(272,0,12,366,'Your payment has been done',1,'2020-06-01 16:56:27',1),
(273,0,139,0,'Review: cnxj',1,'2020-05-13 09:22:36',5),
(274,0,12,370,'You have received an offer',1,'2020-05-13 09:21:47',3),
(275,0,139,370,'Your offer has been accepted',1,'2020-05-13 12:57:27',3),
(276,0,12,370,'Your payment has been done',1,'2020-06-01 16:56:27',1),
(277,0,139,0,'Review: Good WORK',1,'2020-05-13 15:53:30',5),
(278,0,12,370,'You have received project progress report',1,'2020-05-13 09:53:10',2),
(279,0,12,370,'You have received project progress report',1,'2020-05-13 10:34:41',2),
(280,0,12,370,'You have received project progress report',1,'2020-05-13 10:34:41',2),
(281,0,12,370,'You have received project progress report',1,'2020-05-13 10:34:41',2),
(282,0,12,371,'You have received an offer',1,'2020-06-03 15:09:50',3),
(283,0,139,371,'Your offer has been accepted',1,'2020-05-13 12:57:27',3),
(284,0,12,371,'Your payment has been done',1,'2020-06-01 16:56:27',1),
(285,0,12,371,'You have received project progress report',1,'2020-05-13 10:34:41',2),
(286,0,12,371,'You have received project progress report',1,'2020-05-13 10:34:41',2),
(287,0,139,0,'Review: Good WORKED',1,'2020-05-13 15:53:30',5),
(288,0,12,371,'You have received project progress report',1,'2020-06-02 14:26:15',2),
(289,0,12,367,'You have received an offer',1,'2020-06-03 15:09:50',3),
(290,0,12,318,'You have received an offer',1,'2020-06-03 15:09:50',3),
(291,0,16,372,'You have received an offer',1,'2020-06-03 13:00:38',3),
(292,0,139,372,'Your offer has been accepted',1,'2020-05-13 12:57:27',3),
(293,0,16,372,'Your payment has been done',1,'2020-05-13 12:58:34',1),
(294,0,16,372,'You have received project progress report',1,'2020-05-13 12:59:00',2),
(295,0,139,0,'Review: GOod',1,'2020-05-13 15:53:30',5),
(296,0,16,372,'Your payment has been released',1,'2020-05-13 13:01:53',2),
(297,0,16,372,'Your have project is moved to completed',1,'2020-05-13 13:01:53',2),
(298,0,139,0,'hey',1,'2020-05-13 15:53:27',4),
(299,0,139,370,'Your payment has been released',1,'2020-05-13 13:42:36',1),
(300,0,12,370,'Your have project is moved to completed',1,'2020-06-02 14:26:15',2),
(301,0,139,373,'You have received an offer',1,'2020-05-14 01:29:43',3),
(302,0,16,373,'Your offer has been accepted',1,'2020-06-03 13:00:38',3),
(303,0,139,373,'Your payment has been done',1,'2020-05-13 15:53:19',1),
(304,0,139,373,'Your project has been moved in to delivered',1,'2020-05-13 13:50:32',2),
(305,0,16,0,'Review: good',1,'2020-06-03 15:50:05',5),
(306,0,139,373,'Your project has been moved in to delivered',1,'2020-05-13 15:53:12',2),
(307,0,16,0,'Review: good',1,'2020-06-03 15:50:05',5),
(308,0,16,373,'Your payment has been released',1,'2020-05-13 13:52:33',1),
(309,0,139,373,'Your have project is moved to completed',1,'2020-05-13 15:53:12',2),
(310,0,139,374,'You have received an offer',1,'2020-05-14 01:29:43',3),
(311,0,16,374,'Your offer has been accepted',1,'2020-06-03 13:00:38',3),
(312,0,139,374,'Your payment has been done',1,'2020-05-13 15:53:19',1),
(313,0,139,374,'Your project has been moved in to delivered',1,'2020-05-13 15:53:12',2),
(314,0,16,0,'Review: good',1,'2020-06-03 15:50:05',5),
(315,0,16,374,'Your payment has been released',1,'2020-06-03 13:00:17',1),
(316,0,139,374,'Your have project is moved to completed',1,'2020-05-13 15:53:12',2),
(317,0,139,375,'You have received an offer',1,'2020-05-14 01:29:43',3),
(318,0,16,375,'Your offer has been accepted',1,'2020-06-03 13:00:38',3),
(319,0,139,375,'Your payment has been done',1,'2020-05-13 15:53:19',1),
(320,0,139,375,'Your project has been moved in to delivered',1,'2020-05-13 15:53:12',2),
(321,0,16,0,'Review: gghh',1,'2020-06-03 15:50:05',5),
(322,0,16,375,'Your payment has been released',1,'2020-06-03 13:00:17',1),
(323,0,139,375,'Your have project is moved to completed',1,'2020-05-13 15:53:12',2),
(324,0,139,375,'Your project has been moved in to delivered',1,'2020-05-13 15:53:12',2),
(325,0,139,375,'Your project has been moved in to delivered',1,'2020-05-13 15:53:12',2),
(326,0,139,375,'Your project has been moved in to delivered',1,'2020-05-13 15:53:12',2),
(327,0,139,375,'Your project has been moved in to delivered',1,'2020-05-13 15:53:12',2),
(328,0,139,375,'Your project has been moved in to Dispute',1,'2020-05-13 15:53:12',2),
(329,0,12,322,'Your project has been moved in to Dispute',1,'2020-06-02 14:26:15',2),
(330,0,139,375,'Your project has been moved in to Dispute',1,'2020-05-13 15:53:12',2),
(331,0,139,374,'Your project has been moved in to Dispute',1,'2020-05-13 15:53:12',2),
(332,0,139,373,'Your project has been moved in to Dispute',1,'2020-05-13 15:53:12',2),
(333,0,139,373,'Your project has been moved in to Dispute',1,'2020-05-13 15:53:12',2),
(334,0,16,372,'Your project has been moved in to Dispute',1,'2020-06-03 15:44:18',2),
(335,0,123,376,'You have received an offer',1,'2020-05-14 01:27:44',3),
(336,0,139,376,'Your offer has been accepted',1,'2020-05-14 01:32:57',3),
(337,0,123,376,'Your payment has been done',1,'2020-05-14 01:32:26',1),
(338,0,123,376,'Your project has been moved in to delivered',1,'2020-05-14 01:33:39',2),
(339,0,123,376,'Your project has been moved in to Dispute',1,'2020-05-14 01:37:17',2),
(340,0,123,377,'You have received an offer',1,'2020-05-14 17:33:17',3),
(341,0,123,377,'You have received an offer',1,'2020-05-14 17:35:45',3),
(342,0,123,377,'You have received an offer',1,'2020-05-14 17:37:32',3),
(343,0,139,377,'Your offer has been accepted',1,'2020-05-14 17:41:25',3),
(344,0,139,377,'Your offer has been accepted',1,'2020-05-14 17:41:25',3),
(345,0,123,377,'Your payment has been done',1,'2020-05-14 17:40:55',1),
(346,0,123,377,'Your payment has been done',1,'2020-05-14 17:40:55',1),
(347,0,123,377,'Your project has been moved in to delivered',1,'2020-05-14 17:45:08',2),
(348,0,123,377,'Your project has been moved in to delivered',1,'2020-05-14 17:45:08',2),
(349,0,139,0,'Review: Ygygyuhuj',1,'2020-05-14 17:46:21',5),
(350,0,139,377,'Your payment has been released',1,'2020-05-14 17:46:15',1),
(351,0,123,377,'Your have project is moved to completed',1,'2020-05-14 17:45:57',2),
(352,0,123,0,'Jfjfj',0,'2020-05-15 16:50:17',4),
(353,0,139,375,'Your project has been moved in to Dispute',1,'2020-05-16 10:01:32',2),
(354,0,139,375,'Your project has been moved in to Dispute',1,'2020-05-16 10:03:57',2),
(355,0,139,375,'Your project has been moved in to Dispute',1,'2020-05-16 10:03:57',2),
(356,0,139,375,'Your project has been moved in to Dispute',1,'2020-05-16 10:03:57',2),
(357,0,139,0,'Review: this is for test',1,'2020-06-04 04:51:59',5),
(358,0,139,371,'A request to release a payment has been sent',1,'2020-06-04 04:51:04',1),
(359,0,12,371,'Your have project is moved to completed',1,'2020-06-02 14:26:15',2),
(360,0,16,379,'You have received an offer',1,'2020-06-03 13:00:38',3),
(361,0,12,379,'Your offer has been accepted',1,'2020-06-03 15:09:50',3),
(362,0,16,379,'Your payment has been done',1,'2020-06-03 13:00:17',1),
(363,0,12,0,'Your offer has been accepted',1,'2020-06-03 15:09:50',3),
(364,0,16,0,'Your payment has been done',1,'2020-06-03 13:00:17',1),
(365,0,12,0,'Your offer has been accepted',1,'2020-06-03 15:09:50',3),
(366,0,16,0,'Your payment has been done',1,'2020-06-03 13:00:17',1),
(367,0,12,380,'You have received an offer',1,'2020-06-03 15:09:50',3),
(368,0,16,380,'Your offer has been accepted',1,'2020-06-03 13:00:38',3),
(369,0,12,380,'Your payment has been done',1,'2020-06-03 15:10:24',1),
(370,0,12,380,'Your project has been moved in to delivered',1,'2020-06-03 15:10:11',2),
(371,0,16,0,'Review: good',1,'2020-06-03 15:50:05',5),
(372,0,16,380,'A request to release a payment has been sent',1,'2020-06-03 13:00:17',1),
(373,0,12,380,'Your have project is moved to completed',1,'2020-06-03 15:10:11',2),
(374,0,16,381,'You have received an offer',1,'2020-06-03 13:00:38',3),
(375,0,12,381,'Your offer has been accepted',1,'2020-06-03 15:09:50',3),
(376,0,12,381,'Your payment has been submitted to admin',1,'2020-06-03 15:10:24',1),
(377,0,16,381,'Your payment has been done',1,'2020-06-03 13:00:17',1),
(378,0,16,381,'Your project has been moved in to delivered',1,'2020-06-03 15:44:18',2),
(379,0,16,381,'Your project has been moved in to delivered',1,'2020-06-03 15:44:18',2),
(380,0,12,0,'Review: good job',0,'2020-06-02 17:47:35',5),
(381,0,12,381,'A request to release a payment has been sent',1,'2020-06-03 15:10:24',1),
(382,0,16,381,'Your have project is moved to completed',1,'2020-06-03 15:44:18',2),
(383,0,139,378,'You have received an offer',1,'2020-06-04 04:51:50',3),
(384,0,16,382,'You have received an offer',1,'2020-06-03 13:00:38',3),
(385,0,16,383,'You have received an offer',1,'2020-06-03 13:00:38',3),
(386,0,12,383,'Your offer has been accepted',1,'2020-06-03 15:09:50',3),
(387,0,12,383,'Your payment has been submitted to Admin',1,'2020-06-03 15:10:24',1),
(388,0,16,383,'Your payment has been done',1,'2020-06-03 13:00:17',1),
(389,0,16,382,'You have received an offer',1,'2020-06-03 13:00:38',3),
(390,0,16,382,'You have received an offer',1,'2020-06-03 13:00:38',3),
(391,0,12,382,'Your offer has been accepted',1,'2020-06-03 15:09:50',3),
(392,0,12,382,'Your payment has been submitted to Admin',1,'2020-06-03 15:10:24',1),
(393,0,16,382,'Your payment has been done',1,'2020-06-03 13:00:17',1),
(394,0,16,384,'You have received an offer',1,'2020-06-03 13:00:38',3),
(395,0,16,384,'You have received an offer',1,'2020-06-03 13:00:38',3),
(396,0,16,384,'You have received an offer',1,'2020-06-03 13:00:38',3),
(397,0,16,384,'You have received an offer',1,'2020-06-03 13:00:38',3),
(398,0,139,374,'Your project has been moved in to Dispute',1,'2020-06-04 04:51:18',2),
(399,0,16,379,'Your project has been moved in to Dispute',1,'2020-06-03 15:44:18',2),
(400,0,16,384,'You have received an offer',1,'2020-06-03 15:50:53',3),
(401,0,16,384,'You have received an offer',1,'2020-06-03 15:50:53',3),
(402,0,16,384,'You have received an offer',1,'2020-06-03 15:50:53',3),
(403,0,16,385,'You have received an offer',1,'2020-06-03 15:50:53',3),
(404,0,16,386,'You have received an offer',1,'2020-06-03 15:50:53',3),
(405,0,12,386,'Your offer has been accepted',1,'2020-06-03 15:09:50',3),
(406,0,12,386,'Your payment has been submitted to Admin',1,'2020-06-03 15:10:24',1),
(407,0,16,386,'Your payment has been done',1,'2020-06-03 15:34:32',1),
(408,0,16,386,'Your project has been moved in to delivered',1,'2020-06-03 15:44:18',2),
(409,0,12,0,'Review: goid',0,'2020-06-03 15:18:25',5),
(410,0,12,386,'A request to release your payment has been sent  to Admin',1,'2020-06-03 15:18:50',1),
(411,0,16,386,'Your have project is moved to completed',1,'2020-06-03 15:44:18',2),
(412,0,12,0,'Helo',0,'2020-06-03 15:25:09',4),
(413,0,12,0,'hi this is hello',0,'2020-06-03 15:25:30',4),
(414,0,12,0,'hi roshi',0,'2020-06-03 15:26:00',4),
(415,0,12,385,'Your offer has been accepted',0,'2020-06-03 15:36:09',3),
(416,0,12,385,'Your payment has been submitted to Admin',1,'2020-06-03 17:55:45',1),
(417,0,16,385,'Your payment has been done',0,'2020-06-03 15:36:09',1),
(418,0,16,385,'Your project has been moved in to delivered',1,'2020-06-03 15:44:18',2),
(419,0,12,370,'Your project has been moved in to Dispute',0,'2020-06-04 04:53:22',2),
(420,0,12,370,'Your project has been moved in to Dispute',0,'2020-06-04 04:53:29',2),
(421,0,12,366,'Your project has been moved in to Dispute',0,'2020-06-04 04:54:39',2),
(422,0,12,366,'Your project has been moved in to Dispute',0,'2020-06-04 04:54:46',2),
(423,0,12,0,'Review: good job',0,'2020-06-05 12:36:16',5),
(424,0,12,385,'A request to release your payment has been sent  to Admin',0,'2020-06-05 12:36:25',1),
(425,0,16,385,'Your have project is moved to completed',0,'2020-06-05 12:36:25',2),
(426,0,16,383,'Your project has been moved in to Dispute',0,'2020-06-15 13:09:10',2),
(427,0,16,0,'yes',0,'2020-06-19 10:51:43',4),
(428,0,145,384,'Your offer has been accepted',0,'2020-06-23 09:41:03',3),
(429,0,145,384,'Your payment has been submitted to Admin',0,'2020-06-23 09:41:03',1),
(430,0,16,384,'Your payment has been done',0,'2020-06-23 09:41:03',1),
(431,0,12,0,'Review: good',0,'2020-06-26 08:59:33',5),
(432,0,12,0,'Review: goodt',0,'2020-06-26 09:00:53',5),
(433,0,12,0,'Review: hhsk',0,'2020-06-26 09:01:25',5),
(435,0,12,388,'Your payment has been submitted to Admin',0,'2020-06-29 08:18:14',1),
(436,0,147,388,'Your payment has been done',0,'2020-06-29 08:18:14',1),
(437,0,147,388,'Your project has been moved in to delivered',0,'2020-06-29 09:21:45',2),
(438,0,147,388,'Your project has been moved in to delivered',0,'2020-06-29 09:24:24',2),
(439,0,152,391,'You have received an offer',1,'2020-06-30 04:54:43',3),
(440,0,152,391,'You have received an offer',1,'2020-06-30 04:54:43',3),
(441,0,151,391,'Your offer has been accepted',1,'2020-06-30 05:00:24',3),
(442,0,151,391,'Your payment has been submitted to Admin',1,'2020-06-30 05:00:16',1),
(443,0,152,391,'Your payment has been done',1,'2020-06-30 04:59:45',1),
(444,0,152,391,'Your project has been moved in to delivered',1,'2020-06-30 05:01:08',2),
(445,0,152,391,'Your project has been moved in to delivered',1,'2020-06-30 05:08:01',2),
(446,0,152,391,'Your project has been moved in to delivered',1,'2020-06-30 05:08:01',2),
(447,0,152,391,'Your project has been moved in to delivered',1,'2020-06-30 05:08:01',2),
(448,0,152,391,'Your project has been moved in to delivered',1,'2020-06-30 05:08:01',2),
(449,0,151,0,'Review: Good ',1,'2020-06-30 05:20:44',5),
(450,0,151,0,'Review: Ueje',1,'2020-06-30 05:20:44',5),
(451,0,151,391,'A request to release your payment has been sent  to Admin',1,'2020-06-30 05:20:33',1),
(452,0,152,391,'Your have project is moved to completed',1,'2020-06-30 05:08:01',2),
(453,0,151,392,'You have received an offer',1,'2020-06-30 05:20:39',3),
(454,0,152,392,'Your offer has been accepted',1,'2020-06-30 05:11:09',3),
(455,0,152,392,'Your payment has been submitted to Admin',1,'2020-06-30 05:11:23',1),
(456,0,151,392,'Your payment has been done',1,'2020-06-30 05:20:33',1),
(457,0,151,390,'You have received an offer',1,'2020-06-30 05:20:39',3),
(458,0,152,390,'Your offer has been accepted',1,'2020-06-30 05:24:49',3),
(459,0,152,390,'Your payment has been submitted to Admin',1,'2020-06-30 05:24:51',1),
(460,0,151,390,'Your payment has been done',1,'2020-06-30 05:20:33',1),
(461,0,151,392,'Your project has been moved in to Dispute',1,'2020-06-30 05:20:29',2),
(462,0,151,390,'Your project has been moved in to delivered',0,'2020-06-30 05:21:34',2),
(463,0,151,390,'Your project has been moved in to Dispute',0,'2020-06-30 05:22:14',2),
(464,0,151,396,'You have received an offer',0,'2020-07-03 12:43:29',3),
(465,0,152,397,'You have received an offer',0,'2020-07-03 12:48:23',3),
(466,0,152,397,'You have received an offer',0,'2020-07-03 12:48:44',3),
(467,0,151,397,'Your offer has been accepted',0,'2020-07-03 12:51:15',3),
(468,0,151,397,'Your payment has been submitted to Admin',0,'2020-07-03 12:51:15',1),
(469,0,152,397,'Your payment has been done',0,'2020-07-03 12:51:16',1),
(470,0,152,397,'Your project has been moved in to delivered',0,'2020-07-03 12:57:16',2),
(471,0,151,0,'Review: Chwiya ',0,'2020-07-03 12:58:10',5),
(472,0,151,397,'A request to release your payment has been sent  to Admin',0,'2020-07-03 12:58:15',1),
(473,0,152,397,'Your have project is moved to completed',0,'2020-07-03 12:58:15',2),
(474,0,151,398,'You have received an offer',0,'2020-07-05 07:39:39',3),
(475,0,151,398,'You have received an offer',0,'2020-07-05 07:40:01',3),
(476,0,36,398,'Your offer has been accepted',0,'2020-07-05 07:42:42',3),
(477,0,36,398,'Your payment has been submitted to Admin',0,'2020-07-05 07:42:42',1),
(478,0,151,398,'Your payment has been done',0,'2020-07-05 07:42:42',1),
(479,0,151,398,'Your project has been moved in to delivered',0,'2020-07-05 07:44:04',2),
(480,0,36,0,'Review: Hhgg',0,'2020-07-05 07:45:03',5),
(481,0,36,398,'A request to release your payment has been sent  to Admin',0,'2020-07-05 07:45:07',1),
(482,0,151,398,'Your have project is moved to completed',0,'2020-07-05 07:45:07',2),
(483,0,16,399,'You have received an offer',0,'2020-07-08 12:26:58',3),
(484,0,16,399,'You have received an offer',0,'2020-07-08 13:18:35',3),
(485,0,153,399,'Your offer has been accepted',0,'2020-07-08 14:19:29',3),
(486,0,153,399,'Your payment has been submitted to Admin',0,'2020-07-08 14:19:29',1),
(487,0,16,399,'Your payment has been done',0,'2020-07-08 14:19:29',1),
(488,0,16,400,'You have received an offer',0,'2020-07-08 15:24:54',3),
(489,0,16,400,'You have received an offer',0,'2020-07-08 15:27:10',3),
(490,0,16,399,'Your project has been moved in to delivered',0,'2020-07-08 17:06:01',2),
(491,0,153,0,'Review: good',0,'2020-07-08 17:06:55',5),
(492,0,153,399,'A request to release your payment has been sent  to Admin',0,'2020-07-08 17:07:04',1),
(493,0,16,399,'Your have project is moved to completed',0,'2020-07-08 17:07:04',2),
(494,0,12,0,'Your offer has been accepted',0,'2020-07-08 17:31:45',3),
(495,0,12,0,'Your payment has been submitted to Admin',0,'2020-07-08 17:31:45',1),
(496,0,16,0,'Your payment has been done',0,'2020-07-08 17:31:45',1),
(497,0,16,0,'Your offer has been accepted',0,'2020-07-08 17:35:04',3),
(498,0,16,0,'Your payment has been submitted to Admin',0,'2020-07-08 17:35:04',1),
(499,0,153,0,'Your payment has been done',0,'2020-07-08 17:35:04',1),
(500,0,16,0,'Your offer has been accepted',0,'2020-07-08 17:39:30',3),
(501,0,16,0,'Your payment has been submitted to Admin',0,'2020-07-08 17:39:30',1),
(502,0,153,0,'Your payment has been done',0,'2020-07-08 17:39:30',1),
(503,0,0,0,'asdfasdf',0,'2020-10-20 17:02:32',4),
(504,0,0,0,'asdfasdfasdf',0,'2020-10-20 17:04:19',4),
(505,0,0,0,'aasdfasdf',0,'2020-10-20 17:06:52',4),
(506,0,0,0,'asdfasdfasdf',0,'2020-10-20 17:08:03',4),
(507,0,0,0,'asdfasdfasdf',0,'2020-10-20 17:08:24',4),
(508,0,0,0,'asdfas',0,'2020-10-20 17:32:39',4),
(509,0,0,0,'asdfasd',0,'2020-10-20 17:32:41',4),
(510,0,0,0,'asdfasdf',0,'2020-10-20 17:37:56',4),
(511,0,0,0,'adgsdfg',0,'2020-10-20 17:38:00',4),
(512,0,0,0,'asdfasdf',0,'2020-10-20 17:38:30',4),
(513,0,0,0,'asdfas',0,'2020-10-20 17:41:06',4),
(514,0,0,0,'asdfasdfasdfasdfasdfasdfasdfasdfasdfasdf',0,'2020-10-20 17:41:13',4),
(515,0,0,0,'asdfasdf',0,'2020-10-20 17:42:16',4),
(516,0,0,0,'asdfasdf',0,'2020-10-20 17:42:18',4),
(517,0,0,0,'asdfasd',0,'2020-10-20 17:43:44',4),
(518,0,0,0,'asdfasdfasdfasdf',0,'2020-10-20 17:43:46',4),
(519,0,0,0,'asdfasdfasfasdfasd',0,'2020-10-20 17:43:50',4),
(520,0,0,0,'asdfasdf',0,'2020-10-20 18:36:21',4),
(521,0,0,0,'fasdfasdfasdfasdfasdf',0,'2020-10-20 18:53:47',4),
(522,0,0,0,'dsfsd',0,'2020-10-20 19:00:13',4),
(523,0,0,0,'asdfasdf',0,'2020-10-20 19:06:19',4),
(524,0,0,0,'asdfasdfasdf',0,'2020-10-20 19:06:21',4),
(525,0,0,0,'Hello',0,'2020-10-20 19:06:24',4),
(526,0,0,0,'I am here',0,'2020-10-20 19:06:28',4),
(527,0,0,0,'asdfasdfasdfasdf',0,'2020-10-20 19:06:57',4),
(528,0,0,0,'asdf',0,'2020-10-20 19:14:00',4),
(529,0,0,0,'asdfsdf',0,'2020-10-20 19:14:03',4),
(530,0,0,0,'NULL',0,'2020-10-20 20:28:03',4),
(531,0,0,0,'NULL',0,'2020-10-20 20:29:29',4),
(532,0,0,0,'NULL',0,'2020-10-20 20:36:50',4),
(533,0,0,0,'NULL',0,'2020-10-20 20:37:36',4),
(534,0,0,0,'NULL',0,'2020-10-20 20:40:54',4),
(535,0,0,0,'NULL',0,'2020-10-20 20:46:27',4),
(536,0,0,0,'NULL',0,'2020-10-20 20:48:11',4),
(537,0,0,0,'hi',0,'2020-10-20 21:02:09',4),
(538,0,0,0,'are you here?',0,'2020-10-20 21:02:14',4),
(539,0,0,0,'hey',0,'2020-10-20 21:02:18',4),
(540,0,0,0,'hello',0,'2020-10-20 21:02:30',4),
(541,0,0,0,'hi',0,'2020-10-20 21:02:34',4),
(542,0,0,0,'hi',0,'2020-10-20 21:02:52',4),
(543,0,0,0,'hey',0,'2020-10-20 21:02:59',4),
(544,0,0,0,'Hi',0,'2020-10-20 21:04:58',4),
(545,0,0,0,'hey',0,'2020-10-20 21:46:13',4),
(546,0,0,0,'hi',0,'2020-10-20 21:46:15',4),
(547,0,0,0,'hi',0,'2020-10-20 22:01:40',4),
(548,0,0,0,'hello',0,'2020-10-20 22:02:10',4),
(549,0,0,0,'hello',0,'2020-10-20 23:49:43',4),
(550,0,0,0,'HI',0,'2020-10-20 23:49:50',4),
(551,0,0,0,'Hi',0,'2020-10-21 00:11:17',4),
(552,0,0,0,'sdfasdf',0,'2020-10-21 00:12:12',4),
(553,0,0,0,'asdfasdf',0,'2020-10-21 00:12:14',4),
(554,0,0,0,'asfasdf',0,'2020-10-21 00:12:17',4),
(555,0,0,0,'asfasdf',0,'2020-10-21 00:12:19',4),
(556,0,0,0,'sdf',0,'2020-10-21 00:14:24',4),
(557,0,0,0,'asdfasfd',0,'2020-10-21 00:14:26',4),
(558,0,0,0,'sfasdf',0,'2020-10-21 00:14:27',4),
(559,0,0,0,'asdfasdf',0,'2020-10-21 00:14:57',4),
(560,0,0,0,'asdfasdfasdf',0,'2020-10-21 00:15:00',4),
(561,0,0,0,'asdfasdf',0,'2020-10-21 00:31:01',4),
(562,0,0,0,'asdfasdf',0,'2020-10-21 00:31:03',4),
(563,0,0,0,'asdfsdf',0,'2020-10-21 00:31:05',4),
(564,0,0,0,'hi',0,'2020-10-21 00:32:35',4),
(565,0,0,0,'how are you',0,'2020-10-21 00:32:39',4),
(566,0,0,0,'fine',0,'2020-10-21 00:32:47',4),
(567,0,0,0,'afasdfasd',0,'2020-10-21 00:40:54',4),
(568,0,0,0,'hello?',0,'2020-10-21 01:30:00',4),
(569,0,0,0,'Can you really help me?',0,'2020-10-21 18:28:17',4);

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
) ENGINE=InnoDB AUTO_INCREMENT=244 DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM AUTO_INCREMENT=152 DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

/*Data for the table `transaction` */

/*Table structure for table `user_review` */

DROP TABLE IF EXISTS `user_review`;

CREATE TABLE `user_review` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `by_user_id` int(100) NOT NULL,
  `to_user_id` int(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

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
  `Total_earned_amount` int(100) NOT NULL,
  `Current_Balance` int(100) NOT NULL,
  `Wallet_withdraw_status` int(5) NOT NULL,
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
(162,'hello','25f9e794323b453885f5181f1b624d0b','client',0,1,0,'','hello','123','hello@sample.com','','','','hi.png','','','','','','','','','Canada','','','','',0,0,0,'','2','Math','asdfasdf','ererer','ee',0,'','','','',0,0,'','ljaslkdjfklajsdflkjasdfasdf','','2020-10-22 18:10:55','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
(163,'hi','25f9e794323b453885f5181f1b624d0b','client',0,0,0,'','','','hi@sample.com','','','','me1.png','','','','','','','','','','','','','',0,0,0,'','','','','','aa',0,'','','','',0,0,'','','','2020-10-22 18:10:58','','','','','0',0,0,'','','0000-00-00 00:00:00','facebook','',''),
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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `withdrawpayment` */

insert  into `withdrawpayment`(`id`,`mission_id`,`mission_amount`,`offer_amount`,`amount_to_pay`,`pay_status`,`date_created`,`date_of_pay`,`date_updated`,`mission_status`,`employer_id`,`emplyee_id`,`transection_id`) values 
(2,386,'120','100','100',1,'2020-06-05 09:43:26','2020-06-05 09:44:50','2020-06-06 09:45:12',3,12,16,''),
(3,385,'350','350','318.5',1,'2020-06-05 09:36:25','2020-06-05 11:35:30','2020-06-05 14:35:30',3,16,12,'dafdfsfsa'),
(4,388,'650','','500',1,'0000-00-00 00:00:00','2020-06-23 12:44:31','2020-06-23 15:44:31',2,147,0,''),
(5,388,'650','','Amount',2,'0000-00-00 00:00:00','2020-06-23 14:51:40','2020-06-23 17:51:40',1,147,0,''),
(6,388,'650','','78',2,'2020-06-29 06:50:57','2020-06-29 06:50:57','2020-06-29 09:50:57',2,147,0,''),
(7,391,'200','150','136.5',0,'2020-06-30 02:07:17','0000-00-00 00:00:00','2020-06-30 05:07:17',3,152,151,''),
(8,397,'356','356','323.96',0,'2020-07-03 09:58:15','0000-00-00 00:00:00','2020-07-03 12:58:15',3,152,151,''),
(9,398,'772','772','702.52',0,'2020-07-05 04:45:07','0000-00-00 00:00:00','2020-07-05 07:45:07',3,151,36,''),
(10,399,'123','100','91',0,'2020-07-08 14:07:04','0000-00-00 00:00:00','2020-07-08 17:07:04',3,16,153,''),
(11,14,'200','','24',2,'2020-10-22 00:11:52','2020-10-22 00:11:52','2020-10-22 01:11:52',2,163,0,'');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
