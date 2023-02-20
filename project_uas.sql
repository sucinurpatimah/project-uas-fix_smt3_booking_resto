-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2023 at 12:12 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `kd_produk` int(11) NOT NULL,
  `nm_produk` varchar(50) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `kd_produk`, `nm_produk`, `gambar`) VALUES
(4, 0, 'SAIKORO', '229-gambar8.jpg'),
(7, 0, 'Wagyu Buffet', '4968-6351-gambar1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_reservasi`
--

CREATE TABLE `tb_reservasi` (
  `id_reservasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_reservasi` varchar(50) NOT NULL,
  `email_reservasi` varchar(15) NOT NULL,
  `notelp_reservasi` varchar(13) NOT NULL,
  `tgl_reservasi` date NOT NULL,
  `jam_reservasi` time NOT NULL,
  `jml_orang` int(11) NOT NULL,
  `total_bayar` double NOT NULL,
  `status_reservasi` enum('selesai','belum selesai') NOT NULL DEFAULT 'belum selesai',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_reservasi`
--

INSERT INTO `tb_reservasi` (`id_reservasi`, `id_user`, `nama_reservasi`, `email_reservasi`, `notelp_reservasi`, `tgl_reservasi`, `jam_reservasi`, `jml_orang`, `total_bayar`, `status_reservasi`, `created_at`) VALUES
(16, 3, 'Nanda Dwi Arinda', 'nandaa123@gmail', '089536248194', '2023-02-03', '05:10:00', 15, 1814850, 'belum selesai', '2023-02-16 00:05:12'),
(17, 8, 'Alifiya', 'alifiyaa@gmail.', '089536248194', '2023-02-15', '04:20:00', 5, 604950, 'belum selesai', '2023-02-16 00:15:14'),
(18, 8, 'Sasih Nilawati', 'sasihnilawati@g', '089536248194', '2023-02-16', '02:20:00', 7, 846930, 'belum selesai', '2023-02-16 00:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `role` enum('cust','seller') NOT NULL DEFAULT 'cust'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nm_user`, `username`, `password`, `nohp`, `role`) VALUES
(3, 'Nanda Dwi Arinda', 'nandadwia', 'nandada123', '089536248194', 'cust'),
(4, 'Suci Nurpatimah', 'sucinurrr', 'sucinur24', '0895346047189', 'seller'),
(6, 'Karina', 'Karina', 'karinaa', 'karina123', 'cust'),
(8, 'Alifiya', 'alifiyaaa', 'alifiya123', '0895346047189', 'cust');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  ADD PRIMARY KEY (`id_reservasi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_reservasi`
--
ALTER TABLE `tb_reservasi`
  MODIFY `id_reservasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
