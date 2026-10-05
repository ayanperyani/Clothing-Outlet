-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2025 at 03:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothing`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Bonanza '),
(2, 'Diners Juniour'),
(3, 'Junaid Jhamshed');

-- --------------------------------------------------------

--
-- Table structure for table `charasoul`
--

CREATE TABLE `charasoul` (
  `charasoul_id` int(255) NOT NULL,
  `charasoul_title` varchar(255) NOT NULL,
  `charasoul_subtitle` varchar(255) NOT NULL,
  `charasoul_para` varchar(255) NOT NULL,
  `charasoul_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `charasoul`
--

INSERT INTO `charasoul` (`charasoul_id`, `charasoul_title`, `charasoul_subtitle`, `charasoul_para`, `charasoul_img`) VALUES
(14, 'Up to 20 % Sale', 'On Every Thing', ' Explicabo esse amet tempora quibusdam laudantium, laborum eaque magnam fugiat hic? Esse dicta aliquid error repudiandae earum suscipit fugiat molestias, veniam, vel architecto veritatis delectus repellat modi impedit sequi.', '../UserPanel/shared/upload/slider-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new_arrival_home`
--

CREATE TABLE `new_arrival_home` (
  `new_arrival_id` int(255) NOT NULL,
  `new_arrival_title` varchar(255) NOT NULL,
  `new_arrival_para` varchar(255) NOT NULL,
  `new_arrival_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_arrival_home`
--

INSERT INTO `new_arrival_home` (`new_arrival_id`, `new_arrival_title`, `new_arrival_para`, `new_arrival_img`) VALUES
(4, 'New Arrivals', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum repellendus ab, eveniet quaerat facere quis repellat laborum impedit accusantium iusto excepturi magnam amet ex autem consequatur voluptates corrupti. Iure, veritatis?', '../UserPanel/shared/upload/arrival-bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new_arrival_product`
--

CREATE TABLE `new_arrival_product` (
  `new_arrival_id` int(255) NOT NULL,
  `new_arrival_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_arrival_product`
--

INSERT INTO `new_arrival_product` (`new_arrival_id`, `new_arrival_name`) VALUES
(1, 'New Arrivals\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(255) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `brand_id` int(255) NOT NULL,
  `new_arrival_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_img`, `brand_id`, `new_arrival_id`) VALUES
(2, 'Men T-Shirt', '$70', '../UserPanel/shared/upload/p2.png', 1, 1),
(3, 'Men Shirt', '$100', '../UserPanel/shared/upload/p1.png', 3, 1),
(5, 'Women Frock', '$200', '../UserPanel/shared/upload/p7.png', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_cpassword` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_cpassword`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '03201289836', 'admin@1234', 'admin@1234', 'Admin'),
(8, 'faizan', 'faizan@gmail.com', '03058141462', 'faizan1234', 'faizan1234', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `why_section_home`
--

CREATE TABLE `why_section_home` (
  `why_section_id` int(255) NOT NULL,
  `why_section_img` varchar(255) NOT NULL,
  `why_section_title` varchar(255) NOT NULL,
  `why_section_para` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `why_section_home`
--

INSERT INTO `why_section_home` (`why_section_id`, `why_section_img`, `why_section_title`, `why_section_para`) VALUES
(7, '../UserPanel/shared/upload/best-seller.png', 'Best Seller', 'variations of passages of Lorem Ipsum available'),
(8, '../UserPanel/shared/upload/truck.png', 'Fast Deliver', 'variations of passages of Lorem Ipsum available'),
(9, '../UserPanel/shared/upload/image.png', 'Free Delivery', 'variations of passages of Lorem Ipsum available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `charasoul`
--
ALTER TABLE `charasoul`
  ADD PRIMARY KEY (`charasoul_id`);

--
-- Indexes for table `new_arrival_home`
--
ALTER TABLE `new_arrival_home`
  ADD PRIMARY KEY (`new_arrival_id`);

--
-- Indexes for table `new_arrival_product`
--
ALTER TABLE `new_arrival_product`
  ADD PRIMARY KEY (`new_arrival_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `new_arrival_id` (`new_arrival_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `why_section_home`
--
ALTER TABLE `why_section_home`
  ADD PRIMARY KEY (`why_section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `charasoul`
--
ALTER TABLE `charasoul`
  MODIFY `charasoul_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `new_arrival_home`
--
ALTER TABLE `new_arrival_home`
  MODIFY `new_arrival_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_arrival_product`
--
ALTER TABLE `new_arrival_product`
  MODIFY `new_arrival_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `why_section_home`
--
ALTER TABLE `why_section_home`
  MODIFY `why_section_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`brand_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`new_arrival_id`) REFERENCES `new_arrival_product` (`new_arrival_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
