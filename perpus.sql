-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 01:17 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `IDbuku` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `buku` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`IDbuku`, `judul`, `penulis`, `penerbit`, `tahunterbit`, `buku`, `foto`) VALUES
(1, 'The Art of Bravee', 'Jenny Lerew', 'Chronicle books', 2012, 'The Art of Brave.pdf', 'The Art of Brave_0000.jpg'),
(2, 'The Art Of Tangled', 'Jeff Kurti', 'Chronicle Books', 2010, 'The Art of Tangled.pdf', 'The Art of Tangled_0000.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `IDkategori` int(11) NOT NULL,
  `namakategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `IDkategoribuku` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `IDkategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `IDkoleksi` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `IDpeminjaman` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_peminjaman` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`IDpeminjaman`, `IDuser`, `IDbuku`, `nama`, `tgl_peminjaman`, `tgl_pengembalian`, `status_peminjaman`) VALUES
(1, 1, 1, 'Keana', '2024-03-10 05:41:04', '2024-03-09', 'dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `IDulasan` int(11) NOT NULL,
  `IDuser` int(11) NOT NULL,
  `IDbuku` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDuser` int(11) NOT NULL,
  `namalengkap` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('petugas','peminjam','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDuser`, `namalengkap`, `email`, `alamat`, `username`, `password`, `level`) VALUES
(1, 'kean', 'kean@gmail.com', 'bekasi', 'kean', '4c56ff4ce4aaf9573aa5dff913df997a', 'peminjam'),
(2, 'inaaaa', 'ina@gmail.com', 'Marakash', 'inaa', '698d51a19d8a121ce581499d7b701668', 'petugas'),
(3, 'yuta okkotsu', 'yuta@gmail.com', 'tokyo', 'yuta', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`IDbuku`),
  ADD KEY `IDbuku` (`IDbuku`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`IDkategori`),
  ADD KEY `IDkategori` (`IDkategori`);

--
-- Indexes for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`IDkategoribuku`),
  ADD KEY `IDkategoribuku` (`IDkategoribuku`),
  ADD KEY `IDbuku` (`IDbuku`),
  ADD KEY `IDkategori` (`IDkategori`);

--
-- Indexes for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`IDkoleksi`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku` (`IDbuku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`IDpeminjaman`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku` (`IDbuku`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`IDulasan`),
  ADD KEY `IDuser` (`IDuser`),
  ADD KEY `IDbuku` (`IDbuku`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDuser`),
  ADD KEY `IDuser` (`IDuser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `IDbuku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `IDkategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `IDkategoribuku` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `IDkoleksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `IDpeminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `IDulasan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `IDuser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_1` FOREIGN KEY (`IDkategori`) REFERENCES `kategori` (`IDkategori`),
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_2` FOREIGN KEY (`IDbuku`) REFERENCES `buku` (`IDbuku`);

--
-- Constraints for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD CONSTRAINT `koleksipribadi_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`),
  ADD CONSTRAINT `koleksipribadi_ibfk_2` FOREIGN KEY (`IDbuku`) REFERENCES `buku` (`IDbuku`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`),
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`IDbuku`) REFERENCES `buku` (`IDbuku`);

--
-- Constraints for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `ulasanbuku_ibfk_1` FOREIGN KEY (`IDuser`) REFERENCES `user` (`IDuser`),
  ADD CONSTRAINT `ulasanbuku_ibfk_2` FOREIGN KEY (`IDbuku`) REFERENCES `buku` (`IDbuku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
