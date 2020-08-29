-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 25, 2020 lúc 05:37 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbbachhoa`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `idCatalog` int(11) NOT NULL COMMENT 'ID tự tăng không cần ghi',
  `idParentCatalog` int(2) NOT NULL COMMENT 'ID Theo cha',
  `nameCatalog` varchar(255) NOT NULL COMMENT 'Tên Mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`idCatalog`, `idParentCatalog`, `nameCatalog`) VALUES
(1, 0, 'ĐỒ UỐNG'),
(2, 0, 'SỮA'),
(3, 0, 'DỤNG CỤ CHO BÉ'),
(4, 0, 'ĐỒ ĐÓNG HỘP'),
(5, 0, 'GIA VỊ'),
(6, 0, 'BÁNH KẸO'),
(7, 0, 'DỤNG CỤ CÁ NHÂN'),
(12, 1, 'Bia, nước uống có cồn'),
(13, 1, 'Nước ngọt, giải khát'),
(14, 1, 'Nước suối, nước khoáng'),
(15, 1, 'Nước ép trái cây'),
(16, 1, 'Nước yến'),
(17, 1, 'Cafe, trà'),
(18, 1, 'Sữa , trái cây'),
(19, 1, 'Mật ong'),
(20, 1, 'Trái cây hộp , siro'),
(21, 1, 'Đồ uống khác'),
(22, 2, 'Sữa tươi'),
(23, 2, 'Sữa đậu nành, sữa từ hạt'),
(24, 2, 'Sữa đặc'),
(25, 2, 'sữa cao yến, yến mạch, ngũ cốc'),
(26, 2, 'Sữa bột, sữa bộ pha sẵn'),
(27, 2, 'Bột ăn dặm'),
(28, 2, 'Sữa chua, Phô mai'),
(33, 3, 'Dầu gội, sữa tắm cho bé'),
(34, 3, ' Phấn thơm, chăm sóc da em bé '),
(35, 3, ' Chăm sóc răng miệng cho bé '),
(36, 3, ' Khăn ướt, khăn sữa cho bé '),
(37, 3, ' Bình sữa cho bé '),
(38, 3, ' Giặt xả cho bé '),
(39, 3, ' Tã bỉm '),
(40, 3, ' Dụng cụ vệ sinh cho bé khác '),
(41, 4, ' Mì ăn liền '),
(42, 4, ' Cháo ăn liền '),
(43, 4, ' Bún, phở, hủ tiếu, miến ăn liền '),
(44, 4, ' Bánh gạo (Tokbokki) '),
(45, 4, ' Canh ăn liền '),
(46, 5, ' Dầu ăn '),
(47, 5, ' Nước tương '),
(48, 5, ' Nước mắm '),
(49, 5, ' Tương ớt, tương cà, tương đen '),
(50, 5, ' Gia vị nêm '),
(51, 5, ' Gia vị tẩm ướp '),
(52, 5, ' Bơ, sốt mayonnaise '),
(53, 5, ' Bơ, sốt mayonnaise '),
(54, 6, ' Snack '),
(55, 6, ' Bánh quy, bánh trứng '),
(56, 6, ' Bánh bông lan '),
(57, 6, ' Bánh xốp, bánh gạo '),
(58, 6, ' Bánh que, bánh quế '),
(59, 6, ' Socola '),
(60, 6, ' Kẹo các loại '),
(61, 6, ' Hạt, trái cây sấy các loại '),
(62, 6, ' Khô ăn liền '),
(63, 7, ' Dầu gội, dầu xả, chăm sóc tóc '),
(64, 7, ' Sữa tắm, xà phòng '),
(65, 7, ' Sữa dưỡng thể '),
(66, 7, ' Nước rửa tay, khẩu trang '),
(67, 7, ' Băng vệ sinh, dung dịch vệ sinh '),
(68, 7, ' Lăn xịt khử mùi '),
(69, 7, ' Khăn giấy, khăn giấy ướt '),
(70, 7, ' Chăm sóc răng miệng '),
(71, 7, ' Chăm sóc da mặt '),
(72, 7, ' Bao cao su, gel bôi trơn '),
(73, 7, ' Chăm sóc cá nhân khác ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL COMMENT 'ID bình luận',
  `id_product` int(11) NOT NULL COMMENT 'ID sản phẩm',
  `id_user` bigint(20) UNSIGNED NOT NULL COMMENT 'ID người dùng',
  `avatar_user` varchar(255) NOT NULL COMMENT 'Hình đại diện',
  `fullname` varchar(255) NOT NULL COMMENT 'Tên đầy đủ',
  `content` text NOT NULL COMMENT 'nội dung'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `day_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL COMMENT 'ID CT đơn hàng',
  `id_order` int(11) NOT NULL COMMENT 'ID đơn hàng',
  `id_product` int(11) NOT NULL COMMENT 'ID sản phẩm',
  `name_product` varchar(255) NOT NULL COMMENT 'tên sản phẩm',
  `product_img` varchar(255) NOT NULL COMMENT 'hình sản phẩm',
  `day_order` date NOT NULL COMMENT 'ngày đặt',
  `quantity` int(11) NOT NULL COMMENT 'số lượng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `idProduct` int(11) NOT NULL,
  `idCatalogProduct` int(11) NOT NULL,
  `nameProduct` varchar(255) NOT NULL,
  `imgProduct` varchar(255) NOT NULL,
  `priceProduct` float NOT NULL,
  `noidungProduct` text NOT NULL,
  `infoProduct` text NOT NULL,
  `buyedProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`idProduct`, `idCatalogProduct`, `nameProduct`, `imgProduct`, `priceProduct`, `noidungProduct`, `infoProduct`, `buyedProduct`) VALUES
(1, 12, 'Thùng 20 lon bia Budweiser 330ml', '12.1.jpg', 265, 'Sản phẩm dành cho người trên 18 tuổi và không dành cho phụ nữ mang thai. Thưởng thức có trách nhiệm, đã uống đồ uống có cồn thì không lái xe!', 'Budweiser là thương hiệu bia Larger đặc biệt được ủ lần đầu tiên vào năm 1876 tại St. Louis, Missouri, Mỹ. Để đảm bảo chất lượng đồng nhất, trong suốt 139 năm tồn tại của mình, các chuyên gia ủ bia của Budweiser luôn chọn các thành phần hoàn toàn tự nhiên có chất lượng tốt nhất bao gồm lúa mạch, hoa bia, gạo, men và nước. Tất cả hoà quyện qua một quá trình ủ bia truyền thống và đặc trưng chỉ có ở Budweiser để cho ra đời một chất bia đồng nhất.', 20),
(2, 12, '6 lon bia Budweiser 330ml', '12.2.jpg', 80, ' Sản phẩm dành cho người trên 18 tuổi và không dành cho phụ nữ mang thai. Thưởng thức có trách nhiệm, đã uống đồ uống có cồn thì không lái xe!', 'Budweiser là thương hiệu bia Larger đặc biệt được ủ lần đầu tiên vào năm 1876 tại St. Louis, Missouri, Mỹ. Để đảm bảo chất lượng đồng nhất, trong suốt 139 năm tồn tại của mình, các chuyên gia ủ bia của Budweiser luôn chọn các thành phần hoàn toàn tự nhiên có chất lượng tốt nhất bao gồm lúa mạch, hoa bia, gạo, men và nước. Tất cả hoà quyện qua một quá trình ủ bia truyền thống và đặc trưng chỉ có ở Budweiser để cho ra đời một chất bia đồng nhất.', 40),
(3, 12, 'Bia Budweiser 330ml', '12.3.jpg', 15, 'Sản phẩm dành cho người trên 18 tuổi và không dành cho phụ nữ mang thai. Thưởng thức có trách nhiệm, đã uống đồ uống có cồn thì không lái xe!', 'Budweiser là thương hiệu bia Larger đặc biệt được ủ lần đầu tiên vào năm 1876 tại St. Louis, Missouri, Mỹ. Để đảm bảo chất lượng đồng nhất, trong suốt 139 năm tồn tại của mình, các chuyên gia ủ bia của Budweiser luôn chọn các thành phần hoàn toàn tự nhiên có chất lượng tốt nhất bao gồm lúa mạch, hoa bia, gạo, men và nước. Tất cả hoà quyện qua một quá trình ủ bia truyền thống và đặc trưng chỉ có ở Budweiser để cho ra đời một chất bia đồng nhất.', 30),
(4, 12, 'Bia Corona Extra 355ml', '12.4.jpg', 35, 'Sản phẩm dành cho người trên 18 tuổi và không dành cho phụ nữ mang thai. Thưởng thức có trách nhiệm, đã uống đồ uống có cồn thì không lái xe!', 'Budweiser là thương hiệu bia Larger đặc biệt được ủ lần đầu tiên vào năm 1876 tại St. Louis, Missouri, Mỹ. Để đảm bảo chất lượng đồng nhất, trong suốt 139 năm tồn tại của mình, các chuyên gia ủ bia của Budweiser luôn chọn các thành phần hoàn toàn tự nhiên có chất lượng tốt nhất bao gồm lúa mạch, hoa bia, gạo, men và nước. Tất cả hoà quyện qua một quá trình ủ bia truyền thống và đặc trưng chỉ có ở Budweiser để cho ra đời một chất bia đồng nhất.', 30),
(5, 13, '6 chai hồng trà C2 500ml', '13.1.jpg', 36, 'Ngon hơn khi uống lạnh', 'Ngon hơn khi uống lạnh', 30),
(6, 13, 'Hồng trà C2 500ml', '13.2.jpg', 6.5, 'Ngon hơn khi uống lạnh', 'Ngon hơn khi uống lạnh', 30),
(7, 13, '6 chai nước uống vận động Aquarius 390ml', '13.3.jpg', 36, 'Ngon hơn khi uống lạnh', 'Ngon hơn khi uống lạnh', 30),
(8, 13, 'Hồng trà C2 vị đào 500ml', '13.4.jpg', 7, 'Ngon hơn khi uống lạnh', 'Ngon hơn khi uống lạnh', 30),
(9, 22, 'Thùng 48 hộp sữa tiệt trùng ít đường Nestlé NutriStrong 180ml', '22.1.jpg', 320, ' Sữa 89% (nước, sữa bột tách kem - skimmed milk powder, dầu bơ từ sữa - milk fat), đường, dầu thực vật, hương giống tự nhiên dùng cho thực phẩm (có chứa sữa - contain milk, có chứa lúa mì - contain wheat), calci phosphat tự nhiên từ sữa (from milk), chất ổn định (471, 466, 460(i), 407), và các vitamin (B3, A, D, B6, B9, B8)', ' Sữa 89% (nước, sữa bột tách kem - skimmed milk powder, dầu bơ từ sữa - milk fat), đường, dầu thực vật, hương giống tự nhiên dùng cho thực phẩm (có chứa sữa - contain milk, có chứa lúa mì - contain wheat), calci phosphat tự nhiên từ sữa (from milk), chất ổn định (471, 466, 460(i), 407), và các vitamin (B3, A, D, B6, B9, B8)', 40),
(10, 22, 'Lốc 3 hộp sữa tươi nguyên kem không đường Inex 200ml', '22.2.jpg', 25, 'Sữa tươi nguyên kem Inex được làm từ nguồn nguyên liệu chọn lọc, trải qua quy trình sản xuất và kiểm soát chất lượng nghiêm ngặt của châu Âu, đảm bảo không chứa chất bảo quản và hormone tăng trưởng.', 'Sữa Inex đem đến vị thơm béo thuần khiết, chứa nhiều dưỡng chất thiết yếu như vitamin A, vitamin D, vitamin nhóm B, đặc biệt canxi và protein giúp phát triển và củng cố hệ xương chắc khoẻ.\r\nCông nghệ UTH hiện đại giúp loại bỏ hoàn toàn các vi khuẩn gây hại mà vẫn giữ trọn vẹn hương vị thơm ngon, nguyên chất mà bạn khó tìm được ở các loại sữa tươi không đường khác.', 40),
(11, 22, 'Sữa dinh dưỡng có đường Vinamilk Happy Star bịch 220ml', '22.3.jpg', 5.2, 'Sữa dinh dưỡng Vinamilk Star có đường với hương vị sữa thơm ngon, béo ngậy, dễ uống. Trong sữa có bổ sung nhiều loại vitamin và khoáng chất tốt cho cơ thể, đảm bảo cung cấp dưỡng chất đầy đủ mỗi ngày.', 'Sữa (93,3%) (nước, sữa bột, chất béo sữa), đường tinh luyện (3,8%), dầu thực vật, chất ổn định (471,407,412), hương liệu tổng hợp dùng cho thực phẩm, vitamin (A, D3)', 40),
(12, 22, 'Thùng 48 bịch sữa dinh dưỡng có đường Vinamilk Happy Star 220ml', '22.4.jpg', 245, 'Sữa dinh dưỡng Vinamilk Star có đường với hương vị sữa thơm ngon, béo ngậy, dễ uống. Trong sữa có bổ sung nhiều loại vitamin và khoáng chất tốt cho cơ thể, đảm bảo cung cấp dưỡng chất đầy đủ mỗi ngày.', 'Sữa (93,3%) (nước, sữa bột, chất béo sữa), đường tinh luyện (3,8%), dầu thực vật, chất ổn định (471,407,412), hương liệu tổng hợp dùng cho thực phẩm, vitamin (A, D3)', 40),
(13, 23, 'Thùng 48 hộp sữa đậu nành collagen Soy Secretz 180ml', '23.1.jpg', 395, 'Sữa đậu nành, đường, dầu đậu nành, Collagen thực vật,...', 'Sữa đậu nành là loại sữa hoàn toàn không chứa cholesterol. Các nhà khoa học đã nghiên cứu và chứng minh sữa đậu nành có công dụng tốt trong việc giúp những người có lượng cholesterol cao, người có tiền sử gia đình mắc bệnh tim mạch vành giảm nguy cơ mắc bệnh tim mạch hiệu quả.', 20),
(14, 23, 'Thùng 48 hộp sữa đậu nành mè đen Soy Secretz 180ml', '23.2.jpg', 395, 'Sữa đậu nành Soy Secretz là sự kết hợp độc đáo giữa đậu nành và mè đen, giàu đạm đậu nành tự nhiên và giàu isoflavones, giúp cân bằng nội tiết tố estrogen và chống oxy hóa, cho bạn cơ thể khỏe khoắn và làn da tươi tắn rạng ngời.', 'Sữa đậu nành, mè đen, đường, canxi,...', 20),
(15, 23, 'Thùng 48 hộp sữa đậu nành bắp ngọt Soy Secretz 180ml', '23.3.jpg', 395, 'Sữa đậu nành Soy Secretz là sự kết hợp độc đáo giữa đậu nành và bắp ngọt, giàu đạm đậu nành tự nhiên và giàu isoflavones, giúp cân bằng nội tiết tố estrogen và chống oxy hóa, cho bạn cơ thể khỏe khoắn và làn da tươi tắn rạng ngời.', ' Sữa đậu nành, đường, sữa bắp, dầu đậu nành,...', 20),
(16, 23, 'Thùng 48 hộp sữa đậu nành gạo mầm Soy Secretz 180ml', '23.4.jpg', 395, 'Thùng 48 hộp sữa đậu nành gạo mầm Soy Secretz 180ml', 'Sữa đậu nành, gạo mầm, đường, dầu đậu nành,...', 20),
(17, 33, 'Tắm gội toàn thân cho bé Purité bơ đậu mỡ 500ml', '33.1.jpg', 119, '97% thành phần thiên nhiên (hạt đậu mỡ, hạt macca, táo...)', '97% thành phần thiên nhiên (hạt đậu mỡ, hạt macca, táo...)', 30),
(18, 33, 'Tắm gội toàn thân cho bé Purité Baby cúc la mã 500ml', '33.2.jpg', 119, 'Sữa tắm gội thiên nhiên Purité Baby Cúc La Mã với các thành phần thiên nhiên thuần khiết và giàu dưỡng chất như: cúc la mã, hạt macca, táo..., giúp làm sạch nhẹ nhàng, giữ ẩm và nuôi dưỡng làn da non nớt của và mái tóc mỏng manh của bé. ', ' 97% thành phần thiên nhiên (cúc La Mã, hạt macca, táo).  ', 20),
(19, 33, 'Tắm gội toàn thân cho bé L’Affair dịu êm và thoải mái 500ml\r\n', '23.3.jpg', 79, 'Làm ướt tóc và da bé, lấy một lượng dầu tắm gội vừa đủ ra tay, tạo bọt rồi thoa đều lên tóc và da bé, mát xa nhẹ nhàng sau đó xả lại với nước', 'Có chiết xuất thảo mộc, tinh dầu hạt Jojoba, Pro-Vitamin B5', 20),
(20, 33, 'Sữa tắm cho bé Johnson\'s Baby chứa sữa và gạo 1lít', '33.4.jpg', 199, 'Tinh chất Protein trong sữa, dưỡng chất chiết xuất gạo, Vitamin thiết yếu', 'Cho một ít sản phẩm ra tay, tạo bọt và thoa nhẹ nhàng lên da, tránh đưa lên mắt, sau đó xả lại bằng nước sạch', 20),
(21, 34, '\r\nDầu massage cho bé Johnson\'s 200ml', '34.1.jpg', 89, 'Xoa bóp nhẹ nhàng trên da trước khi tắm để làm ấm bé, hoặc ngay sau khi tắm để giữ ấm cho bé', 'Để xa tầm tay trẻ em. Đề phòng uống hoặc hít phải. Trong trường hợp uống hoặc hít phải, hỏi ý kiên bác sĩ ngay', 30),
(22, 34, 'Sữa dưỡng ẩm cho bé Johnson\'s mềm mịn như bông 200ml', '34.2.jpg', 79, 'Lấy một lượng vừa đủ, thoa đều lên mặt và toàn thân', 'Giữ ngoài tầm tay trẻ em, tránh tiếp xúc với mắt', 20),
(23, 34, 'Phấn rôm sẩy Pigeon Baby Powder Prickly Heat 200g', '34.3.jpg', 58, 'Cho phấn vào lòng bàn tay, thoa đều lên cổ, nách, ngực, lưng hoặc bất kì vùng da nào của bé có triệu chứng mẩn đỏ do rôm sẩy', 'Tránh để rơi vào mắt. Chỉ dùng ngoài da. Ngưng sử dụng nếu bị kích ứng. Tránh để trẻ hít phấn vào đề phòng ngạt thở. Tránh xa tầm với của trẻ em', 30),
(24, 34, '\r\nKem dưỡng da trẻ em Babi Mild Pure Natural 50g \r\n', '34.4.jpg', 53, 'Cho kem vào lòng bàn tay, thoa đều khắp mặt và toàn thân bé', 'Giữ ngoài tầm tay trẻ em, tránh tiếp xúc với mắt', 30),
(25, 41, 'Mì bò sợi phở 3 Miền gói 65g 1Mì bò sợi phở 3 Miền gói 65g 2Mì bò sợi phở 3 Miền gói 65g 3\r\nMì bò sợi phở 3 Miền gói 65g', '41.1.jpg', 3.2, ' Cho vắt mì và gói gia vị vào tô. Chế khoảng 350 ml nước sôi vào tô mì. Đậy kín nắp và chờ trong 3 phút. Mở nắp, trộn đều và bắt đầu thưởng thức,', ' VẮT MÌ - Bột mì (75,0%), shortening, phẩm màu (curcumin (E100(i)).\r\nGÓI GIA VỊ - Bột thịt bò (12 g/kg), dầu cọ, muối, đường, bột tỏi, bột ớt, hành lá sấy, phẩm màu (caramen nhóm IV (xử lý amoni sulfit)(E150d)), chất điều vị (monosodium L-glutamate, disodium 5\'-inosinate, disodium 5\'-guanylate)', 23),
(26, 41, 'Mì 3 Miền tôm hùm gói 65g', '41.2.jpg', 3, 'Cho vắt mì và các gói gia vị vào tô. Chế khoảng 350ml nước sôi vào tô mì. Đậy nắp kín và chờ trong 3 phút. Mở nắp, trộn đều và bắt đầu thưởng thức.', 'VẮT MÌ - Bột mì (75,0%), shortening, phẩm màu (curcumin (E100 (i)).\r\nGIA VỊ - Bột tôm hùm (3,0g/kg), dầu cọ, muối, đường, bột tỏi, bột ớt, hành lá sấy, phẩm màu (caramen nhóm IV (xử lý amoni sulfit)(E150d), chất điều vị (monosodium L-Glutamate, disodium 5\'-inosinate, disodium 5\'-guanylate).', 23),
(27, 41, 'Mì 3 Miền tôm chua cay gói 65g', '41.3.jpg', 3, 'Cho vắt mì và các gói gia vị vào tô. Chế khoảng 350ml nước sôi vào tô mì. Đậy nắp kín và chờ trong 3 phút. Mở nắp, trộn đều và bắt đầu thưởng thức.', 'VẮT MÌ - Bột mì (75,0%), shortening, phẩm màu (curcumin (E100 (i)).\r\nGIA VỊ - Bột tôm hùm (3,0g/kg), dầu cọ, muối, đường, bột tỏi, bột ớt, hành lá sấy, phẩm màu (caramen nhóm IV (xử lý amoni sulfit)(E150d), chất điều vị (monosodium L-Glutamate, disodium 5\'-inosinate, disodium 5\'-guanylate).', 23),
(28, 41, 'Thùng 30 gói mì Hảo Hảo tôm chua cay 75g', '41.4.jpg', 96, 'Cho vắt mì và các gói gia vị vào tô. Chế khoảng 350ml nước sôi vào tô mì. Đậy nắp kín và chờ trong 3 phút. Mở nắp, trộn đều và bắt đầu thưởng thức.', 'VẮT MÌ - Bột mì (75,0%), shortening, phẩm màu (curcumin (E100 (i)).\r\nGIA VỊ - Bột tôm hùm (3,0g/kg), dầu cọ, muối, đường, bột tỏi, bột ớt, hành lá sấy, phẩm màu (caramen nhóm IV (xử lý amoni sulfit)(E150d), chất điều vị (monosodium L-Glutamate, disodium 5\'-inosinate, disodium 5\'-guanylate).', 23),
(29, 42, 'Cháo tươi thịt thăn rau củ SG Food gói 270g', '42.1.jpg', 8, ' Hâm nóng bằng lò vi ba - từ 1 đến 2 phút. Hâm nóng nguyên bao bì - từ 5 đến 7 phút. Nấu trên bếp - từ 2 đến 3 phút', 'Nước hầm xương cá hồi, gạo 7.7%, cà rốt 3.7%, thịt heo 2.2%, đậu que 1.8%, dầu thực vật, đậu xanh 0.7%, hạt nêm, đường tinh luyện, chất điều vị E621, hành, tỏi, muối i-ốt', 34),
(30, 42, 'Cháo tươi SG Food tôm thịt rau ngót gói 270g', '42.2.jpg', 8, ' Hâm nóng bằng lò vi ba - từ 1 đến 2 phút. Hâm nóng nguyên bao bì - từ 5 đến 7 phút. Nấu trên bếp - từ 2 đến 3 phút', 'Nước hầm xương cá hồi, gạo 7.7%, cà rốt 3.7%, thịt heo 2.2%, đậu que 1.8%, dầu thực vật, đậu xanh 0.7%, hạt nêm, đường tinh luyện, chất điều vị E621, hành, tỏi, muối i-ốt', 34),
(31, 42, 'Cháo tươi gà cà rốt SG Food gói 270g', '42.3.jpg', 8, ' Hâm nóng bằng lò vi ba - từ 1 đến 2 phút. Hâm nóng nguyên bao bì - từ 5 đến 7 phút. Nấu trên bếp - từ 2 đến 3 phút', 'Nước hầm xương cá hồi, gạo 7.7%, cà rốt 3.7%, thịt heo 2.2%, đậu que 1.8%, dầu thực vật, đậu xanh 0.7%, hạt nêm, đường tinh luyện, chất điều vị E621, hành, tỏi, muối i-ốt', 34),
(32, 42, 'Cháo tươi SG Food cá đậu xanh gói 270g', '42.4.jpg', 8, ' Hâm nóng bằng lò vi ba - từ 1 đến 2 phút. Hâm nóng nguyên bao bì - từ 5 đến 7 phút. Nấu trên bếp - từ 2 đến 3 phút', 'Nước hầm xương cá hồi, gạo 7.7%, cà rốt 3.7%, thịt heo 2.2%, đậu que 1.8%, dầu thực vật, đậu xanh 0.7%, hạt nêm, đường tinh luyện, chất điều vị E621, hành, tỏi, muối i-ốt', 34),
(33, 46, 'Dầu ăn cao cấp Tường An Gold bình 2 lít 1Dầu ăn cao cấp Tường An Gold bình 2 lít 2Dầu ăn cao cấp Tường An Gold bình 2 lít 3Dầu ăn cao cấp Tường An Gold bình 2 lít 4\r\nDầu ăn cao cấp Tường An Gold bình 2 lít', '46.1.jpg', 80, 'Giàu Vitamin E tự nhiên, là chất chống oxy hóa bảo vệ cơ thể; giàu Omega 3, 6, 9 tốt cho hệ tim mạch; thích hợp chiên rán ở nhiệt độ cao.', 'Dầu Olein, dầu hạt cải, dầu hướng dương tinh luyện, Vitamin A.', 23),
(34, 46, 'Dầu olive Extra Virgin Naturel chai 250ml', '46.2.jpg', 99, ' Nơi thoáng mát, nên dùng trong 1 tháng sau khi mở nắp', '100% dầu olive nguyên chất', 23),
(35, 46, 'Dầu olive Extra Virgin Naturel chai 500ml', '46.3.jpg', 179, ' Nơi thoáng mát, nên dùng trong 1 tháng sau khi mở nắp', ' Chiên, xào, làm bánh, trộn salad, làm nước sốt, mayonnaise', 23),
(36, 46, 'Dầu đậu nành Happi Soya can 5 lít', '46.4.jpg', 199, '100% dầu đậu nành nguyên chất tinh luyện, vitamin A.', 'Nơi thoáng mát, nên dùng trong 1 tháng sau khi mở nắp', 23),
(37, 47, 'Nước tương đậu nành thượng hạng Lee Kum Kee chai 500ml', '47.1.jpg', 47, 'Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy kín nắp sau khi sử dụng.', 'Nước, đường, muối, đậu nành (10%), bột mỳ, chất điều vị (monosodium L-inosinate/621, disodium 5\'-inosinate/631, disodium 5\'-guanylate/627), chiết xuất gia vị (nước, muối, gia vị), màu thực phẩm tự nhiên (caramel I-Plain/150a), chất bảo quản (Potassium sorbate/202)', 34),
(38, 47, 'Nước tương đậu nành đậm đặc Maggi chai 700ml', '47.2.jpg', 30, 'Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy kín nắp sau khi sử dụng.', ' Nước, muối, chiết xuất đậu nành lên men tự nhiên 85g (đậu nành - soya, lúa mì - wheat, muối), đường, chất điều vị 621, màu tổng hợp 150c, chất điều chỉnh độ chua 260, chất ổn định 415, chất bảo quản 202, chất điều vị (631, 627), hương nước tương tổng hợp và kali iodid.', 23),
(39, 47, 'Nước tương đậu nành Maggi chai 700ml', '47.3.jpg', 30, 'Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy kín nắp sau khi sử dụng.', 'Nước, muối, chiết xuất đậu nành lên men tự nhiên 70g (đậu nành - soya, lúa mình - wheat, muối), đường, chất điều vị 621, màu tổng hợp 150c, axit amin L-alanine, chất điều chỉnh độ chua 260, chất ổn định 415, chất bảo quản 202, chất điều vị (631, 627), hương nước tương tổng hợp, chất tạo ngọt tổng hợp 950 và kali iodid.', 24),
(40, 47, 'Nước tương đậu nành Lee Kum Kee chai 500ml', '47.4.jpg', 26, 'Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy kín nắp sau khi sử dụng.', 'Nước, đường, nước tương (12%) (nước, đậu nành, muối, bột mì), chất điều vị (monosodium L-glutamate/621, disodium 5\'-inosinate/631, disodium 5\'-guanylate/627), muối, màu thực phẩm tự nhiên (caramel I-plain/150a), chất điều chỉnh độ axit (lactic acid/270), chất điều chỉnh vị tổng hợp từ cây cần núi, chất bảo quản (potassium Sorbate/202)', 26),
(45, 54, 'Snack hải sản tẩm gia vị cực cay Bento gói 20g', '54.1.jpg', 26, 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 'Mực ống, thịt cá xay, bột mì, tinh bột sắn, gia vị thảo mộc, gia vị hỗn hợp, đường, bột mực ống, muối', 34),
(46, 54, 'Snack khoai tây vị tự nhiên Lay\'s Stax lon 105g', '54.2.jpg', 25, ' Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', ' Khoai tây 52%, dầu cám gạo 32%, tinh bột mì 7%, gia vị tự nhiên 5%, tinh bột biến tính 4%, khí đóng gói E941', 34),
(47, 54, 'Snack khoai tây vị mực cay Lay\'s Stax lon 105g', '54.3.jpg', 25, 'Khoai tây, dầu cám gạo, tinh bột mì, bột gia vị mực cay, hương tổng hợp, màu tự nhiên, bột đậu nành, bột cá, màu tổng hợp, chất điều vị, chất chống đông vón, chất làm dày, tinh bột biến tính, khí đóng gói E941', 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 45),
(48, 54, 'Snack khoai tây vị tôm hùm cay Lay\'s Stax lon 105g', '54.4.jpg', 25, 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', ' Khoai tây 52%, dầu cám gạo 32%, tinh bột mì 7%, bột gia vị tôm hùm nướng ngũ vị 5%(chất điều vị(E621, E635), chất tạo ngọt E951, màu tự nhiên E160c, chất điều chỉnh độ chua E330, chất chống đông vón E551, chất ổn định E1420, chất nhũ hóa(E322i, E471), hương tổng hợp), tinh bột biến tính 4%, khí đóng gói E941', 45),
(49, 55, 'Bánh trứng Tipo gói 115g', '55.1.jpg', 14.5, 'Trứng, bột mì, đường, shortening, sữa bột, nước, chất nhũ hoá, muối, chất tạo xốp', 'Để nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 45),
(50, 55, 'Bánh trứng kem sầu riêng Tipo gói 220g', '55.2.jpg', 41, 'Trứng 25%, đường, bột mì, sữa bột, bột sầu riêng,...', 'Để nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 45),
(51, 55, 'Bánh bơ trứng Richy gói 270g', '55.3.jpg', 37, 'Để nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 'Bột mì, đường kính, bơ, trứng, bột sữa whey, mạch nha, muối ăn, hương vani tổng hợp, chất nhũ hoá, màu thực phẩm', 56),
(52, 55, 'Bánh trứng Tipo gói 220g', '55.4.jpg', 33, ' Trứng, bột mì, đường, shortening, sữa bột, nước, chất nhũ hoa, muối, chất tạo xốp', 'Để nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 67),
(53, 63, 'Dầu xả ngăn rụng tóc Tsubaki 500ml', '63.1.jpg', 109, ' Bổ sung Collagen, Clycerin, hợp chất hoa trà lên men, chiết xuất tinh dầu hoa trà Nhật Bản', ' Sau khi gội đầu, lấy một lượng dầu xả vừa đủ vào lòng bàn tay, dùng đầu ngón tay xoa đều dầu xả lên tóc từ gốc đến ngọn và mát-xa nhẹ nhàng da đầu. Sau đó xả sạch với nước', 45),
(54, 63, 'Dầu gội ngăn rụng tóc Tsubaki 500ml', '63.2.jpg', 109, 'Bổ sung Collagen, Clycerin, hợp chất hoa trà lên men, chiết xuất tinh dầu hoa trà Nhật Bản', ' Sau khi gội đầu, lấy một lượng dầu xả vừa đủ vào lòng bàn tay, dùng đầu ngón tay xoa đều dầu xả lên tóc từ gốc đến ngọn và mát-xa nhẹ nhàng da đầu. Sau đó xả sạch với nước', 45),
(55, 63, 'Kem xả nước hoa Elastine Kiss The Rose óng mượt chắc khoẻ 170ml', '63.3.jpg', 30, 'Bổ sung Collagen, Clycerin, hợp chất hoa trà lên men, chiết xuất tinh dầu hoa trà Nhật Bản', ' Sau khi gội đầu, lấy một lượng dầu xả vừa đủ vào lòng bàn tay, dùng đầu ngón tay xoa đều dầu xả lên tóc từ gốc đến ngọn và mát-xa nhẹ nhàng da đầu. Sau đó xả sạch với nước', 56),
(56, 63, 'Dầu gội nước hoa Elastine Love Me óng mượt chắc khoẻ 170ml', '63.4.jpg', 30, 'Bổ sung Collagen, Clycerin, hợp chất hoa trà lên men, chiết xuất tinh dầu hoa trà Nhật Bản', ' Sau khi gội đầu, lấy một lượng dầu xả vừa đủ vào lòng bàn tay, dùng đầu ngón tay xoa đều dầu xả lên tóc từ gốc đến ngọn và mát-xa nhẹ nhàng da đầu. Sau đó xả sạch với nước', 67),
(57, 64, 'Gel tắm sáng da Fresh Organic mận Kakadu 500g', '64.1.jpg', 56, ' Có chứa mật ong Mannuka giàu amino acids, protein và khoáng chất giúp dưỡng ẩm cho da, giảm mất nước và tăng cường chức năng bảo vệ da hiệu quả', 'Làm ướt da, cho sữa tắm lên da hoặc bông tắm ướt để tạo bọt, xoa đều lên da sau đó tắm sạch với nước', 43),
(58, 64, 'Gel tắm cho da nhạy cảm Fresh Organic bơ hạt mỡ và dưỡng chất 500g', '64.2.jpg', 56, ' Có chứa mật ong Mannuka giàu amino acids, protein và khoáng chất giúp dưỡng ẩm cho da, giảm mất nước và tăng cường chức năng bảo vệ da hiệu quả', 'Làm ướt da, cho sữa tắm lên da hoặc bông tắm ướt để tạo bọt, xoa đều lên da sau đó tắm sạch với nước', 34),
(59, 64, 'Gel tắm dưỡng ẩm Fresh Organic mật ong Manuka 500g', '64.3.jpg', 56, ' Có chứa mật ong Mannuka giàu amino acids, protein và khoáng chất giúp dưỡng ẩm cho da, giảm mất nước và tăng cường chức năng bảo vệ da hiệu quả', 'Làm ướt da, cho sữa tắm lên da hoặc bông tắm ướt để tạo bọt, xoa đều lên da sau đó tắm sạch với nước', 34),
(60, 64, 'Sữa tắm dưỡng ẩm Senka hương linh lan & hoa nhài 500ml', '64.4.jpg', 105, ' Có chứa mật ong Mannuka giàu amino acids, protein và khoáng chất giúp dưỡng ẩm cho da, giảm mất nước và tăng cường chức năng bảo vệ da hiệu quả', 'Làm ướt da, cho sữa tắm lên da hoặc bông tắm ướt để tạo bọt, xoa đều lên da sau đó tắm sạch với nước', 45),
(61, 14, 'Nước khoáng Vĩnh Hảo 5 lít', '14.1.jpg', 20, 'Nước khoáng Vĩnh Hảo được sản xuất từ nguồn nước khoáng thiên nhiên quý hiếm đã được các nhà khoa học Pháp công bố từ năm 1978. Với lượng khoáng cần thiết cho cơ thể, nước khoáng Vĩnh Hảo cung cấp khoáng chất tự nhiên có sẵn trong nước giúp cơ thể bạn khoẻ khoắn và tươi mới', 'Nước khoáng', 43),
(62, 14, 'Thùng 4 chai Nước khoáng Vĩnh Hảo 5 lí', '14.2.jpg', 56, 'Nước khoáng Vĩnh Hảo được sản xuất từ nguồn nước khoáng thiên nhiên quý hiếm đã được các nhà khoa học Pháp công bố từ năm 1978. Với lượng khoáng cần thiết cho cơ thể, nước khoáng Vĩnh Hảo cung cấp khoáng chất tự nhiên có sẵn trong nước giúp cơ thể bạn khoẻ khoắn và tươi mới', 'Nước khoáng', 34),
(63, 14, 'Nước khoáng Vivant 500ml', '14.3.jpg', 5.5, 'Nước khoáng Vĩnh Hảo được sản xuất từ nguồn nước khoáng thiên nhiên quý hiếm đã được các nhà khoa học Pháp công bố từ năm 1978. Với lượng khoáng cần thiết cho cơ thể, nước khoáng Vĩnh Hảo cung cấp khoáng chất tự nhiên có sẵn trong nước giúp cơ thể bạn khoẻ khoắn và tươi mới', 'Nước khoáng', 34),
(64, 14, '6 chai Nước khoáng Vivant 500ml', '14.4.jpg', 29, 'Nước khoáng Vĩnh Hảo được sản xuất từ nguồn nước khoáng thiên nhiên quý hiếm đã được các nhà khoa học Pháp công bố từ năm 1978. Với lượng khoáng cần thiết cho cơ thể, nước khoáng Vĩnh Hảo cung cấp khoáng chất tự nhiên có sẵn trong nước giúp cơ thể bạn khoẻ khoắn và tươi mới', 'Nước khoáng', 45),
(65, 15, 'Nước ép đào & táo Fontana 1 lít', '15.1.jpg', 42, 'Đào xay nhuyễn & nước ép táo (tối thiểu 50%), đường, axit citric, hương liệu', ' Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh và sử dụng trong vòng 3 ngày sau khi mở nắp', 23),
(66, 15, 'Nước ép táo Fontana 1 lít', '15.2.jpg', 42, 'Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh và sử dụng trong vòng 3 ngày sau khi mở nắp', 'Nước ép táo cô đặc', 34),
(67, 15, 'Nước ép cam Fontana 1 lít', '15.3.jpg\r\n', 42, 'Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh và sử dụng trong vòng 3 ngày sau khi mở nắp', '42.000', 34),
(68, 15, 'Thùng 12 hộp nước dừa nguyên chất Cocoxim Organic 330ml', '15.4.jpg', 300, 'Lắc đều trước khi sử dụng. Ngon hơn khi uống lạnh. Bảo quản lạnh và sử dụng trong vòng 3 ngày sau khi mở nắp', 'Nước ép cam nguyên chất', 34),
(69, 24, 'Kem đặc có đường Ngôi sao Phương Nam xanh lá hộp 1.284kg', '24.1.jpg', 60, 'Pha cà phê, xay sinh tố, làm sữa chua, bánh flan...', 'Đường, nước, dầu thực vật, sữa bột , Whey bột,...', 23),
(70, 24, 'Kem đặc có đường Nuti đỏ hộp 1.284kg', '24.2.jpg', 55, 'Pha cà phê, xay sinh tố, làm sữa chua, bánh flan...', 'Đường, nước, dầu thực vật, sữa bột , Whey bột,...', 34),
(71, 24, 'Kem đặc có đường Nuti xanh lá hộp 1.284kg', '24.3.jpg\r\n', 53, 'Pha cà phê, xay sinh tố, làm sữa chua, bánh flan...', 'Đường, nước, dầu thực vật, sữa bột , Whey bột,...', 34),
(72, 24, 'Kem đặc có đường DeliPure lon 1kg', '24.4.jpg', 36, ' Pha cà phê, xay sinh tố, làm sữa chua, bánh flan...', 'Đường, nước, dầu cọ, vitamin (A, D3, B1),...', 34),
(73, 25, 'Lốc 3 hộp thức uống ngũ cốc Milo Bữa sáng cân bằng 195ml', '15.1.jpg', 24, 'Bữa sáng đóng vai trò quan trọng trong việc tăng cường hoạt động thể chất, tinh thần cũng như khả năng học hỏi của trẻ. Nhiều nghiên cứu chỉ ra rằng trẻ thường xuyên ăn sáng có khả năng học hỏi tốt hơn so với trẻ không ăn sáng.', 'Nước, sữa bột tách kem, Protomalt, đường, dầu thực vật,...', 23),
(74, 25, 'Thùng 48 hộp ca cao nguyên chất Vita Dairy 180ml', '15.2.jpg', 400, 'Bữa sáng đóng vai trò quan trọng trong việc tăng cường hoạt động thể chất, tinh thần cũng như khả năng học hỏi của trẻ. Nhiều nghiên cứu chỉ ra rằng trẻ thường xuyên ăn sáng có khả năng học hỏi tốt hơn so với trẻ không ăn sáng.', 'Nước, đường, sữa bột béo tan nhanh, bột kem không sữa, bột ca cao 2%, chiết xuất mầm lúa mạch, muối, chất ổn định (INS 466), chất nhũ hoá (INS 471), hương ca cao tổng hợp', 34),
(77, 35, 'Bàn chải cho bé 5 - 12 tuổi Dental B Nano Silver lông siêu mềm mảnh', '35.1.jpg', 16, ' Chải răng theo hướng dẫn của nha sĩ. Rửa sạch bàn chải sau khi sử dụng. Cắm thẳng và giữ nơi khô ráo', 'Công nghệ Nano Silver ngăn ngừa đến 99,9% và tiêu diệt 650 vi khuẩn gây hại', 34),
(78, 35, 'Bàn chải cho bé trên 5 tuổi Formula Junior lông mềm mảnh', '35.2.jpg', 19, 'Chải răng theo hướng dẫn của nha sĩ. Rửa sạch bàn chải sau khi sử dụng. Cắm thẳng và giữ nơi khô ráo', 'Chiều dài tay cầm 162 ± 0.2mm, chiều dài lông chải 11.8 ± 0.2mm, đường kính lông bàn chải 0.15 ± 0 .01mm', 34),
(79, 35, 'Kem đánh răng cho bé trên 3 tuổi Oral-Clean Mild Mint 75ml', '35.3.jpg', 55, 'Chải răng theo hướng dẫn của nha sĩ. Rửa sạch bàn chải sau khi sử dụng. Cắm thẳng và giữ nơi khô ráo', 'Chiều dài tay cầm 162 ± 0.2mm, chiều dài lông chải 11.8 ± 0.2mm, đường kính lông bàn chải 0.15 ± 0 .01mm', 34),
(80, 35, 'Kem đánh răng cho bé trên 3 tuổi Oral-Clean Tutti Frutti 75ml', '35.4.jpg', 55, 'Chải răng theo hướng dẫn của nha sĩ. Rửa sạch bàn chải sau khi sử dụng. Cắm thẳng và giữ nơi khô ráo', 'Chiều dài tay cầm 162 ± 0.2mm, chiều dài lông chải 11.8 ± 0.2mm, đường kính lông bàn chải 0.15 ± 0 .01mm', 24),
(81, 36, 'Khăn ướt em bé Bebesup Light hương tự nhiên gói 20 miếng', '36.1.jpg', 12, 'Bảo quản nơi khô mát, tránh ánh nắng trực tiếp và những nơi có nhiệt độ cao', ' Water, Glycerin, Sodium Benzoate, Ethylhexylglycerin, Disodium EDTA, Allantoin, Citric Acid, Lauryl Betaine,Aloe Barbadensis Leaf Extract Camellia Sinensis Leaf Extract, chiết xuất từ trái Cucumis Sativus (dưa chuột), chiết xuất Brassica Oleracea Italica (bông cải xanh), Lavandula Angustifolia (dầu hoa oải hương), Butylene Glycol, Sodium Chloride, 1,2-Hexanediol', 34),
(82, 36, 'Khăn ướt em bé Daily Soft không mùi gói 100 miếng', '36.2.jpg', 27, 'Không bỏ vào bồn cầu. Không dùng để lau vết thương. Để xa tầm tay trẻ em. Khi lau tránh tiếp xúc vùng mắt. Khi sử dụng khăn để lau quần áo, túi phải cẩn thận do vật dụng có thể đổi màu', ' Nước khử ion, Cetylpyridinium Chloride 4-Hydroxyacetophenone, Citric Acid, hoa oải hương, lá trà, hương thảo, chiết xuất chanh', 34),
(83, 36, 'Khăn ướt em bé Nuna không mùi gói 30 miếng', '36.3.jpg', 13, ' Bảo quản nơi khô mát, tránh ánh nắng trực tiếp và những nơi có nhiệt độ cao', 'Vải không dệt, nước tinh khiết R.O, dung dịch lô hội, Quaternary Ammonium Salts, Citric Acid', 34),
(84, 36, 'Khăn ướt em bé Carefor không mùi gói 100 miếng', '36.4.jpg', 28, 'Bảo quản nơi khô mát, tránh ánh nắng trực tiếp và những nơi có nhiệt độ cao', 'Sản phẩm không tan trong nước, xin đừng vứt vào toilet', 24),
(85, 43, 'Phở bò Chinsu hộp 74g (có gói xốt nước cốt bò)', '43.1.jpg', 10, ' Để nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời. Nên pha chế ngay sau khi mở bao bì. Tránh để gần hóa chất hoặc sản phẩm có mùi mạnh', ' Mở nắp tô, lấy vắt phở và các gói gia vị ra khỏi tô. Xé gói vắt phở và các gói gia vị cho vào tô. Đổ vào 400 ml nước sôi. Đậy nắp và đợi trong 3 phút. Trộn đều và thưởng thức.', 56),
(86, 43, 'Thùng 12 hộp phở bò Chinsu 74g (có gói xốt nước cốt bò)', '43.2.jpg', 120, 'Để nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời. Nên pha chế ngay sau khi mở bao bì. Tránh để gần hóa chất hoặc sản phẩm có mùi mạnh', ' Mở nắp tô, xé và cho vắt phở, các gói gia vị và gói thịt (đã được làm chín) vào tô. Đổ vào 400 ml nước sôi. Đậy nắp và đợi trong 5 phút. Trộn đều và thưởng thức.', 23),
(87, 43, 'Hủ tiếu Nam Vang Vifon gói 65g', '43.3.jpg', 6.7, 'Để nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 'Cho vắt hủ tiếu và các gói gia vị vào tô. Chế nước sôi vừa đủ (khoảng 400ml). Đậy kín tô trong 3 phút. Mở nắp, trộn đều và thưởng thức.', 34),
(88, 43, 'Phở gà Vifon gói 65g', '43.4.jpg', 5.9, 'Để nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', ' VẮT HỦ TIẾU - Tinh bột gạo (75%), chất ổn định (1404, 412), đường tinh luyện, muối ăn, chất điều vị (mononatri glutamat), chất tạo ngọt tổng hợp (acesulfam kali, aspartam).\r\nGIA VỊ - Dầu cọ tinh luyện, muối ăn, chất điều vị (mononatri glutamat, dinatri 5\'-guanylat, dinatri 5\'-inosinat), hành tím phi, giả thịt (bột đậu nành đã khử béo), rau sấy (hành lá, hẹ), bột sườn heo hầm (0.5%), đường tinh luyện, mỡ heo, tỏi phi, bột tôm, tỏi chiết xuất, ớt, tiêu, chất chống đông vón (551), chất tạo ngọt tổng hợp (acesulfam kali, aspartam), phẩm màu tự nhiên (caroten tự nhiên (chiết xuất từ thực vật)), cần tây chiết xuất, hương nước tương tổng hợp.', 34),
(89, 44, 'Bánh gạo topokki và miến Otaste sốt jajang tô 128g', '44.1.jpg', 50, ' Để nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời. Nên pha chế ngay sau khi mở bao bì. Tránh để gần hóa chất hoặc sản phẩm có mùi mạnh', 'NẤU BẰNG LÒ VI SÓNG - Cho 90ml nước sôi vào tô. Lần lượt cho miến, bánh gạo và sốt gia vị vào hộp. Đậy hé nắp lại và cho vào lò vi sóng nấu trong 4 phút, lấy ra trộn đều rồi thưởng thức.\r\nNẤU BẰNG CHẢO - Cho vào chảo 160ml nước sôi rồi lần lượt đặt miến, bánh gạo vào nấu trong 1 phút 30 giây. Sau khi miếng và bánh gạo mềm, cho gói sốt gia vị vào nấu thêm 2 phút rồi thưởng thức.', 56),
(90, 44, 'Bánh gạo topokki và miến Otaste sốt cay tô 128g', '44.2.jpg', 50, 'Để nơi khô ráo, thoáng mát, tránh ánh nắng mặt trời. Nên pha chế ngay sau khi mở bao bì. Tránh để gần hóa chất hoặc sản phẩm có mùi mạnh', 'NẤU BẰNG LÒ VI SÓNG - Cho 90ml nước sôi vào tô. Lần lượt cho miến, bánh gạo và sốt gia vị vào hộp. Đậy hé nắp lại và cho vào lò vi sóng nấu trong 4 phút, lấy ra trộn đều rồi thưởng thức.\r\nNẤU BẰNG CHẢO - Cho vào chảo 160ml nước sôi rồi lần lượt đặt miến, bánh gạo vào nấu trong 1 phút 30 giây. Sau khi miếng và bánh gạo mềm, cho gói sốt gia vị vào nấu thêm 2 phút rồi thưởng thức.', 23),
(91, 44, 'Bánh gạo tokbokki Yopokki siêu cay ly 120g', '44.3.jpg', 42.5, 'Để nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 'NẤU BẰNG LÒ VI SÓNG - Cho 90ml nước sôi vào tô. Lần lượt cho miến, bánh gạo và sốt gia vị vào hộp. Đậy hé nắp lại và cho vào lò vi sóng nấu trong 4 phút, lấy ra trộn đều rồi thưởng thức.\r\nNẤU BẰNG CHẢO - Cho vào chảo 160ml nước sôi rồi lần lượt đặt miến, bánh gạo vào nấu trong 1 phút 30 giây. Sau khi miếng và bánh gạo mềm, cho gói sốt gia vị vào nấu thêm 2 phút rồi thưởng thức.', 34),
(92, 44, 'Bánh gạo tokbokki Yopokki vị phô mai ly 120g', '44.4.jpg', 42.5, 'Để nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp', 'NẤU BẰNG LÒ VI SÓNG - Cho 90ml nước sôi vào tô. Lần lượt cho miến, bánh gạo và sốt gia vị vào hộp. Đậy hé nắp lại và cho vào lò vi sóng nấu trong 4 phút, lấy ra trộn đều rồi thưởng thức.\r\nNẤU BẰNG CHẢO - Cho vào chảo 160ml nước sôi rồi lần lượt đặt miến, bánh gạo vào nấu trong 1 phút 30 giây. Sau khi miếng và bánh gạo mềm, cho gói sốt gia vị vào nấu thêm 2 phút rồi thưởng thức.', 34),
(93, 48, 'Nước mắm chay Liên Thành chai 300ml', '48.1.jpg', 22, 'Nước cốt trái thơm (dứa), nước, muối, hỗn hợp axit amin, gạo men đỏ, chất điều vị (627, 631, 621, 640), chất điều chỉnh độ acid (330), chất ổn định (415), chất tạo ngọt tổng hợp (955), chất bảo quản (202), phẩm màu tổng hợp (150a, 110), hương nước mắm tổng hợp', 'Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp, đậy kín sau khi sử dụng', 23),
(94, 48, 'Nước mắm cao đạm Liên Thành nhãn ngọc 40 độ đạm chai 600ml', '48.2.jpg', 79, ' Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp, đậy kín sau khi sử dụng', ' Cá cơm Phú Quốc 95%, nước mắm cốt nhĩ 60%, muối, nước, đường, chất điều vị, hương nước mắm tổng hợp, chất bảo quản', 45),
(95, 48, 'Nước mắm cá cơm Hưng Thịnh 15 độ đạm chai 620ml', '48.3.jpg', 24, 'Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp, đậy kín sau khi sử dụng', 'Nước mắm cá cơm 80%, chất điều vị, chất điều chỉnh độ acid', 45),
(96, 48, 'Nước mắm cá cơm đặc sản Hưng Thịnh 40 độ đạm chai 750ml', '48.4.jpg', 66, 'Nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp, đậy kín sau khi sử dụng', 'Nước mắm cốt cá cơm 98%, chất điều vị, chất điều chỉnh độ acid', 67),
(97, 49, 'Tương ớt Hàn Quốc Chung Jung One hộp 500g', '49.1.jpg', 78, 'Gạo lứt 20,4%, bột ớt, mạch nha, hỗn hợp gia vị ớt, nước, tương đậu nành lên men, đường Oligo, muối biển, rượu cồn thực phẩm, bột gạo lứt nếp, bột nấm men, hạt đại mạch', 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín và nên bảo quản lạnh sau khi mở nắp.', 23),
(98, 49, 'Nước mắm cao đạm Liên Thành nhãn ngọc 40 độ đạm chai 600ml', '49.2.jpg', 56, 'Gạo lứt 20,4%, bột ớt, mạch nha, hỗn hợp gia vị ớt, nước, tương đậu nành lên men, đường Oligo, muối biển, rượu cồn thực phẩm, bột gạo lứt nếp, bột nấm men, hạt đại mạch', 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín và nên bảo quản lạnh sau khi mở nắp.', 45),
(99, 49, 'Tương ớt Hàn Quốc Haechandle hộp 500g', '49.3.jpg', 53, ' Xiro bắp, gia vị ớt 23.9%, gạo, nước, muối biển, bột ớt 2%, ngũ cốc lên men, đậu nành, muối, bột đậu nành, gạo nếp, bột gạo, mạch nha', 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín và nên bảo quản lạnh sau khi mở nắp.', 45),
(100, 49, 'Tương hột ớt Lee Kum Kee hũ 260g', '49.4.jpg', 47.5, 'Gạo lứt 20,4%, bột ớt, mạch nha, hỗn hợp gia vị ớt, nước, tương đậu nành lên men, đường Oligo, muối biển, rượu cồn thực phẩm, bột gạo lứt nếp, bột nấm men, hạt đại mạch', 'Bảo quản nơi khô ráo, thoáng mát, tránh ánh nắng trực tiếp. Đậy nắp kín và nên bảo quản lạnh sau khi mở nắp.', 67),
(101, 65, 'Sữa dưỡng thể trẻ hoá da collage ST.IVES Renewing 621ml', '65.1.jpg', 165, 'Tăng cường độ ẩm, phục hồi trẻ hóa làn da, giúp da mịn màng tự nhiên và khỏe mạnh', 'Để xa tầm tay trẻ em. Chỉ sử dụng ngoài da. Tránh tiếp xúc với mắt, nếu dính vào mắt, rửa sạch ngay bằng nước', 34),
(102, 65, 'Sữa dưỡng thể ST.IVES Smoothing Yến Mạch và Bơ 621ml', '65.2.jpg', 165, 'Collagen và các sợi đàn hồi Protein từ bơ hạt mỡ, dưỡng ẩm từ Glycerin', 'Để xa tầm tay trẻ em. Chỉ sử dụng ngoài da. Tránh tiếp xúc với mắt, nếu dính vào mắt, rửa sạch ngay bằng nước', 34),
(103, 65, 'Sữa dưỡng thể trắng da Vaseline Healthy White Perfect 10 AHA & Pro-Retinol 350ml', '65.3.jpg', 141, 'Collagen và các sợi đàn hồi Protein từ bơ hạt mỡ, dưỡng ẩm từ Glycerin', 'Để xa tầm tay trẻ em. Chỉ sử dụng ngoài da. Tránh tiếp xúc với mắt, nếu dính vào mắt, rửa sạch ngay bằng nước', 34),
(104, 65, 'Sữa dưỡng thể trắng da tức thì Vaseline Healthy White Instant Fair 350ml', '65.4.jpg', 141, 'Collagen và các sợi đàn hồi Protein từ bơ hạt mỡ, dưỡng ẩm từ Glycerin', 'Để xa tầm tay trẻ em. Chỉ sử dụng ngoài da. Tránh tiếp xúc với mắt, nếu dính vào mắt, rửa sạch ngay bằng nước', 34),
(105, 66, 'Khẩu trang y tế Niva 3 lớp hộp 20 cái', '66.1.jpg', 60, 'Thanh tự mũi dễ định hình, ôm trọn khuôn mặt. Quai thun đàn hồi và co dãn phù hợp với tất cả các khuôn mặt, tạo cảm giác thoải mái', 'Ngăn khói, bụi, phấn hoa, vi khuẩn xâm nhập, phòng chống các dịch bệnh nguy hiểm lây qua đường hô hấp. Sử dụng hiệu quả khi lưu thông trên đường, môi trường công nghiệp độc hại, nơi làm việc để ngăn ngừa dịch bệnh và giọt bắn', 37),
(106, 66, 'Khẩu trang vải kháng khuẩn dpNano 2 lớp hộp 4 cái (size S)', '66.2.jpg', 59, 'Không dùng bột giặt có chất tẩy mạnh và nên giặt bằng tay. Tránh phơi trực tiếp dưới ánh nắng mặt trời. Không nên ủi, là để đảm bảo hệ vi sinh kháng khuẩn', 'Che nắng, chống bụi và kháng khuẩn', 34),
(107, 66, 'Khẩu trang vải kháng khuẩn dpNano 2 lớp hộp 4 cái (size M)', '66.3.jpg', 59, 'Không dùng bột giặt có chất tẩy mạnh và nên giặt bằng tay. Tránh phơi trực tiếp dưới ánh nắng mặt trời. Không nên ủi, là để đảm bảo hệ vi sinh kháng khuẩn', 'Che nắng, chống bụi và kháng khuẩn, dây đeo mềm mại và co dã', 45),
(108, 66, 'Khẩu trang y tế Niva 3D người lớn 4 lớp hộp 10 cái', '66.4.jpg', 55, 'Quai không gây đau và khó chịu khi sử dụng. Thiết kế thời trang 3D thông minh cùng cấu trúc lọc đa lớp giúp ôm vừa khuôn mặt, cho cảm giác thoải mái, dễ dàng hít thở', 'Che nắng, chống bụi và kháng khuẩn, dây đeo mềm mại và co dã', 56);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'noimg.png',
  `phone` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `images`, `phone`, `address`, `email`, `email_verified_at`, `username`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `status`) VALUES
(1, 'BaoLong', 'noimg.png', NULL, NULL, 'longnnbps09839@fpt.edu.vn', NULL, 'baolong', '$2y$10$2O5.ujuuBFSOfKlCzHhq8upG71hEtap1G1lYTKDr0yXiwa9u2lFEe', NULL, '2020-06-23 12:15:06', '2020-06-23 12:15:06', 1, 1),
(2, 'Long', 'noimg.png', NULL, NULL, 'Long@gmail.com', NULL, 'hello', '$2y$10$UUV6brtohXy4j75nG15OFu9uMHs46.zJR7EOOkYadlaV3tAI41t5G', NULL, '2020-06-23 12:36:17', '2020-06-23 12:36:17', 0, 1),
(3, 'Hoài Vũ', 'noimg.png', NULL, NULL, 'hoaivu@gmail.com', NULL, 'hoaivu', '$2y$10$u4lw5zmv8Z3HTAOiDo0JUu.28eNKnjaRyTOOLSmyFAaCnkQvBhHiG', NULL, '2020-06-24 20:09:00', '2020-06-24 20:09:00', 0, 1),
(4, 'Văn Tự', 'noimg.png', NULL, NULL, 'vantu@gmail.com', NULL, 'vantu', '$2y$10$cXG8IaUDTMa0cgA5JY16yuN0r8YDvFkrCoRiUTPO6AH9ZtcCZSPpG', NULL, '2020-06-24 20:11:53', '2020-06-24 20:11:53', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`idCatalog`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`,`id_product`),
  ADD KEY `id_product` (`id_product`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `id_catalog` (`idCatalogProduct`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `idCatalog` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID tự tăng không cần ghi', AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID bình luận';

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID CT đơn hàng';

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`idProduct`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`id_product`) REFERENCES `product` (`idProduct`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`idCatalogProduct`) REFERENCES `catalog` (`idCatalog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
