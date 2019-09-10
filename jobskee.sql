-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 01, 2019 at 08:26 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `jobskee`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` tinyint(4) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'almuhayshi@tetco.sa', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cover_letter` text COLLATE utf8_unicode_ci,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `websites` text COLLATE utf8_unicode_ci,
  `attachment` text COLLATE utf8_unicode_ci,
  `token` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `job_id`, `user_id`, `cover_letter`, `full_name`, `email`, `location`, `websites`, `attachment`, `token`, `created`) VALUES
(1, 1, 1, 'Testing users applications', 'Ahmed Almuhayshi', 'freelancer@tetco.sa', 'dammam', 'ahmed.websitee', NULL, '', '2019-08-27 00:00:00'),
(2, 2, NULL, 'test', 'ahmed almuhayshi', 'email', NULL, NULL, NULL, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `banlist`
--

CREATE TABLE `banlist` (
  `id` int(11) NOT NULL,
  `type` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `name`, `url`, `content`) VALUES
(1, 'AddThis', 'addthis', '<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-541e6f810d78ec0c\"></script>\n<div class=\"addthis_sharing_toolbox\"></div>');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `url`, `sort`) VALUES
(1, 'Programming', 'Find the best Programming jobs here!', 'programming', 1),
(2, 'Design', 'Find the best Design jobs here!', 'design', 2),
(3, 'Business', 'Find the best Business jobs here!', 'business', 3),
(4, 'IT Admin', 'Find the best IT Admin jobs here!', 'it-admin', 4),
(5, 'Content', 'Find the best Content jobs here!', 'content', 6),
(6, 'Support', 'Find the best Support jobs here!', 'support', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `description`, `url`, `sort`) VALUES
(1, 'Anywhere', 'Find the best jobs here!', 'anywhere', 1),
(2, 'Manila', 'Find the best Manila jobs here!', 'manila', 2),
(3, 'Madrid', 'Find the best Madrid jobs here!', 'madrid', 3),
(4, 'Frankfurt', 'Find the best Frankfurt jobs here!', 'frankfurt', 4),
(5, 'Beijing', 'Find the best Beijing jobs here!', 'beijing', 5),
(6, 'New York', 'Find the best New York jobs here!', 'new-york', 6);

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` text COLLATE utf8_unicode_ci,
  `ip` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category` tinyint(4) DEFAULT NULL,
  `city` tinyint(4) DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `perks` text COLLATE utf8_unicode_ci,
  `how_to_apply` text COLLATE utf8_unicode_ci,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logo` text COLLATE utf8_unicode_ci,
  `url` text COLLATE utf8_unicode_ci,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) DEFAULT NULL,
  `token` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `bid` tinyint(3) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `category`, `city`, `description`, `perks`, `how_to_apply`, `company_name`, `logo`, `url`, `email`, `is_featured`, `token`, `status`, `created`, `bid`) VALUES
(1, 2, 'Test', 1, 2, 'Make a sample website', 'tt', '', 'Tet', '', '', 'almuhayshi@tetco.sa', 0, '8311dfd67bc2bad6a4a06bcb157599fb', 1, '2019-08-20 23:59:24', 200),
(2, 3, 'testing', 4, 1, 'testing another job', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 30);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `description`, `url`, `content`) VALUES
(1, 'About', 'About', 'about', 'about'),
(2, 'Contact', 'Contact us', 'contact', 'contact us'),
(3, 'Terms', 'Terms', 'terms', 'terms'),
(13, 'Conditions', 'Conditions', 'conditions', 'conditions'),
(14, 'profile', 'user profile page ', 'profile', 'profile');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` tinyint(4) NOT NULL,
  `city_id` tinyint(4) NOT NULL,
  `token` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_sent` datetime DEFAULT NULL,
  `is_confirmed` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `secondname` varchar(32) DEFAULT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(96) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `group_id`, `username`, `password`, `firstname`, `secondname`, `lastname`, `email`, `image`, `status`, `created`) VALUES
(1, 1, 'freelancer', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Ahmed', 'Hassan', 'Almuhayshi', 'freelancer@tetco.sa', '', 1, '2019-08-01 00:00:00'),
(3, 2, 'job', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Requester ', NULL, 'a', 'jobrequster@tetco.sa', '', 1, '2019-08-26 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`id`, `user_id`, `category_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `name`, `description`, `permission`) VALUES
(1, 'FreeLancer', 'This group give the user the ability to apply for a freelancing job ', '{\"pages\": [\"applications\",\"jobs\",\"search\",\"subscriptions\",\"user\"],\"editor\": false,\"jobPoster\": false,\"jobApplicant\":true }'),
(2, 'Employer', 'This group gives the user the ability to pos jobs and hire freelancers ', '{\n  \"pages\": [\n    \"applications\",\"jobs\",\"search\",\"subscriptions\",\"user\"\n  ],\n  \"editor\": false,\n  \"jobPoster\": true,\n  \"jobApplicant\":false\n}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banlist`
--
ALTER TABLE `banlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `banlist`
--
ALTER TABLE `banlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;