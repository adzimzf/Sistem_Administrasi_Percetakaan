-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2018 at 05:09 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkp`
--

-- --------------------------------------------------------

--
-- Table structure for table `designer_notify`
--

CREATE TABLE `designer_notify` (
  `id` int(11) NOT NULL,
  `detail` text NOT NULL,
  `is_read` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cetakan`
--

CREATE TABLE `jenis_cetakan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `is_fixed` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_cetakan`
--

INSERT INTO `jenis_cetakan` (`id`, `nama`, `is_fixed`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Banner', 0, 1, '2018-02-04 23:36:28', '2018-02-04 23:36:28'),
(2, 'Kartu Nama', 1, 1, '2018-02-04 23:36:28', '2018-02-05 00:21:05');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kertas`
--

CREATE TABLE `jenis_kertas` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `size` varchar(50) NOT NULL,
  `is_banner` int(11) NOT NULL DEFAULT '0',
  `des` text NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_kertas`
--

INSERT INTO `jenis_kertas` (`id`, `nama`, `size`, `is_banner`, `des`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'A4', '20x40', 0, 'kertas halus', 1, '2018-01-22 00:17:24', '2018-01-22 00:17:24'),
(2, 'Lakotic', '', 1, 'Kertas Khusus untuk banner', 1, '2018-01-22 00:18:28', '2018-01-22 00:18:28');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_access`
--

CREATE TABLE `role_access` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `detail` text NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_access`
--

INSERT INTO `role_access` (`id`, `name`, `detail`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Designer', 'Input data designer as front base customer', 1, '2018-02-11 16:03:09', '2018-02-11 16:03:09'),
(2, 'Kasir', 'Control money ', 1, '2018-02-11 16:03:09', '2018-02-11 16:03:09'),
(3, 'Operator', 'operatong on production', 1, '2018-02-11 16:04:08', '2018-02-11 16:04:08'),
(4, 'Administrator', 'full admin access', 1, '2018-02-11 16:04:08', '2018-02-11 16:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan`
--

CREATE TABLE `surat_jalan` (
  `id` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `biaya_edit` int(11) DEFAULT '0',
  `biaya_setting` int(11) DEFAULT '0',
  `total1` int(11) DEFAULT '0',
  `total2` int(11) DEFAULT '0',
  `uang_muka` int(11) DEFAULT '0',
  `sisa` int(11) DEFAULT '0',
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `operator` int(11) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_jalan`
--

INSERT INTO `surat_jalan` (`id`, `nama`, `no_telepon`, `biaya_edit`, `biaya_setting`, `total1`, `total2`, `uang_muka`, `sisa`, `tanggal`, `jam`, `operator`, `is_active`, `created_at`, `updated_at`) VALUES
('11022018002', 'ifa', '08783026', 5000, NULL, 0, 0, 0, 0, '2018-02-11', '05:39:21', 1, 1, '2018-02-10 22:39:21', '2018-02-11 06:58:28'),
('SKK-005956-2018-YUYU', 'adzim', '0989540', NULL, NULL, 12000, 12000, 12000, 0, '2018-01-25', '01:02:20', 1, 1, '2018-01-24 18:02:20', '2018-02-12 09:38:12'),
('SKK-010409-2018-YUYU', 'ujang', '087830', 3000, NULL, 500000, 503000, 300000, 203000, '2018-01-23', '01:05:54', 1, 1, '2018-01-22 18:05:54', '2018-02-11 08:17:59'),
('SKK-011057-2018-YUYU', 'Hannah', '0989', 60000, NULL, 16000, 76000, 30000, 46000, '2018-02-05', '01:12:17', 1, 1, '2018-02-04 18:12:17', '2018-02-10 21:29:15'),
('SKK-054831-2018-YUYU', 'nisa', '0888888', 90000, NULL, 1840000, 1930000, 20000, 1910000, '2018-02-10', '05:51:01', 1, 1, '2018-02-09 22:51:01', '2018-02-09 22:54:18'),
('SKK-164503-2018-YUYU', 'usman', '087830', NULL, NULL, 0, 0, 0, 0, '2018-02-10', '17:01:34', 1, 1, '2018-02-10 10:01:34', '2018-02-10 10:01:34'),
('SKK-170349-2018-YUYU', 'hasan', '087830', NULL, NULL, 0, 0, 0, 0, '2018-02-10', '17:04:26', 1, 1, '2018-02-10 10:04:26', '2018-02-10 19:36:47'),
('SKK-234322-2018-YUYU', 'hanna', '89899', 5000, 4000, 180000, 189000, 80000, 109000, '2018-02-04', '23:44:42', 1, 1, '2018-02-04 16:44:42', '2018-02-04 17:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `surat_jalan_detail`
--

CREATE TABLE `surat_jalan_detail` (
  `id` int(11) NOT NULL,
  `surat_jalan_id` varchar(200) NOT NULL,
  `source` varchar(20) NOT NULL,
  `file_address` varchar(200) NOT NULL,
  `page` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `jenis_kertas_id` int(11) NOT NULL,
  `peper_size` text NOT NULL,
  `duplex` varchar(50) NOT NULL,
  `box` int(11) DEFAULT '0',
  `harga_satuan` int(11) DEFAULT '0',
  `harga_jumlah` int(11) DEFAULT '0',
  `done` int(11) DEFAULT NULL,
  `is_active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_jalan_detail`
--

INSERT INTO `surat_jalan_detail` (`id`, `surat_jalan_id`, `source`, `file_address`, `page`, `quantity`, `jenis_kertas_id`, `peper_size`, `duplex`, `box`, `harga_satuan`, `harga_jumlah`, `done`, `is_active`, `created_at`, `updated_at`) VALUES
(13, 'SKK-010129-2018-YUYU', '2', '83a86833641c0fabea43b3abeaf1032d317d5409', 4, 6, 1, '20x40', 'Short', NULL, NULL, NULL, 1, 1, '2018-01-22 18:03:25', '2018-02-11 03:22:32'),
(15, 'SKK-010409-2018-YUYU', '1', '1377dd5611300f1b758dd2436a230c801ac183b0', 60, 2, 1, '200x400', 'Short', NULL, 8000, 400000, 1, 1, '2018-01-22 18:05:54', '2018-02-11 08:17:59'),
(16, 'SKK-010409-2018-YUYU', '2', '1377dd5611300f1b758dd2436a230c801ac183b0', 60, 50, 2, '40x20', 'Short', NULL, 2000, 100000, 1, 1, '2018-01-22 18:05:54', '2018-02-11 08:17:59'),
(17, 'SKK-005956-2018-YUYU', '2', '1b1eec2a69a5f9a1bb5a2c6019c389dbb9afcd2c', 5, 4, 1, '20x40', 'Short', NULL, 3000, 12000, 1, 1, '2018-01-24 18:02:20', '2018-02-12 09:38:12'),
(20, 'SKK-234322-2018-YUYU', '2', '8f62378a96d96e2640b349c1deec637e9f98fb95', 40, 3, 1, '20x40', 'Short', 3, 60000, 180000, 1, 1, '2018-02-04 16:44:42', '2018-02-10 21:23:50'),
(21, 'SKK-011057-2018-YUYU', '1', '1606b9ad4ef12704c918380dafaa1eecdee2089c', 5, 2, 2, '200x100', 'Short', NULL, 4000, 16000, 1, 1, '2018-02-04 18:12:17', '2018-02-10 21:29:15'),
(22, 'SKK-054831-2018-YUYU', '1', '8f6fc1d565f785f0efe1f3a7382a682d9c03fa00', 40, 4, 2, '100x200', 'Short', NULL, 200000, 1600000, NULL, 1, '2018-02-09 22:51:01', '2018-02-09 22:54:18'),
(23, 'SKK-054831-2018-YUYU', '2', '8f6fc1d565f785f0efe1f3a7382a682d9c03fa00', 40, 6, 1, '20x40', 'Short', NULL, 40000, 240000, NULL, 1, '2018-02-09 22:51:01', '2018-02-09 22:54:18'),
(24, 'SKK-164503-2018-YUYU', '1', 'c6496bab164705e98c4cd21e25c9ceeeca7b10ad', 4, 3, 1, '20x40', 'Long', NULL, 0, 0, 1, 1, '2018-02-10 10:01:34', '2018-02-11 03:22:30'),
(25, 'SKK-170349-2018-YUYU', '1', 'f5693896010dd013558961b73870e9135ae43e9f.jpg', 6, 5, 2, '100x400', 'Short', NULL, 0, 0, 1, 1, '2018-02-10 10:04:26', '2018-02-10 21:18:27'),
(27, 'SKK-022856-2018-YUYU', '1', '444db198cc860281d747680ebd2d950627356ef5.zip', 12, 12, 2, '200x100', 'Short', NULL, 0, 0, NULL, 1, '2018-02-10 19:31:50', '2018-02-10 19:31:50'),
(28, 'SKK-022856-2018-YUYU', '2', '444db198cc860281d747680ebd2d950627356ef5.jpeg', 13, 2, 2, '20x30', 'Short', NULL, 0, 0, NULL, 1, '2018-02-10 19:31:50', '2018-02-10 19:31:50'),
(29, 'SKK-053342-2018-YUYU', '1', 'ce7dea3d576d59f7c692c541f46bc94cf1f8da51.deb', 5, 5, 2, '200x300', 'Short', NULL, 0, 0, NULL, 1, '2018-02-10 22:34:50', '2018-02-10 22:34:50'),
(30, 'SKK-053342-2018-YUYU', '2', 'ce7dea3d576d59f7c692c541f46bc94cf1f8da51.zip', 5, 2, 1, '20x40', 'Short', NULL, 0, 0, NULL, 1, '2018-02-10 22:34:50', '2018-02-10 22:34:50'),
(31, '11022018002', '2', '7a5fb97488ffb840cc92274f1eb73a1a23adb9ca.deb', 4, 3, 1, '20x40', 'Short', NULL, 0, 0, NULL, 1, '2018-02-10 22:39:21', '2018-02-11 06:58:28'),
(32, '11022018002', '1', '7a5fb97488ffb840cc92274f1eb73a1a23adb9ca.deb', 4, 3, 2, '400x500', 'Short', NULL, 0, 0, NULL, 1, '2018-02-10 22:39:21', '2018-02-11 06:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '1',
  `member_from` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `role_id`, `member_from`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Azdim Zul Fahmi Keren', 'adzimzulfahmy@gmail.com', '$2y$10$LyYIBKi7K7nCyrHTeHNr7eHP37A4GWm4JQG/VQlrrZHDa4JvZLIOu', 'MTldcyriPBBrQoUGAyPYuhp00Nl5W07yi0bcNuOgOaON4j149ElO42KpKndj', 4, '2018-02-11 08:34:30', '6ff7f2344ebe70e084d2f676a2f6c5edd23f035c.jpeg', '2018-02-11 08:34:30', '2018-02-12 08:40:29'),
(2, 'Usman Hasan', 'usman@gmail.com', '$2y$10$LyYIBKi7K7nCyrHTeHNr7eHP37A4GWm4JQG/VQlrrZHDa4JvZLIOu', 'YYmMDBYWBtktWQbmGOn9sN0xeYSrLMUmHtqWQeNZQ33NsKtgTQBM1cxkhI8L', 3, '2018-02-12 15:09:09', '83ff64cf33182954c9f99b1893aa77a337f701af.jpg', '2018-02-11 17:00:00', '2018-02-12 08:54:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `designer_notify`
--
ALTER TABLE `designer_notify`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_cetakan`
--
ALTER TABLE `jenis_cetakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_kertas`
--
ALTER TABLE `jenis_kertas`
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
-- Indexes for table `role_access`
--
ALTER TABLE `role_access`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_jalan`
--
ALTER TABLE `surat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_jalan_detail`
--
ALTER TABLE `surat_jalan_detail`
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
-- AUTO_INCREMENT for table `designer_notify`
--
ALTER TABLE `designer_notify`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_cetakan`
--
ALTER TABLE `jenis_cetakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_kertas`
--
ALTER TABLE `jenis_kertas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_access`
--
ALTER TABLE `role_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `surat_jalan_detail`
--
ALTER TABLE `surat_jalan_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
