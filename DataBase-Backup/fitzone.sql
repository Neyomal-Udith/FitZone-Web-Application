-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2025 at 08:33 AM
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
-- Database: `fitzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(50) NOT NULL,
  `AdminEmail` varchar(100) NOT NULL,
  `AdminPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `AdminEmail`, `AdminPassword`) VALUES
(1, 'admin@gmail.com', 'Admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `AppointmentID` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NearTown` varchar(50) NOT NULL,
  `Contact` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` varchar(20) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`AppointmentID`, `Name`, `Email`, `NearTown`, `Contact`, `Date`, `Time`, `Status`) VALUES
(7, 'Ganguli Chalakshana', 'ganguli@gmail.com', 'Digana', '0715368650', '2025-03-26', '9:00am-11:00am', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(50) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `CustomerEmail` varchar(100) NOT NULL,
  `CustomerContact` varchar(100) NOT NULL,
  `CustomerPassword` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `CustomerEmail`, `CustomerContact`, `CustomerPassword`, `Address`) VALUES
(22, 'Ganguli Chalakshana', 'ganguli@gmail.com', '0715368650', 'ganguli1234', '12, A warathanna, thennekumbura'),
(23, 'Neyomal Udith', 'neyomaludith@gmail.com', '0715368650', 'neyomal1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(17, 'Imalka Vidith', 'imalka@gmail.com', 'test', 'test1234');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Contact` varchar(20) NOT NULL,
  `Delivery address` varchar(200) NOT NULL,
  `Postal` varchar(50) NOT NULL,
  `TotalPrice` varchar(100) NOT NULL,
  `Proof` varchar(200) NOT NULL,
  `Status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `Email`, `Name`, `Contact`, `Delivery address`, `Postal`, `TotalPrice`, `Proof`, `Status`) VALUES
(14, 'ganguli@gmail.com', 'TOTAL BODY', '0715368650', '12, A, warathanna, Thennekumbura', '20442', '8000', 'plan01.png', 'Paid');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(50) NOT NULL,
  `ProductImage` varchar(100) NOT NULL,
  `ProductName` varchar(100) NOT NULL,
  `ProductDes` varchar(200) NOT NULL,
  `ProductPrice` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductImage`, `ProductName`, `ProductDes`, `ProductPrice`) VALUES
(21, 'plan01.png', 'Basic Fit', 'Monthly renewal : Access to basic weight machines and free weights.\r\nLocker room access.\r\nAccess during standard gym hours.', '5000'),
(22, 'plan02.png', 'Total body', '03 months of : Unlimited access to all gym equipment\r\nOne free personal training session per month (30 minutes).\r\nAccess to group fitness classes ', '8000'),
(23, 'plan03.png', 'Elite', '06 months of :Priority booking for classes and personal training.\r\nAccess to the gym 24/7 \r\nAccess to the premium locker room', '15000'),
(24, 'plan04.png', 'Ultra Elite', '01 year of :\r\nGuest Passes\r\nPremium Locker Room\r\nPriority Booking\r\nExclusive Events', '30000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`AppointmentID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `AppointmentID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
