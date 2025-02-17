-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Feb 2025 pada 20.13
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jwp_akmal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berobat`
--

CREATE TABLE `berobat` (
  `No_Transaksi` varchar(255) NOT NULL,
  `Pasien_ID` int(11) DEFAULT NULL,
  `Tanggal_Berobat` date DEFAULT NULL,
  `Dokter_ID` int(11) DEFAULT NULL,
  `Keluhan` varchar(255) DEFAULT NULL,
  `Biaya_Adm` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berobat`
--

INSERT INTO `berobat` (`No_Transaksi`, `Pasien_ID`, `Tanggal_Berobat`, `Dokter_ID`, `Keluhan`, `Biaya_Adm`) VALUES
('TR001', 1, '2020-12-12', 1, 'Sakit Gigi', 125000),
('TR002', 2, '2020-05-16', 2, 'Demam', 75000),
('TR003', 3, '2020-08-17', 3, 'Pendarahan Telinga', 90000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `Dokter_ID` int(11) NOT NULL,
  `Nama_Dokter` varchar(255) DEFAULT NULL,
  `Poli_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`Dokter_ID`, `Nama_Dokter`, `Poli_ID`) VALUES
(1, 'dr. Ratna', 1),
(2, 'dr. Rudy', 2),
(3, 'dr. Joko', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `Pasien_ID` int(11) NOT NULL,
  `Nama_Pasien` varchar(255) DEFAULT NULL,
  `Tanggal_Lahir` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`Pasien_ID`, `Nama_Pasien`, `Tanggal_Lahir`, `Jenis_Kelamin`, `Alamat`) VALUES
(1, 'Barata Yuda', '1979-07-23', 'Laki-laki', 'Depok'),
(2, 'Indah Susanti', '2007-05-05', 'Perempuan', 'Cibinong'),
(3, 'Kurniawan', '2014-04-26', 'Laki-laki', 'Bogor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `Poli_ID` int(11) NOT NULL,
  `Nama_Poli` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `poli`
--

INSERT INTO `poli` (`Poli_ID`, `Nama_Poli`) VALUES
(1, 'Gigi'),
(3, 'THT'),
(2, 'Umum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berobat`
--
ALTER TABLE `berobat`
  ADD PRIMARY KEY (`No_Transaksi`),
  ADD KEY `Pasien_ID` (`Pasien_ID`),
  ADD KEY `Tanggal_Berobat` (`Tanggal_Berobat`),
  ADD KEY `Dokter_ID` (`Dokter_ID`),
  ADD KEY `Keluhan` (`Keluhan`),
  ADD KEY `Biaya_Adm` (`Biaya_Adm`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`Dokter_ID`),
  ADD KEY `Nama Dokter` (`Nama_Dokter`),
  ADD KEY `Poli_ID` (`Poli_ID`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`Pasien_ID`),
  ADD KEY `Nama_Pasien` (`Nama_Pasien`),
  ADD KEY `Tanggal_Lahir` (`Tanggal_Lahir`),
  ADD KEY `Jenis_Kelamin` (`Jenis_Kelamin`),
  ADD KEY `Alamat` (`Alamat`);

--
-- Indeks untuk tabel `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`Poli_ID`),
  ADD KEY `Nama_Poli` (`Nama_Poli`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `Dokter_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `Pasien_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `poli`
--
ALTER TABLE `poli`
  MODIFY `Poli_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
