-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 02:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `week-3`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(512) NOT NULL,
  `image` varchar(2048) DEFAULT NULL,
  `url` varchar(3000) NOT NULL,
  `login` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `image`, `url`, `login`) VALUES
(49, 'Otar Zakalashvili', 'https://avatars.githubusercontent.com/u/1330491?v=4', 'https://github.com/otarza', 'otarza'),
(50, 'Mariam Nonikashvili', 'https://avatars.githubusercontent.com/u/61709769?v=4', 'https://github.com/mariam58', 'mariam58'),
(51, 'Shuvalov Anton', 'https://avatars.githubusercontent.com/u/1410106?v=4', 'https://github.com/A', 'A'),
(52, 'Corey Bertram', 'https://avatars.githubusercontent.com/u/65956?v=4', 'https://github.com/q', 'q'),
(53, 'Taku M', 'https://avatars.githubusercontent.com/u/60341?v=4', 'https://github.com/t', 't');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
