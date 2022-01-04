-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 19, 2020 at 11:59 PM
-- Server version: 5.6.44-log
-- PHP Version: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- Database: `kyle`
DELIMITER $$

-- Procedures
CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Delete_Microsoft` (IN `SYSTEM_ID` INT(11))  NO SQL
DELETE FROM `Microsoft` WHERE `Microsoft`.`System_ID` = SYSTEM_ID$$

CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Delete_Nintendo` (IN `SYSTEM_ID` INT(11))  NO SQL
DELETE FROM `Nintendo` WHERE `Nintendo`.`System_ID` = SYSTEM_ID$$

CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Delete_Sony` (IN `SYSTEM_ID` INT(11))  NO SQL
DELETE FROM `Sony` WHERE `Sony`.`System_ID` = SYSTEM_ID$$
-- ------------------------------------------------------

CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Insert_Microsoft` (IN `SYSTEM_ID` INT(11), IN `NAME` VARCHAR(25), IN `GENRE` VARCHAR(25), IN `GAME` VARCHAR(25), IN `RATING` INT(11))  NO SQL
INSERT INTO `Microsoft` (`System_ID`, `Name`, `Genre`,`Game`,`Rating`)
	VALUES(SYSTEM_ID, NAME, GENRE, GAME, RATING)$$

CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Insert_Nintendo` (IN `SYSTEM_ID` INT(11), IN `NAME` VARCHAR(25), IN `GENRE` VARCHAR(25), IN `GAME` VARCHAR(25), IN `RATING` INT(11))  NO SQL
INSERT INTO `Nintendo` (`System_ID`, `Name`, `Genre`,`Game`,`Rating`)
	VALUES(SYSTEM_ID, NAME, GENRE, GAME, RATING)$$

CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Insert_Sony` (IN `SYSTEM_ID` INT(11), IN `NAME` VARCHAR(25), IN `GENRE` VARCHAR(25), IN `GAME` VARCHAR(25), IN `RATING` INT(11))  NO SQL
INSERT INTO `Sony` (`System_ID`, `Name`, `Genre`,`Game`,`Rating`)
	VALUES(SYSTEM_ID, NAME, GENRE, GAME, RATING)$$
-- ------------------------------------------------------

CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Update_Microsoft` (IN `SYSTEM_ID` INT(11), IN `NAME` VARCHAR(25), IN `GENRE` VARCHAR(25), IN `GAME` VARCHAR(25), IN `RATING` INT(11))  NO SQL
UPDATE `Microsoft` 
	SET `Name` = NAME, `Genre` = GENRE,`Game` = GAME,
        `Rating` = RATING
    WHERE `Microsoft`.`System_ID` = SYSTEM_ID$$

CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Update_Nintendo` (IN `SYSTEM_ID` INT(11), IN `NAME` VARCHAR(25), IN `GENRE` VARCHAR(25), IN `GAME` VARCHAR(25), IN `RATING` INT(11))  NO SQL
UPDATE Nintendo
	SET Name = NAME,
        Genre = GENRE,
        Game = GAME,
  		Rating = RATING
        WHERE `Nintendo`.`System_ID` = SYSTEM_ID$$

CREATE DEFINER=`kyle`@`localhost` PROCEDURE `Update_Sony` (IN `SYSTEM_ID` INT(11), IN `NAME` VARCHAR(25), IN `GENRE` VARCHAR(25), IN `GAME` VARCHAR(25), IN `RATING` INT(11))  NO SQL
UPDATE Sony
	SET Name = NAME,
        Genre = GENRE,
        Game = GAME,
  		Rating = RATING
        WHERE `Sony`.`System_ID`= SYSTEM_ID$$

DELIMITER ;
-- ------------------------------------------------------
-- Table structure for table `Microsoft`

CREATE TABLE `Microsoft` (
  `System_ID` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Genre` varchar(25) DEFAULT NULL,
  `Game` varchar(25) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `Microsoft`

INSERT INTO `Microsoft` (`System_ID`, `Name`, `Genre`, `Game`, `Rating`) VALUES
(1, 'XBOX', 'Open-World RPG', 'Fable', 5),
(2, 'XBOX', 'Fighting', 'Fable II', 4);

-- --------------------------------------------------------
-- Table structure for table `Nintendo`

CREATE TABLE `Nintendo` (
  `System_ID` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Genre` varchar(25) DEFAULT NULL,
  `Game` varchar(25) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `Nintendo`
INSERT INTO `Nintendo` (`System_ID`, `Name`, `Genre`, `Game`, `Rating`) VALUES
(1, 'Gamecube', 'Fighting', 'Smash Bros', 4),
(2, 'Gameboy', 'Strategy', 'Fire Emblem', 4);
-- --------------------------------------------------------
-- Table structure for table `Sony`

CREATE TABLE `Sony` (
  `System_ID` int(11) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `Genre` varchar(25) DEFAULT NULL,
  `Game` varchar(25) DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table `Sony`
INSERT INTO `Sony` (`System_ID`, `Name`, `Genre`, `Game`, `Rating`) VALUES
(1, 'PS3', 'Action', 'DMC Devil May Cry', 4),
(2, 'PS4', 'Fantasy RPG', 'Spryto', 5);

-- Indexes for table `Microsoft`
ALTER TABLE `Microsoft`
  ADD PRIMARY KEY (`System_ID`);

-- Indexes for table `Nintendo`
ALTER TABLE `Nintendo`
  ADD PRIMARY KEY (`System_ID`);
  
-- Indexes for table `Sony`
ALTER TABLE `Sony`
  ADD PRIMARY KEY (`System_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
