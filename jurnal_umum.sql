-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2016 at 11:46 AM
-- Server version: 5.5.41
-- PHP Version: 5.4.37-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `latihan_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurnal_umum`
--

CREATE TABLE IF NOT EXISTS `jurnal_umum` (
  `id_transaksi` char(36) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `ket_transaksi` varchar(200) NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `saldo_normal` enum('D','K') NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurnal_umum`
--

INSERT INTO `jurnal_umum` (`id_transaksi`, `tgl_transaksi`, `ket_transaksi`, `jumlah_transaksi`, `saldo_normal`) VALUES
('087c4d7e-b2b3-11e5-a451-485b39f33eeb', '2016-01-01', 'Saldo Awal', 25000000, 'D'),
('1d5392cc-b426-11e5-b52a-485b39f33eeb', '2016-01-10', 'Pembelian BBM', 250000, 'K'),
('37ef7fba-b2b3-11e5-a451-485b39f33eeb', '2016-01-02', 'Pembayaran Listrik PLN', 500000, 'K'),
('37efb248-b2b3-11e5-a451-485b39f33eeb', '2016-01-02', 'Pembayaran PDAM', 300000, 'K'),
('49a009d2-b2b3-11e5-a451-485b39f33eeb', '2016-01-04', 'Pembayaran Telpon dan Internet', 2000000, 'K'),
('61980251-b2b3-11e5-a451-485b39f33eeb', '2016-01-05', 'Penerimaan Pembayaran dari Pelanggan (Tn. Agus)', 3000000, 'D'),
('9fd62d56-b426-11e5-b52a-485b39f33eeb', '2016-01-12', 'Penerimaan dari Pelanggan Tn. Budi', 1500000, 'D'),
('bea74121-b426-11e5-b52a-485b39f33eeb', '2016-01-13', 'Penerimaan dari Pelanggan Tn. Ali', 2000000, 'D'),
('f3f92121-b426-11e5-b52a-485b39f33eeb', '2016-01-10', 'Biaya Penyusutan Mesin Cetak', 750000, 'K');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
