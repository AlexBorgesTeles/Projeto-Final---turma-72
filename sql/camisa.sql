--
-- Database: `bancoloja`
--

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
(2, 'Camisa bulls', 'Nike', 'nikebull.jpg', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', '3.00', '90.00'),
(4, 'camisa', 'adiddas', 'saiko.jpg', '', '2.00', '19.00'),
(5, 'ycaro', 'adiddas', 'saiko.jpg', '', '2.00', '19.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `camisa`
--
ALTER TABLE `camisa`
  ADD PRIMARY KEY (`id_camisa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `camisa`
--
ALTER TABLE `camisa`
  MODIFY `id_camisa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

