-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 04:32 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_file`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `No` int(100) NOT NULL,
  `nama_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`No`, `nama_file`) VALUES
(1, 'untitled.png'),
(2, 'untitled.png'),
(3, 'untitled.png'),
(4, 'CV (1).pdf'),
(5, 'CV (1).pdf'),
(6, 'CV (1).pdf'),
(7, 'untitled.png'),
(8, 'untitled.png'),
(9, 'untitled.png'),
(10, 'untitled.png'),
(11, 'untitled.png'),
(12, 'untitled.png'),
(13, 'untitled.png'),
(14, 'untitled.png'),
(15, 'untitled.png'),
(16, 'untitled.png'),
(17, 'untitled.png'),
(18, 'untitled.png'),
(19, 'untitled.png'),
(20, 'untitled.png'),
(21, 'untitled.png'),
(22, 'untitled.png'),
(23, 'untitled.png'),
(24, 'untitled.png'),
(25, 'untitled.png'),
(26, 'untitled.png'),
(27, 'untitled.png'),
(28, 'untitled.png'),
(29, 'TUGAS ARTIFICIAL INTELLIGENCE PERTEMUAN 9(TUGAS 2)_2020191014_choirun_nissa.pdf'),
(30, 'TUGAS ARTIFICIAL INTELLIGENCE PERTEMUAN 9(TUGAS 2)_2020191014_choirun_nissa.pdf'),
(31, 'TUGAS ARTIFICIAL INTELLIGENCE PERTEMUAN 9(TUGAS 2)_2020191014_choirun_nissa.pdf'),
(32, 'coba.txt'),
(33, 'coba.txt'),
(34, 'coba.txt'),
(35, 'coba.txt'),
(36, 'coba.txt'),
(37, 'coba.txt'),
(38, 'coba.txt'),
(39, 'coba.txt'),
(40, 'coba.txt'),
(41, 'coba.txt'),
(42, 'coba.txt'),
(43, 'coba.txt'),
(44, 'coba.txt'),
(45, 'coba.txt'),
(46, 'coba.txt'),
(47, 'coba.txt'),
(48, 'CV (1).pdf'),
(49, 'CV (1).pdf'),
(50, 'CV (1).pdf'),
(51, 'CV (1).pdf'),
(52, 'untitled.png'),
(53, 'untitled.png'),
(54, 'untitled.png'),
(55, 'untitled.png'),
(56, 'untitled.png'),
(57, 'untitled.png'),
(58, 'untitled.png'),
(59, 'CV (1).pdf'),
(60, 'CV (1).pdf'),
(61, 'untitled.png'),
(62, 'untitled.png'),
(63, 'untitled.png'),
(64, 'untitled.png'),
(65, 'untitled.png'),
(66, 'untitled.png'),
(67, 'untitled.png'),
(68, 'untitled.png'),
(69, 'untitled.png'),
(70, 'untitled.png'),
(71, 'untitled.png'),
(72, 'untitled.png'),
(73, 'untitled.png'),
(74, 'CV (1).pdf'),
(75, 'CV (1).pdf'),
(76, 'coba.txt'),
(77, 'IMG20191018111918.jpg'),
(78, 'cobn.txt'),
(79, '1572491168'),
(80, '1572491269'),
(81, '1572492539'),
(82, '1572492600'),
(83, '1572492616');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
