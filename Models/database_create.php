<?php

    function create_datebase_tables(){
        // Create database
        $sql = "CREATE DATABASE shopee";
        if ($conn->query($sql) === TRUE) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . $conn->error;
        }

        // sql to create table
        $sql = "CREATE TABLE `cart` (
            `CustomerID` int(11) NOT NULL,
            `ProducID` int(11) NOT NULL,
            PRIMARY KEY (`CustomerID`)
          ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        // sql to create table
        $sql = "CREATE TABLE `customers` (
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
          ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }

        // sql to create table
        $sql = "CREATE TABLE `delivery` (
            `DeliveryID` int(11) NOT NULL,
            `OrderID_CH` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `CustomerID` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'NULL',
            `OrderID_IN` int(11) NOT NULL,
            PRIMARY KEY (`DeliveryID`)
            ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        // sql to create table
        $sql = "CREATE TABLE `employees` (
            `EmployeeID` int(11) NOT NULL,
            `FirstName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `MiddleInitial` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'NULL',
            `LastName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            PRIMARY KEY (`EmployeeID`)
          ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        // sql to create table
        $sql = "CREATE TABLE `orderhistory` (
            `HistoryID` int(11) NOT NULL,
            `FirstName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `MiddleInitial` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'NULL',
            `LastName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `OrderID` int(11) NOT NULL,
            `CustormerID` int(11) NOT NULL,
            PRIMARY KEY (`HistoryID`)
          ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        // sql to create table
        $sql = "CREATE TABLE `orders` (
            `OrderID` int(11) NOT NULL,
            `OrderDate` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `ShippingDate` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `ArrivalDate` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
            `Status` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
            `CustomerID` int(11) NOT NULL,
            `ProductID` int(11) NOT NULL,
            PRIMARY KEY (`OrderID`)
          ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        // sql to create table
        $sql = "CREATE TABLE `products` (
            `ProductID` int(11) NOT NULL,
            `Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
            `Price` decimal(19,4) DEFAULT NULL,
            `Category` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
            PRIMARY KEY (`ProductID`)
          ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        // sql to create table
        $sql = "CREATE TABLE `sales` (
            `SalesID` int(11) NOT NULL,
            `EmployeeID` int(11) NOT NULL,
            `CustomerID` int(11) NOT NULL,
            `OrderID` int(11) NOT NULL,
            PRIMARY KEY (`SalesID`)
          ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    }