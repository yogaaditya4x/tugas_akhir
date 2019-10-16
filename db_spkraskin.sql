-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2019 pada 04.44
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spkraskin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(45) NOT NULL,
  `merk` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` varchar(45) NOT NULL,
  `kategori` enum('gitar','keyboard','bass','djimbe') NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_ulasan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `merk`, `harga`, `deskripsi`, `stok`, `gambar`, `kategori`, `id_transaksi`, `id_ulasan`) VALUES
(1, 'Gitar Butanza', 'Butanza', 1000000, '', 0, '', 'gitar', 0, 0),
(2, 'keyboard yamaha', 'yamaha', 15000000, 'apikkkkkk', 5, 'default.jpg', 'keyboard', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` enum('gitar','keyboard','bass','djimbe') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_kategori`) VALUES
(1, 'gitar'),
(2, 'keyboard'),
(3, 'bass'),
(4, 'djimbe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(5) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `nama`) VALUES
(1, 'Farel Koyek'),
(2, 'Osas Labulaza');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c1_dinding_rumah`
--

CREATE TABLE `tb_c1_dinding_rumah` (
  `id_c1` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c1_dinding_rumah`
--

INSERT INTO `tb_c1_dinding_rumah` (`id_c1`, `kriteria`, `bobot`) VALUES
(1, 'Bambu', 3),
(2, 'Papan Kayu', 4),
(3, 'Bata', 3),
(4, 'Beton', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c2_jenis_lantai`
--

CREATE TABLE `tb_c2_jenis_lantai` (
  `id_c2` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c2_jenis_lantai`
--

INSERT INTO `tb_c2_jenis_lantai` (`id_c2`, `kriteria`, `bobot`) VALUES
(1, 'Tanah', 5),
(2, 'Plester', 4),
(3, 'Keramik', 3),
(4, 'Marmer', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c3_luas_lantai`
--

CREATE TABLE `tb_c3_luas_lantai` (
  `id_c3` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c3_luas_lantai`
--

INSERT INTO `tb_c3_luas_lantai` (`id_c3`, `kriteria`, `bobot`) VALUES
(3, '4m', 5),
(4, '6m', 4),
(5, '8m', 3),
(6, '10m', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c4_fasilitas_mck`
--

CREATE TABLE `tb_c4_fasilitas_mck` (
  `id_c4` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c4_fasilitas_mck`
--

INSERT INTO `tb_c4_fasilitas_mck` (`id_c4`, `kriteria`, `bobot`) VALUES
(1, 'Tidak Punya', 5),
(2, 'Toilet Tetangga', 4),
(3, 'Toilet Umum', 3),
(4, 'Toilet Pribadi', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c5_sumber_penerangan_rumah`
--

CREATE TABLE `tb_c5_sumber_penerangan_rumah` (
  `id_c5` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c5_sumber_penerangan_rumah`
--

INSERT INTO `tb_c5_sumber_penerangan_rumah` (`id_c5`, `kriteria`, `bobot`) VALUES
(1, 'Tidak ada', 5),
(2, 'Lilin', 4),
(3, 'Lentera', 3),
(4, 'Lampu', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c6_sumber_air_minum`
--

CREATE TABLE `tb_c6_sumber_air_minum` (
  `id_c6` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c6_sumber_air_minum`
--

INSERT INTO `tb_c6_sumber_air_minum` (`id_c6`, `kriteria`, `bobot`) VALUES
(1, 'Air hujan', 5),
(2, 'Air sungai', 4),
(3, 'Air sumur', 3),
(4, 'Air PDAM', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c7_bbm`
--

CREATE TABLE `tb_c7_bbm` (
  `id_c7` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c7_bbm`
--

INSERT INTO `tb_c7_bbm` (`id_c7`, `kriteria`, `bobot`) VALUES
(1, 'Arang', 5),
(2, 'Kayu bakar', 4),
(3, 'Minyak tanah', 3),
(4, 'Gas LPG 12Kg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c8_pekerjaan`
--

CREATE TABLE `tb_c8_pekerjaan` (
  `id_c8` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c8_pekerjaan`
--

INSERT INTO `tb_c8_pekerjaan` (`id_c8`, `kriteria`, `bobot`) VALUES
(1, 'Petani', 5),
(2, 'Nelayan', 4),
(3, 'Buruh', 3),
(4, 'Pedagang', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c9_penghasilan`
--

CREATE TABLE `tb_c9_penghasilan` (
  `id_c9` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c9_penghasilan`
--

INSERT INTO `tb_c9_penghasilan` (`id_c9`, `kriteria`, `bobot`) VALUES
(1, '600.000', 5),
(2, '700.000', 4),
(3, '850.000', 3),
(4, '1.000.000', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c10_pendidikan`
--

CREATE TABLE `tb_c10_pendidikan` (
  `id_c10` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c10_pendidikan`
--

INSERT INTO `tb_c10_pendidikan` (`id_c10`, `kriteria`, `bobot`) VALUES
(1, 'Tidak sekolah', 5),
(2, 'SD', 4),
(3, 'SMP', 3),
(4, 'SMA', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c11_aset_berharga`
--

CREATE TABLE `tb_c11_aset_berharga` (
  `id_c11` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c11_aset_berharga`
--

INSERT INTO `tb_c11_aset_berharga` (`id_c11`, `kriteria`, `bobot`) VALUES
(1, 'Tidak punya', 5),
(2, 'Sepeda motor', 4),
(3, 'Ternak', 3),
(4, 'Emas', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_c12_tanggungan_keluarga`
--

CREATE TABLE `tb_c12_tanggungan_keluarga` (
  `id_c12` int(5) NOT NULL,
  `kriteria` varchar(50) NOT NULL,
  `bobot` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_c12_tanggungan_keluarga`
--

INSERT INTO `tb_c12_tanggungan_keluarga` (`id_c12`, `kriteria`, `bobot`) VALUES
(1, '6 orang', 5),
(2, '5 orang', 4),
(3, '4 orang', 3),
(4, '3 orang', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_evaluasi`
--

CREATE TABLE `tb_evaluasi` (
  `id_alternatif` int(10) DEFAULT NULL,
  `id_kriteria` int(10) DEFAULT NULL,
  `nilai` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(50) NOT NULL,
  `simbol` int(10) NOT NULL,
  `kriteria` varchar(50) DEFAULT NULL,
  `bobot` float DEFAULT NULL,
  `atribut` set('Benefit','Cost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `simbol`, `kriteria`, `bobot`, `atribut`) VALUES
(1, 1, 'lantai', 20, 'Benefit'),
(4, 2, 'Dinding', 30, 'Benefit'),
(5, 3, 'Luas Rumah', 10, 'Cost'),
(6, 4, 'Listrik', 20, 'Benefit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_penduduk` int(5) NOT NULL,
  `c1` int(5) NOT NULL,
  `c2` int(5) NOT NULL,
  `c3` int(5) NOT NULL,
  `c4` int(5) NOT NULL,
  `c5` int(5) NOT NULL,
  `c6` int(5) NOT NULL,
  `c7` int(5) NOT NULL,
  `c8` int(5) NOT NULL,
  `c9` int(5) NOT NULL,
  `c10` int(5) NOT NULL,
  `c11` int(5) NOT NULL,
  `c12` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `id_penduduk` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `nik` int(11) NOT NULL,
  `kk` varchar(50) NOT NULL,
  `alamat` varchar(120) NOT NULL,
  `rt` int(2) NOT NULL,
  `rw` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`id_penduduk`, `nama`, `jenis_kelamin`, `nik`, `kk`, `alamat`, `rt`, `rw`) VALUES
(1234567816, 'Dinda Safira', 'Perempuan', 123456789, '123456789', 'Jalan ikan masako', 1, 2),
(1234567817, 'Alex', 'Laki - laki', 12345678, '12345678', 'Jalan ikan biru', 2, 3),
(1234567818, 'Macrus', 'Laki - laki', 1234567, '1234567', 'Jalan Ikan Teri', 3, 4),
(1234567819, 'Alan', 'Laki - laki', 123456, '123456', 'Jalan ikan teri', 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penilai`
--

CREATE TABLE `tb_penilai` (
  `id_penilai` int(5) NOT NULL,
  `id_penduduk` varchar(50) NOT NULL,
  `c1` varchar(50) NOT NULL,
  `c2` varchar(50) NOT NULL,
  `c3` varchar(50) NOT NULL,
  `c4` varchar(50) NOT NULL,
  `c5` varchar(50) NOT NULL,
  `c6` varchar(50) NOT NULL,
  `c7` varchar(50) NOT NULL,
  `c8` varchar(50) NOT NULL,
  `c9` varchar(50) NOT NULL,
  `c10` varchar(50) NOT NULL,
  `c11` varchar(50) NOT NULL,
  `c12` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_pembayaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telepon` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_user` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `alamat`, `no_telepon`, `username`, `password`, `level_user`) VALUES
(3, 'Yoga', 'Jln.Ikan Mas', 123, 'yoga', 'yoga', 'admin'),
(4, 'Petugas 1', 'Kepatihan', 1234, 'petugas', 'petugas', 'petugas'),
(5, 'Dinda Safira', 'bulat', 123, 'user', '12345', 'petugas'),
(6, 'Tito', 'Rogojampi', 2147483647, 'tito', 'tito', 'petugas'),
(7, 'yoga', 'bwi', 82, 'yoga', '807659cd883fc0a63f6ce615893b3558', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `tb_c1_dinding_rumah`
--
ALTER TABLE `tb_c1_dinding_rumah`
  ADD PRIMARY KEY (`id_c1`);

--
-- Indeks untuk tabel `tb_c2_jenis_lantai`
--
ALTER TABLE `tb_c2_jenis_lantai`
  ADD PRIMARY KEY (`id_c2`);

--
-- Indeks untuk tabel `tb_c3_luas_lantai`
--
ALTER TABLE `tb_c3_luas_lantai`
  ADD PRIMARY KEY (`id_c3`);

--
-- Indeks untuk tabel `tb_c4_fasilitas_mck`
--
ALTER TABLE `tb_c4_fasilitas_mck`
  ADD PRIMARY KEY (`id_c4`);

--
-- Indeks untuk tabel `tb_c5_sumber_penerangan_rumah`
--
ALTER TABLE `tb_c5_sumber_penerangan_rumah`
  ADD PRIMARY KEY (`id_c5`);

--
-- Indeks untuk tabel `tb_c6_sumber_air_minum`
--
ALTER TABLE `tb_c6_sumber_air_minum`
  ADD PRIMARY KEY (`id_c6`);

--
-- Indeks untuk tabel `tb_c7_bbm`
--
ALTER TABLE `tb_c7_bbm`
  ADD PRIMARY KEY (`id_c7`);

--
-- Indeks untuk tabel `tb_c8_pekerjaan`
--
ALTER TABLE `tb_c8_pekerjaan`
  ADD PRIMARY KEY (`id_c8`);

--
-- Indeks untuk tabel `tb_c9_penghasilan`
--
ALTER TABLE `tb_c9_penghasilan`
  ADD PRIMARY KEY (`id_c9`);

--
-- Indeks untuk tabel `tb_c10_pendidikan`
--
ALTER TABLE `tb_c10_pendidikan`
  ADD PRIMARY KEY (`id_c10`);

--
-- Indeks untuk tabel `tb_c11_aset_berharga`
--
ALTER TABLE `tb_c11_aset_berharga`
  ADD PRIMARY KEY (`id_c11`);

--
-- Indeks untuk tabel `tb_c12_tanggungan_keluarga`
--
ALTER TABLE `tb_c12_tanggungan_keluarga`
  ADD PRIMARY KEY (`id_c12`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indeks untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_c1_dinding_rumah`
--
ALTER TABLE `tb_c1_dinding_rumah`
  MODIFY `id_c1` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c2_jenis_lantai`
--
ALTER TABLE `tb_c2_jenis_lantai`
  MODIFY `id_c2` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c3_luas_lantai`
--
ALTER TABLE `tb_c3_luas_lantai`
  MODIFY `id_c3` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_c4_fasilitas_mck`
--
ALTER TABLE `tb_c4_fasilitas_mck`
  MODIFY `id_c4` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c5_sumber_penerangan_rumah`
--
ALTER TABLE `tb_c5_sumber_penerangan_rumah`
  MODIFY `id_c5` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c6_sumber_air_minum`
--
ALTER TABLE `tb_c6_sumber_air_minum`
  MODIFY `id_c6` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c7_bbm`
--
ALTER TABLE `tb_c7_bbm`
  MODIFY `id_c7` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c8_pekerjaan`
--
ALTER TABLE `tb_c8_pekerjaan`
  MODIFY `id_c8` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c9_penghasilan`
--
ALTER TABLE `tb_c9_penghasilan`
  MODIFY `id_c9` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c10_pendidikan`
--
ALTER TABLE `tb_c10_pendidikan`
  MODIFY `id_c10` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c11_aset_berharga`
--
ALTER TABLE `tb_c11_aset_berharga`
  MODIFY `id_c11` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_c12_tanggungan_keluarga`
--
ALTER TABLE `tb_c12_tanggungan_keluarga`
  MODIFY `id_c12` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  MODIFY `id_penduduk` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567820;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
