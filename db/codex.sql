-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 12:13 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL DEFAULT '0',
  `email` varchar(255) NOT NULL,
  `GroupID` int(2) NOT NULL DEFAULT 0,
  `Block` int(1) NOT NULL DEFAULT 0,
  `Temp` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `username`, `img`, `password`, `phone`, `email`, `GroupID`, `Block`, `Temp`) VALUES
(1, 'M7MED', '0', '8cb2237d0679ca88db6464eac60da96345513964', '01069364670', 'Tencent10.tc@gmail.com', 0, 0, 0),
(2, 'Amr95', '0', '8cb2237d0679ca88db6464eac60da96345513964', '0', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Parent` int(11) NOT NULL DEFAULT 0,
  `Description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Temp` int(11) NOT NULL DEFAULT 0,
  `Orders` int(11) NOT NULL DEFAULT 0,
  `Likes` int(11) NOT NULL DEFAULT 0,
  `View` int(11) NOT NULL DEFAULT 0,
  `Visibility` int(1) NOT NULL DEFAULT 1,
  `Block` int(1) NOT NULL DEFAULT 0,
  `Today` date NOT NULL,
  `Ylike` int(11) NOT NULL DEFAULT 0,
  `Yview` int(11) NOT NULL DEFAULT 0,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`ID`, `Name`, `Parent`, `Description`, `img`, `Temp`, `Orders`, `Likes`, `View`, `Visibility`, `Block`, `Today`, `Ylike`, `Yview`, `Date`) VALUES
(1, 'Websites', 0, '', '', 3, 0, 42, 118, 1, 0, '2020-09-09', 42, 118, '2020-07-26 14:22:10'),
(2, 'MoBile Apps', 0, '', '', 0, 0, 0, 0, 0, 1, '2020-09-09', 0, 0, '2020-07-26 14:23:05'),
(4, 'eCommerce Web', 1, 'Far far away, behind the word mountains, far from the countries Vokalia and Constant ', 'img_108932.jpg', 3, 0, 21, 106, 1, 0, '2020-09-09', 21, 106, '2020-07-26 15:46:01'),
(5, 'Graphic', 0, '', '', 2, 0, 22, 83, 1, 0, '2020-09-09', 21, 83, '2020-07-26 15:48:40'),
(7, 'Digitals', 5, 'digital graphics Far far away, behind the word mountains, far from the countries ', 'img_128543.jpg', 0, 0, 0, 0, 1, 0, '2020-09-09', 0, 0, '2020-07-26 15:54:24'),
(9, 'logo', 5, 'Far far away, behind the word mountains, far from the countries Vokalia and Constant ', 'img_4529.jpg', 2, 0, 22, 83, 1, 0, '2020-09-09', 21, 83, '2020-08-03 19:06:03'),
(10, 'social media designs', 5, ' ', 'img_54872.jpg', 0, 0, 0, 0, 1, 0, '2020-09-09', 0, 0, '2020-08-16 12:20:42'),
(11, 'restaurants ', 1, 'Restaurant and coffee shops theme, which you can use to easily and quick.', 'img_83582.jpg', 0, 0, 21, 12, 1, 0, '2020-09-09', 21, 12, '2020-09-05 16:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` int(11) NOT NULL,
  `Temp_1` varchar(255) NOT NULL,
  `Temp_2` varchar(255) NOT NULL,
  `Temp_3` varchar(255) NOT NULL,
  `Temp_4` varchar(255) NOT NULL,
  `Temp_5` varchar(255) NOT NULL,
  `Temp_6` varchar(255) NOT NULL,
  `Temp_7` varchar(255) NOT NULL,
  `Temp_8` varchar(255) NOT NULL,
  `Temp_9` varchar(255) NOT NULL,
  `Temp_10` varchar(255) NOT NULL,
  `Temp_ID` int(11) NOT NULL,
  `Cat_ID` int(11) NOT NULL,
  `Admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `Temp_1`, `Temp_2`, `Temp_3`, `Temp_4`, `Temp_5`, `Temp_6`, `Temp_7`, `Temp_8`, `Temp_9`, `Temp_10`, `Temp_ID`, `Cat_ID`, `Admin_ID`) VALUES
(1, '1_2_TEMP_1.jpg', '2_2_TEMP_2.jpg', '3_2_TEMP_3.jpg', '4_2_TEMP_4.jpg', '5_2_TEMP_5.jpg', '6_2_TEMP_6.jpg', '7_2_TEMP_7.jpg', '8_2_TEMP_8.jpg', '9_2_TEMP_9.jpg', '10_2_TEMP_10.jpg', 2, 7, 1),
(2, '1_4_TEMP_1.jpg', '2_4_TEMP_2.jpg', '3_4_TEMP_3.jpg', '4_4_TEMP_4.jpg', '5_4_TEMP_5.jpg', '6_4_TEMP_6.jpg', '7_4_TEMP_7.jpg', '8_4_TEMP_8.jpg', '9_4_TEMP_9.jpg', '10_4_TEMP_10.jpg', 4, 9, 1),
(4, '1_9_TEMP_1.jpg', '2_9_TEMP_2.jpg', '3_9_TEMP_3.jpg', '4_9_TEMP_4.jpg', '5_9_TEMP_5.jpg', '', '7_9_TEMP_7.jpg', '8_9_TEMP_8.jpg', '9_9_TEMP_9.jpg', '10_9_TEMP_10.jpg', 9, 10, 1),
(5, '1_4_TEMP_1.jpg', '', '', '', '', '', '', '', '', '', 5, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `general`
--

CREATE TABLE `general` (
  `ID` int(11) NOT NULL,
  `View` int(11) NOT NULL DEFAULT 0,
  `Likes` int(11) NOT NULL DEFAULT 0,
  `MV_Cat` int(11) NOT NULL DEFAULT 0,
  `MK_Cat` int(11) NOT NULL DEFAULT 0,
  `MO_Cat` int(11) NOT NULL DEFAULT 0,
  `MV_Temp` int(11) NOT NULL DEFAULT 0,
  `MK_Temp` int(11) NOT NULL DEFAULT 0,
  `YK_Cat` int(11) NOT NULL DEFAULT 0,
  `YK_Temp` int(11) NOT NULL DEFAULT 0,
  `YDay` date NOT NULL,
  `TDay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general`
--

INSERT INTO `general` (`ID`, `View`, `Likes`, `MV_Cat`, `MK_Cat`, `MO_Cat`, `MV_Temp`, `MK_Temp`, `YK_Cat`, `YK_Temp`, `YDay`, `TDay`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-09-08', '2020-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Owner` varchar(225) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Comp` varchar(225) NOT NULL,
  `Description` text NOT NULL,
  `Temp_ID` int(11) NOT NULL,
  `Cat_ID` int(11) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Start` int(1) DEFAULT 0,
  `Start_Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Description` text NOT NULL,
  `img` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `Approve` int(1) NOT NULL DEFAULT 1,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ID`, `Name`, `Description`, `img`, `Approve`, `Date`) VALUES
(1, 'UI UX Design', 'An award-winning design agency designing standout experiences for clients.', 'img_182902.jpg', 1, '2020-08-24 18:20:04'),
(2, 'Web Development', 'High-performing, intuitive and secure web solutions that support business processes and serve users globally.', 'img_34235.jpg', 1, '2020-08-24 18:21:00'),
(3, 'Web Design', 'we design beautiful and responsive websites that work on any type of device: desktop, laptop and mobile.', 'img_199765.jpg', 1, '2020-08-25 09:17:31'),
(4, 'CMS & WordPress', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', 'img_68571.jpg', 1, '2020-08-25 09:54:52'),
(5, 'SEO', 'Careful SEO is about building credibility, and approve with global search engines.', 'img_67785.jpg', 1, '2020-08-25 09:53:20'),
(6, 'Web eCommerce', 'online booking platforms, social networks, portals and online booking systems .', 'img_133021.jpg', 1, '2020-09-05 09:41:19'),
(7, 'Mobaile Development', 'High-performing, intuitive and secure web solutions that support business processes And globally.', 'img_111586.jpg', 1, '2020-07-28 13:36:06'),
(8, 'Android & iOS', 'Google\'s Android and Apple\'s iOS are smartphone operating systems Create app By JAVA , Flutter & SWIFT .', 'img_28197.jpg', 1, '2020-09-05 15:22:02'),
(10, 'Graphic Design', 'Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.', 'img_29713.jpg', 1, '2020-08-25 10:00:28');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Description` text CHARACTER SET utf8 NOT NULL,
  `img_1` varchar(255) NOT NULL DEFAULT '0',
  `img_2` varchar(255) NOT NULL DEFAULT '0',
  `img_3` varchar(255) NOT NULL DEFAULT '0',
  `Tool` varchar(255) NOT NULL DEFAULT '0',
  `View` int(11) NOT NULL DEFAULT 0,
  `Likes` int(11) NOT NULL DEFAULT 0,
  `Approve` int(1) NOT NULL DEFAULT 1,
  `Cat_ID` int(11) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Today` date NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`ID`, `Name`, `Description`, `img_1`, `img_2`, `img_3`, `Tool`, `View`, `Likes`, `Approve`, `Cat_ID`, `Admin_ID`, `Today`, `Date`) VALUES
(2, 'Codexlab', 'codex lab codex lab codex lab codex lab codex lab codex lab codex lab codex lab codex lab codex lab', '1_Temp_62623.jpg', '2_Temp_70873.jpg', '3_Temp_145836.jpg', '2,4,9,13', 100, 5, 1, 4, 1, '2020-09-07', '2020-08-04 15:18:40'),
(3, 'Bootstrap', 'Web Template ', '1_Temp_152239.jpg', '2_Temp_124816.jpg', '3_Temp_198703.jpg', '7,8,9,13', 0, 7, 1, 4, 1, '0000-00-00', '2020-08-08 16:39:15'),
(4, 'MOMO 2', 'Graphic LOGO TemplateBootstrap employs a handful of important global styles and settings that you’ll need to be aware of when using it.', '1_Temp_55458.jpg', '2_Temp_38034.jpg', '3_Temp_23435.jpg', '2,4,7,8', 76, 21, 1, 9, 1, '0000-00-00', '2020-08-09 16:51:47'),
(5, 'luto', 'WEBSITE TEMPLATE', '1_Temp_25258.jpg', '2_Temp_102011.jpg', '3_Temp_9464.jpg', '7,8,9,10,11', 6, 9, 1, 4, 1, '0000-00-00', '2020-08-10 00:00:00'),
(9, 'Amr', 'hfrdhgfhfgh', '1_Temp_149553.jpg', '2_Temp_163588.jpg', '3_Temp_168364.jpg', '1,11,20,22', 7, 1, 1, 9, 1, '0000-00-00', '2020-08-17 10:16:13');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `Approve` tinyint(1) NOT NULL,
  `Cat_ID` int(11) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`ID`, `Name`, `img`, `Approve`, `Cat_ID`, `Date`) VALUES
(1, 'Python', 'img_121841.jpg', 1, 1, '2020-08-02'),
(2, 'PHP', 'img_93605.jpg', 1, 1, '2020-08-02'),
(3, 'Cassandra', 'img_53736.jpg', 0, 1, '2020-08-02'),
(4, 'MySQL', 'img_63360.jpg', 1, 1, '2020-08-02'),
(5, 'Laravel', 'img_57274.jpg', 1, 1, '2020-08-02'),
(6, 'django', 'img_37743.jpg', 1, 1, '2020-08-02'),
(7, 'HTML5', 'img_148318.jpg', 1, 1, '2020-08-02'),
(8, 'CSS3', 'img_89919.jpg', 1, 1, '2020-08-02'),
(9, 'jQuery', 'img_137746.jpg', 1, 1, '2020-08-02'),
(10, 'AjAX', 'img_123352.jpg', 1, 1, '2020-08-02'),
(11, 'SaSS', 'img_50.jpg', 1, 1, '2020-08-02'),
(12, 'Vue.js', 'img_135133.jpg', 1, 1, '2020-08-02'),
(13, 'BootStrap', 'img_17014.jpg', 1, 1, '2020-08-02'),
(14, 'nodejs', 'img_141175.jpg', 1, 1, '2020-08-02'),
(15, 'MariaDB', 'img_121179.jpg', 1, 1, '2020-08-02'),
(16, 'foundation5', 'img_186935.jpg', 1, 1, '2020-08-02'),
(17, 'Apache sw', 'img_135112.jpg', 1, 1, '2020-08-02'),
(18, 'BUGjs', 'img_159049.jpg', 1, 1, '2020-08-02'),
(19, 'ANDROID', 'img_122367.jpg', 1, 2, '2020-08-02'),
(20, 'DART', 'img_135065.jpg', 1, 2, '2020-08-02'),
(21, 'FLUTTER', 'img_162911.jpg', 1, 2, '2020-08-02'),
(22, 'SWIFT', 'img_129952.jpg', 1, 2, '2020-08-02'),
(23, 'WordPress', 'img_185367.jpg', 1, 1, '2020-08-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Admin_ID` (`Admin_ID`),
  ADD KEY `TMPID` (`Temp_ID`),
  ADD KEY `CATTMP` (`Cat_ID`);

--
-- Indexes for table `general`
--
ALTER TABLE `general`
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `MV_CAT` (`MV_Cat`),
  ADD KEY `MK_CAT` (`MK_Cat`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ADMIN_ORDERS` (`Admin_ID`),
  ADD KEY `CAT_ORDER` (`Cat_ID`),
  ADD KEY `TEMP_ORDER` (`Temp_ID`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CATTEMP` (`Cat_ID`),
  ADD KEY `ADMINTEMP` (`Admin_ID`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CATTOOL` (`Cat_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `general`
--
ALTER TABLE `general`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `ADMINTMP` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CATTMP` FOREIGN KEY (`Cat_ID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TMPID` FOREIGN KEY (`Temp_ID`) REFERENCES `temp` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `ADMIN_ORDERS` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CAT_ORDER` FOREIGN KEY (`Cat_ID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `TEMP_ORDER` FOREIGN KEY (`Temp_ID`) REFERENCES `temp` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `temp`
--
ALTER TABLE `temp`
  ADD CONSTRAINT `ADMINTEMP` FOREIGN KEY (`Admin_ID`) REFERENCES `admin` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `CATTEMP` FOREIGN KEY (`Cat_ID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tools`
--
ALTER TABLE `tools`
  ADD CONSTRAINT `CATTOOL` FOREIGN KEY (`Cat_ID`) REFERENCES `categories` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
