-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 11:44 AM
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
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id_penulis`, `id_pembimbing1`, `id_pembimbing2`, `id_status_jurnal`, `judul`, `abstrak`, `tgl_upload`, `tgl_edit`, `file`) VALUES
(40, 70, '123', '123', 2, 'xxxx', '<p>xxxx</p>', '2020-04-03 22:26:40', '2020-04-06 10:01:38', 'penulis4.pdf'),
(41, 70, '123', '123', 2, 'xxxx', '<p>xxxx</p>', '2020-04-03 22:26:40', '2020-04-06 10:01:38', 'penulis4.pdf'),
(42, 70, '123', '123', 2, 'xxxx', '<p>xxxx</p>', '2020-04-03 22:26:40', '2020-04-06 10:01:38', 'penulis4.pdf'),
(43, 70, '123', '123', 2, 'xxxx', '<p>xxxx</p>', '2020-04-03 22:26:40', '2020-04-06 10:01:38', 'penulis4.pdf'),
(44, 70, '123', '123', 2, 'xxxx', '<p>xxxx</p>', '2020-04-03 22:26:40', '2020-04-06 10:01:38', 'penulis4.pdf'),
(45, 70, '123', '123', 2, 'xxxx', '<p>xxxx</p>', '2020-04-03 22:26:40', '2020-04-06 10:01:38', 'penulis4.pdf'),
(46, 70, '123', '123', 2, 'xxxx', '<p>xxxx</p>', '2020-04-03 22:26:40', '2020-04-06 10:01:38', 'penulis4.pdf'),
(47, 70, '123', '123', 2, 'xxxx', '<p>xxxx</p>', '2020-04-03 22:26:40', '2020-04-06 10:01:38', 'penulis4.pdf'),
(48, 44, '123', '123', 1, 'qweqwe', 'qweqweqwe', '2020-04-08 07:46:21', '2020-04-08 00:46:21', 'editor.pdf');

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
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_jurnal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `komentar` longtext NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_jurnal`, `id_user`, `komentar`, `tanggal`) VALUES
(25, 40, 45, '123', '2020-04-06 16:38:59'),
(26, 40, 45, '123', '2020-04-06 16:39:05');

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
(92, '::1', '2020-04-10', 'Windows 10', 'Google Chrome v.80.0.3987.163', 0);

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
  `password` varchar(128) NOT NULL,
  `online` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip_nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `email`, `foto`, `tanggal_logout`, `alamat`, `id_kategori`, `id_jk`, `id_agama`, `id_status`, `password`, `online`) VALUES
(44, 'editor', 'xxx', '123', '2020-03-16', 34534534, 'harajuku777.ac@gmail.com', 'editor.jpg', '2020-04-10', 'jl. B.kaminting', 3, 1, 1, 1, '$2y$10$1WLppHhhR6eepdMhPUr2CefBlQTH2oeZ5MjuE7nyIBZfMNe9J4XMG', 0),
(45, 'reviewer', '123', '123', '2020-03-29', 123, '123', 'reviewer.png', '2020-04-10', '123', 1, 1, 1, 1, '$2y$10$mMpArHsbjwn7w2wyZcs/Les8wFFx99YtTWChuNR3TiR4VmVmYrCMC', 0),
(70, 'penulis', '123', '123', '2020-04-22', 123, '123', NULL, '2020-04-10', '123', 2, 1, 1, 1, '$2y$10$ltRl2nnctLt4GYaUScz51.FsDARtg4oUxQnBFwOf7DFWcVrC80UV6', 1);

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
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `id_jurnal` (`id_jurnal`),
  ADD KEY `id_user` (`id_user`);

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
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

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
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
