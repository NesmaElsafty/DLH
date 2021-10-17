-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 01:34 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `section` text NOT NULL,
  `description` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `video` varchar(225) NOT NULL,
  `username` text NOT NULL,
  `jobTitle` text NOT NULL,
  `subject` text NOT NULL,
  `attached` text NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `section`, `description`, `vision`, `mission`, `phone`, `email`, `address`, `image`, `video`, `username`, `jobTitle`, `subject`, `attached`, `date`) VALUES
(85, 'staff', '', '', '', 0, 'adam@lms', '', 'download.jpg', '', 'adam', 'teacher', 'science', '', '2019-09-22 05:13:45.717990'),
(86, 'staff', '', '', '', 0, 'suzy@lms', '', 'images.jpg', '', 'suzy', 'teacher', 'arabic', '', '2019-09-15 01:47:58.588283'),
(87, 'staff', '', '', '', 0, 'peter@lmss', '', 'images (1).jpg', '', 'julia', 'teacher', 'math', '', '2019-09-15 01:47:58.588283'),
(88, 'staff', '', '', '', 0, 'elsa@lmss', '', 'images (2).jpg', '', 'Elsa', 'teacher', 'english', '', '2019-09-15 01:47:58.588283'),
(97, 'activities', '', '', '', 0, '', '', 'GD, Test, UI.PNG', '', '', 'great book', '', '', '2019-09-22 05:41:44.269529'),
(98, 'activities', '', '', '', 0, '', '', 'meeting.PNG', '', '', 'great book', '', '', '2019-09-22 05:41:44.422032'),
(100, 'activities', '', '', '', 0, '', '', 'BE, HR, DM.PNG', '', '', 'second project', '', '', '2019-09-22 05:55:54.448986'),
(101, 'activities', '', '', '', 0, '', '', 'CEO.PNG', '', '', 'second project', '', '', '2019-09-22 05:55:54.581488'),
(102, 'activities', '', '', '', 0, '', '', 'GD, Test, UI.PNG', '', '', 'second project', '', '', '2019-09-22 05:55:54.693990'),
(103, 'activities', '', '', '', 0, '', '', 'meeting.PNG', '', '', 'second project', '', '', '2019-09-22 05:55:54.758991'),
(104, 'activities', '', '', '', 0, '', '', 'bath hall.PNG', '', '', 'great book', '', '', '2019-09-22 06:53:35.548252'),
(116, 'activities', '', '', '', 0, '', '', 'dining.PNG', '', '', 'second project', '', '', '2019-09-22 07:05:01.090519'),
(117, 'activities', '', '', '', 0, '', '', 'GD, Test, UI.PNG', '', '', 'second project', '', '', '2019-09-22 07:05:01.397536'),
(118, 'about-us', 'ACTtitle', 'ACTtitle', 'ACTtitle', 1094322757, 'nesmaelsafty18@gmail.com', 'Madent El-solb El-gdeda, Helwan, Cairo', 'GD, Test, UI.PNG', '', '', '', '', '', '2019-09-22 07:10:52.155258'),
(120, 'news', '\r\n        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '', 0, '', '', '7U3QwfIyOJF7nPIx56cslhd64HSshEFeKoEVY7Wa.jpeg', '', '', 'great book', '', '', '2019-10-16 13:24:45.177282'),
(121, 'news', '\r\n        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', '', 0, '', '', '7U3QwfIyOJF7nPIx56cslhd64HSshEFeKoEVY7Wa.jpeg', '', '', '3rd one', '', '', '2019-10-16 13:25:58.503405');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `auth` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `auth`) VALUES
(1, 'Ahmed', 'Ahmed@gmail.com', '$2y$10$xaxpWCGJ5trpiBab98seQef0iCt7KkDK2tnqi83pUsy9j09yrPZ9K', 'master'),
(6, 'Nesma Elsafty', 'nesmaelsafty18@gmail.com', '$2y$10$Qwd6Y2KN1HvIPr4Ay2y9RezCGt1UyhOk.dpnuC0ONK2ZrrFaiXXCS', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
