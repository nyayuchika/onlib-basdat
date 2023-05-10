-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Bulan Mei 2023 pada 04.45
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`, `level`) VALUES
('chika', '1234', 'super_admin'),
('lala', 'l4l4', 'admin'),
('lili', 'l1l1', 'admin'),
('mittaps', '0000', 'admin'),
('vano', 'v4n0', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blok`
--

CREATE TABLE `blok` (
  `id_blok` varchar(10) NOT NULL,
  `id_ruang` varchar(10) NOT NULL,
  `nama_blok` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blok`
--

INSERT INTO `blok` (`id_blok`, `id_ruang`, `nama_blok`) VALUES
('B11', 'R01', 'Lantai 1 Ruang 1 Blok A'),
('B12', 'R01', 'Lantai 1 Ruang 1 Blok B'),
('B13', 'R01', 'Lantai 1 Ruang 1 Blok C'),
('B14', 'R01', 'Lantai 1 Ruang 1 Blok D'),
('B21', 'R02', 'Lantai 1 Ruang 2 Blok A'),
('B22', 'R02', 'Lantai 1 Ruang 2 Blok B'),
('B23', 'R02', 'Lantai 1 Ruang 2 Blok C'),
('B24', 'R02', 'Lantai 1 Ruang 2 Blok D'),
('B31', 'R03', 'Lantai 2 Ruang 3 Blok A'),
('B32', 'R03', 'Lantai 2 Ruang 3 Blok B'),
('B33', 'R03', 'Lantai 2 Ruang 3 Blok C'),
('B34', 'R03', 'Lantai 2 Ruang 3 Blok D'),
('B41', 'R04', 'Lantai 2 Ruang 4 Blok A'),
('B42', 'R04', 'Lantai 2 Ruang 4 Blok B'),
('B43', 'R04', 'Lantai 2 Ruang 4 Blok C'),
('B44', 'R04', 'Lantai 2 Ruang 4 Blok D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `breakfast`
--

CREATE TABLE `breakfast` (
  `Kode_Breakfast` varchar(30) NOT NULL,
  `Nama_Breakfast` varchar(30) NOT NULL,
  `Harga_Breakfast` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `breakfast`
--

INSERT INTO `breakfast` (`Kode_Breakfast`, `Nama_Breakfast`, `Harga_Breakfast`) VALUES
('FB01', 'Paket 2 Breakfast', 50000),
('FB02', 'Paket 4 Breakfast', 75000),
('FB03', 'Paket 6 Breakfast', 100000),
('FB04', 'No Breakfast', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` varchar(10) NOT NULL,
  `id_kelompok` varchar(10) NOT NULL,
  `id_penerbit` varchar(10) NOT NULL,
  `id_tingkat` varchar(10) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `isbn` varchar(25) NOT NULL,
  `thn_terbit` varchar(6) NOT NULL,
  `stok_buku` varchar(5) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_kelompok`, `id_penerbit`, `id_tingkat`, `judul_buku`, `isbn`, `thn_terbit`, `stok_buku`, `foto`) VALUES
('B01', 'KB11', 'PN01', 'T12', 'Ronggeng Dukuh Paruk', '9792201963', '2003', '3', 'ronggeng.jpg'),
('B02', 'KB11', 'PN01', 'T14', 'Hujan', '9786020324784', '2016', '2', 'hujan.jpg'),
('B03', 'KB21', 'PN03', 'T21', 'Kalkulus Jilid 2', '0131429248', '2008', '3', 'kalkulus.jpg'),
('B04', 'KB21', 'PN03', 'T14', 'Aljabar Linear Elementer ', '9797414183', '2004', '3', 'alin.jpg'),
('B05', 'KB33', 'PN04', 'T13', 'Metode Diskrit Revisi Kelima', ' 9786028758789', '2012', '4', 'metdis.jpg'),
('B06', 'KB23', 'PN03', 'T12', 'Biologi Jilid 1 Edisi 8', '9789790756885', '2010', '3', 'biologi.jpg'),
('B07', 'KB23', 'PN05', 'T25', 'Dasar-Dasar Genetika Mendel', '9786022627975', '2018', '3', 'dasargenetikamendel.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cara_pmb`
--

CREATE TABLE `cara_pmb` (
  `Kode_Cara_Pembayaran` varchar(30) NOT NULL,
  `Nama_Cara_Pembayaran` varchar(30) NOT NULL,
  `Nomor_Tujuan` int(30) NOT NULL,
  `Kode_Jenis_Pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cara_pmb`
--

INSERT INTO `cara_pmb` (`Kode_Cara_Pembayaran`, `Nama_Cara_Pembayaran`, `Nomor_Tujuan`, `Kode_Jenis_Pembayaran`) VALUES
('CP01', 'Bank BCA', 17890, 'JP01'),
('CP02', 'Bank BRI', 123456, 'JP01'),
('CP03', 'Bank Mandiri', 4321, 'JP01'),
('CP04', 'Dana', 81234, 'JP02'),
('CP05', 'OVO', 81234, 'JP02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `extrabed`
--

CREATE TABLE `extrabed` (
  `Kode_Extrabed` varchar(30) NOT NULL,
  `Nama_Extrabed` varchar(30) NOT NULL,
  `Harga_Extrabed` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `extrabed`
--

INSERT INTO `extrabed` (`Kode_Extrabed`, `Nama_Extrabed`, `Harga_Extrabed`) VALUES
('FE01', 'Matras Bed', 20000),
('FE02', 'Small Bed', 30000),
('FE03', 'Twin Bed', 45000),
('FE04', 'Queen Bed', 55000),
('FE05', 'King Bed', 70000),
('FE06', 'No Extra Bed', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `faktur_peminjaman`
--

CREATE TABLE `faktur_peminjaman` (
  `no_pinjam` varchar(25) NOT NULL,
  `nim` varchar(25) NOT NULL,
  `id_status` varchar(10) NOT NULL,
  `total_buku` varchar(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_batas_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `faktur_peminjaman`
--

INSERT INTO `faktur_peminjaman` (`no_pinjam`, `nim`, `id_status`, `total_buku`, `tgl_pinjam`, `tgl_batas_pinjam`, `tgl_kembali`, `denda`) VALUES
('NP001', '08011181924016', 'S03', '2', '2020-12-26', '2020-12-29', '2020-12-30', '1000'),
('NP002', '08011281924027', 'S03', '2', '2020-12-26', '2020-12-29', '2020-12-31', '2000'),
('NP003', '08011281924025', 'S03', '2', '2020-12-26', '2020-12-29', '2021-01-01', '3000'),
('NP004', '08011181924016', 'S03', '1', '2020-12-27', '2020-12-30', '2020-12-30', '0'),
('NP005', '08011281924051', 'S03', '2', '2021-01-01', '2020-12-04', '2021-01-05', '1000'),
('NP006', '08011181924010', 'S03', '2', '2021-01-01', '2021-01-04', '2021-01-06', '2000'),
('NP007', '08011181924016', 'S03', '1', '2021-01-29', '2021-02-01', '2021-02-01', '0'),
('NP008', '08011281924027', 'S02', '1', '2021-01-29', '2021-02-01', '2021-02-01', '0'),
('NP009', '08011281924025', 'S03', '2', '2021-01-29', '2021-02-01', '2021-02-03', '2000'),
('NP010', '08011181924016', 'S03', '1', '2021-11-02', '2021-11-05', '2021-11-05', '0'),
('NP011', '08011181924016', 'S01', '2', '2021-11-03', '2021-11-06', '2021-11-06', '0'),
('NP012', '08011181924016', 'S02', '2', '2021-12-07', '2021-12-10', '2021-12-10', '0'),
('NP013', '08011281924033', 'S03', '1', '2022-12-28', '2022-12-31', '2022-12-31', '0'),
('NP014', '08011281924033', 'S01', '1', '2023-01-04', '2023-01-07', '2023-01-07', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` varchar(10) NOT NULL,
  `nama_fakultas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
('F01', 'Fakultas Matematika & Ilmu Pengetahuan Alam'),
('F02', 'Fakultas Kedokteran'),
('F03', 'Fakultas Teknik'),
('F04', 'Fakultas Pertanian'),
('F05', 'Fakultas Ilmu Komputer'),
('F06', 'Fakultas Kesehatan Masyarakat'),
('F07', 'Fakultas Ilmu Sosial dan Ilmu Politik'),
('F08', 'Fakultas Ekonomi'),
('F09', 'Fakultas Keguruan dan Ilmu Pendidikan'),
('F10', 'Fakultas Hukum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_buku`
--

CREATE TABLE `jenis_buku` (
  `id_jenis` varchar(10) NOT NULL,
  `nama_jenis` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_buku`
--

INSERT INTO `jenis_buku` (`id_jenis`, `nama_jenis`) VALUES
('JB01', 'Fiksi'),
('JB02', 'Sains & Matematika'),
('JB03', 'Teknologi & Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_interior`
--

CREATE TABLE `jenis_interior` (
  `Kode_Interior` varchar(30) NOT NULL,
  `Nama_Interior` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_interior`
--

INSERT INTO `jenis_interior` (`Kode_Interior`, `Nama_Interior`) VALUES
('JI01', 'Kontemporer'),
('JI02', 'Minimalis'),
('JI03', 'Industrial'),
('JI04', 'Vintage'),
('JI05', 'Tradisional'),
('JI06', 'Bohemian');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pmb`
--

CREATE TABLE `jenis_pmb` (
  `Kode_Jenis_Pembayaran` varchar(30) NOT NULL,
  `Nama_Jenis_Pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_pmb`
--

INSERT INTO `jenis_pmb` (`Kode_Jenis_Pembayaran`, `Nama_Jenis_Pembayaran`) VALUES
('JP01', 'Bank'),
('JP02', 'E-Wallet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_rumah`
--

CREATE TABLE `jenis_rumah` (
  `Kode_Jenis_Rumah` varchar(30) NOT NULL,
  `Nama_Jenis_Rumah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_rumah`
--

INSERT INTO `jenis_rumah` (`Kode_Jenis_Rumah`, `Nama_Jenis_Rumah`) VALUES
('JR01', '1 Lantai 3 Kamar'),
('JR02', '1 Lantai 2 Kamar'),
('JR03', '2 Lantai 2 Kamar'),
('JR04', '2 Lantai 3 Kamar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_view`
--

CREATE TABLE `jenis_view` (
  `Kode_View` varchar(30) NOT NULL,
  `Nama_View` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_view`
--

INSERT INTO `jenis_view` (`Kode_View`, `Nama_View`) VALUES
('JV01', 'Danau Tebat Gheban'),
('JV02', 'Gunung Dempo'),
('JV03', 'Green Paradise'),
('JV04', 'Air Terjun Curup Embun'),
('JV05', 'Kebun Teh Pagar Alam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` varchar(10) NOT NULL,
  `id_fakultas` varchar(10) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `id_fakultas`, `nama_jurusan`) VALUES
('J101', 'F10', 'Ilmu Hukum'),
('J11', 'F01', 'Matematika'),
('J12', 'F01', 'Fisika'),
('J13', 'F01', 'Kimia'),
('J14', 'F01', 'Biologi'),
('J15', 'F01', 'Farmasi'),
('J16', 'F01', 'Ilmu Kelautan'),
('J21', 'F02', 'Psikologi'),
('J22', 'F02', 'Pendidikan Dokter'),
('J23', 'F02', 'Kedokteran Gigi'),
('J24', 'F02', 'Ilmu Keperawatan'),
('J31', 'F03', 'Teknik Pertambangan'),
('J32', 'F03', 'Arsitektur'),
('J33', 'F03', 'Teknik Mesin'),
('J34', 'F03', 'Teknik Kimia'),
('J35', 'F03', 'Teknik Elektro'),
('J36', 'F03', 'Teknik Geologi'),
('J37', 'F03', 'Teknik Sipil'),
('J41', 'F04', 'Agronomi'),
('J42', 'F04', 'Ilmu Tanah'),
('J43', 'F04', 'Agribisnis'),
('J44', 'F04', 'Peternakan'),
('J45', 'F04', 'Teknologi Hasil Perikanan'),
('J46', 'F04', 'Ilmu Hama dan Penyakit Tumbuhan'),
('J47', 'F04', 'Teknik Hasil Pertanian'),
('J48', 'F04', 'Budidaya Perairan'),
('J51', 'F05', 'Teknik Informatika'),
('J52', 'F05', 'Sistem Komputer'),
('J53', 'F05', 'Sistem Informasi'),
('J61', 'F06', 'Ilmu Kesehatan Masyarakat'),
('J62', 'F06', 'Ilmu Gizi'),
('J63', 'F06', 'Kesehatan Lingkungan'),
('J71', 'F07', 'Ilmu Administrasi Negara'),
('J72', 'F07', 'Sosiologi'),
('J73', 'F07', 'Ilmu Komunikasi'),
('J74', 'F07', 'Ilmu Hubungan Internasional'),
('J81', 'F08', 'Manajemen'),
('J82', 'F08', 'Akuntansi'),
('J83', 'F08', 'Ekonomi Pembangunan'),
('J91', 'F09', 'Pendidikan Matematika'),
('J92', 'F09', 'Pendidikan Kimia'),
('J93', 'F09', 'Pendidikan Fisika'),
('J94', 'F09', 'Pendidikan Biologi'),
('J95', 'F09', 'Pendidikan Bahasa Inggris'),
('J96', 'F09', 'Pendidikan Bahasa Indonesia, Sastra Indonesia dan ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kecamatan`
--

CREATE TABLE `kecamatan` (
  `Id_Kecamatan` varchar(30) NOT NULL,
  `Nama_Kecamatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kecamatan`
--

INSERT INTO `kecamatan` (`Id_Kecamatan`, `Nama_Kecamatan`) VALUES
('KC01', 'Dempo Selatan'),
('KC02', 'Dempo Utara'),
('KC03', 'Pagar Alam Selatan'),
('KC04', 'Pagar Alam Utara'),
('KC05', 'Dempo Tengah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelompok_buku`
--

CREATE TABLE `kelompok_buku` (
  `id_kelompok` varchar(10) NOT NULL,
  `id_jenis` varchar(10) NOT NULL,
  `nama_kelompok` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelompok_buku`
--

INSERT INTO `kelompok_buku` (`id_kelompok`, `id_jenis`, `nama_kelompok`) VALUES
('KB11', 'JB01', 'Novel'),
('KB12', 'JB01', 'Cerita Pendek'),
('KB21', 'JB02', 'Matematika'),
('KB22', 'JB02', 'Fisika'),
('KB23', 'JB02', 'Biologi'),
('KB33', 'JB03', 'Ilmu Komputer');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lantai`
--

CREATE TABLE `lantai` (
  `id_lantai` varchar(10) NOT NULL,
  `nama_lantai` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lantai`
--

INSERT INTO `lantai` (`id_lantai`, `nama_lantai`) VALUES
('L01', 'Lantai 1'),
('L02', 'Lantai 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry`
--

CREATE TABLE `laundry` (
  `Kode_Laundry` varchar(30) NOT NULL,
  `Nama_Laundry` varchar(30) NOT NULL,
  `Harga_Laundry` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `laundry`
--

INSERT INTO `laundry` (`Kode_Laundry`, `Nama_Laundry`, `Harga_Laundry`) VALUES
('FL01', 'Paket 0,5 KG', 25000),
('FL02', 'Paket 1 KG', 45000),
('FL03', 'Paket 2 KG', 85000),
('FL05', 'No Laundry', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `id_jurusan` varchar(10) NOT NULL,
  `nama_mahasiswa` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `id_jurusan`, `nama_mahasiswa`, `jk`, `email`, `password`) VALUES
('08011181924010', 'J61', 'Wahyu Wulandari', 'Wanita', '08011181924010@student.unsri.ac.id', 'w4hyu'),
('08011181924016', 'J11', 'Rosita Sinta Dewi', 'Wanita', '08011181924016@student.unsri.ac.id', 's1nt4'),
('08011281924025', 'J32', 'Lauritta Pradyani Wilandika', 'Wanita', '08011281924025@student.unsri.ac.id', 'l4ur1tt4'),
('08011281924027', 'J21', 'Hana Ayudhia', 'Wanita', '08011281924027@student.unsri.ac.id', 'h4n4'),
('08011281924033', 'J31', 'Robby Savalas Saputra', 'Pria', '08011281924033@student.unsri.ac.id', 'r0bby'),
('08011281924049', 'J11', 'Aulia Salsabila', 'Wanita', '08011281924049@student.unsri.ac.id', '4ul14'),
('08011281924050', 'J21', 'Lala Aulia', 'Wanita', '08011281924050@student.unsri.ac.id', 'l4l4'),
('08011281924051', 'J23', 'Nara Arista', 'Wanita', '08011281924051@student.unsri.ac.id', 'n4r4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mengarang`
--

CREATE TABLE `mengarang` (
  `id_buku` varchar(10) NOT NULL,
  `id_pengarang` varchar(10) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mengarang`
--

INSERT INTO `mengarang` (`id_buku`, `id_pengarang`, `nama_pengarang`) VALUES
('B02', 'PG01', 'Tere Liye'),
('B01', 'PG01', 'Ahmad Tohari'),
('B03', 'PG02', 'Dale Vaberg, Edwin J. Purcell, Steven E.Rigdon'),
('B04', 'PG03', 'Anton Rorres'),
('B05', 'PG04', 'Rinaldi Munir '),
('B06', 'PG06', ' Campbell, Reece'),
('B07', 'PG07', 'Ida Bagus Made Artadana, M.Sc.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota`
--

CREATE TABLE `nota` (
  `Kode_Nota` varchar(30) NOT NULL,
  `Tanggal_Pemesanan` date NOT NULL,
  `Tangggal_Masuk` date NOT NULL,
  `Tanggal_Keluar` date NOT NULL,
  `Lama_Inap` varchar(30) NOT NULL,
  `Username_Tamu` varchar(30) NOT NULL,
  `Kode_Cara_Pembayaran` varchar(30) NOT NULL,
  `Biaya_Total` int(30) NOT NULL,
  `Kode_Status_Pmb` varchar(30) NOT NULL,
  `Bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_pinjam` varchar(25) NOT NULL,
  `id_buku` varchar(25) NOT NULL,
  `jumlah_pinjam` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`no_pinjam`, `id_buku`, `jumlah_pinjam`) VALUES
('NP001', 'B03', '1'),
('NP001', 'B01', '1'),
('NP002', 'B02', '1'),
('NP002', 'B04', '1'),
('NP003', 'B06', '2'),
('NP004', 'B02', '1'),
('NP005', 'B07', '1'),
('NP005', 'B05', '1'),
('NP006', 'B04', '1'),
('NP006', 'B06', '1'),
('NP007', 'B04', '1'),
('NP008', 'B05', '1'),
('NP009', 'B01', '1'),
('NP009', 'B06', '1'),
('NP010', 'B04', '1'),
('NP011', 'B03', '1'),
('NP011', 'B02', '1'),
('NP012', 'B02', '1'),
('NP012', 'B04', '1'),
('NP013', 'B05', '1'),
('NP014', 'B03', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` varchar(10) NOT NULL,
  `nama_penerbit` varchar(30) NOT NULL,
  `alamat_penerbit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `alamat_penerbit`) VALUES
('PN01', 'Gramedia Pustaka', 'Jakarta'),
('PN02', 'Republika', 'Jakarta'),
('PN03', 'Erlangga', 'Jakarta'),
('PN04', 'Informatika', 'Bandung'),
('PN05', 'Graha Ilmu', 'Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengarang`
--

CREATE TABLE `pengarang` (
  `id_pengarang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengarang`
--

INSERT INTO `pengarang` (`id_pengarang`) VALUES
('PG01'),
('PG02'),
('PG03'),
('PG04'),
('PG05'),
('PG06'),
('PG07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyewa`
--

CREATE TABLE `penyewa` (
  `Username_Tamu` varchar(30) NOT NULL,
  `Nama_Penyewa` varchar(40) NOT NULL,
  `JK` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penyewa`
--

INSERT INTO `penyewa` (`Username_Tamu`, `Nama_Penyewa`, `JK`, `Email`, `Password`) VALUES
('mortara', 'Alda', 'Wanita', 'alda@gmail.com', 'alda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rak`
--

CREATE TABLE `rak` (
  `id_rak` varchar(10) NOT NULL,
  `id_blok` varchar(10) NOT NULL,
  `nama_rak` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rak`
--

INSERT INTO `rak` (`id_rak`, `id_blok`, `nama_rak`) VALUES
('RK11', 'B11', 'Lantai 1 Ruang 1 Blok A Rak 1A'),
('RK12', 'B11', 'Lantai 1 Ruang 1 Blok A Rak 2A'),
('RK13', 'B11', 'Lantai 1 Ruang 1 Blok A Rak 3A'),
('RK14', 'B11', 'Lantai 1 Ruang 1 Blok A Rak 4A'),
('RK21', 'B12', 'Lantai 1 Ruang 1 Blok A Rak 1B'),
('RK22', 'B12', 'Lantai 1 Ruang 1 Blok A Rak 2B'),
('RK23', 'B12', 'Lantai 1 Ruang 1 Blok A Rak 3B'),
('RK24', 'B12', 'Lantai 1 Ruang 1 Blok A Rak 4B'),
('RK31', 'B13', 'Lantai 1 Ruang 1 Blok A Rak 1C'),
('RK32', 'B13', 'Lantai 1 Ruang 1 Blok A Rak 2C'),
('RK33', 'B13', 'Lantai 1 Ruang 1 Blok A Rak 3C'),
('RK34', 'B13', 'Lantai 1 Ruang 1 Blok A Rak 4C'),
('RK41', 'B14', 'Lantai 1 Ruang 1 Blok A Rak 1D'),
('RK42', 'B14', 'Lantai 1 Ruang 1 Blok A Rak 2D'),
('RK43', 'B14', 'Lantai 1 Ruang 1 Blok A Rak 3D'),
('RK44', 'B14', 'Lantai 1 Ruang 1 Blok A Rak 4D');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` varchar(10) NOT NULL,
  `id_lantai` varchar(10) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `id_lantai`, `nama_ruang`) VALUES
('R01', 'L01', 'Lantai 1 Ruang 1'),
('R02', 'L01', 'Lantai 1 Ruang 2'),
('R03', 'L02', 'Lantai 2 Ruang 3'),
('R04', 'L02', 'Lantai 2 Ruang 4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rumah_mitra`
--

CREATE TABLE `rumah_mitra` (
  `Kode_Rumah` varchar(30) NOT NULL,
  `Nama_Rumah` varchar(30) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `Id_Kecamatan` varchar(30) NOT NULL,
  `Kode_Jenis_Rumah` varchar(30) NOT NULL,
  `Kode_Interior` varchar(30) NOT NULL,
  `Kode_View` varchar(30) NOT NULL,
  `Harga` int(30) NOT NULL,
  `Foto_Rumah` varchar(100) NOT NULL,
  `Kode_Status_Rumah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `rumah_mitra`
--

INSERT INTO `rumah_mitra` (`Kode_Rumah`, `Nama_Rumah`, `Alamat`, `Id_Kecamatan`, `Kode_Jenis_Rumah`, `Kode_Interior`, `Kode_View`, `Harga`, `Foto_Rumah`, `Kode_Status_Rumah`) VALUES
('RM01', 'Penginapan Alin', 'Dempo Utara', 'KC02', 'JR02', 'JI02', 'JV05', 120000, 'l1e.jpg', 'SR02'),
('RM02', 'Penginapan Sabda', 'Dempo Selatan', 'KC01', 'JR01', 'JI05', 'JV01', 150000, 'l1f.jpg', 'SR02'),
('RM03', 'Penginapan Z&Z', 'Pagar Alam Utara', 'KC04', 'JR02', 'JI06', 'JV03', 115000, 'l1g.jpg', 'SR02'),
('RM04', 'Penginapan Durga', 'Dempo Utara', 'KC02', 'JR03', 'JI01', 'JV02', 220000, 'l2f.jpg', 'SR02'),
('RM05', 'Penginapan 77', 'Pagar Alam Selatan', 'KC03', 'JR03', 'JI03', 'JV04', 200000, 'l2g.jpg', 'SR02'),
('RM06', 'Penginapan Mitta', 'Dempo Tengah', 'KC05', 'JR04', 'JI04', 'JV04', 300000, 'l2a.jpg', 'SR02'),
('RM07', 'Penginapan Moz', 'Pagar Alam Selatan', 'KC03', 'JR01', 'JI02', 'JV03', 175000, 'LL.jpg', 'SR02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `id_status` varchar(10) NOT NULL,
  `nama_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`id_status`, `nama_status`) VALUES
('S01', 'Belum Diambil'),
('S02', 'Dipinjam'),
('S03', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pmb`
--

CREATE TABLE `status_pmb` (
  `Kode_Status_Pmb` varchar(30) NOT NULL,
  `Nama_Status_Pmb` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_pmb`
--

INSERT INTO `status_pmb` (`Kode_Status_Pmb`, `Nama_Status_Pmb`) VALUES
('SP01', 'Sudah Bayar'),
('SP02', 'Belum Bayar'),
('SP03', 'Selesai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_rumah`
--

CREATE TABLE `status_rumah` (
  `Kode_Status_Rumah` varchar(30) NOT NULL,
  `Nama_Status_Rumah` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `status_rumah`
--

INSERT INTO `status_rumah` (`Kode_Status_Rumah`, `Nama_Status_Rumah`) VALUES
('SR01', 'DITEMPATI'),
('SR02', 'TERSEDIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tingkat`
--

CREATE TABLE `tingkat` (
  `id_tingkat` varchar(10) NOT NULL,
  `id_rak` varchar(10) NOT NULL,
  `nama_tingkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tingkat`
--

INSERT INTO `tingkat` (`id_tingkat`, `id_rak`, `nama_tingkat`) VALUES
('T11', 'RK11', 'Lantai 1 Ruang 1 Blok A Rak 1A Tingkat 1'),
('T12', 'RK11', 'Lantai 1 Ruang 1 Blok A Rak 1A Tingkat 2'),
('T13', 'RK11', 'Lantai 1 Ruang 1 Blok A Rak 1A Tingkat 3'),
('T14', 'RK11', 'Lantai 1 Ruang 1 Blok A Rak 1A Tingkat 4'),
('T15', 'RK11', 'Lantai 1 Ruang 1 Blok A Rak 1A Tingkat 5'),
('T21', 'RK12', 'Lantai 1 Ruang 1 Blok A Rak 2A Tingkat 1'),
('T22', 'RK12', 'Lantai 1 Ruang 1 Blok A Rak 2A Tingkat 2'),
('T23', 'RK12', 'Lantai 1 Ruang 1 Blok A Rak 2A Tingkat 3'),
('T24', 'RK12', 'Lantai 1 Ruang 1 Blok A Rak 2A Tingkat 4'),
('T25', 'RK12', 'Lantai 1 Ruang 1 Blok A Rak 2A Tingkat 5');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_rns`
--

CREATE TABLE `transaksi_rns` (
  `Kode_Nota` varchar(30) NOT NULL,
  `Kode_Rumah` varchar(30) NOT NULL,
  `Kode_Breakfast` varchar(30) NOT NULL,
  `Kode_Extrabed` varchar(30) NOT NULL,
  `Kode_Laundry` varchar(30) NOT NULL,
  `Sub_Total` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `blok`
--
ALTER TABLE `blok`
  ADD PRIMARY KEY (`id_blok`),
  ADD KEY `id_ruang` (`id_ruang`);

--
-- Indeks untuk tabel `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`Kode_Breakfast`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_kelompok` (`id_kelompok`,`id_penerbit`,`id_tingkat`),
  ADD KEY `buku_ibfk_2` (`id_penerbit`),
  ADD KEY `buku_ibfk_3` (`id_tingkat`);

--
-- Indeks untuk tabel `cara_pmb`
--
ALTER TABLE `cara_pmb`
  ADD PRIMARY KEY (`Kode_Cara_Pembayaran`),
  ADD KEY `Kode_Jenis_Pembayaran_2` (`Kode_Jenis_Pembayaran`);

--
-- Indeks untuk tabel `extrabed`
--
ALTER TABLE `extrabed`
  ADD PRIMARY KEY (`Kode_Extrabed`);

--
-- Indeks untuk tabel `faktur_peminjaman`
--
ALTER TABLE `faktur_peminjaman`
  ADD PRIMARY KEY (`no_pinjam`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_status` (`id_status`);

--
-- Indeks untuk tabel `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indeks untuk tabel `jenis_buku`
--
ALTER TABLE `jenis_buku`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `jenis_interior`
--
ALTER TABLE `jenis_interior`
  ADD PRIMARY KEY (`Kode_Interior`);

--
-- Indeks untuk tabel `jenis_pmb`
--
ALTER TABLE `jenis_pmb`
  ADD PRIMARY KEY (`Kode_Jenis_Pembayaran`);

--
-- Indeks untuk tabel `jenis_rumah`
--
ALTER TABLE `jenis_rumah`
  ADD PRIMARY KEY (`Kode_Jenis_Rumah`);

--
-- Indeks untuk tabel `jenis_view`
--
ALTER TABLE `jenis_view`
  ADD PRIMARY KEY (`Kode_View`);

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `id_fakultas` (`id_fakultas`) USING BTREE;

--
-- Indeks untuk tabel `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`Id_Kecamatan`);

--
-- Indeks untuk tabel `kelompok_buku`
--
ALTER TABLE `kelompok_buku`
  ADD PRIMARY KEY (`id_kelompok`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `lantai`
--
ALTER TABLE `lantai`
  ADD PRIMARY KEY (`id_lantai`);

--
-- Indeks untuk tabel `laundry`
--
ALTER TABLE `laundry`
  ADD PRIMARY KEY (`Kode_Laundry`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indeks untuk tabel `mengarang`
--
ALTER TABLE `mengarang`
  ADD KEY `id_buku` (`id_buku`,`id_pengarang`),
  ADD KEY `mengarang_ibfk_2` (`id_pengarang`);

--
-- Indeks untuk tabel `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`Kode_Nota`),
  ADD KEY `Kode_Cara_Pembayaran` (`Kode_Cara_Pembayaran`),
  ADD KEY `Kode_Status_Pmb` (`Kode_Status_Pmb`),
  ADD KEY `Username_Tamu` (`Username_Tamu`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD KEY `no_pinjam` (`no_pinjam`,`id_buku`),
  ADD KEY `peminjaman_ibfk_2` (`id_buku`);

--
-- Indeks untuk tabel `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`id_pengarang`);

--
-- Indeks untuk tabel `penyewa`
--
ALTER TABLE `penyewa`
  ADD PRIMARY KEY (`Username_Tamu`);

--
-- Indeks untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`),
  ADD KEY `id_blok` (`id_blok`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`),
  ADD KEY `id_lantai` (`id_lantai`);

--
-- Indeks untuk tabel `rumah_mitra`
--
ALTER TABLE `rumah_mitra`
  ADD PRIMARY KEY (`Kode_Rumah`),
  ADD KEY `Id_Kecamatan` (`Id_Kecamatan`),
  ADD KEY `Kode_Jenis_Rumah` (`Kode_Jenis_Rumah`),
  ADD KEY `Kode_Interior` (`Kode_Interior`),
  ADD KEY `Kode_View` (`Kode_View`),
  ADD KEY `Kode_Status_Rumah` (`Kode_Status_Rumah`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `status_pmb`
--
ALTER TABLE `status_pmb`
  ADD PRIMARY KEY (`Kode_Status_Pmb`);

--
-- Indeks untuk tabel `status_rumah`
--
ALTER TABLE `status_rumah`
  ADD PRIMARY KEY (`Kode_Status_Rumah`);

--
-- Indeks untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  ADD PRIMARY KEY (`id_tingkat`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blok`
--
ALTER TABLE `blok`
  ADD CONSTRAINT `blok_ibfk_1` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_kelompok`) REFERENCES `kelompok_buku` (`id_kelompok`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buku_ibfk_3` FOREIGN KEY (`id_tingkat`) REFERENCES `tingkat` (`id_tingkat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `faktur_peminjaman`
--
ALTER TABLE `faktur_peminjaman`
  ADD CONSTRAINT `faktur_peminjaman_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faktur_peminjaman_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelompok_buku`
--
ALTER TABLE `kelompok_buku`
  ADD CONSTRAINT `kelompok_buku_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_buku` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `jurusan` (`id_jurusan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `mengarang`
--
ALTER TABLE `mengarang`
  ADD CONSTRAINT `mengarang_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mengarang_ibfk_2` FOREIGN KEY (`id_pengarang`) REFERENCES `pengarang` (`id_pengarang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`no_pinjam`) REFERENCES `faktur_peminjaman` (`no_pinjam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rak`
--
ALTER TABLE `rak`
  ADD CONSTRAINT `rak_ibfk_1` FOREIGN KEY (`id_blok`) REFERENCES `blok` (`id_blok`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD CONSTRAINT `ruang_ibfk_1` FOREIGN KEY (`id_lantai`) REFERENCES `lantai` (`id_lantai`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tingkat`
--
ALTER TABLE `tingkat`
  ADD CONSTRAINT `tingkat_ibfk_1` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id_rak`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
