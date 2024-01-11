-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2021 at 04:52 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `AREA_ID` int(11) NOT NULL,
  `CITY_ID` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `AREA_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AREA_ID`, `CITY_ID`, `STATE_ID`, `AREA_NAME`) VALUES
(374, 76, 16, 'Rahuri'),
(375, 76, 16, 'Kopargaon'),
(376, 76, 16, 'sangamner'),
(377, 76, 16, 'Akole'),
(378, 76, 16, 'Loni'),
(379, 76, 16, 'Bhandardara'),
(380, 76, 16, 'Deolali  Pravara'),
(381, 76, 16, 'Ghulewadi'),
(382, 76, 16, 'Parner'),
(383, 76, 16, 'Jamkhed'),
(384, 76, 16, 'Miri'),
(385, 76, 16, 'Nevasa'),
(386, 76, 16, 'Nighoj'),
(387, 76, 16, 'Pathardi'),
(388, 76, 16, 'Puntamba'),
(389, 76, 16, 'Rahata'),
(390, 76, 16, 'Shirdi'),
(391, 76, 16, 'Shrirampur'),
(392, 76, 16, 'Tisgaon');

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `BLOOD_ID` int(11) NOT NULL,
  `BLOOD_NAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`BLOOD_ID`, `BLOOD_NAME`) VALUES
(4, 'A+'),
(5, 'A-'),
(6, 'B+'),
(7, 'B-'),
(8, 'O+'),
(9, 'O-'),
(10, 'AB+'),
(11, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `DONOR_ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `FATHER_NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BODY_WEIGHT` int(11) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `ADDRESS` text NOT NULL,
  `AREA` varchar(150) NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `PINCODE` varchar(150) NOT NULL,
  `STATE` varchar(150) NOT NULL,
  `COUNTRY` varchar(150) NOT NULL,
  `CONTACT_1` varchar(150) NOT NULL,
  `CONTACT_2` varchar(150) NOT NULL,
  `VOLUNTARY` text NOT NULL,
  `VOLUNTARY_GROUP` text NOT NULL,
  `NEW_DONOR` varchar(150) NOT NULL,
  `LAST_D_DATE` date NOT NULL,
  `DONOR_PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`DONOR_ID`, `NAME`, `FATHER_NAME`, `GENDER`, `DOB`, `BLOOD`, `BODY_WEIGHT`, `EMAIL`, `ADDRESS`, `AREA`, `CITY`, `PINCODE`, `STATE`, `COUNTRY`, `CONTACT_1`, `CONTACT_2`, `VOLUNTARY`, `VOLUNTARY_GROUP`, `NEW_DONOR`, `LAST_D_DATE`, `DONOR_PIC`, `STATUS`) VALUES
(2, 'Ajit Govind Gode', 'Govind', 'Male', '1999-07-21', 'AB+', 40, 'godeajit71@gmail.com', 'Sangamner ', 'New Bus Stand', 'Chennai', '422620', 'Tamilnadu', 'India', '8390889925', '9284431508', 'No', 'Nill', 'Yes', '2021-08-12', 'donor_image/354838img3.jpg', 1),
(15, 'Sanket modhe', 'asdfgh', 'Male', '1989-08-10', 'A+', 34, 'modhesanket11@gmail.com', 'Sangamner', 'sangamner', 'Ahemadnagar', '422605', 'Maharashtra', 'India', '123456789', '123456789', 'No', 'Nill', 'Yes', '2021-04-05', 'donor_image/615py4.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CITY_ID` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `CITY_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CITY_ID`, `STATE_ID`, `CITY_NAME`) VALUES
(76, 16, 'Ahemadnagar'),
(77, 16, 'Mumbai'),
(78, 16, '	Pune'),
(79, 16, 'Nagpur'),
(80, 16, 'Nashik'),
(81, 16, 'Thane'),
(82, 16, 'Aurangabad'),
(83, 16, 'Solapur'),
(84, 16, 'Jalgaon'),
(85, 16, 'Amravati'),
(86, 16, 'Nanded'),
(87, 16, 'Kolhapur'),
(88, 16, 'Akola'),
(89, 16, 'Thane'),
(90, 16, 'Sangli'),
(91, 16, 'Latur'),
(92, 16, 'Dhule'),
(93, 16, 'Chandrapur'),
(94, 16, 'Parbhani'),
(95, 16, 'Jalna'),
(96, 16, 'Panvel'),
(97, 16, 'Beed'),
(98, 16, 'Osmanabad'),
(99, 16, 'Wardha'),
(100, 16, 'Sangamner');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `COUNTRY_ID` int(11) NOT NULL,
  `COUNTRY_NAME` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`COUNTRY_ID`, `COUNTRY_NAME`) VALUES
(1, 'India'),
(4, 'Kwait'),
(5, 'Qatar'),
(6, 'Singapore'),
(7, 'Russia'),
(10, 'Nepal'),
(11, 'Mali'),
(12, 'Malaysia & Brunei'),
(13, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `demail` varchar(50) NOT NULL,
  `dpassword` varchar(50) NOT NULL,
  `dphone` varchar(50) NOT NULL,
  `dcity` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `dname`, `demail`, `dpassword`, `dphone`, `dcity`) VALUES
(6, 'Sanket Modhe', 'modhesanket11@gmail.com', '123456', '7350774640', 'Chennai'),
(7, 'Ajit', 'godeajit71@gmail.com', '123456', '8390889925', 'sangamner');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `CONTACT` text NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `MESSAGE` text NOT NULL,
  `STATUS` text NOT NULL,
  `LOGS` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `NAME`, `CONTACT`, `EMAIL`, `MESSAGE`, `STATUS`, `LOGS`) VALUES
(6, 'Ajit Govind Gode', '8390889925', 'godeajit71@gmail.com', 'Hiii', '0', '2021-08-13 13:04:26'),
(7, 'Sanket Modhe', '9876543210', 'modhesanket11@gmail.com', 'hiii', '0', '2021-08-14 15:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `pemail` varchar(100) NOT NULL,
  `ppassword` varchar(100) NOT NULL,
  `pphone` varchar(100) NOT NULL,
  `rbg` varchar(100) NOT NULL,
  `pcity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `pname`, `pemail`, `ppassword`, `pphone`, `rbg`, `pcity`) VALUES
(4, 'Sanket Modhe', 'modhesanket11@gmail.com', '1234567', '8390889925', 'AB+', 'Sangamner'),
(5, 'Ajit Govind Gode', 'godeajit71@gmail.com', '1234567', '8390889925', 'B+', 'Sangamner');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE `request_blood` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BUNIT` int(11) NOT NULL,
  `HOSP` text NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `PIN` varchar(150) NOT NULL,
  `DOC` varchar(150) NOT NULL,
  `RDATE` date NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CADDRESS` text NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `CON1` varchar(150) NOT NULL,
  `CON2` varchar(150) NOT NULL,
  `REASON` text NOT NULL,
  `PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `CDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_blood`
--

INSERT INTO `request_blood` (`ID`, `NAME`, `GENDER`, `BLOOD`, `BUNIT`, `HOSP`, `CITY`, `PIN`, `DOC`, `RDATE`, `CNAME`, `CADDRESS`, `EMAIL`, `CON1`, `CON2`, `REASON`, `PIC`, `STATUS`, `CDATE`) VALUES
(6, 'Sanket modhe', 'Male', 'A+', 23, 'Sangamner', 'Ahemadnagar', '422605', 'Tambe', '2021-08-25', 'Tambe', 'Sangamner', 'modhesanket11@gmail.com', '1234567890', '1234567890', 'asdfg', 'request_image/791no-image.jpg', 2, '2021-08-30'),
(8, 'Ajit Govind Gode', 'Male', 'O+', 78, 'Tambe Hospital', 'Sangamner', '422605', 'Tambe ', '2021-08-31', 'Ajit', 'Sangamner', 'godeajit71@gmail.com', '8390889925', '9284431508', 'asdf', 'request_image/677216img.png', 2, '2021-08-28');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `STATE_ID` int(11) NOT NULL,
  `STATE_NAME` varchar(150) NOT NULL,
  `COUNTRY_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`STATE_ID`, `STATE_NAME`, `COUNTRY_ID`) VALUES
(1, 'Tamilnadu', 1),
(2, 'Kerala', 1),
(3, 'Andra Pradesh', 1),
(4, 'Arunacha Pradesh', 1),
(5, 'Assam', 1),
(6, 'Bihar', 1),
(7, 'Chhattisgarh', 1),
(8, 'Goa', 1),
(9, 'Gujarat', 1),
(10, 'Haryana', 1),
(11, 'Himachal Pradesh', 1),
(12, 'Jammu And Kashmir', 1),
(13, 'Jharkhand', 1),
(14, 'Karnataka', 1),
(15, 'Madya Pradesh', 1),
(16, 'Maharashtra', 1),
(17, 'Manipur', 1),
(18, 'Meghalaya', 1),
(19, 'Mizoram', 1),
(20, 'Nagaland', 1),
(21, 'Orissa', 1),
(22, 'Punjab', 1),
(23, 'Rajasthan', 1),
(24, 'sikkim', 1),
(25, 'Tripura', 1),
(26, 'Uttaranchal', 1),
(27, 'Utter Pradesh', 1),
(28, 'West Bengal', 1),
(29, 'Andaman and Nicobar Islands', 1),
(30, 'Chandigarh ', 1),
(31, 'Daddy and Nagar Haveli', 1),
(32, 'Daman and Diu', 1),
(33, 'Delhi', 1),
(34, 'Lakshadweep', 1),
(35, 'Puducherry', 1),
(36, 'Telangana', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`AREA_ID`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`BLOOD_ID`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`DONOR_ID`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CITY_ID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`COUNTRY_ID`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demail` (`demail`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemail` (`pemail`);

--
-- Indexes for table `request_blood`
--
ALTER TABLE `request_blood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`STATE_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `AREA_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=393;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `BLOOD_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `DONOR_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CITY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `COUNTRY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `request_blood`
--
ALTER TABLE `request_blood`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `STATE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
