/*
SQLyog Community v13.1.2 (64 bit)
MySQL - 5.7.23 : Database - thesis3
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`thesis3` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `thesis3`;

/*Table structure for table `colleges` */

DROP TABLE IF EXISTS `colleges`;

CREATE TABLE `colleges` (
  `CollegeID` int(10) NOT NULL AUTO_INCREMENT,
  `CollegeName` char(50) DEFAULT NULL,
  `CollegeCode` char(50) DEFAULT NULL,
  `CollegeDean` char(50) DEFAULT NULL,
  PRIMARY KEY (`CollegeID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `colleges` */

insert  into `colleges`(`CollegeID`,`CollegeName`,`CollegeCode`,`CollegeDean`) values 
(1,'College of Science','COS',NULL);

/*Table structure for table `course` */

DROP TABLE IF EXISTS `course`;

CREATE TABLE `course` (
  `CourseID` int(10) NOT NULL AUTO_INCREMENT,
  `CourseCode` varchar(10) NOT NULL,
  `CourseName` char(15) NOT NULL,
  `CourseMajor` tinytext NOT NULL,
  `CourseType` char(15) NOT NULL,
  `CourseCompletion` tinytext NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  PRIMARY KEY (`CourseID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `course` */

insert  into `course`(`CourseID`,`CourseCode`,`CourseName`,`CourseMajor`,`CourseType`,`CourseCompletion`,`DepartmentCode`) values 
(1,'BSCS','BACHELOR OF SCI','1','BACCALAUREATE','1','COS'),
(3,'BSIS','BACHELOR OF SIE','1','BACCALAUREATE','1','COS'),
(2,'BSIT','BACHELOR OF SCI','1','BACCALAUREATE','1','COS');

/*Table structure for table `curriculum` */

DROP TABLE IF EXISTS `curriculum`;

CREATE TABLE `curriculum` (
  `CurriculumID` int(10) NOT NULL AUTO_INCREMENT,
  `SchoolYear` varchar(50) NOT NULL,
  `CourseCode` varchar(50) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Prereq1` varchar(50) DEFAULT NULL,
  `Prereq2` varchar(50) DEFAULT NULL,
  `Corequisite` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CurriculumID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `curriculum` */

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `DepartmentID` int(10) NOT NULL AUTO_INCREMENT,
  `CollegeID` char(10) DEFAULT 'COS',
  `DepartmentName` char(40) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`DepartmentID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`DepartmentID`,`CollegeID`,`DepartmentName`,`DepartmentCode`,`Status`) values 
(1,'COS','Math','1','A'),
(2,'COS','Physics','2','A'),
(3,'COS','Chemistry','3','D'),
(5,'COS','Electrical Eng','4','A'),
(6,'COS','Electronics and Communication','5','A'),
(7,'COS','Mechanical Eng','6','A'),
(8,'COS','Civil Eng','7','A'),
(9,'COS','Basic Industrial Technology','8','A'),
(10,'COS','Civil Engineering Technology','9','A'),
(11,'COS','ALGEBRA','10','A'),
(12,'COS','Calculus','11','A'),
(13,'COS','Weed','12','A');

/*Table structure for table `faculty` */

DROP TABLE IF EXISTS `faculty`;

CREATE TABLE `faculty` (
  `ProfID` int(10) NOT NULL AUTO_INCREMENT,
  `Firstname` char(15) NOT NULL,
  `Middlename` char(15) NOT NULL,
  `Lastname` char(15) NOT NULL,
  `PositionCode` int(5) DEFAULT NULL,
  `Contact` varchar(20) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `PreferredTime` time NOT NULL,
  `PreferredSubject` char(1) NOT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`ProfID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `faculty` */

insert  into `faculty`(`ProfID`,`Firstname`,`Middlename`,`Lastname`,`PositionCode`,`Contact`,`DepartmentCode`,`PreferredTime`,`PreferredSubject`,`Status`) values 
(1,'Mary Roses','CotingjoX','Apoyonz',1,'(+63)909-121-2121','1','01:00:00','1','A'),
(2,'Marose','Contingoz','Flameon',1,'(+12)311-111-1111','2','00:00:00','','D'),
(3,'Mary Rose','Cotingjoy','Apoyonx',2,'(+12)311-111-1111','1','00:00:00','','D'),
(4,'Mareese','Contingo','Apoyony',3,'(+45)613-980-7776','1','00:00:00','','D'),
(5,'Mary Rose','Contingjo','Apoyon',4,'(+12)311-111-1111','3','00:00:00','','A'),
(6,'Maureese','Contingoc','Apoyonc',4,'(+78)945-658-3464','6','00:00:00','','A'),
(7,'Rosemary','Contingov','Apoyonv',3,'(+12)311-111-1111','7','00:00:00','','A'),
(8,'Fname','Mname','Lname',4,'(+23)451-212-1212','8','00:00:00','','A'),
(9,'Chae','Yeon','Lee',4,'(+78)945-658-3464','9','00:00:00','','A'),
(10,'Jesus','Mary','Joseph',3,'(+78)945-658-3464','7','00:00:00','','A'),
(11,'Won','Young','Jang',4,'(+78)945-658-3464','6','00:00:00','','A'),
(12,'Monkey','Dude','Luffy',3,'(+63)921-310-3341','1','00:00:00','','D'),
(13,'One','Two','Three',4,'(+63)123-312-3231','1','00:00:00','','A'),
(14,'Ones','Twos','Threes',2,'(+63)123-311-1111','2','00:00:00','','A'),
(15,'wew','wew','ewe',4,'(+63)131-231-3231','2','00:00:00','','A');

/*Table structure for table `policy` */

DROP TABLE IF EXISTS `policy`;

CREATE TABLE `policy` (
  `PolicyID` int(10) NOT NULL AUTO_INCREMENT,
  `PolicyName` varchar(50) NOT NULL,
  `PolicyValue` varchar(50) NOT NULL,
  `PolicyTitle` varchar(50) NOT NULL,
  `PolicyDescription` varchar(50) DEFAULT NULL,
  `PolicyDefaultVal` varchar(50) DEFAULT NULL,
  `PolicyDataType` varchar(50) DEFAULT NULL,
  `PolicyGroup` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PolicyID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `policy` */

/*Table structure for table `position` */

DROP TABLE IF EXISTS `position`;

CREATE TABLE `position` (
  `PositionID` int(10) NOT NULL,
  `PositionCode` int(5) DEFAULT NULL,
  `PositionName` char(15) DEFAULT NULL,
  `PositionDesc` text,
  PRIMARY KEY (`PositionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `position` */

insert  into `position`(`PositionID`,`PositionCode`,`PositionName`,`PositionDesc`) values 
(1,1,'Dean',NULL),
(2,2,'Department Head',NULL),
(3,3,'Instructor',NULL),
(4,4,'Research',NULL);

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `RoomID` int(10) NOT NULL AUTO_INCREMENT,
  `RoomNo` int(10) NOT NULL,
  `RoomStatus` char(15) NOT NULL DEFAULT 'Physical',
  `RoomType` char(10) NOT NULL,
  `DepartmentCode` int(10) NOT NULL,
  PRIMARY KEY (`RoomID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `room` */

insert  into `room`(`RoomID`,`RoomNo`,`RoomStatus`,`RoomType`,`DepartmentCode`) values 
(1,321,'Physical','Lecture',1),
(2,322,'Physical','Lecture',1),
(3,323,'Physical','Lecture',1),
(4,333,'Dummy','Laboratory',1),
(5,327,'Physical','Lecture',1);

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `SchedID` int(10) NOT NULL AUTO_INCREMENT,
  `SchedName` varchar(50) NOT NULL,
  `SchedTime` time NOT NULL,
  `SchedEnd` time NOT NULL,
  `SchedDays` varchar(50) NOT NULL,
  `SchedRoom` varchar(50) NOT NULL,
  `SchedProf` varchar(50) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `SubjectType` varchar(50) NOT NULL,
  `SubjectHours` int(5) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `Overload` tinyint(1) NOT NULL,
  PRIMARY KEY (`SchedID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`SchedID`,`SchedName`,`SchedTime`,`SchedEnd`,`SchedDays`,`SchedRoom`,`SchedProf`,`SubjectCode`,`SubjectName`,`SubjectType`,`SubjectHours`,`DepartmentCode`,`Overload`) values 
(1,'Sched1','07:00:00','09:00:00','monday','1','1','1','1','1',3,'1',1),
(2,'Sched2','06:00:00','07:00:00','monday','1','1','2','2','2',2,'1',1),
(3,'Sched3','14:00:00','16:00:00','monday','1','2','3','3','1',3,'1',1),
(5,'Sched6','08:00:00','09:00:00','tuesday','1','2','2','1','2',3,'1',2),
(6,'sched7','07:00:00','08:00:00','thursday','1','2','1','3','2',2,'1',1),
(7,'Sched8','09:00:00','11:00:00','wednesday','2','3','1','2','2',3,'2',1);

/*Table structure for table `section` */

DROP TABLE IF EXISTS `section`;

CREATE TABLE `section` (
  `SectionID` int(10) NOT NULL AUTO_INCREMENT,
  `SectionYearLvl` varchar(50) NOT NULL,
  `SectionCode` varchar(10) NOT NULL,
  `SectionSchoolYr` varchar(50) NOT NULL,
  `SectionSemester` varchar(50) NOT NULL,
  `CourseCode` varchar(10) NOT NULL,
  `DepartmentCode` varchar(10) NOT NULL,
  `Timeshift` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`SectionID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `section` */

/*Table structure for table `subject` */

DROP TABLE IF EXISTS `subject`;

CREATE TABLE `subject` (
  `SubjectID` int(10) NOT NULL AUTO_INCREMENT,
  `SubjectCode` varchar(10) NOT NULL,
  `SubjectName` varchar(50) NOT NULL,
  `LecHours` int(15) NOT NULL,
  `LecUnits` int(15) NOT NULL,
  `LabHours` int(15) NOT NULL,
  `LabUnits` int(15) NOT NULL,
  `SubjectDeptCode` varchar(10) DEFAULT NULL,
  `SubjectType` varchar(20) DEFAULT NULL,
  `SubjectDay` varchar(20) DEFAULT NULL,
  `Status` char(1) DEFAULT 'A',
  PRIMARY KEY (`SubjectID`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `subject` */

insert  into `subject`(`SubjectID`,`SubjectCode`,`SubjectName`,`LecHours`,`LecUnits`,`LabHours`,`LabUnits`,`SubjectDeptCode`,`SubjectType`,`SubjectDay`,`Status`) values 
(1,'1','Programming 1 Lab',0,3,0,1,'A',NULL,NULL,'A'),
(2,'2','Programming 1 Lecture',0,5,0,1,'D',NULL,NULL,'A'),
(3,'3','Programming 2 Lab',0,3,0,1,'D',NULL,NULL,'A'),
(4,'4','Programming 2 Lecture',0,0,0,1,'D',NULL,NULL,'A'),
(5,'5','Programming 3 Lab',0,0,0,1,'A',NULL,NULL,'A'),
(6,'6','Programming 3 Lecture',0,5,0,1,'D',NULL,NULL,'A'),
(7,'7','Programming 4 Lab',0,3,0,1,'A',NULL,NULL,'A'),
(8,'8','Programming 4 Lecture',0,5,0,1,'A',NULL,NULL,'A'),
(9,'9','Database and Designs',0,4,0,1,'A',NULL,NULL,'A'),
(10,'10','Free Elective 1',0,4,0,1,'A',NULL,NULL,'A'),
(11,'11','Free Elective 2',0,4,0,1,'A',NULL,NULL,'A'),
(12,'12','Free Elective 3',0,3,0,1,'A',NULL,NULL,'A'),
(13,'13','Free Elective 4',0,3,0,1,'A',NULL,NULL,'A'),
(14,'14','Algebra',0,4,0,1,'A',NULL,NULL,'A'),
(15,'15','Trigonometry',0,4,0,1,'A',NULL,NULL,'A'),
(16,'16','Differential Calculus',0,5,0,1,'A',NULL,NULL,'A'),
(17,'17','Integral Calculus',0,5,0,1,'A',NULL,NULL,'A'),
(18,'18','Networking Principles',0,5,0,1,'A',NULL,NULL,'A'),
(19,'19','Mathhhh',3,3,0,0,'A',NULL,NULL,'A'),
(20,'007','Agent',12,10,0,0,'A',NULL,NULL,'A');

/*Table structure for table `subject_list` */

DROP TABLE IF EXISTS `subject_list`;

CREATE TABLE `subject_list` (
  `subject_list_id` int(10) NOT NULL AUTO_INCREMENT,
  `faculty_id` int(10) DEFAULT NULL,
  `subject_code` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`subject_list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `subject_list` */

insert  into `subject_list`(`subject_list_id`,`faculty_id`,`subject_code`) values 
(1,1,'9'),
(2,1,'2'),
(3,1,'1'),
(4,1,'3'),
(5,1,'10'),
(6,1,'11'),
(7,1,'12');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` char(15) NOT NULL,
  `password` char(15) NOT NULL,
  `usertype` char(10) NOT NULL,
  `profId` int(10) NOT NULL,
  `adminId` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`user_id`,`username`,`password`,`usertype`,`profId`,`adminId`) values 
(1,'admin','admin101','admin',1,1),
(2,'user','user101','faculty',2,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
