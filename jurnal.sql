-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2020 at 02:33 PM
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
(6, 'Khonghucu'),
(9, '-');

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
  `id_kategori_skripsi` int(11) NOT NULL,
  `no_seri` varchar(128) NOT NULL,
  `id_status_jurnal1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id_jurnal`, `id_penulis`, `id_pembimbing1`, `id_pembimbing2`, `id_status_jurnal`, `judul`, `abstrak`, `tgl_upload`, `tgl_edit`, `file`, `id_kategori_skripsi`, `no_seri`, `id_status_jurnal1`) VALUES
(55, 115, 'Widiatry,ST., MT', 'Enny Dwi Oktaviyani,ST.,M.Kom.', 6, 'SISTEM INFORMASI KURSUS MUSIK LEGATO BERBASIS WEB', '                                            <p>Musik adalah salah satu kebutuhan dalam kehidupan manusia. Seiring dengan perkembangan dunia hiburan, terutama dalam musik, banyak kursus telah menerapkan kemajuan teknologi, terutama situs web dalam upaya untuk mendukung promosi dan informasi yang berkaitan dengan kursus. Prosedur dalam pendaftaran, pengumpulan data, penjadwalan, penilaian, dan pembuatan laporan masih dilakukan secara manual. Sehingga semua data masih dibuat secara manual dan tidak memiliki output dalam bentuk laporan. Oleh karena itu, penelitian ini dilakukan dengan tujuan untuk menciptakan Sistem Informasi Berbasis Web untuk Kursus Musik Legato. Untuk mendukung pembuatan sistem ini, dalam penelitian menggunakan metode pengumpulan data dengan melakukan wawancara, studi literatur, dan konsultasi. Metodologi yang digunakan dalam pembuatan situs web ini adalah air terjun yang merupakan definisi kebutuhan, desain sistem dan perangkat lunak, implementasi dan pengujian unit, serta integrasi dan pengujian sistem. Desain menggunakan DFD (Data Flow Diagram) dan desain basis data menggunakan ERD (Enity Relationship Diagram), pengkodean menggunakan PHP dan MYSQL untuk basis data dan pengujian menggunakan blackbox. Pengujian BlackBox berfokus pada spesifikasi fungsional program. Hasil yang diperoleh dari penelitian ini adalah Sistem Informasi Kursus Musik Legato di mana sistem ini dapat mendukung kinerja yang baik dalam hal pendaftaran kursus, pengumpulan data, penjadwalan kursus, penilaian, dan laporan tentang kursus itu sendiri. Namun, aplikasi ini masih memiliki kekurangan, perlu perbaikan, penambahan dan pengembangan agar menjadi aplikasi yang lebih sempurna.<br></p>', '2020-04-14 19:01:07', '2020-07-17 08:44:06', 'DBC_115_020.pdf', 14, 'sJYDyq+pCw==', 6),
(56, 123, 'Widiatry,ST., MT', 'Ariesta Lestari, S. Kom.,M.Cs., Ph.D', 6, 'SISTEM INFORMASI KEPEGAWAIAN PADA UNIT PELAYANAN TEKNIS KESATUAN PENGELOLAAN HUTAN PRODUKSI KAPUAS TENGAH UNIT XI BERBASIS WEBSITE', '                                            <p style=\"text-align: justify; \">Sistem Informasi Personil adalah sistem yang mampu memberikan informasi tentang data karyawan di perusahaan atau agensi penghubung untuk mencapai tujuan yang telah ditargetkan. Di UPT-KPHP Kapuas Tengah Unit XI dalam menjalankan tugasnya masih belum menerapkan sistem informasi untuk memfasilitasi pemrosesan data kepegawaian, pemrosesan daftar Kepangkatan, petugas pengolah sasaran kerja (SKP), Petugas penjajakan kerja pengolahan (PKP), serta promosi untuk posisi struktural. Hal ini menimbulkan beberapa masalah bagi UPT-KPHP Kapuas pusat Unit XI seperti menyimpan informasi dalam bentuk kaset di atas kertas, pencarian file yang disimpan di rak file, kerusakan atau kehilangan arsip, dan sarana penyimpanan Arsip. Dengan demikian, penyelesaian masalah ini adalah pembangunan sistem informasi ketenagakerjaan berbasis situs untuk UPT-KPHP Kapuas Tengah Unit XI. Sistem informasi kepegawaian dirancang dan dibangun metodologi air terjun menurut Ian Sommerville. Tahapan tersebut adalah Definisi Kebutuhan, Desain Sistem dan Perangkat Lunak, Implementasi dan Pengujian Unit, Integrasi dan Pengujian Sistem, Operasi dan Pemeliharaan. Pada tahap Definisi Kebutuhan dilakukan membuat diagram alur. Pada tahap Perancangan Sistem dan Perangkat Lunak dilakukan pembuatan Data Flow Diagram (DFD) dan Entity Relational Diagram (ERD). Metode pengujian yang digunakan oleh situs web ini adalah metode Blackbox. Sistem informasi kepegawaian ini dapat digunakan untuk memfasilitasi pembuatan SKP dan PKP oleh karyawan dan pimpinan, mengajukan proposal untuk jabatan struktural, menyusun Daftar Peringkat Keberangkatan, dan membantu staf administrasi untuk mengelola data Personil.<br></p>', '2020-05-28 19:27:28', '2020-07-17 08:43:58', 'DBC_115_044.pdf', 8, 'hA5NcDdyXQ==', 6),
(57, 117, 'Abertun Sagit Sahay,ST., M.Eng.', 'Abertun Sagit Sahay,ST., M.Eng.', 2, 'RANCANG BANGUN APLIKASI MOBILE PEMESANAN MAKANAN DAN MINUMAN PADA CAFE', '                                            <p style=\"text-align: justify; \">Café (Kafe) adalah tempat untuk bersantai dan bercakap-cakap di mana pengunjung dapat memesan minuman dan makanan. Jenis kafe restoran, tetapi lebih suka suasana santai, hiburan dan kenyamanan pengunjung sehingga menyediakan tempat duduk dan musik yang nyaman. Istilah cafe berasal dari bahasa Perancis yang berarti kopi (minum) tetapi digunakan sebagai nama tempat orang berkumpul atau bersantai untuk bersantai setelah sehari sambil minum kopi. Seiring dengan perkembangannya, Cafe tidak hanya menyediakan kopi tetapi juga minuman lain serta makanan ringan. Sama halnya dengan restoran, kafe biasanya menggunakan pelayan (pelayan) untuk mencatat pesanan pelanggan. Aplikasi pemesanan makanan dan minuman di kafe adalah aplikasi mobile yang memudahkan pelanggan memesan makanan di kafe. dalam aplikasi ini, ada daftar makanan dan minuman beserta harganya. Dalam pengembangan pembuatan aplikasi ini, menggunakan metodologi pengembangan Air Terjun. Tahapan dilalui dalam metode ini termasuk analisis, desain, implementasi, dan juga pengujian. Dalam pembuatannya menggunakan bahasa pemrograman JAVA Android studio. Sedangkan pada tahap desain menggunakan UML. Dilakukan pengujian BlackBox untuk mengetahui hasil aplikasi. Di mana pengguna diminta untuk melakukan pendaftaran, masuk pada aplikasi, dan memesan. Aplikasi ini diharapkan memudahkan pemesanan di kafe.<br></p>', '2020-05-28 19:37:22', '2020-07-17 08:42:06', 'DBC_112_035.pdf', 16, 'PEBYEzdwwA==', 2),
(58, 124, 'Agus Sehatman Saragih, ST., M.Eng.', 'Nova Noor Kamala Sari, ST., M.Kom.', 6, 'APLIKASI PENCARIAN KOS DI PALANGKA RAYA', '                                            <p style=\"text-align: justify; \">Bagi para pendatang atau yang merantau untuk sekedar mencari pekerjaan ataupun untuk menempuh Pendidikan di kota Palangka Raya proses pencarian kos bagi para pendatang ataupun yang merantau di kota Palangka Raya pasti bingung dalam mencari kos yang diinginkan karena tidak tahu wilayah kota Palangka Raya. Berdasarkan permasalahan solusi yang ditawarkan dengan memanfaatkan sebuah aplikasi yang dapat diakses oleh pencari kos untuk mencari kos yang ideal dengan harga yang sesuai. Dan juga dengan adanya sistem ini dapat memberikan informasi pemilik kos dalam mempromosikan rumah kosnya melalui aplikasi tersebut.</p><p style=\"text-align: justify; \">Proses analisis sistem lama dilakukan menggunakan flowchart. pengembangan aplikasi ini adalah dengan menggunakan metode Waterfall oleh Ian Summerville yang memiliki 5 tahapan yaitu, Requirement Analisys and Definition, System and Software Design, Implementation and Unit Testing, Integration and System Testing, dan Operation and Maintanance. Pembuatan apikasi ini adalah dengan menggunakan bahasa pemprograman PHP, CSS dan Javascript sedangkan basis data menggunakan MySQL.</p><p style=\"text-align: justify; \">Uji coba aplikasi ini menggunakan blackbox testing yang digunakan untuk menunjukkan bahwa Aplikasi Pencarian Kost Di Palangka Raya yang dibuat telah berfungsi sesuai dengan perancangan. Hasil penelitian ini ini adalah sistem informasi pencarian kos di kota Palangka Raya dimana terdapat website dan juga aplikasi android.</p>', '2020-05-28 19:41:28', '2020-07-17 08:43:48', 'DBC_113_1021.pdf', 8, 'VUpFJTZQ9w==', 6),
(59, 121, 'Viktor Handrianus Pranatawijaya,ST., MT.', 'Widiatry,ST., MT', 6, 'APLIKASI SHARING DESAIN INTERIOR DAN EXTERIOR MENERAPKAN AUGMENTED REALITY PADA SOSIAL MEDIA', '                                            <p style=\"text-align: justify; \">Desain interior dan eksterior atau biasa disebut perancangan dalam ruangan maupun luar ruangan desain pada dasarnya bertujuan untuk menciptakan sebuah lingkungan atau ruangan beserta dengan elemen-elemen yang ada didalamnya. bagaimana membuat aplikasi sharing desain interior dan exterior menerapkan augmented reality pada sosial media, objek perabotan yang akan digunakan untuk melakukan desain berupa objek 3D, melakukan share hasil desain dekorasi berupa file foto dan dapat di lihat pengguna lain.</p><p style=\"text-align: justify; \">SLAM AR (simultaneous localization & mapping) Augmented Reality adalah teknologi yang digunakan dalam teknologi visi komputer yang mendapatkan data visual dari dunia fisik dalam bentuk titik untuk membuat pemahaman untuk mesin, SLAM memungkinkan mesin untuk memiliki mata dan memahami apa yang ada di sekitar mereka melalui input visual, dalam pembuatan dan pengembangan nya aplikasi ini menggunakan Unity3D, Wikitude, Photoshop dan Blender3D. dalam hal ini metode yang digunakan yaitu SLAM AR (simultaneous localization & mapping) Augmented Reality yang merupakan metode Maping pada suatu bidang datar.</p><p style=\"text-align: justify; \">Dari hasil pengujian menggunakan metode pengujian black-box yang dilakukan, diketahui aplikasi telah berjalan sesuai dengan yang diharapkan. aplikasi Desain Interior Dan Eksterior dibuat sebagai media dalam menyusun perabotan atau furniture pada sebuah ruangan atau bidang datar dalam bentuk Objek 3D. Ketika akan melakukan desain ruangan terlebih dahulu pengguna melakukan maping ruangan kemudian meletakan objek 3D. setelah objek diletakan pengguna kemudian bisa melakukan share ke media Sosial dalam bentuk screenshoot gambar.<br></p>', '2020-05-28 19:45:28', '2020-07-17 08:43:36', 'DBC_114_008.pdf', 14, 'zR2FnYoHvA==', 6),
(60, 119, 'Agus Sehatman Saragih, ST., M.Eng.', 'Sherly Christina,S.Kom.,M.Kom.', 6, 'PERANCANG BANGUN ALAT MONITORING AIR LAYAK KONSUMSI MENGGUNAKAN SENSOR PH AIR DAN SENSOR NTU BERBASIS ARDUINO (STUDI KASUS : DEPOT ISI ULANG AIR MINUM CINJEA)', '                                            <p style=\"text-align: justify;\"><span style=\"font-family: \"Times New Roman\";\">Pemanfaatan air sebagai kebutuhan primer menjadikan air paling tinggi </span><span style=\"font-family: \"Times New Roman\";\">tingkat kebutuhan. Air yang dibutuhkan tentu saja adalah air bersih dan sehat </span><span style=\"font-family: \"Times New Roman\";\">yang telah ditetapkan sebagai layak untuk dikonsumsi. Air yang bisa dikonsumsi </span><span style=\"font-family: \"Times New Roman\";\">harus memenuhi persyaratan fisik, air harus jernih atau tidak keruh. </span><span style=\"font-family: \"Times New Roman\";\">Air yang baik juga harus memenuhi standar keasaman netral (pH) sekitar </span><span style=\"font-family: \"Times New Roman\";\">6,5 - 8,5 tingkat pH netral untuk air minum adalah 7, jika kita minum air dengan </span><span style=\"font-family: \"Times New Roman\";\">pH di bawah 6,5 itu adalah air asam, dan itu tidak baik bagi manusia </span><span style=\"font-family: \"Times New Roman\";\">tubuh. </span><span style=\"font-family: \"Times New Roman\";\">Untuk mengetahui air yang bisa dikonsumsi dan memenuhi pH yang baik </span><span style=\"font-family: \"Times New Roman\";\">standar untuk konsumsi, perangkat dibangun menggunakan sensor pH air, </span><span style=\"font-family: \"Times New Roman\";\">Sensor kekeruhan dan mikrokontroler Arduino. Alat itu dibangun </span><span style=\"font-family: \"Times New Roman\";\">menggunakan 4 tahap, yaitu, Fase Desain, Fase Perakitan, Pengkodean / </span><span style=\"font-family: \"Times New Roman\";\">Fase Pemesanan dan Pengujian. </span><span style=\"font-family: \"Times New Roman\";\">Hasil pengujian sampel air di minum Cinjea</span><span style=\"font-family: \"Times New Roman\";\">depot isi ulang air memenuhi standar kualitas air yang sesuai untuk </span><span style=\"font-family: \"Times New Roman\";\">konsumsi di atas pH 7, dan hasil tes sensor Ntu diperoleh </span><span style=\"font-family: \"Times New Roman\";\">normal.</span></p>', '2020-05-28 19:52:49', '2020-07-17 08:43:26', 'DBC_112_110.pdf', 11, 'qhrI80+jfw==', 6),
(61, 120, 'Abertun Sagit Sahay,ST., M.Eng.', 'Abertun Sagit Sahay,ST., M.Eng.', 6, 'SISTEM PAKAR MENDETEKSI KERUSAKAN PRINTER MENGGUNAKAN METODE CERTAINTY FACTOR', '                                            <p style=\"text-align: justify;\">Printer merupakan kebutuhan pokok dalam menunjang aktivitas harian beberapa bidang usaha yaitu percetakan, desain, kantoran dan lain-lain. Oleh karena itu, kerusakan printer yang sering dialami oleh pengguna sangatlah menghambat kelancaran pekerjaan mereka. Kerusakan-kerusakan tersebut perlu penanganan yang tepat dan benar, sehingga jika tidak segera ditangani akan merugikan bagi pengguna. Untuk dapat mengatasi permasalahan tersebut, maka perlu dibangun sebuah sistem pakar untuk mendeteksi kerusakan terhadap printer berdasarkan gejala-gejala yang timbul. </p><p style=\"text-align: justify;\">Dalam merancang website ini digunakan metode pengembangan perangkat lunak Waterfall yang terdiri atas 5 tahapan, yaitu requirements definition (tahapan penentuan fitur), system and software design meliputi dua kegiatan yaitu analisis (Data Flow Diagram dan Entity Relationship) dan desain (desain tabel, desain navigasi menggunakan sitemap, dan antarmuka), implementation and unit testing (hasil desain direalisasikan dan diuji), integration and system testing dan operation and maintenance (perawatan). Sementara proses desain sistem yang dipakai adalah PHP dan MySql sebagai database, pengujian sistem menggunakan Blackbox testing. Proses pembuatan sistem pakar dengan menerapkan metode Certainty Factor.</p><p style=\"text-align: justify;\">Website ini diuji dengan Blackbox testing, yang menghasilkan bahwa fitur dalam website dapat berjalan dengan baik. Dalam pengujian, dilakukan diagnosa dimana sistem mencari kerusakan sesuai dengan gajala yang dipilih, kemudian dilakukan proses perhitungan menggunakan Certainty Factor, dimana akan menghasilkan berupa kerusakan yang dialami serta solusinya.</p>', '2020-05-28 19:57:22', '2020-07-17 08:43:19', 'DBC_114_063.pdf', 14, 'VSCc2hnEww==', 6),
(62, 118, 'Abertun Sagit Sahay,ST., M.Eng.', 'Abertun Sagit Sahay,ST., M.Eng.', 6, 'APLIKASI PENGAMBILAN NOMOR ANTRIAN DAN INFORMASI POLIKLINIK PADA PUSKESMAS MENTENG PALANGKA RAYA', '                                            <p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;text-indent:36.0pt;line-height:normal\"><span style=\"font-family:\"Times New Roman\",\"serif\"\">Pada\r\nPuskesmas Menteng yang berada di Kota Palangka Raya, dalam penyampaian\r\ninformasi masih dilakukan secara manual. Seperti pada saat pasien datang\r\nmendaftar untuk mendapatkan nomor antrian pada loket pendaftaran, petugas akan\r\nmencatat data pasien yang baru dan mencari data pasien satu persatu bagi pasien\r\nyang lama.</span><span style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:\r\nIN\"> </span><span style=\"font-family:\"Times New Roman\",\"serif\"\">Dalam proses\r\npengelolaan data dan penyampaian yang masih manual tersebut, membutuhkan banyak\r\naktifitas yang harus dilakukan. Seperti pencatatan data, pencarian data dan\r\nproses penyampaiannya. Oleh karena itu, diperlukan suatu sistem secara\r\nkomputerisasi yaitu akan dibuat\r\naplikasi pada Puskesmas Menteng sebagai media untuk meningkatkan\r\nkualitas pelayanan kesehatan kepada masyarakat.</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;text-indent:36.0pt;line-height:normal\"><span style=\"font-family:\"Times New Roman\",\"serif\"\">Metodologi\r\ndalam pembuatan sistem informasi ini menggunakan metode </span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">pengumpulan\r\ndata dan metode pengembangan perangkat lunak. M</span><span style=\"font-family:\r\n\"Times New Roman\",\"serif\"\">etode </span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:IN\">pengumpulan data</span><span lang=\"IN\" style=\"font-family:\r\n\"Times New Roman\",\"serif\"\"> </span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:IN\">terdiri dari Observasi (<i>Observation</i>), Wawancara (<i>Interview</i>),\r\ndan Studi Kepustakaan <i>(Literatur Review)</i>.\r\nMetode pengembangan perangkat lunak adalah </span><span style=\"font-family:\r\n\"Times New Roman\",\"serif\"\">waterfall, dimana metode waterfall terdiri atas\r\nbeberapa bagian </span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:IN\">dengan</span><span style=\"font-family:\"Times New Roman\",\"serif\"\">\r\ntahapan – tahapan, yaitu <i>Requirement </i></span><i><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:IN\">Analysis and Definition</span></i><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\"> </span><span style=\"font-family:\"Times New Roman\",\"serif\"\">(Analisis </span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">dan Definisi\r\n</span><span style=\"font-family:\"Times New Roman\",\"serif\"\">Kebutuhan)</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">, <i>System and Software </i></span><i><span style=\"font-family:\"Times New Roman\",\"serif\"\">Design</span></i><span style=\"font-family:\"Times New Roman\",\"serif\"\"> (Perancangan</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">\r\nSistem dan Perangkat Lunak</span><span style=\"font-family:\"Times New Roman\",\"serif\"\">)</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">, </span><i><span style=\"font-family:\"Times New Roman\",\"serif\"\">Implementation\r\n</span></i><i><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">and Unit\r\nTesting</span></i><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:IN\"> </span><span style=\"font-family:\"Times New Roman\",\"serif\"\">(</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">Implementasi\r\ndan Pengujian Unit</span><span style=\"font-family:\"Times New Roman\",\"serif\"\">)</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">, <i>Integration and System </i></span><i><span style=\"font-family:\"Times New Roman\",\"serif\"\">Testing</span></i><span style=\"font-family:\"Times New Roman\",\"serif\"\"> (</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">Integrasi\r\ndan Pengujian Sistem</span><span style=\"font-family:\"Times New Roman\",\"serif\"\">)</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">,\r\ndan <i>Operation and </i></span><i><span style=\"font-family:\"Times New Roman\",\"serif\"\">Maintenance</span></i><span style=\"font-family:\"Times New Roman\",\"serif\"\"> (</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">Operasi dan </span><span style=\"font-family:\"Times New Roman\",\"serif\"\">P</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">emeliharaan</span><span style=\"font-family:\"Times New Roman\",\"serif\"\">). Metodologi ini dipilih karena\r\ndalam pembuatan </span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:IN\">aplikasi</span><span style=\"font-family:\"Times New Roman\",\"serif\"\">\r\nini, tahap demi tahap yang dilalui harus menunggu selesainya tahap sebelumnya\r\ndan berjalan berurutan. Bahasa pemrograman yang digunakan adalah </span><i><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";\r\nmso-ansi-language:IN\">PHP </span></i><span style=\"font-family:\"Times New Roman\",\"serif\"\">dan\r\n</span><span style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:\r\nIN\"> </span><i><span style=\"font-family:\"Times New Roman\",\"serif\"\">MySQL</span></i><span style=\"font-family:\"Times New Roman\",\"serif\"\"> sebagai database. </span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\"><o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;margin-bottom:.0001pt;text-align:\r\njustify;text-indent:36.0pt;line-height:normal\"><span style=\"font-family:\"Times New Roman\",\"serif\"\">Pada\r\ntahap testing sistem menggunakan <i>black\r\nbox testing</i>. Setelah melakukan <i>testing</i>,\r\ndapat dilihat hasil dari pembuatan sistem ini dapat menjalankan fungsinya</span><span lang=\"IN\" style=\"font-family:\"Times New Roman\",\"serif\";mso-ansi-language:IN\">.<o:p></o:p></span></p>', '2020-05-28 20:09:55', '2020-07-17 08:43:10', 'DBC_113_104.pdf', 8, 'JLPQwZD6Ig==', 6),
(63, 125, 'Sherly Christina,S.Kom.,M.Kom.', 'Nahumi Nugrahaningsih,ST., MT.,Ph.D.', 3, 'SISTEM PAKAR DIAGNOSA PENYAKIT DEMAM BERDARAH BERBASIS WEBSITE MENGGUNAKAN METODE CERTAINTY FACTOR', '<p style=\"text-align: justify; \">Demam berdarah dengue adalah penyakit yang disebabkan oleh virus dengue. Penyakit ini ditularkan melalui gigitan nyamuk Aedes aegypti dan Aedes albopictus. Demam berdarah dengue adalah penyakit menular yang sering menyebabkan epidemi dan menyebabkan kematian. Biasanya demam berdarah dengue sudah terlambat untuk didiagnosis. Oleh karena itu diperlukan aplikasi sistem pakar yang mampu mendiagnosis secara klinis dan memberikan solusi untuk demam berdarah menurut pengetahuan ahli. Kemampuan seorang ahli yang bisa mendiagnosis demam berdarah bisa diimplementasikan ke dalam sistem aplikasi. Metodologi yang digunakan dalam pembuatan Situs Web Ahli Diagnosis Demam Berdarah adalah analisis air terjun, desain, implementasi dan pengujian.</p><p style=\"text-align: justify; \">Fase pengujian berfokus pada spesifikasi fungsional program. Di dalam Sistem Pakar menggunakan metode Forward Chaining sebagai alasan dan Kepastian</p><p style=\"text-align: justify; \">Metode faktor untuk menghitung hasil dari hasil tepercaya. Hasil tes menunjukkan bahwa situs web ini dapat menjalankan fungsinya untuk mendiagnosis</p><p style=\"text-align: justify; \">demam berdarah dengue dengan tingkat presisi 90% dari 10 kasus percobaan. Hasil</p><p style=\"text-align: justify; \">dari tes ini diperoleh dari input yang dibuat oleh pengunjung dengan memilih opsi yang diberikan</p><p style=\"text-align: justify; \">dan kemudian mendapatkan hasil tes.</p>', '2020-05-28 22:58:26', '2020-07-17 08:42:06', 'DBC_115_069.pdf', 14, '', 2),
(64, 122, 'Abertun Sagit Sahay,ST., M.Eng.', 'Abertun Sagit Sahay,ST., M.Eng.', 4, 'SISTEM INFORMASI AKADEMIK D1 DAN PENDAFTARAN KURSUS PADA DUTA KOMPUTER PROFESIONAL PALANGKA RAYA BERBASIS WEBSITE', '                                            <p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Sistem Informasi Akademik adalah sistem yang menyediakan layanan informasi dalam bentuk data akademik. Dalam hal ini, Duta Besar Kompas Profesional Palangka Raya digunakan sebagai tempat penelitian di Jalan Utama Yos Sudarso No.59 karena sistem informasi akademik di lembaga tersebut masih manual. Tujuan dari penelitian ini adalah untuk membuat Sistem Informasi Akademik D1 dan Pendaftaran Kursus di Duta Komputer Profesional Palangka Raya Berbasis Situs Web sehingga digunakan oleh institusi. Metode penelitian menggunakan metode waterfall menurut Sommerville (2003), untuk membangun situs web menggunakan Adobe Dream weaver sebagai perangkat lunak desain situs web, MySQL sebagai databasenya, dan XAMPP sebagai server. Bahasa pemrograman yang digunakan dalam pembuatan situs web ini adalah bahasa pemrograman PHP, HTML, JavaScript, dan CSS. Pada tahap analisis dan definisi kebutuhan menggunakan analisis proses bisnis sistem lama dan analisis sistem bisnis dari sistem baru yang digambarkan menggunakan gambar diagram alur sistem lama dan gambar diagram alir sistem baru, desain sistem dan perangkat lunak menggunakan pemodelan fungsional yaitu Data Flow Diagram (DFD) yaitu pengguna sistem adalah admin, guru, guru kelas, siswa dan pengunjung. Entity Relationship Diagram (ERD), Desain Antarmuka (desain antarmuka situs web), implementasi dan pengujian unit yang menggunakan pengujian sistem menggunakan Pengujian Blackbox, hasil Pengujian Blackbox adalah seperti yang diinginkan karena mereka dimaksudkan untuk membuat Sistem Informasi Akademik D1 dan Pendaftaran Kursus di Computer Ambassadors Palangka Raya Professional berbasis situs web sehingga dapat digunakan oleh institusi.</span><br></p>', '2020-05-28 23:06:51', '2020-07-30 01:48:24', 'DBC_114_104.pdf', 8, 'PUC14708sA==', 6),
(65, 129, 'Widiatry,ST., MT', 'Viktor Handrianus Pranatawijaya,ST., MT.', 6, 'RANCANG BANGUN PORTAL BERITA PADA DAYAK POS DENGAN MENERAPKAN ALGORITMA RABIN KARP PADA PENCARIAN BERITA BERBASIS WEB', '                                            <p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Web portal bisa disebut sebagai website dengan skala lebih besar yang menyediakan banyak fasilitas, seperti email, forum, search engine, pengelolaan konten. Seiring dengan bertambah pesatnya penggunaan internet, web portal berita muncul memberikan kemudahan bagi masyarakat untuk memperoleh berbagai informasi dan berita terbaru setiap saat. Dayak Pos merupakan Surat Kabar Umum hadir di tengah masyarakat Kalimantan Tengah dimana pembaca pada Dayak Pos dalam membaca berita masih dalam bentuk koran cetak. Untuk menghemat waktu dan biaya dibandingkan dengan biasanya dalam bentuk koran, maka dari itu penulis membangun sebuah web portal berita pada Dayak Pos, ditambahkan juga algoritma rabin karp dalam pencarian berita untuk membantu pembaca dalam mencari berita. Algoritma Rabin Karp adalah algoritma pencarian kata yang mencari sebuah pola berupa substring dalam sebuah teks menggunakan hashing.</span></p><p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Dalam merancang dan membangun website ini menggunakan metodologi waterfall menurut Ian Sommerville yaitu Requirements Definition, System dan Software Design, Implementation and Unit Testing, Integration and System Testing, Operation and Maintenance. Pada tahap Requirements Definition dilakukan pembuatan flowchart. Pada tahap System dan Software Design dilakukan pembuatan Data Flow Diagram (DFD) dan Entity Relational Diagram (ERD). Metode testing yang digunakan website ini adalah metode Blackbox.</span></p><p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Berdasarkan web portal berita yang telah dirancang dan dibangun, web portal ini dapat membantu pengunjung dalam mencari dan membaca berita, dan juga Dayak pos dalam mengelola berita. Algoritma rabin karp di terapkan pada pencarian berita berdasarkan judul serta tag berita dengan hasil output berita dengan judul ataupun tag yang sama dengan kata yang dicari pada pencarian berita. Dengan adanya rekomendasi berita dapat membantu pengunjung yang memilih atau mencari berita sesuai dengan apa yang dicari pengunjung.</span></p>', '2020-05-28 23:17:56', '2020-07-17 08:42:52', 'DBC_115_064.pdf', 14, 'PMyPR0cIRA==', 6),
(66, 128, 'Widiatry,ST., MT', 'Nahumi Nugrahaningsih,ST., MT.,Ph.D.', 6, 'RANCANG BANGUN WEBSITE E-LEARING PADA SMPN – 1 AWANG LAPAI', '                                            <p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Dalam proses pembelajaran di SMPN - 1 Awang Lapai, seorang guru mengajar materi pembelajaran kepada siswa. Sehingga siswa dituntut untuk dapat memahami setiap mata pelajaran. Namun, proses pembelajaran seperti itu dibatasi oleh jarak dan waktu tatap muka antara guru dan siswa, sehingga ada beberapa siswa yang berjuang untuk memahami materi dan membutuhkan waktu lebih lama untuk memahaminya. Oleh karena itu, guru juga memberikan siswa tugas individu atau kelompok. Selain itu, karena waktu belajar yang terbatas, guru dapat mengevaluasi kemampuan siswa melalui kuis, tugas, atau Essai. Perancangan dan pembuatan situs web ini menggunakan metodologi pengembangan perangkat lunak Waterfall menurut Sommerville pada tahun 2009, di mana metode air terjun terdiri dari lima (5) bagian atau tahapan, yaitu Analisis dan Definisi Kebutuhan, Desain Sistem dan Perangkat Lunak, Implementasi dan Pengujian Unit, Integrasi dan Pengujian Sistem, dan Operasi dan Pemeliharaan. Dalam fase desain Data Flow Diagram (DFD) dan Entity Relationship Diagram (ERD) digunakan. Bahasa pemrograman yang digunakan adalah CSS, PHP dan MySQL. Pada tahap pengujian situs web ini menggunakan metode pengujian Black box. Dengan situs web E-Learning ini dapat membantu proses pembelajaran menjadi lebih optimal, dapat mendistribusikan materi pelajaran kepada siswa dan siswa dapat dengan mudah mendapatkan materi pelajaran dan dapat memfasilitasi dan membantu memberikan alternatif media pembelajaran lainnya bagi siswa dan guru.</span><br></p>', '2020-05-28 23:22:03', '2020-07-17 08:42:43', 'DBC_113_123.pdf', 8, 'f4SB1dFW3w==', 6),
(67, 130, 'Enny Dwi Oktaviyani,ST.,M.Kom.', 'Felicia Sylviana,ST.MM.', 5, 'Perancangan Sistem Informasi Penerimaan Peserta Didik Baru (PPDB) Dan Registrasi Online Berbasis Website Pada SMP Negeri 6 Palangka Raya', '                                            <p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Dalam penulisan laporan skripsi ini penulis menggunakan beberapa air terjun </span><span style=\"font-family: \"Times New Roman\";\">metode. Dalam metodologi ini beberapa langkah diambil untuk membangunan </span><span style=\"font-family: \"Times New Roman\";\">perangkat lunak, yaitu: analisis kebutuhan, desain, pengkodean</span><span style=\"font-family: \"Times New Roman\";\">, pengujian, dan pemeliharaan, dan penggunaan </span><span style=\"font-family: \"Times New Roman\";\">MySQL sebagai media penyimpanan data, dan menggunakan metode pengumpulan data, </span><span style=\"font-family: \"Times New Roman\";\">yaitu: metode observasi, metode wawancara, metode perpustakaan, </span><span style=\"font-family: \"Times New Roman\";\">metode dokumentasi dan metode eksperimen.</span></p><p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Hasil dari tesis ini adalah pengolahan data siswa baru </span><span style=\"font-family: \"Times New Roman\";\">dan registrasi online berdasarkan situs web adalah serangkaian input data </span><span style=\"font-family: \"Times New Roman\";\">kegiatan, mengedit, menghapus, menampilkan laporan masing-masing data. Mengelola data menggunakan </span><span style=\"font-family: \"Times New Roman\";\">komputer lebih menguntungkan jika dibandingkan dengan mengelola data </span><span style=\"font-family: \"Times New Roman\";\">secara manual termasuk waktu yang dibutuhkan untuk mengelola data yang lebih pendek, mencari </span><span style=\"font-family: \"Times New Roman\";\">data lebih cepat dan lebih akurat, menyimpan data di komputer lebih banyak </span><span style=\"font-family: \"Times New Roman\";\">lebih tahan lama daripada metode manual, dan kesalahan yang diperoleh kurang disebabkan oleh </span><span style=\"font-family: \"Times New Roman\";\">komputer memiliki akurasi yang sangat tinggi untuk mengelola data.</span></p>', '2020-05-28 23:27:54', '2020-07-30 01:53:30', 'DBC_114_029.pdf', 8, 'HvddqdFaKg==', 6),
(68, 114, 'Abertun Sagit Sahay,ST., M.Eng.', 'Abertun Sagit Sahay,ST., M.Eng.', 5, 'APLIKASI LOCATION BASED SERVICE PENYAJIAN RUANG UJIAN BERBASIS ANDROID', '                                            <p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Teknologi Android merupakan salah satu teknologi yang dapat dimanfaatkan. Android merupakan suatu bahasa pemrograman (development language) yang digunakan untuk merancang suatu aplikasi. Android dapat digunakan oleh siapa saja sebagai penunjang kebutuhan sehari-hari yang patut dipertimbangkan untuk mendapatkan informasi. Android memiliki bermacam-macam fitur diantaranya seperti kamera, internet, MMS, Global Positioning System (GPS) termasuk teknologi LBS (Location Based Service) dan lain-lainnya. LBS (Location Based Service) merupakan salah satu fitur android yang digunakan untuk memvisualisasikan teknologi untuk menentukan lokasi yang ingin deiketahui oleh pengguna dengan memanfaatkan fasilitas satelit. LBS (Location Based Service) memiliki unsur utama dalam penggunaannya yaitu Location Manager yang menyediakan fasilitas untuk menampilkan peta dan Location Providers dimana unsur ini digunakan untuk melakukan pencarian titik lokasi tempat. Adapun tujuan ini yaitu menerapkan aplikasi untuk membantu peserta ujian agar mengetahui tata letak lokasi ruang ujian dan jadwal ujiannya beserta tata tertibnya dengan penerapan Location Based Service.</span></p><p style=\"text-align: justify; \"><span style=\"font-family: \"Times New Roman\";\">Penelitian ini menggunakan metode pressman dan disempurnakan dengan tahapan pengumpulan data berupa observasi dan wawancara, tahapan komunikasi, quick plan, quick design, construction of prototype dan deployment delivery and feedback. Hasil dari penelitian ini adalah dihasilkan program Android yang dapat memberikan kemudahan bagi peserta ujian dengan menampilkan titik lokasi ruang ujian yang akan diselenggarakan beserta tata tertib, jadwal dan alarm.</span></p>', '2020-08-14 23:31:16', '2020-07-17 13:03:10', 'DBC_113_094.pdf', 16, '8KitTgpLSQ==', 6),
(75, 135, 'Abertun Sagit Sahay,ST., M.Eng.', 'Enny Dwi Oktaviyani,ST.,M.Kom.', 5, 'JURNAL SKRIPSI', '                                            <p>abstrak</p>', '2020-07-30 20:11:16', '2020-07-30 13:25:39', 'KHS_1-7.pdf', 8, 'xW7vLIBMGQ==', 6);

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
(8, 'Sistem Informasi'),
(9, 'Sistem Digital'),
(10, 'Jaringan Komputer'),
(11, 'Wireless Sensor Networks'),
(12, 'Internet Of Things'),
(13, 'Modeling Computer Network'),
(14, 'Artificial Intellgent'),
(15, 'Data Science'),
(16, 'Multimedia');

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
(32, 75, 94, 'abstrak di perbaiki', '2020-07-30 20:18:01');

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
(645, '::1', '2020-05-15', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(646, '::1', '2020-05-22', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(647, '::1', '2020-05-22', 'Windows 10', 'Google Chrome v.81.0.4044.138', 0),
(648, '::1', '2020-05-28', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(649, '::1', '2020-05-28', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(650, '::1', '2020-05-28', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(651, '::1', '2020-05-28', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(652, '::1', '2020-05-28', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(653, '::1', '2020-05-28', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(654, '::1', '2020-05-28', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(655, '::1', '2020-05-29', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(656, '::1', '2020-05-29', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(657, '::1', '2020-05-29', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(658, '::1', '2020-05-29', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(659, '::1', '2020-05-30', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(660, '::1', '2020-05-30', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(661, '::1', '2020-05-30', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(662, '::1', '2020-05-30', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(663, '::1', '2020-05-30', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(664, '::1', '2020-05-30', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(665, '::1', '2020-05-30', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(666, '::1', '2020-05-31', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(667, '::1', '2020-06-09', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(668, '::1', '2020-06-09', 'Windows 10', 'Google Chrome v.83.0.4103.61', 0),
(669, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(670, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(671, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(672, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(673, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(674, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(675, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(676, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(677, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(678, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0);
INSERT INTO `statistik` (`id_statistik`, `ip`, `tanggal`, `os`, `browser`, `online`) VALUES
(679, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(680, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(681, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(682, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(683, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(684, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(685, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(686, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(687, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(688, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(689, '::1', '2020-07-03', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(690, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(691, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(692, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(693, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(694, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(695, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(696, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(697, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(698, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(699, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(700, '::1', '2020-07-06', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(701, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(702, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(703, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(704, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(705, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(706, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(707, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(708, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(709, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(710, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(711, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(712, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(713, '::1', '2020-07-10', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(714, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(715, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(716, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(717, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(718, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(719, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(720, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(721, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(722, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(723, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(724, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(725, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(726, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(727, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(728, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(729, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(730, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(731, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(732, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(733, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(734, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(735, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(736, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(737, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(738, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(739, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(740, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(741, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(742, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(743, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(744, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(745, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(746, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(747, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(748, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(749, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(750, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(751, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(752, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(753, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(754, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(755, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(756, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(757, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(758, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(759, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(760, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(761, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(762, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(763, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(764, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(765, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(766, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(767, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(768, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(769, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(770, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(771, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(772, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(773, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(774, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(775, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(776, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(777, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(778, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(779, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(780, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(781, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(782, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(783, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(784, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(785, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(786, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(787, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(788, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(789, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(790, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(791, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(792, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(793, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(794, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(795, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(796, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(797, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(798, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(799, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(800, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(801, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(802, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(803, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(804, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(805, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(806, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(807, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(808, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(809, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(810, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(811, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(812, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(813, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(814, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(815, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(816, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(817, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(818, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(819, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(820, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(821, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(822, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(823, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(824, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(825, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(826, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(827, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(828, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(829, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(830, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(831, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(832, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(833, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(834, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(835, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(836, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(837, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(838, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(839, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(840, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(841, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(842, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(843, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(844, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(845, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(846, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(847, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(848, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(849, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(850, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(851, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(852, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(853, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(854, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(855, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(856, '::1', '2020-07-15', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(857, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(858, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(859, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(860, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(861, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(862, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(863, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(864, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(865, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(866, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(867, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(868, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(869, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(870, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(871, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(872, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(873, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(874, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(875, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(876, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(877, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(878, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(879, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(880, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(881, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(882, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(883, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(884, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(885, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(886, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(887, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(888, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(889, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(890, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(891, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(892, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(893, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(894, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(895, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(896, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(897, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(898, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(899, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(900, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(901, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(902, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(903, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(904, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(905, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(906, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(907, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(908, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(909, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(910, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(911, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(912, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(913, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(914, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(915, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(916, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(917, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(918, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(919, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(920, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(921, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(922, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(923, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(924, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(925, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(926, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(927, '::1', '2020-07-16', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(928, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(929, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(930, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(931, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(932, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(933, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(934, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(935, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(936, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(937, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(938, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(939, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(940, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(941, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(942, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(943, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(944, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(945, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(946, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(947, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(948, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(949, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(950, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(951, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(952, '::1', '2020-07-17', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(953, '::1', '2020-07-18', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(954, '::1', '2020-07-18', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(955, '::1', '2020-07-18', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(956, '::1', '2020-07-19', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(957, '::1', '2020-07-19', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(958, '::1', '2020-07-19', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(959, '::1', '2020-07-19', 'Windows 10', 'Google Chrome v.83.0.4103.116', 0),
(960, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(961, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(962, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(963, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(964, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(965, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(966, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(967, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(968, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(969, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(970, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0),
(971, '::1', '2020-07-30', 'Windows 10', 'Google Chrome v.84.0.4147.89', 0);

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
-- Table structure for table `status_jurnal1`
--

CREATE TABLE `status_jurnal1` (
  `id_status_jurnal1` int(11) NOT NULL,
  `nama_status_jurnal1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `status_jurnal1`
--

INSERT INTO `status_jurnal1` (`id_status_jurnal1`, `nama_status_jurnal1`) VALUES
(1, 'Belum Review'),
(2, 'Revisi Editor'),
(3, 'Revisi Penulis'),
(4, 'Tidak Publish'),
(5, 'Sudah Revisi'),
(6, 'Publish');

-- --------------------------------------------------------

--
-- Table structure for table `template_jurnal`
--

CREATE TABLE `template_jurnal` (
  `id_template_jurnal` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `file` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `template_jurnal`
--

INSERT INTO `template_jurnal` (`id_template_jurnal`, `judul`, `file`) VALUES
(5, 'cccc', 'cccc.pdf');

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
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id_token` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `tanggal_buat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id_token`, `email`, `token`, `tanggal_buat`) VALUES
(31, 'harajuku777.ac@gmail.com', 'PTAp2L4pMHw/xcRO0oAyudRpsKhjuaE9yaiqhNc8dI4=', '2020-07-02 21:54:11'),
(32, 'harajuku777.ac@gmail.com', 'QBvO7cnLFh873St4jUfpxnDNRWl/qdcJWNMpMZG3P7U=', '2020-07-02 21:58:02'),
(33, 'harajuku777.ac@gmail.com', 'E80w7e11VXEUhEUFm+IolH8padP70T5d5rlh15k1RE8=', '2020-07-02 22:03:03'),
(34, 'harajuku777.ac@gmail.com', 'B3TCoG0ajIRmWQdBYi4jAb7TXL2KjV1uOqRMzjTBdD8=', '2020-07-02 22:05:20'),
(35, 'harajuku777.ac@gmail.com', 'pUlhX+uAN3mFmxCTUOoU7hst6ZS35BMAoRYMPqj3JUw=', '2020-07-02 22:05:34'),
(36, 'harajuku777.ac@gmail.com', 'jLdaJ8x5yIUL2noSsqCdGZdQn1rHLax9pww1feSenrQ=', '2020-07-02 22:05:42'),
(37, 'harajuku777.ac@gmail.com', 'JZJuF8P60U+87w9uHytrUPcMsOFxXTUzHzdNddQLB7o=', '2020-07-02 22:05:55'),
(38, 'harajuku777.ac@gmail.com', 'R9D+HDZzj2cUxkDy8jRjFmIXvpV/xqZhE7YCIzASya4=', '2020-07-02 22:06:09'),
(39, 'harajuku777.ac@gmail.com', 'zDDZjGzvGKvAGzwlNS81pVPiMteeOGop3JYs6xlv7os=', '2020-07-02 22:07:06'),
(40, 'harajuku777.ac@gmail.com', 'etff1vEiNJUU0/3hgCFGgnfzbYqV56JjaBMgpnoTqoY=', '2020-07-02 22:08:25'),
(41, 'harajuku777.ac@gmail.com', '52ChYrDXotmaawJS8dPTQarOfv1869R1MAd78XiO2Wg=', '2020-07-02 22:08:41'),
(42, 'harajuku777.ac@gmail.com', 'XrWkZyjUul1XArRqft4BmgsewMKCjnGEgFQgoSDRxN4=', '2020-07-02 22:09:08'),
(43, 'harajuku777.ac@gmail.com', 'tNsmSYrlUfD14h1z9P/xOGmgttQc5vB/e3DPy2vNDvY=', '2020-07-02 22:09:59'),
(44, 'harajuku777.ac@gmail.com', 'C6LymFGr5h6vpw/qtR/nN7ggNh/e22J/gWsVgH/Nuok=', '2020-07-02 22:18:52'),
(45, 'harajuku777.ac@gmail.com', '5i1Ns0PcIhW4JyVvnxZAvUPrxCzcrTeXW5tryI6YOPg=', '2020-07-02 22:19:00'),
(46, 'harajuku777.ac@gmail.com', 'JtXGDzp1PbqbDS6MtQQ3+dw4P1o9F0hm1iolcgr2T6k=', '2020-07-02 22:19:09'),
(47, 'harajuku777.ac@gmail.com', 'Bve4TYD25gHU01cuKP+y1ZQerhoUcb5bEkobYwHAKas=', '2020-07-02 22:19:26');

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
  `no_hp` varchar(20) NOT NULL,
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
(79, 'editor', 'editor', 'editor', '2020-04-22', '2342343', 'harajuku777.ac@gmail.com', NULL, '2020-08-03', 'editor', 3, 1, 1, 1, '$2y$10$AUeLQYpzMRyZec/Pa0Ghj.2KYbRVY96t0.44FEF8k150tsySjYFFS', 0),
(93, '198110032006042001', 'Enny Dwi Oktaviyani,ST.,M.Kom.', 'Yogyakarta', '1981-10-03', '', 'enny.obrien@gmail.com', NULL, '0000-00-00', '', 3, 2, 9, 1, '$2y$10$N6bbb7PskTqzkD8o/bMOmegWHEpPTuG6429mF0RhxfqGFWIN8LQvq', 0),
(94, '197512122003121002', 'Abertun Sagit Sahay,ST., M.Eng.', 'Palangka Raya', '1975-12-12', '0', 'abertun@gmail.com', NULL, '2020-07-30', '-', 1, 1, 9, 1, '$2y$10$QjTCmEpiK0cgI7K3Iy0MCOcGUvis6rgCnPrH3/LchFeilEnPAFsOu', 0),
(95, '198207172003122002', 'Widiatry,ST., MT', 'Palangka Raya', '1982-07-17', '0', 'widiatry@gmail.com', NULL, '2020-05-28', '-', 1, 2, 1, 1, '$2y$10$9Gj2QtAEodBsO5bjL8GcJu37no0WgRWGbDH/IF0oob.byF1YyrXfu', 0),
(96, '198106062005011001', 'Viktor Handrianus Pranatawijaya,ST., MT.', 'Palangka Raya', '1981-06-06', '0', 'viktorhp@it.upr.ac.id & vhpran', NULL, '0000-00-00', '-', 1, 1, 1, 1, '$2y$10$i/4a8qdiB0E3yHHCrlXrceIjJHTsVQU5n3iTDD53k5zBSrcE7MVXy', 0),
(97, '196304231985021001', 'Drs.Jadiaman Parhusip,M.Kom.', 'Tapanuli Utara', '1963-04-23', '0', 'parhusip.jadiaman@gmail.com', NULL, '0000-00-00', '-', 1, 1, 9, 1, '$2y$10$o3K5WNd0qwJ0Z/XxbL5X.up.1kKmaCOjTYmBVolxJpAxg1hzN49W2', 0),
(98, '197606242005011015', 'Rony Teguh,S. Kom. MT.,Ph.D.', 'Kapuas', '1976-06-24', '0', 'ronnyteguh@gmail.com', NULL, '0000-00-00', '-', 1, 1, 9, 1, '$2y$10$6QX0aJ2MSbLE8xEDclDsJumPTlM7mhJ75MReH3a90KTNuM3E/Vz2G', 0),
(99, '197505052008011032', 'Vincentius Abdi Gunawan,ST., MT', 'Palangka Raya', '1975-05-05', '0', 'abdi.g05@gmail.com', NULL, '0000-00-00', '-', 1, 1, 9, 1, '$2y$10$QzByNEZuVLnEsoJglS3xDuzapdM2SjZtzW8g8CgNJyqLhGaa6Mvo.', 0),
(100, '197601182003122003', 'Felicia Sylviana,ST.MM.', 'Buntok', '1976-01-18', '0', 'felicia.upr@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$OFxnZi2MuW.8KpYZhfPDx.8isUP1O5Di0oGbd.nLf7I/WVW4rsBQS', 0),
(101, '198012262008121002', 'Deddy Ronaldo,ST., MT', 'Palangka Raya', '1980-12-26', '0', 'deddy.ronaldo@gmail.com', NULL, '0000-00-00', '-', 1, 1, 9, 1, '$2y$10$t5ER22Z7fqBlKaTB0ErOue8LaENQWX6Nf0IrKSenYBp6Fuz3fpPGO', 0),
(102, '198109292006042001', 'Sherly Christina,S.Kom.,M.Kom.', 'Palangka Raya', '1981-09-29', '0', 'sherly.christina.upr@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$LbXaEhC4YkjWDbQ5gFuW.uM9zFEuMBqiuc58se14So/mlg1Q9jldO', 0),
(103, '198212062006042001', 'Devi Karolita,S. Kom., M.Kom.', 'Palangka Raya', '1982-12-06', '0', 'dkarolita@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$JGLdoRz5E.0xiIcjyk7ZauS8rTw5JuYyuVPTFVROc5pcys1Lf8s8O', 0),
(104, '197910092008012016', 'Nahumi Nugrahaningsih,ST., MT.,Ph.D.', 'Sampit', '1979-10-09', '0', 'Nahumi@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$hm5D0Sb34/xUU9s2ems2COgFeFZX4jiFaQV83Vu6vexdMSRLODNyq', 0),
(105, '198003222005012004', 'Ariesta Lestari, S. Kom.,M.Cs., Ph.D', 'Tamiang Layang', '1980-03-22', '0', 'aries22ta@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$YUBLPtgHKC3nj64OC.tIMOgjx3Cr8WvTl7uFMF77a8NwVRoYry4SC', 0),
(106, '198508182012121003', 'Agus Sehatman Saragih, ST., M.Eng.', 'Pulang Pisau', '1985-08-18', '0', 'ASsaragih@gmail.com', NULL, '0000-00-00', '-', 1, 1, 9, 1, '$2y$10$kLc59FIE3EEA5XT8P5najurINeiYIaxjICPgc79CWkTs/Z04DdPrO', 0),
(107, '198702032014041001', 'Ade Chandra Saputra, S.Kom., M.Cs.', 'Palangka Raya', '1987-02-03', '0', 'ade.chandra.saputra.tumbai@gma', NULL, '0000-00-00', '-', 1, 1, 1, 1, '$2y$10$xnPDMmiAgLndq.4cQf4Lv.CWO/XxPDK6QD0ja6ffmWqlgwDzWU0MG', 0),
(108, '197605092008122001', 'Licantik,S.Kom.,M.Kom.', 'Kapuas', '1976-05-09', '0', 'LicantikMeteh@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$idhLVvwDJPry2tA174xu7uqTEFUnP.4C5ZhtaK0sGzSRxSgOQk0OK', 0),
(109, '198904072015042004', 'Nova Noor Kamala Sari, ST., M.Kom.', 'Palangka Raya', '1989-04-07', '0', 'nova.nks@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$DSi/eK8B.gVKwrWvWI.PH.lqk8cZ49EetYHl/QkE/0BHnPLgoUF92', 0),
(110, '198910222015041001', 'Putu Bagus Adidyana Anugrah Putra, ST., M.Kom.', 'Denpasar', '1989-10-22', '0', 'putu.upr@gmail.com', NULL, '0000-00-00', '-', 1, 1, 9, 1, '$2y$10$4H881yyBl0MuJJfNv8jYNOSThY2qE2nOzJ8AlaEZzNt6GUY7zRkIq', 0),
(111, '199106302019031013', 'Efrans Christian, ST.,MT', '-', '2020-05-15', '0', 'efranschristian2@gmail.com', NULL, '0000-00-00', '-', 1, 1, 9, 1, '$2y$10$RrmU3cSGjS6Cuz9fj9996OKNUZE/s1WX77DLAd1FpX6pQd9am0.F6', 0),
(112, '199403012019032016', 'Ressa Priskila, ST.,MT', '-', '2020-05-19', '0', 'ressapriskila1@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$iMXZt.Pzhi51HHIAVlga8.VZxmZzaBkDf06TW9CaBVaGV2/q9XYqu', 0),
(113, '0016119301', 'Novera Kristianti, S.T., M.T', '-', '2020-05-05', '0', 'noverara@gmail.com', NULL, '0000-00-00', '-', 1, 2, 9, 1, '$2y$10$WDd5iGPWbV.lkiUwRULFeu3PLd9L3O14BGSJwKnwmmAr7as./YxEi', 0),
(114, 'DBC 113 094', 'ANDRE FEBRIAN OTNEIL', 'Palangka Raya', '1995-02-22', '081346564818', '', NULL, '2020-05-28', 'Jl. Nyai Balau No.28', 2, 1, 1, 1, '$2y$10$K7NIeyqP9K5Uw0UMitJQfOdFL/urmYYh8CA0LoUiX9ORk0TA/YZrG', 0),
(115, 'DBC 115 020', 'WAHYUNI FEBRINDA SAFITRI', 'Kuala Kapuas', '1997-02-04', '081225856167', '', NULL, '2020-05-27', 'Jl. Tjilik Riwut Km.1 Gg.Sion No.039', 2, 2, 1, 1, '$2y$10$0TpGVX0xqEzDlcu.x3Ebv.BsuCpCAzr7T.sONWbC9p/y8WS2zGrPi', 0),
(116, 'DBC115 076', 'JEKI SAPUTRA', 'Malasan', '1996-07-06', '085828875020', '', NULL, '2020-05-28', 'Jl. Merica G.obos IX', 2, 1, 2, 1, '$2y$10$9y8KLQqLHCS5Fxdwp9muKuGzsiROzicuSMNtCdfwzBDTw0UKHPf1m', 0),
(117, 'DBC 112 035', 'DENNY HIDAYAT', 'Sampit', '1994-12-15', '082153797876', '', NULL, '2020-07-17', 'Jl. Ir. H. Juanda 20 N0.34 Sampit', 2, 1, 2, 1, '$2y$10$AZGeGF6D981I8mJjteZO3.XWFSpLgxwJrqbr0EiZ7cy431Yhhk9eu', 0),
(118, 'DBC 113 104', 'ARIYAINI LISA', 'Palangka Raya', '1994-10-24', '081258364618', '', NULL, '2020-05-28', 'Jl. Raden Saleh III', 2, 2, 5, 1, '$2y$10$AJ4w150Sz5zlYU.8AIZjTuwjDixJwFVLMjdSEcJhJozoRB0MGBqxu', 0),
(119, 'DBC 112 110', 'ARIS ARGO RAHMANTO', 'Palangka Raya', '1993-03-03', '089635684102', '', NULL, '2020-05-28', 'Jl. Simpei Karuhei', 2, 1, 2, 1, '$2y$10$HbMBHWs0F0tFrDVMhxYS9eCWEXJiWz3QYm..Y7B.rjqiOrWcWJ0Pa', 0),
(120, 'DBC 114 063', 'ARDI RIANTO', 'Tbg. Pajangei', '1995-06-24', '081348388864', '', NULL, '2020-05-28', 'Jl. Cilik Riwut Km.9', 2, 1, 1, 1, '$2y$10$nvoD2eZKF5ADMYGiwlKeHOQRLvWSWMJlkVgL/Pbv65OVR4L1VUNAG', 0),
(121, 'DBC 114 008', 'ANDRY YOGIE IMANUEL', 'Karang Langit', '1996-10-27', '081348152325', '', NULL, '2020-05-28', 'Jl. Menteng 3 Gg. Nuansa Abadi No. 55', 2, 1, 1, 1, '$2y$10$wrSas/GolGrLDa5UCArbN.5h/WVrp86pk1Om0QPAc/c3MgOP5t49O', 0),
(122, 'DBC 114 104', 'ADESTRINA', 'Palangka Raya', '1996-09-18', '082350855075', '', NULL, '2020-05-28', 'Jl. Galaxy III , Wanakarya II No 20', 2, 2, 1, 1, '$2y$10$5MN/QfR1NyHbZ.DHxm2Q2eb3ZFgSnWtpcA9LF/Ub7bdgRVu/BiaOu', 0),
(123, 'DBC 115 044', 'ADITACHAYA ARISETASYA', 'Palangka Raya', '1997-09-28', '082158714810', '', NULL, '2020-05-28', 'Jl. Beruk Angis 1 No.15', 2, 2, 1, 1, '$2y$10$KbIYf6QHegn8G3qRE0SvGObM.k/43rmCwvaczSQ4HZdRi9iXAt3SW', 0),
(124, 'DBC 113 102', 'ANDRISON', 'Palangka Raya', '1995-09-06', '082250183569', '', NULL, '2020-05-28', 'Jl. G.Obos VII . Gg 2 No 1 ', 2, 1, 1, 1, '$2y$10$Zgvgc1is3LWrPc7l/2PAOO840Y6MP97Ij7jqLZZhhKxVsE1HDnYkW', 0),
(125, 'DBC 115 069', 'ANGGA WAHYU SYAHRONI', 'Tulungagung', '1997-11-06', '082256224148', '', NULL, '2020-05-28', 'Jl. Beliang No 78', 2, 2, 2, 1, '$2y$10$qH5tu8a3t/rleYIrSfYXAecEE0vyG6o5Gwo2DeueN05PrixOhjBBi', 0),
(128, 'DBC 113 123', 'SENA HARTANI', 'Jaar', '1995-03-06', '', '', NULL, '2020-05-28', 'Jl. KR Muhtar No.40 IA Komp. Mahir Mahar Km 8 Cili', 2, 2, 1, 1, '$2y$10$9Kk4C5ol2JWBo32qP9BsNOZ1hjMPJE9aTaFkX863EDwF3evJ4rfLK', 0),
(129, 'DBC 115 064', 'HILERY STEFHANY', 'Pangkalan Bun', '1997-05-02', '085347933219', '', NULL, '2020-05-28', 'Jl. G.Obos/Talenta Kav. 7-8', 2, 2, 1, 1, '$2y$10$TxLyJS9/oXEezzfrvpQAaujW8B8rD0Ogs2sUwhfK4zj1gp10a.WMC', 0),
(130, 'DBC 114 029', 'DILLA AYU DWIPITALOKA', 'Palangka Raya', '1995-12-20', '', '', NULL, '2020-05-28', '', 2, 2, 2, 1, '$2y$10$HAjcXYaqc7NvhbHvUZlXhOMdiemWtgpLHIow5gORrescKEwWcbcH6', 0),
(131, '198110032006042001', 'Enny Dwi Oktaviyani,ST.,M.Kom.', 'Yogyakarta', '1981-10-03', '', 'enny.obrien@gmail.com', NULL, '2020-07-30', '', 1, 2, 1, 1, '$2y$10$HN4ziR/lNmRfehwP5/fp4uhIKZhSyRRXp.8dtIZQqpNDG8ZTtSwx6', 0),
(135, 'DBC 115 077', 'Yulia Pransiska', 'Timpah', '1997-09-25', '34545555', 'ndyp20062019@gmail.com', NULL, '2020-07-30', 'Jl. X', 2, 2, 1, 1, '$2y$10$mJHAXGS0uB6BS3NWfza3juMFnxuDXjrxchxFyRd32hzTm47xN6J7m', 1);

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
  ADD KEY `id_pembimbing2` (`id_pembimbing2`),
  ADD KEY `id_status_jurnal1` (`id_status_jurnal1`);

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
-- Indexes for table `status_jurnal1`
--
ALTER TABLE `status_jurnal1`
  ADD PRIMARY KEY (`id_status_jurnal1`);

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
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`);

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
  MODIFY `id_agama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id_jk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_skripsi`
--
ALTER TABLE `kategori_skripsi`
  MODIFY `id_kategori_skripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id_statistik` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=972;

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
-- AUTO_INCREMENT for table `status_jurnal1`
--
ALTER TABLE `status_jurnal1`
  MODIFY `id_status_jurnal1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `template_jurnal`
--
ALTER TABLE `template_jurnal`
  MODIFY `id_template_jurnal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

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
