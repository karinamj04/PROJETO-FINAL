-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/10/2025 às 01:44
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `raizesdasaude`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `nomeMaterno` varchar(100) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `telefoneCelular` varchar(15) NOT NULL,
  `DataNascimento` date NOT NULL,
  `tipo` enum('paciente','admin','recepcionista') DEFAULT 'paciente',
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `nome`, `sobrenome`, `nomeMaterno`, `sexo`, `endereco`, `bairro`, `estado`, `cep`, `cidade`, `email`, `senha`, `telefoneCelular`, `DataNascimento`, `tipo`, `criado_em`) VALUES
('171.344.647-25', 'Pedro', 'Marques', 'Mara', 'M', 'Rua Visconde de Niterói', 'Mangueira', 'RJ', '20943-000', 'Rio de Janeiro', 'pedromarquess2006@gmail.com', '$2y$10$gYdzpFe81jkcyRRvJvklTeKuLOeyZtDXi4gHtAscX53LxbTeJv2Mq', '(21) 97286-4857', '2006-01-21', 'paciente', '2025-10-09 23:41:00'),
('313.123.233-22', 'dwadwa', 'dwadawdwa', 'dwadw', 'M', 'Rua Teodoro da Silva', 'Vila Isabel', 'RJ', '20560-000', 'Rio de Janeiro', 'rafa.reis20032003@gmail.comdwad', '$2y$10$g24MBcxRNoTmQFbqeWGjsu8038LfOe.M34gEFcjw/DVlMcfJNc9YC', '(21) 97286-4222', '3321-12-23', 'paciente', '2025-10-09 23:42:29');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
