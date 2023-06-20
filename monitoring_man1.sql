-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 06:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring_man1`
--

-- --------------------------------------------------------

--
-- Table structure for table `mon_pelanggaran`
--

CREATE TABLE `mon_pelanggaran` (
  `id_mon_pelanggaran` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL,
  `jml_poin` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl_pelanggaran` date NOT NULL,
  `id_guru` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mon_pelanggaran`
--

INSERT INTO `mon_pelanggaran` (`id_mon_pelanggaran`, `id_tahun_akademik`, `id_siswa`, `id_pelanggaran`, `jml_poin`, `keterangan`, `tgl_pelanggaran`, `id_guru`) VALUES
(1, 1, 23, 37, 10, NULL, '2022-10-01', 2),
(2, 1, 7, 35, 5, NULL, '2022-10-01', 2),
(3, 1, 7, 42, 5, NULL, '2022-10-01', 2),
(4, 1, 1, 35, 5, NULL, '2022-10-01', 2),
(5, 1, 12, 35, 5, NULL, '2022-10-01', 2),
(6, 1, 26, 35, 5, NULL, '2022-10-01', 2),
(7, 1, 34, 35, 5, NULL, '2022-10-01', 2),
(8, 1, 15, 42, 5, NULL, '2022-10-01', 2),
(9, 1, 31, 42, 5, NULL, '2022-10-01', 2),
(10, 1, 27, 35, 5, NULL, '2022-10-01', 2),
(11, 1, 63, 42, 5, NULL, '2022-10-01', 3),
(12, 1, 57, 42, 5, NULL, '2022-10-01', 3),
(13, 1, 50, 42, 5, NULL, '2022-10-01', 3),
(14, 1, 38, 42, 5, NULL, '2022-10-01', 3),
(15, 1, 69, 42, 5, NULL, '2022-10-01', 3),
(16, 1, 65, 42, 5, NULL, '2022-10-01', 3),
(17, 1, 71, 42, 5, NULL, '2022-10-01', 3),
(18, 1, 70, 42, 5, NULL, '2022-10-01', 3),
(19, 1, 60, 42, 5, NULL, '2022-10-01', 3),
(20, 1, 46, 42, 5, NULL, '2022-10-01', 3),
(21, 1, 126, 42, 5, NULL, '2022-10-05', 5),
(22, 1, 132, 42, 5, NULL, '2022-10-05', 5),
(23, 1, 205, 35, 5, 'Tidur saat jam pelajaran', '2022-10-10', 7),
(24, 1, 145, 42, 5, 'Memakai sandal saat jam pelajaran', '2022-10-11', 6),
(25, 1, 144, 35, 5, 'Bermain gelembung', '2022-10-11', 6),
(26, 1, 143, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(27, 1, 144, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(28, 1, 145, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(29, 1, 146, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(30, 1, 147, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(31, 1, 148, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(32, 1, 149, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(33, 1, 150, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(34, 1, 151, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(35, 1, 152, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(36, 1, 153, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(37, 1, 154, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(38, 1, 155, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(39, 1, 156, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(40, 1, 157, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(41, 1, 158, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(42, 1, 159, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(43, 1, 160, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(44, 1, 161, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(45, 1, 162, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(46, 1, 163, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(47, 1, 164, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(48, 1, 165, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(49, 1, 166, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(50, 1, 167, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(51, 1, 168, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(52, 1, 169, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(53, 1, 170, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(54, 1, 171, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(55, 1, 172, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(56, 1, 174, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(57, 1, 175, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(58, 1, 176, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(59, 1, 177, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(60, 1, 178, 35, 5, 'Tidak melengkapi catatan', '2022-10-11', 6),
(61, 1, 120, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(62, 1, 112, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(63, 1, 137, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(64, 1, 119, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(65, 1, 113, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(66, 1, 116, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(67, 1, 115, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(68, 1, 110, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(69, 1, 111, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(70, 1, 131, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(71, 1, 128, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(72, 1, 125, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(73, 1, 123, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(74, 1, 139, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(75, 1, 129, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(76, 1, 126, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(77, 1, 117, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(78, 1, 134, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(79, 1, 108, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(80, 1, 136, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(81, 1, 142, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(82, 1, 141, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-12', 5),
(83, 1, 79, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-13', 4),
(84, 1, 80, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-13', 4),
(85, 1, 90, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-13', 4),
(86, 1, 74, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-13', 4),
(87, 1, 105, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-13', 4),
(88, 1, 72, 35, 5, 'Tidak mengerjakan tugas membuat tabel 1 html', '2022-10-13', 4),
(89, 1, 76, 42, 5, 'Tidak memakai dasi saat jam pelajaran', '2022-10-13', 4),
(90, 1, 161, 42, 5, 'Memakai sandal saat jam pelajaran', '2022-10-18', 6),
(91, 1, 152, 35, 5, 'Main game saat jam pelajaran', '2022-10-18', 6),
(92, 1, 178, 6, 5, 'Menyembunyikan handphone temannya', '2022-10-18', 6),
(93, 1, 119, 35, 5, 'Bermain mobile legend saat jam pelajaran', '2022-10-19', 5),
(94, 1, 141, 35, 5, NULL, '2022-10-19', 5),
(95, 1, 112, 35, 5, NULL, '2022-10-19', 5),
(96, 1, 137, 35, 5, NULL, '2022-10-19', 5),
(97, 1, 136, 35, 5, NULL, '2022-10-19', 5),
(98, 1, 124, 35, 5, NULL, '2022-10-19', 5),
(99, 1, 19, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(100, 1, 35, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(101, 1, 31, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(102, 1, 24, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(103, 1, 32, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(104, 1, 7, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(105, 1, 21, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(106, 1, 9, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(107, 1, 6, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(108, 1, 15, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(109, 1, 11, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(110, 1, 29, 35, 0, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(111, 1, 16, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(112, 1, 22, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(113, 1, 28, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(114, 1, 18, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(115, 1, 27, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(116, 1, 2, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(117, 1, 23, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(118, 1, 12, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(119, 1, 34, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(120, 1, 26, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-22', 2),
(121, 1, 26, 37, 10, NULL, '2022-10-22', 2),
(122, 1, 29, 37, 10, NULL, '2022-10-29', 2),
(123, 1, 19, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(124, 1, 35, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(125, 1, 31, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(126, 1, 24, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(127, 1, 32, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(128, 1, 7, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(129, 1, 21, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(130, 1, 9, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(131, 1, 6, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(132, 1, 15, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(133, 1, 28, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(134, 1, 18, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(135, 1, 25, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(136, 1, 1, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(137, 1, 27, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(138, 1, 2, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(139, 1, 17, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(140, 1, 12, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(141, 1, 34, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-29', 2),
(142, 1, 67, 37, 10, NULL, '2022-10-29', 3),
(143, 1, 78, 35, 5, 'Tidak mengerjakan tugas membuat formulir', '2022-10-27', 4),
(144, 1, 80, 35, 5, 'Tidak mengerjakan tugas membuat formulir', '2022-10-27', 4),
(145, 1, 98, 35, 5, 'Tidak mengerjakan tugas membuat formulir', '2022-10-27', 4),
(146, 1, 102, 35, 5, 'Tidak mengerjakan tugas membuat formulir', '2022-10-27', 4),
(147, 1, 154, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-25', 6),
(148, 1, 170, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-25', 6),
(149, 1, 194, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(150, 1, 197, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(151, 1, 201, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(152, 1, 211, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(153, 1, 205, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(154, 1, 202, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(155, 1, 190, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(156, 1, 189, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(157, 1, 193, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(158, 1, 180, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(159, 1, 184, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(160, 1, 204, 35, 5, 'Tidak mengerjakan tugas kelompok membuat daftar menu', '2022-10-24', 7),
(161, 1, 214, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-31', 7),
(162, 1, 210, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-31', 7),
(163, 1, 184, 35, 5, 'Tidak mengerjakan tugas membuat tabel', '2022-10-31', 7),
(164, 1, 94, 42, 5, 'Memakai sandal saat jam pelajaran', '2022-11-03', 4),
(165, 1, 175, 37, 10, NULL, '2022-11-01', 6),
(166, 1, 27, 42, 5, 'Tidak memakai sepatu saat jam pelajaran', '2023-01-14', 2),
(167, 1, 56, 42, 5, 'Tidak memakai celana pramuka', '2023-01-14', 3),
(168, 1, 59, 42, 5, 'Tidak memakai sepatu', '2023-01-14', 3),
(169, 1, 69, 42, 5, 'Tidak memakai sepatu', '2023-01-14', 3),
(170, 1, 44, 42, 5, 'Tidak memakai sepatu', '2023-01-14', 3),
(171, 1, 57, 39, 5, NULL, '2023-01-14', 3),
(172, 1, 179, 5, 5, 'Melanggar kontrak belajar', '2023-01-16', 7),
(173, 1, 215, 42, 5, 'Tidak memakai sepatu', '2023-01-16', 7),
(174, 1, 201, 42, 5, 'Tidak memakai sepatu', '2023-01-16', 7),
(175, 1, 184, 5, 5, 'Melanggar kontrak belajar', '2023-01-16', 7),
(176, 1, 210, 5, 5, 'Melanggar kontrak belajar', '2023-01-16', 7),
(177, 1, 145, 42, 5, 'Tidak memakai sepatu', '2023-01-17', 6),
(178, 1, 144, 42, 5, 'Tidak memakai dasi', '2023-01-17', 6),
(179, 1, 153, 42, 5, 'Tidak memakai dasi', '2023-01-17', 6),
(180, 1, 164, 42, 5, 'Tidak memakai sepatu', '2023-01-17', 6),
(181, 1, 174, 2, 5, NULL, '2023-01-17', 6),
(182, 1, 167, 2, 5, NULL, '2023-01-17', 6),
(183, 1, 120, 35, 5, 'Tugas mencatata perintah di ms.word', '2023-01-18', 5),
(184, 1, 142, 35, 5, 'Tugas mencatata perintah di ms.word', '2023-01-18', 5),
(185, 1, 108, 35, 5, 'Tugas mencatata perintah di ms.word', '2023-01-18', 5),
(186, 1, 119, 35, 5, 'Tugas mencatat perintah di ms.word', '2023-01-18', 5),
(187, 1, 136, 35, 5, 'Tugas mencatat perintah di ms.word', '2023-01-18', 5),
(188, 1, 114, 35, 5, 'Tugas mencatat perintah di ms.word', '2023-01-18', 5),
(189, 1, 123, 35, 5, 'Tugas mencatat perintah di ms.word', '2023-01-18', 5),
(190, 1, 141, 35, 5, 'Tugas mencatat perintah di ms.word', '2023-01-18', 5),
(191, 1, 112, 35, 5, 'Tugas mencatat perintah di ms.word', '2023-01-18', 5),
(192, 1, 144, 42, 5, 'Tidak memakai dasi', '2023-01-24', 6),
(193, 1, 148, 42, 5, 'Tidak memakai dasi', '2023-01-24', 6),
(194, 1, 173, 42, 5, 'Tidak memakai dasi', '2023-01-24', 6),
(195, 1, 153, 42, 5, 'Tidak memakai dasi', '2023-01-24', 6),
(196, 1, 90, 42, 5, 'Tidak memakai sepatu', '2023-01-26', 4),
(197, 1, 95, 42, 5, 'Tidak memakai sepatu', '2023-01-26', 4),
(198, 1, 66, 42, 5, 'Tidak memakai sepatu', '2023-01-28', 3),
(199, 1, 60, 42, 5, 'Tidak memakai sepatu', '2023-01-28', 3),
(200, 1, 64, 42, 5, 'Tidak memakai sepatu', '2023-01-28', 3),
(201, 1, 69, 42, 5, 'Tidak memakai sepatu', '2023-01-28', 3),
(202, 1, 44, 42, 5, 'Tidak memakai sepatu', '2023-01-28', 3),
(203, 1, 70, 42, 5, 'Tidak memakai sepatu', '2023-01-28', 3),
(204, 1, 179, 42, 5, 'Tidak memakai dasi', '2023-02-13', 7),
(205, 1, 211, 37, 10, NULL, '2023-02-20', 7),
(206, 1, 183, 37, 10, NULL, '2023-02-20', 7),
(207, 1, 24, 37, 10, NULL, '2023-05-06', 2),
(208, 1, 31, 37, 10, NULL, '2023-05-06', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mon_prestasi`
--

CREATE TABLE `mon_prestasi` (
  `id_mon_prestasi` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_prestasi` int(11) NOT NULL,
  `jml_point` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl_prestasi` date NOT NULL,
  `id_guru` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mon_prestasi`
--

INSERT INTO `mon_prestasi` (`id_mon_prestasi`, `id_tahun_akademik`, `id_siswa`, `id_prestasi`, `jml_point`, `keterangan`, `tgl_prestasi`, `id_guru`) VALUES
(1, 1, 17, 8, 5, 'Ketua kelas', '2022-11-24', 2),
(2, 1, 36, 8, 5, 'Ketua kelas', '2022-11-24', 3),
(3, 1, 94, 8, 5, 'Ketua kelas', '2022-11-24', 4),
(4, 1, 141, 8, 5, 'Ketua kelas', '2022-11-24', 5),
(5, 1, 143, 8, 5, 'Ketua kelas', '2022-11-24', 6),
(6, 1, 195, 8, 5, 'Ketua kelas', '2022-11-24', 7);

-- --------------------------------------------------------

--
-- Table structure for table `mst_guru`
--

CREATE TABLE `mst_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `nip` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_guru`
--

INSERT INTO `mst_guru` (`id_guru`, `nama_guru`, `nip`) VALUES
(1, 'Dra. H. Wasliah Lubis, S.Pd., M.A', '19650708 199103 2 003'),
(2, 'X MIA 1', NULL),
(3, 'X MIA 2', NULL),
(4, 'X MIA 3', NULL),
(5, 'X MIA 4', NULL),
(6, 'X MIA 5', NULL),
(7, 'X MIA 6', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_jurusan`
--

CREATE TABLE `mst_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_kelas`
--

CREATE TABLE `mst_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `tingkat` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_kelas`
--

INSERT INTO `mst_kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`, `tingkat`, `id_guru`) VALUES
(1, 'X MIA 1', NULL, 1, NULL),
(2, 'X MIA 2', NULL, 1, NULL),
(3, 'X MIA 3', NULL, 1, NULL),
(4, 'X MIA 4', NULL, 1, NULL),
(5, 'X MIA 5', NULL, 1, NULL),
(6, 'X MIA 6', NULL, 1, NULL),
(7, 'X MIA 7', NULL, 1, NULL),
(8, 'X Keagamaan', NULL, 1, NULL),
(9, 'XI IIS 1', NULL, 2, NULL),
(10, 'XI IIS 2', NULL, 2, NULL),
(11, 'XI IIS 3', NULL, 2, NULL),
(12, 'XI IIS 4', NULL, 2, NULL),
(13, 'XI Keagamaan', NULL, 2, NULL),
(14, 'XI MIA 1', NULL, 2, NULL),
(15, 'XI MIA 2', NULL, 2, NULL),
(16, 'XI MIA 3', NULL, 2, NULL),
(17, 'XI MIA 4', NULL, 2, NULL),
(18, 'XI MIA 5', NULL, 2, NULL),
(19, 'XI MIA 6', NULL, 2, NULL),
(20, 'XI MIA 7', NULL, 2, NULL),
(21, 'XII Keagamaan', NULL, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_menu`
--

INSERT INTO `mst_menu` (`id_menu`, `menu`) VALUES
(1, 'USER_ACCESS'),
(2, 'ADMIN_DASHBOARD'),
(3, 'MASTER_DATA_TAHUNAKADEMIK'),
(4, 'MASTER_DATA_JURUSAN'),
(5, 'MASTER_DATA_KELAS'),
(6, 'MASTER_DATA_GURU'),
(7, 'MASTER_DATA_SISWA'),
(8, 'MASTER_DATA_PRESTASI'),
(9, 'MASTER_DATA_PELANGGARAN'),
(10, 'MONITORING_PRESTASI'),
(11, 'MONITORING_PELANGGARAN'),
(12, 'PINDAH_KELUAR'),
(13, 'LAPORAN_PRESTASI'),
(14, 'LAPORAN_PELANGGARAN'),
(15, 'LAPORAN_SISWA'),
(16, 'LAPORAN_SISWA_ALUMNI');

-- --------------------------------------------------------

--
-- Table structure for table `mst_pelanggaran`
--

CREATE TABLE `mst_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `kode_pelanggaran` varchar(10) NOT NULL,
  `jenis_pelanggaran` varchar(128) NOT NULL,
  `poin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_pelanggaran`
--

INSERT INTO `mst_pelanggaran` (`id_pelanggaran`, `kode_pelanggaran`, `jenis_pelanggaran`, `poin`) VALUES
(1, 'SKP01', 'Tidak membawa buku sesuai jadwal pelajaran', 5),
(2, 'SKP02a', 'Meninggalkan ruangan kelas pada saat pergantian jam', 5),
(3, 'SKP02b', 'Meninggalkan ruangan kelas pada saat pembelajaran', 5),
(4, 'SKP03a', 'Tidak ikut melaksanakan kegiatan 5 K', 5),
(5, 'SKP03b', 'Tidak ikut kegiatan kelas', 5),
(6, 'SKP04', 'Bertindak tidak senonoh dengan teman', 5),
(7, 'SKP05', 'Mencoret dinding, meja, kursi dan pagar', 10),
(8, 'SKP06', 'Mengancam/mengintimidasi teman', 10),
(9, 'SKP07', 'Bertindak tidak sopan kepada guru/karyawan', 50),
(10, 'SKP08', 'membawa/merokok di lingkungan sekolah', 10),
(11, 'SKP09', 'Merokok diluar sekolah dengan memakai atribut sekolah', 10),
(12, 'SKP10', 'Merusak sarana/prasarana sekolah', 25),
(13, 'SKP11', 'Mencuri/mengambil hak orang lain', 75),
(14, 'SKP12', 'Berjudi', 75),
(15, 'SKP13', 'Membawa senjata tajam, senjata api dan sejenisnya', 75),
(16, 'SKP14', 'Memalsukan tanda tangan', 50),
(17, 'SKP15', 'Membawa/mengedarkan miras, narkoba, VCD porno dan buku porno', 100),
(18, 'SKP16', 'Berkelahi dilingkungan sekolah', 50),
(19, 'SKP17', 'Terlibat tauran antar sekolah', 50),
(20, 'SKP18', 'Mengunjungi tempat-tempat maksiat', 75),
(21, 'SKP19', 'Terlibat tindak kriminal', 75),
(22, 'SKP20', 'Hamil/Menghamili', 100),
(23, 'SKP21', 'Melakukan Perbuatan yang mendekati Perzinahan/Amoral/Asusila di Madrasah', 100),
(24, 'SKP22', 'Membawa HP ke sekolah bila tidak di perlukan', 10),
(25, 'SKP23', 'Meloncat pagar', 25),
(26, 'SKP24', 'Tidak memakai pakaian seragam sesuai ketentuan yang berlaku', 25),
(27, 'SKP25', 'Memakai aksesoris perempuan bagi siswa', 10),
(28, 'SKP26', 'Memakai perhiasan kecuali jam tangan bagi siswa', 10),
(29, 'SKP27', 'Bertindik dan bertato', 75),
(30, 'SKP28', 'Memakai pakaian ketat dan trasparan bagi siswi', 25),
(31, 'RAJ01', 'Bel masuk 07.00, 07.05 wib dianggap terlambat', 5),
(32, 'RAJ02', 'Terlambat masuk sekolah dan masuk kelas', 5),
(33, 'RAJ03', 'Tidak mengikuti kegiatan pagi', 5),
(34, 'RAJ04', 'tidak mengikuti KBM tanpa izin', 5),
(35, 'RAJ05', 'Tidak mengerjakan tugas', 5),
(36, 'RAJ06', 'Tidak mengikuti kegiatan extra kurikuler', 5),
(37, 'RAJ07', 'Tidak masuk sekolah tanpa keterangan', 10),
(38, 'RAJ08', 'Tidak mengikuti Upacara Bendera', 10),
(39, 'RAP01', 'Tidak memasukkan baju bagi siswa', 5),
(40, 'RAP02', 'Tidak memakai kaus kaki sesuai ketentuan', 5),
(41, 'RAP03', 'Tidak memakai ikat pinggang sesuai ketentuan', 5),
(42, 'RAP04', 'Atribut Tidak lengkap', 5),
(43, 'RAP05', 'Memakai sepatu hitam berbahan kulit', 5),
(44, 'RAP06', 'Berambut godrong ( lebih dari 2 cm disamping, dibelakang, dan 5 cm diatas )', 5),
(45, 'RAP07', 'Memelihara jambang dan jenggot', 5),
(46, 'RAP08', 'Memakai pewarna rambut', 10),
(47, 'RAP09', 'Bersolek', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mst_prestasi`
--

CREATE TABLE `mst_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `jenis_prestasi` varchar(128) NOT NULL,
  `point` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_prestasi`
--

INSERT INTO `mst_prestasi` (`id_prestasi`, `jenis_prestasi`, `point`) VALUES
(1, 'Juara lomba tingkat nasional', 150),
(2, 'Juara lomba tingkat provinsi', 100),
(3, 'Juara lomba tingkat kabupaten/kota', 50),
(4, 'Juara lomba tingkat kecamatan', 25),
(5, 'Juara lomba tingkat sekolah', 20),
(6, 'Peringkat 1-3 kelas', 20),
(7, 'Pengurus aktif OSIS/Pramuka', 10),
(8, 'Pengurus aktif kelas', 5),
(9, 'Menjadi panitia kegiatan sekolah', 5),
(10, 'Mendapat nilai tertinggi ulangan harian', 5);

-- --------------------------------------------------------

--
-- Table structure for table `mst_siswa`
--

CREATE TABLE `mst_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `status` enum('aktif','lulus','pindah','dikeluarkan') NOT NULL,
  `tahun_lulus_keluar` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `keterangan_keluar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mst_siswa`
--

INSERT INTO `mst_siswa` (`id_siswa`, `id_tahun_akademik`, `nis`, `nama_siswa`, `id_kelas`, `status`, `tahun_lulus_keluar`, `nama_ibu`, `keterangan_keluar`) VALUES
(1, 1, '101', 'Abdul Hakim Siregar', 1, 'aktif', NULL, NULL, NULL),
(2, 1, '102', 'Aidil Najmi Harahap', 1, 'aktif', NULL, NULL, NULL),
(3, 1, '103', 'Aisah Fitri', 1, 'aktif', NULL, NULL, NULL),
(4, 1, '104', 'Alfa Fardah Athiyya', 1, 'aktif', NULL, NULL, NULL),
(5, 1, '105', 'Anggun Mutiara', 1, 'aktif', NULL, NULL, NULL),
(6, 1, '106', 'Azkia Rahmadani', 1, 'aktif', NULL, NULL, NULL),
(7, 1, '107', 'Dedi Ariadi Siregar', 1, 'aktif', NULL, NULL, NULL),
(8, 1, '108', 'Desty Taruyah', 1, 'aktif', NULL, NULL, NULL),
(9, 1, '109', 'Diki Darmawan Hasibuan', 1, 'aktif', NULL, NULL, NULL),
(10, 1, '110', 'Emaliya Rahma Sari Sinaga', 1, 'aktif', NULL, NULL, NULL),
(11, 1, '111', 'Fadhillah Azkia', 1, 'aktif', NULL, NULL, NULL),
(12, 1, '112', 'Faiz Fikri Yasir', 1, 'aktif', NULL, NULL, NULL),
(13, 1, '113', 'Hazlin Asmirandah Sormin', 1, 'aktif', NULL, NULL, NULL),
(14, 1, '114', 'Hilyatul Auliya Afriyani Ritonga', 1, 'aktif', NULL, NULL, NULL),
(15, 1, '115', 'Fitriah Rahmadani', 1, 'aktif', NULL, NULL, NULL),
(16, 1, '116', 'Irwina Tri Aulia Pulungan', 1, 'aktif', NULL, NULL, NULL),
(17, 1, '117', 'Kaprian Anugrah Ridwan', 1, 'aktif', NULL, NULL, NULL),
(18, 1, '118', 'Karlin Ardiana', 1, 'aktif', NULL, NULL, NULL),
(19, 1, '119', 'Lili Angriani Harahap', 1, 'aktif', NULL, NULL, NULL),
(20, 1, '120', 'Liya Alifatun Nadhira', 1, 'aktif', NULL, NULL, NULL),
(21, 1, '121', 'M. Fadhil Dzaki Nugraha', 1, 'aktif', NULL, NULL, NULL),
(22, 1, '122', 'Nadia Permata Hst', 1, 'aktif', NULL, NULL, NULL),
(23, 1, '123', 'Nona Pratiwi Nasution', 1, 'aktif', NULL, NULL, NULL),
(24, 1, '124', 'Putri Aulia Hasibuat', 1, 'aktif', NULL, NULL, NULL),
(25, 1, '125', 'Rendy Fadhilah Siregar', 1, 'aktif', NULL, NULL, NULL),
(26, 1, '126', 'Rizkandi Jambak', 1, 'aktif', NULL, NULL, NULL),
(27, 1, '127', 'Rizki Zul Fachri Nasution', 1, 'aktif', NULL, NULL, NULL),
(28, 1, '128', 'Salmi Annisa Fitri ', 1, 'aktif', NULL, NULL, NULL),
(29, 1, '129', 'Salsabila Hariyani Alvina Sari Harahap', 1, 'aktif', NULL, NULL, NULL),
(30, 1, '130', 'Suci Ramadhani', 1, 'aktif', NULL, NULL, NULL),
(31, 1, '131', 'Syaaira Alya', 1, 'aktif', NULL, NULL, NULL),
(32, 1, '132', 'Syahrul Efendi Harahap', 1, 'aktif', NULL, NULL, NULL),
(33, 1, '133', 'Syarifatul Aminah', 1, 'aktif', NULL, NULL, NULL),
(34, 1, '134', 'Yusran Hanif', 1, 'aktif', NULL, NULL, NULL),
(35, 1, '135', 'Zahra Andiri', 1, 'aktif', NULL, NULL, NULL),
(36, 1, '201', 'Abdansyah Siregar', 2, 'aktif', NULL, NULL, NULL),
(37, 1, '202', 'Aisyah Putri Nasution', 2, 'aktif', NULL, NULL, NULL),
(38, 1, '203', 'Annisa Nazhifa Nasution', 2, 'aktif', NULL, NULL, NULL),
(39, 1, '204', 'Aswin Apriandi Siregar', 2, 'aktif', NULL, NULL, NULL),
(40, 1, '205', 'Fauzan Hariri Batubara', 2, 'aktif', NULL, NULL, NULL),
(41, 1, '206', 'Ghina Nisri Ina Harahap', 2, 'aktif', NULL, NULL, NULL),
(42, 1, '207', 'Hazizah Nasution', 2, 'aktif', NULL, NULL, NULL),
(43, 1, '208', 'Indra Sakti Hasibuan', 2, 'aktif', NULL, NULL, NULL),
(44, 1, '209', 'Intan Permata Sari', 2, 'aktif', NULL, NULL, NULL),
(45, 1, '210', 'Israyanna Aulia Harsi Harahap', 2, 'aktif', NULL, NULL, NULL),
(46, 1, '211', 'Laura Shyifia Siregar', 2, 'aktif', NULL, NULL, NULL),
(47, 1, '212', 'Luthfi Miftah Rizqina Siregar', 2, 'aktif', NULL, NULL, NULL),
(48, 1, '213', 'Luthfia Mecca Daulay', 2, 'aktif', NULL, NULL, NULL),
(49, 1, '214', 'Makhlin Hidayat Siregar', 2, 'aktif', NULL, NULL, NULL),
(50, 1, '215', 'Muhammad Reza Fahrezi ', 2, 'aktif', NULL, NULL, NULL),
(51, 1, '216', 'Mustika Chintya Bella', 2, 'aktif', NULL, NULL, NULL),
(52, 1, '217', 'Naqiyyah Qanita Lubis', 2, 'aktif', NULL, NULL, NULL),
(53, 1, '218', 'Nur Fadhilah Ramadhani Siregar', 2, 'aktif', NULL, NULL, NULL),
(54, 1, '219', 'Nur Salsabila Siregar', 2, 'aktif', NULL, NULL, NULL),
(55, 1, '220', 'Nurul Anadia Fahmawati', 2, 'aktif', NULL, NULL, NULL),
(56, 1, '221', 'Rafli Ahdan Nasir', 2, 'aktif', NULL, NULL, NULL),
(57, 1, '222', 'Raihan Partomuan Sihombing', 2, 'aktif', NULL, NULL, NULL),
(58, 1, '223', 'Raisyah Ahmaini', 2, 'aktif', NULL, NULL, NULL),
(59, 1, '224', 'Riski Dzahirah Pane', 2, 'aktif', NULL, NULL, NULL),
(60, 1, '225', 'Rizky Asshifa Siregar', 2, 'aktif', NULL, NULL, NULL),
(61, 1, '226', 'Roma Halomoan Lubis', 2, 'aktif', NULL, NULL, NULL),
(62, 1, '227', 'Roma Ito', 2, 'aktif', NULL, NULL, NULL),
(63, 1, '228', 'Roni Sahputra Nainggolan', 2, 'aktif', NULL, NULL, NULL),
(64, 1, '229', 'Sarah Amanda Gultom', 2, 'aktif', NULL, NULL, NULL),
(65, 1, '230', 'Septihana Mintaito Siregar', 2, 'aktif', NULL, NULL, NULL),
(66, 1, '231', 'Silpi Anggreini', 2, 'aktif', NULL, NULL, NULL),
(67, 1, '232', 'Siti Ayudia Vazza Ferahmah', 2, 'aktif', NULL, NULL, NULL),
(68, 1, '233', 'Siti Khodijah', 2, 'aktif', NULL, NULL, NULL),
(69, 1, '234', 'Sri Murtiani', 2, 'aktif', NULL, NULL, NULL),
(70, 1, '235', 'Syahban Naufal Stani Rangkuti', 2, 'aktif', NULL, NULL, NULL),
(71, 1, '236', 'Teuku Muhammad Yazid', 2, 'aktif', NULL, NULL, NULL),
(72, 1, '301', 'Abdillah Harahap', 3, 'aktif', NULL, NULL, NULL),
(73, 1, '302', 'Annisa Fatin', 3, 'aktif', NULL, NULL, NULL),
(74, 1, '303', 'Aurora Lidwina', 3, 'aktif', NULL, NULL, NULL),
(75, 1, '304', 'Azmi Fadhilah Nasution', 3, 'aktif', NULL, NULL, NULL),
(76, 1, '305', 'Bahar Simbolon ', 3, 'aktif', NULL, NULL, NULL),
(77, 1, '306', 'Bilqis Haya Aqila Hasibuan', 3, 'aktif', NULL, NULL, NULL),
(78, 1, '307', 'Edo Ibrahim', 3, 'aktif', NULL, NULL, NULL),
(79, 1, '308', 'Fadhly Ahmad', 3, 'aktif', NULL, NULL, NULL),
(80, 1, '309', 'Farhan Juhari Harahap', 3, 'aktif', NULL, NULL, NULL),
(81, 1, '310', 'Fauzan Abdillah', 3, 'aktif', NULL, NULL, NULL),
(82, 1, '311', 'Febrina Natasya ', 3, 'aktif', NULL, NULL, NULL),
(83, 1, '312', 'Ilham Maulana Hasibuan', 3, 'aktif', NULL, NULL, NULL),
(84, 1, '313', 'Kayla Naura Nasution', 3, 'aktif', NULL, NULL, NULL),
(85, 1, '314', 'Mutiah Rahma Dany', 3, 'aktif', NULL, NULL, NULL),
(86, 1, '315', 'Muti\'Ah Salsabila Hasibuan', 3, 'aktif', NULL, NULL, NULL),
(87, 1, '316', 'Nabila Rizki', 3, 'aktif', NULL, NULL, NULL),
(88, 1, '317', 'Nursa\'Adah', 3, 'aktif', NULL, NULL, NULL),
(89, 1, '318', 'Phadilah Asmiranda', 3, 'aktif', NULL, NULL, NULL),
(90, 1, '319', 'Rabiah Al-Adawiyah', 3, 'aktif', NULL, NULL, NULL),
(91, 1, '320', 'Rabillah Avrillianie Dalimunthe', 3, 'aktif', NULL, NULL, NULL),
(92, 1, '321', 'Rahma Az-Zahra', 3, 'aktif', NULL, NULL, NULL),
(93, 1, '322', 'Rahmad Sandy Rhomadhona Harahap', 3, 'aktif', NULL, NULL, NULL),
(94, 1, '323', 'Raihan Daffa Ramadhan', 3, 'aktif', NULL, NULL, NULL),
(95, 1, '324', 'Raisyah Ramadhani Harahap', 3, 'aktif', NULL, NULL, NULL),
(96, 1, '325', 'Rasya Amanda Matondang', 3, 'aktif', NULL, NULL, NULL),
(97, 1, '326', 'Rifqah Armelia Putri Harahap', 3, 'aktif', NULL, NULL, NULL),
(98, 1, '327', 'Ririn Pratiwi Nasution', 3, 'aktif', NULL, NULL, NULL),
(99, 1, '328', 'Rizal Mahdy', 3, 'aktif', NULL, NULL, NULL),
(100, 1, '329', 'Rona Ulayya Hasibuan', 3, 'aktif', NULL, NULL, NULL),
(101, 1, '330', 'Sandi Alfarisi Harahap', 3, 'aktif', NULL, NULL, NULL),
(102, 1, '331', 'Sheikha Alhasanah', 3, 'aktif', NULL, NULL, NULL),
(103, 1, '332', 'Siti Raudah Mahfuzh', 3, 'aktif', NULL, NULL, NULL),
(104, 1, '333', 'Syahri Widia Lukmana Nasution', 3, 'aktif', NULL, NULL, NULL),
(105, 1, '334', 'Syakhira Risala Rizky', 3, 'aktif', NULL, NULL, NULL),
(106, 1, '335', 'Yurifa Angreini Hasibuan', 3, 'aktif', NULL, NULL, NULL),
(107, 1, '336', 'Zahwa Naurah Fadhilah', 3, 'aktif', NULL, NULL, NULL),
(108, 1, '401', 'Abdul Hadi Ritonga', 4, 'aktif', NULL, NULL, NULL),
(109, 1, '402', 'Afifah Afra Azhari', 4, 'aktif', NULL, NULL, NULL),
(110, 1, '403', 'Ainun Khoiriah Harahap', 4, 'aktif', NULL, NULL, NULL),
(111, 1, '404', 'Amelia Prilsya Wati', 4, 'aktif', NULL, NULL, NULL),
(112, 1, '405', 'Andra Ari Wibowo', 4, 'aktif', NULL, NULL, NULL),
(113, 1, '406', 'Arini Puspita Sari', 4, 'aktif', NULL, NULL, NULL),
(114, 1, '407', 'Arya Salim', 4, 'aktif', NULL, NULL, NULL),
(115, 1, '408', 'Ayu Ramadhani Siregar', 4, 'aktif', NULL, NULL, NULL),
(116, 1, '409', 'Chalisna Yanti', 4, 'aktif', NULL, NULL, NULL),
(117, 1, '410', 'Elsa Pretty Ramadhani Siregar', 4, 'aktif', NULL, NULL, NULL),
(118, 1, '411', 'Haikal Kamil Siregar', 4, 'aktif', NULL, NULL, NULL),
(119, 1, '412', 'Ibra Namora Mulia Siregar', 4, 'aktif', NULL, NULL, NULL),
(120, 1, '413', 'Ikhwansyah Pane', 4, 'aktif', NULL, NULL, NULL),
(121, 1, '414', 'Indah Sukma Putri', 4, 'aktif', NULL, NULL, NULL),
(122, 1, '415', 'Islah Mardiyah', 4, 'aktif', NULL, NULL, NULL),
(123, 1, '416', 'Isra Agustina', 4, 'aktif', NULL, NULL, NULL),
(124, 1, '417', 'Isro\' Hamonangan Harahap', 4, 'aktif', NULL, NULL, NULL),
(125, 1, '418', 'Julia Keices', 4, 'aktif', NULL, NULL, NULL),
(126, 1, '419', 'Kayla Putri Ridho Siregar', 4, 'aktif', NULL, NULL, NULL),
(127, 1, '420', 'Lailan Nazmi', 4, 'aktif', NULL, NULL, NULL),
(128, 1, '421', 'Mutiah Amirah', 4, 'aktif', NULL, NULL, NULL),
(129, 1, '422', 'Nabila Putri Farah Dina Panggabean', 4, 'aktif', NULL, NULL, NULL),
(130, 1, '423', 'Nabila Safitri Siregar', 4, 'aktif', NULL, NULL, NULL),
(131, 1, '424', 'Nabila Sari Aulia Harahap', 4, 'aktif', NULL, NULL, NULL),
(132, 1, '425', 'Nadia Sifa Auliya Siregar', 4, 'aktif', NULL, NULL, NULL),
(133, 1, '426', 'Nadira Safitri', 4, 'aktif', NULL, NULL, NULL),
(134, 1, '427', 'Nurul Annisa Siregar', 4, 'aktif', NULL, NULL, NULL),
(135, 1, '428', 'Ramadhani', 4, 'aktif', NULL, NULL, NULL),
(136, 1, '429', 'Rayhan Abdillah Hasibuan', 4, 'aktif', NULL, NULL, NULL),
(137, 1, '430', 'Rayhan Saputra', 4, 'aktif', NULL, NULL, NULL),
(138, 1, '431', 'Safitri Idaman Hati Pohan', 4, 'aktif', NULL, NULL, NULL),
(139, 1, '432', 'Salsabila', 4, 'aktif', NULL, NULL, NULL),
(140, 1, '433', 'Widia Safitri Dalimunthe', 4, 'aktif', NULL, NULL, NULL),
(141, 1, '434', 'Yardan Zeva', 4, 'aktif', NULL, NULL, NULL),
(142, 1, '435', 'Yusril', 4, 'aktif', NULL, NULL, NULL),
(143, 1, '501', 'Abdul Jalil Nasution', 5, 'aktif', NULL, NULL, NULL),
(144, 1, '502', 'Agung Pratama Ray Saragih', 5, 'aktif', NULL, NULL, NULL),
(145, 1, '503', 'Aldi Nasution', 5, 'aktif', NULL, NULL, NULL),
(146, 1, '504', 'Alwi Rafi Nasution', 5, 'aktif', NULL, NULL, NULL),
(147, 1, '505', 'Amirah Azzahra Sihombing', 5, 'aktif', NULL, NULL, NULL),
(148, 1, '506', 'Anan Syah Rivandani Tambunan', 5, 'aktif', NULL, NULL, NULL),
(149, 1, '507', 'Anisa Marito Siregar', 5, 'aktif', NULL, NULL, NULL),
(150, 1, '508', 'Azkia Lisda Daulay', 5, 'aktif', NULL, NULL, NULL),
(151, 1, '509', 'Bona Permana Siregar', 5, 'aktif', NULL, NULL, NULL),
(152, 1, '510', 'Efrida Yanti Ritonga', 5, 'aktif', NULL, NULL, NULL),
(153, 1, '511', 'Fadlan Al Farizy Harahap', 5, 'aktif', NULL, NULL, NULL),
(154, 1, '512', 'Feby Aulia Batubara', 5, 'aktif', NULL, NULL, NULL),
(155, 1, '513', 'Ferdiansyah Siregar', 5, 'aktif', NULL, NULL, NULL),
(156, 1, '514', 'Hikmal Aditya Siregar', 5, 'aktif', NULL, NULL, NULL),
(157, 1, '515', 'Khoirun Nisa', 5, 'aktif', NULL, NULL, NULL),
(158, 1, '516', 'Mardiah Lubis', 5, 'aktif', NULL, NULL, NULL),
(159, 1, '517', 'Muhammad Luthfi', 5, 'aktif', NULL, NULL, NULL),
(160, 1, '518', 'Muhaymin Abdillah Harahap', 5, 'aktif', NULL, NULL, NULL),
(161, 1, '519', 'Nabila Radha Silva Siregar', 5, 'aktif', NULL, NULL, NULL),
(162, 1, '520', 'Nailah Alfaizah Pasaribu', 5, 'aktif', NULL, NULL, NULL),
(163, 1, '521', 'Nazla Ritonga', 5, 'aktif', NULL, NULL, NULL),
(164, 1, '522', 'Nazwa Liza Nur Harahap', 5, 'aktif', NULL, NULL, NULL),
(165, 1, '523', 'Nazwa Shelastien', 5, 'aktif', NULL, NULL, NULL),
(166, 1, '524', 'Nurul Afifah Malwa', 5, 'aktif', NULL, NULL, NULL),
(167, 1, '525', 'Nurun Nisah Harahap', 5, 'aktif', NULL, NULL, NULL),
(168, 1, '526', 'Putri Aulia Hutasuhut', 5, 'aktif', NULL, NULL, NULL),
(169, 1, '527', 'Rahmat Al Mursidi', 5, 'aktif', NULL, NULL, NULL),
(170, 1, '528', 'Rizky Fitriah Lubis', 5, 'aktif', NULL, NULL, NULL),
(171, 1, '529', 'Rosiana Puspita Sari', 5, 'aktif', NULL, NULL, NULL),
(172, 1, '530', 'Saiwa Shifa Alqurni', 5, 'aktif', NULL, NULL, NULL),
(173, 1, '531', 'Salman Al Hawariz Hasibuan', 5, 'aktif', NULL, NULL, NULL),
(174, 1, '532', 'Salra Diani Harahap', 5, 'aktif', NULL, NULL, NULL),
(175, 1, '533', 'Siska Holila Hasibuan', 5, 'aktif', NULL, NULL, NULL),
(176, 1, '534', 'Siti Laysyah Mahrani', 5, 'aktif', NULL, NULL, NULL),
(177, 1, '535', 'Suaiba Tul Arbiah Harahap', 5, 'aktif', NULL, NULL, NULL),
(178, 1, '536', 'Yulia Indriani', 5, 'aktif', NULL, NULL, NULL),
(179, 1, '601', 'Alga Hardiansyah Dalimunthe', 6, 'aktif', NULL, NULL, NULL),
(180, 1, '602', 'Riski Anggun Salsabila', 6, 'aktif', NULL, NULL, NULL),
(181, 1, '603', 'Desmira Acania Siregar', 6, 'aktif', NULL, NULL, NULL),
(182, 1, '604', 'Syfa Adelia Siregar', 6, 'aktif', NULL, NULL, NULL),
(183, 1, '605', 'Amir Hasan Harahap', 6, 'aktif', NULL, NULL, NULL),
(184, 1, '606', 'Ikro Ramadhan Pratama', 6, 'aktif', NULL, NULL, NULL),
(185, 1, '607', 'Najmi Lathifah Zahir Harahap', 6, 'aktif', NULL, NULL, NULL),
(186, 1, '608', 'Wafik Mulia Sari', 6, 'aktif', NULL, NULL, NULL),
(187, 1, '609', 'Annisa Fitri', 6, 'aktif', NULL, NULL, NULL),
(188, 1, '610', 'Cindy Nur Afifah', 6, 'aktif', NULL, NULL, NULL),
(189, 1, '611', 'Fatirah Zahra Dalimunthe', 6, 'aktif', NULL, NULL, NULL),
(190, 1, '612', 'Riska Namora Lubis', 6, 'aktif', NULL, NULL, NULL),
(191, 1, '613', 'Darliana Yulianti', 6, 'aktif', NULL, NULL, NULL),
(192, 1, '614', 'Putri Ani Harahap', 6, 'aktif', NULL, NULL, NULL),
(193, 1, '615', 'Nur Fitri Khasanah Harahap', 6, 'aktif', NULL, NULL, NULL),
(194, 1, '616', 'Diandra Mahalia Rizki', 6, 'aktif', NULL, NULL, NULL),
(195, 1, '617', 'Muhammad Zaky Ardiansyah', 6, 'aktif', NULL, NULL, NULL),
(196, 1, '618', 'Mutia Zahra', 6, 'aktif', NULL, NULL, NULL),
(197, 1, '619', 'Qamarito Ramadhani', 6, 'aktif', NULL, NULL, NULL),
(198, 1, '620', 'Nur Hasanah Siregar', 6, 'aktif', NULL, NULL, NULL),
(199, 1, '621', 'Doni Saputra Siregar', 6, 'aktif', NULL, NULL, NULL),
(200, 1, '622', 'Muhammad Fadil Hasibuan', 6, 'aktif', NULL, NULL, NULL),
(201, 1, '623', 'Kholida Hannum Siagian', 6, 'aktif', NULL, NULL, NULL),
(202, 1, '624', 'Tazkiya Mukarromah', 6, 'aktif', NULL, NULL, NULL),
(203, 1, '625', 'Aisah Harahap', 6, 'aktif', NULL, NULL, NULL),
(204, 1, '626', 'Faizun Fakih Ritonga', NULL, 'pindah', '2023', NULL, 'Pindah ke SMA Negeri 1 Padangsidimpuan'),
(205, 1, '627', 'Fitri Mahrani Siagian', 6, 'aktif', NULL, NULL, NULL),
(206, 1, '628', 'Nanda Tsaqraprana Harahap', 6, 'aktif', NULL, NULL, NULL),
(207, 1, '629', 'Aldy Arrezou Qordowi', 6, 'aktif', NULL, NULL, NULL),
(208, 1, '630', 'Salwa Ilya Siregar', 6, 'aktif', NULL, NULL, NULL),
(209, 1, '631', 'Thoriq Haikal Harahap', 6, 'aktif', NULL, NULL, NULL),
(210, 1, '632', 'Fitrah Hamonangan Hasibuan', 6, 'aktif', NULL, NULL, NULL),
(211, 1, '633', 'Rohi Nurlatifa', 6, 'aktif', NULL, NULL, NULL),
(212, 1, '634', 'Taufik Halomoan', NULL, 'dikeluarkan', '2022', NULL, 'Akhlak dan absensi '),
(213, 1, '635', 'Nazmi Latifa Harahap', 6, 'aktif', NULL, NULL, NULL),
(214, 1, '636', 'Ria Elvina Pandiangan', 6, 'aktif', NULL, NULL, NULL),
(215, 1, '637', 'Van Hendi Pramana', 6, 'aktif', NULL, NULL, NULL),
(216, 1, '237', 'Aulia Salamah Siregar', 2, 'aktif', NULL, NULL, NULL),
(217, 1, '638', 'Risa Yannisah Nur', 6, 'aktif', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_tahun_akademik` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `is_aktif` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_tahun_akademik`, `tahun_akademik`, `angkatan`, `is_aktif`) VALUES
(1, '2022/2023', '2022', 'aktif'),
(2, '2023/2024', '2023', 'nonaktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_guru`, `username`, `password`, `level`) VALUES
(1, NULL, 'superadmin', '$2y$10$KuMvvev1K1GDnj3tVpB14egCM1mCJa7oJL71nU70EGLYEDIWbSpVy', 0),
(2, 1, 'kepsek', '$2y$10$lsj8QrkEr2gUslp9xjndOO/j/oN2OmXay9TWakQ5xOH9RvPzUSYNm', 1),
(3, 2, 'xmia1', '$2y$10$BEG6QfLo.QCo1j6N0IP.qeV/wUastRJwYFz/JSS/pLywIUYzcGn2C', 2),
(4, 3, 'xmia2', '$2y$10$ONVViDroKzE94S6UN5M0/.l5Q3IBObMrZcxw3JTjaRQlLbuX2rgC.', 2),
(5, 4, 'xmia3', '$2y$10$hCOZ7F6aD0ugKpafSxp1/O2hHCHUomeSqTnb9rjNGI8Jpq1Jm9chS', 2),
(6, 5, 'xmia4', '$2y$10$Qu18hCQVQq54TXjpBH0YGOAscJU4.Qc10FU/r1cZWMbsxDRCCCFgu', 2),
(7, 6, 'xmia5', '$2y$10$EeP.qs8w1a1NDPHJ77ScCui1H6ttJo8rRrZkositpIERfqp/l0qWC', 2),
(8, 7, 'xmia6', '$2y$10$w0YvP1cQRdBWgPKUA0NHq.5/58zrSDIH.P81WvnQZjNnPjzFImDB2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `level`, `id_menu`) VALUES
(1, 0, 1),
(2, 0, 2),
(3, 0, 3),
(4, 0, 4),
(5, 0, 5),
(6, 0, 6),
(7, 0, 7),
(8, 0, 8),
(9, 0, 9),
(10, 0, 101),
(11, 0, 111),
(12, 2, 10),
(13, 2, 11),
(14, 0, 121),
(15, 2, 12),
(16, 0, 131),
(17, 0, 141),
(18, 1, 2),
(19, 1, 13),
(20, 1, 14),
(21, 0, 151),
(22, 0, 161),
(23, 1, 15),
(24, 1, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mon_pelanggaran`
--
ALTER TABLE `mon_pelanggaran`
  ADD PRIMARY KEY (`id_mon_pelanggaran`);

--
-- Indexes for table `mon_prestasi`
--
ALTER TABLE `mon_prestasi`
  ADD PRIMARY KEY (`id_mon_prestasi`);

--
-- Indexes for table `mst_guru`
--
ALTER TABLE `mst_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `mst_jurusan`
--
ALTER TABLE `mst_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `mst_kelas`
--
ALTER TABLE `mst_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mst_pelanggaran`
--
ALTER TABLE `mst_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `mst_prestasi`
--
ALTER TABLE `mst_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `mst_siswa`
--
ALTER TABLE `mst_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_tahun_akademik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mon_pelanggaran`
--
ALTER TABLE `mon_pelanggaran`
  MODIFY `id_mon_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;

--
-- AUTO_INCREMENT for table `mon_prestasi`
--
ALTER TABLE `mon_prestasi`
  MODIFY `id_mon_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mst_guru`
--
ALTER TABLE `mst_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_jurusan`
--
ALTER TABLE `mst_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_kelas`
--
ALTER TABLE `mst_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `mst_menu`
--
ALTER TABLE `mst_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mst_pelanggaran`
--
ALTER TABLE `mst_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `mst_prestasi`
--
ALTER TABLE `mst_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mst_siswa`
--
ALTER TABLE `mst_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_tahun_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
