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

ALTER TABLE `camisa`
  ADD PRIMARY KEY (`id_camisa`);

ALTER TABLE `camisa`
  MODIFY `id_camisa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;


INSERT INTO `camisa` (`id_camisa`, `estampa`, `marca`, `imagem`, `descricao`, `avaliacao`, `preco`) VALUES
(1, 'Camisa adidas praia', 'Adidas', 'adidaspraia.jpg', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '4.00', '50.00'),
(2, 'Camisa bulls', 'Nike', 'nikebull.jpg', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '3.00', '90.00'),
(4, 'camisa', 'adiddas', 'saiko.jpg', '', '2.00', '19.00'),
(5, 'ycaro', 'adiddas', 'saiko.jpg', '', '2.00', '19.00'),
(6, 'Harvard', 'Magazine Luiza', 'harvard.jpg', 'Vá para qualquer lugar e se sinta 100% confortável com a camisa da Harvard', '5.00', '189.98'),
(7, 'Camisa do Plmeiras', 'PUMA Brasil', 'palmeirasverde.jpg', 'Não deixe mais ninguém te zuar dizendo que o Palmeiras não tem mundial. Yse a camisa e prove o contrário', '2.00', '299.74'),
(8, 'Super-man', 'C&A', 'supermam.jpg', '', '4.00', '36.47'),
(9, 'The Batman', 'DC Comics', 'batman.jpg', '', '4.00', '49.99'),
(10, 'Formiga', 'Netshoes', 'ant.jpg', 'Vista-se e assuste as pessoas', '4.00', '39.90'),
(11, 'Foco, Força e Café', 'Limits', 'ffc.jpg', '', '5.00', '101.00'),
(12, 'Natureza', 'Havaianas', 'natureza.jpg', '', '2.00', '72.45'),
(13, 'Doguinho sorrindo', 'Guten', 'dogsmile.jpg', '', '5.00', '89.37'),
(14, 'Harry Potter', 'Riachuelo', 'bruxos.jpg', '', '5.00', '49.58'),
(15, 'Bob esponja', 'Renner', 'bob.jpg', '', '3.00', '29.67');
