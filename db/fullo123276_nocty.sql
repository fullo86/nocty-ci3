-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Jun 2022 pada 15.37
-- Versi server: 10.5.12-MariaDB-1:10.5.12+maria~focal
-- Versi PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fullo123276_nocty`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `kd_admin` varchar(10) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `pswd_admin` varchar(50) NOT NULL,
  `hp_admin` varchar(13) NOT NULL,
  `email_admin` varchar(30) NOT NULL,
  `img_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`kd_admin`, `nama_admin`, `pswd_admin`, `hp_admin`, `email_admin`, `img_admin`) VALUES
('admin', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', '08123456789', 'admin@gmail.com', '20210425104855_admin._Trump,_45th_President_of_the_United_States_(37521073921)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(10) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `service` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `waktu_pemesanan` date NOT NULL,
  `jam_kedatangan` varchar(6) NOT NULL,
  `jml_bayar` varchar(50) NOT NULL,
  `email_pemesan` varchar(50) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_pemesan`, `service`, `no_hp`, `waktu_pemesanan`, `jam_kedatangan`, `jml_bayar`, `email_pemesan`, `id_user`) VALUES
(1, 'Mohammad Taufik Saefulloh', '[\"2\"]', '082223088917', '2021-10-20', '13.00', '25000', 'fluzzrr93@gmail.com', 1),
(3, 'user', '[\"2\",\"10\",\"30\",\"36\"]', '0812345789', '2021-11-10', '12.00', '655000', 'user@user.com', NULL),
(4, 'user', '[\"4\"]', '0812345789', '2021-10-27', '15.00', '25000', 'user@user.com', 7),
(5, 'user', '[\"5\",\"6\"]', '0812345789', '2021-10-28', '12.00', '160000', 'user@user.com', 7),
(6, 'fulo', '[\"4\",\"1\"]', '12321313123', '2022-07-02', '18.00', '60000', 'fulo@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `nama`, `email`, `no_hp`, `pesan`) VALUES
(10, 'ariel', 'krisnandaariel4289@gmail.com', '9390209563', 'bAIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id_service` int(5) NOT NULL,
  `service` varchar(100) NOT NULL,
  `jml_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id_service`, `service`, `jml_bayar`) VALUES
(1, 'Gunting Cuci Blow', '35000'),
(2, 'Gunting + Blow', '25000'),
(3, 'Gunting Anak + Blow', '20000'),
(4, 'Gunting Anak Cuci Blow', '25000'),
(5, 'Gunting Poni', '10000'),
(6, 'Smoothing Pendek 1 (Matrix)', '150000'),
(7, 'Smoothing Pendek 1 (Loreal)', '200000'),
(8, 'Smoothing Pendek 2(Matrix)', '200000'),
(9, 'Smoothing Pendek 2(Loreal)', '250000'),
(10, 'Smoothing Sedang (Matrix)', '250000'),
(11, 'Smoothing Sedang (Loreal)', '300000'),
(12, 'Smoothing Panjang 1 (Matrix)', '300000'),
(13, 'Smoothing Panjang 1 (Loreal)', '350000'),
(14, 'Smoothing Panjang 2 (Matrix)', '350000'),
(15, 'Smoothing Panjang 2 (Loreal)', '400000'),
(16, 'Smoothing Poni (Matrix)', '80000'),
(17, 'Smoothing Poni (Loreal)', '100000'),
(18, 'Hair Mask Pendek (Makarizo)', '60000'),
(19, 'Hair Mask Pendek (Loreal)', '70000'),
(20, 'Hair Mask Sedang (Makarizo)', '70000'),
(21, 'Hair Mask Sedang (Loreal)', '75000'),
(22, 'Hair Mask Panjang 1 (Makarizo)', '75000'),
(23, 'Hair Mask Panjang 1 (Loreal)', '80000'),
(24, 'Hair Mask Panjang 2 (Makarizo)', '80000'),
(25, 'Hair Mask Panjang 2 (Loreal)', '85000'),
(26, 'Keriting Pendek 1', '150000'),
(27, 'Keriting Pendek 2', '200000'),
(28, 'Keriting Sedang', '250000'),
(29, 'Keriting Panjang 1', '250000'),
(30, 'Keriting Panjang 2', '300000'),
(31, 'Keriting Poni', '80000'),
(32, 'Hair Spa Pendek (Makarizo)', '70000'),
(33, 'Hair Spa Pendek (Loreal)', '75000'),
(34, 'Hair Spa Sedang (Makarizo)', '75000'),
(35, 'Hair Spa Sedang (Loreal)', '80000'),
(36, 'Hair Spa Panjang 1 (Makarizo)', '80000'),
(37, 'Hair Spa Panjang 1 (Loreal)', '85000'),
(38, 'Hair Spa Panjang 2 (Makarizo)', '85000'),
(39, 'Hair Spa Panjang 2 (Loreal)', '90000'),
(40, 'Facial (Latulip)', '70000'),
(41, 'Facial (Biokos)', '70000'),
(42, 'Colouring Cepak (Matrix)', '75000'),
(43, 'Colouring Cepak (Loreal)', '100000'),
(44, 'Colouring Pendek 1 (Matrix)', '75000'),
(45, 'Colouring Pendek 1 (Loreal)', '100000'),
(46, 'Colouring Pendek 2 (Matrix)', '100000'),
(47, 'Colouring Pendek 2 (Loreal)', '150000'),
(48, 'Colouring Sedang (Matrix)', '150000'),
(49, 'Colouring Sedang (Loreal)', '200000'),
(50, 'Colouring Panjang 1 (Matrix)', '200000'),
(51, 'Colouring Panjang 1 (Loreal)', '250000'),
(52, 'Colouring Panjang 2 (Matrix)', '250000'),
(53, 'Colouring Panjang 2 (Loreal)', '300000'),
(54, 'Blow Permanen Pendek 1', '300000'),
(55, 'Blow Permanen Pendek 2', '400000'),
(56, 'Blow Permanen Sedang', '500000'),
(57, 'Blow Permanen Panjang 1', '600000'),
(58, 'Blow Permanen Panjang 2', '700000'),
(59, 'Warna Fashion Cepak (Matrix)', '100000'),
(60, 'Warna Fashion Cepak (Loreal CBD)', '125000'),
(61, 'Warna Fashion Pendek 1 (Matrix)', '150000'),
(62, 'Warna Fashion Pendek 1 (Loreal CBD)', '175000'),
(63, 'Warna Fashion Pendek 2 (Matrix)', '175000'),
(64, 'Warna Fashion Pendek 2 (Loreal CBD)', '225000'),
(65, 'Warna Fashion Sedang (Matrix)', '225000'),
(66, 'Warna Fashion Sedang (Loreal CBD)', '275000'),
(67, 'Warna Fashion Panjang 1 (Matrix)', '275000'),
(68, 'Warna Fashion Panjang 1 (Loreal CBD)', '325000'),
(69, 'Warna Fashion Panjang 2 (Matrix)', '325000'),
(70, 'Warna Fashion Panjang 2 (Loreal CBD)', '375000'),
(71, 'Warna Fashion Very Long (Matrix)', '375000'),
(72, 'Warna Fashion Very Long (Loreal CBD)', '425000'),
(73, 'Waxing Ketiak', '60000'),
(74, 'Waxing Tangan', '60000'),
(75, 'Waxing Kaki', '75000'),
(76, 'Cleanshing Pendek 1', '100000'),
(77, 'Cleanshing Pendek 2', '150000'),
(78, 'Cleanshing Sedang', '200000'),
(79, 'Cleanshing Panjang 1', '250000'),
(80, 'Cleanshing Panjang 2', '300000'),
(81, 'Cleanshing Very Long', '350000'),
(82, 'Ombre Fashion Pendek 1', '200000'),
(83, 'Ombre Fashion Pendek 2', '250000'),
(84, 'Ombre Fashion Sedang', '300000'),
(85, 'Ombre Fashion Panjang 1', '350000'),
(86, 'Ombre Fashion Panjang 2', '350000'),
(87, 'Tutup Uban Matrix (Hitam)', '80000'),
(88, 'Tutup Uban Matrix (Warna)', '150000'),
(89, 'Tutup Uban Loreal (Hitam)', '100000'),
(90, 'Tutup Uban Loreal (Warna)', '175000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `order_id` int(11) NOT NULL,
  `jml_bayar` int(15) DEFAULT NULL,
  `payment_type` varchar(20) DEFAULT NULL,
  `transaction_time` varchar(30) DEFAULT NULL,
  `status_code` varchar(5) DEFAULT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`order_id`, `jml_bayar`, `payment_type`, `transaction_time`, `status_code`, `booking_id`) VALUES
(430634539, 60000, 'bank_transfer', '2022-06-25 21:36:34', '201', 6),
(502700957, 655000, 'cstore', '2021-10-24 23:37:22', '200', 3),
(1771453939, 160000, 'cstore', '2021-10-25 01:29:05', '202', 5),
(1958876967, 25000, 'qris', '2021-10-25 01:28:09', '407', 4),
(1963314841, 25000, 'bank_transfer', '2021-09-26 14:00:50', '200', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `service` varchar(100) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `pswd_user` varchar(50) NOT NULL,
  `hp_user` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `service`, `email_user`, `pswd_user`, `hp_user`) VALUES
(1, 'Mohammad Taufik Saefulloh', '', 'fluzzrr93@gmail.com', '409db1c9ec371795e720e5ff5d991c96', '082223088917'),
(2, 'User', '', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', '09908989799'),
(3, 'fullo', '', 'fulllo76@protonmail.ch', '409db1c9ec371795e720e5ff5d991c96', '08123456789'),
(4, 'ariel_005', '', 'ariel@gmail.com', '7d7e39f342ae4d5840c1348f98e085a4', 'u959i5oi'),
(7, 'user', '', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', '0812345789');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`kd_admin`);

--
-- Indeks untuk tabel `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`) USING BTREE;

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id_service` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
