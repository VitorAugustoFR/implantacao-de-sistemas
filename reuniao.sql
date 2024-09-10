-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/09/2024 às 22:27
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reuniao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ata`
--

CREATE TABLE `ata` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `data_emissao` date NOT NULL,
  `inicio` datetime NOT NULL,
  `termino` datetime NOT NULL,
  `pauta` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `palavras_chave` varchar(50) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `estatus` varchar(100) NOT NULL,
  `setor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ata`
--

INSERT INTO `ata` (`id`, `titulo`, `data_emissao`, `inicio`, `termino`, `pauta`, `descricao`, `palavras_chave`, `tipo`, `estatus`, `setor`) VALUES
(1, 'Quem veio primerio', '2024-09-02', '2024-09-09 16:46:42', '2024-09-30 16:46:42', 'uau', 'blz', 'aaa', 'publica', 'Em processo de emissão', 'rh');

-- --------------------------------------------------------

--
-- Estrutura para tabela `externo`
--

CREATE TABLE `externo` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `externo`
--

INSERT INTO `externo` (`id`, `nome`, `empresa`, `email`, `senha`) VALUES
(1, 'UserE1', 'Google', 'usere1@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `nome` varchar(150) NOT NULL,
  `sexo` varchar(80) NOT NULL,
  `matricula` int(11) NOT NULL,
  `data_nascimento` date NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`nome`, `sexo`, `matricula`, `data_nascimento`, `email`, `senha`) VALUES
('User1', 'Masculino', 1, '1994-09-29', 'user1@gmail.com', '123456'),
('Jô Soares', 'Masculino', 2, '1959-05-24', 'jo@gmail.com', '123456'),
('Tartaruga', 'Masculino', 3, '1980-03-05', 'tartaruga@gmail.com', '123456'),
('', '', 285142, '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `setor`
--

CREATE TABLE `setor` (
  `nome` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sugestoes`
--

CREATE TABLE `sugestoes` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sugestoes`
--

INSERT INTO `sugestoes` (`id`, `data`, `descricao`) VALUES
(1, '2024-09-02', 'frango frito');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ata`
--
ALTER TABLE `ata`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `externo`
--
ALTER TABLE `externo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`matricula`);

--
-- Índices de tabela `sugestoes`
--
ALTER TABLE `sugestoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ata`
--
ALTER TABLE `ata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `externo`
--
ALTER TABLE `externo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `matricula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285143;

--
-- AUTO_INCREMENT de tabela `sugestoes`
--
ALTER TABLE `sugestoes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
