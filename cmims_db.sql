-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2026 at 04:43 PM
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
-- Database: `cmims_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clinicpersonnel`
--

CREATE TABLE `clinicpersonnel` (
  `cp_ID` int(250) NOT NULL,
  `PersonnelID` varchar(250) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `RoleID` int(11) NOT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `Address` varchar(250) NOT NULL,
  `Office` varchar(250) NOT NULL,
  `EmailAddress` varchar(100) DEFAULT NULL,
  `PasswordHash` varchar(255) NOT NULL,
  `PasswordChangeDT` datetime DEFAULT NULL,
  `HireDate` date DEFAULT NULL,
  `Status` varchar(20) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clinicpersonnel`
--

INSERT INTO `clinicpersonnel` (`cp_ID`, `PersonnelID`, `FirstName`, `LastName`, `MiddleName`, `RoleID`, `ContactNumber`, `Address`, `Office`, `EmailAddress`, `PasswordHash`, `PasswordChangeDT`, `HireDate`, `Status`) VALUES
(1, 'CMIMS0001', 'Angel', 'Sarabosing', NULL, 3, NULL, 'Naic', 'Cavite', 'angelsarabosing@gmail.com', 'CMIMS123', NULL, NULL, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `userrole`
--

CREATE TABLE `userrole` (
  `RoleID` int(11) NOT NULL,
  `RoleName` varchar(50) NOT NULL,
  `Permissions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userrole`
--

INSERT INTO `userrole` (`RoleID`, `RoleName`, `Permissions`) VALUES
(1, 'Administrator', 'Full access to all modules: patient info, inventory, user management.'),
(2, 'Staff', 'View and edit patient info, create and manage visits, administer medications, manage supplies.Manage inventory, create purchase orders, update stock levels.'),
(3, 'Super Administrator', 'Full access to all modules: patient info, inventory, user management, User Control.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clinicpersonnel`
--
ALTER TABLE `clinicpersonnel`
  ADD PRIMARY KEY (`cp_ID`),
  ADD UNIQUE KEY `EmailAddress` (`EmailAddress`),
  ADD KEY `RoleID` (`RoleID`);

--
-- Indexes for table `userrole`
--
ALTER TABLE `userrole`
  ADD PRIMARY KEY (`RoleID`),
  ADD UNIQUE KEY `RoleName` (`RoleName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clinicpersonnel`
--
ALTER TABLE `clinicpersonnel`
  MODIFY `cp_ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userrole`
--
ALTER TABLE `userrole`
  MODIFY `RoleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
