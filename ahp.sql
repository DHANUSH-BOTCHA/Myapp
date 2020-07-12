-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2020 at 05:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ahp`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(9, 'Arts and Cosmetics'),
(15, 'Books and Stationary'),
(2, 'Computers'),
(10, 'Daily Lifestyle'),
(14, 'Daily Products'),
(11, 'Dairy Products'),
(1, 'Electronics'),
(13, 'Footware'),
(3, 'Furniture'),
(7, 'Games'),
(12, 'Groceries'),
(5, 'Household'),
(6, 'Outdoors'),
(8, 'Personal Care'),
(4, 'Software');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `stock`, `price`, `description`) VALUES
(1, 'Pro Headset', 9, '1500.00', 'Headphones and microphone combination for all your media purposes. Compactiable for PCs and Macs.'),
(2, 'Electric Tooth Brush', 16, '399.39', 'The latest dental care from the future technologies'),
(3, 'Tablet PC', 4, '59.00', 'Use a desktop OS on a tablet of touch sensor'),
(4, 'Vaccum Cleaner', 8, '3500.58', 'Clean your house in a cordless manner with Vaccumer'),
(5, 'Bluetooth Speaker', 5, '999.99', 'Play music or any audio files in wireless manner'),
(6, '15 inch Laptop Bag', 8, '499.23', 'Carry your laptop with this multi futured bag'),
(7, 'Smart Watch', 7, '2999.99', 'Can compactible with all buletooth devices'),
(8, 'eBook Reader', 8, '699.23', 'Read all your pdf and infos with less harming Reader'),
(9, 'Travel Bag', 5, '1999.45', 'Carry all your personal and important items in the most safest manner to anywhere'),
(10, 'Smart Kit', 46, '733.09', 'this is also known as AHP special which inculed every thing for daily needs'),
(11, 'Dongle', 8, '200.00', 'This is a powerful connection provider upto 8 devices'),
(12, 'Badminton Racaqet', 76, '1999.23', 'The most popular light weight racaqet prefered by professionals'),
(13, 'Wireless headphones', 23, '999.99', 'One of the most popular headset used by many of our users'),
(14, 'Men T shirts', 30, '99.99', 'This is one of the best t shirts sold in our website'),
(15, 'AHP Eletro Pento', 1, '60000.00', 'Here is the most rated one a set of Electronics having TV, Refridgerator...'),
(16, 'Powerbank', 5, '880.49', 'Long lasting power back from your choice'),
(17, 'AHP Bedroom Set', 1, '2000.76', 'it is also one the famous kit from our side'),
(18, 'Wall stickers', 5, '99.49', 'Good looking wall stickers for long lasting duration of years'),
(19, 'Exetension box', 4, '300.00', 'A box having 5 socket holders'),
(20, 'AHP Dining set', 1, '10000.00', 'A full set of the dining set'),
(21, 'APH Medicare Set', 1, '599.93', 'This is also one of the best medicare set including all basic mediciens'),
(22, 'AHP Footware Set', 1, '499.35', 'This is the one set constaining your choice of footware to your family'),
(23, 'AHP Home Products', 1, '2599.99', 'This also includes the all daily needs for the family'),
(24, 'AHP Grocreies', 1, '250.99', 'This is also includes a set vegetables for one week.'),
(25, 'AHP Child Acessiores', 1, '699.23', 'This set includes all necessary products to your child'),
(26, 'AHP Homemaker Set', 1, '899.97', 'This set includes all kind of the requirements for the homemakers'),
(27, 'AHP Personal', 1, '1000.00', 'This set requires to be 18+ for the purchasement of this set.');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `product_id`, `category_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 6, 2),
(4, 6, 15),
(5, 6, 10),
(6, 17, 14),
(7, 17, 5),
(8, 25, 8),
(9, 25, 5),
(10, 20, 10),
(11, 20, 3),
(12, 20, 14),
(13, 15, 1),
(14, 15, 5),
(15, 15, 14),
(16, 22, 10),
(17, 22, 6),
(18, 22, 14),
(19, 24, 5),
(20, 24, 12),
(21, 26, 9),
(22, 26, 11),
(23, 26, 8),
(24, 26, 5),
(25, 23, 5),
(26, 23, 14),
(27, 23, 12),
(28, 27, 14),
(29, 27, 8),
(30, 21, 8),
(31, 21, 6),
(35, 12, 7),
(36, 12, 6),
(37, 12, 10),
(38, 5, 1),
(39, 5, 2),
(40, 5, 4),
(41, 11, 1),
(42, 11, 2),
(43, 11, 4),
(44, 8, 1),
(45, 8, 2),
(46, 8, 4),
(47, 2, 1),
(48, 2, 14),
(49, 2, 9),
(50, 19, 1),
(51, 19, 5),
(52, 14, 10),
(53, 16, 1),
(54, 16, 7),
(55, 1, 1),
(56, 1, 7),
(57, 10, 15),
(58, 10, 8),
(59, 7, 7),
(60, 7, 6),
(61, 7, 10),
(62, 7, 4),
(63, 3, 1),
(64, 3, 2),
(65, 3, 4),
(66, 9, 10),
(67, 9, 5),
(68, 9, 9),
(69, 4, 14),
(70, 4, 5),
(71, 4, 3),
(72, 18, 9),
(73, 18, 10),
(74, 18, 15),
(75, 13, 1),
(76, 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'test', 'test@test.com', '1234'),
(7, 'Dhanush', 'dhanu@gmail.com', '$2y$10$wXA06eixPXz8T'),
(8, 'Dhanush', 'dhanu@gmail.com', '18112016'),
(9, 'Dhanush', 'bvs@gmail.com', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `product_category_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `product_category_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
