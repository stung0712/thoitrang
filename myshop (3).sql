-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 03:15 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `fname`, `email`, `password`, `level`) VALUES
(5, 'Vũ Phạm Hoàng ', 'admin123', '202cb962ac59075b964b07152d234b70', 1),
(6, 'Nguyen Ngoc Nhan', 'admin', '202cb962ac59075b964b07152d234b70', 2),
(7, 'Nguyen Van A', 'Vana@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', 2);

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `preview_text` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `title`, `preview_text`, `content`, `created_at`) VALUES
(1, '5 MẸO NHỎ BẢO VỆ NHÃN MÁC DA / QUẦN JEANS CỦA BẠN', '<p><strong>5 MẸO NHỎ BẢO VỆ NH&Atilde;N M&Aacute;C DA / QUẦN JEANS CỦA BẠN</strong></p>\r\n\r\n<p>Hiện tại quần jeans l&agrave; một trong những items được y&ecirc;u th&iacute;ch nhiều nhất tr&ecirc;n thế giới xuy&ecirc;n suốt nhiều năm qua.</p>\r\n\r\n<p>Một chiế', '<p>Hiện tại quần jeans l&agrave; một trong những items được y&ecirc;u th&iacute;ch nhiều nhất tr&ecirc;n thế giới xuy&ecirc;n suốt nhiều năm qua. Một chiếc quần jeans trở n&ecirc;n ho&agrave;n thiện &amp; thời trang v&agrave; gi&aacute; trị hơn, một phần dựa tr&ecirc;n những phụ kiện, nh&atilde;n m&aacute;c được gắn k&egrave;m theo tr&ecirc;n sản phẩm. Trong đ&oacute;, nh&atilde;n m&aacute;c chất liệu bằng da thường được ứng dụng cao trong ng&agrave;nh may mặc với nhiều k&iacute;ch thước, kiểu d&aacute;ng v&agrave; chất liệu kh&aacute;c nhau. Hiện tại tr&ecirc;n thị trường xuất hiện nhiều nh&atilde;n m&aacute;c bằng da bao gồm da thật (c&ograve;n được gọi l&agrave; da thuộc), da PU, da simili, giấy giả da,...</p>\r\n\r\n<p>Mỗi loại đều c&oacute; đặc t&iacute;nh ri&ecirc;ng v&agrave; độ bền kh&aacute;c nhau ch&iacute;nh v&igrave; thế kh&ocirc;ng phải ai cũng biết c&aacute;ch giặt v&agrave; bảo quản được bền l&acirc;u. 160STORE gợi &yacute; một số mẹo nhỏ để bảo vệ nh&atilde;n m&aacute;c da tối ưu nhất khi giặt.</p>\r\n\r\n<p>5 MẸO NHỎ BẢO VỆ NH&Atilde;N M&Aacute;C DA / QUẦN JEANS CỦA BẠN</p>\r\n\r\n<p>👆Hạn Chế Giặt Tay</p>\r\n\r\n<p>👆Kh&ocirc;ng Ng&acirc;m Qua Đ&ecirc;m</p>\r\n\r\n<p>👆Kh&ocirc;ng D&ugrave;ng Chất Tẩy Mạnh</p>\r\n\r\n<p>👆Khuyến Kh&iacute;ch Hạn Chế Giặt</p>\r\n\r\n<p>👆Khuyến Kh&iacute;ch Giặt, Sấy Bằng M&aacute;y</p>\r\n\r\n<p>Một số mẹo nhỏ tr&ecirc;n 160STORE tin chắc rằng Qu&yacute; kh&aacute;ch dễ d&agrave;ng thực hiện v&agrave; bảo vệ được nh&atilde;n m&aacute;c da n&oacute;i ri&ecirc;ng v&agrave; những chiếc quần jeans n&oacute;i chung.</p>\r\n', '2021-05-22 02:57:45'),
(2, 'Top 3 Áo Sơ Mi Nam  luôn có trong tủ đồ của các chàng trai', '<p>Nếu bạn l&agrave; ch&agrave;ng trai c&ocirc;ng sở hay y&ecirc;u th&iacute;ch phong c&aacute;ch lịch l&atilde;m, trẻ trung th&igrave; những chiếc &aacute;o sơ mi nam tay d&agrave;i chắc chắn lu&ocirc;n l&agrave; items kh&ocirc;ng thể thiếu trong tủ đồ c', '<p>Hai m&agrave;u trắng &amp; đen lu&ocirc;n l&agrave; những m&agrave;u cơ bản để cho c&aacute;c ch&agrave;ng trai lựa chọn bởi sự giản đơn v&agrave; dễ d&agrave;ng phối với những mau sắc kh&aacute;c. Với những chiếc &aacute;o sơ mi nam tay d&agrave;i basic n&agrave;y sẽ dễ d&agrave;ng gi&uacute;p cho c&aacute;c ch&agrave;ng trai trở n&ecirc;n thanh lịch hơn bao giờ hết v&agrave; chẳng &acirc;u lo về vấn đề lỗi mode.</p>\r\n\r\n<p>Với những chiếc &aacute;o sơ mi nam kẻ sọc kh&ocirc;ng chỉ gi&uacute;p người mặc trở n&ecirc;n nổi bật v&agrave; lịch l&atilde;m m&agrave; c&ograve;n gi&uacute;p cho họ giấu đi ưu điểm về cơ thể. Đặc biệt với những việc &aacute;o sơ mi nam với họa tiết n&agrave;y bạn dễ d&agrave;ng mix &amp; match theo nhiều phong c&aacute;ch với c&aacute;c items kh&aacute;c nhau như phong c&aacute;ch trẻ trung, năng động.</p>\r\n\r\n<p>Nếu bạn ch&aacute;n những chiếc &aacute;o sơ mi nam tay d&agrave;i những m&agrave;u sắc cơ bản th&igrave; đ&acirc;y sẽ l&agrave; trang phục thay thế cực k&igrave; th&iacute;ch hợp bởi sự đa dạng về m&agrave;u sắc nhưng kh&ocirc;ng qu&aacute; nổi bật vẫn đảm bảo được sự lịch l&atilde;m v&agrave; trẻ trung khi l&ecirc;n d&aacute;ng.</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 30px; left: 937px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png\" /></div>\r\n', '2021-05-22 02:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id_cat` int(11) NOT NULL,
  `name_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id_cat`, `name_cat`) VALUES
(1, 'Quần'),
(2, 'Áo');

-- --------------------------------------------------------

--
-- Table structure for table `cat_items`
--

CREATE TABLE `cat_items` (
  `id_items` int(11) NOT NULL,
  `name_item` varchar(100) NOT NULL,
  `name_cat` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_items`
--

INSERT INTO `cat_items` (`id_items`, `name_item`, `name_cat`, `id_parent`) VALUES
(1, 'Quần Jean', 1, 0),
(2, 'Quần Tây', 1, 0),
(3, 'Quần Short', 1, 0),
(5, 'Áo Thun', 2, 0),
(6, 'Áo Sơ Mi', 2, 0),
(24, 'Quần Kaki', 1, 0),
(25, 'Áo Polo', 2, 0),
(26, 'Áo Hoodie', 2, 0),
(28, 'Áo Sơ Mi', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_blog` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id_contact` int(11) NOT NULL,
  `fulname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id_contact`, `fulname`, `email`, `content`) VALUES
(11, 'Pham Hoang Vu', 'anhvu991qn@gmail.com', 'ádasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_customer` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_customer`, `fname`, `email`, `password`) VALUES
(14, 'Vu Hoang Pham', 'anhthu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'Admin', 'Evil-store@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'Vureus', '1', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Table structure for table `img_products`
--

CREATE TABLE `img_products` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_products`
--

INSERT INTO `img_products` (`id`, `id_sp`, `img`) VALUES
(128, 43, '1621387905'),
(129, 43, '16213879390.jpg'),
(130, 43, '16213879401.jpg'),
(131, 43, '16213879402.jpg'),
(135, 45, '1621388655md2.jpg'),
(136, 45, '1621388655md3.jpg'),
(137, 45, '1621388656md4.jpg'),
(138, 46, '1621388764j2.jpg'),
(139, 46, '1621388764j3.jpg'),
(140, 46, '1621388764j4.jpg'),
(141, 47, '1621389045j12.jpg'),
(142, 47, '1621389045j13.jpg'),
(143, 47, '1621389045j14.jpg'),
(144, 48, '16213891512j.jpg'),
(145, 48, '16213891513j.jpg'),
(146, 48, '16213891514j.jpg'),
(147, 49, '1621389293jj2.jpg'),
(148, 49, '1621389293jj3.jpg'),
(149, 49, '1621389293jj4.jpg'),
(150, 50, '16213894052.jpg'),
(151, 50, '16213894053.jpg'),
(152, 50, '16213894054.jpg'),
(153, 51, '16213894846.jpg'),
(154, 51, '16213894847.jpg'),
(155, 52, '162140879512.jpg'),
(156, 52, '162140879513.jpg'),
(157, 52, '162140879511.jpg'),
(161, 48, '1621428718'),
(162, 52, '1621428757'),
(164, 52, '1621429747'),
(166, 52, '1621559897'),
(167, 52, '1621559916'),
(168, 54, '16215600802.jpg'),
(169, 54, '16215600803.jpg'),
(170, 54, '16215600814.jpg'),
(171, 54, '1621560119'),
(172, 54, '162156014213.jpg'),
(173, 54, '162156014215.jpeg'),
(174, 54, '162156014216.jpeg'),
(194, 59, '1621563407r2.jpg'),
(195, 59, '1621563407r3.jpg'),
(196, 59, '1621563407r4.jpg'),
(197, 59, '162156364913.jpg'),
(198, 59, '162156364915.jpeg'),
(199, 59, '162156365116.jpeg'),
(200, 59, '1621563749'),
(201, 60, '1621820984rr1.jpg'),
(202, 60, '1621820984rr2.jpg'),
(203, 60, '1621820984rr3.jpg'),
(204, 61, '1621821093r11.jpg'),
(205, 61, '1621821093r12.jpg'),
(206, 61, '1621821093r13.jpg'),
(207, 62, '162182121214.jpg'),
(208, 62, '162182121215.jpeg'),
(209, 62, '162182121316.jpeg'),
(210, 63, '162182130818.jpg'),
(211, 63, '162182130819.jpg'),
(212, 63, '162182130820.jpg'),
(213, 64, '162182138321.jpg'),
(214, 64, '162182138322.jpg'),
(215, 64, '162182138323.jpg'),
(216, 65, '162182150324.jpg'),
(217, 65, '162182150325.jpg'),
(218, 65, '162182150326.jpeg'),
(219, 66, '162182159331.jpg'),
(220, 66, '162182159332.jpg'),
(221, 66, '162182159433.jpg'),
(222, 67, '162182167235.jpg'),
(223, 67, '162182167236.jpg'),
(224, 67, '162182167237.jpg'),
(225, 68, '162182174341.jpg'),
(226, 68, '162182174342.jpg'),
(227, 68, '162182174343.jpg'),
(228, 69, '162182181451.jpg'),
(229, 69, '162182181452.jpg'),
(230, 69, '162182181453.jpg'),
(231, 70, '162182191561.jpg'),
(232, 70, '162182191662.jpg'),
(233, 70, '162182191663.jpg'),
(234, 71, '162182197565.jpg'),
(235, 71, '162182197566.jpg'),
(236, 71, '162182197567.jpg'),
(237, 72, '1621822349k2.jpg'),
(238, 72, '1621822349k3.jpg'),
(239, 72, '1621822349k4.jpg'),
(240, 73, '1621822433k5.jpeg'),
(241, 73, '1621822433k6.jpeg'),
(242, 73, '1621822433k7.jpeg'),
(243, 74, '1621822519kk2.jpg'),
(244, 74, '1621822519kk3.jpg'),
(245, 74, '1621822519kk1.jpg'),
(246, 75, '1621822615k-1.jpg'),
(247, 75, '1621822615k-2.jpg'),
(248, 75, '1621822615k-3.jpg'),
(249, 76, '1621822741a1.jpg'),
(250, 76, '1621822741a2.jpg'),
(251, 76, '1621822741a3.jpg'),
(258, 79, '1621823007tt13.jpg'),
(259, 79, '1621823007tt11.jpg'),
(260, 79, '1621823007tt12.jpg'),
(264, 81, '1621823186t-3.jpg'),
(265, 81, '1621823186t-1.jpg'),
(266, 81, '1621823186t-2.jpg'),
(267, 82, '1621823435sm2.jpg'),
(268, 82, '1621823435sm1.jpg'),
(269, 82, '1621823435m3.jpg'),
(270, 83, '1621823526v1.jpg'),
(271, 83, '1621823527v2.jpg'),
(272, 83, '1621823527v3.jpg'),
(273, 84, '1621823629v12.jpg'),
(274, 84, '1621823629v13.jpg'),
(275, 84, '1621823629v14.jpg'),
(276, 85, '1621823721v18.jpg'),
(277, 85, '1621823721v16.jpg'),
(278, 85, '1621823721v17.jpg'),
(279, 86, '1621823823v19.jpeg'),
(280, 86, '1621823823v20.jpeg'),
(281, 86, '1621823823v21.jpeg'),
(282, 87, '1621823913plo1.jpg'),
(283, 87, '1621823913plo2.jpg'),
(284, 87, '1621823913plo3.jpg'),
(285, 88, '1621824019vl1.jpg'),
(286, 88, '1621824019vl2.png'),
(287, 88, '1621824019vl3.jpg'),
(288, 89, '1621824140vl6.jpg'),
(289, 89, '1621824140vl4.jpg'),
(290, 89, '1621824140vl5.jpg'),
(291, 59, '1621824206vl2.png'),
(292, 59, '1621824206vl3.jpg'),
(293, 59, '1621824206vl4.jpg'),
(294, 90, '1621824296tt1.jpg'),
(295, 90, '1621824296tt2.jpg'),
(296, 90, '1621824296tt3.jpg'),
(297, 91, '1621824385v21.jpeg'),
(298, 91, '1621824385v22.jpg'),
(299, 91, '1621824385v23.jpg'),
(300, 92, '1621824510hd3.jpg'),
(301, 92, '1621824510hd1.jpg'),
(302, 92, '1621824510hd2.jpg'),
(303, 93, '1621824594h1.jpg'),
(304, 93, '1621824595h2.jpg'),
(305, 93, '1621824595h3.jpg'),
(306, 94, '1623633485img_8588_a9b44d75dda943179a14b9d3eb036838_master.jpg'),
(307, 94, '1623633485img_8599_2f1ffa6d4337434c993ba71b1f44babc_master.jpg'),
(308, 94, '1623633485z2371863611285_98755f62d0880dd70216102ef501a855_91413a47587a43b29ece59f3979b9820_master.jp');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_customer`, `address`, `phone`, `status`, `date`, `payment`) VALUES
(90, 17, 'Thôn 6 Hương An Quế Sơn Quảng Nam', '558888', 1, '2021-06-15 14:33:52', 1),
(92, 14, 'Thi Tran Huong An, Que Son, Quang Nam', '0918636373', 0, '2021-06-16 14:25:53', 1),
(93, 14, '', '', 0, '2021-06-17 01:40:31', 1),
(94, 14, '', '', 0, '2021-06-17 06:33:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id_order` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id_order`, `id_sp`, `qty`, `price`) VALUES
(90, 94, 1, 500000),
(90, 46, 2, 450000),
(92, 46, 5, 450000),
(92, 45, 1, 500000),
(92, 47, 1, 600000),
(93, 45, 1, 500000),
(94, 45, 3, 500000),
(94, 46, 3, 450000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_sp` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_items` int(11) NOT NULL,
  `name_product` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `detail` text NOT NULL,
  `hot_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_sp`, `id_cat`, `id_items`, `name_product`, `price`, `image`, `quantity`, `detail`, `hot_product`) VALUES
(45, 1, 1, 'Quần Jeans NOMOUS ESSENTIALS light bule slim', 500000, 'hinhanh-1621388655md1.jpg', 10, 'Thông tin sản phẩm\r\n// BOUTON Rip Knee w chain Jeans //\r\n\r\nJeans rách gối phối phụ kiện dây xích vừa lên kệ nha ae 👍🏻\r\n\r\nChất vải jeans mềm mịn, co giãn. Form skinny fit.\r\n\r\nHàng full tem, tag, date 2021 👌🏻', 1),
(46, 1, 1, 'Quần jeans NOMOUS ESSENTIALS dark grey skinny', 450000, 'hinhanh-1621388764j1.jpg', 12, 'Skinny jeans NOMOUS ESSENTIALS lên kệ nha ae 👌🏻\r\n\r\nMẫu rách nhẹ cực chất, tone xám đậm dễ mix & match luôn.\r\n\r\nChất vải co giãn tốt 👍🏻', 1),
(47, 1, 1, 'Quần Jeans BOUTON Rách Skinny', 600000, 'hinhanh-1621389045j11.jpg', 2, 'NOMOUS ESSENTIALS Light Grey Wash Jeans\r\n\r\nDòng quần jeans wash màu xám bạc vừa lên kệ phục vụ ae 👍🏻\r\n\r\nForm super skinny ôm dáng cực đẹp & trẻ trung.\r\n\r\nChất vải jean mềm, co giãn nên mặc rất thoải mái 👌🏻', 1),
(48, 1, 1, 'Quần Jeans NOMOUS ESSENTIALS light bule slim', 500000, 'hinhanh-16213891511j.jpg', 10, '<p>Th&ocirc;ng tin sản phẩm</p>\r\n\r\n<p>// BOUTON Rip Knee w chain Jeans //</p>\r\n\r\n<p>Jeans r&aacute;ch gối phối phụ kiện d&acirc;y x&iacute;ch vừa l&ecirc;n kệ nha ae</p>\r\n\r\n<p>👍🏻 Chất vải jeans mềm mịn, co gi&atilde;n.</p>\r\n\r\n<p>Form skinny fit.</p>\r\n\r\n<p>H&agrave;ng full tem, tag, date 2021 👌🏻</p>\r\n', 0),
(49, 1, 1, 'Quần jeans NOMOUS ESSENTIALS slim', 500000, 'hinhanh-1621389293jj1.jpg', 14, 'Đợt này về jeans mấy màu đẹp quá, ae tranh thủ sắm Tết đi nè 👍🏻\r\n\r\nDòng slim fit jeans NOMOUS ESSENTIALS với chất vải co giãn tốt, form rất gọn đẹp nha ae 👌🏻\r\n\r\nHàng full tem, tag, date 2021.', 0),
(50, 1, 1, 'Quần jeans NOMOUS ESSENTIALS dark blue Skinny', 480000, 'hinhanh-16213894051.jpg', 2, 'Lên kệ màu dark blue wash cực đẹp nha ae 👍🏻\r\n\r\nVẫn chất vải đặc trưng mềm mịn & độ co giãn cao.\r\n\r\nForm skinny fit. Ôm dáng gọn đẹp 👌🏻', 1),
(51, 1, 1, 'Quần jeans NOMOUS ESSEANTIALS Skinny', 500000, 'hinhanh-16213894845.jpg', 2, 'Skinny jeans NOMOUS ESSENTIALS Mid-Blue //\r\n\r\nDòng jeans xanh wash với chất vải co giãn, dày dặn & mềm mịn.\r\n\r\nForm skinny ôm dáng.\r\n\r\nMàu xanh mid blue cực dễ mix đồ nha ae', 1),
(52, 1, 1, 'Quần Jeans NOMOUS ESSENTIALS light bule slim', 500000, 'hinhanh-16215599165.jpg', 10, '<p>Th&ocirc;ng tin sản phẩm // BOUTON Rip Knee w chain Jeans // Jeans r&aacute;ch gối phối phụ kiện d&acirc;y x&iacute;ch vừa l&ecirc;n kệ nha ae 👍🏻 Chất vải jeans mềm mịn, co gi&atilde;n. Form skinny fit. H&agrave;ng full tem, tag, date 2021 👌🏻</p>\r\n', 1),
(54, 1, 1, 'Quần Jeans NOMOUS ESSENTIALS light bule slim', 500000, 'hinhanh-16215601197.jpg', 10, '<p>Th&ocirc;ng tin sản phẩm // BOUTON Rip Knee w chain Jeans // Jeans r&aacute;ch gối phối phụ kiện d&acirc;y x&iacute;ch vừa l&ecirc;n kệ nha ae 👍🏻 Chất vải jeans mềm mịn, co gi&atilde;n. Form skinny fit. H&agrave;ng full tem, tag, date 2021 👌🏻</p>\r\n', 1),
(59, 2, 6, 'Áo sơmi caro NOMOUS ESSENTIALS flannel', 500000, 'hinhanh-1621824206v20.jpeg', 12, '<p><strong>Flannel shirts chưa bao giờ l&agrave;m ae thất vọng&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t4f/1.5/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></strong>&nbsp;</p>\r\n\r\n<p>Đợt mới nhất n&agrave;y l&agrave; d&ograve;ng t&uacute;i nắp được ae săn đ&oacute;n nhất lu&ocirc;n.</p>\r\n\r\n<p>Chất vải rất mịn, mặc thoải m&aacute;i.</p>\r\n\r\n<p>Số lượng đợt n&agrave;y rất &iacute;t&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1.5/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 1),
(60, 1, 2, 'Quần tây BOUTON carrot', 500000, 'hinhanh-1621820984rr1.jpg', 12, '<p><strong>Mẫu phối l&oacute;t lưng thun, form carrot ngắn đến mắt c&aacute;.</strong></p>\r\n\r\n<p>Date 2021.</p>\r\n\r\n<p>+Size 29: Lưng 80cm - Đ&ugrave;i 48cm - Ống 15cm - D&agrave;i 86cm<br />\r\n+Size 30: Lưng 82cm - Đ&ugrave;i 52cm - Ống 16cm - D&agrave;i 86cm<br />\r\n+Size 31: Lưng 86cm - Đ&ugrave;i 52cm - Ống 16cm - D&agrave;i &nbsp;87cm<br />\r\n+Size 32: Lưng 86cm - Đ&ugrave;i 54cm - Ống 17cm - D&agrave;i 87cm<br />\r\n+Size 34: Lưng 88cm - Đ&ugrave;i 56cm - Ống 17cm - D&agrave;i 89cm<br />\r\n+Size 36: Lưng 90cm - Đ&ugrave;i 56cm - Ống 17cm - D&agrave;i 90cm</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 29px; left: 323.547px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png\" /></div>\r\n', 1),
(61, 1, 2, 'Quần tây NOMOUS ESSENTIALS slim fit', 280000, 'hinhanh-1621821093r11.jpg', 12, '<p>+ Size 29 : Lưng 78cm - Đ&ugrave;i 51cm - Ống 14cm - D&agrave;i 91cm<br />\r\n+ Size 30 : Lưng 80cm - Đ&ugrave;i 52cm - Ống 15cm - D&agrave;i 92cm<br />\r\n+ Size 31 : Lưng 84cm - Đ&ugrave;i 54cm - Ống 15.5cm - D&agrave;i 94cm<br />\r\n+ Size 32 : Lưng 86cm - Đ&ugrave;i 56cm - Ống 16cm - D&agrave;i 96cm<br />\r\n+ Size 34 : Lưng 88cm - Đ&ugrave;i 58cm - Ống 16.5cm - D&agrave;i 98cm<br />\r\n+ Size 36 : Lưng 91cm - Đ&ugrave;i 58cm - Ống 17cm - D&agrave;i 101cm</p>\r\n', 0),
(62, 1, 2, 'Quần tây ICON DENIM', 350000, 'hinhanh-162182121214.jpg', 12, '<p>Vest ICON th&igrave; qu&aacute; chuẩn từ form d&aacute;ng đến từng chi tiết b&ecirc;n trong lu&ocirc;n đ&oacute; ae<br />\r\nĐợt n&agrave;y về mẫu 2020 kẻ caro m&agrave;u socola sang trọng &amp; lịch l&atilde;m.<br />\r\nForm slim fit. Ae c&oacute; thể mua ri&ecirc;ng quần hoặc &aacute;o.</p>\r\n', 1),
(63, 1, 2, 'Quần tây ICON DENIM Skinny with side tape', 350000, 'hinhanh-162182130818.jpg', 12, '<p>ICON DENIM w stripe side trousers // D&ograve;ng quần &acirc;u phối sọc mẫu mới nhất trong năm nay của ICON.<br />\r\nChất vải d&agrave;y dặn nhưng kh&aacute; mịn, cầm mềm tay &amp; độ co gi&atilde;n cao gi&uacute;p ae mặc v&agrave;o c&oacute; cảm gi&aacute;c thoải m&aacute;i nhất.<br />\r\n<strong>Form skinny &ocirc;m vừa gọn d&aacute;ng.</strong></p>\r\n\r\n<p>+Size 29: Lưng 80cm - Đ&ugrave;i 54cm - Ống 14,5cm - D&agrave;i 90cm<br />\r\n+Size 30: Lưng 82cm - Đ&ugrave;i 55cm - Ống 15cm - D&agrave;i 91cm<br />\r\n+Size 31: Lưng 84cm - Đ&ugrave;i 56cm - Ống 15cm - D&agrave;i 93cm<br />\r\n+Size 32: Lưng 86cm - Đ&ugrave;i 57cm - Ống 15,5cm - D&agrave;i 94cm<br />\r\n+Size 34: Lưng 90cm - Đ&ugrave;i 60cm - Ống 16cm - D&agrave;i 95cm<br />\r\n+Size 36: Lưng 92cm - Đ&ugrave;i 60cm - Ống 17cm - D&agrave;i 95cm</p>\r\n\r\n<div class=\"ddict_btn\" style=\"top: 103px; left: 199.953px;\"><img src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/logo/16.png\" /></div>\r\n', 1),
(64, 1, 2, 'Quần tây ICON DENIM Skinny', 280000, 'hinhanh-162182138321.jpg', 10, '<p>ICON DENIM w stripe side trousers // D&ograve;ng quần &acirc;u phối sọc mẫu mới nhất trong năm nay của ICON.<br />\r\nChất vải d&agrave;y dặn nhưng kh&aacute; mịn, cầm mềm tay &amp; độ co gi&atilde;n cao gi&uacute;p ae mặc v&agrave;o c&oacute; cảm gi&aacute;c thoải m&aacute;i nhất.<br />\r\nForm skinny &ocirc;m vừa gọn d&aacute;ng.</p>\r\n\r\n<p>+Size 29: Lưng 80cm - Đ&ugrave;i 54cm - Ống 14,5cm - D&agrave;i 90cm<br />\r\n+Size 30: Lưng 82cm - Đ&ugrave;i 55cm - Ống 15cm - D&agrave;i 91cm<br />\r\n+Size 31: Lưng 84cm - Đ&ugrave;i 56cm - Ống 15cm - D&agrave;i 93cm<br />\r\n+Size 32: Lưng 86cm - Đ&ugrave;i 57cm - Ống 15,5cm - D&agrave;i 94cm<br />\r\n+Size 34: Lưng 90cm - Đ&ugrave;i 60cm - Ống 16cm - D&agrave;i 95cm<br />\r\n+Size 36: Lưng 92cm - Đ&ugrave;i 60cm - Ống 17cm - D&agrave;i 95cm</p>\r\n', 0),
(65, 1, 2, 'Quần tây NOMOUS ESSENTIALS (set vest)', 450000, 'hinhanh-162182150324.jpg', 12, '<p><strong>NOMOUS ESSENTIALS men&rsquo;s suit&nbsp;</strong></p>\r\n\r\n<p>Bộ vest mới nhất 2021 đ&atilde; l&ecirc;n kệ phục vụ ae m&ugrave;a tiệc t&ugrave;ng cuối năm&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Form slim với thiết kế trẻ trung, lịch l&atilde;m &amp; sang trọng.</p>\r\n\r\n<p>2 m&agrave;u: Đen - Sọc&nbsp;</p>\r\n\r\n<div class=\"ddict_div\" style=\"top: 42px; max-width: 207.828px; left: 14.9141px;\"><img class=\"ddict_audio\" src=\"chrome-extension://bpggmmljdiliancllaapiggllnkbjocb/img/audio.png\" />\r\n<p class=\"ddict_sentence\">NOMOUS ESSENTIALS suit nam</p>\r\n</div>\r\n', 0),
(66, 1, 3, 'Quần short kaki NOMOUS ESSENTIALS kẻ', 280000, 'hinhanh-162182159331.jpg', 1, '<p>NOMOUS ESSENTIALS Kaki Short ss21 //&nbsp;</p>\r\n\r\n<p>D&ograve;ng quần short kẻ sọc sở hữu thiết kế kh&aacute; trẻ trung &amp; năng động.&nbsp;</p>\r\n\r\n<p>Chất vải kaki mặc kh&aacute; m&aacute;t &amp; thoải m&aacute;i cho thời tiết n&agrave;y.&nbsp;</p>\r\n\r\n<p>Form slim ‼️ gi&aacute; lu&ocirc;n tốt</p>\r\n\r\n<p>+Size 29: Lưng 78cm - Đ&ugrave;i 56cm - Ống 23cm - D&agrave;i 45cm<br />\r\n+Size 30: Lưng 81cm - Đ&ugrave;i 56cm - Ống 23cm - D&agrave;i 46cm<br />\r\n+Size 31: Lưng 84cm - Đ&ugrave;i 58cm - Ống 23cm - D&agrave;i 48cm<br />\r\n+Size 32: Lưng 87cm - Đ&ugrave;i 59cm - Ống 23.5m - D&agrave;i 48.5cm<br />\r\n+Size 36: Lưng 93cm - Đ&ugrave;i 62cm - Ống 24cm - D&agrave;i 50cm</p>\r\n', 1),
(67, 1, 3, 'Quần short jeans NOMOUS ESSENTIALS', 320000, 'hinhanh-162182167135.jpg', 1, '<p>H&egrave; n&agrave;y kh&ocirc;ng thể thiếu những chiếc quần short mới nhất với chất vải denim bền bỉ, c&oacute; độ d&agrave;y vừa phải dễ chịu gi&uacute;p ae lu&ocirc;n thoải m&aacute;i trong mọi hoạt động.</p>\r\n\r\n<p>Item sở hữu 2 phi&ecirc;n bản m&agrave;u X&aacute;m &amp; Xanh đậm, nổi bật với hiệu ứng wash kh&aacute; ấn tượng. ‼️</p>\r\n', 0),
(68, 1, 3, 'Quần short BOUTON soft denim ss21', 350000, 'hinhanh-162182174141.jpg', 2, '<p>BOUTON Soft Denim Shorts ss21</p>\r\n\r\n<p>Chiếc quần jean short với chất vải soft denim si&ecirc;u xịn vừa l&ecirc;n kệ nha ae&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Chất vải dệt mềm, d&agrave;nh cho ae th&iacute;ch denim nhưng chuộng sự nhẹ nh&agrave;ng &amp; thoải m&aacute;i.</p>\r\n\r\n<p>H&agrave;ng full tem, tag, date 2021&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n', 1),
(69, 1, 3, 'Quần short BOUTON velvet basic', 280000, 'hinhanh-162182181451.jpg', 2, '<p>Conduroy Shorts BOUTON - quần short m&ugrave;a n&agrave;y l&ecirc;n kệ to&agrave;n mẫu đẹp cho ae lựa chọn nha&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>D&ograve;ng quần lưng thun với chất vải nhung tăm mềm mại, t&uacute;i nắp hộp ph&iacute;a sau.</p>\r\n\r\n<p>D&aacute;ng tr&ecirc;n gối, trẻ trung, form slim&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n', 0),
(70, 1, 3, 'QUẦN SHORT BIỂN C0TT0N.0N', 250000, 'hinhanh-162182191561.jpg', 2, '<p>Sở hữu form d&aacute;ng năng động, thiết kế trẻ trung, phối h&igrave;nh in nổi bật c&ugrave;ng chất vải nỉ mềm mại, tạo n&ecirc;n sự h&agrave;i h&ograve;a v&agrave; mang đến sự thoải m&aacute;i trong mọi chuyển động của cơ thể.</p>\r\n', 0),
(71, 1, 3, 'Quần short nỉ RUNPOW Printed', 280000, 'hinhanh-162182197565.jpg', 2, '<p>RUNPOW printed shorts ss21 //&nbsp;</p>\r\n\r\n<p>Sở hữu form d&aacute;ng năng động, thiết kế trẻ trung, phối h&igrave;nh in nổi bật c&ugrave;ng chất vải nỉ mềm mại, tạo n&ecirc;n sự h&agrave;i h&ograve;a v&agrave; mang đến sự thoải m&aacute;i trong mọi chuyển động của cơ thể.</p>\r\n\r\n<p>+ Size M: Lưng 72cm - Đ&ugrave;i 52cm - Ống 23cm - D&agrave;i 48cm&nbsp;<br />\r\n+ Size L: Lưng&nbsp;76cm - Đ&ugrave;i 55cm - Ống 23cm - D&agrave;i 50cm<br />\r\n+ Size XL: Lưng 78cm - Đ&ugrave;i 56cm - Ống 24cm - D&agrave;i 51cm</p>\r\n', 0),
(72, 1, 24, ' Quần kaki MASCUS velvet slim', 450000, 'hinhanh-1621822349k1.jpg', 2, '<p>Velvet Chino Slim // d&ograve;ng quần chino vải kaki nhung tuyết cực xịn s&ograve; lu&ocirc;n nha ae&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Form slim fit. 3 m&agrave;u onweb</p>\r\n\r\n<p>H&agrave;ng full tem, tag, date 2021&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n', 1),
(73, 1, 24, 'Quần kaki NOMOUS ESSENTIALS Basic', 350000, 'hinhanh-1621822433k5.jpeg', 2, '<p>Quần chino NOMOUS ESSENTIALS</p>\r\n\r\n<p>Chất vải kaki co gi&atilde;n, mềm mịn.</p>\r\n\r\n<p>Form Slim fit.</p>\r\n\r\n<p>+Size 29: Lưng 74cm - Đ&ugrave;i 52cm - Ống 15cm - D&agrave;i 95cm<br />\r\n+Size 30: Lưng 76cm - Đ&ugrave;i 52cm - Ống 15.5cm - D&agrave;i 96cm<br />\r\n+Size 31: Lưng 78cm - Đ&ugrave;i 53cm - Ống 16cm - D&agrave;i 97cm<br />\r\n+Size 32: Lưng 80cm - Đ&ugrave;i 54cm - Ống 16.5cm - D&agrave;i 97.5cm<br />\r\n+Size 34: Lưng 88cm - Đ&ugrave;i 56cm - Ống 17cm - D&agrave;i 98cm<br />\r\n+Size 36: Lưng 90cm - Đ&ugrave;i 58cm - Ống 18cm - D&agrave;i 100cm</p>\r\n', 1),
(74, 1, 24, 'Quần kaki NOMOUS ESSENTIALS slim', 420000, 'hinhanh-1621822519kk1.jpg', 2, '<p>Chino Trousers NOMOUS ESSENTIALS D&ograve;ng quần kaki với chất vải co gi&atilde;n.&nbsp;</p>\r\n\r\n<p>Form slim. Mẫu mới 2021 nha ae 👍🏻&nbsp;</p>\r\n\r\n<p>+Size 29: Lưng 76cm - Đ&ugrave;i 52cm - Ống 16,5cm - D&agrave;i 96cm<br />\r\n+Size 30: Lưng 78cm - Đ&ugrave;i 54cm - Ống 16.5cm - D&agrave;i 96cm<br />\r\n+Size 31: Lưng 80cm - Đ&ugrave;i 56cm - Ống 17,5cm - D&agrave;i 97,5cm<br />\r\n+Size 32: Lưng 83cm - Đ&ugrave;i 54cm - Ống 17cm - D&agrave;i 97cm<br />\r\n+Size 34: Lưng 86cm - Đ&ugrave;i 58cm - Ống 18cm - D&agrave;i 98cm<br />\r\n+Size 36: Lưng 88cm - Đ&ugrave;i 59cm - Ống 18 cm - D&agrave;i 100cm</p>\r\n', 0),
(75, 1, 24, 'Quần kaki NOMOUS ESSENTIALS', 420000, 'hinhanh-1621822614k-1.jpg', 2, '<p>Quần chinos NOMOUS ESSENTIALS vừa l&ecirc;n kệ 2 m&agrave;u cực đẹp lu&ocirc;n nha ae&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Chất vải kaki c&oacute; độ d&agrave;y vừa phải, mặt l&aacute;ng mịn, co gi&atilde;n. Form slim fit.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>+ Size 29: Lưng 76cm - Đ&ugrave;i 51cm - Ống 15,5cm - D&agrave;i 101cm<br />\r\n+ Size 30: Lưng 78cm - Đ&ugrave;i 52cm - Ống 16cm - D&agrave;i 101cm<br />\r\n+ Size 31: Lưng 82cm - Đ&ugrave;i 53cm - Ống 16,5cm - D&agrave;i 102cm<br />\r\n+ Size 32: Lưng 84cm - Đ&ugrave;i 55cm - Ống 16,5cm - D&agrave;i 103cm<br />\r\n+ Size 34: Lưng 88cm - Đ&ugrave;i 58cm - Ống 17cm - D&agrave;i 103cm<br />\r\n+ Size 36: Lưng 90cm - Đ&ugrave;i 59cm - Ống 17cm - D&agrave;i 104cm</p>\r\n\r\n<p>&nbsp;</p>\r\n', 0),
(76, 2, 5, 'Áo thun BOUTON Wanted M.key D.Luffy', 280000, 'hinhanh-1621822741a2.jpg', 2, '<p>O.Piece ss21 l&ecirc;n kệ nha ae&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1.5/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Chất vải cotton 100%, mịn m&aacute;t.</p>\r\n\r\n<p>Duy nhất m&agrave;u trắng.</p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 1),
(79, 2, 5, 'Áo thun NOMOUS ESSENTIALS basic', 280000, 'hinhanh-1621823007tt11.jpg', 2, '<p>Chiếc t-shirts trở n&ecirc;n tinh tế hơn với điểm nhấn l&agrave; chi tiết th&ecirc;u tr&ecirc;n cổ &aacute;o.</p>\r\n\r\n<p>Với chất vải cotton stretch (95% cotton - 5% spandex) mang lại cảm gi&aacute;c thoải m&aacute;i nhất khi mặc.</p>\r\n\r\n<p>Form slim fit.</p>\r\n', 0),
(81, 2, 5, 'Áo thun BOUTON acid wash', 250000, 'hinhanh-1621823186t-1.jpg', 1, '<p><strong><strong>L&ecirc;n kệ 1 em ombre t-shirt được xử l&yacute; wash hiệu ứng loang m&agrave;u si&ecirc;u đẹp nha ae&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" /></strong></strong></p>\r\n\r\n<p><strong><strong>Chất vải cotton 100%, form regular.</strong></strong></p>\r\n\r\n<p><strong><strong>Date 2021&nbsp;</strong></strong></p>\r\n', 0),
(82, 2, 6, 'Áo sơmi linen cotton blend NOMOUS ESSENTIALS', 350000, 'hinhanh-1621823435sm1.jpg', 2, '<p>Linen cotton blend shirts - chiếc sơmi d&agrave;nh cho m&ugrave;a h&egrave; v&igrave; độ m&aacute;t, mịn &amp; rất thoải m&aacute;i nha ae.</p>\r\n\r\n<p>Form relaxed fit, thoải m&aacute;i.</p>\r\n\r\n<p>C&aacute;c m&agrave;u đợt n&agrave;y l&ecirc;n d&aacute;ng đ&uacute;ng chất vintage&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t10/1.5/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 1),
(83, 2, 6, 'Áo sơmi BOUTON red leaf (TN)', 300000, 'hinhanh-1621823526v1.jpg', 1, '<p>BOUTON Floral Print Shirts</p>\r\n\r\n<p>SS21 l&ecirc;n kệ mẫu sơmi hoạ tiết floral tone m&agrave;u qu&aacute; đẹp lu&ocirc;n ae ơi&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Form Relexed Fit.</p>\r\n\r\n<p>Chất vải cotton mềm mịn, rũ l&ecirc;n form cực đẹp nha ae&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n', 1),
(84, 2, 6, 'Áo sơmi NOMOUS ESSENTIALS fly front slim', 320000, 'hinhanh-1621823629v12.jpg', 1, '<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 0),
(85, 2, 6, 'Áo sơmi BOUTON caro flannel', 280000, 'hinhanh-1621823721v16.jpg', 2, '<p>Checked Flannel Shirts l&ecirc;n kệ mấy mẫu mới cho ae nha.</p>\r\n\r\n<p>H&agrave;ng full tem, tag, date ss21</p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 0),
(86, 2, 25, 'Áo polo NOMOUS ESSENTIALS authentic', 320000, 'hinhanh-1621823823v19.jpeg', 1, '<p>Collection Polo ss21 NOMOUS ESESNTIALS - d&ograve;ng polo mới nhất trong năm vừa l&ecirc;n kệ&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Mấy mẫu đợt n&agrave;y qu&aacute; đẹp lu&ocirc;n ae, hiệu ứng h&igrave;nh in tạo độ cao độc đ&aacute;o&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Chất vải cotton gai 100%, tho&aacute;ng m&aacute;t. Form slim fit.</p>\r\n', 0),
(87, 2, 25, 'Áo Polo P0LHM Basic ss21', 250000, 'hinhanh-1621823913plo1.jpg', 2, '', 0),
(88, 2, 25, 'Áo Polo ICON DENIM basic ss20', 320000, 'hinhanh-1621824019vl1.jpg', 1, '<p>ICON DENIM Ultra Breathable Polo shirts</p>\r\n\r\n<p>M&agrave;u đợt n&agrave;y lại đẹp rồi ae ơi 👌🏻</p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 0),
(89, 2, 25, 'Áo Polo ICON DENIM basic 21', 320000, 'hinhanh-1621824140vl4.jpg', 1, '<p>ICON DENIM Ultra Breathable Polo shirts</p>\r\n\r\n<p>M&agrave;u đợt n&agrave;y lại đẹp rồi ae ơi 👌🏻</p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 1),
(90, 2, 5, 'Áo thun NOMOUS ESSENTIALS embroidery', 280000, 'hinhanh-1621824296tt1.jpg', 1, '<p>D&ograve;ng stretch cotton t-shirts với logo th&ecirc;u b&ecirc;n tay &aacute;o c&ugrave;ng chất vải stretch cotton cực m&aacute;t lu&ocirc;n nha ae<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Form &aacute;o slim fit.</p>\r\n\r\n<p>Date 2021&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 0),
(91, 2, 5, 'Áo thun NOMOUS ESSENTIALS', 280000, 'hinhanh-1621824385v21.jpg', 1, '<p>D&ograve;ng stretch cotton t-shirts với logo th&ecirc;u b&ecirc;n tay &aacute;o c&ugrave;ng chất vải stretch cotton cực m&aacute;t lu&ocirc;n nha ae<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Form &aacute;o slim fit.</p>\r\n\r\n<p>Date 2021&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg</p>\r\n', 0),
(92, 2, 26, 'Áo hoodie BOUTON embroidery', 420000, 'hinhanh-1621824510hd1.jpg', 1, '<p>HOODIE BOUTON with Embroidery Logo</p>\r\n\r\n<p>D&ograve;ng &aacute;o hoodie với chất vải nỉ da c&aacute; cotton, mẫu 2021 vừa l&ecirc;n kệ&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Logo detail được đ&iacute;nh ở phần n&oacute;n l&agrave; điểm nhấn của &aacute;o&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n', 0),
(93, 2, 26, 'Áo hoodie BOUTON colourblock', 450000, 'hinhanh-1621824594h1.jpg', 1, '<p>Hoodie colourblock BOUTON // d&ograve;ng hoodie mới nhất với phối m&agrave;u cực đẹp đ&atilde; l&ecirc;n kệ&nbsp;<img alt=\"👌🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tb6/1/16/1f44c_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Chất nỉ da c&aacute; cotton 100%, ae c&oacute; thể mặc quanh năm nha.</p>\r\n\r\n<p>Thiết kế chữ được in nhung nổi kh&aacute; đẹp mắt&nbsp;<img alt=\"👍🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t77/1/16/1f44d_1f3fb.png\" style=\"height:16px; width:16px\" /></p>\r\n\r\n<p>Size S(53-60kg)/ M(60-68kg)/ L(68-78kg)/ XL(78-85kg)</p>\r\n', 0),
(94, 1, 61, 'Quần jeans BOUTON black skinny', 500000, 'hinhanh-1623633485img_8588_a9b44d75dda943179a14b9d3eb036838_master.jpg', 12, '<p>Skinny Black Jeans lu&ocirc;n l&agrave; must-have item trong tủ đồ của c&aacute;c anh em nha.</p>\r\n\r\n<p>Chất vải jeans m&agrave;u đen tuyền, co gi&atilde;n &amp; giữ m&agrave;u cực tốt.</p>\r\n\r\n<p>H&agrave;ng full tem, tag, date mới.</p>\r\n\r\n<p>+Size 29: Lưng 72cm - Đ&ugrave;i 44cm - Ống 13cm - D&agrave;i 97cm<br />\r\n+Size 30: Lưng 74cm - Đ&ugrave;i 46cm - Ống 14cm - D&agrave;i 100cm<br />\r\n+Size 31: Lưng 75cm - Đ&ugrave;i 48cm - Ống 14cm - D&agrave;i&nbsp;100cm<br />\r\n+Size 32: Lưng 76cm - Đ&ugrave;i 50cm - Ống 15cm - D&agrave;i 101cm<br />\r\n+Size 34: Lưng 82cm - Đ&ugrave;i 52cm - Ống 15cm - D&agrave;i 102cm<br />\r\n+Size 36: Lưng 86cm - Đ&ugrave;i 56cm - Ống 16cm - D&agrave;i 105cm</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `content`, `img`) VALUES
(1, 'Giao Hàng Miễn Phí Tận Nhà', 'Shop Thời Trang Evil-Store với phương châm \"Đồng hành cùng phong cách thời trang của bạn\" sẽ là nơi mua sắm an toàn và chất lượng', 'girl1.jpg'),
(2, 'Sản Phẩm Chất Lượng Mẫu Mới Nhất', 'Shop Thời Trang Evil-Store với phương châm \"Đồng hành cùng phong cách thời trang của bạn\" sẽ là nơi mua sắm an toàn và chất lượng..', 'girl2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `cat_items`
--
ALTER TABLE `cat_items`
  ADD PRIMARY KEY (`id_items`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `img_products`
--
ALTER TABLE `img_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD KEY `id_order` (`id_order`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cat_items`
--
ALTER TABLE `cat_items`
  MODIFY `id_items` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `img_products`
--
ALTER TABLE `img_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=309;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id_order`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
