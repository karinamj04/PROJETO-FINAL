CREATE DATABASE raizesdasaude;
USE raizesdasaude;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/10/2025 às 03:08
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
