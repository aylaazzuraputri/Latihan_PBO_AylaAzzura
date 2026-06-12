-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 12, 2026 at 03:03 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan_pbo_trpl1a_aylaazzura`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tiket`
--

CREATE TABLE `tabel_tiket` (
  `id_tiket` int NOT NULL,
  `nama_film` varchar(150) NOT NULL,
  `jadwal_tayang` datetime NOT NULL,
  `jumlah_kursi` int NOT NULL,
  `harga_dasar_tiket` decimal(10,2) NOT NULL,
  `jenis_studio` enum('Reguler','IMAX','Velvet') NOT NULL,
  `tipe_audio` varchar(50) DEFAULT NULL,
  `lokasi_baris` varchar(5) DEFAULT NULL,
  `kacamata_3d_id` varchar(50) DEFAULT NULL,
  `efek_gerak_fitur` varchar(100) DEFAULT NULL,
  `bantal_selimut_pack` varchar(50) DEFAULT NULL,
  `layanan_butler` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_tiket`
--

INSERT INTO `tabel_tiket` (`id_tiket`, `nama_film`, `jadwal_tayang`, `jumlah_kursi`, `harga_dasar_tiket`, `jenis_studio`, `tipe_audio`, `lokasi_baris`, `kacamata_3d_id`, `efek_gerak_fitur`, `bantal_selimut_pack`, `layanan_butler`) VALUES
(1, 'Siksa Kubur', '2026-06-15 13:00:00', 1, 45000.00, 'Reguler', 'Dolby Digital 7.1', 'Row G', NULL, NULL, NULL, NULL),
(2, 'Agak Laen', '2026-06-15 15:30:00', 2, 45000.00, 'Reguler', 'Standard Stereo', 'Row F', NULL, NULL, NULL, NULL),
(3, 'Exhuma', '2026-06-15 18:00:00', 1, 50000.00, 'Reguler', 'Dolby Digital 7.1', 'Row E', NULL, NULL, NULL, NULL),
(4, 'Godzilla x Kong', '2026-06-15 20:45:00', 3, 50000.00, 'Reguler', 'DTS:X Standard', 'Row D', NULL, NULL, NULL, NULL),
(5, 'Kung Fu Panda 4', '2026-06-16 11:00:00', 4, 40000.00, 'Reguler', 'Standard Stereo', 'Row H', NULL, NULL, NULL, NULL),
(6, 'Bad Boys: Ride or Die', '2026-06-16 14:00:00', 2, 45000.00, 'Reguler', 'Dolby Digital 7.1', 'Row F', NULL, NULL, NULL, NULL),
(7, 'Inside Out 2', '2026-06-16 16:30:00', 2, 45000.00, 'Reguler', 'Standard Stereo', 'Row G', NULL, NULL, NULL, NULL),
(8, 'A Quiet Place: Day One', '2026-06-16 19:15:00', 1, 50000.00, 'Reguler', 'Dolby Digital 7.1', 'Row E', NULL, NULL, NULL, NULL),
(9, 'Avatar 3: Fire and Ash', '2026-06-17 13:00:00', 1, 75000.00, 'IMAX', 'Dolby Atmos IMAX', 'Row D', 'GLASSES-IMAX-01', 'Getaran Kursi', NULL, NULL),
(10, 'Avengers: Doomsday', '2026-06-17 16:15:00', 2, 85000.00, 'IMAX', 'Dolby Atmos IMAX', 'Row C', NULL, 'Efek Angin & Getaran', NULL, NULL),
(11, 'Interstellar (Re-issue)', '2026-06-17 20:00:00', 1, 75000.00, 'IMAX', 'IMAX 12-Channel', 'Row B', NULL, 'Getaran Kursi Heavy', NULL, NULL),
(12, 'Dune: Part Two', '2026-06-18 12:45:00', 2, 75000.00, 'IMAX', 'IMAX 12-Channel', 'Row C', NULL, 'Efek Angin', NULL, NULL),
(13, 'Oppenheimer', '2026-06-18 16:00:00', 1, 75000.00, 'IMAX', 'IMAX 6-Channel Track', 'Row A', NULL, NULL, NULL, NULL),
(14, 'Kingdom of the Planet of the Apes', '2026-06-18 19:30:00', 4, 80000.00, 'IMAX', 'Dolby Atmos IMAX', 'Row D', 'GLASSES-IMAX-02', 'Efek Air & Getaran', NULL, NULL),
(15, 'Deadpool & Wolverine', '2026-06-19 14:00:00', 2, 85000.00, 'IMAX', 'Dolby Atmos IMAX', 'Row B', 'GLASSES-IMAX-03', 'Efek Kilatan Cahaya', NULL, NULL),
(16, 'Furiosa: A Mad Max Saga', '2026-06-19 17:30:00', 2, 80000.00, 'IMAX', 'IMAX 12-Channel', 'Row C', NULL, 'Efek Guncangan Penuh', NULL, NULL),
(17, 'The Batman Part II', '2026-06-20 14:00:00', 2, 150000.00, 'Velvet', NULL, 'Row A', NULL, NULL, 'Premium Pack (2 Bantal, 1 Selimut)', 'Tersedia (Tombol Panggil)'),
(18, 'Dune: Part Three', '2026-06-20 17:15:00', 2, 150000.00, 'Velvet', NULL, 'Row B', NULL, NULL, 'Standard Pack (1 Bantal, 1 Selimut)', 'Tersedia (Tombol Panggil)'),
(19, 'Challengers', '2026-06-20 20:30:00', 2, 175000.00, 'Velvet', NULL, 'Row A', NULL, NULL, 'Premium Pack (2 Bantal, 2 Selimut)', 'Layanan Butler Eksklusif'),
(20, 'The Joker: Folie a Deux', '2026-06-21 13:00:00', 2, 150000.00, 'Velvet', NULL, 'Row C', NULL, NULL, 'Standard Pack (1 Bantal, 1 Selimut)', 'Tersedia (Tombol Panggil)'),
(21, 'Gladiator II', '2026-06-21 16:00:00', 2, 150000.00, 'Velvet', NULL, 'Row B', NULL, NULL, 'Standard Pack (2 Bantal, 1 Selimut)', 'Tersedia (Tombol Panggil)'),
(22, 'Wicked', '2026-06-21 19:30:00', 2, 175000.00, 'Velvet', NULL, 'Row A', NULL, NULL, 'Premium Pack (2 Bantal, 2 Selimut)', 'Layanan Butler Eksklusif'),
(23, 'The Fall Guy', '2026-06-22 15:00:00', 2, 150000.00, 'Velvet', NULL, 'Row B', NULL, NULL, 'Standard Pack (1 Bantal, 1 Selimut)', 'Tersedia (Tombol Panggil)'),
(24, 'Despicable Me 4', '2026-06-22 18:00:00', 2, 150000.00, 'Velvet', NULL, 'Row C', NULL, NULL, 'Standard Pack (2 Bantal, 1 Selimut)', 'Tersedia (Tombol Panggil)');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_tiket`
--
ALTER TABLE `tabel_tiket`
  MODIFY `id_tiket` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
