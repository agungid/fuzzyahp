-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 13, 2016 at 02:12 AM
-- Server version: 5.6.30-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_fuzzyahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `bbm`
--

CREATE TABLE IF NOT EXISTS `bbm` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `xenia` varchar(50) NOT NULL,
  `luxio` varchar(50) NOT NULL,
  `terios` varchar(50) NOT NULL,
  `ayla` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bbm`
--

INSERT INTO `bbm` (`id`, `nama`, `xenia`, `luxio`, `terios`, `ayla`) VALUES
(1, 'Xenia', '1', '5', '3', '6'),
(2, 'Luxio', '1/5', '1', '5', '4'),
(3, 'Terios', '1/3', '1/5', '1', '7'),
(4, 'Ayla', '1/6', '1/4', '1/7', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cc`
--

CREATE TABLE IF NOT EXISTS `cc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `xenia` varchar(50) NOT NULL,
  `luxio` varchar(50) NOT NULL,
  `terios` varchar(50) NOT NULL,
  `ayla` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cc`
--

INSERT INTO `cc` (`id`, `nama`, `xenia`, `luxio`, `terios`, `ayla`) VALUES
(1, 'Xenia', '1', '4', '4', '5'),
(2, 'Luxio', '1/4', '1', '3', '2'),
(3, 'Terios', '1/4', '1/3', '1', '3'),
(4, 'Ayla', '1/5', '1/2', '1/3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE IF NOT EXISTS `harga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `xenia` varchar(50) NOT NULL,
  `luxio` varchar(50) NOT NULL,
  `terios` varchar(50) NOT NULL,
  `ayla` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `nama`, `xenia`, `luxio`, `terios`, `ayla`) VALUES
(1, 'Xenia', '1', '7', '5', '2'),
(2, 'Luxio', '1/7', '1', '6', '4'),
(3, 'Terios', '1/5', '1/6', '1', '4'),
(4, 'Ayla', '1/2', '1/4', '1/4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `bbm` varchar(10) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  `cc` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`, `harga`, `bbm`, `warna`, `cc`) VALUES
(1, 'Harga', '1', '2', '3', '5'),
(2, 'BBM', '1/2', '1', '4', '2'),
(3, 'Warna', '1/3', '1/4', '1', '4'),
(4, 'CC', '1/5', '1/2', '1/4', '1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'M Agung Sutrisno', 'm.agung.sutrisno@gmail.com', '$2y$10$XF627mb307stbJrQmgPoIuHPHD1.eo/M/Wr1V4OI5QGnK7N5j5NuC', 'B3TVaM2RRVChBMzbThDokmSCht0jhSbZYHpLCa7tPAoL4nDiYUZqMPjG8QAh', '2016-07-11 01:24:51', '2016-07-11 01:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `warna`
--

CREATE TABLE IF NOT EXISTS `warna` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `xenia` varchar(50) NOT NULL,
  `luxio` varchar(50) NOT NULL,
  `terios` varchar(50) NOT NULL,
  `ayla` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `warna`
--

INSERT INTO `warna` (`id`, `nama`, `xenia`, `luxio`, `terios`, `ayla`) VALUES
(1, 'Xenia', '1', '6', '4', '5'),
(2, 'Luxio', '1/6', '1', '3', '4'),
(3, 'Terios', '1/4', '1/3', '1', '5'),
(4, 'Ayla', '1/5', '1/4', '1/5', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
