-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 08:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcbptelkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpjss`
--

CREATE TABLE `bpjss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIK` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `divisi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bpjss`
--

INSERT INTO `bpjss` (`id`, `nama`, `NIK`, `divisi`, `keterangan`, `created_at`, `updated_at`) VALUES
(23, 'Rizky P', 'Iky', '123451', 'Bekasi', '2020-12-05 10:15:45', '2020-12-05 10:15:45'),
(24, 'Wicak', 'Cak', '123452', 'Jakarta', '2020-12-05 10:15:45', '2020-12-05 10:15:45'),
(25, 'Juan T', 'Ju', '123453', 'Bogor', '2020-12-05 10:15:45', '2020-12-05 10:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `bumns`
--

CREATE TABLE `bumns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_panggilan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIK` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_kartu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bumns`
--

INSERT INTO `bumns` (`id`, `nama_karyawan`, `nama_panggilan`, `NIK`, `bank`, `no_rekening`, `status_kartu`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Heri Hermawan', 'Naru', '123456', 'Mandiri', '1234567891023', 'Tinggal Ambil Cuk', 'Siap diambil', NULL, NULL),
(2, 'Rayhan Akrom Naufal', 'Akrom', '123455', 'Mandiri', '1210006433514', 'option', 'Karpeg Hilang', '2020-11-17 06:55:47', '2020-11-17 06:55:47'),
(3, 'Inul Muqafa', 'Inul', '123112', 'BNI', '1210006433513', 'option', 'Nama Salah', '2020-11-17 06:56:33', '2020-11-17 06:56:33'),
(4, 'Inul Muqafa', 'Inul', '123119', 'BNI', '1210006433519', 'option', 'Nama Salah', '2020-11-17 06:58:46', '2020-11-17 06:58:46'),
(5, 'Sendi Ahmad', 'Ahmad', '123654', 'Mandiri', '213456789879', 'option', 'Chip Rusak', '2020-11-17 07:08:47', '2020-11-17 07:08:47'),
(6, 'Rayhan Akrom Naufal', 'Rayhan', '123444', 'Mandiri Syariah', '1210006433157', 'Cetak Baru', 'Foto Salah', '2020-11-17 07:15:21', '2020-11-17 07:15:21'),
(13, 'Rizky P', 'Iky', '123451', 'Mandiri', '1210006433512', 'Cetak Baru', 'Chip Rusak', '2020-12-05 10:22:51', '2020-12-05 10:22:51'),
(14, 'Wicak', 'Cak', '123452', 'Mandiri Syariah', '1210006433518', 'Cetak Baru', 'Foto Ganti', '2020-12-05 10:22:51', '2020-12-05 10:22:51'),
(15, 'Juan T', 'Ju', '123453', 'BNI', '1210006431354', 'Tidak Cetak', 'Foto Salah', '2020-12-05 10:22:51', '2020-12-05 10:22:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2020_11_11_140628_create_pkls_table', 1),
(9, '2020_11_12_063038_create_bpjss_table', 2),
(10, '2020_11_12_133520_create_bumns_table', 3),
(12, '2020_11_14_160421_create_monitorings_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `monitorings`
--

CREATE TABLE `monitorings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIK` char(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_perihal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `via_laporan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lapor` date NOT NULL,
  `penerima` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelengkapan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monitorings`
--

INSERT INTO `monitorings` (`id`, `nama`, `NIK`, `detail_perihal`, `via_laporan`, `tanggal_lapor`, `penerima`, `kelengkapan`, `created_at`, `updated_at`) VALUES
(1, 'Juan Timor', '123444', 'Mutasi Data', 'Whatsapp', '2020-08-12', 'Ibnul', 'Lengkap', '2020-12-07 10:09:43', '2020-12-07 10:09:43'),
(2, 'Wicaksono', '123333', 'Laporan Riwayat Meninggoy', 'Email', '2020-03-01', 'Bambang', 'Tidak Lengkap', '2020-12-07 10:09:43', '2020-12-07 10:09:43'),
(3, 'Anas Alqoyum', '123222', 'Smart Data', 'Email', '2020-04-04', 'Agus', 'Tidak Lengkap', '2020-12-07 10:09:43', '2020-12-07 10:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rayhanakrom@gmail.com', '$2y$10$ySk7smhNA6UaawHVOUXyFOmrRC23SMg/X3GkMVw4FMNx2Y0wm3xQa', '2020-12-05 14:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `pkls`
--

CREATE TABLE `pkls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIM` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `universitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pkls`
--

INSERT INTO `pkls` (`id`, `nama`, `NIM`, `email`, `asal`, `universitas`, `jurusan`, `no_telefon`, `Status`, `created_at`, `updated_at`) VALUES
(8, 'Ibnul Muqafa', '22313000123245', 'ibnulmqf@gmail.com', 'Ambon', 'STIP', 'Nautika', '081299154432', 'on', '2020-11-15 00:29:04', '2020-12-02 08:34:05'),
(11, 'Dicky Firmansyah is Fuckboi', '2406017140071', 'rayhanakro22m@gmail.com', 'Tangsel', 'UNDIP', 'Teknik Industri', '081299153812', 'option', '2020-11-15 00:35:50', '2020-11-15 00:35:50'),
(13, 'Dicky Firmansyah is Fuckboi', '24060171400', '2', 'Tangsel', 'UNDIP', 'Teknik Industri', '081299153812', 'option', '2020-11-15 00:36:28', '2020-11-15 00:36:28'),
(14, 'Rizky P', '24060117130021', 'rizkyp@gmail.com', 'Bekasi', 'UNDIP', 'Ekonomi', '812199153254', 'Aktif', '2020-12-05 01:10:01', '2020-12-05 01:10:01'),
(15, 'Wicak', '24060116140022', 'wicak11@gmail.com', 'Jakarta', 'UNPAD', 'Akutansi', '81299151234', 'Tidak Aktif', '2020-12-05 01:10:01', '2020-12-05 01:10:01'),
(16, 'Juan T', '24060117130012', 'juant@gmail.com', 'Bogor', 'UNSUD', 'Matematika', '81299157878', 'Aktif', '2020-12-05 01:10:01', '2020-12-05 01:10:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Rayhan', 'rayhanakrom@gmail.com', NULL, '$2y$10$fIQejmZxCYZp2XpCbLVSIOzjjc3BuzbbYrFCiFmJ2DuhAxroFq5Ou', 'w3NmPD5UBgxvVTfOyLWVtm1uqJGIFejJx2cB3ZmDlGNRXS99berDtRklXJcY', '2020-12-05 14:43:23', '2020-12-05 14:43:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpjss`
--
ALTER TABLE `bpjss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bpjss_nik_unique` (`NIK`);

--
-- Indexes for table `bumns`
--
ALTER TABLE `bumns`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bumns_nik_unique` (`NIK`),
  ADD UNIQUE KEY `bumns_no_rekening_unique` (`no_rekening`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monitorings`
--
ALTER TABLE `monitorings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `monitorings_nik_unique` (`NIK`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pkls`
--
ALTER TABLE `pkls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pkls_nim_unique` (`NIM`),
  ADD UNIQUE KEY `pkls_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpjss`
--
ALTER TABLE `bpjss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `bumns`
--
ALTER TABLE `bumns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `monitorings`
--
ALTER TABLE `monitorings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pkls`
--
ALTER TABLE `pkls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
