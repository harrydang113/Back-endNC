-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 10, 2020 lúc 03:47 AM
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
-- Cơ sở dữ liệu: `mydecortree`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_loaisp`
--

CREATE TABLE `t_loaisp` (
  `LoaiID` int(11) NOT NULL,
  `TenLoai` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idXT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `t_loaisp`
--

INSERT INTO `t_loaisp` (`LoaiID`, `TenLoai`, `idXT`) VALUES
(1, 'Xương rồng', 1),
(2, 'Xương rồng mủ đục', 1),
(3, 'Harworthia', 1),
(4, 'Aloe', 2),
(5, 'Cọ - Dừa', 1),
(6, 'Lá bỏng', 2),
(7, 'Phong lan', 2),
(8, 'Địa lan', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_sanpham`
--

CREATE TABLE `t_sanpham` (
  `SanPhamID` int(11) NOT NULL,
  `LoaiID` int(11) NOT NULL,
  `TenSanPham` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MotaSanPham_1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MotaSanpham_2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `GiaSanPham` decimal(10,2) NOT NULL,
  `GiamGiaSanPham` int(11) NOT NULL,
  `SanPhamHOT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `t_sanpham`
--

INSERT INTO `t_sanpham` (`SanPhamID`, `LoaiID`, `TenSanPham`, `Hinh`, `MotaSanPham_1`, `MotaSanpham_2`, `GiaSanPham`, `GiamGiaSanPham`, `SanPhamHOT`) VALUES
(1, 1, 'Gym lem xương cá', '20200523_192747.jpg', 'size 4cm', 'hàng bẻ con', '650.00', 600, 1),
(2, 1, 'Gym lem xương cá', '20200523_192747.jpg', 'size 4.5cm', 'hàng bẻ con', '750.00', 720, 0),
(3, 1, 'gym lem multicolor', '3211818428630433848_o.jpg', 'size 5cm', 'hàng bẻ con', '450.00', 420, 1),
(4, 1, 'gym lem multi vàng', '20200523_192836.jpg', 'size 4cm', 'hàng hạt', '350.00', 300, 0),
(5, 3, 'Móng rổng xoay var', 'mongrongvar.jpg', 'size 9cm', 'hàng tách bụi', '300.00', 270, 1),
(6, 4, 'Móng rổng xoay', 'mongrongt.jpg', 'size 5cm', 'hàng hạt', '50.00', 45, 0),
(7, 5, 'Cọ Madagasca', 'co_madagasca.jpg', 'size cao 6cm', 'hàng tách bụi', '75.00', 59, 0),
(8, 5, 'Dương xỉ', 'duongxi.jpg', 'chậu 14cm', 'hàng tách bụi', '120.00', 99, 0),
(9, 7, 'Hồ Điệp tím', 'hodieptim', 'Chậu 10cm', 'hàng cấy mô', '380.00', 370, 0),
(10, 7, 'Đai trâu', '73e857816b2911b0f4e945e03b990f5d.jpg', 'Chậu 25cm', 'hàng bụi tự nhiên', '650.00', 620, 0),
(11, 8, 'Lan quân tử', 'lanquantudeban.jpg', 'Chậu 10cm', '', '150.00', 120, 0),
(12, 7, 'Fero', '1425740245315354624_n.jpg', 'Chậu 8cm', 'hàng cấy mô', '60.00', 55, 0),
(13, 6, 'Đôla trắng', 'sen-da-do-la-trang.jpg', 'Chậu 8cm', 'hàng tách bụi', '200.00', 189, 0),
(14, 6, 'Đôla hồng', '4c4ce4016ae8ce3ab3506024ad3e1b48.jpg', 'Chậu 5cm', 'hàng tách bụi', '120.00', 110, 0),
(15, 1, 'Lb thuần', '20200523_193331.jpg', 'size 5cm 11 múi', 'hàng hạt', '300.00', 270, 1),
(16, 1, 'Lb hyr lem', '20200523_193221.jpg', 'size 5cm 12 múi', 'hàng hạt', '420.00', 390, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `t_xacthuc`
--

CREATE TABLE `t_xacthuc` (
  `idXT` int(11) NOT NULL,
  `motaXT` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `t_xacthuc`
--

INSERT INTO `t_xacthuc` (`idXT`, `motaXT`) VALUES
(1, 'không được mở'),
(2, 'cho phép mở');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `t_loaisp`
--
ALTER TABLE `t_loaisp`
  ADD PRIMARY KEY (`LoaiID`);

--
-- Chỉ mục cho bảng `t_sanpham`
--
ALTER TABLE `t_sanpham`
  ADD PRIMARY KEY (`SanPhamID`);

--
-- Chỉ mục cho bảng `t_xacthuc`
--
ALTER TABLE `t_xacthuc`
  ADD PRIMARY KEY (`idXT`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `t_loaisp`
--
ALTER TABLE `t_loaisp`
  MODIFY `LoaiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `t_sanpham`
--
ALTER TABLE `t_sanpham`
  MODIFY `SanPhamID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `t_xacthuc`
--
ALTER TABLE `t_xacthuc`
  MODIFY `idXT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
