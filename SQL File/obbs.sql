-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2024 at 06:20 PM
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
-- Database: `obbs`
--

-- --------------------------------------------------------


--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 5689784589, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-01-30 11:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `ID` int(10) NOT NULL,
  `BookingID` int(10) DEFAULT NULL,
  `ServiceID` int(10) DEFAULT NULL,
  `UserID` int(5) DEFAULT NULL,
  `BookingDate` date DEFAULT NULL,
  `ServiceType` varchar(200) DEFAULT NULL,
  `cityName` varchar(255) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `Remark` varchar(200) DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`ID`, `BookingID`, `ServiceID`, `UserID`, `BookingDate`,  `ServiceType`,   `cityName`, `Message`,  `Remark`, `Status`) VALUES
(1, 422701608, 1, 3, '2024-02-17',  'Maid',  'Erode', 'We need your services', 'Approved', 'Approved'),
(2, 697339619, 2, 4, '2024-02-20',  'Driver',   'Thindal', 'NA',  'Your booking is cancelled', 'Cancelled'),
(3, 347642822, 4, 5, '2024-02-27',  'Plumber',   'Chithode', 'NA', 'Approved', 'Approved'),
(4, 144316724, 1, 5, '2024-03-14',  'Milkman',   'Palayapalayam', 'NA',  NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;




-- --------------------------------------------------------

--
-- Table structure for table `tbleventtype`
--

CREATE TABLE `tblServicetype` (
  `ID` int(10) NOT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Picture` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `City` varchar(200) NOT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
 
--
-- Dumping data for table `tbleventtype`
--

INSERT INTO `tblServicetype`  (`ID`, `Category`, `Name`, `Picture`, `MobileNumber`, `Address`, `City`, `RegDate`) VALUES
(2, 'Maid', 'Mala', 'maid1.jpg', 9876543210, '201,Anna Nagar,Thindal', 'Erode', '2022-05-02 04:42:21'),
(3, 'Maid', 'Ananth', 'maid2.jpg', 8976543210, '7,Sakthi Apparment,Palayapalayam', 'Erode', '2022-05-02 04:42:59'),
(4, 'Driver', 'Rana', 'driver1.jpg', 7894561230, '2/5,Lakshmi Nagar,Chithode', 'Erode', '2022-05-02 04:42:58'),
(5, 'Driver', 'Das', 'driver2.jpg', 8787446464, '789 Laxmi Appartment Erode', 'Erode', '2022-05-02 04:42:46'),
(6, 'Driver', 'Harish', 'driver3.jpg', 6543486465, '102,Ashok Colony,Palayapalayam', 'Erode', '2022-05-02 04:42:23'),
(7, 'Cook', 'Malathi', 'cook1.jpg', 6654489748, '22/1,Bharathiyar street,Thindal,', 'Erode', '2022-05-02 04:42:13'),
(8, 'Cook', 'Kayal', 'cook2.jpg', 7736546546, '900,St Guru Street,GH', 'Erode', '2022-05-02 04:42:57'),
(9, 'Milkman', 'Mani', 'milk1.jpg', 6647897654, '99,Thiru Colony', 'Erode', '2022-05-02 04:42:08'),
(10, 'Milkman', 'Raju', 'milk2.jpg', 8954421214, 'Nadhan Nagar,Gobi', 'Erode', '2022-05-02 04:42:01'),
(11, 'Paperboy', 'Vimal', 'paper1.jpg', 6897979798, '345/6,Das colony,Thindal', 'Erode', '2022-05-02 04:42:02'),
(12, 'Car Cleaner', 'Hari', 'car1.jpg', 9656565656, '44,Ram Nagar,Perundurai', 'Erode', '2022-05-02 04:42:59'),
(13, 'Nanny', 'Jasmin', 'nanny1.jpg', 9358346873, '309,Kala Appartments,Collector office ', 'Erode', '2022-05-02 04:42:55'),
(14, 'Tuition Teacher', 'Jaya', 'teacher1.jpg', 6715486742, '90,Anna Street,Thindal', 'Erode', '2022-05-02 04:42:07'),
(15, 'Tuition Teacher', 'Karthi', 'teacher2.png', 7855646878, '98,Tharun Apparments,Perundurai', 'Erode', '2022-05-02 04:42:48'),
(18, 'Gym Instructor', 'John', 'gym1.jpg', 6898744574, '67,Anna Nagar,Palayapalayam', 'Erode', '2022-05-02 04:42:15'),
(19, 'Gym Instructor', 'Latha', 'gym2.jpg', 7589732687, '880,Teachers Colony', 'Erode', '2022-05-02 04:42:49'),
(20, 'Plumber', 'Guna', 'plumber1.jpg', 6723867278, '56,Teachers Colony', 'Erode', '2022-05-02 04:42:42'),
(21, 'Plumber', 'Govind', 'plumber2.jpg', 8989865496, '470,Ram Nagar,Perundurai', 'Erode', '2022-05-05 20:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(100) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<span style=\"font-weight: bold; color: rgb(106, 106, 106); font-family: arial, sans-serif; font-size: 14px;\">Local</span><span style=\"color: rgb(84, 84, 84); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;search is the use of specialized Internet&nbsp;</span><span style=\"font-weight: bold; color: rgb(106, 106, 106); font-family: arial, sans-serif; font-size: 14px;\">search engines</span><span style=\"color: rgb(84, 84, 84); font-family: arial, sans-serif; font-size: 14px;\">&nbsp;that allow users to submit geographically constrained searches against a structured database of&nbsp;</span><span style=\"font-weight: bold; color: rgb(106, 106, 106); font-family: arial, sans-serif; font-size: 14px;\">local business.</span><div><span style=\"font-weight: bold; color: rgb(106, 106, 106); font-family: arial, sans-serif; font-size: 14px;\">This is for testing.</span></div>', NULL, NULL, '2022-06-14 16:58:33'),
(2, 'contactus', 'Contact Us', 'D-204,Neru Nagar,Erode,Tamil Nadu-638012,India', 'service@gmail.com', 8529631478, '2022-06-14 16:58:57');


-- --------------------------------------------------------

--
-- Table structure for table `tblservice`
--

CREATE TABLE `tblservice` (
  `ID` int(10) NOT NULL,
  `Servicename` varchar(100) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblservice`
--

INSERT INTO `tblservice` (`ID`, `Servicename`,`CreationDate`) VALUES
(1, 'Maid' ,'2022-05-29 00:41:22'),
(2, 'Driver', '2022-05-30 05:41:18'),
(3, 'Cook',  '2022-05-30 05:41:27'),
(4, 'Milkman', '2022-05-30 05:41:36'),
(5, 'Paperboy', '2022-05-30 05:41:46'),
(6, 'Car Cleaner',  '2022-05-30 05:41:58'),
(7, 'Nanny', '2022-05-30 05:41:05'),
(8, 'Tuition Teacher', '2022-05-30 05:41:18'),
(9, 'Gym Instructor',  '2022-05-30 05:41:29'),
(10, 'Plumber', '2022-05-30 05:41:39');
-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Anvi', 9879878979, 'anvi@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-02-15 09:15:51'),
(2, 'hkjhkj', 4579878687, 'rewrewre@yutuy', '81dc9bdb52d04dc20036dbd8313ed055', '2024-02-15 09:16:44'),
(3, 'Reetu Singh', 5465465464, 'reetu@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-02-15 12:07:55'),
(4, 'John Doe', 1234569879, 'John@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-02-19 15:17:04'),
(5, 'Anuj Singh', 1236985211, 'akj@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2024-02-19 17:50:28');

--
-- Indexes for dumped tables
--

--




--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ServiceID` (`ServiceID`),
  ADD KEY `ServiceType` (`ServiceType`);




--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblServicetype`
--
ALTER TABLE `tblServicetype`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Category` (`Category`),
  ADD KEY `Category_2` (`Category`);


--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservice`
--
ALTER TABLE `tblservice`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbleventtype`
--
ALTER TABLE `tblServicetype`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservice`
--
ALTER TABLE `tblservice`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--

--
-- Constraints for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD CONSTRAINT `serivdi` FOREIGN KEY (`ServiceID`) REFERENCES `tblservice` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
