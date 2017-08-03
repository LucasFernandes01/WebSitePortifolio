-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 02:08 AM
-- Server version: 5.7.11
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja_desconto`
--

-- --------------------------------------------------------

--
-- Table structure for table `produtos`
--

CREATE TABLE `produtos` (
  `product_id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(6,2) DEFAULT NULL,
  `preco_desconto` decimal(6,2) NOT NULL,
  `codigo_desconto` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produtos`
--

INSERT INTO `produtos` (`product_id`, `nome`, `preco`, `preco_desconto`, `codigo_desconto`) VALUES
(1, 'Camisetas Coffee Before Talkie', '50.00', '5.00', 'XTZ'),
(2, 'Óculos de sol sport', '200.00', '40.00', 'CV8'),
(3, 'Relógio de mergulho', '180.00', '54.00', 'ZTM'),
(4, 'Smartwatch', '700.00', '280.00', 'VG1'),
(5, 'Notebook dell 2 em 1', '1500.00', '750.00', 'ABC'),
(6, 'Colecionáveis action figures', '400.00', '240.00', 'YU3'),
(7, 'Tênis Merrell', '300.00', '210.00', 'D9A'),
(8, 'Drone dji phanton 4', '3300.00', '2640.00', 'LOX'),
(9, 'Bicicleta com 3 lugares', '2000.00', '1800.00', 'KFQ');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `email`, `nome`, `senha`) VALUES
(9, 'meme@meme.com', 'meme', '222'),
(8, 'lucas@email.com', 'lucas', '1234'),
(7, 'email@email.com', 'nome', '123'),
(10, 'dell@email.com', 'dell', 'lala'),
(12, 'hp@email.com', 'hp', 'momo');

-- --------------------------------------------------------

--
-- Table structure for table `usuariosxprodutos`
--

CREATE TABLE `usuariosxprodutos` (
  `usuario_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- Indexes for table `usuariosxprodutos`
--
ALTER TABLE `usuariosxprodutos`
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
