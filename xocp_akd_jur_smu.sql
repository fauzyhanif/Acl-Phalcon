-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2017 at 06:46 AM
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
-- Table structure for table `xocp_akd_jur_smu`
--

CREATE TABLE `xocp_akd_jur_smu` (
  `jur_smu_cd` char(10) NOT NULL DEFAULT '',
  `jur_smu_nm` char(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xocp_akd_jur_smu`
--

INSERT INTO `xocp_akd_jur_smu` (`jur_smu_cd`, `jur_smu_nm`) VALUES
('104', 'STM Listrik/Elektro/Elektronica'),
('112', 'STM Mesin'),
('127', 'STM Perkapalan'),
('135', 'STM Penerbangan'),
('143', 'Sekolah Teknologi Menengah Atas'),
('15', 'SMA, SMPP, PPSP, MA Jur IPA, PALMA, PAS, PAL, B'),
('151', 'STM Pertanian/SPMA/SFMA'),
('166', 'Sekolah Perikanan Menengah Atas'),
('174', 'Sekolah Kehutanan Menengah Atas'),
('182', 'Sekolah Perkebunan Menengah Atas'),
('197', 'Sekolah Peternakan Menengah Atas'),
('201', 'Sekolah Menengah Ekonomi Atas'),
('216', 'Sekolah Kehakiman Menengah Atas'),
('224', 'Sekolah Hakim dan Jaksa'),
('23', 'SMA, SMPP, PPSP, MA Jur IPS, BAHASA, SOS, BUD, A, C'),
('232', 'Sekolah Panitera Pengadilan'),
('247', 'Sekolah Hakim Islam'),
('255', 'Sekolah Menengah Pekerjaan Sosial'),
('263', 'SKKA/SMKA/SMTK'),
('271', 'SPG/SGPLB'),
('286', 'SGO/SMOA'),
('294', 'Sekolah Guru Hakim Agama'),
('305', 'Pendidikan Guru Agama'),
('31', ' STM Bangunan'),
('313', 'Sekolah Menengah Senirupa'),
('321', 'Sekolah Menengah Karawitan'),
('336', 'Sekolah Analisa Kimia'),
('344', 'SMF/SAA/SPO'),
('352', 'Sekolah Perindustrian Menengah Atas'),
('367', 'Persiapan Lain'),
('375', 'SMA, MA Program A-1'),
('383', 'SMA, MA Program A-2'),
('391', 'SMA, MA Program A-3'),
('402', 'SMA, MA Program A-4'),
('46', 'STM Bangunan Air/Sipil'),
('54', 'STM Jembatan/Jalan'),
('62', 'STM Geologi'),
('77', 'STM Geodesi'),
('85', 'STM Pertambangan'),
('93', 'STM Kimia/Industri'),
('999', 'Lain-Lain');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `xocp_akd_jur_smu`
--
ALTER TABLE `xocp_akd_jur_smu`
  ADD PRIMARY KEY (`jur_smu_cd`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
