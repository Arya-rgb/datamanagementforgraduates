-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 04:06 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_calon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_alumni`
--

CREATE TABLE `tb_alumni` (
  `kode_aktifasi` varchar(20) NOT NULL,
  `angkatan` int(10) NOT NULL,
  `tanggal_lulus` date NOT NULL,
  `nim` int(20) NOT NULL,
  `nama` text NOT NULL,
  `jurusan` text NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `bekerja` text NOT NULL,
  `nama_perusahaan` text NOT NULL,
  `alamat_perusahaan` varchar(50) NOT NULL,
  `bagian` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alumni`
--

INSERT INTO `tb_alumni` (`kode_aktifasi`, `angkatan`, `tanggal_lulus`, `nim`, `nama`, `jurusan`, `alamat`, `bekerja`, `nama_perusahaan`, `alamat_perusahaan`, `bagian`) VALUES
('20181218020', 2018, '2022-07-20', 1218020, 'nurfitria', 'Teknik Informatika', 'margahayu raya', 'Sudah Kerja', 'Pt. Kalbe', ' Cikaranag', 'qc');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `tahun_angkatan` int(4) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` text NOT NULL,
  `jurusan` text NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `judul_skripsi` text NOT NULL,
  `dosen_pem` text NOT NULL,
  `tanggal_lulus` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`tahun_angkatan`, `nim`, `nama`, `jurusan`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `judul_skripsi`, `dosen_pem`, `tanggal_lulus`) VALUES
(2018, 1218002, 'unksadasdasd', 'Teknik Informatika', 'sadasdasd', 'sadsad', '2019-04-19', 'sadasd', 'Rudi Bambang Herdiana, M.kom', '2019-04-04'),
(2018, 1218009, 'dicky arya pratama', 'Teknik Informatika', 'Cibeunying Kaler Wetan', 'Bangkok, China', '2000-03-17', 'Artificial Intelligence Pada otak Manusia', 'Siti Yulianti, M.Kom', '2022-06-21'),
(2018, 1218020, 'nurfitria', 'Teknik Informatika', 'margahayu raya', 'bandung', '2000-01-10', 'Sistiem Pengelolaan Kesehatan hewan ternak', 'Rini Nuraini Sukmana, MT', '2022-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisudawan`
--

CREATE TABLE `tb_wisudawan` (
  `kode_aktifasi` varchar(20) NOT NULL,
  `nim` int(20) NOT NULL,
  `nama` text NOT NULL,
  `jurusan` text NOT NULL,
  `alamat` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `judul_skripsi` text NOT NULL,
  `dosen_pem` text NOT NULL,
  `tanggal_lulus` date NOT NULL,
  `angkatan` int(11) NOT NULL,
  `ktp` varchar(100) NOT NULL,
  `ijasah_akhir` varchar(100) NOT NULL,
  `pas_foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wisudawan`
--

INSERT INTO `tb_wisudawan` (`kode_aktifasi`, `nim`, `nama`, `jurusan`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `judul_skripsi`, `dosen_pem`, `tanggal_lulus`, `angkatan`, `ktp`, `ijasah_akhir`, `pas_foto`) VALUES
('2018.1218009', 1218009, 'dicky arya pratama', 'Teknik Informatika', 'Cibeunying Kaler Wetan', 'Bangkok, China', '2000-03-17', 'Artificial Intelligence Pada otak Manusia', 'Siti Yulianti, M.Kom', '2022-06-21', 2018, '40-84-1-SM.pdf', '_jadwalkuliahGENAP1819 pagi versi 09jan2019.pdf', 'Thug Life Sigarasi.jpg'),
('20181218020', 1218020, 'nurfitria', 'Teknik Informatika', 'margahayu raya', 'bandung', '2000-01-10', 'Sistiem Pengelolaan Kesehatan hewan ternak', 'Rini Nuraini Sukmana, MT', '2022-07-20', 2018, 'daftar pembimbing KERJA PRAKTEK GENAP TA. 1819.pdf', 'Jadwal Perkuliahan Genap Reg. Pagi.pdf', 'thug-life-free-png-images-thuglife-png-1200_1123.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_alumni`
--
ALTER TABLE `tb_alumni`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tb_wisudawan`
--
ALTER TABLE `tb_wisudawan`
  ADD PRIMARY KEY (`kode_aktifasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
