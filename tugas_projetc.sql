/*
SQLyog Ultimate v10.42 
MySQL - 5.1.41 : Database - tugas_project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tugas_project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tugas_project`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `NIM` char(16) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `no_hp` char(18) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat_tinggal` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`NIM`,`nama_lengkap`,`jurusan`,`jk`,`no_hp`,`email`,`alamat_tinggal`,`agama`,`password`,`username`) values ('11111','hamna','AK j','perempuan','0382758','hamna@gmail.com','GTRFF','Islam','8769','hm'),('12345','HENDRIK','HUMAS j','laki-laki','0382758','cantika12@gmail.com','ff','Islam','23456','hm');

/*Table structure for table `nilai` */

DROP TABLE IF EXISTS `nilai`;

CREATE TABLE `nilai` (
  `id_nilai` varchar(255) NOT NULL,
  `NIM` varchar(255) NOT NULL,
  `nilai_ujian` float NOT NULL,
  `taggal_ujian` date NOT NULL,
  `id_ukm` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `nilai` */

insert  into `nilai`(`id_nilai`,`NIM`,`nilai_ujian`,`taggal_ujian`,`id_ukm`,`keterangan`) values ('2001','11111',100,'2020-01-14','098','lulus'),('2002','12345',50,'2020-01-06','098','tidak lulus');

/*Table structure for table `operator` */

DROP TABLE IF EXISTS `operator`;

CREATE TABLE `operator` (
  `id_operator` varchar(255) NOT NULL,
  `nama_operator` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id_operator`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `operator` */

insert  into `operator`(`id_operator`,`nama_operator`,`status`,`username`,`password`) values ('12345','pertiwi','admin','tiw-tiw','1234'),('12367','david ramadani','operator','david','99999');

/*Table structure for table `ukm` */

DROP TABLE IF EXISTS `ukm`;

CREATE TABLE `ukm` (
  `id_ukm` varchar(200) NOT NULL,
  `ukm` varchar(200) NOT NULL,
  PRIMARY KEY (`id_ukm`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ukm` */

insert  into `ukm`(`id_ukm`,`ukm`) values ('098','LMBC'),('12345678901','LCC'),('8595868','LAC');

/*Table structure for table `laporan` */

DROP TABLE IF EXISTS `laporan`;

/*!50001 DROP VIEW IF EXISTS `laporan` */;
/*!50001 DROP TABLE IF EXISTS `laporan` */;

/*!50001 CREATE TABLE  `laporan`(
 `NIM` char(16) ,
 `jurusan` varchar(255) ,
 `nilai_ujian` float ,
 `taggal_ujian` date ,
 `ukm` varchar(200) ,
 `keterangan` varchar(255) 
)*/;

/*View structure for view laporan */

/*!50001 DROP TABLE IF EXISTS `laporan` */;
/*!50001 DROP VIEW IF EXISTS `laporan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan` AS (select `mahasiswa`.`NIM` AS `NIM`,`mahasiswa`.`jurusan` AS `jurusan`,`nilai`.`nilai_ujian` AS `nilai_ujian`,`nilai`.`taggal_ujian` AS `taggal_ujian`,`ukm`.`ukm` AS `ukm`,`nilai`.`keterangan` AS `keterangan` from ((`nilai` join `mahasiswa`) join `ukm`) where ((`mahasiswa`.`NIM` = `nilai`.`NIM`) and (`nilai`.`id_ukm` = `ukm`.`id_ukm`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
