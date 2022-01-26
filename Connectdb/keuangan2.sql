-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 09:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keuangan2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer2`
--

CREATE TABLE `tb_customer2` (
  `id_customer` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `jkel` enum('P','L') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer2`
--

INSERT INTO `tb_customer2` (`id_customer`, `id_user`, `nama`, `username`, `jkel`, `alamat`, `no_telp`) VALUES
(3, '8847736234', 'Yody Indra', 'yodyindr', 'L', 'Jl. Raya Sesetan', '089758466352'),
(11, '6456378291', 'Ida Bagus Puniardhi Isaba Pidada', 'gusardhi08', 'L', 'Jl. Nangka Utara', '082243551666'),
(13, '9857463529', 'Ketut Wisnu Triskananda Sidartha', 'Lupinzz', 'L', 'Jl. Gatot Subroto', '089788444635'),
(15, '8756645432', 'Putu Ngurah Labda Jana', 'lbdajn', 'L', 'Jl. Nangka Utara', '085784987532'),
(16, '1234567890', 'I Kadek Dwi Yudiarsana Dharma', 'Kadekk26', 'L', 'Jl. Tukad Barito', '085237009842');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer2`
--
ALTER TABLE `tb_customer2`
  ADD PRIMARY KEY (`id_customer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_customer2`
--
ALTER TABLE `tb_customer2`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
