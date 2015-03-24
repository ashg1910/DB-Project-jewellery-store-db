-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_project
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `db_project`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `db_project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_project`;

--
-- Table structure for table `bill_produce`
--

DROP TABLE IF EXISTS `bill_produce`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bill_produce` (
  `item_code` char(10) NOT NULL DEFAULT '',
  `short_description` char(100) DEFAULT NULL,
  `category` char(10) DEFAULT NULL,
  `net` int(11) DEFAULT NULL,
  `gross` int(11) DEFAULT NULL,
  `reduction` int(11) DEFAULT NULL,
  `making` int(11) DEFAULT NULL,
  `wastage` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `price_discount` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bill_produce`
--

LOCK TABLES `bill_produce` WRITE;
/*!40000 ALTER TABLE `bill_produce` DISABLE KEYS */;
/*!40000 ALTER TABLE `bill_produce` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing_details`
--

DROP TABLE IF EXISTS `billing_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing_details` (
  `bill_no` int(11) NOT NULL AUTO_INCREMENT,
  `day` char(3) DEFAULT NULL,
  `month` char(3) DEFAULT NULL,
  `year` char(5) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `customer_id` char(15) DEFAULT NULL,
  PRIMARY KEY (`bill_no`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing_details`
--

LOCK TABLES `billing_details` WRITE;
/*!40000 ALTER TABLE `billing_details` DISABLE KEYS */;
INSERT INTO `billing_details` VALUES (1,'12','11','2014',244800,'9052054654'),(2,'12','11','2014',175275,'9550799619');
/*!40000 ALTER TABLE `billing_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commodity_rate`
--

DROP TABLE IF EXISTS `commodity_rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commodity_rate` (
  `type` char(20) NOT NULL DEFAULT '',
  `rate` int(11) DEFAULT NULL,
  PRIMARY KEY (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commodity_rate`
--

LOCK TABLES `commodity_rate` WRITE;
/*!40000 ALTER TABLE `commodity_rate` DISABLE KEYS */;
INSERT INTO `commodity_rate` VALUES ('Gold',3000);
/*!40000 ALTER TABLE `commodity_rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `config_menu`
--

DROP TABLE IF EXISTS `config_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `config_menu` (
  `item_code` char(10) NOT NULL DEFAULT '',
  `making` int(11) DEFAULT NULL,
  `wastage` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config_menu`
--

LOCK TABLES `config_menu` WRITE;
/*!40000 ALTER TABLE `config_menu` DISABLE KEYS */;
INSERT INTO `config_menu` VALUES ('101',1500,3),('102',1000,2);
/*!40000 ALTER TABLE `config_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `Name` char(20) DEFAULT NULL,
  `Phone` char(15) NOT NULL DEFAULT '',
  `Address` char(100) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `day` char(3) DEFAULT NULL,
  `month` char(3) DEFAULT NULL,
  `year` char(5) DEFAULT NULL,
  PRIMARY KEY (`Phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES ('Naman','9052054654','IIIT',201000,'12','11','2014'),('Aishwary','9550799619','IIIT',0,'12','11','2014'),('Ash','9829799144','Jaipur',0,'12','11','2014');
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exchange_item`
--

DROP TABLE IF EXISTS `exchange_item`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exchange_item` (
  `category` char(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `customer_id` char(15) DEFAULT NULL,
  `purity` int(11) DEFAULT NULL,
  `cost` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exchange_item`
--

LOCK TABLES `exchange_item` WRITE;
/*!40000 ALTER TABLE `exchange_item` DISABLE KEYS */;
INSERT INTO `exchange_item` VALUES ('Gold',10,'9052054654',90,27000);
/*!40000 ALTER TABLE `exchange_item` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `item_details`
--

DROP TABLE IF EXISTS `item_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `item_details` (
  `Id` char(10) NOT NULL DEFAULT '',
  `Quantity` int(11) DEFAULT NULL,
  `Category` char(10) DEFAULT NULL,
  `short_description` char(100) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `item_details`
--

LOCK TABLES `item_details` WRITE;
/*!40000 ALTER TABLE `item_details` DISABLE KEYS */;
INSERT INTO `item_details` VALUES ('101',16,'Gold','Bangles'),('102',16,'Gold','Necklace');
/*!40000 ALTER TABLE `item_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `uid` char(20) NOT NULL DEFAULT '',
  `pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES ('cashier','e6e3be2d833cdf5d9d4c7bc2f85cd098'),('supervisor','e6e3be2d833cdf5d9d4c7bc2f85cd098');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_details`
--

DROP TABLE IF EXISTS `sales_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales_details` (
  `Item_id` char(10) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Discount` int(11) DEFAULT NULL,
  `bill_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_details`
--

LOCK TABLES `sales_details` WRITE;
/*!40000 ALTER TABLE `sales_details` DISABLE KEYS */;
INSERT INTO `sales_details` VALUES ('101',184500,0,1),('102',67000,6700,1),('101',184500,9225,2);
/*!40000 ALTER TABLE `sales_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sales_return`
--

DROP TABLE IF EXISTS `sales_return`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sales_return` (
  `bill_number` int(11) DEFAULT NULL,
  `item_id` char(10) DEFAULT NULL,
  `description` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sales_return`
--

LOCK TABLES `sales_return` WRITE;
/*!40000 ALTER TABLE `sales_return` DISABLE KEYS */;
INSERT INTO `sales_return` VALUES (1,'101','broken');
/*!40000 ALTER TABLE `sales_return` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff_details`
--

DROP TABLE IF EXISTS `staff_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `staff_details` (
  `id` char(10) NOT NULL DEFAULT '',
  `Name` char(20) DEFAULT NULL,
  `Phone` char(15) DEFAULT NULL,
  `Address` char(100) DEFAULT NULL,
  `Salary` int(6) DEFAULT NULL,
  `Department` char(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff_details`
--

LOCK TABLES `staff_details` WRITE;
/*!40000 ALTER TABLE `staff_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `staff_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weight_details`
--

DROP TABLE IF EXISTS `weight_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weight_details` (
  `Net` int(11) DEFAULT NULL,
  `Gross` int(11) DEFAULT NULL,
  `Reduction` int(11) DEFAULT NULL,
  `item_code` char(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`item_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weight_details`
--

LOCK TABLES `weight_details` WRITE;
/*!40000 ALTER TABLE `weight_details` DISABLE KEYS */;
INSERT INTO `weight_details` VALUES (58,60,2,'101'),(20,20,0,'102');
/*!40000 ALTER TABLE `weight_details` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-11-13 17:14:30
