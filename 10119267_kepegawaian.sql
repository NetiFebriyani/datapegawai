-- MySQL dump 10.16  Distrib 10.1.19-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `gaji`
--

DROP TABLE IF EXISTS `gaji`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `gaji` (
  `nik` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `gaji_pokok` bigint(20) NOT NULL,
  `tanggal_gaji` date NOT NULL,
  PRIMARY KEY (`nik`),
  CONSTRAINT `gaji_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `karyawan` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gaji`
--

LOCK TABLES `gaji` WRITE;
/*!40000 ALTER TABLE `gaji` DISABLE KEYS */;
INSERT INTO `gaji` VALUES ('612036001','Haikal Sastra','Karyawan Tetap',3500000,'2021-06-01'),('612036002','Rendi','Karyawan Tetap',3500000,'2021-06-01'),('612036003','Nana n','Karyawan Tetap',3500000,'2021-06-01');
/*!40000 ALTER TABLE `gaji` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan` (
  `kode_jabatan` varchar(5) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `gaji_pokok` bigint(20) NOT NULL,
  PRIMARY KEY (`kode_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` VALUES ('DP01','manager',7000000),('K01','Karyawan Tetap',3500000),('K02','Karyawan Magang',2800000),('M01','Manager Keuangan',10000000);
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `karyawan` (
  `nik` varchar(10) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `kode_jabatan` varchar(5) NOT NULL,
  `gaji_pokok` bigint(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`nik`),
  KEY `kode_jabatan` (`kode_jabatan`),
  CONSTRAINT `karyawan_ibfk_1` FOREIGN KEY (`kode_jabatan`) REFERENCES `jabatan` (`kode_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `karyawan`
--

LOCK TABLES `karyawan` WRITE;
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` VALUES ('612036001','Haikal Sastra','2000-06-06','Bandung','Pria','Lajang','K01',3500000,'2021-01-13','TKI II','085736145321'),('612036002','Rendi','2000-03-23','Surabaya','Pria','lajang','K01',3500000,'2021-01-23','Dago Pakar','0098736524351'),('612036003','Nana','2000-08-15','Jakarta','Pria','lajang','K01',3500000,'2021-01-24','Cimahi','085823132457'),('612036004','jefan','2000-08-01','jakarta','Pria','lajang','K01',3500000,'2021-01-24','Cimahi','08582313245');
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengguna`
--

DROP TABLE IF EXISTS `pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pengguna`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengguna`
--

LOCK TABLES `pengguna` WRITE;
/*!40000 ALTER TABLE `pengguna` DISABLE KEYS */;
INSERT INTO `pengguna` VALUES (1,'Neti Febriyani','admin','1','Administrator');
/*!40000 ALTER TABLE `pengguna` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-08-14 21:58:45
