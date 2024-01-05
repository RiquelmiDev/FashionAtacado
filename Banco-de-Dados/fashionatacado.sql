-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/09/2023 às 23:28
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fashionatacado`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `idprodutocarrinho` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`idprodutocarrinho`, `idproduto`) VALUES
(2, 26),
(83, 58),
(84, 55);

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrossel`
--

CREATE TABLE `carrossel` (
  `idimagemcarrossel` int(11) NOT NULL,
  `nomeimagemcarrossel` varchar(255) NOT NULL,
  `datadecadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `carrossel`
--

INSERT INTO `carrossel` (`idimagemcarrossel`, `nomeimagemcarrossel`, `datadecadastro`) VALUES
(3, 'imagem_64d63e716d2b4.jpg', '2023-08-11'),
(12, 'imagem_64de0b3c66b9c.jpg', '2023-08-17'),
(13, 'imagem_64de0b3caa250.jpg', '2023-08-17'),
(14, 'imagem_64de0b3cbf000.jpg', '2023-08-17'),
(15, 'imagem_64de0b3ccc2b3.jpg', '2023-08-17'),
(16, 'imagem_64de0b3ce9ee7.jpg', '2023-08-17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagemproduto`
--

CREATE TABLE `imagemproduto` (
  `idimagem` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `nomeimagem` varchar(255) NOT NULL,
  `datahoracadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imagemproduto`
--

INSERT INTO `imagemproduto` (`idimagem`, `idproduto`, `nomeimagem`, `datahoracadastro`) VALUES
(1, 1, 'imagem_64d4ec362b88b.jpg', '2023-08-10 15:55:02'),
(2, 1, 'imagem_64d4ec3640a03.jpg', '2023-08-10 15:55:02'),
(3, 1, 'imagem_64d4ec365eee2.jpg', '2023-08-10 15:55:02'),
(4, 1, 'imagem_64d4ec367024b.jpg', '2023-08-10 15:55:02'),
(5, 1, 'imagem_64d4ed2e5ae7c.png', '2023-08-10 15:59:10'),
(6, 1, 'imagem_64d4ed2e645df.jpg', '2023-08-10 15:59:10'),
(7, 1, 'imagem_64d4ed2e70fe5.jpg', '2023-08-10 15:59:10'),
(8, 13, 'imagem_64d6307cd7003.jpg', '2023-08-11 14:58:36'),
(9, 12, 'imagem_64da2087b9a2d.jpg', '2023-08-14 14:39:35'),
(10, 12, 'imagem_64da2087c9d84.jpg', '2023-08-14 14:39:35'),
(11, 12, 'imagem_64da2087d47e7.jpg', '2023-08-14 14:39:35'),
(12, 12, 'imagem_64da2087ea5c8.jpg', '2023-08-14 14:39:35'),
(13, 12, 'imagem_64da2087f0f54.jpeg', '2023-08-14 14:39:35'),
(14, 12, 'imagem_64da20880379b.jpg', '2023-08-14 14:39:35'),
(15, 12, 'imagem_64da22cf7ebfa.png', '2023-08-14 14:49:19'),
(16, 12, 'imagem_64da23bd822a9.jpeg', '2023-08-14 14:53:17');

-- --------------------------------------------------------

--
-- Estrutura para tabela `marcaproduto`
--

CREATE TABLE `marcaproduto` (
  `idmarca` int(11) NOT NULL,
  `nomemarca` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `marcaproduto`
--

INSERT INTO `marcaproduto` (`idmarca`, `nomemarca`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Puma'),
(4, 'SUPREME'),
(5, 'FARM'),
(6, 'ANIMALE'),
(7, 'JOHN JOHN'),
(8, 'LEVI´S'),
(9, 'Calvin Klein'),
(10, 'Gucci');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `idproduto` int(11) NOT NULL,
  `nomeproduto` varchar(255) NOT NULL,
  `valorproduto` float(11,2) NOT NULL,
  `qtdestoque` int(11) NOT NULL,
  `idmarca` int(11) NOT NULL,
  `observacaoproduto` varchar(255) NOT NULL,
  `imagemproduto` varchar(255) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `datadecadastro` datetime NOT NULL,
  `infocompra` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`idproduto`, `nomeproduto`, `valorproduto`, `qtdestoque`, `idmarca`, `observacaoproduto`, `imagemproduto`, `idusuario`, `datadecadastro`, `infocompra`) VALUES
(40, 'BLUSA MASCULINA TREFOIL ', 21.60, 50, 2, 'Blusa Masculina Trefoil Hoodie, Adidas Originals.\r\nA blusa azul marinho é confeccionada em moletom. A peça possui capuz aplicado com cordões embutidos para ajuste, mangas longas, nome e logo da marca aplicados em silk na parte frontal, bolso frontal de mo', 'imagem_64e5167ebe94f.jpg', 1, '2023-08-22 17:11:42', 'ate 2x de R$12,00 <br>\r\nno pix com 10% de desconto'),
(41, 'JAQUETA MASCULINA NSW SPE ', 31.50, 50, 1, 'Jaqueta Masculina Nsw Spe Wvn Ul, Nike.\r\nA jaqueta preta é confeccionada em tecido encorpado com toque de nylon. A peça possui gola redonda em malha encorpada, mangas longas, punhos e barra em malha encorpada, bolsos frontais com fechamento por botão de p', 'imagem_64e516e79b5e9.jpg', 1, '2023-08-22 17:13:27', 'até 2x de R$17,50 <br>\r\nno pix com 10% de desconto'),
(42, 'CALÇA FEMININA  OFF WHITE', 66.00, 20, 5, 'Calça Feminina Tarde De Verão, Farm.\r\nA calça off white é confeccionada em tecido leve. A peça possui cintura alta, cós com elástico embutido na parte posterior, bolsos frontais embutidos, pregas frontais, mix de estampas em cores contrastantes, comprimen', 'imagem_64e5179185c66.jpg', 1, '2023-08-22 17:16:17', 'até 3x de R$25,00 <br>\r\nno pix com 12% de desconto'),
(43, 'SHORT SAIA CREPE  - BEGE ANIMALE', 24.08, 40, 6, 'Short Saia Crepe, Animale.\r\nO short saia bege é confeccionado em crepe. A peça possui cintura alta, bolsos frontais embutidos, pences posteriores, recorte frontal e posterior sobreposto com fenda lateral, forro, comprimento curto, shape solto, caimento re', 'imagem_64e518f7924f8.jpg', 1, '2023-08-22 17:22:15', 'até 2x de R$13,37 <br>\r\nno pix com 10% de desconto'),
(44, 'JAQUETA MASCULINA SNAKE BONES ', 57.51, 36, 7, 'A jaqueta azul é confeccionada em sarja com lavagem em jeans. A peça possui colarinho simples, mangas longas com abotoamento nos punhos, ombros estendidos, recortes frontais e posteriores, bolsos frontais com aba sobreposta e fechamento por botão, bolsos ', 'imagem_64e51961b8059.jpg', 1, '2023-08-22 17:24:01', 'até 3x de R$42,30 <br>\r\nno pix com 10% de desconto'),
(45, 'CAMISA MASCULINA JOHN JOHN ', 25.88, 60, 7, 'T- Shirt Masculina Rx Start John, John John.\r\nA t-shirt cinza é confeccionada em malha de algodão. A peça possui gola careca com acabamento canelado, mangas curtas, estampa escrita e logo e nome da marca em silk e cores contrastantes, caimento reto, shape', 'imagem_64e519b25de4a.jpg', 1, '2023-08-22 17:25:22', 'até 2x de R$14,37 <br>\r\nno pix com 10% de desconto'),
(46, 'CAMISETA FEMININA GRAPHIC ', 18.00, 42, 8, 'Camiseta Feminina Graphic Ringer Mini Tee, Levi\'s.\r\nA camiseta off white é confeccionada em malha de algodão. A peça possui decote redondo, mangas curtas, acabamento canelado em cor contrastante no decote e nas mangas, tag da marca aplicada na parte later', 'imagem_64e51a6347712.jpg', 1, '2023-08-22 17:28:19', 'até 2x de R$9,99<br>\r\nno pix com 10% de desconto'),
(48, 'CALÇA JEANS SARJA CALVIN KLEIN', 50.22, 28, 9, 'Top Jeans Com Botões, Calvin Klein Jeans.\r\nO top azul é confeccionado em sarja com lavagem em jeans. A peça possui decote v, alças finas ajustáveis, vincos frontais, comprimento cropped*, shape justo, caimento reto, acabamento pespontado e fechamento post', 'imagem_64e51b17e1853.jpg', 1, '2023-08-22 17:31:19', 'até 3x de R$18,60 <br>\r\nno pix com 10% de desconto'),
(49, 'CAMISA FEMININA RECORTES ', 20.21, 38, 5, 'Camisa Feminina Recortes Algodão, Farm.\r\na camisa off white é confeccionada em tricoline. A peça possui colarinho francês, mangas longas bufantes com abotoamento nos punhos, bolsos frontais com abas aplicadas, fendas laterais, prega posterior, barra arred', 'imagem_64e51b852be09.jpg', 1, '2023-08-22 17:33:09', 'até 2x de R$11,22 <br>\r\nno pix com 10% de desconto'),
(50, 'BLUSA FEMININA DE MALHA ', 18.45, 34, 6, 'Blusa Feminina De Malha Esportiva Over Com Silk, Animale Jeans.\r\nA blusa off white é confeccionada em malha com superfície texturizada. A peça possui decote redondo com acabamento canelado, mangas curtas com listras em cores contrastantes, ombros estendid', 'imagem_64e51c1032cee.jpg', 1, '2023-08-22 17:35:28', 'até 2x de R$10,25 <br>\r\nno pix com 10% de desconto'),
(55, 'BLUSA DE MOLETOM PLAYSTATION ', 29.70, 25, 7, 'Blusa De Moletom Playstation Symbols, Hype Gamer.\r\nA blusa preta é confeccionada em moletom. A peça possui gola careca com acabamento canelado, mangas longas, estampa em silk e cor contrastante aplicada na parte frontal e posterior, estampa em silk e cor ', 'imagem_64e73eef33cf5.jpg', 1, '2023-08-24 08:28:47', 'até 2x de R$16,49 <br>\r\nno pix com 10% de desconto'),
(56, 'CONJUNTO FITNESS FEMININO ', 22.95, 28, 3, 'O Conjunto Fitness é aquela peça perfeita pra você fugir do básico com muito estilo! Desenvolvida em suplex de alta qualidade, tem um caimento perfeito que modela seu corpo dando conforto e liberdade que toda mulher poderosa merece para se sentir bem e co', 'imagem_64e9e55693902.png', 1, '2023-08-26 08:43:18', 'até 2x de R$12,75 <br>\r\nno pix com 10% de desconto'),
(57, 'SAIA CURTA - ROSA GUCCI 100% Poliéster', 20.70, 31, 10, 'A saia rosa é confeccionada em material sintético com superfície envernizada. A peça possui cintura alta, recortes posteriores e frontais, cós com nome da marca aplicado em metal na parte posterior, bolsos frontais embutidos, forro, comprimento curto, sha', 'imagem_64e9e7a414dc1.jpg', 1, '2023-08-26 08:53:08', 'até 2x de R$11,49 <br>\r\nno pix com 10% de desconto'),
(58, 'T-SHIRT MASCULINA BASIC ', 19.58, 49, 7, 'T-Shirt Masculina Basic, John John.\r\nA t-shirt branca é confeccionada em malha de algodão. A peça possui gola careca com acabamento canelado, mangas curtas, nome da marca aplicado na parte frontal, caimento reto e acabamento pespontado.', 'imagem_64e9e88e8b1f5.jpg', 1, '2023-08-26 08:57:02', 'até 2x de R$10,87 <br>\r\nno pix com 10% de desconto'),
(59, 'CAMISA MASCULINA SLIM BRANCO', 25.61, 35, 9, 'A camisa branca é confeccionada em tricoline. A peça possui colarinho francês, mangas longas com abotoamento nos punhos, logo da marca bordado na altura do tórax, shape solto, caimento reto, acabamento pespontado e fechamento frontal por botões.', 'imagem_64e9e92b8b2e4.jpg', 1, '2023-08-26 08:59:39', 'até 2x de R$14,22 <br>\r\nno pix com 5% de desconto'),
(60, 'CALÇA FEMININA LINHO - BEGE', 47.93, 21, 10, 'A calça bege é confeccionada em tecido leve com toque de linho. A peça possui cintura alta, cós com passantes, pences posteriores, abas sobrepostas na parte posterior, tag da marca aplicada em metal na parte posterior, pregas frontais na altura do cós, bo', 'imagem_64e9e9d7f341b.jpg', 1, '2023-08-26 09:02:31', 'até 3x de R$15,97 <br>\r\nno pix com 10% de desconto');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tamanhoproduto`
--

CREATE TABLE `tamanhoproduto` (
  `idtamanho` int(11) NOT NULL,
  `nometamanhoproduto` varchar(255) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `datahoracadastro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tamanhoproduto`
--

INSERT INTO `tamanhoproduto` (`idtamanho`, `nometamanhoproduto`, `idproduto`, `datahoracadastro`) VALUES
(1, 'P', 9, '2023-08-09 10:18:53'),
(2, 'M', 9, '2023-08-09 10:19:05'),
(3, 'G', 9, '2023-08-09 10:19:05'),
(4, 'GG', 9, '2023-08-09 10:19:05'),
(5, 'GG', 2, '2023-08-09 11:10:24'),
(6, 'M', 5, '2023-08-09 11:10:32'),
(7, 'G', 5, '2023-08-09 11:10:32'),
(8, 'P', 4, '2023-08-09 11:10:45'),
(9, 'M', 4, '2023-08-09 11:10:45'),
(10, 'G', 4, '2023-08-09 11:10:45'),
(11, 'P', 8, '2023-08-09 11:11:31'),
(12, 'M', 7, '2023-08-09 11:13:00'),
(13, 'M', 1, '2023-08-09 11:16:51'),
(14, 'P', 2, '2023-08-09 11:20:42'),
(15, 'M', 2, '2023-08-09 11:20:42'),
(16, 'G', 2, '2023-08-09 11:20:42'),
(17, 'GG', 2, '2023-08-09 11:20:42'),
(18, 'P', 3, '2023-08-09 11:23:00'),
(19, 'M', 3, '2023-08-09 11:23:00'),
(20, 'G', 3, '2023-08-09 11:23:00'),
(21, 'GG', 5, '2023-08-09 11:25:28'),
(22, 'P', 6, '2023-08-09 11:27:32'),
(23, 'M', 6, '2023-08-09 11:27:32'),
(24, 'G', 6, '2023-08-09 11:27:32'),
(25, 'GG', 6, '2023-08-09 11:27:32'),
(26, 'P', 7, '2023-08-09 11:29:36'),
(27, 'M', 7, '2023-08-09 11:29:36'),
(28, 'G', 7, '2023-08-09 11:29:36'),
(29, 'GG', 7, '2023-08-09 11:29:36'),
(30, 'P', 8, '2023-08-09 11:32:00'),
(31, 'M', 8, '2023-08-09 11:32:00'),
(32, 'G', 8, '2023-08-09 11:32:00'),
(33, 'GG', 8, '2023-08-09 11:32:00'),
(34, 'P', 11, '2023-08-10 08:31:10'),
(35, 'P', 12, '2023-08-14 09:47:08'),
(36, 'GG', 12, '2023-08-14 09:49:10'),
(37, 'P', 0, '2023-08-17 08:48:13'),
(38, 'M', 0, '2023-08-17 08:48:13'),
(39, 'G', 0, '2023-08-17 08:48:13'),
(40, 'GG', 0, '2023-08-17 08:48:13'),
(41, 'P', 21, '2023-08-17 08:48:25'),
(42, 'M', 21, '2023-08-17 08:48:25'),
(43, 'G', 21, '2023-08-17 08:48:25'),
(44, 'GG', 21, '2023-08-17 08:48:25'),
(45, 'GG', 8, '2023-08-17 09:18:26'),
(46, 'P', 31, '2023-08-22 17:08:32'),
(47, 'M', 31, '2023-08-22 17:08:32'),
(48, 'G', 31, '2023-08-22 17:08:32'),
(49, 'M', 32, '2023-08-22 17:08:37'),
(50, 'G', 32, '2023-08-22 17:08:37'),
(51, 'M', 33, '2023-08-22 17:09:02'),
(52, 'G', 33, '2023-08-22 17:09:02'),
(53, 'P', 34, '2023-08-22 17:09:06'),
(54, 'M', 34, '2023-08-22 17:09:06'),
(55, 'G', 34, '2023-08-22 17:09:10'),
(56, 'GG', 34, '2023-08-22 17:09:10'),
(57, 'M', 35, '2023-08-22 17:09:24'),
(58, 'G', 35, '2023-08-22 17:09:24'),
(59, 'G', 36, '2023-08-22 17:09:31'),
(60, 'GG', 36, '2023-08-22 17:09:31'),
(61, 'P', 37, '2023-08-22 17:09:37'),
(62, 'M', 37, '2023-08-22 17:09:37'),
(63, 'P', 38, '2023-08-22 17:09:44'),
(64, 'M', 38, '2023-08-22 17:09:44'),
(65, 'G', 38, '2023-08-22 17:09:44'),
(66, 'GG', 38, '2023-08-22 17:09:44'),
(67, 'P', 39, '2023-08-22 17:09:49'),
(68, 'M', 39, '2023-08-22 17:09:49'),
(69, 'G', 39, '2023-08-22 17:09:49'),
(70, 'P', 40, '2023-08-22 17:11:50'),
(71, 'M', 40, '2023-08-22 17:11:50'),
(72, 'G', 40, '2023-08-22 17:11:50'),
(73, 'P', 34, '2023-08-22 17:13:32'),
(74, 'M', 34, '2023-08-22 17:13:32'),
(75, 'G', 34, '2023-08-22 17:13:32'),
(76, 'P', 41, '2023-08-22 17:13:41'),
(77, 'M', 41, '2023-08-22 17:13:41'),
(78, 'G', 41, '2023-08-22 17:13:41'),
(79, 'M', 42, '2023-08-22 17:18:44'),
(80, 'G', 42, '2023-08-22 17:18:44'),
(81, 'P', 43, '2023-08-22 17:22:23'),
(82, 'M', 43, '2023-08-22 17:22:23'),
(83, 'G', 43, '2023-08-22 17:22:23'),
(84, 'P', 44, '2023-08-22 17:25:31'),
(85, 'M', 44, '2023-08-22 17:25:31'),
(86, 'G', 44, '2023-08-22 17:25:31'),
(87, 'P', 45, '2023-08-22 17:25:37'),
(88, 'M', 45, '2023-08-22 17:25:37'),
(89, 'G', 45, '2023-08-22 17:25:37'),
(90, 'M', 46, '2023-08-22 17:28:27'),
(91, 'G', 46, '2023-08-22 17:28:27'),
(92, 'M', 47, '2023-08-22 17:31:28'),
(93, 'G', 47, '2023-08-22 17:31:28'),
(94, 'P', 48, '2023-08-22 17:31:34'),
(95, 'M', 48, '2023-08-22 17:31:34'),
(96, 'G', 48, '2023-08-22 17:31:34'),
(97, 'P', 49, '2023-08-22 17:33:18'),
(98, 'M', 49, '2023-08-22 17:33:18'),
(99, 'P', 50, '2023-08-22 17:35:36'),
(100, 'M', 50, '2023-08-22 17:35:36'),
(101, 'G', 50, '2023-08-22 17:35:36'),
(102, 'M', 51, '2023-08-23 11:02:22'),
(103, 'G', 51, '2023-08-23 11:02:22'),
(104, 'GG', 51, '2023-08-23 11:02:22'),
(105, 'P', 52, '2023-08-23 11:08:27'),
(106, 'M', 52, '2023-08-23 11:08:27'),
(107, 'P', 53, '2023-08-24 08:20:05'),
(108, 'M', 53, '2023-08-24 08:20:05'),
(109, 'P', 54, '2023-08-24 08:23:01'),
(110, 'M', 54, '2023-08-24 08:23:01'),
(111, 'M', 55, '2023-08-26 08:43:27'),
(112, 'G', 55, '2023-08-26 08:43:27'),
(113, 'P', 56, '2023-08-26 08:43:34'),
(114, 'M', 56, '2023-08-26 08:43:34'),
(115, 'G', 56, '2023-08-26 08:43:34');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `loginusuario` varchar(255) NOT NULL,
  `senhausuario` varchar(255) NOT NULL,
  `datahoracadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `loginusuario`, `senhausuario`, `datahoracadastro`) VALUES
(1, 'teste@gmail.com', '12345', '0000-00-00'),
(2, 'teste2@gmail.com', '123', '2023-08-16');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`idprodutocarrinho`);

--
-- Índices de tabela `carrossel`
--
ALTER TABLE `carrossel`
  ADD PRIMARY KEY (`idimagemcarrossel`);

--
-- Índices de tabela `imagemproduto`
--
ALTER TABLE `imagemproduto`
  ADD PRIMARY KEY (`idimagem`);

--
-- Índices de tabela `marcaproduto`
--
ALTER TABLE `marcaproduto`
  ADD PRIMARY KEY (`idmarca`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idproduto`);

--
-- Índices de tabela `tamanhoproduto`
--
ALTER TABLE `tamanhoproduto`
  ADD PRIMARY KEY (`idtamanho`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `idprodutocarrinho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `carrossel`
--
ALTER TABLE `carrossel`
  MODIFY `idimagemcarrossel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `imagemproduto`
--
ALTER TABLE `imagemproduto`
  MODIFY `idimagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `marcaproduto`
--
ALTER TABLE `marcaproduto`
  MODIFY `idmarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idproduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de tabela `tamanhoproduto`
--
ALTER TABLE `tamanhoproduto`
  MODIFY `idtamanho` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
