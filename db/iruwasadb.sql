-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2020 at 01:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iruwasadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) DEFAULT NULL,
  `AdminEmail` varchar(120) DEFAULT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `FullName`, `AdminEmail`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'Mussa Madata', 'mussamadata1997@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2020-08-06 05:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) UNSIGNED NOT NULL,
  `Mobile` varchar(200) DEFAULT NULL,
  `Category` varchar(200) DEFAULT NULL,
  `Description` varchar(200) DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `approval` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Mobile`, `Category`, `Description`, `cdate`, `approval`) VALUES
(2, '0757732297', 'Maji', 'Habari', '2020-09-25', 'Allowed');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `imagename` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `title`, `imagename`, `time`) VALUES
(8, '7625050631', 'iruwasa011138.jpeg', '2020-09-23 22:11:38'),
(9, '7625050631', 'iruwasa011443.jpeg', '2020-09-23 22:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `newmeter`
--

CREATE TABLE `newmeter` (
  `id` int(11) UNSIGNED NOT NULL,
  `NewMeter` varchar(40) DEFAULT NULL,
  `Resident` varchar(40) DEFAULT NULL,
  `Street` varchar(40) DEFAULT NULL,
  `OMeter` varchar(40) DEFAULT NULL,
  `Landlord` varchar(40) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `HNumber` varchar(40) DEFAULT NULL,
  `Employee` varchar(40) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Mobile` varchar(40) DEFAULT NULL,
  `PNumber` varchar(40) DEFAULT NULL,
  `Installation` varchar(40) DEFAULT NULL,
  `Date` varchar(40) DEFAULT NULL,
  `Reason` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newmeter`
--

INSERT INTO `newmeter` (`id`, `NewMeter`, `Resident`, `Street`, `OMeter`, `Landlord`, `Address`, `HNumber`, `Employee`, `Email`, `Mobile`, `PNumber`, `Installation`, `Date`, `Reason`) VALUES
(1, '999671034', 'Gangilonga', 'Gangilonga B', '999826543', 'Mussa Madata', '789', 'Gangilonga 2020', 'Eng. Henga', 'mussamadata1997@gmail.com', '0757732297', 'iruwasa204060017', 'Complete', '2020-09-02', '');

-- --------------------------------------------------------

--
-- Table structure for table `reconnection`
--

CREATE TABLE `reconnection` (
  `id` int(11) UNSIGNED NOT NULL,
  `RNumber` varchar(40) DEFAULT NULL,
  `MNumber` varchar(40) DEFAULT NULL,
  `Service` varchar(40) DEFAULT NULL,
  `Resident` varchar(40) DEFAULT NULL,
  `Street` varchar(40) DEFAULT NULL,
  `HNumber` varchar(40) DEFAULT NULL,
  `FName` varchar(40) DEFAULT NULL,
  `Reason` varchar(40) DEFAULT NULL,
  `ADate` varchar(40) DEFAULT NULL,
  `Mode` varchar(40) DEFAULT NULL,
  `Phone` varchar(40) DEFAULT NULL,
  `PDate` varchar(40) DEFAULT NULL,
  `Term` varchar(40) DEFAULT NULL,
  `stat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reconnection`
--

INSERT INTO `reconnection` (`id`, `RNumber`, `MNumber`, `Service`, `Resident`, `Street`, `HNumber`, `FName`, `Reason`, `ADate`, `Mode`, `Phone`, `PDate`, `Term`, `stat`) VALUES
(6, '7625050631', '7625050631', 'Yes', 'Gangilonga', 'Gangilonga A', 'Gangilonga 2020', 'Mussa Madata', 'Bomba mbovu', '2020-09-15', 'Mpesa', '0757732297', '2020-09-09', 'Yes', 'Conform');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE `resident` (
  `id` int(11) NOT NULL,
  `ResidentName` varchar(150) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id`, `ResidentName`, `Status`, `CreationDate`, `UpdationDate`) VALUES
(10, 'Gangilonga', 1, '2020-07-27 05:01:04', '0000-00-00 00:00:00'),
(11, 'Ilala', 1, '2020-07-27 05:01:15', '0000-00-00 00:00:00'),
(12, 'Isakalilo', 1, '2020-07-27 05:01:28', '0000-00-00 00:00:00'),
(13, 'Kihesa', 1, '2020-07-27 05:01:38', '0000-00-00 00:00:00'),
(14, 'Kitanzini', 1, '2020-07-27 05:01:58', '0000-00-00 00:00:00'),
(15, 'Kitwiru', 1, '2020-07-27 05:02:13', '0000-00-00 00:00:00'),
(16, 'Kwakilosa', 1, '2020-07-27 05:02:27', '0000-00-00 00:00:00'),
(17, 'Makorongoni', 1, '2020-07-27 05:02:40', '0000-00-00 00:00:00'),
(18, 'Mivinjeni', 1, '2020-07-27 05:02:55', '0000-00-00 00:00:00'),
(19, 'Mkwawa', 1, '2020-07-27 05:03:06', '0000-00-00 00:00:00'),
(20, 'Mlandege', 1, '2020-07-27 05:03:17', '0000-00-00 00:00:00'),
(21, 'Mshindo', 1, '2020-07-27 05:03:27', '0000-00-00 00:00:00'),
(22, 'Mtwivila', 1, '2020-07-27 05:03:41', '0000-00-00 00:00:00'),
(23, 'Mwangata', 1, '2020-07-27 05:03:53', '0000-00-00 00:00:00'),
(24, 'Nduli', 1, '2020-07-27 05:04:05', '0000-00-00 00:00:00'),
(25, 'Ruaha', 1, '2020-07-27 05:04:15', '0000-00-00 00:00:00'),
(26, 'Idodi', 1, '2020-07-27 05:04:57', '0000-00-00 00:00:00'),
(27, 'Ifunda', 1, '2020-07-27 05:05:04', '0000-00-00 00:00:00'),
(28, 'Ilolo Mpya', 1, '2020-07-27 05:05:18', '0000-00-00 00:00:00'),
(29, 'Itunundu', 1, '2020-07-27 05:05:36', '0000-00-00 00:00:00'),
(30, 'Izazi', 1, '2020-07-27 05:05:45', '0000-00-00 00:00:00'),
(31, 'Kalenga', 1, '2020-07-27 05:05:55', '0000-00-00 00:00:00'),
(32, 'Kihorogota', 1, '2020-07-27 05:06:15', '0000-00-00 00:00:00'),
(33, 'Kiwere', 1, '2020-07-27 05:06:24', '0000-00-00 00:00:00'),
(34, 'Luhota', 1, '2020-07-27 05:06:37', '0000-00-00 00:00:00'),
(35, 'Lumuli', 1, '2020-07-27 05:06:51', '0000-00-00 00:00:00'),
(36, 'Lyamgungwe', 1, '2020-07-27 05:07:07', '0000-00-00 00:00:00'),
(37, 'Maboga', 1, '2020-07-27 05:07:17', '0000-00-00 00:00:00'),
(38, 'Maguliwa', 1, '2020-07-27 05:07:30', '0000-00-00 00:00:00'),
(39, 'Mahuninga', 1, '2020-07-27 05:07:44', '0000-00-00 00:00:00'),
(40, 'Malenga Makali', 1, '2020-07-27 05:07:56', '0000-00-00 00:00:00'),
(41, 'Mgama', 1, '2020-07-27 05:08:07', '0000-00-00 00:00:00'),
(42, 'Migoli', 1, '2020-07-27 05:08:18', '0000-00-00 00:00:00'),
(43, 'Mlenge', 1, '2020-07-27 05:08:27', '0000-00-00 00:00:00'),
(44, 'Mlowa', 1, '2020-07-27 05:08:35', '0000-00-00 00:00:00'),
(45, 'Mseke', 1, '2020-07-27 05:08:43', '0000-00-00 00:00:00'),
(46, 'Nduli Vijijini', 1, '2020-07-27 05:08:55', '0000-00-00 00:00:00'),
(47, 'Nyang\'oro', 1, '2020-07-27 05:09:10', '0000-00-00 00:00:00'),
(48, 'Nzihi', 1, '2020-07-27 05:09:21', '0000-00-00 00:00:00'),
(49, 'Ulanda', 1, '2020-07-27 05:09:29', '0000-00-00 00:00:00'),
(50, 'Wasa', 1, '2020-07-27 05:09:39', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `send`
--

CREATE TABLE `send` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `send`
--

INSERT INTO `send` (`id`, `title`, `subject`, `news`) VALUES
(1, 'Iruwasa', 'Pump', 'Sawa');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprovider`
--

CREATE TABLE `serviceprovider` (
  `id` int(11) NOT NULL,
  `ServiceProvider` varchar(159) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `serviceprovider`
--

INSERT INTO `serviceprovider` (`id`, `ServiceProvider`, `CreationDate`, `UpdationDate`) VALUES
(13, 'Iruwasa P.o Box 570. Iringa-Tanzania', '2020-07-27 05:17:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sewage`
--

CREATE TABLE `sewage` (
  `id` int(11) UNSIGNED NOT NULL,
  `RNumber` varchar(40) DEFAULT NULL,
  `Resident` varchar(40) DEFAULT NULL,
  `Street` varchar(40) DEFAULT NULL,
  `HNumber` varchar(40) DEFAULT NULL,
  `Owner` varchar(40) DEFAULT NULL,
  `NTrip` varchar(40) DEFAULT NULL,
  `TCost` varchar(40) DEFAULT NULL,
  `RCondition` varchar(40) DEFAULT NULL,
  `ADate` varchar(40) DEFAULT NULL,
  `Mode` varchar(40) DEFAULT NULL,
  `Phone` varchar(40) DEFAULT NULL,
  `PDate` varchar(40) DEFAULT NULL,
  `Term` varchar(40) DEFAULT NULL,
  `stat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sewage`
--

INSERT INTO `sewage` (`id`, `RNumber`, `Resident`, `Street`, `HNumber`, `Owner`, `NTrip`, `TCost`, `RCondition`, `ADate`, `Mode`, `Phone`, `PDate`, `Term`, `stat`) VALUES
(2, '7625050631', 'Gangilonga', 'Gangilonga A', 'Gangilonga 202', 'Mussa Madata', '2', '70000', 'Good', '2020-09-16', 'Mpesa', '0757732297', '2020-09-22', 'Yes', 'Not Conform');

-- --------------------------------------------------------

--
-- Table structure for table `tbcashier`
--

CREATE TABLE `tbcashier` (
  `id` int(11) NOT NULL,
  `FullName` varchar(255) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblappointment`
--

CREATE TABLE `tblappointment` (
  `ID` int(10) NOT NULL,
  `AptNumber` varchar(80) DEFAULT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `PhoneNumber` bigint(11) DEFAULT NULL,
  `AptDate` varchar(120) DEFAULT NULL,
  `AptTime` varchar(120) DEFAULT NULL,
  `Services` varchar(120) DEFAULT NULL,
  `ApplyDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `RemarkDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblappointment`
--

INSERT INTO `tblappointment` (`ID`, `AptNumber`, `Name`, `Email`, `PhoneNumber`, `AptDate`, `AptTime`, `Services`, `ApplyDate`, `Remark`, `Status`, `RemarkDate`) VALUES
(15, '762505063', 'Gangilonga', 'Gangilonga B', 757732297, '2020-09-16', '2020-07', 'Water Application', '2020-09-23 23:07:23', 'You have been accepted', '1', '2020-09-24 07:50:58'),
(16, '212232278', 'Ilala', 'Ilala Msikitini', 743139848, '2020-09-17', '2020-07', 'Water Reconnection', '2020-09-23 23:21:24', 'ok', '1', '2020-09-24 11:57:07'),
(17, '456990506', 'Gangilonga', 'Gangilonga B', 757732297, '2020-09-18', '2020-11', 'Water Application', '2020-09-24 07:29:06', '', '', '0000-00-00 00:00:00'),
(18, '286147902', 'Kihesa', 'Kihesa B', 757732297, '2020-09-23', '2020-09', 'Water Reconnection', '2020-09-24 11:23:44', 'Selected', '1', '2020-09-24 11:26:04'),
(19, '376627239', 'Ilala', 'Ilala Msikitini', 757732297, '2020-09-24', '2020-09', 'Water Reconnection', '2020-09-24 11:54:17', '', '', '0000-00-00 00:00:00'),
(20, '717090844', 'Kitanzini', 'Kitanzani juu', 757732297, '2020-09-24', '2020-09', 'Water Application', '2020-09-24 12:18:40', 'ok', '1', '2020-09-24 12:26:07'),
(21, '102047628', 'Kwakilosa', 'kwilosa B', 757732297, '2020-09-10', '2020-02', 'Water Reconnection', '2020-09-25 18:46:04', 'ok', '1', '2020-09-25 18:47:53'),
(22, '482528998', 'Ilala', 'Ilala mjini', 757732297, '2020-09-08', '2020-06', 'Water Application', '2020-09-26 10:26:59', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomers`
--

CREATE TABLE `tblcustomers` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Service` varchar(200) DEFAULT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Resident` varchar(255) DEFAULT NULL,
  `Details` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomers`
--

INSERT INTO `tblcustomers` (`ID`, `Name`, `Service`, `Date`, `Resident`, `Details`, `CreationDate`, `UpdationDate`) VALUES
(10, 'Mussa', 'Water Application', '2020-09-16', 'Gangilonga', 'Naomba huduma ', '2020-09-23 23:12:34', NULL),
(11, 'lamson', 'Water Reconnection', '2020-09-09', 'Kihesa', 'Naomba mifungiwe bomba', '2020-09-24 11:27:28', NULL),
(12, 'madata ', 'Water Application', '2020-09-18', 'Kwakilosa', 'Naomba huduma maji\r\n', '2020-09-25 18:47:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblinvoice`
--

CREATE TABLE `tblinvoice` (
  `id` int(11) NOT NULL,
  `Userid` int(11) DEFAULT NULL,
  `ServiceId` int(11) DEFAULT NULL,
  `BillingId` int(11) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblinvoice`
--

INSERT INTO `tblinvoice` (`id`, `Userid`, `ServiceId`, `BillingId`, `PostingDate`) VALUES
(27, 10, 17, 107472741, '2020-09-24 08:24:55'),
(28, 11, 18, 690513126, '2020-09-24 11:28:13'),
(29, 12, 18, 633856244, '2020-09-25 18:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL,
  `Timing` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`, `Timing`) VALUES
(1, 'aboutus', '', '		Mamulaka ya maji safi na salama IRUWASA inawatakia wateja wake uchanguzi mwema.', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tblservices`
--

CREATE TABLE `tblservices` (
  `ID` int(10) NOT NULL,
  `ServiceName` varchar(200) DEFAULT NULL,
  `Cost` int(10) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblservices`
--

INSERT INTO `tblservices` (`ID`, `ServiceName`, `Cost`, `CreationDate`) VALUES
(17, 'Water Application', 10000, '2020-09-23 23:06:15'),
(18, 'Water Reconnection', 10000, '2020-09-23 23:06:27'),
(19, 'Sewage Service', 10000, '2020-09-23 23:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) DEFAULT NULL,
  `comment` varchar(200) NOT NULL,
  `comment_sender_name` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `parent_comment_id`, `comment`, `comment_sender_name`, `date`) VALUES
(36, 0, '  Habari za mchana?', 'Mussa Madata', '2020-09-24 09:46:45'),
(37, 36, 'Nzuri sna', 'Richard Limo', '2020-09-24 09:47:04'),
(38, 0, '  Bomba limekatika naomba msaada', 'Lamson', '2020-09-24 10:59:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbmeter`
--

CREATE TABLE `tbmeter` (
  `id` int(11) UNSIGNED NOT NULL,
  `INumber` varchar(40) DEFAULT NULL,
  `Resident` varchar(40) DEFAULT NULL,
  `Street` varchar(40) DEFAULT NULL,
  `Reference` varchar(40) DEFAULT NULL,
  `Landlord` varchar(255) DEFAULT NULL,
  `Address` varchar(40) DEFAULT NULL,
  `HNumber` varchar(40) DEFAULT NULL,
  `Employee` varchar(40) DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Mobile` varchar(40) DEFAULT NULL,
  `NPipe` varchar(40) DEFAULT NULL,
  `Installation` varchar(40) DEFAULT NULL,
  `Date` varchar(40) DEFAULT NULL,
  `Reason` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmeter`
--

INSERT INTO `tbmeter` (`id`, `INumber`, `Resident`, `Street`, `Reference`, `Landlord`, `Address`, `HNumber`, `Employee`, `Email`, `Mobile`, `NPipe`, `Installation`, `Date`, `Reason`) VALUES
(1, '999826543', 'Ilala', 'Ilala Msikitini', '762505063', 'Mussa Madata', '774', 'ilala 930', 'Eng. Henga', 'henga@gmail.com', '0757732297', 'iruwasa204060017', 'Complete', '2020-09-23', ''),
(2, '999488350', 'Isakalilo', 'kwilosa B', '212232278', 'Juma Ali', '789', 'kwakilosa', 'Eng. Henga', 'henga@gmail.com', '0757732297', 'iruwasa20406001009', 'Complete', '2020-09-23', ''),
(3, '2630176482', 'Ilala', 'Gangilonga B', '212232278', 'Mussa Madata', 'Kihesa', 'Gangilonga 2020', 'Eng. Henga', 'henga@gmail.com', '0757732297', 'iruwasa20406001009', 'Complete', '2020-10-02', ''),
(4, '1390183858', 'Isakalilo', 'Ilala Msikitini', '212232278', 'Mussa Madata', 'Kihesa', 'Khesa', 'Eng. Henga', 'mussamadata1997@gmail.com', '0757732297', 'iruwasa204060017', 'Complete', '2020-09-17', ''),
(5, '', 'Ilala', 'Gangilonga B', '376627239', 'Mussa Madata', 'Kihesa', 'Khesa', 'Eng. Henga', 'mussamadata1997@gmail.com', '0757732297', 'iruwasa20406001009', 'Complete', '2020-09-30', ''),
(6, '', 'Ilala', 'Ilala Msikitini', '286147902', 'Juma Ali', 'Kihesa', 'Khesa', 'Eng. Henga', 'mussamadata1997@gmail.com', '0757732297', 'iruwasa20406001009', 'Complete', '2020-10-02', ''),
(7, '236065635', 'Kihesa', 'Ilala Msikitini', '456990506', 'Mussa Madata', 'Kihesa', 'Khesa', 'Eng. Henga', 'mussamadata1997@gmail.com', '0757732297', 'iruwasa20406001009', 'Complete', '2020-09-17', ''),
(8, '999001409', 'Gangilonga', 'Gangilonga B', '212232278', 'Mussa Madata', '400', 'Khesa', 'Eng. Henga', 'canzalo@gmail.com', '0757732297', 'iruwasa204060017', 'Complete', '2020-09-24', ''),
(9, '999378892', 'Ilala', 'Gangilonga B', '762505063', 'Mussa Madata', 'Kihesa', 'Gangilonga 2020', 'Eng. Henga', 'mussamadata1997@gmail.com', '0757732297', 'iruwasa20406001009', 'Complete', '2020-09-25', ''),
(10, '990000000', 'Isakalilo', 'Kihesa B', '717090844', 'Mussa Madata', 'Kihesa', 'Gangilonga 202', 'Eng. Henga', 'mussamadata1997@gmail.com', '0757732297', 'iruwasa20406001009', 'Complete', '2020-09-17', ''),
(11, '990000000', 'Ilala', 'Gangilonga B', '762505063', 'Mussa Madata', 'Kihesa', 'Khesa', 'Eng. Henga', 'mussamadata1997@gmail.com', '0757732297', 'iruwasa20406001009', 'Complete', '2020-09-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `UserId` varchar(100) DEFAULT NULL,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `MobileNumber` char(11) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `Status` int(1) DEFAULT NULL,
  `RegistrationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `UserId`, `FullName`, `EmailId`, `MobileNumber`, `Password`, `Status`, `RegistrationDate`, `UpdationDate`) VALUES
(52, 'iruwasa/2020/0001', 'Mussa  Madata', 'mussa2020@gmail.com', '0757732297', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:41:23', NULL),
(53, 'iruwasa/2020/0002', 'Lamson Mwahalende', 'lamson2020@gmail.com', '0743139848', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:42:09', NULL),
(54, 'iruwasa/2020/0003', 'Ashraf Hudungu', 'ashraf2020@gmail.com', '0734139848', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:43:21', NULL),
(55, 'iruwasa/2020/0004', 'Henga Matongo', 'henga2020@gmail.com', '0742118982', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:44:39', NULL),
(56, 'iruwasa/2020/0005', 'Maadam Amina', 'amina2020@gmail.com', '0744109087', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:45:20', NULL),
(57, 'iruwasa/2020/0006', 'Kamba Mohammed', 'kamba2020@gmail.com', '0740408989', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:46:08', NULL),
(58, 'iruwasa/2020/0007', 'Madata Shiganga', 'madata2020@gmail.com', '0755344609', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:46:43', NULL),
(59, 'iruwasa/2020/0008', 'Juma shiganga', 'juma2020@gmail.com', '0752344609', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:47:33', NULL),
(60, 'iruwasa/2020/0009', 'Kashindye Madata', 'kashindye2020@gmail.com', '0750304090', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:48:27', NULL),
(61, 'iruwasa/2020/0010', 'Charles Madata', 'charles2020@gmail.com', '0751334980', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:49:47', NULL),
(62, 'iruwasa/2020/0011', 'Andrew Nyenza', 'andrew2020@gmail.com', '0753536670', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:50:31', NULL),
(63, 'iruwasa/2020/0012', 'Gabriel Antipas', 'gabriel2020@gmail.com', '0730303949', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:51:28', NULL),
(64, 'iruwasa/2020/0013', 'Mary Madata', 'mary2020@gmail.com', '0759595709', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:52:47', NULL),
(65, 'iruwasa/2020/0014', 'Shemaya Madata', 'shemaya2020@gmail.com', '0757702297', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:53:53', NULL),
(66, 'iruwasa/2020/0015', 'Juma Nyerere', 'nyerere2020@gmail.com', '0770704090', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:54:42', NULL),
(67, 'iruwasa/2020/0016', 'John Sospeter', 'john2020@gmail.com', '0743439070', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:55:35', NULL),
(68, 'iruwasa/2020/0017', 'Mr Kitinya', 'kitinya2020@gmail.com', '0742424200', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:56:26', NULL),
(69, 'iruwasa/2020/0018', 'Mr Masenya', 'masenya2020@gmail.com', '0720202040', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:57:12', NULL),
(70, 'iruwasa/2020/0019', 'Maadam Gilitu', 'gilitu2020@gmail.com', '0711120290', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:58:00', NULL),
(71, 'iruwasa/2020/0020', 'Maadam Neema', 'neema2020@gmail.com', '0711010100', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:58:44', NULL),
(72, 'iruwasa/2020/0021', 'Mr Shidende', 'shidende2020@gmail.com', '0790909020', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 22:59:26', NULL),
(73, 'iruwasa/2020/0022', 'Maadam Saraha', 'saraha2020@gmail.com', '0780808080', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 23:00:14', NULL),
(74, 'iruwasa/2020/0023', 'Maadam Johari', 'johari2020@gmail.com', '0770707090', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 23:00:58', NULL),
(75, 'iruwasa/2020/0024', 'Mr Rutta', 'rutta2020@gmail.com', '0752528890', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 23:01:42', NULL),
(76, 'iruwasa/2020/0025', 'Mr Logatho', 'logatho2020@gmail.com', '0751515151', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 23:02:39', NULL),
(77, 'iruwasa/2020/0026', 'Mr Mwangosi', 'mwagosi2020@gmail.com', '0700000000', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 23:04:12', NULL),
(78, 'iruwasa/2020/0027', 'Mama', 'mama2020@gmail.com', '0762864230', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-23 23:04:48', NULL),
(79, 'iruwasa/2020/0028', 'Lamson Mwahalende', 'lasmon@gmail.com', '0743171348', '81dc9bdb52d04dc20036dbd8313ed055', 1, '2020-09-24 11:38:43', NULL),
(80, 'iruwasa/2020/0029', 'Amina Abubakari', 'amina@gmail.com', '0754545454', 'e10adc3949ba59abbe56e057f20f883e', 1, '2020-09-24 12:08:54', NULL),
(81, 'iruwasa/2020/0030', 'Mussa Madata', 'mussamadata1997@gmail.com', '0757732297', '11538ac3b0f2714d266c9d777b9e5fb5', 1, '2020-09-25 18:29:22', '2020-09-25 18:30:06');

-- --------------------------------------------------------

--
-- Table structure for table `water`
--

CREATE TABLE `water` (
  `id` int(15) NOT NULL,
  `RNumber` varchar(40) DEFAULT NULL,
  `Service` varchar(40) DEFAULT NULL,
  `Capacity` varchar(40) DEFAULT NULL,
  `SWater` varchar(40) DEFAULT NULL,
  `PMode` varchar(40) DEFAULT NULL,
  `Phone` varchar(40) DEFAULT NULL,
  `Pay` varchar(40) DEFAULT NULL,
  `Street` varchar(40) DEFAULT NULL,
  `HNumber` varchar(40) DEFAULT NULL,
  `FName` varchar(40) DEFAULT NULL,
  `Job` varchar(40) DEFAULT NULL,
  `Age` varchar(40) DEFAULT NULL,
  `Term` varchar(40) DEFAULT NULL,
  `stat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `water`
--

INSERT INTO `water` (`id`, `RNumber`, `Service`, `Capacity`, `SWater`, `PMode`, `Phone`, `Pay`, `Street`, `HNumber`, `FName`, `Job`, `Age`, `Term`, `stat`) VALUES
(6, '7625050631', 'Water Application', '10 L', 'Domestic use', 'Mpesa', '0757732297', '2020-09-09', 'Gangilonga A', 'Gangilonga 202', 'Mussa Madata', 'Farmer', '23', '', 'Conform');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newmeter`
--
ALTER TABLE `newmeter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reconnection`
--
ALTER TABLE `reconnection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `send`
--
ALTER TABLE `send`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewage`
--
ALTER TABLE `sewage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbcashier`
--
ALTER TABLE `tbcashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblappointment`
--
ALTER TABLE `tblappointment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblservices`
--
ALTER TABLE `tblservices`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbmeter`
--
ALTER TABLE `tbmeter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserId` (`UserId`);

--
-- Indexes for table `water`
--
ALTER TABLE `water`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newmeter`
--
ALTER TABLE `newmeter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reconnection`
--
ALTER TABLE `reconnection`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `send`
--
ALTER TABLE `send`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `serviceprovider`
--
ALTER TABLE `serviceprovider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sewage`
--
ALTER TABLE `sewage`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbcashier`
--
ALTER TABLE `tbcashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblappointment`
--
ALTER TABLE `tblappointment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tblcustomers`
--
ALTER TABLE `tblcustomers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblinvoice`
--
ALTER TABLE `tblinvoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblservices`
--
ALTER TABLE `tblservices`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tbmeter`
--
ALTER TABLE `tbmeter`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `water`
--
ALTER TABLE `water`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
