-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 28, 2017 lúc 12:46 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhangdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `rong` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `cao` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `hinh`, `rong`, `cao`) VALUES
(1, 'banner3.png', '100%', '200px');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `footer`
--

CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `html` mediumtext COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `footer`
--

INSERT INTO `footer` (`id`, `html`) VALUES
(1, '<table width=\"990px\">\r\n<tbody>\r\n<tr>\r\n<td align=\"right\" width=\"495px\">Cửa h&agrave;ng :</td>\r\n<td width=\"495px\"><strong>Shop Hoa Tươi</strong></td>\r\n</tr>\r\n<tr>\r\n<td align=\"right\">Điện thoại :</td>\r\n<td><strong>08.888.777</strong></td>\r\n</tr>\r\n<tr>\r\n<td align=\"right\">Địa chỉ :</td>\r\n<td><strong>Đ&agrave; Nẵng</strong></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoa_don`
--

CREATE TABLE `hoa_don` (
  `id` int(11) NOT NULL,
  `ten_nguoi_mua` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `email` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `dia_chi` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `dien_thoai` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `hang_duoc_mua` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `tong_cong` mediumtext COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_doc`
--

CREATE TABLE `menu_doc` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_doc`
--

INSERT INTO `menu_doc` (`id`, `ten`) VALUES
(9, 'Hoa Tình Yêu'),
(10, 'Hoa Sinh Nhật'),
(11, 'Hoa Tặng Mẹ'),
(12, 'Hoa Chúc Mừng'),
(13, 'Hoa Chia Buồn'),
(14, 'Hoa Cưới'),
(15, 'Hoa Tình Bạn'),
(16, 'Hoa Cảm Ơn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_ngang`
--

CREATE TABLE `menu_ngang` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `loai_menu` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_ngang`
--

INSERT INTO `menu_ngang` (`id`, `ten`, `noi_dung`, `loai_menu`) VALUES
(1, 'Giới thiệu', '<p>Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /> Nội dung phần giới thiệu <br /><br /></p>', ''),
(3, 'Hoa Tưoi', '', 'san_pham'),
(5, 'Liên hệ', 'Nội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>\r\nNội dung liên hệ<br><br>', ''),
(6, 'Hướng Dẫn Mua Hàng', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quang_cao`
--

CREATE TABLE `quang_cao` (
  `id` int(11) NOT NULL,
  `html` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `vi_tri` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `quang_cao`
--

INSERT INTO `quang_cao` (`id`, `html`, `vi_tri`) VALUES
(1, '<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><img style=\"max-width: 100%; height: auto; vertical-align: middle; border: 0px; border-radius: 3px; color: #404247; font-family: &#39;Roboto Condensed&#39;, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #e3e4e9; text-decoration-style: initial; text-decoration-color: initial;\" src=\"http://hoadanang.com/image/data/Untitled-2.jpg\" alt=\"\" width=\"295\" height=\"420\" /></p>', 'trai'),
(2, '<p>&nbsp;</p>\r\n<p style=\"text-align: center;\"><img style=\"max-width: 100%; height: auto; vertical-align: middle; border: 0px; border-radius: 3px; color: #404247; font-family: &#39;Roboto Condensed&#39;, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #e3e4e9; text-decoration-style: initial; text-decoration-color: initial;\" src=\"http://hoadanang.com/image/data/Untitled-2.jpg\" alt=\"\" width=\"295\" height=\"420\" /></p>\r\n<p>&nbsp;</p>', 'phai');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `gia` int(255) NOT NULL,
  `hinh_anh` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `noi_dung` mediumtext COLLATE utf8_vietnamese_ci NOT NULL,
  `thuoc_menu` int(255) NOT NULL,
  `noi_bat` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `trang_chu` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `sap_xep_trang_chu` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten`, `gia`, `hinh_anh`, `noi_dung`, `thuoc_menu`, `noi_bat`, `trang_chu`, `sap_xep_trang_chu`) VALUES
(41, 'LỜI YÊU ĐẦU', 700000, '4926_loi-yeu-dau (1).jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Khi bạn y&ecirc;u mến một ai đ&oacute; th&igrave; lu&ocirc;n mong muốn được n&oacute;i những lời y&ecirc;u thương với người đ&oacute; từ trong c&otilde;i l&ograve;ng m&igrave;nh. Nếu bạn vẫn chưa đủ tự tin để n&oacute;i ra nỗi l&ograve;ng y&ecirc;u thương của m&igrave;nh th&igrave; h&atilde;y để hộp hoa n&agrave;y gi&uacute;p bạn b&agrave;y tỏ nh&eacute;. H&atilde;y n&oacute;i ra để c&ugrave;ng nhau được y&ecirc;u thương trong cuộc đời</span></h3>', 9, 'co', 'co', 1),
(42, 'BẢN NHẠC DỊU ÊM', 550000, '3339_ban-nhac-diu-em.jpg', '<p><span style=\"color: #555555; font-family: &#39;Open Sans&#39;, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Cuộc sống bộn bề cuốn con người v&agrave;o biết bao nỗi lo toan, suy nghĩ. Đ&ocirc;i l&uacute;c ch&uacute;ng ta cần một khoảng lặng cho ri&ecirc;ng m&igrave;nh. \"Bản nhạc dịu &ecirc;m\" với sự kết hợp của hoa hồng da v&agrave; hoa phụ sẽ đem đến cho người nh&igrave;n cảm gi&aacute;c nhẹ nh&agrave;ng, thư th&aacute;i. \"Bản nhạc dịu &ecirc;m\" l&agrave; m&oacute;n qu&agrave; &yacute; nghĩa d&agrave;nh cho những người bạn quan t&acirc;m, y&ecirc;u qu&yacute;, thay bạn đem đến cảm gi&aacute;c b&igrave;nh y&ecirc;n, xua tan mệt mỏi giữa cuộc sống x&ocirc; bồ, nhộn nhịp n&agrave;y.</span></p>', 9, 'co', 'co', 2),
(43, 'TÌNH YÊU XANH LÈ', 7000000, 'hoatinhyeu.jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Hoa hồng xanh được biết đến là một trong những màu độc, và hiếm hoi bậc nhất của họ nhà hồng, hoa hồng xanh cũng như hồng đen, bí hiểm và đầy quyền năng. Bó hoa là sự tượng trưng cho tình yêu vĩnh cửu, chung thủy, trường tồn mãi theo thời gian, bởi màu xanh là màu của trời của biển kết hợp với màu trắng nhẹ nhàng tinh khiết thơ mộng</span></h3>', 9, 'co', 'co', 1),
(44, 'GIÀ ĐI MỘT TUỔI', 50000, 'hoasinhnhat.jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Hạnh phúc - không nằm ở những thứ bạn đang có, mà ở những thứ bạn có thể cho đi. Ăn hoa khỏi ăn bánh nha!</span></h3>', 10, 'co', 'co', 1),
(45, 'HOA SIÊU BỰ SIÊU KHỔNG LỒ', 500000000, 'hoatangme.jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Hoa này đẹp lắm. Lâu lâu quởn tặng mẹ 1 chậu cho xịn nha chưa. Tặng nhiều quá nhà chưa hổng nổi mà quý khách mua cũng gãy lưng ấy ạ!</span></h3>', 11, 'co', 'co', 1),
(46, 'HOA CHÚC MỪNG SIÊU BỰ', 999999999, 'hoachucmung.jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Hoa này sẽ build theo ý khách nữa nên có thể thay đổi giá ạ! Riêng phần này xin ib vùng kín nhé!</span></h3>', 12, 'co', 'co', 1),
(47, 'BIG SAD FLOWERS', 5000000, 'hoachiabuon.jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Hoa nhìn là thấy buồn... Xin chia buồn! :(  </span></h3>', 13, 'co', 'co', 1),
(48, 'HOA CUOI NHA', 500000, 'hoacuoi.jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Cưới. Xin cảm ơn! </span></h3>', 15, 'co', 'co', 1),
(49, 'FRIEND FLOWERS', 500000, 'hoatangban.jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Bạn thì cứ đồ ăn mà dập! Có thể order setup tùy ý. Xin cảm ơn! </span></h3>', 15, 'co', 'co', 1),
(50, 'THANK YOU FLOWERS', 500000, 'hoacamon.jpg', '<h3><span style=\"color: #ff00ff; font-family: &#39;Open Sans&#39;,sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: #ffffff; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Hoa đẹp thích hợp để nói lời cảm ơn! Xin cảm ơn! </span></h3>', 16, 'co', 'co', 1);


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slideshow`
--

CREATE TABLE `slideshow` (
  `id` int(11) NOT NULL,
  `hinh` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `lien_ket` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `slideshow`
--

INSERT INTO `slideshow` (`id`, `hinh`, `lien_ket`) VALUES
(1, 'a_1.png', '#'),
(2, 'a_2.png', '#'),
(3, 'a_3.png', '#'),
(4, 'a_4.png', '#');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thong_tin_quan_tri`
--

CREATE TABLE `thong_tin_quan_tri` (
  `id` int(11) NOT NULL,
  `ky_danh` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL,
  `mat_khau` varchar(256) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `thong_tin_quan_tri`
--

INSERT INTO `thong_tin_quan_tri` (`id`, `ky_danh`, `mat_khau`) VALUES
(1, 'admin', 'c3284d0f94606de1fd2af172aba15bf3');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `hoa_don`
--
ALTER TABLE `hoa_don`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `menu_doc`
--
ALTER TABLE `menu_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT cho bảng `menu_ngang`
--
ALTER TABLE `menu_ngang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT cho bảng `quang_cao`
--
ALTER TABLE `quang_cao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT cho bảng `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `thong_tin_quan_tri`
--
ALTER TABLE `thong_tin_quan_tri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
