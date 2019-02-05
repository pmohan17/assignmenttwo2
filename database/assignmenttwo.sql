-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 01:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignmenttwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `pickuplines`
--

CREATE TABLE `pickuplines` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pickup` varchar(250) NOT NULL,
  `situation` varchar(500) NOT NULL,
  `success` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pickuplines`
--

INSERT INTO `pickuplines` (`id`, `name`, `pickup`, `situation`, `success`) VALUES
(2, 'Priya', '\\\"Hey girl, you\\\'re hotter than the bottom of my laptop!\\\"', 'I was at a coffee shop. A guy at a table across from me came up to me and used this line. I died laughing and he ended up buying me coffee. ', 'yes'),
(4, 'Lily', '\\\"Hey girl, did you sit on sugar because you have a pretty sweet butt\\\"', 'I was out with my girlfriends when a dude approached me and said this line. One of my friends laughed so hard she spat milk.', 'no'),
(5, 'Janet', 'I wish I were cross-eyed so I can see you twice', 'I random person at Publix came up to me and told me this. I was more disturbed than charmed, but my younger sister, who was with me, and I ended up laughing about it all the way home.', 'no'),
(6, 'Faith', 'Thank god I\\\'m wearing gloves because you\\\'re too hot to handle!', 'The guy was making a sandwich for me at subway. Will admit, he had excellent customer service.', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pickuplines`
--
ALTER TABLE `pickuplines`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pickuplines`
--
ALTER TABLE `pickuplines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
