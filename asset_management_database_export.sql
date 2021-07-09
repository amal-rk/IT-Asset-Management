-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 09, 2021 at 07:01 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asset_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `cpassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `f_name`, `l_name`, `email`, `gender`, `password`, `cpassword`) VALUES
(1, 'shaji', 'abraham', 'aswath.k@maventic.com', 'on', '1234', '1234'),
(2, 'shaji', 'abraham', 'aswath.k@maventic.com', 'on', '1234', '1234'),
(3, 'shaji', 'anviya', 'shaji123@gmail.com', 'on', '143', '143'),
(4, 'Amal', 'Rk', 'amal@itasset.com', 'on', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `systemid` int(11) NOT NULL,
  `devicename` varchar(50) NOT NULL,
  `manufacture` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `processor` varchar(50) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `drive` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL DEFAULT '0',
  `price` varchar(50) NOT NULL,
  `warranty` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`systemid`, `devicename`, `manufacture`, `model`, `processor`, `ram`, `drive`, `location`, `description`, `gst`, `price`, `warranty`) VALUES
(1, 'adminpc', 'Lenovo', 'Ideacentre', 'Pentium Quad Core', '4 GB', '500 GB', 'LAB 1', '', '200', '20000', '2030');

-- --------------------------------------------------------

--
-- Table structure for table `keyboard`
--

CREATE TABLE `keyboard` (
  `id` int(11) NOT NULL,
  `manufacture` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keyboard`
--

INSERT INTO `keyboard` (`id`, `manufacture`, `model`, `categories`, `location`, `description`, `gst`, `price`, `warranty`) VALUES
(1, 'azus', 'HFR46', 'Wired', 'LAB 1', '44hdt57uw4543', '572', '46000', '2030');

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `id` int(11) NOT NULL,
  `manufacture` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `gst` varchar(11) NOT NULL DEFAULT '''0''',
  `price` varchar(11) NOT NULL,
  `warranty` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`id`, `manufacture`, `model`, `categories`, `location`, `description`, `gst`, `price`, `warranty`) VALUES
(1, 'dell', 'xyz', 'LED', 'LAB 2', 'gfjhkj', '0', '0', '0000'),
(2, 'dell', 'xyz', 'LED', 'LAB 2', 'sfdsh', '0', '0', '0000'),
(3, 'HP', 'jkl', 'LED', 'LAB 1', 'fgjeetrytuyioupk', '569', '12000', '2028'),
(4, 'DELL', '24 inch Full HD IPS Panel Monitor ', 'LCD', 'LAB 2', 'et234654e8r6f53w', '300', '10346', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mouse`
--

CREATE TABLE `mouse` (
  `id` int(11) NOT NULL,
  `manufacture` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mouse`
--

INSERT INTO `mouse` (`id`, `manufacture`, `model`, `categories`, `location`, `description`, `gst`, `price`, `warranty`) VALUES
(1, 'razer', 'BX464', 'Wired', 'LAB 1', 'ty5t676r9irftyu696yhiu8r6', '779', '20000', '2030'),
(2, 'razer', 'JK353', 'Wireless', 'LAB 1', '5y575e6746s', '685', '20000', '2030');

-- --------------------------------------------------------

--
-- Table structure for table `printer`
--

CREATE TABLE `printer` (
  `id` int(11) NOT NULL,
  `manufacture` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `categories` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `gst` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `warranty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `software`
--

CREATE TABLE `software` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `version` varchar(50) NOT NULL,
  `systemid` int(11) NOT NULL,
  `installdate` date NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `software`
--

INSERT INTO `software` (`id`, `name`, `version`, `systemid`, `installdate`, `type`, `description`, `price`) VALUES
(1, 'Microsoft Windows', '10', 1, '2021-07-08', 'Operating System', '', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`systemid`);

--
-- Indexes for table `keyboard`
--
ALTER TABLE `keyboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mouse`
--
ALTER TABLE `mouse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printer`
--
ALTER TABLE `printer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id`),
  ADD KEY `systemid` (`systemid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `systemid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keyboard`
--
ALTER TABLE `keyboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mouse`
--
ALTER TABLE `mouse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `software`
--
ALTER TABLE `software`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `software`
--
ALTER TABLE `software`
  ADD CONSTRAINT `software_ibfk_1` FOREIGN KEY (`systemid`) REFERENCES `computer` (`systemid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
