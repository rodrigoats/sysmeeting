-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 15-Ago-2015 às 16:48
-- Versão do servidor: 5.6.25-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sysmeetingdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `palestra`
--

CREATE TABLE IF NOT EXISTS `palestra` (
`id` int(6) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `paletrante` varchar(100) NOT NULL,
  `data` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `palestra`
--

INSERT INTO `palestra` (`id`, `nome`, `paletrante`, `data`) VALUES
(1, 'Desenvolvimento web', 'Rodrigo', '13/08/1985'),
(2, 'Desenvolvimento Java', 'Diogo', '14/08/1985'),
(3, 'Desenvolvimento PHP', 'Fujioka', '16/08/1985'),
(4, 'Teste', 'Test', '123123213'),
(5, 'Palestra teste', 'Palestrante Teste', '13/08/1985'),
(6, 'Palestra teste 2', 'Palestrante Teste 2', '13/08/1985'),
(7, 'Palestra teste 3', 'Palestrante Teste 3', '13/08/1985'),
(8, 'Palestra teste 3', 'Palestrante Teste 3', '13/08/1985'),
(9, 'Teste', 'teste', '123123123'),
(10, 'Java para WEB', 'Rodrigo Fujioka', '15/08/2015'),
(11, 'AHUAH', 'hUAHuh', '123123123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante`
--

CREATE TABLE IF NOT EXISTS `participante` (
`id` int(6) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `documento` varchar(20) DEFAULT NULL,
  `id_palestra` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `participante`
--

INSERT INTO `participante` (`id`, `nome`, `senha`, `documento`, `id_palestra`) VALUES
(5, 'Fulano', '1234556', '1234', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `participante_palestra`
--

CREATE TABLE IF NOT EXISTS `participante_palestra` (
`id` int(6) NOT NULL,
  `presenca` tinyint(1) NOT NULL,
  `data` varchar(20) DEFAULT NULL,
  `id_palestra` int(11) NOT NULL,
  `id_participante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `palestra`
--
ALTER TABLE `palestra`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `participante`
--
ALTER TABLE `participante`
 ADD PRIMARY KEY (`id`), ADD KEY `id_palestra` (`id_palestra`);

--
-- Indexes for table `participante_palestra`
--
ALTER TABLE `participante_palestra`
 ADD PRIMARY KEY (`id`), ADD KEY `id_palestra` (`id_palestra`), ADD KEY `id_participante` (`id_participante`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `palestra`
--
ALTER TABLE `palestra`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `participante`
--
ALTER TABLE `participante`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `participante_palestra`
--
ALTER TABLE `participante_palestra`
MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `participante`
--
ALTER TABLE `participante`
ADD CONSTRAINT `participante_ibfk_1` FOREIGN KEY (`id_palestra`) REFERENCES `palestra` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
