-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 12, 2011 at 10:18 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simpeg_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_anak`
--

CREATE TABLE IF NOT EXISTS `data_anak` (
  `nip` varchar(45) NOT NULL,
  `nama_anak` varchar(150) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `status_anak` varchar(100) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `pendidikan` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `data_anak_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_anak`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_dev_mandiri`
--

CREATE TABLE IF NOT EXISTS `data_dev_mandiri` (
  `nip` varchar(45) NOT NULL,
  `nama_kursus` varchar(150) DEFAULT NULL,
  `jenis_kursus` varchar(150) DEFAULT NULL,
  `penyelenggara` varchar(150) DEFAULT NULL,
  `alamat` tinytext,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `no_sertifikat` varchar(45) DEFAULT NULL,
  `predikat` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `dev_man_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dev_mandiri`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_diklat`
--

CREATE TABLE IF NOT EXISTS `data_diklat` (
  `nip` varchar(45) NOT NULL,
  `nama_pelatihan` varchar(150) DEFAULT NULL,
  `jenis_pelatihan` varchar(45) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `status_lulus` enum('LULUS','TIDAK LULUS') DEFAULT NULL,
  `predikat` varchar(45) DEFAULT NULL,
  `rangking` int(11) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `diklat_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_diklat`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_organisasi`
--

CREATE TABLE IF NOT EXISTS `data_organisasi` (
  `nip` varchar(45) NOT NULL,
  `nama_org` varchar(150) DEFAULT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  `alamat` tinytext,
  `thn_masuk` year(4) DEFAULT NULL,
  `thn_keluar` year(4) DEFAULT NULL,
  `honor` bigint(20) DEFAULT NULL,
  `jabatan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `data_org_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_organisasi`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_pasangan`
--

CREATE TABLE IF NOT EXISTS `data_pasangan` (
  `nip` varchar(45) NOT NULL,
  `nama_pasangan` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `status_nikah` enum('MENIKAH','TIDAK MENIHAK','DUDA/JANDA') DEFAULT NULL,
  `jum_tanggungan` int(11) DEFAULT NULL,
  `alamat` tinytext,
  `nama_bapak` varchar(64) DEFAULT NULL,
  `nama_ibu` varchar(64) DEFAULT NULL,
  `pendidikan_terakhir` varchar(45) DEFAULT NULL,
  `tgl_nikah` date DEFAULT NULL,
  `tgl_cerai` date DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `data_pribadi_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pasangan`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE IF NOT EXISTS `data_pegawai` (
  `nip` varchar(45) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `tgl_angkat_capeg` date DEFAULT NULL,
  `tgl_angkat_peg` date DEFAULT NULL,
  `tgl_menjabat` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `golongan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama`, `tgl_angkat_capeg`, `tgl_angkat_peg`, `tgl_menjabat`, `status`, `golongan`) VALUES
('1454554', 'Bharata Kalbuaji', '1970-01-01', '1971-02-02', '1972-03-03', 'Aktif', '1A');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendidikan`
--

CREATE TABLE IF NOT EXISTS `data_pendidikan` (
  `nip` varchar(45) NOT NULL,
  `jenjang` varchar(45) DEFAULT NULL,
  `nama_tempat` varchar(45) DEFAULT NULL,
  `tahun_masuk` year(4) DEFAULT NULL,
  `tahun_lulus` year(4) DEFAULT NULL,
  `gelar` varchar(45) DEFAULT NULL,
  `no_ijasah` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `data_pendidikan_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pendidikan`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_pengalaman`
--

CREATE TABLE IF NOT EXISTS `data_pengalaman` (
  `nip` varchar(45) NOT NULL,
  `pengalaman` varchar(150) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `pengalaman_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengalaman`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_pengalaman_kerja`
--

CREATE TABLE IF NOT EXISTS `data_pengalaman_kerja` (
  `nip` varchar(45) NOT NULL,
  `tempat_kerja` varchar(45) DEFAULT NULL,
  `alamat` tinytext,
  `tahun_masuk` year(4) DEFAULT NULL,
  `tahun_keluar` year(4) DEFAULT NULL,
  `gaji_terakhir` bigint(20) DEFAULT NULL,
  `jabatan_terakhir` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `data_peng_kerja_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pengalaman_kerja`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_penghargaan_eks`
--

CREATE TABLE IF NOT EXISTS `data_penghargaan_eks` (
  `nip` varchar(45) NOT NULL,
  `nama_penghargaan` varchar(150) DEFAULT NULL,
  `tgl_dapat` date DEFAULT NULL,
  `pemberi` varchar(150) DEFAULT NULL,
  `alamat` tinytext,
  PRIMARY KEY (`nip`),
  KEY `penghargaan_eks_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penghargaan_eks`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_penghargaan_in`
--

CREATE TABLE IF NOT EXISTS `data_penghargaan_in` (
  `nip` varchar(45) NOT NULL,
  `jenis_penghargaan` varchar(150) DEFAULT NULL,
  `no_sk` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `penghargaan_in_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penghargaan_in`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_pribadi`
--

CREATE TABLE IF NOT EXISTS `data_pribadi` (
  `nip` varchar(45) NOT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `status_nikah` enum('MENIKAH','TIDAK MENIHAK','DUDA/JANDA') DEFAULT NULL,
  `jum_tanggungan` int(11) DEFAULT NULL,
  `alamat` tinytext,
  `nama_bapak` varchar(64) DEFAULT NULL,
  `nama_ibu` varchar(64) DEFAULT NULL,
  `jenis_kelamin` enum('PRIA','WANITA') DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `data_pribadi_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pribadi`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_riwayat_kerja`
--

CREATE TABLE IF NOT EXISTS `data_riwayat_kerja` (
  `nip` varchar(45) NOT NULL,
  `no_sk` varchar(45) DEFAULT NULL,
  `jenis_sk` enum('PENGANGKATAN','ROTASI','MUTASI','DEMOSI','PROMOSI') DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `riwayat_kerja_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_riwayat_kerja`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_sanksi`
--

CREATE TABLE IF NOT EXISTS `data_sanksi` (
  `nip` varchar(45) NOT NULL,
  `jenis_sanksi` enum('SANKSI RINGAN','SANKSI SEDANG','SANKSI BERAT') DEFAULT NULL,
  `no_sk` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `sanksi_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sanksi`
--


-- --------------------------------------------------------

--
-- Table structure for table `data_sk_lain`
--

CREATE TABLE IF NOT EXISTS `data_sk_lain` (
  `nip` varchar(45) NOT NULL,
  `no_sk` varchar(45) DEFAULT NULL,
  `jenis_sk` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`nip`),
  KEY `sk_lain_fk` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sk_lain`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_anak`
--
ALTER TABLE `data_anak`
  ADD CONSTRAINT `data_anak_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_dev_mandiri`
--
ALTER TABLE `data_dev_mandiri`
  ADD CONSTRAINT `dev_man_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_diklat`
--
ALTER TABLE `data_diklat`
  ADD CONSTRAINT `diklat_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_organisasi`
--
ALTER TABLE `data_organisasi`
  ADD CONSTRAINT `data_org_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pasangan`
--
ALTER TABLE `data_pasangan`
  ADD CONSTRAINT `data_pasangani_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD CONSTRAINT `data_pendidikan_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  ADD CONSTRAINT `pengalaman_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pengalaman_kerja`
--
ALTER TABLE `data_pengalaman_kerja`
  ADD CONSTRAINT `data_peng_kerja_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_penghargaan_eks`
--
ALTER TABLE `data_penghargaan_eks`
  ADD CONSTRAINT `penghargaan_eks_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_penghargaan_in`
--
ALTER TABLE `data_penghargaan_in`
  ADD CONSTRAINT `penghargaan_in_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD CONSTRAINT `data_pribadi_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_riwayat_kerja`
--
ALTER TABLE `data_riwayat_kerja`
  ADD CONSTRAINT `riwayat_kerja_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_sanksi`
--
ALTER TABLE `data_sanksi`
  ADD CONSTRAINT `sanksi_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_sk_lain`
--
ALTER TABLE `data_sk_lain`
  ADD CONSTRAINT `sk_lain_fk` FOREIGN KEY (`nip`) REFERENCES `data_pegawai` (`nip`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
