-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30-Nov-2017 às 14:59
-- Versão do servidor: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rebel_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `categoria` varchar(32) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `qtd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `categoria`, `preco`, `qtd`) VALUES
(1, 'Alface Crespa', 'Hortaliça', '10.00', 0),
(2, 'Beringela', 'Legume', '100.00', 0),
(3, 'Tangerina', 'Fruta', '100.00', 0),
(4, 'Maçã', 'Fruta', '2.87', 0),
(5, 'Manga', 'Fruta', '100.00', 0),
(6, 'Tomate', 'Fruta', '1.48', 0),
(7, 'Cebola', 'Hortaliça', '100.00', 0),
(8, 'Couve', 'Hortaliça', '100.00', 0),
(9, 'Couve-flor', 'Hortaliça', '101.00', 0),
(16, 'Abóbora', 'Fruta', '3.25', 0),
(17, 'Abóbora', 'Fruta', '3.25', 0),
(18, 'Amendoim', 'Fruta', '1.35', 0),
(19, 'Repolho', 'Hortaliça', '8.00', 0),
(20, 'titulo', 'categoria', '0.00', 0),
(21, 'Laranja', 'Fruta', '3.00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
