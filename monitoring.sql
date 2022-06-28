-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 06:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `mon_pelanggaran`
--

CREATE TABLE `mon_pelanggaran` (
  `id_mon_pelanggaran` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_pelanggaran` int(11) NOT NULL,
  `jml_poin` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl_pelanggaran` date NOT NULL,
  `id_guru` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mon_pelanggaran`
--

INSERT INTO `mon_pelanggaran` (`id_mon_pelanggaran`, `id_tahun_akademik`, `id_siswa`, `id_pelanggaran`, `jml_poin`, `keterangan`, `tgl_pelanggaran`, `id_guru`) VALUES
(1, 1, 2, 1, 5, NULL, '2022-06-22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mon_prestasi`
--

CREATE TABLE `mon_prestasi` (
  `id_mon_prestasi` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_prestasi` int(11) NOT NULL,
  `jml_point` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `tgl_prestasi` date NOT NULL,
  `id_guru` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mon_prestasi`
--

INSERT INTO `mon_prestasi` (`id_mon_prestasi`, `id_tahun_akademik`, `id_siswa`, `id_prestasi`, `jml_point`, `keterangan`, `tgl_prestasi`, `id_guru`) VALUES
(1, 1, 1, 1, 10, 'OSN TIK Kabupaten', '2022-06-22', 2),
(2, 1, 1, 2, 8, 'Juara I Kelas X IPA', '2022-06-22', 2),
(3, 1, 1, 1, 10, 'OSN TIK Provinsi', '2022-06-22', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_guru`
--

CREATE TABLE `mst_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(128) NOT NULL,
  `nip` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_guru`
--

INSERT INTO `mst_guru` (`id_guru`, `nama_guru`, `nip`) VALUES
(1, 'Abu Bakar', NULL),
(2, 'Umar', NULL),
(3, 'Usman', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mst_jurusan`
--

CREATE TABLE `mst_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_jurusan`
--

INSERT INTO `mst_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, 'IPA'),
(2, 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kelas`
--

CREATE TABLE `mst_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(3) NOT NULL,
  `id_jurusan` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_kelas`
--

INSERT INTO `mst_kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`, `id_guru`) VALUES
(1, 'X', 1, 2),
(2, 'X', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mst_menu`
--

CREATE TABLE `mst_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_menu`
--

INSERT INTO `mst_menu` (`id_menu`, `menu`) VALUES
(1, 'USER_ACCESS'),
(2, 'ADMIN_DASHBOARD'),
(3, 'MASTER_DATA_TAHUNAKADEMIK'),
(4, 'MASTER_DATA_JURUSAN'),
(5, 'MASTER_DATA_KELAS'),
(6, 'MASTER_DATA_GURU'),
(7, 'MASTER_DATA_SISWA'),
(8, 'MASTER_DATA_PRESTASI'),
(9, 'MASTER_DATA_PELANGGARAN'),
(10, 'MONITORING_PRESTASI'),
(11, 'MONITORING_PELANGGARAN'),
(12, 'PINDAH_KELUAR'),
(13, 'LAPORAN_PRESTASI'),
(14, 'LAPORAN_PELANGGARAN'),
(15, 'LAPORAN_SISWA'),
(16, 'LAPORAN_SISWA_ALUMNI');

-- --------------------------------------------------------

--
-- Table structure for table `mst_pelanggaran`
--

CREATE TABLE `mst_pelanggaran` (
  `id_pelanggaran` int(11) NOT NULL,
  `jenis_pelanggaran` varchar(128) NOT NULL,
  `poin` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_pelanggaran`
--

INSERT INTO `mst_pelanggaran` (`id_pelanggaran`, `jenis_pelanggaran`, `poin`) VALUES
(1, 'Datang terlambat masuk ke sekolah', 5),
(2, 'Keluar tanpa izin', 5),
(3, 'Tidak melaksanakan tugas piket kelas', 5),
(4, 'Berpakaian seragam tidak lengkap', 5),
(5, 'Makan di kelas waktu pelajaran sedang berjalan', 10),
(6, 'Membuang sampah tidak pada tempatnya', 5),
(7, 'Bermain di tempat parkir', 5),
(8, 'Memakai gelang, kalung, anting-anting bagi laki-laki dan berhias berlebihan bagi perempuan', 10),
(9, 'Tidak memperhatikan panggilan guru dan pegawai', 10),
(10, 'Berada di lantai pada waktu pergantian pelajaran', 10),
(11, 'Berpakaian tidak rapi', 5),
(12, 'Siswa tidak masuk tanpa keterangan', 5),
(13, 'Membuat izin palsu', 10),
(14, 'Membolos/keluar/meninggalkan kelas', 15),
(15, 'Membawa buku, majalah, kaset terlarang/gambar porno/HP bergambar porno', 20),
(16, 'Melindungi teman yang salah/provokator', 20),
(17, 'Melompat pagar/tidak mengikuti upacara', 20),
(18, 'Mengganggu/mengacau kelas lain', 10),
(19, 'Bersikap tidak sopan/menentang guru/pegawai', 50),
(20, 'Mencoret-coret tembok, pintu, meja, kursi, dan memecahkan kaca yang tidak semestinya', 10),
(21, 'Melakukan tindakan amoral', 50),
(22, 'Melakukan tindakan pemerasan dan pemalakan terhadap teman dan orang lain', 50),
(23, 'Membawa dan merokok pada lingkungan sekolah', 20),
(24, 'Berbahasa yang kotor/kasar kepada teman/orang lain', 20),
(25, 'Menyampaikan berita yang tidak benar (memprovokasi) orang tua, wali, masyarakat sehingga melakukan tindakan anarkis atau campur ', 75),
(26, 'Rambut gondrong, mengecat rambut dan tidak  rapi', 25),
(27, 'Membuat tato pada anggota badan', 25),
(28, 'Memalsukan tanda tangan wali kelas, guru dan kepala sekolah', 80),
(29, 'Membawa/minum minuman keras', 80),
(30, 'Berkelahi atau main hakim sendiri', 50),
(31, 'Merusak sarana/prasarana sekolah', 50),
(32, 'Mengambil milik orang lain (mencuri)', 75),
(33, 'Membawa/menyebarkan selebaran yang menimbulkan keresahan', 75),
(34, 'Berurusan dengan pihak yang berwajib karena melakukan kejahatan', 80),
(35, 'Membawa senjata tajam tanpa sepengetahuan sekolah', 50),
(36, 'Merubah atau memalsukan raport', 80),
(37, 'Mengikuti organisasi terlarang', 80),
(38, 'Teribat dalam menyalahgunakan narkoba/zat aditif lainnya', 85),
(39, 'Melakukan tindakan seksual di luar nikah', 100),
(40, 'Memprovokasi orang tua/masyarakat yang dapat merongrong kewibawaan sekolah', 80),
(41, 'Berjudi di sekolah', 50);

-- --------------------------------------------------------

--
-- Table structure for table `mst_prestasi`
--

CREATE TABLE `mst_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `jenis_prestasi` varchar(128) NOT NULL,
  `point` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_prestasi`
--

INSERT INTO `mst_prestasi` (`id_prestasi`, `jenis_prestasi`, `point`) VALUES
(1, 'Juara Olimpiade', 10),
(2, 'Juara Kelas', 8);

-- --------------------------------------------------------

--
-- Table structure for table `mst_siswa`
--

CREATE TABLE `mst_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_tahun_akademik` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama_siswa` varchar(128) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `status` enum('aktif','lulus','pindah','dikeluarkan') NOT NULL,
  `tahun_lulus_keluar` varchar(20) DEFAULT NULL,
  `nama_ibu` varchar(128) DEFAULT NULL,
  `keterangan_keluar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mst_siswa`
--

INSERT INTO `mst_siswa` (`id_siswa`, `id_tahun_akademik`, `nis`, `nama_siswa`, `id_kelas`, `status`, `tahun_lulus_keluar`, `nama_ibu`, `keterangan_keluar`) VALUES
(1, 1, '201001', 'Rizqi', 1, 'aktif', NULL, NULL, NULL),
(2, 1, '201002', 'Nusabbih', 1, 'aktif', NULL, NULL, NULL),
(3, 1, '201003', 'Hidayatullah', 1, 'aktif', NULL, NULL, NULL),
(4, 1, '201004', 'Tes', NULL, 'dikeluarkan', '2022', NULL, 'Berperilaku buruk');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_akademik`
--

CREATE TABLE `tahun_akademik` (
  `id_tahun_akademik` int(11) NOT NULL,
  `tahun_akademik` varchar(20) NOT NULL,
  `angkatan` varchar(20) NOT NULL,
  `is_aktif` enum('aktif','nonaktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tahun_akademik`
--

INSERT INTO `tahun_akademik` (`id_tahun_akademik`, `tahun_akademik`, `angkatan`, `is_aktif`) VALUES
(1, '2020/2021', '2020', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `id_guru` int(11) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(128) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_guru`, `username`, `password`, `level`) VALUES
(1, NULL, 'superadmin', '$2y$10$KuMvvev1K1GDnj3tVpB14egCM1mCJa7oJL71nU70EGLYEDIWbSpVy', 0),
(2, 1, 'abubakar', '$2y$10$lsj8QrkEr2gUslp9xjndOO/j/oN2OmXay9TWakQ5xOH9RvPzUSYNm', 1),
(3, 2, 'umar', '$2y$10$BEG6QfLo.QCo1j6N0IP.qeV/wUastRJwYFz/JSS/pLywIUYzcGn2C', 2),
(4, 3, 'usman', '$2y$10$ONVViDroKzE94S6UN5M0/.l5Q3IBObMrZcxw3JTjaRQlLbuX2rgC.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`id`, `level`, `id_menu`) VALUES
(1, 0, 1),
(2, 0, 2),
(3, 0, 3),
(4, 0, 4),
(5, 0, 5),
(6, 0, 6),
(7, 0, 7),
(8, 0, 8),
(9, 0, 9),
(10, 0, 10),
(11, 0, 11),
(12, 2, 10),
(13, 2, 11),
(14, 0, 12),
(15, 2, 12),
(16, 0, 13),
(17, 0, 14),
(18, 1, 2),
(19, 1, 13),
(20, 1, 14),
(21, 0, 15),
(22, 0, 16),
(23, 1, 15),
(24, 1, 16);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mon_pelanggaran`
--
ALTER TABLE `mon_pelanggaran`
  ADD PRIMARY KEY (`id_mon_pelanggaran`);

--
-- Indexes for table `mon_prestasi`
--
ALTER TABLE `mon_prestasi`
  ADD PRIMARY KEY (`id_mon_prestasi`);

--
-- Indexes for table `mst_guru`
--
ALTER TABLE `mst_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `mst_jurusan`
--
ALTER TABLE `mst_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `mst_kelas`
--
ALTER TABLE `mst_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `mst_menu`
--
ALTER TABLE `mst_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `mst_pelanggaran`
--
ALTER TABLE `mst_pelanggaran`
  ADD PRIMARY KEY (`id_pelanggaran`);

--
-- Indexes for table `mst_prestasi`
--
ALTER TABLE `mst_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `mst_siswa`
--
ALTER TABLE `mst_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  ADD PRIMARY KEY (`id_tahun_akademik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mon_pelanggaran`
--
ALTER TABLE `mon_pelanggaran`
  MODIFY `id_mon_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mon_prestasi`
--
ALTER TABLE `mon_prestasi`
  MODIFY `id_mon_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_guru`
--
ALTER TABLE `mst_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mst_jurusan`
--
ALTER TABLE `mst_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_kelas`
--
ALTER TABLE `mst_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_menu`
--
ALTER TABLE `mst_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `mst_pelanggaran`
--
ALTER TABLE `mst_pelanggaran`
  MODIFY `id_pelanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `mst_prestasi`
--
ALTER TABLE `mst_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mst_siswa`
--
ALTER TABLE `mst_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tahun_akademik`
--
ALTER TABLE `tahun_akademik`
  MODIFY `id_tahun_akademik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
