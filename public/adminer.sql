-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2024 at 02:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensigps`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` bigint UNSIGNED NOT NULL,
  `karyawan_id` bigint UNSIGNED NOT NULL,
  `jam_id` bigint UNSIGNED DEFAULT NULL,
  `tgl_absensi` date DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `foto_masuk` text COLLATE utf8mb4_unicode_ci,
  `foto_keluar` text COLLATE utf8mb4_unicode_ci,
  `lokasi_masuk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi_keluar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `karyawan_id`, `jam_id`, `tgl_absensi`, `jam_masuk`, `jam_keluar`, `foto_masuk`, `foto_keluar`, `lokasi_masuk`, `lokasi_keluar`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2024-03-16', '19:39:59', '19:41:35', '8888888888888-2024-03-16-masuk.png', '8888888888888-2024-03-16-keluar.png', '-7.00345175,110.4513065', '-7.003589375,110.45138800000001', '2024-03-16 12:39:59', '2024-03-16 12:41:35'),
(2, 1, 3, '2024-03-18', '00:45:52', NULL, '12345678910-2024-03-18-masuk.png', NULL, '-7.003682250000001,110.451365', NULL, '2024-03-17 17:45:52', '2024-03-17 17:45:52'),
(3, 1, 5, '2024-04-03', '20:00:37', NULL, '1234567890-2024-04-03-masuk.png', NULL, '-7.003606,110.4515669', NULL, '2024-04-03 13:00:37', '2024-04-03 13:00:37');

-- --------------------------------------------------------

--
-- Table structure for table `cabangs`
--

CREATE TABLE `cabangs` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_cabang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_cabang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_kantor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radius` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cabangs`
--

INSERT INTO `cabangs` (`id`, `kode_cabang`, `nama_cabang`, `lokasi_kantor`, `radius`, `created_at`, `updated_at`) VALUES
(1, '1', 'cabang', '-7.7436967,110.4020511', 10, '2024-03-11 18:42:31', '2024-05-21 13:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_department` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_department` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `kode_department`, `nama_department`, `created_at`, `updated_at`) VALUES
(1, '1', 'test', '2024-03-11 18:41:21', '2024-03-11 18:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `izins`
--

CREATE TABLE `izins` (
  `id` bigint UNSIGNED NOT NULL,
  `karyawan_id` bigint UNSIGNED NOT NULL,
  `tgl_izin` date NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'i:Izin,s:sakit ',
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_approved` char(1) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '0:Pending,1:Disetujui,2:Ditolak',
  `foto` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izins`
--

INSERT INTO `izins` (`id`, `karyawan_id`, `tgl_izin`, `status`, `keterangan`, `status_approved`, `foto`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-05-11', 'i', 'test', '0', '8888888888888.2024-05-11jpg', '2024-03-16 12:16:48', '2024-03-16 16:48:20'),
(2, 1, '2024-03-24', 'i', 'a', '1', NULL, '2024-03-23 19:39:23', '2024-03-23 19:40:12');

-- --------------------------------------------------------

--
-- Table structure for table `jams`
--

CREATE TABLE `jams` (
  `id` bigint UNSIGNED NOT NULL,
  `kode_jamKerja` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jamKerja` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awal_jamMasuk` time NOT NULL,
  `set_jamMasuk` time NOT NULL,
  `akhir_jamMasuk` time NOT NULL,
  `set_jamPulang` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jams`
--

INSERT INTO `jams` (`id`, `kode_jamKerja`, `nama_jamKerja`, `awal_jamMasuk`, `set_jamMasuk`, `akhir_jamMasuk`, `set_jamPulang`, `created_at`, `updated_at`) VALUES
(1, '1', 'test', '07:50:00', '08:00:00', '08:30:00', '16:00:00', '2024-03-11 18:49:01', '2024-03-11 18:49:01'),
(2, '2', 'test2', '07:00:00', '07:00:00', '08:00:00', '16:00:00', '2024-03-16 00:04:37', '2024-03-16 00:15:22'),
(3, '3', 'test malam', '00:00:00', '00:00:00', '06:01:00', '19:12:00', '2024-03-16 12:12:45', '2024-03-17 17:45:45'),
(4, '11', 'test1', '02:00:00', '05:41:00', '08:47:00', '15:41:00', '2024-03-23 19:41:36', '2024-03-23 19:41:36'),
(5, '20', '20', '19:59:00', '20:00:00', '20:20:00', '04:00:00', '2024-04-03 12:59:33', '2024-04-03 12:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `jams_by_ids`
--

CREATE TABLE `jams_by_ids` (
  `id` bigint UNSIGNED NOT NULL,
  `karyawan_id` bigint UNSIGNED NOT NULL,
  `jam_id` bigint UNSIGNED NOT NULL,
  `hari` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jams_by_ids`
--

INSERT INTO `jams_by_ids` (`id`, `karyawan_id`, `jam_id`, `hari`, `created_at`, `updated_at`) VALUES
(37, 2, 3, 'Senin', '2024-03-23 19:44:41', '2024-03-23 19:44:41'),
(38, 2, 3, 'Selasa', '2024-03-23 19:44:41', '2024-03-23 19:44:41'),
(39, 2, 3, 'Rabu', '2024-03-23 19:44:41', '2024-03-23 19:44:41'),
(40, 2, 4, 'Kamis', '2024-03-23 19:44:41', '2024-03-23 19:44:41'),
(41, 2, 4, 'Jumat', '2024-03-23 19:44:41', '2024-03-23 19:44:41'),
(42, 2, 4, 'Sabtu', '2024-03-23 19:44:41', '2024-03-23 19:44:41'),
(43, 1, 3, 'Senin', '2024-04-03 13:00:03', '2024-04-03 13:00:03'),
(44, 1, 3, 'Selasa', '2024-04-03 13:00:03', '2024-04-03 13:00:03'),
(45, 1, 5, 'Rabu', '2024-04-03 13:00:03', '2024-04-03 13:00:03'),
(46, 1, 2, 'Kamis', '2024-04-03 13:00:03', '2024-04-03 13:00:03'),
(47, 1, 2, 'Jumat', '2024-04-03 13:00:03', '2024-04-03 13:00:03'),
(48, 1, 3, 'Sabtu', '2024-04-03 13:00:03', '2024-04-03 13:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` char(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_lengkap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` bigint UNSIGNED NOT NULL,
  `cabang_id` bigint UNSIGNED DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `nik`, `nama_lengkap`, `jabatan`, `department_id`, `cabang_id`, `no_telp`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1234567890', 'Test', 'staf', 1, 1, '123456789', '12345678910.png', '$2y$10$ErIXF2ebSl8XkAUe1wQS0ucKHYAbN1xMw1lYTnSKvsUj02UztsIi.', NULL, '2024-03-11 18:43:29', '2024-03-26 12:50:43'),
(2, '11111111', 'testaben', 'test', 1, 1, '1234567890', '', '$2y$10$tRnlH9SNO3lX4hEtyPmEzuV7oBIe4Cp53JcjU5wUHwulp1lqiOK96', NULL, '2024-03-23 19:44:17', '2024-03-23 19:44:17');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_19_155802_create_karyawans_table', 1),
(6, '2023_05_19_155803_create_jams_table', 1),
(7, '2023_05_19_160106_create_absensis_table', 1),
(8, '2023_05_24_142716_create_izins_table', 1),
(9, '2023_05_26_010158_create_departments_table', 1),
(10, '2023_05_26_011310_add_id_department_to_karyawans_table', 1),
(11, '2023_07_12_125229_create_cabangs_table', 1),
(12, '2023_07_12_133615_add_cabang_id_to_karyawans_table', 1),
(13, '2023_07_14_145416_add_jam_id_to_absensis_table', 1),
(14, '2023_07_14_171018_create_jams_by_ids_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@wc.com', NULL, '$2y$10$0L5UnjhsuUkuOYB.QoYsC.D14We7lBsoBejAP15MK.7SHc3d1Wk.W', 'public/uploads/users/user.png', NULL, '2024-03-05 19:39:35', '2024-03-05 19:39:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensis_karyawan_id_foreign` (`karyawan_id`),
  ADD KEY `absensis_jam_id_foreign` (`jam_id`);

--
-- Indexes for table `cabangs`
--
ALTER TABLE `cabangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `izins`
--
ALTER TABLE `izins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `izins_karyawan_id_foreign` (`karyawan_id`);

--
-- Indexes for table `jams`
--
ALTER TABLE `jams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jams_by_ids`
--
ALTER TABLE `jams_by_ids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jams_by_ids_karyawan_id_foreign` (`karyawan_id`),
  ADD KEY `jams_by_ids_jam_id_foreign` (`jam_id`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawans_department_id_foreign` (`department_id`),
  ADD KEY `karyawans_cabang_id_foreign` (`cabang_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cabangs`
--
ALTER TABLE `cabangs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izins`
--
ALTER TABLE `izins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jams`
--
ALTER TABLE `jams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jams_by_ids`
--
ALTER TABLE `jams_by_ids`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_jam_id_foreign` FOREIGN KEY (`jam_id`) REFERENCES `jams` (`id`),
  ADD CONSTRAINT `absensis_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`);

--
-- Constraints for table `izins`
--
ALTER TABLE `izins`
  ADD CONSTRAINT `izins_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`);

--
-- Constraints for table `jams_by_ids`
--
ALTER TABLE `jams_by_ids`
  ADD CONSTRAINT `jams_by_ids_jam_id_foreign` FOREIGN KEY (`jam_id`) REFERENCES `jams` (`id`),
  ADD CONSTRAINT `jams_by_ids_karyawan_id_foreign` FOREIGN KEY (`karyawan_id`) REFERENCES `karyawans` (`id`);

--
-- Constraints for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD CONSTRAINT `karyawans_cabang_id_foreign` FOREIGN KEY (`cabang_id`) REFERENCES `cabangs` (`id`),
  ADD CONSTRAINT `karyawans_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
