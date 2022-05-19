CREATE TABLE if not exists `estoque` (
  `id_estoque` int(11) NOT NULL,
  `fk_id_camisa` int(11) NOT NULL,
  `quantidade_e` int(11) NOT NULL,
  `tamanho` varchar(50) NOT NULL,
  `cor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- AUTO_INCREMENT de tabela `estoque`
--

ALTER TABLE `estoque` ADD PRIMARY KEY(`id_estoque`);
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=0;
--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`fk_id_camisa`, `quantidade_e`, `tamanho`, `cor`) VALUES
(4, 7, 'M', 'Verde'),
(4, 8, 'P', 'Amarelo'),
(5, 2, 'G', 'Vermelho'),
(5, 3, 'P', 'Preto');
