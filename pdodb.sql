-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2020 at 03:42 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `childId` int(11) NOT NULL,
  `headOfFamily` int(11) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `birthDate` date NOT NULL,
  `birthCertificateNo` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `disaster`
--

CREATE TABLE `disaster` (
  `disasterId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` int(11) NOT NULL,
  `creator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eligibility`
--

CREATE TABLE `eligibility` (
  `EntryId` int(11) NOT NULL,
  `predefinedFundId` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `editor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eligibilityhistory`
--

CREATE TABLE `eligibilityhistory` (
  `entryId` int(11) NOT NULL,
  `predefinedFundId` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `editor` int(11) NOT NULL,
  `updateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `fundId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` int(11) NOT NULL,
  `creator` int(11) NOT NULL,
  `amountPerPerson` int(11) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `criteriaUsed` varchar(2000) NOT NULL,
  `publishedTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `officerId` int(11) NOT NULL,
  `nid` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `region` int(11) DEFAULT NULL,
  `loginStatus` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`officerId`, `nid`, `password`, `email`, `region`, `loginStatus`, `name`, `position`) VALUES
(1, '001', '12345', 'officer1@fadts.net', 1, 'permitted', 'officer one', 'village officer'),
(2, '002', '2222', 'officer2@fadts.net', 2, 'permitted', 'officer two', 'divisional secretary'),
(3, '003', 'xxxx', 'officer3@fadts.net', 6, 'permitted', 'officer three', 'village officer'),
(4, '004', 'zzz', 'officer4@fadts.net', 5, 'permitted', 'officer four', 'district secretory');

-- --------------------------------------------------------

--
-- Table structure for table `officerhistory`
--

CREATE TABLE `officerhistory` (
  `entryId` int(11) NOT NULL,
  `updateTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `officerId` int(11) NOT NULL,
  `nid` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `region` int(11) DEFAULT NULL,
  `loginStatus` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officerhistory`
--

INSERT INTO `officerhistory` (`entryId`, `updateTime`, `officerId`, `nid`, `password`, `email`, `region`, `loginStatus`, `name`, `position`) VALUES
(1, '2020-10-09 13:21:57', 1, '001', '1234', 'officer@fadts.net', 1, 'permitted', 'officer one', 'village officer'),
(2, '2020-10-09 13:23:22', 2, '002', '2222', 'officer2@fadts.net', 2, 'permitted', 'officer two', 'divisional secretary'),
(3, '2020-10-09 17:40:27', 1, '001', '12345', 'officer1@fadts.net', 1, 'permitted', 'officer one', 'village officer'),
(4, '2020-10-10 12:14:20', 3, '003', 'xxxx', 'officer3@fadts.net', 6, 'permitted', 'officer three', 'village officer'),
(5, '2020-10-10 12:16:03', 4, '004', 'zzz', 'officer4@fadts.net', 5, 'permitted', 'officer four', 'district secratory');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `personId` int(11) NOT NULL,
  `nid` varchar(10) NOT NULL,
  `headOfFamily` int(11) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `birthDate` date NOT NULL,
  `birthCertificateNo` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` int(11) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `civilStatus` tinyint(1) NOT NULL,
  `trustee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `personhistory`
--

CREATE TABLE `personhistory` (
  `entryId` int(11) NOT NULL,
  `editor` int(11) NOT NULL,
  `updateTime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `personId` int(11) NOT NULL,
  `nid` varchar(10) NOT NULL,
  `headOfFamily` int(11) NOT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `birthDate` date NOT NULL,
  `birthCertificateNo` varchar(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region` int(11) NOT NULL,
  `job` varchar(255) DEFAULT NULL,
  `civilStatus` tinyint(1) NOT NULL,
  `trustee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `predefinedfund`
--

CREATE TABLE `predefinedfund` (
  `predefinedFundId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `recipient`
--

CREATE TABLE `recipient` (
  `entryId` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `fundId` int(11) NOT NULL,
  `deliveryStatus` tinyint(1) NOT NULL DEFAULT 0,
  `deliveryTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `regionId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `superRegion` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`regionId`, `name`, `superRegion`, `level`) VALUES
(1, 'Island', NULL, 0),
(2, 'Western Province', 1, 1),
(3, 'Colombo', 2, 2),
(4, 'Colombo 07 - Kurunduwatta', 3, 3),
(5, 'Kaluthara', 2, 2),
(6, 'Payagala South', 5, 3),
(7, 'Palayangoda', 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `victim`
--

CREATE TABLE `victim` (
  `entryId` int(11) NOT NULL,
  `disasterId` int(11) NOT NULL,
  `personId` int(11) NOT NULL,
  `updateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`childId`),
  ADD KEY `headOfFamily_child` (`headOfFamily`),
  ADD KEY `region_child` (`region`);

--
-- Indexes for table `disaster`
--
ALTER TABLE `disaster`
  ADD PRIMARY KEY (`disasterId`),
  ADD KEY `region_disaster` (`region`),
  ADD KEY `creator_disaster` (`creator`);

--
-- Indexes for table `eligibility`
--
ALTER TABLE `eligibility`
  ADD PRIMARY KEY (`EntryId`),
  ADD KEY `predefinedFundId_eligibility` (`predefinedFundId`),
  ADD KEY `personId_eligibility` (`personId`),
  ADD KEY `editor_eligibility` (`editor`);

--
-- Indexes for table `eligibilityhistory`
--
ALTER TABLE `eligibilityhistory`
  ADD PRIMARY KEY (`entryId`),
  ADD KEY `editor_eligibilityhistory` (`editor`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`fundId`),
  ADD KEY `region_fund` (`region`),
  ADD KEY `creator_fund` (`creator`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`officerId`),
  ADD KEY `region_officer` (`region`);

--
-- Indexes for table `officerhistory`
--
ALTER TABLE `officerhistory`
  ADD PRIMARY KEY (`entryId`),
  ADD KEY `officerId_officerhistory` (`officerId`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`personId`),
  ADD KEY `region_person` (`region`),
  ADD KEY `headOfFamily_person` (`headOfFamily`),
  ADD KEY `trustee_person` (`trustee`);

--
-- Indexes for table `personhistory`
--
ALTER TABLE `personhistory`
  ADD PRIMARY KEY (`entryId`),
  ADD KEY `editor_personhistory` (`editor`),
  ADD KEY `personId_personhistory` (`personId`);

--
-- Indexes for table `predefinedfund`
--
ALTER TABLE `predefinedfund`
  ADD PRIMARY KEY (`predefinedFundId`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`entryId`),
  ADD KEY `fundId_recipient` (`fundId`),
  ADD KEY `personId_recipient` (`personId`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`regionId`),
  ADD KEY `superRegion_region` (`superRegion`);

--
-- Indexes for table `victim`
--
ALTER TABLE `victim`
  ADD PRIMARY KEY (`entryId`),
  ADD KEY `disasterId_victim` (`disasterId`),
  ADD KEY `personId_victim` (`personId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `childId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disaster`
--
ALTER TABLE `disaster`
  MODIFY `disasterId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eligibility`
--
ALTER TABLE `eligibility`
  MODIFY `EntryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eligibilityhistory`
--
ALTER TABLE `eligibilityhistory`
  MODIFY `entryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `fundId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `officerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `officerhistory`
--
ALTER TABLE `officerhistory`
  MODIFY `entryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `person`
--
ALTER TABLE `person`
  MODIFY `personId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personhistory`
--
ALTER TABLE `personhistory`
  MODIFY `entryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `predefinedfund`
--
ALTER TABLE `predefinedfund`
  MODIFY `predefinedFundId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `recipient`
--
ALTER TABLE `recipient`
  MODIFY `entryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `regionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `victim`
--
ALTER TABLE `victim`
  MODIFY `entryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `child`
--
ALTER TABLE `child`
  ADD CONSTRAINT `headOfFamily_child` FOREIGN KEY (`headOfFamily`) REFERENCES `person` (`personId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `region_child` FOREIGN KEY (`region`) REFERENCES `region` (`regionId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `disaster`
--
ALTER TABLE `disaster`
  ADD CONSTRAINT `creator_disaster` FOREIGN KEY (`creator`) REFERENCES `officer` (`officerId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `region_disaster` FOREIGN KEY (`region`) REFERENCES `region` (`regionId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `eligibility`
--
ALTER TABLE `eligibility`
  ADD CONSTRAINT `editor_eligibility` FOREIGN KEY (`editor`) REFERENCES `officer` (`officerId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `personId_eligibility` FOREIGN KEY (`personId`) REFERENCES `person` (`personId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `predefinedFundId_eligibility` FOREIGN KEY (`predefinedFundId`) REFERENCES `predefinedfund` (`predefinedFundId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `eligibilityhistory`
--
ALTER TABLE `eligibilityhistory`
  ADD CONSTRAINT `editor_eligibilityhistory` FOREIGN KEY (`editor`) REFERENCES `officer` (`officerId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `fund`
--
ALTER TABLE `fund`
  ADD CONSTRAINT `creator_fund` FOREIGN KEY (`creator`) REFERENCES `officer` (`officerId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `region_fund` FOREIGN KEY (`region`) REFERENCES `region` (`regionId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `officer`
--
ALTER TABLE `officer`
  ADD CONSTRAINT `region_officer` FOREIGN KEY (`region`) REFERENCES `region` (`regionId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `officerhistory`
--
ALTER TABLE `officerhistory`
  ADD CONSTRAINT `officerId_officerhistory` FOREIGN KEY (`officerId`) REFERENCES `officer` (`officerId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `headOfFamily_person` FOREIGN KEY (`headOfFamily`) REFERENCES `person` (`personId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `region_person` FOREIGN KEY (`region`) REFERENCES `region` (`regionId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `trustee_person` FOREIGN KEY (`trustee`) REFERENCES `person` (`personId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `personhistory`
--
ALTER TABLE `personhistory`
  ADD CONSTRAINT `editor_personhistory` FOREIGN KEY (`editor`) REFERENCES `officer` (`officerId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `personId_personhistory` FOREIGN KEY (`personId`) REFERENCES `person` (`personId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `recipient`
--
ALTER TABLE `recipient`
  ADD CONSTRAINT `fundId_recipient` FOREIGN KEY (`fundId`) REFERENCES `fund` (`fundId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `personId_recipient` FOREIGN KEY (`personId`) REFERENCES `person` (`personId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `superRegion_region` FOREIGN KEY (`superRegion`) REFERENCES `region` (`regionId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `victim`
--
ALTER TABLE `victim`
  ADD CONSTRAINT `disasterId_victim` FOREIGN KEY (`disasterId`) REFERENCES `disaster` (`disasterId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `personId_victim` FOREIGN KEY (`personId`) REFERENCES `person` (`personId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
