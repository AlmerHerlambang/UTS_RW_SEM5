/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.17-MariaDB : Database - uts_rw_sem5
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`uts_rw_sem5` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `uts_rw_sem5`;

/*Table structure for table `data_dor` */

DROP TABLE IF EXISTS `data_dor`;

CREATE TABLE `data_dor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tahun` year(4) DEFAULT NULL,
  `posisi` int(2) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `kebangsaan` varchar(50) DEFAULT NULL,
  `tim` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `data_dor` */

insert  into `data_dor`(`id`,`tahun`,`posisi`,`foto`,`nama`,`kebangsaan`,`tim`) values 
(1,2000,1,'luisf.jpg','Luis Figo','Portugal','Real Madrid'),
(2,2000,2,'zidan.jpg','Zinedine Zidane','Perancis','Juventus'),
(3,2000,3,'andry.jpg','Andriy Shevchenko','Ukraina','Milan'),
(4,2001,1,'owen.jpg','Michael Owen','Inggris','Liverpool'),
(5,2001,2,'raul.jpg','Raul','Spanyol','Real Madrid'),
(6,2001,3,'khan.jpg','Oliver Khan','Belanda','Bayern Munchen'),
(7,2002,1,'ronaldon.jpg','Ronaldo','Brazil','Real Madrid'),
(8,2002,2,'rcarlos.jpg','Roberto Carlos','Brazil','Real Madrid'),
(9,2002,3,'khan.jpg','Oliver Khan','Belanda','Bayern Munchen'),
(10,2003,1,'nedved.jpg','Pavel Nedved','Ceko','Juventus'),
(11,2003,2,'henry.jpg','Thierry Henry','Perancis','Arsenal'),
(12,2003,3,'maldini.jpg','Paolo Maldini','Italia','Milan'),
(13,2004,1,'andriy.jpg','Andriy Shevchenko','Ukraina','Milan'),
(14,2004,2,'deco.jpg','Deco','Portugal','Barcelona'),
(15,2004,3,'ronaldinho.jpg','Ronaldinho','Brazil','Barcelona');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`user`,`pass`) values 
(2,'herlambang','$2y$10$S.wG0mJz3tJEvM9qxcoNZ.HmX5D8mAgwWxHyL0cCrOOPHLb9dB1CW'),
(3,'almer','$2y$10$zkZpF9aT4aOF7o1CnZLo1.LwQoJm9/rqoRO1Nqwu2OpSiNgmek5lO');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
