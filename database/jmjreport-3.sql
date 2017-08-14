-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2017 at 12:46 PM
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
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`) VALUES
(1, 'Asep Supriyadi', 'email@email.com', 'asep1', '1');

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
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode` (`kode`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

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
  ADD UNIQUE KEY `email` (`email`),
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
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
