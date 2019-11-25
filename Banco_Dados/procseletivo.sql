-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2019 às 17:45
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `procseletivo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_candidato`
--

CREATE TABLE `tb_candidato` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `cep` varchar(12) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(20) COLLATE utf8_bin NOT NULL,
  `senha` varchar(50) COLLATE utf8_bin NOT NULL,
  `email` varchar(150) COLLATE utf8_bin NOT NULL,
  `codigo` varchar(12) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(200) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(20) COLLATE utf8_bin NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_candidato`
--

INSERT INTO `tb_candidato` (`id`, `nome`, `cep`, `cpf`, `senha`, `email`, `codigo`, `endereco`, `telefone`, `id_cargo`) VALUES
(1, 'Luiz', 'asasasa', 'asasasas', 'asasasa', 'sasasasa', 'sasasasa', 'sasasas', 'sasasas', 0),
(2, 'admin', '53300080', '07900648470', 's', 'nadno1176@hotmail.com', '1656411', 'Rua Jose Cariolando ', '81324173283', 1),
(3, 'Luiz Fernando ', '53300080', '07900648470', 'qqqqqqqqq', 'nando1176@hotmail.com', '1729223', 'Rua Jose Cariolando ', '81324173283', 3),
(4, 'admin', '53300080', '07900648470', 's', 'nando1176@hotmail.com', '1738092', 'Rua Jose Cariolando ', '81324173283', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cargo`
--

CREATE TABLE `tb_cargo` (
  `id` int(11) NOT NULL,
  `cargo` varchar(140) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tb_cargo`
--

INSERT INTO `tb_cargo` (`id`, `cargo`) VALUES
(1, 'Aux . Administrativo I'),
(2, 'Administrativo 2'),
(3, 'Administrativo 3'),
(4, 'Administrativo 4');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_candidato`
--
ALTER TABLE `tb_candidato`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Índices para tabela `tb_cargo`
--
ALTER TABLE `tb_cargo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_candidato`
--
ALTER TABLE `tb_candidato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_cargo`
--
ALTER TABLE `tb_cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
