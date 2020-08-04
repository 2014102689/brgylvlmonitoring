/*
SQLyog Enterprise v10.42 
MySQL - 5.5.5-10.4.11-MariaDB : Database - brgylvlmonitoring
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`brgylvlmonitoring` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `brgylvlmonitoring`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `adminID` int(15) NOT NULL AUTO_INCREMENT,
  `adminPassword` varchar(20) NOT NULL,
  `adminFname` varchar(20) NOT NULL,
  `adminMname` varchar(20) NOT NULL,
  `adminLname` varchar(20) NOT NULL,
  `adminSuffix` varchar(2) DEFAULT NULL,
  `adminBrgy` varchar(20) NOT NULL,
  `adminCity` varchar(20) NOT NULL,
  `adminRegion` int(8) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`adminID`,`adminPassword`,`adminFname`,`adminMname`,`adminLname`,`adminSuffix`,`adminBrgy`,`adminCity`,`adminRegion`) values (1,'123','bryan','m','sabejon',NULL,'a','a',10);

/*Table structure for table `tbl_patient` */

DROP TABLE IF EXISTS `tbl_patient`;

CREATE TABLE `tbl_patient` (
  `patientID` int(8) NOT NULL AUTO_INCREMENT,
  `patientFname` varchar(20) NOT NULL,
  `patientMname` varchar(20) NOT NULL,
  `patientLname` varchar(20) NOT NULL,
  `patientSuffix` varchar(20) DEFAULT NULL,
  `patientGender` varchar(20) NOT NULL,
  `patientBirthdate` date NOT NULL,
  `patientCivilStatus` varchar(20) NOT NULL,
  `patientHouseno` int(20) DEFAULT NULL,
  `patientStreet` varchar(20) NOT NULL,
  `patientBrgy` varchar(20) NOT NULL,
  `patientCity` varchar(20) NOT NULL,
  `patientRegion` int(8) NOT NULL,
  `patientPhone` varchar(20) NOT NULL,
  `patientEmail` varchar(30) NOT NULL,
  `patientRapid` varchar(10) NOT NULL,
  `patientSwab` varchar(10) NOT NULL,
  `patientType` varchar(10) NOT NULL,
  `patientQrtnType` varchar(10) NOT NULL,
  `patientQrtnStart` varchar(10) NOT NULL,
  `patientQrtnEnd` varchar(10) NOT NULL,
  `patientDiagnosis` varchar(30) NOT NULL,
  PRIMARY KEY (`patientID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_patient` */

insert  into `tbl_patient`(`patientID`,`patientFname`,`patientMname`,`patientLname`,`patientSuffix`,`patientGender`,`patientBirthdate`,`patientCivilStatus`,`patientHouseno`,`patientStreet`,`patientBrgy`,`patientCity`,`patientRegion`,`patientPhone`,`patientEmail`,`patientRapid`,`patientSwab`,`patientType`,`patientQrtnType`,`patientQrtnStart`,`patientQrtnEnd`,`patientDiagnosis`) values (1,'Bryan','minoza','Sabejon','','male','2020-12-12','single',1212112,'asdas','asdasd','cagayand ',10,'+639056324485','asdasdasd','adasdasd','asdasd','adsad','asdsad','2020-08-04','2020-08-04','sadasdasd');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
