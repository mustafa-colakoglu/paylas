-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Mar 2016, 17:30:13
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `paylas`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ihtiyaclar`
--

CREATE TABLE IF NOT EXISTS `ihtiyaclar` (
  `IhtiyacId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `SahipId` int(11) NOT NULL,
  `KategoriId` int(11) NOT NULL,
  `Baslik` varchar(200) NOT NULL,
  `IlId` int(11) NOT NULL,
  `Alinma` tinyint(1) NOT NULL,
  `AlinanId` int(11) NOT NULL,
  `Onay` tinyint(1) NOT NULL,
  PRIMARY KEY (`IhtiyacId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
