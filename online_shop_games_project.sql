-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 24, 2023 at 07:42 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop_games_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

DROP TABLE IF EXISTS `ad`;
CREATE TABLE IF NOT EXISTS `ad` (
  `ad_ID` int NOT NULL AUTO_INCREMENT,
  `ad_content` varchar(2500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ad_Published` char(1) NOT NULL,
  `ad_Added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `FK_Admin_ID` int NOT NULL,
  PRIMARY KEY (`ad_ID`),
  KEY `FK_Admin_ID_1` (`FK_Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`ad_ID`, `ad_content`, `ad_Published`, `ad_Added`, `FK_Admin_ID`) VALUES
(10, '<div class=\' alert alert-dark alert-dismissible fade show\' role=\'alert\'>\r\n<strong>Secure Tour Digital Life:</strong> Use coupon code SECURE15 for 15% off on any <a href=\'#\' class=\'alert-link\'>antivirus software</a>. \r\n<button type=\'button\' class=\'btn-close\' data-bs-dismiss=\'alert\' aria-label=\'Close\'></button>\r\n</div>', '1', '2023-11-16 20:16:14', 1),
(11, '<div class=\' alert alert-dark alert-dismissible fade show\' role=\'alert\'>\r\n<strong>30%</strong> discount with code \'KSA\'\r\n<button type=\'button\' class=\'btn-close\' data-bs-dismiss=\'alert\' aria-label=\'Close\'></button>\r\n</div>', '1', '2023-11-16 20:16:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_list`
--

DROP TABLE IF EXISTS `admin_list`;
CREATE TABLE IF NOT EXISTS `admin_list` (
  `Admin_ID` int NOT NULL AUTO_INCREMENT,
  `Admin_Email` varchar(255) NOT NULL,
  `Admin_Phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Admin_FName` varchar(255) NOT NULL,
  `Admin_LName` varchar(255) NOT NULL,
  `Admin_PSW` varchar(255) NOT NULL,
  `Admin_Type` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Verify_Token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Admin_Photo` varchar(255) NOT NULL,
  `Created_at` timestamp NOT NULL,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_list`
--

INSERT INTO `admin_list` (`Admin_ID`, `Admin_Email`, `Admin_Phone`, `Admin_FName`, `Admin_LName`, `Admin_PSW`, `Admin_Type`, `Verify_Token`, `Admin_Photo`, `Created_at`) VALUES
(1, 'Abdullah@SY.Admin.sa', '0555555555', 'Abdullah', 'AL-Tayyar', '$2y$10$s9iZv72CZQonnJDAc9sFZudrCp2UVJVjGs9LZKynuOurLBYm9lG5i', 'SY', NULL, 'Personal0.png6045371417.png', '2023-10-17 18:56:19'),
(6, 'M@DB.Admin.com', '0123456789', 'Mohammedb', 'AL', '$2y$10$dH/xI9R83do8zwQqSKt4d.phGQl0RJSL2hurDbZMgDPa9d8dZBxym', 'DB', NULL, 'Personal5.png1649579431.png', '0000-00-00 00:00:00'),
(8, 'saad_admin@egoostore.sa', '0123456789', 'Saad', 'AL Shaflot', '$2y$10$QMPBPu1JXGOmN6H7D91W/.n6/lSBAESDvi/m8NsA/QgfRnFDTaJa2', 'SY', NULL, '', '0000-00-00 00:00:00'),
(9, 'abdullah_admin@egoostore.sa', '0123456789', 'Abdullah', 'AL-Ghamdi', '$2y$10$tuN3oPcw/fzWxXF9RLw32ebrp5YuYGiTQtAfBP2Ca8tmSwR1HzxE.', 'SY', NULL, '', '0000-00-00 00:00:00'),
(11, 'nawaf_admin@egoostore.sa', '0123456789', 'Nawaf ', 'AL-Awda', '$2y$10$Pc/qzS1Be0XG.Nju2tcBZ.ebNVGN1wONTFHLWUyDNaucZclTHOEGm', 'SY', NULL, '', '0000-00-00 00:00:00'),
(12, 'ibrahim_admin@egoostore.sa', '0123456789', 'Ibrahim', 'AL-Jabri', '$2y$10$ie0UIVGQhyM12whhZWNxLu4eCp9dJ3sB/Suda1WGu2ZQEsvlGPMk2', 'SY', NULL, '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `Cate_ID` int NOT NULL AUTO_INCREMENT,
  `Cate_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `FK_Admin_ID` int NOT NULL,
  `Cate_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Cate_ID`),
  KEY `FK_Admin_ID_add_by` (`FK_Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`Cate_ID`, `Cate_Name`, `FK_Admin_ID`, `Cate_Date`) VALUES
(3, 'antivirus', 1, '2023-10-10 09:10:03'),
(33, 'Microsoft Office', 1, '2023-10-17 19:11:21'),
(34, 'Playstation Key', 1, '2023-10-17 19:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `Cust_ID` int NOT NULL AUTO_INCREMENT,
  `Cust_Email` varchar(255) NOT NULL,
  `Cust_Phone` int DEFAULT NULL,
  `Cust_FName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Cust_LName` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Cust_PSW` varchar(255) NOT NULL,
  `Cust_Register` date NOT NULL,
  `Cust_BirthDate` date NOT NULL,
  `Cust_Img` varchar(255) NOT NULL,
  PRIMARY KEY (`Cust_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `Cust_Email`, `Cust_Phone`, `Cust_FName`, `Cust_LName`, `Cust_PSW`, `Cust_Register`, `Cust_BirthDate`, `Cust_Img`) VALUES
(1, 'Abdullah@Admin.com', NULL, 'Abdullah', 'AL', '$2y$10$I70JuJtcvJ5pEUVRM0qhHO3Qp4brcXYBf0locgtnXRj1QNiy5WB8G', '2023-11-15', '2023-11-01', 'Abdullah@Admin.comPersonal0.png2197944595.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Fee_ID` int NOT NULL AUTO_INCREMENT,
  `FK_Cust_ID` int NOT NULL,
  `FK_Prod_ID` int NOT NULL,
  `Fee_Rating` int NOT NULL,
  `Fee_Commit` varchar(255) NOT NULL,
  `Fee_Verfy` int DEFAULT NULL,
  `Posted_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Fee_ID`),
  KEY `FK_Cust_ID` (`FK_Cust_ID`),
  KEY `FK_Prod_ID` (`FK_Prod_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Fee_ID`, `FK_Cust_ID`, `FK_Prod_ID`, `Fee_Rating`, `Fee_Commit`, `Fee_Verfy`, `Posted_on`) VALUES
(1, 1, 4, 5, 'Good Product', NULL, '2023-11-15 05:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `log_admin`
--

DROP TABLE IF EXISTS `log_admin`;
CREATE TABLE IF NOT EXISTS `log_admin` (
  `FK_Admin_ID` int NOT NULL,
  `Log_Date` date NOT NULL,
  `Log_Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Prod_ID` int NOT NULL AUTO_INCREMENT,
  `FK_Cate_ID` int NOT NULL,
  `Prod_Name` varchar(100) NOT NULL,
  `Prod_Published` char(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Prod_Long_Desc` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Prod_Short_Desc` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Prod_Below_Desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Prod_Price` double(10,2) NOT NULL,
  `Prod_Stock_Status` int NOT NULL,
  `Prod_Warranty` int NOT NULL,
  `Prod_Img` varchar(255) NOT NULL,
  `Prod_Img1` varchar(255) NOT NULL,
  `FK_Admin_ID` int NOT NULL,
  `Prod_Date_Added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`Prod_ID`),
  KEY `FK_cate_ID` (`FK_Cate_ID`),
  KEY `FK_Admin_ID` (`FK_Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Prod_ID`, `FK_Cate_ID`, `Prod_Name`, `Prod_Published`, `Prod_Long_Desc`, `Prod_Short_Desc`, `Prod_Below_Desc`, `Prod_Price`, `Prod_Stock_Status`, `Prod_Warranty`, `Prod_Img`, `Prod_Img1`, `FK_Admin_ID`, `Prod_Date_Added`) VALUES
(1, 3, ' Apple store', '0', '<p>Do you want to enjoy all the exclusive apps and survives on Apple store? You need to charge your Apple store? Well, now you can and easily with Apple store gift cards. We offer you today Apple Gift Card 75 SAR - KSA prepaid gift cards to recharge your Apple store account and enjoy unlimited survives and apps. From Music and movies to premium subscription in apps. Saudian account, American or British. You name it, order your card, pay in safe methods and get your card code for unlimited use.</p>\r\n', ' Apple store gift cards come with deferent packages to suit all the various uses and needs\r\nSo what are you waiting for?', '', 75.00, 0, 2, 'Apple_card.jpg4632123774.jpg', 'Applestore.png', 1, '2023-10-12 03:53:03'),
(3, 34, 'Playstation Key Store', '0', '<p dir=\"RTL\" style=\"text-align:left\">PlayStation keys, often referred to as game keys or activation keys, are digital codes that provide access to and unlock video games and other digital content on PlayStation consoles, such as the PlayStation 4 (PS4), PlayStation 5 (PS5), and the PlayStation Network (PSN). These keys have become a popular and convenient way for gamers to purchase and redeem games and additional content, enhancing their gaming experience. Here&#39;s an in-depth look at PlayStation keys and how they work<span style=\"font-family:&quot;Arial&quot;,sans-serif\">:</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;Digital Distribution: PlayStation keys represent a significant shift in the gaming industry towards digital distribution. Instead of purchasing physical copies of games at retail stores, gamers can now buy digital keys online from various authorized sellers and platforms<span style=\"font-family:&quot;Arial&quot;,sans-serif\">.</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;Access to a Vast Library: PlayStation keys can be used to access a vast and diverse library of games, expansions, downloadable content (DLC), in-game items, and even virtual currency. This digital marketplace allows players to explore a wide range of titles and expand their gaming experience<span style=\"font-family:&quot;Arial&quot;,sans-serif\">.</span></p>\r\n', 'PlayStation Store gift cards, commonly known as PSN cards, are digital or physical prepaid cards that offer a convenient way to add funds to your PlayStation Network (PSN) account. Here\'s a brief.', '<p dir=\"RTL\" style=\"text-align:left\">PlayStation keys, often referred to as game keys or activation keys, are digital codes that provide access to and unlock video games and other digital content on PlayStation consoles, such as the PlayStation 4 (PS4), P', 99.00, 199, 24, 'Playstation Key 30$.png5421731275.png', '', 1, '2023-10-24 18:27:16'),
(4, 33, 'Microsoft Excle', '1', '<p dir=\"RTL\" style=\"text-align:left\">Microsoft Excel is a highly versatile and widely employed spreadsheet software application that forms an integral part of the Microsoft Office suite. It offers an expansive array of features designed to help users manage, analyze, and present data in an organized and meaningful manner. Here is a more detailed description of Microsoft Excel<span style=\"font-family:&quot;Arial&quot;,sans-serif\">:</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">Spreadsheet Creation: At its core, Excel provides a grid-based platform where users can create and manipulate spreadsheets. These spreadsheets consist of rows and columns, forming cells that can contain text, numbers, formulas, or functions<span style=\"font-family:&quot;Arial&quot;,sans-serif\">.</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n', 'Excel is a powerful and widely-used spreadsheet software by Microsoft. It allows users to create, manage, and analyze data in a grid format. Excel is known for its versatility, with features for mathematical calculations, data visualization, and complex data analysis. It\'s an essential tool for businesses, students, and professionals for tasks like budgeting, data tracking, and creating charts and graphs.\r\n\r\n', '', 99.00, 299, 24, 'Excle.png964441744.png', '', 1, '2023-10-24 18:28:52'),
(5, 33, 'Microsoft Outlook', '1', '<p dir=\"RTL\" style=\"text-align:left\">Microsoft Outlook is a comprehensive and versatile personal information management software developed by Microsoft. It is primarily recognized for its email management capabilities, but it offers a wide range of features that extend far beyond just email. Here is a detailed description of Microsoft Outlook<span style=\"font-family:&quot;Arial&quot;,sans-serif\">:</span></p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;Email Management: Outlook excels as an email client, providing a user-friendly and organized interface for sending, receiving, and managing emails. Users can create, organize, and categorize emails, making it easy to stay on top of their inbox<span style=\"font-family:&quot;Arial&quot;,sans-serif\">.</span></p>\r\n', 'Outlook is a widely-used email and personal information management application developed by Microsoft. It allows users to send and receive emails, manage calendars, schedule appointments, and organize tasks and contacts, all within a single interface. Outlook is known for its user-friendly design, robust email organization features, and seamless integration with other Microsoft Office applications, making it a valuable tool for efficient communication and time management..', '<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">In summary, Microsoft Outlook is an all-in-one solution for email, calendar, contacts, and task management. It streamlines communication, enhances productivity, and of', 99.00, 299, 24, 'Outlook.png9629377176.png', '', 1, '2023-10-24 18:30:05'),
(6, 3, ' Microsoft Word', '0', '<p dir=\"RTL\" style=\"text-align:left\">&nbsp;Microsoft Word is a comprehensive word processing software application created by Microsoft, and it has long been a cornerstone of document creation and editing for both personal and professional purposes. This software provides a plethora of features and tools that cater to a wide range of user needs, making it a versatile and essential tool for text-based document management.</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">Key features of Microsoft Word include:</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p dir=\"RTL\" style=\"text-align:left\">User-Friendly Interface**: Microsoft Word boasts an intuitive and user-friendly interface, featuring a ribbon toolbar that makes it easy to access a wide array of functions and formatting options.</p>\r\n', ' Microsoft Word is a popular word processing software developed by Microsoft. It enables users to create, edit, format, and print text-based documents.', '<p dir=\"RTL\" style=\"text-align:left\">&nbsp;</p>\r\n\r\n<p><span style=\"font-size:11.0pt\">Microsoft Word is a widely used word processing software developed by Microsoft. It is part of the Microsoft Offi</span></p>\r\n', 99.00, 299, 24, '1.jpg4719135611.jpg', '', 1, '2023-10-24 18:31:16');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ad`
--
ALTER TABLE `ad`
  ADD CONSTRAINT `FK_Admin_ID_1` FOREIGN KEY (`FK_Admin_ID`) REFERENCES `admin_list` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_Admin_ID_add_by` FOREIGN KEY (`FK_Admin_ID`) REFERENCES `admin_list` (`Admin_ID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FK_Cust_ID` FOREIGN KEY (`FK_Cust_ID`) REFERENCES `customer` (`Cust_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_Prod_ID` FOREIGN KEY (`FK_Prod_ID`) REFERENCES `product` (`Prod_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_Admin_ID` FOREIGN KEY (`FK_Admin_ID`) REFERENCES `admin_list` (`Admin_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_cate_ID` FOREIGN KEY (`FK_Cate_ID`) REFERENCES `categories` (`Cate_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
