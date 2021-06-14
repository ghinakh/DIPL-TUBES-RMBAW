-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 10:18 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama_lengkap`, `email`, `password`) VALUES
(1, 'admin satu', 'admin@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi_web`
--

CREATE TABLE `konfigurasi_web` (
  `id` int(11) NOT NULL,
  `nama_website` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konfigurasi_web`
--

INSERT INTO `konfigurasi_web` (`id`, `nama_website`, `author`, `logo`, `deskripsi`) VALUES
(1, 'Rental Kuy', 'Kelompok 5', 'assets/images/logo.png', 'Rental Kuy is a trusted car rental service with high credibility.');

-- --------------------------------------------------------

--
-- Table structure for table `mobil`
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
  `full` int(1) DEFAULT NULL,
  `url_view` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobil`
--

INSERT INTO `mobil` (`id`, `id_staff`, `stnk`, `nama_mobil`, `jenis`, `harga`, `gambar`, `status`, `full`, `url_view`) VALUES
(2, 3, 5001155, 'Toyota Avanza', 'Bensin', 180000, 'avanza-preview.png', 'Aktif', 0, 'f7b9537b861317161e2cb9eec8462698'),
(3, 1, 125415111, 'Toyota Fortuner', 'Diesel', 320000, 'portuner-preview.png', 'Aktif', 0, '8f99136e6dd0a0e50f191c54236049ac'),
(4, 1, 1231231, 'Sedan1', 'Bensin', 100000, '1622977897-image.jpg', 'Aktif', 0, 'd93e37d3c844cde1acf6d969c9c1eda7'),
(5, 1, 1231231, 'Sedan2', 'Bensin', 250000, '1622977908-image.jpg', 'Aktif', 0, '8e1fcc833a20d91d3694ce10c2eb1ff4'),
(7, 6, 2147483647, 'Hyundai', 'Diesel', 200000, '1623650110-hyundai.png', 'Aktif', 0, '209fa85ba779793cc7048cfb44f8d4a5');

-- --------------------------------------------------------

--
-- Table structure for table `penyewa`
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
-- Dumping data for table `penyewa`
--

INSERT INTO `penyewa` (`id`, `nama_lengkap`, `phone`, `address`, `city`, `province`, `nik`, `sim`, `saldo`, `email`, `password`) VALUES
(1, 'Ghina Kharunisa', '081312161412', 'Jl Pasar Bandung', 'Buah Batu', 'Jawa Barat', 1234567890, 1234567890, '538088', 'user@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(2, 'Aku Cinta', '081203182', 'Jl Sejiwa', 'Bandung', 'Jawa Barat', 12312313, 123121222, '0', 'user@aku.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(3, 'Sari Roti', '085279630555', 'Jl. Sukabirus', 'Kab. Bandung', '', 123456789, 123456789, '200000', 'user2@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(4, 'Masker masker', '', '', '', '', 2147483647, 2147483647, '198336', 'masker@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `kode_promo` varchar(255) NOT NULL,
  `diskon` varchar(120) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `id_mobil`, `id_admin`, `kode_promo`, `diskon`, `deskripsi`) VALUES
(1, 2, 1, 'RENTALKUY', '100000', 'ini deskripsi dari kode promo'),
(2, 3, 1, 'ZXCASD', '25000', 'aaavvvvbbbbbnnnnmmmmmm'),
(4, 7, 1, 'ASDFGHJ', '20000', 'aaaaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `id_mobil` int(11) DEFAULT NULL,
  `id_penyewa` int(11) DEFAULT NULL,
  `id_staff` int(11) DEFAULT NULL,
  `tipe_riwayat` varchar(255) NOT NULL,
  `alamat` text DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `service` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(25) NOT NULL,
  `harga` int(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  `id_url` varchar(255) NOT NULL,
  `dibuat` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `id_mobil`, `id_penyewa`, `id_staff`, `tipe_riwayat`, `alamat`, `tanggal_mulai`, `tanggal_selesai`, `service`, `pembayaran`, `harga`, `status`, `rate`, `note`, `id_url`, `dibuat`) VALUES
(18, NULL, 3, NULL, 'Topup', NULL, NULL, NULL, NULL, 'GOPAY Payment', 200000, '0', NULL, '', '', '2021-06-14'),
(20, 4, 3, 1, 'Rent', 'Jl. Sukabirus', '2021-06-15', '2021-06-16', 'Staff Service', 'COD', 100066, '0', '5', 'mobil bagus, staff ramah', '64c9b472467659b6370434716426cf2a', '2021-06-14'),
(23, 4, 1, 1, 'Rent', 'Jl. Telekomunikasi', '2021-06-25', '2021-06-26', 'Staff Service', 'Saldo', 100276, '0', '3', 'ini text', 'be56ee5ad270cef252e211496f6e45b1', '2021-06-14'),
(24, NULL, 1, NULL, 'Topup', NULL, NULL, NULL, NULL, 'DANA Payment', 500000, '0', NULL, NULL, '', '2021-06-14'),
(25, NULL, 4, NULL, 'Topup', NULL, NULL, NULL, NULL, 'OVO Payment', 600000, '0', NULL, NULL, '', '2021-06-14'),
(26, 7, 4, 6, 'Rent', 'Jl. Sukapura', '2021-06-14', '2021-06-16', 'Self Service', 'Saldo', 401664, '0', '2', 'bad', '0d95a1a2ab7a7ab44b13f3a875452d02', '2021-06-14'),
(27, 7, 3, 6, 'Rent', 'Jl. Sukabirus', '2021-06-30', '2021-07-01', 'Staff Service', 'COD', 200168, '0', '5', 'good', 'd591f435de7d0f01c714d4bd03827b89', '2021-06-14'),
(28, 3, 3, 1, 'Rent', 'Jl. Sukabirus', '2021-07-09', '2021-07-10', 'Self Service', 'COD', 320715, '0', '4', 'nice', '458572391772812e0ee89e26fc5d1683', '2021-06-14'),
(29, NULL, NULL, 6, 'Withdraw', NULL, NULL, NULL, NULL, 'GOPAY Payment', -200000, '0', NULL, NULL, '', '2021-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
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

-- --------------------------------------------------------

--
-- Table structure for table `staff_garasi`
--

CREATE TABLE `staff_garasi` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` int(25) NOT NULL,
  `sim` int(25) NOT NULL,
  `saldo` int(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_garasi`
--

INSERT INTO `staff_garasi` (`id`, `nama_lengkap`, `nik`, `sim`, `saldo`, `email`, `password`, `status`) VALUES
(1, 'Gready Michael', 1215123156, 1321589494, 800276, 'staff@email.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'AKTIF'),
(3, 'Staff Garasi', 987654321, 989876543, 0, 'staffgarasi@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'PENDING'),
(6, 'Julia Ch', 1209837465, 1209837465, 201664, 'julia@gmail.com', 'c2e285cb33cecdbeb83d2189e983a8c0', 'AKTIF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobil`
--
ALTER TABLE `mobil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobil_staff_fk1` (`id_staff`);

--
-- Indexes for table `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promo_mobil_fk1` (`id_mobil`),
  ADD KEY `promo_admin_fk2` (`id_admin`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `riwayat_mobil_fk1` (`id_mobil`),
  ADD KEY `riwayat_penyewa_fk2` (`id_penyewa`),
  ADD KEY `riwayat_staff_fk3` (`id_staff`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `saldo_penyewa_fk1` (`id_penyewa`),
  ADD KEY `saldo_staff_fk2` (`id_staff`);

--
-- Indexes for table `staff_garasi`
--
ALTER TABLE `staff_garasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konfigurasi_web`
--
ALTER TABLE `konfigurasi_web`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mobil`
--
ALTER TABLE `mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penyewa`
--
ALTER TABLE `penyewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_garasi`
--
ALTER TABLE `staff_garasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobil`
--
ALTER TABLE `mobil`
  ADD CONSTRAINT `mobil_staff_fk1` FOREIGN KEY (`id_staff`) REFERENCES `staff_garasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_admin_fk2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `promo_mobil_fk1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD CONSTRAINT `riwayat_mobil_fk1` FOREIGN KEY (`id_mobil`) REFERENCES `mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_penyewa_fk2` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `riwayat_staff_fk3` FOREIGN KEY (`id_staff`) REFERENCES `staff_garasi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
