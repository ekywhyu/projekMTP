-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 Jun 2022 pada 12.47
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokosembako`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `aid` int(20) NOT NULL,
  `anama` varchar(255) NOT NULL,
  `anomer` varchar(255) NOT NULL,
  `anomer1` varchar(20) NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `adeskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`aid`, `anama`, `anomer`, `anomer1`, `aemail`, `adeskripsi`) VALUES
(0, 'al hadar', '082190401075', '-', '-', 'Di Toko Sinar Tomia merupakan salah salah satu toko sembako, bahan\r\nbangunan, pecah belah dan juga membeli hasil dari alam, seperti membeli hasil panen\r\ndari warga sekitar. Untuk bahan sembako yang dijual berbagai macam bahan-bahan\r\nsembako mulai dari beras, gula, minyak goreng, tepung terigu, garam, mentega, dan lainlain. Untuk penjualan bahan bangunan seperti paku, pipa air, kuas, triplek, profil tangki\r\nair, semen, seng gelombang, seng polos, kabel, lampu dan berbagai macam cat, dari\r\nmulai cat untuk kayu, besi, tembok, dan lain-lain. Dan untuk usaha membeli hasil alam\r\nseperti kopra, cengkeh, pala, coklat merupakan hasil dari pertanian masyarakat sekitar.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
(1, 'tomia123', 'tomia123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `orderid` int(11) NOT NULL,
  `onama` varchar(255) NOT NULL,
  `oalamat` text NOT NULL,
  `onomer` varchar(255) NOT NULL,
  `oorder` varchar(255) NOT NULL,
  `opesan` text NOT NULL,
  `pfoto` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `pid` int(255) NOT NULL,
  `pfoto` varchar(255) NOT NULL,
  `pnama` varchar(255) NOT NULL,
  `pharga` varchar(255) NOT NULL,
  `pjumlah` int(255) NOT NULL,
  `pdeskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`pid`, `pfoto`, `pnama`, `pharga`, `pjumlah`, `pdeskripsi`) VALUES
(4, '563-Gula_Pasir_GMP_1_Sak_50_Kg.jpg', 'Gula Pasir', '720.000', 20, 'setiap produk sebanyak 1 sak'),
(5, '539-rojolele_rojolele-beras--50-kg-_full02.jpg', 'Beras', '310.000', 20, 'setiap produk 1 sak'),
(6, '6-8189eca1854fbfbad3ed956983c34877.jpg', 'terigu', '220.000', 20, 'setiap produk 1sak'),
(7, '923-bimoli_bimoli-jerigen-minyak-goreng--5-l-_full03 (1).jpg', 'Minyak Goreng', '320.000', 20, 'setiap produk sebanyak 1 gen'),
(8, '57-Garam_Cap_Kapal_250GR.jpg', 'garam', '230.000', 20, 'setiap produk sebanyak 1 dus'),
(9, '912-indomie.jpg', 'indomie', '112.000', 20, 'setiap produk sebanyak 1dus'),
(10, '246-fruitamin.jpg', 'frutamin', '35.000', 20, 'setiap produk sebanyak 1dus'),
(11, '59-coco bit.jpg', 'coco bit', '35.000', 20, 'setiap produk sebanyak 1dus'),
(12, '374-aleale.jpg', 'ale-ale', '35.000', 20, 'setiap produk sebanyak 1dus'),
(13, '248-fanta.jpg', 'fanta', '125.000', 20, 'setiap produk sebanyak 1dus'),
(14, '735-sprite.jpg', 'sprite', '125.000', 20, 'setiap produk sebanyak 1dus'),
(15, '721-cocacola.jpg', 'coca-cola', '125.000', 20, 'setiap produk sebanyak 1dus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`orderid`),
  ADD UNIQUE KEY `pid` (`pfoto`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`pfoto`) REFERENCES `produk` (`pid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
