-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 06, 2014 at 05:12 PM
-- Server version: 5.5.37-0ubuntu0.12.04.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kegiatan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8,
  `waktu_mulai` time DEFAULT NULL,
  `waktu_berakhir` time DEFAULT NULL,
  `users_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_kegiatan_users_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `name`, `keterangan`, `waktu_mulai`, `waktu_berakhir`, `users_id`) VALUES
(3, 'zen', ' belajar pemprograman web 2', '21:00:00', '12:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_profile_users1_idx` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nama`, `gender`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `picture`, `created_at`, `updated_at`, `users_id`) VALUES
(3, 'haidar', 'Laki-Laki', 'taliwang', '1990-12-26', 'mataram', 'images/logo.png', '2014-06-04 22:40:43', '2014-06-04 22:40:43', 3),
(4, 'admin', 'Perempuan', 'mataram', '2014-06-12', 'mataram', 'images/logo.png', '2014-06-05 22:43:09', '2014-06-05 22:43:09', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'fandy', 'nunenuh@gmail.com', '$2y$10$KO89psUbo/In9pICvmZq9.tbSD4/7lqhG5aMbs5WYIQF9dq4MzRQy', 'ukwpfkkj5mwxt3R7UoZkCDkNFR1PKlwtGIP36LzOnwrUBwGOLRCzEfOtOZn4', '2014-06-03 03:15:52', '2014-06-03 18:03:57'),
(3, 'admin', 'admin@gmail.com', '$2y$10$HLlJq0wZ2TNTT3M3Ua24XOr4Y/V/qxROqDuuVVwslaskxHmS1VMCO', NULL, '2014-06-03 03:16:18', '2014-06-03 03:16:18'),
(4, 'haidar', 'haidar274@gmail.com', '$2y$10$qGfJBE8dTDu4nzq9DQu/DeBaPz01boZ0cqLazPCRJz4Ck13dYYK0i', '4sQ7UBt5jdfoXkCaMFOdsrW5r72iGjjCFceI0axY9fsyzw1dgzkmJLISYv7t', '2014-06-03 17:50:56', '2014-06-05 22:59:09'),
(7, 'dayat', 'dayat@gmail.com', '$2y$10$XJGyXcx8YEnvxDdMcAIH3.b2P9cfSxmcwz5ZHCCbVF.Gd5C1DNQIS', NULL, '2014-06-04 00:18:26', '2014-06-04 00:18:26'),
(8, 'satria', 'satria@gmail.com', '$2y$10$FnUAv.RSzHYBtRPMpZ5MpuPopaRP3jP41MBcd43IhxWeI.7MK9etm', NULL, '2014-06-04 01:02:09', '2014-06-04 01:02:09');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD CONSTRAINT `fk_kegiatan_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_profile_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
