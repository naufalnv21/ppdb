-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2020 pada 15.14
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_ristek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `tgl_berita` date NOT NULL,
  `isi_berita` text NOT NULL,
  `penulis_berita` varchar(50) NOT NULL,
  `foto_berita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `tgl_berita`, `isi_berita`, `penulis_berita`, `foto_berita`) VALUES
(3, '2020-07-17', 'Berita Tentang Penerimaan Peserta Didik Baru (PPDB) di SMK Ristek Indramayu dibuka mulai tanggal 13 Juli 2020 ', 'Operator', 'logo_ristek.jpg'),
(7, '2020-06-17', 'Wisuda angkatan ke 3 SMK Ristek Indramayu di adakan pada tanggal 19 November 2019 di Halaman Sekolah Ristek Indramayu', 'Operator', 'logo_ristek1.jpg'),
(18, '2020-07-17', 'Logo Ristek Updated', 'Operator', 'logo_ristek4.jpg'),
(20, '2020-07-15', 'Acara Syukuran V2', 'Operator', '89404946_1698431253632836_7672029093625331712_o2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_ulang`
--

CREATE TABLE `tb_daftar_ulang` (
  `id_daftar_ulang` int(11) NOT NULL,
  `id_pendaftaran` int(11) NOT NULL,
  `tgl_daftar_ulang` date NOT NULL,
  `ket_daftar_ulang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id_fasilitas` int(11) NOT NULL,
  `nama_fasilitas` varchar(100) NOT NULL,
  `deskripsi_fasilitas` text NOT NULL,
  `by_fasilitas` varchar(100) NOT NULL,
  `foto_fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id_fasilitas`, `nama_fasilitas`, `deskripsi_fasilitas`, `by_fasilitas`, `foto_fasilitas`) VALUES
(1, 'Perpustakaan', 'Ruangan Untuk Tempat Siswa Belajar', 'Operator', 'logo_ristek.jpg'),
(2, 'Lab', 'Untuk Praktikum Jurusan MM', 'Operator', '89404946_1698431253632836_7672029093625331712_o.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `ttl_guru` varchar(100) NOT NULL,
  `nuptk_guru` int(20) NOT NULL,
  `jk_guru` varchar(15) NOT NULL,
  `email_guru` varchar(255) NOT NULL,
  `tmt_guru` varchar(15) NOT NULL,
  `ijazah_guru` varchar(5) NOT NULL,
  `mapel_guru` varchar(100) NOT NULL,
  `alamat_guru` text NOT NULL,
  `foto_guru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `ttl_guru`, `nuptk_guru`, `jk_guru`, `email_guru`, `tmt_guru`, `ijazah_guru`, `mapel_guru`, `alamat_guru`, `foto_guru`) VALUES
(18, 'kastuti', '0000-00-00', 1234567, 'perempuan', 'kastuti@gmail.com', '2016-2017', 'D3', 'Programming', 'bangkir', 'kastuti2.jpg'),
(19, 'muhammad naufal hariz', '0000-00-00', 12345, 'Laki-laki', 'naufalharizxtkj1@gmail.com', '2019-2020', 'S1', 'PRODUKTIF', 'bangkir', 'naufal2.jpg'),
(37, 'Juan', '0000-00-00', 1231, 'Laki-laki', 'juan@gmail.com', '2016-2017', 'S1', 'PRODUKTIF', 'Kalensari', '4f0cc45269abcc9031aa733b16ddb6f0.jpg'),
(38, 'Fiqi', 'Cirebon 05 Desember 199', 11231, 'Laki-laki', 'Fiqi@gmail.com', '2016-2017', 'D3', 'FISIKA', 'Lohbener', '3A06D5A900000578-0-image-m-57_14781821150171.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_multimedia`
--

CREATE TABLE `tb_multimedia` (
  `id_multimedia` int(11) NOT NULL,
  `nama_multimedia` varchar(50) NOT NULL,
  `jml_siswa_multimedia` int(50) NOT NULL,
  `motto_multimedia` text NOT NULL,
  `acara_multimedia` text NOT NULL,
  `ketua_multimedia` varchar(100) NOT NULL,
  `logo_multimedia` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_multimedia`
--

INSERT INTO `tb_multimedia` (`id_multimedia`, `nama_multimedia`, `jml_siswa_multimedia`, `motto_multimedia`, `acara_multimedia`, `ketua_multimedia`, `logo_multimedia`) VALUES
(1, 'Multimedia', 60, 'Menjadikan jurusan Multimedia sebagai jurusan yang mampu bersaing secara lokal dan internasional', 'Pembukaan Lab baru untuk Jurusan Multimedia. Dengan adanya ini', 'Sandi Rachmationo, S.Si', 'logo_ristek13.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `id_jurusan` varchar(50) NOT NULL,
  `nik_pendaftar` int(20) NOT NULL,
  `skhun_pendaftar` int(20) NOT NULL,
  `nama_pendaftar` varchar(100) NOT NULL,
  `jk_pendaftar` varchar(10) NOT NULL,
  `ttl_pendaftar` text NOT NULL,
  `almt_jl_pendaftar` text NOT NULL,
  `almt_desa_pendaftar` text NOT NULL,
  `almt_rt_rw_pendaftar` text NOT NULL,
  `almt_kec_pendaftar` text NOT NULL,
  `almt_kab_pendaftar` text NOT NULL,
  `telp_hp_pendaftar` int(15) NOT NULL,
  `asal_sekolah_pendaftar` varchar(100) NOT NULL,
  `no_ijazah_pendaftar` int(20) NOT NULL,
  `thn_lulus_pendaftar` int(50) NOT NULL,
  `nama_ayah_pendaftar` varchar(100) NOT NULL,
  `nama_ibu_pendaftar` varchar(100) NOT NULL,
  `prj_orang_tua_pendaftar` text NOT NULL,
  `ppn_orang_tua_pendaftar` text NOT NULL,
  `pendidikan_orang_tua_pendaftar` varchar(10) NOT NULL,
  `almt_jl_orang_tua_pendaftar` text NOT NULL,
  `almt_desa_orang_tua_pendaftar` text NOT NULL,
  `almt_rt_rw_orang_tua_pendaftar` text NOT NULL,
  `almt_kec_orang_tua_pendaftar` text NOT NULL,
  `almt_kab_orang_tua_pendaftar` text NOT NULL,
  `telp_hp_orang_tua_pendaftar` int(15) NOT NULL,
  `file_kk_pendaftar` text NOT NULL,
  `file_akte_pendaftar` text NOT NULL,
  `file_ktp_orang_tua_pendaftar` text NOT NULL,
  `file_ijazah_pendaftar` text NOT NULL,
  `file_skhun_pendaftar` text NOT NULL,
  `file_sktm_pendaftar` text NOT NULL,
  `id_pendaftaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id_pendaftar`, `id_jurusan`, `nik_pendaftar`, `skhun_pendaftar`, `nama_pendaftar`, `jk_pendaftar`, `ttl_pendaftar`, `almt_jl_pendaftar`, `almt_desa_pendaftar`, `almt_rt_rw_pendaftar`, `almt_kec_pendaftar`, `almt_kab_pendaftar`, `telp_hp_pendaftar`, `asal_sekolah_pendaftar`, `no_ijazah_pendaftar`, `thn_lulus_pendaftar`, `nama_ayah_pendaftar`, `nama_ibu_pendaftar`, `prj_orang_tua_pendaftar`, `ppn_orang_tua_pendaftar`, `pendidikan_orang_tua_pendaftar`, `almt_jl_orang_tua_pendaftar`, `almt_desa_orang_tua_pendaftar`, `almt_rt_rw_orang_tua_pendaftar`, `almt_kec_orang_tua_pendaftar`, `almt_kab_orang_tua_pendaftar`, `telp_hp_orang_tua_pendaftar`, `file_kk_pendaftar`, `file_akte_pendaftar`, `file_ktp_orang_tua_pendaftar`, `file_ijazah_pendaftar`, `file_skhun_pendaftar`, `file_sktm_pendaftar`, `id_pendaftaran`) VALUES
(7, 'Multimedia', 123123, 1234, 'Lee', 'Laki-Laki', 'Batam 01 Juni 1999', 'Jalan', 'Desa', '01/02', 'Kecamatan', 'Kabupaten', 89112334, 'afnajf', 121, 2020, 'tes', 'cek', 'tes', 'Di Atas Rp.2 Jt', 'SMK', 'jalan', 'desa', '01/02', 'kecamatan', 'kabupaten', 891218437, '123123.jpg', '123123.jpg', '123123.jpg', '123123.jpg', '123123.jpg', '', 0),
(8, 'Multimedia', 12, 13, 'Coba Lagi Ale Ale ', 'Laki-Laki', 'Jakarta 21 Januari 1999', 'JAlan', 'Desa', '01/02', 'Kecamatan', 'Kabupaten', 8965471, 'SMKN TELEMATIKA INDRAMAYU', 1111111, 2019, 'Cek', 'Sosund', 'Wirausaha', 'Di Atas Rp.2 Jt', 'SMK', 'Jalan', 'Desa', '01/02', 'Kecamatan', 'Kabupaten', 38402384, '12.jpg', '12.jpg', '12.jpg', '12.jpg', '12.jpg', '', 0),
(9, 'Multimedia', 1111, 2222, 'Paperline', 'Laki-Laki', '17 Agustus 1945', 'Jalan', 'Desa', '05/01', 'Kecamatan', 'Kabupaten', 875242, 'SMK TARUNA JAYA', 1122, 2017, 'Buku', 'Tulis', 'Penulis', 'Di Atas Rp.2 Jt', 'SMK', 'Jalan', 'Desa', '05/01', 'Kecamatan', 'Kabupaten', 897526428, '1111.jpg', '1111.jpg', '1111.jpg', '1111.jpg', '1111.jpg', '', 0),
(10, 'Multimedia', 12, 12, 'lulululululu', 'Perempuan', 'Bandung 21 Mei 1999', 'asdas', 'afadsfds', '01/02', 'adfsd', 'ssdf', 832842, 'SMAN 1 INDRAMAYU', 22313, 2017, 'sdfs', 'sdfsd', 'asdas', 'Rp.500 rb - Rp.1 Jt', 'SMA', 'dfdfd', 'sdfsdfdssdfsdf', '02/01', 'sdsdsadas', 'adasd', 89121, '12.jpg', '12.jpg', '12.jpg', '12.jpg', '12.jpg', '', 0),
(11, 'Multimedia', 12344, 11231, 'Aduar', 'Laki-Laki', 'Jakarta 21 Januari 1999', 'Jalan', 'Desa', '01/02', 'Kecamatan', 'Kabupaten', 896147, 'SMKN 1 Jatibarang', 124141, 2017, 'Bapake', 'Emboke', 'PNS', 'Di Atas Rp.2 Jt', 'SMK', 'Jalan', 'Desa', '01/02', 'Kecamatan', 'Kabupaten', 891218437, '12344.jpg', '12344.jpg', '12344.jpg', '12344.jpg', '12344.jpg', '', 0),
(12, 'Multimedia', 123456781, 9999999, 'Rey', 'Laki-Laki', 'Indramayu 21 Juni 1999', 'Jalan', 'Desa', '05/09', 'Kecamatan', 'Kabupaten', 2147483647, 'SMPN 1 Indramayu', 123456789, 2017, 'Ayah', 'Ibu', 'pedagang', 'Rp.1 Jt - Rp.2 Jt', 'indonesia', 'Jalan', 'Desa', '02/09', 'Kecamatan', 'Kabupaten', 2147483647, '123456781.jpg', '123456781.jpg', '123456781.jpg', '123456781.jpg', '123456781.jpg', '', 0),
(13, 'Multimedia', 1235, 99997, 'tes', 'Laki-Laki', 'Indramayu 21 Juni 1999', 'jalan', 'ds', '03/03', 'kec', 'kab', 2147483647, 'SMAN 1 INDRAMAYU', 123456789, 2017, 'guest', 'guest1', 'PNS', 'Rp.500 rb - Rp.1 Jt', 'SMK', 'jl', 'des', '03/03', 'kec', 'kab', 2147483647, '1235.jpg', '1235.jpg', '1235.jpg', '1235.jpg', '1235.jpg', '', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftaran` int(11) NOT NULL,
  `tahun_pendaftaran` int(13) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `kuota_pendaftaran` int(13) NOT NULL,
  `deskripsi_pendaftaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perbank`
--

CREATE TABLE `tb_perbank` (
  `id_perbank` int(11) NOT NULL,
  `nama_perbank` varchar(50) NOT NULL,
  `jml_siswa_perbank` int(50) NOT NULL,
  `motto_perbank` text NOT NULL,
  `acara_perbank` text NOT NULL,
  `ketua_perbank` varchar(50) NOT NULL,
  `logo_perbank` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_perbank`
--

INSERT INTO `tb_perbank` (`id_perbank`, `nama_perbank`, `jml_siswa_perbank`, `motto_perbank`, `acara_perbank`, `ketua_perbank`, `logo_perbank`) VALUES
(1, 'Perbankan', 0, '--', 'Mohon maaf untuk jurusan Perbankan belum dibuka. Mohon bersabar ini ujian bagi kita semua semoga bisa disecapatnya diwujudkan V2', '--', 'logo_ristek5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profile`
--

CREATE TABLE `tb_profile` (
  `id_profile` int(11) NOT NULL,
  `nama_profile` varchar(100) NOT NULL,
  `tentang_profile` text NOT NULL,
  `by_profile` varchar(50) NOT NULL,
  `foto_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_profile`
--

INSERT INTO `tb_profile` (`id_profile`, `nama_profile`, `tentang_profile`, `by_profile`, `foto_profile`) VALUES
(1, 'SMK RISTEK Indramayu', 'SMK RISTEK Indramayu merupakan sekolah swasta yang memiliki akreditasi C. Beralamat di Desa Pemayahan, Kec. Lohbener, Kab. Indramayu. Since Agustus 2016. memiliki 2 jurusan ', 'Operator', 'logo_ristek14.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_register`
--

CREATE TABLE `tb_register` (
  `id_register` int(11) NOT NULL,
  `nama_register` varchar(100) NOT NULL,
  `username_register` text NOT NULL,
  `telp_register` int(15) NOT NULL,
  `password_register` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_register`
--

INSERT INTO `tb_register` (`id_register`, `nama_register`, `username_register`, `telp_register`, `password_register`) VALUES
(1, 'Rey', 'Rey123', 85412145, '12345'),
(2, 'juan julianto', 'juan', 123456, 'juan'),
(4, 'ade diana', 'diana', 123456789, 'diana'),
(5, 'acak', 'acak', 123456789, 'acak'),
(6, 'iwan', 'iwan', 123456789, 'iwan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `jk_siswa` varchar(10) NOT NULL,
  `kelas_siswa` varchar(5) NOT NULL,
  `jurusan_siswa` varchar(20) NOT NULL,
  `alamat_siswa` text NOT NULL,
  `foto_siswa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `nama_siswa`, `jk_siswa`, `kelas_siswa`, `jurusan_siswa`, `alamat_siswa`, `foto_siswa`) VALUES
(3, 'Saeful Anwar', 'Laki-laki', '10', 'Multimedia', 'Pamayahan', 'apel.jpg'),
(4, 'Ghefira', 'Perempuan', '11', 'Multimedia', 'Bandung', 'pisang.jpg'),
(5, 'Diana', 'Perempuan', '12', 'Perbankan', 'Jatibarang', 'geprek.jpg'),
(6, 'Hariz', 'Laki-laki', '12', 'Perbankan', 'Indramayu', 'jeruk.jpg'),
(8, 'Deny', 'Laki-laki', '12', 'Multimedia', 'Bandung', '4f0cc45269abcc9031aa733b16ddb6f0.jpg'),
(9, 'sdada', 'Laki-laki', '10', 'Multimedia', 'Indramayu', '5.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ttl_users` varchar(100) NOT NULL,
  `nuptk_users` varchar(50) NOT NULL,
  `jk_users` varchar(15) NOT NULL,
  `tmt_users` varchar(15) NOT NULL,
  `ijazah_users` varchar(15) NOT NULL,
  `mapel_users` varchar(100) NOT NULL,
  `password_users` text NOT NULL,
  `telp_users` varchar(15) NOT NULL,
  `level_users` int(3) NOT NULL,
  `alamat_users` text NOT NULL,
  `email_users` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `active_id` int(1) NOT NULL,
  `id_register` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`id_users`, `username`, `ttl_users`, `nuptk_users`, `jk_users`, `tmt_users`, `ijazah_users`, `mapel_users`, `password_users`, `telp_users`, `level_users`, `alamat_users`, `email_users`, `created_at`, `updated_at`, `active_id`, `id_register`) VALUES
(1, 'rachmatilah', 'bandung 26 januari 1972', '1458750650200002', 'laki-laki', '2016-2017', 'S1', 'Kepala Sekolah', '$2y$10$O5ptO5ZegZr3IUIwB09mL.Z8R0FE9cYXzHjdShQelH3bkKDeqQzAq', '087321806274', 1, 'Perumahan Sindang Griya Indramayu', '', '2020-06-04', '0000-00-00', 1, 0),
(2, 'sandi rachmationo', 'Indramayu 22 Juni 1988', '3954766666120002', 'Laki-laki', '2016-2017', 'S1', 'Produktif', '$2y$10$Y5dOok4PLwHSoHoSE3.CZeRh1h5EeDwA7A6.FtjT6zhK6xnLGTsy2', '', 2, '', '', '2020-06-18', '0000-00-00', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_daftar_ulang`
--
ALTER TABLE `tb_daftar_ulang`
  ADD PRIMARY KEY (`id_daftar_ulang`);

--
-- Indeks untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indeks untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tb_multimedia`
--
ALTER TABLE `tb_multimedia`
  ADD PRIMARY KEY (`id_multimedia`);

--
-- Indeks untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indeks untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftaran`);

--
-- Indeks untuk tabel `tb_perbank`
--
ALTER TABLE `tb_perbank`
  ADD PRIMARY KEY (`id_perbank`);

--
-- Indeks untuk tabel `tb_profile`
--
ALTER TABLE `tb_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indeks untuk tabel `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id_register`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar_ulang`
--
ALTER TABLE `tb_daftar_ulang`
  MODIFY `id_daftar_ulang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id_fasilitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_guru`
--
ALTER TABLE `tb_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `tb_multimedia`
--
ALTER TABLE `tb_multimedia`
  MODIFY `id_multimedia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_perbank`
--
ALTER TABLE `tb_perbank`
  MODIFY `id_perbank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_profile`
--
ALTER TABLE `tb_profile`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id_register` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
