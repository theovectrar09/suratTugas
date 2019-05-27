-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 27, 2019 at 06:18 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sppdinas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dosen`
--

CREATE TABLE `tb_dosen` (
  `nip` varchar(10) NOT NULL DEFAULT '',
  `nama` varchar(50) NOT NULL,
  `telfon` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dosen`
--

INSERT INTO `tb_dosen` (`nip`, `nama`, `telfon`, `alamat`) VALUES
('1234', 'Agung Wahana, SE., M.T.', '0981274122', 'Bandung'),
('1244', 'theo vectra riyadi', '0981274122', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `id` varchar(10) NOT NULL DEFAULT '',
  `mk` varchar(100) NOT NULL,
  `sks` int(3) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `pukul` varchar(20) NOT NULL,
  `ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`id`, `mk`, `sks`, `jurusan`, `hari`, `pukul`, `ruang`) VALUES
('IF21333', 'Ekonomi Teknik', 2, 'IF/VII/A', 'Selasa', '14.20-16.0', 'R.4.10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `no` int(10) NOT NULL,
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mk` varchar(500) NOT NULL,
  `mk2` varchar(100) NOT NULL,
  `mk3` varchar(100) NOT NULL,
  `mk4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_surat`
--

INSERT INTO `tb_surat` (`no`, `id`, `nama`, `mk`, `mk2`, `mk3`, `mk4`) VALUES
(2, '12442331', '1234 - Agung Wahana, SE., M.T.', 'IF21333 - Ekonomi Teknik - 2 - IF/VII/A - Selasa - 14.20-16.0 - R.4.10', 'IF21333 - Ekonomi Teknik - 2 - IF/VII/A - Selasa - 14.20-16.0 - R.4.10', 'IF21333 - Ekonomi Teknik - 2 - IF/VII/A - Selasa - 14.20-16.0 - R.4.10', 'IF21333 - Ekonomi Teknik - 2 - IF/VII/A - Selasa - 14.20-16.0 - R.4.10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(16) NOT NULL,
  `aktif` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `password`, `hak_akses`, `aktif`) VALUES
('admin', 'admin', 'admin', 'User', 'Y'),
('root', 'root', 'root', 'Admin', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dosen`
--
ALTER TABLE `tb_dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
