-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jul 2022 pada 10.59
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gc`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `gambar` text NOT NULL,
  `tombol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `harga_produk`, `nama_produk`, `keterangan`, `gambar`, `tombol`) VALUES
(1, 'Rp 100K', 'Gojo T-shirt', 'Cotton 24s Direct to garment digital printing ( Sablon terbaik ) Satin Label Satin Washcare', '4', 'bajugojo-jjk'),
(2, 'Rp 100K', 'Megumi T-shirt', 'Cotton 24s Direct to garment digital printing ( Sablon terbaik ) Satin Label Satin Washcare', '5', 'bajumegumi-jjk'),
(1, 'Rp 100K', 'Gojo T-shirt', 'Cotton 24s Direct to garment digital printing ( Sablon terbaik ) Satin Label Satin Washcare', '4', 'bajugojo-jjk'),
(2, 'Rp 100K', 'Megumi T-shirt', 'Cotton 24s Direct to garment digital printing ( Sablon terbaik ) Satin Label Satin Washcare', '5', 'bajumegumi-jjk');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
