-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Jun 2019 pada 13.14
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_bunga`
--

CREATE TABLE IF NOT EXISTS `daftar_bunga` (
  `id_bunga` int(10) NOT NULL AUTO_INCREMENT,
  `nama_bunga` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `status` enum('iya','ga') NOT NULL,
  PRIMARY KEY (`id_bunga`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `daftar_bunga`
--

INSERT INTO `daftar_bunga` (`id_bunga`, `nama_bunga`, `harga`, `stok`, `status`) VALUES
(2, 'Bangke', '500000', '15', 'iya'),
(3, 'Raflesia', '900000', '30', 'iya'),
(6, 'jnkj', 'hjnij', 'njui', 'ga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data01`
--

CREATE TABLE IF NOT EXISTS `data01` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `data01`
--

INSERT INTO `data01` (`id`, `nim`, `nama`) VALUES
(3, '2016142116', 'Fajar Al Hakim'),
(10, '2016142117', 'iqbaL');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE IF NOT EXISTS `pesanan` (
  `id_pesan` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jml_beli` varchar(50) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL,
  `bayar` varchar(100) NOT NULL,
  `diskon` varchar(100) NOT NULL,
  `ongkir` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
