-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Mei 2015 pada 17.02
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siketus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip_tugas`
--

CREATE TABLE IF NOT EXISTS `arsip_tugas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_upload` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tipe_file` varchar(10) NOT NULL,
  `ukuran_file` varchar(20) NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `arsip_tugas`
--

INSERT INTO `arsip_tugas` (`id`, `tanggal_upload`, `nama`, `kelas`, `nama_file`, `tipe_file`, `ukuran_file`, `file`) VALUES
(9, '2015-05-05', 'Endrik Susanto', 'XI RPL 2', 'XIrpl2_Endrik_Susanto', 'zip', '195118', 'files/XIrpl2_Endrik_Susanto.zip'),
(10, '2015-05-05', 'Agung Ahmadi', 'XI RPL 2', 'XIrpl2_Agung_Ahmadi', 'zip', '67054', 'files/XIrpl2_Agung_Ahmadi.zip'),
(11, '2015-05-05', 'Aji Resa Naufal', 'XI RPL 2', 'XIrpl2_Aji_Resa_Naufal', 'zip', '67054', 'files/XIrpl2_Aji_Resa_Naufal.zip'),
(12, '2015-05-05', 'fitrinurjannah', 'XI RPL 2', 'fitrinurjannah_02', 'docx', '73608', 'files/fitrinurjannah_02.docx'),
(13, '2015-05-05', 'siti ilmiyatus syafiah', 'XI RPL 2', 'siti_ilmiatus_s.', 'zip', '67164', 'files/siti_ilmiatus_s..zip'),
(14, '2015-05-05', 'eni nur fauziyah', 'XI RPL 2', 'XIrpl02_eni_nur_fauziyah', 'docx', '73608', 'files/XIrpl02_eni_nur_fauziyah.docx'),
(15, '2015-05-05', 'imarotul masyrofah', 'XI RPL 2', 'XIRPL02_Imarotul_Masyrofah', 'zip', '70433', 'files/XIRPL02_Imarotul_Masyrofah.zip'),
(16, '2015-05-05', 'nailil muna', 'XI RPL 2', 'xirpl2_nailil_muna', 'zip', '67054', 'files/xirpl2_nailil_muna.zip'),
(17, '2015-05-05', 'Hendry arianto', 'XI RPL 2', 'XI_RPL2_Hendry_arianto', 'zip', '116246', 'files/XI_RPL2_Hendry_arianto.zip'),
(18, '2015-05-05', 'andy fahrul anwar', 'XI RPL 2', 'XIRPL2_andy_fahrul_anwar', 'zip', '116246', 'files/XIRPL2_andy_fahrul_anwar.zip'),
(19, '2015-05-05', 'Muhammad sihabul mawa', 'XI RPL 2', 'XI_RPL_2_muhammad_sihabul_mawa', 'zip', '70398', 'files/XI_RPL_2_muhammad_sihabul_mawa.zip'),
(20, '2015-05-05', 'Muhammad sirojuddin', 'XI RPL 2', 'XI_rpl_2_muhammad_sirojuddin', 'zip', '67108', 'files/XI_rpl_2_muhammad_sirojuddin.zip'),
(21, '2015-05-05', 'Titan Fahris Hermawan', 'XI RPL 2', 'XI_RPL_02_Titan_fahris_hermawan', 'zip', '116260', 'files/XI_RPL_02_Titan_fahris_hermawan.zip'),
(22, '2015-05-05', 'Muhammad Fikhayyin Nafi', 'XI RPL 2', 'XI_RPL_2_M_Fikhayyin_Nafi', 'zip', '70384', 'files/XI_RPL_2_M_Fikhayyin_Nafi.zip'),
(23, '2015-05-05', 'Dina Amaliyah', 'XI RPL 2', 'XIRPL02_DinaAmaliyah', 'zip', '73929', 'files/XIRPL02_DinaAmaliyah.zip'),
(24, '2015-05-05', 'Khoirul Fatihin', 'XI RPL 2', 'X1RPL02_KHOIRUL_FATIHIN', 'zip', '70384', 'files/X1RPL02_KHOIRUL_FATIHIN.zip'),
(25, '2015-05-05', 'Didik Setiawan', 'XI RPL 2', 'XI.RPL.2_Didik_Setiawan', 'zip', '71546', 'files/XI.RPL.2_Didik_Setiawan.zip'),
(26, '2015-05-05', 'Nanang Aji Prabowo', 'XI RPL 2', 'XI.RPL.02.Nanang_Aji_Prabowo', 'zip', '67054', 'files/XI.RPL.02.Nanang_Aji_Prabowo.zip'),
(27, '2015-05-05', 'nurul khiqmah', 'XI RPL 2', 'XI02_nurul_khiqmah', 'zip', '67054', 'files/XI02_nurul_khiqmah.zip'),
(28, '2015-05-05', 'siti ulya wanadifa', 'XI RPL 2', 'XIRPL02_sitiulyawanadifa', 'zip', '67034', 'files/XIRPL02_sitiulyawanadifa.zip'),
(29, '2015-05-05', 'AnImatul Qisma', 'XI RPL 2', 'XIr02_Animatul_qisma', 'zip', '64174', 'files/XIr02_Animatul_qisma.zip'),
(30, '2015-05-05', 'Astitik Nikmah', 'XI RPL 2', 'XI_02_Astitik_Nikmah', 'zip', '67111', 'files/XI_02_Astitik_Nikmah.zip'),
(31, '2015-05-05', 'Muhammad Nurul Irham Maulana', 'XI RPL 2', 'XIrpl02_irham_maulana', 'zip', '98701', 'files/XIrpl02_irham_maulana.zip'),
(32, '2015-05-05', 'Khoirul Umam', 'XI RPL 2', '11rpl02_KHOIRUL_UMAM', 'zip', '50387', 'files/11rpl02_KHOIRUL_UMAM.zip'),
(33, '2015-05-05', 'Romi Setiawan Purnomo', 'XI RPL 2', '11RPL02_Romi_Setiawan_Purnomo', 'zip', '78499', 'files/11RPL02_Romi_Setiawan_Purnomo.zip');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
