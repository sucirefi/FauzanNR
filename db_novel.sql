-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 09:40 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_novel`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_novel`
--

CREATE TABLE `db_novel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `entry` datetime NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `sinopsis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_novel`
--

INSERT INTO `db_novel` (`id`, `judul`, `kategori`, `penulis`, `tahun`, `entry`, `penerbit`, `foto`, `sinopsis`) VALUES
(13, 'Ayah', 'Lainnya', 'Rizky Renaldi', '2014', '2018-04-29 05:34:46', 'Bukune', '', 'Novel yang menceritakan perjuangan seoarang ayah y'),
(14, 'Matahari di Atas Samudra', 'Romantis', 'Cinderella', '2017', '2018-04-29 05:04:42', 'Bukune', '', 'Berawal dari Matahari atau ata yang putus dengan p'),
(15, 'Koala Kumal', 'Komedi', 'Raditya Dika', '2012', '2018-04-29 05:05:50', 'ppp', '', 'Kisah Cintanya Raditya Dika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_novel`
--
ALTER TABLE `db_novel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_novel`
--
ALTER TABLE `db_novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
