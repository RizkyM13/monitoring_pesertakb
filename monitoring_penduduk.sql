-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 08:54 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_rt`
--

CREATE TABLE `data_rt` (
  `rt_id` int(4) UNSIGNED NOT NULL,
  `rw_id` int(4) NOT NULL,
  `rt` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_rw`
--

CREATE TABLE `data_rw` (
  `rw_id` int(4) UNSIGNED NOT NULL,
  `desa_kode` char(10) NOT NULL,
  `rw` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE `desa` (
  `desa_kode` char(10) NOT NULL,
  `kec_kode` char(6) NOT NULL,
  `desa_nama` varchar(50) NOT NULL,
  `desa_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE `kader` (
  `kader_id` int(4) UNSIGNED NOT NULL,
  `kader_nama` varchar(50) NOT NULL,
  `kader_nik` varchar(16) DEFAULT NULL COMMENT 'nomor NIK',
  `kader_sex` char(1) DEFAULT NULL COMMENT 'L / P',
  `kader_kelahiran` varchar(30) DEFAULT NULL COMMENT 'tempat lahir',
  `kader_tglahir` date DEFAULT NULL COMMENT 'tgl lahir',
  `kader_email` varchar(75) DEFAULT NULL,
  `kader_hp` varchar(30) DEFAULT NULL,
  `kader_aktif` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kec_kode` char(6) NOT NULL,
  `kec_nama` varchar(50) NOT NULL,
  `kec_aktif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_group`
--

CREATE TABLE `ms_group` (
  `grp_id` tinyint(3) UNSIGNED NOT NULL,
  `grp_kode` varchar(5) DEFAULT NULL,
  `grp_nama` varchar(30) NOT NULL,
  `grp_aktif` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_group_menu`
--

CREATE TABLE `ms_group_menu` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `grp_id` tinyint(3) UNSIGNED NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_menu`
--

CREATE TABLE `ms_menu` (
  `mn_id` int(10) UNSIGNED NOT NULL,
  `mn_kode` varchar(20) NOT NULL,
  `mn_nama` varchar(30) NOT NULL,
  `mn_level` tinyint(4) NOT NULL,
  `mn_induk` int(11) DEFAULT NULL,
  `mn_icon` varchar(30) DEFAULT NULL,
  `mn_url` varchar(100) DEFAULT NULL,
  `mn_aktif` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE `ms_user` (
  `user_id` int(4) UNSIGNED NOT NULL,
  `kader_id` int(4) UNSIGNED DEFAULT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_user_group`
--

CREATE TABLE `ms_user_group` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `grp_id` tinyint(3) UNSIGNED NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `kode` varchar(30) DEFAULT NULL,
  `instansi` varchar(50) NOT NULL COMMENT 'Nama panjang instansi',
  `instansi_nick` varchar(20) DEFAULT NULL COMMENT 'nama pendek instansi',
  `alamat` varchar(255) DEFAULT NULL,
  `kab_kode` char(4) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `kodepos` varchar(10) DEFAULT NULL,
  `logo` varchar(30) DEFAULT NULL COMMENT 'url file logo'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wilayah_kader`
--

CREATE TABLE `wilayah_kader` (
  `kader_id` int(10) UNSIGNED NOT NULL,
  `desa_kode` char(10) NOT NULL,
  `rw` varchar(3) DEFAULT NULL,
  `rt` varchar(3) DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_rt`
--
ALTER TABLE `data_rt`
  ADD PRIMARY KEY (`rt_id`);

--
-- Indexes for table `data_rw`
--
ALTER TABLE `data_rw`
  ADD PRIMARY KEY (`rw_id`);

--
-- Indexes for table `desa`
--
ALTER TABLE `desa`
  ADD PRIMARY KEY (`desa_kode`);

--
-- Indexes for table `kader`
--
ALTER TABLE `kader`
  ADD PRIMARY KEY (`kader_id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`kec_kode`);

--
-- Indexes for table `ms_group`
--
ALTER TABLE `ms_group`
  ADD PRIMARY KEY (`grp_id`);

--
-- Indexes for table `ms_group_menu`
--
ALTER TABLE `ms_group_menu`
  ADD KEY `FK_ms_group_menu` (`menu_id`),
  ADD KEY `FK_ms_group_menu2` (`grp_id`);

--
-- Indexes for table `ms_menu`
--
ALTER TABLE `ms_menu`
  ADD PRIMARY KEY (`mn_id`);

--
-- Indexes for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `FK_ms_user` (`kader_id`);

--
-- Indexes for table `ms_user_group`
--
ALTER TABLE `ms_user_group`
  ADD KEY `FK_ms_user_group1` (`user_id`),
  ADD KEY `FK_ms_user_group2` (`grp_id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah_kader`
--
ALTER TABLE `wilayah_kader`
  ADD KEY `FK_wilayah_desa` (`desa_kode`),
  ADD KEY `FK_wilayah_kader` (`kader_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_rt`
--
ALTER TABLE `data_rt`
  MODIFY `rt_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_rw`
--
ALTER TABLE `data_rw`
  MODIFY `rw_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kader`
--
ALTER TABLE `kader`
  MODIFY `kader_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_group`
--
ALTER TABLE `ms_group`
  MODIFY `grp_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_menu`
--
ALTER TABLE `ms_menu`
  MODIFY `mn_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `user_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ms_group_menu`
--
ALTER TABLE `ms_group_menu`
  ADD CONSTRAINT `FK_ms_group_menu` FOREIGN KEY (`menu_id`) REFERENCES `ms_menu` (`mn_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ms_group_menu2` FOREIGN KEY (`grp_id`) REFERENCES `ms_group` (`grp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ms_user`
--
ALTER TABLE `ms_user`
  ADD CONSTRAINT `FK_ms_user` FOREIGN KEY (`kader_id`) REFERENCES `kader` (`kader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ms_user_group`
--
ALTER TABLE `ms_user_group`
  ADD CONSTRAINT `FK_ms_user_group1` FOREIGN KEY (`user_id`) REFERENCES `ms_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_ms_user_group2` FOREIGN KEY (`grp_id`) REFERENCES `ms_group` (`grp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wilayah_kader`
--
ALTER TABLE `wilayah_kader`
  ADD CONSTRAINT `FK_wilayah_desa` FOREIGN KEY (`desa_kode`) REFERENCES `desa` (`desa_kode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_wilayah_kader` FOREIGN KEY (`kader_id`) REFERENCES `kader` (`kader_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
