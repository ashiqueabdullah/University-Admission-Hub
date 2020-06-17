-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2020 at 06:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universityadmissionhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmisson`
--

CREATE TABLE `addmisson` (
  `addmissonId` int(11) NOT NULL,
  `studentId` int(11) DEFAULT NULL,
  `universityId` int(11) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `times` time DEFAULT NULL,
  `unitId` int(11) DEFAULT NULL,
  `qutaId` int(11) DEFAULT NULL,
  `results` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminName` varchar(50) DEFAULT NULL,
  `adminPass` varchar(50) DEFAULT NULL,
  `emial` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `adminstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admincard`
--

CREATE TABLE `admincard` (
  `admitcardId` int(11) NOT NULL,
  `admitpdf` varchar(50) DEFAULT NULL,
  `admitcardstatus` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `depertment`
--

CREATE TABLE `depertment` (
  `depertmentId` int(11) NOT NULL,
  `depertmentName` varchar(50) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `depertshortname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `depertment`
--

INSERT INTO `depertment` (`depertmentId`, `depertmentName`, `statuss`, `uid`, `depertshortname`) VALUES
(9, 'Computer', 0, 5, 'CSE'),
(10, 'BBA', 0, 5, 'BBA'),
(11, 'LAW', 0, 5, 'LAW'),
(12, 'EEE', 0, 5, 'EEE'),
(13, 'CE', 0, 5, 'CE'),
(14, 'MSE', 0, 5, 'MSE'),
(15, 'CSE', 1, 5, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `info` int(11) NOT NULL,
  `depertmentId` int(11) DEFAULT NULL,
  `instructionId` int(11) DEFAULT NULL,
  `quotaId` int(11) DEFAULT NULL,
  `quotaSeat` int(11) DEFAULT NULL,
  `groups` varchar(50) DEFAULT NULL,
  `requermentId` int(11) DEFAULT NULL,
  `uniId` int(11) DEFAULT NULL,
  `universityId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instruction`
--

CREATE TABLE `instruction` (
  `instructionId` int(11) NOT NULL,
  `examTime` time DEFAULT NULL,
  `secondChance` int(11) DEFAULT NULL,
  `examType` varchar(50) DEFAULT NULL,
  `registationFee` double DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `modarator`
--

CREATE TABLE `modarator` (
  `morId` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `uniid` int(11) DEFAULT NULL,
  `adress` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `types` int(11) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `adminId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modarator`
--

INSERT INTO `modarator` (`morId`, `name`, `uniid`, `adress`, `email`, `pass`, `img`, `status`, `phone`, `types`, `city`, `zip`, `adminId`) VALUES
(17, 'Ashique', NULL, 'House 29, Rajar Golli Sylhet', 'admin@gmail.com', '1234', '8347420_1583619553966shutterstock_425107399_1.webp', 1, '01745610313', 1, 'Sylhet', '3100', 1),
(18, 'Shoiab Ibne ', NULL, 'House 29, Rajar Golli Sylhet', 'admin@gmail.com', '1234', 'ezgif.com-webp-to-png.png', 1, '01745610313', 1, 'Sylhet', '3100', 1),
(23, 'Ashique Abdullah', NULL, 'House 29, Rajar Golli Sylhet', 'admin@gmail.com', '1234', 'Screenshot_5.png', 1, '01745610313', 0, 'Sylhet', '3100', 17),
(28, 'a', 5, 'as@gmail.com', 'asd@gmail.com', '1234', 'Screenshot_5.png', 1, 'a', 1, 'Sylhet', 'as', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeId` int(11) NOT NULL,
  `noticeTitle` longtext DEFAULT NULL,
  `noticeMessage` mediumtext DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `times` time DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `whome` int(50) DEFAULT NULL,
  `whoAdd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeId`, `noticeTitle`, `noticeMessage`, `file`, `author`, `dates`, `times`, `statuss`, `whome`, `whoAdd`) VALUES
(71, 'asd', 'asd', '', '5', '2020-04-19', '04:51:04', 1, 0, 1),
(72, 'asd', 'asd', '', '5', '2020-04-19', '04:52:23', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paymenthistory`
--

CREATE TABLE `paymenthistory` (
  `payId` int(11) NOT NULL,
  `amount` double DEFAULT NULL,
  `phoneN` varchar(50) DEFAULT NULL,
  `txtId` varchar(50) DEFAULT NULL,
  `reDate` date DEFAULT NULL,
  `reTime` time DEFAULT NULL,
  `stId` int(11) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `method` varchar(50) DEFAULT NULL,
  `banksrecipt` varchar(50) DEFAULT NULL,
  `depositname` varchar(50) DEFAULT NULL,
  `nidOrphone` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymenthistory`
--

INSERT INTO `paymenthistory` (`payId`, `amount`, `phoneN`, `txtId`, `reDate`, `reTime`, `stId`, `statuss`, `method`, `banksrecipt`, `depositname`, `nidOrphone`) VALUES
(9, 0, '', '', '2020-04-13', '04:09:51', 59, 1, 'Bkash', NULL, NULL, NULL),
(10, 146235, '01745610313', 'A4D5F', '2020-04-13', '04:10:29', 59, 0, 'Rocket', NULL, NULL, NULL),
(11, 14562, NULL, NULL, '2020-04-13', '04:10:55', 59, 2, 'Bank', 'Screenshot_11.png', 'Ashique', '1456321'),
(12, 10, NULL, NULL, '2020-04-13', '04:12:09', 59, 1, 'Bank', 'Screenshot_3.png', 'asd', '01745610313');

-- --------------------------------------------------------

--
-- Table structure for table `quota`
--

CREATE TABLE `quota` (
  `quotaId` int(11) NOT NULL,
  `quotaName` varchar(50) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `soutaseat` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quota`
--

INSERT INTO `quota` (`quotaId`, `quotaName`, `statuss`, `soutaseat`, `uid`) VALUES
(35, '', 0, 0, 0),
(36, 'as', 0, 0, 0),
(37, 'as', 0, 0, 0),
(38, 'as', 0, 0, 5),
(39, 'as', 0, 0, 5),
(40, 'as', 0, 0, 5),
(41, 'as', 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `requerment`
--

CREATE TABLE `requerment` (
  `requermentId` int(11) NOT NULL,
  `sscGpa` double DEFAULT NULL,
  `hscGpa` double DEFAULT NULL,
  `sscHscAvrage` double DEFAULT NULL,
  `withFourth` int(11) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `resultId` int(11) NOT NULL,
  `resultStatus` int(11) DEFAULT NULL,
  `resultPosition` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_one`
--

CREATE TABLE `student_one` (
  `studentId` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `dateOfbirth` date DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `postCode` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_one`
--

INSERT INTO `student_one` (`studentId`, `fname`, `lname`, `dateOfbirth`, `gender`, `phone`, `address`, `postCode`, `email`, `pass`) VALUES
(58, 'Ashique', 'Abdullah', '2020-04-10', 0, 1745610313, 'House 29, Rajar Golli Sylhet', '3100', 'eaadm03@gmail.com', '1234'),
(59, 'Ashique', 'Abdullah', '2020-04-17', 0, 1745610313, 'House 29, Rajar Golli Sylhet', '3100', 'eaadm02@gmail.com', '1234'),
(60, 'Ashique', 'Abdullah', '2020-04-16', 0, 1745610313, 'House 29, Rajar Golli Sylhet', '3100', 'eaadm04@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `student_two`
--

CREATE TABLE `student_two` (
  `student_id` int(11) NOT NULL,
  `nationality` varchar(50) DEFAULT NULL,
  `placeOfBirthDistrict` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `married` varchar(50) DEFAULT NULL,
  `BloodGroup` varchar(50) DEFAULT NULL,
  `ParmanentAddress` varchar(50) DEFAULT NULL,
  `ParmanentDivision` varchar(50) DEFAULT NULL,
  `ParmanentZipCode` varchar(50) DEFAULT NULL,
  `ParmanentDistrict` varchar(50) DEFAULT NULL,
  `ParmanentCity` varchar(50) DEFAULT NULL,
  `fatherName` varchar(50) DEFAULT NULL,
  `fatherOccipation` varchar(50) DEFAULT NULL,
  `fatherAddress` varchar(50) NOT NULL,
  `fatherPhone` varchar(50) DEFAULT NULL,
  `fatherEmail` varchar(50) DEFAULT NULL,
  `motherName` varchar(50) DEFAULT NULL,
  `motherOccipation` varchar(50) DEFAULT NULL,
  `motherAddress` varchar(50) NOT NULL,
  `motherPhone` varchar(50) DEFAULT NULL,
  `motherEmail` varchar(50) DEFAULT NULL,
  `nameOfLocalGuardian` varchar(50) DEFAULT NULL,
  `relationshipOfLocalGuardian` varchar(50) DEFAULT NULL,
  `addressOfLocalGuardian` varchar(50) DEFAULT NULL,
  `phoneOfLocalGuardian` varchar(50) DEFAULT NULL,
  `emailOfLocalGuardian` varchar(50) DEFAULT NULL,
  `emergencyPersonName` varchar(50) DEFAULT NULL,
  `emergencyPersonRelationshipe` varchar(50) DEFAULT NULL,
  `emergencyPersonAddress` varchar(50) DEFAULT NULL,
  `emergencyPersonPhone` varchar(50) DEFAULT NULL,
  `emergencyPersonEmail` varchar(50) DEFAULT NULL,
  `personPayTheFeeName` varchar(50) DEFAULT NULL,
  `personPayTheFeeRealtion` varchar(50) DEFAULT NULL,
  `personPayTheFeeAddress` varchar(50) DEFAULT NULL,
  `personPayTheFeePhone` varchar(50) DEFAULT NULL,
  `personPayTheFeeEmail` varchar(50) DEFAULT NULL,
  `personPayTheFeeAnnualIncome` varchar(50) DEFAULT NULL,
  `sat` varchar(50) DEFAULT NULL,
  `satDate` date DEFAULT NULL,
  `ielts` varchar(50) DEFAULT NULL,
  `ieltsDate` date DEFAULT NULL,
  `tofel` varchar(50) DEFAULT NULL,
  `tofelDate` varchar(50) DEFAULT NULL,
  `gmat` varchar(50) DEFAULT NULL,
  `gmatDate` date DEFAULT NULL,
  `sscInstituteName` varchar(50) DEFAULT NULL,
  `sscBordeName` varchar(50) DEFAULT NULL,
  `sscGpa` varchar(50) DEFAULT NULL,
  `sscpassingYear` varchar(50) DEFAULT NULL,
  `sscCertificate` varchar(50) DEFAULT NULL,
  `hscInstituteName` varchar(50) DEFAULT NULL,
  `hscBordeName` varchar(50) DEFAULT NULL,
  `hscGpa` varchar(50) DEFAULT NULL,
  `hscpassingYear` varchar(50) DEFAULT NULL,
  `hscCertificate` varchar(50) DEFAULT NULL,
  `std_one` int(11) DEFAULT NULL,
  `balace` double DEFAULT NULL,
  `satuss` int(11) DEFAULT NULL,
  `hold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_two`
--

INSERT INTO `student_two` (`student_id`, `nationality`, `placeOfBirthDistrict`, `image`, `married`, `BloodGroup`, `ParmanentAddress`, `ParmanentDivision`, `ParmanentZipCode`, `ParmanentDistrict`, `ParmanentCity`, `fatherName`, `fatherOccipation`, `fatherAddress`, `fatherPhone`, `fatherEmail`, `motherName`, `motherOccipation`, `motherAddress`, `motherPhone`, `motherEmail`, `nameOfLocalGuardian`, `relationshipOfLocalGuardian`, `addressOfLocalGuardian`, `phoneOfLocalGuardian`, `emailOfLocalGuardian`, `emergencyPersonName`, `emergencyPersonRelationshipe`, `emergencyPersonAddress`, `emergencyPersonPhone`, `emergencyPersonEmail`, `personPayTheFeeName`, `personPayTheFeeRealtion`, `personPayTheFeeAddress`, `personPayTheFeePhone`, `personPayTheFeeEmail`, `personPayTheFeeAnnualIncome`, `sat`, `satDate`, `ielts`, `ieltsDate`, `tofel`, `tofelDate`, `gmat`, `gmatDate`, `sscInstituteName`, `sscBordeName`, `sscGpa`, `sscpassingYear`, `sscCertificate`, `hscInstituteName`, `hscBordeName`, `hscGpa`, `hscpassingYear`, `hscCertificate`, `std_one`, `balace`, `satuss`, `hold`) VALUES
(56, NULL, NULL, 'received_580735252507091.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 58, NULL, 2, 0),
(57, '', 'Chittagong', 'received_580735252507091.png', 'one', 'a+', '', 'Dhaka', '', 'Chittagong', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 59, NULL, 2, 0),
(58, NULL, NULL, 'received_580735252507091.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 60, NULL, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_verift`
--

CREATE TABLE `student_verift` (
  `stdVId` int(11) NOT NULL,
  `admin_Id` int(11) DEFAULT NULL,
  `stundent_Id` int(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `times` time DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subjectId` int(11) NOT NULL,
  `subjectname` varchar(50) DEFAULT NULL,
  `subjectMark` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjectId`, `subjectname`, `subjectMark`, `uid`, `statuss`) VALUES
(7, 'Bangla', 10, 5, 0),
(8, 'English', 10, 5, 0),
(9, 'Physic', 10, 5, 0),
(10, 'Math ', 10, 5, 0),
(11, 'Chemistry', 10, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `uniId` int(11) NOT NULL,
  `unitName` varchar(50) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `minSSCGpa` double DEFAULT NULL,
  `minHSCGpa` double DEFAULT NULL,
  `TotalGpa` double DEFAULT NULL,
  `sscReguler` double DEFAULT NULL,
  `sscIreg` double DEFAULT NULL,
  `hscReg` double DEFAULT NULL,
  `hscIreg` double DEFAULT NULL,
  `allow` varchar(50) DEFAULT NULL,
  `examDuration` time DEFAULT NULL,
  `notes` longtext DEFAULT NULL,
  `universityId` int(11) DEFAULT NULL,
  `groups` varchar(50) DEFAULT NULL,
  `admsFee` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `universityId` int(11) NOT NULL,
  `universityName` varchar(50) DEFAULT NULL,
  `universityCode` varchar(50) DEFAULT NULL,
  `universityImg` varchar(50) DEFAULT NULL,
  `division` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `pohne` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `hold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`universityId`, `universityName`, `universityCode`, `universityImg`, `division`, `district`, `city`, `zip`, `pohne`, `email`, `pass`, `statuss`, `hold`) VALUES
(5, 'neub', '10', 'Screenshot_5.png', 'Dhaka', 'bangladesh', 'Sylhet', '3100', '10', 'neub@gmail.com', '1234', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `university_verift`
--

CREATE TABLE `university_verift` (
  `uniV_Id` int(11) NOT NULL,
  `admin_id` int(11) DEFAULT NULL,
  `uni_Id` int(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `times` time DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addmisson`
--
ALTER TABLE `addmisson`
  ADD PRIMARY KEY (`addmissonId`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `admincard`
--
ALTER TABLE `admincard`
  ADD PRIMARY KEY (`admitcardId`);

--
-- Indexes for table `depertment`
--
ALTER TABLE `depertment`
  ADD PRIMARY KEY (`depertmentId`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`info`),
  ADD KEY `depertmentId` (`depertmentId`),
  ADD KEY `instructionId` (`instructionId`),
  ADD KEY `quotaId` (`quotaId`),
  ADD KEY `requermentId` (`requermentId`),
  ADD KEY `uniId` (`uniId`),
  ADD KEY `universityId` (`universityId`);

--
-- Indexes for table `instruction`
--
ALTER TABLE `instruction`
  ADD PRIMARY KEY (`instructionId`);

--
-- Indexes for table `modarator`
--
ALTER TABLE `modarator`
  ADD PRIMARY KEY (`morId`),
  ADD KEY `admindId` (`uniid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`noticeId`);

--
-- Indexes for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD PRIMARY KEY (`payId`),
  ADD KEY `stId` (`stId`);

--
-- Indexes for table `quota`
--
ALTER TABLE `quota`
  ADD PRIMARY KEY (`quotaId`);

--
-- Indexes for table `requerment`
--
ALTER TABLE `requerment`
  ADD PRIMARY KEY (`requermentId`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`resultId`);

--
-- Indexes for table `student_one`
--
ALTER TABLE `student_one`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `student_two`
--
ALTER TABLE `student_two`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `std_one` (`std_one`);

--
-- Indexes for table `student_verift`
--
ALTER TABLE `student_verift`
  ADD PRIMARY KEY (`stdVId`),
  ADD KEY `stundent_Id` (`stundent_Id`),
  ADD KEY `admin_Id` (`admin_Id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subjectId`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`uniId`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`universityId`);

--
-- Indexes for table `university_verift`
--
ALTER TABLE `university_verift`
  ADD PRIMARY KEY (`uniV_Id`),
  ADD KEY `uni_Id` (`uni_Id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addmisson`
--
ALTER TABLE `addmisson`
  MODIFY `addmissonId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admincard`
--
ALTER TABLE `admincard`
  MODIFY `admitcardId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `depertment`
--
ALTER TABLE `depertment`
  MODIFY `depertmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `info` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instruction`
--
ALTER TABLE `instruction`
  MODIFY `instructionId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `modarator`
--
ALTER TABLE `modarator`
  MODIFY `morId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  MODIFY `payId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `quotaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `requerment`
--
ALTER TABLE `requerment`
  MODIFY `requermentId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `resultId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_one`
--
ALTER TABLE `student_one`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `student_two`
--
ALTER TABLE `student_two`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `student_verift`
--
ALTER TABLE `student_verift`
  MODIFY `stdVId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `uniId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `universityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `university_verift`
--
ALTER TABLE `university_verift`
  MODIFY `uniV_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `information`
--
ALTER TABLE `information`
  ADD CONSTRAINT `information_ibfk_1` FOREIGN KEY (`depertmentId`) REFERENCES `depertment` (`depertmentId`),
  ADD CONSTRAINT `information_ibfk_2` FOREIGN KEY (`instructionId`) REFERENCES `instruction` (`instructionId`),
  ADD CONSTRAINT `information_ibfk_3` FOREIGN KEY (`quotaId`) REFERENCES `quota` (`quotaId`),
  ADD CONSTRAINT `information_ibfk_4` FOREIGN KEY (`requermentId`) REFERENCES `requerment` (`requermentId`),
  ADD CONSTRAINT `information_ibfk_5` FOREIGN KEY (`uniId`) REFERENCES `unit` (`uniId`),
  ADD CONSTRAINT `information_ibfk_6` FOREIGN KEY (`universityId`) REFERENCES `university` (`universityId`);

--
-- Constraints for table `modarator`
--
ALTER TABLE `modarator`
  ADD CONSTRAINT `modarator_ibfk_1` FOREIGN KEY (`uniid`) REFERENCES `university` (`universityId`);

--
-- Constraints for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  ADD CONSTRAINT `paymenthistory_ibfk_1` FOREIGN KEY (`stId`) REFERENCES `student_one` (`studentId`);

--
-- Constraints for table `student_two`
--
ALTER TABLE `student_two`
  ADD CONSTRAINT `student_two_ibfk_1` FOREIGN KEY (`std_one`) REFERENCES `student_one` (`studentId`);

--
-- Constraints for table `student_verift`
--
ALTER TABLE `student_verift`
  ADD CONSTRAINT `student_verift_ibfk_1` FOREIGN KEY (`stundent_Id`) REFERENCES `student_one` (`studentId`),
  ADD CONSTRAINT `student_verift_ibfk_2` FOREIGN KEY (`admin_Id`) REFERENCES `admin` (`adminId`);

--
-- Constraints for table `university_verift`
--
ALTER TABLE `university_verift`
  ADD CONSTRAINT `university_verift_ibfk_1` FOREIGN KEY (`uni_Id`) REFERENCES `university` (`universityId`),
  ADD CONSTRAINT `university_verift_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`adminId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
