--
-- Script was generated by Devart dbForge Studio for MySQL, Version 6.3.358.0
-- Product home page: http://www.devart.com/dbforge/mysql/studio
-- Script date 12.01.2016 16:08:19
-- Server version: 5.5.8-log
-- Client version: 4.1
--


--
-- Definition for database test
--
DROP DATABASE IF EXISTS test;
CREATE DATABASE IF NOT EXISTS test
	CHARACTER SET utf8
	COLLATE utf8_general_ci;

-- 
-- Disable foreign keys
-- 
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;

-- 
-- Set SQL mode
-- 
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 
-- Set default database
--
USE test;

--
-- Definition for table reservation
--
CREATE TABLE IF NOT EXISTS reservation (
  Name VARCHAR(50) DEFAULT NULL,
  Username VARCHAR(255) DEFAULT NULL,
  Password VARCHAR(255) DEFAULT NULL,
  City VARCHAR(255) DEFAULT NULL,
  tUser VARCHAR(255) DEFAULT NULL
)
ENGINE = INNODB
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 
-- Restore previous SQL mode
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;