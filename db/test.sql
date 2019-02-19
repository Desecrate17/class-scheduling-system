/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.6.12-log : Database - thesis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`thesis` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `thesis`;

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `CourseID` int(10) NOT NULL AUTO_INCREMENT,
  `CourseCode` varchar(10) NOT NULL,
  `CourseName` varchar(50) NOT NULL,
  `CourseMajor` tinytext NOT NULL,
  `CourseType` char(15) NOT NULL,
  `CourseCompletion` tinytext NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`CourseID`,`CourseCode`,`CourseName`,`CourseMajor`,`CourseType`,`CourseCompletion`,`DepartmentCode`) values (1,'BSCS','BACHELOR OF SCIENCE OF COMPUTER SCIENCE','1','BACCALAUREATE','1','MATH');
insert  into `course`(`CourseID`,`CourseCode`,`CourseName`,`CourseMajor`,`CourseType`,`CourseCompletion`,`DepartmentCode`) values (3,'BSIS','BACHELOR OF SCIENCE INFORMATION TECHNOLOGY','1','BACCALAUREATE','1','MATH');
insert  into `course`(`CourseID`,`CourseCode`,`CourseName`,`CourseMajor`,`CourseType`,`CourseCompletion`,`DepartmentCode`) values (2,'BSIT','BACHELOR OF SCIENCE INFORMATION SYSTEMS','1','BACCALAUREATE','1','MATH');

/*Table structure for table `curriculum` */

DROP TABLE IF EXISTS `curriculum`;

CREATE TABLE `curriculum` (
  `CurriculumID` int(10) NOT NULL AUTO_INCREMENT,
  `SchoolYear` varchar(50) DEFAULT NULL,
  `SubjectCode` varchar(50) DEFAULT NULL,
  `CourseCode` varchar(50) DEFAULT NULL,
  `Semester` varchar(50) DEFAULT NULL,
  `Year` varchar(50) DEFAULT NULL,
  `Prerequisite1` varchar(50) DEFAULT NULL,
  `Prerequisite2` varchar(50) DEFAULT NULL,
  `Prerequisite3` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CurriculumID`)
) ENGINE=MyISAM AUTO_INCREMENT=73 DEFAULT CHARSET=latin1;

/*Data for the table `curriculum` */

insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (1,'2015-2016','CHEM 11','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (2,'2015-2016','CHEM 11L','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (3,'2015-2016','CS 101','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (4,'2015-2016','CS 111','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (5,'2015-2016','CS 111L','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (6,'2015-2016','ENG 1','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (7,'2015-2016','MATH 1','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (8,'2015-2016','MATH 2A','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (9,'2015-2016','NSTP 1','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (10,'2015-2016','PE 1','BSCS','1st Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (11,'2015-2016','CS 122','BSCS','2nd Semester','1st Year','CS 101','CS 111','CS 111L');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (12,'2015-2016','CS 122L','BSCS','2nd Semester','1st Year','CS 101','CS 111','CS 111L');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (13,'2015-2016','CS 123','BSCS','2nd Semester','1st Year','MATH 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (14,'2015-2016','ENG 2','BSCS','2nd Semester','1st Year','ENG 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (15,'2015-2016','FIL 1','BSCS','2nd Semester','1st Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (16,'2015-2016','MATH 5A','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (17,'2015-2016','NSTP 2','BSCS','2nd Semester','1st Year','NSTP 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (18,'2015-2016','PE 2','BSCS','2nd Semester','1st Year','PE 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (19,'2015-2016','PHYS 1A','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (20,'2015-2016','PHYS 1AL','BSCS','2nd Semester','1st Year','MATH 1','MATH 2A','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (21,'2016-2017','CS 211','BSCS','1st Semester','2nd Year','CS 122','CS 122L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (22,'2016-2017','CS 211L','BSCS','1st Semester','2nd Year','CS 122','CS 122L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (23,'2016-2017','CS 212','BSCS','1st Semester','2nd Year','CS 122','CS 122L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (24,'2016-2017','CS 212L','BSCS','1st Semester','2nd Year','CS 122','CS 122L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (25,'2016-2017','CS 213','BSCS','1st Semester','2nd Year','CS 123','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (26,'2016-2017','ENG 3','BSCS','1st Semester','2nd Year','ENG 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (27,'2016-2017','MATH 6','BSCS','1st Semester','2nd Year','MATH 5A','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (28,'2016-2017','PE 3','BSCS','1st Semester','2nd Year','PE 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (29,'2016-2017','PHYS 2B','BSCS','1st Semester','2nd Year','PHYS1A','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (30,'2016-2017','PHYS 2BL','BSCS','1st Semester','2nd Year','PHYS1A','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (31,'2016-2017','SS 1','BSCS','1st Semester','2nd Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (32,'2016-2017','CS 221','BSCS','2nd Semester','2nd Year','CS 211','CS 211L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (33,'2016-2017','CS 222','BSCS','2nd Semester','2nd Year','CS 123','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (34,'2016-2017','CS 222L','BSCS','2nd Semester','2nd Year','CS 123','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (35,'2016-2017','CS 223','BSCS','2nd Semester','2nd Year','CS 212','CS 212L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (36,'2016-2017','CS 223L','BSCS','2nd Semester','2nd Year','CS 212','CS 212L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (37,'2016-2017','FIL 2','BSCS','2nd Semester','2nd Year','FIL 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (38,'2016-2017','HUM 1','BSCS','2nd Semester','2nd Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (39,'2016-2017','MATH 8','BSCS','2nd Semester','2nd Year','MATH 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (40,'2016-2017','PE 4','BSCS','2nd Semester','2nd Year','PE 1','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (41,'2017-2018','CS 311','BSCS','1st Semester','3rd Year','CS 211','CS 212','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (42,'2017-2018','CS 311L','BSCS','1st Semester','3rd Year','CS 211','CS 212','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (43,'2017-2018','CS 312','BSCS','1st Semester','3rd Year','CS 222','CS 222L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (44,'2017-2018','CS 312L','BSCS','1st Semester','3rd Year','CS 222','CS 222L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (45,'2017-2018','CS 313','BSCS','1st Semester','3rd Year','CS 223','CS 223L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (46,'2017-2018','CS 314','BSCS','1st Semester','3rd Year','MATH 8','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (47,'2017-2018','CSE 1','BSCS','1st Semester','3rd Year','CS 221','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (48,'2017-2018','CSF 1','BSCS','1st Semester','3rd Year','MATH 6','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (49,'2017-2018','HUM 2','BSCS','1st Semester','3rd Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (50,'2017-2018','SS 2','BSCS','1st Semester','3rd Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (51,'2017-2018','CS 321','BSCS','2nd Semester','3rd Year','CS 311','CS 311L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (52,'2017-2018','CS 321L','BSCS','2nd Semester','3rd Year','CS 311','CS 311L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (53,'2017-2018','CS 322','BSCS','2nd Semester','3rd Year','CS 311','CS 311L','CS 314');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (54,'2017-2018','CS 322L','BSCS','2nd Semester','3rd Year','CS 311','CS 311L','CS 314');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (55,'2017-2018','CS 323','BSCS','2nd Semester','3rd Year','CS 223','CS 312','CS 223L');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (56,'2017-2018','CS 323L','BSCS','2nd Semester','3rd Year','CS 223','CS 223','CS 312');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (57,'2017-2018','CSE 2','BSCS','2nd Semester','3rd Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (58,'2017-2018','CSF 2','BSCS','2nd Semester','3rd Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (59,'2017-2018','HRM 3','BSCS','2nd Semester','3rd Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (60,'2017-2018','SS3','BSCS','2nd Semester','3rd Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (61,'2018-2019','CS 411','BSCS','1st Semester','4th Year','MATH 6','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (62,'2018-2019','CS 412','BSCS','1st Semester','4th Year','CS 323','CS 323L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (63,'2018-2019','CS 412L','BSCS','1st Semester','4th Year','CS 323','CS 323L','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (64,'2018-2019','CS 413','BSCS','1st Semester','4th Year','CS 101','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (65,'2018-2019','CSE 3','BSCS','1st Semester','4th Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (66,'2018-2019','SS 4','BSCS','1st Semester','4th Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (67,'2018-2019','THESIS 1','BSCS','1st Semester','4th Year','CS 314','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (68,'2018-2019','CSE 4','BSCS','2nd Semester','4th Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (69,'2018-2019','CSF 3','BSCS','2nd Semester','4th Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (70,'2018-2019','CSF 4','BSCS','2nd Semester','4th Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (71,'2018-2019','RIZAL','BSCS','2nd Semester','4th Year','','','');
insert  into `curriculum`(`CurriculumID`,`SchoolYear`,`SubjectCode`,`CourseCode`,`Semester`,`Year`,`Prerequisite1`,`Prerequisite2`,`Prerequisite3`) values (72,'2018-2019','THESIS 2','BSCS','2nd Semester','4th Year','THESIS 1','','');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `DepartmentID` int(10) NOT NULL AUTO_INCREMENT,
  `CollegeID` char(10) DEFAULT 'COS',
  `DepartmentName` char(40) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`DepartmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`DepartmentID`,`CollegeID`,`DepartmentName`,`DepartmentCode`,`Status`) values (1,'COS','MATH','MATH','A');
insert  into `department`(`DepartmentID`,`CollegeID`,`DepartmentName`,`DepartmentCode`,`Status`) values (2,'COS','PHYSICS','PHYS','A');
insert  into `department`(`DepartmentID`,`CollegeID`,`DepartmentName`,`DepartmentCode`,`Status`) values (3,'COS','CHEMISTRY','CHEM','A');
insert  into `department`(`DepartmentID`,`CollegeID`,`DepartmentName`,`DepartmentCode`,`Status`) values (4,'COS','TACTICAL','TAC','D');
insert  into `department`(`DepartmentID`,`CollegeID`,`DepartmentName`,`DepartmentCode`,`Status`) values (15,'COS','NAME','CODE','D');

/*Table structure for table `faculty` */

DROP TABLE IF EXISTS `faculty`;

CREATE TABLE `faculty` (
  `ProfID` int(10) NOT NULL AUTO_INCREMENT,
  `Firstname` char(50) DEFAULT NULL,
  `Middlename` char(50) DEFAULT NULL,
  `Lastname` char(50) DEFAULT NULL,
  `PositionCode` varchar(20) DEFAULT NULL,
  `Contact` varchar(20) DEFAULT NULL,
  `DepartmentCode` varchar(10) DEFAULT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`ProfID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `faculty` */

insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (1,'EDGARDO','PIO','DELA CRUZ','3','(+63)921 581 7290','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (2,'JOHN','DOE','CRUZ','4','(+63)999 012 3571','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (3,'ALBERT','GIN','CASTAN','1','(+63)907 277 0813','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (4,'ADRIAN','CILIA','DELOS REYES','5','(+63)927 571 0253','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (5,'RUDY','GINO','FERNANDEZ','7','(+63)991 252 1721','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (6,'EPI','LI','DIZON','2','(+63)921 310 1213','CHEM','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (7,'MONICA','LAWLIET','ABANICO','12','(+63)990 281 7953','PHYS','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (8,'GIAN','CARLOS','LEE','3','(+63)900 211 5326','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (9,'ROBERT','QUIZON','GOMEZ','12','(+63)927 708 1321','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (10,'FELIPE','NICOLAS','ZALONGA','6','(+63)920 013 7980','PHYS','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (11,'RAFAEL','MATIAS','BAUTISTA','7','(+63)906 172 4821','PHYS','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (12,'JONATHAN','CRUZ','ALONZO','13','(+63)917 277 8491','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (13,'DIEGO','VILLAMOR','AGUINALDO','1','(+63)919 778 1326','CHEM','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (14,'PATRICK','LUY','REYES','3','(+63)992 789 1092','CHEM','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (15,'ADRIAN','RIVEN','PANGILINAN','4','(+63)919 278 9133','PHYS','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (16,'ABIGAIL','LAU','PAULO','5','(+63)902 813 9411','CHEM','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (17,'MARY ANNE','ROQUE','RECTO','6','(+63)917 213 6221','PHYS','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (18,'ARTHUR','JAN','AQUINO','7','(+63)921 556 8170','CHEM','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (19,'FERNANDO','CARDO','POE','1','(+63)922 168 7111','PHYS','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (20,'CARLOS','ORTIGO','PINEDA','2','(+63)904 578 1932','MATH','A');
insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`Status`) values (21,'NATHAN','LEO','AVILLA','12','(+63)920 789 5991','PHYS','A');

/*Table structure for table `policy` */

DROP TABLE IF EXISTS `policy`;

CREATE TABLE `policy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policyName` text NOT NULL,
  `policyValue` text NOT NULL,
  `policyTitle` text NOT NULL,
  `policyDescription` text NOT NULL,
  `policyDefaultValue` text NOT NULL,
  `policyDataType` text NOT NULL,
  `policyGroup` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

/*Data for the table `policy` */

insert  into `policy`(`id`,`policyName`,`policyValue`,`policyTitle`,`policyDescription`,`policyDefaultValue`,`policyDataType`,`policyGroup`) values (4,'pootPure','25','Pure Teaching / Quasi Teaching','','25','HoursPerWeek','Official Time');
insert  into `policy`(`id`,`policyName`,`policyValue`,`policyTitle`,`policyDescription`,`policyDefaultValue`,`policyDataType`,`policyGroup`) values (5,'pootAdmin','40','Administrative','Faculty designated as Deans, Directors, Department head, University secretary and other administrative functions','40','HoursPerWeek','Official Time');
insert  into `policy`(`id`,`policyName`,`policyValue`,`policyTitle`,`policyDescription`,`policyDefaultValue`,`policyDataType`,`policyGroup`) values (6,'pootRsrchExt','40','Research and Extension','Faculty with research and extension functions','40','HoursPerWeek','Official Time');
insert  into `policy`(`id`,`policyName`,`policyValue`,`policyTitle`,`policyDescription`,`policyDefaultValue`,`policyDataType`,`policyGroup`) values (16,'rtlHead','6','Department Head','','6','HoursPerWeek','FTE for Administratives');
insert  into `policy`(`id`,`policyName`,`policyValue`,`policyTitle`,`policyDescription`,`policyDefaultValue`,`policyDataType`,`policyGroup`) values (20,'semester','1st Semester','Semester','','1st Semester','dropDown','General');
insert  into `policy`(`id`,`policyName`,`policyValue`,`policyTitle`,`policyDescription`,`policyDefaultValue`,`policyDataType`,`policyGroup`) values (21,'timeShiftMorning','8','Morning Time Shift','','5','slide','General');
insert  into `policy`(`id`,`policyName`,`policyValue`,`policyTitle`,`policyDescription`,`policyDefaultValue`,`policyDataType`,`policyGroup`) values (22,'timeShiftAfternoon','4','Afternoon Time Shift','','6','slide','General');

/*Table structure for table `position` */

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `PositionID` int(10) NOT NULL AUTO_INCREMENT,
  `PositionCode` int(5) DEFAULT NULL,
  `PositionName` varchar(50) DEFAULT NULL,
  `PositionDesc` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`PositionID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `position` */

insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (2,1,'DEPARTMENT HEAD','1st');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (3,2,'PROFESSOR 1','2nd');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (4,3,'PROFESSOR 2','3rd');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (5,4,'PROFESSOR 3','4th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (6,5,'PROFESSOR 4','5th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (7,6,'PROFESSOR 5','6th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (8,7,'PROFESSOR 6','7th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (9,8,'PROFESSOR 7','8th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (10,9,'INSTRUCTOR 1','9th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (11,10,'INSTRUCTOR 2','10th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (12,11,'INSTRUCTOR 3','11th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (13,12,'ASSISTANT PROFESSOR 1','12th');
insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values (14,13,'ASSISTANT PROFESSOR 2','13th');

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `RoomID` int(10) NOT NULL AUTO_INCREMENT,
  `RoomNo` int(10) NOT NULL,
  `RoomStatus` char(15) NOT NULL DEFAULT 'Physical',
  `RoomType` char(10) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `room` */

insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values (1,301,'Physical','Lecture','MATH');
insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values (2,302,'Physical','Lecture','MATH');
insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values (3,303,'Physical','Lecture','MATH');
insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values (4,304,'Physical','Lecture','MATH');
insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values (5,311,'Physical','Laboratory','MATH');
insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values (6,313,'Dummy','Laboratory','MATH');

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `SchedID` int(10) NOT NULL AUTO_INCREMENT,
  `SchedName` varchar(50) NOT NULL,
  `SchedTime` time NOT NULL,
  `SchedEnd` time DEFAULT NULL,
  `SchedDays` varchar(50) NOT NULL,
  `SchedRoom` varchar(50) NOT NULL,
  `SchedProf` varchar(50) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `SubjectType` varchar(50) NOT NULL,
  `SubjectHours` int(5) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  PRIMARY KEY (`SchedID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`SchedID`,`SchedName`,`SchedTime`,`SchedEnd`,`SchedDays`,`SchedRoom`,`SchedProf`,`SubjectCode`,`SubjectName`,`SubjectType`,`SubjectHours`,`DepartmentCode`) values (1,'Sched1','08:00:00','10:00:00','tuesday','1','1','CS 101','Computer Fundamentals','Lecture',2,'MATH');

/*Table structure for table `section` */

DROP TABLE IF EXISTS `section`;

CREATE TABLE `section` (
  `SectionID` int(10) NOT NULL AUTO_INCREMENT,
  `SectionYearLvl` varchar(50) DEFAULT NULL,
  `SectionCode` varchar(10) DEFAULT NULL,
  `SectionSchoolYr` varchar(50) DEFAULT NULL,
  `SectionSemester` varchar(50) DEFAULT NULL,
  `CourseCode` varchar(10) DEFAULT NULL,
  `DepartmentCode` varchar(10) DEFAULT NULL,
  `Timeshift` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`SectionID`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

/*Data for the table `section` */

insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (1,'1st Year','A','2015-2016','1st Semester','BSCS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (2,'1st Year','B','2015-2016','1st Semester','BSCS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (3,'1st Year','A','2015-2016','1st Semester','BSIT','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (4,'1st Year','B','2015-2016','1st Semester','BSIT','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (61,'4th Year','A','2018-2019','2nd Semester','BSIT','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (62,'4th Year','B','2018-2019','2nd Semester','BSIT','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (47,'3rd Year','A','2017-2018','2nd Semester','BSCS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (48,'3rd Year','B','2017-2018','2nd Semester','BSCS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (7,'1st Year','A','2015-2016','1st Semester','BSIS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (8,'1st Year','B','2015-2016','1st Semester','BSIS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (53,'4th Year','A','2018-2019','1st Semester','BSCS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (54,'4th Year','B','2018-2019','1st Semester','BSCS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (11,'1st Year','A','2015-2016','2nd Semester','BSCS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (12,'1st Year','B','2015-2016','2nd Semester','BSCS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (13,'1st Year','A','2015-2016','2nd Semester','BSIT','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (14,'1st Year','B','2015-2016','2nd Semester','BSIT','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (63,'4th Year','A','2018-2019','2nd Semester','BSIS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (64,'4th Year','B','2018-2019','2nd Semester','BSIS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (43,'3rd Year','A','2017-2018','1st Semester','BSIT','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (44,'3rd Year','B','2017-2018','1st Semester','BSIT','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (17,'1st Year','A','2015-2016','2nd Semester','BSIS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (18,'1st Year','B','2015-2016','2nd Semester','BSIS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (45,'3rd Year','A','2017-2018','1st Semester','BSIS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (46,'3rd Year','B','2017-2018','1st Semester','BSIS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (21,'2nd Year','A','2016-2017','1st Semester','BSCS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (22,'2nd Year','B','2016-2017','1st Semester','BSCS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (23,'2nd Year','A','2016-2017','1st Semester','BSIT','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (24,'2nd Year','B','2016-2017','1st Semester','BSIT','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (59,'4th Year','A','2018-2019','2nd Semester','BSCS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (60,'4th Year','B','2018-2019','2nd Semester','BSCS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (49,'3rd Year','A','2017-2018','2nd Semester','BSIT','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (50,'3rd Year','B','2017-2018','2nd Semester','BSIT','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (27,'2nd Year','A','2016-2017','1st Semester','BSIS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (28,'2nd Year','B','2016-2017','1st Semester','BSIS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (51,'3rd Year','A','2017-2018','2nd Semester','BSIS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (52,'3rd Year','B','2017-2018','2nd Semester','BSIS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (31,'2nd Year','A','2016-2017','2nd Semester','BSCS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (32,'2nd Year','B','2016-2017','2nd Semester','BSCS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (33,'2nd Year','A','2016-2017','2nd Semester','BSIT','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (34,'2nd Year','B','2016-2017','2nd Semester','BSIT','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (55,'4th Year','A','2018-2019','1st Semester','BSIT','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (56,'4th Year','B','2018-2019','1st Semester','BSIT','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (37,'2nd Year','A','2016-2017','2nd Semester','BSIS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (38,'2nd Year','B','2016-2017','2nd Semester','BSIS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (57,'4th Year','A','2018-2019','1st Semester','BSIS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (58,'4th Year','B','2018-2019','1st Semester','BSIS','MATH','Afternoon');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (41,'3rd Year','A','2017-2018','1st Semester','BSCS','MATH','Morning');
insert  into `section`(`SectionID`,`SectionYearLvl`,`SectionCode`,`SectionSchoolYr`,`SectionSemester`,`CourseCode`,`DepartmentCode`,`Timeshift`) values (42,'3rd Year','B','2017-2018','1st Semester','BSCS','MATH','Afternoon');

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `SubjectID` int(10) NOT NULL AUTO_INCREMENT,
  `SubjectCode` varchar(10) DEFAULT NULL,
  `SubjectName` varchar(50) DEFAULT NULL,
  `LecHours` int(15) DEFAULT '0',
  `LecUnits` int(15) DEFAULT '0',
  `LabHours` int(15) DEFAULT '0',
  `LabUnits` int(15) DEFAULT '0',
  `SubjectDeptCode` varchar(10) DEFAULT NULL,
  `SubjectType` varchar(20) DEFAULT NULL,
  `SubjectDay` varchar(20) NOT NULL DEFAULT 'monday to saturday',
  `Status` char(1) NOT NULL DEFAULT 'A',
  PRIMARY KEY (`SubjectID`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (1,'CHEM 11','General Chemestry Lecture',3,3,0,0,'CHEM','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (2,'CHEM 11L','General Chemestry Laboratory',0,0,3,1,'CHEM','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (3,'CS 101','Computer Fundamentals',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (4,'CS 111','Computer Programming 1 Lecture',2,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (5,'CS 111L','Computer Programming 1 Laboratory',0,0,3,3,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (6,'MATH 1','College Algebra',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (7,'MATH 2A','Plane and Spherical Trigonometry',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (8,'CS 122','Computer Programming 2 Lecture',2,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (9,'CS 122L','Computer Programming 2 Laboratory',0,0,3,3,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (10,'CS 123','Discrete Structures',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (11,'MATH 5A','Differential Calculus and Anal Geometry',3,5,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (12,'PHYS 1A','Mechanics Lecture',3,3,0,0,'PHYS','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (13,'PHYS 1AL','Mechanics Laboratory',0,0,3,1,'PHYS','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (14,'CS 211','Data Structures Lecture',2,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (15,'CS 211L','Data Structures Laboratory',0,0,3,3,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (16,'CS 212','Object Oriented Programming Lecture',2,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (17,'CS 212L','Object Oriented Programming Laboratory',0,0,3,3,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (18,'CS 213','Combinatorics and Graph Theory',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (19,'MATH 6','Integral Calculus',3,4,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (20,'PHYS 2B','Electricity and Magnetism Lecture',3,3,0,0,'PHYS','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (21,'PHYS 2BL','Electricity and Magnetism Laboratory',0,0,3,1,'PHYS','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (22,'CS 221','Design and Analysis of Algorithm',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (23,'CS 222','Digital Design',2,2,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (24,'CS 222L','Digital Design Laboratory',0,0,3,1,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (25,'CS 223','Programming Languages Lecture',3,2,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (26,'CS 223L','Programming Languages Laboratory',0,0,3,1,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (27,'MATH 8','Probability and Statistics',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (28,'CS 311','Database Systems Lecture',2,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (29,'CS 311L','Database Systems Laboratory',0,0,3,1,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (30,'CS 312','Computer Organization Lecture',2,2,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (31,'CS 312L','Computer Organization Laboratory',0,0,3,1,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (32,'CS 313','Automata and Language Theory',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (33,'CS 314','Research Methods',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (34,'CSE 1','CS Elective 1',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (35,'CSF 1','Free Elective 1',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (41,'CS 321','Web Programming Lec',2,2,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (42,'CS 321L','Web Programming Lab',0,0,3,1,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (43,'CS 322','Software Engineering Lec',3,2,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (44,'CS 322L','Software Engineering Lab',0,0,3,1,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (45,'CS 323','Operating Systems Lec',3,2,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (46,'CS 323L','Operating Systems Lab',0,0,3,1,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (47,'CSE 2','CS Elective 2',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (48,'CSF 2','Free Elective 2',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (49,'CS 411','Modelling and Simulation',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (50,'CS 412','Network Principles and Programming Lec',2,2,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (51,'CS 412L','Network Principles and Programming Lab',0,0,3,1,'MATH','Laboratory','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (52,'CS 413','Professional Ethics',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (53,'CSE 3','CS Elective 3',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (54,'THESIS 1','Thesis Writing 1',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (55,'CSE 4','CS Elective 4',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (56,'CSF 3','Free Elective 3',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (57,'CSF 4','Free Elective 4',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (58,'THESIS 2','Thesis Writing 2',3,3,0,0,'MATH','Lecture','monday to saturday','A');
insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values (59,NULL,NULL,0,0,0,0,NULL,'Lecture','monday to saturday','A');

/*Table structure for table `subject_list` */

DROP TABLE IF EXISTS `subject_list`;

CREATE TABLE `subject_list` (
  `SubjectLID` int(10) NOT NULL AUTO_INCREMENT,
  `ProfID` int(10) DEFAULT NULL,
  `SubjectCode` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`SubjectLID`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `subject_list` */

insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (3,2,'MATH 1');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (4,3,'MATH 2A');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (5,4,'CS 122');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (6,5,'CS 122L');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (33,2,'CS 111');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (34,1,'CS 101');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (35,1,'CS 111');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (36,1,'MATH 1');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (37,7,'PHYS 2B');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (38,7,'PHYS 2BL');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (39,4,'CS 111');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (40,4,'CS 111L');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (41,4,'CS 122L');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (42,5,'CS 111L');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (43,8,'MATH 1');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (44,8,'MATH 2A');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (45,8,'CS 213');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (46,8,'MATH 6');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (47,9,'CSE 1');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (48,9,'CSF 1');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (49,9,'CSE 2');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (50,9,'CSF 2');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (51,10,'PHYS 1A');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (52,10,'PHYS 1AL');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (53,11,'PHYS 1AL');
insert  into `subject_list`(`SubjectLID`,`ProfID`,`SubjectCode`) values (54,11,'PHYS 2BL');

/*Table structure for table `time_list` */

DROP TABLE IF EXISTS `time_list`;

CREATE TABLE `time_list` (
  `TimeLID` int(10) NOT NULL AUTO_INCREMENT,
  `ProfID` int(10) DEFAULT NULL,
  `Days` char(10) DEFAULT NULL,
  `Shift` char(10) DEFAULT NULL,
  `TimeID` int(10) DEFAULT NULL,
  PRIMARY KEY (`TimeLID`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=latin1;

/*Data for the table `time_list` */

insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (20,1,'Monday','Morning',7);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (21,1,'Monday','Morning',8);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (22,1,'Monday','Morning',9);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (38,7,'Monday','Morning',7);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (39,7,'Monday','Morning',8);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (40,7,'Monday','Morning',9);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (44,7,'Monday','Afternoon',13);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (45,7,'Monday','Afternoon',14);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (46,7,'Tuesday','Morning',32);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (47,7,'Tuesday','Morning',33);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (48,7,'Tuesday','Morning',34);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (49,7,'Monday','Morning',10);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (50,7,'Thursday','Morning',80);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (51,7,'Thursday','Morning',81);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (64,6,'Monday','Morning',8);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (65,6,'Monday','Morning',9);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (66,1,'Friday','Afternoon',109);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (67,1,'Friday','Afternoon',110);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (68,1,'Friday','Afternoon',111);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (69,1,'Friday','Afternoon',112);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (70,1,'Friday','Afternoon',113);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (71,1,'Wednesday','Morning',56);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (72,1,'Wednesday','Morning',57);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (73,1,'Wednesday','Morning',58);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (74,2,'Tuesday','Morning',31);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (75,2,'Tuesday','Morning',32);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (76,2,'Tuesday','Morning',33);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (77,2,'Tuesday','Morning',34);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (78,2,'Wednesday','Morning',56);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (79,2,'Wednesday','Morning',57);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (80,2,'Wednesday','Morning',58);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (81,2,'Friday','Afternoon',110);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (82,2,'Friday','Afternoon',111);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (83,2,'Friday','Afternoon',112);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (84,4,'Saturday','Morning',130);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (85,4,'Saturday','Morning',131);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (86,4,'Saturday','Morning',132);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (87,4,'Saturday','Afternoon',133);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (88,4,'Saturday','Afternoon',134);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (89,4,'Saturday','Afternoon',135);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (90,5,'Wednesday','Morning',55);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (91,5,'Wednesday','Morning',56);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (92,5,'Wednesday','Morning',57);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (93,5,'Thursday','Afternoon',85);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (94,5,'Thursday','Afternoon',86);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (95,5,'Thursday','Afternoon',87);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (96,5,'Thursday','Afternoon',88);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (97,8,'Monday','Morning',9);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (98,8,'Monday','Morning',10);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (99,8,'Monday','Morning',11);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (100,8,'Monday','Morning',12);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (101,8,'Tuesday','Morning',32);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (102,8,'Tuesday','Morning',33);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (103,8,'Tuesday','Morning',34);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (104,8,'Tuesday','Morning',35);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (105,8,'Friday','Afternoon',109);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (106,8,'Friday','Afternoon',110);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (107,8,'Friday','Afternoon',111);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (108,8,'Friday','Afternoon',112);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (109,9,'Tuesday','Afternoon',37);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (110,9,'Tuesday','Afternoon',38);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (111,9,'Tuesday','Afternoon',39);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (112,9,'Tuesday','Afternoon',40);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (113,9,'Tuesday','Afternoon',41);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (114,9,'Thursday','Afternoon',85);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (115,9,'Thursday','Afternoon',86);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (116,9,'Thursday','Afternoon',87);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (117,9,'Thursday','Afternoon',88);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (118,9,'Thursday','Afternoon',89);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (119,10,'Monday','Morning',9);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (120,10,'Monday','Morning',10);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (121,10,'Monday','Morning',11);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (122,10,'Monday','Morning',12);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (123,10,'Tuesday','Morning',34);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (124,10,'Tuesday','Morning',35);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (125,10,'Friday','Afternoon',109);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (126,10,'Friday','Afternoon',110);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (127,10,'Friday','Afternoon',111);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (128,11,'Wednesday','Morning',55);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (129,11,'Wednesday','Morning',56);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (130,11,'Wednesday','Morning',57);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (131,11,'Wednesday','Morning',58);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (132,11,'Wednesday','Morning',59);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (133,11,'Wednesday','Morning',60);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (134,11,'Friday','Afternoon',111);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (135,11,'Friday','Afternoon',112);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (136,11,'Tuesday','Afternoon',37);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (137,11,'Tuesday','Afternoon',38);
insert  into `time_list`(`TimeLID`,`ProfID`,`Days`,`Shift`,`TimeID`) values (138,11,'Tuesday','Afternoon',39);

/*Table structure for table `timee` */

DROP TABLE IF EXISTS `timee`;

CREATE TABLE `timee` (
  `TimeID` int(10) NOT NULL AUTO_INCREMENT,
  `Day` char(10) DEFAULT NULL,
  `Shift` char(10) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  PRIMARY KEY (`TimeID`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=latin1;

/*Data for the table `timee` */

insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (7,'Monday','Morning','07:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (8,'Monday','Morning','08:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (9,'Monday','Morning','09:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (10,'Monday','Morning','10:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (11,'Monday','Morning','11:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (12,'Monday','Morning','12:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (13,'Monday','Afternoon','13:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (14,'Monday','Afternoon','14:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (15,'Monday','Afternoon','15:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (16,'Monday','Afternoon','16:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (17,'Monday','Afternoon','17:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (18,'Monday','Afternoon','18:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (19,'Monday','Afternoon','19:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (31,'Tuesday','Morning','07:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (32,'Tuesday','Morning','08:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (33,'Tuesday','Morning','09:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (34,'Tuesday','Morning','10:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (35,'Tuesday','Morning','11:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (36,'Tuesday','Morning','12:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (37,'Tuesday','Afternoon','13:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (38,'Tuesday','Afternoon','14:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (39,'Tuesday','Afternoon','15:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (40,'Tuesday','Afternoon','16:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (41,'Tuesday','Afternoon','17:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (42,'Tuesday','Afternoon','18:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (43,'Tuesday','Afternoon','19:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (55,'Wednesday','Morning','07:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (56,'Wednesday','Morning','08:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (57,'Wednesday','Morning','09:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (58,'Wednesday','Morning','10:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (59,'Wednesday','Morning','11:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (60,'Wednesday','Morning','12:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (61,'Wednesday','Afternoon','13:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (62,'Wednesday','Afternoon','14:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (63,'Wednesday','Afternoon','15:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (64,'Wednesday','Afternoon','16:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (65,'Wednesday','Afternoon','17:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (66,'Wednesday','Afternoon','18:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (67,'Wednesday','Afternoon','19:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (79,'Thursday','Morning','07:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (80,'Thursday','Morning','08:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (81,'Thursday','Morning','09:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (82,'Thursday','Morning','10:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (83,'Thursday','Morning','11:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (84,'Thursday','Morning','12:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (85,'Thursday','Afternoon','13:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (86,'Thursday','Afternoon','14:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (87,'Thursday','Afternoon','15:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (88,'Thursday','Afternoon','16:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (89,'Thursday','Afternoon','17:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (90,'Thursday','Afternoon','18:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (91,'Thursday','Afternoon','19:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (103,'Friday','Morning','07:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (104,'Friday','Morning','08:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (105,'Friday','Morning','09:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (106,'Friday','Morning','10:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (107,'Friday','Morning','11:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (108,'Friday','Morning','12:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (109,'Friday','Afternoon','13:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (110,'Friday','Afternoon','14:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (111,'Friday','Afternoon','15:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (112,'Friday','Afternoon','16:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (113,'Friday','Afternoon','17:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (114,'Friday','Afternoon','18:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (115,'Friday','Afternoon','19:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (127,'Saturday','Morning','07:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (128,'Saturday','Morning','08:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (129,'Saturday','Morning','09:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (130,'Saturday','Morning','10:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (131,'Saturday','Morning','11:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (132,'Saturday','Morning','12:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (133,'Saturday','Afternoon','13:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (134,'Saturday','Afternoon','14:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (135,'Saturday','Afternoon','15:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (136,'Saturday','Afternoon','16:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (137,'Saturday','Afternoon','17:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (138,'Saturday','Afternoon','18:00:00');
insert  into `timee`(`TimeID`,`Day`,`Shift`,`Time`) values (139,'Saturday','Afternoon','19:00:00');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL,
  `password` char(15) NOT NULL,
  `usertype` char(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`password`,`usertype`) values (1,'admin','admin101','admin');
insert  into `user`(`user_id`,`username`,`password`,`usertype`) values (2,'user','user101','faculty');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
