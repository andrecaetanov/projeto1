-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 01-Nov-2017 às 19:50
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `plataforma`
--

DROP TABLE IF EXISTS `plataforma`;
CREATE TABLE IF NOT EXISTS `plataforma` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `plataforma`
--

INSERT INTO `plataforma` (`id`, `nome`) VALUES
(1, 'PC'),
(2, 'Wii U'),
(3, 'GameBoy Color'),
(4, 'PS3'),
(5, 'Playstation 4'),
(6, 'Mega Drive'),
(7, 'Xbox One');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `descricao` mediumtext,
  `data_lancamento` date DEFAULT NULL,
  `plataforma_id` int(11) DEFAULT NULL,
  `tipo_id` int(11) DEFAULT NULL,
  `quantidade_estoque` int(11) DEFAULT NULL,
  `usado` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `plataforma_id` (`plataforma_id`),
  KEY `tipo_id` (`tipo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `preco`, `descricao`, `data_lancamento`, `plataforma_id`, `tipo_id`, `quantidade_estoque`, `usado`) VALUES
(1, 'The Witcher 3', '50.25', NULL, NULL, 1, 1, 1, 0),
(2, 'Mega Drive', '99.99', NULL, NULL, 6, 3, 1, 0),
(3, 'Super Luigi U', '85.99', NULL, NULL, 2, 1, 1, 1),
(4, 'Pokemon Crystal Version', '49.99', NULL, NULL, 3, 1, 1, 0),
(5, 'GTA 5', '99.90', NULL, NULL, 4, 1, 1, 0),
(7, 'Playstation 4', '1299.99', NULL, NULL, 5, 3, 1, 0),
(9, 'Overwatch', '150.99', NULL, NULL, 1, 1, 1, 0),
(10, 'Destiny 2', '150.99', NULL, NULL, 1, 1, 1, 0),
(11, 'Need for Speed Most Wanted', '99.99', NULL, NULL, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `nome`) VALUES
(1, 'Jogo'),
(2, ''),
(3, 'Console');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`plataforma_id`) REFERENCES `plataforma` (`id`),
  ADD CONSTRAINT `produto_ibfk_2` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;