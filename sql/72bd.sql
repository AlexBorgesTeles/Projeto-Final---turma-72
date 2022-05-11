-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2022 at 12:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `72bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `artigo`
--

CREATE TABLE `artigo` (
  `id_artigo` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  `autor` varchar(200) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artigo`
--

INSERT INTO `artigo` (`id_artigo`, `titulo`, `texto`, `autor`, `data`) VALUES
(1, 'Sample blog post', 'This blog post shows a few different types of content that’s supported and styled with Bootstrap. Basic typography, lists, tables, images, code, and more are all supported as expected.\n\nThis is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.', 'Mark', '2021-01-01'),
(3, 'Josecleysson', 'Quoted text goes here.\r\n\r\nThis is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We\'ll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text.\r\n\r\nExample lists\r\nThis is some additional paragraph placeholder content. It\'s a slightly shorter version of the other highly repetitive body text used throughout. This is an example unordered list:', 'eu', '2022-04-11'),
(11, 'Artigo lalala 2', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'euuo', '2018-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `camisa`
--

CREATE TABLE `camisa` (
  `id_camisa` int(10) NOT NULL,
  `estampa` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `avaliacao` decimal(11,2) NOT NULL,
  `preco` decimal(20,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `camisa`
--

INSERT INTO `camisa` (`id_camisa`, `estampa`, `marca`, `imagem`, `descricao`, `avaliacao`, `preco`) VALUES
(1, 'Camisa adidas praia', 'Adidas', 'adidaspraia.jpg', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '4.00', '50.00'),
(2, 'Camisa bulls', 'Nike', 'nikebull.jpg', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '3.00', '90.00');

-- --------------------------------------------------------

--
-- Table structure for table `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `fk_id_camisa` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `tamanho` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `fk_id_camisa`, `quantidade`, `tamanho`, `cor`) VALUES
(1, 2, 10, 'P', 'Vermelho'),
(2, 2, 5, 'M', 'Preto'),
(3, 2, 3, 'P', 'Preto'),
(4, 1, 2, 'G', 'Preto');

-- --------------------------------------------------------

--
-- Table structure for table `pessoa`
--

CREATE TABLE `pessoa` (
  `id_pessoa` int(50) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `idade` int(3) NOT NULL,
  `telefone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pessoa`
--

INSERT INTO `pessoa` (`id_pessoa`, `nome`, `cpf`, `rg`, `endereco`, `idade`, `telefone`) VALUES
(8, 'Josevaldo de Jesus', '654654654', '98765498.65', 'Rua a', 36, '(12) 987654321'),
(10, 'Wellercleyson', '96666666666', '321987654', 'Rua das flores', 27, '(73)987987987'),
(11, 'Josivalda Creide', '321654987', '654654654', 'rua a', 54, '73 9999 9999'),
(12, 'Golofránia de Deus', '321321321', '8888888888.88', 'aaaaaaaaaaaaaaaaaaaa', 99, '(73) 98888-8888'),
(14, 'lalal', 'maria@vai', '9876543.65', 'lalal', 2, 'lalala'),
(15, 'lalal', 'maria@vai', '9876543.65', 'lalal', 2, 'lalala'),
(16, 'lalal', 'maria@vai', '9876543.65', 'lalal', 2, 'lalala'),
(17, 'lalal', 'maria@vai', '9876543.65', 'lalal', 2, 'lalala');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigo`
--
ALTER TABLE `artigo`
  ADD PRIMARY KEY (`id_artigo`);

--
-- Indexes for table `camisa`
--
ALTER TABLE `camisa`
  ADD PRIMARY KEY (`id_camisa`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigo`
--
ALTER TABLE `artigo`
  MODIFY `id_artigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `camisa`
--
ALTER TABLE `camisa`
  MODIFY `id_camisa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `id_pessoa` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
