-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2019 at 12:34 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `fullname`, `contact`, `email`, `password`, `position`) VALUES
(5, 'Jessica Bacordio', 2147483647, 'jes@yahoo.com', '202cb962ac59075b964b07152d234b70', 'Admin'),
(6, 'Janmar Adolfo', 2147483647, 'jan@yahoo.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Manager'),
(7, 'Delia Panado', 2147483647, 'del@yahoo.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Admin'),
(8, 'Jannah Adolfo', 2147483647, 'jannah@yahoo.com', 'ea82410c7a9991816b5eeeebe195e20a', 'Manager'),
(11, 'Elona Mae Yabut', 2147483647, 'lona@yahoo.com', '0fe80dcb5146e404bfd9beac3ada568d', 'Admin'),
(12, 'Johnnielson Suarez', 2147483647, 'nuj@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Admin'),
(13, 'Boy Suarez', 2147483647, 'boy@gmail.com', 'a8698009bce6d1b8c2128eddefc25aad', 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `Menu_list`
--

CREATE TABLE `Menu_list` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `menu_price` decimal(10,2) NOT NULL,
  `delete_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Menu_list`
--

INSERT INTO `Menu_list` (`id`, `menu_name`, `menu_price`, `delete_status`) VALUES
(1, 'Kare Kare', '175.00', '1'),
(2, 'Sinigang', '155.00', '1'),
(3, 'Bicol Express', '125.00', '1'),
(4, 'Grilled Chicken', '115.00', '1'),
(5, 'Pork Belly', '225.00', '1'),
(6, 'Biryani', '245.00', '1'),
(7, 'Tikka', '255.00', '1'),
(8, 'Nilagang Baboy', '265.00', '1'),
(9, 'Potato Salad', '125.00', '1'),
(10, 'Taco Salad', '135.00', '1'),
(11, 'Crab Corn Soup', '95.00', '1'),
(12, 'Seafood Chopsuey', '255.00', '1'),
(13, 'Hot Tea', '45.00', '1'),
(14, 'Iced Tea', '25.00', '1'),
(15, 'Softdrinks', '35.00', '1'),
(16, 'Iced Tea Pitcher', '105.00', '1'),
(17, 'Hot Coffee', '45.00', '1'),
(18, 'Iced Coffee', '65.00', '1'),
(19, 'Coffee Jelly', '45.00', '1'),
(20, 'Ube Halaya', '65.00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(11) NOT NULL,
  `id_name` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `order_price` varchar(255) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delete_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `id_name`, `order_name`, `order_price`, `dates`, `delete_status`) VALUES
(1, 4, 'Kare Kare', '145.00', '2019-02-04 07:20:39', '1'),
(2, 4, 'Bicol Express', '125.00', '2019-02-04 07:20:39', '1'),
(3, 4, 'Pork Belly', '205.00', '2019-02-04 07:20:39', '1'),
(4, 4, 'Crab Corn Soup', '95.00', '2019-02-04 07:20:39', '0'),
(5, 4, 'Hot Coffee', '45.00', '2019-02-04 07:20:39', '1'),
(6, 4, 'Iced Coffee', '65.00', '2019-02-04 07:20:39', '0'),
(7, 4, 'Ube Halaya', '65.00', '2019-02-04 07:20:39', '1'),
(8, 5, 'Kare Kare', '145.00', '2019-02-06 00:51:22', '1'),
(9, 5, 'Sinigang', '155.00', '2019-02-06 00:51:22', '1'),
(10, 5, 'Grilled Chicken', '115.00', '2019-02-06 00:51:22', '1'),
(11, 5, 'Biryani', '245.00', '2019-02-06 00:51:22', '1'),
(12, 5, 'Nilagang Baboy', '265.00', '2019-02-06 00:51:22', '1'),
(13, 5, 'Hot Tea', '45.00', '2019-02-06 00:51:22', '1'),
(14, 5, 'Ube Halaya', '65.00', '2019-02-06 00:51:22', '1'),
(15, 6, 'Grilled Chicken', '115.00', '2019-02-06 06:05:03', '1'),
(16, 6, 'Tikka', '255.00', '2019-02-06 06:05:03', '1'),
(17, 6, 'Taco Salad', '135.00', '2019-02-06 06:05:03', '1'),
(18, 6, 'Hot Coffee', '45.00', '2019-02-06 06:05:03', '1'),
(19, 6, 'Coffee Jelly', '45.00', '2019-02-06 06:05:03', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_list`
--

CREATE TABLE `product_list` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_number` varchar(100) NOT NULL,
  `product_quantity` varchar(100) NOT NULL,
  `delete_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_list`
--

INSERT INTO `product_list` (`id`, `product_name`, `product_number`, `product_quantity`, `delete_status`) VALUES
(1, 'Meat', 'M45387+P45387', '4', '1'),
(2, 'Vegetables', 'V45387+P45387', '10', '1'),
(3, 'Rice', 'R45387+R45111', '10', '1'),
(4, 'Taco Chip', 'TC45387+TC45234', '15', '1'),
(5, 'Seasoning', 'S3245+S323432', '10', '1'),
(6, 'Fish', 'F434+4343F', '5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `sub_product_list`
--

CREATE TABLE `sub_product_list` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_reservation`
--

CREATE TABLE `table_reservation` (
  `id` int(11) NOT NULL,
  `reservation_number` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `dated` date NOT NULL,
  `message` text NOT NULL,
  `timed` time NOT NULL,
  `cancel_status` enum('1','0') NOT NULL,
  `delete_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_reservation`
--

INSERT INTO `table_reservation` (`id`, `reservation_number`, `customer_name`, `email`, `quantity`, `phone`, `dated`, `message`, `timed`, `cancel_status`, `delete_status`) VALUES
(1, 'B4JLYZOI5URKG', 'Janmar Adolfo', 'jan@yahoo.com', 3, 2147483647, '2019-02-02', 'etfghfdsvcxxzcz', '13:00:00', '0', '1'),
(2, 'B4J8QAXYG9Z3S', 'Marc Bacordio', 'marc@yahoo.com', 3, 909848433, '2019-02-02', 'on time', '13:00:00', '0', '1'),
(3, 'B4J4MM564MERG', 'Boy Suarez', 'boy@gmail.com', 8, 2147483647, '2020-01-06', 'sharp', '04:46:00', '0', '1'),
(4, 'B4JBYEK0ICWBN', 'Berna Pascual', 'berna@yahoo.com', 3, 9865321, '2019-07-24', 'sssss', '16:30:00', '1', '1'),
(5, 'B4J5OYT967OOV', 'Janey Cornelio', 'janey@yahoo.com', 7, 909736822, '2020-01-30', 'Go back', '16:24:00', '0', '1'),
(6, 'B4J2VTED95HCC', 'Jessica Bacordio', 'jes@yahoo.com', 5, 2147483647, '2019-03-07', 'With ', '14:31:00', '1', '1'),
(7, 'B4JF2OQEB5N7L', 'Elona Mae Yabut', 'elong@yahoo.com', 2, 2147483647, '2020-01-21', 'early', '13:45:00', '0', '1'),
(8, 'B4J30QQAJ7RH2', 'pong', 'pongchi@chi', 4, 2147483647, '2016-01-01', 'yesxdgk', '01:59:00', '1', '0'),
(9, 'B4JSROG85BUU7', 'Alicia Keys', 'Ali@chi', 6, 223, '2019-08-21', 'Everything means nothing', '15:10:00', '1', '1'),
(10, 'B4JDELV5IPGM3', 'Jobelle Suarez', 'jan@yahoo.com', 5, 2147483647, '2019-01-17', 'asdasd', '18:00:00', '1', '1'),
(11, 'B4JFRGCPV15F6', 'Yuri San', 'san@yahoo.com', 4, 2147483647, '2020-08-05', 'hdasdyuadsadsadsadd', '13:10:00', '1', '1'),
(12, 'B4JV781EFEVFO', 'Lany', 'lany@yahoo.com', 5, 9865321, '2019-03-02', 'with music', '14:15:00', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_account`
--

CREATE TABLE `user_account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_account`
--

INSERT INTO `user_account` (`id`, `fullname`, `address`, `contact`, `email`, `password`) VALUES
(4, 'Jerald Buljatin', 'Taguig City', 999876543, 'jerald@yahoo.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Elona Mae Y. Anokol', 'Ranger St. South signal village', 2147483647, 'lona@yahoo.com', '0fe80dcb5146e404bfd9beac3ada568d'),
(6, 'Mikaela Iquina', 'Makati city', 2147483647, 'mika@yahoo.com', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `Menu_list`
--
ALTER TABLE `Menu_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_name`(191)),
  ADD KEY `id_name` (`id_name`);

--
-- Indexes for table `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_product_list`
--
ALTER TABLE `sub_product_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `table_reservation`
--
ALTER TABLE `table_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `Menu_list`
--
ALTER TABLE `Menu_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sub_product_list`
--
ALTER TABLE `sub_product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `table_reservation`
--
ALTER TABLE `table_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `user_account`
--
ALTER TABLE `user_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`id_name`) REFERENCES `user_account` (`id`);

--
-- Constraints for table `sub_product_list`
--
ALTER TABLE `sub_product_list`
  ADD CONSTRAINT `sub_product_list_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
