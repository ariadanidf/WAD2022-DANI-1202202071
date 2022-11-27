-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 27, 2022 at 02:32 PM
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
-- Database: `wad_modul4_dani`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_dani_table`
--

CREATE TABLE `showroom_dani_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(255) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showroom_dani_table`
--

INSERT INTO `showroom_dani_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(0, 'Civic', 'Ariadani Dwi Fathurahman_1202202071', 'Honda', '2022-11-26', '-', 'Civic.png', 'Lunas'),
(1033711813, 'Avanza', 'Ariadani Dwi Fathurahman-1202202071', 'Toyota', '2022-12-01', 'Ini merupakan mobil Avanza produksi Toyota', 'Avanza.png', 'Belum Lunas'),
(1432457859, 'Brio', 'Ariadani Dwi Fathurahman-1202202071', 'Honda', '2022-11-20', 'Ini merupakan mobil Brio dari pabrikan Honda', 'Brio.png', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user_dani`
--

CREATE TABLE `user_dani` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_dani`
--

INSERT INTO `user_dani` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(11, 'Ariadani Dwi Fathurahman_1202202071', 'ariadanidf@gmail.com', '1202202071', '081234567890'),
(15, 'Ariadani Dwi Fathurahman_1202202071', 'modul4@gmail.com', 'cobake2', '081202202071');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_dani_table`
--
ALTER TABLE `showroom_dani_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_dani`
--
ALTER TABLE `user_dani`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `email_2` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_dani`
--
ALTER TABLE `user_dani`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
