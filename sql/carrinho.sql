phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28-Maio-2022 às 00:22
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
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `fk_id_pessoa` int(11) NOT NULL,
  `fk_id_estoque` int(11) NOT NULL,
  `quantidade` int(200) NOT NULL,
  `fk_id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `fk_id_pessoa`, `fk_id_estoque`, `quantidade`, `fk_id_pedido`) VALUES
(24, 10, 4, 5, 2),
(28, 8, 1, 5, 1),
(29, 8, 4, 5, 30),
(30, 8, 16, 5, 30),
(31, 8, 4, 5, 30),
(32, 12, 4, 5, 31),
(33, 12, 4, 5, 31),
(34, 12, 4, 5, 31),
(35, 12, 4, 5, 31),
(36, 12, 4, 5, 31),
(37, 12, 15, 5, 31),
(38, 8, 14, 5, 30),
(39, 8, 4, 5, 30),
(40, 8, 13, 5, 30),
(42, 8, 4, 1, 30),
(43, 8, 1, 8, 30),
(44, 8, 9, 4, 30),
(45, 10, 1, 2, 37),
(46, 10, 4, 2, 37),
(47, 10, 15, 4, 37),
(48, 10, 4, 1, 37);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;11)
