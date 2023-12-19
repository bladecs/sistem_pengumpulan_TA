-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2023 at 12:04 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sistem_ta`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id_user` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `prodi` varchar(40) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL DEFAULT 'Mahasiswa',
  `jobs` varchar(40) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Non Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id_user`, `nama`, `username`, `password`, `tgl_lahir`, `jurusan`, `prodi`, `kelas`, `jabatan`, `jobs`, `status`) VALUES
('0afe2eb99c3ffb5b552ac9a2e079d52e', 'Adam Nibros', '222443001', '28012004', '2004-01-28', 'AE', 'Informatika Indsutri', '2AEC', 'Mahasiswa', 'Mahasiswa', 'Non Aktif'),
('52b37d664a5d400b5f8272220c19704e', 'Hafizh Ahmad Al Mushoffi', '222443013', '31052004', '2004-05-31', 'AE', 'Informatika Indsutri', '2AEC', 'Mahasiswa', 'Mahasiswa', 'Teraktivasi'),
('6cfe1b61453de2202fb340d25448f5b8', 'Adhwa Nabila', '222443002', '20032004', '2004-03-20', 'AE', 'Informatika Indsutri', '2AEC', 'Mahasiswa', 'Mahasiswa', 'Teraktivasi'),
('797d67878dstdf9a7yjw9dajgffakgsifau', 'admin', 'admin', 'admin', '2004-06-18', '-', '-', '-', 'Admin', 'Admin', 'Teraktivasi'),
('97f760a3fa9d81e306bb535dc33fc2ab', 'Aqila Al Farizhi', '222443004', '25042004', '2004-04-25', 'AE', 'Informatika Indsutri', '2AEC', 'Mahasiswa', 'Mahasiswa', 'Non Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_bimbingan`
--

CREATE TABLE `tb_jadwal_bimbingan` (
  `id_jadwal` varchar(40) NOT NULL,
  `id_pilih` varchar(40) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `ruangan` varchar(35) NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL,
  `hasil` longtext NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum selesai'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_jadwal_bimbingan`
--

INSERT INTO `tb_jadwal_bimbingan` (`id_jadwal`, `id_pilih`, `id_user`, `nama_dosen`, `nama_mhs`, `ruangan`, `waktu`, `tanggal`, `hasil`, `status`) VALUES
('81y08sy017y087yyasu8sdh0f7aadsf4', '7f2d9f719a360a3f79f80846498c5d12', '52b37d664a5d400b5f8272220c19704e', 'Pak Harry', 'Hafizh Ahmad Al Mushoffi', 'B212', '10:30:00', '2023-12-20', 'Pergantian desain base dan lifter menjadi 4WD stepper nema17 dan lifter menjadi vslot gantry 2020', 'Done'),
('89721097ey3497madf34sdfaadfg2', '7f2d9f719a360a3f79f80846498c5d12', '52b37d664a5d400b5f8272220c19704e', 'Pak Harry', 'Hafizh Ahmad Al Mushoffi', 'B211', '13:00:00', '2023-12-21', 'Singkronisasi nodeMCU menggunakan blink di ganti lebih baik membuat software sendiri agar lebih leluasa dalam menambahakan dan memasukan fungsi untuk setiap tombol', 'Done'),
('97906js39718jyj8asuk0dfasdf23424', '7f2d9f719a360a3f79f80846498c5d12', '52b37d664a5d400b5f8272220c19704e', 'Pak Harry', 'Hafizh Ahmad Al Mushoffi', 'B205', '08:30:00', '2023-12-19', '', 'Belum selesai'),
('9816872yuhuSYd87121dasd', '7f2d9f719a360a3f79f80846498c5d12', '52b37d664a5d400b5f8272220c19704e', 'Pak Harry', 'Hafizh Ahmad Al Mushoffi', 'B203', '12:00:00', '2023-12-18', '', 'Belum selesai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_seminar`
--

CREATE TABLE `tb_jadwal_seminar` (
  `id_seminar` varchar(40) NOT NULL,
  `id_pilih` varchar(40) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `topik` varchar(40) NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `waktu` time NOT NULL,
  `tanggal` date NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum di mulai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_seminar`
--

INSERT INTO `tb_jadwal_seminar` (`id_seminar`, `id_pilih`, `id_user`, `nama_mhs`, `nama_dosen`, `topik`, `ruangan`, `waktu`, `tanggal`, `nilai`, `status`) VALUES
('19872938ymhsdf07hmu9sd', '7f2d9f719a360a3f79f80846498c5d12', '52b37d664a5d400b5f8272220c19704e', 'Hafizh Ahmad Al Mushoffi', 'Pak Harry', 'Robot Perpustakaan Berbasis IOT', 'Lab Robotic', '12:30:00', '2023-12-31', '', 'Belum di mulai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_sidang`
--

CREATE TABLE `tb_jadwal_sidang` (
  `id_sidang` varchar(40) NOT NULL,
  `id_pilih` varchar(40) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `id_penilai` varchar(40) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `topik` varchar(40) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `ruangan` varchar(30) NOT NULL,
  `nilai` varchar(5) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Belum dilakukan'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal_sidang`
--

INSERT INTO `tb_jadwal_sidang` (`id_sidang`, `id_pilih`, `id_user`, `id_penilai`, `nama_mhs`, `nama_dosen`, `topik`, `tanggal`, `waktu`, `ruangan`, `nilai`, `status`) VALUES
('729849989duhs9df7syasd', '7f2d9f719a360a3f79f80846498c5d12', '52b37d664a5d400b5f8272220c19704e', '81778y97syd9na9sjdasjlkasd12easd', 'Hafizh Ahmad Al Mushoffi', 'Pak Harry', 'Robot Perpustakaan Berbasis IOT', '2024-02-20', '10:30:00', 'Lab Microcontroler', '', 'Belum dilakukan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pilih_topik`
--

CREATE TABLE `tb_pilih_topik` (
  `id_pilih` varchar(40) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `topik_pilih` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pilih_topik`
--

INSERT INTO `tb_pilih_topik` (`id_pilih`, `id_user`, `nama_mhs`, `nim`, `topik_pilih`) VALUES
('7f2d9f719a360a3f79f80846498c5d12', '52b37d664a5d400b5f8272220c19704e', 'Hafizh Ahmad Al Mushoffi', '222443013', 'Robot Perpustakaan Berbasis IOT'),
('ab0952adf66b8c0c89a75e0b8b7aea9f', '6cfe1b61453de2202fb340d25448f5b8', 'Adhwa Nabila', '222443002', 'Website SIKAD POLMAN dengan Machine Learning'),
('f058abca0c515d84ca6202120b6013a2', '1cb9fa42bcab2f9b65c6b9a328589e21', 'Adhwa Nabila', '222443002', 'Cyber Security System For Website Penetration');

-- --------------------------------------------------------

--
-- Table structure for table `tb_proposal`
--

CREATE TABLE `tb_proposal` (
  `id_proposal` varchar(40) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `id_pilih` varchar(40) NOT NULL,
  `nama_mhs` varchar(40) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `tgl_penyerahan` date NOT NULL,
  `file_proposal` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Sedang di proses'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_proposal`
--

INSERT INTO `tb_proposal` (`id_proposal`, `id_user`, `id_pilih`, `nama_mhs`, `nama_dosen`, `tgl_penyerahan`, `file_proposal`, `status`) VALUES
('62ce608b2fc13e4afa6c222245b3214f', '52b37d664a5d400b5f8272220c19704e', '7f2d9f719a360a3f79f80846498c5d12', 'Hafizh Ahmad Al Mushoffi', 'Pak Harry', '2023-12-17', 'Surat_Keterangan.pdf', 'Sedang di proses'),
('85f101ffa89a62074fc86bcc1839d5b7', '6cfe1b61453de2202fb340d25448f5b8', 'ab0952adf66b8c0c89a75e0b8b7aea9f', 'Adhwa Nabila', 'Bu Siti A', '2023-12-18', 'Kul51.pdf', 'Sedang di proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_topik`
--

CREATE TABLE `tb_topik` (
  `id_topik` varchar(40) NOT NULL,
  `id_user` varchar(40) NOT NULL,
  `nama_pengusul` varchar(40) NOT NULL,
  `judul_topik` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_topik`
--

INSERT INTO `tb_topik` (`id_topik`, `id_user`, `nama_pengusul`, `judul_topik`, `tgl_pengajuan`) VALUES
('18s98k0y9387j8a7y978ds', '089djy987y9s8khj8qy987', 'Pak Suharyadi', 'Kamera checker K3 berbasis Python dan Rasbery PI 4', '2023-12-27'),
('197902391870ja9sdsjgyg', 'hfiasuif794797ey87dsy99ys7yd', 'Mbak Pipit', 'Sistem Otomasi with Control from website IOT', '2023-12-27'),
('1xne78e1js7sj19189028n', '82d8yj7sy07j0y2r7y00a98y0fda9', 'Pak Rizki', 'Website Sistem TA menggunakan Machine Learing', '2023-12-27'),
('70198smyaushkda0', 'a879081208msa0j', 'Pak Bagas', 'Cyber Security System For Website Penetration', '2023-12-27'),
('71793ygyats7d12', '176u9d2767j0s92dd0rky3j', 'Pak Harry', 'Robot Perpustakaan Berbasis IOT', '2023-12-27'),
('8jj8j0s37yn1mn0n9y0', '182y3n89nyd093s', 'Bu Siti A', 'Website SIKAD POLMAN dengan Machine Learning', '2023-12-27'),
('9801797jeys87at86sd9fa7j', '917yhjsagiyudgfgq87yfia9a', 'Pak Sandy', 'System Kehadiran Mahasiswa Berbasis Website dan QR', '2023-12-27'),
('u8170jj7snayjse8ya', '817238j1s0982j70a70j', 'Pak Yuliadi E', 'Industrial simulation berbasis IOT dan PLC', '2023-12-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_jadwal_bimbingan`
--
ALTER TABLE `tb_jadwal_bimbingan`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tb_jadwal_seminar`
--
ALTER TABLE `tb_jadwal_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indexes for table `tb_jadwal_sidang`
--
ALTER TABLE `tb_jadwal_sidang`
  ADD PRIMARY KEY (`id_sidang`);

--
-- Indexes for table `tb_pilih_topik`
--
ALTER TABLE `tb_pilih_topik`
  ADD PRIMARY KEY (`id_pilih`);

--
-- Indexes for table `tb_proposal`
--
ALTER TABLE `tb_proposal`
  ADD PRIMARY KEY (`id_proposal`);

--
-- Indexes for table `tb_topik`
--
ALTER TABLE `tb_topik`
  ADD PRIMARY KEY (`id_topik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
