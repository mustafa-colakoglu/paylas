-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 14 Mar 2016, 10:12:12
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
-- Tablo için tablo yapısı `bildirimler`
--

CREATE TABLE IF NOT EXISTS `bildirimler` (
  `BildirimId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `UyeId` int(11) NOT NULL,
  `Bildirim` text NOT NULL,
  `Gorulme` tinyint(1) NOT NULL,
  PRIMARY KEY (`BildirimId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Tablo döküm verisi `bildirimler`
--

INSERT INTO `bildirimler` (`BildirimId`, `UyeId`, `Bildirim`, `Gorulme`) VALUES
(1, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>40 numara ayakkabÄ±m var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(2, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>40 numara ayakkabÄ±m var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(3, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>40 numara ayakkabÄ±m var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(4, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>40 numara ayakkabÄ±m var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(5, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>40 numara ayakkabÄ±m var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(8, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>40 numara ayakkabÄ±m var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(9, 1, '<b>40 numara ayakkabÄ±</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttigimPaylasimlar/Alinci/7"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(10, 1, '<b>40 numara ayakkabÄ±</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttigimPaylasimlar/Alinci/7"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(11, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>40 numara ayakkabÄ±m var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(12, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>40 numara ayakkabÄ±m var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(13, 1, '<b>40 numara ayakkabÄ±</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttigimPaylasimlar/Alindi/7"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(14, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>e250 bende var</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(15, 1, '<b>40 numara ayakkabÄ±</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttiginizPaylasimlar/Alindi/7"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(16, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>kapÅŸonlu dsa da</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(17, 1, '<b>40 numara ayakkabÄ±</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttiginizPaylasimlar/Alindi/7"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(18, 1, '<b>40 numara ayakkabÄ±</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttiginizPaylasimlar/Alindi/7"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(19, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>elibes</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(20, 1, '<b>40 numara ayakkabÄ±</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttiginizPaylasimlar/Alindi/7"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(21, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>VAR TELEFON</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(22, 1, '<b>TELEFOM</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttiginizPaylasimlar/Alindi/1"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(23, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>d sa das</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(24, 1, '<b>TELEFOM</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttiginizPaylasimlar/Alindi/1"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(25, 1, '<b>TELEFOM</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttiginizPaylasimlar/Alindi/1"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1),
(26, 2, 'mustafa220 adlÄ± kullanÄ±cÄ± sizin <b>cep tel</b> baÅŸlÄ±klÄ± Ã¼rÃ¼nÃ¼nÃ¼zÃ¼ rezerve etti. <a href="http://localhost/paylas/MesajAt/1">Burdan</a> iletiÅŸime geÃ§erek kendisine paylaÅŸÄ±mÄ±nÄ±zÄ± ulaÅŸtÄ±rabilirisinz.', 1),
(27, 1, '<b>TELEFOM</b> adlÄ± ihtiyacÄ±nÄ±zÄ± temin ettiyseniz <a href="http://localhost/paylas/RezerveEttiginizPaylasimlar/Alindi/1"> buraya </a> tÄ±klayarak onaylayabilirsiniz.', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `haberler`
--

CREATE TABLE IF NOT EXISTS `haberler` (
  `HaberId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `HaberResimYolu` varchar(100) NOT NULL,
  `Haber` text NOT NULL,
  PRIMARY KEY (`HaberId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
  `AlinanPaylasimId` int(11) NOT NULL,
  `Onay` tinyint(1) NOT NULL,
  PRIMARY KEY (`IhtiyacId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `ihtiyaclar`
--

INSERT INTO `ihtiyaclar` (`IhtiyacId`, `SahipId`, `KategoriId`, `Baslik`, `IlId`, `Alinma`, `AlinanId`, `AlinanPaylasimId`, `Onay`) VALUES
(1, 1, 4, 'TELEFOM', 23, 1, 2, 1, 1),
(2, 1, 3, 'ds adsa', 23, 1, 2, 2, 1),
(3, 1, 4, ' dsa d a da dafga', 23, 1, 2, 4, 1);

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
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE IF NOT EXISTS `kategoriler` (
  `KategoriId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `KategoriAdi` varchar(200) NOT NULL,
  PRIMARY KEY (`KategoriId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`KategoriId`, `KategoriAdi`) VALUES
(1, 'test'),
(2, 'deneme'),
(3, 'ayakkabÄ±'),
(4, 'cep telefonu'),
(5, 'dsada'),
(6, 'elbise');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj_konular`
--

CREATE TABLE IF NOT EXISTS `mesaj_konular` (
  `KonuId` int(10) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `mesaj_konular`
--

INSERT INTO `mesaj_konular` (`KonuId`, `Konu`, `GonderenId`, `AlanId`, `GonderenOkuma`, `AlanOkuma`, `EnsonGonderenId`, `Tarih`, `GonderenTime`, `AlanTime`) VALUES
(1, '{"Uye-2":"mustafa221","Uye-1":"mustafa220"}', 2, 1, 1, 1, 2, '12.03.2016', 1457946375, 1457946375);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `mesaj_mesajlar`
--

INSERT INTO `mesaj_mesajlar` (`MesajId`, `KonuId`, `Mesaj`, `GonderenId`, `AlanId`, `Tarih`, `Saat`, `Time`) VALUES
(1, 1, 'deneme 1 2', 2, 1, '12.03.2016', '13.32.41', 1457785961),
(2, 1, ' das da', 2, 1, '12.03.2016', '14.56.54', 1457791014),
(3, 1, 'd sa d a', 2, 1, '12.03.2016', '14.56.56', 1457791016),
(4, 1, 'd ad sa', 1, 2, '12.03.2016', '14.57.22', 1457791042),
(5, 1, 'www', 1, 2, '12.03.2016', '14.57.24', 1457791044),
(6, 1, ' dsa d a', 1, 2, '12.03.2016', '15.08.01', 1457791681),
(7, 1, 'wwwwwwww', 1, 2, '12.03.2016', '15.08.08', 1457791688),
(8, 1, ' dsa d a a', 1, 2, '12.03.2016', '15.14.21', 1457792061),
(9, 1, 'yeni', 1, 2, '12.03.2016', '15.20.24', 1457792424),
(10, 1, 'gggggggg', 1, 2, '12.03.2016', '15.21.07', 1457792467),
(11, 1, 'wwwwwwwwwww', 1, 2, '12.03.2016', '15.22.58', 1457792578),
(12, 1, 'gedsfs', 1, 2, '12.03.2016', '15.23.47', 1457792627),
(13, 1, 'd sadas', 2, 1, '12.03.2016', '15.23.56', 1457792636),
(14, 1, ' ds d a', 1, 2, '12.03.2016', '15.25.25', 1457792725),
(15, 1, ' ds da a', 1, 2, '12.03.2016', '15.31.47', 1457793107),
(16, 1, ' dsa d a da', 2, 1, '12.03.2016', '15.31.54', 1457793114),
(17, 1, 'd as dsa a', 1, 2, '12.03.2016', '15.32.01', 1457793121),
(18, 1, 'd asd sa a', 2, 1, '12.03.2016', '15.34.54', 1457793294),
(19, 1, 'tes', 1, 2, '12.03.2016', '19.00.34', 1457805634),
(20, 1, 'testing', 1, 2, '12.03.2016', '21.28.21', 1457814501),
(21, 1, 'good &#58D', 1, 2, '12.03.2016', '21.28.27', 1457814507),
(22, 1, 'evet evet good', 2, 1, '12.03.2016', '21.29.06', 1457814546),
(23, 1, 'elazÄ±', 2, 1, '13.03.2016', '15.31.35', 1457879495),
(24, 1, 'ww', 1, 2, '13.03.2016', '15.43.32', 1457880212),
(25, 1, ' csa dsa a', 2, 1, '14.03.2016', '10.06.15', 1457946375);

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
  `VerilenIhtiyacId` int(11) NOT NULL,
  `RezerveEdilme` tinyint(1) NOT NULL,
  `RezerveEdenId` int(11) NOT NULL,
  `Onay` tinyint(1) NOT NULL,
  PRIMARY KEY (`PaylasimId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `paylasimlar`
--

INSERT INTO `paylasimlar` (`PaylasimId`, `PaylasanId`, `KategoriId`, `Baslik`, `Aciklama`, `ResimYolu`, `IlId`, `Verilme`, `VerilenId`, `VerilenIhtiyacId`, `RezerveEdilme`, `RezerveEdenId`, `Onay`) VALUES
(1, 2, 4, 'VAR TELEFON', 'DAS D AS DSASA', '4.png', 23, 1, 1, 1, 1, 1, 1),
(2, 2, 3, 'd sa das', 'dsa dasda', '4.png', 23, 1, 1, 2, 1, 1, 1),
(3, 2, 2, 'r eadsa d aa ds a', 'd asd as d a', '4.png', 23, 0, 0, 0, 0, 0, 1),
(4, 2, 4, 'cep tel', ' ce dsa da a', '4.png', 23, 1, 1, 3, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sitedetay`
--

CREATE TABLE IF NOT EXISTS `sitedetay` (
  `Hakkinda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sitedetay`
--

INSERT INTO `sitedetay` (`Hakkinda`) VALUES
('falan filan fişman'),
('\r\n');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`UyeId`, `KullaniciAdi`, `Sifre`, `Ad`, `Soyad`, `Email`, `CepTel`, `Tc`, `Tip`, `IlId`, `Onay`, `Banlanma`, `KisaOzet`) VALUES
(1, 'mustafa220', '23ea07cb59b68ab6cfd1528086140aef', 'Mustafa', 'Ã‡olakoÄŸlu', 'mustafa@a.c', '5432491821', '49612045764', 2, 23, 0, 0, 'ben mustafa Ã§'),
(2, 'mustafa221', '23ea07cb59b68ab6cfd1528086140aef', 'Mustafa', 'Ã‡olakoÄŸlu', 'sda@dsa.csa', '5432491821', '49612045764', 3, 23, 0, 0, ''),
(3, 'mustafa222', '23ea07cb59b68ab6cfd1528086140aef', '', '', 'qqq@csdac.csa', '', '', 1, 0, 1, 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
