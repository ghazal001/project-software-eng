-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2023 at 06:44 PM
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
(63, 'gh', 22, 'female', 0, '', 2),
(69, 'dada', 20, 'female', 0, '2222', 5),
(71, 'dada', 22, 'male', 0, 'sss', 3),
(73, 'ghadir', 22, 'female', 0, 'masare', 5),
(85, 'mhamad', 22, 'male', 25500, 'i needdddddddddddd', 3),
(88, 'mireille', 222, 'male', 22, '', 5);

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
(145, 13, 'ahmad', 2, 1, NULL),
(146, 13, '', 2, 1, NULL),
(147, 13, 'doummaralzahabi', 5, 2, NULL),
(148, 13, 'damar', 3, 2, NULL);

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
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `iddonation` int(11) NOT NULL,
  `donationN` varchar(50) NOT NULL,
  `userId` int(11) NOT NULL,
  `orphanId` int(11) NOT NULL,
  `donationM` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`iddonation`, `donationN`, `userId`, `orphanId`, `donationM`) VALUES
(7, '435', 5, 63, 0),
(8, '55888555555555', 5, 71, 0),
(9, '', 5, 63, 0),
(10, '55888555555555', 5, 71, 0),
(11, '', 5, 71, 0),
(12, '', 5, 71, 0),
(13, '', 5, 69, 0),
(14, '1000000', 5, 69, 0),
(15, '550', 13, 73, 0),
(16, '500', 5, 63, 0),
(17, '500', 5, 63, 0),
(18, '500', 5, 85, 0),
(19, '500', 5, 69, 2),
(20, '500', 5, 73, 2),
(21, '500', 5, 88, 5),
(22, '22', 5, 85, 2);

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
(2, 'akkar'),
(3, 'beirut'),
(5, 'sour'),
(6, 'tripoli');

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
(5, 'Ghazalfattal', 'female', 'Ghazal123#', 'user', 'ghazalfattal02@gmail.com', '', 'download.png'),
(6, 'ahmad', 'male', 'Ahmad123#', 'admin', 'Mhamadkraytem@gmail.com', '', ''),
(7, 'doummarzahabi', 'male', 'Doummar123#', 'admin', 'alzahabidoummar@gmail.com', '', ''),
(8, 'Najwa', 'female', 'Najwa123#', 'admin', 'Najwa@gmail.com', '', ''),
(9, '', 'male', 'Adam1122#', 'user', 'Adam@gmail.com', '', ''),
(10, '', 'female', 'Ghadir123#', 'admin', 'Ghadiro@gmail.com', '', ''),
(11, 'Nanncy', 'female', 'Nancy123#', 'admin', 'Nanchy@gmail.com', '', ''),
(12, 'shazoye', 'female', 'Shaza123#', 'admin', 'Shaz22a@gmail.com', '', ''),
(13, 'Doummarbek', 'male', 'Doummar123#', 'user', 'Doummar22@gmail.com', '', ''),
(14, 'Saado', 'male', 'Saado123#', 'user', 'Saado2@gmail.com', '', ''),
(15, 'Saadod', 'male', 'Saado123#', 'user', 'saado12@gmail.com', '', '');

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
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`iddonation`),
  ADD KEY `userId` (`userId`),
  ADD KEY `orphanId` (`orphanId`);

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
  MODIFY `idorphan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `donation`
--
ALTER TABLE `donation`
  MODIFY `iddonation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- Constraints for table `donation`
--
ALTER TABLE `donation`
  ADD CONSTRAINT `donation_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_ibfk_2` FOREIGN KEY (`orphanId`) REFERENCES `addorphan` (`idorphan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role`) REFERENCES `role` (`role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
