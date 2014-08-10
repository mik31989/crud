/*
SQLyog Ultimate v9.63 
MySQL - 5.6.17 : Database - ifactory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ifactory` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ifactory`;

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `producto` varchar(250) NOT NULL,
  `estado` int(1) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `productos` */

insert  into `productos`(`id`,`producto`,`estado`,`fecha_creacion`,`fecha_actualizacion`) values (1,'Servidor',0,'2014-07-26 12:44:20','2014-07-26 19:17:23'),(2,'Carro',0,'2014-07-26 12:45:20','2014-07-26 19:19:19'),(3,'Memoria USB 16 GB',0,'2014-07-26 15:15:17','2014-07-26 19:17:13'),(4,'Memoria USB 8 GB',0,'2014-07-26 15:16:07','2014-07-26 19:16:57'),(5,'Memoria USB 4 GB',0,'2014-07-26 15:17:24','2014-07-26 19:17:44'),(6,'Memoria USB 2 GB',0,'2014-07-26 15:18:26','2014-07-26 18:10:30'),(7,'Computadora',0,'2014-07-26 16:04:47','2014-07-26 19:17:54'),(8,'Memoria USB 1 TB',0,'2014-07-26 19:22:59',NULL),(9,'Memoria USB 16 TB',1,'2014-07-26 19:23:20',NULL),(10,'Teclado',1,'2014-07-26 19:23:37',NULL),(11,'Mouse',1,'2014-07-26 19:23:46',NULL),(12,'Impresora',1,'2014-07-26 19:35:08','2014-07-26 19:35:46');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
