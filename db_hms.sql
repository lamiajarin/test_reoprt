-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2018 at 09:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hms`
--
CREATE DATABASE IF NOT EXISTS `db_hms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_hms`;

-- --------------------------------------------------------

--
-- Table structure for table `tb_d`
--

CREATE TABLE `tb_d` (
  `d_Id` int(30) NOT NULL,
  `d_Name` varchar(40) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Contact` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_d`
--

INSERT INTO `tb_d` (`d_Id`, `d_Name`, `Designation`, `Department`, `Contact`) VALUES
(5, 'rd', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_p`
--

CREATE TABLE `tb_p` (
  `p_Id` int(30) NOT NULL,
  `p_Name` varchar(40) NOT NULL,
  `Age` int(30) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Contact` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_p`
--

INSERT INTO `tb_p` (`p_Id`, `p_Name`, `Age`, `Gender`, `Contact`) VALUES
(5, 'rd', 0, '', 0),
(14, 'sruti', 0, 'female', 0),
(17, 'sruti Hasan', 54, 'female', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_t`
--

CREATE TABLE `tb_t` (
  `t_Id` int(30) NOT NULL,
  `t_Name` varchar(40) NOT NULL,
  `Type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_t`
--

INSERT INTO `tb_t` (`t_Id`, `t_Name`, `Type`) VALUES
(5, 'rd', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_d`
--
ALTER TABLE `tb_d`
  ADD PRIMARY KEY (`d_Id`);

--
-- Indexes for table `tb_p`
--
ALTER TABLE `tb_p`
  ADD PRIMARY KEY (`p_Id`);

--
-- Indexes for table `tb_t`
--
ALTER TABLE `tb_t`
  ADD PRIMARY KEY (`t_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
