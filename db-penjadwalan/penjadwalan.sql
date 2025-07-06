-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Waktu pembuatan: 12 Jan 2020 pada 11.50
-- Versi server: 10.4.7-MariaDB-1:10.4.7+maria~bionic
-- Versi PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjadwalan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nip` varchar(100) NOT NULL,
  `no_ponsel` varchar(120) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `jenis_kelamin`, `pendidikan`, `alamat`, `nip`, `no_ponsel`, `username`) VALUES
(3, 'Miyanah S.Pd', 'Laki-Laki', 'D3', 'Perum Graha Bakti Kodam Jaya D6/27', '567567', '', '08562321523'),
(4, 'Puji Lestari S.Pd', 'Laki-Laki', 'D3', 'Bumi Cikarang Lestari Blok K 2 No 8', '567569', '', '081249284923'),
(5, 'Siti Mursinah S.Pd', 'Laki-Laki', 'D3', 'Telaga Harapan', '567570', '', '08124957283'),
(6, 'Telaga Harapan', 'Laki-Laki', 'D3', 'Karang Asih Cikarang Utara', '567571', '', '08123747893'),
(7, 'Rodiyah S.Pd', 'Laki-Laki', 'D3', 'Kartika Wanasari Blok N 1 No 30', '567572', '', '082239384924'),
(8, 'Eka Permadi S.Pd', 'Laki-Laki', 'S1', 'Permata Regency Blok B 12 No 32', '567573', NULL, NULL),
(10, 'Nurdin S.Pd', 'Laki-Laki', 'S1', 'Perumahan Bumi Cikarang Makmur Blok J 7 N0 28', '567575', NULL, NULL),
(11, 'Hasanudin S.S', 'Laki-Laki', 'S1', 'Telaga Harmoni', '567576', NULL, NULL),
(12, 'Tyas Putri Cahyaning Pratiwi M.Pd', 'Perempuan', 'S1', 'Villa Mutiara Blok D 9 No 11', '567577', NULL, NULL),
(13, 'Heri Permadi S.Pd	', 'Laki-Laki', 'S1', 'Villa Mutiara Bekasi', '567578', NULL, NULL),
(14, 'Yunesti Diah Anggraini S.Pd', 'Perempuan', 'S1', 'KP. Rawa Sentul ', '567579', NULL, NULL),
(15, 'Sopian Zaid S.E', 'Laki-Laki', 'S1', 'Perumahan Jaya Indah Blok C 8 No 23', '567580', NULL, NULL),
(16, 'Siti Mursinah S.Pd', 'Perempuan', 'S1', 'Perumnas 3 Bekasi', '567581', NULL, NULL),
(17, 'Mansur S.Pd', 'Laki-Laki', 'S1', 'Perumahan Asabri Blok J 1 No 5 A', '567582', NULL, NULL),
(18, 'Suhandar S.Pd', 'Laki-Laki', 'S1', 'Perumahan Sahara Indah Permai', '567583', NULL, NULL),
(19, 'Tuti Setiawati S.Pd', 'Perempuan', 'S1', 'Perumahan Polymer Aren Jaya', '567584', NULL, NULL),
(20, 'Fitria Ningrum S.Pd', 'Perempuan', 'S1', 'Bumi Cikarang Asri Blok I 25 N0 8', '567595', NULL, NULL),
(21, 'Budi Kurnia S.Pd', 'Laki-Laki', 'S1', 'Bening Indah Estate', '567593', NULL, NULL),
(22, 'Sumaryati S.Pd', 'Perempuan', 'S1', 'Permata Hijau Permai', '567592', NULL, NULL),
(23, 'Dika Dwi Wibowo S.Kom', 'Laki-Laki', 'S1', 'Karang Asih Cikarang Utara', '567587', NULL, NULL),
(24, 'Indra Permana S.Pd', 'Laki-Laki', 'S1', 'Perumahan Corsica Residence', '567588', NULL, NULL),
(25, 'Dini Septiani S.E', 'Perempuan', 'S1', 'Cluster Teras Pondok', '567590', NULL, NULL),
(26, 'Joko Purqoleksono S.Pd', 'Laki-Laki', 'S1', 'Grand Salsabila Residence', '567591', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL,
  `kode_mata_pelajaran` varchar(50) NOT NULL,
  `kode_ruang` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam_awal` time NOT NULL,
  `jam_selesai` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `nip`, `kode_kelas`, `kode_mata_pelajaran`, `kode_ruang`, `hari`, `jam_awal`, `jam_selesai`) VALUES
(9, '567567', 'K-XII-TKJ', 'TKJ09-XII', 'R-XII-TKJ', 'Senin', '07:00:00', '09:00:00'),
(10, '567578', 'K-XI-AP', 'ENG037-X', 'R-XI-AP', 'Rabu', '07:00:00', '09:00:00'),
(13, '567567', 'K-X-AK', 'PKN0124-X', 'R-XI-TKR', 'Selasa', '07:00:00', '09:00:00'),
(14, '567569', 'K-XII-AK', 'PAI127-X', 'R-X-AK', 'Senin', '08:00:00', '08:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(50) NOT NULL,
  `nama_kelas` varchar(50) NOT NULL,
  `kode_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kode_kelas`) VALUES
(1, 'X TKJ', 'K-X-TKJ'),
(2, 'XI TKJ', 'K-XI-TKJ'),
(3, 'XII TKJ', 'K-XII-TKJ'),
(4, 'X TKR', 'K-X-TKR'),
(5, 'XI TKR', 'K-XI-TKR'),
(6, 'XII TKR', 'K-XII-TKR'),
(7, 'X AP', 'K-X-AP'),
(8, 'XI AP', 'K-XI-AP'),
(9, 'XII AP', 'K-XII-AP'),
(10, 'X AK', 'K-X-AK'),
(11, 'XI AK', 'K-XI-AK'),
(12, 'XII AK', 'K-XII-AK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL,
  `nama_mata_pelajaran` varchar(50) NOT NULL,
  `kode_mata_pelajaran` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mata_pelajaran`, `nama_mata_pelajaran`, `kode_mata_pelajaran`, `tahun_ajaran`) VALUES
(5, 'Pendidikan Kewarwarganegaraan ', 'PKN0124-X', '2019/2020'),
(6, 'Bahasa Indonesiaa', 'IND00202', '2019/2020'),
(7, 'Sejarah Indonesia', 'SID005-X', '2019/2020'),
(8, 'Pemrograman Dasar', 'TKJ03-X', '2019/2020'),
(9, 'Kimia', 'KIA324-X', '2019/2020'),
(10, 'Dasar Desain Grafis', 'TKJ04-X', '2019/2020'),
(11, 'Fisika', 'FSK670-X', '2019/2020'),
(12, 'Matematika', 'MTK0101-X', '2019/2020'),
(13, 'Pendidikan Agama Islam', 'PAI127-X', '2019/2020'),
(14, 'Bahasa Inggris', 'ENG037-X', '2019/2020'),
(15, 'Penjaskes', 'PJK01-X', '2019/2020'),
(16, 'Simulasi Digital', 'SDG0151-X', '2019/2020'),
(17, 'Dasar Dasar Jaringan', 'TKJ02-X', '2019/2020'),
(18, 'Sistem Komputer', 'TKJ05-XI', '2019/2020'),
(19, 'Simulasi Digital', 'TKJ06-XI', '2019/2020'),
(20, 'Teknologi Jaringan Berbasis Luas', 'TKJ07-XI', '2019/2020'),
(21, 'Infrastruktur Jaringan', 'TKJ08-XI', '2019/2020'),
(22, 'Teknologi Layanan Jaringan', 'TKJ09-XII', '2019/2020'),
(23, 'Infrastruktur Jaringan', 'TKJ10-XII', '2019/2020'),
(24, 'Sistem Jaringan', 'TKJ11-XII', '2019/2020'),
(25, 'Menggambar Teknik', 'TKR02-X', '2019/2020'),
(26, 'Teknologi Dasar Otomotif', 'TKR03-X', '2019/2020'),
(27, 'Dasar-dasar Otomotif', 'TKR04-X', '2019/2020'),
(28, 'Pemeliharaan Mesin Kendaraan', 'TKR05-XI', '2019/2020'),
(29, 'Kelistrikan Kendaraan', 'TKR06-XI', '2019/2020'),
(30, 'Pemeliharaan Sasis', 'TKR07-XI', '2019/2020'),
(31, 'Pengecatan Bodi', 'TKR08-XI', '2019/2020'),
(32, 'Penggunaan Scant Tool', 'TKR09-XII', '2019/2020'),
(33, 'Pemeliharaan Mesin', 'TKR10-XII', '2019/2020'),
(34, 'Penggunaan Panel', 'TKR11-XII', '2019/2020'),
(35, 'Power Train dan Hidrolik', 'TKR12-XII', '2019/2020'),
(36, 'Pemeriksaan Karbon AC', 'TKR13-XII', '2019/2020'),
(37, 'Bahasa Sunda', 'BSN068', '2019/2020'),
(42, 'Bahasa Indonesiaa', 'B-INDO-XII-TKJ', '2019/2020'),
(44, 'Bahasa Indonesia', 'B-INDO', '2020/2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(50) NOT NULL,
  `kode_ruang` varchar(50) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `kode_ruang`, `nama_ruang`) VALUES
(1, 'R-X-TKJ', 'X TKJ'),
(2, 'R-XI-TKJ', 'XI TKJ'),
(3, 'R-XII-TKJ', 'XII TKJ'),
(4, 'R-X-TKR', 'X TKR'),
(5, 'R-XI-TKR', 'XI TKR'),
(6, 'R-XII-TKR', 'XII TKR'),
(7, 'R-X-AP', 'X AP'),
(8, 'R-XI-AP', 'XI AP'),
(9, 'R-XII-AP', 'XII AP'),
(10, 'R-X-AK', 'X AK'),
(11, 'R-XI-AK', 'XI AK'),
(12, 'R-XII-AK', 'XII AK'),
(13, 'Laboratorium Akuntansi', ''),
(14, 'R-LAB-TKR', 'Bengkel TKR'),
(15, 'R-LAB-AK', 'Laboratorium Akuntansi'),
(16, 'R-LAB-AP', 'Laboratorium Administrasi Perkantoran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('tu','kurikulum','kepsek','guru') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'kurikulum', '202cb962ac59075b964b07152d234b70', 'kurikulum'),
(2, 'kepsek', '202cb962ac59075b964b07152d234b70', 'kepsek'),
(3, 'tu', '202cb962ac59075b964b07152d234b70', 'tu'),
(4, 'guru', '202cb962ac59075b964b07152d234b70', 'guru'),
(7, '085623122222', '202cb962ac59075b964b07152d234b70', 'guru'),
(10, '08562321523', '202cb962ac59075b964b07152d234b70', 'guru'),
(11, '081249284923', '202cb962ac59075b964b07152d234b70', 'guru'),
(12, '08124957283', '202cb962ac59075b964b07152d234b70', 'guru'),
(13, '08123747893', '202cb962ac59075b964b07152d234b70', 'guru'),
(14, '082239384924', '202cb962ac59075b964b07152d234b70', 'guru'),
(25, '123123123', '202cb962ac59075b964b07152d234b70', 'guru'),
(26, '234', '202cb962ac59075b964b07152d234b70', 'guru'),
(27, '2355', '202cb962ac59075b964b07152d234b70', 'guru'),
(28, '123243', '202cb962ac59075b964b07152d234b70', 'guru'),
(29, '0977', '202cb962ac59075b964b07152d234b70', 'guru');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD UNIQUE KEY `nip` (`nip`),
  ADD KEY `username` (`username`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `kode_kelas` (`kode_kelas`),
  ADD KEY `kode_mata_pelajaran` (`kode_mata_pelajaran`),
  ADD KEY `kode_ruang` (`kode_ruang`),
  ADD KEY `nip` (`nip`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD UNIQUE KEY `kode_kelas` (`kode_kelas`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`),
  ADD UNIQUE KEY `kode_mata_pelajaran` (`kode_mata_pelajaran`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`),
  ADD UNIQUE KEY `kode_ruang` (`kode_ruang`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `guru_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`kode_kelas`) REFERENCES `kelas` (`kode_kelas`),
  ADD CONSTRAINT `jadwal_ibfk_2` FOREIGN KEY (`kode_mata_pelajaran`) REFERENCES `mata_pelajaran` (`kode_mata_pelajaran`),
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`kode_ruang`) REFERENCES `ruang` (`kode_ruang`),
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`nip`) REFERENCES `guru` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
