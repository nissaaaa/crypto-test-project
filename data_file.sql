-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 11:37 PM
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
  `nama_file` text NOT NULL,
  `pin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`No`, `nama_file`, `pin`) VALUES
(1, 'untitled.png', ''),
(2, 'untitled.png', ''),
(3, 'untitled.png', ''),
(4, 'CV (1).pdf', ''),
(5, 'CV (1).pdf', ''),
(6, 'CV (1).pdf', NULL),
(7, 'untitled.png', NULL),
(8, 'untitled.png', NULL),
(9, 'untitled.png', '1572321353'),
(10, 'untitled.png', '1572321379'),
(11, 'untitled.png', '1572321778'),
(12, 'untitled.png', '1572321850'),
(13, 'untitled.png', '1572322122'),
(14, 'untitled.png', '1572322358'),
(15, 'untitled.png', '1572322585'),
(16, 'untitled.png', '1572322718'),
(17, 'untitled.png', '1572322830'),
(18, 'untitled.png', '1572324175'),
(19, 'untitled.png', '1572324284'),
(20, 'untitled.png', '1572385283'),
(21, 'untitled.png', '1572385360'),
(22, 'untitled.png', '1572385452'),
(23, 'untitled.png', '1572385485'),
(24, 'untitled.png', '1572385534'),
(25, 'untitled.png', '1572385811'),
(26, 'untitled.png', '1572386041'),
(27, 'untitled.png', '1572400542'),
(28, 'untitled.png', '1572406554'),
(29, 'TUGAS ARTIFICIAL INTELLIGENCE PERTEMUAN 9(TUGAS 2)_2020191014_choirun_nissa.pdf', '1572414099'),
(30, 'TUGAS ARTIFICIAL INTELLIGENCE PERTEMUAN 9(TUGAS 2)_2020191014_choirun_nissa.pdf', '1572419095'),
(31, 'TUGAS ARTIFICIAL INTELLIGENCE PERTEMUAN 9(TUGAS 2)_2020191014_choirun_nissa.pdf', '1572419170'),
(32, 'coba.txt', '1572419247'),
(33, 'coba.txt', '1572419289'),
(34, 'coba.txt', '1572419312'),
(35, 'coba.txt', '1572420207'),
(36, 'coba.txt', '1572420318'),
(37, 'coba.txt', '1572420433'),
(38, 'coba.txt', '1572420509'),
(39, 'coba.txt', '1572420562'),
(40, 'coba.txt', '1572420633'),
(41, 'coba.txt', '1572420892'),
(42, 'coba.txt', '1572421142'),
(43, 'coba.txt', '1572421192'),
(44, 'coba.txt', '1572421529'),
(45, 'coba.txt', '1572421799'),
(46, 'coba.txt', '1572422520'),
(47, 'coba.txt', '1572422694'),
(48, 'CV (1).pdf', '1572422793'),
(49, 'CV (1).pdf', '1572423638'),
(50, 'CV (1).pdf', '1572429545'),
(51, 'CV (1).pdf', '1572429584'),
(52, 'untitled.png', '1572431078'),
(53, 'untitled.png', '1572431536'),
(54, 'untitled.png', '1572433717'),
(55, 'untitled.png', '1572434582'),
(56, 'untitled.png', '1572470587'),
(57, 'untitled.png', '1572470825'),
(58, 'untitled.png', '1572471119'),
(59, 'CV (1).pdf', '1572471175'),
(60, 'CV (1).pdf', '1572471293'),
(61, 'untitled.png', '1572472271'),
(62, 'untitled.png', '1572472440'),
(63, 'untitled.png', '1572472490'),
(64, 'untitled.png', '1572472513'),
(65, 'untitled.png', '1572472550'),
(66, 'untitled.png', '1572472743'),
(67, 'untitled.png', '1572473708'),
(68, 'untitled.png', '1572474295'),
(69, 'untitled.png', '1572474325'),
(70, 'untitled.png', '1572474621'),
(71, 'untitled.png', '1572474639'),
(72, 'untitled.png', '1572474741'),
(73, 'untitled.png', '1572474754');

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
  MODIFY `No` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
