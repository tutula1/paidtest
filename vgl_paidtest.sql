-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2015 at 03:59 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vgl_paidtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `system_authority`
--

CREATE TABLE IF NOT EXISTS `system_authority` (
`key` int(10) unsigned NOT NULL,
  `name` varchar(64) NOT NULL,
  `authority` text NOT NULL,
  `insert` datetime NOT NULL,
  `update` datetime DEFAULT NULL,
  `delete` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_authority`
--

INSERT INTO `system_authority` (`key`, `name`, `authority`, `insert`, `update`, `delete`) VALUES
(1, 'administrator', 'system\nsystem_user\nsystem_user_authority\nsystem_authority', '2015-06-15 00:00:00', '2015-06-22 07:54:15', NULL),
(2, 'office_manager', 'system\nsystem_user', '2015-06-22 07:37:13', NULL, NULL),
(3, 'office_staff', 'system', '2015-06-22 07:37:22', NULL, NULL),
(4, 'staff', 'system', '2015-06-22 08:43:08', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_user`
--

CREATE TABLE IF NOT EXISTS `system_user` (
`key` int(10) unsigned NOT NULL,
  `key_system_authority` int(10) unsigned DEFAULT NULL,
  `mail` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `name` varchar(64) NOT NULL,
  `configuration` text,
  `insert` datetime NOT NULL,
  `update` datetime DEFAULT NULL,
  `delete` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `system_user`
--

INSERT INTO `system_user` (`key`, `key_system_authority`, `mail`, `password`, `name`, `configuration`, `insert`, `update`, `delete`) VALUES
(1, 1, 'jay.casee@vingle.net', 'asdf', 'Jay Casee', NULL, '2015-01-01 00:00:00', '2015-06-22 00:00:00', NULL),
(2, 2, 'jemy.nguyen@vingle.net', 'asdf', 'Jemy Nguyen', '', '2015-01-01 00:00:00', '2015-06-22 07:40:15', NULL),
(3, 2, 'giang.vo@vingle.net', 'asdf', 'Giang Vo', '', '2015-01-01 00:00:00', '2015-06-22 07:40:20', NULL),
(4, 2, 'an.nguyen@vingle.net', 'asdf', 'An Nguyen', '', '2015-01-01 00:00:00', '2015-06-22 07:40:24', NULL),
(5, 2, 'fi.truong@vingle.net', 'asdf', 'Fi Truong', '', '2015-01-01 00:00:00', '2015-06-22 07:40:47', NULL),
(6, 3, 'phu.nguyen@vingle.net', 'asdf', 'Phu Nguyen', '', '2015-01-01 00:00:00', '2015-06-22 07:41:41', NULL),
(7, 1, 'binh.duong@vingle.net', 'asdf', 'Binh Duong', '', '2015-06-22 07:41:35', '2015-06-22 07:41:45', NULL),
(8, 0, 'q@w.e', '', 'asdf', '', '2015-06-22 08:39:00', '2015-06-22 08:39:07', '2015-06-22 08:39:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `system_authority`
--
ALTER TABLE `system_authority`
 ADD PRIMARY KEY (`key`);

--
-- Indexes for table `system_user`
--
ALTER TABLE `system_user`
 ADD PRIMARY KEY (`key`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `system_authority`
--
ALTER TABLE `system_authority`
MODIFY `key` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `system_user`
--
ALTER TABLE `system_user`
MODIFY `key` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
