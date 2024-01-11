-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4login`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'site administrator'),
(2, 'user', 'regular user');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 2),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 6),
(2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'wakanda441@gmail.com', 3, '2023-12-23 09:12:33', 1),
(2, '::1', 'wakanda441@gmail.com', 4, '2023-12-23 09:15:41', 1),
(3, '::1', 'wakanda441@gmail.com', 4, '2023-12-23 09:23:16', 1),
(4, '::1', 'wakanda441@gmail.com', 4, '2023-12-23 09:32:23', 1),
(5, '::1', 'wakanda441@gmail.com', 4, '2023-12-23 09:35:31', 1),
(6, '::1', 'gataumales009@gmail.com', 5, '2023-12-23 09:42:00', 1),
(7, '::1', 'wakanda441@gmail.com', 4, '2023-12-23 09:53:21', 1),
(8, '::1', 'gataumales009@gmail.com', 5, '2023-12-23 09:53:33', 1),
(9, '::1', 'wakanda441@gmail.com', 4, '2023-12-23 10:02:45', 1),
(10, '::1', 'gataumales009@gmail.com', 5, '2023-12-23 10:32:42', 1),
(11, '::1', 'wakanda441@gmail.com', 4, '2023-12-23 10:47:27', 1),
(12, '::1', 'gataumales009@gmail.com', 5, '2023-12-23 13:23:21', 1),
(13, '::1', 'wakanda441@gmail.com', 4, '2023-12-23 13:23:29', 1),
(14, '::1', 'gataumales009@gmail.com', 5, '2023-12-23 13:33:52', 1),
(15, '::1', 'gataumales009@gmail.com', 5, '2023-12-24 08:18:31', 1),
(16, '::1', 'wakanda441@gmail.com', 4, '2023-12-24 08:27:24', 1),
(17, '::1', 'shurakuma', NULL, '2023-12-24 08:28:09', 0),
(18, '::1', 'wakanda441@gmail.com', 4, '2023-12-24 08:28:15', 1),
(19, '::1', 'wakanda441@gmail.com', 4, '2024-01-02 05:32:02', 1),
(20, '::1', 'gataumales009@gmail.com', 5, '2024-01-02 06:36:55', 1),
(21, '::1', 'wakanda441@gmail.com', 4, '2024-01-02 07:20:48', 1),
(22, '::1', 'gataumales009@gmail.com', 5, '2024-01-02 07:42:23', 1),
(23, '::1', 'wakanda441@gmail.com', 4, '2024-01-02 07:49:42', 1),
(24, '::1', 'gataumales009@gmail.com', 5, '2024-01-02 08:08:46', 1),
(25, '::1', 'wakanda441@gmail.com', 4, '2024-01-02 08:13:21', 1),
(26, '::1', 'gataumales009@gmail.com', 5, '2024-01-02 08:14:31', 1),
(27, '::1', 'wakanda441@gmail.com', 4, '2024-01-02 08:16:38', 1),
(28, '::1', 'wakanda441@gmail.com', 4, '2024-01-05 03:09:13', 1),
(29, '::1', 'gataumales009@gmail.com', 5, '2024-01-05 03:11:18', 1),
(30, '::1', 'wakanda441@gmail.com', 4, '2024-01-06 11:37:28', 1),
(31, '::1', 'gataumales009@gmail.com', 5, '2024-01-06 12:19:46', 1),
(32, '::1', 'wakanda441@gmail.com', 4, '2024-01-06 12:37:59', 1),
(33, '::1', 'gataumales009@gmail.com', 5, '2024-01-06 12:45:55', 1),
(34, '::1', 'wakanda441@gmail.com', 4, '2024-01-06 12:49:07', 1),
(35, '::1', 'wakanda441@gmail.com', 4, '2024-01-06 15:56:14', 1),
(36, '::1', 'wakanda441@gmail.com', 4, '2024-01-06 19:50:00', 1),
(37, '::1', 'wakanda441@gmail.com', 4, '2024-01-07 12:43:03', 1),
(38, '::1', 'wakanda441@gmail.com', 4, '2024-01-07 22:38:25', 1),
(39, '::1', 'wakanda441@gmail.com', 4, '2024-01-08 11:45:34', 1),
(40, '::1', 'wakanda441@gmail.com', 4, '2024-01-08 14:27:05', 1),
(41, '::1', 'wakanda441@gmail.com', 4, '2024-01-08 20:09:26', 1),
(42, '::1', 'admin', NULL, '2024-01-08 21:03:50', 0),
(43, '::1', 'adminbps@gmail.com', 6, '2024-01-08 21:03:56', 1),
(44, '::1', 'userBPS@gmail.com', 7, '2024-01-08 21:05:31', 1),
(45, '::1', 'adminbps@gmail.com', 6, '2024-01-08 21:06:40', 1),
(46, '::1', 'adminbps@gmail.com', 6, '2024-01-09 20:09:31', 1),
(47, '::1', 'adminbps@gmail.com', 6, '2024-01-11 11:57:24', 1),
(48, '::1', 'adminbps@gmail.com', 6, '2024-01-11 11:58:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'manage all users'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `rating`, `message`, `created_at`) VALUES
(1, 'Puas', '', '2025-01-08 08:13:32'),
(6, 'Puas', '', '2024-01-08 08:42:39'),
(7, 'Tidak Puas', '', '2024-01-08 08:42:51'),
(8, 'Tidak Puas', '', '2024-01-08 08:43:30'),
(10, 'Tidak Puas', '', '2024-01-08 08:46:56'),
(11, 'Puas', '', '2024-01-08 08:47:08'),
(12, 'Puas', '', '2024-01-11 09:52:38'),
(13, 'Tidak Puas', '', '2024-01-11 09:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1703319086, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id` int(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `keperluan` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(20) DEFAULT 'ongoing',
  `completed_at` timestamp NULL DEFAULT NULL,
  `waktu_masuk` datetime DEFAULT NULL,
  `waktu_keluar` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id`, `nama`, `email`, `pendidikan`, `no_telp`, `pekerjaan`, `jenis_kelamin`, `keperluan`, `created_at`, `status`, `completed_at`, `waktu_masuk`, `waktu_keluar`) VALUES
(16, 'akuma', 'a@a', '', '08130801380', 'ASN', 'Perempuan', 'surrat', '2025-01-09 03:38:03', 'selesai', NULL, '2025-01-08 10:00:00', '2025-01-08 15:00:00'),
(63, 'akuma', 'gataumales009@gmail.com', '', '08130801380', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:06:38', 'selesai', '2024-01-06 08:07:09', '2024-01-06 15:06:38', '2024-01-06 15:40:25'),
(64, 'Mega', '-', '', '09012909210', 'ASN', 'Laki-laki', 'PST', '2024-01-06 08:07:20', 'selesai', '2024-01-06 08:07:25', '2024-01-06 15:07:20', '2024-01-06 15:40:22'),
(65, 'akuma', '-', '', '08130801380', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:09:26', 'selesai', NULL, '2024-01-06 15:09:26', '2024-01-06 15:45:10'),
(66, 'akuma', '-', '', '08130801380', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:09:30', 'selesai', NULL, '2024-01-06 15:09:30', '2024-01-06 15:49:32'),
(67, 'akuma', '-', '', '08130801380', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:09:34', 'selesai', '2024-01-06 08:11:43', '2024-01-06 15:09:34', '2024-01-06 15:42:55'),
(71, 'akuma', 'a@a', '', '09012909210', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:16:31', 'selesai', NULL, '2024-01-06 15:16:31', '2024-01-06 15:49:42'),
(72, 'akuma', 'a@a', '', '09012909210', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:16:36', 'selesai', NULL, '2024-01-06 15:16:36', '2024-01-06 15:49:40'),
(73, 'akuma', 'a@a', '', '09012909210', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:16:40', 'selesai', NULL, '2024-01-06 15:16:40', '2024-01-06 15:50:09'),
(74, 'akuma', 'a@a', '', '09012909210', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:16:44', 'selesai', '2024-01-06 08:16:50', '2024-01-06 15:16:44', '2024-01-06 15:49:37'),
(75, 'Mega', '-', '', '09012909210', 'ASN', 'Perempuan', 'PST', '2024-01-06 08:28:10', 'selesai', NULL, '2024-01-06 15:28:10', '2024-01-06 15:48:54'),
(76, 'akuma', 'wakanda441@gmail.com', '', '09012909210', 'ASN', 'Laki-laki', 'Menemui Seseorang', '2024-01-06 08:29:24', 'selesai', NULL, '2024-01-06 15:29:24', '2024-01-06 15:48:46'),
(77, 'Mega', '-', '', '09012909210', 'Perangkat Desa', 'Laki-laki', 'Menemui Seseorang', '2024-01-06 08:33:52', 'selesai', NULL, '2024-01-06 15:33:52', '2024-01-06 15:40:10'),
(78, 'akuma', '', '', '08130801380', 'ASN', 'Perempuan', 'Menemui Seseorang', '2024-01-06 08:50:33', 'selesai', NULL, '2024-01-06 15:50:33', '2024-01-06 15:50:51'),
(79, 'akuma', 'wakanda441@gmail.com', '', '08130801380', 'ASN', 'Laki-laki', 'PST', '2024-01-06 09:03:17', 'selesai', NULL, '2024-01-06 16:03:17', '2024-01-06 16:04:02'),
(81, 'a', 'wakanda441@gmail.com', '', '08130801380', 'Perangkat Desa', 'Perempuan', 'PST', '2024-01-06 09:12:49', 'selesai', NULL, '2024-01-06 16:12:49', '2024-01-06 16:13:00'),
(82, 'Mega', 'gataumales009@gmail.com', '', '08130801380', 'ASN', 'Perempuan', 'PST', '2024-01-06 09:15:38', 'selesai', NULL, '2024-01-06 16:15:38', '2024-01-06 16:15:46'),
(84, 'Mega', 'wakanda441@gmail.com', '', '08130801380', 'Perangkat Desa', 'Laki-laki', 'Menemui Seseorang', '2024-01-06 09:36:57', 'selesai', NULL, '2024-01-06 16:36:57', '2024-01-07 16:55:01'),
(104, 'a', '-', '', '08130801380', '', 'Perempuan', '', '2024-01-08 07:06:05', 'selesai', NULL, '2024-01-08 14:06:05', '2024-01-08 14:08:10'),
(105, 'akuma', '-', '', '09012909210', 'ASN', 'Perempuan', 'PST', '2024-01-08 07:07:27', 'selesai', NULL, '2024-01-08 14:07:27', '2024-01-08 14:08:07'),
(106, 'akuma', '-', '', '09012909210', 'Umum/Lainnya', 'Perempuan', 'Lainnya', '2024-01-08 07:07:44', 'selesai', NULL, '2024-01-08 14:07:44', '2024-01-08 14:08:04'),
(107, 'Mega', 'wakanda441@gmail.com', '', '09012909210', '', NULL, '', '2024-01-08 07:10:15', 'ongoing', NULL, '2024-01-08 14:10:15', NULL),
(108, 'Mega', 'wakanda441@gmail.com', '', '09012909210', '', 'Perempuan', 'surrat', '2024-01-08 07:12:02', 'ongoing', NULL, '2024-01-08 14:12:02', NULL),
(109, 'Mega', 'wakanda441@gmail.com', '', '09012909210', '', 'Perempuan', 'surrat', '2024-01-08 07:12:53', 'ongoing', NULL, '2024-01-08 14:12:53', NULL),
(110, 'akuma', '-', '', '09012909210', 'Perangkat Desa', 'Laki-laki', '', '2024-01-08 07:18:46', 'ongoing', NULL, '2024-01-08 14:18:46', NULL),
(111, 'akuma', '-', '', '09012909210', 'Perangkat Desa', 'Laki-laki', 'surrat', '2024-01-08 07:19:07', 'ongoing', NULL, '2024-01-08 14:19:07', NULL),
(112, 'Mega', 'wakanda441@gmail.com', '', '09012909210', '', 'Perempuan', '', '2024-01-08 07:20:43', 'ongoing', NULL, '2024-01-08 14:20:43', NULL),
(114, 'akuma', '', '', '09012909210', 'Perangkat Desa', 'Perempuan', '', '2024-01-08 07:23:24', 'ongoing', NULL, '2024-01-08 14:23:24', NULL),
(115, 'akuma', '', '', '09012909210', 'Perangkat Desa', 'Perempuan', 'Menemui Seseorang', '2024-01-08 07:24:18', 'ongoing', NULL, '2024-01-08 14:24:18', NULL),
(116, 'akuma', '', '', '09012909210', 'Perangkat Desa', 'Perempuan', 'PST', '2024-01-08 07:24:32', 'ongoing', NULL, '2024-01-08 14:24:32', NULL),
(117, 'testing', '-', '', '121431314', 'ASN', 'Laki-laki', 'PST', '2024-01-08 07:27:27', 'ongoing', NULL, '2024-01-08 14:27:27', NULL),
(118, 'testing', '-', '', '121431314', 'Perangkat Desa', 'Laki-laki', 'Menemui Seseorang', '2024-01-08 07:28:09', 'ongoing', NULL, '2024-01-08 14:28:09', NULL),
(119, 'testing', '-', '', '121431314', 'Mahasiswa', 'Laki-laki', 'Menemui Seseorang', '2024-01-08 07:28:22', 'ongoing', NULL, '2024-01-08 14:28:22', NULL),
(120, 'testing', '-', '', '121431314', 'Umum/Lainnya - Ibu Rumah Tangga', 'Laki-laki', 'Lainnya - surat', '2024-01-08 07:28:48', 'ongoing', NULL, '2024-01-08 14:28:48', NULL),
(121, 'testing', '-', '', '182018', 'Ibu Rumah Tangga', 'Perempuan', 'surat', '2024-01-08 07:32:39', 'ongoing', NULL, '2024-01-08 14:32:39', NULL),
(122, 'testing', '-', '', '182018', 'Ibu Rumah Tangga', 'Perempuan', 'surat', '2024-01-08 07:33:00', 'ongoing', NULL, '2024-01-08 14:33:00', NULL),
(123, 'testing', '-', '', '182018', 'ASN', 'Perempuan', 'surat', '2024-01-08 07:33:18', 'ongoing', NULL, '2024-01-08 14:33:18', NULL),
(124, 'testing', '-', '', '182018', 'ASN', 'Perempuan', 'PST', '2024-01-08 07:33:35', 'ongoing', NULL, '2024-01-08 14:33:35', NULL),
(125, 'testing', '-', '', '182018', 'Perangkat Desa', 'Laki-laki', 'Menemui Seseorang', '2024-01-08 08:59:25', 'ongoing', NULL, '2024-01-08 15:59:25', NULL),
(126, 'testing', '-', '', '182018', 'Anime', 'Laki-laki', 'mengantar Surat', '2024-01-08 09:00:01', 'ongoing', NULL, '2024-01-08 16:00:01', NULL),
(127, 'akuma', '-', '', '09012909210', 'Perangkat Desa', 'Perempuan', 'PST', '2024-01-08 13:11:08', 'ongoing', NULL, '2024-01-08 20:11:08', NULL),
(128, 'Mega', 'wakanda441@gmail.com', '', '09012909210', 'Mahasiswa', 'Perempuan', 'PST', '2024-01-08 13:12:26', 'ongoing', NULL, '2024-01-08 20:12:26', NULL),
(129, 'Mega', 'wakanda441@gmail.com', '', '09012909210', 'Mahasiswa', 'Perempuan', 'Menemui Seseorang', '2024-01-08 13:51:32', 'ongoing', NULL, '2024-01-08 20:51:32', NULL),
(130, 'Mega', 'wakanda441@gmail.com', 'D4/S1 Sederajat', '09012909210', 'Perangkat Desa', 'Laki-laki', 'PST', '2024-01-09 13:32:00', 'ongoing', NULL, '2024-01-09 20:32:00', NULL),
(131, 'akuma', 'wakanda441@gmail.com', 'S2/S3 Sederajat', '09012909210', 'Perangkat Desa', 'Perempuan', 'Menemui Seseorang', '2024-01-11 05:12:40', 'ongoing', NULL, '2024-01-11 12:12:40', NULL),
(132, 'ahmad yani', 'wakanda441@gmail.com', 'S2/S3 Sederajat', '09012909210', 'Perangkat Desa', 'Laki-laki', 'PST', '2024-01-11 09:44:01', 'ongoing', NULL, '2024-01-11 16:44:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
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
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'adminbps@gmail.com', 'admin', NULL, 'default.svg', '$2y$10$gZP7KeaN/.B0wawWOsk51uqFO9g8rOxVLPPcQMkNYDfWllrtW4IZi', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-08 21:03:45', '2024-01-08 21:03:45', NULL),
(7, 'userBPS@gmail.com', 'user', NULL, 'default.svg', '$2y$10$D8iRShk7Jin1EvqrfdeWYO8ECeww4ASHSIzXSzRfum8dbBT7eRhHO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-01-08 21:05:25', '2024-01-08 21:05:25', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
