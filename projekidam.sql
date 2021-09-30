-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2021 pada 17.25
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekidam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id` int(10) NOT NULL,
  `id_inven` int(10) NOT NULL,
  `tgl` date NOT NULL,
  `kondisi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id`, `id_inven`, `tgl`, `kondisi`) VALUES
(9, 12, '2021-09-09', 'Bagus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id` int(10) NOT NULL,
  `nama_brg` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `merk` varchar(20) NOT NULL,
  `stock` int(20) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `id_lokasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id`, `nama_brg`, `tanggal`, `merk`, `stock`, `satuan`, `id_lokasi`) VALUES
(12, 'Mouse', '2021-09-17', 'Lenovo ', 20, 'Unit', 1),
(13, 'Keyboard', '2021-09-28', 'Logitek', 50, 'Unit', 1),
(14, 'CPU', '2021-09-01', 'Legend', 47, 'Unit', 1),
(15, 'Kunci Roda', '2021-09-14', 'Kenmaster N2', 20, 'Buah', 2),
(16, 'Tang Kombinasi', '2021-09-22', 'Bosch 108', 40, 'Buah', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `loginn`
--

CREATE TABLE `loginn` (
  `id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `loginn`
--

INSERT INTO `loginn` (`id`, `username`, `email`, `pass`) VALUES
(1, 'Kidam', 'kidam@k.com', '729dcee1f9ea89870ac04f99355e9d72'),
(2, 'DamZ', 'damz@d.com', 'damz'),
(3, 'Kidam', 'kidam@k.com', 'kidam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lokasi_brg`
--

CREATE TABLE `lokasi_brg` (
  `id` int(10) NOT NULL,
  `lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lokasi_brg`
--

INSERT INTO `lokasi_brg` (`id`, `lokasi`) VALUES
(1, 'Lab'),
(2, 'Bengkel');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_inven` (`id_inven`);

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indeks untuk tabel `loginn`
--
ALTER TABLE `loginn`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lokasi_brg`
--
ALTER TABLE `lokasi_brg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `gudang`
--
ALTER TABLE `gudang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `loginn`
--
ALTER TABLE `loginn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `lokasi_brg`
--
ALTER TABLE `lokasi_brg`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD CONSTRAINT `gudang_ibfk_1` FOREIGN KEY (`id_inven`) REFERENCES `inventaris` (`id`);

--
-- Ketidakleluasaan untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD CONSTRAINT `inventaris_ibfk_1` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi_brg` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
