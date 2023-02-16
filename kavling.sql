-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 11:15 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kavling`
--

-- --------------------------------------------------------

--
-- Table structure for table `angsurans`
--

CREATE TABLE `angsurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `penjualankavling_id` bigint(20) UNSIGNED NOT NULL,
  `angsuran` bigint(20) NOT NULL,
  `bayarangsuran` bigint(20) NOT NULL,
  `dendaangsuran` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `angsurans`
--

INSERT INTO `angsurans` (`id`, `penjualankavling_id`, `angsuran`, `bayarangsuran`, `dendaangsuran`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1000000, 0, '2021-10-01', '2021-09-30 19:07:53', '2021-09-30 19:07:53'),
(5, 1, 1, 1000000, 0, '2021-10-02', '2021-09-30 20:18:48', '2021-09-30 20:18:48'),
(6, 1, 2, 1000000, 0, '2021-10-03', '2021-09-30 20:19:10', '2021-09-30 20:19:10'),
(7, 2, 1, 1000000, 0, '2021-10-01', '2021-10-01 01:26:05', '2021-10-01 01:26:05'),
(8, 3, 1, 1000000, 0, '2021-10-01', '2021-10-01 01:26:41', '2021-10-01 01:26:41'),
(9, 7, 1, 1000000, 0, '2021-10-01', '2021-10-01 01:40:34', '2021-10-01 01:40:34'),
(10, 7, 2, 1000000, 500000, '2021-10-02', '2021-10-01 01:41:07', '2021-10-01 01:41:07'),
(11, 7, 3, 1000000, 0, '2021-10-03', '2021-10-01 01:43:25', '2021-10-01 01:43:25'),
(12, 2, 1, 1000000, 0, '2021-10-09', '2021-10-01 02:18:03', '2021-10-01 02:18:03');

-- --------------------------------------------------------

--
-- Table structure for table `dasboards`
--

CREATE TABLE `dasboards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datakavlings`
--

CREATE TABLE `datakavlings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `subkategori_id` bigint(20) UNSIGNED NOT NULL,
  `cluster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hargacash` bigint(20) NOT NULL,
  `hargaangsuran` bigint(20) NOT NULL,
  `ukurantanah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipekavling` bigint(20) NOT NULL,
  `nomorkavling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luaskavling` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nopbb` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datakavlings`
--

INSERT INTO `datakavlings` (`id`, `kategori_id`, `subkategori_id`, `cluster`, `hargacash`, `hargaangsuran`, `ukurantanah`, `tipekavling`, `nomorkavling`, `luaskavling`, `nopbb`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'A', 50000000, 12000, '12 x 9m', 16, '170', '16m2', NULL, '2021-09-30 18:42:56', '2021-09-30 18:42:56'),
(2, 1, 2, 'B', 3000000, 12000, '12 x 9m', 31, '110', '16m2', NULL, '2021-09-30 20:24:40', '2021-09-30 20:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `datamarketings`
--

CREATE TABLE `datamarketings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nomarketing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datapembelis`
--

CREATE TABLE `datapembelis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nopembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namapembeli` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datapembelis`
--

INSERT INTO `datapembelis` (`id`, `nopembeli`, `namapembeli`, `alamat`, `nik`, `file`, `telepon`, `created_at`, `updated_at`) VALUES
(1, 'P001', 'Tresno', 'Denasri', '3375021009870003', '404-error-girlfriend-not-found.jpg-1633052824-jpg', '089', '2021-09-30 18:47:04', '2021-09-30 18:47:04'),
(2, 'P002', 'Kasmulyo', 'Denasri', '3375021009870003', '404-error-girlfriend-not-found.jpg-1633079986-jpg', '08989', '2021-10-01 02:19:46', '2021-10-01 02:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `datapimpinans`
--

CREATE TABLE `datapimpinans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idpimpinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori__kavlings`
--

CREATE TABLE `kategori__kavlings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori__kavlings`
--

INSERT INTO `kategori__kavlings` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Kavling Tanah', '2021-09-30 18:40:01', '2021-09-30 18:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `lamaangsurans`
--

CREATE TABLE `lamaangsurans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `metodepembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lamaangsurans`
--

INSERT INTO `lamaangsurans` (`id`, `kategori_id`, `metodepembayaran_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2021-09-30 18:44:24', '2021-09-30 18:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `lamaangsurantambahs`
--

CREATE TABLE `lamaangsurantambahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subkategori_id` bigint(20) UNSIGNED NOT NULL,
  `lamapembayaran` bigint(20) NOT NULL,
  `lamaangsuran_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lamaangsurantambahs`
--

INSERT INTO `lamaangsurantambahs` (`id`, `subkategori_id`, `lamapembayaran`, `lamaangsuran_id`, `created_at`, `updated_at`) VALUES
(1, 2, 7, 1, '2021-09-30 18:45:45', '2021-09-30 18:45:45'),
(2, 2, 8, 1, '2021-09-30 18:46:03', '2021-09-30 18:46:03'),
(3, 2, 12, 1, '2021-09-30 23:47:09', '2021-09-30 23:47:09'),
(4, 2, 69, 1, '2021-10-01 02:21:14', '2021-10-01 02:21:14');

-- --------------------------------------------------------

--
-- Table structure for table `metodepembayarans`
--

CREATE TABLE `metodepembayarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metodepembayarans`
--

INSERT INTO `metodepembayarans` (`id`, `pembayaran`, `created_at`, `updated_at`) VALUES
(1, 'Tunai', '2021-09-30 18:43:35', '2021-09-30 18:43:35'),
(2, 'Angsuran', '2021-09-30 18:43:43', '2021-09-30 18:43:43');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_07_124849_create_kategori__kavlings_table', 1),
(5, '2021_09_08_125527_create_subkategoris_table', 1),
(6, '2021_09_09_073314_create_datakavlings_table', 1),
(7, '2021_09_10_144604_create_metodepembayarans_table', 1),
(8, '2021_09_11_050542_create_lamaangsurans_table', 1),
(9, '2021_09_15_015654_create_datapimpinans_table', 1),
(10, '2021_09_15_030113_create_datapembelis_table', 1),
(11, '2021_09_16_021251_create_penjualankavlings_table', 1),
(12, '2021_09_20_035916_create_datamarketings_table', 1),
(13, '2021_09_23_074438_create_angsurans_table', 1),
(14, '2021_09_24_065343_create_dasboards_table', 1),
(15, '2021_09_28_012846_create_lamaangsurantambahs_table', 1),
(16, '2021_09_28_090853_delete__lamaangsurantambahs_table', 1),
(17, '2021_09_28_091752_drop_lamaangsurantambahs_table', 1),
(18, '2021_10_05_080528_create_penjualantunais_table', 2);

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
-- Table structure for table `penjualankavlings`
--

CREATE TABLE `penjualankavlings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `subkategori_id` bigint(20) UNSIGNED NOT NULL,
  `datakavling_id` bigint(20) UNSIGNED NOT NULL,
  `datapembeli_id` bigint(20) UNSIGNED NOT NULL,
  `datamarketing_id` bigint(20) UNSIGNED DEFAULT NULL,
  `metodepembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `lamaangsurantambah_id` bigint(20) UNSIGNED DEFAULT NULL,
  `tanggal` bigint(20) DEFAULT NULL,
  `promo` bigint(20) DEFAULT NULL,
  `dp` bigint(20) DEFAULT NULL,
  `bayar` bigint(20) DEFAULT NULL,
  `tertanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualankavlings`
--

INSERT INTO `penjualankavlings` (`id`, `kategori_id`, `subkategori_id`, `datakavling_id`, `datapembeli_id`, `datamarketing_id`, `metodepembayaran_id`, `lamaangsurantambah_id`, `tanggal`, `promo`, `dp`, `bayar`, `tertanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1, NULL, 2, 1, 10, 0, 10000000, NULL, '2021-10-01', NULL, NULL),
(2, 1, 2, 1, 1, NULL, 2, 2, 15, 0, 20000000, NULL, '2021-10-01', NULL, NULL),
(3, 1, 2, 2, 1, NULL, 2, 2, 17, 0, 15000000, NULL, '2021-10-01', NULL, NULL),
(4, 1, 2, 2, 1, NULL, 2, 2, 17, 0, 15000000, NULL, '2021-10-01', NULL, NULL),
(5, 1, 2, 1, 1, NULL, 1, 1, 5, 0, NULL, 12000000, '2021-10-01', NULL, NULL),
(6, 1, 2, 1, 1, NULL, 2, 3, 14, 0, 14000000, NULL, '2021-10-01', NULL, NULL),
(7, 1, 2, 1, 1, NULL, 2, 2, 9, 0, 15000000, NULL, '2021-10-01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penjualantunais`
--

CREATE TABLE `penjualantunais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `subkategori_id` bigint(20) UNSIGNED NOT NULL,
  `datakavling_id` bigint(20) UNSIGNED NOT NULL,
  `datapembeli_id` bigint(20) UNSIGNED NOT NULL,
  `datamarketing_id` bigint(20) UNSIGNED DEFAULT NULL,
  `metodepembayaran_id` bigint(20) UNSIGNED NOT NULL,
  `promo` bigint(20) DEFAULT NULL,
  `bayar` bigint(20) DEFAULT NULL,
  `tertanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualantunais`
--

INSERT INTO `penjualantunais` (`id`, `kategori_id`, `subkategori_id`, `datakavling_id`, `datapembeli_id`, `datamarketing_id`, `metodepembayaran_id`, `promo`, `bayar`, `tertanggal`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1, NULL, 1, 0, 12000000, '2021-10-05', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subkategoris`
--

CREATE TABLE `subkategoris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namasub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subkategoris`
--

INSERT INTO `subkategoris` (`id`, `namasub`, `kategori_id`, `created_at`, `updated_at`) VALUES
(2, 'Kavling Gamer', 1, '2021-09-30 18:40:26', '2021-09-30 18:40:26');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `angsurans`
--
ALTER TABLE `angsurans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dasboards`
--
ALTER TABLE `dasboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datakavlings`
--
ALTER TABLE `datakavlings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datamarketings`
--
ALTER TABLE `datamarketings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapembelis`
--
ALTER TABLE `datapembelis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapimpinans`
--
ALTER TABLE `datapimpinans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori__kavlings`
--
ALTER TABLE `kategori__kavlings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lamaangsurans`
--
ALTER TABLE `lamaangsurans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lamaangsurantambahs`
--
ALTER TABLE `lamaangsurantambahs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metodepembayarans`
--
ALTER TABLE `metodepembayarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penjualankavlings`
--
ALTER TABLE `penjualankavlings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualantunais`
--
ALTER TABLE `penjualantunais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkategoris`
--
ALTER TABLE `subkategoris`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `angsurans`
--
ALTER TABLE `angsurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `dasboards`
--
ALTER TABLE `dasboards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datakavlings`
--
ALTER TABLE `datakavlings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `datamarketings`
--
ALTER TABLE `datamarketings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datapembelis`
--
ALTER TABLE `datapembelis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `datapimpinans`
--
ALTER TABLE `datapimpinans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori__kavlings`
--
ALTER TABLE `kategori__kavlings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lamaangsurans`
--
ALTER TABLE `lamaangsurans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lamaangsurantambahs`
--
ALTER TABLE `lamaangsurantambahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `metodepembayarans`
--
ALTER TABLE `metodepembayarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `penjualankavlings`
--
ALTER TABLE `penjualankavlings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjualantunais`
--
ALTER TABLE `penjualantunais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subkategoris`
--
ALTER TABLE `subkategoris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
