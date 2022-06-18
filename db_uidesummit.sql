-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 11:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uidesummit`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'Khoeru Roziqin', 'roziqinkhoeru@uidesummit.com', '$2y$10$M0PE6ORP5h6nZgKmka5pquMZ0Yne2rwBE.L4GWsYFcITU.WoP07Ji');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `name_event` varchar(255) NOT NULL,
  `date_event` date NOT NULL,
  `information_event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id_event`, `name_event`, `date_event`, `information_event`) VALUES
(1, 'Figma Championship Underdog 2022', '2022-06-30', 'Eget nunc lobortis mattis aliquam. Eget gravida cum sociis natoque penatibus. Sed adipiscing diam donec adipiscing. Donec ultrices tincidunt arcu non sodales neque sodales ut. Id consectetur purus ut faucibus. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus dolor. Cursus turpis massa tincidunt dui. At augue eget arcu dictum.'),
(2, 'Adobe Illustrator Summit 2023', '2023-01-01', 'Quis varius quam quisque id. Et odio pellentesque diam volutpat commodo. Nisi quis eleifend quam adipiscing. Est ante in nibh mauris. Nisl purus in mollis nunc sed id. Porttitor massa id neque aliquam vestibulum morbi blandit cursus'),
(3, 'UI Design Global Chalenges Winter 2023', '2023-08-17', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet massa vitae tortor condimentum. Imperdiet nulla malesuada pellentesque elit eget gravida cum');

-- --------------------------------------------------------

--
-- Table structure for table `registrant`
--

CREATE TABLE `registrant` (
  `id` int(11) NOT NULL,
  `name_registrant` varchar(100) NOT NULL,
  `email_registrant` varchar(100) NOT NULL,
  `date_birth_registrant` date NOT NULL,
  `address_registrant` text NOT NULL,
  `id_event` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrant`
--

INSERT INTO `registrant` (`id`, `name_registrant`, `email_registrant`, `date_birth_registrant`, `address_registrant`, `id_event`) VALUES
(1, 'Stephen Dico', 'dicostephen@gmail.com', '2002-06-03', 'Manchaster', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `registrant`
--
ALTER TABLE `registrant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_event` (`id_event`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registrant`
--
ALTER TABLE `registrant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registrant`
--
ALTER TABLE `registrant`
  ADD CONSTRAINT `registrant_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
