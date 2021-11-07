-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 07:17 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `akomodasi`
--

CREATE TABLE `akomodasi` (
  `id_ako` int(11) NOT NULL,
  `nm_ako` varchar(50) DEFAULT NULL,
  `id_jns_ako` int(11) DEFAULT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akomodasi`
--

INSERT INTO `akomodasi` (`id_ako`, `nm_ako`, `id_jns_ako`, `lokasi`, `kontak`, `foto`) VALUES
(1, 'RS Tawangmangu', 1, 'tawangmangu', '+626669999', 'Screenshot_(17).png'),
(2, 'RM soto', 3, 'tawangmangu', '+626669999', 'Screenshot_(19).png');

-- --------------------------------------------------------

--
-- Table structure for table `dwt`
--

CREATE TABLE `dwt` (
  `id_dwt` int(11) NOT NULL,
  `nm_wst` varchar(50) NOT NULL,
  `jns_wst` enum('Alam','Buatan','Budaya') NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `aktivitas` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dwt`
--

INSERT INTO `dwt` (`id_dwt`, `nm_wst`, `jns_wst`, `lokasi`, `aktivitas`, `foto`) VALUES
(1, 'lawu', 'Alam', 'gunung', 'muncak', 'Screenshot_(6).png'),
(2, 'sarangan', 'Alam', 'lawu', 'renang', 'Screenshot_(8).png'),
(3, 'sarangan', 'Alam', 'tw', 'renang', 'Screenshot_(3).png'),
(4, 'waduk lalung', 'Buatan', 'kra', 'renang\r\n', 'Screenshot_(7).png'),
(5, 'lawu', 'Alam', 'tw', 'muncak', 'Screenshot_(8).png'),
(6, 'lawu', 'Alam', 'tw', 'muncak', 'Screenshot_(23).png'),
(7, 'danau', 'Alam', 'tw', 'party', 'Screenshot_(22).png'),
(8, 'danau', 'Alam', 'tw', 'renang', 'Screenshot_(7).png'),
(9, 'waduk', 'Buatan', 'lalung', 'berenang\r\n ', 'Screenshot_(23).png'),
(10, 'alun-alun', 'Buatan', 'tengah kota', 'nongkrong, event', 'Screenshot_(6).png'),
(11, 'taman', 'Buatan', 'tengah kota', 'nongkrong, event', 'Screenshot_(11).png');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id_eve` int(11) NOT NULL,
  `nm_eve` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_eve`, `nm_eve`, `lokasi`, `kontak`, `deskripsi`, `foto`) VALUES
(1, 'meet & great', 'sarangan', '+626669999', 'ini meet & great', 'Screenshot_(18).png'),
(2, 'Meeting', 'RM tawangmangu', '+626669996', 'khusus orang penting', 'Screenshot_(13).png');

-- --------------------------------------------------------

--
-- Table structure for table `jenis-ako`
--

CREATE TABLE `jenis-ako` (
  `id_jns_ako` int(11) NOT NULL,
  `jns_ako` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis-ako`
--

INSERT INTO `jenis-ako` (`id_jns_ako`, `jns_ako`) VALUES
(1, 'Rumah Sakit'),
(2, 'Transformasi'),
(3, 'Restoran');

-- --------------------------------------------------------

--
-- Table structure for table `pasar`
--

CREATE TABLE `pasar` (
  `id_pas` int(11) NOT NULL,
  `nm_pas` varchar(50) NOT NULL,
  `jns_pas` enum('Tradisional','Seni','Swalayan') NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasar`
--

INSERT INTO `pasar` (`id_pas`, `nm_pas`, `jns_pas`, `lokasi`, `foto`) VALUES
(1, 'Tawangmangu', 'Tradisional', 'tawangmangu', 'Screenshot_(26).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akomodasi`
--
ALTER TABLE `akomodasi`
  ADD PRIMARY KEY (`id_ako`),
  ADD KEY `jns_ako` (`id_jns_ako`);

--
-- Indexes for table `dwt`
--
ALTER TABLE `dwt`
  ADD PRIMARY KEY (`id_dwt`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_eve`);

--
-- Indexes for table `jenis-ako`
--
ALTER TABLE `jenis-ako`
  ADD PRIMARY KEY (`id_jns_ako`);

--
-- Indexes for table `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id_pas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akomodasi`
--
ALTER TABLE `akomodasi`
  MODIFY `id_ako` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dwt`
--
ALTER TABLE `dwt`
  MODIFY `id_dwt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_eve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis-ako`
--
ALTER TABLE `jenis-ako`
  MODIFY `id_jns_ako` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id_pas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akomodasi`
--
ALTER TABLE `akomodasi`
  ADD CONSTRAINT `akomodasi_ibfk_1` FOREIGN KEY (`id_jns_ako`) REFERENCES `jenis-ako` (`id_jns_ako`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
