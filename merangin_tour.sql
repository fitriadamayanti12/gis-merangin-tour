-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2017 at 08:48 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `merangin_tour`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `judul1` varchar(50) NOT NULL,
  `about` text NOT NULL,
  `judul2` varchar(50) NOT NULL,
  `akomodasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`judul1`, `about`, `judul2`, `akomodasi`) VALUES
('About Us', 'Sektor wisata di Kabupaten Merangin hingga saat ini, potensi kepariwisataan di kabupaten merangin telah dilakukan inventaris. Keanekaragaman potensi kepariwisataan di Kabupten Merangin diantaranya objek dan daya tarik Wisata alam Buatan (seperti Jam Gento, Arboretum Rio Alip, Bukit Tiung, Sungai Misang Indah, Ujung Tanjung Tanjung Muara Mesumai, Teluk Wang Sakti ); Objek wisata alam ( seperti  air terjun, goa, geopark, danau dan lainnya ); dan  Objek dan daya tarik Wisata Budaya ( seperti Rumah Tuo, Batu   Larung, Batu Bertulis, Rumah Adat dan pusaka lainnya ). ', 'Akomodasi dan Transportasi Kabupaten Merangin', 'Jalan merupakan prasarana untuk memperlancar kegiatan perekonomian, meningkatkan usaha pembangunan. peningkatan pembangunan jalan dapat memudahkan mobilitas penduduk dan memperlancar perdagangan antar daerah. Panjang jalan di Kabupaten Merangin pada tahun 2009 adalah 1.341,71 km, terdiri dari jalan baik 220,67 km, jalan sedang 405,37 km, jalan rusak 520,02 km dan jalan rusak berat 195,70 km.');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(3, '', '', '', '', ''),
(4, '', '', '', '', ''),
(5, '', '', '', '', ''),
(6, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tourism`
--

CREATE TABLE IF NOT EXISTS `tourism` (
  `id` int(10) NOT NULL,
  `paket` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourism`
--

INSERT INTO `tourism` (`id`, `paket`, `keterangan`, `waktu`) VALUES
(1, 'Paket 1(Tour 1 Hari)', 'Geopark dan Taman Buaya Arboretum', '2017-06-05 16:28:54'),
(2, 'Paket 1(Tour 1 Hari)', 'Geopark dan Taman Buaya Arboretum', '2017-06-05 16:38:19'),
(3, 'Paket 2(Tour 2 Hari)', 'Geopark, Taman Buaya Arboretum, Air Terjun Merangin dan Teluk Wang', '2017-06-05 16:39:09'),
(4, 'Paket 1(Tour 1 Hari)', 'Geopark dan Taman Buaya Arboretum', '2017-06-05 16:39:38'),
(5, 'Paket 3(Tour 3 Hari)', 'Geopark, Taman Buaya Arboretum, Air Terjun Merangin, Teluk Wang, \r\n						  Goa Sengayau dan Goa Tiangko', '2017-06-05 16:39:43'),
(6, 'Paket 2(Tour 2 Hari)', 'Geopark, Taman Buaya Arboretum, Air Terjun Merangin dan Teluk Wang', '2017-06-05 16:46:47'),
(7, 'Paket 5(Tour 5 Hari)', 'Geopark, Taman Buaya Arboretum, Air Terjun Merangin, Teluk Wang, \r\n						  Goa Sengayau, Goa Tiangko, Dam Bentuk, Danau Pauh, Air Terjun Sigerincing dan Air Terjun Perentak', '2017-06-06 00:09:33'),
(8, 'Paket 2(Tour 2 Hari)', 'Geopark, Green Kandis, Jam Gento dan Bukit Tiung', '2017-06-06 06:44:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tourism`
--
ALTER TABLE `tourism`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tourism`
--
ALTER TABLE `tourism`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
