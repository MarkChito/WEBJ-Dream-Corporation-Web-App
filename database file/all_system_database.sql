-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 05:54 AM
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
(1, '31', '', 'Maria', 'Luisa', 'Santos', '09123456789', 'maria.santos@email.com', '123', 'Greenfield Subdivision', 'Balatan', 'Camarines Sur', 'Philippines', '4436'),
(2, '32', '', 'Juan', 'Miguel', 'Cruz', '09776543210', 'juan.cruz@email.com', '456', 'Oakridge Village', 'Caramoan', 'Camarines Sur', 'Philippines', '4420'),
(3, '33', '', 'Sofia', 'Gabriela', 'Reyes', '09339876543', 'sofia.reyes@email.com', '789', 'Sunnydale Heights', 'Iriga City', 'Camarines Sur', 'Philippines', '4431'),
(4, '34', '', 'Diego', 'Alejandro', 'Garcia', '09551237890', 'diego.garcia@email.com', '321', 'Magnolia Park', 'Lupi', 'Camarines Sur', 'Philippines', '4404'),
(5, '35', '', 'Camille', 'Therese', 'Lopez', '09224567890', 'camille.lopez@email.com', '987', 'Palm Grove Estates', 'San Jose', 'Camarines Sur', 'Philippines', '4423'),
(6, '36', '', 'Rafael', 'Eduardo', 'Martinez', '09661112222', 'rafael.martinez@email.com', '555', 'Sunset Heights', 'Siruma', 'Camarines Sur', 'Philippines', '4424'),
(7, '37', '', 'Isabella', 'Sophia', 'Dela Cruz', '09334445555', 'isabella.delacruz@email.com', '222', 'Rosewood Village', 'Camaligan', 'Camarines Sur', 'Philippines', '4406'),
(8, '38', '', 'Gabriel', 'Antonio', 'Fernandez', '09777778888', 'gabriel.fernandez@email.com', '777', 'Emerald Hills', 'Sipocot', 'Camarines Sur', 'Philippines', '4401');

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
(1, 'Mark Chito Anteja', '09511816599', '00anteja23@gmail.com', 'King Ina mo ka', 'sadasd'),
(2, 'Mark Chito Anteja', '09511816599', '00anteja23@gmail.com', 'King Ina mo ka', 'asdasdas');

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

--
-- Dumping data for table `tbl_webjdreamcorp_products`
--

INSERT INTO `tbl_webjdreamcorp_products` (`id`, `name`, `description`, `price`, `cost_price`, `quantity`, `category_id`, `supplier_id`, `image`) VALUES
(8, 'Babyflo Silicone Nipple Wide Neck 2s', 'Baby Flo Products', 84.00, 80.00, 100, 1, 3, '1.png'),
(9, 'Babyflo Bottle Brush Regular', 'Baby Flo Products', 26.50, 25.00, 100, 1, 3, '2.png'),
(10, 'Babyflo Silicone Nipple Blister X-Cut 3s', 'Baby Flo Products', 74.00, 70.00, 100, 1, 3, '3_1.png'),
(11, 'Babyjoy Silicone Nipples L 1s', 'Baby Flo Products', 18.50, 17.00, 100, 1, 3, '4.png'),
(12, 'Babyflo Feeding Bowl', 'Baby Flo Products', 185.75, 180.00, 100, 1, 3, '5.png'),
(13, 'Milo Activ-Go Winner Powdered Choco Malt Milk Drink 300g', 'Nestle Products', 99.50, 98.00, 100, 2, 3, '1_1.png'),
(14, 'Milo Activ-Go Powdered Choco Malt Milk Drink 12x24g', 'Nestle Products', 110.00, 108.00, 100, 2, 4, '2_1.png'),
(15, 'Milo Activ-Go Powdered Choco Malt Milk Drink 1kg', 'Nestle Products', 297.00, 295.00, 100, 2, 4, '3_2.png'),
(16, 'Goya Everyday Instant Powdered Milk Chocolate Drink 26g', 'Goya Products', 13.00, 10.00, 100, 2, 4, '4_6.png'),
(17, 'Milo Activ-Go Powdered Choco Malt Milk Drink 600g', 'Nestle Products', 189.00, 187.00, 100, 2, 4, '5_6.png'),
(18, 'Fibisco Choco Chip Cookies 200g', 'Fibisco Products', 62.25, 60.00, 100, 3, 2, '1_2.png'),
(19, 'Fibisco Choco Chip Cookies 600g', 'Fibisco Products', 230.00, 227.00, 100, 3, 2, '2_2.png'),
(20, 'Chips Delight Cookies Baon Pack 10s', 'Chips Delight Products', 84.25, 83.00, 100, 3, 2, '3_3.png'),
(21, 'Chips Ahoy Regular Cookies 142.5g', 'Chips Ahoy Products', 82.50, 80.00, 100, 3, 2, '4_2.png'),
(22, 'Chips Delight Mini Chocolate Chip Cookies 35g', 'Chips Delight Products', 14.00, 12.00, 100, 3, 2, '5_2.png'),
(23, 'Fudgee Barr Chocolate 10x40g', 'Fudgee Bar Products', 76.75, 74.00, 100, 4, 3, '1_3.png'),
(24, 'Jack n Jill Quake Overload Bar Caramel Craze 10x34g', 'Quake Overload Products', 88.00, 86.00, 100, 4, 3, '2_3.png'),
(25, 'Monde Cheese Bar 10x23g', 'Mode Products', 95.75, 93.00, 100, 4, 3, '3_4.png'),
(26, 'Brownie Break Nutty Brownie 20x14.5g', 'Brownie Break Products', 79.50, 77.00, 100, 4, 3, '4_3.png'),
(27, 'Fudgee Barr Flavor Combo 10x39g', 'Fudgee Bar Products', 76.75, 74.00, 100, 4, 3, '5_3.png'),
(28, 'Energen Oat Cereal Mix Vanilla Sachet 10x40g', 'Energen Products', 82.50, 80.00, 100, 5, 4, '1_4.png'),
(29, 'Energen Oat Cereal Mix Chocolate Sachet 10x40g', 'Eneregen Products', 82.50, 80.00, 100, 5, 4, '2_4.png'),
(30, 'Energen Oat Cereal Mix Vanilla Mini Bag 10x40g', 'Energen Products', 82.50, 80.00, 100, 5, 4, '3_5.png'),
(31, 'Energen Oat Cereal Mix Chocolate Mini Bag 10x40g', 'Energen Products', 82.50, 80.00, 100, 5, 4, '4_4.png'),
(32, 'Vita Quaker Oat Cereal Drink Original 29g', 'Quaker Oats Products', 17.25, 15.00, 100, 5, 4, '5_4.png'),
(33, 'Queen Baking Soda 250g', 'Queen Products', 32.25, 30.00, 100, 6, 2, '1_5.png'),
(34, 'Calumet Baking Powder 50g', 'Calumet Products', 17.75, 15.00, 100, 6, 2, '2_5.png'),
(35, 'Arm & Hammer Baking Soda 16oz', 'Arm & Hammer Products', 72.00, 70.00, 100, 6, 2, '3_6.png'),
(36, 'Santa Monica Pure Baking Soda 125g', 'Santa Monica Products', 15.00, 13.00, 100, 6, 2, '4_5.png'),
(37, 'Santa Monica Baking Powder 100g', 'Santa Moninca Products', 24.00, 22.00, 100, 6, 2, '5_5.png');

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
(4, 'Manila Merch Mart', 'Roberto Gonzales', 'roberto@manilamerchmart.com', '09331112222', '789 Commercial Street', '789 Commercial Street', 'Bato', 'Camarines Sur', 'Philippines', '4435');

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
(1, 'Administrator', 'admin', '$2y$10$qZaaUdNw9dwAlnMZDFfqSOj5mVKvlNC86XHgRRWs/UaKyQMHZINby', 'Anteja_user_image.png', 'admin'),
(29, 'Jose M. Jayco', 'jose', '$2y$10$4wqPecnj7J77tvjFaoB.veluDm.nPUnVbCUEeJqUr1vo/Ag1ZwDIO', 'Milo Activ-Go Powdered Choco Malt Milk Drink 150g.png', 'customer'),
(30, 'Jose M. Jayco', 'dasda', '$2y$10$QupiAagy0COfUFtwiZ8T2.R5sRdpd2Zc2byXqBEd2YQylh4XISShi', 'default_user_image.png', 'customer'),
(31, 'Maria L. Santos', 'maria_santos', '$2y$10$/Yh28MfOAv06NcHr.7HOguvB/B4HJWqvwe6WDFFcdWvg0gh9vDs4G', 'maria luisa santos.jpg', 'customer'),
(32, 'Juan M. Cruz', 'juan_cruz', '$2y$10$Ax0Ac3/rIs3sMl4cPIvzMOJEgFU3OHjdT/CPwAFcUAe2ElgLB31Ri', 'juan  miguel cruz.jpg', 'customer'),
(33, 'Sofia G. Reyes', 'sofia_reyes', '$2y$10$ucqhFCvIVwBmKgrhda/zfOnazVl7rZMagY8K9MxgYapnEUq.ACU.i', 'sophia gabriela reyes.jpg', 'customer'),
(34, 'Diego A. Garcia', 'diego_garcia', '$2y$10$yRG4aNDjjJnY8bZ1LA6A5OnUyQa9BXyIJAzyRqtr9m/QsxAD6NM02', 'diego alejandro garcia.jpg', 'customer'),
(35, 'Camille T. Lopez', 'camille_lopez', '$2y$10$Uqj6/dEftW5FGE/74KGAwuBlkCcPHMpr4Qj8crXg2RDdbdkYL4.gi', 'camille Therese lopez.jpg', 'customer'),
(36, 'Rafael E. Martinez', 'raphael_martinez', '$2y$10$3ShE3ACvbW6/a1K/QKWm7Oe2CL0a4PaE/c7HLa6d8uvKUrB6tR7/u', 'rafael eduardo martinez.jpg', 'customer'),
(37, 'Isabella S. Dela Cruz', 'isabella', '$2y$10$YSRknnU0I.qZmEZedou7q.V2g0YK9UR98f6eiQjkYfzWYcb8yxjzC', 'sophia cruz.png', 'customer'),
(38, 'Gabriel A. Fernandez', 'gabriel_fernandez', '$2y$10$B7Ge2840FQvfoYxbaZTqx.lZ3IaSx.u25KrJdyur2xFMvHKAC2EW2', 'gabriel fernandez.jpg', 'customer');

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
-- Indexes for table `tbl_webjdreamcorp_products`
--
ALTER TABLE `tbl_webjdreamcorp_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_webjdreamcorp_suppliers`
--
ALTER TABLE `tbl_webjdreamcorp_suppliers`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_customers`
--
ALTER TABLE `tbl_webjdreamcorp_customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_messages`
--
ALTER TABLE `tbl_webjdreamcorp_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_newsletter`
--
ALTER TABLE `tbl_webjdreamcorp_newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_products`
--
ALTER TABLE `tbl_webjdreamcorp_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_suppliers`
--
ALTER TABLE `tbl_webjdreamcorp_suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_webjdreamcorp_useraccounts`
--
ALTER TABLE `tbl_webjdreamcorp_useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
