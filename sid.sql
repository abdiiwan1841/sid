-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Mar 2021 pada 09.07
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin'),
(2, 'supervisor', 'supervisor'),
(3, 'operator', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 2),
(2, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2),
(3, 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-02 20:51:07', 1),
(2, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 04:39:44', 1),
(3, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 04:45:51', 1),
(4, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 04:47:32', 1),
(5, '::1', 'operator@gmail.com', 3, '2021-03-03 04:57:43', 1),
(6, '::1', 'mamad', NULL, '2021-03-03 05:03:54', 0),
(7, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 05:04:05', 1),
(8, '::1', 'operator@gmail.com', 3, '2021-03-03 05:05:21', 1),
(9, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 05:09:36', 1),
(10, '::1', 'operator@gmail.com', 3, '2021-03-03 05:09:55', 1),
(11, '::1', 'supervisor@gmail.com', 2, '2021-03-03 05:10:34', 1),
(12, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 05:17:07', 1),
(13, '::1', 'supervisor@gmail.com', 2, '2021-03-03 05:17:25', 1),
(14, '::1', 'operator@gmail.com', 3, '2021-03-03 05:17:50', 1),
(15, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 05:19:30', 1),
(16, '::1', 'supervisor@gmail.com', 2, '2021-03-03 05:19:50', 1),
(17, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 05:34:36', 1),
(18, '::1', 'supervisor@gmail.com', 2, '2021-03-03 05:35:59', 1),
(19, '::1', 'supervisor@gmail.com', 2, '2021-03-03 05:37:35', 1),
(20, '::1', 'operator@gmail.com', 3, '2021-03-03 05:37:55', 1),
(21, '::1', 'supervisor@gmail.com', 2, '2021-03-03 05:46:45', 1),
(22, '::1', 'supervisor@gmail.com', 2, '2021-03-03 07:06:43', 1),
(23, '::1', 'supervisor@gmail.com', 2, '2021-03-03 07:07:09', 1),
(24, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 07:12:58', 1),
(25, '::1', 'operator@gmail.com', 3, '2021-03-03 07:13:49', 1),
(26, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 07:15:01', 1),
(27, '::1', 'supervisor@gmail.com', 2, '2021-03-03 07:23:16', 1),
(28, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 07:24:44', 1),
(29, '::1', 'supervisor@gmail.com', 2, '2021-03-03 07:26:37', 1),
(30, '::1', 'operator@gmail.com', 3, '2021-03-03 07:27:43', 1),
(31, '::1', 'operator@gmail.com', 3, '2021-03-03 07:28:44', 1),
(32, '::1', 'operator@gmail.com', 3, '2021-03-03 07:28:58', 1),
(33, '::1', 'operator@gmail.com', 3, '2021-03-03 07:29:43', 1),
(34, '::1', 'operator@gmail.com', 3, '2021-03-03 07:31:15', 1),
(35, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 07:31:44', 1),
(36, '::1', 'supervisor@gmail.com', 2, '2021-03-03 07:32:06', 1),
(37, '::1', 'operator@gmail.com', 3, '2021-03-03 07:32:26', 1),
(38, '::1', 'koko', NULL, '2021-03-03 19:47:17', 0),
(39, '::1', 'koko', NULL, '2021-03-03 19:47:26', 0),
(40, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 19:47:41', 1),
(41, '::1', 'koko', NULL, '2021-03-03 19:48:16', 0),
(42, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 19:48:24', 1),
(43, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 19:49:00', 1),
(44, '::1', 'supervisor@gmail.com', 2, '2021-03-03 19:49:16', 1),
(45, '::1', 'supervisor@gmail.com', 2, '2021-03-03 19:49:48', 1),
(46, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 19:52:56', 1),
(47, '::1', 'supervisor@gmail.com', 2, '2021-03-03 19:53:05', 1),
(48, '::1', 'operator@gmail.com', 3, '2021-03-03 19:53:19', 1),
(49, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 20:43:09', 1),
(50, '::1', 'supervisor@gmail.com', 2, '2021-03-03 20:43:33', 1),
(51, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 20:51:13', 1),
(52, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 20:52:25', 1),
(53, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 22:07:25', 1),
(54, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-03 23:52:45', 1),
(55, '::1', 'contoh', NULL, '2021-03-04 00:10:39', 0),
(56, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-04 00:13:43', 1),
(57, '::1', 'contoh', NULL, '2021-03-04 00:31:45', 0),
(58, '::1', 'contoh', NULL, '2021-03-04 00:33:32', 0),
(59, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-04 00:38:17', 1),
(60, '::1', 'contoh', NULL, '2021-03-04 00:38:56', 0),
(61, '::1', 'contoh', NULL, '2021-03-04 00:39:32', 0),
(62, '::1', 'contoh', NULL, '2021-03-04 00:39:59', 0),
(63, '::1', 'operator@gmail.com', 3, '2021-03-04 00:41:05', 1),
(64, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-04 00:41:25', 1),
(65, '::1', 'contoh', NULL, '2021-03-04 00:42:21', 0),
(66, '::1', 'contoh', NULL, '2021-03-04 00:42:31', 0),
(67, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-04 00:45:30', 1),
(68, '::1', 'contoh', NULL, '2021-03-04 00:46:41', 0),
(69, '::1', 'contoh@gmail.com', 14, '2021-03-04 01:02:54', 1),
(70, '::1', 'contoh@gmail.com', 14, '2021-03-04 01:06:46', 1),
(71, '::1', 'operator@gmail.com', 3, '2021-03-04 01:07:54', 1),
(72, '::1', 'contoh@gmail.com', 14, '2021-03-04 01:08:12', 1),
(73, '::1', 'operator@gmail.com', 3, '2021-03-04 01:09:29', 1),
(74, '::1', 'contoh@gmail.com', 14, '2021-03-04 01:09:52', 1),
(75, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-04 01:11:53', 1),
(76, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-04 01:12:05', 1),
(77, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-04 20:23:08', 1),
(78, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-04 20:42:45', 1),
(79, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-05 05:35:04', 1),
(80, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-05 19:19:51', 1),
(81, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-05 23:14:04', 1),
(82, '::1', 'koko', NULL, '2021-03-06 03:52:14', 0),
(83, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-06 03:52:23', 1),
(84, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-07 19:53:53', 1),
(85, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-07 21:43:41', 1),
(86, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-07 21:55:18', 1),
(87, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-07 22:26:40', 1),
(88, '::1', 'koko', NULL, '2021-03-07 22:32:43', 0),
(89, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-07 22:32:52', 1),
(90, '::1', 'contoh@gmail.com', 19, '2021-03-07 22:49:54', 1),
(91, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-08 20:28:05', 1),
(92, '::1', 'koko', NULL, '2021-03-08 20:44:32', 0),
(93, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-08 20:44:40', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'm_admin', 'm_admin'),
(2, 'm_supervisor', 'm_supervisor'),
(3, 'm_operator', 'm_operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(255) NOT NULL,
  `no_kk` int(255) NOT NULL,
  `desa` varchar(20) NOT NULL,
  `dusun` varchar(20) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(255) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nm_ayah` varchar(255) NOT NULL,
  `nm_ibu` varchar(255) NOT NULL,
  `tgl_nikah` date NOT NULL,
  `no_akta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1614573928, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(255) NOT NULL,
  `tmpt_lahir` varchar(255) NOT NULL,
  `tgl_lahir` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `status_nikah` varchar(255) NOT NULL,
  `kab` varchar(255) NOT NULL,
  `kec` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `dusun` varchar(255) NOT NULL,
  `rw` int(5) NOT NULL,
  `rt` int(5) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `kependudukan` varchar(255) NOT NULL,
  `nm_ayah` varchar(255) DEFAULT NULL,
  `nm_ibu` varchar(255) DEFAULT NULL,
  `status_anak` varchar(20) NOT NULL,
  `kode_pos` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `keluarga_id` int(255) DEFAULT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `nama`, `nik`, `tmpt_lahir`, `tgl_lahir`, `jenkel`, `agama`, `pendidikan`, `status_nikah`, `kab`, `kec`, `desa`, `dusun`, `rw`, `rt`, `alamat`, `pekerjaan`, `kependudukan`, `nm_ayah`, `nm_ibu`, `status_anak`, `kode_pos`, `created_at`, `keluarga_id`, `updated_at`) VALUES
(6, 'mamad', 12345, 'Medan', '03/16/2021', 'L', '', '', 'Nikah', '', '', '', '', 0, 0, '', '', 'WNI', NULL, NULL, '', 0, '2021-03-06 04:10:17', NULL, '2021-03-07 21:24:36');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `group_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `group_id`) VALUES
(1, 'rahmadjputra@gmail.com', 'koko', '$2y$10$p2kvnaoc9pw8mRX8hDx39.GGNuitENcJV.gcwcd6xQITnvYb0g022', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-02 20:50:56', '2021-03-02 20:50:56', NULL, 1),
(2, 'supervisor@gmail.com', 'supervisor', '$2y$10$0NkBvtx4AMFsRSq38nGdX.qgWGG5aaQGUupZGdpy7cbUq7ljixW7y', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-03 04:49:04', '2021-03-03 04:49:04', NULL, 2),
(19, 'contoh@gmail.com', 'contoh', '$2y$10$oN8eFUgqFNLAK73XkE90S..DCI.IzpKki9bfQkt/lQbGymRHDHXX2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-07 22:49:43', '2021-03-08 20:29:46', NULL, 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
