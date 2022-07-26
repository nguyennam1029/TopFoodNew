-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 26, 2022 lúc 06:31 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `topfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `level` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `level`) VALUES
(1, 'admin', 'adminnam@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `name`, `address`, `phone`, `photo`) VALUES
(1, 'Hải sản', 'KTX bạc khoa', '0966456789', 'đư'),
(2, 'Cơm', 'Số 2 tạ quang bửu', '06666555', ''),
(3, 'Thịt', 'công ty TNHH một thành viên', '(+84) 966216495', 'v');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `manufacturer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `price`, `description`, `manufacturer_id`) VALUES
(1, 'Bạch tuộc thái lát siêu ngon', '1658589060.jpg', '139.000', 'Thịt dẻ sườn bò Mỹ có tên gọi khác là USA RIB Finger, là phần thịt nằm ở ức của con bò, được pha lọc từ phần sườn trước của con bò. Dẻ sườn bò Mỹ nổi tiếng với vị ngọt đậm đà, hương thơm đặc trưng cùng vị béo ngậy bởi những lớp mỡ dày trải dọc theo miếng thịt.\r\n\r\nDẻ sườn bò Mỹ là thực phẩm tươi sống cao cấp của Gofood được nhập khẩu trực tiếp theo đường chính ngạch. Người tiêu dùng có thể hoàn toàn yên tâm về chất lượng của thịt bò ở đây. Gofood là một trong những đối tác trực tiếp của bộ nông nghiệp Hoa Kỳ. Những con bò cho sản phẩm được chăn nuôi theo quy trình hoa học, đảm bảo yêu cầu chất lượng. Quy trình giết mổ, sơ chế, đóng gói, bảo quản, vận chuyển cũng rất hiện đại nên tuyệt đối an toàn cho người tiêu dùng.\r\n', 1),
(2, 'hai', '1658589909.webp', '99999', 'cơm', 2),
(3, 'Thịt vai siêu ngon', '1658591944.jpg', '199000', 'siêu hấp dẫn', 1),
(4, 'nguyennam1029', '1658589728.jpg', '4444', 'ggdgsdg', 1),
(5, 'Thịt bò cao cấp', '1658591510.jpg', '289000', 'THịt siêu ngon', 1),
(6, 'Sashimi phong cách nhật', '1658592090.jpg', '389000', 'ngon', 1),
(7, 'Cơm bò rang', '1658592155.webp', '198000', 'ngonnn', 1),
(8, 'Trứng cá hồi', '1658592321.jpg', '459000', '', 1),
(9, 'Cá tươi ngon', '1658645960.jpg', '1299000', '', 1),
(10, 'Shasimi siêu dễ ăn', '1658645783.jpg', '340000', '34234', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` char(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `phone`, `address`) VALUES
(1, 'srere', '1rf@gmail.com', '13435', '132344', ''),
(2, 'trương ngọc minh', 'minh@gmail.com', '123', '12456774', ''),
(3, 'nguyennam', 'namnam1029@gmail.com', '123', '1243546', ''),
(4, 'blabla', '12f@g', '1323', '133444', ''),
(5, 'Minh', 'naasf12@g', '123', '12345', ''),
(6, 'Nam good boy', '12gg@G', '123', '13246', ''),
(7, 'gê', 'namnam102339@gmail.com', '22', '5335', ''),
(8, 'nam1', 'nam1@gmail.com', '1', '123456', ''),
(9, 'namthu', 'namkfk@gmail.com', '1', '1', ''),
(10, 'namVip', 'nam000@gmail.com', '123', '123', ''),
(11, 'NamDev', 'namdev@gmail.com', '1', '111', ''),
(12, 'Nguyen', 'nguyen@g', '1', '123', ''),
(13, '1', '111@g', '1', '1', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `manufacturer_id` (`manufacturer_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
