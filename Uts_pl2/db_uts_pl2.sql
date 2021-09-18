-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2021 at 04:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_uts_pl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `latihan_spp_siswa`
--

CREATE TABLE `latihan_spp_siswa` (
  `nisn` int(10) NOT NULL,
  `nis` int(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` int(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latihan_spp_siswa`
--

INSERT INTO `latihan_spp_siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
(123445, 155678, 'Vler', 13, 'aczxvasdasd', 876654, 155),
(11141970, 112233, 'doni', 12, 'asdasdasd', 8675476, 143);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `latihan_spp_siswa`
--
ALTER TABLE `latihan_spp_siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `latihan_spp_siswa`
--
ALTER TABLE `latihan_spp_siswa`
  MODIFY `nisn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11141971;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `latihan_spp_siswa`
--
ALTER TABLE `latihan_spp_siswa`
  ADD CONSTRAINT `latihan_spp_siswa_ibfk_1` FOREIGN KEY (`id_spp`) REFERENCES `latihan_spp_spp` (`id_spp`),
  ADD CONSTRAINT `latihan_spp_siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `latihan_spp_kelas` (`id_kelas`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
