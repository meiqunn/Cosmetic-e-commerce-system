-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2022 at 07:52 PM
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
-- Database: `52hz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `admin_email` varchar(200) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL,
  `admin_phone` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_phone`) VALUES
(101, 'Lee', 'David@52Hz.mail.com', 'Dav100', '0135698555'),
(102, 'Shaun', 'Shaun@52Hz.mail.com', 'Sha432', NULL),
(103, 'Admin3', '', '123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone_number` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `status` text NOT NULL DEFAULT 'None'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`name`, `email`, `phone_number`, `subject`, `message`, `status`) VALUES
('kong', 'kongggg02@gmail.com', '01136189978', 'applying for internship', 'im from mmu melaka and wish to be a part of your organization', 'none'),
('hii', '1234@hotmail.com', '0134567890', 'hi', 'i just want to make a friend with you, nice to meet you.', 'none'),
('kong', 'kongggg02@gmail.com', '01136189978', 'applying for internship', 'im from mmu melaka and wish to be a part of your organization', 'none'),
('hii', '1234@hotmail.com', '0134567890', 'hi', 'i just want to make a friend with you, nice to meet you.', 'none'),
('KOng', '1201201336@student.mmu.edu.my', '01157588163', 'Hi', 'Is good', 'none'),
('Khoo', '1201201336@student.mmu.edu.my', '012-628-8908', 'Hi', 'WOWW', 'none'),
('Khoo', 'seankhoo2002@gmail.com', '01157588163', 'Hi', 'Very goooooddd', 'none'),
('David', 'seankhoo2002@gmail.com', '01157588163', 'Hi', 'Very Goooooodddd', 'none'),
('Khoo', 'seankhoo2002@gmail.com', '01157588163', 'Great', 'Very Goodd', 'None');

-- --------------------------------------------------------

--
-- Table structure for table `customer_review`
--

CREATE TABLE `customer_review` (
  `review_id` int(11) NOT NULL,
  `product_type_name` text NOT NULL,
  `review` text NOT NULL,
  `customer_name` text NOT NULL,
  `time` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_review`
--

INSERT INTO `customer_review` (`review_id`, `product_type_name`, `review`, `customer_name`, `time`, `product_id`) VALUES
(56, '469 PANTONE', 'color special. good', 'Bonjour', '2022-03-11 16:21:30', 63),
(58, '469 PANTONE', 'not bad. color beautiful!', 'kong', '2022-03-11 16:47:04', 63),
(59, '469 PANTONE', 'suggest to buy', 'lee', '2022-03-11 16:56:04', 63),
(60, '479 C PANTONE ', 'best!', 'kong', '2022-03-12 13:17:38', 63),
(61, '10 Black', 'Suitable for me! Good.', 'anymous', '2022-03-15 09:42:22', 26),
(62, '100 FOREVER NUDE', 'kmasmakmska', 'Sean', '2022-03-22 03:48:33', 1),
(63, '04_AUBURN', 'jansjanjsanjsnaj', 'Khoo', '2022-03-22 03:52:20', 29),
(64, 'customize lipstics', 'Good', 'Khoo', '2022-03-22 06:40:55', 999),
(65, '823 SPECIAL RED', 'Goodd', 'Hui', '2022-03-24 07:39:26', 1),
(66, '50PA-NC37', 'Besttt', 'Hui', '2022-03-26 00:22:39', 56),
(69, '032_DARKBROWN', 'Woww very good', 'Lopp', '2022-04-16 16:19:58', 29);

-- --------------------------------------------------------

--
-- Table structure for table `customize`
--

CREATE TABLE `customize` (
  `customize_id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customize`
--

INSERT INTO `customize` (`customize_id`, `color`, `payment_id`) VALUES
(1, '0', 172),
(2, '#923a3a', 173),
(3, '#de1749', 185),
(4, '#de1749', 186),
(5, 'rgb(204, 19, 66)', 190),
(6, 'rgb(204, 19, 66)', 191),
(7, '#900404', 192),
(8, '#900404', 193),
(9, 'rgb(204, 19, 66)', 194),
(10, '#d51a1a', 198),
(11, '#941010', 199),
(12, '#cf3030', 200),
(13, '#cf3030', 201),
(14, '#bc2424', 202),
(15, 'rgb(204, 19, 66)', 203),
(16, 'rgb(204, 19, 66)', 205),
(17, '#981f1f', 206),
(18, 'rgb(204, 19, 66)', 214),
(19, 'rgb(204, 19, 66)', 215),
(20, '#c22e69', 217),
(21, '#c82828', 219),
(22, 'rgb(204, 19, 66)', 222),
(23, '#c33c3c', 223),
(24, '#aa5555', 226),
(25, '#aa5555', 227),
(26, 'rgb(204, 19, 66)', 231),
(27, 'rgb(204, 19, 66)', 232),
(28, 'rgb(204, 19, 66)', 233),
(29, '#00f5e4', 238),
(30, 'rgb(204, 19, 66)', 240),
(31, '#d91212', 241),
(32, '#bd0000', 243),
(33, '#882525', 247);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `credit_card_no` text DEFAULT NULL,
  `credit_card_expired` int(11) DEFAULT NULL,
  `credit_card_cvv` int(3) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `shipping_id` int(10) NOT NULL,
  `credit_card_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `credit_card_no`, `credit_card_expired`, `credit_card_cvv`, `user_id`, `shipping_id`, `credit_card_name`) VALUES
(206, '5666 6666 6666 6666', 2022, 258, 4, 216, 'Kong'),
(207, '9888 8888 8888 8888', 2022, 300, 4, 217, 'kong'),
(208, '5555 5555 5555 5555', 2022, 456, 4, 218, 'Khoo'),
(209, '5555 5555 5555 5555', 2022, 300, 4, 219, 'Kong'),
(210, '5555 5555 5555 5555', 2022, 300, 4, 220, 'Khoo'),
(211, '1111 1111 1111 1111', 2022, 300, 4, 221, 'Kong'),
(216, '1155 2266 9988 77', 2022, 123, 114, 237, 'KOng'),
(217, '1333 3333 3333 3333', 2022, 300, 114, 238, 'kong'),
(218, '1555 5555 5555 5555', 2022, 300, 114, 239, 'Khoo'),
(219, '4555 5555 5555 5555', 2022, 300, 114, 241, 'Khoo'),
(220, '5555 5555 5555 5555', 2022, 300, 116, 242, 'Khoo'),
(221, '4555 5555 5555 5555', 2022, 300, 116, 243, 'Khoo'),
(222, '4555 5555 5555 5555', 2022, 320, 116, 244, 'Khoo'),
(223, '4555 5555 5555 5555', 2022, 500, 114, 245, 'Khoo'),
(228, '5222 2222 2222 2222', 2022, 300, 123, 253, 'Khoo'),
(229, '5222 2222 2222 2222', 2022, 500, 123, 254, 'Khoo'),
(230, '5009 6852 3666 6666', 2022, 500, 123, 255, 'Khoo'),
(231, '6444 4444 4444 4444', 2022, 300, 116, 256, 'Kong'),
(232, '5000 0000 0000 0000', 2022, 500, 116, 257, 'Khhooo'),
(233, '7777 7777 7777 7777', 2022, 300, 113, 258, 'jjbhbhb'),
(234, '2666 6666 6666 6666', 2022, 600, 116, 259, 'Khoo'),
(235, '6666 6666 6666 6666', 2022, 600, 116, 260, 'Khoo'),
(236, '5555 5555 5555 5555', 2022, 500, 116, 261, 'kkkk'),
(237, '4848 4152 4152 6523', 2022, 521, 116, 263, 'niamawei'),
(238, '4512 4512 5151 5151', 2022, 152, 116, 265, 'niama'),
(239, '4545 4545 4545 4545', 2022, 152, 116, 266, 'niama'),
(240, '5555 5555 5555 5555', 2022, 500, 116, 267, 'Khoo'),
(241, '6666 6666 6666 6666', 2022, 600, 116, 268, 'Khoo'),
(242, '5000 0000 0000 0000', 2022, 500, 116, 269, 'Khoo'),
(243, '5000 0000 0000 0000', 2022, 500, 116, 270, 'Khoo'),
(244, '5555 5555 5555 5555', 2022, 600, 116, 271, 'Khoo'),
(245, '4545 4545 4545 4545', 2022, 566, 125, 272, 'Kong'),
(246, '4444 4444 4444 4444', 2022, 333, 4, 273, 'gb'),
(247, '5444 4444 4444 4444', 2022, 444, 4, 274, 'fg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(2) NOT NULL,
  `product_category` varchar(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `product_price` double NOT NULL,
  `product_isDelete` int(11) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `new_arrive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_category`, `product_name`, `product_description`, `product_price`, `product_isDelete`, `img_dir`, `new_arrive`) VALUES
(1, 'lipstick', 'ROUGE DIOR FOREVER LIQUID LIPSTICK', 'WaterProof Liquid Lipstick - UltraPigmented Matte - Very Nice Comfort  ', 120, 0, '1650044250_ROUGE DIOR FOREVER LIQUID_100-Forever-Nude.jpg', 0),
(2, 'lipstick', 'ROUGE DIOR COUTURE COLOR REFILLABLE LIPSTICK', '4 Finishes - Floral Lip Care - Comfort and Long Wear', 125, 0, '1650045759_refillable_lipstick_762-Dioramour Metallic Finish.jpg', 0),
(3, 'lipstick', 'M.A.C POWER KISS SERIES LIPSTICK', 'Long wearing, full coverage, matte finish.', 183, 0, 'SATIN LIPSTICK-RETRO.jpg', 0),
(4, 'lipstick', 'M.A.C POWER KISS SERIES LIPSTICK - PINK NOUVEAUA', 'Long wearing, full coverage, matte finish with special pink', 160, 0, 'SATIN LIPSTICK-PINK NOUVEAU.jpg', 0),
(5, 'lipstick', 'M.A.C LOVE ME SERIES LIQUID LIPCOLOUR', 'a  rich and creamy liquid lip colour with a satin finish that wears for 12 hours.', 155, 0, 'PATENT PAINT LIP LACQUER-RED ENAMEL.jpg', 0),
(6, 'eyebrow', 'LANCOME POWDERY EYEBROW PENCIL', 'a self-propelling and self-sharpening water-resistant brow', 40, 0, 'Brow Shaping Powdery Pencil_10Black.jpg', 0),
(7, 'eyebrow', 'LANCOME EYEBROW SHAPING POWDERY PENCIL', 'Lancome - EyeBrow Powdery Pencil_02 Dark_Blonde', 40, 0, 'Brow Shaping Powdery Pencil_o2DarkBlonde.jpg', 0),
(8, 'eyebrow', 'DIORSHOW CRAYON SOURCILS POUDRE EYEBROW', 'Waterproof eyebrow pencil - natural finish - with sharpener', 55, 0, '1650045968_eyebrow_032_dark-brown.jpg', 0),
(9, 'eyebrow', 'DIORSHOW KABUKI BROW STYLER EYEBROW', 'Creamy Brow Pencil - Triangular Tip - Structure and Define - 12h Wear*', 55, 0, '1650046118_eyebrow_031.jpg', 0),
(10, 'eyebrow', 'M.A.C SHAPE & SHADE BROW TINT-LINGERING', 'a dual-ended product designed to set brows with ease by fusing the power of liquid and powder in one product.', 100, 0, '1650046276_SHAPE & SHADE BROW TINT-LINGERING.jpg', 0),
(11, 'foundation', 'DIOR SKIN GLOW CUSHION FOUNDATION POWDER', 'Fresh Foundation - 24h Wear and Hydration - Radiant Finish', 68, 0, '1650046384_foundation_2N-Neutral.jpg', 0),
(12, 'foundation', 'DIOR FOREVER SERIES LIQUID FOUNDATION', 'Clean Matte Foundation - 24h Wear - No Transfer - Concentrated Floral Skincare', 70, 0, '1650046478_DIOR FOREVER SKIN GLOW_3N-Neutral.jpg', 0),
(13, 'foundation', 'M·A·C STUDIO FIX COMPLETE 15/PA+POWDER FOUNDATION ', 'moist, smooth and silky powder foundation that blurs imperfections', 100, 0, '1650046533_STUDIO FIX COMPLETE COVERAGE CUSHION COMPACT SPF 50PA-NC37.jpg', 0),
(14, 'foundation', 'LANCOME VISIONNAIRE SERIES FOUNDATION', 'Visionnaire Skin Teint perfects Dwi Make-up SPF 20', 200, 0, 'Lancome Visionnaire Skin Teint perfects Dwi Make-up SPF 20.png', 0),
(15, 'foundation', 'M·A·C STUDIO FACE AND BODY FOUNDATION 120 ML', 'a lightweight foundation that delivers a satin finish and sheer coverage.', 120, 0, 'M_A_C STUDIO FACE AND BODY FOUNDATION 120 ML-C1.jpg', 0),
(16, 'foundation', 'M·A·C STUDIO FACE AND BODY FOUNDATION 50 ML-C4', 'a lightweight foundation that delivers a satin finish and sheer coverage.', 100, 0, 'M_A_C STUDIO FACE AND BODY FOUNDATION 50 ML-C4.jpg', 0),
(17, 'foundation', 'LANCOME RENERGIE SERIES FOUNDATION', 'Renergie Lift Makeup SPF20', 120, 0, 'Lancome Renergie Series Foundation.png', 0),
(18, 'eyeshadow', 'LANCOME HYPNOSE 5-COLOR EYESHADOW PALETTE', 'mix and match between a wide selection of eyeshadow shades&textures can applied wet or dry for endless possibilities.', 100, 0, 'Hypnose 5-Color Eyeshadow Palette- 14 Smokey Chic.jpg', 0),
(19, 'eyeshadow', 'DIOR 5 COULEURS COUTURE - NEW LOOK EYESHADOW', 'Eye Palette - 5 Eyeshadows - Engraved Houndstooth Pattern', 100, 0, '1650046611_eyeshadow_739.jpg', 0),
(20, 'eyeshadow', 'MAC EYE SHADOW X 9 BURGUNDY TIMES NINE', 'a well-edited palette featuring a colour wave of amber hues', 100, 0, 'EYE SHADOW X 9 BURGUNDY TIMES NINE.jpg', 0),
(21, 'lipstick', 'LANCOME L\'ABSOLU ROUGE INTIMATTE LIPSTICK', 'Matte Veil Lipstick - Plush Comfort - Bare Lips Feel', 130, 0, 'lancome_lipstick - Matte, Liquid & Long Lasting Lipstick.jpg', 0),
(22, 'eyebrow', 'Lancome Sourcils EyeBrow Gel-02', 'Lancome Sourcils EyeBrow Gel-02', 60, 0, 'Sourcils Brow Gel-02.jpg', 1),
(23, 'lipstick', 'Lancome Pink Lipstick', 'lancome labsolu rouge lipstick dramamatte 370pink seduction', 120, 0, 'lancome-labsolu-rouge-lipstick-drama-matte-370-pink-seduction-1.jpg', 1),
(24, 'lipstick', 'DIOR Rough lipstick set', 'DIOR Rough lipstick set', 190, 0, 'Deluxe Collection - 2 Lipsticks - Couture Color & Floral Lip Care.jpg', 1),
(25, 'eyeshadow', 'M.A.C EXTRA DIMENSION EYE SHADOW', 'M.A.C EXTRA DIMENSION EYE SHADOW', 100, 0, 'EXTRA DIMENSION EYE SHADOW.jpg', 1),
(999, '', 'customize lipstics', '', 99, 0, 'images/Layer1copy3.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `product_type_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `product_type_name` varchar(255) NOT NULL,
  `product_type_price` int(255) NOT NULL,
  `img_dir` varchar(255) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `new_arrive` int(11) NOT NULL,
  `product_isDelete` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`product_type_id`, `product_id`, `product_type_name`, `product_type_price`, `img_dir`, `product_stock`, `new_arrive`, `product_isDelete`) VALUES
(122, 1, '722 Red', 120, 'Transfer-Proof Liquid Lipstick - Ultra-Pigmented Matte - Weightless Comfort_200-ForeverDream.jpg', 10, 0, 0),
(123, 1, '626 FOREVER FAMOUS VELVET ', 120, 'lipstick_liquid_626-Forever-Famous.jpg', 99, 0, 0),
(124, 1, '100 FOREVER NUDE', 120, 'ROUGE DIOR FOREVER LIQUID_100-Forever-Nude.jpg', 90, 0, 0),
(130, 2, '762 DIORAMOUR METAL', 125, 'refillable_lipstick_762-Dioramour Metallic Finish.jpg', 95, 0, 0),
(131, 2, '999 MATTE FINISH', 125, 'lipstick_999-MatteFinish.jpg', 95, 0, 0),
(132, 2, '724 TENDRESSE MATTE FINISH', 300, 'lipstick_724-Tendresse Matte Finish.jpg', 98, 0, 0),
(133, 2, '000 MATTE FIINISH', 125, 'lipstick_000.jpg', 99, 0, 0),
(140, 21, '003 SPECIAL RED VELVET ', 130, 'lancome_lipstick - Matte, Liquid & Long Lasting Lipstick.jpg', 100, 0, 0),
(141, 21, '008 QUEEN RED', 130, 'TINTED LIP BALM - PLUMPING, MOISTURISING - PEPPERY MINT EXTRACT - 008.jpg', 100, 0, 0),
(142, 21, '006 LEGENG RED', 130, 'TINTED LIP BALM - PLUMPING, MOISTURISING - PEPPERY MINT EXTRACT - 006.jpg', 100, 0, 0),
(144, 21, '888 KIND OF SEXY', 130, 'Lancome-Lipstick-Absolu-Rouge-Intimatte-888-KIND-OF-SEXY.jpg', 100, 0, 0),
(145, 21, '282 VERY FRENCH', 130, 'Lancome-Lipstick-Absolu-Rouge-Intimatte-282-VERY-FRENCH.jpg', 100, 0, 0),
(146, 21, '130-NOT_FLIRTING', 130, 'Lancome-Lipstick-Absolu-Rouge-Intimatte-130-NOT_FLIRTING.jpg', 100, 0, 0),
(147, 3, '728 INDIANRED', 183, 'SATIN LIPSTICK-RETRO.jpg', 98, 0, 0),
(148, 4, '738 PINK DAISY', 160, 'SATIN LIPSTICK-PINK NOUVEAU.jpg', 99, 0, 0),
(149, 4, '701 PINK RED', 160, 'SATIN LIPSTICK.jpg', 98, 0, 0),
(150, 4, '668 PINK PIGEON', 160, 'MATTE LIPSTICK.-PINK PIGEON.jpg', 98, 0, 0),
(151, 3, '032 FIREBRICK RED', 183, 'MATTE_LIPSTICK_NATURAL_BORN_LEADER.jpg', 93, 0, 0),
(152, 3, '618 REDBLOOD', 183, 'MATTE LIPSTICK.-ANTIQUE VELVET.jpg', 97, 0, 0),
(153, 3, '253 NEON RED', 183, 'MATTE LIPSTICK.jpg', 98, 0, 0),
(154, 5, '932 RED ENAMELN', 155, 'PATENT PAINT LIP LACQUER-RED ENAMEL.jpg', 99, 0, 0),
(155, 5, '251 DEEP ROSE', 155, 'PATENT PAINT LIP LACQUER-MAGIC MIRROR.jpg', 99, 0, 0),
(156, 5, '220 CRIMSON RED', 155, 'PATENT PAINT LIP LACQUER-ETERNAL SUNSHINE.jpg', 99, 0, 0),
(158, 6, '10 Black', 40, 'Brow Shaping Powdery Pencil_10Black.jpg', 94, 0, 0),
(159, 6, '07 Chocolate', 40, 'Brow Shaping Powdery Pencil_07-CHocolate.jpg', 98, 0, 0),
(160, 6, '05-Chestnut', 40, 'Brow_Shaping_Powdery_Pencil_05Chestnut.jpg', 99, 0, 0),
(161, 8, '032_DARKBROWN', 55, 'eyebrow_032_dark-brown.jpg', 96, 0, 0),
(162, 8, '05_BLACK', 55, 'eyebrow_05_black.jpg', 90, 0, 0),
(163, 8, '04_AUBURN', 55, 'eyebrow_04_auburn.jpg', 97, 0, 0),
(164, 8, '02_CHESTNUT', 55, 'eyebrow_02_chestnut.jpg', 99, 0, 0),
(165, 8, '01_BLOND', 55, 'eyebrow_01_blond.jpg', 97, 0, 0),
(166, 9, '031_BROWNRED', 55, 'eyebrow_031.jpg', 97, 0, 0),
(167, 9, '03_BROWN', 55, 'eyebrow_03_brown.jpg', 95, 0, 0),
(168, 10, '044_NORMAL BROWN', 100, 'SHAPE & SHADE BROW TINT-LINGERING.jpg', 98, 0, 0),
(169, 10, '045_DARK BROWN', 100, 'SHAPE & SHADE BROW TINT.jpg', 99, 0, 0),
(170, 11, '1N_NEUTRAL', 68, 'foundation_1N-Neutral.jpg', 96, 0, 0),
(171, 11, '2N_NEUTRAL', 68, 'foundation_2N-Neutral.jpg', 93, 0, 0),
(172, 12, '3N_NEUTRAL', 70, 'DIOR FOREVER SKIN GLOW_3N-Neutral.jpg', 98, 0, 0),
(173, 12, '2W-WARM', 70, 'DIOR FOREVER SKIN GLOW_2W-Warm.jpg', 99, 0, 0),
(174, 12, '2N_NEUTRAL', 70, 'DIOR FOREVER SKIN GLOW_2N-Neutral.jpg', 98, 0, 0),
(175, 11, '0N_NEUTRAL', 68, 'DIOR FOREVER COUTURE SKIN GLOW CUSHION_0N-Neutral.jpg', 98, 0, 0),
(176, 12, '2.5_WARM', 70, 'DIOR FOREVER SKIN GLOW_2.5-Warm.jpg', 99, 0, 0),
(177, 12, '1N_NEUTRAL', 70, 'DIOR FOREVER SKIN GLOW_1N-Neutral.jpg', 97, 0, 0),
(178, 12, '0N_NEUTRAL', 70, 'DIOR FOREVER SKIN GLOW_0N-Neutral.jpg', 99, 0, 0),
(179, 13, '50PA-NC37', 100, 'STUDIO FIX COMPLETE COVERAGE CUSHION COMPACT SPF 50PA-NC37 (2).jpg', 97, 0, 0),
(180, 13, '50PA-NC16', 100, 'STUDIO FIX COMPLETE COVERAGE CUSHION COMPACT SPF 50PA-NC16.jpg', 99, 0, 0),
(181, 15, 'ML-C1', 120, 'M_A_C STUDIO FACE AND BODY FOUNDATION 120 ML-C1.jpg', 98, 0, 0),
(183, 15, 'ML-N2', 120, 'M_A_C STUDIO FACE AND BODY FOUNDATION 120 ML-N2.jpg', 99, 0, 0),
(184, 16, 'ML-C4', 100, 'M_A_C STUDIO FACE AND BODY FOUNDATION 50 ML-C4.jpg', 99, 0, 0),
(185, 18, '14 SMOKEY CHIC', 100, 'Hypnose 5-Color Eyeshadow Palette- 14 Smokey Chic.jpg', 99, 0, 0),
(186, 18, '15 BLUE HYPNOTIC', 100, 'Hypnose 5-Color Eyeshadow Palette-15 Bleu Hypnotic.jpg', 99, 0, 0),
(187, 18, '05 KAKI ELECTRIQU', 100, 'Hypnose 5-Color Eyeshadow Palette-05 Kaki Electriqu.jpg', 99, 0, 0),
(188, 18, '32 DARK COFFEE', 100, 'Hypnose 5-Color Eyeshadow Palette.jpg', 99, 0, 0),
(189, 19, '739 Sepia Brown', 100, 'eyeshadow_739.jpg', 99, 0, 0),
(190, 19, '619 PINKGLOW', 100, 'eyeshadow_619-PinkGLow.jpg', 99, 0, 0),
(191, 19, '469 PANTONE', 100, 'eyeshadow_469.jpg', 85, 0, 0),
(192, 19, '479 C PANTONE ', 100, 'eyeshadow_439.jpg', 95, 0, 0),
(193, 20, 'PLUM PIE', 100, 'EYE SHADOW X 9 BURGUNDY TIMES NINE.jpg', 96, 0, 0),
(194, 20, 'AMBER ROSY PINK', 100, 'EYE SHADOW X 9 -AMBER TIMES NINE.jpg', 93, 0, 0),
(197, 22, '02 BROWN', 100, 'Sourcils Brow Gel-02.jpg', 93, 1, 0),
(199, 23, '370 Pink', 100, 'lancome-labsolu-rouge-lipstick-drama-matte-370-pink-seduction-1.jpg', 91, 1, 0),
(200, 25, '990 GREY', 100, 'EXTRA DIMENSION EYE SHADOW.jpg', 94, 1, 0),
(201, 25, '980 AMOROUS ALLOY', 100, 'EXTRA DIMENSION EYE SHADOW-AMOROUS ALLOY.jpg', 93, 1, 0),
(202, 24, '628 & 633 SWEET RED', 100, 'Deluxe Collection - 2 Lipsticks - Couture Color & Floral Lip Care.jpg', 94, 1, 0),
(999, 999, 'customize lipstics', 99, 'images/Layer1copy3.png', 978, 0, 0),
(1015, 7, '02 Dark Blonde', 40, 'Brow Shaping Powdery Pencil_o2DarkBlonde.jpg', 98, 0, 0),
(1016, 7, '08 Dark Brown', 40, 'Lancome Powdery Eyebrow.png', 98, 0, 0),
(1017, 17, '250 Bisque', 100, 'Lancome Renergie Series Foundation.png', 98, 0, 0),
(1018, 17, 'Lifting Clair 35N', 100, 'Lancome Renergie Series Foundation  Lifting Clair 35N.png', 98, 0, 0),
(1019, 17, '320 Clair 25', 100, 'Lancome Renergie Series Foundation_320.png', 98, 0, 0),
(1020, 14, '02 LYS ROSE', 200, 'Lancome Visionnaire Skin Teint perfects Dwi Make-up SPF 20.png', 93, 0, 0),
(1021, 14, '05 BEIGE NOISETTE', 200, 'Lancome Visionnaire Skin Teint perfects Dwi Make-up SPF 20 (2).png', 93, 0, 0),
(1022, 14, '010 BEIGE PORCELAINE', 200, 'Lancome Visionnaire Skin Teint perfects Dwi Make-up SPF 20 (3).png', 93, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_history`
--

CREATE TABLE `purchase_history` (
  `purchase_history_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `history_isDelete` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_type_id` varchar(255) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `comment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_history`
--

INSERT INTO `purchase_history` (`purchase_history_id`, `payment_id`, `user_id`, `history_isDelete`, `time`, `product_type_id`, `product_qty`, `status`, `comment`) VALUES
(185, 223, 114, 0, '2022-03-30 14:20:23', '999', 1, 'arrived', 0),
(1830, 206, 4, 0, '2022-03-30 13:56:07', '999', 1, 'arrived', 0),
(1831, 207, 4, 0, '2022-03-22 07:29:35', '151', 1, 'arrived', 0),
(1832, 208, 4, 0, '2022-03-22 07:29:38', '162', 1, 'arrived', 0),
(1833, 208, 4, 0, '2022-03-22 07:29:38', '149', 1, 'arrived', 0),
(1834, 208, 4, 0, '2022-03-22 07:29:38', '181', 1, 'arrived', 0),
(1835, 208, 4, 0, '2022-03-22 07:29:38', '193', 1, 'arrived', 0),
(1836, 208, 4, 0, '2022-03-22 07:29:38', '158', 1, 'arrived', 0),
(1837, 209, 4, 0, '2022-03-24 04:02:00', '167', 1, 'arrived', 0),
(1838, 210, 4, 0, '2022-03-24 04:02:05', '199', 1, 'delivery', 0),
(1839, 211, 4, 0, '2022-04-20 07:04:44', '201', 1, 'pending', 0),
(1845, 216, 114, 0, '2022-03-30 13:56:41', '122', 3, 'arrived', 0),
(1846, 217, 114, 0, '2022-03-24 07:46:45', '999', 1, 'pending', 0),
(1847, 218, 114, 0, '2022-03-26 00:22:39', '179', 1, 'arrived', 1),
(1848, 219, 114, 0, '2022-03-30 13:03:28', '999', 1, 'arrived', 0),
(1849, 220, 116, 0, '2022-03-30 13:22:19', '130', 1, 'pending', 0),
(1850, 221, 116, 0, '2022-03-30 13:33:56', '131', 1, 'pending', 0),
(1851, 222, 116, 0, '2022-03-30 13:39:56', '999', 1, 'pending', 0),
(1858, 228, 123, 0, '2022-04-06 07:06:06', '197', 1, 'pending', 0),
(1859, 229, 123, 0, '2022-04-06 07:07:10', '199', 1, 'pending', 0),
(1860, 230, 123, 0, '2022-04-12 16:04:14', '131', 1, 'pending', 0),
(1861, 231, 116, 0, '2022-04-12 19:21:44', '999', 1, 'pending', 0),
(1862, 232, 116, 0, '2022-04-12 19:24:13', '999', 1, 'pending', 0),
(1863, 233, 113, 0, '2022-04-12 22:14:28', '999', 1, 'pending', 0),
(1864, 234, 116, 0, '2022-04-16 06:22:41', '1011', 1, 'pending', 0),
(1865, 235, 116, 0, '2022-04-16 06:28:44', '151', 1, 'pending', 0),
(1866, 235, 116, 0, '2022-04-16 06:28:44', '1011', 1, 'pending', 0),
(1867, 236, 116, 0, '2022-04-16 06:41:31', '151', 1, 'pending', 0),
(1868, 236, 116, 0, '2022-04-16 06:41:31', '1011', 1, 'pending', 0),
(1869, 237, 116, 0, '2022-04-16 08:45:07', '172', 2, 'arrived', 1),
(1922, 238, 116, 0, '2022-04-16 08:41:26', '999', 1, 'arrived', 1),
(1923, 239, 116, 0, '2022-04-16 08:47:12', '177', 1, 'pending', 0),
(1924, 240, 116, 0, '2022-04-16 10:28:09', '999', 1, 'pending', 0),
(1925, 241, 116, 0, '2022-04-16 10:55:04', '999', 1, 'pending', 0),
(1926, 242, 116, 0, '2022-04-16 12:49:50', '1013', 1, 'pending', 0),
(1927, 243, 116, 0, '2022-04-16 12:54:35', '999', 1, 'pending', 0),
(1928, 244, 116, 0, '2022-04-16 14:50:41', '159', 1, 'pending', 0),
(1929, 245, 125, 0, '2022-04-16 16:19:58', '161', 1, 'arrived', 1),
(1930, 246, 4, 0, '2022-04-17 07:42:57', '122', 5, 'pending', 0),
(1931, 247, 4, 0, '2022-04-17 17:20:33', '999', 1, 'pending', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

CREATE TABLE `shipping` (
  `shipping_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `recipient_name` varchar(255) NOT NULL,
  `recipient_phone` int(12) NOT NULL,
  `recipient_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`shipping_id`, `user_id`, `address`, `recipient_name`, `recipient_phone`, `recipient_email`) VALUES
(243, 0, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(244, 0, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(245, 0, '32, Jalan Ap 9, Taman,Malim,75450,Malacca', 'Hui', 1157588165, 'user5@example.com'),
(246, 0, '32, Jalan Ap 9, Taman,Malim,75450,Malacca', 'Hui', 1157588165, 'user5@example.com'),
(247, 114, ' 32, Jalan Ap 9, Taman,Malim,75450,Malacca', 'Hui', 1157588165, 'user5@example.com'),
(248, 117, ' 32, Jalan Ap 10,Malim,81000,Malacca', 'Sean ksjs', 1157588533, 'user7@example.com'),
(249, 117, ' 32, Jalan Ap 10,Malim,81000,Malacca', 'Sean ksjs', 1157588533, 'user6@gmail.com'),
(250, 0, '32, Jalan Ap 10,Malim,81000,Malacca', 'Sean', 1157588533, 'example1@yahoo.com'),
(251, 0, '32, Jalan Ap 10,Malim,81000,Malacca', 'Sean ksnn', 1157588533, 'user7@ansajns.com'),
(252, 0, '32, Jalan Ap 10,Malim,81000,Malacca', 'Sean ksnn', 1157588533, 'jsnxjns@2002.com'),
(253, 123, ' 32, Jalannn,Ayer Keroh,75200,Malacca', 'Seankkk', 1157588163, 'seankhoo2002@gmail.com'),
(254, 123, ' 32, Jalannn,Ayer Keroh,75200,Malacca', 'Seankkk', 1157588163, 'seankhoo2002@gmail.com'),
(255, 123, ' 32, Jalannn,Ayer Keroh,75200,Malacca', 'Seankkk', 1157588163, 'seankhoo2002@gmail.com'),
(256, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(257, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(259, 6, ' 32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(260, 6, ' 32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(261, 6, ' 32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(262, 6, ' 32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(263, 6, ' 32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(264, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(265, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(266, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(267, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(268, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(269, 6, ' 32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(270, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(271, 6, '32, Jalan,Ayer Keroh,75350,Malacca', 'David', 1157588163, 'user6@example.com'),
(273, 3, ' No 32, Jalan Ap 9,Malim,75350,Malacca', 'kong', 1112345678, '1234@gmail.com'),
(274, 3, 'No 32, Jalan Ap 9,Malim,75350,Malacca', 'kong', 1112345678, '1234@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `shopping_cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_price` double NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `product_des` varchar(500) NOT NULL,
  `product_type_id` int(11) NOT NULL,
  `product_type_name` text NOT NULL,
  `cart_selected` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`shopping_cart_id`, `product_id`, `user_id`, `product_name`, `product_qty`, `product_price`, `user_name`, `product_des`, `product_type_id`, `product_type_name`, `cart_selected`) VALUES
(210, 10, 111, 'M.A.C SHAPE & SHADE BROW TINT-LINGERING', 1, 100, 'KLOO', 'a dual-ended product designed to set brows with ease by fusing the power of liquid and powder in one product.', 168, '044_NORMAL BROWN', 0),
(211, 5, 111, 'M.A.C LOVE ME SERIES LIQUID LIPCOLOUR', 1, 155, 'KLOO', 'a  rich and creamy liquid lip colour with a satin finish that wears for 12 hours.', 154, '932 RED ENAMELN', 0),
(212, 20, 111, 'MAC EYE SHADOW X 9 BURGUNDY TIMES NINE', 1, 100, 'KLOO', 'a well-edited palette featuring a colour wave of amber hues', 194, 'AMBER ROSY PINK', 0),
(216, 2, 111, 'ROUGE DIOR COUTURE COLOR REFILLABLE LIPSTICK', 1, 125, 'KLOO', '4 Finishes - Floral Lip Care - Comfort and Long Wear', 130, '762 DIORAMOUR METAL', 1),
(217, 12, 114, 'DIOR FOREVER SERIES LIQUID FOUNDATION', 3, 70, 'Hui', 'Clean Matte Foundation - 24h Wear - No Transfer - Concentrated Floral Skincare', 173, '2W-WARM', 0),
(221, 19, 114, 'DIOR 5 COULEURS COUTURE - NEW LOOK EYESHADOW', 2, 100, 'Hui', 'Eye Palette - 5 Eyeshadows - Engraved Houndstooth Pattern', 190, '619 PINKGLOW', 0),
(286, 2, 116, 'ROUGE DIOR COUTURE COLOR REFILLABLE LIPSTICK', 3, 125, 'David', '4 Finishes - Floral Lip Care - Comfort and Long Wear', 131, '999 MATTE FINISH', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tempo_buynow`
--

CREATE TABLE `tempo_buynow` (
  `code` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempo_buynow`
--

INSERT INTO `tempo_buynow` (`code`, `qty`) VALUES
('159', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tempo_customize`
--

CREATE TABLE `tempo_customize` (
  `customize_id` int(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempo_customize`
--

INSERT INTO `tempo_customize` (`customize_id`, `color`) VALUES
(1, '#2b1c1c');

-- --------------------------------------------------------

--
-- Table structure for table `tempo_verification`
--

CREATE TABLE `tempo_verification` (
  `code` int(4) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `postal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempo_verification`
--

INSERT INTO `tempo_verification` (`code`, `name`, `pass`, `address`, `phone`, `email`, `state`, `city`, `postal`) VALUES
(2505, 'KONG', '@Kong123', 'No 1, Jalan D1, Taman Ayer Keroh', '01136189999', 'kongggg02@gmail.com', 'Malacca', 'Ayer Keroh', 75450);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(2) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `user_pass` varchar(20) DEFAULT NULL,
  `user_email` text NOT NULL,
  `phone_num` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL,
  `postal` text NOT NULL,
  `user_address` varchar(500) NOT NULL,
  `shopping_cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_pass`, `user_email`, `phone_num`, `city`, `state`, `postal`, `user_address`, `shopping_cart_id`) VALUES
(1, 'tey', '123', 'tey@gmail.com', '0123434445', 'batu berendam', 'malacca', '75470', 'no 1, jalan bukit beruang', 1),
(3, 'kong', '@Kong123', '1234@gmail.com', '01112345678', 'Malim', 'Malacca', '75350', 'No 32, Jalan Ap 9', 0),
(4, 'ziyin', 'Kongziyin02', 'ziyin@email.com', '012-366-0990', 'Senai', 'Johor', '81100', '1, JLN JOHOR 1, TMN JOHOR', 0),
(5, 'Hui', 'Lee123**', 'user5@example.com', '01157588165', 'Malim', 'Malacca', '75450', '32, Jalan Ap 9, Taman', 0),
(6, 'David', 'Jimmy123**', 'user6@example.com', '01157588163', 'Ayer Keroh', 'Malacca', '75350', '32, Jalan', 0),
(7, 'Seank', 'Jimy123**', 'teyyuanping26@gmail.com', '01265488977', 'Batu Pahat', 'Johor', '74000', '36, jsnjnjd', 0),
(10, 'KONG', '@Kong123', 'kongggg02@gmail.com', '01136189999', 'Ayer Keroh', 'Malacca', '75450', 'No 1, Jalan D1, Taman Ayer Keroh', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `customer_review`
--
ALTER TABLE `customer_review`
  ADD PRIMARY KEY (`review_id`),
  ADD UNIQUE KEY `review_id` (`review_id`);

--
-- Indexes for table `customize`
--
ALTER TABLE `customize`
  ADD PRIMARY KEY (`customize_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`product_type_id`);

--
-- Indexes for table `purchase_history`
--
ALTER TABLE `purchase_history`
  ADD PRIMARY KEY (`purchase_history_id`);

--
-- Indexes for table `shipping`
--
ALTER TABLE `shipping`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`shopping_cart_id`);

--
-- Indexes for table `tempo_customize`
--
ALTER TABLE `tempo_customize`
  ADD PRIMARY KEY (`customize_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `customer_review`
--
ALTER TABLE `customer_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `customize`
--
ALTER TABLE `customize`
  MODIFY `customize_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `product_type_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1024;

--
-- AUTO_INCREMENT for table `purchase_history`
--
ALTER TABLE `purchase_history`
  MODIFY `purchase_history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1932;

--
-- AUTO_INCREMENT for table `shipping`
--
ALTER TABLE `shipping`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `shopping_cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=293;

--
-- AUTO_INCREMENT for table `tempo_customize`
--
ALTER TABLE `tempo_customize`
  MODIFY `customize_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
