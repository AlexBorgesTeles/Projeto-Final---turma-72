CREATE TABLE `carrinho` (
  `id_carrinho` int(11) NOT NULL,
  `fk_id_pessoa` int(11) NOT NULL,
  `fk_id_estoque` int(11) NOT NULL,
  `quantidade` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id_carrinho`);


ALTER TABLE `carrinho`
  MODIFY `id_carrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id_carrinho`, `fk_id_pessoa`, `fk_id_estoque`, `quantidade`) VALUES
(1, 8, 4, 2),
(2, 10, 2, 5),
(3, 11, 1, 10),
(4, 12, 3, 3);
