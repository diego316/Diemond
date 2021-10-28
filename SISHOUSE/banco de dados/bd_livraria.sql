-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 21/12/2013 às 22:25
-- Versão do servidor: 5.5.34-0ubuntu0.13.10.1
-- Versão do PHP: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `bd_livraria`
--
CREATE DATABASE IF NOT EXISTS `bd_livraria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bd_livraria`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `CONSUMIDOR`
--

DROP TABLE IF EXISTS `CONSUMIDOR`;
CREATE TABLE IF NOT EXISTS `CONSUMIDOR` (
  `cod_con` int(11) NOT NULL,
  `nome_con` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf_con` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `id_con` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ender_con` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cidade_con` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estado_con` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `datanasc_con` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `prof_con` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Fazendo dump de dados para tabela `CONSUMIDOR`
--

INSERT INTO `CONSUMIDOR` (`cod_con`, `nome_con`, `cpf_con`, `id_con`, `ender_con`, `cidade_con`, `estado_con`, `datanasc_con`, `prof_con`, `id`) VALUES
(1111, 'Marcelo de Lima da Silva', '12313123121', '123123123', 'SQN 113', 'Brasília', 'DF', '19730311', 'Militar', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
