-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 02:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siskad`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_absensi`
--

CREATE TABLE `tbl_absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `pertemuan` varchar(20) NOT NULL,
  `tgl` date NOT NULL,
  `absensi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_absensi`
--

INSERT INTO `tbl_absensi` (`id_absensi`, `id_jadwal`, `id_mahasiswa`, `pertemuan`, `tgl`, `absensi`) VALUES
(1, 4, 2, '4', '2021-01-12', 'Alfa'),
(2, 4, 5, '4', '2021-01-12', 'Hadir'),
(3, 4, 2, '1', '2021-01-26', 'Alfa'),
(4, 4, 5, '1', '2021-01-26', 'Alfa'),
(5, 3, 1, 'Pertemujan 6', '2021-01-08', 'Hadir'),
(6, 3, 4, 'Pertemujan 6', '2021-01-08', 'Alfa'),
(7, 3, 6, 'Pertemujan 6', '2021-01-08', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `id_dosen` int(11) NOT NULL,
  `nidn_dosen` varchar(15) NOT NULL,
  `nm_dosen` varchar(50) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`id_dosen`, `nidn_dosen`, `nm_dosen`, `gender`, `alamat`, `nohp`) VALUES
(1, '0408059501', 'Chairun Nas, M.Kom', 'Laki-Laki', 'Cirebon', '082284711455'),
(2, '0419029401', 'Tiara Rasyid, M.Kom', 'Perempuan', 'Kuningan', '082134567890'),
(4, '0416079401', 'Nursaka Putra', 'Laki-Laki', 'Cirebon, Jawa Barat', '082134567890');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_matkul` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `jam` varchar(15) NOT NULL,
  `thn_ajar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id_jadwal`, `id_matkul`, `id_dosen`, `id_kelas`, `ruangan`, `hari`, `jam`, `thn_ajar`) VALUES
(3, 2, 4, 1, 'Ruangan R-105', 'Kamis', '12:12', 'Ganjil 2020/2021'),
(4, 1, 1, 2, 'Ruangan R-102', 'Rabu', '00:12', 'Ganjil 2020/2021');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(11) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `nm_kelas` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `kd_kelas`, `nm_kelas`, `jurusan`, `semester`) VALUES
(1, 'TI20191', 'TI 1', 'Teknik Informatika', 3),
(2, 'SI20191', 'MI 1', 'Sistem Informasi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas_mhs`
--

CREATE TABLE `tbl_kelas_mhs` (
  `id_kelas_mhs` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kelas_mhs`
--

INSERT INTO `tbl_kelas_mhs` (`id_kelas_mhs`, `id_kelas`, `id_mahasiswa`) VALUES
(1, 1, 1),
(2, 1, 4),
(3, 2, 2),
(4, 2, 5),
(5, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matkul`
--

CREATE TABLE `tbl_matkul` (
  `id_matkul` int(11) NOT NULL,
  `kd_matkul` varchar(10) NOT NULL,
  `nm_matkul` varchar(50) NOT NULL,
  `sks` varchar(7) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matkul`
--

INSERT INTO `tbl_matkul` (`id_matkul`, `kd_matkul`, `nm_matkul`, `sks`, `ket`) VALUES
(1, 'MK001', 'Algoritma & Pemrograman', '3 SKS', 'Matakuliah Jurusan TI Semester 1'),
(2, 'MK002', 'Pemograman Dekstop (Java Netbeans)', '3 SKS', 'Matakuliah Jurusan TI Semester 3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim_mahasiswa` varchar(15) NOT NULL,
  `nm_mahasiswa` varchar(40) NOT NULL,
  `alamat` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nohp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mahasiswa`, `nim_mahasiswa`, `nm_mahasiswa`, `alamat`, `gender`, `nohp`) VALUES
(1, '00001', 'Rini Sofia Arini', 'Kabupaten Cirebon, Jawa Barat', 'Perempuan', '082284711456'),
(2, '00002', 'Rudie Habibie', 'Bandung, Jawa Barat', 'Laki-Laki', '081923456789'),
(4, '00003', 'Ahmad Humaedi Aziz', 'Cirebon, Jawa Barat', 'Laki-Laki', '089234123789'),
(5, '00004', 'Chotibul Umam', 'Jawa Utara\r\n', 'Laki-Laki', '089423842942'),
(6, '2019102014', 'Fahrurrozi', 'Cirebon\r\n', 'Laki-Laki', '082318750014');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_jadwal` int(11) NOT NULL,
  `id_mahasiswa` int(11) NOT NULL,
  `uts` double NOT NULL,
  `uas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id_nilai`, `id_jadwal`, `id_mahasiswa`, `uts`, `uas`) VALUES
(1, 3, 1, 50, 12),
(2, 3, 4, 12, 100),
(3, 3, 6, 100, 100),
(4, 4, 2, 89, 78),
(5, 4, 5, 90, 98);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nm_user` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nm_user`, `status`) VALUES
(1, 'admin', '12345', 'Fahrurrozi', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tbl_kelas_mhs`
--
ALTER TABLE `tbl_kelas_mhs`
  ADD PRIMARY KEY (`id_kelas_mhs`);

--
-- Indexes for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_absensi`
--
ALTER TABLE `tbl_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  MODIFY `id_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kelas_mhs`
--
ALTER TABLE `tbl_kelas_mhs`
  MODIFY `id_kelas_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_matkul`
--
ALTER TABLE `tbl_matkul`
  MODIFY `id_matkul` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
