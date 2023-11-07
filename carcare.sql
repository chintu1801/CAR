-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 10, 2021 at 12:49 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carcare`
--
CREATE DATABASE IF NOT EXISTS `carcare` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carcare`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_code` text NOT NULL,
  `category_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_code`, `category_name`) VALUES
('C101', 'Engineer'),
('C102', 'Technician'),
('C103', 'User'),
('C104', 'Customer'),
('C105', 'Clerk');

-- --------------------------------------------------------

--
-- Table structure for table `complainmaster`
--

CREATE TABLE IF NOT EXISTS `complainmaster` (
  `Complain_Id` int(11) NOT NULL,
  `Complain_Des` text NOT NULL,
  `Bay_No` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complainmaster`
--

INSERT INTO `complainmaster` (`Complain_Id`, `Complain_Des`, `Bay_No`) VALUES
(101, 'Washing & Cleaning', 1),
(102, 'Oil Change', 2),
(103, 'Light Problem', 2),
(104, 'Engine Problem', 3),
(105, 'Spark Problem(Plug)', 2),
(106, 'Startup Problem', 3),
(107, 'Body Coork', 3),
(108, 'Alignment & Balancing', 1),
(109, 'Coolant Problem', 2),
(110, 'Radiator Problem', 3),
(111, 'Plugs & Fuses', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer_mast`
--

CREATE TABLE IF NOT EXISTS `customer_mast` (
  `Customer_ID` text NOT NULL,
  `Customer_Name` text NOT NULL,
  `Customer_Address` text NOT NULL,
  `Customer_mobile_No` bigint(20) NOT NULL,
  `Customer_Email` text NOT NULL,
  `Customer_Vehicle_No` text NOT NULL,
  `Customer_Vehicle_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_mast`
--

INSERT INTO `customer_mast` (`Customer_ID`, `Customer_Name`, `Customer_Address`, `Customer_mobile_No`, `Customer_Email`, `Customer_Vehicle_No`, `Customer_Vehicle_Name`) VALUES
('C101', 'Ayaan Malik', 'Bhaili,Vadodara', 9875642553, 'ayaan@gmail.com', 'GJ06AA2255', 'Honda Civic'),
('C102', 'Mansi Dangi', 'Manjalpur,Vadodara', 8989752556, 'mansi@gmail.com', 'GJ06MD4455', 'Suzuki Swift'),
('C103', 'Khushi Parmar', 'Ranoli,Vadodara', 9638766147, 'khushi123@gmail.com', 'GJ06SP6992', 'Maruti Suzuki ERTIGA');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `EmpId` text NOT NULL,
  `EmpName` text NOT NULL,
  `EmpCategoryCode` text NOT NULL,
  `EmpCategoryName` text NOT NULL,
  `EmpAddress` text NOT NULL,
  `EmpCity` text NOT NULL,
  `EmpState` text NOT NULL,
  `EmpPincode` int(11) NOT NULL,
  `EmpGender` text NOT NULL,
  `EmpEmailId` text NOT NULL,
  `EmpLicenseNo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpId`, `EmpName`, `EmpCategoryCode`, `EmpCategoryName`, `EmpAddress`, `EmpCity`, `EmpState`, `EmpPincode`, `EmpGender`, `EmpEmailId`, `EmpLicenseNo`) VALUES
('E101', 'Jigar Vankar', 'C101', 'ZZZZZ', '8/9 Swati Society,New Sama Road,Vadodara.', 'Vadodara', 'Gujarat', 390008, 'Male', 'jigs1011@gmail.com', 'GJ06BRD0004569'),
('E102', 'Vishal Parmar', 'C102', 'Technician', 'B-9 Giriraj Socity,Chhani,VAdodara.', 'Vadodara', 'Gujarat', 390024, 'Male', 'vishu2512@gmail.com', 'GJ06BRD0003689'),
('E103', 'Arman Malik', 'C103', 'User', 'A-5 Jayesh Colony,Fatehgunj,VAdodara.', 'Vadodara', 'Gujarat', 390002, 'Male', 'armanmalik@gmail.com', 'GJ06BRD0004459'),
('E104', 'Shiv Ray', 'C105', 'Clerk', 'A-2 Bakti Nagar,Makarpura,VAdodara.', 'Vadodara', 'Gujarat', 390010, 'Male', 'shivray05@gmail.com', 'GJ06BRD0002535'),
('E105', 'Khushi', 'C102', 'Technician', 'Ranoli,vadodara', 'vadodara', 'Gujarat', 390020, 'Female', 'khushi@gmail.com', 'GJ06BRD00456');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `Invoice_no` int(11) NOT NULL,
  `Invoice_date` date NOT NULL,
  `Job_cardno` text NOT NULL,
  `Customer_name` text NOT NULL,
  `Customer_address` text NOT NULL,
  `Mobile_no` bigint(20) NOT NULL,
  `Vehicle_name` text NOT NULL,
  `Kms` int(11) NOT NULL,
  `Vehicle_no` text NOT NULL,
  `Model_name` text NOT NULL,
  `Total_parts` int(11) NOT NULL,
  `Total_labour` int(11) NOT NULL,
  `Gst_amount` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Net_bill_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`Invoice_no`, `Invoice_date`, `Job_cardno`, `Customer_name`, `Customer_address`, `Mobile_no`, `Vehicle_name`, `Kms`, `Vehicle_no`, `Model_name`, `Total_parts`, `Total_labour`, `Gst_amount`, `Discount`, `Net_bill_amount`) VALUES
(1, '2020-12-08', 'J001', 'Ayaan Mailk', 'Bhaili,Vadodara', 9858867420, 'Swift', 233, 'GJ06AK2255', 'Maruti ', 45, 650, 5, 10, 690),
(13, '2021-07-08', 'J001', 'Ayaan Mailk', 'Bhaili,Vadodara', 9858867420, 'Swift', 233, 'GJ06AK2255', 'Maruti ', 45, 940, 135, 50, 1070);

-- --------------------------------------------------------

--
-- Table structure for table `item_issue`
--

CREATE TABLE IF NOT EXISTS `item_issue` (
  `I_No` int(11) NOT NULL,
  `I_Code` text NOT NULL,
  `Issue_Iname` text NOT NULL,
  `jobcardno` text NOT NULL,
  `Issue_Unit_Meansure` text NOT NULL,
  `Issue_Qty` int(11) NOT NULL,
  `Issue_Rate` int(11) NOT NULL,
  `Issue_Value` int(11) NOT NULL,
  `Warranty_Year` text NOT NULL,
  `IssueDate` date NOT NULL,
  PRIMARY KEY (`I_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_issue`
--

INSERT INTO `item_issue` (`I_No`, `I_Code`, `Issue_Iname`, `jobcardno`, `Issue_Unit_Meansure`, `Issue_Qty`, `Issue_Rate`, `Issue_Value`, `Warranty_Year`, `IssueDate`) VALUES
(1, 'I102', 'Bulbs', 'J001', 'NO', 1, 50, 50, '1', '2020-12-08'),
(2, 'I101', 'Plugs', 'J001', 'NO', 1, 50, 50, '1', '2020-12-08'),
(3, 'I111', 'Coolant', 'J001', 'LTR', 1, 300, 200, '1 ', '2020-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `item_master`
--

CREATE TABLE IF NOT EXISTS `item_master` (
  `I_code` text NOT NULL,
  `I_name` text NOT NULL,
  `abc_code` text NOT NULL,
  `Unit_meansure` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Gts_rate` int(11) NOT NULL,
  `Gst_amount` int(11) NOT NULL,
  `Mini_level` int(11) NOT NULL,
  `Max_level` int(11) NOT NULL,
  `War_gu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_master`
--

INSERT INTO `item_master` (`I_code`, `I_name`, `abc_code`, `Unit_meansure`, `Quantity`, `Rate`, `Value`, `Gts_rate`, `Gst_amount`, `Mini_level`, `Max_level`, `War_gu`) VALUES
('I101', 'Bulbs', 'A', 'NO', 60, 50, 2500, 10, 250, 10, 100, '1 '),
('I102', 'Plugs', 'A', 'NO', 30, 50, 1000, 10, 100, 10, 100, '1 '),
('I103', 'Engine Oil', 'A', 'LTR', 60, 300, 15000, 10, 1500, 10, 100, '1 '),
('I104', 'Gear Oil', 'A', 'LTR', 60, 300, 15000, 10, 1500, 10, 100, '1 '),
('I105', 'Brake Oil', 'A', 'LTR', 60, 300, 15000, 10, 1500, 10, 100, '1 '),
('I106', 'Glass', 'B', 'NO', 20, 1000, 10000, 10, 1000, 5, 10, '1 '),
('I107', 'Gear Cable', 'B', 'SET', 60, 150, 7500, 10, 750, 5, 10, '1 '),
('I108', 'Clutch Cable', 'B', 'SET', 60, 150, 7500, 10, 750, 5, 10, '1 '),
('I109', 'Radiator', 'C', 'SET', 15, 3000, 15000, 10, 1500, 2, 5, '1 '),
('I110', 'Battery', 'C', 'SET', 15, 2500, 12500, 10, 1250, 2, 5, '1 '),
('I111', 'Coolant', 'A', 'LTR', 30, 300, 6000, 10, 600, 10, 50, '1 ');

-- --------------------------------------------------------

--
-- Table structure for table `item_return`
--

CREATE TABLE IF NOT EXISTS `item_return` (
  `Receipt_Code` int(11) NOT NULL,
  `Return_Code` text NOT NULL,
  `Return_Name` text NOT NULL,
  `jobcardno` text NOT NULL,
  `Unit_Meansure` text NOT NULL,
  `Qty` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `Value` int(11) NOT NULL,
  `Warranty_Year` text NOT NULL,
  `Return_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_return`
--

INSERT INTO `item_return` (`Receipt_Code`, `Return_Code`, `Return_Name`, `jobcardno`, `Unit_Meansure`, `Qty`, `Rate`, `Value`, `Warranty_Year`, `Return_Date`) VALUES
(17, 'i117', 'plugs', '21', 'NO', 1, 50, 50, '1 year', '2020-12-04'),
(1, 'I102', 'Plugs', 'J001', 'NO', 1, 50, 50, '1', '2020-12-08'),
(3, 'I111', 'Coolant', 'J001', 'LTR', 1, 300, 200, '1 ', '2020-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `jobcart`
--

CREATE TABLE IF NOT EXISTS `jobcart` (
  `JobCart_No` text NOT NULL,
  `Customer_Id` text NOT NULL,
  `Customer_Name` text NOT NULL,
  `Customer_Address` text NOT NULL,
  `Mobile_No` bigint(20) NOT NULL,
  `Model_Name` text NOT NULL,
  `Vehicle_Name` text NOT NULL,
  `Vehicle_No` text NOT NULL,
  `JobCart_Date` date NOT NULL,
  `Fuel` int(11) NOT NULL,
  `Date_Time_In` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Date_Time_Out` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Job_Allocation` text NOT NULL,
  `Kms` int(11) NOT NULL,
  `Complain_Id` text NOT NULL,
  `Complain_Des` text NOT NULL,
  `Bay_No` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobcart`
--

INSERT INTO `jobcart` (`JobCart_No`, `Customer_Id`, `Customer_Name`, `Customer_Address`, `Mobile_No`, `Model_Name`, `Vehicle_Name`, `Vehicle_No`, `JobCart_Date`, `Fuel`, `Date_Time_In`, `Date_Time_Out`, `Job_Allocation`, `Kms`, `Complain_Id`, `Complain_Des`, `Bay_No`) VALUES
('J001', 'C001', 'Ayaan Mailk', 'Bhaili,Vadodara', 9858867420, 'Maruti ', 'Swift', 'GJ06AK2255', '2020-12-08', 10, '2020-12-07 18:30:00', '2020-12-07 18:30:00', 'C102', 233, '101', 'Whasing', 1),
('J113', 'C102 ', 'Mansi Dangi', 'Manjalpur,Vadodara', 8989752556, 'Maruti', 'Suzuki Swift', 'GJ06MD4455', '2020-12-14', 35, '2020-12-13 18:30:00', '0000-00-00 00:00:00', 'TECHNICIAN', 2001, 'C101', 'Washing', 1),
('J103', 'C103 ', 'Khushi Parmar', 'Ranoli,Vadodara', 9638766147, 'Maruti', 'Maruti Suzuki ERTIGA', 'GJ06SP6992', '2020-12-17', 10, '2020-12-16 18:30:00', '0000-00-00 00:00:00', 'Technician', 2511, '102', 'Oil Change', 1),
('J105', 'C101 ', 'Ayaan Malik', 'Bhaili,Vadodara', 9875642553, 'city', 'Honda Civic', 'GJ06AA2255', '2020-12-14', 4546, '2020-12-13 18:30:00', '0000-00-00 00:00:00', 'Technician', 4546464, '101', 'Washing & Cleaning', 1);

-- --------------------------------------------------------

--
-- Table structure for table `labour_detail`
--

CREATE TABLE IF NOT EXISTS `labour_detail` (
  `labour_code` text NOT NULL,
  `labour_desc` text NOT NULL,
  `jobcard_no` text NOT NULL,
  `Charges` int(20) NOT NULL,
  `Tax` int(20) NOT NULL,
  `gst_amount` int(20) NOT NULL,
  `Discount` int(20) NOT NULL,
  `Total_Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labour_detail`
--

INSERT INTO `labour_detail` (`labour_code`, `labour_desc`, `jobcard_no`, `Charges`, `Tax`, `gst_amount`, `Discount`, `Total_Amount`) VALUES
('S001', '', 'J001', 200, 10, 10, 10, 200),
('S002', 'Oil Change', 'J001', 300, 10, 10, 10, 0),
('S002', 'Oil Change', 'J001', 300, 10, 10, 10, 300),
('S001', 'Washing & Cleaning', 'J001', 350, 10, 100, 10, 440);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `UserType` text NOT NULL,
  `UserName` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`UserType`, `UserName`, `Password`) VALUES
('User', 'fdgd', 'fdgdfg'),
('Admin', 'mansi', '123456'),
('Admin', 'ayan', '4545'),
('User', '', ''),
('User', '', ''),
('User', '', ''),
('User', '', ''),
('User', 'aaaa', '1234'),
('User', 'qqq', '123'),
('User', 'qqq', '123'),
('User', 'qqq', '123'),
('User', 'aaa', '1234'),
('User', 'aaa', '123'),
('User', 'aaa', '123'),
('User', 'aaa', '1234567'),
('User', 'Mansi', '123456789'),
('Admin', 'Mansi', '123456789'),
('Admin', 'Admin', '123456789'),
('Admin', 'Admin', '123456789'),
('User', 'User', '253614'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Admin', '123456789'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Admin', '123456789'),
('Admin', 'Admin', '123456789'),
('Admin', 'Mansi', '11111111'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', 'n222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Ayaan ', '2222222'),
('Admin', 'Mansi', '1111111'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Mansi', '1111111'),
('User', 'fdgdf', 'dfgdfggg'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('Admin', 'Mansi', '1111111'),
('Admin', 'Mansi', '1111111'),
('Admin', 'Mansi', '1111111'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('Admin', 'Mansi', '11111111'),
('User', 'Aayan', '2222222'),
('Admin', 'Mansi', '1111111'),
('User', 'Aayan', '2222222'),
('User', 'khushi', 'khushi123'),
('Admin', 'mansi', '1111111'),
('User', 'ayaan', '2222222'),
('User', 'ayyan', '2222222'),
('Admin', 'mansi', '1111111'),
('User', 'aayan', '222222'),
('User', 'aayan', '222222'),
('Admin', 'Mansi', '111111'),
('User', 'Aayan', '222222');

-- --------------------------------------------------------

--
-- Table structure for table `partsdetail`
--

CREATE TABLE IF NOT EXISTS `partsdetail` (
  `Job_No` text NOT NULL,
  `Part_Code` text NOT NULL,
  `Part_Name` text NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Rate` int(11) NOT NULL,
  `GST_Rate` int(11) NOT NULL,
  `GST_Amount` int(11) NOT NULL,
  `Discount` int(11) NOT NULL,
  `Billing_Type` text NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partsdetail`
--

INSERT INTO `partsdetail` (`Job_No`, `Part_Code`, `Part_Name`, `Quantity`, `Rate`, `GST_Rate`, `GST_Amount`, `Discount`, `Billing_Type`, `Amount`) VALUES
('J001', 'I101', 'Bulb', 1, 50, 10, 5, 10, 'Cash', 45);

-- --------------------------------------------------------

--
-- Table structure for table `purchaseorder`
--

CREATE TABLE IF NOT EXISTS `purchaseorder` (
  `PONo` int(11) NOT NULL,
  `PODt` date NOT NULL,
  `SuppCode` text NOT NULL,
  `SuppName` text NOT NULL,
  `SuppAdd` text NOT NULL,
  `GST` int(11) NOT NULL,
  `TIN` text NOT NULL,
  `Aadhar` text NOT NULL,
  `ItemCode` text NOT NULL,
  `Qty` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchaseorder`
--

INSERT INTO `purchaseorder` (`PONo`, `PODt`, `SuppCode`, `SuppName`, `SuppAdd`, `GST`, `TIN`, `Aadhar`, `ItemCode`, `Qty`, `Amount`) VALUES
(1, '2020-12-08', 'M001', 'Maruti Auto Parts', 'Main Road Nizampura,Vadodara', 10, 'TIN0612345', '25896741307', 'I102', 10, 1000),
(2, '2020-12-08', 'N001', 'Maruti Auto Parts', 'Harni  Main Road,Vadodara', 10, 'TIN06258695', '98657414253698', 'I101', 40, 2500),
(3, '2020-12-08', 'H001', 'Hundai Auto Parts', 'Main Road Chhani Jakatnaka,Vadodara.\r\n', 10, 'TIN06859665', '8579415263987', 'I109', -5, 15000),
(5, '2020-12-16', 'M001', 'Maruti Auto Parts', ' Main Road Nizampura,Vadodara', 10, 'Tin125025a', '123456789022', 'I101', 0, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `purchasereturn`
--

CREATE TABLE IF NOT EXISTS `purchasereturn` (
  `PurchaseReturnNo` int(10) NOT NULL,
  `PurchaseReturnDate` date NOT NULL,
  `SupplierCode` text NOT NULL,
  `SupplierName` text NOT NULL,
  `SupplierAddress` text NOT NULL,
  `GstRate` int(10) NOT NULL,
  `GstAmount` int(5) NOT NULL,
  `TinCode` text NOT NULL,
  `ItemCode` text NOT NULL,
  `ItemName` text NOT NULL,
  `UnitMeasure` text NOT NULL,
  `Quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchasereturn`
--

INSERT INTO `purchasereturn` (`PurchaseReturnNo`, `PurchaseReturnDate`, `SupplierCode`, `SupplierName`, `SupplierAddress`, `GstRate`, `GstAmount`, `TinCode`, `ItemCode`, `ItemName`, `UnitMeasure`, `Quantity`) VALUES
(2, '2020-12-09', 'N001', 'Nissan Auto Parts', 'Harni main road, vadodara', 10, 0, 'TIN06258695', 'I101', 'Bulbs', 'NO', 5),
(6, '2020-12-16', 'M001', 'Maruti Auto Parts', ' Main Road Nizampura,Vadodara', 10, 100, 'tin12525252a', 'I101', 'Bulb', 'NO', 50),
(12, '2020-12-16', 'N001', 'Nissan Auto Parts', ' Harni  Main Road,Vadodara', 10, 100, 'tin125252a', 'I101', 'Bulbs', 'NO', 10),
(12, '2020-12-16', 'N001', 'Nissan Auto Parts', ' Harni  Main Road,Vadodara', 10, 100, 'tin125252a', 'I101', 'Bulbs', 'NO', 20);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `Usertype` text NOT NULL,
  `Username` text NOT NULL,
  `MailId` text NOT NULL,
  `Password` text NOT NULL,
  `ConfirmPassword` text NOT NULL,
  `CatagoryName` text NOT NULL,
  `SecurityQuestion` varchar(100) NOT NULL,
  `SecurityAnswer` varchar(100) NOT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Usertype`, `Username`, `MailId`, `Password`, `ConfirmPassword`, `CatagoryName`, `SecurityQuestion`, `SecurityAnswer`, `Dob`) VALUES
('Admin', 'Mansi', 'mansi@gmail.com', '1111111', '1111111', 'Engineer', 'favourite game', 'cricket', '2020-12-09'),
('User', 'Aayan', 'aayan@gmail.com', '2222222', '2222222', 'Clerk', 'favourite game', 'cricket', '2020-12-06'),
('User', 'skr', 'srk@gmail.com', '1234567', '1234567', 'Engineer', 'What is your favourite festival?', 'eid', '2021-01-18'),
('User', 'khushi', 'khuhsikparmar2014', 'khushi123', 'khushi123', 'Engineer', 'What is your Paimary school name?', 'jai ambe ', '2021-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `servicemaster`
--

CREATE TABLE IF NOT EXISTS `servicemaster` (
  `Service_Code` text NOT NULL,
  `Service_Name` text NOT NULL,
  `Service_Type` text NOT NULL,
  `Service_Charge` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicemaster`
--

INSERT INTO `servicemaster` (`Service_Code`, `Service_Name`, `Service_Type`, `Service_Charge`) VALUES
('S001', 'Washing & Cleaning', 'Chagrgeable', 350),
('S002', 'Oil Change', 'Chagrgeable', 300),
('S003', 'Light Repairing', 'Chagrgeable', 100),
('S004', 'Brake Repairing', 'Chagrgeable', 50),
('S005', 'Alignment & Balancing', 'Chagrgeable', 250),
('S006', 'Engine Fitting', 'Chagrgeable', 2000),
('S007', ' Radiator Fitting', 'Chagrgeable', 100);

-- --------------------------------------------------------

--
-- Table structure for table `supplierbill`
--

CREATE TABLE IF NOT EXISTS `supplierbill` (
  `SupplierBill` int(5) NOT NULL,
  `BillDate` date NOT NULL,
  `SupplierCode` text NOT NULL,
  `SupplierName` text NOT NULL,
  `Gst` int(11) NOT NULL,
  `GstCode` text NOT NULL,
  `FreightCharges` int(11) NOT NULL,
  `Done` text NOT NULL,
  `PaymentMode` text NOT NULL,
  `Amount` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplierbill`
--

INSERT INTO `supplierbill` (`SupplierBill`, `BillDate`, `SupplierCode`, `SupplierName`, `Gst`, `GstCode`, `FreightCharges`, `Done`, `PaymentMode`, `Amount`, `TotalAmount`) VALUES
(1, '2020-12-08', 'H001', 'Hundai Auto Parts', 1500, 'GJ065485', 200, 'YES ', 'Cheque', 15000, 16700),
(2, '2020-12-16', 'M001', 'Maruti Auto Parts', 10, 'gjofgjfr', 10, 'Yes', 'Cash', 10000, 9000);

-- --------------------------------------------------------

--
-- Table structure for table `suppliermast`
--

CREATE TABLE IF NOT EXISTS `suppliermast` (
  `SupplierCode` text NOT NULL,
  `SupplierName` text NOT NULL,
  `SupplierAddress` text NOT NULL,
  `MobileNo` int(11) NOT NULL,
  `Email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliermast`
--

INSERT INTO `suppliermast` (`SupplierCode`, `SupplierName`, `SupplierAddress`, `MobileNo`, `Email`) VALUES
('M001', 'Maruti Auto Parts', ' Main Road Nizampura,Vadodara', 2147483647, 'marutiauto@gmail.com'),
('H001', 'Hundai Auto Parts', ' Main Road Chhani Jakatnaka,Vadodara', 2147483647, 'hundaiauto@gmail.com'),
('N001', 'Nissan Auto Parts', ' Harni  Main Road,Vadodara', 2147483647, 'nissanauto@gmail.com'),
('S001', 'Suzuki Auto Parts', 'Manjalpur Main Road,Vadodara', 2147483647, 'Suzakiauto@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
