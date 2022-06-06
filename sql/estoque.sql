-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2022 às 02:10
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `bancoloja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(10) NOT NULL,
  `fk_id_camisa` int(10) NOT NULL,
  `quantidade_e` int(10) NOT NULL,
  `tamanho` varchar(20) NOT NULL,
  `cor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `fk_id_camisa`, `quantidade_e`, `tamanho`, `cor`) VALUES
(1, 1, 10, 'P', 0),
(2, 2, 5, 'M', 0),
(3, 3, 3, 'G', 0),
(4, 4, 15, 'GG', 0),
(5, 5, 7, 'P', 0),
(6, 6, 8, 'M', 0),
(7, 7, 2, 'G', 0),
(8, 8, 2, 'GG', 0),
(9, 9, 9, 'P', 0),
(10, 10, 11, 'M', 0),
(11, 11, 11, 'G', 0),
(12, 12, 12, 'GG', 0),
(13, 13, 16, 'P', 0),
(14, 14, 7, 'M', 0),
(15, 15, 4, 'G', 0),
(16, 17, 6, 'GG', 0),
(17, 18, 9, 'P', 0),
(18, 19, 3, 'M', 0),
(19, 20, 4, 'G', 0),
(20, 16, 20, 'GG', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;
COMMIT;
