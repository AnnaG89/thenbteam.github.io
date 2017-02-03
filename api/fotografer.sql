-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 03, 2017 at 11:22 AM
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
  `insta` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `city` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `Fotografer`
--

INSERT INTO `Fotografer` (`id`, `firstname`, `lastname`, `company`, `email`, `insta`, `website`, `city`, `password`) VALUES
(1, '', '', 'Suzanna K', '', '', '', 'Staffanstorp', ''),
(2, '', '', 'Maria Westerlind', '', '', '', 'Sigtuna', ''),
(3, '', '', '', 'myemail@domain.com', '', '', '', 'mypassword'),
(4, '', '', 'Anna', 'anna@gmail.com', '', '', '', ''),
(5, '', '', 'Anna Gustafsson', 'annaG@gmail.com', '', '', 'Trollhättan', 'lösenord'),
(6, '', '', 'Kaisa', 'Kaisa@gmail.xom', '', '', 'ghj', 'hbn'),
(7, '', '', 'fdghj', 'kalle@gmail.com', '', '', 'ghjk', 'ghj'),
(8, '', '', 'Kalle', 'kalle@gmail.com', '', '', 'Ankeborg', 'ankanager'),
(9, '', '', '', 'kalle@gmail.com', '', '', 'hgj', ''),
(10, '', '', '', 'kalle@gmail.com', '', '', '', ''),
(11, '', '', '', 'ANNApanna@gmail.xom', '', '', '', ''),
(12, '', '', 'Musse', 'mussepigg@gmail.com', '', '', 'cfhvbjkn', 'fhcgvjb'),
(13, '', '', '', 'hans@gmail.com', '', '', '', ''),
(14, '', '', '', 'fdghn', '', '', '', ''),
(15, '', '', '', 'dfghj@ghcvjb', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;