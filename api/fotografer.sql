-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 31, 2017 at 02:50 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Newbie`
--

-- --------------------------------------------------------

--
-- Table structure for table `Fotografer`
--

CREATE TABLE `Fotografer` (
  `Id` int(11) NOT NULL,
  `Fotograf` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `Insta` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Stad` varchar(256) COLLATE utf8_swedish_ci NOT NULL,
  `Webb` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Lösen` varchar(256) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumping data for table `Fotografer`
--

INSERT INTO `Fotografer` (`Id`, `Fotograf`, `Insta`, `Stad`, `Webb`, `Lösen`) VALUES
(1, 'Suzanna K', 'https://www.instagram.com/fotografsuzannak/', 'Staffanstorp', 'fotograf.suzannak.se', ''),
(2, 'Maria Westerlind', 'https://www.instagram.com/mariawesterlind/', 'Sigtuna', 'www.mariawideman.se', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Fotografer`
--
ALTER TABLE `Fotografer`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Fotografer`
--
ALTER TABLE `Fotografer`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;