-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Set-2022 às 13:38
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senac`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `email`, `endereco`, `telefone`, `turma`) VALUES
(1, 'Vanessa', 'teste@teste.com', 'teste', '999999999', 1),
(2, 'Livia', 'livia@teste.com', 'abc', '999888777', 2),
(3, 'João', 'joao@teste.com', 'ghi', '999999999', 5),
(4, 'Iolanda', 'iolanda@teste.com', 'abdd', '999999999', 3),
(6, 'Julia', 'julia@teste.com', 'ghi', '97776666', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `turma` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `email`, `endereco`, `telefone`, `turma`) VALUES
(1, 'Jeany', 'jeany@teste.com', 'abc', '999999999', 1),
(2, 'Raphael', 'raphael@teste.com', 'def', '888888888', 2),
(3, 'Maria', 'maria@teste.com', 'def', '999999999', 2),
(4, 'Marcia', 'marcia@teste.com', 'aaa', '98887777', 5),
(5, 'Joana', 'joana@teste.com', 'jlm', '96665555', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(30) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nivel` varchar(3) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `nome`, `senha`, `nivel`, `foto`, `email`) VALUES
('Alice', 'Alice', '123789', 'usu', '../fotos/images1.jfif', 'alice@teste.com'),
('Ana', 'Ana', '123456', 'adm', '../fotos/images4.jfif', 'ana@teste.com'),
('Julia', 'Julia', '654321', 'usu', '../fotos/images3.jfif', 'julia@teste.com'),
('Juliana', 'Juliana', 'Juliana', 'usu', '../fotos/images6.jfif', 'juliana@teste.com'),
('Maria', 'Maria', '678910', 'usu', '../fotos/images2.jfif', 'maria@teste.com'),
('Miguel', 'Miguel', '987654', 'usu', '../fotos/images5.jfif', 'miguel@teste.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`login`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
