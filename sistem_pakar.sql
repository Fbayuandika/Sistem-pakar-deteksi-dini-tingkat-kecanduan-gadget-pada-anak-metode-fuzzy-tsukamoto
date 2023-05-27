-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2023 at 02:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_pakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `umur` int(3) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `nama`, `umur`, `jenis_kelamin`) VALUES
(3, 'Resa', 14, 'Perempuan'),
(6, 'Resa Putri Fatmala', 13, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `aturan`
--

CREATE TABLE `aturan` (
  `id_aturan` int(5) NOT NULL,
  `dimensi1` varchar(50) NOT NULL,
  `dimensi2` varchar(50) NOT NULL,
  `dimensi3` varchar(50) NOT NULL,
  `id_tingkat_kecanduan` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aturan`
--

INSERT INTO `aturan` (`id_aturan`, `dimensi1`, `dimensi2`, `dimensi3`, `id_tingkat_kecanduan`) VALUES
(1, 'Normal', 'Normal', 'Normal', 1),
(3, 'Normal', 'Normal', 'Ringan', 1),
(4, 'Normal', 'Normal', 'Sedang', 1),
(5, 'Normal', 'Normal', 'Berat', 2),
(6, 'Normal', 'Ringan', 'Normal', 1),
(7, 'Normal', 'Ringan', 'Ringan', 1),
(8, 'Normal', 'Ringan', 'Sedang', 2),
(9, 'Normal', 'Ringan', 'Berat', 3),
(10, 'Normal', 'Sedang', 'Normal', 2),
(11, 'Normal', 'Sedang', 'Ringan', 2),
(12, 'Normal', 'Sedang', 'Sedang', 3),
(13, 'Normal', 'Sedang', 'Berat', 3),
(14, 'Normal', 'Berat', 'Normal', 3),
(15, 'Normal', 'Berat', 'Ringan', 3),
(16, 'Normal', 'Berat', 'Sedang', 4),
(17, 'Normal', 'Berat', 'Berat', 4),
(18, 'Ringan', 'Normal', 'Normal', 1),
(19, 'Ringan', 'Normal', 'Ringan', 2),
(20, 'Ringan', 'Normal', 'Sedang', 2),
(21, 'Ringan', 'Normal', 'Berat', 3),
(22, 'Ringan', 'Ringan', 'Normal', 2),
(23, 'Ringan', 'Ringan', 'Ringan', 2),
(24, 'Ringan', 'Ringan', 'Sedang', 3),
(25, 'Ringan', 'Ringan', 'Berat', 3),
(26, 'Ringan', 'Sedang', 'Normal', 3),
(27, 'Ringan', 'Sedang', 'Ringan', 3),
(28, 'Ringan', 'Sedang', 'Sedang', 4),
(29, 'Ringan', 'Sedang', 'Berat', 4),
(30, 'Ringan', 'Berat', 'Normal', 3),
(31, 'Ringan', 'Berat', 'Ringan', 4),
(32, 'Ringan', 'Berat', 'Sedang', 4),
(33, 'Ringan', 'Berat', 'Berat', 4),
(34, 'Sedang', 'Normal', 'Normal', 2),
(35, 'Sedang', 'Normal', 'Ringan', 3),
(36, 'Sedang', 'Normal', 'Sedang', 3),
(37, 'Sedang', 'Normal', 'Berat', 4),
(38, 'Sedang', 'Ringan', 'Normal', 3),
(39, 'Sedang', 'Ringan', 'Ringan', 3),
(40, 'Sedang', 'Ringan', 'Sedang', 4),
(41, 'Sedang', 'Ringan', 'Berat', 4),
(42, 'Sedang', 'Sedang', 'Normal', 4),
(43, 'Sedang', 'Sedang', 'Ringan', 4),
(44, 'Sedang', 'Sedang', 'Sedang', 4),
(45, 'Sedang', 'Sedang', 'Berat', 4),
(46, 'Sedang', 'Berat', 'Normal', 4),
(47, 'Sedang', 'Berat', 'Ringan', 4),
(48, 'Sedang', 'Berat', 'Sedang', 4),
(49, 'Sedang', 'Berat', 'Berat', 4),
(50, 'Berat', 'Normal', 'Normal', 3),
(51, 'Berat', 'Normal', 'Ringan', 3),
(52, 'Berat', 'Normal', 'Sedang', 4),
(53, 'Berat', 'Normal', 'Berat', 4),
(54, 'Berat', 'Ringan', 'Normal', 3),
(55, 'Berat', 'Ringan', 'Ringan', 4),
(56, 'Berat', 'Ringan', 'Sedang', 4),
(57, 'Berat', 'Ringan', 'Berat', 4),
(58, 'Berat', 'Sedang', 'Normal', 4),
(59, 'Berat', 'Sedang', 'Ringan', 4),
(60, 'Berat', 'Sedang', 'Sedang', 4),
(61, 'Berat', 'Sedang', 'Berat', 4),
(62, 'Berat', 'Berat', 'Normal', 4),
(63, 'Berat', 'Berat', 'Ringan', 4),
(64, 'Berat', 'Berat', 'Sedang', 4),
(65, 'Berat', 'Berat', 'Berat', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(5) NOT NULL,
  `var_linguistik` varchar(50) NOT NULL,
  `Y` float(10,2) NOT NULL,
  `Q` float(10,2) NOT NULL,
  `Z` float(10,2) NOT NULL,
  `id_dimensi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `var_linguistik`, `Y`, `Q`, `Z`, `id_dimensi`) VALUES
(1, 'Normal', 8.00, 8.00, 16.00, 1),
(2, 'Ringan', 8.00, 16.00, 24.00, 1),
(3, 'Sedang', 16.00, 24.00, 32.00, 1),
(4, 'Berat', 24.00, 32.00, 32.00, 1),
(5, 'Normal', 7.00, 7.00, 14.00, 2),
(6, 'Ringan', 7.00, 14.00, 21.00, 2),
(7, 'Sedang', 14.00, 21.00, 28.00, 2),
(8, 'Berat', 21.00, 28.00, 28.00, 2),
(9, 'Normal', 5.00, 5.00, 10.00, 3),
(10, 'Ringan', 5.00, 10.00, 15.00, 3),
(11, 'Sedang', 10.00, 15.00, 20.00, 3),
(12, 'Berat', 15.00, 20.00, 20.00, 3);

-- --------------------------------------------------------

--
-- Table structure for table `buat_aturan`
--

CREATE TABLE `buat_aturan` (
  `id_buat_aturan` int(5) NOT NULL,
  `dimensi1` varchar(50) NOT NULL,
  `dimensi2` varchar(50) NOT NULL,
  `dimensi3` varchar(50) NOT NULL,
  `bobot1` float(10,2) NOT NULL,
  `bobot2` float(10,2) NOT NULL,
  `bobot3` float(10,2) NOT NULL,
  `id_anak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buat_aturan`
--

INSERT INTO `buat_aturan` (`id_buat_aturan`, `dimensi1`, `dimensi2`, `dimensi3`, `bobot1`, `bobot2`, `bobot3`, `id_anak`) VALUES
(73, 'Normal', 'Ringan', 'Normal', 0.62, 0.29, 0.60, 3),
(74, 'Normal', 'Ringan', 'Ringan', 0.62, 0.29, 0.40, 3),
(75, 'Normal', 'Sedang', 'Normal', 0.62, 0.71, 0.60, 3),
(76, 'Normal', 'Sedang', 'Ringan', 0.62, 0.71, 0.40, 3),
(77, 'Ringan', 'Ringan', 'Normal', 0.38, 0.29, 0.60, 3),
(78, 'Ringan', 'Ringan', 'Ringan', 0.38, 0.29, 0.40, 3),
(79, 'Ringan', 'Sedang', 'Normal', 0.38, 0.71, 0.60, 3),
(80, 'Ringan', 'Sedang', 'Ringan', 0.38, 0.71, 0.40, 3),
(153, 'Ringan', 'Normal', 'Normal', 0.75, 0.43, 1.00, 6),
(154, 'Ringan', 'Ringan', 'Normal', 0.75, 0.57, 1.00, 6),
(155, 'Sedang', 'Normal', 'Normal', 0.25, 0.43, 1.00, 6),
(156, 'Sedang', 'Ringan', 'Normal', 0.25, 0.57, 1.00, 6);

-- --------------------------------------------------------

--
-- Table structure for table `defuzzifikasi`
--

CREATE TABLE `defuzzifikasi` (
  `id_defuzzifikasi` int(5) NOT NULL,
  `id_anak` int(5) NOT NULL,
  `a_predikat` float(10,2) NOT NULL,
  `z_score` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `defuzzifikasi`
--

INSERT INTO `defuzzifikasi` (`id_defuzzifikasi`, `id_anak`, `a_predikat`, `z_score`) VALUES
(81, 3, 0.29, 27.10),
(82, 3, 0.29, 27.10),
(83, 3, 0.60, 36.70),
(84, 3, 0.40, 37.80),
(85, 3, 0.29, 38.41),
(86, 3, 0.29, 38.41),
(87, 3, 0.38, 47.91),
(88, 3, 0.38, 47.91),
(169, 6, 0.43, 25.70),
(170, 6, 0.57, 36.87),
(171, 6, 0.25, 38.62),
(172, 6, 0.25, 48.62);

-- --------------------------------------------------------

--
-- Table structure for table `dimensi`
--

CREATE TABLE `dimensi` (
  `id_dimensi` int(5) NOT NULL,
  `nama_dimensi` varchar(50) NOT NULL,
  `ket_dimensi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dimensi`
--

INSERT INTO `dimensi` (`id_dimensi`, `nama_dimensi`, `ket_dimensi`) VALUES
(1, 'Aktifitas Fisik', 'Aktifitas fisik adalah aktifitas penggunaan gadget pada anak'),
(2, 'Emosional', 'Emosional adalah sesuatu yang menyentuh perasaan. Ini bisa berupa ekspresi, respons, atau wujud apapun tentang emosi dalam kondisi penggunaan gadget'),
(3, 'Interaksi Sosial', 'Interaksi sosial adalah hubungan antara dua orang atau lebih yang aksinya dari individu dapat mempengaruhi / mengubah kehidupan individu lain');

-- --------------------------------------------------------

--
-- Table structure for table `fuzzifikasi`
--

CREATE TABLE `fuzzifikasi` (
  `id_fuzzifikasi` int(5) NOT NULL,
  `id_anak` int(5) NOT NULL,
  `id_dimensi` int(5) NOT NULL,
  `var_linguistik` varchar(50) NOT NULL,
  `bil_fuzzy` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuzzifikasi`
--

INSERT INTO `fuzzifikasi` (`id_fuzzifikasi`, `id_anak`, `id_dimensi`, `var_linguistik`, `bil_fuzzy`) VALUES
(13, 3, 1, 'Normal', 0.62),
(14, 3, 1, 'Ringan', 0.38),
(15, 3, 2, 'Ringan', 0.29),
(16, 3, 2, 'Sedang', 0.71),
(17, 3, 3, 'Normal', 0.60),
(18, 3, 3, 'Ringan', 0.40),
(31, 6, 1, 'Ringan', 0.75),
(32, 6, 1, 'Sedang', 0.25),
(33, 6, 2, 'Normal', 0.43),
(34, 6, 2, 'Ringan', 0.57),
(35, 6, 3, 'Normal', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE `hasil` (
  `id_hasil` int(5) NOT NULL,
  `id_anak` int(5) NOT NULL,
  `tingkat_kecanduan` varchar(50) NOT NULL,
  `skor_pakar` int(3) NOT NULL,
  `hasil_hitung` float(10,2) NOT NULL,
  `kecanduan_fuzzy` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hasil`
--

INSERT INTO `hasil` (`id_hasil`, `id_anak`, `tingkat_kecanduan`, `skor_pakar`, `hasil_hitung`, `kecanduan_fuzzy`, `status`) VALUES
(2, 3, 'Ringan', 37, 38.20, 'Ringan', 'Sesuai'),
(5, 6, 'Ringan', 34, 35.92, 'Ringan', 'Sesuai');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id_jawaban` int(5) NOT NULL,
  `dimensi1` int(3) NOT NULL,
  `dimensi2` int(3) NOT NULL,
  `dimensi3` int(3) NOT NULL,
  `id_anak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id_jawaban`, `dimensi1`, `dimensi2`, `dimensi3`, `id_anak`) VALUES
(23, 1, 0, 0, 3),
(24, 1, 0, 0, 3),
(25, 0, 3, 0, 3),
(26, 0, 1, 0, 3),
(27, 0, 2, 0, 3),
(28, 1, 0, 0, 3),
(29, 2, 0, 0, 3),
(30, 0, 0, 2, 3),
(31, 0, 0, 2, 3),
(32, 0, 4, 0, 3),
(33, 3, 0, 0, 3),
(34, 1, 0, 0, 3),
(35, 0, 4, 0, 3),
(36, 0, 0, 1, 3),
(37, 0, 1, 0, 3),
(38, 1, 0, 0, 3),
(39, 0, 4, 0, 3),
(40, 1, 0, 0, 3),
(41, 0, 0, 1, 3),
(42, 0, 0, 1, 3),
(83, 2, 0, 0, 6),
(84, 2, 0, 0, 6),
(85, 0, 1, 0, 6),
(86, 0, 1, 0, 6),
(87, 0, 2, 0, 6),
(88, 3, 0, 0, 6),
(89, 1, 0, 0, 6),
(90, 0, 0, 1, 6),
(91, 0, 0, 1, 6),
(92, 0, 3, 0, 6),
(93, 4, 0, 0, 6),
(94, 2, 0, 0, 6),
(95, 0, 1, 0, 6),
(96, 0, 0, 1, 6),
(97, 0, 2, 0, 6),
(98, 3, 0, 0, 6),
(99, 0, 1, 0, 6),
(100, 1, 0, 0, 6),
(101, 0, 0, 1, 6),
(102, 0, 0, 1, 6);

-- --------------------------------------------------------

--
-- Table structure for table `kecanduan`
--

CREATE TABLE `kecanduan` (
  `id_tingkat_kecanduan` int(5) NOT NULL,
  `tingkat_kecanduan` varchar(50) NOT NULL,
  `batas_bawah` float(4,2) NOT NULL,
  `batas_atas` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecanduan`
--

INSERT INTO `kecanduan` (`id_tingkat_kecanduan`, `tingkat_kecanduan`, `batas_bawah`, `batas_atas`) VALUES
(1, 'Normal', 20.00, 30.00),
(2, 'Ringan', 29.00, 40.00),
(3, 'Sedang', 39.00, 50.00),
(4, 'Berat', 49.00, 80.00);

-- --------------------------------------------------------

--
-- Table structure for table `kecanduan_pakar`
--

CREATE TABLE `kecanduan_pakar` (
  `id_kecanduan_pakar` int(5) NOT NULL,
  `tingkat_kecanduan` varchar(50) NOT NULL,
  `skor_min` int(3) NOT NULL,
  `skor_maks` int(3) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecanduan_pakar`
--

INSERT INTO `kecanduan_pakar` (`id_kecanduan_pakar`, `tingkat_kecanduan`, `skor_min`, `skor_maks`, `pesan`) VALUES
(1, 'Normal', 20, 29, 'Anda memiliki penggunaan gadget yang sehat dan seimbang. Tetaplah menjaga pola penggunaan yang bijaksana, memberikan waktu untuk kegiatan di luar gadget, dan tetap berinteraksi dengan orang-orang disekitar anda.'),
(2, 'Ringan', 30, 39, 'Anda mulai menunjukkan tanda-tanda kecanduan ringan terhadap gadget. Penting untuk menyadari penggunaan yang berlebihan dan mencoba mengatur waktu yang lebih seimbang. Berikan batasan pada penggunaan gadget dan alokasikan waktu untuk kegiatan yang bermanfaat.'),
(3, 'Sedang', 40, 49, 'Anda menghadapi tingkat kecanduan sedang terhadap gadget. Penting untuk mengambil langkah-langkah untuk mengurangi ketergantungan pada gadget. Coba tetapkan jadwal penggunaan gadget yang terbatas, batasi akses ke aplikasi yang memicu kecanduan, dan cari alternatif kegiatan  yang lebih produktif dan menyenangkan diluar gadget.'),
(4, 'Berat', 50, 80, 'Anda memiliki tingkat kecanduan yang berat. Perlu adanya perubahan pola mendalam dalam penggunaan gadget. Pertimbangkan untuk mencari bantuan profesional, seperti konselor atau psikolog, yang dapat membantu anda mengatasi kecanduan ini. Bekerjalah untuk mengembangkan kebiasaan baru yang lebih sehat dan mengalokasikan waktu untuk kegiatan yang tidak melibatkan gadget.');

-- --------------------------------------------------------

--
-- Table structure for table `kepakaran`
--

CREATE TABLE `kepakaran` (
  `id_kepakaran` int(5) NOT NULL,
  `dimensi1` int(3) NOT NULL,
  `dimensi2` int(3) NOT NULL,
  `dimensi3` int(3) NOT NULL,
  `skor_pakar` int(3) NOT NULL,
  `id_anak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kepakaran`
--

INSERT INTO `kepakaran` (`id_kepakaran`, `dimensi1`, `dimensi2`, `dimensi3`, `skor_pakar`, `id_anak`) VALUES
(3, 11, 19, 7, 37, 3),
(6, 18, 11, 5, 34, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaan`
--

CREATE TABLE `pertanyaan` (
  `id_pertanyaan` int(5) NOT NULL,
  `pernyataan1` varchar(150) NOT NULL,
  `pernyataan2` varchar(150) NOT NULL,
  `pernyataan3` varchar(150) NOT NULL,
  `pernyataan4` varchar(150) NOT NULL,
  `bobot1` int(3) NOT NULL,
  `bobot2` int(3) NOT NULL,
  `bobot3` int(3) NOT NULL,
  `bobot4` int(3) NOT NULL,
  `id_dimensi` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pertanyaan`
--

INSERT INTO `pertanyaan` (`id_pertanyaan`, `pernyataan1`, `pernyataan2`, `pernyataan3`, `pernyataan4`, `bobot1`, `bobot2`, `bobot3`, `bobot4`, `id_dimensi`) VALUES
(1, 'Saya selalu menggunakan gadget lebih dari 6 jam dalam 1 hari', 'Saya sering menggunakan gadget lebih dari 6 jam dalam 1 hari', 'Saya kadang-kadang menggunakan gadget lebih dari 6 jam dalam 1 hari', 'Saya tidak pernah menggunakan gadget lebih dari 6 jam dalam 1 hari', 4, 3, 2, 1, 1),
(2, 'Saya selalu malas melakukan sesuatu saat saya telah menggunakan gadget atau perangkat saya', 'Saya sering malas melakukan sesuatu saat saya telah menggunakan gadget atau perangkat saya', 'Saya kadang-kadang malas melakukan sesuatu saat saya telah menggunakan gadget atau perangkat saya', 'Saya tidak pernah malas melakukan sesuatu saat saya telah menggunakan gadget atau perangkat saya', 4, 3, 2, 1, 1),
(3, 'Saya selalu merasa kesal jika tidak ada internet di gadget atau perangkat yang saya gunakan', 'Saya sering merasa kesal jika tidak ada internet di gadget atau perangkat yang saya gunakan', 'Saya kadang-kadang merasa kesal jika tidak ada internet di gadget atau perangkat yang saya gunakan', 'Saya tidak pernah merasa kesal jika tidak ada internet di gadget atau perangkat yang saya gunakan', 4, 3, 2, 1, 2),
(4, 'Saya selalu marah jika saya disuruh berhenti menggunakan gadget atau perangkat saya', 'Saya sering marah jika saya disuruh berhenti menggunakan gadget atau perangkat saya', 'Saya kadang-kadang marah jika saya disuruh berhenti menggunakan gadget atau perangkat saya', 'Saya tidak pernah marah jika saya disuruh berhenti menggunakan gadget atau perangkat saya', 4, 3, 2, 1, 2),
(5, 'Saya selalu merasa frustrasi ketika diminta untuk berhenti menggunakan gadget atau perangkat saya', 'Saya sering merasa frustrasi ketika diminta untuk berhenti menggunakan gadget atau perangkat saya', 'Saya kadang-kadang merasa frustrasi ketika diminta untuk berhenti menggunakan gadget atau perangkat saya', 'Saya tidak pernah merasa frustrasi ketika diminta untuk berhenti menggunakan gadget atau perangkat saya', 4, 3, 2, 1, 2),
(6, 'Ketika saya tidak diperbolehkan bermain gadget, saya selalu mencuri-curi waktu untuk bermain gadget saat orangtua saya sedang asyik beraktifitas', 'Ketika saya tidak diperbolehkan bermain gadget, saya sering mencuri-curi waktu untuk bermain gadget saat orangtua saya sedang asyik beraktifitas', 'Ketika saya tidak diperbolehkan bermain gadget, saya kadang-kadang mencuri-curi waktu untuk bermain gadget saat orangtua saya sedang asyik beraktifita', 'Ketika saya tidak diperbolehkan bermain gadget, saya tidak pernah mencuri-curi waktu untuk bermain gadget saat orangtua saya sedang asyik beraktifitas', 4, 3, 2, 1, 1),
(7, 'Ketika makan, selalu dengan gadget di samping saya ', 'Ketika makan, sering dengan gadget di samping saya', 'Ketika makan, kadang-kadang dengan gadget di samping saya', 'Ketika makan, tidak pernah dengan gadget di samping saya', 4, 3, 2, 1, 1),
(8, 'Saya selalu merasa lebih menyukai berbicara dengan teman melalui gadget', 'Saya sering merasa lebih menyukai berbicara dengan teman melalui gadget', 'Saya kadang-kadang merasa lebih menyukai berbicara dengan teman melalui gadget', 'Saya tidak pernah merasa lebih menyukai berbicara dengan teman melalui gadget', 4, 3, 2, 1, 3),
(9, 'Saya selalu merasa lebih nyaman menggunakan gadget, dibandingkan harus bermain di luar bersama teman saya', 'Saya sering merasa lebih nyaman menggunakan gadget, dibandingkan harus bermain di luar bersama teman saya', 'Saya kadang-kadang merasa lebih nyaman menggunakan gadget, dibandingkan harus bermain di luar bersama teman saya', 'Saya tidak pernah merasa lebih nyaman menggunakan gadget, dibandingkan harus bermain di luar bersama teman saya', 4, 3, 2, 1, 3),
(10, 'Saya selalu merasa gelisah saat tidak memegang gadget', 'Saya sering merasa gelisah saat tidak memegang gadget', 'Saya kadang-kadang merasa gelisah saat tidak memegang gadget', 'Saya tidak pernah merasa gelisah saat tidak memegang gadget', 4, 3, 2, 1, 2),
(11, 'Saya selalu kurang tidur karena saya menggunakan gadget', 'Saya sering kurang tidur karena saya menggunakan gadget', 'Saya kadang-kadang kurang tidur karena saya menggunakan gadget', 'Saya tidak pernah kurang tidur karena saya menggunakan gadget', 4, 3, 2, 1, 1),
(12, 'Ketika bangun tidur, saya selalu mencari gadget', 'Ketika bangun tidur, saya sering mencari gadget', 'Ketika bangun tidur, saya kadang-kadang mencari gadget', 'Ketika bangun tidur, saya tidak pernah mencari gadget', 4, 3, 2, 1, 1),
(13, 'Saya selalu berdebat dengan orang tua saya, ketika mereka meminta saya untuk berhenti menggunakan gadget', 'Saya sering berdebat dengan orang tua saya, ketika mereka meminta saya untuk berhenti menggunakan gadget', 'Saya kadang-kadang berdebat dengan orang tua saya, ketika mereka meminta saya untuk berhenti menggunakan gadget', 'Saya tidak pernah berdebat dengan orang tua saya, ketika mereka meminta saya untuk berhenti menggunakan gadget', 4, 3, 2, 1, 2),
(14, 'Orang tua saya selalu membiarkan saya bermain gadget atau perangkat saya, walaupun saya tidak memperdulikan sekitar saya', 'Orang tua saya sering membiarkan saya bermain gadget atau perangkat saya, walaupun saya tidak memperdulikan sekitar saya', 'Orang tua saya kadang-kadang membiarkan saya bermain gadget atau perangkat saya, walaupun saya tidak memperdulikan sekitar saya', 'Orang tua saya tidak pernah membiarkan saya bermain gadget atau perangkat saya, walaupun saya tidak memperdulikan sekitar saya', 4, 3, 2, 1, 3),
(15, 'Saya selalu memberontak ketika diganggu saat sedang bermain gadget atau perangkat saya', 'Saya sering memberontak ketika diganggu saat sedang bermain gadget atau perangkat saya', 'Saya kadang-kadang memberontak ketika diganggu saat sedang bermain gadget atau perangkat saya', 'Saya tidak pernah memberontak ketika diganggu saat sedang bermain gadget atau perangkat saya', 4, 3, 2, 1, 2),
(16, 'Saya selalu berbohong kepada orangtua saya tentang apa yang saya lakukan digadget atau perangkat saya', 'Saya sering berbohong kepada orangtua saya tentang apa yang saya lakukan digadget atau perangkat saya', 'Saya kadang-kadang berbohong kepada orangtua saya tentang apa yang saya lakukan digadget atau perangkat saya', 'Saya tidak pernah berbohong kepada orangtua saya tentang apa yang saya lakukan digadget atau perangkat saya', 4, 3, 2, 1, 1),
(17, 'Saya selalu menjadi adiksi (perasaan senang dan bahagia saat diizinkan atau diberikan gadget oleh orang tua saya)', 'Saya sering menjadi adiksi (perasaan senang dan bahagia saat diizinkan atau diberikan gadget oleh orang tua saya)', 'Saya kadang-kadang menjadi adiksi (perasaan senang dan bahagia saat diizinkan atau diberikan gadget oleh orang tua saya)', 'Saya tidak pernah menjadi adiksi (perasaan senang dan bahagia saat diizinkan atau diberikan gadget oleh orang tua saya)', 4, 3, 2, 1, 2),
(18, 'Saya selalu sulit berkonsentrasi saat mengerjakan sesuatu karena memikirkan gadget atau perangkat saya', 'Saya sering sulit berkonsentrasi saat mengerjakan sesuatu karena memikirkan gadget atau perangkat saya', 'Saya kadang-kadang sulit berkonsentrasi saat mengerjakan sesuatu karena memikirkan gadget atau perangkat saya', 'Saya tidak pernah sulit berkonsentrasi saat mengerjakan sesuatu karena memikirkan gadget atau perangkat saya', 4, 3, 2, 1, 1),
(19, 'Saya selalu acuh saat diajak bicara atau dinasehati orang lain karena fokus dengan gadget atau perangkat saya', 'Saya sering acuh saat diajak bicara atau dinasehati orang lain karena fokus dengan gadget atau perangkat saya', 'Saya kadang-kadang acuh saat diajak bicara atau dinasehati orang lain karena fokus dengan gadget atau perangkat saya', 'Saya tidak pernah acuh saat diajak bicara atau dinasehati orang lain karena fokus dengan gadget atau perangkat saya', 4, 3, 2, 1, 3),
(20, 'Saat sedang diajak berbicara atau berinteraksi, saya selalu tidak nyambung', 'Saat sedang diajak berbicara atau berinteraksi, saya sering tidak nyambung', 'Saat sedang diajak berbicara atau berinteraksi, saya kadang-kadang tidak nyambung', 'Saat sedang diajak berbicara atau berinteraksi, saya tidak pernah tidak nyambung', 4, 3, 2, 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`id_aturan`),
  ADD KEY `fk_kecanduan_tb_aturan` (`id_tingkat_kecanduan`) USING BTREE;

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`),
  ADD KEY `fk_dimensi_tb_bobot` (`id_dimensi`) USING BTREE;

--
-- Indexes for table `buat_aturan`
--
ALTER TABLE `buat_aturan`
  ADD PRIMARY KEY (`id_buat_aturan`),
  ADD KEY `fk_anak_tb_buat_aturan` (`id_anak`);

--
-- Indexes for table `defuzzifikasi`
--
ALTER TABLE `defuzzifikasi`
  ADD PRIMARY KEY (`id_defuzzifikasi`),
  ADD KEY `fk_nama_tb_defuzzifikasi` (`id_anak`);

--
-- Indexes for table `dimensi`
--
ALTER TABLE `dimensi`
  ADD PRIMARY KEY (`id_dimensi`);

--
-- Indexes for table `fuzzifikasi`
--
ALTER TABLE `fuzzifikasi`
  ADD PRIMARY KEY (`id_fuzzifikasi`),
  ADD KEY `fk_nama_tb_fuzzifikasi` (`id_anak`),
  ADD KEY `fk_dimensi_tb_fuzzifikasi` (`id_dimensi`);

--
-- Indexes for table `hasil`
--
ALTER TABLE `hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `fk_nama_tb_hasil` (`id_anak`) USING BTREE;

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `fk_nama_tb_jawaban` (`id_anak`) USING BTREE;

--
-- Indexes for table `kecanduan`
--
ALTER TABLE `kecanduan`
  ADD PRIMARY KEY (`id_tingkat_kecanduan`);

--
-- Indexes for table `kecanduan_pakar`
--
ALTER TABLE `kecanduan_pakar`
  ADD PRIMARY KEY (`id_kecanduan_pakar`);

--
-- Indexes for table `kepakaran`
--
ALTER TABLE `kepakaran`
  ADD PRIMARY KEY (`id_kepakaran`),
  ADD KEY `fk_nama_tb_kepakaran` (`id_anak`) USING BTREE;

--
-- Indexes for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD KEY `fk_dimensi_tb_pertanyaan` (`id_dimensi`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aturan`
--
ALTER TABLE `aturan`
  MODIFY `id_aturan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `buat_aturan`
--
ALTER TABLE `buat_aturan`
  MODIFY `id_buat_aturan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT for table `defuzzifikasi`
--
ALTER TABLE `defuzzifikasi`
  MODIFY `id_defuzzifikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `dimensi`
--
ALTER TABLE `dimensi`
  MODIFY `id_dimensi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fuzzifikasi`
--
ALTER TABLE `fuzzifikasi`
  MODIFY `id_fuzzifikasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `hasil`
--
ALTER TABLE `hasil`
  MODIFY `id_hasil` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id_jawaban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `kecanduan`
--
ALTER TABLE `kecanduan`
  MODIFY `id_tingkat_kecanduan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kecanduan_pakar`
--
ALTER TABLE `kecanduan_pakar`
  MODIFY `id_kecanduan_pakar` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kepakaran`
--
ALTER TABLE `kepakaran`
  MODIFY `id_kepakaran` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  MODIFY `id_pertanyaan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aturan`
--
ALTER TABLE `aturan`
  ADD CONSTRAINT `aturan_ibfk_1` FOREIGN KEY (`id_tingkat_kecanduan`) REFERENCES `kecanduan` (`id_tingkat_kecanduan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bobot`
--
ALTER TABLE `bobot`
  ADD CONSTRAINT `bobot_ibfk_1` FOREIGN KEY (`id_dimensi`) REFERENCES `dimensi` (`id_dimensi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `buat_aturan`
--
ALTER TABLE `buat_aturan`
  ADD CONSTRAINT `buat_aturan_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `defuzzifikasi`
--
ALTER TABLE `defuzzifikasi`
  ADD CONSTRAINT `defuzzifikasi_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fuzzifikasi`
--
ALTER TABLE `fuzzifikasi`
  ADD CONSTRAINT `fuzzifikasi_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hasil`
--
ALTER TABLE `hasil`
  ADD CONSTRAINT `hasil_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kepakaran`
--
ALTER TABLE `kepakaran`
  ADD CONSTRAINT `kepakaran_ibfk_1` FOREIGN KEY (`id_anak`) REFERENCES `anak` (`id_anak`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaan`
--
ALTER TABLE `pertanyaan`
  ADD CONSTRAINT `pertanyaan_ibfk_1` FOREIGN KEY (`id_dimensi`) REFERENCES `dimensi` (`id_dimensi`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
