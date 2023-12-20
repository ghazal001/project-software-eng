-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2023 at 07:49 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orphan`
--

-- --------------------------------------------------------

--
-- Table structure for table `addorphan`
--

CREATE TABLE `addorphan` (
  `idorphan` int(50) NOT NULL,
  `nameorphan` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `amount` int(255) NOT NULL,
  `description` text NOT NULL,
  `locationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addorphan`
--

INSERT INTO `addorphan` (`idorphan`, `nameorphan`, `age`, `gender`, `amount`, `description`, `locationID`) VALUES
(46, 'dada', 22, 'female', 12, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `adminname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `admin`, `adminname`) VALUES
(12, 'Doummar', 'doummar'),
(13, 'ghazal', 'ghazal'),
(14, 'sally', 'ghazal');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(50) NOT NULL,
  `adminid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `location` int(11) NOT NULL,
  `records` int(11) NOT NULL,
  `parent_branchid` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `adminid`, `name`, `location`, `records`, `parent_branchid`) VALUES
(103, 1, 'fsddsfds', 1, 1, NULL),
(104, 1, 'Damar', 1, 1, NULL),
(105, 1, '', 1, 1, NULL),
(106, 1, '', 1, 1, NULL),
(107, 2, '', 1, 1, NULL),
(108, 1, 'Damar', 1, 1, NULL),
(109, 1, 'Damar', 1, 1, NULL),
(110, 1, 'damar', 1, 1, NULL),
(111, 2, 'Damar', 1, 1, NULL),
(112, 2, 'Damar', 2, 2, NULL),
(113, 1, 'Damar', 1, 1, NULL),
(114, 1, 'Damar', 1, 1, NULL),
(115, 1, 'Damar', 1, 1, NULL),
(116, 1, '', 1, 1, NULL),
(118, 1, '', 1, 1, NULL),
(119, 2, 'Damar', 1, 1, NULL),
(120, 2, '', 1, 1, NULL),
(121, 1, '', 2, 1, NULL),
(122, 1, 'Damar', 1, 1, NULL),
(123, 6, '', 2, 1, NULL),
(124, 5, '', 1, 2, NULL),
(125, 5, 'Damar', 1, 1, NULL),
(126, 5, '', 1, 1, NULL),
(127, 6, 'doummar', 2, 2, NULL),
(128, 0, '', 1, 1, NULL),
(129, 0, '', 1, 1, NULL),
(130, 9, '', 1, 1, NULL),
(131, 0, '', 1, 1, NULL),
(132, 0, '', 1, 1, NULL),
(133, 0, '', 1, 1, NULL),
(135, 0, '', 1, 1, NULL),
(137, 0, 'Damar', 1, 1, NULL),
(138, 0, '', 1, 1, NULL),
(139, 0, '', 1, 1, NULL),
(140, 0, 'Damar', 1, 2, NULL),
(141, 13, '', 1, 1, NULL),
(142, 12, 'Damar', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageid` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender`) VALUES
('female'),
('male');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `locationid` int(11) NOT NULL,
  `locationname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationid`, `locationname`) VALUES
(1, 'tripoli'),
(2, 'akkar'),
(3, 'beirut');

-- --------------------------------------------------------

--
-- Table structure for table `name`
--

CREATE TABLE `name` (
  `nameid` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `recordsname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `recordsid` int(11) NOT NULL,
  `recordsN` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`recordsid`, `recordsN`) VALUES
(1, 324),
(2, 500);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role`) VALUES
('admin'),
('user');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `gender`, `password`, `role`, `email`, `description`, `image`) VALUES
(1, 'ghazal ', 'female', 'Ghazal123#', 'admin', 'ghazalfattal.02@gmail.com ', 'hey', ''),
(2, 'shaza', 'female', 'Ghazal123#', 'admin', 'shazi@gmail.com', '', ''),
(3, 'sally', 'female', 'Ghazal123#', 'admin', 'sall@gmail.com', '', ''),
(4, 'nancy', 'female', 'Ghazal123#', 'user', 'nancy@gmail.com', '', ''),
(5, 'Ghazalfattal', 'female', 'Ghazal123#', 'user', 'ghazalfattal02@gmail.com', '', ''),
(6, 'ahmad', 'male', 'Ahmad123#', 'admin', 'Mhamadkraytem@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addorphan`
--
ALTER TABLE `addorphan`
  ADD PRIMARY KEY (`idorphan`),
  ADD KEY `locationID` (`locationID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_ibfk_2` (`parent_branchid`),
  ADD KEY `adminid` (`adminid`),
  ADD KEY `location` (`location`),
  ADD KEY `records` (`records`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationid`);

--
-- Indexes for table `name`
--
ALTER TABLE `name`
  ADD PRIMARY KEY (`nameid`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`recordsid`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_ibfk_1` (`gender`),
  ADD KEY `user_ibfk_2` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addorphan`
--
ALTER TABLE `addorphan`
  MODIFY `idorphan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `name`
--
ALTER TABLE `name`
  MODIFY `nameid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `recordsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addorphan`
--
ALTER TABLE `addorphan`
  ADD CONSTRAINT `addorphan_ibfk_1` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_2` FOREIGN KEY (`location`) REFERENCES `location` (`locationid`),
  ADD CONSTRAINT `branch_ibfk_3` FOREIGN KEY (`records`) REFERENCES `records` (`recordsid`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role`) REFERENCES `role` (`role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
