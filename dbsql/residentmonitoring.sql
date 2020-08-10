/*
SQLyog Enterprise v10.42 
MySQL - 5.5.5-10.4.11-MariaDB : Database - residentmonitoring
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`residentmonitoring` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `residentmonitoring`;

/*Table structure for table `tbl_admin` */

DROP TABLE IF EXISTS `tbl_admin`;

CREATE TABLE `tbl_admin` (
  `adminID` int(15) NOT NULL AUTO_INCREMENT,
  `adminPassword` varchar(20) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_admin` */

insert  into `tbl_admin`(`adminID`,`adminPassword`) values (101,'123');

/*Table structure for table `tbl_patient` */

DROP TABLE IF EXISTS `tbl_patient`;

CREATE TABLE `tbl_patient` (
  `patientQrtnID` int(8) NOT NULL AUTO_INCREMENT,
  `residentID` int(8) NOT NULL,
  `patientTest` varchar(10) NOT NULL,
  `patientStatus` varchar(10) NOT NULL,
  `patientType` varchar(10) NOT NULL,
  `patientQrtnType` varchar(20) NOT NULL,
  `patientQrtnStatus` varchar(20) NOT NULL,
  `patientQrtnStart` date NOT NULL,
  `patientQrtnEnd` date NOT NULL,
  `patientDiagnosis` varchar(30) NOT NULL,
  PRIMARY KEY (`patientQrtnID`),
  KEY `residentIDFK` (`residentID`),
  CONSTRAINT `residentIDFK` FOREIGN KEY (`residentID`) REFERENCES `tbl_resident` (`residentID`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=325 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_patient` */

insert  into `tbl_patient`(`patientQrtnID`,`residentID`,`patientTest`,`patientStatus`,`patientType`,`patientQrtnType`,`patientQrtnStatus`,`patientQrtnStart`,`patientQrtnEnd`,`patientDiagnosis`) values (301,201,'Swab','Negative','PUM','Homebase','Completed','2020-06-28','2020-07-11','Asymptomatic'),(302,202,'Swab','Positive','PUI','Isolation Unit','Completed','2020-08-09','2020-08-23','Symptomatic'),(324,202,'N/A','N/A','PUM','Homebase','On going','2020-08-10','2020-08-24','Under Observation');

/*Table structure for table `tbl_resident` */

DROP TABLE IF EXISTS `tbl_resident`;

CREATE TABLE `tbl_resident` (
  `residentID` int(8) NOT NULL AUTO_INCREMENT,
  `residentFname` varchar(20) NOT NULL,
  `residentMname` varchar(20) NOT NULL,
  `residentLname` varchar(20) NOT NULL,
  `residentSuffix` varchar(20) DEFAULT NULL,
  `residentGender` varchar(20) NOT NULL,
  `residentBirthdate` date NOT NULL,
  `residentCivilStatus` varchar(20) NOT NULL,
  `residentHouseno` int(20) DEFAULT NULL,
  `residentStreet` varchar(20) NOT NULL,
  `residentBrgy` varchar(20) NOT NULL,
  `residentCity` varchar(20) NOT NULL,
  `residentRegion` int(8) NOT NULL,
  `residentPhone` varchar(20) NOT NULL,
  `residentEmail` varchar(30) NOT NULL,
  PRIMARY KEY (`residentID`)
) ENGINE=InnoDB AUTO_INCREMENT=203 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tbl_resident` */

insert  into `tbl_resident`(`residentID`,`residentFname`,`residentMname`,`residentLname`,`residentSuffix`,`residentGender`,`residentBirthdate`,`residentCivilStatus`,`residentHouseno`,`residentStreet`,`residentBrgy`,`residentCity`,`residentRegion`,`residentPhone`,`residentEmail`) values (201,'John','Mid','Doe','II','Male','1998-07-28','Civil Status',123,'bbbbbb','aaaaaaaaaa','cccc',9,'+639056324487','sample1@gmail.com'),(202,'Jane','Doe','Dome','','Female','1990-12-12','Single',12,'aaaaaaa','aaaaaaaaaa','aaaaaaaaa',10,'+639056324485','sample2@gmail.com');

/*Table structure for table `latestentry` */

DROP TABLE IF EXISTS `latestentry`;

/*!50001 DROP VIEW IF EXISTS `latestentry` */;
/*!50001 DROP TABLE IF EXISTS `latestentry` */;

/*!50001 CREATE TABLE  `latestentry`(
 `residentID` int(8) ,
 `patientQrtnEnd` date 
)*/;

/*Table structure for table `viewalldatarecententry` */

DROP TABLE IF EXISTS `viewalldatarecententry`;

/*!50001 DROP VIEW IF EXISTS `viewalldatarecententry` */;
/*!50001 DROP TABLE IF EXISTS `viewalldatarecententry` */;

/*!50001 CREATE TABLE  `viewalldatarecententry`(
 `residentID` int(8) ,
 `residentFname` varchar(20) ,
 `residentMname` varchar(20) ,
 `residentLname` varchar(20) ,
 `residentSuffix` varchar(20) ,
 `residentGender` varchar(20) ,
 `residentBirthdate` date ,
 `residentCivilStatus` varchar(20) ,
 `residentHouseno` int(20) ,
 `residentStreet` varchar(20) ,
 `residentBrgy` varchar(20) ,
 `residentCity` varchar(20) ,
 `residentRegion` int(8) ,
 `residentPhone` varchar(20) ,
 `residentEmail` varchar(30) ,
 `patientQrtnID` int(8) ,
 `patientTest` varchar(10) ,
 `patientStatus` varchar(10) ,
 `patientType` varchar(10) ,
 `patientQrtnType` varchar(20) ,
 `patientQrtnStatus` varchar(20) ,
 `patientQrtnStart` date ,
 `patientQrtnEnd` date ,
 `patientDiagnosis` varchar(30) 
)*/;

/*View structure for view latestentry */

/*!50001 DROP TABLE IF EXISTS `latestentry` */;
/*!50001 DROP VIEW IF EXISTS `latestentry` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `latestentry` AS select `tbl_patient`.`residentID` AS `residentID`,max(`tbl_patient`.`patientQrtnEnd`) AS `patientQrtnEnd` from `tbl_patient` group by `tbl_patient`.`residentID` */;

/*View structure for view viewalldatarecententry */

/*!50001 DROP TABLE IF EXISTS `viewalldatarecententry` */;
/*!50001 DROP VIEW IF EXISTS `viewalldatarecententry` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewalldatarecententry` AS select `tbl_resident`.`residentID` AS `residentID`,`tbl_resident`.`residentFname` AS `residentFname`,`tbl_resident`.`residentMname` AS `residentMname`,`tbl_resident`.`residentLname` AS `residentLname`,`tbl_resident`.`residentSuffix` AS `residentSuffix`,`tbl_resident`.`residentGender` AS `residentGender`,`tbl_resident`.`residentBirthdate` AS `residentBirthdate`,`tbl_resident`.`residentCivilStatus` AS `residentCivilStatus`,`tbl_resident`.`residentHouseno` AS `residentHouseno`,`tbl_resident`.`residentStreet` AS `residentStreet`,`tbl_resident`.`residentBrgy` AS `residentBrgy`,`tbl_resident`.`residentCity` AS `residentCity`,`tbl_resident`.`residentRegion` AS `residentRegion`,`tbl_resident`.`residentPhone` AS `residentPhone`,`tbl_resident`.`residentEmail` AS `residentEmail`,`tbl_patient`.`patientQrtnID` AS `patientQrtnID`,`tbl_patient`.`patientTest` AS `patientTest`,`tbl_patient`.`patientStatus` AS `patientStatus`,`tbl_patient`.`patientType` AS `patientType`,`tbl_patient`.`patientQrtnType` AS `patientQrtnType`,`tbl_patient`.`patientQrtnStatus` AS `patientQrtnStatus`,`tbl_patient`.`patientQrtnStart` AS `patientQrtnStart`,`tbl_patient`.`patientQrtnEnd` AS `patientQrtnEnd`,`tbl_patient`.`patientDiagnosis` AS `patientDiagnosis` from ((`tbl_resident` join `tbl_patient` on(`tbl_resident`.`residentID` = `tbl_patient`.`residentID`)) join `latestentry` on(`tbl_patient`.`residentID` = `latestentry`.`residentID` and `tbl_patient`.`patientQrtnEnd` = `latestentry`.`patientQrtnEnd`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
