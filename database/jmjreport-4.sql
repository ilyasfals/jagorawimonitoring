-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2017 at 10:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jmjreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `departement`
--

CREATE TABLE `departement` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departement`
--

INSERT INTO `departement` (`id`, `kode`, `nama`, `deskripsi`) VALUES
(1, 'DTMJ', 'Departemen Traffic Management Jagorawi', 'Departemen Traffic Management Jagorawi');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `npp` varchar(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `posisi` int(11) NOT NULL,
  `seksi` int(11) NOT NULL,
  `departemen` int(11) NOT NULL,
  `induk_organisasi` int(11) NOT NULL,
  `lokasi` int(11) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `ur_fung_jab` int(11) NOT NULL,
  `tanggungan` int(11) NOT NULL,
  `aktif_sejak` date NOT NULL,
  `aktif_sampai` date NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `id_employees` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`npp`, `nama`, `jabatan`, `posisi`, `seksi`, `departemen`, `induk_organisasi`, `lokasi`, `jenis_kelamin`, `ur_fung_jab`, `tanggungan`, `aktif_sejak`, `aktif_sampai`, `id_user`, `id_employees`) VALUES
('01173', 'M. NAFHAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 53),
('01354', 'SRI SULISTYANI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 54),
('01395', 'ABDUL JALIL M.', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 55),
('01410', 'IBNU', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 56),
('01444', 'KUBIL', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 57),
('01506', 'EKO PURWANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 58),
('01512', 'DIAN MARDIATI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 59),
('01522', 'ARSINDIANY ALAMBOGO,SE', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 60),
('01637', 'WELLY GUNAWAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 61),
('01640', 'LENNY ROSYANTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 62),
('01643', 'DAMAN HURI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 63),
('01719', 'MIMIN MINARNI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 64),
('01721', 'SUSI RUSTIANTIKA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 65),
('01736', 'DARMAYANTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 66),
('01737', 'NIKEN SRI UTARI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 67),
('01738', 'SUWARSIH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 68),
('01739', 'ENI SULISTIANINGSIH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 69),
('01753', 'SUMASTUTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 70),
('01758', 'SUPRIHATIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 71),
('01790', 'SRI PURWANTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 72),
('01793', 'Rr.DYAH WINARNI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 73),
('01795', 'SUDARMI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 74),
('01800', 'SRI ENDANG LISSETYOWATI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 75),
('01802', 'FACHRIAH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 76),
('01838', 'EVELINA DOROTHEA LEANDER', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 77),
('01851', 'KONNIE', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 78),
('01932', 'AFRIANI ARIFIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 79),
('01967', 'DODI DJUNAIDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 80),
('01985', 'ELLIS SULISTYAWATI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 81),
('01990', 'SYAHRI SUANDA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 82),
('01992', 'MANSYUR UJANG', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 83),
('02013', 'SUGIYO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 84),
('02032', 'SARJONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 85),
('02095', 'MARDANI SALEH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 86),
('02145', 'BUDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 87),
('02147', 'JAMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 88),
('02150', 'NEMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 89),
('02152', 'NIAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 90),
('02153', 'HASAN ADE', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 91),
('02251', 'DETY ROHAYATI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 92),
('02253', 'RITTA HERUSTIATI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 93),
('02400', 'POPPY COSSAD', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 94),
('02401', 'YULIA SURYANTINI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 95),
('02453', 'MARTHA SIAHAAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 96),
('02460', 'ENDANG ROEBIANTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 97),
('02523', 'SOLIHIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 98),
('02563', 'SUPRIYANTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 99),
('02672', 'EMILLIA LAUW', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 100),
('02673', 'YANI SITI UJAEMATUL HADORO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 101),
('02679', 'SRI WILLIS ENDANG SULASTRI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 102),
('02717', 'HASWATY', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 103),
('02844', 'SUDARTO HERTANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 104),
('02845', 'AMAN SAPUTRA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 105),
('03004', 'DWI AGUSTIN MEGAYANI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 106),
('03021', 'SHINTA KUMALA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 107),
('03022', 'SUGIYATI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 108),
('03028', 'VERY JONI LUMENTUT', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 109),
('03042', 'PUJIONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 110),
('03058', 'BAMBANG SUBEKTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 111),
('03164', 'WIHARTININGSIH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 112),
('03175', 'EUIS MINTARSIH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 113),
('03508', 'CUT FARRA DIBA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 114),
('03677', 'HUSNI RACHMAD SANTOSO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 115),
('03807', 'ENDANG MULYANA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 116),
('03856', 'MEIRIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 117),
('04059', 'ROFANDANI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 118),
('04088', 'TRIES TIANINGSIH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 119),
('04098', 'KHARIFIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 120),
('04103', 'SUHARMANTA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 121),
('04104', 'MURYANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 122),
('04110', 'LIMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 123),
('04141', 'TEGUH CAHYONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 124),
('04142', 'SUPENA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 125),
('04148', 'YOHANES SUDARWO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 126),
('04157', 'GANIA LUMBIANA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 127),
('04163', 'R.NOER SUTJAHYO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 128),
('04195', 'AGNES RITA SITOHANG', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 129),
('04286', 'TUTI SUNARTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 130),
('04300', 'RIBET SUPRAPTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 131),
('04306', 'JOHANES BUDI PRIYATNO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 132),
('04344', 'JUHENDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 133),
('04345', 'BISMARCK PURBA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 134),
('04359', 'HARIS FADILLAH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 135),
('04376', 'LUKMAN HAKIM', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 136),
('04395', 'SULARDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 137),
('04430', 'HAWA SLAMET', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 138),
('04437', 'HERI SETIABUDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 139),
('04462', 'TRI ANDIANA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 140),
('04465', 'AGUNG FAIZIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 141),
('04471', 'HERNOWO PAMBUDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 142),
('04473', 'SAILAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 143),
('04497', 'AHMADI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 144),
('04498', 'MASUM', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 145),
('04501', 'Ini Lestari', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 146),
('04522', 'TASLIM', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 147),
('04566', 'Edward', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 148),
('04704', 'AGUS RIYADI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 149),
('04757', 'RUKIJO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 150),
('04763', 'IRIANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 151),
('04765', 'MANSUR TOON', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 152),
('04806', 'SYAMSUDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 153),
('04810', 'NGUDIARTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 154),
('04853', 'NURDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 155),
('04888', 'ACHMAD MADANI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 156),
('04894', 'SAHID URIP', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 157),
('04976', 'JHON HEROMEN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 158),
('04985', 'ABIDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 159),
('05023', 'NURIMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 160),
('05035', 'RATNA AMPERAWATI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 161),
('05089', 'JAMAL LULLAIL', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 162),
('05153', 'TAVIP YANUADI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 163),
('05165', 'HUSNA SAEFUDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 164),
('05171', 'MUHAMAD', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 165),
('05218', 'TISMAN SUHENDAR', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 166),
('05269', 'SURAYA ZAINONA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 167),
('05278', 'SUPARLI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 168),
('05281', 'MARTHIN HITALESSY', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 169),
('05287', 'TERTIB SETIAJID', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 170),
('05308', 'SAYUTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 171),
('05481', 'SAEPUDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 172),
('05501', 'TONO SARYONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 173),
('05503', 'SRI LESTARININGSIH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 174),
('05504', 'HORISON SUWONDO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 175),
('05605', 'AGUS SUPRIATMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 176),
('05614', 'SARJONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 177),
('05615', 'LAKSMI HERTIANTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 178),
('05619', 'AMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 179),
('05694', 'IDRAL IDRIS', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 180),
('05822', 'DEDIH KUSWANDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 181),
('05850', 'ONDA SUHANDA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 182),
('05854', 'KADIM', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 183),
('05901', 'SRI MANAP', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 184),
('05952', 'MOHAMAD FIAN ALFIANSYAH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 185),
('06113', 'KOKOY RUKOYAH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 186),
('06124', 'SAEPUDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 187),
('06444', 'MAMAN WAHYUDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 188),
('06447', 'SIPIT HERY SUSANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 189),
('06520', 'KUSLAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 190),
('06534', 'MOCHAMAD RIDWAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 191),
('06545', 'SRI SUDJARPADI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 192),
('06696', 'EKO WAHYUDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 193),
('06697', 'DARIUS SULAIMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 194),
('06785', 'IWAN KURNIAWAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 195),
('06924', 'EDY SUKARDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 196),
('06925', 'ATO HERYANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 197),
('06933', 'SAPRI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 198),
('06937', 'JUMIDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 199),
('07000', 'BUDI PRASETYO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 200),
('07002', 'SOERACHMAT BOEDIANA MACHMOED', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 201),
('07032', 'NOOR CHOLISH AM.', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 202),
('07043', 'AGUS UMORO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 203),
('07260', 'HERU WALUYO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 204),
('07389', 'ASEP SAEPUDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 205),
('07676', 'SOEHARIJANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 206),
('07706', 'BAMBANG SUMARSONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 207),
('07751', 'RAHARDJO SARDJONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 208),
('07978', 'SYARIFUDDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 209),
('08069', 'ADNAN SUKARYA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 210),
('08075', 'BADRUL MANANI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 211),
('08082', 'EKO NUR WIDODO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 212),
('08087', 'HENGKY PRASTANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 213),
('08088', 'ICHSAN NOOR IMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 214),
('08103', 'SOPIYANI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 215),
('08107', 'TATANG MUSTARI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 216),
('08120', 'ELLYNO DIKE WARIANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 217),
('08131', 'MUHAMMAD NURHANJAYA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 218),
('08134', 'ARI KUSTIYONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 219),
('08191', 'A. LUKMAN NUL HAKIM', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 220),
('08270', 'ZAINAL ABIDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 221),
('08295', 'A.A. NGURAH INDRA B.P.', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 222),
('08352', 'USEP JUNAEDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 223),
('08438', 'SARIP HIDAYAT', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 224),
('08443', 'MARSIS SATRIANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 225),
('08449', 'EVIT SUDRAJAT', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 226),
('08465', 'DENNI IRAWAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 227),
('08470', 'JUNAEDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 228),
('08471', 'ROY MARTIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 229),
('08472', 'AGUS HARYANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 230),
('08473', 'IRWAN NIRWANA HAMDANI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 231),
('08599', 'BARNO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 232),
('08609', 'AGUNG HERY WICAKSONO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 233),
('08613', 'ADE MASRURI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 234),
('08624', 'TAKAT HERRY PURNOMO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 235),
('08853', 'EKO PRIHATNO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 236),
('08854', 'HAYATDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 237),
('08883', 'LAMBANG SUDIBYO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 238),
('08927', 'JAJANG SAHARA NUR', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 239),
('08958', 'RAMLINO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 240),
('08961', 'KHAIRUNNAS', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 241),
('08963', 'ABI HAFAS', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 242),
('09103', 'ADY KURNIAWAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 243),
('09107', 'ASEP SUPRIADI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 244),
('09124', 'SUTIKNO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 245),
('09129', 'ZULFIKAR IMRAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 246),
('09173', 'KARTIKA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 247),
('09319', 'DICKY WISNUWARDHANA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 248),
('09341', 'DIKKY HIDAYAT', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 249),
('09377', 'DADAN HIDAYAT', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 250),
('09516', 'CHATARINA CAHYANING TRIWIDANTI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 251),
('09620', 'DEDI KURNIAWAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 252),
('09624', 'HERU CHAERUDIN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 253),
('09628', 'NOVA SEGARA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 254),
('09849', 'MUMU MUDHARI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 255),
('10070', 'MUHAMAD TAUFIK HIDAYAT', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 256),
('10074', 'MUHAMMAD SUKIMAN', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 257),
('10076', 'FIRMANSYAH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 258),
('10103', 'AGENG SETIAGUNA', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 259),
('10104', 'SUWANDI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 260),
('10138', 'BAMBANG ALI SUSANTO', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 261),
('10164', 'WAHYU ABADI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 262),
('10185', 'YUNI AFRIANI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 263),
('10283', 'MUHAMAD IBENUH', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 264),
('10364', 'GANDES AISYAHARUM', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 265),
('10376', 'WIDIYATMIKO NURSEJATI', 0, 0, 0, 0, 0, 0, '', 0, 0, '0000-00-00', '0000-00-00', 0, 266);

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `gol` char(1) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`gol`, `deskripsi`) VALUES
('1', NULL),
('2', NULL),
('3', NULL),
('4', NULL),
('5', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `kode`, `nama`, `deskripsi`) VALUES
(1, 'PRTM', 'Petugas Rescue Truck Multiguna', 'Petugas Rescue Truck Multiguna');

-- --------------------------------------------------------

--
-- Table structure for table `kpis`
--

CREATE TABLE `kpis` (
  `id_kpis` bigint(20) UNSIGNED NOT NULL,
  `tahun` int(4) DEFAULT NULL,
  `id_master_kpis` bigint(20) DEFAULT NULL,
  `target_1` double DEFAULT NULL,
  `target_2` double DEFAULT NULL,
  `target_3` double DEFAULT NULL,
  `target_4` double DEFAULT NULL,
  `target_5` double DEFAULT NULL,
  `target_6` double DEFAULT NULL,
  `target_7` double DEFAULT NULL,
  `target_8` double DEFAULT NULL,
  `target_10` double DEFAULT NULL,
  `target_11` double DEFAULT NULL,
  `target_12` double DEFAULT NULL,
  `realisasi_1` double DEFAULT NULL,
  `realisasi_2` double DEFAULT NULL,
  `realisasi_3` double DEFAULT NULL,
  `realisasi_4` double DEFAULT NULL,
  `realisasi_5` double DEFAULT NULL,
  `realisasi_6` double DEFAULT NULL,
  `realisasi_7` double DEFAULT NULL,
  `realisasi_8` double DEFAULT NULL,
  `realisasi_9` double DEFAULT NULL,
  `realisasi_10` double DEFAULT NULL,
  `realisasi_11` double DEFAULT NULL,
  `realisasi_12` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kpis`
--

INSERT INTO `kpis` (`id_kpis`, `tahun`, `id_master_kpis`, `target_1`, `target_2`, `target_3`, `target_4`, `target_5`, `target_6`, `target_7`, `target_8`, `target_10`, `target_11`, `target_12`, `realisasi_1`, `realisasi_2`, `realisasi_3`, `realisasi_4`, `realisasi_5`, `realisasi_6`, `realisasi_7`, `realisasi_8`, `realisasi_9`, `realisasi_10`, `realisasi_11`, `realisasi_12`) VALUES
(1, 2017, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2017, 0, 1.241, 1.241, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2017, 16, 1.141, 142.412, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kpi_transaksi`
--

CREATE TABLE `kpi_transaksi` (
  `target_1` bigint(20) NOT NULL,
  `target_2` bigint(20) NOT NULL,
  `target_3` bigint(20) NOT NULL,
  `target_4` bigint(20) NOT NULL,
  `target_5` bigint(20) NOT NULL,
  `target_6` bigint(20) NOT NULL,
  `target_7` bigint(20) NOT NULL,
  `target_8` bigint(20) NOT NULL,
  `target_9` bigint(20) NOT NULL,
  `target_10` bigint(20) NOT NULL,
  `target_11` bigint(20) NOT NULL,
  `target_12` bigint(20) NOT NULL,
  `tahun` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kpi_transaksi`
--

INSERT INTO `kpi_transaksi` (`target_1`, `target_2`, `target_3`, `target_4`, `target_5`, `target_6`, `target_7`, `target_8`, `target_9`, `target_10`, `target_11`, `target_12`, `tahun`, `id`) VALUES
(200000, 200000, 450000, 600000, 250000, 200000, 200000, 200000, 500000, 500000, 200000, 500000, 2017, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_kpis`
--

CREATE TABLE `master_kpis` (
  `id_master_kpis` bigint(20) UNSIGNED NOT NULL,
  `pic` varchar(20) DEFAULT NULL,
  `process` varchar(20) DEFAULT NULL,
  `perspektif` varchar(50) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `master_kpis`
--

INSERT INTO `master_kpis` (`id_master_kpis`, `pic`, `process`, `perspektif`, `area`, `deskripsi`) VALUES
(1, 'FINANCE', 'HRGA', 'Keuangan dan Pasar', 'Pendapatan Usaha Lain', 'Pendapatan Usaha Lain Tahun Berjalan'),
(2, 'FINANCE', 'FINANCE', 'Keuangan dan Pasar', 'Efisiensi Beban Operasi dan Umum Administrasi', 'Beban Operasi Cabang'),
(3, 'FINANCE', 'FINANCE', 'Keuangan dan Pasar', 'Efisiensi Beban Operasi dan Umum Administrasi', 'Beban Umum dan Administrasi Cabang'),
(4, 'TCM', 'TCM', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Volume Lalu Lintas Transaksi Cabang'),
(5, 'MSM', 'MSM', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Kondisi Jalan Tol '),
(6, 'TM', 'TM', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Kecepatan Tempuh Rata-rata Kondisi Normal'),
(7, 'TM', 'TM', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Aksesibilitas'),
(8, 'TM', 'TM', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Mobilitas'),
(9, 'TM', 'TM', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Keselamatan'),
(10, 'TM', 'TM', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Unit Pertolongan/ Penyelamatan & Bantuan Pelayanan'),
(11, 'MCM', 'MCM', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Lingkungan'),
(12, 'HRGA', 'HRGA', 'Fokus Pelanggan', 'Pemenuhan SPM Cabang', 'Tempat Istirahat (TI)'),
(13, 'TM', 'TM', 'Fokus Pelanggan', 'Indeks Kepuasan Pelanggan Tol', 'Indeks Kepuasan Pelanggan'),
(14, 'TM', 'TM', 'Efektivitas Produk dan Proses', 'Program Pelayanan Lalu Lintas dan Pengumpulan Tol', 'Program Pelayanan Lalu Lintas (SPJT)'),
(15, 'TCM', 'TCM', 'Efektivitas Produk dan Proses', 'Program Pelayanan Lalu Lintas dan Pengumpulan Tol', 'Program Pengumpulan Tol (SPJT)'),
(16, 'TCM', 'TCM', 'Efektivitas Produk dan Proses', 'Program Pelayanan Lalu Lintas dan Pengumpulan Tol', 'Program Pengumpulan Tol (SPOJT)'),
(17, 'MSM', 'MSM', 'Efektivitas Produk dan Proses', 'Program Pemeliharaan Jalan Tol', 'Program Pemeliharaan Jalan Tol (SPJT)'),
(18, 'MSM', 'MSM', 'Efektivitas Produk dan Proses', 'Program Pemeliharaan Jalan Tol', 'Program Pemeliharaan Jalan Tol (Peningkatan Kapasitas)'),
(19, 'MSM', 'MSM', 'Efektivitas Produk dan Proses', 'Program Pemeliharaan Jalan Tol', 'Program Pemeliharaan Jalan Tol (Pemeliharaan Periodik)'),
(20, 'MSM', 'MSM', 'Efektivitas Produk dan Proses', 'Program Pemeliharaan Jalan Tol', 'Program Pemeliharaan Jalan Tol (SPOJT)'),
(21, 'HRGA', 'HRGA', 'Efektivitas Produk dan Proses', 'Tingkat Keandalan Kinerja Peralatan Tol', 'Pemenuhan Waktu Operasi'),
(22, 'HRGA', 'HRGA', 'Fokus Tenaga Kerja', 'Produktivitas Tenaga Kerja Cabang', 'Jumlah Tenaga Kerja'),
(23, 'HRGA', 'HRGA', 'Fokus Tenaga Kerja', 'Produktivitas Tenaga Kerja Cabang', 'Produktivitas Tenaga Kerja'),
(24, 'HRGA', 'HRGA', 'Fokus Tenaga Kerja', 'Pemenuhan Kompetensi Teknis dan Non-Teknis ', 'Jumlah Hari Pelatihan'),
(25, 'HRGA', 'HRGA', 'Kepemimpinan, Tata Kelola', 'KPKU Score Cabang', 'Skor KPKU Cabang'),
(26, 'HRGA', 'HRGA', 'Kepemimpinan, Tata Kelola', 'Pemenuhan Temuan Auditor dan Peraturan - GCG', 'Jumlah Temuan'),
(27, 'HRGA', 'HRGA', 'Kepemimpinan, Tata Kelola', 'Program Corporate Social Responsibility', 'Program CSR');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'judul', 'slug1', 'text1'),
(2, 'title2', 'slug2', 'text2'),
(3, 'title input 1', 'title-input-1', 'text input 1');

-- --------------------------------------------------------

--
-- Table structure for table `pcds_tblcabang`
--

CREATE TABLE `pcds_tblcabang` (
  `id_cabang` varchar(2) NOT NULL,
  `nama_cabang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pcds_tblcabang`
--

INSERT INTO `pcds_tblcabang` (`id_cabang`, `nama_cabang`) VALUES
('11', 'JAGORAWI');

-- --------------------------------------------------------

--
-- Table structure for table `pcds_tbldinas_info`
--

CREATE TABLE `pcds_tbldinas_info` (
  `kode_dinas` varchar(2) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pcds_tbldinas_info`
--

INSERT INTO `pcds_tbldinas_info` (`kode_dinas`, `deskripsi`) VALUES
('20', 'KTP OPERASIONAL'),
('21', 'KTP KARYAWAN'),
('22', 'KTP MITRA');

-- --------------------------------------------------------

--
-- Table structure for table `pcds_tblgerbang`
--

CREATE TABLE `pcds_tblgerbang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gerbang` varchar(2) NOT NULL,
  `id_cabang` varchar(2) NOT NULL,
  `nama_gerbang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pcds_tblgerbang`
--

INSERT INTO `pcds_tblgerbang` (`id`, `kode_gerbang`, `id_cabang`, `nama_gerbang`) VALUES
(1, '1', '11', 'CIAWI'),
(2, '2', '11', 'BOGOR'),
(3, '3', '11', 'SENTUL SELATAN'),
(4, '4', '11', 'SENTUL UTARA'),
(5, '5', '11', 'CIBINONG'),
(6, '6', '11', 'GUNUNG PUTRI'),
(7, '7', '11', 'KARANGGAN'),
(8, '8', '11', 'CIMANGGIS'),
(9, '9', '11', 'RAMP CIBUBUR'),
(10, '10', '11', 'GMP CIBUBUR'),
(12, '12', '11', 'CIMANGGIS UTAMA'),
(13, '13', '11', 'RAMP DUKUH'),
(14, '14', '11', 'RAMP TAMAN MINI');

-- --------------------------------------------------------

--
-- Table structure for table `pcds_tblkode_transaksi`
--

CREATE TABLE `pcds_tblkode_transaksi` (
  `kode_trx` varchar(2) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pcds_tblkode_transaksi`
--

INSERT INTO `pcds_tblkode_transaksi` (`kode_trx`, `deskripsi`) VALUES
('01', 'Normal-Tunai'),
('02', 'AGS-Tunai'),
('03', 'KHL-Tunai'),
('04', 'Umum'),
('11', 'EToll-Mandiri'),
('14', 'EToll-BRI'),
('16', 'EToll-BNI'),
('18', 'EToll-BCA'),
('21', 'Normal-Dinas'),
('31', 'Normal-LGN'),
('42', 'JKR-Umum'),
('80', 'Notran-KTM'),
('82', 'Notran-LSB'),
('83', 'Notran-ALR'),
('84', 'Notran'),
('91', 'Test'),
('92', 'Cancel'),
('93', 'SGOL'),
('94', 'Reset'),
('95', 'Derek');

-- --------------------------------------------------------

--
-- Table structure for table `pcds_tbltrx_open`
--

CREATE TABLE `pcds_tbltrx_open` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_shift` varchar(32) NOT NULL,
  `kode_trx` varchar(2) NOT NULL,
  `resi` int(11) NOT NULL,
  `shift` char(1) NOT NULL,
  `periode` varchar(2) NOT NULL,
  `id_cabang_trx` varchar(2) NOT NULL,
  `id_gerbang_trx` varchar(2) NOT NULL,
  `no_gardu` varchar(2) NOT NULL,
  `gol` char(1) NOT NULL,
  `tarif` int(11) NOT NULL,
  `tgl_trx` date NOT NULL,
  `jam_trx` time NOT NULL,
  `uid_card` varchar(128) NOT NULL,
  `tkn_reset` char(1) NOT NULL,
  `kode_dinas` varchar(2) NOT NULL,
  `backup_status` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pcds_tbltrx_open`
--

INSERT INTO `pcds_tbltrx_open` (`id`, `id_shift`, `kode_trx`, `resi`, `shift`, `periode`, `id_cabang_trx`, `id_gerbang_trx`, `no_gardu`, `gol`, `tarif`, `tgl_trx`, `jam_trx`, `uid_card`, `tkn_reset`, `kode_dinas`, `backup_status`) VALUES
(1, 'A', '01', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(2, 'A', '02', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(3, 'A', '03', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(4, 'A', '04', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(5, 'A', '11', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(6, 'A', '14', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(7, 'A', '16', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(8, 'A', '18', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(9, 'A', '12', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(10, 'A', '21', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(11, 'A', '31', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(12, 'A', '42', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(13, 'A', '80', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(14, 'A', '02', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(15, 'A', '03', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(16, 'A', '04', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(17, 'A', '11', 1, '1', '1', '11', '1', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(18, 'A', '84', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-05-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(19, 'A', '81', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(20, 'A', '82', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(21, 'A', '83', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(22, 'A', '84', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(23, 'A', '91', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(24, 'A', '92', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(25, 'A', '93', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(26, 'A', '94', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(27, 'A', '95', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(28, 'A', '01', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(29, 'A', '02', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(30, 'A', '03', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(31, 'A', '04', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(32, 'A', '11', 1, '1', '1', '11', '2', '1', '1', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(33, 'A', '14', 1, '1', '1', '11', '2', '1', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(34, 'A', '16', 1, '1', '1', '11', '2', '1', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(35, 'A', '18', 1, '1', '1', '11', '2', '1', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(36, 'A', '12', 1, '1', '1', '11', '2', '1', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(37, 'A', '21', 1, '1', '1', '11', '2', '1', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(38, 'A', '31', 1, '1', '1', '11', '2', '1', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(39, 'A', '11', 1, '1', '1', '11', '2', '2', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(40, 'A', '14', 1, '1', '1', '11', '2', '2', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(41, 'A', '16', 1, '1', '1', '11', '2', '2', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(42, 'A', '18', 1, '1', '1', '11', '2', '2', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(43, 'A', '80', 1, '1', '1', '11', '2', '2', '2', 9500, '2017-06-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(44, 'A', '02', 1, '1', '1', '11', '2', '2', '2', 9500, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(45, 'A', '03', 1, '1', '1', '11', '2', '2', '2', 9500, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(46, 'A', '04', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(47, 'A', '11', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(48, 'A', '84', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(49, 'A', '81', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(50, 'A', '82', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(51, 'A', '83', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(52, 'A', '84', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(53, 'A', '91', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(54, 'A', '92', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(55, 'A', '93', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(56, 'A', '01', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(57, 'A', '02', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(58, 'A', '03', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(59, 'A', '04', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(60, 'A', '11', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(61, 'A', '14', 1, '1', '1', '11', '2', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(62, 'A', '16', 1, '1', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(63, 'A', '18', 1, '1', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(64, 'A', '12', 1, '1', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(65, 'A', '21', 1, '1', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(66, 'A', '31', 1, '1', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(67, 'A', '42', 1, '1', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(68, 'A', '80', 1, '1', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(69, 'A', '02', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(70, 'A', '03', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(71, 'A', '04', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(72, 'A', '11', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(73, 'A', '84', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(74, 'A', '81', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(75, 'A', '82', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(76, 'A', '83', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(77, 'A', '84', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(78, 'A', '91', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(79, 'A', '92', 1, '2', '1', '11', '3', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(80, 'A', '93', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(81, 'A', '94', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(82, 'A', '95', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(83, 'A', '01', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(84, 'A', '02', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(85, 'A', '03', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(86, 'A', '04', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(87, 'A', '11', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(88, 'A', '14', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-07-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(89, 'A', '16', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(90, 'A', '18', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(91, 'A', '12', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(92, 'A', '21', 1, '2', '1', '11', '4', '2', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(93, 'A', '31', 1, '2', '1', '11', '4', '3', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(94, 'A', '11', 1, '2', '1', '11', '4', '3', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(95, 'A', '14', 1, '2', '1', '11', '4', '3', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(96, 'A', '16', 1, '2', '1', '11', '4', '3', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(97, 'A', '18', 1, '2', '1', '11', '4', '3', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(98, 'A', '80', 1, '2', '1', '11', '4', '3', '2', 4000, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(99, 'A', '02', 1, '2', '1', '11', '5', '3', '2', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(100, 'A', '03', 1, '2', '1', '11', '5', '3', '2', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(101, 'A', '04', 1, '2', '1', '11', '5', '3', '2', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(102, 'A', '11', 1, '2', '1', '11', '5', '3', '2', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(103, 'A', '84', 1, '2', '1', '11', '5', '3', '2', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(104, 'A', '81', 1, '2', '1', '11', '5', '3', '2', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(105, 'A', '82', 1, '2', '1', '11', '5', '3', '2', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(106, 'A', '83', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(107, 'A', '84', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(108, 'A', '91', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(109, 'A', '92', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(110, 'A', '93', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(111, 'A', '01', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(112, 'A', '02', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(113, 'A', '03', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(114, 'A', '04', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(115, 'A', '11', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(116, 'A', '14', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(117, 'A', '16', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(118, 'A', '18', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(119, 'A', '12', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(120, 'A', '21', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(121, 'A', '31', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(122, 'A', '42', 1, '2', '1', '11', '5', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(123, 'A', '80', 1, '2', '1', '11', '6', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(124, 'A', '02', 1, '2', '1', '11', '6', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(125, 'A', '03', 1, '2', '1', '11', '6', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(126, 'A', '04', 1, '2', '1', '11', '6', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(127, 'A', '11', 1, '2', '1', '11', '6', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(128, 'A', '84', 1, '2', '1', '11', '6', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(129, 'A', '81', 1, '2', '1', '11', '6', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(130, 'A', '82', 1, '2', '1', '11', '6', '3', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(131, 'A', '83', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(132, 'A', '84', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(133, 'A', '91', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(134, 'A', '92', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(135, 'A', '93', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(136, 'A', '94', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(137, 'A', '95', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(138, 'A', '01', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(139, 'A', '02', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(140, 'A', '03', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(141, 'A', '04', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(142, 'A', '11', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '20', '1'),
(143, 'A', '14', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(144, 'A', '16', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(145, 'A', '18', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(146, 'A', '12', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(147, 'A', '21', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(148, 'A', '31', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(149, 'A', '11', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(150, 'A', '14', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(151, 'A', '16', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(152, 'A', '18', 1, '2', '1', '11', '6', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(153, 'A', '80', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(154, 'A', '02', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(155, 'A', '03', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(156, 'A', '04', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(157, 'A', '11', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(158, 'A', '84', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(159, 'A', '81', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(160, 'A', '82', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(161, 'A', '83', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(162, 'A', '84', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(163, 'A', '91', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(164, 'A', '92', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(165, 'A', '93', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-08-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(166, 'A', '01', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(167, 'A', '02', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(168, 'A', '03', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(169, 'A', '04', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(170, 'A', '11', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(171, 'A', '14', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(172, 'A', '16', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(173, 'A', '18', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(174, 'A', '12', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(175, 'A', '21', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(176, 'A', '31', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(177, 'A', '42', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(178, 'A', '80', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(179, 'A', '02', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(180, 'A', '03', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(181, 'A', '04', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(182, 'A', '11', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(183, 'A', '84', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(184, 'A', '81', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(185, 'A', '82', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(186, 'A', '83', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(187, 'A', '84', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(188, 'A', '91', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(189, 'A', '92', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(190, 'A', '93', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(191, 'A', '94', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(192, 'A', '95', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(193, 'A', '01', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(194, 'A', '02', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(195, 'A', '03', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(196, 'A', '04', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(197, 'A', '11', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(198, 'A', '14', 1, '2', '1', '11', '7', '4', '3', 3500, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(199, 'A', '16', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(200, 'A', '18', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(201, 'A', '12', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(202, 'A', '21', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(203, 'A', '31', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(204, 'A', '11', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(205, 'A', '14', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(206, 'A', '16', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(207, 'A', '18', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(208, 'A', '80', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(209, 'A', '02', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(210, 'A', '03', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(211, 'A', '04', 1, '2', '1', '11', '7', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(212, 'A', '11', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(213, 'A', '84', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(214, 'A', '81', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(215, 'A', '82', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(216, 'A', '83', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(217, 'A', '84', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(218, 'A', '91', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(219, 'A', '92', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(220, 'A', '93', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(221, 'A', '01', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(222, 'A', '02', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(223, 'A', '03', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(224, 'A', '04', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(225, 'A', '11', 1, '2', '1', '11', '8', '4', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(226, 'A', '14', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(227, 'A', '16', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(228, 'A', '18', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(229, 'A', '12', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(230, 'A', '21', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(231, 'A', '31', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(232, 'A', '42', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(233, 'A', '80', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(234, 'A', '02', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(235, 'A', '03', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(236, 'A', '04', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(237, 'A', '11', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(238, 'A', '84', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(239, 'A', '81', 1, '2', '1', '11', '8', '5', '3', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(240, 'A', '82', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(241, 'A', '83', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(242, 'A', '84', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(243, 'A', '91', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(244, 'A', '92', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(245, 'A', '93', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(246, 'A', '94', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(247, 'A', '95', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(248, 'A', '01', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(249, 'A', '02', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(250, 'A', '03', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(251, 'A', '04', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(252, 'A', '11', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(253, 'A', '14', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(254, 'A', '16', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(255, 'A', '18', 1, '2', '1', '11', '8', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(256, 'A', '12', 1, '2', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(257, 'A', '21', 1, '2', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(258, 'A', '31', 1, '2', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(259, 'A', '11', 1, '2', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(260, 'A', '14', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(261, 'A', '16', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(262, 'A', '18', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(263, 'A', '80', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(264, 'A', '02', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(265, 'A', '03', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(266, 'A', '04', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(267, 'A', '11', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(268, 'A', '84', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(269, 'A', '81', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(270, 'A', '82', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(271, 'A', '83', 1, '3', '1', '11', '9', '5', '4', 2000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(272, 'A', '84', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(273, 'A', '91', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(274, 'A', '92', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(275, 'A', '93', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(276, 'A', '01', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(277, 'A', '02', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(278, 'A', '03', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(279, 'A', '04', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '21', '1'),
(280, 'A', '11', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(281, 'A', '14', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(282, 'A', '16', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(283, 'A', '18', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(284, 'A', '12', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(285, 'A', '21', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(286, 'A', '31', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(287, 'A', '42', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(288, 'A', '80', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(289, 'A', '02', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(290, 'A', '03', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(291, 'A', '04', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(292, 'A', '11', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(293, 'A', '84', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(294, 'A', '81', 1, '3', '1', '11', '9', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(295, 'A', '82', 1, '3', '1', '11', '10', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(296, 'A', '83', 1, '3', '1', '11', '10', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(297, 'A', '84', 1, '3', '1', '11', '10', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(298, 'A', '91', 1, '3', '1', '11', '10', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(299, 'A', '92', 1, '3', '1', '11', '10', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(300, 'A', '93', 1, '3', '1', '11', '10', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(301, 'A', '94', 1, '3', '1', '11', '12', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(302, 'A', '95', 1, '3', '1', '11', '12', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(303, 'A', '01', 1, '3', '1', '11', '12', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(304, 'A', '02', 1, '3', '1', '11', '12', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(305, 'A', '03', 1, '3', '1', '11', '12', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(306, 'A', '04', 1, '3', '1', '11', '13', '5', '4', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(307, 'A', '11', 1, '3', '1', '11', '13', '5', '5', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(308, 'A', '14', 1, '3', '1', '11', '13', '5', '5', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(309, 'A', '16', 1, '3', '1', '11', '13', '5', '5', 5000, '2017-09-01', '02:19:44', '124123123123123213', '0', '22', '1'),
(310, 'A', '18', 1, '3', '1', '11', '13', '5', '5', 5000, '2017-09-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(311, 'A', '12', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-09-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(312, 'A', '21', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-09-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(313, 'A', '31', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-09-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(314, 'A', '31', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-01-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(315, 'A', '31', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-01-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(316, 'A', '31', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-01-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(317, 'A', '31', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-01-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(318, 'A', '31', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-01-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(319, 'A', '31', 1, '3', '1', '11', '14', '5', '5', 5000, '2017-01-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(320, 'A', '31', 1, '3', '1', '11', '14', '5', '1', 5000, '2017-02-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(321, 'A', '31', 1, '3', '1', '11', '14', '5', '1', 5000, '2017-02-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(322, 'A', '31', 1, '3', '1', '11', '14', '5', '1', 5000, '2017-02-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(323, 'A', '31', 1, '3', '1', '11', '14', '5', '1', 5000, '2017-02-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(324, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-02-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(325, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-02-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(326, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-02-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(327, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-02-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(328, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-03-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(329, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-03-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(330, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-03-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(331, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-03-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(332, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-04-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(333, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-04-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(334, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-04-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(335, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-04-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(336, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-04-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(337, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-04-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(338, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-04-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(339, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-04-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(340, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-10-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(341, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-10-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(342, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-10-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(343, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-10-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(344, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-10-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(345, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(346, 'A', '31', 1, '3', '1', '11', '14', '5', '2', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(347, 'A', '31', 1, '3', '1', '11', '14', '5', '3', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(348, 'A', '31', 1, '3', '1', '11', '14', '5', '3', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(349, 'A', '31', 1, '3', '1', '11', '14', '5', '3', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(350, 'A', '31', 1, '3', '1', '11', '14', '5', '3', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(351, 'A', '31', 1, '3', '1', '11', '14', '5', '3', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(352, 'A', '31', 1, '3', '1', '11', '14', '5', '4', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(353, 'A', '31', 1, '3', '1', '11', '14', '5', '4', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(354, 'A', '31', 1, '3', '1', '11', '14', '5', '4', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1'),
(355, 'A', '31', 1, '3', '1', '11', '14', '5', '4', 5000, '2017-11-01', '02:19:44', '124123123123123213', '1', '22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `posisi`
--

CREATE TABLE `posisi` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posisi`
--

INSERT INTO `posisi` (`id`, `kode`, `nama`, `deskripsi`) VALUES
(1, 'PRTMJ', 'Petugas Rescue Truck Multiguna Jago', 'Petugas Rescue Truck Multiguna Jago');

-- --------------------------------------------------------

--
-- Table structure for table `pulls`
--

CREATE TABLE `pulls` (
  `id_pulls` bigint(20) NOT NULL,
  `tanggal` date NOT NULL,
  `shift` int(11) NOT NULL,
  `pengawas1` bigint(20) NOT NULL,
  `id_gerbang` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pulls`
--

INSERT INTO `pulls` (`id_pulls`, `tanggal`, `shift`, `pengawas1`, `id_gerbang`) VALUES
(1, '2017-08-03', 1, 0, 0),
(2, '2017-08-03', 2, 0, 0),
(3, '0000-00-00', 1, 24, 1),
(4, '0000-00-00', 2, 23, 1),
(5, '0000-00-00', 2, 23, 1),
(6, '0000-00-00', 2, 23, 1),
(7, '0000-00-00', 1, 10, 1),
(8, '0000-00-00', 1, 10, 1),
(9, '0000-00-00', 1, 10, 1),
(10, '0000-00-00', 1, 10, 1),
(11, '0000-00-00', 1, 10, 1),
(12, '0000-00-00', 1, 10, 1),
(13, '0000-00-00', 1, 10, 1),
(14, '0000-00-00', 1, 10, 1),
(15, '0000-00-00', 1, 10, 1),
(16, '0000-00-00', 1, 16, 1),
(17, '0000-00-00', 1, 16, 1),
(18, '0000-00-00', 1, 16, 1),
(19, '0000-00-00', 1, 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pulls_gardu`
--

CREATE TABLE `pulls_gardu` (
  `id_pulls_gardu` bigint(20) NOT NULL,
  `id_pulls` bigint(20) NOT NULL,
  `real_petugas` bigint(20) NOT NULL,
  `pemasukan` bigint(20) NOT NULL,
  `plan_petugas` bigint(20) NOT NULL,
  `jam_hadir` time NOT NULL,
  `sifat_tugas` bigint(20) NOT NULL,
  `cashbox` bigint(20) NOT NULL,
  `karpul` int(11) NOT NULL,
  `kttmawal1` bigint(20) NOT NULL,
  `kttmawal2` bigint(20) NOT NULL,
  `kttmawal3` bigint(20) NOT NULL,
  `kttmawal4` bigint(20) NOT NULL,
  `kttmawal5` bigint(20) NOT NULL,
  `kttmakhir1` bigint(20) NOT NULL,
  `kttmakhir2` bigint(20) NOT NULL,
  `kttmakhir3` bigint(20) NOT NULL,
  `kttmakhir4` bigint(20) NOT NULL,
  `kttmakhir5` bigint(20) NOT NULL,
  `ukem` bigint(20) NOT NULL,
  `uangpribadi` bigint(20) NOT NULL,
  `hp` tinyint(1) NOT NULL,
  `rokok` tinyint(1) NOT NULL,
  `cekfisik1` tinyint(1) NOT NULL,
  `cekfisik2` tinyint(1) NOT NULL,
  `cekfisik3` tinyint(1) NOT NULL,
  `id_gardus` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pulls_gardu`
--

INSERT INTO `pulls_gardu` (`id_pulls_gardu`, `id_pulls`, `real_petugas`, `pemasukan`, `plan_petugas`, `jam_hadir`, `sifat_tugas`, `cashbox`, `karpul`, `kttmawal1`, `kttmawal2`, `kttmawal3`, `kttmawal4`, `kttmawal5`, `kttmakhir1`, `kttmakhir2`, `kttmakhir3`, `kttmakhir4`, `kttmakhir5`, `ukem`, `uangpribadi`, `hp`, `rokok`, `cekfisik1`, `cekfisik2`, `cekfisik3`, `id_gardus`) VALUES
(5, 1, 56, 0, 55, '00:00:00', 1, 124123123, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(6, 0, 53, 0, 53, '00:00:00', 0, 12123123, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seksi`
--

CREATE TABLE `seksi` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seksi`
--

INSERT INTO `seksi` (`id`, `kode`, `nama`, `deskripsi`) VALUES
(1, 'STSJ', 'Seksi Traffic Services Jagorawi', 'Seksi Traffic Services Jagorawi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'STAFF',
  `id_employees` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`, `id_employees`) VALUES
(1, '09107', '123456', 'STAFF', 244),
(2, '08087_ADMIN', '123456', 'ADMIN', 213),
(3, '08087_EKSEKUTIF', '123456', 'EKSEKUTIF', 213),
(4, '05822_KASIFT', '123456', 'KASIFT', 181),
(5, '08352_FINANCE', '123456', 'FINANCE', 223),
(6, '09620_HRGA', '123456', 'HRGA', 252),
(7, '09107_TCM', '123456', 'TCM', 244),
(8, '01173_TM', '123456', 'STAFF', 53);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_employees`),
  ADD UNIQUE KEY `npp_unique` (`npp`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`gol`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `kpis`
--
ALTER TABLE `kpis`
  ADD PRIMARY KEY (`id_kpis`),
  ADD UNIQUE KEY `id_kpis` (`id_kpis`),
  ADD KEY `id_master_kpis` (`id_master_kpis`),
  ADD KEY `id_master_kpis_2` (`id_master_kpis`),
  ADD KEY `id_master_kpis_3` (`id_master_kpis`);

--
-- Indexes for table `kpi_transaksi`
--
ALTER TABLE `kpi_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `master_kpis`
--
ALTER TABLE `master_kpis`
  ADD PRIMARY KEY (`id_master_kpis`),
  ADD UNIQUE KEY `id_master_kpis` (`id_master_kpis`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `pcds_tblcabang`
--
ALTER TABLE `pcds_tblcabang`
  ADD PRIMARY KEY (`id_cabang`);

--
-- Indexes for table `pcds_tbldinas_info`
--
ALTER TABLE `pcds_tbldinas_info`
  ADD PRIMARY KEY (`kode_dinas`);

--
-- Indexes for table `pcds_tblgerbang`
--
ALTER TABLE `pcds_tblgerbang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_gerbang` (`kode_gerbang`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `pcds_tblkode_transaksi`
--
ALTER TABLE `pcds_tblkode_transaksi`
  ADD PRIMARY KEY (`kode_trx`);

--
-- Indexes for table `pcds_tbltrx_open`
--
ALTER TABLE `pcds_tbltrx_open`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `posisi`
--
ALTER TABLE `posisi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `pulls`
--
ALTER TABLE `pulls`
  ADD PRIMARY KEY (`id_pulls`);

--
-- Indexes for table `pulls_gardu`
--
ALTER TABLE `pulls_gardu`
  ADD PRIMARY KEY (`id_pulls_gardu`);

--
-- Indexes for table `seksi`
--
ALTER TABLE `seksi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departement`
--
ALTER TABLE `departement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id_employees` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kpis`
--
ALTER TABLE `kpis`
  MODIFY `id_kpis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kpi_transaksi`
--
ALTER TABLE `kpi_transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `master_kpis`
--
ALTER TABLE `master_kpis`
  MODIFY `id_master_kpis` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pcds_tblgerbang`
--
ALTER TABLE `pcds_tblgerbang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pcds_tbltrx_open`
--
ALTER TABLE `pcds_tbltrx_open`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;
--
-- AUTO_INCREMENT for table `posisi`
--
ALTER TABLE `posisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pulls`
--
ALTER TABLE `pulls`
  MODIFY `id_pulls` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pulls_gardu`
--
ALTER TABLE `pulls_gardu`
  MODIFY `id_pulls_gardu` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `seksi`
--
ALTER TABLE `seksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
