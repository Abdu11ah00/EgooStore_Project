-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 03, 2023 at 09:57 AM
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
-- Table structure for table `categoris`
--

DROP TABLE IF EXISTS `categoris`;
CREATE TABLE IF NOT EXISTS `categoris` (
  `Cate_ID` int NOT NULL AUTO_INCREMENT,
  `Cat_Name` varchar(255) NOT NULL,
  `Cate_Type` varchar(255) NOT NULL,
  PRIMARY KEY (`Cate_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categoris`
--

INSERT INTO `categoris` (`Cate_ID`, `Cat_Name`, `Cate_Type`) VALUES
(1, 'Store Card ', ''),
(2, 'Key', ''),
(3, 'antivirus', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `Prod_ID` int NOT NULL AUTO_INCREMENT,
  `FK_Cate_ID` int NOT NULL,
  `Prod_Name` varchar(100) NOT NULL,
  `Prod_Long_Desc` varchar(1000) NOT NULL,
  `Prod_Short_Desc` varchar(500) NOT NULL,
  `Prod_Price` double(10,2) NOT NULL,
  `Prod_Stock_Status` char(1) NOT NULL,
  `Prod_Warranty` int NOT NULL,
  `Prod_QR` varchar(255) DEFAULT NULL,
  `Prod_Img1` varchar(255) NOT NULL,
  `Prod_Img2` varchar(255) DEFAULT NULL,
  `Prod_Img3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Prod_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Prod_ID`, `FK_Cate_ID`, `Prod_Name`, `Prod_Long_Desc`, `Prod_Short_Desc`, `Prod_Price`, `Prod_Stock_Status`, `Prod_Warranty`, `Prod_QR`, `Prod_Img1`, `Prod_Img2`, `Prod_Img3`) VALUES
(1, 1, ' X-box Saudi 50 cards', 'Today we offer you X-box Saudi 50 cards to enjoy all the benefits, new and exclusive games, a promium account that supports all additions and updates, and the latest game releases.\r\nFor full content and a premium subscription, with a secure payment method to protect your account, Xbox cards are the perfect solution, with different prices and packages that meet your multiple needs.\r\nSo what are you waiting for to get the latest games, features and updates on your Xbox?\r\nRecharge, and enjoy an unlimited world of fun and games.', 'There are three types of gamers, who use the computer, the owners of the PlayStation, and the third category is the Xbox lovers, because of its fast interface and distinctive features.', 50.00, '1', 2, NULL, 'xbox-sar50-card.png', NULL, NULL),
(2, 2, 'PlayStation Cards', 'Do you want to enjoy the most additions, and the latest games on your PlayStation?\r\nDo you love games, challenge and adventurous spirit?\r\nDo you want to enjoy the latest additions and be among the first in all the games and the latest on the PlayStation?\r\nOf course you want to, because you are a gamer, you are not just a gaming enthusiast, you love PlayStation games so you have to be distinguished from the rest.\r\nAnd because we think of you, today we provide you with PSN Saudi store 50$ cards in order to charge your wallet balance, to buy the latest games from the Sony Store, play online with millions of gamers and many more additions and features\r\nWhich not everyone can get.\r\n\r\nYou do not have to worry anymore, buy PlayStation cards, recharge your balance and enjoy unlimited services and features, to play, to have fun\r\nIt is distinguished.', 'PlayStation Cards let you pay, buy, and get everything\r\nFeatures from Sony Store without the need to use a credit card to enjoy security while playing.', 50.00, '1', 2, NULL, 'playstation-card-sar50.png', NULL, NULL),
(3, 3, 'Apple store', 'Do you want to enjoy all the exclusive apps and survives on Apple store?\r\nYou need to charge your Apple store?\r\nWell, now you can and easily with Apple store gift cards.\r\nWe offer you today Apple Gift Card 75 SAR - KSA prepaid gift cards to recharge your Apple store account and enjoy unlimited survives and apps.\r\nFrom Music and movies to premium subscription in apps.\r\nSaudian account, American or British.\r\nYou name it, order your card, pay in safe methods and get your card code for unlimited use.', 'Apple store gift cards come with deferent packages to suit all the various uses and needs\r\nSo what are you waiting for?', 75.00, '1', 2, NULL, 'Applestore.png', NULL, NULL),
(4, 4, 'McAfee Total Protection Pro\r\n', 'Don\'t let your computer get infected with a virus. McAfee combines award-winning antivirus and smart web protection together in one package to protect your PC from any threats. With a McAfee subscription, you are fully protected from any viruses.', 'With a McAfee subscription, you are fully protected from any viruses.', 300.00, '1', 2, NULL, 'McAfee_Card.png', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
