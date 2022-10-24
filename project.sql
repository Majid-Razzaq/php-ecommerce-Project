-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2021 at 10:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `email`, `password`, `role`, `img`) VALUES
(1, 'Abdul Majid', 'majid@gmail.com', '123', 'Admin', '8f69b31098aba7ec51c0082178902161.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `b_name` varchar(200) NOT NULL,
  `b_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `b_name`, `b_date`) VALUES
(1, 'Gucci', '2021-09-19 11:09:03'),
(2, 'Rolex', '2021-09-19 13:33:13'),
(21, 'Art Creations', '2021-09-22 03:14:46'),
(22, 'Gifts Gallery', '2021-09-22 03:25:35'),
(23, 'Love Ya Cards', '2021-09-22 03:27:13'),
(24, 'Fashion Dolls', '2021-09-22 03:47:04'),
(25, 'Classik', '2021-09-22 03:52:09'),
(26, 'Gucci', '2021-09-22 03:59:00'),
(27, 'LOreal', '2021-09-22 04:00:00'),
(28, 'AVON', '2021-09-22 09:08:50'),
(29, 'LANCÔM', '2021-09-22 09:13:05'),
(31, 'neww', '2021-10-06 23:04:45');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `cat_name` varchar(200) NOT NULL,
  `cat_dateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `cat_name`, `cat_dateTime`) VALUES
(1, 'Dolls', '2021-09-19 08:22:46'),
(2, 'gifts', '2021-09-19 08:24:31'),
(3, 'watch', '2021-09-19 08:32:48'),
(4, 'Greeting Card', '2021-09-19 10:36:00'),
(5, 'Arts', '2021-09-21 21:30:41'),
(6, 'Gift Articles', '2021-09-21 21:31:42'),
(18, 'gift articles', '2021-09-21 21:34:52'),
(19, 'Dolls', '2021-09-21 21:35:51'),
(20, 'Files', '2021-09-21 21:36:06'),
(21, 'Hand Bags', '2021-09-21 21:36:20'),
(22, 'Wallets', '2021-09-21 21:36:32'),
(23, 'beauty products', '2021-09-22 01:53:13'),
(27, 'new', '2021-10-06 18:04:33');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `username`, `email`, `message`) VALUES
(2, 'Majid', 'majid@gmail.com', 'message from contact form'),
(3, 'umair', 'umair@gmail.com', 'message from contact form'),
(4, 'umair', 'umair@gmail.com', 'dfsdfgsdgfdgdfg');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `question` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`) VALUES
(1, 'Can I return my items after the return window has expired?', 'If you experience issues after the Shopping Cart return/exchange period has elapsed, you can claim your warranty (if any) from the authorized service center of the brand.'),
(2, 'Do I have to return all products in my order?', 'No, you do not have to return your whole order. It is fine just to return certain products.'),
(3, 'Do I have to pay for shipping charges when I return a product?', 'There are no charges for shipping a product back to Online Shopping..'),
(4, 'How long will it take to receive my replacement?', 'It will take between 5 and 22 days to send you the replacement product');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` bigint(13) NOT NULL,
  `message` varchar(500) NOT NULL,
  `Feedback_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `username`, `email`, `contact`, `message`, `Feedback_time`) VALUES
(1, 'Majid', 'majid@gmail.com', 3222682821, 'Best Products', '2021-09-24 02:03:11'),
(4, 'majid', 'majid@gmail.com', 34834983984, 'this product is good', '2021-09-24 02:03:11'),
(5, 'Umair Khan', 'umair@gmail.com', 3132905037, 'Excellent experience. The product is same as shown and described. Quality is also good. I like it. Overall it was excellent experience.', '2021-09-24 18:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `id` int(11) NOT NULL,
  `p_id` varchar(225) NOT NULL,
  `p_name` varchar(225) NOT NULL,
  `p_img` varchar(225) NOT NULL,
  `p_qty` int(15) NOT NULL,
  `prd_price` decimal(10,2) NOT NULL,
  `order_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`id`, `p_id`, `p_name`, `p_img`, `p_qty`, `prd_price`, `order_time`, `total_amount`) VALUES
(9, '', '', '', 0, '0.00', '2021-10-04 17:30:22', '0.00'),
(10, '', '', '', 0, '0.00', '2021-10-04 17:32:27', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` decimal(10,2) NOT NULL,
  `p_details` varchar(255) NOT NULL,
  `p_category` varchar(255) NOT NULL,
  `p_brand` varchar(255) NOT NULL,
  `p_img` varchar(500) NOT NULL,
  `p_img1` varchar(500) NOT NULL,
  `p_img2` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_price`, `p_details`, `p_category`, `p_brand`, `p_img`, `p_img1`, `p_img2`) VALUES
(9, 'lipstick', '99.00', 'Shiny red', 'beauty products', 'LOreal', 'lipstick.jpg', 'lipstick2.jpg', 'lipstick3.jpg'),
(10, 'Facewash', '150.00', 'Essence My Skin Perfector Tinted Primer', 'beauty products', 'AVON', 'facewash.jpg', 'essence.jpg', 'makeup2.jpg'),
(11, 'Face MakeUp', '999.00', 'Essence My Skin Perfector Tinted Primer', 'beauty products', 'AVON', 'essence.jpg', 'makeup(2).jpg', 'makeup(3).jpg'),
(12, 'Eye Cream', '128.00', 'Absolue Revitalizing Eye Cream', 'beauty products', 'LANCÔM', 'img4.jpg', 'cream2.jfif', 'cream3.jpg'),
(13, 'BAG-YELLOW', '2300.00', 'Enhance Your Beauty', 'Hand Bags', 'Gucci', 'handbag1.jpg', 'handbag2.jpg', 'handbag3.jpg'),
(14, 'LEATHER BAG', '2550.00', 'Best guaranteed Leather Product', 'Hand Bags', 'Gucci', 'handbag2.jpg', 'handbag4.jpg', 'handbag3.jpg'),
(15, 'MINI HAND BAG', '333.00', 'Good product', 'Hand Bags', 'Gucci', 'handbag3.jpg', 'handbag2.jpg', 'handbag1.jpg'),
(16, 'HANDBAG-PINK', '3200.00', 'Best Selling Product', 'Hand Bags', 'Gucci', 'handbag4.jpg', 'handbag1.jpg', 'handbag3.jpg'),
(17, 'Rolex Daytona', '16780.00', 'Platinum', 'watch', 'Rolex', 'rolex7.jpg', 'rolex3.jpg', 'rolex2.jpg'),
(18, 'Rolex Yacht Master', '16780.00', 'Best Product for Men', 'watch', 'Rolex', 'rolex5.jpg', 'rolex3.jpg', 'rolex2.jpg'),
(19, 'Rolex Datejust', '29000.00', 'Amazing Rolex watch', 'watch', 'Rolex', 'rolex8.png', 'rolex2.jpg', 'rolex3.jpg'),
(20, 'Rolex Oyster', '11264.00', 'Stainless Steel', 'watch', 'Rolex', 'rolex9.jpg', 'rolex2.jpg', 'rolex3.jpg'),
(21, 'Black Leather Wallet', '1516.00', 'Maximize storage in minimalist design', 'Wallets', 'Classik', 'wallet1.jpg', 'wallet4.jpg', 'wallet2.jpg'),
(22, 'Brown Wallet', '1516.00', 'Store all your cards and cash in a clean and tidy way', 'Wallets', 'Gucci', 'wallet2.jpg', 'wallet4.jpg', 'wallet3.jpg'),
(23, 'Brown Wallet', '1516.00', 'Small enough to fit in a pocket', 'Wallets', 'Gucci', 'wallet3.jpg', 'wallet2.jpg', 'wallet4.jpg'),
(24, 'Black Leather Wallet', '956.00', 'fit in a pocket', 'Wallets', 'Gucci', 'wallet4.jpg', 'wallet2.jpg', 'wallet1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` bigint(13) NOT NULL,
  `address` varchar(200) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `username`, `email`, `password`, `contact`, `address`, `img`) VALUES
(2, 'umair', 'umair@gmail.com', '123', 3132905037, 'Karachi', '25bf93249c00dd938810534be0333fdf.jpg'),
(41, 'Wajid', 'wajid@gmail.com', '123', 3222682821, 'Karachi', '49df07ffea248dfca6a579e9096fa04f.jpg'),
(42, 'Sarfaraz', 'sarfaraz@gmail.com', '321', 3232626823, 'Karachi Pakistan', '78751d17f3b82785082874bce794aa45.jpg'),
(1001, 'Majid', 'majid@gmail.com', '123', 2147483647, 'Karachi Pakistan ', 'Screenshot_20210804_092709_com.android.gallery3d.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1036;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
