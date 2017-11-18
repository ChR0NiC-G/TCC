-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2017 às 16:32
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tcc`
--
CREATE DATABASE IF NOT EXISTS `tcc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tcc`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `votos`
--

DROP TABLE IF EXISTS `votos`;
CREATE TABLE `votos` (
  `id` int(11) NOT NULL,
  `profissao` varchar(200) NOT NULL,
  `qtdvoto` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `votos`
--

INSERT INTO `votos` (`id`, `profissao`, `qtdvoto`) VALUES
(1, 'PROGRAMAÇÃO', 0),
(2, 'MEDICINA', 0),
(3, 'PSICOLOGIA', 0),
(4, 'ENG. CIVIL', 0),
(5, 'GASTRONOMIA', 0),
(6, 'EDUCAÇÃO FÍSICA', 0),
(7, 'T.I.', 0),
(8, 'ENFERMAGEM', 0),
(9, 'ARTES CÊNICAS  ', 0),
(10, 'GASTRONOMIA', 0),
(11, 'RÁDIO E TV', 0),
(12, 'DIREITO', 0),
(13, 'FORÇAS ARMADAS', 0),
(14, 'ARTES VISUAIS', 0),
(15, 'ECONOMIA', 0),
(16, 'POLÍCIA', 0),
(17, 'GAME DEVELOPER', 0),
(18, 'PROFESSOR', 0),
(19, 'FÍSICO', 0),
(20, 'ENG. MECÂNICA', 0),
(21, 'ORG. DE EVENTOS', 0),
(22, 'MEDICINA VETERINÁRIA', 0),
(23, 'DESIGNER GRÁFICO', 0),
(24, 'ESTILISTA', 0),
(25, 'NUTRICIONISTA', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `votos`
--
ALTER TABLE `votos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `votos`
--
ALTER TABLE `votos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
