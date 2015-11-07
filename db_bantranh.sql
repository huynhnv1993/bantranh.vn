-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2014 at 05:26 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bantranh`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatlieu`
--

CREATE TABLE IF NOT EXISTS `chatlieu` (
  `macl` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `tencl` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chatlieu`
--

INSERT INTO `chatlieu` (`macl`, `tencl`) VALUES
('CL0001', 'Thêu tay'),
('CL0002', 'Sơn mài'),
('CL0003', 'Thêu chữ thập'),
('CL0004', 'Tranh giấy'),
('CL0005', 'In gỗ');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdh`
--

CREATE TABLE IF NOT EXISTS `chitietdh` (
  `madh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitietdh`
--

INSERT INTO `chitietdh` (`madh`, `masp`, `sl`) VALUES
('1418038198', 'BH0002', 10),
('1418038198', 'BH0003', 3);

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `madh` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `ngaylap` date NOT NULL,
  `tonggia` int(11) NOT NULL,
  `makh` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` enum('dangcho','thanhcong','thatbai') COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`madh`, `ngaylap`, `tonggia`, `makh`, `trangthai`) VALUES
('1418038198', '2014-12-08', 17100000, 'vK1k03', 'dangcho');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE IF NOT EXISTS `khachhang` (
  `makh` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `tenkh` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `matk` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `diachi`, `email`, `sdt`, `matk`) VALUES
('FUSGBU', 'hoàng văn tú', 'hà nội', 'hoangtuanbka93@gmail.com', 989287572, '1417789883'),
('vK1k03', 'nguyễn viết huỳnh hehe', ' thường tín hà nội', 'nguyenviethuynh.vn@gmail.com', 1687909930, '1417831053');

-- --------------------------------------------------------

--
-- Table structure for table `loaisp`
--

CREATE TABLE IF NOT EXISTS `loaisp` (
  `maloai` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `tenloai` varchar(25) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisp`
--

INSERT INTO `loaisp` (`maloai`, `tenloai`) VALUES
('DT0001', 'Phong cảnh'),
('DT0002', 'Hoa cỏ'),
('DT0003', 'Động vật'),
('DT0004', 'Phong thủy'),
('DT0005', 'Tĩnh vật'),
('DT0006', 'Tôn giáo'),
('DT0007', 'Mẫu người'),
('DT0008', 'Chữ thư pháp'),
('DT0009', 'Tranh bộ tứ quý'),
('DT0010', 'Bác Hồ'),
('DT0011', 'Hoạt hình trẻ em');

-- --------------------------------------------------------

--
-- Table structure for table `ncc`
--

CREATE TABLE IF NOT EXISTS `ncc` (
  `mancc` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `tenncc` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ncc`
--

INSERT INTO `ncc` (`mancc`, `tenncc`, `diachi`, `email`, `sdt`) VALUES
('NCC001', 'DieLianHua', '130/254  Minh khai Hà nội', 'DieLianHua@gmail.com', 988248842),
('NCC002', 'Enuodoz', 'Số 136 đường Nguyễn Trãi, Hùng Vương, Phúc Yên, Vĩnh Phúc', 'Enuodoz@gmail.com', 917356346),
('NCC003', 'Pinkoo', '338D Bà Triệu, Hoàn Kiếm, Hà Nộ', 'Pinkoo@gmail.com', 462800432),
('NCC004', 'TeaNa', 'Số 1 ngõ 74 Nguyễn Chí Thanh- Đống Đa-HN', 'TeaNa@gmail.com', 466883300),
('NCC005', 'Ailuo', ' 262 Ngọc Hồi,Thị Trấn Văn Điển,Hà Nội', 'Ailuo@gmail.com', 968034918),
('NCC006', 'JK100', '75 ĐẠI CỒ VIỆT, HAI BÀ TRƯNG, HN', 'JK100@gmail.com', 919079189),
('NCC007', 'CandyKit', '1196 CMT8-Tân Bình-HCM', 'CandyKit@gmail.com', 919079189),
('NCC008', 'Hokee', '909 Khu phố 9 Đồng Khởi\r\n-Biên Hòa- Đồng Nai', 'Hokee@gmail.com', 968132596),
('NCC009', 'Dream', 'Khu 9 ,TT Thanh Ba, Huyện Thanh Ba, Phú Thọ', 'Dream@gmail.com', 466883300),
('NCC010', 'Honey Home', '\r\nSố 1 ngõ 74 Nguyễn Chí Thanh-Hà Nội', 'HoneyHome@gmail.com', 462800432),
('NCC011', 'TianYi', '338D Bà Triệu - Hà Nội', 'TianYi@gmail.com', 968034918);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `masp` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `maloai` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `macl` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `mancc` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `kichthuoc` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` int(11) NOT NULL,
  `slton` int(11) NOT NULL,
  `tensp` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mota` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `maloai`, `macl`, `mancc`, `kichthuoc`, `dongia`, `slton`, `tensp`, `mota`) VALUES
('BH0001', 'DT0010', 'CL0002', 'NCC002', '90cmxcm130 ', 1200000, 99, 'Bác Hồ ngồi làm việc trong vườn hoa phủ chủ tịch', '…'),
('BH0002', 'DT0010', 'CL0002', 'NCC009', '70cmxcm100', 600000, 7, 'Bác Hồ vẫy tay chào', '…'),
('BH0003', 'DT0010', 'CL0002', 'NCC001', '70cmxcm90 ', 3700000, 97, 'Bác Hồ chân dung', '…'),
('BH0004', 'DT0010', 'CL0002', 'NCC003', '60cmxcm90', 900000, 19, 'Ai yêu nhi đồng bằng Bác Hồ Chí Minh', '…'),
('BH0005', 'DT0010', 'CL0002', 'NCC001', '60cmxcm90', 900000, 17, 'Bác Hồ mặc áo lính', '…'),
('BH0006', 'DT0010', 'CL0005', 'NCC004', '60cmxcm90', 900000, 19, 'Bác Hồ đọc báo', '…'),
('BH0007', 'DT0010', 'CL0005', 'NCC011', '70cmxcm100', 800000, 19, 'Bác Hồ quàng khăn cho thiếu nhi', '…'),
('BH0008', 'DT0010', 'CL0005', 'NCC002', '70cmxcm95', 800000, 18, 'Bác Hồ ngồi', '…'),
('BH0009', 'DT0010', 'CL0002', 'NCC006', '100cmxcm150', 800000, 19, 'Bác Hồ kính yêu', '…'),
('BH0010', 'DT0010', 'CL0002', 'NCC010', '102cmxcm142', 3700000, 19, 'Bác vẫn đang cùng chúng cháu hành quân', '…'),
('DV0001', 'DT0003', 'CL0001', 'NCC001', '138cmxcm74', 454000, 19, 'Cửu ngư quần hội', '…'),
('DV0002', 'DT0003', 'CL0001', 'NCC003', '47cmxcm48', 163000, 19, 'Uyên ương dưới trăng', '…'),
('DV0003', 'DT0003', 'CL0003', 'NCC001', '60cmxcm60', 236000, 19, 'Phu thê viên mãn', '…'),
('DV0004', 'DT0003', 'CL0001', 'NCC002', '56cmxcm57', 236000, 19, 'Phu thê viên mãn', '…'),
('DV0005', 'DT0003', 'CL0003', 'NCC002', '51cmxcm41', 182000, 19, 'Bạch mã oai hùng dưới trăng', '…'),
('DV0006', 'DT0003', 'CL0003', 'NCC011', '62cmxcm45', 200000, 19, 'Khu vườn bạch mã', '…'),
('DV0007', 'DT0003', 'CL0003', 'NCC008', '39cmxcm31', 145000, 19, 'Chú mèo con', '…'),
('DV0008', 'DT0003', 'CL0003', 'NCC010', '41cmxcm36', 136000, 19, 'Chú ngựa con', '…'),
('DV0009', 'DT0003', 'CL0002', 'NCC005', '42cmxcm62', 181000, 19, 'Cá chép phú quý', '…'),
('DV0010', 'DT0003', 'CL0002', 'NCC006', '69cmxcm48', 299000, 19, 'Phu thê viên mãn', '…'),
('DV0011', 'DT0003', 'CL0002', 'NCC001', '60cmxcm75', 363000, 19, 'Phu thê viên mãn', '…'),
('DV0012', 'DT0003', 'CL0002', 'NCC001', '58cmxcm58', 227000, 19, 'Cửu ngư quần hội', '…'),
('DV0013', 'DT0003', 'CL0001', 'NCC004', '68cmxcm39', 209000, 19, 'Cửu ngư quần hội', '…'),
('DV0014', 'DT0003', 'CL0001', 'NCC001', '55cmxcm55', 209000, 19, 'Hạc dưới đầm sen', '…'),
('DV0015', 'DT0003', 'CL0001', 'NCC010', '50cmxcm88', 327000, 19, 'Song phụng bên mẫu đơn', '…'),
('DV0016', 'DT0003', 'CL0001', 'NCC001', '80cmxcm56', 381000, 19, 'Gia đình thiên nga trắng', '…'),
('DV0017', 'DT0003', 'CL0001', 'NCC001', '51cmxcm78', 318000, 19, 'Hạc trường thọ', '…'),
('DV0018', 'DT0003', 'CL0001', 'NCC002', '188cmxcm100', 1343000, 19, 'Phú quý mãn đường', '…'),
('DV0019', 'DT0003', 'CL0001', 'NCC011', '165cmxcm72', 1070000, 19, 'Đầm sen kèm sắc', '…'),
('DV0020', 'DT0003', 'CL0001', 'NCC008', '87cmxcm67', 454000, 19, 'Vũ điệu chim công', '…'),
('DV0021', 'DT0003', 'CL0001', 'NCC001', '87cmxcm67', 427000, 19, 'Lục quang sâm lâm', '…'),
('HC0001', 'DT0002', 'CL0004', 'NCC001', '75cmxcm90', 145000, 19, 'Bình hoa tulip', '…'),
('HC0002', 'DT0002', 'CL0004', 'NCC001', '80cmxcm95', 181000, 19, 'Bình hoa lan', '…'),
('HC0003', 'DT0002', 'CL0004', 'NCC009', '50cmxcm60', 227000, 19, 'Bình hoa màu đỏ', '…'),
('HC0004', 'DT0002', 'CL0001', 'NCC003', '60cmxcm72', 236000, 19, 'Bình hoa nghệ thuật', '…'),
('HC0005', 'DT0002', 'CL0003', 'NCC002', '70cmxcm55', 236000, 19, 'Sen hồng', '…'),
('HC0006', 'DT0002', 'CL0004', 'NCC003', '48cmxcm61', 227000, 19, 'Sen vàng', '…'),
('HC0007', 'DT0002', 'CL0003', 'NCC001', '48cmxcm48', 191000, 19, 'Hoa hướng dương', '…'),
('HC0008', 'DT0002', 'CL0004', 'NCC001', '39cmxcm53cm', 345000, 19, 'Hoa vàng 3 bức', '…'),
('HC0009', 'DT0002', 'CL0004', 'NCC010', '48cmxcm61', 209000, 19, 'Bình hoa màu trắng', '…'),
('HC0010', 'DT0002', 'CL0004', 'NCC005', '55cmxcm70', 750000, 19, 'Giỏ lan', '…'),
('HC0011', 'DT0002', 'CL0001', 'NCC001', '55cmxcm70', 750000, 19, 'Khóm hoa cúc hoa lan', '…'),
('HC0012', 'DT0002', 'CL0004', 'NCC005', '55cmxcm70', 450000, 19, 'Cặp hồng tình yêu', '…'),
('HC0013', 'DT0002', 'CL0004', 'NCC001', '39cmxcm54cm', 254000, 19, 'Sen trắng 2 bức', '…'),
('HC0014', 'DT0002', 'CL0001', 'NCC003', '74cmxcm53', 227000, 19, 'Bình hoa poopy', '…'),
('HC0015', 'DT0002', 'CL0004', 'NCC007', '131cmxcm65', 517000, 19, 'Hoa sen', '…'),
('HC0016', 'DT0002', 'CL0004', 'NCC011', '55cmxcm64', 336000, 19, 'Bình hoa sắc màu', '…'),
('HC0017', 'DT0002', 'CL0001', 'NCC004', '145cmxcm71', 408000, 19, 'Bình hoa 5 bức', '…'),
('HC0018', 'DT0002', 'CL0004', 'NCC002', '60cmxcm60', 245000, 19, 'Mẫu đơn hồng', '…'),
('HC0019', 'DT0002', 'CL0001', 'NCC009', '54cmxcm34', 227000, 19, 'Bình hoa lan', '…'),
('HH0001', 'DT0011', 'CL0003', 'NCC002', '38cmxcm38', 136000, 19, 'Chú mèo Doremon', '…'),
('HH0002', 'DT0011', 'CL0003', 'NCC001', '31cmxcm30', 118000, 19, 'Hai em bé đánh răng', '…'),
('HH0003', 'DT0011', 'CL0003', 'NCC008', '36cmxcm36', 118000, 19, 'Đôi bạn thân', '…'),
('HH0004', 'DT0011', 'CL0003', 'NCC001', '32cmxcm35', 118000, 19, 'Em bé ngồi cung trăng', '…'),
('HH0005', 'DT0011', 'CL0003', 'NCC001', '62cmxcm51', 272000, 19, 'Cô bé', '…'),
('HH0006', 'DT0011', 'CL0003', 'NCC009', '32cmxcm40', 118000, 19, 'Cậu bé ôm trái tim', '…'),
('HH0007', 'DT0011', 'CL0003', 'NCC004', '66cmxcm87', 418000, 19, 'Thiên thần nhỏ', '…'),
('HH0008', 'DT0011', 'CL0003', 'NCC002', '50cmxcm40', 164000, 19, 'Cô bé mắt nai', '…'),
('HH0009', 'DT0011', 'CL0003', 'NCC002', '55cmxcm45', 215000, 19, 'Gấu sao', ''),
('MN0001', 'DT0007', 'CL0001', 'NCC001', '55cmxcm65', 245000, 19, 'Cô gái Chăm Pa', '…'),
('MN0002', 'DT0007', 'CL0002', 'NCC002', '71cmxcm71', 290000, 19, 'Cô gái', '…'),
('MN0003', 'DT0007', 'CL0003', 'NCC005', '39cmxcm54', 163000, 19, 'Nét đẹp tạo hóa', '…'),
('MN0004', 'DT0007', 'CL0003', 'NCC004', '56cmxcm74', 272000, 19, 'Nàng tiên cá', '…'),
('MN0005', 'DT0007', 'CL0002', 'NCC007', '62cmxcm68', 381000, 19, 'Cô gái dân tộc', '…'),
('MN0006', 'DT0007', 'CL0003', 'NCC006', '91cmxcm48', 234000, 19, 'Dương Quý Phi gảy đàn', '…'),
('MN0007', 'DT0007', 'CL0001', 'NCC009', '70cmxcm85', 406000, 19, 'Cô gái ôm bình', '…'),
('MN0008', 'DT0007', 'CL0003', 'NCC008', '36cmxcm55', 164000, 19, 'Cô bé hái nấm', '…'),
('MN0009', 'DT0007', 'CL0001', 'NCC001', '59cmxcm36', 181000, 19, 'Bách niên giai lão', '…'),
('MN0010', 'DT0007', 'CL0003', 'NCC010', '48cmxcm61', 191000, 19, 'Cô gái', '…'),
('PC0001', 'DT0001', 'CL0005', 'NCC001', '215cmxcm90', 1134000, 19, 'Sơn thủy hữu tình', '...'),
('PC0002', 'DT0001', 'CL0005', 'NCC001', '150cmxcm54', 490000, 19, 'Mã đáo thành công', '…'),
('PC0003', 'DT0001', 'CL0001', 'NCC003', '78cmxcm41', 227000, 19, 'Đầm sen', '…'),
('PC0004', 'DT0001', 'CL0005', 'NCC005', '75cmxcm50', 263000, 19, 'Đôi hạc trắng trong đầm sen', '…'),
('PC0005', 'DT0001', 'CL0005', 'NCC009', '50cmxcm80', 290000, 19, 'Tùng hạc diên niên', '…'),
('PC0006', 'DT0001', 'CL0005', 'NCC011', '73cmxcm53', 318000, 19, 'Rừng hoa', '…'),
('PC0007', 'DT0001', 'CL0005', 'NCC007', '37cmxcm79', 272000, 19, 'Đầm sen hạc trắng', '…'),
('PC0008', 'DT0001', 'CL0001', 'NCC001', '90cmxcm54', 426000, 19, 'Ngọn hải đăng', '…'),
('PC0009', 'DT0001', 'CL0001', 'NCC003', '149cmxcm74', 526000, 19, 'Uyên ương mùa xuân', '…'),
('PC0010', 'DT0001', 'CL0001', 'NCC002', '76cmxcm59', 327000, 19, 'Ngọn hải đăng', '…'),
('PC0011', 'DT0001', 'CL0001', 'NCC002', '94cmxcm75', 490000, 19, 'Ngôi nhà nhỏ bên suối', '…'),
('PC0012', 'DT0001', 'CL0001', 'NCC007', '188cmxcm97', 1497000, 19, 'Tùng hạc diên niên', '…'),
('PC0013', 'DT0001', 'CL0003', 'NCC005', '113cmxcm80', 807000, 19, 'Cảnh bình minh', '…'),
('PC0014', 'DT0001', 'CL0003', 'NCC001', '174cmxcm61', 823000, 19, 'Phố cổ', '…'),
('PC0015', 'DT0001', 'CL0003', 'NCC009', '105cmxcm70', 514000, 19, 'Bờ sông thu', '…'),
('PC0016', 'DT0001', 'CL0005', 'NCC002', '58cmxcm88', 1399000, 19, 'Đồng quê', '…'),
('PC0017', 'DT0001', 'CL0005', 'NCC001', '91cmxcm136', 4700000, 19, 'Đồng quê Việt Nam', '…'),
('PC0018', 'DT0001', 'CL0005', 'NCC003', '120cmxcm170', 12000000, 19, 'Cửu ngư quần hội', '…'),
('PC0019', 'DT0001', 'CL0005', 'NCC001', '140cmxcm223', 15000000, 19, 'Cửu ngư quần hội', '…'),
('PC0020', 'DT0001', 'CL0001', 'NCC004', '108cmxcm163', 4500000, 19, 'Thuận buồm xuôi gió', '…'),
('PC0021', 'DT0001', 'CL0001', 'NCC005', '60cmxcm130', 1350000, 19, 'Niên niên đại lợi', '…'),
('PC0022', 'DT0001', 'CL0001', 'NCC008', '103cmxcm138', 7500000, 19, 'Cửu ngư', '…'),
('PT0001', 'DT0004', 'CL0001', 'NCC010', '47cmxcm80', 714000, 19, 'Phú quý trường thọ', '…'),
('PT0002', 'DT0004', 'CL0003', 'NCC001', '85cmxcm51', 272000, 19, 'Ngũ ngũ phú quý', '…'),
('PT0003', 'DT0004', 'CL0003', 'NCC002', '49cmxcm48', 157000, 19, 'Bông cải xanh', '…'),
('PT0004', 'DT0004', 'CL0003', 'NCC001', '72cmxcm50', 215000, 19, 'Thần tài tiền tài', '…'),
('PT0005', 'DT0004', 'CL0003', 'NCC002', '115cmxcm65', 810000, 19, 'Cây tiền', '…'),
('PT0006', 'DT0004', 'CL0003', 'NCC005', '169cmxcm83', 1304000, 19, 'Cửu ngư quần hội', '…'),
('PT0007', 'DT0004', 'CL0001', 'NCC004', '97cmxcm42', 227000, 19, 'Thần tài phát lộc', '…'),
('PT0008', 'DT0004', 'CL0003', 'NCC001', '94cmxcm54', 264000, 19, 'Thần tài', '…'),
('PT0009', 'DT0004', 'CL0001', 'NCC002', '48cmxcm48', 118000, 19, 'Niên niên hữu dư', '…'),
('PT0010', 'DT0004', 'CL0003', 'NCC003', '85cmxcm49', 255000, 19, 'Hoa sen cá chép', '…'),
('PT0011', 'DT0004', 'CL0003', 'NCC001', '128cmxcm42', 214000, 19, 'Tứ tiểu thần tài', '…'),
('PT0012', 'DT0004', 'CL0001', 'NCC001', '91cmxcm47', 184000, 19, 'Phú quý dư dả', '…'),
('TG0001', 'DT0006', 'CL0004', 'NCC008', '34cmxcm48', 217000, 19, 'Quan âm bồ tát', '…'),
('TG0002', 'DT0006', 'CL0004', 'NCC001', '39cmxcm49', 217000, 19, 'Địa tạng vương bồ tát', '…'),
('TG0003', 'DT0006', 'CL0004', 'NCC004', '39cmxcm49', 181000, 19, 'Tĩnh tọa dưới cội bồ đề', '…'),
('TG0004', 'DT0006', 'CL0004', 'NCC006', '94cmxcm72', 426000, 19, 'Quan âm', '…'),
('TG0005', 'DT0006', 'CL0001', 'NCC003', '143cmxcm70', 454000, 19, 'Phật di lặc ngự mẫu đơn', '…'),
('TG0006', 'DT0006', 'CL0001', 'NCC004', '36cmxcm43', 172000, 19, 'Đức mẹ Maria', '…'),
('TG0007', 'DT0006', 'CL0001', 'NCC001', '48cmxcm71', 254000, 19, 'Phật tổ', '…'),
('TG0008', 'DT0006', 'CL0001', 'NCC002', '48cmxcm58', 254000, 19, 'Đức mẹ bồng đức Giesu', '…'),
('TG0009', 'DT0006', 'CL0001', 'NCC002', '140cmxcm70', 545000, 19, 'Phật Di Lặc', '…'),
('TG0010', 'DT0006', 'CL0001', 'NCC005', '54cmxcm84', 272000, 19, 'Phật bà quan âm', '…'),
('TG0011', 'DT0006', 'CL0004', 'NCC010', '51cmxcm72', 299000, 19, 'Đức mẹ Maria', '…'),
('TG0012', 'DT0006', 'CL0004', 'NCC001', '53cmxcm71', 299000, 19, 'Đức mẹ Maria', '…'),
('TG0013', 'DT0006', 'CL0004', 'NCC001', '55cmxcm70', 336000, 19, 'Thánh Giesu', '…'),
('TG0014', 'DT0006', 'CL0004', 'NCC001', '58cmxcm65', 345000, 19, 'Gia đình thánh gia', '…'),
('TG0015', 'DT0006', 'CL0003', 'NCC011', '32cmxcm40', 182000, 19, 'Phật tổ', '…'),
('TG0016', 'DT0006', 'CL0001', 'NCC003', '58cmxcm80', 336000, 19, 'Quan âm bồ tát', '…'),
('TG0017', 'DT0006', 'CL0003', 'NCC001', '75cmxcm53', 318000, 19, 'Phật bà ngự đài sen', '…'),
('TG0018', 'DT0006', 'CL0003', 'NCC002', '79cmxcm123', 1143000, 19, 'Phật bà nghìn mắt nghìn tay', '…'),
('TP0001', 'DT0008', 'CL0004', 'NCC001', '45cmxcm45', 172000, 19, 'Chữ tâm', '…'),
('TP0002', 'DT0008', 'CL0004', 'NCC011', '96cmxcm52', 285000, 19, 'Phúc vẹn tròn', '…'),
('TP0003', 'DT0008', 'CL0004', 'NCC001', '108cmxcm48', 244000, 19, 'Gia hòa vạn sự hưng', '…'),
('TP0004', 'DT0008', 'CL0004', 'NCC003', '35cmxcm35', 134000, 19, 'Chữ phúc', '…'),
('TP0005', 'DT0008', 'CL0003', 'NCC001', '50cmxcm50', 164000, 19, 'Chữ lộc', '…'),
('TP0006', 'DT0008', 'CL0004', 'NCC001', '115cmxcm56', 364000, 19, 'Chữ phúc', '…'),
('TP0007', 'DT0008', 'CL0001', 'NCC004', '66cmxcm76', 273000, 19, 'Đa thôn tất sinh thọ', '…'),
('TP0008', 'DT0008', 'CL0004', 'NCC009', '89cmxcm50', 212000, 19, 'Hồng liên thư pháp', '…'),
('TP0009', 'DT0008', 'CL0003', 'NCC001', '88cmxcm47', 209000, 19, 'Hỏa long chữ phúc', '…'),
('TP0010', 'DT0008', 'CL0003', 'NCC002', '56cmxcm56', 173000, 19, 'Chữ phúc', '…'),
('TP0011', 'DT0008', 'CL0003', 'NCC005', '73cmxcm76', 291000, 19, 'May mắn quý tử', '…'),
('TQ0001', 'DT0009', 'CL0003', 'NCC001', '32cmxcm78', 454000, 19, 'Tứ quý khổng tước', '…'),
('TQ0002', 'DT0009', 'CL0002', 'NCC001', '34cmxcm56', 372000, 19, 'Mai lan cúc trúc', '…'),
('TQ0003', 'DT0009', 'CL0002', 'NCC004', '34cmxcm53cm', 345000, 19, 'Mai lan cúc trúc', '…'),
('TQ0004', 'DT0009', 'CL0003', 'NCC002', '135cmxcm75', 785000, 19, 'Bộ hoa bốn mùa', '…'),
('TQ0005', 'DT0009', 'CL0001', 'NCC010', '200cmxcm85', 1204000, 19, 'Đào lan tùng cúc trúc', '…'),
('TQ0006', 'DT0009', 'CL0001', 'NCC004', '37cmxcm99cm', 472000, 19, 'Đào lan cúc trúc', '…'),
('TQ0007', 'DT0009', 'CL0001', 'NCC001', '145cmxcm75', 715000, 19, 'Đào lan trúc cúc', '…'),
('TQ0008', 'DT0009', 'CL0001', 'NCC001', '31cmxcm72', 454000, 19, 'Tùng cúc trúc mai', '…'),
('TQ0009', 'DT0009', 'CL0003', 'NCC001', '32cmxcm81', 272000, 19, 'Cành trúc', '…'),
('TQ0010', 'DT0009', 'CL0002', 'NCC006', '150cmxcm100', 1271000, 19, 'Đào lan cúc trúc ( cá chép )', '…'),
('TQ0011', 'DT0009', 'CL0005', 'NCC011', '39cmxcm101', 318000, 19, 'Cây tùng', '…'),
('TQ0012', 'DT0009', 'CL0005', 'NCC005', '39cmxcm101', 318000, 19, 'Hoa cúc', '…'),
('TQ0013', 'DT0009', 'CL0005', 'NCC007', '39cmxcm101', 318000, 19, 'Cành trúc', '…'),
('TQ0014', 'DT0009', 'CL0005', 'NCC001', '39cmxcm101', 318000, 19, 'Cành mai', '…'),
('TQ0015', 'DT0009', 'CL0003', 'NCC001', '26cmxcm47', 126000, 19, 'Phố cổ', '…'),
('TQ0016', 'DT0009', 'CL0001', 'NCC002', '37cmxcm37', 138000, 19, 'Mùa đông ( bộ bốn mùa )', '…'),
('TQ0017', 'DT0009', 'CL0001', 'NCC008', '37cmxcm37', 142000, 19, 'Mùa thu ( bộ bốn mùa )', '…'),
('TQ0018', 'DT0009', 'CL0001', 'NCC010', '37cmxcm37', 140000, 19, 'Mùa xuân ( bộ bốn mùa )', '…'),
('TQ0019', 'DT0009', 'CL0001', 'NCC004', '37cmxcm37', 138000, 19, 'Mùa hạ (bộ bốn mùa)', '…'),
('TV0001', 'DT0005', 'CL0003', 'NCC007', '59cmxcm44', 245000, 19, 'Giỏ táo', '…'),
('TV0002', 'DT0005', 'CL0003', 'NCC011', '26cmxcm38', 109000, 19, 'Giỏ và bình', '…'),
('TV0003', 'DT0005', 'CL0003', 'NCC001', '51cmxcm41', 145000, 19, 'Nước cam', '…'),
('TV0004', 'DT0005', 'CL0003', 'NCC005', '104cmxcm29', 325000, 19, 'Quả mùa xuân', '…'),
('TV0005', 'DT0005', 'CL0003', 'NCC010', '75cmxcm50', 255000, 19, 'Chùm nho, rượu nho', '…'),
('TV0006', 'DT0005', 'CL0001', 'NCC001', '81cmxcm59', 391000, 19, 'Hoa quả', '…'),
('TV0007', 'DT0005', 'CL0001', 'NCC001', '31cmxcm31', 102000, 19, 'Quả lựu', '…'),
('TV0008', 'DT0005', 'CL0001', 'NCC002', '39cmxcm52', 255000, 19, 'Hoa hồng vàng', '…'),
('TV0009', 'DT0005', 'CL0001', 'NCC011', '38cmxcm57', 191000, 19, 'Bình ngũ quả', '…'),
('TV0010', 'DT0005', 'CL0003', 'NCC009', '32cmxcm31', 102000, 19, 'Quả táo', '…');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `matk` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `taikhoan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` date NOT NULL,
  `capdo` enum('admin','normal') COLLATE utf8_unicode_ci NOT NULL,
  `kichhoat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `taikhoan`, `matkhau`, `ngaytao`, `capdo`, `kichhoat`) VALUES
('1417789883', 'tuan', 'c4ca4238a0b923820dcc509a6f75849b', '2014-12-05', 'normal', 1),
('1417831053', 'huynh', 'c4ca4238a0b923820dcc509a6f75849b', '2014-12-06', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatlieu`
--
ALTER TABLE `chatlieu`
 ADD PRIMARY KEY (`macl`);

--
-- Indexes for table `chitietdh`
--
ALTER TABLE `chitietdh`
 ADD PRIMARY KEY (`madh`,`masp`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
 ADD PRIMARY KEY (`madh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
 ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loaisp`
--
ALTER TABLE `loaisp`
 ADD PRIMARY KEY (`maloai`);

--
-- Indexes for table `ncc`
--
ALTER TABLE `ncc`
 ADD PRIMARY KEY (`mancc`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
 ADD PRIMARY KEY (`masp`,`maloai`,`macl`,`mancc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
 ADD PRIMARY KEY (`matk`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdh`
--
ALTER TABLE `chitietdh`
ADD CONSTRAINT `chitietdh_ibfk_1` FOREIGN KEY (`madh`) REFERENCES `donhang` (`madh`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
