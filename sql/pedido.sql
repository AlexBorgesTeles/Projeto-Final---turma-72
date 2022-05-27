-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 28-Maio-2022 às 00:29
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
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fk_id_pessoa` int(11) NOT NULL,
  `data` date NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `fk_id_pessoa`, `data`, `status`) VALUES
(2, 10, '2022-05-11', 'Entregue'),
(3, 11, '2022-05-04', 'Indefinido'),
(4, 12, '2022-05-01', 'Aguardando o comprador'),
(5, 18, '2022-05-21', 'Em andamento'),
(6, 20, '2022-05-21', 'Entregue'),
(7, 19, '2022-05-21', 'Em andamento'),
(9, 21, '2022-05-21', 'Em andamento'),
(15, 21, '2022-05-21', 'Entregue'),
(16, 20, '2022-05-21', 'Em andamento'),
(17, 20, '2022-05-21', 'Em andamento'),
(18, 20, '2022-05-21', 'Em andamento'),
(19, 20, '2022-05-21', 'Em andamento'),
(20, 20, '2022-05-21', 'Em andamento'),
(21, 20, '2022-05-21', 'Em andamento'),
(22, 20, '2022-05-21', 'Em andamento'),
(23, 20, '2022-05-21', 'Em andamento'),
(24, 20, '2022-05-21', 'Em andamento'),
(25, 20, '2022-05-21', 'Em andamento'),
(26, 20, '2022-05-21', 'Em andamento'),
(27, 20, '2022-05-21', 'Em andamento'),
(28, 20, '2022-05-21', 'Em andamento'),
(29, 20, '2022-05-21', 'Em andamento'),
(30, 8, '2022-05-25', 'Em andamento'),
(31, 12, '2022-05-26', 'Em andamento'),
(32, 12, '2022-05-26', 'Em andamento'),
(33, 12, '2022-05-26', 'Em andamento'),
(34, 12, '2022-05-26', 'Em andamento'),
(35, 12, '2022-05-26', 'Em andamento'),
(36, 12, '2022-05-26', 'Em andamento');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;
