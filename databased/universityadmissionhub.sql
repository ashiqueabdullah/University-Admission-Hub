-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 07:16 AM
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
(16, 132, 61, 1, '2020-07-08', '09:44:41', 8, 46, 1),
(17, 132, 61, 0, '2020-07-09', '06:43:20', 9, 46, 0),
(18, 132, 61, 0, '2020-07-09', '06:43:41', 10, 46, 0);

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
(118, 61, 71, '09:07:37', '2020-07-08', 'Education is an art of life which makes our'),
(119, 62, 71, '09:07:49', '2020-07-08', 'Education is very important for all of us. '),
(120, 135, 71, '09:07:55', '2020-07-08', 'Education is very important for all of us. '),
(121, 134, 71, '09:07:59', '2020-07-08', 'Education is very important for all of us. '),
(122, 71, 61, '09:07:46', '2020-07-08', 'hmm shob bujcih');

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
(20, 'Computer Science Engineering', 1, 61, 'CSE'),
(21, 'Department of Islamic History & culture', 1, 61, 'IH'),
(22, 'Department of Political science', 1, 61, 'PS'),
(23, 'Department of BBA', 1, 61, 'BBA');

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
(987, 'admin', 71, 'student', 132, '2020-07-08', '08:07:29'),
(988, 'student', 132, 'admin', 71, '2020-07-08', '08:07:29'),
(989, 'admin', 71, 'student', 133, '2020-07-08', '08:07:04'),
(990, 'student', 133, 'admin', 71, '2020-07-08', '08:07:04'),
(991, 'admin', 71, 'student', 134, '2020-07-08', '08:07:37'),
(992, 'student', 134, 'admin', 71, '2020-07-08', '08:07:37'),
(993, 'admin', 71, 'student', 135, '2020-07-08', '09:07:15'),
(994, 'student', 135, 'admin', 71, '2020-07-08', '09:07:15'),
(995, 'student', 132, 'university', 61, '2020-07-08', '09:07:59'),
(996, 'university', 61, 'student', 132, '2020-07-08', '09:07:59'),
(997, 'student', 133, 'university', 61, '2020-07-08', '09:07:59'),
(998, 'university', 61, 'student', 133, '2020-07-08', '09:07:59'),
(999, 'student', 134, 'university', 61, '2020-07-08', '09:07:59'),
(1000, 'university', 61, 'student', 134, '2020-07-08', '09:07:59'),
(1001, 'student', 135, 'university', 61, '2020-07-08', '09:07:59'),
(1002, 'university', 61, 'student', 135, '2020-07-08', '09:07:59'),
(1003, 'admin', 71, 'university', 61, '2020-07-08', '09:07:59'),
(1004, 'university', 61, 'admin', 71, '2020-07-08', '09:07:59'),
(1005, 'university', 61, 'university', 62, '2020-07-08', '09:07:43'),
(1006, 'university', 62, 'university', 61, '2020-07-08', '09:07:43'),
(1007, 'student', 132, 'university', 62, '2020-07-08', '09:07:43'),
(1008, 'university', 62, 'student', 132, '2020-07-08', '09:07:43'),
(1009, 'student', 133, 'university', 62, '2020-07-08', '09:07:43'),
(1010, 'university', 62, 'student', 133, '2020-07-08', '09:07:43'),
(1011, 'student', 134, 'university', 62, '2020-07-08', '09:07:43'),
(1012, 'university', 62, 'student', 134, '2020-07-08', '09:07:43'),
(1013, 'student', 135, 'university', 62, '2020-07-08', '09:07:43'),
(1014, 'university', 62, 'student', 135, '2020-07-08', '09:07:43'),
(1015, 'admin', 71, 'university', 62, '2020-07-08', '09:07:43'),
(1016, 'university', 62, 'admin', 71, '2020-07-08', '09:07:43'),
(1017, 'university', 61, 'university', 63, '2020-07-08', '09:07:01'),
(1018, 'university', 63, 'university', 61, '2020-07-08', '09:07:01'),
(1019, 'university', 62, 'university', 63, '2020-07-08', '09:07:01'),
(1020, 'university', 63, 'university', 62, '2020-07-08', '09:07:01'),
(1021, 'student', 132, 'university', 63, '2020-07-08', '09:07:01'),
(1022, 'university', 63, 'student', 132, '2020-07-08', '09:07:01'),
(1023, 'student', 133, 'university', 63, '2020-07-08', '09:07:01'),
(1024, 'university', 63, 'student', 133, '2020-07-08', '09:07:01'),
(1025, 'student', 134, 'university', 63, '2020-07-08', '09:07:01'),
(1026, 'university', 63, 'student', 134, '2020-07-08', '09:07:01'),
(1027, 'student', 135, 'university', 63, '2020-07-08', '09:07:02'),
(1028, 'university', 63, 'student', 135, '2020-07-08', '09:07:02'),
(1029, 'admin', 71, 'university', 63, '2020-07-08', '09:07:02'),
(1030, 'university', 63, 'admin', 71, '2020-07-08', '09:07:02'),
(1031, 'university', 61, 'adminModarator', 94, '2020-07-08', '09:07:24'),
(1032, 'adminModarator', 94, 'university', 61, '2020-07-08', '09:07:24'),
(1033, 'university', 62, 'adminModarator', 94, '2020-07-08', '09:07:24'),
(1034, 'adminModarator', 94, 'university', 62, '2020-07-08', '09:07:24'),
(1035, 'university', 63, 'adminModarator', 94, '2020-07-08', '09:07:24'),
(1036, 'adminModarator', 94, 'university', 63, '2020-07-08', '09:07:24'),
(1037, 'student', 132, 'adminModarator', 94, '2020-07-08', '09:07:25'),
(1038, 'adminModarator', 94, 'student', 132, '2020-07-08', '09:07:25'),
(1039, 'student', 133, 'adminModarator', 94, '2020-07-08', '09:07:25'),
(1040, 'adminModarator', 94, 'student', 133, '2020-07-08', '09:07:25'),
(1041, 'student', 134, 'adminModarator', 94, '2020-07-08', '09:07:25'),
(1042, 'adminModarator', 94, 'student', 134, '2020-07-08', '09:07:25'),
(1043, 'student', 135, 'adminModarator', 94, '2020-07-08', '09:07:25'),
(1044, 'adminModarator', 94, 'student', 135, '2020-07-08', '09:07:25'),
(1045, 'university', 61, 'admin', 95, '2020-07-08', '09:07:10'),
(1046, 'admin', 95, 'university', 61, '2020-07-08', '09:07:10'),
(1047, 'university', 62, 'admin', 95, '2020-07-08', '09:07:10'),
(1048, 'admin', 95, 'university', 62, '2020-07-08', '09:07:10'),
(1049, 'university', 63, 'admin', 95, '2020-07-08', '09:07:10'),
(1050, 'admin', 95, 'university', 63, '2020-07-08', '09:07:10'),
(1051, 'student', 132, 'admin', 95, '2020-07-08', '09:07:10'),
(1052, 'admin', 95, 'student', 132, '2020-07-08', '09:07:10'),
(1053, 'student', 133, 'admin', 95, '2020-07-08', '09:07:10'),
(1054, 'admin', 95, 'student', 133, '2020-07-08', '09:07:10'),
(1055, 'student', 134, 'admin', 95, '2020-07-08', '09:07:10'),
(1056, 'admin', 95, 'student', 134, '2020-07-08', '09:07:10'),
(1057, 'student', 135, 'admin', 95, '2020-07-08', '09:07:11'),
(1058, 'admin', 95, 'student', 135, '2020-07-08', '09:07:11'),
(1059, 'university', 61, 'adminModarator', 96, '2020-07-08', '09:07:56'),
(1060, 'adminModarator', 96, 'university', 61, '2020-07-08', '09:07:56'),
(1061, 'university', 62, 'adminModarator', 96, '2020-07-08', '09:07:56'),
(1062, 'adminModarator', 96, 'university', 62, '2020-07-08', '09:07:56'),
(1063, 'university', 63, 'adminModarator', 96, '2020-07-08', '09:07:56'),
(1064, 'adminModarator', 96, 'university', 63, '2020-07-08', '09:07:56'),
(1065, 'student', 132, 'adminModarator', 96, '2020-07-08', '09:07:57'),
(1066, 'adminModarator', 96, 'student', 132, '2020-07-08', '09:07:57'),
(1067, 'student', 133, 'adminModarator', 96, '2020-07-08', '09:07:57'),
(1068, 'adminModarator', 96, 'student', 133, '2020-07-08', '09:07:57'),
(1069, 'student', 134, 'adminModarator', 96, '2020-07-08', '09:07:57'),
(1070, 'adminModarator', 96, 'student', 134, '2020-07-08', '09:07:57'),
(1071, 'student', 135, 'adminModarator', 96, '2020-07-08', '09:07:57'),
(1072, 'adminModarator', 96, 'student', 135, '2020-07-08', '09:07:57'),
(1073, 'university', 61, 'admin', 97, '2020-07-08', '09:07:08'),
(1074, 'admin', 97, 'university', 61, '2020-07-08', '09:07:08'),
(1075, 'university', 62, 'admin', 97, '2020-07-08', '09:07:08'),
(1076, 'admin', 97, 'university', 62, '2020-07-08', '09:07:08'),
(1077, 'university', 63, 'admin', 97, '2020-07-08', '09:07:08'),
(1078, 'admin', 97, 'university', 63, '2020-07-08', '09:07:08'),
(1079, 'student', 132, 'admin', 97, '2020-07-08', '09:07:08'),
(1080, 'admin', 97, 'student', 132, '2020-07-08', '09:07:08'),
(1081, 'student', 133, 'admin', 97, '2020-07-08', '09:07:08'),
(1082, 'admin', 97, 'student', 133, '2020-07-08', '09:07:08'),
(1083, 'student', 134, 'admin', 97, '2020-07-08', '09:07:08'),
(1084, 'admin', 97, 'student', 134, '2020-07-08', '09:07:08'),
(1085, 'student', 135, 'admin', 97, '2020-07-08', '09:07:09'),
(1086, 'admin', 97, 'student', 135, '2020-07-08', '09:07:09'),
(1087, 'student', 132, 'universityModarator', 98, '2020-07-08', '09:07:41'),
(1088, 'universityModarator', 98, 'student', 132, '2020-07-08', '09:07:41'),
(1089, 'student', 133, 'universityModarator', 98, '2020-07-08', '09:07:41'),
(1090, 'universityModarator', 98, 'student', 133, '2020-07-08', '09:07:41'),
(1091, 'student', 134, 'universityModarator', 98, '2020-07-08', '09:07:41'),
(1092, 'universityModarator', 98, 'student', 134, '2020-07-08', '09:07:41'),
(1093, 'student', 135, 'universityModarator', 98, '2020-07-08', '09:07:41'),
(1094, 'universityModarator', 98, 'student', 135, '2020-07-08', '09:07:41'),
(1095, 'admin', 71, 'universityModarator', 98, '2020-07-08', '09:07:41'),
(1096, 'universityModarator', 98, 'admin', 71, '2020-07-08', '09:07:41'),
(1097, 'adminModarator', 94, 'universityModarator', 98, '2020-07-08', '09:07:42'),
(1098, 'universityModarator', 98, 'adminModarator', 94, '2020-07-08', '09:07:42'),
(1099, 'admin', 95, 'universityModarator', 98, '2020-07-08', '09:07:42'),
(1100, 'universityModarator', 98, 'admin', 95, '2020-07-08', '09:07:42'),
(1101, 'adminModarator', 96, 'universityModarator', 98, '2020-07-08', '09:07:42'),
(1102, 'universityModarator', 98, 'adminModarator', 96, '2020-07-08', '09:07:42'),
(1103, 'admin', 97, 'universityModarator', 98, '2020-07-08', '09:07:42'),
(1104, 'universityModarator', 98, 'admin', 97, '2020-07-08', '09:07:42'),
(1105, 'universityModarator', 98, 'universityModarator', 98, '2020-07-08', '09:07:42'),
(1106, 'universityModarator', 98, 'universityModarator', 98, '2020-07-08', '09:07:42'),
(1107, 'student', 132, 'universityAdmin', 99, '2020-07-08', '09:07:12'),
(1108, 'universityAdmin', 99, 'student', 132, '2020-07-08', '09:07:12'),
(1109, 'student', 133, 'universityAdmin', 99, '2020-07-08', '09:07:12'),
(1110, 'universityAdmin', 99, 'student', 133, '2020-07-08', '09:07:12'),
(1111, 'student', 134, 'universityAdmin', 99, '2020-07-08', '09:07:12'),
(1112, 'universityAdmin', 99, 'student', 134, '2020-07-08', '09:07:12'),
(1113, 'student', 135, 'universityAdmin', 99, '2020-07-08', '09:07:13'),
(1114, 'universityAdmin', 99, 'student', 135, '2020-07-08', '09:07:13'),
(1115, 'admin', 71, 'universityAdmin', 99, '2020-07-08', '09:07:13'),
(1116, 'universityAdmin', 99, 'admin', 71, '2020-07-08', '09:07:13'),
(1117, 'adminModarator', 94, 'universityAdmin', 99, '2020-07-08', '09:07:13'),
(1118, 'universityAdmin', 99, 'adminModarator', 94, '2020-07-08', '09:07:13'),
(1119, 'admin', 95, 'universityAdmin', 99, '2020-07-08', '09:07:13'),
(1120, 'universityAdmin', 99, 'admin', 95, '2020-07-08', '09:07:13'),
(1121, 'adminModarator', 96, 'universityAdmin', 99, '2020-07-08', '09:07:13'),
(1122, 'universityAdmin', 99, 'adminModarator', 96, '2020-07-08', '09:07:13'),
(1123, 'admin', 97, 'universityAdmin', 99, '2020-07-08', '09:07:13'),
(1124, 'universityAdmin', 99, 'admin', 97, '2020-07-08', '09:07:13'),
(1125, 'universityModarator', 98, 'universityModarator', 99, '2020-07-08', '09:07:13'),
(1126, 'universityModarator', 99, 'universityModarator', 98, '2020-07-08', '09:07:13'),
(1127, 'universityAdmin', 99, 'universityAdmin', 99, '2020-07-08', '09:07:13'),
(1128, 'universityAdmin', 99, 'universityAdmin', 99, '2020-07-08', '09:07:13'),
(1129, 'student', 132, 'universityModarator', 100, '2020-07-08', '09:07:00'),
(1130, 'universityModarator', 100, 'student', 132, '2020-07-08', '09:07:00'),
(1131, 'student', 133, 'universityModarator', 100, '2020-07-08', '09:07:00'),
(1132, 'universityModarator', 100, 'student', 133, '2020-07-08', '09:07:00'),
(1133, 'student', 134, 'universityModarator', 100, '2020-07-08', '09:07:00'),
(1134, 'universityModarator', 100, 'student', 134, '2020-07-08', '09:07:00'),
(1135, 'student', 135, 'universityModarator', 100, '2020-07-08', '09:07:00'),
(1136, 'universityModarator', 100, 'student', 135, '2020-07-08', '09:07:00'),
(1137, 'admin', 71, 'universityModarator', 100, '2020-07-08', '09:07:01'),
(1138, 'universityModarator', 100, 'admin', 71, '2020-07-08', '09:07:01'),
(1139, 'adminModarator', 94, 'universityModarator', 100, '2020-07-08', '09:07:01'),
(1140, 'universityModarator', 100, 'adminModarator', 94, '2020-07-08', '09:07:01'),
(1141, 'admin', 95, 'universityModarator', 100, '2020-07-08', '09:07:01'),
(1142, 'universityModarator', 100, 'admin', 95, '2020-07-08', '09:07:01'),
(1143, 'adminModarator', 96, 'universityModarator', 100, '2020-07-08', '09:07:01'),
(1144, 'universityModarator', 100, 'adminModarator', 96, '2020-07-08', '09:07:01'),
(1145, 'admin', 97, 'universityModarator', 100, '2020-07-08', '09:07:01'),
(1146, 'universityModarator', 100, 'admin', 97, '2020-07-08', '09:07:01'),
(1147, 'universityModarator', 98, 'universityModarator', 100, '2020-07-08', '09:07:01'),
(1148, 'universityModarator', 100, 'universityModarator', 98, '2020-07-08', '09:07:01'),
(1149, 'universityAdmin', 99, 'universityAdmin', 100, '2020-07-08', '09:07:01'),
(1150, 'universityAdmin', 100, 'universityAdmin', 99, '2020-07-08', '09:07:01'),
(1151, 'universityModarator', 100, 'universityModarator', 100, '2020-07-08', '09:07:01'),
(1152, 'universityModarator', 100, 'universityModarator', 100, '2020-07-08', '09:07:01');

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
(71, 'Main Admin', NULL, NULL, 'admin@gmail.com', '1234', 'emni.jpg', 1, NULL, 'Admin', NULL, NULL, 1, 'online'),
(94, 'Joshim Khan', NULL, 'House 29, Rajar Golli Sylhet', 'admin1@gmail.com', '1234', 'emni.jpg', 1, '01745610313', 'Modarator', 'Sylhet', '3100', 71, NULL),
(95, 'Abdull Aziz', NULL, 'House 29, Rajar Golli Sylhet', 'admin2@gmail.com', '1234', 'ke.jpg', 1, '01745610313', 'Admin', 'Sylhet', '3100', 71, NULL),
(96, 'Kamran Ahmed', NULL, 'House 29, Rajar Golli Sylhet', 'admin3@gmail.com', '1234', 'okay.jpg', 1, '01745610313', 'Modarator', 'Sylhet', '3100', 71, NULL),
(97, 'Shoaib Ashraf', NULL, 'House 29, Rajar Golli Sylhet', 'admin4@gmail.com', '1234', 'teacer2.webp', 1, '01745610313', 'Admin', 'Sylhet', '3100', 71, NULL),
(98, 'Kibriya ', 61, 'House 29, Rajar Golli Sylhet', 'mod1@gmail.com', '1234', 'teacher1.jfif', 1, '+8801745610313', 'Modarator', 'Sylhet', '3100', NULL, 'online'),
(99, 'kawasar Ahmed', 61, 'House 29, Rajar Golli Sylhet', 'mod2@gmail.com', '1234', 'teacer2.webp', 1, '+8801745610313', 'Admin', 'Sylhet', '3100', NULL, 'online'),
(100, 'Sultan khan', 61, 'House 29, Rajar Golli Sylhet', 'mod3@gmail.com', '1234', 'ke.jpg', 1, '+8801745610313', 'Modarator', 'Sylhet', '3100', NULL, NULL);

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
  `noticeMessage` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`noticeId`, `noticeTitle`, `file`, `author`, `dates`, `times`, `statuss`, `whome`, `whoAdd`, `noticeMessage`) VALUES
(87, 'Admission is going on', 'download.jfif', '71', '2020-07-08', '09:22:08', 1, 'both', 'Admin', 'plows our field. cow dung is a good manure. Shoes, bags, belts are made of its skin. The cow is very useful to us. So, we should take care of her.'),
(88, 'A car is a vehicle that has wheels', 'Uttora-College-HSC-Admission.jpg', '71', '2020-07-08', '09:21:25', 1, 'Both', 'Admin', 'an cars, and they carry heavier loads. It is hard for anyone today to imagine what life was like before there were cars. Cars and other motor vehicles have made it e'),
(89, 'It is not only your class that can educate you,', 'unnamed.png', '71', '2020-07-08', '09:23:46', 1, 'Both', 'Admin', 'cation like formal, informal, and non-formal. All of them aim to educate you and change your way of thinking. Academic studies are necessary for us to');

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
(22, 1000, '+8801745610313', 'ADFV48EFG3B', '2020-07-08', '09:41:53', 132, 1, 'Rocket', NULL, NULL, NULL),
(23, 1000, '01745610313', '145klkjaDSHAJkn', '2020-07-08', '09:42:04', 132, 1, 'Bkash', NULL, NULL, NULL);

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
(44, 'Freedom fighter', 1, 10, 52),
(45, 'Freedom fighter', 1, 10, 58),
(46, 'Freedom fighter', 1, 10, 61),
(47, 'Physical Challenge ', 1, 20, 61);

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

--
-- Dumping data for table `seet`
--

INSERT INTO `seet` (`seatId`, `numberOfSet`, `deptname`, `unitname`, `ubiversityId`, `statuss`) VALUES
(4, 10, 'CSE', 'A', 52, '1'),
(5, 10, 'CSE', 'A', 58, '1'),
(6, 10, 'CSE', 'A', 61, '1'),
(7, 10, 'IH', 'B', 61, '1'),
(8, 10, 'PS', 'C', 61, '1');

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
(132, 'Halima ', 'Ashraf', '2020-07-09', 0, 2147483647, 2147483647, 2147483647, 'halima@gmail.com', '1234', 'offline', 2147483647, 2147483647),
(133, 'Ashique', 'Abdullah', '2020-07-09', 0, 2147483647, 2147483647, 2147483647, 'ashique@gmail.com', '1234', 'offline', 2147483647, 2147483647),
(134, 'Sidra', 'Ashraf', '2020-07-09', 0, 1765109953, 1234567, 1234567, 'sidra@gmail.com', '1234', 'offline', 1234567, 1234567),
(135, 'Abdullah', 'Ashique', '2020-07-09', 0, 2147483647, 14545, 14545, 'abdullah@gmail.com', '1234', NULL, 14545, 14545);

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
(130, 'Bangladesh', 'Chittagong', '2.png', 'Married', 'a+', 'House 29, Rajar Golli Sylhet', 'Barisal', '3100', 'Chittagong', 'Sylhet', 'Abdul Malek', 'Abrod', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', 'Daisy Alther', 'House Wife', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', 'Ashique Abdullah', 'Father', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', 'eaadm01@gmail.com', 'Friends ', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', 'eaadm01@gmail.com', 'Father', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', '1000', '5.5', '2020-07-09', '5.5', '2020-07-09', '5', '2020-07-16', '4', '2020-07-09', 'The Aided High school', 'Sylhet', '5', '2013', 'b44c10ec21fb252e4fe1fc8f7deca2c5.png', 'Sate College Sylhet', 'Sylhet', '5', '2016', 'certificate.png', 132, 1892, 2, 1),
(131, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 133, NULL, 2, NULL),
(132, 'Bangladesh', 'Chittagong', '2.png', 'Married', 'a+', 'House 29, Rajar Golli Sylhet', 'Dhaka', '3100', 'Chittagong', 'Sylhet', 'Abdul Malek', 'Abrod', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', 'Daisy Alther', 'House Wife', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', 'Ashique Abdullah', 'Father', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', 'eaadm01@gmail.com', 'Friends ', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', 'eaadm01@gmail.com', 'Father', 'House 29, Rajar Golli Sylhet', '+8801745610313', 'eaadm01@gmail.com', '1000', '5.5', '2020-07-09', 'as', '2020-07-09', '5', '2020-07-09', '4', '2020-07-09', 'The Aided High school', 'Sylhet', '5', '2013', 'certificate.png', 'Sate College Sylhet', 'Sylhet', '5', '2016', 'b44c10ec21fb252e4fe1fc8f7deca2c5.png', 134, NULL, 2, NULL),
(133, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 135, NULL, 0, NULL);

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
(17, 'Bangla', 10, 61, 1),
(18, 'English ', 20, 61, 1),
(19, 'Math', 10, 61, 1),
(20, 'Biology', 20, 61, 1),
(21, 'Chemistry ', 10, 61, 1);

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

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`uniId`, `unitName`, `statuss`, `minSSCGpa`, `minHSCGpa`, `TotalGpa`, `sscReguler`, `sscIreg`, `hscReg`, `hscIreg`, `allow`, `examDuration`, `notes`, `universityId`, `groups`, `admsFee`) VALUES
(7, 'A', 1, 1, 2, 3, 4, 5, 6, 7, '2', '00:00:10', 'asd', 58, 'Science', 1),
(8, 'A', 1, 3.5, 3.5, 7, 3.5, 3.5, 3.5, 3.5, '2', '00:01:00', 'It is a postgraduate teaching and research university as well as an affiliating university. ', 61, 'Science', 100),
(9, 'B', 1, 1, 2, 3, 4, 5, 6, 7, '2', '00:01:00', '', 61, 'Commerce & Arch', 1),
(10, 'C', 1, 7, 7, 7, 7, 7, 7, 7, '2', '01:00:00', '', 61, 'Commerce & Arch', 7);

-- --------------------------------------------------------

--
-- Table structure for table `unitanddepert`
--

CREATE TABLE `unitanddepert` (
  `unitDeptId` int(11) NOT NULL,
  `unitId` int(11) DEFAULT NULL,
  `deptname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unitanddepert`
--

INSERT INTO `unitanddepert` (`unitDeptId`, `unitId`, `deptname`) VALUES
(6, 8, 'CSE'),
(7, 9, 'IH'),
(8, 9, 'BBA'),
(9, 10, 'IH');

-- --------------------------------------------------------

--
-- Table structure for table `unitandsubject`
--

CREATE TABLE `unitandsubject` (
  `unitSubId` int(11) NOT NULL,
  `unitId` int(11) DEFAULT NULL,
  `subName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unitandsubject`
--

INSERT INTO `unitandsubject` (`unitSubId`, `unitId`, `subName`) VALUES
(7, 8, 'English '),
(8, 8, 'Math'),
(9, 9, 'Bangla'),
(10, 9, 'Math'),
(11, 10, 'English ');

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
(61, 'North East University Bangladesh', '120', 'neub.jpg', 'Sylhet', 'Sylhet', '3100', '+8801745610313', 'neub@gmail.com', '1234', 2, 1, 'offline', 24.8901, 91.861, 'sig.png'),
(62, 'shahjalal university of science and technology', '120', 'sust.png', 'Sylhet', 'Sylhet', '3100', '+8801745610313', 'sust@gmail.com', '1234', 2, 0, 'offline', 24.9172, 91.8319, 'sig.png'),
(63, 'Rajshahi University', '120', 'dhaka.jpg', 'Rajshahi', 'Sylhet', '3100', '+8801745610313', 'raj@gmail.com', '1234', 0, 0, 'offline', 24.3683, 88.6376, 'sig.png');

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
  MODIFY `addmissonId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chatwith`
--
ALTER TABLE `chatwith`
  MODIFY `chatwithId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `depertment`
--
ALTER TABLE `depertment`
  MODIFY `depertmentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `friedns`
--
ALTER TABLE `friedns`
  MODIFY `frinid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1153;

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
  MODIFY `morId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `noticeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `paymenthistory`
--
ALTER TABLE `paymenthistory`
  MODIFY `payId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `quota`
--
ALTER TABLE `quota`
  MODIFY `quotaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

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
  MODIFY `seatId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_one`
--
ALTER TABLE `student_one`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `student_two`
--
ALTER TABLE `student_two`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `student_verift`
--
ALTER TABLE `student_verift`
  MODIFY `stdVId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `uniId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `unitanddepert`
--
ALTER TABLE `unitanddepert`
  MODIFY `unitDeptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `unitandsubject`
--
ALTER TABLE `unitandsubject`
  MODIFY `unitSubId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `universityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

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
