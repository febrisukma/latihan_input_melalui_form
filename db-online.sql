-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 05 Jul 2017 pada 15.58
-- Versi Server: 5.5.25a
-- Versi PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db-online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `provinsi` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `komentar` longtext NOT NULL,
  `img` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `alamat`, `kota`, `provinsi`, `email`, `komentar`, `img`) VALUES
(1, 'febri sukmawati', 'Patean', 'Kendal', 'Jawa tengah', 'sukma@gmail.com', 'Sedang Belajar Pemrograman Web Dasar', '13.jpg'),
(2, 'Bunga Citra', 'Bandung', 'Bandung', 'Jawa Barat', 'bunga@gmail.com', ' Sedang Belajar Pemrograman Web Dasar', '21.jpg'),
(3, 'Rahardian', 'Cimahi', 'Cimahi', 'Jawa Barat', 'rahardian@gmail.com', ' Sedang Belajar Pemrograman Web Dasar', '22.jpg'),
(4, 'Laura', 'Magelang', 'Magelang', 'Jawa Tengah', 'laura@yahoo.co.id', ' Sedang Belajar Pemrograman Web Dasar', '25.jpg'),
(5, 'Laudya Bela', 'Sukabumi', 'Sukabumi', 'Jawa Barat', 'laudya@gmail.com', '  Sedang Belajar Pemrograman Web Dasar', '27.jpg'),
(6, 'Ayunda', 'Bandung', 'Bandung', 'Jawa Barat', 'ayunda12@yahoo.com', ' Sedang Belajar Pemrograman Web Dasar', '31.jpg'),
(7, 'Abimanyu', 'Yogyakarta', 'Yogyakarta', 'Yogyakarta', 'abi652@yahoo.co.id', ' Sedang Belajar Pemrograman Web Dasar', '32.jpg'),
(8, 'Ivander', 'Salatiga', 'Salatiga', 'Jawa Tengah', 'ivander@gmail.com', ' Sedang Belajar Pemrograman Web Dasar', '33.jpg'),
(9, 'Purnomo', 'Cilacap', 'Cilacap', 'Jawa Tengah', 'purno@yahoo.co.id', ' Sedang Belajar Pemrograman Web Dasar', '34.jpg'),
(10, 'Joshua', 'Jakarta', 'Jakarta', 'Jawa Barat', 'jojo21@gmail.com', ' Sedang Belajar Pemrograman Web Dasar', '36.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
