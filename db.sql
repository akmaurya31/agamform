-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 27, 2025 at 08:59 AM
-- Server version: 10.11.8-MariaDB
-- PHP Version: 8.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp_stu`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant_registration`
--

CREATE TABLE `applicant_registration` (
  `id` int(11) NOT NULL,
  `applied_previously` enum('Yes','No') NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `date_of_birth` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address_line1` varchar(255) NOT NULL,
  `address_line2` varchar(255) DEFAULT NULL,
  `city_name` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `pin_code` varchar(10) NOT NULL,
  `highest_qualification` varchar(150) NOT NULL,
  `year_of_passing` year(4) NOT NULL,
  `exam_state` varchar(100) NOT NULL,
  `exam_district` varchar(100) NOT NULL,
  `applied_for_exam` varchar(50) NOT NULL,
  `exam_location1` varchar(255) NOT NULL,
  `aadhar_card_number` varchar(20) DEFAULT NULL,
  `photo_path` varchar(255) NOT NULL,
  `signature_path` varchar(255) NOT NULL,
  `thumb_impression_path` varchar(255) NOT NULL,
  `declaration_accepted` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant_registration`
--
ALTER TABLE `applicant_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant_registration`
--
ALTER TABLE `applicant_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
