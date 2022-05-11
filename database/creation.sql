-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 01:44 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_advan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `serial_no` char(36) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '(uuid())',
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`serial_no`, `model`, `manufacturer`, `price`) VALUES
('11223345', 'City', 'Honda', 150000.00),
('1223344', 'Civic', 'Honda', 250000.00),
('22113344', 'Corolla', 'Toyota', 200000.00),
('44556677', 'Lancer', 'Mitsubishi', 130000.00),
('44556678', 'Shark', 'Mitsubishi', 170000.00),
('77886655', 'C200', 'Mercedes', 500000.00);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2022_05_11_073345_create_sales_persons_table', 1),
(4, '2022_05_11_084925_create_cars_table', 1),
(5, '2022_05_11_085536_create_option_cars_table', 1),
(6, '2022_05_11_090345_create_sales_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `option_cars`
--

CREATE TABLE `option_cars` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT uuid(),
  `option_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `serial_no` char(36) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `option_cars`
--

INSERT INTO `option_cars` (`id`, `option_name`, `price`, `serial_no`) VALUES
('00aae802-d11d-11ec-8c3a-d8bbc11fe2c5', 'Smart key', 4000.00, '77886655'),
('00aae9fd-d11d-11ec-8c3a-d8bbc11fe2c5', 'Parking sensor', 2500.00, '77886655'),
('0fb83961-d11c-11ec-8c3a-d8bbc11fe2c5', 'Parking sensor', 750.00, '22113344'),
('ed87d002-d11b-11ec-8c3a-d8bbc11fe2c5', 'Smart key', 1000.00, '44556677'),
('f1e7302b-d11c-11ec-8c3a-d8bbc11fe2c5', 'fog', 300.00, '1223344');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT uuid(),
  `sales_person_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serial_no` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sale_price` double(8,2) NOT NULL,
  `date` date NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sales_person_id`, `serial_no`, `sale_price`, `date`) VALUES
('546f646b-d11f-11ec-8c3a-d8bbc11fe2c5', 'AH8877', '1223344', 250750.00, '2015-03-14'),
('546f6643-d11f-11ec-8c3a-d8bbc11fe2c5', 'AH8877', '11223345', 250750.00, '2015-10-25'),
('546f66cc-d11f-11ec-8c3a-d8bbc11fe2c5', 'VH7766', '44556677', 250750.00, '2015-03-30'),
('546f671f-d11f-11ec-8c3a-d8bbc11fe2c5', 'MN1212', '1223344', 250750.00, '2015-11-02'),
('546f676e-d11f-11ec-8c3a-d8bbc11fe2c5', 'VH7766', '44556678', 250750.00, '2015-01-07'),
('546f67be-d11f-11ec-8c3a-d8bbc11fe2c5', 'AH8877', '77886655', 250750.00, '2015-03-09'),
('546f684e-d11f-11ec-8c3a-d8bbc11fe2c5', 'MN1212', '77886655', 250750.00, '2015-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `sales_persons`
--

CREATE TABLE `sales_persons` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT uuid(),
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales_persons`
--

INSERT INTO `sales_persons` (`id`, `name`, `phone`) VALUES
('AH8877', 'Sayed Hussein', '0111234567'),
('MN1212', 'Samir Ayob', '0100556699'),
('VH7766', 'Nader Galal', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `option_cars`
--
ALTER TABLE `option_cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `option_cars_serial_no_foreign` (`serial_no`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_sales_person_id_foreign` (`sales_person_id`),
  ADD KEY `sales_serial_no_foreign` (`serial_no`);

--
-- Indexes for table `sales_persons`
--
ALTER TABLE `sales_persons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `option_cars`
--
ALTER TABLE `option_cars`
  ADD CONSTRAINT `option_cars_serial_no_foreign` FOREIGN KEY (`serial_no`) REFERENCES `cars` (`serial_no`);

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_sales_person_id_foreign` FOREIGN KEY (`sales_person_id`) REFERENCES `sales_persons` (`id`),
  ADD CONSTRAINT `sales_serial_no_foreign` FOREIGN KEY (`serial_no`) REFERENCES `cars` (`serial_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;