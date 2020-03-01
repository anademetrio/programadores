-- phpMyAdmin SQL Dump
-- version 4.0.0
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Mar-2020 às 19:07
-- Versão do servidor: 5.5.14
-- versão do PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `programadores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE IF NOT EXISTS `cargos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(100) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`id`, `cargo`) VALUES
(1, 'Fullstack Developer'),
(6, 'Frontend Developer'),
(7, 'Backend Developer'),
(8, 'DevOps');

-- --------------------------------------------------------

--
-- Estrutura da tabela `programadores`
--

CREATE TABLE IF NOT EXISTS `programadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET latin1 NOT NULL,
  `idade` int(11) NOT NULL,
  `cidade` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cargo` int(11) NOT NULL,
  `experiencia` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `programadores`
--

INSERT INTO `programadores` (`id`, `nome`, `idade`, `cidade`, `email`, `cargo`, `experiencia`) VALUES
(1, 'Ana Paula Ribeiro Demetrio', 25, 'Itapecerica da Serra', 'paula@gmail.com', 1, 3),
(5, 'Ana Paula Ribeiro Demetrio', 38, 'Itapecerica da Serra', 'paula_demetrio@hotmail.com', 1, 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
