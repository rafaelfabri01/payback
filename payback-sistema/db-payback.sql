-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Nov-2020 às 05:45
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db-payback`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `suporte`
--

CREATE TABLE `suporte` (
  `ID_Suporte` varchar(255) DEFAULT NULL,
  `ID_Usuario` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Problema` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `transacao`
--

CREATE TABLE `transacao` (
  `ID_Transacao` int(11) UNSIGNED NOT NULL,
  `ID_Users` int(11) NOT NULL,
  `Usuario` varchar(25) DEFAULT NULL,
  `DataInicio` date DEFAULT NULL,
  `DataFinal` date DEFAULT NULL,
  `ValorInicial` bigint(255) DEFAULT NULL,
  `ValorFinal` bigint(255) DEFAULT NULL,
  `Moeda` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `transacao`
--

INSERT INTO `transacao` (`ID_Transacao`, `ID_Users`, `Usuario`, `DataInicio`, `DataFinal`, `ValorInicial`, `ValorFinal`, `Moeda`, `Status`) VALUES
(1, 2, 'Henrique de Oliveira Borg', '2020-11-15', '2020-11-18', 10000, 15000, 'BitCoin', 'aberto'),
(2, 3, 'test', '2020-10-05', '2020-11-04', 12000, 17000, 'Ethereum', 'aberto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `ID_Users` int(11) UNSIGNED NOT NULL,
  `Usuario` varchar(64) NOT NULL,
  `Senha` varchar(64) DEFAULT NULL,
  `Email` varchar(128) DEFAULT NULL,
  `NomeCompleto` varchar(255) DEFAULT NULL,
  `Nascimento` date DEFAULT NULL,
  `RG` char(9) DEFAULT NULL,
  `CPF` char(20) DEFAULT NULL,
  `Telefone1` varchar(12) DEFAULT NULL,
  `Telefone2` varchar(12) DEFAULT NULL,
  `Sexo` varchar(45) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Endereco` longtext DEFAULT NULL,
  `IPLocation` varchar(128) DEFAULT NULL,
  `SuperUser` varchar(128) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`ID_Users`, `Usuario`, `Senha`, `Email`, `NomeCompleto`, `Nascimento`, `RG`, `CPF`, `Telefone1`, `Telefone2`, `Sexo`, `Status`, `Endereco`, `IPLocation`, `SuperUser`) VALUES
(2, '2', '2', 'Henrique.Borges@nuvolax.com', 'Henrique de Oliveira Borges', '2020-11-14', '222222222', '33333333333', '94984178244', '2147483647', 'Masculino', 'Ativo', '144', '1', 'Administrador'),
(3, '3', '3', 'test@teste.com', 'test', '2020-11-14', '1', '1', '1', '1', '1', '1', '1', '1', 'Usuario'),
(8, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(9, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(10, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(11, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(12, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(13, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(14, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(15, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(16, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1'),
(17, '', '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', NULL, '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `transacao`
--
ALTER TABLE `transacao`
  ADD PRIMARY KEY (`ID_Transacao`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_Users`,`Usuario`) USING BTREE,
  ADD KEY `ID_Users` (`ID_Users`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `transacao`
--
ALTER TABLE `transacao`
  MODIFY `ID_Transacao` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `ID_Users` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
