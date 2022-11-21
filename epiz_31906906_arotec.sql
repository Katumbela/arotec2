-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql100.epizy.com
-- Tempo de geração: 26-Jun-2022 às 11:31
-- Versão do servidor: 10.3.27-MariaDB
-- versão do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_31906906_arotec`
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
(1, 'Joao', 'Afonso Katombela', 'ja3328173@gmail.com', '1234', 'Programador', 'obvs', 'SIM'),
(2, 'AROTEC SA', 'AROTEC', 'arotec.info@gmail.com', 'arotec@2022', 'EMPRESA', 'osb', 'SIM'),
(2, 'Jonilson', 'Correia', 'jonilson@arotec.com', 'arotec@2022', 'Project Manager', 'obs', 'SIM'),
(3, 'Irene', 'Marinela', 'irene@arotec.com', 'arotec@2022', 'Teacher', 'obs', 'SIM'),
(4, 'Elvira', 'Cândido', 'elvira@arotec.com', 'arotec@2022', 'Secretary', 'obs', 'SIM'),
(2, 'Cristovão', 'Cacombe', 'cristovao@arotec.com', 'arotec@2022', 'Director', 'obs', 'SIM'),
(2, 'João', 'Afonso Katombela', 'joao@arotec.com', 'arotec@2022', 'Programmer', 'obs', 'SIM');

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
(19, 'RobÃ³tica Modulo 1 ', 'trfht', 'README.md', 'werrewrewqrewqrwqer', '', '2022-06-20 10:08:29', 'tgertertretergrdgrdy', '2');

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
(1, 'bom dia, Boa Tarde, boa noite', 'olÃ¡ carÃ­ssimo, esperamos que esteja tudo bem consigo... em que podemos ajudar por favor.'),
(2, 'cursos, saber mais, aulas', 'Bom, quanto aos cursos temos os seguintes cursos: <br> <ul><li>Robótica Módulo 1</li><li>Robótica Módulo 2</li><li>Robótica Módulo 1</li><li>Mecanica Industrial</li></ul><br> Estamos no bairro Palanca, junto ao Caiongo Gás. ou ainda pode conferir os cursos em <a href=\'https//www.arotech.org\'>www.arotech.org</a>. O que mais deseja, por favor?'),
(3, 'quem é voce, qual o seu nome, seu nome, quem és tu?, quem tu és?, quem és tu, quem tu és, quem é voce, quem é você?, quem é voce?, qual o seu nome?', 'Sou o ARO-BOT, e estou aqui para servi-lo no que precisar. Prazer em conhecÃª-lo.'),
(4, 'quem sou eu, sou eu', 'Não sei quem tu és, desculpa'),
(5, 'arobot', 'Sim pode escrever o que deseja!'),
(6, 'Joao, João, joão, joao, afonso, Afonso, Katombela', 'Sim meu criador, estou aqui para servi-lo! <br> como se sente hoje?'),
(7, 'estou bem, me sinto bem,estou bem e tu?, estou bem, e tu?, e tu?, e tu, e vc, e voce, e você bem, bm, obrigado', 'Que bom, fico feliz por isso! <br> Tenha um bom dia!'),
(8, 'Como está, Como estás, como estas, como estás, tudo bem, estás bem, como vai, tudo bem?', 'Estou bem obrigada, e tu! Como se sente hoje?'),
(9, 'oi, olá, ola, ', 'olÃ¡ como vai?'),
(10, 'hey, hello, hi', 'Hello dear, welcome to AROTEC!<br> How can i help you please?'),
(11, 'How are you?, how are you, how are u, are you ok, fine?, how are u?, how are you?', 'I\'m fine thanks, and you?'),
(12, 'i am fine, fine, fine thanks, i\'m well, very good, pretty good, thanks alot, i\'m doing great, doing great, i am ok', 'I\'m hapy to know that, wish you a great day'),
(13, 'about,about courses. the courses, how about the courses, abt, know abou, i\'d like to know about, courses, plans, plan, robotic, robotics', 'Ok, thanks for contact us, we\'d like to tell you that the class courses is open yet and we\'ve got 3 courses\' type or category wich is: <b>Robotic Module 1</b>, <b>Robotic Module 2</b>,and <b>Robotic Eletronic and Mechanic</b>'),
(15, 'quero saber sobre os cursos', 'Muito bem, seja  bem vindo... Temos variados cursos voltado a tecnologia e inovaÃ§Ã£o e nÃ£o sÃ³. RobÃ³tica MÃ³dulo 2, MecÃ¢nica e eletrÃ´nica industrial, curso de arduino, e o curso de IntroduÃ§Ã£o Ã  InteligÃªncia Artificial. Pode por favor dizer nos o curso do seu interesse para fazer o seu cadastro?'),
(16, 'queria saber sobre os cursos', 'Muito bem, seja bem vindo . temos variados cursos voltado a tecnologia e inovaÃ§Ã£o e nÃ£o sÃ³. RobÃ³tica MÃ³dulo 2, MecÃ¢nica e eletrÃ´nica industrial, curso de arduino, e o curso de IntroduÃ§Ã£o Ã  InteligÃªncia Artificial.'),
(17, 'efre', ''),
(18, 'aa', 'olÃ¡'),
(19, 'aaa', 'carÃ­ssimo'),
(20, 'aas', 'estÃ¡'),
(21, 'quem Ã©s tu?', ''),
(22, 'quem Ã© voce', ''),
(23, 'sss', 'conhecÃª-lo'),
(24, 'ta bom', ''),
(25, 'tÃ¡ bom', ''),
(26, 'trabalham hoje?', 'Sim, trabalhamos de segunda Ã  quinta feira das 9 Ã s 17 horas, excepto nas sextas feiras que trabalhamos apenas atÃ© as 12 horas'),
(27, 'quais sÃ£o os cursos ministrados na arotec', 'A Aro-tec ministra os cursos de RobÃ³tica MÃ³dulo 2, EletrÃ´nica Industrial, Curso de Arduino, Curso de IntroduÃ§Ã£o Ã  InteligÃªncia Artificial, e o curso de Pequeno engenheiro'),
(28, 'tchau', 'tchau, atÃ© mais!'),
(29, 'onde estÃ¡ localizada a arotec?', 'Bairro Palanc avenida pedro de castro vandÃºnem loy. lado oposto a viaÃ§Ã£o e trÃ¢nsito');

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
(8, 'SiÃ£o ', 'Cabeia ', 'siaocabeia@gmail.com', 'Academia, tecnolgias de robotica e IA', 'OlÃ¡ Arotec sou o SiÃ£o Cabeia e quero aprender muito convosco ', 'dia 20 de 06 de 2022', 'as 06 e 30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `curso` text NOT NULL,
  `quem` text NOT NULL,
  `quando` text NOT NULL,
  `oque` text NOT NULL,
  `banner` text NOT NULL,
  `program` text NOT NULL,
  `hab` text NOT NULL,
  `extra` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `curso`, `quem`, `quando`, `oque`, `banner`, `program`, `hab`, `extra`) VALUES
(30, 'RobÃ³tica Modulo 1 ', 'Irene', '2022-06-20 08:21:18', 'Durante 4 Semanas os estudantes irÃ£o desenvolver capacidades de construir um robÃ´ do zero, poder identificar diferentes tipos de robÃ´s e sua aplicaÃ§Ã£o.', 'curesos novos mod.png', 'ConteuÌdo ProgramaÌtico 2022 modulo 1.docx', '- Conhecer o que Ã© robÃ³tica-<br> Compreender o que Ã© robÃ´ e sua funcionalidade;<br> -Identificar robÃ´s quanto a tipologia e implementaÃ§Ã£o;<br> -AnÃ¡lise e resoluÃ§Ã£o de problemas usando a robÃ³tica.', 'Por Mencionar');

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
(112, 'JoÃ£o', 'Afonso Katombela', 'carlos@gmail.com', 'Talatona', '946445629', 'RobÃ³tica Modulo 1', '1234', '2022-06-20 10:06:44'),
(113, 'sandro', 'fernando', 'sandro2006fernando@gmail.com', 'luanda', '934489853', 'RobÃ³tica Modulo 1', 'm9s6kasZ3AVStDi', '2022-06-24 16:57:02');

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
-- Índices para tabela `cursos`
--
ALTER TABLE `cursos`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `inscricao`
--
ALTER TABLE `inscricao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
