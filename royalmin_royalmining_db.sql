-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2024 at 07:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `royalmin_royalmining_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_bank`
--

CREATE TABLE `account_bank` (
  `id` int(11) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `account` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `account_bank`
--

INSERT INTO `account_bank` (`id`, `bank`, `account`) VALUES
(1, 'BRI', '');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id_depo` int(11) NOT NULL,
  `id_package` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `profit` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(100) NOT NULL,
  `evidence_transfer` varchar(200) NOT NULL,
  `saldo_upgrade` bigint(20) NOT NULL,
  `uniq_code` varchar(20) NOT NULL,
  `date_of_upgrade` date NOT NULL,
  `upgraded` int(11) NOT NULL,
  `toko` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`id_depo`, `id_package`, `package_name`, `uname`, `amount`, `profit`, `date`, `time`, `status`, `evidence_transfer`, `saldo_upgrade`, `uniq_code`, `date_of_upgrade`, `upgraded`, `toko`) VALUES
(4, 2, '', 'Andi90', 100000, 7500, '2024-06-01', '09:29:22', 'Active', '', 0, '623', '0000-00-00', 0, ''),
(5, 2, '', 'Mira1990', 100000, 7500, '2024-06-01', '09:31:42', 'Active', '', 0, '851', '0000-00-00', 0, ''),
(8, 1, '', 'dilanur', 50000, 3500, '2024-06-02', '09:17:15', 'Pending', '', 0, '876', '0000-00-00', 0, ''),
(9, 2, '', 'gratisan', 100000, 7500, '2024-06-02', '09:17:24', 'Pending', '', 0, '958', '0000-00-00', 0, ''),
(10, 1, '', 'Nisa12', 50000, 3500, '2024-06-02', '09:18:00', 'Pending', '', 0, '567', '0000-00-00', 0, ''),
(11, 1, '', 'Joeran', 50000, 3500, '2024-06-02', '09:18:47', 'Pending', '', 0, '781', '0000-00-00', 0, ''),
(12, 1, '', '087749319643', 50000, 3500, '2024-06-02', '09:19:23', 'Pending', '', 0, '019', '0000-00-00', 0, ''),
(14, 1, '', 'admin001', 50000, 3500, '2024-06-02', '09:20:09', 'Pending', '', 0, '854', '0000-00-00', 0, ''),
(15, 4, '', 'admin001', 580000, 21000, '2024-06-02', '09:20:21', 'Pending', '', 0, '293', '0000-00-00', 0, ''),
(17, 1, '', 'Queen', 50000, 3500, '2024-06-02', '09:23:43', 'Pending', '', 0, '235', '0000-00-00', 0, ''),
(18, 3, '', 'Auliamaharani', 199000, 15000, '2024-06-02', '09:25:36', 'Pending', '', 0, '037', '0000-00-00', 0, ''),
(19, 1, '', 'Auliamaharani', 50000, 3500, '2024-06-02', '09:25:44', 'Pending', '', 0, '897', '0000-00-00', 0, ''),
(20, 1, '', 'Royani', 50000, 3500, '2024-06-02', '09:27:26', 'Pending', '', 0, '097', '0000-00-00', 0, ''),
(118, 1, '', 'Yuliaayunda', 50000, 3500, '2024-06-02', '12:29:57', 'Pending', '', 0, '079', '0000-00-00', 0, ''),
(22, 3, '', 'Weblokal', 199000, 15000, '2024-06-02', '09:28:33', 'Pending', '', 0, '507', '0000-00-00', 0, ''),
(23, 1, '', 'Deasaja', 50000, 3500, '2024-06-02', '09:28:39', 'Pending', '', 0, '738', '0000-00-00', 0, ''),
(100, 2, '', 'Amelaudia', 100000, 7500, '2024-06-02', '11:12:26', 'Active', '', 0, '560', '0000-00-00', 0, ''),
(25, 2, '', 'Deasaja', 100000, 7500, '2024-06-02', '09:28:49', 'Pending', '', 0, '516', '0000-00-00', 0, ''),
(26, 1, '', 'IISDML', 50000, 3500, '2024-06-02', '09:29:35', 'Pending', '', 0, '358', '0000-00-00', 0, ''),
(27, 1, '', 'Kusen77', 50000, 3500, '2024-06-02', '09:30:11', 'Pending', '', 0, '597', '0000-00-00', 0, ''),
(28, 1, '', 'Kusen77', 50000, 3500, '2024-06-02', '09:30:37', 'Pending', '', 0, '196', '0000-00-00', 0, ''),
(29, 1, '', 'IISDML', 50000, 3500, '2024-06-02', '09:31:04', 'Pending', '', 0, '085', '0000-00-00', 0, ''),
(30, 1, '', 'pejuangrupiah', 50000, 3500, '2024-06-02', '09:34:10', 'Pending', '', 0, '546', '0000-00-00', 0, ''),
(31, 2, '', 'cuan2024', 100000, 7500, '2024-06-02', '09:35:56', 'Pending', '', 0, '189', '0000-00-00', 0, ''),
(32, 1, '', 'cessilya16', 50000, 3500, '2024-06-02', '09:36:26', 'Pending', '', 0, '079', '0000-00-00', 0, ''),
(33, 1, '', 'Kenzie', 50000, 3500, '2024-06-02', '09:38:40', 'Pending', '', 0, '917', '0000-00-00', 0, ''),
(103, 2, '', 'aisyah', 100000, 7500, '2024-06-02', '11:19:43', 'Pending', '', 0, '427', '0000-00-00', 0, ''),
(104, 4, '', 'Anda', 580000, 21000, '2024-06-02', '11:21:49', 'Pending', '', 0, '783', '0000-00-00', 0, ''),
(105, 1, '', 'memek', 50000, 3500, '2024-06-02', '11:27:44', 'Pending', '', 0, '620', '0000-00-00', 0, ''),
(224, 2, 'SERVER 2', 'teukurizki', 100000, 7500, '2024-06-04', '06:36:10', 'Pending', '', 0, '013', '0000-00-00', 0, ''),
(102, 3, '', 'pian', 199000, 15000, '2024-06-02', '11:19:25', 'Active', '', 0, '785', '0000-00-00', 0, ''),
(55, 1, '', 'choiriya', 50000, 3500, '2024-06-02', '09:52:52', 'Pending', '', 0, '859', '0000-00-00', 0, ''),
(41, 1, '', 'Register', 50000, 3500, '2024-06-02', '09:40:33', 'Pending', '', 0, '462', '0000-00-00', 0, ''),
(222, 2, 'SERVER 2', 'melati6', 100000, 7500, '2024-06-03', '11:29:26', 'Pending', '', 0, '897', '0000-00-00', 0, ''),
(45, 1, '', 'Register', 50000, 3500, '2024-06-02', '09:40:55', 'Pending', '', 0, '658', '0000-00-00', 0, ''),
(106, 1, '', 'iblisneraka', 50000, 3500, '2024-06-02', '11:31:15', 'Pending', '', 0, '057', '0000-00-00', 0, ''),
(49, 1, '', 'Register', 50000, 3500, '2024-06-02', '09:41:06', 'Pending', '', 0, '257', '0000-00-00', 0, ''),
(220, 3, 'SERVER 3', 'ahlanxx', 199000, 15000, '2024-06-03', '11:26:54', 'Active', '', 0, '418', '0000-00-00', 0, ''),
(51, 1, '', 'Cuan', 50000, 3500, '2024-06-02', '09:42:00', 'Pending', '', 0, '394', '0000-00-00', 0, ''),
(52, 1, '', 'Register', 50000, 3500, '2024-06-02', '09:42:08', 'Pending', '', 0, '274', '0000-00-00', 0, ''),
(53, 4, '', 'Cuan', 580000, 21000, '2024-06-02', '09:42:21', 'Pending', '', 0, '041', '0000-00-00', 0, ''),
(54, 1, '', 'zeinluciver', 50000, 3500, '2024-06-02', '09:44:55', 'Pending', '', 0, '823', '0000-00-00', 0, ''),
(114, 1, '', 'SitiYuliana', 50000, 3500, '2024-06-02', '12:03:53', 'Pending', '', 0, '802', '0000-00-00', 0, ''),
(119, 2, '', 'Yuliaayunda', 100000, 7500, '2024-06-02', '12:30:37', 'Pending', '', 0, '430', '0000-00-00', 0, ''),
(116, 2, '', 'Ceka212', 100000, 7500, '2024-06-02', '12:16:41', 'Active', '', 0, '258', '0000-00-00', 0, ''),
(117, 2, '', 'royalminers', 100000, 7500, '2024-06-02', '12:21:01', 'Active', '', 0, '690', '0000-00-00', 0, ''),
(86, 1, '', 'Pencaricuan', 50000, 3500, '2024-06-02', '10:19:08', 'Pending', '', 0, '249', '0000-00-00', 0, ''),
(110, 1, '', 'Mario1922XL', 50000, 3500, '2024-06-02', '11:40:23', 'Pending', '', 0, '364', '0000-00-00', 0, ''),
(113, 1, '', 'Isan14', 50000, 3500, '2024-06-02', '11:52:16', 'Pending', '', 0, '968', '0000-00-00', 0, ''),
(74, 1, '', 'Lilin234', 50000, 3500, '2024-06-02', '10:03:19', 'Pending', '', 0, '092', '0000-00-00', 0, ''),
(101, 1, '', 'Septian', 50000, 3500, '2024-06-02', '11:15:12', 'Pending', '', 0, '573', '0000-00-00', 0, ''),
(120, 1, '', 'Babi1', 50000, 3500, '2024-06-02', '12:34:57', 'Pending', '', 0, '017', '0000-00-00', 0, ''),
(121, 1, '', 'Realisasi', 50000, 3500, '2024-06-02', '12:42:59', 'Pending', '', 0, '107', '0000-00-00', 0, ''),
(123, 1, 'SERVER 1', 'ALPANDI', 50000, 3500, '2024-06-02', '12:58:48', 'Pending', '', 0, '123', '0000-00-00', 0, ''),
(111, 3, '', 'Koko99', 199000, 15000, '2024-06-02', '11:41:31', 'Active', '', 0, '678', '0000-00-00', 0, ''),
(88, 3, '', 'Akram', 199000, 15000, '2024-06-02', '10:23:39', 'Active', '', 0, '538', '0000-00-00', 0, ''),
(112, 1, '', 'Abug', 50000, 3500, '2024-06-02', '11:44:51', 'Pending', '', 0, '150', '0000-00-00', 0, ''),
(90, 4, '', 'Bismo8', 580000, 21000, '2024-06-02', '10:35:42', 'Pending', '', 0, '078', '0000-00-00', 0, ''),
(122, 3, 'SERVER 3', '123', 199000, 15000, '2024-06-02', '12:58:17', 'Active', '', 0, '486', '0000-00-00', 0, ''),
(92, 1, '', 'Grdonx', 50000, 3500, '2024-06-02', '10:38:32', 'Pending', '', 0, '910', '0000-00-00', 0, ''),
(93, 1, '', 'Grdonx', 50000, 3500, '2024-06-02', '10:39:26', 'Pending', '', 0, '357', '0000-00-00', 0, ''),
(94, 1, '', 'Akasaqil', 50000, 3500, '2024-06-02', '10:41:23', 'Pending', '', 0, '967', '0000-00-00', 0, ''),
(95, 1, '', 'Jefri', 50000, 3500, '2024-06-02', '10:50:23', 'Pending', '', 0, '408', '0000-00-00', 0, ''),
(96, 2, '', 'Jason12', 100000, 7500, '2024-06-02', '11:04:00', 'Active', '', 0, '467', '0000-00-00', 0, ''),
(97, 3, '', 'Bebe', 199000, 15000, '2024-06-02', '11:05:24', 'Pending', '', 0, '783', '0000-00-00', 0, ''),
(98, 1, '', 'Kelvin17', 50000, 3500, '2024-06-02', '11:07:26', 'Pending', '', 0, '978', '0000-00-00', 0, ''),
(124, 1, 'SERVER 1', 'Asep07', 50000, 3500, '2024-06-02', '01:04:26', 'Pending', '', 0, '350', '0000-00-00', 0, ''),
(125, 1, 'SERVER 1', 'Asep07', 50000, 3500, '2024-06-02', '01:05:05', 'Pending', '', 0, '301', '0000-00-00', 0, ''),
(126, 1, 'SERVER 1', 'Asep07', 50000, 3500, '2024-06-02', '01:06:04', 'Pending', '', 0, '618', '0000-00-00', 0, ''),
(223, 1, 'SERVER 1', 'Fanny98', 50000, 3500, '2024-06-03', '11:59:36', 'Pending', '', 0, '426', '0000-00-00', 0, ''),
(127, 1, 'SERVER 1', 'Noviawan', 50000, 3500, '2024-06-02', '01:09:42', 'Pending', '', 0, '683', '0000-00-00', 0, ''),
(128, 3, 'SERVER 3', 'Berkah68', 199000, 15000, '2024-06-02', '01:13:30', 'Pending', '', 0, '750', '0000-00-00', 0, ''),
(129, 3, 'SERVER 3', 'Berkah68', 199000, 15000, '2024-06-02', '01:14:08', 'Pending', '', 0, '254', '0000-00-00', 0, ''),
(130, 1, 'SERVER 1', 'Noviawan', 50000, 3500, '2024-06-02', '01:14:19', 'Pending', '', 0, '285', '0000-00-00', 0, ''),
(161, 1, 'SERVER 1', 'hboyolali', 50000, 3500, '2024-06-02', '05:46:50', 'Pending', '', 0, '894', '0000-00-00', 0, ''),
(132, 3, 'SERVER 3', 'Berkah68', 199000, 15000, '2024-06-02', '01:24:21', 'Pending', '', 0, '432', '0000-00-00', 0, ''),
(133, 3, 'SERVER 3', 'Cuanfitri2024', 199000, 15000, '2024-06-02', '01:31:49', 'Active', '', 0, '321', '0000-00-00', 0, ''),
(134, 1, 'SERVER 1', 'Muhai', 50000, 3500, '2024-06-02', '01:34:23', 'Pending', '', 0, '274', '0000-00-00', 0, ''),
(135, 1, 'SERVER 1', 'Johan', 50000, 3500, '2024-06-02', '02:02:08', 'Pending', '', 0, '419', '0000-00-00', 0, ''),
(136, 1, 'SERVER 1', 'Gesrek', 50000, 3500, '2024-06-02', '02:26:15', 'Pending', '', 0, '768', '0000-00-00', 0, ''),
(137, 1, 'SERVER 1', 'Gesrek', 50000, 3500, '2024-06-02', '02:42:12', 'Pending', '', 0, '978', '0000-00-00', 0, ''),
(138, 1, 'SERVER 1', 'Nandar3', 50000, 3500, '2024-06-02', '03:03:42', 'Pending', '', 0, '854', '0000-00-00', 0, ''),
(219, 1, 'SERVER 1', 'Ppp', 50000, 3500, '2024-06-03', '10:32:32', 'Pending', '', 0, '802', '0000-00-00', 0, ''),
(229, 2, 'SERVER 2', 'Syaiful76', 100000, 7500, '2024-06-04', '02:07:11', 'Active', '', 0, '806', '0000-00-00', 0, ''),
(143, 1, 'SERVER 1', 'Andi', 50000, 3500, '2024-06-02', '03:54:35', 'Active', '', 0, '021', '0000-00-00', 0, ''),
(221, 2, 'SERVER 2', 'gusamsudin', 100000, 7500, '2024-06-03', '11:28:38', 'Pending', '', 0, '087', '0000-00-00', 0, ''),
(165, 1, 'SERVER 1', 'Nurmayanti', 50000, 3500, '2024-06-02', '06:23:11', 'Pending', '', 0, '103', '0000-00-00', 0, ''),
(146, 1, 'SERVER 1', 'Yogi90', 50000, 3500, '2024-06-02', '04:08:09', 'Pending', '', 0, '560', '0000-00-00', 0, ''),
(147, 1, 'SERVER 1', 'simbolo', 50000, 3500, '2024-06-02', '04:16:14', 'Pending', '', 0, '384', '0000-00-00', 0, ''),
(148, 2, 'SERVER 2', 'emakra2', 100000, 7500, '2024-06-02', '04:16:28', 'Active', '', 0, '549', '0000-00-00', 0, ''),
(149, 3, 'SERVER 3', '123', 199000, 15000, '2024-06-02', '04:24:58', 'Pending', '', 0, '537', '0000-00-00', 0, ''),
(150, 1, 'SERVER 1', 'Unooaja123', 50000, 3500, '2024-06-02', '04:29:00', 'Pending', '', 0, '189', '0000-00-00', 0, ''),
(151, 1, 'SERVER 1', 'Kaspul123', 50000, 3500, '2024-06-02', '04:49:42', 'Pending', '', 0, '308', '0000-00-00', 0, ''),
(152, 1, 'SERVER 1', 'mamin', 50000, 3500, '2024-06-02', '04:57:40', 'Pending', '', 0, '284', '0000-00-00', 0, ''),
(153, 3, 'SERVER 3', 'stella', 199000, 15000, '2024-06-02', '05:02:26', 'Active', '', 0, '145', '0000-00-00', 0, ''),
(162, 1, 'SERVER 1', 'hboyolali', 50000, 3500, '2024-06-02', '05:47:33', 'Pending', '', 0, '924', '0000-00-00', 0, ''),
(163, 1, 'SERVER 1', 'Christina', 50000, 3500, '2024-06-02', '06:02:21', 'Pending', '', 0, '265', '0000-00-00', 0, ''),
(217, 1, 'SERVER 1', 'Ppp', 50000, 3500, '2024-06-03', '10:28:43', 'Pending', '', 0, '749', '0000-00-00', 0, ''),
(160, 4, 'SERVER 4', 'dante', 580000, 21000, '2024-06-02', '05:17:47', 'Pending', '', 0, '729', '0000-00-00', 0, ''),
(166, 3, 'SERVER 3', 'padangmimin@gmail.com', 199000, 15000, '2024-06-02', '06:34:31', 'Pending', '', 0, '751', '0000-00-00', 0, ''),
(167, 1, 'SERVER 1', 'padangmimin@gmail.com', 50000, 3500, '2024-06-02', '06:36:51', 'Pending', '', 0, '560', '0000-00-00', 0, ''),
(170, 1, 'SERVER 1', 'Yudi', 50000, 3500, '2024-06-02', '09:08:57', 'Pending', '', 0, '468', '0000-00-00', 0, ''),
(174, 2, 'SERVER 2', 'vera', 100000, 7500, '2024-06-02', '10:02:06', 'Active', '', 0, '104', '0000-00-00', 0, ''),
(175, 1, 'SERVER 1', 'Sudarmanto22', 50000, 3500, '2024-06-02', '10:49:05', 'Active', '', 0, '973', '0000-00-00', 0, ''),
(176, 2, 'SERVER 2', '123', 100000, 7500, '2024-06-03', '12:13:56', 'Pending', '', 0, '736', '0000-00-00', 0, ''),
(177, 1, 'SERVER 1', 'joko22083@gmail.com', 50000, 3500, '2024-06-03', '06:24:33', 'Pending', '', 0, '137', '0000-00-00', 0, ''),
(178, 1, 'SERVER 1', 'Baron', 50000, 3500, '2024-06-03', '09:09:35', 'Pending', '', 0, '671', '0000-00-00', 0, ''),
(179, 1, 'SERVER 1', 'Baron', 50000, 3500, '2024-06-03', '09:20:07', 'Pending', '', 0, '160', '0000-00-00', 0, ''),
(180, 3, 'SERVER 3', 'kevin123', 199000, 15000, '2024-06-03', '11:16:03', 'Pending', '', 0, '208', '0000-00-00', 0, ''),
(181, 1, 'SERVER 1', 'joko22083@gmail.com', 50000, 3500, '2024-06-03', '11:24:11', 'Pending', '', 0, '190', '0000-00-00', 0, ''),
(192, 3, 'SERVER 3', 'vera', 199000, 15000, '2024-06-03', '12:59:27', 'Pending', '', 0, '163', '0000-00-00', 0, ''),
(218, 3, 'SERVER 3', 'Ppp', 199000, 15000, '2024-06-03', '10:31:13', 'Pending', '', 0, '739', '0000-00-00', 0, ''),
(211, 1, 'SERVER 1', 'Rizki08', 50000, 3500, '2024-06-03', '07:33:47', 'Pending', '', 0, '416', '0000-00-00', 0, ''),
(212, 1, 'SERVER 1', 'Afif08', 50000, 3500, '2024-06-03', '07:45:04', 'Pending', '', 0, '460', '0000-00-00', 0, ''),
(186, 2, 'SERVER 2', 'm.haris', 100000, 7500, '2024-06-03', '12:00:23', 'Active', '', 0, '145', '0000-00-00', 0, ''),
(187, 1, 'SERVER 1', 'Lendra', 50000, 3500, '2024-06-03', '12:03:23', 'Pending', '', 0, '694', '0000-00-00', 0, ''),
(193, 1, 'SERVER 1', 'totoxs', 50000, 3500, '2024-06-03', '01:27:14', 'Pending', '', 0, '278', '0000-00-00', 0, ''),
(194, 2, 'SERVER 2', 'Nadifa', 100000, 7500, '2024-06-03', '01:33:32', 'Pending', '', 0, '248', '0000-00-00', 0, ''),
(197, 3, 'SERVER 3', 'okinawa', 199000, 15000, '2024-06-03', '03:03:07', 'Pending', '', 0, '961', '0000-00-00', 0, ''),
(209, 2, 'SERVER 2', 'Syaiful76', 100000, 7500, '2024-06-03', '05:18:11', 'Active', '', 0, '972', '0000-00-00', 0, ''),
(213, 1, 'SERVER 1', 'Afif08', 50000, 3500, '2024-06-03', '07:46:47', 'Active', '', 0, '498', '0000-00-00', 0, ''),
(201, 3, 'SERVER 3', 'Elisa', 199000, 15000, '2024-06-03', '03:10:07', 'Active', '', 0, '046', '0000-00-00', 0, ''),
(215, 2, 'SERVER 2', 'Suci', 100000, 7500, '2024-06-03', '09:57:10', 'Active', '', 0, '835', '0000-00-00', 0, ''),
(203, 2, 'SERVER 2', 'Adihmul', 100000, 7500, '2024-06-03', '03:13:08', 'Active', '', 0, '245', '0000-00-00', 0, ''),
(232, 2, 'SERVER 2', 'veronica77', 100000, 7500, '2024-06-04', '03:39:20', 'Pending', '', 0, '842', '0000-00-00', 0, ''),
(214, 1, 'SERVER 1', 'Afif08', 50000, 3500, '2024-06-03', '07:49:02', 'Pending', '', 0, '721', '0000-00-00', 0, ''),
(206, 2, 'SERVER 2', 'Andi', 100000, 7500, '2024-06-03', '04:16:59', 'Pending', '', 0, '652', '0000-00-00', 0, ''),
(207, 1, 'SERVER 1', 'Mia', 50000, 3500, '2024-06-03', '04:32:48', 'Pending', '', 0, '156', '0000-00-00', 0, ''),
(231, 1, 'SERVER 1', '147258369', 50000, 3500, '2024-06-04', '02:50:24', 'Pending', '', 0, '265', '0000-00-00', 0, ''),
(228, 2, 'SERVER 2', 'Gun05', 100000, 7500, '2024-06-04', '02:03:17', 'Active', '', 0, '486', '0000-00-00', 0, ''),
(233, 3, 'SERVER 3', 'veronica77', 199000, 15000, '2024-06-04', '03:39:26', 'Pending', '', 0, '670', '0000-00-00', 0, ''),
(234, 1, 'SERVER 1', 'veronica77', 50000, 3500, '2024-06-04', '03:39:32', 'Pending', '', 0, '362', '0000-00-00', 0, ''),
(252, 5, 'SERVER 5', 'Ozie', 1099000, 39500, '2024-06-05', '09:35:43', 'Active', '', 0, '538', '0000-00-00', 0, ''),
(236, 2, 'SERVER 2', 'Khalisa', 100000, 7500, '2024-06-04', '05:35:49', 'Pending', '', 0, '078', '0000-00-00', 0, ''),
(237, 2, 'SERVER 2', 'Khalisa', 100000, 7500, '2024-06-04', '05:37:01', 'Pending', '', 0, '473', '0000-00-00', 0, ''),
(238, 1, 'SERVER 1', 'Khalisa', 50000, 3500, '2024-06-04', '05:37:50', 'Pending', '', 0, '124', '0000-00-00', 0, ''),
(239, 2, 'SERVER 2', 'Khalisa', 100000, 7500, '2024-06-04', '05:39:54', 'Pending', '', 0, '342', '0000-00-00', 0, ''),
(240, 2, 'SERVER 2', 'Andi', 100000, 7500, '2024-06-04', '06:05:01', 'Pending', '', 0, '846', '0000-00-00', 0, ''),
(241, 1, 'SERVER 1', 'Akasaqil', 50000, 3500, '2024-06-04', '08:01:53', 'Pending', '', 0, '034', '0000-00-00', 0, ''),
(242, 1, 'SERVER 1', 'Riana0302', 50000, 3500, '2024-06-04', '09:52:32', 'Pending', '', 0, '502', '0000-00-00', 0, ''),
(243, 2, 'SERVER 2', 'Berkah68', 100000, 7500, '2024-06-04', '10:51:01', 'Pending', '', 0, '635', '0000-00-00', 0, ''),
(244, 2, 'SERVER 2', 'Berkah68', 100000, 7500, '2024-06-04', '10:53:57', 'Pending', '', 0, '967', '0000-00-00', 0, ''),
(245, 2, 'SERVER 2', 'Berkah68', 100000, 7500, '2024-06-04', '10:55:10', 'Pending', '', 0, '796', '0000-00-00', 0, ''),
(246, 2, 'SERVER 2', 'Berkah68A', 100000, 7500, '2024-06-04', '11:14:12', 'Active', '', 0, '578', '0000-00-00', 0, ''),
(248, 1, 'SERVER 1', 'Aida01', 50000, 3500, '2024-06-05', '06:47:57', 'Active', '', 0, '231', '0000-00-00', 0, ''),
(249, 2, 'SERVER 2', 'teukurizki', 100000, 7500, '2024-06-05', '08:28:48', 'Pending', '', 0, '613', '0000-00-00', 0, ''),
(250, 2, 'SERVER 2', 'teukurizki', 100000, 7500, '2024-06-05', '08:28:49', 'Pending', '', 0, '098', '0000-00-00', 0, ''),
(251, 2, 'SERVER 2', 'teukurizki', 100000, 7500, '2024-06-05', '08:28:49', 'Pending', '', 0, '456', '0000-00-00', 0, ''),
(254, 5, 'SERVER 5', 'Ozie', 1099000, 39500, '2024-06-05', '10:03:13', 'Pending', '', 0, '709', '0000-00-00', 0, ''),
(255, 3, 'SERVER 3', 'User01', 199000, 15000, '2024-06-05', '12:30:34', 'Pending', '', 0, '940', '0000-00-00', 0, ''),
(256, 10, 'SERVER 10', 'User01', 7350000, 264600, '2024-06-05', '12:32:36', 'Pending', '', 0, '652', '0000-00-00', 0, ''),
(257, 9, 'SERVER 9', 'User01', 5200000, 189000, '2024-06-05', '12:33:01', 'Pending', '', 0, '269', '0000-00-00', 0, ''),
(258, 1, 'SERVER 1', 'pnzyy', 50000, 3500, '2024-06-05', '12:44:42', 'Pending', '', 0, '693', '0000-00-00', 0, ''),
(259, 2, 'SERVER 2', 'Aida01', 100000, 7500, '2024-06-05', '01:01:17', 'Active', '', 0, '983', '0000-00-00', 0, ''),
(260, 3, 'SERVER 3', 'Ratucuan24', 199000, 15000, '2024-06-05', '01:28:12', 'Pending', '', 0, '203', '0000-00-00', 0, ''),
(261, 3, 'SERVER 3', 'Dina', 199000, 15000, '2024-06-05', '01:38:33', 'Pending', '', 0, '389', '0000-00-00', 0, ''),
(262, 1, 'SERVER 1', 'Anda', 50000, 3500, '2024-06-05', '02:00:55', 'Pending', '', 0, '892', '0000-00-00', 0, ''),
(263, 2, 'SERVER 2', 'Monalisa', 100000, 7500, '2024-06-05', '03:43:21', 'Pending', '', 0, '213', '0000-00-00', 0, ''),
(264, 8, 'SERVER 8', 'User01', 4600000, 165600, '2024-06-05', '06:27:02', 'Pending', '', 0, '817', '0000-00-00', 0, ''),
(265, 7, 'SERVER 7', 'User01', 2800000, 100800, '2024-06-05', '06:27:34', 'Pending', '', 0, '386', '0000-00-00', 0, ''),
(266, 6, 'SERVER 6', 'User01', 1750000, 63000, '2024-06-05', '06:28:01', 'Pending', '', 0, '432', '0000-00-00', 0, ''),
(267, 10, 'SERVER 10', 'Kontolodon123', 7350000, 264600, '2024-06-05', '06:37:30', 'Pending', '', 0, '890', '0000-00-00', 0, ''),
(268, 9, 'SERVER 9', 'Kontolodon123', 5200000, 189000, '2024-06-05', '06:37:44', 'Pending', '', 0, '873', '0000-00-00', 0, ''),
(269, 8, 'SERVER 8', 'Kontolodon123', 4600000, 165600, '2024-06-05', '06:37:57', 'Pending', '', 0, '069', '0000-00-00', 0, ''),
(270, 7, 'SERVER 7', 'Kontolodon123', 2800000, 100800, '2024-06-05', '06:38:12', 'Pending', '', 0, '736', '0000-00-00', 0, ''),
(271, 6, 'SERVER 6', 'Kontolodon123', 1750000, 63000, '2024-06-05', '06:38:28', 'Pending', '', 0, '495', '0000-00-00', 0, ''),
(272, 5, 'SERVER 5', 'Kontolodon123', 1099000, 39500, '2024-06-05', '06:38:42', 'Pending', '', 0, '317', '0000-00-00', 0, ''),
(273, 2, 'SERVER 2', 'Syaiful76', 100000, 7500, '2024-06-05', '06:46:24', 'Pending', '', 0, '630', '0000-00-00', 0, ''),
(274, 2, 'SERVER 2', 'Syaiful76', 100000, 7500, '2024-06-05', '06:53:59', 'Active', '', 0, '542', '0000-00-00', 0, ''),
(275, 1, 'SERVER 1', 'Lulut', 50000, 3500, '2024-06-05', '09:46:26', 'Pending', '', 0, '418', '0000-00-00', 0, ''),
(276, 1, 'SERVER 1', 'kikiisa', 50000, 3500, '2024-06-29', '03:25:46', 'Pending', '', 0, '923', '0000-00-00', 0, ''),
(277, 1, 'SERVER 1', 'kikiisa', 50000, 3500, '2024-06-29', '03:27:11', 'Pending', '', 0, '682', '0000-00-00', 0, ''),
(278, 6, 'SERVER 6', 'kikiisa', 1750000, 63000, '2024-06-29', '03:28:43', 'Pending', '', 0, '890', '0000-00-00', 0, ''),
(279, 1, 'SERVER 1', 'kikiisa', 50000, 3500, '2024-06-29', '03:42:39', 'Pending', '', 0, '521', '0000-00-00', 0, ''),
(280, 3, 'SERVER 3', 'kikiisa', 199000, 15000, '2024-06-29', '03:44:09', 'Pending', '', 0, '967', '0000-00-00', 0, ''),
(281, 10, 'SERVER 10', 'kikiisa', 7350000, 264600, '2024-06-29', '03:44:24', 'Pending', '', 0, '407', '0000-00-00', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `deposit_package`
--

CREATE TABLE `deposit_package` (
  `id_package` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `sub_title` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `max_income` int(11) NOT NULL,
  `min_withdraw` double NOT NULL,
  `limit_to_share` int(11) NOT NULL,
  `comission` varchar(30) NOT NULL,
  `total_comission` bigint(20) NOT NULL,
  `periode` int(11) NOT NULL,
  `views` int(11) NOT NULL,
  `toko` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deposit_package`
--

INSERT INTO `deposit_package` (`id_package`, `title`, `sub_title`, `amount`, `package_name`, `file`, `max_income`, `min_withdraw`, `limit_to_share`, `comission`, `total_comission`, `periode`, `views`, `toko`) VALUES
(1, 'SERVER 1', 'SERVER 1', 50000, 'SERVER 1', 'https://ik.imagekit.io/bqo7pjket/Produk/1.png?updatedAt=1719290139617', 0, 100000, 1, '3500', 0, 20, 0, 'C'),
(2, 'SERVER 2', 'SERVER 2', 100000, 'SERVER 2', 'https://ik.imagekit.io/bqo7pjket/Produk/2.png?updatedAt=1719290139230', 0, 100000, 1, '7500', 0, 20, 0, 'C'),
(3, 'SERVER 3', 'SERVER 3', 199000, 'SERVER 3', 'https://ik.imagekit.io/bqo7pjket/Produk/3.png?updatedAt=1719290148844', 0, 100000, 1, '15000', 0, 20, 0, 'C'),
(4, 'SERVER 4', 'SERVER 4', 580000, 'SERVER 4', 'https://ik.imagekit.io/bqo7pjket/Produk/4.png?updatedAt=1719290151089', 0, 100000, 1, '21000', 0, 45, 0, 'C'),
(5, 'SERVER 5', 'SERVER 5', 1099000, 'SERVER 5', 'https://ik.imagekit.io/bqo7pjket/Produk/5.png?updatedAt=1719290147096', 0, 100000, 1, '39500', 0, 55, 0, 'C'),
(6, 'SERVER 6', 'SERVER 6', 1750000, 'SERVER 6', 'https://ik.imagekit.io/bqo7pjket/Produk/6.png?updatedAt=1719290139325', 0, 100000, 1, '63000', 0, 55, 0, 'C'),
(7, 'SERVER 7', 'SERVER 7', 2800000, 'SERVER 7', 'https://ik.imagekit.io/bqo7pjket/Produk/7.png?updatedAt=1719290149756', 0, 100000, 1, '100800', 0, 55, 0, 'C'),
(8, 'SERVER 8', 'SERVER 8', 4600000, 'SERVER 8', 'https://ik.imagekit.io/bqo7pjket/Produk/8.png?updatedAt=1719290145854', 0, 100000, 1, '165600', 0, 55, 0, 'C'),
(9, 'SERVER 9', 'SERVER 9', 5200000, 'SERVER 9', 'https://ik.imagekit.io/bqo7pjket/Produk/9.png?updatedAt=1719290151358', 0, 100000, 1, '189000', 0, 55, 0, 'C'),
(10, 'SERVER 10', 'SERVER 10', 7350000, 'SERVER 10', 'https://ik.imagekit.io/bqo7pjket/Produk/10.png?updatedAt=1719290151656', 0, 100000, 1, '264600', 0, 55, 0, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `file_mission`
--

CREATE TABLE `file_mission` (
  `id_file` int(11) NOT NULL,
  `id_mission` int(11) NOT NULL,
  `id_package` int(11) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mission`
--

CREATE TABLE `mission` (
  `id_mission` int(11) NOT NULL,
  `id_package` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id_news`, `title`, `content`, `date`) VALUES
(7, 'SELAMAT BERGABUNG DI PLATFORM JANGKA PANJANG', 'SELAMAT BERGABUNG DI PLATFORM JANGKA PANJANG', '2023-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `code`, `account`, `name`) VALUES
(1, 'BCA', '27777081543349412', '-'),
(2, 'BNI', '9011081543349412', '-'),
(3, 'BRI', '77778081543349412', '-'),
(4, 'MANDIRI', '77771081543349412', '-'),
(5, 'CIMB', '7939081543349412', '-');

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `id` bigint(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `note` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reward`
--

INSERT INTO `reward` (`id`, `uname`, `amount`, `date_created`, `time_created`, `note`, `status`) VALUES
(1, 'Jason12', 24000, '2024-06-02', '12:01:57', 'reward', 'Success'),
(2, 'pian', 18000, '2024-06-02', '12:07:16', 'reward', 'Success'),
(3, 'Amelaudia', 24000, '2024-06-02', '12:13:06', 'reward', 'Success'),
(4, 'royalminers', 24000, '2024-06-02', '12:22:30', 'reward', 'Success'),
(5, 'Mira1990', 24800, '2024-06-02', '12:47:41', 'reward', 'Success'),
(6, 'vera', 15000, '2024-06-03', '12:21:38', 'reward', 'Success'),
(7, 'vera', 15000, '2024-06-03', '04:27:45', 'reward', 'Success'),
(8, 'vera', 35000, '2024-06-03', '04:48:13', 'reward', 'Success'),
(9, 'vera', 15000, '2024-06-03', '05:32:58', 'reward', 'Success'),
(10, 'pian', 5000, '2024-06-03', '08:01:19', 'reward', 'Success'),
(11, 'Syaiful76', 10000, '2024-06-04', '02:11:22', 'reward', 'Success'),
(12, 'Gun05', 10000, '2024-06-04', '02:35:22', 'reward', 'Success'),
(13, 'vera', 30000, '2024-06-04', '02:38:32', 'reward', 'Success'),
(14, 'Berkah68A', 10000, '2024-06-04', '11:29:09', 'reward', 'Success'),
(15, 'vera', 15000, '2024-06-04', '11:31:26', 'reward', 'Success'),
(16, 'stella', 19900, '2024-06-05', '01:00:47', 'reward', 'Success'),
(17, 'Aida01', 5000, '2024-06-05', '08:54:30', 'reward', 'Success'),
(18, 'vera', 5000, '2024-06-05', '08:54:49', 'reward', 'Success'),
(19, 'vera', 109900, '2024-06-05', '10:35:19', 'reward', 'Success'),
(20, 'vera', 10000, '2024-06-05', '01:10:44', 'reward', 'Success'),
(21, 'Aida01', 10000, '2024-06-05', '06:01:24', 'reward', 'Success'),
(22, 'Syaiful76', 10000, '2024-06-05', '07:07:24', 'reward', 'Success'),
(23, 'vera', 10000, '2024-06-05', '07:12:16', 'reward', 'Success');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `daily_profit` double NOT NULL,
  `wallet_acc_admin` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `daily_profit`, `wallet_acc_admin`) VALUES
(1, 1.5, 'https://dashlite.net/?ref=4945KD48');

-- --------------------------------------------------------

--
-- Table structure for table `setting_wd`
--

CREATE TABLE `setting_wd` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `setting_wd`
--

INSERT INTO `setting_wd` (`id`, `status`) VALUES
(1, 'Enable');

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `id` int(11) NOT NULL,
  `id_depo_fk` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_c` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`id`, `id_depo_fk`, `username`, `date_c`) VALUES
(61, 88, 'Akram', '2024-06-05'),
(63, 117, 'royalminers', '2024-06-05'),
(3, 133, 'Cuanfitri2024', '2024-06-02'),
(58, 116, 'Ceka212', '2024-06-05'),
(50, 153, 'stella', '2024-06-05'),
(62, 252, 'Ozie', '2024-06-05'),
(47, 111, 'Koko99', '2024-06-05'),
(56, 96, 'Jason12', '2024-06-05'),
(53, 148, 'emakra2', '2024-06-05'),
(55, 102, 'pian', '2024-06-05'),
(64, 259, 'Aida01', '2024-06-05'),
(57, 174, 'vera', '2024-06-05'),
(48, 203, 'Adihmul', '2024-06-05'),
(54, 100, 'Amelaudia', '2024-06-05'),
(60, 186, 'm.haris', '2024-06-05'),
(49, 220, 'ahlanxx', '2024-06-05'),
(69, 215, 'Suci', '2024-06-05'),
(59, 213, 'Afif08', '2024-06-05'),
(51, 246, 'Berkah68A', '2024-06-05'),
(52, 228, 'Gun05', '2024-06-05'),
(65, 248, 'Aida01', '2024-06-05'),
(66, 229, 'Syaiful76', '2024-06-05'),
(67, 209, 'Syaiful76', '2024-06-05'),
(68, 274, 'Syaiful76', '2024-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `reff_code` varchar(200) NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `full_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(100) NOT NULL,
  `bank` varchar(200) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `foto` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `level_login` varchar(100) NOT NULL,
  `ref_gen_1` varchar(100) NOT NULL,
  `ref_gen_2` varchar(200) NOT NULL,
  `ref_gen_3` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `status_account` varchar(100) NOT NULL,
  `id_package` int(11) NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `pwdrecov` varchar(200) NOT NULL,
  `saldo_reward` int(11) NOT NULL,
  `saldo_min` int(11) NOT NULL,
  `status_agen` varchar(50) NOT NULL,
  `agen` varchar(20) NOT NULL,
  `qr` varchar(100) NOT NULL,
  `date_active` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `reff_code`, `password`, `full_name`, `phone`, `bank`, `account_number`, `foto`, `level_login`, `ref_gen_1`, `ref_gen_2`, `ref_gen_3`, `date_created`, `status_account`, `id_package`, `holder_name`, `pwdrecov`, `saldo_reward`, `saldo_min`, `status_agen`, `agen`, `qr`, `date_active`) VALUES
(1, 'royal_admin', 'xsy', 'admin123', 'Admin', '08539627634', 'BRI', '', '', 'admin', 'XXA', '', '', '0000-00-00', 'active', 0, '', '888061', 0, 0, '', '', '', '0000-00-00'),
(1262, 'kikiisa', 'kikCJ7', 'e85fcf070f7370eb842ff9cbeb0620952cc948309721a66dae04613a6d42db45e87b10e2558448f04d7b9f6ee3ae1b56195374cfcd3bca6eb4d8bc57fdc3c073', '', '08239340833', '', '', '', 'user', 'JujbZe', 'xsy', '441P2', '2024-06-24', 'active', 0, '', 'kikiisaipk4', 1000000, 1000000, '', '', '', '0000-00-00'),
(2, '123', 'JujbZe', '3e39b3844837bdefc8017fbcb386ea302af877fb17baa09d0a1bd34b67bbf2b34fba314bbcab450f5f3f73771b7aea956ba3320defda029723f4fdff7dfa007b', '', '098878908', 'BCA', '123', '', 'user', 'xsy', '441P2', '345', '2022-11-22', 'active', 0, 'TEst', '123', 0, 0, 'Agen', 'Senior', 'Juju6.png', '2024-06-01'),
(1261, 'Lulut', 'Lulbzk', 'a72f5410b0a4862942b68036769caf6ce2dc78ac3ccdf5925e85543e551171d44acc8f4fe1ac541a0b3dac32552745ce5c23b4f6ff676411389f0d30336debdf', '', '083832745118', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', '250501', 0, 0, '', '', '', '0000-00-00'),
(1260, 'Rendi', 'Renouv', '8b1fb1553020e604c272716379d90a99162263cf6e2076515f8dc1835fea2d3c3d3a9cbf88819c462a6c869f5dcde03d453cb704f6a793cd37a6fd2f474ac6cf', '', '085817961795', 'Dana', '08889025140', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-05', 'active', 0, 'rendi', 'renal123', 0, 0, '', '', '', '0000-00-00'),
(1259, 'nitasafira274@gmail.com', 'nityOR', '2363bfea37dd4368f4e24ecae3f819b9555b4b01c915a541eb94ecb5d91e826905a175f0db72de11d7f4f25dd96551ec1c3d2d4f68dafe5092ce4300df0d47ca', '', '083131887788', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', 'choiri86', 0, 0, '', '', '', '0000-00-00'),
(1258, 'Sahwan77', 'SahHrZ', '1f47eaca1047ea50fc2ea4661e7ccf7142fc68f9d4b6771cfecc21f2b989ef135b0db60d78457bf4168aa42eef668eccafccf0ef49fd93948ae6116e19f2254a', '', '087863950289', '', '', '', 'user', 'AidZlm', 'ver930', 'pnzKsN', '2024-06-05', 'active', 0, '', 'zepa1234', 0, 0, '', '', '', '0000-00-00'),
(1257, 'Kontolodon123', 'KonF0I', '5d50b28efc915de81d43414461151a408c90defe72cb5d505ad40cd804efebc0b3f4a0ff98ed65dfea60786783eaa06c2378437d3f0eb4a49e1d2ce6c929ca36', '', '08300000300000', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-05', 'active', 0, '', 'tolol14', 0, 0, '', '', '', '0000-00-00'),
(1256, 'RandhR', 'Ran5A3', '409657acfcc67de3500c67324077f350fc2fb23f328f03859f25b7ecb3cef76fb5017b358589786138365821f28fe9e20d04b28df16f300639f56aa5ae91557b', '', '081283983684', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-05', 'active', 0, '', 'Sen$en09', 0, 0, '', '', '', '0000-00-00'),
(1255, 'Sipur99', 'Sipvu4', '634f5c6678ad28e5064e6baa54a3325fc9f304d39222dcaea2afacc2acce26798ba23f10908cad9be79493b333798d5c5f678a576bf13199965eeb69dbc62b38', '', '882008435379', 'Dana', '0882008435379', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-05', 'active', 0, 'Sipur', 'qwerty123', 0, 0, '', '', '', '0000-00-00'),
(1254, 'MiftahYusup', 'MifJ7H', '940be6ec0d871a2ee4224ee6469a1792e6b8f92fab2a9adb69f1eaa64d90651f8352ec19f97b75b19b1e6b1d1c7cf4312ce97a7a92a3be3f506813f4edd75622', '', '082213664504', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-05', 'active', 0, '', 'Naga6789', 0, 0, '', '', '', '0000-00-00'),
(1253, 'ika\\\'85', 'ika0Gg', '34a724c3da4d1b4d67fd187a8ab7f4be94638629131237576213ceec6e35ac538b2e79c9e7b5621b90deaca0f379354fb9a7dd31dddb4685397814c81264e9b3', '', '82141444646', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', '252525', 0, 0, '', '', '', '0000-00-00'),
(1252, 'yangyangrohmatillah', 'yanST2', '9e0e7d89fef4915f06d76ecf6f207e8d5f5be5fd602c8ef087ebfae8fa0defc1d609ddfefa2ba8178bdab55dae4976ced369022b327dbc23096ce12f2263b511', '', '085934915887', '', '', '', 'user', 'AdiOFG', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', 'pancasura12', 0, 0, '', '', '', '0000-00-00'),
(1251, 'Rendiprtm', 'RenxQN', 'e65cf99ae53e2c447ef50aba6fceb3d4d468bbfea19a4a43c2c3b1a4cb2af355c18b71c6b0a4aeef90609cee03b6a13baf562dfb56eeb25d26e5252377ab64ca', '', '081990349077', 'Ovo', '081990349077', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-05', 'active', 0, 'Rendi Pratama', '1234', 0, 0, '', '', '', '0000-00-00'),
(1250, 'Ryu', 'RyuwlN', '3a7708d82b57e44d1e8a3f470d03c65fac3ba96f810cce0e84c648851b87683c2810c2c683906c9b4ceef9f76370c765021e1588bae36f27cd81eb32cb23b01b', '', '081313640352', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', '456789', 0, 0, '', '', '', '0000-00-00'),
(1249, 'Nicko100', 'Nic7Z8', '05e969373712bf740d1f43e6b1fefb5a463f8bbe042d03ffab7126aa3b0f1ef12648ae9c77e60efd50dddf88dcd7a6eb12647948ca4286d5b9e5a0945d98ea3f', '', '085732289358', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-05', 'active', 0, '', 'Nicko123', 0, 0, '', '', '', '0000-00-00'),
(1248, 'Shodiq11', 'ShoK5l', '6dafac16c71ef6855c4e3df0ef579d78a7c95d99e580f51cc6ac575fd32bda5e1eff6c67aaa7fced5a588bb28a1e08190f041fd1b33a495940dfbc94c23b165c', '', '87795124368', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', 'Valentino46', 0, 0, '', '', '', '0000-00-00'),
(1247, 'Naruto', 'Nar0gO', '74e8dd1978beb95d00d8d296cff12d680224e061b6ecd9f9681b3091e34570218a823ba6f3f866d547738951ace7549de0db8b51289c0c4d219d0a68adb19717', '', '083872606001', '', '', '', 'user', 'RatynH', 'AndUy6', 'JujbZe', '2024-06-05', 'active', 0, '', 'bangkitu', 0, 0, '', '', '', '0000-00-00'),
(1246, 'Sahrull003', 'SaholJ', '356a940c302bde04cf62e935e5d27d87cbcc09b2d82d50a9bb7aa74e8df1d11402231e2fc12055d85d73788e34437e88a1a440bbbb082db4a085ab0b1bb3066e', '', '083813792229', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-05', 'active', 0, '', 'Sayang', 0, 0, '', '', '', '0000-00-00'),
(1245, 'Ratucuan24', 'RatynH', '53fb860b6e934e38477f6df6d7664f6a5c4124b5fb9f8c88d8efab6eb9e8cd081c995fe14354f18016a72324129150ba066a15e5899b08b94922e7561bf29691', '', '08124407998123', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-05', 'active', 0, '', 'abc123', 0, 0, '', '', '', '0000-00-00'),
(1244, 'RatuOrde99', 'RatgEK', '53fb860b6e934e38477f6df6d7664f6a5c4124b5fb9f8c88d8efab6eb9e8cd081c995fe14354f18016a72324129150ba066a15e5899b08b94922e7561bf29691', '', '081244098675', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-05', 'active', 0, '', 'abc123', 0, 0, '', '', '', '0000-00-00'),
(1243, 'RatuOrde', 'RatOrm', '53fb860b6e934e38477f6df6d7664f6a5c4124b5fb9f8c88d8efab6eb9e8cd081c995fe14354f18016a72324129150ba066a15e5899b08b94922e7561bf29691', '', '081244098675', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-05', 'active', 0, '', 'abc123', 0, 0, '', '', '', '0000-00-00'),
(1242, 'Budi0758', 'BudW0N', 'aba44a410bb5dfb17131242ac81910b1fa96da2b5f700408e3da77310b7c6cb4c1cc200f423f6d6824a1b19f5523366dd039a311c5d528a874dd595a7229d4cf', '', '081361723831', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', 'Athaya02', 0, 0, '', '', '', '0000-00-00'),
(1241, 'Amien', 'AmiPK8', '66dd4a34e71f06397e56b99a78ff14643860a854d57e2d1a52d54a18f3032d71e89cc8d8afd6efab1ed702a8934e91785857c5db6095717f25dd992be492c1b7', '', '+6287888020010', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-05', 'active', 0, '', 'Indonesia519', 0, 0, '', '', '', '0000-00-00'),
(1240, 'Mutiarahmi', 'MutyFq', '87749821ef5db55c1e1dcef620272f0f52d28303815e84fc9620ce092eb350270ba63e1c479222e5c2e73ab8af1dbc6a4eb7df52fbdfcc015c5617fdf311d6a2', '', '082261353556', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', '250290', 0, 0, '', '', '', '0000-00-00'),
(1239, 'Bjboyz23', 'Bjbv8Q', 'bbd498323a55b55b5fefe7cc55f197d02bc7ef84f5cf02753dffe835f5b7289e0f1cb5ee6e1a0c1644839faa46723f6267ab2fe2a88e6f0764d8d5ec8f303f90', '', '82126781689', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-05', 'active', 0, '', '230192', 0, 0, '', '', '', '0000-00-00'),
(1238, 'Dinnie', 'Din09k', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '081111119211', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', '123456', 0, 0, '', '', '', '0000-00-00'),
(1237, 'ikadevimarita', 'ika5pO', '34a724c3da4d1b4d67fd187a8ab7f4be94638629131237576213ceec6e35ac538b2e79c9e7b5621b90deaca0f379354fb9a7dd31dddb4685397814c81264e9b3', '', '082141444646', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', '252525', 0, 0, '', '', '', '0000-00-00'),
(1236, 'fauzan', 'faun7C', 'b62b56a4bb714cbd646c6f213391d0180d6cd59246b259f5aa9adfd16be64b244f42eaa65eb82d8dbbc55337992e28811b7dce86b01f3630f875641158f21dc4', '', '081232900090', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', 'jemberindah', 0, 0, '', '', '', '0000-00-00'),
(1235, 'Khairun08', 'KhaXbk', '1bfd8da2930f1051770ce0787abc4a743729cf609edce8bfe2f4798be206c260fb9e357ac3c8f3727fc5f674aed2c34f576b76a3536051d5b3f822987bc7b2d2', '', '0895331450403', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, '', 'Aman1234#', 0, 0, '', '', '', '0000-00-00'),
(1234, 'Dina', 'DinSkP', 'a9c1b39fb1d87ee15a6c2a084e965a02e35e1163ee0ba1b7365cbe28d5e65907bf3eb5c43af3307ce4be47340626eb51e30670a534920a9fd30478134e2de750', '', '085228653494', 'DANA', '085228653494', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-05', 'active', 0, 'Nurdina', 'dina123', 0, 0, '', '', '', '0000-00-00'),
(1233, 'Tiarasapitri', 'TiacbN', '5014e1965b4cb2da264b6af1e1166bfe20e00702ddd3e59a29cb6e549a4e119edfa596a8f277b1a6c3ef60ebd7b56e370517524670c58272d0e45e7779374b3d', '', '085366542518', 'Bca', '6175398094', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-04', 'active', 0, 'Tiara sapitri', 'Arkanza19', 0, 0, '', '', '', '0000-00-00'),
(1232, 'Berkah68A', 'Ber7e5', 'c03bc328e1b538fc6db47bf24321e7257fd2591daeafb76e169a8c6304022620aaaa837f6e24fd0102218f44d395a7f4dd87c61f95ef0b296036c140a50214ab', '', '083176291307', 'BCA', '1221473928', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-04', 'active', 2, 'Zaenal arifin', 'Salaman123', 0, 0, '', '', '', '2024-06-04'),
(1231, 'Dian', 'Dia4cV', '94dc8066a693c219342aee1a4b9b10a9c3fefee6373064dfc0c0a54ebe34b6bb1faf46699a359066daa0a2dcbacbcd57bed8973ecbaf8e3547af88b780345e5a', '', '082245452345', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-04', 'active', 0, '', '123456789', 0, 0, '', '', '', '0000-00-00'),
(1230, 'Riana0302', 'RiaQp8', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '85697695871', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-04', 'active', 0, '', '123456', 0, 0, '', '', '', '0000-00-00'),
(1229, 'Paluiko', 'PalR9p', '04193d35dcf816476d919281bcb655c1fd88eab08511c21121dc857d68ca4dcc15e1041829aedb30488c7f925543c6e6965b78debb72fba16e929ee63b379b1f', '', '82288640946', '', '', '', 'user', 'teuvLJ', 'JasCHd', 'AndUy6', '2024-06-04', 'active', 0, '', 'dolar2', 0, 0, '', '', '', '0000-00-00'),
(1228, 'devana@yahoo.com', 'devIDl', '35838488eaf77d2778b65761ef1559e6008fda553f408d58cfaa145e8d475821b4c30a8665842d34d43825df549057259ed88245687cc89307937516589f0030', '', '085775842478', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-04', 'active', 0, '', 'Devana11', 0, 0, '', '', '', '0000-00-00'),
(1227, 'Cucu25', 'CucOWq', '04e8c0901b94a5e2ef0936a725b638624fd2fa9bb7d5d1ced5235bb9bc2b7547e7a27dde2e59bd34c63d7d86fbb1adc9e97a5d75897ff070cd29011ec6a34d88', '', '085703620716', '', '', '', 'user', 'GunHFY', 'ver930', 'pnzKsN', '2024-06-04', 'active', 0, '', 'majalengka25', 0, 0, '', '', '', '0000-00-00'),
(1226, 'Ozie', 'OziJVD', '6c33d9252cb655b9e5624cfd8da2f95838289e4ab354d1de0e31c66b00a88ff0a22e24af2cae6e7b06cef958c7dae5cb586e363c49dfda926021a00eae2d116d', '', '085856741501', 'BCA', '2711389875', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-04', 'active', 5, 'Fauzan Tri H', 'Kelik8476', 0, 0, '', '', '', '2024-06-05'),
(1225, 'KembarCell', 'Kem40w', '047267d1d35dee2ded777a444cc51ae562f62f9f1a888fc9793b905521c5aa65e9e5b81053d8e4fe4190ef367dd44753bc45907bd67561fbd6b1cb3f69651daa', '', '087789789332', '', '', '', 'user', 'MujI9Z', 'ver930', 'pnzKsN', '2024-06-04', 'active', 0, '', '111289', 0, 0, '', '', '', '0000-00-00'),
(1224, 'Mujahidin', 'MujI9Z', '5bbbd50bb136058049a778b3c24f0605136b0374ce6e6eeaa58b9451967dc46b8777732e10e2053873a8063061622c454bb629a3c7b6a81cee47d1f8a7d336f0', '', '087880906239', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-04', 'active', 0, '', 'idin1989', 0, 0, '', '', '', '0000-00-00'),
(1223, 'KangMasjabrig', 'KanHfD', '6c7ef50a6ed5e799508c1ed53654169482e6556e412c00962bd65172d6fc663f584898e044102630b5c8bd7f53f0f3114c32c35a3a9c22581925e87b7484edd0', '', '083829029442', '', '', '', 'user', 'Rud1th', 'ver930', 'pnzKsN', '2024-06-04', 'active', 0, '', 'abc124', 0, 0, '', '', '', '0000-00-00'),
(1222, 'veronica77', 'verOvt', '459dc42ce69a8bdb93a00884339f3b5e0e3af3b46f136a70a0b71b7c8992488035e8525d8b9be27a7b42e09f303f638055955f213ca6a1f96d80166373671684', '', '08953382603', '', '', '', 'user', 'stevZS', 'hagXku', 'harsYU', '2024-06-04', 'active', 0, '', 'verona', 0, 0, '', '', '', '0000-00-00'),
(1221, '147258369', '147cFb', 'de291b2768ebee6aebac13d5263ae60af0e52021313b3e12216fd6744ce00c4cbf000e816e8598c0160f69bc2353be9b35378be5b1532a39b71acbfb0f78a612', '', '147258369', '', '', '', 'user', 'GunHFY', 'ver930', 'pnzKsN', '2024-06-04', 'active', 0, '', '147258', 0, 0, '', '', '', '0000-00-00'),
(1220, 'Jumawan', 'JumShI', 'ddfba603a7f5ab6df8ae8607f5767613359fbda85c6fd6c0f027115cfc824d1ed013b08213ef9688787b23a3f0d5dd2edba607dad806b703132e3d2723a423e8', '', '083856534209', '', '', '', 'user', 'GunHFY', 'ver930', 'pnzKsN', '2024-06-04', 'active', 0, '', 'mamataja', 0, 0, '', '', '', '0000-00-00'),
(1219, 'Gun05', 'GunHFY', 'f58731fc8fa9ef143df30974982eecbedc1e263c854daf4bc072befcd2a733e8da7576bb00d92462ab5d1756ce29d1b41d0504ac51fd52faf1a92b56e4367f87', '', 'IIN0505', 'Dana ', '081267382272', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-04', 'active', 2, 'IIN GUNAWAN', 'IIN0505', 0, 0, '', '', '', '2024-06-04'),
(1218, 'Aida01', 'AidZlm', '6c6d89854a53d55f9850762c5178e275d7438742ec73969d752a5456a84d956ad686c5c06544f9e6a89cca70d60e572883716025266c4c09e1c2457b358e728a', '', '87831877977', 'OVO', '087795521849', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-04', 'active', 2, 'Baiq Nuraida', 'kayla21', 0, 0, '', '', '', '2024-06-05'),
(1217, 'BAIQNURAIDA', 'BAI6lH', '6c6d89854a53d55f9850762c5178e275d7438742ec73969d752a5456a84d956ad686c5c06544f9e6a89cca70d60e572883716025266c4c09e1c2457b358e728a', '', '87831877977', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-04', 'active', 0, '', 'kayla21', 0, 0, '', '', '', '0000-00-00'),
(1216, 'Jatno121', 'JatjMw', 'db777312d87bbfa897a98c2d1fb969477983866f28d6518968851fd9c9d41f4240ed949b4de042a36a914185da09186a122bc98b8fafa1bf0413fda514e64744', '', '081317508847', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-04', 'active', 0, '', 'Syif@14042012', 0, 0, '', '', '', '0000-00-00'),
(1215, 'Yati77', 'Yat8LB', 'b7d3257408e2508d63ada6576c747401dd824141cbff6787c9937545516d6f941aa40360c5e23a615bc5b0b3c30618dcff67bd90a424347333a0a3a388a4c2e8', '', '+6281229321433', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-04', 'active', 0, '', 'yati1077', 0, 0, '', '', '', '0000-00-00'),
(1214, 'Del', 'DelfZY', 'ef0bf177e145d99dc87955dfb715327a330d2e3802bf5f872532335136b817683ada8805b9aca05e22115e657e69c86692b9c3e9bc78d78e3b25437025f0817e', '', '085211467610', 'BRI', '410401002231508', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-04', 'active', 0, 'Taufik Ismail Suprayogi', 'Ta140380', 0, 0, '', '', '', '0000-00-00'),
(1213, 'Ramadndy', 'RamAOh', '76a3e50577f63460f1d1f3049aaa1e05aba996529e3cac5f899699257e34de4a0283ee0076c486445c2e0530fc64e766dd506b255739e8d8c5b28492928877f9', '', '085783775816', '', '', '', 'user', '0881DX', 'JasCHd', 'AndUy6', '2024-06-04', 'active', 0, '', 'beringin', 0, 0, '', '', '', '0000-00-00'),
(1212, 'Fanny98', 'FanmJH', '71673e647c1b0d9ef0fb0a841cff3e352aeedb6578f8b93f4a280ba0dda2509ab5e367e1a331c84ff155455891f00edd7595ba5caa4a1294b03fde54c50993b8', '', '082174442121', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'Ardila05', 0, 0, '', '', '', '0000-00-00'),
(1211, 'melati6', 'melUtf', 'c67c39289d61d185c620fc013e72417fece2c3596ee81c22c2bebb7c491d480d4fa85d2a475badf4114843752db49f082964e67cda2713d384717f15f8638def', '', '081263511110', '', '', '', 'user', 'stevZS', 'hagXku', 'harsYU', '2024-06-03', 'active', 0, '', 'kuat539', 0, 0, '', '', '', '0000-00-00'),
(1210, 'gusamsudin', 'gusLjm', '8954e433c8d550ad0b874b5261451aa02bba27ff181763f8af29da121ff94d594b6a7018c254972b0e1f6daefad5151fe96fa334ae1fe50773743517fcac147b', '', '08236463821', '', '', '', 'user', 'stevZS', 'hagXku', 'harsYU', '2024-06-03', 'active', 0, '', 'udin09321', 0, 0, '', '', '', '0000-00-00'),
(1209, 'ahlanxx', 'ahlaRp', '831f02f3095a0062cc4b861932370467968ab897d99576cba5041d84b6ee0438cc936e6b92702f37dc9b3bcbccd27a989ce37995cddffb75063b4c4cc52764ed', '', '0862526382', 'Dana', '081244100206', '', 'user', 'stevZS', 'hagXku', 'harsYU', '2024-06-03', 'active', 3, 'Ahlan', 'boip372637', 0, 0, '', '', '', '2024-06-03'),
(1208, 'Jokosuyitno78', 'JokyPU', 'e1da47a119493d0b12722d615abcbf5908005b7ecdc9d7ebe323f744a2bf9f68f6507135b877d0d53c162eb3f3729f706cb357dba5f6a52cf797e31eec697fa7', '', '089623309090', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-03', 'active', 0, '', 'joko123', 0, 0, '', '', '', '0000-00-00'),
(1207, 'Adplek4', 'Adpb65', '4bad34a3342ca8a50cb852a908736bf75c1dd4e5352dd146090940a799905e413bb4889375d4a84730f0fbb2945b44e1d85f031c32c28d0ab658dc68510782c7', '', '089690613000', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'Bontot04', 0, 0, '', '', '', '0000-00-00'),
(1206, 'Jokosuyitno', 'JokpNh', 'b1fe88fb976e0a3956b91e86ac5408f013cf857adb7e31369b4ef595084aef447888a4b3657c4fa8f04e87741f59aa45edfc9097390247553374ede6d8856e42', '', '089623309090', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-03', 'active', 0, '', 'jO289:\\\"?!)', 0, 0, '', '', '', '0000-00-00'),
(1205, 'Jojomanis', 'Joj2lh', 'b1fe88fb976e0a3956b91e86ac5408f013cf857adb7e31369b4ef595084aef447888a4b3657c4fa8f04e87741f59aa45edfc9097390247553374ede6d8856e42', '', '089623309090', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-03', 'active', 0, '', 'jO289:\\\"?!)', 0, 0, '', '', '', '0000-00-00'),
(1204, 'Ppp', 'Pppdqs', 'f6290fdc804f53c0610b4fee9ff1e6d457d3b7d6d5062cb72cef967fcbdfbe561051c9b9511bdd500a8652423026fca478be4486e21b2e94f4203d976af10900', '', '019288181', '', '', '', 'user', 'Geshl9', 'AmegoI', 'AndUy6', '2024-06-03', 'active', 0, '', 'ppp111ppp', 0, 0, '', '', '', '0000-00-00'),
(1203, 'Kasih777', 'KasIuw', '52c1f1537fde21ad7405bc31c2585f470adce98195f21f239f19f1ec76296fb3eaf92c89ae9c22c0dbf62b127519507470cdf0a5fef6eb7ca5036db786ef3805', '', '0852-1831-7883', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'najib123', 0, 0, '', '', '', '0000-00-00'),
(1202, 'NADLIR', 'NADuse', 'd7f01a411b1547b3b49ec26cbbc29bc970973b33ef72873b84fee9031bce312531fc97ae3abcbd1590383b8fac7fd48aa34af0c78c8d39398ff7abc01a145b0e', '', '081335678154', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'Nadlir-1968', 0, 0, '', '', '', '0000-00-00'),
(1201, 'Rafli', 'RafE1y', 'dc6d6a0d25161f9dcf84596a443a2cf2ac90ef23b77e6e04305565ad90449e62fc1d9ffc805c6381b732aed16e9663cf5fe48ed855007b81046bdda56dc517d8', '', '089666398877', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'rafli2006', 0, 0, '', '', '', '0000-00-00'),
(1200, 'Anay84', 'AnaEAc', '979f7c98225fe0810e94f609a3dbd41d6519dc70e025956744a2ff5bc1a25056460018541af3dc24644c4d74c9776d8c8bf3d63533d7d807e77da52cd5d69950', '', '081223070202', '', '', '', 'user', 'CekCQt', 'And3w2', 'BisjcY', '2024-06-03', 'active', 0, '', '020409', 0, 0, '', '', '', '0000-00-00'),
(1199, 'Mulyani', 'MulbtP', '0a5cf01fc37cb6c85c14df3b08aeba10937a17ddd11e3454ce24f0ccbde9f1c9d98cab83e8e47420332c42553f02ef5a758ca85eddcd2ae6b58456d60790ed7c', '', '083850217030', '', '', '', 'user', 'AdiOFG', 'piaFf8', 'AndUy6', '2024-06-03', 'active', 0, '', 'karawang94', 0, 0, '', '', '', '0000-00-00'),
(1198, 'Maximus', 'MaxJgz', '3d69a546c84dae55643e055968ded84e81656a42d1c6e2482f3b7877ac77c81eab7ab1fe9b29e7548e2b058e7fcaa7623bad80913ff0454d29db8f8c63f8dfaa', '', '085157768884', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-03', 'active', 0, '', '3n4k4j4k4u', 0, 0, '', '', '', '0000-00-00'),
(1197, 'Afif08', 'Afi4ga', '4123d66efe3a4f99379deaf84b8a234f54d449f32fb214d70f2f37a1411d920818b0211872f0110acc793c7f8607f52ef21abfcebf491ad226235538ac063e01', '', '081283332332', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 1, '', '101014', 0, 0, '', '', '', '2024-06-03'),
(1196, 'Rizki08', 'RizLW7', '4123d66efe3a4f99379deaf84b8a234f54d449f32fb214d70f2f37a1411d920818b0211872f0110acc793c7f8607f52ef21abfcebf491ad226235538ac063e01', '', '081283332332', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', '101014', 0, 0, '', '', '', '0000-00-00'),
(1195, 'herisetiawan', 'herIds', 'e06ea4a5af1c54e15f9b2475b7438061721310db91a22de41124ba7a685d523a5cd24a95526f6deb44b005da79f4b2bc6b3fd56a9029f7a2407581aadef46e58', '', '088806794118', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'indonesia', 0, 0, '', '', '', '0000-00-00'),
(1194, 'Rizalid07', 'Riz9AO', '81e0c3591b2c23c215e3be6521a394c8dd140834f1f8f7e3da88dac9947a02fdda42f07afbec520df214dca1fc73035dae5c8bfdb245698a07bb92e6daaad854', '', '085759529778', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'Asummk888', 0, 0, '', '', '', '0000-00-00'),
(1193, '088975146195', '0881DX', '4ed3278954c1e9913d50c65823f00c674dac78264c72277757f469a15a06c75da81e2d298a9dc70c4d23b8adc0706884b47fa89e98f3cc82d7d9421d22edc4de', '', '088975146195', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', '112146', 0, 0, '', '', '', '0000-00-00'),
(1192, 'Yono', 'YonrBl', 'e99c465a9f9f65b91bfea44a637036781a7aefc37b1f5db316bbdb220c334bd8aa2362c859809ec3f50df19e60d6b0ab5c52e2a6a770a783640d4f8c05a54d98', '', '81373761181', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-03', 'active', 0, '', '308084', 0, 0, '', '', '', '0000-00-00'),
(1191, 'Suci', 'SucpU1', '2128ff28074ee1786b4d1fd523e3c35df5591b3857e180c22d1af7dea8dad3b08f41034ea866a7901a421a8071df7420ee5ce349195bff175cbbeb822874b38b', '', '082293588015', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-03', 'active', 2, '', 'Nursam060394!', 0, 0, '', '', '', '2024-06-03'),
(1190, 'Ikakusuma20', 'IkaTSW', '36d2184b2c6c10562200c0d8c988baba4d15c9d8f6fcad73a2e899d786ae86c6d6652911d0d652b83dce1a0947267a1f3db0b7987bd6208244ab28bbb2ea5cd0', '', '085718914875', 'OVO', '085718914875', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, 'Ika Kusumastuti', '2020ms69', 0, 0, '', '', '', '0000-00-00'),
(1189, 'Didi', 'Did6JM', 'db87b52c1ca94f7ea0c7f3a6b537bc999e76788e9fb802c9e195901329f66652ff845ef21003e0ff9ee8ec8e135e730973feaf9acb14f7ef7662133a44a0666b', '', '081218651815', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-03', 'active', 0, '', 'Dd210516', 0, 0, '', '', '', '0000-00-00'),
(1188, 'Azishilmawan', 'Azi6az', '9fb358e0ad1502d9b7579f7a6c09bbfc5f04c9f50c67a91b81bbc8d89650c01eb1fe52913041982c3138d5217119b7ca0ff538ac71ec07cdf2cdbe2fff833c26', '', '085823882557', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-03', 'active', 0, '', 'Cisarua1987', 0, 0, '', '', '', '0000-00-00'),
(1187, 'Elisa', 'EliTFY', 'ce502e285edac0df4441fddbfcc18d06c5a95f266af6f7f0f4d89911dec81b5871dd3805af3db51fdee2969a4c1f74b193f2187c9b9d2188e5b37acbb73a7718', '', '085280265656', 'DANA', '085280265656', '', 'user', 'MiardM', 'ver930', 'pnzKsN', '2024-06-03', 'active', 3, 'Mia elisa', '313131', 0, 0, '', '', '', '2024-06-03'),
(1186, 'Mia', 'MiardM', 'ce502e285edac0df4441fddbfcc18d06c5a95f266af6f7f0f4d89911dec81b5871dd3805af3db51fdee2969a4c1f74b193f2187c9b9d2188e5b37acbb73a7718', '', '085758455856', 'BRI', '385201027688532', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-03', 'active', 0, 'Mia eliza', '313131', 0, 0, '', '', '', '0000-00-00'),
(1185, 'waliyu', 'walotY', '23d622f690c02cf0a2b825541334ac96a488137ff02cfe8059acd16b45bdc153546c4932d385a665c5c0db01e62d7b4fb4ed5e22e1e5125b8c9bd4706de42733', '', '083160140839', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-03', 'active', 0, '', 'WALIYU121', 0, 0, '', '', '', '0000-00-00'),
(1184, 'Rampokcuan90', 'RamWBw', '633bca8258ff554960b30eaad2e3d3e4d6e5b5d62a4f754089b3fb714d87b6f574a156a2deba553166b675a0cadefcf6f0d4bf114391d8a2f533bcff5accba96', '', '085759904344', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'rama2711', 0, 0, '', '', '', '0000-00-00'),
(1183, 'Tiararumaruta', 'TiafsB', 'f086021b1f7964d21347fea42c0b343f9df5a9dbfe7c06c6c017b7eb8555758d2ab2a380e54cf4d38d023bb71705461d550cb4678570bd0d973fac4727a2a25f', '', '082145441219', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-03', 'active', 0, '', 'danish21', 0, 0, '', '', '', '0000-00-00'),
(1182, 'Nadifa', 'NadfmM', 'fde1b7f8463c7669f0928c870b8cf684eeeff90edfcf8425b201f8637fe781844a30772a2b1120b33d820251cc822ab3427b55f4cc05dcb0b8ebac732252f214', '', '085860065679', '', '', '', 'user', 'Adim4p', 'ver930', 'pnzKsN', '2024-06-03', 'active', 0, '', 'ad26061990', 0, 0, '', '', '', '0000-00-00'),
(1181, 'Tan09', 'TanTao', '05e731a24deaae43943f7dd586ce13a1022488ca3a2bbe77f2ccd4db496197edfe4db2c81e95b723b2cb550fd513ec4052f1512180251b224ed3d8bdcfb83f59', '', '081275502876', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'rasyod123', 0, 0, '', '', '', '0000-00-00'),
(1180, 'totoxs', 'totX3K', 'bfae07e396fe6ad4e0424f7dab3f92a9ede0828791a90e76cd6a7f420957f05f466066d25eeb184c488b023d5eaa06c70a50b4808f97e76b86aa1a80a740333b', '', '+6282278861378', 'BRI', '018401055337503', '', 'user', 'infpDj', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, 'Jumantoro', 'Ners12345.', 0, 0, '', '', '', '0000-00-00'),
(1179, 'MesraGullo', 'MesaDL', '1e2cfc4c68a429e9253a8548612795154983995e4f598e359a1cf314ba50dd3df21044f4d7eddf4522dfd4af972ba6a42b219e137627263431d6798517c3dad3', '', '082123924293', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'uangku', 0, 0, '', '', '', '0000-00-00'),
(1178, 'SHAKIRA', 'SHA5st', '3a36329218f92a3f6b474def59315fbccb3949fd8328be75620ebf25bac510a6b4f184c7af861ad66f68514aedbbaf3e39286548355abfeb48050435f31a6316', '', '82162826530', 'Dana', '081370247149', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, 'Ahmad faisal ', '44444444f', 0, 0, '', '', '', '0000-00-00'),
(1177, 'Lendra', 'LenI5G', 'f96ef99c07af29c047966d06e5b02918a07fd6a6465fdcc1201bebc3bb96233dbad9df4fdd519c98e8f59a956bf02cefc7139f8ccc1d7f4d8aa4eef65fe68d05', '', '083114748463', '', '', '', 'user', 'oki8ry', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'ciamis', 0, 0, '', '', '', '0000-00-00'),
(1176, 'Surya01', 'SursEu', 'eb2b3cb57d0ed28aaeb8640364f7524c84f788373467d0260bf0343f8e6e6b4f69caece5f60ae17be61bee239864644ffb97aad3b1047c073d88dbd648c23389', '', '082240596796', '', '', '', 'user', 'Rud1th', 'ver930', 'pnzKsN', '2024-06-03', 'active', 0, '', 'Putrafajar11', 0, 0, '', '', '', '0000-00-00'),
(1175, 'VeraBudiCahyono', 'VerYsh', 'f3a0a5e0233f0a9ada3cba0623ee8046d4a694fe521b8b19588453b9905a09eacfb91e1fbc0f39c6dcf40d7ac912081b2eb1b8438b506e3f58de1d9301d8ab31', '', '085624400772', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-03', 'active', 0, '', 'aSril150790', 0, 0, '', '', '', '0000-00-00'),
(1174, 'TGRSTORE', 'TGRFU1', '5d8a15b1f74b7aa11ea8aad25aa63002d69bedde7a4895bd187388f411afcd5a34681dc0e474eeebe8a961f83dff1b0f0ee4f35a948183853b1f4ecf6162fb09', '', '087816352927', '', '', '', 'user', 'CuaTqI', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'TGRSTORE', 0, 0, '', '', '', '0000-00-00'),
(1173, 'Anjiksurya', 'AnjjAt', '59aa15b2443f91d7dab1971d69a7210b5ad202e83870ef1c7363eb756f3cad9c19f9e49e5bbc32767af0e66adc53e3b32762c53a04a2b3e7dc488ca1274003b5', '', '081296055758', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', '20091960', 0, 0, '', '', '', '0000-00-00'),
(1172, 'Baron', 'BarHeM', '2ab2fcd6ccfd60823ed7b6623ae4788fc5d3c9fb3feacbf328d935e72529c8126395472394a464c9ba429b5f93e9fbccef4a72a547413c789ccd870495ca3cb4', '', '085882354439', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', '12345678', 0, 0, '', '', '', '0000-00-00'),
(1171, 'Srinur', 'SriMJo', 'f3158bdbbec518414849a6b96b943ce17fb55de068717a62bb0a1dd9a076328a001605a62ca7fde838fad2ab36c545fff2ecc9f26692345d860ae4ace82e30a6', '', '082121707015', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'vdit70', 0, 0, '', '', '', '0000-00-00'),
(1170, '85649088904', '856Iwo', '3115154cc308e5d4d4eebfaf32462e7e8864fb5ee0a996d34e0061b855d88ffc5cb8a404e6511dd39dcb8fde525b514215a0577eee25ddaa8671afa91ff2dbfc', '', '085649088904', '', '', '', 'user', 'AdiOFG', 'piaFf8', 'AndUy6', '2024-06-03', 'active', 0, '', 'yuyundsw123', 0, 0, '', '', '', '0000-00-00'),
(1169, 'A7x32', 'A7xUyf', '31810869438bbf303ceb805066526b0ed88664e38cce28a9837822b1bdb588967242f53eb8d630b36e6aa7b8e72b86480c417c8726cabfa803de2ca6ee9d7579', '', '083839304118', '', '', '', 'user', 'And3w2', 'BisjcY', 'AndUy6', '2024-06-03', 'active', 0, '', '5432A', 0, 0, '', '', '', '0000-00-00'),
(1168, 'Khalisa', 'KhaPcS', '8d029923df92dbdd1bf980caedb559a4f8f996a54b83085b3c17acaf17c4529ce03e2f291a92c3f4f7bbf32aadbeef9d1bc04f11b8eb6687a38e1125bee7f87b', '', '87864751027', 'Dana', '087864751027', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, 'Mohamad Zaenal ', '050789', 0, 0, '', '', '', '0000-00-00'),
(1167, 'sahmin24', 'sahYPA', '2d2eb38677375a85f38e1e71907dc60943d45079f4e3cbf19388f3ed82e3618b3a83bcc49b7ed89398b0a2662ef98b4522cbad29515d7593d3a552a0ab59603e', '', '087715817404', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', '1susanti2', 0, 0, '', '', '', '0000-00-00'),
(1166, '123456789', '123So4', '3cc180d63b8ca3b0c6ccd9ce14c3f4bb8751ed2be3faf4c115c710008d8ce1f87f3277e36695b1f5452d8d4b6b9e9f02351b1a0ea5cc0d513198849d323310c4', '', '081244208997', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-03', 'active', 0, '', 'Mattuju777', 0, 0, '', '', '', '0000-00-00'),
(1165, '122455356', '122wyN', '2b93ba27830cc8b86026c46240f66af845f7556813788596dc841c26f0e344f60e6cbe12e3250598af7b6725a8e3ac072990c8498b90fb585de2d7390e495c7a', '', '081244208997', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-03', 'active', 0, '', 'Mattuhu777', 0, 0, '', '', '', '0000-00-00'),
(1164, 'm.haris', 'm.h9eZ', '3cb68c0c5fc4e953f8d350ae66ef4cdf8c716062fcd0fc729e397b6e8d732992b272b2010075ce305b862f919a674bd908c19babc2227966b60fc50afa1970b7', '', '085269841873', 'BNI', '1655249091', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-03', 'active', 2, 'm.haris', '07071985', 0, 0, '', '', '', '2024-06-03'),
(1163, 'Adien', 'AdiZB0', '57e32795811dfc92ccc85106b77ce583238245006c8ee3e92a0cc013cd7ad363693155ae67ff3c257c06d6efa1f3d80ce1df89e5d2d73cbed9b157595db062cc', '', '081387273022', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'udien11b', 0, 0, '', '', '', '0000-00-00'),
(1162, 'KaryonoE', 'Karbak', '01f8d58e178fd078158093ffc4f8b217f5c07c0cb000787b2b5f7791b62806536d90338a598fbcb7fd25ed6e3f0a61c01744a49cbc122cee52dda37e67a00aca', '', '081548452768', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-03', 'active', 0, '', '031070', 0, 0, '', '', '', '0000-00-00'),
(1161, 'EmiliaSriyani', 'EmiKPu', 'b8cf60550b883bba2a967bcaf886dea486812b9d582ceb1f49dae710e83e5b2190bf39b7f26b37a7490e32bc873f10e0206b3d246a5d9f00c6c9a46c1319fe7b', '', '82217843315', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-03', 'active', 0, '', 'emilia1234', 0, 0, '', '', '', '0000-00-00'),
(1160, 'joko22083@gmail.com', 'jokH5j', '3e35250dc615371a64e68744a54e5f384debe0d67d60f844ac83f8d424911683c9c73b45481b95c56064e8dbf9361a297093ea9f4aa4d3bf08cf3cadaedca887', '', '081529307583', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', '343536', 0, 0, '', '', '', '0000-00-00'),
(1159, 'Pangeran', 'PansnT', '3f16f887c9c9e26f02b1794a46bd0bb3708387d5c14a7e813cd83a52c7d73838424bae1dd219adff650327ec0fabb59815362fefd2ffbbf5dd3e94c90a8eee3f', '', '083143315395', '', '', '', 'user', 'Wawjsa', 'CuaTqI', 'AndUy6', '2024-06-03', 'active', 0, '', 'Pangeran11', 0, 0, '', '', '', '0000-00-00'),
(1158, 'turisky', 'tur8T1', '3e26ff3a5dd411f361c04d2a06e7f2d3ce64de275f5629aee795b7a0e698a70cd2ccc08be68d73fc05e1b422031e7cad3b7bfeff6e89eca5d0d5e939c54014bd', '', '085311773950', '', '', '', 'user', 'CuaTqI', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', '20002000', 0, 0, '', '', '', '0000-00-00'),
(1157, 'Lilin', 'LilJ2s', '3db06f8425d0af81100a24f3c672c4514671df57f9fd4b8f76a1004e1f6a529694c3d4559daeafc13318c705afa8c231b37a51910883ba1368a57031f359b986', '', '85382412476', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', '020805', 0, 0, '', '', '', '0000-00-00'),
(1156, 'Rouf', 'RouYcT', 'fc3bdec6e8fada09ba7e17832ee2df09c425fc171e959c0509cd9754807d1e2631e888f7d5548d1f68205aed9d5be3908bc7834bc88eba76300adf40bf5c90a2', '', '08155132053', '', '', '', 'user', 'PutGlJ', 'Slo2Xb', 'piaFf8', '2024-06-03', 'active', 0, '', 'oziel8181', 0, 0, '', '', '', '0000-00-00'),
(1155, 'Udi66', 'UdigkG', 'f9910376320b35f2ec75c5ec2db076da7a41ecf76cf5c981d6b8e32352ae12572c7a347df8b544a2a4deb87e27b42e76f783c08e7b85be58f96c1e5bdef9b6ad', '', '085822930700', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-03', 'active', 0, '', 'waka11', 0, 0, '', '', '', '0000-00-00'),
(1154, 'Gacor12', 'GacaB9', '273a8f0a43248aaf0d77409ce4d2adb4ba83d734fa50c4f2d788655121cd0b69515beb4927fb82fca328afede39afcc71cc5a15250667a5450a50d41e1f18ad6', '', '08979890348', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', 'gacor123', 0, 0, '', '', '', '0000-00-00'),
(1153, 'FransSonyWaltonhutapea', 'FraLf1', '1c590ddc3c9ea673d1f8954af6c571a98fa59ee6e714250f6492f6b0bdf0c86b2a157e7d76640249cb22a784c8a6c25d6e2daec51486acd4ea34245cabb0b66a', '', '083865782030', '', '', '', 'user', 'LalnQh', 'ver930', 'pnzKsN', '2024-06-02', 'active', 0, '', 'sonyhutapea74', 0, 0, '', '', '', '0000-00-00'),
(1152, 'Trondol', 'TroN7g', 'c975c55ee4a8a99225a3cd85f8ca8f36cd11bdc50fa7d44e2549668f6f56f8f045ea28951649953b3ccb347911b88f74b1407051bd866151658d88c183163ade', '', '085865494012', '', '', '', 'user', 'LalnQh', 'ver930', 'pnzKsN', '2024-06-02', 'active', 0, '', 'rendi123', 0, 0, '', '', '', '0000-00-00'),
(1151, 'Andizaky92', 'And37X', '7b1f1e6fd13cce889c4a7b29c8a71bd596ed087a826a4c3c03d5832ff22f1190c8c1aedca26602a8ce05eea4de7a39b2403331991881baf20f531e06eeddca27', '', '081210444187', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', '101222', 0, 0, '', '', '', '0000-00-00'),
(1150, 'Lala03', 'LalnQh', 'ea076bffbb4bdbf8e7dabadb7d0d332c6f0ef1944f49bf79739d36631dc901ad6650e334401e5934020477359fd531bd7beb613fb8516613d15166026b817c70', '', '085601728318', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', 'lalatralala', 0, 0, '', '', '', '0000-00-00'),
(1149, 'Sudarmanto22', 'SudIdU', '2b92da951d36dbc665a89616e2740ec10df8bea28c377e8013afabb53d5082e3f4321d1314e7aca9eec6347a186a00e21880f194d49ce6b84cdbfa8277376a43', '', '082157340984', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 1, '', 'Otnamradus22', 0, 0, '', '', '', '2024-06-02'),
(1148, 'Nikoarmana', 'Nik9Pq', '69633f21806790009235b8f3014bf2b04a50545a54993750b5ebffc136e7ccfc7d6aaf411be0092fb1b59a30583656881aaa1ae41b2c9d0454c3d6b65f2c0543', '', '085770886743', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', '121199', 0, 0, '', '', '', '0000-00-00'),
(1147, 'soele90', 'soe8MB', '2b48833acd9d798cb100babb92607b915880c2bd053ef478d9bd4f1af1ea492430501af836197192791247a8c6295c0f3bc1bbf60f69b3261029f659cc055cef', '', '085240075108', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', 'embar62', 0, 0, '', '', '', '0000-00-00'),
(1146, 'Tjongpin', 'TjoJbp', '03a2fcb7888d777c9c5ffddcf4f609f68df06691ffd3c073bcc5d03a31c9f5edaea3674a959d82036fac23fb6dc013f7690e5a1280ff68e45d8114da6d759fd3', '', '089698053999', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Cathribe25', 0, 0, '', '', '', '0000-00-00'),
(1145, 'Tolenk', 'TolPKD', 'bf8de45d01773b745bc858f4d926b8cfc34c173cc4f07182493516bf9829683642f538d26888d980aa5dd539720875470f653715dccf1e3f344b4c1147300ced', '', '0811224616', '', '', '', 'user', 'CuaYk4', 'NonBDh', 'MjohTv', '2024-06-02', 'active', 0, '', 'arumi2610', 0, 0, '', '', '', '0000-00-00'),
(1144, 'Rano', 'RanGiV', 'f0909d5cc564d8d8b9d25801c77756af6e29cb9398d8fb08431837028fd44fa247faf60fe4a44a0401355520da64a87fdd51cd57ce63988a810bd2ce91db2b50', '', '085321815829', '', '', '', 'user', 'AnghsW', 'AngJwo', 'DonvFA', '2024-06-02', 'active', 0, '', 'royal1234', 0, 0, '', '', '', '0000-00-00'),
(1143, 'ari2005', 'ariTJp', '58682ff7ecc4207da70c63c962c808f8075f99b32949661e4eca6661a9c29fe776c471d88b627efad3698985bd8358bd581843f7ed5bab5f3d931417b6f2e700', '', '082179578903', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'ariganteng200t', 0, 0, '', '', '', '0000-00-00'),
(1142, 'fean1', 'fea3t8', '7ac888547e7a8159ed5cd62d047a0513e696ce4901ebfe7ec350e3ea6c9e6e1b3a4727da195ef556d4a5ac5e43b4182bc92d348e0782487d615c92f2c6eb73b1', '', '0897654321', '', '', '', 'user', 'AnghsW', 'AngJwo', 'DonvFA', '2024-06-02', 'active', 0, '', 'fean123', 0, 0, '', '', '', '0000-00-00'),
(1141, 'Cecepsuparman', 'CecyYD', 'd41c09c2b6e21a9fdc1ca108b8e9e3aeb4937ce5249b666e59bf51cdf4bcd90bad4dfc6198cac9d517ba56540adc6397652410889f1a9f27e05a7ec34e2428d8', '', '085603672246', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'tuakbabi9', 0, 0, '', '', '', '0000-00-00'),
(1140, 'Rafif', 'RafSWp', 'b9e88872708c418995d379be4c435b478fa7060239f7f28350530a9d31ae638d3e9a1bb151a37cbeb8ccbbec48609a729974a0d64355d30a7fa229ddeaae589f', '', '81992342539', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', '@adzril268', 0, 0, '', '', '', '0000-00-00'),
(1139, 'Dicky1', 'DicBOy', 'c1ebbea5ef6160c43490b7c92a1aa8c3ebbd639df3f9aead0fb65e4158bbfb84a7465abe38b12335894e2a4e5f16ed54fd5d85a20dbddd1b0939bec9d34e386d', '', '087793000588', '', '', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, '', 'dicky123', 0, 0, '', '', '', '0000-00-00'),
(1138, 'Rudik', 'Rud1th', 'c31111e82be428060fea38ea3e9152f8b33e651c89229833c5c0695cb6973a8daf02c2fa13a7d304db53a6832e8c6b0aecaf69c326f56126a31ef54075ce25f7', '', '085777333985', 'Dana', '085777333985', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, 'Rudik warsi', 'losjalu35', 0, 0, '', '', '', '0000-00-00'),
(1137, 'Yohan116', 'YohYTV', 'c912d6e68e2c1f5e78ff34d8f916fbce1dd64524f52fcb56baad9a487701874dd5fa6e9322cebf7315e820db94da189706f78695765fb2a9b57ccaeaaefa7f8b', '', '87728591065', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', 'sinaga116', 0, 0, '', '', '', '0000-00-00'),
(1136, 'Syaiful76', 'SyaK9G', 'b77aa39d70e0823e3bd6fc5300bd609c5cdb8f9ef1805dbf5824f71cda367fd346d9c9defbe386812e7c3488778d306d68e5db0409c242b379ec52a3c641f08e', '', '081288629088', 'DANA', '081288629088', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 2, 'Syaiful Anwar Sidik', 'gspb3n20', 0, 0, '', '', '', '2024-06-05'),
(1135, 'Yudi', 'Yud8dP', '50202c25e1f1f36876f1a4d77ad7def08d020947915d53e19c5e4eb13b1abd7baefe1e32577e9e7dea083cdcfcba238081d21f50a15743527a1698f6442c512e', '', '081355044262', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', 'qwertyQ123', 0, 0, '', '', '', '0000-00-00'),
(1134, 'Xbond08', 'XboaWn', 'afc40a27a9910198ae861937ee7c47ad157a29d29ecd9bef5886cf64cc3b3a1dfd80746c7b1a7f8c4214a1f41f4980c420f232c8451832cc844beb588319d5fe', '', '083111885798', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'Ridwan4444', 0, 0, '', '', '', '0000-00-00'),
(1133, 'Adihmul', 'Adim4p', 'fde1b7f8463c7669f0928c870b8cf684eeeff90edfcf8425b201f8637fe781844a30772a2b1120b33d820251cc822ab3427b55f4cc05dcb0b8ebac732252f214', '', '08987336815', 'DANA', '08987336815', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 2, 'Adih mulyadi', 'ad26061990', 0, 0, '', '', '', '2024-06-03'),
(1132, 'okinawa', 'oki8ry', '075cb300eb89ff9257b1350d82c9535ecb5dd8ec84007cb247bb5d56c34f25ee12024f3f6c56ba0afe6621431b6079b67e89d029c18130df9ee362db48076dc6', '', '083862780627', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'syamsul', 0, 0, '', '', '', '0000-00-00'),
(1131, 'Rusdi12', 'Rusl2J', '1c177eb82817155e07b975647f22e52c9b61fd2e609e5bfb49d8d18acceda448d5b140d24198e0c6a8845e2f0d2ce8478b8a5ea9253a2afcac8491925b4d57a1', '', '089519984382', '', '', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, '', '123789', 0, 0, '', '', '', '0000-00-00'),
(1130, 'Rafa', 'RafQhD', 'cfd5f3494a1af15556a662fbd53527907915167c42e2133ce9fecf716213ae48c106da687e96040929f8c55d36d5910ac78df1549c818d3c419d879cd9175a27', '', '082122390779', 'Dana', '082122390779', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 0, 'Hikmat Hidayat', 'royal250324', 0, 0, '', '', '', '0000-00-00'),
(1129, 'Piliyani123', 'Pilyog', '7689488c801f3664975feb9306f9891cf676b3163f73e5a1f0f74d98575b82729fead110aa01e4d5a5c4ee5d3da03230db8b24afccbc955a57d9d7ac0ff093e5', '', '083848126396', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', 'pili1999', 0, 0, '', '', '', '0000-00-00'),
(1128, 'Rich84', 'RicCrS', '9f931f5ef04eb89a5e2332075db5e8d8847c5be88130b8597731c37bbbda33882cdd94dd7fdcd824e8ee0aa278a8a343daabfda24ab79b50c35649dcd95945ad', '', '082175111953', '', '', '', 'user', 'infpDj', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '250909', 0, 0, '', '', '', '0000-00-00'),
(1127, 'MartaKesuma', 'Marcvj', '5d64332007e3f7d656601a3a4cee2145c2cb7e764d0309a112ee92d3eb239b061da95c7968965de82e298a421c952eb1347e72a1b27a3d75fa6006d8534308ae', '', '081273808101', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Kesuma76', 0, 0, '', '', '', '0000-00-00'),
(1126, 'dodosukses', 'dodPgo', '57c91a0aa8746e90a6e036789baa1d6064767fecadcc4e1e266cf5ab56735ce95a1eb671db061136d37e449472d2b0526a1d40d14d4eca6d02c8d5c3e6c50f6c', '', '085324291113', 'BCA', '2990926720', '', 'user', 'CekCQt', 'And3w2', 'BisjcY', '2024-06-02', 'active', 0, 'DODO HARYONO', 'kuningan1', 0, 0, '', '', '', '0000-00-00'),
(1125, 'adipmks69', 'adiF3n', '1cd49b463b75a442442f16cca527e4887cc524551b9e88b41c1f32e8739fcaf0081fe089ff265bec2d94fc96e63b055ace098fcaad25261b7b7be5596f43d216', '', '085781035705', '', '', '', 'user', 'GphiT3', 'NovR0Y', 'Slo2Xb', '2024-06-02', 'active', 0, '', 'Prestasi15', 0, 0, '', '', '', '0000-00-00'),
(1124, 'Aliazhari04', 'AlicD3', 'ca1e908b7cb540fc7a288e49e2dfd6e88af44d4b161d32c3ff6d0445c4480b5ee922939b4e588e10db4c231285e7aae6be04e3b2da5b74170aaf9ea3dfe19cd8', '', '083819412618', '', '', '', 'user', 'AdiOFG', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'doaibu98', 0, 0, '', '', '', '0000-00-00'),
(1123, 'HaikalFikri', 'HaiQLO', 'd7d2f602e155ba700ed76c48d9a48009b9383e8d17435bfb0fe8ad7c664d4002f16cc7a65c6fb066963714a794f96441ef7f9b9c1b1456acfb9225cbad474fb0', '', '085951587749', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '12345', 0, 0, '', '', '', '0000-00-00'),
(1122, 'padangmimin@gmail.com', 'padSQl', '15675c11666250adc3190d5e68ef97bef7b434a564c5989a86b5498a31905c5140272d879ed87dc3474757aee26af496a6de1129589656f22419b94caa8d6b67', '', '083844647240', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'RIFALDI220720', 0, 0, '', '', '', '0000-00-00'),
(1121, 'Fitri', 'Fitk9d', '840c4afe1ce607b60c797a2708284e9dd0b1050e584c0ea86eaec540c8f61311ae5987c9adbe7fcaa96f7cf12c6cbcb62f7bcb634bde0ef1c7ad81a100b52533', '', '082267452115', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '160595', 0, 0, '', '', '', '0000-00-00'),
(1120, 'Wawan', 'Wawjsa', 'dc5785f3144e13f562ef163ce8c79278564d1c5fb60852b43be5aecbb81e11b2140988693e87c25ea974ce83838337d4a8b8faea4026b496f50040d829832a13', '', '082394540647', 'Bank Syariah Indonesia (BSI)', '1157702276', '', 'user', 'CuaTqI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Andi Wawan Darmawan Handra ', 'Wander11', 0, 0, '', '', '', '0000-00-00'),
(1119, 'Nadiya', 'NadzNQ', 'd82422373e14be159c63e5fc9c5670d64f7c59dbce166841613e06fa050d146e4a32f66b27ebd7c47df3bdb65ec63b074ffbb210c20c9a89cb3c7fecf2ac49c8', '', '88223648256', 'Dana', '088223648256', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, 'OOM ', '123456 neng', 0, 0, '', '', '', '0000-00-00'),
(1118, 'teukurizki', 'teuvLJ', '833ea40fd4cc3724c4399fd13d744574f0ccb46350bce639ffe1643c81173f945733df301d4bc1b0f3e9102292af544caa53affb77c7d9ca6c06effb6f3e4fe2', '', '08126381164', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'teukurizki69', 0, 0, '', '', '', '0000-00-00'),
(1117, 'AndiWawan', 'Andhym', 'dc5785f3144e13f562ef163ce8c79278564d1c5fb60852b43be5aecbb81e11b2140988693e87c25ea974ce83838337d4a8b8faea4026b496f50040d829832a13', '', '082394540647', '', '', '', 'user', 'CuaTqI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Wander11', 0, 0, '', '', '', '0000-00-00'),
(1116, 'Christina', 'Chr93v', '84b6d7ab3dd4856d15a7292bd7e957f3cfee33cc41060c1534429f9d18797588d42474bcc626222dec064617582d95187f9208ebf7c6d00496eafc5642f10e67', '', '+601140621059', 'Agro bank', '2006821000113896', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, 'Christina anak braoh', 'christina5994', 0, 0, '', '', '', '0000-00-00'),
(1115, 'Nila', 'Nils9t', 'd76c4579178c8272cf6fd50539e9b5207190067a5fc9f2cd2ba3cd622da664d5c82690820c69f28eb5e0c2a4d8d6d41af53c1280d734f056a5f72db203978040', '', '085789848901', '', '', '', 'user', 'Nur6Ga', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '131098', 0, 0, '', '', '', '0000-00-00'),
(1114, 'Juli', 'JulvXA', '1b9a505138c399816cf02d2db2cd9040ae5837be9b1a35b100af804f34dc81f3b5dc7466500faa2f992a1507aaea24d868c1d62d77fa46a837810c26185fe125', '', '089502767965', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Baim06', 0, 0, '', '', '', '0000-00-00'),
(1113, 'Arif', 'AriYX8', '7a384e8c6bca867f287d70c125c6b02ee2c209e93d64a2ac2ae5b9ff01c3c0d5240a3051848d6eed1d60b237edaffbae086b973371234a0fc811bb9968259998', '', '085319319290', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'sultan', 0, 0, '', '', '', '0000-00-00'),
(1112, 'Riza7799', 'RizK6v', '497b14fb136d9bd5de98ca0c9fcbe1d2ed644403977139ceb5cbf7bd7fe3812554e78209918a96c17521055a8687cd4bccfe0a388c4fa7e406a1b39f8feb2900', '', '085798885296', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'R5296rRr', 0, 0, '', '', '', '0000-00-00'),
(1111, 'Waldi', 'Wali3J', 'df6c18c80c17e56f727e8d9808680475c7b7d8bc83c7fa64f621273bb0f9745d889ae1388ac1aa91de973ef27c0a222f2517b023ac8794abbb07aadff3c9d2fa', '', '81271907179', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'waldi26', 0, 0, '', '', '', '0000-00-00'),
(1110, 'afifah123', 'afijpS', 'be34f0b1d7d9566c1514f990150a52d768bd8358f96d9b389228ecd70c14919118517cbd781b623d275a6f27ee7d665f96e48755f3f9e79c8270eb6a51da885b', '', '83863801535', '', '', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'afifah098', 0, 0, '', '', '', '0000-00-00'),
(1109, 'pahiw17', 'pahaIQ', '37398b27494881def45205e7e5585ae8e71c4c1ff0bfdff326cf33da7ff790ff8c8c5ca3a7c40eddc0367aef38855e7969435caf9a362cf14568eaf4ee11ef9e', '', '083836990083', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'kamila', 0, 0, '', '', '', '0000-00-00'),
(1108, 'stella', 'stevZS', '7c333e56f8ac03e6ad1b9ff7a70084a284a2fcaa8f5d666ab0a4d0c3f66521da46b7ef524c49700886556be6ea817d02be23d8d97d9f568992b8b3ea34b56ce8', '', '082364528111', 'Dana', '081244100206', '', 'user', 'hagXku', 'harsYU', 'melsda', '2024-06-02', 'active', 2, 'Stella Lovvie', 'screen', 0, 0, '', '', '', '2024-06-05'),
(1107, 'hagahs', 'hagXku', '00237b1d2e99125c1d0bb54b59490ed292759d7b960c848a7fb87d2399c230d1048d4345eaae19989f80afa0b13e0256cc7565e9d955dce7b06e28c4f8b06ae9', '', '0817282', '', '', '', 'user', 'harsYU', 'melsda', 'Pre4j3', '2024-06-02', 'active', 0, '', 'jajaja', 0, 0, '', '', '', '0000-00-00'),
(1106, 'harry76', 'harsYU', '220567785a9fa5a37ced5c3f493f79841a84198afec82f382847058aac8c7b3a5fe8bb9215eabd93973071c8b1c9fed58a869267a0153aa3eafa42657a72d7b7', '', '07162822', '', '', '', 'user', 'melsda', 'Pre4j3', 'Slo2Xb', '2024-06-02', 'active', 0, '', 'yougut', 0, 0, '', '', '', '0000-00-00'),
(1105, 'mamin', 'mamJVU', '623e9f64d5372da8ec3b916511d77b9ffb85711fb1b6c031b93a41f53b94815bc5aa665c4b02d01c94827c025df9cc3f13d269ce78ca482a213fa9d160335222', '', '0895331501804', 'Bank BCA ', '5677017754', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, 'mamin', '240914', 0, 0, '', '', '', '0000-00-00');
INSERT INTO `users` (`id`, `username`, `reff_code`, `password`, `full_name`, `phone`, `bank`, `account_number`, `foto`, `level_login`, `ref_gen_1`, `ref_gen_2`, `ref_gen_3`, `date_created`, `status_account`, `id_package`, `holder_name`, `pwdrecov`, `saldo_reward`, `saldo_min`, `status_agen`, `agen`, `qr`, `date_active`) VALUES
(1104, 'Kaspul123', 'KasN7T', '8fa6176c88130af2fc431c46ac946abfe9a30adc8436acfb62be15093a2e4199b37ae72fb15ecc9c9d903c961b5f7ffc3227eeae476e643ea70203cb412e2fd9', '', '083899000261', '', '', '', 'user', 'Mon9Hc', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '28okto1980', 0, 0, '', '', '', '0000-00-00'),
(1103, 'Sulliwa07', 'SulL7f', '90575f57f47847923fcbffdd413895f5cb99352e7f1a347ee9376a4d1b2a6a512d497d03efd67f86a253871f826dd4c72bf4f98b66675f7d4b881856344b0f51', '', '085774270074', '', '', '', 'user', 'emasjE', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'Jedhi1976', 0, 0, '', '', '', '0000-00-00'),
(1102, 'Sigarutu', 'SigmTh', '8e2a8bdf0e335440b10ef1d00020dd74abc45725d00a09bd0ce3814e43b043d0a6b233889f73dfaa8fd2b5320c811b2645310fc49a188bb78620e62115e29b6a', '', '081230201033', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Stissa88', 0, 0, '', '', '', '0000-00-00'),
(1101, 'Wanjp110', 'WanWsB', '3edac8f7701d0545b3a5d31c55f74b87876bbe63d367b16528e59fe5922bf646e51b0b0e7fe36d325f663e1dfee9f7d520ce16b65144281e067be23955396d11', '', '088802390263', 'DANA', '085752336744', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'MUZANNI', 'wawas123', 0, 0, '', '', '', '0000-00-00'),
(1100, 'Apalahchok', 'ApaX14', '3edac8f7701d0545b3a5d31c55f74b87876bbe63d367b16528e59fe5922bf646e51b0b0e7fe36d325f663e1dfee9f7d520ce16b65144281e067be23955396d11', '', '088802390263', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'wawas123', 0, 0, '', '', '', '0000-00-00'),
(1099, 'Manirroh', 'Manf0e', '94dc8066a693c219342aee1a4b9b10a9c3fefee6373064dfc0c0a54ebe34b6bb1faf46699a359066daa0a2dcbacbcd57bed8973ecbaf8e3547af88b780345e5a', '', '093870925035', '', '', '', 'user', 'PutGlJ', 'Slo2Xb', 'piaFf8', '2024-06-02', 'active', 0, '', '123456789', 0, 0, '', '', '', '0000-00-00'),
(1098, 'yana290', 'yanDgj', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '085321656989', 'DANA', '08754213265', '', 'user', 'Arb9Vt', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, 'yana', '123456', 0, 0, '', '', '', '0000-00-00'),
(1097, 'Unooaja123', 'Uno0Mb', '782bc5db52352a91297f9fb9a475adf7af42e35328e014fc35236172f22458920c4da824633383ef6deeff23f78abee07be4bf7f5135b5e0f0a2afced58d7a98', '', '089528642371', '', '', '', 'user', 'infpDj', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '000000', 0, 0, '', '', '', '0000-00-00'),
(1096, 'ChefiPanix', 'ChedOQ', '352cadd18daf2263a33feefed58d0b0aa2392db4e3bf8207b8771348709f3d6170b91d8438e670335d166979b2e2087c37d2eda0f776a9623c6fef00d0e9b753', '', '085722460234', '', '', '', 'user', 'emasjE', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'Panix234', 0, 0, '', '', '', '0000-00-00'),
(1095, 'Pakdecuan', 'Pak27u', '46d3521685672c551d98e60e0b78fc6056b55d6c647fff4c6fdbfff3c46851074fca28fbaac5b5e1926ab9991070123f0d4e96740bb417af8cd554ea31017b65', '', '083138336032', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Budi1983', 0, 0, '', '', '', '0000-00-00'),
(1094, 'simbolo', 'simBYn', '934e9e1dbbde0f76f762a46ae9bfb3610a65d577431c128b2df7e814419b7a0c512a4f475287734fd124710485f85b9ce54d7e4d1fd2ea93fbb7babb0977e860', '', '087842842864', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Aaaa1234', 0, 0, '', '', '', '0000-00-00'),
(1093, 'Ria123', 'RiaTzj', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '85697695871', 'BCA', '1430599743', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, 'Siagian Ria', '123456', 0, 0, '', '', '', '0000-00-00'),
(1092, 'Yogi90', 'Yog1cG', '5adf5fb6e8ffa1ce607c38496215a2268f88c31c283b6c2049fc72d4c5a36a7e6db2362e637219dcd5d49f84c5b4ca8e913aa9538a6e0bb23476140ca80cee47', '', '083139200206', '', '', '', 'user', 'emasjE', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', '121212', 0, 0, '', '', '', '0000-00-00'),
(1091, 'Nurmayanti', 'NurYZM', 'eaa012c8cc0e6849f34fcdacbe6b45415128dcec5f662aa9cd95126e7cdcddc5ccbdff6e3c5321a1c7a60d3e6077df4c8166e58c026bb585f7fd9ab117c501d5', '', '082178009924', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '4m4nur1d4', 0, 0, '', '', '', '0000-00-00'),
(1090, 'Giyo', 'GiyDcV', '45c33e504ac4d54bbc5f224d84367b6053c94bfe869d5b6a215ebb844dedd8040bc963746f0666dcbee76df8e341560cb02285d3a834eae440b71b7346973612', '', '085888947165', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'giyo12', 0, 0, '', '', '', '0000-00-00'),
(1089, 'emakra2', 'emasjE', 'd641b841b746adf598e31ed82b55190d61c46c2237b02bf643383bb7e791345dec2eebb87b9565c39265e2be017ca67a0134607c857406a2119549e9c3d34c72', '', '081374879944', 'OVO', '081374879944', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 2, 'emakrara ', '010112', 0, 0, '', '', '', '2024-06-02'),
(1088, 'Agency12', 'AgeOFW', 'd6734e588a8b5d3b748144e7fd4b92210d5343ca04a13b7e99ea225cfe292828b05e915657386c161709598761052f6ee917f49278382a435c2def60eba33ae5', '', '082220624434', '', '', '', 'user', 'Sin7m1', 'AulgPZ', 'piaFf8', '2024-06-02', 'active', 0, '', '7002902', 0, 0, '', '', '', '0000-00-00'),
(1087, 'Shod19', 'ShodOz', '925c66493fcacf1d8e19de19f4c4e56210c2480cfb943a2a02c84dfd706fb73ab9888c35214c930112832191e662e6b51b2cb1c8e96d0c41ed0eb8fd748dbc67', '', '087834490156', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Shod190211', 0, 0, '', '', '', '0000-00-00'),
(1086, 'Zulkifli12', 'ZulLoC', '9b1494d416261ae6f525af2719377bda774e4f7e9e0eb70038743dfca21c46118aa3892e3ca71f4e9ad946f3cd320a0e6dc4367c1219bf03d9aecafb2789f458', '', '81275878852', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'zikzak1980', 0, 0, '', '', '', '0000-00-00'),
(1085, 'Siska', 'Sis2cY', '925e73cb24a083aa04c071ce7ec367fbef2ab28d4aca2bf9b8b2d3dc43047bd1d98afe679d49fb7b16427ad9474130baab9a45410672171f239d3a42ca1138f6', '', '085773705165', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Hamdani', 0, 0, '', '', '', '0000-00-00'),
(1084, 'Yuli', 'YulwlU', '1b9a505138c399816cf02d2db2cd9040ae5837be9b1a35b100af804f34dc81f3b5dc7466500faa2f992a1507aaea24d868c1d62d77fa46a837810c26185fe125', '', '081387476643', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', 'Baim06', 0, 0, '', '', '', '0000-00-00'),
(1083, 'Firman', 'Firqjx', '6013a61e871ed54a3054bb3e0003820973fbec999978d469019d68e38e4e04e4fb78974f0da190bb8dbfcea7cc8f87af8cb59365ce73dd79aef5269a66ef8405', '', '82343886077', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'kona.123', 0, 0, '', '', '', '0000-00-00'),
(1082, 'Teamcuan', 'TeaODt', '5a1504cb4937a10205c4d246ae7239e2a57103d638460bf9189fc63d7510179fd00181eb7191b3ca2a4831048528f885f9715ebf8d4936f013ca5746c62059d4', '', '83845916407', '', '', '', 'user', 'zeiD6T', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'teamcuan0', 0, 0, '', '', '', '0000-00-00'),
(1081, 'Andi', 'AndTj7', '8ff699f8c8ec7594a30bfe57082bf2a2fd8fc666678a35071d549e8dcff347ca9db528d1fb0fcef8787efbdda402775c88a12179ee29845939532511e9afad58', '', '081377162093', 'Dana', '081377162093', '', 'user', 'ver930', 'pnzKsN', 'piaFf8', '2024-06-02', 'active', 1, 'Ariandi', 'jetbus123', 0, 0, '', '', '', '2024-06-02'),
(1080, 'Risnadije', 'RiswC1', 'f66760036afb9a037c4c0a61e00fcfc449509adf937a4f267c78bbe5bf5bac1714889fa4d5b9cee7ffb17186aa314cc0988a33b916d41866156cf6d9fdd75244', '', '085773666428', '', '', '', 'user', 'CuaYk4', 'NonBDh', 'MjohTv', '2024-06-02', 'active', 0, '', '11092', 0, 0, '', '', '', '0000-00-00'),
(1079, 'Nandar3', 'NanmBc', '964fae9c530892572609b5dfc6005991e2afd2dcfd672b688f9f07c4b909ed1bd294cba7f3255a7751b830d9cab21039ea1cedce80fcedf79a14d48ec0941e13', '', '0895632162800', 'Bca', '6395053497', '', 'user', 'SunEwz', 'Suhou1', 'Nanpbo', '2024-06-02', 'active', 0, 'Nandang Suhendar ', 'bonsay333', 0, 0, '', '', '', '0000-00-00'),
(1078, 'Daiz', 'Dai5im', 'e6f78c0fd0ca236950db66d35e98e5d0e9b071e05e0684cc138cc871071f56b95c23dc0c8bf4890b533c9aaa8fa418f1497b3b1fd525f75c2f5bdd11e249f533', '', '082128365290', 'bank BCA', '3370440289', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Dadang Iskandar', 'bandungbaru1', 0, 0, '', '', '', '0000-00-00'),
(1077, 'Nandang3', 'Nanr7I', '964fae9c530892572609b5dfc6005991e2afd2dcfd672b688f9f07c4b909ed1bd294cba7f3255a7751b830d9cab21039ea1cedce80fcedf79a14d48ec0941e13', '', '895632162800', '', '', '', 'user', 'SunEwz', 'Suhou1', 'Nanpbo', '2024-06-02', 'active', 0, '', 'bonsay333', 0, 0, '', '', '', '0000-00-00'),
(1076, 'Kangnandang1', 'KanHxC', '964fae9c530892572609b5dfc6005991e2afd2dcfd672b688f9f07c4b909ed1bd294cba7f3255a7751b830d9cab21039ea1cedce80fcedf79a14d48ec0941e13', '', '0895632162800', '', '', '', 'user', 'SunEwz', 'Suhou1', 'Nanpbo', '2024-06-02', 'active', 0, '', 'bonsay333', 0, 0, '', '', '', '0000-00-00'),
(1075, 'Sunandar1', 'SunEwz', '964fae9c530892572609b5dfc6005991e2afd2dcfd672b688f9f07c4b909ed1bd294cba7f3255a7751b830d9cab21039ea1cedce80fcedf79a14d48ec0941e13', '', '082255882607', '', '', '', 'user', 'Suhou1', 'Nanpbo', 'Nur6Ga', '2024-06-02', 'active', 0, '', 'bonsay333', 0, 0, '', '', '', '0000-00-00'),
(1074, 'Nanadar1', 'Nanvy9', '964fae9c530892572609b5dfc6005991e2afd2dcfd672b688f9f07c4b909ed1bd294cba7f3255a7751b830d9cab21039ea1cedce80fcedf79a14d48ec0941e13', '', '82255882607', '', '', '', 'user', 'Suhou1', 'Nanpbo', 'Nur6Ga', '2024-06-02', 'active', 0, '', 'bonsay333', 0, 0, '', '', '', '0000-00-00'),
(1073, 'Suhendar1', 'Suhou1', '964fae9c530892572609b5dfc6005991e2afd2dcfd672b688f9f07c4b909ed1bd294cba7f3255a7751b830d9cab21039ea1cedce80fcedf79a14d48ec0941e13', '', '82255882608', '', '', '', 'user', 'Nanpbo', 'Nur6Ga', 'piaFf8', '2024-06-02', 'active', 0, '', 'bonsay333', 0, 0, '', '', '', '0000-00-00'),
(1072, 'Menanti', 'Menc0s', '5c430c23ae0105bd1ebc565df83a8e108d037954b8f83dea13ae31342de713ee85c0e4a25e390ba685831010178e3347515adfcf971392aa7899b2769bdd3ec3', '', '085692633088', 'Dana', '0856692633088', '', 'user', 'GphiT3', 'NovR0Y', 'Slo2Xb', '2024-06-02', 'active', 0, 'Ishomulloh', 'U#123oke', 0, 0, '', '', '', '0000-00-00'),
(1071, 'Rohili23', 'RohQ0h', 'ae8f0ab54671ff8ce6610314c58943975abf4d235ca23fbf2c5120f6f24b964bbef4755e64b87179889bf7fb834f10069d43a6e44e0bcb1c4678281286acc6e3', '', '085691085078', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'Rohili99', 0, 0, '', '', '', '0000-00-00'),
(1070, 'Ibankabank', 'IbampD', '06bafeaeac8b8aef30e95d65631ab963581fdabc4c9a7fd04d71c93426d79ee7f85ada1dcba1c91648c8521538183adb6fb6af60d222f02ac737ada0a5394e49', '', '081703364540', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Wallet123', 0, 0, '', '', '', '0000-00-00'),
(1069, 'armann', 'armfjV', 'e4e0a2a62207ed8c23b22d5a88e7a6991f7b34a1d6e82993424971b2379783a5b7a9678238c6f61e0387a57614443725082e043baaa7a631bdfc0b75ab7401a6', '', '083150062597', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Setanbelang123', 0, 0, '', '', '', '0000-00-00'),
(1068, 'Chandraklz', 'Cha1jI', 'e70256b864fb773e91bb06af64acbaba87ac1a4046e6d89a0943bc55392d88ddfefa7f374cf494e05e9982ff14c6d1597ac8358ceaccef890d4d622f373c1959', '', '08817492253', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'persija1', 0, 0, '', '', '', '0000-00-00'),
(1067, 'Gesrek', 'Geshl9', '5564578fdcbb6ddd79a86f18ba9685fb28cae5376e019bac8bf728120c25bb21eacfbc068fca23327341e10c417bb177ad041fb8cedfd6093fc2435113ea6f54', '', '0895334965297', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'kidot0998', 0, 0, '', '', '', '0000-00-00'),
(1066, 'Joeyking', 'Joe8E9', '2e78dc433e7450d7b1e3275573d0100ce4d4c4f2a96ef7262afa2c08b9e3954d5a7b5d4caab2843fcb0c027f4448af0511ee1676bf00a0d51710c7c1d2eda2e6', '', '082131645048', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Sukses2024', 0, 0, '', '', '', '0000-00-00'),
(1065, 'Kookie', 'Koox7p', 'b54d3623f6279b343f2940cbd95a70e2c7be4c5d6458fcf7e4c8c97ac8612cec53375b2385e1d7f025f94e5129faad15349c67574f8359d3f36489bb65b0744b', '', '081284434964', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '050799', 0, 0, '', '', '', '0000-00-00'),
(1064, 'Indra546', 'Indihn', '9b02c2d0a34042a9c3c881f3e879c6a2fb6e4d9ce34975c6a6fa350955b3dd4d431c123ea1adbffc470f52ae54b90e33bc899c424760ad61497d6c70a47b0ee3', '', '083822644151', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'Sukabumi1', 0, 0, '', '', '', '0000-00-00'),
(1063, 'melati', 'melsda', 'bbc5f1e56a1f3ef3f5f5c76b30b6869c26d80f61657c4b05e2d8ea62b799006194f0b4ed8abc2b5a801cbdf05c6bb60736cc8d12886d01dd710c03d41774f830', '', '08162722', '', '', '', 'user', 'Pre4j3', 'Slo2Xb', 'piaFf8', '2024-06-02', 'active', 0, '', '4321', 0, 0, '', '', '', '0000-00-00'),
(1062, 'sudirno', 'sudxbv', 'd6be8b61e552ecf786638047ce240b74deb2b7c95a2497f2b05074d513244bb912f844d4cfb6e60658045fc890ea9b3fedc93940096cdc6a554673860744f34e', '', '081326605667', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'karangsaribarat', 0, 0, '', '', '', '0000-00-00'),
(1061, 'Fahadad', 'FahkI0', 'b7ea5011e69e83f4bfa0846d1901db34722c1c7a70cf8acc40ed16383252584de6a453da1d85b4211c21f8b0393e68b872a5ffdb6ca389181b5dc0463bde1926', '', '082129495987', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'Ikanpari12', 0, 0, '', '', '', '0000-00-00'),
(1060, 'Gemoy007', 'Gemkv9', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '089696220007', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', '123456', 0, 0, '', '', '', '0000-00-00'),
(1059, 'Johan', 'JohaJX', '0c105b16f04df654721c937bfdf39a2f9d09a501fb904099fe00b0ee92b09bd20be169fa8470e64ff26828c1b924a91c742668f2940146d0268b8df28d64eb48', '', '082181824164', '', '', '', 'user', 'DonvFA', 'JuaDm1', 'graoEL', '2024-06-02', 'active', 0, '', 'johan2', 0, 0, '', '', '', '0000-00-00'),
(1058, 'Sambojp02', 'SamK1Y', 'ab2edbe6aa450e72ffe96bfe6a3644b8cdaa6de47929b8e23b91fad498c3a67535ac89f24932fb3b8498c715c97e48a72204fca20de037d891f19b9687969c45', '', '081585855293', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Rio2005', 0, 0, '', '', '', '0000-00-00'),
(1057, 'Gphoki', 'GphiT3', 'c31042d2e678a6c42dbeabf036c039c9a9c4882fda0704df47a7002153495ffebdbda7e6c5fc51c3f7b09216dd1c9dabbee4b996fdcf8440b0b85c56f0203789', '', '082279396780', '', '', '', 'user', 'NovR0Y', 'Slo2Xb', 'piaFf8', '2024-06-02', 'active', 0, '', '281945', 0, 0, '', '', '', '0000-00-00'),
(1056, 'Putri19', 'PutGlJ', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '85850300723', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '123456', 0, 0, '', '', '', '0000-00-00'),
(1055, 'abner123', 'abnxgm', '0d08c0e712efc6145e383275b513d280fbe9b05daff9916cfcca8735d3dded5fd7f85cf3155f3c668dcf289c63f958e79c82be9299747a26b649e60207ba7ef1', '', '88888888889', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'abner123', 0, 0, '', '', '', '0000-00-00'),
(1054, 'Lulu', 'Lulsk0', 'f5dffc7ceba42286b4d3a063cd44074898954dadaf0d079b643404bf19a75afd5d9edd3c1152de09037b46926a2e2bb67e9a9c2789258a78f913dcfd1b2d818f', '', '085860295963', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '261179', 0, 0, '', '', '', '0000-00-00'),
(1053, 'Cuanfitri2024', 'CuaTqI', '53fb860b6e934e38477f6df6d7664f6a5c4124b5fb9f8c88d8efab6eb9e8cd081c995fe14354f18016a72324129150ba066a15e5899b08b94922e7561bf29691', '', '083834159943', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 3, '', 'abc123', 0, 0, '', '', '', '2024-06-02'),
(1052, 'Muhai', 'MuhgAc', 'f50917dda60402d17db8b1911f1ec2186a3861e51ddd2caab03e9dbeacb4e5fc92ccbb963f3c22ef88a3d76c69d35e3df3f1063229618c05831c273830668449', '', '082261028460', '', '', '', 'user', 'Mon9Hc', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '112233', 0, 0, '', '', '', '0000-00-00'),
(1051, 'EtiSetiawati', 'EtiI5r', '27f642a672573df437eeeb4fbbdfc0ba232cb56f829492278052f8e0a4d41ab28b06ccc1b5cacca04b80a75c518b4f24003668db3620b61392ed5790a3c4da45', '', '08122178856', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'eti186', 0, 0, '', '', '', '0000-00-00'),
(1050, 'Preman', 'Pre4j3', '4272f0f63ecf5a017f2a6b89b4ed7c75d9fc4b1929f83661432068539b4a7b2ec2628f017d4bac2779bcd02981efe09f2a01de9df3cf9b0b2c9dbac43a94b39b', '', '085266776677', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '999999', 0, 0, '', '', '', '0000-00-00'),
(1049, 'wahyu', 'wahwCM', '169a58b09dcae0fb4398b2a362741b0141a0bacbd7db11a83d6c9c1660e8d915d7ee750df2bd4dee7ae2e7d3fb1c85146c60c4f256491c4f95055f000bf433ea', '', '087830021364', '', '', '', 'user', 'Mon9Hc', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'wahyuajip', 0, 0, '', '', '', '0000-00-00'),
(1048, 'Denyadi', 'Den3q2', '498f2deafd5d4a7e64448c7a6b508fd2c9860773e0ea35e0091cac28d99466b46dee2d9f4df43919e90bb51c4dd7ae9175800feff17d39d0ea69f31f47b6b741', '', '81321244652', 'DANA', '081321244652', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, 'Deni Mulyadi', 'jakara010203', 0, 0, '', '', '', '0000-00-00'),
(1047, 'Alifa123', 'AliZ4q', 'bd8fda63131d5442434c624e288efcacaabf63ba9cff4326535daf534ce805c5cf16388a75635f65349d423eeca8cffee2a35132d318b35847535b0a790a61ce', '', '085238721540', '', '', '', 'user', 'AdiOFG', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Naila123', 0, 0, '', '', '', '0000-00-00'),
(1046, 'sahriwan', 'sahgxp', '94dc8066a693c219342aee1a4b9b10a9c3fefee6373064dfc0c0a54ebe34b6bb1faf46699a359066daa0a2dcbacbcd57bed8973ecbaf8e3547af88b780345e5a', '', '083189318409', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '123456789', 0, 0, '', '', '', '0000-00-00'),
(1045, 'HadiSuwito', 'HadJz6', 'cd101eed0b70d8b28873d5b5a58a15ee56aa992ba24744982ff835762550876a56ef9a314adaffb70248bce38183b16a00d57d9e8373d3e8206e210caa959cec', '', '+62882008811643', '', '', '', 'user', 'CuaYk4', 'NonBDh', 'MjohTv', '2024-06-02', 'active', 0, '', 'Smartpeople01', 0, 0, '', '', '', '0000-00-00'),
(1044, 'Berkah68', 'BerBkH', 'c03bc328e1b538fc6db47bf24321e7257fd2591daeafb76e169a8c6304022620aaaa837f6e24fd0102218f44d395a7f4dd87c61f95ef0b296036c140a50214ab', '', '083176291307', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Salaman123', 0, 0, '', '', '', '0000-00-00'),
(1043, 'MUHAMMADAFIFGHIYATS', 'MUHB9x', '7813a17031ae965ebf4bffc68ff21861dcf2b986aeee9e766afea3d220a42bf92237f2a548bd5f66bda84c0d2944769126ca9f27ae31abe404e0b990b5090129', '', '0895337422161', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '654321', 0, 0, '', '', '', '0000-00-00'),
(1042, 'MURAMMADAFIFGHIYATS', 'MURQJq', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '895337422161', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '123456', 0, 0, '', '', '', '0000-00-00'),
(1041, 'Jakpot', 'JakG5E', '29cf7d4434a6f9f1e190408fed43ab95e5b3efc16b14dc60b8fa989496dd40b33e97e743cf6a9050916e28d7707480dea4ba94b1fbbd86e6d49ee94e6c781334', '', '083874418358', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'tasik123', 0, 0, '', '', '', '0000-00-00'),
(1040, 'Partnercuann', 'ParKTI', 'bebf4aba2589c68a60aef29e609635200991f71ef69f4a3690054d92e338046495013cfd1c18bcd486c3f87472f32de6dbe20b227cc1d20c9b2dfd993f8d9b49', '', '085883049285', '', '', '', 'user', 'AdiOFG', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Bani1998', 0, 0, '', '', '', '0000-00-00'),
(1039, 'Noviawan', 'NovR0Y', '80489496a83a50c2214ceb9ed5322639390fd9d039e00cf0e1f16b96faeeb7592399cf6650080320091cbe5f6cb79653a13e48a900c1609c73bb43ae5c090b06', '', '081391775998', 'Gopay ', '081391775998', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, 'Wahyu noviawan', 'asdf1234', 0, 0, '', '', '', '0000-00-00'),
(1038, 'vera', 'ver930', '2e367180e671bde1bcefe62c45b8eaae56bb55311c4e0993c02737a74831128dce0a6c4f076647865aa1359fa7a97fa1621f4f91fb78f0301ff3468514ad2a8e', '', '085740167850', 'Dana', '085740167850', '', 'user', 'pnzKsN', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 2, 'yuliana', '226187', 0, 0, '', '', '', '2024-06-02'),
(1037, 'ALPANDI', 'ALPLzH', '89b5c859f9603e1f53292331b6f2beeedc35f642a23fb596650c406dc878a34f3223cd5e000bfb4965e3d4b687f5985ed6efc6266fc579f002726fb36ee5c621', '', '085881697524', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'MUZEK', 0, 0, '', '', '', '0000-00-00'),
(1036, 'SAJIDINGUNGUN', 'SAJK6v', 'af60736579f553d7ca39148589a817a5a1bc7641ba93ebd7ab84ca800ff72e7fbb9a6e464e3ef57dd9397cd174e0a8f4f3f71fe8a44aeb4d191a0d72685dc235', '', '81321676162', '', '', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, '', '193311', 0, 0, '', '', '', '0000-00-00'),
(1035, 'Asep07', 'AseTz6', '2f59c73530a9fd17b5a6d2026d65f59affb1fcc9dff9239b46e7fb5749a72e9d88ccb4122481eb98cc552354e32c7e49f0327e43fef75be86d6f55c9e62876f6', '', '0895331932767', '', '', '', 'user', 'CekCQt', 'And3w2', 'BisjcY', '2024-06-02', 'active', 0, '', '240770', 0, 0, '', '', '', '0000-00-00'),
(1034, 'Dirazai', 'DirAYh', 'c8701f7acf5e1162fc6cca074bc7ecc7d69fbb3c79429c64c49e4e3de1e02bf395aabe74cb3157a055acebcb6cf16dff291447a67345c54c98b965124d9eada9', '', '081371057617', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'dira123', 0, 0, '', '', '', '0000-00-00'),
(1033, 'An993r', 'An9dTW', '99990e2d78eb2eeca7ca8601b3fabe7378371460a6db5f9604d77dc8770c203fa9f32a9e1b015971f4158ccfe6558feea5ba931c389fe3fafec3c17f273c7cd0', '', '0881023593946', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'nt3sasar', 0, 0, '', '', '', '0000-00-00'),
(1032, 'Ariel', 'AripIt', '8e865f386dc01cdc9f338bf58db4123de40dd569fe99aae4a0ff7657b68d951b3d37f6e18f38a7841761efaf1a5fdcbdefbf6c452a1a788d4e9a6025bfa30f74', '', '081372278502', '', '', '', 'user', 'Kroecf', 'CualCZ', 'StrDI1', '2024-06-02', 'active', 0, '', '12345678sa', 0, 0, '', '', '', '0000-00-00'),
(1031, 'Eee111', 'EeerHz', 'd503156956f41abbb41de28e3aabdb4d31a3df4328b50ec81ba5c2df8580b22319a13146314c4186c707265fba9be6f93705cedf56433914ce76617acd2d32c4', '', '086434675567', '', '', '', 'user', 'AaafDr', 'Sepyrz', 'Kroecf', '2024-06-02', 'active', 0, '', 'Eee111', 0, 0, '', '', '', '0000-00-00'),
(1030, 'Ddd111', 'DddI0v', 'ec5eee2fc9a215b8c078d30071996809d5eedb45bfbc0a5551bc2969f61dea0cfefe593981240f58284ea37392e41f38a030c2cfba2e8b46a195e5aef15d583b', '', '08642366344', '', '', '', 'user', 'AaafDr', 'Sepyrz', 'Kroecf', '2024-06-02', 'active', 0, '', 'Ddd111', 0, 0, '', '', '', '0000-00-00'),
(1029, 'Parihv458', 'ParubT', '55ba520454ce24a56cebe80ef924290cc012faebb85511cf027acfa05a04a45bbf1bbb45d241cb8254a6aeda2a4098f85afc13db46a38051c508b2ec819c8a48', '', 'Parih,,45881312233411', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Parih458', 0, 0, '', '', '', '0000-00-00'),
(1028, 'Ccc111', 'CcchkY', '75ca63f00c0ad2de7319d47aa1506b967a6960d24a86672712bf8e5fcd6800744acf0f1fa8748875adc7282c685a5ef2ae227704a54118dcb8d051f45536ff79', '', '088248237277', '', '', '', 'user', 'AaafDr', 'Sepyrz', 'Kroecf', '2024-06-02', 'active', 0, '', 'Ccc111', 0, 0, '', '', '', '0000-00-00'),
(1027, 'hboyolali', 'hbojnW', '2ae38ab8f1f12f8aa8ba8ea66542424880c3977ff61009589f4a073710e070e61083316446042a6ed8a18572eddc9d02083ae538633dd3800d237a18e9703872', '', '085323672831', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'heri2020', 0, 0, '', '', '', '0000-00-00'),
(1026, 'dimas123', 'dimDmB', '6c1551d039177140babef14a57cf92277e96551170cab32ecf89b42a2512c43e9314cb0bc75bf288e4f635fccdd354284219348f39b40cf42e947520fef75db0', '', '085814596849', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'dimas12345', 0, 0, '', '', '', '0000-00-00'),
(1025, 'Ajk', 'AjkO6r', '663228ab46c70516e1c9abdc4f3a1837ad9698e616380f2a8f9deef68cf71624030e9467bf80241df526f23309679b9679b908a4fd6e7b215c79788affea3b9f', '', '085867588312', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Ajk Nugroho', 0, 0, '', '', '', '0000-00-00'),
(1024, 'Sofy', 'SofxMK', '7f4cbfd76380fc9a608eef24eaf874eb10d80278cbc5b8b095d0946743c6c2ea93a04d54369d255f11a4764d389ba100d8f15884744b816c3cd4f2db69cd60bf', '', 'Sopiyah10', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Sopiyah10', 0, 0, '', '', '', '0000-00-00'),
(1023, 'Gesa', 'GesSKX', '717149169927732e21e3d2ab7eada37a368e9458cca3c23bcd06f109d7cc083d72c22e417c515b82bd4c55a46ac3b91f6a03bdc7809a6320b21e85667c677cb5', '', '083840223619', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'gesamangudin18', 0, 0, '', '', '', '0000-00-00'),
(1022, 'Bbb111', 'BbbFrM', '843ce5ea13040f4baa727c81b77f72c481206c37b2948f502092f3482acb742547205753cfc3b51f5fca75be47aa114ff849c590a2b6e4a055440b2067fb820d', '', '086434567788', '', '', '', 'user', 'AaafDr', 'Sepyrz', 'Kroecf', '2024-06-02', 'active', 0, '', 'Bbb111', 0, 0, '', '', '', '0000-00-00'),
(1021, 'Dikai291019', 'Dikzd7', '6c1551d039177140babef14a57cf92277e96551170cab32ecf89b42a2512c43e9314cb0bc75bf288e4f635fccdd354284219348f39b40cf42e947520fef75db0', '', '085893145610', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'dimas12345', 0, 0, '', '', '', '0000-00-00'),
(1020, 'Colmek3jari', 'ColPS1', '12b88b460da8d3ed9c4b90a01ddca5db3372f631c8e850deea6bb4ab232e939b76b818d7d0abdbc3c5ac226950fa7a9822dc073adcd52c3d75034a2c7448f2a9', '', '082218487533', '', '', '', 'user', 'Slo2Xb', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Cianjur0203', 0, 0, '', '', '', '0000-00-00'),
(1019, 'Tasya94', 'TasPhX', '2233c1086dd7ec5e4275fe204eae9d0259656907ff9768c2461cf3eb44b2828c764ce4c85580dc79eced80055ebd3a3ff66438330dab16705b2b2c24cc99ceae', '', '083162501079', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'lopkil890', 0, 0, '', '', '', '0000-00-00'),
(1018, 'Sss111', 'Sss0tn', 'f53388a59e9840446890f87f7747c5cfdc4ee8cc03b92031b5ee3235af615efbdc84324fc277a91fb343f9239b9baf5e039b9f6d0e6aa9bade4db4e753d5fa6d', '', 'Sss111', '', '', '', 'user', 'AaafDr', 'Sepyrz', 'Kroecf', '2024-06-02', 'active', 0, '', 'Sss111', 0, 0, '', '', '', '0000-00-00'),
(1017, 'Slowbro', 'Slo2Xb', 'b0e63c1bf4be498e7fefa9692488e65d7ce87bf236544966c5426a422c1bb8904062f355d186807d8cca96f4c585150b6b5b22a9a40c5229c0866fa82e27e845', '', '081224520381', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'umurku32', 0, 0, '', '', '', '0000-00-00'),
(1016, 'Realisasi', 'ReaUg8', 'a98a03e31269ac68b88716fe5a4b8916603b3c8275a84d48bfc57a14021b1b1f5482c1a0ba49031479251f4abc33d653f3308ef4c45f25e11d445517dc05b4f5', '', '85261710108', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '123123', 0, 0, '', '', '', '0000-00-00'),
(1015, 'Aaa111', 'AaafDr', 'fd9bd112c1817f88afbc6afcb42d3a88aa58a1e030cf7b18c02dab21f0992a88feefe789e714c3cbc6c527339c18c2064e7688797433253c9328dcfd3c1d56cd', '', '085358290862', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'Aaa111', 0, 0, '', '', '', '0000-00-00'),
(1014, 'Jssjjsjs', 'JssRxn', 'fd9bd112c1817f88afbc6afcb42d3a88aa58a1e030cf7b18c02dab21f0992a88feefe789e714c3cbc6c527339c18c2064e7688797433253c9328dcfd3c1d56cd', '', '086234833337', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'Aaa111', 0, 0, '', '', '', '0000-00-00'),
(1013, 'AhmadSudisman', 'Ahm3Qu', 'f2b24658b88f5ed0607f49982881286a77e023092c754b7c5c50ffb901018bd1a83edef9ca8114d2554c658340100c26dea216dc817d61b1b81128928fdaf4a5', '', '081380039803', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Ahmad1985', 0, 0, '', '', '', '0000-00-00'),
(1012, 'Ilham', 'IlhdzH', 'cef50b833ae8b2c15ed27d0349fc7266411c5e3f604382d7885d2be9214685a1b7dc2346fcdbd2c7e180a8ddf8091a58722dbfe1bdf9912487fa6047a37acad7', '', '089508810915', '', '', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, '', 'ilham123', 0, 0, '', '', '', '0000-00-00'),
(1011, 'muflih', 'mufnt0', '57265b4108b39f41ebed9c9f62fdbfc31272795e6d9f91e789ac272d6fe2bf59e34b24f7a4aeddece24a6131e0f005d65e74518c3f81fd1c9ff9d92f4e719b41', '', '087765905595', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'karangtengah', 0, 0, '', '', '', '0000-00-00'),
(1010, 'MuhammadNurpalah', 'MuhaNr', '39d08c9786e12a2bdf109bd98cfd6d7a83129da2ff9add0aa6aa82d820b268d1f37be6ec8b7b99934d3a725b297fb2b2335ab90224f3877c6b894b95bbbfca99', '', '083895091047', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '$$$$&&&&', 0, 0, '', '', '', '0000-00-00'),
(1009, 'ADITIA', 'ADIxfR', 'c36988fb479425ef168dfab30b98b683d1242676a4ac3750bfeecff10a4df4877a8c673584c0156f79fdc3e184feab0248bf78a45078c299607512e00572ebd5', '', '082280954765', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'ADITIA80', 0, 0, '', '', '', '0000-00-00'),
(1008, 'TamHia', 'Tam4b6', '5598e27f619d759fd27d4c83f8adaa19ec9ae42a97befd865265c90cd7c3f27dc0fb66c0051f9a51c73adfccfce55977989523429ece60784c6918c89db8b32a', '', '081396384336', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'his12345', 0, 0, '', '', '', '0000-00-00'),
(1007, 'Babi1', 'BablSg', 'b98feb126c6a522f7516de25f5a69ababe57b758645cd6e41b98bb8c279baaaa5b7c1c55674afa7ec680d1d109a80b11156da636edc94be72f5766d325929aeb', '', '148792564', 'Bca', '8205531391', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Muhammad Rizki Fadillah Hambali ', 'babi123', 0, 0, '', '', '', '0000-00-00'),
(1006, 'Pop', 'PopPyF', 'f991b325a376a296d70924b1625ce9e1cac937592e1be72fd51d85bcda4eb2098dde7baa86323d0efb6fe1f565eda9c1cf8663cf8a5df61f5c528521e097e4fb', '', '087838401990', 'Dana', '087838401990', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Dedik', '031710', 0, 0, '', '', '', '0000-00-00'),
(1005, 'Alan123', 'AlaU7H', '9de6e08268c6b3a672e5ec67f1e78e5bdc072f16d263a3c33dd7b9fedeb65d3ddf353b93444a50757ff6b7b8f908c9508e85b800d1949f9f6fcc18b5f2945879', '', '085864158553', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'bondan123', 0, 0, '', '', '', '0000-00-00'),
(1004, 'ADEFAISAL', 'ADEbyk', 'e2413559a123b982d6749697c4786c17590ba53566ebebb7fef3b3a8944e6c9ae406a03c594a08e47783391083837710333a5dd432143ab400220d44ccf5d528', '', '082119774375', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'jasuke45', 0, 0, '', '', '', '0000-00-00'),
(1003, 'Alimaskun', 'AliG4x', '10651160e2819f990a4681829200a5068711e85013152a72e2c8781da02e4aa28668f1294efdb148c4abefe4484c538c9bd1ed03edfce3a85cc2fcb3158520fc', '', '082326290485', '', '', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, '', 'bersmamuya', 0, 0, '', '', '', '0000-00-00'),
(1002, 'chrisyoi', 'chrKWQ', '4fac45a43aba27ccf904a7125b1c226d9bf6b3202ae54a09eb7bf5eabaaab67052a119ae9784962e956835632466a382fb70dd24fb28ac12e375333c6c7f1ccc', '', '085268970968', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Sayabisa1234', 0, 0, '', '', '', '0000-00-00'),
(1001, 'dhea', 'dheeg0', '9aee578d0e7071d955d76df7d19677dab4398851ed2460dffc9181e57a745f464392d513947dac2e034db2151cf607ddb37d080ab288e5c188ed22e26c73a82c', '', '082141432105', '', '', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, '', 'aselole28', 0, 0, '', '', '', '0000-00-00'),
(1000, 'Inna', 'InniCl', '0048668dfaf7513346805ceb22965ab7ee040ed4c32ef79493ef599fb705ca387ae973f019ece8ca5064678272bf0fea3db1fe8bb45ba913ce5af167dc6f13b6', '', '083120975781', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'innah0508', 0, 0, '', '', '', '0000-00-00'),
(999, 'Andriwijaya@gamil.com', 'AndKlA', '697dd5544dd2cea3011039ad63a067165752f6bf49cf6f69754864872b9973acc06d521e3180828f7f80519933bc90a022d2f334198e60a70f0bad2c67ad6f6e', '', '081522802594', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', '113355', 0, 0, '', '', '', '0000-00-00'),
(998, 'Dede', 'DedY7a', '66dcde6f5df5dfdd6e14ab21d611b620ef7cb0e770c03939c9216f2dda84fa374b9ecf2a26ae3f49e21218e4fcac1a1f612d4dd3656d4d15273e4a50993e3b59', '', '082210321137', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'De237322', 0, 0, '', '', '', '0000-00-00'),
(997, 'Jaha1', 'JahsCu', '48347af72c8f44b4edc47cc748bbf60978e319c13f22fb461bf5f30f5ef62158b3ce05bb2c5fabc9a01e7fca9edf68f2b60b988b2cc6de46a4b847084c055a58', '', '0895327010651', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'asdf123', 0, 0, '', '', '', '0000-00-00'),
(996, 'Has', 'Hasqn5', '2b0ee3e136c774287959319253d264b4583cb903c7589377274dbcf8e5374fe18bb557e2ed2203a45f91073a6bd0a15eca8f7c595cbe5c32e67d98151f2db89a', '', '81573435677', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'aassdd', 0, 0, '', '', '', '0000-00-00'),
(995, 'Dayhead', 'Day7K9', '5997736cb8bdff8748a8faf7aa2d54f3e0a41532ee21e995b06bf97a653349adec39da7192af6b081c26412e76a689493a0de22398c5623fb4a38d5f80e8e755', '', '081270128386', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'supiahsono', 0, 0, '', '', '', '0000-00-00'),
(994, 'Kukuyy', 'KukCyR', '5a7d1f509287a1791984cbbd59c434fc604de3867c883c4b2cca089ad69321d1ab75f656cec8cbf7ddd4718d6a88bee03d1820897b3442061aa1c374753c646c', '', '+62895327010651', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'Helmi098*', 0, 0, '', '', '', '0000-00-00'),
(993, 'Masafir22', 'Masmth', '6e03a3d97cb29ed4cc1368906a9534b57301efb28a00173a6bb50ae64d7b7fbe601c9f2a85dc71b9f4d16f660e4def788fd09c412791fbbc1a72362a1b2bb94e', '', '087769420804', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'superiots22', 0, 0, '', '', '', '0000-00-00'),
(992, 'zuan', 'zua2GP', '00bff738fa03cde819e9bccebcc61e5da14b1cbb850cd082b7ab2686fcf107994cb738cea09060c98cc06417c733908fd1d54ff28fc916f7a8322a41a7789c88', '', '089637893009', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'zuanher24', 0, 0, '', '', '', '0000-00-00'),
(991, 'Ceka212', 'CekCQt', 'faadccf9875e4670cad8a64fe887eac7f8f2794fb1a3475a8170bc0fd89ed6ceb3423a1b9a793ead33049f3b97834c91a55c89b09db1d71613e3b339b37aba87', '', '0881023392915', 'DANA', '0881023392915', '', 'user', 'And3w2', 'BisjcY', 'AndUy6', '2024-06-02', 'active', 0, 'CANDRA KOMARA', 'B0lang77', 0, 0, '', '', '', '2024-06-02'),
(990, 'Cuan150', 'CuaeiG', 'c65abce1b18526eff4d2d6f3cf35e27e7104aa89f86be97f32f23517453deedc16ccc61865caa93fb83d308e2dd660dd3e612d4e13dec3ee3189be34c5f74091', '', '083117451245', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'wijaya50', 0, 0, '', '', '', '0000-00-00'),
(989, 'Samsularifin', 'SamOUu', '71d2bbe2f4ff7dfac2127eb7e1ccf03a62f398665d24b41c6e44056140653cd4c94fbebe61cecfa6d46bca1cdb22a1f12e72dbc6883c1cb95df76e42f2d23632', '', '89670880107', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'King2002', 0, 0, '', '', '', '0000-00-00'),
(988, 'Rahmadani', 'RahaXR', '18337fb3308265f2e43a1a06268f64d012eb336d43ce08ff631af308f0eb9c688b952d17ff59f0f34a5115a8546b966a89b9897dcdcb1cc055a711995ec0a767', '', '085765256867', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'dani040103', 0, 0, '', '', '', '0000-00-00'),
(987, 'Ernawati', 'ErnvNr', '5735cdbff9a8225d99197995de1488740198714920c0df46d6b225ad246db310b8959936e66bba724a014b2b69fa790993bf33e88f90e7496f838871b76da361', '', '081957264626', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', 'lonra9999', 0, 0, '', '', '', '0000-00-00'),
(986, 'Uyanbe', 'UyaYmI', 'a2b6e2a4a719e0adde80802e59b923e875b4a432270d929a0973995d4060e7c5ce7cdb5b953abf48bd3b80619fc997e5eed54a86977204e03308576c80cdac31', '', '082115005853', 'DANA', '082115005853', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Yana mulyana', 'Ciamis4321', 0, 0, '', '', '', '0000-00-00'),
(985, 'JaneBibu', 'JanYEo', '937c45dfe467699b3fec1d9afa20a15f829e87cce041f9088f72adb190211ca785b8864880d8cf4a8ba979b0747aac4f14647a8eabd243533e85979c9e05f8cf', '', '85314260064', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '040106', 0, 0, '', '', '', '0000-00-00'),
(984, 'Andriwijaya', 'AndGL7', '599bd58882d1670897964ab97d57b4faf8d8608ee01bf2fd0aba23a9909b305282f203b69a8120198852af183abb2446f289924fa5fc36db7a2ffaa21eccb57f', '', '081522802594', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', 'Sekolah11', 0, 0, '', '', '', '0000-00-00'),
(983, 'rifaldimuhtar99@gamil.com', 'rifMx6', '15675c11666250adc3190d5e68ef97bef7b434a564c5989a86b5498a31905c5140272d879ed87dc3474757aee26af496a6de1129589656f22419b94caa8d6b67', '', '083844647240', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'RIFALDI220720', 0, 0, '', '', '', '0000-00-00'),
(982, 'Abdul', 'AbduT7', 'b8364f6c973a1a8b87bf7e41ec1d65bf647a9c5f6ddde67bd215eaf9b0d33539a12711a7a1d1c883c172ecbd583521771ce23847b8c84c675d9852ee7cf77900', '', '081278742323', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'royal123', 0, 0, '', '', '', '0000-00-00'),
(981, 'Rayhan777', 'Rayk1w', '79a38b76162c623b8c495a3a21d4c2abad5534f8dad0348c4fc77135a6e363af1ea3fe6f2b5f2e94c114ceb11b4fef8a34bd29112fbe22fff800ff5ed141c3b1', '', '82335921358', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'rayhan123', 0, 0, '', '', '', '0000-00-00'),
(980, '11111', '111ayE', 'd3acf8365e3767a4ab649eb7b78461260c8672026b7ac1f02e6e0d693ed5d42a51e4cc53fb21e81ecc0724cdbe8231c2b252baf475d903d4ab71fae5683b7e2e', '', '0895417404940', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'tulang234', 0, 0, '', '', '', '0000-00-00'),
(979, 'Cuann', 'Cuacmn', '51b5e17155ab088987d9fdfcb7948fd5d50df3c3c4c33d55e71e0a98752ad541801388b769eafb654279828acda9e0cb74892faa791f9844a8b2f2838cecd57e', '', '89666913512', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'ResiNH0324', 0, 0, '', '', '', '0000-00-00'),
(978, 'deri', 'derL28', 'c55e07df0d8f5cb2a0212ef72e126c18060d868bcee806313e0a3f901b88e27456dc4d140b0d38a7981a27a8023c79b9ce0a8623c25d0c8e1ce4952ce7b63382', '', '0895386084351', '', '', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'deri090998', 0, 0, '', '', '', '0000-00-00'),
(977, 'SitiYuliana', 'SitmPT', '498f4d85a42f97cc0d514d02bb3430bdd67088bd62f6b627359e5150e20aae7f691d9155ea99c19e17d422872e1c34c6dbcccda8362b01d462e3ab5a48015c9b', '', '085648950273', 'Dana', '085648950273', '', 'user', 'roynPz', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Siti Yuliana', 'pl050l0r', 0, 0, '', '', '', '0000-00-00'),
(976, 'Narsim', 'NarH9p', '5d624f85b045f2d331372a210485188957865b2c1a51321bd529d4c63e443b68577ca37eca5dcaa5bbb5378646486a54aff48a119d1071ed78469e0387cd3117', '', '081232680983', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'Annaya01', 0, 0, '', '', '', '0000-00-00'),
(975, 'Aricadabra', 'AriFxv', '64298a832ae5af220a51b49cf0040a380d37a1d2d833fccd87b7c682f932ff9d2de5f35dd5c8b9f40bca48cf432b16b8ba73b09c8d01b3139ca5f9102a6402f6', '', '085161578061', '', '', '', 'user', 'AnghsW', 'AngJwo', 'DonvFA', '2024-06-02', 'active', 0, '', 'popok99', 0, 0, '', '', '', '0000-00-00'),
(974, 'Boy', 'Boy4NC', '23d8bf6735b3b38bf4b2be09554c17a51324237683b60aadfbcdedbbee99d587131a194117e5c06ce26997629f379a2d48f213ec10338aab1a60e99365efb99e', '', '087781585017', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'kutalombok', 0, 0, '', '', '', '0000-00-00'),
(973, 'Isan14', 'Isa0as', 'a78a4bb1dd05cdacd93995134335450f5685d4cd541c452e80c25ec4e82c4cd10c337e5b369952d10b86e9b708ccce93bed6f8284a2bceb9321db1ae0abbdc50', '', '083124794299', 'Muhamad Iksan', '081292378521', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, 'Dana', 'bangsat1', 0, 0, '', '', '', '0000-00-00'),
(972, 'Uthe93', 'Uth38R', '2d231bec2dd1d879e030caab856dc6a460662bfbfab0e60426aae58bc03bec441198c5525f84bc142fcb5300e792351ee7cd023880fb4b233848dbe3fa605fa7', '', '081210909993', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'latansani93', 0, 0, '', '', '', '0000-00-00'),
(971, 'Erick9292', 'Eri4kG', '7e3f75c523897e6ddcadcddc76ac1186a9485dc8a1356f15f503dba6edbea94e332c3bd1afcffbba235521f2f95b00bc3a362a0875bd7b8763c622d25aee186d', '', '082127293166', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'samoja99', 0, 0, '', '', '', '0000-00-00'),
(970, 'Abug', 'Abuym9', 'f7bd11c7baba6cc036cd698470dcbfa774af202e3259818c15617dca2c1e58e99cd46dedbb6991a307636f145d55de6a0f8f4a77159d6bffbe16067bb325fa76', '', '085794752837', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'abug2001.', 0, 0, '', '', '', '0000-00-00'),
(969, '200807', '200emX', '0021ab12bdbb1478d78da054e568a59dcb7eb538e16f1f5da2bdb74488b832034ca1580778f7cc20809ad9b72697843ea3a2ba5dd11c5b8b6d7bfc75cd8e0ae4', '', '082129590030', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'mmkkntl', 0, 0, '', '', '', '0000-00-00'),
(968, 'Jempol', 'JemcYm', '4eb379f824dfec720baefc08524f56a48f625e469fde70e392b8a0491515e6b1064d9c45f0c5e9eccf9fde1f7bb737bbd239c3e268b9ca1627318adeba5e520d', '', '085331099078', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '234234', 0, 0, '', '', '', '0000-00-00'),
(967, 'Andra', 'AndB6F', 'b0cf67eec95293ec0cf4f61dcbe63539eb7ea7598f2d8583db8cc9fd5ac50209688efbd35f5f5ef7e8858d4c8a19716c862fa28b41eecde639564d3dbdb52b4b', '', '085797515776', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'anjay9900', 0, 0, '', '', '', '0000-00-00'),
(966, 'Sabdodadi', 'SabsRN', '306ef5ffdc25e3a96e9b644dae3740e1e4d77e68e1deeea45723cd729a7686c6b10e031331a162695e5632033a3003c8ce2e41f4b4bd1ee6f72574fef46b5a36', '', '087704600099', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '030297', 0, 0, '', '', '', '0000-00-00'),
(965, 'perindu_SENJA', 'perVlZ', '33c1bab62bf2ab4e103bf1274650ee7406eb6d0bafe4c27ae17a8f5d242a6630e6dfc5a098c097e3d244d20c7e7e7716ba0485c1eab5bc598e5c531c52ca4f9b', '', '89668890090', 'GO-PAY', '085600061990', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Novian', 'susi2000', 0, 0, '', '', '', '0000-00-00'),
(964, 'faishal12', 'faiDI5', '17d119031ce8f5fae0e1dd327537a79ca66ff887d008dcc6e01e9597b00ea0f71ef51b9976514fc2ff26c47dbb24731b671cf90c6b22049488ab5b28987c7b4d', '', '089602929577', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'thelibrazoids', 0, 0, '', '', '', '0000-00-00'),
(963, 'Mekar', 'Mek2R8', 'c4417a80d743390313e736f25da84a49a307aa8a2751bebd0e5bbef281962e52fea94a64f263155bd03df35fad4f046dc12d5a714c1e2ec4e88a9aba7e153fde', '', '085241597556', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', '160790', 0, 0, '', '', '', '0000-00-00'),
(962, 'Gree77', 'Grewcx', '812f1094d2af5b32131a6ca590fae5b28cdd539995a648fa6868f1fb77901c838f555bae741103b9f503ddaf7f833bceae306824b0f3568fd9fada047e50a7a8', '', '081573672120', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'Brigez07', 0, 0, '', '', '', '0000-00-00'),
(961, 'Deni', 'DenMC7', '752d584b6853c0c22d6618d322c60fc4430c31f51b304eb148cc6a9990ca234f0a4383984fca1f1ba857ca350e79945e2a01a4f75e63224a793e07caa9e1b628', '', '083174592149', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'deni123', 0, 0, '', '', '', '0000-00-00'),
(960, 'Dinocuan21', 'DinLRD', '6741865eabb83026610a63728ecb63960d6b0dacb6e2ecbde2236bb060b398d901cf6a532c3bcabc0f28cb97913e43cdd7f73aaf8ab47c47c1810ef99d7dc8b6', '', 'Dinoganteng17', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'Dinoganteng17', 0, 0, '', '', '', '0000-00-00'),
(959, 'Rizki', 'RizLBR', '71a1fda8308db5a2e451483b9478512179ebfc556b0d5895e906c4d9bba4ecec3d0f7f1a1a8eca25dc536952ae1f5923743e932f1f217bd5ab4f1822c5c11a32', '', '083895935265', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '032511', 0, 0, '', '', '', '0000-00-00'),
(958, 'memek', 'memVH5', '170de13c8dda83d5756f621e0ac7255d1ac4f5f6c4ffec70a41d2575a1d270e03116975d7fab443c91d0c5065c0b43da6f17325d275f1d353bd0caa9254527ba', '', '08123847489', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'memek', 0, 0, '', '', '', '0000-00-00'),
(957, 'iblisneraka', 'iblKul', 'c9becb57732c86a53b5792dc6f89bed77b90b3f9ff1d378fc3c2131f03fb315b0f424b0aaac96f4cd925abeabf35167bad51577f943222bd4e56d9b7768082d1', '', '085714652175', '', '', '', 'user', 'Sepyrz', 'Kroecf', 'CualCZ', '2024-06-02', 'active', 0, '', 'strong889', 0, 0, '', '', '', '0000-00-00'),
(956, 'Mario1922XL', 'MarXja', '706b453f0d64d8b91d4f46c70a0217746268b0ab9f12b7a7d76c0f70ee7b7feefbd8747f4eb8ff7a635d783c1cb0e4ebadadf50dfd2e9f44204e39c91764a256', '', '087750393898', '', '', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, '', 'mario1922', 0, 0, '', '', '', '0000-00-00'),
(955, 'Mia14', 'Mia4m8', '6d680a794d2f420207eb0ec444e7d6a2dafad6b93e72cde193514827d79aba06ced1a80e71d22f1f5976bb29a6707ad5f6c5e9adbf6be3dfb9b920c11c331df8', '', '081255421495', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Rasyid123', 0, 0, '', '', '', '0000-00-00'),
(954, 'Nursholehah', 'Nur3CL', 'a9c8b8387f1fd8e4e1981d3d5abaa4cf37a236bd3c2dee051c454d82d1b273763e3b02933be2eb719a2565b1d18ff4bd6fdbde22ad410fe4863006f1991714d2', '', '082128119743', '', '', '', 'user', 'AnghsW', 'AngJwo', 'DonvFA', '2024-06-02', 'active', 0, '', 'Nasigoreng123', 0, 0, '', '', '', '0000-00-00'),
(953, 'heyan', 'hey9I6', '5c619651c8021bac022bb9970311edabc932a69bc7c1a14fc53ddf022f5b6af03464e50e02c33e9ce0c9e847774f6427d61669f393df452027c9026f36795530', '', '082286615410', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', 'HENDRI1993', 0, 0, '', '', '', '0000-00-00'),
(952, 'Kelvin17', 'KeliDq', '11e9f148cc02daa6bf5b0854c0b36a369a4d1781714cfc63bc717d3505db141924ea4fc348f8df01313d476eca7b7c744ab0719f4cc833183fdf4d7a7b4c3431', '', '0895373690701', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Kelvin2006', 0, 0, '', '', '', '0000-00-00'),
(951, 'Septian', 'Sepyrz', 'efb5048a99f194e8b71d258a566aa1bb6802ca222bfa6b629de75a07b3979fb8249be6e6b201131e69c1c5296ae815b451b7a10a949041af0d37d565d3deed10', '', ' 0895-3281-24889', 'Dana', '089671536584', '', 'user', 'Kroecf', 'CualCZ', 'StrDI1', '2024-06-02', 'active', 0, 'Septian Ardiansyah ', 'Komeng123', 0, 0, '', '', '', '0000-00-00'),
(950, 'Bebe', 'BebHvU', 'ec47cf303fd6f7662a5aaaf2bf9d7c2cb2c546b6f4082321d041dfe7b576145ed0c3ec8c6e30f4c8e2015fb423e70279b3757a4187a25e0b8e829eedf16eddf6', '', '0812467980081', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '12341234', 0, 0, '', '', '', '0000-00-00'),
(949, 'Kyyzicoo', 'KyyuAg', 'e9c2d3e480cd5fffc51d32a2762891f0d6986235128f9bf4d1485c71d569067d4e945a81dc2100584de08555e3a8015ca67f36215671e89eeb161451f1f78c91', '', '081346352735', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', 'Rizky231', 0, 0, '', '', '', '0000-00-00'),
(948, 'infinity789', 'infpDj', 'b9f998b366ac717113df076b3052728492a3b71f6350af7563b2b8912ccfed4fe0ae3f1eabbd4ebd6bd0b65461bc3bb699ec0907a04c5f37d332a69397baf9a6', '', '85780936854', 'OVO', '085780936854', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, 'Infinity', 'yhnujm', 0, 0, '', '', '', '0000-00-00'),
(947, 'Krobar', 'Kroecf', 'f3f6b2830a38d7aa66a915153db9c6f20d08f48a84af12b70cc8c7bc44f3770933cadc970c4a6d8109519dadf5155dae12929a673c86a87592f47cc7c86d6b2b', '', '089527646918', '', '', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, '', 'kontol22', 0, 0, '', '', '', '0000-00-00'),
(946, 'Bangrezi', 'Ban40Z', 'ce2fbc51f0472be68740d85ff395fbb51d751ab8b40c42fa507270025b34c6002f3cf918ba039bb4b22bd4ff514db5c48703a76203532fdf6abb463b8373c393', '', '083175739405', '', '', '', 'user', 'SwaLjq', 'AdiOFG', 'piaFf8', '2024-06-02', 'active', 0, '', 'Talikelamu1', 0, 0, '', '', '', '0000-00-00'),
(945, 'Papri12', 'PapdGt', '427b0d25d0cf27cddc570719383040e796286b96de6a711f2f6bc9f8ffaaeb089336cd24efaaa60d95979aa7dd37e3d582e6eae60df29997463f9dc9082961c2', '', '085780283717', '', '', '', 'user', 'CualCZ', 'StrDI1', 'piaFf8', '2024-06-02', 'active', 0, '', 'asd1233', 0, 0, '', '', '', '0000-00-00'),
(944, 'aisyah', 'ais426', '23c39693bcf9be61e709f2651b3abf2791afce05a74b8d588fe51c41455ca5cd1f7ef8125c2db4b5afc517d08586d6e70549a6a361c380eb58ee5474a1daa74a', '', '85846654562', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'isthebest@37', 0, 0, '', '', '', '0000-00-00');
INSERT INTO `users` (`id`, `username`, `reff_code`, `password`, `full_name`, `phone`, `bank`, `account_number`, `foto`, `level_login`, `ref_gen_1`, `ref_gen_2`, `ref_gen_3`, `date_created`, `status_account`, `id_package`, `holder_name`, `pwdrecov`, `saldo_reward`, `saldo_min`, `status_agen`, `agen`, `qr`, `date_active`) VALUES
(943, 'Swagy', 'SwaLjq', 'aeec20baf4e48e7928fc92ae4e725d272ab5aecab5e914e7ce55a94fb37e2deb855101dc56e64fe0e802a813792970a77ed1485afb55130893f40bfbfc0ebaa9', '', '89524348991', 'Bca', '4921091227', '', 'user', 'AdiOFG', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, 'Logi ramdani', 'swagy07', 0, 0, '', '', '', '0000-00-00'),
(942, 'Cara', 'Car5ap', 'ca7f14a18c7de58d098f0c31ba01e228d9b4502305e345e34ad0eeb94fef551703573565c2735f2f4e23baf79c914348e477c131769a6b68d92e24f199d04b3b', '', '81515626671', '', '', '', 'user', 'Arb9Vt', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'astaga', 0, 0, '', '', '', '0000-00-00'),
(941, 'Aji13', 'AjicDb', '203a0097f3ef53cc1c3b1b57c4f02922e267110b8d4ad087b2a132bd0b03ae410861de6ee8b578655bbf54e2df93cefecb5be23cd5ae4a79a0bb68081244add0', '', '081215664832', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'pelatuk12', 0, 0, '', '', '', '0000-00-00'),
(940, 'Jefri', 'JefAyl', '6dae2b0be6fbb944896bad25377d28feb033cf599807c83d064bc7f2dd2c0770dd08576188c5eda0c4b614363bb3a161ee3152683cc18d218c9a86066fcc5576', '', '085768210470', 'DANA ', '085768210470', '', 'user', 'Use6UR', 'AmegoI', 'AndUy6', '2024-06-02', 'active', 0, 'Jefri ', 'jefri123', 0, 0, '', '', '', '0000-00-00'),
(939, 'Yudihadi', 'Yud5Ss', 'a722a65df45da4ffe23a5e6b3ffa31dfcd421d7657ce694bde76d9806366f51b33145d645704c9e16b2e3c2d8aa00e13006359abbabec7d3fa7ac9720f52df16', '', '087768373287', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'patalan06', 0, 0, '', '', '', '0000-00-00'),
(938, 'indri', 'indZwh', 'c4103d2b076a3136f1255946760b8382f4354f5a5262b9911d6ccdccfe7d5984121dbdb2000efda64273611b9a84e66098c5ce24ff01d2528a4ba016f2a7482c', '', '085219686255', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '120511', 0, 0, '', '', '', '0000-00-00'),
(937, 'Anda', 'And3w2', '75ce68c411672bd92637df590d86a7bb3b9a3d975bcb18f945dd33c4a4a3094302b5a5d1d99e0912ee7c9cfc85758bacdff7e97c03a0d123c36b74238c38050e', '', '081280188648', 'Dana', '085231389853', '', 'user', 'BisjcY', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Nurul Huda ', '123a', 0, 0, '', '', '', '0000-00-00'),
(936, 'Mimin01', 'MimbUq', 'ac89718f56a2daed452bdd118255ddf499d435f736215dc4ce8d2674b0020fd127871420f333a32ba504e22f70f7da94f36bd4e4b6a905576111e3c4c08b94f4', '', '081258283725', '', '', '', 'user', 'AnghsW', 'AngJwo', 'DonvFA', '2024-06-02', 'active', 0, '', 'Wiranto98!', 0, 0, '', '', '', '0000-00-00'),
(935, 'mamang290', 'mamzEh', '744d6cfa5a3b97c48b066ceb41380ec366c23a4a0fcf799b77503f9552e59f350ac610cfdaec00fa46ff4a3300140deefa9c56ab5a0eaec18654341246e7db5e', '', '85323545878', '', '', '', 'user', 'Arb9Vt', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'ramdani3', 0, 0, '', '', '', '0000-00-00'),
(934, 'pnzyy', 'pnzKsN', '0ef030c5f03452da522b661dddaa368bae91b8b4e6085661991fabd6977ff29fe11c389fa4a9e1fe4255f528f6c09b1089c19531dd7d886f816f7c445e46b676', '', '89626455551', 'CIMB NIAGA', '707155846700', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'DEKY ARIFANDI ', 'testing1212', 0, 0, '', '', '', '0000-00-00'),
(933, 'NurMuhibbah', 'NurcE3', '4e1a01d6036d7bff9aae24781446185c211fb81abd7d1e1e6150177bb4366a8524a53a078da611430cfd35e564c3ad673aec358442911156387d3a14c367df98', '', '87819995610', '', '', '', 'user', 'AdiOFG', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Samarinda', 0, 0, '', '', '', '0000-00-00'),
(932, 'Minnergold', 'MinbJk', '6dfc0e3e9834322375e77992b0ffbbc25f3987c8e4c162c960b0df883b50e8bd23b737ca8806b94ff74c875511f7a2af178fc82e461db3dd655d642288cbf695', '', '089526809706', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Aass1234', 0, 0, '', '', '', '0000-00-00'),
(931, 'Akasaqil', 'AkapIL', '47f2e254b526594d9989d798bce5149c4d35fb84e8d276128c590efe2b70062066b39a058a27bb21e8898469bfe2138f68494d84b09e075eb685cee49a55f7c8', '', '089526600422', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '089526600422', 0, 0, '', '', '', '0000-00-00'),
(930, 'Cakculayy88', 'CakUo3', 'fb8f5cb5eb12227ea199bd85ca6fcdbfa8f8bc2bd489e8ee930acf8acf6e2fdbf412eba2907909afc8ae336f60e435497e8922f82634280d371cdba17300881f', '', '0895327031987', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'Asdf123@', 0, 0, '', '', '', '0000-00-00'),
(929, 'Wahod', 'WahXYv', '0999b6546d27af2b98824400ca3f3857ed038fff8e47bebb74e3b67daa1e5c7808da1538d8dc5da706a39adbf16fd1885802eddacb954881a2f53a764ed73aa2', '', '089697250407', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'w4h1dr1n1', 0, 0, '', '', '', '0000-00-00'),
(928, 'Synggyh', 'Synjdc', 'b9f6b5673327feb167a36adc55c6290dd039a44d79092a98d87ea0589aa592aa1507f57da4b2f45b492de5d316f1260f8b8ff2ba7b324bd139ea7706e0db6a32', '', '085800747636', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Singgih123', 0, 0, '', '', '', '0000-00-00'),
(927, 'Rafi', 'RafHv2', '2bd837d52a8b9fe09c0705e3ca30e4ce8c801beaade96a627c621b9bfba09667c9f5af715445f06212a2b25cd391a83e50206f7e83d506bcc665c4c3dbffaab5', '', '082320369123', 'Gopay', '083866113460', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Rafi', 'Anjing123', 0, 0, '', '', '', '0000-00-00'),
(926, 'Grdonx', 'GrdE7K', 'a8c87b2de08b9d710d40502c4a06d60376db513913094922ca1bc5e27ccb3771839dbc94dc146c88d379e6cfcdaeeac955cb97aaf6369f0db6d44d8a765bf7a9', '', '085159906678', 'DANA', '085159906678', '', 'user', 'AnghsW', 'AngJwo', 'DonvFA', '2024-06-02', 'active', 0, 'Mei setiyawan', '@Mei52008', 0, 0, '', '', '', '0000-00-00'),
(925, '999999', '999hQX', '7297448dd766c9bc4e146c94a9eae2ef39c404d1a26f32834f64b44106d1cc4f30b8ce7fd3abffcccfc9b904744d7a2485ee6e58d53e5fa9a414f81605161345', '', '87846275895', 'BCA', '3680163234', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'MOCH JUNAEDI', '260685', 0, 0, '', '', '', '0000-00-00'),
(924, 'Fajar24', 'Faja6t', '5c3d2657553666daaa93e38283d7835bfc1940f202f8c03c57f7b5fbdbe41f048b9221576b825061cc5590b7ceef9427a742e499f8349ab6bde399967dc497dc', '', '083119712610', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'fajar24k', 0, 0, '', '', '', '0000-00-00'),
(923, 'Infinity', 'InfSYW', 'cbbe3388723c90d70207d746833b977b43c1a33dec82758c60024247e8f27e91c0b47b7dbdc98f8ece1e333b3738c6e5580b1a84e38d9ba52ce1cd3e4f0905ad', '', '85780936854', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'njumki', 0, 0, '', '', '', '0000-00-00'),
(922, 'Fajar33', 'Faj1pF', '5c3d2657553666daaa93e38283d7835bfc1940f202f8c03c57f7b5fbdbe41f048b9221576b825061cc5590b7ceef9427a742e499f8349ab6bde399967dc497dc', '', '083119712610', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'fajar24k', 0, 0, '', '', '', '0000-00-00'),
(921, 'Adiel', 'AdiOFG', '2ab2fcd6ccfd60823ed7b6623ae4788fc5d3c9fb3feacbf328d935e72529c8126395472394a464c9ba429b5f93e9fbccef4a72a547413c789ccd870495ca3cb4', '', '85773876423', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '12345678', 0, 0, '', '', '', '0000-00-00'),
(920, 'Novi', 'Novi4x', '23d63d1006e55c9a34fbdcc969fb22c3ebdff80dec5a0fbd160dbc88da60066dbd1db30d8b3b5142706c2048fd6a3b1729e26fe9bd4e2a28e5755908dbf8289e', '', '085715142617', 'Gopay', '085715142617', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, 'Novi', 'novi0504', 0, 0, '', '', '', '0000-00-00'),
(919, 'Cuan3', 'CuaaqX', 'bc5bd0e2f2ae44bd4051572646bb16328d4106ceccad43d76e72de31829d4ca9e0532d9fec11e2b28a6f355fd01c0f51fdbc2c6fb2721f943cdd32b9dd337406', '', '085216080802', '', '', '', 'user', 'CuaYk4', 'NonBDh', 'MjohTv', '2024-06-02', 'active', 0, '', 'Rafa0402', 0, 0, '', '', '', '0000-00-00'),
(918, 'apit', 'apiU2u', '102d13cea52636713300f7e2ef648b904ee97cfaa3f9a567b759985e6716954497498a2a66fe66ffd2c0faf7ca3bc9221bd07acda8009442ceec06a1276e6bc1', '', '083139426236', '', '', '', 'user', 'RhafvT', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'aremania', 0, 0, '', '', '', '0000-00-00'),
(917, 'mesragulo', 'mesAC3', '1e2cfc4c68a429e9253a8548612795154983995e4f598e359a1cf314ba50dd3df21044f4d7eddf4522dfd4af972ba6a42b219e137627263431d6798517c3dad3', '', '082123924293', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'uangku', 0, 0, '', '', '', '0000-00-00'),
(916, 'Bahull', 'BahKAo', '11c1b6eaf52ef69bcf142af5d548d4505b55c4d1b37296f414657a983319b28d9e68e52eab2510a6e9764dfa0e0601c46ca64862441a94bceae708dc2b494802', '', '085772979536', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'wan55555', 0, 0, '', '', '', '0000-00-00'),
(915, 'Sicikalshop', 'SiczSO', 'dfa625194f0c0b6e2442d93450c46dfa2774b62746f0a7fc2e08b0ff24ef8c17c6ddb0db192780ab0a750b06b4de1438f4e80390a3dc47b8ab42207d423d4d75', '', '085864857709', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', '3Nd@@ng9', 0, 0, '', '', '', '0000-00-00'),
(914, 'Cantik123', 'Can2xV', '3a948ff6af66c3482d9ff9d1b9cbf5969b059f9bbd9b32ff497d69276f7ab9c686cafef4ca3c568b0f6db34c4784024c11f192b6a5592905ddaaad99935eb5dc', '', '0881036897469', '', '', '', 'user', 'danvBo', 'zeiD6T', 'AndUy6', '2024-06-02', 'active', 0, '', 'cantik80', 0, 0, '', '', '', '0000-00-00'),
(913, 'Pencaricuan', 'Pen6Lr', '1423d0324b4bc9dcc008eb6247f5ae70f0ab3cac7f32557f07d6c9c0dedbc6b3fd6c4fd252905312ea488155c868dbef9db780a9e7f61c9c6929c9a4d9daabd2', '', '081617401785', 'DANA', '082298282948', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Asep Enkan ', 'Cucu7890', 0, 0, '', '', '', '0000-00-00'),
(912, 'Angkatan02', 'AnghsW', 'dcfb25d35e5261bed9dfd60beecfd288648f975e55c578dd76e3e14621582a4958b7f3e04bfb5d4c0d82db0a402690e15e04f6bceffe428519cf883efe16a964', '', '81319410926', '', '', '', 'user', 'AngJwo', 'DonvFA', 'JuaDm1', '2024-06-02', 'active', 0, '', 'ayahmiu20', 0, 0, '', '', '', '0000-00-00'),
(911, 'Zlatan', 'Zlanao', '9dd41d07fe32f8a351059d2fc87f3aa774dbdd95af7026810eed18ddef3aea34f4bfe66af46b2bca671184a2d680ec729a88dc56a3609f78f73ff8136c024dbf', '', '081527893839', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '135465Aaa', 0, 0, '', '', '', '0000-00-00'),
(910, 'Angkatan01', 'AngJwo', 'dcfb25d35e5261bed9dfd60beecfd288648f975e55c578dd76e3e14621582a4958b7f3e04bfb5d4c0d82db0a402690e15e04f6bceffe428519cf883efe16a964', '', '88293966026', '', '', '', 'user', 'DonvFA', 'JuaDm1', 'graoEL', '2024-06-02', 'active', 0, '', 'ayahmiu20', 0, 0, '', '', '', '0000-00-00'),
(909, 'Tuti354', 'TutPBb', '368f5313a905092951de5edbc0c334d4ec269df1cef28cae4d083d00ab7d92b84341760057ab1dd6c82796a8db25d0a921503b34b6b8235694f25f4bf93b98ca', '', '081346360008', '', '', '', 'user', 'KoklwK', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'gigih', 0, 0, '', '', '', '0000-00-00'),
(908, 'Riport', 'RipahE', 'dea0b0f2bd418f54e7cb9631a99316413a26d21f9dd0f60543b16f2dcb42c3d5c4ed5b4a49bfc0de27f98567064831f5d0cc09afbd561723329424122006689f', '', '089677947313', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Syarif212', 0, 0, '', '', '', '0000-00-00'),
(907, 'Yuliaayunda', 'Yul6Q3', '3f4cccdc51f7d928fa1da12fcd650949ad58afed9c3ba2cc253c50ae77b51d0607fa5069524b48eeb5d2c3fc923c8626a97650b4db088168be83dcbc0cae9dd9', '', '0895400639035', '', '', '', 'user', 'Mon9Hc', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '228790', 0, 0, '', '', '', '0000-00-00'),
(906, 'Lilin234', 'Lilu0v', '3edfe3114321f8193190efb9cfc8a0774f36e50d6edcb60008a4fbd9669c05d8c2ab1d1596146019b36f00ee84d11675407a0fe32af237a3e0e3fa6d1a2a8781', '', '089521966594', '', '', '', 'user', 'Mon9Hc', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'cuan8901', 0, 0, '', '', '', '0000-00-00'),
(905, 'Agari', 'Agaa3u', '89c8fe5d8f3a3a0b2b68bc3a14e4bc91e7a475c379aae3a1abc642de0a23279f06688c7103fa392107d98c78b92454bdef00b5da33d277ba19db2e314abde328', '', '083180301862', 'Gopay ', '083180301862', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, 'Masyah Bagari Takum ', 'bungsu09', 0, 0, '', '', '', '0000-00-00'),
(904, 'Surya', 'Sur6xb', '8cc314e72e1809266adbada3670f0dc9bc6b4a65f0551a4202db455a391da79a69e60385a83eaf26fa486089e8933a440ef0a5ed323655b831d56fa6acc47487', '', '0895375787158', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'Jomblang123', 0, 0, '', '', '', '0000-00-00'),
(903, 'Ikyy', 'IkyiIr', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '83848477320', '', '', '', 'user', 'Min7Xy', 'Arb9Vt', 'piaFf8', '2024-06-02', 'active', 0, '', '123456', 0, 0, '', '', '', '0000-00-00'),
(902, 'admin1', 'admCbn', '8630fde1adffd3aa3ebed812413fc32bd5482366781bb7fca903cb11ec9f88e56673701aa7ee9e741ea7c685d5d7a77dfd01e80b31b3e2acad10e7a74ac2f3ef', '', '081916728861', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'husnan123', 0, 0, '', '', '', '0000-00-00'),
(901, 'admincuan', 'admSB6', '8630fde1adffd3aa3ebed812413fc32bd5482366781bb7fca903cb11ec9f88e56673701aa7ee9e741ea7c685d5d7a77dfd01e80b31b3e2acad10e7a74ac2f3ef', '', '081916728861', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'husnan123', 0, 0, '', '', '', '0000-00-00'),
(900, 'choiriya', 'chorh5', 'c47ac948c685385e5754e345b1ea3a306e89045f55247f6b92f8a2ab786b59d8afbbd271d9f4f3eef8f7180d102a32983146498746bf1ed669798dc88f1d22ed', '', '085236622007', '', '', '', 'user', 'ndat32', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '210907', 0, 0, '', '', '', '0000-00-00'),
(899, 'dhenzz04', 'dhez9B', '8f659311768825c8d731e29c1b8f6b33ad386f7169f1a1ebb6e40f7b9a7a413280f00cb06782b5a7d33bfcd2670beb89638e326cec0fb49e0c3ec34a145fe9b7', '', '083120804914', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'Bajingan17', 0, 0, '', '', '', '0000-00-00'),
(898, 'Akram', 'AkrOeM', '84f8a3e4e0c8bb5c58e7fdd648e36bd6ce38d0d809b650df80ab89a62e37ae362e7b3d50f01240df80680f9f18427089111197f6be7426368b9e7f70af9089c8', '', '081268208008', 'Dana', '081269208008', '', 'user', 'AlfbtU', 'azkmOA', 'JoecIC', '2024-06-02', 'active', 0, 'Muhammad taufiq', 'akramulka4', 0, 0, '', '', '', '2024-06-02'),
(897, 'Yogaferdians', 'Yogpqb', '190a2f87991abf01645cccc14b16a943f84ccea091cc466eb06d9783359d22e53e5a7660a5f6a113d2f7521ea3d745a999b7ae237399392f1956aa8c93c582a0', '', '085830170360', '', '', '', 'user', 'DonvFA', 'JuaDm1', 'graoEL', '2024-06-02', 'active', 0, '', 'Yogaak123', 0, 0, '', '', '', '0000-00-00'),
(896, 'Kodemax', 'KodxL5', '44d2a3369458c63ef092a5857c02e643a9f872fee0dbf2bc5d1aba3c73aa59cbd12c5e2c76237e869986a9938da9cbb93a5199625be56612959bc734ae3b1c30', '', '089518310347', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'ikahawa777', 0, 0, '', '', '', '0000-00-00'),
(895, '123666', '123hH1', '25ba0bafda58580ec4e37e530354eb4376d55a168d675e7812ca8250007fe657984d788cde7a5fcac9e5c681ff4442faf3bf05bd9f2f10a057794f1a94ac0d1f', '', '085603832273', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '123456ai', 0, 0, '', '', '', '0000-00-00'),
(894, '3531', '353GiH', 'b6a4e540e581d596ca1dad64a0b2032b168d7ddaf0f5e144f9b620e515432f51cbb313bd64e0bcd8b6dacd8eb3279d50e62af07a46aaab9ed486a7dec8dd5800', '', '82250784870', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'aabb12345', 0, 0, '', '', '', '0000-00-00'),
(893, 'Izii', 'IzilUu', '504822f5df554fcf64ee5daea533ad66da0d252d746173836d545d4226c2a4ee5f099fd828cef72da872fd5fb01d5dc805d1db7a257af63cbf5cad9d0febbde9', '', '089663498008', '', '', '', 'user', 'Sin7m1', 'AulgPZ', 'piaFf8', '2024-06-02', 'active', 0, '', 'izlallulu', 0, 0, '', '', '', '0000-00-00'),
(892, 'Alfairuz', 'AlfbtU', '4668de88f98112306d088e73181c96a40b1ae01dd1ad36fe6b8d020a206529ee75a761b32f485b1d4f9646408503b97ae465d8468085ad1bf19e78f3090b7434', '', '085272690999', '', '', '', 'user', 'azkmOA', 'JoecIC', 'AulgPZ', '2024-06-02', 'active', 0, '', 'alfairuzulka4', 0, 0, '', '', '', '0000-00-00'),
(891, 'Abla17', 'Ableju', '1aeb64a8d1e2b99075407613ad592b52f1558b279a65057af9b52ce92aa7de22e2e02674c5f49d8976741da4f0ac750807e438d696ddfeee18544d74501d1224', '', '085771992210', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'anjhard456', 0, 0, '', '', '', '0000-00-00'),
(890, 'Odading', 'OdaiUc', '7a511bad31e89428c47864de367cb78fc85e79225740d7fbec2743defc842638391eca37edeaee9d6807ebc1408be3bbbbba3e36d894ffd976b59f1ef5f2d84a', '', '08989798756', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '1234234r', 0, 0, '', '', '', '0000-00-00'),
(889, 'Cuan', 'CuasCa', 'f279bc7add1529e4015ca299b905ed25648992913ec4f5ccb201fc0968e30f319ba83f64d77cbb32d7b66bacec5ec0521d3c9879a765d34e91f902445d4c8159', '', '0895708233223', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '123456bocil', 0, 0, '', '', '', '0000-00-00'),
(888, 'Mince88', 'Min7Xy', 'b1c32384028f12a54a2386d16137b5fd89b9c949f16957cc83d5e6a2fb489c9967a819b2115c80ea1b02892e63f4867a0dfe89e70ff593725b44d4c1e89c10a5', '', '081348848224', '', '', '', 'user', 'Arb9Vt', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Urysyifa01', 0, 0, '', '', '', '0000-00-00'),
(887, 'Raka2020', 'Raksat', '4c02aa42fae643335ee3fcc906c664bbebb169abb9df1d143319aa7be9900568bf156216eda0d1c7a2dcdc47ea2c32be8d9242715b84c6a045a1ee4ff8c87cc8', '', '89683180706', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'bapen20', 0, 0, '', '', '', '0000-00-00'),
(886, 'Bokep', 'BokToM', '759a26d4d652b6d3e344efffb20a63d0c1397109e979284845ebf2cef0d2fb8731d5d42753ca3fdd988aac58e7a7410fea7ab95f9e9b5a2a55a8fa3ea1836356', '', '01727181292', '', '', '', 'user', 'zeiD6T', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'haknya123', 0, 0, '', '', '', '0000-00-00'),
(885, 'Yuni', 'YunZbf', '92355c104b00dc8ba06f7410c1fdc9cc29029fd00c84393619c925579d8b05f03ff76d5f44ed1880fa77166a48785b5ecd138be2c357cf724806dadf4d350fe0', '', '083149334695', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'yunmin93', 0, 0, '', '', '', '0000-00-00'),
(884, 'Yogi', 'Yog0Ry', '61752bb894b3251905d26a2c15334359429e1b95578018924c9e93d01cd70acb7303e8989e43439303a8520f9d77db6a171c2d5453ca230876e6132dca5205ec', '', '082350941932', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'qq123123', 0, 0, '', '', '', '0000-00-00'),
(883, 'Rakaaditiya', 'RakCLT', '5475776ae1db279871b896581135c9b419f16cc71b39eef47fa2ba334a4e805d3713bb4110ced90eb9736b0e16d83a9f0900be8629f91c775b545719d5abd0fd', '', '089683180706', '', '', '', 'user', 'SalPqW', 'JasCHd', 'AndUy6', '2024-06-02', 'active', 0, '', 'bredow20', 0, 0, '', '', '', '0000-00-00'),
(882, 'azka', 'azkmOA', 'd5234a41af6d1ef84a3e29e16e7a3b942809a606351afe2af015bfc846d53b9346d83b09553f80e24fc6be699ecee70311e5afd64b53a40487cf3724a8bef987', '', '085211711191', '', '', '', 'user', 'JoecIC', 'AulgPZ', 'piaFf8', '2024-06-02', 'active', 0, '', 'azkaulka4', 0, 0, '', '', '', '0000-00-00'),
(881, 'Kenzie', 'KenGgU', '94dc8066a693c219342aee1a4b9b10a9c3fefee6373064dfc0c0a54ebe34b6bb1faf46699a359066daa0a2dcbacbcd57bed8973ecbaf8e3547af88b780345e5a', '', '085760757199', '', '', '', 'user', 'Rega39', 'AmegoI', 'AndUy6', '2024-06-02', 'active', 0, '', '123456789', 0, 0, '', '', '', '0000-00-00'),
(880, 'Anonim', 'Ano2Mh', 'bbe4736f30bf81602501d391103758bb3ba9d636c88ac641fd53b2c4f359397ffb9c61ef56185c0074c8e5afe37d21370c60f45be0e368d97e53574abc697ee7', '', '085712601164', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '012345', 0, 0, '', '', '', '0000-00-00'),
(879, 'cessilya16', 'cesT27', 'e9cae786fbd4c7e3ad7a04e9d8a3f4ad24e71b6534f03f85d9dc629bf84af1af6145c47ad21492e96d908d7d5632fa8632165c2db4d1e0f07ce065b16bdd52a8', '', '089521267297', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'sawahlunto', 0, 0, '', '', '', '0000-00-00'),
(878, 'cuan2024', 'cuamfa', '4af99b6593663d11047cca67df0de9dcdec3acc2e01f83f43d432180416d69018a16439b177f237a2f34e2274c6f0c1a9f3ec094392c49071167eeef96ab2a8f', '', '85691555371', '', '', '', 'user', 'Nur6Ga', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'bogor123', 0, 0, '', '', '', '0000-00-00'),
(877, 'Cuan12', 'CualCZ', '258ecf0d88feedf1ab8e4b288cc5ae4ee759d2389c723d654aeeebeb892e0cbd3281c31c54ddaca1e9154c67ed54a25e5c14381ca95424f8cf77d97751b235dd', '', '081267182512', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Hidayah12', 0, 0, '', '', '', '0000-00-00'),
(876, 'Yo', 'YoO3B', '9356e98a84df9f82f0ef4c9d6f1b5f7195c735a04130c186b3f1a1d5897088d5fdd643b818ea1fec1d8597e9a58852ad1cd3d30a20953c4c612cf299c876ea10', '', '08734814375', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'wjwhsbzbxbx', 0, 0, '', '', '', '0000-00-00'),
(875, 'Chriss90', 'ChrvPO', 'a485dce1958bb5d1f9ca3e8cf926a698196b8d2f58a66f3e5ff77b120ca9b16156ac39ff85a71ee46e0b5a9da2e021d1e8fb30a51754d8d2bfd0f9dc772a84be', '', '085815470472', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Adam2018', 0, 0, '', '', '', '0000-00-00'),
(874, 'Haerullah', 'HaeLlI', 'dd285cb80f8ebc4c839a513b05257c4ccd3775cdd5d10ec14543b0a9e5fa973a837e70c1745b702b6d80b158ff563a14b88f7e55abf4116c3a352f9c45fde2bd', '', '081927451483', '', '', '', 'user', 'Arb9Vt', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'haerung1234', 0, 0, '', '', '', '0000-00-00'),
(873, 'Register', 'Rega39', 'a9c17edbedda6e187d60fac8945ef57e8eeb884afdfb8fa8ce2b053f74386376241652a683480ad35b2607ceea43109805977c586b00b892e13ca6648a80b615', '', '085781850775', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'qwe321', 0, 0, '', '', '', '0000-00-00'),
(872, 'Nandang1', 'Nanpbo', '964fae9c530892572609b5dfc6005991e2afd2dcfd672b688f9f07c4b909ed1bd294cba7f3255a7751b830d9cab21039ea1cedce80fcedf79a14d48ec0941e13', '', '82255882609', '', '', '', 'user', 'Nur6Ga', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'bonsay333', 0, 0, '', '', '', '0000-00-00'),
(871, 'pejuangrupiah', 'pejgDZ', '2ab2fcd6ccfd60823ed7b6623ae4788fc5d3c9fb3feacbf328d935e72529c8126395472394a464c9ba429b5f93e9fbccef4a72a547413c789ccd870495ca3cb4', '', '88291895278', '', '', '', 'user', 'Arb9Vt', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '12345678', 0, 0, '', '', '', '0000-00-00'),
(870, 'Afif123', 'AfiXJL', 'f9deb2b99e626aae82e6aad1d735305ef4710d9e0a6f4db2bfb84f856f9250c3b639bdb3ac9a60f58934ee8f048fce1381682f0753a1a2023508638456c9acfd', '', '081805104563', '', '', '', 'user', 'RhafvT', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'operator', 0, 0, '', '', '', '0000-00-00'),
(869, 'meilasaja435@gmail.com', 'meiGLp', '064bde894cb6ae6222ac85cf68a27a110c434e850fc005487ae5ec655733b6eeedc5239ac68620218a5bc9dcac6e10077423875ca972290c8d8881e8fc7a007b', '', '85853910067', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Meyla0912', 0, 0, '', '', '', '0000-00-00'),
(868, 'Owner', 'Owne1v', '6cd7b5c8d1822d20bc9610a34da87347b3e8c76f1a448076a2a23d6fe15ae13bb41b72068da0fd2a4cbcb9a175a73f87b3c6729d587b218f2aebbe846f214ef9', '', '085216086579', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'Sambo123', 0, 0, '', '', '', '0000-00-00'),
(867, 'Wandipon', 'WaneIT', 'b29dc7e7a9968b18cbe934d8c583787599cc4390ccd9b6282ad71627eb8fe4f85c4a348ba306030b77f6113c5ca261c90d475ac56cbf0ae0a2c381b157712025', '', '081222456374', '', '', '', 'user', 'Arb9Vt', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'wandipon28', 0, 0, '', '', '', '0000-00-00'),
(866, 'Arman', 'Arm0x3', '4ba4f1f66300dc512882b19d753c40488179cdb0677f24db1e9509349ebb43f9df34abf7b9c8889fe8bff18eb2851862b49106cf4f104ba393af3d8e303993ca', '', '082252947585', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '12jrmati', 0, 0, '', '', '', '0000-00-00'),
(865, 'Deasaja', 'DeaUX7', '87044864603f1c8f65248e901456ef29061f8ab174cbc5e293f50486e8e5d16d31bb69c3d87c3a3e04dbfbe956d03c0fa080bfb90288d9d00c6f52043717b2a9', '', '81572210351', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'sayqng', 0, 0, '', '', '', '0000-00-00'),
(864, 'dante', 'danvBo', '4c2c766288293c8422f5798ff09af0faf2166413a774fa65911076e242e0f9d19fb121060869633dc14db27c40bc75da7b73b0429d5429eec215ff6f8133d2be', '', '82139015855', '', '', '', 'user', 'zeiD6T', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'dante19', 0, 0, '', '', '', '0000-00-00'),
(863, 'ceksamasama', 'cekgXy', 'a98a03e31269ac68b88716fe5a4b8916603b3c8275a84d48bfc57a14021b1b1f5482c1a0ba49031479251f4abc33d653f3308ef4c45f25e11d445517dc05b4f5', '', '89657223873', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '123123', 0, 0, '', '', '', '0000-00-00'),
(862, 'Adin', 'AdiYp6', '8927a61122e98f8806d0ef64c87ef51d2395f4ae5bf2f54ef1a4dc72001cef4f03ba781c2cb002c05fa1a51aacff61f4fbcdb46cb5052c5d89bed166ad593067', '', '0881087100', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '152008', 0, 0, '', '', '', '0000-00-00'),
(861, 'Weblokal', 'Web3GC', 'bc29e4017c9794e2ab726ee7eddb0186df4c403d162c0acbb6e53be33c7eb76af1c775b29ca8189cfb15768e8e2ef087b9b38e68ebc20c7f1be61764580c9f39', '', '0282828282', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'okeoke123', 0, 0, '', '', '', '0000-00-00'),
(860, 'Sindy', 'Sin7m1', 'c742bcab4a943202d6e7273d38f158e395949290c273dbff6c7350ae28d28a5f0dbc317dd182528302579392c83e5d0953200bc72666df8adc4936b889aca073', '', '85212580735', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Bule3198', 0, 0, '', '', '', '0000-00-00'),
(859, 'okeoke', 'okeNPJ', 'bc29e4017c9794e2ab726ee7eddb0186df4c403d162c0acbb6e53be33c7eb76af1c775b29ca8189cfb15768e8e2ef087b9b38e68ebc20c7f1be61764580c9f39', '', '083837372', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'okeoke123', 0, 0, '', '', '', '0000-00-00'),
(858, 'Donnn', 'DonvFA', '949e6047d001d17d505c3a0734309bff41cbda4aec71c23ad941d95e5a3f6207e18c831906a139f75cd8956e8aef735d9a517d5dcfbd0a2051c29851489aba45', '', '087723489503', '', '', '', 'user', 'JuaDm1', 'graoEL', 'piaFf8', '2024-06-02', 'active', 0, '', 'danalampah', 0, 0, '', '', '', '0000-00-00'),
(856, 'Achile', 'AchjO9', '2345e482de044088efe77f6fe8eb6045b1019254ce92ac18dc3fc3b0c1d6ae08fa108525f3933962322e1c974c72c6f7647a5935c0864e35914c5b952f250226', '', '088999999511', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Kamil96', 0, 0, '', '', '', '0000-00-00'),
(857, 'Raja', 'RajyjP', '41d3e78849c3dfbc9f9f88c8cee89c3f3556a4ae9e856d071b779bab81aa3e7e47d6569ee6ba512b1b0172437de0bbb84e6018a89c73d8a48e3cf58d757f47df', '', '081269377777', '', '', '', 'user', 'JoecIC', 'AulgPZ', 'piaFf8', '2024-06-02', 'active', 0, '', 'msilahkan4', 0, 0, '', '', '', '0000-00-00'),
(855, 'User01', 'Use6UR', '5d50b28efc915de81d43414461151a408c90defe72cb5d505ad40cd804efebc0b3f4a0ff98ed65dfea60786783eaa06c2378437d3f0eb4a49e1d2ce6c929ca36', '', '85643819204', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'tolol14', 0, 0, '', '', '', '0000-00-00'),
(854, 'Putrasarmiyaho.com', 'PutdPU', 'a52a4e033eabe2799caee65023bf84c7d22d8979c9e38f1e9541b49170e8615f4c4aff8b7b0cf58c95ddc23396c15479beb30e7b91225be1d32fd4eb834b9b02', '', '081248383323', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '098765', 0, 0, '', '', '', '0000-00-00'),
(853, 'zeinluciver', 'zeiD6T', 'ad750febcbf23f056d6fd7f9f244336ff143a9018f51f787cc9de363f62fc9e6b453360a7238173fa158e1f8ad226d1ae0b4d5c5b15cc9f9550f7a33c2168727', '', '082211199292', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'zein123', 0, 0, '', '', '', '0000-00-00'),
(852, 'Saputra12', 'Sap6ny', 'c8d50ba03a113fe6559691e836e623babd16de2aa983d9e5bf297f43b89e775229e6273aeb85919cfae9152cab47796a38d908789bb1c1af67f0a6695606464c', '', '082353004869', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'arzuna2014', 0, 0, '', '', '', '0000-00-00'),
(851, 'Casper', 'Cascmh', '4eb5ffdd49190f10edf5fb91d4d7bdb93b3d9a8dd083d5473d87ad18aa5827c3096d12d689f399dfad2e44417f2933ae700d0b3eaf401328ba2c2b60c6271ed8', '', '82243058495', '', '', '', 'user', 'StrDI1', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '080799', 0, 0, '', '', '', '0000-00-00'),
(850, 'Andrean345', 'AndFED', 'bcadc06f11c5e135d01740a36e35b79f45babf285ada99aff5e47c374df44d95c89a52e4ccd31e9ece90767207f399b97d746d050f8b588810c3e89bb55b151f', '', '082281526964', '', '', '', 'user', 'Arb9Vt', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'andrean123', 0, 0, '', '', '', '0000-00-00'),
(849, 'Onic', 'Oniwhn', 'a23fac89713dc76098546e36b24811da2290229077a3323090e4476f94a741c4ee4c3112f19f1b4fb2029b13a620ad265fe37443138784a06d68a0810bbd1167', '', '0881036729577', '', '', '', 'user', 'Mon9Hc', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'jA158126', 0, 0, '', '', '', '0000-00-00'),
(848, 'Bismo8', 'BisjcY', '75ce68c411672bd92637df590d86a7bb3b9a3d975bcb18f945dd33c4a4a3094302b5a5d1d99e0912ee7c9cfc85758bacdff7e97c03a0d123c36b74238c38050e', '', '085604881525', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', '123a', 0, 0, '', '', '', '0000-00-00'),
(847, 'Nurintan', 'Nur6Ga', '46650c9f0fe1b2a8ac6c8f4d6b1b56e84b51ae32f2d2832e0303f69b1bb6c098916b586ab278891d86f222bab6ee46dc893d015f0d22b4fcb87f8b2f3280125e', '', '085205429160', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Muhammad19', 0, 0, '', '', '', '0000-00-00'),
(846, 'Yosephus66', 'Yos8sO', 'bb35ee6811b8e1f9bebc99e67c8faf41503e6bc292a9916b2e79bab96b406c4d75fc4f817cef8f97717db7eef856a4538424d666c6581d21fc2aa28bba35ff7b', '', '085966330716', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'Dermawan_66', 0, 0, '', '', '', '0000-00-00'),
(845, 'Words001', 'WortWN', '36cdfecf9707795d4ef5f3abcce48ca3e70994753da9821f07dc7849724c632b298e25f56e75fd7d1b88d42d841d5f66f4ac6aa54993066ab0746c0ef60f6727', '', '082112016958', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '120100', 0, 0, '', '', '', '0000-00-00'),
(844, 'Kusen77', 'KusTS9', 'b7261f425262cd7107aa3a655fe9b5b1afda986f124b894a1d03728fb0f892e6198e363afd7a9901bc90b8e6005dfec3037d10769fbffc0f432cd99b7fce4411', '', '08213163298', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'jelitacantik89', 0, 0, '', '', '', '0000-00-00'),
(843, 'davyka', 'davqgl', 'af198bc816c07c121b8300396033dcea37af86097a17a29c310ff7dcf5c3e9a186cf60e42e12dcd466c64234bb1728ba153f14eb524dab2fff91c5dcc6976b60', '', '081521669791', '', '', '', 'user', 'Mon9Hc', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '848484', 0, 0, '', '', '', '0000-00-00'),
(842, 'Alvaro', 'AlvCVJ', 'ee818b15da5d1a572563ebac49bc718c5e8ee793592852278088616dd8f8fbf36ff27dc97b386cb64cc1136f5bf6990ea9717a72b4ba56399540df084e544f0f', '', '085766716019', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Nanda1976@', 0, 0, '', '', '', '0000-00-00'),
(841, 'royalminers', 'roynPz', '6994de10655368af7c5da689bae7cb9c2e8976bf2c860050a66fc0b04f98c5f26cb7fdef84ad8e26f08507a681d35acbf9b8165e48ca21ba5f350a0bf7443b96', '', '085819031690', 'Dana', '089676214809', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, 'Murni Saniyah ', '12121999', 0, 0, '', '', '', '2024-06-02'),
(840, 'Queen', 'QueybY', 'ba9826f0efbb40201f29b1cf9d950a26879ab9c0609172f4c1b91e08e9a81d9f5850dd52f4c2d4f34405c7fa8d4ed9115996c409d17c8209668bd7933ea12d11', '', '83832243031', '', '', '', 'user', 'AmegoI', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '1234#1234#', 0, 0, '', '', '', '0000-00-00'),
(839, 'Worsd001', 'WorrcK', '36cdfecf9707795d4ef5f3abcce48ca3e70994753da9821f07dc7849724c632b298e25f56e75fd7d1b88d42d841d5f66f4ac6aa54993066ab0746c0ef60f6727', '', '082112016958', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '120100', 0, 0, '', '', '', '0000-00-00'),
(838, 'IISDML', 'IISTKq', 'a98a03e31269ac68b88716fe5a4b8916603b3c8275a84d48bfc57a14021b1b1f5482c1a0ba49031479251f4abc33d653f3308ef4c45f25e11d445517dc05b4f5', '', '089686613125', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '123123', 0, 0, '', '', '', '0000-00-00'),
(837, 'Ahmad', 'AhmvLf', 'd0e3f60d0298b42968299572026a159093fad8905d9555a63e4c0a71068d4b3051bb22223682805f3bdd1e4672b70237e9d5e804ab8dd304afe7e2d26df7d0a4', '', '081909025090', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'ahmad', 0, 0, '', '', '', '0000-00-00'),
(836, 'udin', 'udiGcN', '0b5b0c03484374507315627f941187c346645f9ef08d88286947e8f79a16e8caf8857bb82229fb531a75505df2aa65b8521919ab6b347c488f4a9d936810d566', '', '08951563297', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'aldiaja00', 0, 0, '', '', '', '0000-00-00'),
(835, 'Juara', 'JuaDm1', '87b967a7f4e7297d3bfc645172806ce937fcab6cbed23202ca76cb24cb8cb6d1a9f81f7957a6085d639c3c473f14c6f8d95d428b342fff73644ccf9ba28901ca', '', '8896184678', '', '', '', 'user', 'graoEL', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'persib', 0, 0, '', '', '', '0000-00-00'),
(834, 'kevin123', 'kevCYX', 'ab06013d8a99ed134c7e53d70c0e8f67b343293b9d60c4e5f23f238049f02b8e40b53eb88d6bdf967cd6ce71ba1ed99daf715f12f8ec7536d731975042bb383f', '', '085770481390', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', 'Denpasar123.', 0, 0, '', '', '', '0000-00-00'),
(833, 'Saldogratis', 'SalPqW', '25abe7997a2cc05a08db49c761807874cbf65de3b9cbe291e12d592bd381f31b3ee6c178c3a857d279fcae8ffe88c68797fe95b14470447846d173107aaf7b63', '', '0895638223666', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'pemuda100', 0, 0, '', '', '', '0000-00-00'),
(832, 'Dinda', 'Din48H', 'd8a26bbd3d6ad4709079e66805a8d505e24e9f56937a9d5526f33052bbe48c49192f9d097ab5e4e6c027c0ab4a3864a76f4f629a8999015df15d173e710874bd', '', '081249316276', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '200521', 0, 0, '', '', '', '0000-00-00'),
(831, 'Cuanlagi', 'CuaYk4', '482946999abdf72a22378f3be7b8be1d193083fb7c76b6cc696bdf64bd4ff8dc4e7fbb52b1c2281225efe4936c314bda4653686bfa3b2c0c57d9a5b3db009338', '', '082236621771', '', '', '', 'user', 'NonBDh', 'MjohTv', 'Mon9Hc', '2024-06-02', 'active', 0, '', 'lianizom', 0, 0, '', '', '', '0000-00-00'),
(830, 'SANTOSO', 'SAN61H', 'c03df6d84980164cae07b4d55f4a1e75cdb1b6d8875614202bb45c9b907b6e275fdfd578bcc14d6f21a2025a5e918c2be888d19e08356dc648a732d2894f2b10', '', '085751701903', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'galar123', 0, 0, '', '', '', '0000-00-00'),
(829, 'Royani', 'RoyMri', '6fcbe575765b164427b1898ca5555e7478f883d703af235ddc6ff2f50bee80cd56edcec98db7bf1d19d28183e5006c89e241bd5845db4d502d27ca68d873b02f', '', '81546441472', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '101212', 0, 0, '', '', '', '0000-00-00'),
(828, 'Ketrin', 'KetvDA', '899d661966efa00a382ae075b7e5e5e0bd1f7af68e16d8043373aa92e16a22ce6148d75e088f2d201e1592988e510605e89f112a4e17e2b72debc81c78c683a2', '', '082178779347', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'tin tin', 0, 0, '', '', '', '0000-00-00'),
(827, 'Nonacuan', 'NonBDh', '482946999abdf72a22378f3be7b8be1d193083fb7c76b6cc696bdf64bd4ff8dc4e7fbb52b1c2281225efe4936c314bda4653686bfa3b2c0c57d9a5b3db009338', '', '081236818812', '', '', '', 'user', 'MjohTv', 'Mon9Hc', 'AndUy6', '2024-06-02', 'active', 0, '', 'lianizom', 0, 0, '', '', '', '0000-00-00'),
(826, 'Izalpardin', 'Izamyj', 'f4b1c4562debab4d7ea2b3f9a59026757dc23e0965d8157aa693757a39ec20095f5cdee7e6efb4e4ffdaad9ed0022b8ae9a98e7d2486d1db38dcfe7ffe2a4b3a', '', '81270225945', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '140994', 0, 0, '', '', '', '0000-00-00'),
(825, 'Putra121', 'PutlBD', '61969c056b028b6365f5e7a0ddbc9f459e0179e51d918a1bac0449ca7db7074a57e0e5ba9b5902fa48f5e4078e9465d64f9e7934565ac6f3ec29a9562d3dafc5', '', '83126645233', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'rehabilitas', 0, 0, '', '', '', '0000-00-00'),
(824, 'Putra77', 'Putp0s', '2c0c0246bae87a6c407ec1326965f8820a01317c757dafd590226f99f76498e769e91ba5150504e14941197b59593d66efdb007e489ee236b4fd462d2d338b83', '', '087735481905', '', '', '', 'user', 'graoEL', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'kopkop11', 0, 0, '', '', '', '0000-00-00'),
(823, '087749319643', '087sYb', '4be4a262842db25df962b14680680fbcb7800cd22d4ca8f41bfbf445c7253fbeebbc18151b17c6c0aa83a87253acf58c44b2cb06e173e8cad84b24df86c77711', '', '087749319643', '', '', '', 'user', 'graoEL', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '123654', 0, 0, '', '', '', '0000-00-00'),
(822, 'Joeran', 'JoecIC', 'd13975d4e34758f0f95988d318fee3851e3e5b83de0a2e92b3a3f112634bfa9d4baf54b70112d9f5c906102d158b00ad1a3aa4032d0655b0d8585ea79a482a6c', '', '81360777771', '', '', '', 'user', 'AulgPZ', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'silahkan4', 0, 0, '', '', '', '0000-00-00'),
(821, 'Siani123', 'SiaO0h', 'bfec8e6bfc99e201cf25f956d571ba1fed5feab15ec0360da3fa1930f02fe7c415ceefb64c135f9780cad47535e1c3446878df02929f03a89f67831f1e3cd30e', '', '081263105335', 'Dana', '081263105335', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Siani daeli', '223344sS', 0, 0, '', '', '', '0000-00-00'),
(820, 'Mjoe', 'MjohTv', '482946999abdf72a22378f3be7b8be1d193083fb7c76b6cc696bdf64bd4ff8dc4e7fbb52b1c2281225efe4936c314bda4653686bfa3b2c0c57d9a5b3db009338', '', '081236818798', '', '', '', 'user', 'Mon9Hc', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'lianizom', 0, 0, '', '', '', '0000-00-00'),
(819, 'Siapa', 'Sia2Ae', 'd7d2f602e155ba700ed76c48d9a48009b9383e8d17435bfb0fe8ad7c664d4002f16cc7a65c6fb066963714a794f96441ef7f9b9c1b1456acfb9225cbad474fb0', '', '82139158785', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '12345', 0, 0, '', '', '', '0000-00-00'),
(818, 'Arbell', 'Arb9Vt', 'f611a2b00af25bb604547ff3b5df6352264b110f5bd84578127d6f69b75ec065f2a9822798b42098e4de87a5fc018c87f0ac074ef8a874f1590ae894d5b8fd13', '', '082325887788', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Ardina07', 0, 0, '', '', '', '0000-00-00'),
(817, 'Nisa12', 'NisRtE', '9970f16668b0ce09b694293b5164ae2b211fb9a23e9026bb4d0d1aef370f192120dd5f5a8e78c06d57fa036de0975c09b528ea7dc49262aee10c3247e62964fa', '', '082113685939', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '123456', 0, 0, '', '', '', '0000-00-00'),
(816, 'Royadi123', 'RoytHd', '4be4a262842db25df962b14680680fbcb7800cd22d4ca8f41bfbf445c7253fbeebbc18151b17c6c0aa83a87253acf58c44b2cb06e173e8cad84b24df86c77711', '', '0859-6707-4570', '', '', '', 'user', 'graoEL', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', '123654', 0, 0, '', '', '', '0000-00-00'),
(815, 'Stroberi', 'StrDI1', '60adebb4d3564dadc7f07459183411c9d143f3c6f0f504f8f882f1129e6d448ea20b12a603845b6587100c55f353cbc1d45f11cc1119c8e43de316f64695cd1d', '', '0895704738500', 'BRI', '512501035337532', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Ais Hinelo', 'eaBxF8zsB7ZXr5d', 0, 0, '', '', '', '0000-00-00'),
(814, 'admin001', 'admXcu', '57ea1b70c7dd6ee8079457c8e1de2db481ef574448165186584a32e948607e39c610e7582cb1dc0d67a072be2a3e9fd6639d0ed165ae647256fc3e5cdd94ce8f', '', '82279134794', '', '', '', 'user', 'graoEL', 'piaFf8', 'AndUy6', '2024-06-02', 'active', 0, '', 'qwerty05', 0, 0, '', '', '', '0000-00-00'),
(813, 'Rhamly', 'RhafvT', 'b614cbc75c1ec55bf951f8aec445b83947d001e00fd69490f964769a993254b777527f562e96f6ff09f5d4f097a157952c9c52348b47040c65016f529e919611', '', '083822791379', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Rhamly151', 0, 0, '', '', '', '0000-00-00'),
(812, 'ndahzie', 'ndat32', '10c4e84040b2bfe6a7dcf8ab3c29057b7812c4b9dabc417dd51d783676dd5512a67b8cb0f41beba239f572fb9a8a726bd7730c66c1510cc0963382874674139f', '', '082216781272', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'indah123', 0, 0, '', '', '', '0000-00-00'),
(811, 'dilanur', 'dili9v', 'a586cb65323cd48a4b5cefb6386d2fce2e9d60ee3004898eb9cd973779d56e4662bf2da3a098b7e37b1650e74a6897751e49fcf10dc9ee81fbe8d7783ba92e46', '', '085716749419', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', '180394', 0, 0, '', '', '', '0000-00-00'),
(810, '037915', '037MZy', '60fb98fbc4726e8afdd9dbb7372b1fe6a8f5d661ea7c586f8a3dc8b7dc3dedd0fca964493ff0a545ca85f38cb534f4b9a2ddffad75fd1004f0903dab55241717', '', '0895640648446', '', '', '', 'user', 'JasCHd', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'avoidcontact77', 0, 0, '', '', '', '0000-00-00'),
(809, 'Akbar', 'Akbhzr', '703d638cf412b2b272848f5271dd7b8e852b2d9dbbb3fe4efe62d0f0b148a3cb5285d585610e580de703a09bc427d8ad61592a53a0a73bc8d0068aee6e57a9f3', '', '87844332598', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Lumajang123', 0, 0, '', '', '', '0000-00-00'),
(808, 'gratisan', 'graoEL', 'cef2d6168571c63167f18066b67313bd2c93d318154bcd0f5ddc824beed9e40614d5f5ca67141e5a753fd4da3579aa43bd38fd413b385476d063daeea4d51f0c', '', '81391232424', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'yuhu666', 0, 0, '', '', '', '0000-00-00'),
(807, 'Amelaudia', 'AmegoI', '6b912936c414aa3be73068b1ba8d61ab02a7e068a06eaaefddaac710033a347c0bb249fe11c176b4851bac833c4b098b10c1eb3b21c86f57137af368969d7bc6', '', '085664915325', 'Gopay ', '085664915325', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, 'Hikmawati ', 'Amelaudia123', 0, 0, '', '', '', '2024-06-02'),
(806, 'Auliamaharani', 'AulgPZ', 'cd2ba04f58e46db70f3642b6e8e01aa6d0e5f2ce4884a6761db580f55e244522a989a4c662241e2796d81978a756d1e4ef77da8fb128930da9daed2f62a98940', '', '083123788527', 'Shopepay ', '083123788527', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, 'Kacah', 'Subang01', 0, 0, '', '', '', '0000-00-00'),
(805, 'Monalisa', 'Mon9Hc', '63dc41d1e31e0c47a8918e245c17ab2c610c13634014efabe10c36ee6c73d5fe8019c7689e318afe9cecc9f50733265930a75a66203524e81ba806818b6b24c9', '', '085278602065', '', '', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, '', '200283', 0, 0, '', '', '', '0000-00-00'),
(804, 'indiekari', 'indtE1', 'd3198d10c0304f52cf3334fd8ac7da863d8029815c648234b364513fe932181b397573209ab0e8c02a9671baf987d1fadec0a6d42f13b0dc190f1291bbf97f23', '', '83189928200', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'ANDIN_09#', 0, 0, '', '', '', '0000-00-00'),
(803, 'P10N33R', 'P10C1T', 'f6589735c7544cfaee95ef24741be4161612a624caa3d665b73d2400a879e00ef98cf096e529c0a0513cb770b4f68f2901568627f71bdbee422b4a7da060a505', '', '82262200960', '', '', '', 'user', 'piaFf8', 'AndUy6', 'JujbZe', '2024-06-02', 'active', 0, '', 'Tamtamku99', 0, 0, '', '', '', '0000-00-00'),
(802, 'Jason12', 'JasCHd', '9e54c6cc458f6786d5cd7afeee797f2d6a4387dced5f5a8ca3f4abe7873e6e0f8cd70e1bbb023fcf107fe04b996c15c4d157e39a2386968d52227c387b9d796e', '', '085603927834', 'Dana', '085603927834', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, 'Herti mayang sari', 'gibam12', 0, 0, '', '', '', '2024-06-02'),
(801, 'Koko99', 'KoklwK', 'cb969bd06f49d06d90cc052c048c865ce8290096c8f195f33f652a424acc52fb1ad57b2c158a2464b23bed70437e9e2a62d9103aaf85091cc3bb4367c8dafe54', '', '087762337099', 'DANA', '081332703775', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, 'EKO WAHYUDI', 'Aladin123', 0, 0, '', '', '', '2024-06-02'),
(800, 'pian', 'piaFf8', 'ed2e9aa82ea8dad55c1e16a440de108605bc3ada08164870dee3a7b26a3131366bceaad09cb8de922a5e4a04ccb938e9805e523abff6b058291bfc54cdc04429', '', '087735209636', 'DANA', '087735209636', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-02', 'active', 0, 'Alvian', 'pianz2020#', 0, 0, '', '', '', '2024-06-02'),
(799, 'Mira1990', 'MirMmp', '53fb860b6e934e38477f6df6d7664f6a5c4124b5fb9f8c88d8efab6eb9e8cd081c995fe14354f18016a72324129150ba066a15e5899b08b94922e7561bf29691', '', '085604881525', 'Dana', '085231389853', '', 'user', 'AndUy6', 'JujbZe', 'xsy', '2024-06-01', 'active', 0, 'Nurul Huda ', 'abc123', 0, 0, '', '', '', '2024-06-01'),
(798, 'Andi90', 'AndUy6', '53fb860b6e934e38477f6df6d7664f6a5c4124b5fb9f8c88d8efab6eb9e8cd081c995fe14354f18016a72324129150ba066a15e5899b08b94922e7561bf29691', '', '0895987701232', '', '', '', 'user', 'JujbZe', 'xsy', '441P2', '2024-06-01', 'active', 0, '', 'abc123', 0, 0, '', '', '', '2024-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_mission`
--

CREATE TABLE `user_mission` (
  `id_user_mission` bigint(20) NOT NULL,
  `id_package_fk` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `comission` bigint(20) NOT NULL,
  `date_created` date NOT NULL,
  `time_created` time NOT NULL,
  `status` varchar(20) NOT NULL,
  `id_depo_fk` int(11) NOT NULL,
  `toko` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_mission`
--

INSERT INTO `user_mission` (`id_user_mission`, `id_package_fk`, `username`, `comission`, `date_created`, `time_created`, `status`, `id_depo_fk`, `toko`) VALUES
(1, 3, '123', 15000, '2024-06-02', '01:11:22', 'Success', 122, ''),
(2, 2, 'Mira1990', 7500, '2024-06-01', '01:25:01', 'Success', 5, ''),
(3, 2, 'Mira1990', 7500, '2024-06-02', '01:25:01', 'Success', 5, ''),
(4, 3, 'Cuanfitri2024', 15000, '2024-06-02', '01:32:32', 'Success', 133, ''),
(5, 2, 'Jason12', 7500, '2024-06-02', '03:17:26', 'Success', 96, ''),
(6, 3, 'stella', 15000, '2024-06-02', '05:04:06', 'Success', 153, ''),
(7, 1, 'Andi', 3500, '2024-06-02', '07:38:50', 'Success', 143, ''),
(8, 2, 'vera', 7500, '2024-06-02', '10:04:03', 'Success', 174, ''),
(9, 3, 'Koko99', 15000, '2024-06-02', '11:13:51', 'Success', 111, ''),
(10, 3, 'Koko99', 15000, '2024-06-03', '12:01:30', 'Success', 111, ''),
(11, 2, 'vera', 7500, '2024-06-03', '12:02:04', 'Success', 174, ''),
(12, 3, 'Akram', 15000, '2024-06-02', '02:30:30', 'Success', 88, ''),
(13, 3, 'Akram', 15000, '2024-06-03', '02:30:30', 'Success', 88, ''),
(14, 2, 'Ceka212', 7500, '2024-06-02', '07:54:39', 'Success', 116, ''),
(15, 2, 'Ceka212', 7500, '2024-06-03', '07:54:39', 'Success', 116, ''),
(16, 2, 'Jason12', 7500, '2024-06-03', '07:58:20', 'Success', 96, ''),
(17, 3, 'pian', 15000, '2024-06-02', '09:08:55', 'Success', 102, ''),
(18, 3, 'pian', 15000, '2024-06-03', '09:08:55', 'Success', 102, ''),
(19, 3, '123', 15000, '2024-06-03', '09:09:10', 'Success', 122, ''),
(20, 2, 'emakra2', 7500, '2024-06-02', '09:24:52', 'Success', 148, ''),
(21, 2, 'emakra2', 7500, '2024-06-03', '09:24:52', 'Success', 148, ''),
(22, 2, 'royalminers', 7500, '2024-06-02', '02:49:21', 'Success', 117, ''),
(23, 2, 'royalminers', 7500, '2024-06-03', '02:49:21', 'Success', 117, ''),
(24, 2, 'Adihmul', 7500, '2024-06-03', '03:28:06', 'Success', 203, ''),
(25, 2, 'Amelaudia', 7500, '2024-06-02', '03:37:54', 'Success', 100, ''),
(26, 2, 'Amelaudia', 7500, '2024-06-03', '03:37:54', 'Success', 100, ''),
(27, 1, 'Andi', 3500, '2024-06-03', '04:16:22', 'Success', 143, ''),
(28, 3, 'Elisa', 15000, '2024-06-03', '04:25:53', 'Success', 205, ''),
(29, 2, 'Syaiful76', 7500, '2024-06-03', '05:34:21', 'Success', 209, ''),
(30, 3, 'Elisa', 15000, '2024-06-03', '06:20:08', 'Success', 201, ''),
(31, 1, 'Afif08', 3500, '2024-06-03', '08:28:32', 'Success', 213, ''),
(32, 2, 'Suci', 7500, '2024-06-03', '10:12:51', 'Success', 215, ''),
(33, 2, 'm.haris', 7500, '2024-06-03', '10:30:17', 'Success', 186, ''),
(34, 3, 'stella', 15000, '2024-06-03', '11:27:36', 'Success', 153, ''),
(35, 3, 'ahlanxx', 15000, '2024-06-03', '11:31:49', 'Success', 220, ''),
(36, 1, 'Afif08', 3500, '2024-06-04', '12:09:47', 'Success', 213, ''),
(37, 3, 'Akram', 15000, '2024-06-04', '04:10:54', 'Success', 88, ''),
(38, 2, 'emakra2', 7500, '2024-06-04', '04:40:24', 'Success', 148, ''),
(39, 3, 'Koko99', 15000, '2024-06-04', '05:02:39', 'Success', 111, ''),
(40, 2, 'Jason12', 7500, '2024-06-04', '06:12:57', 'Success', 96, ''),
(41, 2, 'Ceka212', 7500, '2024-06-04', '07:18:35', 'Success', 116, ''),
(42, 3, 'pian', 15000, '2024-06-04', '08:59:00', 'Success', 102, ''),
(43, 2, 'm.haris', 7500, '2024-06-04', '09:04:29', 'Success', 186, ''),
(44, 2, 'vera', 7500, '2024-06-04', '09:11:21', 'Success', 174, ''),
(45, 3, 'ahlanxx', 15000, '2024-06-04', '10:43:02', 'Success', 220, ''),
(46, 3, 'stella', 15000, '2024-06-04', '10:43:18', 'Success', 153, ''),
(47, 2, 'royalminers', 7500, '2024-06-04', '12:10:18', 'Success', 117, ''),
(48, 2, 'Syaiful76', 7500, '2024-06-04', '02:11:31', 'Success', 229, ''),
(49, 2, 'Syaiful76', 7500, '2024-06-04', '02:11:48', 'Success', 209, ''),
(50, 2, 'Gun05', 7500, '2024-06-04', '02:47:32', 'Success', 228, ''),
(51, 2, 'Suci', 7500, '2024-06-04', '05:39:23', 'Success', 215, ''),
(52, 1, 'Andi', 3500, '2024-06-04', '06:04:07', 'Success', 143, ''),
(53, 1, 'Sudarmanto22', 3500, '2024-06-02', '08:59:06', 'Success', 175, ''),
(54, 1, 'Sudarmanto22', 3500, '2024-06-03', '08:59:06', 'Success', 175, ''),
(55, 1, 'Sudarmanto22', 3500, '2024-06-04', '08:59:06', 'Success', 175, ''),
(56, 0, 'Berkah68A', 6200, '2024-06-04', '11:31:31', '', 0, ''),
(57, 3, 'Koko99', 15000, '2024-06-05', '12:19:57', 'Success', 111, ''),
(58, 2, 'Adihmul', 7500, '2024-06-04', '12:21:53', 'Success', 203, ''),
(59, 2, 'Adihmul', 7500, '2024-06-05', '12:21:53', 'Success', 203, ''),
(60, 3, 'ahlanxx', 15000, '2024-06-05', '01:01:40', 'Success', 220, ''),
(61, 3, 'stella', 15000, '2024-06-05', '01:01:57', 'Success', 153, ''),
(62, 2, 'Berkah68A', 7500, '2024-06-04', '01:43:00', 'Success', 246, ''),
(63, 2, 'Berkah68A', 7500, '2024-06-05', '01:43:00', 'Success', 246, ''),
(64, 2, 'Gun05', 7500, '2024-06-05', '01:52:48', 'Success', 228, ''),
(65, 2, 'emakra2', 7500, '2024-06-05', '04:58:44', 'Success', 148, ''),
(66, 2, 'Amelaudia', 7500, '2024-06-04', '05:57:27', 'Success', 100, ''),
(67, 2, 'Amelaudia', 7500, '2024-06-05', '05:57:27', 'Success', 100, ''),
(68, 3, 'pian', 15000, '2024-06-05', '06:53:02', 'Success', 102, ''),
(69, 2, 'Jason12', 7500, '2024-06-05', '07:17:25', 'Success', 96, ''),
(70, 2, 'vera', 7500, '2024-06-05', '07:22:23', 'Success', 174, ''),
(71, 2, 'Ceka212', 7500, '2024-06-05', '07:42:54', 'Success', 116, ''),
(72, 1, 'Afif08', 3500, '2024-06-05', '07:54:01', 'Success', 213, ''),
(73, 2, 'm.haris', 7500, '2024-06-05', '08:50:52', 'Success', 186, ''),
(74, 3, 'Akram', 15000, '2024-06-05', '09:02:25', 'Success', 88, ''),
(75, 5, 'Ozie', 39500, '2024-06-05', '09:58:30', 'Success', 252, ''),
(76, 2, 'royalminers', 7500, '2024-06-05', '12:30:02', 'Success', 117, ''),
(77, 2, 'Aida01', 7500, '2024-06-05', '06:01:09', 'Success', 259, ''),
(78, 1, 'Aida01', 3500, '2024-06-05', '06:01:12', 'Success', 248, ''),
(79, 2, 'Syaiful76', 7500, '2024-06-05', '06:33:46', 'Success', 229, ''),
(80, 2, 'Syaiful76', 7500, '2024-06-05', '06:43:08', 'Success', 209, ''),
(81, 2, 'Syaiful76', 7500, '2024-06-05', '07:04:14', 'Success', 274, ''),
(82, 2, 'Suci', 7500, '2024-06-05', '08:55:20', 'Success', 215, '');

-- --------------------------------------------------------

--
-- Table structure for table `wd`
--

CREATE TABLE `wd` (
  `id_wd` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `date_created` date NOT NULL,
  `evidence_file` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `notes` text NOT NULL,
  `pay_date` date NOT NULL,
  `time_created` time NOT NULL,
  `holder_name` varchar(100) NOT NULL,
  `bank` varchar(100) NOT NULL,
  `account_number` varchar(200) NOT NULL,
  `note` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `wd`
--

INSERT INTO `wd` (`id_wd`, `username`, `amount`, `date_created`, `evidence_file`, `status`, `notes`, `pay_date`, `time_created`, `holder_name`, `bank`, `account_number`, `note`) VALUES
(1, 'Jason12', 30200, '2024-06-02', '', 'Success', '', '2024-06-02', '12:03:25', '', '', '', 'wd'),
(2, 'pian', 30338, '2024-06-02', '', 'Success', '', '2024-06-02', '12:08:44', '', '', '', 'wd'),
(3, 'Amelaudia', 30200, '2024-06-02', '', 'Success', '', '2024-06-02', '12:21:05', '', '', '', 'wd'),
(4, 'royalminers', 30200, '2024-06-02', '', 'Success', '', '2024-06-02', '12:24:30', '', '', '', 'wd'),
(5, 'Mira1990', 31000, '2024-06-02', '', 'Success', '', '2024-06-02', '12:50:10', '', '', '', 'wd'),
(6, 'Koko99', 30000, '2024-06-03', '', 'Success', '', '2024-06-03', '09:35:57', '', '', '', 'wd'),
(7, 'vera', 39000, '2024-06-03', '', 'Success', '', '2024-06-03', '12:11:19', '', '', '', 'wd'),
(8, 'Akram', 30000, '2024-06-03', '', 'Success', '', '2024-06-03', '01:08:50', '', '', '', 'wd'),
(9, 'pnzyy', 31000, '2024-06-03', '', 'Success', '', '2024-06-04', '06:57:21', '', '', '', 'wd'),
(10, 'pian', 40662, '2024-06-03', '', 'Success', '', '2024-06-03', '08:01:38', '', '', '', 'wd'),
(11, 'Elisa', 30000, '2024-06-04', '', 'Success', '', '2024-06-04', '09:06:13', '', '', '', 'wd'),
(12, 'vera', 119000, '2024-06-04', '', 'Success', '', '2024-06-04', '09:14:00', '', '', '', 'wd'),
(13, 'Syaiful76', 32500, '2024-06-04', '', 'Success', '', '2024-06-04', '02:26:41', '', '', '', 'wd'),
(15, 'vera', 99000, '2024-06-05', '', 'Success', '', '2024-06-05', '08:58:09', '', '', '', 'wd'),
(16, 'Akram', 30000, '2024-06-05', '', 'Success', '', '2024-06-05', '09:02:50', '', '', '', 'wd'),
(28, 'Syaiful76', 32500, '2024-06-05', '', 'Success', '', '2024-06-05', '07:09:37', '', '', '', 'wd'),
(24, 'pnzyy', 30000, '2024-06-05', '', 'Success', '', '2024-06-05', '10:55:02', '', '', '', 'wd'),
(25, 'Koko99', 30000, '2024-06-05', '', 'Success', '', '2024-06-05', '12:14:49', '', '', '', 'wd'),
(26, 'pian', 30000, '2024-06-05', '', 'Success', '', '2024-06-05', '12:47:13', '', '', '', 'wd'),
(29, 'Berkah68A', 30000, '2024-06-05', '', 'Pending', '', '0000-00-00', '07:17:23', '', '', '', 'wd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_bank`
--
ALTER TABLE `account_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id_depo`);

--
-- Indexes for table `deposit_package`
--
ALTER TABLE `deposit_package`
  ADD PRIMARY KEY (`id_package`);

--
-- Indexes for table `file_mission`
--
ALTER TABLE `file_mission`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id_mission`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_wd`
--
ALTER TABLE `setting_wd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_mission`
--
ALTER TABLE `user_mission`
  ADD PRIMARY KEY (`id_user_mission`);

--
-- Indexes for table `wd`
--
ALTER TABLE `wd`
  ADD PRIMARY KEY (`id_wd`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_bank`
--
ALTER TABLE `account_bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id_depo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `deposit_package`
--
ALTER TABLE `deposit_package`
  MODIFY `id_package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `file_mission`
--
ALTER TABLE `file_mission`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mission`
--
ALTER TABLE `mission`
  MODIFY `id_mission` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reward`
--
ALTER TABLE `reward`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting_wd`
--
ALTER TABLE `setting_wd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1263;

--
-- AUTO_INCREMENT for table `user_mission`
--
ALTER TABLE `user_mission`
  MODIFY `id_user_mission` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `wd`
--
ALTER TABLE `wd`
  MODIFY `id_wd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
