-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 02, 2017 at 01:16 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `thenbteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `Fotografer`
--

CREATE TABLE `Fotografer` (
  `id` int(11) NOT NULL,
  `user` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 NOT NULL,
  `insta` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `webbpage` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(256) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `Fotografer`
--

INSERT INTO `Fotografer` (`id`, `user`, `email`, `insta`, `city`, `webbpage`, `password`) VALUES
(1, 'Suzanna K', '', 'https://www.instagram.com/fotografsuzannak/', 'Staffanstorp', 'fotograf.suzannak.se', ''),
(2, 'Maria Westerlind', '', 'https://www.instagram.com/mariawesterlind/', 'Sigtuna', 'www.mariawideman.se', ''),
(3, '', 'myemail@domain.com', '', '', NULL, 'mypassword'),
(4, 'Anna', 'anna@gmail.com', '', '', NULL, 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Fotografer`
--
ALTER TABLE `Fotografer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Fotografer`
--
ALTER TABLE `Fotografer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;