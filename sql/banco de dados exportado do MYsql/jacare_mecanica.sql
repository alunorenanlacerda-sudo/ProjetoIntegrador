-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/06/2026 às 18:15
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
-- Banco de dados: `jacare_mecanica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `cor` varchar(20) DEFAULT NULL,
  `placa` varchar(10) NOT NULL,
  `cpf_dono` varchar(15) DEFAULT NULL,
  `observacoes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `rua` varchar(100) DEFAULT NULL,
  `numero` varchar(10) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `data_nascimento`, `telefone`, `email`, `cep`, `rua`, `numero`, `bairro`) VALUES
(1, 'Davi GAY', '', NULL, '(32) 92424-2424', 'sougaydemais@gay.com', NULL, NULL, NULL, NULL),
(2, 'Lucas comedor de Gay', '', NULL, '(32) 99942-0741', 'lucas@comedorgay.com', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `colaboradores`
--

CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `data_admissao` date DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `colaboradores`
--

INSERT INTO `colaboradores` (`id`, `nome`, `cpf`, `data_nascimento`, `cargo`, `data_admissao`, `salario`, `telefone`, `email`) VALUES
(1, 'Renan Lacerda', '064.739.746-36', '1988-06-01', 'Mecanico_Chefe', '2026-06-06', 55.00, '32999199120', 'renanlacerdafotografo@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `nome_servico` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `preco_base` decimal(10,2) DEFAULT NULL,
  `tempo_estimado` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `colaboradores`
--
ALTER TABLE `colaboradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
