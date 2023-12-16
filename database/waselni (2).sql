-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 04:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waselni`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `messageID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`messageID`, `userID`, `message`) VALUES
(1, 49, 'd'),
(2, 49, 'hello lorem'),
(3, 49, 'hello lorem'),
(4, 49, 'good project idea\r\n'),
(5, 49, 'good project idea\r\n'),
(6, 49, 'good project idea\r\n'),
(7, 49, 'good project idea\r\n'),
(8, 49, 'good project idea\r\n'),
(9, 49, 'good project idea\r\n'),
(10, 49, 'good project idea\r\n'),
(11, 49, 'good project idea\r\n'),
(12, 49, 'good project idea\r\n'),
(13, 49, 'good project idea\r\n'),
(14, 49, 'good project idea\r\n'),
(15, 49, 'good project idea\r\n'),
(16, 49, 'good project idea\r\n'),
(17, 49, 'good project idea\r\n'),
(18, 49, 'good project idea\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `dayID` int(11) NOT NULL,
  `day` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`dayID`, `day`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender` varchar(30) NOT NULL
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
  `locationID` int(11) NOT NULL,
  `locationName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`locationID`, `locationName`) VALUES
(1, 'LIU'),
(2, 'Baddawi'),
(3, 'Koura'),
(4, 'Mina');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `requestID` int(11) NOT NULL,
  `tripID` int(11) NOT NULL,
  `studentID` int(11) NOT NULL,
  `answer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`requestID`, `tripID`, `studentID`, `answer`) VALUES
(83, 39, 46, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reservetrip`
--

CREATE TABLE `reservetrip` (
  `reservationID` int(11) NOT NULL,
  `tripID` int(11) NOT NULL,
  `studentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservetrip`
--

INSERT INTO `reservetrip` (`reservationID`, `tripID`, `studentID`) VALUES
(22, 36, 46);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role`) VALUES
('driver'),
('student');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `timeId` int(11) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`timeId`, `time`) VALUES
(7, '08:00:00'),
(8, '09:00:00'),
(9, '09:30:00'),
(10, '10:00:00'),
(11, '10:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `tripID` int(11) NOT NULL,
  `fromlocationID` int(11) NOT NULL,
  `toLocationID` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `dayID` int(11) NOT NULL,
  `availableNB` int(11) NOT NULL,
  `DriverID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`tripID`, `fromlocationID`, `toLocationID`, `time`, `dayID`, `availableNB`, `DriverID`) VALUES
(36, 3, 1, 10, 3, 2, 49),
(38, 1, 3, 7, 1, 1, 53),
(39, 4, 1, 9, 4, 3, 49);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `Description` varchar(500) DEFAULT NULL,
  `locationID` int(11) DEFAULT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `gender`, `password`, `role`, `email`, `Description`, `locationID`, `image`) VALUES
(31, 'mouhamad', 'male', 'Mouhamad123$', 'driver', 'moohamadkraytem15@gmail.com', NULL, NULL, ''),
(34, 'Bahaa', 'male', 'Yuri7179#', 'student', 'mouaha@gmail.com', NULL, NULL, ''),
(46, 'Ammar', 'male', 'Mouhamad123#', 'student', 'mouhaamd12@gmail.com', NULL, NULL, ''),
(48, 'omar', 'male', '1231', 'driver', 'khtmeto@gmail.com', NULL, NULL, ''),
(49, 'Doummar', 'female', 'Doummar123#', 'driver', 'doummar123@gmail.com', NULL, 2, 'default.jpg'),
(50, 'Naim', 'male', '12345678', 'student', 'naim@gmail.com', NULL, NULL, ''),
(51, 'Ahmad', 'male', 'Ahmad123#', 'student', 'ahmad123@gmail.com', NULL, NULL, ''),
(52, 'Tarek', 'female', '$2y$10$mNjl3mQEnbk0Rw9sLGdUD.J', 'driver', 'tarekrimeh234@gmail.com', NULL, NULL, ''),
(53, 'Shaza', 'female', 'Shaza123#', 'driver', 'shaza123@gmail.com', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`dayID`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`requestID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `tripID` (`tripID`);

--
-- Indexes for table `reservetrip`
--
ALTER TABLE `reservetrip`
  ADD PRIMARY KEY (`reservationID`),
  ADD KEY `studentID` (`studentID`),
  ADD KEY `tripID` (`tripID`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`timeId`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`tripID`),
  ADD KEY `fromlocationID` (`fromlocationID`),
  ADD KEY `toLocationID` (`toLocationID`),
  ADD KEY `trip_ibfk_3` (`DriverID`),
  ADD KEY `trip_ibfk_4` (`time`),
  ADD KEY `dayID` (`dayID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gender` (`gender`),
  ADD KEY `role` (`role`),
  ADD KEY `locationID` (`locationID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `dayID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `reservetrip`
--
ALTER TABLE `reservetrip`
  MODIFY `reservationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `timeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `tripID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`tripID`) REFERENCES `trip` (`tripID`);

--
-- Constraints for table `reservetrip`
--
ALTER TABLE `reservetrip`
  ADD CONSTRAINT `reservetrip_ibfk_1` FOREIGN KEY (`studentID`) REFERENCES `user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservetrip_ibfk_2` FOREIGN KEY (`tripID`) REFERENCES `trip` (`tripID`) ON DELETE CASCADE;

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`fromlocationID`) REFERENCES `location` (`locationID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_2` FOREIGN KEY (`toLocationID`) REFERENCES `location` (`locationID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_3` FOREIGN KEY (`DriverID`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_4` FOREIGN KEY (`time`) REFERENCES `time` (`timeId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_5` FOREIGN KEY (`dayID`) REFERENCES `days` (`dayID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`gender`) REFERENCES `gender` (`gender`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`role`) REFERENCES `role` (`role`),
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`locationID`) REFERENCES `location` (`locationID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;