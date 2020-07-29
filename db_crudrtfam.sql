-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Jun 2020 pada 09.07
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crudrtfam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `idalmt` bigint(20) UNSIGNED NOT NULL,
  `alamatjalan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alamat`
--

INSERT INTO `alamat` (`idalmt`, `alamatjalan`, `created_at`, `updated_at`) VALUES
(1, 'Jalan Gelatik 1', '2020-06-29 03:18:11', '2020-06-29 03:18:11'),
(2, 'Jalan Gelatik 2', '2020-06-29 03:18:11', '2020-06-29 03:18:11'),
(3, 'Jalan Merpati 1', '2020-06-29 03:18:11', '2020-06-29 03:18:11'),
(4, 'Jalan Merpati 2', '2020-06-29 03:18:11', '2020-06-29 03:18:11'),
(5, 'Jalan Kutilang 1', '2020-06-29 03:18:11', '2020-06-29 03:18:11'),
(6, 'Jalan Kutilang 2', '2020-06-29 03:18:11', '2020-06-29 03:18:11'),
(7, 'Jalan Kutilang 3', '2020-06-29 03:18:11', '2020-06-29 03:18:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bansos`
--

CREATE TABLE `bansos` (
  `idbansos` bigint(20) UNSIGNED NOT NULL,
  `namabansos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bansos`
--

INSERT INTO `bansos` (`idbansos`, `namabansos`, `created_at`, `updated_at`) VALUES
(1, 'Badan Penyelenggara Jaminan Sosial (BPJS)', '2020-06-29 06:09:09', '2020-06-29 06:09:09'),
(2, 'Kartu Indonesia Pintar (KIP)', '2020-06-29 06:09:09', '2020-06-29 06:09:09'),
(3, 'Kartu Jakarta Pintar (KJP)', '2020-06-29 06:09:09', '2020-06-29 06:09:09'),
(4, 'Kartu Indonesia Sehat (KIS)', '2020-06-29 06:09:09', '2020-06-29 06:09:09'),
(5, 'Kartu Prakerja', '2020-06-29 06:11:04', '2020-06-29 06:11:04'),
(6, 'Penerima Bansos Pemda', '2020-06-29 06:11:04', '2020-06-29 06:11:04'),
(7, 'Penerima Bansos Pemprov', '2020-06-29 06:11:04', '2020-06-29 06:11:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bansoskeluarga`
--

CREATE TABLE `bansoskeluarga` (
  `idbansoskeluarga` bigint(20) UNSIGNED NOT NULL,
  `idbansos` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `bansoskeluarga`
--

INSERT INTO `bansoskeluarga` (`idbansoskeluarga`, `idbansos`, `created_at`, `updated_at`) VALUES
(2, 1, '2020-06-29 00:05:30', '2020-06-29 00:05:30'),
(2, 3, '2020-06-29 00:05:30', '2020-06-29 00:05:30'),
(2, 4, '2020-06-29 00:05:30', '2020-06-29 00:05:30'),
(3, 1, '2020-06-28 23:39:05', '2020-06-28 23:39:05'),
(3, 5, '2020-06-28 23:39:05', '2020-06-28 23:39:05'),
(4, 1, '2020-06-28 23:45:53', '2020-06-28 23:45:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluarga`
--

CREATE TABLE `keluarga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nokk` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `namakpk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tl` date NOT NULL,
  `idstating` bigint(20) UNSIGNED NOT NULL,
  `idalamat` bigint(20) UNSIGNED NOT NULL,
  `norumah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `keluarga`
--

INSERT INTO `keluarga` (`id`, `nokk`, `namakpk`, `tl`, `idstating`, `idalamat`, `norumah`, `foto`, `created_at`, `updated_at`) VALUES
(1, '1111', 'komarudin', '1965-02-19', 1, 6, '43E', NULL, '2020-06-28 20:54:34', '2020-06-28 20:54:34'),
(2, '2222', 'ahmad', '1991-07-12', 3, 4, '2', NULL, '2020-06-28 23:27:41', '2020-06-28 23:27:41'),
(3, '3333', 'john deui', '1993-05-24', 1, 3, '3A', NULL, '2020-06-28 23:39:05', '2020-06-28 23:39:05'),
(4, '4444', 'yao ming', '1886-08-18', 2, 6, '5', NULL, '2020-06-28 23:45:53', '2020-06-28 23:45:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_28_184007_create_keluarga_table', 1),
(4, '2020_06_28_184033_create_stating_table', 1),
(5, '2020_06_28_184103_create_alamat_table', 1),
(6, '2020_06_28_184118_create_telefon_table', 1),
(7, '2020_06_28_184135_create_bansos_table', 1),
(8, '2020_06_28_184148_create_bansoskeluarga_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stating`
--

CREATE TABLE `stating` (
  `idstg` bigint(20) UNSIGNED NOT NULL,
  `statustinggal` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stating`
--

INSERT INTO `stating` (`idstg`, `statustinggal`, `created_at`, `updated_at`) VALUES
(1, 'Menetap', '2020-06-29 03:11:14', '2020-06-29 03:11:14'),
(2, 'Pindah', '2020-06-29 03:11:14', '2020-06-29 03:11:14'),
(3, 'Beda Alamat', '2020-06-29 03:14:56', '2020-06-29 03:14:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `telefon`
--

CREATE TABLE `telefon` (
  `idtelefon` bigint(20) UNSIGNED NOT NULL,
  `notelefon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `telefon`
--

INSERT INTO `telefon` (`idtelefon`, `notelefon`, `created_at`, `updated_at`) VALUES
(1, '112233445566', NULL, NULL),
(2, '223344556677', '2020-06-29 00:05:30', '2020-06-29 00:05:30'),
(3, '334455667788', '2020-06-28 23:39:05', '2020-06-28 23:39:05'),
(4, '445566778899', '2020-06-28 23:45:53', '2020-06-28 23:45:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iky', 'iky@gmail.com', NULL, '$2y$10$AYrml4dzDRjGV/yK2HKGCOmU2GqifLhk2zn/uKLt35yPaclPTAWZ2', NULL, '2020-06-28 20:21:11', '2020-06-28 20:21:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`idalmt`);

--
-- Indeks untuk tabel `bansos`
--
ALTER TABLE `bansos`
  ADD PRIMARY KEY (`idbansos`);

--
-- Indeks untuk tabel `bansoskeluarga`
--
ALTER TABLE `bansoskeluarga`
  ADD PRIMARY KEY (`idbansoskeluarga`,`idbansos`),
  ADD KEY `bansoskeluarga_idbansoskeluarga_index` (`idbansoskeluarga`),
  ADD KEY `bansoskeluarga_idbansos_index` (`idbansos`);

--
-- Indeks untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `keluarga_nokk_unique` (`nokk`),
  ADD KEY `keluarga_idstating_foreign` (`idstating`),
  ADD KEY `keluarga_idalamat_foreign` (`idalamat`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `stating`
--
ALTER TABLE `stating`
  ADD PRIMARY KEY (`idstg`);

--
-- Indeks untuk tabel `telefon`
--
ALTER TABLE `telefon`
  ADD PRIMARY KEY (`idtelefon`),
  ADD UNIQUE KEY `telefon_notelefon_unique` (`notelefon`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat`
--
ALTER TABLE `alamat`
  MODIFY `idalmt` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `bansos`
--
ALTER TABLE `bansos`
  MODIFY `idbansos` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `stating`
--
ALTER TABLE `stating`
  MODIFY `idstg` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bansoskeluarga`
--
ALTER TABLE `bansoskeluarga`
  ADD CONSTRAINT `bansoskeluarga_idbansos_foreign` FOREIGN KEY (`idbansos`) REFERENCES `bansos` (`idbansos`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bansoskeluarga_idbansoskeluarga_foreign` FOREIGN KEY (`idbansoskeluarga`) REFERENCES `keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_idalamat_foreign` FOREIGN KEY (`idalamat`) REFERENCES `alamat` (`idalmt`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keluarga_idstating_foreign` FOREIGN KEY (`idstating`) REFERENCES `stating` (`idstg`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `telefon`
--
ALTER TABLE `telefon`
  ADD CONSTRAINT `telefon_idtelefon_foreign` FOREIGN KEY (`idtelefon`) REFERENCES `keluarga` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
