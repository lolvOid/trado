-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 04:40 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trado`
--

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `wallet_id` varchar(100) NOT NULL,
  `wallet_password` varchar(100) NOT NULL,
  `main_address` varchar(100) NOT NULL,
  `label` varchar(100) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `wallet_id`, `wallet_password`, `main_address`, `label`, `user_id`, `created_at`, `updated_at`) VALUES
(2, '7dfa7610-4d15-4bbd-b76e-22e8caa29b9a', '$2y$10$ejukyn.0EQ.Dy0aXipQJ6e1Slkt60zkA509c9PmcrDW5phg14E2vq', '1GPaadic8frobyp51ybyhcZbCuSJH7BAH3', 'Main-receiving-Address', 19, '2018-08-30 15:04:00', '2018-08-30 15:04:00'),
(3, 'dddd7617-10a5-437d-8c82-6a9ff69ea494', '$2y$10$1nR3Bv80sVC8XGO80noVF.L5pEGBun0DKP5YQ1eMAqyZGAr6V1Da6', '1KngpsNoMdTuHY9eDXEh1iqYLFWbcqEv66', 'Main-receiving-Address', 19, '2018-08-30 15:52:30', '2018-08-30 15:52:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`wallet_id`),
  ADD UNIQUE KEY `address` (`main_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
