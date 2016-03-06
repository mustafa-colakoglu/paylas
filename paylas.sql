-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 06 Mar 2016, 16:38:51
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

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iller`
--

CREATE TABLE IF NOT EXISTS `iller` (
  `IlId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `IlAdi` varchar(50) NOT NULL,
  PRIMARY KEY (`IlId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=82 ;

--
-- Tablo döküm verisi `iller`
--

INSERT INTO `iller` (`IlId`, `IlAdi`) VALUES
(1, 'ADANA'),
(2, 'ADIYAMAN'),
(3, 'AFYONKARAHÄ°SAR'),
(4, 'AÄžRI'),
(5, 'AMASYA'),
(6, 'ANKARA'),
(7, 'ANTALYA'),
(8, 'ARTVÄ°N'),
(9, 'AYDIN'),
(10, 'BALIKESiR'),
(11, 'BÄ°LECÄ°K'),
(12, 'BÄ°NGÃ–L'),
(13, 'BÄ°TLÄ°S'),
(14, 'BOLU'),
(15, 'BURDUR'),
(16, 'BURSA'),
(17, 'Ã‡ANAKKALE'),
(18, 'Ã‡ANKIRI'),
(19, 'Ã‡ORUM'),
(20, 'DENÄ°ZLÄ°'),
(21, 'DÄ°YARBAKIR'),
(22, 'EDÄ°RNE'),
(23, 'ELAZIÄž'),
(24, 'ERZÄ°NCAN'),
(25, 'ERZURUM'),
(26, 'ESKÄ°ÅžEHÄ°R'),
(27, 'GAZÄ°ANTEP'),
(28, 'GÄ°RESUN'),
(29, 'GÃœMÃœÅžHANE'),
(30, 'HAKKARÄ°'),
(31, 'HATAY'),
(32, 'ISPARTA'),
(33, 'MERSÄ°N'),
(34, 'Ä°STANBUL'),
(35, 'Ä°ZMÄ°R'),
(36, 'KARS'),
(37, 'KASTAMONU'),
(38, 'KAYSERÄ°'),
(39, 'KIRKLARELÄ°'),
(40, 'KIRÅžEHÄ°R'),
(41, 'KOCAELÄ°'),
(42, 'KONYA'),
(43, 'KÃœTAHYA'),
(44, 'MALATYA'),
(45, 'MANÄ°SA'),
(46, 'KAHRAMANMARAÅž'),
(47, 'MARDÄ°N'),
(48, 'MUÄžLA'),
(49, 'MUÅž'),
(50, 'NEVÅžEHÄ°R'),
(51, 'NÄ°ÄžDE'),
(52, 'ORDU'),
(53, 'RÄ°ZE'),
(54, 'SAKARYA'),
(55, 'SAMSUN'),
(56, 'SÄ°Ä°RT'),
(57, 'SÄ°NOP'),
(58, 'SÄ°VAS'),
(59, 'TEKÄ°RDAÄž'),
(60, 'TOKAT'),
(61, 'TRABZON'),
(62, 'TUNCELÄ°'),
(63, 'ÅžANLIURFA'),
(64, 'UÅžAK'),
(65, 'VAN'),
(66, 'YOZGAT'),
(67, 'ZONGULDAK'),
(68, 'AKSARAY'),
(69, 'BAYBURT'),
(70, 'KARAMAN'),
(71, 'KIRIKKALE'),
(72, 'BATMAN'),
(73, 'ÅžIRNAK'),
(74, 'BARTIN'),
(75, 'ARDAHAN'),
(76, 'IÄžDIR'),
(77, 'YALOVA'),
(78, 'KARABÃœK'),
(79, 'KÄ°LÄ°S'),
(80, 'OSMANÄ°YE'),
(81, 'DÃœZCE');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj_konular`
--

CREATE TABLE IF NOT EXISTS `mesaj_konular` (
  `KonuId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UrunId` int(11) NOT NULL,
  `Konu` varchar(300) NOT NULL,
  `GonderenId` int(11) NOT NULL,
  `AlanId` int(11) NOT NULL,
  `GonderenOkuma` tinyint(1) NOT NULL,
  `AlanOkuma` tinyint(1) NOT NULL,
  `EnsonGonderenId` int(11) NOT NULL,
  `Tarih` varchar(100) NOT NULL,
  `GonderenTime` int(11) NOT NULL,
  `AlanTime` int(11) NOT NULL,
  PRIMARY KEY (`KonuId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj_mesajlar`
--

CREATE TABLE IF NOT EXISTS `mesaj_mesajlar` (
  `MesajId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `KonuId` int(11) NOT NULL,
  `Mesaj` text NOT NULL,
  `GonderenId` int(11) NOT NULL,
  `AlanId` int(11) NOT NULL,
  `Tarih` varchar(100) NOT NULL,
  `Saat` varchar(100) NOT NULL,
  `Time` int(11) NOT NULL,
  PRIMARY KEY (`MesajId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `paylasimlar`
--

CREATE TABLE IF NOT EXISTS `paylasimlar` (
  `PaylasimId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PaylasanId` int(11) NOT NULL,
  `KategoriId` int(11) NOT NULL,
  `Baslik` varchar(200) NOT NULL,
  `Aciklama` text NOT NULL,
  `ResimYolu` varchar(100) NOT NULL,
  `IlId` int(100) NOT NULL,
  `Verilme` tinyint(1) NOT NULL,
  `VerilenId` int(11) NOT NULL,
  `RezerveEdilme` tinyint(1) NOT NULL,
  `RezerveEdenId` int(11) NOT NULL,
  `Onay` tinyint(1) NOT NULL,
  PRIMARY KEY (`PaylasimId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE IF NOT EXISTS `uyeler` (
  `UyeId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `KullaniciAdi` varchar(100) NOT NULL,
  `Sifre` varchar(100) NOT NULL,
  `Ad` varchar(100) NOT NULL,
  `Soyad` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `CepTel` varchar(20) NOT NULL,
  `Tc` varchar(12) NOT NULL,
  `Tip` int(11) NOT NULL,
  `IlId` int(11) NOT NULL,
  `Onay` tinyint(1) NOT NULL,
  `Banlanma` tinyint(1) NOT NULL,
  `KisaOzet` text NOT NULL,
  PRIMARY KEY (`UyeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`UyeId`, `KullaniciAdi`, `Sifre`, `Ad`, `Soyad`, `Email`, `CepTel`, `Tc`, `Tip`, `IlId`, `Onay`, `Banlanma`, `KisaOzet`) VALUES
(1, 'mustafa220', '23ea07cb59b68ab6cfd1528086140aef', 'Mustafa', 'Ã‡olakoÄŸlu', 'mustafa@a.c', '05432491821', '49612045764', 2, 31, 0, 0, 'ben mustafa Ã§');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
