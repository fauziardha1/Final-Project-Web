-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Des 2019 pada 15.59
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
  `keterangan` text NOT NULL,
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
(4, 'Casio G-shock DW-5700BBM-2DR Special Color Models Man Digital Dial Blue Resin Strap ', 'Koleksi lawas dan merupakan salah satu varian langka dari G-Shock, ialah DW-5600. Jam tangan legendaris ini terlahir kembali dengan kualitas yang tidak berkurang sama sekali dari pertama kali jam ini dibuat (1983). Jam yang terkenal karena kekuatannya ini sangat diburu oleh para kolektor jam tangan. Jamtangan.com hadir menyediakan puluhan koleksi jam tangan DW-5600 terlengkap. Desainnya yang sangat ikonik, kotak dan simple yang menjadi ciri khas dari koleksi terfavorit jam tangan G-Shock ini. Desain yang simple dengan dimensi yang tidak besar, rasanya sangat padu dan fit Anda gunakan dalam aktifitas sehari-hari. Saat ini DW-5600 tersedia dengan berbagai varian warna dan warna hitam tetap menjadi yang terfavorit. Material resin yang menjadi andalan pada koleksi ini juga dirancang memiliki daya tahan dan cengkraman yang kuat pada pergelangan tangan. Fitur utama dan unggulan dari jam tangan ini ialah shock resistant serta ketahanan terhadap air hingga kedalaman 200 meter. Membuat Anda tidak perlu khawatir memakainya kemanapun Anda pergi. Dapur pacu pada jam ini menggunakan Quartz movement dengan tingkat akurasi -+ 15 detik per bulan dan ketahanan tenaga battery hingga 2 tahun. DW-5600 juga dilengkapi oleh fitur standard dari G-Shock seperti, alarm, stopwatch, full auto-calendar serta dilindungi garansi Mactwatch selama 2 tahun.', 'Pria', 'Jam', 190000, 10, 'jam-tangan-1.jpg'),
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
(18, 'Topi Coklat', 'Melindungi kepala dari sinar matahari', 'Anak', 'Topi', 76000, 50, 'topi-1.jpg'),
(19, 'Jam Tangan Pria Casio G-Shock G-Steel GST-S330D-1ADR Black Digital Analog Dial Stainless Steel Strap', 'Ketika gaya memenuhi fungsi, Koleksi G-STEELS menggabungkan material berkualitas tinggi dengan teknologi andal dari model G-SHOCK yang telah terbukti. Desain \"multi-lapis\" memberi jam tangan perlindungan hingga kedalam mesin jam. Resin hibrida dan baja tahan karat yang kuat digabungkan menjadi kombinasi yang tidak bisa dipecahkan. Ini memberikan tampilan jam tangan premium yang khas dan ketahanan pada saat yang bersamaan. G-Steel dibuat untuk anda pria aktif yang mencari jam tangan yang mempunyai tampilan dan teknologi khas dari G-shock dengan desain jam tangan metal. Ramping, dipoles dan anti karat memberikan casing G-Steel anti gores dan perlindungan yang kuat. Dengan ketahanan air hingga 200 meter dan panel surya yang dapat mengubah cahaya matahari bahkan penerangan yang lemah sekalipun menjadi tenaga listrik. Baterai dapat diisi ulang dengan kapasitas penyimpanan daya yang besar dan mendukung operasi yang stabil dari berbagai fungsi dan fitur jam tangan ini. G-Steel memiliki gaya kasual dan formal yang cocok untuk dipakai dalam keseharian anda.', 'Pria', 'Jam', 190000, 10, 'jam-tangan-2.jpg'),
(20, 'Casio G-shock DW-5700BBM-2DR Special Color Models Man Digital Dial Blue Resin Strap ', 'Koleksi lawas dan merupakan salah satu varian langka dari G-Shock, ialah DW-5600. Jam tangan legendaris ini terlahir kembali dengan kualitas yang tidak berkurang sama sekali dari pertama kali jam ini dibuat (1983). Jam yang terkenal karena kekuatannya ini sangat diburu oleh para kolektor jam tangan. Jamtangan.com hadir menyediakan puluhan koleksi jam tangan DW-5600 terlengkap. Desainnya yang sangat ikonik, kotak dan simple yang menjadi ciri khas dari koleksi terfavorit jam tangan G-Shock ini. Desain yang simple dengan dimensi yang tidak besar, rasanya sangat padu dan fit Anda gunakan dalam aktifitas sehari-hari. Saat ini DW-5600 tersedia dengan berbagai varian warna dan warna hitam tetap menjadi yang terfavorit. Material resin yang menjadi andalan pada koleksi ini juga dirancang memiliki daya tahan dan cengkraman yang kuat pada pergelangan tangan. Fitur utama dan unggulan dari jam tangan ini ialah shock resistant serta ketahanan terhadap air hingga kedalaman 200 meter. Membuat Anda tidak perlu khawatir memakainya kemanapun Anda pergi. Dapur pacu pada jam ini menggunakan Quartz movement dengan tingkat akurasi -+ 15 detik per bulan dan ketahanan tenaga battery hingga 2 tahun. DW-5600 juga dilengkapi oleh fitur standard dari G-Shock seperti, alarm, stopwatch, full auto-calendar serta dilindungi garansi Mactwatch selama 2 tahun.', 'Pria', 'Jam', 190000, 10, 'jam-tangan-3.jpg'),
(21, 'Casio Standard MQ-24-7BLL Men White Dial Black Rubber Strap', 'Koleksi klasik dari casio yang menyediakan jam tangan multifungsi untuk semua kalangan dari muda hingga tua. Beragam variasi model jam tangan dari analog, digital dan kombinasi keduanya. Beragam fitur dan style juga hadir dikoleksi ini mulai dari gaya vintage, casual, sporty, formal atau trend saat ini. Dengan ketahanan yang sudah teruji dan inovasi digital yang semakin maju Casio terus konsisten menciptakan jam tangan yang memenuhi kriteria semua kalangan. Casio standard cocok dipakai untuk menemani segala aktifitas baik di dalam maupun di luar ruangan. Koleksi Casio Standard merupakan salah satu koleksi terlaris dari casio. Casio didirikan pada tahun 1946 di Mitaka, Tokyo - Jepang oleh Tadao Kashio seorang insinyur teknologi fabrikasi. Berawal dari memproduksi kalkulator elektronik pertama di dunia pada tahun 1957 menandai awal berdirinya Casio Computer CO. Ltd. Casio adalah salah satu perusahan raksasa elektronik Jepang terbesar yang memproduksi kalkulator, komputer, kamera, Instrument musik dan jam tangan. Casio merilis jam tangan quartz analog pertamanya ditahun 1982, mulai dikenal luas di Industri jam tangan lewat produk ikoniknya yaitu G-Shock DW-500C, jam tangan pertama didunia yang didesain tahan terhadap guncangan atau benturan.', 'Pria', 'Jam', 190000, 10, 'jam-tangan-4.jpg'),
(22, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-5.jpg'),
(24, 'Alexandre Christie AC 6542 MF BRGSL Men Silver Dial Rose Gold Mesh Strap', 'Memiliki sejarah lebih dari setengah abad dalam desain dan memproduksi jam tangan berkualitas, Alexandre Christie menciptakan esensi dalam desain yang berkarakter kuat dan seni dalam pembuatan jam tangan (the art of watch making). Sebuah tim desain berintegeritas tinggi bekerja dengan serius bersama teknisi manufaktur untuk memastikan keakuratan kualitas dan interpretasi desain hingga setiap bagian dari produk jam tangan Alexandre Christie; mewujudkan mimpi/keinginan menjadi nyata melalui art of watch making. Semua produk jam tangan Alexandre Christie diproduksi dari bahan stainless steel berkualitas tinggi pilihan. Dengan “stringent testing,” setiap bagian dari jam tangan Alexandre Christie dapat tahan meski digunakan setiap hari. Alexandre Christie, passionate dreams come true', 'Pria', 'Jam', 190000, 10, 'jam-tangan-7.jpg'),
(25, 'Alexandre Christie AC 6542 MF BBRBA Men Black Dial Black Mesh Strap', 'Memiliki sejarah lebih dari setengah abad dalam desain dan memproduksi jam tangan berkualitas, Alexandre Christie menciptakan esensi dalam desain yang berkarakter kuat dan seni dalam pembuatan jam tangan (the art of watch making). Sebuah tim desain berintegeritas tinggi bekerja dengan serius bersama teknisi manufaktur untuk memastikan keakuratan kualitas dan interpretasi desain hingga setiap bagian dari produk jam tangan Alexandre Christie; mewujudkan mimpi/keinginan menjadi nyata melalui art of watch making. Semua produk jam tangan Alexandre Christie diproduksi dari bahan stainless steel berkualitas tinggi pilihan. Dengan “stringent testing,” setiap bagian dari jam tangan Alexandre Christie dapat tahan meski digunakan setiap hari. Alexandre Christie, passionate dreams come true', 'Pria', 'Jam', 190000, 10, 'jam-tangan-8.jpg'),
(26, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-9.jpg'),
(27, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-10.jpg'),
(28, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-11.jpg'),
(29, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-12.jpg'),
(30, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-13.jpg'),
(31, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-14.jpg'),
(32, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-15.jpg'),
(33, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-16.jpg'),
(34, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-17.jpg'),
(35, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-18.jpg'),
(36, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-19.jpg'),
(37, 'Jam Tangan Iluminator', 'Jam tangan ini tahan air', 'Pria', 'Jam', 190000, 10, 'jam-tangan-20.jpg'),
(38, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-2.jpg'),
(39, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-3.jpg'),
(40, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-4.jpg'),
(41, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-5.jpg'),
(42, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-6.jpg'),
(43, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-7.jpg'),
(45, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-9.jpg'),
(46, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-10.jpg'),
(51, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-11.jpg'),
(52, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-12.jpg'),
(53, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-13.jpg'),
(54, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-14.jpg'),
(55, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-15.jpg'),
(56, 'Kaos Polo Bergaris ', 'Baju ini menggunakan bahan katun yang nyaman digunakan saat hangout maupun di rumah', 'Pria', 'Baju', 247000, 30, 'baju-16.jpg'),
(57, 'Jfashion Daniel Kid\'s Basic Joger Pants', 'Celana berwarna navy ini cocok untuk anak melakukan olahraga', 'Anak', 'Celana', 50000, 30, 'celana-2.jpg'),
(58, '	\r\nVeylkids Kyra Pants Celana Anak', 'Celana Panjang Warna Krem', 'Anak', 'Celana', 134000, 35, 'celana-3.jpg'),
(59, '	\r\nVeylkids Holla Celana Anak', 'Celana anak yang nyaman digunakan di luar', 'Anak', 'Celana', 275000, 24, 'celana-4.jpg'),
(60, '	HM Legging Frozen Celana Anak', 'Frozen 2 Elsa', 'Anak', 'Celana', 60000, 24, 'celana-5.jpg'),
(61, '	VERINA BABY Erson Celana Anak', 'Celana Anak warna bitu', 'Anak', 'Celana', 130500, 24, 'celana-6.jpg'),
(62, '	Veylkids Alu Pants Celana Anak - Grey', 'Celana panjang berwarna abu-abu', 'Anak', 'Celana', 185000, 24, 'celana-7.jpg'),
(63, '	Veylkids Daisea Pants Celana Anak - Brown', 'Celana panjang berwarna coklat', 'Anak', 'Celana', 215000, 24, 'celana-8.jpg'),
(64, '	Veylkids Ave Pants Celana Anak - Black', 'Celana hitam anak. Celana ini sangat nyaman digunakan dan bahannya kuat untuk dipakai terus menerus', 'Anak', 'Celana', 185000, 24, 'celana-9.jpg'),
(65, '	Little Superstar Noel Pants Rainbow Celana Anak', 'Celana pendek ini nyaman digunakan untuk tidur maupun bermain', 'Anak', 'Celana', 195000, 29, 'celana-10.jpg'),
(66, '	Veylkids Magi Pants Stripes Celana Anak Perempuan', 'Celana ini nyaman digunakan', 'Anak', 'Celana', 145000, 48, 'celana-11.jpg'),
(67, 'Lumik Arrow Legging Celana Anak Laki', 'Celana ini nyaman digunakan', 'Anak', 'Celana', 50000, 24, 'celana-12.jpg'),
(68, 'PURPLEJADE ZR Hooded Parka Jacket Wanita - Olivegreen', 'Jaket ini cocok untuk tren fashion wanitamasa kini. Jaket ini terbuat dari bahan pilihan yang nyaman digunakan dan awet saat digunakan.Jaket ini cocok untuk pergi ke mall atau jalan_jalan di ruang terbuka.', 'Wanita', 'Jaket', 351000, 40, 'jaket-2.jpg'),
(69, '3 Second Ladies 7510 175101525 Jacket Wanita - Pink', 'Jaket pink ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 220000, 43, 'jaket-3.jpg'),
(70, 'VORDAVO Blackwidow Jacket Wanita', 'Jaket pink ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 103000, 43, 'jaket-4.jpg'),
(71, 'VORDAVO Jacket Wanita', 'Jaket hitam formal', 'Wanita', 'Jaket', 112000, 48, 'jaket-5.jpg'),
(72, 'MECCANISM Emery Jacket Wanita', 'Jaket ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 113000, 48, 'jaket-6.jpg'),
(73, 'Champion Hoodie Graphic Jacket Wanita', 'Jaket abu-abu ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 220000, 43, 'jaket-7.jpg'),
(74, '	Sognoleather sdn995 Jacket Wanita', 'Jaket motor ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 228000, 43, 'jaket-8.jpg'),
(75, 'Banana Warehouse 929 Jacket Wanita', 'Jaket denim ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 75000, 43, 'jaket-9.jpg'),
(76, 'Tiffany Kenanga Fihara Jacket Wanita', 'Jaket ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 311500, 43, 'jaket-10.jpg'),
(77, 'WASTU Soft Parka Jacket Wanita', 'Jaket putih ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 759000, 39, 'jaket-11.jpg'),
(78, 'Rimas Alina Jacket Hoodie Wanita', 'Jaket ini cocok untuk hang out, sangat kekinian', 'Wanita', 'Jaket', 83000, 43, 'jaket-12.jpg');

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
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
