-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2019 at 05:58 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE `tb_buku` (
  `kode_buku` varchar(15) NOT NULL,
  `judul_buku` varchar(40) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `pengarang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`kode_buku`, `judul_buku`, `tanggal_terbit`, `pengarang`) VALUES
('001', 'Kualitas I', '2016-01-09', 'asdasd '),
('002', 'Kualitas III', '2016-01-02', 'kd kjbaksdb kjabs');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `no_bp` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `tanggal_masuk` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`no_bp`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jurusan`, `tanggal_masuk`) VALUES
('141400002', 'Soni Arwan', 'Flores', '1993-02-06', 'Sistem Imformasi', '2016-01-02'),
('141400009', 'Nova Fortianti Fitrianti', 'padang', '2016-01-16', 'ALKnsllk', '2019-01-11'),
('141400013', 'Joni Herianto', 'Pesisir Selatan', '1990-01-05', 'Sistem Informatika', '2016-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjaman`
--

CREATE TABLE `tb_peminjaman` (
  `no_bp` varchar(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `kode_buku` varchar(15) NOT NULL,
  `judul_buku` varchar(40) NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `tanggal_pinjam` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjaman`
--

INSERT INTO `tb_peminjaman` (`no_bp`, `nama`, `jurusan`, `kode_buku`, `judul_buku`, `tanggal_terbit`, `tanggal_pinjam`) VALUES
('141400002', 'Soni Arwan', 'Sistem Imformasi', '002', 'Kualitas III', '2016-01-02', '2016-01-24'),
('141400009', 'Nova Fortianti Fitrianti', 'ALKnsllk', '001', 'Kualitas I', '2016-01-09', '2016-01-22'),
('141400013', 'Joni Herianto', 'Sistem Informatika', '002', 'Kualitas III', '2016-01-02', '2016-01-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`no_bp`);

--
-- Indexes for table `tb_peminjaman`
--
ALTER TABLE `tb_peminjaman`
  ADD PRIMARY KEY (`no_bp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
