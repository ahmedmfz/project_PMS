-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 08:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id_invoice` int(10) UNSIGNED NOT NULL,
  `number_invoice` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) UNSIGNED NOT NULL,
  `name_product` varchar(255) NOT NULL,
  `description_product` varchar(255) DEFAULT NULL,
  `price` varchar(200) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `section_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `description_product`, `price`, `quantity`, `image`, `section_id`) VALUES
(24, 'mahmoud ahmed', 'ghmfbndhf', '67', '556', '61a0ea9beaa013.36751379.png', 17),
(29, 'mahmoud ahmed', 'gshcvhjfmx', '45', '67', NULL, 20),
(30, 'mahmoud ahmed', 'ghgkdfghdf', '3445', '56', NULL, 20);

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id_section` int(11) UNSIGNED NOT NULL,
  `name_section` varchar(255) NOT NULL,
  `description_section` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id_section`, `name_section`, `description_section`) VALUES
(2, 'mahmoud ahmed', 'sdhf dj sjkrysudeatd'),
(6, 'mahmoud', 'ahmed updated'),
(7, '255', ''),
(8, 'mahmoud', ''),
(9, 'image', 'dasfcb'),
(10, 'mahmoud', 'afas'),
(11, 'mahmoud ahmed', ''),
(12, 'mahmoud ahmed', ''),
(13, 'mahmoud ahmed', ''),
(15, 'mahmoud ahmed', 'dfhdxf'),
(17, 'mahmoud 123', 'gdmfh'),
(19, 'mahmoud ahmed', 'sdhf dj sjkrysudeatd                  '),
(20, 'produact category 23', 'this is my best');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `birthday` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `first_name`, `last_name`, `password`, `email`, `phone`, `address`, `type`, `birthday`) VALUES
(2, 'mahmoud', 'ahmed', '$2y$10$M0cOexNvd.dognLSybljx.OipcI3CWzDwMgdewyhp27Kow96ZGgZ6', 'admin@admin.com', '31241421354', 'maadi', 'Owner', '2021-11-13'),
(3, 'mahmoud', 'ahmed', '$2y$10$lid3Tzv6j06fnZ.9xMmiMOWi.VNsPehULmFUFuRkWULe7WdXPSZf.', 'ahmedmahfouz2060@gmail.com', '01061111491', 'maadi', 'superAdmin', '2021-11-05'),
(4, 'taha', 'mohamed', '$2y$10$kvUGSST.ggjsEQ.kGVVBG.xcRF0.QYeZUcJoefIHO09LR7dQPz/Iu', 'taha@gmail.com', '01072222391', 'maadi', 'Admin', '2021-12-10'),
(5, 'Ahmed', 'Mahfouz', '$2y$10$ezv1GjpbpZPHsdlsyUF.eeUiQciI8UhatsjzrWZC4ArMtkj7wKy8K', 'ahmed@admin.com', '01061111491', 'Dokki', 'Owner', '2021-11-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id_invoice`),
  ADD UNIQUE KEY `section_id` (`section_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id_section`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id_invoice` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id_section` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
