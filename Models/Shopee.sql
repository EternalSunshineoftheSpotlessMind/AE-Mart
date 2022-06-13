/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - shopee
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`shopee` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `shopee`;

/*Table structure for table `cart` */

DROP TABLE IF EXISTS `cart`;

CREATE TABLE `cart` (
  `CustomerID` int(11) NOT NULL,
  `ProducID` int(11) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `CustomerID` int(11) NOT NULL,
  `FirstName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `MiddleInitial` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `LastName` varchar(40) COLLATE utf8_unicode_ci NOT NULL COMMENT 'NULL',
  `Address1` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Address2` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `City` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `State` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PostalCode` int(11) DEFAULT NULL,
  `Country` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `delivery` */

DROP TABLE IF EXISTS `delivery`;

CREATE TABLE `delivery` (
  `DeliveryID` int(11) NOT NULL,
  `OrderID_CH` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `CustomerID` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'NULL',
  `OrderID_IN` int(11) NOT NULL,
  PRIMARY KEY (`DeliveryID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `EmployeeID` int(11) NOT NULL,
  `FirstName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `MiddleInitial` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'NULL',
  `LastName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`EmployeeID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `orderhistory` */

DROP TABLE IF EXISTS `orderhistory`;

CREATE TABLE `orderhistory` (
  `HistoryID` int(11) NOT NULL,
  `FirstName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `MiddleInitial` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'NULL',
  `LastName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `OrderID` int(11) NOT NULL,
  `CustormerID` int(11) NOT NULL,
  PRIMARY KEY (`HistoryID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `OrderDate` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ShippingDate` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ArrivalDate` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CustomerID` int(11) NOT NULL,
  `ProductID` int(11) NOT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `ProductID` int(11) NOT NULL,
  `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Price` decimal(19,4) DEFAULT NULL,
  `Category` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `SalesID` int(11) NOT NULL,
  `EmployeeID` int(11) NOT NULL,
  `CustomerID` int(11) NOT NULL,
  `OrderID` int(11) NOT NULL,
  PRIMARY KEY (`SalesID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
