-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 04:33 PM
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
  `tgl_upload` int(11) NOT NULL,
  `tgl_edit` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `file` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id_penulis`, `id_pembimbing1`, `id_pembimbing2`, `id_status_jurnal`, `judul`, `abstrak`, `tgl_upload`, `tgl_edit`, `file`) VALUES
(23, 26, 'aku', 'abertun', 6, '123', '                                                                                                                                    <p>123123123</p>', 1584785580, '0000-00-00 00:00:00', '36-52-1-SM.pdf'),
(24, 34, 'abertun', 'abertun', 2, 'sasas', '<p>asxasxasxasxasxasxasxasxasxsa</p>', 1584805478, '2020-03-25 07:31:35', 'dbc1160391.pdf'),
(25, 1, 'reviewer', 'reviewer', 1, 'rancang', '<p>asdasdasd</p>', 1585218058, '2020-03-26 10:20:58', 'penulis.pdf');

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
  `tanggal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_jurnal`, `id_user`, `komentar`, `tanggal`) VALUES
(15, 24, 30, '123', 1584805511),
(16, 23, 30, 'cccc', 1585054677);

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
  `tanggal_regis` int(11) NOT NULL,
  `tanggal_logout` date NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jk` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nip_nim`, `nama`, `tempat_lahir`, `tgl_lahir`, `no_hp`, `email`, `foto`, `tanggal_regis`, `tanggal_logout`, `alamat`, `id_kategori`, `id_jk`, `id_agama`, `id_status`, `password`) VALUES
(1, 'penulis', 'YULIA', 'TIMPAH', '1997-09-25', 777777, 'Yuliapransiska85@gmail.com', NULL, 0, '0000-00-00', 'hhhhhh', 2, 2, 1, 1, '$2y$10$6VfKII.Ln0EG9V4zBiYge.NDSkBt4EO1vjyxUB1v7dsCwCZqK7C7G'),
(30, 'reviewer', 'reviewer', '123', '2020-03-24', 45645645, 'harajuku777.ac@gmail.com', NULL, 1584419860, '0000-00-00', 'jl. B.kaminting', 1, 1, 1, 1, '$2y$10$YMf85uI40YOmF2IlCMaWr.eisOvXG3GeECREjVM779JBcl54re/hO'),
(42, 'editor', 'editor', 'mllmm', '2020-03-24', 34534534, 'harajuku777.ac@gmail.com', NULL, 1584762981, '0000-00-00', 'sdfsdf', 3, 1, 3, 1, '$2y$10$qPL/PjWm.8YIFbMWxd7fCuSXNt5XxtrPLejkRW8Kr5PjPAc.T9lJS');

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
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
