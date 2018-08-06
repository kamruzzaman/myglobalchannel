-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2018 at 01:45 AM
-- Server version: 5.6.39
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
-- Database: `wwwbrain_vlog`
--

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
  `cr_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_sent_report`
--

INSERT INTO `email_sent_report` (`id`, `email_from`, `email_to`, `email_subject`, `data`, `massage`, `alt_massage`, `error`, `template`, `status`, `mail_type`, `cr_time`) VALUES
(1, 'support@brainlabs.com.bd', 'infomasud@gmail.com', 'Registration Successfull - Blog', 'eyJmaXJzdF9uYW1lIjoiZXJlciIsImxhc3RfbmFtZSI6ImVyZXIiLCJkb2IiOiIyMDE4LTAxLTMwIiwiZW1haWwiOiJpbmZvbWFzdWRAZ21haWwuY29tIiwidGVsIjoiNzc3Nzc3Nzc3NzciLCJwYXNzd29yZCI6ImRjMGZhN2RmM2QwNzkwNGEwOTI4OGJkMmQyYmI1ZjQwIiwiYWN0aXZlX2xpbmsiOiJkNDE0ZTdjM2Q0In0=', 'VGhhbmsgeW91IGZvciBjcmVhdGluZyBhIEJsb2cgYWNjb3VudC4gWW91IENhbiBMb2dpbiB0byB5b3VyIEFjY291bnQgb25sdHkgYWZ0ZXIgQWN0aXZhdGlvbi4gQ2xpY2sgdGhlIGxpbmsgQmVsb3cuIA==', '', '0', 'template/account_activation_email', '1', 'registration', '2018-05-10 05:33:15');

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
  `password` varchar(32) NOT NULL,
  `register_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dob` date NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `active_link` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `tel`, `password`, `register_at`, `dob`, `status`, `role`, `active_link`) VALUES
(3, 'erer', 'erer', 'infomasud@gmail.com', '77777777777', 'dc0fa7df3d07904a09288bd2d2bb5f40', '2018-05-10 05:33:02', '2018-01-30', 'active', 'user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_sent_report`
--
ALTER TABLE `email_sent_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_sent_report`
--
ALTER TABLE `email_sent_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
