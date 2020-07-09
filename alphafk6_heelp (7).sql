-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2020 at 11:00 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alphafk6_heelp`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `date_created`, `date_updated`) VALUES
(1, 'gfdf', 'fgfgdgfgfdgfdgfd', '2020-03-19 00:00:00', '2020-03-19 14:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `about_content`
--

CREATE TABLE `about_content` (
  `id` int(11) NOT NULL,
  `about_title` varchar(150) NOT NULL,
  `about_image` varchar(300) NOT NULL,
  `about_content` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_content`
--

INSERT INTO `about_content` (`id`, `about_title`, `about_image`, `about_content`) VALUES
(1, 'Our Approach', 'concept12.png', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 1rem; color: #212529; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, \'Helvetica Neue\', Arial, \'Noto Sans\', sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\', \'Noto Color Emoji\'; font-size: 16px; background-color: #f9f9f9;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span><span style=\"vertical-align: inherit;\">Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled. </span><span style=\"vertical-align: inherit;\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </span>&lt;s');

-- --------------------------------------------------------

--
-- Table structure for table `about_team`
--

CREATE TABLE `about_team` (
  `id` int(11) NOT NULL,
  `team_title` varchar(30) NOT NULL,
  `team_image` varchar(100) NOT NULL,
  `team_content` varchar(500) NOT NULL,
  `team_fb` varchar(50) NOT NULL,
  `team_insta` varchar(50) NOT NULL,
  `team_whatsp` varchar(50) NOT NULL,
  `team_twitter` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about_team`
--

INSERT INTO `about_team` (`id`, `team_title`, `team_image`, `team_content`, `team_fb`, `team_insta`, `team_whatsp`, `team_twitter`) VALUES
(1, 'title1', 'user.png', 'Lorem Ipsum is simply dummy text of the printing a...', 'alphawizz.com', 'alphawizz.com', 'alphawizz.com', 'alphawizz.com'),
(2, 'title2', 'user3.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever sinc.', 'alphawizz.com', 'alphawizz.com', 'alphawizz.com', 'alphawizz.com'),
(3, 'title3', 'user.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever sinc.', 'alphawizz.com', 'alphawizz.com', 'alphawizz.com', 'alphawizz.com'),
(4, 'title4', 'user.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever sinc.', 'alphawizz.com', 'alphawizz.com', 'alphawizz.com', 'alphawizz.com');

-- --------------------------------------------------------

--
-- Table structure for table `add_discuss`
--

CREATE TABLE `add_discuss` (
  `id` int(25) NOT NULL,
  `reciver_id` int(25) NOT NULL,
  `sender_id` int(25) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_discuss`
--

INSERT INTO `add_discuss` (`id`, `reciver_id`, `sender_id`, `date_created`) VALUES
(1, 86, 1, '2020-04-16 15:07:35'),
(2, 105, 104, '2020-04-16 15:42:19'),
(3, 107, 105, '2020-04-16 15:56:01'),
(4, 104, 106, '2020-04-16 15:58:07'),
(6, 16, 107, '2020-04-16 16:51:45'),
(7, 104, 106, '2020-04-16 17:22:31'),
(8, 104, 109, '2020-04-16 17:55:44'),
(9, 107, 104, '2020-04-16 19:10:25'),
(10, 109, 110, '2020-04-16 20:46:17'),
(11, 112, 111, '2020-04-16 22:43:18'),
(12, 112, 111, '2020-04-16 22:43:24'),
(13, 104, 110, '2020-04-17 11:46:19'),
(14, 16, 115, '2020-04-20 14:48:21'),
(15, 16, 116, '2020-04-20 19:00:58'),
(16, 116, 119, '2020-04-24 20:59:16'),
(17, 119, 116, '2020-04-24 21:02:55'),
(18, 119, 116, '2020-04-24 21:09:01'),
(19, 12, 16, '2020-04-25 13:29:45'),
(20, 12, 16, '2020-04-27 12:48:42'),
(21, 16, 121, '2020-04-28 02:31:25'),
(22, 43, 121, '2020-04-28 02:31:54'),
(23, 16, 116, '2020-04-28 11:30:51'),
(24, 139, 16, '2020-05-04 13:58:11'),
(25, 139, 16, '2020-05-04 13:58:18'),
(26, 139, 16, '2020-05-04 13:58:24'),
(27, 139, 16, '2020-05-11 09:23:31'),
(28, 139, 16, '2020-05-12 12:43:00'),
(29, 139, 16, '2020-05-12 12:43:08'),
(30, 16, 139, '2020-05-15 22:01:57'),
(31, 16, 139, '2020-05-15 22:02:09'),
(32, 16, 139, '2020-06-04 02:00:02'),
(33, 152, 151, '2020-06-30 01:49:16'),
(34, 151, 36, '2020-07-05 04:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE `card_details` (
  `id` int(11) NOT NULL,
  `card_no` bigint(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(25) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expiry` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`id`, `card_no`, `date_created`, `date_updated`, `user_id`, `name`, `expiry`) VALUES
(2, 1234567891, '2020-04-18 18:20:28', '2020-04-18 18:20:28', 86, 'sa asfsafs', '12/22'),
(3, 7979, '2020-04-18 18:29:24', '2020-04-18 18:29:24', 109, 'mukesh keshari ', '12/45'),
(4, 2147483647, '2020-04-18 17:59:36', '2020-04-18 17:59:36', 86, 'manash', ''),
(5, 1234567890, '2020-04-18 11:17:11', '2020-04-18 11:17:11', 86, '', ''),
(6, 1234567890, '2020-04-18 11:17:25', '2020-04-18 11:17:25', 86, 'sa asfsafs', ''),
(7, 1234567890, '2020-04-18 12:32:49', '2020-04-18 12:32:49', 86, 'sa asfsafs', ''),
(8, 1234567890, '2020-04-18 13:45:45', '2020-04-18 13:45:45', 86, '', ''),
(9, 1234567890, '2020-04-18 13:46:56', '2020-04-18 13:46:56', 86, 'sa asfsafs', ''),
(10, 1234567890, '2020-04-18 13:49:48', '2020-04-18 13:49:48', 86, '', '12/23'),
(11, 1234567890, '2020-04-18 14:14:29', '2020-04-18 14:14:29', 86, 'sa asfsafs', '12'),
(12, 1234567890, '2020-04-18 18:15:12', '2020-04-18 18:15:12', 86, '', '12/23'),
(13, 8779, '2020-04-18 18:28:53', '2020-04-18 18:28:53', 109, 'manash', '12/12'),
(14, 1234567890, '2020-04-18 18:21:31', '2020-04-18 18:21:31', 86, 'sa asfsafs', '12'),
(15, 1235, '2020-04-18 21:09:53', '2020-04-18 21:09:53', 113, 'el hdhdh bdh', '44/56'),
(16, 8585, '2020-04-18 21:10:21', '2020-04-18 21:10:21', 113, 'gjhbjbj', '12/22'),
(17, 8585, '2020-04-18 21:10:28', '2020-04-18 21:10:28', 113, 'gjhbjbj', '12/22'),
(18, 8555, '2020-04-18 21:11:44', '2020-04-18 21:11:44', 113, 'vkvhhhh', '33/33'),
(19, 5122, '2020-04-18 21:12:46', '2020-04-18 21:12:46', 113, 'vkvhhhh', '33/33'),
(20, 8588, '2020-04-20 12:05:13', '2020-04-20 12:05:13', 12, 'sdfsdfsdfsdfsdf', '22/22'),
(21, 8588, '2020-04-20 14:36:48', '2020-04-20 14:36:48', 12, 'sdfsdfsdfsdfsdf', '22/22'),
(22, 4545, '2020-04-20 18:06:09', '2020-04-20 18:06:09', 116, 'jejdudusu', '55/55'),
(23, 4545, '2020-04-20 18:06:20', '2020-04-20 18:06:20', 116, 'jejdudusu', '55/55'),
(24, 4242, '2020-04-20 21:28:42', '2020-04-20 21:28:42', 116, 'cus_H8HCuVZnYXFWSV', '52/63'),
(25, 4242, '2020-04-20 21:28:58', '2020-04-20 21:28:58', 116, 'yjij tguj', '52/63'),
(26, 411111111111111111, '2020-06-24 11:34:55', '2020-06-24 11:34:55', 16, '', '12/22'),
(27, 4222222222221, '2020-06-24 11:35:55', '2020-06-24 11:35:55', 16, '', '12/23'),
(28, 16, '2020-06-24 11:38:22', '2020-06-24 11:38:22', 0, '', '12/25'),
(29, 1321323213213213, '2020-06-24 11:38:55', '2020-06-24 11:38:55', 16, '', '12/24'),
(30, 4111111111111111, '2020-06-30 02:56:45', '2020-06-30 02:56:45', 4, '', '12/22');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `attachment_name` text NOT NULL,
  `file_ext` text NOT NULL,
  `mime_type` text NOT NULL,
  `message_date_time` text NOT NULL,
  `ip_address` text NOT NULL,
  `project_id` int(255) NOT NULL,
  `read_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sender_id`, `receiver_id`, `message`, `attachment_name`, `file_ext`, `mime_type`, `message_date_time`, `ip_address`, `project_id`, `read_status`) VALUES
(30, 184, 197, 'hi jon please send my project file report', '', '', '', '2018-06-13 17:28:40', '::1', 0, 0),
(31, 197, 184, 'ok', '', '', '', '2018-06-13 17:28:45', '::1', 0, 0),
(32, 197, 184, 'wait..', '', '', '', '2018-06-13 17:28:47', '::1', 0, 0),
(33, 197, 184, 'NULL', 'Proejct_report_presenation.pptx', '.pptx', 'application/vnd.openxmlformats-officedocument.presentationml.presentation', '2018-06-13 17:29:11', '::1', 0, 0),
(34, 184, 197, 'ok thanks', '', '', '', '2018-06-13 17:30:21', '::1', 0, 0),
(35, 197, 184, 'open the file', '', '', '', '2018-06-13 17:30:34', '::1', 0, 0),
(36, 184, 197, 'please send images', '', '', '', '2018-06-13 17:31:22', '::1', 0, 0),
(37, 197, 184, 'ok', '', '', '', '2018-06-13 17:31:27', '::1', 0, 0),
(38, 197, 184, 'wait bro..', '', '', '', '2018-06-13 17:31:33', '::1', 0, 0),
(39, 197, 184, 'NULL', '21_preview.png', '.png', 'image/png', '2018-06-13 17:31:43', '::1', 0, 0),
(40, 197, 184, 'you got it', '', '', '', '2018-06-13 17:32:05', '::1', 0, 0),
(41, 184, 197, 'yes', '', '', '', '2018-06-13 17:32:10', '::1', 0, 0),
(42, 184, 197, 'thanks', '', '', '', '2018-06-13 17:32:16', '::1', 0, 0),
(43, 184, 197, 'some pdf file send', '', '', '', '2018-06-13 17:32:33', '::1', 0, 0),
(44, 197, 184, 'NULL', 'Invoice.pdf', '.pdf', 'application/pdf', '2018-06-13 17:33:03', '::1', 0, 0),
(45, 127, 196, 'test', '', '', '', '2020-04-06 11:26:50', '::1', 0, 0),
(46, 127, 196, 'hi', '', '', '', '2020-04-06 11:28:22', '::1', 0, 0),
(47, 196, 184, 'hi', '', '', '', '2020-04-06 11:29:40', '::1', 0, 0),
(48, 196, 184, 'hello', '', '', '', '2020-04-06 11:29:54', '::1', 0, 0),
(49, 184, 196, 'how are yyou', '', '', '', '2020-04-06 11:30:13', '::1', 0, 0),
(50, 196, 184, 'I am ggood', '', '', '', '2020-04-06 11:30:27', '::1', 0, 0),
(51, 18, 2, 'sdsdasd', '', '', '', '2020-04-06 13:46:30', '122.175.175.203', 0, 0),
(52, 18, 2, 'adfassadsd dsasadsad', '', '', '', '2020-04-06 14:26:52', '', 0, 0),
(53, 18, 2, 'adfassadsd dsasadsad', '', '', '', '2020-04-06 14:29:30', '', 0, 0),
(54, 2, 18, 'adfassadsd dsasadsad', '', '', '', '2020-04-06 14:38:43', '', 0, 0),
(55, 18, 2, 'hi', '', '', '', '2020-04-07 05:41:58', '122.175.175.203', 0, 0),
(56, 2, 18, 'adfassadsd dsasadsad', '', '', '', '2020-04-07 05:42:43', '', 0, 0),
(57, 18, 1, 'ada', '', '', '', '2020-04-07 07:54:31', '47.247.240.121', 0, 0),
(58, 18, 1, 'sad', '', '', '', '2020-04-07 07:54:34', '47.247.240.121', 0, 0),
(59, 18, 4, 'sdf', '', '', '', '2020-04-07 08:00:56', '122.175.175.203', 0, 0),
(60, 2, 18, 'adfassadsd dsasadsad', '', '', '', '2020-04-07 11:23:19', '', 0, 0),
(61, 18, 59, 'test', '', '', '', '2020-04-07 13:12:19', '122.170.193.148', 0, 0),
(62, 59, 18, 'adfassadsd dsasadsad', '', '', '', '2020-04-07 13:50:16', '', 0, 0),
(63, 59, 18, 'adfassadsd dsasadsad', '', '', '', '2020-04-07 13:56:17', '', 0, 0),
(64, 18, 59, 'hey', '', '', '', '2020-04-07 13:56:47', '122.170.193.148', 0, 0),
(65, 59, 18, 'hi How are you?', '', '', '', '2020-04-07 13:57:04', '', 0, 0),
(66, 59, 18, 'hi', '', '', '', '2020-04-07 14:16:12', '', 0, 0),
(67, 59, 18, 'hi', '', '', '', '2020-04-07 14:16:12', '', 0, 0),
(68, 59, 18, 'hi', '', '', '', '2020-04-07 14:16:17', '', 0, 0),
(69, 59, 18, 'hi', '', '', '', '2020-04-07 14:16:20', '', 0, 0),
(70, 59, 18, 'fgfdgfdfdg', '', '', '', '2020-04-07 14:17:17', '', 0, 0),
(71, 59, 18, 'fgfdgfdfdg', '', '', '', '2020-04-07 14:17:26', '', 0, 0),
(72, 59, 18, 'hi', '', '', '', '2020-04-07 14:21:20', '', 0, 0),
(73, 59, 18, 'I AM TESTING', '', '', '', '2020-04-07 17:10:14', '', 0, 0),
(74, 59, 18, 'Hello', '', '', '', '2020-04-07 17:38:40', '', 0, 0),
(75, 2, 18, 'hi How are you?', '', '', '', '2020-04-08 04:55:11', '', 0, 0),
(76, 57, 18, 'hi', '', '', '', '2020-04-08 08:00:56', '', 0, 0),
(77, 57, 18, 'hello I am testing  it', '', '', '', '2020-04-08 08:01:09', '', 0, 0),
(78, 18, 15, 'hi', '', '', '', '2020-04-10 19:18:09', '80.215.246.55', 0, 0),
(79, 12, 18, 'J3j3j', '', '', '', '2020-04-11 01:42:00', '', 0, 0),
(80, 0, 18, '', '', '', '', '2020-04-11 01:42:38', '', 0, 0),
(81, 0, 18, '', '', '', '', '2020-04-11 01:42:41', '', 0, 0),
(82, 0, 18, '', '', '', '', '2020-04-11 01:43:19', '', 0, 0),
(83, 0, 18, '', '', '', '', '2020-04-11 01:43:27', '', 0, 0),
(84, 0, 18, 'Yhujhuju', '', '', '', '2020-04-11 01:43:50', '', 0, 0),
(85, 0, 18, 'Yhujhuju', '', '', '', '2020-04-11 01:43:53', '', 0, 0),
(86, 0, 18, 'Yhujhuju', '', '', '', '2020-04-11 01:43:54', '', 0, 0),
(87, 86, 18, 'hi', '', '', '', '2020-04-13 11:21:20', '', 0, 0),
(88, 18, 86, 'hey', '', '', '', '2020-04-13 11:21:43', '122.170.193.148', 0, 0),
(89, 86, 18, 'I have an issue', '', '', '', '2020-04-13 11:22:03', '', 0, 0),
(90, 18, 86, 'ok please let me know', '', '', '', '2020-04-13 11:22:24', '122.170.193.148', 0, 0),
(91, 86, 18, 'k', '', '', '', '2020-04-13 11:22:49', '', 0, 0),
(92, 88, 18, 'Ueuz', '', '', '', '2020-04-13 13:39:32', '', 0, 0),
(93, 88, 18, 'Ihj', '', '', '', '2020-04-13 19:13:30', '', 0, 0),
(94, 0, 18, 'Nbj', '', '', '', '2020-04-13 19:13:43', '', 0, 0),
(95, 0, 18, 'Nbj', '', '', '', '2020-04-13 19:13:46', '', 0, 0),
(96, 0, 18, 'Ueueue', '', '', '', '2020-04-14 17:18:32', '', 0, 0),
(97, 0, 18, '', '', '', '', '2020-04-20 09:41:10', '', 0, 0),
(98, 0, 18, '', '', '', '', '2020-04-20 09:41:15', '', 0, 0),
(99, 0, 18, 'sdfsd', '', '', '', '2020-04-20 09:41:37', '', 0, 0),
(100, 16, 18, 'hi ', '', '', '', '2020-04-25 12:17:51', '', 0, 0),
(101, 4, 16, 'hi', '', '', '', '2020-04-25 12:21:40', '110.224.195.255', 0, 0),
(102, 16, 18, 'hello', '', '', '', '2020-04-25 12:22:23', '', 0, 0),
(103, 4, 12, 'hi', '', '', '', '2020-04-25 12:26:26', '110.224.195.255', 0, 0),
(104, 4, 12, 'fgfg', '', '', '', '2020-04-25 12:26:54', '110.224.195.255', 0, 0),
(105, 4, 12, 'dfgfdgfgfdgfdgfdg', '', '', '', '2020-04-25 12:26:56', '110.224.195.255', 0, 0),
(106, 4, 12, 'dfgfgfdgfdg', '', '', '', '2020-04-25 12:26:58', '110.224.195.255', 0, 0),
(107, 4, 12, 'dfgfdgfd', '', '', '', '2020-04-25 12:26:59', '110.224.195.255', 0, 0),
(108, 4, 12, 'fdgfdgfgfg', '', '', '', '2020-04-25 12:27:01', '110.224.195.255', 0, 0),
(109, 12, 18, 'hey', '', '', '', '2020-04-25 12:28:02', '', 0, 0),
(110, 12, 4, 'hi', '', '', '', '2020-04-25 13:01:34', '', 0, 0),
(111, 16, 4, 'I AMD sefjsdlkfjsdlkjdlkdjdlkdjflkjsdlksjfsdf', '', '', '', '2020-04-25 13:03:15', '', 0, 0),
(112, 16, 4, 'dfsdfdsfsfdsfs', '', '', '', '2020-04-25 13:03:21', '', 0, 0),
(113, 16, 4, 'dfddfsdf', '', '', '', '2020-04-25 13:03:33', '', 0, 0),
(114, 12, 4, 'hello', '', '', '', '2020-04-25 13:06:06', '', 0, 0),
(115, 4, 12, 'hey dear', '', '', '', '2020-04-25 13:06:18', '110.224.195.255', 0, 0),
(116, 12, 4, 'ok', '', '', '', '2020-04-25 13:06:43', '', 0, 0),
(117, 16, 4, 'dfsdfdfssf', '', '', '', '2020-04-25 13:07:31', '', 0, 0),
(118, 4, 16, 'hi vasim', '', '', '', '2020-04-25 13:08:16', '110.224.195.255', 0, 0),
(119, 16, 4, 'mail send karta hun\n', '', '', '', '2020-04-25 13:11:24', '', 0, 0),
(120, 4, 16, 'ha', '', '', '', '2020-04-25 13:12:21', '110.224.195.255', 0, 0),
(121, 4, 16, 'chala?', '', '', '', '2020-04-25 13:12:37', '110.224.195.255', 0, 0),
(122, 4, 16, 'again', '', '', '', '2020-04-25 13:13:06', '110.224.195.255', 0, 0),
(123, 4, 16, 'hi', '', '', '', '2020-04-25 13:13:21', '110.224.195.255', 0, 0),
(124, 4, 16, 'how are you', '', '', '', '2020-04-25 13:13:25', '110.224.195.255', 0, 0),
(125, 4, 16, 'stay home', '', '', '', '2020-04-25 13:13:30', '110.224.195.255', 0, 0),
(126, 4, 16, '\'is it fine', '', '', '', '2020-04-25 13:13:37', '110.224.195.255', 0, 0),
(127, 16, 4, 'I am', '', '', '', '2020-04-25 13:13:40', '', 0, 0),
(128, 4, 16, 'hey', '', '', '', '2020-04-25 13:13:52', '110.224.195.255', 0, 0),
(129, 16, 4, 'okay it is working\n', '', '', '', '2020-04-25 13:14:00', '', 0, 0),
(130, 4, 16, 'sdsadas', '', '', '', '2020-04-25 13:14:03', '110.224.195.255', 0, 0),
(131, 4, 16, 'fadsdfsa', '', '', '', '2020-04-25 13:14:06', '110.224.195.255', 0, 0),
(132, 4, 16, 'ok', '', '', '', '2020-04-25 13:14:14', '110.224.195.255', 0, 0),
(133, 16, 4, 'gfg', '', '', '', '2020-04-25 14:35:34', '', 0, 0),
(134, 16, 4, 'gf', '', '', '', '2020-04-25 14:35:43', '', 0, 0),
(135, 16, 4, 'dfsdfsfsd', '', '', '', '2020-04-25 16:22:34', '', 0, 0),
(136, 16, 4, 'sdfsdfdfsdfds', '', '', '', '2020-04-25 16:22:47', '', 0, 0),
(137, 16, 4, 'gfgf', '', '', '', '2020-04-25 16:23:24', '', 0, 0),
(138, 16, 4, 'dsff', '', '', '', '2020-04-25 16:26:08', '', 0, 0),
(139, 16, 4, 'fffffff', '', '', '', '2020-04-25 16:26:17', '', 0, 0),
(140, 16, 4, 'erer', '', '', '', '2020-04-25 16:27:34', '', 0, 0),
(141, 16, 4, 'ererererw', '', '', '', '2020-04-25 16:27:42', '', 331, 0),
(142, 12, 4, 'hi How are you?', '', '', '', '2020-04-27 13:35:22', '', 331, 0),
(143, 16, 4, 'hi How are you?', '', '', '', '2020-04-27 13:36:37', '', 331, 0),
(144, 16, 4, 'hi How are you?', '', '', '', '2020-04-27 13:36:44', '', 331, 0),
(145, 12, 4, 'hi How are you?', '', '', '', '2020-04-27 13:36:56', '', 331, 0),
(146, 4, 12, 'hey', '', '', '', '2020-04-27 14:11:07', '122.175.243.236', 0, 0),
(150, 4, 12, 'hee', '', '', '', '2020-04-27 14:20:07', '122.175.243.236', 331, 0),
(151, 4, 12, 'ddsds', '', '', '', '2020-04-27 14:21:44', '122.175.243.236', 331, 0),
(156, 16, 4, 'I am testing to it', '', '', '', '2020-04-27 15:01:20', '', 311, 0),
(157, 16, 4, 'testing is done', '', '', '', '2020-04-27 15:01:52', '', 314, 0),
(169, 16, 4, 'Hi\n', '', '', '', '2020-04-27 15:21:28', '', 311, 0),
(170, 4, 16, 'rrss', '', '', '', '2020-04-27 15:21:43', '122.175.243.236', 311, 0),
(171, 4, 16, 'hey', '', '', '', '2020-04-27 15:24:42', '122.175.243.236', 311, 0),
(172, 4, 16, 'helloss', '', '', '', '2020-04-27 15:26:37', '122.175.243.236', 311, 0),
(173, 4, 16, 'huuu', '', '', '', '2020-04-27 15:27:23', '122.175.243.236', 311, 0),
(174, 4, 16, 'jhkhkjh', '', '', '', '2020-04-27 15:28:12', '122.175.243.236', 311, 0),
(175, 16, 4, 'rtrtrt', '', '', '', '2020-04-27 15:54:02', '', 311, 0),
(176, 16, 4, 'trtet', '', '', '', '2020-04-27 15:54:11', '', 311, 0),
(177, 16, 4, 'hi', '', '', '', '2020-04-27 16:24:17', '', 325, 0),
(178, 16, 4, 'hhddfsdkjldskjfs', '', '', '', '2020-04-27 16:24:51', '', 324, 0),
(179, 16, 4, 'hi', '', '', '', '2020-04-27 16:26:05', '', 323, 0),
(180, 16, 4, 'fdgfdgfgdgdfg', '', '', '', '2020-04-27 18:09:04', '', 178, 0),
(181, 16, 4, 'gfdgffdgfdgfdgdgdgdg', '', '', '', '2020-04-27 18:09:10', '', 178, 0),
(182, 16, 4, 'gfdgfdgfdgdg', '', '', '', '2020-04-27 18:09:16', '', 178, 0),
(185, 16, 4, 'gfdgfdg', '', '', '', '2020-04-27 18:18:29', '', 328, 0),
(186, 16, 4, 'gfgfgg', '', '', '', '2020-04-27 18:18:32', '', 328, 0),
(187, 4, 16, 'hii', '', '', '', '2020-04-28 06:12:12', '150.242.12.155', 328, 0),
(193, 16, 4, 'sdsfsdf', '', '', '', '2020-05-01 13:53:07', '', 328, 0),
(194, 16, 4, 'sdfsdf', '', '', '', '2020-05-01 13:53:13', '', 328, 0),
(195, 16, 4, 'f', '', '', '', '2020-05-01 13:53:27', '', 328, 0),
(197, 16, 4, 'sfsdf', '', '', '', '2020-05-01 14:15:47', '', 328, 0),
(198, 16, 4, 'dfdgfd', '', '', '', '2020-05-01 14:15:52', '', 328, 0),
(200, 139, 4, 'Hi', '', '', '', '2020-05-02 05:36:43', '', 347, 0),
(201, 139, 4, 'Iuii', '', '', '', '2020-05-02 05:37:33', '', 347, 0),
(202, 139, 4, 'Jdkdkd', '', '', '', '2020-05-02 05:52:32', '', 347, 0),
(203, 139, 4, 'Jdjeje', '', '', '', '2020-05-02 05:52:37', '', 347, 0),
(208, 16, 4, 'h', '', '', '', '2020-05-02 10:31:30', '', 287, 0),
(209, 16, 4, 'jo', '', '', '', '2020-05-04 06:48:42', '', 294, 0),
(210, 16, 4, 'tttttttttttt', '', '', '', '2020-05-04 07:37:55', '', 177, 0),
(211, 16, 4, 'fsdthere', '', '', '', '2020-05-04 07:39:58', '', 343, 0),
(212, 16, 4, 'fsdthere', '', '', '', '2020-05-04 07:42:05', '', 343, 0),
(213, 16, 4, 'there', '', '', '', '2020-05-04 08:01:41', '', 345, 0),
(214, 16, 4, 'sfdfsdfsdfdsfsdfdsfsdfsdfsdfsdfsd', '', '', '', '2020-05-04 08:09:06', '', 335, 0),
(215, 16, 4, 'sfdfsdfsdfdsfsdfdsfsdfsdfsdfsdfsd', '', '', '', '2020-05-04 08:10:16', '', 335, 0),
(216, 16, 4, 'sfdfsdfsdfdsfsdfdsfsdfsdfsdfsdfsd', '', '', '', '2020-05-04 08:11:26', '', 345, 0),
(217, 16, 4, 'rrrtrt', '', '', '', '2020-05-04 08:11:39', '', 335, 0),
(218, 16, 4, 'rrrtrt', '', '', '', '2020-05-04 08:11:46', '', 345, 0),
(219, 16, 4, 'rrrtrt', '', '', '', '2020-05-04 08:11:49', '', 345, 0),
(220, 16, 4, 'sadsadsasad', '', '', '', '2020-05-04 09:05:11', '', 329, 0),
(221, 16, 4, 'sadsadsasad', '', '', '', '2020-05-04 09:05:24', '', 329, 0),
(222, 139, 4, 'Tyyyhy', '', '', '', '2020-05-04 15:11:05', '', 347, 0),
(223, 4, 136, 'Hi', '', '', '', '2020-05-06 07:11:08', '171.76.191.108', 0, 0),
(224, 4, 136, 'Hello', '', '', '', '2020-05-06 07:11:33', '171.76.191.108', 0, 0),
(225, 123, 4, 'C\'est mon litige ', '', '', '', '2020-05-09 18:26:42', '', 355, 0),
(226, 123, 4, 'C\'est mon litige ', '', '', '', '2020-05-09 18:26:55', '', 355, 0),
(227, 123, 4, 'C\'est mon litige ', '', '', '', '2020-05-09 18:27:07', '', 355, 0),
(228, 123, 4, 'C\'est mon litige ', '', '', '', '2020-05-09 18:27:15', '', 355, 0),
(229, 139, 4, 'hi', '', '', '', '2020-05-11 14:59:43', '', 355, 0),
(230, 139, 4, 'hello', '', '', '', '2020-05-11 14:59:52', '', 355, 0),
(231, 4, 115, 'hi', '', '', '', '2020-05-12 11:06:41', '182.70.216.90', 0, 0),
(232, 4, 16, 'hi', '', '', '', '2020-05-12 11:07:04', '182.70.216.90', 329, 0),
(233, 4, 115, 'hey', '', '', '', '2020-05-12 11:12:23', '182.70.216.90', 0, 0),
(234, 4, 115, 'ht', '', '', '', '2020-05-12 11:14:06', '182.70.216.90', 0, 0),
(235, 4, 115, 'ttt', '', '', '', '2020-05-12 11:15:26', '182.70.216.90', 0, 0),
(236, 16, 4, 'hzhz', '', '', '', '2020-05-12 11:19:07', '', 345, 0),
(237, 139, 4, 'when can we start', '', '', '', '2020-05-13 10:30:36', '', 365, 0),
(238, 4, 139, 'hey', '', '', '', '2020-05-13 10:32:36', '171.49.136.233', 365, 0),
(241, 139, 4, 'test', '', '', '', '2020-05-13 12:08:22', '', 375, 0),
(242, 139, 4, 'hey', '', '', '', '2020-05-13 12:08:30', '', 375, 0),
(243, 139, 4, 'hi', '', '', '', '2020-05-13 12:08:43', '', 375, 0),
(245, 16, 4, 'hi\n', '', '', '', '2020-05-13 12:15:18', '', 374, 0),
(246, 16, 4, 'heelloo', '', '', '', '2020-05-13 12:15:25', '', 374, 0),
(248, 16, 4, 'sdfsdsfsdsd', '', '', '', '2020-05-13 12:15:48', '', 373, 0),
(250, 16, 4, 'ggfdfgfgfg', '', '', '', '2020-05-13 12:16:47', '', 373, 0),
(251, 16, 4, 'fdgfddg', '', '', '', '2020-05-13 12:16:50', '', 373, 0),
(253, 16, 4, 'fdfdf', '', '', '', '2020-05-13 12:19:21', '', 372, 0),
(254, 16, 4, 'hisdfdf\n', '', '', '', '2020-05-13 12:29:55', '', 344, 0),
(255, 16, 4, 'fsdfdsdff', '', '', '', '2020-05-13 12:30:05', '', 344, 0),
(257, 123, 4, 'Ghikjhjkkkkkkk', '', '', '', '2020-05-13 22:34:27', '', 376, 0),
(258, 139, 4, 'Hi ', '', '', '', '2020-05-13 22:37:52', '', 376, 0),
(259, 139, 4, 'Heueuzu', '', '', '', '2020-05-13 22:39:43', '', 372, 0),
(260, 139, 4, 'Jrjeioe\'bebek', '', '', '', '2020-05-13 22:40:35', '', 373, 0),
(261, 116, 4, 'Hi', '', '', '', '2020-05-14 04:01:11', '', 327, 0),
(262, 4, 123, 'Jfjfj', '', '', '', '2020-05-15 13:50:16', '80.215.132.115', 376, 0),
(264, 139, 4, 'Gjhjjjhyyh', '', '', '', '2020-05-16 07:00:32', '', 375, 0),
(266, 139, 4, 'Gjhjjjhyyh', '', '', '', '2020-05-16 07:02:27', '', 375, 0),
(268, 139, 4, 'Gjhjjjhyyh', '', '', '', '2020-05-16 07:02:35', '', 375, 0),
(270, 139, 4, 'Gjhjjjhyyh', '', '', '', '2020-05-16 07:02:49', '', 375, 0),
(271, 139, 4, 'Thg', '', '', '', '2020-05-18 03:06:32', '', 376, 0),
(272, 139, 4, 'Vjv', '', '', '', '2020-05-18 03:06:36', '', 376, 0),
(273, 139, 4, 'Ghchj', '', '', '', '2020-05-18 03:06:39', '', 376, 0),
(274, 12, 4, 'hhhf', '', '', '', '2020-06-02 14:30:53', '', 177, 0),
(275, 12, 4, 'fsdfdsdslkgjjkj\nfsdfsdfsdfsdfsdfsdf\nsdfdsdfsdfsdfsfdsf', '', '', '', '2020-06-02 14:31:07', '', 177, 0),
(276, 12, 4, 'dfsdfsdfsdfsdfsdfsdfsdfsdfdsfsd', '', '', '', '2020-06-02 14:31:11', '', 177, 0),
(277, 12, 4, 'dsfsdfsdfdffsdfsdfsdfsdfsdfsdfsf', '', '', '', '2020-06-02 14:31:31', '', 177, 0),
(278, 12, 4, 'dsfsdfsdfsdfsdfsdrtyrd\nd\ndgdf\ngg\nfd\ngfgfdgdgdlgkd;lgkfd;glkdfg', '', '', '', '2020-06-02 14:31:38', '', 177, 0),
(279, 12, 4, 'hi', '', '', '', '2020-06-02 14:39:43', '', 177, 0),
(280, 12, 4, 'fsdfddfdff', '', '', '', '2020-06-02 14:39:51', '', 177, 0),
(281, 12, 4, 'hsdffdds', '', '', '', '2020-06-02 14:42:22', '', 177, 0),
(282, 12, 4, 'thr', '', '', '', '2020-06-02 14:42:40', '', 177, 0),
(283, 12, 4, 'fdfdfd', '', '', '', '2020-06-02 15:18:59', '', 365, 0),
(284, 12, 4, 'dfdsfsdfdsfsfsdfsf', '', '', '', '2020-06-02 15:19:02', '', 365, 0),
(285, 12, 4, 'sfdfsdfsdfsdfsdfdsfdsfsdfsdfsdf', '', '', '', '2020-06-02 15:19:06', '', 365, 0),
(286, 12, 4, 'sdfsdfsdfsdfdsfdsfsfs', '', '', '', '2020-06-02 15:19:09', '', 365, 0),
(287, 12, 4, 'gfdgfdggfdgdfgfdgfdgd', '', '', '', '2020-06-02 15:19:17', '', 365, 0),
(288, 16, 4, 'hey', '', '', '', '2020-06-03 09:54:31', '', 375, 0),
(290, 16, 4, 'hey', '', '', '', '2020-06-03 09:56:57', '', 374, 0),
(291, 16, 4, 'hello', '', '', '', '2020-06-03 09:57:26', '', 374, 0),
(293, 16, 4, 'not getting delivered', '', '', '', '2020-06-03 09:58:50', '', 379, 0),
(294, 16, 4, 'hey', '', '', '', '2020-06-03 09:59:17', '', 379, 0),
(295, 16, 4, 'hi', '', '', '', '2020-06-03 10:02:28', '', 379, 0),
(296, 16, 4, 'hi', '', '', '', '2020-06-03 10:30:32', '', 375, 0),
(297, 12, 4, 'HELLO', '', '', '', '2020-06-03 12:20:40', '', 379, 0),
(298, 16, 4, 'hy', '', '', '', '2020-06-03 12:22:20', '', 379, 0),
(299, 4, 12, 'Helo', '', '', '', '2020-06-03 12:25:09', '110.224.221.132', 379, 0),
(300, 4, 12, 'hi this is hello', '', '', '', '2020-06-03 12:25:30', '110.224.221.132', 379, 0),
(301, 12, 4, 'jjjiiji', '', '', '', '2020-06-03 12:25:48', '', 379, 0),
(302, 4, 12, 'hi roshi', '', '', '', '2020-06-03 12:25:59', '110.224.221.132', 379, 0),
(303, 12, 4, 'dd', '', '', '', '2020-06-03 13:42:39', '', 379, 0),
(304, 139, 4, 'Uhj', '', '', '', '2020-06-04 01:52:47', '', 376, 0),
(305, 4, 139, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-04 01:53:22', '', 370, 0),
(306, 4, 139, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-04 01:53:30', '', 370, 0),
(307, 4, 139, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-04 01:54:39', '', 366, 0),
(308, 4, 139, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-04 01:54:46', '', 366, 0),
(309, 4, 16, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-15 10:09:11', '', 383, 0),
(310, 4, 139, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-15 10:10:05', '', 329, 0),
(311, 4, 139, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-15 10:12:29', '', 329, 0),
(312, 4, 139, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-15 10:13:28', '', 329, 0),
(313, 4, 139, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-15 10:13:40', '', 329, 0),
(314, 16, 4, 'hi How are you?', '', '', '', '2020-06-15 10:15:13', '', 329, 0),
(315, 4, 16, 'yes', '', '', '', '2020-06-19 07:51:43', '122.175.242.240', 329, 0),
(316, 4, 152, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-30 02:18:30', '', 392, 0),
(317, 152, 4, 'Ok', '', '', '', '2020-06-30 02:19:03', '', 392, 0),
(318, 151, 4, 'Hy', '', '', '', '2020-06-30 02:21:04', '', 392, 0),
(319, 4, 151, 'Customer Service:\n\nWe are very sorry for your dissatisfaction.\n\nHowever, your dispute has been successfully opened. The average processing time is 8 working days.\n\nYou can chat with customer service in case you have arranged with the concerned Heelper, or if you have other information to send us.\n\nPlease, note that it may take a few days to process your messages.\n\nThank you', '', '', '', '2020-06-30 02:22:15', '', 390, 0);

-- --------------------------------------------------------

--
-- Table structure for table `chat_files`
--

CREATE TABLE `chat_files` (
  `id` int(25) NOT NULL,
  `voicefile_name` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_files`
--

INSERT INTO `chat_files` (`id`, `voicefile_name`, `date_created`) VALUES
(4, 'Screenshot_1585983818.png', '0000-00-00 00:00:00'),
(3, '0c743393-4624-4b23-ba5f-a004c49daaa11.jpg', '0000-00-00 00:00:00'),
(5, 'abd51d6c-86b0-4a64-9e9d-195c5bcdaa93.jpg', '0000-00-00 00:00:00'),
(7, 'https://alphawizz.com/Freelance/uploads/chat_files/Screenshot_15859838181.png', '2020-04-08 17:54:49'),
(8, 'https://alphawizz.com/Freelance/uploads/chat_files/Screenshot_1585640113.png', '2020-04-08 18:01:16'),
(9, 'https://alphawizz.com/Freelance/uploads/chat_files/image-5d8b2662-db8c-40b1-986a-82e2b7d770f3.jpg', '2020-04-08 18:50:44'),
(10, '', '2020-04-08 19:06:39'),
(11, 'https://alphawizz.com/Freelance/uploads/chat_files/image-39032306-5a7b-4800-a461-0a74a29376a4.jpg', '2020-04-08 19:14:03'),
(12, 'https://alphawizz.com/Freelance/uploads/chat_files/image-5d8b2662-db8c-40b1-986a-82e2b7d770f31.jpg', '2020-04-08 19:20:51'),
(13, 'https://alphawizz.com/Freelance/uploads/chat_files/image-ce5ff041-5c43-43d4-9e3f-6a903542f98d.jpg', '2020-04-08 19:32:01'),
(14, 'https://alphawizz.com/Freelance/uploads/chat_files/Screenshot_20191209-121656_Future_Pay.jpg', '2020-04-08 19:37:15'),
(15, 'https://alphawizz.com/Freelance/uploads/chat_files/IMG_20200405_214412_106.jpg', '2020-04-08 19:49:45'),
(16, 'https://alphawizz.com/Freelance/uploads/chat_files/IMG-20200126-WA0091.jpg', '2020-04-08 19:50:11'),
(17, '', '2020-04-09 05:49:14'),
(18, '', '2020-04-09 05:50:02'),
(20, '', '2020-04-09 06:57:18'),
(21, '', '2020-04-09 11:17:24'),
(22, 'https://alphawizz.com/Freelance/uploads/voice_files/file_example_MP3_700KB1.mp3', '2020-04-09 11:17:36'),
(23, '', '2020-04-09 15:52:39'),
(24, '', '2020-04-09 15:55:20'),
(25, 'https://alphawizz.com/Freelance/uploads/voice_files/file_example_MP3_700KB2.mp3', '2020-04-09 15:57:50'),
(26, '', '2020-04-09 16:07:46'),
(27, '', '2020-04-09 16:20:02'),
(28, 'https://alphawizz.com/Freelance/uploads/voice_files/file_example_MP3_700KB3.mp3', '2020-04-09 16:30:14'),
(29, 'https://alphawizz.com/Freelance/uploads/voice_files/file_example_MP3_700KB4.mp3', '2020-04-09 16:30:54'),
(30, 'https://alphawizz.com/Freelance/uploads/voice_files/file_example_MP3_700KB5.mp3', '2020-04-09 16:31:23'),
(31, 'https://alphawizz.com/Freelance/uploads/voice_files/file_example_MP3_700KB6.mp3', '2020-04-09 16:36:15'),
(32, '', '2020-04-09 16:40:54'),
(33, 'https://alphawizz.com/Freelance/uploads/voice_files/Sample640.3gp', '2020-04-09 16:42:05'),
(34, 'https://alphawizz.com/Freelance/uploads/voice_files/sample3gp_176x144.3gp', '2020-04-09 16:42:43'),
(35, 'https://alphawizz.com/Freelance/uploads/voice_files/EGMOJAudioRecording.3gp', '2020-04-09 17:08:06'),
(36, 'https://alphawizz.com/Freelance/uploads/voice_files/MBCCNAudioRecording.3gp', '2020-04-09 17:08:41'),
(37, 'https://alphawizz.com/Freelance/uploads/voice_files/BEMDEAudioRecording.3gp', '2020-04-09 18:04:52'),
(38, 'https://alphawizz.com/Freelance/uploads/voice_files/EGGDNAudioRecording.3gp', '2020-04-09 18:10:27'),
(39, 'https://alphawizz.com/Freelance/uploads/voice_files/NGKCMAudioRecording.3gp', '2020-04-09 18:40:55'),
(40, 'https://alphawizz.com/Freelance/uploads/voice_files/BHAJDAudioRecording.3gp', '2020-04-09 18:50:43'),
(41, 'https://alphawizz.com/Freelance/uploads/voice_files/HDDBNAudioRecording.3gp', '2020-04-09 19:28:12'),
(42, 'https://alphawizz.com/Freelance/uploads/voice_files/CJCMHAudioRecording.3gp', '2020-04-14 11:14:00'),
(43, 'https://alphawizz.com/Freelance/uploads/voice_files/NCKHBAudioRecording.3gp', '2020-04-14 17:14:33'),
(44, 'https://alphawizz.com/Freelance/uploads/voice_files/MBAOAAudioRecording.3gp', '2020-04-14 17:14:41'),
(45, 'https://alphawizz.com/Freelance/uploads/voice_files/NLDPIAudioRecording.3gp', '2020-04-14 20:24:53'),
(46, 'https://alphawizz.com/Freelance/uploads/voice_files/DIHANAudioRecording.3gp', '2020-04-15 23:39:15'),
(47, 'https://alphawizz.com/Freelance/uploads/voice_files/MGBEFAudioRecording.3gp', '2020-04-15 23:39:25'),
(48, 'https://alphawizz.com/Freelance/uploads/voice_files/LPHLNAudioRecording.3gp', '2020-04-15 23:39:31'),
(49, 'https://alphawizz.com/Freelance/uploads/voice_files/DMOJDAudioRecording.3gp', '2020-04-15 23:42:31'),
(50, 'https://alphawizz.com/Freelance/uploads/voice_files/FPECDAudioRecording.3gp', '2020-04-15 23:42:51'),
(51, 'https://alphawizz.com/Freelance/uploads/voice_files/JOIGKAudioRecording.3gp', '2020-04-16 20:40:49'),
(52, 'https://alphawizz.com/Freelance/uploads/voice_files/PGCOPAudioRecording.3gp', '2020-04-16 21:39:31'),
(53, 'https://alphawizz.com/Freelance/uploads/voice_files/FDNNFAudioRecording.3gp', '2020-04-16 21:39:57'),
(54, 'https://alphawizz.com/Freelance/uploads/voice_files/BLJGNAudioRecording.3gp', '2020-04-17 17:37:44'),
(55, 'https://alphawizz.com/Freelance/uploads/voice_files/MPPPNAudioRecording.3gp', '2020-04-20 19:01:25'),
(56, 'https://alphawizz.com/Freelance/uploads/voice_files/PGHGCAudioRecording.3gp', '2020-04-22 03:53:18'),
(57, 'https://alphawizz.com/Freelance/uploads/voice_files/AMMCKAudioRecording.3gp', '2020-04-22 03:53:24'),
(58, 'https://alphawizz.com/Freelance/uploads/voice_files/HAFFPAudioRecording.3gp', '2020-04-22 04:09:39'),
(59, 'https://alphawizz.com/Freelance/uploads/voice_files/MADPDAudioRecording.3gp', '2020-04-24 11:36:48'),
(60, 'https://alphawizz.com/Freelance/uploads/voice_files/EOOOIAudioRecording.3gp', '2020-04-24 11:36:57'),
(61, 'https://alphawizz.com/Freelance/uploads/voice_files/PEKCHAudioRecording.3gp', '2020-04-24 11:49:25'),
(62, 'https://alphawizz.com/Freelance/uploads/voice_files/ICHENAudioRecording.3gp', '2020-04-24 11:59:27'),
(63, 'https://alphawizz.com/Freelance/uploads/voice_files/ILHHNAudioRecording.3gp', '2020-04-24 12:00:09'),
(64, 'https://alphawizz.com/Freelance/uploads/voice_files/BPNPHAudioRecording.3gp', '2020-04-24 12:04:45'),
(65, 'https://alphawizz.com/Freelance/uploads/voice_files/MNFKIAudioRecording.3gp', '2020-04-24 12:07:18'),
(66, 'https://alphawizz.com/Freelance/uploads/voice_files/LFKMFAudioRecording.3gp', '2020-04-24 12:20:59'),
(67, 'https://alphawizz.com/Freelance/uploads/voice_files/GCJFKAudioRecording.3gp', '2020-04-24 12:21:32'),
(68, 'https://alphawizz.com/Freelance/uploads/voice_files/DIBMDAudioRecording.3gp', '2020-04-24 12:21:48'),
(69, 'https://alphawizz.com/Freelance/uploads/voice_files/BNBCNAudioRecording.3gp', '2020-04-24 20:59:53'),
(70, 'https://alphawizz.com/Freelance/uploads/voice_files/LBCMEAudioRecording.3gp', '2020-04-24 21:00:04'),
(71, 'https://alphawizz.com/Freelance/uploads/voice_files/KBMMHAudioRecording.3gp', '2020-04-24 21:00:23'),
(72, 'https://alphawizz.com/Freelance/uploads/voice_files/EPEACAudioRecording.3gp', '2020-04-24 21:00:32'),
(73, 'https://alphawizz.com/Freelance/uploads/voice_files/HMJIEAudioRecording.3gp', '2020-04-24 21:00:48'),
(74, 'https://alphawizz.com/Freelance/uploads/voice_files/CCCLNAudioRecording.3gp', '2020-04-24 21:23:31'),
(75, 'https://alphawizz.com/Freelance/uploads/voice_files/BIILGAudioRecording.3gp', '2020-04-25 07:31:16'),
(76, 'https://alphawizz.com/Freelance/uploads/voice_files/GPHPLAudioRecording.3gp', '2020-04-26 04:48:11'),
(77, 'https://alphawizz.com/Freelance/uploads/voice_files/IGDCOAudioRecording.3gp', '2020-04-28 11:33:14'),
(78, 'https://alphawizz.com/Freelance/uploads/voice_files/BIBNLAudioRecording.3gp', '2020-04-29 06:45:51'),
(79, 'https://alphawizz.com/Freelance/uploads/voice_files/EJPGGAudioRecording.3gp', '2020-04-29 06:47:59'),
(80, 'https://alphawizz.com/Freelance/uploads/voice_files/GKMHHAudioRecording.3gp', '2020-04-29 06:48:46'),
(81, 'https://alphawizz.com/Freelance/uploads/voice_files/DEOOLAudioRecording.3gp', '2020-04-29 07:51:35'),
(82, 'https://alphawizz.com/Freelance/uploads/voice_files/LLKFEAudioRecording.3gp', '2020-04-29 07:56:01'),
(83, 'https://alphawizz.com/Freelance/uploads/voice_files/DLFKGAudioRecording.3gp', '2020-04-29 07:57:16'),
(84, 'https://alphawizz.com/Freelance/uploads/voice_files/LOJBGAudioRecording.3gp', '2020-04-29 08:07:07'),
(85, 'https://alphawizz.com/Freelance/uploads/voice_files/JACBEAudioRecording.3gp', '2020-04-29 08:07:20'),
(86, 'https://alphawizz.com/Freelance/uploads/voice_files/BALOLAudioRecording.3gp', '2020-04-29 08:09:41'),
(87, 'https://alphawizz.com/Freelance/uploads/voice_files/HEIHIAudioRecording.3gp', '2020-04-29 08:09:51'),
(88, 'https://alphawizz.com/Freelance/uploads/voice_files/PBDCMAudioRecording.3gp', '2020-04-29 08:09:59'),
(89, 'https://alphawizz.com/Freelance/uploads/voice_files/KIAIBAudioRecording.3gp', '2020-04-29 11:23:23'),
(90, 'https://alphawizz.com/Freelance/uploads/voice_files/MNPMMAudioRecording.3gp', '2020-04-29 16:59:52'),
(91, 'https://alphawizz.com/Freelance/uploads/voice_files/GAFDFAudioRecording.3gp', '2020-05-02 05:23:56'),
(92, 'https://alphawizz.com/Freelance/uploads/voice_files/ENEIEAudioRecording.3gp', '2020-05-02 14:04:11'),
(93, 'https://alphawizz.com/Freelance/uploads/voice_files/PKBFAAudioRecording.3gp', '2020-05-02 14:04:31'),
(94, 'https://alphawizz.com/Freelance/uploads/voice_files/AFFGEAudioRecording.3gp', '2020-05-02 14:04:46'),
(95, 'https://alphawizz.com/Freelance/uploads/voice_files/LICKHAudioRecording.3gp', '2020-05-02 14:14:05'),
(96, 'https://alphawizz.com/Freelance/uploads/voice_files/KCJPCAudioRecording.3gp', '2020-05-04 09:24:58'),
(97, 'https://alphawizz.com/Freelance/uploads/voice_files/KPHOMAudioRecording.3gp', '2020-05-04 09:54:19'),
(98, 'https://alphawizz.com/Freelance/uploads/voice_files/NHJOKAudioRecording.3gp', '2020-05-04 09:54:25'),
(99, 'https://alphawizz.com/Freelance/uploads/voice_files/KJEGNAudioRecording.3gp', '2020-05-04 09:54:58'),
(100, 'https://alphawizz.com/Freelance/uploads/voice_files/IGHLHAudioRecording.3gp', '2020-05-04 09:56:42'),
(101, 'https://alphawizz.com/Freelance/uploads/voice_files/PEOFPAudioRecording.3gp', '2020-05-04 10:03:45'),
(102, 'https://alphawizz.com/Freelance/uploads/voice_files/LDJDPAudioRecording.3gp', '2020-05-04 10:03:55'),
(103, 'https://alphawizz.com/Freelance/uploads/voice_files/GNCMJAudioRecording.3gp', '2020-05-04 10:19:43'),
(104, 'https://alphawizz.com/Freelance/uploads/voice_files/BMLHNAudioRecording.3gp', '2020-05-04 10:19:57'),
(105, 'https://alphawizz.com/Freelance/uploads/voice_files/ONKEJAudioRecording.3gp', '2020-05-04 10:35:41'),
(106, 'https://alphawizz.com/Freelance/uploads/voice_files/JCGFIAudioRecording.3gp', '2020-05-04 10:38:17'),
(107, 'https://alphawizz.com/Freelance/uploads/voice_files/BHNIKAudioRecording.3gp', '2020-05-04 15:06:02'),
(108, 'https://alphawizz.com/Freelance/uploads/voice_files/KJGKIAudioRecording.3gp', '2020-05-04 15:06:15'),
(109, 'https://alphawizz.com/Freelance/uploads/voice_files/EKOIMAudioRecording.3gp', '2020-05-04 15:06:30'),
(110, 'https://alphawizz.com/Freelance/uploads/voice_files/FGGMCAudioRecording.3gp', '2020-05-04 15:06:44'),
(111, 'https://alphawizz.com/Freelance/uploads/voice_files/BDCHPAudioRecording.3gp', '2020-05-06 06:41:24'),
(112, 'https://alphawizz.com/Freelance/uploads/voice_files/MMJHPAudioRecording.3gp', '2020-05-09 17:54:18'),
(113, 'https://alphawizz.com/Freelance/uploads/voice_files/JMLFCAudioRecording.3gp', '2020-05-13 22:30:27'),
(114, 'https://alphawizz.com/Freelance/uploads/voice_files/JKMFCAudioRecording.3gp', '2020-05-13 22:44:26'),
(115, 'https://alphawizz.com/Freelance/uploads/voice_files/BOEGIAudioRecording.3gp', '2020-05-15 22:02:14'),
(116, 'https://alphawizz.com/Freelance/uploads/voice_files/OEFJGAudioRecording.3gp', '2020-06-02 11:21:09'),
(117, 'https://alphawizz.com/Freelance/uploads/voice_files/FIGOOAudioRecording.3gp', '2020-06-30 01:49:29'),
(118, 'https://alphawizz.com/Freelance/uploads/voice_files/MMJOMAudioRecording.3gp', '2020-06-30 01:50:37');

-- --------------------------------------------------------

--
-- Table structure for table `chat_image`
--

CREATE TABLE `chat_image` (
  `id` int(25) NOT NULL,
  `image_name` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_image`
--

INSERT INTO `chat_image` (`id`, `image_name`, `date_created`) VALUES
(4, 'Screenshot_1585983818.png', '0000-00-00 00:00:00'),
(3, '0c743393-4624-4b23-ba5f-a004c49daaa11.jpg', '0000-00-00 00:00:00'),
(5, 'abd51d6c-86b0-4a64-9e9d-195c5bcdaa93.jpg', '0000-00-00 00:00:00'),
(7, 'https://alphawizz.com/Freelance/uploads/chat_image/Screenshot_15859838181.png', '2020-04-08 17:54:49'),
(8, 'https://alphawizz.com/Freelance/uploads/chat_image/Screenshot_1585640113.png', '2020-04-08 18:01:16'),
(9, 'https://alphawizz.com/Freelance/uploads/chat_image/image-5d8b2662-db8c-40b1-986a-82e2b7d770f3.jpg', '2020-04-08 18:50:44'),
(10, '', '2020-04-08 19:06:39'),
(11, 'https://alphawizz.com/Freelance/uploads/chat_image/image-39032306-5a7b-4800-a461-0a74a29376a4.jpg', '2020-04-08 19:14:03'),
(12, 'https://alphawizz.com/Freelance/uploads/chat_image/image-5d8b2662-db8c-40b1-986a-82e2b7d770f31.jpg', '2020-04-08 19:20:51'),
(13, 'https://alphawizz.com/Freelance/uploads/chat_image/image-ce5ff041-5c43-43d4-9e3f-6a903542f98d.jpg', '2020-04-08 19:32:01'),
(14, 'https://alphawizz.com/Freelance/uploads/chat_image/Screenshot_20191209-121656_Future_Pay.jpg', '2020-04-08 19:37:15'),
(15, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG_20200405_214412_106.jpg', '2020-04-08 19:49:45'),
(16, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG-20200126-WA0091.jpg', '2020-04-08 19:50:11'),
(17, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG_20200331_003525.jpg', '2020-04-09 08:27:32'),
(18, '', '2020-04-09 17:09:45'),
(19, 'https://alphawizz.com/Freelance/uploads/chat_image/image-39032306-5a7b-4800-a461-0a74a29376a41.jpg', '2020-04-09 18:10:00'),
(20, 'https://alphawizz.com/Freelance/uploads/chat_image/images_(3).jpeg', '2020-04-09 18:50:32'),
(21, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG_20200331_0035251.jpg', '2020-04-14 11:14:25'),
(22, 'https://alphawizz.com/Freelance/uploads/chat_image/Screenshot_20200413_225750_com_frelance.jpg', '2020-04-14 17:15:21'),
(23, 'https://alphawizz.com/Freelance/uploads/chat_image/Screenshot_20200416_013846.jpg', '2020-04-15 23:39:42'),
(24, 'https://alphawizz.com/Freelance/uploads/chat_image/image-39032306-5a7b-4800-a461-0a74a29376a42.jpg', '2020-04-16 20:41:54'),
(25, 'https://alphawizz.com/Freelance/uploads/chat_image/magazine-unlock-01-2_3_3982-_2EB5180F33A74EEF9A932C58670CD5A6.jpg', '2020-04-16 21:39:45'),
(26, 'https://alphawizz.com/Freelance/uploads/chat_image/20200305_165254.jpg', '2020-04-17 09:40:11'),
(27, 'https://alphawizz.com/Freelance/uploads/chat_image/1587281242581_IMG-20200419-WA0011.jpg', '2020-04-22 03:53:00'),
(28, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG_20200420_050100.jpg', '2020-04-24 11:49:40'),
(29, '', '2020-04-24 12:05:15'),
(30, 'https://alphawizz.com/Freelance/uploads/chat_image/image-5d8b2662-db8c-40b1-986a-82e2b7d770f32.jpg', '2020-04-24 12:06:07'),
(31, 'https://alphawizz.com/Freelance/uploads/chat_image/Screenshot_20200210-212717_Record_Call.jpg', '2020-04-24 12:22:22'),
(32, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG-20200425-WA0012.jpg', '2020-04-25 07:31:42'),
(33, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG_20200502_033932.jpg', '2020-05-04 09:25:14'),
(34, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG_20200502_0339321.jpg', '2020-05-04 09:54:14'),
(35, 'https://alphawizz.com/Freelance/uploads/chat_image/App_Icon_5.png', '2020-05-06 06:41:57'),
(36, 'https://alphawizz.com/Freelance/uploads/chat_image/imageedit_8_2665352795.png', '2020-05-09 17:54:30'),
(37, 'https://alphawizz.com/Freelance/uploads/chat_image/IMG_20200618_214612.jpg', '2020-06-30 01:49:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `description`, `email`) VALUES
(1, 'abcd', 'this is contact form', 'sonali@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_content`
--

CREATE TABLE `contact_content` (
  `id` int(11) NOT NULL,
  `contact_section_title1` varchar(50) NOT NULL,
  `contact_section_image1` varchar(100) NOT NULL,
  `contact_section_content1` varchar(500) NOT NULL,
  `contact_map` varchar(300) NOT NULL,
  `address_title` varchar(100) NOT NULL,
  `address_content` varchar(300) NOT NULL,
  `call_us_title` varchar(100) NOT NULL,
  `call_us_content` varchar(300) NOT NULL,
  `email_title` varchar(100) NOT NULL,
  `email_content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_content`
--

INSERT INTO `contact_content` (`id`, `contact_section_title1`, `contact_section_image1`, `contact_section_content1`, `contact_map`, `address_title`, `address_content`, `call_us_title`, `call_us_content`, `email_title`, `email_content`) VALUES
(1, 'Contact us', 'Contact_img1.png', '<p><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">We are a design studio partnering with brands of multiple industries scattered all across the globe. </span></span></span><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\"><span style=\"vertical-align: inherit;\">Our work is to build.</span></span></span></span></p>', '', 'Address', '<p>lorem ipsum, lorem ipsum, lorem ipsum, lorem ipsum, Indore, Madhya Pradesh 45201010</p>', 'Call Us', '<p>+91 9898989898</p>\r\n<p>+91 9786454876</p>', 'E-Mail', '<p>Dummy@gmail.com</p>\r\n<p>Dummy@ipsum.com</p>');

-- --------------------------------------------------------

--
-- Table structure for table `Demand_reviews`
--

CREATE TABLE `Demand_reviews` (
  `id` int(100) NOT NULL,
  `demand_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `comment` longtext NOT NULL,
  `attachment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Demand_reviews`
--

INSERT INTO `Demand_reviews` (`id`, `demand_id`, `user_id`, `comment`, `attachment`) VALUES
(5, 12, 1, 'this is comment', 'Screenshot_from_2019-11-29_14-14-361.png,Screenshot_from_2019-11-27_10-47-461.png,Screenshot_from_2019-11-23_12-37-381.png,Screenshot_from_2019-11-23_11-32-031.png'),
(6, 12, 1, 'this is comment', 'States_UTs_and_Capitals1.pdf,alphawizz_26_sep_to_9oct_attendance.pdf'),
(7, 0, 1, 'this is comment', 'Screenshot_from_2019-11-29_14-14-362.png,Screenshot_from_2019-11-27_10-47-462.png,Screenshot_from_2019-11-23_12-37-382.png,Screenshot_from_2019-11-23_11-32-032.png'),
(8, 0, 1, 'this is comment', 'Screenshot_from_2019-11-29_14-14-364.png,Screenshot_from_2019-11-27_10-47-464.png,Screenshot_from_2019-11-23_12-37-384.png,Screenshot_from_2019-11-23_11-32-034.png'),
(9, 0, 1, 'this is comment', 'Screenshot_from_2019-11-29_14-14-365.png,Screenshot_from_2019-11-27_10-47-465.png,Screenshot_from_2019-11-23_12-37-385.png,Screenshot_from_2019-11-23_11-32-035.png');

-- --------------------------------------------------------

--
-- Table structure for table `dispute_message`
--

CREATE TABLE `dispute_message` (
  `id` int(25) NOT NULL,
  `project_id` int(25) NOT NULL,
  `message` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispute_message`
--

INSERT INTO `dispute_message` (`id`, `project_id`, `message`, `date_created`) VALUES
(1, 12, 'Thsd dfldkfndfld kldfdfd', '2020-03-25 00:00:00'),
(2, 12, 'adfassadsd dsasadsad', '2020-03-25 07:19:20'),
(3, 12, 'Testing', '2020-03-25 11:22:10'),
(4, 12, 'Testing', '2020-03-25 11:22:39'),
(5, 12, 'test', '2020-03-25 14:02:23'),
(6, 12, 'test', '2020-03-25 16:06:56'),
(7, 12, 'test', '2020-03-25 17:58:25'),
(8, 12, 'Testing', '2020-03-27 09:53:02'),
(9, 12, 'test', '2020-04-01 09:44:25'),
(10, 12, 'test', '2020-04-03 16:41:32'),
(11, 32, 'sdfdfdf', '2020-04-04 08:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `home_content`
--

CREATE TABLE `home_content` (
  `id` int(11) NOT NULL,
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
  `section_4_content` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_content`
--

INSERT INTO `home_content` (`id`, `section_1_image`, `section_2_image`, `section_3_image`, `section_4_image`, `section_1_title`, `section_2_title`, `section_3_title`, `section_4_title`, `section_1_content`, `section_2_content`, `section_3_content`, `section_4_content`) VALUES
(1, 'banner231.png', 'concept1.png', '', '', 'Lorem ipsum', 'About us', '0', '0', 'Lorem ipsum, or lipsum as it is known sometimes known is dummy.\r\nLorem ipsum, or lipsum as it is known sometimes known is dummy.\r\n\r\nLorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have.', '<p>Lorem ipsum, or lipsum as it is known sometimes known is dummy. Lorem ipsum, or lipsum as it is known sometimes known is dummy.</p>\r\n\r\n<h2>Lorem ipsum, or lipsum as it is known sometimes known is dummy. Lorem ipsum, or lipsum as it is known sometimes known is dummy.</h2>\r\n\r\n<p>&nbsp;</p>\r\n', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `home_ourteam`
--

CREATE TABLE `home_ourteam` (
  `team_id` int(11) NOT NULL,
  `member_name` varchar(50) NOT NULL,
  `member_skills` varchar(255) NOT NULL,
  `member_bio` varchar(500) NOT NULL,
  `member_profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home_ourteam`
--

INSERT INTO `home_ourteam` (`team_id`, `member_name`, `member_skills`, `member_bio`, `member_profile`) VALUES
(2, 'roshni', '<p>php, wordpress </p>', '<p>Developer</p>', 'user-test.png'),
(3, 'Name Here', 'php,wordpress', '', 'user-test1.png'),
(4, 'Name Here', 'php ,html,js,wordpress,', 'Name here', 'user-test2.png'),
(5, 'Demo ', 'html,angular,node.js', 'demo\r\n demo', 'user-test3.png');

-- --------------------------------------------------------

--
-- Table structure for table `litigations`
--

CREATE TABLE `litigations` (
  `id` int(25) NOT NULL,
  `project_id` int(25) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `comment` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `litigations`
--

INSERT INTO `litigations` (`id`, `project_id`, `user_email`, `title`, `description`, `comment`, `date_created`, `date_modified`) VALUES
(1, 309, 'test@test.com', 'test', 'test here', 'ok ,  non ok , in work  dd', '2020-05-07 00:00:00', '2020-05-14 05:15:13'),
(2, 329, 'vasim@gmail.com', '', 'hi How are you?', '', '2020-06-15 10:15:13', '2020-06-15 10:15:13'),
(3, 392, '77@gmail.com', '', 'Ok', '', '2020-06-30 02:19:03', '2020-06-30 02:19:03'),
(4, 392, '79@gmail.com', '', 'Hy', '', '2020-06-30 02:21:04', '2020-06-30 02:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `mission_id` int(100) NOT NULL,
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
  `created` date NOT NULL,
  `bank_fee` varchar(255) NOT NULL,
  `satisfy` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mission`
--

INSERT INTO `mission` (`mission_id`, `title`, `mission_title`, `mission_budget`, `budget`, `mission_category`, `project_category`, `mission_budget_currency`, `currency`, `mission_image`, `image`, `mission_doc`, `file`, `user_id`, `client_id`, `mission_description`, `description`, `mission_status`, `status`, `accepted_by`, `created`, `bank_fee`, `satisfy`) VALUES
(1, 'mission1', 'mission1', 2000, 'Mission by 2', 2, 2, '$', '', '20200305_16525472.jpg,20200305_16525471.jpg', '20200305_16525472.jpg,20200305_16525471.jpg', '1.png', '20200305_16525472.jpg,20200305_16525471.jpg', 14, 14, 'this is my first mission', '', 1, 0, 0, '2020-02-21', '10', 0),
(2, 'mission2', 'mission2', 3000, '3000', 3, 3, '$', '', 'conveyor-1.png', '', 'ADMINPANEL09_04_2020.xlsx', 'ADMINPANEL09_04_2020.xlsx', 1, 1, 'mission2 description', '', 3, 3, 0, '2020-02-21', '10', 0),
(3, 'mission3', 'mission3', 5000, '5000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, 'mission3 description', '', 0, 0, 0, '2020-02-21', '10', 0),
(4, 'mission4', 'mission4', 8000, '8000', 2, 2, '$', '', 'art.png', '', '', '', 1, 1, 'mission4 description', '', 1, 0, 0, '2020-02-20', '10', 0),
(5, 'mission5', 'mission5', 2000, '2000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, '', '', 2, 0, 0, '2020-03-04', '10', 0),
(6, 'mission5', 'mission5', 3000, '3000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, '', '', 1, 2, 0, '2020-03-04', '10', 0),
(7, 'mission5', 'mission5', 3000, '3000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, '', '', 1, 1, 0, '2020-03-04', '10', 0),
(8, 'mission5', 'mission5', 3000, '3000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, '', '', 1, 1, 0, '2020-03-04', '10', 0),
(9, 'mission5', 'mission5', 3000, '3000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 2, 1, '', '', 2, 1, 0, '2020-03-04', '10', 0),
(10, 'mission5', 'mission5', 3000, '3000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, '', '', 3, 1, 0, '2020-03-04', '10', 0),
(11, 'mission5', 'mission5', 13000, '13000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, '', '', 3, 0, 0, '2020-03-07', '10', 0),
(12, 'mission5', 'mission5', 1000, '1000', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, '', '', 1, 0, 12, '2020-03-07', '10', 0),
(13, 'mission5', 'mission5', 10800, '10800', 3, 3, '$', '', 'chemistry-3.png', '', '', '', 1, 1, '', '', 4, 0, 0, '2020-03-07', '10', 0),
(14, 'Mission by 2', 'Mission by 2', 2000, '2000', 2, 3, '$', '', '', '', '', '', 2, 1, 'test data', '', 0, 0, 0, '2020-03-19', '10', 0),
(15, 'fsdfsd', 'fsdfsd', 12, '12', 2, 2, '', '', 'test24.png', 'test24.png', 'Untitledsdd9.png,Untitlessdd11.png', 'Untitledsdd9.png,Untitlessdd11.png', 1, 1, 'sfsdfsds', 'sfsdfsds', 1, 0, 0, '2020-04-01', '10', 0),
(16, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-04-02', '10', 0),
(17, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-04-01', '10', 0),
(18, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-03-01', '10', 0),
(19, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-03-01', '10', 0),
(20, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 1, 0, 0, '2020-04-03', '10', 0),
(21, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-04-01', '10', 0),
(22, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-04-01', '10', 0),
(23, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-04-01', '10', 0),
(24, 'Physique', 'Physique', 0, '0', 1, 1, '', '', 'user.png', '', 'user.png', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-04-02', '10', 0),
(25, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-04-01', '10', 0),
(26, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffff', 'ffff', 0, 0, 0, '2020-04-01', '', 0),
(27, 'fsdfsd', 'fsdfsd', 12, '12', 2, 2, '', '', 'test25.png', 'test25.png', 'Untitledsdd10.png,Untitlessdd12.png', 'Untitledsdd10.png,Untitlessdd12.png', 1, 1, 'sfsdfsds', 'sfsdfsds', 1, 0, 0, '2020-04-01', '', 0),
(28, 'freelancer', 'fsdfsd', 0, '45000', 0, 0, '', '$', '', 'a38.png', '', 'salary3.pdf', 0, 2, '', 'i can work on this project', 0, 0, 0, '2020-02-21', '', 0),
(29, 'freelancer', 'fsdfsd', 0, '45000', 0, 32, '', '$', '', '4e3d8c9ea986e76ebe5d42d6fa10a195.jpeg', '', 'salary4.pdf', 0, 2, '', 'i can work on this project', 0, 0, 0, '2020-02-19', '', 0),
(30, 'freelancer1', 'fsdfsd', 0, '45000', 0, 3, '', '$', '', '34464b3d917345591411edde0b15c913.png', '', 'salary5.pdf', 0, 2, '', 'i can work on this project', 0, 0, 0, '2020-02-18', '', 0),
(31, 'freelancer', 'freelancer', 45000, '45000', 2, 2, '$', '$', 'a311.png', 'a311.png', 'salary6.pdf', 'salary6.pdf', 1, 1, 'i can work on this project', 'i can work on this project', 0, 0, 0, '2020-02-17', '', 0),
(32, 'auth module', 'auth module', 12000, '12,000', 4, 4, '', '$', 'Screenshot_from_2019-12-05_15-03-17.png', 'Screenshot_from_2019-12-05_15-03-17.png', 'Screenshot_from_2019-12-05_15-03-17.png', 'salary7.pdf', 2, 2, 'i need a project for manage my all auth type project ', 'i need a project for manage my all auth type project ', 2, 1, 0, '2020-02-21', '', 0),
(33, 'auth module', 'auth module', 12000, '12,000', 4, 4, '', '$', '', 'Screenshot_from_2019-12-05_15-03-171.png', '', 'salary8.pdf', 1, 1, 'i need a project for manage my all auth type project ', 'i need a project for manage my all auth type project ', 1, 1, 0, '2020-02-21', '', 0),
(34, 'codegniter project', 'auth module', 45000, '1,20000', 4, 10, '', '$', '', 'Screenshot_from_2019-11-29_14-14-36.png', '', '', 1, 12, '', 'i need a admin panel for manage all my project of company', 1, 1, 0, '2020-02-16', '', 0),
(35, 'codegniter project', 'auth module', 45000, '1,20000', 4, 5, '', '$', '', 'Screenshot_from_2019-11-29_14-14-3623.png', '', 'latter.pdf', 43, 12, '', 'i need a admin panel for manage all my project of company', 1, 2, 0, '2020-02-15', '', 0),
(36, 'codegniter project', 'auth module', 45000, '1,20000', 4, 5, '', '$', '', 'Screenshot_from_2019-11-29_14-14-3624.png', '', 'latter1.pdf', 43, 12, '', 'i need a admin panel for manage all my project of company', 1, 2, 0, '2020-02-24', '', 0),
(37, 'codegniter project', 'auth module', 45000, '1,20000', 4, 5, '', '$', '', 'Screenshot_from_2019-11-29_14-14-3625.png', '', 'latter2.pdf', 43, 12, '', 'i need a admin panel for manage all my project of company', 1, 2, 0, '2020-02-16', '', 0),
(38, 'codegniter project', 'auth module', 45000, '5', 4, 5, '', '$', '', 'Screenshot_from_2019-11-29_14-14-3626.png', '', 'latter3.pdf', 1, 12, '', 'i need a admin panel for manage all my project of company', 3, 3, 0, '2020-02-10', '', 0),
(39, 'codegniter project', 'auth module', 45000, '5', 4, 5, '', '$', '', 'Screenshot_from_2019-11-29_14-14-3627.png', '', 'latter4.pdf', 1, 12, '', 'i need a admin panel for manage all my project of company', 3, 3, 0, '2020-02-05', '', 0),
(40, 'codegniter project', 'auth module', 45000, '5', 4, 5, '', '$', '', '', '', '', 1, 12, '', 'i need a admin panel for manage all my project of company', 3, 3, 0, '2020-02-02', '', 0),
(41, 'codegniter project', 'auth module', 45000, '5', 4, 5, '', '$', '', '', '', '', 1, 12, '', 'i need a admin panel for manage all my project of company', 3, 3, 0, '2020-02-02', '', 0),
(42, 'codegniter project', 'auth module', 45000, '5', 5, 5, '', '$', '', '', '', '', 1, 12, '', 'i need a admin panel for manage all my project of company', 4, 4, 0, '2020-02-11', '', 0),
(43, 'codegniter project', 'auth module', 45000, '5', 5, 5, '', '$', '', 'aboutus.png', '', '', 1, 12, '', 'i need a admin panel for manage all my project of company', 4, 4, 0, '2020-02-05', '', 0),
(44, 'codegniter project', 'auth module', 45000, '5', 5, 5, '', '$', '', 'Screenshot_from_2019-11-29_14-14-3628.png', '', 'latter5.pdf', 1, 12, '', 'i need a admin panel for manage all my project of company', 4, 4, 0, '2020-02-05', '', 0),
(45, 'codegniter project', 'auth module', 45000, '5', 5, 5, '', '$', '', '', '', 'AP_sheet.ods', 1, 6, '', 'i need a admin panel for manage all my project of company', 4, 4, 0, '2020-04-01', '', 0),
(46, 'codegniter project', 'auth module', 45000, '5', 5, 5, '', '$', '', '', '', 'AP_sheet1.ods', 1, 6, '', 'i need a admin panel for manage all my project of company', 4, 4, 0, '2020-04-01', '', 0),
(47, 'Test task', 'auth module', 45000, '200', 1, 1, '', '', '', '', '', '', 1, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(48, 'Test task', 'auth module', 45000, '200', 1, 1, '', '', '', '', '', 'logo34.png', 1, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(49, 'Test task', 'auth module', 45000, '200', 1, 1, '', '', '', '', '', 'header-banner.jpg', 1, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(50, 'Test task', 'auth module', 45000, '100', 1, 1, '', '', '', '', '', 'close.png', 1, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(51, 'Test task', '', 100, '100', 0, 1, '', '', '', '', '', 'close1.png', 0, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(52, 'Test task', '', 0, '100', 0, 1, '', '', '', '', '', '', 0, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(53, 'Test task', '', 0, '100', 0, 1, '', '', '', '', '', '', 0, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(54, 'Test task', '', 0, '100', 0, 1, '', '', '', '', '', '', 0, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(55, 'Test task', '', 0, '100', 0, 1, '', '', '', '', '', '', 0, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(56, 'Test task', '', 0, '100', 0, 1, '', '', '', '', '', '', 0, 1, '', 'Test task description', 0, 0, 0, '2020-04-01', '', 0),
(57, 'Test task', '', 0, '100', 0, 1, '', '', '', '', '', '', 0, 1, '', 'Test taskhfghfg\nfghfghfgh description', 0, 0, 0, '2020-04-01', '', 0),
(58, 'Test task', '', 0, '100', 0, 1, '', '', '', '', '', '', 0, 1, '', 'Test taskhfghfg\nfghfghfgh description', 0, 0, 0, '2020-04-01', '', 0),
(59, 'Physique', '', 0, '500', 0, 1, '', '', '', '', '', '', 0, 1, '', '', 0, 0, 0, '2020-04-01', '', 0),
(60, 'Physique', '', 0, '500', 0, 1, '', '', '', '', '', '', 0, 1, '', '', 0, 0, 0, '2020-04-01', '', 0),
(61, 'Physique', '', 0, '500', 0, 1, '', '', '', '', '', '', 0, 1, '', '', 0, 0, 0, '2020-04-01', '', 0),
(62, ' Chimie', '', 0, '500', 0, 2, '', '', '', '', '', '', 0, 1, '', 'xyz......\n', 0, 0, 0, '2020-04-01', '', 0),
(63, ' Chimie', '', 0, '50', 0, 2, '', '', '', '', '', '', 0, 1, '', 'asdfghbcdh\nhfdz\n', 0, 0, 0, '2020-04-01', '', 0),
(64, 'Physique', '', 0, '500', 0, 1, '', '', '', '', '', '', 0, 1, '', 'dgndgjgjdgjgsj', 0, 0, 0, '2020-04-01', '', 0),
(65, 'Physique', '', 0, '12', 0, 0, '', '', '', '', '', '', 0, 1, '', 'hffdd', 0, 0, 0, '2020-04-02', '', 0),
(66, ' Chimie', '', 0, '500', 0, 2, '', '', '', '', '', '', 0, 1, '', 'qwert\nfghjk\nnbcs\nligcfhj\njh', 0, 0, 0, '2020-03-02', '', 0),
(67, 'Physique', '', 0, '100', 0, 1, '', '', '', '', '', '', 0, 1, '', 'dfsdfsdfsdfsdfsdfsdfsdfsdfsgfdgfdgfdgfdgdfgdfgdfgdfgdfg', 0, 0, 0, '2020-04-01', '', 0),
(68, ' Chimie', '', 0, '500', 0, 2, '', '', '', '', '', '', 0, 1, '', 'fuucng\njcyfguog\nnchgu\nfuydfu\njffudu\n', 0, 0, 0, '2020-04-01', '', 0),
(69, ' Chimie', '', 0, '500', 0, 2, '', '', '', '', '', '', 0, 1, '', 'hey\nloginpage if we enter wrong mail I\'d with correct password then popup should incorrect mail I\'d but it\'s show popup incorrect password\n\n\nin profile page\nname tab is supposed to do edit name but it is unable to update the name \n\nbirth tab it\'s showing clander after 2020 \n\nin promotion page\nin sentence € sign is missing', 0, 0, 0, '2020-04-01', '', 0),
(70, 'Test task', '', 0, '200', 0, 1, '', '', '', 'Untitlxed1.png,Untitledg1.png', '', '', 0, 1, '', 'Test task description', 0, 0, 0, '2020-04-05', '', 0),
(71, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_1652545.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(72, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_1652546.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(73, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_1652547.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(74, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_1652548.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(75, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_1652549.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(76, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525410.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(77, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525411.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(78, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525412.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(79, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525413.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(80, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525414.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(81, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525415.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(82, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525416.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(83, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525417.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(84, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525418.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(85, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525419.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(86, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525420.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(87, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525421.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(88, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525422.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(89, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525423.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(90, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525424.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-02-05', '', 0),
(91, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525425.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-07', '', 0),
(92, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525426.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-07', '', 0),
(93, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525427.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-07', '', 0),
(94, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525446.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-07', '', 0),
(95, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525447.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-03-18', '', 0),
(96, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525448.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-09', '', 0),
(97, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525449.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(98, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525450.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(99, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525451.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(100, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525452.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(101, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525453.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(102, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525454.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(103, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525455.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(104, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525456.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(105, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525457.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(106, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525458.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(107, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525459.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(108, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525460.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(109, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525461.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(110, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525462.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(111, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525463.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(112, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525464.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(113, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525465.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(114, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525466.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(115, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525467.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(116, 'Physique', '', 0, '0', 0, 1, '', '', '', '', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(117, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525468.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(118, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525469.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(119, 'Physique', '', 0, '0', 0, 1, '', '', '', '20200305_16525470.jpg,', '', '', 0, 1, '', 'ffv\n', 0, 0, 0, '2020-04-01', '', 0),
(120, 'Physique', '', 0, '0', 0, 1, '', '', '', '', '', '', 0, 1, '', 'vvv', 0, 0, 0, '2020-04-01', '', 0),
(121, 'Physique', '', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5210.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(122, 'Physique', '', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5211.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(123, 'Physique', '', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5212.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(124, 'Physique', '', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5213.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(125, 'Physique', '', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5214.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(126, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5215.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(127, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5216.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(128, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5217.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(129, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5218.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(130, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5219.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(131, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5220.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(132, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5221.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(133, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5222.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(134, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5223.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(135, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5224.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(136, 'Physique', 'Physique', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5225.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(137, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5226.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(138, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5227.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(139, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5228.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(140, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5229.jpg,', '', '', 0, 1, '', 'ggyy', 0, 0, 0, '2020-04-01', '', 0),
(141, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5230.jpg,', '', '', 0, 1, '', 'yyy\n', 0, 0, 0, '2020-04-01', '', 0),
(142, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5231.jpg,', '', '', 0, 1, '', 'yyy\n', 0, 0, 0, '2020-04-01', '', 0),
(143, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5232.jpg,', '', '', 0, 1, '', 'yyy\n', 0, 0, 0, '2020-04-01', '', 0),
(144, 'Physique', 'Physiqu', 0, '0', 0, 1, '', '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5233.jpg,', '', '', 0, 1, '', 'yyy\n', 0, 0, 0, '2020-04-01', '', 0),
(145, 'fsdfsd', 'fsdfsd', 12, '12', 2, 2, '', '', 'Untitledsdd5.png', 'Untitledsdd5.png', 'Untitledsdd5.png,Untitlessdd7.png', 'Untitledsdd5.png,Untitlessdd7.png', 1, 1, 'fsdfsd', 'sfsdfsds', 0, 0, 0, '2020-04-01', '', 0),
(146, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', '', '', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-01', '', 0),
(147, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', '', '', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-01', '', 0),
(148, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '20200305_16525471.jpg,', '20200305_16525471.jpg,', '', '', 1, 1, 'ffvvvf', 'ffvvvf', 0, 0, 0, '2020-04-01', '', 0),
(149, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '20200305_16525472.jpg,', '20200305_16525472.jpg,', '', '', 1, 1, 'ffvvvf', 'ffvvvf', 0, 0, 0, '2020-04-01', '', 0),
(150, 'fsdfsd', 'fsdfsd', 12, '12', 2, 2, '', '', '', '', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-01', '', 0),
(151, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'Screenshot_20200403-181058.png,Screenshot_20200402-114559.png,', 'Screenshot_20200403-181058.png,Screenshot_20200402-114559.png,', '', '', 1, 1, 'teat', 'teat', 1, 0, 0, '2020-04-01', '', 0),
(152, 'Physique12', 'Physique1', 150, '150', 1, 1, '', '', 'Screenshot_20200403-1810581.png,Screenshot_20200402-1145591.png,', 'Screenshot_20200403-1810581.png,Screenshot_20200402-1145591.png,', '', '', 1, 1, 'teat', 'teat1', 0, 0, 0, '2020-04-01', '', 0),
(153, ' Chimie', ' Chimie', 153, '153', 2, 2, '', '', 'IMG-20200403-WA0001.jpg,Screenshot_20200402-1145592.png,', 'IMG-20200403-WA0001.jpg,Screenshot_20200402-1145592.png,', '', '', 1, 1, 'xxnxjj zjzjjzjsjsjsj', 'xxnxjj zjzjjzjsjsjsj', 0, 0, 0, '2020-04-01', '', 0),
(156, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_1585922879.png', 'Screenshot_1585922879.png', 'demo.txt', 'demo.txt', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-01', '', 0),
(157, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '20200305_16525473.jpg,image-b82d17b3-2c40-4140-bada-df6bf92d8a5234.jpg,', '20200305_16525473.jpg,image-b82d17b3-2c40-4140-bada-df6bf92d8a5234.jpg,', '', '', 1, 1, 'vvbbbbg\n', 'vvbbbbg\n', 0, 0, 0, '2020-04-01', '', 0),
(158, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'afharhrahgrah', 'afharhrahgrah', 0, 0, 0, '2020-04-01', '', 0),
(159, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'vvbbn\n', 'vvbbn\n', 0, 0, 0, '2020-04-01', '', 0),
(160, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'vvbbn\n', 'vvbbn\n', 0, 0, 0, '2020-03-01', '', 0),
(161, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'fggg\n', 'fggg\n', 0, 0, 0, '2020-04-01', '', 0),
(162, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'fggg\n', 'fggg\n', 0, 0, 0, '2020-04-01', '', 0),
(163, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 1, 1, 'ffhfhfh\nfjjt', 'ffhfhfh\nfjjt', 0, 0, 0, '2020-04-01', '', 0),
(164, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 12, 43, 'fjjsjtj\n', 'fjjsjtj\n', 0, 0, 0, '2020-04-01', '', 0),
(165, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 43, 12, 'fsjsgjgjsgngd', 'fsjsgjgjsgngd', 0, 0, 0, '2020-04-01', '', 0),
(166, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '20200305_16525474.jpg', '20200305_16525474.jpg', 'demo.txt', 'demo.txt', 43, 12, 'bbbh\nbb', 'bbbh\nbb', 0, 0, 0, '2020-04-01', '', 0),
(167, 'Physique', 'Physique', 0, '0', 1, 1, '', '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5235.jpg,image-5d8b2662-db8c-40b1-986a-82e2b7d770f31.jpg,image-0aebc343-7638-40da-a78f-22b5a914280f1.jpg', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5235.jpg,image-5d8b2662-db8c-40b1-986a-82e2b7d770f31.jpg,image-0aebc343-7638-40da-a78f-22b5a914280f1.jpg', '.mn_971337981,image-5d8b2662-db8c-40b1-986a-82e2b7d770f31.jpg,image-0aebc343-7638-40da-a78f-22b5a914280f1.jpg', '.mn_971337981,image-5d8b2662-db8c-40b1-986a-82e2b7d770f31.jpg,image-0aebc343-7638-40da-a78f-22b5a914280f1.jpg', 1, 1, 'gghbbb\n', 'gghbbb\n', 0, 0, 0, '2020-04-01', '', 0),
(168, 'Physique', 'Physique', 0, '0', 1, 1, '', '', 'IMG_20200404_000409.jpg,IMG_20200331_003527.jpg,IMG_20200331_003525.jpg', 'IMG_20200404_000409.jpg,IMG_20200331_003527.jpg,IMG_20200331_003525.jpg', 'IMG_20200404_000403.jpg,IMG_20200331_003527.jpg,IMG_20200331_003525.jpg', 'IMG_20200404_000403.jpg,IMG_20200331_003527.jpg,IMG_20200331_003525.jpg', 1, 1, 'this is my first project', 'this is my first project', 0, 0, 0, '2020-04-01', '', 0),
(169, 'fsdfsd', 'fsdfsd', 1200, '1200', 2, 2, '', '', 'Screenshot_from_2020-03-02_18-35-156.png,testw6.png', 'Screenshot_from_2020-03-02_18-35-156.png,testw6.png', 'Untitledsdd11.png,Untitlessdd13.png', 'Untitledsdd11.png,Untitlessdd13.png', 58, 58, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-01', '', 0),
(170, 'Physique', 'Physique', 1110, '1110', 1, 1, '', '', 'IMG_20200404_0004091.jpg,IMG_20200404_000408.jpg,IMG_20200331_0035251.jpg', 'IMG_20200404_0004091.jpg,IMG_20200404_000408.jpg,IMG_20200331_0035251.jpg', 'IMG_20200404_000410.jpg,IMG_20200404_000408.jpg,IMG_20200331_0035251.jpg', 'IMG_20200404_000410.jpg,IMG_20200404_000408.jpg,IMG_20200331_0035251.jpg', 59, 59, 'dESCRIPTION BY sAM', 'dESCRIPTION BY sAM', 0, 0, 0, '2020-04-01', '', 0),
(171, 'Physique', 'Physique', 220, '220', 1, 1, '', '', 'IMG_20200404_0004092.jpg,IMG_20200404_0004081.jpg,IMG_20200331_0035252.jpg', 'IMG_20200404_0004092.jpg,IMG_20200404_0004081.jpg,IMG_20200331_0035252.jpg', 'IMG_20200404_0004093.jpg,IMG_20200404_0004081.jpg,IMG_20200331_0035252.jpg', 'IMG_20200404_0004093.jpg,IMG_20200404_0004081.jpg,IMG_20200331_0035252.jpg', 59, 59, 'Hello THis IS ONLY FOR TESTING PUPOSE', 'Hello THis IS ONLY FOR TESTING PUPOSE', 1, 0, 0, '2020-04-01', '', 0),
(172, 'Physique', 'Physique', 100, '100', 1, 1, '', '', 'IMG-20200409-WA0006.jpg,IMG-20200409-WA0002.jpg,IMG-20200408-WA0043.jpg', 'IMG-20200409-WA0006.jpg,IMG-20200409-WA0002.jpg,IMG-20200408-WA0043.jpg', 'IMG-20200409-WA00061.jpg,IMG-20200409-WA0002.jpg,IMG-20200408-WA0043.jpg', 'IMG-20200409-WA00061.jpg,IMG-20200409-WA0002.jpg,IMG-20200408-WA0043.jpg', 16, 16, 'test description\n', 'test description\n', 4, 4, 0, '2020-04-09', '', 0),
(173, 'Physique', 'Physique', 100, '100', 1, 1, '', '', 'IMG-20200409-WA00062.jpg,IMG-20200409-WA00021.jpg,IMG-20200409-WA0005.jpg', 'IMG-20200409-WA00062.jpg,IMG-20200409-WA00021.jpg,IMG-20200409-WA0005.jpg', 'IMG-20200409-WA00063.jpg,IMG-20200409-WA00021.jpg,IMG-20200409-WA0005.jpg', 'IMG-20200409-WA00063.jpg,IMG-20200409-WA00021.jpg,IMG-20200409-WA0005.jpg', 16, 16, 'this if for the descripti', 'this if for the descripti', 4, 4, 0, '2020-04-09', '', 0),
(174, 'Physique', 'Physique', 133, '133', 1, 1, '', '', 'Screenshot_20200409-164318.png,IMG-20200409-WA0003.jpg,IMG-20200409-WA0004.jpg', 'Screenshot_20200409-164318.png,IMG-20200409-WA0003.jpg,IMG-20200409-WA0004.jpg', 'Screenshot_20200409-1643181.png,IMG-20200409-WA0003.jpg,IMG-20200409-WA0004.jpg', 'Screenshot_20200409-1643181.png,IMG-20200409-WA0003.jpg,IMG-20200409-WA0004.jpg', 58, 58, 'isko pura', 'isko pura', 1, 0, 0, '2020-04-09', '', 0),
(175, 'Physique', 'Physique', 100, '100', 1, 1, '', '', 'Screenshot_20200409-1643182.png,IMG-20200409-WA00041.jpg,IMG-20200409-WA00031.jpg', 'Screenshot_20200409-1643182.png,IMG-20200409-WA00041.jpg,IMG-20200409-WA00031.jpg', 'IMG-20200409-WA0008.jpg,Screenshot_20200409-1643183.png,IMG-20200409-WA00031.jpg', 'IMG-20200409-WA0008.jpg,Screenshot_20200409-1643183.png,IMG-20200409-WA00031.jpg', 58, 58, 'zhzhzhzhhz', 'zhzhzhzhhz', 0, 0, 0, '2020-04-09', '', 0),
(176, 'Physique', 'Physique', 660, '660', 1, 1, '', '', 'IMG-20200409-WA00081.jpg,IMG-20200409-WA0007.jpg,IMG-20200409-WA00042.jpg', 'IMG-20200409-WA00081.jpg,IMG-20200409-WA0007.jpg,IMG-20200409-WA00042.jpg', 'IMG-20200409-WA00071.jpg,IMG-20200409-WA00082.jpg,IMG-20200409-WA00042.jpg', 'IMG-20200409-WA00071.jpg,IMG-20200409-WA00082.jpg,IMG-20200409-WA00042.jpg', 58, 58, 'zznzzhzhhzh', 'zznzzhzhhzh', 1, 0, 0, '2020-04-09', '', 0),
(177, 'Physique', 'Physique', 158, '158', 1, 1, '', '', 'IMG-20200409-WA00083.jpg,IMG-20200409-WA00064.jpg,IMG-20200408-WA0018.jpg', 'IMG-20200409-WA00083.jpg,IMG-20200409-WA00064.jpg,IMG-20200408-WA0018.jpg', 'IMG-20200409-WA00084.jpg,IMG-20200409-WA00064.jpg,IMG-20200408-WA0018.jpg', 'IMG-20200409-WA00084.jpg,IMG-20200409-WA00064.jpg,IMG-20200408-WA0018.jpg', 16, 16, 'ghhn dbsn', 'ghhn dbsn', 4, 4, 0, '2020-04-09', '', 0),
(178, 'Physique', 'Physique', 1220, '1220', 1, 1, '', '', 'IMG-20200409-WA00085.jpg,IMG-20200409-WA00022.jpg,IMG-20200409-WA00065.jpg', 'IMG-20200409-WA00085.jpg,IMG-20200409-WA00022.jpg,IMG-20200409-WA00065.jpg', 'IMG-20200409-WA00086.jpg,IMG-20200409-WA00022.jpg,IMG-20200409-WA00065.jpg', 'IMG-20200409-WA00086.jpg,IMG-20200409-WA00022.jpg,IMG-20200409-WA00065.jpg', 16, 16, 'hs dj xh', 'hs dj xh', 4, 4, 0, '2020-04-09', '', 0),
(179, 'Physique', 'Physique', 0, '0', 1, 1, '', '', 'IMG-20200409-WA0018.jpg,IMG-20200409-WA0016.jpg,IMG-20200409-WA0015.jpg', 'IMG-20200409-WA0018.jpg,IMG-20200409-WA0016.jpg,IMG-20200409-WA0015.jpg', '', '', 1, 1, 'hgggggghhy', 'hgggggghhy', 0, 0, 0, '2020-04-10', '', 0),
(180, 'Physique', 'Physique', 55, '055', 1, 1, '', '', 'IMG-20200409-WA00181.jpg,IMG-20200409-WA00161.jpg,IMG-20200409-WA00151.jpg', 'IMG-20200409-WA00181.jpg,IMG-20200409-WA00161.jpg,IMG-20200409-WA00151.jpg', '', '', 1, 1, 'hgggggghhy', 'hgggggghhy', 0, 0, 0, '2020-04-10', '', 0),
(181, 'Autre', 'Autre', 550, '550', 51, 51, '', '', 'magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A.jpg,magazine-unlock-01-2_3_3982-_2EB5180F33A74EEF9A932C58670CD5A6.jpg,magazine-unlock-05-2_3_3982-_88B8AEC22F4BE58CB45F1F8FE2858DEA.jpg', 'magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A.jpg,magazine-unlock-01-2_3_3982-_2EB5180F33A74EEF9A932C58670CD5A6.jpg,magazine-unlock-05-2_3_3982-_88B8AEC22F4BE58CB45F1F8FE2858DEA.jpg', 'magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A1.jpg,magazine-unlock-01-2_3_3982-_66B2AC769C67ECF8BA13041201F28C8E.jpg,magazine-unlock-05-2_3_3982-_88B8AEC22F4BE58CB45F1F8FE2858DEA.jpg', 'magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A1.jpg,magazine-unlock-01-2_3_3982-_66B2AC769C67ECF8BA13041201F28C8E.jpg,magazine-unlock-05-2_3_3982-_88B8AEC22F4BE58CB45F1F8FE2858DEA.jpg', 12, 12, '', '', 1, 0, 0, '2020-04-11', '', 0),
(182, 'Science Médicale', 'Science Médicale', 50, '50', 6, 6, '', '', 'magazine-unlock-01-2_3_3982-_4E0C3FD87BE4858EDEF6F73FCAB52174.jpg,magazine-unlock-01-2_3_3982-_E7000CCCCC3FAA28C0AC2BC5805DF055.jpg,magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A2.jpg', 'magazine-unlock-01-2_3_3982-_4E0C3FD87BE4858EDEF6F73FCAB52174.jpg,magazine-unlock-01-2_3_3982-_E7000CCCCC3FAA28C0AC2BC5805DF055.jpg,magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A2.jpg', 'magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A3.jpg,magazine-unlock-01-2_3_3982-_E7000CCCCC3FAA28C0AC2BC5805DF055.jpg,magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A2.jpg', 'magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A3.jpg,magazine-unlock-01-2_3_3982-_E7000CCCCC3FAA28C0AC2BC5805DF055.jpg,magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A2.jpg', 1, 1, 'Je jdjsksj', 'Je jdjsksj', 0, 0, 0, '2020-04-11', '', 0),
(183, 'Mécanique', 'Mécanique', 20, '20', 8, 8, '', '', 'Screenshot_20200411_215250_com_frelance.jpg,Screenshot_20200411_215250_com_frelance1.jpg,Screenshot_20200411_215300_com_frelance.jpg', 'Screenshot_20200411_215250_com_frelance.jpg,Screenshot_20200411_215250_com_frelance1.jpg,Screenshot_20200411_215300_com_frelance.jpg', 'magazine-unlock-05-2_3_3982-_1B750737713405994DFCF0D5D5EC1DBD.jpg,Screenshot_20200411_215250_com_frelance1.jpg,Screenshot_20200411_215300_com_frelance.jpg', 'magazine-unlock-05-2_3_3982-_1B750737713405994DFCF0D5D5EC1DBD.jpg,Screenshot_20200411_215250_com_frelance1.jpg,Screenshot_20200411_215300_com_frelance.jpg', 1, 1, 'Me me ', 'Me me ', 1, 0, 0, '2020-04-11', '', 0),
(184, 'Sciences naturelles', 'Sciences naturelles', 30, '30', 45, 45, '', '', 'Screenshot_20200413_153902_com_frelance.jpg,Screenshot_20200413_194705_com_frelance.jpg,Screenshot_20200413_194738.jpg', 'Screenshot_20200413_153902_com_frelance.jpg,Screenshot_20200413_194705_com_frelance.jpg,Screenshot_20200413_194738.jpg', 'magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A4.jpg,magazine-unlock-01-2_3_3982-_66B2AC769C67ECF8BA13041201F28C8E2.jpg,Screenshot_20200413_200006_com_frelance.jpg', 'magazine-unlock-01-2_3_3982-_FA3A83A93AF9B533C5F20C2BC7D58F4A4.jpg,magazine-unlock-01-2_3_3982-_66B2AC769C67ECF8BA13041201F28C8E2.jpg,Screenshot_20200413_200006_com_frelance.jpg', 88, 88, 'I neds yes i need it', 'I neds yes i need it', 1, 0, 0, '2020-04-13', '', 0),
(185, 'Droits/Sciences po', 'Droits/Sciences po', 77, '77', 11, 11, '', '', 'Screenshot_20200413_221046_com_frelance.jpg,Screenshot_20200413_220928_com_frelance.jpg,Screenshot_20200413_221453_com_frelance.jpg', 'Screenshot_20200413_221046_com_frelance.jpg,Screenshot_20200413_220928_com_frelance.jpg,Screenshot_20200413_221453_com_frelance.jpg', '', '', 91, 91, 'Aji ww', 'Aji ww', 0, 0, 0, '2020-04-13', '', 0),
(186, 'Droits/Sciences po', 'Droits/Sciences po', 77, '77', 11, 11, '', '', 'Screenshot_20200413_221046_com_frelance1.jpg,Screenshot_20200413_220928_com_frelance1.jpg,Screenshot_20200413_221453_com_frelance1.jpg', 'Screenshot_20200413_221046_com_frelance1.jpg,Screenshot_20200413_220928_com_frelance1.jpg,Screenshot_20200413_221453_com_frelance1.jpg', '', '', 91, 91, 'Aji ww', 'Aji ww', 1, 0, 88, '2020-04-13', '', 0),
(187, ' Chimie', ' Chimie', 100, '100', 2, 2, '', '', '', '', '', '', 94, 94, 'Hello I am testing\nit is possible\n', 'Hello I am testing\nit is possible\n', 0, 0, 0, '2020-04-14', '', 0),
(188, ' Chimie', ' Chimie', 100, '100', 2, 2, '', '', '', '', '', '', 94, 94, 'Hello I am testing\nit is possible\n', 'Hello I am testing\nit is possible\n', 0, 0, 0, '2020-04-14', '', 0),
(189, 'Ingénierie', 'Ingénierie', 10, '10', 4, 4, '', '', '', '', '', '', 94, 94, 'Hello it is me', 'Hello it is me', 0, 0, 0, '2020-04-14', '', 0),
(190, 'Ingénierie', 'Ingénierie', 10, '10', 4, 4, '', '', 'IMG_20200404_0004101.jpg,IMG_20200404_0004094.jpg,IMG_20200404_0004082.jpg', 'IMG_20200404_0004101.jpg,IMG_20200404_0004094.jpg,IMG_20200404_0004082.jpg', '', '', 94, 94, 'Hello it is me', 'Hello it is me', 0, 0, 0, '2020-04-14', '', 0),
(191, 'Ingénierie', 'Ingénierie', 10, '10', 4, 4, '', '', 'IMG_20200404_0004102.jpg,IMG_20200404_0004095.jpg,IMG_20200404_0004083.jpg', 'IMG_20200404_0004102.jpg,IMG_20200404_0004095.jpg,IMG_20200404_0004083.jpg', 'IMG_20200404_0004096.jpg,IMG_20200404_0004095.jpg,IMG_20200404_0004083.jpg', 'IMG_20200404_0004096.jpg,IMG_20200404_0004095.jpg,IMG_20200404_0004083.jpg', 94, 94, 'Hello it is me', 'Hello it is me', 0, 0, 0, '2020-04-14', '', 0),
(192, 'Ingénierie', 'Ingénierie', 10, '10', 4, 4, '', '', 'IMG_20200404_0004103.jpg,IMG_20200404_0004097.jpg,IMG_20200404_0004084.jpg', 'IMG_20200404_0004103.jpg,IMG_20200404_0004097.jpg,IMG_20200404_0004084.jpg', 'IMG_20200404_0004098.jpg,IMG_20200404_0004097.jpg,IMG_20200404_0004084.jpg', 'IMG_20200404_0004098.jpg,IMG_20200404_0004097.jpg,IMG_20200404_0004084.jpg', 94, 94, 'Hello it is me', 'Hello it is me', 0, 0, 0, '2020-04-14', '', 0),
(193, 'fsdfsd', 'fsdfsd', 1200, '1200', 2, 2, '', '', '', '', '', '', 58, 58, 'sfsdfsds', 'sfsdfsds', 0, 0, 88, '2020-04-14', '', 0),
(194, 'Physique', 'Physique', 100, '100', 1, 1, '', '', 'IMG-20200414-WA0013.jpg,IMG-20200414-WA0012.jpg,IMG-20200414-WA0009.jpg', 'IMG-20200414-WA0013.jpg,IMG-20200414-WA0012.jpg,IMG-20200414-WA0009.jpg', 'IMG-20200414-WA00131.jpg,IMG-20200414-WA0012.jpg,IMG-20200414-WA0009.jpg', 'IMG-20200414-WA00131.jpg,IMG-20200414-WA0012.jpg,IMG-20200414-WA0009.jpg', 86, 86, 'znzjzj', 'znzjzj', 0, 0, 88, '2020-04-14', '', 0),
(195, 'Ingénierie', 'Ingénierie', 5555, '5555', 4, 4, '', '', 'IMG-20200414-WA0027.jpg,IMG-20200414-WA0010.jpg,IMG-20200414-WA0003.jpg', 'IMG-20200414-WA0027.jpg,IMG-20200414-WA0010.jpg,IMG-20200414-WA0003.jpg', 'IMG-20200414-WA00101.jpg,IMG-20200414-WA0010.jpg,IMG-20200414-WA0003.jpg', 'IMG-20200414-WA00101.jpg,IMG-20200414-WA0010.jpg,IMG-20200414-WA0003.jpg', 90, 90, 'Anaaa w ntaaaaa w Zaman tawil', 'Anaaa w ntaaaaa w Zaman tawil', 1, 0, 88, '2020-04-14', '', 0),
(196, 'Science Médicale', 'Science Médicale', 60, '60', 6, 6, '', '', 'IMG-20200413-WA0042.jpg,Screenshot_20200413_224054_com_instagram_android.jpg,Screenshot_20200413_224100_com_instagram_android.jpg', 'IMG-20200413-WA0042.jpg,Screenshot_20200413_224054_com_instagram_android.jpg,Screenshot_20200413_224100_com_instagram_android.jpg', '', '', 96, 96, 'Hey I wanna help. For my exam please ', 'Hey I wanna help. For my exam please ', 0, 0, 0, '2020-04-14', '', 0),
(197, 'Science Médicale', 'Science Médicale', 60, '60', 6, 6, '', '', 'IMG-20200413-WA00421.jpg,Screenshot_20200413_224054_com_instagram_android1.jpg,Screenshot_20200413_224100_com_instagram_android1.jpg', 'IMG-20200413-WA00421.jpg,Screenshot_20200413_224054_com_instagram_android1.jpg,Screenshot_20200413_224100_com_instagram_android1.jpg', '', '', 96, 96, 'Hey I wanna help. For my exam please ', 'Hey I wanna help. For my exam please ', 0, 0, 0, '2020-04-14', '', 0),
(198, 'Science Médicale', 'Science Médicale', 60, '60', 6, 6, '', '', 'IMG-20200413-WA00422.jpg,Screenshot_20200413_224054_com_instagram_android2.jpg,Screenshot_20200413_224100_com_instagram_android2.jpg', 'IMG-20200413-WA00422.jpg,Screenshot_20200413_224054_com_instagram_android2.jpg,Screenshot_20200413_224100_com_instagram_android2.jpg', '', '', 96, 96, 'Hey I wanna help. For my exam please ', 'Hey I wanna help. For my exam please ', 0, 0, 98, '2020-04-14', '', 0),
(199, 'Mécanique', 'Mécanique', 351, '351', 8, 8, '', '', 'IMG-20200413-WA0034.jpg,IMG-20200413-WA0033.jpg,IMG-20200413-WA0032.jpg', 'IMG-20200413-WA0034.jpg,IMG-20200413-WA0033.jpg,IMG-20200413-WA0032.jpg', '', '', 96, 96, 'Ibnee', 'Ibnee', 0, 0, 98, '2020-04-14', '', 0),
(200, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_15859228791.png', 'Screenshot_15859228791.png', 'demo.txt', 'demo.txt', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(201, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', '', '', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(202, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_15859228792.png', 'Screenshot_15859228792.png', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(203, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_15859228793.png', 'Screenshot_15859228793.png', 'demo.txt', 'demo.txt', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(204, 'Mathématiques', 'Mathématiques', 0, '0', 3, 3, '', '', '', '', '', '', 95, 95, 'GDFGDG', 'GDFGDG', 0, 0, 0, '2020-04-15', '', 0),
(205, 'Mathématiques', 'Mathématiques', 10, '10', 3, 3, '', '', '', '', '', '', 95, 95, 'GDFGDG', 'GDFGDG', 0, 0, 0, '2020-04-15', '', 0),
(206, ' Chimie', ' Chimie', 10, '10', 2, 2, '', '', '', '', '', '', 95, 95, 'testing for chemi\n', 'testing for chemi\n', 0, 0, 0, '2020-04-15', '', 0),
(207, ' Chimie', ' Chimie', 10, '10', 2, 2, '', '', '', '', '', '', 95, 95, 'testing for chemi\n', 'testing for chemi\n', 0, 0, 0, '2020-04-15', '', 0),
(208, ' Chimie', ' Chimie', 10, '10', 2, 2, '', '', '', '', 'IMG_20200404_0004099.jpg', 'IMG_20200404_0004099.jpg', 95, 95, 'testing for chemi\n', 'testing for chemi\n', 0, 0, 0, '2020-04-15', '', 0),
(209, ' Chimie', ' Chimie', 10, '10', 2, 2, '', '', 'IMG_20200404_0004104.jpg,IMG_20200404_00040910.jpg,IMG_20200404_0004085.jpg', 'IMG_20200404_0004104.jpg,IMG_20200404_00040910.jpg,IMG_20200404_0004085.jpg', 'IMG_20200404_00040911.jpg,IMG_20200404_00040910.jpg,IMG_20200404_0004085.jpg', 'IMG_20200404_00040911.jpg,IMG_20200404_00040910.jpg,IMG_20200404_0004085.jpg', 95, 95, 'testing for chemi\n', 'testing for chemi\n', 0, 0, 0, '2020-04-15', '', 0),
(210, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', '', '', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(211, ' Chimie', ' Chimie', 0, '0', 2, 2, '', '', '', '', '', '', 95, 95, 'fsdsdd', 'fsdsdd', 0, 0, 0, '2020-04-15', '', 0),
(212, ' Chimie', ' Chimie', 0, '0', 2, 2, '', '', '', '', '', '', 95, 95, 'fsdsdd', 'fsdsdd', 0, 0, 0, '2020-04-15', '', 0),
(213, 'Mathématiques', 'Mathématiques', 0, '0', 3, 3, '', '', '', '', '', '', 95, 95, 'test', 'test', 0, 0, 0, '2020-04-15', '', 0),
(214, 'Bureautique & macro', 'Bureautique & macro', 0, '0', 46, 46, '', '', '', '', '', '', 95, 95, 'fg', 'fg', 0, 0, 0, '2020-04-15', '', 0),
(215, 'Bureautique & macro', 'Bureautique & macro', 0, '0', 46, 46, '', '', '', '', '', '', 95, 95, 'fg', 'fg', 0, 0, 0, '2020-04-15', '', 0),
(216, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_15859228794.png', 'Screenshot_15859228794.png', 'demo.txt', 'demo.txt', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(217, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', '', '', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(218, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_15859228795.png', 'Screenshot_15859228795.png', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(219, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_15859228796.png', 'Screenshot_15859228796.png', 'demo.txt', 'demo.txt', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(220, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', '', '', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(221, 'fsdfsd', 'fsdfsd', 1200, '1200', 2, 2, '', '', '', '', '', '', 58, 58, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(222, 'fsdfsd', 'fsdfsd', 1200, '1200', 2, 2, '', '', '', '', '', '', 58, 58, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(223, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', '', '', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(224, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_15859228797.png', 'Screenshot_15859228797.png', '', '', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(225, 'fsdfsd', 'fsdfsd', 12, '12', 12, 12, '', '', 'Screenshot_15859228798.png', 'Screenshot_15859228798.png', 'demo.txt', 'demo.txt', 1, 1, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-15', '', 0),
(226, ' Chimie', ' Chimie', 0, '0', 2, 2, '', '', '', '', '', '', 95, 95, 'fdsfdsfdf', 'fdsfdsfdf', 0, 0, 0, '2020-04-15', '', 0),
(227, ' Chimie', ' Chimie', 10, '10', 2, 2, '', '', '', '', 'IMG_20200404_00040912.jpg', 'IMG_20200404_00040912.jpg', 95, 95, 'Without images sahreing', 'Without images sahreing', 0, 0, 0, '2020-04-15', '', 0),
(228, 'Mathématiques', 'Mathématiques', 10, '10', 3, 3, '', '', '', '', 'IMG_20200404_00040913.jpg', 'IMG_20200404_00040913.jpg', 95, 95, 'f', 'f', 0, 0, 0, '2020-04-15', '', 0),
(229, ' Chimie', ' Chimie', 0, '0', 2, 2, '', '', 'IMG_20200404_00040914.jpg,IMG_20200404_0004086.jpg,IMG_20200404_00040915.jpg,IMG_20200331_0035271.jpg', 'IMG_20200404_00040914.jpg,IMG_20200404_0004086.jpg,IMG_20200404_00040915.jpg,IMG_20200331_0035271.jpg', 'IMG_20200404_0004105.jpg,IMG_20200404_0004086.jpg,IMG_20200404_00040915.jpg,IMG_20200331_0035271.jpg', 'IMG_20200404_0004105.jpg,IMG_20200404_0004086.jpg,IMG_20200404_00040915.jpg,IMG_20200331_0035271.jpg', 95, 95, 'a', 'a', 0, 0, 0, '2020-04-15', '', 0),
(230, 'Mathématiques', 'Mathématiques', 0, '0', 3, 3, '', '', '', '', '', '', 95, 95, 'a', 'a', 0, 0, 0, '2020-04-15', '', 0),
(231, 'Ingénierie', 'Ingénierie', 10, '10', 4, 4, '', '', 'IMG_20200404_00040916.jpg,IMG_20200404_0004087.jpg,IMG_20200404_00040917.jpg,IMG_20200331_0035272.jpg', 'IMG_20200404_00040916.jpg,IMG_20200404_0004087.jpg,IMG_20200404_00040917.jpg,IMG_20200331_0035272.jpg', '', '', 95, 95, 's', 's', 0, 0, 0, '2020-04-15', '', 0),
(232, 'Inforgraphie & Outlis CAO', 'Inforgraphie & Outlis CAO', 0, '0', 10, 10, '', '', '', '', 'IMG_20200404_0004088.jpg', 'IMG_20200404_0004088.jpg', 95, 95, 'text', 'text', 0, 0, 0, '2020-04-15', '', 0),
(233, 'Mathématiques', 'Mathématiques', 0, '0', 3, 3, '', '', 'Screenshot_20200416_010659_com_frelance.jpg,Screenshot_20200415_075914_com_frelance.jpg,Screenshot_20200416_010659_com_frelance1.jpg', 'Screenshot_20200416_010659_com_frelance.jpg,Screenshot_20200415_075914_com_frelance.jpg,Screenshot_20200416_010659_com_frelance1.jpg', 'ADMINPANEL09_04_2020.xlsx,Screenshot_20200415_075914_com_frelance.jpg,Screenshot_20200416_010659_com_frelance1.jpg', 'ADMINPANEL09_04_2020.xlsx,Screenshot_20200415_075914_com_frelance.jpg,Screenshot_20200416_010659_com_frelance1.jpg', 98, 98, '1 tes ', '1 tes ', 0, 0, 0, '2020-04-15', '', 0),
(234, 'Mathématiques', 'Mathématiques', 0, '0', 3, 3, '', '', 'Screenshot_20200416_010659_com_frelance2.jpg,Screenshot_20200415_075914_com_frelance1.jpg,Screenshot_20200416_010659_com_frelance3.jpg', 'Screenshot_20200416_010659_com_frelance2.jpg,Screenshot_20200415_075914_com_frelance1.jpg,Screenshot_20200416_010659_com_frelance3.jpg', 'ADMINPANEL09_04_20201.xlsx,Screenshot_20200415_075914_com_frelance1.jpg,Screenshot_20200416_010659_com_frelance3.jpg', 'ADMINPANEL09_04_20201.xlsx,Screenshot_20200415_075914_com_frelance1.jpg,Screenshot_20200416_010659_com_frelance3.jpg', 98, 98, '1 tes ', '1 tes ', 0, 0, 0, '2020-04-15', '', 0),
(235, 'Electricite & Electronique', 'Electricite & Electronique', 0, '', 7, 7, '', '', 'IMG-20200415-WA0005.jpg,IMG-20200415-WA0004.jpg,IMG-20200415-WA0003.jpg', 'IMG-20200415-WA0005.jpg,IMG-20200415-WA0004.jpg,IMG-20200415-WA0003.jpg', '', '', 100, 100, 'I need', 'I need', 1, 0, 100, '2020-04-15', '', 0),
(236, ' Chimie', ' Chimie', 0, '0', 2, 2, '', '', 'Screenshot_20200416_014208.jpg,Screenshot_20200416_014145_com_frelance.jpg,Screenshot_20200416_013631.jpg', 'Screenshot_20200416_014208.jpg,Screenshot_20200416_014145_com_frelance.jpg,Screenshot_20200416_013631.jpg', '', '', 102, 102, 'Gggt', 'Gggt', 1, 0, 102, '2020-04-16', '', 0),
(237, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA0007.jpg,IMG-20200415-WA00041.jpg,IMG-20200415-WA00071.jpg', 'IMG-20200415-WA0007.jpg,IMG-20200415-WA00041.jpg,IMG-20200415-WA00071.jpg', 'IMG-20200416-WA0005.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA0015.jpg,IMG-20200415-WA00072.jpg', 'IMG-20200416-WA0005.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA0015.jpg,IMG-20200415-WA00072.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(238, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA00073.jpg,IMG-20200415-WA00042.jpg,IMG-20200415-WA00074.jpg', 'IMG-20200415-WA00073.jpg,IMG-20200415-WA00042.jpg,IMG-20200415-WA00074.jpg', 'IMG-20200416-WA00051.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00151.jpg,IMG-20200415-WA00075.jpg', 'IMG-20200416-WA00051.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00151.jpg,IMG-20200415-WA00075.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(239, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA00076.jpg,IMG-20200415-WA00043.jpg,IMG-20200415-WA00077.jpg', 'IMG-20200415-WA00076.jpg,IMG-20200415-WA00043.jpg,IMG-20200415-WA00077.jpg', 'IMG-20200416-WA00052.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00152.jpg,IMG-20200415-WA00078.jpg', 'IMG-20200416-WA00052.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00152.jpg,IMG-20200415-WA00078.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(240, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA00079.jpg,IMG-20200415-WA00044.jpg,IMG-20200415-WA000710.jpg', 'IMG-20200415-WA00079.jpg,IMG-20200415-WA00044.jpg,IMG-20200415-WA000710.jpg', 'IMG-20200416-WA00053.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00153.jpg,IMG-20200415-WA000711.jpg', 'IMG-20200416-WA00053.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00153.jpg,IMG-20200415-WA000711.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0);
INSERT INTO `mission` (`mission_id`, `title`, `mission_title`, `mission_budget`, `budget`, `mission_category`, `project_category`, `mission_budget_currency`, `currency`, `mission_image`, `image`, `mission_doc`, `file`, `user_id`, `client_id`, `mission_description`, `description`, `mission_status`, `status`, `accepted_by`, `created`, `bank_fee`, `satisfy`) VALUES
(241, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000712.jpg,IMG-20200415-WA00045.jpg,IMG-20200415-WA000713.jpg', 'IMG-20200415-WA000712.jpg,IMG-20200415-WA00045.jpg,IMG-20200415-WA000713.jpg', 'IMG-20200416-WA00054.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00154.jpg,IMG-20200415-WA000714.jpg', 'IMG-20200416-WA00054.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00154.jpg,IMG-20200415-WA000714.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(242, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000715.jpg,IMG-20200415-WA00046.jpg,IMG-20200415-WA000716.jpg', 'IMG-20200415-WA000715.jpg,IMG-20200415-WA00046.jpg,IMG-20200415-WA000716.jpg', 'IMG-20200416-WA00055.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00155.jpg,IMG-20200415-WA000717.jpg', 'IMG-20200416-WA00055.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00155.jpg,IMG-20200415-WA000717.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(243, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000718.jpg,IMG-20200415-WA00047.jpg,IMG-20200415-WA000719.jpg', 'IMG-20200415-WA000718.jpg,IMG-20200415-WA00047.jpg,IMG-20200415-WA000719.jpg', 'IMG-20200416-WA00056.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00156.jpg,IMG-20200415-WA000720.jpg', 'IMG-20200416-WA00056.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00156.jpg,IMG-20200415-WA000720.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(244, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000721.jpg,IMG-20200415-WA00048.jpg,IMG-20200415-WA000722.jpg', 'IMG-20200415-WA000721.jpg,IMG-20200415-WA00048.jpg,IMG-20200415-WA000722.jpg', 'IMG-20200416-WA00057.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00157.jpg,IMG-20200415-WA000723.jpg', 'IMG-20200416-WA00057.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00157.jpg,IMG-20200415-WA000723.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(245, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000724.jpg,IMG-20200415-WA00049.jpg,IMG-20200415-WA000725.jpg', 'IMG-20200415-WA000724.jpg,IMG-20200415-WA00049.jpg,IMG-20200415-WA000725.jpg', 'IMG-20200416-WA00058.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00158.jpg,IMG-20200415-WA000726.jpg', 'IMG-20200416-WA00058.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00158.jpg,IMG-20200415-WA000726.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(246, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000727.jpg,IMG-20200415-WA000410.jpg,IMG-20200415-WA000728.jpg', 'IMG-20200415-WA000727.jpg,IMG-20200415-WA000410.jpg,IMG-20200415-WA000728.jpg', 'IMG-20200416-WA00059.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00159.jpg,IMG-20200415-WA000729.jpg', 'IMG-20200416-WA00059.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA00159.jpg,IMG-20200415-WA000729.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(247, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000730.jpg,IMG-20200415-WA000411.jpg,IMG-20200415-WA000731.jpg', 'IMG-20200415-WA000730.jpg,IMG-20200415-WA000411.jpg,IMG-20200415-WA000731.jpg', 'IMG-20200416-WA000510.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001510.jpg,IMG-20200415-WA000732.jpg', 'IMG-20200416-WA000510.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001510.jpg,IMG-20200415-WA000732.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(248, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000733.jpg,IMG-20200415-WA000412.jpg,IMG-20200415-WA000734.jpg', 'IMG-20200415-WA000733.jpg,IMG-20200415-WA000412.jpg,IMG-20200415-WA000734.jpg', 'IMG-20200416-WA000511.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001511.jpg,IMG-20200415-WA000735.jpg', 'IMG-20200416-WA000511.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001511.jpg,IMG-20200415-WA000735.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(249, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000736.jpg,IMG-20200415-WA000413.jpg,IMG-20200415-WA000737.jpg', 'IMG-20200415-WA000736.jpg,IMG-20200415-WA000413.jpg,IMG-20200415-WA000737.jpg', 'IMG-20200416-WA000512.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001512.jpg,IMG-20200415-WA000738.jpg', 'IMG-20200416-WA000512.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001512.jpg,IMG-20200415-WA000738.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(250, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000739.jpg,IMG-20200415-WA000414.jpg,IMG-20200415-WA000740.jpg', 'IMG-20200415-WA000739.jpg,IMG-20200415-WA000414.jpg,IMG-20200415-WA000740.jpg', 'IMG-20200416-WA000513.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001513.jpg,IMG-20200415-WA000741.jpg', 'IMG-20200416-WA000513.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001513.jpg,IMG-20200415-WA000741.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(251, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000742.jpg,IMG-20200415-WA000415.jpg,IMG-20200415-WA000743.jpg', 'IMG-20200415-WA000742.jpg,IMG-20200415-WA000415.jpg,IMG-20200415-WA000743.jpg', 'IMG-20200416-WA000514.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001514.jpg,IMG-20200415-WA000744.jpg', 'IMG-20200416-WA000514.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001514.jpg,IMG-20200415-WA000744.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(252, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000745.jpg,IMG-20200415-WA000416.jpg,IMG-20200415-WA000746.jpg', 'IMG-20200415-WA000745.jpg,IMG-20200415-WA000416.jpg,IMG-20200415-WA000746.jpg', 'IMG-20200416-WA000515.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001515.jpg,IMG-20200415-WA000747.jpg', 'IMG-20200416-WA000515.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001515.jpg,IMG-20200415-WA000747.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(253, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000748.jpg,IMG-20200415-WA000417.jpg,IMG-20200415-WA000749.jpg', 'IMG-20200415-WA000748.jpg,IMG-20200415-WA000417.jpg,IMG-20200415-WA000749.jpg', 'IMG-20200416-WA000516.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001516.jpg,IMG-20200415-WA000750.jpg', 'IMG-20200416-WA000516.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001516.jpg,IMG-20200415-WA000750.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(254, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000751.jpg,IMG-20200415-WA000418.jpg,IMG-20200415-WA000752.jpg', 'IMG-20200415-WA000751.jpg,IMG-20200415-WA000418.jpg,IMG-20200415-WA000752.jpg', 'IMG-20200416-WA000517.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001517.jpg,IMG-20200415-WA000753.jpg', 'IMG-20200416-WA000517.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001517.jpg,IMG-20200415-WA000753.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(255, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000754.jpg,IMG-20200415-WA000419.jpg,IMG-20200415-WA000755.jpg', 'IMG-20200415-WA000754.jpg,IMG-20200415-WA000419.jpg,IMG-20200415-WA000755.jpg', 'IMG-20200416-WA000518.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001518.jpg,IMG-20200415-WA000756.jpg', 'IMG-20200416-WA000518.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001518.jpg,IMG-20200415-WA000756.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(256, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000757.jpg,IMG-20200415-WA000420.jpg,IMG-20200415-WA000758.jpg', 'IMG-20200415-WA000757.jpg,IMG-20200415-WA000420.jpg,IMG-20200415-WA000758.jpg', 'IMG-20200416-WA000519.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001519.jpg,IMG-20200415-WA000759.jpg', 'IMG-20200416-WA000519.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001519.jpg,IMG-20200415-WA000759.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(257, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000760.jpg,IMG-20200415-WA000421.jpg,IMG-20200415-WA000761.jpg', 'IMG-20200415-WA000760.jpg,IMG-20200415-WA000421.jpg,IMG-20200415-WA000761.jpg', 'IMG-20200416-WA000520.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001520.jpg,IMG-20200415-WA000762.jpg', 'IMG-20200416-WA000520.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001520.jpg,IMG-20200415-WA000762.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(258, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000763.jpg,IMG-20200415-WA000422.jpg,IMG-20200415-WA000764.jpg', 'IMG-20200415-WA000763.jpg,IMG-20200415-WA000422.jpg,IMG-20200415-WA000764.jpg', 'IMG-20200416-WA000521.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001521.jpg,IMG-20200415-WA000765.jpg', 'IMG-20200416-WA000521.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001521.jpg,IMG-20200415-WA000765.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(259, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200415-WA000766.jpg,IMG-20200415-WA000423.jpg,IMG-20200415-WA000767.jpg', 'IMG-20200415-WA000766.jpg,IMG-20200415-WA000423.jpg,IMG-20200415-WA000767.jpg', 'IMG-20200416-WA000522.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001522.jpg,IMG-20200415-WA000768.jpg', 'IMG-20200416-WA000522.jpg,VID-20200416-WA0003.mp4,IMG-20200415-WA001522.jpg,IMG-20200415-WA000768.jpg', 86, 86, 'ggggvvvvv', 'ggggvvvvv', 0, 0, 0, '2020-04-16', '', 0),
(260, 'Physique', 'Physique', 150, '150', 1, 1, '', '', 'IMG-20200416-WA0003.jpg,IMG-20200415-WA0047.jpg,IMG-20200416-WA0002.jpg', 'IMG-20200416-WA0003.jpg,IMG-20200415-WA0047.jpg,IMG-20200416-WA0002.jpg', 'IMG-20200416-WA00031.jpg,IMG-20200415-WA0047.jpg,IMG-20200416-WA0002.jpg', 'IMG-20200416-WA00031.jpg,IMG-20200415-WA0047.jpg,IMG-20200416-WA0002.jpg', 16, 16, 'she znzn', 'she znzn', 4, 4, 16, '2020-04-16', '', 0),
(261, 'Ingénierie', 'Ingénierie', 100, '100', 4, 4, '', '', '1586975310785.png,1586975299667.png,1586975304782.png', '1586975310785.png,1586975299667.png,1586975304782.png', '', '', 104, 104, 'Art is testing', 'Art is testing', 0, 0, 0, '2020-04-16', '', 0),
(262, 'Physique', 'Physique', 20, '20', 1, 1, '', '', '1586975299667.png,1586975310785.png,1586975307628.png,1586975211600.png', '1586975299667.png,1586975310785.png,1586975307628.png,1586975211600.png', '', '', 104, 104, 'art second testing', 'art second testing', 0, 0, 105, '2020-04-16', '', 0),
(263, 'Physique', 'Physique', 1000, '1000', 1, 1, '', '', 'IMG-20200416-WA0001.jpg,IMG-20200415-WA000769.jpg,IMG-20200415-WA000424.jpg', 'IMG-20200416-WA0001.jpg,IMG-20200415-WA000769.jpg,IMG-20200415-WA000424.jpg', 'IMG-20200415-WA0001.jpg,IMG-20200415-WA000769.jpg,IMG-20200415-WA000424.jpg', 'IMG-20200415-WA0001.jpg,IMG-20200415-WA000769.jpg,IMG-20200415-WA000424.jpg', 86, 86, 'zbzhzjj', 'zbzhzjj', 0, 0, 0, '2020-04-16', '', 0),
(264, 'Physique', 'Physique', 1000, '1000', 1, 1, '', '', 'IMG-20200416-WA00011.jpg,IMG-20200415-WA000770.jpg,IMG-20200415-WA000425.jpg', 'IMG-20200416-WA00011.jpg,IMG-20200415-WA000770.jpg,IMG-20200415-WA000425.jpg', 'IMG-20200415-WA00011.jpg,IMG-20200415-WA000770.jpg,IMG-20200415-WA000425.jpg', 'IMG-20200415-WA00011.jpg,IMG-20200415-WA000770.jpg,IMG-20200415-WA000425.jpg', 86, 86, 'zbzhzjj', 'zbzhzjj', 0, 0, 0, '2020-04-16', '', 0),
(265, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 86, 86, 'znznznzn', 'znznznzn', 0, 0, 0, '2020-04-16', '', 0),
(266, 'fsdfsd kjbkjb', 'fsdfsd kjbkjb', 1200, '1200', 2, 2, '', '', '', '', '', '', 58, 58, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-16', '', 0),
(267, 'fsdfsd kjbkjb', 'fsdfsd kjbkjb', 1200, '1200', 2, 2, '', '', '', '', '', '', 58, 58, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-16', '', 0),
(268, 'Art math testing title', 'Art math testing title', 30, '30', 3, 3, '', '', 'IMG_20200404_00040918.jpg,IMG_20200404_0004089.jpg,IMG_20200404_0004106.jpg', 'IMG_20200404_00040918.jpg,IMG_20200404_0004089.jpg,IMG_20200404_0004106.jpg', '', '', 104, 104, 'art math desc', 'art math desc', 0, 0, 86, '2020-04-16', '', 0),
(269, 'Physique', 'Physique', 0, '0', 1, 1, '', '', '', '', '', '', 86, 86, 'ffffcc', 'ffffcc', 0, 0, 16, '2020-04-16', '', 0),
(270, 'Physique', 'Physique', 100, '100', 1, 1, '', '', '', '', '', '', 107, 107, 'hxxjjx djsj', 'hxxjjx djsj', 0, 0, 104, '2020-04-16', '', 0),
(271, 'dfsdfsdfsdfsdf', 'dfsdfsdfsdfsdf', 850, '850', 2, 2, '', '', '', '', '', '', 104, 104, 'dsfsdfsdfdsfsdfdsf', 'dsfsdfsdfdsfsdfdsf', 0, 0, 0, '2020-04-16', '', 0),
(272, 'ARW DEMO', 'ARW DEMO', 10, '10', 4, 4, '', '', 'IMG_20200404_00040919.jpg,IMG_20200404_00040810.jpg,IMG_20200404_0004107.jpg', 'IMG_20200404_00040919.jpg,IMG_20200404_00040810.jpg,IMG_20200404_0004107.jpg', '', '', 109, 109, 'ARW DESC', 'ARW DESC', 2, 0, 110, '2020-04-16', '', 0),
(273, 'yyuu, ', 'yyuu, ', 0, '0', 1, 1, '', '', 'IMG_20200401_191708.jpg,IMG_20200401_191711.jpg,Screenshot_20200404_023629_com_superking_parchisi_star.jpg,Screenshot_20200416_233246_com_frelance.jpg', 'IMG_20200401_191708.jpg,IMG_20200401_191711.jpg,Screenshot_20200404_023629_com_superking_parchisi_star.jpg,Screenshot_20200416_233246_com_frelance.jpg', '', '', 112, 112, 'Uhjj', 'Uhjj', 0, 0, 112, '2020-04-16', '', 0),
(274, 'tgf', 'tgf', 100, '100', 1, 1, '', '', 'IMG-20200417-WA0004.jpg,IMG-20200417-WA0003.jpg,IMG-20200416-WA00012.jpg', 'IMG-20200417-WA0004.jpg,IMG-20200417-WA0003.jpg,IMG-20200416-WA00012.jpg', 'IMG-20200415-WA000771.jpg,IMG-20200417-WA0003.jpg,IMG-20200416-WA00012.jpg', 'IMG-20200415-WA000771.jpg,IMG-20200417-WA0003.jpg,IMG-20200416-WA00012.jpg', 86, 86, 'snsbb ', 'snsbb ', 0, 0, 0, '2020-04-17', '', 0),
(275, 'jsjs', 'jsjs', 10, '10', 1, 1, '', '', '', '', '', '', 86, 86, 'esjsjjsj', 'esjsjjsj', 0, 0, 0, '2020-04-17', '', 0),
(276, 'sjsjjs', 'sjsjjs', 0, '0', 1, 1, '', '', '', '', '', '', 86, 86, '', '', 0, 0, 0, '2020-04-17', '', 0),
(277, 'this is foe djxj', 'this is foe djxj', 250, '250', 6, 6, '', '', 'IMG-20200413-WA0008.jpg,IMG-20200413-WA0010.jpg,IMG-20200413-WA0006.jpg', 'IMG-20200413-WA0008.jpg,IMG-20200413-WA0010.jpg,IMG-20200413-WA0006.jpg', 'IMG-20200416-WA0008.jpg,IMG-20200417-WA00031.jpg,IMG-20200414-WA0024.jpg', 'IMG-20200416-WA0008.jpg,IMG-20200417-WA00031.jpg,IMG-20200414-WA0024.jpg', 86, 86, 'zjzjzj', 'zjzjzj', 0, 0, 0, '2020-04-17', '', 0),
(278, 'fsdfsd kjbkjb', 'fsdfsd kjbkjb', 1200, '1200', 2, 2, '', '', 'd.png,Untitled.png', 'd.png,Untitled.png', 'Anchalik_Agniban_16_april.pdf,Untitled.png', 'Anchalik_Agniban_16_april.pdf,Untitled.png', 58, 58, 'sfsdfsds', 'sfsdfsds', 0, 0, 0, '2020-04-17', '', 0),
(279, 'fsdfsd kjbkjb', 'fsdfsd kjbkjb', 1200, '1200', 2, 2, '', '', '1.png,2.png', '1.png,2.png', 'Anchalik_Agniban_16_april1.pdf', 'Anchalik_Agniban_16_april1.pdf', 58, 58, 'sfsdfsds', 'sfsdfsds', 0, 0, 86, '2020-04-17', '', 0),
(280, 'xcj hhv ', 'xcj hhv ', 150, '150', 1, 1, '', '', 'IMG-20200417-WA0014.jpg,IMG-20200417-WA0018.jpg,IMG-20200417-WA0006.jpg', 'IMG-20200417-WA0014.jpg,IMG-20200417-WA0018.jpg,IMG-20200417-WA0006.jpg', 'IMG-20200417-WA0007.jpg', 'IMG-20200417-WA0007.jpg', 16, 16, 'vfj ggg', 'vfj ggg', 3, 0, 16, '2020-04-17', '', 0),
(281, 'ueue', 'ueue', 15, '15', 3, 3, '', '', 'magazine-unlock-01-2_3_4052-_CBCE58A3544F4D807FD859AC778EBCEE.jpg,magazine-unlock-05-2_3_4052-_39EA89247B09D3ED1842D90B5B544BAE.jpg,magazine-unlock-05-2_3_4052-_3CA7B4F331A7C632A69FAA8E730F0329.jpg', 'magazine-unlock-01-2_3_4052-_CBCE58A3544F4D807FD859AC778EBCEE.jpg,magazine-unlock-05-2_3_4052-_39EA89247B09D3ED1842D90B5B544BAE.jpg,magazine-unlock-05-2_3_4052-_3CA7B4F331A7C632A69FAA8E730F0329.jpg', '', '', 113, 113, 'Sjsj', 'Sjsj', 1, 0, 113, '2020-04-17', '', 0),
(282, 'chimies testing', 'chimies testing', 0, '0', 2, 2, '', '', '', '', '', '', 109, 109, '', '', 0, 0, 0, '2020-04-17', '', 0),
(283, 'chimmi', 'chimmi', 110, '110', 2, 2, '', '', 'IMG_20200404_0004108.jpg', 'IMG_20200404_0004108.jpg', '', '', 109, 109, 'ss', 'ss', 0, 0, 0, '2020-04-17', '', 0),
(284, 'morre images to upl;oad', 'morre images to upl;oad', 20, '20', 1, 1, '', '', 'IMG_20200404_0004109.jpg,IMG_20200404_00040920.jpg,IMG_20200331_0035273.jpg,IMG_20200404_0004031.jpg,IMG_20200404_00040811.jpg,IMG_20200331_0035253.jpg', 'IMG_20200404_0004109.jpg,IMG_20200404_00040920.jpg,IMG_20200331_0035273.jpg,IMG_20200404_0004031.jpg,IMG_20200404_00040811.jpg,IMG_20200331_0035253.jpg', '1587051382377.png', '1587051382377.png', 109, 109, 'dfsdddsfdsfsd', 'dfsdddsfdsfsd', 0, 0, 110, '2020-04-17', '', 0),
(285, 'sbjjsnn', 'sbjjsnn', 150, '150', 1, 1, '', '', 'IMG-20200418-WA0016.jpg,IMG-20200418-WA0013.jpg,IMG-20200417-WA0017.jpg', 'IMG-20200418-WA0016.jpg,IMG-20200418-WA0013.jpg,IMG-20200417-WA0017.jpg', 'IMG-20200418-WA0017.jpg', 'IMG-20200418-WA0017.jpg', 86, 86, 'snsnsns sjsnzn', 'snsnsns sjsnzn', 0, 0, 16, '2020-04-18', '', 0),
(286, 'gg hh', 'gg hh', 0, '0', 3, 3, '', '', 'IMG-20200418-WA00161.jpg,IMG-20200418-WA00131.jpg', 'IMG-20200418-WA00161.jpg,IMG-20200418-WA00131.jpg', 'IMG-20200418-WA00171.jpg', 'IMG-20200418-WA00171.jpg', 86, 86, 'ggghh', 'ggghh', 0, 0, 16, '2020-04-18', '', 0),
(287, 'teetg', 'teetg', 0, '0', 50, 50, '', '', 'IMG-20200420-WA0003.jpg,IMG-20200420-WA0002.jpg,IMG-20200420-WA0001.jpg', 'IMG-20200420-WA0003.jpg,IMG-20200420-WA0002.jpg,IMG-20200420-WA0001.jpg', 'IMG-20200420-WA0011.jpg,IMG-20200419-WA0026.jpg,Screenshot_20200419-223212.png,IMG-20200418-WA0019.jpg', 'IMG-20200420-WA0011.jpg,IMG-20200419-WA0026.jpg,Screenshot_20200419-223212.png,IMG-20200418-WA0019.jpg', 16, 16, 'ggggghh', 'ggggghh', 4, 4, 16, '2020-04-20', '', 0),
(288, 'uyuu', 'uyuu', 14, '14', 51, 51, '', '', 'IMG-20200419-WA00171.jpg', 'IMG-20200419-WA00171.jpg', '', '', 116, 116, 'Vvb', 'Vvb', 0, 0, 0, '2020-04-20', '', 0),
(289, 'iuiju', 'iuiju', 11, '11', 50, 50, '', '', 'IMG-20200419-WA00172.jpg', 'IMG-20200419-WA00172.jpg', 'ADMINPANEL09_04_20202.xlsx', 'ADMINPANEL09_04_20202.xlsx', 116, 116, 'Vhjbk', 'Vhjbk', 0, 0, 0, '2020-04-20', '', 0),
(290, 'testbb ', 'testbb ', 150, '150', 50, 50, '', '', 'IMG-20200421-WA0003.jpg,IMG-20200420-WA00021.jpg,IMG-20200420-WA00011.jpg', 'IMG-20200421-WA0003.jpg,IMG-20200420-WA00021.jpg,IMG-20200420-WA00011.jpg', 'IMG-20200421-WA00031.jpg', 'IMG-20200421-WA00031.jpg', 16, 16, 'zgsgsgs', 'zgsgsgs', 4, 4, 16, '2020-04-21', '', 0),
(291, 'ujuu', 'ujuu', 15, '15', 51, 51, '', '', 'Screenshot_20200420_200749_com_frelance.jpg', 'Screenshot_20200420_200749_com_frelance.jpg', 'ADMINPANEL09_04_20203.xlsx', 'ADMINPANEL09_04_20203.xlsx', 117, 117, 'Vvbh', 'Vvbh', 2, 0, 117, '2020-04-22', '', 0),
(292, 'khkkj', 'khkkj', 555, '555', 50, 50, '', '', '', '', '', '', 117, 117, 'Jgji', 'Jgji', 0, 0, 118, '2020-04-22', '', 0),
(293, 'jszjjnzn', 'jszjjnzn', 120, '120', 50, 50, '', '', 'IMG-20200422-WA0000.jpg,IMG-20200422-WA0003.jpg,IMG-20200422-WA0001.jpg', 'IMG-20200422-WA0000.jpg,IMG-20200422-WA0003.jpg,IMG-20200422-WA0001.jpg', 'VID-20200421-WA0002.mp4,IMG-20200422-WA0004.jpg', 'VID-20200421-WA0002.mp4,IMG-20200422-WA0004.jpg', 16, 16, 'sjsjzjjs', 'sjsjzjjs', 3, 0, 16, '2020-04-22', '', 0),
(294, 'bb ujj', 'bb ujj', 100, '100', 50, 50, '', '', 'IMG-20200422-WA0030.jpg,IMG-20200422-WA00241.jpg', 'IMG-20200422-WA0030.jpg,IMG-20200422-WA00241.jpg', 'IMG-20200423-WA0007.jpg', 'IMG-20200423-WA0007.jpg', 12, 12, 'vvg hhh jjjjj', 'vvg hhh jjjjj', 4, 4, 12, '2020-04-23', '', 0),
(295, 'hbbbb', 'hbbbb', 180, '180', 50, 50, '', '', '', '', '', '', 16, 16, 'ttgggv bb', 'ttgggv bb', 4, 4, 16, '2020-04-23', '', 0),
(296, 'Test task', 'Test task', 200, '200', 1, 1, '', '', ',', ',', '', '', 16, 16, 'Test task description', 'Test task description', 0, 0, 0, '2020-04-23', '', 0),
(297, 'Test task', 'Test task', 200, '200', 1, 1, '', '', ',', ',', '', '', 16, 16, 'Test task description', 'Test task description', 0, 0, 0, '2020-04-23', '', 0),
(298, 'Test task', 'Test task', 200, '200', 1, 1, '', '', ',', ',', '', '', 16, 16, 'Test task description', 'Test task description', 0, 0, 0, '2020-04-23', '', 0),
(299, 'Test task', 'Test task', 200, '200', 1, 1, '', '', ',', ',', '', '', 16, 16, 'Test task description', 'Test task description', 0, 0, 0, '2020-04-23', '', 0),
(300, 'New Arts Demo for test', 'New Arts Demo for test', 100, '100', 50, 50, '', '', 'IMG_20200420_0500581.jpg,IMG_20200420_0501001.jpg', 'IMG_20200420_0500581.jpg,IMG_20200420_0501001.jpg', 'IMG_20200420_0500582.jpg', 'IMG_20200420_0500582.jpg', 16, 16, 'Hello I am testing', 'Hello I am testing', 0, 0, 0, '2020-04-24', '', 0),
(301, 'xbxbxxb', 'xbxbxxb', 100, '100', 51, 51, '', '', '', '', 'drifdated.txt', 'drifdated.txt', 115, 115, 'sjxjxjd\nz\nZZ\nd\nd\nd\nz\ndjd', 'sjxjxjd\nz\nZZ\nd\nd\nd\nz\ndjd', 0, 0, 0, '2020-04-24', '', 0),
(302, 'testing', 'testing', 10, '10', 51, 51, '', '', '', '', '', '', 16, 16, 'hhgggg\nnn', 'hhgggg\nnn', 0, 0, 0, '2020-04-24', '', 0),
(303, 'test', 'test', 0, '0', 51, 51, '', '', '', '', '', '', 16, 16, 'sdfsd\n', 'sdfsd\n', 0, 0, 0, '2020-04-24', '', 0),
(304, 'test3', 'test3', 10, '10', 51, 51, '', '', '', '', '', '', 16, 16, 'hi\n', 'hi\n', 0, 0, 0, '2020-04-24', '', 0),
(305, 'ggg', 'ggg', 0, '0', 51, 51, '', '', '', '', '', '', 16, 16, 'dfdsd', 'dfdsd', 0, 0, 0, '2020-04-24', '', 0),
(306, 'ttt', 'ttt', 0, '0', 50, 50, '', '', '', '', '', '', 16, 16, 'ffff', 'ffff', 0, 0, 0, '2020-04-24', '', 0),
(307, 'rt', 'rt', 0, '0', 50, 50, '', '', '', '', '', '', 16, 16, 'rtrtre', 'rtrtre', 0, 0, 0, '2020-04-24', '', 0),
(308, 'meememem', 'meememem', 5555, '5555', 50, 50, '', '', '', '', '', '', 116, 116, 'Ndjdkd', 'Ndjdkd', 1, 0, 116, '2020-04-24', '', 0),
(309, 'mrdu', 'mrdu', 18, '18', 6, 6, '', '', 'magazine-unlock-05-2_3_4122-_8E55779116C0EF9380DD51B4C36C7F9F.jpg', 'magazine-unlock-05-2_3_4122-_8E55779116C0EF9380DD51B4C36C7F9F.jpg', 'magazine-unlock-05-2_3_4122-_8DE830BA436E0BB990010F06A6C97886.jpg', 'magazine-unlock-05-2_3_4122-_8DE830BA436E0BB990010F06A6C97886.jpg', 119, 119, 'Gghhhhj', 'Gghhhhj', 2, 0, 119, '2020-04-24', '', 0),
(310, 'tessb', 'tessb', 60, '60', 1, 1, '', '', '', '', '', '', 12, 12, 'BBb sJJ', 'BBb sJJ', 4, 4, 12, '2020-04-25', '', 0),
(311, 'Test task', 'Test task', 200, '200', 1, 1, '', '', ',', ',', '', '', 16, 16, 'Test task description', 'Test task description', 4, 4, 16, '2020-04-25', '', 0),
(312, 'Hello Test', 'Hello Test', 10, '10', 1, 1, '', '', 'IMG_20200420_0501002.jpg,IMG_20200420_0500583.jpg', 'IMG_20200420_0501002.jpg,IMG_20200420_0500583.jpg', '', '', 16, 16, 'Hi I am testing it', 'Hi I am testing it', 2, 0, 0, '2020-04-25', '', 0),
(313, 'Helllo Roshani', 'Helllo Roshani', 100, '100', 1, 1, '', '', '', '', '', '', 16, 16, 'dsfsdddffd\n', 'dsfsdddffd\n', 0, 0, 12, '2020-04-25', '', 0),
(314, 'this is for test', 'this is for test', 20, '20', 1, 1, '', '', 'Screenshot_20200425-144625~2.png,Screenshot_20200425-144625.png,IMG-20200425-WA0022.jpg', 'Screenshot_20200425-144625~2.png,Screenshot_20200425-144625.png,IMG-20200425-WA0022.jpg', 'Screenshot_20200425-144625~21.png', 'Screenshot_20200425-144625~21.png', 12, 12, 'this is ', 'this is ', 4, 0, 16, '2020-04-25', '', 0),
(315, 'ankit sir test it please', 'ankit sir test it please', 190, '190', 1, 1, '', '', '', '', '', '', 16, 16, 'sfsfsddsdsfsf\ndsfsdfdsf', 'sfsfsddsdsfsf\ndsfsdfdsf', 0, 0, 0, '2020-04-25', '', 0),
(316, 'ankitg2', 'ankitg2', 10, '10', 1, 1, '', '', '', '', '', '', 16, 16, 'sdfsdfdsf', 'sdfsdfdsf', 4, 4, 12, '2020-04-25', '', 0),
(317, 'ankit 3', 'ankit 3', 10, '10', 2, 2, '', '', '', '', '', '', 16, 16, 'ssdfsdfsdf', 'ssdfsdfsdf', 0, 0, 0, '2020-04-25', '', 0),
(318, 'test ds', 'test ds', 120, '120', 1, 1, '', '', '', '', '', '', 12, 12, 'ffffff', 'ffffff', 0, 0, 0, '2020-04-25', '', 0),
(319, 'test djdj', 'test djdj', 120, '120', 1, 1, '', '', '', '', '', '', 12, 12, 'zzn zzzjui', 'zzn zzzjui', 0, 0, 16, '2020-04-27', '', 0),
(320, 'test chemm', 'test chemm', 150, '150', 2, 2, '', '', '', '', '', '', 16, 16, 'ccgy bb', 'ccgy bb', 4, 4, 12, '2020-04-27', '', 0),
(321, 'this is maths', 'this is maths', 140, '140', 3, 3, '', '', '', '', '', '', 16, 16, 'zz xjxjxj', 'zz xjxjxj', 4, 4, 12, '2020-04-27', '', 0),
(322, 'heybdhhdh hd', 'heybdhhdh hd', 50, '50', 1, 1, '', '', '', '', '', '', 12, 12, 'dgdhdh shsj', 'dgdhdh shsj', 4, 4, 16, '2020-04-27', '', 0),
(323, 'yggy vffcfc', 'yggy vffcfc', 5, '5', 5, 5, '', '', '', '', '', '', 12, 12, 'fftfdd fff', 'fftfdd fff', 4, 4, 16, '2020-04-27', '', 0),
(324, 'gi mvj jvivi', 'gi mvj jvivi', 9, '9', 2, 2, '', '', '', '', '', '', 16, 16, 'vjvjvjvj', 'vjvjvjvj', 4, 4, 12, '2020-04-27', '', 0),
(325, 'gvv bbb', 'gvv bbb', 30, '30', 3, 3, '', '', '', '', '', '', 16, 16, 'gggvgggg', 'gggvgggg', 4, 4, 12, '2020-04-27', '', 0),
(326, 'rhrhrh yy', 'rhrhrh yy', 12, '12', 1, 1, '', '', '', '', '', '', 16, 16, 'tggggy', 'tggggy', 4, 4, 12, '2020-04-27', '', 0),
(327, 'hxs sskk', 'hxs sskk', 150, '150', 3, 3, '', '', '', '', '', '', 16, 16, 'sjzj sjsj', 'sjzj sjsj', 4, 4, 116, '2020-04-27', '', 0),
(328, 'fjfhuchhcy', 'fjfhuchhcy', 60, '60', 3, 3, '', '', '', '', '', '', 16, 16, 'gcvyvyvyhu', 'gcvyvyvyhu', 4, 4, 12, '2020-04-27', '', 0),
(329, 'ALphawizz test', 'ALphawizz test', 10, '10', 2, 2, '', '', '', '', '', '', 16, 16, 'Demo', 'Demo', 4, 4, 12, '2020-04-27', '', 0),
(330, 'ALPHA2', 'ALPHA2', 20, '20', 3, 3, '', '', '', '', '', '', 16, 16, 'DSFSDFSDF', 'DSFSDFSDF', 3, 0, 12, '2020-04-27', '', 0),
(331, 'test 123', 'test 123', 50, '50', 1, 1, '', '', '', '', '', '', 12, 12, 'this is for test', 'this is for test', 3, 0, 16, '2020-04-27', '', 0),
(332, 'uwwjn sjj', 'uwwjn sjj', 177, '177', 1, 1, '', '', '', '', '', '', 12, 12, 'Nzjznzn', 'Nzjznzn', 1, 0, 120, '2020-04-27', '', 0),
(333, 'uvjknk', 'uvjknk', 2366, '2366', 7, 7, '', '', '', '', '', '', 121, 121, 'Jbjbkkk', 'Jbjbkkk', 0, 0, 116, '2020-04-28', '', 0),
(334, 'ugy', 'ugy', 1111, '1111', 5, 5, '', '', '', '', '', '', 121, 121, 'Uhu', 'Uhu', 2, 0, 116, '2020-04-28', '', 0),
(335, 'test hh', 'test hh', 300, '300', 1, 1, '', '', '', '', '', '', 16, 16, 'dshzh', 'dshzh', 4, 4, 12, '2020-04-28', '', 0),
(336, 'chi mizane', 'chi mizane', 22, '22', 11, 11, '', '', '', '', '', '', 122, 122, '3afak', '3afak', 0, 0, 123, '2020-04-29', '', 0),
(337, 'heelp', 'heelp', 9999, '9999', 12, 12, '', '', '', '', '', '', 124, 124, 'Details ', 'Details ', 0, 0, 138, '2020-04-29', '', 0),
(338, 'testbn', 'testbn', 120, '120', 1, 1, '', '', '', '', '', '', 126, 126, 'zhzhhz shsh', 'zhzhhz shsh', 0, 0, 125, '2020-04-29', '', 0),
(339, 'test 29', 'test 29', 150, '150', 1, 1, '', '', '', '', '', '', 126, 126, 'testing', 'testing', 0, 0, 115, '2020-04-29', '', 0),
(340, 'xbxbxb', 'xbxbxb', 120, '120', 2, 2, '', '', '', '', '', '', 115, 115, 'zzzz\n', 'zzzz\n', 1, 0, 127, '2020-04-29', '', 0),
(341, 'teet', 'teet', 250, '250', 2, 2, '', '', '', '', '', '', 127, 127, 'ssj', 'ssj', 1, 0, 126, '2020-05-01', '', 0),
(342, 'ajo ggjvc', 'ajo ggjvc', 120, '120', 2, 2, '', '', '', '', '', '', 127, 127, 'kcjdjxjf', 'kcjdjxjf', 1, 0, 126, '2020-05-01', '', 0),
(343, 'raj ', 'raj ', 120, '120', 4, 4, '', '', '', '', '', '', 136, 136, 'test orajel \n', 'test orajel \n', 4, 4, 16, '2020-05-01', '', 0),
(344, 'ggf hh', 'ggf hh', 150, '150', 2, 2, '', '', '', '', '', '', 12, 12, 'ggf jj', 'ggf jj', 4, 4, 16, '2020-05-01', '', 0),
(345, 'Vasim Testing Title', 'Vasim Testing Title', 80, '80', 3, 3, '', '', '', '', '', '', 16, 16, 'Testing Description\n', 'Testing Description\n', 4, 4, 12, '2020-05-01', '', 0),
(346, 'uuu', 'uuu', 88, '88', 4, 4, '', '', '', '', '', '', 139, 139, 'Bj', 'Bj', 3, 0, 138, '2020-05-02', '', 0),
(347, 'jjjj', 'jjjj', 525, '525', 2, 2, '', '', '', '', '', '', 139, 139, 'Juu', 'Juu', 4, 4, 138, '2020-05-02', '', 0),
(348, 'jru', 'jru', 0, '0', 1, 1, '', '', 'Screenshot_20200502_074704.jpg', 'Screenshot_20200502_074704.jpg', '', '', 139, 139, 'Jeje', 'Jeje', 0, 0, 0, '2020-05-02', '', 0),
(349, 'test', 'test', 12, '12', 3, 3, '', '', '', '', 'VigoMobile_App.pdf', 'VigoMobile_App.pdf', 16, 16, 'tttttt\n\n', 'tttttt\n\n', 0, 0, 0, '2020-05-02', '', 0),
(350, 'test', 'test', 20, '20', 3, 3, '', '', '', '', 'VigoMobile_App1.pdf', 'VigoMobile_App1.pdf', 16, 16, 'hi testing\n', 'hi testing\n', 0, 0, 0, '2020-05-02', '', 0),
(351, 'kfkf', 'kfkf', 56, '56', 3, 3, '', '', 'imageedit_8_2665352795.png', 'imageedit_8_2665352795.png', '', '', 139, 139, 'Kdkd', 'Kdkd', 1, 0, 123, '2020-05-09', '', 0),
(352, 'kfidi', 'kfidi', 495, '495', 3, 3, '', '', '', '', '', '', 139, 139, 'Jruru', 'Jruru', 1, 0, 123, '2020-05-09', '', 0),
(353, 'jrje', 'jrje', 0, '0', 4, 4, '', '', '', '', '', '', 139, 139, 'Jrjr', 'Jrjr', 0, 0, 123, '2020-05-09', '', 0),
(354, 'ureiz', 'ureiz', 22, '22', 5, 5, '', '', '', '', '', '', 139, 139, 'Jrie', 'Jrie', 0, 0, 123, '2020-05-09', '', 0),
(355, 'jruru', 'jruru', 555, '555', 5, 5, '', '', '', '', '', '', 123, 123, 'Jrjrj', 'Jrjrj', 4, 4, 139, '2020-05-09', '', 0),
(356, 'testbb', 'testbb', 120, '120', 1, 1, '', '', '', '', '', '', 12, 12, 'sjjzjzj', 'sjjzjzj', 4, 4, 133, '2020-05-11', '', 0),
(357, 'errewrewrwewerwe', 'errewrewrwewerwe', 10, '10', 2, 2, '', '', '', '', 'IMG_20200502_033932.jpg', 'IMG_20200502_033932.jpg', 139, 139, 'werwerwerwer', 'werwerwerwer', 0, 0, 0, '2020-05-11', '', 0),
(358, 'dcccc', 'dcccc', 0, '0', 1, 1, '', '', 'IMG-20200511-WA0003.jpg', 'IMG-20200511-WA0003.jpg', '', '', 16, 16, 'uuuu\n', 'uuuu\n', 0, 0, 0, '2020-05-12', '', 0),
(359, 'tttt', 'tttt', 0, '0', 1, 1, '', '', '', '', 'IMG-20200511-WA0004.jpg', 'IMG-20200511-WA0004.jpg', 16, 16, 'tt', 'tt', 0, 0, 0, '2020-05-12', '', 0),
(360, 'ggg', 'ggg', 0, '0', 2, 2, '', '', '', '', 'IMG-20200511-WA0022.jpg', 'IMG-20200511-WA0022.jpg', 16, 16, 'fff\n', 'fff\n', 0, 0, 0, '2020-05-12', '', 0),
(361, 'ttt', 'ttt', 0, '0', 2, 2, '', '', '', '', 'IMG-20200511-WA00221.jpg', 'IMG-20200511-WA00221.jpg', 16, 16, 'tttt', 'tttt', 0, 0, 0, '2020-05-12', '', 0),
(362, 'hi', 'hi', 0, '0', 2, 2, '', '', '', '', '', '', 16, 16, 'hi', 'hi', 0, 0, 0, '2020-05-12', '', 0),
(363, 'hi', 'hi', 140, '140', 4, 4, '', '', '', '', '', '', 16, 16, 'hh\n', 'hh\n', 1, 0, 12, '2020-05-12', '', 0),
(364, 'dhdhdxb', 'dhdhdxb', 0, '0', 2, 2, '', '', '', '', '', '', 12, 12, '\nddshzsj', '\nddshzsj', 0, 0, 0, '2020-05-12', '', 0),
(365, 'China.', 'China.', 0, '0', 2, 2, '', '', '', '', 'IMG-20200511-WA00222.jpg', 'IMG-20200511-WA00222.jpg', 12, 12, 'Corona\n', 'Corona\n', 4, 4, 139, '2020-05-12', '', 0),
(366, 'hi', 'hi', 200, '200', 2, 2, '', '', '', '', 'IMG-20200511-WA0023.jpg', 'IMG-20200511-WA0023.jpg', 12, 12, 'hi\n', 'hi\n', 4, 4, 139, '2020-05-12', '', 0),
(367, 'hi', 'hi', 220, '220', 3, 3, '', '', '', '', 'IMG-20200511-WA00223.jpg', 'IMG-20200511-WA00223.jpg', 12, 12, 'hello', 'hello', 0, 0, 16, '2020-05-12', '', 0),
(368, 'ggg', 'ggg', 220, '220', 1, 1, '', '', '', '', 'IMG-20200511-WA00224.jpg', 'IMG-20200511-WA00224.jpg', 16, 16, 'ggg', 'ggg', 0, 0, 0, '2020-05-12', '', 0),
(369, 'dhz', 'dhz', 330, '330', 2, 2, '', '', '', '', 'IMG-20200511-WA00231.jpg', 'IMG-20200511-WA00231.jpg', 16, 16, 'zzz', 'zzz', 0, 0, 0, '2020-05-12', '', 0),
(370, 'ALPHA', 'ALPHA', 230, '230', 2, 2, '', '', '', '', 'PDOBGAudioRecording.3gp', 'PDOBGAudioRecording.3gp', 12, 12, 'ALPHA DES', 'ALPHA DES', 4, 4, 139, '2020-05-13', '', 0),
(371, 'ANkit SIr testing', 'ANkit SIr testing', 330, '330', 1, 1, '', '', '', '', 'IMG_20200502_0339321.jpg', 'IMG_20200502_0339321.jpg', 12, 12, 'sdfsdsdsdff', 'sdfsdsdsdff', 3, 0, 139, '2020-05-13', '', 0),
(372, 'Vaisim', 'Vaisim', 440, '440', 1, 1, '', '', '', '', 'IMG_20200502_0339322.jpg', 'IMG_20200502_0339322.jpg', 16, 16, 'vasim_test', 'vasim_test', 4, 4, 139, '2020-05-13', '', 0),
(373, 'this istest', 'this istest', 120, '120', 1, 1, '', '', '', '', '', '', 139, 139, 'hgc ghcch', 'hgc ghcch', 4, 4, 16, '2020-05-13', '', 0),
(374, 'this for another test', 'this for another test', 130, '130', 1, 1, '', '', '', '', '', '', 139, 139, 'hey this is test', 'hey this is test', 4, 4, 16, '2020-05-13', '', 0),
(375, 'this fortest', 'this fortest', 130, '130', 1, 1, '', '', 'IMG-20200505-WA00122.jpg', 'IMG-20200505-WA00122.jpg', 'smartpickup_api3.docx', 'smartpickup_api3.docx', 139, 139, 'gfjjj gigigog', 'gfjjj gigigog', 4, 4, 16, '2020-05-13', '', 0),
(376, 'i need u', 'i need u', 500, '500', 1, 1, '', '', 'IMG-20200513-WA0004.jpg', 'IMG-20200513-WA0004.jpg', 'IMG-20200513-WA0017.jpg', 'IMG-20200513-WA0017.jpg', 123, 123, 'Heeeyyyy', 'Heeeyyyy', 4, 4, 139, '2020-05-13', '', 0),
(377, 'hyyyy', 'hyyyy', 500, '500', 2, 2, '', '', 'IMG-20200513-WA00171.jpg', 'IMG-20200513-WA00171.jpg', 'IMG-20200514-WA0002.jpg', 'IMG-20200514-WA0002.jpg', 123, 123, 'Helllo\n\n', 'Helllo\n\n', 3, 0, 139, '2020-05-14', '', 0),
(378, 'yuyy', 'yuyy', 522, '522', 4, 4, '', '', 'Screenshot_20200515_160311.jpg', 'Screenshot_20200515_160311.jpg', 'imageedit_8_26653527953.png', 'imageedit_8_26653527953.png', 139, 139, 'Huhh', 'Huhh', 0, 0, 0, '2020-05-17', '', 0),
(379, 'this is new test', 'this is new test', 130, '130', 1, 1, '', '', '', '', '', '', 16, 16, 'this is for new test demands', 'this is for new test demands', 4, 4, 12, '2020-06-02', '', 0),
(380, 'RoshaniTest', 'RoshaniTest', 100, '100', 1, 1, '', '', '', '', '', '', 12, 12, 'testing', 'testing', 1, 0, 147, '2020-06-02', '', 0),
(381, 'test post', 'test post', 130, '130', 1, 1, '', '', '', '', '', '', 16, 16, 'test dess', 'test dess', 3, 0, 12, '2020-06-02', '', 0),
(382, 'testing testing', 'testing testing', 350, '350', 1, 1, '', '', '', '', '', '', 16, 16, 'this is for test', 'this is for test', 1, 0, 12, '2020-06-03', '', 0),
(383, 'hi there', 'hi there', 566, '566', 7, 7, '', '', '', '', '', '', 16, 16, 'hey', 'hey', 4, 4, 12, '2020-06-03', '', 0),
(384, 'hey this is for test', 'hey this is for test', 150, '150', 1, 1, '', '', '', '', '', '', 16, 16, 'testzbzb', 'testzbzb', 1, 0, 145, '2020-06-03', '', 0),
(385, 'this is a new project', 'this is a new project', 350, '350', 1, 1, '', '', '', '', '', '', 16, 16, 'test description', 'test description', 2, 0, 12, '2020-06-03', '', 0),
(386, 'this is a new1', 'this is a new1', 120, '120', 2, 2, '', '', '', '', '', '', 16, 16, 'hey ', 'hey ', 3, 0, 12, '2020-06-03', '', 0),
(387, '', 'sfsfsf', 120, '120', 4, 0, '', '', '', '', 'user3.png', '', 12, 12, 'fsfsfsf', '', 4, 4, 147, '2020-06-09', '', 0),
(388, 'math', 'math', 650, '650', 3, 3, '', '', '', '', 'moblle_icn_4.png', '', 147, 147, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type', 4, 4, 12, '2020-06-26', '', 0),
(389, 'this is test', 'this is test', 120, '120', 1, 1, '', '', '', '', '', '', 16, 16, 'djdj', 'djdj', 0, 0, 0, '2020-06-25', '', 0),
(390, 'bghit wahed li3iba', 'bghit wahed li3iba', 121, '121', 1, 1, '', '', 'IMG-20200629-WA0018.jpg', 'IMG-20200629-WA0018.jpg', '10-lettre_autre__medecin.pdf', '10-lettre_autre__medecin.pdf', 151, 151, 'Aji rigel lina ', 'Aji rigel lina ', 3, 3, 152, '2020-06-30', '', 0),
(391, 'khassani had l3iba', 'khassani had l3iba', 200, '200', 1, 1, '', '', 'IMG_20200630_020828.jpg', 'IMG_20200630_020828.jpg', '', '', 152, 152, 'Chkone y9adki had', 'Chkone y9adki had', 3, 0, 151, '2020-06-30', '', 0),
(392, 'sahbi rani ma7taj', 'sahbi rani ma7taj', 199, '199', 7, 7, '', '', 'Screenshot_20200628_043910.jpg', 'Screenshot_20200628_043910.jpg', '', '', 151, 151, 'Aji lahna', 'Aji lahna', 4, 4, 152, '2020-06-30', '', 0),
(393, 'This is chemistry project', 'This is chemistry project', 200, '200', 2, 2, '', '', '', '', 'Untitled1.png', '', 16, 16, 'This is chemistry project for test', '', 0, 0, 0, '0000-00-00', '', 0),
(394, 'Test task', 'Test task', 200, '200', 1, 1, '', '', ',', ',', '', '', 16, 16, 'Test task description', 'Test task description', 0, 0, 0, '2020-06-30', '', 0),
(395, ' question from user test', ' question from user test', 200, '200', 2, 2, '', '', '', '', 'Untitled3.png', 'Untitled3.png', 16, 16, 'test', 'test', 0, 0, 0, '0000-00-00', '', 0),
(396, 'ghhh', 'ghhh', 0, '0', 2, 2, '', '', '', '', '', '', 151, 151, 'Hhh', 'Hhh', 0, 0, 152, '2020-07-03', '', 0),
(397, 'jdjdj', 'jdjdj', 356, '356', 4, 4, '', '', '', '', '', '', 152, 152, 'Bonjour ', 'Bonjour ', 3, 0, 151, '2020-07-03', '', 0),
(398, 'hehe', 'hehe', 772, '772', 2, 2, '', '', '', '', '', '', 151, 151, 'Bdhdh', 'Bdhdh', 3, 0, 36, '2020-07-03', '', 0),
(399, 'this is test 07082020', 'this is test 07082020', 123, '123', 1, 1, '', '', '', '', '', '', 16, 16, 'this is test', 'this is test', 3, 0, 153, '2020-07-08', '', 0),
(400, 'this is the testing', 'this is the testing', 130, '130', 2, 2, '', '', '', '', '', '', 16, 16, 'this is the testong', 'this is the testong', 0, 0, 12, '2020-07-08', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(100) NOT NULL,
  `user_type` int(10) NOT NULL,
  `user_id` int(100) NOT NULL,
  `demand_id` int(100) NOT NULL,
  `notification` longtext NOT NULL,
  `read_status` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type_id` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `user_type`, `user_id`, `demand_id`, `notification`, `read_status`, `created`, `type_id`) VALUES
(1, 2, 147, 1, 'payment request', 1, '2020-06-27 06:55:23', 1),
(2, 2, 147, 1, 'Demand  added successfully', 1, '2020-06-27 06:55:40', 2),
(3, 2, 147, 1, 'offer accepted', 1, '2020-06-27 06:55:00', 3),
(4, 2, 1, 1, 'Appointment reschedule successfully', 1, '2020-05-11 11:28:53', 3),
(5, 2, 1, 1, 'Appointment reschedule successfully', 1, '2020-03-31 10:54:32', 4),
(6, 2, 80, 2, 'Appointment addedd successfully', 1, '2020-03-31 10:54:35', 5),
(7, 2, 80, 3, 'Appointment addedd successfully', 1, '2020-03-31 10:54:39', 1),
(8, 2, 80, 4, 'Appointment addedd successfully', 1, '2020-05-11 11:28:53', 3),
(9, 2, 80, 5, 'Appointment addedd successfully', 1, '2020-03-31 10:54:47', 1),
(10, 2, 80, 2, 'Your Appointment Approved By Doctor', 1, '2020-03-31 10:54:51', 3),
(11, 2, 80, 2, 'Your Appointment Approved By Doctor', 1, '2020-03-31 10:54:54', 1),
(12, 2, 80, 4, 'Your Appointment Approved By Doctor', 1, '2020-03-31 10:54:57', 1),
(13, 2, 80, 5, 'Your Appointment Approved By Doctor', 1, '2020-03-31 10:55:00', 4),
(14, 2, 80, 6, 'Appointment addedd successfully', 0, '2020-03-31 10:55:03', 1),
(15, 2, 80, 7, 'Appointment addedd successfully', 0, '2020-05-11 11:28:53', 3),
(16, 2, 74, 8, 'Appointment addedd successfully', 1, '2020-05-11 11:28:53', 3),
(17, 2, 74, 9, 'Appointment addedd successfully', 1, '2020-03-31 10:55:17', 3),
(18, 2, 74, 10, 'Appointment addedd successfully', 1, '2020-03-05 15:53:19', 0),
(19, 2, 74, 11, 'Appointment addedd successfully', 1, '2020-03-05 15:53:19', 0),
(20, 2, 74, 12, 'Appointment addedd successfully', 1, '2020-03-05 15:53:19', 0),
(21, 2, 74, 13, 'Appointment addedd successfully', 1, '2020-03-05 15:53:19', 0),
(22, 2, 74, 9, 'Your Appointment Approved By Doctor', 1, '2020-03-05 15:53:19', 0),
(23, 2, 74, 9, 'Your Appointment Approved By Doctor', 1, '2020-03-05 15:53:19', 0),
(24, 2, 74, 9, 'Your Appointment Approved By Doctor', 1, '2020-03-05 15:53:19', 0),
(25, 2, 74, 14, 'Appointment addedd successfully', 1, '2020-03-05 15:53:19', 0),
(26, 2, 74, 15, 'Appointment addedd successfully', 1, '2020-03-05 15:53:19', 0),
(27, 2, 74, 16, 'Appointment addedd successfully', 1, '2020-03-05 15:53:19', 0),
(28, 2, 74, 17, 'Appointment addedd successfully', 1, '2020-03-05 15:53:19', 0),
(29, 2, 82, 18, 'Appointment addedd successfully', 0, '2020-03-05 16:12:54', 0),
(30, 2, 82, 19, 'Appointment addedd successfully', 0, '2020-03-05 16:12:55', 0),
(31, 2, 82, 19, 'Your Appointment Approved By Doctor', 0, '2020-03-05 16:15:18', 0),
(32, 2, 82, 19, 'Your Appointment Approved By Doctor', 0, '2020-03-05 16:15:18', 0),
(33, 2, 82, 19, 'Your Appointment Approved By Doctor', 0, '2020-03-05 16:15:18', 0),
(34, 2, 82, 19, 'Your Appointment Approved By Doctor', 0, '2020-03-05 16:16:20', 0),
(35, 2, 82, 19, 'Your Appointment Approved By Doctor', 0, '2020-03-05 16:16:20', 0),
(36, 2, 82, 19, 'Your Appointment Approved By Doctor', 0, '2020-03-05 16:16:20', 0),
(37, 2, 82, 19, 'Your Appointment Approved By Doctor', 0, '2020-03-05 16:16:20', 0),
(38, 2, 82, 19, 'Your Appointment Approved By Doctor', 0, '2020-03-05 16:16:20', 0),
(39, 2, 82, 18, 'Your Appointment Approved By Doctor', 0, '2020-03-06 03:36:03', 0),
(40, 2, 82, 18, 'Your Appointment Approved By Doctor', 0, '2020-03-06 03:36:03', 0),
(41, 2, 36, 20, 'Appointment addedd successfully', 1, '2020-03-09 06:08:03', 0),
(42, 2, 36, 21, 'Appointment addedd successfully', 1, '2020-03-09 06:08:03', 0),
(43, 2, 36, 22, 'Appointment addedd successfully', 1, '2020-03-09 06:08:03', 0),
(44, 2, 36, 23, 'Appointment addedd successfully', 1, '2020-03-09 06:08:03', 0),
(45, 2, 36, 24, 'Appointment addedd successfully', 1, '2020-03-11 05:35:18', 0),
(46, 2, 36, 24, 'Appointment reschedule successfully', 1, '2020-03-11 05:35:18', 0),
(47, 2, 83, 25, 'Appointment addedd successfully', 1, '2020-03-11 07:31:22', 0),
(48, 2, 83, 26, 'Appointment addedd successfully', 1, '2020-03-11 08:49:47', 0),
(49, 2, 83, 27, 'Appointment addedd successfully', 1, '2020-03-11 08:49:47', 0),
(50, 2, 83, 28, 'Appointment addedd successfully', 1, '2020-03-11 08:49:47', 0),
(51, 2, 83, 29, 'Appointment addedd successfully', 1, '2020-03-11 09:05:06', 0),
(52, 2, 83, 30, 'Appointment addedd successfully', 0, '2020-03-11 09:08:26', 0),
(434, 0, 12, 388, 'Your offer has been accepted', 0, '2020-06-29 05:18:14', 3),
(53, 0, 58, 151, 'Your offer has been accepted', 1, '2020-04-03 15:47:14', 0),
(54, 0, 59, 171, 'Your offer has been accepted', 0, '2020-04-04 09:54:06', 0),
(55, 0, 36, 1, 'Your offer has been accepted', 0, '2020-04-05 14:40:51', 0),
(56, 0, 1, 0, 'Your offer has been accepted', 0, '2020-04-06 04:54:34', 0),
(57, 0, 57, 0, 'Your offer has been accepted', 0, '2020-04-06 05:24:00', 0),
(58, 0, 12, 15, 'Your offer has been accepted', 0, '2020-04-09 08:39:07', 0),
(59, 0, 59, 0, 'Your offer has been accepted', 0, '2020-04-09 09:08:17', 0),
(60, 0, 16, 172, 'Your offer has been accepted', 0, '2020-04-09 09:33:45', 0),
(61, 0, 16, 173, 'Your offer has been accepted', 0, '2020-04-09 10:05:51', 0),
(62, 0, 58, 174, 'Your offer has been accepted', 0, '2020-04-09 11:36:00', 0),
(63, 0, 58, 176, 'Your offer has been accepted', 0, '2020-04-09 12:40:24', 0),
(64, 0, 0, 177, 'Your offer has been accepted', 0, '2020-04-09 13:17:58', 0),
(65, 0, 16, 178, 'Your offer has been accepted', 0, '2020-04-09 13:25:01', 0),
(66, 0, 1, 181, 'Your offer has been accepted', 0, '2020-04-11 19:49:12', 0),
(67, 0, 88, 183, 'Your offer has been accepted', 0, '2020-04-13 13:30:23', 0),
(68, 0, 88, 0, 'Your offer has been accepted', 0, '2020-04-13 13:33:21', 0),
(69, 0, 88, 184, 'Your offer has been accepted', 0, '2020-04-13 18:08:38', 0),
(70, 0, 91, 186, 'Your offer has been accepted', 0, '2020-04-13 20:21:25', 0),
(71, 0, 90, 195, 'Your offer has been accepted', 0, '2020-04-14 20:30:18', 0),
(72, 0, 100, 235, 'Your offer has been accepted', 0, '2020-04-15 23:46:26', 0),
(73, 0, 102, 236, 'Your offer has been accepted', 0, '2020-04-16 00:14:04', 0),
(74, 0, 16, 260, 'Your offer has been accepted', 0, '2020-04-16 11:57:50', 0),
(75, 0, 16, 280, 'Your offer has been accepted', 0, '2020-04-17 14:59:44', 0),
(76, 0, 113, 281, 'Your offer has been accepted', 0, '2020-04-17 17:12:12', 0),
(77, 0, 113, 281, 'Your offer has been accepted', 0, '2020-04-17 17:12:38', 0),
(78, 0, 16, 287, 'Your offer has been accepted', 0, '2020-04-20 07:11:56', 0),
(79, 0, 16, 290, 'Your offer has been accepted', 0, '2020-04-21 05:05:24', 0),
(80, 0, 117, 291, 'Your offer has been accepted', 0, '2020-04-22 03:55:19', 0),
(81, 0, 16, 293, 'Your offer has been accepted', 0, '2020-04-22 10:38:48', 0),
(82, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-22 11:07:31', 0),
(83, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-22 11:09:10', 0),
(84, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-22 11:14:30', 0),
(85, 0, 12, 294, 'Your offer has been accepted', 0, '2020-04-23 06:10:17', 0),
(86, 0, 12, 294, 'Your offer has been accepted', 0, '2020-04-23 06:14:31', 0),
(87, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-23 06:24:40', 0),
(88, 0, 16, 295, 'Your offer has been accepted', 0, '2020-04-23 07:36:30', 0),
(89, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-23 13:07:18', 0),
(90, 0, 116, 308, 'Your offer has been accepted', 0, '2020-04-24 13:40:51', 0),
(91, 0, 116, 0, 'Your offer has been accepted', 0, '2020-04-24 13:45:33', 0),
(92, 0, 119, 309, 'Your offer has been accepted', 0, '2020-04-24 21:10:19', 0),
(93, 0, 119, 0, 'Your offer has been accepted', 0, '2020-04-24 21:14:02', 0),
(94, 0, 12, 310, 'Your offer has been accepted', 0, '2020-04-25 05:40:50', 0),
(95, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 05:43:12', 0),
(96, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 05:53:33', 0),
(97, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 05:54:47', 0),
(98, 0, 16, 311, 'Your offer has been accepted', 0, '2020-04-25 07:32:24', 0),
(99, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 07:41:25', 0),
(100, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 07:45:35', 0),
(101, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 07:49:10', 0),
(102, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 07:49:42', 0),
(103, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 07:52:23', 0),
(104, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 07:56:11', 0),
(105, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 07:57:47', 0),
(106, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 07:58:53', 0),
(107, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 08:14:56', 0),
(108, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 08:16:57', 0),
(109, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 08:19:06', 0),
(110, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 08:19:32', 0),
(111, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 08:19:37', 0),
(112, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 08:21:57', 0),
(113, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 09:32:42', 0),
(114, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 11:56:48', 0),
(115, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 12:37:03', 0),
(116, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 12:38:45', 0),
(117, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 12:40:40', 0),
(118, 0, 86, 0, 'Your offer has been accepted', 0, '2020-04-25 12:53:22', 0),
(119, 0, 16, 313, 'Your offer has been accepted', 0, '2020-04-25 13:21:15', 0),
(120, 0, 12, 0, 'Your offer has been accepted', 0, '2020-04-25 13:26:38', 0),
(121, 0, 12, 314, 'Your offer has been accepted', 0, '2020-04-25 13:30:49', 0),
(122, 0, 12, 314, 'Your offer has been accepted', 0, '2020-04-25 13:31:27', 0),
(123, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 13:33:14', 0),
(124, 0, 16, 0, 'Your offer has been accepted', 0, '2020-04-25 14:00:08', 0),
(125, 0, 12, 314, 'Your have received an offer', 0, '2020-04-25 15:02:20', 0),
(126, 0, 12, 314, 'Your have received an offer', 0, '2020-04-25 15:12:34', 0),
(127, 0, 16, 313, 'Your offer has been accepted', 0, '2020-04-25 15:45:23', 0),
(128, 0, 16, 316, 'Your have received an offer', 0, '2020-04-25 16:39:44', 0),
(129, 0, 12, 319, 'Your have received an offer', 0, '2020-04-27 05:03:59', 0),
(130, 0, 16, 320, 'Your have received an offer', 0, '2020-04-27 05:05:06', 0),
(131, 0, 16, 321, 'Your have received an offer', 0, '2020-04-27 05:08:11', 0),
(132, 0, 12, 322, 'Your have received an offer', 0, '2020-04-27 05:18:32', 0),
(133, 0, 12, 323, 'Your have received an offer', 0, '2020-04-27 05:20:53', 0),
(134, 0, 16, 324, 'Your have received an offer', 0, '2020-04-27 05:22:34', 0),
(135, 0, 12, 323, 'Your offer has been accepted', 0, '2020-04-27 05:23:23', 0),
(136, 0, 16, 324, 'Your offer has been accepted', 0, '2020-04-27 05:24:30', 0),
(137, 0, 16, 325, 'Your have received an offer', 0, '2020-04-27 06:04:28', 0),
(138, 0, 16, 325, 'Your offer has been accepted', 0, '2020-04-27 06:05:15', 0),
(139, 0, 12, 0, 'You have received a review', 0, '2020-04-27 06:08:24', 0),
(140, 0, 16, 324, 'Your offer has been accepted', 0, '2020-04-27 06:39:35', 0),
(141, 0, 16, 324, 'Your offer has been accepted', 0, '2020-04-27 06:40:15', 0),
(142, 0, 16, 324, 'Your payment has been done', 0, '2020-04-27 06:40:15', 0),
(143, 0, 16, 321, 'Your offer has been accepted', 0, '2020-04-27 06:43:52', 0),
(144, 0, 12, 321, 'Your offer has been accepted', 1, '2020-04-28 09:41:46', 1),
(145, 0, 16, 321, 'Your payment has been done', 0, '2020-04-27 06:44:48', 0),
(146, 0, 16, 326, 'Your have received an offer', 1, '2020-05-11 11:28:53', 3),
(147, 0, 16, 328, 'Your have received an offer', 1, '2020-05-11 11:28:53', 3),
(148, 0, 16, 328, 'Your have received an offer', 1, '2020-05-11 11:28:53', 3),
(149, 0, 16, 328, 'Your have received an offer', 1, '2020-05-11 11:28:53', 3),
(150, 0, 16, 328, 'Your have received an offer', 1, '2020-05-11 11:28:53', 3),
(151, 0, 16, 329, 'Your have received an offer', 1, '2020-05-11 11:28:53', 3),
(152, 0, 16, 330, 'You have received an offer', 1, '2020-05-11 11:28:53', 3),
(153, 0, 12, 330, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(154, 0, 16, 330, 'Your payment has been done', 1, '2020-04-27 16:39:08', 1),
(155, 0, 12, 0, 'You have received a review', 1, '2020-04-27 13:16:40', 5),
(156, 0, 12, 329, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(157, 0, 16, 329, 'Your payment has been done', 1, '2020-04-27 16:39:08', 1),
(158, 0, 12, 331, 'You have received an offer', 1, '2020-05-11 11:28:53', 3),
(159, 0, 16, 331, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(160, 0, 16, 331, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(161, 0, 12, 331, 'Your payment has been done', 1, '2020-04-28 09:41:46', 1),
(162, 0, 12, 331, 'Your payment has been done', 1, '2020-04-28 09:41:46', 1),
(163, 0, 16, 0, 'Your Review: this is good', 1, '2020-04-27 14:43:06', 5),
(164, 0, 12, 0, 'ddsds', 1, '2020-04-27 14:21:55', 4),
(165, 0, 12, 0, 'dsd', 1, '2020-04-27 15:17:39', 4),
(166, 0, 16, 0, 'test', 1, '2020-04-27 15:06:31', 4),
(167, 0, 16, 0, 'hi test', 1, '2020-04-27 15:08:11', 4),
(168, 0, 16, 0, 'hee', 1, '2020-04-27 16:39:37', 4),
(169, 0, 16, 0, 'jooe', 1, '2020-04-27 16:39:37', 4),
(170, 0, 16, 0, 'teess', 1, '2020-04-27 16:39:37', 4),
(171, 0, 16, 0, 'yss', 1, '2020-04-27 16:39:37', 4),
(172, 0, 16, 0, 'rrss', 1, '2020-04-27 16:39:37', 4),
(173, 0, 16, 0, 'hey', 1, '2020-04-27 16:39:37', 4),
(174, 0, 16, 0, 'helloss', 1, '2020-04-27 16:39:37', 4),
(175, 0, 16, 0, 'huuu', 1, '2020-04-27 16:39:37', 4),
(176, 0, 16, 0, 'jhkhkjh', 1, '2020-04-27 16:39:37', 4),
(177, 0, 12, 332, 'You have received an offer', 1, '2020-05-11 11:27:38', 3),
(178, 0, 120, 332, 'Your offer has been accepted', 0, '2020-05-11 11:27:43', 3),
(179, 0, 12, 332, 'Your payment has been done', 1, '2020-04-28 09:41:46', 1),
(180, 0, 12, 328, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(181, 0, 16, 328, 'Your payment has been done', 1, '2020-04-27 17:59:57', 1),
(182, 0, 12, 328, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(183, 0, 16, 328, 'Your payment has been done', 1, '2020-04-27 17:59:57', 1),
(184, 0, 12, 326, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(185, 0, 16, 326, 'Your payment has been done', 1, '2020-04-27 19:18:53', 1),
(186, 0, 12, 320, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(187, 0, 16, 320, 'Your payment has been done', 1, '2020-04-27 19:34:40', 1),
(188, 0, 121, 333, 'You have received an offer', 0, '2020-05-11 11:27:52', 3),
(189, 0, 16, 327, 'You have received an offer', 1, '2020-05-11 11:28:53', 3),
(190, 0, 121, 334, 'You have received an offer', 0, '2020-05-11 11:27:59', 3),
(191, 0, 116, 334, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(192, 0, 121, 334, 'Your payment has been done', 0, '2020-04-28 03:07:58', 1),
(193, 0, 121, 0, 'Review: ', 0, '2020-04-28 03:11:07', 5),
(194, 0, 116, 0, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(195, 0, 121, 0, 'Your payment has been done', 0, '2020-04-28 03:11:37', 1),
(196, 0, 16, 0, 'hii', 1, '2020-04-28 09:20:54', 4),
(197, 0, 16, 335, 'You have received an offer', 1, '2020-05-11 11:28:53', 3),
(198, 0, 12, 335, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(199, 0, 12, 335, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(200, 0, 16, 335, 'Your payment has been done', 1, '2020-04-28 15:54:16', 1),
(201, 0, 16, 335, 'Your payment has been done', 1, '2020-04-28 15:54:16', 1),
(202, 0, 12, 0, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(203, 0, 16, 0, 'Your payment has been done', 1, '2020-04-28 15:54:16', 1),
(204, 0, 122, 336, 'You have received an offer', 1, '2020-05-11 11:28:53', 3),
(205, 0, 126, 338, 'You have received an offer', 0, '2020-05-11 11:28:53', 3),
(206, 0, 126, 339, 'You have received an offer', 0, '2020-05-11 11:28:53', 3),
(207, 0, 116, 327, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(208, 0, 16, 327, 'Your payment has been done', 1, '2020-04-29 12:42:14', 1),
(209, 0, 12, 316, 'Your offer has been accepted', 1, '2020-05-11 11:28:53', 3),
(210, 0, 16, 316, 'Your payment has been done', 1, '2020-04-29 12:43:47', 1),
(211, 0, 115, 340, 'You have received an offer', 1, '2020-05-11 11:28:53', 3),
(212, 0, 127, 340, 'Your offer has been accepted', 0, '2020-05-11 11:28:53', 3),
(213, 0, 115, 340, 'Your payment has been done', 1, '2020-04-30 05:24:43', 1),
(214, 0, 127, 341, 'You have received an offer', 0, '2020-05-11 11:28:53', 3),
(215, 0, 126, 341, 'Your offer has been accepted', 0, '2020-05-11 11:28:53', 3),
(216, 0, 127, 341, 'Your payment has been done', 0, '2020-05-01 05:06:50', 1),
(217, 0, 127, 342, 'You have received an offer', 0, '2020-05-11 11:28:53', 3),
(218, 0, 126, 342, 'Your offer has been accepted', 0, '2020-05-11 11:27:25', 3),
(219, 0, 127, 342, 'Your payment has been done', 0, '2020-05-01 07:47:55', 1),
(220, 0, 12, 0, 'Your offer has been accepted', 1, '2020-05-13 06:21:47', 3),
(221, 0, 16, 0, 'Your payment has been done', 1, '2020-05-01 11:02:49', 1),
(222, 0, 136, 343, 'You have received an offer', 1, '2020-05-11 11:27:28', 3),
(223, 0, 16, 343, 'Your offer has been accepted', 1, '2020-05-11 11:27:15', 3),
(224, 0, 136, 343, 'Your payment has been done', 0, '2020-05-01 11:12:27', 1),
(225, 0, 12, 344, 'You have received an offer', 1, '2020-05-13 06:21:47', 3),
(226, 0, 16, 344, 'Your offer has been accepted', 1, '2020-05-11 11:27:07', 3),
(227, 0, 12, 344, 'Your payment has been done', 1, '2020-06-01 13:56:27', 1),
(228, 0, 16, 345, 'You have received an offer', 1, '2020-05-12 13:50:26', 3),
(229, 0, 12, 345, 'Your offer has been accepted', 1, '2020-05-13 06:21:47', 3),
(230, 0, 16, 345, 'Your payment has been done', 1, '2020-05-01 11:35:46', 1),
(231, 0, 139, 346, 'You have received an offer', 1, '2020-05-11 11:26:54', 3),
(232, 0, 138, 346, 'Your offer has been accepted', 0, '2020-05-11 11:26:50', 3),
(233, 0, 139, 346, 'Your payment has been done', 1, '2020-05-02 05:26:54', 1),
(234, 0, 138, 0, 'Review: Goog work ', 0, '2020-05-02 05:30:47', 5),
(235, 0, 124, 337, 'You have received an offer', 0, '2020-05-11 11:28:53', 3),
(236, 0, 139, 347, 'You have received an offer', 1, '2020-05-11 11:26:46', 3),
(237, 0, 138, 347, 'Your offer has been accepted', 0, '2020-05-11 11:26:42', 3),
(238, 0, 139, 347, 'Your payment has been done', 1, '2020-05-02 05:45:45', 1),
(239, 0, 138, 347, 'Your offer has been accepted', 0, '2020-05-11 11:26:37', 3),
(240, 0, 139, 347, 'Your payment has been done', 1, '2020-05-02 05:45:45', 1),
(241, 0, 136, 0, 'Hi', 0, '2020-05-06 07:11:09', 4),
(242, 0, 136, 0, 'Hello', 0, '2020-05-06 07:11:33', 4),
(243, 0, 139, 351, 'You have received an offer', 1, '2020-05-11 11:26:33', 3),
(244, 0, 123, 351, 'Your offer has been accepted', 1, '2020-05-11 11:26:28', 3),
(245, 0, 139, 351, 'Your payment has been done', 1, '2020-05-09 18:02:10', 1),
(246, 0, 123, 0, 'Review: Yes good', 1, '2020-05-09 18:06:40', 5),
(247, 0, 139, 352, 'You have received an offer', 1, '2020-05-11 11:26:24', 3),
(248, 0, 123, 352, 'Your offer has been accepted', 1, '2020-05-11 11:26:20', 3),
(249, 0, 139, 352, 'Your payment has been done', 1, '2020-05-09 18:10:58', 1),
(250, 0, 123, 0, 'Review: Gogi', 1, '2020-05-09 18:15:32', 5),
(251, 0, 139, 353, 'You have received an offer', 1, '2020-05-11 11:24:15', 3),
(252, 0, 139, 354, 'You have received an offer', 1, '2020-05-11 11:24:20', 3),
(253, 0, 123, 355, 'You have received an offer', 0, '2020-05-11 11:25:13', 0),
(254, 0, 139, 355, 'Your offer has been accepted', 1, '2020-05-11 11:25:16', 3),
(255, 0, 123, 355, 'Your payment has been done', 1, '2020-05-13 22:25:52', 1),
(256, 0, 12, 356, 'You have received an offer', 1, '2020-05-13 06:21:47', 3),
(257, 0, 115, 0, 'hi', 0, '2020-05-12 11:06:41', 4),
(258, 0, 16, 0, 'hi', 1, '2020-05-12 13:50:31', 4),
(259, 0, 115, 0, 'ht', 0, '2020-05-12 11:14:07', 4),
(260, 0, 115, 0, 'ttt', 0, '2020-05-12 11:15:27', 4),
(261, 0, 16, 363, 'You have received an offer', 1, '2020-05-12 13:50:26', 3),
(262, 0, 16, 362, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(263, 0, 133, 356, 'Your offer has been accepted', 0, '2020-05-12 13:54:39', 3),
(264, 0, 12, 356, 'Your payment has been done', 1, '2020-06-01 13:56:27', 1),
(265, 0, 16, 322, 'Your offer has been accepted', 1, '2020-06-03 10:00:38', 3),
(266, 0, 12, 322, 'Your payment has been done', 1, '2020-06-01 13:56:27', 1),
(267, 0, 12, 365, 'You have received an offer', 1, '2020-05-13 06:21:47', 3),
(268, 0, 139, 365, 'Your offer has been accepted', 1, '2020-05-13 06:21:52', 3),
(269, 0, 12, 365, 'Your payment has been done', 1, '2020-06-01 13:56:27', 1),
(270, 0, 12, 366, 'You have received an offer', 1, '2020-05-13 06:21:47', 3),
(271, 0, 139, 366, 'Your offer has been accepted', 1, '2020-05-13 06:21:52', 3),
(272, 0, 12, 366, 'Your payment has been done', 1, '2020-06-01 13:56:27', 1),
(273, 0, 139, 0, 'Review: cnxj', 1, '2020-05-13 06:22:36', 5),
(274, 0, 12, 370, 'You have received an offer', 1, '2020-05-13 06:21:47', 3),
(275, 0, 139, 370, 'Your offer has been accepted', 1, '2020-05-13 09:57:27', 3),
(276, 0, 12, 370, 'Your payment has been done', 1, '2020-06-01 13:56:27', 1),
(277, 0, 139, 0, 'Review: Good WORK', 1, '2020-05-13 12:53:30', 5),
(278, 0, 12, 370, 'You have received project progress report', 1, '2020-05-13 06:53:10', 2),
(279, 0, 12, 370, 'You have received project progress report', 1, '2020-05-13 07:34:41', 2),
(280, 0, 12, 370, 'You have received project progress report', 1, '2020-05-13 07:34:41', 2),
(281, 0, 12, 370, 'You have received project progress report', 1, '2020-05-13 07:34:41', 2),
(282, 0, 12, 371, 'You have received an offer', 1, '2020-06-03 12:09:50', 3),
(283, 0, 139, 371, 'Your offer has been accepted', 1, '2020-05-13 09:57:27', 3),
(284, 0, 12, 371, 'Your payment has been done', 1, '2020-06-01 13:56:27', 1),
(285, 0, 12, 371, 'You have received project progress report', 1, '2020-05-13 07:34:41', 2),
(286, 0, 12, 371, 'You have received project progress report', 1, '2020-05-13 07:34:41', 2),
(287, 0, 139, 0, 'Review: Good WORKED', 1, '2020-05-13 12:53:30', 5),
(288, 0, 12, 371, 'You have received project progress report', 1, '2020-06-02 11:26:15', 2),
(289, 0, 12, 367, 'You have received an offer', 1, '2020-06-03 12:09:50', 3),
(290, 0, 12, 318, 'You have received an offer', 1, '2020-06-03 12:09:50', 3),
(291, 0, 16, 372, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(292, 0, 139, 372, 'Your offer has been accepted', 1, '2020-05-13 09:57:27', 3),
(293, 0, 16, 372, 'Your payment has been done', 1, '2020-05-13 09:58:34', 1),
(294, 0, 16, 372, 'You have received project progress report', 1, '2020-05-13 09:59:00', 2),
(295, 0, 139, 0, 'Review: GOod', 1, '2020-05-13 12:53:30', 5),
(296, 0, 16, 372, 'Your payment has been released', 1, '2020-05-13 10:01:53', 2),
(297, 0, 16, 372, 'Your have project is moved to completed', 1, '2020-05-13 10:01:53', 2),
(298, 0, 139, 0, 'hey', 1, '2020-05-13 12:53:27', 4),
(299, 0, 139, 370, 'Your payment has been released', 1, '2020-05-13 10:42:36', 1),
(300, 0, 12, 370, 'Your have project is moved to completed', 1, '2020-06-02 11:26:15', 2),
(301, 0, 139, 373, 'You have received an offer', 1, '2020-05-13 22:29:43', 3),
(302, 0, 16, 373, 'Your offer has been accepted', 1, '2020-06-03 10:00:38', 3),
(303, 0, 139, 373, 'Your payment has been done', 1, '2020-05-13 12:53:19', 1),
(304, 0, 139, 373, 'Your project has been moved in to delivered', 1, '2020-05-13 10:50:32', 2),
(305, 0, 16, 0, 'Review: good', 1, '2020-06-03 12:50:05', 5),
(306, 0, 139, 373, 'Your project has been moved in to delivered', 1, '2020-05-13 12:53:12', 2),
(307, 0, 16, 0, 'Review: good', 1, '2020-06-03 12:50:05', 5),
(308, 0, 16, 373, 'Your payment has been released', 1, '2020-05-13 10:52:33', 1),
(309, 0, 139, 373, 'Your have project is moved to completed', 1, '2020-05-13 12:53:12', 2),
(310, 0, 139, 374, 'You have received an offer', 1, '2020-05-13 22:29:43', 3),
(311, 0, 16, 374, 'Your offer has been accepted', 1, '2020-06-03 10:00:38', 3),
(312, 0, 139, 374, 'Your payment has been done', 1, '2020-05-13 12:53:19', 1),
(313, 0, 139, 374, 'Your project has been moved in to delivered', 1, '2020-05-13 12:53:12', 2),
(314, 0, 16, 0, 'Review: good', 1, '2020-06-03 12:50:05', 5),
(315, 0, 16, 374, 'Your payment has been released', 1, '2020-06-03 10:00:17', 1),
(316, 0, 139, 374, 'Your have project is moved to completed', 1, '2020-05-13 12:53:12', 2),
(317, 0, 139, 375, 'You have received an offer', 1, '2020-05-13 22:29:43', 3),
(318, 0, 16, 375, 'Your offer has been accepted', 1, '2020-06-03 10:00:38', 3),
(319, 0, 139, 375, 'Your payment has been done', 1, '2020-05-13 12:53:19', 1),
(320, 0, 139, 375, 'Your project has been moved in to delivered', 1, '2020-05-13 12:53:12', 2),
(321, 0, 16, 0, 'Review: gghh', 1, '2020-06-03 12:50:05', 5),
(322, 0, 16, 375, 'Your payment has been released', 1, '2020-06-03 10:00:17', 1),
(323, 0, 139, 375, 'Your have project is moved to completed', 1, '2020-05-13 12:53:12', 2),
(324, 0, 139, 375, 'Your project has been moved in to delivered', 1, '2020-05-13 12:53:12', 2),
(325, 0, 139, 375, 'Your project has been moved in to delivered', 1, '2020-05-13 12:53:12', 2),
(326, 0, 139, 375, 'Your project has been moved in to delivered', 1, '2020-05-13 12:53:12', 2),
(327, 0, 139, 375, 'Your project has been moved in to delivered', 1, '2020-05-13 12:53:12', 2),
(328, 0, 139, 375, 'Your project has been moved in to Dispute', 1, '2020-05-13 12:53:12', 2),
(329, 0, 12, 322, 'Your project has been moved in to Dispute', 1, '2020-06-02 11:26:15', 2),
(330, 0, 139, 375, 'Your project has been moved in to Dispute', 1, '2020-05-13 12:53:12', 2),
(331, 0, 139, 374, 'Your project has been moved in to Dispute', 1, '2020-05-13 12:53:12', 2),
(332, 0, 139, 373, 'Your project has been moved in to Dispute', 1, '2020-05-13 12:53:12', 2),
(333, 0, 139, 373, 'Your project has been moved in to Dispute', 1, '2020-05-13 12:53:12', 2),
(334, 0, 16, 372, 'Your project has been moved in to Dispute', 1, '2020-06-03 12:44:18', 2),
(335, 0, 123, 376, 'You have received an offer', 1, '2020-05-13 22:27:44', 3),
(336, 0, 139, 376, 'Your offer has been accepted', 1, '2020-05-13 22:32:57', 3),
(337, 0, 123, 376, 'Your payment has been done', 1, '2020-05-13 22:32:26', 1),
(338, 0, 123, 376, 'Your project has been moved in to delivered', 1, '2020-05-13 22:33:39', 2),
(339, 0, 123, 376, 'Your project has been moved in to Dispute', 1, '2020-05-13 22:37:17', 2),
(340, 0, 123, 377, 'You have received an offer', 1, '2020-05-14 14:33:17', 3),
(341, 0, 123, 377, 'You have received an offer', 1, '2020-05-14 14:35:45', 3),
(342, 0, 123, 377, 'You have received an offer', 1, '2020-05-14 14:37:32', 3),
(343, 0, 139, 377, 'Your offer has been accepted', 1, '2020-05-14 14:41:25', 3),
(344, 0, 139, 377, 'Your offer has been accepted', 1, '2020-05-14 14:41:25', 3),
(345, 0, 123, 377, 'Your payment has been done', 1, '2020-05-14 14:40:55', 1),
(346, 0, 123, 377, 'Your payment has been done', 1, '2020-05-14 14:40:55', 1),
(347, 0, 123, 377, 'Your project has been moved in to delivered', 1, '2020-05-14 14:45:08', 2),
(348, 0, 123, 377, 'Your project has been moved in to delivered', 1, '2020-05-14 14:45:08', 2),
(349, 0, 139, 0, 'Review: Ygygyuhuj', 1, '2020-05-14 14:46:21', 5),
(350, 0, 139, 377, 'Your payment has been released', 1, '2020-05-14 14:46:15', 1),
(351, 0, 123, 377, 'Your have project is moved to completed', 1, '2020-05-14 14:45:57', 2),
(352, 0, 123, 0, 'Jfjfj', 0, '2020-05-15 13:50:17', 4),
(353, 0, 139, 375, 'Your project has been moved in to Dispute', 1, '2020-05-16 07:01:32', 2),
(354, 0, 139, 375, 'Your project has been moved in to Dispute', 1, '2020-05-16 07:03:57', 2),
(355, 0, 139, 375, 'Your project has been moved in to Dispute', 1, '2020-05-16 07:03:57', 2),
(356, 0, 139, 375, 'Your project has been moved in to Dispute', 1, '2020-05-16 07:03:57', 2),
(357, 0, 139, 0, 'Review: this is for test', 1, '2020-06-04 01:51:59', 5),
(358, 0, 139, 371, 'A request to release a payment has been sent', 1, '2020-06-04 01:51:04', 1),
(359, 0, 12, 371, 'Your have project is moved to completed', 1, '2020-06-02 11:26:15', 2),
(360, 0, 16, 379, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(361, 0, 12, 379, 'Your offer has been accepted', 1, '2020-06-03 12:09:50', 3),
(362, 0, 16, 379, 'Your payment has been done', 1, '2020-06-03 10:00:17', 1),
(363, 0, 12, 0, 'Your offer has been accepted', 1, '2020-06-03 12:09:50', 3),
(364, 0, 16, 0, 'Your payment has been done', 1, '2020-06-03 10:00:17', 1),
(365, 0, 12, 0, 'Your offer has been accepted', 1, '2020-06-03 12:09:50', 3),
(366, 0, 16, 0, 'Your payment has been done', 1, '2020-06-03 10:00:17', 1),
(367, 0, 12, 380, 'You have received an offer', 1, '2020-06-03 12:09:50', 3),
(368, 0, 16, 380, 'Your offer has been accepted', 1, '2020-06-03 10:00:38', 3),
(369, 0, 12, 380, 'Your payment has been done', 1, '2020-06-03 12:10:24', 1),
(370, 0, 12, 380, 'Your project has been moved in to delivered', 1, '2020-06-03 12:10:11', 2),
(371, 0, 16, 0, 'Review: good', 1, '2020-06-03 12:50:05', 5),
(372, 0, 16, 380, 'A request to release a payment has been sent', 1, '2020-06-03 10:00:17', 1),
(373, 0, 12, 380, 'Your have project is moved to completed', 1, '2020-06-03 12:10:11', 2),
(374, 0, 16, 381, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(375, 0, 12, 381, 'Your offer has been accepted', 1, '2020-06-03 12:09:50', 3),
(376, 0, 12, 381, 'Your payment has been submitted to admin', 1, '2020-06-03 12:10:24', 1),
(377, 0, 16, 381, 'Your payment has been done', 1, '2020-06-03 10:00:17', 1),
(378, 0, 16, 381, 'Your project has been moved in to delivered', 1, '2020-06-03 12:44:18', 2),
(379, 0, 16, 381, 'Your project has been moved in to delivered', 1, '2020-06-03 12:44:18', 2),
(380, 0, 12, 0, 'Review: good job', 0, '2020-06-02 14:47:35', 5),
(381, 0, 12, 381, 'A request to release a payment has been sent', 1, '2020-06-03 12:10:24', 1),
(382, 0, 16, 381, 'Your have project is moved to completed', 1, '2020-06-03 12:44:18', 2),
(383, 0, 139, 378, 'You have received an offer', 1, '2020-06-04 01:51:50', 3),
(384, 0, 16, 382, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(385, 0, 16, 383, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(386, 0, 12, 383, 'Your offer has been accepted', 1, '2020-06-03 12:09:50', 3),
(387, 0, 12, 383, 'Your payment has been submitted to Admin', 1, '2020-06-03 12:10:24', 1),
(388, 0, 16, 383, 'Your payment has been done', 1, '2020-06-03 10:00:17', 1),
(389, 0, 16, 382, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(390, 0, 16, 382, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(391, 0, 12, 382, 'Your offer has been accepted', 1, '2020-06-03 12:09:50', 3),
(392, 0, 12, 382, 'Your payment has been submitted to Admin', 1, '2020-06-03 12:10:24', 1),
(393, 0, 16, 382, 'Your payment has been done', 1, '2020-06-03 10:00:17', 1),
(394, 0, 16, 384, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(395, 0, 16, 384, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(396, 0, 16, 384, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(397, 0, 16, 384, 'You have received an offer', 1, '2020-06-03 10:00:38', 3),
(398, 0, 139, 374, 'Your project has been moved in to Dispute', 1, '2020-06-04 01:51:18', 2),
(399, 0, 16, 379, 'Your project has been moved in to Dispute', 1, '2020-06-03 12:44:18', 2),
(400, 0, 16, 384, 'You have received an offer', 1, '2020-06-03 12:50:53', 3),
(401, 0, 16, 384, 'You have received an offer', 1, '2020-06-03 12:50:53', 3),
(402, 0, 16, 384, 'You have received an offer', 1, '2020-06-03 12:50:53', 3),
(403, 0, 16, 385, 'You have received an offer', 1, '2020-06-03 12:50:53', 3),
(404, 0, 16, 386, 'You have received an offer', 1, '2020-06-03 12:50:53', 3),
(405, 0, 12, 386, 'Your offer has been accepted', 1, '2020-06-03 12:09:50', 3),
(406, 0, 12, 386, 'Your payment has been submitted to Admin', 1, '2020-06-03 12:10:24', 1),
(407, 0, 16, 386, 'Your payment has been done', 1, '2020-06-03 12:34:32', 1),
(408, 0, 16, 386, 'Your project has been moved in to delivered', 1, '2020-06-03 12:44:18', 2),
(409, 0, 12, 0, 'Review: goid', 0, '2020-06-03 12:18:25', 5),
(410, 0, 12, 386, 'A request to release your payment has been sent  to Admin', 1, '2020-06-03 12:18:50', 1),
(411, 0, 16, 386, 'Your have project is moved to completed', 1, '2020-06-03 12:44:18', 2),
(412, 0, 12, 0, 'Helo', 0, '2020-06-03 12:25:09', 4),
(413, 0, 12, 0, 'hi this is hello', 0, '2020-06-03 12:25:30', 4),
(414, 0, 12, 0, 'hi roshi', 0, '2020-06-03 12:26:00', 4),
(415, 0, 12, 385, 'Your offer has been accepted', 0, '2020-06-03 12:36:09', 3),
(416, 0, 12, 385, 'Your payment has been submitted to Admin', 1, '2020-06-03 14:55:45', 1),
(417, 0, 16, 385, 'Your payment has been done', 0, '2020-06-03 12:36:09', 1),
(418, 0, 16, 385, 'Your project has been moved in to delivered', 1, '2020-06-03 12:44:18', 2),
(419, 0, 12, 370, 'Your project has been moved in to Dispute', 0, '2020-06-04 01:53:22', 2),
(420, 0, 12, 370, 'Your project has been moved in to Dispute', 0, '2020-06-04 01:53:29', 2),
(421, 0, 12, 366, 'Your project has been moved in to Dispute', 0, '2020-06-04 01:54:39', 2),
(422, 0, 12, 366, 'Your project has been moved in to Dispute', 0, '2020-06-04 01:54:46', 2),
(423, 0, 12, 0, 'Review: good job', 0, '2020-06-05 09:36:16', 5),
(424, 0, 12, 385, 'A request to release your payment has been sent  to Admin', 0, '2020-06-05 09:36:25', 1),
(425, 0, 16, 385, 'Your have project is moved to completed', 0, '2020-06-05 09:36:25', 2),
(426, 0, 16, 383, 'Your project has been moved in to Dispute', 0, '2020-06-15 10:09:10', 2),
(427, 0, 16, 0, 'yes', 0, '2020-06-19 07:51:43', 4),
(428, 0, 145, 384, 'Your offer has been accepted', 0, '2020-06-23 06:41:03', 3),
(429, 0, 145, 384, 'Your payment has been submitted to Admin', 0, '2020-06-23 06:41:03', 1),
(430, 0, 16, 384, 'Your payment has been done', 0, '2020-06-23 06:41:03', 1),
(431, 0, 12, 0, 'Review: good', 0, '2020-06-26 05:59:33', 5),
(432, 0, 12, 0, 'Review: goodt', 0, '2020-06-26 06:00:53', 5),
(433, 0, 12, 0, 'Review: hhsk', 0, '2020-06-26 06:01:25', 5),
(435, 0, 12, 388, 'Your payment has been submitted to Admin', 0, '2020-06-29 05:18:14', 1),
(436, 0, 147, 388, 'Your payment has been done', 0, '2020-06-29 05:18:14', 1),
(437, 0, 147, 388, 'Your project has been moved in to delivered', 0, '2020-06-29 06:21:45', 2),
(438, 0, 147, 388, 'Your project has been moved in to delivered', 0, '2020-06-29 06:24:24', 2),
(439, 0, 152, 391, 'You have received an offer', 1, '2020-06-30 01:54:43', 3),
(440, 0, 152, 391, 'You have received an offer', 1, '2020-06-30 01:54:43', 3),
(441, 0, 151, 391, 'Your offer has been accepted', 1, '2020-06-30 02:00:24', 3),
(442, 0, 151, 391, 'Your payment has been submitted to Admin', 1, '2020-06-30 02:00:16', 1),
(443, 0, 152, 391, 'Your payment has been done', 1, '2020-06-30 01:59:45', 1),
(444, 0, 152, 391, 'Your project has been moved in to delivered', 1, '2020-06-30 02:01:08', 2),
(445, 0, 152, 391, 'Your project has been moved in to delivered', 1, '2020-06-30 02:08:01', 2),
(446, 0, 152, 391, 'Your project has been moved in to delivered', 1, '2020-06-30 02:08:01', 2),
(447, 0, 152, 391, 'Your project has been moved in to delivered', 1, '2020-06-30 02:08:01', 2),
(448, 0, 152, 391, 'Your project has been moved in to delivered', 1, '2020-06-30 02:08:01', 2),
(449, 0, 151, 0, 'Review: Good ', 1, '2020-06-30 02:20:44', 5),
(450, 0, 151, 0, 'Review: Ueje', 1, '2020-06-30 02:20:44', 5),
(451, 0, 151, 391, 'A request to release your payment has been sent  to Admin', 1, '2020-06-30 02:20:33', 1),
(452, 0, 152, 391, 'Your have project is moved to completed', 1, '2020-06-30 02:08:01', 2),
(453, 0, 151, 392, 'You have received an offer', 1, '2020-06-30 02:20:39', 3),
(454, 0, 152, 392, 'Your offer has been accepted', 1, '2020-06-30 02:11:09', 3),
(455, 0, 152, 392, 'Your payment has been submitted to Admin', 1, '2020-06-30 02:11:23', 1),
(456, 0, 151, 392, 'Your payment has been done', 1, '2020-06-30 02:20:33', 1),
(457, 0, 151, 390, 'You have received an offer', 1, '2020-06-30 02:20:39', 3),
(458, 0, 152, 390, 'Your offer has been accepted', 1, '2020-06-30 02:24:49', 3),
(459, 0, 152, 390, 'Your payment has been submitted to Admin', 1, '2020-06-30 02:24:51', 1),
(460, 0, 151, 390, 'Your payment has been done', 1, '2020-06-30 02:20:33', 1),
(461, 0, 151, 392, 'Your project has been moved in to Dispute', 1, '2020-06-30 02:20:29', 2),
(462, 0, 151, 390, 'Your project has been moved in to delivered', 0, '2020-06-30 02:21:34', 2),
(463, 0, 151, 390, 'Your project has been moved in to Dispute', 0, '2020-06-30 02:22:14', 2),
(464, 0, 151, 396, 'You have received an offer', 0, '2020-07-03 09:43:29', 3),
(465, 0, 152, 397, 'You have received an offer', 0, '2020-07-03 09:48:23', 3),
(466, 0, 152, 397, 'You have received an offer', 0, '2020-07-03 09:48:44', 3),
(467, 0, 151, 397, 'Your offer has been accepted', 0, '2020-07-03 09:51:15', 3),
(468, 0, 151, 397, 'Your payment has been submitted to Admin', 0, '2020-07-03 09:51:15', 1),
(469, 0, 152, 397, 'Your payment has been done', 0, '2020-07-03 09:51:16', 1),
(470, 0, 152, 397, 'Your project has been moved in to delivered', 0, '2020-07-03 09:57:16', 2),
(471, 0, 151, 0, 'Review: Chwiya ', 0, '2020-07-03 09:58:10', 5),
(472, 0, 151, 397, 'A request to release your payment has been sent  to Admin', 0, '2020-07-03 09:58:15', 1),
(473, 0, 152, 397, 'Your have project is moved to completed', 0, '2020-07-03 09:58:15', 2),
(474, 0, 151, 398, 'You have received an offer', 0, '2020-07-05 04:39:39', 3),
(475, 0, 151, 398, 'You have received an offer', 0, '2020-07-05 04:40:01', 3),
(476, 0, 36, 398, 'Your offer has been accepted', 0, '2020-07-05 04:42:42', 3),
(477, 0, 36, 398, 'Your payment has been submitted to Admin', 0, '2020-07-05 04:42:42', 1),
(478, 0, 151, 398, 'Your payment has been done', 0, '2020-07-05 04:42:42', 1),
(479, 0, 151, 398, 'Your project has been moved in to delivered', 0, '2020-07-05 04:44:04', 2),
(480, 0, 36, 0, 'Review: Hhgg', 0, '2020-07-05 04:45:03', 5),
(481, 0, 36, 398, 'A request to release your payment has been sent  to Admin', 0, '2020-07-05 04:45:07', 1),
(482, 0, 151, 398, 'Your have project is moved to completed', 0, '2020-07-05 04:45:07', 2),
(483, 0, 16, 399, 'You have received an offer', 0, '2020-07-08 09:26:58', 3),
(484, 0, 16, 399, 'You have received an offer', 0, '2020-07-08 10:18:35', 3),
(485, 0, 153, 399, 'Your offer has been accepted', 0, '2020-07-08 11:19:29', 3),
(486, 0, 153, 399, 'Your payment has been submitted to Admin', 0, '2020-07-08 11:19:29', 1),
(487, 0, 16, 399, 'Your payment has been done', 0, '2020-07-08 11:19:29', 1),
(488, 0, 16, 400, 'You have received an offer', 0, '2020-07-08 12:24:54', 3),
(489, 0, 16, 400, 'You have received an offer', 0, '2020-07-08 12:27:10', 3),
(490, 0, 16, 399, 'Your project has been moved in to delivered', 0, '2020-07-08 14:06:01', 2),
(491, 0, 153, 0, 'Review: good', 0, '2020-07-08 14:06:55', 5),
(492, 0, 153, 399, 'A request to release your payment has been sent  to Admin', 0, '2020-07-08 14:07:04', 1),
(493, 0, 16, 399, 'Your have project is moved to completed', 0, '2020-07-08 14:07:04', 2),
(494, 0, 12, 0, 'Your offer has been accepted', 0, '2020-07-08 14:31:45', 3),
(495, 0, 12, 0, 'Your payment has been submitted to Admin', 0, '2020-07-08 14:31:45', 1),
(496, 0, 16, 0, 'Your payment has been done', 0, '2020-07-08 14:31:45', 1),
(497, 0, 16, 0, 'Your offer has been accepted', 0, '2020-07-08 14:35:04', 3),
(498, 0, 16, 0, 'Your payment has been submitted to Admin', 0, '2020-07-08 14:35:04', 1),
(499, 0, 153, 0, 'Your payment has been done', 0, '2020-07-08 14:35:04', 1),
(500, 0, 16, 0, 'Your offer has been accepted', 0, '2020-07-08 14:39:30', 3),
(501, 0, 16, 0, 'Your payment has been submitted to Admin', 0, '2020-07-08 14:39:30', 1),
(502, 0, 153, 0, 'Your payment has been done', 0, '2020-07-08 14:39:30', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `profile_image` varchar(45) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `profile_image`, `description`) VALUES
(1, 'Physique ', 'aa.png', '<p><span style=\"font-size: 14px; text-align: right; background-color: #ffffff;\">WordPress is the open source platform, which is a CMS (Content Management System). This platform creates admirable and incredible websites quickly as the platform easily manages content available on the website.</span></p>'),
(2, 'Chimie', 'aaa.png', '<p><span style=\"font-size: 14px; text-align: right; background-color: #ffffff;\">In all cases, we ensure the work Priority and support from our team for every one of your activities. Our engineering process is focused on standard methodologies, latest techniques and automated tools..</span></p>'),
(3, 'Physique', 'aaaaaa.png', '<p><span style=\"font-size: 14px; background-color: #ffffff;\">We help you boost your business prospects and harness the power of mobile application development to expand your business across the mobile domain by building both iOS and Android applications from scratch.</span></p>'),
(4, 'Physique', 'aaa1.png', '<p><span style=\"font-size: 14px; background-color: #ffffff;\">The professional Search Engine Optimization Specialist will helps in increasing the traffic at your website that in turn increase the ranking of your website in the search engine. Our experienced designers &amp; developers will ensure.&nbsp;</span></p>'),
(5, 'Chimie', 'ae02fb24c057129c98cd261bb1098470.png', '<p>As more and more people are using the online medium to enjoy shopping, therefore, one can see a large number of E-commerce websites selling and promoting businesses and at Alphawizz Technology Pvt. Ltd.</p>'),
(6, 'Physique', 'df5abe1e630e52a8eaa4a968794538c1.png', '<p><span style=\"font-size: 14px; background-color: #ffffff;\">Our affordable software maintenance and support services ensure efficient project management and minimal software downtime. You can choose from our suite of software development services depending on your requirements.</span></p>'),
(7, 'Chimie', '008f2241ba88c93296b4bcd3ce78c48e.png', '<p><span style=\"font-size: 14px; text-align: right; background-color: #ffffff;\">In all cases, we ensure the work Priority and support from our team for every one of your activities. Our engineering process is focused on standard methodologies, latest techniques and automated tools..</span></p>'),
(94, 'physique', 'aaaa1.png', '<p>lorem</p>');

-- --------------------------------------------------------

--
-- Table structure for table `project_bidding`
--

CREATE TABLE `project_bidding` (
  `id` int(100) NOT NULL,
  `demand_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `bid_description` longtext NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_bidding`
--

INSERT INTO `project_bidding` (`id`, `demand_id`, `user_id`, `bid_description`, `status`) VALUES
(1, 10, 1, 'i can work on this project', 0),
(2, 45, 1, 'i can work on this project', 0),
(3, 46, 1, 'i can work on this project', 0),
(4, 10, 196, 'i can work on this project', 1),
(5, 12, 207, 'i have to work on this type of project because i am intrestred in Litteratures & Philo.', 0),
(6, 12, 185, 'i have to work on this type of project because i am intrestred in Litteratures & Philo.', 0),
(7, 10, 1, 'i can work on this project', 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `project_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `Task Id` int(100) NOT NULL,
  `description` longtext NOT NULL,
  `budget` varchar(45) NOT NULL,
  `picture_url` varchar(45) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`project_id`, `title`, `Task Id`, `description`, `budget`, `picture_url`, `creation_date`) VALUES
(1, 'Physique', 0, 'Physique', '200', '2defc40b33e2c4fe9e60c6a803101ac4.png', '0000-00-00 00:00:00'),
(2, ' Chimie', 0, ' Chimie', '480', '9b40f925555331a7b2d4b3a2dfc57ac9.png', '0000-00-00 00:00:00'),
(3, 'Mathématiques', 0, 'Mathématiques', '200', 'e615baa3f6bffe82d2a91c3b463aa3ba.png', '0000-00-00 00:00:00'),
(4, 'Ingénierie', 0, 'Ingénierie', '200', 'bbd285119303f39ecfb938dab2135beb.png', '0000-00-00 00:00:00'),
(5, 'Informatique & Programmation', 0, 'Informatique & Programmation', '200', '66842db5e83c4f6fa41b2a7034284b82.png', '0000-00-00 00:00:00'),
(6, 'Science Médicale', 0, 'Science Médicale', '200', 'e7ffa559b14af04d48ee593cff6eab93.png', '0000-00-00 00:00:00'),
(7, 'Electricite & Electronique', 0, 'Electricite & Electronique', '200', '12dada298d3b4b0c17f6d34f3700ea84.png', '0000-00-00 00:00:00'),
(8, 'Mécanique', 0, 'Mécanique', '200', 'ea00495b91054326b9753a6bd1fb6664.png', '0000-00-00 00:00:00'),
(9, 'Outlis de calcul & Simulation', 0, 'Mecanique', '200', 'd0996213567a495057d983d42e713a49.png', '0000-00-00 00:00:00'),
(10, 'Inforgraphie & Outlis CAO', 0, 'Inforgraphie & Outlis CAO', '200', '0164bdf773d5b1a20f61fe0a046703cd.png', '0000-00-00 00:00:00'),
(11, 'Droits/Sciences po', 0, 'Droits/Sciences po', '200', 'e0ca2bdb5581ab69a9204c5eb006243e.png', '0000-00-00 00:00:00'),
(12, 'Littératures & Philo', 0, 'Littératures & Philo', '200', 'a20701df824727ab0080d9d0573940d9.png', '0000-00-00 00:00:00'),
(13, 'Economie/Finance Marketing', 0, 'Economie/Finance Marketing', '200', '7cf93ea71d1306d6e7fd6f1e22e5948f.png', '0000-00-00 00:00:00'),
(45, 'Sciences naturelles', 0, 'Sciences naturelles', '1200', 'a80c25c93f1dd3b89aee01dc8cdbd1a5.png', '0000-00-00 00:00:00'),
(46, 'Bureautique & macro', 0, 'Bureautique & macro', '12,000', '53b6d98776b4d078e419229d5567549e.png', '0000-00-00 00:00:00'),
(47, 'Langues & communication', 0, 'Langues & communication', '1200', '4ed31fd6f99034aaeb860398daea5d69.png', '0000-00-00 00:00:00'),
(48, 'Soutenance & présentation', 0, 'Soutenance & présentation', '12,000', 'e57d44baecf74eab724d25554706951f.png', '0000-00-00 00:00:00'),
(49, 'CV/Lettre/Rapport', 0, 'CV/Lettre/Rapport', '1200', '5175cf38c7a1391408fa5c18f33d316d.png', '0000-00-00 00:00:00'),
(50, 'Arts', 0, 'Arts', '12,000', 'e7e9c4b98926461523fb949590b15e99.png', '0000-00-00 00:00:00'),
(51, 'Autre', 0, 'Autre', '12,000', '7990cea5d52c51ca123852dc063741e3.png', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Project_offer`
--

CREATE TABLE `Project_offer` (
  `offer_id` int(100) NOT NULL,
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
  `client_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Project_offer`
--

INSERT INTO `Project_offer` (`offer_id`, `message`, `project_id`, `user_id`, `valid_from`, `valid_to`, `status`, `accept_budget`, `offer_budget`, `created_date`, `accept_status`, `client_id`) VALUES
(8, 'dfgdfgdf', 12, 12, '2020-03-18', '2020-03-19', 0, 0, '', '2020-04-02 00:00:00', 0, 1),
(9, 'dfgdfgdf', 12, 12, '2020-03-26', '2020-03-28', 0, 0, '', '2020-04-02 00:00:00', 0, 1),
(10, 'dfgdfgdf', 12, 12, '2020-04-29', '2020-05-22', 1, 0, '', '2020-04-02 00:00:00', 1, 1),
(11, 'dfgdfgdf', 12, 12, '2020-06-16', '2020-07-15', 0, 0, '', '2020-04-02 00:00:00', 0, 1),
(12, 'dfgdfgdf', 12, 12, '2020-03-01', '2020-03-13', 1, 0, '', '2020-04-02 00:00:00', 0, 1),
(13, 'dfgdfgdf', 12, 12, '2020-03-18', '2020-03-20', 0, 0, '', '2020-04-02 00:00:00', 0, 1),
(14, 'dfgdfgdf', 12, 12, '2020-03-28', '2020-03-30', 0, 0, '', '2020-04-02 00:00:00', 0, 1),
(15, 'dfgdfgdf', 12, 12, '2020-07-23', '2021-04-15', 0, 0, '', '2020-04-02 00:00:00', 0, 1),
(16, 'dfgdfgdf', 12, 12, '2021-08-11', '2022-08-11', 0, 0, '', '2020-04-02 00:00:00', 0, 1),
(17, 'dfgdfgdf', 12, 12, '2020-03-09', '2020-03-11', 0, 0, '', '2020-04-02 00:00:00', 0, 1),
(18, 'Test task description', 12, 12, '2020-03-26', '2020-03-27', 1, 0, '', '2020-04-02 00:00:00', 0, 1),
(19, 'Test task description', 12, 12, '2020-03-26', '2020-03-27', 1, 0, '', '2020-04-02 00:00:00', 0, 1),
(20, 'Test task description', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '100', '2020-04-02 00:00:00', 0, 1),
(21, 'Test task description', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '100', '2020-04-02 00:00:00', 0, 1),
(22, 'testing', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(23, 'testing', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(24, 'testing', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(25, 'testing', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(26, 'testing', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(27, 'testing', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(28, 'testing', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(29, 'testing', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(30, 'testing', 10, 12, '0000-00-00', '0000-00-00', 0, 2, '200', '2020-04-02 00:00:00', 0, 1),
(31, 'testing', 10, 1, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(32, 'testing', 10, 1, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-02 00:00:00', 0, 1),
(33, 'testing', 12, 1, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-04 00:00:00', 0, 0),
(34, 'testing', 12, 1, '0000-00-00', '0000-00-00', 0, 1, '200', '2020-04-03 00:00:00', 0, 0),
(35, 'sdfsdfsdfsd', 1, 45, '0000-00-00', '0000-00-00', 1, 2, '100', '2020-04-01 00:00:00', 1, 0),
(36, 'dfdfdff', 1, 45, '0000-00-00', '0000-00-00', 0, 1, '1222', '2020-04-03 00:00:00', 0, 0),
(37, 'fsdfsdfs', 1, 45, '0000-00-00', '0000-00-00', 1, 1, '2000', '2020-04-04 00:00:00', 0, 0),
(38, 'Rff', 1, 36, '0000-00-00', '0000-00-00', 0, 2, '100', '2020-03-02 00:00:00', 0, 0),
(39, 'dfsdfsdfsd', 42, 57, '0000-00-00', '0000-00-00', 0, 1, '45000', '2020-04-03 00:00:00', 0, 0),
(40, 'testtgv', 151, 16, '0000-00-00', '0000-00-00', 1, 0, '1200', '2020-03-12 00:00:00', 1, 0),
(41, 'bznzn shshsj', 152, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '2020-02-07 00:00:00', 0, 0),
(42, 'tesshh hshhshsj', 153, 16, '0000-00-00', '0000-00-00', 0, 0, '', '2020-03-12 00:00:00', 0, 0),
(43, 'okay I am ready ', 168, 57, '0000-00-00', '0000-00-00', 0, 1, '0', '2020-04-10 00:00:00', 0, 0),
(44, 'accepted by bye manash ', 171, 57, '0000-00-00', '0000-00-00', 1, 2, '100', '2020-04-01 00:00:00', 1, 0),
(45, 'Yes ', 1, 36, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(46, 'Test task description', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '100', '0000-00-00 00:00:00', 0, 0),
(47, 'hi i can do this task', 172, 58, '0000-00-00', '0000-00-00', 0, 1, '100', '0000-00-00 00:00:00', 0, 0),
(48, 'I can do this taka jdjd', 173, 58, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(49, 'testbn zjzjzjjzjzzj', 174, 16, '0000-00-00', '0000-00-00', 0, 1, '133', '0000-00-00 00:00:00', 0, 0),
(50, 'ya', 176, 16, '0000-00-00', '0000-00-00', 0, 1, '660', '0000-00-00 00:00:00', 0, 0),
(51, 'bsshzbzb zhzhzhzhhn', 177, 58, '0000-00-00', '0000-00-00', 0, 1, '158', '0000-00-00 00:00:00', 0, 0),
(52, 'i can g', 178, 58, '0000-00-00', '0000-00-00', 0, 1, '1220', '0000-00-00 00:00:00', 0, 0),
(53, 'Jhjj', 178, 12, '0000-00-00', '0000-00-00', 0, 1, '1220', '0000-00-00 00:00:00', 0, 0),
(54, 'Bsbsb', 177, 12, '0000-00-00', '0000-00-00', 0, 1, '158', '0000-00-00 00:00:00', 0, 0),
(55, 'Hhhhj', 181, 1, '0000-00-00', '0000-00-00', 1, 1, '550', '0000-00-00 00:00:00', 1, 0),
(56, 'Hgh', 181, 1, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(57, 'Ygyuu', 181, 1, '0000-00-00', '0000-00-00', 0, 1, '550', '0000-00-00 00:00:00', 0, 0),
(58, 'Gfd', 183, 88, '0000-00-00', '0000-00-00', 1, 0, '', '0000-00-00 00:00:00', 1, 0),
(59, 'Dd', 180, 88, '0000-00-00', '0000-00-00', 0, 1, '55', '0000-00-00 00:00:00', 0, 0),
(60, 'Yes', 182, 88, '0000-00-00', '0000-00-00', 0, 1, '50', '0000-00-00 00:00:00', 0, 0),
(61, 'Yes', 184, 89, '0000-00-00', '0000-00-00', 0, 2, '800', '0000-00-00 00:00:00', 0, 0),
(62, 'Thjkn\'ll', 186, 90, '0000-00-00', '0000-00-00', 0, 1, '77', '0000-00-00 00:00:00', 0, 0),
(63, 'fdgfdg', 193, 94, '0000-00-00', '0000-00-00', 0, 1, '1200', '0000-00-00 00:00:00', 0, 0),
(64, 'yes snsn', 193, 86, '0000-00-00', '0000-00-00', 0, 1, '1200', '0000-00-00 00:00:00', 0, 0),
(65, 'ggsbz zjzj', 193, 86, '0000-00-00', '0000-00-00', 0, 1, '1200', '0000-00-00 00:00:00', 0, 0),
(66, 'Ytt', 194, 88, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(67, 'Hy', 193, 88, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(68, 'I do', 186, 88, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(69, 'Hhghgh', 195, 88, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(70, 'Hfjdy', 198, 98, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(71, 'Kdid', 199, 98, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(72, 'Yes', 235, 101, '0000-00-00', '0000-00-00', 0, 2, '50', '0000-00-00 00:00:00', 0, 0),
(73, 'Ifh', 236, 103, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(74, 'this is ', 260, 86, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(75, 'hi', 262, 105, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(76, 'hi', 268, 105, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(77, 'ahaha', 269, 16, '0000-00-00', '0000-00-00', 0, 1, '0', '0000-00-00 00:00:00', 0, 0),
(78, 'zhxbd', 270, 108, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(79, 'fffhh', 270, 86, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(80, 'djddjdj', 268, 110, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(81, 'sdfsdf', 270, 104, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(82, 'Yzyz', 273, 111, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(83, 'Hjj', 273, 111, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(84, 'djjd', 272, 110, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(85, 'cjcjcj', 279, 86, '0000-00-00', '0000-00-00', 0, 0, '', '0000-00-00 00:00:00', 0, 0),
(86, 'innjn ffff', 279, 86, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(87, 'snznz xjzjhzh', 268, 86, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(88, 'Test task description', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(89, 'fific viviv', 280, 86, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(90, 'Yt', 281, 114, '0000-00-00', '0000-00-00', 0, 2, '100', '0000-00-00 00:00:00', 0, 0),
(91, 'Test task description', 12, 12, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(92, 'djdjdj', 284, 110, '0000-00-00', '0000-00-00', 0, 20, '100', '0000-00-00 00:00:00', 0, 0),
(93, 'fff', 284, 110, '0000-00-00', '0000-00-00', 0, 20, '1', '0000-00-00 00:00:00', 0, 0),
(94, 'sss', 284, 110, '0000-00-00', '0000-00-00', 0, 20, '100', '0000-00-00 00:00:00', 0, 0),
(95, 'sss', 284, 110, '0000-00-00', '0000-00-00', 0, 2, '200', '0000-00-00 00:00:00', 0, 0),
(96, 'sss', 284, 110, '0000-00-00', '0000-00-00', 0, 1, '20', '0000-00-00 00:00:00', 0, 0),
(97, 'dxxxxx', 286, 16, '0000-00-00', '0000-00-00', 0, 2, '150', '0000-00-00 00:00:00', 0, 0),
(98, 'cifogivovovovovov', 285, 16, '0000-00-00', '0000-00-00', 0, 2, '160', '0000-00-00 00:00:00', 0, 0),
(99, 'NN jHH', 287, 12, '0000-00-00', '0000-00-00', 0, 2, '102', '0000-00-00 00:00:00', 0, 0),
(100, 'qqbbzbbzbz', 290, 12, '0000-00-00', '0000-00-00', 0, 0, '150', '0000-00-00 00:00:00', 0, 0),
(101, 'Yes', 291, 118, '0000-00-00', '0000-00-00', 0, 2, '1555', '0000-00-00 00:00:00', 0, 0),
(102, 'Hyujjhj', 292, 118, '0000-00-00', '0000-00-00', 0, 1, '555', '0000-00-00 00:00:00', 0, 0),
(103, 'ckckcjckf fkfk', 293, 12, '0000-00-00', '0000-00-00', 0, 0, '120', '0000-00-00 00:00:00', 0, 0),
(104, 'szjj zjzjzj', 294, 16, '0000-00-00', '0000-00-00', 0, 0, '100', '0000-00-00 00:00:00', 0, 0),
(105, 'vvg gh', 295, 12, '0000-00-00', '0000-00-00', 0, 0, '180', '0000-00-00 00:00:00', 0, 0),
(106, 'Jdjdjjdje', 308, 119, '0000-00-00', '0000-00-00', 0, 2, '119', '0000-00-00 00:00:00', 0, 0),
(107, 'Yrr', 309, 116, '0000-00-00', '0000-00-00', 0, 2, '10', '0000-00-00 00:00:00', 0, 0),
(108, 'cificivi', 310, 16, '0000-00-00', '0000-00-00', 0, 1, '60', '0000-00-00 00:00:00', 0, 0),
(109, 'vbhhh', 311, 12, '0000-00-00', '0000-00-00', 0, 0, '200', '0000-00-00 00:00:00', 0, 0),
(110, 'fjfj cjcjckcmvvk', 313, 12, '0000-00-00', '0000-00-00', 1, 0, '100', '0000-00-00 00:00:00', 1, 0),
(111, 'hello sir I accepted', 314, 16, '0000-00-00', '0000-00-00', 0, 2, '120', '0000-00-00 00:00:00', 0, 0),
(112, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(113, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(114, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(115, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(116, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(117, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(118, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(119, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(120, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(121, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(122, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(123, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(124, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(125, 'Test task description', 314, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(126, 'accepted ssjsjzjzjz', 316, 12, '0000-00-00', '0000-00-00', 1, 0, '10', '0000-00-00 00:00:00', 1, 0),
(127, 'hey', 319, 16, '0000-00-00', '0000-00-00', 1, 0, '120', '0000-00-00 00:00:00', 1, 0),
(128, 'cccc.  ffffff', 320, 12, '0000-00-00', '0000-00-00', 1, 0, '150', '0000-00-00 00:00:00', 1, 0),
(129, 'scwcwc e wc', 321, 12, '0000-00-00', '0000-00-00', 1, 0, '140', '0000-00-00 00:00:00', 1, 0),
(130, 'ifific vivivib', 322, 16, '0000-00-00', '0000-00-00', 1, 0, '50', '0000-00-00 00:00:00', 1, 0),
(131, 'cj. jvivvivigivk', 323, 16, '0000-00-00', '0000-00-00', 1, 0, '5', '0000-00-00 00:00:00', 1, 0),
(132, 'vi jcucucucuc', 324, 12, '0000-00-00', '0000-00-00', 1, 0, '9', '0000-00-00 00:00:00', 1, 0),
(133, 'v hhh', 325, 12, '0000-00-00', '0000-00-00', 1, 0, '30', '0000-00-00 00:00:00', 1, 0),
(134, ' vvb h', 326, 12, '0000-00-00', '0000-00-00', 1, 0, '12', '0000-00-00 00:00:00', 1, 0),
(135, 'Bb zzzb', 328, 12, '0000-00-00', '0000-00-00', 1, 0, '60', '0000-00-00 00:00:00', 1, 0),
(136, 'Test task description', 328, 16, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(137, 'Test task description', 328, 12, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(138, 'Test task description', 328, 12, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(139, 'Test task description', 328, 12, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(140, 'Test task description', 328, 12, '0000-00-00', '0000-00-00', 0, 1, '150', '0000-00-00 00:00:00', 0, 0),
(141, 'this is offer', 329, 12, '0000-00-00', '0000-00-00', 1, 0, '10', '0000-00-00 00:00:00', 1, 0),
(142, 'this is for test', 330, 12, '0000-00-00', '0000-00-00', 1, 0, '20', '0000-00-00 00:00:00', 1, 0),
(143, 'oKAY I AM AGREE', 331, 16, '0000-00-00', '0000-00-00', 1, 2, '30', '0000-00-00 00:00:00', 1, 0),
(144, 'Gffffg', 332, 120, '0000-00-00', '0000-00-00', 1, 0, '177', '0000-00-00 00:00:00', 1, 0),
(145, 'Hhjj', 333, 116, '0000-00-00', '0000-00-00', 1, 2, '', '0000-00-00 00:00:00', 1, 0),
(146, 'Hvhh', 327, 116, '0000-00-00', '0000-00-00', 1, 2, '667', '0000-00-00 00:00:00', 1, 0),
(147, 'Jhjj', 334, 116, '0000-00-00', '0000-00-00', 1, 0, '1111', '0000-00-00 00:00:00', 1, 0),
(148, 'dggvv', 335, 12, '0000-00-00', '0000-00-00', 1, 0, '300', '0000-00-00 00:00:00', 1, 0),
(149, 'Yyu', 336, 123, '0000-00-00', '0000-00-00', 0, 2, '77', '0000-00-00 00:00:00', 0, 0),
(150, 'sznn zj', 338, 125, '0000-00-00', '0000-00-00', 0, 0, '120', '0000-00-00 00:00:00', 0, 0),
(151, 'sbzzb', 339, 115, '0000-00-00', '0000-00-00', 0, 2, '0', '0000-00-00 00:00:00', 0, 0),
(152, 'fffff', 340, 127, '0000-00-00', '0000-00-00', 1, 0, '120', '0000-00-00 00:00:00', 1, 0),
(153, 'aj', 341, 126, '0000-00-00', '0000-00-00', 1, 0, '250', '0000-00-00 00:00:00', 1, 0),
(154, 'vjckco', 342, 126, '0000-00-00', '0000-00-00', 1, 0, '120', '0000-00-00 00:00:00', 1, 0),
(155, 'I accepted', 343, 16, '0000-00-00', '0000-00-00', 1, 1, '120', '0000-00-00 00:00:00', 1, 0),
(156, 'I accepted', 344, 16, '0000-00-00', '0000-00-00', 1, 0, '150', '0000-00-00 00:00:00', 1, 0),
(157, 'accepted from ankit', 345, 12, '0000-00-00', '0000-00-00', 1, 0, '80', '0000-00-00 00:00:00', 1, 0),
(158, 'YES IS DO', 346, 138, '0000-00-00', '0000-00-00', 1, 2, '99', '0000-00-00 00:00:00', 1, 0),
(159, 'HJJ', 337, 138, '0000-00-00', '0000-00-00', 0, 0, '9999', '0000-00-00 00:00:00', 0, 0),
(160, 'KKK', 347, 138, '0000-00-00', '0000-00-00', 1, 0, '525', '0000-00-00 00:00:00', 1, 0),
(161, 'Ueue', 351, 123, '0000-00-00', '0000-00-00', 1, 2, '7373', '0000-00-00 00:00:00', 1, 0),
(162, 'Ygyy', 352, 123, '0000-00-00', '0000-00-00', 1, 0, '495', '0000-00-00 00:00:00', 1, 0),
(163, 'Kdk', 353, 123, '0000-00-00', '0000-00-00', 1, 0, '0', '0000-00-00 00:00:00', 1, 0),
(164, 'Uueu', 354, 123, '0000-00-00', '0000-00-00', 1, 0, '22', '0000-00-00 00:00:00', 1, 0),
(165, 'Urue', 355, 139, '0000-00-00', '0000-00-00', 1, 0, '555', '0000-00-00 00:00:00', 1, 0),
(166, 'vvggg', 356, 133, '0000-00-00', '0000-00-00', 1, 0, '120', '0000-00-00 00:00:00', 1, 0),
(167, 'dffdf', 363, 12, '0000-00-00', '0000-00-00', 1, 0, '120', '0000-00-00 00:00:00', 1, 0),
(168, 'sfsdfsdf', 362, 12, '0000-00-00', '0000-00-00', 0, 0, '0', '0000-00-00 00:00:00', 0, 0),
(169, 'fdff', 365, 139, '0000-00-00', '0000-00-00', 1, 0, '0', '0000-00-00 00:00:00', 1, 0),
(170, 'test\n', 366, 139, '0000-00-00', '0000-00-00', 1, 0, '200', '0000-00-00 00:00:00', 1, 0),
(171, 'hi accepted', 370, 139, '0000-00-00', '0000-00-00', 1, 0, '230', '0000-00-00 00:00:00', 1, 0),
(172, 'this is accepted', 371, 139, '0000-00-00', '0000-00-00', 1, 0, '330', '0000-00-00 00:00:00', 1, 0),
(173, 'I am ready to work', 367, 16, '0000-00-00', '0000-00-00', 1, 0, '220', '0000-00-00 00:00:00', 1, 0),
(174, 'testing done', 318, 16, '0000-00-00', '0000-00-00', 0, 0, '120', '0000-00-00 00:00:00', 0, 0),
(175, 'this s accept', 372, 139, '0000-00-00', '0000-00-00', 1, 0, '440', '0000-00-00 00:00:00', 1, 0),
(176, 'accepted', 373, 16, '0000-00-00', '0000-00-00', 1, 1, '120', '0000-00-00 00:00:00', 1, 0),
(177, 'hi', 374, 16, '0000-00-00', '0000-00-00', 1, 0, '130', '0000-00-00 00:00:00', 1, 0),
(178, 'hiiiiii', 375, 16, '0000-00-00', '0000-00-00', 1, 0, '130', '0000-00-00 00:00:00', 1, 0),
(179, 'Gzyzy', 376, 139, '0000-00-00', '0000-00-00', 1, 0, '500', '0000-00-00 00:00:00', 1, 0),
(180, 'Hfj', 377, 139, '0000-00-00', '0000-00-00', 1, 2, '89', '0000-00-00 00:00:00', 1, 0),
(181, 'Ejjkj', 377, 139, '0000-00-00', '0000-00-00', 0, 0, '500', '0000-00-00 00:00:00', 0, 0),
(182, 'Kfkrkle', 377, 139, '0000-00-00', '0000-00-00', 0, 2, '8383939', '0000-00-00 00:00:00', 0, 0),
(183, 'I am onyly ready to work on my amount', 379, 12, '0000-00-00', '0000-00-00', 1, 2, '120', '0000-00-00 00:00:00', 1, 0),
(184, 'this for test offer', 380, 16, '0000-00-00', '0000-00-00', 1, 0, '100', '0000-00-00 00:00:00', 1, 0),
(185, 'testing', 381, 12, '0000-00-00', '0000-00-00', 1, 2, '110', '0000-00-00 00:00:00', 1, 0),
(186, 'hello', 378, 12, '0000-00-00', '0000-00-00', 0, 2, '0', '0000-00-00 00:00:00', 0, 0),
(187, 'I can do it', 382, 12, '0000-00-00', '0000-00-00', 1, 2, '300', '0000-00-00 00:00:00', 1, 0),
(188, 'offer accepted', 383, 12, '0000-00-00', '0000-00-00', 1, 0, '566', '0000-00-00 00:00:00', 1, 0),
(189, 'I can do it again', 382, 12, '0000-00-00', '0000-00-00', 0, 0, '350', '0000-00-00 00:00:00', 0, 0),
(190, 'yes', 382, 12, '0000-00-00', '0000-00-00', 0, 0, '350', '0000-00-00 00:00:00', 0, 0),
(191, 'this for test', 384, 12, '0000-00-00', '0000-00-00', 0, 0, '150', '2020-06-02 00:00:00', 0, 0),
(192, 'txnxnzn xjxjjjn', 384, 12, '0000-00-00', '0000-00-00', 0, 2, '130', '2020-06-01 08:35:03', 0, 0),
(193, 'anna zb', 384, 12, '0000-00-00', '0000-00-00', 0, 2, '120', '2020-06-03 08:35:34', 0, 0),
(194, 'sbzb djzjzj', 384, 145, '0000-00-00', '0000-00-00', 1, 2, '120', '2020-06-03 09:31:47', 1, 0),
(195, 'hey he', 384, 145, '0000-00-00', '0000-00-00', 0, 2, '120', '2020-06-03 10:14:15', 0, 0),
(196, 'nazn', 384, 145, '0000-00-00', '0000-00-00', 0, 2, '12', '2020-06-03 10:15:32', 0, 0),
(197, 'shzhzhzh', 384, 145, '0000-00-00', '0000-00-00', 0, 1, '150', '2020-06-03 10:16:16', 0, 0),
(198, 'I ADOPTED OT IT', 385, 12, '0000-00-00', '0000-00-00', 1, 0, '350', '2020-06-03 11:49:17', 1, 0),
(199, 'OKAY I ACCEPTED  IT', 0, 12, '0000-00-00', '0000-00-00', 1, 2, '100', '2020-06-03 11:50:02', 1, 0),
(200, 'i accept it', 388, 12, '0000-00-00', '0000-00-00', 1, 0, '400', '2020-06-28 13:06:20', 1, 4),
(204, 'THIS IS TEST', 387, 147, '0000-00-00', '0000-00-00', 0, 0, '3010', '2020-06-28 13:06:29', 0, 12),
(208, 'testing testing', 387, 148, '0000-00-00', '0000-00-00', 0, 1, '5000', '2020-06-18 07:12:16', 0, 12),
(211, 'I can ', 391, 151, '0000-00-00', '0000-00-00', 1, 2, '150', '2020-06-30 01:54:13', 1, 0),
(212, 'Yes', 391, 151, '0000-00-00', '0000-00-00', 0, 0, '200', '2020-06-30 01:54:30', 0, 0),
(213, 'Jzuz, ', 392, 152, '0000-00-00', '0000-00-00', 1, 0, '199', '2020-06-30 02:09:51', 1, 0),
(214, 'Ryt, ', 390, 152, '0000-00-00', '0000-00-00', 1, 0, '121', '2020-06-30 02:15:13', 1, 0),
(215, '', 32, 4, '0000-00-00', '0000-00-00', 0, 0, '', '2020-06-30 02:59:40', 0, 2),
(216, 'Jjj', 396, 152, '0000-00-00', '0000-00-00', 1, 2, '15yed', '2020-07-03 09:43:29', 1, 0),
(217, 'Uejek', 397, 151, '0000-00-00', '0000-00-00', 0, 0, '356', '2020-07-03 09:48:23', 0, 0),
(218, 'Hdhdh', 397, 151, '0000-00-00', '0000-00-00', 1, 2, '737', '2020-07-03 09:48:44', 1, 0),
(219, '', 1, 4, '0000-00-00', '0000-00-00', 0, 1, '2000', '2020-07-03 10:17:02', 0, 14),
(220, 'Hgh', 398, 36, '0000-00-00', '0000-00-00', 1, 0, '772', '2020-07-05 04:39:39', 1, 0),
(221, 'Hhh', 398, 36, '0000-00-00', '0000-00-00', 1, 2, '77', '2020-07-05 04:40:01', 1, 0),
(222, 'I can do it', 399, 12, '0000-00-00', '0000-00-00', 0, 2, '100', '2020-07-08 09:26:58', 0, 0),
(223, 'I can do it in this price', 399, 153, '0000-00-00', '0000-00-00', 1, 2, '122', '2020-07-08 10:18:35', 1, 0),
(224, 'let me do it', 400, 153, '0000-00-00', '0000-00-00', 0, 2, '123', '2020-07-08 12:24:54', 0, 0),
(225, 'this is my', 400, 12, '0000-00-00', '0000-00-00', 1, 2, '127', '2020-07-08 12:27:10', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project_status`
--

CREATE TABLE `project_status` (
  `id` int(25) NOT NULL,
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `your_comments` varchar(255) NOT NULL,
  `project_files` text NOT NULL,
  `project_status` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `project_image` text NOT NULL,
  `client_id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_status`
--

INSERT INTO `project_status` (`id`, `project_id`, `user_id`, `your_comments`, `project_files`, `project_status`, `date_created`, `date_updated`, `project_image`, `client_id`) VALUES
(1, 12, 12, 'This is in progress', 'Test.docx', 1, '2020-03-24 00:00:00', '2020-04-02 08:05:42', 'dummy-project.png', 1),
(2, 12, 0, 'Test task description', 'Testxx.docx', 1, '2020-03-25 06:14:22', '2020-04-02 08:05:49', 'dummy-project.png', 1),
(3, 12, 12, 'Test task description', 'Testxx.docx', 1, '2020-03-25 06:17:50', '2020-04-02 08:05:53', 'dummy-project.png', 1),
(4, 0, 0, '', 'Testxx.docx', 0, '2020-03-25 10:44:15', '2020-04-02 08:05:55', 'dummy-project.png', 1),
(5, 0, 0, '', '', 0, '2020-03-25 14:04:59', '2020-04-02 08:05:57', 'dummy-project.png', 1),
(6, 0, 0, '', '', 0, '2020-03-25 15:29:56', '2020-04-02 08:06:02', 'dummy-project.png', 1),
(7, 12, 12, 'My comment : i finished again', 'Testxx.docx', 1, '2020-03-25 16:06:51', '2020-04-02 08:06:04', 'dummy-project.png', 1),
(8, 10, 12, 'My comment : i finished again', 'Testxx.docx', 1, '2020-03-25 16:06:53', '2020-04-02 08:06:24', 'dummy-project.png', 1),
(9, 35, 12, 'My comment : i finished again', 'Testxx.docx', 1, '2020-03-25 16:07:01', '2020-04-02 08:06:51', 'dummy-project.png', 12),
(10, 35, 12, 'My comment : i finished again', 'Testxx.docx', 1, '2020-03-25 16:57:52', '2020-04-02 08:06:57', 'dummy-project.png', 12),
(11, 12, 12, 'My comment : i finished asdfsdfdsdfsdfgain', '', 1, '2020-03-27 14:32:35', '2020-04-02 08:07:03', '', 1),
(12, 35, 1, 'My comment : i finished asdfsdfdsdfsdfgain', '', 1, '2020-03-27 14:32:37', '2020-04-02 08:07:11', '', 12),
(13, 4, 36, 'My comment : i finished again', '', 1, '2020-04-01 14:24:00', '2020-04-02 08:07:36', '', 1),
(14, 4, 36, 'Jejzuzj', '', 1, '2020-04-01 14:24:11', '2020-04-02 08:07:39', '', 1),
(15, 4, 45, 'My comment : i finished again', '', 1, '2020-04-02 08:17:37', '2020-04-02 08:17:37', '', 0),
(16, 4, 45, 'My comment : i finished again', 'Screenshot_15856401128.png,Screenshot_15856401128.png', 1, '2020-04-02 08:23:24', '2020-04-03 12:59:17', 'Screenshot_15856401128.png,Screenshot_15856401128.png', 0),
(17, 12, 12, 'Test task description', '', 1, '2020-04-02 12:02:53', '2020-04-02 12:02:53', '', 0),
(18, 12, 12, 'Test task description', 'Screenshot_15856401133.png', 1, '2020-04-02 13:02:53', '2020-04-02 13:02:53', 'Screenshot_15856401128.png', 0),
(19, 12, 12, 'Test task description', 'activity_bottom_search.xml,brands_fragment_row.xml,category_fragment_row.xml', 1, '2020-04-02 13:03:18', '2020-04-02 13:03:18', 'Screenshot_15856401129.png,brands_fragment_row.xml,category_fragment_row.xml', 0),
(20, 12, 12, 'Test task description', 'activity_bottom_search1.xml,brands_fragment_row1.xml,category_fragment_row1.xml', 2, '2020-04-02 13:15:27', '2020-04-02 13:15:27', 'Screenshot_158564011210.png,brands_fragment_row1.xml,category_fragment_row1.xml', 0),
(21, 4, 57, 'My comment : i finished again', 'demo.txt', 1, '2020-04-04 06:19:53', '2020-04-04 06:19:53', '20200305_16525475.jpg,image-b82d17b3-2c40-4140-bada-df6bf92d8a5236.jpg', 0),
(22, 4, 57, 'My comment : i finished again', 'demo.txt', 1, '2020-04-04 06:23:48', '2020-04-04 06:23:48', 'image-5b043e46-5d72-4081-82e2-fd1cbbe759551.jpg,image-39032306-5a7b-4800-a461-0a74a29376a47.jpg', 0),
(23, 1, 36, 'My comment : i finished again', 'moblle_icn_42.png', 1, '2020-04-05 14:42:16', '2020-06-22 16:19:09', '', 0),
(24, 178, 58, 'My comment : i finished again', 'IMG-20200409-WA00087.jpg', 1, '2020-04-09 13:32:07', '2020-04-09 13:32:07', 'IMG-20200409-WA00072.jpg,IMG-20200409-WA00043.jpg,IMG-20200409-WA00088.jpg', 0),
(25, 181, 1, 'Ygjhjkk', 'magazine-unlock-01-2_3_3982-_66B2AC769C67ECF8BA13041201F28C8E1.jpg', 1, '2020-04-11 19:50:43', '2020-04-11 19:50:43', '', 0),
(26, 184, 88, 'Hin', '', 1, '2020-04-13 18:18:08', '2020-04-13 18:18:08', '', 0),
(27, 184, 88, 'All alo', 'Screenshot_20200413_200956_com_frelance.jpg', 1, '2020-04-13 18:18:57', '2020-04-13 18:18:57', 'Screenshot_20200413_200956_com_frelance1.jpg', 0),
(28, 186, 90, 'G finiii ton travail ', 'IMG-20200413-WA0025.jpg', 1, '2020-04-13 20:24:17', '2020-04-13 20:24:17', 'IMG-20200413-WA0030.jpg', 0),
(29, 186, 90, 'Safiii saliiiit', '', 1, '2020-04-13 20:25:59', '2020-04-13 20:25:59', '', 0),
(30, 186, 90, 'Safiii saliiiit', '', 1, '2020-04-13 20:26:07', '2020-04-13 20:26:07', '', 0),
(31, 186, 90, 'Safiii saliiiit', '', 1, '2020-04-13 20:26:15', '2020-04-13 20:26:15', '', 0),
(32, 186, 90, 'Safiii saliiiit', '', 1, '2020-04-13 20:26:29', '2020-04-13 20:26:29', 'IMG-20200413-WA00251.jpg', 0),
(33, 195, 88, 'My comment : i finished djdidkagain', '', 1, '2020-04-14 20:31:43', '2020-04-14 20:31:43', 'Screenshot_20200414_222952_com_frelance.jpg', 0),
(34, 235, 101, 'My comment : i finished again', '', 1, '2020-04-15 23:47:59', '2020-04-15 23:47:59', '', 0),
(35, 236, 103, 'My comment : i finished again', '', 1, '2020-04-16 00:23:47', '2020-04-16 00:23:47', '', 0),
(36, 236, 103, 'My comment : i eftjfinished again', '', 1, '2020-04-16 00:33:15', '2020-04-16 00:33:15', 'Screenshot_20200416_013846.jpg', 0),
(37, 260, 86, 'Mcccxxy comment : i finished again', '', 1, '2020-04-16 12:03:51', '2020-04-16 12:03:51', '', 0),
(38, 260, 86, 'this is another', '', 1, '2020-04-16 12:04:41', '2020-04-16 12:04:41', '', 0),
(39, 260, 86, 'yet another', 'IMG-20200415-WA0009.jpg', 1, '2020-04-16 12:06:05', '2020-04-16 12:06:05', 'IMG-20200413-WA0027.jpg,IMG-20200414-WA00031.jpg,IMG-20200414-WA00121.jpg', 0),
(40, 280, 86, 'heegegegeg comment : i finished ain', 'IMG-20200417-WA0009.jpg', 1, '2020-04-17 15:09:46', '2020-04-17 15:09:46', 'IMG-20200417-WA0010.jpg,IMG-20200417-WA00091.jpg,IMG-20200417-WA00041.jpg', 0),
(41, 281, 114, 'My comment : i  hi', '', 1, '2020-04-17 17:16:57', '2020-04-17 17:16:57', 'magazine-unlock-01-2_3_4052-_1BA74ADCA942EBC37D9999209A40B507.jpg,magazine-unlock-01-2_3_4052-_9E25B122B54D201A235A67C36E14BC65.jpg', 0),
(42, 281, 114, 'My comment : i xejeieiekrlel', 'magazine-unlock-01-2_3_4052-_1BA74ADCA942EBC37D9999209A40B5071.jpg', 1, '2020-04-17 17:18:10', '2020-04-17 17:18:10', '', 0),
(43, 260, 86, 'My comment : i finished again shshshh', 'VID-20200418-WA0009.mp4,IMG-20200418-WA0008.jpg', 1, '2020-04-18 05:01:52', '2020-04-18 05:01:52', 'IMG-20200418-WA00081.jpg,IMG-20200418-WA0008.jpg', 0),
(44, 176, 16, 'My comment : i finished again', '', 1, '2020-04-18 09:57:15', '2020-04-18 09:57:15', '', 0),
(45, 287, 12, 'zbnzn zjzjzj', 'IMG-20200420-WA0015.jpg', 1, '2020-04-20 07:14:26', '2020-04-20 07:14:26', 'IMG-20200420-WA00151.jpg,IMG-20200420-WA0005.jpg,IMG-20200419-WA0050.jpg,IMG-20200419-WA0054.jpg,IMG-20200419-WA0055.jpg', 0),
(46, 287, 12, 'gggvgcc bh', 'IMG-20200419-WA00551.jpg', 1, '2020-04-20 07:15:34', '2020-04-20 07:15:34', 'IMG-20200419-WA0017.jpg,IMG-20200419-WA0015.jpg,IMG-20200418-WA0031.jpg', 0),
(47, 287, 12, 'My commencxzcxct : i finished again', '', 1, '2020-04-20 11:26:20', '2020-04-20 11:26:20', '', 0),
(48, 287, 12, 'My commencxzcxct : sdfsdfsdi finished again', '', 1, '2020-04-20 11:26:45', '2020-04-20 11:26:45', '', 0),
(49, 287, 12, 'My comment : i finished again', '', 1, '2020-04-20 11:29:44', '2020-04-20 11:29:44', '', 0),
(50, 287, 12, 'My comment : i finished again', '', 1, '2020-04-20 11:29:51', '2020-04-20 11:29:51', '', 0),
(51, 287, 12, 'My comment : i finished again', '', 1, '2020-04-20 11:31:02', '2020-04-20 11:31:02', '', 0),
(52, 287, 0, '', '', 0, '2020-04-20 11:32:34', '2020-04-20 11:32:34', '', 0),
(53, 12, 12, 'Test task description', '', 1, '2020-04-20 11:36:03', '2020-04-20 11:36:03', '', 0),
(54, 287, 12, 'My comment : i finished again', 'IMG_20200420_050100.jpg', 1, '2020-04-20 12:01:32', '2020-04-20 12:01:32', 'IMG_20200420_050058.jpg', 0),
(55, 287, 12, 'My comment : i finished again', '', 1, '2020-04-20 12:02:07', '2020-04-20 12:02:07', '', 0),
(56, 287, 12, 'My comment : i finished again', '', 1, '2020-04-20 12:10:10', '2020-04-20 12:10:10', '', 0),
(57, 291, 118, 'Jjjkkhgtn', 'IMG-20200417-WA0002.jpg,IMG-20200422-WA0007.jpg,IMG-20200417-WA0001.jpg', 1, '2020-04-22 03:57:29', '2020-04-22 03:57:29', 'IMG-20200420-WA0062.jpg,IMG-20200422-WA0007.jpg,IMG-20200417-WA0001.jpg', 0),
(58, 291, 118, 'My comment : i finished again', '', 1, '2020-04-22 04:00:23', '2020-04-22 04:00:23', '', 0),
(59, 291, 118, 'My comment : i finished agai7uuuun', '', 1, '2020-04-22 04:01:34', '2020-04-22 04:01:34', 'Screenshot_20200422_055712_com_frelance.jpg', 0),
(60, 293, 12, 'cjckc cjckck kvkvkvkv', 'IMG-20200422-WA0014.jpg', 1, '2020-04-22 11:01:21', '2020-04-22 11:01:21', 'IMG-20200422-WA0024.jpg,IMG-20200422-WA00141.jpg,IMG-20200421-WA0031.jpg', 0),
(61, 290, 116, 'My comment : i finishghbvhed again', '', 1, '2020-04-22 14:48:01', '2020-04-22 14:48:01', '', 0),
(62, 294, 16, 'hey pldndn jdjsjj', 'IMG-20200423-WA0009.jpg', 1, '2020-04-23 06:21:59', '2020-04-23 06:21:59', 'IMG-20200423-WA00071.jpg,IMG-20200423-WA0003.jpg', 0),
(63, 294, 16, 'My comment : i finished again', 'IMG-20200423-WA00091.jpg', 1, '2020-04-23 06:24:16', '2020-04-23 06:24:16', 'IMG-20200423-WA00072.jpg,IMG-20200423-WA00092.jpg', 0),
(64, 294, 16, 'this is for test', '', 1, '2020-04-24 05:12:00', '2020-04-24 05:12:00', 'IMG-20200423-WA0036.jpg', 0),
(65, 294, 16, 'this is for test', '', 1, '2020-04-24 05:16:12', '2020-04-24 05:16:12', '', 0),
(66, 295, 116, 'My comment : i finished aghjjain', '', 1, '2020-04-24 06:31:56', '2020-04-24 06:31:56', '', 0),
(67, 291, 119, 'My comment : i finished again', '', 1, '2020-04-24 13:34:54', '2020-04-24 13:34:54', '', 0),
(68, 308, 119, 'My comment : i finished again', '', 1, '2020-04-24 13:44:54', '2020-04-24 13:44:54', '', 0),
(69, 309, 116, 'My comment : i finished again', '', 1, '2020-04-24 21:12:21', '2020-04-24 21:12:21', 'Screenshot_20200424_225726_com_frelance.jpg', 0),
(70, 309, 116, 'My comment : i finished ajhuhjhgcvgain', '', 1, '2020-04-24 21:13:16', '2020-04-24 21:13:16', '', 0),
(71, 310, 16, 'dhdhduf. vv', '', 1, '2020-04-25 05:42:21', '2020-04-25 05:42:21', '', 0),
(72, 311, 12, 'this is delivered', 'IMG-20200425-WA0020.jpg', 1, '2020-04-25 07:36:15', '2020-04-25 07:36:15', 'Screenshot_20200425-122317.png,IMG-20200425-WA0008.jpg,IMG-20200425-WA0012.jpg', 0),
(73, 311, 12, 'this is delivered', 'IMG-20200425-WA00201.jpg', 1, '2020-04-25 07:37:33', '2020-04-25 07:37:33', 'Screenshot_20200425-1223171.png,IMG-20200425-WA00081.jpg,IMG-20200425-WA00121.jpg', 0),
(74, 311, 12, 'this is againn', '', 1, '2020-04-25 07:43:43', '2020-04-25 07:43:43', '', 0),
(75, 311, 12, 'fuvivivig ', '', 1, '2020-04-25 12:16:40', '2020-04-25 12:16:40', '', 0),
(76, 313, 12, 'gg chchcucucucu fhfhcuf', '', 1, '2020-04-25 13:24:07', '2020-04-25 13:24:07', '', 0),
(77, 314, 16, 'My comment : i finished again', '', 1, '2020-04-25 13:32:28', '2020-04-25 13:32:28', 'IMG_20200420_0500584.jpg', 0),
(78, 323, 16, 'test bsh ss', '', 1, '2020-04-27 06:00:20', '2020-04-27 06:00:20', '', 0),
(79, 325, 12, 'hey hhh', '', 1, '2020-04-27 06:07:37', '2020-04-27 06:07:37', '', 0),
(80, 330, 12, 'this is delivered', '', 1, '2020-04-27 12:37:39', '2020-04-27 12:37:39', '', 0),
(81, 331, 16, 'My comment :I HAVE PARTIALLY DONE IT\n', '', 1, '2020-04-27 12:56:03', '2020-04-27 12:56:03', '', 0),
(82, 331, 16, 'My comment :I HAVE PARTIALLY DONE IT IIIIIDFSD\n', '', 1, '2020-04-27 12:57:08', '2020-04-27 12:57:08', '', 0),
(83, 331, 16, 'My comment :DONE THIRD', '', 1, '2020-04-27 12:59:38', '2020-04-27 12:59:38', 'IMG_20200420_0500585.jpg,IMG_20200420_0501003.jpg', 0),
(84, 309, 116, 'My comment : i finished agajjin', '', 1, '2020-04-28 03:05:05', '2020-04-28 03:05:05', '', 0),
(85, 334, 116, 'My comment : i finished again', '', 1, '2020-04-28 03:09:49', '2020-04-28 03:09:49', '', 0),
(86, 346, 138, 'My comment : i finished again', '', 1, '2020-05-02 05:27:40', '2020-05-02 05:27:40', '', 0),
(87, 346, 138, 'My comment : i finished again', '', 1, '2020-05-02 05:29:02', '2020-05-02 05:29:02', '', 0),
(88, 346, 138, 'My comment : i finished again', '', 1, '2020-05-02 05:29:45', '2020-05-02 05:29:45', '', 0),
(89, 347, 138, 'My comment : i finished again', '', 1, '2020-05-02 05:36:03', '2020-05-02 05:36:03', '', 0),
(90, 351, 123, 'My comment : i finished again', '', 1, '2020-05-09 18:03:30', '2020-05-09 18:03:30', '', 0),
(91, 352, 123, 'My comment : i finished again', '', 1, '2020-05-09 18:11:41', '2020-05-09 18:11:41', '', 0),
(92, 366, 139, 'ggfgfg', '', 1, '2020-05-12 14:26:38', '2020-05-12 14:26:38', '', 0),
(93, 322, 16, 'gg', 'IMG-20200511-WA00225.jpg', 1, '2020-05-12 16:00:30', '2020-05-12 16:00:30', '', 0),
(94, 370, 139, 'this is for test', 'IMG-20200505-WA0012.jpg,smartpickup_api.docx', 1, '2020-05-13 06:26:25', '2020-05-13 06:26:25', 'IMG-20200511-WA0009.jpg,smartpickup_api.docx', 0),
(95, 370, 12, 'Test task description', '', 1, '2020-05-13 06:49:14', '2020-05-13 06:49:14', '', 0),
(96, 370, 12, 'Test task description', '', 1, '2020-05-13 06:50:02', '2020-05-13 06:50:02', '', 0),
(97, 371, 139, 'this is progress', 'smartpickup_api1.docx', 1, '2020-05-13 07:34:18', '2020-05-13 07:34:18', '', 0),
(98, 371, 139, 'this is progress', 'smartpickup_api2.docx', 1, '2020-05-13 07:34:20', '2020-05-13 07:34:20', 'IMG-20200505-WA00121.jpg', 0),
(99, 372, 139, 'this is delinn', '', 1, '2020-05-13 09:58:09', '2020-05-13 09:58:09', '', 0),
(100, 373, 16, 'Hello Testing', '', 1, '2020-05-13 10:50:15', '2020-05-13 10:50:15', '', 0),
(101, 373, 16, 'hi', '', 1, '2020-05-13 10:51:32', '2020-05-13 10:51:32', '', 0),
(102, 374, 16, 'hi', '1589292683081.png', 1, '2020-05-13 10:58:22', '2020-05-13 10:58:22', '', 0),
(103, 375, 16, 'hi I am testing', 'PDOBGAudioRecording.3gp', 1, '2020-05-13 11:02:50', '2020-05-13 11:02:50', 'IMG_20200502_0339323.jpg', 0),
(104, 375, 16, 'fgfdgfdfgfdg', '', 1, '2020-05-13 11:05:12', '2020-05-13 11:05:12', 'IMG_20200502_0339324.jpg', 0),
(105, 375, 16, 'yyyyyyyyyyyy', 'MMOBCAudioRecording.3gp', 1, '2020-05-13 11:06:33', '2020-05-13 11:06:33', 'IMG_20200502_0339325.jpg,1589292683081.png', 0),
(106, 375, 16, 'yyyyyyyyyyyy', 'MMOBCAudioRecording.3gp', 1, '2020-05-13 11:06:36', '2020-05-13 11:06:36', 'IMG_20200502_0339326.jpg,1589292683081.png', 0),
(107, 375, 16, 'uuu', '', 1, '2020-05-13 11:08:15', '2020-05-13 11:08:15', 'IMG_20200502_0339327.jpg', 0),
(108, 376, 139, 'Ueueueueueueueu', '', 1, '2020-05-13 22:33:27', '2020-05-13 22:33:27', '', 0),
(109, 377, 139, 'Guh', 'imageedit_8_26653527951.png', 1, '2020-05-14 14:43:34', '2020-05-14 14:43:34', 'Screenshot_20200514_163649.jpg', 0),
(110, 377, 139, 'Guh', 'imageedit_8_26653527952.png', 1, '2020-05-14 14:43:41', '2020-05-14 14:43:41', 'Screenshot_20200514_1636491.jpg', 0),
(111, 380, 16, 'test progress', '', 1, '2020-06-02 12:55:40', '2020-06-02 12:55:40', '', 0),
(112, 381, 12, 'I am done to my end', '', 1, '2020-06-02 14:46:59', '2020-06-02 14:46:59', '', 0),
(113, 381, 12, 'I am done to my end', '', 1, '2020-06-02 14:47:09', '2020-06-02 14:47:09', '', 0),
(114, 386, 12, 'Good', 'IMG_20200523_051135.jpg', 1, '2020-06-03 12:12:47', '2020-06-03 12:12:47', '', 0),
(115, 385, 12, 'hi', '', 1, '2020-06-03 12:36:43', '2020-06-03 12:36:43', '', 0),
(116, 1, 147, 'testing delivery', 'moblle_icn_42.png', 1, '2020-02-21 00:00:00', '2020-06-20 12:03:24', '', 14),
(117, 388, 12, 'Hello I have update', '', 1, '2020-06-29 06:21:44', '2020-06-29 06:21:44', '', 0),
(118, 388, 12, 'Hello I have update on this', 'IMG_20200629_114114.jpg,IMG-20200627-WA0016.jpg', 1, '2020-06-29 06:24:24', '2020-06-29 06:24:24', '', 0),
(119, 391, 151, 'Jejeueuz', '', 1, '2020-06-30 02:00:54', '2020-06-30 02:00:54', 'IMG-20200629-WA0019.jpg', 0),
(120, 391, 151, 'Hzhzh', '', 1, '2020-06-30 02:04:25', '2020-06-30 02:04:25', '', 0),
(121, 391, 151, 'Jdjej', '', 1, '2020-06-30 02:05:59', '2020-06-30 02:05:59', '', 0),
(122, 391, 151, 'Jdjej', 'Script.docx', 1, '2020-06-30 02:06:15', '2020-06-30 02:06:15', '', 0),
(123, 391, 151, 'Jdjej', 'Script1.docx', 1, '2020-06-30 02:06:18', '2020-06-30 02:06:18', '', 0),
(124, 390, 152, 'Ujj', '', 1, '2020-06-30 02:21:33', '2020-06-30 02:21:33', '', 0),
(125, 397, 151, 'Vzbsb', '', 1, '2020-07-03 09:57:16', '2020-07-03 09:57:16', '', 0),
(126, 398, 36, 'Hjh', '', 1, '2020-07-05 04:44:04', '2020-07-05 04:44:04', '', 0),
(127, 399, 153, 'this is new delivery', '', 1, '2020-07-08 14:06:00', '2020-07-08 14:06:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `publishDemand`
--

CREATE TABLE `publishDemand` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` longtext NOT NULL,
  `currency` varchar(100) NOT NULL,
  `budget` varchar(45) NOT NULL,
  `project_category` int(100) NOT NULL,
  `client_id` int(100) NOT NULL,
  `file` varchar(45) NOT NULL,
  `image` longtext NOT NULL,
  `created` date NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publishDemand`
--

INSERT INTO `publishDemand` (`id`, `title`, `description`, `currency`, `budget`, `project_category`, `client_id`, `file`, `image`, `created`, `status`) VALUES
(10, 'freelancer', 'i can work on this project', '$', '45000', 0, 2, 'salary3.pdf', 'a38.png', '2020-02-21', 0),
(11, 'freelancer', 'i can work on this project', '$', '45000', 32, 2, 'salary4.pdf', '4e3d8c9ea986e76ebe5d42d6fa10a195.jpeg', '2020-02-19', 0),
(12, 'freelancer1', 'i can work on this project', '$', '45000', 3, 2, 'salary5.pdf', '34464b3d917345591411edde0b15c913.png', '2020-02-18', 0),
(13, 'freelancer', 'i can work on this project', '$', '45000', 2, 1, 'salary6.pdf', 'a311.png', '2020-02-17', 0),
(14, 'auth module', 'i need a project for manage my all auth type project ', '$', '12,000', 4, 2, 'salary7.pdf', 'Screenshot_from_2019-12-05_15-03-17.png', '2020-02-21', 1),
(15, 'auth module', 'i need a project for manage my all auth type project ', '$', '12,000', 4, 1, 'salary8.pdf', 'Screenshot_from_2019-12-05_15-03-171.png', '2020-02-21', 1),
(16, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '1,20000', 10, 12, '', 'Screenshot_from_2019-11-29_14-14-36.png', '2020-02-16', 1),
(20, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '1,20000', 5, 12, 'latter.pdf', 'Screenshot_from_2019-11-29_14-14-3623.png', '2020-02-15', 2),
(21, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '1,20000', 5, 12, 'latter1.pdf', 'Screenshot_from_2019-11-29_14-14-3624.png', '2020-02-24', 2),
(22, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '1,20000', 5, 12, 'latter2.pdf', 'Screenshot_from_2019-11-29_14-14-3625.png', '2020-02-16', 2),
(23, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 12, 'latter3.pdf', 'Screenshot_from_2019-11-29_14-14-3626.png', '2020-02-10', 3),
(24, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 12, 'latter4.pdf', 'Screenshot_from_2019-11-29_14-14-3627.png', '2020-02-05', 3),
(25, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 12, '', '', '2020-02-02', 3),
(26, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 12, '', '', '2020-02-02', 3),
(27, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 12, '', '', '2020-02-11', 4),
(28, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 12, '', 'aboutus.png', '2020-02-05', 4),
(29, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 12, 'latter5.pdf', 'Screenshot_from_2019-11-29_14-14-3628.png', '2020-02-05', 4),
(40, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 6, 'AP_sheet.ods', '', '0000-00-00', 4),
(41, 'codegniter project', 'i need a admin panel for manage all my project of company', '$', '5', 5, 6, 'AP_sheet1.ods', '', '0000-00-00', 4),
(42, 'Test task', 'Test task description', '', '200', 1, 1, '', '', '0000-00-00', 0),
(43, 'Test task', 'Test task description', '', '200', 1, 1, 'logo34.png', '', '0000-00-00', 0),
(44, 'Test task', 'Test task description', '', '200', 1, 1, 'header-banner.jpg', '', '0000-00-00', 0),
(45, 'Test task', 'Test task description', '', '100', 1, 1, 'close.png', '', '0000-00-00', 0),
(46, 'Test task', 'Test task description', '', '100', 1, 1, 'close1.png', '', '0000-00-00', 0),
(47, 'Test task', 'Test task description', '', '100', 1, 1, '', '', '0000-00-00', 0),
(48, 'Test task', 'Test task description', '', '100', 1, 1, '', '', '0000-00-00', 0),
(49, 'Test task', 'Test task description', '', '100', 1, 1, '', '', '0000-00-00', 0),
(50, 'Test task', 'Test task description', '', '100', 1, 1, '', '', '0000-00-00', 0),
(51, 'Test task', 'Test task description', '', '100', 1, 1, '', '', '0000-00-00', 0),
(52, 'Test task', 'Test taskhfghfg\nfghfghfgh description', '', '100', 1, 1, '', '', '0000-00-00', 0),
(53, 'Test task', 'Test taskhfghfg\nfghfghfgh description', '', '100', 1, 1, '', '', '0000-00-00', 0),
(54, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(55, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(56, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(57, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(58, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(59, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(60, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(61, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(62, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(63, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(64, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(65, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(66, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(67, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(68, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(69, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(70, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(71, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(72, 'Physique', '', '', '500', 1, 1, '', '', '0000-00-00', 0),
(73, 'Physique', '', '', '500', 1, 1, '', '', '0000-00-00', 0),
(74, 'Physique', '', '', '500', 1, 1, '', '', '0000-00-00', 0),
(75, ' Chimie', 'xyz......\n', '', '500', 2, 1, '', '', '0000-00-00', 0),
(76, ' Chimie', 'asdfghbcdh\nhfdz\n', '', '50', 2, 1, '', '', '0000-00-00', 0),
(77, 'Physique', 'dgndgjgjdgjgsj', '', '500', 1, 1, '', '', '0000-00-00', 0),
(78, 'Physique', 'hffdd', '', '12', 0, 1, '', '', '0000-00-00', 0),
(79, ' Chimie', 'qwert\nfghjk\nnbcs\nligcfhj\njh', '', '500', 2, 1, '', '', '0000-00-00', 0),
(80, 'Physique', 'dfsdfsdfsdfsdfsdfsdfsdfsdfsgfdgfdgfdgfdgdfgdfgdfgdfgdfg', '', '100', 1, 1, '', '', '0000-00-00', 0),
(81, ' Chimie', 'fuucng\njcyfguog\nnchgu\nfuydfu\njffudu\n', '', '500', 2, 1, '', '', '0000-00-00', 0),
(82, ' Chimie', 'hey\nloginpage if we enter wrong mail I\'d with correct password then popup should incorrect mail I\'d but it\'s show popup incorrect password\n\n\nin profile page\nname tab is supposed to do edit name but it is unable to update the name \n\nbirth tab it\'s showing clander after 2020 \n\nin promotion page\nin sentence € sign is missing', '', '500', 2, 1, '', '', '0000-00-00', 0),
(83, 'Test task', 'Test task description', '', '200', 1, 1, '', 'Untitlxed1.png,Untitledg1.png', '0000-00-00', 0),
(84, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(85, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(86, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(87, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(88, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(89, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(90, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(91, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(92, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(93, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(94, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(95, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(96, 'fsdfsd', 'sfsdfsds', '', '12', 2, 1, '', '', '0000-00-00', 0),
(97, 'fsdfsd', 'sfsdfsds', '', '12', 2, 1, '', '', '0000-00-00', 0),
(98, 'fsdfsd', 'sfsdfsds', '', '12', 2, 1, '', '', '0000-00-00', 0),
(99, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(100, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(101, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(102, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(103, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(104, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(105, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(106, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(107, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(108, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(109, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(110, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(111, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(112, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(113, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(114, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(115, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(116, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(117, 'Test task', 'Test task description', '', '200', 1, 1, 'Untitledsdd2.png,Untitlessdd4.png,Untitlded4.', 'Screenshot_from_2020-03-02_18-35-154.png,test', '0000-00-00', 0),
(118, 'fsdfsd', 'sfsdfsds', '', '12', 2, 1, 'debug.log', '', '0000-00-00', 0),
(119, 'fsdfsd', 'sfsdfsds', '', '12', 2, 1, 'debug.log', '', '0000-00-00', 0),
(120, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(121, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(122, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(123, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(124, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(125, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(126, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(127, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(128, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(129, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(130, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(131, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(132, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(133, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(134, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(135, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(136, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(137, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(138, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(139, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(140, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(141, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(142, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(143, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(144, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(145, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(146, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(147, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(148, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(149, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(150, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(151, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(152, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(153, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(154, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(155, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(156, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(157, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(158, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(159, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(160, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(161, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(162, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(163, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(164, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(165, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(166, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(167, '', '', '', '', 0, 0, '', '', '0000-00-00', 0),
(168, 'Physique', 'sdfsdfsdf', '', '0', 1, 1, '', '', '0000-00-00', 0),
(169, 'Physique', 'sdfsdfsdf', '', '0', 1, 1, '', '', '0000-00-00', 0),
(170, 'fsdfsd', 'sfsdfsds', '', '12', 0, 1, 'debug.log', '', '0000-00-00', 0),
(171, 'fsdfsd', 'sfsdfsds', '', '12', 0, 0, 'debug.log', '', '0000-00-00', 0),
(172, 'fsdfsd', 'sfsdfsds', '', '12', 0, 0, '', '', '0000-00-00', 0),
(173, 'Physique', 'rwerwerwer', '', '033', 1, 1, '', '', '0000-00-00', 0),
(174, 'Physique', 'fsdfsd', '', '10', 1, 1, '', '', '0000-00-00', 0),
(175, 'Physique', 'fsdfsd', '', '10', 1, 1, '', '', '0000-00-00', 0),
(176, 'Physique', 'erwerew', '', '10', 1, 1, '', '', '0000-00-00', 0),
(177, 'Physique', 'erwerew', '', '10', 1, 1, '', '', '0000-00-00', 0),
(178, 'Physique', 'rerwer', '', '10', 1, 1, '', '', '0000-00-00', 0),
(179, 'Physique', 'rerwer', '', '10', 1, 1, '', '', '0000-00-00', 0),
(180, 'Physique', 'rerwer', '', '10', 1, 1, '', '', '0000-00-00', 0),
(181, 'Physique', 'hkjhkjh1', '', '10', 1, 1, '', '', '0000-00-00', 0),
(182, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, '', '', '0000-00-00', 0),
(183, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, 'debug.log', '', '0000-00-00', 0),
(184, 'Test task', 'Test task description', '', '200', 1, 1, 'Untitledsdd3.png,Untitlessdd5.png,Untitlded5.', 'Screenshot_from_2020-03-02_18-35-155.png,test', '0000-00-00', 0),
(185, 'Physique', 'hkjhkjh1', '', '10', 1, 1, '', '', '0000-00-00', 0),
(186, 'Physique', 'hkjhkjh1', '', '10', 1, 1, '', '', '0000-00-00', 0),
(187, 'fsdfsd', 'sfsdfsds', '', '12', 2, 1, 'Untitledsdd4.png,Untitlessdd6.png', 'cleaning.txt', '0000-00-00', 0),
(188, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, 'debug.log', '', '0000-00-00', 0),
(189, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, 'demo.txt', '', '0000-00-00', 0),
(190, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, 'demo.txt,Screenshot_1585640086.png,Screenshot', 'Screenshot_1585640085.png,Screenshot_15856400', '0000-00-00', 0),
(191, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, '', 'Screenshot_15856400851.png,Screenshot_1585640', '0000-00-00', 0),
(192, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, '', 'Screenshot_15856400852.png,Screenshot_1585640', '0000-00-00', 0),
(193, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, 'demo.txt,Screenshot_15856401123.png', 'Screenshot_15856401093.png,Screenshot_1585640', '0000-00-00', 0),
(194, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, '', 'Screenshot_15856401094.png,Screenshot_1585640', '0000-00-00', 0),
(195, 'Physique', 'ggv\n', '', '10', 1, 1, '', 'image-39032306-5a7b-4800-a461-0a74a29376a4.jp', '0000-00-00', 0),
(196, 'Physique', 'ggv\n', '', '10', 1, 1, '', 'image-39032306-5a7b-4800-a461-0a74a29376a41.j', '0000-00-00', 0),
(197, 'Physique', 'ggv\n', '', '10', 1, 1, '', 'image-39032306-5a7b-4800-a461-0a74a29376a42.j', '0000-00-00', 0),
(198, 'Physique', 'ggv\n', '', '10', 1, 1, '', 'image-39032306-5a7b-4800-a461-0a74a29376a43.j', '0000-00-00', 0),
(199, 'Physique', 'ggv\n', '', '10', 1, 1, '', 'image-39032306-5a7b-4800-a461-0a74a29376a44.j', '0000-00-00', 0),
(200, 'Physique', 'ggv\n', '', '10', 1, 1, '', 'image-39032306-5a7b-4800-a461-0a74a29376a45.j', '0000-00-00', 0),
(201, 'Physique', 'ghhjj', '', '100', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a52.jp', '0000-00-00', 0),
(202, 'Physique', 'ghhjj', '', '100', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a521.j', '0000-00-00', 0),
(203, 'Physique', 'ghhjj', '', '100', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a522.j', '0000-00-00', 0),
(204, 'Physique', 'ghhjj', '', '100', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a523.j', '0000-00-00', 0),
(205, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, 'demo.txt,Screenshot_15856401125.png', 'Screenshot_15856401095.png,Screenshot_1585640', '0000-00-00', 0),
(206, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(207, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(208, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(209, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(210, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(211, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(212, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(213, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(214, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(215, 'Physique', 'thh', '', '0', 1, 1, '', '', '0000-00-00', 0),
(216, 'Physique', 'ggg\n', '', '110', 1, 1, '', '', '0000-00-00', 0),
(217, 'Physique', 'ggg\n', '', '110', 1, 1, '', '', '0000-00-00', 0),
(218, 'Physique', 'ggg\n', '', '110', 1, 1, '', '', '0000-00-00', 0),
(219, 'Physique', 'ggg\nghb', '', '0', 1, 1, '', '20200305_165254.jpg,image-b82d17b3-2c40-4140-', '0000-00-00', 0),
(220, 'Physique', 'ggg\nghb', '', '0', 1, 1, '', '20200305_1652541.jpg,image-b82d17b3-2c40-4140', '0000-00-00', 0),
(221, 'Physique', 'ggg\nghb', '', '0', 1, 1, '', '20200305_1652542.jpg,image-b82d17b3-2c40-4140', '0000-00-00', 0),
(222, 'Physique', 'ggg\nghb', '', '0', 1, 1, '', '20200305_1652543.jpg,image-b82d17b3-2c40-4140', '0000-00-00', 0),
(223, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, '', 'Screenshot_15856401096.png,Screenshot_1585640', '0000-00-00', 0),
(224, 'Physique', 'fhdd', '', '0', 1, 1, '', '20200305_1652544.jpg,image-b82d17b3-2c40-4140', '0000-00-00', 0),
(225, 'Physique', 'hi I am ', '', '110', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a529.j', '0000-00-00', 0),
(226, 'fsdfsd', 'sfsdfsds', '', '12', 12, 1, 'demo.txt,Screenshot_15856401127.png', 'Screenshot_15856401097.png,Screenshot_15856401127.png', '0000-00-00', 0),
(227, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_1652545.jpg,', '0000-00-00', 0),
(228, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_1652546.jpg,', '0000-00-00', 0),
(229, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_1652547.jpg,', '0000-00-00', 0),
(230, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_1652548.jpg,', '0000-00-00', 0),
(231, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_1652549.jpg,', '0000-00-00', 0),
(232, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525410.jpg,', '0000-00-00', 0),
(233, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525411.jpg,', '0000-00-00', 0),
(234, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525412.jpg,', '0000-00-00', 0),
(235, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525413.jpg,', '0000-00-00', 0),
(236, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525414.jpg,', '0000-00-00', 0),
(237, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525415.jpg,', '0000-00-00', 0),
(238, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525416.jpg,', '0000-00-00', 0),
(239, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525417.jpg,', '0000-00-00', 0),
(240, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525418.jpg,', '0000-00-00', 0),
(241, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525419.jpg,', '0000-00-00', 0),
(242, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525420.jpg,', '0000-00-00', 0),
(243, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525421.jpg,', '0000-00-00', 0),
(244, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525422.jpg,', '0000-00-00', 0),
(245, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525423.jpg,', '0000-00-00', 0),
(246, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525424.jpg,', '0000-00-00', 0),
(247, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525425.jpg,', '0000-00-00', 0),
(248, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525426.jpg,', '0000-00-00', 0),
(249, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525427.jpg,', '0000-00-00', 0),
(250, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525428.jpg,', '0000-00-00', 0),
(251, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525429.jpg,', '0000-00-00', 0),
(252, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525430.jpg,', '0000-00-00', 0),
(253, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525431.jpg,', '0000-00-00', 0),
(254, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525432.jpg,', '0000-00-00', 0),
(255, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525433.jpg,', '0000-00-00', 0),
(256, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525434.jpg,', '0000-00-00', 0),
(257, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525435.jpg,', '0000-00-00', 0),
(258, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525436.jpg,', '0000-00-00', 0),
(259, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525437.jpg,', '0000-00-00', 0),
(260, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525438.jpg,', '0000-00-00', 0),
(261, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525439.jpg,', '0000-00-00', 0),
(262, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525440.jpg,', '0000-00-00', 0),
(263, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525441.jpg,', '0000-00-00', 0),
(264, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525442.jpg,', '0000-00-00', 0),
(265, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525443.jpg,', '0000-00-00', 0),
(266, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525444.jpg,', '0000-00-00', 0),
(267, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525445.jpg,', '0000-00-00', 0),
(268, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525446.jpg,', '0000-00-00', 0),
(269, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525447.jpg,', '0000-00-00', 0),
(270, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525448.jpg,', '0000-00-00', 0),
(271, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525449.jpg,', '0000-00-00', 0),
(272, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525450.jpg,', '0000-00-00', 0),
(273, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525451.jpg,', '0000-00-00', 0),
(274, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525452.jpg,', '0000-00-00', 0),
(275, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525453.jpg,', '0000-00-00', 0),
(276, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525454.jpg,', '0000-00-00', 0),
(277, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525455.jpg,', '0000-00-00', 0),
(278, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525456.jpg,', '0000-00-00', 0),
(279, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525457.jpg,', '0000-00-00', 0),
(280, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525458.jpg,', '0000-00-00', 0),
(281, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525459.jpg,', '0000-00-00', 0),
(282, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525460.jpg,', '0000-00-00', 0),
(283, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525461.jpg,', '0000-00-00', 0),
(284, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525462.jpg,', '0000-00-00', 0),
(285, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525463.jpg,', '0000-00-00', 0),
(286, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525464.jpg,', '0000-00-00', 0),
(287, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525465.jpg,', '0000-00-00', 0),
(288, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525466.jpg,', '0000-00-00', 0),
(289, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525467.jpg,', '0000-00-00', 0),
(290, 'Physique', 'ffv\n', '', '0', 1, 1, '', '', '0000-00-00', 0),
(291, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525468.jpg,', '0000-00-00', 0),
(292, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525469.jpg,', '0000-00-00', 0),
(293, 'Physique', 'ffv\n', '', '0', 1, 1, '', '20200305_16525470.jpg,', '0000-00-00', 0),
(294, 'Physique', 'vvv', '', '0', 1, 1, '', '', '0000-00-00', 0),
(295, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5210.jpg,', '0000-00-00', 0),
(296, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5211.jpg,', '0000-00-00', 0),
(297, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5212.jpg,', '0000-00-00', 0),
(298, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5213.jpg,', '0000-00-00', 0),
(299, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5214.jpg,', '0000-00-00', 0),
(300, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5215.jpg,', '0000-00-00', 0),
(301, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5216.jpg,', '0000-00-00', 0),
(302, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5217.jpg,', '0000-00-00', 0),
(303, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5218.jpg,', '0000-00-00', 0),
(304, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5219.jpg,', '0000-00-00', 0),
(305, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5220.jpg,', '0000-00-00', 0),
(306, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5221.jpg,', '0000-00-00', 0),
(307, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5222.jpg,', '0000-00-00', 0),
(308, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5223.jpg,', '0000-00-00', 0),
(309, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5224.jpg,', '0000-00-00', 0),
(310, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5225.jpg,', '0000-00-00', 0),
(311, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5226.jpg,', '0000-00-00', 0),
(312, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5227.jpg,', '0000-00-00', 0),
(313, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5228.jpg,', '0000-00-00', 0),
(314, 'Physique', 'ggyy', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5229.jpg,', '0000-00-00', 0),
(315, 'Physique', 'yyy\n', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5230.jpg,', '0000-00-00', 0),
(316, 'Physique', 'yyy\n', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5231.jpg,', '0000-00-00', 0),
(317, 'Physique', 'yyy\n', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5232.jpg,', '0000-00-00', 0),
(318, 'Physique', 'yyy\n', '', '0', 1, 1, '', 'image-b82d17b3-2c40-4140-bada-df6bf92d8a5233.jpg,', '0000-00-00', 0),
(319, 'fsdfsd', 'sfsdfsds', '', '12', 2, 1, 'Untitledsdd5.png,Untitlessdd7.png', 'test2.png', '0000-00-00', 0),
(320, 'physique', ' lorem ipsum lorem ipsum lorem ipsum', '', '50$', 0, 0, 'Sumans_Kitchen_Pictures.pdf', '', '0000-00-00', 0),
(321, 'math', 'lorem lorem ', '', '50$', 3, 0, 'user.png', '', '0000-00-00', 0),
(322, 'Physique', 'QWERCTFUYH', '', '650$', 1, 0, 'user2.png', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `stripe_card_details`
--

CREATE TABLE `stripe_card_details` (
  `id` int(11) NOT NULL,
  `stripe_customer_id` varchar(255) NOT NULL,
  `stripe_card_id` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL,
  `user_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stripe_card_details`
--

INSERT INTO `stripe_card_details` (`id`, `stripe_customer_id`, `stripe_card_id`, `date_created`, `user_id`) VALUES
(1, 'cus_HZxiNRjIfSf8OX', 'card_1H0nnCJPZuhal6eZ5gDTWiM6', '2020-07-03 14:14:58', 16);

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(25) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `title`, `description`, `date_created`, `date_updated`) VALUES
(1, 'test', 'ddfdf dfdsf dsfds fdsf dsfdfdffddf', '2020-03-19 00:00:00', '2020-03-19 14:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(25) NOT NULL,
  `sent_from` int(255) NOT NULL,
  `sent_to` int(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `tra_id` text NOT NULL,
  `created_date` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `mission_id` int(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `sent_from`, `sent_to`, `amount`, `tra_id`, `created_date`, `username`, `project_title`, `mission_id`) VALUES
(1, 1, 2, '1000', 'txn_1GUD9lJPZuhal6eZx1ddXnBEPV', '2020-04-03 00:00:00', 'test', 'Project Title1', 0),
(2, 2, 1, '2000', 'txn_1GUD9lJPZuhal6erddfx1XnBEPV', '2020-04-03 00:00:00', 'test2', 'Project Title2', 0),
(3, 1, 2, '1200', 'txn_1GUD9lJPZuhal6eZ4ggx1XnBEPV', '2020-04-22 00:00:00', 'testu', 'test projectd', 0),
(4, 1, 2, '1300', 'txn_1GUD9lJPZuhal6eZx1XnBEPV', '2020-04-03 00:00:00', 'dfsdfdfs', 'test', 0),
(5, 2, 1, '1233', 'txn_1GUD9lJPZuhal1321nBEPV', '2020-04-02 00:00:00', 'asddsad', 'sadsadssdsdsd', 0),
(6, 2, 7, '1233', 'txn_1GUD9lJPZuhal6eZx1XnBEPV', '2020-04-02 00:00:00', 'asddsad', 'sadsadssdsdsd', 0),
(9, 119, 116, '100', 'txn_1GbRnHJPZuhal6eZ0qd43cCN', '2020-04-24 13:42:14', '1@gmail.com', '', 0),
(10, 116, 116, '100', 'txn_1GbRr7JPZuhal6eZIipbGhtP', '2020-04-24 13:46:12', '1@gmail.com', 'Arts', 0),
(11, 116, 119, '100', 'txn_1GbYnSJPZuhal6eZgnYi4f8m', '2020-04-24 21:10:53', 'user 2 ', '', 0),
(12, 119, 119, '100', 'txn_1GbYrHJPZuhal6eZ0cJvqQo2', '2020-04-24 21:14:51', 'user 2 ', 'Science Médicale', 0),
(29, 120, 12, '100', 'txn_1GcaDwJPZuhal6eZOf4N0URf', '2020-04-27 16:54:27', 'roshani demo', 'Physique', 0),
(53, 139, 123, '555', 'txn_1GgxN6JPZuhal6eZcrXhjoLZ', '2020-05-09 18:26:00', '34', '', 0),
(52, 123, 139, '495', 'txn_1Ggx7kJPZuhal6eZMFPaLS8w', '2020-05-09 18:10:07', '91', 'Mathématiques', 0),
(34, 116, 121, '100', 'txn_1GcjndJPZuhal6eZhP1jlQ6A', '2020-04-28 03:07:56', '14', '', 0),
(35, 116, 121, '100', 'txn_1GcjrBJPZuhal6eZS9dV969s', '2020-04-28 03:11:36', '14', 'Informatique & Programmation', 0),
(51, 123, 139, '56', 'txn_1GgwynJPZuhal6eZycn5WNiO', '2020-05-09 18:00:52', '91', '', 0),
(50, 138, 139, '100', 'txn_1GeE0lJPZuhal6eZcbVNoc0a', '2020-05-02 05:35:38', '91', 'Ingénierie', 0),
(49, 138, 139, '100', 'txn_1GeE0kJPZuhal6eZLJNwqmgi', '2020-05-02 05:35:37', '91', 'Ingénierie', 0),
(48, 138, 139, '100', 'txn_1GeDs7JPZuhal6eZMAuwhppR', '2020-05-02 05:26:42', '91', '', 0),
(41, 127, 115, '100', 'txn_1GdUryJPZuhal6eZLqtvp9sP', '2020-04-30 05:23:33', 'sam lei', '', 0),
(42, 126, 127, '100', 'txn_1Gdr5JJPZuhal6eZWZBe2wTo', '2020-05-01 05:06:48', 'ajoshi', '', 0),
(43, 126, 127, '100', 'txn_1GdtbCJPZuhal6eZ8wQFdAP7', '2020-05-01 07:47:53', 'ajoshi', '', 0),
(46, 16, 12, '150', 'txn_1GdwyEJPZuhal6eZgp3IV4ol', '2020-05-01 11:23:54', 'roshani demo', '', 0),
(73, 12, 16, '392', 'txn_1Gpr56JPZuhal6eZmFumPU4m', '2020-06-03 07:32:11', 'Vasim', 'Physique', 382),
(54, 133, 12, '120', 'txn_1GhyZ9JPZuhal6eZv6eMLdq2', '2020-05-12 13:54:38', 'roshani demo', '', 356),
(55, 16, 12, '50', 'txn_1Ghyk4JPZuhal6eZmZc4XB4O', '2020-05-12 14:05:56', 'roshani demo', '', 322),
(56, 139, 12, '100', 'txn_1Ghz1RJPZuhal6eZJ44Fluqs', '2020-05-12 14:23:53', 'roshani demo', 'f', 365),
(57, 139, 12, '200', 'txn_1Ghz3QJPZuhal6eZk9vn7val', '2020-05-12 14:25:55', 'roshani demo', '', 366),
(58, 139, 12, '230', 'txn_1GiE19JPZuhal6eZX1h9oYpO', '2020-05-13 06:24:34', 'roshani demo', '', 370),
(59, 139, 12, '330', 'txn_1GiF33JPZuhal6eZfZCdYVWS', '2020-05-13 07:30:37', 'roshani demo', ' Chimie', 371),
(60, 139, 16, '440', 'txn_1GiHKoJPZuhal6eZNDijjDey', '2020-05-13 09:57:05', 'Vasim', '', 372),
(61, 16, 139, '120', 'txn_1GiI9bJPZuhal6eZgfUeIpY6', '2020-05-13 10:49:35', '91', '', 373),
(62, 16, 139, '130', 'txn_1GiIHdJPZuhal6eZE5kZ4U4B', '2020-05-13 10:57:52', '91', 'Physique', 374),
(63, 16, 139, '130', 'txn_1GiILoJPZuhal6eZcLhZlOlX', '2020-05-13 11:02:11', '91', 'Physique', 375),
(64, 139, 123, '500', 'txn_1GiT7WJPZuhal6eZJ45l7fVn', '2020-05-13 22:32:09', '34', '', 376),
(65, 139, 123, '500', 'txn_1GiiEsJPZuhal6eZ4ONsmGEy', '2020-05-14 14:40:46', '34', 'Physique', 377),
(66, 139, 123, '500', 'txn_1GiiEsJPZuhal6eZu4FAQTbW', '2020-05-14 14:40:45', '34', 'Physique', 377),
(67, 12, 16, '146', 'txn_1GpYgMJPZuhal6eZ0yIKgHll', '2020-06-02 11:53:25', 'Vasim', '', 379),
(74, 12, 16, '112', 'txn_1GpvP5JPZuhal6eZIT3JEIbL', '2020-06-03 12:09:06', 'Vasim', '', 386),
(70, 16, 12, '112', 'txn_1GpZdrJPZuhal6eZxZX5FPtT', '2020-06-02 12:54:55', 'roshani demo', '', 380),
(71, 12, 16, '146', 'txn_1GpbNSJPZuhal6eZ0E4jmdAV', '2020-06-02 14:46:05', 'Vasim', '', 381),
(72, 12, 16, '634', 'txn_1Gpq4rJPZuhal6eZiPeCd7qn', '2020-06-03 06:27:52', 'Vasim', 'Physique', 383),
(75, 12, 16, '392', 'txn_1GpvpEJPZuhal6eZLcLaQQsE', '2020-06-03 12:36:08', 'Vasim', ' Chimie', 385),
(76, 145, 16, '168', 'txn_1Gx5oYJPZuhal6eZ7gzPkDtB', '2020-06-23 06:41:01', 'Vasim', '', 384),
(77, 16, 12, '120', 'txn_1GxvZlJPZuhal6eZ0lz5UMr1', '2020-06-25 13:57:11', '3', 'hi', 363),
(78, 12, 147, '448', 'txn_1GzFNhJPZuhal6eZAhEAjZyp', '2020-06-29 05:18:12', 'roshni', '', 388),
(79, 151, 152, '168', 'txn_1GzYkpJPZuhal6eZdDBiQUgV', '2020-06-30 01:59:23', '77', '', 391),
(80, 152, 151, '223', 'txn_1GzYvxJPZuhal6eZtu0UOejt', '2020-06-30 02:10:53', '79', '', 392),
(81, 152, 151, '136', 'txn_1GzZ1KJPZuhal6eZ219jwBCc', '2020-06-30 02:16:26', '79', '', 390),
(82, 151, 152, '399', 'txn_1H0lY7JPZuhal6eZTsC9IYNl', '2020-07-03 09:51:14', '77', '', 397),
(83, 36, 151, '865', 'txn_1H1PgbJPZuhal6eZ1A3B7TmA', '2020-07-05 04:42:41', '79', '', 398),
(84, 153, 16, '112', 'txn_1H2bJEJPZuhal6eZoNFSYwrA', '2020-07-08 11:19:27', 'Vasim', '', 399),
(85, 153, 16, '137', 'txn_1H2eQoJPZuhal6eZMA20LFfi', '2020-07-08 14:39:29', 'vasim', 'test', 399);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `source`, `status`, `is_email_verify`, `name`, `first_name`, `last_name`, `email`, `alternateEmail`, `mobile_no`, `website`, `picture_url`, `profile_url`, `vendor_file`, `dob`, `gender`, `about`, `type`, `address`, `address_2`, `country`, `school_address`, `language`, `state`, `city`, `Total_earned_amount`, `Current_Balance`, `Wallet_withdraw_status`, `pincode`, `level_of_study`, `Field_of_study`, `university`, `intrested_category`, `skills`, `Profile_Rate`, `ip_address`, `created`, `lastlogged`, `modified`, `facebook_status`, `google_status`, `auth_token`, `presentation`, `Firebase_token`, `date_updated`, `password_show`, `stripe_customer_id`, `stripe_card_id`, `name_on_card`, `walet_balance`, `block`, `highlight`, `account_number`, `ifsc_code`, `chated_on`, `oauth_provider`, `oauth_uid`, `link`) VALUES
(4, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin', 0, 0, 0, 'admin', 'rahul', 'sharma', 'admin@gmail.com', '', '8989898888', 'klj', 'user32.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', 'fuygviu', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-06-26 06:14:00', '', '', '', '', '980', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(12, 'roshani demo', 'e10adc3949ba59abbe56e057f20f883e', 'client', 0, 0, 0, 'roshani dangi', 'roshani dangi', 'rangari', 'roshni@gmail.com', '', '7812345634', '', 'd.png', '', '', '2020-03-27', '', '', '', '', '', 'India', 'asdasdsd,,,', '', '', '', 0, 0, 0, '', 'sddsf', 'asdxx ', '', 'fdgf', 'work', 0, '', '', '', '', 0, 0, 'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn', 'asdsdsad', '', '2020-06-29 06:21:18', '123456', 'cus_H8I2LTxDlAxMQB', 'card_1Ga1SnJPZuhal6eZ6cmdkcIC', '', '20', 0, 1, '22222222222222', 'rrrr', '2020-06-03 12:47:00', 'facebook', '', ''),
(14, 'gopal', '00267ce0bff0bb5e7f169530a1d7c2e6', 'client', 0, 0, 0, '', 'gopal', 'sharma', 'gopal@alphawizz.awsapps.com', '', '7440467565', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '0', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-12 05:31:28', '', '', '', '', '0', 1, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(16, 'Vasim', 'e10adc3949ba59abbe56e057f20f883e', 'client', 0, 2147483647, 0, '', 'vasim', 'ahmed', 'vasim@gmail.com', '', '7677341234', '', 'Rectangle_162.png', '', '', '', '', '', '', '', '', 'test Country', '', '', '', '', 0, 0, 0, '', 'testing', 'testing', 'testing', 'testing', 'testing', 0, '', '', '', '2020-04-29 13:29:21', 0, 0, 'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn', 'testing', '', '2020-06-25 06:34:38', '', 'cus_H8bPQNUJBLVJR1', 'card_1GcqRSJPZuhal6eZoU7CL8eY', 'test dss', '30', 0, 0, '', '', '2020-06-03 12:47:00', 'facebook', '', ''),
(36, 'you', 'f1887d3f9e6ee7a32fe5e76f4ab80d63', 'admin', 0, 0, 0, 'me ', 'me ', 'store', 'Firststore.service@gmail.com', '', '9009856453', '', '16.jpg', '', '', '2020-04-02', '', '', '', '', '', 'France ', 'Vfbfbfh', '', '', '', 0, 0, 0, '', 'Jdjdjdkk', 'Bdbfbfb', '', 'Bdbdj', 'Jfjdjdkfkdk', 0, '', '', '', '', 0, 0, 'eofwSbFLQ5aiNmLO7vow7B:APA91bG9QR7K9nhfn-nMvp7c2ZwnzQAfoo03so2UIxLFclmwhjFNok-nAK0y8FF0157XlO9Yl02yh4WbmnoDWgwZa_aimWAeesiltW99WMuaxiZ9eby_JSc78XpUC5gPpyw8Evzy1OaZ', 'Jfjfjdk', '', '2020-07-05 04:40:15', '', '', '', '', '0', 0, 0, '', '', '2020-07-05 04:40:15', 'facebook', '', ''),
(37, 'gopal123', 'b57e63ce8b73e370cd2a4c6865fc611b', 'admin', 0, 0, 0, '', 'gopal', 'sharma', 'gopalsh02221@gmail.com', '', '3456455345', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '0', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-04-25 11:10:30', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(39, 'Gopal123', '12345', 'admin', 0, 0, 0, '', 'gopal', 'sharma', 'gopalsh021@gmail.com', '', '7440498598', '', '', '', '', '', 'male', '', '', 'indore', '', 'india', 'school', '', '', 'indore', 0, 0, 0, '', '', '', '', '0', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-04-25 11:10:35', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(115, 'mukesh gupta', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', 'Manash', 'keshari', 'dev@gmail.com', '', '', '', '', '', '', '2020-04-16', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '2020-05-01 05:48:20', 0, 0, 'eq3DarTNQ-GbbJdLAixj6V:APA91bFOi43iI0-Qv7Jl-_1F-GCLjpYIQyruoaZ9opNie8AxvFcgQ72MLKQBgH-RZbJOJt1t3PLacNN35DGQ4JunzypEaVEwnhDTO8bwxA7sDb7W9hWMlPjGTXHiq0T0fbXlScRuQon_', '', '', '2020-06-03 12:46:46', '123456', '', '', '', '0', 0, 0, '', '', '2020-06-03 12:46:46', 'facebook', '', ''),
(116, '1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', 'urud', 'hfjrj', '1@gmail.com', '', '', '', 'FIVERR_20191110_072911_116418731510113664.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', 'Sliiik', 0, '', '', '', '', 0, 0, 'eofwSbFLQ5aiNmLO7vow7B:APA91bFMmLhKhQJimTMmiv4Xo-MkhW6qlBuulcpuPhgftRYvABO1Aq8-7F09vnLFJ4Lf4Fjps8JWwCcv5icR3hvyiqYd7nAwPbWRM_MQyANYavh87arv6A4IdhGrk9EROF8AYRY4-yKe', '', '', '2020-05-14 04:01:11', '123456', '', 'cus_HBY83wLb7Ae6cz', 'ghhjj', '0', 0, 1, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(117, 'usee', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', 'srg', 'Hugo ', '11@gmail.com', '', '', '', 'stop_record_ic.png', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', 'Skilled ', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-07 06:57:04', '123456', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(118, '1234', '25f9e794323b453885f5181f1b624d0b', '', 0, 0, 0, '', '1234', 'heyhey', '1234@gmail.com', '', '', '', 'IMG_20200410_000946.jpg', '', '', '', '', '', '', '', '', '', 'math', '', '', '', 0, 0, 0, '', '5', 'Bnnk', '', 'Maths physique ', 'Logistique ', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-07 06:57:06', '123456789', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(120, 'ankiy', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'ann@johi.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'e6Y_ACZoR42m5NSQTk0JBH:APA91bFRDKoT6z0MnnF_GYjLPzIy2-PLpSWbJiqENQwGu-OIN-Gdr2anYBX4cRHIzLvbfuZYQQV7iZ_k9mpq8ICJq4c66u9iwaQcfnfyNRPJlDbIQj4_ULt84Vo_2vXh_zXQSLOTUWfO', '', '', '2020-04-27 16:52:36', '123456', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(121, '14', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', '14@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'duLwQOdmQSKmIrrh_E6tjd:APA91bEu3A9XrrjhNJH8WIlD7AMQHetyjkafshiTLLqeKz0sPm_bPnnGi5d0ItjqX400lgyxPtjhinj0KVlgymEKJ6Al_DLfENcLFZRYp73TJCN5IyfMqkmHskC4Qt3cnsBSQbMssC1w', '', '', '2020-05-12 12:44:33', '123456', '', '', '', '0', 1, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(122, '33@', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', 'ami', 'kok', '33@gmail.com', '', '', '', 'Screenshot_20200422_213750.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', 'Ingeniero ', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-07 06:57:09', '123456', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(123, '34', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', 'fat', 'dac', '34@gmail.com', '', '', '', 'magazine-unlock-01-2_3_4122-_16D38D13F9BDD5DA965541FF53F099FE.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', 'Design ', 0, '', '', '', '', 0, 0, '', '', '', '2020-06-04 16:31:44', '123456', '', '', '', '0', 0, 0, '', '', '2020-06-04 16:31:44', 'facebook', '', ''),
(124, '59', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', '5@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'fTVgHL6wQjGcD5k3sGdku2:APA91bE6uKeyw16NJACfCyJbOVHvmxaOc-SB--yfnzfuhTRL2z4xd-1yFszzwaVLOLpkHZ_0O1jyx7Gbezu8VjD4WVjoWeb71cvOYO6gquNtXRnxbNNvkxhtAnwhNOFIEnXD57QSIfv5', '', '', '2020-05-11 11:31:36', '123456', '', 'cus_HBUPWdVYgZHdGf', 'hdjejdj', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(126, 'nj', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'nj@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'fTLYBqXQR1iHACuv9NxkFa:APA91bGVpp0W-MzuLSSg2YJp741xgEFLzWdrreaahwpeFWoHNuAXnZ3xekfqTHD9YxFDg_GuVC_1nrLhx82p001o_n9FgXZHX6UQjh0AIsBnQJoq6kNm1KMxrMnxYJD6iYy6aA9GigIe', '', '', '2020-07-06 01:06:55', '123456', '', '', '', '0', 1, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(127, 'ajoshi', 'c8837b23ff8aaa8a2dde915473ce0991', '', 0, 0, 0, '', '', '', 'ajoshi@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'fTLYBqXQR1iHACuv9NxkFa:APA91bGVpp0W-MzuLSSg2YJp741xgEFLzWdrreaahwpeFWoHNuAXnZ3xekfqTHD9YxFDg_GuVC_1nrLhx82p001o_n9FgXZHX6UQjh0AIsBnQJoq6kNm1KMxrMnxYJD6iYy6aA9GigIe', '', '', '2020-05-01 05:01:45', '123321', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(128, 'Steve', '', '', 0, 2, 0, '', '', '', 'gmansh889@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-04-29 09:18:12', '', '2020-04-29 09:19:29', 0, 0, 'dWN235PbQMKo6oCEHF7iiM:APA91bE1fqlLCpMvtzt5SptRZAnyvqYdMuhlxNx8WOcjqcePGWdwpzmL-DDQFUiQcyeOMOh1_apb6BasQfmElgeLS25nMNF3IMPbU4n8eVmln_NOAI_R16EqqlfPIL2r0OwWqS7Q3a2m', '', '', '2020-04-29 09:19:29', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(129, 'heelpuser', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'heelpuser@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'fwNOqHfTTXyxM335p2BdpW:APA91bEp9ye8n0DhD_lJKH0pc7URMnXo630V3Kzazh_rTnTsd2pX2vDhoomHkgUI-8eYJPzSa6Evq5S8tQQrWSLVV9SDmoYy7b788cUuhTRjV2RY9CguG8CnL3Szj3DJkf5p4g-oRl-u', '', '', '2020-04-29 13:41:03', '123456', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(132, 'Ankit Joshi', '', '', 0, 2, 0, '', '', '', '3363491563679154', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-04-29 14:14:08', '', '2020-04-29 14:14:08', 0, 0, 'fTLYBqXQR1iHACuv9NxkFa:APA91bGVpp0W-MzuLSSg2YJp741xgEFLzWdrreaahwpeFWoHNuAXnZ3xekfqTHD9YxFDg_GuVC_1nrLhx82p001o_n9FgXZHX6UQjh0AIsBnQJoq6kNm1KMxrMnxYJD6iYy6aA9GigIe', '', '', '2020-04-29 14:14:08', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(133, 'Ankit Joshi', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 1, 0, '', '', '', 'ankjoshi86@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-04-29 14:14:51', '', '2020-04-29 14:14:51', 0, 0, 'fTVgHL6wQjGcD5k3sGdku2:APA91bE6uKeyw16NJACfCyJbOVHvmxaOc-SB--yfnzfuhTRL2z4xd-1yFszzwaVLOLpkHZ_0O1jyx7Gbezu8VjD4WVjoWeb71cvOYO6gquNtXRnxbNNvkxhtAnwhNOFIEnXD57QSIfv5', '', '', '2020-05-11 10:59:15', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(134, 'Mukesh Gupta', '', '', 0, 2, 0, '', '', '', '1105354223158797', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-04-29 14:15:07', '', '2020-05-01 14:29:48', 0, 0, 'ccmZIsJNQIaX7_I05KSEtQ:APA91bE7RSMR-9bruMzjoes5E10lDpXRqAuqtLazuCYSN1TyVAWDLBh48byFO8f7a0smqbHBQfVolvYGdDInR5f95EsNM5hE7uVQ6CfKAIidUfbvt-dEgJYH4javmurkkZJT5doSp8e7', '', '', '2020-05-01 14:29:48', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(135, 'JoeAlami', '', '', 0, 2147483647, 0, '', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-04-29 17:06:04', '', '2020-04-29 17:06:04', 0, 0, 'duLwQOdmQSKmIrrh_E6tjd:APA91bGSODVPY3JG_FcsQ5zU46OxMQl898n1wSmZh1e6d1J5UT-TvpQJ2VmqHwKCmWslQS1ydFm2TSFn8UmZcZ-aYs6BnVog5gs-71foxnOLDedlYtx1a8QmskNfe5dU9H7w9i_bJ2WW', '', '', '2020-05-12 12:48:23', '', '', '', '', '0', 1, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(136, 'Raj Yadav', '', '', 0, 1, 0, '', 'raj', 'pal', 'rajyadavfa@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-05-01 06:19:02', '', '2020-05-01 12:29:59', 0, 0, 'eg6PqhJ14TA:APA91bEhgomKJLXPiTM9DTvPy8n759s8ToIjBjbkdOuukqcRokaRFsgHhrkkfxpS3s_wy32maX00mV2NGdAJZZeFX2uevY_BF258ckhOsQyliojY6LPUMVxkySWWdXdQp8PDujw1nFlk', '', '', '2020-05-07 06:57:23', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(137, 'mukesh gupta', '', '', 0, 1, 0, '', '', '', 'ramrashmiyein111@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-05-01 12:34:24', '', '2020-05-01 14:29:18', 0, 0, 'ccmZIsJNQIaX7_I05KSEtQ:APA91bE7RSMR-9bruMzjoes5E10lDpXRqAuqtLazuCYSN1TyVAWDLBh48byFO8f7a0smqbHBQfVolvYGdDInR5f95EsNM5hE7uVQ6CfKAIidUfbvt-dEgJYH4javmurkkZJT5doSp8e7', '', '', '2020-05-01 14:29:18', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(138, '90', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', '90@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-02 05:14:18', '123456', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(139, '91', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', 'anid', 'ánimo ', '91@gmail.com', '', '', '', 'IMG_20200422_193655.jpg', '', '', '', '', '', '', '', '', '', 'r', '', '', '', 0, 0, 0, '', '', '', '', '', 'Students ', 0, '', '', '', '', 0, 0, 'eofwSbFLQ5aiNmLO7vow7B:APA91bFe4qVewZJqlwyPjO1CHEOVlThb1Cpgv4kbfEu8qUh4tQLMpZC0AQQW3rjR8klxbzwIIwmgqqyslTgg5a1JcFCOTs-mjH_oUilhRLSvLWOOkGGfwwMexBPp7WVZU7h-k8Q7fpVn', '', '', '2020-06-04 16:31:44', '123456', 'cus_HHeErGsBNQVrEv', 'card_1Gq8LcJPZuhal6eZac7ZkjeJ', 'uzjzj', '0', 0, 1, '', '', '2020-06-04 16:31:44', 'facebook', '', ''),
(140, 'Trust Statistics', '', '', 0, 1, 0, '', '', '', 'dyaltime@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-05-09 17:57:23', '', '2020-05-09 17:57:23', 0, 0, 'duLwQOdmQSKmIrrh_E6tjd:APA91bGZufx-oiMwJ7OOoJmUB2NukSKijPTPnpBiYHA5VH-UCaHPPq9-szwk9pY7oSOSzaxDOmgNAK7AolfP8fGGxgNKJODIAxyMAM5Q-f_YMBieuxp9yFJ_RgutXEPYMHawzhs-flmG', '', '', '2020-05-09 17:57:23', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(141, 'manash', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'manash@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'dBLjJo6zR0etDA6zoinxRd:APA91bGar9adrF3vX0OYBxr2a7s_S90zZe5x9yjm4Prr_EA5WX1SV7L9M5sZ3A7EvuJnpZXUI0-e1pNMy30btjl3SjG_HjFudb3UWuGc5Iq4ydDqJekI6UBJEYJwECSIx1Gl0tB-SgTk', '', '', '2020-05-13 14:15:08', '123456', '', '', 'Manash', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(142, 'ankk', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'ankk@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-13 14:34:46', '123456', 'cus_HGt9iRDmQWpLU1', 'card_1GcqSGJPZuhal6eZhu4aaM7N', 'test dss', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(143, 'Ashish', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'ashish@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-13 14:20:40', '123456', 'cus_HGtEvCFRURYbrx', '', 'ashish', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(144, 'Rahul', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'rahul@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-13 14:53:43', '123456', 'cus_HGtHW20Bov4ejW', 'card_1GiLxQJPZuhal6eZ940qHyeB', 'rahul', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(145, 'ratan', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'ratan@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'eq3DarTNQ-GbbJdLAixj6V:APA91bFOi43iI0-Qv7Jl-_1F-GCLjpYIQyruoaZ9opNie8AxvFcgQ72MLKQBgH-RZbJOJt1t3PLacNN35DGQ4JunzypEaVEwnhDTO8bwxA7sDb7W9hWMlPjGTXHiq0T0fbXlScRuQon_', '', '', '2020-06-03 09:30:04', '123456', 'cus_HGtnKU9W3XK1tr', 'card_1GiM0BJPZuhal6eZ9P08G9GB', 'ratan', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(146, 'saaaa', '6ebe76c9fb411be97b3b0d48b791a7c9', '', 0, 0, 0, '', '', '', 'ghbv@ghj.cj', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '2020-05-17 20:37:38', '987654321', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(147, 'roshni', '827ccb0eea8a706c4c34a16891f84e7b', 'client', 0, 0, 0, '', 'rr', 'rangari', 'roshnirangari1803@gmail.com', '', '', '', 'user3.png', '', '', '1997-03-18', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', 'loem', 'loem', 'ghdfsfsf  ', 'loem', 'php developer', 0, '', '', '', '', 0, 0, 'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn', 'loem', '', '2020-06-29 05:12:34', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(148, 'Rayan Obat', '', '', 0, 2, 0, '', '', '', '3122387357822188', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-06-30 01:32:35', '', '2020-06-30 01:32:35', 0, 0, 'e_D9UAE-Sdmz9is_pvzXiT:APA91bG13l-WpJfyl84AKLZKgQByiLTpCqtI0HyqEuMaCruTxXBpfigWCKXHuAjqbAerUMZ5VGNs9E7xMIcGfsmKSSAEn8lGY8q5mOkGyZAww8fgCyiQyUa0vLjwlKAqv04GRUFTptzf', '', '', '2020-06-30 01:32:35', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(149, 'Rayan Obat', '', '', 0, 2, 0, '', '', '', '3122387357822188', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-06-30 01:32:35', '', '2020-06-30 01:32:35', 0, 0, 'e_D9UAE-Sdmz9is_pvzXiT:APA91bG13l-WpJfyl84AKLZKgQByiLTpCqtI0HyqEuMaCruTxXBpfigWCKXHuAjqbAerUMZ5VGNs9E7xMIcGfsmKSSAEn8lGY8q5mOkGyZAww8fgCyiQyUa0vLjwlKAqv04GRUFTptzf', '', '', '2020-06-30 01:32:35', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(150, 'Rayane TABO', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 1, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '2020-06-30 01:33:19', '', '2020-06-30 01:33:19', 0, 0, 'e_D9UAE-Sdmz9is_pvzXiT:APA91bG13l-WpJfyl84AKLZKgQByiLTpCqtI0HyqEuMaCruTxXBpfigWCKXHuAjqbAerUMZ5VGNs9E7xMIcGfsmKSSAEn8lGY8q5mOkGyZAww8fgCyiQyUa0vLjwlKAqv04GRUFTptzf', '', '', '2020-07-01 13:59:35', '', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', ''),
(151, '79', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', 'lei', 'hei', '79@gmail.com', '', '', '', 'Screenshot_20200628_0439101.jpg', '', '', '1988-06-10', '', '', '', '', '', 'France', ',', '', '', '', 0, 0, 0, '', '', '', '', '', 'Bnadem', 0, '', '', '', '', 0, 0, 'eofwSbFLQ5aiNmLO7vow7B:APA91bG9QR7K9nhfn-nMvp7c2ZwnzQAfoo03so2UIxLFclmwhjFNok-nAK0y8FF0157XlO9Yl02yh4WbmnoDWgwZa_aimWAeesiltW99WMuaxiZ9eby_JSc78XpUC5gPpyw8Evzy1OaZ', 'Irururjrj\n', '', '2020-07-05 04:40:15', '123456', '', '', '', '0', 0, 1, '12', '0', '2020-07-05 04:40:15', 'facebook', '', ''),
(152, '77', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', 'abc', 'abc', '77@gmail.com', '', '', '', 'IMG_20200630_0208281.jpg', '', '', '2002-06-20', '', '', '', '', '', 'France ', ',,', '', '', '', 0, 0, 0, '', '', '', '', '', 'Physique, ', 0, '', '', '', '', 0, 0, 'eofwSbFLQ5aiNmLO7vow7B:APA91bG9QR7K9nhfn-nMvp7c2ZwnzQAfoo03so2UIxLFclmwhjFNok-nAK0y8FF0157XlO9Yl02yh4WbmnoDWgwZa_aimWAeesiltW99WMuaxiZ9eby_JSc78XpUC5gPpyw8Evzy1OaZ', '', '', '2020-07-03 09:43:03', '123456', '', '', '', '0', 0, 1, '123', '123', '2020-06-30 01:50:41', 'facebook', '', ''),
(153, 'ankj0511', 'e10adc3949ba59abbe56e057f20f883e', '', 0, 0, 0, '', '', '', 'ankj0511@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 'cvo14O5hRFqNBZfmijNslX:APA91bH3teyixJ3BaA56iiSmjkiqR396-GkgaCChKNzzRI_UYuJ4_aPm95E_q3PtoB08dbZQ2KyB7HgR4xV6hiqUaeKk5CZLplc0ccBmLD_i1oeW0ho9_deJaaTWp-wdI8PkMGuISykn', '', '', '2020-07-08 09:51:52', '123456', '', '', '', '0', 0, 0, '', '', '0000-00-00 00:00:00', 'facebook', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_review`
--

CREATE TABLE `user_review` (
  `id` int(100) NOT NULL,
  `by_user_id` int(100) NOT NULL,
  `to_user_id` int(100) NOT NULL,
  `rating` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_review`
--

INSERT INTO `user_review` (`id`, `by_user_id`, `to_user_id`, `rating`, `comment`, `created`) VALUES
(1, 1, 2, '5', 'good mans', '2020-06-03 09:22:41'),
(7, 4, 2, '4', 'good mans', '2020-03-05 10:22:49'),
(6, 4, 12, '5', 'good mans', '2020-06-03 09:22:46'),
(5, 1, 6, '4', 'good mans', '2020-03-03 00:00:00'),
(8, 37, 16, '4', 'One of the best user', '2020-03-05 09:15:30'),
(9, 37, 16, '4', 'good mans', '2020-03-05 09:13:13'),
(10, 0, 0, '5', '', '2020-03-28 06:56:52'),
(11, 12, 1, '5', '', '2020-03-28 07:24:45'),
(12, 12, 45, '5', '', '2020-04-02 12:38:14'),
(13, 12, 57, '5', '', '2020-04-03 16:12:53'),
(14, 1, 57, '5', '', '2020-04-03 17:34:00'),
(15, 12, 59, '5', '', '2020-04-04 18:15:08'),
(16, 1, 36, '5', '', '2020-04-05 14:44:01'),
(17, 2, 59, '5', '', '2020-04-09 09:08:17'),
(18, 1, 88, '5', '', '2020-04-13 13:33:21'),
(19, 1, 86, '4', 'sddsds', '2020-04-17 08:53:31'),
(20, 2, 86, '5', 'ihygih', '2020-04-17 08:56:47'),
(25, 12, 16, '1.5', 'good', '2020-06-02 12:56:26'),
(31, 16, 86, '1.5', 'sdfddfsdf', '2020-04-25 12:53:22'),
(23, 116, 116, '5', '', '2020-04-24 13:45:33'),
(29, 16, 16, '5', '', '2020-04-25 08:14:55'),
(30, 16, 12, '3.5', 'hhsk', '2020-06-26 06:01:25'),
(32, 116, 121, '5', '', '2020-04-28 03:11:07'),
(33, 139, 138, '4.0', 'Goog work ', '2020-05-02 05:30:47'),
(34, 139, 123, '5.0', 'Gogi', '2020-05-09 18:11:55'),
(35, 12, 139, '4.5', 'this is for test', '2020-06-02 06:12:41'),
(36, 16, 139, '1.5', 'GOod', '2020-05-13 10:01:17'),
(37, 139, 16, '5.0', 'gghh', '2020-05-13 11:03:27'),
(38, 123, 139, '5.0', 'Ygygyuhuj', '2020-05-14 14:45:41'),
(39, 12, 145, '3.0', 'lf', '2020-06-26 07:00:23'),
(40, 12, 147, '3.5', 'goodd', '2020-06-27 14:46:58'),
(41, 152, 151, '3.5', 'Chwiya ', '2020-07-03 09:58:10'),
(42, 151, 36, '5.0', 'Hhgg', '2020-07-05 04:45:03'),
(43, 16, 153, '3.5', 'good', '2020-07-08 14:06:55');

-- --------------------------------------------------------

--
-- Table structure for table `walletwithdrawask`
--

CREATE TABLE `walletwithdrawask` (
  `id` int(25) NOT NULL,
  `date_of_ask` datetime NOT NULL,
  `wallet_amount` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `walletwithdrawask`
--

INSERT INTO `walletwithdrawask` (`id`, `date_of_ask`, `wallet_amount`, `user_email`, `comment`, `date_updated`) VALUES
(1, '2020-05-07 00:00:00', '200', 'test@test.com', 'tesss', '2020-05-12 16:27:33');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawpayment`
--

CREATE TABLE `withdrawpayment` (
  `id` int(25) NOT NULL,
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
  `transection_id` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `withdrawpayment`
--

INSERT INTO `withdrawpayment` (`id`, `mission_id`, `mission_amount`, `offer_amount`, `amount_to_pay`, `pay_status`, `date_created`, `date_of_pay`, `date_updated`, `mission_status`, `employer_id`, `emplyee_id`, `transection_id`) VALUES
(2, 386, '120', '100', '100', 1, '2020-06-05 09:43:26', '2020-06-05 09:44:50', '2020-06-06 06:45:12', 3, 12, 16, ''),
(3, 385, '350', '350', '318.5', 1, '2020-06-05 09:36:25', '2020-06-05 11:35:30', '2020-06-05 11:35:30', 3, 16, 12, 'dafdfsfsa'),
(4, 388, '650', '', '500', 1, '0000-00-00 00:00:00', '2020-06-23 12:44:31', '2020-06-23 12:44:31', 2, 147, 0, ''),
(5, 388, '650', '', 'Amount', 2, '0000-00-00 00:00:00', '2020-06-23 14:51:40', '2020-06-23 14:51:40', 1, 147, 0, ''),
(6, 388, '650', '', '78', 2, '2020-06-29 06:50:57', '2020-06-29 06:50:57', '2020-06-29 06:50:57', 2, 147, 0, ''),
(7, 391, '200', '150', '136.5', 0, '2020-06-30 02:07:17', '0000-00-00 00:00:00', '2020-06-30 02:07:17', 3, 152, 151, ''),
(8, 397, '356', '356', '323.96', 0, '2020-07-03 09:58:15', '0000-00-00 00:00:00', '2020-07-03 09:58:15', 3, 152, 151, ''),
(9, 398, '772', '772', '702.52', 0, '2020-07-05 04:45:07', '0000-00-00 00:00:00', '2020-07-05 04:45:07', 3, 151, 36, ''),
(10, 399, '123', '100', '91', 0, '2020-07-08 14:07:04', '0000-00-00 00:00:00', '2020-07-08 14:07:04', 3, 16, 153, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_content`
--
ALTER TABLE `about_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_team`
--
ALTER TABLE `about_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_discuss`
--
ALTER TABLE `add_discuss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_files`
--
ALTER TABLE `chat_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_image`
--
ALTER TABLE `chat_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_content`
--
ALTER TABLE `contact_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Demand_reviews`
--
ALTER TABLE `Demand_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dispute_message`
--
ALTER TABLE `dispute_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_content`
--
ALTER TABLE `home_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_ourteam`
--
ALTER TABLE `home_ourteam`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `litigations`
--
ALTER TABLE `litigations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`mission_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_bidding`
--
ALTER TABLE `project_bidding`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `Project_offer`
--
ALTER TABLE `Project_offer`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `project_status`
--
ALTER TABLE `project_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publishDemand`
--
ALTER TABLE `publishDemand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_card_details`
--
ALTER TABLE `stripe_card_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_review`
--
ALTER TABLE `user_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `walletwithdrawask`
--
ALTER TABLE `walletwithdrawask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdrawpayment`
--
ALTER TABLE `withdrawpayment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_content`
--
ALTER TABLE `about_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_team`
--
ALTER TABLE `about_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_discuss`
--
ALTER TABLE `add_discuss`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `card_details`
--
ALTER TABLE `card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=320;

--
-- AUTO_INCREMENT for table `chat_files`
--
ALTER TABLE `chat_files`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `chat_image`
--
ALTER TABLE `chat_image`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_content`
--
ALTER TABLE `contact_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Demand_reviews`
--
ALTER TABLE `Demand_reviews`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dispute_message`
--
ALTER TABLE `dispute_message`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `home_content`
--
ALTER TABLE `home_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_ourteam`
--
ALTER TABLE `home_ourteam`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `litigations`
--
ALTER TABLE `litigations`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `mission_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=401;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=503;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `project_bidding`
--
ALTER TABLE `project_bidding`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `Project_offer`
--
ALTER TABLE `Project_offer`
  MODIFY `offer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- AUTO_INCREMENT for table `project_status`
--
ALTER TABLE `project_status`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `publishDemand`
--
ALTER TABLE `publishDemand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;

--
-- AUTO_INCREMENT for table `stripe_card_details`
--
ALTER TABLE `stripe_card_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `user_review`
--
ALTER TABLE `user_review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `walletwithdrawask`
--
ALTER TABLE `walletwithdrawask`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `withdrawpayment`
--
ALTER TABLE `withdrawpayment`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
