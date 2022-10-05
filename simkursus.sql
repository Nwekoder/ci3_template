# Host: localhost  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-10-05 09:47:58
# Generator: MySQL-Front 5.3  (Build 5.31)

CREATE DATABASE IF NOT EXISTS simkursus;

#
# Structure for table "jadwal"
#

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,
  `jam_masuk` timestamp NULL DEFAULT NULL,
  `jam_keluar` timestamp NULL DEFAULT NULL,
  `id_materi` int(11) NOT NULL,
  `id_pengajar` int(11) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "jadwal"
#


#
# Structure for table "kategori"
#

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(255) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

#
# Data for table "kategori"
#

INSERT INTO `kategori` VALUES (1,'Teknik Audio/Video'),(2,'Office');

#
# Structure for table "kelas"
#

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kelas` varchar(255) NOT NULL,
  `id_program` int(11) NOT NULL,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "kelas"
#


#
# Structure for table "materi"
#

DROP TABLE IF EXISTS `materi`;
CREATE TABLE `materi` (
  `id_materi` int(11) NOT NULL AUTO_INCREMENT,
  `id_program` int(11) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_update` datetime NOT NULL,
  `nama_materi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lampiran` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_materi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "materi"
#


#
# Structure for table "pengajar"
#

DROP TABLE IF EXISTS `pengajar`;
CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_pengajar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "pengajar"
#


#
# Structure for table "peserta"
#

DROP TABLE IF EXISTS `peserta`;
CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_program` int(11) NOT NULL,
  PRIMARY KEY (`id_peserta`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

#
# Data for table "peserta"
#


#
# Structure for table "program"
#

DROP TABLE IF EXISTS `program`;
CREATE TABLE `program` (
  `id_program` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `nama_program` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` enum('aktif','nonaktif') NOT NULL,
  PRIMARY KEY (`id_program`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

#
# Data for table "program"
#

INSERT INTO `program` VALUES (1,1,'corel draw',0,'aktif'),(2,1,'photoshop',0,'aktif'),(3,2,'word',0,'aktif'),(4,2,'excel',0,'aktif'),(5,2,'power point',0,'aktif');

#
# Structure for table "user_group"
#

DROP TABLE IF EXISTS `user_group`;
CREATE TABLE `user_group` (
  `id_user.group` int(11) NOT NULL AUTO_INCREMENT,
  `user_group` varchar(255) NOT NULL,
  PRIMARY KEY (`id_user.group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

#
# Data for table "user_group"
#


#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `id_user_group` int(11) NOT NULL,
  `jk` enum('L','P') NOT NULL DEFAULT 'L',
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (15,'nwekoder','238ab69bdcbf1a25f510d9a1a0b0bc27','Muhammad Chandra Hasan',0,'L','cn1250425@gmail.com','085394267497','Jln. Talasalapang 1'),(16,'admin','827ccb0eea8a706c4c34a16891f84e7b','Admin',0,'L','admin@simkursus.org','087777777777','Jln. Kaki');
