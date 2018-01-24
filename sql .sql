-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Oca 2017, 12:22:07
-- Sunucu sürümü: 10.1.16-MariaDB
-- PHP Sürümü: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sql`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `kullaniciAdi` varchar(10) NOT NULL,
  `sifre` varchar(11) NOT NULL,
  `kullanici` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`adminId`, `kullaniciAdi`, `sifre`, `kullanici`) VALUES
(1, 'admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

CREATE TABLE `ogrenci` (
  `ogrenciId` int(11) NOT NULL,
  `ogrenciTC` varchar(11) NOT NULL,
  `ogrenciNo` varchar(10) NOT NULL,
  `ogrenciAd` varchar(20) NOT NULL,
  `ogrenciSoyad` varchar(20) NOT NULL,
  `ogrenciSifre` varchar(11) NOT NULL,
  `ogrenciSifre1` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`ogrenciId`, `ogrenciTC`, `ogrenciNo`, `ogrenciAd`, `ogrenciSoyad`, `ogrenciSifre`, `ogrenciSifre1`) VALUES
(1, '48673381774', '2013123045', 'Gozde', 'Arslanhan', '48673381774', '48673381774'),
(3, '33641243680', '2014074039', 'Hayrunnisa', 'Kaya', '123', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogretimgorevlisi`
--

CREATE TABLE `ogretimgorevlisi` (
  `ogretimGorevlisiId` int(11) NOT NULL,
  `ogretimGorevlisiTc` varchar(11) NOT NULL,
  `ogretimGorevlisiNo` varchar(10) NOT NULL,
  `ogretimGorevlisiAd` varchar(20) CHARACTER SET latin5 NOT NULL,
  `ogretimGorevlisiSoyad` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ogretimGorevlisiSifre` varchar(11) NOT NULL,
  `ogretimGorevlisiSifre1` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ogretimgorevlisi`
--

INSERT INTO `ogretimgorevlisi` (`ogretimGorevlisiId`, `ogretimGorevlisiTc`, `ogretimGorevlisiNo`, `ogretimGorevlisiAd`, `ogretimGorevlisiSoyad`, `ogretimGorevlisiSifre`, `ogretimGorevlisiSifre1`) VALUES
(3, '111', '111', 'Gürkan', 'Yüksek', '111', '111'),
(4, '112', '112', 'Hidayet', 'Takçı', '112', '112');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `randevuId` int(11) NOT NULL,
  `randevuAciklamasi` longtext NOT NULL,
  `randevuSaati` time NOT NULL,
  `randevuTarihi` date NOT NULL,
  `ogretimGorevlisiId` int(11) NOT NULL,
  `kullaniciid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `randevu`
--

INSERT INTO `randevu` (`randevuId`, `randevuAciklamasi`, `randevuSaati`, `randevuTarihi`, `ogretimGorevlisiId`, `kullaniciid`) VALUES
(103, 'dsgh', '10:00:00', '2017-12-09', 4, 3),
(104, 'Bitirme Ödevi', '10:00:00', '2017-12-11', 4, 1),
(105, '8djt', '10:00:00', '2018-01-01', 4, 1);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Tablo için indeksler `ogrenci`
--
ALTER TABLE `ogrenci`
  ADD PRIMARY KEY (`ogrenciId`);

--
-- Tablo için indeksler `ogretimgorevlisi`
--
ALTER TABLE `ogretimgorevlisi`
  ADD PRIMARY KEY (`ogretimGorevlisiId`);

--
-- Tablo için indeksler `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevuId`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `ogrenci`
--
ALTER TABLE `ogrenci`
  MODIFY `ogrenciId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `ogretimgorevlisi`
--
ALTER TABLE `ogretimgorevlisi`
  MODIFY `ogretimGorevlisiId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
