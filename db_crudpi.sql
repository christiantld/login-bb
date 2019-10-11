-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 09, 2019 at 07:37 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crudpi`
--
DROP DATABASE IF EXISTS `db_crudpi`;
CREATE DATABASE IF NOT EXISTS `db_crudpi` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_crudpi`;

--
-- Table structure for table `tb_funcionario`
--
DROP TABLE IF EXISTS `tb_funcionario`;
CREATE TABLE IF NOT EXISTS `tb_funcionario` (
  `pk_funcionario` int(11) NOT NULL,
  `no_funcionario` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `nu_cpf` bigint(11) ZEROFILL NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,s
  `nu_telefone` bigint(11) NOT NULL,
  `senha` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`pk_funcionario`, `no_funcionario`, `nu_cpf`, `email`, `nu_telefone`, `senha`) VALUES
(12, 'Dwight Schrute', 99999999999, 'admin@admin.com', 99999999999, '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`pk_funcionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `pk_funcionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
