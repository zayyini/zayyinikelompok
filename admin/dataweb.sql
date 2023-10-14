-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2023 at 06:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataweb2314`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(11) NOT NULL,
  `berita_judul` varchar(150) NOT NULL,
  `berita_isi` text NOT NULL,
  `berita_gambar` varchar(25) NOT NULL,
  `berita_tanggal` date NOT NULL,
  `user_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`berita_id`, `berita_judul`, `berita_isi`, `berita_gambar`, `berita_tanggal`, `user_nama`) VALUES
(1, 'Latihan Praktikum 9', 'Belajar menggunakan PHPMYADMIN', 'uploads/php.jpg', '2023-10-01', 'irma'),
(2, 'Ini berita 2', 'belajar upload gambar', 'uploads/pemandangan.jpeg', '2023-10-14', 'far'),
(3, 'Dies Natalis ke-29 Universitas Amikom Yogyakarta Hadirkan Program Doktoral (S3) Informatika', 'Universitas Amikom Yogyakarta mendapat kado terindah berupa keluarnya izin pembukaan Program Studi Informatika Program Doktoral Universitas Amikom Yogyakarta dalam Sidang Senat Terbuka yang juga menjadi Puncak dari Rangkaian acara Dies Natalis Universitas Amikom ke 29, yang diadakan di Ruang Cinema Universitas Amikom Yogyakarta (11 Oktober 2023).', 'uploads/diesnatalis.jpg', '2023-10-14', 'far');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_nama` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_namalengkap` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_nama`, `user_password`, `user_namalengkap`, `user_email`) VALUES
('far', '1511', 'farikha', 'farikhanasywa@students.amikom.ac.id'),
('fatih', '4321', 'El Fatih', 'fatih@gmail.com'),
('irma', '1234', 'irma rofni', 'irma@gmail.com'),
('sumo', '1234', 'sumosuki', 'sempurna@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`berita_id`),
  ADD KEY `user_nama` (`user_nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `berita_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`user_nama`) REFERENCES `user` (`user_nama`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
