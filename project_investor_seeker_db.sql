-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 10:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_investor_seeker_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-table1`
--

CREATE TABLE `admin-table1` (
  `id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-table1`
--

INSERT INTO `admin-table1` (`id`, `photo`, `name`, `role`, `username`, `password`) VALUES
(14, '64639dd3251c6.png', 'ss', 'adminsanto', 'ss', 'ss'),
(15, '64dcf5c886663.png', 'araath hossen santo', 'modarator', 'santo', 'santo1234'),
(16, '64dd206f85e5d.png', 'atik', 'admin', 'arafath', 'asas'),
(17, '64e387a16dc8f.png', 'arafath hossen santo', 'admin', 'ssss', 'ssssssss');

-- --------------------------------------------------------

--
-- Table structure for table `card_information_all`
--

CREATE TABLE `card_information_all` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `entro-photo` varchar(255) NOT NULL,
  `card-photo` varchar(255) NOT NULL DEFAULT 'defaultPhoto.jgp',
  `cover-photo` varchar(255) NOT NULL,
  `company-logo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `entrepreneur-post` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL,
  `business-type` varchar(255) NOT NULL,
  `company-name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `product-description` varchar(255) NOT NULL,
  `product-usecase-1` varchar(255) NOT NULL,
  `product-usecase-2` varchar(255) NOT NULL,
  `product-usecase-3` varchar(255) NOT NULL,
  `product-usecase-4` varchar(255) NOT NULL,
  `revenue` int(100) NOT NULL,
  `last-month-sell` int(100) NOT NULL,
  `last-year-sell` int(100) NOT NULL,
  `total-sell` int(100) NOT NULL,
  `investment-amount` int(100) NOT NULL,
  `equity-offer` int(100) NOT NULL,
  `investment-purpose` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `status-of-post` varchar(100) NOT NULL,
  `status-of-request` varchar(100) NOT NULL,
  `accepted_investor_id` int(255) NOT NULL DEFAULT -1,
  `date-of-post` date NOT NULL,
  `like-count` int(255) NOT NULL DEFAULT 0,
  `dislike-count` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='this table is holding card information..';

--
-- Dumping data for table `card_information_all`
--

INSERT INTO `card_information_all` (`id`, `username`, `entro-photo`, `card-photo`, `cover-photo`, `company-logo`, `name`, `entrepreneur-post`, `education`, `email`, `phone`, `business-type`, `company-name`, `location`, `product-description`, `product-usecase-1`, `product-usecase-2`, `product-usecase-3`, `product-usecase-4`, `revenue`, `last-month-sell`, `last-year-sell`, `total-sell`, `investment-amount`, `equity-offer`, `investment-purpose`, `goal`, `status-of-post`, `status-of-request`, `accepted_investor_id`, `date-of-post`, `like-count`, `dislike-count`) VALUES
(1, 'santo', '64e8fd07a4ae5.png', 'defaultPhoto.jpg', 'cover1.jpeg', '64eb067826879.png', 'santo', 'arafath', 'a', 'a', 1212, 'aaaa', 'aaaa', 'aaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 'aaaa', 12102, 14124214, 10414124, 44141414, 1111122, 20, 'xsxszxs', 'sddwdwdwd', 'Verified', 'Accepted', 0, '2023-08-08', 0, 0),
(2, 'amin', '64e8fd07a4ae5.png', '64e71631eca84.png', 'cover3.jpg', '64eb067826879.png', 'arafath hossen santo', 'Student of AIUB', 'BSE In CSE', 'arafathh@gmail.com', 1759621258, 'Tech', 'investorseeker', 'Dhaka 24/1', 'we are launching a software investor seeker. Which will connect the Entrepreneur and investor??.', 'it will help the entro', 'iesssmskms', 'sdsddsd', 'dsdsdsds', 0, 100000, 51515, 500000, 500000, 10, 'business', 'to be unique one', 'Verified', 'Accepted', 7, '2023-08-24', 0, 0),
(3, 'sdsdsd', '64e8fd07a4ae5.png', 'defaultPhoto.jpg', 'cover4.jpg', '64eb067826879.png', 'dsdsd', 'sdsds', 'sdsdsd', 'dsdsd', 1441, 'sdsds', 'sdsd', 'dsdsds', 'sdsds', 'sdsds', 'sdsds', 'sdsdsd', 'sdsdsd', 232, 23232, 23232, 2323, 2323, 2424, 'ccdsdfsdf', 'sdsdsds', 'Verified', 'Accepted', -1, '2023-08-22', 0, 0),
(4, 'amin', '64e8fd07a4ae5.png', '64e8cb6c001d6.png', 'cover5.jpg', '64eb067826879.png', 'araath hossen santo', 'Student of AIUB', 'BSE In CSE', 'arh@gmail.com', 1759621258, 'it', 'NNT', 'ajsnjansa', 'tloklk', 'kjkjk', 'jkjkjk', 'jkjkjk', 'jkjkuk', 0, 0, 0, 0, 0, 0, 'ukukukj', 'uuuukululluu', 'Verified', 'Accepted', -1, '2023-08-25', 0, 0),
(5, 'amin', '64e8fd07a4ae5.png', '64eb067826890.png', 'cover2.jpg\n', '64eb067826879.png', 'asif ali', 'Student of AIUB', 'BSE In CSE', 'asif@gmail.com', 14567895, 'it', 'nasa', 'dhaka', 'we are launching software for investor', 'hjghgh', 'hghg', 'ghgh', 'ghghghg', 0, 100000, 51515, 5000000, 5515, 12, 'business', 'to be unique one', 'Verified', 'Accepted', -1, '2023-08-27', 0, 0),
(6, 'nihad', '64eb745f6911e.png', '64eb931c43757.png', 'cover1.jpeg\r\n', '64eb931c42ade.png', 'nihad hamid', 'Student of NSU', 'BSE In CSE', 'nihad@gmail.com', 478965412, 'Sell', 'amit', 'narayongonj', 'we are launching software for local people', 'it will help the entro', 'less time required.', 'more reliable', 'more easy to use ', 5000, 100000, 5000000, 50000000, 500000, 12, 'business', 'to be unique one', 'Verified', 'not-accepted', -1, '2023-08-27', 0, 0),
(7, 'nihad', '64eb745f6911e.png', '64eb93e61b2b5.png', 'cover5.jpg\r\n', '64eb93e61b2a2.png', 'nihad hamid', 'Student of NSU', 'BSE In CSE', 'nihadd@gmail.com', 478965412, 'Sell', 'amit', 'narayongonj', 'we are launching software for local people', 'it will help the entro', 'less time required.', 'more reliable', 'more easy to use ', 5000, 100000, 5000000, 50000000, 500000, 12, 'business', 'to be unique one', 'Verified', 'not-accepted', -1, '2023-08-27', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `entrepreneur-reg-table1`
--

CREATE TABLE `entrepreneur-reg-table1` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `profile_photo` varchar(255) NOT NULL,
  `first-name` varchar(100) NOT NULL DEFAULT '-',
  `last-name` varchar(100) NOT NULL DEFAULT '-',
  `username` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `date_sign` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'ent'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entrepreneur-reg-table1`
--

INSERT INTO `entrepreneur-reg-table1` (`id`, `name`, `profile_photo`, `first-name`, `last-name`, `username`, `nid`, `email`, `phone`, `password`, `date_sign`, `role`) VALUES
(7, '', '', 'arafath', 'santo', 'safin', 1234, 'san@gmail.com', 45652, 'sasa', '23:05:13', 'ent'),
(13, '', '', '-', '-', 'arafath', 56552565, 'arafathh@gmail.com', 0, 'arafath1234', '23:08:21', 'ent'),
(14, 'araathsanto', '64e8fd07a4ae5.png', 'Amin', 'Hasan', 'amin', 123, 'arafathh@gmail.com', 1759621258, 'amin', '23:08:22', 'ent'),
(15, '', '64eb698b7a113.png', '-', '-', 'santo2', 4545, 'araffath@gmail.com', 0, 'santo2', '23:08:27', 'ent'),
(16, 'shawonmia', '64eb6fa54657f.png', 'shawon', 'mia', 'shawon', 456978, 'shawon@gmail.com', 1866656205, 'shawon1234', '23:08:27', 'ent'),
(17, 'nihad hamid', '64eb95bc52f9d.png', 'nihal hasan', 'hamid', 'nihad', 789456, 'nihad@gmail.com', 4789654, 'nihad12', '23:08:27', 'ent'),
(18, 'sssssss', '64eb9bf2edd7a.png', 'sss', 'ssss', 'sdsd', 12345, 'arassfathh@gmail.com', 1759621258, 'sdsd', '23:08:27', 'ent'),
(19, '', '64ecfcbe679d3.png', '', '', '', 0, '', 0, '', '23:08:28', 'ent'),
(20, 'virat kohlikohli', '64ed00f001a01.png', 'virat kohli', 'kohli', 'virat', 12345, 'virat@gmail.com', 1866656205, 'virat1234', '23:08:28', 'ent');

-- --------------------------------------------------------

--
-- Table structure for table `investor_reg_table1`
--

CREATE TABLE `investor_reg_table1` (
  `id` int(11) NOT NULL,
  `investor_profile` varchar(255) NOT NULL,
  `first-name` varchar(255) NOT NULL,
  `last-name` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `date_sign` varchar(100) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'inv'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `investor_reg_table1`
--

INSERT INTO `investor_reg_table1` (`id`, `investor_profile`, `first-name`, `last-name`, `name`, `username`, `password`, `nid`, `email`, `phone`, `date_sign`, `role`) VALUES
(4, '64eb1c85341bd.png', 'araath', 'santo', 'arafath hossen santo', 'santo', 'santo123', 4555, 'arafathh@gmail.com', 1759621258, '23:08:21', 'inv'),
(5, '64ea54f191a3e.png', 'safin', 'hasan', 'Safina Hasan', 'safin', 'safin12', 12345, 'safin@gmail.com', 454525555, '23:08:26', 'inv'),
(6, '64eb69d2f09c7.png', '', '', 'Sayem', 'sakil', 'sakil', 45845, 'sakk@gmail.com', 0, '23:08:27', 'inv'),
(7, '64ecdd53ac18c.png', 'nadim', 'hasan', 'nadin hasan', 'nadim', 'nadim1234', 78954, 'nadim@gmail.com', 0, '23:08:27', 'inv'),
(8, '64eb98cde6703.png', 'maruf', 'hasan', 'maruf hasan', 'maruf', 'maruf1234', 12345, 'sakur@gmail.com', 0, '23:08:27', 'inv'),
(9, '64eb99f55a5b7.png', 'arafath', 'santo', 'arafath santo', 'santosa', 'sasasa', 12345, 'arafathh@gmail.com', 0, '23:08:27', 'inv'),
(10, '64eb9ae2ca0cb.png', 'sasa', 'sasa', 'sasa sasa', 'dada', 'dada', 12345, 'arafatdhh@gmail.com', 0, '23:08:27', 'inv'),
(11, '64eb9b150485e.png', 'sasa', 'sasa', 'sasa sasa', 'dadada', 'dada', 12345, 'arafatdhh@gmail.com', 0, '23:08:27', 'inv'),
(12, '64eb9bb434635.png', 'sasa', 'sasa', 'sasa sasa', 'dadadafa', 'fafafa', 12345, 'arafatdhh@gmail.com', 1759621258, '23:08:27', 'inv'),
(13, '64eb9c817f9eb.png', 'araath', 'santo', 'araath santo', 'ytyt', 'ytyt', 12345, 'arafathh@gmail.com', 1759621258, '23:08:27', 'inv'),
(14, '64ecfd2c826e0.png', '', '', ' ', '', '', 0, '', 0, '23:08:28', 'inv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-table1`
--
ALTER TABLE `admin-table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card_information_all`
--
ALTER TABLE `card_information_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entrepreneur-reg-table1`
--
ALTER TABLE `entrepreneur-reg-table1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investor_reg_table1`
--
ALTER TABLE `investor_reg_table1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-table1`
--
ALTER TABLE `admin-table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `card_information_all`
--
ALTER TABLE `card_information_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `entrepreneur-reg-table1`
--
ALTER TABLE `entrepreneur-reg-table1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `investor_reg_table1`
--
ALTER TABLE `investor_reg_table1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
