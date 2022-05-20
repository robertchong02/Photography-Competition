-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2022 at 06:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdp`
--

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `CompetitionID` int(255) NOT NULL,
  `CompetitionTitle` varchar(255) NOT NULL,
  `Theme` varchar(255) NOT NULL,
  `RegisterDate` varchar(255) NOT NULL,
  `Deadline` varchar(255) NOT NULL,
  `CompetitionDate` varchar(255) NOT NULL,
  `Prize` varchar(255) NOT NULL,
  `Eligibility` varchar(255) NOT NULL,
  `Description` varchar(432) NOT NULL,
  `Guideline` varchar(432) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`CompetitionID`, `CompetitionTitle`, `Theme`, `RegisterDate`, `Deadline`, `CompetitionDate`, `Prize`, `Eligibility`, `Description`, `Guideline`) VALUES
(1, 'To The Hero We Call Daddy', 'Father\'s Day', '20/5/2022', 'Before 11:59pm on 10/6/2022', '12/6/2022 - 18/6/2022', 'RM100 for 1st Runner Up\r\nRM50 for 2nd Runner Up\r\nRM30 for 3rd Runner Up\r\n(Winner will be announced on June 20th.)', 'No restrictions.', 'In honor of Father’s Day, The APU Photography Club is hosting a photo contest for dads. We want to see photos that celebrate fatherhood. Please share a photo with us that reflects what you love most about your relationship with your dad, or what you love most about fatherhood.', '1. Individuals may enter only one photo into the contest.\r\n2. Photo entries must relate to the theme of Fatherhood.\r\n3. Submission will not be accepted after the deadline.\r\n4. Image quality of all submitted photos is an important consideration. Photos must be in JPEG, PNG, or GIF format. Ideally, all submitted photos should have a minimum resolution of 5 MB and 8 megapixels or higher. Photos with watermarks or other advertisemen');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `ID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Comment` varchar(255) DEFAULT NULL,
  `votes` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DoB` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Fname`, `Lname`, `Username`, `Gender`, `DoB`, `Contact`, `Email`, `Password`) VALUES
(1, 'Yeong Wei', 'Lee', 'yeongweiii', 'Female', '11/10/2002', '011-20022002', 'yeongwei@gmail.com', 'leeyeongwei');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`CompetitionID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `CompetitionID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
