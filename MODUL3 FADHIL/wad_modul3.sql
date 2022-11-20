-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Nov 20, 2022 at 02:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `showroom_nama_table`
--

-- --------------------------------------------------------

--
-- Table structure for table `wad_modul3`
--

CREATE TABLE `wad_modul3` (
  `id_mobil` int(255) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `pemilik_mobil` varchar(2552) NOT NULL,
  `merk_mobil` varchar(255) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `deskripsi` text NOT NULL,
  `foto_mobil` varchar(255) NOT NULL,
  `status_pembayaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wad_modul3`
--

INSERT INTO `wad_modul3` (`id_mobil`, `nama_mobil`, `pemilik_mobil`, `merk_mobil`, `tanggal_beli`, `deskripsi`, `foto_mobil`, `status_pembayaran`) VALUES
(0, 'update', 'test', 'test', '2022-11-15', 'test', '', 'Belum Lunas'),
(54, 'BMW 1', 'Fadhil', 'BMW', '2022-11-20', 'you can change the &quot;...&quot; to a link to more information, or make it open a div with the whole block of text on the same page. Lots of options.. – \r\nBrian H Nov 23, 2010 at 17:03', 'ayla.png', 'Lunas'),
(55, 'BMW 2 update', 'Fadhil 2', 'BWM 2', '2022-11-19', '', 'rush.png', 'Belum Lunas'),
(56, 'BMW 3', 'Bastian', 'BMW 3', '2022-11-01', 'Laman AddItem untuk menambahkan data mobil ke database silahkan ikuti tips yang ada untuk membuat struktur database dan input field yang sesuai', 'brio.jpg', 'Belum Lunas'),
(57, 'bmw 4', 'siapa aja', 'BMW 4', '2022-11-19', 'Halaman Home merupakan laman awal dari website untuk judul bagian [NAMA] silahkan diganti dengan nama pendek masing-masing \r\nTombol MyCar digunakan untuk pindah ke laman MyItem apablia terdapat data mobil\r\nJika tidak terdapat data mobil maka tombol MyCar digunakan untuk pindah ke laman AddItem', 'rush.png', 'Lunas'),
(59, 'BMW 6 update bang', 'SIAPA AJA', 'BMW', '2022-11-04', 'test', 'brio.jpg', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wad_modul3`
--
ALTER TABLE `wad_modul3`
  ADD PRIMARY KEY (`id_mobil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wad_modul3`
--
ALTER TABLE `wad_modul3`
  MODIFY `id_mobil` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
