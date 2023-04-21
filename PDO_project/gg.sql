/*
SQLyog Ultimate v10.00 Beta1
MySQL - 5.5.5-10.4.11-MariaDB : Database - php
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`php` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `php`;

/*Table structure for table `pdo` */

DROP TABLE IF EXISTS `pdo`;

CREATE TABLE `pdo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `occupation` varchar(25) DEFAULT NULL,
  `organization` varchar(25) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `pdo` */

insert  into `pdo`(`id`,`name`,`occupation`,`organization`,`country`,`comments`) values (5,'Yeshi ','1','thimphu athang','3','nodajgnadojngoad'),(6,'karma','3','thimphu','2','nodajgnadojngoad');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
