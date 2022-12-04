-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Dec 04, 2022 at 06:26 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xxistore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `password`, `phone`, `email`, `status`) VALUES
(1, 'VuTienLinh', '7c4a8d09ca3762af61e59520943dc26494f8941b', '0355654117', 'vutienlinh@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brandid` int(11) NOT NULL,
  `brandname` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brandid`, `brandname`, `description`, `image`, `status`) VALUES
(5, 'Le Labo', 'Le Labo là thương hiệu nước hoa Estée Lauder có trụ sở tại thành phố New York. Le Labo \"Tuyên ngôn\" tuyên bố rằng \"tương lai của sự sang trọng nằm trong nghề thủ công\"', '1669194094nuoc-hoa-le-labo.png', 1),
(6, 'Creed', 'Creed là một nhà sản xuất nước hoa đa quốc gia Anh-Pháp, có trụ sở tại Paris, hiện thuộc sở hữu của BlackRock Long Term Private Capital. Công ty ban đầu được thành lập như một nhà may ở London, Anh vào năm 1760 bởi James Henry Creed', '1669194495Creed.png', 1),
(7, 'Nasomatto', 'Nasomatto là một nhà làm hương đến từ nước Ý. Nasomatto trong tiếng Ý có nghĩa là Crazy Note.', '1669194717Nasomatto.png', 1),
(8, 'Yves Saint Laurent', 'Yves Saint Laurent thường viết tắt YSL là thương hiệu thời trang nổi tiếng ở Pháp, được thành lập bởi Yves Henri Donat Mathieu-Saint-Laurent.', '1669194805nuoc-hoa-ysl.png', 1),
(9, 'zoologist', 'Zoologist là nhà nước hoa độc lập của Canada, thành lập bởi Founder Victor Wong vào năm 2013. Hãng kết hợp với những Perfumer nổi tiếng để cho ra đời những sáng tạo độc đáo với concept là các mùi hương lấy ý tưởng từ các loài động vật, tập quán, lối sống, đặc điểm của chúng để có thể giúp chúng ta hiểu hơn, gần gũi hơn với thiên nhiên', '1669194955Hang-nuoc-hoa-Zoologist.png', 1),
(10, 'giorgio armani', 'Giorgio Armani S.p.A được biết đến nhiều hơn dưới tên Armani, là một hãng thời trang nổi tiếng thế giới của Ý trên các lĩnh vực: thiết kế, sản xuất, phân phối và bán lẻ quần áo thời trang, phụ kiện kính, đồng hồ, đồ trang sức, mỹ phẩm, nước hoa, đồ nội thất...được thành lập bởi nhà tạo mẫu, doanh nhân, tỷ phú nổi tiếng Giorgio Armani.', '1669195190giorgio-armani.jpg', 1),
(11, 'tom ford', 'Tom Ford SA là hãng thời trang cao cấp được thành lập bởi nhà thiết kế Tom Ford vào năm 2005. Dòng sản phẩm của hãng có các sản phẩm may sẵn và may đo, cũng như giày dép, phụ kiện và túi xách.', '1669196599nuoc-hoa-tomford.png', 1),
(12, 'dame perfumery', 'Dame Perfumery là nhà nước hoa độc lập của Mỹ, sáng lập bởi hai cha con Jeffrey Dame và Cullen Dame. Jeffrey Dame là một người có ba mươi lăm năm kinh nghiệm trong lĩnh vực sáng tạo nước hoa xa xỉ và ông cũn đã đi đến rất nhiều vùng đất trên thế giới để sáng tạo, thử nghiệm liên quan tới nước hoa.', '1669196663Dame-Perfumery-1.png', 1),
(13, 'imaginary authors', 'Imaginary Authors là một hãng nước hoa Indie thành lập tại Mỹ, được ra đời từ ý tưởng rằng mỗi một mùi hương đều là một tác phẩm nghệ thuật, và mỗi tác phẩm nghệ thuật đều có thể dễ dàng khiến con người ta trở nên phấn khích. Giống như một cuốn sách hay, những mùi hương thú vị có thể truyền cho bạn cảm hứng trong cuộc sống, công việc…', '1669196712Hang-nuoc-hoa-Imaginary-Authors.png', 1),
(14, 'l\'orchestre parfum', 'L’Orchestre là hãng nước hoa Niche cao cấp của Pháp ra đời vào năm 2017, cho tới nay là 5 năm hãng đã kịp cho ra mắt 10 mùi hương. Trong tiếng Pháp, L’Orchestre có nghĩa là dàn nhạc giao hưởng, đây cũng chính là concept mà hãng hướng tới với mong muốn truyền tải thông điệp rằng mỗi mùi hương là một bản giao hưởng của những nốt hương, được blend với nhau một cách cực kì mượt mà. Mỗi mùi hương đều được hãng hợp tác với các nhạc sĩ để cho ra đời một bản nhạc riêng biệt, phù hợp với tinh thần của mùi hương.', '1669196779LOrchestre-Parfums.png', 1),
(15, 'by kilian', 'By Kilian là thương hiệu nước hoa đến từ Paris, được thành lập bởi Kilian Hennessy. Kilian đã trải qua thời thơ ấu của mình trong các hầm rượu của gia đình ở Cognac. Sau khi tốt nghiệp một chương trình truyền thông và nghiên cứu về ngôn ngữ, nơi ông đã viết luận văn tốt nghiệp về ngữ nghĩa của mùi hương trong việc tìm kiếm một ngôn ngữ chung giữa các vị thần và phàm nhân. Kilian tiếp tục nghiên cứu mùi hương, tạo ra các sản phẩm độc đáo, sáng tạo dành cho một số thương hiệu thời trang hàng đầu trong ngành. Năm 2007, Kilian ra mắt nước hoa của riêng mình, phù hợp với truyền thống lâu đời của gia đình, là sản xuất hàng xa xỉ.', '1669196887nuoc-hoa-by-kilian.png', 1),
(16, 'dior', 'Christian Dior S.E, thường được gọi là Dior, là công ty hàng hóa xa xỉ nổi tiếng của Pháp thuộc quyền kiểm soát và điều hành bởi tỷ phú Bernard Arnault, cũng là người đứng đầu tập đoàn hàng hiệu LVMH lớn nhất thế giới. Dior tự mình nắm giữ 42.36% cổ phần và 59.01% quyền biểu quyết trong LVMH.', '1669196992nuoc-hoa-dior.png', 1),
(17, 'orto parisi', 'Orto Parisi, chính là lấy cảm hứng từ cơ thể chúng ta. Mỗi vùng cơ thể lại có một mùi-cơ chế phát mùi riêng biệt. Linh hồn thì quá nhạy cảm và e dè, đôi lúc không thể “ngấm” được hết mùi của cơ thể để hiểu trọn vẹn được cơ thể bản thân. Orto Parisi chính là khu vườn kết hương từ những vùng da thịt thầm kín của chúng ta, một cách bản năng và vẫy vùng nhất, song cũng tinh tế và đồng điệu với tâm hồn nhất.', '1669197251Orto-Parisi.png', 1),
(18, 'gucci', 'The House of Gucci, hay được biết đến ngắn gọn là Gucci, là một biểu tượng thời trang sở hữu bởi Ý và Pháp, một nhãn hiệu đồ da nổi tiếng. Gucci được thành lập vào năm 1921 bởi Guccio Gucci tại Florence, Toscana.', '1669197344nuoc-hoa-gucci-.png', 1),
(19, 'hermès', 'Hermès là một công ty thời trang xa xỉ có trụ sở ở Paris, Pháp. Công ty được sáng lập bởi Thierry Hermès vào năm 1837, ngày nay chuyên sản xuất hàng da, phụ kiện thời trang, nước hoa, hàng xa xỉ, và quần áo may sẵn. Logo của công ty từ những năm 1950, là một chiếc xe ngựa.', '1669197469nuoc-hoa-hermes.png', 1),
(20, 'burberry', 'Thương hiệu Anh lâu đời từ năm 1856 nổi tiếng với áo khoác, khăn choàng len cashmere và họa tiết caro đẹp mắt.', '1669197560Burberry.jpg', 1),
(21, 'chanel', 'Gabrielle Chanel đã sống cuộc đời của mình theo cách mà cô muốn. Những thử thách mà một đứa trẻ mồ côi phải qua trong suốt thời thơ ấu cũng như những thành tựu mà một nữ doanh nhân tài giỏi đạt được đã sinh ra một nhân vật phi thường: táo bạo, tự do và đi trước thời đại.', '1669197801Chanel.png', 1),
(22, 'masque milano', 'Masque Milano được thành lập năm 2012 bởi 2 founder là Alessandro Brun và Riccardo Tedeschi. Hiện tại Masque Milano đã có tổng cộng 21 mùi hương, 16 trong số đó nằm trong bộ sưu tập The Opera of Life, chia làm 4 cảnh, mỗi cảnh sẽ bao gồm 4 mùi hương.', '1669197850Masque-Milano-Logo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(11) NOT NULL,
  `cusname` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `cusname`, `password`, `email`, `phone`) VALUES
(1, 'vothituongvy', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'tuongvy@gmail.com', '0323856945'),
(9, 'dovietbach', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'bach@gmail.com', '0365498752'),
(10, 'sieunhanxanh', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'sieunhanxanh@gmail.com', '0369852147'),
(11, 'apolo', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'apolopass2001@gmail.com', '0123654698');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `order_code` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL,
  `ship_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `order_code`, `status`, `ship_id`) VALUES
(2, '382', 1, 5),
(3, '899', 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `odetailid` int(11) NOT NULL,
  `order_code` varchar(5) COLLATE utf8mb4_bin NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`odetailid`, `order_code`, `product_id`, `quantity`) VALUES
(1, '382', 16, 1),
(2, '382', 17, 3),
(3, '899', 16, 1),
(4, '899', 17, 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `productname` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `price` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `quantity` int(11) NOT NULL,
  `toneperfume` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `topincense` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `middlenote` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `lastnote` varchar(250) COLLATE utf8mb4_bin NOT NULL,
  `capacity` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `description`, `image`, `price`, `quantity`, `toneperfume`, `topincense`, `middlenote`, `lastnote`, `capacity`, `brand_id`, `gender`) VALUES
(0, 'Bergamot 22', 'Bergamote 22 của Le Labo là một mùi hương Woody Aromatic dành cho phụ nữ và nam giới. Bergamote 22 đã được đưa ra vào năm 2006. Hương thơm có hổ phách, xạ hương, bưởi, cỏ vetiver, petitgrain, cam bergamot, vani, hoa cam và tuyết tùng.', '1669198907miycmp-bergamote.png', '6600000', 20, 'hương cam chanh,hương gỗ', 'hổ phách, hương bưởi, xạ hương', 'cam bergamot, cỏ vetiver, hương vani', 'gỗ tuyết tùng, hương hoa cam', 100, 5, 2),
(6, 'The Noir 29', 'Với Le Labo The Noir 29, chỉ cần ngửi nắp thôi cũng thấy rõ hương trà đen ngào ngạt. Là loại trà tươi sáng với chanh và quả sung ban đầu. Nốt giữa trầm hơn nhờ gỗ tuyết tùng, cỏ vetiver và xạ hương. Mùi gỗ già đanh lịch lãm và trầm sang như trong khách sạn 5* vậy. Hương cuối lại thơm ánh lên mùi cỏ tươi ẩm ướt, cùng tàn thuốc lá nức mũi.', '1669199276thenoir29.png', '6200000', 15, 'hương gỗ', 'cam bergamot, lá nguyệt quế, quả sung', 'cỏ hương bài, gỗ tuyết tùng, xạ hương', 'cây thuốc lá, cỏ khô', 50, 5, 2),
(7, 'Santal 33', 'Nước hoa Santal 33 của thương hiệu Le Labo là nước hoa thuộc dòng hương gỗ thơm dành cho cả nam lẫn nữ và đã được giới thiệu vào năm 2011. Người đã thiết kế nên mùi hương nước hoa này chính là Frank Voelkl. Lấy cảm hứng từ Santal 26, một trong những loại nền thơm mà ít người biết đến, một mùi hương thích hợp cho cả nam và nữ. Santal 33 nhắm đến việc truyền tải lại huyền thoại của những chàng cao bồi: Những vùng đất bao la, những cơn gió sa mạc nóng bức, những chiếc yên ngựa phơi nắng, và khói tỏa ra từ những bếp lửa về đêm.', '1669199926santa33.png', '6900000', 10, 'hương gỗ', 'gỗ đàn hương, gỗ tuyết tùng virginia', 'bạch đậu khấu, giấy cói, hoa tím', 'hoa diên vỹ, da thuộc, hổ phách', 100, 5, 2),
(8, 'Aventus', 'Creed Aventus tôn vinh sức mạnh, tầm nhìn và sự thành công, lấy cảm hứng từ cuộc sống đầy giai thoại giữa chiến tranh, hòa bình và sự lãng mạn của hoàng đế Napoleon. Nhắc đến Aventus hẳn những ai yêu thích nước hoa đều phải dành cho nó nhiều mỹ từ, và từ ngữ miêu tả về nó một cách chân thật nhất đó là “vua” của nước hoa. Aventus có hương mở đầu với trái cây tươi mát đầy ngọt ngào của cam bergamot, táo và dứa, và đặc biệt là quả lý chua đen. Lớp hương giữa có pha trộn gia vị cay nồng và hương gỗ để làm dịu bớt vị ngọt của lớp hương đầu, mùi hương chuyển dần sang một hương thơm nam tính hơn. Lớp hương cuối cùng ấm áp và dịu nhẹ với hương vani, hổ phách và rêu sồi khô.', '1669200175aventus.png', '7900000', 5, 'hương gỗ, hương trái cây', 'cam bergamot, quả dứa, quả lý chua đen, táo xanh', 'cây hoắc hương, gỗ bu-lô, hoa hồng, hoa nhài morocco', 'hương vani, long diên hương, rêu sồi, xạ hương', 100, 6, 0),
(9, 'Aventus For Her', 'Đánh dấu kỷ niệm 250 năm thành lập, Creed Aventus For Her được ra đời dưới sự biến tấu đầy ma thuật của Olivier Creed, nối tiếp thành công đầy vang dội của phiên bản For Men. Là bản hòa ca trầm bổng về nữ quyền thời đấy, Aventus For Her với thiết kế sang trọng cùng màu vàng gold phần nào đã toát lên khí chất mạnh mẽ, sôi nổi đầy tham vọng của mình. Mở màn với sự thanh lịch vốn có của phái nữ, Aventus for Her chào mừng ta bằng vũ khúc ngọt mát, trẻ trung kết thành bởi Táo, Chanh và Cam bergamot. Cựa mình thì thầm chút cay thơm nhè nhẹ với Tiêu hồng và Violet, tầng hương đầu đơn giản nhưng không hề đơn điệu đã cho ta những niềm chú ý nhất định đến cô nàng.', '1669200502aventus-for-her.png', '7000000', 10, 'hương gỗ, hương trái cây, hương phấn', 'cam bergamot, cây hoắc hương, chanh vàng, táo xanh, hoa tím, hồng tiêu', 'bồ đề, gỗ đàn hương, hoa hồng, xạ hương', 'hổ phách, hoa ngọc lan tây, hoa tử đinh hương, quả đào, quả lý chua đen', 100, 6, 1),
(10, 'Royal Princess Oud', 'Royal Princess Oud là một hương thơm hoa quyến rũ được tăng cường bởi hoa hồng, violet ngọt ngào và cam bergamot Sicilia, nhường chỗ cho hương thơm ấm áp của vani và hoa diên vĩ. Các nốt hương mang tính biểu tượng của oud và benzoin mang đến lớp hương gỗ khô gợi cảm cho eau de parfum cổ điển và nữ tính này. Nước hoa nữ Royal Princess Oud được cho ra mắt vào năm 2015. Đây là dòng nước hoa Creed thuộc nhóm Oriental Floral (Hương hoa cỏ phương đông) hướng đến độ tuổi trên 25 tuổi. Olivier Creed chính là nhà pha chế ra loại nước hoa này.', '1669200678royal-princess-oud.png', '10950000', 10, 'hương gỗ, hương trái cây, hương hoa', 'cam bergamot, hoa hồng, hoa tím', 'cỏ hương bài, hoa diên vĩ, hoa nhài, hương vani', 'bồ đề, gỗ đàn hương, gỗ gỗ trầm hương', 75, 6, 1),
(11, 'Nasomatto Blamage', 'Nasomatto Blamage là một mùi chủ đạo của gỗ và da thuộc, nghe đã thấy nam tính và mạnh mẽ rồi tuy nhiên thực tế mùi hương này lại không quá nam tính như vậy. Mở đầu của Nasomatto Blamagee là mùi của hương hoa trắng và Aldehydes.', '1669200871Nasomatto-Blamage.png', '3850000', 8, 'da thuộc, hương gỗ, hương khói', 'aldehydes, hoa nhài', 'hương gỗ, hương khói', 'da thuộc, xạ hương', 30, 7, 2),
(12, 'Nasomatto Black Afgano', 'Điều đặc biệt nhất ở chai nước hoa này là gì? Là trong thành phần của Black Afgano có mùi hương của cần sa. Vậy có thực sự như vậy không? Cái opening mạnh và dày mùi, chất lượng thực sự. Có, chắc chắn là có mùi cần trong này, không phải là quá nhiều hay là chủ đạo, nhưng ngửi thấy rõ, và có chút gì đó gợi cảm giác xanh xanh. Cần sa ở đây cảm giác làm khá là hay, tinh tế chứ không bị gắt hay lấn át quá, rất vừa phải. Rõ nhất lại là mùi nhang , có chút gia vị, nhựa cây và gỗ. Một lúc sau, khi mùi hương dịu xuống, mùi của cần cũng phai đi khá nhanh, và nếu ngửi thực sự kĩ thì bạn mới thấy được chứ không rõ như ở opening nữa. Một sự chuyển mùi khá hay ho', '1669201084Black-Afgano.png', '3850000', 11, 'aromatic, cần sa, hương khói, nhựa, oud', 'cần xa, hương lá xanh', 'cà phê, hương gỗ, thuốc lá, resins', 'hương nhang, gỗ trầm hương', 30, 7, 0),
(13, 'Nasomatto Narcotic V.', 'The fragrance is the result of a quest for the overwhelming addictive intensity of female sexual power, tạm dịch là: “Mùi hương là kết quả của việc tìm kiếm một chai nước hoa thực sự quyến rũ dành cho phái đẹp”. Và cá nhân mình thấy rằng mùi hương này thực sự đã giải quyết được bài toán đó. Nó thực sự rất hay, rất nữ tính, rất mềm mại và sang trọng, nhưng cũng cực kì dễ sử dụng', '1669202153Nasnomatto-Narcotic-V.png', '3850000', 12, 'hoa huệ, hoa trắng, xạ hương', 'hoa huệ trắng', 'hoa nhài', 'xạ hương', 30, 7, 1),
(14, 'Y EDP', 'Y EDP là chai nước hoa đa dụng, dễ sử dụng nhất giành cho nam đến từ nhà YSL, tuy nhiên không vì đa dụng mà chai nước hoa này lại bị trở nên nhạt nhòa hay thiếu điểm nhấn đâu nha, mà hiệu năng của nó lại cực kì tốt nữa. Chỉnh chu, nịnh mũi là hai từ mà mình thường dung để mô tả về chai nước hoa đến từ nhà Yves Saint Laurent này. Vừa xịt ra thì ta sẽ thấy rõ nhất là cái cảm giác fresh và xanh đến từ cam chanh và táo xanh, có một cái vibe ngọt khá là nịnh mũi.', '1669202355ysl-saint.png', '3350000', 14, 'hoa quả, hương gỗ', 'cam bergamot, hương gừng, táo xanh', 'cây bách xù, cây phong lữ, lá xô thơm', 'cỏ hương bài, đậu tonka, gỗ truyết tùng, trầm hương', 3350, 8, 0),
(15, 'Libre', 'Được phát hành vào năm 2019, ra mắt cùng với hình ảnh của nữ ca sĩ Dua Lipa, YSL Libre nhanh chóng trở thành một hiện tượng nước hoa của năm và chen chân đứng top 2 trong số những mùi hương bán chạy nhất dịp lễ Giáng sinh ở Anh. Và từ đó cho đến nay, chai nước hoa của nhà Yves Saint Laurent vẫn chưa bao giờ hết hot, nhất là trong các mùa lễ hàng năm.', '1669202525YSL-Libre.png', '3400000', 12, 'hoa trắng, hương hoa', 'cam madarin, hoa oải hương, quả lý chua đen', 'hoa cam, hoa nhài, hoa oải hương', 'hương vani, gỗ tuyết tùng, xạ hương', 90, 8, 1),
(16, 'Black Opium edp', 'Yves Saint Laurent đã cho ra mắt dòng nước hoa mang tên Black Opium, được hãng giới thiệu kèm thông điệp rằng đây là một chai nước hoa theo hướng cổ điển, khơi gợi và khắc họa sự bí ẩn, những góc tối chưa hề được nhắc tới về thương hiệu Yves Saint Laurent. 4 Chuyên gia nước hoa hàng đầu gồm Nathalie Lorson, Marie Salamagne, Olivier Cresp và Honorine Blanc đã hợp tác và cùng sau sáng tạo ra mùi hương này đủ để nói lên sự kỳ vọng của hãng YSL dành cho Black Opium cũng như sự chờ đợi từng ngày để được thử trực tiếp mùi hương này của các tín đồ cá tính nhà YSL.', '1669202716Black_opium_edp.png', '3450000', 14, 'cà phê, hương vani', 'hoa cam neroli, hồng tiêu, quả lê', 'cà phê, cam thảo, hạnh nhân đắng, hoa nhài', 'gỗ cashmere, gỗ tuyết tùng, hương vani, hoắc hương', 90, 8, 1),
(17, 'Chipmunk', 'Ngay từ phần mở đầu, Zoologist Chipmunk đã dễ dàng chiếm trọn cảm tình với cảm giác ngọt ngọt, béo béo ngậy ngậy nutty tới từ hạt dẻ, nutmeg, bạch đậu khấu. Cái vị ngọt ở đây không hóa học mà tự nhiên, chân thật cực kì khiến ta liên tưởng như đang đứng trước một quầy bán các loại hạt ở một phiên chợ đồng quê vậy.', '1669202993Zoologist-Chipmunk.png', '5200000', 8, 'aromatic, hương gỗ, quả và hạt', 'cam madarin, bạch đậu khấu, tiêu hồng, nutmeg, quince', 'earthy notes, gỗ sồi, hạt dẻ, hoa cúc, nhựa thông', 'animal notes, amyris, benzoin, gỗ guaiac, gỗ tuyết tùng, hoắc hương, cỏ hương bài', 60, 9, 2),
(18, 'Panda', 'Panda thực tế có tới 2 phiên bản. Phiên bản vào năm 2014 là một mùi hương đậm nốt tre trúc, xanh xanh, mùi đất ẩm, hơi animalic. Xịt ra nó cho tôi cảm giác như đang đứng trong một khu rừng trúc giống mấy phim Tiếu ngạo giang hồ hồi bé đang xem vậy, thực sự rất chân thực.', '1669203246Zoologist-Panda.png', '5200000', 6, 'xạ hương, hương là xanh, earthy, fruity', 'cam madarin, hoa mộc lan, ozonic, hoa osmanthus, táo xanh, trà xanh', 'amber, cây hoắc hương, hoa nhài, earthy notes, orris, tre', 'civet, vanilla, gỗ đàn hương, xạ hương', 60, 9, 2),
(19, 'Seahorse', 'Một mùi hương biển không tanh không ngái mà nó trong trẻo, mượt mà, trong xanh và lấp lánh một cách cực kỳ tinh tế và độc đáo. Xịt Seahorse, tôi cảm nhận rõ long diên hương đi cùng tảo biển, rong biển rất fresh và dễ chịu, thấy trước mắt một bãi biển còn hoang sơ, làn nước trong vắt, những lọn sóng nối đuôi nhau vỗ vào bờ cát cực kì bình yên.', '1669203430Zoologist-Seahorse.jpg', '5200000', 9, 'amber, aquatic, aromatic', 'ambrette, bạch đậu khấu, thì là', 'hoa cam, hoa huệ trắng, lá xô thơm', 'cỏ hương bài, long diên hương, tảo biển', 60, 9, 2),
(20, 'Acqua Di Gio Pour Homme', 'Lấy cảm hứng từ vẻ đẹp của Pantellerie, nơi anh đã trải qua kỳ nghỉ của mình, Armani đã tạo ra mùi hương của Aqua di Gio cho nam và nữ. Hương thơm cho đàn ông là một mùi hương tự do, đầy gió và nước. Các thành phần được xây dựng của một sự hài hòa hoàn hảo của các ghi chú ngọt và mặn của nước biển và sắc thái của hơi ấm nắng trên da của bạn. Aqua di Gio tràn ngập ánh mặt trời Địa Trung Hải.', '1669203982Gio-white.png', '2500000', 6, 'hương biển, cam chanh', 'cam, cam bergamot, chanh vàng, chanh xanh, hoa cam neroli, hoa nhài, hoa quýt hồng', 'cây hương thảo, cây mộng tê, hoa anh thảo, hoa lan nam phi, ngò thơm, nhục đậu khấu, quả đào', 'gỗ tuyết tùng, hổ phách, hoắc hương, rêu sồi, xạ hương trắng', 100, 10, 0),
(21, 'Acqua di Gio Profondo', 'Giò xanh với tôi là một chai khá hay ho. Cảm giác là một bản trưởng thành hơn, nam tính hơn của Giò trắng vậy. Xịt ra, cảm giác vẫn thế, vẫn là cái DNA quen thuộc như Giò trắng với cam chanh và hương biển. Tuy nhiên, ngửi kĩ sẽ thấy Giò xanh so với Giò trắng thì sẽ thiên hơn chút về hương biển, cảm giác khá là mát mẻ dễ chịu.', '1669204190acqua-di-gio-profondo.jpg', '2950000', 15, 'aromatic, cam chanh, hương biển, hương cay mát', 'cam bergamot, hương nước biển, quả quýt', 'cây bách xù, hoa oải hương, rosemary', 'cây hoắc hương, hỗ phách, hương khoáng, xạ hương', 75, 10, 0),
(22, 'In Love With You Freeze', 'In Love With You Freeze của Giorgio Armani là một mùi hương hoa phương Đông dành cho phụ nữ. Đây là một hương thơm mới. In Love With You Freeze được ra mắt vào năm 2020. Hương đầu là cam bergamot, cherry, lê và quýt; hương giữa là hoa nhài sambac, hoa mẫu đơn và hoa huệ tây; Hương cuối là hoắc hương, cỏ vetiver, xạ hương trắng và hương gỗ.', '1669204377In-love-with-you.png', '2450000', 9, 'hương cam quýt, hương gỗ, hương trái cây', 'cam bergamot, cam leot, quả anh đào, quả lê', 'hoa nhài sambac, hoa mẫu đơn', 'xạ hương, cỏ vetiver, quảng hoắc hương, hương gỗ', 50, 10, 1),
(23, 'Musk Pure', 'Musk pure ra mắt năm 2009 trong bộ sưu tập Musk Pure của nhà Tom Ford. Đây là chai nước hoa với tông hương chính là xạ hương, ylang – ylang và mật ong', '1669204606Tom-ford-musk-pure.png', '5700000', 5, 'hoa trắng, xạ hương', 'cam bergamot, tiêu đen', 'đậu tonka, hoa nhài, linh lan thung lũng', 'benzoin, mật ong, xạ hương', 50, 11, 0),
(24, 'Rose Prick', 'Đón chào 2020. Tom Ford tung chai nước hoa Tom Ford Rose Prick EDP làm nức lòng giới điệu mộ. Không chỉ đổ gục trước thiết kế hồng phấn ngọt ngào, sang trọng. Mà còn ngất ngây với hương thơm kiêu kỳ, nữ tính và hơn hết là sự sang trọng.', '1669204809tomford-rose-brick-orchard.png', '6800000', 9, 'hoa hồng, hương cay ấm', 'tiêu đen, bột nghệ', 'hoa hồng bulgari, hoa hồng tháng năm, hoa hồng turkish', 'đậu tonka, hoắc hương', 50, 11, 1),
(25, 'Lost Cherry', 'Tomford Lost Cherry là hương thơm Cherry chín mọng, nó đỏ ngọt và đậm y như màu sắc Tom Ford khoác lên đứa con tâm huyết chất lượng này. Quấn quýt xung quanh những note cherry khiêu gợi, bạn có thể cảm nhận rõ quế cùng đậu tonka, không rõ ràng như nguyên liệu chính nhưng được nêm nếm vừa đủ để nâng tầm cuốn hút cho thứ quả đỏ mọng kể trên.', '1669205018lost_cherry.png', '7500000', 11, 'hạnh nhân, hương trái cây', 'hạnh nhân, quả cherry, rượu vang', 'hoa hồi, hoa nhài sambac, quả cherry, quả mận', 'đậu tonka, quảng hoắc hương, gừng, gỗ tuyết tùng, đinh hương', 50, 11, 2),
(26, 'Minty Man', 'Minty Man bởi Dame Perfumery là một trong những chai nước hoa với chủ điểm bạc hà hay nhất mà tôi từng được thử. Bạc hà ở chai này làm rất tốt, để diễn giải bằng lời thì khó, nhưng cảm giác nó làm vừa đủ.', '1669205226Dame-Minty-Man.png', '2200000', 14, 'aromatic, hương cay mát, hương lá xanh', 'cam bergamot, là bạc hà', 'hoa hồng, hoa nhài, violet', 'cardamon, tra mate', 100, 12, 0),
(27, 'The Soft Lawn', 'The Soft Lawn có lẽ là một trong những mùi hương bám sát concept câu chuyện nhất trong những chai nước hoa của Imaginary Authors. Xịt chai nước hoa này lên, có cảm tưởng trước mắt ta đang là một trận tennis nảy lửa và hấp dẫn. Mùi hương của cỏ hương bài và rêu sồi quyện với nhau lên một cảm giác xanh xanh, hơi earthy tựa như mùi sân cỏ của những trận đấu Wimbledon.', '1669205427The-Soft-Lawn.png', '3200000', 7, 'hương gỗ, lá xanh', 'hương bưởi, nguyệt quế, thường xuân', 'bóng tennis', 'cây rều sồi, cỏ hương bài', 50, 13, 2),
(28, 'L’Orchestre Electro Limonade', 'Bạn đã bao giờ từng thử một chai nước hoa có hiệu ứng “sủi” giống hệt lúc bạn mới mở một chai nước có ga chưa? Đó chính là cái cách mà L’Orchestre làm tôi bất ngờ với Electro Limonade. Xịt lên da, Electro Limonade khiến tôi liên tưởng ngay tới việc cho một viên C sủi vào một cốc nước lạnh.', '1669205644Lorchestre-Electro-Limonade.png', '4800000', 7, 'aromatic, cam chanh, hương gỗ, hương lá xanh', 'cam bergamot, là bạc hà, chanh vàng, quả quýt', 'hoa cam, rhubarb', 'amber, hương nhang, cỏ hương bài', 100, 14, 2),
(29, 'Good Girl Gone Bad', 'là dòng nước hoa mới của thương hiệu By Kilian.', '1669205821good-girl-gone-bad.png', '6700000', 6, 'hương trắng, hương hoa', 'hoa hồng tháng năm, hoa mộc, hoa nhài', 'hoa huệ, hoa thủy tiên', 'gỗ tuyết tùng, hổ phách', 50, 15, 2),
(30, 'Sauvage Elixir', 'Điều đầu tiên tôi nhận ra khi vừa xịt Sauvage Elixir lên tay, đó là hương citrus từ cam chanh bưởi, tuy nhiên nó không kiểu quá fresh như Sauvage bản gốc, mà có vẻ đầm hơn và ít hơn và chúng dịu đi khá là nhanh. Bên cạnh đó, ta sẽ cảm nhận rất rõ một cảm giác ấm ấm và cay cay, hơi ngọt nhẹ tới từ gia vị của tiêu, quế và bạch đậu khấu.', '1669205991Nuoc-hoa-Dior-Sauvage.png', '3.800.000', 8, 'cay ấm, hương cay mát, hương gỗ', 'bạch đậu khấu, hương bưởi, nhục đậu khấu, quế', 'hoa oải hương', 'amber, gỗ đàn hương, cỏ hương bài, hoắc hương', 60, 16, 0),
(31, 'Orto Parisi Megamare', '“Quái vật biển cả”, “Chiến thần bám tỏa”, “Đại đội trưởng trung đoàn Ambroxan”, vân vân và mây mây là những điều mà nếu để chia sẻ vui vui về Orto Parisi Megamare thì tôi sẽ nhận xét như vậy. Còn khi nghiêm túc, thì tôi sẽ phải nhận định rằng đây là một trong những mùi hương theo hướng aquatic hay nhất từng được sản xuất.', '1669218701Orto-Parisi-Megamare.png', '5.300.000', 8, 'hương biển', 'hương nước biển, tảo biến, muối biển', 'hương ambroxan', 'xạ hương', 50, 17, 2),
(32, 'Bamboo', 'Gucci ra mắt nước hoa mới Gucci Bamboo vào mùa xuân 2015, được đặt tên theo bộ sưu tập phụ kiện đã có sẵn. Hương thơm rõ ràng phản ánh sự tự tin và nữ tính. Nó được thiết kế cho phụ nữ hiện đại của nhân vật là nhiều mặt; hương thơm nồng nàn, duyên dáng và dịu dàng cùng một lúc. Thành phần là hoa – gỗ.', '1669218990Bamboo-EDP.png', '3.200.000', 9, 'hoa trắng, hương cam quýt', 'cam bergamot', 'hoa cam, ylang ylang', 'gỗ đàn hương, hổ phách, vani tahiti', 75, 18, 1),
(33, 'Bloom Acqua Di Fiori', 'Giống như Gucci Bloom, phiên bản mới được tạo ra bởi nhà chế tạo nước hoa Alberto Morillas , người đã lấy thành phần hương hoa tinh tế ban đầu của hoa huệ, hoa nhài và hoa kim ngân Trung Quốc (cây leo Rangoon), cây nho có hoa màu đỏ được công chiếu trong nước hoa, và làm cho nó tươi hơn bằng cách giới thiệu các hiệp ước xanh lá.', '1669219781Bloom-acqua-Di-Fiori.png', '2.400.000', 7, 'hoa trắng, hương lá xanh, hương thơm', 'cam bergamot, chanh vàng, hương lá galbanum', 'cây kim hoa hoa, freesia, hoa huệ, hoa nhài', 'gỗ đàn hương, xạ hương', 50, 18, 1),
(34, 'Twilly d’Hermès Eau Poivrée', 'Một vẻ đẹp vẫn lãng mạn, vẫn tươi tắn, nhưng thêm phần tròn đầy chín chắn, và đôi phần phản loạn của tuổi thanh xuân. Những nốt hương đã làm nên thành công của Twilly đã hoàn toàn bị thay thế bởi một tổ hợp mới: tiêu hồng, hoa hồng và hoắc hương đã trở thành những nhân vật chính của bữa tiệc tuổi trưởng thành.', '1669219922Twilly-poivree.png', '2.950.000', 9, 'hoa hồng', 'hồng tiêu', 'hoa hồng', 'hoắc hương', 85, 19, 1),
(35, 'L’Ombre des Merveilles edp', 'L’Ombre Des Merveilles mở ra một bầu trời đen huyền bí bao la với những vì sao lấp lánh toả sáng bên dưới là bờ biển sóng vỗ rì rào. Chai nước hoa nhà Hermes đưa những trái tim cô đơn đến những bến bờ hạnh phúc với hương thơm mặn mòi của chút gió biển, ấm áp của những cái xiết tay đan xen vào nhau và những cái ôm thật chặt và tình yêu len lỏi dịu dàng trong trái tim.', '1669220045l-ombre-des-merveilles.png', '3.000.000', 7, 'trà xanh', 'trà xanh', 'hương khói', 'đậu tonka', 100, 19, 1),
(36, 'My Burberry EDP', 'My Burberry được lấy cảm hứng từ chiếc áo choàng màu nude kinh điển của nhà Burberry, được mặc trong một ngày có nắng đẹp của mùa xuân, đứng nghiêng mình rạng rỡ, tỏa sáng cùng những bông hoa trong một khu vườn kiểu mẫu được thiết kế dành cho những ngôi nhà điển hình ở London.', '1669220293burberry-edp.png', '2.800.000', 9, 'hương cam quýt, hương hoa', 'cam bergamot, chanh vàng, quả bưởi, quả quýt hồng', 'hoa lan nam phi, cây phong lữ, mộc qua, quả đào', 'da thuộc, hoa hồng, hoắc hương, xạ hương', 100, 20, 1),
(37, 'Mr. Burberry EDT', 'Burberry giới thiệu nước hoa mới Mr Burberry vào tháng 4 năm 2016, là phiên bản nam tính của My Burberry từ năm 2014. Người tạo ra dòng sản phẩm này là nước hoa Francis Kurkdjian .Thành phần được công bố là gỗ – thảo dược. Thành phần của nó được lấy cảm hứng từ truyền thống của nước hoa Anh.', '1669220524mr-burberry-edt.png', '2.800.000', 8, 'hương cay mát, hương gỗ, hương thơm', 'cây bạc hà, hoa huệ trắng, hương bưởi, thảo quả', 'gỗ tuyết tùng, hoa oải hương, lá bạch dương, nhục đậu khấu', 'cỏ hương bài, gỗ đàn hương, gỗ guaiac, rêu sồi', 100, 20, 0),
(38, 'Bleu De Chanel Parfum', 'Xuất hiện với cường độ cao nhất của nước hoa BLEU DE CHANEL, mạnh mẽ và tinh tế, BLEU DE CHANEL Parfum cho nam giới bộc lộ bản chất quyết tâm và nam tính mạnh mẽ. BLEU DE CHANEL Parfum đại diện cho màu sắc của tự do. BLEU DE CHANEL một hương thơm tiết lộ khí chất trong các nồng độ: Eau de toilette từ năm 2010, Eau de parfum từ năm 2014, Parfum năm 2018.', '1669220710bleup.png', '4.200.000', 12, 'hương cam quýt, hương gỗ', 'cam bergamot, lá bạc hà, vỏ chanh', 'cây phong lữ, hoa oải hương, hương dừa', 'đậu tonka, gỗ đàn hương, gỗ tuyết tùng, iso e super', 100, 21, 0),
(39, 'Chanel Coco Mademoiselle Intense', 'Nước hoa COCO MADEMOISELLE Eau de Parfum Intense của hãng Chanel được lấy cảm hứng từ những người phụ nữ thích tự do, tự tin và táo bạo trong cách thể hiện cảm xúc, nhưng vẫn luôn toát lên sự quyễn rũ và hấp dẫn đối phương một cách khó đoán. COCO MADEMOISELLE Intense thuộc nhóm hương thơm phương đông, với note hương chính là Cây hoắc hương, Cam bergamot Calabria và Cam Sicili', '1669220902mademoselle-intensepng.png', '4.700.000', 9, 'hoắc hương, hương balsamic, hương cam quýt', 'cam bergamot, chanh vàng, quả cam sicili', 'hoa cam, hoa nhài, hương trái cây', 'đậu tonka, quảng hoắc hương, hương vani, xạ hương', 100, 21, 1),
(40, 'Russian Tea', 'Russian Tea sẽ là một mùi hương với chủ đạo là trà đen, da thuộc quyện với khói. Phần mở đầu của chai nước hoa này có lẽ không phải là một mùi trà dễ chịu và an toàn với đại đa số người dùng. Dễ nhận biết nhất là da thuộc cùng chút khói, trà đen hơi đăng đắng lên hiệu ứng animalic mùi hơi kiểu cao su cháy, xăng xộc thẳng vào mũi.', '1669221107Russian-Tea.png', '4.200.000', 9, 'da thuộc, hương lá xanh, hương khói', 'hương nhang, da thuộc, hoa mộc lan', 'lá bạc hà, quả mâm xôi, trà đen, gỗ brich', 'tiêu đen, hương labdanum', 35, 22, 0),
(41, 'Lost Alice', 'Ở Lost Alice, ta cảm nhận được rất rõ nốt hương sữa đi kèm với cam bergamote bùng nổ ngay từ khi vừa mới xịt. Chỉ sau vài phút, cam dịu xuống, sữa lên ấm ấm ngọt ngọt, ngậy cùng với gỗ đàn hương mang cái nét creamy tạo hiệu ứng mùi tựa như trước mắt ta đang là một khay bánh ngọt với đủ loại bánh từ bánh kem, maccaron đến cupcake.', '1669221274Masque-Milano-Lost-Alice.png', '4.200.000', 8, 'hương gỗ, lactonic, hương phấn', 'cam bergamot, ambrette, lá xô thơm, tiêu đen', 'cà rốt, hoa hồng trắng, orris, trà đen', 'gỗ đàn hương, milky notes', 35, 22, 1),
(42, 'Allure Homme Sport Eau Extreme', 'Chanel vừa cho ra mắt dòng nước hoa nam – Allure Homme Sport Eau Extreme và bổ sung thêm vào bộ sưu tập nổi tiếng của Allure Homme. Sản phẩm đầu tiên của dòng này được tung ra vào năm 1999 và không lâu sau đó 1 vài phiên bản khác đã được xuất hiện như: Allure Homme Eau Fraichissante Pour l`Ete, Allure Homme Edition Blanche, Allure Homme Sport and Allure Homme Sport Cologne Sport.', '1669436378Allure-Homme-Sport.png', '3.800.000', 6, 'hương balsamic, hương thơm', 'Cây bạc hà, lá bách, lá xô thơm, quả quýt hồng', 'tiêu', 'đậu tonka, gỗ đàn hương, gỗ tuyết tùng, xạ hương', 100, 21, 0),
(43, 'Allure Homme Sport EDT', 'Kế thừa đàn anh Allure Homme sau 5 năm tung hoành chính là cậu em Allure Homme Sport EDT đình đám của thương hiệu Chanel . Nếu bạn cho rằng nước hoa nam Allure Homme vẫn chưa làm bạn hài lòng thì Allure Homme Sport EDT sẽ là câu trả lời có sức thuyết phục mạnh nhất.', '1669437072allureedt-home-edt.png', '3.500.000', 9, 'hương an đê hít, hương cam quýt', 'hương nước biển, quả cam, quả quýt hồng, hương an đê hít', 'gỗ tuyết tùng, hoa cam, tiêu', 'đậu tonka, hổ phách, hương vani, xạ hương trắng', 100, 21, 0),
(44, 'Sauvage Parfum', 'Dior sauvage Parfum là phiên bản mới nhất trong bộ sưu tập nước hoa của nhà Dior trong dòng Sauvage, tiếp nối sự thành công của các phiên bản Sauvage EDT và Sauvage EDP. Một phiên bản mới được thiết kế đậm đà hơn nhưng vẫn giữ nguyên các ADN cốt lõi làm nên thương hiệu “Lady Killer” đình đám của Dior Sauvage.', '1669438264Sauvage-parfum.png', '3.850.000', 9, 'aromatic, cam chanh, hương balsamic', 'cam bergamot, cam madarin, elemi', 'gỗ đàn hương', 'đậu tonka, hương vani, nhũ hương', 100, 16, 0),
(45, 'Dior Homme Intense', 'Dior Homme Intense được ví như là một kẻ gây nghiện, gây nghiện với chính người dùng, và lây lan cái “nghiện” đó cho cả những người xung quanh. Một ngày mưa gió, lạnh lẽo, tỉnh giấc cùng bầu trời xám xịt đen sì ngoài kia, cách tốt nhất để làm hài lòng bản thân là xịt một shot Dior Homme Intense vào cơ thể và đi ngủ tiếp, như thể nó sẽ mang lại sự thư giãn tuyệt đối, bình yên vô điều kiện cho bất kỳ chàng trai nào', '1669438701dior-homme-intense.png', '3.200.000', 12, 'hương hoa cỏ, gỗ xạ hương', 'hoa oải hương', 'hoa diên vĩ, quả lê', 'cỏ ventiver, gỗ tuyết tùng,', 100, 16, 0),
(46, 'Dior Joy', 'Joy by Dior xuất hiện vào cuối tháng 8 năm 2018 với mùi hương đại diện cho những niềm vui của cuộc sống, như cái tên hãng đặt cho cô nàng này “Joy”. Là một mùi hương chứa năng lượng, sự sống, hạnh phúc và của những “tâm trạng tốt”, đó là cách hãng giới thiệu Joy by Dior vào ngày ra mắt sản phẩm mới này.', '1669439688Dior-Joy.png', '3.800.000', 6, 'hoa quả, hương gỗ', 'cam bergamot, quả quýt hồng', 'hoa hồng grasse, hoa nhài, quả đào, quả lý chua đen', 'gỗ đàn hương, gỗ tuyết tùng, xạ hương trắng', 90, 16, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipid` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(10) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipid`, `name`, `address`, `phone`, `email`, `method`) VALUES
(1, 'vutienlinh@gmail.com', '321 Hoàng Diệu 2', '0325465236', 'vutienlinh@gmail.com', 'cod'),
(2, 'sieunhangao', '321 sieu nhân đỏ', '0325874136', 'sieunhangao@gmail.com', 'vnpay'),
(3, 'sieunhando', '321 sieu nhân đỏ hai', '0321455698', 'sieunhando@gmail.com', 'cod'),
(4, 'sieunhanvang', '21 sieu nhan vang', '0321456789', 'sieunhanvang@gmail.com', 'cod'),
(5, 'sieunhanlam', '321 sieu nhan lam', '0365478921', 'sieunhanlam@gmail.com', 'cod'),
(6, 'sieunhanlam@gmail.com', '321 sieu nhan lam', '0355654117', 'apolopass2001@gmail.com', 'cod');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brandid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`odetailid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brandid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `odetailid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
