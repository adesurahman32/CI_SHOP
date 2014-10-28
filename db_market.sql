/*
SQLyog Enterprise - MySQL GUI v7.14 
MySQL - 5.5.36 : Database - db_market
*********************************************************************
*/
/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`u710406486_shop` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `u710406486_shop`;

/*Table structure for table `tbl_akun` */

DROP TABLE IF EXISTS `tbl_akun`;

CREATE TABLE `tbl_akun` (
  `Nama` varchar(60) NOT NULL,
  `Provinsi` varchar(50) DEFAULT NULL,
  `Kota` varchar(50) DEFAULT NULL,
  `Alamat` varchar(50) DEFAULT NULL,
  `Telpon` varchar(15) DEFAULT NULL,
  `Email` varchar(25) DEFAULT NULL,
  `Password` varchar(60) DEFAULT NULL,
  `Status` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`Nama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `tbl_akun` */

insert  into `tbl_akun`(`Nama`,`Provinsi`,`Kota`,`Alamat`,`Telpon`,`Email`,`Password`,`Status`) values ('Admin','Lampung','kedaton','perintis 2 Bandar Lampung','085758913403','admin@gmail.com','123','admin'),('dewa','Lampung','ok','ok','345678654323','tes@gmail.com','321','Pengguna'),('sadewa','Lampung','kedaton','bandar lampung','085758913403','aa@gmail.com','123','Pengguna');

/*Table structure for table `tbl_pemesanan` */

DROP TABLE IF EXISTS `tbl_pemesanan`;

CREATE TABLE `tbl_pemesanan` (
  `tgl_pemesanan` date DEFAULT NULL,
  `kode_produk` varchar(40) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `no_resi` varchar(70) DEFAULT NULL,
  `atas_nama` varchar(90) DEFAULT NULL,
  `nama` varchar(90) DEFAULT NULL,
  `nama_pemesan` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pemesanan` */

insert  into `tbl_pemesanan`(`tgl_pemesanan`,`kode_produk`,`email`,`jumlah`,`total`,`no_resi`,`atas_nama`,`nama`,`nama_pemesan`) values ('2014-09-22','P001','tes@gmail.com',3,5100000,'2345678976543','rere','Furniture Class Room','dewa');

/*Table structure for table `tbl_pesan` */

DROP TABLE IF EXISTS `tbl_pesan`;

CREATE TABLE `tbl_pesan` (
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `pesan` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pesan` */

insert  into `tbl_pesan`(`nama`,`email`,`pesan`) values ('es','tes@gmail.com','tes'),('dewa','admin@gmail.com','cara transfernya bagaimana nih mbak');

/*Table structure for table `tbl_produk` */

DROP TABLE IF EXISTS `tbl_produk`;

CREATE TABLE `tbl_produk` (
  `kode_produk` varchar(40) NOT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `kategori` varchar(70) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `ukuran` varchar(100) DEFAULT NULL,
  `warna` varchar(200) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`kode_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_produk` */

insert  into `tbl_produk`(`kode_produk`,`nama_produk`,`kategori`,`harga`,`ukuran`,`warna`,`foto`,`keterangan`) values ('P001','Furniture Class Room','furniture',1700000,'SX','Coklat Dongker','gambar/a1.jpg','Berkuliatas Kayu Jati yang dipaha dengan teliti dan berbagai manfaat'),('P002','Interior Room Work','interior',9000000,'S,L,MX','Coklat Lucida','gambar/a6.jpg','Berkuliatas Kayu Jati yang dipaha dengan teliti dan berbagai manfaat'),('P003','Furniture Class Room TH2','furniture',1700000,'S,L,MX','Coklat Dongker','gambar/a5.jpg','Berkuliatas Kayu Jati yang dipaha dengan teliti dan berbagai manfaat'),('P004','Furniture Louncing','furniture',9000000,'SX','Coklat Lucida','gambar/a4.jpg','Berkuliatas Kayu Jati yang dipaha dengan teliti dan berbagai manfaat'),('P005','Furniture Louncing','furniture',1700000,NULL,NULL,'gambar/a4.jpg','Berkuliatas Kayu Jati yang dipaha dengan teliti dan berbagai manfaat'),('P006','Interior Room Work','interior',1700000,NULL,NULL,'gambar/a4.jpg','Berkuliatas Kayu Jati yang dipaha dengan teliti dan berbagai manfaat'),('P007','Interior Room Work','interior',1700000,NULL,NULL,'gambar/a4.jpg','Berkuliatas Kayu Jati yang dipaha dengan teliti dan berbagai manfaat'),('P008','Interior Room Work','interior',7700000,NULL,NULL,'gambar/a4.jpg','Berkuliatas Kayu Jati yang dipaha dengan teliti dan berbagai manfaat');

/*Table structure for table `tbl_promosi` */

DROP TABLE IF EXISTS `tbl_promosi`;

CREATE TABLE `tbl_promosi` (
  `pesan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbl_promosi` */

insert  into `tbl_promosi`(`pesan`) values ('Selamat Berbelanja di E-SHOP ini ^-^');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
