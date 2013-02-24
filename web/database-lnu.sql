-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2013 at 10:17 AM
-- Server version: 5.5.9
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `poll`
--
CREATE DATABASE `poll` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `poll`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app_info`
--

CREATE TABLE `tbl_app_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `tbl_app_info`
--

INSERT INTO `tbl_app_info` VALUES(1, '7x7', '7x7.png');
INSERT INTO `tbl_app_info` VALUES(2, 'Airbnb', 'Airbnb.png');
INSERT INTO `tbl_app_info` VALUES(3, 'Ask a Doctor', 'Ask a Doctor.png');
INSERT INTO `tbl_app_info` VALUES(4, 'Bubbles', 'Bubbles.png');
INSERT INTO `tbl_app_info` VALUES(5, 'Evernote', 'Evernote.png');
INSERT INTO `tbl_app_info` VALUES(6, 'Exchange', 'Exchange.png');
INSERT INTO `tbl_app_info` VALUES(7, 'Bump ', 'Bump.png');
INSERT INTO `tbl_app_info` VALUES(8, 'Espier', 'Espier.png');
INSERT INTO `tbl_app_info` VALUES(9, 'Echofon', 'Echofon.png');
INSERT INTO `tbl_app_info` VALUES(10, 'Calc', 'Calc.png');
INSERT INTO `tbl_app_info` VALUES(11, 'Cymera', 'Cymera.png');
INSERT INTO `tbl_app_info` VALUES(12, 'Dropbox', 'Dropbox.png');
INSERT INTO `tbl_app_info` VALUES(13, 'Easy Launcher', 'Easy Launcher.png');
INSERT INTO `tbl_app_info` VALUES(14, 'E-Bay', 'E-Bay.png');
INSERT INTO `tbl_app_info` VALUES(15, 'Instagram', 'Instagram.png');
INSERT INTO `tbl_app_info` VALUES(16, 'Health Tap MD', 'Health Tap MD.png');
INSERT INTO `tbl_app_info` VALUES(17, 'Espier', 'Espier.png');
INSERT INTO `tbl_app_info` VALUES(18, 'Evernote', 'Evernote.png');
INSERT INTO `tbl_app_info` VALUES(19, 'GMaps Speed Pro', 'GMaps Speed Pro.png');
INSERT INTO `tbl_app_info` VALUES(20, 'Geostar', 'Geostart.png');
INSERT INTO `tbl_app_info` VALUES(21, 'Fruit Ninja', 'Fruit Ninja.png');
INSERT INTO `tbl_app_info` VALUES(22, 'Nba 2k13', 'Nba 2k13.png');
INSERT INTO `tbl_app_info` VALUES(23, 'Most Wanted', 'Most Wanted.png');
INSERT INTO `tbl_app_info` VALUES(24, 'Mobile Mouse', 'Mobile Mouse.png');
INSERT INTO `tbl_app_info` VALUES(25, 'Maverick Pro', 'Maverick Pro.png');
INSERT INTO `tbl_app_info` VALUES(26, 'Magisto', 'Magisto.png');
INSERT INTO `tbl_app_info` VALUES(27, 'Kobo', 'Kobo.png');
INSERT INTO `tbl_app_info` VALUES(28, 'Kindle', 'Kindle.png');
INSERT INTO `tbl_app_info` VALUES(29, 'Juice Defender', 'Juice Defender.png');
INSERT INTO `tbl_app_info` VALUES(30, 'Instagram', 'Instagram.png');
INSERT INTO `tbl_app_info` VALUES(31, 'YouTube', 'YouTube.png');
INSERT INTO `tbl_app_info` VALUES(32, 'Vintage Camera', 'Vintage Camera.png');
INSERT INTO `tbl_app_info` VALUES(33, 'Uber Social', 'Uber Social.png');
INSERT INTO `tbl_app_info` VALUES(34, 'Twitter', 'Twitter.png');
INSERT INTO `tbl_app_info` VALUES(35, 'Trip Advisor', 'Trip Advisor.png');
INSERT INTO `tbl_app_info` VALUES(36, 'Temple Run', 'Temple Run.png');
INSERT INTO `tbl_app_info` VALUES(37, 'Swift Key', 'Swift Key.png');
INSERT INTO `tbl_app_info` VALUES(38, 'Snap Dragon', 'Snap Dragon.png');
INSERT INTO `tbl_app_info` VALUES(39, 'Skyscanner', 'Skyscanner.png');
INSERT INTO `tbl_app_info` VALUES(40, 'Skype', 'Skype.png');
INSERT INTO `tbl_app_info` VALUES(41, 'Seat Guru', 'Seat Guru.png');
INSERT INTO `tbl_app_info` VALUES(42, 'Radio-Beat', 'Radio-Beat.png');
INSERT INTO `tbl_app_info` VALUES(43, 'Quora', 'Quora.png');
INSERT INTO `tbl_app_info` VALUES(44, 'Pretty Text', 'Pretty Text.png');
INSERT INTO `tbl_app_info` VALUES(45, 'Plant vs.Zombies', 'Plant vs.Zombies.png');
INSERT INTO `tbl_app_info` VALUES(46, 'Photo Filter', 'Photo Filter.png');
INSERT INTO `tbl_app_info` VALUES(47, 'Petapic', 'Petapic.png');
INSERT INTO `tbl_app_info` VALUES(48, 'Opera', 'Opera.png');
INSERT INTO `tbl_app_info` VALUES(49, 'Ninja Action', 'Ninja Action.png');
INSERT INTO `tbl_app_info` VALUES(50, 'NY Times', 'NY Times.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rate`
--

CREATE TABLE `tbl_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `app_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_rate`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_users`
--

