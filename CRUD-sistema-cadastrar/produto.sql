-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Nov-2020 às 00:35
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro_produto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `link` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin2;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `marca`, `modelo`, `preco`, `link`, `descricao`) VALUES
(68, 'Xiaomi Redmi Note 8', 'Xiaomi ', 'Redmi Note 9', '1999', 'https://www.amazon.com.br/Xiaomi-Redmi-Note-128GB-4GB/dp/B088HJ3FCX/ref=asc_df_B088HJ3FCX/?tag=googl', ''),
(69, 'Samsung', 'Samsung', 'Galaxy Z Fold2 5G Mystic', '2999', 'https://shop.samsung.com/br/galaxy-z-fold2-5g/p?cid=br_paid_ppc_google_galaxy-z-fold2_ecommerce_cad3', 'Já foi o melhor da cidade.'),
(70, 'Smartphone Xiaomi ', 'Smartphone Xiaomi ', 'Smartphone Xiaomi Redmi 9A', '3999', 'https://www.amazon.com.br/Smartphone-Xiaomi-Redmi-C%C3%A2meras-Cinza/dp/B08G1V1KZR/ref=asc_df_B08G1V', 'Superando a concorr?ncia.'),
(71, 'XAIOME', 'iphone2', 'EXT-4589', '200', 'https://www.aasfuture.com.br/', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
