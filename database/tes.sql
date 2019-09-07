-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 07, 2019 at 08:24 AM
-- Server version: 10.1.41-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.19-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabungan`
--

CREATE TABLE `tabungan` (
  `id_tabungan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `setoran` bigint(20) NOT NULL,
  `penarikan` bigint(20) NOT NULL,
  `saldo` bigint(20) NOT NULL,
  `bunga` bigint(20) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabungan`
--

INSERT INTO `tabungan` (`id_tabungan`, `id_user`, `setoran`, `penarikan`, `saldo`, `bunga`, `tanggal`) VALUES
(1, 1, 30000, 0, 30000, 0, '2019-09-07'),
(2, 2, 100000, 0, 100000, 0, '2019-09-07'),
(3, 4, 100000, 0, 100000, 0, '2019-09-07'),
(4, 1, 130000, 0, 160000, 0, '2019-09-07'),
(5, 1, 0, 7500, 152500, 0, '2019-09-07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `alamat`, `tgl_lahir`, `pekerjaan`, `jenis_kelamin`, `no_telp`) VALUES
(1, 'Amalia', 'Jl. Imogiri Barat Km,12, Banguntapan, Bantul', '1994-09-11', 'Pengajar', 'Perempuan', '0891278121098'),
(2, 'Ahmad Saputra', 'Jl. Laksda Adisudjipto No. 45 Sleman, Yogyakarta', '1982-06-06', 'Polisi', 'Laki-Laki', '080928819282'),
(3, 'Budi Rahardja', 'Jl. Merpati No. 162, Poggung Dalangan, Sleman, Yogyakarta', '1990-12-18', 'Programmer', 'Laki-Laki', '080129923192'),
(4, 'Mahesa Anwar', 'Jl. Ahmad Yani, Yogyakarta', '1997-09-13', 'Penulis', 'Laki-Laki', '089872772182');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabungan`
--
ALTER TABLE `tabungan`
  ADD PRIMARY KEY (`id_tabungan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabungan`
--
ALTER TABLE `tabungan`
  MODIFY `id_tabungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
