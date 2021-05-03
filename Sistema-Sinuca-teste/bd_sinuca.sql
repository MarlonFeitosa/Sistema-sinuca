-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 30-Abr-2021 às 18:15
-- Versão do servidor: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 5.6.40-41+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistema_sinuca`
--
CREATE DATABASE IF NOT EXISTS `sistema_sinuca` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci;
USE `sistema_sinuca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_jogador`
--

CREATE TABLE `cad_jogador` (
  `ID` int(11) NOT NULL,
  `IDTime` int(11) NOT NULL,
  `Jogador1` varchar(80) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Jogador2` varchar(80) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_times`
--

CREATE TABLE `cad_times` (
  `ID` int(11) NOT NULL,
  `NomeTime` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `cad_times`
--

INSERT INTO `cad_times` (`ID`, `NomeTime`) VALUES
(19, 'Botafogo'),
(20, 'Flamengo'),
(21, 'Fluminense'),
(22, 'Vasco');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo_times`
--

CREATE TABLE `grupo_times` (
  `ID` int(11) NOT NULL,
  `IDTime` int(11) NOT NULL,
  `IDPontos` int(11) NOT NULL,
  `Pontuacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_pontos`
--

CREATE TABLE `tab_pontos` (
  `ID` int(11) NOT NULL,
  `Premiacao` varchar(80) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `LimitPonts` int(3) NOT NULL,
  `Regras` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Extraindo dados da tabela `tab_pontos`
--

INSERT INTO `tab_pontos` (`ID`, `Premiacao`, `LimitPonts`, `Regras`) VALUES
(1, 'Os participantes ganharam um taco de sinuca Personalizado', 20, 'Para participar do jogo de sinuca o time precisa ter 2 participante para cadastra, apos cadastro os times receberam a pontuacao. O primeiro que atingir a quantidade 20 pontos sera o campeao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cad_jogador`
--
ALTER TABLE `cad_jogador`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cad_times`
--
ALTER TABLE `cad_times`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `grupo_times`
--
ALTER TABLE `grupo_times`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tab_pontos`
--
ALTER TABLE `tab_pontos`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cad_jogador`
--
ALTER TABLE `cad_jogador`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `cad_times`
--
ALTER TABLE `cad_times`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `grupo_times`
--
ALTER TABLE `grupo_times`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tab_pontos`
--
ALTER TABLE `tab_pontos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
