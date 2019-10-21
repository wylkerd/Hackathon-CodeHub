-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Out-2019 às 01:21
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_login`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_funcionarios`
--

DROP TABLE IF EXISTS `tb_funcionarios`;
CREATE TABLE IF NOT EXISTS `tb_funcionarios` (
  `id_funcionario` int(11) NOT NULL AUTO_INCREMENT,
  `nm_funcionario` varchar(50) NOT NULL,
  `tel_funcionario` varchar(30) NOT NULL,
  `rg_funcionario` varchar(20) NOT NULL,
  `cpf_funcionario` char(11) NOT NULL,
  `email_funcionario` varchar(50) NOT NULL,
  `senha_funcionario` varchar(32) NOT NULL,
  PRIMARY KEY (`id_funcionario`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_funcionarios`
--

INSERT INTO `tb_funcionarios` (`id_funcionario`, `nm_funcionario`, `tel_funcionario`, `rg_funcionario`, `cpf_funcionario`, `email_funcionario`, `senha_funcionario`) VALUES
(1, 'wylkerd santos', '13988477374', '565656565', '24242424242', 'wylkerd@hotmail.com', '25d55ad283aa400af464c76d713c07ad'),
(33, 'Victor Monstro', '13988757574', '524863697', '88547777542', 'victorM@gmail.com', '1bbd886460827015e5d605ed44252251');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
