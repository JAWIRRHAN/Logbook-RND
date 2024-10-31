-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Okt 2024 pada 03.27
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retain`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat`
--

CREATE TABLE `alat` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `tgl` date NOT NULL,
  `urai_pggn` tinytext NOT NULL,
  `kondisi` tinytext NOT NULL,
  `nm` tinytext NOT NULL,
  `remar` tinytext NOT NULL,
  `oleh` tinytext NOT NULL,
  `svp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alat`
--

INSERT INTO `alat` (`id`, `tgl_input`, `no_form`, `tgl`, `urai_pggn`, `kondisi`, `nm`, `remar`, `oleh`, `svp`) VALUES
(19, '2024-09-27 08:26:32', 'OS-09-24-0001', '2024-09-12', 'vdjqvhjq', 'Baik', 'Johan.Asssaalamm', 'hvhvwvd', 'Hulk', ''),
(20, '2024-09-27 08:27:07', 'OS-09-24-0002', '2024-09-18', 'hvdhjvqd', 'Baik', 'Johan.Asssaalamm', 'hfjwvfgw', 'Hulk', ''),
(21, '2024-09-27 08:30:05', 'OS-09-24-0003', '2024-09-10', 'ndhvhqd', 'Baik', 'hbqjhdv3333', 'hvdqh', '', ''),
(22, '2024-09-27 08:44:09', 'OS-09-24-0004', '2024-09-12', 'jdhvjqhvd', 'Baik', 'bdvgqgd443434', 'qhdvjgwcg', 'Hulk', ''),
(23, '2024-09-27 09:04:58', 'SB-09-24-0001', '2024-09-25', '', '', '', 'hvfhwvfhw', 'Hulk', ''),
(24, '2024-09-27 09:06:30', 'SB-09-24-0001', '2024-09-03', '', '', '', 'c hwvfhw', 'Hulk', ''),
(25, '2024-09-27 16:51:55', 'OS-09-24-0005', '2024-09-12', 'eajfbjkabfwu', 'Baik', 'CBSHVDHV', 'JHVSHCHSV', 'Hulk', ''),
(26, '2024-09-27 16:52:18', 'OS-09-24-0006', '2024-09-05', ',mzcbcvjdbh', 'Buruk', 'mvcjhsvfhsw', 'vbhvswfch', 'Hulk', ''),
(27, '2024-10-04 08:56:04', 'OS-10-24-0007', '2024-10-07', 'dnvhqvdh', 'Baik', 'dqhvdh', 'vhqdhvqhj', 'Photografer', ''),
(28, '2024-10-04 08:56:19', 'OS-10-24-0008', '2024-10-25', 'nwvfhvwdyh', 'Baik', 'jbfhvh', 'jfhvfgvw', 'Photografer', ''),
(29, '2024-10-04 08:56:35', 'OS-10-24-0009', '2024-10-26', 'nfvhwvdhw', 'Buruk', 'nhfvqv', 'hvfgvwjh', 'Photografer', ''),
(30, '2024-10-04 08:56:51', 'OS-10-24-0010', '2024-10-26', 'dvqjhdvqh', 'Baik', 'jhvdqgcg', 'hvwfgvluva', 'Photografer', ''),
(31, '2024-10-04 08:57:24', 'OS-10-24-0011', '2024-10-01', 'ndf jfgqj', 'Buruk', 'dn jhvqg', 'jqdbhjvhfjwf', 'Photografer', ''),
(32, '2024-10-04 08:57:44', 'OS-10-24-0012', '2024-10-24', 'fbjbfhjw', 'Buruk', 'fnwvhvqh', 'hvfgvefgjw', 'Photografer', ''),
(33, '2024-10-08 15:30:27', 'OS-10-24-0013', '2024-10-23', 'fnbwcfgcwg', 'Buruk', 'djkwdhfvy', 'hvfhjwvfhwv', 'Photografer', ''),
(36, '2024-10-11 14:31:43', 'OS-10-24-0014', '2024-11-08', 'ndbhjwv', 'Buruk', 'm,jkghyg788', 'jtr5e5e5', 'Fardhan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_blender`
--

CREATE TABLE `alat_blender` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `tgl` date NOT NULL,
  `produk` tinytext NOT NULL,
  `knds_alt` tinytext NOT NULL,
  `nm` tinytext NOT NULL,
  `ctn_rm` tinytext NOT NULL,
  `oleh` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alat_blender`
--

INSERT INTO `alat_blender` (`id`, `tgl_input`, `no_form`, `tgl`, `produk`, `knds_alt`, `nm`, `ctn_rm`, `oleh`) VALUES
(3, '2024-09-26 16:26:47', 'AB-09-24-0001', '2024-09-10', 'hvyh1232', 'Buruk', 'vgvg567', 'hvhjvgh', 'Hulk'),
(4, '2024-09-26 16:26:47', 'AB-09-24-0002', '2024-09-13', 'vvgv123', 'Buruk', 'vvhj', 'jhvhgvgh', 'Hulk'),
(5, '2024-09-26 16:26:47', '', '0000-00-00', '', '', '', '', ''),
(6, '2024-09-30 13:28:09', 'AB-09-24-0003', '2024-09-23', 'jhdvqdvy', 'Buruk', 'jhvdgqc', 'wfhvwgv', 'Hulk Man 332'),
(7, '2024-10-08 15:37:45', 'AB-10-24-0004', '2024-10-31', 'ghhh', 'Buruk', 'hvdhwv', 'f566', 'Photografer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alat_tokebi`
--

CREATE TABLE `alat_tokebi` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `tgl` date NOT NULL,
  `ur_pgn` tinytext NOT NULL,
  `knds_alt` tinytext NOT NULL,
  `nm` tinytext NOT NULL,
  `ctn_rm` tinytext NOT NULL,
  `oleh` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `alat_tokebi`
--

INSERT INTO `alat_tokebi` (`id`, `tgl_input`, `no_form`, `tgl`, `ur_pgn`, `knds_alt`, `nm`, `ctn_rm`, `oleh`) VALUES
(4, '2024-09-26 16:27:32', 'AT-09-24-0001', '2024-09-04', 'bvdgcg', 'Baik', 'hvqgc', 'bqgcgdq', 'Hulk'),
(5, '2024-09-26 16:27:32', 'AT-09-24-0002', '2024-09-05', 'bvgdvqg34678', 'Buruk', 'hvdgcq', 'bdqgcg', 'Hulk'),
(6, '2024-09-27 08:50:49', 'AT-09-24-0003', '2024-09-03', 'ndvjhvhq2121', 'Buruk', 'bdhvhq', 'dhvgdvhq', 'Hulk'),
(7, '2024-10-08 15:46:27', 'AT-10-24-0004', '2024-10-16', 'dhvdhcg', 'Baik', 'dhvqjgdcgc', '675444', 'Photografer'),
(8, '2024-10-09 16:45:24', 'AT-10-24-0005', '2024-10-24', 'hshg', 'Buruk', 'fhvwhdvy', 'hjkl11', 'Fardhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `base`
--

CREATE TABLE `base` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `nm_pro` tinytext NOT NULL,
  `tgl` date NOT NULL,
  `skl` tinytext NOT NULL,
  `jns_sedia` tinytext NOT NULL,
  `serah_nm` tinytext NOT NULL,
  `tm_nm` tinytext NOT NULL,
  `remar` tinytext NOT NULL,
  `oleh` tinytext NOT NULL,
  `svp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `base`
--

INSERT INTO `base` (`id`, `tgl_input`, `no_form`, `nm_pro`, `tgl`, `skl`, `jns_sedia`, `serah_nm`, `tm_nm`, `remar`, `oleh`, `svp`) VALUES
(4, '2024-09-27 09:07:15', 'SB-09-24-0001', 'vvwdvt76767', '2024-09-13', 'hcwvjhwfvh', 'jhwcvjwvwhg', 'bvdqgcd', 'gcdgc1111', 'hdqvwgdfcg', 'Hulk', ''),
(5, '2024-09-27 09:17:08', 'SB-09-24-0002', 'dgyqdyqg', '2024-09-25', 'hvddcg', 'dqvgvjq', 'dnqhqdv', 'hvqdjcqd', 'hqdvhdqj', 'Hulk', ''),
(6, '2024-09-27 09:51:59', 'SB-09-24-0003', 'mnmvhadvh', '2024-09-17', 'hcvjhsv', 'hvchjvh', 'dqbdhvhy', 'hvdhvqd2121212', 'jschvwh', 'Hulk', ''),
(7, '2024-10-08 15:48:56', 'SB-10-24-0004', 'dnhdvcv', '2024-10-16', 'hvdhvfvh', 'hfvgdhw', 'nmvfhwvhj', 'hdjhvfhvw', '567', 'Photografer', ''),
(8, '2024-10-09 16:49:27', 'SB-10-24-0005', 'dhdyy', '2024-10-09', 'jhjjii', 'hfvwyvywg', 'cfhwvv', 'hvscg ', 'gyuy666666', 'Fardhan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `form_list`
--

CREATE TABLE `form_list` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `kd_list` tinytext NOT NULL,
  `nm_kons` tinytext NOT NULL,
  `nm_prod` tinytext NOT NULL,
  `tgl_fix` date NOT NULL,
  `jml_list` tinytext NOT NULL,
  `remar` tinytext NOT NULL,
  `oleh` tinytext NOT NULL,
  `svp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `form_list`
--

INSERT INTO `form_list` (`id`, `tgl_input`, `no_form`, `kd_list`, `nm_kons`, `nm_prod`, `tgl_fix`, `jml_list`, `remar`, `oleh`, `svp`) VALUES
(7, '2024-10-09 08:51:47', 'LR-10-24-0001', 'dd', 'aa', 'ss', '2024-10-09', 'ss', 'ss', 'Photografer', ''),
(8, '2024-10-09 16:52:36', 'LR-10-24-0002', 'fhgwy', 'hfvwhv', 'fhwhfyw', '2024-10-29', 'dhwdvv', '8900', 'Fardhan', ''),
(9, '2024-10-10 11:20:58', 'LR-10-24-0003', 'vhfyftf1ttc', 'xfxfxf', 'xfcjvgy', '2024-10-02', 'hjvctct', 'gcgdtft1222', 'Fardhan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `homogen`
--

CREATE TABLE `homogen` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `tgl` date NOT NULL,
  `urai_pggn` tinytext NOT NULL,
  `kondisi` tinytext NOT NULL,
  `nm` tinytext NOT NULL,
  `remar` tinytext NOT NULL,
  `oleh` tinytext NOT NULL,
  `svp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `homogen`
--

INSERT INTO `homogen` (`id`, `tgl_input`, `no_form`, `tgl`, `urai_pggn`, `kondisi`, `nm`, `remar`, `oleh`, `svp`) VALUES
(8, '0000-00-00 00:00:00', 'HG-09-24-0001', '2024-09-11', 'dbqjvd12', 'Baik', 'Johan.Asssaalamm', '', '', ''),
(11, '0000-00-00 00:00:00', 'HG-09-24-0002', '2024-09-02', 'hvrjhvr123', 'Buruk', 'Johan.Asssaalamm', 'bqdhjvq', '', ''),
(12, '0000-00-00 00:00:00', 'HG-09-24-0003', '2024-09-10', 'n hjdvqh', 'Baik', 'Johan.Asssaalamm', 'djhqvjgqvd', 'Hulk', ''),
(13, '0000-00-00 00:00:00', 'HG-09-24-0004', '2024-09-11', 'dhvqdh', 'Baik', 'Johan.Asssaalamm', 'hvhhdq', 'Hulk', ''),
(14, '0000-00-00 00:00:00', 'HG-09-24-0005', '2024-09-16', 'dn jhvdhq', 'Buruk', 'qdqd', 'ncdqghctdg', '', ''),
(15, '2024-09-26 16:30:37', 'HG-09-24-0006', '2024-09-04', 'nd qvddq1213', 'Baik', 'gkhg', 'jhvjgqd', '', ''),
(16, '2024-09-26 16:41:01', 'HG-09-24-0007', '2024-09-19', 'dnqhvd3445', 'Buruk', 'ddqd', 'hvdhvqh', '', ''),
(17, '2024-09-26 16:45:34', 'HG-09-24-0008', '2024-09-12', 'dm wmd 122', 'Baik', 'hjh2vgh', 'vg2vg', '', ''),
(18, '2024-09-26 16:47:05', 'HG-09-24-0009', '2024-09-18', 'dwjhvdhw', 'Baik', 'b dggq', 'hdhjv2h', '', ''),
(19, '2024-09-26 16:50:21', 'HG-09-24-0010', '2024-09-11', 'cbhjvdywh', 'Baik', 'jhjgwvd', 'jhjvdgqv', 'Hulk', ''),
(20, '2024-09-26 16:52:46', 'HG-09-24-0011', '2024-09-13', 'jhvdhv', 'Baik', 'jhvqgd555', 'jhvdqvdh', 'Hulk', ''),
(21, '2024-09-27 08:11:17', 'HG-09-24-0012', '2024-09-07', 'vhjhqdvhq11111', 'Baik', 'hvjgfdq', 'chwyuw', 'Hulk', ''),
(22, '2024-10-08 15:34:56', 'HG-10-24-0013', '2024-10-16', 'gh', 'Buruk', 'dhwhdvy', '56', 'Photografer', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hotplate`
--

CREATE TABLE `hotplate` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `tgl` date NOT NULL,
  `ur_pgn` tinytext NOT NULL,
  `knds_alt` tinytext NOT NULL,
  `nm` tinytext NOT NULL,
  `ctn_rm` tinytext NOT NULL,
  `oleh` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hotplate`
--

INSERT INTO `hotplate` (`id`, `tgl_input`, `no_form`, `tgl`, `ur_pgn`, `knds_alt`, `nm`, `ctn_rm`, `oleh`) VALUES
(2, '2024-09-25 14:01:11', 'HP-09-24-0001', '2024-09-06', 'hvdwvd', 'Baik', 'dwhhwd', 'hvhhw', ''),
(3, '2024-09-25 14:05:08', 'HP-09-24-0002', '2024-09-14', 'vdhqvh', 'Buruk', 'vdgqvg', 'vgvwgd', ''),
(4, '2024-09-25 14:08:44', 'HP-09-24-0003', '2024-09-11', 'vdvhqd', 'Baik', 'dhvqdv', 'vhdqv', ''),
(5, '2024-09-25 14:18:03', 'HP-09-24-0004', '2024-09-12', 'hvhdvq', 'Baik', 'vgvd', 'vdhqd', ''),
(6, '2024-09-25 15:09:05', 'HP-09-24-0005', '2024-09-06', 'vdhvdhw', 'Buruk', 'bhbdhw', 'djwnfjw', ''),
(7, '2024-09-25 15:12:28', 'HP-09-24-0006', '2024-09-13', 'dvwdh22', 'Baik', 'bvhvw', 'vhvhw', 'Hulk'),
(8, '2024-09-25 15:21:41', 'HP-09-24-0007', '2024-09-09', 'nbvjhavhs8908', 'Buruk', 'vhjdvhjw', 'vdhgdhw', 'Hulk'),
(9, '2024-09-25 15:29:09', 'HP-09-24-0008', '2024-09-10', 'vdjgvsg777777', 'Baik', 'vhjvdw', 'vhjwvd', 'Hulk'),
(10, '2024-10-08 15:40:38', 'HP-10-24-0009', '2024-10-30', 'dnvwhdvh', 'Buruk', 'tty', '90', 'Photografer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamera`
--

CREATE TABLE `kamera` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `tgl_pgn` date NOT NULL,
  `nm` tinytext NOT NULL,
  `wkt_pgn_mulai` time NOT NULL,
  `wkt_pgn_selesai` time NOT NULL,
  `ttl_pgn` time NOT NULL,
  `tgn` tinytext NOT NULL,
  `ctn_rm` tinytext NOT NULL,
  `oleh` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kamera`
--

INSERT INTO `kamera` (`id`, `tgl_input`, `no_form`, `tgl_pgn`, `nm`, `wkt_pgn_mulai`, `wkt_pgn_selesai`, `ttl_pgn`, `tgn`, `ctn_rm`, `oleh`) VALUES
(1, '2024-09-26 16:28:04', 'KM-09-24-0001', '2024-09-04', 'dhdgh', '00:00:00', '00:00:00', '00:00:00', 'vdjvwg', 'vhhdgw', 'Hulk'),
(2, '2024-09-26 16:28:04', 'KM-09-24-0002', '2024-09-05', 'dhvqjgh', '00:00:00', '00:00:00', '00:00:00', 'vdqhv', 'vdhjqj', 'Hulk'),
(3, '2024-09-26 16:28:04', 'KM-09-24-0003', '2024-09-04', 'dvhvdw', '00:00:00', '00:00:00', '00:00:00', 'fyefyw345', 'jhjfyfdw', 'Hulk'),
(4, '2024-09-26 16:28:04', 'KM-09-24-0004', '2024-09-10', 'hvhdjwm443', '00:00:00', '00:00:00', '00:00:00', 'hvdhjw', 'hghdgqh', 'Gairah Swer'),
(5, '2024-09-26 16:28:04', 'AT-09-24-0001', '2024-09-06', ' hvhdq', '00:00:00', '00:00:00', '00:00:00', '', 'hvhvyhqd', 'Hulk'),
(6, '2024-09-26 16:28:04', 'AT-09-24-0002', '2024-09-06', ' hvhdq', '00:00:00', '00:00:00', '00:00:00', '', 'hvhvyhqd', 'Hulk'),
(7, '2024-09-26 16:28:04', 'KM-09-24-0005', '2024-09-11', 'cqgcgd', '03:07:00', '00:00:00', '00:00:00', 'gcdqgcq', 'gdcgcq', 'Hulk'),
(8, '2024-09-26 16:28:04', 'KM-09-24-0006', '2024-09-17', 'bvdjgqvdg', '13:06:00', '15:10:00', '00:00:00', 'gdgfq', 'dgfgfqd', 'Hulk'),
(9, '2024-09-26 16:28:04', 'KM-09-24-0007', '2024-09-10', 'hdvhqvd', '13:34:00', '00:49:00', '00:00:00', 'dqvdvh', 'mnvdqhjvhq', 'Hulk'),
(10, '2024-09-26 16:39:05', 'KM-09-24-0008', '2024-09-16', 'jfbhbfhwj', '18:40:00', '20:43:00', '00:00:00', 'dbhdbq', 'nqhjbdhq', 'Hulk'),
(11, '2024-10-08 15:43:22', 'KM-10-24-0009', '2024-10-15', 'fmnfvhwvh', '12:45:00', '21:36:00', '00:00:00', 'gdywfyfdywf', '67655', 'Photografer'),
(12, '2024-10-09 16:44:05', 'KM-10-24-0010', '2024-10-24', 'fhwhvy', '21:48:00', '22:49:00', '00:00:00', 'dkhdwvy', '', 'Fardhan'),
(13, '2024-10-09 16:44:57', 'KM-10-24-0011', '2024-10-25', 'ghjj', '20:50:00', '22:50:00', '00:00:00', 'ddbvbh', '99000', 'Fardhan'),
(14, '2024-10-11 11:02:24', 'KM-10-24-0012', '2024-09-29', 'dhvwcy', '13:05:00', '17:06:00', '00:00:00', 'qhvjeft2f', '\r\nHomeHot\r\n140 Kata-Kata Kehidupan Bijak yang Menyentuh Hati, Singkat dan Inspiratif\r\nMelalui kata-kata kehidupan, kita juga dapat membagikan pengalaman dan pelajaran hidup kepada orang lain.\r\n\r\nSilvia Estefina SubitmeleSilvia Estefina Subitmele\r\nDiperbar', 'Fardhan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konsumen`
--

CREATE TABLE `konsumen` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `tgl` date NOT NULL,
  `nm_kons` tinytext NOT NULL,
  `jns_sedia` tinytext NOT NULL,
  `week` tinytext NOT NULL,
  `remar` tinytext NOT NULL,
  `oleh` tinytext NOT NULL,
  `spv` tinytext NOT NULL,
  `terima` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konsumen`
--

INSERT INTO `konsumen` (`id`, `tgl_input`, `no_form`, `tgl`, `nm_kons`, `jns_sedia`, `week`, `remar`, `oleh`, `spv`, `terima`) VALUES
(97, '2024-08-30 16:52:14', 'SM-08-24-0001', '2024-03-22', 'Cloris', 'jjjj', '1', 'aaaaaaaassssssseeeeeeeeeeeee', 'Johan Agustus', '', 'qqqq'),
(99, '2024-08-30 20:40:52', 'SM-08-24-0002', '2024-09-23', 'Cloris', 'botol', '2', 'Teks adalah rangkaian kata atau kalimat yang memiliki struktur dan tata bahasa tertentu serta bisa disusun secara lisan maupun tulisan. ', 'Johan Agustus', '', 'Frera'),
(101, '2024-09-02 08:58:34', 'SM-09-24-0003', '2024-09-02', 'propolis', 'jdnjdjn', '3', 'This container has a border and some extra padding and margin', 'Johan Agustus', '', 'sasa'),
(102, '2024-09-02 09:46:06', 'SM-09-24-0004', '2024-09-03', 'Cloris', 'botol', '1', ' Text is also commonly used to refer to a text message or to send a text message. Text has several other senses as a noun.', 'Johan Agustus', '', 'Frera'),
(103, '2024-09-02 09:47:44', 'SM-09-24-0005', '2024-09-04', 'Cloris', 'botol', '1', ' Text is also commonly used to refer to a text message or to send a text message.', 'Johan Agustus', '', 'Frera'),
(104, '2024-09-02 10:02:22', 'SM-09-24-0006', '2024-09-02', 'Clori', 'jjj', '1', 'Anda untuk mengubah cara angka muncul dengan menerapkan pemformatan.', 'Johan Agustus', '', 'Frera'),
(111, '2024-09-04 11:07:55', 'SM-09-24-0007', '2024-09-04', 'Cloris', 'jels', '8', 'kkkkkkkkkkkkijij', 'Johan Agustus', '', 'troya'),
(112, '2024-09-04 11:13:29', 'SM-09-24-0008', '2024-09-04', 'Cloris', 'kokoii', '9', 'jijijoko', 'Johan Agustus', '', 'ojjo'),
(116, '2024-09-10 09:49:18', 'SM-09-24-0009', '2024-09-10', 'Cloris Men', 'Gels', '2', 'Sedang proses', 'bn', '', 'Zaki'),
(117, '2024-09-18 14:27:59', 'SM-09-24-0010', '2024-09-18', 'men', 'botol', '1', 'Garis bawah biasanya digunakan untuk menandai teks yang disisipkan atau teks yang memiliki arti penting dibandingkan teks normal lainnya.', 'Jojo', '', 'Frera'),
(118, '2024-09-19 10:18:57', 'SM-09-24-0011', '2024-09-19', 'propolis', 'Gels', '2', 'kkkokkk', 'Jojo', '', 'sasa'),
(119, '2024-09-19 10:19:37', 'SM-09-24-0012', '2024-09-27', 'men', 'botol', '9', 'kkkkkkkokkkkkkjj', 'Jojo', '', 'Frera'),
(120, '2024-08-30 16:52:14', 'SM-08-24-0001', '2024-03-22', 'Cloris', 'jjjj', '1', 'aaaaaaaassssssseeeeeeeeeeeee', 'Johan Agustus', '', 'qqqq'),
(121, '2024-08-30 20:40:52', 'SM-08-24-0002', '2024-09-23', 'Cloris', 'botol', '2', 'Teks adalah rangkaian kata atau kalimat yang memiliki struktur dan tata bahasa tertentu serta bisa disusun secara lisan maupun tulisan. ', 'Johan Agustus', '', 'Frera'),
(122, '2024-09-02 08:58:34', 'SM-09-24-0003', '2024-09-02', 'propolis', 'jdnjdjn', '3', 'This container has a border and some extra padding and margin', 'Johan Agustus', '', 'sasa'),
(123, '2024-09-02 09:46:06', 'SM-09-24-0004', '2024-09-03', 'Cloris', 'botol', '1', ' Text is also commonly used to refer to a text message or to send a text message. Text has several other senses as a noun.', 'Johan Agustus', '', 'Frera'),
(124, '2024-09-02 09:47:44', 'SM-09-24-0005', '2024-09-04', 'Cloris', 'botol', '1', ' Text is also commonly used to refer to a text message or to send a text message.', 'Johan Agustus', '', 'Frera'),
(125, '2024-09-02 10:02:22', 'SM-09-24-0006', '2024-09-02', 'Clori', 'jjj', '1', 'Anda untuk mengubah cara angka muncul dengan menerapkan pemformatan.', 'Johan Agustus', '', 'Frera'),
(126, '2024-09-04 11:07:55', 'SM-09-24-0007', '2024-09-04', 'Cloris', 'jels', '8', 'kkkkkkkkkkkkijij', 'Johan Agustus', '', 'troya'),
(127, '2024-09-04 11:13:29', 'SM-09-24-0008', '2024-09-04', 'Cloris', 'kokoii', '9', 'jijijoko', 'Johan Agustus', '', 'ojjo'),
(128, '2024-09-10 09:49:18', 'SM-09-24-0009', '2024-09-10', 'Cloris Men', 'Gels', '2', 'Sedang proses', 'bn', '', 'Zaki'),
(129, '2024-09-18 14:27:59', 'SM-09-24-0010', '2024-09-18', 'men', 'botol', '1', 'Garis bawah biasanya digunakan untuk menandai teks yang disisipkan atau teks yang memiliki arti penting dibandingkan teks normal lainnya.', 'Jojo', '', 'Frera'),
(130, '2024-09-19 10:18:57', 'SM-09-24-0011', '2024-09-19', 'propolis', 'Gels', '2', 'kkkokkk', 'Jojo', '', 'sasa'),
(131, '2024-09-19 10:19:37', 'SM-09-24-0012', '2024-09-27', 'men', 'botol', '9', 'kkkkkkkokkkkkkjj', 'Jojo', '', 'Frera'),
(133, '2024-09-25 13:50:35', 'SM-09-24-0013', '2024-09-10', 'agjhadb', ' dbw h', 'hvhwv', '', 'Hulk', '', 'dbhvw'),
(134, '2024-09-25 13:51:25', 'SM-09-24-0014', '2024-09-04', 'dhbhwhd', ' dwbh', 'bdhbwh', '', 'Hulk', '', 'dbwh'),
(135, '2024-09-25 13:52:42', 'SM-09-24-0015', '2024-09-04', 'bdhwb556', ' dhwv', 'vhdwv', 'khbdwh', '', '', 'dhvw'),
(136, '2024-09-26 09:20:33', 'SM-09-24-0016', '2024-09-17', 'vdgcdgq11', 'bdv', 'hvdgcdq', 'dqbvgcd', '', '', 'dcgqcd'),
(137, '2024-09-26 11:07:56', 'SM-09-24-0017', '2024-09-10', 'vwjhvfjhw1111122', 'fwvjvhwf', 'whfjhwfv', 'hvfjgvywf222222222', 'hvfjgvywf666666666', '', 'hfvjwfv11111122'),
(141, '2024-10-02 11:03:35', 'SM-10-24-0018', '2024-10-03', 'djhfwv', 'mnvfhwv', 'djwfhwv', 'hvfwyqyu5555555', 'Photografer', '', 'hvffv'),
(142, '2024-10-03 14:32:33', 'SM-10-24-0019', '2024-10-07', 'fwvff', 'fbwfhvqqvfwy', 'hqvdfvyc', 'jvfwhw', 'Photografer', '', 'vfhvwh'),
(143, '2024-10-08 15:12:09', 'SM-10-24-0020', '2024-10-06', 'dhghfdwy', 'dwhy', 'yfywfdyf', 'jhksvhvhs', 'Photografer', '', 'khvdhwv'),
(144, '2024-10-08 15:12:24', 'SM-10-24-0021', '2024-10-06', 'dhghfdwy', 'dwhy', 'yfywfdyf', 'jhksvhvhs', 'Photografer', '', 'khvdhwv'),
(145, '2024-10-08 15:12:49', 'SM-10-24-0022', '2024-10-28', 'hwfvwhjvfy', 'mwcfhvfhvj', 'jhvwfjhvfjgv', 'yuyum fgggg', 'Photografer', '', 'jhvfwjhvw'),
(146, '2024-10-10 09:19:44', 'SM-10-24-0023', '2024-10-15', 'hdqdfyq', 'hdvqhvh', 'dhbhdv', 'dh2222', 'Fardhan', '', 'qdjbqdh'),
(148, '2024-10-11 14:17:23', 'SM-10-24-0024', '2024-11-01', 'hyftuft', 'hfvwhv', 'hygt66', '67', 'Fardhan', '', ' fjgw g'),
(149, '2024-10-14 15:33:42', 'SM-10-24-0025', '2024-10-30', 'chvwhvy', 'wvywfy', 'ycywfdyf', 'yydddcysfyfghcacvsafvhcwdywdv iudggyufasavjgvx ygdtw7dyidhwbwygfe ouhdsuguwsbdifyeuvwjvejgdvsjdvvsydvyefyefgyegfyegfyjhqbadhjwb uhgwudbxhsbdjxgsygdugwey736e737r373tryghsdkhavd dyisauhdvjgduywgfywqgdigsakhdbcshadvdifwgdfuqwgfuiwgfluQUF FUGUWGFWUGFUGSUGygdv', 'Fardhan', '', 'ydfyfwyf'),
(150, '2024-10-21 09:03:05', 'SM-10-24-0026', '2024-10-08', 'wfwfw', 'fwfwf', 'fwff', 'wfwfwf', 'FardhanJKT48', '', 'wefwf'),
(151, '2024-10-21 10:45:15', 'SM-10-24-0027', '2024-10-25', 'wbdcwgctcq', 'cwhv', 'tctqct', 'jhgcgc', 'FardhanJKT48', '', 'ctctcdjgq'),
(152, '2024-10-21 10:46:08', 'SM-10-24-0028', '2024-11-02', 'cwhvgyq', 'dqbgc', 'cscdfqxd', 'Berikut ini beberapa contoh kata-kata bijak berkelas dengan makna mendalam yang diambil dari kutipan berbagai tokoh-tokoh terkenal.\r\n\r\n1. Tantangan adalah sesuatu yang membuat kehidupan menjadi lebih menarik. Cara mengatasinya membuat hidup lebih bermakna', 'FardhanJKT48', '', 'cf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` int(11) NOT NULL,
  `no_form` varchar(13) NOT NULL,
  `tgl_input` datetime DEFAULT current_timestamp(),
  `nm_kons` tinytext NOT NULL,
  `jns_smpl` tinytext NOT NULL,
  `tgl_smpl` date NOT NULL,
  `nm_pmnjm` tinytext NOT NULL,
  `tgl_mnjm` date NOT NULL,
  `tgl_pgmln` date NOT NULL,
  `ctn_rm` tinytext NOT NULL,
  `oleh` tinytext NOT NULL,
  `spv` tinytext NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `no_form`, `tgl_input`, `nm_kons`, `jns_smpl`, `tgl_smpl`, `nm_pmnjm`, `tgl_mnjm`, `tgl_pgmln`, `ctn_rm`, `oleh`, `spv`, `created_at`, `update_at`) VALUES
(126, 'RN-10-24-0001', '2024-10-14 09:13:55', 'dbwyg', 'kwfufu', '2024-10-29', 'dw hvdyw', '2024-10-10', '2024-11-09', 'dnwbhvdyv', 'Fardhan', '', '2024-10-14 09:13:55', NULL),
(127, 'RN-10-24-0002', '2024-10-14 11:30:47', 'ftdtd', 'eaese', '2024-11-01', 'whdvwf', '2024-10-26', '2024-10-08', 'dwvdgct', 'Fardhan', '', '2024-10-14 11:30:47', NULL),
(128, 'RN-10-24-0003', '2024-10-14 15:16:15', 'dgdqgct', 'ctcwtdwy', '2024-10-29', 'mhxdqgcdtcqy', '2024-10-18', '2024-11-09', 'Hapus latar belakang dalam 5 detik, cukup sekali klik, lenyap semuanya\r\nBerkat AI pintar remove.bg, Anda dapat memangkas waktu pengeditan - dan memiliki waktu berkreasi!\r\n\r\nBaik untuk menjadikan latar belakang transparan (PNG) atau menambahkan latar belak', 'Fardhan', '', '2024-10-14 15:16:15', NULL),
(129, 'RN-10-24-0004', '2024-10-14 15:19:15', 'gsdd', 'yfydqyf7y', '2024-11-08', 'dhvwdfyq', '2024-10-31', '2024-10-17', 'Wujudkan Bisnis Kosmetik Impian Anda\r\n\r\nMaklon Kosmetik Terbaik & Berpengalaman\r\nAdev adalah perusahaan jasa maklon kosmetik & skincare terbaik terpercaya di Indonesia berstandar ISO 9001:2015. Adev siap bantu bisnis Anda tumbuh dengan produk kosmetika be', 'Fardhan', '', '2024-10-14 15:19:15', NULL),
(130, 'RN-10-24-0005', '2024-10-14 15:30:03', 'dhwfvcv', 'hdcwycdy', '2024-10-26', 'fwhdvhvwy', '2024-10-30', '2024-11-09', 'Adev adalah perusahaan jasa maklon kosmetik & skincare terbaik terpercaya di Indonesia berstandar ISO 9001:2015. Adev siap bantu bisnis Anda tumbuh dengan produk kosmetika berkualitas tinggi.\r\n\r\nDengan tim ahli berpengalaman dan fasilitas pabrik kosmetik ', 'Fardhan', '', '2024-10-14 15:30:03', NULL),
(131, 'RN-10-24-0006', '2024-10-15 14:08:42', 'ftfte', 'ffccyfyvhv', '2024-10-18', 'hvtftdtdrx', '2024-10-18', '2024-10-24', 'Kata kata mutiara kehidupan berisi berbagai motivasi dan inspirasi. Kata ini berisi pesan yang bisa dipakai agar lebih semangat dan mewarnai hari. Selain itu, Anda bisa memakai kutipan dari tokoh terkenal untuk bisa memberikan motivasi lebih.  Beberapa to', 'Fardhan', '', '2024-10-15 14:08:42', NULL),
(132, 'RN-10-24-0007', '2024-10-15 14:12:42', 'Pill', 'Asam Nitrat', '2022-10-11', 'Maryadi', '2024-10-15', '2024-10-31', 'Kualitasnya baik tapi hati hati dengan percikannya, karena bisa membuat api', 'Fardhan', '', '2024-10-15 14:12:42', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengemesan_sampel`
--

CREATE TABLE `pengemesan_sampel` (
  `id` int(11) NOT NULL,
  `tgl_input` datetime NOT NULL DEFAULT current_timestamp(),
  `no_form` varchar(13) NOT NULL,
  `nm_kons` tinytext NOT NULL,
  `nm_prod` tinytext NOT NULL,
  `tgl_relese` date NOT NULL,
  `tgl_pggmn` date NOT NULL,
  `nm_verifi` tinytext NOT NULL,
  `remar` tinytext NOT NULL,
  `oleh` tinytext NOT NULL,
  `svp` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengemesan_sampel`
--

INSERT INTO `pengemesan_sampel` (`id`, `tgl_input`, `no_form`, `nm_kons`, `nm_prod`, `tgl_relese`, `tgl_pggmn`, `nm_verifi`, `remar`, `oleh`, `svp`) VALUES
(8, '2024-10-07 20:52:08', 'PS-10-24-0001', 'Cloris', 'Men', '2024-10-07', '2024-10-08', 'John', 'kkkkkkkkkkkkkkkkkkkkkkkk', 'Hulk', ''),
(9, '2024-10-07 20:52:36', 'PS-10-24-0002', 'Clorisssssssssss', 'Menjjj', '2024-10-08', '2024-10-09', 'John', 'sddsssssw', 'Hulk', ''),
(10, '2024-10-09 08:59:17', 'PS-10-24-0003', 'hdfhjh', 'fhvhwdhvh', '2024-09-29', '2024-10-31', 'djkhdvhqv', 'wkjgfwkhfyg2776677', 'Photografer', ''),
(12, '2024-10-09 15:54:44', 'PS-10-24-0004', 'gvygf', 'kiiou', '2024-10-02', '2024-10-16', 'hjgvj', '7788', 'Fardhan', ''),
(13, '2024-10-10 11:20:35', 'PS-10-24-0005', 'hgygyf', 'cvjbj', '2024-11-02', '2024-10-31', 'dhqvy', 'ydccwt11', 'Fardhan', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_spv`
--

CREATE TABLE `table_spv` (
  `id` int(11) NOT NULL,
  `nama` tinytext NOT NULL,
  `kode` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `table_spv`
--

INSERT INTO `table_spv` (`id`, `nama`, `kode`) VALUES
(1, 'Johan.Asssaalamm', 'rnd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `user_name`, `password`, `level`) VALUES
(69, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'admin'),
(72, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'admin'),
(81, 'Hulk Man', 'hulk', 'caf1a3dfb505ffed0d024130f58c5cfa', 'admin'),
(82, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'admin'),
(83, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'admin'),
(84, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'admin'),
(85, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', ''),
(86, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', ''),
(87, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', ''),
(88, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'user'),
(89, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'user'),
(90, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'user'),
(91, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'user'),
(92, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', ''),
(93, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', ''),
(94, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'Admin'),
(95, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'User'),
(96, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'Admin'),
(97, 'Hulk Man', 'hulk', '202cb962ac59075b964b07152d234b70', 'admin'),
(98, 'Hulk Man', 'hulk', '7c511878c5c029ea8f0a2e4444d79fc4', 'admin'),
(99, 'Photografer', 'fg', '202cb962ac59075b964b07152d234b70', 'admin'),
(101, 'FardhanJKT48', 'fardhan', '4ffbc0e1884c32b1ceabd3bbe018ad59', 'admin'),
(102, 'gg', 'gg', '202cb962ac59075b964b07152d234b70', 'user'),
(103, 'Mees Hilgers', 'mees', '432f45b44c432414d2f97df0e5743818', 'user'),
(105, 'der', 'der', '202cb962ac59075b964b07152d234b70', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alat`
--
ALTER TABLE `alat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alat_blender`
--
ALTER TABLE `alat_blender`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alat_tokebi`
--
ALTER TABLE `alat_tokebi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `base`
--
ALTER TABLE `base`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `form_list`
--
ALTER TABLE `form_list`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homogen`
--
ALTER TABLE `homogen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `hotplate`
--
ALTER TABLE `hotplate`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengemesan_sampel`
--
ALTER TABLE `pengemesan_sampel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_spv`
--
ALTER TABLE `table_spv`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alat`
--
ALTER TABLE `alat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `alat_blender`
--
ALTER TABLE `alat_blender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `alat_tokebi`
--
ALTER TABLE `alat_tokebi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `base`
--
ALTER TABLE `base`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `form_list`
--
ALTER TABLE `form_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `homogen`
--
ALTER TABLE `homogen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `hotplate`
--
ALTER TABLE `hotplate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT untuk tabel `pengemesan_sampel`
--
ALTER TABLE `pengemesan_sampel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `table_spv`
--
ALTER TABLE `table_spv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
