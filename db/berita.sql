CREATE DATABASE  IF NOT EXISTS `berita` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `berita`;
-- MySQL dump 10.13  Distrib 5.5.43, for debian-linux-gnu (i686)
--
-- Host: 127.0.0.1    Database: berita
-- ------------------------------------------------------
-- Server version	5.5.43-0ubuntu0.14.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nm_admin` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','Administrator');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `berita`
--

DROP TABLE IF EXISTS `berita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kategori` (`id_kategori`),
  CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `berita`
--

LOCK TABLES `berita` WRITE;
/*!40000 ALTER TABLE `berita` DISABLE KEYS */;
INSERT INTO `berita` VALUES (1,4,'Awas, Ada Minecraft Jadi-jadian di Android Sekaran','KOMPAS.com - Aplikasi jahat atau malicious software yang mengatasnamakan game populer Minecraft dikabarkan merajalela di Android. Menurut seorang ahli keamanan, aplikasi jadi-jadian tersebut dapat membuat kerugian cukup besar dari segi finansial bagi para korbannya.\r\nMenurut Lukas Stefanko, ahli keamanan dari Eset, ada sekitar 2,8 juta pengguna Android yang mengunduh aplikasi yang terkait dengan Minecraft. Program jahat tersebut menyamar sebagai aplikasi yang menawarkan cheat dan tips seputar game tersebut.\r\nTotal, menurut pengamatan Stefanko, ada sekitar 30 jenis aplikasi tersebut yang ditemukan di Google Play Store selama 9 bulan belakangan ini.\r\nSemua dari aplikasi yang ditemukan palsu karena tidak mengandung fungsi yang dijanjikan dan hanya menampilkan banner dengan tipuan bagi pengguna untuk mempercayai bahwa sistem Android terinfeksi dengan virus yang berbahaya,\" ujar Stefanko.','2015-01-01','berita.jpg'),(2,4,'Makin \"Melek\" Internet, Orang Makin Mudah Belanja','KOMPAS.com â€“ Era teknologi membuat kehadiran ponsel terus berevolusi. Fungsinya tak lagi hanya untuk berkomunikasi, tapi juga bertransaksi. Seiring itu, belakangan tren e-commerce ikut menjawabnya. Dengan ponsel, apapun bisa didapat dengan mudah, termasuk urusan belanja. \r\n\r\nMenoleh kilas balik cara belanja konvensional, orang harus mendatangi pusat perbelanjaan atau toko khusus untuk memenuhi kebutuhannya. Kini, berbekal ponsel yang terintegrasi dengan internet, perlahan orang mulai meninggalkan cara belanja tersebut.\r\n\r\nYa, kini mereka lebih suka duduk di rumah dan berselancar mencari situs jual-beli untuk mencari barang belanjaan yang diburunya. Ada beberapa alasan orang lebih suka berbelanja dengan cara itu lewat ponselnya: \r\n\r\n\"Melek\" Internet\r\n\r\nMenurut laporan Nielsen Indonesia seperti dilansir KOMPAS.com, belanja online memang sedang diminati konsumen Indonesia seiring meningkatnya penetrasi internet. Kecenderungan konsumtif juga masih menjadi salah satu alasannya. \r\n\r\nMereka senang membaca ulasan dan mencari informasi mengenai produk dan jasa yang dibutuhkan. Menurut survei Nielsen, urusan traveling menempati posisi teratas dalam aktivitas belanja online orang Indonesia. Sekitar setengah dari konsumen Indonesia berencana untuk membeli secara online tiket pesawat (55 persen) serta melakukan pemesanan hotel dan biro perjalanan (46 persen) dalam enam bulan ke depan.\r\n\r\nSelanjutnya, empat dari sepuluh konsumen (40 persen) berencana untuk membeli buku elektronik (ebook), hampir empat dari sepuluh konsumen berencana untuk membeli pakaian, aksesori, atau sepatu (37 persen), dan lebih dari sepertiga konsumen merencanakan untuk membeli tiket acara (34 persen) secara online.\r\n\r\nwww.shutterstock.com Salah satu alasan banyak orang memakai ponsel untuk berbelanja adalah daya jangkaunya yang mudah dan potongan harga menggiurkan. Tanpa perlu datang ke toko khusus, pembeli dapat mencari langsung barang yang dibutuhkan.\r\nBenda Wajib \r\n\r\nBagi sebagian besar orang, ponsel menjadi bawaan wajib. Keberadaannya pun dinilai sebagai penunjang aktivitas. Guna ponsel lebih dari sekadar penghubung komunikasi. Oleh karena itu, jangankan di saat sibuk, saat senggang pun orang tak bisa melepaskan ponsel dari genggamannya.  \r\n\r\nDi waktu-waktu kosong, biasanya orang akan cenderung mengisi waktunya dengan bermain game, membuka portal berita hingga berbelanja lewat ponsel. Tak jarang, adanya waktu luang dengan ponsel dalam genggaman menjadi alasan orang berbelanja tanpa sengaja.\r\n\r\nDiskon Menarik\r\n\r\nSalah satu alasan banyak orang memakai ponsel untuk berbelanja adalah daya jangkaunya yang mudah dan potongan harga menggiurkan. Tanpa perlu datang ke toko khusus, pembeli dapat mencari langsung barang yang dibutuhkan.\r\n\r\nKelebihan lain adalah produk yang dapat dibandingkan. Meski pembandingan secara virtual begitu merepotkan untuk sebagian orang, setidaknya dapat membantu Anda untuk meyakinkan produk mana yang paling cocok dengan kebutuhan.\r\n\r\nSelain itu, ada beberapa peramban yang biasa dipakai dalam smartphone memberikan fitur khusus terkoneksi langsung dengan situs-situs belanja. Baidu Browser, misalnya. Di dalam aplikasi ini terdapat fitur Baidu Deals. \r\n\r\nMenariknya, fitur tersebut tak hanya menghubungkan pengguna dengan beberapa e-commerce, tapi juga menampilkan informasi produk berdiskon di situs-situs belanja tersebut. Dengan fitur ini, pembeli lebih mudah menemukan produk-produk dengan tawaran diskon menarik.\r\n\r\nCara Bayar Praktis\r\n\r\nSelain tiga alasan di atas, cara bayar menjadi salah satu pertimbangan mengapa banyak orang pilih berbelanja via ponsel. Meski kebiasaan orang Indonesia masih banyak yang mau membayar secara konvensional, ada beberapa cara pembayaran yang lebih mudah. Yaitu, dengan kartu kredit dan transfer melalui Anjungan Tunai Mandiri (ATM).\r\n\r\nUntuk proses adaptasi, kebanyakan situs belanja di Indonesia masih menerapkan sistem pembayaran cash on delivery (CoD). Peluang besar ini juga yang menjadi alasan banyak pemain besar toko offline yang juga ikut masuk pada ranah e commerce.','2015-05-26','anime-girl-mikasa-attack-on-titan-1920x1080.jpg');
/*!40000 ALTER TABLE `berita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nm_kategori` varchar(20) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori`
--

LOCK TABLES `kategori` WRITE;
/*!40000 ALTER TABLE `kategori` DISABLE KEYS */;
INSERT INTO `kategori` VALUES (1,'Politik'),(2,'Olahraga'),(3,'Ekonomi'),(4,'Teknologi');
/*!40000 ALTER TABLE `kategori` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-05-26 13:27:44
