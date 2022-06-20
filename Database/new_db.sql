-- -------------------------------------------------------------
-- TablePlus 3.6.2(322)
--
-- https://tableplus.com/
--
-- Database: tokosembako
-- Generation Time: 2022-06-20 16:03:25.5630
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `about`;
CREATE TABLE `about` (
  `aid` int(20) NOT NULL,
  `anama` varchar(255) NOT NULL,
  `anomer` varchar(255) NOT NULL,
  `anomer1` varchar(20) NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `adeskripsi` text NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id_login` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `onama` varchar(255) NOT NULL,
  `oalamat` text NOT NULL,
  `onomer` varchar(255) NOT NULL,
  `oorder` varchar(255) NOT NULL,
  `opesan` text NOT NULL,
  `pfoto` int(255) NOT NULL,
  PRIMARY KEY (`orderid`),
  KEY `pid` (`pfoto`) USING BTREE,
  CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`pfoto`) REFERENCES `produk` (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `pid` int(255) NOT NULL AUTO_INCREMENT,
  `pfoto` varchar(255) NOT NULL,
  `pnama` varchar(255) NOT NULL,
  `pharga` varchar(255) NOT NULL,
  `pjumlah` int(255) NOT NULL,
  `pdeskripsi` text NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `about` (`aid`, `anama`, `anomer`, `anomer1`, `aemail`, `adeskripsi`) VALUES
('0', 'al hadar', '082190401075', '-', '-', 'Di Toko Sinar Tomia merupakan salah salah satu toko sembako, bahan\r\nbangunan, pecah belah dan juga membeli hasil dari alam, seperti membeli hasil panen\r\ndari warga sekitar. Untuk bahan sembako yang dijual berbagai macam bahan-bahan\r\nsembako mulai dari beras, gula, minyak goreng, tepung terigu, garam, mentega, dan lainlain. Untuk penjualan bahan bangunan seperti paku, pipa air, kuas, triplek, profil tangki\r\nair, semen, seng gelombang, seng polos, kabel, lampu dan berbagai macam cat, dari\r\nmulai cat untuk kayu, besi, tembok, dan lain-lain. Dan untuk usaha membeli hasil alam\r\nseperti kopra, cengkeh, pala, coklat merupakan hasil dari pertanian masyarakat sekitar.');

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
('1', 'tomia123', 'tomia123');

INSERT INTO `pesanan` (`orderid`, `onama`, `oalamat`, `onomer`, `oorder`, `opesan`, `pfoto`) VALUES
('29', 'Andri', 'jogja', '9938129892', '2', '2', '3');

INSERT INTO `produk` (`pid`, `pfoto`, `pnama`, `pharga`, `pjumlah`, `pdeskripsi`) VALUES
('3', '629-9221b8a7e5d4514893a83252b1a658a3.jpg', 'Minyak Goreng Fortune', '11.500', '16', 'isi 1 liter');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;