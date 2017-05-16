-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 06:41 AM
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
-- Table structure for table `xocp_akd_informasi`
--

CREATE TABLE `xocp_akd_informasi` (
  `id_informasi` int(2) NOT NULL DEFAULT '0',
  `nama` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xocp_akd_informasi`
--

INSERT INTO `xocp_akd_informasi` (`id_informasi`, `nama`) VALUES
(1, 'Spanduk/Brosur'),
(2, 'Teman'),
(3, 'Iklan Radio'),
(4, 'Iklan Koran/Majalah'),
(5, 'Ayah/Ibu/Kerabat'),
(6, 'Sekolah'),
(7, 'Internet/Browsing'),
(8, 'Langsung ke Kampus STIE SEMARANG'),
(9, 'Mitra/Marketing'),
(99, 'Lainnya (isi dibawah)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xocp_akd_informasi`
--
ALTER TABLE `xocp_akd_informasi`
  ADD PRIMARY KEY (`id_informasi`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
