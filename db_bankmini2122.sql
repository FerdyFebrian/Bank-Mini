-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jul 2023 pada 15.55
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bankmini2122`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi`
--

CREATE TABLE `tbl_informasi` (
  `id_informasi` int(1) NOT NULL,
  `nama_organisasi` varchar(100) NOT NULL,
  `email_organisasi` varchar(50) NOT NULL,
  `alamat_organisasi` varchar(100) NOT NULL,
  `telp_organisasi` varchar(16) NOT NULL,
  `pimpinan` varchar(100) NOT NULL,
  `bendahara` varchar(100) NOT NULL,
  `kel_organisasi` varchar(50) NOT NULL,
  `kec_organisasi` varchar(50) NOT NULL,
  `kab_organisasi` varchar(50) NOT NULL,
  `prov_organisasi` varchar(50) NOT NULL,
  `kode_pos_organisasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_informasi`, `nama_organisasi`, `email_organisasi`, `alamat_organisasi`, `telp_organisasi`, `pimpinan`, `bendahara`, `kel_organisasi`, `kec_organisasi`, `kab_organisasi`, `prov_organisasi`, `kode_pos_organisasi`) VALUES
(1, 'Bank Mini RPL 1', 'minibankrpl1@gmail.com', 'Jl.Lengkong', '08123456789', 'Ferdy', 'Jihyo', 'Cikawao', 'Lengkong', 'Bandung', 'Jawa Barat', '40261');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `tingkat` varchar(2) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `tingkat`, `nama_kelas`) VALUES
('KLS01', '10', 'XI TIK'),
('KLS02', '10', 'XI TIK2'),
('KLS03', '10', 'X TIK3'),
('KLS04', '10', 'X TIK4'),
('KLS05', '10', 'X TIK5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_nasabah`
--

CREATE TABLE `tbl_nasabah` (
  `id_nasabah` varchar(10) NOT NULL,
  `nama_nasabah` varchar(100) NOT NULL,
  `jenkel` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat_nasabah` varchar(200) NOT NULL,
  `telp_nasabah` varchar(16) NOT NULL,
  `jenis_pengenal` varchar(1) NOT NULL,
  `no_pengenal` varchar(30) NOT NULL,
  `id_kelas` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_nasabah`
--

INSERT INTO `tbl_nasabah` (`id_nasabah`, `nama_nasabah`, `jenkel`, `tempat_lahir`, `tgl_lahir`, `alamat_nasabah`, `telp_nasabah`, `jenis_pengenal`, `no_pengenal`, `id_kelas`) VALUES
('2023020001', 'Jihyo', 'P', 'Korea', '1998-02-01', 'Jalan Pokoknya Dikorea', '0223341513', '1', '1', 'KLS01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_nasabah` varchar(10) NOT NULL,
  `jenis_transaksi` varchar(1) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `nominal` int(10) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status_transaksi` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `id_nasabah`, `jenis_transaksi`, `kode_transaksi`, `keterangan`, `nominal`, `id_user`, `tgl_transaksi`, `status_transaksi`) VALUES
(81, '2023020001', '1', 'STS0000001', 'Tabungan Siswa a.nJihyo', 10000000, 'PGN001', '2023-02-15', '2'),
(82, '2023020001', '2', 'PTS0000001', 'Tabungan Siswa a.nJihyo', 5000000, 'PGN001', '2023-02-15', '1'),
(83, '2023020001', '2', 'PTS0000002', 'Tabungan Siswa a.nJihyo', 10000, 'PGN001', '2023-02-22', '1'),
(84, '2023020001', '2', 'PTS0000003', 'Tabungan Siswa a.nJihyo', 100000, 'PGN001', '2023-02-22', '1'),
(85, '2023020001', '2', 'PTS0000004', 'Tabungan SiswaJihyo', 10000, 'PGN001', '2023-02-22', '1'),
(88, '2023020001', '2', 'PTS0000005', 'Tabungan Siswa a.nJihyo', 300000, 'PGN001', '2023-02-22', '1'),
(89, '2023020001', '2', 'PTS0000006', 'Tabungan Siswa a.nJihyo', 100, 'PGN001', '2023-02-24', '1'),
(90, '2023020001', '2', 'PTS0000007', 'Tabungan SiswaJihyo', 100, 'PGN001', '2023-02-24', '1'),
(91, '2023020001', '2', 'PTS0000008', 'Tabungan SiswaJihyo', 100, 'PGN001', '2023-02-24', '1'),
(92, '2023020001', '2', 'PTS0000009', 'Tabungan SiswaJihyo', 100, 'PGN001', '2023-02-24', '1'),
(93, '2023020001', '2', 'PTS0000010', 'Tabungan SiswaJihyo', 100, 'PGN001', '2023-02-24', '1'),
(94, '2023020001', '2', 'PTS0000011', 'Tabungan Siswa a.nJihyo', 100, 'PGN001', '2023-02-24', '1'),
(95, '2023020001', '2', 'PTS0000012', 'Tabungan Siswa a.nJihyo', 50000, 'PGN001', '2023-02-24', '1'),
(96, '2023020001', '1', 'STS0000002', 'Tabungan Siswa a.nJihyo', 2000, 'PGN001', '2023-02-24', '2'),
(97, '2023020001', '1', 'STS0000003', 'Tabungan Siswa a.nJihyo', 1200, 'PGN001', '2023-02-24', '1'),
(98, '2023020001', '2', 'PTS0000013', 'Tabungan Siswa a.nJihyo', 6666, 'PGN001', '2023-02-24', '1'),
(100, '2023020001', '2', 'PTS0000014', 'Tabungan Siswa a.nJihyo', 1000, 'PGN001', '2023-05-10', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi_penarikanlog`
--

CREATE TABLE `tbl_transaksi_penarikanlog` (
  `id_history_penarikan` int(11) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `nominal` int(11) NOT NULL,
  `tgl_penarikan` date NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi_penyetoranlog`
--

CREATE TABLE `tbl_transaksi_penyetoranlog` (
  `id_history_penyotaran` int(11) NOT NULL,
  `kode_transaksi` varchar(10) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `nominal` int(10) NOT NULL,
  `tgl_penyetoran` date NOT NULL,
  `keterangan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(6) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo_user` varchar(100) NOT NULL,
  `id_userlevel` enum('Admin','Teller','CSO','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `photo_user`, `id_userlevel`) VALUES
('PGN001', 'Ferdy - Admin', 'Admin', 'admin', 'jihyo.jpg', 'Admin'),
('PGN002', 'Ferdy - Teller', 'Teller', 'teller', 'Sana.jpg', 'Teller'),
('PGN003', 'Ferdy - CSO', 'CSO', 'cso', 'luffy.jpg', 'CSO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_userlog`
--

CREATE TABLE `tbl_userlog` (
  `id_userlog` int(11) NOT NULL,
  `id_user` varchar(6) NOT NULL,
  `waktu` date NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_userlog`
--

INSERT INTO `tbl_userlog` (`id_userlog`, `id_user`, `waktu`, `ip_address`, `keterangan`) VALUES
(30, 'PGN001', '2023-07-14', '::1', 'User Login - Ferdy - Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_nasabah`
--
ALTER TABLE `tbl_nasabah`
  ADD PRIMARY KEY (`id_nasabah`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_nasabah` (`id_nasabah`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_nasabah` (`id_nasabah`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_transaksi_penarikanlog`
--
ALTER TABLE `tbl_transaksi_penarikanlog`
  ADD PRIMARY KEY (`id_history_penarikan`);

--
-- Indeks untuk tabel `tbl_transaksi_penyetoranlog`
--
ALTER TABLE `tbl_transaksi_penyetoranlog`
  ADD PRIMARY KEY (`id_history_penyotaran`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indeks untuk tabel `tbl_userlog`
--
ALTER TABLE `tbl_userlog`
  ADD PRIMARY KEY (`id_userlog`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  MODIFY `id_informasi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi_penarikanlog`
--
ALTER TABLE `tbl_transaksi_penarikanlog`
  MODIFY `id_history_penarikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi_penyetoranlog`
--
ALTER TABLE `tbl_transaksi_penyetoranlog`
  MODIFY `id_history_penyotaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_userlog`
--
ALTER TABLE `tbl_userlog`
  MODIFY `id_userlog` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_nasabah`
--
ALTER TABLE `tbl_nasabah`
  ADD CONSTRAINT `tbl_nasabah_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `tbl_kelas` (`id_kelas`);

--
-- Ketidakleluasaan untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `tbl_transaksi_ibfk_1` FOREIGN KEY (`id_nasabah`) REFERENCES `tbl_nasabah` (`id_nasabah`),
  ADD CONSTRAINT `tbl_transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tbl_userlog`
--
ALTER TABLE `tbl_userlog`
  ADD CONSTRAINT `tbl_userlog_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
