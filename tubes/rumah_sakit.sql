-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 11 Jun 2023 pada 02.42
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumah sakit`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int NOT NULL,
  `judul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `harga` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `deskripsi` varchar(800) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `judul`, `harga`, `deskripsi`, `gambar`) VALUES
(1, 'adqdqdqwd', '30.000', 'Actifed adalah merek dagang yang digunakan untuk beberapa jenis obat yang digunakan untuk mengatasi gejala pilek dan alergi. Biasanya, Actifed mengandung kombinasi antihistamin dan dekongestan. Antihistamin berfungsi untuk mengurangi gejala alergi seperti bersin, hidung berair, dan gatal-gatal, sementara dekongestan membantu meredakan hidung tersumbat dan pembengkakan pada saluran hidung. Actifed tersedia dalam bentuk tablet atau sirup, dan penggunaannya harus sesuai dengan petunjuk dokter atau petunjuk pada kemasan.', '648329d741c64.jpg'),
(13, 'antangin', '100000', 'mengeluarkan angin', '6483319f6b6d7.jpg'),
(14, 'bodrex', '231313', '123213', '648331a7d33ef.jpg'),
(15, 'lo han kuo', '10.000', 'obat tradisional lo han kuo berkhasiat untuk mengatasi panas dalam, sariawan, meredakan batuk, sakit/ radang tenggorokan, membantu menghilangkan dahak, hingga menguatkan paru-paru.   produk ini tersedia dalam bentuk kotak blok yang di dalamnya terkandung sari buah lo han kou serta tambahan gula tebu. anda tinggal melarutkan satu blok lo han kuo ke dalam 100 ml air panas dan kemudian diminum. obat ini dapat diminum 2 kali sehari. ', '6483116c64ce0.jpg'),
(16, 'wd', '12323', 'wadawd', '64831974821ab.jpg'),
(17, 'aedad', '12312', 'ewqdqwd', '6483197bbecea.jpg'),
(18, 'awdawd', '13123', 'awdawd', '648319845b210.jpg'),
(19, 'qwdawd', '1231231', 'adwwadwad', '6483198cabdb5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_telepon` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `default_png` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `alamat`, `email`, `nomor_telepon`, `default_png`, `password`) VALUES
(8, 'user', 'dwi', 'jln hj alpi', 'mfauzandwiputera10@gmail.com', '085701751234', NULL, '$2y$10$djCWPV3OQLsCQRKtCV.X0uO.LfHL0eerd4.UyZVisjjvqyjfzaNfu'),
(10, 'admin', 'admin', 'jln hj alpi', 'fauzan@gmail.com', '323123123', 'admin.png', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
