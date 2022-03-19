-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2021 at 10:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PLO Achiviement`
--

-- --------------------------------------------------------

--
-- Table structure for table `Chair`
--

CREATE TABLE `Chair` (
  `ID` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Chair`
--

INSERT INTO `Chair` (`ID`, `name`, `email`, `phone`) VALUES
('@00015225', 'Zain A. Balfagih', 'zbalfagih@effatuniversity.edu.sa', 560309141);

-- --------------------------------------------------------

--
-- Table structure for table `CLO`
--

CREATE TABLE `CLO` (
  `id` varchar(15) NOT NULL,
  `text` text NOT NULL,
  `category` varchar(20) NOT NULL,
  `ploID` varchar(15) NOT NULL,
  `courseID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Courses`
--

CREATE TABLE `Courses` (
  `code` varchar(15) NOT NULL,
  `title` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL,
  `deptID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Courses`
--

INSERT INTO `Courses` (`code`, `title`, `level`, `deptID`) VALUES
('', '', '', 'COE_CS'),
('cs1001', 'intro', 'Freshman', 'COE_CS'),
('cs2', 'idk', 'Freshman', 'COE_CS'),
('CS2111', 'web development', 'Sophmore', 'COE_CS');

-- --------------------------------------------------------

--
-- Table structure for table `Department`
--

CREATE TABLE `Department` (
  `ID` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `chairID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Department`
--

INSERT INTO `Department` (`ID`, `name`, `chairID`) VALUES
('COE_CS', 'Computer Science', '@00015225');

-- --------------------------------------------------------

--
-- Table structure for table `Faculty`
--

CREATE TABLE `Faculty` (
  `ID` varchar(15) NOT NULL,
  `name` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `specilization` varchar(25) NOT NULL,
  `deptID` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Faculty`
--

INSERT INTO `Faculty` (`ID`, `name`, `phone`, `specilization`, `deptID`) VALUES
('@00029766', 'Helene Kanso', 555555, 'AI', 'COE_CS');

-- --------------------------------------------------------

--
-- Table structure for table `PLO`
--

CREATE TABLE `PLO` (
  `ID` varchar(15) NOT NULL,
  `deptID` varchar(15) NOT NULL,
  `text_plo` text NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `PLO`
--

INSERT INTO `PLO` (`ID`, `deptID`, `text_plo`, `category`) VALUES
('', 'COE_CS', '', ''),
('1', 'COE_CS', 'Analyse complex computing problems and to apply principles of Computer Science, and other relevant disciplines to identify solutions.', 'Ihsan'),
('4', 'COE_CS', '23edc', 'Ihsan');

-- --------------------------------------------------------

--
-- Table structure for table `Semester_Offering`
--

CREATE TABLE `Semester_Offering` (
  `ID` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `semester` varchar(12) NOT NULL,
  `facultyID` varchar(15) NOT NULL DEFAULT '',
  `courseID` varchar(15) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Semester_Offering`
--

INSERT INTO `Semester_Offering` (`ID`, `year`, `semester`, `facultyID`, `courseID`) VALUES
(2, 2022, 'Fall', 'Helene Kanso', 'cs1001'),
(3, 2023, 'Winter', 'Helene Kanso', 'CS2111'),
(4, 2023, 'Winter', 'adel', 'CS2111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Chair`
--
ALTER TABLE `Chair`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `CLO`
--
ALTER TABLE `CLO`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ploID` (`ploID`),
  ADD KEY `courseID` (`courseID`);

--
-- Indexes for table `Courses`
--
ALTER TABLE `Courses`
  ADD PRIMARY KEY (`code`),
  ADD KEY `deptID` (`deptID`);

--
-- Indexes for table `Department`
--
ALTER TABLE `Department`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `chairID` (`chairID`);

--
-- Indexes for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `deptID` (`deptID`);

--
-- Indexes for table `PLO`
--
ALTER TABLE `PLO`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `deptID` (`deptID`);

--
-- Indexes for table `Semester_Offering`
--
ALTER TABLE `Semester_Offering`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `facultyID` (`facultyID`),
  ADD KEY `courseID` (`courseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Semester_Offering`
--
ALTER TABLE `Semester_Offering`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `CLO`
--
ALTER TABLE `CLO`
  ADD CONSTRAINT `CLO_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `Courses` (`code`),
  ADD CONSTRAINT `CLO_ibfk_2` FOREIGN KEY (`ploID`) REFERENCES `PLO` (`ID`);

--
-- Constraints for table `Courses`
--
ALTER TABLE `Courses`
  ADD CONSTRAINT `Courses_ibfk_1` FOREIGN KEY (`deptID`) REFERENCES `Department` (`ID`);

--
-- Constraints for table `Department`
--
ALTER TABLE `Department`
  ADD CONSTRAINT `Department_ibfk_1` FOREIGN KEY (`chairID`) REFERENCES `Chair` (`ID`);

--
-- Constraints for table `Faculty`
--
ALTER TABLE `Faculty`
  ADD CONSTRAINT `Faculty_ibfk_1` FOREIGN KEY (`deptID`) REFERENCES `Department` (`ID`);

--
-- Constraints for table `PLO`
--
ALTER TABLE `PLO`
  ADD CONSTRAINT `PLO_ibfk_1` FOREIGN KEY (`deptID`) REFERENCES `Department` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
