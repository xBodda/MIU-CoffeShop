-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 09:47 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miucoffee`
--
CREATE DATABASE IF NOT EXISTS `miucoffee` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `miucoffee`;

-- --------------------------------------------------------

--
-- Table structure for table `beverages`
--

CREATE TABLE `beverages` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` varchar(32) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beverages`
--

INSERT INTO `beverages` (`id`, `name`, `price`, `image`) VALUES
(1, 'House Blend', '4', '<i class=\"fas fa-blender\"></i>'),
(2, 'Dark Roast', '6', '<i class=\"fas fa-ring\"></i>'),
(3, 'Decaf', '2', '<i class=\"fas fa-mug-hot\"></i>'),
(4, 'Espresso', '5', '<i class=\"fas fa-coffee\"></i>');

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(12) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`id`, `name`, `price`, `image`) VALUES
(1, 'Mocha', '15', 'assets/img/Mocha.jpg'),
(2, 'Latte', '17', 'assets/img/Latte.jpg'),
(3, 'Cappuccino', '21', 'assets/img/Cappuccino.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

CREATE TABLE `login_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `token`, `user_id`, `date`) VALUES
(1, 'a654fef180079eaa2002ae7872db923973da9e5e', 3, '2021-06-02 17:40:29'),
(2, '2354347fa54d79e0b29515113369de28ed8d5877', 3, '2021-06-02 17:40:40'),
(3, '484f3ffa4ae2ec0f61e0fb71c9e9e7dac4adc217', 3, '2021-06-04 02:52:40'),
(4, 'c109b1b288416e25ec6df66e6ef7829b4233b673', 3, '2021-06-04 02:53:26'),
(5, '898a8eafabca14cf348cd626f7b8a5cbc49fdd17', 3, '2021-06-04 20:46:20'),
(6, 'fdc8889610fcb8e4bdd234468ae821e5aa2ddbaa', 4, '2021-06-04 21:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderID` int(11) UNSIGNED NOT NULL,
  `userID` int(11) UNSIGNED NOT NULL,
  `orderDate` datetime NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderID`, `userID`, `orderDate`, `status`) VALUES
(1, 3, '2021-06-02 18:31:57', 0),
(2, 3, '2021-06-02 18:32:05', 0),
(3, 3, '2021-06-02 18:51:27', 0),
(4, 3, '2021-06-02 18:51:44', 1),
(5, 3, '2021-06-02 18:52:43', 0),
(6, 3, '2021-06-02 18:52:47', 0),
(7, 4, '2021-06-04 21:25:50', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) UNSIGNED NOT NULL,
  `orderID` int(11) UNSIGNED NOT NULL,
  `drink` int(11) UNSIGNED NOT NULL,
  `beverage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `orderID`, `drink`, `beverage`) VALUES
(9, 7, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(355) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `ordersCount` int(11) UNSIGNED NOT NULL,
  `location` varchar(64) NOT NULL,
  `user_type` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstName`, `lastName`, `email`, `password`, `phoneNumber`, `ordersCount`, `location`, `user_type`) VALUES
(1, 'Abdelrahman', 'Sayed', 'email', '$2y$10$uzC4eS1xZ9s7paLVw6n2/uGAa/NUp.OKnDWcLhHISd6NR.ReBRqZC', '01158999135', 0, 'Egypt', 0),
(2, 'Abdelrahman', 'Sayed', 'email', '$2y$10$hB10N2iO3Az9QcnEi/RFXetOzFO2wKk99cjNDuunH3iEDZeIesis.', '01158999135', 0, 'Egypt', 0),
(3, 'Abdelrahman', 'Sayed', 'bodda@gmail.com', '$2y$10$WOA9QpLM/D0JIbHAtBVl5uK6iez1DgDr4MDITeVJhJ7DIz7wN3/DO', '01158999135', 0, 'Egypt', 0),
(4, 'Abdelrahman', 'Sayed', 'abdelrahman3aysh@hotmail.com', '$2y$10$Ko6YBk6F9EJdQq2RLQoTgO4YzjKOUFgxZI8zcxNF3LPyivylVgf2K', '+201158999135', 0, 'Peru', 0),
(5, 'Abdelrahman', 'Sayed', 'abdelrahman3aysh@hotmail.com', '$2y$10$r99lu9acjtgigzwcIianM.Js9QaNCIDohhquurK6R/ImGTF0Sa3q6', '+201158999135', 0, 'Peru', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beverages`
--
ALTER TABLE `beverages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `drink` (`drink`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beverages`
--
ALTER TABLE `beverages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `drinks`
--
ALTER TABLE `drinks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_tokens`
--
ALTER TABLE `login_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `login_tokens`
--
ALTER TABLE `login_tokens`
  ADD CONSTRAINT `login_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `orders` (`orderID`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`drink`) REFERENCES `drinks` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
