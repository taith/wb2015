-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2015 at 09:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hefa`
--

-- --------------------------------------------------------

--
-- Table structure for table `chihoatdong`
--

CREATE TABLE IF NOT EXISTS `chihoatdong` (
  `stt` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `donvi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `txcanhan` decimal(15,4) DEFAULT NULL,
  `txcongcong` decimal(15,4) DEFAULT NULL,
  `txvattu` decimal(15,4) DEFAULT NULL,
  `txthongtin` decimal(15,4) DEFAULT NULL,
  `txhoinghi` decimal(15,4) DEFAULT NULL,
  `txcongtacphi` decimal(15,4) DEFAULT NULL,
  `txthuegvtn` decimal(15,4) DEFAULT NULL,
  `txthuegvnn` decimal(15,4) DEFAULT NULL,
  `txchidoanra` decimal(15,4) DEFAULT NULL,
  `txchidoanvao` decimal(15,4) DEFAULT NULL,
  `txnvcmtungnganh` decimal(15,4) DEFAULT NULL,
  `txkhac` decimal(15,4) DEFAULT NULL,
  `ktxkhtscd` decimal(15,4) DEFAULT NULL,
  `ktxdtluuhs` decimal(15,4) DEFAULT NULL,
  `ktxuduanquocte` decimal(15,4) DEFAULT NULL,
  `ktxctmtqg` decimal(15,4) DEFAULT NULL,
  `ktxkhac` decimal(15,4) DEFAULT NULL,
  `nam` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stt`,`nam`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chuongtrinhdaotao`
--

CREATE TABLE IF NOT EXISTS `chuongtrinhdaotao` (
  `stt` int(11) NOT NULL,
  `mamonhoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `tenmonhoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tc` int(11) DEFAULT NULL,
  `bb` tinyint(4) DEFAULT NULL,
  `cg` tinyint(4) DEFAULT NULL,
  `ts` int(11) DEFAULT NULL,
  `lt` tinyint(4) DEFAULT NULL,
  `bt` tinyint(4) DEFAULT NULL,
  `btl` tinyint(4) DEFAULT NULL,
  `da` tinyint(4) DEFAULT NULL,
  `la` tinyint(4) DEFAULT NULL,
  `hocky` tinyint(4) DEFAULT NULL,
  `namhoc` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khoa` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `he` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nganh` varchar(80) COLLATE utf8_unicode_ci DEFAULT NULL,
  `th` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`mamonhoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khoiluonggiangday`
--

CREATE TABLE IF NOT EXISTS `khoiluonggiangday` (
  `tengv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hocvi` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `magv` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bomon` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `loai` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mamonhoc` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diengiai` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nhom` tinyint(4) DEFAULT NULL,
  `toth` tinyint(4) DEFAULT NULL,
  `malop` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `siso` decimal(3,0) DEFAULT NULL,
  `tiet` decimal(3,1) DEFAULT NULL,
  `cnhat` decimal(3,1) DEFAULT NULL,
  `hesolop` decimal(3,1) DEFAULT NULL,
  `hesomh` decimal(3,1) DEFAULT NULL,
  `hesold` decimal(3,1) DEFAULT NULL,
  `tietqd` decimal(3,1) DEFAULT NULL,
  `hocky` tinyint(4) DEFAULT NULL,
  `namhoc` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`magv`,`malop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `monhocdangky`
--

CREATE TABLE IF NOT EXISTS `monhocdangky` (
  `stt` int(11) NOT NULL,
  `masv` int(11) NOT NULL,
  `mamonhoc` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nhom` tinyint(4) DEFAULT NULL,
  `to` tinyint(4) DEFAULT NULL,
  `tenmonhoc` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dvh` decimal(2,1) DEFAULT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` tinyint(4) DEFAULT NULL,
  `hocky` tinyint(4) DEFAULT NULL,
  `namhoc` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`masv`,`mamonhoc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE IF NOT EXISTS `sinhvien` (
  `masv` int(11) NOT NULL,
  `ho` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ten` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `gioitinh` tinyint(4) DEFAULT NULL,
  `h` char(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noisinh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ghichu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `malop` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `he` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nganh` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `khoa` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`masv`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taisan`
--

CREATE TABLE IF NOT EXISTS `taisan` (
  `stt` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `donvi` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nguyengia` decimal(15,4) DEFAULT NULL,
  `haomonnamtruoc` decimal(15,4) DEFAULT NULL,
  `khauhao` decimal(15,4) DEFAULT NULL,
  `biendong` decimal(15,4) DEFAULT NULL,
  `loaitaisan` tinyint(4) NOT NULL DEFAULT '0',
  `nam` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=326 ;

-- --------------------------------------------------------

--
-- Table structure for table `thunhapgiangvien`
--

CREATE TABLE IF NOT EXISTS `thunhapgiangvien` (
  `stt` int(11) NOT NULL,
  `macc1` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `magv` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `macc2` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hesoluong` decimal(5,4) DEFAULT NULL,
  `ptmggiangday` decimal(3,2) DEFAULT NULL,
  `ckhoanbangluong` float DEFAULT NULL,
  `tienvuotgio` float DEFAULT NULL,
  `hdongnckh` float DEFAULT NULL,
  `bsoangiaotrinh` float DEFAULT NULL,
  `ttkhac` float DEFAULT NULL,
  `hocky` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`macc1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
