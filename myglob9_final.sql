-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2018 at 05:22 AM
-- Server version: 10.2.12-MariaDB-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myglob9_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_tbl`
--

CREATE TABLE `album_tbl` (
  `id` int(11) NOT NULL,
  `album_name` varchar(50) NOT NULL,
  `album_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `album_tbl`
--

INSERT INTO `album_tbl` (`id`, `album_name`, `album_type`, `user_id`, `created_at`) VALUES
(36, 'video album', 'video', 19, '2018-08-05 04:07:22'),
(35, 'audio album', 'audio', 19, '2018-08-06 06:41:05'),
(34, 'album four', 'image', 19, '2018-08-04 03:58:47'),
(33, 'album three', 'image', 19, '2018-08-04 03:58:28'),
(32, 'album two', 'image', 19, '2018-08-04 03:58:12'),
(31, 'album one', 'image', 19, '2018-08-04 03:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `audiogallery_tbl`
--

CREATE TABLE `audiogallery_tbl` (
  `id` int(11) NOT NULL,
  `audio_list` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audiogallery_tbl`
--

INSERT INTO `audiogallery_tbl` (`id`, `audio_list`, `user_id`, `album_id`, `created_at`) VALUES
(1, 'Quran-GunnahPronunciation.mp3', 0, 6, '0000-00-00 00:00:00'),
(2, 'audio.mp3', 0, 6, '0000-00-00 00:00:00'),
(3, 'Quran-LettersWithJozomAndQolqolaPronunciation.mp3', 0, 6, '0000-00-00 00:00:00'),
(4, 'Alif-RuleAndPronunciation.mp3', 0, 6, '0000-00-00 00:00:00'),
(5, 'KHKHa-RuleAndPronunciation.mp3', 0, 6, '0000-00-00 00:00:00'),
(6, 'audio.mp3', 19, 35, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`id`, `title`, `start`, `end`, `description`) VALUES
(1, 'Test Event', '2018-07-24 00:00:00', '2018-07-24 00:00:00', ''),
(2, 'New Event', '2018-07-24 00:00:00', '2018-07-24 00:00:00', ''),
(3, 'fearaer aera e', '2018-07-25 00:00:00', '2018-07-25 00:00:00', 'fearae ear aeraer '),
(4, 'test events ', '2018-07-25 00:00:00', '0000-00-00 00:00:00', ''),
(5, 'new events', '2018-07-26 15:00:56', '2018-07-26 16:30:56', 'test '),
(6, 'Alarm/Alert Test', '2018-07-31 14:25:15', '1969-12-31 19:00:00', 'Alarm/Alert Test'),
(7, 'cdcd', '2018-08-05 17:00:19', '2018-08-05 22:00:19', 'dascds');

-- --------------------------------------------------------

--
-- Table structure for table `category_tbl`
--

CREATE TABLE `category_tbl` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_details` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_tbl`
--

INSERT INTO `category_tbl` (`id`, `category_name`, `category_details`, `created_at`) VALUES
(1, 'test category', 'testing category ', '2018-07-26 06:11:30'),
(3, 'category 1', 'category 1', '2018-07-26 07:14:34'),
(4, 'category 2', 'categroy 2', '2018-07-26 07:14:46'),
(10, 'test ceear', 'Post Category', '2018-08-09 07:19:10'),
(6, 'category 4', 'category 4', '2018-07-26 07:15:08'),
(7, 'Polo Shirts', 'Izod\r\nGrand Slam', '2018-07-31 01:52:13'),
(8, 'categorys titel', 'lkejalkrj laekrjlakerjlkae', '2018-08-04 10:27:09'),
(9, 'teaer eraer reare', 'Post Category', '2018-08-08 10:43:36');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `name`, `email`, `body`, `created_at`) VALUES
(1, 0, 5, 'test users', 'testuser@mail.com', 'tis is for testign comments ections', '2018-07-29 08:00:30');

-- --------------------------------------------------------

--
-- Table structure for table `comment_tbl`
--

CREATE TABLE `comment_tbl` (
  `id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `email_sent_report`
--

CREATE TABLE `email_sent_report` (
  `id` int(11) NOT NULL,
  `email_from` varchar(100) NOT NULL,
  `email_to` varchar(100) NOT NULL,
  `email_subject` tinytext NOT NULL,
  `data` text NOT NULL,
  `massage` text NOT NULL,
  `alt_massage` text NOT NULL,
  `error` tinytext NOT NULL,
  `template` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `mail_type` enum('registration','forget','notification','none','activation','report') NOT NULL DEFAULT 'none',
  `cr_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_sent_report`
--

INSERT INTO `email_sent_report` (`id`, `email_from`, `email_to`, `email_subject`, `data`, `massage`, `alt_massage`, `error`, `template`, `status`, `mail_type`, `cr_time`) VALUES
(1, 'support@brainlabs.com.bd', 'infomasud@gmail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoiZXJlciIsImxhc3RfbmFtZSI6ImVyZXIiLCJkb2IiOiIyMDE4LTAxLTMwIiwiZW1haWwiOiJpbmZvbWFzdWRAZ21haWwuY29tIiwidGVsIjoiNzc3Nzc3Nzc3NzciLCJwYXNzd29yZCI6ImRjMGZhN2RmM2QwNzkwNGEwOTI4OGJkMmQyYmI1ZjQwIiwiYWN0aXZlX2xpbmsiOiJkNDE0ZTdjM2Q0In0=', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-05-10 05:33:15'),
(9, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Password reset request for Company', 'eyJhY3RpdmVfbGluayI6IjYyMjdkZDUzNDNlZjY3OTdlYTZkZDMzZjFlOGU5Y2Q4IiwiZW1haWwiOiJjbUZQWlRJME1URkZZamRwVlZkUllVeHhhazlrYkV4R1NUazNaRzVIZUVWSFowaFhNazl5TkVOemR6MD0iLCJ1c2VyX25hbWUiOiJha2xpbWEifQ==', 'V2UgYXJlIHJlcXVlc3RlZCB0byByZXNldCB5b3VyIHBhc3N3b3JkLiA8YnIvPiBKdXN0IENsaWNrIHRoZSBQYXNzd29yZCBSZXNldCBidXR0b24gYmVsb3cuIA==', '', '0', 'template/reset_password_mail', '1', 'none', '2018-07-14 10:03:27'),
(10, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Password reset request for Company', 'eyJhY3RpdmVfbGluayI6ImMyZGQ1NTU5ZGUwMGJjNjVkYjcxMWI0N2VkNzRhY2E4IiwiZW1haWwiOiJjbUZQWlRJME1URkZZamRwVlZkUllVeHhhazlrYkV4R1NUazNaRzVIZUVWSFowaFhNazl5TkVOemR6MD0iLCJ1c2VyX25hbWUiOiJha2xpbWEifQ==', 'V2UgYXJlIHJlcXVlc3RlZCB0byByZXNldCB5b3VyIHBhc3N3b3JkLiA8YnIvPiBKdXN0IENsaWNrIHRoZSBQYXNzd29yZCBSZXNldCBidXR0b24gYmVsb3cuIA==', '', '0', 'template/reset_password_mail', '1', 'none', '2018-07-14 10:16:41'),
(8, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Password reset request for Company', 'eyJhY3RpdmVfbGluayI6ImRkMzc3OWQ2NzFlM2E0YTQ4NTZmMjAwMDcxODEwZTA1IiwiZW1haWwiOiJjbUZQWlRJME1URkZZamRwVlZkUllVeHhhazlrYkV4R1NUazNaRzVIZUVWSFowaFhNazl5TkVOemR6MD0iLCJ1c2VyX25hbWUiOiJha2xpbWEifQ==', 'V2UgYXJlIHJlcXVlc3RlZCB0byByZXNldCB5b3VyIHBhc3N3b3JkLiA8YnIvPiBKdXN0IENsaWNrIHRoZSBQYXNzd29yZCBSZXNldCBidXR0b24gYmVsb3cuIA==', '', '0', 'template/reset_password_mail', '1', 'none', '2018-07-14 09:53:47'),
(7, 'support@brainlabs.com.bd', 'aklimacse10@mail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoicmRzIGZzZSIsImxhc3RfbmFtZSI6ImZlc2FyZSIsImRvYiI6IjE5OTEtMDUtMDEiLCJlbWFpbCI6ImFrbGltYWNzZTEwQG1haWwuY29tIiwidGVsIjoiMjU1NTQ1NDU0NTQiLCJwYXNzd29yZCI6IjEyMzQ1NiIsImFjdGl2ZV9saW5rIjoiZTUxMGRjM2IwYTcwM2Q5ZGVmMmE3MzU1ODMyYjE4MjkifQ==', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-07-14 08:28:26'),
(6, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoiYWtsaW1hIiwibGFzdF9uYW1lIjoiYWt0aGVyIiwiZG9iIjoiMTk5MS0wOS0wMSIsImVtYWlsIjoicmhzcmFiYW5AZ21haWwuY29tIiwidGVsIjoiMTI1NDc4OTg5NjYiLCJwYXNzd29yZCI6IjEyMzQ1NiIsImFjdGl2ZV9saW5rIjoiZTkzNGFiYTdmZWNlYjdhMzdhNGE0ZTQyMjEzMGJmOTQifQ==', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-07-14 08:02:15'),
(11, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Password reset request for Company', 'eyJhY3RpdmVfbGluayI6IjgyNGViZGVkNmZiMjFjMTU0YjUyMzU2ZDZlY2NjY2M4IiwiZW1haWwiOiJjbUZQWlRJME1URkZZamRwVlZkUllVeHhhazlrYkV4R1NUazNaRzVIZUVWSFowaFhNazl5TkVOemR6MD0iLCJ1c2VyX25hbWUiOiJha2xpbWEifQ==', 'V2UgYXJlIHJlcXVlc3RlZCB0byByZXNldCB5b3VyIHBhc3N3b3JkLiA8YnIvPiBKdXN0IENsaWNrIHRoZSBQYXNzd29yZCBSZXNldCBidXR0b24gYmVsb3cuIA==', '', '0', 'template/reset_password_mail', '1', 'none', '2018-07-14 10:20:07'),
(12, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Password reset request for Company', 'eyJhY3RpdmVfbGluayI6ImMwNTM2MjAwMWYzM2RjNmIxZDExNjZhMWU0YTI0MWNlIiwiZW1haWwiOiJjbUZQWlRJME1URkZZamRwVlZkUllVeHhhazlrYkV4R1NUazNaRzVIZUVWSFowaFhNazl5TkVOemR6MD0iLCJ1c2VyX25hbWUiOiJha2xpbWEifQ==', 'V2UgYXJlIHJlcXVlc3RlZCB0byByZXNldCB5b3VyIHBhc3N3b3JkLiA8YnIvPiBKdXN0IENsaWNrIHRoZSBQYXNzd29yZCBSZXNldCBidXR0b24gYmVsb3cuIA==', '', '0', 'template/reset_password_mail', '1', 'none', '2018-07-14 10:22:04'),
(13, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Password reset request for Company', 'eyJhY3RpdmVfbGluayI6ImYxODY2MzNlYzFmNmNhMDk5NjAzNzgwOGVhOWFhMjJmIiwiZW1haWwiOiJjbUZQWlRJME1URkZZamRwVlZkUllVeHhhazlrYkV4R1NUazNaRzVIZUVWSFowaFhNazl5TkVOemR6MD0iLCJ1c2VyX25hbWUiOiJha2xpbWEifQ==', 'V2UgYXJlIHJlcXVlc3RlZCB0byByZXNldCB5b3VyIHBhc3N3b3JkLiA8YnIvPiBKdXN0IENsaWNrIHRoZSBQYXNzd29yZCBSZXNldCBidXR0b24gYmVsb3cuIA==', '', '0', 'template/reset_password_mail', '1', 'none', '2018-07-14 10:23:58'),
(14, 'support@brainlabs.com.bd', 'pestaner@hotmail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoiSmltIiwibGFzdF9uYW1lIjoiUGVzdGFuZXIiLCJkb2IiOiIxOTYwLTAxLTAyIiwiZW1haWwiOiJwZXN0YW5lckBob3RtYWlsLmNvbSIsInRlbCI6IjEzMDE1Mjk0MDc0IiwicGFzc3dvcmQiOiIxMjM0NTY3OCIsImFjdGl2ZV9saW5rIjoiZmE5MTdkNTk3NDEwY2E1ZjcwODgxNmU2NzBhNDBiYjUifQ==', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-07-15 13:48:33'),
(15, 'support@brainlabs.com.bd', 'masud.blabs@gmail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoiYWRtaW4iLCJsYXN0X25hbWUiOiJhZG1pbiIsImRvYiI6IjE5OTEtMDEtMDEiLCJlbWFpbCI6Im1hc3VkLmJsYWJzQGdtYWlsLmNvbSIsInRlbCI6IjAxOTg3NTYzMjE0IiwicGFzc3dvcmQiOiIxMjM0NTY3OCIsImFjdGl2ZV9saW5rIjoiNmM3ZTk4NmRkNjA2MDdhYzcxZmQyMGRhN2Y1MGFhZDMifQ==', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-07-22 10:17:50'),
(16, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoicmFraWJ1bCIsImxhc3RfbmFtZSI6Imhhc2FuIiwiZG9iIjoiMTk5MS0xMS0wNCIsImVtYWlsIjoicmhzcmFiYW5AZ21haWwuY29tIiwidGVsIjoiMDE4NjMyMjU0MjMiLCJwYXNzd29yZCI6IjEyMzQ1NiIsImFjdGl2ZV9saW5rIjoiOGU3ZmExMjMwZmZmYjRmNGE0MDRjOTcyNDdhMTFlODEifQ==', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-07-23 11:11:16'),
(17, 'support@brainlabs.com.bd', 'rhsraban@gmail.com', 'Password reset request for Company', 'eyJhY3RpdmVfbGluayI6ImU0OWNmNGVhNTczOWU5YzhhYmRkMjdhMmI0Y2Q0MDYzIiwiZW1haWwiOiJjbUZQWlRJME1URkZZamRwVlZkUllVeHhhazlrYkV4R1NUazNaRzVIZUVWSFowaFhNazl5TkVOemR6MD0iLCJ1c2VyX25hbWUiOiJyYWtpYnVsIn0=', 'V2UgYXJlIHJlcXVlc3RlZCB0byByZXNldCB5b3VyIHBhc3N3b3JkLiA8YnIvPiBKdXN0IENsaWNrIHRoZSBQYXNzd29yZCBSZXNldCBidXR0b24gYmVsb3cuIA==', '', '0', 'template/reset_password_mail', '1', 'none', '2018-07-23 11:20:18'),
(18, 'support@brainlabs.com.bd', 'kamruzzaman9099@gmail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoia2FtcnV6emFtYW4iLCJsYXN0X25hbWUiOiJydW1vbiIsImRvYiI6IjE5NzgtMDEtMDEiLCJlbWFpbCI6ImthbXJ1enphbWFuOTA5OUBnbWFpbC5jb20iLCJ0ZWwiOiIwMTkyMDk3MzU0MCIsInBhc3N3b3JkIjoiMDgyMTYwODIxNiIsImFjdGl2ZV9saW5rIjoiOTJkZTk4NWNlZTFjZDY1MWE1N2U5YjNiYTU3ZTU0MzUifQ==', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-07-25 11:14:14'),
(19, 'support@brainlabs.com.bd', 'tombrock82@gmail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoiVG9tIiwibGFzdF9uYW1lIjoiQnJvY2siLCJkb2IiOiIxOTY5LTEyLTMxIiwiZW1haWwiOiJ0b21icm9jazgyQGdtYWlsLmNvbSIsInRlbCI6IjEzMDE0NDA1Nzc4IiwicGFzc3dvcmQiOiJEaXNjb3ZlcjgyISIsImFjdGl2ZV9saW5rIjoiMDk3Y2VmNDllZTY5ZGVhNDNlMzk5ZjVkNjc1MWNiMzgifQ==', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-07-31 01:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `imggallery_tbl`
--

CREATE TABLE `imggallery_tbl` (
  `id` int(11) NOT NULL,
  `image_list` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imggallery_tbl`
--

INSERT INTO `imggallery_tbl` (`id`, `image_list`, `user_id`, `album_id`, `created_at`) VALUES
(34, '5555101533355108_49.jpg', 19, 33, '2018-08-04 03:58:28'),
(33, '7675661533355092_81.jpg', 19, 32, '2018-08-04 03:58:12'),
(32, '2560881533355092_81.jpg', 19, 32, '2018-08-04 03:58:12'),
(31, '6484161533355092_81.jpg', 19, 32, '2018-08-04 03:58:12'),
(30, '2522401533355075_28.jpg', 19, 31, '2018-08-04 03:57:55'),
(29, '9822661533355075_28.jpg', 19, 31, '2018-08-04 03:57:55'),
(28, '1924971533355075_28.jpg', 19, 31, '2018-08-04 03:57:55'),
(35, '8813711533355108_49.jpg', 19, 33, '2018-08-04 03:58:28'),
(38, '5205111533355127_73.jpg', 19, 34, '2018-08-04 03:58:47'),
(39, '881961533355127_73.jpg', 19, 34, '2018-08-04 03:58:47'),
(40, '5523951533355140_79.jpg', 19, 31, '2018-08-04 03:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `like_tbl`
--

CREATE TABLE `like_tbl` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_tbl`
--

INSERT INTO `like_tbl` (`id`, `post_id`, `user_id`, `created_at`) VALUES
(14, 45, 19, '2018-08-16 07:38:04'),
(13, 41, 19, '2018-08-16 07:37:33'),
(11, 42, 19, '2018-08-16 07:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(30) NOT NULL,
  `notice_description` text NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice_description`, `created_date`, `created_by`) VALUES
(1, 'this is for testing notice', '2018-07-22', 'admin'),
(3, 'Image File Sizes are Too Big ... What is the File Size limit', '2018-07-30', 'Tom'),
(4, 'My page is cool but I cannot enter my normal profile pic.... it should resize or auto correct', '2018-08-07', 'Jim');

-- --------------------------------------------------------

--
-- Table structure for table `post_tbl`
--

CREATE TABLE `post_tbl` (
  `id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_desc` text NOT NULL,
  `post_img` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `post_subtitle` text NOT NULL,
  `status` enum('active','notactive') NOT NULL DEFAULT 'notactive'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_tbl`
--

INSERT INTO `post_tbl` (`id`, `post_title`, `post_desc`, `post_img`, `category_id`, `user_id`, `post_date`, `post_subtitle`, `status`) VALUES
(2, 'Last Jet Fighter', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unk', '26405.jpg', 3, 18, '2018-07-30 12:06:34', 'lorems', 'notactive'),
(13, 'test blogs samplee', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas error assumenda unde sapiente placeat distinctio, harum ut eum tempore ad ullam aspernatur maiores fugit quis fugiat, reprehenderit quam quod dolore?', '030405060708090.jpg', 3, 19, '2018-08-08 06:22:23', 'test-sample', 'active'),
(7, 'New Grand Slam Golf/Casual Polo', 'Grouping for new product', '', 3, 21, '2018-07-31 01:22:30', 'Heather Blue', 'notactive'),
(8, 'New Grand Slam Golf/Casual Polo', 'Grouping', '', 1, 21, '2018-07-31 01:23:25', 'Spotlight Grey', 'notactive'),
(9, 'New Store Opening', '\r\n\r\nMain Categories\r\nSub Categories\r\nGrouped Items\r\n\r\n', '', 1, 21, '2018-07-31 05:21:37', 'Multiple Shelves', 'notactive'),
(10, 'File Size Test', 'test', '405060708090192.jpg', 1, 21, '2018-07-31 01:49:37', 'test', 'notactive'),
(14, 'test blog', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum dicta soluta alias ex qui sequi, quo expedita sapiente, ab eaque, laudantium possimus optio fugiat dignissimos id tempora culpa tempore consequuntur.', '019283746507391.jpg', 6, 19, '2018-08-09 04:43:13', 'test-blog', 'notactive'),
(15, 'faera erear aer e', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero minima, dolor ab a vero! Aperiam autem dicta quo, officia ipsa adipisci obcaecati mollitia sunt est repudiandae dolor, hic esse qui?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Libero minima, dolor ab a vero! Aperiam autem dicta quo, officia ipsa adipisci obcaecati mollitia sunt est repudiandae dolor, hic esse qui?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Libero minima, dolor ab a vero! Aperiam autem dicta quo, officia ipsa adipisci obcaecati mollitia sunt est repudiandae dolor, hic esse qui?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero minima, dolor ab a vero! Aperiam autem dicta quo, officia ipsa adipisci obcaecati mollitia sunt est repudiandae dolor, hic esse qui?\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Libero minima, dolor ab a vero! Aperiam autem dicta quo, officia ipsa adipisci obcaecati mollitia sunt est repudiandae dolor, hic esse qui?', '6405.jpg', 9, 19, '2018-08-08 12:06:20', 'raer ear aerear', 'notactive'),
(16, 'fesr ae', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, blanditiis vel doloribus pariatur sunt quod nesciunt iste obcaecati ducimus necessitatibus expedita nostrum, ad quasi aspernatur ipsam similique quo omnis deserunt.', '040506070809019.jpg', 10, 19, '2018-08-09 07:19:10', 'ferae ra', 'notactive');

-- --------------------------------------------------------

--
-- Table structure for table `rotor`
--

CREATE TABLE `rotor` (
  `id` int(11) NOT NULL,
  `img_title` varchar(50) NOT NULL,
  `img_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rotor`
--

INSERT INTO `rotor` (`id`, `img_title`, `img_name`, `created_at`) VALUES
(5, 'MEET YOUR NEEDS', 'rotor/05.jpg', '2018-07-31 05:42:15'),
(3, 'feraer era', 'rotor/.jpg', '2018-07-23 09:29:41');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `slider_title` varchar(50) NOT NULL,
  `slider_img` text NOT NULL,
  `created_by` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_title`, `slider_img`, `created_by`, `created_at`) VALUES
(4, 'test elkre lraelrkjelr ekr e ', 'uploads/020304050607080.jpg', 'admin', '2018-07-23 06:24:05'),
(2, 'jhjk hkjh kjhkjhkjh kjhkjhkjhjkh jhk', 'uploads/050607080901928.jpg', 'admin', '2018-07-23 05:59:47'),
(3, 'this is for testing lsider', 'uploads/405060708090192.jpg', 'admin', '2018-07-23 06:22:27'),
(5, 'feare raer ear t esr ae', 'uploads/Koala.jpg', 'admin', '2018-07-23 06:24:39'),
(6, 'fesr easreasreas rea a', 'uploads/4050607080901921.jpg', 'admin', '2018-07-23 06:25:33'),
(15, '', 'uploads/.JPG', 'rakibul', '2018-08-09 09:19:54'),
(14, 'Slider 1', 'uploads/506070809019283.jpg', 'Jim', '2018-08-08 01:32:08'),
(11, 'CONCEIVE YOUR FUTURE', 'uploads/5.jpg', 'Tom', '2018-07-31 05:39:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL,
  `register_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `dob` date NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `role` enum('user','admin','manager') NOT NULL DEFAULT 'user',
  `active_link` varchar(50) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `tel`, `password`, `register_at`, `dob`, `status`, `role`, `active_link`, `profile_image`, `address`, `created_at`) VALUES
(3, 'erer', 'erer', 'aiub_08216@yahoo.com', '77777777777', 'e10adc3949ba59abbe56e057f20f883e', '2018-05-10 05:33:02', '2018-01-30', 'active', 'user', '', '', '', '0000-00-00 00:00:00'),
(17, 'Jim', 'Pestaner', 'pestaner@hotmail.com', '13015294074', '*84AAC12F54AB666ECFC2A83C676908C8BBC381B1', '2018-07-15 13:48:21', '1960-01-02', 'active', 'user', '', 'profile/7391826405.png', '20113 Waringwood Way, Montgomery Village, Maryland', '0000-00-00 00:00:00'),
(18, 'admin', 'admin', 'masud.blabs@gmail.com', '01987563214', '*6A7A490FB9DC8C33C2B025A91737077A7E9CC5E5', '2018-07-22 10:17:37', '1991-01-01', 'active', 'admin', '', 'profile/837465073918264.png', 'ittara dhaka', '0000-00-00 00:00:00'),
(19, 'rakibul', 'hasan', 'rhsraban@gmail.com', '01863225423', '*9D49A3A82990876A63A60A81382C3CD405436B5E', '2018-07-23 11:11:06', '1991-11-04', 'active', 'user', '', 'profile/304050607080901.jpg', 'dhaka bangladesh', '0000-00-00 00:00:00'),
(20, 'kamruzzaman', 'rumon', 'kamruzzaman9099@gmail.com', '01920973540', '*39A7C9A6B0E08886A1F03271246AA7CF77D9F48D', '2018-07-25 11:14:01', '1978-01-01', 'active', 'user', '', '', '', '0000-00-00 00:00:00'),
(21, 'Tom', 'Brock', 'tombrock82@gmail.com', '13014405778', '*7E463F9FC41CF540F79FC7366EB20304F002F774', '2018-07-31 01:17:42', '1969-12-31', 'active', 'user', '', 'profile/837465073918264.jpg', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_img`
--

CREATE TABLE `users_img` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_img`
--

INSERT INTO `users_img` (`id`, `user_id`, `image`, `created_at`) VALUES
(7, 0, 'http://development.myglobalchannel.com/uploads/', '2018-08-12 05:53:36'),
(6, 0, 'http://myglobalchannel.com/uploads/5135861532950316_68.jpg', '2018-07-30 11:31:56'),
(5, 0, 'http://myglobalchannel.com/uploads/40251532950257_41.jpg', '2018-07-30 11:30:57'),
(8, 0, 'http://development.myglobalchannel.com/uploads/', '2018-08-12 05:53:46'),
(9, 0, 'http://development.myglobalchannel.com/uploads/1406201534053244_03.jpg', '2018-08-12 05:54:04');

-- --------------------------------------------------------

--
-- Table structure for table `videogallery_tbl`
--

CREATE TABLE `videogallery_tbl` (
  `id` int(11) NOT NULL,
  `video_list` text NOT NULL,
  `video_type` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videogallery_tbl`
--

INSERT INTO `videogallery_tbl` (`id`, `video_list`, `video_type`, `user_id`, `album_id`, `created_at`) VALUES
(6, 'video.mp4', '', 19, 36, '2018-08-08 11:11:09'),
(4, 'video.mp4', '', 19, 36, '2018-08-05 04:07:25'),
(8, 'video.mp4', 'video/mp4', 19, 36, '2018-08-08 11:28:43');

-- --------------------------------------------------------

--
-- Table structure for table `wall_post`
--

CREATE TABLE `wall_post` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `user_post_type` varchar(100) NOT NULL,
  `post_title` text NOT NULL,
  `post_img` text NOT NULL,
  `post_desc` text NOT NULL,
  `likes` tinyint(2) NOT NULL DEFAULT 0,
  `created_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wall_post`
--

INSERT INTO `wall_post` (`id`, `user_id`, `user_post_type`, `post_title`, `post_img`, `post_desc`, `likes`, `created_time`) VALUES
(13, 19, 'updates_status', '', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, blanditiis vel doloribus pariatur sunt quod nesciunt iste obcaecati ducimus necessitatibus expedita nostrum, ad quasi aspernatur ipsam similique quo omnis deserunt', 0, '2018-08-12 10:48:42'),
(7, 19, 'updates_status', '', '', 'ferf erd rfear e', 0, '2018-08-11 10:17:09'),
(8, 19, 'updates_status', '', '', 'testing user status post to check if ok or now', 0, '2018-08-11 10:24:07'),
(9, 19, 'updates_status', '', '', 'kljlk;jl;jl;jlkjlk;j;ljk;k', 0, '2018-08-11 10:27:19'),
(10, 19, 'updates_status', '', '', 'faer aeferfae rfeferaer ', 0, '2018-08-11 10:27:46'),
(11, 19, 'updates_status', '', '', 'faer aer aeraer aerf aeraerear ereraer eraer aer aerae rerae s', 0, '2018-08-11 10:29:31'),
(12, 19, 'updates_status', '', '', '.jkn;kljkjk;lj;lkj ;lkj;lkjk;j;lkj;lkj;klj;lkj ;kj;kj;kj;kj;kjkjm k;k;kkj;', 0, '2018-08-11 10:30:34'),
(14, 19, 'updates_status', '', '', 'jQuery doesn\'t officially support SVG. Using jQuery methods on SVG documents, unless explicitly documented for that method, might cause unexpected behaviors. Examples of metho', 0, '2018-08-12 10:51:30'),
(15, 19, 'updates_status', '', '', 'Similar to other content-adding methods such as .prepend() and .before(), .append() also supports passing in multiple arguments as input. Supported input includes DOM elements, jQuery objects, HTML strings, and arrays', 0, '2018-08-12 10:53:25'),
(16, 19, 'updates_status', '', '', 'hi', 0, '2018-08-12 05:44:21'),
(17, 19, 'updates_status', '', '', 'hello', 0, '2018-08-12 05:44:35'),
(18, 19, 'updates_status', '', '', 'ciao', 0, '2018-08-12 05:45:02'),
(19, 19, 'updates_status', '', '', 'gi', 0, '2018-08-12 05:46:23'),
(20, 19, 'updates_status', '', '', 'test times', 0, '2018-08-12 06:38:34'),
(21, 19, 'updates_status', '', '', 'test ere reara era tearae rer ear aer aeff er eraer', 0, '2018-08-12 07:43:35'),
(22, 19, 'updates_status', '', '', 'one day test iteams', 0, '2018-08-12 07:44:26'),
(23, 19, 'updates_status', '', '', '23hour aformate ', 0, '2018-08-12 07:49:34'),
(24, 19, 'updates_status', '', '', 'fear aeraer aer aeraer aer ', 0, '2018-08-12 08:01:03'),
(25, 19, 'updates_status', '', '', 'test project', 0, '2018-08-12 11:12:49'),
(26, 19, 'updates_status', '', '', 'notes here. ', 0, '2018-08-12 11:39:13'),
(27, 19, 'updates_status', '', '', 'testing button with loading', 0, '2018-08-12 11:49:45'),
(28, 19, 'updates_status', '', '', 'fer ara ', 0, '2018-08-12 11:49:49'),
(29, 19, 'updates_status', '', '', 'fer erea rearear aer', 0, '2018-08-12 11:49:59'),
(30, 19, 'updates_status', '', '', 'prepend data value testing', 0, '2018-08-12 11:52:50'),
(31, 19, 'updates_status', '', '', 'prepend to check if done ', 0, '2018-08-12 11:53:06'),
(32, 19, 'updates_status', '', '', 'set timeout value testing', 0, '2018-08-12 11:55:55'),
(33, 19, 'updates_status', '', '', 'testing like and comment buttons', 0, '2018-08-12 11:58:49'),
(34, 19, 'updates_status', '', '', 'teast ae reara e', 0, '2018-08-12 11:59:08'),
(35, 19, 'updates_status', '', '', 'f e', 0, '2018-08-12 11:59:58'),
(36, 19, 'updates_status', '', '', 'te te te terter', 0, '2018-08-12 12:00:47'),
(37, 19, 'updates_status', '', '', 'test project ', 0, '2018-08-13 04:22:01'),
(38, 19, 'updates_status', '', '', 'audio tested', 0, '2018-08-13 04:28:36'),
(39, 19, 'photo_up', '', 'http://development.myglobalchannel.com/uploads/7093561534146303_59.jpg', '', 0, '2018-08-13 07:45:03'),
(40, 19, 'photo_up', '', 'http://development.myglobalchannel.com/uploads/4966611534146471_1.jpg', '', 0, '2018-08-13 07:47:51'),
(41, 19, 'photo_up', '', 'http://development.myglobalchannel.com/uploads/1446951534146523_68.jpg', '', 1, '2018-08-13 07:48:43'),
(42, 19, 'photo_up', '', 'http://development.myglobalchannel.com/uploads/9271171534146642_36.jpg', '', 1, '2018-08-13 07:50:42'),
(45, 19, 'updates_status', '', '', 'ftea ear earearaer', 1, '2018-08-13 10:13:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_tbl`
--
ALTER TABLE `album_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audiogallery_tbl`
--
ALTER TABLE `audiogallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_tbl`
--
ALTER TABLE `category_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_sent_report`
--
ALTER TABLE `email_sent_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imggallery_tbl`
--
ALTER TABLE `imggallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_tbl`
--
ALTER TABLE `like_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_tbl`
--
ALTER TABLE `post_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rotor`
--
ALTER TABLE `rotor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_img`
--
ALTER TABLE `users_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videogallery_tbl`
--
ALTER TABLE `videogallery_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wall_post`
--
ALTER TABLE `wall_post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_tbl`
--
ALTER TABLE `album_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `audiogallery_tbl`
--
ALTER TABLE `audiogallery_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_tbl`
--
ALTER TABLE `category_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment_tbl`
--
ALTER TABLE `comment_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_sent_report`
--
ALTER TABLE `email_sent_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `imggallery_tbl`
--
ALTER TABLE `imggallery_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `like_tbl`
--
ALTER TABLE `like_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_tbl`
--
ALTER TABLE `post_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rotor`
--
ALTER TABLE `rotor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users_img`
--
ALTER TABLE `users_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `videogallery_tbl`
--
ALTER TABLE `videogallery_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wall_post`
--
ALTER TABLE `wall_post`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
