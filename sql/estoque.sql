-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26-Maio-2022 às 01:24
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `bancoloja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--
--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `fk_id_camisa`, `quantidade_e`, `tamanho`, `cor`) VALUES
(1, 2, 10, 'P', 'Vermelho'),
(2, 2, 5, 'M', 'Preto'),
(3, 2, 3, 'P', 'Preto'),
(4, 1, 2, 'G', 'Preto'),
(9, 4, 7, 'M', 'Verde'),
(10, 4, 8, 'P', 'Amarelo'),
(11, 5, 2, 'G', 'Vermelho'),
(12, 5, 3, 'P', 'Preto'),
(13, 16, 9, 'G', 'preto'),
(14, 17, 11, 'G', 'vermelho'),
(15, 18, 11, 'M', 'azul'),
(16, 19, 12, 'M', 'branco'),
(17, 20, 16, 'M', 'preto'),
(18, 21, 7, 'M', 'vermelho'),
(19, 22, 4, 'G', 'azul'),
(20, 23, 2, 'P', 'preto'),
(21, 24, 6, 'GG', 'azul'),
(22, 25, 9, 'GG', 'amarelo'),
(23, 16, 3, 'P', 'vermelho'),
(24, 17, 4, 'P', 'preto');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;
