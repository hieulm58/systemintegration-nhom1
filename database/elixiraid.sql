-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 01:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elixiraid`
--

-- --------------------------------------------------------

--
-- Table structure for table `advancecollection`
--

CREATE TABLE `advancecollection` (
  `advancecollectionid` int(11) NOT NULL,
  `inpatientdetailsid` int(11) DEFAULT NULL,
  `dateofadvance` date DEFAULT NULL,
  `advancepayed` int(11) DEFAULT NULL,
  `advanceinwords` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `authassignment`
--

CREATE TABLE `authassignment` (
  `itemname` varchar(64) NOT NULL,
  `userid` varchar(64) NOT NULL,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('Admin', '1', NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitem`
--

CREATE TABLE `authitem` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `bizrule` text,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('Admin', 2, NULL, NULL, 'N;'),
('Authenticated', 2, NULL, NULL, 'N;'),
('Guest', 2, NULL, NULL, 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `authitemchild`
--

CREATE TABLE `authitemchild` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bedavail`
--

CREATE TABLE `bedavail` (
  `bedavailid` int(11) NOT NULL,
  `hospitallocationid` int(11) DEFAULT NULL,
  `buildingfloorid` int(11) DEFAULT NULL,
  `roomtypeid` int(11) DEFAULT NULL,
  `bedtypeid` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bedtype`
--

CREATE TABLE `bedtype` (
  `bedtypeid` int(11) NOT NULL,
  `hospitalregisrationid` int(11) DEFAULT NULL,
  `bedtypename` varchar(35) DEFAULT NULL,
  `bedno` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bloodcount`
--

CREATE TABLE `bloodcount` (
  `bloodcountid` int(11) NOT NULL,
  `blooddonerid` int(11) DEFAULT NULL,
  `rbc` int(11) DEFAULT NULL,
  `wbc` int(11) DEFAULT NULL,
  `platelets` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blooddoner`
--

CREATE TABLE `blooddoner` (
  `blooddonerid` int(11) NOT NULL,
  `donationtypeid` int(11) DEFAULT NULL,
  `bloodtypeid` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `identity` varchar(25) DEFAULT NULL,
  `medicines` varchar(50) DEFAULT NULL,
  `bleedngproblems` varchar(15) DEFAULT NULL,
  `surgery` varchar(15) DEFAULT NULL,
  `asthma` varchar(15) DEFAULT NULL,
  `diabetes` varchar(15) DEFAULT NULL,
  `lastdonation` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bloodtest`
--

CREATE TABLE `bloodtest` (
  `bloodtestid` int(11) NOT NULL,
  `blooddonerid` int(11) DEFAULT NULL,
  `bp` varchar(15) DEFAULT NULL,
  `hiv` varchar(15) DEFAULT NULL,
  `hepb` varchar(15) DEFAULT NULL,
  `hepc` varchar(15) DEFAULT NULL,
  `mp` varchar(15) DEFAULT NULL,
  `vdri` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bloodtype`
--

CREATE TABLE `bloodtype` (
  `bloodtypeid` int(11) NOT NULL,
  `bloodtype` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buildingfloor`
--

CREATE TABLE `buildingfloor` (
  `buildingfloorid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `hospitallocationid` int(11) DEFAULT NULL,
  `floorccode` varchar(15) DEFAULT NULL,
  `floorname` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buildingfloor`
--

INSERT INTO `buildingfloor` (`buildingfloorid`, `hospitalregistrationid`, `hospitallocationid`, `floorccode`, `floorname`) VALUES
(1, 0, 1, '1', 'FirstFloor');

-- --------------------------------------------------------

--
-- Table structure for table `charges`
--

CREATE TABLE `charges` (
  `chargesid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `chargetype` varchar(25) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doctordesignation`
--

CREATE TABLE `doctordesignation` (
  `doctordesignationid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) NOT NULL,
  `designation` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctordesignation`
--

INSERT INTO `doctordesignation` (`doctordesignationid`, `hospitalregistrationid`, `designation`) VALUES
(1, 0, 'BVC');

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `doctordetailsid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `doctordesignationid` int(11) DEFAULT NULL,
  `doctorspecializationid` int(11) DEFAULT NULL,
  `doctorcode` varchar(11) DEFAULT NULL,
  `doctorname` varchar(30) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `contactno` int(11) DEFAULT NULL,
  `consultantfee` int(11) DEFAULT NULL,
  `drshift` varchar(20) NOT NULL,
  `dateofjoin` date NOT NULL,
  `photo` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`doctordetailsid`, `hospitalregistrationid`, `doctordesignationid`, `doctorspecializationid`, `doctorcode`, `doctorname`, `address`, `contactno`, `consultantfee`, `drshift`, `dateofjoin`, `photo`, `email`) VALUES
(1, 0, 1, 1, 'P', 'Phs', 'Vcao', 2147483647, 123213, 'Night shift', '2016-11-06', '', 'phs@doctor.com');

-- --------------------------------------------------------

--
-- Table structure for table `doctorspecialization`
--

CREATE TABLE `doctorspecialization` (
  `doctorspecializationid` int(11) NOT NULL,
  `specialization` varchar(45) DEFAULT NULL,
  `hospitalregistrationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorspecialization`
--

INSERT INTO `doctorspecialization` (`doctorspecializationid`, `specialization`, `hospitalregistrationid`) VALUES
(1, 'GG', 0);

-- --------------------------------------------------------

--
-- Table structure for table `donationtype`
--

CREATE TABLE `donationtype` (
  `donationtypeid` int(11) NOT NULL,
  `dontionname` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employeetype`
--

CREATE TABLE `employeetype` (
  `employeetypeid` int(11) NOT NULL,
  `employeetypename` varchar(45) DEFAULT NULL,
  `hospitalregistrationid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeetype`
--

INSERT INTO `employeetype` (`employeetypeid`, `employeetypename`, `hospitalregistrationid`) VALUES
(1, 'doctor', 1),
(2, 'patient', 1),
(3, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hospitaldepartment`
--

CREATE TABLE `hospitaldepartment` (
  `hospitaldepartmentid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `buildingfloorid` int(11) DEFAULT NULL,
  `departmentname` varchar(35) DEFAULT NULL,
  `headname` varchar(35) DEFAULT NULL,
  `headaddress` varchar(55) DEFAULT NULL,
  `contactnumber` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospitallocation`
--

CREATE TABLE `hospitallocation` (
  `hospitallocationid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `buidingname` varchar(30) DEFAULT NULL,
  `buildingcode` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitallocation`
--

INSERT INTO `hospitallocation` (`hospitallocationid`, `hospitalregistrationid`, `buidingname`, `buildingcode`) VALUES
(1, 0, 'G2', 'g2016');

-- --------------------------------------------------------

--
-- Table structure for table `hospitalregistration`
--

CREATE TABLE `hospitalregistration` (
  `hospitalregistrationid` int(11) NOT NULL,
  `hospitalname` varchar(50) DEFAULT NULL,
  `yearofestablishment` int(11) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `email` varchar(25) NOT NULL,
  `noofbuildings` int(11) DEFAULT NULL,
  `contactperson` varchar(45) DEFAULT NULL,
  `promotedby` varchar(45) DEFAULT NULL,
  `logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitalregistration`
--

INSERT INTO `hospitalregistration` (`hospitalregistrationid`, `hospitalname`, `yearofestablishment`, `state`, `country`, `address`, `fax`, `phone`, `email`, `noofbuildings`, `contactperson`, `promotedby`, `logo`) VALUES
(1, 'BV354', 1957, 'Ha Noi', 'Vietnam', 'Xuan thuy', '', '1234567890', 'bc4143@mail.com', 15, 'Hieu', 'Hieu', '');

-- --------------------------------------------------------

--
-- Table structure for table `icuotscheduling`
--

CREATE TABLE `icuotscheduling` (
  `icuotscheduling` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `buildingfloorid` int(11) DEFAULT NULL,
  `patientregistrationid` int(11) DEFAULT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `staffregistrationid` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` date DEFAULT NULL,
  `ecroom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inpatientbilling`
--

CREATE TABLE `inpatientbilling` (
  `inpatientbillingid` int(11) NOT NULL,
  `inpatientdetailsid` int(11) DEFAULT NULL,
  `billno` varchar(20) DEFAULT NULL,
  `billdate` date DEFAULT NULL,
  `dischargedate` date DEFAULT NULL,
  `generalcharges` int(11) DEFAULT NULL,
  `totalamount` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `netamount` int(11) DEFAULT NULL,
  `servicetax` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inpatientdetails`
--

CREATE TABLE `inpatientdetails` (
  `inpatientdetailsid` int(11) NOT NULL,
  `patientregistrationid` int(11) DEFAULT NULL,
  `bedtypeid` int(11) DEFAULT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `chargesid` int(11) DEFAULT NULL,
  `admitdate` int(11) DEFAULT NULL,
  `admittime` int(11) DEFAULT NULL,
  `concession` int(11) DEFAULT NULL,
  `modeofpayment` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `laboratorytest`
--

CREATE TABLE `laboratorytest` (
  `laboratorytestid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `hospitallocationid` int(11) DEFAULT NULL,
  `buildingfloorid` int(11) DEFAULT NULL,
  `typeoftest` varchar(25) DEFAULT NULL,
  `costoftest` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `labtestresult`
--

CREATE TABLE `labtestresult` (
  `labtestresultid` int(11) NOT NULL,
  `laboratorytestid` int(11) DEFAULT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `patientregistrationid` int(11) DEFAULT NULL,
  `testresult` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leavemanagement`
--

CREATE TABLE `leavemanagement` (
  `leavemanagementid` int(11) NOT NULL,
  `staffregistrationid` int(11) DEFAULT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `typeofleave` varchar(25) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outpatientbiling`
--

CREATE TABLE `outpatientbiling` (
  `outpatientbilingid` int(11) NOT NULL,
  `outpatientdetailsid` int(11) DEFAULT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `laboratorytestid` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outpatientdetails`
--

CREATE TABLE `outpatientdetails` (
  `outpatientdetailsid` int(11) NOT NULL,
  `patientregistrationid` int(11) DEFAULT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `chargesid` int(11) DEFAULT NULL,
  `tokenno` varchar(15) DEFAULT NULL,
  `dateofappoinment` date DEFAULT NULL,
  `treatmentfor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `outsideconsultation`
--

CREATE TABLE `outsideconsultation` (
  `outsideconsultationid` int(11) NOT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `consultantname` varchar(35) DEFAULT NULL,
  `consultingtime` date DEFAULT NULL,
  `contactno` int(12) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `consultingfee` int(11) DEFAULT NULL,
  `extrafee` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patientregistration`
--

CREATE TABLE `patientregistration` (
  `patientregistrationid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `registreno` int(11) DEFAULT NULL,
  `registerdate` date DEFAULT NULL,
  `patientname` varchar(25) DEFAULT NULL,
  `patientage` int(11) DEFAULT NULL,
  `sex` varchar(15) DEFAULT NULL,
  `patientaddress` varchar(45) DEFAULT NULL,
  `guardian` varchar(25) DEFAULT NULL,
  `relation` varchar(45) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `occupation` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`user_id`, `lastname`, `firstname`) VALUES
(1, 'Admin', 'Administrator'),
(2, 'Demo', 'Demo');

-- --------------------------------------------------------

--
-- Table structure for table `profiles_fields`
--

CREATE TABLE `profiles_fields` (
  `id` int(10) NOT NULL,
  `varname` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `field_type` varchar(50) NOT NULL,
  `field_size` varchar(15) NOT NULL DEFAULT '0',
  `field_size_min` varchar(15) NOT NULL DEFAULT '0',
  `required` int(1) NOT NULL DEFAULT '0',
  `match` varchar(255) NOT NULL DEFAULT '',
  `range` varchar(255) NOT NULL DEFAULT '',
  `error_message` varchar(255) NOT NULL DEFAULT '',
  `other_validator` varchar(5000) NOT NULL DEFAULT '',
  `default` varchar(255) NOT NULL DEFAULT '',
  `widget` varchar(255) NOT NULL DEFAULT '',
  `widgetparams` varchar(5000) NOT NULL DEFAULT '',
  `position` int(3) NOT NULL DEFAULT '0',
  `visible` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles_fields`
--

INSERT INTO `profiles_fields` (`id`, `varname`, `title`, `field_type`, `field_size`, `field_size_min`, `required`, `match`, `range`, `error_message`, `other_validator`, `default`, `widget`, `widgetparams`, `position`, `visible`) VALUES
(1, 'lastname', 'Last Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect Last Name (length between 3 and 50 characters).', '', '', '', '', 1, 3),
(2, 'firstname', 'First Name', 'VARCHAR', '50', '3', 1, '', '', 'Incorrect First Name (length between 3 and 50 characters).', '', '', '', '', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `rights`
--

CREATE TABLE `rights` (
  `itemname` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `weight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `roomtypeid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `roomtypename` varchar(30) DEFAULT NULL,
  `roomcharge` int(11) DEFAULT NULL,
  `noofbeds` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffregistration`
--

CREATE TABLE `staffregistration` (
  `staffregistrationid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `employeetypeid` int(11) DEFAULT NULL,
  `hospitaldepartmentid` int(11) DEFAULT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `gender` varchar(15) DEFAULT NULL,
  `employeecode` varchar(20) DEFAULT NULL,
  `dateofjoining` date DEFAULT NULL,
  `dateofretiremnent` date DEFAULT NULL,
  `phone` int(12) DEFAULT NULL,
  `refereceperson` varchar(45) DEFAULT NULL,
  `referencecontact` int(12) DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `photo` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staffscheduling`
--

CREATE TABLE `staffscheduling` (
  `staffschedulingid` int(11) NOT NULL,
  `staffregistrationid` int(11) DEFAULT NULL,
  `employeetypeid` int(11) DEFAULT NULL,
  `wardid` int(11) DEFAULT NULL,
  `shift` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockarrangement`
--

CREATE TABLE `stockarrangement` (
  `stockarrangementid` int(11) NOT NULL,
  `stockdetailsid` int(11) DEFAULT NULL,
  `stocklocation` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockbill`
--

CREATE TABLE `stockbill` (
  `stockbill` int(11) NOT NULL,
  `stockdetailsid` int(11) DEFAULT NULL,
  `patientregistrationid` int(11) DEFAULT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `mrp` int(11) DEFAULT NULL,
  `totalamount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockdetails`
--

CREATE TABLE `stockdetails` (
  `stockdetailsid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `stocktypeid` int(11) DEFAULT NULL,
  `vendorid` int(11) DEFAULT NULL,
  `stockname` varchar(25) DEFAULT NULL,
  `batchno` varchar(15) DEFAULT NULL,
  `mfd` date DEFAULT NULL,
  `exp` date DEFAULT NULL,
  `buyingdate` date DEFAULT NULL,
  `cost` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `mrp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stockpayment`
--

CREATE TABLE `stockpayment` (
  `stockpaymentid` int(11) NOT NULL,
  `stocktypeid` int(11) DEFAULT NULL,
  `vendorid` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `amountpayed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stocktype`
--

CREATE TABLE `stocktype` (
  `stocktypeid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `stocktype` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatmentunit`
--

CREATE TABLE `treatmentunit` (
  `treatmentunitid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `treatmentype` varchar(45) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `treatmentunitscheduling`
--

CREATE TABLE `treatmentunitscheduling` (
  `treatmentunitschedulingid` int(11) NOT NULL,
  `treatmentunitid` int(11) DEFAULT NULL,
  `doctordetailsid` int(11) DEFAULT NULL,
  `patientregistrationid` int(11) DEFAULT NULL,
  `date` int(11) DEFAULT NULL,
  `time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `hospitalregistrationid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `activkey` varchar(128) NOT NULL DEFAULT '',
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastvisit_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `superuser` int(1) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `userroleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `hospitalregistrationid`, `username`, `password`, `email`, `activkey`, `create_at`, `lastvisit_at`, `superuser`, `status`, `userroleid`) VALUES
(1, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'webmaster@example.com', 'eed3add27896b1748f9ebb35e5df5a1a', '2016-09-01 07:52:13', '2016-12-20 03:24:11', 1, 1, 0),
(2, 0, 'demo', 'fe01ce2a7fbac8fafaed7c982a04e229', 'demo@example.com', '099f825543f7850cc038b90aaff39fac', '2016-09-01 07:52:13', '0000-00-00 00:00:00', 0, 1, 0),
(3, 1, 'BV354', '20451b5a7f8ddc4fc3ffd02a60e8c32b', 'bc4143@mail.com', '7d67e2d1c3cfc715b8ab7ea45b9a66c8', '2016-10-29 07:10:21', '0000-00-00 00:00:00', 0, 1, 0),
(4, 0, '0P', '366cd89a0e86a2c2793fe30306b52129', 'phs@doctor.com', 'd6acc9237142d96c1c3e974a1753ef7c', '2016-11-06 12:38:58', '0000-00-00 00:00:00', 0, 1, 1),
(5, 0, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin@admin.com', '', '2016-12-18 18:46:31', '0000-00-00 00:00:00', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendorid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) NOT NULL,
  `vendorname` varchar(35) DEFAULT NULL,
  `vendoraddress` varchar(45) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `contact` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `wardid` int(11) NOT NULL,
  `hospitalregistrationid` int(11) DEFAULT NULL,
  `wardname` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advancecollection`
--
ALTER TABLE `advancecollection`
  ADD PRIMARY KEY (`advancecollectionid`),
  ADD KEY `fk_advancecollection_inpatientdetails1_idx` (`inpatientdetailsid`);

--
-- Indexes for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD PRIMARY KEY (`itemname`,`userid`);

--
-- Indexes for table `authitem`
--
ALTER TABLE `authitem`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `bedavail`
--
ALTER TABLE `bedavail`
  ADD PRIMARY KEY (`bedavailid`),
  ADD KEY `fk_bedavail_hospitallocation1_idx` (`hospitallocationid`),
  ADD KEY `fk_bedavail_buildingfloor1_idx` (`buildingfloorid`),
  ADD KEY `fk_bedavail_roomtype1_idx` (`roomtypeid`),
  ADD KEY `fk_bedavail_bedtype1_idx` (`bedtypeid`);

--
-- Indexes for table `bedtype`
--
ALTER TABLE `bedtype`
  ADD PRIMARY KEY (`bedtypeid`),
  ADD KEY `fk_bedtype_hospitalregistration1_idx` (`hospitalregisrationid`);

--
-- Indexes for table `bloodcount`
--
ALTER TABLE `bloodcount`
  ADD PRIMARY KEY (`bloodcountid`),
  ADD KEY `fk_bloodcount_blooddoner1_idx` (`blooddonerid`);

--
-- Indexes for table `blooddoner`
--
ALTER TABLE `blooddoner`
  ADD PRIMARY KEY (`blooddonerid`),
  ADD KEY `fk_blooddoner_donationtype1_idx` (`donationtypeid`),
  ADD KEY `fk_blooddoner_bloodtype1_idx` (`bloodtypeid`);

--
-- Indexes for table `bloodtest`
--
ALTER TABLE `bloodtest`
  ADD PRIMARY KEY (`bloodtestid`),
  ADD KEY `fk_bloodtest_blooddoner1_idx` (`blooddonerid`);

--
-- Indexes for table `bloodtype`
--
ALTER TABLE `bloodtype`
  ADD PRIMARY KEY (`bloodtypeid`);

--
-- Indexes for table `buildingfloor`
--
ALTER TABLE `buildingfloor`
  ADD PRIMARY KEY (`buildingfloorid`),
  ADD KEY `fk_buildingfloor_hospitalregistration1_idx` (`hospitalregistrationid`),
  ADD KEY `fk_buildingfloor_hospitallocation1_idx` (`hospitallocationid`);

--
-- Indexes for table `charges`
--
ALTER TABLE `charges`
  ADD PRIMARY KEY (`chargesid`),
  ADD KEY `fk_charges_hospitalregistration1_idx` (`hospitalregistrationid`);

--
-- Indexes for table `doctordesignation`
--
ALTER TABLE `doctordesignation`
  ADD PRIMARY KEY (`doctordesignationid`);

--
-- Indexes for table `doctordetails`
--
ALTER TABLE `doctordetails`
  ADD PRIMARY KEY (`doctordetailsid`),
  ADD KEY `fk_doctordetails_hospitalregistration1_idx` (`hospitalregistrationid`),
  ADD KEY `fk_doctordetails_doctorspecialization1_idx` (`doctorspecializationid`),
  ADD KEY `fk_doctordetails_doctordesignitation1_idx` (`doctordesignationid`);

--
-- Indexes for table `doctorspecialization`
--
ALTER TABLE `doctorspecialization`
  ADD PRIMARY KEY (`doctorspecializationid`);

--
-- Indexes for table `donationtype`
--
ALTER TABLE `donationtype`
  ADD PRIMARY KEY (`donationtypeid`);

--
-- Indexes for table `employeetype`
--
ALTER TABLE `employeetype`
  ADD PRIMARY KEY (`employeetypeid`);

--
-- Indexes for table `hospitaldepartment`
--
ALTER TABLE `hospitaldepartment`
  ADD PRIMARY KEY (`hospitaldepartmentid`),
  ADD KEY `fk_hospitaldepartment_hospitalregistration1_idx` (`hospitalregistrationid`),
  ADD KEY `fk_hospitaldepartment_buildingfloor1_idx` (`buildingfloorid`);

--
-- Indexes for table `hospitallocation`
--
ALTER TABLE `hospitallocation`
  ADD PRIMARY KEY (`hospitallocationid`),
  ADD KEY `fk_hospitallocation_hospitalregistration_idx` (`hospitalregistrationid`);

--
-- Indexes for table `hospitalregistration`
--
ALTER TABLE `hospitalregistration`
  ADD PRIMARY KEY (`hospitalregistrationid`);

--
-- Indexes for table `icuotscheduling`
--
ALTER TABLE `icuotscheduling`
  ADD PRIMARY KEY (`icuotscheduling`),
  ADD KEY `fk_icuotscheduling_hospitalregistration1_idx` (`hospitalregistrationid`),
  ADD KEY `fk_icuotscheduling_buildingfloor1_idx` (`buildingfloorid`),
  ADD KEY `fk_icuotscheduling_patientregistration1_idx` (`patientregistrationid`),
  ADD KEY `fk_icuotscheduling_doctordetails1_idx` (`doctordetailsid`),
  ADD KEY `fk_icuotscheduling_staffregistration1_idx` (`staffregistrationid`);

--
-- Indexes for table `inpatientbilling`
--
ALTER TABLE `inpatientbilling`
  ADD PRIMARY KEY (`inpatientbillingid`),
  ADD KEY `fk_inpatientbilling_inpatientdetails1_idx` (`inpatientdetailsid`);

--
-- Indexes for table `inpatientdetails`
--
ALTER TABLE `inpatientdetails`
  ADD PRIMARY KEY (`inpatientdetailsid`),
  ADD KEY `fk_inpatientdetails_patientregistration1_idx` (`patientregistrationid`),
  ADD KEY `fk_inpatientdetails_bedtype1_idx` (`bedtypeid`),
  ADD KEY `fk_inpatientdetails_doctordetails1_idx` (`doctordetailsid`),
  ADD KEY `fk_inpatientdetails_charges1_idx` (`chargesid`);

--
-- Indexes for table `laboratorytest`
--
ALTER TABLE `laboratorytest`
  ADD PRIMARY KEY (`laboratorytestid`),
  ADD KEY `fk_laboratorytest_hospitalregistration1_idx` (`hospitalregistrationid`),
  ADD KEY `fk_laboratorytest_hospitallocation1_idx` (`hospitallocationid`),
  ADD KEY `fk_laboratorytest_buildingfloor1_idx` (`buildingfloorid`);

--
-- Indexes for table `labtestresult`
--
ALTER TABLE `labtestresult`
  ADD PRIMARY KEY (`labtestresultid`),
  ADD KEY `fk_labtestresult_laboratorytest1_idx` (`laboratorytestid`),
  ADD KEY `fk_labtestresult_doctordetails1_idx` (`doctordetailsid`),
  ADD KEY `fk_labtestresult_patientregistration1_idx` (`patientregistrationid`);

--
-- Indexes for table `leavemanagement`
--
ALTER TABLE `leavemanagement`
  ADD PRIMARY KEY (`leavemanagementid`),
  ADD KEY `fk_leavemanagement_staffregistration1_idx` (`staffregistrationid`),
  ADD KEY `fk_leavemanagement_doctordetails1_idx` (`doctordetailsid`);

--
-- Indexes for table `outpatientbiling`
--
ALTER TABLE `outpatientbiling`
  ADD PRIMARY KEY (`outpatientbilingid`),
  ADD KEY `fk_outpatientbiling_outpatientdetails1_idx` (`outpatientdetailsid`),
  ADD KEY `fk_outpatientbiling_doctordetails1_idx` (`doctordetailsid`),
  ADD KEY `fk_outpatientbiling_laboratorytest1_idx` (`laboratorytestid`);

--
-- Indexes for table `outpatientdetails`
--
ALTER TABLE `outpatientdetails`
  ADD PRIMARY KEY (`outpatientdetailsid`),
  ADD KEY `fk_outpatientdetails_patientregistration1_idx` (`patientregistrationid`),
  ADD KEY `fk_outpatientdetails_doctordetails1_idx` (`doctordetailsid`),
  ADD KEY `fk_outpatientdetails_charges1_idx` (`chargesid`);

--
-- Indexes for table `outsideconsultation`
--
ALTER TABLE `outsideconsultation`
  ADD PRIMARY KEY (`outsideconsultationid`),
  ADD KEY `fk_outsideconsultation_doctordetails1_idx` (`doctordetailsid`);

--
-- Indexes for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD PRIMARY KEY (`patientregistrationid`),
  ADD KEY `fk_patientregistration_hospitalregistration1_idx` (`hospitalregistrationid`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `profiles_fields`
--
ALTER TABLE `profiles_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `varname` (`varname`,`widget`,`visible`);

--
-- Indexes for table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`itemname`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`roomtypeid`),
  ADD KEY `fk_roomtype_hospitalregistration1_idx` (`hospitalregistrationid`);

--
-- Indexes for table `staffregistration`
--
ALTER TABLE `staffregistration`
  ADD PRIMARY KEY (`staffregistrationid`),
  ADD KEY `fk_staffregistration_hospitalregistration1_idx` (`hospitalregistrationid`),
  ADD KEY `fk_staffregistration_employeetype1_idx` (`employeetypeid`),
  ADD KEY `fk_staffregistration_hospitaldepartment1_idx` (`hospitaldepartmentid`);

--
-- Indexes for table `staffscheduling`
--
ALTER TABLE `staffscheduling`
  ADD PRIMARY KEY (`staffschedulingid`),
  ADD KEY `fk_staffscheduling_staffregistration1_idx` (`staffregistrationid`),
  ADD KEY `fk_staffscheduling_employeetype1_idx` (`employeetypeid`),
  ADD KEY `fk_staffscheduling_ward1_idx` (`wardid`);

--
-- Indexes for table `stockarrangement`
--
ALTER TABLE `stockarrangement`
  ADD PRIMARY KEY (`stockarrangementid`),
  ADD KEY `fk_stockarrangement_stockdetails1_idx` (`stockdetailsid`);

--
-- Indexes for table `stockbill`
--
ALTER TABLE `stockbill`
  ADD PRIMARY KEY (`stockbill`),
  ADD KEY `fk_stockbill_stockdetails1_idx` (`stockdetailsid`),
  ADD KEY `fk_stockbill_patientregistration1_idx` (`patientregistrationid`),
  ADD KEY `fk_stockbill_doctordetails1_idx` (`doctordetailsid`);

--
-- Indexes for table `stockdetails`
--
ALTER TABLE `stockdetails`
  ADD PRIMARY KEY (`stockdetailsid`),
  ADD KEY `fk_stockdetails_stocktype1_idx` (`stocktypeid`),
  ADD KEY `fk_stockdetails_vendor1_idx` (`vendorid`),
  ADD KEY `fk_stockdetails_hospitalregistration1_idx` (`hospitalregistrationid`);

--
-- Indexes for table `stockpayment`
--
ALTER TABLE `stockpayment`
  ADD PRIMARY KEY (`stockpaymentid`),
  ADD KEY `fk_stockpayment_stocktype1_idx` (`stocktypeid`),
  ADD KEY `fk_stockpayment_vendor1_idx` (`vendorid`);

--
-- Indexes for table `stocktype`
--
ALTER TABLE `stocktype`
  ADD PRIMARY KEY (`stocktypeid`),
  ADD KEY `fk_stocktype_hospitalregistration1_idx` (`hospitalregistrationid`);

--
-- Indexes for table `treatmentunit`
--
ALTER TABLE `treatmentunit`
  ADD PRIMARY KEY (`treatmentunitid`),
  ADD KEY `fk_treatmentunit_hospitalregistration1_idx` (`hospitalregistrationid`);

--
-- Indexes for table `treatmentunitscheduling`
--
ALTER TABLE `treatmentunitscheduling`
  ADD PRIMARY KEY (`treatmentunitschedulingid`),
  ADD KEY `fk_treatmentunitscheduling_treatmentunit1_idx` (`treatmentunitid`),
  ADD KEY `fk_treatmentunitscheduling_doctordetails1_idx` (`doctordetailsid`),
  ADD KEY `fk_treatmentunitscheduling_patientregistration1_idx` (`patientregistrationid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `status` (`status`),
  ADD KEY `superuser` (`superuser`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendorid`),
  ADD KEY `fk_vendor_hospitalregistration1_idx` (`hospitalregistrationid`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`wardid`),
  ADD KEY `fk_ward_hospitalregistration1_idx` (`hospitalregistrationid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advancecollection`
--
ALTER TABLE `advancecollection`
  MODIFY `advancecollectionid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bedavail`
--
ALTER TABLE `bedavail`
  MODIFY `bedavailid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bedtype`
--
ALTER TABLE `bedtype`
  MODIFY `bedtypeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bloodcount`
--
ALTER TABLE `bloodcount`
  MODIFY `bloodcountid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blooddoner`
--
ALTER TABLE `blooddoner`
  MODIFY `blooddonerid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bloodtest`
--
ALTER TABLE `bloodtest`
  MODIFY `bloodtestid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bloodtype`
--
ALTER TABLE `bloodtype`
  MODIFY `bloodtypeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buildingfloor`
--
ALTER TABLE `buildingfloor`
  MODIFY `buildingfloorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `charges`
--
ALTER TABLE `charges`
  MODIFY `chargesid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doctordesignation`
--
ALTER TABLE `doctordesignation`
  MODIFY `doctordesignationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doctordetails`
--
ALTER TABLE `doctordetails`
  MODIFY `doctordetailsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doctorspecialization`
--
ALTER TABLE `doctorspecialization`
  MODIFY `doctorspecializationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `donationtype`
--
ALTER TABLE `donationtype`
  MODIFY `donationtypeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employeetype`
--
ALTER TABLE `employeetype`
  MODIFY `employeetypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `hospitaldepartment`
--
ALTER TABLE `hospitaldepartment`
  MODIFY `hospitaldepartmentid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospitallocation`
--
ALTER TABLE `hospitallocation`
  MODIFY `hospitallocationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hospitalregistration`
--
ALTER TABLE `hospitalregistration`
  MODIFY `hospitalregistrationid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `icuotscheduling`
--
ALTER TABLE `icuotscheduling`
  MODIFY `icuotscheduling` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inpatientbilling`
--
ALTER TABLE `inpatientbilling`
  MODIFY `inpatientbillingid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `inpatientdetails`
--
ALTER TABLE `inpatientdetails`
  MODIFY `inpatientdetailsid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laboratorytest`
--
ALTER TABLE `laboratorytest`
  MODIFY `laboratorytestid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `labtestresult`
--
ALTER TABLE `labtestresult`
  MODIFY `labtestresultid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `leavemanagement`
--
ALTER TABLE `leavemanagement`
  MODIFY `leavemanagementid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `outpatientbiling`
--
ALTER TABLE `outpatientbiling`
  MODIFY `outpatientbilingid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `outpatientdetails`
--
ALTER TABLE `outpatientdetails`
  MODIFY `outpatientdetailsid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `outsideconsultation`
--
ALTER TABLE `outsideconsultation`
  MODIFY `outsideconsultationid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patientregistration`
--
ALTER TABLE `patientregistration`
  MODIFY `patientregistrationid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profiles_fields`
--
ALTER TABLE `profiles_fields`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `roomtypeid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffregistration`
--
ALTER TABLE `staffregistration`
  MODIFY `staffregistrationid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staffscheduling`
--
ALTER TABLE `staffscheduling`
  MODIFY `staffschedulingid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stockarrangement`
--
ALTER TABLE `stockarrangement`
  MODIFY `stockarrangementid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stockbill`
--
ALTER TABLE `stockbill`
  MODIFY `stockbill` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stockdetails`
--
ALTER TABLE `stockdetails`
  MODIFY `stockdetailsid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stockpayment`
--
ALTER TABLE `stockpayment`
  MODIFY `stockpaymentid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `treatmentunit`
--
ALTER TABLE `treatmentunit`
  MODIFY `treatmentunitid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `treatmentunitscheduling`
--
ALTER TABLE `treatmentunitscheduling`
  MODIFY `treatmentunitschedulingid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendorid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ward`
--
ALTER TABLE `ward`
  MODIFY `wardid` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `advancecollection`
--
ALTER TABLE `advancecollection`
  ADD CONSTRAINT `fk_advancecollection_inpatientdetails1` FOREIGN KEY (`inpatientdetailsid`) REFERENCES `inpatientdetails` (`inpatientdetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `authassignment`
--
ALTER TABLE `authassignment`
  ADD CONSTRAINT `authassignment_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `authitemchild`
--
ALTER TABLE `authitemchild`
  ADD CONSTRAINT `authitemchild_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `authitemchild_ibfk_2` FOREIGN KEY (`child`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bedavail`
--
ALTER TABLE `bedavail`
  ADD CONSTRAINT `fk_bedavail_bedtype1` FOREIGN KEY (`bedtypeid`) REFERENCES `bedtype` (`bedtypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bedavail_buildingfloor1` FOREIGN KEY (`buildingfloorid`) REFERENCES `buildingfloor` (`buildingfloorid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bedavail_hospitallocation1` FOREIGN KEY (`hospitallocationid`) REFERENCES `hospitallocation` (`hospitallocationid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_bedavail_roomtype1` FOREIGN KEY (`roomtypeid`) REFERENCES `roomtype` (`roomtypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bedtype`
--
ALTER TABLE `bedtype`
  ADD CONSTRAINT `fk_bedtype_hospitalregistration1` FOREIGN KEY (`hospitalregisrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bloodcount`
--
ALTER TABLE `bloodcount`
  ADD CONSTRAINT `fk_bloodcount_blooddoner1` FOREIGN KEY (`blooddonerid`) REFERENCES `blooddoner` (`blooddonerid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `blooddoner`
--
ALTER TABLE `blooddoner`
  ADD CONSTRAINT `fk_blooddoner_bloodtype1` FOREIGN KEY (`bloodtypeid`) REFERENCES `bloodtype` (`bloodtypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_blooddoner_donationtype1` FOREIGN KEY (`donationtypeid`) REFERENCES `donationtype` (`donationtypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bloodtest`
--
ALTER TABLE `bloodtest`
  ADD CONSTRAINT `fk_bloodtest_blooddoner1` FOREIGN KEY (`blooddonerid`) REFERENCES `blooddoner` (`blooddonerid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `charges`
--
ALTER TABLE `charges`
  ADD CONSTRAINT `fk_charges_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `icuotscheduling`
--
ALTER TABLE `icuotscheduling`
  ADD CONSTRAINT `fk_icuotscheduling_buildingfloor1` FOREIGN KEY (`buildingfloorid`) REFERENCES `buildingfloor` (`buildingfloorid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_icuotscheduling_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_icuotscheduling_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_icuotscheduling_patientregistration1` FOREIGN KEY (`patientregistrationid`) REFERENCES `patientregistration` (`patientregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_icuotscheduling_staffregistration1` FOREIGN KEY (`staffregistrationid`) REFERENCES `staffregistration` (`staffregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inpatientbilling`
--
ALTER TABLE `inpatientbilling`
  ADD CONSTRAINT `fk_inpatientbilling_inpatientdetails1` FOREIGN KEY (`inpatientdetailsid`) REFERENCES `inpatientdetails` (`inpatientdetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inpatientdetails`
--
ALTER TABLE `inpatientdetails`
  ADD CONSTRAINT `fk_inpatientdetails_bedtype1` FOREIGN KEY (`bedtypeid`) REFERENCES `bedtype` (`bedtypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inpatientdetails_charges1` FOREIGN KEY (`chargesid`) REFERENCES `charges` (`chargesid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inpatientdetails_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inpatientdetails_patientregistration1` FOREIGN KEY (`patientregistrationid`) REFERENCES `patientregistration` (`patientregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `laboratorytest`
--
ALTER TABLE `laboratorytest`
  ADD CONSTRAINT `fk_laboratorytest_buildingfloor1` FOREIGN KEY (`buildingfloorid`) REFERENCES `buildingfloor` (`buildingfloorid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_laboratorytest_hospitallocation1` FOREIGN KEY (`hospitallocationid`) REFERENCES `hospitallocation` (`hospitallocationid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_laboratorytest_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `labtestresult`
--
ALTER TABLE `labtestresult`
  ADD CONSTRAINT `fk_labtestresult_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_labtestresult_laboratorytest1` FOREIGN KEY (`laboratorytestid`) REFERENCES `laboratorytest` (`laboratorytestid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_labtestresult_patientregistration1` FOREIGN KEY (`patientregistrationid`) REFERENCES `patientregistration` (`patientregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `leavemanagement`
--
ALTER TABLE `leavemanagement`
  ADD CONSTRAINT `fk_leavemanagement_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_leavemanagement_staffregistration1` FOREIGN KEY (`staffregistrationid`) REFERENCES `staffregistration` (`staffregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `outpatientbiling`
--
ALTER TABLE `outpatientbiling`
  ADD CONSTRAINT `fk_outpatientbiling_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_outpatientbiling_laboratorytest1` FOREIGN KEY (`laboratorytestid`) REFERENCES `laboratorytest` (`laboratorytestid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_outpatientbiling_outpatientdetails1` FOREIGN KEY (`outpatientdetailsid`) REFERENCES `outpatientdetails` (`outpatientdetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `outpatientdetails`
--
ALTER TABLE `outpatientdetails`
  ADD CONSTRAINT `fk_outpatientdetails_charges1` FOREIGN KEY (`chargesid`) REFERENCES `charges` (`chargesid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_outpatientdetails_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_outpatientdetails_patientregistration1` FOREIGN KEY (`patientregistrationid`) REFERENCES `patientregistration` (`patientregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `outsideconsultation`
--
ALTER TABLE `outsideconsultation`
  ADD CONSTRAINT `fk_outsideconsultation_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patientregistration`
--
ALTER TABLE `patientregistration`
  ADD CONSTRAINT `fk_patientregistration_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `user_profile_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rights`
--
ALTER TABLE `rights`
  ADD CONSTRAINT `rights_ibfk_1` FOREIGN KEY (`itemname`) REFERENCES `authitem` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD CONSTRAINT `fk_roomtype_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `staffscheduling`
--
ALTER TABLE `staffscheduling`
  ADD CONSTRAINT `fk_staffscheduling_employeetype1` FOREIGN KEY (`employeetypeid`) REFERENCES `employeetype` (`employeetypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_staffscheduling_staffregistration1` FOREIGN KEY (`staffregistrationid`) REFERENCES `staffregistration` (`staffregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_staffscheduling_ward1` FOREIGN KEY (`wardid`) REFERENCES `ward` (`wardid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stockarrangement`
--
ALTER TABLE `stockarrangement`
  ADD CONSTRAINT `fk_stockarrangement_stockdetails1` FOREIGN KEY (`stockdetailsid`) REFERENCES `stockdetails` (`stockdetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stockbill`
--
ALTER TABLE `stockbill`
  ADD CONSTRAINT `fk_stockbill_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stockbill_patientregistration1` FOREIGN KEY (`patientregistrationid`) REFERENCES `patientregistration` (`patientregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stockbill_stockdetails1` FOREIGN KEY (`stockdetailsid`) REFERENCES `stockdetails` (`stockdetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stockdetails`
--
ALTER TABLE `stockdetails`
  ADD CONSTRAINT `fk_stockdetails_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stockdetails_stocktype1` FOREIGN KEY (`stocktypeid`) REFERENCES `stocktype` (`stocktypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stockdetails_vendor1` FOREIGN KEY (`vendorid`) REFERENCES `vendor` (`vendorid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stockpayment`
--
ALTER TABLE `stockpayment`
  ADD CONSTRAINT `fk_stockpayment_stocktype1` FOREIGN KEY (`stocktypeid`) REFERENCES `stocktype` (`stocktypeid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_stockpayment_vendor1` FOREIGN KEY (`vendorid`) REFERENCES `vendor` (`vendorid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `stocktype`
--
ALTER TABLE `stocktype`
  ADD CONSTRAINT `fk_stocktype_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `treatmentunit`
--
ALTER TABLE `treatmentunit`
  ADD CONSTRAINT `fk_treatmentunit_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `treatmentunitscheduling`
--
ALTER TABLE `treatmentunitscheduling`
  ADD CONSTRAINT `fk_treatmentunitscheduling_doctordetails1` FOREIGN KEY (`doctordetailsid`) REFERENCES `doctordetails` (`doctordetailsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_treatmentunitscheduling_patientregistration1` FOREIGN KEY (`patientregistrationid`) REFERENCES `patientregistration` (`patientregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_treatmentunitscheduling_treatmentunit1` FOREIGN KEY (`treatmentunitid`) REFERENCES `treatmentunit` (`treatmentunitid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vendor`
--
ALTER TABLE `vendor`
  ADD CONSTRAINT `fk_vendor_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `fk_ward_hospitalregistration1` FOREIGN KEY (`hospitalregistrationid`) REFERENCES `hospitalregistration` (`hospitalregistrationid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
