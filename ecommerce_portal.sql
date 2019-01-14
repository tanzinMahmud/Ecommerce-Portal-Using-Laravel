-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 03:46 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_address` varchar(300) NOT NULL,
  `order_date` date NOT NULL,
  `shipping_date` date NOT NULL,
  `order_amount` int(11) NOT NULL,
  `delivery_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `customer_address`, `order_date`, `shipping_date`, `order_amount`, `delivery_status`) VALUES
(17, 18, 'Nikunja 2', '2018-08-16', '2018-08-20', 5005955, 'delivered'),
(18, 18, 'Nikunja 2', '2018-08-07', '2018-08-12', 5005955, 'delivered'),
(19, 19, 'Nikunja 2', '2018-07-10', '2018-07-17', 51042, 'delivered'),
(20, 22, 'Nikunja 2', '2018-08-01', '2018-08-04', 51042, 'delivered'),
(21, 20, 'mirpur-1', '2018-06-11', '2018-06-14', 51042, 'delivered'),
(22, 19, 'Banani', '2018-08-07', '2018-08-13', 51042, 'delivered'),
(23, 19, 'Nikunja 2', '2018-08-07', '2018-08-12', 5050813, 'delivered'),
(24, 19, 'Banani', '2018-08-07', '2018-08-14', 50550, 'delivered'),
(25, 19, 'Nikunja 2', '2018-06-11', '2018-06-14', 50592, 'delivered'),
(26, 19, 'Nikunja 2', '2018-08-10', '2018-08-13', 6042, 'delivered'),
(27, 19, 'Banani', '2018-08-07', '2018-08-13', 51042, 'pending'),
(28, 19, 'hgfsdfksdjhfksd', '2018-08-07', '2018-08-12', 5050313, 'pending'),
(29, 19, 'Banani', '2018-08-07', '2018-08-12', 550, 'pending'),
(30, 19, 'Banani', '2018-08-05', '2018-08-13', 1050, 'delivered'),
(31, 19, 'Khilkhet, Dhaka-1229', '2018-07-10', '2018-07-17', 5050855, 'delivered'),
(32, 19, 'Kuril Bisswaroad', '2018-08-01', '2018-08-12', 5050813, 'pending'),
(33, 19, 'Khilkhet, Dhaka-1229', '2018-08-10', '2018-08-13', 5005613, 'pending'),
(34, 19, 'Khilkhet, Dhaka-1229', '2018-07-10', '2018-07-17', 170000, 'pending'),
(35, 19, 'Khilkhet, Dhaka-1229', '2018-07-10', '2018-07-22', 1100, 'pending'),
(36, 19, 'dhaka, khilkhet', '2018-08-10', '2018-08-13', 5000855, 'pending'),
(37, 19, 'Khilkhet, Dhaka-1229', '2018-08-01', '2018-08-04', 5100313, 'pending'),
(38, 19, 'Khilkhet, Dhaka-1229', '2018-08-07', '2018-08-12', 5542, 'delivered'),
(39, 23, 'Nikunja - 2, Khilkhet', '2018-02-23', '2018-02-26', 5842, 'delivered'),
(40, 23, 'mirpur-10', '2018-08-29', '2018-09-04', 170942, 'pending'),
(41, 24, 'mirpur-2', '2018-08-29', '2018-09-03', 500, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_details_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `order_id`, `product_id`, `price`, `quantity`) VALUES
(4, 22, 46, 50000, 1),
(5, 22, 47, 500, 1),
(6, 22, 51, 542, 1),
(7, 23, 46, 50000, 1),
(8, 23, 47, 500, 1),
(10, 24, 46, 50000, 1),
(11, 24, 47, 500, 1),
(12, 24, 55, 50, 1),
(13, 25, 46, 50000, 1),
(14, 25, 51, 542, 1),
(15, 25, 56, 50, 1),
(16, 26, 47, 500, 1),
(17, 26, 51, 542, 1),
(18, 26, 53, 5000, 1),
(19, 27, 51, 542, 1),
(20, 27, 47, 500, 1),
(21, 27, 46, 50000, 1),
(22, 28, 46, 50000, 1),
(24, 29, 47, 500, 1),
(25, 29, 54, 50, 1),
(26, 30, 47, 500, 1),
(27, 30, 55, 50, 1),
(28, 30, 52, 500, 1),
(29, 31, 51, 542, 1),
(31, 31, 46, 50000, 1),
(32, 32, 46, 50000, 1),
(33, 32, 47, 500, 1),
(36, 33, 53, 5000, 1),
(37, 33, 64, 300, 1),
(38, 34, 46, 50000, 1),
(39, 34, 69, 120000, 1),
(40, 35, 62, 300, 1),
(41, 35, 64, 300, 1),
(42, 35, 65, 500, 1),
(44, 36, 51, 542, 1),
(45, 37, 59, 50000, 1),
(47, 37, 61, 50000, 1),
(48, 38, 51, 542, 1),
(49, 38, 53, 5000, 1),
(50, 39, 51, 542, 1),
(51, 39, 53, 5000, 1),
(52, 39, 64, 300, 1),
(53, 40, 51, 542, 1),
(54, 40, 61, 50000, 1),
(55, 40, 64, 300, 1),
(56, 40, 55, 50, 1),
(57, 40, 54, 50, 1),
(58, 40, 69, 120000, 1),
(59, 41, 52, 500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(70) NOT NULL,
  `short_desc` varchar(300) NOT NULL,
  `img_path` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `short_desc`, `img_path`, `price`, `stock`) VALUES
(46, 5, 'Asus Rog', 'Asus Rog Gaming Laptop', '00.png', 50000, 199),
(47, 13, 'Apple Watch', 'Pink Color Apple Watch', 'watch 1.png', 500, 20),
(51, 6, 'Hp Desktop', 'This is what you want', 'desktop 1.png', 542, 241),
(52, 13, 'Apple Tv', 'All new Apple Tv', 'apple tv.png', 500, 19),
(53, 6, 'Asus Desktop', 'New Rog Desktop', 'desktop 3.png', 5000, 463),
(54, 1, 'Iphone X', 'All New Iphone x 64 GB', 'iphone-x-silver-select-2017.png', 50, 19),
(55, 13, 'Apple Watch', 'Apple Sports Watch', 'watch 2.png', 50, 19),
(56, 6, 'Msi Gaming', 'New Msi Gaming Desktop', 'desktop 4.png', 50, 40),
(58, 16, 'Samsung Smart TV', 'New 42 inch Samsung Smart TV', 'samsung.png', 42000, 20),
(59, 16, 'Sony Full HD TV', 'Sony 52 inc Full HD TV', 'sony.png', 50000, 19),
(61, 16, 'LG Smart Tv', 'LG 52 inc Full HD TV', 'lg.png', 50000, 18),
(62, 17, 'Polo Shirt', 'Men\'s New Polo SHirt', 'shirt.png', 300, 9),
(63, 17, 'V neck shirt', 'Fit v neck shirt', 'polo 1.png', 500, 20),
(64, 17, 'Polo Shirt', 'Men\'s New Polo SHirt', 'cool.png', 300, 6),
(65, 17, 'V neck shirt', 'Fit v neck shirt', 'polo 2.png', 500, 19),
(69, 5, 'macbook pro', 'specification goes here..', '20171115234808MACBOOKPRO.jpg', 120000, 18);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(70) NOT NULL,
  `short_desc` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `short_desc`) VALUES
(1, 'Smart Phones', 'all smart phones are here.'),
(5, 'Laptop', 'All laptop are here'),
(6, 'desktop', 'All new Desktop is here'),
(13, 'apple', 'Mac Book, MacBook Pro, Apple Tv....'),
(16, 'tv', 'Sony, Samsung.......'),
(17, 'Clothing', 'Men\'s Clothing, Women\'s Clothing'),
(18, 'Shoes', 'all shoes are here...');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `user_type_id`) VALUES
(1, 'Administrator', 'admin@gmail.com', '12345678', 'male', 1),
(15, 'John', 'john@gmail.com', '12345678', 'male', 2),
(18, 'Nishat', 'nishat@gmail.com', '12345678', 'female', 2),
(19, 'Rakib', 'rakib@gmail.com', '12345678', 'male', 2),
(20, 'Tanzin', 'tanzin@gmail.com', '12345678', 'male', 2),
(22, 'Mahmud', 'mahmud@gmail.com', '12345678', 'male', 2),
(23, 'Shamim', 'Shamim@gmail.com', '12345678', 'male', 2),
(24, 'Mina', 'mina@gmail.com', '12345678', 'female', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `type_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `type_name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_fk` (`customer_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id_fk` (`product_id`),
  ADD KEY `order_datils_fk` (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_cat_relation` (`category_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_unique` (`category_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `em_uniqe` (`email`),
  ADD KEY `user_type_id` (`user_type_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_fk` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_datils_fk` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `product_id_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_cat_relation` FOREIGN KEY (`category_id`) REFERENCES `product_category` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `usertypeFK` FOREIGN KEY (`user_type_id`) REFERENCES `user_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
