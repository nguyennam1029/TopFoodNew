-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 16, 2022 lúc 08:39 AM
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
  `password` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(13, 'sssdd', 'dsdsdsds@g', 0, '54564565'),
(14, 'dggdgdg', 'ggdgdgdgdg@g', 1, '1'),
(15, 'ddsd', 'dddddd@g', 12343, 'ffddd'),
(16, 'csfgfhh', 'httt@g', 0, 'hhh'),
(17, 'Nuyễn nam', 'nam@gmail.com', 1234, 'ffffd'),
(18, 'Nguyễn văn nam', 'nguyennam10320011@gmail.com', 98888888, 'Trang web quá đẹp, dễ sử dụng mượt mà, cảm ơn bản thân đã cố gắng vươt qua những khó khắn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` int(50) NOT NULL,
  `namensx` varchar(100) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `namensx`, `address`) VALUES
(1, 'Hải sản', 'KTX Bách khoa hà nội'),
(2, 'Shasimi', 'Sô 1, Tạ quang bửa, Hai bà trưng, Hà nội'),
(3, 'Thịt bò', 'công ty TNHH một thành viên'),
(7, 'Thịt heo', 'cuộc đời phù du'),
(12, 'flash sale', 'Hồng Lộc-Lộc Hà tinh\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oders`
--

CREATE TABLE `oders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name_receiver` varchar(100) NOT NULL,
  `address_receiver` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `phone_receiver` char(12) NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oders`
--

INSERT INTO `oders` (`id`, `customer_id`, `name_receiver`, `address_receiver`, `status`, `created_at`, `phone_receiver`, `total_price`) VALUES
(6, 52, 'Namdev', 'ktx Bách khóa, Hai bà trưng, Hà Nội', 1, '2022-08-01 17:28:31', '096678999', 796000),
(7, 53, 'nam', 'ktx  bach khoa', 1, '2022-08-11 09:03:54', '123456', 1921000),
(8, 54, 'nam1', 'ktx', 0, '2022-08-02 02:14:50', '1234', 685000),
(9, 55, 'dfh', '111', 0, '2022-08-03 17:09:04', '1', 1148000),
(10, 56, 'nguyen  nam', 'ktx bach khoa', 0, '2022-08-05 05:57:37', '099914525', 2675000),
(11, 52, 'Namdev', 'ktx Bách khóa, Hai bà trưng, Hà Nội', 0, '2022-08-07 15:41:29', '096678999', 1197000),
(12, 52, 'Namdev', 'ktx Bách khóa, Hai bà trưng, Hà Nội', 0, '2022-08-07 15:43:17', '096678999', 287000),
(13, 60, 'NamDev', 'ktx bach khoa, ha noi', 0, '2022-08-07 16:06:47', '0966216666', 3736000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `oder_product`
--

CREATE TABLE `oder_product` (
  `oder_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `oder_product`
--

INSERT INTO `oder_product` (`oder_id`, `product_id`, `quantity`) VALUES
(6, 3, 4),
(7, 77, 4),
(7, 93, 3),
(8, 3, 2),
(8, 94, 1),
(9, 115, 4),
(10, 113, 5),
(11, 2, 3),
(12, 115, 1),
(13, 2, 4),
(13, 113, 4);

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
(1, 'Bạch tuộc thái lát siêu ngon', '1658589060.jpg', '214000', 'Thịt dẻ sườn bò Mỹ có tên gọi khác là USA RIB Finger, là phần thịt nằm ở ức của con bò, được pha lọc từ phần sườn trước của con bò. Dẻ sườn bò Mỹ nổi tiếng với vị ngọt đậm đà, hương thơm đặc trưng cùng vị béo ngậy bởi những lớp mỡ dày trải dọc theo miếng thịt.\r\n\r\nDẻ sườn bò Mỹ là thực phẩm tươi sống cao cấp của Gofood được nhập khẩu trực tiếp theo đường chính ngạch. Người tiêu dùng có thể hoàn toàn yên tâm về chất lượng của thịt bò ở đây. Gofood là một trong những đối tác trực tiếp của bộ nông nghiệp Hoa Kỳ. Những con bò cho sản phẩm được chăn nuôi theo quy trình hoa học, đảm bảo yêu cầu chất lượng. Quy trình giết mổ, sơ chế, đóng gói, bảo quản, vận chuyển cũng rất hiện đại nên tuyệt đối an toàn cho người tiêu dùng.\r\n', 1),
(2, 'Shasimi cá voi', '1659120769.jpg', '399000', 'Set Box Nướng 3-5 người ăn\r\n\r\nBao gồm:\r\n\r\nBa chỉ bò Black Angus: 0,4 kg\r\n\r\nLõi nạc vai bò Black Angus: 0,3 kg\r\n\r\nDẻ sườn bò Black Angus: 0,3 kg\r\n\r\nGia vị tặng kèm: Sốt ướp bò nướng Bulgogi Hàn Quốc\r\n\r\nĐóng gói: Cắt thái sẵn, đóng hộp an toàn (Ướp sẵn hoặc để riêng gói sốt ướp theo yêu cầu)\r\n\r\nChế biến: Ngon nhất cho món nướng than hoa, hoặc nướng chảo, bếp điện,...ăn cùng rau sống sẽ rất tuyệt vời.\r\n\r\nLưu ý: Để yêu cầu ướp sẵn, quý khách vui lòng báo trước Gofood một buổi để Gofood chuẩn bị chu đáo nhất.', 2),
(3, 'Thịt vai siêu ngon', '1658591944.jpg', '199000', 'siêu hấp dẫn', 1),
(4, 'Cá trích ép trứng', '1658589728.jpg', '298000', 'Nhãn hiệu: Azuma Foods\r\n\r\nXuất xứ: Nhật Bản\r\n\r\nĐóng gói: Bán theo thanh (Mỗi thanh khoảng 110-140 gram), đóng gói, hút chân không miễn phí.\r\n\r\n- Cắt thái Sashimi miễn phí theo yêu cầu\r\n\r\n- Ship tận nhà với mọi đơn hàng, nhận đặt quà biếu tặng,\r\n\r\n- Tặng kèm miễn phí lá tía tô và củ cải bào ăn kèm.\r\n\r\nDòng sản phẩm:\r\n\r\nCá trích ép trứng màu Vàng - vị tự nhiên\r\n\r\nCá trích ép trứng màu Đỏ - vị gừng hồng\r\n\r\nCá trích ép trứng màu Xanh - vị mù tạt\r\n\r\nBảo quản: Ngăn đá tủ lạnh\r\n\r\nChế biến: Sử dụng cho món shashimi, sushi, salad\r\n\r\nHạn sử dụng: 12 tháng', 1),
(5, 'Thịt bò cao cấp', '1658591510.jpg', '289000', 'THịt siêu ngon', 1),
(6, 'Sashimi phong cách nhật', '1658592090.jpg', '389000', 'ngon', 1),
(7, 'Thịt bò siêu hạng', '1659886230.jpg', '198000', 'ngonnn', 3),
(8, 'Trứng cá hồi', '1658592321.jpg', '459000', '', 1),
(9, 'Cá tươi ngon', '1658645960.jpg', '1299000', '', 1),
(10, 'Shasimi siêu dễ ăn', '1658645783.jpg', '340000', '34234', 1),
(11, 'Thịt bò phần ức', '1658858727.jpg', '125466', 'Nhãn hiệu: Gofood\r\n\r\nXuất xứ: Úc\r\n\r\nTrọng lượng trung bình: 300gr/miếng\r\n\r\nThời gian ủ thịt: 35-40 ngày\r\n\r\nCác miếng đã được cắt và hút chân không sẵn\r\n\r\nChế biến: Dùng cho món Steak, nướng, bỏ lò, áp chảo,… ngon nhất khi thưởng thức ở độ chín Medium;\r\n\r\nBảo quản: 14 ngày trong tủ mát (nhiệt độ từ 0 đến 2 độ C) hoặc 6 tháng trong tủ đông (dưới -18 độ C);\r\n\r\nThăn ngoại bò Úc ủ khô cuộn bơ sử dụng thịt thăn ngoại của chú bò, phần phía ngoài xương sống, tình từ vùng thắt lưng đến hông. Với lớp rìa mỡ phía ngoài, thịt thăn ngoại mềm mọng và đậm vị. Thăn ngoại được tiệt trùng rồi ủ với lớp bơ bao quanh tạo nên phần Steak hảo hạng.\r\n\r\nĐặt hàng ngay: 1900 3220', 3),
(77, 'Thịt bắp bò siêu nạc', '1659066298.jpg', '259000', 'Nhãn hiệu: Cargill Meat Solutions (100% Authentic with Certification)\r\n\r\nHạng: Cao cấp (USDA Choice)\r\n\r\nXuất xứ: Mỹ\r\n\r\nĐóng gói: đóng gói 500 gram, hút chân không miễn phí theo yêu cầu.\r\n\r\nBảo quản: Đông\r\n\r\nChế biến: Ngọt thơm ngậy, liên vân mỡ, sườn hoàng đế dành riêng cho món nướng, trong đó nướng than hoa ăn kèm lá vừng, tương chấm ssamjang là ngon nhất.\r\n\r\nGofood đã sơ chế, cắt thái vừa ăn cho món nướng, lọc sạch mỡ và gân để lại phần thịt ngon ngọt nhất của sườn. Chính vì thế sườn bò Black Angus bình thường đã ngọt thơm ngậy, nay đậm đà hơn mà chỉ cần mở ra là nướng, không cần bất kỳ khâu cắt thái nào.\r\n\r\nHạn sử dụng: 6 tháng', 3),
(78, 'Thịt bò xay Omaha Burger', '1659066668.jpg', '158000', 'Đến từ đất nước cờ hoa, sức hút của bánh Burger đã lan tỏa khắp thế giới. Món ăn đã dành được rất nhiều cảm tình của khách hàng. Tại Việt Nam, burger không chỉ thu hút giới trẻ mà còn là món ăn yêu thích của rất nhiều gia đình vào ngày cuối tuần. Burger không chỉ trở thành món ăn hấp dẫn.\r\n\r\nGiờ đây thay vì việc phải tất bật chuẩn bị bữa sáng, bạn chỉ cần áp chảo hoặc cho burger vào lò nướng và sẵn sàng thưởng thức.\r\n\r\nHương vị bò burger của Gofood có sự cải tiến để hợp với khẩu vị người Việt hơn, quý khách có thể mua về kẹp bánh mỳ hay đơn giản là áp chảo rồi ăn sáng hàng ngày.', 3),
(79, 'Xương cá hồi tươi', '1659067615.jpg', '399000', 'Nhãn hiệu: Salmar/Leroy\r\n\r\nXuất xứ: Nauy\r\n\r\nĐóng gói: đóng gói theo bộ, mỗi bộ khoảng 0,8kg tới 1 kg\r\n\r\nBảo quản: bảo quản trong ngăn mát tủ lạnh trong 2 ngày nếu dùng ngay, có thể bảo quản trong ngăn đá tủ lạnh dùng ngon nhất trong 1 tháng.\r\n\r\nChế biến: Sử dụng cho lẩu cá hồi, cháo cá hồi, ruốc xương cá hồi, canh chua, canh riêu cá hồi,…\r\n\r\nHạn sử dụng: 2 ngày', 1),
(81, 'Lươn nướng Nhật', '1659076643.jpg', '245000', 'Nhãn hiệu: Azuma Foods\r\n\r\nXuất xứ: Nhật Bản\r\n\r\nĐóng gói: 198-200 gram/gói\r\n\r\nBảo quản: Ngăn đá tủ lạnh\r\n\r\nChế biến: Lươn đã được chế biến sẵn, sử dụng cho món cơm Unadon, lươn nướng Nhật dùng cùng cơm trắng sẽ rất đưa cơm. Chỉ cần hâm lại bằng lò vi sóng hoặc bằng lò nướng hay áp chảo rán lại...và sẵn sàng thưởng thức.\r\n\r\nHạn sử dụng: 24 tháng', 1),
(87, 'Lươn nướng Nhậtd', '1659080717.jpg', '214353', 'rẻ', 1),
(90, 'Lươn nướng Nhật', '1659103201.jpg', '278000', 'quas ngon', 3),
(91, 'Shasimi cá mập', '1659106733.jpg', '126888', 'fffd', 1),
(93, 'Sashimi box cá hồi', '1659120234.jpg', '295000', 'Set Sashimi Box 1-2 người ăn\r\n\r\nBao gồm:\r\n\r\nCá hồi Nauy fillet tươi: 300 gram\r\n\r\nGia vị và rau đi kèm: Đầy đủ gừng hồng Nhật, nước tương, mù tạt, tía tô và củ cải bào;\r\n\r\nĐóng gói: Cắt thái theo yêu cầu, đóng hộp an toàn', 2),
(94, 'Sashimi Mix Box', '1659120382.jpg', '287000', 'Set Sashimi Box 4-6 người ăn\r\n\r\nBao gồm:\r\n\r\nCá hồi Nauy fillet tươi: 700gr\r\n\r\nCá trích ép trứng Nhật: 2 thanh\r\n\r\nMàu xanh/đỏ/vàng hoặc mix giữa hai màu tùy chọn:\r\n\r\n   - Cá trích ép trứng màu Vàng - vị tự nhiên\r\n\r\n   - Cá trích ép trứng màu Đỏ - vị gừng hồng\r\n\r\n   - Cá trích ép trứng màu Xanh - vị mù tạt\r\n\r\nGia vị và rau đi kèm: Tía tô, củ cải, gừng hồng Nhật, nước tương, mù tạt\r\n\r\nĐóng gói: Cắt thái theo yêu cầu, đóng hộp an toàn', 2),
(95, 'Sashimi Box 10 ', '1659120442.jpg', '189000', 'Set Sashimi Box 2-3 người ăn\r\n\r\nBao gồm:\r\n\r\nCá hồi Nauy fillet tươi: 200gr\r\n\r\nCá trích ép trứng Nhật: 0,5 thanh\r\n\r\nMàu xanh/đỏ/vàng:\r\n\r\n   - Cá trích ép trứng màu Vàng - vị tự nhiên\r\n\r\n   - Cá trích ép trứng màu Đỏ - vị gừng hồng\r\n\r\n   - Cá trích ép trứng màu Xanh - vị mù tạt\r\n\r\nCá cam Nhật Bản: 100gr\r\n\r\nBạch tuộc Mizudako Nhật Bản: 100gr\r\n\r\nGia vị và rau đi kèm: Tía tô, củ cải, gừng hồng Nhật, nước tương, mù tạt Wasabi.\r\n\r\nĐóng gói: Cắt thái theo yêu cầu, đóng hộp an toàn.', 2),
(96, 'Sashimi nhật bản', '1659120506.jpg', '245000', 'Set Sashimi Box 3-4 người ăn\r\n\r\nBao gồm:\r\n\r\nCá hồi Nauy fillet tươi: 500gr\r\n\r\nGia vị và rau đi kèm: Tía tô, củ cải, gừng hồng Nhật, nước tương, mù tạt\r\n\r\nĐóng gói: Cắt thái theo yêu cầu, đóng hộp an toàn', 2),
(97, 'Sashimi cá trích ép trứng', '1659120711.jpg', '277000', 'Cá trích ép trứng Nhật: 2 thanh\r\n\r\nMàu xanh/đỏ/vàng hoặc mix giữa hai màu tùy chọn:\r\n\r\n   - Cá trích ép trứng màu Vàng - vị tự nhiên\r\n\r\n   - Cá trích ép trứng màu Đỏ - vị gừng hồng\r\n\r\n   - Cá trích ép trứng màu Xanh - vị mù tạt\r\n\r\nGia vị và rau đi kèm: Tía tô, củ cải, gừng hồng Nhật, nước tương, mù tạt\r\n\r\nĐóng gói: Cắt thái theo yêu cầu, đóng hộp an toàn', 2),
(98, 'Sashimi cá hồi', '1659120683.jpg', '255000', 'Set Sashimi Box 1-2 người ăn\r\n\r\nBao gồm:\r\n\r\nCá hồi Nauy fillet tươi: 300 gram\r\n\r\nGia vị và rau đi kèm: Đầy đủ gừng hồng Nhật, nước tương, mù tạt, tía tô và củ cải bào;\r\n\r\nĐóng gói: Cắt thái theo yêu cầu, đóng hộp an toàn', 2),
(99, 'Bắp bò Úc tươi hữu cơ Obe - Shank Boneless', '1659121042.jpg', '535000', 'Nhãn hiệu: Obe Organic\r\n\r\nXuất xứ: Australia\r\n\r\nChứng nhận: Chương trình Hữu cơ Quốc gia của Bộ Nông nghiệp Hoa Kỳ (USDA NOP)\r\n\r\nCắt thái: Thái miếng theo yêu cầu, chuyên dùng cho món nướng hấp dẫn\r\n\r\nBảo quản: Từ -2 đến 0 độ C (Chilled).\r\n\r\nChế biến: Bắp bò Úc hữu cơ Obe có hương vị thơm mềm, có những đường gân giòn tạo nên kết cấu thịt đặc biệt, thích hợp với các món xào, hương vị thơm ngon khi làm thành món bắp bò ngâm mắm\r\n\r\nBắp bò Obe được chọn lựa từ những chú bò hữu cơ thương hiệu Obe Organic chăn thả tự nhiên tại Úc với thức ăn chính là các loại cỏ tới từ thiên nhiên, đảm bảo đem đến nguồn dưỡng chất tốt cho sức khỏe.\r\n\r\nHạn sử dụng: 3 ngày trong tủ chuyên biệt, với tủ lạnh tại nhà, bảo quản trong ngăn mát tủ lạnh dùng trong 2 ngày.', 3),
(100, 'Thịt cổ Iberico Legado – Collar', '1659121132.jpg', '348000', 'Nhãn hiệu: Iberico Legado\r\n\r\nXuất xứ: Tây Ban Nha\r\n\r\nĐóng gói: Cắt thái, đóng gói theo yêu cầu\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Dùng cho món nướng, áp chảo, bỏ lò, xào chua ngọt, rán,…đều ngon\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nThịt heo Iberico mềm ngọt qua từng thớ thịt, đây là loại thịt heo duy nhất có thể dùng làm bít tết mềm thơm hảo hạng.', 3),
(101, 'Thịt thăn ngoại bò Mỹ', '1659121168.jpg', '599000', 'Nhãn hiệu: Cargill Meat Solutions (100% Authentic with Certification)\r\n\r\nHạng: Loại thượng hạng (USDA Prime) Tỉ lệ thịt, mỡ xen kẽ đồng đều, tạo độ mềm thơm hảo hạng cho món bò bít tết.\r\n\r\nXuất xứ: Mỹ\r\n\r\nĐóng gói: cắt thái, đóng gói, hút chân không miễn phí theo yêu cầu, mỗi miếng khoảng 300-350 gram.\r\n\r\nBảo quản: Đông\r\n\r\nChế biến: Bò bít tết, áp chảo, nướng, bỏ lò,...\r\n\r\nHạn sử dụng: 6 tháng', 3),
(102, 'Shasimi cá ngừ', '1659292392.jpg', '589000', 'Set Sashimi Box 3-4 người ăn\r\n\r\nBao gồm:\r\n\r\nCá hồi Nauy fillet tươi: 500gr\r\n\r\nGia vị và rau đi kèm: Tía tô, củ cải, gừng hồng Nhật, nước tương, mù tạt\r\n\r\nĐóng gói: Cắt thái theo yêu cầu, đóng hộp an toàn', 2),
(103, 'Thịt ba rọi heo Iberico Legado - Belly', '1659292972.jpg', '248000', 'Nhãn hiệu: Iberico Legado\r\n\r\nXuất xứ: Tây Ban Nha\r\n\r\nĐóng gói: 0,5kg/khay. Cắt thái, đóng gói, hút chân không miễn phí theo yêu cầu cho món lẩu, nướng.\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Dùng cho món nướng, lẩu, xào, nhúng mì,... đều thơm ngậy, ngọt thịt.\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nThịt heo Iberico mềm ngọt qua từng thớ thịt, đây là loại thịt heo ngon nhất trên thế giới.', 7),
(104, 'Thịt sườn non Iberico Legado – Loin Ribs', '1659293073.jpg', '273000', 'Nhãn hiệu: Iberico Legado\r\n\r\nXuất xứ: Tây Ban Nha\r\n\r\nĐóng gói: Cắt thái, đóng gói theo yêu cầu\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Dùng cho món nướng, áp chảo, bỏ lò, xào chua ngọt, rán,…đều ngon\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nThịt heo Iberico mềm ngọt qua từng thớ thịt, đây là loại thịt heo duy nhất có thể dùng làm bít tết mềm thơm hảo hạng.', 7),
(105, 'Thịt lõi nạc cổ heo Iberico Legado – Collar Presa', '1659293111.jpg', '266000', 'Nhãn hiệu: Iberico Legado\r\n\r\nXuất xứ: Tây Ban Nha\r\n\r\nĐóng gói: Cắt thái, đóng gói theo yêu cầu\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Dùng cho món nướng, áp chảo, bỏ lò, xào chua ngọt, rán,…đều ngon\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nThịt heo Iberico mềm ngọt qua từng thớ thịt, đây là loại thịt heo duy nhất có thể dùng làm bít tết mềm thơm hảo hạng.', 7),
(106, 'Thịt heo nạc', '1659293136.jpg', '288000', 'Nhãn hiệu: Iberico Legado\r\n\r\nXuất xứ: Tây Ban Nha\r\n\r\nĐóng gói: Cắt thái, đóng gói theo yêu cầu\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Dùng cho món nướng, áp chảo, bỏ lò, xào chua ngọt, rán,…đều ngon\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nThịt heo Iberico mềm ngọt qua từng thớ thịt, đây là loại thịt heo duy nhất có thể dùng làm bít tết mềm thơm hảo hạng.', 7),
(107, 'Thịt heo phần má', '1659293160.jpg', '198000', 'Nhãn hiệu: Iberico Legado\r\n\r\nXuất xứ: Tây Ban Nha\r\n\r\nĐóng gói: Cắt thái, đóng gói theo yêu cầu\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Dùng cho món nướng, áp chảo, bỏ lò, xào chua ngọt, rán,…đều ngon\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nThịt heo Iberico mềm ngọt qua từng thớ thịt, đây là loại thịt heo duy nhất có thể dùng làm bít tết mềm thơm hảo hạng.', 7),
(108, 'Thịt diềm thăn heo Iberico', '1659293218.jpg', '299000', 'Nhãn hiệu: Iberico Legado\r\n\r\nXuất xứ: Tây Ban Nha\r\n\r\nĐóng gói: Cắt thái, đóng gói theo yêu cầu\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Dùng cho món nướng, áp chảo, bỏ lò, xào chua ngọt, rán,…đều ngon\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nThịt heo Iberico mềm ngọt qua từng thớ thịt, đây là loại thịt heo duy nhất có thể dùng làm bít tết mềm thơm hảo hạng.', 7),
(109, 'Sườn non heo Mỹ', '1659293265.jpg', '299000', 'Xuất xứ: Mỹ\r\n\r\nĐóng gói: Cắt thái, đóng gói theo yêu cầu\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Chuyên dụng cho món nướng, sườn xào chua ngọt, canh sườn,...và nhiều món ăn hấp dẫn khác.\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nSườn non heo Mỹ có thịt nạc, mỡ đều, xương dẹp, có sụn mang lại hương vị thơm ngọt đặc trưng cho món nướng.', 7),
(110, 'Thịt heo nhật', '1659293331.jpg', '389000', 'Xuất xứ: Nhật\r\n\r\nĐóng gói: Cắt thái, đóng gói theo yêu cầu\r\n\r\nBảo quản: Đông (-18 độ C)\r\n\r\nChế biến: Chuyên dụng cho món nướng, sườn xào chua ngọt, canh sườn,...và nhiều món ăn hấp dẫn khác.\r\n\r\nHạn sử dụng: 6 tháng\r\n\r\nSườn non heo Mỹ có thịt nạc, mỡ đều, xương dẹp, có sụn mang lại hương vị thơm ngọt đặc trưng cho món nướng.', 7),
(111, 'thit xay', '1659406813.jpg', '299000', 'kfs', 3),
(112, 'Bạch tuộc thái lát siêu ngon', '1658589060.jpg', '214000', 'Thịt dẻ sườn bò Mỹ có tên gọi khác là USA RIB Finger, là phần thịt nằm ở ức của con bò, được pha lọc từ phần sườn trước của con bò. Dẻ sườn bò Mỹ nổi tiếng với vị ngọt đậm đà, hương thơm đặc trưng cùng vị béo ngậy bởi những lớp mỡ dày trải dọc theo miếng thịt.\r\n\r\nDẻ sườn bò Mỹ là thực phẩm tươi sống cao cấp của Gofood được nhập khẩu trực tiếp theo đường chính ngạch. Người tiêu dùng có thể hoàn toàn yên tâm về chất lượng của thịt bò ở đây. Gofood là một trong những đối tác trực tiếp của bộ nông nghiệp Hoa Kỳ. Những con bò cho sản phẩm được chăn nuôi theo quy trình hoa học, đảm bảo yêu cầu chất lượng. Quy trình giết mổ, sơ chế, đóng gói, bảo quản, vận chuyển cũng rất hiện đại nên tuyệt đối an toàn cho người tiêu dùng.\r\n', 12),
(113, 'Bắp bò Úc tươi hữu cơ Obe - Shank Boneless', '1659121042.jpg', '535000', 'Nhãn hiệu: Obe Organic\r\n\r\nXuất xứ: Australia\r\n\r\nChứng nhận: Chương trình Hữu cơ Quốc gia của Bộ Nông nghiệp Hoa Kỳ (USDA NOP)\r\n\r\nCắt thái: Thái miếng theo yêu cầu, chuyên dùng cho món nướng hấp dẫn\r\n\r\nBảo quản: Từ -2 đến 0 độ C (Chilled).\r\n\r\nChế biến: Bắp bò Úc hữu cơ Obe có hương vị thơm mềm, có những đường gân giòn tạo nên kết cấu thịt đặc biệt, thích hợp với các món xào, hương vị thơm ngon khi làm thành món bắp bò ngâm mắm\r\n\r\nBắp bò Obe được chọn lựa từ những chú bò hữu cơ thương hiệu Obe Organic chăn thả tự nhiên tại Úc với thức ăn chính là các loại cỏ tới từ thiên nhiên, đảm bảo đem đến nguồn dưỡng chất tốt cho sức khỏe.\r\n\r\nHạn sử dụng: 3 ngày trong tủ chuyên biệt, với tủ lạnh tại nhà, bảo quản trong ngăn mát tủ lạnh dùng trong 2 ngày.', 12),
(114, 'thit xay', '1659406813.jpg', '299000', 'kfs', 12),
(115, 'Sashimi Mix Box', '1659120382.jpg', '287000', 'Set Sashimi Box 4-6 người ăn\r\n\r\nBao gồm:\r\n\r\nCá hồi Nauy fillet tươi: 700gr\r\n\r\nCá trích ép trứng Nhật: 2 thanh\r\n\r\nMàu xanh/đỏ/vàng hoặc mix giữa hai màu tùy chọn:\r\n\r\n   - Cá trích ép trứng màu Vàng - vị tự nhiên\r\n\r\n   - Cá trích ép trứng màu Đỏ - vị gừng hồng\r\n\r\n   - Cá trích ép trứng màu Xanh - vị mù tạt\r\n\r\nGia vị và rau đi kèm: Tía tô, củ cải, gừng hồng Nhật, nước tương, mù tạt\r\n\r\nĐóng gói: Cắt thái theo yêu cầu, đóng hộp an toàn', 12),
(116, 'Shasimi cá voi', '1659120769.jpg', '399000', 'Set Box Nướng 3-5 người ăn\r\n\r\nBao gồm:\r\n\r\nBa chỉ bò Black Angus: 0,4 kg\r\n\r\nLõi nạc vai bò Black Angus: 0,3 kg\r\n\r\nDẻ sườn bò Black Angus: 0,3 kg\r\n\r\nGia vị tặng kèm: Sốt ướp bò nướng Bulgogi Hàn Quốc\r\n\r\nĐóng gói: Cắt thái sẵn, đóng hộp an toàn (Ướp sẵn hoặc để riêng gói sốt ướp theo yêu cầu)\r\n\r\nChế biến: Ngon nhất cho món nướng than hoa, hoặc nướng chảo, bếp điện,...ăn cùng rau sống sẽ rất tuyệt vời.\r\n\r\nLưu ý: Để yêu cầu ướp sẵn, quý khách vui lòng báo trước Gofood một buổi để Gofood chuẩn bị chu đáo nhất.', 12),
(117, 'Cá trích ép trứng', '1658589728.jpg', '298000', 'Nhãn hiệu: Azuma Foods\r\n\r\nXuất xứ: Nhật Bản\r\n\r\nĐóng gói: Bán theo thanh (Mỗi thanh khoảng 110-140 gram), đóng gói, hút chân không miễn phí.\r\n\r\n- Cắt thái Sashimi miễn phí theo yêu cầu\r\n\r\n- Ship tận nhà với mọi đơn hàng, nhận đặt quà biếu tặng,\r\n\r\n- Tặng kèm miễn phí lá tía tô và củ cải bào ăn kèm.\r\n\r\nDòng sản phẩm:\r\n\r\nCá trích ép trứng màu Vàng - vị tự nhiên\r\n\r\nCá trích ép trứng màu Đỏ - vị gừng hồng\r\n\r\nCá trích ép trứng màu Xanh - vị mù tạt\r\n\r\nBảo quản: Ngăn đá tủ lạnh\r\n\r\nChế biến: Sử dụng cho món shashimi, sushi, salad\r\n\r\nHạn sử dụng: 12 tháng', 12),
(118, 'Trứng cá hồi', '1658592321.jpg', '459000', '', 12),
(119, 'Thịt bò phần ức', '1658858727.jpg', '269000', 'Nhãn hiệu: Gofood\r\n\r\nXuất xứ: Úc\r\n\r\nTrọng lượng trung bình: 300gr/miếng\r\n\r\nThời gian ủ thịt: 35-40 ngày\r\n\r\nCác miếng đã được cắt và hút chân không sẵn\r\n\r\nChế biến: Dùng cho món Steak, nướng, bỏ lò, áp chảo,… ngon nhất khi thưởng thức ở độ chín Medium;\r\n\r\nBảo quản: 14 ngày trong tủ mát (nhiệt độ từ 0 đến 2 độ C) hoặc 6 tháng trong tủ đông (dưới -18 độ C);\r\n\r\nThăn ngoại bò Úc ủ khô cuộn bơ sử dụng thịt thăn ngoại của chú bò, phần phía ngoài xương sống, tình từ vùng thắt lưng đến hông. Với lớp rìa mỡ phía ngoài, thịt thăn ngoại mềm mọng và đậm vị. Thăn ngoại được tiệt trùng rồi ủ với lớp bơ bao quanh tạo nên phần Steak hảo hạng.\r\n\r\nĐặt hàng ngay: 1900 3220', 12);

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
(52, 'Namdev', 'nguyenvannam@gmail.com', '1', '096678999', 'ktx Bách khóa, Hai bà trưng, Hà Nội'),
(53, 'nam', 'namd@gmail.com', '1', '123456', 'ktx  bach khoa'),
(54, 'nam1', 'nam1@gmail.com', '1', '1234', 'ktx'),
(55, 'dfh', 'dfhhhf@g', '1', '1', '111'),
(56, 'nguyen', 'nguyen@gmail.com', '1', '1', '11'),
(57, 'blabla', 'blabla@g', '1', '1', '111'),
(58, 'Nam', 'vclll@g', '1', '1', '111'),
(59, 'fggg', 'fgfgfg@g', '1', '12', 'fgdd'),
(60, 'NamDev', 'namdev@gmail.com', '1', '0966216666', 'ktx bach khoa, ha noi'),
(61, 'Nguyễn Nam', 'nam@gmail.com', '1', '0966126999', 'kí túc xá bách khoa, hà nội'),
(62, 'vcvvcvcv', 'ggeetee@g', '1', '1', '1'),
(63, 'testtt', 'tettt@g', '1', '1', '1'),
(64, 'dsdsdsd', 'dsdsdsd@g', '1', '1', '1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `oder_product`
--
ALTER TABLE `oder_product`
  ADD PRIMARY KEY (`oder_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

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
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `oders`
--
ALTER TABLE `oders`
  ADD CONSTRAINT `oders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `user` (`id`);

--
-- Các ràng buộc cho bảng `oder_product`
--
ALTER TABLE `oder_product`
  ADD CONSTRAINT `oder_product_ibfk_1` FOREIGN KEY (`oder_id`) REFERENCES `oders` (`id`),
  ADD CONSTRAINT `oder_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturers` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
