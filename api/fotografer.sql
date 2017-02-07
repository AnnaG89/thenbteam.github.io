-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 07, 2017 at 09:24 AM
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
  `firstname` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `company` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8 NOT NULL,
  `insta` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `city` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `bio` text COLLATE utf8_swedish_ci,
  `password` varchar(256) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `Fotografer`
--

INSERT INTO `Fotografer` (`id`, `firstname`, `lastname`, `company`, `email`, `insta`, `website`, `city`, `bio`, `password`) VALUES
(1, '', '', 'Suzanna K', '', '', '', 'Staffanstorp', NULL, ''),
(2, '', '', 'Maria Westerlind', '', '', '', 'Sigtuna', NULL, ''),
(3, '', '', '', 'myemail@domain.com', '', '', '', NULL, 'mypassword'),
(26, 'Anna', 'Gustafsson', 'AnnasFoto', 'annagustafsson@hotmail.com', 'Anna', 'anna.se', 'Trollhättan', NULL, 'saBTEwdxLdRJ2'),
(27, 'Josefine', 'Maad', 'Josefines foto', 'maad@gmail.com', NULL, '', '', NULL, 'saBTEwdxLdRJ2'),
(28, 'Josefine', 'Maad', 'Josefines foto', 'maad@gmail.se', NULL, '', '', NULL, 'saBTEwdxLdRJ2'),
(29, 'Josefine', 'Maad', 'Josefines foto', 'jmaad@gmail.se', NULL, '', '', NULL, 'saBTEwdxLdRJ2'),
(30, 'dd', 'dd', 'dd', 'aa', 'dd', 'dd', 'dd', 'dd', 'saBHCM8SDXges');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;