-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 03:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alchemist_baut`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id_barang` int(12) NOT NULL,
  `kode_barang` varchar(100) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` int(10) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `img` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL,
  `diskon_promo` int(11) NOT NULL,
  `harga_promo` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id_barang`, `kode_barang`, `nama_barang`, `stok`, `harga_barang`, `img`, `kategori`, `status`, `diskon_promo`, `harga_promo`, `total_harga`, `tanggal`, `timestamp`) VALUES
(39, 'KD001', 'Baut Alumunium', 0, 1000, '6205639716336.jpg', 'Baut', 'Promo', 10, 900, 9900, '2022-02-11', '2022-02-23 10:32:59'),
(40, 'KD002', 'Baut Yamaha', 100, 1000, '620563cdf3f38.jpg', 'Baut', 'Promo', 10, 900, 99900, '2022-02-11', '2022-02-10 17:00:00'),
(41, 'KD003', 'Baut Probolt', 9, 1000, '6205642f8d367.jpg', 'Baut', 'Promo', 10, 900, 9900, '2022-02-11', '2022-03-01 12:16:59'),
(42, 'KD004', 'Baut N-Max', 100, 1000, '620564567ba41.jpg', 'Baut', 'Promo', 10, 900, 99900, '2022-02-11', '2022-02-10 17:00:00'),
(43, 'KD005', 'Baut N-Max', 100, 1000, '6205654ea40c6.jpg', 'Baut', 'Promo', 10, 900, 99900, '2022-02-11', '2022-02-10 17:00:00'),
(45, 'KD006', 'Baut Yamaha', 89, 1000, '620ca77c626b3.jpg', 'Baut', 'Promo', 10, 900, 99900, '2022-02-16', '2022-03-01 12:16:42'),
(46, 'KD007', 'Baut Probolt', 100, 1000, '620ca79998c40.jpg', 'Baut', 'Promo', 5, 950, 99950, '2022-02-16', '2022-02-15 17:00:00'),
(47, 'KD008', 'Baut Alumunium', 100, 1000, '620d25b93c6c3.jpg', 'Baut', 'Tidak', 0, 1000, 100000, '2022-02-16', '2022-02-15 17:00:00'),
(49, 'KD009', 'p', 5, 9000000, '628e477ca61da.jpg', 'Baut', 'Promo', 10, 8100000, 44100000, '2022-05-25', '2022-05-24 17:00:00'),
(50, 'KD0010', 'Yudha', 10, 1000, '628e47989dc79.jpeg', 'Baut', 'Tidak', 0, 1000, 10000, '2022-05-25', '2022-05-24 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjualan`
--

CREATE TABLE `tbl_penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `id_barang` int(12) NOT NULL,
  `kode_barang` varchar(25) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `nama_cust` varchar(25) NOT NULL,
  `harga_barang` int(50) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `diskon` int(11) NOT NULL,
  `total` int(50) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penjualan`
--

INSERT INTO `tbl_penjualan` (`id_penjualan`, `id_barang`, `kode_barang`, `nama_barang`, `nama_cust`, `harga_barang`, `jumlah`, `diskon`, `total`, `tanggal`) VALUES
(2, 45, 'KD006', 'Baut Yamaha', 'Yudha', 1000, 1, 0, 1000, '2022-02-10'),
(3, 41, 'KD003', 'Baut Probolt', 'Rahman', 1000, 1, 0, 1000, '2022-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `no_telp`, `alamat`) VALUES
(1, 'admin', 'admin', '0829938199', 'awdjioawjdoawd\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `tbl_penjualan_ibfk_1` (`id_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id_barang` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_penjualan`
--
ALTER TABLE `tbl_penjualan`
  ADD CONSTRAINT `tbl_penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `data_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
