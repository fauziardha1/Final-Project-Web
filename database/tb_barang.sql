-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2019 pada 06.16
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fashionid`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(120) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kategori` varchar(6) NOT NULL,
  `sub_kategori` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `sub_kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Kemeja Batik Lengan Panjang', 'Kemeja Batik ini dibuat dari bahan katun', 'Pria', 'Baju', 256000, 15, 'baju-1.jpg'),
(2, 'Celana Jeans Hitam', 'Celana ini dibuat dengan bahan pilihan', 'Pria', 'Celana', 320000, 29, 'celana-1.jpg'),
(3, 'Jaket Hitam', 'Jaket ini cocok untuk acara informal', 'Pria', 'Jaket', 329000, 26, 'jaket-1.jpg'),
(4, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-1.jpg'),
(5, 'Sepatu Casual Krim', 'Sepatu ini cocok untuk hangout', 'Pria', 'Sepatu', 320000, 40, 'sepatu-1.jpg'),
(6, 'Topi Hypebest', 'Melindungi kepala dari sinar matahari', 'Pria', 'Topi', 76000, 50, 'topi-1.jpg'),

(7, 'Baju Bergaris', 'Cocok untuk pergi ke Mall', 'Wanita', 'Baju', 76000, 50, 'baju-1.jpg'),
(8, 'Celana Katun', 'Nyaman Digunakan', 'Wanita', 'Celana', 76000, 50, 'celana-1.jpg'),
(9, 'Jaket Denim', 'Cocok untuk berkumpul bersama teman', 'Wanita', 'Jaket', 76000, 50, 'jaket-1.jpg'),
(10, 'Jam Luxury', 'Terlihat Mewah dan elegan', 'Wanita', 'Jam', 76000, 50, 'jam-1.jpg'),
(11, 'Sepatu Cats', 'Cocok untuk bepergian', 'Wanita', 'Sepatu', 76000, 50, 'sepatu-1.jpg'),
(12, 'Topi Merah', 'Melindungi kepala dari sinar matahari', 'Wanita', 'Topi', 76000, 50, 'topi-1.jpg'),

(13, 'Baju Pink musim dingin', 'Terbuat dari katun', 'Anak', 'Baju', 76000, 50, 'baju-1.jpg'),
(14, 'Celana Jeans Mini', 'Nyaman Digunakan', 'Anak', 'Celana', 76000, 50, 'celana-1.jpg'),
(15, 'Jaket Tahan Air', 'Melindungi anak saat cuaca cerah dan hujan', 'Anak', 'Jaket', 76000, 50, 'jaket-1.jpg'),
(16, 'Jam Colorful', 'Jam ini awet', 'Anak', 'Jam', 76000, 50, 'jam-1.jpg'),
(17, 'Sepatu Cats Anak', 'Nyaman diapakai dan barang tidak mudah rusak', 'Anak', 'Sepatu', 76000, 50, 'sepatu-1.jpg'),
(18, 'Topi Coklat', 'Melindungi kepala dari sinar matahari', 'Anak', 'Topi', 76000, 50, 'topi-1.jpg');


--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
