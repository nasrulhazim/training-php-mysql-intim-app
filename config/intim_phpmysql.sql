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

/*Table structure for table `pages` */

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `pages` */

insert  into `pages`(`id`,`name`,`created_at`,`updated_at`) values (1,'users','2015-10-21 22:37:22','2015-10-21 22:37:22'),(2,'user-add-or-update','2015-10-21 22:37:40','2015-10-21 22:37:40'),(3,'user-delete','2015-10-21 22:37:50','2015-10-21 22:37:50'),(4,'user-edit','2015-10-21 22:38:08','2015-10-21 22:38:08');

/*Table structure for table `races` */

DROP TABLE IF EXISTS `races`;

CREATE TABLE `races` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `races` */

insert  into `races`(`id`,`name`,`created_at`,`updated_at`) values (1,'Melayu','2015-10-21 21:25:28','2015-10-21 21:25:28'),(2,'Jawa','2015-10-21 21:25:45','2015-10-21 21:25:45'),(3,'Cina','2015-10-21 21:26:04','2015-10-21 21:26:04');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`alias`,`created_at`,`updated_at`) values (1,'Administrator','admin','2015-10-21 21:16:29','2015-10-21 21:16:29'),(2,'Officer','officer','2015-10-21 21:16:39','2015-10-21 21:16:39'),(3,'Public','public','2015-10-21 21:16:46','2015-10-21 21:16:46');

/*Table structure for table `roles_pages` */

DROP TABLE IF EXISTS `roles_pages`;

CREATE TABLE `roles_pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) unsigned NOT NULL,
  `page_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`,`role_id`,`page_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `roles_pages` */

insert  into `roles_pages`(`id`,`role_id`,`page_id`) values (1,1,1),(2,1,2),(3,1,3),(4,1,4);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) unsigned NOT NULL,
  `race_id` int(11) unsigned NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL COMMENT 'please encrypt password using md5',
  `email` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`,`role_id`,`race_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`role_id`,`race_id`,`username`,`name`,`password`,`email`,`created_at`,`updated_at`) values (1,1,1,'nasrulhazim','Nasrul Hazim','81dc9bdb52d04dc20036dbd8313ed055','nasrulhazim.m@gmail.com','2015-10-21 10:15:57','2015-10-21 15:41:19'),(10,2,2,'a@mail.com','a@mail.com','a@mail.com','a@mail.com','2015-10-21 14:27:28','2015-10-21 14:27:28'),(12,2,3,'nhazim','hazim@gmail.com','hazim@gmail.com','hazim@gmail.com','2015-10-21 15:08:46','2015-10-21 15:41:53'),(14,2,2,'test@gmail.com','test@gmail.com','test@gmail.com','test@gmail.com','2015-10-21 15:42:08','2015-10-21 15:42:08'),(19,3,1,'3','3','3','3','2015-10-21 16:21:41','2015-10-21 16:21:41'),(20,3,3,'3','3','3','3','2015-10-21 16:21:51','2015-10-21 16:21:51'),(21,3,2,'1','1','1','1','2015-10-21 16:25:17','2015-10-21 16:25:17'),(22,3,2,'3','3','3','3','2015-10-21 16:25:27','2015-10-21 16:25:27'),(23,3,2,'3','3','3','3','2015-10-21 16:27:36','2015-10-21 16:27:36'),(24,2,2,'1234','1234','02522a2b2726fb0a03bb19f2d8d9524d','134','2015-10-21 16:31:30','2015-10-21 16:31:30'),(25,3,1,'abu','bakar','81dc9bdb52d04dc20036dbd8313ed055','ali@gmail.com','2015-10-21 16:31:42','2015-10-21 16:31:42');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
