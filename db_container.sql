-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 15-Out-2019 às 01:19
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
-- Database: `db_container`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_infocontainers`
--

DROP TABLE IF EXISTS `tb_infocontainers`;
CREATE TABLE IF NOT EXISTS `tb_infocontainers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_container` varchar(12) NOT NULL,
  `dimensoes_container` varchar(4) NOT NULL,
  `paisOrigem_container` varchar(3) NOT NULL,
  `paisAprovaçao_container` varchar(17) NOT NULL,
  `dataFabricaçao_container` date NOT NULL,
  `idFabricante_container` varchar(20) NOT NULL,
  `maxPeso_container` int(11) NOT NULL,
  `maxPesoEmp_container` int(11) NOT NULL,
  `valorTesteRigidez_container` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_infocontainers`
--

INSERT INTO `tb_infocontainers` (`id`, `id_container`, `dimensoes_container`, `paisOrigem_container`, `paisAprovaçao_container`, `dataFabricaçao_container`, `idFabricante_container`, `maxPeso_container`, `maxPesoEmp_container`, `valorTesteRigidez_container`) VALUES
(1, 'w', 'w', 'w', 'w', '2004-01-22', 'w', 1, 1, 1),
(2, 'teste', 'w', 'w', 'w', '2016-02-10', ' w', 1, 1, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
