
CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fk_id_usuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `status` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);


ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;


INSERT INTO `pedido` (`id_pedido`, `fk_id_usuario`, `data`, `status`) VALUES
(1, 1, '2022-05-04', 'Em andamento'),
(2, 2, '2022-05-11', 'Entregue'),
(3, 1, '2022-05-04', 'Indefinido'),
(4, 2, '2022-05-01', 'Aguardando o comprador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `pedido`
--
