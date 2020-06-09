-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2020 pada 02.36
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmkg`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aekkanopan`
--

CREATE TABLE `aekkanopan` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aekkanopan`
--

INSERT INTO `aekkanopan` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(2, '32 C', 'Cerah', '33 C', 'Cerah Berawan', '29 C', 'Hujan', '29 C', 'Berawan', '5e57dcd6b0d63.png', '5e57dcd6b13fa.png', '5e57dcd6b1c71.png', '5e57dcd6b2139.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `balige`
--

CREATE TABLE `balige` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `batu_bara`
--

CREATE TABLE `batu_bara` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(128) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(128) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `gambar2` varchar(128) NOT NULL,
  `gambar3` varchar(128) NOT NULL,
  `gambar4` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `batu_bara`
--

INSERT INTO `batu_bara` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '22 C', 'Cerah', '30 C', 'Cerah berawan', '30 C', 'Berawan', '29 C', 'Hujan', '5e4df6c20d537.png', '5e4df6c20da94.png', '5e4df6c20e0c4.png', '5e4df6c20e740.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `binjai`
--

CREATE TABLE `binjai` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `doloksanggul`
--

CREATE TABLE `doloksanggul` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gido`
--

CREATE TABLE `gido` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gido`
--

INSERT INTO `gido` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '30 C', 'Berawan', '30 C', 'Cerah', '33 C', 'Hujan', '30 C', 'Berawan', '5e520c547ca65.png', '5e520c547cfae.png', '5e520c547d62e.png', '5e520c547db00.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gunungsitoli`
--

CREATE TABLE `gunungsitoli` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gunungtua`
--

CREATE TABLE `gunungtua` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabanjahe`
--

CREATE TABLE `kabanjahe` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kisaran`
--

CREATE TABLE `kisaran` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(128) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(128) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `gambar2` varchar(128) NOT NULL,
  `gambar3` varchar(128) NOT NULL,
  `gambar4` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kisaran`
--

INSERT INTO `kisaran` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '32 c', 'Cerah', '30 c', 'Berawan', '33 C', 'Cerah berawan', '30 C', 'Berawan', '5e68741f804d2.png', '5e68741f80b5a.png', '5e68741f811aa.png', '5e68741f81775.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kotapinang`
--

CREATE TABLE `kotapinang` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kotapinang`
--

INSERT INTO `kotapinang` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '29 C', 'Berawan', '30 C', 'Berawan', '32 C', 'Hujan', '30 C', 'Hujan deras', '5e4ffcd772521.png', '5e4ffcd772a7a.png', '5e4ffcd773058.png', '5e4ffcd773505.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lahomi`
--

CREATE TABLE `lahomi` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lahomi`
--

INSERT INTO `lahomi` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(0, '30 C', 'Cerah', '32 C', 'Berawan', '33 C', 'Cerah berawan', '29 C', 'Berawan', '5e52153446a33.png', '5e52153446e22.png', '5e52153447292.png', '5e52153447608.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lotu`
--

CREATE TABLE `lotu` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lotu`
--

INSERT INTO `lotu` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '30 C', 'Berawan', '29 C', 'Cerah', '33 C', 'Cerah', '32 C', 'Cerah berawan', '5e534317d9b2f.png', '5e534317dd57b.png', '5e534317de1b4.png', '5e534317deb13.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lubukpakam`
--

CREATE TABLE `lubukpakam` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(128) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(128) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `gambar2` varchar(128) NOT NULL,
  `gambar3` varchar(128) NOT NULL,
  `gambar4` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `medan`
--

CREATE TABLE `medan` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(128) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(128) NOT NULL,
  `suhu4` varchar(128) NOT NULL,
  `keterangan4` varchar(128) NOT NULL,
  `gambar` varchar(256) NOT NULL,
  `gambar2` varchar(256) NOT NULL,
  `gambar3` varchar(256) NOT NULL,
  `gambar4` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `medan`
--

INSERT INTO `medan` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '34 C', 'Cerah', '30 C', 'Berawan', '29 C', 'Cerah berawan', '29 C', 'Berawan', '5e5dfcc30781b.png', '5e5dfcc3089cc.png', '5e5dfcc309f5c.png', '5e5dfcc30b087.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `padangsidimpuan`
--

CREATE TABLE `padangsidimpuan` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pandan`
--

CREATE TABLE `pandan` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangururan`
--

CREATE TABLE `pangururan` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `panyabungan`
--

CREATE TABLE `panyabungan` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `panyabungan`
--

INSERT INTO `panyabungan` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '28 C', 'Berawan', '30 C', 'Cerah Berawan', '28 C', 'Berawan', '29 C', 'Hujan', '5e5205a314714.png', '5e5205a314cf5.png', '5e5205a315194.png', '5e5205a31565c.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rantauparapat`
--

CREATE TABLE `rantauparapat` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `raya`
--

CREATE TABLE `raya` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `raya`
--

INSERT INTO `raya` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '30 C', 'Cerah Berawan', '33 C', 'Cerah', '32 C', 'Berawan', '30 C', 'Cerah Berawan', '5e55c1fcab392.png', '5e55c1fcab73a.png', '5e55c1fcaba4e.png', '5e55c1fcabd56.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `salak`
--

CREATE TABLE `salak` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `seirampah`
--

CREATE TABLE `seirampah` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siantar`
--

CREATE TABLE `siantar` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sibolga`
--

CREATE TABLE `sibolga` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sibuhuan`
--

CREATE TABLE `sibuhuan` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sidikalang`
--

CREATE TABLE `sidikalang` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(128) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(128) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `gambar2` varchar(128) NOT NULL,
  `gambar3` varchar(128) NOT NULL,
  `gambar4` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sipirok`
--

CREATE TABLE `sipirok` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stabat`
--

CREATE TABLE `stabat` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stabat`
--

INSERT INTO `stabat` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '29 C', 'Berawan', '30 C', 'Berawan', '29 C', 'Hujan', '30 C', 'Hujan', '5e51dab730dea.png', '5e51dab7313c5.png', '5e51dab731b42.png', '5e51dab731fa6.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanjungbalai`
--

CREATE TABLE `tanjungbalai` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tarutung`
--

CREATE TABLE `tarutung` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tebing`
--

CREATE TABLE `tebing` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `telukdalam`
--

CREATE TABLE `telukdalam` (
  `id` int(11) NOT NULL,
  `suhu` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `suhu2` varchar(10) NOT NULL,
  `keterangan2` varchar(50) NOT NULL,
  `suhu3` varchar(10) NOT NULL,
  `keterangan3` varchar(50) NOT NULL,
  `suhu4` varchar(10) NOT NULL,
  `keterangan4` varchar(50) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `gambar2` varchar(50) NOT NULL,
  `gambar3` varchar(50) NOT NULL,
  `gambar4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `telukdalam`
--

INSERT INTO `telukdalam` (`id`, `suhu`, `keterangan`, `suhu2`, `keterangan2`, `suhu3`, `keterangan3`, `suhu4`, `keterangan4`, `gambar`, `gambar2`, `gambar3`, `gambar4`) VALUES
(1, '28 C', 'cerah', '30 C', 'Cerah berawan', '33 C', 'Hujan', '29 C', 'Berawan', '5e53374036e38.png', '5e533740380b5.png', '5e533740390f4.png', '5e53374039b6c.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$nE2rrVBh4dxML3.s7WGZXOHsC.VbvEaTt.uwaJDELarfH5tqaMYju');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aekkanopan`
--
ALTER TABLE `aekkanopan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `balige`
--
ALTER TABLE `balige`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `batu_bara`
--
ALTER TABLE `batu_bara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `binjai`
--
ALTER TABLE `binjai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `doloksanggul`
--
ALTER TABLE `doloksanggul`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gido`
--
ALTER TABLE `gido`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gunungsitoli`
--
ALTER TABLE `gunungsitoli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gunungtua`
--
ALTER TABLE `gunungtua`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kabanjahe`
--
ALTER TABLE `kabanjahe`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kisaran`
--
ALTER TABLE `kisaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kotapinang`
--
ALTER TABLE `kotapinang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lahomi`
--
ALTER TABLE `lahomi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lotu`
--
ALTER TABLE `lotu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lubukpakam`
--
ALTER TABLE `lubukpakam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `medan`
--
ALTER TABLE `medan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `padangsidimpuan`
--
ALTER TABLE `padangsidimpuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pandan`
--
ALTER TABLE `pandan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pangururan`
--
ALTER TABLE `pangururan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `panyabungan`
--
ALTER TABLE `panyabungan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `rantauparapat`
--
ALTER TABLE `rantauparapat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `raya`
--
ALTER TABLE `raya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `salak`
--
ALTER TABLE `salak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `seirampah`
--
ALTER TABLE `seirampah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siantar`
--
ALTER TABLE `siantar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sibolga`
--
ALTER TABLE `sibolga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sibuhuan`
--
ALTER TABLE `sibuhuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sidikalang`
--
ALTER TABLE `sidikalang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sipirok`
--
ALTER TABLE `sipirok`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `stabat`
--
ALTER TABLE `stabat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tanjungbalai`
--
ALTER TABLE `tanjungbalai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tarutung`
--
ALTER TABLE `tarutung`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tebing`
--
ALTER TABLE `tebing`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `telukdalam`
--
ALTER TABLE `telukdalam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aekkanopan`
--
ALTER TABLE `aekkanopan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `balige`
--
ALTER TABLE `balige`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `batu_bara`
--
ALTER TABLE `batu_bara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `binjai`
--
ALTER TABLE `binjai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `doloksanggul`
--
ALTER TABLE `doloksanggul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gido`
--
ALTER TABLE `gido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `gunungsitoli`
--
ALTER TABLE `gunungsitoli`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gunungtua`
--
ALTER TABLE `gunungtua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kabanjahe`
--
ALTER TABLE `kabanjahe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kisaran`
--
ALTER TABLE `kisaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kotapinang`
--
ALTER TABLE `kotapinang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lotu`
--
ALTER TABLE `lotu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `lubukpakam`
--
ALTER TABLE `lubukpakam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `medan`
--
ALTER TABLE `medan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `padangsidimpuan`
--
ALTER TABLE `padangsidimpuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pandan`
--
ALTER TABLE `pandan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pangururan`
--
ALTER TABLE `pangururan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `panyabungan`
--
ALTER TABLE `panyabungan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `rantauparapat`
--
ALTER TABLE `rantauparapat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `raya`
--
ALTER TABLE `raya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `salak`
--
ALTER TABLE `salak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `seirampah`
--
ALTER TABLE `seirampah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `siantar`
--
ALTER TABLE `siantar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sibolga`
--
ALTER TABLE `sibolga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sibuhuan`
--
ALTER TABLE `sibuhuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sidikalang`
--
ALTER TABLE `sidikalang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sipirok`
--
ALTER TABLE `sipirok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `stabat`
--
ALTER TABLE `stabat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tanjungbalai`
--
ALTER TABLE `tanjungbalai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tarutung`
--
ALTER TABLE `tarutung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tebing`
--
ALTER TABLE `tebing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `telukdalam`
--
ALTER TABLE `telukdalam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
