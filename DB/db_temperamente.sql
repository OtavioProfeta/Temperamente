-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2023 às 16:16
-- Versão do servidor: 10.4.24-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `db_temperamente`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_colerico`
--

CREATE TABLE `tb_colerico` (
  `id` int(11) NOT NULL,
  `musicas` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `livros` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `profissoes` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `hobbies` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `filmes` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `series` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `autor` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_fleumatico`
--

CREATE TABLE `tb_fleumatico` (
  `id` int(11) NOT NULL,
  `musicas` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `livros` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `profissoes` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `hobbies` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `filmes` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `series` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `autor` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_fleumatico`
--

INSERT INTO `tb_fleumatico` (`id`, `musicas`, `livros`, `profissoes`, `hobbies`, `filmes`, `series`, `autor`) VALUES
(2, 'sunflower', '12 regra para a vida - Jordan Pe', 'TI', 'Games', 'Planeta dos macacos', 'Stranger Things', 'João ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_melancolico`
--

CREATE TABLE `tb_melancolico` (
  `id` int(11) NOT NULL,
  `musicas` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `livros` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `profissoes` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `hobbies` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `filmes` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `series` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `autor` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_melancolico`
--

INSERT INTO `tb_melancolico` (`id`, `musicas`, `livros`, `profissoes`, `hobbies`, `filmes`, `series`, `autor`) VALUES
(2, 'After Dark', 'DUNA', 'Analista de Sistemas', 'Tocar flauta', 'O Senhor dos Anéis', 'Sherlock Holmes', 'Otávio Profeta'),
(3, 'House of Cards - Scorpions', 'Persuasão - Jane Austen', 'Desenvolvedor de Sistemas', 'Leitura', 'O Senhor dos Anéis: O Retorno do', 'Chernobyl', 'Joyce Fagundes'),
(4, 'moonlight sonata 3rd movement - ', 'O poder do agora', 'Musico', 'Tocar algum instrumento', 'Em busca de liberdade', 'The Witcher', 'João Gabriel'),
(5, 'Mili: In Hell We Live(Lament)', 'Vinte Mil Léguas Submarinas', 'Esport player', 'Jogar Rimworld', 'Gato de Botas 2', 'Odd Taxi (anime)', 'Luan');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_sanguineo`
--

CREATE TABLE `tb_sanguineo` (
  `id` int(11) NOT NULL,
  `musicas` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `livros` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `profissoes` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `hobbies` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `filmes` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `series` varchar(32) CHARACTER SET utf8 DEFAULT NULL,
  `autor` varchar(32) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_sanguineo`
--

INSERT INTO `tb_sanguineo` (`id`, `musicas`, `livros`, `profissoes`, `hobbies`, `filmes`, `series`, `autor`) VALUES
(2, 'Pra Mudar a Minha Vida - Zezé Di', '.', 'Fisioterapeuta', 'Jogar Bola (Futebol)', '4 vidas de um cachorro ', 'Suits', 'Weslei');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `senha` varchar(100) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `senha`) VALUES
(1, 'Otávio Profeta', 'prophetT936');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_colerico`
--
ALTER TABLE `tb_colerico`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_fleumatico`
--
ALTER TABLE `tb_fleumatico`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_melancolico`
--
ALTER TABLE `tb_melancolico`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_sanguineo`
--
ALTER TABLE `tb_sanguineo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_colerico`
--
ALTER TABLE `tb_colerico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tb_fleumatico`
--
ALTER TABLE `tb_fleumatico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_melancolico`
--
ALTER TABLE `tb_melancolico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_sanguineo`
--
ALTER TABLE `tb_sanguineo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
