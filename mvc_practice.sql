-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 02:15 PM
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
-- Database: `mvc_practice`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_path` varchar(255) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_path`, `status`) VALUES
(4, 'Screenshot 2022-11-23 205209.png', 1),
(5, 'resized signature.jpeg', 1),
(6, 'signature.jpeg', 1),
(7, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_category`
--

CREATE TABLE `catalog_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog_category`
--

INSERT INTO `catalog_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'gghh', 1),
(3, 'hhh', 1),
(4, 'hhh', 0),
(6, 'hhhooo', 0),
(7, 'hello', 1);

-- --------------------------------------------------------

--
-- Table structure for table `catalog_product`
--

CREATE TABLE `catalog_product` (
  `product_id` int(11) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `inventory` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image_link` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `mfr_cost` decimal(12,2) NOT NULL,
  `shipping_cost` decimal(12,2) NOT NULL,
  `total_cost` decimal(12,2) NOT NULL,
  `margin_percentage` int(11) NOT NULL,
  `min_price` decimal(12,2) NOT NULL,
  `status` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catalog_product`
--

INSERT INTO `catalog_product` (`product_id`, `sku`, `inventory`, `name`, `color`, `size`, `description`, `image_link`, `link`, `category_id`, `price`, `mfr_cost`, `shipping_cost`, `total_cost`, `margin_percentage`, `min_price`, `status`) VALUES
(21, 'SKU005', 85, 'Dress', 'Red', 'S', 'Elegant evening dress', 'https://example.com/image5.jpg', 'https://example.com/product5', 4, '79.99', '40.00', '10.00', '50.00', 38, '64.99', 1),
(22, 'SKU006', 53, 'Sweater', 'Gray', 'XL', 'Knitted wool sweater', 'https://example.com/image6.jpg', 'https://example.com/product6', 1, '29.99', '15.00', '4.50', '19.50', 35, '24.99', 1),
(23, 'SKU007', -20, 'Shorts', 'Khaki', '34', 'Casual khaki shorts', 'https://example.com/image7.jpg', 'https://example.com/product7', 2, '24.99', '12.00', '3.00', '15.00', 40, '19.99', 1),
(24, 'SKU008', 88, 'Sandals', 'Brown', 'US 9', 'Leather sandals', 'https://example.com/image8.jpg', 'https://example.com/product8', 3, '34.99', '18.00', '5.50', '23.50', 33, '29.99', 1),
(25, 'SKU009', 100, 'Blouse', 'Pink', 'M', 'Flowy chiffon blouse', 'https://example.com/image9.jpg', 'https://example.com/product9', 4, '39.99', '20.00', '5.00', '25.00', 38, '29.99', 1),
(26, 'SKU010', 85, 'Jacket', 'Navy Blue', 'L', 'Water-resistant jacket', 'resized signature.jpeg', 'https://example.com/product10', 1, '69.99', '35.00', '9.00', '44.00', 37, '54.99', 1),
(27, 'SKU011', 30, 'Pants', 'Black', '30x32', 'Slim-fit trousers', 'https://example.com/image11.jpg', 'https://example.com/product11', 2, '54.99', '28.00', '7.00', '35.00', 36, '44.99', 1),
(28, 'SKU012', 64, 'Boots', 'Brown', 'US 11', 'Leather ankle boots', 'https://example.com/image12.jpg', 'https://example.com/product12', 3, '89.99', '45.00', '11.00', '56.00', 38, '74.99', 1),
(29, 'SKU013', 100, 'Skirt', 'Denim', 'S', 'A-line denim skirt', 'https://example.com/image13.jpg', 'https://example.com/product13', 4, '29.99', '15.00', '4.00', '19.00', 37, '24.99', 1),
(30, 'SKU014', 87, 'Sweatpants', 'Gray', 'M', 'Comfy cotton sweatpants', 'https://example.com/image14.jpg', 'https://example.com/product14', 1, '34.99', '18.00', '5.50', '23.50', 33, '29.99', 1),
(31, 'SKU015', -111, 'Sunglasses', 'Black', 'One Size', 'UV protection sunglasses', '', 'https://example.com/product15', 3, '19.99', '10.00', '3.00', '13.00', 35, '14.99', 1),
(32, 'Harsh', -109, 'Dholakiya', 'red', '45', '', '', '', 2, '3.00', '45.00', '45.00', '45.00', 454, '54.00', 0),
(33, 'ddd', 0, 'ddd', 'ddd', 'ddd', 'dddd', '', '', 3, '2.00', '0.00', '0.00', '0.00', 0, '0.00', 0),
(34, 'ddd', -51, 'ddd', 'ddd', 'ddd', 'dddd', '', '', 1, '2.00', '0.00', '0.00', '0.00', 0, '0.00', 0),
(35, 'ddd', -60, 'dddd', 'dddd', 'dddd', 'ddd', '', '', 3, '7.00', '0.00', '0.00', '0.00', 0, '0.00', 0),
(36, '44', -12, '44', '45', '44', '\r\n444', '', '', 1, '44.00', '0.00', '0.00', '0.00', 0, '0.00', 1),
(37, 'sss', -21, 'ssss', 'sss', 'ssss', '', '', '', 2, '156.00', '0.00', '0.00', '0.00', 0, '0.00', 1),
(39, 'ddd', -10, 'ddd', 'dd', 'dd', '', '', '', 1, '222.00', '0.00', '0.00', '0.00', 0, '0.00', 1),
(40, 'harsh', -11, 'ahd', 'ddda', '15', '', '', '', 2, '66.00', '0.00', '0.00', '0.00', 0, '0.00', 1),
(41, 'SKU1001', 50, 'T-Shirt', 'Red', 'M', 'Cotton tee', 'product1.png', '[productpage1]', 1, '19.99', '8.50', '3.00', '11.50', 42, '15.99', 1),
(42, 'SKU2045', 30, 'Leather Wallet', 'Brown', 'One Size', 'Genuine leather wallet', 'product2.png', '[productpage2]', 2, '29.99', '15.00', '4.50', '19.50', 35, '24.99', 1),
(43, 'SKU3056', 2, 'Sneakers', 'Black', '10', 'Stylish sneakers', 'product3.png', '[productpage3]', 3, '49.99', '25.00', '5.00', '30.00', 40, '39.99', 1),
(44, 'SKU4023', 10, 'Coffee Mug', 'White', 'One Size', 'Ceramic mug', 'product4.png', '[productpage4]', 4, '9.99', '4.00', '2.00', '6.00', 60, '7.99', 1),
(45, 'SKU5102', 40, 'Denim Jeans', 'Blue', '32x32', 'Classic jeans', 'product5.png', '[productpage5]', 5, '39.99', '20.00', '4.00', '24.00', 40, '29.99', 1),
(46, 'SKU6110', 25, 'Sunglasses', 'Black', 'One Size', 'UV sunglasses', 'product6.png', '[productpage6]', 6, '24.99', '12.00', '3.50', '15.50', 38, '19.99', 1),
(47, 'SKU7025', 10, 'Running Shoes', 'Gray', '9', 'Lightweight shoes', 'product7.png', '[productpage7]', 7, '69.99', '35.00', '6.50', '41.50', 40, '54.99', 1),
(48, 'SKU8034', 30, 'Backpack', 'Green', 'One Size', 'Durable backpack', 'product8.png', '[productpage8]', 8, '49.99', '28.00', '5.00', '33.00', 34, '39.99', 1),
(49, 'SKU9002', 60, 'Wireless Earphones', 'Black', 'One Size', 'Bluetooth earphones', 'product9.png', '[productpage9]', 9, '79.99', '45.00', '7.00', '52.00', 35, '64.99', 1),
(50, 'SKU10022', 5, 'Phone Case', 'Blue', 'One Size', 'Protective case', 'product10.png', '[productpage10]', 10, '14.99', '7.00', '2.50', '9.50', 36, '11.99', 1),
(51, 'SKU11013', 18, 'Leather Belt', 'Brown', '36', 'Genuine belt', 'product11.png', '[productpage11]', 11, '19.99', '10.00', '3.00', '13.00', 35, '15.99', 1),
(52, 'SKU12056', 22, 'Desk Lamp', 'Black', 'One Size', 'Adjustable lamp', 'product12.png', '[productpage12]', 12, '34.99', '18.00', '4.50', '22.50', 36, '27.99', 1),
(53, 'SKU13045', 27, 'Notebook', 'Gray', 'One Size', 'Hardcover notebook', 'product13.png', '[productpage13]', 13, '7.99', '3.50', '1.50', '5.00', 38, '5.99', 1),
(54, 'SKU14089', 12, 'Umbrella', 'Blue', 'One Size', 'Compact umbrella', 'product14.png', '[productpage14]', 14, '17.99', '8.50', '2.50', '11.00', 39, '14.99', 1),
(55, 'SKU15034', 48, 'Water Bottle', 'Red', 'One Size', 'Stainless steel bottle', 'product15.png', '[productpage15]', 15, '12.99', '5.00', '2.00', '7.00', 46, '9.99', 1),
(56, 'SKU16021', 8, 'Beanie Hat', 'Black', 'One Size', 'Knit beanie', 'product16.png', '[productpage16]', 16, '9.99', '4.50', '1.50', '6.00', 40, '7.99', 1),
(57, 'SKU17001', 14, 'Gym Bag', 'Black', 'One Size', 'Spacious bag', 'product17.png', '[productpage17]', 17, '29.99', '16.00', '3.50', '19.50', 35, '23.99', 1),
(58, 'SKU18032', 33, 'Travel Pillow', 'Gray', 'One Size', 'Memory foam pillow', 'product18.png', '[productpage18]', 18, '19.99', '9.00', '3.00', '12.00', 40, '15.99', 1),
(59, 'SKU19011', 29, 'Watch', 'Gold', 'One Size', 'Elegant watch', 'product19.png', '[productpage19]', 19, '59.99', '32.00', '6.00', '38.00', 37, '47.99', 1),
(60, 'SKU20048', 17, 'Sweatshirt', 'Gray', 'Large', 'Cozy sweatshirt', 'product20.png', '[productpage20]', 20, '44.99', '22.50', '5.00', '27.50', 38, '35.99', 1),
(61, 'ss', 0, 'ss', 'ss', 'ss', 'ss', 'mesh topology.png', '', 3, '30.00', '33.00', '33.00', '33.00', 33, '33.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ccc_bmi_calculator`
--

CREATE TABLE `ccc_bmi_calculator` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `user_name` varchar(11) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `result` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ccc_bmi_calculator`
--

INSERT INTO `ccc_bmi_calculator` (`id`, `session_id`, `user_name`, `weight`, `height`, `result`, `created_at`) VALUES
(1, 0, 'ss', 45, 98, 0.00468555, '2024-03-06 10:40:22'),
(2, 0, 'sss', 43, 44, 0.0232438, '2024-03-20 10:19:05'),
(3, 0, 'sss', 78, 89, 0.00984724, '2024-03-06 10:50:20'),
(4, 0, 'ss', 99.2079, 222, 0.00201298, '2024-03-06 10:57:25'),
(5, 1, 'ss', 12, 44, 0.0232438, '2024-03-20 10:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_collection`
--

CREATE TABLE `ccc_collection` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ccc_collection`
--

INSERT INTO `ccc_collection` (`id`, `country_id`, `name`) VALUES
(1, 1, 'Magnolia collection'),
(2, 1, 'lettner collection'),
(3, 2, 'north shore collection'),
(4, 2, 'alisdair collection'),
(5, 2, 'haven collection');

-- --------------------------------------------------------

--
-- Table structure for table `ccc_country`
--

CREATE TABLE `ccc_country` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ccc_country`
--

INSERT INTO `ccc_country` (`id`, `name`) VALUES
(1, 'india'),
(2, 'us');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `password` varchar(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL,
  `default` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_email`, `password`, `first_name`, `last_name`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`, `default`) VALUES
(1, 'ggg@hhagg', '456', 'ggg', 'gggg', 'bhjaaa', 'rajkot', 12, 1, '123546', 'rajkot', 'rajkot', 12, 1, '123456', 0),
(2, 'har@ffggg', '789', 'ggg', 'gggg', '', '', 0, 0, '', '', '', 0, 0, '', 0),
(3, 'ok@mg', '987', 'ggg', 'gggg', '', '', 0, 0, '', '', '', 0, 0, '', 0),
(4, 'lo@gmgg', 'www', 'ggg', 'gggg', '', '', 0, 0, '', '', '', 0, 0, '', 0),
(5, 'p@mgg', 'sss', 'ggg', 'gggg', '', '', 0, 0, '', '', '', 0, 0, '', 0),
(6, 'ss@dgg', 'jffj', 'harsh', 'ddd', '', '', 0, 0, '', '', '', 0, 0, '', 0),
(7, 'hars@okokgg', 'plm', 'Hello', 'OK', '', '', 0, 0, '', '', '', 0, 0, '', 0),
(8, 'ggg@hhagg', 'ddddd', 'ggg', 'gggg', '', '', 0, 0, '', '', '', 0, 0, '', 0),
(9, 'aa@ddgg', '777', 'aa', 'aa', '', '', 0, 0, '', '', '', 0, 0, '', 0),
(10, 'ggg@hha2gg', '3214', 'ggg', 'gggg', '', '', 0, 0, '', '', '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer_address`
--

CREATE TABLE `customer_address` (
  `address_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_address`
--

INSERT INTO `customer_address` (`address_id`, `customer_id`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 1, 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `import`
--

CREATE TABLE `import` (
  `import_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `import`
--

INSERT INTO `import` (`import_id`, `data`, `status`) VALUES
(1, '{\"sku\":\"SKU1001\",\"inventory\":\"50\",\"name\":\"T-Shirt\",\"color\":\"Red\",\"size\":\"M\",\"description\":\"Cotton tee\",\"image_link\":\"product1.png\",\"link\":\"[productpage1]\",\"category_id\":\"001\",\"price\":\"19.99\",\"mfr_cost\":\"8.50\",\"shipping_cost\":\"3.00\",\"total_cost\":\"11.50\",\"margin_percentage\":\"42%\",\"min_price\":\"15.99\",\"status\":\"1\"}', 1),
(2, '{\"sku\":\"SKU2045\",\"inventory\":\"30\",\"name\":\"Leather Wallet\",\"color\":\"Brown\",\"size\":\"One Size\",\"description\":\"Genuine leather wallet\",\"image_link\":\"product2.png\",\"link\":\"[productpage2]\",\"category_id\":\"002\",\"price\":\"29.99\",\"mfr_cost\":\"15.00\",\"shipping_cost\":\"4.50\",\"total_cost\":\"19.50\",\"margin_percentage\":\"35%\",\"min_price\":\"24.99\",\"status\":\"1\"}', 1),
(3, '{\"sku\":\"SKU3056\",\"inventory\":\"20\",\"name\":\"Sneakers\",\"color\":\"Black\",\"size\":\"10\",\"description\":\"Stylish sneakers\",\"image_link\":\"product3.png\",\"link\":\"[productpage3]\",\"category_id\":\"003\",\"price\":\"49.99\",\"mfr_cost\":\"25.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"30.00\",\"margin_percentage\":\"40%\",\"min_price\":\"39.99\",\"status\":\"1\"}', 1),
(4, '{\"sku\":\"SKU4023\",\"inventory\":\"15\",\"name\":\"Coffee Mug\",\"color\":\"White\",\"size\":\"One Size\",\"description\":\"Ceramic mug\",\"image_link\":\"product4.png\",\"link\":\"[productpage4]\",\"category_id\":\"004\",\"price\":\"9.99\",\"mfr_cost\":\"4.00\",\"shipping_cost\":\"2.00\",\"total_cost\":\"6.00\",\"margin_percentage\":\"60%\",\"min_price\":\"7.99\",\"status\":\"1\"}', 1),
(5, '{\"sku\":\"SKU5102\",\"inventory\":\"40\",\"name\":\"Denim Jeans\",\"color\":\"Blue\",\"size\":\"32x32\",\"description\":\"Classic jeans\",\"image_link\":\"product5.png\",\"link\":\"[productpage5]\",\"category_id\":\"005\",\"price\":\"39.99\",\"mfr_cost\":\"20.00\",\"shipping_cost\":\"4.00\",\"total_cost\":\"24.00\",\"margin_percentage\":\"40%\",\"min_price\":\"29.99\",\"status\":\"1\"}', 1),
(6, '{\"sku\":\"SKU6110\",\"inventory\":\"25\",\"name\":\"Sunglasses\",\"color\":\"Black\",\"size\":\"One Size\",\"description\":\"UV sunglasses\",\"image_link\":\"product6.png\",\"link\":\"[productpage6]\",\"category_id\":\"006\",\"price\":\"24.99\",\"mfr_cost\":\"12.00\",\"shipping_cost\":\"3.50\",\"total_cost\":\"15.50\",\"margin_percentage\":\"38%\",\"min_price\":\"19.99\",\"status\":\"1\"}', 1),
(7, '{\"sku\":\"SKU7025\",\"inventory\":\"10\",\"name\":\"Running Shoes\",\"color\":\"Gray\",\"size\":\"9\",\"description\":\"Lightweight shoes\",\"image_link\":\"product7.png\",\"link\":\"[productpage7]\",\"category_id\":\"007\",\"price\":\"69.99\",\"mfr_cost\":\"35.00\",\"shipping_cost\":\"6.50\",\"total_cost\":\"41.50\",\"margin_percentage\":\"40%\",\"min_price\":\"54.99\",\"status\":\"1\"}', 1),
(8, '{\"sku\":\"SKU8034\",\"inventory\":\"35\",\"name\":\"Backpack\",\"color\":\"Green\",\"size\":\"One Size\",\"description\":\"Durable backpack\",\"image_link\":\"product8.png\",\"link\":\"[productpage8]\",\"category_id\":\"008\",\"price\":\"49.99\",\"mfr_cost\":\"28.00\",\"shipping_cost\":\"5.00\",\"total_cost\":\"33.00\",\"margin_percentage\":\"34%\",\"min_price\":\"39.99\",\"status\":\"1\"}', 1),
(9, '{\"sku\":\"SKU9002\",\"inventory\":\"60\",\"name\":\"Wireless Earphones\",\"color\":\"Black\",\"size\":\"One Size\",\"description\":\"Bluetooth earphones\",\"image_link\":\"product9.png\",\"link\":\"[productpage9]\",\"category_id\":\"009\",\"price\":\"79.99\",\"mfr_cost\":\"45.00\",\"shipping_cost\":\"7.00\",\"total_cost\":\"52.00\",\"margin_percentage\":\"35%\",\"min_price\":\"64.99\",\"status\":\"1\"}', 1),
(10, '{\"sku\":\"SKU10022\",\"inventory\":\"5\",\"name\":\"Phone Case\",\"color\":\"Blue\",\"size\":\"One Size\",\"description\":\"Protective case\",\"image_link\":\"product10.png\",\"link\":\"[productpage10]\",\"category_id\":\"010\",\"price\":\"14.99\",\"mfr_cost\":\"7.00\",\"shipping_cost\":\"2.50\",\"total_cost\":\"9.50\",\"margin_percentage\":\"36%\",\"min_price\":\"11.99\",\"status\":\"1\"}', 1),
(11, '{\"sku\":\"SKU11013\",\"inventory\":\"18\",\"name\":\"Leather Belt\",\"color\":\"Brown\",\"size\":\"36\",\"description\":\"Genuine belt\",\"image_link\":\"product11.png\",\"link\":\"[productpage11]\",\"category_id\":\"011\",\"price\":\"19.99\",\"mfr_cost\":\"10.00\",\"shipping_cost\":\"3.00\",\"total_cost\":\"13.00\",\"margin_percentage\":\"35%\",\"min_price\":\"15.99\",\"status\":\"1\"}', 1),
(12, '{\"sku\":\"SKU12056\",\"inventory\":\"22\",\"name\":\"Desk Lamp\",\"color\":\"Black\",\"size\":\"One Size\",\"description\":\"Adjustable lamp\",\"image_link\":\"product12.png\",\"link\":\"[productpage12]\",\"category_id\":\"012\",\"price\":\"34.99\",\"mfr_cost\":\"18.00\",\"shipping_cost\":\"4.50\",\"total_cost\":\"22.50\",\"margin_percentage\":\"36%\",\"min_price\":\"27.99\",\"status\":\"1\"}', 1),
(13, '{\"sku\":\"SKU13045\",\"inventory\":\"27\",\"name\":\"Notebook\",\"color\":\"Gray\",\"size\":\"One Size\",\"description\":\"Hardcover notebook\",\"image_link\":\"product13.png\",\"link\":\"[productpage13]\",\"category_id\":\"013\",\"price\":\"7.99\",\"mfr_cost\":\"3.50\",\"shipping_cost\":\"1.50\",\"total_cost\":\"5.00\",\"margin_percentage\":\"38%\",\"min_price\":\"5.99\",\"status\":\"1\"}', 1),
(14, '{\"sku\":\"SKU14089\",\"inventory\":\"12\",\"name\":\"Umbrella\",\"color\":\"Blue\",\"size\":\"One Size\",\"description\":\"Compact umbrella\",\"image_link\":\"product14.png\",\"link\":\"[productpage14]\",\"category_id\":\"014\",\"price\":\"17.99\",\"mfr_cost\":\"8.50\",\"shipping_cost\":\"2.50\",\"total_cost\":\"11.00\",\"margin_percentage\":\"39%\",\"min_price\":\"14.99\",\"status\":\"1\"}', 1),
(15, '{\"sku\":\"SKU15034\",\"inventory\":\"48\",\"name\":\"Water Bottle\",\"color\":\"Red\",\"size\":\"One Size\",\"description\":\"Stainless steel bottle\",\"image_link\":\"product15.png\",\"link\":\"[productpage15]\",\"category_id\":\"015\",\"price\":\"12.99\",\"mfr_cost\":\"5.00\",\"shipping_cost\":\"2.00\",\"total_cost\":\"7.00\",\"margin_percentage\":\"46%\",\"min_price\":\"9.99\",\"status\":\"1\"}', 1),
(16, '{\"sku\":\"SKU16021\",\"inventory\":\"8\",\"name\":\"Beanie Hat\",\"color\":\"Black\",\"size\":\"One Size\",\"description\":\"Knit beanie\",\"image_link\":\"product16.png\",\"link\":\"[productpage16]\",\"category_id\":\"016\",\"price\":\"9.99\",\"mfr_cost\":\"4.50\",\"shipping_cost\":\"1.50\",\"total_cost\":\"6.00\",\"margin_percentage\":\"40%\",\"min_price\":\"7.99\",\"status\":\"1\"}', 1),
(17, '{\"sku\":\"SKU17001\",\"inventory\":\"14\",\"name\":\"Gym Bag\",\"color\":\"Black\",\"size\":\"One Size\",\"description\":\"Spacious bag\",\"image_link\":\"product17.png\",\"link\":\"[productpage17]\",\"category_id\":\"017\",\"price\":\"29.99\",\"mfr_cost\":\"16.00\",\"shipping_cost\":\"3.50\",\"total_cost\":\"19.50\",\"margin_percentage\":\"35%\",\"min_price\":\"23.99\",\"status\":\"1\"}', 1),
(18, '{\"sku\":\"SKU18032\",\"inventory\":\"33\",\"name\":\"Travel Pillow\",\"color\":\"Gray\",\"size\":\"One Size\",\"description\":\"Memory foam pillow\",\"image_link\":\"product18.png\",\"link\":\"[productpage18]\",\"category_id\":\"018\",\"price\":\"19.99\",\"mfr_cost\":\"9.00\",\"shipping_cost\":\"3.00\",\"total_cost\":\"12.00\",\"margin_percentage\":\"40%\",\"min_price\":\"15.99\",\"status\":\"1\"}', 1),
(19, '{\"sku\":\"SKU19011\",\"inventory\":\"29\",\"name\":\"Watch\",\"color\":\"Gold\",\"size\":\"One Size\",\"description\":\"Elegant watch\",\"image_link\":\"product19.png\",\"link\":\"[productpage19]\",\"category_id\":\"019\",\"price\":\"59.99\",\"mfr_cost\":\"32.00\",\"shipping_cost\":\"6.00\",\"total_cost\":\"38.00\",\"margin_percentage\":\"37%\",\"min_price\":\"47.99\",\"status\":\"1\"}', 1),
(20, '{\"sku\":\"SKU20048\",\"inventory\":\"17\",\"name\":\"Sweatshirt\",\"color\":\"Gray\",\"size\":\"Large\",\"description\":\"Cozy sweatshirt\",\"image_link\":\"product20.png\",\"link\":\"[productpage20]\",\"category_id\":\"020\",\"price\":\"44.99\",\"mfr_cost\":\"22.50\",\"shipping_cost\":\"5.00\",\"total_cost\":\"27.50\",\"margin_percentage\":\"38%\",\"min_price\":\"35.99\",\"status\":\"1\"}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `order_id` int(11) NOT NULL,
  `order_number` varchar(255) NOT NULL,
  `tax_percent` int(11) NOT NULL,
  `grand_total` decimal(12,2) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`order_id`, `order_number`, `tax_percent`, `grand_total`, `payment_id`, `shipping_id`, `status`) VALUES
(1, '4066579', 8, '3611.13', 1, 1, 'cancel'),
(2, '9436359', 8, '337.37', 2, 2, 'On Hold'),
(3, '4988494', 8, '1755.00', 3, 3, 'cancel'),
(4, '6949152', 8, '102.38', 4, 4, ''),
(5, '7444395', 8, '1606.39', 5, 5, 'cancel'),
(6, '7290531', 8, '337.37', 6, 6, 'refunded'),
(7, '6900913', 8, '1930.50', 7, 7, 'cancel'),
(8, '5555081', 8, '337.37', 8, 8, 'cancel'),
(9, '2485751', 8, '337.37', 9, 9, 'Completed'),
(10, '1282930', 8, '404.87', 10, 10, 'Completed'),
(11, '5284142', 8, '404.87', 11, 11, 'pending'),
(12, '3204946', 8, '337.37', 12, 12, 'pending'),
(13, '4854701', 8, '641.10', 13, 13, 'pending'),
(14, '9475949', 8, '28.11', 14, 14, 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_customer`
--

CREATE TABLE `sales_order_customer` (
  `order_customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order_customer`
--

INSERT INTO `sales_order_customer` (`order_customer_id`, `order_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 1, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 1, 1, '123546', '1', '1', 1, 1, '1'),
(2, 2, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 11, 1, '1'),
(3, 3, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(4, 4, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(5, 5, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(6, 6, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(7, 7, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(8, 8, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(9, 9, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(10, 10, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(11, 11, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(12, 12, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(13, 13, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(14, 14, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', 'rajkot', 'rajkot', 12, 1, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_item`
--

CREATE TABLE `sales_order_item` (
  `item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `row_total` decimal(12,2) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order_item`
--

INSERT INTO `sales_order_item` (`item_id`, `order_id`, `product_id`, `price`, `qty`, `row_total`, `product_name`, `product_color`) VALUES
(1, 1, 28, '89.99', 11, '989.89', 'Boots', 'Brown'),
(2, 1, 39, '222.00', 10, '2220.00', 'ddd', 'dd'),
(3, 2, 23, '24.99', 12, '299.88', 'Shorts', 'Khaki'),
(4, 3, 37, '156.00', 10, '1560.00', 'ssss', 'sss'),
(5, 4, 35, '7.00', 13, '91.00', 'dddd', 'dddd'),
(6, 5, 28, '89.99', 10, '899.90', 'Boots', 'Brown'),
(7, 5, 36, '44.00', 12, '528.00', '44', '45'),
(8, 6, 23, '24.99', 12, '299.88', 'Shorts', 'Khaki'),
(9, 7, 37, '156.00', 11, '1716.00', 'ssss', 'sss'),
(10, 8, 23, '24.99', 12, '299.88', 'Shorts', 'Khaki'),
(11, 9, 23, '24.99', 12, '299.88', 'Shorts', 'Khaki'),
(12, 10, 22, '29.99', 12, '359.88', 'Sweater', 'Gray'),
(13, 11, 22, '29.99', 12, '359.88', 'Sweater', 'Gray'),
(14, 12, 23, '24.99', 12, '299.88', 'Shorts', 'Khaki'),
(15, 13, 28, '89.99', 3, '269.97', 'Boots', 'Brown'),
(16, 13, 44, '9.99', 5, '49.95', 'Coffee Mug', 'White'),
(17, 13, 48, '49.99', 5, '249.95', 'Backpack', 'Green'),
(18, 14, 23, '24.99', 1, '24.99', 'Shorts', 'Khaki');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_payment_method`
--

CREATE TABLE `sales_order_payment_method` (
  `payment_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `card_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order_payment_method`
--

INSERT INTO `sales_order_payment_method` (`payment_id`, `order_id`, `payment_method`, `card_number`) VALUES
(1, 1, 'upi', 0),
(2, 2, 'upi', 0),
(3, 3, 'upi', 0),
(4, 4, 'digital_wallet', 0),
(5, 5, 'upi', 0),
(6, 6, 'card', 0),
(7, 7, 'digital_wallet', 0),
(8, 8, 'card', 0),
(9, 9, 'digital_wallet', 0),
(10, 10, 'net_banking', 0),
(11, 11, 'upi', 0),
(12, 12, 'digital_wallet', 0),
(13, 13, 'card', 0),
(14, 14, 'card', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_shipping_method`
--

CREATE TABLE `sales_order_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `shipping_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order_shipping_method`
--

INSERT INTO `sales_order_shipping_method` (`shipping_id`, `order_id`, `shipping_method`) VALUES
(1, 1, 'same_day'),
(2, 2, 'international'),
(3, 3, 'same_day'),
(4, 4, 'same_day'),
(5, 5, 'same_day'),
(6, 6, 'normal_day'),
(7, 7, 'same_day'),
(8, 8, 'normal_day'),
(9, 9, 'same_day'),
(10, 10, 'same_day'),
(11, 11, 'same_day'),
(12, 12, 'same_day'),
(13, 13, 'normal_day'),
(14, 14, 'normal_day');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_status_history`
--

CREATE TABLE `sales_order_status_history` (
  `history_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `from_status` varchar(255) NOT NULL,
  `to_status` varchar(255) NOT NULL,
  `action_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order_status_history`
--

INSERT INTO `sales_order_status_history` (`history_id`, `order_id`, `date`, `from_status`, `to_status`, `action_by`) VALUES
(1, 1, '2024-03-21 04:02:45', 'pending', '', 0),
(2, 2, '2024-03-21 04:04:03', 'pending', '', 0),
(3, 3, '2024-03-21 04:05:35', 'pending', '', 0),
(4, 4, '2024-03-21 04:06:26', 'pending', '', 0),
(5, 3, '2024-03-21 04:08:50', 'cancel', '', 1),
(6, 3, '2024-03-21 04:09:05', '', 'cancel', 0),
(7, 1, '2024-03-21 04:10:24', '', 'pending', 0),
(8, 1, '2024-03-21 04:14:33', 'cancel', '', 1),
(9, 1, '2024-03-21 04:14:47', 'pending', 'cancel', 0),
(10, 2, '2024-03-21 04:24:12', '', 'decline', 0),
(11, 5, '2024-03-21 04:43:03', 'pending', '', 0),
(12, 5, '2024-03-21 04:43:55', 'cancel', '', 1),
(13, 5, '2024-03-21 04:44:00', 'pending', 'cancel', 0),
(14, 6, '2024-03-21 04:46:18', 'pending', '', 0),
(15, 6, '2024-03-21 04:46:40', 'cancel', '', 1),
(16, 6, '2024-03-21 04:49:21', 'pending', 'refunded', 0),
(17, 7, '2024-03-21 04:58:39', 'pending', '', 0),
(18, 7, '2024-03-21 04:59:28', 'pending', 'shipped', 0),
(19, 7, '2024-03-21 04:59:45', 'shipped', 'cancel', 1),
(20, 7, '2024-03-21 05:00:13', 'shipped', 'cancel', 0),
(21, 8, '2024-03-21 05:02:57', 'pending', '', 0),
(22, 8, '2024-03-21 05:03:27', 'pending', 'cancel', 1),
(23, 8, '2024-03-21 05:03:46', 'pending', 'cancel', 0),
(24, 8, '2024-03-21 05:06:53', 'cancel', 'shipped', 0),
(25, 8, '2024-03-21 06:06:53', 'shipped', 'On Hold', 0),
(26, 1, '2024-03-21 06:31:19', 'cancel', 'cancel', 1),
(27, 1, '2024-03-21 06:32:34', 'cancel', 'cancel', 1),
(28, 1, '2024-03-21 06:32:43', 'cancel', 'cancel', 1),
(29, 1, '2024-03-21 07:38:39', 'cancel', 'cancel', 1),
(30, 4, '2024-03-21 07:56:37', '', 'cancel', 1),
(31, 2, '2024-03-21 08:02:17', 'decline', 'Cancel', 1),
(32, 4, '2024-03-21 08:40:11', 'cancel', 'cancellation declined', 0),
(33, 9, '2024-03-21 09:11:15', 'pending', '', 0),
(34, 8, '2024-03-21 09:15:09', 'On Hold', 'cancel', 0),
(35, 2, '2024-03-21 09:17:36', 'decline', 'On Hold', 0),
(36, 2, '2024-03-21 09:17:54', 'cancel', 'cancellation declined', 0),
(37, 9, '2024-03-21 09:18:42', 'pending', 'Cancel', 1),
(38, 9, '2024-03-21 12:26:41', 'pending', 'Completed', 0),
(39, 10, '2024-03-21 12:41:08', 'pending', '', 0),
(40, 10, '2024-03-21 12:41:35', 'pending', 'Completed', 0),
(41, 11, '2024-03-26 12:24:51', 'pending', '', 0),
(42, 12, '2024-03-27 04:02:09', 'pending', '', 0),
(43, 13, '2024-03-27 04:05:46', 'pending', '', 0),
(44, 14, '2024-03-28 05:18:36', 'pending', '', 0),
(45, 14, '2024-03-28 05:24:11', 'pending', 'Completed', 0),
(46, 14, '2024-03-28 05:24:36', 'Completed', 'Processing', 0),
(47, 14, '2024-03-28 05:25:46', 'Processing', 'Cancel', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote`
--

CREATE TABLE `sales_quote` (
  `quote_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `tax_percent` int(11) NOT NULL,
  `grand_total` decimal(12,2) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_quote`
--

INSERT INTO `sales_quote` (`quote_id`, `customer_id`, `tax_percent`, `grand_total`, `order_id`, `payment_id`, `shipping_id`) VALUES
(1, 0, 8, '3611.13', 1, 1, 1),
(2, 0, 8, '337.37', 2, 2, 2),
(3, 0, 8, '1755.00', 3, 3, 3),
(4, 0, 8, '102.38', 4, 4, 4),
(5, 0, 8, '1606.39', 5, 5, 5),
(6, 0, 8, '337.37', 6, 6, 6),
(7, 0, 8, '1930.50', 7, 7, 7),
(8, 0, 8, '337.37', 8, 8, 8),
(9, 0, 8, '1563.45', 0, 0, 0),
(10, 0, 8, '337.37', 9, 9, 9),
(11, 0, 8, '404.87', 10, 10, 10),
(12, 0, 8, '0.00', 0, 0, 0),
(13, 0, 8, '404.87', 11, 11, 11),
(14, 0, 8, '1585.99', 0, 0, 0),
(15, 0, 8, '742.39', 0, 0, 0),
(16, 0, 8, '337.37', 12, 12, 12),
(17, 0, 8, '641.10', 13, 13, 13),
(18, 0, 8, '28.11', 14, 14, 14);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_customer`
--

CREATE TABLE `sales_quote_customer` (
  `quote_customer_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `billing_address` varchar(255) NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_region` int(11) NOT NULL,
  `billing_country` int(11) NOT NULL,
  `billing_phone` varchar(255) NOT NULL,
  `shipping_address` varchar(255) NOT NULL,
  `shipping_city` varchar(255) NOT NULL,
  `shipping_region` int(11) NOT NULL,
  `shipping_country` int(11) NOT NULL,
  `shipping_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_quote_customer`
--

INSERT INTO `sales_quote_customer` (`quote_customer_id`, `quote_id`, `customer_id`, `email`, `billing_address`, `billing_city`, `billing_region`, `billing_country`, `billing_phone`, `shipping_address`, `shipping_city`, `shipping_region`, `shipping_country`, `shipping_phone`) VALUES
(1, 1, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 1, 1, '123546', '1', '1', 1, 1, '1'),
(2, 2, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 11, 1, '1'),
(3, 5, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(4, 9, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(5, 10, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(6, 11, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(7, 12, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(8, 13, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(9, 14, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(10, 15, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(11, 17, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(12, 23, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(13, 1, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(14, 3, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(15, 4, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(16, 5, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(17, 6, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(18, 7, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(19, 13, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', 'rajkot', 'rajkot', 12, 1, '123456'),
(20, 14, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(21, 2, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(22, 5, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(23, 9, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(24, 11, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(25, 13, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(26, 17, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', '1', '1', 1, 1, '1'),
(27, 18, 1, 'ggg@hhagg', 'bhjaaa', 'rajkot', 12, 1, '123546', 'rajkot', 'rajkot', 12, 1, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_item`
--

CREATE TABLE `sales_quote_item` (
  `item_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `row_total` decimal(12,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_quote_item`
--

INSERT INTO `sales_quote_item` (`item_id`, `quote_id`, `product_id`, `price`, `qty`, `row_total`) VALUES
(1, 1, 28, '89.99', 11, '989.89'),
(2, 1, 39, '222.00', 10, '2220.00'),
(3, 2, 23, '24.99', 12, '299.88'),
(4, 3, 37, '156.00', 10, '1560.00'),
(5, 4, 35, '7.00', 13, '91.00'),
(6, 5, 28, '89.99', 10, '899.90'),
(7, 5, 36, '44.00', 12, '528.00'),
(8, 6, 23, '24.99', 12, '299.88'),
(9, 7, 37, '156.00', 11, '1716.00'),
(10, 8, 23, '24.99', 12, '299.88'),
(11, 9, 23, '24.99', 14, '349.86'),
(12, 9, 21, '79.99', 13, '1039.87'),
(13, 10, 23, '24.99', 12, '299.88'),
(14, 11, 22, '29.99', 12, '359.88'),
(15, 13, 22, '29.99', 12, '359.88'),
(16, 14, 22, '29.99', 11, '329.89'),
(17, 14, 28, '89.99', 12, '1079.88'),
(18, 15, 43, '49.99', 3, '149.97'),
(19, 15, 22, '29.99', 1, '29.99'),
(20, 15, 21, '79.99', 6, '479.94'),
(21, 16, 23, '24.99', 12, '299.88'),
(22, 17, 28, '89.99', 3, '269.97'),
(23, 17, 44, '9.99', 5, '49.95'),
(24, 17, 48, '49.99', 5, '249.95'),
(25, 18, 23, '24.99', 1, '24.99');

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_payment_method`
--

CREATE TABLE `sales_quote_payment_method` (
  `payment_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `card_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_quote_payment_method`
--

INSERT INTO `sales_quote_payment_method` (`payment_id`, `quote_id`, `payment_method`, `card_number`) VALUES
(1, 1, 'upi', 0),
(2, 2, 'upi', 0),
(3, 3, 'upi', 0),
(4, 4, 'digital_wallet', 0),
(5, 5, 'upi', 0),
(6, 6, 'card', 0),
(7, 7, 'digital_wallet', 0),
(8, 8, 'card', 0),
(9, 10, 'digital_wallet', 0),
(10, 11, 'net_banking', 0),
(11, 13, 'upi', 0),
(12, 16, 'digital_wallet', 0),
(13, 17, 'card', 0),
(14, 18, 'card', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales_quote_shipping_method`
--

CREATE TABLE `sales_quote_shipping_method` (
  `shipping_id` int(11) NOT NULL,
  `quote_id` int(11) NOT NULL,
  `shipping_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_quote_shipping_method`
--

INSERT INTO `sales_quote_shipping_method` (`shipping_id`, `quote_id`, `shipping_method`) VALUES
(1, 1, 'same_day'),
(2, 2, 'international'),
(3, 3, 'same_day'),
(4, 4, 'same_day'),
(5, 5, 'same_day'),
(6, 6, 'normal_day'),
(7, 7, 'same_day'),
(8, 8, 'normal_day'),
(9, 10, 'same_day'),
(10, 11, 'same_day'),
(11, 13, 'same_day'),
(12, 16, 'same_day'),
(13, 17, 'normal_day'),
(14, 18, 'normal_day');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `catalog_category`
--
ALTER TABLE `catalog_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `catalog_product`
--
ALTER TABLE `catalog_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `ccc_bmi_calculator`
--
ALTER TABLE `ccc_bmi_calculator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ccc_collection`
--
ALTER TABLE `ccc_collection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `ccc_country`
--
ALTER TABLE `ccc_country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_address`
--
ALTER TABLE `customer_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `import`
--
ALTER TABLE `import`
  ADD PRIMARY KEY (`import_id`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  ADD PRIMARY KEY (`order_customer_id`);

--
-- Indexes for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- Indexes for table `sales_order_status_history`
--
ALTER TABLE `sales_order_status_history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `sales_quote`
--
ALTER TABLE `sales_quote`
  ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  ADD PRIMARY KEY (`quote_customer_id`);

--
-- Indexes for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  ADD PRIMARY KEY (`shipping_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catalog_category`
--
ALTER TABLE `catalog_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `catalog_product`
--
ALTER TABLE `catalog_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `ccc_bmi_calculator`
--
ALTER TABLE `ccc_bmi_calculator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ccc_collection`
--
ALTER TABLE `ccc_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ccc_country`
--
ALTER TABLE `ccc_country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `customer_address`
--
ALTER TABLE `customer_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `import`
--
ALTER TABLE `import`
  MODIFY `import_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales_order_customer`
--
ALTER TABLE `sales_order_customer`
  MODIFY `order_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales_order_item`
--
ALTER TABLE `sales_order_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales_order_payment_method`
--
ALTER TABLE `sales_order_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales_order_shipping_method`
--
ALTER TABLE `sales_order_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales_order_status_history`
--
ALTER TABLE `sales_order_status_history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sales_quote`
--
ALTER TABLE `sales_quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales_quote_customer`
--
ALTER TABLE `sales_quote_customer`
  MODIFY `quote_customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `sales_quote_item`
--
ALTER TABLE `sales_quote_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sales_quote_payment_method`
--
ALTER TABLE `sales_quote_payment_method`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sales_quote_shipping_method`
--
ALTER TABLE `sales_quote_shipping_method`
  MODIFY `shipping_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ccc_collection`
--
ALTER TABLE `ccc_collection`
  ADD CONSTRAINT `ccc_collection_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `ccc_country` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
