/*
SQLyog - Free MySQL GUI v5.19
Host - 5.0.15-nt : Database - db_college_search
*********************************************************************
Server version : 5.0.15-nt
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `db_college_search`;

USE `db_college_search`;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `aid` int(5) NOT NULL auto_increment,
  `email` varchar(50) default NULL,
  `password` varchar(15) default NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert into `admin` (`aid`,`email`,`password`) values (1,'admin@gmail.com','12345');

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `cityid` int(5) NOT NULL auto_increment,
  `city` varchar(50) default NULL,
  `district` varchar(100) default NULL,
  PRIMARY KEY  (`cityid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `city` */

insert into `city` (`cityid`,`city`,`district`) values (2,'Junction','Salem'),(3,'Gandhipuram','Coimbatore'),(4,'Omalur','Salem'),(5,'','Coimbatore'),(6,'','Coimbatore'),(7,'','Coimbatore'),(8,'','Salem'),(9,'','Salem');

/*Table structure for table `college` */

DROP TABLE IF EXISTS `college`;

CREATE TABLE `college` (
  `cid` int(5) NOT NULL auto_increment,
  `college` varchar(50) default NULL,
  `email` varchar(50) default NULL,
  `phone` varchar(30) default NULL,
  `mobile` varchar(30) default NULL,
  `address` varchar(200) default NULL,
  `website` varchar(50) default NULL,
  `about` varchar(1000) default NULL,
  `district` varchar(50) default NULL,
  `status` varchar(10) default NULL,
  `uid` int(5) default NULL,
  `city` varchar(50) default NULL,
  `distance` varchar(5) default NULL,
  `location` varchar(30) default NULL,
  `cate` varchar(50) default NULL,
  `cate_search` varchar(70) default NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `college` */

insert into `college` (`cid`,`college`,`email`,`phone`,`mobile`,`address`,`website`,`about`,`district`,`status`,`uid`,`city`,`distance`,`location`,`cate`,`cate_search`) values (1,'RVS Engineering College','admin@gmail.com','0427 2245698','9003620888','Coimabatore','http://www.rvs.com','asdasd','Salem','Posted',1,'Junction','5','gandhipuram','medical colleges','medical colleges in gandhipuram'),(2,'RVS Engineering College','admin@gmail.com','0427 2245698','9003620888','Coimabatore','http://www.rvs.com','asdasd','Salem','Posted',1,'Junction','5','salem','medical colleges','medical colleges in salem'),(3,'RVS Engineering College','admin@gmail.com','0427 2245698','9003620888','Coimabatore','http://www.rvs.com','asdasd','Coimbatore','Posted',1,'Gandhipuram','5','omalur','engineering colleges','engineering colleges in omalur'),(4,'RVS Engineering College','admin@gmail.com','0427 2245698','9003620888','Coimabatore','http://www.rvs.com','asdasd','Coimbatore','Posted',1,'Omalur','5','junction','engineering colleges','engineering colleges in junction'),(5,'RVS Engineering College','admin@gmail.com','0427 2245698','9003620888','Coimabatore','http://www.rvs.com','asdasd','Coimbatore','Posted',1,'Gandhipuram','5','junction','arts and science colleges','arts and science colleges in junction'),(6,'Sona College of Technology','sona@gmail.com','0427 2245698','9003620888','Salem','www.luisantsoftwares.com','sdfsf sdfsdf sfsdf sdfsdf sdfsdf  sfsferwe ','Salem','Posted',1,'Junction','2','junction','engineering colleges','engineering colleges in junction'),(7,'Sona Polytechnic College','poly@gmail.com','0427 2245698','9003620888','Omalur','http://www.rvs.com','sdfsdfsdf','Salem','Posted',1,'Omalur','5','mettur','polytechnic colleges','polytechnic colleges in mettur');

/*Table structure for table `district` */

DROP TABLE IF EXISTS `district`;

CREATE TABLE `district` (
  `did` int(5) NOT NULL auto_increment,
  `district` varchar(50) default NULL,
  PRIMARY KEY  (`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `district` */

insert into `district` (`did`,`district`) values (1,'Coimbatore'),(2,'Salem'),(3,'Erode');

/*Table structure for table `register` */

DROP TABLE IF EXISTS `register`;

CREATE TABLE `register` (
  `uid` int(5) NOT NULL auto_increment,
  `email` varchar(50) default NULL,
  `password` varchar(20) default NULL,
  `name` varchar(50) default NULL,
  `mobile` varchar(15) default NULL,
  `district` varchar(20) default NULL,
  `status` varchar(20) default NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `register` */

insert into `register` (`uid`,`email`,`password`,`name`,`mobile`,`district`,`status`) values (1,'baskar@gmail.com','baskar','Baskar','9876543210','Coimbatore','Active');

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
