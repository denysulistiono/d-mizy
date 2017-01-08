-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 06, 2017 at 03:45 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `048`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
--

CREATE TABLE IF NOT EXISTS `mobil` (
  `kode_mobil` varchar(5) NOT NULL DEFAULT '',
  `merk` varchar(30) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `warna` varchar(30) DEFAULT NULL,
  `harga_mobil` int(15) DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`kode_mobil`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`kode_mobil`, `merk`, `type`, `warna`, `harga_mobil`, `gambar`, `contact`) VALUES
('M0002', 'Honda Jazz', 'Matic', 'Biru', 150000000, 'jazz01.jpg', '082345678910'),
('M0001', 'Honda Civic', 'Hybrid', 'Biru', 250000000, '2010-honda-civic-hybrid-4-door-sedan-l4-cvt-angular-front-exterior-view_100301135_m.jpg', '081333324567'),
('M0003', 'Honda Brio', 'Sporty', 'Merah', 350000000, 'mobil_dijual_honda_brio_ckd_1_2_type_e_ready_stock_2014_2014_6500134417503454954.jpg', '085345678910');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `KTP` varchar(16) NOT NULL,
  `nama_pembeli` varchar(30) DEFAULT NULL,
  `alamat_pembeli` varchar(50) DEFAULT NULL,
  `telp_pembeli` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`KTP`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`KTP`, `nama_pembeli`, `alamat_pembeli`, `telp_pembeli`) VALUES
('2891892011290002', 'M. Rizki', 'jl. gebang 8', '082139312112'),
('3929091298120005', 'Ade Rizki', 'jl. Semeru 8', '082123194151'),
('3782092830150005', 'Ilham riyansah', 'jl. tegal besar 10', '089123120293'),
('3798419031920006', 'Trisatyo B.', 'jl. rayaraya 18', '081231929136'),
('E31150743', 'M Zakaria', 'Rambigundam', '089681393979'),
('E31151058', 'Deny Sulistiono', 'Umbul Sari', '085555335533');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
