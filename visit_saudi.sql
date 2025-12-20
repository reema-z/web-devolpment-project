-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 ديسمبر 2025 الساعة 16:45
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visit_saudi`
--

-- --------------------------------------------------------

--
-- بنية الجدول `tourist`
--

CREATE TABLE `tourist` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `tourist`
--

INSERT INTO `tourist` (`id`, `name`, `username`, `password`) VALUES
(1, 'Aryam', 'A@gmail.com', 'Aa12345678'),
(2, 'Amirah ', 'M@gmail.com', 'M1029'),
(3, 'Reema  Alzoman', 'r1@gmail.com', 'R1234567'),
(4, 'test', 'test@gmail.com', 'Test1111'),
(5, 'Hamad', 'hmd@outlook.com', 'Hamad1234@'),
(6, 'Shaden', 'sh@gamil.com', 'Sh@19991'),
(7, 'leen', 'leen@gamil.com', 'AlAo099@'),
(8, 'reyouf', 'riri@gamil.com', 'Riri2002@'),
(9, 'Haifa', 'Haha@gmail.com', 'Haha@1919'),
(10, 'Aster', 'Secert@gmail.com', 'Ss@121200');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tourist`
--
ALTER TABLE `tourist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tourist`
--
ALTER TABLE `tourist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
