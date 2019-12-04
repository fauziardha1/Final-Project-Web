-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Des 2019 pada 17.11
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
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `no_telp`, `alamat`) VALUES
(10, 'Nurul Afifah', '0898567567', '123123123dvvdfvfv'),
(11, 'Nurul Afifah', '0898567567', '123123123dvvdfvfv'),
(12, ',vjhvh', '54557', 'hbyjnkm;jil'),
(13, 'vdagd', '45454545', 'jncha  sabukab bxd kxcbasukk'),
(14, 'vdagd', '45454545', 'jncha  sabukab bxd kxcbasukk'),
(15, 'vdagd', '45454545', 'jncha  sabukab bxd kxcbasukk'),
(16, 'vdagd', '45454545', 'jncha  sabukab bxd kxcbasukk'),
(17, 'vdagd', '45454545', 'jncha  sabukab bxd kxcbasukk'),
(18, 'hhdah', '5828400hdaw', 'udxhaudb duuisahdo'),
(19, 'hhdahjkwfdu', '5828400hdaw34', 'udxhaudb duuisahdo fsfvdv'),
(20, 'feesg', '4343543', 'fdv xdvdf'),
(21, 'feesg', '4343543', 'fdv xdvdf'),
(22, 'feesg', '4343543', 'fdv xdvdf'),
(23, 'feesgfkasdjf', '759283569832457', 'fdv xdvdf'),
(24, 'feesgfkasdjf', '759283569832457', 'fdv xdvdf'),
(25, 'fifah', '87878983567589', 'fdv xdvdfdfjalkfjdalkdjflakjfdlaksjdf'),
(26, 'kdfjalkfjalkdfjfifah', '878789835675897', 'fdv xdvdfdfjalkdfjalksdfkfjdalkdjflakjfdlaksjdf'),
(27, 'kdfjalkfjalkdfjfifah', '878789835675897', 'fdv xdvdfdfjalkdfjalksdfkfjdalkdjflakjfdlaksjdf'),
(28, 'kdfjalkfjalkdfjfifah', '878789835675897', 'fdv xdvdfdfjalkdfjalksdfkfjdalkdjflakjfdlaksjdf'),
(29, 'kdfjalkfjalkdfjfifah', '878789835675897', 'fdv xdvdfdfjalkdfjalksdfkfjdalkdjflakjfdlaksjdf'),
(30, 'kfalj', '9835729387', 'khgasjghakdjgklafjdjka'),
(31, 'lfdakljfflkklfjd', '349872394863290', 'kdfgslgsdlkdfjgslfgskmfnsjfgnsokfgj'),
(32, 'lfdakljfflkklfjd', '349872394863290', 'kdfgslgsdlkdfjgslfgskmfnsjfgnsokfgj'),
(33, 'lfdakljfflkklfjd', '349872394863290', 'kdfgslgsdlkdfjgslfgskmfnsjfgnsokfgj'),
(34, 'lfdakljfflkklfjdi9u', '349872394863290', 'kdfgslgsdlkdfjgslfgskmfnsjfgnsokfgj'),
(35, 'ijiji', '786878', 'iu98u98yhi9'),
(36, 'ijijijijiji', '9809', '78978ojiij'),
(37, 'ijijijijiji', '9809', '78978ojiij'),
(38, 'hjbcs', '1224468', 'jkcks uckubaiusd'),
(39, 'jhbjhwd', '78809', 'njknkadbabd dkjabdk'),
(40, 'jhbjhwd', '78809', 'njknkadbabd dkjabdk'),
(41, 'Nurul Afifah', '3546547', 'bdkawdbka'),
(42, 'fsfsdgd', '354645713', 'jgcvbskz kbcukzsbck'),
(43, '', '', ' fbjkdwabf  ufhesoifl'),
(44, 'bdskaf', '427934972', 'fkhbaukdbal'),
(45, 'bdskaf', '427934972', 'fkhbaukdbal'),
(46, 'gjvj', '55699', 'hvjkk jbgkug'),
(47, 'gjvj', '55699', 'hvjkk jbgkug'),
(48, 'gjvj', '55699', 'hvjkk jbgkug'),
(49, 'hbks', '5687809', 'jnxklsnx  xajksgduxka  sckuhaoiscn;a');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
