/*
SQLyog Ultimate v9.63 
MySQL - 5.6.12-log : Database - intim_phpmysql
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`intim_phpmysql` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `intim_phpmysql`;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL COMMENT 'please encrypt password using md5',
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`name`,`password`,`email`,`created_at`,`updated_at`) values (1,'nasrulhazim','Nasrul Hazim','827ccb0eea8a706c4c34a16891f84e7b','nasrulhazim.m@gmail.com','2015-10-21 10:15:57','2015-10-21 15:41:19'),(10,'a@mail.com','a@mail.com','a@mail.com','a@mail.com','2015-10-21 14:27:28','2015-10-21 14:27:28'),(12,'nhazim','hazim@gmail.com','hazim@gmail.com','hazim@gmail.com','2015-10-21 15:08:46','2015-10-21 15:41:53'),(14,'test@gmail.com','test@gmail.com','test@gmail.com','test@gmail.com','2015-10-21 15:42:08','2015-10-21 15:42:08');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
