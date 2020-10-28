-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2020 at 04:41 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin`
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
  `desa_aktif` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`desa_kode`, `kec_kode`, `desa_nama`, `desa_aktif`) VALUES
('3515112022', '351511', 'Sidorejo', 1);

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

--
-- Dumping data for table `kader`
--

INSERT INTO `kader` (`kader_id`, `kader_nama`, `kader_nik`, `kader_sex`, `kader_kelahiran`, `kader_tglahir`, `kader_email`, `kader_hp`, `kader_aktif`) VALUES
(1, 'Administrator', '1234567890', NULL, NULL, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `kec_kode` char(6) NOT NULL,
  `kec_nama` varchar(50) NOT NULL,
  `kec_aktif` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`kec_kode`, `kec_nama`, `kec_aktif`) VALUES
('351511', 'Krian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `kk_id` bigint(20) UNSIGNED NOT NULL,
  `kk_no` varchar(16) NOT NULL,
  `kk_tgl` date DEFAULT NULL COMMENT 'tgl dikeluarkan',
  `kk_status` tinyint(1) DEFAULT '1',
  `kk_lastupdate` timestamp NULL DEFAULT NULL,
  `kk_lastupdate_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ms_faskes`
--

CREATE TABLE `ms_faskes` (
  `faskes_id` smallint(5) UNSIGNED NOT NULL,
  `faskesjenis_id` tinyint(4) NOT NULL,
  `faskes_kode` varchar(20) DEFAULT NULL,
  `faskes_nama` varchar(50) NOT NULL,
  `faskes_alamat` varchar(100) DEFAULT NULL,
  `desa_kode` char(10) DEFAULT NULL,
  `faskes_aktif` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_faskes`
--

INSERT INTO `ms_faskes` (`faskes_id`, `faskesjenis_id`, `faskes_kode`, `faskes_nama`, `faskes_alamat`, `desa_kode`, `faskes_aktif`) VALUES
(1, 1, '01', 'Puskesmas A', NULL, NULL, 1),
(2, 1, '02', 'Puskesmas B', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ms_faskes_jenis`
--

CREATE TABLE `ms_faskes_jenis` (
  `faskesjenis_id` tinyint(3) UNSIGNED NOT NULL,
  `faskesjenis_kode` varchar(5) DEFAULT NULL,
  `faskesjenis_nama` varchar(30) NOT NULL,
  `faskesjenis_aktif` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_faskes_jenis`
--

INSERT INTO `ms_faskes_jenis` (`faskesjenis_id`, `faskesjenis_kode`, `faskesjenis_nama`, `faskesjenis_aktif`) VALUES
(1, '01', 'Puskesmas', 1),
(2, '02', 'Polindes', 1),
(3, '03', 'Pustu', 1),
(4, '04', 'Bidan Praktek', 1),
(5, '05', 'Dokter Praktek', 1),
(6, '06', 'Rumah Sakit', 1),
(7, '07', 'Klinik', 1);

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

--
-- Dumping data for table `ms_group`
--

INSERT INTO `ms_group` (`grp_id`, `grp_kode`, `grp_nama`, `grp_aktif`) VALUES
(1, '01', 'Administrator', 1),
(2, '02', 'User Dinas', 1),
(3, '03', 'Kader Lapangan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ms_group_menu`
--

CREATE TABLE `ms_group_menu` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `grp_id` tinyint(3) UNSIGNED NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_group_menu`
--

INSERT INTO `ms_group_menu` (`menu_id`, `grp_id`, `update_by`, `update_time`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 1, NULL, NULL),
(4, 1, NULL, NULL),
(5, 1, NULL, NULL),
(6, 1, NULL, NULL),
(7, 1, NULL, NULL),
(8, 1, NULL, NULL),
(9, 1, NULL, NULL),
(10, 1, NULL, NULL),
(11, 1, NULL, NULL),
(12, 1, NULL, NULL),
(13, 1, NULL, NULL),
(14, 1, NULL, NULL),
(15, 1, NULL, NULL),
(16, 1, NULL, NULL),
(17, 1, NULL, NULL),
(18, 1, NULL, NULL),
(19, 1, NULL, NULL),
(20, 1, NULL, NULL),
(21, 1, NULL, NULL),
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ms_kontrasepsi`
--

CREATE TABLE `ms_kontrasepsi` (
  `kontrasepsi_id` tinyint(3) UNSIGNED NOT NULL,
  `kontransepsi_kode` varchar(10) DEFAULT NULL,
  `kontransepsi_nama` varchar(50) NOT NULL,
  `kontransepsi_expired` smallint(6) DEFAULT NULL COMMENT 'dalam satuan hari',
  `kontrasepsi_aktif` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_kontrasepsi`
--

INSERT INTO `ms_kontrasepsi` (`kontrasepsi_id`, `kontransepsi_kode`, `kontransepsi_nama`, `kontransepsi_expired`, `kontrasepsi_aktif`) VALUES
(1, '01', 'Suntik KB', 90, 1),
(2, '02', 'PIL KB', 30, 1),
(3, '03', 'SPIRAL', 100, 1);

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

--
-- Dumping data for table `ms_menu`
--

INSERT INTO `ms_menu` (`mn_id`, `mn_kode`, `mn_nama`, `mn_level`, `mn_induk`, `mn_icon`, `mn_url`, `mn_aktif`) VALUES
(1, '01', 'Dashboard', 1, NULL, NULL, NULL, 1),
(2, '02', 'Setting', 1, NULL, NULL, NULL, 1),
(3, '03', 'Master Data', 1, NULL, NULL, NULL, 1),
(4, '04', 'Transaksi', 1, NULL, NULL, NULL, 1),
(5, '05', 'Laporan', 1, NULL, NULL, NULL, 1),
(6, '02.01', 'Profil Instansi', 2, 2, NULL, NULL, 1),
(7, '02.02', 'Ms Menu', 2, 2, NULL, NULL, 1),
(8, '02.03', 'Ms Group', 2, 2, NULL, NULL, 1),
(9, '02.04', 'Ms User', 2, 2, NULL, NULL, 1),
(10, '02.05', 'User In Group', 2, 2, NULL, NULL, 1),
(11, '03.01', 'Data Kecamatan', 2, 3, NULL, NULL, 1),
(12, '03.02', 'Data Desa', 2, 3, NULL, NULL, 1),
(13, '03.03', 'Data RW', 2, 3, NULL, NULL, 1),
(14, '03.04', 'Data RT', 2, 3, NULL, NULL, 1),
(15, '03.05', 'Data Faskes', 2, 3, NULL, NULL, 1),
(16, '03.06', 'Data Kader', 2, 3, NULL, NULL, 1),
(17, '04.01', 'Data KK', 2, 4, NULL, NULL, 1),
(18, '04.02', 'Data Penduduk', 2, 4, NULL, NULL, 1),
(19, '04.03', 'Data Akseptor KB', 2, 4, NULL, NULL, 1),
(20, '03.07', 'Data Jenis KB', 2, 3, NULL, NULL, 1),
(21, '04.04', 'Kunjungan Ulang Akseptor', 2, 3, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ms_user`
--

CREATE TABLE `ms_user` (
  `user_id` int(4) UNSIGNED NOT NULL,
  `kader_id` int(4) UNSIGNED DEFAULT '0',
  `user_name` varchar(30) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user`
--

INSERT INTO `ms_user` (`user_id`, `kader_id`, `user_name`, `user_password`, `user_status`) VALUES
(1, 1, 'admin', '0192023a7bbd73250516f069df18b500', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ms_user_group`
--

CREATE TABLE `ms_user_group` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `grp_id` tinyint(3) UNSIGNED NOT NULL,
  `update_by` int(11) DEFAULT NULL,
  `update_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ms_user_group`
--

INSERT INTO `ms_user_group` (`user_id`, `grp_id`, `update_by`, `update_time`) VALUES
(1, 1, NULL, '2020-10-26 10:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `penduduk_id` bigint(20) UNSIGNED NOT NULL,
  `kk_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kk_urut` tinyint(4) DEFAULT '1',
  `nik` char(16) DEFAULT NULL,
  `ektp` tinyint(1) DEFAULT NULL COMMENT '0.Belum 1.Ya',
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `tmp_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `thn_lahir` year(4) DEFAULT NULL,
  `goldarah` varchar(2) DEFAULT NULL COMMENT 'A,B,AB,O',
  `rhesus` char(1) DEFAULT NULL COMMENT '+,-',
  `suku_id` smallint(6) DEFAULT NULL COMMENT 'ms_suku',
  `agama` tinyint(3) UNSIGNED DEFAULT NULL,
  `pendidikan` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'Pendidikan terakhir',
  `pendidikan_ditempuh` tinyint(3) UNSIGNED DEFAULT NULL COMMENT 'Pendidikan sdg ditempuh',
  `pekerjaan` smallint(5) UNSIGNED DEFAULT NULL,
  `status_perkawinan` tinyint(3) UNSIGNED DEFAULT NULL,
  `hub_keluarga` tinyint(3) UNSIGNED DEFAULT NULL,
  `kewarganegaraan` varchar(30) DEFAULT NULL,
  `no_paspor` varchar(30) DEFAULT NULL,
  `no_kitas` varchar(30) DEFAULT NULL,
  `ayah` varchar(255) DEFAULT NULL,
  `ibu` varchar(255) DEFAULT NULL,
  `stt` tinyint(1) DEFAULT '1' COMMENT '1.Aktif 0.Non Aktif (Mati/Pindah)',
  `ada` tinyint(1) DEFAULT '1' COMMENT 'Domisili di desa ? 1.Ya 0.Tidak',
  `kode_desa` varchar(10) DEFAULT NULL,
  `rt` char(3) DEFAULT NULL,
  `rw` char(3) DEFAULT NULL,
  `kk` varchar(20) DEFAULT NULL
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

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `kode`, `instansi`, `instansi_nick`, `alamat`, `kab_kode`, `telp`, `email`, `website`, `kodepos`, `logo`) VALUES
(1, '123456789', 'Dinas Pengendalian Penduduk dan Keluarga Berencana', 'Dinas PPKB', NULL, '3515', '031-', 'ppkb@gmail.com', 'www.bensae.id', '60234', NULL);

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
-- Dumping data for table `wilayah_kader`
--

INSERT INTO `wilayah_kader` (`kader_id`, `desa_kode`, `rw`, `rt`, `update_by`, `update_time`) VALUES
(1, '3515112022', '010', '054', NULL, '2020-10-26 10:36:56');

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
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`kk_id`);

--
-- Indexes for table `ms_faskes`
--
ALTER TABLE `ms_faskes`
  ADD PRIMARY KEY (`faskes_id`);

--
-- Indexes for table `ms_faskes_jenis`
--
ALTER TABLE `ms_faskes_jenis`
  ADD PRIMARY KEY (`faskesjenis_id`);

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
-- Indexes for table `ms_kontrasepsi`
--
ALTER TABLE `ms_kontrasepsi`
  ADD PRIMARY KEY (`kontrasepsi_id`);

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
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`penduduk_id`),
  ADD KEY `FK_penduduk` (`kk_id`);

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
  MODIFY `kader_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `kk_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=537;
--
-- AUTO_INCREMENT for table `ms_faskes`
--
ALTER TABLE `ms_faskes`
  MODIFY `faskes_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ms_faskes_jenis`
--
ALTER TABLE `ms_faskes_jenis`
  MODIFY `faskesjenis_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ms_group`
--
ALTER TABLE `ms_group`
  MODIFY `grp_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_kontrasepsi`
--
ALTER TABLE `ms_kontrasepsi`
  MODIFY `kontrasepsi_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ms_menu`
--
ALTER TABLE `ms_menu`
  MODIFY `mn_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ms_user`
--
ALTER TABLE `ms_user`
  MODIFY `user_id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `penduduk_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1679;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
