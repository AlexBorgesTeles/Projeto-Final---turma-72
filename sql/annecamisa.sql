-- --------------------------------------------------------

--
-- Estrutura para tabela `camisa`
--

CREATE  TABLE IF NOT EXISTS `camisa` (
  `id_camisa` int(50) NOT NULL,
  `estampa` varchar(200) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `imagem` varchar(400) NOT NULL,
  `descricao` text NOT NULL,
  `avaliacao` varchar(20) NOT NULL,
  `preco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `camisa`
--

INSERT INTO `camisa` (`estampa`, `marca`, `imagem`, `descricao`, `avaliacao`, `preco`) VALUES
( 'Harvard', 'Magazine Luiza', 'harvard.jpg', 'Vá para qualquer lugar e se sinta 100% confortável com a camisa da Harvard', '5.00', '189,66'),
( 'Camisa do Plmeiras', 'PUMA Brasil', 'palmeirasverde.jpg', 'Não deixe mais ninguém te zuar dizendo que o Palmeiras não tem mundial. Yse a camisa e prove o contrário', '2.00', '299,90'),
( 'Super-man', 'C&A', 'supermam.jpg', '', '4.00', '36,99'),
( 'The Batman', 'DC Comics', 'batman.jpg', '', '4.00', '49,90'),
( 'Formiga', 'Netshoes', 'ant.jpg', 'Vista-se e assuste as pessoas', '4.00', '39,90'),
( 'Foco, Força e Café', 'Limits', 'ffc.jpg', '', '5.00', '101,40'),
( 'Natureza', 'Havaianas', 'natureza.jpg', '', '2.00', '72,99'),
( 'Doguinho sorrindo', 'Guten', 'dogsmile.jpg', '', '5.00', '89,90'),
( 'Harry Potter', 'Riachuelo', 'bruxos.jpg', '', '5.00', '49,90'),
('Bob esponja', 'Renner', 'bob.jpg', '', '3.00', '29,50');

--
-- Índices para tabelas despejadas
--
