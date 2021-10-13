-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2020 at 12:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_storedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(2, 'T1german1995', 'T1@gmail.com', 'Password', 'af56bad8bbb945911a054fdb2c740dff.jpg', 'South Africa', '<p style=\"text-align: justify;\">Suspendisse in rhoncus lacus, ut dignissim orci. Cras consequat elit nisi, ac elementum quam egestas ac. Quisque risus est, blandit at augue porttitor, tincidunt convallis odio. Aliquam sem ante, viverra eget lacinia sit amet, vulputate ac magna. Praesent pellentesque ligula ac aliquam suscipit.</p>', '+2776161124', 'Database Admin'),
(6, 'Yvanai', 'Yvanai@gmail.com', 'Yvanai', 'dbb6uaq-104ab143-5988-49d8-9511-6eeca3165952.png', 'South Africa', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero fuga esse, numquam porro hic earum tempora, similique nesciunt a, repudiandae in blanditiis ratione, adipisci! Necessitatibus voluptates quaerat neque libero vitae.</p>', '+2776163256', 'Customer Support');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(5, 'Shooter', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.'),
(6, 'Strategy', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.'),
(7, 'Management', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.'),
(8, 'Action', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.'),
(9, 'Simulation', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.'),
(10, 'Role-Playing Game', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(40) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` varchar(100) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `isEmailConfirmed` tinyint(4) NOT NULL,
  `token` varchar(10) NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `isEmailConfirmed`, `token`, `customer_ip`) VALUES
(6, 'Francois Cloete', 'Francois@bookwise.co.za', '$2y$10$nnHy7VXwXo0ugdLsJYMNNevBFKat44228', 'South Africa', 'East London', '+271611124', '4 Rocklands Road, Beacon Bay', 'Frost_(No_Background).png', 0, '', '::1'),
(7, 'Erika', 'Erika@gmail.com', '$2y$10$U2CgRU13OTpooQ2OhN0VDOtPZrrL8dTjU', 'South Africa', 'Cape Town', '+271611189', '54 grendale place, suburb', 'CP3.jpg', 0, '', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `order_date`, `order_status`) VALUES
(24, 6, 999, 708380732, 1, '2020-07-31', 'Complete'),
(25, 6, 380, 708380732, 4, '2020-07-31', 'Complete'),
(26, 6, 199, 708380732, 1, '2020-07-31', 'pending'),
(27, 7, 380, 1739427613, 4, '2020-08-19', 'pending'),
(28, 7, 865, 1739427613, 1, '2020-08-19', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(1, 0, 0, 'Cash on Delivery', 0, 0, ''),
(2, 123, 380, 'Invoice', 0, 212, '19-08-2020');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `order_status`) VALUES
(24, 6, 708380732, '21', 1, 'Complete'),
(25, 6, 708380732, '24', 4, 'Complete'),
(26, 6, 708380732, '26', 1, 'pending'),
(27, 7, 1739427613, '24', 4, 'pending'),
(28, 7, 1739427613, '29', 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_keywords` text NOT NULL,
  `product_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_keywords`, `product_desc`) VALUES
(21, 17, 8, '2020-07-30 12:43:23', 'Ghost of Tsushima', 'Ghost1.jpg', 'Ghost2.jpg', 'Ghost3.jpg', 999, 'Japan, Samurai, Katana, Ghost, Tsushima', '<p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere nulla, beatae vitae consequatur enim et nesciunt possimus doloribus omnis dolorum, ea quibusdam excepturi asperiores, temporibus! Co'),
(22, 16, 8, '2020-07-30 10:44:48', 'DESTROY ALL HUMANS!', 'Destroy1.jpg', 'Destroy2.jpg', 'destroy3.jpg', 855, 'Adventure', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione praesentium ipsum accusantium facere nulla, beatae vitae consequatur enim et nesciunt possimus doloribus omnis dolorum, ea quibusdam excepturi asperiores, temporibus! Consequatur?</p>'),
(23, 17, 8, '2020-07-31 07:24:23', 'Batman Arkham Collection', 'BMA1.jpg', 'BMA2.jpg', 'BMA3.jpg', 585, 'Superhero, Batman, Arkham, Joker, DC, Comic, Comic Book, Collection', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, aliquid, voluptas. Distinctio incidunt, atque repudiandae, fugiat rem placeat odit accusantium nam laborum dignissimos accusamus natus, ipsam ea molestias qui nemo.</p>'),
(24, 15, 10, '2020-07-31 07:26:36', 'PC Super Hits Fallout New Vegas', 'FNV1.jpg', 'FNV2.jpg', 'FNV3.jpg', 95, 'Fallout, new, vegas, house, mutants, radiation, apocalypse, apocalyptic', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, aliquid, voluptas. Distinctio incidunt, atque repudiandae, fugiat rem placeat odit accusantium nam laborum dignissimos accusamus natus, ipsam ea molestias qui nemo.</p>'),
(25, 15, 10, '2020-07-31 07:28:11', 'World of Warcraft: Battle for Azeroth', 'BFA1.jpg', 'BFA2.jpg', 'BFA3.jpg', 675, 'warcraft, mmo, magic, exploration, adventure', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, aliquid, voluptas. Distinctio incidunt, atque repudiandae, fugiat rem placeat odit accusantium nam laborum dignissimos accusamus natus, ipsam ea molestias qui nemo.</p>'),
(26, 17, 5, '2020-07-31 07:30:51', 'Space Hulk Deathwing', 'SH1.jpg', 'SH2.jpg', 'SH3.jpg', 199, 'Warhammer, 40k, space marine, marine, tyranids, deathwing', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, aliquid, voluptas. Distinctio incidunt, atque repudiandae, fugiat rem placeat odit accusantium nam laborum dignissimos accusamus natus, ipsam ea molestias qui nemo.</p>'),
(27, 17, 8, '2020-07-31 07:37:58', 'The Last of Us Part 2', 'lau1.jpg', 'lau2.jpg', 'lau3.jpg', 999, 'Last, Us, Part 2, Ellie, Bigot Sandwich, Dumpster Fire', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur, aliquid, voluptas. Distinctio incidunt, atque repudiandae, fugiat rem placeat odit accusantium nam laborum dignissimos accusamus natus, ipsam ea molestias qui nemo.</p>'),
(28, 15, 6, '2020-07-31 07:46:38', 'Three Kingdoms', 'TWTK1.jpg', 'TWTK2.jpg', 'TWTK3.jpg', 199, 'Turn-based, Strategy, China, Romance of, Three Kingdoms', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, eius. Quod suscipit repellendus odit facere. Nam rerum accusantium, deserunt dolor saepe nesciunt perspiciatis animi, voluptate vero voluptas esse expedita vitae.</p>'),
(29, 15, 10, '2020-07-31 07:52:24', 'Cyberpunk 2077', 'CP1.jpg', 'CP2.jpg', 'CP3 (1).jpg', 865, 'CyberPunk, CD Projekt, Adult Content, open-world, action-adventure, night city', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque, eius. Quod suscipit repellendus odit facere. Nam rerum accusantium, deserunt dolor saepe nesciunt perspiciatis animi, voluptate vero voluptas esse expedita vitae.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` varchar(500) NOT NULL,
  `p_cat_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(15, 'PC', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.'),
(16, 'XBOX ONE', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.'),
(17, 'Playstation 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.'),
(18, 'Nintendo Switch', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum eius, inventore eaque maiores tempora iusto totam atque ipsa quam error, rem et minima molestias! Ratione sint expedita harum explicabo corrupti.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_image`) VALUES
(14, 'F1 2020', 'slider_1.jpg'),
(15, 'Destroy All Humans!', 'Slider_2.jpg'),
(16, 'Insurgency Sandstorm', 'Slider_3.jpg'),
(17, 'CyberPunk 2077', 'slider_4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_orders`
--
ALTER TABLE `pending_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pending_orders`
--
ALTER TABLE `pending_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
