-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 12, 2020 lúc 05:36 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_dangnhap`
--

CREATE TABLE `t_dangnhap` (
  `idTK` int(11) NOT NULL,
  `TenTK` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PassTK` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `t_dangnhap`
--

INSERT INTO `t_dangnhap` (`idTK`, `TenTK`, `PassTK`) VALUES
(1, 'admin', '123456'),
(2, 'quanly1', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_dmloai`
--

CREATE TABLE `t_dmloai` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GhiChu` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `t_dmloai`
--

INSERT INTO `t_dmloai` (`MaLoai`, `TenLoai`, `GhiChu`) VALUES
(1, 'Áo sơmi', ''),
(2, 'Áo thun', ''),
(3, 'Quần tây', 'đồ nam giới'),
(4, 'Đồ kiểu', 'Bộ đồ nữ giới'),
(5, 'Quần áo bé trai', 'nhiều độ tuổi'),
(6, 'Đầm trẻ em', 'nhiều độ tuổi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_sanpham`
--

CREATE TABLE `t_sanpham` (
  `MaSanPham` int(11) NOT NULL,
  `TenSanPham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaCode` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `DonGia` decimal(9,2) NOT NULL,
  `Hinh1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaLoai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `t_sanpham`
--

INSERT INTO `t_sanpham` (`MaSanPham`, `TenSanPham`, `MaCode`, `DonGia`, `Hinh1`, `Hinh2`, `MaLoai`) VALUES
(1, 'Áo nam - size M', 'X15684220', '250000.00', '20150903163451-ao2.jpg', 's120lsblack11.jpg', 1),
(2, 'Áo sơmi nữ - size XL', 'X16987520', '189000.00', '1815724211_1127935364.jpg', '434544333.jpg', 1),
(3, 'Bộ đầm caro', 'D1', '150000.00', '29e44f661447102599271d95e34bb769.jpg', '469f2f25a3eebee04b49d9a5bc9daca6.jpg', 6),
(4, 'Áo kiểu nữ cổ dây', 'S23698520', '300000.00', '9720-11022105122-1214199030-2.png', '9720-11022072684-1214199030-1.png', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `t_dangnhap`
--
ALTER TABLE `t_dangnhap`
  ADD PRIMARY KEY (`idTK`);

--
-- Chỉ mục cho bảng `t_dmloai`
--
ALTER TABLE `t_dmloai`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `t_sanpham`
--
ALTER TABLE `t_sanpham`
  ADD PRIMARY KEY (`MaSanPham`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `t_dangnhap`
--
ALTER TABLE `t_dangnhap`
  MODIFY `idTK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `t_dmloai`
--
ALTER TABLE `t_dmloai`
  MODIFY `MaLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `t_sanpham`
--
ALTER TABLE `t_sanpham`
  MODIFY `MaSanPham` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
