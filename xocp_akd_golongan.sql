-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 07:02 AM
-- Server version: 5.6.35-1+deb.sury.org~xenial+0.1
-- PHP Version: 7.0.17-2+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stiePMB2`
--

-- --------------------------------------------------------

--
-- Table structure for table `xocp_akd_golongan`
--

CREATE TABLE `xocp_akd_golongan` (
  `org_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `golongan_cd` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `golongan_nm` char(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xocp_akd_golongan`
--

INSERT INTO `xocp_akd_golongan` (`org_id`, `golongan_cd`, `golongan_nm`) VALUES
(1, 1, 'Beasiswa'),
(1, 2, 'Alumni'),
(1, 3, 'Umum'),
(1, 4, 'Anak Pegawai'),
(1, 5, 'Drop Out'),
(1, 6, 'Luar Negeri'),
(1, 7, 'Mengundurkan Diri'),
(1, 8, 'Pindahan/Transfer'),
(1, 9, 'Sudah Lulus'),
(1, 103, 'Mitra'),
(1, 104, 'REGULER PAGI'),
(1, 105, 'REGULER SORE'),
(1, 107, 'REGULER KARYAWAN'),
(1, 108, 'EKSEKUTIF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xocp_akd_golongan`
--
ALTER TABLE `xocp_akd_golongan`
  ADD PRIMARY KEY (`org_id`,`golongan_cd`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
