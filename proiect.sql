-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Mai 2015 la 12:19
-- Versiune server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `proiect`
--
CREATE DATABASE IF NOT EXISTS `proiect` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `proiect`;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `utilizatori`
--

DROP TABLE IF EXISTS `utilizatori`;
CREATE TABLE IF NOT EXISTS `utilizatori` (
`ID` int(4) unsigned NOT NULL,
  `nume` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `parola` varchar(64) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `scor_form_1` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `scor_form_2` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `scor_form_3` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `scor_form_4` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `scor_form_5` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `scor_maxim` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `form_scor_maxim` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilizatori`
--
ALTER TABLE `utilizatori`
 ADD UNIQUE KEY `nume` (`nume`), ADD KEY `ID` (`ID`), ADD KEY `ID_2` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilizatori`
--
ALTER TABLE `utilizatori`
MODIFY `ID` int(4) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
