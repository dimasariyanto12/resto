-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2020 at 09:15 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `up_dimas`
--

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE IF NOT EXISTS `level` (
`level_id` int(11) NOT NULL,
  `level_nama` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_nama`) VALUES
(1, 'admin'),
(2, 'kasir'),
(3, 'waiter'),
(4, 'owner'),
(5, 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `masakan`
--

CREATE TABLE IF NOT EXISTS `masakan` (
`masakan_id` int(11) NOT NULL,
  `masakan_nama` varchar(50) NOT NULL,
  `masakan_harga` varchar(50) NOT NULL,
  `masakan_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `masakan`
--

INSERT INTO `masakan` (`masakan_id`, `masakan_nama`, `masakan_harga`, `masakan_status`) VALUES
(1, 'bakso', '2000', 1),
(2, 'mie ayam', '2000', 1),
(3, 'mie ayam', '5000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`order_id` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `order_tanggal` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_keterangan` text NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `no_meja`, `order_tanggal`, `user_id`, `order_keterangan`, `order_status`) VALUES
(1, 1, '2020-03-03', 1, 'Pesan Cepat', 1),
(2, 2, '2003-03-20', 2, 'teh nya jangan manis manis soalnya kamu udah manis eyaa', 0),
(3, 5, '2003-03-20', 2, 'es teh gak pake gula', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
`od_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `masakan_id` int(11) NOT NULL,
  `od_keterangan` text NOT NULL,
  `od_status` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`od_id`, `order_id`, `masakan_id`, `od_keterangan`, `od_status`) VALUES
(1, 2, 3, 'Es teh gula sedikit', 1),
(2, 3, 1, 'es teh gula sedikit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
`transaksi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `transaksi_tanggal` date NOT NULL,
  `transaksi_total_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(11) NOT NULL,
  `user_nama` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `level_id` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_nama`, `user_username`, `user_password`, `level_id`) VALUES
(1, 'Dimas', 'dimas', 'dimas', 1),
(2, 'admin', 'admin', 'admin', 1),
(3, 'kasir', 'kasir', '2', 2),
(4, 'waiter', 'waiter', 'waiter', 3),
(5, 'owner', 'owner', 'owner', 4),
(6, 'pelanggan', 'pelanggan', 'pelanggan', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level`
--
ALTER TABLE `level`
 ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `masakan`
--
ALTER TABLE `masakan`
 ADD PRIMARY KEY (`masakan_id`), ADD KEY `masakan_status` (`masakan_status`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`order_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
 ADD PRIMARY KEY (`od_id`), ADD KEY `masakan_id` (`masakan_id`,`od_status`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
 ADD PRIMARY KEY (`transaksi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `masakan`
--
ALTER TABLE `masakan`
MODIFY `masakan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
MODIFY `od_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
MODIFY `transaksi_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
