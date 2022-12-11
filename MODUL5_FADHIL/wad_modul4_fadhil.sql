-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 01:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_fadhil`
--

-- --------------------------------------------------------

--
-- Table structure for table `showroom_fadhil_table`
--

CREATE TABLE `showroom_fadhil_table` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(2552) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showroom_fadhil_table`
--

INSERT INTO `showroom_fadhil_table` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(55, 'BMW 2 update lagi deh', 'Fadhil 2', 'BWM 2', '2022-11-19', '', 'taft.jpg', 'Belum Lunas'),
(56, 'BMW 3 UPDATE', 'Bastian', 'BMW 3', '2022-11-01', 'Laman AddItem untuk menambahkan data mobil ke database silahkan ikuti tips yang ada untuk membuat struktur database dan input field yang sesuai', 'ayla.png', 'Lunas'),
(57, 'bmw 4', 'siapa aja', 'BMW 4', '2022-11-19', 'Halaman Home merupakan laman awal dari website untuk judul bagian [NAMA] silahkan diganti dengan nama pendek masing-masing \r\nTombol MyCar digunakan untuk pindah ke laman MyItem apablia terdapat data mobil\r\nJika tidak terdapat data mobil maka tombol MyCar digunakan untuk pindah ke laman AddItem', 'rush.png', 'Lunas'),
(59, 'BMW 6 update bang', 'SIAPA AJA', 'BMW', '2022-11-04', 'test', 'brio.jpg', 'Lunas'),
(61, 'BMW 10', 'siapa aja', 'BMW 10', '2022-11-27', 'SDFFFFFFFFFFFFFFFFF', 'xenia.jpg', 'Lunas'),
(62, 'BMW baru', 'siapa aja deh', 'BMW 10', '0000-00-00', '12323', 'agya.png', 'Belum Lunas'),
(65, 'BMW 2 update lagi', '', '', '0000-00-00', '', '', 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `user_fadhil`
--

CREATE TABLE `user_fadhil` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_fadhil`
--

INSERT INTO `user_fadhil` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(8, 'fadhil', 'nurmuhammadfadhilah2@gmail.com', '1234', '082125949572');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `showroom_fadhil_table`
--
ALTER TABLE `showroom_fadhil_table`
  ADD PRIMARY KEY (`id_mobil`);

--
-- Indexes for table `user_fadhil`
--
ALTER TABLE `user_fadhil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `showroom_fadhil_table`
--
ALTER TABLE `showroom_fadhil_table`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_fadhil`
--
ALTER TABLE `user_fadhil`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
