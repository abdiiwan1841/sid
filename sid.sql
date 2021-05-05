-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Bulan Mei 2021 pada 07.45
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

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
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
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
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
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
(93, '::1', 'rahmadjputra@gmail.com', 1, '2021-03-08 20:44:40', 1),
(94, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-13 14:09:24', 1),
(95, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-14 14:40:55', 1),
(96, '0.0.0.0', 'supervisor@gmail.com', 2, '2021-03-14 14:50:03', 1),
(97, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-14 14:51:20', 1),
(98, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-14 15:12:30', 1),
(99, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-14 19:20:43', 1),
(100, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-14 23:57:57', 1),
(101, '0.0.0.0', 'supervisor', NULL, '2021-03-15 00:00:55', 0),
(102, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-15 00:01:03', 1),
(103, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-15 05:22:54', 1),
(104, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-15 17:02:25', 1),
(105, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-16 11:28:08', 1),
(106, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-16 17:50:28', 1),
(107, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-16 21:06:10', 1),
(108, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-17 02:46:12', 1),
(109, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-17 09:26:21', 1),
(110, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-17 19:43:18', 1),
(111, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-18 10:42:56', 1),
(112, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-18 12:51:22', 1),
(113, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-19 01:47:37', 1),
(114, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-19 11:15:06', 1),
(115, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-19 16:53:11', 1),
(116, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-19 23:37:30', 1),
(117, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-20 12:10:06', 1),
(118, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-20 19:39:44', 1),
(119, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-21 14:12:21', 1),
(120, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-21 22:08:44', 1),
(121, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-22 12:14:31', 1),
(122, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-23 15:56:38', 1),
(123, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-23 23:31:18', 1),
(124, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-24 12:29:20', 1),
(125, '0.0.0.0', 'koko', NULL, '2021-03-24 21:54:43', 0),
(126, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-24 21:54:57', 1),
(127, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-25 00:03:01', 1),
(128, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-25 00:03:07', 1),
(129, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-26 19:22:39', 1),
(130, '0.0.0.0', 'rahmadjputra@gmail.com', 1, '2021-03-26 21:55:05', 1);

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
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `id` int(255) UNSIGNED NOT NULL,
  `no_kk` int(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `kode_pos` int(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `rw` int(255) DEFAULT NULL,
  `rt` int(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`id`, `no_kk`, `desa`, `kecamatan`, `kabupaten`, `kode_pos`, `provinsi`, `alamat`, `rw`, `rt`, `created_at`, `updated_at`) VALUES
(2, 123456, '', 'Medan Marelan', 'Marelan', 20255, 'Medan', 'Medan Marelan', 1, 2, '2021-03-22 06:05:34', '2021-03-22 06:05:34');

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
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1614573928, 1),
(6, '2021-03-14-125827', 'App\\Database\\Migrations\\UserMenu', 'default', 'App', 1615742714, 2),
(13, '2021-03-14-130557', 'App\\Database\\Migrations\\UserAccessMenu', 'default', 'App', 1615875352, 3),
(14, '2021-03-14-131103', 'App\\Database\\Migrations\\UserSubMenu', 'default', 'App', 1615875352, 3),
(15, '2021-03-16-061535', 'App\\Database\\Migrations\\UserMenu', 'default', 'App', 1615875420, 4),
(22, '2021-03-19-114330', 'App\\Database\\Migrations\\Kependudukan\\Keluarga', 'default', 'App', 1616339969, 5),
(23, '2021-03-19-123733', 'App\\Database\\Migrations\\Kependudukan\\Kependudukan', 'default', 'App', 1616339969, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(255) UNSIGNED NOT NULL,
  `keluarga_id` int(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `no_nik` int(255) DEFAULT NULL,
  `nama_ayah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `kawin` varchar(100) NOT NULL,
  `umur` int(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `dusun` varchar(100) DEFAULT NULL,
  `rw` int(255) DEFAULT NULL,
  `rt` int(255) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `hubungan_keluarga` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id`, `keluarga_id`, `nama_lengkap`, `foto`, `no_nik`, `nama_ayah`, `nama_ibu`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pendidikan`, `kawin`, `umur`, `alamat`, `dusun`, `rw`, `rt`, `pekerjaan`, `hubungan_keluarga`) VALUES
(1, 1, 'Rido Ananda', 'default.jpg', 1234567, 'ayah', 'ibu', 'Medan', '07 Juni 2003', 'Laki-laki', 'Islam', 'SMA', 'Sudah Kawin', 17, 'Medan, marelan', NULL, 1, 1, 'Kuli', 'Anak Kandung'),
(2, 1, 'Rido Ananda', 'default.jpg', 1234567, 'ayah', 'ibu', 'Medan', '07 Juni 2003', 'Laki-laki', 'Islam', 'SMA', 'Sudah Kawin', 17, 'Medan, marelan', NULL, 1, 1, 'Kuli', 'Anak Kandung');

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
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT '0',
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(255) UNSIGNED NOT NULL,
  `group_id` int(255) NOT NULL,
  `menu_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `group_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 2, 3),
(5, 1, 4),
(6, 2, 4),
(7, 1, 5),
(8, 1, 6),
(9, 2, 6),
(10, 1, 7),
(11, 2, 7),
(12, 1, 8),
(13, 2, 8),
(14, 1, 9),
(15, 2, 9),
(16, 1, 10),
(17, 2, 10),
(18, 1, 11),
(19, 3, 11),
(20, 1, 12),
(21, 2, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(255) UNSIGNED NOT NULL,
  `menu` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL DEFAULT 'fa-th-large'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`, `slug`, `icon`) VALUES
(1, 'Menu Management', 'menu-management', 'fa-folder-open'),
(3, 'Profil Wilayah', 'profil-wilayah', 'far fa-map-marker-alt'),
(4, 'Kependudukan', 'kependudukan', 'far fa-users'),
(6, 'Validasi', 'validasi', 'far fa-check-double'),
(7, 'Data Terpadu', 'data-terpadu', 'far fa-database'),
(8, 'Administrasi', 'administrasi', 'far fa-user-tie'),
(9, 'Pemerintahan', 'pemerintahan', 'far fa-gavel'),
(10, 'Data APBD Desa', 'data-apbd-desa', 'far fa-th-large'),
(11, 'Statistik Pintar', 'statistik-pintar', 'far fa-chart-line'),
(12, 'Layout Web Desa', 'layout-web-desa', 'far fa-browser');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(255) UNSIGNED NOT NULL,
  `menu_id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `is_active`) VALUES
(1, 1, 'Menu Management', 'menu-management', 1),
(2, 1, 'Submenu Management', 'menu-management/submenu-management', 1),
(3, 2, 'Role Akses', 'role-akses', NULL),
(4, 3, 'Data Wilayah', 'profil-wilayah', 1),
(5, 4, 'manajemen Penduduk', 'kependudukan', 1),
(6, 4, 'Manajemen Keluarga', 'kependudukan/keluarga', 1),
(7, 3, 'Data Desa/kelurahan', 'profil-wilayah/data-desa', 1),
(8, 3, 'Data Perangkat', 'profil-wilayah/data-perangkat', 1),
(9, 3, 'Data Potensi', 'profil-wilayah/data-potensi', 1),
(10, 4, 'Data Peristiwa', 'kependudukan/data-peristiwa', 1),
(11, 4, 'Dokumen Kependudukan', 'kependudukan/dokumen-kependudukan', 1),
(12, 6, 'Data Kependudukan', 'validasi', 1),
(13, 6, 'Pendidikan', 'validasi/pendidikan', 1),
(14, 6, 'Usia', 'validasi/usia', 1),
(15, 6, 'DPT', 'validasi/dpt', 1),
(16, 6, 'Kartu Keluarga', 'validasi/kartu-keluarga', 1),
(17, 6, 'Pembaruan Data', 'validasi/pembaruan-data', 1),
(18, 7, 'Kelompok Rentan', 'data-terpadu', 1),
(19, 7, 'DTKS', 'data-terpadu/dtks', 1),
(20, 7, 'Tuna Karya', 'data-terpadu/tuna-karya', 1),
(21, 7, 'Difabilitas', 'data-terpadu/difabilitas', 1),
(22, 7, 'Ibu Hamil', 'data-terpadu/ibu-hamil', 1),
(23, 7, 'Putus Sekolah', 'data-terpadu/putus-sekolah', 1),
(24, 7, 'Buta Huruf', 'data-terpadu/buta-huruf', 1),
(25, 7, 'Bantuan Sosial', 'data-terpadu/bantuan-sosial', 1),
(26, 7, 'Kustom Sesuai Kebutuhan', 'data-terpadu/kustom', 1),
(27, 8, 'Layanan Administrasi Online', 'administrasi', 1),
(28, 8, 'Inventaris', 'administrasi/inventaris', 1),
(29, 8, 'Aspirasi', 'administrasi/aspirasi', 1),
(30, 8, 'Layanan Surat Elektronik - Surat Keterangan Meninggal', 'administrasi/surat-elektronik/surat-meninggal', 1),
(31, 8, 'Layanan Surat Elektronik - Surat Keterangan Tidak Mampu', 'administrasi/surat-elektronik/surat-tidak-mampu', 1),
(32, 8, 'Layanan Surat Elektronik - Surat Keterangan Ahli Waris', 'administrasi/surat-elektronik/surat-ahli-waris', 1),
(33, 8, 'Layanan Surat Elektronik - Surat Keterangan usaha', 'administrasi/surat-elektronik/surat-usaha', 1),
(34, 9, 'Kas Umum', 'pemerintahan', 1),
(35, 9, 'Inventaris Desa/Kelurahan', 'pemerintahan/inventaris-desa', 1),
(36, 9, 'Tanah Warga', 'pemerintahan/tanah-warga', 1),
(37, 10, 'Data Anggaran - Pendapatan', 'data-apbd', 1),
(38, 10, 'Data Anggaran - Belanja', 'data-apbd/belanja', 1),
(39, 10, 'Data Anggaran - Pembiayaan', 'data-apbd/pembiayaan', 1),
(40, 10, 'Laporan Realisasi - Pendapatan', 'data-apbd/laporan-realisasi/pendapatan', 1),
(41, 10, 'Laporan Realisasi - Belanja', 'data-apbd/laporan-realisasi/belanja', 1),
(42, 10, 'Laporan Realisasi - Pembiayaan', 'data-apbd/laporan-realisasi/pembiayaan', 1),
(43, 11, 'Statistik Lahan', 'statistik', 1),
(44, 11, 'Statistik Kependudukan', 'statistik/kependudukan', 1),
(45, 11, 'Statistik Pendidikan', 'statistik/pendidikan', 1),
(46, 11, 'Statistik Kesehatan', 'statistik/kesehatan', 1),
(47, 11, 'Statistik Administrasi', 'statistik/administrasi', 1),
(48, 11, 'Statistik Sarana & Prasarana', 'statistik/sarana-prasarana', 1),
(49, 11, 'Statistik APBD Desa', 'statistik/apbd-desa', 1);

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
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

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
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

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
