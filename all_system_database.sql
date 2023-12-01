-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2023 at 06:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `all_system_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_categories`
--

CREATE TABLE `tbl_webjdreamcorp_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webjdreamcorp_categories`
--

INSERT INTO `tbl_webjdreamcorp_categories` (`id`, `name`, `description`) VALUES
(1, 'Baby Care', 'Ensure the gentle care and nurturing of your little ones with our comprehensive range of baby care products, offering everything from diapers and wipes to skincare essentials.'),
(2, 'Beverages', 'Discover a refreshing assortment of beverages, from energizing coffees and teas to hydrating juices and sparkling drinks, perfect for any occasion.'),
(3, 'Biscuits', 'Indulge in a delightful selection of biscuits and cookies, featuring a medley of flavors and textures to satisfy your snack cravings.'),
(4, 'Bread, Spreads, and Bakery Snacks', 'Explore our bakery delights with fresh bread, a variety of spreads, and an assortment of delectable bakery snacks, ideal for quick bites or hearty meals.'),
(5, 'Breakfast', 'Start your day right with our breakfast essentials, including cereals, oats, granola, and other morning delights to fuel your mornings.'),
(6, 'Baking', 'Elevate your culinary adventures with our baking essentials, offering flour, sugar, baking mixes, and more for creating delicious homemade treats.'),
(7, 'Canned and Dried Goods', 'Stock up on pantry staples with our collection of canned goods and dried ingredients, providing convenience without compromising quality.'),
(8, 'Chips, Nuts, and More', 'Explore a tempting array of savory snacks, including chips, nuts, and other flavorful munchies perfect for any snacking occasion.'),
(9, 'Chocolates, Candies, and More', 'Indulge your sweet tooth with our selection of chocolates, candies, and delightful confections for a blissful treat.'),
(10, 'Cooking Aids', 'Find the perfect cooking aids and seasonings to enhance flavors, simplify meal prep, and elevate your culinary creations effortlessly.'),
(11, 'Fresh', 'Experience the freshness of our produce and perishable goods, carefully curated to bring you the finest fruits, vegetables, meats, and dairy products.'),
(12, 'Frozen Food', 'Discover convenience without compromise with our assortment of frozen foods, offering a variety of options for quick and easy meal solutions.'),
(13, 'Milk, Egg, Butter, and More', 'Enjoy the essentials with our range of dairy products, ensuring you have the freshest milk, eggs, butter, and more for your kitchen needs.'),
(14, 'Rice, Pasta, and Noodles', 'Explore global flavors with our diverse selection of rice, pasta, and noodles, perfect for creating flavorful dishes from around the world.'),
(15, 'Health and Beauty', 'Take care of yourself inside and out with our health and beauty products, offering wellness essentials, skincare, and personal care items.'),
(16, 'Home Care', 'Keep your home clean and organized with our range of home care products, including cleaning supplies and household essentials.'),
(17, 'Pet Care', 'Ensure your furry friends are well taken care of with our pet care range, providing everything from food and treats to grooming supplies.'),
(18, 'Wine, Beer, Liquor, and Cigarettes', 'Elevate your gatherings with our selection of alcoholic beverages and cigarettes, featuring a variety of options to suit your preferences.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_messages`
--

CREATE TABLE `tbl_webjdreamcorp_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webjdreamcorp_messages`
--

INSERT INTO `tbl_webjdreamcorp_messages` (`id`, `name`, `mobile_number`, `email`, `subject`, `message`) VALUES
(1, 'Mark Chito Anteja', '09511816599', '00anteja23@gmail.com', 'King Ina mo ka', 'sadasd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_newsletter`
--

CREATE TABLE `tbl_webjdreamcorp_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webjdreamcorp_newsletter`
--

INSERT INTO `tbl_webjdreamcorp_newsletter` (`id`, `email`) VALUES
(1, 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_products`
--

CREATE TABLE `tbl_webjdreamcorp_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float(11,2) NOT NULL,
  `cost_price` float(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_useraccounts`
--

CREATE TABLE `tbl_webjdreamcorp_useraccounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webjdreamcorp_useraccounts`
--

INSERT INTO `tbl_webjdreamcorp_useraccounts` (`id`, `name`, `username`, `password`, `image`, `user_type`) VALUES
(1, 'Administrator', 'admin', '$2y$10$qZaaUdNw9dwAlnMZDFfqSOj5mVKvlNC86XHgRRWs/UaKyQMHZINby', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_webjdreamcorp_categories`
--
ALTER TABLE `tbl_webjdreamcorp_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_messages`
--
ALTER TABLE `tbl_webjdreamcorp_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_newsletter`
--
ALTER TABLE `tbl_webjdreamcorp_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_products`
--
ALTER TABLE `tbl_webjdreamcorp_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_useraccounts`
--
ALTER TABLE `tbl_webjdreamcorp_useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_categories`
--
ALTER TABLE `tbl_webjdreamcorp_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_messages`
--
ALTER TABLE `tbl_webjdreamcorp_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_newsletter`
--
ALTER TABLE `tbl_webjdreamcorp_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_products`
--
ALTER TABLE `tbl_webjdreamcorp_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_useraccounts`
--
ALTER TABLE `tbl_webjdreamcorp_useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
