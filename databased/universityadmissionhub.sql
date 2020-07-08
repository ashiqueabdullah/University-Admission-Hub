-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 08:04 PM
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

--
-- Dumping data for table `addmisson`
--

INSERT INTO `addmisson` (`addmissonId`, `studentId`, `universityId`, `statuss`, `dates`, `times`, `unitId`, `qutaId`, `results`) VALUES
(1, 86, 18, 0, '2020-06-19', '09:36:47', 2, 42, 1),
(5, 86, 18, 0, '2020-06-20', '01:00:43', 3, 0, NULL),
(6, 86, 18, 0, '2020-06-20', '01:01:14', 4, 42, NULL),
(7, 95, 26, 1, '2020-07-03', '05:15:50', 5, 43, NULL);

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
-- Table structure for table `chatwith`
--

CREATE TABLE `chatwith` (
  `chatwithId` int(11) NOT NULL,
  `name` int(11) DEFAULT NULL,
  `amike` int(11) DEFAULT NULL,
  `times` time DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `msz` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatwith`
--

INSERT INTO `chatwith` (`chatwithId`, `name`, `amike`, `times`, `dates`, `msz`) VALUES
(103, 50, 110, '05:07:14', '2020-07-06', 'okay'),
(104, 50, 110, '05:07:24', '2020-07-06', 'start houk'),
(105, 71, 110, '05:07:30', '2020-07-06', 'ji vai '),
(106, 52, 112, '06:07:27', '2020-07-07', 'ke vai '),
(107, 87, 112, '07:07:16', '2020-07-07', 'kene te '),
(108, 88, 52, '07:07:27', '2020-07-07', 'hoise'),
(109, 53, 71, '07:07:43', '2020-07-07', 'apni ke ?'),
(110, 71, 53, '07:07:15', '2020-07-07', 'tumar nana '),
(111, 53, 71, '07:07:28', '2020-07-07', 'accah thik ache '),
(112, 111, 71, '07:07:47', '2020-07-07', 'tumi ni ?');

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
(15, 'CSE', 1, 5, 'CSE'),
(16, 'CSE', 1, 18, 'CSE'),
(17, 'CSE', 1, 26, 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `friedns`
--

CREATE TABLE `friedns` (
  `frinid` int(11) NOT NULL,
  `karsathe` varchar(50) DEFAULT NULL,
  `name` int(11) DEFAULT NULL,
  `amaname` varchar(50) DEFAULT NULL,
  `amarId` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friedns`
--

INSERT INTO `friedns` (`frinid`, `karsathe`, `name`, `amaname`, `amarId`, `date`, `time`) VALUES
(687, 'admin', 71, 'university', 51, '2020-07-07', '04:07:32'),
(689, 'admin', 71, 'university', 52, '2020-07-07', '04:07:50'),
(690, 'university', 52, 'admin', 71, '2020-07-07', '04:07:50'),
(691, 'university', 52, 'university', 53, '2020-07-07', '04:07:22'),
(692, 'university', 53, 'university', 52, '2020-07-07', '04:07:22'),
(693, 'admin', 71, 'university', 53, '2020-07-07', '04:07:22'),
(694, 'university', 53, 'admin', 71, '2020-07-07', '04:07:22'),
(695, 'university', 52, 'student', 111, '2020-07-07', '04:07:26'),
(696, 'student', 111, 'university', 52, '2020-07-07', '04:07:26'),
(697, 'university', 53, 'student', 111, '2020-07-07', '04:07:26'),
(698, 'student', 111, 'university', 53, '2020-07-07', '04:07:26'),
(699, 'admin', 71, 'student', 111, '2020-07-07', '04:07:26'),
(700, 'student', 111, 'admin', 71, '2020-07-07', '04:07:26'),
(701, 'university', 52, 'student', 112, '2020-07-07', '04:07:24'),
(702, 'student', 112, 'university', 52, '2020-07-07', '04:07:24'),
(703, 'university', 53, 'student', 112, '2020-07-07', '04:07:24'),
(704, 'student', 112, 'university', 53, '2020-07-07', '04:07:24'),
(705, 'admin', 71, 'student', 112, '2020-07-07', '04:07:25'),
(706, 'student', 112, 'admin', 71, '2020-07-07', '04:07:25'),
(707, 'university', 52, 'adminModarator', 87, '2020-07-07', '04:07:36'),
(708, 'adminModarator', 87, 'university', 52, '2020-07-07', '04:07:36'),
(709, 'university', 53, 'adminModarator', 87, '2020-07-07', '04:07:36'),
(710, 'adminModarator', 87, 'university', 53, '2020-07-07', '04:07:36'),
(711, 'student', 111, 'adminModarator', 87, '2020-07-07', '04:07:36'),
(712, 'adminModarator', 87, 'student', 111, '2020-07-07', '04:07:36'),
(713, 'student', 112, 'adminModarator', 87, '2020-07-07', '04:07:36'),
(714, 'adminModarator', 87, 'student', 112, '2020-07-07', '04:07:36'),
(715, 'university', 52, 'admin', 88, '2020-07-07', '04:07:05'),
(716, 'admin', 88, 'university', 52, '2020-07-07', '04:07:05'),
(717, 'university', 53, 'admin', 88, '2020-07-07', '04:07:06'),
(718, 'admin', 88, 'university', 53, '2020-07-07', '04:07:06'),
(719, 'student', 111, 'admin', 88, '2020-07-07', '04:07:06'),
(720, 'admin', 88, 'student', 111, '2020-07-07', '04:07:06'),
(721, 'student', 112, 'admin', 88, '2020-07-07', '04:07:06'),
(722, 'admin', 88, 'student', 112, '2020-07-07', '04:07:06'),
(723, 'student', 111, 'universityModarator', 89, '2020-07-07', '05:07:52'),
(724, 'universityModarator', 89, 'student', 111, '2020-07-07', '05:07:52'),
(725, 'student', 112, 'universityModarator', 89, '2020-07-07', '05:07:52'),
(726, 'universityModarator', 89, 'student', 112, '2020-07-07', '05:07:52'),
(727, 'admin', 71, 'universityModarator', 89, '2020-07-07', '05:07:52'),
(728, 'universityModarator', 89, 'admin', 71, '2020-07-07', '05:07:52'),
(729, 'adminModarator', 87, 'universityModarator', 89, '2020-07-07', '05:07:52'),
(730, 'universityModarator', 89, 'adminModarator', 87, '2020-07-07', '05:07:52'),
(731, 'admin', 88, 'universityModarator', 89, '2020-07-07', '05:07:52'),
(732, 'universityModarator', 89, 'admin', 88, '2020-07-07', '05:07:52'),
(733, 'universityModarator', 89, 'universityModarator', 89, '2020-07-07', '05:07:52'),
(734, 'universityModarator', 89, 'universityModarator', 89, '2020-07-07', '05:07:52'),
(735, 'student', 111, 'universityAdmin', 90, '2020-07-07', '05:07:33'),
(736, 'universityAdmin', 90, 'student', 111, '2020-07-07', '05:07:33'),
(737, 'student', 112, 'universityAdmin', 90, '2020-07-07', '05:07:33'),
(738, 'universityAdmin', 90, 'student', 112, '2020-07-07', '05:07:33'),
(739, 'admin', 71, 'universityAdmin', 90, '2020-07-07', '05:07:33'),
(740, 'universityAdmin', 90, 'admin', 71, '2020-07-07', '05:07:33'),
(741, 'adminModarator', 87, 'universityAdmin', 90, '2020-07-07', '05:07:33'),
(742, 'universityAdmin', 90, 'adminModarator', 87, '2020-07-07', '05:07:33'),
(743, 'admin', 88, 'universityAdmin', 90, '2020-07-07', '05:07:33'),
(744, 'universityAdmin', 90, 'admin', 88, '2020-07-07', '05:07:33'),
(745, 'universityModarator', 89, 'universityModarator', 90, '2020-07-07', '05:07:33'),
(746, 'universityModarator', 90, 'universityModarator', 89, '2020-07-07', '05:07:33'),
(747, 'universityAdmin', 90, 'universityAdmin', 90, '2020-07-07', '05:07:33'),
(748, 'universityAdmin', 90, 'universityAdmin', 90, '2020-07-07', '05:07:33');

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
  `types` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `adminId` int(11) DEFAULT NULL,
  `online` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `modarator`
--

INSERT INTO `modarator` (`morId`, `name`, `uniid`, `adress`, `email`, `pass`, `img`, `status`, `phone`, `types`, `city`, `zip`, `adminId`, `online`) VALUES
(71, 'Admin', NULL, NULL, 'admin@gmail.com', '1234', 'TradingBG3.jpg', 1, NULL, 'Admin', NULL, NULL, 1, 'offline'),
(87, 'Kashem', NULL, 'House 29, Rajar Golli Sylhet', 'admin1@gmail.com', '1234', 'adminmodarator1.jpg', 1, '01745610313', 'Modarator', 'Sylhet', '3100', 71, 'Online'),
(88, 'Badsha', NULL, 'House 29, Rajar Golli Sylhet', 'admin2@gmail.com', '1234', 'adminmodarator1.jpg', 1, '01745610313', 'Admin', 'Sylhet', '3100', 71, 'Online'),
(89, 'Halima', 52, 'House 29, Rajar Golli Sylhet', 'admin3@gmail.com', '1234', 'universitymodarator.jpg', 0, '+8801745610313', 'Modarator', 'Sylhet', '3100', NULL, 'Online'),
(90, 'Ashique Abdullah', 52, 'House 29, Rajar Golli Sylhet', 'admi42@gmail.com', '1234', 'universitymodarator.jpg', 0, '+8801745610313', 'Admin', 'Sylhet', '3100', NULL, 'Online');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `noticeId` int(11) NOT NULL,
  `noticeTitle` longtext DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `times` time DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `whome` varchar(50) DEFAULT NULL,
  `whoAdd` varchar(50) DEFAULT NULL,
  `noticeMessage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeId`, `noticeTitle`, `file`, `author`, `dates`, `times`, `statuss`, `whome`, `whoAdd`, `noticeMessage`) VALUES
(81, 'Yellow Leads Extractor 6.9.0 Patch - Windows Activation Key', '', '18', '2020-07-05', '06:03:37', 1, 'Both', 'Admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(82, 'Yellow Leads Extractor 6.9.0 Patch - Windows Activation Key', '', '18', '2020-07-05', '06:03:43', 1, 'Both', 'Admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(83, 'Yellow Leads Extractor 6.9.0 Patch - Windows Activation Key', '', '18', '2020-07-05', '06:03:56', 1, 'Both', 'Admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(84, 'Yellow Leads Extractor 6.9.0 Patch - Windows Activation Key', '', '18', '2020-07-05', '06:05:27', 1, 'Both', 'Admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(85, 'Yellow Leads Extractor 6.9.0 Patch - Windows Activation Key', '', '18', '2020-07-05', '06:06:04', 1, 'Both', 'Admin', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'),
(86, 'Yellow Leads Extractor 6.9.0 Patch - Windows Activation Key', '', '26', '2020-07-05', '07:43:43', 0, '0', 'University', 'as');

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
-- Table structure for table `seet`
--

CREATE TABLE `seet` (
  `seatId` int(11) NOT NULL,
  `numberOfSet` int(11) DEFAULT NULL,
  `deptname` varchar(50) DEFAULT NULL,
  `unitname` varchar(50) DEFAULT NULL,
  `ubiversityId` int(11) DEFAULT NULL,
  `statuss` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `sscRoll` int(11) DEFAULT NULL,
  `sscRgNumber` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `online` varchar(50) DEFAULT NULL,
  `hscRoll` int(11) DEFAULT NULL,
  `hscRgNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_one`
--

INSERT INTO `student_one` (`studentId`, `fname`, `lname`, `dateOfbirth`, `gender`, `phone`, `sscRoll`, `sscRgNumber`, `email`, `pass`, `online`, `hscRoll`, `hscRgNumber`) VALUES
(111, 'Ashique', 'Abdullah', '2020-07-07', 0, 2147483647, 2147483647, 2147483647, 'ashique@gmail.com', '1234', NULL, 2147483647, 2147483647),
(112, 'Halima', 'Abdullah', '2020-07-07', 0, 2147483647, 2147483647, 2147483647, 'sidra@gmail.com', '1234', NULL, 2147483647, 2147483647);

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
(109, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 111, NULL, 0, NULL),
(110, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 112, NULL, 0, NULL);

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
-- Table structure for table `unitanddepert`
--

CREATE TABLE `unitanddepert` (
  `unitDeptId` int(11) NOT NULL,
  `unitId` int(11) DEFAULT NULL,
  `deptname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unitandsubject`
--

CREATE TABLE `unitandsubject` (
  `unitSubId` int(11) NOT NULL,
  `unitId` int(11) DEFAULT NULL,
  `subName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `city` varchar(50) DEFAULT NULL,
  `zip` varchar(50) DEFAULT NULL,
  `pohne` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `statuss` int(11) DEFAULT NULL,
  `hold` int(11) DEFAULT NULL,
  `online` varchar(50) DEFAULT NULL,
  `lat` double DEFAULT NULL,
  `lng` double DEFAULT NULL,
  `single` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`universityId`, `universityName`, `universityCode`, `universityImg`, `division`, `city`, `zip`, `pohne`, `email`, `pass`, `statuss`, `hold`, `online`, `lat`, `lng`, `single`) VALUES
(52, 'North east University Bangladesh', '120', 'neub.jpg', 'Sylhet', 'Sylhet', '3100', '01745610313', 'neub@gmail.com', 'neub', 0, 0, 'offline', 24.8901, 91.861, 'sig.png'),
(53, 'shahjalal university of science and technology', '120', 'shajalal.jpeg', 'Sylhet', 'Sylhet', '3100', '+8801745610313', 'sust@gmail.com', 'sust', 0, 0, 'offline', 24.9172, 91.8319, 'sig.png');

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
-- Indexes for table `chatwith`
--
ALTER TABLE `chatwith`
  ADD PRIMARY KEY (`chatwithId`);

--
-- Indexes for table `depertment`
--
ALTER TABLE `depertment`
  ADD PRIMARY KEY (`depertmentId`);

--
-- Indexes for table `friedns`
--
ALTER TABLE `friedns`
  ADD PRIMARY KEY (`frinid`);

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
-- Indexes for table `seet`
--
ALTER TABLE `seet`
  ADD PRIMARY KEY (`seatId`);

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
-- Indexes for table `unitanddepert`
--
ALTER TABLE `unitanddepert`
  ADD PRIMARY KEY (`unitDeptId`);

--
-- Indexes for table `unitandsubject`
--
ALTER TABLE `unitandsubject`
  ADD PRIMARY KEY (`unitSubId`);

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
  MODIFY `addmissonId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatwith`
--
ALTER TABLE `chatwith`
  MODIFY `chatwithId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `depertment`
--
ALTER TABLE `depertment`
  MODIFY `depertmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `friedns`
--
ALTER TABLE `friedns`
  MODIFY `frinid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=749;

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
  MODIFY `morId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  MODIFY `payId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `quotaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
-- AUTO_INCREMENT for table `seet`
--
ALTER TABLE `seet`
  MODIFY `seatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_one`
--
ALTER TABLE `student_one`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `student_two`
--
ALTER TABLE `student_two`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `student_verift`
--
ALTER TABLE `student_verift`
  MODIFY `stdVId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `uniId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `unitanddepert`
--
ALTER TABLE `unitanddepert`
  MODIFY `unitDeptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `unitandsubject`
--
ALTER TABLE `unitandsubject`
  MODIFY `unitSubId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `universityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

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
