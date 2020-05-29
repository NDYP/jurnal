-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 03:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnal`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id_agama` int(11) NOT NULL,
  `nama_agama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id_agama`, `nama_agama`) VALUES
(1, 'Kristen Protestan'),
(2, 'Islam'),
(3, 'Hindu'),
(4, 'Budha'),
(5, 'Katolik'),
(6, 'Khonghucu');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id_jk` int(11) NOT NULL,
  `nama_jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id_jk`, `nama_jk`) VALUES
(1, 'Laki-Laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id_jurnal` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_pembimbing1` varchar(128) NOT NULL,
  `id_pembimbing2` varchar(128) NOT NULL,
  `id_status_jurnal` int(11) NOT NULL,
  `judul` text NOT NULL,
  `abstrak` longtext NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` varchar(128) NOT NULL,
  `id_kategori_skripsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id_penulis`, `id_pembimbing1`, `id_pembimbing2`, `id_status_jurnal`, `judul`, `abstrak`, `tgl_upload`, `tgl_edit`, `file`, `id_kategori_skripsi`) VALUES
(53, 70, '123', '123', 6, 'xaxsx', '                                                                                                                                                                                <p>xasxsx</p>', '2020-05-06 13:56:37', '2020-05-06 21:23:32', '19_04_1014_jurnal_eproc12.pdf', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Reviewer'),
(2, 'Penulis'),
(3, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_skripsi`
--

CREATE TABLE `kategori_skripsi` (
  `id_kategori_skripsi` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori_skripsi`
--

INSERT INTO `kategori_skripsi` (`id_kategori_skripsi`, `nama_kategori`) VALUES
(5, 'XXX');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_jurnal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` longtext NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telepon` varchar(40) NOT NULL,
  `link_instagram` varchar(50) NOT NULL,
  `link_facebook` varchar(20) NOT NULL,
  `website` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `email`, `no_telepon`, `link_instagram`, `link_facebook`, `website`, `alamat`) VALUES
(1, 'jurnal.ti@it.upr.ac.id', '0536-3226487, 3230319', '-', '-', 'ti-upr.ac.id', 'Kampus Teknik Informatika UPR Tanjung Nyaho, Jalan');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id_statistik` int(30) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `os` varchar(40) NOT NULL,
  `browser` varchar(120) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id_statistik`, `ip`, `tanggal`, `os`, `browser`, `online`) VALUES
(22, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(23, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(24, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(25, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(26, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(27, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(28, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(29, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(30, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(31, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(32, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(33, '::1', '2020-04-08', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(34, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(35, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(36, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(37, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(38, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(39, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(40, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(41, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(42, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(43, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(44, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(45, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(46, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(47, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(48, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(49, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(50, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(51, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(52, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(53, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(54, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(55, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(56, '::1', '2020-04-09', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(57, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(58, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(59, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(60, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(61, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(62, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(63, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(64, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(65, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(66, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(67, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(68, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(69, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(70, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(71, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(72, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(73, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(74, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(75, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(76, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(77, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(78, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(79, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(80, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(81, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(82, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(83, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(84, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(85, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(86, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(87, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(88, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(89, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(90, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(91, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(92, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(93, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(94, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(95, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(96, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(97, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(98, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(99, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(100, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(101, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(102, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(103, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(104, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(105, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(106, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(107, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(108, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(109, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(110, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(111, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(112, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(113, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(114, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(115, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(116, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(117, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(118, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(119, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(120, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(121, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(122, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(123, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(124, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(125, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(126, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(127, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(128, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(129, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(130, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(131, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(132, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(133, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(134, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(135, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(136, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(137, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(138, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(139, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(140, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(141, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(142, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(143, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(144, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(145, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(146, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(147, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(148, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(149, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(150, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(151, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(152, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(153, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(154, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(155, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(156, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(157, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(158, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(159, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(160, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(161, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(162, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(163, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(164, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(165, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(166, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(167, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(168, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(169, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(170, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(171, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(172, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(173, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(174, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(175, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(176, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(177, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(178, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(179, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(180, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(181, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(182, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(183, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(184, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(185, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(186, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(187, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(188, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(189, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(190, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(191, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(192, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(193, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(194, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(195, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(196, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(197, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(198, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(199, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(200, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(201, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(202, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(203, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(204, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(205, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(206, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(207, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(208, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(209, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(210, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(211, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(212, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(213, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(214, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(215, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(216, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(217, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(218, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(219, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(220, '::1', '2020-04-11', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0),
(221, '::1', '2020-04-23', 'Windows 10', 'Google Chrome v.81.0.4044.113', 0),
(222, '::1', '2020-04-23', 'Windows 10', 'Google Chrome v.81.0.4044.113', 0),
(223, '::1', '2020-04-24', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(224, '::1', '2020-04-24', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(225, '::1', '2020-04-24', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(226, '::1', '2020-04-24', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(227, '::1', '2020-04-24', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(228, '::1', '2020-04-24', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(229, '::1', '2020-04-24', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(230, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(231, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(232, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(233, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(234, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(235, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(236, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(237, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(238, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(239, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(240, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(241, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(242, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(243, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(244, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(245, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(246, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(247, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(248, '::1', '2020-04-25', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(249, '::1', '2020-04-26', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(250, '::1', '2020-04-26', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(251, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(252, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(253, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(254, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(255, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(256, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(257, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(258, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(259, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(260, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(261, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(262, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(263, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(264, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(265, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(266, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(267, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(268, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(269, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(270, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(271, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(272, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(273, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(274, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(275, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(276, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(277, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(278, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(279, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(280, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(281, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(282, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(283, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(284, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(285, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(286, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(287, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(288, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(289, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(290, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(291, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(292, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(293, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(294, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(295, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(296, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(297, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(298, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(299, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(300, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(301, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(302, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(303, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(304, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(305, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(306, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(307, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(308, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(309, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(310, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(311, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(312, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(313, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(314, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(315, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(316, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(317, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(318, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(319, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(320, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(321, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(322, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(323, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(324, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(325, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(326, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(327, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(328, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(329, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(330, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(331, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(332, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(333, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(334, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(335, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(336, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(337, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(338, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(339, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(340, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(341, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(342, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(343, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(344, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(345, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(346, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(347, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(348, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(349, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(350, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(351, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(352, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(353, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(354, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(355, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(356, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(357, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(358, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(359, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(360, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(361, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(362, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(363, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(364, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(365, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(366, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(367, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(368, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(369, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(370, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(371, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(372, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(373, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(374, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(375, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(376, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(377, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(378, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(379, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(380, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(381, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(382, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(383, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(384, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(385, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(386, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(387, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(388, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(389, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(390, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(391, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(392, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(393, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(394, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(395, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(396, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(397, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(398, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(399, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(400, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(401, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(402, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(403, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(404, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(405, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(406, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(407, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(408, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(409, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(410, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(411, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(412, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(413, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(414, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(415, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(416, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(417, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(418, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(419, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(420, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(421, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(422, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(423, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(424, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(425, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(426, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(427, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(428, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(429, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(430, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(431, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(432, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(433, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(434, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(435, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(436, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(437, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(438, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(439, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(440, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(441, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(442, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(443, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(444, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(445, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(446, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(447, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(448, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(449, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(450, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(451, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(452, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(453, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(454, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(455, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(456, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(457, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(458, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(459, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(460, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(461, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(462, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(463, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(464, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(465, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(466, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(467, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(468, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(469, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(470, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(471, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(472, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(473, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(474, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(475, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(476, '::1', '2020-04-29', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(477, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(478, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(479, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(480, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(481, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(482, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(483, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(484, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(485, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(486, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(487, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(488, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(489, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(490, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(491, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(492, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(493, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(494, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(495, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(496, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(497, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(498, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(499, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(500, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(501, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(502, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(503, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(504, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(505, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(506, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(507, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(508, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(509, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(510, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(511, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(512, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(513, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(514, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(515, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(516, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(517, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(518, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(519, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(520, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(521, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(522, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(523, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(524, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(525, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(526, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(527, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(528, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(529, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(530, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(531, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(532, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(533, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(534, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(535, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(536, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(537, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(538, '::1', '2020-04-30', 'Windows 10', 'Google Chrome v.81.0.4044.122', 0),
(539, '::1', '2020-05-02', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(540, '::1', '2020-05-02', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(541, '::1', '2020-05-02', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(542, '::1', '2020-05-02', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(543, '::1', '2020-05-02', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(544, '::1', '2020-05-02', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(545, '::1', '2020-05-04', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(546, '::1', '2020-05-04', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(547, '::1', '2020-05-04', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(548, '::1', '2020-05-05', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(549, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(550, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(551, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(552, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(553, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(554, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(555, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(556, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(557, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(558, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(559, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(560, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(561, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(562, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(563, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(564, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(565, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(566, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(567, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(568, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(569, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(570, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(571, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(572, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(573, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(574, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(575, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(576, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(577, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(578, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(579, '::1', '2020-05-06', 'Windows 10', 'Google Chrome v.81.0.4044.129', 0),
(580, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(581, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(582, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(583, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(584, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(585, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(586, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(587, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(588, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(589, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(590, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(591, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(592, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(593, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(594, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(595, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(596, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(597, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(598, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(599, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(600, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(601, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(602, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(603, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(604, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(605, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(606, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(607, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(608, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(609, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(610, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(611, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(612, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(613, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(614, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(615, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(616, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(617, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(618, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(619, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(620, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(621, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(622, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(623, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(624, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(625, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(626, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(627, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(628, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(629, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(630, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(631, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(632, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(633, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(634, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(635, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(636, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(637, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(638, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(639, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(640, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(641, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(642, '::1', '2020-05-09', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(643, '::1', '2020-05-10', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(644, '::1', '2020-05-15', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(645, '::1', '2020-05-15', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
(1, 'Aktif'),
(2, 'Nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `status_jurnal`
--

CREATE TABLE `status_jurnal` (
  `id_status_jurnal` int(11) NOT NULL,
  `nama_status_jurnal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_jurnal`
--

INSERT INTO `status_jurnal` (`id_status_jurnal`, `nama_status_jurnal`) VALUES
(1, 'Belum Review'),
(2, 'Revisi Editor'),
(3, 'Revisi Penulis'),
(4, 'Tidak Publish'),
(5, 'Publish'),
(6, 'Sudah Revisi');

-- --------------------------------------------------------

--
-- Table structure for table `template_jurnal`
--

CREATE TABLE `template_jurnal` (
  `id_template_jurnal` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `isi` longtext NOT NULL,
  `foto` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `isi`, `foto`) VALUES
(2, '                                                                                                                                                                                                                                                                                                                                                                <h4 style=\"text-align: justify; margin: 0em 1em 0.5em 0em;\" times=\"\" new=\"\" roman\",=\"\" times,=\"\" georgia,=\"\" serif;=\"\" font-size:=\"\" 1.5em;=\"\" padding-top:=\"\" 0.5em;=\"\" text-transform:=\"\" uppercase;=\"\" color:=\"\" rgb(17,=\"\" 17,=\"\" 17);\"=\"\"><b><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">LATAR BELAKANG SISTEM</span></b></h4><div style=\"color: rgb(17, 17, 17); font-family: \" times=\"\" new=\"\" roman\",=\"\" times,=\"\" georgia,=\"\" serif;=\"\" font-size:=\"\" 11.2px;\"=\"\"><p style=\"text-align: justify; margin-top: 1em; margin-bottom: 1em;\"><em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">OJS merupakan sistem pengaturan dan penerbitan jurnal dan website. OJS meliputi semua aspek penerbitan jurnal online, dari pembuatan website jurnal hingga tugas operasional seperti proses penyerahan naskah penulis, peer review, pengeditan, publikasi, pengarsipan dan indeks jurnal. OJS juga membantu pengaturan aspek pengguna dalam menyusun sebuah jurnal, termasuk menyimpan jalur hasil kerja editor, reviewer, dan penulis, memberi tahu pembaca, dan bantuan menggunakan koresponden.</span></em></p><p style=\"text-align: justify; margin-top: 1em; margin-bottom: 1em;\"><em><em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">OJS merupakan sistem yang fleksibel dan dapat diukur</span></em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">. Sebuah instalasi OJS dapat mendukung pengoperasian beberapa jurnal. Setiap jurnal memiliki keunikan URL dan juga layout tersendiri. OJS bisa membuat seorang editor untuk mengatur seluruh aspek jurnal dan website jurnal, atau OJS akan mendukung tim editor internasional dengan berbagai tanggung jawab terhadap beberapa bagian jurnal.</span></em></p><p style=\"text-align: justify; margin-top: 1em; margin-bottom: 1em;\"><em><em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">OJS menganut prinsip akses berkelanjutan</span></em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">. Sistem ini tidak hanya dimaksudkan untuk membantu penerbitan jurnal, tapi untuk mendemonstrasikan bagaimana cara mengurangi biaya penerbitan jurnal pada poinnya dan menyediakan pembaca dengan \"open access\" pada isi jurnal mungkin merupakan pilihan yang tepat. Masalah bagi open access muncul secara jelas di setiap artikel berawal dari proyek ini yang bisa diakses secara bebas di bawah penerbitan website .</span></em></p><p style=\"text-align: justify; margin-top: 1em; margin-bottom: 1em;\"><em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"><br></span></em></p><h4 style=\"text-align: justify; margin: 0em 1em 0.5em 0em;\" times=\"\" new=\"\" roman\",=\"\" times,=\"\" georgia,=\"\" serif;=\"\" font-size:=\"\" 1.5em;=\"\" padding-top:=\"\" 0.5em;=\"\" text-transform:=\"\" uppercase;=\"\" color:=\"\" rgb(17,=\"\" 17,=\"\" 17);=\"\" font-style:=\"\" italic;\"=\"\"><b><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">STRUKTUR MANAJEMEN</span></b></h4><div style=\"font-size: 11.2px; font-style: italic;\"><h5 style=\"text-align: justify; margin: 0em 1em 0.25em 0em; padding-top: 0.75em; font-weight: bold; font-size: 1em; text-transform: uppercase;\"><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">PERAN user</span></h5><ul style=\"margin: 0.25em 0px 0.75em; padding: 0px 0px 0px 2.5em;\"><li style=\"text-align: justify;\"><em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Pengelola Jurnal: </span></em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Mengatur jurnal dan fungsi staf editor (bisa juga berperan sebagai editor).</span></li><li style=\"text-align: justify;\"><em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Editor: </span></em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Mengawasi proses pengeditan; bisa menugaskan naskah kepada bagian pengeditan untuk menyelesaikan tinjauan naskah; bertanggung jawab dalam pengaturan isi dan penerbitan jurnal.</span></li><li style=\"text-align: justify;\"><em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\">Editor Bagian:</span></em><span style=\"font-family: \" times=\"\" new=\"\" roman\";\"=\"\"> Mengawasi review naskah dan kemungkinan pengeditan naskah yang ditugaskan.</span></li></ul></div></div>', 'krm.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nip_nim` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `no_hp` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `tanggal_logout` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jk` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `online` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip_nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `email`, `foto`, `tanggal_logout`, `alamat`, `id_kategori`, `id_jk`, `id_agama`, `id_status`, `password`, `online`) VALUES
(45, 'reviewer', '123', '123', '2020-03-29', 123, '123', 'reviewer.png', '2020-04-29', '123', 1, 1, 1, 1, '$2y$10$5ZJYB5cPZ9MDbF4dNaF9oeaU6F71LjSR2z3vQETwiosyTJQ9n1BTa', 0),
(70, 'penulis', '123', '123', '2020-04-22', 123, '123', NULL, '2020-05-06', '123', 2, 1, 1, 1, '111', 0),
(79, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-05-06', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(80, 'penulis', '123', '123', '2020-04-22', 123, '123', NULL, '2020-04-22', '123', 2, 1, 1, 1, '777777', 0),
(81, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(83, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(84, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(85, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(86, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(87, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(88, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(89, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(90, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(91, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1),
(92, 'editor', 'editor', 'editor', '2020-04-22', 2342343, 'asdasdasd', NULL, '2020-04-30', 'editor', 3, 1, 1, 1, '$2y$10$t1hPACE56Q8xQMV5B1GGOevRfXkmgUdkH0z7kAzNkn92WrzpPDBxW', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id_jk`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id_jurnal`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_status_jurnal` (`id_status_jurnal`),
  ADD KEY `id_pembimbing1` (`id_pembimbing1`),
  ADD KEY `id_pembimbing2` (`id_pembimbing2`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_skripsi`
--
ALTER TABLE `kategori_skripsi`
  ADD PRIMARY KEY (`id_kategori_skripsi`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_jurnal` (`id_jurnal`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id_statistik`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `status_jurnal`
--
ALTER TABLE `status_jurnal`
  ADD PRIMARY KEY (`id_status_jurnal`);

--
-- Indexes for table `template_jurnal`
--
ALTER TABLE `template_jurnal`
  ADD PRIMARY KEY (`id_template_jurnal`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_jk` (`id_jk`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_status` (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_skripsi`
--
ALTER TABLE `kategori_skripsi`
  MODIFY `id_kategori_skripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=646;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status_jurnal`
--
ALTER TABLE `status_jurnal`
  MODIFY `id_status_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `template_jurnal`
--
ALTER TABLE `template_jurnal`
  MODIFY `id_template_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`id_status_jurnal`) REFERENCES `status_jurnal` (`id_status_jurnal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_ibfk_2` FOREIGN KEY (`id_jurnal`) REFERENCES `jurnal` (`id_jurnal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_jk`) REFERENCES `jenis_kelamin` (`id_jk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id_agama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_4` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
