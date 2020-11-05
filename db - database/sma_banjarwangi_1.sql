-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Nov 2020 pada 12.31
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sma_banjarwangi_1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_berita` varchar(40) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `slug_berita` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `status_berita` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `nama_berita`, `id_kategori`, `slug_berita`, `isi`, `gambar`, `status_berita`, `tanggal`) VALUES
(2, 11, 'JAdwal Uas', 0, 'jadwal-uas', '<p>yProyek Teh Ayang</p>\r\n<p>&nbsp;</p>', 'api_gateway9.png', 'Publish', '2020-09-18 05:05:23'),
(3, 11, 'Libur Sekolah', 0, 'libur-sekolah', '<p>ngoding yok</p>', '', 'Publish', '2020-09-22 16:33:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_buku_tamu` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_buku_tamu`, `nama`, `email`, `pesan`, `tanggal`) VALUES
(2, 'Aldi', 'a@gmail.com', 'Kosong', '2020-09-19 07:58:12'),
(3, 'Tegar Satya Negara', 'tegarsatyanegara.if@gmail.coma', 'sdfdsfdsfdsf', '2020-09-20 13:08:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `id_user`, `isi`, `gambar`, `tanggal`) VALUES
(2, 11, '<p>sdfsdadsdsa</p>', '116515933_1537998209713460_3236000905672643396_o.jpg', '2020-09-22 17:02:38'),
(3, 13, '<p style=\"text-align: justify;\">opps</p>', '12440297_541563699356921_7136798201031747469_o.jpg', '2020-09-19 12:11:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `slug_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `id_user`, `slug_kategori`, `nama_kategori`, `tanggal`) VALUES
(3, 9, 'kaloborasi-bikin-api-antara-juara-koding-tsn_ngo', 'Kaloborasi Bikin Api Antara Juara Koding - Tsn_Ngo', '2020-09-22 16:35:39'),
(4, 11, 'ngoding-bareng-juara-koding', 'Ngoding Bareng Juara Koding', '2020-09-18 09:57:50'),
(5, 11, 'kaloborasi-bikin-api-antara-juara-koding-tsn_ngodi', 'Kaloborasi Bikin Api Antara Juara Koding - Tsn_Ngo', '2020-09-18 10:03:08'),
(6, 13, 'ff', 'ff', '2020-09-19 12:10:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerimaan`
--

CREATE TABLE `penerimaan` (
  `id_penerimaan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerimaan`
--

INSERT INTO `penerimaan` (`id_penerimaan`, `keterangan`, `gambar`, `tanggal`) VALUES
(1, '<p>1. Data Lengkapi&nbsp;</p>', 'aPI_coDE.png', '2020-09-20 14:55:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajar`
--

CREATE TABLE `pengajar` (
  `id_pengajar` int(11) NOT NULL,
  `nama_pengajar` varchar(80) NOT NULL,
  `jabatan_pengajar` varchar(50) NOT NULL,
  `pengampu` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajar`
--

INSERT INTO `pengajar` (`id_pengajar`, `nama_pengajar`, `jabatan_pengajar`, `pengampu`, `isi`, `gambar`, `tanggal`) VALUES
(1, 'Tegar Satya Negara, ST', 'Guru Tetap', 'Pemrogramman Web', '<p>Jangan Pernah Berhenti Untuk Belajar</p>', 'FB_IMG_15867739042221.jpg', '2020-09-22 17:23:53'),
(4, 'Bambang Subeno, S.T., M.Kom', 'Guru Tetap', 'Pemrogramman Mobile', '<p>Pinter Sekali</p>', 'Payment_Gateway.png', '2020-09-20 09:00:09'),
(5, 'Galih, S.T., M.Kom', 'Guru Tetap', 'Pemrogramman Web', '<p>Pinter Sekali</p>', 'Payment_Gateway1.png', '2020-09-20 09:01:00'),
(6, 'Ayang Sumayah', 'Kepala Sekolah', 'Pemrogramman Web', '<p>OOpss</p>', 'aPI_coDE1.png', '2020-09-21 06:45:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `id_user`, `isi`, `gambar`, `tanggal`) VALUES
(3, 11, '<p>Profil Koding CAkep b</p>', 'logo_12.png', '2020-09-22 17:54:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `akses_level`, `gambar`, `tanggal`) VALUES
(11, 'Juara Koding', 'admin@gmail.com', 'juarakoding', '4877651c1c59272cfe5d836f9adb670a3498e0d6', 'Admin', '', '2020-09-18 01:14:12'),
(14, 'Tegar Satya Negara', 'tegafdd@gmail.com', 'tegarsatyanegara', '473c24c3bed8eb419ded140b0efbeefb1048d9ee', 'Admin', '', '2020-11-04 19:22:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `id_user`, `isi`, `gambar`, `tanggal`) VALUES
(4, 11, '<p>cb&nbsp;</p>', 'images.png', '2020-09-22 18:00:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_buku_tamu`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indeks untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  ADD PRIMARY KEY (`id_penerimaan`);

--
-- Indeks untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  ADD PRIMARY KEY (`id_pengajar`);

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `buku_tamu`
--
ALTER TABLE `buku_tamu`
  MODIFY `id_buku_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penerimaan`
--
ALTER TABLE `penerimaan`
  MODIFY `id_penerimaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id_pengajar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
