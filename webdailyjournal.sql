-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2025 at 06:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdailyjournal`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `isi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `gambar` text CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(1, 'MotoGP #1', ' Pembalap Jepang,  Takaaki Nakagami, memiliki tempat khusus di hati semua penggemar MotoGP™. Ia adalah pembalap pertama yang mendaftar di proyek IDEMITSU Honda LCR pada 2018, tahun bersejarah yang menandai dimulainya era baru bagi pembalap Asia di MotoGP™.\r\n\r\n                Setelah tujuh musim penuh dedikasi dan kolaborasi yang intens, Nakagami telah memutuskan untuk memulai babak baru dalam karier olahraganya. Balapan pada 2024 akan menjadi yang terakhir bersama LCR, tetapi warisannya akan terus menginspirasi banyak generasi pembalap.', '5.jpg', '2024-12-19 06:53:41', 'admin'),
(2, 'MotoGP 2', 'Satu-satunya rookie di kelas premier, Augusto Fernandez tampil sangat mengesankan sepanjang debutnya sejauh ini. Reguler cetak poin. Bahkan klaim P4 di Grand Prix Prancis yang menjadi hasil balapan terbaiknya.\r\n                Dan kini, ia akan melanjutkan perjalanannya dalam MotoGP™ hingga 2024, setelah GASGAS Factory Racing Tech3 mengonfirmasinya Sebagian bagian dari jajaran pembalap musim depan, bersama Pedro Acosta ', '6.jpg', '2024-12-19 06:53:41', 'admin'),
(3, 'MotorGP 3', 'Setelah tujuh musim penuh dedikasi dan kolaborasi yang intens, Nakagami telah memutuskan untuk memulai babak baru dalam karier olahraganya. Balapan pada 2024 akan menjadi yang terakhir bersama LCR, tetapi warisannya akan terus menginspirasi banyak generasi pembalap.', '22.jpeg', '2024-12-19 07:27:47', 'admin'),
(4, 'MotoerGP 4', 'Luca Marini, adik tiri Valentino Rossi, mengakhiri kejuaraan CIV Moto3 2013 pada peringkat keempat dengan catatan enam podium. Ia lalu berlomba dalam CEV Moto3 pada 2014, sebelum promosi ke CEV Moto2 European Championship bersama Paginas Amarillas HP 40 Junior. Hanya butuh tiga balapan, Marini berhasil posisi kedua.\"', '41.jpg', '2024-12-19 07:27:47', 'admin'),
(5, 'MotorGP 5', 'Karier balap profesional Jorge Martin dimulai dengan ambil bagian dalam Red Bull Rookies Cup 2012. Sayang, lantaran dilanda berbagai cedera, kinerjanya jadi tak maksimal. Setahun berikutnya, ia mencoba lagi dan menjadi runner-up 2013. Pada 2014, pembalap Spanyol itu tampil dominan dan meraih gelar juara.', '46.jpg', '2024-12-19 07:33:13', 'admin'),
(6, 'MotorGP 6', 'Dalam Konferensi Pers khusus di Gran Premi Monster Energy de Catalunya, Aleix Espargaro (Aprilia Racing) telah mengumumkan akan pensiun dari balap Grand Prix pada akhir musim 2024. #41 telah berkompetisi pada lebih dari 300 Grand Prix sepanjang kariernya selama hampir dua dekade, membangun warisan abadi, termasuk meraih kemenangan perdana dalam era MotoGP™ bersama Aprilia.\"', '47.jpg', '2024-12-19 07:33:13', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` date NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` datetime NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `foto`) VALUES
(0, 'admin', 'e10adc3949ba59abbe56e057f20f883e', ''),
(2, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
