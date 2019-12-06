-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th12 06, 2019 lúc 10:54 AM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `clothes`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(250) CHARACTER SET utf8 NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin1', '$2y$10$vE7FriuL7JQCq81djbKGW.G2uhz.60g2dLv9tCWr6HTJvr1TvSL.O'),
('admin', '$2y$10$w27.E8/93bSP3baXglhYeOMq4cHpSecDBeDeRzOm1voqeb9q1kxNS');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hoadon`
--

DROP TABLE IF EXISTS `chitiet_hoadon`;
CREATE TABLE IF NOT EXISTS `chitiet_hoadon` (
  `chitiet_id` int(4) NOT NULL,
  `soluong` int(11) NOT NULL,
  `variant_id` int(11) NOT NULL,
  PRIMARY KEY (`chitiet_id`),
  KEY `variant_id` (`variant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `color` varchar(20) NOT NULL,
  PRIMARY KEY (`color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `colors`
--

INSERT INTO `colors` (`color`) VALUES
('cam'),
('đỏ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `hoadon_id` int(4) NOT NULL AUTO_INCREMENT,
  `tongtien` double NOT NULL,
  `chitiet_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  PRIMARY KEY (`hoadon_id`),
  KEY `user_id` (`user_id`),
  KEY `chitiet_id` (`chitiet_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

DROP TABLE IF EXISTS `loai`;
CREATE TABLE IF NOT EXISTS `loai` (
  `maloai` varchar(5) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  PRIMARY KEY (`maloai`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`) VALUES
('ao', 'Áo'),
('dam', 'Đầm'),
('quan', 'Quần'),
('vay', 'Váy');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhacc`
--

DROP TABLE IF EXISTS `nhacc`;
CREATE TABLE IF NOT EXISTS `nhacc` (
  `mancc` varchar(5) NOT NULL,
  `tenncc` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`mancc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhacc`
--

INSERT INTO `nhacc` (`mancc`, `tenncc`) VALUES
('guc', 'Gucci'),
('hm', 'H&M'),
('ysl', 'YSL Saint Lauren'),
('za', 'Zara');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` varchar(5) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `mota` text NOT NULL,
  `hinh` varchar(10) NOT NULL,
  `mancc` varchar(5) NOT NULL,
  `maloai` varchar(5) NOT NULL,
  `gia` int(11) NOT NULL,
  PRIMARY KEY (`masp`),
  KEY `maloai` (`maloai`),
  KEY `mancc` (`mancc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`masp`, `tensp`, `mota`, `hinh`, `mancc`, `maloai`, `gia`) VALUES
('td05', 'Áo thun nữ', 'Áo thun nữ, thoải mái khi mặc.', 'pc1.jpg', 'ysl', 'ao', 349000),
('td09', 'hommm', 's', 'pi.jpg', 'guc', 'quan', 987000),
('th01', 'Áo sơ mi nữ caro', 'Họa tiết caro', 'pc3.jpg', 'ysl', 'ao', 340000),
('th02', 'Áo thun nam', 'Áo thun nam, có logo ở giữa áo.', 'pc4.jpg', 'ysl', 'ao', 449000),
('th03', 'Áo sơ mi caro sọc nhỏ.', 'Họa tiết caro sọc nhỏ.', 'pc7.jpg', 'ysl', 'ao', 549000),
('th04', 'Áo sơ mi nữ caro 2', 'Áo sơ mi tay ngắn. Nữ', 'pc5.jpg', 'ysl', 'ao', 849000),
('th06', 'Áo sơ mi nam tay dài.', 'Áo mơ mi nam, tay dài, trẻ trung, năng động', 'pc6.jpg', 'ysl', 'ao', 649000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `size` varchar(2) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`size`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `sizes`
--

INSERT INTO `sizes` (`size`) VALUES
('l'),
('m'),
('s'),
('xl'),
('xs');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) CHARACTER SET utf8 NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `variant`
--

DROP TABLE IF EXISTS `variant`;
CREATE TABLE IF NOT EXISTS `variant` (
  `variant_id` int(11) NOT NULL AUTO_INCREMENT,
  `size` varchar(2) NOT NULL,
  `color` varchar(20) NOT NULL,
  `masp` varchar(5) NOT NULL,
  PRIMARY KEY (`variant_id`),
  KEY `masp` (`masp`),
  KEY `size` (`size`),
  KEY `color` (`color`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `variant`
--

INSERT INTO `variant` (`variant_id`, `size`, `color`, `masp`) VALUES
(1, 'l', 'cam', 'th01'),
(2, 'm', 'cam', 'th02'),
(3, 's', 'cam', 'th03'),
(4, 'xl', 'cam', 'th04'),
(5, 'm', 'đỏ', 'td05'),
(6, 's', 'cam', 'th06'),
(8, 's', 'đỏ', 'th01'),
(12, 'l', 'cam', 'td09');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `hoadon_ibfk_2` FOREIGN KEY (`chitiet_id`) REFERENCES `chitiet_hoadon` (`chitiet_id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`mancc`) REFERENCES `nhacc` (`mancc`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `variant`
--
ALTER TABLE `variant`
  ADD CONSTRAINT `variant_ibfk_1` FOREIGN KEY (`masp`) REFERENCES `sanpham` (`masp`) ON UPDATE CASCADE,
  ADD CONSTRAINT `variant_ibfk_2` FOREIGN KEY (`size`) REFERENCES `sizes` (`size`) ON UPDATE CASCADE,
  ADD CONSTRAINT `variant_ibfk_3` FOREIGN KEY (`color`) REFERENCES `colors` (`color`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
