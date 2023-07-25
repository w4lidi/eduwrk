-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2023 at 12:19 PM
-- Server version: 10.11.0-MariaDB
-- PHP Version: 8.0.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(6) NOT NULL,
  `id_kategori` int(6) DEFAULT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `stok` int(2) DEFAULT NULL,
  `tgl_exp` date DEFAULT NULL,
  `harga` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_kategori`, `nama_barang`, `stok`, `tgl_exp`, `harga`) VALUES
(8, 8, 'nasi uduk', 100, '2022-12-09', 10000),
(9, 8, 'roti mokoh', 23, '2022-01-10', 30000),
(10, 8, 'apem', 3, '2022-01-27', 1000),
(11, 9, 'coca cola', 100, '2022-01-20', 25000),
(12, 9, 'pepsi', 100, '2022-02-10', 26000),
(13, 8, 'teh pujut', 200, '2022-12-08', 15000),
(14, 10, 'bayam', 5, '2022-12-09', 1000),
(15, 10, 'terong', 12, '2022-01-01', 1500),
(16, 10, 'tomat', 100, '2022-11-11', 500),
(17, 11, 'jeruk', 5, '2022-01-01', 20000),
(18, 11, 'nanas', 5, '2022-12-10', 10000),
(19, 8, 'pisang', 35, '2022-01-01', 1000),
(20, 8, 'pisang', 35, '2022-01-01', 1000),
(23, 12, 'cro crot', 100, '2022-01-15', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_masuk` int(4) NOT NULL,
  `id_barang` int(4) DEFAULT NULL,
  `id_suplier` int(4) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `jumlah` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_masuk`, `id_barang`, `id_suplier`, `tgl_masuk`, `jumlah`) VALUES
(16, 12, 6, '2022-12-08', 4),
(17, 8, 5, '2022-12-09', 56),
(18, 8, 5, '2022-12-09', 56),
(19, 11, 6, '2022-12-09', 5),
(21, 8, 5, '2022-12-09', 45),
(22, 8, 5, '2022-12-09', 450),
(23, 13, 5, '2022-12-09', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(6) NOT NULL,
  `nama_kasir` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_Hp` char(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `alamat`, `no_Hp`) VALUES
(9, 'via', 'nyanket', '5678987'),
(10, 'yulia', 'jompong', '566543345'),
(11, 'devi', 'gerunung', '097642567543'),
(12, 'diana', 'new york', '233424'),
(14, 'jannah', 'pujut', '2324234445');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_barang`
--

CREATE TABLE `kategori_barang` (
  `id_kategori` int(4) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_barang`
--

INSERT INTO `kategori_barang` (`id_kategori`, `nama_kategori`) VALUES
(8, 'makanan'),
(9, 'minuman'),
(10, 'sayuran'),
(11, ' buah'),
(12, 'jaje');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(4) NOT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_Hp` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat`, `no_Hp`) VALUES
(5, 'walidi', 'bonjeruk', 123456789),
(6, 'wahyu', 'jonggat', 987654321),
(7, 'pratama', 'beraim', 543219876),
(9, 'dian', 'pujut', 2345674);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_beli` int(5) NOT NULL,
  `id_barang` int(5) NOT NULL,
  `id_pelanggan` int(6) DEFAULT NULL,
  `id_kasir` int(6) NOT NULL,
  `tgl_beli` date DEFAULT NULL,
  `jumlah_barang` int(3) DEFAULT NULL,
  `total_harga` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_beli`, `id_barang`, `id_pelanggan`, `id_kasir`, `tgl_beli`, `jumlah_barang`, `total_harga`) VALUES
(11, 8, 5, 9, '2022-12-09', 1, 1),
(12, 8, 5, 9, '2022-12-09', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` int(5) NOT NULL,
  `nama_suplier` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `alamat`) VALUES
(5, 'cv karunia', 'pujut'),
(6, 'PT aqua', 'jakarta'),
(7, 'resto Ubung', 'ubung'),
(8, 'kebon Jeruk', 'sembalun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `beli_to_barang` (`id_barang`),
  ADD KEY `beli_to_suplier` (`id_suplier`);

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_beli`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_kasir` (`id_kasir`),
  ADD KEY `id_barang` (`id_barang`) USING BTREE;

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_masuk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `kasir`
--
ALTER TABLE `kasir`
  MODIFY `id_kasir` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori_barang`
--
ALTER TABLE `kategori_barang`
  MODIFY `id_kategori` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_beli` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id_suplier` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_barang` (`id_kategori`);

--
-- Constraints for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD CONSTRAINT `beli_to_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `beli_to_suplier` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id_suplier`);

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_kasir`) REFERENCES `kasir` (`id_kasir`),
  ADD CONSTRAINT `pembelian_ibfk_3` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
