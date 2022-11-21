-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Jun-2022 às 17:57
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arotec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `funcao` text NOT NULL,
  `obs` text NOT NULL,
  `permissao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id`, `nome`, `sobrenome`, `email`, `senha`, `funcao`, `obs`, `permissao`) VALUES
(1, 'Joao ', 'Afonso Katombela', 'ja3328173@gmail.com', '1234', 'Programador', 'obs', 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `admn`
--

CREATE TABLE `admn` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `email` text NOT NULL,
  `senha` text NOT NULL,
  `funcao` text NOT NULL,
  `obs` text NOT NULL,
  `permissao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admn`
--

INSERT INTO `admn` (`id`, `nome`, `sobrenome`, `email`, `senha`, `funcao`, `obs`, `permissao`) VALUES
(1, 'Joao', 'Afonso Katombela', 'ja3328173@gmail.com', '1234', 'Programador', 'obvs', 'SIM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

CREATE TABLE `aulas` (
  `id` int(11) NOT NULL,
  `curso` text NOT NULL,
  `titulo` text NOT NULL,
  `documento` text NOT NULL,
  `materia` text NOT NULL,
  `quem` text NOT NULL,
  `quando` datetime NOT NULL,
  `link` text NOT NULL,
  `ordem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`id`, `curso`, `titulo`, `documento`, `materia`, `quem`, `quando`, `link`, `ordem`) VALUES
(1, 'Robotica Módulo 1', 'Automação e mecanica', 'meu_BI.pdf', '\r\n    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio nulla iusto ullam nam, eveniet ea ab expedita obcaecati accusantium enim recusandae libero sequi aperiam corrupti soluta. In ipsum numquam consectetur?', 'Irene carinde', '2022-06-11 11:42:09', 'youtube.com', '2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `mensagem` mediumtext NOT NULL,
  `response` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chatbot`
--

INSERT INTO `chatbot` (`id`, `mensagem`, `response`) VALUES
(1, 'bom dia, Boa Tarde, boa noite', 'Olá caríssimo, esperamos que esteja tudo bem consigo, em que podemos ajudar?'),
(2, 'cursos, saber mais, aulas', 'Bom, quanto aos cursos temos os seguintes cursos: <br> <ul><li>Robótica Módulo 1</li><li>Robótica Módulo 2</li><li>Robótica Módulo 1</li><li>Mecanica Industrial</li></ul><br> Estamos no bairro Palanca, junto ao Caiongo Gás. ou ainda pode conferir os cursos em <a href=\'https//www.arotech.org\'>www.arotech.org</a>. O que mais deseja, por favor?'),
(3, 'quem é voce, qual o seu nome, seu nom', 'Sou o AROBOT, prazer em conhecê lo.'),
(4, 'quem sou eu, sou eu', 'Não sei quem tu és, desculpa'),
(5, 'arobot', 'Sim pode escrever o que deseja!'),
(6, 'Joao, João, joão, joao, afonso, Afonso, Katombela', 'Sim meu criador, estou aqui para servi-lo! <br> como se sente hoje?'),
(7, 'estou bem, me sinto bem,estou bem e tu?, estou bem, e tu?, e tu?, e tu, e vc, e voce, e você bem, bm, obrigado', 'Que bom, fico feliz por isso! <br> Tenha um bom dia!'),
(8, 'Como está, Como estás, como estas, como estás, tudo bem, estás bem, como vai, tudo bem?', 'Estou bem obrigado, e tu! Como está hoje?'),
(9, 'oi, olá, ola, ', 'Olá como vai?'),
(10, 'hey, hello, hi', 'Hello dear, welcome to AROTEC!<br> How can i help you please?'),
(11, 'How are you?, how are you, how are u, are you ok, fine?, how are u?, how are you?', 'I\'m fine thanks, and you?'),
(12, 'i am fine, fine, fine thanks, i\'m well, very good, pretty good, thanks alot, i\'m doing great, doing great, i am ok', 'I\'m hapy to know that, wish you a great day'),
(13, 'about,about courses. the courses, how about the courses, abt, know abou, i\'d like to know about, courses, plans, plan, robotic, robotics', 'Ok, thanks for contact us, we\'d like to tell you that the class courses is open yet and we\'ve got 3 courses\' type or category wich is: <b>Robotic Module 1</b>, <b>Robotic Module 2</b>,and <b>Robotic Eletronic and Mechanic</b>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `email` text NOT NULL,
  `assunto` text NOT NULL,
  `mensagem` text NOT NULL,
  `quando` text NOT NULL,
  `hora` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `nome`, `sobrenome`, `email`, `assunto`, `mensagem`, `quando`, `hora`) VALUES
(5, 'fsd', 'fsdf', 'fsdf', 'Dispositivos e softwares personalisados', 'dsf', 'dia 11 de 06 de 2022', 'as 16 e 13');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscricao`
--

CREATE TABLE `inscricao` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `email` text NOT NULL,
  `provincia` text NOT NULL,
  `telefone` text NOT NULL,
  `curso` text NOT NULL,
  `senha` text NOT NULL,
  `data_da_incricao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `inscricao`
--

INSERT INTO `inscricao` (`id`, `nome`, `sobrenome`, `email`, `provincia`, `telefone`, `curso`, `senha`, `data_da_incricao`) VALUES
(3, 'João ', 'Katombela', 'carlos@gmail.com', 'Talatona', '2147483647', 'Robotica Módulo 1', '1234', '2022-03-05 08:21:49'),
(8, '$nome', '$snome', '$email', '$provincia', '$tel', '$curso', '$senha', '0000-00-00 00:00:00'),
(9, 'Kiala', 'Joaquim', 'carlos@gmail.com', 'Benguela', '+351946445629', 'Pequeno Engenheiro', '123456', '2022-03-05 08:31:13'),
(10, 'joao', 'Katombela', 'joaokatumbela82@gmail.com', 'Luanda', '942650427', 'Pequeno Engenheiro', '12345678', '2022-03-05 22:48:15'),
(100, '$nome', '$snome', '$email', '$provincia', '$tel', '$curso', '$senha', '2022-06-11 14:56:47'),
(101, 'Joao Afonso', 'Katumbela', 'carlos2@gmail.com', 'aaaaa', '1234ww', 'Pequeno Engenheiro', '1234', '2022-06-11 13:59:42'),
(102, 'Joao Afonso', 'Katumbela', 'carlos2@gmail.com', 'aaaaa', '1234ww', 'Pequeno Engenheiro', '1234', '2022-06-11 13:59:52'),
(103, 'Jonilson', 'Correia', 'jonilson@gmail.com', 'luanda', '1234567890', 'Pequeno Engenheiro', '1234', '2022-06-11 14:00:49'),
(104, 'Jonilson', 'Correia', 'jonilson@gmail.com', 'luanda', '1234567890', 'Pequeno Engenheiro', '1234', '2022-06-11 14:01:42'),
(105, '', '', '', '', '', 'Robotica Módulo 2', '', '2022-06-11 14:12:42'),
(106, 'joaokatumbela82@gmail.com', 'joaokatumbela82@gmail.com', 'joaokatumbela82@gmail.com', '', '1234', 'Robotica Módulo 2', '1234', '2022-06-11 14:16:19'),
(107, 'Jonilson', 'Jonilson', 'jonilson@gmail.com', 'default - o mesmo do cadastro', '1234', 'Robotica Módulo 2', '1234', '2022-06-11 14:19:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `produto` text NOT NULL,
  `quem` text NOT NULL,
  `quando` text NOT NULL,
  `hora` text NOT NULL,
  `obs` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`id`, `email`, `produto`, `quem`, `quando`, `hora`, `obs`) VALUES
(3, 'jkatumbela9@gmail.com', 'AROBOT', '::1', '11 de Jun de 2022', 'as 0 e 06 minutos.', 'observação');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultados`
--

CREATE TABLE `resultados` (
  `id` int(11) NOT NULL,
  `desafio` text NOT NULL,
  `equipa1` text NOT NULL,
  `equipa2` text NOT NULL,
  `pontos1` text NOT NULL,
  `pontos2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `resultados`
--

INSERT INTO `resultados` (`id`, `desafio`, `equipa1`, `equipa2`, `pontos1`, `pontos2`) VALUES
(1, '2', 'Equipa IPIL', 'Equipa ACADEMIA', '0', '0'),
(4, '2', 'Equipa IPIL', 'Equipa ACADEMIA', '1', '1'),
(5, '2', 'Equipa IPDDF', '', '3', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `unitelcode`
--

CREATE TABLE `unitelcode` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `sobrenome` text NOT NULL,
  `email_do_encarregado` int(11) NOT NULL,
  `tel_do_encarregado` int(11) NOT NULL,
  `idade` int(11) NOT NULL,
  `provincia` text NOT NULL,
  `data_da_inscricao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `unitelcode`
--

INSERT INTO `unitelcode` (`id`, `nome`, `sobrenome`, `email_do_encarregado`, `tel_do_encarregado`, `idade`, `provincia`, `data_da_inscricao`) VALUES
(1, '', '', 0, 0, 0, 'LUANDA', '2022-03-08 20:55:10'),
(2, '', '', 0, 0, 0, 'LUANDA', '2022-03-08 20:57:00'),
(3, '', '', 0, 0, 0, 'LUANDA', '2022-03-08 20:57:10'),
(4, '', '', 0, 0, 0, 'LUANDA', '2022-03-08 20:57:12');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `inscricao`
--
ALTER TABLE `inscricao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loja`
--
ALTER TABLE `loja`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultados`
--
ALTER TABLE `resultados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `unitelcode`
--
ALTER TABLE `unitelcode`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `resultados`
--
ALTER TABLE `resultados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `unitelcode`
--
ALTER TABLE `unitelcode`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
