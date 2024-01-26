-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 25, 2024 at 06:42 PM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 8.1.16

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
(1, 'Baby Care', 'Ensure '),
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
-- Table structure for table `tbl_webjdreamcorp_customers`
--

CREATE TABLE `tbl_webjdreamcorp_customers` (
  `id` int(11) NOT NULL,
  `useraccount_id` varchar(255) NOT NULL,
  `date_registered` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `subdivision_zone_purok` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webjdreamcorp_customers`
--

INSERT INTO `tbl_webjdreamcorp_customers` (`id`, `useraccount_id`, `date_registered`, `first_name`, `middle_name`, `last_name`, `mobile_number`, `email`, `house_number`, `subdivision_zone_purok`, `city`, `province`, `country`, `zip_code`) VALUES
(1, '31', '2023-12-05', 'Maria', 'Luisa', 'Santos', '09123456789', 'maria.santos@email.com', '123', 'Greenfield Subdivision', 'Lupi', 'Camarines Sur', 'Philippines', '4404'),
(2, '32', '2023-12-11', 'Juan', 'Miguel', 'Cruz', '09776543210', 'juan.cruz@email.com', '456', 'Oakridge Village', 'Caramoan', 'Camarines Sur', 'Philippines', '4420'),
(3, '33', '2023-12-13', 'Sofia', 'Gabriela', 'Reyes', '09339876543', 'sofia.reyes@email.com', '789', 'Sunnydale Heights', 'Iriga City', 'Camarines Sur', 'Philippines', '4431'),
(4, '34', '2023-12-17', 'Diego', 'Alejandro', 'Garcia', '09551237890', 'diego.garcia@email.com', '321', 'Magnolia Park', 'Lupi', 'Camarines Sur', 'Philippines', '4404'),
(5, '35', '2023-12-18', 'Camille', 'Therese', 'Lopez', '09224567890', 'camille.lopez@email.com', '987', 'Palm Grove Estates', 'San Jose', 'Camarines Sur', 'Philippines', '4423'),
(6, '36', '2023-12-20', 'Rafael', 'Eduardo', 'Martinez', '09661112222', 'rafael.martinez@email.com', '555', 'Sunset Heights', 'Siruma', 'Camarines Sur', 'Philippines', '4424'),
(7, '37', '2023-12-21', 'Isabella', 'Sophia', 'Dela Cruz', '09334445555', 'isabella.delacruz@email.com', '222', 'Rosewood Village', 'Camaligan', 'Camarines Sur', 'Philippines', '4406'),
(8, '38', '2023-12-24', 'Gabriel', 'Antonio', 'Fernandez', '09777778888', 'gabriel.fernandez@email.com', '777', 'Emerald Hills', 'Sipocot', 'Camarines Sur', 'Philippines', '4401'),
(17, '48', '2024-01-15', 'Maria Jessica', '', 'Soltes', '09486329263', 'soltesmariajessica240@gmail.com', '', '', 'Tinambac', 'Camarines Sur', 'Philippines', '4427'),
(18, '49', '2024-01-16', 'Keia ', 'Sagales', 'Balite', '09816627347', 'keiabalite376@gmail.ckm', '323', 'Zone 7', 'Tinambac', 'Camarines Sur', 'Philippines', '4427'),
(19, '50', '2024-01-16', 'Jesavel ', 'Mora', 'Natividad ', '09501565950', 'natividadjesavel@gmail.com', '', '2', 'Tinambac', 'Camarines Sur', 'Philippines', '4427'),
(20, '51', '2024-01-16', 'Lemy', 'Manes', 'Villarino ', '09123301385', 'lemyvillarino725@gmail.com', '', 'Zone 1', 'Tinambac', 'Camarines Sur', 'Philippines', '4427'),
(21, '52', '2024-01-23', 'Mark Chito', 'Rizano', 'Anteja', '09511816599', '00python23@gmail.com', '', '', 'Caramoan', 'Camarines Sur', 'Philippines', '4420'),
(22, '53', '2024-01-23', 'arjay', 'kakana', 'nnhdbwkA', '09326487636', 'BBBBBB@GAMIL.COM', '', '', 'Tinambac', 'Camarines Sur', 'Philippines', '4427');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_messages`
--

CREATE TABLE `tbl_webjdreamcorp_messages` (
  `id` int(11) NOT NULL,
  `message_date` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webjdreamcorp_messages`
--

INSERT INTO `tbl_webjdreamcorp_messages` (`id`, `message_date`, `name`, `mobile_number`, `email`, `subject`, `message`, `status`) VALUES
(1, '2024-01-18 21:51', 'Mark Chito Anteja', '09511816599', '00anteja23@gmail.com', 'Dry run of the system on Sunday ', 'We will be conducting a dry run this coming Sunday, January 21, 2024. We will be discussing on the new updates of the system as well as the changes that your instructor give last Monday.', 'read'),
(2, '2024-01-20 10:07', 'Py Thon', '09511816599', '00python23@gmail.com', 'Testing the website', 'This is a sample message. This is to test the website\'s SMTP server.', 'read'),
(3, '2024-01-20 11:45', 'Vhella Natividad ', '09501565950', 'natividadjesavel@gmail.com', 'wholesaler ', 'hi po ☺️', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_newsletter`
--

CREATE TABLE `tbl_webjdreamcorp_newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_orders`
--

CREATE TABLE `tbl_webjdreamcorp_orders` (
  `id` int(11) NOT NULL,
  `tracking_id` varchar(255) NOT NULL,
  `transaction_date` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_amount` float(11,2) NOT NULL,
  `status` varchar(255) NOT NULL,
  `delivery_status` varchar(255) NOT NULL,
  `completed_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_webjdreamcorp_orders`
--

INSERT INTO `tbl_webjdreamcorp_orders` (`id`, `tracking_id`, `transaction_date`, `customer_id`, `item_id`, `quantity`, `total_amount`, `status`, `delivery_status`, `completed_status`) VALUES
(1, '20240115223009', '2024-01-20 21:43', 31, 38, 12, 672.00, 'Completed', 'Delivered', 'read'),
(2, '20240115223009', '2024-01-15 22:30', 31, 19, 3, 690.00, 'To Rate', 'Delivered', ''),
(3, '20240115223009', '2024-01-15 22:30', 31, 23, 10, 767.50, 'To Rate', 'Delivered', ''),
(4, '', '2024-01-20 10:05', 31, 38, 3, 168.00, 'Cart', '', ''),
(5, '20240116122641', '2024-01-22 04:20', 49, 37, 1, 24.00, 'To Rate', 'Delivered', ''),
(6, '20240116122641', '2024-01-22 04:20', 49, 36, 1, 15.00, 'To Rate', 'Delivered', ''),
(7, '20240116122641', '2024-01-22 04:20', 49, 35, 1, 72.00, 'To Rate', 'Delivered', ''),
(8, '20240116173427', '2024-01-22 04:21', 49, 40, 1, 380.00, 'To Rate', 'Delivered', ''),
(9, '20240116173427', '2024-01-22 04:21', 49, 39, 1, 80.00, 'To Rate', 'Delivered', ''),
(10, '20240116173427', '2024-01-22 04:21', 49, 38, 10, 560.00, 'To Rate', 'Delivered', ''),
(11, '20240116173556', '2024-01-23 13:07', 51, 39, 1, 80.00, 'To Rate', 'Delivered', ''),
(12, '20240117130045', '2024-01-17 13:00', 50, 39, 12, 960.00, 'To Rate', 'Delivered', ''),
(13, '20240117173031', '2024-01-22 13:31', 51, 40, 1, 380.00, 'Completed', 'Delivered', 'read'),
(14, '', '2024-01-17 10:25', 49, 40, 2, 760.00, 'Cart', '', ''),
(15, '', '2024-01-17 10:25', 49, 39, 2, 160.00, 'Cart', '', ''),
(16, '20240117103217', '2024-01-20 18:33', 50, 23, 1, 76.75, 'To Rate', 'Delivered', ''),
(17, '20240117130045', '2024-01-17 13:00', 50, 41, 100, 2400.00, 'To Rate', 'Delivered', ''),
(18, '', '2024-01-20 15:03', 51, 69, 1, 35.00, 'Rejected', '', ''),
(19, '20240123130638', '2024-01-23 13:07', 51, 70, 1, 70.00, 'To Rate', 'Delivered', ''),
(20, '', '2024-01-20 11:16', 40, 71, 1, 25.75, 'Cart', '', ''),
(21, '20240120183241', '2024-01-22 04:21', 50, 68, 1, 70.00, 'To Rate', 'Delivered', ''),
(22, '', '2024-01-20 17:15', 49, 71, 1, 25.75, 'Cart', '', ''),
(24, '20240120171835', '2024-01-20 17:19', 49, 69, 1, 35.00, 'To Rate', 'Delivered', ''),
(27, '20240120180950', '2024-01-20 18:10', 49, 72, 1, 11.00, 'To Rate', 'Delivered', ''),
(28, '', '2024-01-20 18:10', 49, 72, 1, 11.00, 'Cart', '', ''),
(29, '20240123130638', '2024-01-23 13:07', 51, 38, 100, 5600.00, 'To Rate', 'Delivered', ''),
(30, '', '2024-01-22 13:24', 51, 14, 110, 12100.00, 'Cart', '', ''),
(31, '20240123130646', '2024-01-23 13:41', 52, 38, 24, 1344.00, 'Completed', 'Delivered', 'read'),
(32, '20240123130646', '2024-01-23 13:08', 52, 70, 10, 700.00, 'To Rate', 'Delivered', ''),
(33, '20240123130646', '2024-01-23 13:08', 52, 23, 10, 767.50, 'To Rate', 'Delivered', ''),
(34, '20240123132044', '2024-01-23 13:23', 32, 37, 1, 24.00, 'To Rate', 'Delivered', ''),
(35, '20240123132044', '2024-01-23 13:46', 32, 17, 1, 189.00, 'Completed', 'Delivered', 'unread'),
(36, '20240123132044', '2024-01-23 13:23', 32, 25, 1, 95.75, 'To Rate', 'Delivered', ''),
(37, '20240123132044', '2024-01-23 13:23', 32, 29, 1, 82.50, 'To Rate', 'Delivered', ''),
(38, '20240123132044', '2024-01-23 13:23', 32, 53, 1, 48.75, 'To Rate', 'Delivered', ''),
(39, '20240123132106', '2024-01-23 13:23', 33, 26, 1, 79.50, 'To Rate', 'Delivered', ''),
(40, '20240123132106', '2024-01-23 13:23', 33, 69, 1, 35.00, 'To Rate', 'Delivered', ''),
(41, '20240123132106', '2024-01-23 13:23', 33, 71, 1, 25.75, 'To Rate', 'Delivered', ''),
(42, '20240123132106', '2024-01-23 13:23', 33, 16, 1, 13.00, 'To Rate', 'Delivered', ''),
(43, '20240123132106', '2024-01-23 13:23', 33, 34, 1, 17.75, 'To Rate', 'Delivered', ''),
(44, '20240123132106', '2024-01-23 13:23', 33, 10, 1, 74.00, 'To Rate', 'Delivered', ''),
(45, '20240123132106', '2024-01-23 13:44', 33, 12, 1, 185.75, 'Completed', 'Delivered', 'unread'),
(46, '20240123132106', '2024-01-23 13:23', 33, 17, 1, 189.00, 'To Rate', 'Delivered', ''),
(47, '20240123132140', '2024-01-23 13:23', 34, 12, 1, 185.75, 'To Rate', 'Delivered', ''),
(48, '20240123132140', '2024-01-23 13:23', 34, 11, 1, 18.50, 'To Rate', 'Delivered', ''),
(49, '20240123132140', '2024-01-23 13:23', 34, 36, 1, 15.00, 'To Rate', 'Delivered', ''),
(50, '20240123132140', '2024-01-23 13:23', 34, 35, 1, 72.00, 'To Rate', 'Delivered', ''),
(51, '20240123132140', '2024-01-23 13:23', 34, 16, 1, 13.00, 'To Rate', 'Delivered', ''),
(52, '20240123132140', '2024-01-23 13:23', 34, 71, 1, 25.75, 'To Rate', 'Delivered', ''),
(53, '20240123132140', '2024-01-23 13:23', 34, 14, 1, 110.00, 'To Rate', 'Delivered', ''),
(54, '', '2024-01-23 13:17', 34, 25, 2, 191.50, 'Cart', '', ''),
(55, '20240123132140', '2024-01-23 13:23', 34, 31, 1, 82.50, 'To Rate', 'Delivered', ''),
(56, '20240123132140', '2024-01-23 13:23', 34, 55, 1, 31.50, 'To Rate', 'Delivered', ''),
(57, '20240123132140', '2024-01-23 13:23', 34, 53, 1, 48.75, 'To Rate', 'Delivered', ''),
(58, '20240123132140', '2024-01-23 13:43', 34, 52, 1, 37.75, 'Completed', 'Delivered', 'unread'),
(59, '20240123132203', '2024-01-23 13:22', 35, 12, 1, 185.75, 'To Rate', 'Delivered', ''),
(60, '20240123132203', '2024-01-23 13:22', 35, 37, 1, 24.00, 'To Rate', 'Delivered', ''),
(61, '20240123132203', '2024-01-23 13:22', 35, 35, 1, 72.00, 'To Rate', 'Delivered', ''),
(62, '20240123132203', '2024-01-23 13:22', 35, 15, 1, 297.00, 'To Rate', 'Delivered', ''),
(63, '20240123132203', '2024-01-23 13:22', 35, 70, 1, 70.00, 'To Rate', 'Delivered', ''),
(64, '20240123132203', '2024-01-23 13:22', 35, 27, 1, 76.75, 'To Rate', 'Delivered', ''),
(65, '20240123132203', '2024-01-23 13:22', 35, 24, 1, 88.00, 'To Rate', 'Delivered', ''),
(66, '20240123132203', '2024-01-23 13:22', 35, 30, 1, 82.50, 'To Rate', 'Delivered', ''),
(67, '20240123132203', '2024-01-23 13:22', 35, 53, 1, 48.75, 'To Rate', 'Delivered', ''),
(68, '', '2024-01-23 13:19', 35, 38, 1, 56.00, 'Cart', '', ''),
(70, '', '2024-01-23 14:30', 53, 9, 1, 26.50, 'To Approve', '', ''),
(71, '', '2024-01-23 14:30', 53, 11, 1, 18.50, 'To Approve', '', '');

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

--
-- Dumping data for table `tbl_webjdreamcorp_products`
--

INSERT INTO `tbl_webjdreamcorp_products` (`id`, `name`, `description`, `price`, `cost_price`, `quantity`, `category_id`, `supplier_id`, `image`) VALUES
(8, 'Babyflo Silicone Nipple Wide Neck 2s', 'Baby Flo Products', 84.00, 80.00, 100, 1, 3, '1.png'),
(9, 'Babyflo Bottle Brush Regular', 'Baby Flo Products', 26.50, 25.00, 100, 1, 3, '2.png'),
(10, 'Babyflo Silicone Nipple Blister X-Cut 3s', 'Baby Flo Products', 74.00, 70.00, 99, 1, 3, '3_1.png'),
(11, 'Babyjoy Silicone Nipples L 1s', 'Baby Flo Products', 18.50, 17.00, 99, 1, 3, '4.png'),
(12, 'Babyflo Feeding Bowl', 'Baby Flo Products', 185.75, 180.00, 97, 1, 3, '5.png'),
(13, 'Milo Activ-Go Winner Powdered Choco Malt Milk Drink 300g', 'Nestle Products', 99.50, 98.00, 100, 2, 3, '1_1.png'),
(14, 'Milo Activ-Go Powdered Choco Malt Milk Drink 12x24g', 'Nestle Products', 110.00, 108.00, 99, 2, 4, '2_1.png'),
(15, 'Milo Activ-Go Powdered Choco Malt Milk Drink 1kg', 'Nestle Products', 297.00, 295.00, 99, 2, 4, '3_2.png'),
(16, 'Goya Everyday Instant Powdered Milk Chocolate Drink 26g', 'Goya Products', 13.00, 10.00, 98, 2, 4, '4_6.png'),
(17, 'Milo Activ-Go Powdered Choco Malt Milk Drink 600g', 'Nestle Products', 189.00, 187.00, 98, 2, 4, '5_6.png'),
(18, 'Fibisco Choco Chip Cookies 200g', 'Fibisco Products', 62.25, 60.00, 100, 3, 2, '1_2.png'),
(19, 'Fibisco Choco Chip Cookies 600g', 'Fibisco Products', 230.00, 227.00, 97, 3, 2, '2_2.png'),
(20, 'Chips Delight Cookies Baon Pack 10s', 'Chips Delight Products', 84.25, 83.00, 100, 3, 2, '3_3.png'),
(21, 'Chips Ahoy Regular Cookies 142.5g', 'Chips Ahoy Products', 82.50, 80.00, 100, 3, 2, '4_2.png'),
(22, 'Chips Delight Mini Chocolate Chip Cookies 35g', 'Chips Delight Products', 14.00, 12.00, 100, 3, 2, '5_2.png'),
(23, 'Fudgee Barr Chocolate 10x40g', 'Fudgee Bar Products', 76.75, 74.00, 79, 4, 3, '1_3.png'),
(24, 'Jack n Jill Quake Overload Bar Caramel Craze 10x34g', 'Quake Overload Products', 88.00, 86.00, 99, 4, 3, '2_3.png'),
(25, 'Monde Cheese Bar 10x23g', 'Mode Products', 95.75, 93.00, 99, 4, 3, '3_4.png'),
(26, 'Brownie Break Nutty Brownie 20x14.5g', 'Brownie Break Products', 79.50, 77.00, 99, 4, 3, '4_3.png'),
(27, 'Fudgee Barr Flavor Combo 10x39g', 'Fudgee Bar Products', 76.75, 74.00, 99, 4, 3, '5_3.png'),
(28, 'Energen Oat Cereal Mix Vanilla Sachet 10x40g', 'Energen Products', 82.50, 80.00, 100, 5, 4, '1_4.png'),
(29, 'Energen Oat Cereal Mix Chocolate Sachet 10x40g', 'Eneregen Products', 82.50, 80.00, 99, 5, 4, '2_4.png'),
(30, 'Energen Oat Cereal Mix Vanilla Mini Bag 10x40g', 'Energen Products', 82.50, 80.00, 99, 5, 4, '3_5.png'),
(31, 'Energen Oat Cereal Mix Chocolate Mini Bag 10x40g', 'Energen Products', 82.50, 80.00, 99, 5, 4, '4_4.png'),
(32, 'Vita Quaker Oat Cereal Drink Original 29g', 'Quaker Oats Products', 17.25, 15.00, 100, 5, 4, '5_4.png'),
(33, 'Queen Baking Soda 250g', 'Queen Products', 32.25, 30.00, 100, 6, 2, '1_5.png'),
(34, 'Calumet Baking Powder 50g', 'Calumet Products', 17.75, 15.00, 99, 6, 2, '2_5.png'),
(35, 'Arm & Hammer Baking Soda 16oz', 'Arm & Hammer Products', 72.00, 70.00, 97, 6, 2, '3_6.png'),
(36, 'Santa Monica Pure Baking Soda 125g', 'Santa Monica Products', 15.00, 13.00, 98, 6, 2, '4_5.png'),
(37, 'Santa Monica Baking Powder 100g', 'Santa Moninca Products', 24.00, 22.00, 97, 6, 2, '5_5.png'),
(38, 'Red Horse Beer Bottle 500ml', 'san miguel products', 56.00, 50.00, -46, 18, 2, 'Untitled.png'),
(39, 'Fudgee Barr Chocolate 10x40g 24 per box 12 half dozen', 'fudgee barr Chocolate 24 per box x 10', 80.00, 76.76, 178, 3, 5, 'Untitled_1.png'),
(40, 'Selecta 2 in 1 Choco Almond Fudge Cookies & Cream Ice Cream 2L ', 'Choco Almond', 380.00, 350.00, 28, 0, 0, 'Untitled_2.png'),
(41, 'Mega Sardines in Tomato Sauce Easy Open 155g ₱24.00', 'can goods products', 26.00, 24.00, 2000, 7, 3, 'Untitled_3.png'),
(42, 'Mega Sardines in Tomato Sauce with Chili Easy Open 155g ', 'can goods', 28.00, 24.50, 1000, 7, 5, '1_6.png'),
(43, 'Mega Sardines in Tomato Sauce Extra Hot Easy Open 155g ', 'can goods ', 30.00, 27.25, 2000, 7, 5, '2_6.png'),
(44, 'Mega Fried Sardines with Tausi Easy Open 155g ', 'can goods products', 39.25, 36.75, 2000, 7, 5, '3_7.png'),
(45, 'Mega Sardines in Tomato Sauce Easy Open 425g', 'can goods', 62.00, 59.50, 2000, 7, 5, '4_7.png'),
(46, 'Mega Fried Sardines Hot & Spicy Easy Open Can 155g ', 'can goods', 39.75, 36.75, 2000, 7, 5, '5_7.png'),
(47, 'Mega Sardines in Tomato Sauce with Chili Easy Open 425g ', 'can goods', 62.75, 59.75, 2000, 7, 5, '6.png'),
(48, 'Mega Corned Sardines in Tomato Sauce Easy Open Can 155g', 'can goods (cornsardines)', 18.00, 15.00, 2000, 7, 5, '7.png'),
(49, 'Family\'s Brand Sardines Spanish Style Easy Open 155g ', 'cangoods', 39.75, 37.75, 2000, 7, 4, '8.png'),
(50, 'Family\'s Brand Sardines in Tomato Sauce Easy Open Can 155g ', 'cangoods', 26.25, 24.25, 2000, 7, 4, '9.png'),
(51, 'Family\'s Brand Sardines in Tomato Sauce Chili Red Easy Open 155g', 'cangoods', 30.00, 26.25, 2000, 7, 4, '10.png'),
(52, 'Century Tuna Flakes in Oil Easy Open Can 155g ', 'can goods tuna', 37.75, 35.75, 1999, 7, 3, '11.png'),
(53, 'Century Tuna Flakes with Calamansi 180g ', 'TUNA CAN GOODS\r\n', 48.75, 46.75, 997, 7, 4, '11_1.png'),
(54, 'Century Tuna Flakes in Oil BS 125g', 'TUNA CAN GOODS', 32.50, 30.50, 600, 7, 4, '12.png'),
(55, 'Century Corned Tuna Easy Open Can 85g ', 'TUNA CAN GOODS', 31.50, 29.50, 399, 7, 4, '13.png'),
(56, 'Rebisco Crackers 20s ', 'snack time', 126.00, 118.50, 400, 3, 6, '14.png'),
(57, 'Rebisco Crackers 10s', 'snack time', 68.00, 61.25, 400, 3, 6, '15.png'),
(58, 'Rebisco Honey Butter Crackers 10s ', 'snack time', 70.00, 62.00, 400, 3, 6, '16.png'),
(59, 'Rebisco Bravo Biscuits with Sesame Seeds 10s ', 'snack time', 70.00, 62.00, 960, 3, 6, '1_7.png'),
(60, 'Rebisco Butter Cracker Sandwich 10s', 'snack time', 68.00, 59.25, 400, 3, 6, '2_7.png'),
(61, 'Rebisco Strawberry Cracker Sandwich 10s ', 'snack time', 72.00, 62.00, 200, 3, 6, '3_8.png'),
(62, 'Rebisco Choco Cracker Sandwich 10s', 'snack time ', 72.00, 62.01, 200, 3, 6, '4_8.png'),
(63, 'Rebisco Cream Cracker Sandwich 10s ', 'snack time', 70.00, 62.00, 400, 3, 6, '5_8.png'),
(64, 'Rebisco Whole Wheat Cracker 10s Regular price', 'snack time', 72.00, 65.25, 400, 3, 6, '6_1.png'),
(65, 'Rebisco Fiesta Pastillas Cracker Sandwich 10s', 'snack time', 70.00, 62.00, 400, 3, 6, '7_1.png'),
(66, 'Rebisco Peanut Butter Cracker Sandwich 10s ', 'snack time', 70.00, 62.00, 400, 3, 6, '8_1.png'),
(67, 'Rebisco Hansel Plain Cracker 10s ', 'snack time with rebisco', 67.00, 61.25, 960, 3, 6, '9_1.png'),
(68, 'Rebisco Combi Triple Choco Cracker-Wafer Sandwich 10s', 'snack time with rebisco', 70.00, 63.50, 399, 3, 6, '10_1.png'),
(69, 'Rebisco Coco Honey Biscuits Fun Size 10x14g', 'snack time with rebisco', 35.00, 31.25, 478, 3, 6, '11_2.png'),
(70, 'Rebisco Marie Gold Plain Biscuits 10x39g ', 'snack time with rebisco', 70.00, 63.50, 788, 3, 6, '1_8.png'),
(71, 'Rebisco Marie Time Biscuits 20x7.5g ', 'baby snack ', 25.75, 21.75, 1438, 3, 6, '2_8.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_ratings`
--

CREATE TABLE `tbl_webjdreamcorp_ratings` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_webjdreamcorp_ratings`
--

INSERT INTO `tbl_webjdreamcorp_ratings` (`id`, `order_id`, `rating`, `feedback`) VALUES
(1, 1, 5, 'This item is very nice! Gumaganda jowa ko kapag meron ako neto. Recommended item!'),
(2, 13, 1, 'it was expired not recommended'),
(3, 31, 3, '3 stars lang, kasi nung ininum ko d naman ako nalasing. Tsaka sabi nila gaganda misis ko pag naka isa lang ako, naka lima na ako mukha pa ring manok yung mukha!'),
(4, 58, 5, 'Very good pulutan.. Haluan lang ng dinurod na Sky Flakes okay na siya. Recommended Item!'),
(5, 45, 1, 'Iba yung nasa picture sa actual item.'),
(6, 35, 5, 'Napakagandang produkto. Masasabi ko na ang tindahang ito ang the best.. dito na ako lagi mag oorder.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_sales`
--

CREATE TABLE `tbl_webjdreamcorp_sales` (
  `id` int(11) NOT NULL,
  `transaction_date` varchar(255) NOT NULL,
  `tracking_id` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `amount` float(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_webjdreamcorp_sales`
--

INSERT INTO `tbl_webjdreamcorp_sales` (`id`, `transaction_date`, `tracking_id`, `customer_id`, `amount`) VALUES
(1, '2024-01-17 12:28', '20240115223009', 31, 672.00),
(2, '2024-01-17 12:28', '20240115223009', 31, 690.00),
(3, '2024-01-17 12:28', '20240115223009', 31, 767.50),
(4, '2024-01-17 13:07', '20240117130045', 50, 960.00),
(5, '2024-01-17 13:07', '20240117130045', 50, 2400.00),
(6, '2024-01-20 17:19', '20240120171835', 49, 35.00),
(7, '2024-01-20 18:10', '20240120180950', 49, 11.00),
(8, '2024-01-20 18:33', '20240117103217', 50, 76.75),
(9, '2024-01-22 04:20', '20240116122641', 49, 24.00),
(10, '2024-01-22 04:20', '20240116122641', 49, 15.00),
(11, '2024-01-22 04:20', '20240116122641', 49, 72.00),
(12, '2024-01-22 04:21', '20240120183241', 50, 70.00),
(13, '2024-01-22 04:21', '20240116173427', 49, 380.00),
(14, '2024-01-22 04:21', '20240116173427', 49, 80.00),
(15, '2024-01-22 04:21', '20240116173427', 49, 560.00),
(16, '2024-01-22 13:30', '20240117173031', 51, 380.00),
(17, '2024-01-23 13:07', '20240116173556', 51, 80.00),
(18, '2024-01-23 13:07', '20240123130638', 51, 70.00),
(19, '2024-01-23 13:07', '20240123130638', 51, 5600.00),
(20, '2023-12-31 23:59', '20240123130646', 52, 1344.00),
(21, '2023-12-31 23:59', '20240123130646', 52, 700.00),
(22, '2023-12-31 23:59', '20240123130646', 52, 767.50),
(23, '2023-12-30 19:19', '20240123132203', 35, 185.75),
(24, '2023-12-30 19:19', '20240123132203', 35, 24.00),
(25, '2023-12-30 19:19', '20240123132203', 35, 72.00),
(26, '2023-12-30 19:19', '20240123132203', 35, 297.00),
(27, '2023-12-30 19:19', '20240123132203', 35, 70.00),
(28, '2023-12-30 19:19', '20240123132203', 35, 76.75),
(29, '2023-12-30 19:19', '20240123132203', 35, 88.00),
(30, '2023-12-30 19:19', '20240123132203', 35, 82.50),
(31, '2023-12-30 19:19', '20240123132203', 35, 48.75),
(32, '2023-12-28 17:17', '20240123132140', 34, 185.75),
(33, '2023-12-28 17:17', '20240123132140', 34, 18.50),
(34, '2023-12-28 17:17', '20240123132140', 34, 15.00),
(35, '2023-12-28 17:17', '20240123132140', 34, 72.00),
(36, '2023-12-28 17:17', '20240123132140', 34, 13.00),
(37, '2023-12-28 17:17', '20240123132140', 34, 25.75),
(38, '2023-12-28 17:17', '20240123132140', 34, 110.00),
(39, '2023-12-28 17:17', '20240123132140', 34, 82.50),
(40, '2023-12-28 17:17', '20240123132140', 34, 31.50),
(41, '2023-12-28 17:17', '20240123132140', 34, 48.75),
(42, '2023-12-28 17:17', '20240123132140', 34, 37.75),
(43, '2023-12-25 05:25', '20240123132044', 32, 24.00),
(44, '2023-12-25 05:25', '20240123132044', 32, 189.00),
(45, '2023-12-25 05:25', '20240123132044', 32, 95.75),
(46, '2023-12-25 05:25', '20240123132044', 32, 82.50),
(47, '2023-12-25 05:25', '20240123132044', 32, 48.75),
(48, '2023-12-23 12:09', '20240123132106', 33, 79.50),
(49, '2023-12-23 12:09', '20240123132106', 33, 35.00),
(50, '2023-12-23 12:09', '20240123132106', 33, 25.75),
(51, '2023-12-23 12:09', '20240123132106', 33, 13.00),
(52, '2023-12-23 12:09', '20240123132106', 33, 17.75),
(53, '2023-12-23 12:09', '20240123132106', 33, 74.00),
(54, '2023-12-23 12:09', '20240123132106', 33, 185.75),
(55, '2023-12-23 12:09', '20240123132106', 33, 189.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_suppliers`
--

CREATE TABLE `tbl_webjdreamcorp_suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `house_number` varchar(255) NOT NULL,
  `subdivision_zone_purok` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_webjdreamcorp_suppliers`
--

INSERT INTO `tbl_webjdreamcorp_suppliers` (`id`, `name`, `contact_person`, `email`, `mobile_number`, `house_number`, `subdivision_zone_purok`, `city`, `province`, `country`, `zip_code`) VALUES
(2, 'PhilEx Traders', 'Juan Dela Cruz', 'juandelacruz@philextraders.com', '09123456789', '123 Main Street', '123 Main Street', 'Garchitorena', 'Camarines Sur', 'Philippines', '4429'),
(3, 'Island Treasures Co.', 'Maria Santos', 'maria@islandtreasuresph.com', '09776543210', '456 Beach Road', '456 Beach Road', 'Cabusao', 'Camarines Sur', 'Philippines', '4410'),
(4, 'Manila Merch Mart', 'Roberto Gonzales', 'roberto@manilamerchmart.com', '09331112222', '789 Commercial Street', '789 Commercial Street', 'Bato', 'Camarines Sur', 'Philippines', '4435'),
(5, 'Montana', 'Arjay Ilagan', 'arjayilagan17@gmail.com', '09127471114', '4', 'Antipolo', 'Tinambac', 'Camarines Sur', 'Philippines', '4427'),
(6, 'REBISCO CORP INC', 'Mark Ojie Juntado Rosanes', 'markojiejrosanes@gmail.com', '09511672172', '', '2', 'Milaor', 'Camarines Sur', 'Philippines', '4414');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_webjdreamcorp_tracker`
--

CREATE TABLE `tbl_webjdreamcorp_tracker` (
  `id` int(11) NOT NULL,
  `transaction_date` varchar(255) NOT NULL,
  `tracking_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_webjdreamcorp_tracker`
--

INSERT INTO `tbl_webjdreamcorp_tracker` (`id`, `transaction_date`, `tracking_id`, `status`, `description`) VALUES
(1, '2024-01-15 22:30', '20240115223009', 'Order Confirmed', 'Order has been approved.'),
(2, '2024-01-15 22:32', '20240115223009', 'Processing', 'Your order has arrived to sorting area for processing.'),
(3, '2024-01-15 22:33', '20240115223009', 'Shipped/Dispatched', 'Your parcel is currently is shipped to our nearby courier facility.'),
(4, '2024-01-15 22:34', '20240115223009', 'In Transit', 'Your parcel is currently in transit, en route to our logistic partners.'),
(5, '2024-01-15 22:35', '20240115223009', 'Out for Delivery', 'Your parcel is now out for delivery and is anticipated to reach your location shortly. Please prepare the exact payment for your order.'),
(6, '2024-01-16 12:26', '20240116122641', 'Order Confirmed', 'Order has been approved.'),
(7, '2024-01-16 12:27', '20240115223009', 'Processing', 'to pack the order'),
(8, '2024-01-16 12:28', '20240116122641', 'Out for Delivery', 'on the way the items'),
(9, '2024-01-16 17:34', '20240116173427', 'Order Confirmed', 'Order has been approved.'),
(10, '2024-01-16 17:35', '20240116173427', 'On Hold', 'Not yet prepare '),
(11, '2024-01-16 17:35', '20240116173556', 'Order Confirmed', 'Order has been approved.'),
(12, '2024-01-17 10:32', '20240117103217', 'Order Confirmed', 'Order has been approved.'),
(13, '2024-01-17 10:37', '20240117103217', 'Processing', 'plss wait'),
(14, '2024-01-17 12:24', '20240115223009', 'Shipped/Dispatched', 'SELLER ALREADY SHIPPED YOUR ORDER'),
(15, '2024-01-17 12:25', '20240115223009', 'In Transit', 'IN TRANSIT'),
(16, '2024-01-17 12:28', '20240115223009', 'Delivered', 'on your way'),
(17, '2024-01-17 13:00', '20240117130045', 'Order Confirmed', 'Order has been approved.'),
(18, '2024-01-17 13:01', '20240117130045', 'Processing', 'plss be patient'),
(19, '2024-01-17 13:02', '20240117130045', 'Shipped/Dispatched', 'your order was shipped'),
(20, '2024-01-17 13:03', '20240117130045', 'In Transit', 'your order was arrived to the camarines sur '),
(21, '2024-01-17 13:03', '20240117130045', 'Out for Delivery', 'on your way'),
(22, '2024-01-17 13:07', '20240117130045', 'Delivered', 'thank you'),
(23, '2024-01-17 17:30', '20240117173031', 'Order Confirmed', 'Order has been approved.'),
(24, '2024-01-20 17:18', '20240120171835', 'Order Confirmed', 'Order has been approved.'),
(25, '2024-01-20 17:19', '20240120171835', 'Delivered', 'thank you'),
(26, '2024-01-20 18:09', '20240120180950', 'Order Confirmed', 'Order has been approved.'),
(27, '2024-01-20 18:10', '20240120180950', 'Delivered', 'deliver\r\n'),
(28, '2024-01-20 18:32', '20240120183241', 'Order Confirmed', 'Order has been approved.'),
(29, '2024-01-20 18:33', '20240117103217', 'Delivered', 'ok'),
(30, '2024-01-22 04:20', '20240116122641', 'Delivered', 'Your item has been delivered.'),
(31, '2024-01-22 04:21', '20240120183241', 'Delivered', 'Your item has been delivered.'),
(32, '2024-01-22 04:21', '20240116173427', 'Delivered', 'Your item has been delivered.'),
(33, '2024-01-22 13:30', '20240117173031', 'Delivered', 'nag mamadali ka kasi btw thank you'),
(34, '2024-01-23 13:06', '20240123130638', 'Order Confirmed', 'Order has been approved.'),
(35, '2024-01-23 13:06', '20240123130646', 'Order Confirmed', 'Order has been approved.'),
(36, '2024-01-23 13:07', '20240116173556', 'Delivered', 'Your item has been delivered.'),
(37, '2024-01-23 13:07', '20240123130638', 'Delivered', 'Your item has been delivered.'),
(38, '2024-01-23 13:08', '20240123130646', 'Delivered', 'Your item has been delivered.'),
(39, '2024-01-23 13:20', '20240123132044', 'Order Confirmed', 'Order has been approved.'),
(40, '2024-01-23 13:21', '20240123132106', 'Order Confirmed', 'Order has been approved.'),
(41, '2024-01-23 13:21', '20240123132140', 'Order Confirmed', 'Order has been approved.'),
(42, '2024-01-23 13:22', '20240123132203', 'Order Confirmed', 'Order has been approved.'),
(43, '2024-01-23 13:22', '20240123132203', 'Delivered', 'Your item has been delivered.'),
(44, '2024-01-23 13:23', '20240123132140', 'Delivered', 'Your item has been delivered.'),
(45, '2024-01-23 13:23', '20240123132044', 'Delivered', 'Your item has been delivered.'),
(46, '2024-01-23 13:23', '20240123132106', 'Delivered', 'Your item has been delivered.');

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
(1, 'Administrator', 'JLKJ', '$2y$10$5aijfL1nqsTw0rRH56FXW.8cB0lr3WByd6ST5AALlPtN5CMUyBZS2', 'IMG_20230814_134515.jpg', 'admin'),
(31, 'Maria L. Santos', 'maria_santos', '$2y$10$/Yh28MfOAv06NcHr.7HOguvB/B4HJWqvwe6WDFFcdWvg0gh9vDs4G', 'maria luisa santos_1.jpg', 'customer'),
(32, 'Juan M. Cruz', 'juan_cruz', '$2y$10$Ax0Ac3/rIs3sMl4cPIvzMOJEgFU3OHjdT/CPwAFcUAe2ElgLB31Ri', 'juan  miguel cruz.jpg', 'customer'),
(33, 'Sofia G. Reyes', 'sofia_reyes', '$2y$10$ucqhFCvIVwBmKgrhda/zfOnazVl7rZMagY8K9MxgYapnEUq.ACU.i', 'sophia gabriela reyes.jpg', 'customer'),
(34, 'Diego A. Garcia', 'diego_garcia', '$2y$10$yRG4aNDjjJnY8bZ1LA6A5OnUyQa9BXyIJAzyRqtr9m/QsxAD6NM02', 'diego alejandro garcia.jpg', 'customer'),
(35, 'Camille T. Lopez', 'camille_lopez', '$2y$10$Uqj6/dEftW5FGE/74KGAwuBlkCcPHMpr4Qj8crXg2RDdbdkYL4.gi', 'camille Therese lopez.jpg', 'customer'),
(36, 'Rafael E. Martinez', 'raphael_martinez', '$2y$10$3ShE3ACvbW6/a1K/QKWm7Oe2CL0a4PaE/c7HLa6d8uvKUrB6tR7/u', 'rafael eduardo martinez.jpg', 'customer'),
(37, 'Isabella S. Dela Cruz', 'isabella', '$2y$10$YSRknnU0I.qZmEZedou7q.V2g0YK9UR98f6eiQjkYfzWYcb8yxjzC', 'sophia cruz.png', 'customer'),
(38, 'Gabriel A. Fernandez', 'gabriel_fernandez', '$2y$10$B7Ge2840FQvfoYxbaZTqx.lZ3IaSx.u25KrJdyur2xFMvHKAC2EW2', 'gabriel fernandez.jpg', 'customer'),
(44, 'Mark Chito Anteja', 'admin_chito', '$2y$10$qZaaUdNw9dwAlnMZDFfqSOj5mVKvlNC86XHgRRWs/UaKyQMHZINby', '', 'admin'),
(48, 'Maria Jessica Soltes', 'Jhes', '$2y$10$qSNUcEAlIIMx8SxRT8ehJui71CQCoeLsFpQVZuVBM.f.rBQ3hhb2W', 'inbound5061032384338766721.jpg', 'customer'),
(49, 'Keia  S. Balite', 'Keia B', '$2y$10$TqG7C6ySxlLQ0tcR7Wxobe0ABdRk7aGrdR0kY6OgPRqxlzgD.7kjS', 'default_user_image.png', 'customer'),
(50, 'Jesavel  M. Natividad ', 'zay', '$2y$10$SUY7jAKyqvz5HBVgvlGAYuTU.iLmnl3BgyuwiOUPvROFJ.M0rKQYm', 'Snapchat-2087703543.jpg', 'customer'),
(51, 'Lemy M. Villarino ', 'Lemy', '$2y$10$CVTWwVgUpqFkTrpiNyaPS.1Xu7AHr6i5JyIwEOtz23gfihZKHv9Bq', 'received_1078936026478278.jpeg', 'customer'),
(52, 'Mark Chito R. Anteja', 'chito23', '$2y$10$30l4vjc9UH/TQ7gO8KMWGOgn10yXAepUlpe6S8JJ2bVIzqjGuP6RS', '421228368_1042562550135015_3838999042525205279_n.jpg', 'customer'),
(53, 'arjay k. nnhdbwkA', 'JJJJ', '$2y$10$pb7AgHa.NpDp8HXqhpfenuyRQxBQCM2QSetb/e1ywBx00ZN5kfuoO', 'default_user_image.png', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_webjdreamcorp_categories`
--
ALTER TABLE `tbl_webjdreamcorp_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_customers`
--
ALTER TABLE `tbl_webjdreamcorp_customers`
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
-- Indexes for table `tbl_webjdreamcorp_orders`
--
ALTER TABLE `tbl_webjdreamcorp_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_products`
--
ALTER TABLE `tbl_webjdreamcorp_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_ratings`
--
ALTER TABLE `tbl_webjdreamcorp_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_sales`
--
ALTER TABLE `tbl_webjdreamcorp_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_suppliers`
--
ALTER TABLE `tbl_webjdreamcorp_suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_tracker`
--
ALTER TABLE `tbl_webjdreamcorp_tracker`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_customers`
--
ALTER TABLE `tbl_webjdreamcorp_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_messages`
--
ALTER TABLE `tbl_webjdreamcorp_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_newsletter`
--
ALTER TABLE `tbl_webjdreamcorp_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_orders`
--
ALTER TABLE `tbl_webjdreamcorp_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_products`
--
ALTER TABLE `tbl_webjdreamcorp_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_ratings`
--
ALTER TABLE `tbl_webjdreamcorp_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_sales`
--
ALTER TABLE `tbl_webjdreamcorp_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_suppliers`
--
ALTER TABLE `tbl_webjdreamcorp_suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_tracker`
--
ALTER TABLE `tbl_webjdreamcorp_tracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_useraccounts`
--
ALTER TABLE `tbl_webjdreamcorp_useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
