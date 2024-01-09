-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 08.18
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
-- Database: `sekolah_ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `ID_Absensi` int(10) UNSIGNED NOT NULL,
  `NIS_Siswa` int(10) UNSIGNED NOT NULL,
  `Tanggal` date NOT NULL,
  `Kehadiran` enum('Hadir','Sakit','Alpa') NOT NULL DEFAULT 'Hadir'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`ID_Absensi`, `NIS_Siswa`, `Tanggal`, `Kehadiran`) VALUES
(4, 1111111111, '2023-01-01', 'Hadir'),
(5, 1111111111, '2023-01-02', 'Sakit'),
(6, 1111111111, '2023-01-03', 'Alpa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstrakurikuler`
--

CREATE TABLE `ekstrakurikuler` (
  `ID_Ekstrakurikuler` int(11) UNSIGNED NOT NULL,
  `Nama_Ekstrakurikuler` varchar(255) NOT NULL,
  `Deskripsi` text NOT NULL,
  `NIP_Guru_Pembimbing` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `ekstrakurikuler`
--

INSERT INTO `ekstrakurikuler` (`ID_Ekstrakurikuler`, `Nama_Ekstrakurikuler`, `Deskripsi`, `NIP_Guru_Pembimbing`) VALUES
(3, 'Pramuka', 'Kegiatan pramuka untuk pengembangan karakter siswa.', '333333333333333333'),
(4, 'Marching Band', 'Kegiatan marching band untuk pengembangan keterampilan musik siswa.', '333333333333333333');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_sekolah`
--

CREATE TABLE `event_sekolah` (
  `ID_Event` int(11) UNSIGNED NOT NULL,
  `Nama_Kegiatan` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Deskripsi` text NOT NULL,
  `ID_Ruangan` int(11) UNSIGNED NOT NULL,
  `NIP_Guru_Penanggung_Jawab` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `event_sekolah`
--

INSERT INTO `event_sekolah` (`ID_Event`, `Nama_Kegiatan`, `Tanggal`, `Deskripsi`, `ID_Ruangan`, `NIP_Guru_Penanggung_Jawab`) VALUES
(3, 'Pentas Seni', '2023-02-15', 'Pentas seni tahunan untuk menampilkan bakat siswa.', 1, '333333333333333333'),
(4, 'Lomba Pidato', '2023-03-10', 'Lomba pidato tingkat sekolah.', 2, '333333333333333333');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `NIP` varchar(18) NOT NULL,
  `Nama_Guru` varchar(255) NOT NULL,
  `Mata_Pelajaran` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP`, `Nama_Guru`, `Mata_Pelajaran`, `Alamat`, `Tanggal_Lahir`, `Agama`, `user_id`) VALUES
('333333333333333333', 'Burhan kamil', 'Matematika', 'Jalan Guru 1', '1990-01-01', 'Islam', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `ID_Jadwal` int(11) UNSIGNED NOT NULL,
  `Hari` varchar(50) NOT NULL,
  `Jam` time NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `Kode_Mata_Pelajaran` varchar(50) NOT NULL,
  `NIP_Guru` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`ID_Jadwal`, `Hari`, `Jam`, `Kelas`, `Kode_Mata_Pelajaran`, `NIP_Guru`) VALUES
(1, 'Senin', '08:00:00', 'XII IPA', 'MP001', '333333333333333333'),
(2, 'Selasa', '09:30:00', 'XII IPS', 'MP002', '333333333333333333');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `Nama_Kelas` varchar(50) NOT NULL,
  `Wali_Kelas` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`Nama_Kelas`, `Wali_Kelas`) VALUES
('Ceri', '333333333333333333');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level_akses`
--

CREATE TABLE `level_akses` (
  `Id_Level` int(1) UNSIGNED NOT NULL,
  `Nama_Level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `level_akses`
--

INSERT INTO `level_akses` (`Id_Level`, `Nama_Level`) VALUES
(1, 'Siswa'),
(2, 'Orang_tua'),
(3, 'Guru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `Kode_Mata_Pelajaran` varchar(50) NOT NULL,
  `Nama_Mata_Pelajaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`Kode_Mata_Pelajaran`, `Nama_Mata_Pelajaran`) VALUES
('MP001', 'Matematika'),
('MP002', 'Bahasa Inggris');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(84, '2023-11-24-153311', 'App\\Database\\Migrations\\CreateLevelAkses', 'default', 'App', 1700997614, 1),
(85, '2023-11-24-153312', 'App\\Database\\Migrations\\CreateUser', 'default', 'App', 1700997614, 1),
(86, '2023-11-24-153313', 'App\\Database\\Migrations\\CreateSiswa', 'default', 'App', 1700997614, 1),
(87, '2023-11-24-153411', 'App\\Database\\Migrations\\CreateOrangTua', 'default', 'App', 1700997614, 1),
(88, '2023-11-24-153459', 'App\\Database\\Migrations\\CreateGuru', 'default', 'App', 1700997614, 1),
(89, '2023-11-24-153553', 'App\\Database\\Migrations\\CreateMataPelajaran', 'default', 'App', 1700997614, 1),
(90, '2023-11-24-153642', 'App\\Database\\Migrations\\CreateJadwal', 'default', 'App', 1700997614, 1),
(91, '2023-11-24-153718', 'App\\Database\\Migrations\\CreateNilaiSiswa', 'default', 'App', 1700997614, 1),
(92, '2023-11-24-153809', 'App\\Database\\Migrations\\CreateKelas', 'default', 'App', 1700997614, 1),
(93, '2023-11-24-153846', 'App\\Database\\Migrations\\CreateAbsensi', 'default', 'App', 1700997614, 1),
(94, '2023-11-24-153948', 'App\\Database\\Migrations\\CreateRuangan', 'default', 'App', 1700997614, 1),
(95, '2023-11-24-154122', 'App\\Database\\Migrations\\CreateEkstrakurikuler', 'default', 'App', 1700997615, 1),
(96, '2023-11-24-154208', 'App\\Database\\Migrations\\CreateEventSekolah', 'default', 'App', 1700997615, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai_siswa`
--

CREATE TABLE `nilai_siswa` (
  `ID_Nilai` int(11) UNSIGNED NOT NULL,
  `NIS_Siswa` int(11) UNSIGNED NOT NULL,
  `Kode_Mata_Pelajaran` varchar(50) NOT NULL,
  `Nilai` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `nilai_siswa`
--

INSERT INTO `nilai_siswa` (`ID_Nilai`, `NIS_Siswa`, `Kode_Mata_Pelajaran`, `Nilai`) VALUES
(1, 1111111111, 'MP001', 85.50),
(2, 1111111111, 'MP002', 92.75);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orang_tua`
--

CREATE TABLE `orang_tua` (
  `ID_Orang_Tua` varchar(16) NOT NULL,
  `Nama_Orang_Tua` varchar(255) NOT NULL,
  `Alamat` text NOT NULL,
  `Nomor_Telepon` varchar(20) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `NIS_Siswa` int(11) UNSIGNED NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `orang_tua`
--

INSERT INTO `orang_tua` (`ID_Orang_Tua`, `Nama_Orang_Tua`, `Alamat`, `Nomor_Telepon`, `Email`, `NIS_Siswa`, `Agama`, `user_id`) VALUES
('2222222222222222', 'mona', 'jalan contoh 10', '081111111111', 'mona@gmail.com', 1111111111, '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangan`
--

CREATE TABLE `ruangan` (
  `ID_Ruangan` int(11) UNSIGNED NOT NULL,
  `Nama_Ruangan` varchar(255) NOT NULL,
  `Kapasitas` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `ruangan`
--

INSERT INTO `ruangan` (`ID_Ruangan`, `Nama_Ruangan`, `Kapasitas`) VALUES
(1, 'Aula', 100),
(2, 'Laboratorium Kimia', 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIS` int(10) UNSIGNED NOT NULL,
  `Nama_Siswa` varchar(255) NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Tanggal_Lahir` date NOT NULL,
  `Agama` varchar(50) NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `Nama_Siswa`, `Kelas`, `Alamat`, `Tanggal_Lahir`, `Agama`, `user_id`) VALUES
(1111111111, 'saleh', 'Ceri 1', 'jalan contoh 1', '2021-01-05', 'islam', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `NIS_NIP_ID` varchar(20) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `NIS_NIP_ID`, `Password`, `Level`) VALUES
(1, '1111111111', '$2y$10$m1w5Z6ZTsShcFBVDsDI6OOhWz.43FjWZsj04/CrbC/glVMjapgK96', 1),
(2, '2222222222222222', '$2y$10$5rD5DWA9oT8QmOty1BTvXuJxJqNzGIos0u8MnVn6jmc7rQVSCY9W.', 2),
(3, '333333333333333333', '$2y$10$5rD5DWA9oT8QmOty1BTvXuJxJqNzGIos0u8MnVn6jmc7rQVSCY9W.', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`ID_Absensi`),
  ADD KEY `Absensi_NIS_Siswa_foreign` (`NIS_Siswa`);

--
-- Indeks untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD PRIMARY KEY (`ID_Ekstrakurikuler`),
  ADD KEY `Ekstrakurikuler_NIP_Guru_Pembimbing_foreign` (`NIP_Guru_Pembimbing`);

--
-- Indeks untuk tabel `event_sekolah`
--
ALTER TABLE `event_sekolah`
  ADD PRIMARY KEY (`ID_Event`),
  ADD KEY `Event_Sekolah_ID_Ruangan_foreign` (`ID_Ruangan`),
  ADD KEY `Event_Sekolah_NIP_Guru_Penanggung_Jawab_foreign` (`NIP_Guru_Penanggung_Jawab`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `Guru_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`ID_Jadwal`),
  ADD KEY `Jadwal_Kode_Mata_Pelajaran_foreign` (`Kode_Mata_Pelajaran`),
  ADD KEY `Jadwal_NIP_Guru_foreign` (`NIP_Guru`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`Nama_Kelas`),
  ADD KEY `Kelas_Wali_Kelas_foreign` (`Wali_Kelas`);

--
-- Indeks untuk tabel `level_akses`
--
ALTER TABLE `level_akses`
  ADD PRIMARY KEY (`Id_Level`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`Kode_Mata_Pelajaran`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD PRIMARY KEY (`ID_Nilai`),
  ADD KEY `Nilai_Siswa_NIS_Siswa_foreign` (`NIS_Siswa`),
  ADD KEY `Nilai_Siswa_Kode_Mata_Pelajaran_foreign` (`Kode_Mata_Pelajaran`);

--
-- Indeks untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD PRIMARY KEY (`ID_Orang_Tua`),
  ADD KEY `Orang_Tua_NIS_Siswa_foreign` (`NIS_Siswa`),
  ADD KEY `Orang_Tua_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  ADD PRIMARY KEY (`ID_Ruangan`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `Siswa_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Users_Level_foreign` (`Level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `ID_Absensi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  MODIFY `ID_Ekstrakurikuler` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `event_sekolah`
--
ALTER TABLE `event_sekolah`
  MODIFY `ID_Event` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `ID_Jadwal` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `level_akses`
--
ALTER TABLE `level_akses`
  MODIFY `Id_Level` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  MODIFY `ID_Nilai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ruangan`
--
ALTER TABLE `ruangan`
  MODIFY `ID_Ruangan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `Absensi_NIS_Siswa_foreign` FOREIGN KEY (`NIS_Siswa`) REFERENCES `siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `ekstrakurikuler`
--
ALTER TABLE `ekstrakurikuler`
  ADD CONSTRAINT `Ekstrakurikuler_NIP_Guru_Pembimbing_foreign` FOREIGN KEY (`NIP_Guru_Pembimbing`) REFERENCES `guru` (`NIP`);

--
-- Ketidakleluasaan untuk tabel `event_sekolah`
--
ALTER TABLE `event_sekolah`
  ADD CONSTRAINT `Event_Sekolah_ID_Ruangan_foreign` FOREIGN KEY (`ID_Ruangan`) REFERENCES `ruangan` (`ID_Ruangan`),
  ADD CONSTRAINT `Event_Sekolah_NIP_Guru_Penanggung_Jawab_foreign` FOREIGN KEY (`NIP_Guru_Penanggung_Jawab`) REFERENCES `guru` (`NIP`);

--
-- Ketidakleluasaan untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD CONSTRAINT `Guru_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `Jadwal_Kode_Mata_Pelajaran_foreign` FOREIGN KEY (`Kode_Mata_Pelajaran`) REFERENCES `mata_pelajaran` (`Kode_Mata_Pelajaran`),
  ADD CONSTRAINT `Jadwal_NIP_Guru_foreign` FOREIGN KEY (`NIP_Guru`) REFERENCES `guru` (`NIP`);

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `Kelas_Wali_Kelas_foreign` FOREIGN KEY (`Wali_Kelas`) REFERENCES `guru` (`NIP`);

--
-- Ketidakleluasaan untuk tabel `nilai_siswa`
--
ALTER TABLE `nilai_siswa`
  ADD CONSTRAINT `Nilai_Siswa_Kode_Mata_Pelajaran_foreign` FOREIGN KEY (`Kode_Mata_Pelajaran`) REFERENCES `mata_pelajaran` (`Kode_Mata_Pelajaran`),
  ADD CONSTRAINT `Nilai_Siswa_NIS_Siswa_foreign` FOREIGN KEY (`NIS_Siswa`) REFERENCES `siswa` (`NIS`);

--
-- Ketidakleluasaan untuk tabel `orang_tua`
--
ALTER TABLE `orang_tua`
  ADD CONSTRAINT `Orang_Tua_NIS_Siswa_foreign` FOREIGN KEY (`NIS_Siswa`) REFERENCES `siswa` (`NIS`),
  ADD CONSTRAINT `Orang_Tua_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `Siswa_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `Users_Level_foreign` FOREIGN KEY (`Level`) REFERENCES `level_akses` (`Id_Level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
