-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2021 pada 13.21
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_rpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'admin satu', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi_web`
--

CREATE TABLE `konfigurasi_web` (
  `id` int(11) NOT NULL,
  `nama_website` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `konfigurasi_web`
--

INSERT INTO `konfigurasi_web` (`id`, `nama_website`, `author`, `logo`, `deskripsi`) VALUES
(1, 'Rental Kuy', 'Kelompok 5', 'assets/images/logo.png', 'Rental Kuy is a trusted car rental service with high credibility.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mobil`
--

CREATE TABLE `mobil` (
  `id` int(11) NOT NULL,
  `id_staff` int(11) NOT NULL,
  `stnk` int(25) NOT NULL,
  `nama_mobil` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `harga` int(60) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status` varchar(60) DEFAULT NULL,
  `rating` float NOT NULL,
  `url_view` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mobil`
--

INSERT INTO `mobil` (`id`, `id_staff`, `stnk`, `nama_mobil`, `jenis`, `harga`, `gambar`, `status`, `rating`, `url_view`) VALUES
(2, 3, 5001155, 'Toyota Avanza', 'Bensin', 180000, 'avanza-preview.png', 'Aktif', 4.5, 'f7b9537b861317161e2cb9eec8462698'),
(3, 1, 125415111, 'Toyota Fortuner', 'Diesel', 320000, 'portuner-preview.png', 'Aktif', 0, '8f99136e6dd0a0e50f191c54236049ac'),
(4, 1, 1231231, 'asa', 'Bensin', 123123123, '1622977897-image.jpg', NULL, 0, 'd93e37d3c844cde1acf6d969c9c1eda7'),
(5, 1, 1231231, 'asa', 'Bensin', 123123123, '1622977908-image.jpg', NULL, 0, '8e1fcc833a20d91d3694ce10c2eb1ff4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `nik` int(25) NOT NULL,
  `sim` int(25) NOT NULL,
  `saldo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`id`, `nama_lengkap`, `phone`, `address`, `city`, `province`, `nik`, `sim`, `saldo`, `email`, `password`) VALUES
(1, 'Ghina Kharunisa', '081312161412', 'Jl Pasar Bandung', 'Buah Batu', 'Jawa Barat', 1234567890, 1234567890, '1000000', 'user@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Aku Cinta', '081203182', 'Jl Sejiwa', 'Bandung', 'Jawa Barat', 12312313, 123121222, '0', 'user@aku.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Struktur dari tabel `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `kode_promo` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `promo`
--

INSERT INTO `promo` (`id`, `id_mobil`, `id_admin`, `kode_promo`, `deskripsi`) VALUES
(1, 2, 1, 'RENTALKUY', 'ini deskripsi dari kode promo'),
(2, 3, 1, 'ASDFGHJ', 'aaavvvvbbbbbnnnnmmmmmm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_penyewa` int(11) NOT NULL,
  `tipe_riwayat` varchar(255) NOT NULL,
  `tanggal_mulai` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `note` text DEFAULT NULL,
  `id_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `id_mobil`, `id_penyewa`, `tipe_riwayat`, `tanggal_mulai`, `tanggal_selesai`, `status`, `rate`, `note`, `id_url`) VALUES
(1, 3, 1, 'Penyewa', '2021-04-18', '2021-04-19', '0', '3', NULL, 'cf2f6ed3086ad55fcce87369a8692a2f'),
(2, 2, 1, 'Penyewa', '2021-04-19', '2021-04-20', '0', '5', 'gila kaleeee', '62690c9c38ccb2e55ef01bf38687507a'),
(3, 3, 2, 'Penyewa', '2021-05-24', '2021-05-26', '0', '1', 'Kotor banget tapi mobil anak muda', '3f76818f507fe7eb6422bd0703c64c88');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saldo`
--

CREATE TABLE `saldo` (
  `id` int(11) NOT NULL,
  `id_penyewa` int(11) DEFAULT NULL,
  `id_staff` int(11) DEFAULT NULL,
  `nominal` int(50) NOT NULL,
  `pembayaran` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `status` int(5) NOT NULL,
  `id_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `saldo`
--

INSERT INTO `saldo` (`id`, `id_penyewa`, `id_staff`, `nominal`, `pembayaran`, `tanggal`, `status`, `id_url`) VALUES
(2, 1, NULL, 999999, 'OVO Payment', '2021-04-26', 0, 'a2b7b07a571b0a6de1794a3153cea321'),
(4, 1, NULL, 1, 'DANA Payment', '2021-06-04', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff_garasi`
--

CREATE TABLE `staff_garasi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` int(25) NOT NULL,
  `sim` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `staff_garasi`
--

INSERT INTO `staff_garasi` (`id`, `nama_lengkap`, `nik`, `sim`, `email`, `password`, `status`) VALUES
(1, 'Gready Michael', 1215123156, 1321589494, 'staff@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'AKTIF'),
(2, 'Joanne Sh', 12334567, 76544332, 'staff2@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'PENDING'),
(3, 'Staff Garasi', 987654321, 989876543, 'staffgarasi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'REJECT');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobil_staff_fk1` (`id_staff`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promo_mobil_fk1` (`id_mobil`),
  ADD KEY `promo_admin_fk2` (`id_admin`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_mobil_fk1` (`id_mobil`),
  ADD KEY `riwayat_penyewa_fk2` (`id_penyewa`);

--
-- Indeks untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saldo_penyewa_fk1` (`id_penyewa`),
  ADD KEY `saldo_staff_fk2` (`id_staff`);

--
-- Indeks untuk tabel `staff_garasi`
--
ALTER TABLE `staff_garasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `staff_garasi`
--
ALTER TABLE `staff_garasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_staff_fk1` FOREIGN KEY (`id_staff`) REFERENCES `staff_garasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_admin_fk2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promo_mobil_fk1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_mobil_fk1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_penyewa_fk2` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `saldo`
--
ALTER TABLE `saldo`
  ADD CONSTRAINT `saldo_penyewa_fk1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `saldo_staff_fk2` FOREIGN KEY (`id_staff`) REFERENCES `staff_garasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
