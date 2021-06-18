-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2018 at 03:09 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pk2maba`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin1@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(17) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `cluster` int(2) NOT NULL,
  `PK01` int(5) NOT NULL,
  `PK02` int(5) NOT NULL,
  `P01` int(5) NOT NULL,
  `P02` int(5) NOT NULL,
  `P03` int(5) NOT NULL,
  `P04` int(5) NOT NULL,
  `P05` int(5) NOT NULL,
  `P06` int(5) NOT NULL,
  `P07` int(11) NOT NULL,
  `LKMM` int(5) NOT NULL,
  `minus` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `kesalahan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `cluster`, `PK01`, `PK02`, `P01`, `P02`, `P03`, `P04`, `P05`, `P06`, `P07`, `LKMM`, `minus`, `total`, `kesalahan`) VALUES
('173140714111001', 'Mohamad Zakaria Al Ansori', 'TI', 1, 10, 10, 10, 10, 10, 10, 10, 10, 0, 20, 0, 0, '<p><strong>Minus 5 </strong>- tidak memakai sabuk hitam</p>\r\n'),
('453', 'zaka', 'PARW', 0, 0, 0, 5, 0, 0, 0, 0, 0, 10, 0, 2, 0, ''),
('4654', 'zaki', 'DI', 0, 10, 0, 0, 0, 0, 0, 0, 0, 10, 0, 5, 15, ''),
('2342342', 'zayn', 'TI', 1, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, '<p><strong>tidak salah</strong></p>\r\n'),
('173140714111062', 'Ziii', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('173140714111063', 'Mohamad Zakaria Al Ansori', 'TI', 1, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 5, 15, ''),
('1212', 'ZA', 'AKUN', 1, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 5, 95, '<p>MINUS 5</p>\r\n'),
('462387642', 'Zoya', 'TI', 1, 10, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 20, ''),
('312313123', 'ZInc', 'FTV', 2, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 45, '<p>minus 5 - tidak emmbaga</p>\r\n'),
('464', 'dfg', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('173140714111051', 'zaka', 'TI', 3, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 15, '<p><strong>minus 5</strong> - Tidak membawa</p>\r\n'),
('3428432', 'adinda', 'TI', 4, 10, 0, 0, 0, 0, 0, 0, 0, 0, 0, 5, 5, ''),
('213', 'mosda', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('34243', 'zakskda', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('3123', 'zasasd', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('2342', 'sdasdjaskfjaskfjsdkfjsdlfkfsdfsdffsdfd', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('346782', 'Zakadash', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('123123', 'Moha', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('12312', 'Mohaaam', 'TI', 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('111', 'zakaaaa', 'TI', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, ''),
('3454', 'xzsxz', 'TI', 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `penugasan`
--

CREATE TABLE IF NOT EXISTS `penugasan` (
  `id` int(5) NOT NULL,
  `judul` text NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` longtext NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penugasan`
--

INSERT INTO `penugasan` (`id`, `judul`, `tanggal`, `deskripsi`) VALUES
(1, 'Penugasan Maba 1 : Mengumpulkan ', '2018-07-10', 'SDskadfjksdfjsdncsdcmzxmczxmbcnzxczxcbzxc\r\nzxczxczxvczdvsdveSDskadfjksdfjsdncsdcmzxmczxmbcnzxczxcbzxc\r\nzxczxczxvczdvsdve'),
(4, 'Tugas Krima 3', '2018-07-12', '<p><em>Assalamualaikum wr wb</em></p>\r\n\r\n<p><strong>Tugas Krima 3 :</strong></p>\r\n\r\n<ol>\r\n	<li>membawa makanan</li>\r\n	<li>membawa minuman</li>\r\n</ol>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `penugasan`
--
ALTER TABLE `penugasan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `penugasan`
--
ALTER TABLE `penugasan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
