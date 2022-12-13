-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2022 lúc 08:57 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `furniture`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id_brand` int(11) NOT NULL,
  `name_brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id_brand`, `name_brand`) VALUES
(2, 'Luxury'),
(3, 'Hobu'),
(4, ' Aillen'),
(5, 'BELLA'),
(6, 'Woody');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `cart_status` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id_cart`, `id_user`, `code_cart`, `cart_status`, `created_at`) VALUES
(11, 7, '8606', 0, '0000-00-00'),
(12, 7, '3790', 0, '0000-00-00'),
(13, 7, '9424', 0, '0000-00-00'),
(14, 7, '1713', 0, '0000-00-00'),
(15, 7, '3957', 0, '0000-00-00'),
(16, 7, '4562', 0, '0000-00-00'),
(17, 7, '2690', 0, '0000-00-00'),
(18, 7, '7149', 0, '0000-00-00'),
(19, 7, '2225', 0, '0000-00-00'),
(20, 7, '2656', 0, '0000-00-00'),
(21, 7, '2548', 0, '0000-00-00'),
(22, 7, '3531', 0, '0000-00-00'),
(23, 7, '6306', 0, '0000-00-00'),
(24, 7, '6118', 0, '0000-00-00'),
(25, 7, '2791', 0, '0000-00-00'),
(26, 7, '7222', 0, '0000-00-00'),
(27, 7, '5463', 0, '0000-00-00'),
(28, 7, '8494', 0, '0000-00-00'),
(29, 7, '2067', 0, '0000-00-00'),
(30, 7, '5696', 1, '0000-00-00'),
(31, 7, '1175', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_details`
--

CREATE TABLE `cart_details` (
  `id_cart_details` int(11) NOT NULL,
  `code_cart` varchar(10) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cart_details`
--

INSERT INTO `cart_details` (`id_cart_details`, `code_cart`, `id_product`, `quantity`) VALUES
(13, '8606', 48, 3),
(14, '8606', 29, 4),
(15, '3790', 48, 3),
(16, '3790', 29, 4),
(17, '9424', 48, 3),
(18, '9424', 29, 4),
(19, '1713', 48, 3),
(20, '1713', 29, 4),
(21, '3957', 48, 3),
(22, '3957', 29, 4),
(23, '4562', 48, 1),
(24, '2690', 48, 1),
(25, '7149', 48, 1),
(26, '2225', 48, 1),
(27, '2656', 48, 1),
(28, '2548', 48, 1),
(29, '2548', 29, 1),
(30, '3531', 48, 10),
(31, '6306', 29, 1),
(32, '6118', 29, 1),
(33, '2791', 29, 1),
(34, '7222', 29, 1),
(35, '5463', 29, 1),
(36, '8494', 29, 1),
(37, '2067', 29, 1),
(38, '5696', 29, 1),
(39, '5696', 48, 1),
(40, '1175', 29, 1),
(41, '1175', 48, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(100) NOT NULL,
  `order_category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `order_category`) VALUES
(73, 'Ghế', 73),
(74, 'Tủ', 74),
(75, 'Sofa', 2),
(76, 'Trang trí', 32),
(77, 'Kệ sách', 32),
(78, 'Bàn', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infomation`
--

CREATE TABLE `infomation` (
  `id` int(11) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `introduce` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `infomation`
--

INSERT INTO `infomation` (`id`, `phone`, `email`, `address`, `introduce`) VALUES
(1, ' 1900 6750', 'seateaminfo@gmail.com', '268 Lý Thường Kiệt, Phường 14, Quận 10, Thành phố Hồ Chí Minh', '                            Sea Furniture xây dựng một thương hiệu thân thiện thông qua cách chúng tôi làm sản phẩm và đem sản phẩm đó đến tay của bạn. Một sản phẩm thân thiện được cung cấp bởi một dịch vụ thân thiện chính là Kim chỉ nam để thành công của chúng tôi.\r\n\r\nSea Furniture chủ động thay đổi để không ngừng phát triển. Ngoài ra, khách hàng, bằng những sản phẩm của chúng tôi, có thể chủ động trong việc tạo nên phong cách sống riêng biệt trong không gian của mỗi người.\r\n\r\nChúng tôi tin rằng: Không gian sống đẹp có thể làm thay đổi chất lượng cuộc sống của bạn. Và chúng tôi mong mỏi truyền tải niềm tin đó đến cho mọi người để ai cũng có một nơi đáng sống.\r\n\r\nChúng tôi không chỉ cung cấp sản phẩm nội thất, chúng tôi mang cho bạn phong cách sống. “Less is more” - Một sự đơn giản nhất định nhưng tinh tế trong không gian sống sẽ giúp bạn dễ dàng cân bằng hơn trong cuộc sống.                                                                                                                        ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `brief` tinytext NOT NULL,
  `content` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `post`
--

INSERT INTO `post` (`id`, `name`, `image`, `brief`, `content`, `status`, `created_at`) VALUES
(3, 'dsf', '1670597555_blackpink-jisoo-beautiful-vogue-photoshoot-lipstick-uhdpaper.com-4K-6.1719.jpg', '<p>a</p>', '<p>qa</p>', 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(250) NOT NULL,
  `id_category` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `number` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `brand` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id_product`, `name_product`, `id_category`, `code`, `price`, `number`, `image`, `detail`, `brand`, `status`) VALUES
(29, 'Kệ đẩy Hobu', 77, 'c1008', 560, 23, '1670612165_item2.png', '<p><strong>Màu sắc:&nbsp;</strong>Trắng, Đen, Xám nhạt</p><p><strong>Kích thước:</strong>&nbsp;D50 x R40 x C65 (cm).</p><p><strong>Khối lượng thực tế:</strong>&nbsp;8,5kg.</p><p><strong>Chất liệu:&nbsp;</strong>Sắt sơn tĩnh điện</p><p><strong>Ý tưởng thiết kế:</strong></p><p>HOBU Trolley là sản phẩm mở đầu cho HOBU Collection của Make My Home, được lấy cảm hứng từ những thanh tre giản dị gắn liền với cuộc sống người Việt.</p><p><strong>Các điểm nổi bật:</strong></p><p>Với thiết kế ba tầng, không gian chứa đồ rộng rãi và dễ dàng di chuyển, HOBU Trolley sẽ khiến bạn hài lòng về sự linh hoạt và tiện dụng của mình.</p>', '', 1),
(48, 'Kệ TV Hobu', 77, 'xvxcv', 123, 123, '1670610258_item3.jpg', '<p><strong>Màu sắc:</strong><br>Chân: Trắng, đen.<br>Mặt: Trắng.<br><strong>Kích thước:</strong>&nbsp;D150 x R45 x C54 (cm)<br><strong>Khối lượng thực tế:</strong>&nbsp;22kg.<br><strong>Chất liệu:</strong><br>Chân: Sắt sơn tĩnh điện.<br>Mặt: Gỗ MFC</p><p><strong>Các điểm nổi bật:</strong><br>Kệ Tivi – Bằng việc tối đa hoá diện tích sử dụng, Kệ tivi Hobu mang lại giải pháp trưng bày và lưu trữ hiệu quả nhưng vẫn tiết kiệm không gian cho gia đình nhỏ của bạn.<br>Kệ Tivi HOBU với khung sắt chắc chắn sẽ khiến cho góc phòng của bạn trở nên ngăn nắp và tiết kiệm diện tích hơn rất nhiều.<br>Thiết kế đơn giản, 2 tầng cùng vô cùng tiện lợi, không gian chứa đồ rộng. Dễ dàng tháo lắp, tiết kiệm chi phí vận chuyển.<br>Chất liệu: sơn tĩnh điện chống gỉ sét, mặt gỗ MFC chống ẩm, chống trầy xướt.</p>', '', 1),
(52, 'Ghế Luxury', 73, 'c1001', 230, 321, '1670610138_item1.jpg', '<p><strong>Màu sắc:&nbsp;</strong></p><p>Chân: Trắng, đen, gỗ.</p><p>Mặt: Trắng, đen, xám, hồng.</p><p><strong>Kích thước:</strong>&nbsp;H80/45 x D40 x R48.</p><p><strong>Khối lượng thực tế:</strong>&nbsp;5kg.</p><p><strong>Chất liệu:</strong>&nbsp;Chân sắt sơn tĩnh điện, mặt nhựa MDS.</p><p><strong>Ý tưởng thiết kế:</strong></p><p>Với những biến tấu đa dạng độc đáo, có thể nói Luxury là một trong những mẫu ghế hiện đại được ưa chuộng nhất hiện nay. Luxury có kiểu dáng DAW - một biểu tượng của thiết kế hiện đại ngày nay.</p><p>Phần tựa lưng ghế bằng nhựa với độ cao và độ ngả hợp lí giúp hỗ trợ xương sống. Chân ghế gỗ tự nhiên và cấu trúc cân bằng trọng lượng và tạo ra nét khác biệt.</p><p>Sự kết hợp độc đáo và sáng tạo giữa các chất liệu gỗ, nhựa, đệm… tạo nên một chiếc ghế đẹp và thanh lịch cho ngôi nhà của bạn.</p><p><strong>Các điểm nổi bật:</strong></p><p>Mặt ngồi ghế hõm sâu, dáng ghế như một thác nước đổ xuống giữ cho người ngồi thoải mái bằng cách giảm áp lực lên lưng và đùi. Qua đó bạn có thể ngồi lâu hơn trên ghế mà không cảm thấy mỏi.</p><p>Sử dụng những chiếc ghế Luxury xinh xắn là giải pháp thông minh tiết kiệm diện tích cho ngôi nhà của bạn. Bạn có thể tha hồ lựa chọn kết hợp màu sắc, thoải mái thay đổi cho mọi không gian, ứng dụng.</p><p>Chất liệu hiện đại, bền, chắc chắn.</p>', '', 1),
(53, 'Bàn Aileen', 78, 'c1007', 450, 342, '1670612377_item4.jpg', 'Màu sắc: \r\n\r\nChân: Trắng, đen.\r\n\r\nMặt: Trắng, đen, gỗ.\r\n\r\nKích thước: H75 x D120 x R50.\r\n\r\nKhối lượng thực tế: 11,5kg.\r\n\r\nChất liệu:\r\n\r\nMặt bàn: Gỗ MDF chống ẩm.\r\n\r\nChân bàn: Sắt sơn tĩnh điện.\r\n\r\nÝ tưởng thiết kế:\r\n\r\nMột sản phẩm nội thất văn phòng được ưa chuộng. Bàn chân Aileen với giá thành cạnh tranh, chất lượng vật liệu vượt trội, thiết kế tối giản mà thanh lịch sẽ mang lại sự hài lòng cho bạn. \r\n\r\nCác điểm nổi bật:\r\n\r\nPhần mặt bàn làm từ gỗ công nghiệp MDF có khả năng chống ẩm tốt, các đường vân hiên đại.\r\n\r\nPhần chân tháo lắp được làm từ sắt sơn tĩnh điện có khả năng chóng rỉ sét, độ bền hoàn hảo, thuận tiện trong việc di chuyển, tháo rời.\r\n\r\nĐược thiết kế tỉ mỉ đến từng góc độ cho ra bộ khung vững chãi có khả năng chịu lực tốt nhất. ', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `is_admin` int(1) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `name`, `phone`, `address`, `is_admin`, `status`) VALUES
(7, 'vietbdf000@gmail.com', '202cb962ac59075b964b07152d234b70', 'Viet Le', '0915135008', '0', 0, 1),
(110, 'vietbdf000@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Viet Le', '0915135008', '0', 0, 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id_brand`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Chỉ mục cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`id_cart_details`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Chỉ mục cho bảng `infomation`
--
ALTER TABLE `infomation`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id_brand` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `id_cart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT cho bảng `infomation`
--
ALTER TABLE `infomation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
