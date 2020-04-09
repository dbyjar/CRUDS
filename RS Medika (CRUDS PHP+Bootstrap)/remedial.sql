-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Agu 2019 pada 13.30
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `remedial`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_kunjungan`
--

CREATE TABLE IF NOT EXISTS `daftar_kunjungan` (
  `no_tamu` int(11) NOT NULL,
  `tanggal_tamu` date NOT NULL,
  `keterangan` text NOT NULL,
  `kode_pasien` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `daftar_kunjungan`
--

INSERT INTO `daftar_kunjungan` (`no_tamu`, `tanggal_tamu`, `keterangan`, `kode_pasien`) VALUES
(2111, '2019-07-31', 'Berobat Suami', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dokter`
--

CREATE TABLE IF NOT EXISTS `data_dokter` (
  `kode_dokter` int(10) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_dokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `data_dokter`
--

INSERT INTO `data_dokter` (`kode_dokter`, `nama_dokter`, `alamat`, `no_hp`) VALUES
(7, 'Heru Triyanto', 'Jl. Taman Tekno', '089436475353'),
(8, 'Avengers', 'Amrik', '09708708'),
(9, 'Dokter 1', 'Jl. xxx', '0876876987');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pasien`
--

CREATE TABLE IF NOT EXISTS `data_pasien` (
  `kode_pasien` int(10) NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  PRIMARY KEY (`kode_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `data_pasien`
--

INSERT INTO `data_pasien` (`kode_pasien`, `nama_pasien`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `no_hp`) VALUES
(2, 'Heru', 'Tegal', '1996-01-31', 'Jl. Taman Tekno', '084898524643'),
(3, 'Dalih', 'Jonggol', '2019-07-18', 'Jl. Gatau Asalnya', '0848985289854'),
(4, 'Agu', 'Tegalan', '2019-07-18', 'Jl. Malahan', '084898523425');

-- --------------------------------------------------------

--
-- Struktur dari tabel `root`
--

CREATE TABLE IF NOT EXISTS `root` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `role` enum('Admin','Owner') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `root`
--

INSERT INTO `root` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Admin'),
(2, 'owner', '579233b2c479241523cba5e3af55d0f50f2d6414', 'Owner'),
(3, 'admin', 'admin', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `no_tamu` int(15) NOT NULL,
  PRIMARY KEY (`no_tamu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_reka_medis`
--

CREATE TABLE IF NOT EXISTS `transaksi_reka_medis` (
  `tanggal` date NOT NULL,
  `diagnosa` varchar(50) NOT NULL,
  `obat` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `kode_dokter` int(30) NOT NULL,
  `kode_pasien` int(30) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `transaksi_reka_medis`
--

INSERT INTO `transaksi_reka_medis` (`tanggal`, `diagnosa`, `obat`, `keterangan`, `kode_dokter`, `kode_pasien`) VALUES
('2019-07-31', 'Lumpuh', 'Pil Koplo', 'Bahaya', 2, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
