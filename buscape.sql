-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Out-2019 às 17:07
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buscape`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `nome` varchar(90) COLLATE latin1_general_ci NOT NULL,
  `descricao` text COLLATE latin1_general_ci,
  `preco` float NOT NULL,
  `imagem` varchar(255) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idProduto`, `nome`, `descricao`, `preco`, `imagem`) VALUES
(38, 'Monitor para PC Full HD LG LED 21,5” - 22MK400H-B', 'O monitor para PC 22MK400H-B da LG conta conta com uma tela LED de 21,5\", posição de tela horizontal e resolução FullHD (1920x1080) para melhor definição e clareza nas imagens reproduzidas. Tenha imagens limpas com a tecnologia AMD Radeon FreeSync, pois permite você aproveitar ainda mais das imagens do monitor LG, eliminando os cortes e repetições de imagem. Instale esse produto de acordo com a sua necessidade, seja na mesa com ajuste de inclinação para melhor visão ou na parede para melhor uso do seu espaço de trabalho.ATENÇÃO: Esse modelo não é uma TV.', 530, 'monitor.jpg'),
(39, 'Celular, Xiaomi, Redmi Note 7, 4GB RAM, 64GB, Versão Global, 6.3\", Azul', '-Sistema Operacional: Android 9.0 Pie\r\n-Tela Full HD+ (2340 × 1080) de 6,3 polegadas\r\n-Câmera Traseira Dupla de 48 MP\r\n-Tipo de Conector: USB Tipo-C e entrada P2 3.5mm para fones de ouvido\r\n-64 GB de armazenamento', 982, 'celularXialme.jpg'),
(41, 'Pen Drive Twist 16GB USB Leitura 10MB/s e Gravação 3MB/s Preto Multilaser - PD588', 'Com capacidade generosa de 16GB, o pen drive Twist da Multilaser facilita a sua vida. Faça backup, transfira dados, compartilhe suas fotos, filmes, músicas, dados pessoais, com USB 2.0 aonde quer que você vá.', 50, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
