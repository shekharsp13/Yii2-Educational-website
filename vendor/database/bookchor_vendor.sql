-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 09, 2018 at 01:10 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 5.6.33-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookchor_vendor`
--

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`, `date_added`, `flag`) VALUES
(1, 'Manage Products', '2018-04-07 10:04:01', 1),
(2, 'Manage Orders', '2018-04-07 10:04:15', 1),
(3, 'Customer Queries', '2018-04-07 10:05:00', 1),
(4, 'Promotions', '2018-04-07 10:05:16', 1),
(5, 'Manage Users', '2018-04-07 15:22:58', 1),
(6, 'Support', '2018-04-07 10:05:40', 1),
(7, 'Feedbacks', '2018-04-07 10:05:51', 1),
(8, 'Settings', '2018-04-07 10:05:59', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module_detail`
--

CREATE TABLE `module_detail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `path_module` varchar(100) NOT NULL,
  `module_id` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `flag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module_detail`
--

INSERT INTO `module_detail` (`id`, `name`, `path_module`, `module_id`, `date_added`, `flag`) VALUES
(1, 'One', '/one', 1, '2018-04-07 13:01:15', 1),
(2, 'Two', '/two', 1, '2018-04-07 13:01:21', 1),
(3, 'Three', '/three', 1, '2018-04-07 13:01:28', 1),
(4, 'Five', '/four', 2, '2018-04-07 13:01:33', 1),
(5, 'Manage Users', 'bv_manage_users.php', 5, '2018-04-07 15:22:28', 1),
(6, 'Seven', '/seven', 3, '2018-04-07 13:02:46', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_detail`
--
ALTER TABLE `module_detail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `module_detail`
--
ALTER TABLE `module_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
